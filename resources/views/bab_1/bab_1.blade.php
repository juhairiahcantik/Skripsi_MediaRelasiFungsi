<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Materi: Himpunan</title>

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
        .silsilah-wrapper img {
            width: 100%;
            margin-left: 0 !important;
        }
    }

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

    .solution-card {
        background: linear-gradient(145deg, #ffffff, #f9f3ff);
        border-left: 6px solid #9b59b6;
        border-radius: 20px;
        padding: 25px 30px;
        margin-top: 25px;
        box-shadow: 0 10px 25px rgba(155, 89, 182, 0.15);
    }

    .solution-header {
        background: linear-gradient(135deg, #8e44ad, #d2b4de);
        color: white;
        font-size: 1.4rem;
        font-weight: 700;
        padding: 12px;
        border-radius: 12px;
        text-align: center;
        margin-bottom: 22px;
    }

    .solution-intro {
        font-size: 1rem;
        line-height: 1.8;
        color: #222;
        margin-bottom: 18px;
    }

    .set-box {
        background: #ffffff;
        border-radius: 16px;
        padding: 20px 24px;
        margin-bottom: 24px;
        border: 1px solid #eee;
        box-shadow: 0 6px 16px rgba(0,0,0,0.06);
        transition: 0.3s ease;
    }

    .set-box:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    }

    .set-title {
        font-size: 1.15rem;
        font-weight: 700;
        margin-bottom: 10px;
        color: #222;
    }

    /* membuat teks setelah nomor masuk ke dalam */
    .set-content {
        padding-left: 26px;
    }

    .set-content p {
        margin-bottom: 10px;
        line-height: 1.8;
        color: #333;
    }

    .solution-text {
        margin-top: 8px;
        margin-bottom: 14px;
        font-size: 1.05rem;
        line-height: 1.9;
        color: #222;
    }

    .solution-text input {
        width: 110px;
        padding: 10px 12px;
        margin: 6px 5px;
        border-radius: 16px;
        border: 2px solid #d9d9d9;
        text-align: center;
        outline: none;
        transition: all 0.25s ease;
        background-color: #fff;
        font-weight: 600;
    }

    .solution-text input:focus {
        border-color: #9b59b6;
        box-shadow: 0 0 0 4px rgba(155, 89, 182, 0.15);
    }

    .solution-text input.benar {
        border-color: #198754 !important;
        background-color: #d1e7dd !important;
        color: #0f5132;
    }

    .solution-text input.salah {
        border-color: #dc3545 !important;
        background-color: #f8d7da !important;
        color: #842029;
    }

    .solution-text input.kosong {
        border-color: #ffc107 !important;
        background-color: #fff3cd !important;
        color: #664d03;
    }

    .solution-text input.duplikat {
        border-color: #fd7e14 !important;
        background-color: #ffe5d0 !important;
        color: #7a3e00;
    }

    .cara-baca-wrap {
        margin-top: 6px;
        margin-bottom: 14px;
    }

    .cara-baca-label {
        font-weight: 700;
        color: #222;
        margin-bottom: 8px;
    }

    .cara-baca {
        background: linear-gradient(135deg, #f4ecff, #efe3ff);
        padding: 12px 15px;
        border-radius: 12px;
        color: #6c3483;
        font-style: italic;
        border-left: 4px solid #9b59b6;
        display: none;
        line-height: 1.8;
        min-height: 48px;
    }

    .button-row {
        margin-top: 6px;
        margin-bottom: 10px;
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
    }

/* ================================
   WRAPPER TOMBOL
================================ */
.btn-actions {
    display: flex;
    align-items: center;   /* sejajarkan vertikal */
    gap: 12px;
   margin-top: 20px !important; 
}
    


/* ================================
   TOMBOL PERIKSA & ULANGI
================================ */
.btn-cek,
.btn-ulang {
    display: flex;                 /* ganti inline-flex jadi flex */
    align-items: center;
    justify-content: center;

    width: 140px;
    height: 48px;
    box-sizing: border-box;

    padding: 0 16px;
    margin: 0 !important;          /* paksa hilangkan margin lama */
    line-height: 1;
    font-size: 1rem;
    font-weight: 600;
    border-radius: 12px;

    position: static !important;   /* cegah ada posisi naik */
    top: auto !important;
    bottom: auto !important;

    appearance: none;              /* hilangkan style bawaan browser */
    -webkit-appearance: none;
    vertical-align: middle;
}

/* tombol Periksa */
.btn-cek {
    background: linear-gradient(135deg, #8e44ad, #a569bd);
    color: #fff;
    border: 2px solid transparent; /* samakan ketebalan border */
}

/* tombol Ulangi */
.btn-ulang {
    background: #fff;
    color: #8e44ad;
    border: 2px solid #8e44ad;
}

    #hasilA, #hasilB, #hasilC {
        margin-top: 10px;
        font-weight: 600;
        padding: 10px 14px;
        border-radius: 10px;
        display: inline-block;
    }

    .hasil-benar {
        background-color: #d1e7dd;
        color: #0f5132;
        border: 1px solid #badbcc;
    }

    .hasil-salah {
        background-color: #f8d7da;
        color: #842029;
        border: 1px solid #f5c2c7;
    }

    .hasil-peringatan {
        background-color: #fff3cd;
        color: #664d03;
        border: 1px solid #ffecb5;
    }
    .solution-intro {
    padding-left: 20px;   /* menggeser ke dalam */
    padding-right: 10px;
    line-height: 1.8;
    color: #222;
    margin-bottom: 18px;
}

.kesimpulan {
    background: #f4ecff;
    border-left: 4px solid #8e44ad;
    padding: 12px 16px;
    border-radius: 10px;
    margin-top: 15px;
}
.pemahaman-card {
    width: 100%;
    background: #ffffff;
    border-radius: 22px;
    overflow: hidden;
    box-shadow: 0 10px 24px rgba(0, 0, 0, 0.08);
    margin-top: 24px;
    margin-bottom: 24px;
    border: 1px solid #eee;
}

.pemahaman-header {
    background: linear-gradient(135deg, #a25acb, #c7a1df);
    color: #ffffff;
    padding: 18px 22px;
    font-size: 1.15rem;
    font-weight: 700;
    line-height: 1.6;
}

.pemahaman-body {
    padding: 22px;
    display: grid;
    gap: 16px;
    background: #fcfbfe;
}

.pemahaman-item {
    background: #ffff;
    border: 1px solid #f1e2bd;
    border-radius: 18px;
    padding: 20px 22px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.04);
}

.pemahaman-item h4 {
    margin: 0 0 10px 0;
    font-size: 1.35rem;
    font-weight: 700;
    color: #c9832d;
}

.pemahaman-item p {
    margin: 0;
    font-size: 1rem;
    line-height: 1.9;
    color: #333;
}

@media (max-width: 768px) {
    .pemahaman-card {
        border-radius: 16px;
    }

    .pemahaman-header {
        padding: 14px 16px;
        font-size: 1rem;
        line-height: 1.5;
    }

    .pemahaman-body {
        padding: 16px;
        gap: 12px;
    }

    .pemahaman-item {
        padding: 16px;
        border-radius: 14px;
    }

    .pemahaman-item h4 {
        font-size: 1.1rem;
    }

    .pemahaman-item p {
        font-size: 0.95rem;
        line-height: 1.7;
    }
}
.notasi-card {
    background: #fdfaf5;
    border: 2px solid #d99152;
    border-radius: 16px;
    padding: 18px 20px 20px 20px;
    margin-top: 16px;
}

.notasi-header {
    display: inline-block;
    background: #e3a06b;
    color: #fff;
    padding: 8px 18px;
    border-radius: 12px;
    font-weight: 700;
    margin-bottom: 12px;
    font-size: 1.05rem;
}

.notasi-body {
    line-height: 1.8;
    color: #333;
}

.notasi-body ol {
    padding-left: 18px;
    margin-top: 8px;
}

.notasi-body li {
    margin-bottom: 10px;
}
.pengertian-soft {
    background: #f3e7c6; /* krem lembut */
    border: 2px dashed #e0b96b; /* garis putus-putus */
    border-radius: 16px;
    padding: 18px 20px;
    margin-top: 16px;
    line-height: 1.8;
}

.pengertian-soft h4 {
    margin-bottom: 10px;
    color: #c28b2c;
    font-weight: 700;
}

.pengertian-soft p {
    margin-bottom: 10px;
    color: #333;
}

/* ====== NONAKTIFKAN LAYOUT LAMA ====== */
/*
/* GRID RESPONSIVE */
.contoh-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(420px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

/* CARD */
.contoh-card {
    background: #ffffff;
    border-radius: 18px;
    border: 1px solid #e6e6e6;
    box-shadow: 0 8px 20px rgba(0,0,0,0.06);
    overflow: hidden;
    display: flex;
    flex-direction: column;
}
*/
.contoh-header {
    background: linear-gradient(135deg, #8e44ad, #b57edc);
    color: #fff;
    padding: 14px 18px;
    font-weight: 700;
    font-size: 1.2rem;
}

.contoh-body {
    padding: 18px;
    display: flex;
    flex-direction: column;
    flex: 1;
    line-height: 1.8;
}

/* SET */
.contoh-set {
    background: #f4ecff;
    border-left: 4px solid #8e44ad;
    padding: 10px 14px;
    border-radius: 10px;
    font-weight: 600;
    display: inline-block;
    margin-top: 8px;
}

/* OPSI */
.opsi-checkbox {
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-top: 10px;
}

.opsi-checkbox label {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 12px 14px;
    border-radius: 12px;
    border: 1px solid #e5e5e5;
    background: #fafafa;
    cursor: pointer;
    transition: 0.2s;
}

.opsi-checkbox label:hover {
    background: #f4ecff;
    border-color: #d6c3f0;
}

.opsi-checkbox label:has(input:checked) {
    background: #efe3ff;
    border-color: #c9a8e8;
}

.opsi-checkbox input {
    width: 18px;
    height: 18px;
    accent-color: #8e44ad;
}


/* HASIL */
.hasil-box {
    margin-top: 14px;
    padding: 12px 16px;
    border-radius: 12px;
    font-weight: 600;
    display: none;
    width: 100%;
    box-sizing: border-box;
}

.hasil-benar {
    background: #d1e7dd;
    color: #0f5132;
    border-left: 5px solid #198754;
}

.hasil-salah {
    background: #f8d7da;
    color: #842029;
    border-left: 5px solid #dc3545;
}

.hasil-peringatan {
    background: #fff3cd;
    color: #664d03;
    border-left: 5px solid #ffc107;
}

/* MOBILE */
@media (max-width: 576px) {
    .contoh-grid {
        grid-template-columns: 1fr;
    }
}
/* ================================
   🔵 KHUSUS GRID 2 CONTOH HIMPUNAN
   ================================ */

.contoh-grid-2 {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 22px;
    margin-top: 24px;
    align-items: start;
}

/* ================================
   🔵 CARD CONTOH HIMPUNAN
   ================================ */

.contoh-card {
    background: #ffffff;
    border-radius: 20px;
    border: 1px solid #e6e6e6;
    box-shadow: 0 8px 20px rgba(0,0,0,0.06);
    overflow: hidden;
}

.contoh-header {
    background: linear-gradient(135deg, #8e44ad, #b57edc);
    color: #fff;
    padding: 14px 20px;
    font-weight: 700;
    font-size: 1.2rem;
}

.contoh-body {
    padding: 20px;
    line-height: 1.8;
    color: #333;
}

/* ================================
   🔵 BOX HIMPUNAN (A = {...})
   ================================ */

.contoh-set {
    background: #f4ecff;
    border-left: 4px solid #8e44ad;
    padding: 12px 16px;
    border-radius: 12px;
    font-weight: 600;
    display: inline-block;
    margin-top: 10px;
    margin-bottom: 10px;
}

/* ================================
   🔵 OPSI CHECKBOX
   ================================ */

.opsi-checkbox {
    display: flex;
    flex-direction: column;
    gap: 12px;
    margin-top: 12px;
}

.opsi-checkbox label {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 14px 16px;
    border-radius: 14px;
    border: 1px solid #e5e5e5;
    background: #fafafa;
    cursor: pointer;
    transition: 0.2s ease;
}

.opsi-checkbox label:hover {
    background: #f4ecff;
    border-color: #d6c3f0;
}

.opsi-checkbox label:has(input:checked) {
    background: #efe3ff;
    border-color: #c9a8e8;
}

/* ================================
   🔵 CHECKBOX STYLE
   ================================ */

.opsi-checkbox input[type="checkbox"] {
    width: 20px;
    height: 20px;
    accent-color: #8e44ad;
    flex-shrink: 0;
}

/* ================================
   🔵 TOMBOL PERIKSA
   ================================ */


/* ================================
   🔵 FEEDBACK
   ================================ */

.hasil-box {
    margin-top: 14px;
    padding: 12px 16px;
    border-radius: 12px;
    font-weight: 600;
    display: none;
    width: 100%;
    box-sizing: border-box;
    line-height: 1.6;
}

.hasil-benar {
    background: #d1e7dd;
    color: #0f5132;
    border-left: 5px solid #198754;
}

.hasil-salah {
    background: #f8d7da;
    color: #842029;
    border-left: 5px solid #dc3545;
}

.hasil-peringatan {
    background: #fff3cd;
    color: #664d03;
    border-left: 5px solid #ffc107;
}

/* ===== BOX UTAMA (UNGU) ===== */
.quiz-box-unik {
    border: 2px solid #8e44ad;
    padding: 18px;
    margin-top: 20px;
}

/* ===== HEADER ===== */
.quiz-header-unik {
    background: #8e44ad;
    color: #fff;
    display: inline-block;
    padding: 8px 14px;
    font-weight: 600;
    margin-bottom: 12px;
}

/* ===== WRAPPER TOMBOL ===== */
.quiz-opsi-wrap {
    display: flex;
    gap: 14px;          /* ⬅️ biar tidak nyambung */
    margin-top: 16px;
    flex-wrap: wrap;
}

/* ===== TOMBOL ===== */
.quiz-opsi-btn {
    flex: 1;
    min-width: 180px;

    padding: 12px;
    border-radius: 10px;

    border: 2px solid #78ed81;
    background: #6bd46d;
    color: #09090a;

    font-weight: 600;
    cursor: pointer;
    transition: 0.2s;
}

.quiz-opsi-btn:hover {
    background: #e5d4fa;
}

/* ===== FEEDBACK ===== */
#feedbackUnik {
    margin-top: 14px;
    padding: 12px;
    border-radius: 10px;
    display: none;
}

/* ===== FIX KHUSUS TOMBOL PERIKSA DI CONTOH HIMPUNAN ===== */
.contoh-card .btn-cek {
    margin-top: 20px !important;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

/* ====================== SEMESTA FULL ====================== */
.semesta-card-full{
    background:#ffffff;
    border:1px solid #ece6f5;
    border-radius:20px;
    padding:24px;
    margin-top:24px;
    box-shadow:0 10px 24px rgba(0,0,0,0.06);
    box-sizing:border-box;
}

.semesta-title-full{
    display:inline-block;
    background:linear-gradient(135deg,#8e44ad,#b57edc);
    color:#fff;
    padding:10px 18px;
    border-radius:14px;
    font-size:1.1rem;
    font-weight:700;
    margin-bottom:16px;
}

.semesta-desc-full{
    font-size:1rem;
    color:#333;
    line-height:1.8;
    margin-bottom:14px;
}

.semesta-petunjuk-full{
    background:#f8f3ff;
    border-left:4px solid #8e44ad;
    padding:12px 14px;
    border-radius:10px;
    color:#444;
    line-height:1.7;
    margin-bottom:16px;
}

.semesta-wrap-full{
    display:flex;
    align-items:flex-start;
    gap:10px;
    margin-top:10px;
    margin-bottom:18px;
}

.semesta-symbol-full{
    font-size:1.2rem;
    font-weight:700;
    line-height:48px;
    color:#333;
    flex-shrink:0;
}

.semesta-grid-full{
    flex:1;
    display:grid;
    grid-template-columns:repeat(5, minmax(110px,1fr));
    gap:10px;
}

.semesta-grid-full input{
    width:100%;
    height:46px;
    border:2px solid #ddd6ea;
    border-radius:12px;
    padding:0 12px;
    font-size:1rem;
    color:#333;
    background:#fcfbff;
    box-sizing:border-box;
    text-align:center;
    transition:0.2s ease;
}

.semesta-grid-full input:focus{
    outline:none;
    border-color:#a56cc1;
    box-shadow:0 0 0 4px rgba(142,68,173,0.10);
    background:#fff;
}

.semesta-btns-full{
    display:flex;
    gap:12px;
    flex-wrap:wrap;
    margin-top:6px;
}

.semesta-btns-full button{
    min-width:132px;
    height:46px;
    border-radius:12px;
    font-size:1rem;
    font-weight:600;
    cursor:pointer;
    box-sizing:border-box;
    transition:0.2s ease;
}

.btn-semesta-periksa-full{
    background:linear-gradient(135deg,#8e44ad,#a569bd);
    color:#fff;
    border:2px solid transparent;
}

.btn-semesta-periksa-full:hover{
    transform:translateY(-1px);
    opacity:0.96;
}

.btn-semesta-ulang-full{
    background:#fff;
    color:#8e44ad;
    border:2px solid #8e44ad;
}

.btn-semesta-ulang-full:hover{
    background:#f7efff;
    transform:translateY(-1px);
}

.semesta-feedback-full{
    margin-top:16px;
    padding:13px 15px;
    border-radius:12px;
    display:none;
    line-height:1.7;
    font-weight:600;
    box-sizing:border-box;
}

@media (max-width: 992px){
    .semesta-grid-full{
        grid-template-columns:repeat(4, minmax(100px,1fr));
    }
}

@media (max-width: 768px){
    .semesta-card-full{
        padding:18px;
        border-radius:16px;
    }

    .semesta-wrap-full{
        flex-wrap:wrap;
    }

    .semesta-grid-full{
        width:100%;
        grid-template-columns:repeat(3, minmax(100px,1fr));
    }
}

@media (max-width: 480px){
    .semesta-grid-full{
        grid-template-columns:repeat(2, minmax(100px,1fr));
    }

    .semesta-btns-full{
        flex-direction:column;
    }

    .semesta-btns-full button{
        width:100%;
    }
}

/* ===== STATUS INPUT SEMESTA ===== */
.semesta-benar {
    background: #d1e7dd !important;
    border-color: #198754 !important;
    color: #0f5132 !important;
}

.semesta-salah {
    background: #f8d7da !important;
    border-color: #dc3545 !important;
    color: #842029 !important;
}

.semesta-kosong {
    background: #fff3cd !important;
    border-color: #ffc107 !important;
    color: #664d03 !important;
}
/* ===== TOMBOL KE TENGAH ===== */
.semesta-btns-full {
    display: flex;
    justify-content: center; /* ⬅️ ini yang bikin ke tengah */
    gap: 12px;
    margin-top: 20px;
}

/* ===== KURUNG BESAR ===== */
.semesta-wrap-full {
    display: flex;
    align-items: stretch; /* ⬅️ penting agar tinggi ikut grid */
    gap: 10px;
    margin-top: 10px;
}

/* kiri */
.kurung-kiri {
    font-size: 2.2rem;
    font-weight: 700;
    display: flex;
    align-items: center;
}

/* kanan */
.kurung-kanan {
    font-size: 2.2rem;
    font-weight: 700;
    display: flex;
    align-items: center;
}

/* GRID tetap */
.semesta-grid-full {
    flex: 1;
}



.kard-premium-wrap{
    background:#fff;
    border:1px solid #ece6f5;
    border-radius:22px;
    padding:24px;
    margin-top:24px;
    box-shadow:0 10px 24px rgba(0,0,0,0.06);
}
/*====== css kardinalitas ======*/
.kard-premium-title{
    display:inline-block;
    background:linear-gradient(135deg,#8e44ad,#b57edc);
    color:#fff;
    padding:10px 18px;
    border-radius:14px;
    font-size:1.1rem;
    font-weight:700;
    margin-bottom:16px;
}

.kard-premium-desc{
    font-size:1rem;
    line-height:1.8;
    color:#333;
    margin-bottom:18px;
}

.kard-grid-premium{
    display:grid;
    grid-template-columns:repeat(3, 1fr);
    gap:18px;
}

.kard-card-item{
    background:#fcfbff;
    border:1px solid #e7dff1;
    border-radius:18px;
    padding:18px;
    display:flex;
    gap:14px;
    align-items:flex-start;
}

.kard-no{
    width:38px;
    height:38px;
    border-radius:50%;
    background:#f1e4fb;
    color:#8e44ad;
    font-weight:700;
    display:flex;
    align-items:center;
    justify-content:center;
    flex-shrink:0;
}

.kard-content h4{
    margin:0 0 8px 0;
    font-size:1.05rem;
    color:#222;
}

.kard-content p{
    margin:0 0 8px 0;
    line-height:1.7;
    color:#444;
}

.kard-petunjuk{
    color:#666;
    font-size:0.95rem;
}

.kard-input-line{
    display:flex;
    align-items:center;
    gap:10px;
    margin-top:10px;
    flex-wrap:wrap;
}

.kard-input-line span{
    font-weight:600;
    color:#333;
}

.kard-input-line input{
    width:90px;
    height:44px;
    border:2px solid #ddd6ea;
    border-radius:12px;
    text-align:center;
    font-size:1rem;
    box-sizing:border-box;
    background:#fff;
}

.kard-input-line input:focus{
    outline:none;
    border-color:#a56cc1;
    box-shadow:0 0 0 4px rgba(142,68,173,0.10);
}

.kard-ikon{
    font-size:1.2rem;
    font-weight:700;
    min-width:24px;
}

.kard-benarnya{
    background:#d1e7dd !important;
    border-color:#198754 !important;
    color:#0f5132 !important;
}

.kard-salahnya{
    background:#f8d7da !important;
    border-color:#dc3545 !important;
    color:#842029 !important;
}

.kard-kosongnya{
    background:#fff3cd !important;
    border-color:#ffc107 !important;
    color:#664d03 !important;
}

.kard-action-bar{
    display:flex;
    gap:12px;
    margin-top:22px;
    justify-content:center;
    flex-wrap:wrap;
}

.kard-action-bar button{
    min-width:130px;
    height:46px;
    border-radius:12px;
    font-size:1rem;
    font-weight:600;
    cursor:pointer;
    box-sizing:border-box;
}

.kard-btn-check{
    background:linear-gradient(135deg,#8e44ad,#a569bd);
    color:#fff;
    border:2px solid transparent;
}

.kard-btn-reset{
    background:#fff;
    color:#8e44ad;
    border:2px solid #8e44ad;
}

.kard-feedback-box{
    margin-top:18px;
    padding:14px 16px;
    border-radius:14px;
    display:none;
    line-height:1.8;
    font-weight:600;
}

@media (max-width: 992px){
    .kard-grid-premium{
        grid-template-columns:1fr;
    }
}
</style>

</head>

<body>

@extends('layouts.main')
@section('container')

<div class="content-gap">

    <h2 style="text-align:center;">HIMPUNAN</h2>

   <!-- TUJUAN PEMBELAJARAN -->
<div class="card mt-3">
    <div class="card-header fw-semibold">
        Tujuan Pembelajaran
    </div>
    <div class="card-body">
        <p class="tujuan-text">
            Peserta didik mampu memahami konsep himpunan dan menyajikannya dalam berbagai bentuk untuk menyelesaikan masalah kontekstual sederhana
        </p>
    </div>
</div>


    <!-- KOTAK BESAR -->
    <div class="card mt-4" style="width: 100%;">

        <div class="card-header" style="text-align:center; font-size:1.3rem;">
            Perhatikan gambar silsilah keluarga di bawah ini!
        </div>

        <div class="card-body" style="padding: 25px;">

            <!-- GAMBAR TENGAH -->
            <div style="text-align:center;">
                <img src="/images/bab1.png"
                     style="width:700px; max-width:95%; margin:0 auto; display:block;">

                <p style="margin-top:10px; font-size:0.95rem;">
                    Gambar 1.1 Silsilah Keluarga Bapak Andi
                </p>
            </div>

            <!-- MASALAH -->
            <div style="margin-top:25px; text-align:left;">
             

                <div class="question-box" style="margin-top:10px;">
                    Bagaimana cara menuliskan anggota keluarga tersebut ke dalam himpunan?
                </div>
            </div>
<div class="solution-card">

    <div class="solution-header">
        Penyelesaian
    </div>

   <div class="solution-intro">
    <p>
        Dalam materi himpunan, huruf besar seperti <b>A</b>, <b>B</b>, atau <b>C</b> digunakan sebagai notasi untuk menuliskan sebuah himpunan. Huruf tersebut hanyalah nama himpunan, bukan bagian dari anggotanya.
    </p>

    <p>
        Dari silsilah keluarga Bapak Andi, kita dapat membuat:
    </p>
</div>

    <!-- ================= A ================= -->
    <div class="set-box">
        <div class="set-title">1. Himpunan Anak-anak Bapak Andi</div>

        <div class="set-content">
            <p>Nama himpunannya adalah <strong>A</strong>.</p>
            <p>A berisi nama orang yang menjadi anak dari Bapak Andi.</p>

            <div class="solution-text">
                <strong>Himpunan A</strong> = {
                <input id="a1" oninput="updateBacaNarasi(['a1','a2','a3','a4'], 'bacaA', 'A')">
                ,
                <input id="a2" oninput="updateBacaNarasi(['a1','a2','a3','a4'], 'bacaA', 'A')">
                ,
                <input id="a3" oninput="updateBacaNarasi(['a1','a2','a3','a4'], 'bacaA', 'A')">
                ,
                <input id="a4" oninput="updateBacaNarasi(['a1','a2','a3','a4'], 'bacaA', 'A')">
                }
            </div>

            <div class="cara-baca-wrap">
                <div class="cara-baca-label">Cara Membacanya:</div>
                <div class="cara-baca" id="bacaA"></div>
            </div>

            <div class="btn-actions">
                <button class="btn-cek"
                    onclick="cekSet(['a1','a2','a3','a4'], ['iful','hendra','ardi','ica'], 'hasilA')">
                    Periksa 
                </button>

                <button class="btn-ulang"
                    onclick="resetSet(['a1','a2','a3','a4'],'bacaA','hasilA')">
                    Ulangi
                </button>
            </div>

            <div id="hasilA"></div>
        </div>
    </div>

    <!-- ================= B ================= -->
    <div class="set-box">
        <div class="set-title">2. Himpunan Cucu-cucu Bapak Andi</div>

        <div class="set-content">
            <p>Nama himpunannya adalah <strong>B</strong>.</p>
            <p>B berisi nama orang yang menjadi cucu dari Bapak Andi.</p>

            <div class="solution-text">
                <strong>Himpunan B</strong> = {
                <input id="b1" oninput="updateBacaNarasi(['b1','b2','b3','b4','b5'], 'bacaB', 'B')">
                ,
                <input id="b2" oninput="updateBacaNarasi(['b1','b2','b3','b4','b5'], 'bacaB', 'B')">
                ,
                <input id="b3" oninput="updateBacaNarasi(['b1','b2','b3','b4','b5'], 'bacaB', 'B')">
                ,
                <input id="b4" oninput="updateBacaNarasi(['b1','b2','b3','b4','b5'], 'bacaB', 'B')">
                ,
                <input id="b5" oninput="updateBacaNarasi(['b1','b2','b3','b4','b5'], 'bacaB', 'B')">
                }
            </div>

            <div class="cara-baca-wrap">
                <div class="cara-baca-label">Cara Membacanya:</div>
                <div class="cara-baca" id="bacaB"></div>
            </div>

            <div class="btn-actions">
                <button class="btn-cek"
                    onclick="cekSet(['b1','b2','b3','b4','b5'], ['lala','nabil','alfi','bella','rehan'], 'hasilB')">
                    Periksa
                </button>

                <button class="btn-ulang"
                    onclick="resetSet(['b1','b2','b3','b4','b5'],'bacaB','hasilB')">
                    Ulangi
                </button>
            </div>

            <div id="hasilB"></div>
        </div>
    </div>

    <!-- ================= C ================= -->
    <div class="set-box">
        <div class="set-title">3. Himpunan Kakek dan Nenek</div>

        <div class="set-content">
            <p>Nama himpunannya adalah <strong>C</strong>.</p>
            <p>C berisi nama kakek dan nenek pada silsilah tersebut.</p>

            <div class="solution-text">
                <strong>Himpunan C</strong> = {
                <input id="c1" oninput="updateBacaNarasi(['c1','c2'], 'bacaC', 'C')">
                ,
                <input id="c2" oninput="updateBacaNarasi(['c1','c2'], 'bacaC', 'C')">
                }
            </div>

            <div class="cara-baca-wrap">
                <div class="cara-baca-label">Cara Membacanya:</div>
                <div class="cara-baca" id="bacaC"></div>
            </div>

            <div class="btn-actions">
                <button class="btn-cek"
                    onclick="cekSet(['c1','c2'], ['kiki','lina'], 'hasilC')">
                    periksa
                </button>

                <button class="btn-ulang"
                    onclick="resetSet(['c1','c2'],'bacaC','hasilC')">
                    Ulangi
                </button>
            </div>

            <div id="hasilC"></div>
        </div>
    </div>

</div>
</div>
</div>
<!-- ======================== CARD PEMAHAMAN HIMPUNAN ======================== -->
    <!-- JUDUL UNGU  -->
    <div class="pemahaman-card">
    <div class="pemahaman-header">
        Berdasarkan masalah di atas, apakah kamu bisa memahami apa itu himpunan?
    </div>

        <!-- PENGERTIAN -->
        <div class="pemahaman-item">
           <div class="pengertian-soft">
    <h4>Pengertian Himpunan</h4>

    <p>
        <strong>Himpunan</strong> adalah kumpulan objek tertentu yang dapat diidentifikasi dengan jelas.
        Objek-objek tersebut dapat berupa angka, huruf, benda, atau orang yang memiliki kriteria tertentu.
    </p>

    <p>
        Objek yang terdapat dalam suatu himpunan disebut <strong>anggota</strong> atau
        <strong>elemen himpunan</strong>. Setiap anggota himpunan biasanya dituliskan
        di dalam tanda kurung kurawal <strong>{ }</strong>.
    </p>
</div>

        <!-- NOTASI -->
       <div class="notasi-card">
    <div class="notasi-header">
        Notasi Himpunan
    </div>

    <div class="notasi-body">
        <p>
            Dalam matematika, sebuah himpunan biasanya dituliskan dengan:
        </p>

        <ol>
            <li>
                <strong>Huruf besar sebagai nama himpunan</strong><br>
                Contoh huruf yang digunakan: A, B, C, D, dan seterusnya.
                Huruf besar ini hanya sebagai nama atau label untuk himpunan.
            </li>

            <li>
                <strong>Kurung kurawal { }</strong><br>
                Kurung ini digunakan untuk menuliskan anggota-anggota himpunan.
            </li>

            <li>
                <strong>Anggota dipisahkan dengan koma</strong><br>
                Misalnya: A = {Lala, Nabil, Alfi, Bella, Rehan}
            </li>
        </ol>
    </div>
</div>

    </div>
</div>
<!-- ====================== CONTOH HIMPUNAN ====================== -->
<div class="contoh-grid-2">

    <!-- ================= CARD A ================= -->
    <div class="contoh-card">
        <div class="contoh-header">Contoh Himpunan</div>

        <div class="contoh-body">
            <p>Perhatikan kumpulan berikut dari silsilah keluarga Bapak Andi.</p>

            <div class="contoh-set">
                A = {Ipul, Hendra, Ardi, Ica}
            </div>

            <p class="mt-3"><strong>Kumpulan tersebut merupakan ....</strong></p>

            <div class="opsi-checkbox">
                <label>
                    <input type="checkbox" id="ca1">
                    <span>kumpulan anak-anak dari Bapak Andi</span>
                </label>

                <label>
                    <input type="checkbox" id="ca2">
                    <span>kumpulan cucu-cucu dari Bapak Andi</span>
                </label>

                <label>
                    <input type="checkbox" id="ca3">
                    <span>kumpulan kakek dan nenek</span>
                </label>
            </div>

            <button type="button" class="btn-cek" onclick="cekA()">Periksa</button>

            <div id="hasilContohA" class="hasil-box"></div>
        </div>
    </div>

    <!-- ================= CARD B ================= -->
    <div class="contoh-card">
        <div class="contoh-header">Contoh Himpunan</div>

        <div class="contoh-body">
            <p><strong>Pilih jawaban yang tepat.</strong></p>

            <div class="contoh-set">
                B = {Lala, Nabil, Alfi, Bella, Rehan}
            </div>

            <p class="mt-3"><strong>Kumpulan tersebut merupakan ....</strong></p>

            <div class="opsi-checkbox">
                <label>
                    <input type="checkbox" id="cb1">
                    <span>kumpulan anak-anak dari Bapak Andi</span>
                </label>

                <label>
                    <input type="checkbox" id="cb2">
                    <span>kumpulan cucu-cucu dari Bapak Andi</span>
                </label>

                <label>
                    <input type="checkbox" id="cb3">
                    <span>kumpulan kakek dan nenek</span>
                </label>
            </div>

            <button type="button" class="btn-cek" onclick="cekB()">Periksa</button>

            <div id="hasilContohB" class="hasil-box"></div>

        </div>
    </div>

</div>

<div class="kesimpulan">
    ✓ Setelah kamu melengkapinya, perhatikan bahwa anggota kedua kumpulan tersebut
    <strong>dapat ditentukan dengan jelas</strong>. Oleh karena itu, kedua kumpulan tersebut
    disebut <strong>himpunan</strong>.
</div>

<div class="quiz-box-unik">
    <div class="quiz-header-unik">Ayo Tentukan</div>

    <p>Perhatikan kumpulan berikut.</p>

    <p><strong>A = {Ipul, Hendra, Ardi, Ica} → kumpulan anak-anak yang rajin</strong></p>

    <p>Menurutmu, apakah kumpulan tersebut dapat disebut <strong>himpunan</strong>?</p>

    <p><strong>Tekan salah satu tombol jawaban yang menurutmu benar.</strong></p>

    <div class="quiz-opsi-wrap">
    <button type="button" class="quiz-opsi-btn" onclick="cekJawabanUnik('ya')">
        Himpunan
    </button>

    <button type="button" class="quiz-opsi-btn" onclick="cekJawabanUnik('tidak')">
        Bukan Himpunan
    </button>
</div>

<div id="feedbackUnik"></div>
</div>
<!-- ====================== KOTAK HIMPUNAN SEMESTA  ====================== -->
<div style="
    background-color:#FFF6D6;
    border:3px dashed #FFDF94;
    border-radius:18px;
    padding:25px;
    margin-top:20px;
    width:100%;
    box-sizing:border-box;
">

    <h3 style="
        font-weight:700;
        font-size:1.3rem;
        color:#C58940;
        margin-bottom:15px;
    ">
        Himpunan Semesta
    </h3>

    <p style="
        font-size:1rem;
        color:#444;
        line-height:1.9;
        text-align: justify;
        margin-bottom:12px;
    ">
        <strong>Himpunan semesta</strong> adalah himpunan yang memuat semua anggota yang menjadi bagian dari suatu kelompok. Semua anggota dari himpunan-himpunan lain berada di dalam himpunan semesta.
    </p>

    <p style="
        font-size:1rem;
        color:#444;
        line-height:1.9;
        text-align: justify;
    ">
        Himpunan semesta biasanya dilambangkan dengan huruf <strong>S</strong>. Himpunan ini disebut himpunan semesta karena memuat seluruh anggota yang ada pada himpunan-himpunan yang sedang dibentuk.
    </p>

</div>

<!-- ====================== AYO TENTUKAN HIMPUNAN SEMESTA ====================== -->
<div class="semesta-card-full">

    <div class="semesta-title-full">
        Ayo Tentukan Himpunan Semesta
    </div>

    <p class="semesta-desc-full">Perhatikan kembali silsilah keluarga Bapak Andi.</p>

   <div class="semesta-petunjuk-full">
    <strong>Petunjuk:</strong><br>
    Tuliskan semua nama yang ada pada silsilah keluarga Bapak Andi ke dalam himpunan semesta (S).

    <p style="margin-top:8px; font-size:0.95rem; color:#555;">
        Setelah kamu menekan tombol <strong>Periksa</strong>, kotak jawaban akan berubah warna:
    </p>

    <div style="font-size:0.95rem; color:#555;">
        <span style="margin-right:12px;">🟢 Benar</span>
        <span style="margin-right:12px;">🔴 Salah</span>
        <span>🟡 Belum dijawab</span>
    </div>
</div>

    <p class="semesta-desc-full">Tuliskan himpunan semestanya.</p>
<div class="semesta-wrap-full">
    <div class="kurung-kiri">S = {</div>

        <div class="semesta-grid-full">
            <input id="sem1" placeholder="nama">
            <input id="sem2" placeholder="nama">
            <input id="sem3" placeholder="nama">
            <input id="sem4" placeholder="nama">
            <input id="sem5" placeholder="nama">
            <input id="sem6" placeholder="nama">
            <input id="sem7" placeholder="nama">
            <input id="sem8" placeholder="nama">
            <input id="sem9" placeholder="nama">
            <input id="sem10" placeholder="nama">
            <input id="sem11" placeholder="nama">
            <input id="sem12" placeholder="nama">
            <input id="sem13" placeholder="nama">
        </div>

        <div class="kurung-kanan">}</div>

    </div>

    <div class="semesta-btns-full">
        <button type="button" class="btn-semesta-periksa-full" onclick="cekSemestaFull()">Periksa</button>
        <button type="button" class="btn-semesta-ulang-full" onclick="resetSemestaFull()">Ulangi</button>
    </div>

    <div id="hasilSemestaFull" class="semesta-feedback-full"></div>
</div>

<!-- ====================== KOTAK KARDINALITAS HIMPUNAN ====================== -->
<div style="
    background-color:#FFF6D6;
    border:3px dashed #FFDF94;
    border-radius:18px;
    padding:25px;
    margin-top:20px;
    width:100%;
    box-sizing:border-box;
">

    <h3 style="
        font-weight:700;
        font-size:1.3rem;
        color:#C58940;
        margin-bottom:15px;
    ">
        Kardinalitas Himpunan
    </h3>

    <p style="
        font-size:1rem;
        color:#444;
        line-height:1.9;
        text-align: justify;
        margin-bottom:12px;
    ">
        <strong>Kardinalitas himpunan</strong> adalah bilangan yang menunjukkan banyaknya anggota dalam suatu himpunan. Artinya, kardinalitas digunakan untuk mengetahui berapa jumlah elemen yang ada di dalam suatu himpunan.
    </p>

    <p style="
        font-size:1rem;
        color:#444;
        line-height:1.9;
        text-align: justify;
    ">
        Kardinalitas suatu himpunan biasanya ditulis dengan notasi <strong>n(A)</strong>, yang berarti banyaknya anggota dalam himpunan A. Dengan notasi ini, kita dapat dengan mudah mengetahui jumlah anggota dari suatu himpunan.
    </p>

</div>

<!-- ====================== AYO TENTUKAN KARDINALITAS HIMPUNAN ====================== -->
<div class="kard-premium-wrap">

    <div class="kard-premium-title">
        Ayo Tentukan Kardinalitas Himpunan
    </div>

    <p class="kard-premium-desc">
        Perhatikan himpunan berikut, lalu tentukan banyak anggota pada setiap himpunan.
    </p>

    <div class="kard-grid-premium">

        <!-- CARD A -->
        <div class="kard-card-item">
            <div class="kard-no">1</div>
            <div class="kard-content">
                <h4>Himpunan Anak-anak Bapak Andi</h4>
                <p>A = {Ipul, Hendra, Ardi, Ica}</p>
                <p class="kard-petunjuk">Hitunglah banyak anggota pada himpunan A.</p>

                <div class="kard-input-line">
                    <span>n(A) =</span>
                    <input type="number" id="kpa" min="0">
                    <span id="ikonA" class="kard-ikon"></span>
                </div>
            </div>
        </div>

        <!-- CARD B -->
        <div class="kard-card-item">
            <div class="kard-no">2</div>
            <div class="kard-content">
                <h4>Himpunan Cucu-cucu Bapak Andi</h4>
                <p>B = {Lala, Nabil, Alfi, Bella, Rehan}</p>
                <p class="kard-petunjuk">Hitunglah banyak anggota pada himpunan B.</p>

                <div class="kard-input-line">
                    <span>n(B) =</span>
                    <input type="number" id="kpb" min="0">
                    <span id="ikonB" class="kard-ikon"></span>
                </div>
            </div>
        </div>

        <!-- CARD C -->
        <div class="kard-card-item">
            <div class="kard-no">3</div>
            <div class="kard-content">
                <h4>Himpunan Orang Tua (Kakek dan Nenek)</h4>
                <p>C = {Andi, Lina}</p>
                <p class="kard-petunjuk">Hitunglah banyak anggota pada himpunan C.</p>

                <div class="kard-input-line">
                    <span>n(C) =</span>
                    <input type="number" id="kpc" min="0">
                    <span id="ikonC" class="kard-ikon"></span>
                </div>
            </div>
        </div>

    </div>

    <div class="kard-action-bar">
        <button type="button" class="kard-btn-check" onclick="cekKardPremium()">Periksa</button>
        <button type="button" class="kard-btn-reset" onclick="resetKardPremium()">Ulangi</button>
    </div>

    <div id="hasilKardPremium" class="kard-feedback-box"></div>
</div>


<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12 d-flex justify-content-end">

            <!-- Tombol Selanjutnya (kanan) -->
            <a href="/bab_1/lanjut_1" class="btn btn-success px-4">
                Selanjutnya →
            </a>

        </div>
    </div>
</div>


@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function kapital(teks) {
        if (!teks) return "";
        return teks.charAt(0).toUpperCase() + teks.slice(1);
    }

    function updateBacaNarasi(ids, targetId, namaHimpunan) {
        let values = ids
            .map(id => document.getElementById(id).value.trim())
            .filter(v => v !== "");

        let el = document.getElementById(targetId);

        if (!el) return;

        if (values.length === 0) {
            el.style.display = "none";
            el.innerHTML = "";
            return;
        }

        let daftar = values.map(v => kapital(v)).join(", ");
        el.innerHTML = `“${namaHimpunan} adalah himpunan yang beranggotakan ${daftar}.”`;
        el.style.display = "block";
    }

    function cekSet(ids, jawaban, hasilId) {
        let inputs = ids.map(id => document.getElementById(id)).filter(Boolean);
        let values = inputs.map(i => i.value.toLowerCase().trim());
        let jawabanNorm = jawaban.map(j => j.toLowerCase().trim());

        let unik = new Set();
        let benarSet = new Set(jawabanNorm);

        let benarCount = 0;
        let duplikat = false;
        let adaKosong = false;

        inputs.forEach((input, i) => {
            input.classList.remove("benar", "salah", "duplikat", "kosong");

            let val = values[i];

            if (val === "") {
                input.classList.add("kosong");
                adaKosong = true;
                return;
            }

            if (unik.has(val)) {
                input.classList.add("duplikat");
                duplikat = true;
                return;
            }

            unik.add(val);

            if (benarSet.has(val)) {
                input.classList.add("benar");
                benarCount++;
            } else {
                input.classList.add("salah");
            }
        });

        let total = jawabanNorm.length;
        let infoBenar = `Benar ${benarCount} dari ${total} anggota.`;

        let hasil = document.getElementById(hasilId);
        if (!hasil) return;

        hasil.classList.remove("hasil-benar", "hasil-salah", "hasil-peringatan");
        hasil.style.display = "block";

        if (benarCount === total && !duplikat && !adaKosong && unik.size === total) {
            hasil.innerHTML = `✅ Semua jawaban benar. ${infoBenar}`;
            hasil.classList.add("hasil-benar");
        } else if (duplikat) {
            hasil.innerHTML = ` Ada jawaban yang sama/duplikat. ${infoBenar}`;
            hasil.classList.add("hasil-peringatan");
        } else if (adaKosong) {
            hasil.innerHTML = ` Masih ada yang kosong. ${infoBenar}`;
            hasil.classList.add("hasil-peringatan");
        } else if (benarCount > 0) {
            hasil.innerHTML = ` Sebagian jawaban sudah benar. ${infoBenar}`;
            hasil.classList.add("hasil-peringatan");
        } else {
            hasil.innerHTML = `❌ Jawaban belum tepat. ${infoBenar}`;
            hasil.classList.add("hasil-salah");
        }
    }

    function resetSet(ids, bacaId, hasilId) {
        ids.forEach(id => {
            let input = document.getElementById(id);
            if (!input) return;

            input.value = "";
            input.classList.remove("benar", "salah", "duplikat", "kosong");
            input.style.background = "";
            input.style.borderColor = "";
        });

        let baca = document.getElementById(bacaId);
        if (baca) {
            baca.innerHTML = "";
            baca.style.display = "none";
        }

        let hasil = document.getElementById(hasilId);
        if (hasil) {
            hasil.innerHTML = "";
            hasil.classList.remove("hasil-benar", "hasil-salah", "hasil-peringatan");
            hasil.style.display = "none";
        }
    }

    /* =========================
       CONTOH HIMPUNAN - CARD A
       pakai ID: ca1, ca2, ca3
    ========================= */
    function cekA() {
    const hasil = document.getElementById("hasilContohA");
    const a1 = document.getElementById("ca1");
    const a2 = document.getElementById("ca2");
    const a3 = document.getElementById("ca3");

    if (!hasil || !a1 || !a2 || !a3) return;

    hasil.style.display = "block";
    hasil.className = "hasil-box";

    if (!a1.checked && !a2.checked && !a3.checked) {
        hasil.innerHTML = " Silakan pilih jawaban terlebih dahulu.";
        hasil.classList.add("hasil-peringatan");
        return;
    }

    if (a1.checked && !a2.checked && !a3.checked) {
        hasil.innerHTML = "✅ Jawaban benar. Kumpulan tersebut merupakan kumpulan anak-anak dari Bapak Andi.";
        hasil.classList.add("hasil-benar");
    } else {
        hasil.innerHTML = "❌ Jawaban belum tepat. Periksa kembali pilihan yang Anda centang.";
        hasil.classList.add("hasil-salah");
    }
}


    /* =========================
       CONTOH HIMPUNAN - CARD B
       pakai ID: cb1, cb2, cb3
    ========================= */
    function cekB() {
    const hasil = document.getElementById("hasilContohB");
    const b1 = document.getElementById("cb1");
    const b2 = document.getElementById("cb2");
    const b3 = document.getElementById("cb3");

    if (!hasil || !b1 || !b2 || !b3) return;

    hasil.style.display = "block";
    hasil.className = "hasil-box";

    if (!b1.checked && !b2.checked && !b3.checked) {
        hasil.innerHTML = " Silakan pilih jawaban terlebih dahulu.";
        hasil.classList.add("hasil-peringatan");
        return;
    }

    if (!b1.checked && b2.checked && !b3.checked) {
        hasil.innerHTML = "✅ Jawaban benar. Kumpulan tersebut merupakan kumpulan cucu-cucu dari Bapak Andi.";
        hasil.classList.add("hasil-benar");
    } else {
        hasil.innerHTML = "❌ Jawaban belum tepat. Periksa kembali pilihan yang Anda centang.";
        hasil.classList.add("hasil-salah");
    }
}

function cekJawabanUnik(pilihan) {
    const box = document.getElementById("feedbackUnik");
    box.style.display = "block";

    if (pilihan === "tidak") {
        box.innerHTML = "✅ <strong>Jawaban benar.</strong> Kumpulan tersebut <strong>bukan himpunan</strong>. Karena, kata <strong>rajin</strong> tidak memiliki batas yang pasti dan jelas. Setiap orang bisa mempunyai pendapat yang berbeda tentang siapa yang termasuk rajin dan siapa yang tidak. Karena anggotanya tidak dapat ditentukan dengan jelas, maka kumpulan itu <strong>tidak dapat disebut himpunan</strong>.";
        box.style.background = "#d1e7dd";
        box.style.color = "#0f5132";
        box.style.borderLeft = "4px solid #198754";
    } else {
        box.innerHTML = "❌ <strong>Jawaban kurang tepat.</strong> Kumpulan tersebut <strong>bukan himpunan</strong>, karena menggunakan kata <strong>rajin</strong> yang bersifat subjektif. Artinya, ukuran rajin itu bisa berbeda-beda menurut setiap orang. Dalam himpunan, anggota harus dapat ditentukan dengan jelas. Karena pada contoh ini anggotanya tidak dapat dipastikan secara sama oleh semua orang, maka kumpulan tersebut <strong>bukan himpunan</strong>.";
        box.style.background = "#f8d7da";
        box.style.color = "#842029";
        box.style.borderLeft = "4px solid #dc3545";
    }
}

function cekSemestaFull(){
    const jawabanBenar = [
        "andi","lina","iful","ifit","hendra","hikmah",
        "ardi","nisa","lala","nabil","alfi","bella","rehan"
    ];

    const ids = [
        "sem1","sem2","sem3","sem4","sem5","sem6","sem7",
        "sem8","sem9","sem10","sem11","sem12","sem13"
    ];

    const hasil = document.getElementById("hasilSemestaFull");

    let isi = [];
    let adaKosong = false;

    // reset warna
    ids.forEach(id => {
        const el = document.getElementById(id);
        el.classList.remove("semesta-benar", "semesta-salah", "semesta-kosong");
    });

    // ambil nilai
    ids.forEach(id => {
        const el = document.getElementById(id);
        const val = el.value.toLowerCase().trim();

        if (val === "") {
            adaKosong = true;
            el.classList.add("semesta-kosong");
        } else {
            isi.push(val);
        }
    });

    // tandai benar / salah
    ids.forEach(id => {
        const el = document.getElementById(id);
        const val = el.value.toLowerCase().trim();

        if (val === "") return;

        if (jawabanBenar.includes(val)) {
            el.classList.add("semesta-benar");
        } else {
            el.classList.add("semesta-salah");
        }
    });

    const semuaBenar = jawabanBenar.every(nama => isi.includes(nama));
    const jumlahPas = isi.length === jawabanBenar.length;
    const tidakAdaDuplikat = new Set(isi).size === isi.length;

    const jawabanTampil =
        "S = {Andi, Lina, Iful, Ifit, Hendra, Hikmah, Ardi, Nisa, Lala, Nabil, Alfi, Bella, Rehan}";

    hasil.style.display = "block";

    // ================= KONDISI =================

    // 1. KOSONG SEMUA
    if (isi.length === 0) {
        hasil.innerHTML =
        " <strong>Ayo mulai dulu ya 😊</strong><br>" +
        "Isi terlebih dahulu nama-nama yang ada pada silsilah keluarga.<br>" +
        "Ingat, himpunan semesta berisi semua anggota yang sedang dibicarakan.<br><br>" +
        "<strong>Bentuk himpunan semesta yang benar adalah:</strong><br>" +
        jawabanTampil;

        hasil.style.background = "#fff3cd";
        hasil.style.color = "#664d03";
        hasil.style.borderLeft = "4px solid #ffc107";
        return;
    }

    // 2. BENAR SEMUA
    if (semuaBenar && jumlahPas && tidakAdaDuplikat && !adaKosong) {
        hasil.innerHTML =
        " <strong>Bagus sekali!</strong><br>" +
        "Kamu sudah berhasil menuliskan semua anggota himpunan semesta dengan lengkap dan tepat.<br>" +
        "Artinya, kamu sudah memahami bahwa himpunan semesta memuat seluruh anggota yang sedang dibicarakan.<br><br>" +
        "<strong>Bentuk himpunan semesta yang benar adalah:</strong><br>" +
        jawabanTampil;

        hasil.style.background = "#d1e7dd";
        hasil.style.color = "#0f5132";
        hasil.style.borderLeft = "4px solid #198754";
        return;
    }

    // 3. ADA DUPLIKAT
    if (!tidakAdaDuplikat) {
        hasil.innerHTML =
        " <strong>Hampir benar 😊</strong><br>" +
        "Masih ada nama yang ditulis lebih dari satu kali.<br>" +
        "Setiap anggota himpunan cukup dituliskan satu kali saja.<br><br>" +
        "<strong>Bentuk himpunan semesta yang benar adalah:</strong><br>" +
        jawabanTampil;

        hasil.style.background = "#fff3cd";
        hasil.style.color = "#664d03";
        hasil.style.borderLeft = "4px solid #ffc107";
        return;
    }

    // 4. SALAH / BELUM LENGKAP
    hasil.innerHTML =
    " <strong>Yuk, periksa lagi ya 😊</strong><br>" +
    "Masih ada nama yang belum tepat atau belum lengkap.<br>" +
    "Ingat, himpunan semesta harus memuat semua anggota yang ada pada silsilah tersebut.<br><br>" +
    "<strong>Bentuk himpunan semesta yang benar adalah:</strong><br>" +
    jawabanTampil;

    hasil.style.background = "#f8d7da";
    hasil.style.color = "#842029";
    hasil.style.borderLeft = "4px solid #dc3545";
}


// ================= RESET =================
function resetSemestaFull(){
    for(let i = 1; i <= 13; i++){
        const el = document.getElementById("sem" + i);
        el.value = "";
        el.classList.remove("semesta-benar", "semesta-salah", "semesta-kosong");
    }

    const hasil = document.getElementById("hasilSemestaFull");
    hasil.innerHTML = "";
    hasil.style.display = "none";
}



function cekKardPremium(){
    const inputA = document.getElementById("kpa");
    const inputB = document.getElementById("kpb");
    const inputC = document.getElementById("kpc");

    const ikonA = document.getElementById("ikonA");
    const ikonB = document.getElementById("ikonB");
    const ikonC = document.getElementById("ikonC");

    const hasil = document.getElementById("hasilKardPremium");

    const benarA = "4";
    const benarB = "5";
    const benarC = "2";

    const data = [
        {input: inputA, ikon: ikonA, benar: benarA},
        {input: inputB, ikon: ikonB, benar: benarB},
        {input: inputC, ikon: ikonC, benar: benarC}
    ];

    let jumlahBenar = 0;
    let adaKosong = false;

    data.forEach(item => {
        item.input.classList.remove("kard-benarnya", "kard-salahnya", "kard-kosongnya");
        item.ikon.textContent = "";

        const nilai = item.input.value.trim();

        if (nilai === "") {
            item.input.classList.add("kard-kosongnya");
            item.ikon.textContent = "⚠️";
            adaKosong = true;
        } else if (nilai === item.benar) {
            item.input.classList.add("kard-benarnya");
            item.ikon.textContent = "✅";
            jumlahBenar++;
        } else {
            item.input.classList.add("kard-salahnya");
            item.ikon.textContent = "❌";
        }
    });

    hasil.style.display = "block";

    if (jumlahBenar === 3) {
        hasil.innerHTML =
            "🎉 <strong>Bagus sekali!</strong><br>" +
            "Kamu sudah menentukan kardinalitas setiap himpunan dengan tepat.<br>" +
            "Ingat, kardinalitas adalah banyaknya anggota dalam suatu himpunan.<br><br>" +
            "<strong>Jadi:</strong><br>" +
            "n(A) = 4, n(B) = 5, dan n(C) = 2.";
        hasil.style.background = "#d1e7dd";
        hasil.style.color = "#0f5132";
        hasil.style.borderLeft = "4px solid #198754";
    } else if (adaKosong) {
        hasil.innerHTML =
            "<strong>Yuk, lengkapi dulu ya 😊</strong><br>" +
            "Masih ada kotak yang belum diisi.<br>" +
            "Coba hitung kembali banyak anggota pada setiap himpunan.<br><br>" +
            "<strong>Jawaban yang benar adalah:</strong><br>" +
            "n(A) = 4, n(B) = 5, dan n(C) = 2.";
        hasil.style.background = "#fff3cd";
        hasil.style.color = "#664d03";
        hasil.style.borderLeft = "4px solid #ffc107";
    } else {
        hasil.innerHTML =
            "<strong>Hampir benar 😊</strong><br>" +
            "Masih ada jawaban yang belum tepat.<br>" +
            "Perhatikan lagi banyak anggota pada setiap himpunan ya.<br><br>" +
            "<strong>Jawaban yang benar adalah:</strong><br>" +
            "n(A) = 4, n(B) = 5, dan n(C) = 2.";
        hasil.style.background = "#f8d7da";
        hasil.style.color = "#842029";
        hasil.style.borderLeft = "4px solid #dc3545";
    }
}

function resetKardPremium(){
    const ids = ["kpa","kpb","kpc"];
    const ikonIds = ["ikonA","ikonB","ikonC"];

    ids.forEach(id => {
        const el = document.getElementById(id);
        el.value = "";
        el.classList.remove("kard-benarnya", "kard-salahnya", "kard-kosongnya");
    });

    ikonIds.forEach(id => {
        document.getElementById(id).textContent = "";
    });

    const hasil = document.getElementById("hasilKardPremium");
    hasil.innerHTML = "";
    hasil.style.display = "none";
}
</script>
</body>
</html>
