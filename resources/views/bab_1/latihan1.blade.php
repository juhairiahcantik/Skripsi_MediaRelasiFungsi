
<title>Latihan Diagram Himpunan</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.9.0/p5.min.js"></script>

<style>
body{
    overflow-x:hidden;
}

.content-wrapper{
    width:100%;
    margin:auto;
    padding:40px 40px 0 40px;
}

.control-row{
    display:flex;
    justify-content:center;
    gap:15px;
    flex-wrap:wrap;
    margin-top:10px;
}

#sketch-holder{
    width:100%;
    display:flex;
    justify-content:center;
}

canvas{
    width:100%!important;
    height:auto!important;
    border-radius:20px;
    box-shadow:0 15px 40px rgba(123,44,191,0.15);
}

/* ===== FIX HEADER GARIS ===== */

/* Paksa card utama potong header sesuai radius */
.card.shadow-lg{
    overflow:hidden;
}

/* Hilangkan border bawaan bootstrap */
.card-header{
    border-bottom:none !important;
    box-shadow:none !important;
}

/* Pastikan radius atas ikut parent */
.card.shadow-lg .card-header{
    border-top-left-radius:30px !important;
    border-top-right-radius:30px !important;
}

/* ====== ANIMASI JUDUL ====== */
.ayo-title{
    font-size:30px;
    font-weight:800;
    color:#7b2cbf;
    animation:floatText 3s ease-in-out infinite;
    text-shadow:0 0 15px rgba(123,44,191,0.4);
}

@keyframes floatText{
    0%{transform:translateY(0);}
    50%{transform:translateY(-8px);}
    100%{transform:translateY(0);}
}


.petunjuk-box{
    margin:10px auto 15px auto;
    padding:25px 35px;
    border:4px solid #7A4BC4;
    border-radius:25px;
    background:linear-gradient(135deg,#ffffff,#f4ecff);
    box-shadow:0 12px 30px rgba(122,75,196,0.12);
}

.petunjuk-box h4{
    text-align:center;
    font-weight:700;
    color:#6a0dad;
    margin-bottom:20px;
}

.petunjuk-box ol{
    font-size:16px;
    line-height:1.8;
    padding-left:20px;
    margin-bottom:0;
}

.petunjuk-box li{
    margin-bottom:14px;
}

.feedback-benar{
    background:#ecfdf5;
    border:2px solid #86efac;
    color:#166534;
    padding:14px;
    border-radius:14px;
    line-height:1.7;
}

.feedback-salah{
    background:#fef2f2;
    border:2px solid #fca5a5;
    color:#991b1b;
    padding:14px;
    border-radius:14px;
    line-height:1.7;
}

.teks-merah{
    color:#dc2626;
    font-weight:700;
}

.teks-hijau{
    color:#15803d;
    font-weight:700;
}

.jawaban-box{
    margin-top:10px;
    padding:10px 12px;
    background:#faf5ff;
    border:1.5px solid #d8b4fe;
    border-radius:12px;
}

</style>
</head>

<body>

@extends('layouts.main')
@section('container')

<div class="content-wrapper">
<!-- ================= PREMIUM AYO AMATI & LATIHAN ================= -->

<div class="card shadow-lg mt-4"
     style="border:3px solid #7A4BC4; border-radius:30px; overflow:hidden;">

    <!-- HEADER -->
    <div class="card-header text-center"
     style="background:linear-gradient(90deg,#9d4edd,#7b2cbf);
            color:white;
            font-size:1.4rem;
            font-weight:700;
            padding:12px 0;">
        Latihan 1
    </div>

    <div class="row g-0">

        <!-- ========= 60% GAMBAR ========= -->
        <div class="col-lg-7 col-md-7 d-flex align-items-center justify-content-center"
             style="background:#ffffff; min-height:520px; padding:30px;">

            <img src="{{ asset('images/ayo-amati.png') }}"
                 style="width:100%;
                        max-height:500px;
                        object-fit:contain;
                        border-radius:20px;
                        box-shadow:0 15px 40px rgba(122,75,196,0.18);">
        </div>


        <!-- ========= 40% LATIHAN ========= -->
        <div class="col-lg-5 col-md-5 d-flex align-items-center"
     style="background:#f8f2ff; padding:60px; min-height:520px;">

          <div>

    <h2 style="font-weight:700; 
               margin-bottom:30px;
               font-size:28px;">
        Setelah kamu mengamati, sekarang mari berlatih.
    </h2>

    <ol style="font-size:18px; line-height:1.9;">
        <li>
            Bentuklah dua himpunan dari anggota keluarga tersebut.
        </li>

        <li>
            Tentukan anggota dari masing-masing himpunan.
        </li>
    </ol>

    <p style="font-size:18px; margin-top:20px;">
        Gambarkan himpunan menggunakan 
        <strong>diagram Venn interaktif</strong> di bawah ini.
    </p>

</div>

        </div>

    </div>

</div>
<br>
<!-- ================= LATIHAN 1 ================= -->

<div class="card shadow-lg mt-3"
     style="border:3px solid #7f3ab7;border-radius:30px;overflow:hidden;">

    <!-- HEADER -->
    <div class="card-header text-center"
         style="background:linear-gradient(90deg,#9d4edd,#7b2cbf);
                color:white;
                font-size:1.4rem;
                font-weight:700;
                padding:12px;">
      Menggambar Diagram Venn
    </div>

    <!-- BODY -->
    <div class="card-body p-3"
         style="background:#f3e8ff;">

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
<h4 class="text-center ayo-title mb-4">
✏️ Ayo Menggambar
</h4>

<!-- ===== AREA GAMBAR ===== -->

<div class="card"
style="border:3px solid #7f3ab7;border-radius:25px;">

<div class="card-body">

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

<div class="row mt-4">

<div class="col-md-8">
<div id="sketch-holder"></div>
</div>

<div class="col-md-4">
<div class="p-3"
style="background:white;border:3px solid #7f3ab7;border-radius:25px;height:100%;">
<b>HASIL PEMERIKSAAN:</b>
<div id="hasilText" class="mt-3"></div>
</div>
</div>

</div>
</div>
</div>

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

    // Background gradient
    for(let i=0;i<height;i++){
        let inter=map(i,0,height,0,1);
        let c=lerpColor(color("#ffffff"),color("#ede9fe"),inter);
        stroke(c);
        line(0,i,width,i);
    }

    if(universe) universe.draw();
    sets.forEach(s=>s.draw());

    // Relasi
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

    // Members
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

    if(sets.length >= 2) return; // hanya A & B

    let label = sets.length === 0 ? "A" : "B";
    let color = label==="A" ? "#ff006e" : "#3a86ff";

    sets.push(new Himpunan(label,color));
    aturPosisiHimpunan();
    updateDropdown();
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

    // cek anggota A
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

    // cek anggota B
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

    // cek yang kurang di A
    kunciJawaban.A.forEach(nama => {
        if(!normalA.includes(normalizeText(nama))){
            kurangA.push(nama);
        }
    });

    // cek yang kurang di B
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
        return;
    }

    let isiFeedback = `<div class="feedback-salah">`;
    isiFeedback += `<b class="teks-merah">Jawaban kamu masih perlu diperbaiki.</b><br><br>`;

    // tampilkan hasil input siswa dulu
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- ================= TOMBOL NAVIGASI ================= -->
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center">

            <!-- Tombol Sebelumnya -->
            <a href="/bab_1/lanjut_1" class="btn btn-success px-4">
                ← Sebelumnya
            </a>

            <!-- Tombol Selanjutnya -->
            <a href="/petunjuk/petunjuk_bab1" class="btn btn-success px-4">
                Selanjutnya →
            </a>

        </div>
    </div>
</div>
@endsection

