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
}
    </style>
</head>

<body>

@extends('layouts.main')

@section('container')

<div class="content-gap">
<br>
<!-- ======================== Latihan 4 ======================== -->
<div class="card mt-4" style="width:100%; border:2px solid #7f3ab7;">

    <!-- HEADER -->
    <div class="card-header text-center"
         style="background-color:#7f3ab7; color:white; font-size:1.3rem; font-weight:700;">
        Latihan 4
    </div>

    <div class="card-body p-0">

        <div class="row g-0 align-items-stretch">

            <!-- KOLOM GAMBAR KIRI -->
            <div class="col-lg-6 col-md-6 col-12 d-flex">
                <img src="{{ asset('images/latihan41.png') }}" 
                    alt="Latihan 4 Kiri"
                    class="img-fluid w-100 h-100"
                    style="object-fit: contain;">
            </div>

            <!-- KOLOM GAMBAR KANAN -->
            <div class="col-lg-6 col-md-6 col-12 d-flex">
                <img src="{{ asset('images/latihan42.png') }}" 
                    alt="Latihan 4 Kanan"
                    class="img-fluid w-100 h-100"
                    style="object-fit: contain;">
            </div>
 <!-- ===== TEKS DAN SOAL ===== -->
        <div class="p-4 p-md-5">

            <h4 class="fw-bold text-center">
                Setelah kamu mengamati, sekarang mari berlatih.
            </h4>

            <hr class="my-4">

            <!-- ================= SOAL 1 ================= -->

            <h5 class="fw-bold">
                1. Lengkapilah kesimpulan berikut berdasarkan pengamatanmu.
            </h5>

            <p class="mt-3">
                Hubungan antara alat musik tradisional dan daerah asalnya 
                disebut <b>korespondensi satu-satu</b> karena setiap alat musik 
                berasal dari 
                <input type="text" id="jawab1" 
                       class="form-control d-inline w-25 mx-2 text-center"> 
                daerah dan setiap daerah memiliki 
                <input type="text" id="jawab2" 
                       class="form-control d-inline w-25 mx-2 text-center"> 
                alat musik khas.
            </p>

            <button class="btn btn-success mt-3" onclick="periksaIsian()">
                Periksa Jawaban
            </button>

            <div id="feedback1" class="mt-4"></div>

            <hr class="my-4">

            <h5 class="fw-bold">
                2. Sajikan hubungan tersebut dalam bentuk diagram panah!
            </h5>

        </div>
<script>
function normalisasi(teks){
    return teks.toLowerCase().trim();
}

function periksaIsian(){

    let j1 = normalisasi(document.getElementById("jawab1").value);
    let j2 = normalisasi(document.getElementById("jawab2").value);

    let benar1 = (j1 === "satu");
    let benar2 = (j2 === "satu");

    let output = "";

    if(benar1 && benar2){
        output = `
        <div class="alert alert-success">
        <strong>Benar! 🎉</strong><br><br>
        Setiap alat musik dipasangkan dengan tepat satu daerah,
        dan setiap daerah memiliki tepat satu alat musik khas.
        Oleh karena itu, hubungan ini disebut <b>korespondensi satu-satu</b>.
        </div>`;
    } else {
        output = `
        <div class="alert alert-danger">
        <strong>Belum Tepat.</strong><br><br>
        Perhatikan kembali arti korespondensi satu-satu.
        Berapa banyak pasangan yang dimiliki setiap anggota?
        </div>`;
    }

    document.getElementById("feedback1").innerHTML = output;
}
</script>
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
            padding:18px;">
   Menyajikan hubungan dengan bentuk diagram Panah
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
✏️ Ayo Kita Sajikan Korespondensi Satu-satu
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
function normalisasi(teks){
    return teks.toLowerCase().trim();
}

function periksaDiagram(){

    const kunciJawaban = [
        ["Panting","Tapin"],
        ["Babun","Hulu Sungai Selatan"],
        ["Serunai","Barito Kuala"],
        ["Gamelan Banjar","Banjarmasin"]
    ];

    let jawabanSiswa = relations.map(r => 
        [
            normalisasi(r.from.nama),
            normalisasi(r.to.nama)
        ]
    );

    let benar = 0;
    let salah = [];
    let kurang = [];

    jawabanSiswa.forEach(js => {
        let ditemukan = kunciJawaban.some(k =>
            normalisasi(k[0]) === js[0] &&
            normalisasi(k[1]) === js[1]
        );
        if(ditemukan){
            benar++;
        }else{
            salah.push("("+js[0]+" → "+js[1]+")");
        }
    });

    kunciJawaban.forEach(k => {
        let ada = jawabanSiswa.some(js =>
            normalisasi(k[0]) === js[0] &&
            normalisasi(k[1]) === js[1]
        );
        if(!ada){
            kurang.push("("+k[0]+" → "+k[1]+")");
        }
    });

   let output = "";

if(benar===kunciJawaban.length && salah.length===0){

    output += `
    🎉 <b>Luar biasa! Diagram panah yang kamu buat sudah benar.</b><br><br>

    Setiap alat musik dipasangkan dengan tepat satu daerah asal,
    dan setiap daerah memiliki tepat satu alat musik khas.<br><br>

    📝 <b>Kesimpulan:</b><br>
    Hubungan tersebut merupakan <b>korespondensi satu-satu</b>
    karena setiap anggota pada himpunan A memiliki tepat satu pasangan
    di himpunan B, dan sebaliknya.
    `;

} else {

    output += "";
    output += "✅ Benar: "+benar+" dari "+kunciJawaban.length+"<br><br>";

    if(salah.length>0){
        output += "❌ Pasangan tidak sesuai:<br>";
        output += salah.join("<br>")+"<br><br>";
    }

    if(kurang.length>0){
        output += "⚠ Pasangan yang belum dibuat:<br>";
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
        ellipse(this.x,this.y,this.r*1.9,this.r*2.6);

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

}

   draw(index){

    this.updatePosition(index);

    textSize(16);
    textAlign(CENTER, CENTER);
    fill(0);

    let gap = 15; // jarak teks dari titik

    if(this.set.label==="A"){

        // 🔵 titik A tetap & lurus
        this.x = this.set.x + this.set.r * 0.55;

        ellipse(this.x, this.y, this.radius*2);

        // teks di kiri titik
        text(this.nama,
             this.x - this.radius - gap - textWidth(this.nama)/2,
             this.y);

    }else{

        // 🔵 titik B simetris & lurus
        this.x = this.set.x - this.set.r * 0.55;

        ellipse(this.x, this.y, this.radius*2);

        // teks di kanan titik
        text(this.nama,
             this.x + this.radius + gap + textWidth(this.nama)/2,
             this.y);
    }
}
    isClicked(mx,my){
        return dist(mx,my,this.x,this.y) < this.radius + 4;
    }
}

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center">

            <!-- Tombol Sebelumnya (Hijau) -->
            <a href="/bab_1/lanjut_4" class="btn btn-success px-4">
                ← Sebelumnya
            </a>

            <!-- Tombol Selanjutnya -->
            <a href="/petunjuk/petunjuk_bab4" class="btn btn-success px-4">
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
