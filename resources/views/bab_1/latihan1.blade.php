@extends('layouts.main')

@section('container')


<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.9.0/p5.min.js"></script>

<style>
    body,
    html {
        margin: 0;
        padding: 0;
        min-height: 100%;
        font-family: 'Poppins', sans-serif;
        background-color: #f8f9fa;
        overflow-x: hidden;
    }

    .content-gap {
        margin-left: 40px;
        margin-right: 20px;
        box-sizing: border-box;
        max-width: 100%;
        overflow-x: hidden;
        padding-bottom: 40px;
    }

    .content-gap *,
    .content-gap *::before,
    .content-gap *::after {
        box-sizing: border-box;
    }

    .materi-style-card {
        background: #ffffff;
        border: 1px solid #eadcf6;
        border-radius: 26px;
        padding: 24px;
        margin-bottom: 28px;
        box-shadow: 0 14px 32px rgba(91, 44, 111, 0.08);
        overflow: hidden;
    }

    .materi-style-title {
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

    .materi-style-body {
        color: #4B2673;
        line-height: 1.9;
    }

    .latihan-hero-grid {
        display: grid;
        grid-template-columns: 1.15fr 0.85fr;
        gap: 28px;
        align-items: stretch;
        margin-top: 8px;
    }

    .latihan-image-side {
        background: #ffffff;
        border-radius: 24px;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
        border: 1px solid #E9D5FF;
        box-shadow: 0 10px 24px rgba(91, 44, 111, 0.06);
    }

    .latihan-image-side img {
        width: 100%;
        max-height: 520px;
        object-fit: contain;
        border-radius: 20px;
        display: block;
        box-shadow: 0 14px 28px rgba(91, 44, 111, 0.10);
    }

    .latihan-text-side {
        background: #FBF7FF;
        border: 1px solid #E9D5FF;
        border-radius: 24px;
        padding: 28px;
        display: flex;
        align-items: center;
        box-shadow: 0 10px 24px rgba(91, 44, 111, 0.06);
    }

    .latihan-text-side h2 {
        color: #1f2937;
        font-weight: 800;
        margin-bottom: 24px;
        font-size: 1.7rem;
        line-height: 1.35;
    }

    .latihan-text-side ol {
        color: #1f2937;
        font-size: 1.05rem;
        line-height: 1.9;
        margin-bottom: 18px;
    }

    .latihan-text-side p {
        color: #1f2937;
        font-size: 1.05rem;
        line-height: 1.8;
        margin-bottom: 0;
    }

    .latihan-text-side strong {
        color: #4B2673;
        font-weight: 800;
    }

    .petunjuk-box {
        background: #ffffff;
        border: 3px dashed #A855F7;
        border-radius: 24px;
        padding: 24px 28px;
        margin: 10px 0 28px 0;
        color: #4B2673;
        box-shadow: 0 14px 28px rgba(168, 85, 247, 0.13),
                    0 6px 14px rgba(75, 38, 115, 0.06);
    }

    .petunjuk-box h4 {
        display: inline-block;
        background: linear-gradient(135deg, #8E44AD, #B57EDC);
        color: #ffffff;
        padding: 10px 22px;
        border-radius: 16px;
        font-weight: 800;
        font-size: 1.05rem;
        margin-bottom: 18px;
        box-shadow: 0 6px 14px rgba(142, 68, 173, 0.16);
    }

    .petunjuk-box ol {
        font-size: 1rem;
        line-height: 1.9;
        padding-left: 22px;
        margin-bottom: 0;
        color: #4B2673;
    }

    .petunjuk-box li {
        margin-bottom: 14px;
    }

    .petunjuk-box .badge {
        font-size: 0.78rem;
        border-radius: 999px;
        padding: 6px 10px;
    }

    .ayo-title {
        text-align: center;
        font-size: 1.35rem;
        font-weight: 800;
        color: #4B2673;
        margin: 24px 0 20px 0;
        animation: floatText 3s ease-in-out infinite;
        text-shadow: 0 0 15px rgba(123, 44, 191, 0.22);
    }

    @keyframes floatText {
        0% { transform: translateY(0); }
        50% { transform: translateY(-6px); }
        100% { transform: translateY(0); }
    }

    .drawing-card {
        background: #ffffff;
        border: 1px solid #eadcf6;
        border-radius: 26px;
        padding: 24px;
        box-shadow: 0 14px 32px rgba(91, 44, 111, 0.08);
        overflow: hidden;
    }

    .control-row {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 12px;
        flex-wrap: wrap;
        margin-top: 14px;
    }

    .control-row .btn {
        min-width: 135px;
        min-height: 46px;
        border-radius: 14px;
        font-weight: 800;
        font-size: 0.95rem;
        border: none;
        box-shadow: 0 8px 16px rgba(91, 44, 111, 0.10);
        transition: all 0.22s ease;
    }

    .control-row .btn:hover {
        transform: translateY(-2px);
    }

    .control-row .btn-primary {
        background: linear-gradient(135deg, #8E44AD, #B57EDC);
        color: #ffffff;
    }

    .control-row .btn-danger {
        background: #DC2626;
        color: #ffffff;
    }

    .control-row .btn-success {
        background: #16A34A;
        color: #ffffff;
    }

    .control-row .btn-secondary {
        background: #6B7280;
        color: #ffffff;
    }

    .control-row .form-control,
    .control-row .form-select {
        min-height: 46px;
        border-radius: 14px;
        border: 2px solid #D8B4FE;
        color: #4B2673;
        font-weight: 600;
        box-shadow: none;
    }

    .control-row .form-control:focus,
    .control-row .form-select:focus {
        border-color: #8E44AD;
        box-shadow: 0 0 0 4px rgba(142, 68, 173, 0.14);
    }

    .canvas-result-grid {
        display: grid;
        grid-template-columns: 1.8fr 0.9fr;
        gap: 22px;
        margin-top: 26px;
        align-items: stretch;
    }

    #sketch-holder {
        width: 100%;
        display: flex;
        justify-content: center;
        overflow: hidden;
        border-radius: 24px;
        background: #FBF7FF;
        border: 1px solid #E9D5FF;
        padding: 14px;
    }

    canvas {
        width: 100% !important;
        height: auto !important;
        border-radius: 20px;
        box-shadow: 0 15px 40px rgba(123, 44, 191, 0.15);
    }

    .hasil-panel {
        background: #ffffff;
        border: 3px dashed #A855F7;
        border-radius: 24px;
        padding: 20px;
        height: 100%;
        color: #4B2673;
        box-shadow: 0 14px 28px rgba(168, 85, 247, 0.13),
                    0 6px 14px rgba(75, 38, 115, 0.06);
    }

    .hasil-panel-title {
        display: inline-block;
        background: linear-gradient(135deg, #8E44AD, #B57EDC);
        color: #ffffff;
        padding: 9px 18px;
        border-radius: 14px;
        font-weight: 800;
        font-size: 0.95rem;
        margin-bottom: 14px;
        box-shadow: 0 6px 14px rgba(142, 68, 173, 0.16);
    }

    #hasilText {
        color: #4B2673;
        line-height: 1.8;
        font-weight: 600;
    }

    .feedback-benar {
        background: #EAFBF1;
        border: 1px solid #BDE8CE;
        border-left: 6px solid #16A34A;
        color: #14532D;
        padding: 16px 18px;
        border-radius: 16px;
        line-height: 1.8;
    }

    .feedback-salah {
        background: #FFF1F2;
        border: 1px solid #FECACA;
        border-left: 6px solid #DC2626;
        color: #7F1D1D;
        padding: 16px 18px;
        border-radius: 16px;
        line-height: 1.8;
    }

    .teks-merah {
        color: #DC2626;
        font-weight: 800;
    }

    .teks-hijau {
        color: #16A34A;
        font-weight: 800;
    }

    .jawaban-box {
        margin-top: 12px;
        padding: 14px 16px;
        background: #FBF7FF;
        border: 1px solid #E9D5FF;
        border-left: 5px solid #8E44AD;
        border-radius: 16px;
        color: #4B2673;
    }

    .latihan-nav {
        width: 100%;
        margin-top: 30px;
        margin-bottom: 35px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 14px;
        flex-wrap: wrap;
    }

    .latihan-nav-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 150px;
        min-height: 46px;
        padding: 8px 18px;
        color: #6A2C70;
        border: 1px solid #E3C7F3;
        border-radius: 12px;
        font-weight: 800;
        background-color: #ffffff;
        box-shadow: 0 2px 6px rgba(0,0,0,0.08);
        text-decoration: none;
        transition: all 0.22s ease;
    }

    .latihan-nav-btn:hover {
        background-color: #F3E5FF;
        color: #4B2673;
        transform: translateY(-2px);
    }

    .latihan-nav-btn.next {
        background: linear-gradient(135deg, #8E44AD, #B57EDC);
        border-color: #B57EDC;
        color: #ffffff;
    }

    .latihan-nav-btn.next:hover {
        color: #ffffff;
        box-shadow: 0 10px 18px rgba(142, 68, 173, 0.18);
    }

    @media (max-width: 992px) {
        .latihan-hero-grid,
        .canvas-result-grid {
            grid-template-columns: 1fr;
        }

        .latihan-text-side {
            padding: 24px;
        }
    }

    @media (max-width: 768px) {
        .content-gap {
            margin-left: 12px;
            margin-right: 12px;
        }

        .materi-style-card,
        .drawing-card {
            padding: 18px;
            border-radius: 20px;
        }

        .materi-style-title {
            font-size: 1.05rem;
            padding: 14px 16px;
            border-radius: 16px;
        }

        .latihan-image-side,
        .latihan-text-side,
        .petunjuk-box,
        .hasil-panel {
            padding: 18px;
            border-radius: 20px;
        }

        .latihan-text-side h2 {
            font-size: 1.25rem;
            text-align: center;
        }

        .latihan-text-side ol,
        .latihan-text-side p {
            font-size: 0.95rem;
        }

        .petunjuk-box h4,
        .hasil-panel-title {
            width: 100%;
            text-align: center;
        }

        .control-row {
            flex-direction: column;
            align-items: stretch;
        }

        .control-row .btn,
        .control-row .form-control,
        .control-row .form-select {
            width: 100% !important;
            max-width: 100% !important;
        }

        #sketch-holder {
            padding: 10px;
        }

        .latihan-nav {
            flex-direction: column;
            align-items: stretch;
        }

        .latihan-nav-btn {
            width: 100%;
        }
    }

    @media (max-width: 480px) {
        .content-gap {
            margin-left: 10px;
            margin-right: 10px;
        }

        .materi-style-card,
        .drawing-card {
            padding: 14px;
        }
    }

    /* ================= HAPUS RUANG KOSONG BAWAH NAVIGASI ================= */

.content-gap {
    padding-bottom: 0 !important;
}

.latihan-nav {
    margin-top: 24px !important;
    margin-bottom: 0 !important;
    padding-bottom: 0 !important;
}

.latihan-nav-btn {
    margin-bottom: 0 !important;
}

/* kalau layout utama masih memberi jarak bawah */
main,
.container,
.container-fluid {
    padding-bottom: 0 !important;
    margin-bottom: 0 !important;
}

/* card terakhir sebelum tombol jangan terlalu jauh */
.content-gap .materi-style-card:last-of-type {
    margin-bottom: 18px !important;
}

</style>

<div class="content-gap" data-materi="materi_1" data-sub-page="latihan" data-total-pages="1">

    <!-- ================= PREMIUM AYO AMATI & LATIHAN ================= -->
    <div class="materi-style-card mt-4">

        <div class="materi-style-title">
            Latihan 1
        </div>

        <div class="materi-style-body">

            <div class="latihan-hero-grid">

                <div class="latihan-image-side">
                    <img src="{{ asset('images/ayo-amati.png') }}">
                </div>

                <div class="latihan-text-side">
                    <div>
                        <h2>
                            Setelah kamu mengamati, sekarang mari berlatih.
                        </h2>

                        <ol>
                            <li>
                                Bentuklah dua himpunan dari anggota keluarga tersebut.
                            </li>

                            <li>
                                Tentukan anggota dari masing-masing himpunan.
                            </li>
                        </ol>

                        <p>
                            Gambarkan himpunan menggunakan
                            <strong>diagram Venn interaktif</strong> di bawah ini.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- ================= LATIHAN 1 ================= -->
    <div class="materi-style-card mt-3">

        <div class="materi-style-title">
            Menggambar Diagram Venn
        </div>

        <div class="materi-style-body">

            <!-- ===== PETUNJUK DALAM 1 KOTAK ===== -->
            <div class="petunjuk-box">

                <h4>📘 PETUNJUK PENGGUNAAN</h4>

                <ol>
                    <li>
                        <b>Buat Semesta</b><br>
                        Klik tombol <span class="badge bg-primary">Buat Semesta</span>
                        untuk menampilkan wilayah himpunan semesta.
                    </li>

                    <li>
                        <b>Buat Himpunan</b><br>
                        Klik tombol <span class="badge bg-primary">Buat Himpunan</span>
                        untuk membuat lingkaran himpunan (A dan B).
                    </li>

                    <li>
                        <b>Isi Nama Anggota</b><br>
                        Ketik nama anggota pada kolom input, lalu pilih himpunan tujuan.
                    </li>

                    <li>
                        <b>Tambah Anggota</b><br>
                        Klik <span class="badge bg-primary">Tambah Anggota</span>
                        untuk memasukkan anggota ke dalam himpunan.
                    </li>

                    <li>
                        <b>Hapus Himpunan</b><br>
                        Pilih huruf himpunan, lalu klik
                        <span class="badge bg-danger">Hapus Himpunan</span>.
                    </li>

                    <li>
                        <b>Periksa & Reset</b><br>
                        Klik <span class="badge bg-success">Periksa</span>
                        untuk melihat isi himpunan.<br>
                        Klik <span class="badge bg-secondary">Reset Semua</span>.
                    </li>
                </ol>

            </div>

            <!-- ===== JUDUL ANIMASI ===== -->
            <h4 class="ayo-title">
                ✏️ Ayo Menggambar
            </h4>

            <!-- ===== AREA GAMBAR ===== -->
            <div class="drawing-card">

                <div class="control-row">
                    <button class="btn btn-primary" onclick="buatSemesta()">Buat Semesta</button>
                    <button class="btn btn-primary" onclick="buatLingkaran()">Buat Himpunan</button>
                    <button class="btn btn-danger" onclick="hapusLingkaran()">Hapus Himpunan</button>
                    <button class="btn btn-success" onclick="periksaDiagram()">Periksa</button>
                    <button class="btn btn-secondary" onclick="resetSemua()">Reset Semua</button>
                </div>

                <div class="control-row">
                    <input id="namaInput" class="form-control" style="max-width:280px;" placeholder="Nama anggota...">

                    <select id="setSelect" class="form-select" style="max-width:200px;">
                        <option>Pilih Himpunan</option>
                    </select>

                    <button class="btn btn-primary" onclick="tambahAnggota()">Tambah Anggota</button>
                </div>

                <div class="canvas-result-grid">

                    <div>
                        <div id="sketch-holder"></div>
                    </div>

                    <div>
                        <div class="hasil-panel">
                            <div class="hasil-panel-title">
                                HASIL PEMERIKSAAN
                            </div>

                            <div id="hasilText" data-exercise="latihan1"></div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <!-- ================= TOMBOL NAVIGASI ================= -->
    <div class="latihan-nav">
        <a href="/bab_1/lanjut_1" class="latihan-nav-btn">
            ← Sebelumnya
        </a>

        <a href="/petunjuk/petunjuk_bab1" class="latihan-nav-btn next" onclick="if(document.getElementById('hasilText').getAttribute('data-correct') === 'true'){ ProgressManager.markSubPageDone('materi_1', 'latihan'); }else{ ProgressManager.showAlert('Selesaikan semua latihan terlebih dahulu!'); return false; }">
            Selanjutnya →
        </a>
    </div>

</div>

<script>
let universe=null;
let sets=[];
let members=[];
let relations=[];
let selectedNode=null;

const kunciJawaban = {
    A: ["Husin", "Jaini", "Rahmah"],
    B: ["Fikri", "Nisa", "Ilham", "Aisyah", "Nabila"]
};

function normalizeText(teks){
    return teks.trim().toLowerCase();
}

function capitalizeNama(nama){
    return nama.charAt(0).toUpperCase() + nama.slice(1);
}

function cariSalahKetik(nama, daftarBenar){
    let n = normalizeText(nama);

    if(n === "rahman"){
        return "Rahmah";
    }

    for(let benar of daftarBenar){
        if(normalizeText(benar) === n){
            return benar;
        }
    }

    return null;
}

function setup(){
    let canvas=createCanvas(900,550);
    canvas.parent("sketch-holder");
    resizeResponsive();
}

function resizeResponsive(){
    let container=document.getElementById("sketch-holder");
    let w=container.offsetWidth;
    resizeCanvas(w,w*0.6);
}

function draw(){

    for(let i=0;i<height;i++){
        let inter=map(i,0,height,0,1);
        let c=lerpColor(color("#ffffff"),color("#ede9fe"),inter);
        stroke(c);
        line(0,i,width,i);
    }

    if(universe) universe.draw();
    sets.forEach(s=>s.draw());

    relations.forEach(r=>{
        stroke("#444");
        strokeWeight(2);
        line(r.from.x,r.from.y,r.to.x,r.to.y);

        let angle = atan2(r.to.y-r.from.y,r.to.x-r.from.x);
        let arrowSize = 8;

        push();
        translate(r.to.x,r.to.y);
        rotate(angle);
        fill("#444");
        triangle(0,0,-arrowSize,-arrowSize/2,-arrowSize,arrowSize/2);
        pop();
    });

    sets.forEach(s=>{
        let list = members.filter(m=>m.set===s);
        list.forEach((m,i)=> m.draw(i));
    });

    if(selectedNode){
        stroke("red");
        noFill();
        ellipse(selectedNode.x,selectedNode.y,14);
    }
}

function mousePressed(){
    members.forEach(m=>{
        if(m.isClicked(mouseX,mouseY)){
            if(selectedNode==null){
                selectedNode=m;
            }else{
                if(selectedNode!==m){
                    relations.push({from:selectedNode,to:m});
                }
                selectedNode=null;
            }
        }
    });
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

function hapusLingkaran(){

    if(sets.length === 0) return;

    let terakhir = sets.pop();

    members = members.filter(m => m.set !== terakhir);

    relations = relations.filter(r =>
        r.from.set !== terakhir &&
        r.to.set !== terakhir
    );

    updateDropdown();

    aturPosisiHimpunan();
}

function updateDropdown(){

    let select = document.getElementById("setSelect");
    select.innerHTML = "";

    let defaultOption = document.createElement("option");
    defaultOption.value = "Pilih Himpunan";
    defaultOption.text = "Pilih Himpunan";
    select.appendChild(defaultOption);

    sets.forEach(s=>{
        let option = document.createElement("option");
        option.value = s.label;
        option.text = s.label;
        select.appendChild(option);
    });

    select.value = "Pilih Himpunan";
}

function aturPosisiHimpunan(){
    if(!universe) return;

    let spacing = universe.w/3;
    let centerY = universe.y + universe.h*0.52;

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
    document.getElementById("setSelect").innerHTML='<option value="Pilih Himpunan">Pilih Himpunan</option>';
    document.getElementById("hasilText").innerHTML="";
}

function periksaDiagram(){

    let hasilBox = document.getElementById("hasilText");

    if(!universe || sets.length < 2){
        hasilBox.innerHTML = `
            <div class="feedback-salah">
                <b>Diagram belum lengkap.</b><br>
                Buat dulu himpunan semesta dan dua himpunan A serta B sebelum diperiksa.
            </div>
        `;
        return;
    }

    let anggotaA = members.filter(m => m.set.label === "A").map(m => m.nama);
    let anggotaB = members.filter(m => m.set.label === "B").map(m => m.nama);

    let normalA = anggotaA.map(n => normalizeText(n));
    let normalB = anggotaB.map(n => normalizeText(n));

    let kunciA = kunciJawaban.A.map(n => normalizeText(n));
    let kunciB = kunciJawaban.B.map(n => normalizeText(n));

    let salahA = [];
    let salahB = [];
    let kurangA = [];
    let kurangB = [];
    let lebihA = [];
    let lebihB = [];

    anggotaA.forEach(nama => {
        let n = normalizeText(nama);

        if(!kunciA.includes(n)){
            let saran = cariSalahKetik(nama, kunciJawaban.A);
            if(saran){
                salahA.push(`${nama} → ${saran}`);
            }else{
                lebihA.push(nama);
            }
        }
    });

    anggotaB.forEach(nama => {
        let n = normalizeText(nama);

        if(!kunciB.includes(n)){
            let saran = cariSalahKetik(nama, kunciJawaban.B);
            if(saran){
                salahB.push(`${nama} → ${saran}`);
            }else{
                lebihB.push(nama);
            }
        }
    });

    kunciJawaban.A.forEach(nama => {
        if(!normalA.includes(normalizeText(nama))){
            kurangA.push(nama);
        }
    });

    kunciJawaban.B.forEach(nama => {
        if(!normalB.includes(normalizeText(nama))){
            kurangB.push(nama);
        }
    });

    let semuaBenar =
        salahA.length === 0 &&
        salahB.length === 0 &&
        kurangA.length === 0 &&
        kurangB.length === 0 &&
        lebihA.length === 0 &&
        lebihB.length === 0;

    if(semuaBenar){
        hasilBox.innerHTML = `
            <div class="feedback-benar">
                <b class="teks-hijau">Jawaban kamu sudah benar.</b><br><br>

                <b>Himpunan A:</b> { Husin, Jaini, Rahmah }<br>
                <b>Himpunan B:</b> { Fikri, Nisa, Ilham, Aisyah, Nabila }<br><br>

                <b>Penjelasan:</b><br>
                Pada diagram Venn, setiap anggota harus ditempatkan pada lingkaran yang sesuai.
                Himpunan A berisi saudara, sedangkan himpunan B berisi anak-anak. Penempatanmu sudah tepat.
            </div>
        `;
        hasilBox.setAttribute('data-correct', 'true');
        return;
    }

    let isiFeedback = `<div class="feedback-salah">`;
    isiFeedback += `<b class="teks-merah">Jawaban kamu masih perlu diperbaiki.</b><br><br>`;

    isiFeedback += `<b>Hasil gambar kamu:</b><br>`;
    isiFeedback += `Himpunan A = { ${anggotaA.length ? anggotaA.join(", ") : "-"} }<br>`;
    isiFeedback += `Himpunan B = { ${anggotaB.length ? anggotaB.join(", ") : "-"} }<br><br>`;

    if(salahA.length > 0 || salahB.length > 0){
        isiFeedback += `<b>Kesalahan penulisan:</b><br>`;

        salahA.forEach(item => {
            isiFeedback += `- Pada himpunan A, <span class="teks-merah">${item}</span><br>`;
        });

        salahB.forEach(item => {
            isiFeedback += `- Pada himpunan B, <span class="teks-merah">${item}</span><br>`;
        });

        isiFeedback += `<br>`;
    }

    if(kurangA.length > 0 || kurangB.length > 0){
        isiFeedback += `<b>Anggota yang belum dimasukkan:</b><br>`;

        if(kurangA.length > 0){
            isiFeedback += `- Himpunan A: <span class="teks-merah">${kurangA.join(", ")}</span><br>`;
        }

        if(kurangB.length > 0){
            isiFeedback += `- Himpunan B: <span class="teks-merah">${kurangB.join(", ")}</span><br>`;
        }

        isiFeedback += `<br>`;
    }

    if(lebihA.length > 0 || lebihB.length > 0){
        isiFeedback += `<b>Anggota yang tidak sesuai:</b><br>`;

        if(lebihA.length > 0){
            isiFeedback += `- Pada himpunan A: <span class="teks-merah">${lebihA.join(", ")}</span><br>`;
        }

        if(lebihB.length > 0){
            isiFeedback += `- Pada himpunan B: <span class="teks-merah">${lebihB.join(", ")}</span><br>`;
        }

        isiFeedback += `<br>`;
    }

    isiFeedback += `
        <div class="jawaban-box">
            <b>Jawaban benar:</b><br>
            Himpunan A = { Husin, Jaini, Rahmah }<br>
            Himpunan B = { Fikri, Nisa, Ilham, Aisyah, Nabila }
        </div>
        <br>
        <b>Penjelasan:</b><br>
        Pada diagram Venn, setiap lingkaran menunjukkan kelompok anggota yang berbeda.
        Jadi nama anggota harus benar dan ditempatkan pada himpunan yang tepat.
    </div>
    `;

    hasilBox.innerHTML = isiFeedback;
}

class Universe{
    constructor(x,y,w,h){
        Object.assign(this,{x,y,w,h});
        this.progress=0;
    }

    draw(){
        this.progress = lerp(this.progress,1,0.05);

        stroke("#7b2cbf");
        strokeWeight(6);
        noFill();
        rect(this.x,this.y,this.w*this.progress,this.h,30);

        if(this.progress>0.95){
            noStroke();
            fill("#4b0082");
            textAlign(CENTER);
            textSize(width*0.03);
            text("HIMPUNAN SEMESTA", this.x+this.w/2, this.y-20);
        }
    }
}

class Himpunan{
    constructor(label,color){
        this.label=label;
        this.color=color;
        this.x=0;
        this.y=0;
        this.r=80;
        this.scale=0;
    }

    draw(){
        this.scale = lerp(this.scale,1,0.08);

        push();
        translate(this.x,this.y);
        scale(this.scale);

        noFill();
        stroke(this.color);
        strokeWeight(5);
        ellipse(0,0,this.r*1.6,this.r*2.6);

        noStroke();
        fill("#4b0082");
        textAlign(CENTER);
        textSize(width*0.035);
        text(this.label,0,-this.r*1.5);

        pop();
    }
}

class Member{
    constructor(nama,set){
        this.nama=nama;
        this.set=set;
        this.x=0;
        this.y=0;
        this.radius=4;
    }

    updatePosition(index){

        let list = members.filter(m=>m.set===this.set);
        let total = list.length;

        let spacing = 35;
        let startY = this.set.y - ((total - 1) * spacing) / 2;
        this.y = startY + index * spacing;

        if(this.set.label==="A"){
            this.x = this.set.x + 28;
        }else{
            this.x = this.set.x - 28;
        }
    }

    draw(index){

        this.updatePosition(index);

        textSize(18);
        textAlign(CENTER, CENTER);

        fill(0);
        ellipse(this.x, this.y, this.radius*2);

        let padding = 15;

        if(this.set.label==="A"){

            let w = textWidth(this.nama);

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@endsection