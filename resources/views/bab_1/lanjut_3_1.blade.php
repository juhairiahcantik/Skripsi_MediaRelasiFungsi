<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Materi: Fungsi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        .content-gap {
            margin-left: 40px;
            margin-right: 20px;
        }
        /* ================= STYLE PENYAJIAN FUNGSI ================= */
/* ================= STYLE PENYAJIAN FUNGSI - RAPI & RESPONSIVE ================= */

.fungsi-card{
    width:100%;
    border:2px solid #7f3ab7 !important;
    border-radius:14px !important;
    overflow:hidden;
    background:#FFFFFF !important;
    box-shadow:0 8px 22px rgba(139,92,246,0.08);
}

/* Header utama 3.3 Penyajian Fungsi */
.fungsi-header{
    background:linear-gradient(135deg,#7C3AED,#A855F7) !important;
    color:#FFFFFF !important;
    font-size:1.35rem !important;
    font-weight:800 !important;
    text-align:center !important;
    border-bottom:2px solid #7f3ab7 !important;
    padding:8px 2px !important;
}

/* Body utama */
.fungsi-body{
    padding:28px 26px !important;
    background:#FFFFFF !important;
}

/* Semua kotak Cara 1, 2, 3, 4, 5 */
.fungsi-subcard,
.fungsi-body > .card{
    width:100% !important;
    border:2px solid #7f3ab7 !important;
    border-radius:16px !important;
    background:#FFFFFF !important;
    overflow:hidden !important;
    margin-bottom:26px !important;
    box-shadow:0 6px 18px rgba(139,92,246,0.06) !important;
}

/* Header Cara 1, 2, 3, 4, 5 */
.fungsi-subheader,
.fungsi-body > .card > .card-header{
    background:linear-gradient(135deg,#7C3AED,#7f3ab7) !important;
    color:#FFFFFF !important;
    font-size:1.12rem !important;
    font-weight:800 !important;
    border-bottom:2px solid #7f3ab7 !important;
    padding:9px 22px !important;
    text-align:left !important;
}

/* Body isi setiap cara */
.fungsi-subbody,
.fungsi-body > .card > .card-body{
    padding:30px 32px !important;
    background:#FFFFFF !important;
    font-size:1rem !important;
    line-height:1.85 !important;
    color:#111827 !important;
}

/* Menghilangkan padding dobel pada Cara 2/3 jika masih ada div style lama */
.fungsi-subbody > div[style*="padding"],
.fungsi-body > .card > .card-body > div[style*="padding"]{
    padding:0 !important;
}

/* Gambar agar rapi dan responsive */
.fungsi-img-box{
    text-align:center !important;
    margin:18px 0 26px 0 !important;
}

.fungsi-img-box img,
.fungsi-subbody img,
.fungsi-body > .card img{
    max-width:52% !important;
    height:auto !important;
    display:block !important;
    margin:0 auto !important;
    border-radius:12px !important;
}

/* Catatan kecil */
.fungsi-note{
    border:1.5px dashed #A855F7 !important;
    border-radius:12px !important;
    padding:14px 18px !important;
    background:#F7F1FF !important;
    font-size:0.96rem !important;
    color:#4B5563 !important;
    margin-top:16px !important;
}

/* Tabel agar seragam */
.fungsi-body table,
.fungsi-subbody table{
    width:100% !important;
    border-collapse:collapse !important;
    text-align:center !important;
}

.fungsi-body table th,
.fungsi-subbody table th{
    background:#A855F7 !important;
    color:#FFFFFF !important;
    font-weight:800 !important;
}

.fungsi-body table td,
.fungsi-body table th,
.fungsi-subbody table td,
.fungsi-subbody table th{
    border:1px solid #E5E7EB !important;
    padding:11px 12px !important;
    vertical-align:middle !important;
}

.fungsi-body table tr:nth-child(even) td{
    background:#FAFAFA;
}

/* Supaya tabel tidak pecah di layar kecil */
.fungsi-body .table-responsive,
.fungsi-subbody .table-responsive,
.fungsi-subbody div[style*="overflow-x:auto"],
.fungsi-body div[style*="overflow-x:auto"]{
    overflow-x:auto !important;
    width:100% !important;
}

/* Paragraf lebih rapi */
.fungsi-body p,
.fungsi-subbody p{
    font-size:1rem !important;
    line-height:1.85 !important;
    color:#111827 !important;
}

.fungsi-body ul,
.fungsi-subbody ul{
    line-height:1.8 !important;
}

/* Tombol bawah */
.fungsi-nav{
    margin-top:30px;
}

/* ================= RESPONSIVE TABLET ================= */
@media(max-width:992px){
    .fungsi-body{
        padding:22px 18px !important;
    }

    .fungsi-subbody,
    .fungsi-body > .card > .card-body{
        padding:24px 22px !important;
    }

    .fungsi-img-box img,
    .fungsi-subbody img,
    .fungsi-body > .card img{
        max-width:70% !important;
    }
}

/* ================= RESPONSIVE HP ================= */
@media(max-width:768px){
    .content-gap{
        margin-left:12px !important;
        margin-right:12px !important;
    }

    .fungsi-card{
        border-radius:14px !important;
    }

    .fungsi-header{
        font-size:1.12rem !important;
        padding:12px 14px !important;
    }

    .fungsi-body{
        padding:16px 12px !important;
    }

    .fungsi-subcard,
    .fungsi-body > .card{
        border-radius:14px !important;
        margin-bottom:22px !important;
    }

    .fungsi-subheader,
    .fungsi-body > .card > .card-header{
        font-size:1rem !important;
        padding:12px 14px !important;
    }

    .fungsi-subbody,
    .fungsi-body > .card > .card-body{
        padding:18px 14px !important;
        font-size:0.94rem !important;
        line-height:1.75 !important;
    }

    .fungsi-body p,
    .fungsi-subbody p{
        font-size:0.94rem !important;
        line-height:1.75 !important;
    }

    .fungsi-img-box img,
    .fungsi-subbody img,
    .fungsi-body > .card img{
        max-width:92% !important;
    }

    .fungsi-note{
        font-size:0.9rem !important;
        padding:12px 14px !important;
    }

    .fungsi-body table,
    .fungsi-subbody table{
        min-width:520px !important;
        font-size:0.88rem !important;
    }
}

/* ================= RESPONSIVE HP KECIL ================= */
@media(max-width:480px){
    .content-gap{
        margin-left:8px !important;
        margin-right:8px !important;
    }

    .fungsi-header{
        font-size:1rem !important;
    }

    .fungsi-subheader,
    .fungsi-body > .card > .card-header{
        font-size:0.95rem !important;
    }

    .fungsi-subbody,
    .fungsi-body > .card > .card-body{
        padding:16px 12px !important;
    }

    .fungsi-img-box img,
    .fungsi-subbody img,
    .fungsi-body > .card img{
        max-width:100% !important;
    }
}
    </style>
</head>

<body>

@extends('layouts.main')

@section('container')

<div class="content-gap">
<br>
<!-- ======================== PENYAJIAN FUNGSI ======================== -->
<div class="card mt-4 fungsi-card">

    <!-- HEADER -->
    <div class="card-header fungsi-header">
        3.3 Penyajian Fungsi
    </div>

    <!-- BODY -->
    <div class="card-body fungsi-body">

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
        <!-- ======================== CARA 4: DENGAN TABEL ======================== -->
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


<!-- ======================== CARA 5: DENGAN GRAFIK ======================== -->
<div class="card mt-4" style="width:100%; border:2px solid #7f3ab7;">

    <!-- HEADER -->
    <div class="card-header"
         style="background-color:#CDA4DE; color:#000; font-size:1.1rem; font-weight:700; border-bottom:2px solid #7f3ab7;">
        Cara 5 : Dengan Grafik
    </div>

    <!-- BODY -->
    <div class="card-body" style="padding:30px; background-color:#FFFFFF;">

        <p><strong>Contoh Kasus:</strong> Harga Ikan Patin di Pasar Sungai Miap</p>

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
            di Pasar Sungai Miap.
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
<!-- ====================== END PENYAJIAN FUNGSI ====================== -->
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center">

            <!-- Tombol Sebelumnya (Hijau) -->
            <a href="/bab_1/bab_3" class="btn btn-success px-4">
                ← Sebelumnya
            </a>

            <!-- Tombol Selanjutnya -->
            <a href="/bab_1/latihan3" class="btn btn-success px-4">
                Selanjutnya →
            </a>

        </div>
    </div>
</div>

</div>

@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
