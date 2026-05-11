<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Materi: Relasi</title>

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

        /* ==========================================
             CARD TUJUAN PEMBELAJARAN
        ========================================== */
        .card {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 12px;
        }

        .card-header {
            background-color: #CDA4DE !important;
            font-weight: bold;
            font-size: 1.3rem;
            color: white !important;
        }

        .materi-content {
            font-size: 1rem;
            color: #444;
            line-height: 1.6;
        }

        /* GAMBAR TENGAH */
        .silsilah-wrapper {
            text-align: center;
            margin-top: 35px;
            margin-left: -50px !important;
        }

        .silsilah-wrapper img {
            width: 500px;
            max-width: 95%;
            display: block;
            margin: 15px auto 0 auto;
        }

        /* BADGE MASALAH */
        .masalah-badge {
            background-color: #FFCCF5;
            color: #6A2C70;
            padding: 8px 25px;
            border-radius: 25px;
            display: inline-block;
            font-weight: 700;
            box-shadow: 0 3px 6px rgba(0,0,0,0.15);
        }

        .title-same {
            font-size: 1.5rem !important;
            font-weight: 700 !important;
        }

        /* KOTAK MASALAH */
        .question-box {
            width: 100%;
            background-color: #FFF6D6;
            border: 3px dashed #FFDF94;
            border-radius: 18px;
            padding: 20px;
            font-weight: 600;
            font-size: 1.1rem;
            color: #444;
        }

        /* ================= KOTAK PENYELESAIAN (FIXED!) ================= */
        .solution-card {
            background-color: #FFF3FF;
            border: 3px dashed #d166e7;  /* SAMA DENGAN KOTAK MASALAH */
            border-radius: 18px;
            padding: 25px;
            width: 100%;
            box-sizing: border-box;
            margin-top: 20px;
        }

        .solution-title {
            font-size: 1.5rem !important;
            font-weight: 700 !important;
            color: #6A2C70;
            margin-bottom: 20px;
            text-align: center;
        }

        .solution-text {
            font-size: 1rem;
            line-height: 1.8;
            color: #444;
        }

     
/* ... CSS lama Anda ... */

.relasi-input{
    width:135px;
    padding:8px 10px;
    border:2px solid #d1d5db;
    border-radius:10px;
    background:#fff;
    font-family:'Poppins', sans-serif;
    font-size:14px;
    outline:none;
    margin:4px 2px;
}

.relasi-input:focus{
    border-color:#8b5cf6;
    box-shadow:0 0 0 3px rgba(139,92,246,0.15);
}

.relasi-benar{
    border-color:#22c55e !important;
    background:#f0fdf4 !important;
}

.relasi-salah{
    border-color:#ef4444 !important;
    background:#fef2f2 !important;
}
.solution-text {
   font-size: 1rem;
}

.relasi-input{
   width:135px;
    padding:8px 10px;
    border:2px solid #d1d5db;
    border-radius:10px;
    background:#fff;
    font-family:'Poppins', sans-serif;
    font-size:14px;
    outline:none;
    margin:4px 2px;
}

.relasi-input:focus{
    border-color:#8b5cf6;
    box-shadow:0 0 0 3px rgba(139,92,246,0.15);
}

.relasi-benar{
    border-color:#22c55e !important;
    background:#f0fdf4 !important;
}

.relasi-salah{
    border-color:#ef4444 !important;
    background:#fef2f2 !important;
}

.feedback-ok{
    background:#ecfdf5;
    border:2px solid #86efac;
    color:#166534;
}

.feedback-bad{
    background:#faf5ff;
    border:2px solid #d8b4fe;
    color:#3b0764;
}
    </style>
</head>

<body>

@extends('layouts.main')
@section('container')

<div class="content-gap">

    <h2 style="text-align:center;">RELASI</h2>

    <!-- TUJUAN PEMBELAJARAN -->
    <div class="card mt-3">
        <div class="card-header">Tujuan Pembelajaran</div>
        <div class="card-body">

                <p>Peserta didik mampu memahami relasi sebagai hubungan antara dua himpunan dan menyajikannya dalam berbagai bentuk.</p>
           
        </div>
    </div>

<!-- KOTAK BESAR -->
<div class="card mt-4" style="width: 100%;">

    <div class="card-header" style="text-align:center; font-size:1.3rem;">
        Perhatikan gambar berikut!
    </div>

    <div class="card-body" style="padding: 25px;">

        <!-- GAMBAR TENGAH -->
        <div style="text-align:center;">
            <img src="/images/bab2.png"
                 style="width:700px; max-width:95%; margin:0 auto; display:block;">

            <p style="margin-top:10px; font-size:0.95rem;">
                Gambar 2.2 Kumpulan siswa dan kumpulan makanan khas kalimantan selatan.
            </p>
        </div>

        <!-- CERITA -->
        <div style="
            margin-top:15px;
            background-color:#FFFFFF;
            border:2px solid #d58ede;
            border-radius:15px;
            padding:18px;
            font-size:0.95rem;
            color:#444;
            line-height:1.7;
            text-align:left;
        ">
            <p>
                <strong>Anisa</strong> sedang berulang tahun yang ke-13.
                Ia mengajak teman-temannya yaitu <strong>Dito</strong>, <strong>Zaki</strong>, dan <strong>Oca</strong>
                pergi ke rumah makan <strong>“Selera Banua”</strong>.
            </p>

            <p>
                Menu yang disediakan di rumah makan <strong>“Selera Banua”</strong> adalah
                <strong>Lontong</strong>, <strong>Soto Banjar</strong>, <strong>Mie Bancir</strong>, dan
                <strong>Nasi Kuning</strong>.
                Dari menu tersebut, ternyata tiap-tiap anak memiliki menu favorit yang berbeda.
            </p>

            <ul style="margin-left:18px;">
                <li>
                    Anisa suka <strong>Soto Banjar</strong> dan <strong>Mie Bancir</strong>,
                    tetapi kali ini ia memesan <strong>Soto Banjar</strong>.
                </li>
                <li>
                    Dito suka <strong>Lontong</strong> dan <strong>Soto Banjar</strong>,
                    tetapi kali ini ia memesan <strong>Lontong</strong>.
                </li>
                <li>
                    Zaki suka <strong>Nasi Kuning</strong> dan <strong>Soto Banjar</strong>,
                    tetapi kali ini ia memesan <strong>Nasi Kuning</strong>.
                </li>
                <li>
                    Oca suka <strong>Mie Bancir</strong> dan <strong>Lontong</strong>,
                    tetapi kali ini ia memesan <strong>Mie Bancir</strong>.
                </li>
            </ul>
        </div>

        <!-- MASALAH -->
        <div style="margin-top:25px; text-align:left;">

            <div class="question-box" style="margin-top:10px;">
                Bentuk relasi atau hubungan apa saja yang dapat dibuat dari data di atas?
            </div>
        </div>

        <!-- PENYELESAIAN -->
        <div class="solution-card">

    <div class="solution-title">Penyelesaian</div>

    <div class="solution-text">

        <p>
            Dari data tentang anak-anak dan menu makanan favorit serta pesanannya, dapat
            dibentuk beberapa hubungan (relasi) antara dua himpunan, yaitu:
        </p>

        <p><strong>1. Hubungan antara Anak dan Menu yang Disukai</strong></p>

        
            <p style="margin-bottom:16px;">
                Gunakan informasi pada cerita untuk menentukan hubungan (relasi) antara
                <strong>Anak-anak</strong> dan <strong>Menu makanan</strong>.
            </p>

            <div style="
                display:inline-block;
                background:#d58ede;
                border:2px solid #e5aaed;
                color:#5c2f06;
                font-weight:700;
                padding:10px 18px;
                border-radius:12px;
                margin-bottom:20px;
            ">
                Ayo Susun Relasinya
            </div>

          <p><strong>Himpunan A</strong> adalah himpunan anak-anak.</p>
<div style="margin-bottom:18px;">
    A = {
    <input type="text" id="a1" class="relasi-input" placeholder="nama anak">
    ,
    <input type="text" id="a2" class="relasi-input" placeholder="nama anak">
    ,
    <input type="text" id="a3" class="relasi-input" placeholder="nama anak">
    ,
    <input type="text" id="a4" class="relasi-input" placeholder="nama anak">
    }
</div>

<p><strong>Himpunan B</strong> adalah himpunan menu makanan.</p>
<div style="margin-bottom:18px;">
    B = {
    <input type="text" id="b1" class="relasi-input" placeholder="menu makanan">
    ,
    <input type="text" id="b2" class="relasi-input" placeholder="menu makanan">
    ,
    <input type="text" id="b3" class="relasi-input" placeholder="menu makanan">
    ,
    <input type="text" id="b4" class="relasi-input" placeholder="menu makanan">
    }
</div>

<p>Tuliskan relasi <strong>“menyukai”</strong>.</p>

<div style="
    background:#f5d6f9;
    border:2px dashed #e37ef1;
    border-radius:16px;
    padding:18px;
    margin-top:10px;
">
    <div style="font-weight:700; color:#7c2d12; margin-bottom:10px;">
        R<sub>1</sub> = {
    </div>

    <div style="line-height:2.2;">
        (Anisa,
        <input type="text" id="r1" class="relasi-input" placeholder="menu">),<br>

        (Anisa,
        <input type="text" id="r2" class="relasi-input" placeholder="menu">),<br>

        (Dito,
        <input type="text" id="r3" class="relasi-input" placeholder="menu">),<br>

        (Dito,
        <input type="text" id="r4" class="relasi-input" placeholder="menu">),<br>

        (Zaki,
        <input type="text" id="r5" class="relasi-input" placeholder="menu">),<br>

        (Zaki,
        <input type="text" id="r6" class="relasi-input" placeholder="menu">),<br>

        (Oca,
        <input type="text" id="r7" class="relasi-input" placeholder="menu">),<br>

        (Oca,
        <input type="text" id="r8" class="relasi-input" placeholder="menu">)
    </div>

    <div style="margin-top:8px;">}</div>
</div>
            <div style="margin-top:20px; text-align:center;">
               <button type="button" class="btn btn-success" onclick="periksaRelasi()">Periksa</button>
<button type="button" class="btn btn-secondary" onclick="resetRelasi()">Ulangi</button>
            </div>

            <div id="feedbackRelasi" style="
                margin-top:18px;
                padding:16px;
                border-radius:14px;
                display:none;
                line-height:1.8;
            "></div>
        </div>

        <hr class="my-4">

        <p><strong>2. Hubungan antara Anak dan Menu yang Dipesan</strong></p>
<p>Tuliskan relasi <strong>“memesan”</strong>.</p>

<div style="
    background:#f5d6f9;
    border:2px dashed #e37ef1;
    border-radius:16px;
    padding:18px;
    margin-top:10px;
    color:#4B0082;
">
    <div style="font-weight:700; margin-bottom:10px;">
        R<sub>2</sub> = {
    </div>

    <div style="line-height:2.2;">
        (Anisa,
        <input type="text" id="ps1" class="relasi-input" placeholder="menu">),<br>

        (Dito,
        <input type="text" id="ps2" class="relasi-input" placeholder="menu">),<br>

        (Zaki,
        <input type="text" id="ps3" class="relasi-input" placeholder="menu">),<br>

        (Oca,
        <input type="text" id="ps4" class="relasi-input" placeholder="menu">)
    </div>

    <div style="margin-top:8px;">}</div>
</div>

<div style="margin-top:20px; text-align:center;">
    <button type="button" class="btn btn-success" onclick="periksaPesananR2()">Periksa</button>
    <button type="button" class="btn btn-secondary" onclick="resetPesananR2()">Ulangi</button>
</div>

<div id="feedbackPesananR2" style="
    margin-top:18px;
    padding:16px;
    border-radius:14px;
    display:none;
    line-height:1.8;
"></div>

<p><strong>3. Hubungan antara Menu dan Anak yang Menyukainya</strong></p>
<p>Relasi ini membalik urutan pasangan sebelumnya.</p>

<div style="
    background:#f5d6f9;
    border:2px dashed #e37ef1;
    border-radius:16px;
    padding:18px;
    margin-top:10px;
    color:#4B0082;
">
    <div style="font-weight:700; margin-bottom:10px;">
        R<sub>3</sub> = {
    </div>

    <div style="line-height:2.2;">
        (<input type="text" id="r3a1" class="relasi-input" placeholder="menu">, Anisa),<br>

        (<input type="text" id="r3a2" class="relasi-input" placeholder="menu">, Anisa),<br>

        (<input type="text" id="r3d1" class="relasi-input" placeholder="menu">, Dito),<br>

        (<input type="text" id="r3d2" class="relasi-input" placeholder="menu">, Dito),<br>

        (<input type="text" id="r3z1" class="relasi-input" placeholder="menu">, Zaki),<br>

        (<input type="text" id="r3z2" class="relasi-input" placeholder="menu">, Zaki),<br>

        (<input type="text" id="r3o1" class="relasi-input" placeholder="menu">, Oca),<br>

        (<input type="text" id="r3o2" class="relasi-input" placeholder="menu">, Oca)
    </div>

    <div style="margin-top:8px;">}</div>
</div>

<div style="margin-top:20px; text-align:center;">
    <button type="button" class="btn btn-success" onclick="periksaRelasiR3()">Periksa</button>
    <button type="button" class="btn btn-secondary" onclick="resetRelasiR3()">Ulangi</button>
</div>

<div id="feedbackRelasiR3" style="
    margin-top:18px;
    padding:16px;
    border-radius:14px;
    display:none;
    line-height:1.8;
"></div>
<hr class="my-4">

<div style="
    background:#FFFFFF;
    border:2px solid #e37ef1;
    border-radius:16px;
    padding:20px;
    margin-top:10px;
    color:#4B0082;
">

    <div style="
        display:inline-block;
        background:#E9A8F2;
        color:#4B0082;
        font-weight:700;
        padding:8px 18px;
        border-radius:10px;
        margin-bottom:15px;
        font-size:1.05rem;
    ">
        Kesimpulan
    </div>

    <p style="line-height:1.8; margin-bottom:12px;">
        Dari situasi tersebut dapat dibentuk beberapa hubungan atau relasi, yaitu:
    </p>

    <ul style="line-height:1.9; padding-left:20px;">
        <li>
            Relasi <strong>“menyukai”</strong> antara anak dan menu makanan.
        </li>
        <li>
            Relasi <strong>“memesan”</strong> antara anak dan menu makanan.
        </li>
        <li>
            Relasi kebalikannya, yaitu hubungan antara 
            <strong>menu makanan</strong> dan <strong>anak yang menyukainya</strong>.
        </li>
    </ul>

    <p style="line-height:1.8; margin-top:10px;">
        Relasi-relasi tersebut menunjukkan bahwa suatu data dapat dihubungkan 
        dalam beberapa bentuk hubungan (relasi) antara dua himpunan.
    </p>

</div>
</div>
</div>
</div> <!-- END card KOTAK BESAR -->

<!-- ======================== CARD PEMAHAMAN RELASI ======================== -->
<div class="card mt-4" style="width: 100%; border-radius:12px;">

    <!-- JUDUL UNGU -->
    <div class="card-header"
         style="background-color:#CDA4DE; color:white; font-size:1.3rem; font-weight:700;">
        Berdasarkan Masalah di atas, apakah kamu bisa memahami apa itu Relasi?
    </div>

    <!-- ISI PENJELASAN (KOTAK PUTIH) -->
    <div class="card-body" style="font-size:1rem; color:#444; line-height:1.8;">

        <p style="margin-bottom:20px;">
            Dalam kehidupan sehari-hari, kita sering menemukan hubungan antara dua hal.
            Misalnya, hubungan antara anak dan menu makanan yang disukainya di rumah makan
            Selera Banua. Anisa suka Soto Banjar dan Mie Bancir, Dito suka Lontong dan Soto Banjar,
            Zaki suka Nasi Kuning dan Soto Banjar, sedangkan Oca suka Mie Bancir dan Lontong.
            Hubungan antara anak-anak dan menu makanan ini disebut relasi.
        </p>

        <!-- KOTAK KUNING (MASUK KE DALAM) -->
        <div style="
            background-color:#FFF6D6;
            border:3px dashed #FFDF94;
            border-radius:18px;
            padding:25px;
            margin-top:10px;
            margin-left:20px;
            margin-right:20px;
            box-sizing:border-box;
        ">

            <h3 style="font-weight:700; font-size:1.3rem; color:#C58940; margin-bottom:15px;">
                Pengertian Relasi
            </h3>

            <p style="font-size:1rem; color:#444; line-height:1.8; margin:0;">
                <strong>Relasi</strong> adalah hubungan antara dua himpunan.
                Relasi menghubungkan anggota dari himpunan pertama dengan anggota
                dari himpunan kedua.
            </p>

        </div>

    </div>

</div>


<!-- ======================== RELASI DALAM BENTUK MATEMATIKA ======================== -->
<div style="
    margin-top:30px;
    border:3px solid #C58940;
    border-radius:12px;
    padding:22px;
    background-color:#FFFDF7;
">

    <!-- HEADER -->
    <div style="
        display:inline-block;
        background-color:#E9A66F;
        color:white;
        font-weight:700;
        font-size:1.1rem;
        padding:8px 18px;
        border-radius:10px;
        margin-bottom:15px;
    ">
        Relasi dalam Bentuk Matematika
    </div>

    <!-- ISI -->
    <div style="font-size:1rem; color:#444; line-height:1.8;">

        <p>
            Hubungan antara anak dan makanan yang telah kita pelajari sebelumnya
            dapat ditulis dengan cara matematika yang lebih rapi.
        </p>

        <p>
            Dalam matematika, hubungan tersebut ditulis dalam bentuk
            <strong>pasangan berurut</strong>.
        </p>

        <p><strong>Contoh pasangan berurutan:</strong></p>

        <ul style="margin-left:18px;">
            <li>{(Anisa, Soto Banjar), (Anisa, Mie Bancir)}</li>
          
        </ul>

        <p>
            Artinya, Anisa berhubungan dengan Soto Banjar dan Mie Bancir.
        </p>

        <hr>

        <p>
            Pasangan berurutan biasanya ditulis dengan bentuk <strong>(a, b)</strong>.
        </p>

        <ul style="margin-left:18px;">
            <li>
                <strong>a</strong> adalah anggota dari kelompok pertama
                (misalnya nama anak Anisa).
            </li>
            <li>
                <strong>b</strong> adalah anggota dari kelompok kedua
                (misalnya nama makanan Soto Banjar).
            </li>
        </ul>

        <p>
            Tanda <strong>∈</strong> dibaca <em>“anggota dari”</em>.
        </p>

        <p>
            Jadi:
        </p>

        <ul style="margin-left:18px;">
            <li><strong>Anisa ∈ A</strong> artinya Anisa adalah anggota kelompok A.</li>
            <li><strong>Soto Banjar ∈ B</strong> artinya Soto Banjar adalah anggota kelompok B.</li>
        </ul>

        <hr>

        <!-- BAGIAN CROSS -->
        <p>
            Semua kemungkinan pasangan antara anggota A dan B disebut
            <strong>hasil kali Cartesius</strong>
            <strong>A × B</strong> Artinya, kita memasangkan semua nama dengan semua makanan.
            Jadi, setiap nama dipasangkan dengan semua menu yang ada.
        </p>

        <p><strong>Contoh:</strong></p>

        <p>
            Jika:
        </p>

        <ul style="margin-left:18px;">
            <li>A = {Anisa}</li>
            <li>B = {Soto Banjar, Mie Bancir}</li>
        </ul>

        <p>
            Maka:
        </p>

        <p>
            <strong>A × B = {(Anisa, Soto Banjar), (Anisa, Mie Bancir)}</strong>
            Artinya: Anisa dipasangkan dengan semua menu yang tersedia.
        </p>

        <p>
            Relasi adalah <strong>sebagian dari pasangan tersebut</strong>, yaitu pasangan yang benar-benar dipilih
        </p>

        <hr>

        <p>
            Satu anak boleh berhubungan dengan
            <strong>lebih dari satu makanan</strong>.
            Hal ini tidak salah dalam relasi.
        </p>

        <p>
            Contohnya, Anisa berhubungan dengan Soto Banjar dan Mie Bancir,
            dan hal tersebut tetap merupakan <strong>relasi yang benar</strong>.
        </p>

        <hr>

        <p><strong>Dalam relasi, terdapat tiga istilah penting:</strong></p>

        <ul style="margin-left:18px;">
            <li>
                <strong>Domain</strong> adalah kelompok asal
                (misalnya kelompok anak).
            </li>
            <li>
                <strong>Kodomain</strong> adalah kelompok tujuan
                (misalnya kelompok makanan).
            </li>
            <li>
                <strong>Range</strong> adalah makanan yang benar-benar
                dipilih atau disukai anak-anak.
            </li>
        </ul>

        <p>
            Dengan relasi, kita dapat melihat hubungan antara dua kelompok
            dengan lebih jelas dan teratur.
        </p>

    </div>
</div>

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12 d-flex justify-content-end">

            <!-- Tombol Selanjutnya (kanan) -->
            <a href="/bab_1/lanjut_2" class="btn btn-success px-4">
                Selanjutnya →
            </a>

        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
const anakBenar = ["Anisa", "Dito", "Zaki", "Oca"];
const menuBenar = ["Lontong", "Soto Banjar", "Mie Bancir", "Nasi Kuning"];

const pasanganBenar = {
    "Anisa": ["Soto Banjar", "Mie Bancir"],
    "Dito": ["Lontong", "Soto Banjar"],
    "Zaki": ["Nasi Kuning", "Soto Banjar"],
    "Oca": ["Mie Bancir", "Lontong"]
};

function normalisasi(teks){
    return teks.trim().toLowerCase();
}

function arraysEqualIgnoreOrderCase(arr1, arr2){
    if(arr1.length !== arr2.length) return false;
    const a = arr1.map(x => normalisasi(x)).sort();
    const b = arr2.map(x => normalisasi(x)).sort();
    return a.every((v, i) => v === b[i]);
}

function cekDuplikatCase(arr){
    const isi = arr.map(x => normalisasi(x)).filter(v => v !== "");
    return new Set(isi).size !== isi.length;
}

function resetWarnaRelasi(){
    document.querySelectorAll(".relasi-input").forEach(el => {
        el.classList.remove("relasi-benar", "relasi-salah");
    });
}

function periksaRelasi(){
    resetWarnaRelasi();

    const inputA = [
        document.getElementById("a1").value,
        document.getElementById("a2").value,
        document.getElementById("a3").value,
        document.getElementById("a4").value
    ];

    const inputB = [
        document.getElementById("b1").value,
        document.getElementById("b2").value,
        document.getElementById("b3").value,
        document.getElementById("b4").value
    ];

    const inputR = [];
    for(let i = 1; i <= 8; i++){
        inputR.push(document.getElementById("r" + i).value);
    }

    const feedback = document.getElementById("feedbackRelasi");

    const semuaKosong = [...inputA, ...inputB, ...inputR].every(v => v.trim() === "");
    if(semuaKosong){
        feedback.style.display = "block";
        feedback.className = "feedback-bad";
        feedback.innerHTML = `
            <b>Kamu belum mengisi jawaban.</b><br>
            Silakan isi himpunan A, himpunan B, dan relasi terlebih dahulu.
        `;
        return;
    }

    const benarA = arraysEqualIgnoreOrderCase(inputA, anakBenar) &&
                   !cekDuplikatCase(inputA) &&
                   !inputA.some(v => v.trim() === "");

    const benarB = arraysEqualIgnoreOrderCase(inputB, menuBenar) &&
                   !cekDuplikatCase(inputB) &&
                   !inputB.some(v => v.trim() === "");

    // Warna input A
    inputA.forEach((val, i) => {
        const el = document.getElementById("a" + (i + 1));
        if(val.trim() !== "" && anakBenar.some(k => normalisasi(k) === normalisasi(val))){
            el.classList.add("relasi-benar");
        }else if(val.trim() !== ""){
            el.classList.add("relasi-salah");
        }
    });

    // Warna input B
    inputB.forEach((val, i) => {
        const el = document.getElementById("b" + (i + 1));
        if(val.trim() !== "" && menuBenar.some(k => normalisasi(k) === normalisasi(val))){
            el.classList.add("relasi-benar");
        }else if(val.trim() !== ""){
            el.classList.add("relasi-salah");
        }
    });

    // Cek relasi per anak, urutan bebas
  // Cek relasi per anak, urutan bebas, dan isian parsial tetap dihargai
let benarR = true;

const namaUrutan = [
    "Anisa","Anisa",
    "Dito","Dito",
    "Zaki","Zaki",
    "Oca","Oca"
];

const inputPerAnak = {
    "Anisa": [],
    "Dito": [],
    "Zaki": [],
    "Oca": []
};

// simpan isi per anak
inputR.forEach((val, i) => {
    const nama = namaUrutan[i];
    if(val.trim() !== ""){
        inputPerAnak[nama].push(val);
    }
});

for(let nama in pasanganBenar){
    const jawabanBenar = pasanganBenar[nama].map(x => normalisasi(x));
    const jawabanSiswa = inputPerAnak[nama].map(x => normalisasi(x));

    // cek setiap kotak satu per satu
    inputR.forEach((val, i) => {
        if(namaUrutan[i] === nama){
            const el = document.getElementById("r" + (i + 1));
            const isi = normalisasi(val);

            if(val.trim() !== ""){
                if(jawabanBenar.includes(isi)){
                    el.classList.add("relasi-benar");
                }else{
                    el.classList.add("relasi-salah");
                    benarR = false;
                }
            }
        }
    });

    // cek lengkap atau belum
    const siswaSorted = [...jawabanSiswa].sort();
    const benarSorted = [...jawabanBenar].sort();

    if(
        siswaSorted.length !== benarSorted.length ||
        JSON.stringify(siswaSorted) !== JSON.stringify(benarSorted)
    ){
        benarR = false;
    }
}

    let pesan = [];

    if(!benarA){
        if(cekDuplikatCase(inputA)){
            pesan.push("Himpunan A masih belum tepat karena ada nama yang ditulis lebih dari satu kali.");
        }else if(inputA.some(v => v.trim() === "")){
            pesan.push("Himpunan A masih belum lengkap.");
        }else{
            pesan.push("Himpunan A masih belum sesuai.");
        }
    }

    if(!benarB){
        if(cekDuplikatCase(inputB)){
            pesan.push("Himpunan B masih belum tepat karena ada menu yang ditulis lebih dari satu kali.");
        }else if(inputB.some(v => v.trim() === "")){
            pesan.push("Himpunan B masih belum lengkap.");
        }else{
            pesan.push("Himpunan B masih belum sesuai.");
        }
    }

    if(!benarR){
        pesan.push("Relasi “menyukai” masih ada yang salah.");
    }

    if(benarA && benarB && benarR){
        feedback.style.display = "block";
        feedback.className = "feedback-ok";
        feedback.innerHTML = `
            <b>Bagus, jawabanmu sudah benar.</b><br>
            Himpunan A, himpunan B, dan relasi yang kamu susun sudah sesuai.<br><br>
            <b>Penjelasan:</b><br>
            Relasi menunjukkan hubungan antara anggota himpunan A dan himpunan B.
            Jadi setiap anak dipasangkan dengan menu makanan yang disukainya.
        `;
    }else{
        feedback.style.display = "block";
        feedback.className = "feedback-bad";
        feedback.innerHTML = `
            <b>Jawabanmu masih perlu diperbaiki.</b><br>
            ${pesan.map(p => `• ${p}`).join("<br>")}<br><br>

            <b>Jawaban benar:</b><br>
            A = { ${anakBenar.join(", ")} }<br>
            B = { ${menuBenar.join(", ")} }<br>
            R<sub>1</sub> = {<br>
            (Anisa, Soto Banjar),<br>
            (Anisa, Mie Bancir),<br>
            (Dito, Lontong),<br>
            (Dito, Soto Banjar),<br>
            (Zaki, Nasi Kuning),<br>
            (Zaki, Soto Banjar),<br>
            (Oca, Mie Bancir),<br>
            (Oca, Lontong)<br>
            }<br><br>

            <b>Penjelasan:</b><br>
            Urutan penulisan menu untuk anak yang sama boleh tertukar, tetapi menunya harus sesuai dengan cerita.
        `;
    }
}

function resetRelasi(){
    document.querySelectorAll(".relasi-input").forEach(el => {
        el.value = "";
        el.classList.remove("relasi-benar", "relasi-salah");
    });

    const feedback = document.getElementById("feedbackRelasi");
    feedback.style.display = "none";
    feedback.className = "";
    feedback.innerHTML = "";
}

const kunciPesananR2 = {
    anisa: "Soto Banjar",
    dito: "Lontong",
    zaki: "Nasi Kuning",
    oca: "Mie Bancir"
};

function periksaPesananR2(){
    const inputPesananR2 = [
        document.getElementById("ps1").value,
        document.getElementById("ps2").value,
        document.getElementById("ps3").value,
        document.getElementById("ps4").value
    ];

    const jawabanPesananR2 = [
        kunciPesananR2.anisa,
        kunciPesananR2.dito,
        kunciPesananR2.zaki,
        kunciPesananR2.oca
    ];

    const feedbackPesananR2 = document.getElementById("feedbackPesananR2");

    document.querySelectorAll("#ps1, #ps2, #ps3, #ps4").forEach(el => {
        el.classList.remove("relasi-benar", "relasi-salah");
    });

    const semuaKosongR2 = inputPesananR2.every(v => v.trim() === "");
    if(semuaKosongR2){
        feedbackPesananR2.style.display = "block";
        feedbackPesananR2.className = "feedback-bad";
        feedbackPesananR2.innerHTML = `
            <b>Kamu belum mengisi jawaban.</b><br>
            Silakan tuliskan relasi “memesan” terlebih dahulu.
        `;
        return;
    }

    let semuaBenarR2 = true;

    inputPesananR2.forEach((val, i) => {
        const el = document.getElementById("ps" + (i + 1));

        if(val.trim() !== ""){
            if(normalisasi(val) === normalisasi(jawabanPesananR2[i])){
                el.classList.add("relasi-benar");
            }else{
                el.classList.add("relasi-salah");
                semuaBenarR2 = false;
            }
        }else{
            semuaBenarR2 = false;
        }
    });

    if(semuaBenarR2){
        feedbackPesananR2.style.display = "block";
        feedbackPesananR2.className = "feedback-ok";
        feedbackPesananR2.innerHTML = `
            <b>Bagus, jawabanmu sudah benar.</b><br>
            Semua pasangan pada relasi “memesan” sudah sesuai.<br><br>
            <b>Penjelasan:</b><br>
            Relasi “memesan” menunjukkan menu yang benar-benar dipesan oleh setiap anak.
        `;
    }else{
        let pesanR2 = [];

        if(inputPesananR2.some(v => v.trim() === "")){
            pesanR2.push("Relasi “memesan” masih belum lengkap.");
        }

        if(inputPesananR2.some((v, i) => v.trim() !== "" && normalisasi(v) !== normalisasi(jawabanPesananR2[i]))){
            pesanR2.push("Masih ada pasangan yang belum sesuai.");
        }

        feedbackPesananR2.style.display = "block";
        feedbackPesananR2.className = "feedback-bad";
        feedbackPesananR2.innerHTML = `
            <b>Jawabanmu masih perlu diperbaiki.</b><br>
            ${pesanR2.map(p => `• ${p}`).join("<br>")}<br><br>

            <b>Jawaban benar:</b><br>
            R<sub>2</sub> = {<br>
            (Anisa, Soto Banjar),<br>
            (Dito, Lontong),<br>
            (Zaki, Nasi Kuning),<br>
            (Oca, Mie Bancir)<br>
            }<br><br>

            <b>Penjelasan:</b><br>
            Pada relasi “memesan”, setiap anak hanya dipasangkan dengan satu menu yang benar-benar ia pesan.
        `;
    }
}

function resetPesananR2(){
    document.querySelectorAll("#ps1, #ps2, #ps3, #ps4").forEach(el => {
        el.value = "";
        el.classList.remove("relasi-benar", "relasi-salah");
    });

    const feedbackPesananR2 = document.getElementById("feedbackPesananR2");
    feedbackPesananR2.style.display = "none";
    feedbackPesananR2.className = "";
    feedbackPesananR2.innerHTML = "";
}
const pasanganBenarR3 = {
    "Anisa": ["Soto Banjar", "Mie Bancir"],
    "Dito": ["Lontong", "Soto Banjar"],
    "Zaki": ["Nasi Kuning", "Soto Banjar"],
    "Oca": ["Mie Bancir", "Lontong"]
};

function normalisasiR3(teks){
    return teks.trim().toLowerCase();
}

function resetWarnaRelasiR3(){
    document.querySelectorAll("#r3a1, #r3a2, #r3d1, #r3d2, #r3z1, #r3z2, #r3o1, #r3o2").forEach(el => {
        el.classList.remove("relasi-benar", "relasi-salah");
    });
}

function periksaRelasiR3(){
    resetWarnaRelasiR3();

    const inputR3 = {
        "Anisa": [
            document.getElementById("r3a1").value,
            document.getElementById("r3a2").value
        ],
        "Dito": [
            document.getElementById("r3d1").value,
            document.getElementById("r3d2").value
        ],
        "Zaki": [
            document.getElementById("r3z1").value,
            document.getElementById("r3z2").value
        ],
        "Oca": [
            document.getElementById("r3o1").value,
            document.getElementById("r3o2").value
        ]
    };

    const feedbackR3 = document.getElementById("feedbackRelasiR3");

    const semuaKosongR3 = Object.values(inputR3).flat().every(v => v.trim() === "");
    if(semuaKosongR3){
        feedbackR3.style.display = "block";
        feedbackR3.className = "feedback-bad";
        feedbackR3.innerHTML = `
            <b>Kamu belum mengisi jawaban.</b><br>
            Silakan tuliskan relasi R₃ terlebih dahulu.
        `;
        return;
    }

    let benarSemuaR3 = true;
    let belumLengkapR3 = false;

    const mappingIdR3 = {
        "Anisa": ["r3a1", "r3a2"],
        "Dito": ["r3d1", "r3d2"],
        "Zaki": ["r3z1", "r3z2"],
        "Oca": ["r3o1", "r3o2"]
    };

    for(let nama in pasanganBenarR3){
        const jawabanBenarR3 = pasanganBenarR3[nama].map(x => normalisasiR3(x));
        const jawabanSiswaR3 = inputR3[nama]
            .filter(v => v.trim() !== "")
            .map(x => normalisasiR3(x));

        // warna tiap input satu per satu
        inputR3[nama].forEach((val, index) => {
            const el = document.getElementById(mappingIdR3[nama][index]);
            const isi = normalisasiR3(val);

            if(val.trim() !== ""){
                if(jawabanBenarR3.includes(isi)){
                    el.classList.add("relasi-benar");
                }else{
                    el.classList.add("relasi-salah");
                    benarSemuaR3 = false;
                }
            }
        });

        // cek lengkap dan tepat
        const siswaSortedR3 = [...jawabanSiswaR3].sort();
        const benarSortedR3 = [...jawabanBenarR3].sort();

        if(siswaSortedR3.length < benarSortedR3.length){
            belumLengkapR3 = true;
            benarSemuaR3 = false;
        }else if(JSON.stringify(siswaSortedR3) !== JSON.stringify(benarSortedR3)){
            benarSemuaR3 = false;
        }
    }

    if(benarSemuaR3){
        feedbackR3.style.display = "block";
        feedbackR3.className = "feedback-ok";
        feedbackR3.innerHTML = `
            <b>Bagus, jawabanmu sudah benar.</b><br>
            Relasi R₃ yang kamu tulis sudah sesuai.<br><br>
            <b>Penjelasan:</b><br>
            Pada R₃, urutan pasangan dibalik. Jadi menu ditulis lebih dahulu, lalu diikuti nama anak yang menyukainya.
        `;
    }else{
        let pesanR3 = [];

        if(belumLengkapR3){
            pesanR3.push("Relasi R₃ masih belum lengkap.");
        }else{
            pesanR3.push("Relasi R₃ masih ada yang salah.");
        }

        feedbackR3.style.display = "block";
        feedbackR3.className = "feedback-bad";
        feedbackR3.innerHTML = `
            <b>Jawabanmu masih perlu diperbaiki.</b><br>
            ${pesanR3.map(p => `• ${p}`).join("<br>")}<br><br>

            <b>Jawaban benar:</b><br>
            R<sub>3</sub> = {<br>
            (Soto Banjar, Anisa),<br>
            (Mie Bancir, Anisa),<br>
            (Lontong, Dito),<br>
            (Soto Banjar, Dito),<br>
            (Nasi Kuning, Zaki),<br>
            (Soto Banjar, Zaki),<br>
            (Mie Bancir, Oca),<br>
            (Lontong, Oca)<br>
            }<br><br>

            <b>Penjelasan:</b><br>
            Relasi ini membalik urutan dari hubungan sebelumnya. Jika pada R₁ ditulis (anak, menu), maka pada R₃ ditulis (menu, anak).
        `;
    }
}

function resetRelasiR3(){
    document.querySelectorAll("#r3a1, #r3a2, #r3d1, #r3d2, #r3z1, #r3z2, #r3o1, #r3o2").forEach(el => {
        el.value = "";
        el.classList.remove("relasi-benar", "relasi-salah");
    });

    const feedbackR3 = document.getElementById("feedbackRelasiR3");
    feedbackR3.style.display = "none";
    feedbackR3.className = "";
    feedbackR3.innerHTML = "";
}

</script>
@endsection
</body>
</html>
