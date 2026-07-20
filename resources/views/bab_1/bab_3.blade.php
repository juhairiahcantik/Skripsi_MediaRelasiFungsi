@extends('layouts.main')

@section('container')

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

    .card {
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        border-radius: 12px;
    }

    .card-header {
        background-color: #CDA4DE !important;
        font-weight: 700;
        font-size: 1.1rem;

        color: white !important;
        text-align: center;
    }

    /* ================= TEKS ================= */

    .materi-content {
        font-size: 0.95rem;
        color: #444;
        line-height: 1.7;
    }

    .masalah-badge {
        background-color: #FFCCF5;
        color: #6A2C70;
        padding: 8px 25px;
        border-radius: 25px;
        display: inline-block;
        font-weight: 700;
        font-size: 1.4rem;
    }

    .question-box {
        background-color: #FFF6D6;
        border-radius: 18px;
        padding: 20px;
        font-weight: 600;
        font-size: 0.95rem;
        line-height: 1.7;
    }

    /* ================= PENYELESAIAN ================= */

    .solution-card {
    width: 100%;
    box-sizing: border-box;
    background-color: #ffffff;
    border: 3px dashed #CDA4DE;
    border-radius: 24px;
    padding: 35px;
    margin-top: 25px;
}

.solution-title {
    font-size: 1.05rem;
    font-weight: 700;
    color: #6A2C70;
    margin-bottom: 25px;
    text-align: center;
}

.parkir-interaktif {
    width: 100%;
}

.parkir-interaktif h1 {
    font-size: 1.05rem;
    font-weight: 600;
    line-height: 1.6;
    color: #6A2C70;
}

.parkir-info {
    background: #F3E8FF;
    padding: 20px;
    border-radius: 16px;
    font-size: 1rem;
    line-height: 1.8;
    margin-bottom: 20px;
    color: #333;
}

.parkir-card {
    background: #ffffff;
    border: 2px solid #E9D5FF;
    padding: 22px;
    border-radius: 16px;
}

.parkir-card h2 {
    font-size: 1.1rem;
    color: #6A2C70;
    margin-bottom: 15px;
    font-weight: 700;
}

.parkir-opsi-wrap {
    display: grid;
    gap: 12px;
}

.parkir-option {
    display: flex;
    gap: 10px;
    border: 2px solid #E9D5FF;
    padding: 14px;
    border-radius: 12px;
    font-size: 1rem;
    line-height: 1.6;
    cursor: pointer;
}

.parkir-option:hover {
    background: #FAF5FF;
}

.parkir-option input {
    margin-top: 4px;
    transform: scale(1.2);
}

.parkir-btn {
    display: block;
    margin: 25px auto 0;
    background: linear-gradient(135deg, #8e44ad, #a569bd);
    color: white;
    border: none;
    padding: 12px 28px;
    font-size: 1rem;
    font-weight: 600;
    border-radius: 12px;
    cursor: pointer;
}

.parkir-hasil {
    display: none;
    margin-top: 20px;
    padding: 20px;
    border-radius: 16px;
    font-size: 1rem;
    line-height: 1.8;
}

.parkir-benar {
    background: #EEF9EE;
    border-left: 6px solid #2E9A44;
}

.parkir-salah {
    background: #FFF1F1;
    border-left: 6px solid #D13B3B;
}

.parkir-badge {
    display: inline-block;
    padding: 6px 12px;
    background: #F3E8FF;
    border-radius: 15px;
    font-weight: 700;
    margin-bottom: 10px;
    color: #6A2C70;
    font-size: 0.95rem;
}

/* ================= PENYAJIAN FUNGSI ================= */

.penyajian-box {
    margin-top: 35px;
    width: 100%;
    box-sizing: border-box;
    background: #ffffff;
    border: none;
    padding: 0;
}

.penyajian-title {
    text-align: left;

    font-size: 1.0rem;
    font-weight: 700;
    color: #6A2C70;

    margin-bottom: 5px;
}

.penyajian-sub {
    text-align: left;
    font-size: 1rem;
    color: #555;
    line-height: 1.7;
    margin-bottom: 25px;
}

.penyajian-card {
    background: #F8F4FF;
    border: 2px solid #E9D5FF;
    padding: 22px;
    border-radius: 16px;
    margin-bottom: 22px;
}

.penyajian-card h3 {
    display: flex;
    align-items: center;
    font-size: 1.15rem;
    color: #4A1F5E;
    font-weight: 700;
    margin-bottom: 10px;
}

.badge-soal {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 28px;
    height: 28px;
    background: #8e44ad;
    color: #ffffff;
    border-radius: 8px;
    font-size: 0.9rem;
    font-weight: 700;
    margin-right: 8px;
}

.penyajian-card p {
    font-size: 0.98rem;
    line-height: 1.7;
    margin-bottom: 12px;
    color: #333;
}

.penyajian-input {
    width: 100%;
    padding: 10px 12px;
    border: 2px solid #E9D5FF;
    border-radius: 10px;
    font-size: 0.95rem;
    margin-top: 8px;
    outline: none;
}

.penyajian-input:focus {
    border-color: #8e44ad;
}

.penyajian-btn {
    margin-top: 12px;
    background: linear-gradient(135deg, #8e44ad, #a569bd);
    color: white;
    border: none;
    padding: 10px 22px;
    font-size: 0.95rem;
    font-weight: 600;
    border-radius: 10px;
    cursor: pointer;
}

.penyajian-btn:hover {
    opacity: 0.9;
}

.penyajian-feedback {
    display: none;
    margin-top: 14px;
    padding: 16px;
    border-radius: 12px;
    font-size: 0.95rem;
    line-height: 1.7;
}

.penyajian-benar {
    background: #EEF9EE;
    border-left: 6px solid #2E9A44;
}

.penyajian-salah {
    background: #FFF1F1;
    border-left: 6px solid #D13B3B;
}

#canvasPanahPenyajian,
#canvasGrafikPenyajian {
    background: white;
    border: 2px solid #E9D5FF;
    border-radius: 14px;
    display: block;
    margin: 15px auto;
    max-width: 100%;
    height: auto;
}

.penyajian-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

.penyajian-table th,
.penyajian-table td {
    border: 1px solid #E9D5FF;
    padding: 10px;
    text-align: center;
}

.penyajian-table th {
    background: #F3E8FF;
    color: #6A2C70;
}

.penyajian-table input {
    margin-top: 0;
}

/* ================= RESPONSIVE ================= */

@media(max-width:700px) {
    .solution-card {
        padding: 20px;
    }

    .solution-title {
        font-size: 1.25rem;
    }

    .parkir-interaktif h1 {
        font-size: 1.1rem;
    }

    .parkir-info {
        font-size: 0.95rem;
        padding: 16px;
    }

    .parkir-option {
        font-size: 0.9rem;
    }

    .parkir-btn,
    .penyajian-btn {
        width: 100%;
    }

    .penyajian-title {
        font-size: 1.1rem;
    }

    .penyajian-card {
        padding: 16px;
    }

    .penyajian-card h3 {
        font-size: 1rem;
    }

    .penyajian-card p,
    .penyajian-sub,
    .penyajian-input,
    .penyajian-feedback {
        font-size: 0.9rem;
    }
}
.badge-soal{
    display:inline-flex;
    align-items:center;
    justify-content:center;

    width:28px;
    height:28px;

    background:#8e44ad;       /* ungu lebih kuat */
    color:#ffffff;            /* angka jadi putih */

    border-radius:8px;
    font-size:0.9rem;
    font-weight:700;

    margin-right:8px;
}
    .card-tabel-fungsi-aman{
        width:100%;
        border:2px solid #CDA4DE;
        border-radius:16px;
        overflow:hidden;
        box-shadow:0 4px 10px rgba(0,0,0,0.08);
        background:#fff;
    }

    .card-tabel-fungsi-aman .card-header{
        background:#CDA4DE !important;
        color:#2f1240 !important;
        font-weight:700;
        font-size:1.1rem;
        text-align:center;
        border-bottom:2px solid #B784CC;
    }

    .card-tabel-fungsi-aman .card-body{
        background:#FFFFFF;
        padding:24px;
    }

    .wrapper-tabel-fungsi-aman{
        width:100%;
        overflow-x:auto;
        -webkit-overflow-scrolling:touch;
        border-radius:12px;
        padding-bottom:8px;
    }

    .tabel-fungsi-aman{
        width:100%;
        min-width:720px;
        border-collapse:collapse;
        border:2px solid #DCC2EA;
    }

    .tabel-fungsi-aman th{
        background:#EEDCFA !important;
        color:#2f1240;
        text-align:center;
        vertical-align:middle;
        font-weight:700;
        padding:12px;
        font-size:0.95rem;
        border:1px solid #D6B8E8 !important;
    }

    .tabel-fungsi-aman td{
        vertical-align:middle;
        text-align:center;
        padding:10px;
        font-size:0.9rem;
        border:1px solid #E4D2F0 !important;
        background:#FFFFFF;
    }

    .contoh-fungsi-aman{
        white-space:nowrap;
        font-family:monospace;
        font-size:0.85rem;
        color:#111;
        font-weight:600;
    }

    .jawab-tabel-fungsi{
        min-width:120px;
        font-size:0.9rem;
        border:2px solid #D6B8E8;
        border-radius:10px;
        box-shadow:none;
    }

    .jawab-tabel-fungsi:focus{
        border-color:#8E44AD;
        box-shadow:0 0 0 0.15rem rgba(142,68,173,0.15);
    }

    .btn-cek-tabel-fungsi{
        display:block;
        margin:18px auto 0;
        background:linear-gradient(135deg,#27AE60,#2ECC71);
        color:#fff;
        border:none;
        padding:12px 28px;
        font-size:0.95rem;
        font-weight:700;
        border-radius:12px;
        cursor:pointer;
        transition:0.2s ease;
    }

    .btn-cek-tabel-fungsi:hover{
        transform:translateY(-1px);
        opacity:0.95;
    }

    #hasilTabelFungsiAman{
        display:none;
        margin-top:16px;
        padding:18px 20px;
        border-radius:14px;
        background:#FFFFFF;
        border:2px solid #CDA4DE;
        color:#2f1240;
    }

    .feedback-header-tabel{
        padding-bottom:14px;
        margin-bottom:6px;
        border-bottom:2px solid #B784CC;
        text-align:left;
    }

    .feedback-ringkas-tabel{
        font-size:1rem;
        font-weight:700;
        line-height:1.6;
        color:#2f1240;
    }

    .feedback-item-tabel{
        display:grid;
        grid-template-columns:42px 1fr auto;
        gap:14px;
        align-items:start;
        padding:12px 8px;
        border-bottom:1px dashed #E2C7F2;
    }

    .feedback-item-tabel:last-child{
        border-bottom:none;
    }

    .feedback-nomor-tabel{
        width:32px;
        height:32px;
        border-radius:50%;
        background:linear-gradient(135deg,#8E44AD,#A569BD);
        color:#fff;
        display:flex;
        align-items:center;
        justify-content:center;
        font-weight:700;
        font-size:0.95rem;
    }

    .feedback-isi-tabel{
        font-size:0.92rem;
        line-height:1.6;
        color:#2f1240;
    }

    .feedback-status-benar{
        color:#1E7E34;
        font-weight:700;
    }

    .feedback-status-salah{
        color:#C0392B;
        font-weight:700;
    }

    .feedback-jawaban-benar{
        font-weight:700;
        color:#2f1240;
    }

    .feedback-jawaban-kamu{
        display:flex;
        align-items:center;
        gap:8px;
        white-space:nowrap;
        font-size:0.88rem;
        color:#2f1240;
        padding-top:4px;
    }

    .label-jawaban-kamu{
        background:#F3E8FF;
        color:#8E44AD;
        font-weight:700;
        padding:4px 10px;
        border-radius:8px;
    }

    .catatan-tabel-fungsi{
        margin-top:14px;
        font-size:0.9rem;
        color:#555;
    }

    @media(max-width:700px){
        .card-tabel-fungsi-aman .card-body{
            padding:16px;
        }

        .tabel-fungsi-aman{
            min-width:680px;
        }

        .tabel-fungsi-aman th{
            font-size:0.85rem;
            padding:10px;
        }

        .tabel-fungsi-aman td{
            font-size:0.82rem;
            padding:8px;
        }

        .contoh-fungsi-aman{
            font-size:0.78rem;
        }

        .jawab-tabel-fungsi{
            min-width:110px;
            font-size:0.85rem;
        }

        .btn-cek-tabel-fungsi{
            width:100%;
        }

        .feedback-item-tabel{
            grid-template-columns:36px 1fr;
        }

        .feedback-jawaban-kamu{
            grid-column:2;
            white-space:normal;
            flex-wrap:wrap;
        }

        .feedback-ringkas-tabel{
            font-size:0.92rem;
        }
    }


/* =========================================================
   FUNGSI - LAYOUT DISAMAKAN DENGAN RELASI
   Tidak mengubah isi materi, hanya tata letak/kotak/pagination.
========================================================= */
.content-gap {
    margin-left: 40px;
    margin-right: 20px;
    box-sizing: border-box;
    max-width: 100%;
    overflow-x: clip;
    font-family: 'Poppins', sans-serif;
}

.fungsi-page {
    display: none;
    width: 100%;
    max-width: 100%;
    box-sizing: border-box;
    overflow-x: clip;
}

.fungsi-page.active {
    display: block;
}

.fungsi-page > * {
    max-width: 100%;
    box-sizing: border-box;
}

.fungsi-page-title,
.content-gap > h2 {
    background: linear-gradient(135deg, #8E44AD, #B57EDC);
    color: #ffffff !important;
    text-align: center !important;
    padding: 16px 22px;
    border-radius: 20px;
    font-weight: 800;
    font-size: 1.25rem !important;
    margin: 0 0 22px 0 !important;
    box-shadow: 0 10px 20px rgba(142, 68, 173, 0.16);
}

.card {
    background: #ffffff !important;
    border: 1px solid #eadcf6 !important;
    border-radius: 26px !important;
    padding: 0 !important;
    margin-top: 20px !important;
    box-shadow: 0 14px 32px rgba(91, 44, 111, 0.08) !important;
    box-sizing: border-box !important;
    overflow: hidden;
}

.card-header {
    background: linear-gradient(135deg, #8E44AD, #B57EDC) !important;
    color: #ffffff !important;
    border-radius: 0 !important;
    padding: 14px 18px !important;
    text-align: center !important;
    font-size: 1.15rem !important;
    font-weight: 800 !important;
    border-bottom: none !important;
    box-shadow: 0 8px 16px rgba(142, 68, 173, 0.14);
}

.card-body {
    padding: 22px !important;
    box-sizing: border-box;
}

.question-box,
.parkir-info,
.penyajian-card,
.solution-card {
    background: #FBF7FF !important;
    border: 2px dashed #CFA7F3 !important;
    border-radius: 18px !important;
    color: #4B2673 !important;
    box-sizing: border-box;
}

.solution-card {
    padding: 22px !important;
    margin-top: 18px !important;
}

.solution-title,
.penyajian-title {
    display: block;
    width: fit-content;
    background: linear-gradient(135deg, #8E44AD, #B57EDC);
    color: #ffffff !important;
    padding: 9px 18px;
    border-radius: 14px;
    font-weight: 800;
    margin: 0 auto 16px auto !important;
    text-align: center;
    box-shadow: 0 6px 12px rgba(142, 68, 173, 0.14);
}

.parkir-card {
    background: #ffffff !important;
    border: 1px solid #E9D5FF !important;
    border-radius: 18px !important;
    padding: 18px !important;
    box-shadow: 0 8px 18px rgba(91, 44, 111, 0.06);
}

.parkir-option {
    background: #ffffff;
    border: 1px solid #E9D5FF !important;
    border-radius: 14px !important;
}

.parkir-btn,
.penyajian-btn,
.btn-cek-tabel-fungsi {
    background: linear-gradient(135deg, #15803D, #22C55E) !important;
    color: #ffffff !important;
    border: 2px solid #15803D !important;
    border-radius: 14px !important;
    font-weight: 800 !important;
    box-shadow: 0 8px 16px rgba(21, 128, 61, 0.20) !important;
}

.penyajian-box {
    margin-top: 0 !important;
}

.penyajian-card {
    padding: 18px !important;
    margin-bottom: 16px !important;
}

.penyajian-input,
.jawab-tabel-fungsi {
    border: 2px solid #d1d5db !important;
    border-radius: 12px !important;
    box-sizing: border-box !important;
}

.penyajian-input:focus,
.jawab-tabel-fungsi:focus {
    border-color: #8B5CF6 !important;
    box-shadow: 0 0 0 3px rgba(139, 92, 246, 0.15) !important;
}

canvas {
    width: 100% !important;
    max-width: 100% !important;
    height: auto !important;
    display: block;
    margin: 0 auto 12px auto;
}

/* Pagination sama seperti Relasi */
.fungsi-pagination {
    width: 100%;
    margin-top: 30px;
    margin-bottom: 35px;
    clear: both;
}

.fungsi-pagination .pagination {
    gap: 5px;
}

.fungsi-pagination .page-link {
    color: #6A2C70;
    border: 1px solid #E3C7F3;
    border-radius: 12px !important;
    font-weight: 700;
    background-color: #ffffff;
    box-shadow: 0 2px 6px rgba(0,0,0,0.08);
}

.fungsi-pagination .page-link:hover {
    background-color: #F3E5FF;
    color: #4B2673;
}

.fungsi-pagination .page-item.active .page-link {
    background-color: #CDA4DE;
    border-color: #CDA4DE;
    color: #ffffff;
}

.fungsi-pagination .page-item.disabled .page-link {
    color: #aaaaaa;
    background-color: #f6f6f6;
    border-color: #eeeeee;
    box-shadow: none;
    pointer-events: none;
}

@media (max-width: 768px) {
    .content-gap {
        margin-left: 12px;
        margin-right: 12px;
    }

    .card-body {
        padding: 16px !important;
    }

    .fungsi-page-title,
    .content-gap > h2,
    .card-header {
        font-size: 1.05rem !important;
        padding: 14px 16px !important;
        border-radius: 16px;
    }

    .card {
        border-radius: 20px !important;
    }

    .solution-card,
    .penyajian-card,
    .question-box,
    .parkir-info,
    .parkir-card {
        padding: 14px !important;
        border-radius: 15px !important;
    }

    .parkir-btn,
    .penyajian-btn,
    .btn-cek-tabel-fungsi {
        width: 100% !important;
    }

    .fungsi-pagination .page-link {
        font-size: 0.82rem;
        padding: 7px 9px;
    }
}



/* =========================================================
   FINAL FIX: FUNGSI DIBUAT NYATU DAN NGAMBANG SEPERTI RELASI
   Hanya mengubah tampilan/layout, tidak mengubah materi dan JS.
========================================================= */

/* Satu halaman fungsi menjadi 1 card besar seperti Relasi */
.fungsi-page {
    background: #ffffff !important;
    border: 1px solid #eadcf6 !important;
    border-radius: 26px !important;
    padding: 24px !important;
    margin-top: 20px !important;
    box-shadow: 0 14px 32px rgba(91, 44, 111, 0.08) !important;
    box-sizing: border-box !important;
    overflow: visible !important;
}

.fungsi-page.active {
    display: block !important;
}

/* Judul FUNGSI dibuat seperti judul Relasi */
.fungsi-page > h2 {
    width: 100% !important;
    background: linear-gradient(135deg, #8E44AD, #B57EDC) !important;
    color: #ffffff !important;
    text-align: center !important;
    padding: 16px 22px !important;
    border-radius: 20px !important;
    font-weight: 800 !important;
    font-size: 1.25rem !important;
    margin: 0 0 22px 0 !important;
    box-shadow: 0 10px 20px rgba(142, 68, 173, 0.16) !important;
    box-sizing: border-box !important;
}

/* Card Bootstrap di dalam halaman jangan jadi kotak terpisah besar */
.fungsi-page > .card {
    background: transparent !important;
    border: none !important;
    border-radius: 0 !important;
    padding: 0 !important;
    margin: 20px 0 0 0 !important;
    box-shadow: none !important;
    overflow: visible !important;
    box-sizing: border-box !important;
}

/* Header ungu dibuat mengambang, tidak menempel ke tepi card */
.fungsi-page > .card > .card-header {
    width: 100% !important;
    background: linear-gradient(135deg, #8E44AD, #B57EDC) !important;
    color: #ffffff !important;
    border-radius: 18px !important;
    padding: 14px 18px !important;
    text-align: center !important;
    font-size: 1.15rem !important;
    font-weight: 800 !important;
    margin: 0 0 18px 0 !important;
    border: none !important;
    box-shadow: 0 8px 16px rgba(142, 68, 173, 0.14) !important;
    box-sizing: border-box !important;
}

/* Isi card diberi kotak putih seperti isi Relasi */
.fungsi-page > .card > .card-body {
    background: #ffffff !important;
    border: 1px solid #eadcf6 !important;
    border-radius: 18px !important;
    padding: 18px !important;
    box-shadow: 0 8px 18px rgba(91, 44, 111, 0.06) !important;
    box-sizing: border-box !important;
}

/* Khusus Tujuan Pembelajaran: dibuat seperti relasi-info-box, bukan header ungu */
#fungsiPage1 > .card.mt-3 {
    background: #ffffff !important;
    border: 1px solid #E9D5FF !important;
    border-radius: 18px !important;
    padding: 18px !important;
    margin-top: 0 !important;
    box-shadow: none !important;
    box-sizing: border-box !important;
}

#fungsiPage1 > .card.mt-3 > .card-header {
    background: transparent !important;
    color: #222222 !important;
    text-align: left !important;
    padding: 0 !important;
    margin: 0 0 14px 0 !important;
    border-radius: 0 !important;
    box-shadow: none !important;
    font-size: 1rem !important;
    font-weight: 800 !important;
}

#fungsiPage1 > .card.mt-3 > .card-body {
    background: transparent !important;
    border: none !important;
    border-radius: 0 !important;
    padding: 0 !important;
    box-shadow: none !important;
}

/* Kotak materi/soal tetap rapi di dalam card */
.fungsi-page .question-box,
.fungsi-page .parkir-info,
.fungsi-page .penyajian-card,
.fungsi-page .solution-card,
.fungsi-page .parkir-card,
.fungsi-page .card-tabel-fungsi-aman > .card-body {
    max-width: 100% !important;
    box-sizing: border-box !important;
}

/* Page 4 yang memakai inline style tetap disamakan */
#fungsiPage4 > .card > .card-header + div {
    background: #ffffff !important;
    border: 3px dashed #A855F7 !important;
    border-radius: 22px !important;
    padding: 22px !important;
    margin: 0 !important;
    color: #4B2673 !important;
    box-shadow: 0 10px 22px rgba(168, 85, 247, 0.10) !important;
    box-sizing: border-box !important;
}

#fungsiPage4 > .card > .card-header + div h3 {
    color: #4B2673 !important;
}

/* Page 5 yang ada inline border juga tetap masuk layout relasi */
#fungsiPage5 > .card {
    width: 100% !important;
    border: none !important;
    border-radius: 0 !important;
}

#fungsiPage5 > .card > .card-body {
    background: #ffffff !important;
    border: 1px solid #eadcf6 !important;
    border-radius: 18px !important;
    padding: 18px !important;
    box-shadow: 0 8px 18px rgba(91, 44, 111, 0.06) !important;
}

/* Tabel agar tidak melebar keluar */
.fungsi-page .table-responsive,
.fungsi-page .wrapper-tabel-fungsi-aman {
    width: 100% !important;
    max-width: 100% !important;
    overflow-x: auto !important;
}

/* Pagination tetap di bawah, di luar card besar */
.fungsi-pagination {
    margin-top: 30px !important;
}

@media (max-width: 768px) {
    .fungsi-page {
        padding: 16px !important;
        border-radius: 20px !important;
    }

    .fungsi-page > h2,
    .fungsi-page > .card > .card-header {
        font-size: 1.05rem !important;
        padding: 14px 16px !important;
        border-radius: 16px !important;
    }

    .fungsi-page > .card > .card-body,
    #fungsiPage1 > .card.mt-3,
    #fungsiPage4 > .card > .card-header + div,
    #fungsiPage5 > .card > .card-body {
        padding: 14px !important;
        border-radius: 15px !important;
    }
}


/* =========================================================
   FINAL TAMBAHAN: TOMBOL ULANGI, PAGE 4 LEBIH BERISI,
   DAN LAYOUT LATIHAN TETAP RAPI
========================================================= */
.fungsi-btn-row {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 14px;
    flex-wrap: wrap;
    margin-top: 22px;
}

.fungsi-btn-row .parkir-btn,
.fungsi-btn-row .penyajian-btn,
.fungsi-btn-row .btn-cek-tabel-fungsi,
.fungsi-btn-reset {
    min-width: 155px !important;
    height: 48px !important;
    margin: 0 !important;
    padding: 0 22px !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    border-radius: 14px !important;
    font-weight: 800 !important;
    font-size: 1rem !important;
    cursor: pointer !important;
    box-sizing: border-box !important;
}

.fungsi-btn-reset {
    background: #ffffff !important;
    color: #15803D !important;
    border: 2px solid #15803D !important;
    box-shadow: 0 6px 12px rgba(21, 128, 61, 0.12) !important;
}

.fungsi-btn-reset:hover,
.fungsi-btn-row .parkir-btn:hover,
.fungsi-btn-row .penyajian-btn:hover,
.fungsi-btn-row .btn-cek-tabel-fungsi:hover {
    transform: translateY(-2px);
}

.fungsi-extra-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 14px;
    margin-top: 18px;
}

.fungsi-extra-card {
    background: #FBF7FF;
    border: 1px solid #E9D5FF;
    border-left: 5px solid #A855F7;
    border-radius: 16px;
    padding: 16px;
    color: #4B2673;
    line-height: 1.8;
    box-sizing: border-box;
}

.fungsi-extra-card strong {
    color: #4B2673;
}

.fungsi-example-box {
    margin-top: 18px;
    background: #ffffff;
    border: 2px dashed #CFA7F3;
    border-radius: 18px;
    padding: 16px 18px;
    color: #4B2673;
    line-height: 1.8;
    box-sizing: border-box;
}

@media (max-width: 768px) {
    .fungsi-btn-row {
        flex-direction: column;
        align-items: stretch;
        gap: 10px;
    }

    .fungsi-btn-row .parkir-btn,
    .fungsi-btn-row .penyajian-btn,
    .fungsi-btn-row .btn-cek-tabel-fungsi,
    .fungsi-btn-reset {
        width: 100% !important;
    }

    .fungsi-extra-grid {
        grid-template-columns: 1fr;
    }
}
.materi-content ol {
    margin: 0;
    padding-left: 22px;
    line-height: 1.8;
}

.materi-content ol li {
    margin-bottom: 6px;
}

</style>

<div class="content-gap" data-materi="materi_3" data-sub-page="pengertian" data-total-pages="5">

    <!-- ====================== HALAMAN 1 ====================== -->

    <div class="fungsi-page active" id="fungsiPage1">

    <h2 style="text-align:center; font-size:1.6rem;">FUNGSI</h2>
    <!-- TUJUAN PEMBELAJARAN -->
    <div class="card mt-3">
        <div class="card-header">Tujuan Pembelajaran</div>
        <div class="card-body materi-content">
    <ol>
        <li>
            Peserta didik mampu menjelaskan konsep fungsi sebagai relasi khusus.
        </li>
        <li>
            Peserta didik mampu menganalisis hubungan yang termasuk fungsi dan bukan fungsi.
        </li>
        <li>
            Peserta didik mampu menyajikan fungsi dalam bentuk diagram panah, pasangan berurutan, persamaan fungsi, tabel, dan grafik.
        </li>
    </ol>
</div>
    </div>

    <!-- KOTAK BESAR -->
    <div class="card mt-4">

        <div class="card-header">
            Perhatikan situasi berikut!
        </div>

        <div class="card-body materi-content">

            <p>
                Duta Mall Banjarmasin memiliki aturan biaya parkir motor yang berbeda
                tergantung pada hari.
            </p>

            <div class="table-responsive" style="margin-top:15px;">
                <table class="table table-bordered text-center align-middle">
                    <thead style="background-color:#e6e6fa;">
                        <tr>
                            <th>Hari</th>
                            <th>Tarif per jam (Rp)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Senin – Jumat</td>
                            <td>2.000</td>
                        </tr>
                        <tr>
                            <td>Sabtu – Minggu</td>
                            <td>3.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p>
                Setiap kendaraan dikenakan biaya sesuai dengan lamanya waktu parkir.
                Contohnya, jika parkir selama <strong>3 jam</strong> pada hari
                <strong>Sabtu</strong>, maka biaya parkir adalah
                <strong>3 × 3.000 = 9.000 rupiah</strong>.
            </p>

            <!-- MASALAH -->
            <div style="margin-top:25px;">
             
                <div class="question-box mt-2">
                    Bagaimana hubungan antara lama parkir dan biaya parkir di Duta Mall
                    dapat disebut sebagai fungsi?
                    Bagaimana cara menuliskannya dalam berbagai bentuk penyajian fungsi?
                </div>
            </div>

           <!-- ================= PENYELESAIAN INTERAKTIF ================= -->
<div class="solution-card">

    <div class="solution-title">Penyelesaian</div>

    <div class="parkir-interaktif">

        <h1>Bagaimana hubungan antara lama parkir dan biaya parkir di Duta Mall dapat disebut sebagai fungsi?</h1>

        <div class="parkir-info">
            <strong>Tarif Parkir:</strong><br><br>
            📅 Senin–Jumat : 1 jam = Rp2.000<br>
            📅 Sabtu–Minggu : 1 jam = Rp3.000<br><br>

            <strong>Perhatikan:</strong> Suatu hubungan disebut <strong>fungsi</strong>
            jika setiap data yang diketahui hanya memiliki <strong>satu hasil</strong>.
        </div>

        <div class="parkir-card">
            <h2>📝 Pilih jawaban yang paling tepat</h2>

            <div class="parkir-opsi-wrap">

                <label class="parkir-option">
                    <input type="radio" name="jawabParkir" value="a">
                    <span>
                        Hubungan ini fungsi karena setiap lama parkir selalu mempunyai biaya yang sama pada semua hari.
                    </span>
                </label>

                <label class="parkir-option">
                    <input type="radio" name="jawabParkir" value="b">
                    <span>
                        Hubungan ini fungsi jika yang diketahui hari dan lama parkir, karena setiap pasangan tersebut memiliki satu biaya parkir tertentu.
                    </span>
                </label>

                <label class="parkir-option">
                    <input type="radio" name="jawabParkir" value="c">
                    <span>
                        Hubungan ini bukan fungsi karena biaya parkir berubah antara hari biasa dan akhir pekan.
                    </span>
                </label>

            </div>
        </div>

        <button class="parkir-btn" onclick="cekJawabanParkir()">Periksa Jawaban</button>

        <div id="hasilParkir" class="parkir-hasil" data-exercise="hasilParkir"></div>

    </div>

    </div>
</div>
</div>

    </div>


    <!-- ====================== HALAMAN 2 ====================== -->

    <div class="fungsi-page" id="fungsiPage2">

        <div class="card mt-4">

            <div class="card-header">Cara Menuliskan dalam Berbagai Bentuk Penyajian Fungsi</div>

            <div class="card-body materi-content">

    <div class="penyajian-box">

        

        <div class="penyajian-sub">
            Tarif Parkir Duta Mall (Senin–Jumat) — 1 jam = Rp2.000
        </div>

        <div class="penyajian-card">
            <h3><span class="badge-soal">1</span> Diagram Panah</h3>
            <p>Amati diagram panah berikut, lalu tentukan biaya parkir untuk 6 jam.</p>

            <canvas id="canvasPanahPenyajian" width="720" height="360"></canvas>

            <input id="pj1" class="penyajian-input" placeholder="Tulis jawabanmu">
            <button class="penyajian-btn" onclick="cekP1()">Periksa</button>
            <div id="pf1" class="penyajian-feedback" data-exercise="pf1"></div>
        </div>

        <div class="penyajian-card">
            <h3><span class="badge-soal">2</span> Himpunan Pasangan Berurutan</h3>
            <p>Tuliskan semua pasangan berurutan dari 1 jam sampai 4 jam dalam bentuk himpunan.</p>

            <input id="pj2" class="penyajian-input" placeholder="Contoh: {(1,2000),(2,4000),...}">
            <button class="penyajian-btn" onclick="cekP2()">Periksa</button>
            <div id="pf2" class="penyajian-feedback" data-exercise="pf2"></div>
        </div>
    </div>

            </div>

        </div>

    </div>


    <!-- ====================== HALAMAN 3 ====================== -->

    <div class="fungsi-page" id="fungsiPage3">

        <div class="card mt-4">

            <div class="card-header">Cara Menuliskan dalam Berbagai Bentuk Penyajian Fungsi</div>

            <div class="card-body materi-content">

<div class="penyajian-box">

        <div class="penyajian-card">
            <h3><span class="badge-soal">3</span> Persamaan Fungsi</h3>

            <div style="
                background:#F3E8FF;
                padding:18px;
                border-radius:14px;
                font-size:1rem;
                line-height:1.8;
                margin-bottom:15px;
                color:#333;
            ">

                

                Perhatikan contoh berikut:<br><br>

                x = jumlah pensil<br>
                y = harga yang harus dibayar<br><br>

                Jika harga 1 pensil adalah <strong>Rp1.500</strong>, maka:<br>
                1 pensil → Rp1.500<br>
                2 pensil → Rp3.000<br>
                3 pensil → Rp4.500<br><br>

                Setiap harga didapat dari <strong>1.500 × jumlah pensil</strong>.<br><br>

                Sehingga hubungan antara jumlah pensil dan harga dapat dinyatakan dalam 
                <strong>persamaan fungsi</strong>.<br><br>

                Karena jumlah pensil = x dan harga = y, maka:
                <br>
                <strong>y = 1500x</strong>

            </div>

            <p>
            Tarif parkir adalah <strong>Rp2.000 per jam</strong>.<br>
            Jika x = lama parkir dan y = biaya parkir,<br>
            buatlah <strong>persamaan fungsi</strong> yang sesuai.
            </p>

            <input id="pj3" class="penyajian-input" placeholder="Tulis jawabanmu">
            <button class="penyajian-btn" onclick="cekP3()">Periksa</button>
            <div id="pf3" class="penyajian-feedback" data-exercise="pf3"></div>
        </div>
        
        <div class="penyajian-card">
            <h3><span class="badge-soal">4</span> Tabel Fungsi</h3>
            <div style="
                background:#F3E8FF;
                padding:12px 15px;
                border-radius:10px;
                font-size:0.95rem;
                margin-bottom:10px;
            ">
            <strong>Tarif Parkir Duta Mall (Senin–Kamis)</strong><br>
            1 jam = Rp2.000
            </div>

            <p>Lengkapi tabel berikut berdasarkan tarif parkir Duta Mall:.</p>

            <div class="table-responsive">
                <table class="penyajian-table">
                    <tr>
                        <th>Jam</th>
                        <th>Biaya</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><input id="pj4a" class="penyajian-input"></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><input id="pj4b" class="penyajian-input"></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><input id="pj4c" class="penyajian-input"></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><input id="pj4d" class="penyajian-input"></td>
                    </tr>
                </table>
            </div>

            <button class="penyajian-btn" onclick="cekP4()">Periksa</button>
            <div id="pf4" class="penyajian-feedback" data-exercise="pf4"></div>
        </div>

        <div class="penyajian-card">
            <h3><span class="badge-soal">5</span> Grafik Fungsi</h3>
            <p>Perhatikan grafik berikut, lalu tentukan koordinat titik saat parkir 4 jam.</p>

            <canvas id="canvasGrafikPenyajian" width="720" height="420"></canvas>

            <input id="pj5" class="penyajian-input" placeholder="Contoh: (1,2000)">
            <button class="penyajian-btn" onclick="cekP5()">Periksa</button>
            <div id="pf5" class="penyajian-feedback" data-exercise="pf5"></div>
        </div>
</div>

            </div>

        </div>

    </div>


    <!-- ====================== HALAMAN 4 ====================== -->

    <div class="fungsi-page" id="fungsiPage4">

    <div class="card mt-4" style="width: 100%; border-radius:12px;">

        <div class="card-header"
             style="background-color:#CDA4DE; color:white; font-size:1.3rem; font-weight:700;">
            Berdasarkan Masalah di atas, apakah kamu bisa memahami apa itu Fungsi?
        </div>

        <div style="
            background-color:#FFF6D6;
            border:3px dashed #FFDF94;
            border-radius:18px;
            padding:25px;
            margin-top:10px;
            margin-left:20px;
            margin-right:20px;
            margin-bottom:20px;
            box-sizing:border-box;
        ">

            <h3 style="font-weight:700; font-size:1.3rem; color:#C58940; margin-bottom:15px;">
                Pengertian Fungsi
            </h3>

            <p style="font-size:1rem; color:#444; line-height:1.8; margin:0 0 10px 0;">
                <strong>Fungsi</strong> adalah relasi khusus yang menghubungkan
                setiap anggota daerah asal (domain) dengan tepat satu anggota
                daerah kawan (kodomain). Artinya, setiap elemen dalam domain
                hanya memiliki satu pasangan di kodomain, meskipun beberapa
                elemen domain boleh memiliki pasangan kodomain yang sama.
            </p>

            <p style="font-size:1rem; color:#444; line-height:1.8; margin:0 0 10px 0;">
                <strong>Domain (Daerah Asal)</strong> adalah himpunan semua anggota pertama.
            </p>

            <p style="font-size:1rem; color:#444; line-height:1.8; margin:0 0 10px 0;">
                <strong>Kodomain (Daerah Kawan)</strong> adalah himpunan semua anggota kedua.
            </p>
            <p style="font-size:1rem; color:#444; line-height:1.8; margin:0 0 10px 0;">
                <strong>Range (Daerah Hasil)</strong> adalah anggota kodomain yang benar-benar mendapat pasangan dari domain.
            </p>

            <div class="fungsi-extra-grid">
                <div class="fungsi-extra-card">
                    <strong>Ciri-ciri fungsi:</strong>
                    <ol style="margin:10px 0 0 20px; padding:0;">
                        <li>Setiap anggota domain harus mempunyai pasangan.</li>
                        <li>Setiap anggota domain hanya boleh memiliki satu pasangan di kodomain.</li>
                        <li>Beberapa anggota domain boleh memiliki pasangan kodomain yang sama.</li>
                    </ol>
                </div>

                <div class="fungsi-extra-card">
                    <strong>Cara mengenali fungsi:</strong><br>
                    Perhatikan anggota pertama pada setiap pasangan berurutan.
                    Jika ada anggota pertama yang muncul dua kali dengan hasil berbeda,
                    maka hubungan tersebut bukan fungsi.
                </div>
            </div>

            <div class="fungsi-example-box">
                <strong>Contoh fungsi:</strong><br>
                A = {1, 2, 3} dan B = {2.000, 4.000, 6.000}<br>
                R = {(1, 2.000), (2, 4.000), (3, 6.000)}<br>
                Hubungan tersebut merupakan fungsi karena setiap lama parkir memiliki tepat satu biaya.
            </div>

            <div class="fungsi-example-box">
                <strong>Contoh bukan fungsi:</strong><br>
                R = {(1, 2.000), (1, 3.000), (2, 4.000)}<br>
                Hubungan tersebut bukan fungsi karena anggota domain 1 memiliki dua pasangan berbeda,
                yaitu 2.000 dan 3.000.
            </div>

        </div>

    </div>

    </div>


    <!-- ====================== HALAMAN 5 ====================== -->

    <div class="fungsi-page" id="fungsiPage5">

<!-- ======================== CONTOH FUNGSI ======================== -->
<div class="card mt-4" style="width:100%; border:2px solid #d54ded;">

    <!-- HEADER -->
    <div class="card-header"
         style="
            background-color:#e6b3f5 ;
            color:#000;
            font-size:1.1rem;
            font-weight:700;
            border-bottom:2px solid #d54ded;
         ">
        Contoh 3.1 Menentukan Fungsi atau Bukan
    </div>

    <!-- BODY -->
    <div class="card-body" style="padding:30px; background-color:#FFFFFF;">

        <!-- PENJELASAN AWAL -->
        <p style="font-size:1rem; line-height:1.8; text-align:justify;">
            Di Pasar Sungai Mi&#39;ai Banjarmasin, pedagang menjual berbagai jenis
            ikan sungai dengan harga yang berbeda.
        </p>

        <p style="font-size:1rem; line-height:1.8;">
            Harga per kilogramnya sebagai berikut:
        </p>

        <!-- TABEL -->
        <table class="table table-bordered" style="max-width:500px;">
            <thead style="background-color:#e6b3f5 ;">
                <tr>
                    <th>Jenis Ikan</th>
                    <th>Harga per kg (Rp)</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Gabus</td><td>100.000</td></tr>
                <tr><td>Patin</td><td>45.000</td></tr>
                <tr><td>Papuyu</td><td>120.000</td></tr>
                <tr><td>Saluang</td><td>30.000</td></tr>
            </tbody>
        </table>

        <!-- PERTANYAAN -->
        <div style="
            display:inline-block;
            padding:6px 18px;
            background-color:#e6b3f5 ;
            border-radius:8px;
            font-weight:700;
            border:1px solid #ca47f1;
            margin:25px 0 15px;
        ">
            Pertanyaan
        </div>

        <p style="font-size:1rem; line-height:1.8;">
            Apakah hubungan antara jenis ikan dan harga per kilogram merupakan fungsi?
        </p>

        <!-- PENYELESAIAN -->
        <hr style="margin:30px 0; border-top:2px dashed #e582f7;">

        <div style="
            display:inline-block;
            padding:6px 18px;
            background-color:#e6b3f5;
            border-radius:8px;
            font-weight:700;
            border:1px solid #ca47f1;
            margin-bottom:15px;
        ">
            Penyelesaian
        </div>

        <p style="font-weight:700;">Menentukan himpunan yang terlibat:</p>

        <p>
            Himpunan P (jenis ikan) = { Gabus, Patin, Papuyu, Saluang } → disebut <strong>domain</strong>
        </p>
        <p>
            Himpunan Q (harga per kg) = { 100.000, 45.000, 120.000, 30.000 } → disebut <strong>kodomain</strong>
        </p>

        <p style="font-weight:700; margin-top:15px;">Membuat pasangan berurutan:</p>

        <p>
            Hubungan antara jenis ikan dan harga dapat ditulis sebagai:
        </p>

        <p style="font-weight:600;">
            R = { (Gabus, 100.000), (Patin, 45.000), (Papuyu, 120.000), (Saluang, 30.000) }
        </p>

        <div style="
    background-color:#FFFFFF;
    border:1.5px solid #d64af2;
    padding:12px;
    margin-top:20px;
    font-size:1rem;
    line-height:1.7;
    color:#000;
">

    <p style="font-weight:700; margin:0 0 6px;">
        Menganalisis apakah hubungan ini fungsi:
    </p>

    <p style="margin:0 0 18px; text-align:justify;">
        Hubungan ini merupakan <strong>fungsi</strong>, karena setiap jenis ikan
        memiliki <strong>tepat satu harga</strong>. Tidak ada satu jenis ikan
        yang memiliki lebih dari satu harga.
    </p>

    <p style="font-weight:700; margin:0 0 6px;">
        Kesimpulan:
    </p>

    <p style="margin:0; text-align:justify;">
        Hubungan antara jenis ikan dan harga per kilogram merupakan
        <strong>fungsi</strong>, karena setiap jenis ikan berpasangan
        dengan satu harga.
    </p>

</div>

    </div>
</div>



<div class="card mt-4 card-tabel-fungsi-aman">

    <div class="card-header">
        Tabel 3.1 Statement Fungsi dan Bukan Fungsi
    </div>

    <div class="card-body">

        <div class="wrapper-tabel-fungsi-aman">
            <table class="table table-bordered align-middle tabel-fungsi-aman">
                <thead>
                    <tr>
                        <th style="width:60px;">No</th>
                        <th>Contoh Fungsi (Lama Parkir → Biaya Parkir)</th>
                        <th>Semua anggota himpunan P berpasangan?<br>(YA / TIDAK)</th>
                        <th>Satu pasangan untuk setiap domain?<br>(YA / TIDAK)</th>
                    </tr>
                </thead>

                <tbody>
                    <tr data-kunci-tabel-fungsi="YA,YA">
                        <td>1</td>
                        <td class="contoh-fungsi-aman">{ (1,2000), (2,4000), (3,6000) }</td>
                        <td>
                            <select class="form-select jawab-tabel-fungsi">
                                <option value="">-- pilih --</option>
                                <option>YA</option>
                                <option>TIDAK</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-select jawab-tabel-fungsi">
                                <option value="">-- pilih --</option>
                                <option>YA</option>
                                <option>TIDAK</option>
                            </select>
                        </td>
                    </tr>

                    <tr data-kunci-tabel-fungsi="YA,TIDAK">
                        <td>2</td>
                        <td class="contoh-fungsi-aman">{ (1,2000), (2,4000), (2,6000) }</td>
                        <td>
                            <select class="form-select jawab-tabel-fungsi">
                                <option value="">-- pilih --</option>
                                <option>YA</option>
                                <option>TIDAK</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-select jawab-tabel-fungsi">
                                <option value="">-- pilih --</option>
                                <option>YA</option>
                                <option>TIDAK</option>
                            </select>
                        </td>
                    </tr>

                    <tr data-kunci-tabel-fungsi="YA,YA">
                        <td>3</td>
                        <td class="contoh-fungsi-aman">{ (1,3000), (2,6000), (3,9000) }</td>
                        <td>
                            <select class="form-select jawab-tabel-fungsi">
                                <option value="">-- pilih --</option>
                                <option>YA</option>
                                <option>TIDAK</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-select jawab-tabel-fungsi">
                                <option value="">-- pilih --</option>
                                <option>YA</option>
                                <option>TIDAK</option>
                            </select>
                        </td>
                    </tr>

                    <tr data-kunci-tabel-fungsi="YA,TIDAK">
                        <td>4</td>
                        <td class="contoh-fungsi-aman">{ (1,4000), (1,6000) }</td>
                        <td>
                            <select class="form-select jawab-tabel-fungsi">
                                <option value="">-- pilih --</option>
                                <option>YA</option>
                                <option>TIDAK</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-select jawab-tabel-fungsi">
                                <option value="">-- pilih --</option>
                                <option>YA</option>
                                <option>TIDAK</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <button class="btn-cek-tabel-fungsi" onclick="cekTabelFungsiAman()">
            Cek Jawaban
        </button>

        <div id="hasilTabelFungsiAman" data-exercise="hasilTabelFungsiAman"></div>

        <p class="catatan-tabel-fungsi">
            <em>Catatan: Domain ditentukan dari semua komponen pertama pada pasangan berurutan.</em>
        </p>

    </div>
</div>


    </div>


    <!-- ====================== PAGINATION ====================== -->
    <div class="fungsi-pagination">
        <nav aria-label="Pagination Materi Fungsi">
            <ul class="pagination justify-content-center flex-wrap">

                <li class="page-item" id="fungsiPrevItem">
                    <button type="button"
                            class="page-link"
                            onclick="changeFungsiPage(currentFungsiPage - 1)">
                        Sebelumnya
                    </button>
                </li>

                <li class="page-item active" id="fungsiPageItem1">
                    <button type="button" class="page-link" onclick="changeFungsiPage(1)">1</button>
                </li>

                <li class="page-item" id="fungsiPageItem2">
                    <button type="button" class="page-link" onclick="changeFungsiPage(2)">2</button>
                </li>

                <li class="page-item" id="fungsiPageItem3">
                    <button type="button" class="page-link" onclick="changeFungsiPage(3)">3</button>
                </li>

                <li class="page-item" id="fungsiPageItem4">
                    <button type="button" class="page-link" onclick="changeFungsiPage(4)">4</button>
                </li>

                <li class="page-item" id="fungsiPageItem5">
                    <button type="button" class="page-link" onclick="changeFungsiPage(5)">5</button>
                </li>

                <li class="page-item" id="fungsiNextItem">
                    <button type="button"
                            class="page-link"
                            onclick="nextFungsiPage()">
                        Berikutnya
                    </button>
                </li>

            </ul>
        </nav>
    </div>

</div>

<script>
function cekTabelFungsiAman() {
    let benar = 0;
    let total = 0;
    let belumLengkap = false;
    let pembahasan = "";

    const dataPembahasan = [
        {
            benar: "YA dan YA",
            teks: "Semua anggota domain muncul, yaitu 1, 2, dan 3. Setiap anggota domain hanya memiliki satu pasangan biaya. Jadi, relasi ini merupakan fungsi."
        },
        {
            benar: "YA dan TIDAK",
            teks: "Semua anggota domain memang berpasangan. Namun, domain 2 memiliki dua pasangan, yaitu 4000 dan 6000. Jadi, relasi ini bukan fungsi."
        },
        {
            benar: "YA dan YA",
            teks: "Domain 1, 2, dan 3 masing-masing memiliki tepat satu pasangan biaya. Jadi, relasi ini merupakan fungsi."
        },
        {
            benar: "YA dan TIDAK",
            teks: "Domain yang muncul adalah 1. Domain 1 memang berpasangan, tetapi memiliki dua pasangan biaya, yaitu 4000 dan 6000. Jadi, relasi ini bukan fungsi."
        }
    ];

    document.querySelectorAll("tr[data-kunci-tabel-fungsi]").forEach((row, index) => {
        const kunci = row.dataset.kunciTabelFungsi.split(",");
        const pilih = row.querySelectorAll(".jawab-tabel-fungsi");

        let cocok = true;
        let jawabanKamu = [];

        pilih.forEach((s, i) => {
            let nilai = s.value === "" ? "Belum dipilih" : s.value;
            jawabanKamu.push(nilai);

            if (s.value === "") {
                belumLengkap = true;
                cocok = false;
            } else if (s.value !== kunci[i]) {
                cocok = false;
            }
        });

        row.querySelectorAll("td").forEach(td => {
            td.style.backgroundColor = cocok ? "#EAF8EE" : "#FDEEEE";
        });

        if (cocok) benar++;
        total++;

        const status = cocok
            ? `<span class="feedback-status-benar">benar</span>`
            : `<span class="feedback-status-salah">belum tepat</span>`;

        pembahasan += `
            <div class="feedback-item-tabel">
                <div class="feedback-nomor-tabel">${index + 1}</div>

                <div class="feedback-isi-tabel">
                    <strong>Nomor ${index + 1} ${status}.</strong><br>
                    Jawaban benar: <span class="feedback-jawaban-benar">${dataPembahasan[index].benar}</span>.<br>
                    ${dataPembahasan[index].teks}
                </div>

                <div class="feedback-jawaban-kamu">
                    <span class="label-jawaban-kamu">Jawaban kamu</span>
                    <span>: ${jawabanKamu.join(" , ")}</span>
                </div>
            </div>
        `;
    });

    const hasil = document.getElementById("hasilTabelFungsiAman");
    hasil.style.display = "block";

    hasil.innerHTML = `
        <div class="feedback-header-tabel">
            <div class="feedback-ringkas-tabel">
                ${belumLengkap
                    ? `Masih ada jawaban yang belum dipilih.<br>Jawaban benar sementara: ${benar} dari ${total}`
                    : `Jawaban benar: ${benar} dari ${total}`}
            </div>
        </div>

        ${pembahasan}
    `;
}
</script>

<script>


/* =========================================================
   PAGINATION FUNGSI
========================================================= */
let currentFungsiPage = 1;
const totalFungsiPage = 5;

function changeFungsiPage(page) {
    if (page < 1 || page > totalFungsiPage) {
        return;
    }

    if (page > currentFungsiPage) {
        var prevEl = document.getElementById('fungsiPage' + currentFungsiPage);
        if (prevEl) {
            var exs = prevEl.querySelectorAll('[data-exercise]');
            for (var i = 0; i < exs.length; i++) {
                if (exs[i].getAttribute('data-correct') !== 'true') {
                    ProgressManager.showAlert('Selesaikan semua soal pada halaman ini dengan benar terlebih dahulu!');
                    return;
                }
            }
        }
    }

    currentFungsiPage = page;

    for (let i = 1; i <= totalFungsiPage; i++) {
        const pageElement = document.getElementById("fungsiPage" + i);
        const pageItem = document.getElementById("fungsiPageItem" + i);

        if (pageElement) {
            pageElement.classList.toggle("active", i === page);
        }

        if (pageItem) {
            pageItem.classList.toggle("active", i === page);
        }
    }

    const prevItem = document.getElementById("fungsiPrevItem");
    const nextItem = document.getElementById("fungsiNextItem");

    if (prevItem) {
        prevItem.classList.toggle("disabled", page === 1);
    }

    if (nextItem) {
        nextItem.classList.remove("disabled");
    }

    const target = document.querySelector(".content-gap");

    if (target) {
        target.scrollIntoView({
            behavior: "smooth",
            block: "start"
        });
    }

    setTimeout(function () {
        gambarPanahPenyajian();
        gambarGrafikPenyajian();
    }, 50);
}

function nextFungsiPage() {
    var curEl = document.getElementById('fungsiPage' + currentFungsiPage);
    if (curEl) {
        var exs = curEl.querySelectorAll('[data-exercise]');
        for (var i = 0; i < exs.length; i++) {
            if (exs[i].getAttribute('data-correct') !== 'true') {
                ProgressManager.showAlert('Selesaikan semua soal pada halaman ini dengan benar terlebih dahulu!');
                return;
            }
        }
    }

    if (currentFungsiPage < totalFungsiPage) {
        changeFungsiPage(currentFungsiPage + 1);
    } else {
        ProgressManager.markSubPageDone('materi_3', 'pengertian');
        window.location.href = "/bab_1/lanjut_3_1";
    }
}

function cekJawabanParkir() {
    let pilih = document.querySelector('input[name="jawabParkir"]:checked');
    let hasil = document.getElementById("hasilParkir");

    if (!pilih) {
        hasil.className = "parkir-hasil parkir-salah";
        hasil.innerHTML = `
            <div class="parkir-badge">Belum Dijawab</div>
            Kamu belum memilih jawaban.<br>
            Silakan pilih salah satu pilihan terlebih dahulu, lalu tekan tombol <strong>Periksa Jawaban</strong>.
        `;
        hasil.style.display = "block";
        hasil.scrollIntoView({ behavior: "smooth", block: "center" });
        return;
    }

    if (pilih.value === "b") {
        hasil.className = "parkir-hasil parkir-benar";
        hasil.innerHTML = `
            <div class="parkir-badge">Jawaban Tepat 🎉</div>
            Hubungan antara lama parkir dan biaya parkir di Duta Mall disebut
            <strong>fungsi</strong> jika yang diketahui adalah
            <strong>hari dan lama parkir</strong>.<br><br>

            Alasannya, setiap pasangan data tersebut hanya memiliki
            <strong>satu biaya parkir tertentu</strong>.<br><br>

            <strong>Contoh:</strong><br>
            Senin, 1 jam → Rp2.000<br>
            Jumat, 1 jam → Rp3.000
        `;
    } else {
        hasil.className = "parkir-hasil parkir-salah";
        hasil.innerHTML = `
            <div class="parkir-badge">Jawaban Belum Tepat</div>
            Coba teliti lagi pilihan jawabanmu.<br><br>

            Hal penting dalam fungsi adalah
            <strong>setiap data hanya mempunyai satu hasil</strong>.<br><br>

            Pada soal ini, data yang diketahui harus berupa
            <strong>hari dan lama parkir</strong>.
        `;
    }

    hasil.style.display = "block";
    hasil.scrollIntoView({ behavior: "smooth", block: "center" });
}

/* ================= HELPER ================= */

function kosong(v) {
    return !v || v.trim() === "";
}

function angkaPenyajian(v) {
    return v.replace(/\./g, '').replace(/,/g, '').replace(/\s/g, '').replace(/[^\d]/g, '');
}

function tampilPenyajian(id, benar, teks) {
    let f = document.getElementById(id);
    f.style.display = "block";
    f.className = "penyajian-feedback " + (benar ? "penyajian-benar" : "penyajian-salah");
    f.innerHTML = teks;
}

/* ================= GAMBAR DIAGRAM PANAH ================= */

function gambarPanahPenyajian() {
    let c = document.getElementById("canvasPanahPenyajian");
    if (!c) return;

    let ctx = c.getContext("2d");
    ctx.clearRect(0, 0, c.width, c.height);

    ctx.font = "18px Arial";
    ctx.lineWidth = 2;

    ctx.fillStyle = "#EEF3D3";
    ctx.fillRect(70, 50, 230, 260);
    ctx.strokeStyle = "#999";
    ctx.strokeRect(70, 50, 230, 260);

    ctx.fillStyle = "#E0ECD8";
    ctx.fillRect(430, 50, 230, 260);
    ctx.strokeStyle = "#999";
    ctx.strokeRect(430, 50, 230, 260);

    ctx.fillStyle = "#1565C0";
    ctx.font = "bold 18px Arial";
    ctx.fillText("Lama Parkir", 120, 90);
    ctx.font = "16px Arial";
    ctx.fillText("(jam)", 155, 115);

    ctx.fillStyle = "#8E24AA";
    ctx.font = "bold 18px Arial";
    ctx.fillText("Biaya Parkir", 480, 90);
    ctx.font = "16px Arial";
    ctx.fillText("(Rp)", 530, 115);

    for (let i = 1; i <= 4; i++) {
        let y = 155 + (i - 1) * 45;

        ctx.fillStyle = "#1565C0";
        ctx.font = "18px Arial";
        ctx.fillText(i, 175, y);

        ctx.fillStyle = "#8E24AA";
        ctx.fillText((i * 2000).toLocaleString("id-ID"), 520, y);

        ctx.strokeStyle = "red";
        ctx.beginPath();
        ctx.moveTo(230, y - 5);
        ctx.lineTo(430, y - 5);
        ctx.stroke();

        ctx.beginPath();
        ctx.moveTo(430, y - 5);
        ctx.lineTo(418, y - 12);
        ctx.lineTo(418, y + 2);
        ctx.closePath();
        ctx.fillStyle = "red";
        ctx.fill();
    }
}

/* ================= GAMBAR GRAFIK ================= */

function gambarGrafikPenyajian() {
    let c = document.getElementById("canvasGrafikPenyajian");
    if (!c) return;

    let ctx = c.getContext("2d");
    ctx.clearRect(0, 0, c.width, c.height);

    ctx.font = "15px Arial";
    ctx.lineWidth = 2;

    let startX = 80;
    let startY = 350;
    let endX = 660;
    let endY = 50;

    ctx.strokeStyle = "#333";
    ctx.beginPath();
    ctx.moveTo(startX, startY);
    ctx.lineTo(endX, startY);
    ctx.stroke();

    ctx.beginPath();
    ctx.moveTo(startX, startY);
    ctx.lineTo(startX, endY);
    ctx.stroke();

    ctx.fillStyle = "#333";
    for (let i = 1; i <= 5; i++) {
        let x = startX + i * 100;
        ctx.fillText(i, x - 5, startY + 25);

        ctx.beginPath();
        ctx.moveTo(x, startY - 5);
        ctx.lineTo(x, startY + 5);
        ctx.stroke();
    }

    for (let i = 1; i <= 5; i++) {
        let y = startY - i * 55;

        ctx.fillStyle = "#333";
        ctx.fillText((i * 2000).toLocaleString("id-ID"), 20, y + 5);

        ctx.strokeStyle = "#ddd";
        ctx.beginPath();
        ctx.moveTo(startX, y);
        ctx.lineTo(endX, y);
        ctx.stroke();

        ctx.strokeStyle = "#333";
        ctx.beginPath();
        ctx.moveTo(startX - 5, y);
        ctx.lineTo(startX + 5, y);
        ctx.stroke();
    }

    let titik = [
        [180, 295],
        [280, 240],
        [380, 185],
        [480, 130],
        [580, 75]
    ];

    ctx.strokeStyle = "#C86E2C";
    ctx.lineWidth = 2;
    ctx.beginPath();
    ctx.moveTo(titik[0][0], titik[0][1]);

    for (let i = 1; i < titik.length; i++) {
        ctx.lineTo(titik[i][0], titik[i][1]);
    }

    ctx.stroke();

    for (let i = 0; i < titik.length; i++) {
        ctx.beginPath();
        ctx.arc(titik[i][0], titik[i][1], 6, 0, Math.PI * 2);
        ctx.fillStyle = "#C86E2C";
        ctx.fill();
    }
}

document.addEventListener("DOMContentLoaded", function () {
    gambarPanahPenyajian();
    gambarGrafikPenyajian();
});

/* ================= CEK JAWABAN PENYAJIAN ================= */

function cekP1() {
    if (kosong(pj1.value)) {
        tampilPenyajian(
            "pf1",
            false,
            `
            <strong>Belum dijawab.</strong><br>
            Silakan isi jawaban terlebih dahulu. Perhatikan panah dari 6 jam menuju biaya parkirnya.
            `
        );
        return;
    }

    if (angkaPenyajian(pj1.value) === "12000") {
        tampilPenyajian(
            "pf1",
            true,
            `
            🎉 Jawaban benar.<br>
            Untuk 4 jam parkir, biaya = 6 × Rp2.000 = <b>Rp12.000</b>.
            `
        );
    } else {
        tampilPenyajian(
            "pf1",
            false,
            `
            Jawaban belum tepat.<br>
            Setiap 1 jam dikenakan Rp2.000. Jadi, 6 jam = 6 × Rp2.000 = <b>Rp12.000</b>.
            `
        );
    }
}

function cekP2() {
    if (kosong(pj2.value)) {
        tampilPenyajian(
            "pf2",
            false,
            `
            <strong>Belum dijawab.</strong><br>
            Silakan tuliskan himpunan pasangan berurutan terlebih dahulu.
            `
        );
        return;
    }

    let v = pj2.value
        .replace(/\s/g, "")
        .replace(/\./g, "");

    if (v === "{(1,2000),(2,4000),(3,6000),(4,8000)}") {
        tampilPenyajian(
            "pf2",
            true,
            `
            🎉 Jawaban benar.<br><br>
            Kamu sudah menuliskan pasangan berurutan dengan tepat.<br>
            Setiap pasangan ditulis dalam bentuk <strong>{(lama parkir, biaya parkir)}</strong>.
            `
        );
    } else {
        tampilPenyajian(
            "pf2",
            false,
            `
            <strong>Jawaban belum tepat.</strong><br><br>
            Ingat, pasangan berurutan ditulis dalam bentuk:<br>
            <strong>(lama parkir, biaya parkir)</strong><br><br>

            Karena tarif parkir Senin–Kamis adalah <strong>Rp2.000 per jam</strong>, maka:<br>
            1 jam → Rp2.000<br>
            2 jam → Rp4.000<br>
            3 jam → Rp6.000<br>
            4 jam → Rp8.000<br><br>

            Jadi, bentuk himpunan pasangan berurutannya adalah:<br>
            <strong>{(1,2000), (2,4000), (3,6000), (4,8000)}</strong>
            `
        );
    }
}

function cekP3() {
    if (kosong(pj3.value)) {
        tampilPenyajian(
            "pf3",
            false,
            `
            <strong>Belum dijawab.</strong><br>
            Silakan tuliskan persamaan fungsi terlebih dahulu.
            `
        );
        return;
    }

    let v = pj3.value
        .toLowerCase()
        .replace(/\s/g, "")
        .replace(/\./g, "");

    if (v === "y=2000x" || v === "f(x)=2000x") {
        tampilPenyajian(
            "pf3",
            true,
            `
            🎉 Jawaban benar.<br>
            Tarif parkir adalah Rp2.000 per jam, sehingga persamaan fungsi yang sesuai adalah <b>y = 2000x</b>.
            `
        );
    } else {
        tampilPenyajian(
            "pf3",
            false,
            `
            Jawaban belum tepat.<br>
            Biaya parkir diperoleh dari <strong>tarif per jam × lama parkir</strong>.<br><br>
            Karena tarifnya Rp2.000 per jam, maka persamaan fungsinya adalah <b>y = 2000x</b>.
            `
        );
    }
}

function cekP4() {
    if (
        kosong(pj4a.value) ||
        kosong(pj4b.value) ||
        kosong(pj4c.value) ||
        kosong(pj4d.value)
    ) {
        tampilPenyajian(
            "pf4",
            false,
            `
            <strong>Tabel belum lengkap.</strong><br>
            Silakan isi semua kolom biaya parkir terlebih dahulu sebelum menekan tombol periksa.
            `
        );
        return;
    }

    if (
        angkaPenyajian(pj4a.value) === "2000" &&
        angkaPenyajian(pj4b.value) === "4000" &&
        angkaPenyajian(pj4c.value) === "6000" &&
        angkaPenyajian(pj4d.value) === "8000"
    ) {
        tampilPenyajian(
            "pf4",
            true,
            `
            🎉 Jawaban benar.<br>
            Tabel sudah lengkap. Biaya parkir bertambah Rp2.000 setiap naik 1 jam.
            `
        );
    } else {
        tampilPenyajian(
            "pf4",
            false,
            `
            Jawaban belum tepat.<br>
            Gunakan pola kelipatan Rp2.000.<br><br>
            1 jam = Rp2.000<br>
            2 jam = Rp4.000<br>
            3 jam = Rp6.000<br>
            4 jam = Rp8.000
            `
        );
    }
}

function cekP5() {
    if (kosong(pj5.value)) {
        tampilPenyajian(
            "pf5",
            false,
            `
            <strong>Belum dijawab.</strong><br>
            Silakan tuliskan koordinat titik pada grafik terlebih dahulu.
            `
        );
        return;
    }

    let v = pj5.value
        .replace(/\s/g, "")
        .replace(/\./g, "");

    if (v === "(4,8000)" || v === "4,8000") {
        tampilPenyajian(
            "pf5",
            true,
            `
            🎉 Jawaban benar.<br>
            Saat x = 4, nilai y = 8.000. Jadi koordinat titiknya adalah <b>(4,8000)</b>.
            `
        );
    } else {
        tampilPenyajian(
            "pf5",
            false,
            `
            Jawaban belum tepat.<br>
            Pada grafik, sumbu mendatar menunjukkan lama parkir dan sumbu tegak menunjukkan biaya parkir.<br><br>
            Saat lama parkir 4 jam, biaya parkir adalah Rp8.000. Jadi koordinat titiknya adalah <b>(4,8000)</b>.
            `
        );
    }
}


document.addEventListener("DOMContentLoaded", function () {
    changeFungsiPage(1);
});

</script>


<script>
/* =========================================================
   FINAL FUNGSI: 3 KALI SALAH BARU MUNCUL JAWABAN BENAR,
   TOMBOL ULANGI SETIAP LATIHAN, DAN SIMPAN JAWABAN SISWA
========================================================= */

window.percobaanFungsi = window.percobaanFungsi || {
    parkir: 0,
    p1: 0,
    p2: 0,
    p3: 0,
    p4: 0,
    p5: 0,
    tabel: 0
};

let fungsiSiapMenyimpan = false;
const kunciPenyimpananFungsi = "jawaban_fungsi_" + window.location.pathname;

function tampilFeedbackFungsi(id, benar, teks) {
    const f = document.getElementById(id);
    if (!f) return;

    f.style.display = "block";

    if (id === "hasilParkir") {
        f.className = "parkir-hasil " + (benar ? "parkir-benar" : "parkir-salah");
    } else {
        f.className = "penyajian-feedback " + (benar ? "penyajian-benar" : "penyajian-salah");
    }

    f.innerHTML = teks;

    if (benar) {
        f.setAttribute('data-correct', 'true');
    } else {
        f.removeAttribute('data-correct');
    }

    simpanJawabanFungsi(true);
}

function pesanCobaLagiFungsi(kunci, teksPetunjuk, teksJawabanBenar) {
    window.percobaanFungsi[kunci]++;

    if (window.percobaanFungsi[kunci] < 3) {
        return `
            <strong>Jawaban belum tepat.</strong><br>
            ${teksPetunjuk}<br><br>
            Tekan tombol <strong>Ulangi</strong>, lalu coba kembali.
        `;
    }

    return `
        <strong>Jawabanmu masih belum tepat.</strong><br>
        Perhatikan jawaban benar berikut agar kamu semakin paham.<br><br>
        ${teksJawabanBenar}
    `;
}

function tambahTombolUlangiFungsi() {
    const daftarTombol = [
        { selector: '.parkir-btn[onclick*="cekJawabanParkir"]', latihan: 'parkir' },
        { selector: '.penyajian-btn[onclick*="cekP1"]', latihan: 'p1' },
        { selector: '.penyajian-btn[onclick*="cekP2"]', latihan: 'p2' },
        { selector: '.penyajian-btn[onclick*="cekP3"]', latihan: 'p3' },
        { selector: '.penyajian-btn[onclick*="cekP4"]', latihan: 'p4' },
        { selector: '.penyajian-btn[onclick*="cekP5"]', latihan: 'p5' },
        { selector: '.btn-cek-tabel-fungsi[onclick*="cekTabelFungsiAman"]', latihan: 'tabel' }
    ];

    daftarTombol.forEach(function (item) {
        const tombolPeriksa = document.querySelector(item.selector);
        if (!tombolPeriksa) return;
        if (tombolPeriksa.closest('.fungsi-btn-row')) return;

        const barisTombol = document.createElement('div');
        barisTombol.className = 'fungsi-btn-row';

        tombolPeriksa.parentNode.insertBefore(barisTombol, tombolPeriksa);
        barisTombol.appendChild(tombolPeriksa);

        const tombolUlangi = document.createElement('button');
        tombolUlangi.type = 'button';
        tombolUlangi.className = 'fungsi-btn-reset';
        tombolUlangi.textContent = 'Ulangi';
        tombolUlangi.addEventListener('click', function () {
            resetFungsiLatihan(item.latihan);
        });

        barisTombol.appendChild(tombolUlangi);
    });
}

function resetFungsiLatihan(latihan) {
    const setValueKosong = function (ids) {
        ids.forEach(function (id) {
            const el = document.getElementById(id);
            if (!el) return;
            el.value = '';
            el.classList.remove('penyajian-benar', 'penyajian-salah');
        });
    };

    const sembunyikan = function (id) {
        const el = document.getElementById(id);
        if (!el) return;
        el.style.display = 'none';
        el.innerHTML = '';
    };

    if (latihan === 'parkir') {
        document.querySelectorAll('input[name="jawabParkir"]').forEach(function (radio) {
            radio.checked = false;
        });
        sembunyikan('hasilParkir');
    }

    if (latihan === 'p1') {
        setValueKosong(['pj1']);
        sembunyikan('pf1');
    }

    if (latihan === 'p2') {
        setValueKosong(['pj2']);
        sembunyikan('pf2');
    }

    if (latihan === 'p3') {
        setValueKosong(['pj3']);
        sembunyikan('pf3');
    }

    if (latihan === 'p4') {
        setValueKosong(['pj4a', 'pj4b', 'pj4c', 'pj4d']);
        sembunyikan('pf4');
    }

    if (latihan === 'p5') {
        setValueKosong(['pj5']);
        sembunyikan('pf5');
    }

    if (latihan === 'tabel') {
        document.querySelectorAll('.jawab-tabel-fungsi').forEach(function (select) {
            select.value = '';
        });

        document.querySelectorAll('tr[data-kunci-tabel-fungsi] td').forEach(function (td) {
            td.style.backgroundColor = '';
        });

        sembunyikan('hasilTabelFungsiAman');
    }

    /*
       Tombol Ulangi hanya menghapus jawaban/feedback.
       Jumlah percobaan salah TIDAK direset di sini,
       supaya jawaban benar muncul setelah siswa salah 3 kali saat menekan Periksa.
       Percobaan salah hanya direset saat jawaban siswa benar.
    */

    simpanJawabanFungsi(true);
}

/* ================= OVERRIDE CEK JAWABAN ================= */

window.cekJawabanParkir = function () {
    const pilih = document.querySelector('input[name="jawabParkir"]:checked');

    if (!pilih) {
        tampilFeedbackFungsi(
            'hasilParkir',
            false,
            `
            <div class="parkir-badge">Belum Dijawab</div>
            Kamu belum memilih jawaban.<br>
            Silakan pilih salah satu pilihan terlebih dahulu, lalu tekan tombol <strong>Periksa Jawaban</strong>.
            `
        );
        return;
    }

    if (pilih.value === 'b') {
        window.percobaanFungsi.parkir = 0;
        tampilFeedbackFungsi(
            'hasilParkir',
            true,
            `
            <div class="parkir-badge">Jawaban Tepat 🎉</div>
            Hubungan tersebut dapat disebut <strong>fungsi</strong> jika yang diketahui adalah
            <strong>hari dan lama parkir</strong>, karena setiap pasangan data tersebut memiliki
            <strong>satu biaya parkir tertentu</strong>.
            `
        );
        return;
    }

    tampilFeedbackFungsi(
        'hasilParkir',
        false,
        `<div class="parkir-badge">Jawaban Belum Tepat</div>` +
        pesanCobaLagiFungsi(
            'parkir',
            'Ingat kembali syarat fungsi: setiap data yang diketahui harus mempunyai satu hasil.',
            `
            <strong>Jawaban benar:</strong><br>
            Hubungan ini fungsi jika yang diketahui <strong>hari dan lama parkir</strong>,
            karena setiap pasangan tersebut memiliki satu biaya parkir tertentu.
            `
        )
    );
};

window.cekP1 = function () {
    const nilai = document.getElementById('pj1').value;

    if (kosong(nilai)) {
        tampilFeedbackFungsi('pf1', false, '<strong>Belum dijawab.</strong><br>Silakan isi jawaban terlebih dahulu.');
        return;
    }

    if (angkaPenyajian(nilai) === '12000') {
        window.percobaanFungsi.p1 = 0;
        tampilFeedbackFungsi('pf1', true, '🎉 Jawaban benar.<br>Untuk 6 jam parkir, biaya = 6 × Rp2.000 = <b>Rp12.000</b>.');
        return;
    }

    tampilFeedbackFungsi(
        'pf1',
        false,
        pesanCobaLagiFungsi(
            'p1',
            'Perhatikan pola pada diagram panah. Setiap 1 jam bertambah Rp2.000.',
            '<strong>Jawaban benar:</strong><br>6 jam = 6 × Rp2.000 = <b>Rp12.000</b>.'
        )
    );
};

window.cekP2 = function () {
    const nilai = document.getElementById('pj2').value;

    if (kosong(nilai)) {
        tampilFeedbackFungsi('pf2', false, '<strong>Belum dijawab.</strong><br>Silakan tuliskan himpunan pasangan berurutan terlebih dahulu.');
        return;
    }

    const v = nilai.replace(/\s/g, '').replace(/\./g, '');

    if (v === '{(1,2000),(2,4000),(3,6000),(4,8000)}') {
        window.percobaanFungsi.p2 = 0;
        tampilFeedbackFungsi('pf2', true, '🎉 Jawaban benar.<br>Kamu sudah menuliskan pasangan berurutan dengan tepat.');
        return;
    }

    tampilFeedbackFungsi(
        'pf2',
        false,
        pesanCobaLagiFungsi(
            'p2',
            'Ingat, pasangan berurutan ditulis dalam bentuk (lama parkir, biaya parkir).',
            '<strong>Jawaban benar:</strong><br><b>{(1,2000), (2,4000), (3,6000), (4,8000)}</b>'
        )
    );
};

window.cekP3 = function () {
    const nilai = document.getElementById('pj3').value;

    if (kosong(nilai)) {
        tampilFeedbackFungsi('pf3', false, '<strong>Belum dijawab.</strong><br>Silakan tuliskan persamaan fungsi terlebih dahulu.');
        return;
    }

    const v = nilai.toLowerCase().replace(/\s/g, '').replace(/\./g, '');

    if (v === 'y=2000x' || v === 'f(x)=2000x') {
        window.percobaanFungsi.p3 = 0;
        tampilFeedbackFungsi('pf3', true, '🎉 Jawaban benar.<br>Tarif parkir Rp2.000 per jam, sehingga persamaan fungsi yang sesuai adalah <b>y = 2000x</b>.');
        return;
    }

    tampilFeedbackFungsi(
        'pf3',
        false,
        pesanCobaLagiFungsi(
            'p3',
            'Biaya parkir diperoleh dari tarif per jam dikali lama parkir.',
            '<strong>Jawaban benar:</strong><br>Persamaan fungsinya adalah <b>y = 2000x</b> atau <b>f(x) = 2000x</b>.'
        )
    );
};

window.cekP4 = function () {
    const ids = ['pj4a', 'pj4b', 'pj4c', 'pj4d'];
    const nilai = ids.map(function (id) { return document.getElementById(id).value; });

    if (nilai.some(function (item) { return kosong(item); })) {
        tampilFeedbackFungsi('pf4', false, '<strong>Tabel belum lengkap.</strong><br>Silakan isi semua kolom biaya parkir terlebih dahulu.');
        return;
    }

    const benar = ['2000', '4000', '6000', '8000'];
    const semuaBenar = nilai.every(function (item, index) {
        return angkaPenyajian(item) === benar[index];
    });

    if (semuaBenar) {
        window.percobaanFungsi.p4 = 0;
        tampilFeedbackFungsi('pf4', true, '🎉 Jawaban benar.<br>Tabel sudah lengkap. Biaya parkir bertambah Rp2.000 setiap naik 1 jam.');
        return;
    }

    tampilFeedbackFungsi(
        'pf4',
        false,
        pesanCobaLagiFungsi(
            'p4',
            'Gunakan pola kelipatan Rp2.000 untuk setiap kenaikan 1 jam.',
            '<strong>Jawaban benar:</strong><br>1 jam = Rp2.000<br>2 jam = Rp4.000<br>3 jam = Rp6.000<br>4 jam = Rp8.000'
        )
    );
};

window.cekP5 = function () {
    const nilai = document.getElementById('pj5').value;

    if (kosong(nilai)) {
        tampilFeedbackFungsi('pf5', false, '<strong>Belum dijawab.</strong><br>Silakan tuliskan koordinat titik pada grafik terlebih dahulu.');
        return;
    }

    const v = nilai.replace(/\s/g, '').replace(/\./g, '');

    if (v === '(4,8000)' || v === '4,8000') {
        window.percobaanFungsi.p5 = 0;
        tampilFeedbackFungsi('pf5', true, '🎉 Jawaban benar.<br>Saat x = 4, nilai y = 8.000. Jadi koordinat titiknya adalah <b>(4,8000)</b>.');
        return;
    }

    tampilFeedbackFungsi(
        'pf5',
        false,
        pesanCobaLagiFungsi(
            'p5',
            'Pada grafik, sumbu mendatar menunjukkan lama parkir dan sumbu tegak menunjukkan biaya parkir.',
            '<strong>Jawaban benar:</strong><br>Saat lama parkir 4 jam, biaya parkir Rp8.000. Jadi koordinat titiknya adalah <b>(4,8000)</b>.'
        )
    );
};

window.cekTabelFungsiAman = function () {
    let benar = 0;
    let total = 0;
    let belumLengkap = false;
    let adaSalah = false;
    let pembahasan = '';

    const dataPembahasan = [
        {
            benar: 'YA dan YA',
            teks: 'Semua anggota domain muncul, yaitu 1, 2, dan 3. Setiap anggota domain hanya memiliki satu pasangan biaya. Jadi, relasi ini merupakan fungsi.'
        },
        {
            benar: 'YA dan TIDAK',
            teks: 'Semua anggota domain memang berpasangan. Namun, domain 2 memiliki dua pasangan, yaitu 4000 dan 6000. Jadi, relasi ini bukan fungsi.'
        },
        {
            benar: 'YA dan YA',
            teks: 'Domain 1, 2, dan 3 masing-masing memiliki tepat satu pasangan biaya. Jadi, relasi ini merupakan fungsi.'
        },
        {
            benar: 'YA dan TIDAK',
            teks: 'Domain yang muncul adalah 1. Domain 1 memang berpasangan, tetapi memiliki dua pasangan biaya, yaitu 4000 dan 6000. Jadi, relasi ini bukan fungsi.'
        }
    ];

    document.querySelectorAll('tr[data-kunci-tabel-fungsi]').forEach(function (row, index) {
        const kunci = row.dataset.kunciTabelFungsi.split(',');
        const pilih = row.querySelectorAll('.jawab-tabel-fungsi');
        let cocok = true;
        let jawabanKamu = [];

        pilih.forEach(function (select, i) {
            const nilai = select.value === '' ? 'Belum dipilih' : select.value;
            jawabanKamu.push(nilai);

            if (select.value === '') {
                belumLengkap = true;
                cocok = false;
            } else if (select.value !== kunci[i]) {
                cocok = false;
                adaSalah = true;
            }
        });

        row.querySelectorAll('td').forEach(function (td) {
            td.style.backgroundColor = cocok ? '#EAF8EE' : '#FDEEEE';
        });

        if (cocok) benar++;
        total++;

        pembahasan += `
            <div class="feedback-item-tabel">
                <div class="feedback-nomor-tabel">${index + 1}</div>
                <div class="feedback-isi-tabel">
                    <strong>Nomor ${index + 1} ${cocok ? '<span class="feedback-status-benar">benar</span>' : '<span class="feedback-status-salah">belum tepat</span>'}.</strong><br>
                    Jawaban benar: <span class="feedback-jawaban-benar">${dataPembahasan[index].benar}</span>.<br>
                    ${dataPembahasan[index].teks}
                </div>
                <div class="feedback-jawaban-kamu">
                    <span class="label-jawaban-kamu">Jawaban kamu</span>
                    <span>: ${jawabanKamu.join(' , ')}</span>
                </div>
            </div>
        `;
    });

    const hasil = document.getElementById('hasilTabelFungsiAman');
    hasil.style.display = 'block';
    hasil.removeAttribute('data-correct');

    if (belumLengkap) {
        hasil.innerHTML = `
            <div class="feedback-header-tabel">
                <div class="feedback-ringkas-tabel">
                    Masih ada jawaban yang belum dipilih.<br>
                    Lengkapi semua pilihan terlebih dahulu, lalu tekan <strong>Cek Jawaban</strong>.
                </div>
            </div>
        `;
        simpanJawabanFungsi(true);
        return;
    }

    if (!adaSalah && benar === total) {
        window.percobaanFungsi.tabel = 0;
        hasil.setAttribute('data-correct', 'true');
        hasil.innerHTML = `
            <div class="feedback-header-tabel">
                <div class="feedback-ringkas-tabel">
                    🎉 Jawaban benar: ${benar} dari ${total}.<br>
                    Kamu sudah dapat membedakan fungsi dan bukan fungsi.
                </div>
            </div>
        `;
        simpanJawabanFungsi(true);
        return;
    }

    window.percobaanFungsi.tabel++;

    if (window.percobaanFungsi.tabel < 3) {
        hasil.innerHTML = `
            <div class="feedback-header-tabel">
                <div class="feedback-ringkas-tabel">
                    Jawabanmu masih perlu diperbaiki.<br>
                    Periksa kembali: semua domain harus berpasangan dan setiap domain hanya boleh memiliki satu pasangan.<br><br>
                    Tekan tombol <strong>Ulangi</strong>, lalu coba kembali.
                </div>
            </div>
        `;
    } else {
        hasil.innerHTML = `
            <div class="feedback-header-tabel">
                <div class="feedback-ringkas-tabel">
                    Jawaban benar: ${benar} dari ${total}.<br>
                    Berikut pembahasan jawaban benar.
                </div>
            </div>
            ${pembahasan}
        `;
    }

    simpanJawabanFungsi(true);
};

/* ================= SIMPAN DAN PULIHKAN JAWABAN ================= */

function kunciKontrolFungsi(element, index) {
    if (element.id) return element.id;
    if (element.type === 'radio') return 'radio_' + element.name + '_' + element.value;
    return 'kontrol_' + index;
}

function simpanJawabanFungsi(paksa) {
    if (!fungsiSiapMenyimpan && !paksa) return;

    try {
        const data = {
            halamanAktif: currentFungsiPage,
            percobaan: window.percobaanFungsi,
            kontrol: {},
            tampilan: {},
            tabel: []
        };

        document.querySelectorAll('.content-gap input, .content-gap select').forEach(function (element, index) {
            const key = kunciKontrolFungsi(element, index);
            data.kontrol[key] = {
                value: element.value,
                checked: element.checked || false,
                className: element.className,
                style: element.getAttribute('style') || ''
            };
        });

        ['hasilParkir', 'pf1', 'pf2', 'pf3', 'pf4', 'pf5', 'hasilTabelFungsiAman'].forEach(function (id) {
            const element = document.getElementById(id);
            if (!element) return;

            data.tampilan[id] = {
                innerHTML: element.innerHTML,
                className: element.className,
                style: element.getAttribute('style') || ''
            };
        });

        document.querySelectorAll('tr[data-kunci-tabel-fungsi]').forEach(function (row) {
            const warna = [];
            row.querySelectorAll('td').forEach(function (td) {
                warna.push(td.style.backgroundColor || '');
            });
            data.tabel.push(warna);
        });

        localStorage.setItem(kunciPenyimpananFungsi, JSON.stringify(data));
    } catch (error) {
        console.warn('Jawaban fungsi belum dapat disimpan:', error);
    }
}

function pulihkanJawabanFungsi() {
    try {
        const tersimpan = localStorage.getItem(kunciPenyimpananFungsi);

        if (!tersimpan) {
            fungsiSiapMenyimpan = true;
            simpanJawabanFungsi(true);
            return;
        }

        const data = JSON.parse(tersimpan);

        window.percobaanFungsi = Object.assign(
            { parkir: 0, p1: 0, p2: 0, p3: 0, p4: 0, p5: 0, tabel: 0 },
            data.percobaan || {}
        );

        document.querySelectorAll('.content-gap input, .content-gap select').forEach(function (element, index) {
            const key = kunciKontrolFungsi(element, index);
            const kondisi = data.kontrol ? data.kontrol[key] : null;
            if (!kondisi) return;

            element.value = kondisi.value ?? '';

            if (element.type === 'radio') {
                element.checked = !!kondisi.checked;
            }

            element.className = kondisi.className || element.className;

            if (kondisi.style) {
                element.setAttribute('style', kondisi.style);
            } else {
                element.removeAttribute('style');
            }
        });

        Object.keys(data.tampilan || {}).forEach(function (id) {
            const element = document.getElementById(id);
            const kondisi = data.tampilan[id];
            if (!element || !kondisi) return;

            element.innerHTML = kondisi.innerHTML || '';
            element.className = kondisi.className || element.className;

            if (kondisi.style) {
                element.setAttribute('style', kondisi.style);
            } else {
                element.removeAttribute('style');
            }
        });

        document.querySelectorAll('tr[data-kunci-tabel-fungsi]').forEach(function (row, rowIndex) {
            const warnaBaris = data.tabel ? data.tabel[rowIndex] : null;
            if (!warnaBaris) return;

            row.querySelectorAll('td').forEach(function (td, tdIndex) {
                td.style.backgroundColor = warnaBaris[tdIndex] || '';
            });
        });

        fungsiSiapMenyimpan = true;

        if (
            Number.isInteger(data.halamanAktif) &&
            data.halamanAktif >= 1 &&
            data.halamanAktif <= totalFungsiPage
        ) {
            changeFungsiPage(data.halamanAktif);
        }

        simpanJawabanFungsi(true);
    } catch (error) {
        console.warn('Jawaban fungsi tersimpan belum dapat dipulihkan:', error);
        fungsiSiapMenyimpan = true;
        simpanJawabanFungsi(true);
    }
}

const changeFungsiPageAsli = window.changeFungsiPage;
window.changeFungsiPage = function (page) {
    simpanJawabanFungsi(false);
    changeFungsiPageAsli(page);
    simpanJawabanFungsi(false);
};

const nextFungsiPageAsli = window.nextFungsiPage;
window.nextFungsiPage = function () {
    simpanJawabanFungsi(false);
    nextFungsiPageAsli();
};

document.addEventListener('DOMContentLoaded', function () {
    tambahTombolUlangiFungsi();
    pulihkanJawabanFungsi();

    document.querySelectorAll('.content-gap input, .content-gap select').forEach(function (element) {
        element.addEventListener('input', function () { simpanJawabanFungsi(false); });
        element.addEventListener('change', function () { simpanJawabanFungsi(false); });
    });
});

document.addEventListener('click', function () {
    setTimeout(function () { simpanJawabanFungsi(false); }, 0);
});

window.addEventListener('pagehide', function () { simpanJawabanFungsi(false); });
window.addEventListener('beforeunload', function () { simpanJawabanFungsi(false); });
</script>

@endsection
