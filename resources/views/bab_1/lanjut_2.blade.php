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

           
.petunjuk-container{
    padding:20px 18px;
}

.petunjuk-box{
    width:100%;
    background:#F3E8FF;
    border:2px dashed #A855F7;
    border-radius:18px;
    padding:24px 22px;
    box-sizing:border-box;
}

/* JUDUL DI DALAM KOTAK */
.petunjuk-title{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:10px;
    font-weight:700;
    font-size:1.2rem;
    color:#7c3aed;
    margin-bottom:14px;
}

/* DESKRIPSI */
.petunjuk-desc{
    text-align:justify;
    font-size:1rem;
    line-height:1.8;
    color:#333;
    margin-bottom:16px;
}

/* LANGKAH */
.petunjuk-langkah{
    background:#fff;
    border-radius:14px;
    padding:16px;
    margin-bottom:14px;
}

.petunjuk-langkah b{
    color:#7c3aed;
}

/* INFO */
.petunjuk-info{
    background:#fff;
    border:2px solid #A855F7;
    border-radius:14px;
    padding:14px;
    font-size:0.98rem;
    line-height:1.7;
}

/* RESPONSIVE */
@media(max-width:768px){
    .petunjuk-title{font-size:1.05rem;}
    .petunjuk-desc{font-size:0.95rem;}
    .petunjuk-langkah{font-size:0.93rem;}
    .petunjuk-info{font-size:0.92rem;}
}
  .diagram-card{
        width:100%;
        border:2px solid #7f3ab7;
        border-radius:24px;
        overflow:hidden;
        background:#ffffff;
        box-shadow:0 10px 24px rgba(139, 92, 246, 0.10);
    }

    .diagram-card-header{
        background:linear-gradient(135deg,#A855F7,#A855F7);
        color:#FFFFFF;
        font-size:1.1rem;
        font-weight:600;
        border-bottom:2px solid #A855F7;
        padding:14px 20px;
        display:flex;
        align-items:center;
        gap:10px;
    }

    .diagram-card-body{
        padding:18px;
        background:#FFFFFF;
    }

    /* ================= PETUNJUK ================= */
    .petunjuk-container{
        margin-bottom:20px;
    }

    .petunjuk-box{
        background:#F7F1FF;
        border:2px solid #E9D5FF;
        border-radius:20px;
        padding:18px 20px;
        box-shadow:0 4px 14px rgba(139, 92, 246, 0.05);
    }

    .petunjuk-title{
        display:flex;
        align-items:center;
        gap:10px;
        color:#6D28D9;
        font-size:1.15rem;
        font-weight:700;
        margin-bottom:14px;
    }

    .petunjuk-desc{
        font-size:1rem;
        line-height:1.85;
        color:#333;
        margin-bottom:18px;
    }

    .petunjuk-grid{
        display:grid;
        grid-template-columns:1.7fr 0.9fr;
        gap:18px;
        align-items:stretch;
    }

    .petunjuk-langkah,
    .petunjuk-info{
        background:#FFFFFF;
        border:1.5px solid #E9D5FF;
        border-radius:16px;
        padding:16px 18px;
        box-shadow:0 4px 12px rgba(139,92,246,0.04);
    }

    .petunjuk-langkah-title{
        color:#7C3AED;
        font-weight:700;
        font-size:1.03rem;
        margin-bottom:10px;
    }

    .petunjuk-steps{
        list-style:none;
        padding:0;
        margin:0;
    }

    .petunjuk-steps li{
        display:flex;
        align-items:flex-start;
        gap:12px;
        margin-bottom:12px;
        color:#333;
        line-height:1.75;
        font-size:0.98rem;
    }

    .petunjuk-steps li:last-child{
        margin-bottom:0;
    }

    .step-badge{
        width:28px;
        height:28px;
        flex:0 0 28px;
        border-radius:50%;
        background:#7C3AED;
        color:#FFFFFF;
        display:flex;
        align-items:center;
        justify-content:center;
        font-weight:700;
        font-size:0.92rem;
        margin-top:1px;
    }

    .petunjuk-info{
        display:flex;
        flex-direction:column;
        justify-content:center;
        gap:12px;
    }

    .petunjuk-info-item{
        display:flex;
        align-items:flex-start;
        gap:10px;
        font-size:0.98rem;
        line-height:1.7;
        color:#333;
    }

    .petunjuk-info-icon{
        font-size:1.25rem;
        line-height:1;
        margin-top:2px;
        color:#8B5CF6;
    }

    /* ================= AREA DIAGRAM ================= */
    .diagram-main-box{
        background:#FFFFFF;
        border:2px solid #E9D5FF;
        border-radius:22px;
        padding:14px 14px 0 14px;
        box-shadow:0 6px 18px rgba(139,92,246,0.05);
    }

    .diagram-title{
        text-align:center;
        font-size:1rem;
        font-weight:700;
        color:#312E81;
        margin:2px 0 8px 0;
        letter-spacing:0.2px;
    }

    #diagram-panah-wrapper{
        width:100%;
        max-width:1100px;
        margin:0 auto;
        background:#FFFFFF;
        padding:8px 10px 0 10px;
        box-sizing:border-box;
        overflow:hidden;
        position:relative;
        border-radius:18px;
    }

    #diagram-panah-p5{
        width:100%;
    }

    #diagram-panah-tombol-row{
        display:flex;
        align-items:center;
        justify-content:center;
        gap:18px;
        flex-wrap:wrap;
        position:absolute;
        z-index:5;
    }

    .diagram-btn{
        border:none;
        border-radius:14px;
        padding:12px 24px;
        font-size:15px;
        font-weight:700;
        color:#FFFFFF;
        cursor:pointer;
        min-width:205px;
        box-shadow:0 8px 18px rgba(0,0,0,0.08);
        transition:all 0.2s ease;
    }

    .diagram-btn:hover{
        transform:translateY(-1px);
    }

    .diagram-btn-check{
        background:#22C55E;
    }

    .diagram-btn-delete{
        background:#EF4444;
    }

    .diagram-footer-note{
        margin-top:14px;
        margin-bottom:12px;
        background:#F7F1FF;
        border:1.5px solid #E9D5FF;
        border-radius:16px;
        padding:16px 18px;
        display:flex;
        align-items:flex-start;
        gap:12px;
    }

    .diagram-footer-icon{
        color:#8B5CF6;
        font-size:1.45rem;
        line-height:1;
        margin-top:1px;
    }

    .diagram-footer-note p{
        margin:0;
        font-size:1rem;
        line-height:1.85;
        color:#4B5563;
        text-align:justify;
    }

    @media (max-width: 992px){
        .petunjuk-grid{
            grid-template-columns:1fr;
        }
    }

    @media (max-width: 768px){
        .diagram-card-header{
            font-size:1rem;
            padding:12px 16px;
        }

        .diagram-card-body{
            padding:12px;
        }

        .petunjuk-box{
            padding:14px;
        }

        .petunjuk-title{
            font-size:1rem;
        }

        .petunjuk-desc{
            font-size:0.95rem;
            line-height:1.8;
        }

        .petunjuk-langkah,
        .petunjuk-info{
            padding:14px;
        }

        .petunjuk-steps li,
        .petunjuk-info-item{
            font-size:0.93rem;
        }

        .diagram-main-box{
            padding:10px 10px 0 10px;
        }

        .diagram-btn{
            min-width:170px;
            padding:10px 18px;
            font-size:14px;
        }

        .diagram-footer-note p{
            font-size:0.94rem;
            line-height:1.8;
        }
    }

    @media (max-width: 480px){
        .diagram-card-body{
            padding:10px;
        }

        .petunjuk-title{
            font-size:0.95rem;
        }

        .petunjuk-desc{
            font-size:0.92rem;
        }

        .petunjuk-steps li,
        .petunjuk-info-item{
            font-size:0.9rem;
        }

        .diagram-btn{
            width:100%;
            min-width:unset;
        }

        .diagram-footer-note{
            flex-direction:column;
            gap:8px;
        }
    }

    </style>
</head>

<body>

@extends('layouts.main')

@section('container')

<div class="content-gap">
<br>
<!-- ======================== PENYAJIAN RELASI ======================== -->
<div class="card mt-4" style="width:100%; border:2px solid #7f3ab7; ">

    <!-- HEADER -->
    <div class="card-header text-center"
         style="background-color:#A855F7; color:white; font-size:1.3rem; font-weight:700;  border-bottom:2px solid #7f3ab7;">
        Penyajian Relasi
    </div>

    <!-- BODY -->
    <div class="card-body" style="padding:30px; background-color:#FFFFFF;">

        <!-- PARAGRAF PEMBUKA -->
        <p style="font-size:1rem; line-height:1.8; text-align:justify;">
            Marilah kita perhatikan cara-cara menyajikan relasi yang biasa digunakan
            dalam Matematika. Berikut ini adalah data tentang menu makanan yang disukai
            oleh empat anak saat berkunjung ke rumah makan <strong>Selera Banua</strong>
            pada ulang tahun Anisa yang ke-13.
        </p>


        <p style="font-size:1rem; line-height:1.8; text-align:justify;">
            Berikut adalah data menu makanan yang disukai oleh empat anak saat
            berkunjung ke rumah makan <strong>Selera Banua</strong>.
        </p>

        <table class="table table-bordered text-center align-middle"
       style="border-radius:12px; overflow:hidden;">
    <thead style="background-color:#A855F7; color:#FFFFFF;">
        <tr>
            <th>Anak</th>
            <th>Menu Makanan yang Disukai</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="background-color:#FFFFFF; font-weight:600;">Anisa</td>
            <td>Soto Banjar, Mie Bancir</td>
        </tr>
        <tr>
            <td style="background-color:#FFFFFF; font-weight:600;">Dito</td>
            <td>Lontong, Soto Banjar</td>
        </tr>
        <tr>
            <td style="background-color:#FFFFFF; font-weight:600;">Zaki</td>
            <td>Nasi Kuning, Soto Banjar</td>
        </tr>
        <tr>
            <td style="background-color:#FFFFFF; font-weight:600;">Oca</td>
            <td>Mie Bancir, Lontong</td>
        </tr>
    </tbody>
</table>

        <!-- PENJELASAN LANJUTAN -->
        <p style="font-size:1rem; line-height:1.8; text-align:justify;">
            Data pada tabel di atas dapat dinyatakan dalam beberapa bentuk
            penyajian relasi, yaitu sebagai berikut.
        </p>

        <ol style="margin-left:20px; font-size:1rem; line-height:1.8;">
            <li style="margin-bottom:12px;">
                <strong>Diagram Panah</strong><br>
                Menunjukkan hubungan antara anak dan menu makanan yang disukainya.
            </li>
            <li>
                <strong>Pemaparan Koordinat</strong><br>
                Relasi ditunjukkan dalam bentuk titik-titik pada bidang koordinat.
            </li>

            <li style="margin-bottom:12px;">
                <strong>Himpunan Pasangan Berurutan</strong><br>
                Misalnya:
                R = {(Anisa, Soto Banjar), (Anisa, Mie Bancir),
                (Dito, Lontong), (Dito, Soto Banjar),
                (Zaki, Nasi Kuning), (Zaki, Soto Banjar),
                (Oca, Mie Bancir), (Oca, Lontong)}
            </li>

            
        </ol>

        <p style="font-size:1rem; line-height:1.8; text-align:justify; margin-top:15px;">
            Dengan berbagai bentuk penyajian tersebut, relasi antara dua himpunan
            dapat dipahami dengan lebih jelas.
        </p>

    </div>
</div>
<!-- ====================== END PENYAJIAN RELASI ====================== -->


<div class="card mt-3 diagram-card">

    <div class="diagram-card-header">
     
        <span>Cara 1: Diagram Panah</span>
    </div>

    <div class="diagram-card-body">

        <div class="petunjuk-container">
            <div class="petunjuk-box">

                <div class="petunjuk-title">
                    <span>📖</span>
                    <span>Petunjuk Kegiatan</span>
                </div>

                <p class="petunjuk-desc">
                    Berdasarkan data pada tabel, sajikan relasi <strong>“menyukai”</strong> 
                    dalam bentuk diagram panah dengan cara menghubungkan anggota 
                    <strong style="color:#7c3aed;">Himpunan A</strong> ke anggota 
                    <strong style="color:#3b82f6;">Himpunan B</strong> yang sesuai.
                </p>

                <div class="petunjuk-grid">
                    <div class="petunjuk-langkah">
                        <div class="petunjuk-langkah-title">Langkah-langkah:</div>
                        <ul class="petunjuk-steps">
                            <li>
                                <span class="step-badge">1</span>
                                <span>Klik <strong>titik hitam</strong> pada Himpunan A (anak).</span>
                            </li>
                            <li>
                                <span class="step-badge">2</span>
                                <span>Kemudian klik <strong>titik hitam</strong> pada Himpunan B (menu makanan).</span>
                            </li>
                            <li>
                                <span class="step-badge">3</span>
                                <span>Panah akan muncul sebagai tanda hubungan.</span>
                            </li>
                            <li>
                                <span class="step-badge">4</span>
                                <span>Ulangi hingga semua relasi terbentuk.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="petunjuk-info">
                        <div class="petunjuk-info-item">
                            <span class="petunjuk-info-icon">💡</span>
                            <span>Klik tombol <strong>“Periksa Jawaban”</strong> untuk melihat hasilnya.</span>
                        </div>
                        <div class="petunjuk-info-item">
                            <span class="petunjuk-info-icon" style="color:#16A34A;">✔</span>
                            <span>Panah <strong style="color:#16A34A;">hijau</strong> berarti benar.</span>
                        </div>
                        <div class="petunjuk-info-item">
                            <span class="petunjuk-info-icon" style="color:#DC2626;">✖</span>
                            <span>Panah <strong style="color:#DC2626;">merah</strong> berarti masih salah.</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="diagram-main-box">
            

            <div id="diagram-panah-wrapper">
                <div id="diagram-panah-p5" style="width:100%;"></div>

                <div id="diagram-panah-tombol-row">
                    <button type="button"
                            onclick="periksaJawabanDiagramPanah()"
                            class="diagram-btn diagram-btn-check">
                        Periksa Jawaban
                    </button>

                    <button type="button"
                            onclick="toggleHapusModeDiagramPanah()"
                            class="diagram-btn diagram-btn-delete">
                        Hapus Panah
                    </button>
                </div>
            </div>

            <div class="diagram-footer-note">
                <div class="diagram-footer-icon">💡</div>
                <p>
                    Melalui diagram panah ini, kita dapat melihat secara visual siapa saja
                    yang terhubung dengan makanan tertentu dan berapa banyak makanan
                    yang disukai setiap anak.
                </p>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/p5@1.9.0/lib/p5.min.js"></script>

<script>
let kiriDiagram = ["Anisa","Dito","Zaki","Oca"];
let kananDiagram = ["Soto Banjar","Nasi Kuning","Mie Bancir","Lontong"];

let jawabanBenarDiagram = [
    {from:0,to:0},
    {from:0,to:2},
    {from:1,to:3},
    {from:1,to:0},
    {from:2,to:1},
    {from:2,to:0},
    {from:3,to:2},
    {from:3,to:3}
];

let kiriPosDiagram = [];
let kananPosDiagram = [];

let relasiDiagram = [];
let selectedIndexDiagram = null;

let hasilPenilaianDiagram = [];
let relasiBelumDiagram = [];

let modeHapusDiagram = false;
let sudahPeriksaDiagram = false;

let centerLeftXDiagram;
let centerRightXDiagram;
let centerYDiagram;
let spacingDiagram;
let circleWDiagram;
let circleHDiagram;

let panelWDiagram;
let panelHDiagram;
let panelXDiagram;
let panelYDiagram;

let cardWDiagram;
let cardHDiagram;
let pointOffsetDiagram;

let stackedLayoutDiagram = false;
let judulCenterXDiagram = 0;
let judulYDiagram = 32;
let tombolTopDiagram = 0;

function hitungLayoutDiagramPanah(p){
    const wrapper = document.getElementById("diagram-panah-wrapper");
    const availableWidth = Math.max(320, wrapper.clientWidth - 24);

    let canvasWidth = Math.min(1100, availableWidth);
    let canvasHeight = 760;

    stackedLayoutDiagram = canvasWidth < 900;

    if (stackedLayoutDiagram) {
        circleWDiagram = Math.min(200, canvasWidth * 0.30);
        cardWDiagram = Math.min(128, circleWDiagram * 0.74);
        cardHDiagram = canvasWidth < 520 ? 40 : 44;
        pointOffsetDiagram = cardWDiagram / 2 + 6;

        spacingDiagram = canvasWidth < 520 ? 54 : 60;

        let tinggiKonten = (kiriDiagram.length - 1) * spacingDiagram + cardHDiagram;
        circleHDiagram = tinggiKonten + 90;

        centerYDiagram = 245;

        let jarakAntarLingkaran = circleWDiagram + (canvasWidth < 520 ? 75 : 100);
        let areaCenter = canvasWidth / 2;

        centerLeftXDiagram = areaCenter - jarakAntarLingkaran / 2;
        centerRightXDiagram = areaCenter + jarakAntarLingkaran / 2;

        tombolTopDiagram = centerYDiagram + circleHDiagram / 2 + 30;

        panelWDiagram = Math.min(canvasWidth - 40, 430);
        panelXDiagram = (canvasWidth - panelWDiagram) / 2;
        panelYDiagram = tombolTopDiagram + 120;
        panelHDiagram = 700;

        canvasHeight = panelYDiagram + panelHDiagram + 35;
        judulCenterXDiagram = canvasWidth / 2;
    } else {
        panelWDiagram = canvasWidth > 980 ? 360 : 300;
        panelXDiagram = canvasWidth - panelWDiagram - 10;
        panelYDiagram = 78;
        panelHDiagram = 400;

        let areaUtamaWidth = canvasWidth - panelWDiagram - 40;

        circleWDiagram = areaUtamaWidth > 720 ? 300 : areaUtamaWidth * 0.40;
        cardWDiagram = circleWDiagram * 0.52;
        cardHDiagram = 48;
        pointOffsetDiagram = cardWDiagram / 2 + 6;

        spacingDiagram = 70;

        let tinggiKonten = (kiriDiagram.length - 1) * spacingDiagram + cardHDiagram;
        circleHDiagram = tinggiKonten + 110;

        centerYDiagram = 285;

        let jarakAntarLingkaran = circleWDiagram + 75;
        let areaTengah = (areaUtamaWidth / 2) + 10;

        centerLeftXDiagram = areaTengah - jarakAntarLingkaran / 2;
        centerRightXDiagram = areaTengah + jarakAntarLingkaran / 2;

        tombolTopDiagram = centerYDiagram + circleHDiagram / 2 + 26;

        canvasHeight = 550;
        judulCenterXDiagram = areaUtamaWidth / 2;
    }

    p.resizeCanvas(canvasWidth, canvasHeight);

    kiriPosDiagram = [];
    kananPosDiagram = [];

    let startYLeft = centerYDiagram - ((kiriDiagram.length - 1) / 2) * spacingDiagram;
    let startYRight = centerYDiagram - ((kananDiagram.length - 1) / 2) * spacingDiagram;

    for(let i = 0; i < kiriDiagram.length; i++){
        kiriPosDiagram.push({x:centerLeftXDiagram, y:startYLeft + i * spacingDiagram});
    }

    for(let i = 0; i < kananDiagram.length; i++){
        kananPosDiagram.push({x:centerRightXDiagram, y:startYRight + i * spacingDiagram});
    }

    setTimeout(() => {
        aturPosisiTombolDiagramPanah();
    }, 0);
}

function aturPosisiTombolDiagramPanah(){
    const tombolRow = document.getElementById("diagram-panah-tombol-row");
    if(!tombolRow) return;

    const tombolWidth = tombolRow.offsetWidth || 420;
    const centerX = (centerLeftXDiagram + centerRightXDiagram) / 2;

    tombolRow.style.left = (centerX - tombolWidth / 2) + "px";
    tombolRow.style.top = tombolTopDiagram + "px";
}

function periksaJawabanDiagramPanah(){
    hasilPenilaianDiagram = [];
    relasiBelumDiagram = [];
    sudahPeriksaDiagram = true;

    for(let r of relasiDiagram){
        let cocok = jawabanBenarDiagram.some(j => j.from === r.from && j.to === r.to);
        hasilPenilaianDiagram.push(cocok);
    }

    for(let j of jawabanBenarDiagram){
        let ada = relasiDiagram.some(r => r.from === j.from && r.to === j.to);
        if(!ada) relasiBelumDiagram.push(j);
    }
}

function resetPenilaianDiagramPanah(){
    hasilPenilaianDiagram = [];
    relasiBelumDiagram = [];
    sudahPeriksaDiagram = false;
}

function toggleHapusModeDiagramPanah(){
    modeHapusDiagram = !modeHapusDiagram;
}

new p5(function(p){

    p.setup = function(){
        let canvas = p.createCanvas(1100, 740);
        canvas.parent("diagram-panah-p5");
        canvas.style("display", "block");
        canvas.style("margin", "0 auto");
        p.textAlign(p.CENTER, p.CENTER);
        hitungLayoutDiagramPanah(p);
    };

    p.windowResized = function(){
        hitungLayoutDiagramPanah(p);
    };

    p.draw = function(){
        p.background(255,255,255);

        p.fill("#1e293b");
        p.noStroke();
        p.textSize(p.width > 700 ? 28 : 21);
        p.textStyle(p.BOLD);
        p.text("Relasi Makanan Favorit", judulCenterXDiagram, judulYDiagram);

        p.fill("#7C3AED");
        p.noStroke();
        p.textSize(p.width > 700 ? 16 : 13);
        p.textStyle(p.BOLD);
        p.text("Himpunan A", centerLeftXDiagram, centerYDiagram - circleHDiagram/2 - 24);

        p.fill("#2563eb");
        p.text("Himpunan B", centerRightXDiagram, centerYDiagram - circleHDiagram/2 - 24);

        drawSetCircleDiagram(p, centerLeftXDiagram, centerYDiagram, circleWDiagram, circleHDiagram, "#7c3aed");
        drawSetCircleDiagram(p, centerRightXDiagram, centerYDiagram, circleWDiagram, circleHDiagram, "#3b82f6");

        for(let i = 0; i < relasiDiagram.length; i++){
            let r = relasiDiagram[i];
            let warna = "#000";

            if(modeHapusDiagram){
                warna = "#dc2626";
            }else if(sudahPeriksaDiagram && hasilPenilaianDiagram.length > 0){
                warna = hasilPenilaianDiagram[i] ? "#16a34a" : "#dc2626";
            }

            drawArrowDiagram(
                p,
                kiriPosDiagram[r.from].x + pointOffsetDiagram,
                kiriPosDiagram[r.from].y,
                kananPosDiagram[r.to].x - pointOffsetDiagram,
                kananPosDiagram[r.to].y,
                warna
            );
        }

        for(let i = 0; i < kiriDiagram.length; i++){
            drawCardDiagram(p, kiriPosDiagram[i].x, kiriPosDiagram[i].y, kiriDiagram[i], "#7c3aed");
            drawPointDiagram(p, kiriPosDiagram[i].x + pointOffsetDiagram, kiriPosDiagram[i].y, i, true);
        }

        for(let i = 0; i < kananDiagram.length; i++){
            drawCardDiagram(p, kananPosDiagram[i].x, kananPosDiagram[i].y, kananDiagram[i], "#3b82f6");
            drawPointDiagram(p, kananPosDiagram[i].x - pointOffsetDiagram, kananPosDiagram[i].y, i, false);
        }

        drawPanelDiagram(p);
    };

    p.mousePressed = function(){
        for(let i = 0; i < kiriPosDiagram.length; i++){
            if(p.dist(p.mouseX, p.mouseY, kiriPosDiagram[i].x + pointOffsetDiagram, kiriPosDiagram[i].y) < 12){
                modeHapusDiagram = false;
                selectedIndexDiagram = i;
                return;
            }
        }

        for(let j = 0; j < kananPosDiagram.length; j++){
            if(p.dist(p.mouseX, p.mouseY, kananPosDiagram[j].x - pointOffsetDiagram, kananPosDiagram[j].y) < 12){
                if(selectedIndexDiagram !== null){
                    modeHapusDiagram = false;

                    relasiDiagram = relasiDiagram.filter(r => !(r.from === selectedIndexDiagram && r.to === j));
                    relasiDiagram.push({from:selectedIndexDiagram, to:j});

                    resetPenilaianDiagramPanah();
                    selectedIndexDiagram = null;
                    return;
                }
            }
        }

        if(modeHapusDiagram){
            for(let i = 0; i < relasiDiagram.length; i++){
                let r = relasiDiagram[i];

                let x1 = kiriPosDiagram[r.from].x + pointOffsetDiagram;
                let y1 = kiriPosDiagram[r.from].y;
                let x2 = kananPosDiagram[r.to].x - pointOffsetDiagram;
                let y2 = kananPosDiagram[r.to].y;

                if(distToSegmentDiagram(p.mouseX, p.mouseY, x1, y1, x2, y2) < 8){
                    relasiDiagram.splice(i, 1);
                    resetPenilaianDiagramPanah();
                    break;
                }
            }
        }
    };

function drawPanelDiagram(p){
    // kotak luar
    p.fill("#ffffff");
    p.stroke("#CFC4E6");
    p.strokeWeight(1.2);
    p.rect(panelXDiagram, panelYDiagram, panelWDiagram, panelHDiagram, 15);

    // header kotak
    p.noStroke();
    p.fill("#EEE7F7");
    p.rect(panelXDiagram, panelYDiagram, panelWDiagram, 42, 15, 15, 0, 0);

    // judul header
    p.fill("#7C3AED");
    p.textAlign(p.CENTER, p.CENTER);
    p.textStyle(p.BOLD);
    p.textSize(p.width > 700 ? 17 : 14);
    p.text("⌘  Hasil Jawabanmu", panelXDiagram + panelWDiagram/2, panelYDiagram + 21);

    let y = panelYDiagram + 74;
    let xText = panelXDiagram + 24; // margin kiri isi feedback

    p.textStyle(p.NORMAL);
    p.textSize(p.width > 700 ? 15 : 14);

    if(!sudahPeriksaDiagram){
        p.textAlign(p.CENTER, p.CENTER);

        p.fill("#6b7280");
        p.text("Setelah kamu menekan tombol", panelXDiagram + panelWDiagram/2, y);
        y += 16;

        p.textStyle(p.BOLD);
        p.fill("#4b5563");
        p.text("Periksa Jawaban, hasilnya", panelXDiagram + panelWDiagram/2, y);
        y += 16;

        p.textStyle(p.NORMAL);
        p.fill("#6b7280");
        p.text("akan muncul di sini.", panelXDiagram + panelWDiagram/2, y);
        return;
    }

    let jumlahBenar = hasilPenilaianDiagram.filter(x => x).length;
    let totalBenar = jawabanBenarDiagram.length;

    // ================= JIKA SEMUA BENAR =================
    if(jumlahBenar === totalBenar && relasiDiagram.length === totalBenar){
       p.textAlign(p.LEFT, p.CENTER);

        p.fill("#16a34a");
        p.textStyle(p.BOLD);
        p.text("Bagus! Semua relasi sudah benar.", xText, y);
        y += 26;

        p.fill("#4b5563");
        p.textStyle(p.NORMAL);
        p.text("Kamu sudah berhasil menghubungkan", xText, y);
        y += 16;
        p.text("setiap anak dengan makanan yang disukainya", xText, y);
        y += 16;
        p.text("sesuai dengan data pada soal.", xText, y);
        y += 22;

        p.fill("#2563eb");
        p.textStyle(p.BOLD);
        p.text("Kesimpulan:", xText, y);
        y += 22;

        p.fill("#4b5563");
        p.textStyle(p.NORMAL);
        p.text("Relasi menunjukkan hubungan", xText, y);
        y += 16;
        p.text("antara anggota Himpunan A (anak) dan", xText, y);
        y += 16;
        p.text("Himpunan B (makanan).", xText, y);
        y += 16;
        p.text("Setiap panah yang kamu buat sudah tepat.", xText, y);
            return;
            }

    // ================= JIKA MASIH SALAH =================
    p.textAlign(p.LEFT, p.CENTER);

    p.fill("#2563eb");
    p.textStyle(p.BOLD);
    p.textSize(p.width > 700 ? 14 : 13);
    p.text("Beberapa pasangan masih belum tepat.", xText, y);
    y += 26;

    // penjelasan rata kiri
    p.textAlign(p.LEFT, p.CENTER);
    p.fill("#6b7280");
    p.textStyle(p.NORMAL);
    p.textSize(p.width > 700 ? 14 : 14);

    p.text("Perhatikan kembali hubungan", xText, y);
    y += 16;
    p.text("antara anak dan makanan yang disukainya", xText, y);
    y += 16;
    p.text("pada cerita.", xText, y);
    y += 24;

    p.textAlign(p.LEFT, p.CENTER);
    p.fill("#7C3AED");
    p.textStyle(p.BOLD);
    p.text("Pasangan yang benar adalah:", xText, y);
    y += 24;

    // daftar relasi rata kiri
    p.textAlign(p.LEFT, p.CENTER);
    p.fill("#374151");
    p.textStyle(p.NORMAL);
    p.textSize(p.width > 700 ? 14 : 14);

    for(let r of jawabanBenarDiagram){
        let teks = "• " + kiriDiagram[r.from] + " → " + kananDiagram[r.to];
        p.text(teks, xText, y);
        y += 18;
    }

    y += 10;

    // penjelasan akhir rata kiri
    p.fill("#6b7280");
    p.text("Setiap anak harus dihubungkan", xText, y);
    y += 16;
    p.text("dengan makanan yang memang ia sukai", xText, y);
    y += 16;
    p.text("sesuai data pada soal.", xText, y);

    // kembalikan align ke tengah
    p.textAlign(p.CENTER, p.CENTER);
}
    function drawPointDiagram(p, x, y, index, isLeft){
        p.noStroke();
        if(selectedIndexDiagram === index && isLeft){
            p.fill("#2563eb");
        }else{
            p.fill("#000");
        }
        p.circle(x, y, p.width < 520 ? 10 : 12);
    }

    function drawSetCircleDiagram(p, x, y, w, h, colorHex){
        p.stroke(colorHex);
        p.strokeWeight(3);
        let c = p.color(colorHex);
        c.setAlpha(20);
        p.fill(c);
        p.ellipse(x, y, w, h);
    }

    function drawCardDiagram(p, x, y, teks, warna){
        p.fill("#fff");
        p.stroke(warna);
        p.strokeWeight(2.2);
        p.rect(x - cardWDiagram/2, y - cardHDiagram/2, cardWDiagram, cardHDiagram, 14);

        p.fill("#000");
        p.noStroke();
        p.textSize(p.width > 700 ? 15 : 12);
        p.textStyle(p.NORMAL);
        p.text(teks, x, y);
    }

    function drawArrowDiagram(p, x1, y1, x2, y2, color){
        p.stroke(color);
        p.strokeWeight(2.2);
        p.line(x1, y1, x2, y2);

        let angle = p.atan2(y2 - y1, x2 - x1);
        p.push();
        p.translate(x2, y2);
        p.rotate(angle);
        p.fill(color);
        p.noStroke();
        p.triangle(0, 0, -10, -5, -10, 5);
        p.pop();
    }

    function distToSegmentDiagram(px, py, x1, y1, x2, y2){
        let A = px - x1;
        let B = py - y1;
        let C = x2 - x1;
        let D = y2 - y1;

        let dot = A * C + B * D;
        let len_sq = C * C + D * D;
        let param = len_sq !== 0 ? dot / len_sq : -1;

        let xx, yy;

        if(param < 0){
            xx = x1; yy = y1;
        }else if(param > 1){
            xx = x2; yy = y2;
        }else{
            xx = x1 + param * C;
            yy = y1 + param * D;
        }

        return Math.hypot(px - xx, py - yy);
    }

}, "diagram-panah-p5");
</script>
<!-- ====================== END CARA 1: DIAGRAM PANAH ====================== -->
<!-- ===================== CARA 2: PEMAPARAN KOORDINAT ===================== -->

<style>
    .koor-card{
        width:100%;
        border:2px solid #8B5CF6;
        border-radius:24px;
        overflow:hidden;
        background:#ffffff;
        box-shadow:0 10px 24px rgba(139,92,246,0.10);
        margin-top:28px;
    }

    .koor-header{
        background:linear-gradient(135deg,#7C3AED,#A855F7);
        color:#fff;
        padding:14px 20px;
        font-size:1.1rem;
        font-weight:700;
    }

    .koor-body{
        padding:18px;
        background:#fff;
    }

    .koor-desc-box{
        background:#F7F1FF;
        border:2px solid #E9D5FF;
        border-radius:20px;
        padding:18px 20px;
        margin-bottom:20px;
        line-height:1.85;
        color:#333;
    }

    .koor-desc-title{
        color:#6D28D9;
        font-size:1.15rem;
        font-weight:700;
        margin-bottom:10px;
    }

    .koor-activity-box{
        border:2px solid #E9D5FF;
        border-radius:22px;
        padding:18px;
        background:transparent;
        box-shadow:0 6px 18px rgba(139,92,246,0.05);
    }

    .koor-instruction{
        background:#F7F1FF;
        border:1.5px solid #E9D5FF;
        border-radius:18px;
        padding:16px 18px;
        margin-bottom:16px;
        line-height:1.8;
    }

    .koor-instruction-title{
        color:#6D28D9;
        font-weight:700;
        font-size:1.08rem;
        margin-bottom:8px;
    }

    #koordinat-p5-holder{
        width:100%;
        display:flex;
        justify-content:center;
    }

    .koor-explain-box{
        margin-top:18px;
        background:#F7F1FF;
        border:1.5px solid #E9D5FF;
        border-radius:16px;
        padding:16px 18px;
        color:#4B5563;
        line-height:1.85;
        text-align:justify;
    }

    .koor-explain-box ul{
        margin-top:10px;
        margin-bottom:0;
    }

    @media(max-width:768px){
        .koor-body{
            padding:12px;
        }

        .koor-desc-box,
        .koor-instruction,
        .koor-explain-box{
            padding:14px;
            font-size:0.94rem;
        }

        .koor-header{
            font-size:1rem;
            padding:12px 16px;
        }
    }

.koor-petunjuk-box{
    width:100%;
    box-sizing:border-box;
    background:#F7F1FF;
    border:2px solid #E9D5FF;
    border-radius:20px;
    padding:20px 22px;
    margin-bottom:18px;
    overflow:hidden;
}

.koor-petunjuk-title{
    text-align:center;
    color:#6D28D9;
    font-weight:700;
    font-size:1.2rem;
    margin-bottom:16px;
}

.koor-petunjuk-desc{
    font-size:1rem;
    line-height:1.85;
    color:#222;
    margin:0 0 18px 0;
    text-align:justify;
}

.koor-petunjuk-grid{
    display:grid;
    grid-template-columns:minmax(0, 1.35fr) minmax(260px, 0.75fr);
    gap:18px;
    align-items:stretch;
    width:100%;
    box-sizing:border-box;
}

.koor-petunjuk-langkah,
.koor-petunjuk-info{
    min-width:0;
    background:#FFFFFF;
    border:1.5px solid #E9D5FF;
    border-radius:16px;
    padding:18px 20px;
    box-sizing:border-box;
}

.koor-subtitle{
    color:#7C3AED;
    font-weight:700;
    margin-bottom:14px;
    font-size:1.05rem;
}

.koor-step{
    display:grid;
    grid-template-columns:32px 1fr;
    column-gap:12px;
    align-items:start;
    margin-bottom:14px;
    line-height:1.7;
    color:#222;
    font-size:1rem;
}

.koor-step:last-child{
    margin-bottom:0;
}

.koor-step span{
    width:30px;
    height:30px;
    border-radius:50%;
    background:#7C3AED;
    color:white;
    display:flex;
    align-items:center;
    justify-content:center;
    font-weight:700;
    line-height:1;
}

.koor-step-text{
    min-width:0;
    overflow-wrap:break-word;
    word-break:normal;
}

.koor-petunjuk-info{
    display:flex;
    flex-direction:column;
    justify-content:center;
    gap:16px;
}

.koor-info-row{
    display:grid;
    grid-template-columns:20px 1fr;
    column-gap:12px;
    align-items:start;
    font-size:1rem;
    line-height:1.6;
    color:#222;
}

.koor-dot{
    width:18px;
    height:18px;
    border-radius:50%;
    display:inline-block;
    margin-top:4px;
}

.koor-dot.biru{
    background:linear-gradient(135deg,#60A5FA,#2563EB);
}

.koor-dot.hijau{
    background:linear-gradient(135deg,#86EFAC,#16A34A);
}

.koor-dot.merah{
    background:linear-gradient(135deg,#FDA4AF,#E11D48);
}

@media(max-width:900px){
    .koor-petunjuk-grid{
        grid-template-columns:1fr;
    }

    .koor-petunjuk-info{
        justify-content:flex-start;
    }
}

@media(max-width:768px){
    .koor-petunjuk-box{
        padding:16px 14px;
        border-radius:18px;
    }

    .koor-petunjuk-title{
        font-size:1.05rem;
        margin-bottom:12px;
    }

    .koor-petunjuk-desc{
        font-size:0.94rem;
        line-height:1.75;
        text-align:left;
    }

    .koor-petunjuk-langkah,
    .koor-petunjuk-info{
        padding:14px;
    }

    .koor-subtitle{
        font-size:1rem;
    }

    .koor-step,
    .koor-info-row{
        font-size:0.93rem;
        line-height:1.65;
    }
}

@media(max-width:480px){
    .koor-petunjuk-box{
        padding:14px 12px;
    }

    .koor-step{
        grid-template-columns:28px 1fr;
        column-gap:10px;
    }

    .koor-step span{
        width:26px;
        height:26px;
        font-size:0.9rem;
    }

    .koor-info-row{
        grid-template-columns:18px 1fr;
        column-gap:10px;
    }

    .koor-dot{
        width:16px;
        height:16px;
    }
}
</style>


<div class="card mt-3 diagram-card">

    <div class="diagram-card-header">
       
        <span>Cara 2: Pemaparan Koordinat</span>
    </div>

    <div class="diagram-card-body">

        <!-- PENJELASAN SINGKAT -->
        <div class="koor-desc-box">
            <div class="koor-desc-title">Pemaparan Koordinat</div>
            <p style="margin:0;">
                Pemaparan koordinat adalah cara menggambarkan hubungan antara dua himpunan
                menggunakan bidang koordinat. Anggota Himpunan A diletakkan pada sumbu horizontal,
                sedangkan anggota Himpunan B diletakkan pada sumbu vertikal. Titik pada bidang
                koordinat menunjukkan pasangan anggota Himpunan A yang berhubungan dengan anggota
                Himpunan B.
            </p>
        </div>

       <!-- PETUNJUK KEGIATAN -->
<div class="koor-petunjuk-box">

    <div class="koor-petunjuk-title">
        📖 Petunjuk Kegiatan
    </div>

    <p class="koor-petunjuk-desc">
        Berdasarkan data pada tabel, sajikan relasi <strong>“menyukai”</strong>
        dalam bentuk pemaparan koordinat dengan cara mengklik titik perpotongan
        antara anggota <strong style="color:#7C3AED;">Himpunan A</strong> dan anggota
        <strong style="color:#3B82F6;">Himpunan B</strong> yang sesuai.
    </p>

    <div class="koor-petunjuk-grid">

        <div class="koor-petunjuk-langkah">
            <div class="koor-subtitle">Langkah-langkah:</div>

            <div class="koor-step">
                <span>1</span>
                <div class="koor-step-text">
                    Klik titik perpotongan antara nama anak dan menu makanan yang sesuai.
                </div>
            </div>

            <div class="koor-step">
                <span>2</span>
                <div class="koor-step-text">
                    Ulangi langkah tersebut sampai semua pasangan relasi terbentuk.
                </div>
            </div>

            <div class="koor-step">
                <span>3</span>
                <div class="koor-step-text">
                    Klik tombol <strong>“Periksa”</strong> untuk melihat hasil jawabanmu.
                </div>
            </div>

            <div class="koor-step">
                <span>4</span>
                <div class="koor-step-text">
                    Klik tombol <strong>“Hapus”</strong> jika ingin mengulang jawaban.
                </div>
            </div>
        </div>

        <div class="koor-petunjuk-info">
            <div class="koor-info-row">
                <span class="koor-dot biru"></span>
                <span><strong>Titik biru</strong> berarti jawaban belum diperiksa.</span>
            </div>

            <div class="koor-info-row">
                <span class="koor-dot hijau"></span>
                <span><strong>Titik hijau</strong> berarti jawaban benar.</span>
            </div>

            <div class="koor-info-row">
                <span class="koor-dot merah"></span>
                <span><strong>Titik merah</strong> berarti jawaban masih salah.</span>
            </div>
        </div>

    </div>
</div>

<!-- AKTIVITAS INTERAKTIF -->
<div class="koor-activity-box">

    <div id="koordinat-p5-holder"></div>

    <div class="koor-explain-box">
        <p style="margin-top:0;">
            Gambar di atas menunjukkan diagram Kartesius yang menggambarkan relasi
            <strong>“Makanan Favorit”</strong> antara Himpunan A dan Himpunan B.
        </p>

        <ul>
            <li>Sumbu horizontal (A) berisi nama anak: Anisa, Dito, Zaki, dan Oca.</li>
            <li>Sumbu vertikal (B) berisi menu makanan: Soto Banjar, Nasi Kuning, Mie Bancir, dan Lontong.</li>
            <li>Setiap titik pada perpotongan kolom anak dan baris makanan menunjukkan makanan yang disukai oleh anak tersebut.</li>
        </ul>
    </div>


            <div id="koordinat-p5-holder"></div>

            <div class="koor-explain-box">
                <p style="margin-top:0;">
                    Gambar di atas menunjukkan diagram Kartesius yang menggambarkan relasi
                    <strong>“Makanan Favorit”</strong> antara Himpunan A dan Himpunan B.
                </p>

                <ul>
                    <li>Sumbu horizontal (A) berisi nama anak: Anisa, Dito, Zaki, dan Oca.</li>
                    <li>Sumbu vertikal (B) berisi menu makanan: Soto Banjar, Nasi Kuning, Mie Bancir, dan Lontong.</li>
                    <li>Setiap titik pada perpotongan kolom anak dan baris makanan menunjukkan makanan yang disukai oleh anak tersebut.</li>
                </ul>
            </div>

        </div>

    </div>
</div>



<script>
new p5(function(p){

    let koorGridSize = 78;

    let koorLabelsX = ["Anisa","Dito","Zaki","Oca"];
    let koorLabelsY = ["Soto Banjar","Nasi Kuning","Mie Bancir","Lontong"];

    let koorPoints = [];

    let koorCorrectRelations = [
        ["Anisa","Soto Banjar"],
        ["Anisa","Mie Bancir"],
        ["Dito","Soto Banjar"],
        ["Dito","Lontong"],
        ["Zaki","Soto Banjar"],
        ["Zaki","Nasi Kuning"],
        ["Oca","Mie Bancir"],
        ["Oca","Lontong"]
    ];

    let koorLeftMargin;
    let koorTopMargin;

    let koorCanvasW = 760;
    let koorCanvasH = 520;

    let koorCheckBtn;
    let koorResetBtn;
    let koorScoreDiv;
    let koorFeedbackDiv;

    p.setup = function(){
        let holder = document.getElementById("koordinat-p5-holder");
        let holderWidth = holder.offsetWidth;

        koorCanvasW = Math.min(760, holderWidth);
        koorCanvasH = 520;

        let canvas = p.createCanvas(koorCanvasW, koorCanvasH);
        canvas.parent("koordinat-p5-holder");
        canvas.style("display","block");
        canvas.style("margin","0 auto");

        p.textFont("Poppins, Arial, sans-serif");

        hitungPosisiKoordinat();

        buatKontrolKoordinat();
    };

    p.windowResized = function(){
        let holder = document.getElementById("koordinat-p5-holder");
        let holderWidth = holder.offsetWidth;

        koorCanvasW = Math.min(760, holderWidth);
        koorCanvasH = koorCanvasW < 520 ? 500 : 520;

        p.resizeCanvas(koorCanvasW, koorCanvasH);
        hitungPosisiKoordinat();
    };

    function hitungPosisiKoordinat(){
        if(koorCanvasW < 520){
            koorGridSize = 58;
        }else{
            koorGridSize = 78;
        }

        koorLeftMargin = koorCanvasW / 2 - (koorLabelsX.length * koorGridSize) / 2;
        koorTopMargin = 118;

        koorPoints.forEach(pt => {
            pt.x = koorLeftMargin + (pt.i + 1) * koorGridSize;
            pt.y = koorTopMargin + pt.j * koorGridSize;
        });
    }

    function buatKontrolKoordinat(){
        let holder = document.getElementById("koordinat-p5-holder");

        let controlBox = document.createElement("div");
        controlBox.style.display = "flex";
        controlBox.style.justifyContent = "center";
        controlBox.style.alignItems = "center";
        controlBox.style.gap = "14px";
        controlBox.style.flexWrap = "wrap";
        controlBox.style.marginTop = "12px";

        koorCheckBtn = document.createElement("button");
        koorCheckBtn.innerHTML = "✔ Periksa";
        koorCheckBtn.type = "button";
        koorCheckBtn.style.cssText = `
            background:#22C55E;
            color:white;
            border:none;
            border-radius:12px;
            padding:10px 20px;
            font-weight:700;
            cursor:pointer;
            min-width:130px;
        `;

        koorResetBtn = document.createElement("button");
        koorResetBtn.innerHTML = "✖ Hapus";
        koorResetBtn.type = "button";
        koorResetBtn.style.cssText = `
            background:#EF4444;
            color:white;
            border:none;
            border-radius:12px;
            padding:10px 20px;
            font-weight:700;
            cursor:pointer;
            min-width:130px;
        `;

        koorCheckBtn.onclick = cekJawabanKoordinat;
        koorResetBtn.onclick = resetKoordinat;

        controlBox.appendChild(koorCheckBtn);
        controlBox.appendChild(koorResetBtn);

       

        koorFeedbackDiv = document.createElement("div");
        koorFeedbackDiv.innerHTML = "";
        koorFeedbackDiv.style.cssText = `
            text-align:center;
            margin-top:8px;
            color:#6D28D9;
            font-size:0.95rem;
            font-weight:600;
        `;

        holder.after(koorFeedbackDiv);
        holder.after(controlBox);
    }

    p.draw = function(){
        p.background("#ffffff");

        gambarJudulKoordinat();
        gambarGridKoordinat();
        gambarSumbuKoordinat();
        gambarLabelKoordinat();
        gambarTitikKoordinat();
    };

    function gambarJudulKoordinat(){
        p.noStroke();
        p.fill("#312E81");
        p.textAlign(p.CENTER, p.CENTER);
        p.textStyle(p.BOLD);
        p.textSize(22);
        p.text("Pemaparan Koordinat", koorCanvasW / 2, 34);
    }

    function gambarGridKoordinat(){
        p.stroke("#E5E7EB");
        p.strokeWeight(1);

        for(let i = 0; i <= koorLabelsX.length; i++){
            p.line(
                koorLeftMargin + i * koorGridSize,
                koorTopMargin,
                koorLeftMargin + i * koorGridSize,
                koorTopMargin + koorLabelsY.length * koorGridSize
            );
        }

        for(let j = 0; j <= koorLabelsY.length; j++){
            p.line(
                koorLeftMargin,
                koorTopMargin + j * koorGridSize,
                koorLeftMargin + koorLabelsX.length * koorGridSize,
                koorTopMargin + j * koorGridSize
            );
        }
    }

    function gambarSumbuKoordinat(){
        p.stroke("#111827");
        p.strokeWeight(2.5);

        p.line(
            koorLeftMargin,
            koorTopMargin + koorLabelsY.length * koorGridSize,
            koorLeftMargin + koorLabelsX.length * koorGridSize,
            koorTopMargin + koorLabelsY.length * koorGridSize
        );

        p.line(
            koorLeftMargin,
            koorTopMargin,
            koorLeftMargin,
            koorTopMargin + koorLabelsY.length * koorGridSize
        );

        p.noStroke();
        p.fill("#111827");
        p.textStyle(p.BOLD);
        p.textSize(18);

        p.textAlign(p.CENTER, p.BOTTOM);
        p.text("B", koorLeftMargin, koorTopMargin - 8);

        p.textAlign(p.LEFT, p.CENTER);
        p.text(
            "A",
            koorLeftMargin + koorLabelsX.length * koorGridSize + 10,
            koorTopMargin + koorLabelsY.length * koorGridSize
        );
    }

    function gambarLabelKoordinat(){
        p.fill("#374151");
        p.textStyle(p.NORMAL);
        p.textSize(koorCanvasW < 520 ? 16 : 16);

        p.textAlign(p.CENTER, p.CENTER);
        for(let i = 0; i < koorLabelsX.length; i++){
            let x = koorLeftMargin + (i + 1) * koorGridSize;
            let y = koorTopMargin + koorLabelsY.length * koorGridSize + 24;

            p.push();
            p.translate(x, y);
            p.rotate(p.PI / 4);
            p.text(koorLabelsX[i], 0, 0);
            p.pop();
        }

        p.textAlign(p.RIGHT, p.CENTER);
        for(let j = 0; j < koorLabelsY.length; j++){
            p.text(
                koorLabelsY[j],
                koorLeftMargin - 12,
                koorTopMargin + j * koorGridSize
            );
        }
    }

    function gambarTitikKoordinat(){
        for(let titik of koorPoints){
            if(titik.status === "correct"){
                p.fill("#22C55E");
            }else if(titik.status === "wrong"){
                p.fill("#EF4444");
            }else{
                p.fill("#3B82F6");
            }

            p.noStroke();
            p.circle(titik.x, titik.y, 16);
        }
    }

    p.mousePressed = function(){
        let i = Math.round((p.mouseX - koorLeftMargin) / koorGridSize) - 1;
        let j = Math.round((p.mouseY - koorTopMargin) / koorGridSize);

        let x = koorLeftMargin + (i + 1) * koorGridSize;
        let y = koorTopMargin + j * koorGridSize;

        if(i >= 0 && i < koorLabelsX.length && j >= 0 && j < koorLabelsY.length){
            if(p.dist(p.mouseX, p.mouseY, x, y) < 18){
                let sudahAda = koorPoints.some(pt => pt.i === i && pt.j === j);

                if(!sudahAda){
                    koorPoints.push({
                        i:i,
                        j:j,
                        x:x,
                        y:y,
                        status:"pending"
                    });
                }
            }
        }
    };

    function cekJawabanKoordinat(){
    let benar = 0;

    for(let titik of koorPoints){
        let pasangan = [koorLabelsX[titik.i], koorLabelsY[titik.j]];

        let isCorrect = koorCorrectRelations.some(rel =>
            rel[0] === pasangan[0] && rel[1] === pasangan[1]
        );

        if(isCorrect){
            titik.status = "correct";
            benar++;
        }else{
            titik.status = "wrong";
        }
    }

    koorFeedbackDiv.style.display = "block";

    koorFeedbackDiv.style.cssText = `
        display:block;
        max-width:760px;
        margin:14px auto 0 auto;
        padding:16px 18px;
        border-radius:16px;
        font-size:0.95rem;
        line-height:1.8;
        text-align:left;
    `;

    if(koorPoints.length === 0){
        koorFeedbackDiv.innerHTML = `
            <strong>Benar: 0 dari ${koorCorrectRelations.length}</strong><br><br>
            <strong>Jawaban belum diisi.</strong><br>
            Silakan klik titik perpotongan pada diagram terlebih dahulu.
        `;
        koorFeedbackDiv.style.background = "#FEF2F2";
        koorFeedbackDiv.style.border = "1.5px solid #FCA5A5";
        koorFeedbackDiv.style.color = "#991B1B";
    }
    else if(benar === koorCorrectRelations.length && koorPoints.length === koorCorrectRelations.length){
        koorFeedbackDiv.innerHTML = `
            <strong>Benar: ${benar} dari ${koorCorrectRelations.length}</strong><br><br>
            <strong>Bagus! Semua titik yang kamu tentukan sudah tepat.</strong><br><br>
            Kamu sudah dapat menyajikan relasi dengan benar melalui diagram yang dibuat.
            Setiap pasangan yang kamu tentukan menunjukkan hubungan yang sesuai antara
            anak dan makanan yang disukainya.<br><br>
            Kamu berhasil menentukan seluruh pasangan yang tepat melalui titik-titik pada diagram.
        `;
        koorFeedbackDiv.style.background = "#ECFDF5";
        koorFeedbackDiv.style.border = "1.5px solid #86EFAC";
        koorFeedbackDiv.style.color = "#166534";
    }
    else{
        koorFeedbackDiv.innerHTML = `
            <strong>Benar: ${benar} dari ${koorCorrectRelations.length}</strong><br><br>
            <strong>Masih ada beberapa titik yang belum tepat atau belum lengkap.</strong><br><br>
            Perhatikan kembali hubungan antara setiap anak dan makanan yang disukainya.<br><br>

            <strong>Pasangan yang benar adalah:</strong><br>
            (Anisa, Soto Banjar), (Anisa, Mie Bancir),<br>
            (Dito, Soto Banjar), (Dito, Lontong),<br>
            (Zaki, Soto Banjar), (Zaki, Nasi Kuning),<br>
            (Oca, Mie Bancir), (Oca, Lontong).<br><br>

            Setiap pasangan menunjukkan hubungan yang sesuai antara anak dan makanan yang disukainya.
            Periksa kembali titik-titik yang kamu pilih dan sesuaikan dengan pasangan yang benar.
        `;
        koorFeedbackDiv.style.background = "#FEF2F2";
        koorFeedbackDiv.style.border = "1.5px solid #FCA5A5";
        koorFeedbackDiv.style.color = "#991B1B";
    }
}
    function resetKoordinat(){
    koorPoints = [];

    koorFeedbackDiv.innerHTML = "";
    koorFeedbackDiv.style.cssText = `
        display:none;
    `;
}

}, "koordinat-p5-holder");
</script>

<!-- ======================== CARA 3: HIMPUNAN PASANGAN BERURUT ======================== -->

<style>
.pasber-card{
    width:100%;
    border:2px solid #8B5CF6;
    border-radius:24px;
    overflow:hidden;
    background:#ffffff;
    box-shadow:0 10px 24px rgba(139,92,246,0.10);
    margin-top:28px;
}

.pasber-header{
    background:linear-gradient(135deg,#7C3AED,#A855F7);
    color:#ffffff;
    padding:14px 20px;
    font-size:1.1rem;
    font-weight:700;
}

.pasber-body{
    padding:18px;
    background:#ffffff;
}

.pasber-desc-box{
    background:#F7F1FF;
    border:2px solid #E9D5FF;
    border-radius:20px;
    padding:18px 20px;
    margin-bottom:20px;
    line-height:1.85;
    color:#333;
}

.pasber-desc-title{
    color:#6D28D9;
    font-size:1.15rem;
    font-weight:700;
    margin-bottom:10px;
}

.pasber-activity{
    background:#ffffff;
    border:2px solid #E9D5FF;
    border-radius:22px;
    padding:22px;
    box-shadow:0 6px 18px rgba(139,92,246,0.05);
}

.pasber-title{
    text-align:center;
    font-size:1.45rem;
    font-weight:800;
    color:#312E81;
    margin-bottom:8px;
}

.pasber-subtitle{
    text-align:center;
    color:#64748B;
    margin-bottom:22px;
    font-size:0.95rem;
}

.pasber-area{
    display:flex;
    justify-content:center;
    gap:28px;
    flex-wrap:wrap;
}

.pasber-box{
    background:#ffffff;
    width:340px;
    padding:22px;
    border-radius:20px;
    border:1.5px solid #E9D5FF;
    box-shadow:0 8px 20px rgba(139,92,246,0.08);
}

.pasber-box h3{
    color:#7C3AED;
    font-size:1.15rem;
    font-weight:800;
    margin-bottom:16px;
    text-align:center;
}

.pasber-item{
    background:linear-gradient(135deg,#A855F7,#7C3AED);
    color:#ffffff;
    padding:12px;
    margin:10px 0;
    border-radius:14px;
    cursor:grab;
    font-weight:700;
    font-size:1rem;
    text-align:center;
    box-shadow:0 5px 12px rgba(124,58,237,0.22);
    user-select:none;
}

.pasber-item:active{
    cursor:grabbing;
}

.pasber-menu{
    font-size:1rem;
    font-weight:800;
    margin-bottom:6px;
    color:#312E81;
}

.pasber-target{
    min-height:68px;
    border:3px dashed #C084FC;
    border-radius:15px;
    padding:10px;
    margin-bottom:15px;
    background:#FAF5FF;
    transition:0.2s;
}

.pasber-target:hover{
    background:#F3E8FF;
}

.pasber-btn-row{
    display:flex;
    justify-content:center;
    align-items:center;
    gap:14px;
    flex-wrap:wrap;
    margin-top:22px;
}

.pasber-btn{
    padding:12px 24px;
    border:none;
    border-radius:14px;
    font-size:0.95rem;
    font-weight:800;
    cursor:pointer;
    color:#ffffff;
    min-width:150px;
}

.pasber-check{
    background:#22C55E;
}

.pasber-reset{
    background:#EF4444;
}

#pasberFeedback{
    max-width:760px;
    margin:18px auto 0 auto;
    padding:16px 18px;
    border-radius:16px;
    font-size:0.95rem;
    line-height:1.8;
    display:none;
    text-align:left;
}

.pasber-benar{
    color:#166534;
    font-weight:700;
}

.pasber-salah{
    color:#991B1B;
    font-weight:700;
}

.pasber-hide{
    display:none;
}

@media(max-width:768px){
    .pasber-body{
        padding:12px;
    }

    .pasber-activity{
        padding:16px 12px;
    }

    .pasber-box{
        width:100%;
    }

    .pasber-title{
        font-size:1.2rem;
    }

    .pasber-subtitle{
        font-size:0.9rem;
    }

    .pasber-btn{
        width:100%;
    }
}

.pasber-benar{
    color:#15803D;
    font-weight:700;
}

.pasber-salah{
    color:#DC2626;
    font-weight:700;
}
</style>

<div class="card mt-3 diagram-card">

    <div class="diagram-card-header">
      
        <span>Cara 3: Himpunan Pasangan Berurut</span>
    </div>

    <div class="diagram-card-body pasber-body">

        <div class="pasber-desc-box">
            <div class="pasber-desc-title">Himpunan Pasangan Berurut</div>
            <p style="margin:0;">
                Himpunan pasangan berurut adalah cara menyajikan relasi dengan menuliskan pasangan
                anggota dari dua himpunan dalam bentuk <strong>(anggota pertama, anggota kedua)</strong>.
                Pada kegiatan ini, anggota pertama adalah nama anak, sedangkan anggota kedua adalah
                menu makanan yang disukainya.
            </p>
        </div>

        <div class="pasber-activity">

            <div class="pasber-title">Susun Himpunan Pasangan Berurut</div>
            <div class="pasber-subtitle">
                Seret nama anak ke menu makanan yang sesuai.
            </div>

            <div class="pasber-area">

                <div class="pasber-box">
                    <h3>Nama Anak</h3>

                    <div class="pasber-item pasber-sumber" draggable="true" data-nama="Anisa">Anisa</div>
                    <div class="pasber-item pasber-sumber" draggable="true" data-nama="Dito">Dito</div>
                    <div class="pasber-item pasber-sumber" draggable="true" data-nama="Zaki">Zaki</div>
                    <div class="pasber-item pasber-sumber" draggable="true" data-nama="Oca">Oca</div>
                </div>

                <div class="pasber-box">
                    <h3>Menu Makanan</h3>

                    <div class="pasber-menu">Soto Banjar</div>
                    <div class="pasber-target" data-makanan="Soto Banjar"></div>

                    <div class="pasber-menu">Mie Bancir</div>
                    <div class="pasber-target" data-makanan="Mie Bancir"></div>

                    <div class="pasber-menu">Lontong</div>
                    <div class="pasber-target" data-makanan="Lontong"></div>

                    <div class="pasber-menu">Nasi Kuning</div>
                    <div class="pasber-target" data-makanan="Nasi Kuning"></div>
                </div>

            </div>

            <div class="pasber-btn-row">
                <button type="button" class="pasber-btn pasber-check" onclick="cekPasanganBerurut()">Periksa Jawaban</button>
                <button type="button" class="pasber-btn pasber-reset" onclick="resetPasanganBerurut()">Reset</button>
            </div>

            <div id="pasberFeedback"></div>

        </div>

    </div>
</div>

<script>
const pasberSumber = document.querySelectorAll('.pasber-sumber');
const pasberTargets = document.querySelectorAll('.pasber-target');

let pasberJumlah = {
    Anisa:0,
    Dito:0,
    Zaki:0,
    Oca:0
};

pasberSumber.forEach(item=>{
    item.addEventListener('dragstart', function(e){
        let nama = item.dataset.nama;

        if(pasberJumlah[nama] >= 2){
            e.preventDefault();
            return;
        }

        e.dataTransfer.setData("pasberNama", nama);
    });
});

pasberTargets.forEach(target=>{
    target.addEventListener('dragover', function(e){
        e.preventDefault();
    });

    target.addEventListener('drop', function(e){
        e.preventDefault();

        let nama = e.dataTransfer.getData("pasberNama");
        if(!nama) return;

        if(pasberJumlah[nama] >= 2) return;

        pasberJumlah[nama]++;

        let baru = document.createElement("div");
        baru.className = "pasber-item";
        baru.textContent = nama;
        baru.dataset.nama = nama;

        target.appendChild(baru);

        if(pasberJumlah[nama] >= 2){
            document.querySelectorAll('.pasber-sumber').forEach(x=>{
                if(x.dataset.nama === nama){
                    x.classList.add('pasber-hide');
                }
            });
        }
    });
});

function cekPasanganBerurut(){
    const kunciPasber = [
        "(Anisa, Soto Banjar)",
        "(Anisa, Mie Bancir)",
        "(Dito, Soto Banjar)",
        "(Dito, Lontong)",
        "(Zaki, Soto Banjar)",
        "(Zaki, Nasi Kuning)",
        "(Oca, Mie Bancir)",
        "(Oca, Lontong)"
    ];

    let jawaban = [];
    let tampil = [];
    let benar = 0;

    pasberTargets.forEach(t=>{
        let makanan = t.dataset.makanan;

        t.querySelectorAll('.pasber-item').forEach(a=>{
            let pasangan = "(" + a.dataset.nama + ", " + makanan + ")";
            jawaban.push(pasangan);

            if(kunciPasber.includes(pasangan)){
                benar++;
                tampil.push('<span class="pasber-benar">' + pasangan + '</span>');
            }else{
                tampil.push('<span class="pasber-salah">' + pasangan + '</span>');
            }
        });
    });

    const feedback = document.getElementById("pasberFeedback");
    feedback.style.display = "block";
    feedback.style.background = "#F7F1FF";
    feedback.style.border = "1.5px solid #D8B4FE";
    feedback.style.color = "#1F2937";

    if(jawaban.length === 0){
        feedback.innerHTML = `
            <strong style="color:#DC2626;">Jawaban belum diisi.</strong><br><br>
            Silakan seret nama anak ke menu makanan terlebih dahulu.
        `;
        return;
    }

    if(benar === 8 && jawaban.length === 8){
        feedback.style.background = "#ECFDF5";
        feedback.style.border = "1.5px solid #86EFAC";
        feedback.style.color = "#166534";

        feedback.innerHTML = `
            <strong>Bagus! Semua pasangan yang kamu susun sudah tepat.</strong><br><br>
            Kamu sudah dapat menyajikan relasi dalam bentuk himpunan pasangan berurut.
            Setiap pasangan menunjukkan hubungan yang sesuai antara anak dan makanan yang disukainya.<br><br>
            Himpunan pasangan berurut yang kamu susun sudah lengkap dan benar.
        `;
    }else{
        feedback.innerHTML = `
            <strong style="color:#6D28D9;">Masih ada pasangan yang belum tepat atau belum lengkap.</strong><br><br>

            Benar: <strong>${benar} dari 8</strong><br><br>

            <strong>Jawaban yang kamu susun:</strong><br>
            <div style="
                background:#FFFFFF;
                border:1.5px solid #E9D5FF;
                border-radius:12px;
                padding:12px 14px;
                margin-top:8px;
                margin-bottom:18px;
                line-height:1.9;
            ">
                { ${tampil.join(", ")} }
            </div>

            <strong>Pasangan yang benar adalah:</strong><br>
            <div style="
                background:#FFFFFF;
                border:1.5px solid #E9D5FF;
                border-radius:12px;
                padding:12px 14px;
                margin-top:8px;
                margin-bottom:18px;
                line-height:1.9;
                color:#1F2937;
            ">
                (Anisa, Soto Banjar), (Anisa, Mie Bancir),<br>
                (Dito, Soto Banjar), (Dito, Lontong),<br>
                (Zaki, Soto Banjar), (Zaki, Nasi Kuning),<br>
                (Oca, Mie Bancir), (Oca, Lontong).
            </div>

            Periksa kembali nama anak dan menu makanan yang dipasangkan.
        `;
    }
}
function resetPasanganBerurut(){
    pasberTargets.forEach(t=>{
        t.innerHTML = "";
    });

    pasberJumlah = {
        Anisa:0,
        Dito:0,
        Zaki:0,
        Oca:0
    };

    document.querySelectorAll('.pasber-sumber').forEach(x=>{
        x.classList.remove('pasber-hide');
    });

    const feedback = document.getElementById("pasberFeedback");
    feedback.style.display = "none";
    feedback.innerHTML = "";
}
</script>
<!-- ======================== CONTOH RELASI ======================== -->
<div class="card mt-4" style="width:100%; border:2px solid #A855F7;">

    <!-- HEADER -->
    <div class="card-header"
         style="
            background-color:#A855F7;
            color:#000;
            font-size:1.1rem;
            font-weight:700;
            border-bottom:2px solid   #8d63d6;
         ">
        Contoh
    </div>

    <!-- BODY -->
    <div class="card-body" style="padding:30px; background-color:#FFFFFF;">

        <!-- PENJELASAN AWAL -->
        <p style="font-size:1rem; line-height:1.8; text-align:justify;">
            Diketahui suatu ekosistem lahan basah memiliki beberapa jenis
            hewan dan tumbuhan air. Misalkan:
        </p>

        <!-- HIMPUNAN -->
        <ul style="font-size:1rem; line-height:1.8;">
            <li>
                Himpunan A = { <strong>Belibis, Katak Rawa, Ikan Gabus</strong> }  
                <br>
                <span style="font-size:0.95rem;">(himpunan hewan yang hidup di lahan basah)</span>
            </li>
            <li class="mt-2">
                Himpunan B = { <strong>Teratai, Eceng Gondok, Kiambang</strong> }  
                <br>
                <span style="font-size:0.95rem;">(himpunan tumbuhan air)</span>
            </li>
        </ul>

        <!-- RELASI -->
        <p style="font-size:1rem; line-height:1.8; text-align:justify;">
            Relasi dari himpunan A ke himpunan B adalah
            <strong>“menggunakan sebagai tempat berlindung dan mencari makan”</strong>.
            Artinya, hewan-hewan tersebut menggunakan tumbuhan tertentu
            untuk berlindung dan mencari makan.
        </p>

        <!-- HASIL PENGAMATAN -->
        <p style="font-size:1rem; line-height:1.8; text-align:justify;">
            Berdasarkan hasil pengamatan:
        </p>
        <ul style="font-size:1rem; line-height:1.8;">
            <li>Belibis menggunakan Teratai dan Kiambang sebagai tempat berlindung dan mencari makan</li>
            <li>Katak Rawa menggunakan Eceng Gondok.</li>
            <li>Ikan Gabus menggunakan Kiambang.</li>
        </ul>

        <!-- SUB HEADER SOAL -->
        <div style="
        margin-top:35px;
        margin-bottom:10px;
        padding:8px 16px;
        background:linear-gradient(90deg,#F3E8FF,#FFF);
        border-left:6px solid #A855F7;
        font-weight:700;
        border-radius:6px;
    ">
         Latihan Soal
    </div>

           

        <!-- SOAL -->
        <ol style="font-size:1rem; line-height:1.8; margin-top:15px;">
            <li>
                Sajikan relasi tersebut dalam bentuk diagram panah.
                Lalu tentukan domain, kodomain, dan range dari relasi tersebut.
            </li>
            <li>
                Sajikan relasi tersebut dalam bentuk diagram koordinat Kartesius.
            </li>
            <li>
                Sajikan relasi tersebut dalam bentuk himpunan pasangan berurutan.
            </li>
        </ol>
        <!-- ======================== PENYELESAIAN ======================== -->

<hr style="margin:30px 0; border-top:2px dashed #A855F7;">

<div style="
    display:inline-block;
    padding:6px 18px;
    background-color:#F3E8FF;
    border-radius:8px;
    font-weight:700;
    border:1px solid #A855F7;
    margin-bottom:15px;
">
    Penyelesaian
</div>


<div style="
    background-color:#F7F1FF;
    border-left:6px solid #A855F7;
    padding:16px 20px;
    border-radius:10px;
    margin-bottom:25px;
">
    <p style="margin:0; font-weight:700;"> Diketahui</p>
    <ul style="margin-top:10px;">
        <li>A = { Belibis, Katak Rawa, Ikan Gabus }</li>
        <li>B = { Teratai, Eceng Gondok, Kiambang }</li>
        <li>Relasi: menggunakan sebagai tempat berlindung dan mencari makan</li>
    </ul>
</div>


<!-- ======================== LANGKAH 1 ======================== -->
<div style="
    background-color:#F7F1FF;
    border:2px solid #A855F7;
    border-radius:12px;
    padding:25px;
    margin:30px 0;
">

    <div style="
    background: linear-gradient(180deg, #FFFFFF 0%, #FAF7FF 100%);
    color: #4C1D95;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 10px 22px;
    border-radius: 22px;
    font-weight: 700;
    margin-bottom: 18px;
    border: 1px solid #E9D5FF;
    box-shadow:
        0 8px 18px rgba(168, 85, 247, 0.20),
        inset 0 1px 0 rgba(255,255,255,0.95);
    line-height: 1.5;
">
    <span style="color:#7C3AED; font-size:0.85rem;"></span>
    <span>1. Diagram Panah</span>
</div>

    <p style="font-size:1rem; line-height:1.8;">
        Diagram panah dari relasi tersebut adalah sebagai berikut:
    </p>

    <div style="
        text-align:center;
        margin:25px 0;
        padding:15px;
        background-color:#FFFFFF;
        border-radius:12px;
        border:1px dashed #A855F7;
    ">
        <img src="{{ asset('images/diagram-panah-ekosistem-lahan-basah.png') }}"
             alt="Diagram Panah Relasi Hewan dan Tumbuhan Air"
             style="max-width:100%; border-radius:10px;">
    </div>

    <p style="font-size:1rem; line-height:1.8;">
        Dari diagram panah tersebut diperoleh:
    </p>

    <ul style="font-size:1rem; line-height:1.8;">
        <li>
            <strong>Domain</strong> adalah semua anggota himpunan A<br>
            Domain = { Belibis, Katak Rawa, Ikan Gabus }
        </li>
        <li class="mt-2">
            <strong>Kodomain</strong> adalah semua anggota himpunan B<br>
            Kodomain = { Teratai, Eceng Gondok, Kiambang }
        </li>
        <li class="mt-2">
            <strong>Range</strong> adalah anggota himpunan B yang berelasi dengan anggota himpunan A<br>
            Range = { Teratai, Eceng Gondok, Kiambang }
        </li>
    </ul>

</div>
<!-- ====================== END LANGKAH 1 ====================== -->

<!-- ======================== LANGKAH 2 ======================== -->
<div style="
    background-color:#F7F1FF;
    border:2px solid #A855F7;
    border-radius:12px;
    padding:25px;
    margin:30px 0;
">

    <div style="
    background: #FFFFFF;
    color:#4C1D95;
    display:inline-block;
    padding:10px 22px;
    border-radius:20px;
    font-weight:700;
    margin-bottom:15px;
    border:1px solid #E9D5FF;
    box-shadow: 0 6px 14px rgba(168, 85, 247, 0.18);
">
    2. Diagram Koordinat Kartesius
</div>
    <div style="
        text-align:center;
        margin:25px 0;
        padding:15px;
        background-color:#FFFFFF;
        border-radius:12px;
        border:1px dashed #A855F7;
    ">
        <img src="{{ asset('images/diagram-kartesius-ekosistem-lahan-basah.png') }}"
             alt="Diagram Kartesius Relasi Hewan dan Tumbuhan Air"
             style="max-width:100%; border-radius:10px;">
    </div>

    <p style="font-size:1rem; line-height:1.8; text-align:justify;">
        Gambar di atas menunjukkan diagram Kartesius yang menggambarkan relasi
        <strong>“menggunakan sebagai tempat berlindung dan mencari makan”</strong> antara himpunan A
        (hewan) dan himpunan B (tumbuhan air).
    </p>

    <p style="font-size:1rem; line-height:1.8;">
        Pada diagram ini:
    </p>

    <ul style="font-size:1rem; line-height:1.8;">
        <li>
            Sumbu horizontal (A) berisi nama hewan:
            <strong>Belibis, Katak Rawa, dan Ikan Gabus</strong>.
        </li>
        <li>
            Sumbu vertikal (B) berisi nama tumbuhan air:
            <strong>Teratai, Eceng Gondok, dan Kiambang</strong>.
        </li>
        <li>
            Setiap titik menunjukkan tumbuhan yang digunakan hewan sebagai tempat berlindung dan mencari makan .
        </li>
    </ul>

    <p style="font-size:1rem; line-height:1.8;">
        Contohnya:
    </p>

    <ul style="font-size:1rem; line-height:1.8;">
        <li><strong>Belibis – Teratai</strong> → Belibis menggunakan Teratai.</li>
        <li><strong>Belibis – Kiambang</strong> → Belibis juga menggunakan Kiambang.</li>
        <li><strong>Katak Rawa – Eceng Gondok</strong> → Katak Rawa menggunakan Eceng Gondok.</li>
        <li><strong>Ikan Gabus – Kiambang</strong> → Ikan Gabus menggunakan Kiambang.</li>
    </ul>

</div>
<!-- ====================== END LANGKAH 2 ====================== -->
<!-- ======================== LANGKAH 3 ======================== -->
<div style="
    background-color:#F7F1FF;
    border:2px solid #A855F7;
    border-radius:12px;
    padding:25px;
    margin:30px 0;
">

    <div style="
    background: linear-gradient(180deg, #FFFFFF 0%, #FAF7FF 100%);
    color: #4C1D95;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 10px 22px;
    border-radius: 22px;
    font-weight: 700;
    margin-bottom: 18px;
    border: 1px solid #E9D5FF;
    box-shadow:
        0 8px 18px rgba(168, 85, 247, 0.20),
        inset 0 1px 0 rgba(255,255,255,0.95);
    line-height: 1.5;
">
    <span style="color:#7C3AED; font-size:0.85rem;"></span>
    <span>3. Himpunan Pasangan Berurutan</span>
</div>

    <p style="font-size:1rem; line-height:1.8;">
        Relasi dapat ditulis sebagai himpunan pasangan berurutan:
    </p>

    <div style="
        background-color:#FFFFFF;
        border:1px dashed #A855F7;
        border-radius:12px;
        padding:18px;
        margin-top:15px;
        text-align:center;
        font-size:1rem;
        font-weight:600;
    ">
        R = { (Belibis, Teratai), (Belibis, Kiambang),<br>
        (Katak Rawa, Eceng Gondok), (Ikan Gabus, Kiambang) }
    </div>

</div>
<!-- ====================== END LANGKAH 3 ====================== -->




    </div>
    
</div>
<!-- ====================== END CONTOH RELASI ====================== -->


<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center">

            <!-- Tombol Sebelumnya (Hijau) -->
            <a href="/bab_1/bab_2" class="btn btn-success px-4">
                ← Sebelumnya
            </a>

            <!-- Tombol Selanjutnya -->
            <a href="/bab_1/latihan2" class="btn btn-success px-4">
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
