@extends('layouts.main')

@section('container')

<style>

    /* =========================================================
       KORESPONDENSI SATU-SATU - LAYOUT SEPERTI RELASI
    ========================================================= */

    .content-gap {
        margin-left: 40px;
        margin-right: 20px;
        box-sizing: border-box;
        max-width: 100%;
        overflow-x: clip;
        font-family: 'Poppins', sans-serif;
    }

    .kores-page {
        display: none;
        width: 100%;
        max-width: 100%;
        box-sizing: border-box;
        overflow-x: clip;
    }

    .kores-page.active {
        display: block;
    }

    .kores-page > * {
        max-width: 100%;
        box-sizing: border-box;
    }

    .kores-card {
        background: #ffffff;
        border: 1px solid #eadcf6;
        border-radius: 26px;
        padding: 24px;
        margin-top: 20px;
        box-shadow: 0 14px 32px rgba(91, 44, 111, 0.08);
        box-sizing: border-box;
        overflow: hidden;
    }

    .kores-page-title {
        background: linear-gradient(135deg, #8E44AD, #B57EDC);
        color: #ffffff;
        text-align: center;
        padding: 16px 22px;
        border-radius: 20px;
        font-weight: 800;
        font-size: 1.25rem;
        margin-bottom: 22px;
        box-shadow: 0 10px 20px rgba(142, 68, 173, 0.16);
    }

    .kores-body {
        background: #ffffff;
        color: #333;
        line-height: 1.8;
        box-sizing: border-box;
    }

    .label-box {
        display: inline-block;
        padding: 8px 16px;
        background: #FBF7FF;
        color: #4B2673;
        font-weight: 800;
        border-radius: 12px;
        border: 1px solid #E9D5FF;
        border-left: 5px solid #A855F7;
        margin: 18px 0 10px;
        font-size: 0.95rem;
        box-shadow: 0 4px 10px rgba(91, 44, 111, 0.04);
    }

    .purple-divider {
        margin: 25px 0;
        border: 0;
        border-top: 2px dashed #CFA7F3;
        opacity: 1;
    }

    .table-responsive {
        width: 100%;
    }

    .purple-table {
        margin-bottom: 0;
        background: #ffffff;
        border-color: #E9D5FF !important;
        overflow: hidden;
    }

    .purple-table thead {
        background: #F3E8FF;
        color: #4B2673;
    }

    .purple-table th,
    .purple-table td {
        border: 1px solid #E9D5FF !important;
        vertical-align: middle !important;
        padding: 12px !important;
    }

    .purple-table tbody tr:nth-child(even) {
        background: #FBF7FF;
    }

    /* =========================================================
       PAGINATION
    ========================================================= */

    .kores-pagination {
        width: 100%;
        margin-top: 30px;
        margin-bottom: 35px;
        clear: both;
    }

    .kores-pagination .pagination {
        gap: 5px;
    }

    .kores-pagination .page-link {
        color: #6A2C70;
        border: 1px solid #E3C7F3;
        border-radius: 12px !important;
        font-weight: 700;
        background-color: #ffffff;
        box-shadow: 0 2px 6px rgba(0,0,0,0.08);
    }

    .kores-pagination .page-link:hover {
        background-color: #F3E5FF;
        color: #4B2673;
    }

    .kores-pagination .page-item.active .page-link {
        background-color: #CDA4DE;
        border-color: #CDA4DE;
        color: #ffffff;
    }

    .kores-pagination .page-item.disabled .page-link {
        color: #aaaaaa;
        background-color: #f6f6f6;
        border-color: #eeeeee;
        box-shadow: none;
        pointer-events: none;
    }

    @media (max-width: 768px) {
        .content-gap {
            margin-left: 12px;
            margin-right: 12px;
        }

        .kores-card {
            padding: 16px;
            border-radius: 20px;
        }

        .kores-page-title {
            font-size: 1.05rem;
            padding: 14px 16px;
            border-radius: 16px;
        }

        .kores-pagination .page-link {
            font-size: 0.82rem;
            padding: 7px 9px;
        }
    }
/* ================= CONTOH 4.2 ================= */

.example-box{

background:#fff;

border:2px solid #E8D8FA;

border-radius:24px;

margin-top:25px;

overflow:hidden;

box-shadow:0 10px 25px rgba(142,68,173,.08);

}

.example-header{

display:flex;

align-items:center;

gap:15px;

padding:18px 24px;

background:linear-gradient(135deg,#8E44AD,#B57EDC);

color:white;

font-size:20px;

font-weight:700;

}

.header-icon{

width:42px;

height:42px;

border-radius:50%;

background:rgba(255,255,255,.2);

display:flex;

align-items:center;

justify-content:center;

font-size:20px;

}

.example-content{

padding:25px;

line-height:1.9;

}

.info-block{

margin-bottom:22px;

}

.formula-card{

background:#FAF6FF;

border:2px solid #E8D8FA;

border-radius:15px;

padding:15px 18px;

margin-top:10px;

}

.formula-text{

font-size:17px;

}

.relation-card{

margin-top:15px;

background:white;

border:2px solid #E8D8FA;

border-radius:15px;

padding:18px;

}

.relation-title{

font-weight:700;

color:#6A1B9A;

margin-bottom:15px;

}

.relation-table thead{

background:#F3E8FF;

}

.note-box{

display:flex;

gap:15px;

padding:18px;

background:#FFFBEA;

border-left:6px solid #F4B400;

border-radius:15px;

}

.note-icon{

font-size:26px;

}

.question-card{

display:flex;

gap:20px;

align-items:flex-start;

}

.question-image{

flex-shrink:0;

}

.question-circle{

width:65px;

height:65px;

border-radius:50%;

background:#8E44AD;

color:white;

display:flex;

justify-content:center;

align-items:center;

font-size:30px;

font-weight:bold;

}

.question-text{

flex:1;

}

.question-highlight{

margin-top:15px;

padding:18px;

background:#F6ECFF;

border-left:6px solid #8E44AD;

border-radius:12px;

font-weight:600;

}

.analysis-intro{

padding:18px;

background:#F8F5FF;

border-left:6px solid #8E44AD;

border-radius:12px;

margin-bottom:25px;

}

.analysis-step{

display:flex;

gap:18px;

padding:20px;

border:2px solid #E8D8FA;

border-radius:18px;

margin-bottom:18px;

transition:.3s;

}

.analysis-step:hover{

transform:translateY(-2px);

box-shadow:0 8px 18px rgba(142,68,173,.08);

}

.step-number{

width:45px;

height:45px;

border-radius:50%;

background:#8E44AD;

color:white;

display:flex;

align-items:center;

justify-content:center;

font-weight:bold;

font-size:18px;

flex-shrink:0;

}

.step-content{

flex:1;

}

.step-content h5{

color:#6A1B9A;

font-weight:700;

margin-bottom:12px;

}

.step-result{

margin-top:15px;

padding:12px 15px;

border-radius:10px;

font-weight:600;

}

.success{

background:#F2FFF4;

border-left:5px solid #4CAF50;

color:#2E7D32;

}

.conclusion-card{

display:flex;

gap:20px;

background:#F4FFF5;

border:2px solid #A5D6A7;

border-radius:18px;

padding:22px;

}

.conclusion-icon{

width:60px;

height:60px;

border-radius:50%;

background:#4CAF50;

color:white;

display:flex;

justify-content:center;

align-items:center;

font-size:30px;

font-weight:bold;

flex-shrink:0;

}

.conclusion-content h5{

color:#2E7D32;

font-weight:700;

margin-bottom:15px;

}

.conclusion-content ul{

margin-top:15px;

padding-left:20px;

line-height:2;

}

@media(max-width:768px){

.question-card,
.analysis-step,
.conclusion-card,
.note-box{

flex-direction:column;

}

.question-circle,
.step-number,
.conclusion-icon{

margin:auto;

}

}

/* ===========================
   CONTOH 4.3
===========================*/

.kores-section{
    background:#fff;
    border:2px solid #d8c2ff;
    border-radius:18px;
    padding:28px;
    margin:28px 0;
    box-shadow:0 8px 20px rgba(111,66,193,.08);
}

.kores-section p{
    line-height:1.9;
    margin-bottom:14px;
    color:#333;
}

.kores-list{
    margin:18px 0;
    padding-left:28px;
}

.kores-list li{
    margin-bottom:10px;
    line-height:1.8;
}

.set-card{
    background:#faf8ff;
    border-left:5px solid #8b4fd3;
    border-radius:15px;
    padding:18px 22px;
    margin:18px 0;
}

.set-title{
    color:#6f42c1;
    font-size:18px;
    font-weight:700;
    margin-bottom:12px;
}

.set-value{
    text-align:center;
    font-weight:700;
    font-size:18px;
}

.relation-card{
    margin-top:20px;
    border:2px dashed #9b67d8;
    border-radius:15px;
    padding:20px;
    background:#fcfbff;
    text-align:center;
}

.question-card{
    background:#fff9fd;
    border-left:6px solid #8b4fd3;
    border-radius:15px;
    padding:20px 24px;
    font-size:17px;
    line-height:1.8;
}

.analysis-table{
    width:100%;
    border-collapse:collapse;
    margin-top:20px;
}

.analysis-table td{
    border:1px solid #e5d9fb;
    padding:15px;
    vertical-align:top;
}

.analysis-table tr:nth-child(even){
    background:#faf8ff;
}

.analysis-table td:first-child{
    width:72%;
    font-weight:600;
}

.answer{
    color:#6f42c1;
    font-weight:700;
}

.conclusion-card{
    background:#f3fff8;
    border-left:6px solid #2fb66c;
    border-radius:15px;
    padding:22px;
    line-height:1.9;
}

/* RESPONSIVE */

@media(max-width:768px){

    .kores-section{
        padding:20px;
    }

    .analysis-table td{
        display:block;
        width:100%;
    }

    .analysis-table tr{
        display:block;
        margin-bottom:12px;
    }

}
</style>

<div class="content-gap" data-materi="materi_4" data-sub-page="penyajian" data-total-pages="4">

    <!-- ====================== HALAMAN 1 ====================== -->
    <div class="kores-page active" id="koresPage1">
        <div class="kores-card">
            <div class="kores-page-title">
                Contoh 4.1
            </div>

            <div class="kores-body">
<p style="font-size:1rem; line-height:1.8;">
                Seperti yang ada di permasalahan sebelumnya,
                diperoleh data berikut.
            </p>
<div class="table-responsive my-3">
<table class="table table-bordered text-center align-middle purple-table" style="max-width:450px;">
<thead>
<tr>
<th>Anggota Keluarga</th>
<th>Wadai yang Dibeli</th>
</tr>
</thead>
<tbody>
<tr>
<td>Ibu Rahmah</td>
<td>Bingka</td>
</tr>
<tr>
<td>Bapak Zain</td>
<td>Ipau</td>
</tr>
<tr>
<td>Nisa</td>
<td>Wadai Cincin</td>
</tr>
<tr>
<td>Rafi</td>
<td>Putri Selat</td>
</tr>
</tbody>
</table>
</div>
<p style="font-size:1rem; line-height:1.8;">
                Hubungan antara anggota keluarga dan wadai yang dibeli
                merupakan <strong>korespondensi satu-satu</strong>, karena:
            </p>
<ul style="font-size:1rem; line-height:1.8;">
<li>Setiap anggota keluarga membeli satu jenis wadai yang berbeda.</li>
<li>Setiap jenis wadai hanya dibeli oleh satu orang.</li>
</ul>
<p style="font-size:1rem; line-height:1.8; margin-top:15px;">
<strong>Banyak Korespondensi Satu-satu</strong>
</p>
<p style="font-size:1rem; line-height:1.8;">
                Banyaknya cara berbeda untuk memasangkan anggota keluarga
                dengan wadai khas dapat dihitung menggunakan faktorial (<em>n!</em>).
            </p>
<p style="font-size:1rem; font-weight:600;">
                Banyak korespondensi satu-satu = n!
            </p>
<p style="font-size:1rem;">
                4! = 4 × 3 × 2 × 1 = 24
            </p>
<p style="font-size:1rem; line-height:1.8;">
                Artinya, terdapat <strong>24 cara berbeda</strong> untuk
                memasangkan anggota keluarga dengan jenis wadai yang dibeli.
            </p>
<p style="font-size:1rem; line-height:1.8;">
                Namun, hanya satu susunan yang benar-benar terjadi sesuai
                selera masing-masing anggota keluarga, seperti pada tabel di atas.
            </p>
            </div>
        </div>
    </div>
    <!-- ====================== HALAMAN 2 ====================== -->
    <div class="kores-page" id="koresPage2">
        <div class="kores-card">
            <div class="kores-page-title">
                Ciri-Ciri Korespondensi Satu-Satu
            </div>

            <div class="kores-body">
<ol style="font-size:1rem; line-height:1.8; margin-left:15px;">
<li>Setiap anggota himpunan A berpasangan tepat dengan satu anggota himpunan B.</li>
<li>Setiap anggota himpunan B berpasangan tepat dengan satu anggota himpunan A.</li>
<li>Banyak anggota himpunan A dan B harus sama (<strong>n(A) = n(B)</strong>).</li>
<li>Tidak ada anggota yang berpasangan ganda atau tidak memiliki pasangan.</li>
</ol>
            </div>
        </div>
    </div>
   <!-- ====================== HALAMAN 3 ====================== -->
<div class="kores-page" id="koresPage3">

    <div class="kores-card">

        <div class="kores-page-title">
            Contoh 4.2
        </div>

        <div class="kores-body">

            <!-- ====================== DIKETAHUI ====================== -->

            <div class="example-box">

                <div class="example-header">

                    <div class="header-icon">
                        <i class="bi bi-book"></i>
                    </div>

                    <span>Diketahui</span>

                </div>

                <div class="example-content">

                    <p>
                        Perhatikan data berikut!
                    </p>

                    <div class="info-block">

                        <p>
                            Himpunan <b>K</b> adalah himpunan anggota keluarga.
                        </p>

                        <div class="formula-card">

                            <b>K</b> =
                            {Ibu Rahmah, Bapak Zain, Nisa, Rafi, Umi, Ahmad}

                        </div>

                    </div>

                    <div class="info-block">

                        <p>
                            Himpunan <b>L</b> adalah himpunan jenis wadai.
                        </p>

                        <div class="formula-card">

                            <b>L</b> =
                            {Bingka, Ipau, Wadai Cincin,
                            Putri Selat, Amparan Tatak, Cucur}

                        </div>

                    </div>

                    <div class="info-block">

                        <p>
                            Hubungan anggota keluarga dengan jenis wadai
                            dinyatakan sebagai berikut.
                        </p>

                        <div class="relation-card">

                            <div class="relation-title">
                                Relasi R
                            </div>

                            <table class="table table-bordered relation-table">

                                <thead>

                                <tr>

                                    <th>Anggota Keluarga</th>

                                    <th>Jenis Wadai</th>

                                </tr>

                                </thead>

                                <tbody>

                                <tr>
                                    <td>Ibu Rahmah</td>
                                    <td>Bingka</td>
                                </tr>

                                <tr>
                                    <td>Bapak Zain</td>
                                    <td>Ipau</td>
                                </tr>

                                <tr>
                                    <td>Nisa</td>
                                    <td>Wadai Cincin</td>
                                </tr>

                                <tr>
                                    <td>Rafi</td>
                                    <td>Putri Selat</td>
                                </tr>

                                <tr>
                                    <td>Umi</td>
                                    <td>Amparan Tatak</td>
                                </tr>

                                <tr>
                                    <td>Ahmad</td>
                                    <td>Cucur</td>
                                </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

            <!-- ====================== DITANYA ====================== -->

            <div class="example-box mt-4">

                <div class="example-header">

                    <div class="header-icon">
                        <i class="bi bi-question-lg"></i>
                    </div>

                    <span>Ditanya</span>

                </div>

                <div class="example-content">

                    <p>

                        Apakah hubungan antara himpunan
                        <b>K</b> dan himpunan
                        <b>L</b> merupakan
                        <b>korespondensi satu-satu</b>?

                    </p>

                    <p>

                        Jelaskan berdasarkan syarat-syarat
                        korespondensi satu-satu.

                    </p>

                </div>

            </div>

            <!-- ANALISIS -->
            <!-- ====================== ANALISIS ====================== -->

<div class="example-box mt-4">

    <div class="example-header">

        <div class="header-icon">
            <i class="bi bi-search"></i>
        </div>

        <span>Analisis</span>

    </div>

    <div class="example-content">

        <div class="analysis-intro">

            Untuk menentukan apakah hubungan tersebut merupakan
            <b>korespondensi satu-satu</b>, lakukan analisis berdasarkan
            syarat-syarat berikut.

        </div>

        <!-- LANGKAH 1 -->

        <div class="analysis-step">

            <div class="step-number">
                1
            </div>

            <div class="step-content">

                <h5>
                    Periksa Banyak Anggota Himpunan
                </h5>

                <p>

                    Banyak anggota himpunan
                    <b>K = 6</b> orang.

                </p>

                <p>

                    Banyak anggota himpunan
                    <b>L = 6</b> jenis wadai.

                </p>

                <div class="step-result success">

                    ✔ Jumlah anggota kedua himpunan sama.

                </div>

            </div>

        </div>

        <!-- LANGKAH 2 -->

        <div class="analysis-step">

            <div class="step-number">
                2
            </div>

            <div class="step-content">

                <h5>

                    Periksa Pasangan Anggota Himpunan K

                </h5>

                <p>

                    Setiap anggota himpunan
                    <b>K</b> dipasangkan tepat
                    dengan satu anggota himpunan
                    <b>L</b>.

                </p>

                <div class="step-result success">

                    ✔ Semua anggota K mempunyai tepat satu pasangan.

                </div>

            </div>

        </div>

        <!-- LANGKAH 3 -->

        <div class="analysis-step">

            <div class="step-number">
                3
            </div>

            <div class="step-content">

                <h5>

                    Periksa Pasangan yang Sama

                </h5>

                <p>

                    Tidak terdapat dua anggota
                    himpunan K yang dipasangkan
                    dengan jenis wadai yang sama.

                </p>

                <div class="step-result success">

                    ✔ Tidak ada pasangan ganda.

                </div>

            </div>

        </div>

        <!-- LANGKAH 4 -->

        <div class="analysis-step">

            <div class="step-number">
                4
            </div>

            <div class="step-content">

                <h5>

                    Periksa Semua Anggota Himpunan L

                </h5>

                <p>

                    Semua anggota himpunan
                    <b>L</b> mempunyai tepat
                    satu pasangan dari himpunan
                    <b>K</b>.

                </p>

                <div class="step-result success">

                    ✔ Semua syarat korespondensi satu-satu terpenuhi.

                </div>

            </div>

        </div>

    </div>

</div>

            <!-- KESIMPULAN -->
         <!-- ====================== KESIMPULAN ====================== -->

<div class="example-box mt-4">

    <div class="example-header">

        <div class="header-icon">
            <i class="bi bi-check-circle-fill"></i>
        </div>

        <span>Kesimpulan</span>

    </div>

    <div class="example-content">

        <div class="conclusion-card">

            <div class="conclusion-icon">

                ✓

            </div>

            <div class="conclusion-content">

                <h5>

                    Hubungan R merupakan
                    korespondensi satu-satu.

                </h5>

                <p>

                    Berdasarkan hasil analisis di atas,
                    hubungan antara himpunan
                    <b>K</b> dan himpunan
                    <b>L</b> merupakan
                    <b>korespondensi satu-satu</b>.

                </p>

                <ul>

                    <li>
                        Banyak anggota himpunan K dan L sama.
                    </li>

                    <li>
                        Setiap anggota himpunan K memiliki tepat satu pasangan.
                    </li>

                    <li>
                        Tidak ada pasangan yang sama.
                    </li>

                    <li>
                        Semua anggota himpunan L memiliki tepat satu pasangan.
                    </li>

                </ul>

            </div>

        </div>

    </div>

</div>

        </div>

    </div>

</div>
 <!-- ====================== HALAMAN 4 ====================== -->
<div class="kores-page" id="koresPage4">

    <div class="kores-card">

        <div class="kores-page-title">
            Contoh 4.3
        </div>

        <div class="kores-body">

            <!-- ================= Diketahui ================= -->
            <div class="kores-section">

                <div class="label-box">Diketahui</div>

                <p><strong>Perhatikan permasalahan berikut!</strong></p>

                <p>
                    Di kelas VIII terdapat lima peserta didik yang menggunakan
                    loker untuk menyimpan perlengkapan sekolah.
                    Setiap peserta didik menggunakan satu loker.
                    Data penggunaan loker sebagai berikut.
                </p>

                <ul class="kores-list">
                    <li>Alya menggunakan <b>Loker 1</b>.</li>
                    <li>Bima menggunakan <b>Loker 2</b>.</li>
                    <li>Citra menggunakan <b>Loker 3</b>.</li>
                    <li>Dinda menggunakan <b>Loker 3</b>.</li>
                    <li>Eko menggunakan <b>Loker 4</b>.</li>
                </ul>

                <p>
                    Sekolah menyediakan lima loker, yaitu
                    Loker 1, Loker 2, Loker 3,
                    Loker 4, dan Loker 5.
                </p>

                <div class="set-card">

                    <div class="set-title">
                        Himpunan P (Peserta Didik)
                    </div>

                    <div class="set-value">
                        P = {Alya, Bima, Citra, Dinda, Eko}
                    </div>

                </div>

                <div class="set-card">

                    <div class="set-title">
                        Himpunan Q (Nomor Loker)
                    </div>

                    <div class="set-value">
                        Q = {Loker 1, Loker 2, Loker 3, Loker 4, Loker 5}
                    </div>

                </div>

                <div class="relation-card">

                    <div class="set-title">
                        Relasi R
                    </div>

                    <p>
                        R = {
                    </p>

                    <p>
                        (Alya, Loker 1),<br>
                        (Bima, Loker 2),<br>
                        (Citra, Loker 3),<br>
                        (Dinda, Loker 3),<br>
                        (Eko, Loker 4)
                    </p>

                    <p>}
                    </p>

                </div>

            </div>

            <!-- ================= Ditanya ================= -->

            <div class="kores-section">

                <div class="label-box">Ditanya</div>

                <div class="question-card">

                    Apakah hubungan antara anggota himpunan
                    <strong>P</strong> dan anggota himpunan
                    <strong>Q</strong> merupakan
                    <strong>korespondensi satu-satu</strong>?

                    Jelaskan berdasarkan syarat dan ciri-cirinya.

                </div>

            </div>

            <!-- ================= Analisis ================= -->

            <div class="kores-section">

                <div class="label-box">Analisis</div>

                <table class="analysis-table">

                    <tr>
                        <td>Banyak anggota himpunan P</td>
                        <td class="answer">
                            5 peserta didik
                        </td>
                    </tr>

                    <tr>
                        <td>Banyak anggota himpunan Q</td>
                        <td class="answer">
                            5 loker
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Apakah setiap anggota himpunan P menggunakan tepat satu loker?
                        </td>

                        <td class="answer">
                            Ya
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Apakah setiap anggota himpunan Q hanya dipasangkan dengan satu peserta didik?
                        </td>

                        <td class="answer">
                            Tidak
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Loker yang digunakan lebih dari satu peserta didik
                        </td>

                        <td class="answer">
                            Loker 3
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Peserta didik yang menggunakan loker tersebut
                        </td>

                        <td class="answer">
                            Citra dan Dinda
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Loker yang belum digunakan oleh peserta didik
                        </td>

                        <td class="answer">
                            Loker 5
                        </td>
                    </tr>

                </table>

            </div>

            <!-- ================= Kesimpulan ================= -->

            <div class="kores-section">

                <div class="label-box">
                    Kesimpulan
                </div>

                <div class="conclusion-card">

                    Berdasarkan hasil analisis,
                    hubungan <strong>R bukan merupakan korespondensi satu-satu</strong>.

                    <br><br>

                    Hal ini karena
                    <strong>Loker 3 digunakan oleh dua peserta didik</strong>,
                    yaitu Citra dan Dinda,
                    sedangkan
                    <strong>Loker 5 tidak memiliki pasangan</strong>.

                    <br><br>

                    Dengan demikian,
                    syarat korespondensi satu-satu,
                    yaitu setiap anggota himpunan P dan Q harus memiliki
                    tepat satu pasangan, <strong>tidak terpenuhi</strong>.

                </div>

            </div>

        </div>

    </div>

</div>

    <!-- ====================== PAGINATION ====================== -->
    <div class="kores-pagination">
        <nav aria-label="Pagination Materi Korespondensi Satu-satu">
            <ul class="pagination justify-content-center flex-wrap">

                <li class="page-item disabled" id="koresPrevItem">
                    <button type="button"
                            class="page-link"
                            onclick="changeKoresPage(currentKoresPage - 1)">
                        Sebelumnya
                    </button>
                </li>

                <li class="page-item active" id="koresPageItem1">
                    <button type="button" class="page-link" onclick="changeKoresPage(1)">1</button>
                </li>
                <li class="page-item" id="koresPageItem2">
                    <button type="button" class="page-link" onclick="changeKoresPage(2)">2</button>
                </li>
                <li class="page-item" id="koresPageItem3">
                    <button type="button" class="page-link" onclick="changeKoresPage(3)">3</button>
                </li>
                <li class="page-item" id="koresPageItem4">
                    <button type="button" class="page-link" onclick="changeKoresPage(4)">4</button>
                </li>

                <li class="page-item" id="koresNextItem">
                    <button type="button"
                            class="page-link"
                            onclick="nextKoresPage()">
                        Berikutnya
                    </button>
                </li>

            </ul>
        </nav>
    </div>

</div>

<script>

    /* =========================================================
       PAGINATION KORESPONDENSI SATU-SATU
    ========================================================= */

    let currentKoresPage = 1;
    const totalKoresPage = 4;

    function changeKoresPage(page) {
        if (page < 1 || page > totalKoresPage) {
            return;
        }

        currentKoresPage = page;

        for (let i = 1; i <= totalKoresPage; i++) {
            const pageElement = document.getElementById("koresPage" + i);
            const pageItem = document.getElementById("koresPageItem" + i);

            if (pageElement) {
                pageElement.classList.toggle("active", i === page);
            }

            if (pageItem) {
                pageItem.classList.toggle("active", i === page);
            }
        }

        const prevItem = document.getElementById("koresPrevItem");

        if (prevItem) {
            prevItem.classList.toggle("disabled", page === 1);
        }

        const target = document.querySelector(".content-gap");

        if (target) {
            target.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
        }
    }

    function nextKoresPage() {
        if (currentKoresPage < totalKoresPage) {
            ProgressManager.markPageDone('materi_4', 'penyajian', currentKoresPage);
            changeKoresPage(currentKoresPage + 1);
        } else {
            ProgressManager.markSubPageDone('materi_4', 'penyajian');
            window.location.href = "/bab_1/latihan4";
        }
    }

    document.addEventListener("DOMContentLoaded", function () {
        changeKoresPage(1);
    });

</script>

@endsection
