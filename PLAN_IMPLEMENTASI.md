# Rencana Implementasi: Sistem Progress & Locking Materi

## Latar Belakang
Client meminta sistem berurutan (sequential) pada halaman siswa di bagian materi:
1. **Materi** (Himpunan, Relasi, Fungsi, Korespondensi) — harus berurutan, materi sebelumnya harus selesai sebelum membuka materi berikutnya.
2. **Sub-materi / Page** dalam satu materi — halaman-halaman dalam satu materi juga harus berurutan, tidak bisa diskip.

---

## Pendekatan Hybrid

| Layer | Teknologi | Fungsi |
|-------|-----------|--------|
| **Sub-page tracking** (antar halaman dalam 1 materi) | `localStorage` browser | Tracking progress Pengertian → Penyajian → Latihan → Kuis |
| **Materi locking** (antar 4 materi) | Database `nilai_siswa` + `kkm` | Materi berikutnya terbuka jika nilai kuis sebelumnya ≥ KKM |

### Kenapa Hybrid?
- ✅ Sub-page tracking ringan, cukup client-side (tidak perlu bolak-balik server)
- ✅ Materi locking pakai data riil nilai siswa — tersimpan permanen, guru bisa lihat
- ✅ Tidak perlu tabel/kolom baru — pakai tabel `nilai_siswa` & `kkm` yang sudah ada
- ✅ KKM jadi natural gatekeeper tiap materi

---

## Arsitektur Progress

### Layer 1: Sub-page Progress (localStorage)

```javascript
// Key: 'skripsi_progress'
{
  "materi_1": {        // Himpunan
    "sub": {
      "pengertian": false,   // Pengertian Himpunan (bab_1)
      "penyajian": false,    // Penyajian Himpunan (lanjut_1)
      "latihan": false,      // Latihan 1
      "kuis": false          // Kuis 1
    },
    "pages": {
      "pengertian": 1,       // Page terakhir yang dicapai (1-4)
      "latihan": 1           // Page terakhir yang dicapai (1-3)
    }
  },
  "materi_2": {        // Relasi
    "sub": {
      "pengertian": false,
      "penyajian": false,
      "latihan": false,
      "kuis": false
    },
    "pages": {
      "pengertian": 1,
      "latihan": 1
    }
  },
  "materi_3": {        // Fungsi
    "sub": {
      "pengertian": false,
      "penyajian": false,
      "latihan": false,
      "kuis": false
    },
    "pages": {
      "pengertian": 1,
      "latihan": 1
    }
  },
  "materi_4": {        // Korespondensi
    "sub": {
      "pengertian": false,
      "penyajian": false,
      "latihan": false,
      "kuis": false
    },
    "pages": {
      "pengertian": 1,
      "latihan": 1
    }
  }
}
```

#### Alur Logika Sub-page

| Kondisi | Hasil |
|---------|-------|
| `materi_1.sub.pengertian == false` | Materi 1 halaman Penyajian & seterusnya terkunci |
| `materi_1.sub.penyajian == false` | Materi 1 halaman Latihan & Kuis terkunci |
| `materi_1.sub.latihan == false` | Materi 1 halaman Kuis terkunci |

### Layer 2: Materi Lock (Database)

Materi berikutnya terbuka **hanya jika** nilai kuis sebelumnya **≥ KKM**:

```
Materi 1 (Himpunan):
  → Kuis 1 → MAX(nilai) >= KKM 1?   → ✅ Materi 2 terbuka
                                       ❌ Materi 2 terkunci

Materi 2 (Relasi):
  → Kuis 2 → MAX(nilai) >= KKM 2?   → ✅ Materi 3 terbuka
                                       ❌ Materi 3 terkunci

Materi 3 (Fungsi):
  → Kuis 3 → MAX(nilai) >= KKM 3?   → ✅ Materi 4 terbuka
                                       ❌ Materi 4 terkunci
```

#### Query di Layout (main.blade.php)

```php
$nilaiSiswa = NilaiSiswa::where('id_user', Auth::id())
    ->whereIn('jenis_kuis', ['Kuis 1','Kuis 2','Kuis 3','Kuis 4'])
    ->selectRaw('jenis_kuis, MAX(nilai) as max_nilai')
    ->groupBy('jenis_kuis')
    ->pluck('max_nilai', 'jenis_kuis');

$kkmList = Kkm::pluck('nilai', 'kuis');
```

---

## Fase Implementasi

### Fase 1: File `public/js/progress.js` (Progress Manager)

File baru yang menangani semua progress client-side:

| Fungsi | Deskripsi |
|--------|-----------|
| `ProgressManager.init()` | Inisialisasi struktur progress di localStorage jika belum ada |
| `ProgressManager.getProgress()` | Mengambil seluruh data progress |
| `ProgressManager.isSubPageUnlocked(materiId, subPage)` | Cek apakah sub-page tertentu bisa diakses |
| `ProgressManager.getCurrentPage(materiId, subPage)` | Ambil halaman terakhir yang dicapai |
| `ProgressManager.markPageDone(materiId, subPage, pageNum)` | Tandai page tertentu selesai |
| `ProgressManager.markSubPageDone(materiId, subPage)` | Tandai seluruh sub-page selesai (setelah halaman terakhir) |
| `ProgressManager.isMateriCompleted(materiId)` | Cek apakah semua sub dalam materi selesai |
| `ProgressManager.getNextSubPage(materiId, currentSub)` | Dapatkan sub-page berikutnya untuk redirect |

### Fase 2: Page-Level Locking (dalam 1 View)

Beberapa view memiliki pagination internal (multi-page dalam 1 file blade):

#### `bab_1.blade.php` (Pengertian Himpunan — 4 halaman pagination)
- ✅ Page 1: selalu terbuka
- 🔒 Page 2, 3, 4: terbuka berurutan (page sebelumnya harus selesai)
- ✅ Tombol "Selanjutnya": navigasi antar page
- ✅ Tombol "Selesai" di page 4 → mark `pengertian = true` + redirect ke Penyajian

#### `bab_2.blade.php`, `bab_3.blade.php`, `bab_4.blade.php`
- Struktur serupa dengan `bab_1`

#### `latihan1.blade.php` (Latihan 1)
- Tombol "Periksa" harus jawab **benar semua** baru bisa lanjut
- ✅ Jika benar → mark `latihan = true`

#### `latihan2.blade.php` (Latihan 2 — 3 halaman pagination)
- Page 1, 2, 3: masing-masing harus dicek jawabannya benar dulu
- ✅ Page 3 selesai + jawaban benar → mark `latihan = true`

#### `latihan3.blade.php`, `latihan4.blade.php`
- Sama seperti latihan lainnya

#### `lanjut_1.blade.php` (Penyajian Himpunan)
- Tombol "Selanjutnya" → mark `penyajian = true` + redirect ke Latihan

#### `lanjut_2.blade.php`, `lanjut_3_1.blade.php`, `lanjut_4.blade.php`
- Sama seperti `lanjut_1`

### Fase 3: Sub-Materi Locking (Antar Halaman dalam 1 Materi)

Urutan dalam setiap materi:
```
Pengertian → Penyajian → Latihan → Kuis
```

| Halaman | Terbuka Jika |
|---------|-------------|
| Pengertian | Selalu (materi terbuka) |
| Penyajian | `materi_X.sub.pengertian == true` |
| Latihan | `materi_X.sub.penyajian == true` |
| Kuis | `materi_X.sub.latihan == true` |

Implementasi:
- Saat load halaman, `progress.js` cek localStorage
- Jika sub-page terkunci:
  - Tampilkan overlay "🔒 Terkunci, selesaikan halaman sebelumnya"
  - Sembunyikan konten asli
  - Tombol "Kembali" ke halaman sebelumnya

### Fase 4: Materi-Level Locking (Database)

| Materi | Terbuka Jika |
|--------|-------------|
| 1. Himpunan | ✅ **Selalu** terbuka (pintu masuk) |
| 2. Relasi | `nilai_siswa` Kuis 1 ≥ KKM Kuis 1 |
| 3. Fungsi | `nilai_siswa` Kuis 2 ≥ KKM Kuis 2 |
| 4. Korespondensi | `nilai_siswa` Kuis 3 ≥ KKM Kuis 3 |

Cek dilakukan server-side di layout, data dikirim ke view via variabel PHP:
```php
$materiUnlocked = [
    'materi_1' => true,
    'materi_2' => ($nilaiSiswa['Kuis 1'] ?? 0) >= ($kkmList['Kuis 1'] ?? 0),
    'materi_3' => ($nilaiSiswa['Kuis 2'] ?? 0) >= ($kkmList['Kuis 2'] ?? 0),
    'materi_4' => ($nilaiSiswa['Kuis 3'] ?? 0) >= ($kkmList['Kuis 3'] ?? 0),
];
```

### Fase 5: Sidebar Dinamis (`main.blade.php`)

Sidebar menampilkan status dari **dua sumber**:
1. **Ikon materi** (Himpunan / Relasi / dll) → dari **DB** (server-side)
2. **Ikon sub-page** (Pengertian / Penyajian / dll) → dari **localStorage** (client-side)

#### Tampilan visual

```
📘 Peta Konsep

🔓 1. Himpunan ▼
   ✅ Pengertian Himpunan
   ➡  Penyajian Himpunan
   🔒 Latihan
   🔒 Kuis

🔒 2. Relasi ▼
   🔒 Pengertian Relasi
   🔒 Penyajian Relasi
   🔒 Latihan
   🔒 Kuis
   [nilai Kuis 1 belum mencapai KKM]

🔒 3. Fungsi ▼
   ...

🔒 4. Korespondensi satu-satu ▼
   ...

📘 Evaluasi
```

#### Keterangan Ikon
| Ikon | Arti | Sumber |
|------|------|--------|
| 🔓 | Materi terbuka (kuis sebelumnya ≥ KKM) | DB (server) |
| 🔒 | Materi terkunci (kuis sebelumnya < KKM) | DB (server) |
| ➡ | Sub-page sedang berjalan (bisa diakses) | localStorage |
| ✅ | Sub-page sudah selesai | localStorage |
| 🔒 | Sub-page terkunci (sub sebelumnya belum selesai) | localStorage |

#### Perubahan di `main.blade.php`
- Tambahkan query DB di bagian atas layout untuk ambil nilai siswa & KKM
- Tambahkan `<script src="{{ asset('js/progress.js') }}"></script>`
- Loop sidebar items dengan conditional class lock/unlock
- Link yang terkunci: `pointer-events: none`, warna abu-abu, cursor: default
- Script inline untuk baca localStorage dan update ikon sub-page

---

## Daftar File yang Akan Disentuh

### File Baru
| File | Keterangan |
|------|-----------|
| `public/js/progress.js` | Progress manager client-side (localStorage) |

### File Diubah
| File | Perubahan |
|------|-----------|
| `resources/views/layouts/main.blade.php` | Query DB nilai_siswa & KKM; sidebar hybrid (server + JS) |
| `resources/views/bab_1/bab_1.blade.php` | Page-level locking (4 halaman pagination) + mark selesai |
| `resources/views/bab_1/bab_2.blade.php` | Page-level locking |
| `resources/views/bab_1/bab_3.blade.php` | Page-level locking |
| `resources/views/bab_1/bab_4.blade.php` | Page-level locking |
| `resources/views/bab_1/lanjut_1.blade.php` | Tombol Selesai → mark localStorage + redirect |
| `resources/views/bab_1/lanjut_2.blade.php` | Sama |
| `resources/views/bab_1/lanjut_3_1.blade.php` | Sama |
| `resources/views/bab_1/lanjut_4.blade.php` | Sama |
| `resources/views/bab_1/latihan1.blade.php` | Page-level locking, mark selesai saat jawaban benar |
| `resources/views/bab_1/latihan2.blade.php` | Page-level locking (3 halaman pagination) |
| `resources/views/bab_1/latihan3.blade.php` | Page-level locking |
| `resources/views/bab_1/latihan4.blade.php` | Page-level locking |

### Tidak Disentuh
| Komponen | Alasan |
|----------|--------|
| Database | Tidak ada perubahan struktur (hanya READ existing tables) |
| Models/Controllers | Tidak perlu — query langsung di Blade layout |
| Routes | Struktur route tetap sama |
| File migrasi | Tidak perlu |
| File CSS | Tidak ada perubahan |

---

## Catatan Tambahan

1. **Sub-page vs Materi**: Sub-page progress bersifat per-browser (localStorage). Materi unlock bersifat permanen (DB).
2. **Reset Progress Sub-page**: Bisa ditambahkan tombol "Reset Progress" di tiap materi untuk mengulang dari awal.
3. **Keamanan**: Materi unlock aman karena dicek server-side. Sub-page unlock bisa dimanipulasi via DevTools, tapi hanya memengaruhi navigasi dalam 1 materi — acceptable untuk aplikasi pembelajaran.
4. **Kuis sebagai Gate**: Jika nilai kuis belum masuk DB (siswa belum pernah kuis), `MAX(nilai)` akan `null`, sehingga materi otomatis terkunci.
