@extends('layouts.main')

@section('container')

<style>
    /* =========================================================
       RELASI - LAYOUT PAGINATION RAPI
    ========================================================= */

    .content-gap {
        margin-left: 40px;
        margin-right: 20px;
        box-sizing: border-box;
        max-width: 100%;
        overflow-x: clip;
        font-family: 'Poppins', sans-serif;
    }

    .relasi-page {
        display: none;
        width: 100%;
        max-width: 100%;
        box-sizing: border-box;
        overflow-x: clip;
    }

    .relasi-page.active {
        display: block;
    }

    .relasi-page > * {
        max-width: 100%;
        box-sizing: border-box;
    }

    .relasi-page-title {
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

    .relasi-card {
        background: #ffffff;
        border: 1px solid #eadcf6;
        border-radius: 26px;
        padding: 24px;
        margin-top: 20px;
        box-shadow: 0 14px 32px rgba(91, 44, 111, 0.08);
        box-sizing: border-box;
    }

    .relasi-card-header {
        background: linear-gradient(135deg, #8E44AD, #B57EDC);
        color: #ffffff;
        border-radius: 18px;
        padding: 14px 18px;
        text-align: center;
        font-size: 1.15rem;
        font-weight: 800;
        margin-bottom: 18px;
        box-shadow: 0 8px 16px rgba(142, 68, 173, 0.14);
    }

    .relasi-soft-box {
        background: #FBF7FF;
        border: 2px dashed #CFA7F3;
        border-radius: 18px;
        padding: 16px 18px;
        margin-bottom: 16px;
        color: #4B2673;
        line-height: 1.85;
        box-sizing: border-box;
    }

    .relasi-soft-box strong {
        color: #4B2673;
    }

    .relasi-info-box {
        background: #ffffff;
        border: 1px solid #E9D5FF;
        border-radius: 18px;
        padding: 18px;
        margin-bottom: 16px;
        line-height: 1.85;
        color: #333;
        box-sizing: border-box;
    }

    .relasi-definition-box {
        background: #ffffff;
        border: 3px dashed #A855F7;
        border-radius: 22px;
        padding: 22px;
        margin-top: 18px;
        color: #4B2673;
        box-shadow: 0 10px 22px rgba(168, 85, 247, 0.10);
    }

    .relasi-label {
        display: inline-block;
        background: linear-gradient(135deg, #8E44AD, #B57EDC);
        color: #ffffff;
        padding: 9px 18px;
        border-radius: 14px;
        font-weight: 800;
        margin-bottom: 12px;
        box-shadow: 0 6px 12px rgba(142, 68, 173, 0.14);
    }

    .relasi-story-layout {
        display: grid;
        grid-template-columns: minmax(300px, 0.92fr) minmax(0, 1.28fr);
        gap: 22px;
        align-items: start;
    }

    .relasi-image-box {
        background: linear-gradient(180deg, #ffffff 0%, #faf7ff 100%);
        border: 1px solid #eadcf6;
        border-radius: 18px;
        padding: 14px;
        box-shadow: 0 8px 20px rgba(91, 44, 111, 0.08);
        text-align: center;
    }

    .relasi-image-box img {
        width: 100%;
        max-height: 470px;
        object-fit: contain;
        display: block;
        margin: 0 auto;
    }

    .relasi-caption {
        margin: 10px 0 0 0;
        color: #555;
        font-size: 0.9rem;
        line-height: 1.6;
    }

    .relasi-story-box {
        background: #ffffff;
        border: 1px solid #eadcf6;
        border-radius: 18px;
        padding: 18px;
        color: #333;
        line-height: 1.8;
    }

    .relasi-story-box p {
        margin-bottom: 12px;
    }

    .relasi-story-box ul {
        margin-bottom: 0;
    }

    .relasi-summary-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 12px;
        margin-bottom: 18px;
    }

    .relasi-summary-item {
        background: #FBF7FF;
        border: 1px solid #E9D5FF;
        border-left: 4px solid #A855F7;
        border-radius: 14px;
        padding: 12px 14px;
        color: #4B2673;
        line-height: 1.7;
    }

    .relasi-set-box {
        background: #ffffff;
        border: 1px solid #E9D5FF;
        border-radius: 16px;
        padding: 16px;
        margin: 14px 0;
        line-height: 2;
        color: #4B2673;
    }

    .relasi-pair-box {
        background: #FBF7FF;
        border: 2px dashed #CFA7F3;
        border-radius: 16px;
        padding: 18px;
        margin-top: 12px;
        color: #4B2673;
        line-height: 2.2;
    }

    .relasi-input {
        width: 150px;
        max-width: 100%;
        padding: 9px 10px;
        border: 2px solid #d1d5db;
        border-radius: 10px;
        background: #ffffff;
        font-family: 'Poppins', sans-serif;
        font-size: 0.92rem;
        outline: none;
        margin: 4px 2px;
        box-sizing: border-box;
    }

    .relasi-input:focus {
        border-color: #8B5CF6;
        box-shadow: 0 0 0 3px rgba(139, 92, 246, 0.15);
    }

    .relasi-benar {
        border-color: #22C55E !important;
        background: #F0FDF4 !important;
    }

    .relasi-salah {
        border-color: #EF4444 !important;
        background: #FEF2F2 !important;
    }

    .relasi-btn-row {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 12px;
        flex-wrap: wrap;
        margin-top: 18px;
    }

    .relasi-btn-check,
    .relasi-btn-reset {
        min-width: 145px;
        height: 48px;
        border-radius: 14px;
        padding: 0 20px;
        font-weight: 800;
        font-size: 1rem;
        cursor: pointer;
        box-sizing: border-box;
        transition: all 0.22s ease;
    }

    .relasi-btn-check {
        background: linear-gradient(135deg, #15803D, #22C55E);
        color: #ffffff;
        border: 2px solid #15803D;
        box-shadow: 0 8px 16px rgba(21, 128, 61, 0.20);
    }

    .relasi-btn-reset {
        background: #ffffff;
        color: #15803D;
        border: 2px solid #15803D;
        box-shadow: 0 6px 12px rgba(21, 128, 61, 0.12);
    }

    .relasi-btn-check:hover,
    .relasi-btn-reset:hover {
        transform: translateY(-2px);
    }

    .relasi-feedback {
        display: none;
        margin-top: 18px;
        padding: 16px;
        border-radius: 14px;
        line-height: 1.8;
        box-sizing: border-box;
    }

    .feedback-ok {
        background: #ECFDF5;
        border: 2px solid #86EFAC;
        color: #166534;
    }

    .feedback-bad {
        background: #FFF1F2;
        border: 2px solid #FECACA;
        color: #7F1D1D;
    }

    .feedback-warn {
        background: #FFFBEB;
        border: 2px solid #FDE68A;
        color: #78350F;
    }

    .relasi-math-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 16px;
        margin-top: 14px;
    }

    .relasi-term-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 14px;
        margin-top: 16px;
    }

    .relasi-term-card {
        background: #FBF7FF;
        border: 1px solid #E9D5FF;
        border-left: 5px solid #A855F7;
        border-radius: 16px;
        padding: 16px;
        color: #4B2673;
        line-height: 1.75;
    }

    .relasi-conclusion {
        background: linear-gradient(135deg, #F6EFFF, #EFE5FF);
        border: 1px solid #DCC5F1;
        border-left: 5px solid #8E44AD;
        border-radius: 18px;
        padding: 16px 18px;
        line-height: 1.85;
        color: #4B2673;
        margin-top: 18px;
    }

    /* =========================================================
       PAGINATION
    ========================================================= */

    .relasi-pagination {
        width: 100%;
        margin-top: 30px;
        margin-bottom: 35px;
        clear: both;
    }

    .relasi-pagination .pagination {
        gap: 5px;
    }

    .relasi-pagination .page-link {
        color: #6A2C70;
        border: 1px solid #E3C7F3;
        border-radius: 12px !important;
        font-weight: 700;
        background-color: #ffffff;
        box-shadow: 0 2px 6px rgba(0,0,0,0.08);
    }

    .relasi-pagination .page-link:hover {
        background-color: #F3E5FF;
        color: #4B2673;
    }

    .relasi-pagination .page-item.active .page-link {
        background-color: #CDA4DE;
        border-color: #CDA4DE;
        color: #ffffff;
    }

    .relasi-pagination .page-item.disabled .page-link {
        color: #aaaaaa;
        background-color: #f6f6f6;
        border-color: #eeeeee;
        box-shadow: none;
        pointer-events: none;
    }

    @media (max-width: 992px) {
        .relasi-story-layout,
        .relasi-math-grid {
            grid-template-columns: 1fr;
        }

        .relasi-term-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .content-gap {
            margin-left: 12px;
            margin-right: 12px;
        }

        .relasi-card {
            padding: 16px;
            border-radius: 20px;
        }

        .relasi-page-title,
        .relasi-card-header {
            font-size: 1.05rem;
            padding: 14px 16px;
            border-radius: 16px;
        }

        .relasi-summary-grid {
            grid-template-columns: 1fr;
        }

        .relasi-input {
            width: 100%;
            margin: 5px 0;
        }

        .relasi-btn-check,
        .relasi-btn-reset {
            width: 100%;
        }

        .relasi-pagination .page-link {
            font-size: 0.82rem;
            padding: 7px 9px;
        }
    }


    /* =========================================================
       TAMBAHAN FINAL: LAYOUT AKTIVITAS RAPI DAN RINGKAS
    ========================================================= */

    .relasi-objective-list {
        margin: 8px 0 0 20px;
        padding: 0;
        line-height: 1.85;
        color: #333;
    }

    .relasi-objective-list li {
        margin-bottom: 6px;
    }

    .relasi-section-gap {
        margin-top: 22px;
    }

    .relasi-activity-layout {
        display: grid;
        grid-template-columns: minmax(280px, 0.88fr) minmax(0, 1.42fr);
        gap: 18px;
        align-items: start;
    }

    .relasi-story-side {
        background: linear-gradient(180deg, #ffffff 0%, #faf7ff 100%);
        border: 1px solid #eadcf6;
        border-radius: 18px;
        padding: 16px;
        color: #333;
        line-height: 1.78;
        box-shadow: 0 8px 18px rgba(91, 44, 111, 0.06);
        box-sizing: border-box;
    }

    .relasi-story-side p {
        margin-bottom: 10px;
    }

    .relasi-story-side ul {
        margin: 8px 0 0 18px;
        padding: 0;
    }

    .relasi-story-side li {
        margin-bottom: 7px;
    }

    .relasi-form-side {
        min-width: 0;
        background: #ffffff;
        border: 1px solid #eadcf6;
        border-radius: 18px;
        padding: 16px;
        box-sizing: border-box;
    }

    .relasi-mini-title {
        display: inline-block;
        background: linear-gradient(135deg, #8E44AD, #B57EDC);
        color: #ffffff;
        padding: 8px 14px;
        border-radius: 12px;
        font-weight: 800;
        font-size: 0.96rem;
        margin-bottom: 12px;
        box-shadow: 0 5px 10px rgba(142, 68, 173, 0.12);
    }

    .relasi-set-compact {
        background: #FBF7FF;
        border: 1px solid #E9D5FF;
        border-radius: 14px;
        padding: 12px;
        margin-bottom: 12px;
        color: #4B2673;
        line-height: 1.9;
    }

    .relasi-set-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 8px;
        margin-top: 8px;
    }

    .relasi-pair-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 8px 12px;
        margin-top: 8px;
    }

    .relasi-pair-row {
        display: grid;
        grid-template-columns: minmax(72px, auto) minmax(0, 1fr);
        align-items: center;
        gap: 6px;
        background: #FBF7FF;
        border: 1px solid #E9D5FF;
        border-radius: 12px;
        padding: 8px 10px;
        color: #4B2673;
        box-sizing: border-box;
    }

    .relasi-pair-row.reverse {
        grid-template-columns: minmax(0, 1fr) minmax(72px, auto);
    }

    .relasi-pair-row .relasi-input {
        width: 100%;
        margin: 0;
    }

    .relasi-compact-text {
        color: #4B2673;
        line-height: 1.8;
        margin-bottom: 12px;
    }

    .relasi-knowledge-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 16px;
        margin-top: 16px;
    }

    .relasi-knowledge-card {
        background: #ffffff;
        border: 1px solid #E9D5FF;
        border-left: 5px solid #A855F7;
        border-radius: 16px;
        padding: 16px;
        color: #4B2673;
        line-height: 1.8;
    }

    @media (max-width: 1100px) {
        .relasi-activity-layout {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .relasi-set-grid,
        .relasi-pair-grid,
        .relasi-knowledge-grid {
            grid-template-columns: 1fr;
        }

        .relasi-story-side,
        .relasi-form-side {
            padding: 14px;
            border-radius: 15px;
        }
    }



    /* =========================================================
       PERBAIKAN FINAL: NOTASI MATEMATIKA DAN LAYOUT SEIMBANG
    ========================================================= */

    /* Dua kolom dibuat seimbang */
    .relasi-activity-layout {
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        align-items: stretch !important;
    }

    /* Aktivitas pertama tidak mengulang soal cerita */
    .relasi-activity-layout.single {
        display: block;
    }

    .relasi-full-width {
        width: 100%;
    }

    .relasi-story-side,
    .relasi-form-side {
        height: 100%;
    }

    /* Himpunan A dan B ditampilkan seimbang */
    .relasi-dual-set-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 12px;
        margin-bottom: 12px;
    }

    /* Kerangka notasi agar kurung kurawal selalu terlihat */
    .relasi-notation-shell {
        display: grid;
        grid-template-columns: auto minmax(0, 1fr) auto;
        gap: 8px;
        align-items: center;
        margin-top: 8px;
    }

    .relasi-notation-symbol {
        color: #5B2C6F;
        font-weight: 800;
        font-size: 1.05rem;
        white-space: nowrap;
    }

    /* Pasangan berurut */
    .relasi-pair-grid.r1-grid {
        grid-template-columns: repeat(4, minmax(0, 1fr));
    }

    .relasi-pair-row {
        grid-template-columns: auto minmax(0, 1fr) auto !important;
        gap: 5px !important;
    }

    .relasi-pair-row.reverse {
        grid-template-columns: auto minmax(0, 1fr) auto !important;
    }

    .relasi-pair-row span {
        white-space: nowrap;
    }

    @media (max-width: 1250px) {
        .relasi-pair-grid.r1-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (max-width: 768px) {
        .relasi-dual-set-grid {
            grid-template-columns: 1fr;
        }

        .relasi-pair-grid.r1-grid {
            grid-template-columns: 1fr;
        }

        .relasi-notation-shell {
            grid-template-columns: 1fr;
            gap: 6px;
        }

        .relasi-notation-symbol {
            display: block;
        }
    }



    /* =========================================================
   PERBAIKAN LAYOUT HALAMAN MEMESAN DAN RELASI KEBALIKAN
   Kotak cerita dibuat memanjang ke samping agar tidak kosong.
========================================================= */

/* Tampilan dekorasi kotak cerita tetap dipertahankan */
.relasi-story-side {
    position: relative;
    overflow: hidden;
    background:
        radial-gradient(
            circle at top right,
            rgba(181, 126, 220, 0.16),
            transparent 34%
        ),
        radial-gradient(
            circle at bottom left,
            rgba(168, 85, 247, 0.10),
            transparent 30%
        ),
        linear-gradient(
            180deg,
            #ffffff 0%,
            #fcf9ff 100%
        ) !important;
    border: 1px solid #E9D5FF !important;
    box-shadow: 0 10px 24px rgba(91, 44, 111, 0.08) !important;
}

.relasi-story-side::before,
.relasi-story-side::after {
    content: "";
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
    z-index: 0;
}

.relasi-story-side::before {
    width: 130px;
    height: 130px;
    right: -54px;
    top: -48px;
    background: rgba(181, 126, 220, 0.12);
}

.relasi-story-side::after {
    width: 96px;
    height: 96px;
    left: -38px;
    bottom: -34px;
    background: rgba(168, 85, 247, 0.08);
}

.relasi-story-side > * {
    position: relative;
    z-index: 1;
}

/* Kotak form tetap memiliki tampilan yang sama */
.relasi-form-side {
    background: linear-gradient(
        180deg,
        #ffffff 0%,
        #fdfbff 100%
    ) !important;
    border: 1px solid #E9D5FF !important;
    box-shadow: 0 10px 24px rgba(91, 44, 111, 0.08) !important;
}

/* Kotak input tetap rapi */
.relasi-set-compact {
    background: linear-gradient(
        180deg,
        #fcf9ff 0%,
        #faf7ff 100%
    ) !important;
    border: 1px solid #E9D5FF !important;
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.8);
}

.relasi-pair-row {
    background: #ffffff !important;
    border: 1px solid #E9D5FF !important;
    box-shadow: 0 3px 8px rgba(91, 44, 111, 0.04);
}

/* =========================================================
   KHUSUS HALAMAN 2 DAN HALAMAN 3
========================================================= */

/* Cerita di atas, jawaban di bawah */
#relasiPage2 .relasi-activity-layout,
#relasiPage3 .relasi-activity-layout {
    display: grid !important;
    grid-template-columns: 1fr !important;
    gap: 16px !important;
    align-items: start !important;
}

/* Kotak cerita tidak lagi dipaksa tinggi */
#relasiPage2 .relasi-story-side,
#relasiPage3 .relasi-story-side {
    width: 100% !important;
    height: auto !important;
    min-height: 0 !important;
    display: grid !important;
    grid-template-columns: minmax(260px, 0.85fr) minmax(0, 1.8fr) !important;
    grid-template-areas:
        "judul judul"
        "paragraf daftar";
    gap: 8px 24px !important;
    align-items: start !important;
    justify-content: stretch !important;
    padding: 16px 18px !important;
    box-sizing: border-box !important;
}

/* Judul Soal Cerita */
#relasiPage2 .relasi-story-side .relasi-mini-title,
#relasiPage3 .relasi-story-side .relasi-mini-title {
    grid-area: judul;
    width: fit-content !important;
    margin-bottom: 2px !important;
}

/* Kalimat pembuka di kiri */
#relasiPage2 .relasi-story-side p,
#relasiPage3 .relasi-story-side p {
    grid-area: paragraf;
    margin: 0 !important;
    line-height: 1.8 !important;
}

/* Daftar cerita di kanan */
#relasiPage2 .relasi-story-side ul,
#relasiPage3 .relasi-story-side ul {
    grid-area: daftar;
    display: grid !important;
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    gap: 7px 24px !important;
    margin: 0 0 0 18px !important;
    padding: 0 !important;
}

#relasiPage2 .relasi-story-side li,
#relasiPage3 .relasi-story-side li {
    margin-bottom: 0 !important;
}

/* Form jawaban tidak dipaksa tinggi */
#relasiPage2 .relasi-form-side,
#relasiPage3 .relasi-form-side {
    width: 100% !important;
    height: auto !important;
    min-height: 0 !important;
    padding: 18px !important;
    box-sizing: border-box !important;
}

/* Input jawaban tetap dua kolom pada laptop */
#relasiPage2 .relasi-pair-grid,
#relasiPage3 .relasi-pair-grid {
    display: grid !important;
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    gap: 10px 12px !important;
    width: 100% !important;
}

/* Tablet */
@media (max-width: 992px) {
    #relasiPage2 .relasi-story-side,
    #relasiPage3 .relasi-story-side {
        grid-template-columns: 1fr !important;
        grid-template-areas:
            "judul"
            "paragraf"
            "daftar";
        gap: 8px !important;
    }

    #relasiPage2 .relasi-story-side ul,
    #relasiPage3 .relasi-story-side ul {
        grid-template-columns: 1fr !important;
    }
}

/* HP */
@media (max-width: 768px) {
    #relasiPage2 .relasi-story-side,
    #relasiPage3 .relasi-story-side,
    #relasiPage2 .relasi-form-side,
    #relasiPage3 .relasi-form-side {
        padding: 14px !important;
        border-radius: 15px !important;
    }

    #relasiPage2 .relasi-pair-grid,
    #relasiPage3 .relasi-pair-grid {
        grid-template-columns: 1fr !important;
    }

    #relasiPage2 .relasi-btn-row,
    #relasiPage3 .relasi-btn-row {
        flex-direction: column !important;
        align-items: stretch !important;
    }

    #relasiPage2 .relasi-btn-check,
    #relasiPage2 .relasi-btn-reset,
    #relasiPage3 .relasi-btn-check,
    #relasiPage3 .relasi-btn-reset {
        width: 100% !important;
    }
}
/* Kurung kurawal Himpunan A dan B dibuat lebih dekat dengan isian */
.relasi-dual-set-grid .relasi-notation-shell {
    display: flex !important;
    align-items: center !important;
    justify-content: flex-start !important;
    gap: 8px !important;
    width: fit-content !important;
    max-width: 100% !important;
}

.relasi-dual-set-grid .relasi-set-grid {
    display: grid !important;
    grid-template-columns: repeat(2, minmax(130px, 180px)) !important;
    gap: 12px !important;
    width: fit-content !important;
}

.relasi-dual-set-grid .relasi-input {
    width: 100% !important;
}

/* Agar tetap rapi pada HP */
@media (max-width: 768px) {
    .relasi-dual-set-grid .relasi-notation-shell {
        width: 100% !important;
    }

    .relasi-dual-set-grid .relasi-set-grid {
        grid-template-columns: 1fr !important;
        width: 100% !important;
    }
}
/* =========================================================
   KOTAK PENYELESAIAN DI BAWAH MASALAH RELASI
   Konsisten dengan tema ungu Relasi.
========================================================= */

.relasi-penyelesaian-box {
    width: 100%;
    margin-top: 18px;
    background: #ffffff;
    border: 1px solid #E9D5FF;
    border-radius: 18px;
    box-shadow: 0 8px 18px rgba(91, 44, 111, 0.06);
    box-sizing: border-box;
    overflow: hidden;
}

.relasi-penyelesaian-label {
    width: 100%;
    padding: 13px 18px;
    background: linear-gradient(135deg, #8E44AD, #B57EDC);
    color: #ffffff;
    font-size: 1.1rem;
    font-weight: 800;
    line-height: 1.4;
    box-sizing: border-box;
}

.relasi-penyelesaian-content {
    padding: 16px 18px;
    background: #FBF7FF;
    color: #4B2673;
    font-size: 1rem;
    line-height: 1.8;
    box-sizing: border-box;
}

/* Tablet dan HP */
@media (max-width: 768px) {
    .relasi-penyelesaian-box {
        margin-top: 16px;
        border-radius: 15px;
    }

    .relasi-penyelesaian-label {
        padding: 11px 15px;
        font-size: 1rem;
    }

    .relasi-penyelesaian-content {
        padding: 13px 15px;
        font-size: 0.94rem;
    }
}


/* =========================================================
   FINAL RESPONSIVE: GAMBAR, CERITA, DAN AKTIVITAS RELASI
========================================================= */

/* Gambar dan cerita seimbang */
.relasi-story-layout {
    display: grid !important;
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    gap: 20px !important;
    align-items: stretch !important;
}

.relasi-image-box,
.relasi-story-box {
    min-width: 0 !important;
    height: 100% !important;
    box-sizing: border-box !important;
}

.relasi-image-box {
    display: flex !important;
    flex-direction: column !important;
    justify-content: center !important;
    padding: 16px !important;
}

.relasi-image-box img {
    width: 100% !important;
    max-width: 100% !important;
    height: clamp(300px, 22vw, 410px) !important;
    max-height: none !important;
    object-fit: contain !important;
    display: block !important;
    margin: 0 auto !important;
}

.relasi-story-box {
    display: flex !important;
    flex-direction: column !important;
    justify-content: center !important;
    padding: 20px !important;
}

/* Masalah, Penyelesaian, dan aktivitas selalu satu baris penuh */
#relasiPage1 > .relasi-card > .relasi-soft-box,
#relasiPage1 > .relasi-card > .relasi-penyelesaian-box,
#relasiPage1 > .relasi-card > .relasi-card-header,
#relasiPage1 > .relasi-card > .relasi-activity-layout {
    width: 100% !important;
    min-width: 0 !important;
    box-sizing: border-box !important;
}

/* Aktivitas pertama */
.relasi-form-side,
.relasi-set-compact,
.relasi-dual-set-grid,
.relasi-notation-shell,
.relasi-set-grid,
.relasi-pair-grid,
.relasi-pair-row {
    min-width: 0 !important;
    box-sizing: border-box !important;
}

.relasi-form-side {
    overflow: hidden !important;
}

/* Himpunan A dan B */
.relasi-dual-set-grid {
    display: grid !important;
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    gap: 14px !important;
}

.relasi-dual-set-grid .relasi-notation-shell {
    display: grid !important;
    grid-template-columns: max-content minmax(0, 1fr) max-content !important;
    gap: 8px !important;
    align-items: center !important;
    width: 100% !important;
    max-width: 100% !important;
}

.relasi-dual-set-grid .relasi-set-grid {
    display: grid !important;
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    gap: 10px !important;
    width: 100% !important;
}

.relasi-dual-set-grid .relasi-input {
    width: 100% !important;
    min-width: 0 !important;
}

/* Pasangan berurutan menyesuaikan ruang */
.relasi-pair-grid,
.relasi-pair-grid.r1-grid {
    display: grid !important;
    grid-template-columns: repeat(auto-fit, minmax(210px, 1fr)) !important;
    gap: 10px !important;
    width: 100% !important;
}

.relasi-pair-row {
    width: 100% !important;
    grid-template-columns: max-content minmax(0, 1fr) max-content !important;
}

.relasi-pair-row .relasi-input {
    width: 100% !important;
    min-width: 0 !important;
}

/* Laptop lebih kecil */
@media (max-width: 1280px) {
    .relasi-dual-set-grid {
        grid-template-columns: 1fr !important;
    }

    .relasi-image-box img {
        height: clamp(270px, 27vw, 370px) !important;
    }
}

/* Tablet */
@media (max-width: 992px) {
    .relasi-story-layout {
        grid-template-columns: 1fr !important;
        gap: 16px !important;
    }

    .relasi-image-box img {
        height: auto !important;
        max-height: 390px !important;
    }

    .relasi-story-box {
        padding: 17px !important;
    }

    .relasi-pair-grid,
    .relasi-pair-grid.r1-grid {
        grid-template-columns: repeat(auto-fit, minmax(190px, 1fr)) !important;
    }
}

/* HP */
@media (max-width: 600px) {
    .relasi-card {
        padding: 14px !important;
    }

    .relasi-image-box img {
        max-height: 290px !important;
    }

    .relasi-soft-box,
    .relasi-form-side,
    .relasi-set-compact {
        padding: 13px !important;
    }

    .relasi-dual-set-grid .relasi-set-grid {
        grid-template-columns: 1fr !important;
    }

    .relasi-dual-set-grid .relasi-notation-shell {
        grid-template-columns: max-content minmax(0, 1fr) max-content !important;
        align-items: center !important;
    }

    .relasi-pair-grid,
    .relasi-pair-grid.r1-grid {
        grid-template-columns: 1fr !important;
    }

    .relasi-btn-row {
        flex-direction: column !important;
        align-items: stretch !important;
    }

    .relasi-btn-check,
    .relasi-btn-reset {
        width: 100% !important;
    }
}

/* HP sangat kecil */
@media (max-width: 390px) {
    .relasi-dual-set-grid .relasi-notation-shell {
        grid-template-columns: 1fr !important;
        gap: 6px !important;
    }

    .relasi-notation-symbol {
        display: block !important;
    }
}



/* =========================================================
   PENYELESAIAN DAN AKTIVITAS MENYUKAI DIGABUNG MENJADI SATU CARD
   Mengurangi jumlah kotak tanpa mengubah isi dan fungsi.
========================================================= */

.relasi-penyelesaian-gabungan {
    margin-top: 18px !important;
    border-radius: 18px !important;
    overflow: hidden !important;
}

.relasi-penyelesaian-gabungan .relasi-penyelesaian-label {
    padding: 14px 20px !important;
    font-size: 1.12rem !important;
}

.relasi-penyelesaian-gabungan .relasi-penyelesaian-content {
    padding: 18px 20px 20px 20px !important;
    background: #ffffff !important;
}

.relasi-penyelesaian-intro {
    margin: 0 0 18px 0 !important;
    color: #4B2673 !important;
    line-height: 1.8 !important;
}

.relasi-activity-title-merged {
    margin: 0 0 16px 0 !important;
    padding: 11px 14px !important;
    background: #F6EFFF !important;
    border-left: 5px solid #8E44AD !important;
    border-radius: 12px !important;
    color: #5B2C6F !important;
    font-size: 1.08rem !important;
    font-weight: 800 !important;
    line-height: 1.5 !important;
}

.relasi-form-side-merged {
    padding: 0 !important;
    background: transparent !important;
    border: none !important;
    border-radius: 0 !important;
    box-shadow: none !important;
    overflow: visible !important;
}

.relasi-penyelesaian-gabungan .relasi-activity-layout.single {
    display: block !important;
    width: 100% !important;
}

.relasi-penyelesaian-gabungan .relasi-soft-box {
    margin-bottom: 14px !important;
}

.relasi-penyelesaian-gabungan .relasi-dual-set-grid {
    margin-bottom: 14px !important;
}

/* Tablet dan HP */
@media (max-width: 768px) {
    .relasi-penyelesaian-gabungan {
        border-radius: 15px !important;
    }

    .relasi-penyelesaian-gabungan .relasi-penyelesaian-label {
        padding: 12px 15px !important;
        font-size: 1rem !important;
    }

    .relasi-penyelesaian-gabungan .relasi-penyelesaian-content {
        padding: 14px !important;
    }

    .relasi-penyelesaian-intro {
        margin-bottom: 14px !important;
        font-size: 0.95rem !important;
    }

    .relasi-activity-title-merged {
        padding: 10px 12px !important;
        margin-bottom: 13px !important;
        font-size: 1rem !important;
        border-radius: 10px !important;
    }
}



/* =========================================================
   FINAL: SUSUN RELASI MENYUKAI RAPI DAN CONTOH JAWABAN TERLIHAT
   Hanya memperbaiki tampilan halaman aktivitas.
========================================================= */

/* Contoh jawaban dibuat jelas dan tidak tampak seperti input kosong */
.relasi-contoh-input,
.relasi-input[readonly] {
    background: #ECFDF5 !important;
    border-color: #22C55E !important;
    color: #166534 !important;
    font-weight: 800 !important;
    cursor: default !important;
}

/* Card Penyelesaian dan aktivitas pertama tetap satu blok penuh */
#relasiPage1 .relasi-penyelesaian-gabungan {
    width: 100% !important;
    box-sizing: border-box !important;
}

#relasiPage1 .relasi-penyelesaian-content,
#relasiPage1 .relasi-activity-layout.single,
#relasiPage1 .relasi-form-side-merged {
    width: 100% !important;
    min-width: 0 !important;
    box-sizing: border-box !important;
}

#relasiPage1 .relasi-form-side-merged {
    display: block !important;
    overflow: visible !important;
}

/* Himpunan A dan B tetap sejajar pada laptop */
#relasiPage1 .relasi-dual-set-grid {
    display: grid !important;
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    gap: 14px !important;
    width: 100% !important;
}

#relasiPage1 .relasi-dual-set-grid .relasi-set-compact {
    min-width: 0 !important;
    margin-bottom: 0 !important;
}

/* Kurung kurawal dekat dengan isi dan tidak meluber */
#relasiPage1 .relasi-notation-shell {
    display: grid !important;
    grid-template-columns: max-content minmax(0, 1fr) max-content !important;
    align-items: center !important;
    gap: 8px !important;
    width: 100% !important;
    min-width: 0 !important;
}

#relasiPage1 .relasi-set-grid {
    display: grid !important;
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    gap: 10px !important;
    width: 100% !important;
    min-width: 0 !important;
}

/* Pasangan relasi Menyukai menyesuaikan ruang layar */
#relasiPage1 .relasi-pair-grid.r1-grid {
    display: grid !important;
    grid-template-columns: repeat(auto-fit, minmax(210px, 1fr)) !important;
    gap: 10px !important;
    width: 100% !important;
    min-width: 0 !important;
}

#relasiPage1 .relasi-pair-row {
    min-width: 0 !important;
    width: 100% !important;
    grid-template-columns: max-content minmax(0, 1fr) max-content !important;
}

#relasiPage1 .relasi-input {
    min-width: 0 !important;
    width: 100% !important;
    box-sizing: border-box !important;
}

/* Tablet */
@media (max-width: 900px) {
    #relasiPage1 .relasi-dual-set-grid {
        grid-template-columns: 1fr !important;
    }

    #relasiPage1 .relasi-pair-grid.r1-grid {
        grid-template-columns: repeat(auto-fit, minmax(190px, 1fr)) !important;
    }
}

/* HP */
@media (max-width: 600px) {
    #relasiPage1 .relasi-pair-grid.r1-grid,
    #relasiPage1 .relasi-set-grid {
        grid-template-columns: 1fr !important;
    }

    #relasiPage1 .relasi-notation-shell {
        grid-template-columns: 1fr !important;
        gap: 7px !important;
    }

    #relasiPage1 .relasi-btn-row {
        flex-direction: column !important;
        align-items: stretch !important;
    }

    #relasiPage1 .relasi-btn-check,
    #relasiPage1 .relasi-btn-reset {
        width: 100% !important;
    }
}

.fase-box-gray {
    width: 100%;
    box-sizing: border-box;
    margin-top: 20px;
    padding: 16px 20px;

    background-color: #ffffff;
    color: #4b5563;

    border: 1px solid #d1d5db;
    border-radius: 12px;

    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.06);

    text-align: center;
    font-size: 1.3rem;
    font-weight: 700;
}

/* Tampilan pada HP */
@media (max-width: 768px) {
    .fase-box-gray {
        padding: 14px 16px;
        font-size: 1.05rem;
        border-radius: 10px;
    }
}

</style>


<div class="content-gap" data-materi="materi_2" data-sub-page="pengertian" data-total-pages="5">

    <!-- ====================== HALAMAN 1 ====================== -->
    <div class="relasi-page active" id="relasiPage1">

        <div class="relasi-card">
            <div class="relasi-page-title">
                Relasi
            </div>

            <div class="relasi-info-box">
                <strong>Tujuan Pembelajaran</strong>

                <ol class="relasi-objective-list">
                    <li>Peserta didik mampu menjelaskan relasi sebagai hubungan antara dua himpunan.</li>
                    <li>Peserta didik mampu menganalisis pasangan anggota, domain, kodomain, dan range pada suatu relasi.</li>
                    <li>Peserta didik mampu menyajikan relasi dalam bentuk diagram panah, diagram Kartesius, dan himpunan pasangan berurutan.</li>
                </ol>
            </div>
<!-- FASE 1 -->
        <div class="fase-box-gray">
            Fase 1: Orientasi Masalah
        </div>
        <br>
            <div class="relasi-card-header">
                Perhatikan Gambar dan Cerita Berikut
            </div>

            <div class="relasi-story-layout">

                <div class="relasi-image-box">
                    <img src="/images/bab2.png"
                         alt="Kumpulan siswa dan kumpulan makanan khas Kalimantan Selatan">

                    <p class="relasi-caption">
                        Gambar 2.2 Kumpulan siswa dan kumpulan makanan khas Kalimantan Selatan
                    </p>
                </div>

                <div class="relasi-story-box">
    <p>
        <strong>Anisa</strong> sedang berulang tahun yang ke-13.
        Ia mengajak teman-temannya, yaitu <strong>Dito</strong>,
        <strong>Zaki</strong>, dan <strong>Oca</strong>, pergi ke rumah makan
        <strong>“Selera Banua”</strong>.
    </p>

    <p>
        Menu yang disediakan di rumah makan <strong>“Selera Banua”</strong>
        adalah <strong>Lontong</strong>, <strong>Soto Banjar</strong>,
        <strong>Mie Bancir</strong>, dan <strong>Nasi Kuning</strong>.
    </p>

    <p>
        Dari menu tersebut, ternyata setiap anak memiliki menu favorit yang berbeda.
    </p>

    <ul>
        <li>
            Anisa suka Soto Banjar dan Mie Bancir, tetapi kali ini ia memesan Soto Banjar.
        </li>

        <li>
            Dito suka Lontong dan Soto Banjar, tetapi kali ini ia memesan Lontong.
        </li>

        <li>
            Zaki suka Nasi Kuning dan Soto Banjar, tetapi kali ini ia memesan Nasi Kuning.
        </li>

        <li>
            Oca suka Mie Bancir dan Lontong, tetapi kali ini ia memesan Mie Bancir.
        </li>
    </ul>
</div>

            </div>

            <div class="relasi-soft-box" style="margin-top:18px;">
                <strong>Masalah:</strong><br>
                Bentuk relasi atau hubungan apa saja yang dapat dibuat dari data di atas?
            </div>
            <div class="relasi-penyelesaian-box relasi-penyelesaian-gabungan">
                <div class="relasi-penyelesaian-label">
                    Penyelesaian
                </div>

                <div class="relasi-penyelesaian-content">
                    <p class="relasi-penyelesaian-intro">
                        Bentuk relasi atau hubungan apa saja yang dapat dibuat dari data di atas?
                    </p>

                    <div class="relasi-activity-title-merged">
                        Ayo Susun Relasi “Menyukai”
                    </div>

                    <div class="relasi-activity-layout single">

                        <!-- Soal cerita tidak diulang karena sudah tersedia di bagian atas -->
                        <div class="relasi-form-side relasi-full-width relasi-form-side-merged">
                    <div class="relasi-soft-box">
                        <strong>Petunjuk:</strong><br>
                        Gunakan cerita di atas. Isi anggota Himpunan A, anggota Himpunan B,
                        dan pasangan relasi “menyukai”. Setelah selesai, tekan tombol
                        <strong>Periksa</strong>.
                    </div>

                    <div class="relasi-dual-set-grid">

                        <div class="relasi-set-compact">
                            <strong>Himpunan A</strong> adalah himpunan anak-anak.

                            <div class="relasi-notation-shell">
                                <span class="relasi-notation-symbol">A = {</span>

                                <div class="relasi-set-grid">
                                    <input type="text" id="a1" class="relasi-input" placeholder="nama anak">
                                    <input type="text" id="a2" class="relasi-input" placeholder="nama anak">
                                    <input type="text" id="a3" class="relasi-input" placeholder="nama anak">
                                    <input type="text" id="a4" class="relasi-input" placeholder="nama anak">
                                </div>

                                <span class="relasi-notation-symbol">}</span>
                            </div>
                        </div>

                        <div class="relasi-set-compact">
                            <strong>Himpunan B</strong> adalah himpunan menu makanan.

                            <div class="relasi-notation-shell">
                                <span class="relasi-notation-symbol">B = {</span>

                                <div class="relasi-set-grid">
                                    <input type="text" id="b1" class="relasi-input" placeholder="menu makanan">
                                    <input type="text" id="b2" class="relasi-input" placeholder="menu makanan">
                                    <input type="text" id="b3" class="relasi-input" placeholder="menu makanan">
                                    <input type="text" id="b4" class="relasi-input" placeholder="menu makanan">
                                </div>

                                <span class="relasi-notation-symbol">}</span>
                            </div>
                        </div>

                    </div>

                    <div class="relasi-set-compact">
                        <strong>Tuliskan relasi “menyukai” dalam bentuk himpunan pasangan berurutan.</strong>

                        <div class="relasi-notation-shell">
                            <span class="relasi-notation-symbol">R<sub>1</sub> = {</span>

                            <div class="relasi-pair-grid r1-grid">
                                <div class="relasi-pair-row">
                                    <span>(Anisa,</span>
                                    <input type="text" id="r1" class="relasi-input relasi-contoh-input" value="Soto Banjar" readonly>
                                    <span>)</span>
                                </div>

                                <div class="relasi-pair-row">
                                    <span>(Anisa,</span>
                                    <input type="text" id="r2" class="relasi-input" placeholder="menu">
                                    <span>)</span>
                                </div>

                                <div class="relasi-pair-row">
                                    <span>(Dito,</span>
                                    <input type="text" id="r3" class="relasi-input" placeholder="menu">
                                    <span>)</span>
                                </div>

                                <div class="relasi-pair-row">
                                    <span>(Dito,</span>
                                    <input type="text" id="r4" class="relasi-input" placeholder="menu">
                                    <span>)</span>
                                </div>

                                <div class="relasi-pair-row">
                                    <span>(Zaki,</span>
                                    <input type="text" id="r5" class="relasi-input" placeholder="menu">
                                    <span>)</span>
                                </div>

                                <div class="relasi-pair-row">
                                    <span>(Zaki,</span>
                                    <input type="text" id="r6" class="relasi-input" placeholder="menu">
                                    <span>)</span>
                                </div>

                                <div class="relasi-pair-row">
                                    <span>(Oca,</span>
                                    <input type="text" id="r7" class="relasi-input" placeholder="menu">
                                    <span>)</span>
                                </div>

                                <div class="relasi-pair-row">
                                    <span>(Oca,</span>
                                    <input type="text" id="r8" class="relasi-input" placeholder="menu">
                                    <span>)</span>
                                </div>
                            </div>

                            <span class="relasi-notation-symbol">}</span>
                        </div>
                    </div>

                    <div class="relasi-btn-row">
                        <button type="button" class="relasi-btn-check" onclick="periksaRelasi()">
                            Periksa
                        </button>

                        <button type="button" class="relasi-btn-reset" onclick="resetRelasi()">
                            Ulangi
                        </button>
                    </div>

                    <div id="feedbackRelasi" class="relasi-feedback" data-exercise="relasi1"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- ====================== HALAMAN 2 ====================== -->
    <div class="relasi-page" id="relasiPage2">

        <div class="relasi-card">
            <div class="relasi-page-title">
                Ayo Susun Relasi “Memesan”
            </div>

            <div class="relasi-activity-layout">

                <div class="relasi-story-side">
                    <div class="relasi-mini-title">
                        Soal Cerita
                    </div>

                    <p>
                        Setelah memilih makanan yang disukai, setiap anak memesan satu menu.
                        Perhatikan informasi berikut.
                    </p>

                    <ul>
                        <li>Anisa memesan Soto Banjar.</li>
                        <li>Dito memesan Lontong.</li>
                        <li>Zaki memesan Nasi Kuning.</li>
                        <li>Oca memesan Mie Bancir.</li>
                    </ul>
                </div>

                <div class="relasi-form-side">
                    <div class="relasi-soft-box">
                        <strong>Petunjuk:</strong><br>
                        Tuliskan menu yang benar-benar dipesan oleh setiap anak berdasarkan
                        cerita di samping, lalu tekan tombol <strong>Periksa</strong>.
                    </div>

                    <div class="relasi-set-compact">
                        <strong>Tuliskan relasi “memesan” dalam bentuk himpunan pasangan berurutan.</strong>

                        <div class="relasi-notation-shell">
                            <span class="relasi-notation-symbol">R<sub>2</sub> = {</span>

                            <div class="relasi-pair-grid">
                                <div class="relasi-pair-row">
                                    <span>(Anisa,</span>
                                    <input type="text" id="ps1" class="relasi-input" placeholder="menu">
                                    <span>)</span>
                                </div>

                                <div class="relasi-pair-row">
                                    <span>(Dito,</span>
                                    <input type="text" id="ps2" class="relasi-input relasi-contoh-input" value="Lontong" readonly>
                                    <span>)</span>
                                </div>

                                <div class="relasi-pair-row">
                                    <span>(Zaki,</span>
                                    <input type="text" id="ps3" class="relasi-input" placeholder="menu">
                                    <span>)</span>
                                </div>

                                <div class="relasi-pair-row">
                                    <span>(Oca,</span>
                                    <input type="text" id="ps4" class="relasi-input" placeholder="menu">
                                    <span>)</span>
                                </div>
                            </div>

                            <span class="relasi-notation-symbol">}</span>
                        </div>
                    </div>

                    <div class="relasi-btn-row">
                        <button type="button" class="relasi-btn-check" onclick="periksaPesananR2()">
                            Periksa
                        </button>

                        <button type="button" class="relasi-btn-reset" onclick="resetPesananR2()">
                            Ulangi
                        </button>
                    </div>

                    <div id="feedbackPesananR2" class="relasi-feedback" data-exercise="relasi2"></div>
                </div>

            </div>
        </div>

    </div>

    <!-- ====================== HALAMAN 3 ====================== -->
    <div class="relasi-page" id="relasiPage3">

        <div class="relasi-card">
            <div class="relasi-page-title">
                Ayo Susun Relasi Kebalikan
            </div>

            <div class="relasi-activity-layout">

                <div class="relasi-story-side">
                    <div class="relasi-mini-title">
                        Soal Cerita
                    </div>

                    <p>
                        Gunakan kembali informasi makanan yang disukai oleh Anisa,
                        Dito, Zaki, dan Oca.
                    </p>

                    <ul>
                        <li>Anisa suka Soto Banjar dan Mie Bancir.</li>
                        <li>Dito suka Lontong dan Soto Banjar.</li>
                        <li>Zaki suka Nasi Kuning dan Soto Banjar.</li>
                        <li>Oca suka Mie Bancir dan Lontong.</li>
                    </ul>
                </div>

                <div class="relasi-form-side">
                    <div class="relasi-soft-box">
                        <strong>Petunjuk:</strong><br>
                        Balik urutan pasangan relasi “menyukai”. Tuliskan menu terlebih
                        dahulu, kemudian nama anak. Setelah selesai, tekan tombol
                        <strong>Periksa</strong>.
                    </div>

                    <div class="relasi-set-compact">
                        <strong>Tuliskan relasi kebalikannya dalam bentuk himpunan pasangan berurutan.</strong>

                        <div class="relasi-notation-shell">
                            <span class="relasi-notation-symbol">R<sub>3</sub> = {</span>

                            <div class="relasi-pair-grid">
                                <div class="relasi-pair-row reverse">
                                    <span>(</span>
                                    <input type="text" id="r3a1" class="relasi-input relasi-contoh-input" value="Soto Banjar" readonly>
                                    <span>, Anisa)</span>
                                </div>

                                <div class="relasi-pair-row reverse">
                                    <span>(</span>
                                    <input type="text" id="r3a2" class="relasi-input" placeholder="menu">
                                    <span>, Anisa)</span>
                                </div>

                                <div class="relasi-pair-row reverse">
                                    <span>(</span>
                                    <input type="text" id="r3d1" class="relasi-input" placeholder="menu">
                                    <span>, Dito)</span>
                                </div>

                                <div class="relasi-pair-row reverse">
                                    <span>(</span>
                                    <input type="text" id="r3d2" class="relasi-input" placeholder="menu">
                                    <span>, Dito)</span>
                                </div>

                                <div class="relasi-pair-row reverse">
                                    <span>(</span>
                                    <input type="text" id="r3z1" class="relasi-input" placeholder="menu">
                                    <span>, Zaki)</span>
                                </div>

                                <div class="relasi-pair-row reverse">
                                    <span>(</span>
                                    <input type="text" id="r3z2" class="relasi-input" placeholder="menu">
                                    <span>, Zaki)</span>
                                </div>

                                <div class="relasi-pair-row reverse">
                                    <span>(</span>
                                    <input type="text" id="r3o1" class="relasi-input" placeholder="menu">
                                    <span>, Oca)</span>
                                </div>

                                <div class="relasi-pair-row reverse">
                                    <span>(</span>
                                    <input type="text" id="r3o2" class="relasi-input" placeholder="menu">
                                    <span>, Oca)</span>
                                </div>
                            </div>

                            <span class="relasi-notation-symbol">}</span>
                        </div>
                    </div>

                    <div class="relasi-btn-row">
                        <button type="button" class="relasi-btn-check" onclick="periksaRelasiR3()">
                            Periksa
                        </button>

                        <button type="button" class="relasi-btn-reset" onclick="resetRelasiR3()">
                            Ulangi
                        </button>
                    </div>

                    <div id="feedbackRelasiR3" class="relasi-feedback" data-exercise="relasi3"></div>
                </div>

            </div>

            <div class="relasi-conclusion">
                <strong>Kesimpulan:</strong>
    <p>
        Dari situasi tersebut dapat dibentuk beberapa hubungan atau relasi, yaitu:
    </p>

    <ul>
        <li>
            Relasi <strong>“menyukai”</strong> antara anak dan menu makanan.
        </li>
        <li>
            Relasi <strong>“memesan”</strong> antara anak dan menu makanan.
        </li>
        <li>
            Relasi <strong>kebalikannya</strong>, yaitu hubungan antara
            <strong>menu makanan dan anak yang menyukainya.</strong>
        </li>
    </ul>

    <p>
        Relasi-relasi tersebut menunjukkan bahwa suatu data dapat dihubungkan
        dalam beberapa bentuk hubungan (relasi) antara dua himpunan.
    </p>
</div>
        </div>

    </div>

    <!-- ====================== HALAMAN 4 ====================== -->
    <div class="relasi-page" id="relasiPage4">
        <div class="fase-box-gray">
            Fase 2 Mengorganisasikan siswa untuk belajar
        </div>
        <div class="relasi-card">
            <div class="relasi-page-title">
                Berdasarkan masalah di atas, apakah kamu dapat memahami apa yang dimaksud dengan Relasi?
            </div>

            <div class="relasi-definition-box">
                <div class="relasi-label">
                    Pengertian Relasi
                </div>

                <p>
                    Dalam kehidupan sehari-hari, kita sering menemukan hubungan antara
                    dua hal. Misalnya, hubungan antara anak dan menu makanan yang
                    disukainya di rumah makan <strong>Selera Banua</strong>.
                </p>

                <p>
                    Anisa suka Soto Banjar dan Mie Bancir, Dito suka Lontong dan
                    Soto Banjar, Zaki suka Nasi Kuning dan Soto Banjar, sedangkan
                    Oca suka Mie Bancir dan Lontong. Hubungan antara anak-anak dan
                    menu makanan ini disebut <strong>relasi</strong>.
                </p>

                <p>
                    Jadi, <strong>relasi</strong> adalah hubungan antara dua himpunan.
                    Relasi menghubungkan anggota dari himpunan pertama dengan anggota
                    dari himpunan kedua.
                </p>

                <p>
                    Suatu hubungan dapat disebut relasi apabila terdapat dua himpunan
                    yang saling dihubungkan. Anggota dari himpunan pertama dapat
                    dipasangkan dengan anggota dari himpunan kedua berdasarkan aturan
                    tertentu, misalnya <strong>“menyukai”</strong>,
                    <strong>“memesan”</strong>, atau <strong>“berasal dari”</strong>.
                    Pasangan yang terbentuk harus memuat anggota dari himpunan pertama
                    dan anggota dari himpunan kedua.
                </p>

                <p style="margin-bottom:0;">
                    Dalam relasi, tidak semua anggota himpunan asal harus memiliki pasangan. Selama terdapat aturan yang menghubungkan anggota dari dua himpunan, hubungan tersebut tetap disebut relasi.
                </p>
            </div>
        </div>

    </div>

    <!-- ====================== HALAMAN 5 ====================== -->
    <div class="relasi-page" id="relasiPage5">

        <div class="relasi-card">
            <div class="relasi-page-title">
                Relasi dalam Bentuk Matematika
            </div>

            <div class="relasi-info-box">
                <p>
                    Hubungan antara anak dan makanan yang sudah kita pelajari sebelumnya
                    dapat ditulis dengan cara matematika yang lebih rapi.
                    Dalam matematika, hubungan tersebut ditulis dalam bentuk
                    <strong>pasangan berurutan</strong>.
                </p>

                <div class="relasi-soft-box" style="margin-top:16px;">
                    <strong>Contoh pasangan berurutan:</strong>

                    <ul style="margin:10px 0 0 18px;">
                        <li>(Anisa, Soto Banjar)</li>
                        <li>(Anisa, Mie Bancir)</li>
                    </ul>

                    <p style="margin:12px 0 0 0;">
                        Artinya, Anisa berhubungan dengan Soto Banjar dan Mie Bancir.
                    </p>
                </div>

                <p>
                    Pasangan berurutan biasanya ditulis dalam bentuk
                    <strong>(a, b)</strong>.
                </p>

                <div class="relasi-knowledge-grid">
                    <div class="relasi-knowledge-card">
                        <strong>a</strong> adalah anggota dari kelompok pertama.<br>
                        Contoh: nama anak.
                    </div>

                    <div class="relasi-knowledge-card">
                        <strong>b</strong> adalah anggota dari kelompok kedua.<br>
                        Contoh: nama makanan.
                    </div>
                </div>

                <div class="relasi-soft-box" style="margin-top:16px;">
                    <strong>Tanda ∈ dibaca “anggota dari”.</strong><br><br>

                    <ul style="margin:0 0 0 18px;">
                        <li>
                            <strong>a ∈ A</strong> artinya a adalah anggota kelompok A.
                        </li>

                        <li>
                            <strong>b ∈ B</strong> artinya b adalah anggota kelompok B.
                        </li>
                    </ul>
                </div>

                <p>
                    Semua pasangan yang mungkin dari Himpunan A dan Himpunan B disebut
                    <strong>hasil kali Cartesius</strong> dan ditulis
                    <strong>A × B</strong> (dibaca: <em>A cross B</em>).
                </p>

                <div class="relasi-soft-box">
                    <strong>Contoh hasil kali Cartesius:</strong><br><br>

                    Jika:<br>
                    <strong>A = {Anisa}</strong><br>
                    <strong>B = {Soto Banjar, Mie Bancir}</strong><br><br>

                    Maka:<br>
                    <strong>
                        A × B = {(Anisa, Soto Banjar), (Anisa, Mie Bancir)}
                    </strong>
                </div>

                <p>
                    Relasi adalah sebagian pasangan dari <strong>A × B</strong> yang
                    benar-benar digunakan. Satu anak boleh berhubungan dengan lebih dari
                    satu makanan. Hal ini tidak salah dalam relasi.
                </p>

                <div class="relasi-conclusion">
                    <strong>Contoh penerapan relasi</strong><br><br>

                    Misalnya, terdapat dua kelompok, yaitu himpunan siswa dan Himpunan
                    makanan khas Kalimantan Selatan.<br><br>

                    <strong>Himpunan siswa:</strong><br>
                    A = {Anisa, Dito, Zaki, Oca}<br><br>

                    <strong>Himpunan makanan khas Kalimantan Selatan:</strong><br>
                    B = {Lontong, Soto Banjar, Mie Bancir, Nasi Kuning, Ketupat Kandangan}
                </div>

                <div class="relasi-soft-box" style="margin-top:16px;">
                    <strong>Relasi yang terjadi adalah “memesan makanan”:</strong>

                    <ul style="margin:10px 0 0 18px;">
                        <li>Anisa memesan Soto Banjar.</li>
                        <li>Dito memesan Lontong.</li>
                        <li>Zaki memesan Nasi Kuning.</li>
                        <li>Oca memesan Mie Bancir.</li>
                    </ul>
                </div>

                <p>
                    Dalam relasi tersebut, terdapat tiga istilah penting, yaitu
                    <strong>domain</strong>, <strong>kodomain</strong>, dan
                    <strong>range</strong>.
                </p>

                <div class="relasi-term-grid">
                    <div class="relasi-term-card">
                        <strong>Domain</strong><br><br>

                        Domain adalah kelompok asal, yaitu himpunan siswa.<br><br>

                        Jadi, domainnya adalah:<br>
                        <strong>{Anisa, Dito, Zaki, Oca}</strong>
                    </div>

                    <div class="relasi-term-card">
                        <strong>Kodomain</strong><br><br>

                        Kodomain adalah himpunan tujuan, yaitu kumpulan makanan khas
                        Kalimantan Selatan yang tersedia.<br><br>

                        Jadi, kodomainnya adalah:<br>
                        <strong>
                            {Lontong, Soto Banjar, Mie Bancir, Nasi Kuning,
                            Ketupat Kandangan}
                        </strong>
                    </div>

                    <div class="relasi-term-card">
                        <strong>Range</strong><br><br>

                        Range adalah anggota kodomain yang benar-benar mendapat pasangan
                        atau benar-benar dipesan oleh siswa.<br><br>

                        Jadi, range-nya adalah:<br>
                        <strong>{Soto Banjar, Lontong, Nasi Kuning, Mie Bancir}</strong>
                    </div>
                </div>

                <div class="relasi-conclusion">
                    <strong>Kesimpulan:</strong><br>
                    Relasi membantu kita melihat hubungan antara dua himpunan dengan
                    lebih jelas dan teratur.
                </div>
            </div>
        </div>

    </div>

    <!-- ====================== PAGINATION ====================== -->
    <div class="relasi-pagination">
        <nav aria-label="Pagination Materi Relasi">
            <ul class="pagination justify-content-center flex-wrap">

                <li class="page-item" id="relasiPrevItem">
                    <button type="button"
                            class="page-link"
                            onclick="changeRelasiPage(currentRelasiPage - 1)">
                        Sebelumnya
                    </button>
                </li>

                <li class="page-item active" id="relasiPageItem1">
                    <button type="button" class="page-link" onclick="changeRelasiPage(1)">1</button>
                </li>

                <li class="page-item" id="relasiPageItem2">
                    <button type="button" class="page-link" onclick="changeRelasiPage(2)">2</button>
                </li>

                <li class="page-item" id="relasiPageItem3">
                    <button type="button" class="page-link" onclick="changeRelasiPage(3)">3</button>
                </li>

                <li class="page-item" id="relasiPageItem4">
                    <button type="button" class="page-link" onclick="changeRelasiPage(4)">4</button>
                </li>

                <li class="page-item" id="relasiPageItem5">
                    <button type="button" class="page-link" onclick="changeRelasiPage(5)">5</button>
                </li>

                <li class="page-item" id="relasiNextItem">
                    <button type="button"
                            class="page-link"
                            onclick="nextRelasiPage()">
                        Berikutnya
                    </button>
                </li>

            </ul>
        </nav>
    </div>

</div>

<script>
    /* =========================================================
       PAGINATION
    ========================================================= */

    let currentRelasiPage = 1;
    const totalRelasiPage = 5;

    function changeRelasiPage(page) {
        if (page < 1 || page > totalRelasiPage) {
            return;
        }

        if (page > currentRelasiPage) {
            var prevEl = document.getElementById('relasiPage' + currentRelasiPage);
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

        currentRelasiPage = page;

        for (let i = 1; i <= totalRelasiPage; i++) {
            const pageElement = document.getElementById("relasiPage" + i);
            const pageItem = document.getElementById("relasiPageItem" + i);

            if (pageElement) {
                pageElement.classList.toggle("active", i === page);
            }

            if (pageItem) {
                pageItem.classList.toggle("active", i === page);
            }
        }

        const prevItem = document.getElementById("relasiPrevItem");

        if (prevItem) {
            prevItem.classList.toggle("disabled", page === 1);
        }

        simpanJawabanRelasi();

        const target = document.querySelector(".content-gap");

        if (target) {
            target.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
        }
    }

    function nextRelasiPage() {
        var curEl = document.getElementById('relasiPage' + currentRelasiPage);
        if (curEl) {
            var exs = curEl.querySelectorAll('[data-exercise]');
            for (var i = 0; i < exs.length; i++) {
                if (exs[i].getAttribute('data-correct') !== 'true') {
                    ProgressManager.showAlert('Selesaikan semua soal pada halaman ini dengan benar terlebih dahulu!');
                    return;
                }
            }
        }
        if (currentRelasiPage < totalRelasiPage) {
            changeRelasiPage(currentRelasiPage + 1);
        } else {
            ProgressManager.markSubPageDone('materi_2', 'pengertian');
            window.location.href = "/bab_1/lanjut_2";
        }
    }

    /* =========================================================
       DATA DASAR
    ========================================================= */

    const anakBenar = ["Anisa", "Dito", "Zaki", "Oca"];

    const menuBenar = [
        "Lontong",
        "Soto Banjar",
        "Mie Bancir",
        "Nasi Kuning"
    ];

    const pasanganBenar = {
        "Anisa": ["Soto Banjar", "Mie Bancir"],
        "Dito": ["Lontong", "Soto Banjar"],
        "Zaki": ["Nasi Kuning", "Soto Banjar"],
        "Oca": ["Mie Bancir", "Lontong"]
    };

    const kunciPesananR2 = {
        anisa: "Soto Banjar",
        dito: "Lontong",
        zaki: "Nasi Kuning",
        oca: "Mie Bancir"
    };

    const pasanganBenarR3 = {
        "Anisa": ["Soto Banjar", "Mie Bancir"],
        "Dito": ["Lontong", "Soto Banjar"],
        "Zaki": ["Nasi Kuning", "Soto Banjar"],
        "Oca": ["Mie Bancir", "Lontong"]
    };

    window.percobaanRelasiR1Salah = 0;
    window.percobaanRelasiR2Salah = 0;
    window.percobaanRelasiR3Salah = 0;

    function normalisasi(teks) {
        return teks.trim().toLowerCase();
    }

    function normalisasiR3(teks) {
        return teks.trim().toLowerCase();
    }

    function arraysEqualIgnoreOrderCase(arr1, arr2) {
        if (arr1.length !== arr2.length) return false;

        const a = arr1.map(x => normalisasi(x)).sort();
        const b = arr2.map(x => normalisasi(x)).sort();

        return a.every((value, index) => value === b[index]);
    }

    function cekDuplikatCase(arr) {
        const isi = arr
            .map(x => normalisasi(x))
            .filter(value => value !== "");

        return new Set(isi).size !== isi.length;
    }

    function resetWarnaRelasi() {
        document.querySelectorAll(".relasi-input").forEach(function (element) {
            element.classList.remove("relasi-benar", "relasi-salah");
        });
    }

    /* =========================================================
       PERIKSA R1
    ========================================================= */

    function periksaRelasi() {
        resetWarnaRelasi();

        const inputA = [
            document.getElementById("a1").value,
            document.getElementById("a2").value,
            document.getElementById("a3").value,
            document.getElementById("a4").value
        ];

        const inputB = [
            document.getElementById("b1").value,
            document.getElementById("b2").value,
            document.getElementById("b3").value,
            document.getElementById("b4").value
        ];

        const inputR = [];

        for (let i = 1; i <= 8; i++) {
            inputR.push(document.getElementById("r" + i).value);
        }

        const feedback = document.getElementById("feedbackRelasi");

        const semuaKosong = [...inputA, ...inputB, ...inputR]
            .every(value => value.trim() === "");

        if (semuaKosong) {
            feedback.style.display = "block";
            feedback.className = "relasi-feedback feedback-warn";
            feedback.innerHTML =
                "<b>Kamu belum mengisi jawaban.</b><br>" +
                "Silakan isi Himpunan A, Himpunan B, dan relasi terlebih dahulu.";

            simpanJawabanRelasi();
            return;
        }

        const benarA =
            arraysEqualIgnoreOrderCase(inputA, anakBenar) &&
            !cekDuplikatCase(inputA) &&
            !inputA.some(value => value.trim() === "");

        const benarB =
            arraysEqualIgnoreOrderCase(inputB, menuBenar) &&
            !cekDuplikatCase(inputB) &&
            !inputB.some(value => value.trim() === "");

        inputA.forEach(function (value, index) {
            const element = document.getElementById("a" + (index + 1));

            if (
                value.trim() !== "" &&
                anakBenar.some(kunci => normalisasi(kunci) === normalisasi(value))
            ) {
                element.classList.add("relasi-benar");
            } else if (value.trim() !== "") {
                element.classList.add("relasi-salah");
            }
        });

        inputB.forEach(function (value, index) {
            const element = document.getElementById("b" + (index + 1));

            if (
                value.trim() !== "" &&
                menuBenar.some(kunci => normalisasi(kunci) === normalisasi(value))
            ) {
                element.classList.add("relasi-benar");
            } else if (value.trim() !== "") {
                element.classList.add("relasi-salah");
            }
        });

        let benarR = true;

        const namaUrutan = [
            "Anisa", "Anisa",
            "Dito", "Dito",
            "Zaki", "Zaki",
            "Oca", "Oca"
        ];

        const inputPerAnak = {
            "Anisa": [],
            "Dito": [],
            "Zaki": [],
            "Oca": []
        };

        inputR.forEach(function (value, index) {
            const nama = namaUrutan[index];

            if (value.trim() !== "") {
                inputPerAnak[nama].push(value);
            }
        });

        for (const nama in pasanganBenar) {
            const jawabanBenar = pasanganBenar[nama].map(value => normalisasi(value));
            const jawabanSiswa = inputPerAnak[nama].map(value => normalisasi(value));

            inputR.forEach(function (value, index) {
                if (namaUrutan[index] !== nama) return;

                const element = document.getElementById("r" + (index + 1));
                const isi = normalisasi(value);

                if (value.trim() !== "") {
                    if (jawabanBenar.includes(isi)) {
                        element.classList.add("relasi-benar");
                    } else {
                        element.classList.add("relasi-salah");
                        benarR = false;
                    }
                }
            });

            const siswaSorted = [...jawabanSiswa].sort();
            const benarSorted = [...jawabanBenar].sort();

            if (
                siswaSorted.length !== benarSorted.length ||
                JSON.stringify(siswaSorted) !== JSON.stringify(benarSorted)
            ) {
                benarR = false;
            }
        }

        if (benarA && benarB && benarR) {
            window.percobaanRelasiR1Salah = 0;

            feedback.style.display = "block";
            feedback.className = "relasi-feedback feedback-ok";
            feedback.setAttribute('data-correct', 'true');
            feedback.innerHTML =
                "<b>Bagus, jawabanmu sudah benar.</b><br>" +
                "Himpunan A, Himpunan B, dan relasi yang kamu susun sudah sesuai.";

            simpanJawabanRelasi();
            return;
        }

        window.percobaanRelasiR1Salah++;

        let pesan = [];

        if (!benarA) {
            pesan.push("Himpunan A masih perlu diperbaiki.");
        }

        if (!benarB) {
            pesan.push("Himpunan B masih perlu diperbaiki.");
        }

        if (!benarR) {
            pesan.push("Relasi “menyukai” masih perlu diperbaiki.");
        }

        feedback.style.display = "block";
        feedback.className = "relasi-feedback feedback-bad";

        if (window.percobaanRelasiR1Salah < 3) {
            feedback.innerHTML =
                "<b>Jawabanmu masih perlu diperbaiki.</b><br>" +
                pesan.map(item => "• " + item).join("<br>") +
                "<br><br>Tekan tombol <b>Ulangi</b>, lalu coba kembali.";
        } else {
            feedback.innerHTML =
                "<b>Jawabanmu masih belum tepat.</b><br>" +
                "Perhatikan jawaban benar berikut agar kamu semakin paham.<br><br>" +
                "<b>Jawaban benar:</b><br>" +
                "A = { Anisa, Dito, Zaki, Oca }<br>" +
                "B = { Lontong, Soto Banjar, Mie Bancir, Nasi Kuning }<br>" +
                "R<sub>1</sub> = {<br>" +
                "(Anisa, Soto Banjar),<br>" +
                "(Anisa, Mie Bancir),<br>" +
                "(Dito, Lontong),<br>" +
                "(Dito, Soto Banjar),<br>" +
                "(Zaki, Nasi Kuning),<br>" +
                "(Zaki, Soto Banjar),<br>" +
                "(Oca, Mie Bancir),<br>" +
                "(Oca, Lontong)<br>" +
                "}";
        }

        simpanJawabanRelasi();
    }

    function resetRelasi() {
        document
            .querySelectorAll(
                "#a1, #a2, #a3, #a4, " +
                "#b1, #b2, #b3, #b4, " +
                "#r1, #r2, #r3, #r4, #r5, #r6, #r7, #r8"
            )
            .forEach(function (element) {
                if (!element.readOnly) {
                    element.value = "";
                }

                element.classList.remove("relasi-benar", "relasi-salah");
            });

        const feedback = document.getElementById("feedbackRelasi");

        feedback.style.display = "none";
        feedback.className = "relasi-feedback";
        feedback.innerHTML = "";

        simpanJawabanRelasi();
    }

    /* =========================================================
       PERIKSA R2
    ========================================================= */

    function periksaPesananR2() {
        const feedback = document.getElementById("feedbackPesananR2");
        const inputPesananR2 = [
            document.getElementById("ps1").value,
            document.getElementById("ps2").value,
            document.getElementById("ps3").value,
            document.getElementById("ps4").value
        ];

        const jawabanPesananR2 = [
            kunciPesananR2.anisa,
            kunciPesananR2.dito,
            kunciPesananR2.zaki,
            kunciPesananR2.oca
        ];

        document
            .querySelectorAll("#ps1, #ps2, #ps3, #ps4")
            .forEach(function (element) {
                element.classList.remove("relasi-benar", "relasi-salah");
            });

        const semuaKosong = inputPesananR2
            .every(value => value.trim() === "");

        if (semuaKosong) {
            feedback.style.display = "block";
            feedback.className = "relasi-feedback feedback-warn";
            feedback.innerHTML =
                "<b>Kamu belum mengisi jawaban.</b><br>" +
                "Silakan tuliskan relasi “memesan” terlebih dahulu.";

            simpanJawabanRelasi();
            return;
        }

        let semuaBenar = true;

        inputPesananR2.forEach(function (value, index) {
            const element = document.getElementById("ps" + (index + 1));

            if (
                value.trim() !== "" &&
                normalisasi(value) === normalisasi(jawabanPesananR2[index])
            ) {
                element.classList.add("relasi-benar");
            } else {
                semuaBenar = false;

                if (value.trim() !== "") {
                    element.classList.add("relasi-salah");
                }
            }
        });

        if (semuaBenar) {
            window.percobaanRelasiR2Salah = 0;

            feedback.style.display = "block";
            feedback.className = "relasi-feedback feedback-ok";
            feedback.setAttribute('data-correct', 'true');
            feedback.innerHTML =
                "<b>Bagus, jawabanmu sudah benar.</b><br>" +
                "Semua pasangan pada relasi “memesan” sudah sesuai.";

            simpanJawabanRelasi();
            return;
        }

        window.percobaanRelasiR2Salah++;

        feedback.style.display = "block";
        feedback.className = "relasi-feedback feedback-bad";

        if (window.percobaanRelasiR2Salah < 3) {
            feedback.innerHTML =
                "<b>Jawabanmu masih perlu diperbaiki.</b><br>" +
                "Perhatikan kembali menu yang benar-benar dipesan oleh setiap anak.<br><br>" +
                "Tekan tombol <b>Ulangi</b>, lalu coba kembali.";
        } else {
            feedback.innerHTML =
                "<b>Jawabanmu masih belum tepat.</b><br>" +
                "Perhatikan jawaban benar berikut agar kamu semakin paham.<br><br>" +
                "<b>Jawaban benar:</b><br>" +
                "R<sub>2</sub> = {<br>" +
                "(Anisa, Soto Banjar),<br>" +
                "(Dito, Lontong),<br>" +
                "(Zaki, Nasi Kuning),<br>" +
                "(Oca, Mie Bancir)<br>" +
                "}";
        }

        simpanJawabanRelasi();
    }

    function resetPesananR2() {
        document
            .querySelectorAll("#ps1, #ps2, #ps3, #ps4")
            .forEach(function (element) {
                if (!element.readOnly) {
                    element.value = "";
                }

                element.classList.remove("relasi-benar", "relasi-salah");
            });

        const feedback = document.getElementById("feedbackPesananR2");

        feedback.style.display = "none";
        feedback.className = "relasi-feedback";
        feedback.innerHTML = "";

        simpanJawabanRelasi();
    }

    /* =========================================================
       PERIKSA R3
    ========================================================= */

    function resetWarnaRelasiR3() {
        document
            .querySelectorAll(
                "#r3a1, #r3a2, #r3d1, #r3d2, #r3z1, #r3z2, #r3o1, #r3o2"
            )
            .forEach(function (element) {
                element.classList.remove("relasi-benar", "relasi-salah");
            });
    }

    function periksaRelasiR3() {
        resetWarnaRelasiR3();

        const inputR3 = {
            "Anisa": [
                document.getElementById("r3a1").value,
                document.getElementById("r3a2").value
            ],
            "Dito": [
                document.getElementById("r3d1").value,
                document.getElementById("r3d2").value
            ],
            "Zaki": [
                document.getElementById("r3z1").value,
                document.getElementById("r3z2").value
            ],
            "Oca": [
                document.getElementById("r3o1").value,
                document.getElementById("r3o2").value
            ]
        };

        const feedback = document.getElementById("feedbackRelasiR3");

        const semuaKosong = Object
            .values(inputR3)
            .flat()
            .every(value => value.trim() === "");

        if (semuaKosong) {
            feedback.style.display = "block";
            feedback.className = "relasi-feedback feedback-warn";
            feedback.innerHTML =
                "<b>Kamu belum mengisi jawaban.</b><br>" +
                "Silakan tuliskan relasi kebalikan terlebih dahulu.";

            simpanJawabanRelasi();
            return;
        }

        let benarSemua = true;

        const mappingId = {
            "Anisa": ["r3a1", "r3a2"],
            "Dito": ["r3d1", "r3d2"],
            "Zaki": ["r3z1", "r3z2"],
            "Oca": ["r3o1", "r3o2"]
        };

        for (const nama in pasanganBenarR3) {
            const jawabanBenar = pasanganBenarR3[nama]
                .map(value => normalisasiR3(value));

            const jawabanSiswa = inputR3[nama]
                .filter(value => value.trim() !== "")
                .map(value => normalisasiR3(value));

            inputR3[nama].forEach(function (value, index) {
                const element = document.getElementById(mappingId[nama][index]);

                if (value.trim() !== "") {
                    if (jawabanBenar.includes(normalisasiR3(value))) {
                        element.classList.add("relasi-benar");
                    } else {
                        element.classList.add("relasi-salah");
                        benarSemua = false;
                    }
                }
            });

            const siswaSorted = [...jawabanSiswa].sort();
            const benarSorted = [...jawabanBenar].sort();

            if (
                siswaSorted.length !== benarSorted.length ||
                JSON.stringify(siswaSorted) !== JSON.stringify(benarSorted)
            ) {
                benarSemua = false;
            }
        }

        if (benarSemua) {
            window.percobaanRelasiR3Salah = 0;

            feedback.style.display = "block";
            feedback.className = "relasi-feedback feedback-ok";
            feedback.setAttribute('data-correct', 'true');
            feedback.innerHTML =
                "<b>Bagus, jawabanmu sudah benar.</b><br>" +
                "Relasi kebalikan yang kamu tulis sudah sesuai.";

            simpanJawabanRelasi();
            return;
        }

        window.percobaanRelasiR3Salah++;

        feedback.style.display = "block";
        feedback.className = "relasi-feedback feedback-bad";

        if (window.percobaanRelasiR3Salah < 3) {
            feedback.innerHTML =
                "<b>Jawabanmu masih perlu diperbaiki.</b><br>" +
                "Ingat, menu ditulis lebih dahulu, kemudian nama anak.<br><br>" +
                "Tekan tombol <b>Ulangi</b>, lalu coba kembali.";
        } else {
            feedback.innerHTML =
                "<b>Jawabanmu masih belum tepat.</b><br>" +
                "Perhatikan jawaban benar berikut agar kamu semakin paham.<br><br>" +
                "<b>Jawaban benar:</b><br>" +
                "R<sub>3</sub> = {<br>" +
                "(Soto Banjar, Anisa),<br>" +
                "(Mie Bancir, Anisa),<br>" +
                "(Lontong, Dito),<br>" +
                "(Soto Banjar, Dito),<br>" +
                "(Nasi Kuning, Zaki),<br>" +
                "(Soto Banjar, Zaki),<br>" +
                "(Mie Bancir, Oca),<br>" +
                "(Lontong, Oca)<br>" +
                "}";
        }

        simpanJawabanRelasi();
    }

    function resetRelasiR3() {
        document
            .querySelectorAll(
                "#r3a1, #r3a2, #r3d1, #r3d2, #r3z1, #r3z2, #r3o1, #r3o2"
            )
            .forEach(function (element) {
                if (!element.readOnly) {
                    element.value = "";
                }

                element.classList.remove("relasi-benar", "relasi-salah");
            });

        const feedback = document.getElementById("feedbackRelasiR3");

        feedback.style.display = "none";
        feedback.className = "relasi-feedback";
        feedback.innerHTML = "";

        simpanJawabanRelasi();
    }

    /* =========================================================
       CONTOH JAWABAN
    ========================================================= */

    function isiContohJawabanRelasi() {
        const contohJawaban = {
            r1: "Soto Banjar",
            ps2: "Lontong",
            r3a1: "Soto Banjar"
        };

        Object.entries(contohJawaban).forEach(function ([id, value]) {
            const element = document.getElementById(id);

            if (!element) return;

            element.value = value;
            element.readOnly = true;
        });
    }

    /* =========================================================
       SIMPAN JAWABAN SISWA
    ========================================================= */

    const kunciPenyimpananRelasi =
        "jawaban_relasi_" + window.location.pathname;

    const idFeedbackRelasi = [
        "feedbackRelasi",
        "feedbackPesananR2",
        "feedbackRelasiR3"
    ];

    function simpanJawabanRelasi() {
        try {
            const data = {
                halamanAktif: currentRelasiPage,

                percobaanR1:
                    Number(window.percobaanRelasiR1Salah) || 0,

                percobaanR2:
                    Number(window.percobaanRelasiR2Salah) || 0,

                percobaanR3:
                    Number(window.percobaanRelasiR3Salah) || 0,

                kontrol: {},

                tampilan: {}
            };

            document
                .querySelectorAll(".content-gap input")
                .forEach(function (element) {
                    if (!element.id) return;

                    data.kontrol[element.id] = {
                        value: element.value,
                        className: element.className,
                        style: element.getAttribute("style") || ""
                    };
                });

            idFeedbackRelasi.forEach(function (id) {
                const element = document.getElementById(id);

                if (!element) return;

                data.tampilan[id] = {
                    innerHTML: element.innerHTML,
                    className: element.className,
                    style: element.getAttribute("style") || ""
                };
            });

            localStorage.setItem(
                kunciPenyimpananRelasi,
                JSON.stringify(data)
            );
        } catch (error) {
            console.warn("Jawaban belum dapat disimpan:", error);
        }
    }

    function pulihkanJawabanRelasi() {
        try {
            const tersimpan =
                localStorage.getItem(kunciPenyimpananRelasi);

            if (!tersimpan) {
                changeRelasiPage(1);
                return;
            }

            const data = JSON.parse(tersimpan);

            window.percobaanRelasiR1Salah =
                Number(data.percobaanR1) || 0;

            window.percobaanRelasiR2Salah =
                Number(data.percobaanR2) || 0;

            window.percobaanRelasiR3Salah =
                Number(data.percobaanR3) || 0;

            Object.keys(data.kontrol || {}).forEach(function (id) {
                const element = document.getElementById(id);
                const kondisi = data.kontrol[id];

                if (!element) return;

                element.value = kondisi.value ?? "";
                element.className =
                    kondisi.className || "relasi-input";

                if (kondisi.style) {
                    element.setAttribute("style", kondisi.style);
                } else {
                    element.removeAttribute("style");
                }
            });

            Object.keys(data.tampilan || {}).forEach(function (id) {
                const element = document.getElementById(id);
                const kondisi = data.tampilan[id];

                if (!element) return;

                element.innerHTML = kondisi.innerHTML || "";
                element.className =
                    kondisi.className || "relasi-feedback";

                if (kondisi.style) {
                    element.setAttribute("style", kondisi.style);
                } else {
                    element.removeAttribute("style");
                }
            });

            if (
                Number.isInteger(data.halamanAktif) &&
                data.halamanAktif >= 1 &&
                data.halamanAktif <= totalRelasiPage
            ) {
                changeRelasiPage(data.halamanAktif);
            } else {
                changeRelasiPage(1);
            }
        } catch (error) {
            console.warn(
                "Jawaban tersimpan belum dapat dipulihkan:",
                error
            );

            changeRelasiPage(1);
        }
    }

    document.addEventListener("DOMContentLoaded", function () {
        pulihkanJawabanRelasi();
        isiContohJawabanRelasi();
        simpanJawabanRelasi();

        document
            .querySelectorAll(".content-gap input")
            .forEach(function (element) {
                element.addEventListener("input", simpanJawabanRelasi);
                element.addEventListener("change", simpanJawabanRelasi);
            });
    });

    document.addEventListener("click", function () {
        setTimeout(simpanJawabanRelasi, 0);
    });

    window.addEventListener("pagehide", simpanJawabanRelasi);
    window.addEventListener("beforeunload", simpanJawabanRelasi);

</script>

@endsection
