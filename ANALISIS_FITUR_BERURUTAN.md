# Analisis Fitur Materi & Sub-Materi Berurutan

## Arsitektur

| Layer | Teknologi | Fungsi |
|-------|-----------|--------|
| **Sub-page progress** (antar halaman dalam 1 materi) | `localStorage` browser | Tracking urutan: Pengertian → Penyajian → Latihan → Kuis |
| **Materi locking** (antar 4 materi) | Database `nilai_siswa` + `kkm` | Materi berikutnya terbuka jika nilai kuis sebelumnya ≥ KKM |

Urutan materi: **Himpunan (m_1) → Relasi (m_2) → Fungsi (m_3) → Korespondensi (m_4)**

Urutan sub-page per materi: **Pengertian → Penyajian → Latihan → Kuis**

---

## ✅ Plus (Kelebihan)

| # | Kelebihan | Detail |
|---|-----------|--------|
| 1 | **Hybrid approach tepat** | Sub-page pakai localStorage (ringan, tanpa server round-trip), materi unlock pakai DB (permanen, terlihat guru) — kombinasi optimal |
| 2 | **Tanpa perubahan database** | Tidak perlu tabel/kolom baru — manfaatkan tabel `nilai_siswa` & `kkm` yg sudah ada |
| 3 | **Alur belajar terstruktur** | Siswa dipaksa urut: Pengertian → Penyajian → Latihan → Kuis → lanjut materi berikutnya |
| 4 | **Visual sidebar informatif** | Ikon ✅ (selesai), ➡ (tersedia/bisa diakses), 🔒 (terkunci) — status langsung terlihat |
| 5 | **KKM sebagai gatekeeper natural** | Siswa harus kuasai materi sebelumnya (nilai ≥ KKM) sebelum lanjut ke materi berikut |
| 6 | **Page-level locking** | Tidak hanya antar sub-page, tapi antar halaman dalam satu view (pagination internal) — lihat `bab_1.blade.php` dgn 4 halaman |
| 7 | **Server-side materi unlock** | Materi level lock dicek di PHP (`main.blade.php:13-18`), **tidak bisa** dimanipulasi via DevTools |
| 8 | **Overlay lock responsif** | Tampilan halaman terkunci fullscreen (`progress.js:148-170`) rapi di semua device |
| 9 | **Graceful degradation** | `materi_1` selalu terbuka, query pakai `?? 0` handle null nilai — tidak pernah error |
| 10 | **Ringan & cepat** | Sub-page tracking 100% client-side — tidak ada beban server tambahan |

---

## ❌ Minus (Kekurangan)

| # | Kekurangan | Dampak | Severity |
|---|------------|--------|----------|
| 1 | **Data hardcoded total** | Nama materi, urutan, sub-page, dan route path diketik manual di `progress.js:4-36` & `main.blade.php`. Guru **tidak bisa** mengubah konten tanpa ngoding | 🔴 Tinggi |
| 2 | **Tidak ada CRUD admin** | Tidak ada dashboard untuk menambah/mengedit/menghapus materi. Jika ingin tambah materi 5, harus edit source code + Blade + JS | 🔴 Tinggi |
| 3 | **Sub-page progress per-browser** | localStorage tidak sync antar device. Jika siswa ganti komputer/hapus cache, progress sub-page hilang | 🟡 Sedang |
| 4 | **Rentan manipulasi client (sub-page)** | Sub-page unlock bisa diakali via DevTools (hapus/edit localStorage). Meski materi unlock tetap aman di server | 🟡 Sedang |
| 5 | **Query di Blade (violates MVC)** | Query `NilaiSiswa` & `Kkm` ditulis langsung di `main.blade.php:5-11`, bukan di Controller/Service | 🟡 Sedang |
| 6 | **Tidak bisa reorder** | Tidak ada drag-and-drop atau tombol up/down untuk mengubah urutan materi/sub | 🟡 Sedang |
| 7 | **Guru tidak lihat sub-progress** | Guru hanya tahu nilai kuis (materi unlock), tidak bisa memantau progress sub-page siswa secara detail | 🟡 Sedang |
| 8 | **Skalabilitas rendah** | Untuk 4 materi × 4 sub masih oke. Tapi jika materi puluhan, kode akan sulit dirawat & rawan typo | 🟡 Sedang |
| 9 | **Route hardcoded di JS** | Path seperti `/bab_1/lanjut_3_1` diketik manual. Jika struktur route berubah, JS harus diedit | 🟢 Rendah |
| 10 | **Belum ada reset progress** | PLAN_IMPLEMENTASI.md menyebutkan fitur reset (catatan #2), tapi belum diimplementasikan | 🟢 Rendah |

---

## Ringkasan

| Aspek | Nilai |
|-------|-------|
| **Kesesuaian kebutuhan** | ✅ Sangat sesuai untuk konten statis 4 materi |
| **Performance** | ✅ Ringan, 0 beban server tambahan |
| **Keamanan materi** | ✅ Aman (server-side) |
| **Keamanan sub-page** | ⚠️ Rentan (client-side, bisa dimanipulasi) |
| **Maintainability** | ❌ Semua hardcoded, sulit diubah tanpa developer |
| **Flexibility** | ❌ Tidak bisa diatur via admin panel |
| **Scalability** | ⚠️ Cukup untuk skala kecil (≤10 materi) |

> **Catatan:** Untuk kebutuhan *saat ini* dengan 4 materi statis, arsitektur ini sudah **cukup dan tepat**. Jika ke depan konten ingin dinamis (guru bisa tambah/edit/reorder materi), perlu refactor ke model + database + CRUD controller.
