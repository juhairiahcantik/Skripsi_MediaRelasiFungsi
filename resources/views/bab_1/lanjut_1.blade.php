<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Materi: Penyajian Himpunan</title>

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
        @media (max-width: 768px) {
            .content-gap {
                margin-left: 10px;
                margin-right: 10px;
            }
        }

        .cara-item {
    margin-top: 16px;
    font-size: 1rem;
    line-height: 1.7;
    color: #444;
}

.judul-cara {
    font-weight: bold;
    margin-bottom: 6px;
}

.cara-item p {
    margin: 4px 0 4px 18px; /* indent biar sejajar */
}


    </style>
</head>

<body>

@extends('layouts.main')
@section('container')

<br>
<div class="content-gap">

<!-- ======================== PENYAJIAN HIMPUNAN ======================== -->
<div class="card mt-4" style="
    width:100%;
    border:3px solid #7A4BC4;
    border-radius:16px;
    overflow:hidden;
">
    <!-- HEADER -->
    <div class="card-header text-center"
         style="background-color:#A855F7; color:white; font-size:1.3rem; font-weight:700; border-bottom:2.5px solid #7f3ab7;">
        Penyajian Himpunan
    </div>

    <!-- BODY -->
    <div class="card-body" style="padding:30px; background-color:#FFFFFF;">

        <p style="font-size:1rem; color:#444; line-height:1.8;">
            Perlu diingat, suatu himpunan dinotasikan dengan huruf kapital
            (seperti <strong>A, B, C, … atau Z</strong>) dan elemen/anggota dari suatu
            himpunan dituliskan di dalam tanda kurung kurawal
            <strong>{ … }</strong>.
        </p>

        <p style="font-size:1rem; line-height:1.8;">
            Ada tiga cara untuk menyatakan himpunan tanpa mengubah maknanya, yaitu sebagai berikut.
        </p>

       <!-- 1. DESKRIPSI -->
<div class="cara-item">
    <div style="
    display:inline-block;
    background:#DBEAFE;   /* biru muda */
    color:#1D4ED8;        /* biru teks */
    padding:6px 12px;
    border-radius:8px;
    font-weight:600;
    font-size:0.95rem;
    margin-bottom:6px;
">
    1. Cara Deskripsi
</div>

    <p>
        Himpunan dinyatakan dengan cara kata-kata.
    </p>

    <p>
        Himpunan dapat direpresentasikan dengan menggambarkan karakteristik
        yang dimiliki setiap anggota himpunan.
    </p>
</div>
<br>
        <div style="
            background:#F5F3FF;
            border:3px solid #C4B5FD;
            border-radius:18px;
            padding:12px;
            width:100%;
            box-sizing:border-box;
            font-family:Arial, sans-serif;
            color:#222;
        ">

    <h2 style="
        text-align: center;
        font-size: 20px;
        font-weight: bold;
        color: #6D28D9;
        margin: 12px 0 16px 0;
        line-height: 1.4;
        ">
        Ayo Nyatakan Himpunan Dengan Cara Deskripsi
    </h2>

    <!-- Pengantar -->
    <div style="
    background:#FFFFFF;
    border:1px solid #E5E7EB;
    border-radius:14px;
    padding:22px;
    font-size:17px;
    line-height:1.8;
    color:#222;
">

    <div style="font-weight:700; font-size:19px; margin-bottom:12px;">
        Soal Cerita
    </div>

    <p style="margin:8px 0;">
        Di sebuah keluarga, ada Andi dan Lina. Mereka adalah kakek dan nenek.
    </p>

    <p style="margin:8px 0;">
        Andi dan Lina mempunyai empat orang anak, yaitu Iful, Hendra, Ardi, dan Ica.
    </p>

    <p style="margin:8px 0;">
        Iful menikah dengan Ifit. Mereka mempunyai dua orang anak, yaitu Lala dan Nabil.
    </p>

    <p style="margin:8px 0;">
        Hendra menikah dengan Hikmah. Mereka mempunyai tiga orang anak, yaitu Alfi, Bella, dan Rehan.
    </p>

    <p style="margin:8px 0;">
        Sementara itu, Ardi dan Ica belum menikah.
    </p>

</div>
<br>
    <!-- Himpunan -->
    <div style="
        background:#FFFFFF;
        padding:14px;
        border-radius:12px;
        margin-bottom:14px;
        line-height:1.8;
        border:1px solid #E9D5FF;
        font-size: 17px;
    ">
        <b>Perhatikan himpunan berikut.</b><br><br>
        A = {Ipul, Hendra, Ardi, Ica}<br>
        B = {Lala, Nabil, Alfi, Bella, Rehan}<br>
        C = {Andi, Lina}<br>
        S = {Andi, Lina, Ipul, Ifit, Hendra, Hikmah, Ardi, Nisa, Lala, Nabil, Alfi, Bella, Rehan}
    </div>

    <!-- Tujuan -->
    <div style="
        background:#FFFFFF;
        padding:14px;
        border-radius:12px;
        margin-bottom:16px;
        line-height:1.7;
        border:1px solid #E9D5FF;
        font-size: 17px;
    ">
       <b>Tugasmu:</b><br>
1. Klik salah satu pilihan deskripsi di bawah.<br>
2. Lalu klik kotak kosong di samping Himpunan A, B, C, atau S yang sesuai.<br>
3. Ulangi sampai semua kotak terisi.
    </div>

    <style>
        .baris-jawaban {
            margin: 16px 0;
            font-size: 17px;
            line-height: 1.8;
        }

        .kotak-jawaban {
            display: inline-block;
            min-width: 260px;
            min-height: 40px;
            padding: 6px 10px;
            margin-left: 6px;
            background: #F3E8FF;
            border-bottom: 3px solid #7C3AED;
            border-radius: 8px;
            vertical-align: middle;
            cursor: pointer;
        }

        .pilihan {
            display: inline-block;
            background: #DDD6FE;
            padding: 10px 14px;
            margin: 6px;
            border-radius: 10px;
            cursor: pointer;
            font-size: 17px;
        }

        .pilihan.active {
            background: #8B5CF6;
            color: white;
        }

        .correct {
            border-bottom: 4px solid #16A34A !important;
        }

        .wrong {
            border-bottom: 4px solid #DC2626 !important;
        }

        .empty {
            border-bottom: 4px dashed #A78BFA !important;
        }

        .btn-ungu {
            background:#8B5CF6;
            color:white;
            border:none;
            padding:10px 16px;
            border-radius:10px;
            cursor:pointer;
            font-size:16px;
        }

        .btn-putih {
            background:white;
            color:#6D28D9;
            border:2px solid #8B5CF6;
            padding:10px 16px;
            border-radius:10px;
            cursor:pointer;
            font-size:15px;
            margin-left:8px;
        }

        #hasil {
            margin-top:14px;
            font-weight:bold;
            color:#6D28D9;
        }

        @media (max-width: 600px) {
            .kotak-jawaban {
                display:block;
                width:100%;
                margin-left:0;
                margin-top:8px;
            }

            .pilihan {
                display:block;
                width:100%;
                box-sizing:border-box;
            }

            .btn-ungu, .btn-putih {
                width:100%;
                margin:6px 0 0 0;
            }
        }
    </style>

    <!-- Jawaban -->
    <div style="
        background:#FFFFFF;
        padding:14px;
        border-radius:12px;
        margin-bottom:15px;
        border:1px solid #E9D5FF;
           font-size: 17px;
    ">
        <b>Isilah dengan deskripsi yang tepat.</b>

        <div class="baris-jawaban">
            Himpunan A = { <span class="kotak-jawaban" onclick="isiJawaban('A')"></span> }
        </div>

        <div class="baris-jawaban">
            Himpunan B = { <span class="kotak-jawaban" onclick="isiJawaban('B')"></span> }
        </div>

        <div class="baris-jawaban">
            Himpunan C = { <span class="kotak-jawaban" onclick="isiJawaban('C')"></span> }
        </div>

        <div class="baris-jawaban">
            Himpunan S = { <span class="kotak-jawaban" onclick="isiJawaban('S')"></span> }
        </div>
    </div>

    <!-- Pilihan -->
    <div style="
        background:#FFFFFF;
        padding:14px;
        border-radius:12px;
        margin-bottom:16px;
        border:1px solid #E9D5FF;
    ">
        <b>Pilihan deskripsi:</b><br><br>
        <div id="daftarPilihan">
            <div class="pilihan" onclick="pilihJawaban(this,'opt1')">anak-anak Andi dan Lina</div>
            <div class="pilihan" onclick="pilihJawaban(this,'opt2')">cucu-cucu Andi dan Lina</div>
            <div class="pilihan" onclick="pilihJawaban(this,'opt3')">kakek dan nenek</div>
            <div class="pilihan" onclick="pilihJawaban(this,'opt4')">semua anggota keluarga</div>
        </div>
    </div>

    <button onclick="cekJawaban()" class="btn-ungu">Cek Jawaban</button>
    <button onclick="ulangSoal()" class="btn-putih">Ulangi</button>

    <p id="hasil"></p>
</div>

<script>
let pilihanAktif = null;
let jawaban = {};

function pilihJawaban(el, id) {
    document.querySelectorAll('.pilihan').forEach(item => item.classList.remove('active'));
    el.classList.add('active');

    pilihanAktif = {
        id: id,
        teks: el.innerText,
        element: el
    };
}

function isiJawaban(target) {
    if (!pilihanAktif) return;

    const kotak = document.querySelectorAll('.kotak-jawaban');
    const mapIndex = { A: 0, B: 1, C: 2, S: 3 };
    const box = kotak[mapIndex[target]];

    if (jawaban[target]) {
        const teksLama = box.innerText;
        const idLama = jawaban[target];

        const opsiBaru = document.createElement("div");
        opsiBaru.className = "pilihan";
        opsiBaru.innerText = teksLama;
        opsiBaru.onclick = function() {
            pilihJawaban(this, idLama);
        };

        document.getElementById("daftarPilihan").appendChild(opsiBaru);
    }

    box.innerHTML = pilihanAktif.teks;
    jawaban[target] = pilihanAktif.id;

    pilihanAktif.element.remove();
    pilihanAktif = null;
}

function cekJawaban() {
    const kunci = {
        A: "opt1",
        B: "opt2",
        C: "opt3",
        S: "opt4"
    };

    const kotak = document.querySelectorAll('.kotak-jawaban');
    let benar = 0;
    const urutan = ["A", "B", "C", "S"];

    urutan.forEach((kode, i) => {
        if (!jawaban[kode]) {
            kotak[i].className = "kotak-jawaban empty";
        } else if (jawaban[kode] === kunci[kode]) {
            kotak[i].className = "kotak-jawaban correct";
            benar++;
        } else {
            kotak[i].className = "kotak-jawaban wrong";
        }
    });

    document.getElementById("hasil").innerHTML =
        "Kamu menjawab benar " + benar + " dari 4 soal.";
}

function ulangSoal() {
    document.querySelectorAll('.kotak-jawaban').forEach(box => {
        box.innerHTML = "";
        box.className = "kotak-jawaban";
    });

    document.getElementById("daftarPilihan").innerHTML = `
        <div class="pilihan" onclick="pilihJawaban(this,'opt1')">anak-anak Andi dan Lina</div>
        <div class="pilihan" onclick="pilihJawaban(this,'opt2')">cucu-cucu Andi dan Lina</div>
        <div class="pilihan" onclick="pilihJawaban(this,'opt3')">kakek dan nenek</div>
        <div class="pilihan" onclick="pilihJawaban(this,'opt4')">semua anggota keluarga</div>
    `;

    pilihanAktif = null;
    jawaban = {};
    document.getElementById("hasil").innerHTML = "";
}
</script>
<br>
<!-- 2. ENUMERASI -->
<div class="cara-item">

    <div style="
        display:inline-block;
        background:#DBEAFE;   /* biru muda */
        color:#1D4ED8;        /* biru teks */
        padding:6px 12px;
        border-radius:8px;
        font-weight:600;
        font-size:0.95rem;
        margin-bottom:6px;
    ">
        2. Cara Enumerasi
    </div>

    <p>
        Himpunan dinyatakan dengan cara menyebutkan anggota-anggotanya.
    </p>

    <p>
        Anggota himpunan dituliskan satu per satu dalam bentuk daftar.
    </p>

    <p>
        Jika jumlah anggotanya banyak, dapat digunakan tanda
        <strong>(...)</strong> yang berarti “dan seterusnya”.
    </p>

</div>
<br>
       <div style="
    background:#F5F3FF;
    border:2px solid #C4B5FD;
    border-radius:20px;
    padding:20px;
    font-family:Arial, sans-serif;
    box-sizing:border-box;
">

    <!-- JUDUL -->
    <div style="
        font-size:20px;
        font-weight:bold;
        color:#6D28D9;
        text-align:center;
        margin-bottom:16px;
    ">
        Ayo Nyatakan Dengan Cara Enumerasi
    </div>

    <!-- KOTAK 1: SOAL CERITA -->
    <div style="
        background:#FFFFFF;
        border:1px solid #E9D5FF;
        border-radius:20px;
        padding:20px;
        margin-bottom:16px;
        box-sizing:border-box;
    ">
        <div style="
            font-size:18px;
            font-weight:700;
            color:#111827;
            margin-bottom:14px;
        ">
            Soal Cerita:
        </div>

        <div style="
            font-size:16px;
            line-height:1.9;
            color:#1F2937;
        ">
            <div style="margin-bottom:12px;">
                Di sebuah keluarga, ada Andi dan Lina. Mereka adalah kakek dan nenek.
            </div>

            <div style="margin-bottom:12px;">
                Andi dan Lina mempunyai empat orang anak, yaitu Iful, Hendra, Ardi, dan Ica.
            </div>

            <div style="margin-bottom:12px;">
                Iful menikah dengan Ifit dan mempunyai dua anak, yaitu Lala dan Nabil.
            </div>

            <div style="margin-bottom:12px;">
                Hendra menikah dengan Hikmah dan mempunyai tiga anak, yaitu Alfi, Bella, dan Rehan.
            </div>

            <div style="margin-bottom:18px;">
                Ardi dan Ica belum menikah.
            </div>

            <div style="font-weight:700; margin-bottom:8px;">
                Arti setiap himpunan:
            </div>

            <div>A = anak-anak Andi dan Lina</div>
            <div>B = cucu-cucu Andi dan Lina</div>
            <div>C = kakek dan nenek</div>
        </div>
    </div>

    <!-- TUGAS -->
    <div style="
        background:#FFFFFF;
        border:1px solid #E9D5FF;
        border-radius:16px;
        padding:20px;
    ">

        <div style="
            color:#6D28D9;
            font-size:20px;
            font-weight:700;
            margin-bottom:8px;
        ">
            Tugasmu:
        </div>

        <div style="
            font-size:16px;
            margin-bottom:18px;
        ">
            Pilih nama yang tepat untuk melengkapi setiap himpunan berikut.
        </div>

        <!-- A -->
        <div style="margin-bottom:14px; font-size:16px;">
            Himpunan A = {Iful,
            <select id="A" style="
                padding:8px;
                border:2px solid #C4B5FD;
                border-radius:10px;
                margin:0 6px;
            ">
                <option value="">Pilih Jawaban</option>
                <option>Hendra</option>
                <option>Alfi</option>
                <option>Andi</option>
            </select>
            , Ardi, Ica}
        </div>

        <!-- B -->
        <div style="margin-bottom:14px; font-size:16px;">
            Himpunan B = {Lala, Nabil,
            <select id="B" style="
                padding:8px;
                border:2px solid #C4B5FD;
                border-radius:10px;
                margin:0 6px;
            ">
                <option value="">Pilih Jawaban</option>
                <option>Hendra</option>
                <option>Alfi</option>
                <option>Andi</option>
            </select>
            , Bella, Rehan}
        </div>

        <!-- C -->
        <div style="margin-bottom:18px; font-size:16px;">
            Himpunan C = {
            <select id="C" style="
                padding:8px;
                border:2px solid #C4B5FD;
                border-radius:10px;
                margin:0 6px;
            ">
                <option value="">Pilih Jawaban</option>
                <option>Hendra</option>
                <option>Alfi</option>
                <option>Andi</option>
            </select>
            , Lina}
        </div>

        <!-- BUTTON -->
        <div style="display:flex; gap:10px;">
            <button onclick="cekJawaban()" style="
                background:#8B5CF6;
                color:white;
                padding:10px 16px;
                border:none;
                border-radius:10px;
                cursor:pointer;
            ">Cek Jawaban</button>

            <button onclick="ulang()" style="
                border:2px solid #8B5CF6;
                background:white;
                color:#6D28D9;
                padding:10px 16px;
                border-radius:10px;
                cursor:pointer;
            ">Ulangi</button>
        </div>

        <!-- FEEDBACK (SATU KOTAK) -->
        <div id="feedback" style="
            display:none;
            background:#F5F3FF;
            border:1px solid #C4B5FD;
            border-radius:12px;
            padding:16px;
            margin-top:16px;
            line-height:1.8;
            font-size:15px;
        "></div>

    </div>
</div>

<script>
function cekJawaban(){
    let benar = 0;
    let kosong = 0;

    let A = document.getElementById("A");
    let B = document.getElementById("B");
    let C = document.getElementById("C");

    let valA = A.value;
    let valB = B.value;
    let valC = C.value;

    // reset warna dulu
    [A,B,C].forEach(el=>{
        el.style.borderColor = "#C4B5FD";
        el.style.background = "#FFFFFF";
    });

    // hitung kosong
    if(valA === "") kosong++;
    if(valB === "") kosong++;
    if(valC === "") kosong++;

    // cek A
    if(valA === "Hendra"){
        benar++;
        A.style.borderColor = "#16A34A";
        A.style.background = "#ECFDF5";
    } else if(valA !== ""){
        A.style.borderColor = "#DC2626";
        A.style.background = "#FEF2F2";
    }

    // cek B
    if(valB === "Alfi"){
        benar++;
        B.style.borderColor = "#16A34A";
        B.style.background = "#ECFDF5";
    } else if(valB !== ""){
        B.style.borderColor = "#DC2626";
        B.style.background = "#FEF2F2";
    }

    // cek C
    if(valC === "Andi"){
        benar++;
        C.style.borderColor = "#16A34A";
        C.style.background = "#ECFDF5";
    } else if(valC !== ""){
        C.style.borderColor = "#DC2626";
        C.style.background = "#FEF2F2";
    }

    // feedback tetap
    let isi = "";

    if(kosong === 3){
        isi = `
        <b>Kamu belum menjawab soal 😊</b><br><br>
        Ayo dicoba dulu ya.
        `;
    }
    else if(kosong > 0){
        isi = `
        <b>Kamu sudah benar ${benar} dari 3 soal 👍</b><br><br>
        Bagus, kamu sudah mulai benar 😊
        `;
    }
    else if(benar === 3){
        isi = `
        <b>Hebat, kamu benar 3 dari 3 soal 🎉</b>
        `;
    }
   else if(benar === 0){
    isi = `
    <b>Kamu benar 0 dari 3 soal 🙂</b><br><br>
    Tidak apa-apa, ayo coba lagi ya.<br>
    Perhatikan kembali cerita keluarganya.
    `;
}

else{
    isi = `
    <b>Kamu sudah benar ${benar} dari 3 soal 👍</b><br><br>
    Bagus, sudah mulai benar 😊<br>
    Coba perhatikan lagi bagian yang belum tepat ya.
    `;
}
    document.getElementById("feedback").style.display = "block";
    document.getElementById("feedback").innerHTML = isi;
}

function ulang(){
    document.getElementById("A").value = "";
    document.getElementById("B").value = "";
    document.getElementById("C").value = "";
    document.getElementById("feedback").style.display = "none";
}
</script>

        
        <!-- 3. NOTASI HIMPUNAN -->
<div class="cara-item">

    <div style="
        display:inline-block;
        background:#DBEAFE;   /* biru muda */
        color:#1D4ED8;        /* biru teks */
        padding:6px 12px;
        border-radius:8px;
        font-weight:600;
        font-size:0.95rem;
        margin-bottom:6px;
    ">
        3. Cara Notasi Himpunan
    </div>

    <p>
        Himpunan dinyatakan dengan cara menggunakan notasi pembuat himpunan.
    </p>

    <p>
        Konstruktor himpunan digunakan untuk menyatakan syarat keanggotaan suatu himpunan.
        Bentuk umum notasi ini adalah <strong>{x | P(x)}</strong>.
    </p>

    <p>
        Simbol <strong>x</strong> menyatakan anggota himpunan, sedangkan <strong>P(x)</strong>
        menyatakan syarat yang harus dipenuhi agar x menjadi anggota himpunan.
    </p>

    <p>
        Variabel lain juga dapat digunakan, seperti a, b, c, y, z, dan lain-lain.
    </p>

</div>
        <!-- ====================== NOTASI PEMBENTUK HIMPUNAN (UNGU, AMAN) ====================== -->
<div class="notasi-ungu-wrap">

    <!-- JUDUL -->
    <div class="notasi-ungu-title">
        Ayo Nyatakan dalam Notasi Pembentuk Himpunan
    </div>

    <!-- KOTAK 1: SOAL CERITA -->
    <div class="notasi-ungu-box">
        <div class="notasi-ungu-subtitle">Soal Cerita:</div>

        <div class="notasi-ungu-text">
            <p>Dalam sebuah keluarga, Andi dan Lina adalah kakek dan nenek.</p>

            <p>Mereka mempunyai empat orang anak, yaitu <b>Iful, Hendra, Ardi, dan Ica</b>.</p>

            <p>Iful memiliki dua anak, yaitu <b>Lala dan Nabil</b>.</p>

            <p>Hendra memiliki tiga anak, yaitu <b>Alfi, Bella, dan Rehan</b>.</p>

            <p>Ardi dan Ica belum menikah.</p>

            <p>Dari cerita tersebut, diperoleh beberapa himpunan berikut:</p>

            <ul class="notasi-ungu-list">
                <li>
                    <span class="notasi-ungu-badge"> Himpunan A</span>
                    = { Iful, Hendra, Ardi, Ica }
                </li>
                <li>
                    <span class="notasi-ungu-badge"> Himpunan B</span>
                    = { Lala, Nabil, Alfi, Bella, Rehan }
                </li>
                <li>
                    <span class="notasi-ungu-badge"> Himpunan C</span>
                    = { Andi, Lina }
                </li>
                <li>
                    <span class="notasi-ungu-badge"> Himpunan S</span>
                    = { Andi, Lina, Iful, Ifit, Hendra, Hikmah, Ardi, Ica, Lala, Nabil, Alfi, Bella, Rehan }
                </li>
            </ul>

            <p style="margin-top:10px;">
                Sekarang, nyatakan himpunan tersebut dalam bentuk
                <b>notasi pembentuk himpunan</b>.
            </p>
        </div>
    </div>

    <!-- KOTAK 2: TUGAS -->
    <div class="notasi-ungu-box">
        <div class="notasi-ungu-subtitle">Perhatikan pernyataan berikut.</div>

        <div class="notasi-ungu-instruction">
            <b>Tugasmu:</b><br>
            Pilih kata yang tepat untuk melengkapi notasi pembentuk himpunan berikut.<br>
            Jawaban yang dipilih adalah <b>jenis anggota</b>, bukan nama orang.
        </div>

        <div class="notasi-ungu-row">
            Himpunan A = { x | x adalah
            <select id="notasiUngu-A" class="notasi-ungu-select">
                <option value="">Pilih Jawaban</option>
                <option value="anak">anak</option>
                <option value="cucu">cucu</option>
                <option value="orang tua">orang tua</option>
                <option value="anggota keluarga">anggota keluarga</option>
            </select>
            dari Andi dan Lina }
        </div>

        <div class="notasi-ungu-row">
            Himpunan B = { x | x adalah
            <select id="notasiUngu-B" class="notasi-ungu-select">
                <option value="">Pilih Jawaban</option>
                <option value="anak">anak</option>
                <option value="cucu">cucu</option>
                <option value="orang tua">orang tua</option>
                <option value="anggota keluarga">anggota keluarga</option>
            </select>
            dari Andi dan Lina }
        </div>

        <div class="notasi-ungu-row">
            Himpunan C = { x | x adalah
            <select id="notasiUngu-C" class="notasi-ungu-select">
                <option value="">Pilih Jawaban</option>
                <option value="anak">anak</option>
                <option value="cucu">cucu</option>
                <option value="orang tua">orang tua</option>
                <option value="anggota keluarga">anggota keluarga</option>
            </select>
            (kakek atau nenek) }
        </div>

        <div class="notasi-ungu-row">
            Himpunan S = { x | x merupakan
            <select id="notasiUngu-S" class="notasi-ungu-select">
                <option value="">Pilih Jawaban</option>
                <option value="anak">anak</option>
                <option value="cucu">cucu</option>
                <option value="orang tua">orang tua</option>
                <option value="anggota keluarga">anggota keluarga</option>
            </select>
            dalam silsilah keluarga Andi }
        </div>

        <div class="notasi-ungu-btn-row">
            <button type="button" class="notasi-ungu-btn-main" onclick="notasiUnguCheck()">Cek Jawaban</button>
            <button type="button" class="notasi-ungu-btn-reset" onclick="notasiUnguReset()">Ulangi</button>
        </div>

        <div id="notasiUngu-feedback" class="notasi-ungu-feedback" style="display:none;"></div>
    </div>
</div>

<style>
.notasi-ungu-wrap{
    background:#F5F3FF;
    border:2px solid #C4B5FD;
    border-radius:24px;
    padding:22px;
    margin-top:20px;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

.notasi-ungu-title{
    text-align:center;
    font-size:20px;
    font-weight:700;
    color:#6D28D9;
    margin-bottom:18px;
}

.notasi-ungu-box{
    background:#FFFFFF;
    border:1px solid #E9D5FF;
    border-radius:20px;
    padding:20px;
    margin-bottom:16px;
    box-sizing:border-box;
}

.notasi-ungu-subtitle{
    font-size:18px;
    font-weight:700;
    color:#111827;
    margin-bottom:14px;
}

.notasi-ungu-text{
    font-size:16px;
    line-height:1.9;
    color:#1F2937;
}

.notasi-ungu-text p{
    margin:0 0 12px 0;
}

.notasi-ungu-list{
    margin:8px 0 0 22px;
    padding:0;
    line-height:1.9;
}

.notasi-ungu-badge{
    display:inline-block;
    min-width:26px;
    text-align:center;
    background:#7C3AED;
    color:#FFFFFF;
    border-radius:8px;
    padding:2px 8px;
    font-weight:700;
    margin-right:6px;
}

.notasi-ungu-instruction{
    font-size:16px;
    color:#1F2937;
    margin-bottom:18px;
    line-height:1.8;
}

.notasi-ungu-row{
    margin-bottom:14px;
    font-size:16px;
    line-height:1.9;
    color:#111827;
}

.notasi-ungu-select{
    min-width:180px;
    padding:8px 12px;
    border:2px solid #C4B5FD;
    border-radius:10px;
    background:#FFFFFF;
    font-size:15px;
    margin:0 6px;
    box-sizing:border-box;
    outline:none;
}

.notasi-ungu-btn-row{
    display:flex;
    gap:10px;
    flex-wrap:wrap;
    margin-top:16px;
}

.notasi-ungu-btn-main{
    background:#8B5CF6;
    color:white;
    border:none;
    border-radius:10px;
    padding:10px 18px;
    font-size:15px;
    cursor:pointer;
}

.notasi-ungu-btn-reset{
    background:#FFFFFF;
    color:#6D28D9;
    border:2px solid #8B5CF6;
    border-radius:10px;
    padding:10px 18px;
    font-size:15px;
    cursor:pointer;
}

.notasi-ungu-feedback{
    margin-top:16px;
    background:#F5F3FF;
    border:1px solid #C4B5FD;
    border-radius:14px;
    padding:16px;
    font-size:15px;
    line-height:1.8;
    color:#374151;
}

@media (max-width: 600px){
    .notasi-ungu-select{
        display:block;
        width:100%;
        min-width:100%;
        margin:6px 0;
    }

    .notasi-ungu-btn-main,
    .notasi-ungu-btn-reset{
        width:100%;
    }
}
</style>

<script>
function notasiUnguCheck(){
    const A = document.getElementById("notasiUngu-A");
    const B = document.getElementById("notasiUngu-B");
    const C = document.getElementById("notasiUngu-C");
    const S = document.getElementById("notasiUngu-S");

    const kunci = {
        A: "anak",
        B: "cucu",
        C: "orang tua",
        S: "anggota keluarga"
    };

    let benar = 0;
    let kosong = 0;

    [A, B, C, S].forEach(el => {
        el.style.borderColor = "#C4B5FD";
        el.style.background = "#FFFFFF";
    });

    if (A.value === "") kosong++;
    if (B.value === "") kosong++;
    if (C.value === "") kosong++;
    if (S.value === "") kosong++;

    if (A.value === kunci.A) {
        benar++;
        A.style.borderColor = "#16A34A";
        A.style.background = "#ECFDF5";
    } else if (A.value !== "") {
        A.style.borderColor = "#DC2626";
        A.style.background = "#FEF2F2";
    }

    if (B.value === kunci.B) {
        benar++;
        B.style.borderColor = "#16A34A";
        B.style.background = "#ECFDF5";
    } else if (B.value !== "") {
        B.style.borderColor = "#DC2626";
        B.style.background = "#FEF2F2";
    }

    if (C.value === kunci.C) {
        benar++;
        C.style.borderColor = "#16A34A";
        C.style.background = "#ECFDF5";
    } else if (C.value !== "") {
        C.style.borderColor = "#DC2626";
        C.style.background = "#FEF2F2";
    }

    if (S.value === kunci.S) {
        benar++;
        S.style.borderColor = "#16A34A";
        S.style.background = "#ECFDF5";
    } else if (S.value !== "") {
        S.style.borderColor = "#DC2626";
        S.style.background = "#FEF2F2";
    }

    let isi = "";

    if (kosong === 4) {
        isi = `
            <b>Kamu belum menjawab soal 😊</b><br><br>
            Ayo dicoba dulu ya. Pilih kata yang sesuai untuk melengkapi notasi pembentuk himpunan.
        `;
    } else if (kosong > 0) {
        isi = `
            <b>Kamu sudah benar ${benar} dari 4 soal 👍</b><br><br>
            Bagus, kamu sudah mulai benar 😊<br>
            Masih ada yang belum diisi, coba lengkapi dulu ya.
        `;
    } else if (benar === 4) {
        isi = `
            <b>Hebat, kamu benar 4 dari 4 soal 🎉</b><br><br>
            Keren sekali! Kamu sudah bisa menggunakan notasi pembentuk himpunan dengan tepat.
        `;
    } else if (benar === 0) {
        isi = `
            <b>Kamu benar 0 dari 4 soal 🙂</b><br><br>
            Tidak apa-apa, ayo coba lagi ya.<br>
            Ingat, yang dipilih adalah jenis anggotanya, bukan nama orangnya.
        `;
    } else {
        isi = `
            <b>Kamu sudah benar ${benar} dari 4 soal 👍</b><br><br>
            Bagus, sudah mendekati benar 😊<br>
            Coba perhatikan lagi hubungan keluarga pada cerita tersebut.
        `;
    }

    document.getElementById("notasiUngu-feedback").style.display = "block";
    document.getElementById("notasiUngu-feedback").innerHTML = isi;
}

function notasiUnguReset(){
    const ids = ["notasiUngu-A", "notasiUngu-B", "notasiUngu-C", "notasiUngu-S"];

    ids.forEach(id => {
        const el = document.getElementById(id);
        el.value = "";
        el.style.borderColor = "#C4B5FD";
        el.style.background = "#FFFFFF";
    });

    document.getElementById("notasiUngu-feedback").style.display = "none";
    document.getElementById("notasiUngu-feedback").innerHTML = "";
}
</script>

    </div>
</div>
<!-- ====================== END PENYAJIAN HIMPUNAN ====================== -->
<!-- ======================== TUTORIAL DIAGRAM VENN ======================== -->
<div style="
    margin-top:30px;
    border:3px solid #7A4BC4;
    border-radius:12px;
    padding:22px;
    background-color:#FBF8FF;
">

<!-- HEADER -->
<div style="
    display:inline-block;
    background-color:#d58ede;
    color:white;
    font-weight:700;
    font-size:1.1rem;
    padding:8px 18px;
    border-radius:10px;
    margin-bottom:15px;
">
    Tutorial Menggambar Diagram Venn
</div>

<div style="font-size:1rem; color:#444; line-height:1.8;">

<p>Ikuti langkah-langkah berikut untuk membuat diagram Venn:</p>

<!-- ======================== LANGKAH 1 ======================== -->
<div style="
display:inline-block;
background-color:#EDE9FB;
color:#4B2D91;
font-weight:600;
font-size:0.95rem;
padding:10px 20px;
border-radius:10px;
margin-top:24px;
margin-bottom:12px;
outline:1.5px dashed rgba(122,75,196,0.45);
outline-offset:-6px;
">
Langkah 1: Membuat Himpunan Semesta
</div>

<style>
/* ================= FINAL CLEAN TUTORIAL ================= */

.demo-wrapper{
    text-align:center;
    margin:120px 0 80px 0; /* tambah jarak bawah */
}
/* Tombol dasar */
.demo-wrapper .btn{
    padding:9px 20px;
    border-radius:10px;
    font-weight:500;
    border:none;
    margin:6px;
}

/* Warna tombol */
.btn-blue{ background:#2F80ED; color:white; }
.btn-red{ background:#EB5757; color:white; }
.btn-green{ background:#27AE60; color:white; }
.btn-gray{ background:#6C757D; color:white; }

/* Target wrapper */
.target-wrapper{
    display:inline-block;
    position:relative;
}

/* Glow animasi halus */
.target-btn{
    animation:glowPulse 2s infinite;
}

@keyframes glowPulse{
    0%{ box-shadow:0 0 0 0 rgba(47,128,237,0.6); }
    70%{ box-shadow:0 0 0 10px rgba(47,128,237,0); }
    100%{ box-shadow:0 0 0 0 rgba(47,128,237,0); }
}

/* Tooltip ungu elegan */
.premium-tooltip{
    position:absolute;
    bottom:calc(100% - 15px); /* turunkan tooltip */
    left:50%;
    transform:translateX(-50%);
    margin-bottom:25px; /* beri jarak tambahan */
    background:linear-gradient(90deg,#c084fc,#a855f7);
    padding:10px 16px;
    border-radius:12px;
    font-size:14px;
    font-weight:600;
    color:white;
    box-shadow:0 8px 20px rgba(124,58,237,0.3);
    white-space:nowrap;
    z-index:5;
}

/* Panah */
.premium-tooltip::after{
    content:"";
    position:absolute;
    top:100%;
    left:50%;
    transform:translateX(-50%);
    border-width:8px;
    border-style:solid;
    border-color:#a855f7 transparent transparent transparent;
}

/* Input */
.demo-input,
.demo-select{
    max-width:220px;
    display:inline-block;
    border-radius:8px;
    margin:6px;
}
</style>

<div class="demo-wrapper">

    <div class="target-wrapper">
        <button class="btn btn-blue target-btn">
            Buat Semesta
        </button>

        <div class="premium-tooltip">
            Klik tombol ini untuk membuat Himpunan Semesta
        </div>
    </div>

    <button class="btn btn-blue">Buat Himpunan</button>
    <button class="btn btn-red">Hapus Himpunan</button>
    <button class="btn btn-green">Periksa</button>
    <button class="btn btn-gray">Reset Semua</button>

    <br><br>

    <input type="text"
           class="form-control demo-input"
           placeholder="Nama anggota...">

    <select class="form-select demo-select">
        <option>Pilih Himpunan</option>
    </select>

    <button class="btn btn-blue">Tambah Anggota</button>

</div>

<p style="text-align:center; font-weight:500;">
Setelah diklik, maka akan muncul sebuah kotak besar di layar seperti gambar di bawah ini.
</p>
<!-- DEMO HASIL HIMPUNAN SEMESTA (TANPA GAMBAR) -->
<style>
.semesta-wrapper{
    text-align:center;
    margin:25px 0;
}

.semesta-box{
    width:100%;
    max-width:600px;
    height:350px;
    margin:0 auto;
    border:6px solid #7b2cbf;
    border-radius:40px;
    position:relative;
    background:#f8f5ff;
}

.semesta-title{
    font-size:22px;
    font-weight:600;
    color:#4b0082;
    margin-bottom:15px;
}
</style>

<div class="semesta-wrapper">

    <div class="semesta-title">
        HIMPUNAN SEMESTA
    </div>

    <div class="semesta-box"></div>

</div>
<p>
Kotak ini disebut <strong>Himpunan Semesta (S)</strong>.
Himpunan semesta adalah tempat semua lingkaran himpunan (A, B, C, …) dan semua anggotanya akan dibuat.
Semua kegiatan selanjutnya harus dilakukan di dalam kotak ini.

</p>

<!-- ======================== LANGKAH 2 ======================== -->
<div style="
display:inline-block;
background-color:#EDE9FB;
color:#4B2D91;
font-weight:600;
font-size:0.95rem;
padding:10px 20px;
border-radius:10px;
margin-top:24px;
margin-bottom:12px;
outline:1.5px dashed rgba(122,75,196,0.45);
outline-offset:-6px;
">
Langkah 2: Membuat Himpunan (Lingkaran)
</div>

<ul>
<style>
/* ================= DEMO KLIK BUAT HIMPUNAN ================= */

.demo-wrapper{
    margin:110px 0 80px 0;
}

.demo-wrapper .btn{
    padding:9px 20px;
    border-radius:10px;
    font-weight:500;
    border:none;
    margin:6px;
}

/* Warna tombol */
.btn-blue{ background:#2F80ED; color:white; }
.btn-red{ background:#EB5757; color:white; }
.btn-green{ background:#27AE60; color:white; }
.btn-gray{ background:#6C757D; color:white; }

/* Target wrapper */
.target-wrapper{
    display:inline-block;
    position:relative;
}

/* Glow animasi */
.target-btn{
    animation:glowPulse 2s infinite;
}

@keyframes glowPulse{
    0%{ box-shadow:0 0 0 0 rgba(47,128,237,0.6); }
    70%{ box-shadow:0 0 0 10px rgba(47,128,237,0); }
    100%{ box-shadow:0 0 0 0 rgba(47,128,237,0); }
}

/* Tooltip ungu */
.premium-tooltip{
    position:absolute;
    bottom:calc(100% - 15px); /* turunkan tooltip */
    left:50%;
    transform:translateX(-50%);
    margin-bottom:25px; /* beri jarak tambahan */
    background:linear-gradient(90deg,#c084fc,#a855f7);
    padding:10px 16px;
    border-radius:12px;
    font-size:14px;
    font-weight:600;
    color:white;
    box-shadow:0 8px 20px rgba(124,58,237,0.3);
    white-space:nowrap;
    z-index:5;
}

.premium-tooltip::after{
    content:"";
    position:absolute;
    top:100%;
    left:50%;
    transform:translateX(-50%);
    border-width:8px;
    border-style:solid;
    border-color:#a855f7 transparent transparent transparent;
}

/* Input */
.demo-input,
.demo-select{
    max-width:220px;
    display:inline-block;
    border-radius:8px;
    margin:6px;
}
</style>

<div class="demo-wrapper">

    <button class="btn btn-blue">Buat Semesta</button>

    <!-- TARGET: BUAT HIMPUNAN -->
    <div class="target-wrapper">
        <button class="btn btn-blue target-btn">
            Buat Himpunan
        </button>

        <div class="premium-tooltip">
            Klik tombol ini untuk membuat Himpunan (A, B, dst.)
        </div>
    </div>

    <button class="btn btn-red">Hapus Himpunan</button>
    <button class="btn btn-green">Periksa</button>
    <button class="btn btn-gray">Reset Semua</button>

    <br><br>

    <input type="text"
           class="form-control demo-input"
           placeholder="Nama anggota...">

    <select class="form-select demo-select">
        <option>Pilih Himpunan</option>
    </select>

    <button class="btn btn-blue">Tambah Anggota</button>

</div>

<p style="text-align:center;">
Setelah di klik tombol buat himpunan maka akan muncul otomatis himpunan <strong>A</strong>.
</p>

<br>
<!-- DEMO HASIL LINGKARAN A TANPA GAMBAR -->
<style>
.lingkaran-demo-wrapper{
    text-align:center;
    margin:25px 0;
}

.semesta-container{
    width:100%;
    max-width:700px;
    height:360px;
    margin:0 auto;
    border:6px solid #7b2cbf;
    border-radius:40px;
    background:#f4f1fa;
    position:relative;
    padding:40px; /* ruang aman dari border */
    box-sizing:border-box;
}

.semesta-title{
    position:absolute;
    top:-35px;
    left:50%;
    transform:translateX(-50%);
    font-size:22px;
    font-weight:700;
    color:#4b0082;
}

/* Wrapper lingkaran */
.circle-wrapper{
    height:100%;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
}

/* Huruf A */
.label-a{
    font-size:22px;
    font-weight:600;
    color:#4b0082;
    margin-bottom:10px;
}

/* Lingkaran */
.lingkaran-a{
    width:160px;
    height:260px;
    border:5px solid #ff006e;
    border-radius:50%;
}

@media (max-width: 768px) {
    .semesta-container {
        height: auto;
        padding: 60px 20px 30px 20px;
    }
    .lingkaran-a {
        height: 180px;
    }
}
</style>

<div class="lingkaran-demo-wrapper">

    <div class="semesta-container">

        <div class="semesta-title">
            HIMPUNAN SEMESTA
        </div>

        <div class="circle-wrapper">
            <div class="label-a">A</div>
            <div class="lingkaran-a"></div>
        </div>

    </div>

</div>

<ul>

    <li>
        Jika kamu mengklik tombol tersebut lagi:
        <ul>
            <li>Klik ke-2 → muncul Himpunan <strong>B</strong></li>
        </ul>
    </li>


</ul>
<!-- DEMO DUA LINGKARAN TANPA GAMBAR -->
<style>
.semesta-wrapper-2{
    text-align:center;
    margin:30px 0;
}

.semesta-container-2{
    width:100%;
    max-width:750px;
    height:380px;
    margin:0 auto;
    border:6px solid #7b2cbf;
    border-radius:45px;
    background:#f4f1fa;
    position:relative;
    padding:50px 60px;
    box-sizing:border-box;
}

.semesta-title-2{
    position:absolute;
    top:-35px;
    left:50%;
    transform:translateX(-50%);
    font-size:24px;
    font-weight:700;
    color:#4b0082;
}

/* Container dua lingkaran */
.circles-row{
    height:100%;
    display:flex;
    justify-content:space-around;
    align-items:center;
}

/* Wrapper tiap lingkaran */
.circle-item{
    display:flex;
    flex-direction:column;
    align-items:center;
}

/* Label */
.circle-label{
    font-size:24px;
    font-weight:600;
    color:#4b0082;
    margin-bottom:10px;
}

/* Lingkaran A */
.lingkaran-a{
    width:160px;
    height:260px;
    border:5px solid #ff006e;
    border-radius:50%;
}

/* Lingkaran B */
.lingkaran-b{
    width:160px;
    height:260px;
    border:5px solid #3a86ff;
    border-radius:50%;
}
@media (max-width: 768px) {
    .semesta-container-2 {
        height: auto;
        padding: 60px 20px 30px 20px;
    }
    .circles-row {
        flex-direction: column;
        gap: 50px;
    }
    .lingkaran-a, .lingkaran-b {
        height: 180px;
    }
}
</style>

<div class="semesta-wrapper-2">

    <div class="semesta-container-2">

        <div class="semesta-title-2">
            HIMPUNAN SEMESTA
        </div>

        <div class="circles-row">

            <div class="circle-item">
                <div class="circle-label">A</div>
                <div class="lingkaran-a"></div>
            </div>

            <div class="circle-item">
                <div class="circle-label">B</div>
                <div class="lingkaran-b"></div>
            </div>

        </div>

    </div>

</div>
<ul>

    <li>
        Lingkaran-lingkaran ini adalah <strong>himpunan</strong>,
        yaitu tempat kamu memasukkan nama anggota. lingkaran tersebut bisa disebut Diagram Venn.
    </li>
</ul>


<!-- ======================== LANGKAH 3 ======================== -->
<div style="
display:inline-block;
background-color:#EDE9FB;
color:#4B2D91;
font-weight:600;
font-size:0.95rem;
padding:10px 20px;
border-radius:10px;
margin-top:24px;
margin-bottom:12px;
outline:1.5px dashed rgba(122,75,196,0.45);
outline-offset:-6px;
">
Langkah 3: Menambahkan Anggota
</div>

<ul>
    <li>
        Ketikkan nama anggota pada kolom <strong>“Nama anggota…”</strong>.
        <br>
        Pada contoh ini dituliskan nama anggota:
        <strong>Ipul, Hendra, Ardi, dan Ica</strong>.
    </li>

    <li>
        Pilih himpunan tujuan pada menu <strong>“Pilih Himpunan”</strong>.
        <br>
        Pada contoh ini dipilih <strong>Himpunan A</strong>.
    </li>

    <li>
        Klik tombol <strong>“Tambah Anggota”</strong>.
    </li>
</ul>

<style>
.demo-form-wrapper{
    text-align:center;
    margin:50px 0;
}

/* ROW FIXED - TIDAK BOLEH WRAP */
.form-row{
    display:flex;
    justify-content:center;
    align-items:center;
    gap:20px;
}

/* Wrapper */
.highlight-target{
    position:relative;
    display:inline-block;
}

/* Glow */
.glow-blue{
    animation:glowBlue 2s infinite;
}

@keyframes glowBlue{
    0%{ box-shadow:0 0 0 0 rgba(47,128,237,0.6); }
    70%{ box-shadow:0 0 0 8px rgba(47,128,237,0); }
    100%{ box-shadow:0 0 0 0 rgba(47,128,237,0); }
}

/* Tooltip */
.tooltip-guide{
    position:absolute;
    bottom:120%;
    left:50%;
    transform:translateX(-50%);
    background:linear-gradient(90deg,#c084fc,#a855f7);
    color:white;
    padding:6px 12px;
    border-radius:8px;
    font-size:12px;
    font-weight:600;
    white-space:nowrap;
    box-shadow:0 6px 15px rgba(124,58,237,0.3);
    z-index:5;
}

.tooltip-guide::after{
    content:"";
    position:absolute;
    top:100%;
    left:50%;
    transform:translateX(-50%);
    border-width:6px;
    border-style:solid;
    border-color:#a855f7 transparent transparent transparent;
}

/* SIZE */
.demo-input{ width:260px; }
.demo-select{ width:220px; }

/* FORCE WARNA BIRU ASLI */
.btn-primary{
    background-color:#2F80ED !important;
    border-color:#2F80ED !important;
}

.btn-primary:hover{
    background-color:#1F6FE0 !important;
    border-color:#1F6FE0 !important;
}
</style>

<div class="demo-form-wrapper">

    <div class="form-row">

        <!-- INPUT -->
        <div class="highlight-target">
            <div class="tooltip-guide">Ketik nama anggota</div>
            <input type="text"
                   class="form-control demo-input glow-blue"
                   placeholder="Nama anggota...">
        </div>

        <!-- SELECT -->
        <div class="highlight-target">
            <div class="tooltip-guide">Pilih himpunan</div>
            <select class="form-select demo-select">
                <option>Pilih Himpunan</option>
                <option>Himpunan A</option>
            </select>
        </div>

        <!-- BUTTON TAMBAH -->
        <div class="highlight-target">
            <div class="tooltip-guide">Klik Tambah Anggota</div>
            <button class="btn btn-primary glow-blue">
                Tambah Anggota
            </button>
        </div>

    </div>

</div>

<p>
    Setelah tombol <strong>“Tambah Anggota”</strong> diklik,
    nama-nama anggota akan otomatis masuk dan tersusun rapi
    di dalam lingkaran himpunan yang dipilih.
</p>
<!-- DEMO HASIL ANGGOTA DI DALAM LINGKARAN -->
<style>
.semesta-wrapper-final{
    text-align:center;
    margin:30px 0;
}

.semesta-container-final{
    width:100%;
    max-width:750px;
    height:420px;
    margin:0 auto;
    border:6px solid #7b2cbf;
    border-radius:45px;
    background:#f4f1fa;
    position:relative;
    padding:60px 60px;
    box-sizing:border-box;
}

/* Judul atas */
.semesta-title-final{
    position:absolute;
    top:-40px;
    left:50%;
    transform:translateX(-50%);
    font-size:26px;
    font-weight:700;
    color:#4b0082;
}

/* Wrapper lingkaran */
.circle-area{
    height:100%;
    display:flex;
    align-items:center;
}

/* Lingkaran */
.lingkaran-a-final{
    width:180px;
    height:300px;
    border:6px solid #ff006e;
    border-radius:50%;
    position:relative;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
}

/* Label A */
.label-a-final{
    position:absolute;
    top:-40px;
    font-size:24px;
    font-weight:600;
    color:#4b0082;
}

/* Anggota */
.member-item{
    display:flex;
    align-items:center;
    font-size:16px;
    margin:6px 0;
}

/* Titik hitam */
.member-dot{
    width:8px;
    height:8px;
    background:black;
    border-radius:50%;
    margin-left:8px;
}
@media (max-width: 768px) {
    .semesta-container-final {
        height: auto;
        padding: 70px 20px 40px 20px;
    }
    .circle-area {
        justify-content: center;
    }
    .lingkaran-a-final {
        height: 200px;
    }
}
</style>

<div class="semesta-wrapper-final">

    <div class="semesta-container-final">

        <div class="semesta-title-final">
            HIMPUNAN SEMESTA
        </div>

        <div class="circle-area">

            <div class="lingkaran-a-final">

                <div class="label-a-final">A</div>

                <div class="member-item">
                    Ipul <div class="member-dot"></div>
                </div>

                <div class="member-item">
                    Hendra <div class="member-dot"></div>
                </div>

                <div class="member-item">
                    Ardi <div class="member-dot"></div>
                </div>

                <div class="member-item">
                    Ica <div class="member-dot"></div>
                </div>

            </div>

        </div>

    </div>

</div>
<!-- ======================== LANGKAH 4 ======================== -->
<div style="
display:inline-block;
background-color:#EDE9FB;
color:#4B2D91;
font-weight:600;
font-size:0.95rem;
padding:10px 20px;
border-radius:10px;
margin-top:24px;
margin-bottom:12px;
outline:1.5px dashed rgba(122,75,196,0.45);
outline-offset:-6px;
">
Langkah 4: Melihat Isi Semua Himpunan
</div>

<ul>
<li>Klik Tombol <strong>Periksa</strong>.</li>
</ul>

<style>
.demo-wrapper{
    text-align:center;
    margin:60px 0 30px 0;
}

/* BARIS TOMBOL ATAS */
.toolbar-row{
    display:flex;
    justify-content:center;
    align-items:center;
    gap:20px;
    flex-wrap:nowrap; /* supaya tidak turun */
}

/* BARIS INPUT */
.input-row{
    display:flex;
    justify-content:center;
    align-items:center;
    gap:20px;
    margin-top:25px;
}

/* Warna tombol sesuai aplikasi */
.btn-blue{ background:#2F80ED; color:white; border:none; }
.btn-blue:hover{ background:#1F6FE0; }

.btn-red{ background:#EB5757; color:white; border:none; }
.btn-red:hover{ background:#D64545; }

.btn-green{ background:#27AE60; color:white; border:none; }
.btn-green:hover{ background:#219653; }

.btn-gray{ background:#6C757D; color:white; border:none; }
.btn-gray:hover{ background:#5A6268; }

.btn{
    padding:8px 18px;
    border-radius:8px;
    font-weight:500;
}

/* Input style */
.demo-input{
    width:260px;
    border-radius:8px;
    padding:8px 12px;
    border:1px solid #ced4da;
}

.demo-select{
    width:200px;
    border-radius:8px;
    padding:8px 12px;
    border:1px solid #ced4da;
}

/* Highlight wrapper */
.highlight-wrapper{
    position:relative;
    display:inline-block;
}

/* Tooltip ungu */
.tooltip-purple{
    position:absolute;
    bottom:130%;
    left:50%;
    transform:translateX(-50%);
    background:linear-gradient(90deg,#c084fc,#a855f7);
    color:white;
    padding:10px 18px;
    border-radius:14px;
    font-size:14px;
    font-weight:600;
    white-space:nowrap;
    box-shadow:0 10px 25px rgba(124,58,237,0.3);
}

.tooltip-purple::after{
    content:"";
    position:absolute;
    top:100%;
    left:50%;
    transform:translateX(-50%);
    border-width:8px;
    border-style:solid;
    border-color:#a855f7 transparent transparent transparent;
}

/* Glow hijau premium */
.glow-green{
    animation:glowGreen 2.5s infinite;
}

@keyframes glowGreen{
    0%{ box-shadow:0 0 0 0 rgba(39,174,96,0.6); }
    70%{ box-shadow:0 0 0 12px rgba(39,174,96,0); }
    100%{ box-shadow:0 0 0 0 rgba(39,174,96,0); }
}
</style>

<div class="demo-wrapper">

    <!-- BARIS TOMBOL -->
    <div class="toolbar-row">

        <button class="btn btn-blue">Buat Semesta</button>
        <button class="btn btn-blue">Buat Himpunan</button>
        <button class="btn btn-red">Hapus Himpunan</button>

        <!-- PERIKSA DI-HIGHLIGHT -->
        <div class="highlight-wrapper">
            <div class="tooltip-purple">
                Klik tombol ini untuk melihat isi semua Himpunan
            </div>
            <button class="btn btn-green glow-green">
                Periksa
            </button>
        </div>

        <button class="btn btn-gray">Reset Semua</button>

    </div>

    <!-- BARIS INPUT -->
    <div class="input-row">

        <input type="text"
               class="demo-input"
               placeholder="Nama anggota...">

        <select class="demo-select">
            <option>Pilih Himpunan</option>
        </select>

        <button class="btn btn-blue">
            Tambah Anggota
        </button>

    </div>

</div>
<p style="margin-left:24px; margin-top:8px;">
    Setelah tombol <strong>“Periksa”</strong> diklik, aplikasi akan menampilkan
    sebuah kotak yang berisi rincian anggota himpunan sebagai berikut:
</p>

<ul>
    <li>Anggota Himpunan A</li>
    <li>Anggota Himpunan B</li>
    <li>
        Himpunan Semesta, yaitu gabungan semua anggota dari seluruh himpunan
    </li>
</ul>

<!-- HASIL PEMERIKSAAN TANPA GAMBAR -->
<style>
.hasil-wrapper{
    display:flex;
    justify-content:center;
    margin:20px 0;
}

.hasil-box{
    width:100%;
    max-width:700px;
    min-height:400px;
    background:#ffffff; /* DIUBAH JADI PUTIH */
    border:4px solid #7A4BC4;
    border-radius:40px;
    padding:35px 40px;
    text-align:left;
}

.hasil-title{
    font-weight:700;
    font-size:22px;
    margin-bottom:30px;
}

.hasil-item{
    font-size:20px;
    margin-bottom:30px;
}
</style>

<div class="hasil-wrapper">
    <div class="hasil-box">

        <div class="hasil-title">
            HASIL PEMERIKSAAN:
        </div>

        <div class="hasil-item">
            <strong>Himpunan Semesta:</strong>
            { Ipul, Hendra, Ardi, Ica }
        </div>

        <div class="hasil-item">
            <strong>Himpunan A:</strong>
            { Ipul, Hendra, Ardi, Ica }
        </div>

    </div>
</div>
<!-- ======================== LANGKAH 5 ======================== -->
<div style="
display:inline-block;
background-color:#EDE9FB;
color:#4B2D91;
font-weight:600;
font-size:0.95rem;
padding:10px 20px;
border-radius:10px;
margin-top:24px;
margin-bottom:12px;
outline:1.5px dashed rgba(122,75,196,0.45);
outline-offset:-6px;
">
Langkah 5: Menghapus Lingkaran
</div>

<!-- ISI LANGKAH 5 -->

<ul>
    <li>
        Klik tombol <strong>“Hapus Lingkaran”</strong>.
    </li>
</ul>

<style>
.demo-wrapper{
    text-align:center;
    margin:100px 0 60px 0;
}

/* TOOLBAR */
.toolbar-row{
    display:flex;
    justify-content:center;
    align-items:center;
    gap:20px;
    flex-wrap:nowrap;
}

/* INPUT ROW */
.input-row{
    display:flex;
    justify-content:center;
    align-items:center;
    gap:20px;
    margin-top:25px;
}

/* BUTTON */
.btn{
    padding:8px 18px;
    border-radius:8px;
    font-weight:500;
    border:none;
}

.btn-blue{ background:#2F80ED; color:white; }
.btn-red{ background:#EB5757; color:white; }
.btn-green{ background:#27AE60; color:white; }
.btn-gray{ background:#6C757D; color:white; }

/* HOVER */
.btn-blue:hover{ background:#1F6FE0; }
.btn-red:hover{ background:#D64545; }
.btn-green:hover{ background:#219653; }
.btn-gray:hover{ background:#5A6268; }

/* TOOLTIP */
.highlight-wrapper{
    position:relative;
    display:inline-block;
}

.tooltip-purple{
    position:absolute;
    bottom:130%;
    left:50%;
    transform:translateX(-50%);
    background:linear-gradient(90deg,#c084fc,#a855f7);
    color:white;
    padding:10px 18px;
    border-radius:14px;
    font-size:14px;
    font-weight:600;
    white-space:nowrap;
    box-shadow:0 10px 25px rgba(124,58,237,0.3);
}

.tooltip-purple::after{
    content:"";
    position:absolute;
    top:100%;
    left:50%;
    transform:translateX(-50%);
    border-width:8px;
    border-style:solid;
    border-color:#a855f7 transparent transparent transparent;
}

/* GLOW */
.glow-red{
    animation:glowRed 2.5s infinite;
}
@keyframes glowRed{
    0%{ box-shadow:0 0 0 0 rgba(235,87,87,0.6); }
    70%{ box-shadow:0 0 0 12px rgba(235,87,87,0); }
    100%{ box-shadow:0 0 0 0 rgba(235,87,87,0); }
}

/* INPUT */
.demo-input{
    width:260px;
    border-radius:8px;
    padding:8px 12px;
    border:1px solid #ced4da;
}

.demo-select{
    width:200px;
    border-radius:8px;
    padding:8px 12px;
    border:1px solid #ced4da;
}

/* NOTIF */
.notif{
    margin-top:8px;
    font-size:13px;
    font-weight:500;
    display:none;
}

.notif-error{
    color:#EB5757;
}

.notif-success{
    color:#27AE60;
}
</style>

<div class="demo-wrapper">

    <!-- TOOLBAR -->
    <div class="toolbar-row">

        <button class="btn btn-blue">Buat Semesta</button>
        <button class="btn btn-blue">Buat Himpunan</button>

        <!-- HAPUS -->
        <div class="highlight-wrapper">
            <div class="tooltip-purple">
                Klik Hapus Himpunan untuk menghapus lingkaran yang terakhir dibuat.
            </div>

            <button id="hapusBtn" class="btn btn-red glow-red">
                Hapus Himpunan
            </button>

            <!-- NOTIF HAPUS -->
            <div id="notifHapus" class="notif notif-success"></div>
        </div>

        <button class="btn btn-green">Periksa</button>
        <button class="btn btn-gray">Reset Semua</button>

    </div>

    <!-- INPUT ROW -->
    <div class="input-row">

        <input type="text"
               class="demo-input"
               placeholder="Nama anggota...">

        <div>
            <select id="setSelect" class="demo-select">
                <option value="">Pilih Himpunan</option>
                <option value="A">Himpunan A</option>
                <option value="B">Himpunan B</option>
            </select>

        </div>

        <button class="btn btn-blue">
            Tambah Anggota
        </button>

    </div>

</div>

<script>
const hapusBtn = document.getElementById("hapusBtn");
const select = document.getElementById("setSelect");
const notifSelect = document.getElementById("notifSelect");
const notifHapus = document.getElementById("notifHapus");

hapusBtn.addEventListener("click", function(){

    if(select.value === ""){
        notifSelect.style.display = "block";
        notifHapus.style.display = "none";
    }else{
        notifSelect.style.display = "none";
        notifHapus.style.display = "block";
        notifHapus.innerText = "Himpunan " + select.value + " siap dihapus.";
    }

});
</script>
<p style="margin-left:24px; margin-top:8px;">
    Pada contoh ini, Himpunan B akan terhapus lebih dulu karena merupakan lingkaran yang terakhir dibuat.
</p>

<style>
.semesta-wrapper-click{
    text-align:center;
    margin:40px 0;
}

.semesta-container-click{
    width:100%;
    max-width:750px;
    height:420px;
    margin:0 auto;
    border:6px solid #7b2cbf;
    border-radius:45px;
    background:#f4f1fa;
    position:relative;
    padding:60px;
    box-sizing:border-box;
}

/* Judul */
.semesta-title-click{
    position:absolute;
    top:-40px;
    left:50%;
    transform:translateX(-50%);
    font-size:26px;
    font-weight:700;
    color:#4b0082;
}

/* Baris lingkaran */
.circle-row-click{
    height:100%;
    display:flex;
    justify-content:space-around;
    align-items:center;
}

/* Wrapper lingkaran */
.circle-item-click{
    display:flex;
    flex-direction:column;
    align-items:center;
    position:relative;
}

/* Label */
.circle-label-click{
    font-size:22px;
    font-weight:600;
    color:#4b0082;
    margin-bottom:10px;
}

/* Lingkaran A */
.lingkaran-a-click{
    width:180px;
    height:300px;
    border:6px solid #ff006e;
    border-radius:50%;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
}

/* Lingkaran B (yang akan diklik / dihapus) */
.lingkaran-b-click{
    width:180px;
    height:300px;
    border:6px solid #3a86ff;
    border-radius:50%;
    cursor:pointer;
    position:relative;
}

/* Efek klik */
.lingkaran-b-click:hover{
    box-shadow:0 0 0 10px rgba(58,134,255,0.2);
}

/* Anggota */
.member{
    display:flex;
    align-items:center;
    font-size:16px;
    margin:6px 0;
}

.dot{
    width:8px;
    height:8px;
    background:black;
    border-radius:50%;
    margin-left:8px;
}

@media (max-width: 768px) {
    .semesta-container-click {
        height: auto;
        padding: 70px 20px 40px 20px;
    }
    .circle-row-click {
        flex-direction: column;
        gap: 50px;
    }
    .lingkaran-a-click, .lingkaran-b-click {
        height: 200px;
    }
}

/* Teks petunjuk */
.click-note{
    margin-top:20px;
    font-size:15px;
}
</style>

<div class="semesta-wrapper-click">

    <div class="semesta-container-click">

        <div class="semesta-title-click">
            HIMPUNAN SEMESTA
        </div>

        <div class="circle-row-click">

            <!-- HIMPUNAN A -->
            <div class="circle-item-click">
                <div class="circle-label-click">A</div>
                <div class="lingkaran-a-click">
                    <div class="member">Ipul <div class="dot"></div></div>
                    <div class="member">Hendra <div class="dot"></div></div>
                    <div class="member">Ardi <div class="dot"></div></div>
                    <div class="member">Ica <div class="dot"></div></div>
                </div>
            </div>

            <!-- HIMPUNAN B (DIKLIK) -->
            <div class="circle-item-click">
                <div class="circle-label-click">B</div>
                <div class="lingkaran-b-click"></div>
            </div>

        </div>

    </div>

   

</div>
<p style="margin-left:24px; margin-top:8px;">
    Setelah diklik tombol hapus himpunan, maka himpunan terakhir dibuat akan
    <strong>hilang</strong>. Jika himpunan memiliki anggota,
    maka seluruh anggotanya juga akan ikut terhapus.
</p>

<style>
.semesta-wrapper-click{
    text-align:center;
    margin:40px 0;
}

.semesta-container-click{
    width:100%;
    max-width:750px;
    height:420px;
    margin:0 auto;
    border:6px solid #7b2cbf;
    border-radius:45px;
    background:#f4f1fa;
    position:relative;
    padding:60px;
    box-sizing:border-box;
}

/* Judul */
.semesta-title-click{
    position:absolute;
    top:-40px;
    left:50%;
    transform:translateX(-50%);
    font-size:26px;
    font-weight:700;
    color:#4b0082;
}

/* Baris lingkaran */
.circle-row-click{
    height:100%;
    display:flex;
    justify-content:center; /* sekarang tengah karena cuma 1 */
    align-items:center;
}

/* Wrapper lingkaran */
.circle-item-click{
    display:flex;
    flex-direction:column;
    align-items:center;
}

/* Label */
.circle-label-click{
    font-size:22px;
    font-weight:600;
    color:#4b0082;
    margin-bottom:10px;
}

/* Lingkaran A */
.lingkaran-a-click{
    width:180px;
    height:300px;
    border:6px solid #ff006e;
    border-radius:50%;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
}

/* Anggota */
.member{
    display:flex;
    align-items:center;
    font-size:16px;
    margin:6px 0;
}

.dot{
    width:8px;
    height:8px;
    background:black;
    border-radius:50%;
    margin-left:8px;
}

@media (max-width: 768px) {
    .semesta-container-click {
        height: auto;
        padding: 70px 20px 40px 20px;
    }
    .circle-row-click {
        flex-direction: column;
        gap: 50px;
    }
    .lingkaran-a-click {
        height: 200px;
    }
}
</style>

<div class="semesta-wrapper-click">

    <div class="semesta-container-click">

        <div class="semesta-title-click">
            HIMPUNAN SEMESTA
        </div>

        <div class="circle-row-click">

            <!-- HIMPUNAN A SAJA -->
            <div class="circle-item-click">
                <div class="circle-label-click">A</div>
                <div class="lingkaran-a-click">
                    <div class="member">Ipul <div class="dot"></div></div>
                    <div class="member">Hendra <div class="dot"></div></div>
                    <div class="member">Ardi <div class="dot"></div></div>
                    <div class="member">Ica <div class="dot"></div></div>
                </div>
            </div>

        </div>

    </div>

</div>
<!-- CATATAN MODE HAPUS -->
<div style="
    margin-left:24px;
    margin-top:16px;
    padding:12px 16px;
    background-color:#F6F4FD;
    border-left:4px solid #7A4BC4;
    border-radius:8px;
">
</div>
<!-- ======================== LANGKAH 6 ======================== -->
<div style="
display:inline-block;
background-color:#EDE9FB;
color:#4B2D91;
font-weight:600;
font-size:0.95rem;
padding:10px 20px;
border-radius:10px;
margin-top:24px;
margin-bottom:12px;
outline:1.5px dashed rgba(122,75,196,0.45);
outline-offset:-6px;
">
Langkah 6: Reset Semua
</div>

<ul>
    <li>
        Klik tombol <strong>“Reset Semua”</strong>.
    </li>
</ul>

<style>
.demo-wrapper-reset{
    text-align:center;
    margin:80px 0 40px 0;
}

/* TOOLBAR */
.toolbar-row-reset{
    display:flex;
    justify-content:center;
    align-items:center;
    gap:20px;
    flex-wrap:nowrap;
}

/* INPUT ROW */
.input-row-reset{
    display:flex;
    justify-content:center;
    align-items:center;
    gap:20px;
    margin-top:25px;
}

/* BUTTON STYLE */
.btn{
    padding:8px 18px;
    border-radius:8px;
    font-weight:500;
    border:none;
}

.btn-blue{ background:#2F80ED; color:white; }
.btn-red{ background:#EB5757; color:white; }
.btn-green{ background:#27AE60; color:white; }
.btn-gray{ background:#6C757D; color:white; }

/* TOOLTIP UNGU */
.highlight-wrapper-reset{
    position:relative;
    display:inline-block;
}

.tooltip-purple-reset{
    position:absolute;
    bottom:130%;
    left:50%;
    transform:translateX(-50%);
    background:linear-gradient(90deg,#c084fc,#a855f7);
    color:white;
    padding:10px 18px;
    border-radius:14px;
    font-size:14px;
    font-weight:600;
    white-space:nowrap;
    box-shadow:0 10px 25px rgba(124,58,237,0.3);
}

.tooltip-purple-reset::after{
    content:"";
    position:absolute;
    top:100%;
    left:50%;
    transform:translateX(-50%);
    border-width:8px;
    border-style:solid;
    border-color:#a855f7 transparent transparent transparent;
}

/* GLOW ABU-ABU */
.glow-gray{
    animation:glowGray 2.5s infinite;
}

@keyframes glowGray{
    0%{ box-shadow:0 0 0 0 rgba(108,117,125,0.6); }
    70%{ box-shadow:0 0 0 12px rgba(108,117,125,0); }
    100%{ box-shadow:0 0 0 0 rgba(108,117,125,0); }
}

/* Input */
.demo-input-reset{
    width:260px;
    border-radius:8px;
    padding:8px 12px;
    border:1px solid #ced4da;
}

.demo-select-reset{
    width:200px;
    border-radius:8px;
    padding:8px 12px;
    border:1px solid #ced4da;
}
</style>

<div class="demo-wrapper-reset">

    <!-- TOOLBAR -->
    <div class="toolbar-row-reset">

        <button class="btn btn-blue">Buat Semesta</button>
        <button class="btn btn-blue">Buat Himpunan</button>
        <button class="btn btn-red">Hapus Himpunan</button>
        <button class="btn btn-green">Periksa</button>

        <!-- RESET DI-HIGHLIGHT -->
        <div class="highlight-wrapper-reset">
            <div class="tooltip-purple-reset">
                Klik tombol ini untuk mengembalikan semua ke kondisi awal
            </div>
            <button class="btn btn-gray glow-gray">
                Reset Semua
            </button>
        </div>

    </div>

    <!-- INPUT ROW -->
    <div class="input-row-reset">

        <input type="text"
               class="demo-input-reset"
               placeholder="Nama anggota...">

        <select class="demo-select-reset">
            <option>Pilih Himpunan</option>
        </select>

        <button class="btn btn-blue">
            Tambah Anggota
        </button>

    </div>

</div>
<p style="margin-left:24px; margin-top:8px;">
    Setelah tombol <strong>“Reset Semua”</strong> diklik, seluruh
    lingkaran, anggota, dan hasil pemeriksaan akan
    <strong>dikembalikan ke kondisi awal</strong>, sehingga pengguna
    dapat memulai kembali dari awal 
</p>
</div>
</div>
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center">

            <!-- Tombol Sebelumnya (Hijau) -->
            <a href="/bab_1/bab_1" class="btn btn-success px-4">
                ← Sebelumnya
            </a>

            <!-- Tombol Selanjutnya -->
            <a href="/bab_1/latihan1" class="btn btn-success px-4">
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
