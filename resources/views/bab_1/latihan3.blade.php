@extends('layouts.main')

@section('container')

<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.9.0/p5.min.js"></script>

<style>
    .content-gap {
        margin-left: 40px;
        margin-right: 20px;
        box-sizing: border-box;
        max-width: 100%;
        overflow-x: clip;
        font-family: 'Poppins', sans-serif;
    }

    .fungsi-page {
        display: none;
        width: 100%;
        max-width: 100%;
        box-sizing: border-box;
        overflow-x: clip;
    }

    .fungsi-page.active {
        display: block;
    }

    .fungsi-card {
        background: #ffffff;
        border: 1px solid #eadcf6;
        border-radius: 26px;
        padding: 24px;
        margin-top: 20px;
        box-shadow: 0 14px 32px rgba(91, 44, 111, 0.08);
        box-sizing: border-box;
    }

    .fungsi-page-title,
    .fungsi-section-title {
        background: linear-gradient(135deg, #8E44AD, #B57EDC);
        color: #ffffff;
        text-align: center;
        padding: 15px 22px;
        border-radius: 20px;
        font-weight: 800;
        font-size: 1.25rem;
        margin-bottom: 22px;
        box-shadow: 0 10px 20px rgba(142, 68, 173, 0.16);
    }

    .fungsi-page-title {
        font-size: 1.32rem;
    }

    .fungsi-section-title.soft {
        background: linear-gradient(135deg, #A855F7, #C084FC);
    }

    .fungsi-info-box,
    .fungsi-soft-box,
    .fungsi-simple-box {
        background: #ffffff;
        border: 1px solid #E9D5FF;
        border-radius: 18px;
        padding: 18px;
        margin-bottom: 16px;
        color: #333;
        line-height: 1.85;
        box-sizing: border-box;
    }

    .fungsi-soft-box {
        background: #FBF7FF;
        border: 2px dashed #CFA7F3;
        color: #4B2673;
    }

    .fungsi-simple-box {
        background: linear-gradient(180deg, #ffffff 0%, #fdfbff 100%);
        box-shadow: 0 8px 18px rgba(91, 44, 111, 0.05);
    }

    .fungsi-hero-layout {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 20px;
        align-items: stretch;
    }

    .fungsi-image-box,
    .fungsi-text-box {
        background: #ffffff;
        border: 1px solid #E9D5FF;
        border-radius: 18px;
        padding: 18px;
        box-sizing: border-box;
        min-width: 0;
        box-shadow: 0 8px 18px rgba(91, 44, 111, 0.06);
    }

    .fungsi-image-box {
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(180deg, #ffffff 0%, #faf7ff 100%);
    }

    .fungsi-image-box img {
        width: 100%;
        max-height: 430px;
        object-fit: contain;
        display: block;
    }

    .fungsi-text-box {
        display: flex;
        flex-direction: column;
        justify-content: center;
        line-height: 1.85;
    }

    .fungsi-btn-row,
    .control-row,
    .input-row {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
        align-items: center;
        margin: 16px 0;
    }

    .control-row .btn,
    .input-row button,
    .fungsi-btn-row .btn {
        min-width: 140px;
        font-weight: 700;
        border-radius: 12px;
    }

    .input-row input {
        width: 280px;
    }

    .input-row select {
        width: 200px;
    }

    #sketch-holder,
    #koordinat-canvas {
        width: 100%;
        min-width: 0;
    }

    .fungsi-work-layout {
        display: grid;
        grid-template-columns: minmax(0, 1.55fr) minmax(280px, 0.75fr);
        gap: 18px;
        align-items: stretch;
    }

    .fungsi-result-box,
    .hasil-box {
        background: #ffffff;
        border: 1px solid #E9D5FF;
        border-radius: 18px;
        padding: 18px;
        box-shadow: 0 8px 18px rgba(91, 44, 111, 0.06);
        min-height: 100%;
        box-sizing: border-box;
    }

    .fungsi-formula {
        font-family: 'Times New Roman', serif;
        line-height: 2.1;
        color: #222;
    }

    .fungsi-formula .form-select {
        border: 2px solid #D8B4FE;
        border-radius: 10px;
        font-weight: 700;
    }

    .fungsi-input {
        border: 2px solid #D8B4FE !important;
        border-radius: 12px !important;
        min-height: 44px;
    }

    .fungsi-input:focus {
        border-color: #8B5CF6 !important;
        box-shadow: 0 0 0 3px rgba(139, 92, 246, 0.15) !important;
    }

    .fungsi-table {
        border: 1px solid #E9D5FF !important;
        border-radius: 14px;
        overflow: hidden;
    }

    .fungsi-table th {
        background: #F3E8FF !important;
        color: #4B2673;
        border-color: #E9D5FF !important;
    }

    .fungsi-table td {
        border-color: #E9D5FF !important;
    }

    #canvas-wrapper {
        background: #ffffff;
        border: 1px solid #E9D5FF;
        border-radius: 18px;
        padding: 18px;
        box-shadow: 0 8px 18px rgba(91, 44, 111, 0.06);
        position: relative;
        overflow: hidden;
        height: 420px;
    }

    .hasil-box {
        height: 420px;
        overflow-y: auto;
    }

    #feedback-area {
        margin-top: 15px;
        font-weight: 600;
    }

    #koordinat-controls {
        background: #FBF7FF;
        border: 1px solid #E9D5FF;
        border-radius: 18px;
        padding: 16px;
        margin-top: 18px;
        text-align: center;
    }

    .fungsi-pagination {
        width: 100%;
        margin-top: 30px;
        margin-bottom: 35px;
        clear: both;
    }

    .fungsi-pagination .pagination {
        gap: 5px;
    }

    .fungsi-pagination .page-link {
        color: #6A2C70;
        border: 1px solid #E3C7F3;
        border-radius: 12px !important;
        font-weight: 700;
        background-color: #ffffff;
        box-shadow: 0 2px 6px rgba(0,0,0,0.08);
    }

    .fungsi-pagination .page-link:hover {
        background-color: #F3E5FF;
        color: #4B2673;
    }

    .fungsi-pagination .page-item.active .page-link {
        background-color: #CDA4DE;
        border-color: #CDA4DE;
        color: #ffffff;
    }

    .fungsi-pagination .page-item.disabled .page-link {
        color: #aaaaaa;
        background-color: #f6f6f6;
        border-color: #eeeeee;
        box-shadow: none;
        pointer-events: none;
    }

    @media (max-width: 992px) {
        .fungsi-hero-layout,
        .fungsi-work-layout {
            grid-template-columns: 1fr;
        }

        .fungsi-image-box img {
            max-height: 360px;
        }
    }

    @media (max-width: 768px) {
        .content-gap {
            margin-left: 12px;
            margin-right: 12px;
        }

        .fungsi-card {
            padding: 16px;
            border-radius: 20px;
        }

        .fungsi-page-title,
        .fungsi-section-title {
            font-size: 1.05rem;
            padding: 14px 16px;
            border-radius: 16px;
        }

        .input-row input,
        .input-row select,
        .input-row button,
        .control-row .btn,
        .fungsi-btn-row .btn {
            width: 100%;
        }

        #canvas-wrapper,
        .hasil-box {
            height: 360px;
        }

        .fungsi-pagination .page-link {
            font-size: 0.82rem;
            padding: 7px 9px;
        }
    }

/* =========================================================
   FINAL: WARNA DISAMAKAN DAN KOTAK TIDAK TERLALU BANYAK
========================================================= */
.fungsi-section-title,
.fungsi-section-title.soft {
    background: linear-gradient(135deg, #8E44AD, #B57EDC) !important;
    color: #ffffff !important;
    border-radius: 20px !important;
    margin: 10px 0 18px 0 !important;
    box-shadow: 0 10px 20px rgba(142, 68, 173, 0.16) !important;
}

.fungsi-card {
    border: 1px solid #eadcf6 !important;
    box-shadow: 0 14px 32px rgba(91, 44, 111, 0.08) !important;
}

.fungsi-simple-box,
.fungsi-soft-box,
.fungsi-image-box,
.fungsi-text-box,
.fungsi-result-box,
.hasil-box,
#canvas-wrapper,
#koordinat-controls {
    border-color: #E9D5FF !important;
}

.fungsi-table th,
.table thead th,
.table th {
    background: #F3E8FF !important;
    color: #4B2673 !important;
    border-color: #E9D5FF !important;
}

.fungsi-table td,
.table td {
    border-color: #E9D5FF !important;
}

/* Tombol dibuat beda dari judul ungu supaya tidak menyatu */
.fungsi-card .btn-success,
.fungsi-card button[onclick^="cek"],
.fungsi-card button[style*="background:#7b2cbf"],
.fungsi-card button[style*="background:#9d4edd"] {
    background: linear-gradient(135deg, #15803D, #22C55E) !important;
    border: 2px solid #15803D !important;
    color: #ffffff !important;
    box-shadow: 0 8px 16px rgba(21, 128, 61, 0.18) !important;
}

.fungsi-card .btn-danger {
    background: linear-gradient(135deg, #B91C1C, #EF4444) !important;
    border: 2px solid #B91C1C !important;
    color: #ffffff !important;
    box-shadow: 0 8px 16px rgba(185, 28, 28, 0.16) !important;
}

.fungsi-card .btn-primary,
.fungsi-card .btn-info {
    background: linear-gradient(135deg, #0369A1, #38BDF8) !important;
    border: 2px solid #0369A1 !important;
    color: #ffffff !important;
    box-shadow: 0 8px 16px rgba(3, 105, 161, 0.16) !important;
}

.fungsi-card .btn-warning {
    background: linear-gradient(135deg, #D97706, #FBBF24) !important;
    border: 2px solid #D97706 !important;
    color: #3B2500 !important;
    box-shadow: 0 8px 16px rgba(217, 119, 6, 0.16) !important;
}

.fungsi-card .btn-secondary {
    background: #ffffff !important;
    color: #475569 !important;
    border: 2px solid #94A3B8 !important;
    box-shadow: 0 6px 12px rgba(71, 85, 105, 0.10) !important;
}

/* Khusus tombol pilihan Latihan 3 */
.fungsi-card button[onclick="cekLatihanFungsiBenar()"] {
    background: linear-gradient(135deg, #15803D, #22C55E) !important;
    border-color: #15803D !important;
}

.fungsi-card button[onclick="cekLatihanFungsiSalah()"] {
    background: linear-gradient(135deg, #B91C1C, #EF4444) !important;
    border-color: #B91C1C !important;
}


</style>

<div class="content-gap" data-materi="materi_3" data-sub-page="latihan" data-total-pages="3">
    <!-- ====================== HALAMAN 1 ====================== -->
    <div class="fungsi-page active" id="fungsiPage1">
   

    <div class="fungsi-card">
        
            <div class="fungsi-section-title soft">
                Latihan 3
            </div>

            <div class="fungsi-hero-layout">
                <div class="fungsi-image-box">
                    <img src="{{ asset('images/latihan3.png') }}" alt="Latihan 3">
                </div>

                <div class="fungsi-text-box">
                    <h4 class="fw-bold">
                        Setelah kamu mengamati, sekarang mari berlatih.
                    </h4>

                    <p class="mt-3">
                        Apakah jumlah loyang kue Amparan Tatak (x) dan
                        total harga (f(x)) merupakan fungsi atau bukan?
                    </p>

                    <div class="fungsi-btn-row">
                        <button class="btn btn-success px-4" onclick="cekLatihanFungsiBenar()">
                            Fungsi
                        </button>

                        <button class="btn btn-danger px-4" onclick="cekLatihanFungsiSalah()">
                            Bukan Fungsi
                        </button>

                    </div>

                    <div id="feedback" data-exercise="lat3fungsi"></div>

                    <p class="mt-3 mb-0">
                        Berdasarkan hasil penyelidikanmu tadi, sajikan relasimu
                        dalam <strong>5 bentuk penyajian</strong>!
                    </p>
                </div>
            </div>

            <div class="fungsi-section-title">
                Cara 1: Diagram Panah
            </div>

            <div class="fungsi-soft-box">
                <strong>📘 Petunjuk Penggunaan</strong>
                <ol class="mb-0 mt-2">
                    <li><b>Buat Semesta</b><br>Klik tombol <span class="badge bg-primary">Buat Semesta</span> untuk menampilkan wilayah himpunan semesta.</li>
                    <li><b>Buat Himpunan</b><br>Klik tombol <span class="badge bg-primary">Buat Himpunan</span> untuk membuat lingkaran himpunan (A dan B).</li>
                    <li><b>Isi Nama Anggota</b><br>Ketik nama anggota pada kolom input, lalu pilih himpunan tujuan.</li>
                    <li><b>Tambah Anggota</b><br>Klik <span class="badge bg-primary">Tambah Anggota</span> untuk memasukkan anggota ke dalam himpunan.</li>
                    <li><b>Membuat Panah (Relasi)</b><br>Klik <b>lingkaran hitam</b> pada satu anggota himpunan, lalu klik <b>lingkaran hitam</b> pada anggota himpunan lainnya. Panah relasi akan muncul otomatis.</li>
                    <li><b>Hapus Panah (Relasi)</b><br>Klik <span class="badge bg-warning text-dark">Hapus Panah</span> untuk mengaktifkan mode hapus. Panah akan berubah warna menjadi <b>merah</b>. Klik panah yang ingin dihapus. Setelah selesai, klik kembali tombol <span class="badge bg-warning text-dark">Hapus Panah</span> untuk kembali ke mode normal.</li>
                    <li><b>Hapus Himpunan</b><br>Pilih huruf himpunan, lalu klik <span class="badge bg-danger">Hapus Himpunan</span> untuk menghapus himpunan beserta anggotanya.</li>
                    <li><b>Periksa & Reset</b><br>Klik <span class="badge bg-success">Periksa</span> untuk melihat isi himpunan. Klik <span class="badge bg-secondary">Reset Semua</span> untuk menghapus semua dan kembali ke tampilan awal.</li>
                </ol>
            </div>

            <h4 class="text-center fw-bold mb-3" style="color:#7b2cbf;">
                ✏️ Ayo Menggambar
            </h4>

            <div class="fungsi-simple-box">
                <div class="control-row">
                    <button class="btn btn-primary" onclick="buatSemesta()">Buat Semesta</button>
                    <button class="btn btn-primary" onclick="buatLingkaran()">Buat Himpunan</button>
                    <button class="btn btn-danger" onclick="hapusLingkaran()">Hapus Himpunan</button>
                    <button class="btn btn-warning text-dark" onclick="toggleDeleteMode()">Hapus Panah</button>
                    <button class="btn btn-success" onclick="periksaDiagram()">Periksa</button>
                    <button class="btn btn-secondary" onclick="resetSemua()">Reset Semua</button>
                </div>

                <div class="input-row">
                    <input id="namaInput" class="form-control" placeholder="Nama anggota...">
                    <select id="setSelect" class="form-select">
                        <option>Pilih Himpunan</option>
                    </select>
                    <button class="btn btn-primary" onclick="tambahAnggota()">Tambah Anggota</button>
                </div>

                <div class="fungsi-work-layout">
                    <div>
                        <div id="sketch-holder"></div>
                    </div>

                    <div class="fungsi-result-box">
                        <b>HASIL PEMERIKSAAN:</b>
                        <div id="hasilText" class="mt-3" data-exercise="lat3diagram"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ====================== HALAMAN 2 ====================== -->
    <div class="fungsi-page" id="fungsiPage2">
        <div class="fungsi-card">
            <div class="fungsi-section-title">
                Cara 2: Himpunan Pasangan Berurutan
            </div>

            <div class="fungsi-simple-box text-center">
                <p>Susun relasi dalam bentuk himpunan pasangan berurutan:</p>

                <h4 class="fungsi-formula">
                    f = {
                    (
                    <select id="x1" class="form-select d-inline-block w-auto">
                        <option value="">x</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    ,
                    <select id="y1" class="form-select d-inline-block w-auto">
                        <option value="">y</option>
                        <option value="20000">20.000</option>
                        <option value="40000">40.000</option>
                        <option value="60000">60.000</option>
                    </select>
                    ),
                    (
                    <select id="x2" class="form-select d-inline-block w-auto">
                        <option value="">x</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    ,
                    <select id="y2" class="form-select d-inline-block w-auto">
                        <option value="">y</option>
                        <option value="20000">20.000</option>
                        <option value="40000">40.000</option>
                        <option value="60000">60.000</option>
                    </select>
                    ),
                    (
                    <select id="x3" class="form-select d-inline-block w-auto">
                        <option value="">x</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    ,
                    <select id="y3" class="form-select d-inline-block w-auto">
                        <option value="">y</option>
                        <option value="20000">20.000</option>
                        <option value="40000">40.000</option>
                        <option value="60000">60.000</option>
                    </select>
                    )
                    }
                </h4>

                <div class="fungsi-btn-row">
                    <button class="btn btn-success px-4" onclick="cekPasangan()">Periksa Jawaban</button>
                    <button class="btn btn-secondary px-4" onclick="resetPasangan()">Reset</button>
                </div>

                <div id="hasilPasangan" class="mt-4" data-exercise="lat3pasangan"></div>
            </div>

            <div class="fungsi-section-title">
                Cara 3: Persamaan Fungsi
            </div>

            <div class="fungsi-simple-box text-center">
                <p>
                    Tentukan persamaan fungsi dari jumlah Perpotong (<b>x</b>) ke total harga <b>f(x)</b>.
                </p>

                <h4 class="fungsi-formula">
                    f(x) =
                    <input type="text" id="persamaanInput"
                           class="form-control d-inline-block text-center fungsi-input"
                           style="max-width:250px;"
                           placeholder="Contoh: 80000x">
                </h4>

                <div class="fungsi-btn-row">
                    <button class="btn px-4" style="background:#7b2cbf;color:white;" onclick="cekPersamaan()">Periksa Jawaban</button>
                    <button class="btn btn-secondary px-4" onclick="resetPersamaan()">Reset</button>
                </div>

                <div id="hasilPersamaan" class="mt-4" data-exercise="lat3persamaan"></div>

                <hr class="mt-5">

                <h5 style="color:#7b2cbf;font-weight:600;">
                    Uji Nilai Fungsi
                </h5>

                <p>Hitung nilai berikut menggunakan persamaan yang benar:</p>

                <div class="row justify-content-center g-3">
                    <div class="col-md-3">
                        f(1) =
                        <input type="text" id="f1" class="form-control text-center fungsi-input">
                    </div>

                    <div class="col-md-3">
                        f(2) =
                        <input type="text" id="f2" class="form-control text-center fungsi-input">
                    </div>

                    <div class="col-md-3">
                        f(3) =
                        <input type="text" id="f3" class="form-control text-center fungsi-input">
                    </div>
                </div>

                <div class="fungsi-btn-row">
                    <button class="btn px-4" style="background:#9d4edd;color:white;" onclick="cekNilai()">Cek Nilai</button>
                </div>

                <div id="hasilNilai" class="mt-4" data-exercise="lat3nilai"></div>
            </div>

            <div class="fungsi-section-title soft mt-4">
                Cara 4: Dengan Tabel
            </div>

            <div class="fungsi-simple-box">
                <p>
                    Lengkapi tabel berikut menggunakan rumus <b>f(x) = 20000x</b>
                </p>

                <div class="table-responsive">
                    <table class="table table-bordered text-center align-middle fungsi-table">
                        <thead>
                            <tr>
                                <th style="width:50%">x (Jumlah Perpotong)</th>
                                <th>f(x) (Total Harga)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>4</td>
                                <td><input type="text" id="t4" class="form-control text-center fungsi-input"></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><input type="text" id="t6" class="form-control text-center fungsi-input"></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td><input type="text" id="t9" class="form-control text-center fungsi-input"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="fungsi-btn-row">
                    <button class="btn px-4" style="background:#9d4edd;color:white;" onclick="cekTabelBaru()">Periksa Tabel</button>
                    <button class="btn btn-secondary px-4" onclick="resetTabelBaru()">Reset</button>
                </div>

                <div id="hasilTabelBaru" class="mt-4" data-exercise="lat3tabel"></div>
            </div>
        </div>
    </div>

    <!-- ====================== HALAMAN 3 ====================== -->
    <div class="fungsi-page" id="fungsiPage3">
        <div class="fungsi-card">
            <div class="fungsi-section-title">
                Cara 5: Dengan Grafik
            </div>

            <div class="fungsi-simple-box">
                <p style="font-size:16px; line-height:1.9;">
                    Pada grafik fungsi, setiap nilai x dipasangkan dengan tepat satu nilai y.
                    Setiap pasangan berurutan (x, y) dinyatakan sebagai satu titik
                    pada bidang Kartesius.
                </p>

                <p style="font-size:16px; line-height:1.9; margin-bottom:0;">
                    Kumpulan titik-titik tersebut membentuk grafik fungsi
                    yang menunjukkan hubungan antara variabel x dan variabel y.
                </p>
            </div>

            <div class="fungsi-soft-box">
                <strong>📘 Petunjuk Penggunaan</strong>
                <ol style="font-size:16px; line-height:1.9; margin-bottom:0; margin-top:10px;">
                    <li>Masukkan jumlah nilai pada <b>sumbu X</b> dan <b>sumbu Y</b>.</li>
                    <li>Klik <span class="badge bg-primary">📊 Gambar Grafik</span> untuk menampilkan bidang koordinat.</li>
                    <li>Klik <span class="badge bg-info text-dark">🔢 Isi Sumbu X</span>, lalu masukkan nilai x (1, 2, dan 3).</li>
                    <li>Klik <span class="badge bg-info text-dark">🔢 Isi Sumbu Y</span>, lalu masukkan nilai f(x) sesuai rumus <b>f(x) = 20.000x</b>.</li>
                    <li>Pilih <span class="badge bg-success">🔵 Tambah Titik</span>, kemudian klik titik yang sesuai dengan pasangan berurut (x, f(x)).</li>
                    <li>Jika salah memilih titik, klik <span class="badge bg-warning text-dark">❌ Hapus Titik</span> lalu klik titik yang ingin dihapus.</li>
                    <li>Setelah selesai, klik <span class="badge bg-success">✅ Periksa Jawaban</span> untuk melihat apakah grafik sudah sesuai dengan fungsi.</li>
                    <li>Jika ingin mengulang dari awal, klik <span class="badge bg-danger">🗑 Reset</span>.</li>
                </ol>
            </div>

            <div class="fungsi-simple-box">
                <p>Diketahui data sebagai berikut:</p>

                <ul>
                    <li>Harga 1 loyang Amparan Tatak Rp20.000.</li>
                    <li>Seorang pembeli membeli 3 loyang.</li>
                    <li>Hubungan antara jumlah loyang (x) dan total harga dinyatakan dengan fungsi f(x) = 20.000x.</li>
                </ul>

                <p class="mb-0">
                    Gambarkan grafik fungsi tersebut untuk nilai x = 1, 2, dan 3 dibawah ini .
                </p>
            </div>

            <h4 class="text-center fw-bold mb-3" style="color:#7b2cbf;">
                 Menggambar Grafik
            </h4>

            <div class="row g-4">
                <div class="col-lg-7 d-flex">
                    <div id="canvas-wrapper" class="w-100">
                        <div id="koordinat-canvas"></div>
                    </div>
                </div>

                <div class="col-lg-5 d-flex">
                    <div class="hasil-box w-100">
                        <h5 style="color:#7b2cbf;font-weight:700;">
                            📘 Hasil Pemeriksaan
                        </h5>

                        <div id="feedback-area" data-exercise="lat3jawab"></div>
                    </div>
                </div>
            </div>

            <div id="koordinat-controls"></div>
        </div>
    </div>

    <!-- ====================== PAGINATION ====================== -->
    <div class="fungsi-pagination">
        <nav aria-label="Pagination Materi Fungsi">
            <ul class="pagination justify-content-center flex-wrap">
                <li class="page-item disabled" id="fungsiPrevItem">
                    <button type="button" class="page-link" onclick="changeFungsiPage(currentFungsiPage - 1)">Sebelumnya</button>
                </li>

                <li class="page-item active" id="fungsiPageItem1"><button type="button" class="page-link" onclick="changeFungsiPage(1)">1</button></li>
                <li class="page-item" id="fungsiPageItem2"><button type="button" class="page-link" onclick="changeFungsiPage(2)">2</button></li>
                <li class="page-item" id="fungsiPageItem3"><button type="button" class="page-link" onclick="changeFungsiPage(3)">3</button></li>

                <li class="page-item" id="fungsiNextItem">
                    <button type="button" class="page-link" onclick="nextFungsiPage()">Berikutnya</button>
                </li>
            </ul>
        </nav>
    </div>
</div>

<script>

    let percobaanLatihanFungsiAwalSalah = 0;

    function cekLatihanFungsiBenar() {
        const feedback = document.getElementById('feedback');
        if (!feedback) return;

        percobaanLatihanFungsiAwalSalah = 0;

        feedback.setAttribute('data-correct', 'true');
        feedback.innerHTML = `
            <div class="alert alert-success mt-3">
                <strong>Benar! Ini merupakan Fungsi.</strong><br><br>
                Setiap jumlah loyang memiliki tepat satu total harga, sehingga hubungan tersebut termasuk fungsi.
            </div>
        `;
    }

    function cekLatihanFungsiSalah() {
        const feedback = document.getElementById('feedback');
        if (!feedback) return;

        percobaanLatihanFungsiAwalSalah++;

        if (percobaanLatihanFungsiAwalSalah < 3) {
            feedback.innerHTML = `
                <div class="alert alert-warning mt-3">
                    <strong>Kurang tepat.</strong><br>
                    Coba perhatikan kembali hubungan antara jumlah loyang dan total harga, lalu pilih ulang.
                </div>
            `;
            return;
        }

        feedback.innerHTML = `
            <div class="alert alert-danger mt-3">
                <strong>Jawaban masih belum tepat.</strong><br><br>
                Jawaban yang benar adalah <b>Fungsi</b>, karena setiap jumlah loyang
                hanya memiliki satu total harga.<br><br>
                Suatu relasi disebut <b>bukan fungsi</b> jika ada satu nilai x
                yang memiliki lebih dari satu nilai f(x).
            </div>
        `;
    }

    let currentFungsiPage = 1;
    const totalFungsiPage = 3;

    function changeFungsiPage(page) {
        if (page < 1 || page > totalFungsiPage) return;

        if (page > currentFungsiPage) {
            var prevEl = document.getElementById('fungsiPage' + currentFungsiPage);
            if (prevEl) {
                var exs = prevEl.querySelectorAll('[data-exercise]');
                for (var i = 0; i < exs.length; i++) {
                    if (exs[i].getAttribute('data-correct') !== 'true') {
                        ProgressManager.showAlert('Selesaikan semua soal pada halaman ini dengan benar terlebih dahulu!');
                        return;
                    }
                }
            }
        }

        currentFungsiPage = page;

        for (let i = 1; i <= totalFungsiPage; i++) {
            const pageElement = document.getElementById("fungsiPage" + i);
            const pageItem = document.getElementById("fungsiPageItem" + i);

            if (pageElement) pageElement.classList.toggle("active", i === page);
            if (pageItem) pageItem.classList.toggle("active", i === page);
        }

        const prevItem = document.getElementById("fungsiPrevItem");
        if (prevItem) prevItem.classList.toggle("disabled", page === 1);

        const target = document.querySelector(".content-gap");
        if (target) {
            target.scrollIntoView({ behavior: "smooth", block: "start" });
        }

        setTimeout(function () {
            if (typeof resizeResponsive === "function") resizeResponsive();
            window.dispatchEvent(new Event("resize"));
        }, 80);
    }

    function nextFungsiPage() {
        var curEl = document.getElementById('fungsiPage' + currentFungsiPage);
        if (curEl) {
            var exs = curEl.querySelectorAll('[data-exercise]');
            for (var i = 0; i < exs.length; i++) {
                if (exs[i].getAttribute('data-correct') !== 'true') {
                    ProgressManager.showAlert('Selesaikan semua soal pada halaman ini dengan benar terlebih dahulu!');
                    return;
                }
            }
        }

        if (currentFungsiPage < totalFungsiPage) {
            ProgressManager.markPageDone('materi_3', 'latihan', currentFungsiPage);
            changeFungsiPage(currentFungsiPage + 1);
        } else {
            ProgressManager.markSubPageDone('materi_3', 'latihan');
            window.location.href = "/petunjuk/petunjuk_bab3";
        }
    }
</script>

<script>
let universe=null;
let sets=[];
let members=[];
let relations=[];
let selectedNode=null;
let deleteMode=false;

function setup(){
    let canvas=createCanvas(900,550);
    canvas.parent("sketch-holder");
    resizeResponsive();
    
}
function windowResized(){
    resizeResponsive();
}
function resizeResponsive(){
    let container=document.getElementById("sketch-holder");
    let w = container.offsetWidth || container.parentElement.offsetWidth || 900;
    let h = Math.max(360, w * 0.58);
    resizeCanvas(w, h);
}

function draw(){

    // Background
    for(let i=0;i<height;i++){
        let inter=map(i,0,height,0,1);
        let c=lerpColor(color("#ffffff"),color("#ede9fe"),inter);
        stroke(c);
        line(0,i,width,i);
    }

    if(universe) universe.draw();
    sets.forEach(s=>s.draw());

    // ===== RELASI DIGAMBAR DULU (SUPAYA TIDAK TIMPA TEKS) =====
    relations.forEach((r,index)=>{

    // 🔥 garis lebih soft dan tidak terlalu gelap
    stroke(deleteMode ? "#ff0000" : "rgba(0,0,0,0.5)");
    strokeWeight(2);

    line(r.from.x,r.from.y,r.to.x,r.to.y);

    let angle = atan2(r.to.y-r.from.y,r.to.x-r.from.x);
    let arrowSize = 12;

    push();
    translate(r.to.x,r.to.y);
    rotate(angle);
    fill(deleteMode ? "#ff0000" : "rgba(0,0,0,0.6)");
    noStroke();
    triangle(0,0,-arrowSize,-arrowSize/2,-arrowSize,arrowSize/2);
    pop();
});
    // ===== BARU GAMBAR MEMBER =====
    sets.forEach(s=>{
        let list = members.filter(m=>m.set===s);
        list.forEach((m,i)=> m.draw(i));
    });

    if(selectedNode){
        stroke("red");
        noFill();
        ellipse(selectedNode.x,selectedNode.y,16);
    }
}

function mousePressed(){

    if(deleteMode){
        for(let i=relations.length-1;i>=0;i--){
            let r=relations[i];

            let d = distToSegment(
                createVector(mouseX,mouseY),
                createVector(r.from.x,r.from.y),
                createVector(r.to.x,r.to.y)
            );

            if(d<6){
                relations.splice(i,1);
                break;
            }
        }
        return;
    }

    members.forEach(m=>{
        if(m.isClicked(mouseX,mouseY)){
            if(selectedNode==null){
                selectedNode=m;
            }else{
                if(selectedNode!==m){
                    if(selectedNode.set.label==="A" && m.set.label==="B"){
                        relations.push({from:selectedNode,to:m});
                    }
                }
                selectedNode=null;
            }
        }
    });
}

function toggleDeleteMode(){
    deleteMode=!deleteMode;
}

function distToSegment(p, v, w) {
    let l2 = p5.Vector.dist(v,w) ** 2;
    if (l2 === 0) return p5.Vector.dist(p,v);
    let t = ((p.x - v.x) * (w.x - v.x) + (p.y - v.y) * (w.y - v.y)) / l2;
    t = max(0, min(1, t));
    let projection = createVector(
        v.x + t * (w.x - v.x),
        v.y + t * (w.y - v.y)
    );
    return p5.Vector.dist(p, projection);
}

function buatSemesta(){
    universe=new Universe(width*0.05,height*0.12,width*0.90,height*0.80);
    aturPosisiHimpunan();
}

function buatLingkaran(){
    if(!universe) return;
    if(sets.length >= 2) return;

    let label = sets.length === 0 ? "A" : "B";
    let color = label==="A" ? "#ff006e" : "#3a86ff";

    sets.push(new Himpunan(label,color));
    aturPosisiHimpunan();
    updateDropdown();
}
function periksaDiagram(){

    const kunciJawaban = [
        ["1",20000],
        ["2",40000],
        ["3",60000]
    ];

    // fungsi bersihkan angka (hapus titik, spasi, dll)
    function bersihkanAngka(teks){
        return Number(teks.replace(/\./g,"").replace(/\s/g,""));
    }

    let jawabanSiswa = relations.map(r => 
        [
            r.from.nama.trim(),
            bersihkanAngka(r.to.nama.trim())
        ]
    );

    let benar = 0;
    let salah = [];
    let kurang = [];

    // cek benar / salah
    jawabanSiswa.forEach(js => {
        let ditemukan = kunciJawaban.some(k =>
            k[0]===js[0] && k[1]===js[1]
        );
        if(ditemukan){
            benar++;
        }else{
            salah.push("("+js[0]+", "+js[1]+")");
        }
    });

    // cek yang belum dibuat
    kunciJawaban.forEach(k => {
        let ada = jawabanSiswa.some(js =>
            js[0]===k[0] && js[1]===k[1]
        );
        if(!ada){
            kurang.push("("+k[0]+", "+k[1]+")");
        }
    });

    let output = "";

    if(benar===kunciJawaban.length && salah.length===0){

        document.getElementById('hasilText').setAttribute('data-correct', 'true');
        output += "🎉 <b>Hebat! Diagram panah yang kamu buat adalah FUNGSI.</b><br><br>";

        output += "<b>Bentuk Relasi:</b><br>";
        output += "f(x) = 20.000x<br><br>";

        output += "<b>Domain</b> = {1, 2, 3}<br>";
        output += "<b>Range</b> = {20000, 40000, 60000}<br><br>";

        output += "📝 <b>Kesimpulan:</b> Relasi ini disebut <b>fungsi</b> karena setiap jumlah loyang memiliki tepat satu harga.";

    }else{

        output += "<b>Hasil Pemeriksaan:</b><br><br>";
        output += "✅ Benar: "+benar+" dari "+kunciJawaban.length+"<br><br>";

        if(salah.length>0){
            output += "❌ Relasi tidak sesuai:<br>";
            output += salah.join("<br>")+"<br><br>";
        }

        if(kurang.length>0){
            output += "⚠ Relasi yang belum dibuat:<br>";
            output += kurang.join("<br>");
        }
    }

    document.getElementById("hasilText").innerHTML = output;
}
function hapusLingkaran(){

    if(sets.length === 0) return;

    // ambil lingkaran terakhir
    let terakhir = sets.pop();

    // hapus semua anggota di lingkaran tersebut
    members = members.filter(m => m.set !== terakhir);

    // hapus relasi yang terkait
    relations = relations.filter(r =>
        r.from.set !== terakhir &&
        r.to.set !== terakhir
    );

    // update dropdown (opsional, kalau masih dipakai)
    updateDropdown();

    // atur ulang posisi lingkaran yang tersisa
    aturPosisiHimpunan();
}

function updateDropdown(){
    let select=document.getElementById("setSelect");
    select.innerHTML='<option>Pilih Himpunan</option>';
    sets.forEach(s=>{
        let option=document.createElement("option");
        option.value=s.label;
        option.text=s.label;
        select.appendChild(option);
    });
}

function aturPosisiHimpunan(){
    if(!universe) return;

    let spacing = universe.w/3;
    let centerY = universe.y + universe.h/2;

    sets.forEach((s,i)=>{
        s.x = universe.x + spacing*(i+1);
        s.y = centerY;
        s.r = universe.h / 3.5;
    });
}

function tambahAnggota(){
    let nama=document.getElementById("namaInput").value;
    let target=document.getElementById("setSelect").value;
    if(!nama||target==="Pilih Himpunan") return;

    let s=sets.find(x=>x.label===target);
    members.push(new Member(nama,s));
    document.getElementById("namaInput").value="";
}

function resetSemua(){
    universe=null;
    sets=[];
    members=[];
    relations=[];
    selectedNode=null;
    deleteMode=false;
    document.getElementById("hasilText").innerHTML="";
}

class Universe{
    constructor(x,y,w,h){
        Object.assign(this,{x,y,w,h});
    }
    draw(){
        stroke("#7b2cbf");
        strokeWeight(6);
        noFill();
        rect(this.x,this.y,this.w,this.h,30);

        fill("#4b0082");
        noStroke();
        textAlign(CENTER);
        textSize(18);
        text("HIMPUNAN SEMESTA", this.x+this.w/2, this.y-20);
    }
}

class Himpunan{
    constructor(label,color){
        this.label=label;
        this.color=color;
        this.x=0;
        this.y=0;
        this.r=80;
    }
    draw(){
        noFill();
        stroke(this.color);
        strokeWeight(5);
        ellipse(this.x,this.y,this.r*1.6,this.r*2.6);

        fill("#4b0082");
        noStroke();
        textAlign(CENTER);
        textSize(18);
        text(this.label,this.x,this.y-this.r*1.5);
    }
}

class Member{
    constructor(nama,set){
        this.nama=nama;
        this.set=set;
        this.x=0;
        this.y=0;
        this.radius=9;
    }

    updatePosition(index){

    let list = members.filter(m=>m.set===this.set);
    let total = list.length;

    let spacing = 35;
    let startY = this.set.y - ((total - 1) * spacing) / 2;
    this.y = startY + index * spacing;

    // 🔥 MAJUKAN LAGI TITIKNYA
    if(this.set.label==="A"){
        this.x = this.set.x + 28;   // sebelumnya 16
    }else{
        this.x = this.set.x - 28;   // sebelumnya 16
    }
}
    draw(index){

    this.updatePosition(index);

    textSize(18);
    textAlign(CENTER, CENTER);

    fill(0);
    ellipse(this.x, this.y, this.radius*2);

    let padding = 15; // jarak aman dari titik

    if(this.set.label==="A"){

        // hitung lebar teks
        let w = textWidth(this.nama);

        // geser teks sejauh setengah lebar + padding
        text(this.nama, this.x - (w/2 + this.radius + padding), this.y);

    }else{

        let w = textWidth(this.nama);

        text(this.nama, this.x + (w/2 + this.radius + padding), this.y);
    }
}
    isClicked(mx,my){
        return dist(mx,my,this.x,this.y) < this.radius + 4;
    }
}
</script>

<script>
function cekPasangan(){

    const kunci = {
        "1":"20000",
        "2":"40000",
        "3":"60000"
    };

    let pasangan = [
        {x: x1.value, y: y1.value},
        {x: x2.value, y: y2.value},
        {x: x3.value, y: y3.value}
    ];

    let benar = true;
    let sudahDipakai = [];

    pasangan.forEach(p=>{
        if(!p.x || !p.y || kunci[p.x] !== p.y){
            benar = false;
        }
        if(sudahDipakai.includes(p.x)){
            benar = false;
        }
        sudahDipakai.push(p.x);
    });

    if(benar){
        document.getElementById('hasilPasangan').setAttribute('data-correct', 'true');
        document.getElementById("hasilPasangan").innerHTML = `
        <div class="alert alert-success">
        🎉 Hebat! Jawaban benar.<br><br>
        <b>f = {(1,20000), (2,40000), (3,60000)}</b><br>
        Relasi ini adalah <b>FUNGSI</b>.
        </div>
        `;
    }else{
        document.getElementById("hasilPasangan").innerHTML = `
        <div class="alert alert-danger">
        ❌ Masih ada yang salah atau ada angka x yang dipakai dua kali.
        </div>
        `;
    }
}

function resetPasangan(){
    document.querySelectorAll("select").forEach(s=>s.value="");
    document.getElementById("hasilPasangan").innerHTML="";
}
</script>

<script>
function cekPersamaan(){

    let input = document.getElementById("persamaanInput").value;

    input = input.replace(/\s/g,"").toLowerCase();
    input = input.replace(/\./g,"");

    if(input==="20000x" || input==="20000*x"){
        document.getElementById('hasilPersamaan').setAttribute('data-correct', 'true');
        document.getElementById("hasilPersamaan").innerHTML = `
        <div style="background:#e9d8fd;border:2px solid #7b2cbf;
                    padding:15px;border-radius:10px;color:#240046;">
        🎉 <b>Benar!</b> Persamaan fungsi adalah <b>f(x) = 20000x</b>
        </div>`;
    }else{
        document.getElementById("hasilPersamaan").innerHTML = `
        <div style="background:#fde2e4;border:2px solid #9d0208;
                    padding:15px;border-radius:10px;color:#6a040f;">
        ❌ Masih salah. Harga per loyang adalah Rp20.000.
        </div>`;
    }
}

/* ================= CEK NILAI ================= */
function cekNilai(){

    function bersih(val){
        return Number(val.replace(/\./g,"").replace(/\s/g,""));
    }

    let input1 = document.getElementById("f1");
    let input2 = document.getElementById("f2");
    let input3 = document.getElementById("f3");

    let f1 = bersih(input1.value);
    let f2 = bersih(input2.value);
    let f3 = bersih(input3.value);

    let benar1 = (f1===20000);
    let benar2 = (f2===40000);
    let benar3 = (f3===60000);

    // Reset warna dulu
    input1.style.border = "2px solid #9d4edd";
    input2.style.border = "2px solid #9d4edd";
    input3.style.border = "2px solid #9d4edd";

    // Tandai benar/salah
    if(benar1){
        input1.style.border = "3px solid #2ecc71"; // hijau
    }else{
        input1.style.border = "3px solid #e74c3c"; // merah
    }

    if(benar2){
        input2.style.border = "3px solid #2ecc71";
    }else{
        input2.style.border = "3px solid #e74c3c";
    }

    if(benar3){
        input3.style.border = "3px solid #2ecc71";
    }else{
        input3.style.border = "3px solid #e74c3c";
    }

    if(benar1 && benar2 && benar3){

        document.getElementById('hasilNilai').setAttribute('data-correct', 'true');
        document.getElementById("hasilNilai").innerHTML = `
        <div style="background:#e9d8fd;border:2px solid #7b2cbf;
                    padding:15px;border-radius:10px;color:#240046;">
        🎉 Semua nilai benar!
        </div>`;

    }else{

        document.getElementById("hasilNilai").innerHTML = `
        <div style="background:#fde2e4;border:2px solid #9d0208;
                    padding:15px;border-radius:10px;color:#6a040f;">
        
        ❌ Masih ada nilai yang salah.<br><br>

        <b>Cara menentukan dari rumus f(x) = 20000x :</b><br><br>

        f(1) = 20000 × 1 = <b>20000</b><br>
        f(2) = 20000 × 2 = <b>40000</b><br>
        f(3) = 20000 × 3 = <b>60000</b><br><br>

        👉 Ganti nilai x ke dalam rumus,
        lalu kalikan dengan 20.000.
        </div>`;
    }
}
/* ================= RESET ================= */
function resetPersamaan(){
    document.getElementById("persamaanInput").value="";
    document.getElementById("hasilPersamaan").innerHTML="";
    document.getElementById("f1").value="";
    document.getElementById("f2").value="";
    document.getElementById("f3").value="";
    document.getElementById("hasilNilai").innerHTML="";
}
</script>

<script>
function cekTabelBaru(){

    function bersih(val){
        return Number(val.replace(/\./g,"").replace(/\s/g,""));
    }

    let input4 = document.getElementById("t4");
    let input6 = document.getElementById("t6");
    let input9 = document.getElementById("t9");

    let v4 = bersih(input4.value);
    let v6 = bersih(input6.value);
    let v9 = bersih(input9.value);

    let benar4 = (v4===80000);
    let benar6 = (v6===120000);
    let benar9 = (v9===180000);

    // Reset warna
    input4.style.border = "2px solid #9d4edd";
    input6.style.border = "2px solid #9d4edd";
    input9.style.border = "2px solid #9d4edd";

    // Tandai benar/salah
    input4.style.border = benar4 ? "3px solid #2ecc71" : "3px solid #e74c3c";
    input6.style.border = benar6 ? "3px solid #2ecc71" : "3px solid #e74c3c";
    input9.style.border = benar9 ? "3px solid #2ecc71" : "3px solid #e74c3c";

    if(benar4 && benar6 && benar9){

        document.getElementById('hasilTabelBaru').setAttribute('data-correct', 'true');
        document.getElementById("hasilTabelBaru").innerHTML = `
        <div style="background:#e9d8fd;border:2px solid #7b2cbf;
                    padding:15px;border-radius:10px;color:#240046;">
        🎉 Hebat! Semua nilai benar.<br>
        Kamu sudah menggunakan rumus dengan tepat.
        </div>`;

    }else{

    document.getElementById("hasilTabelBaru").innerHTML = `
    <div style="background:#fde2e4;
                border:2px solid #9d0208;
                padding:15px;
                border-radius:10px;
                color:#6a040f;">
    
    ❌ Masih ada jawaban yang belum tepat.<br><br>
    Cara Menghitung:

    Gunakan persamaan fungsi:<br>
    <b>f(x) = 20000x</b><br><br>

    👉 Ganti nilai <b>x</b> dengan jumlah loyang pada tabel,<br>
    lalu kalikan dengan <b>20.000</b>.
    
    </div>`;
}
}
/* ================= RESET ================= */
function resetTabelBaru(){
    document.getElementById("t4").value="";
    document.getElementById("t6").value="";
    document.getElementById("t9").value="";
    document.getElementById("hasilTabelBaru").innerHTML="";

    document.getElementById("t4").style.border="2px solid #9d4edd";
    document.getElementById("t6").style.border="2px solid #9d4edd";
    document.getElementById("t9").style.border="2px solid #9d4edd";
}
</script>

<script>
let koordinatSketch= function(p){

let mode = "none";
let nCols = 0, nRows = 0;
let labelsX = [], labelsY = [];
let points = [];
let axisDrawn = false;

let gridSize = 60;
let gridStartX = 0;
let gridStartY = 0;

let inputCols, inputRows, modeText;
let labelInputBox;
let currentLabelIndex = 0;
let fillingType = "";

let columnColors = [
"#1abc9c","#2980b9","#8e44ad","#f1c40f","#e74c3c",
"#2ecc71","#ff00ff","#34495e","#00bfff","#ff1493"
];

/* ===== JAWABAN CERITA ===== */


/* ===== SETUP ===== */
p.setup = function(){
let wrapper = document.getElementById("canvas-wrapper");
let w = wrapper.offsetWidth || 900;
let h = wrapper.offsetHeight || 420;
let canvas = p.createCanvas(w, h);
canvas.parent("koordinat-canvas");
p.textFont("Arial");
createUI();
};

window.addEventListener("resize", function(){
let wrapper = document.getElementById("canvas-wrapper");
p.resizeCanvas(wrapper.offsetWidth || 900, wrapper.offsetHeight || 420);
if(axisDrawn) hitungUlangGrid(wrapper.offsetWidth, wrapper.offsetHeight);
});

/* ===== SAMAKAN TINGGI ===== */
function samakanTinggi(){
let hasilBox = document.querySelector(".hasil-box");
let canvasWrapper = document.getElementById("canvas-wrapper");
let tinggiBaru = hasilBox.offsetHeight;
canvasWrapper.style.minHeight = tinggiBaru + "px";
p.resizeCanvas(p.width, tinggiBaru);
if(axisDrawn) hitungUlangGrid(p.width, tinggiBaru);
}

/* ===== GRID ===== */
function hitungUlangGrid(canvasW, canvasH){

  let paddingTop = 70;
  let paddingBottom = 100;

  // Hitung ukuran kotak grid
  gridSize = Math.min(
    (canvasW * 0.7) / nCols,
    (canvasH - paddingTop - paddingBottom) / nRows
  );

  // Hitung total lebar dan tinggi grid
  let totalGridWidth = nCols * gridSize;
  let totalGridHeight = nRows * gridSize;

  // 🔥 PUSATKAN GRID SECARA HORIZONTAL
  gridStartX = (canvasW - totalGridWidth) / 2;

  // 🔥 Tetap beri jarak atas
  gridStartY = paddingTop;
}

/* ===== DRAW ===== */
p.draw = function(){
p.background("#ffffff");
if(axisDrawn){
drawGrid();
drawAxes();
drawLabels();
drawLines();   // 🔥 Tambahkan ini
drawPoints();
}
if(modeText){
modeText.html("<b>Mode:</b> " + getModeDescription());
}
};

function drawGrid(){
p.stroke(210);
for (let i=0;i<=nCols;i++)
p.line(gridStartX+i*gridSize,gridStartY,
gridStartX+i*gridSize,gridStartY+nRows*gridSize);
for (let j=0;j<=nRows;j++)
p.line(gridStartX,gridStartY+j*gridSize,
gridStartX+nCols*gridSize,gridStartY+j*gridSize);
}

function drawAxes(){
p.stroke("#000");
p.strokeWeight(4);
p.line(gridStartX,gridStartY+nRows*gridSize,
gridStartX+nCols*gridSize,gridStartY+nRows*gridSize);
p.line(gridStartX,gridStartY,
gridStartX,gridStartY+nRows*gridSize);

p.noStroke();
p.fill(0);
p.textSize(28);
p.textStyle(p.BOLD);

p.textAlign(p.CENTER,p.BOTTOM);
p.text("y", gridStartX, gridStartY-10);

p.textAlign(p.LEFT,p.CENTER);
p.text("x",
gridStartX+nCols*gridSize+10,
gridStartY+nRows*gridSize);
p.textStyle(p.NORMAL);
}

function drawLabels(){
p.fill(0);
p.textSize(Math.max(12, gridSize/3.5));

for(let i=0;i<nCols;i++){
if(labelsX[i]){
  let x = gridStartX + (i+1)*gridSize;
  let y = gridStartY + nRows*gridSize;

  p.textAlign(p.CENTER, p.TOP);
  p.text(labelsX[i], x, y + 8);
}
}

for(let j=0;j<nRows;j++){
if(labelsY[j]){
p.textAlign(p.RIGHT,p.CENTER);
p.text(labelsY[j],
gridStartX-10,
gridStartY+j*gridSize);
}
}
}

function drawPoints(){

  for(let pt of points){

    let newX = gridStartX + (pt.i+1)*gridSize;
    let newY = gridStartY + pt.j*gridSize;

    // Gambar titik
    p.fill(pt.c);
    p.stroke(0);
    p.circle(newX, newY, Math.max(12, gridSize/3.5));

    // =========================
    // TAMPILKAN KOORDINAT
    // =========================
    let xLabel = labelsX[pt.i];
    let yLabel = labelsY[pt.j];

    p.noStroke();
    p.fill(0);
    p.textSize(Math.max(12, gridSize/3.5));
  p.textAlign(p.LEFT, p.CENTER);

p.text("(" + xLabel + ", " + yLabel + ")", 
       newX + 10, 
       newY);
  }

}
function drawLines(){

  if(points.length < 2) return;

  // Urutkan berdasarkan X saja
  let sorted = [...points].sort((a,b)=>a.i - b.i);

  p.stroke("#2c3e50");
  p.strokeWeight(3);
  p.noFill();

  p.beginShape();

  for(let pt of sorted){

    let x = gridStartX + (pt.i+1)*gridSize;
    let y = gridStartY + pt.j*gridSize;

    p.vertex(x,y);
  }

  p.endShape();
  p.strokeWeight(1);
}
/* ===== CLICK GRID ===== */
p.mousePressed = function(){

if(!axisDrawn) return;
if(mode !== "addPoint" && mode !== "erase") return;

if(
p.mouseX < gridStartX ||
p.mouseX > gridStartX + nCols*gridSize ||
p.mouseY < gridStartY ||
p.mouseY > gridStartY + nRows*gridSize
) return;

let i = Math.floor((p.mouseX-gridStartX)/gridSize);
let j = Math.floor((p.mouseY-gridStartY)/gridSize);

if(mode==="addPoint"){
if(!labelsX[i] || !labelsY[j]){
ProgressManager.showAlert('Isi semua anggota himpunan dulu.');
return;
}
if(points.some(pt=>pt.i===i && pt.j===j)) return;
points.push({ i:i, j:j, c:columnColors[i] });
}

if(mode==="erase"){
for(let k=points.length-1;k>=0;k--){
let px = gridStartX + (points[k].i+1)*gridSize;
let py = gridStartY + points[k].j*gridSize;
if(p.dist(p.mouseX,p.mouseY,px,py) <= gridSize/2){
points.splice(k,1);
break;
}
}
}

};

/* ===== INPUT HIMPUNAN ===== */
function startLabelFill(type){
if(!axisDrawn){
ProgressManager.showAlert('Klik Gambar Grafik dulu.');
return;
}
fillingType = type;
currentLabelIndex = 0;
renderSingleLabelInput();
}

function renderSingleLabelInput(){

  labelInputBox.html("");

  // Tentukan total yang benar
  let total = fillingType==="A" ? nCols : nRows;

  // Tentukan nama yang ditampilkan
  let nama = fillingType==="A" 
      ? "nilai x" 
      : "nilai y / f(x)";

  labelInputBox.html(
    "<b>Masukkan "+nama+
    " ke-"+(currentLabelIndex+1)+" dari "+total+":</b><br><br>"
  );

  let inp = p.createInput("");
  inp.parent(labelInputBox);
  inp.style("width","250px");
  inp.elt.focus();

  let btn = p.createButton("SIMPAN");
  btn.parent(labelInputBox);

  btn.mousePressed(()=>{

    let v = inp.value().trim();
    if(!v) return;

    if(fillingType==="A") 
        labelsX[currentLabelIndex]=v;
    else 
        // 🔥 supaya sumbu y tersusun dari bawah ke atas
        labelsY[nRows - 1 - currentLabelIndex] = v;

    currentLabelIndex++;
    inp.remove();
    btn.remove();

    if(currentLabelIndex>=total){
      labelInputBox.html("<span style='color:green;'>✔ Semua nilai berhasil diisi.</span>");
      return;
    }

    renderSingleLabelInput();
  });

}

/* ===== GENERATE ===== */
function generateGrid(){
nCols=parseInt(inputCols.value());
nRows=parseInt(inputRows.value());
labelsX=new Array(nCols).fill("");
labelsY=new Array(nRows).fill("");
points=[];
axisDrawn=true;
hitungUlangGrid(p.width,p.height);
document.getElementById("feedback-area").innerHTML="";
}


/* ===== PERIKSA ===== */
function periksaJawaban(){

  if(points.length === 0){
    document.getElementById("feedback-area").innerHTML =
    "⚠️ Kamu belum membuat titik pada grafik.";
    return;
  }

  let html = "";

  // Domain sesuai cerita
  let domainValid = [1,2,3];

  let salahX = [];
  let salahY = [];
  let bukanFungsi = false;
  let pasanganX = {};

  for(let pt of points){

    let x = Number(labelsX[pt.i].replace(/\./g, ""));
    let y = Number(labelsY[pt.j].replace(/\./g, ""));

    // ================= CEK BUKAN FUNGSI =================
    if(pasanganX[x] !== undefined && pasanganX[x] !== y){
      bukanFungsi = true;
    }
    pasanganX[x] = y;

    // ================= CEK NILAI X =================
    if(!domainValid.includes(x)){
      salahX.push([x,y]);
    }

    // ================= CEK NILAI Y =================
    if(y !== 20000 * x){
      salahY.push([x,y]);
    }
  }

  // ================= CEK JUMLAH TITIK =================
  if(points.length !== 3){
    html += "⚠️ <b>Jumlah titik belum sesuai cerita.</b><br><br>";
    html += "Grafik harus memuat tepat 3 titik untuk x = 1, 2, dan 3.";
  }

  // ================= BUKAN FUNGSI =================
  else if(bukanFungsi){

  html += "❌ <b>Bukan Fungsi</b><br><br>";

  for(let x in pasanganX){

    let semuaTitik = points.filter(pt =>
      Number(labelsX[pt.i].replace(/\./g,"")) == x
    );

    let daftarY = semuaTitik.map(pt =>
      Number(labelsY[pt.j].replace(/\./g,""))
    );

    let unikY = [...new Set(daftarY)];

    if(unikY.length > 1){

      html += "Nilai x = " + x + 
              " memiliki lebih dari satu nilai y:<br>";

      html += semuaTitik.map(pt=>{
        let y = Number(labelsY[pt.j].replace(/\./g,""));
        return "(" + x + ", " + y + ")";
      }).join("<br>");

      html += "<br><br>";
    }
  }

  html += "Setiap nilai x hanya boleh memiliki satu nilai y.";
}

  // ================= ADA KESALAHAN =================
  else if(salahX.length > 0 || salahY.length > 0){

    html += "⚠️ <b>Ada kesalahan pada titik berikut:</b><br><br>";

    if(salahX.length > 0){
      html += "<b>Nilai x tidak sesuai cerita:</b><br>";
      html += salahX.map(p=>"("+p[0]+", "+p[1]+")").join("<br>");
      html += "<br><br>";
    }

    if(salahY.length > 0){
      html += "<b>Nilai y belum sesuai dengan rumus:</b><br>";
      html += salahY.map(p=>"("+p[0]+", "+p[1]+")").join("<br>");
      html += "<br><br>";
      html += "Gunakan rumus f(x) = 20.000 × x.";
    }
  }

  // ================= SEMUA BENAR =================
  else{

    document.getElementById('feedback-area').setAttribute('data-correct', 'true');
    html += "🎉 <b>Hebat sekali!</b><br><br>";

    let pasangan = "{ ";
    pasangan += points.map(pt=>{
      let x = Number(labelsX[pt.i].replace(/\./g, ""));
      let y = Number(labelsY[pt.j].replace(/\./g, ""));
      return "(" + x + ", " + y + ")";
    }).join(", ");
    pasangan += " }";

    html += "Titik-titik pada grafikmu adalah:<br><br>";
    html += pasangan + "<br><br>";
    html += "Grafik sudah sesuai dengan cerita dan merupakan fungsi.";
  }

  document.getElementById("feedback-area").innerHTML = html;
  setTimeout(samakanTinggi,50);
}

function resetAll(){
axisDrawn=false;
points=[];
labelsX=[];
labelsY=[];
document.getElementById("feedback-area").innerHTML="";
setTimeout(samakanTinggi,50);
}

function getModeDescription(){
switch(mode){
case "addPoint": return "Klik kotak untuk membuat relasi";
case "erase": return "Klik kotak untuk menghapus";
default: return "Pilih tombol";
}
}

function createUI(){
let wrapper=p.createDiv("");
wrapper.parent("koordinat-controls");

let inputBox=p.createDiv("<b>Jumlah titik pada sumbu X:</b> ");
inputBox.parent(wrapper);

inputCols=p.createInput("5","number");
inputCols.attribute("min","1");
inputCols.attribute("max","10");
inputCols.style("width","60px");
inputCols.parent(inputBox);

p.createSpan(" &nbsp;&nbsp; <b>Jumlah titik pada sumbu Y:</b> ").parent(inputBox);

inputRows=p.createInput("4","number");
inputRows.attribute("min","1");
inputRows.attribute("max","10");
inputRows.style("width","60px");
inputRows.parent(inputBox);

makeButton("📊 Gambar Grafik",generateGrid,wrapper);
makeButton("🔢 Isi Sumbu X",()=>startLabelFill("A"),wrapper);
makeButton("🔢 Isi Sumbu Y",()=>startLabelFill("B"),wrapper);
makeButton("🔵 Tambah Titik",()=>mode="addPoint",wrapper);
makeButton("❌ Hapus Titik",()=>mode="erase",wrapper);
makeButton("🗑 Reset",resetAll,wrapper);
makeButton("✅ Periksa Jawaban",periksaJawaban,wrapper);

modeText=p.createDiv("<br><b>Mode:</b> Pilih tombol");
modeText.parent(wrapper);

labelInputBox=p.createDiv("");
labelInputBox.parent(wrapper);
labelInputBox.style("margin-top","15px");
labelInputBox.style("padding","15px");
labelInputBox.style("background","#f8f5ff");
labelInputBox.style("border","2px dashed #7b2cbf");
labelInputBox.style("border-radius","10px");
}

function makeButton(txt,fn,parent){
let b=p.createButton(txt);
b.parent(parent);
b.style("margin","6px");
b.style("padding","8px 14px");
b.style("background","#7b2cbf");
b.style("color","white");
b.style("border","none");
b.style("border-radius","6px");
b.mousePressed(fn);
}

};

new p5(koordinatSketch);
</script>

@endsection
