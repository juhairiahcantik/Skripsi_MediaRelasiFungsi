<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi: Fungsi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

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

    .card {
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        border-radius: 12px;
    }

    .card-header {
        background-color: #CDA4DE !important;
        font-weight: 700;
        font-size: 1.1rem;

        color: white !important;
        text-align: center;
    }

    /* ================= TEKS ================= */

    .materi-content {
        font-size: 0.95rem;
        color: #444;
        line-height: 1.7;
    }

    .masalah-badge {
        background-color: #FFCCF5;
        color: #6A2C70;
        padding: 8px 25px;
        border-radius: 25px;
        display: inline-block;
        font-weight: 700;
        font-size: 1.4rem;
    }

    .question-box {
        background-color: #FFF6D6;
        border-radius: 18px;
        padding: 20px;
        font-weight: 600;
        font-size: 0.95rem;
        line-height: 1.7;
    }

    /* ================= PENYELESAIAN ================= */

    .solution-card {
    width: 100%;
    box-sizing: border-box;
    background-color: #ffffff;
    border: 3px dashed #CDA4DE;
    border-radius: 24px;
    padding: 35px;
    margin-top: 25px;
}

.solution-title {
    font-size: 1.05rem;
    font-weight: 700;
    color: #6A2C70;
    margin-bottom: 25px;
    text-align: center;
}

.parkir-interaktif {
    width: 100%;
}

.parkir-interaktif h1 {
    font-size: 1.05rem;
    font-weight: 600;
    line-height: 1.6;
    color: #6A2C70;
}

.parkir-info {
    background: #F3E8FF;
    padding: 20px;
    border-radius: 16px;
    font-size: 1rem;
    line-height: 1.8;
    margin-bottom: 20px;
    color: #333;
}

.parkir-card {
    background: #ffffff;
    border: 2px solid #E9D5FF;
    padding: 22px;
    border-radius: 16px;
}

.parkir-card h2 {
    font-size: 1.1rem;
    color: #6A2C70;
    margin-bottom: 15px;
    font-weight: 700;
}

.parkir-opsi-wrap {
    display: grid;
    gap: 12px;
}

.parkir-option {
    display: flex;
    gap: 10px;
    border: 2px solid #E9D5FF;
    padding: 14px;
    border-radius: 12px;
    font-size: 1rem;
    line-height: 1.6;
    cursor: pointer;
}

.parkir-option:hover {
    background: #FAF5FF;
}

.parkir-option input {
    margin-top: 4px;
    transform: scale(1.2);
}

.parkir-btn {
    display: block;
    margin: 25px auto 0;
    background: linear-gradient(135deg, #8e44ad, #a569bd);
    color: white;
    border: none;
    padding: 12px 28px;
    font-size: 1rem;
    font-weight: 600;
    border-radius: 12px;
    cursor: pointer;
}

.parkir-hasil {
    display: none;
    margin-top: 20px;
    padding: 20px;
    border-radius: 16px;
    font-size: 1rem;
    line-height: 1.8;
}

.parkir-benar {
    background: #EEF9EE;
    border-left: 6px solid #2E9A44;
}

.parkir-salah {
    background: #FFF1F1;
    border-left: 6px solid #D13B3B;
}

.parkir-badge {
    display: inline-block;
    padding: 6px 12px;
    background: #F3E8FF;
    border-radius: 15px;
    font-weight: 700;
    margin-bottom: 10px;
    color: #6A2C70;
    font-size: 0.95rem;
}

/* ================= PENYAJIAN FUNGSI ================= */

.penyajian-box {
    margin-top: 35px;
    width: 100%;
    box-sizing: border-box;
    background: #ffffff;
    border: none;
    padding: 0;
}

.penyajian-title {
    text-align: left;

    font-size: 1.0rem;
    font-weight: 700;
    color: #6A2C70;

    margin-bottom: 5px;
}

.penyajian-sub {
    text-align: left;
    font-size: 1rem;
    color: #555;
    line-height: 1.7;
    margin-bottom: 25px;
}

.penyajian-card {
    background: #F8F4FF;
    border: 2px solid #E9D5FF;
    padding: 22px;
    border-radius: 16px;
    margin-bottom: 22px;
}

.penyajian-card h3 {
    display: flex;
    align-items: center;
    font-size: 1.15rem;
    color: #4A1F5E;
    font-weight: 700;
    margin-bottom: 10px;
}

.badge-soal {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 28px;
    height: 28px;
    background: #8e44ad;
    color: #ffffff;
    border-radius: 8px;
    font-size: 0.9rem;
    font-weight: 700;
    margin-right: 8px;
}

.penyajian-card p {
    font-size: 0.98rem;
    line-height: 1.7;
    margin-bottom: 12px;
    color: #333;
}

.penyajian-input {
    width: 100%;
    padding: 10px 12px;
    border: 2px solid #E9D5FF;
    border-radius: 10px;
    font-size: 0.95rem;
    margin-top: 8px;
    outline: none;
}

.penyajian-input:focus {
    border-color: #8e44ad;
}

.penyajian-btn {
    margin-top: 12px;
    background: linear-gradient(135deg, #8e44ad, #a569bd);
    color: white;
    border: none;
    padding: 10px 22px;
    font-size: 0.95rem;
    font-weight: 600;
    border-radius: 10px;
    cursor: pointer;
}

.penyajian-btn:hover {
    opacity: 0.9;
}

.penyajian-feedback {
    display: none;
    margin-top: 14px;
    padding: 16px;
    border-radius: 12px;
    font-size: 0.95rem;
    line-height: 1.7;
}

.penyajian-benar {
    background: #EEF9EE;
    border-left: 6px solid #2E9A44;
}

.penyajian-salah {
    background: #FFF1F1;
    border-left: 6px solid #D13B3B;
}

#canvasPanahPenyajian,
#canvasGrafikPenyajian {
    background: white;
    border: 2px solid #E9D5FF;
    border-radius: 14px;
    display: block;
    margin: 15px auto;
    max-width: 100%;
    height: auto;
}

.penyajian-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

.penyajian-table th,
.penyajian-table td {
    border: 1px solid #E9D5FF;
    padding: 10px;
    text-align: center;
}

.penyajian-table th {
    background: #F3E8FF;
    color: #6A2C70;
}

.penyajian-table input {
    margin-top: 0;
}

/* ================= RESPONSIVE ================= */

@media(max-width:700px) {
    .solution-card {
        padding: 20px;
    }

    .solution-title {
        font-size: 1.25rem;
    }

    .parkir-interaktif h1 {
        font-size: 1.1rem;
    }

    .parkir-info {
        font-size: 0.95rem;
        padding: 16px;
    }

    .parkir-option {
        font-size: 0.9rem;
    }

    .parkir-btn,
    .penyajian-btn {
        width: 100%;
    }

    .penyajian-title {
        font-size: 1.1rem;
    }

    .penyajian-card {
        padding: 16px;
    }

    .penyajian-card h3 {
        font-size: 1rem;
    }

    .penyajian-card p,
    .penyajian-sub,
    .penyajian-input,
    .penyajian-feedback {
        font-size: 0.9rem;
    }
}
.badge-soal{
    display:inline-flex;
    align-items:center;
    justify-content:center;

    width:28px;
    height:28px;

    background:#8e44ad;       /* ungu lebih kuat */
    color:#ffffff;            /* angka jadi putih */

    border-radius:8px;
    font-size:0.9rem;
    font-weight:700;

    margin-right:8px;
}
</style>
</head>

<body>

@extends('layouts.main')
@section('container')

<div class="content-gap">

    <h2 style="text-align:center; font-size:1.6rem;">FUNGSI</h2>
    <!-- TUJUAN PEMBELAJARAN -->
    <div class="card mt-3">
        <div class="card-header">Tujuan Pembelajaran</div>
        <div class="card-body materi-content">
            Peserta didik mampu memahami fungsi dan menyajikannya dalam berbagai bentuk
            untuk menyelesaikan masalah sehari-hari.
        </div>
    </div>

    <!-- KOTAK BESAR -->
    <div class="card mt-4">

        <div class="card-header">
            Perhatikan situasi berikut!
        </div>

        <div class="card-body materi-content">

            <p>
                Duta Mall Banjarmasin memiliki aturan biaya parkir motor yang berbeda
                tergantung pada hari.
            </p>

            <div class="table-responsive" style="margin-top:15px;">
                <table class="table table-bordered text-center align-middle">
                    <thead style="background-color:#e6e6fa;">
                        <tr>
                            <th>Hari</th>
                            <th>Tarif per jam (Rp)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Senin – Kamis</td>
                            <td>2.000</td>
                        </tr>
                        <tr>
                            <td>Jumat – Minggu</td>
                            <td>3.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p>
                Setiap kendaraan dikenakan biaya sesuai dengan lamanya waktu parkir.
                Contohnya, jika parkir selama <strong>3 jam</strong> pada hari
                <strong>Sabtu</strong>, maka biaya parkir adalah
                <strong>3 × 3.000 = 9.000 rupiah</strong>.
            </p>

            <!-- MASALAH -->
            <div style="margin-top:25px;">
             
                <div class="question-box mt-2">
                    Bagaimana hubungan antara lama parkir dan biaya parkir di Duta Mall
                    dapat disebut sebagai fungsi?
                    Bagaimana cara menuliskannya dalam berbagai bentuk penyajian fungsi?
                </div>
            </div>

           <!-- ================= PENYELESAIAN INTERAKTIF ================= -->
<div class="solution-card">

    <div class="solution-title">Penyelesaian</div>

    <div class="parkir-interaktif">

        <h1>Bagaimana hubungan antara lama parkir dan biaya parkir di Duta Mall dapat disebut sebagai fungsi?</h1>

        <div class="parkir-info">
            <strong>Tarif Parkir:</strong><br><br>
            📅 Senin–Kamis : 1 jam = Rp2.000<br>
            📅 Jumat–Minggu : 1 jam = Rp3.000<br><br>

            <strong>Perhatikan:</strong> Suatu hubungan disebut <strong>fungsi</strong>
            jika setiap data yang diketahui hanya memiliki <strong>satu hasil</strong>.
        </div>

        <div class="parkir-card">
            <h2>📝 Pilih jawaban yang paling tepat</h2>

            <div class="parkir-opsi-wrap">

                <label class="parkir-option">
                    <input type="radio" name="jawabParkir" value="a">
                    <span>
                        Hubungan ini fungsi karena setiap lama parkir selalu mempunyai biaya yang sama pada semua hari.
                    </span>
                </label>

                <label class="parkir-option">
                    <input type="radio" name="jawabParkir" value="b">
                    <span>
                        Hubungan ini fungsi jika yang diketahui hari dan lama parkir, karena setiap pasangan tersebut memiliki satu biaya parkir tertentu.
                    </span>
                </label>

                <label class="parkir-option">
                    <input type="radio" name="jawabParkir" value="c">
                    <span>
                        Hubungan ini bukan fungsi karena biaya parkir berubah antara hari biasa dan akhir pekan.
                    </span>
                </label>

            </div>
        </div>

        <button class="parkir-btn" onclick="cekJawabanParkir()">Periksa Jawaban</button>

        <div id="hasilParkir" class="parkir-hasil"></div>

    </div>

    <!-- ================= CARA MENULISKAN PENYAJIAN FUNGSI ================= -->
    <div class="penyajian-box">

        <div class="penyajian-title">
            Cara Menuliskan dalam Berbagai Bentuk Penyajian Fungsi
        </div>

        <div class="penyajian-sub">
            Tarif Parkir Duta Mall (Senin–Kamis) — 1 jam = Rp2.000
        </div>

        <div class="penyajian-card">
            <h3><span class="badge-soal">1</span> Diagram Panah</h3>
            <p>Amati diagram panah berikut, lalu tentukan biaya parkir untuk 6 jam.</p>

            <canvas id="canvasPanahPenyajian" width="720" height="360"></canvas>

            <input id="pj1" class="penyajian-input" placeholder="Tulis jawabanmu">
            <button class="penyajian-btn" onclick="cekP1()">Periksa</button>
            <div id="pf1" class="penyajian-feedback"></div>
        </div>

        <div class="penyajian-card">
            <h3><span class="badge-soal">2</span> Himpunan Pasangan Berurutan</h3>
            <p>Tuliskan semua pasangan berurutan dari 1 jam sampai 4 jam dalam bentuk himpunan.</p>

            <input id="pj2" class="penyajian-input" placeholder="Contoh: {(1,2000),(2,4000),...}">
            <button class="penyajian-btn" onclick="cekP2()">Periksa</button>
            <div id="pf2" class="penyajian-feedback"></div>
        </div>

        <div class="penyajian-card">
            <h3><span class="badge-soal">3</span> Persamaan Fungsi</h3>

            <div style="
                background:#F3E8FF;
                padding:18px;
                border-radius:14px;
                font-size:1rem;
                line-height:1.8;
                margin-bottom:15px;
                color:#333;
            ">

                

                Perhatikan contoh berikut:<br><br>

                x = jumlah pensil<br>
                y = harga yang harus dibayar<br><br>

                Jika harga 1 pensil adalah <strong>Rp1.500</strong>, maka:<br>
                1 pensil → Rp1.500<br>
                2 pensil → Rp3.000<br>
                3 pensil → Rp4.500<br><br>

                Setiap harga didapat dari <strong>1.500 × jumlah pensil</strong>.<br><br>

                Sehingga hubungan antara jumlah pensil dan harga dapat dinyatakan dalam 
                <strong>persamaan fungsi</strong>.<br><br>

                Karena jumlah pensil = x dan harga = y, maka:
                <br>
                <strong>y = 1500x</strong>

            </div>

            <p>
            Tarif parkir adalah <strong>Rp2.000 per jam</strong>.<br>
            Jika x = lama parkir dan y = biaya parkir,<br>
            buatlah <strong>persamaan fungsi</strong> yang sesuai.
            </p>

            <input id="pj3" class="penyajian-input" placeholder="Tulis jawabanmu">
            <button class="penyajian-btn" onclick="cekP3()">Periksa</button>
            <div id="pf3" class="penyajian-feedback"></div>
        </div>
        
        <div class="penyajian-card">
            <h3><span class="badge-soal">4</span> Tabel Fungsi</h3>
            <div style="
                background:#F3E8FF;
                padding:12px 15px;
                border-radius:10px;
                font-size:0.95rem;
                margin-bottom:10px;
            ">
            <strong>Tarif Parkir Duta Mall (Senin–Kamis)</strong><br>
            1 jam = Rp2.000
            </div>

            <p>Lengkapi tabel berikut berdasarkan tarif parkir Duta Mall:.</p>

            <div class="table-responsive">
                <table class="penyajian-table">
                    <tr>
                        <th>Jam</th>
                        <th>Biaya</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><input id="pj4a" class="penyajian-input"></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><input id="pj4b" class="penyajian-input"></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><input id="pj4c" class="penyajian-input"></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><input id="pj4d" class="penyajian-input"></td>
                    </tr>
                </table>
            </div>

            <button class="penyajian-btn" onclick="cekP4()">Periksa</button>
            <div id="pf4" class="penyajian-feedback"></div>
        </div>

        <div class="penyajian-card">
            <h3><span class="badge-soal">5</span> Grafik Fungsi</h3>
            <p>Perhatikan grafik berikut, lalu tentukan koordinat titik saat parkir 4 jam.</p>

            <canvas id="canvasGrafikPenyajian" width="720" height="420"></canvas>

            <input id="pj5" class="penyajian-input" placeholder="Contoh: (1,2000)">
            <button class="penyajian-btn" onclick="cekP5()">Periksa</button>
            <div id="pf5" class="penyajian-feedback"></div>
        </div>

    </div>

</div>
</div>
</div>
    <div class="card mt-4" style="width: 100%; border-radius:12px;">

        <div class="card-header"
             style="background-color:#CDA4DE; color:white; font-size:1.3rem; font-weight:700;">
            Berdasarkan Masalah di atas, apakah kamu bisa memahami apa itu Fungsi?
        </div>

        <div style="
            background-color:#FFF6D6;
            border:3px dashed #FFDF94;
            border-radius:18px;
            padding:25px;
            margin-top:10px;
            margin-left:20px;
            margin-right:20px;
            margin-bottom:20px;
            box-sizing:border-box;
        ">

            <h3 style="font-weight:700; font-size:1.3rem; color:#C58940; margin-bottom:15px;">
                Pengertian Fungsi
            </h3>

            <p style="font-size:1rem; color:#444; line-height:1.8; margin:0 0 10px 0;">
                <strong>Fungsi</strong> adalah relasi khusus yang menghubungkan
                setiap anggota daerah asal (domain) dengan tepat satu anggota
                daerah kawan (kodomain). Artinya, setiap elemen dalam domain
                hanya memiliki satu pasangan di kodomain, meskipun beberapa
                elemen domain boleh memiliki pasangan kodomain yang sama.
            </p>

            <p style="font-size:1rem; color:#444; line-height:1.8; margin:0 0 10px 0;">
                <strong>Domain (Daerah Asal)</strong> adalah himpunan semua anggota pertama.
            </p>

            <p style="font-size:1rem; color:#444; line-height:1.8; margin:0;">
                <strong>Kodomain (Daerah Kawan)</strong> adalah himpunan semua anggota kedua.
            </p>

        </div>

    </div>

<!-- ======================== CONTOH FUNGSI ======================== -->
<div class="card mt-4" style="width:100%; border:2px solid #d54ded;">

    <!-- HEADER -->
    <div class="card-header"
         style="
            background-color:#e6b3f5 ;
            color:#000;
            font-size:1.1rem;
            font-weight:700;
            border-bottom:2px solid #d54ded;
         ">
        Contoh 3.1 Menentukan Fungsi atau Bukan
    </div>

    <!-- BODY -->
    <div class="card-body" style="padding:30px; background-color:#FFFFFF;">

        <!-- PENJELASAN AWAL -->
        <p style="font-size:1rem; line-height:1.8; text-align:justify;">
            Di Pasar Sungai Mi&#39;ai Banjarmasin, pedagang menjual berbagai jenis
            ikan sungai dengan harga yang berbeda.
        </p>

        <p style="font-size:1rem; line-height:1.8;">
            Harga per kilogramnya sebagai berikut:
        </p>

        <!-- TABEL -->
        <table class="table table-bordered" style="max-width:500px;">
            <thead style="background-color:#e6b3f5 ;">
                <tr>
                    <th>Jenis Ikan</th>
                    <th>Harga per kg (Rp)</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Gabus</td><td>100.000</td></tr>
                <tr><td>Patin</td><td>45.000</td></tr>
                <tr><td>Papuyu</td><td>120.000</td></tr>
                <tr><td>Saluang</td><td>30.000</td></tr>
            </tbody>
        </table>

        <!-- PERTANYAAN -->
        <div style="
            display:inline-block;
            padding:6px 18px;
            background-color:#e6b3f5 ;
            border-radius:8px;
            font-weight:700;
            border:1px solid #ca47f1;
            margin:25px 0 15px;
        ">
            Pertanyaan
        </div>

        <p style="font-size:1rem; line-height:1.8;">
            Apakah hubungan antara jenis ikan dan harga per kilogram merupakan fungsi?
        </p>

        <!-- PENYELESAIAN -->
        <hr style="margin:30px 0; border-top:2px dashed #e582f7;">

        <div style="
            display:inline-block;
            padding:6px 18px;
            background-color:#e6b3f5;
            border-radius:8px;
            font-weight:700;
            border:1px solid #ca47f1;
            margin-bottom:15px;
        ">
            Penyelesaian
        </div>

        <p style="font-weight:700;">Menentukan himpunan yang terlibat:</p>

        <p>
            Himpunan P (jenis ikan) = { Gabus, Patin, Papuyu, Saluang } → disebut <strong>domain</strong>
        </p>
        <p>
            Himpunan Q (harga per kg) = { 100.000, 45.000, 120.000, 30.000 } → disebut <strong>kodomain</strong>
        </p>

        <p style="font-weight:700; margin-top:15px;">Membuat pasangan berurutan:</p>

        <p>
            Hubungan antara jenis ikan dan harga dapat ditulis sebagai:
        </p>

        <p style="font-weight:600;">
            R = { (Gabus, 100.000), (Patin, 45.000), (Papuyu, 120.000), (Saluang, 30.000) }
        </p>

        <div style="
    background-color:#FFFFFF;
    border:1.5px solid #d64af2;
    padding:12px;
    margin-top:20px;
    font-size:1rem;
    line-height:1.7;
    color:#000;
">

    <p style="font-weight:700; margin:0 0 6px;">
        Menganalisis apakah hubungan ini fungsi:
    </p>

    <p style="margin:0 0 18px; text-align:justify;">
        Hubungan ini merupakan <strong>fungsi</strong>, karena setiap jenis ikan
        memiliki <strong>tepat satu harga</strong>. Tidak ada satu jenis ikan
        yang memiliki lebih dari satu harga.
    </p>

    <p style="font-weight:700; margin:0 0 6px;">
        Kesimpulan:
    </p>

    <p style="margin:0; text-align:justify;">
        Hubungan antara jenis ikan dan harga per kilogram merupakan
        <strong>fungsi</strong>, karena setiap jenis ikan berpasangan
        dengan satu harga.
    </p>

</div>

    </div>
</div>

<style>
    .card-tabel-fungsi-aman{
        width:100%;
        border:2px solid #CDA4DE;
        border-radius:16px;
        overflow:hidden;
        box-shadow:0 4px 10px rgba(0,0,0,0.08);
        background:#fff;
    }

    .card-tabel-fungsi-aman .card-header{
        background:#CDA4DE !important;
        color:#2f1240 !important;
        font-weight:700;
        font-size:1.1rem;
        text-align:center;
        border-bottom:2px solid #B784CC;
    }

    .card-tabel-fungsi-aman .card-body{
        background:#FFFFFF;
        padding:24px;
    }

    .wrapper-tabel-fungsi-aman{
        width:100%;
        overflow-x:auto;
        -webkit-overflow-scrolling:touch;
        border-radius:12px;
        padding-bottom:8px;
    }

    .tabel-fungsi-aman{
        width:100%;
        min-width:720px;
        border-collapse:collapse;
        border:2px solid #DCC2EA;
    }

    .tabel-fungsi-aman th{
        background:#EEDCFA !important;
        color:#2f1240;
        text-align:center;
        vertical-align:middle;
        font-weight:700;
        padding:12px;
        font-size:0.95rem;
        border:1px solid #D6B8E8 !important;
    }

    .tabel-fungsi-aman td{
        vertical-align:middle;
        text-align:center;
        padding:10px;
        font-size:0.9rem;
        border:1px solid #E4D2F0 !important;
        background:#FFFFFF;
    }

    .contoh-fungsi-aman{
        white-space:nowrap;
        font-family:monospace;
        font-size:0.85rem;
        color:#111;
        font-weight:600;
    }

    .jawab-tabel-fungsi{
        min-width:120px;
        font-size:0.9rem;
        border:2px solid #D6B8E8;
        border-radius:10px;
        box-shadow:none;
    }

    .jawab-tabel-fungsi:focus{
        border-color:#8E44AD;
        box-shadow:0 0 0 0.15rem rgba(142,68,173,0.15);
    }

    .btn-cek-tabel-fungsi{
        display:block;
        margin:18px auto 0;
        background:linear-gradient(135deg,#27AE60,#2ECC71);
        color:#fff;
        border:none;
        padding:12px 28px;
        font-size:0.95rem;
        font-weight:700;
        border-radius:12px;
        cursor:pointer;
        transition:0.2s ease;
    }

    .btn-cek-tabel-fungsi:hover{
        transform:translateY(-1px);
        opacity:0.95;
    }

    #hasilTabelFungsiAman{
        display:none;
        margin-top:16px;
        padding:18px 20px;
        border-radius:14px;
        background:#FFFFFF;
        border:2px solid #CDA4DE;
        color:#2f1240;
    }

    .feedback-header-tabel{
        padding-bottom:14px;
        margin-bottom:6px;
        border-bottom:2px solid #B784CC;
        text-align:left;
    }

    .feedback-ringkas-tabel{
        font-size:1rem;
        font-weight:700;
        line-height:1.6;
        color:#2f1240;
    }

    .feedback-item-tabel{
        display:grid;
        grid-template-columns:42px 1fr auto;
        gap:14px;
        align-items:start;
        padding:12px 8px;
        border-bottom:1px dashed #E2C7F2;
    }

    .feedback-item-tabel:last-child{
        border-bottom:none;
    }

    .feedback-nomor-tabel{
        width:32px;
        height:32px;
        border-radius:50%;
        background:linear-gradient(135deg,#8E44AD,#A569BD);
        color:#fff;
        display:flex;
        align-items:center;
        justify-content:center;
        font-weight:700;
        font-size:0.95rem;
    }

    .feedback-isi-tabel{
        font-size:0.92rem;
        line-height:1.6;
        color:#2f1240;
    }

    .feedback-status-benar{
        color:#1E7E34;
        font-weight:700;
    }

    .feedback-status-salah{
        color:#C0392B;
        font-weight:700;
    }

    .feedback-jawaban-benar{
        font-weight:700;
        color:#2f1240;
    }

    .feedback-jawaban-kamu{
        display:flex;
        align-items:center;
        gap:8px;
        white-space:nowrap;
        font-size:0.88rem;
        color:#2f1240;
        padding-top:4px;
    }

    .label-jawaban-kamu{
        background:#F3E8FF;
        color:#8E44AD;
        font-weight:700;
        padding:4px 10px;
        border-radius:8px;
    }

    .catatan-tabel-fungsi{
        margin-top:14px;
        font-size:0.9rem;
        color:#555;
    }

    @media(max-width:700px){
        .card-tabel-fungsi-aman .card-body{
            padding:16px;
        }

        .tabel-fungsi-aman{
            min-width:680px;
        }

        .tabel-fungsi-aman th{
            font-size:0.85rem;
            padding:10px;
        }

        .tabel-fungsi-aman td{
            font-size:0.82rem;
            padding:8px;
        }

        .contoh-fungsi-aman{
            font-size:0.78rem;
        }

        .jawab-tabel-fungsi{
            min-width:110px;
            font-size:0.85rem;
        }

        .btn-cek-tabel-fungsi{
            width:100%;
        }

        .feedback-item-tabel{
            grid-template-columns:36px 1fr;
        }

        .feedback-jawaban-kamu{
            grid-column:2;
            white-space:normal;
            flex-wrap:wrap;
        }

        .feedback-ringkas-tabel{
            font-size:0.92rem;
        }
    }
</style>

<div class="card mt-4 card-tabel-fungsi-aman">

    <div class="card-header">
        Tabel 3.1 Statement Fungsi dan Bukan Fungsi
    </div>

    <div class="card-body">

        <div class="wrapper-tabel-fungsi-aman">
            <table class="table table-bordered align-middle tabel-fungsi-aman">
                <thead>
                    <tr>
                        <th style="width:60px;">No</th>
                        <th>Contoh Fungsi (Lama Parkir → Biaya Parkir)</th>
                        <th>Semua anggota himpunan P berpasangan?<br>(YA / TIDAK)</th>
                        <th>Satu pasangan untuk setiap domain?<br>(YA / TIDAK)</th>
                    </tr>
                </thead>

                <tbody>
                    <tr data-kunci-tabel-fungsi="YA,YA">
                        <td>1</td>
                        <td class="contoh-fungsi-aman">{ (1,2000), (2,4000), (3,6000) }</td>
                        <td>
                            <select class="form-select jawab-tabel-fungsi">
                                <option value="">-- pilih --</option>
                                <option>YA</option>
                                <option>TIDAK</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-select jawab-tabel-fungsi">
                                <option value="">-- pilih --</option>
                                <option>YA</option>
                                <option>TIDAK</option>
                            </select>
                        </td>
                    </tr>

                    <tr data-kunci-tabel-fungsi="YA,TIDAK">
                        <td>2</td>
                        <td class="contoh-fungsi-aman">{ (1,2000), (2,4000), (2,6000) }</td>
                        <td>
                            <select class="form-select jawab-tabel-fungsi">
                                <option value="">-- pilih --</option>
                                <option>YA</option>
                                <option>TIDAK</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-select jawab-tabel-fungsi">
                                <option value="">-- pilih --</option>
                                <option>YA</option>
                                <option>TIDAK</option>
                            </select>
                        </td>
                    </tr>

                    <tr data-kunci-tabel-fungsi="YA,YA">
                        <td>3</td>
                        <td class="contoh-fungsi-aman">{ (1,3000), (2,6000), (3,9000) }</td>
                        <td>
                            <select class="form-select jawab-tabel-fungsi">
                                <option value="">-- pilih --</option>
                                <option>YA</option>
                                <option>TIDAK</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-select jawab-tabel-fungsi">
                                <option value="">-- pilih --</option>
                                <option>YA</option>
                                <option>TIDAK</option>
                            </select>
                        </td>
                    </tr>

                    <tr data-kunci-tabel-fungsi="YA,TIDAK">
                        <td>4</td>
                        <td class="contoh-fungsi-aman">{ (1,4000), (1,6000) }</td>
                        <td>
                            <select class="form-select jawab-tabel-fungsi">
                                <option value="">-- pilih --</option>
                                <option>YA</option>
                                <option>TIDAK</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-select jawab-tabel-fungsi">
                                <option value="">-- pilih --</option>
                                <option>YA</option>
                                <option>TIDAK</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <button class="btn-cek-tabel-fungsi" onclick="cekTabelFungsiAman()">
            Cek Jawaban
        </button>

        <div id="hasilTabelFungsiAman"></div>

        <p class="catatan-tabel-fungsi">
            <em>Catatan: Domain ditentukan dari semua komponen pertama pada pasangan berurutan.</em>
        </p>

    </div>
</div>

<script>
function cekTabelFungsiAman() {
    let benar = 0;
    let total = 0;
    let belumLengkap = false;
    let pembahasan = "";

    const dataPembahasan = [
        {
            benar: "YA dan YA",
            teks: "Semua anggota domain muncul, yaitu 1, 2, dan 3. Setiap anggota domain hanya memiliki satu pasangan biaya. Jadi, relasi ini merupakan fungsi."
        },
        {
            benar: "YA dan TIDAK",
            teks: "Semua anggota domain memang berpasangan. Namun, domain 2 memiliki dua pasangan, yaitu 4000 dan 6000. Jadi, relasi ini bukan fungsi."
        },
        {
            benar: "YA dan YA",
            teks: "Domain 1, 2, dan 3 masing-masing memiliki tepat satu pasangan biaya. Jadi, relasi ini merupakan fungsi."
        },
        {
            benar: "YA dan TIDAK",
            teks: "Domain yang muncul adalah 1. Domain 1 memang berpasangan, tetapi memiliki dua pasangan biaya, yaitu 4000 dan 6000. Jadi, relasi ini bukan fungsi."
        }
    ];

    document.querySelectorAll("tr[data-kunci-tabel-fungsi]").forEach((row, index) => {
        const kunci = row.dataset.kunciTabelFungsi.split(",");
        const pilih = row.querySelectorAll(".jawab-tabel-fungsi");

        let cocok = true;
        let jawabanKamu = [];

        pilih.forEach((s, i) => {
            let nilai = s.value === "" ? "Belum dipilih" : s.value;
            jawabanKamu.push(nilai);

            if (s.value === "") {
                belumLengkap = true;
                cocok = false;
            } else if (s.value !== kunci[i]) {
                cocok = false;
            }
        });

        row.querySelectorAll("td").forEach(td => {
            td.style.backgroundColor = cocok ? "#EAF8EE" : "#FDEEEE";
        });

        if (cocok) benar++;
        total++;

        const status = cocok
            ? `<span class="feedback-status-benar">benar</span>`
            : `<span class="feedback-status-salah">belum tepat</span>`;

        pembahasan += `
            <div class="feedback-item-tabel">
                <div class="feedback-nomor-tabel">${index + 1}</div>

                <div class="feedback-isi-tabel">
                    <strong>Nomor ${index + 1} ${status}.</strong><br>
                    Jawaban benar: <span class="feedback-jawaban-benar">${dataPembahasan[index].benar}</span>.<br>
                    ${dataPembahasan[index].teks}
                </div>

                <div class="feedback-jawaban-kamu">
                    <span class="label-jawaban-kamu">Jawaban kamu</span>
                    <span>: ${jawabanKamu.join(" , ")}</span>
                </div>
            </div>
        `;
    });

    const hasil = document.getElementById("hasilTabelFungsiAman");
    hasil.style.display = "block";

    hasil.innerHTML = `
        <div class="feedback-header-tabel">
            <div class="feedback-ringkas-tabel">
                ${belumLengkap
                    ? `Masih ada jawaban yang belum dipilih.<br>Jawaban benar sementara: ${benar} dari ${total}`
                    : `Jawaban benar: ${benar} dari ${total}`}
            </div>
        </div>

        ${pembahasan}
    `;
}
</script>
<!-- ====================== END CONTOH FUNGSI ====================== -->
    
   <div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12 d-flex justify-content-end">

            <!-- Tombol Selanjutnya (kanan) -->
            <a href="/bab_1/lanjut_3_1" class="btn btn-success px-4">
                Selanjutnya →
            </a>

        </div>
    </div>
</div>

@endsection

<script>
function cekJawabanParkir() {
    let pilih = document.querySelector('input[name="jawabParkir"]:checked');
    let hasil = document.getElementById("hasilParkir");

    if (!pilih) {
        hasil.className = "parkir-hasil parkir-salah";
        hasil.innerHTML = `
            <div class="parkir-badge">Belum Dijawab</div>
            Kamu belum memilih jawaban.<br>
            Silakan pilih salah satu pilihan terlebih dahulu, lalu tekan tombol <strong>Periksa Jawaban</strong>.
        `;
        hasil.style.display = "block";
        hasil.scrollIntoView({ behavior: "smooth", block: "center" });
        return;
    }

    if (pilih.value === "b") {
        hasil.className = "parkir-hasil parkir-benar";
        hasil.innerHTML = `
            <div class="parkir-badge">Jawaban Tepat 🎉</div>
            Hubungan antara lama parkir dan biaya parkir di Duta Mall disebut
            <strong>fungsi</strong> jika yang diketahui adalah
            <strong>hari dan lama parkir</strong>.<br><br>

            Alasannya, setiap pasangan data tersebut hanya memiliki
            <strong>satu biaya parkir tertentu</strong>.<br><br>

            <strong>Contoh:</strong><br>
            Senin, 1 jam → Rp2.000<br>
            Jumat, 1 jam → Rp3.000
        `;
    } else {
        hasil.className = "parkir-hasil parkir-salah";
        hasil.innerHTML = `
            <div class="parkir-badge">Jawaban Belum Tepat</div>
            Coba teliti lagi pilihan jawabanmu.<br><br>

            Hal penting dalam fungsi adalah
            <strong>setiap data hanya mempunyai satu hasil</strong>.<br><br>

            Pada soal ini, data yang diketahui harus berupa
            <strong>hari dan lama parkir</strong>.
        `;
    }

    hasil.style.display = "block";
    hasil.scrollIntoView({ behavior: "smooth", block: "center" });
}

/* ================= HELPER ================= */

function kosong(v) {
    return !v || v.trim() === "";
}

function angkaPenyajian(v) {
    return v.replace(/\./g, '').replace(/,/g, '').replace(/\s/g, '').replace(/[^\d]/g, '');
}

function tampilPenyajian(id, benar, teks) {
    let f = document.getElementById(id);
    f.style.display = "block";
    f.className = "penyajian-feedback " + (benar ? "penyajian-benar" : "penyajian-salah");
    f.innerHTML = teks;
}

/* ================= GAMBAR DIAGRAM PANAH ================= */

function gambarPanahPenyajian() {
    let c = document.getElementById("canvasPanahPenyajian");
    if (!c) return;

    let ctx = c.getContext("2d");
    ctx.clearRect(0, 0, c.width, c.height);

    ctx.font = "18px Arial";
    ctx.lineWidth = 2;

    ctx.fillStyle = "#EEF3D3";
    ctx.fillRect(70, 50, 230, 260);
    ctx.strokeStyle = "#999";
    ctx.strokeRect(70, 50, 230, 260);

    ctx.fillStyle = "#E0ECD8";
    ctx.fillRect(430, 50, 230, 260);
    ctx.strokeStyle = "#999";
    ctx.strokeRect(430, 50, 230, 260);

    ctx.fillStyle = "#1565C0";
    ctx.font = "bold 18px Arial";
    ctx.fillText("Lama Parkir", 120, 90);
    ctx.font = "16px Arial";
    ctx.fillText("(jam)", 155, 115);

    ctx.fillStyle = "#8E24AA";
    ctx.font = "bold 18px Arial";
    ctx.fillText("Biaya Parkir", 480, 90);
    ctx.font = "16px Arial";
    ctx.fillText("(Rp)", 530, 115);

    for (let i = 1; i <= 4; i++) {
        let y = 155 + (i - 1) * 45;

        ctx.fillStyle = "#1565C0";
        ctx.font = "18px Arial";
        ctx.fillText(i, 175, y);

        ctx.fillStyle = "#8E24AA";
        ctx.fillText((i * 2000).toLocaleString("id-ID"), 520, y);

        ctx.strokeStyle = "red";
        ctx.beginPath();
        ctx.moveTo(230, y - 5);
        ctx.lineTo(430, y - 5);
        ctx.stroke();

        ctx.beginPath();
        ctx.moveTo(430, y - 5);
        ctx.lineTo(418, y - 12);
        ctx.lineTo(418, y + 2);
        ctx.closePath();
        ctx.fillStyle = "red";
        ctx.fill();
    }
}

/* ================= GAMBAR GRAFIK ================= */

function gambarGrafikPenyajian() {
    let c = document.getElementById("canvasGrafikPenyajian");
    if (!c) return;

    let ctx = c.getContext("2d");
    ctx.clearRect(0, 0, c.width, c.height);

    ctx.font = "15px Arial";
    ctx.lineWidth = 2;

    let startX = 80;
    let startY = 350;
    let endX = 660;
    let endY = 50;

    ctx.strokeStyle = "#333";
    ctx.beginPath();
    ctx.moveTo(startX, startY);
    ctx.lineTo(endX, startY);
    ctx.stroke();

    ctx.beginPath();
    ctx.moveTo(startX, startY);
    ctx.lineTo(startX, endY);
    ctx.stroke();

    ctx.fillStyle = "#333";
    for (let i = 1; i <= 5; i++) {
        let x = startX + i * 100;
        ctx.fillText(i, x - 5, startY + 25);

        ctx.beginPath();
        ctx.moveTo(x, startY - 5);
        ctx.lineTo(x, startY + 5);
        ctx.stroke();
    }

    for (let i = 1; i <= 5; i++) {
        let y = startY - i * 55;

        ctx.fillStyle = "#333";
        ctx.fillText((i * 2000).toLocaleString("id-ID"), 20, y + 5);

        ctx.strokeStyle = "#ddd";
        ctx.beginPath();
        ctx.moveTo(startX, y);
        ctx.lineTo(endX, y);
        ctx.stroke();

        ctx.strokeStyle = "#333";
        ctx.beginPath();
        ctx.moveTo(startX - 5, y);
        ctx.lineTo(startX + 5, y);
        ctx.stroke();
    }

    let titik = [
        [180, 295],
        [280, 240],
        [380, 185],
        [480, 130],
        [580, 75]
    ];

    ctx.strokeStyle = "#C86E2C";
    ctx.lineWidth = 2;
    ctx.beginPath();
    ctx.moveTo(titik[0][0], titik[0][1]);

    for (let i = 1; i < titik.length; i++) {
        ctx.lineTo(titik[i][0], titik[i][1]);
    }

    ctx.stroke();

    for (let i = 0; i < titik.length; i++) {
        ctx.beginPath();
        ctx.arc(titik[i][0], titik[i][1], 6, 0, Math.PI * 2);
        ctx.fillStyle = "#C86E2C";
        ctx.fill();
    }
}

document.addEventListener("DOMContentLoaded", function () {
    gambarPanahPenyajian();
    gambarGrafikPenyajian();
});

/* ================= CEK JAWABAN PENYAJIAN ================= */

function cekP1() {
    if (kosong(pj1.value)) {
        tampilPenyajian(
            "pf1",
            false,
            `
            <strong>Belum dijawab.</strong><br>
            Silakan isi jawaban terlebih dahulu. Perhatikan panah dari 6 jam menuju biaya parkirnya.
            `
        );
        return;
    }

    if (angkaPenyajian(pj1.value) === "12000") {
        tampilPenyajian(
            "pf1",
            true,
            `
            🎉 Jawaban benar.<br>
            Untuk 4 jam parkir, biaya = 6 × Rp2.000 = <b>Rp12.000</b>.
            `
        );
    } else {
        tampilPenyajian(
            "pf1",
            false,
            `
            Jawaban belum tepat.<br>
            Setiap 1 jam dikenakan Rp2.000. Jadi, 6 jam = 6 × Rp2.000 = <b>Rp12.000</b>.
            `
        );
    }
}

function cekP2() {
    if (kosong(pj2.value)) {
        tampilPenyajian(
            "pf2",
            false,
            `
            <strong>Belum dijawab.</strong><br>
            Silakan tuliskan himpunan pasangan berurutan terlebih dahulu.
            `
        );
        return;
    }

    let v = pj2.value
        .replace(/\s/g, "")
        .replace(/\./g, "");

    if (v === "{(1,2000),(2,4000),(3,6000),(4,8000)}") {
        tampilPenyajian(
            "pf2",
            true,
            `
            🎉 Jawaban benar.<br><br>
            Kamu sudah menuliskan pasangan berurutan dengan tepat.<br>
            Setiap pasangan ditulis dalam bentuk <strong>{(lama parkir, biaya parkir)}</strong>.
            `
        );
    } else {
        tampilPenyajian(
            "pf2",
            false,
            `
            <strong>Jawaban belum tepat.</strong><br><br>
            Ingat, pasangan berurutan ditulis dalam bentuk:<br>
            <strong>(lama parkir, biaya parkir)</strong><br><br>

            Karena tarif parkir Senin–Kamis adalah <strong>Rp2.000 per jam</strong>, maka:<br>
            1 jam → Rp2.000<br>
            2 jam → Rp4.000<br>
            3 jam → Rp6.000<br>
            4 jam → Rp8.000<br><br>

            Jadi, bentuk himpunan pasangan berurutannya adalah:<br>
            <strong>{(1,2000), (2,4000), (3,6000), (4,8000)}</strong>
            `
        );
    }
}

function cekP3() {
    if (kosong(pj3.value)) {
        tampilPenyajian(
            "pf3",
            false,
            `
            <strong>Belum dijawab.</strong><br>
            Silakan tuliskan persamaan fungsi terlebih dahulu.
            `
        );
        return;
    }

    let v = pj3.value
        .toLowerCase()
        .replace(/\s/g, "")
        .replace(/\./g, "");

    if (v === "y=2000x" || v === "f(x)=2000x") {
        tampilPenyajian(
            "pf3",
            true,
            `
            🎉 Jawaban benar.<br>
            Tarif parkir adalah Rp2.000 per jam, sehingga persamaan fungsi yang sesuai adalah <b>y = 2000x</b>.
            `
        );
    } else {
        tampilPenyajian(
            "pf3",
            false,
            `
            Jawaban belum tepat.<br>
            Biaya parkir diperoleh dari <strong>tarif per jam × lama parkir</strong>.<br><br>
            Karena tarifnya Rp2.000 per jam, maka persamaan fungsinya adalah <b>y = 2000x</b>.
            `
        );
    }
}

function cekP4() {
    if (
        kosong(pj4a.value) ||
        kosong(pj4b.value) ||
        kosong(pj4c.value) ||
        kosong(pj4d.value)
    ) {
        tampilPenyajian(
            "pf4",
            false,
            `
            <strong>Tabel belum lengkap.</strong><br>
            Silakan isi semua kolom biaya parkir terlebih dahulu sebelum menekan tombol periksa.
            `
        );
        return;
    }

    if (
        angkaPenyajian(pj4a.value) === "2000" &&
        angkaPenyajian(pj4b.value) === "4000" &&
        angkaPenyajian(pj4c.value) === "6000" &&
        angkaPenyajian(pj4d.value) === "8000"
    ) {
        tampilPenyajian(
            "pf4",
            true,
            `
            🎉 Jawaban benar.<br>
            Tabel sudah lengkap. Biaya parkir bertambah Rp2.000 setiap naik 1 jam.
            `
        );
    } else {
        tampilPenyajian(
            "pf4",
            false,
            `
            Jawaban belum tepat.<br>
            Gunakan pola kelipatan Rp2.000.<br><br>
            1 jam = Rp2.000<br>
            2 jam = Rp4.000<br>
            3 jam = Rp6.000<br>
            4 jam = Rp8.000
            `
        );
    }
}

function cekP5() {
    if (kosong(pj5.value)) {
        tampilPenyajian(
            "pf5",
            false,
            `
            <strong>Belum dijawab.</strong><br>
            Silakan tuliskan koordinat titik pada grafik terlebih dahulu.
            `
        );
        return;
    }

    let v = pj5.value
        .replace(/\s/g, "")
        .replace(/\./g, "");

    if (v === "(4,8000)" || v === "4,8000") {
        tampilPenyajian(
            "pf5",
            true,
            `
            🎉 Jawaban benar.<br>
            Saat x = 4, nilai y = 8.000. Jadi koordinat titiknya adalah <b>(4,8000)</b>.
            `
        );
    } else {
        tampilPenyajian(
            "pf5",
            false,
            `
            Jawaban belum tepat.<br>
            Pada grafik, sumbu mendatar menunjukkan lama parkir dan sumbu tegak menunjukkan biaya parkir.<br><br>
            Saat lama parkir 4 jam, biaya parkir adalah Rp8.000. Jadi koordinat titiknya adalah <b>(4,8000)</b>.
            `
        );
    }
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>