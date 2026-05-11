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
        /* ===== RESPONSIVE CONTROL ===== */
.control-row{
    display:flex;
    flex-wrap:wrap;
    gap:10px;
    justify-content:center;
    margin-bottom:15px;
}

.control-row .btn{
    min-width:140px;
}

.input-row{
    display:flex;
    flex-wrap:wrap;
    gap:10px;
    justify-content:center;
    margin-bottom:20px;
}

.input-row input{
    width:280px;
}

.input-row select{
    width:200px;
}

.input-row button{
    width:180px;
}

@media(max-width:768px){
    .input-row input,
    .input-row select,
    .input-row button{
        width:100%;
    }

    </style>
</head>

<body>

@extends('layouts.main')

@section('container')

<div class="content-gap">
<br>
<!-- ======================== Latihan 3 ======================== -->
<div class="card mt-4" style="width:100%; border:2px solid #7f3ab7;">

    <div class="card-header text-center"
     style="background:linear-gradient(90deg,#9d4edd,#7b2cbf);
            color:white;
            font-size:1.4rem;
            font-weight:700;
            padding:8px 0;">
        Latihan 3
    </div>

    <div class="card-body p-0">

        <div class="row g-0 align-items-stretch">

            <!-- KOLOM GAMBAR -->
           <div class="col-lg-6 col-md-6 col-12 d-flex">
                <img src="{{ asset('images/latihan3.png') }}" 
                    alt="Latihan 3"
                    class="img-fluid w-100 h-100"
                    style="object-fit: contain;">
            </div>

            <!-- KOLOM TEKS -->
            <div class="col-lg-6 col-md-6 col-12 d-flex align-items-center"
                 style="background:#ffffff;">

                <div class="p-4 p-md-5">

                    <h4 class="fw-bold">
                        Setelah kamu mengamati, sekarang mari berlatih.
                    </h4>

                    <p class="mt-3">
                        Apakah jumlah loyang kue Amparan Tatak (x) dan 
                        total harga (f(x)) merupakan fungsi atau bukan?
                    </p>

                   <div class="my-4">
    <button class="btn btn-success px-4 me-2"
        onclick="document.getElementById('feedback').innerHTML=
        '<div class=\'alert alert-success mt-3\'>\
        <strong>Benar! Ini merupakan Fungsi.</strong><br><br>\
        Suatu relasi disebut <b>fungsi</b> jika <b>setiap nilai x</b> \
        dipasangkan dengan <b>tepat satu nilai f(x)</b>.<br><br>\
        Pada contoh ini:\
        <ul>\
            <li>1 loyang → Rp20.000</li>\
            <li>2 loyang → Rp40.000</li>\
            <li>3 loyang → Rp60.000</li>\
        </ul>\
        Setiap jumlah loyang hanya memiliki <b>satu</b> total harga. \
        Tidak ada satu jumlah loyang yang memiliki dua harga berbeda. \
        Karena itu, relasi ini disebut <b>fungsi</b>.\
        </div>'">
        Fungsi
    </button>

    <button class="btn btn-danger px-4"
        onclick="document.getElementById('feedback').innerHTML=
        '<div class=\'alert alert-danger mt-3\'>\
        <strong>Kurang Tepat.</strong><br><br>\
        Relasi ini sebenarnya adalah <b>fungsi</b>, karena setiap jumlah loyang \
        hanya memiliki satu total harga.\
        <br><br>\
        Suatu relasi disebut <b>bukan fungsi</b> jika ada satu nilai x \
        yang memiliki lebih dari satu nilai f(x).\
        </div>'">
        Bukan Fungsi
    </button>
</div>

                    <div id="feedback"></div>

                    <p class="mt-3">
                        Berdasarkan hasil penyelidikanmu tadi, sajikan relasimu 
                        dalam <strong>5 bentuk penyajian</strong>!
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.9.0/p5.min.js"></script>

<div class="card mt-4" style="width:100%; border:2px solid #7f3ab7;">
    

<div class="card-header text-center"
     style="background:linear-gradient(90deg,#9d4edd,#7b2cbf);
            color:white;
            font-size:1.4rem;
            font-weight:700;
            padding:8px;">
   Cara 1: Diagram Panah
</div>


<!-- ================= PETUNJUK ================= -->
<div class="px-4 pt-4">

<div class="p-4 mb-4 mx-auto"
     style="background:white;
            border:3px solid #7f3ab7;
            border-radius:25px;
            max-width:95%;">
📘 Petunjuk Penggunaan
</h5>

<ol>
            <li>
                <b>Buat Semesta</b><br>
                Klik tombol 
                <span class="badge bg-primary">Buat Semesta</span> 
                untuk menampilkan wilayah himpunan semesta.
            </li>

            <li>
                <b>Buat Himpunan</b><br>
                Klik tombol 
                <span class="badge bg-primary">Buat Himpunan</span> 
                untuk membuat lingkaran himpunan (A dan B).
            </li>

            <li>
                <b>Isi Nama Anggota</b><br>
                Ketik nama anggota pada kolom input, lalu pilih himpunan tujuan.
            </li>

            <li>
                <b>Tambah Anggota</b><br>
                Klik 
                <span class="badge bg-primary">Tambah Anggota</span> 
                untuk memasukkan anggota ke dalam himpunan.
            </li>

            <li>
                <b>Membuat Panah (Relasi)</b><br>
                Klik <b>lingkaran hitam</b> pada satu anggota himpunan,<br>
                lalu klik <b>lingkaran hitam</b> pada anggota himpunan lainnya.<br>
                Panah relasi akan muncul otomatis.
            </li>

            <li>
                <b>Hapus Panah (Relasi)</b><br>
                Klik 
                <span class="badge bg-warning text-dark">Hapus Panah</span> 
                untuk mengaktifkan mode hapus.<br>
                Panah akan berubah warna menjadi <b>merah</b>.<br>
                Klik panah yang ingin dihapus.<br>
                Setelah selesai, klik kembali tombol 
                <span class="badge bg-warning text-dark">Hapus Panah</span> 
                untuk kembali ke mode normal.
            </li>

            <li>
                <b>Hapus Himpunan</b><br>
                Pilih huruf himpunan, lalu klik 
                <span class="badge bg-danger">Hapus Himpunan</span> 
                untuk menghapus himpunan beserta anggotanya.
            </li>

            <li>
                <b>Periksa & Reset</b><br>
                Klik 
                <span class="badge bg-success">Periksa</span> 
                untuk melihat isi himpunan.<br>
                Klik 
                <span class="badge bg-secondary">Reset Semua</span> 
                untuk menghapus semua dan kembali ke tampilan awal.
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
<br>
</div>



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
    let w=container.offsetWidth;
    resizeCanvas(w,w*0.6);
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
<!-- ================= CARA 2 DROPDOWN LENGKAP ================= -->
<div class="card mt-5"
     style="
        border:1px solid #7f3ab7;
        border-radius:15px;
        overflow:hidden;
        background:#ffffff;
        box-shadow:none;
     ">

    <div class="card-header text-center"
         style="
            background:linear-gradient(90deg,#9d4edd,#7b2cbf);
            color:white;
            font-size:1.4rem;
            font-weight:700;
            border-bottom:2px solid #7f3ab7;
            border-radius:0;
            margin:0;
            padding:8px 5px;
         ">
        Cara 2: Himpunan Pasangan Berurutan
    </div>

    <div class="card-body p-4 text-center">

<div class="card-body p-4 text-center">

<p>Susun relasi dalam bentuk himpunan pasangan berurutan:</p>

<h4 style="font-family:'Times New Roman', serif;">
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

<br>

<button class="btn btn-success px-4 me-2" onclick="cekPasangan()">
Periksa Jawaban
</button>

<button class="btn btn-secondary px-4" onclick="resetPasangan()">
Reset
</button>

<div id="hasilPasangan" class="mt-4"></div>

</div>
</div>

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
</div>
<!-- ================= CARA 3 ================= -->
<div class="card mt-5"
     style="
        border:1px solid #7f3ab7;
        border-radius:20px;
        overflow:hidden;
        background:#ffffff;
        box-shadow:none;
     ">

    <div class="card-header text-center"
         style="
            background:linear-gradient(90deg,#9d4edd,#7b2cbf);
            color:white;
            font-size:1.4rem;
            font-weight:700;
            border-bottom:1px solid #7f3ab7;
            border-radius:0;
            margin:0;
            padding:8px 20px;
         ">
        Cara 3: Persamaan Fungsi
    </div>

    <div class="card-body p-4 text-center">

<p>
Tentukan persamaan fungsi dari jumlah loyang (<b>x</b>) ke total harga <b>f(x)</b>.
</p>

<h4 style="font-family:'Times New Roman', serif;">
f(x) =
<input type="text" id="persamaanInput"
       class="form-control d-inline-block text-center"
       style="max-width:250px;border:2px solid #9d4edd;"
       placeholder="Contoh: 80000x">
</h4>

<br>

<button class="btn px-4 me-2"
        style="background:#7b2cbf;color:white;"
        onclick="cekPersamaan()">
Periksa Jawaban
</button>

<button class="btn btn-secondary px-4"
        onclick="resetPersamaan()">
Reset
</button>

<div id="hasilPersamaan" class="mt-4"></div>

<hr class="mt-5">

<h5 style="color:#7b2cbf;font-weight:600;">
Uji Nilai Fungsi
</h5>

<p>Hitung nilai berikut menggunakan persamaan yang benar:</p>

<div class="row justify-content-center">

<div class="col-md-3">
f(1) =
<input type="text" id="f1"
       class="form-control text-center"
       style="border:2px solid #9d4edd;">
</div>

<div class="col-md-3">
f(2) =
<input type="text" id="f2"
       class="form-control text-center"
       style="border:2px solid #9d4edd;">
</div>

<div class="col-md-3">
f(3) =
<input type="text" id="f3"
       class="form-control text-center"
       style="border:2px solid #9d4edd;">
</div>

</div>

<br>

<button class="btn px-4"
        style="background:#9d4edd;color:white;"
        onclick="cekNilai()">
Cek Nilai
</button>

<div id="hasilNilai" class="mt-4"></div>

</div>
</div>

<script>

/* ================= CEK PERSAMAAN ================= */
function cekPersamaan(){

    let input = document.getElementById("persamaanInput").value;

    input = input.replace(/\s/g,"").toLowerCase();
    input = input.replace(/\./g,"");

    if(input==="20000x" || input==="20000*x"){
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
<!-- ================= CARA 4 ================= -->
<div class="card mt-5"
     style="
        width:100%;
        border:1px solid #7f3ab7;
        border-radius:20px;
        overflow:hidden;
        background:#ffffff;
        box-shadow:none;
     ">

    <div class="card-header text-center"
         style="
            background:linear-gradient(90deg,#9d4edd,#7b2cbf);
            color:white;
            font-size:1.4rem;
            font-weight:700;
            border-bottom:1px solid #7f3ab7;
            border-radius:0;
            margin:0;
            padding:12px 20px;
         ">
        Cara 4: Dengan Tabel
    </div>

    <div class="card-body p-4">

<p>
Lengkapi tabel berikut menggunakan rumus <b>f(x) = 20000x</b>
</p>

<div class="table-responsive">
<table class="table table-bordered text-center align-middle"
       style="border:2px solid #7b2cbf;">
<thead style="background:#ede9fe;">
<tr>
<th style="width:50%">x (Jumlah Loyang)</th>
<th>f(x) (Total Harga)</th>
</tr>
</thead>
<tbody>
<tr>
<td>4</td>
<td>
<input type="text" id="t4"
       class="form-control text-center"
       style="border:2px solid #9d4edd;">
</td>
</tr>
<tr>
<td>6</td>
<td>
<input type="text" id="t6"
       class="form-control text-center"
       style="border:2px solid #9d4edd;">
</td>
</tr>
<tr>
<td>9</td>
<td>
<input type="text" id="t9"
       class="form-control text-center"
       style="border:2px solid #9d4edd;">
</td>
</tr>
</tbody>
</table>
</div>

<br>

<button class="btn px-4"
        style="background:#9d4edd;color:white;"
        onclick="cekTabelBaru()">
Periksa Tabel
</button>

<button class="btn btn-secondary px-4"
        onclick="resetTabelBaru()">
Reset
</button>

<div id="hasilTabelBaru" class="mt-4"></div>

</div>
</div>

<script>

/* ================= CEK TABEL BARU ================= */
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
<!-- ================= LATIHAN 2 ================= -->
<div class="card shadow-lg mt-4" style="border:3px solid #7f3ab7;border-radius:30px;overflow:hidden;">

  <!-- HEADER -->
  <div class="card-header text-center"
       style="background:linear-gradient(90deg,#9d4edd,#7b2cbf);
              color:white;
              font-size:1.4rem;
              font-weight:700;
              padding:8px;">
    Cara 5: Dengan Grafik
  </div>

  <!-- BODY MATERI -->
  <div class="card-body p-4" style="background:#f3e8ff;">

  <div class="p-4"
       style="background:white;
              border:3px solid #7f3ab7;
              border-radius:25px;">




    <p style="font-size:16px; line-height:1.9;">
      Pada grafik fungsi, setiap nilai x dipasangkan dengan tepat satu nilai y.
      Setiap pasangan berurutan (x, y) dinyatakan sebagai satu titik
      pada bidang Kartesius.
    </p>

    <p style="font-size:16px; line-height:1.9;">
      Kumpulan titik-titik tersebut membentuk grafik fungsi
      yang menunjukkan hubungan antara variabel x dan variabel y.
    </p>

  

  </div>

</div>
  <!-- PETUNJUK -->
<div class="card-body p-4" style="background:#f3e8ff;">
  <div class="p-4"
       style="background:white;
              border:3px solid #7f3ab7;
              border-radius:25px;">

    <h5 class="text-center mb-4"
        style="color:#7b2cbf;font-weight:700;">
      📘 Petunjuk Penggunaan
    </h5>

    <ol style="font-size:16px; line-height:1.9;">

      <li>
        Masukkan jumlah nilai pada <b>sumbu X</b> dan <b>sumbu Y</b>.
      </li>

      <li>
        Klik <span class="badge bg-primary">📊 Gambar Grafik</span> 
        untuk menampilkan bidang koordinat.
      </li>

      <li>
        Klik <span class="badge bg-info text-dark">🔢 Isi Sumbu X</span>, 
        lalu masukkan nilai x (1, 2, dan 3).
      </li>

      <li>
        Klik <span class="badge bg-info text-dark">🔢 Isi Sumbu Y</span>, 
        lalu masukkan nilai f(x) sesuai rumus <b>f(x) = 20.000x</b>.
      </li>

      <li>
        Pilih <span class="badge bg-success">🔵 Tambah Titik</span>, 
        kemudian klik titik yang sesuai dengan pasangan berurut (x, f(x)).
      </li>

      <li>
        Jika salah memilih titik, klik 
        <span class="badge bg-warning text-dark">❌ Hapus Titik</span> 
        lalu klik titik yang ingin dihapus.
      </li>

      <li>
        Setelah selesai, klik 
        <span class="badge bg-success">✅ Periksa Jawaban</span> 
        untuk melihat apakah grafik sudah sesuai dengan fungsi.
      </li>

      <li>
        Jika ingin mengulang dari awal, klik 
        <span class="badge bg-danger">🗑 Reset</span>.
      </li>

    </ol>

  </div>
</div>

  <div class="container mt-4">

  <div class="card p-4"
       style="background:#f8f3ff;
              border:3px solid #7b2cbf;
              border-radius:20px;">

    <p>
      Diketahui data sebagai berikut:
    </p>

    <ul>
      <li>Harga 1 loyang Amparan Tatak Rp20.000.</li>
      <li>Seorang pembeli membeli 3 loyang.</li>
      <li>Hubungan antara jumlah loyang (x) dan total harga dinyatakan dengan fungsi f(x) = 20.000x.</li>
    </ul>

    <p>
      Gambarkan grafik fungsi tersebut untuk nilai x = 1, 2, dan 3 dibawah ini .
    </p>

  </div>

</div>

  <!-- ================= HEADER INTERAKTIF ================= -->
  <div class="mb-3"
       style="width:100%;
              max-width:1300px;
              margin:20px auto 5px auto;">

    <div style="background:rgba(255,255,255,0.9);
                border-radius:18px;
                padding:15px 30px;
                box-shadow:0 8px 25px rgba(123,44,191,0.12);
                text-align:center;">

      <h2 style="font-weight:700;
                 font-size:24px;
                 margin-bottom:4px;
                 color:#7b2cbf;">
        ✨ Menggambar Grafik
      </h2>

    

      <div style="width:100px;height:3px;margin:10px auto 0;
                  border-radius:10px;
                  background:linear-gradient(90deg,#7b2cbf,#c77dff);">
      </div>

    </div>
  </div>

<!-- ================= AREA GRAFIK ================= -->
<div class="container-fluid mt-0">

<style>
.equal-height{
    display:flex;
    align-items:stretch;
}

#canvas-wrapper{
    background:white;
    border:3px solid #7b2cbf;
    border-radius:20px;
    padding:20px;
    box-shadow:0 10px 30px rgba(123,44,191,0.15);
    position:relative;
    overflow:hidden;
    height:420px;          /* 🔥 Tetap */
}

.hasil-box{
    background:white;
    border:3px solid #7b2cbf;
    border-radius:20px;
    padding:25px;
    box-shadow:0 10px 30px rgba(123,44,191,0.15);
    position:relative;
    height:420px;          /* 🔥 Tinggi tetap */
    overflow-y:auto;       /* 🔥 Bisa scroll */
}

#feedback-area{
    margin-top:15px;
    font-weight:600;
}
</style>

<div class="row g-4 equal-height">

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

<div id="feedback-area"></div>

</div>
</div>

</div>

<div id="koordinat-controls" class="mt-4 text-center"></div>
</div>

<script>

let koordinatSketch = function(p){

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
let w = wrapper.offsetWidth;
let h = wrapper.offsetHeight;
let canvas = p.createCanvas(w, h);
canvas.parent("koordinat-canvas");
p.textFont("Arial");
createUI();
};

window.addEventListener("resize", function(){
let wrapper = document.getElementById("canvas-wrapper");
p.resizeCanvas(wrapper.offsetWidth, wrapper.offsetHeight);
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
alert("Isi semua anggota himpunan dulu.");
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
alert("Klik Gambar Grafik dulu.");
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
</div>

<!-- ================= TOMBOL NAVIGASI ================= -->
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center">

            <!-- Tombol Sebelumnya -->
            <a href="/bab_1/lanjut_3_1" class="btn btn-success px-4">
                ← Sebelumnya
            </a>

            <!-- Tombol Selanjutnya -->
            <a href="/petunjuk/petunjuk_bab3" class="btn btn-success px-4">
                Selanjutnya →
            </a>

        </div>
    </div>
</div>

</div>
</div>
@endsection


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
