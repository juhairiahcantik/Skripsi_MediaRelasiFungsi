@extends('layouts.main')

@section('container')


<style>
    /* =========================================================
       FUNGSI - LAYOUT DISAMAKAN DENGAN RELASI
       Judul ungu dibuat mengambang, tidak menempel ke tepi card.
    ========================================================= */

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

    .fungsi-page > * {
        max-width: 100%;
        box-sizing: border-box;
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

    .fungsi-page-title {
        background: linear-gradient(135deg, #F7EEFF, #EFE2FF);
        color: #5B2C6F;
        text-align: center;
        padding: 16px 22px;
        border-radius: 20px;
        font-weight: 800;
        font-size: 1.25rem;
        margin-bottom: 22px;
        border: 1px solid #E3C7F3;
        border-left: 6px solid #8E44AD;
        box-shadow: 0 10px 20px rgba(142, 68, 173, 0.12);
    }

    .fungsi-subcard,
    .fungsi-body > .card {
        width: 100% !important;
        background: #ffffff !important;
        border: 1px solid #eadcf6 !important;
        border-radius: 22px !important;
        padding: 18px !important;
        margin: 0 !important;
        box-shadow: 0 10px 24px rgba(91, 44, 111, 0.07) !important;
        box-sizing: border-box !important;
        overflow: visible !important;
    }

    .fungsi-subheader,
    .fungsi-body > .card > .card-header {
        background: linear-gradient(135deg, #8E44AD, #B57EDC) !important;
        color: #ffffff !important;
        border-radius: 18px !important;
        padding: 14px 18px !important;
        text-align: center !important;
        font-size: 1.12rem !important;
        font-weight: 800 !important;
        margin-bottom: 18px !important;
        border: none !important;
        box-shadow: 0 8px 16px rgba(142, 68, 173, 0.14) !important;
    }

    .fungsi-subbody,
    .fungsi-body > .card > .card-body {
        width: 100% !important;
        background: #ffffff !important;
        border: 1px solid #E9D5FF !important;
        border-radius: 18px !important;
        padding: 20px !important;
        font-size: 1rem !important;
        line-height: 1.85 !important;
        color: #111827 !important;
        box-sizing: border-box !important;
        overflow-x: hidden !important;
    }

    .fungsi-subbody > div[style*="padding"],
    .fungsi-body > .card > .card-body > div[style*="padding"] {
        padding: 0 !important;
    }

    .fungsi-img-box {
        text-align: center !important;
        margin: 14px 0 22px 0 !important;
    }

    .fungsi-img-box img,
    .fungsi-subbody img,
    .fungsi-body > .card img {
        max-width: 58% !important;
        height: auto !important;
        display: block !important;
        margin: 0 auto !important;
        border-radius: 12px !important;
    }

    .fungsi-note {
        border: 2px dashed #CFA7F3 !important;
        border-radius: 16px !important;
        padding: 14px 18px !important;
        background: #FBF7FF !important;
        font-size: 0.96rem !important;
        color: #4B2673 !important;
        margin-top: 16px !important;
        line-height: 1.8 !important;
    }

    .fungsi-table-wrap,
    .fungsi-body .table-responsive,
    .fungsi-subbody .table-responsive,
    .fungsi-subbody div[style*="overflow-x:auto"],
    .fungsi-body div[style*="overflow-x:auto"] {
        overflow-x: auto !important;
        width: 100% !important;
    }

    .fungsi-body table,
    .fungsi-subbody table {
        width: 100% !important;
        border-collapse: collapse !important;
        text-align: center !important;
        margin-bottom: 0 !important;
    }

    .fungsi-body table th,
    .fungsi-subbody table th,
    .fungsi-body table thead th,
    .fungsi-subbody table thead th {
        background: #A855F7 !important;
        color: #ffffff !important;
        font-weight: 800 !important;
    }

    .fungsi-body table td,
    .fungsi-body table th,
    .fungsi-subbody table td,
    .fungsi-subbody table th {
        border: 1px solid #E5E7EB !important;
        padding: 11px 12px !important;
        vertical-align: middle !important;
    }

    .fungsi-body table tr:nth-child(even) td,
    .fungsi-subbody table tr:nth-child(even) td {
        background: #FAFAFA;
    }

    .fungsi-body p,
    .fungsi-subbody p {
        font-size: 1rem !important;
        line-height: 1.85 !important;
        color: #111827 !important;
    }

    .fungsi-body ul,
    .fungsi-subbody ul {
        line-height: 1.8 !important;
    }

    /* =========================================================
       PAGINATION SAMA SEPERTI RELASI
    ========================================================= */

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
        .fungsi-card {
            padding: 18px;
            border-radius: 22px;
        }

        .fungsi-subbody,
        .fungsi-body > .card > .card-body {
            padding: 18px !important;
        }

        .fungsi-img-box img,
        .fungsi-subbody img,
        .fungsi-body > .card img {
            max-width: 75% !important;
        }
    }

    @media (max-width: 768px) {
        .content-gap {
            margin-left: 12px !important;
            margin-right: 12px !important;
        }

        .fungsi-card {
            padding: 16px;
            border-radius: 20px;
        }

        .fungsi-page-title,
        .fungsi-subheader,
        .fungsi-body > .card > .card-header {
            font-size: 1.05rem !important;
            padding: 14px 16px !important;
            border-radius: 16px !important;
        }

        .fungsi-subcard,
        .fungsi-body > .card {
            padding: 14px !important;
            border-radius: 18px !important;
        }

        .fungsi-subbody,
        .fungsi-body > .card > .card-body {
            padding: 15px !important;
            font-size: 0.94rem !important;
            line-height: 1.75 !important;
        }

        .fungsi-body p,
        .fungsi-subbody p {
            font-size: 0.94rem !important;
            line-height: 1.75 !important;
        }

        .fungsi-img-box img,
        .fungsi-subbody img,
        .fungsi-body > .card img {
            max-width: 94% !important;
        }

        .fungsi-note {
            font-size: 0.9rem !important;
            padding: 12px 14px !important;
        }

        .fungsi-body table,
        .fungsi-subbody table {
            min-width: 520px !important;
            font-size: 0.88rem !important;
        }

        .fungsi-pagination .page-link {
            font-size: 0.82rem;
            padding: 7px 9px;
        }
    }

    @media (max-width: 480px) {
        .content-gap {
            margin-left: 8px !important;
            margin-right: 8px !important;
        }

        .fungsi-page-title,
        .fungsi-subheader,
        .fungsi-body > .card > .card-header {
            font-size: 0.98rem !important;
        }

        .fungsi-subbody,
        .fungsi-body > .card > .card-body {
            padding: 13px !important;
        }

        .fungsi-img-box img,
        .fungsi-subbody img,
        .fungsi-body > .card img {
            max-width: 100% !important;
        }
    }


    /* =========================================================
       FINAL: KOTAK TIDAK TERLALU BANYAK + WARNA TABEL SERAGAM
       Subcard dibuat transparan, judul tetap mengambang.
    ========================================================= */

    .fungsi-subcard,
    .fungsi-body > .card {
        background: transparent !important;
        border: none !important;
        border-radius: 0 !important;
        padding: 0 !important;
        margin: 0 !important;
        box-shadow: none !important;
        overflow: visible !important;
    }

    .fungsi-subheader,
    .fungsi-body > .card > .card-header {
        width: calc(100% - 12px) !important;
        margin: 0 auto 16px auto !important;
        background: linear-gradient(135deg, #8E44AD, #B57EDC) !important;
        color: #ffffff !important;
        border-radius: 18px !important;
        padding: 14px 18px !important;
        text-align: center !important;
        box-shadow: 0 8px 16px rgba(142, 68, 173, 0.14) !important;
    }

    .fungsi-subbody,
    .fungsi-body > .card > .card-body {
        background: #ffffff !important;
        border: 1px solid #E9D5FF !important;
        border-radius: 18px !important;
        padding: 20px 24px !important;
        box-shadow: none !important;
    }

    .fungsi-table-wrap,
    .fungsi-subbody div[style*="overflow-x:auto"],
    .fungsi-body div[style*="overflow-x:auto"] {
        border: 1px solid #E9D5FF !important;
        border-radius: 14px !important;
        overflow-x: auto !important;
        overflow-y: hidden !important;
        background: #ffffff !important;
    }

    .fungsi-body table,
    .fungsi-subbody table,
    .fungsi-table {
        margin: 0 !important;
        border-collapse: collapse !important;
        background: #ffffff !important;
    }

    .fungsi-body table tr[style*="background"],
    .fungsi-subbody table tr[style*="background"] {
        background: transparent !important;
    }

    .fungsi-body table th,
    .fungsi-subbody table th,
    .fungsi-body table thead th,
    .fungsi-subbody table thead th,
    .fungsi-table th {
        background: #F3E8FF !important;
        color: #4B2673 !important;
        border: 1px solid #E9D5FF !important;
        font-weight: 800 !important;
    }

    .fungsi-body table td,
    .fungsi-subbody table td,
    .fungsi-table td {
        border: 1px solid #E9D5FF !important;
        color: #111827 !important;
        background: #ffffff !important;
    }

    .fungsi-body table tr:nth-child(even) td,
    .fungsi-subbody table tr:nth-child(even) td,
    .fungsi-table tr:nth-child(even) td {
        background: #FCFAFF !important;
    }

    .fungsi-body table tr td:first-child,
    .fungsi-subbody table tr td:first-child,
    .fungsi-table tr td:first-child {
        font-weight: 700 !important;
        color: #4B2673 !important;
    }

</style>


<div class="content-gap" data-materi="materi_3" data-sub-page="penyajian" data-total-pages="5">

    <!-- ====================== HALAMAN 1 ====================== -->
    <div class="fungsi-page active" id="fungsiPage1">
        <div class="fungsi-card">
            <div class="fungsi-page-title">
                3.2 Penyajian Fungsi
            </div>

<!-- CARA 1 -->
<div class="fungsi-subcard">

    <div class="fungsi-subheader">
        Cara 1 : Diagram Panah
    </div>

    <div class="fungsi-subbody">

        <div class="fungsi-img-box">
            <img src="{{ asset('images/diagram-panah-ikan.png') }}"
                 alt="Diagram Panah Harga Ikan">
        </div>

        <p style="text-align:justify; margin-bottom:14px;">
            Diagram di atas menunjukkan hubungan antara <strong>jenis ikan</strong>
            dan <strong>harga per kilogram</strong> di Pasar Sungai Miap Banjarmasin.
        </p>

        <p style="margin-bottom:12px;">
            <strong>1. Bagian Kiri (Domain)</strong><br>
            Disebut daerah asal atau domain, berisi jenis-jenis ikan yang dijual:
            <br>
            <strong>Gabus, Patin, Papuyu, Saluang</strong>
        </p>

        <p style="margin-bottom:12px;">
            <strong>2. Bagian Kanan (Kodomain)</strong><br>
            Disebut daerah kawan atau kodomain, berisi harga ikan per kilogram
            (dalam rupiah):
            <br>
            <strong>100.000, 45.000, 120.000, 30.000</strong>
        </p>

        <p style="margin-bottom:8px;">
            <strong>3. Panah (Relasi Fungsi)</strong>
        </p>

        <ul style="margin:0 0 18px 20px; padding:0; line-height:1.8;">
            <li>Gabus → 100.000</li>
            <li>Patin → 45.000</li>
            <li>Papuyu → 120.000</li>
            <li>Saluang → 30.000</li>
        </ul>

       <div class="fungsi-note">
    <em>
        Setiap anggota domain berpasangan dengan tepat satu anggota kodomain.
    </em>
</div>

    </div>
</div>
        </div>
    </div>

    <!-- ====================== HALAMAN 2 ====================== -->
    <div class="fungsi-page" id="fungsiPage2">
        <div class="fungsi-card">
<!-- CARA 2 -->
<div class="fungsi-subcard">

    <div class="fungsi-subheader">
        Cara 2 : Himpunan Pasangan Berurutan
    </div>

     <div class="fungsi-subbody">
    <!-- ISI -->
    <div style="
        padding:26px 34px;
        font-size:0.95rem;
        line-height:1.65;
        color:#2d2d2d;
    ">

        <p style="text-align:justify; margin-bottom:14px;">
            Hubungan antara jenis ikan dan harga dapat ditulis sebagai himpunan pasangan berurutan berikut:
        </p>

        <div style="
            text-align:center;
            font-size:0.95rem;
            font-weight:700;
            margin-bottom:18px;
            line-height:1.8;
        ">
            f = {(Gabus, 100.000), (Patin, 45.000),<br>
            (Papuyu, 120.000), (Saluang, 30.000)}
        </div>

        <div style="overflow-x:auto; margin-bottom:18px;">
            <table style="
                width:100%;
                min-width:520px;
                border-collapse:collapse;
                text-align:center;
                font-size:0.92rem;
            ">
                <tr style="background:#cba1df;">
                    <th style="border:1px solid #ddd; padding:10px; font-weight:700;">Jenis Ikan</th>
                    <th style="border:1px solid #ddd; padding:10px; font-weight:700;">Harga/kg (Rp)</th>
                </tr>
                <tr>
                    <td style="border:1px solid #ddd; padding:9px;">Gabus</td>
                    <td style="border:1px solid #ddd; padding:9px;">100.000</td>
                </tr>
                <tr>
                    <td style="border:1px solid #ddd; padding:9px;">Patin</td>
                    <td style="border:1px solid #ddd; padding:9px;">45.000</td>
                </tr>
                <tr>
                    <td style="border:1px solid #ddd; padding:9px;">Papuyu</td>
                    <td style="border:1px solid #ddd; padding:9px;">120.000</td>
                </tr>
                <tr>
                    <td style="border:1px solid #ddd; padding:9px;">Saluang</td>
                    <td style="border:1px solid #ddd; padding:9px;">30.000</td>
                </tr>
            </table>
        </div>

        <p style="text-align:justify; margin-bottom:0;">
            Bentuk pasangan berurutan menunjukkan bahwa setiap jenis ikan dipasangkan
            dengan tepat satu harga. Oleh karena itu, hubungan ini termasuk fungsi.
        </p>

    </div>
</div>
</div>
        </div>
    </div>

    <!-- ====================== HALAMAN 3 ====================== -->
    <div class="fungsi-page" id="fungsiPage3">
        <div class="fungsi-card">
<!-- CARA 3 -->
<div class="fungsi-subcard">

    <div class="fungsi-subheader">
        Cara 3 : Tabel Fungsi
    </div>

  
  <div class="fungsi-subbody">
    <!-- ISI -->
    <div style="
        padding:28px 34px;
        font-size:0.95rem;
        line-height:1.65;
        color:#2d2d2d;
    ">

        <p style="margin-bottom:18px;">
            Diketahui fungsi <strong>f</strong> dari himpunan:
        </p>

        <p style="margin-bottom:2px;">
            A = {<strong>Gabus, Patin, Papuyu, Saluang</strong>}
        </p>
        <p style="margin-bottom:20px;">
            B = {<strong>100.000, 45.000, 120.000, 30.000</strong>}
        </p>

        <!-- TABEL PEMETAAN -->
        <div style="overflow-x:auto; margin-bottom:24px;">
            <table style="
                width:100%;
                min-width:560px;
                border-collapse:collapse;
                text-align:center;
                font-size:0.92rem;
            ">
                <tr style="background:#cba1df;">
                    <th style="border:1px solid #ddd; padding:10px; font-weight:700;">
                        Jenis Ikan (x)
                    </th>
                    <th style="border:1px solid #ddd; padding:10px; font-weight:700;">
                        Gabus
                    </th>
                    <th style="border:1px solid #ddd; padding:10px; font-weight:700;">
                        Patin
                    </th>
                    <th style="border:1px solid #ddd; padding:10px; font-weight:700;">
                        Papuyu
                    </th>
                    <th style="border:1px solid #ddd; padding:10px; font-weight:700;">
                        Saluang
                    </th>
                </tr>
                <tr>
                    <th style="border:1px solid #ddd; padding:10px; font-weight:700; background:#f8f8f8;">
                        Harga/kg <br> (f(x)) Rp
                    </th>
                    <td style="border:1px solid #ddd; padding:10px;">100.000</td>
                    <td style="border:1px solid #ddd; padding:10px;">45.000</td>
                    <td style="border:1px solid #ddd; padding:10px;">120.000</td>
                    <td style="border:1px solid #ddd; padding:10px;">30.000</td>
                </tr>
            </table>
        </div>

        <p style="margin-bottom:14px; text-align:justify;">
            Hubungan ini tidak mengikuti pola matematis tertentu. Harga tidak bergantung
            pada angka urut atau rumus tetap, misalnya tidak selalu naik 5 ribu atau
            tidak selalu dikali 2.
        </p>

        <p style="margin-bottom:14px; text-align:justify;">
            Artinya, tidak ada pola yang bisa dibuat menjadi rumus umum seperti
            <strong>f(x) = 2x</strong> atau <strong>f(x) = x + 3</strong>.
        </p>

        <p style="margin-bottom:18px; text-align:justify;">
            Harga ikan tetap dapat disebut fungsi karena setiap ikan memiliki tepat satu
            harga. Namun, hubungan tersebut tidak dapat ditulis dalam bentuk persamaan
            umum. Jadi, bentuk fungsi yang sesuai adalah <strong>fungsi pemetaan</strong>
            atau <strong>fungsi diskrit</strong>.
        </p>

        <!-- BENTUK FUNGSI PEMETAAN -->
        <div style="
            text-align:center;
            margin:18px 0 22px;
            font-size:0.95rem;
        ">
            <span style="font-style:italic; font-size:1.08rem;">f(x)</span> =
            <span style="
                display:inline-block;
                vertical-align:middle;
                border-left:2px solid #000;
                padding-left:12px;
                text-align:left;
                line-height:1.8;
                margin-left:6px;
            ">
                100.000, x = Gabus<br>
                45.000, x = Patin<br>
                120.000, x = Papuyu<br>
                30.000, x = Saluang
            </span>
        </div>

        <p style="margin-bottom:26px; text-align:justify;">
            Jadi, jika harga ikan berbeda-beda dan tidak memiliki pola hitungan tertentu,
            hubungan tersebut tetap disebut fungsi. Akan tetapi, penulisannya dilakukan
            per kasus berdasarkan nama ikannya.
        </p>

        <!-- CONTOH FUNGSI UMUM -->
        <p style="font-weight:700; margin-bottom:10px; color:#2d1b46;">
            Contoh Dalam Bentuk Fungsi Umum
        </p>

        <p style="margin-bottom:16px;">
            Di Pasar Sungai Miai, harga ikan gabus adalah Rp100.000 per kilogram.
        </p>

        <div style="overflow-x:auto; margin-bottom:20px;">
            <table style="
                width:100%;
                min-width:520px;
                border-collapse:collapse;
                text-align:center;
                font-size:0.92rem;
            ">
                <tr style="background:#cba1df;">
                    <th style="border:1px solid #ddd; padding:10px; font-weight:700;">
                        Berat Ikan (x) dalam kg
                    </th>
                    <th style="border:1px solid #ddd; padding:10px; font-weight:700;">
                        Harga Ikan (f(x)) dalam Rp
                    </th>
                </tr>
                <tr>
                    <td style="border:1px solid #ddd; padding:8px;">1</td>
                    <td style="border:1px solid #ddd; padding:8px;">100.000</td>
                </tr>
                <tr>
                    <td style="border:1px solid #ddd; padding:8px;">2</td>
                    <td style="border:1px solid #ddd; padding:8px;">200.000</td>
                </tr>
                <tr>
                    <td style="border:1px solid #ddd; padding:8px;">3</td>
                    <td style="border:1px solid #ddd; padding:8px;">300.000</td>
                </tr>
                <tr>
                    <td style="border:1px solid #ddd; padding:8px;">4</td>
                    <td style="border:1px solid #ddd; padding:8px;">400.000</td>
                </tr>
                <tr>
                    <td style="border:1px solid #ddd; padding:8px;">5</td>
                    <td style="border:1px solid #ddd; padding:8px;">500.000</td>
                </tr>
            </table>
        </div>

        <p style="font-weight:700; margin-bottom:8px; color:#2d1b46;">
            Rumus Umum Fungsi:
        </p>

        <p style="margin-bottom:8px;">
            Karena setiap 1 kg harga ikan gabus bertambah Rp100.000, maka:
        </p>

        <p style="
            text-align:center;
            font-weight:700;
            font-size:1rem;
            margin:10px 0 22px;
        ">
            f(x) = 100.000x
        </p>

        <p style="font-weight:700; margin-bottom:8px; color:#2d1b46;">
            Penjelasan:
        </p>

        <ul style="margin:0 0 20px 22px; padding:0;">
            <li>x = berat ikan dalam kilogram</li>
            <li>f(x) = harga ikan dalam rupiah</li>
            <li>100.000 = harga ikan gabus per kilogram</li>
        </ul>

        <p style="font-weight:700; margin-bottom:8px; color:#2d1b46;">
            Contoh Penggunaan:
        </p>

        <p style="margin-bottom:8px;">
            Kalau berat ikannya 3 kg:
        </p>

        <p style="margin-bottom:0;">
            f(3) = 100.000 × 3 = 300.000. Jadi,
            <strong>harga ikan gabus 3 kg adalah Rp300.000.</strong>
        </p>

    </div>
</div>
</div>
        </div>
    </div>

    <!-- ====================== HALAMAN 4 ====================== -->
    <div class="fungsi-page" id="fungsiPage4">
        <div class="fungsi-card">
<!-- CARA 4 -->
<div class="fungsi-subcard">

    <div class="fungsi-subheader">
        Cara 4 : Dengan Tabel
    </div>

    <div class="fungsi-subbody">

        <p>
            Diketahui fungsi <strong>f</strong> dari himpunan:
        </p>

        <p>
            A = {<strong>Gabus, Patin, Papuyu, Saluang</strong>}<br>
            B = {<strong>100.000, 45.000, 120.000, 30.000</strong>}
        </p>

        <div class="fungsi-table-wrap">
            <table class="fungsi-table">
                <tr>
                    <th>Jenis Ikan (x)</th>
                    <th>Gabus</th>
                    <th>Patin</th>
                    <th>Papuyu</th>
                    <th>Saluang</th>
                </tr>
                <tr>
                    <td>Harga/kg (f(x)) Rp</td>
                    <td>100.000</td>
                    <td>45.000</td>
                    <td>120.000</td>
                    <td>30.000</td>
                </tr>
            </table>
        </div>

        <p>
            Setiap jenis ikan <em>(x)</em> hanya memiliki satu harga per kilogram
            <em>(f(x))</em>.
        </p>

        <p>
            Semua jenis ikan memiliki harga yang berbeda-beda, yaitu Gabus Rp100.000,
            Patin Rp45.000, Papuyu Rp120.000, dan Saluang Rp30.000, sehingga hubungan
            ini tetap disebut <strong>fungsi</strong> karena setiap anggota himpunan A
            memiliki tepat satu pasangan di himpunan B.
        </p>

    </div>
</div>
<!-- ====================== END CARA 4 ====================== -->
        </div>
    </div>

    <!-- ====================== HALAMAN 5 ====================== -->
    <div class="fungsi-page" id="fungsiPage5">
        <div class="fungsi-card">
<!-- ======================== CARA 5: DENGAN GRAFIK ======================== -->
<div class="fungsi-subcard">

    <!-- HEADER -->
    <div class="fungsi-subheader">
        Cara 5 : Dengan Grafik
    </div>

    <!-- BODY -->
    <div class="fungsi-subbody">

        <p><strong>Contoh Kasus:</strong> Harga Ikan Patin di Pasar Sungai Miai</p>

        <p>
            Diketahui harga ikan Patin per kilogram adalah <strong>Rp45.000</strong>.
        </p>

        <div class="table-responsive my-3">
            <table class="table table-bordered text-center align-middle">
                <thead style="background-color:#CDA4DE; color:white;">
                    <tr>
                        <th>Berat Ikan (x) dalam kg</th>
                        <th>Harga Ikan (f(x)) dalam Rp</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td>45.000</td></tr>
                    <tr><td>2</td><td>90.000</td></tr>
                    <tr><td>3</td><td>135.000</td></tr>
                    <tr><td>4</td><td>180.000</td></tr>
                    <tr><td>5</td><td>225.000</td></tr>
                </tbody>
            </table>
        </div>
        <!-- MENENTUKAN RUMUS FUNGSI -->
<p><strong>Menentukan Rumus Fungsi</strong></p>

<p style="text-align:justify;">
    Karena setiap 1 kg ikan harganya Rp45.000, maka:
</p>

<p class="fw-bold text-center">
    f(x) = 45.000x
</p>

<p>
    dengan:
</p>
<ul>
    <li><strong>x</strong> = berat ikan (dalam kg)</li>
    <li><strong>f(x)</strong> = harga ikan (dalam rupiah)</li>
</ul>


        <!-- GAMBAR GRAFIK -->
        <div class="text-center my-4">
            <img src="{{ asset('images/grafik-harga-ikan-patin.png') }}"
                 alt="Grafik Fungsi Harga Ikan Patin"
                 style="max-width:100%; border-radius:10px; border:1px solid #ccc;">
        </div>

        <p style="text-align:justify;">
            Grafik di atas menunjukkan hubungan antara berat ikan Patin (<em>x</em>)
            dalam kilogram dengan harga ikan Patin (<em>f(x)</em>) dalam rupiah
            di Pasar Sungai Miai.
        </p>

        <p><strong>Penjelasan:</strong></p>
        <ul>
            <li>Sumbu X (horizontal) menunjukkan berat ikan dalam kilogram.</li>
            <li>Sumbu Y (vertikal) menunjukkan harga ikan dalam rupiah.</li>
            <li>Setiap kenaikan 1 kg menyebabkan kenaikan harga sebesar Rp45.000,
                sehingga grafik berupa garis lurus naik.</li>
        </ul>

        <p><strong>Persamaan Fungsi:</strong></p>
        <p class="fw-bold text-center">f(x) = 45.000x</p>

        <p><strong>Contoh:</strong></p>
        <ul>
            <li>Jika berat ikan 1 kg, maka f(1) = 45.000</li>
            <li>Jika berat ikan 3 kg, maka f(3) = 135.000</li>
            <li>Jika berat ikan 5 kg, maka f(5) = 225.000</li>
        </ul>

        <p style="text-align:justify;">
            Grafik ini menunjukkan bahwa hubungan antara berat ikan dan harga
            adalah <strong>fungsi linear</strong>, karena setiap berat memiliki
            satu harga yang pasti.
        </p>

    </div>
</div>
<!-- ====================== END CARA 5 ====================== -->
        </div>
    </div>

    <!-- ====================== PAGINATION ====================== -->
    <div class="fungsi-pagination">
        <nav aria-label="Pagination Materi Fungsi">
            <ul class="pagination justify-content-center flex-wrap">

                <li class="page-item disabled" id="fungsiPrevItem">
                    <button type="button"
                            class="page-link"
                            onclick="changeFungsiPage(currentFungsiPage - 1)">
                        Sebelumnya
                    </button>
                </li>

                <li class="page-item active" id="fungsiPageItem1">
                    <button type="button" class="page-link" onclick="changeFungsiPage(1)">1</button>
                </li>

                <li class="page-item" id="fungsiPageItem2">
                    <button type="button" class="page-link" onclick="changeFungsiPage(2)">2</button>
                </li>

                <li class="page-item" id="fungsiPageItem3">
                    <button type="button" class="page-link" onclick="changeFungsiPage(3)">3</button>
                </li>

                <li class="page-item" id="fungsiPageItem4">
                    <button type="button" class="page-link" onclick="changeFungsiPage(4)">4</button>
                </li>

                <li class="page-item" id="fungsiPageItem5">
                    <button type="button" class="page-link" onclick="changeFungsiPage(5)">5</button>
                </li>

                <li class="page-item" id="fungsiNextItem">
                    <button type="button"
                            class="page-link"
                            onclick="nextFungsiPage()">
                        Berikutnya
                    </button>
                </li>

            </ul>
        </nav>
    </div>

</div>

<script>
    /* =========================================================
       PAGINATION FUNGSI
    ========================================================= */

    let currentFungsiPage = 1;
    const totalFungsiPage = 5;

    function changeFungsiPage(page) {
        if (page < 1 || page > totalFungsiPage) {
            return;
        }
    // Tambahkan ini
    if (page === totalFungsiPage) {
        ProgressManager.markSubPageDone('materi_3', 'penyajian');
    }

        currentFungsiPage = page;

        for (let i = 1; i <= totalFungsiPage; i++) {
            const pageElement = document.getElementById("fungsiPage" + i);
            const pageItem = document.getElementById("fungsiPageItem" + i);

            if (pageElement) {
                pageElement.classList.toggle("active", i === page);
            }

            if (pageItem) {
                pageItem.classList.toggle("active", i === page);
            }
        }

        const prevItem = document.getElementById("fungsiPrevItem");

        if (prevItem) {
            prevItem.classList.toggle("disabled", page === 1);
        }

        simpanHalamanFungsi();

        const target = document.querySelector(".content-gap");

        if (target) {
            target.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
        }
    }

    function nextFungsiPage() {
        if (currentFungsiPage < totalFungsiPage) {
            ProgressManager.markPageDone('materi_3', 'penyajian', currentFungsiPage);
            changeFungsiPage(currentFungsiPage + 1);
        } else {
            ProgressManager.markSubPageDone('materi_3', 'penyajian');
            window.location.href = "/bab_1/latihan3";
        }
    }

    const kunciHalamanFungsi = "halaman_fungsi_" + window.location.pathname;

    function simpanHalamanFungsi() {
        try {
            localStorage.setItem(kunciHalamanFungsi, String(currentFungsiPage));
        } catch (error) {
            console.warn("Halaman fungsi belum dapat disimpan:", error);
        }
    }

    function pulihkanHalamanFungsi() {
        try {
            const tersimpan = Number(localStorage.getItem(kunciHalamanFungsi));

            if (
                Number.isInteger(tersimpan) &&
                tersimpan >= 1 &&
                tersimpan <= totalFungsiPage
            ) {
                changeFungsiPage(tersimpan);
            } else {
                changeFungsiPage(1);
            }
        } catch (error) {
            console.warn("Halaman fungsi belum dapat dipulihkan:", error);
            changeFungsiPage(1);
        }
    }

    document.addEventListener("DOMContentLoaded", function () {
        pulihkanHalamanFungsi();
    });
</script>


@endsection
