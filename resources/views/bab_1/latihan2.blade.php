
<title>Latihan Diagram Himpunan</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.9.0/p5.min.js"></script>

<style>
body{
    overflow-x:hidden;
}

.content-wrapper{
    width:95%;
    max-width:1350px;
    margin:auto;
    padding:40px 0 0 0;
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

</style>
</head>

<body>

@extends('layouts.main')
@section('container')

<div class="content-wrapper">

<!-- ================= LATIHAN 2 ================= -->
<div class="card shadow-lg mt-4"
     style="border:3px solid #7b2cbf; border-radius:28px; overflow:hidden;">

  <!-- HEADER -->
  <div class="card-header text-center"
       style="background:linear-gradient(90deg,#9d4edd,#7b2cbf);
              color:white;
              font-size:1.45rem;
              font-weight:700;
              padding:12px;">
    Latihan 2
  </div>

  <!-- BODY -->
  <div class="card-body p-0" style="background:#ffffff;">

    <style>
      .latihan2-row{
          background:#ffffff;
      }

      .latihan2-img-wrap{
          padding:22px 18px 22px 22px;
          display:flex;
          justify-content:center;
          align-items:center;
          background:#ffffff;
      }

      .latihan2-img{
          width:100%;
          max-width:820px;
          height:auto;
          object-fit:contain;
          display:block;
          border-radius:18px;
      }

      .latihan2-side{
          padding:42px 34px;
          background:#f5f1fb;
          display:flex;
          flex-direction:column;
          justify-content:center;
          height:100%;
      }

      .latihan2-intro{
          font-size:1.05rem;
          font-weight:600;
          line-height:1.8;
          margin-bottom:18px;
          color:#222;
      }

      .latihan2-text{
          font-size:1rem;
          line-height:1.9;
          color:#333;
      }

      .latihan2-text ul{
          padding-left:22px;
          margin-bottom:16px;
      }

      .latihan2-text li{
          margin-bottom:10px;
      }

      .latihan2-highlight{
          font-weight:700;
          color:#6a0dad;
      }

      @media (max-width: 992px){
          .latihan2-img-wrap{
              padding:18px;
          }

          .latihan2-side{
              padding:24px 22px 28px;
          }

          .latihan2-intro{
              font-size:1rem;
          }

          .latihan2-text{
              font-size:0.97rem;
          }
      }
    </style>

    <div class="latihan2-row">
      <div class="row g-0 align-items-stretch">

        <!-- GAMBAR -->
        <div class="col-md-8">
          <div class="latihan2-img-wrap">
            <img src="{{ asset('images/ayo-amati1.png') }}" class="latihan2-img" alt="Ayo Amati Latihan 2">
          </div>
        </div>

        <!-- TEKS -->
        <div class="col-md-4 d-flex">
          <div class="latihan2-side">

            <div class="latihan2-text">

              <div class="latihan2-intro">
                Setelah kamu mengamati cerita di samping, lakukan kegiatan berikut:
              </div>

              <ul>
                <li>Himpunan Siswa A = {Laras, Riyad, Mita, Dedi, Salsa}</li>
                <li>Himpunan Kerajinan B = {Tikar, Tas, Topi, Dompet}</li>
                <li>
                  Relasi yang terbentuk adalah
                  <span class="latihan2-highlight">“membuat kerajinan”</span> dari A ke B.
                </li>
              </ul>

              Sajikan relasimu dalam
              <span class="latihan2-highlight">tiga bentuk penyajian</span>.

            </div>

          </div>
        </div>

      </div>
    </div>

  </div>
</div>
<br>
<!-- ================= END LATIHAN 2 ================= -->

<div class="card shadow-lg mt-3"
     style="border:3px solid #7f3ab7;border-radius:30px;overflow:hidden;">

    <!-- HEADER -->
    <div class="card-header text-center"
         style="background:linear-gradient(90deg,#9d4edd,#7b2cbf);
                color:white;
                font-size:1.4rem;
                font-weight:700;
                padding:10px;">
       Cara Satu Diagram panah
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
<button class="btn btn-warning" onclick="toggleDeleteMode()">Hapus Panah</button>
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
let deleteMode=false;

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
        ["Laras","Tikar"],
        ["Laras","Tas"],
        ["Riyad","Topi"],
        ["Mita","Dompet"],
        ["Dedi","Tas"],
        ["Dedi","Tikar"],
        ["Salsa","Tikar"]
    ];

    const kunciLower = kunciJawaban.map(k => 
        [k[0].toLowerCase(), k[1].toLowerCase()]
    );

    let jawabanSiswa = relations.map(r => 
        [r.from.nama.trim().toLowerCase(), r.to.nama.trim().toLowerCase()]
    );

    let benar = 0;
    let salah = [];
    let kurang = [];

    // cek benar / salah
    jawabanSiswa.forEach(js => {
        let ditemukan = kunciLower.some(k =>
            k[0]===js[0] && k[1]===js[1]
        );
        if(ditemukan){
            benar++;
        }else{
            salah.push("("+js[0]+", "+js[1]+")");
        }
    });

    // cek yang belum dibuat
    kunciLower.forEach(k => {
        let ada = jawabanSiswa.some(js =>
            js[0]===k[0] && js[1]===k[1]
        );
        if(!ada){
            kurang.push("("+k[0]+", "+k[1]+")");
        }
    });

    let output = "";

    // ===== JIKA SEMUA BENAR =====
    if(benar===kunciJawaban.length && salah.length===0){

        // format R = {...}
        let relasiTampil = kunciJawaban.map(k =>
            "("+k[0]+", "+k[1]+")"
        ).join(",<br>");

        // domain
        let domain = [...new Set(kunciJawaban.map(k=>k[0]))].join(", ");

        // range
        let range = [...new Set(kunciJawaban.map(k=>k[1]))].join(", ");

        output += "🎉 <b>Hebat! Relasi yang kamu buat sudah sesuai dengan cerita.</b><br><br>";

        output += "📘 Relasi yang terbentuk adalah relasi <b>“membuat kerajinan”</b> dari himpunan A ke himpunan B.<br><br>";

        output += "<b>Bentuk matematis:</b><br>";
        output += "R = {<br>"+relasiTampil+"<br>}<br><br>";

        output += "<b>Domain</b> = {"+domain+"}<br>";
        output += "<b>Range</b> = {"+range+"}<br><br>";

        output += "📝 <i>Kesimpulan: Hubungan antara siswa dan kerajinan pada cerita di atas disebut relasi, karena memasangkan anggota himpunan A dengan anggota himpunan B. Relasi ini bukan fungsi, karena ada anggota himpunan A yang memiliki lebih dari satu pasangan.</i>";

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- ================= LATIHAN 2 ================= -->
<div class="card shadow-lg mt-4" style="border:3px solid #7f3ab7;border-radius:30px;overflow:hidden;">

  <!-- HEADER -->
  <div class="card-header text-center"
       style="background:linear-gradient(90deg,#9d4edd,#7b2cbf);
              color:white;
              font-size:1.4rem;
              font-weight:700;
              padding:18px;">
    Cara Dua Pemaparan Kordinat
  </div>

  <!-- BODY MATERI -->
  <div class="card-body p-4" style="background:#f3e8ff;">

    <div class="p-4"
         style="background:white;
                border:3px solid #7f3ab7;
                border-radius:25px;">

      <h5 class="text-center mb-4"
          style="color:#7b2cbf;font-weight:700;">
        📘 Pemaparan Koordinat
      </h5>

      <p style="font-size:16px; line-height:1.9;">
        Koordinat adalah pasangan dua nilai yang menunjukkan letak suatu titik.
        Koordinat dituliskan dalam bentuk pasangan berurutan <b>(x, y)</b>.
      </p>

      <p style="font-size:16px; line-height:1.9;">
        Nilai pertama disebut <b>koordinat x</b>, yang menunjukkan posisi
        pada arah mendatar (horizontal). Nilai kedua disebut <b>koordinat y</b>,
        yang menunjukkan posisi pada arah tegak (vertikal).
      </p>

      <p style="font-size:16px; line-height:1.9;">
        Urutan dalam pasangan koordinat tidak boleh tertukar.
        Jika ditulis (A, B), maka A menunjukkan posisi mendatar
        dan B menunjukkan posisi tegak.
      </p>

      <div class="alert alert-info mt-3" style="border-radius:15px;">
        Contoh: Jika terdapat pasangan (Laras, Tikar),
        maka Laras menunjukkan posisi mendatar dan
        Tikar menunjukkan posisi tegak.
      </div>

      <p style="font-size:16px; line-height:1.9;">
        Dengan memahami koordinat, kita dapat menentukan
        letak titik secara tepat berdasarkan pasangan yang diberikan.
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
    Masukkan jumlah anggota <b>Himpunan A</b> (kolom) dan 
    <b>Himpunan B</b> (baris).
  </li>

  <li>
    Klik <span class="badge bg-primary">📊 Gambar Grafik</span> 
    untuk menampilkan bidang koordinat.
  </li>

  <li>
    Klik <span class="badge bg-info text-dark">🔠 Isi Himpunan A</span>, 
    lalu ketik nama anggota satu per satu sampai selesai.
  </li>

  <li>
    Klik <span class="badge bg-info text-dark">🔡 Isi Himpunan B</span>, 
    lalu ketik anggota himpunan B satu per satu.
  </li>

  <li>
    Pilih <span class="badge bg-success">🔵 Tambah Titik</span>, 
    kemudian klik pada kotak perpotongan untuk membuat relasi.
  </li>

  <li>
    Jika salah memilih titik, klik 
    <span class="badge bg-warning text-dark">❌ Hapus Titik</span> 
    lalu klik titik yang ingin dihapus.
  </li>

  <li>
    Setelah selesai, klik 
    <span class="badge bg-success">✅ Periksa Jawaban</span> 
    untuk melihat hasilnya.
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
      <li>Laras membuat Tikar dan Tas</li>
      <li>Riyad membuat Topi</li>
      <li>Mita membuat Dompet</li>
      <li>Dedi membuat Tas dan Tikar</li>
      <li>Salsa membuat Tikar</li>
    </ul>

    <p>
      <b>Himpunan A</b> = {Laras, Riyad, Mita, Dedi, Salsa}
    </p>

    <p>
      <b>Himpunan B</b> = {Tikar, Tas, Topi, Dompet}
    </p>

    <p>
      <b>Relasi R</b> adalah relasi “membuat kerajinan” dari Himpunan A ke Himpunan B.
    </p>

    <p>
      Gambarkan pemaparan koordinat relasi tersebut pada bidang Kartesius berikut.
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
        ✨ Pemaparan Koordinat
      </h2>

      <p style="font-size:13px;color:#666;margin:0;">
        Visualisasi Interaktif Relasi Himpunan dalam Bidang Kartesius
      </p>

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
    min-height:420px;
}

.hasil-box{
    background:white;
    border:3px solid #7b2cbf;
    border-radius:20px;
    padding:25px;
    box-shadow:0 10px 30px rgba(123,44,191,0.15);
    position:relative;
    min-height:420px;
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
const jawabanCerita = [
["Laras","Tikar"],
["Laras","Tas"],
["Riyad","Topi"],
["Mita","Dompet"],
["Dedi","Tas"],
["Dedi","Tikar"],
["Salsa","Tikar"]
];

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

let paddingLeft = 160;   // 🔥 diperbesar (sebelumnya 100)
let paddingRight = 60;
let paddingTop = 70;
let paddingBottom = 100;

gridSize = Math.min(
(canvasW - paddingLeft - paddingRight) / nCols,
(canvasH - paddingTop - paddingBottom) / nRows
);

gridStartX = paddingLeft;   // 🔥 mulai dari kiri lebih masuk
gridStartY = paddingTop;
}

/* ===== DRAW ===== */
p.draw = function(){
p.background("#ffffff");
if(axisDrawn){
drawGrid();
drawAxes();
drawLabels();
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
p.text("B",gridStartX,gridStartY-10);

p.textAlign(p.LEFT,p.CENTER);
p.text("A",
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
p.push();
p.translate(x,y+12);
p.rotate(p.PI/4);
p.text(labelsX[i],0,0);
p.pop();
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
p.fill(pt.c);
p.stroke(0);
p.circle(newX, newY, Math.max(12, gridSize/3.5));
}
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

let total = fillingType==="A"?nCols:nRows;

labelInputBox.html(
"<b>Masukkan anggota Himpunan "+fillingType+
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

if(fillingType==="A") labelsX[currentLabelIndex]=v;
else labelsY[currentLabelIndex]=v;

currentLabelIndex++;
inp.remove();
btn.remove();

if(currentLabelIndex>=total){
labelInputBox.html("<span style='color:green;'>✔ Semua anggota diisi.</span>");
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

function normalize(teks){
return teks.toLowerCase().trim();
}

let jawabanUser = points.map(pt => [
labelsX[pt.i],
labelsY[pt.j]
]);

let jawabanUserNorm = jawabanUser.map(p=>[
normalize(p[0]),
normalize(p[1])
]);

let kunci = jawabanCerita.map(p=>[
normalize(p[0]),
normalize(p[1])
]);

let benar=[];
let salah=[];
let kurang=[];

// cek benar & salah
for(let i=0;i<jawabanUserNorm.length;i++){
let j = jawabanUserNorm[i];
if(kunci.some(b=>b[0]===j[0] && b[1]===j[1])){
benar.push(jawabanUser[i]); // pakai versi asli agar huruf tetap rapi
}else{
salah.push(jawabanUser[i]);
}
}

// cek yang belum dibuat
for(let b of kunci){
if(!jawabanUserNorm.some(j=>j[0]===b[0] && j[1]===b[1])){
kurang.push(b);
}
}

let total = kunci.length;
let skor = benar.length;

let html="";

// ================= SEMUA BENAR =================
if(skor === total){

html += "🎉 <b>Hebat sekali!</b><br><br>";
html += "Semua hubungan sudah sesuai dengan cerita.<br><br>";

let pasangan = "{ ";
pasangan += jawabanUser.map(p=>"("+p[0]+", "+p[1]+")").join(", ");
pasangan += " }";

html += "<b>Pasangan berurut Himpunan A dan Himpunan B adalah:</b><br>";
html += pasangan + "<br><br>";
html += "Kamu sudah memahami konsep relasi dengan baik 👍";

}

// ================= BELUM SEMUA BENAR =================
else{

if(skor >= total-2){
html += "🙂 <b>Hampir benar!</b><br><br>";
}
else if(skor >= total/2){
html += "👍 <b>Lumayan!</b><br><br>";
}
else{
html += "💪 <b>Ayo coba lagi!</b><br><br>";
}

html += "Kamu sudah benar <b>"+skor+"</b> dari <b>"+total+"</b> hubungan.<br><br>";

if(salah.length > 0){
html += "<b>Pasangan yang belum sesuai:</b><br>";
html += "{ " + salah.map(s=>"("+s[0]+", "+s[1]+")").join(", ") + " }<br><br>";
}

if(kurang.length > 0){
html += "<b>Masih ada hubungan yang belum kamu buat.</b><br><br>";
}

html += "💡 Coba baca kembali cerita dan periksa kembali pasangan yang belum sesuai.";
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

let inputBox=p.createDiv("<b>Jumlah Sumbu (Himpunan A) maks 10:</b> ");
inputBox.parent(wrapper);

inputCols=p.createInput("5","number");
inputCols.attribute("min","1");
inputCols.attribute("max","10");
inputCols.style("width","60px");
inputCols.parent(inputBox);

p.createSpan(" &nbsp;&nbsp; <b>Jumlah Sumbu (Himpunan B) maks 10:</b> ").parent(inputBox);

inputRows=p.createInput("4","number");
inputRows.attribute("min","1");
inputRows.attribute("max","10");
inputRows.style("width","60px");
inputRows.parent(inputBox);

makeButton("📊 Gambar Grafik",generateGrid,wrapper);
makeButton("🔠 Isi Himpunan A",()=>startLabelFill("A"),wrapper);
makeButton("🔡 Isi Himpunan B",()=>startLabelFill("B"),wrapper);
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
<!-- ================= LATIHAN 3 ================= -->
<div class="card shadow-lg mt-4"
     style="border:4px solid #7b2cbf;border-radius:30px;overflow:hidden;">

  <!-- HEADER -->
  <div class="card-header text-center"
       style="background:linear-gradient(90deg,#9d4edd,#7b2cbf);
              color:white;
              font-size:1.4rem;
              font-weight:700;
              padding:20px;">
    Cara Ketiga
  </div>

  <!-- BODY -->
  <div class="card-body p-5" style="background:#f8f6ff;">

    <style>
    .latihan3-box{
        background:white;
        border:4px solid #7b2cbf;      /* garis ungu tebal */
        border-radius:28px;
        padding:45px;
        position:relative;
        box-shadow:0 12px 30px rgba(123,44,191,0.08);
    }

    /* frame luar aksen */
    .latihan3-box::before{
        content:"";
        position:absolute;
        top:-6px;
        left:-6px;
        right:-6px;
        bottom:-6px;
        border:3px solid #c77dff;
        border-radius:32px;
        z-index:-1;
    }

    .petunjuk-mini{
        font-size:14px;
        color:#555;
        background:#f3efff;
        padding:15px 20px;
        border-radius:12px;
        margin:15px 0 25px 0;
    }

    .btn-ungu{
        background:#7b2cbf;
        color:white;
        border:none;
    }

    .btn-ungu:hover{
        background:#6a0dad;
        color:white;
    }

    .btn-hapus{
        background:#dc3545;
        color:white;
        border:none;
    }

    .btn-hapus:hover{
        background:#b02a37;
    }

    .relasi-box{
        background:#fcfbff;
        border:2px dashed #d7c6ff;
        border-radius:18px;
        padding:25px;
        margin-top:20px;
        min-height:80px;
    }

    .relasi-title{
        font-weight:600;
        color:#7b2cbf;
    }

    .pasangan-item{
        display:inline-block;
        background:#ede7ff;
        color:#5a32b1;
        padding:6px 14px;
        border-radius:20px;
        margin:6px 6px 0 0;
        font-size:14px;
        font-weight:500;
    }

    .benar{
        background:#e6f6ea;
        color:#1e7e34;
        border:2px solid #28a745;
    }

    .salah{
        background:#fde8e8;
        color:#b02a37;
        border:2px solid #dc3545;
    }

    .big-score{
        font-size:22px;
        font-weight:700;
        color:#7b2cbf;
        margin-top:20px;
    }
    </style>

    <div class="latihan3-box">

      <p><b>Diketahui data sebagai berikut:</b></p>

      <ul>
        <li>Laras membuat Tikar dan Tas</li>
        <li>Riyad membuat Topi</li>
        <li>Mita membuat Dompet</li>
        <li>Dedi membuat Tas dan Tikar</li>
        <li>Salsa membuat Tikar</li>
      </ul>

      <p>
        Relasi R adalah relasi <b>“membuat kerajinan”</b>.
      </p>

      <p><b>Buatkan pasangan berurutnya:</b></p>

      <div class="petunjuk-mini">
        💡 Pilih nama terlebih dahulu, lalu kerajinan.  
        Bentuk pasangan harus <b>(Nama, Kerajinan)</b>.
      </div>

      <!-- INPUT -->
      <div class="row g-3 align-items-center">

        <div class="col-md-4">
          <select id="pilihA3" class="form-select">
            <option value="">Pilih Siswa</option>
            <option>Laras</option>
            <option>Riyad</option>
            <option>Mita</option>
            <option>Dedi</option>
            <option>Salsa</option>
          </select>
        </div>

        <div class="col-md-4">
          <select id="pilihB3" class="form-select">
            <option value="">Pilih Kerajinan</option>
            <option>Tikar</option>
            <option>Tas</option>
            <option>Topi</option>
            <option>Dompet</option>
          </select>
        </div>

        <div class="col-md-4 d-flex gap-2">
          <button class="btn btn-ungu w-50" onclick="tambahPasangan3()">Tambah</button>
          <button class="btn btn-hapus w-50" onclick="hapusTerakhir3()">Hapus</button>
        </div>

      </div>

      <!-- RELASI -->
      <div class="relasi-box">
        <div class="relasi-title">R = {</div>
        <div id="daftarPasangan3"></div>
        <div class="relasi-title">}</div>
      </div>

      <!-- TOMBOL -->
      <div class="text-center mt-4">
        <button class="btn btn-success px-4 me-2" onclick="periksa3()">Periksa</button>
        <button class="btn btn-outline-danger px-4" onclick="reset3()">Reset</button>
      </div>

      <!-- SKOR -->
      <div id="areaSkor3" style="display:none;" class="text-center">
        <div class="big-score" id="skorText3"></div>
        <div id="feedback3" style="margin-top:8px;"></div>
      </div>

    </div>
  </div>
</div>

<script>
let pasanganUser3 = [];

const kunci3 = [
["laras","tikar"],
["laras","tas"],
["riyad","topi"],
["mita","dompet"],
["dedi","tas"],
["dedi","tikar"],
["salsa","tikar"]
];

function tambahPasangan3(){
let a=document.getElementById("pilihA3").value;
let b=document.getElementById("pilihB3").value;
if(!a||!b) return;

if(pasanganUser3.some(p=>p[0]===a && p[1]===b)){
alert("Pasangan sudah ada!");
return;
}

pasanganUser3.push([a,b]);
render3();
}

function hapusTerakhir3(){
pasanganUser3.pop();
render3();
}

function render3(status=[]){
let html="";
pasanganUser3.forEach((p,i)=>{
let className="";
if(status[i]==="benar") className="benar";
if(status[i]==="salah") className="salah";
html+=`<span class="pasangan-item ${className}">
(${p[0]}, ${p[1]})
</span>`;
});
document.getElementById("daftarPasangan3").innerHTML=html;
}

function periksa3(){
let normalize=t=>t.toLowerCase().trim();
let userNorm=pasanganUser3.map(p=>[
normalize(p[0]),normalize(p[1])
]);

let status=[];
let benar=0;

userNorm.forEach(u=>{
if(kunci3.some(k=>k[0]===u[0] && k[1]===u[1])){
status.push("benar");
benar++;
}else{
status.push("salah");
}
});

render3(status);

document.getElementById("areaSkor3").style.display="block";
document.getElementById("skorText3").innerHTML=
"Skor: "+benar+" / "+kunci3.length;

document.getElementById("feedback3").innerHTML=
benar===kunci3.length
? "🎉 Semua pasangan sudah benar!"
: "💪 Masih bisa ditingkatkan.";
}

function reset3(){
pasanganUser3=[];
render3();
document.getElementById("areaSkor3").style.display="none";
}
</script>
<!-- ================= TOMBOL NAVIGASI ================= -->
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center">

            <!-- Tombol Sebelumnya -->
            <a href="/bab_1/lanjut_2" class="btn btn-success px-4">
                ← Sebelumnya
            </a>

            <!-- Tombol Selanjutnya -->
            <a href="/petunjuk/petunjuk_bab2" class="btn btn-success px-4">
                Selanjutnya →
            </a>

        </div>
    </div>
</div>
@endsection

