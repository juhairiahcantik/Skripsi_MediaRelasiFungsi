@extends('layouts.main')

@section('container')

<style>
    /* =========================================================
       LATIHAN 4 KORESPONDENSI - LAYOUT SEPERTI RELASI
    ========================================================= */

    .content-gap {
        margin-left: 40px;
        margin-right: 20px;
        box-sizing: border-box;
        max-width: 100%;
        overflow-x: clip;
        font-family: 'Poppins', sans-serif;
    }

    .latihan4-page {
        display: none;
        width: 100%;
        max-width: 100%;
        box-sizing: border-box;
        overflow-x: clip;
    }

    .latihan4-page.active {
        display: block;
    }

    .latihan4-card {
        background: #ffffff;
        border: 1px solid #eadcf6;
        border-radius: 26px;
        padding: 24px;
        margin-top: 20px;
        box-shadow: 0 14px 32px rgba(91, 44, 111, 0.08);
        box-sizing: border-box;
        overflow: hidden;
    }

    .latihan4-page-title {
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

    .latihan4-sub-title {
        width: fit-content;
        max-width: 100%;
        margin: 0 auto 18px;
        background: linear-gradient(135deg, #8E44AD, #B57EDC);
        color: #ffffff;
        padding: 12px 20px;
        border-radius: 16px;
        font-size: 1.05rem;
        font-weight: 800;
        text-align: center;
        box-shadow: 0 8px 16px rgba(142, 68, 173, 0.14);
    }

    .latihan4-body {
        background: #ffffff;
        color: #333;
        line-height: 1.8;
        box-sizing: border-box;
    }

    .latihan4-image-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 18px;
        margin-bottom: 22px;
    }

    .latihan4-image-box {
        background: linear-gradient(180deg, #ffffff 0%, #faf7ff 100%);
        border: 1px solid #E9D5FF;
        border-radius: 18px;
        padding: 14px;
        box-shadow: 0 8px 20px rgba(91, 44, 111, 0.08);
        display: flex;
        align-items: center;
        justify-content: center;
        box-sizing: border-box;
        min-height: 260px;
    }

    .latihan4-image-box img {
        width: 100%;
        max-height: 430px;
        object-fit: contain;
        display: block;
    }

    .latihan4-soft-box {
        background: #FBF7FF;
        border: 2px dashed #CFA7F3;
        border-radius: 18px;
        padding: 16px 18px;
        margin-bottom: 18px;
        color: #4B2673;
        line-height: 1.85;
        box-sizing: border-box;
    }

    .latihan4-question-box {
        background: #ffffff;
        border: 1px solid #E9D5FF;
        border-radius: 18px;
        padding: 20px;
        box-shadow: 0 8px 18px rgba(91, 44, 111, 0.06);
        box-sizing: border-box;
    }

    .latihan4-question-box h4,
    .latihan4-question-box h5 {
        color: #4B2673;
    }

    .latihan4-question-box input.form-control {
        min-width: 130px;
        border: 2px solid #E9D5FF;
        border-radius: 12px;
        box-shadow: none;
    }

    .latihan4-question-box input.form-control:focus {
        border-color: #8B5CF6;
        box-shadow: 0 0 0 3px rgba(139, 92, 246, 0.15);
    }

    .latihan4-divider {
        border: 0;
        border-top: 2px dashed #CFA7F3;
        opacity: 1;
        margin: 22px 0;
    }

    .latihan4-diagram-layout {
        display: grid;
        grid-template-columns: minmax(0, 2fr) minmax(260px, 0.8fr);
        gap: 18px;
        align-items: stretch;
    }

    .latihan4-canvas-box,
    .latihan4-result-box {
        background: #ffffff;
        border: 1px solid #E9D5FF;
        border-radius: 18px;
        padding: 16px;
        box-shadow: 0 8px 18px rgba(91, 44, 111, 0.06);
        box-sizing: border-box;
        min-width: 0;
    }

    .latihan4-result-box {
        color: #4B2673;
    }

    .control-row {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
        margin-bottom: 15px;
    }

    .control-row .btn {
        min-width: 140px;
        border-radius: 12px;
        font-weight: 700;
    }

    .input-row {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
        margin-bottom: 20px;
    }

    .input-row input {
        width: 280px;
    }

    .input-row select {
        width: 200px;
    }

    .input-row button {
        width: 180px;
        border-radius: 12px;
        font-weight: 700;
    }

    #sketch-holder {
        width: 100%;
        min-height: 280px;
        overflow: hidden;
    }

    #sketch-holder canvas {
        max-width: 100% !important;
        border-radius: 16px;
        display: block;
    }



    .latihan4-isian-btn-row {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        align-items: center;
        margin-top: 16px;
    }

    .latihan4-isian-btn-row .btn {
        min-width: 150px;
        border-radius: 12px;
        font-weight: 700;
    }

    .latihan4-nomor-title {
        color: #4B2673;
        font-weight: 800;
        margin: 0 0 16px 0;
        line-height: 1.6;
    }

    /* =========================================================
       PAGINATION SEPERTI RELASI
    ========================================================= */

    .latihan4-pagination {
        width: 100%;
        margin-top: 30px;
        margin-bottom: 35px;
        clear: both;
    }

    .latihan4-pagination .pagination {
        gap: 5px;
    }

    .latihan4-pagination .page-link {
        color: #6A2C70;
        border: 1px solid #E3C7F3;
        border-radius: 12px !important;
        font-weight: 700;
        background-color: #ffffff;
        box-shadow: 0 2px 6px rgba(0,0,0,0.08);
    }

    .latihan4-pagination .page-link:hover {
        background-color: #F3E5FF;
        color: #4B2673;
    }

    .latihan4-pagination .page-item.active .page-link {
        background-color: #CDA4DE;
        border-color: #CDA4DE;
        color: #ffffff;
    }

    .latihan4-pagination .page-item.disabled .page-link {
        color: #aaaaaa;
        background-color: #f6f6f6;
        border-color: #eeeeee;
        box-shadow: none;
        pointer-events: none;
    }

    @media (max-width: 992px) {
        .latihan4-image-grid,
        .latihan4-diagram-layout {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .content-gap {
            margin-left: 12px;
            margin-right: 12px;
        }

        .latihan4-card {
            padding: 16px;
            border-radius: 20px;
        }

        .latihan4-page-title {
            font-size: 1.05rem;
            padding: 14px 16px;
            border-radius: 16px;
        }

        .latihan4-sub-title {
            font-size: 0.98rem;
            padding: 11px 14px;
            border-radius: 14px;
        }

        .latihan4-question-box input.form-control {
            width: 100% !important;
            display: block !important;
            margin: 8px 0 !important;
        }

        .input-row input,
        .input-row select,
        .input-row button {
            width: 100%;
        }

        .control-row .btn {
            width: 100%;
        }

        .latihan4-pagination .page-link {
            font-size: 0.82rem;
            padding: 7px 9px;
        }
    }
</style>

<div class="content-gap">

    <!-- ====================== HALAMAN 1 ====================== -->
    <div class="latihan4-page active" id="latihan4Page1">
        <div class="latihan4-card">
            <div class="latihan4-page-title">
                Latihan 4
            </div>

            <div class="latihan4-body">
                <div class="latihan4-image-grid">
                    <div class="latihan4-image-box">
                        <img src="{{ asset('images/latihan41.png') }}" 
                             alt="Latihan 4 Kiri">
                    </div>

                    <div class="latihan4-image-box">
                        <img src="{{ asset('images/latihan42.png') }}" 
                             alt="Latihan 4 Kanan">
                    </div>
                </div>

                <div class="latihan4-question-box">
                    <h4 class="fw-bold text-center">
                        Setelah kamu mengamati, sekarang mari berlatih.
                    </h4>

                    <hr class="latihan4-divider">

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

                    <div class="latihan4-isian-btn-row">
                        <button class="btn btn-success" onclick="periksaIsian()">
                            Periksa Jawaban
                        </button>

                        <button class="btn btn-outline-success" onclick="resetIsian()">
                            Ulangi
                        </button>
                    </div>

                    <div id="feedback1" class="mt-4"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- ====================== HALAMAN 2 ====================== -->
    <div class="latihan4-page" id="latihan4Page2">
        <div class="latihan4-card">
            <h5 class="latihan4-nomor-title">
                2. Sajikan hubungan tersebut dalam bentuk diagram panah!
            </h5>

            <div class="latihan4-page-title">
                Menyajikan hubungan dengan bentuk diagram Panah
            </div>

            <div class="latihan4-soft-box">
                <div class="latihan4-sub-title">
                    📘 Petunjuk Penggunaan
                </div>

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

            <div class="latihan4-question-box">
                <div class="latihan4-sub-title">
                    ✏️ Ayo Kita Sajikan Korespondensi Satu-satu
                </div>

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

                <div class="latihan4-diagram-layout">
                    <div class="latihan4-canvas-box">
                        <div id="sketch-holder"></div>
                    </div>

                    <div class="latihan4-result-box">
                        <b>HASIL PEMERIKSAAN:</b>
                        <div id="hasilText" class="mt-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ====================== PAGINATION ====================== -->
    <div class="latihan4-pagination">
        <nav aria-label="Pagination Latihan 4 Korespondensi Satu-satu">
            <ul class="pagination justify-content-center flex-wrap">

                <li class="page-item disabled" id="latihan4PrevItem">
                    <button type="button"
                            class="page-link"
                            onclick="changeLatihan4Page(currentLatihan4Page - 1)">
                        Sebelumnya
                    </button>
                </li>

                <li class="page-item active" id="latihan4PageItem1">
                    <button type="button" class="page-link" onclick="changeLatihan4Page(1)">1</button>
                </li>

                <li class="page-item" id="latihan4PageItem2">
                    <button type="button" class="page-link" onclick="changeLatihan4Page(2)">2</button>
                </li>

                <li class="page-item" id="latihan4NextItem">
                    <button type="button"
                            class="page-link"
                            onclick="nextLatihan4Page()">
                        Berikutnya
                    </button>
                </li>

            </ul>
        </nav>
    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.9.0/p5.min.js"></script>

<script>
function normalisasi(teks){
    return teks.toLowerCase().trim();
}

let percobaanIsianLatihan4 = 0;

function bersihkanWarnaIsian(){
    ["jawab1", "jawab2"].forEach(function(id){
        const element = document.getElementById(id);
        if(!element) return;
        element.classList.remove("is-valid", "is-invalid");
    });
}

function periksaIsian(){

    bersihkanWarnaIsian();

    const input1 = document.getElementById("jawab1");
    const input2 = document.getElementById("jawab2");
    const feedback = document.getElementById("feedback1");

    let j1 = normalisasi(input1.value);
    let j2 = normalisasi(input2.value);

    if(j1 === "" && j2 === ""){
        feedback.innerHTML = `
        <div class="alert alert-warning">
        <strong>Jawaban belum diisi.</strong><br><br>
        Silakan isi kedua kotak jawaban terlebih dahulu.
        </div>`;
        return;
    }

    let benar1 = (j1 === "satu");
    let benar2 = (j2 === "satu");

    if(benar1){
        input1.classList.add("is-valid");
    } else if(j1 !== ""){
        input1.classList.add("is-invalid");
    }

    if(benar2){
        input2.classList.add("is-valid");
    } else if(j2 !== ""){
        input2.classList.add("is-invalid");
    }

    if(benar1 && benar2){
        percobaanIsianLatihan4 = 0;
        feedback.innerHTML = `
        <div class="alert alert-success">
        <strong>Benar! 🎉</strong><br><br>
        Setiap alat musik dipasangkan dengan tepat satu daerah,
        dan setiap daerah memiliki tepat satu alat musik khas.
        Oleh karena itu, hubungan ini disebut <b>korespondensi satu-satu</b>.
        </div>`;
        return;
    }

    percobaanIsianLatihan4++;

    if(percobaanIsianLatihan4 < 3){
        feedback.innerHTML = `
        <div class="alert alert-danger">
        <strong>Belum Tepat.</strong><br><br>
        Perhatikan kembali arti korespondensi satu-satu.
        Berapa banyak pasangan yang dimiliki setiap anggota?<br><br>
        Tekan tombol <b>Ulangi</b>, lalu coba kembali.
        </div>`;
    } else {
        feedback.innerHTML = `
        <div class="alert alert-danger">
        <strong>Belum Tepat.</strong><br><br>
        Perhatikan jawaban benar berikut agar kamu semakin paham.<br><br>
        <strong>Jawaban benar:</strong><br>
        Hubungan antara alat musik tradisional dan daerah asalnya disebut
        <b>korespondensi satu-satu</b> karena setiap alat musik berasal dari
        <b>satu</b> daerah dan setiap daerah memiliki <b>satu</b> alat musik khas.
        </div>`;
    }
}

function resetIsian(){
    document.getElementById("jawab1").value = "";
    document.getElementById("jawab2").value = "";
    document.getElementById("feedback1").innerHTML = "";
    bersihkanWarnaIsian();
}
</script>

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
    if(!container) return;
    let w=container.offsetWidth;
    if(!w || w < 50) return;
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

<script>
    /* =========================================================
       PAGINATION LATIHAN 4
    ========================================================= */

    let currentLatihan4Page = 1;
    const totalLatihan4Page = 2;

    function changeLatihan4Page(page) {
        if (page < 1 || page > totalLatihan4Page) {
            return;
        }

        currentLatihan4Page = page;

        for (let i = 1; i <= totalLatihan4Page; i++) {
            const pageElement = document.getElementById("latihan4Page" + i);
            const pageItem = document.getElementById("latihan4PageItem" + i);

            if (pageElement) {
                pageElement.classList.toggle("active", i === page);
            }

            if (pageItem) {
                pageItem.classList.toggle("active", i === page);
            }
        }

        const prevItem = document.getElementById("latihan4PrevItem");

        if (prevItem) {
            prevItem.classList.toggle("disabled", page === 1);
        }

        if (page === 2) {
            setTimeout(function () {
                if (typeof resizeResponsive === "function") {
                    resizeResponsive();
                }
            }, 80);
        }

        const target = document.querySelector(".content-gap");

        if (target) {
            target.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
        }
    }

    function nextLatihan4Page() {
        if (currentLatihan4Page < totalLatihan4Page) {
            changeLatihan4Page(currentLatihan4Page + 1);
        } else {
            window.location.href = "/petunjuk/petunjuk_bab4";
        }
    }

    document.addEventListener("DOMContentLoaded", function () {
        changeLatihan4Page(1);
    });
</script>

@endsection
