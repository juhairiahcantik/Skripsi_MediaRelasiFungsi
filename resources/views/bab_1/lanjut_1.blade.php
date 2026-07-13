@extends('layouts.main')

@section('container')

<style>
    body, html {
        margin: 0;
        padding: 0;
        min-height: 100%;
        font-family: 'Poppins', sans-serif;
        background-color: #f8f9fa;
    }

    .content-gap {
        margin-left: 40px;
        margin-right: 20px;
        box-sizing: border-box;
        max-width: 100%;
        overflow-x: hidden;
    }

    @media (max-width: 768px) {
        .content-gap {
            margin-left: 12px;
            margin-right: 12px;
        }
    }

    .penyajian-page {
        display: none;
        width: 100%;
        max-width: 100%;
        box-sizing: border-box;
        overflow-x: hidden;
    }

    .penyajian-page.active {
        display: block;
    }

    .penyajian-page > * {
        max-width: 100%;
        box-sizing: border-box;
    }

    .penyajian-awal-title {
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

    .materi-intro {
        font-size: 1rem;
        color: #4B2673;
        line-height: 1.9;
        margin-bottom: 12px;
    }

    .cara-item {
        background: #ffffff;
        border: 3px dashed #A855F7;
        border-radius: 24px;
        padding: 24px 28px;
        margin: 22px 0 24px 0;
        color: #4B2673;
        box-shadow: 0 14px 28px rgba(168, 85, 247, 0.13), 0 6px 14px rgba(75, 38, 115, 0.06);
    }

    .cara-label {
        display: inline-block;
        background: linear-gradient(135deg, #8E44AD, #B57EDC);
        color: #ffffff;
        padding: 10px 22px;
        border-radius: 16px;
        font-weight: 800;
        font-size: 1.02rem;
        margin-bottom: 14px;
        box-shadow: 0 6px 14px rgba(142, 68, 173, 0.16);
    }

    .cara-item p {
        margin: 8px 0;
        line-height: 1.9;
        color: #4B2673;
    }

    .activity-wrap {
        background: #ffffff;
        border: 1px solid #eadcf6;
        border-radius: 26px;
        padding: 24px;
        margin-top: 20px;
        box-shadow: 0 14px 32px rgba(91, 44, 111, 0.08);
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    .activity-title {
        background: linear-gradient(135deg, #8E44AD, #B57EDC);
        color: #ffffff;
        border-radius: 20px;
        padding: 16px 20px;
        text-align: center;
        font-size: 1.22rem;
        font-weight: 800;
        margin-bottom: 22px;
        box-shadow: 0 10px 20px rgba(142, 68, 173, 0.16);
    }

    .activity-box {
        background: #ffffff;
        border: 1px solid #E9D5FF;
        border-radius: 20px;
        padding: 20px;
        margin-bottom: 16px;
        box-sizing: border-box;
        line-height: 1.85;
        color: #1F2937;
    }

    .activity-subtitle {
        font-size: 1.05rem;
        font-weight: 800;
        color: #6B21A8;
        margin-bottom: 12px;
    }

    .activity-box p {
        margin: 8px 0;
        line-height: 1.85;
    }

    .activity-instruction {
        background: #fbf7ff;
        border: 2px dashed #cfa7f3;
        border-radius: 18px;
        padding: 16px 18px;
        margin-bottom: 16px;
        color: #4B2673;
        line-height: 1.85;
    }

    .baris-jawaban {
        margin: 16px 0;
        font-size: 1rem;
        line-height: 1.8;
        color: #4B2673;
    }

    .kotak-jawaban {
        display: inline-block;
        min-width: 260px;
        min-height: 42px;
        padding: 8px 12px;
        margin-left: 6px;
        background: #F3E8FF;
        border: 2px solid #E9D5FF;
        border-bottom: 4px solid #7C3AED;
        border-radius: 12px;
        vertical-align: middle;
        cursor: pointer;
        font-weight: 700;
        color: #4B2673;
    }

    .pilihan {
        display: inline-block;
        background: #F3E8FF;
        border: 1px solid #E9D5FF;
        color: #4B2673;
        padding: 10px 14px;
        margin: 6px;
        border-radius: 12px;
        cursor: pointer;
        font-size: 1rem;
        font-weight: 600;
        transition: all 0.2s ease;
    }

    .pilihan:hover,
    .pilihan.active {
        background: linear-gradient(135deg, #8E44AD, #B57EDC);
        color: white;
    }

    .correct {
        border-color: #16A34A !important;
        background: #ECFDF5 !important;
    }

    .wrong {
        border-color: #DC2626 !important;
        background: #FEF2F2 !important;
    }

    .empty {
        border-color: #F59E0B !important;
        background: #FFFBEB !important;
    }

    .btn-row {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        flex-wrap: wrap;
        margin-top: 18px;
    }

    .btn-ungu,
    .btn-putih,
    .notasi-ungu-btn-main,
    .notasi-ungu-btn-reset {
        min-width: 145px;
        height: 48px;
        border-radius: 14px;
        padding: 0 22px;
        font-weight: 800;
        font-size: 1rem;
        cursor: pointer;
        box-sizing: border-box;
        transition: all 0.22s ease;
    }

    .btn-ungu,
    .notasi-ungu-btn-main {
        background: linear-gradient(135deg, #8E44AD, #B57EDC);
        color: #ffffff;
        border: none;
        box-shadow: 0 10px 18px rgba(142, 68, 173, 0.18);
    }

    .btn-putih,
    .notasi-ungu-btn-reset {
        background: #ffffff;
        color: #8E44AD;
        border: 2px solid #8E44AD;
    }

    .btn-ungu:hover,
    .btn-putih:hover,
    .notasi-ungu-btn-main:hover,
    .notasi-ungu-btn-reset:hover {
        transform: translateY(-2px);
    }

    #hasil,
    #feedback,
    .notasi-ungu-feedback {
        margin-top: 16px;
        background: #F5F3FF;
        border: 1px solid #C4B5FD;
        border-left: 5px solid #8E44AD;
        border-radius: 16px;
        padding: 16px;
        font-size: 0.95rem;
        line-height: 1.8;
        color: #4B2673;
        font-weight: 700;
    }

    .select-line {
        margin-bottom: 16px;
        font-size: 1rem;
        line-height: 1.9;
        color: #4B2673;
    }

    .select-line select,
    .notasi-ungu-select {
        min-width: 180px;
        padding: 9px 12px;
        border: 2px solid #C4B5FD;
        border-radius: 12px;
        background: #FFFFFF;
        font-size: 0.95rem;
        margin: 0 6px;
        box-sizing: border-box;
        outline: none;
        color: #4B2673;
        font-weight: 600;
    }

    .notasi-ungu-wrap {
        background: #ffffff;
        border: 1px solid #eadcf6;
        border-radius: 26px;
        padding: 24px;
        margin-top: 20px;
        box-shadow: 0 14px 32px rgba(91, 44, 111, 0.08);
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    .notasi-ungu-title {
        background: linear-gradient(135deg, #8E44AD, #B57EDC);
        color: #ffffff;
        border-radius: 20px;
        padding: 16px 20px;
        text-align: center;
        font-size: 1.22rem;
        font-weight: 800;
        margin-bottom: 22px;
        box-shadow: 0 10px 20px rgba(142, 68, 173, 0.16);
    }

    .notasi-ungu-box {
        background: #FFFFFF;
        border: 1px solid #E9D5FF;
        border-radius: 20px;
        padding: 20px;
        margin-bottom: 16px;
        box-sizing: border-box;
    }

    .notasi-ungu-subtitle {
        font-size: 1.05rem;
        font-weight: 800;
        color: #6B21A8;
        margin-bottom: 14px;
    }

    .notasi-ungu-text {
        font-size: 1rem;
        line-height: 1.9;
        color: #1F2937;
    }

    .notasi-ungu-text p {
        margin: 0 0 12px 0;
    }

    .notasi-ungu-list {
        margin: 8px 0 0 22px;
        padding: 0;
        line-height: 1.9;
    }

    .notasi-ungu-badge {
        display: inline-block;
        text-align: center;
        background: #7C3AED;
        color: #FFFFFF;
        border-radius: 8px;
        padding: 2px 8px;
        font-weight: 700;
        margin-right: 6px;
    }

    .notasi-ungu-instruction {
        background: #fbf7ff;
        border: 2px dashed #cfa7f3;
        border-radius: 18px;
        padding: 16px 18px;
        font-size: 1rem;
        color: #4B2673;
        margin-bottom: 18px;
        line-height: 1.8;
    }

    .notasi-ungu-row {
        margin-bottom: 14px;
        font-size: 1rem;
        line-height: 1.9;
        color: #4B2673;
    }

    .notasi-ungu-btn-row {
        display: flex;
        justify-content: center;
        gap: 12px;
        flex-wrap: wrap;
        margin-top: 18px;
    }

    .tutorial-venn-wrap {
        background: #ffffff;
        border: 1px solid #eadcf6;
        border-radius: 26px;
        padding: 26px;
        box-shadow: 0 14px 32px rgba(91, 44, 111, 0.08);
        color: #4B2673;
        overflow: visible !important;
    }

    .tutorial-title {
        background: linear-gradient(135deg, #8E44AD, #B57EDC);
        color: #ffffff;
        text-align: center;
        border-radius: 20px;
        padding: 16px 20px;
        font-weight: 800;
        font-size: 1.25rem;
        margin-bottom: 22px;
        box-shadow: 0 10px 20px rgba(142, 68, 173, 0.16);
    }

    .step-card {
        background: #ffffff;
        border: 3px dashed #A855F7;
        border-radius: 24px;
        padding: 22px 24px;
        margin-top: 24px;
        box-shadow: 0 14px 28px rgba(168, 85, 247, 0.13), 0 6px 14px rgba(75, 38, 115, 0.06);
        overflow: visible !important;
    }

    .step-label {
        display: inline-block;
        background: linear-gradient(135deg, #8E44AD, #B57EDC);
        color: #ffffff;
        border-radius: 16px;
        padding: 10px 22px;
        font-weight: 800;
        margin-bottom: 16px;
        box-shadow: 0 6px 14px rgba(142, 68, 173, 0.16);
    }

    .step-card p,
    .step-card li {
        color: #4B2673;
        line-height: 1.85;
    }

    .demo-wrapper,
    .demo-form-wrapper,
    .demo-wrapper-reset {
        width: 100%;
        max-width: 100%;
        box-sizing: border-box;
        text-align: center;
        margin: 30px 0 45px 0;
        padding-top: 90px !important;
        overflow: visible !important;
    }

    .semesta-wrapper,
    .lingkaran-demo-wrapper,
    .semesta-wrapper-2,
    .semesta-wrapper-final,
    .semesta-wrapper-click,
    .hasil-wrapper {
        width: 100%;
        max-width: 100%;
        overflow-x: auto;
        box-sizing: border-box;
    }

    .toolbar-row,
    .input-row,
    .form-row,
    .toolbar-row-reset,
    .input-row-reset {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 16px;
        flex-wrap: wrap;
        max-width: 100%;
        overflow: visible !important;
    }

    .input-row,
    .input-row-reset {
        margin-top: 25px;
    }

    .demo-btn,
    .btn-blue,
    .btn-red,
    .btn-green,
    .btn-gray {
        padding: 10px 20px;
        border-radius: 12px;
        font-weight: 700;
        border: none;
        margin: 5px;
        color: white;
        cursor: pointer;
    }

    .btn-blue {
        background: #2F80ED;
    }

    .btn-red {
        background: #EB5757;
    }

    .btn-green {
        background: #27AE60;
    }

    .btn-gray {
        background: #6C757D;
    }

    .demo-input,
    .demo-select,
    .demo-input-reset,
    .demo-select-reset {
        width: min(260px, 100%);
        max-width: 100%;
        border-radius: 10px;
        padding: 10px 12px;
        border: 1px solid #ced4da;
        box-sizing: border-box;
    }

    .target-wrapper,
    .highlight-target,
    .highlight-wrapper,
    .highlight-wrapper-reset {
        position: relative;
        display: inline-block;
        overflow: visible !important;
    }

    .target-btn,
    .glow-blue,
    .glow-green,
    .glow-red,
    .glow-gray {
        animation: glowPulse 2.5s infinite;
    }

    @keyframes glowPulse {
        0% { box-shadow: 0 0 0 0 rgba(168, 85, 247, 0.5); }
        70% { box-shadow: 0 0 0 12px rgba(168, 85, 247, 0); }
        100% { box-shadow: 0 0 0 0 rgba(168, 85, 247, 0); }
    }

    .premium-tooltip,
    .tooltip-guide,
    .tooltip-purple,
    .tooltip-purple-reset {
        display: block !important;
        position: absolute !important;
        bottom: 125% !important;
        left: 50% !important;
        transform: translateX(-50%) !important;
        background: linear-gradient(90deg, #C084FC, #A855F7) !important;
        color: #ffffff !important;
        padding: 10px 16px !important;
        border-radius: 12px !important;
        font-size: 0.85rem !important;
        font-weight: 700 !important;
        box-shadow: 0 10px 25px rgba(124, 58, 237, 0.25) !important;
        white-space: nowrap !important;
        text-align: center !important;
        line-height: 1.5 !important;
        z-index: 9999 !important;
    }

    .premium-tooltip::after,
    .tooltip-guide::after,
    .tooltip-purple::after,
    .tooltip-purple-reset::after {
        content: "" !important;
        position: absolute !important;
        top: 100% !important;
        left: 50% !important;
        transform: translateX(-50%) !important;
        border-width: 8px !important;
        border-style: solid !important;
        border-color: #A855F7 transparent transparent transparent !important;
    }

    .semesta-box,
    .semesta-container,
    .semesta-container-2,
    .semesta-container-final,
    .semesta-container-click {
        width: 100%;
        max-width: 750px;
        margin: 0 auto;
        border: 6px solid #7b2cbf;
        border-radius: 45px;
        background: #f4f1fa;
        position: relative;
        box-sizing: border-box;
    }

    .semesta-box {
        max-width: 600px;
        height: 350px;
    }

    .semesta-container,
    .semesta-container-2 {
        height: 380px;
        padding: 50px 60px;
    }

    .semesta-container-final,
    .semesta-container-click {
        height: 420px;
        padding: 60px;
    }

    .semesta-title,
    .semesta-title-2,
    .semesta-title-final,
    .semesta-title-click {
        text-align: center;
        font-size: 1.4rem;
        font-weight: 800;
        color: #4b0082;
        margin-bottom: 15px;
    }

    .semesta-container .semesta-title,
    .semesta-container-2 .semesta-title-2,
    .semesta-container-final .semesta-title-final,
    .semesta-container-click .semesta-title-click {
        position: absolute;
        top: -40px;
        left: 50%;
        transform: translateX(-50%);
        white-space: nowrap;
    }

    .circle-wrapper,
    .circle-area,
    .circle-row-click,
    .circles-row {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 80px;
    }

    .circle-area {
        justify-content: flex-start;
    }

    .circle-item,
    .circle-item-click {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .circle-label,
    .circle-label-click,
    .label-a,
    .label-a-final {
        font-size: 1.3rem;
        font-weight: 800;
        color: #4b0082;
        margin-bottom: 10px;
    }

    .lingkaran-a,
    .lingkaran-b,
    .lingkaran-a-final,
    .lingkaran-a-click,
    .lingkaran-b-click {
        width: 180px;
        height: 300px;
        border-radius: 50%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        box-sizing: border-box;
    }

    .lingkaran-a,
    .lingkaran-a-final,
    .lingkaran-a-click {
        border: 6px solid #ff006e;
    }

    .lingkaran-b,
    .lingkaran-b-click {
        border: 6px solid #3a86ff;
    }

    .member,
    .member-item {
        display: flex;
        align-items: center;
        font-size: 1rem;
        margin: 6px 0;
        color: #222;
    }

    .dot,
    .member-dot {
        width: 8px;
        height: 8px;
        background: black;
        border-radius: 50%;
        margin-left: 8px;
    }

    .hasil-wrapper {
        display: flex;
        justify-content: center;
        margin: 20px 0;
    }

    .hasil-box {
        width: 100%;
        max-width: 700px;
        min-height: 300px;
        background: #ffffff;
        border: 4px solid #7A4BC4;
        border-radius: 40px;
        padding: 35px 40px;
        text-align: left;
        box-sizing: border-box;
    }

    .hasil-title {
        font-weight: 800;
        font-size: 1.2rem;
        margin-bottom: 30px;
    }

    .hasil-item {
        font-size: 1.05rem;
        margin-bottom: 26px;
    }

    .notif {
        margin-top: 8px;
        font-size: 0.85rem;
        font-weight: 700;
    }

    .penyajian-pagination {
        width: 100%;
        margin-top: 30px;
        margin-bottom: 35px;
        clear: both;
    }

    .penyajian-pagination .pagination {
        gap: 5px;
    }

    .penyajian-pagination .page-link {
        color: #6A2C70;
        border: 1px solid #E3C7F3;
        border-radius: 12px !important;
        font-weight: 700;
        background-color: #ffffff;
        box-shadow: 0 2px 6px rgba(0,0,0,0.08);
    }

    .penyajian-pagination .page-link:hover {
        background-color: #F3E5FF;
        color: #4B2673;
    }

    .penyajian-pagination .page-item.active .page-link {
        background-color: #CDA4DE;
        border-color: #CDA4DE;
        color: #ffffff;
    }

    .penyajian-pagination .page-item.disabled .page-link {
        color: #aaa;
        background-color: #f6f6f6;
        border-color: #eee;
        box-shadow: none;
        pointer-events: none;
    }

    @media (max-width: 992px) {
        .circle-wrapper,
        .circle-area,
        .circle-row-click,
        .circles-row {
            gap: 45px;
        }
    }

    @media (max-width: 768px) {
        .penyajian-awal-title {
            font-size: 1.05rem;
            padding: 14px 16px;
            border-radius: 16px;
        }

        .activity-wrap,
        .notasi-ungu-wrap,
        .tutorial-venn-wrap {
            padding: 18px;
            border-radius: 20px;
        }

        .activity-title,
        .notasi-ungu-title,
        .tutorial-title {
            font-size: 1.05rem;
            padding: 14px 16px;
            border-radius: 16px;
        }

        .cara-item,
        .step-card {
            padding: 18px 16px;
            border-radius: 20px;
        }

        .kotak-jawaban {
            display: block;
            width: 100%;
            min-width: 100%;
            margin-left: 0;
            margin-top: 8px;
        }

        .pilihan {
            display: block;
            width: 100%;
            box-sizing: border-box;
        }

        .select-line select,
        .notasi-ungu-select {
            display: block;
            width: 100%;
            min-width: 100%;
            margin: 8px 0;
        }

        .btn-ungu,
        .btn-putih,
        .notasi-ungu-btn-main,
        .notasi-ungu-btn-reset {
            width: 100%;
        }

        .demo-wrapper,
        .demo-form-wrapper,
        .demo-wrapper-reset {
            padding-top: 110px !important;
        }

        .toolbar-row,
        .input-row,
        .form-row,
        .toolbar-row-reset,
        .input-row-reset {
            flex-direction: column;
            align-items: stretch;
            gap: 12px;
        }

        .toolbar-row button,
        .input-row button,
        .form-row button,
        .toolbar-row-reset button,
        .input-row-reset button,
        .demo-input,
        .demo-select,
        .demo-input-reset,
        .demo-select-reset {
            width: 100%;
            max-width: 100%;
        }

        .premium-tooltip,
        .tooltip-guide,
        .tooltip-purple,
        .tooltip-purple-reset {
            max-width: 90vw !important;
            white-space: normal !important;
            font-size: 0.8rem !important;
            line-height: 1.5 !important;
        }

        .semesta-box {
            height: 250px;
            border-radius: 28px;
        }

        .semesta-container,
        .semesta-container-2,
        .semesta-container-final,
        .semesta-container-click {
            height: auto;
            min-height: 300px;
            padding: 70px 20px 35px 20px;
            border-radius: 30px;
        }

        .circle-wrapper,
        .circle-area,
        .circle-row-click,
        .circles-row {
            flex-direction: column;
            gap: 45px;
            justify-content: center;
        }

        .lingkaran-a,
        .lingkaran-b,
        .lingkaran-a-final,
        .lingkaran-a-click,
        .lingkaran-b-click {
            width: 150px;
            height: 210px;
        }

        .hasil-box {
            min-height: auto;
            padding: 24px 20px;
            border-radius: 24px;
        }

        .penyajian-pagination .page-link {
            font-size: 0.85rem;
            padding: 7px 10px;
        }
    }

    @media (max-width: 480px) {
        .semesta-box {
            height: 220px;
        }

        .semesta-container,
        .semesta-container-2,
        .semesta-container-final,
        .semesta-container-click {
            padding: 65px 14px 28px 14px;
        }

        .lingkaran-a,
        .lingkaran-b,
        .lingkaran-a-final,
        .lingkaran-a-click,
        .lingkaran-b-click {
            width: 130px;
            height: 185px;
        }
    }

    /* ====================== KOTAK AWAL PENYAJIAN HIMPUNAN ====================== */

.penyajian-intro-card {
    background: #ffffff;
    border: 1px solid #eadcf6;
    border-radius: 26px;
    padding: 24px;
    margin-bottom: 28px;
    box-shadow: 0 14px 32px rgba(91, 44, 111, 0.08);
    box-sizing: border-box;
    overflow: hidden;
}

.penyajian-intro-card .penyajian-awal-title {
    margin-bottom: 22px;
}

.penyajian-intro-card .materi-intro {
    color: #4B2673;
    line-height: 1.9;
    margin-bottom: 14px;
}

.penyajian-intro-card .cara-item {
    margin-top: 22px;
    margin-bottom: 0;
}

@media (max-width: 768px) {
    .penyajian-intro-card {
        padding: 18px;
        border-radius: 20px;
    }
}
/* ====================== FEEDBACK DESKRIPSI ====================== */

.hasil-deskripsi {
    margin-top: 18px;
    padding: 18px 20px;
    border-radius: 18px;
    line-height: 1.9;
    font-weight: 600;
    box-sizing: border-box;
}

.hasil-benar-final {
    background: #EAFBF1 !important;
    border: 1px solid #BDE8CE !important;
    border-left: 6px solid #16A34A !important;
    color: #14532D !important;
}

.hasil-sebagian-final {
    background: #F5F3FF !important;
    border: 1px solid #D8B4FE !important;
    border-left: 6px solid #8E44AD !important;
    color: #4B2673 !important;
}

.hasil-salah-final {
    background: #FFF1F2 !important;
    border: 1px solid #FECACA !important;
    border-left: 6px solid #DC2626 !important;
    color: #7F1D1D !important;
}

.hasil-kosong-final {
    background: #FFFBEB !important;
    border: 1px solid #FDE68A !important;
    border-left: 6px solid #F59E0B !important;
    color: #78350F !important;
}

.hasil-deskripsi ul {
    margin: 10px 0 0 20px;
    padding: 0;
}

.hasil-deskripsi li {
    margin-bottom: 8px;
}



/* ====================== FIX LABEL A DI ATAS LINGKARAN ====================== */

.circle-item-single {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.circle-item-single .label-a {
    width: 100%;
    text-align: center;
    display: block;
    margin-bottom: 12px;
    font-size: 1.35rem;
    font-weight: 800;
    color: #4b0082;
    line-height: 1;
}

.circle-item-single .lingkaran-a {
    margin: 0 auto;
}

/* =========================================================
   TUTORIAL MENGGAMBAR DIAGRAM VENN - RESPONSIVE FINAL
========================================================= */

/* WRAPPER UTAMA */
.tutorial-venn-wrap {
    background: #ffffff;
    border: 1px solid #eadcf6;
    border-radius: 26px;
    padding: 26px;
    box-shadow: 0 14px 32px rgba(91, 44, 111, 0.08);
    color: #4B2673;
    max-width: 100%;
    box-sizing: border-box;
    overflow-x: hidden;
}

/* JUDUL UTAMA */
.tutorial-title {
    background: linear-gradient(135deg, #8E44AD, #B57EDC);
    color: #ffffff;
    text-align: center;
    border-radius: 20px;
    padding: 16px 20px;
    font-weight: 800;
    font-size: 1.25rem;
    margin-bottom: 22px;
    box-shadow: 0 10px 20px rgba(142, 68, 173, 0.16);
}

/* TEKS TENGAH */
.tutorial-center-text {
    text-align: center;
    font-weight: 500;
    color: #4B2673;
    line-height: 1.8;
    margin: 18px 0;
}

/* TAB LANGKAH */
.tutorial-step-tabs-wrap {
    width: 100%;
    max-width: 100%;
    background: #ffffff;
    border: 1px solid #eadcf6;
    border-radius: 22px;
    padding: 8px;
    margin-bottom: 26px;
    box-shadow: 0 10px 24px rgba(91, 44, 111, 0.08);
    box-sizing: border-box;
    overflow-x: auto;
}

.tutorial-step-tabs {
    display: flex;
    gap: 8px;
    width: max-content;
    min-width: 100%;
}

.tutorial-step-tab-button {
    border: none;
    background: #ffffff;
    color: #4B2673;
    padding: 13px 18px;
    border-radius: 18px;
    font-weight: 800;
    font-size: 0.95rem;
    cursor: pointer;
    transition: all 0.25s ease;
    white-space: nowrap;
    flex: 1;
}

.tutorial-step-tab-button:hover {
    background: #F3E8FF;
    color: #6B21A8;
}

.tutorial-step-tab-button.active {
    background: linear-gradient(135deg, #8E44AD, #B57EDC);
    color: #ffffff;
    box-shadow: 0 8px 18px rgba(142, 68, 173, 0.20);
}

/* HALAMAN LANGKAH */
.tutorial-step-page {
    display: none;
}

.tutorial-step-page.active {
    display: block;
}

/* KARTU LANGKAH */
.step-card {
    background: #ffffff;
    border: 3px dashed #A855F7;
    border-radius: 24px;
    padding: 22px 24px;
    margin-top: 24px;
    box-shadow: 0 14px 28px rgba(168, 85, 247, 0.13),
                0 6px 14px rgba(75, 38, 115, 0.06);
    max-width: 100%;
    box-sizing: border-box;
    overflow: visible;
}

.step-label {
    display: inline-block;
    background: linear-gradient(135deg, #8E44AD, #B57EDC);
    color: #ffffff;
    border-radius: 16px;
    padding: 10px 22px;
    font-weight: 800;
    margin-bottom: 16px;
    box-shadow: 0 6px 14px rgba(142, 68, 173, 0.16);
}

.step-card p,
.step-card li {
    color: #4B2673;
    line-height: 1.85;
}

/* BOX INSTRUKSI */
.tutorial-instruction-box {
    background: #fbf7ff;
    border: 2px dashed #cfa7f3;
    border-radius: 18px;
    padding: 16px 18px;
    margin: 18px 0 22px 0;
    color: #4B2673;
    line-height: 1.8;
    font-weight: 600;
}

.tutorial-note-box {
    text-align: center;
    background: #F8F2FF;
    border: 1px solid #E9D5FF;
    border-left: 5px solid #A855F7;
    color: #4B2673;
    border-radius: 16px;
    padding: 14px 18px;
    margin: 20px auto;
    line-height: 1.8;
    font-weight: 600;
}

/* DEMO BUTTON AREA */
.demo-wrapper,
.demo-form-wrapper,
.demo-wrapper-reset {
    width: 100%;
    max-width: 100%;
    box-sizing: border-box;
    text-align: center;
    margin: 30px 0 45px 0;
    padding-top: 90px;
    overflow: visible;
}

.toolbar-row,
.input-row,
.form-row,
.toolbar-row-reset,
.input-row-reset {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 16px;
    flex-wrap: wrap;
    max-width: 100%;
    box-sizing: border-box;
    overflow: visible;
}

.input-row,
.input-row-reset {
    margin-top: 25px;
}

/* TOMBOL */
.demo-btn,
.btn-blue,
.btn-red,
.btn-green,
.btn-gray {
    padding: 10px 20px;
    border-radius: 12px;
    font-weight: 700;
    border: none;
    margin: 5px;
    color: white;
    cursor: pointer;
    box-sizing: border-box;
    transition: all 0.25s ease;
}

.demo-btn:hover {
    transform: translateY(-2px);
}

.btn-blue {
    background: #2F80ED;
}

.btn-red {
    background: #EB5757;
}

.btn-green {
    background: #27AE60;
}

.btn-gray {
    background: #6C757D;
}

/* INPUT DAN SELECT */
.demo-input,
.demo-select,
.demo-input-reset,
.demo-select-reset {
    width: min(260px, 100%);
    max-width: 100%;
    border-radius: 10px;
    padding: 10px 12px;
    border: 1px solid #ced4da;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

/* TOOLTIP */
.target-wrapper,
.highlight-target,
.highlight-wrapper,
.highlight-wrapper-reset {
    position: relative;
    display: inline-block;
    overflow: visible;
}

.premium-tooltip,
.tooltip-guide,
.tooltip-purple,
.tooltip-purple-reset {
    display: block;
    position: absolute;
    bottom: 125%;
    left: 50%;
    transform: translateX(-50%);
    background: linear-gradient(90deg, #C084FC, #A855F7);
    color: #ffffff;
    padding: 10px 16px;
    border-radius: 12px;
    font-size: 0.85rem;
    font-weight: 700;
    box-shadow: 0 10px 25px rgba(124, 58, 237, 0.25);
    white-space: nowrap;
    text-align: center;
    line-height: 1.5;
    z-index: 9999;
}

.premium-tooltip::after,
.tooltip-guide::after,
.tooltip-purple::after,
.tooltip-purple-reset::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translateX(-50%);
    border-width: 8px;
    border-style: solid;
    border-color: #A855F7 transparent transparent transparent;
}

/* GLOW */
.target-btn,
.glow-blue,
.glow-green,
.glow-red,
.glow-gray {
    animation: glowPulse 2.5s infinite;
}

@keyframes glowPulse {
    0% {
        box-shadow: 0 0 0 0 rgba(168, 85, 247, 0.5);
    }
    70% {
        box-shadow: 0 0 0 12px rgba(168, 85, 247, 0);
    }
    100% {
        box-shadow: 0 0 0 0 rgba(168, 85, 247, 0);
    }
}

/* WRAPPER GAMBAR */
.semesta-wrapper,
.lingkaran-demo-wrapper,
.semesta-wrapper-2,
.semesta-wrapper-final,
.semesta-wrapper-click,
.hasil-wrapper {
    width: 100%;
    max-width: 100%;
    box-sizing: border-box;
    overflow-x: auto;
}

/* KOTAK SEMESTA */
.semesta-box,
.semesta-container,
.semesta-container-2,
.semesta-container-final,
.semesta-container-click {
    width: 100%;
    max-width: 750px;
    margin: 0 auto;
    border: 6px solid #7b2cbf;
    border-radius: 45px;
    background: #f4f1fa;
    position: relative;
    box-sizing: border-box;
}

.semesta-box {
    max-width: 600px;
    height: 350px;
}

.semesta-container,
.semesta-container-2 {
    height: 380px;
    padding: 50px 60px;
}

.semesta-container-final,
.semesta-container-click {
    height: 420px;
    padding: 60px;
}

/* JUDUL HIMPUNAN SEMESTA */
.semesta-title,
.semesta-title-2,
.semesta-title-final,
.semesta-title-click {
    text-align: center;
    font-size: 1.4rem;
    font-weight: 800;
    color: #4b0082;
    margin-bottom: 15px;
}

.semesta-container .semesta-title,
.semesta-container-2 .semesta-title-2,
.semesta-container-final .semesta-title-final,
.semesta-container-click .semesta-title-click {
    position: absolute;
    top: -40px;
    left: 50%;
    transform: translateX(-50%);
    white-space: nowrap;
}

/* AREA LINGKARAN */
.circle-wrapper,
.circle-area,
.circle-row-click,
.circles-row {
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 80px;
}

.circle-area {
    justify-content: flex-start;
}

/* FIX LABEL A DI ATAS LINGKARAN */
.circle-item,
.circle-item-click,
.circle-item-single {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.circle-label,
.circle-label-click,
.label-a,
.label-a-final {
    width: 100%;
    display: block;
    text-align: center;
    font-size: 1.3rem;
    font-weight: 800;
    color: #4b0082;
    margin-bottom: 10px;
    line-height: 1;
}

/* LINGKARAN */
.lingkaran-a,
.lingkaran-b,
.lingkaran-a-final,
.lingkaran-a-click,
.lingkaran-b-click {
    width: 180px;
    height: 300px;
    border-radius: 50%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    box-sizing: border-box;
    margin: 0 auto;
}

.lingkaran-a,
.lingkaran-a-final,
.lingkaran-a-click {
    border: 6px solid #ff006e;
}

.lingkaran-b,
.lingkaran-b-click {
    border: 6px solid #3a86ff;
}

/* ANGGOTA */
.member,
.member-item {
    display: flex;
    align-items: center;
    font-size: 1rem;
    margin: 6px 0;
    color: #222;
}

.dot,
.member-dot {
    width: 8px;
    height: 8px;
    background: black;
    border-radius: 50%;
    margin-left: 8px;
}

/* HASIL PEMERIKSAAN */
.hasil-wrapper {
    display: flex;
    justify-content: center;
    margin: 20px 0;
}

.hasil-box {
    width: 100%;
    max-width: 700px;
    min-height: 300px;
    background: #ffffff;
    border: 4px solid #7A4BC4;
    border-radius: 40px;
    padding: 35px 40px;
    text-align: left;
    box-sizing: border-box;
}

.hasil-title {
    font-weight: 800;
    font-size: 1.2rem;
    margin-bottom: 30px;
}

.hasil-item {
    font-size: 1.05rem;
    margin-bottom: 26px;
}

.notif {
    margin-top: 8px;
    font-size: 0.85rem;
    font-weight: 700;
}

/* =========================================================
   RESPONSIVE TABLET
========================================================= */

@media (max-width: 992px) {
    .tutorial-venn-wrap {
        padding: 22px;
    }

    .tutorial-step-tab-button {
        font-size: 0.9rem;
        padding: 12px 16px;
    }

    .step-card {
        padding: 20px 18px;
    }

    .circle-wrapper,
    .circle-area,
    .circle-row-click,
    .circles-row {
        gap: 45px;
    }

    .premium-tooltip,
    .tooltip-guide,
    .tooltip-purple,
    .tooltip-purple-reset {
        max-width: 250px;
        white-space: normal;
        font-size: 0.8rem;
    }
}

/* =========================================================
   RESPONSIVE HP
========================================================= */

@media (max-width: 768px) {
    .tutorial-venn-wrap {
        padding: 16px 12px;
        border-radius: 18px;
    }

    .tutorial-title {
        font-size: 1rem;
        padding: 14px 12px;
        border-radius: 16px;
        line-height: 1.4;
    }

    .tutorial-venn-wrap p {
        font-size: 0.92rem;
        line-height: 1.7;
        text-align: center;
    }

    .tutorial-step-tabs-wrap {
        overflow-x: auto;
        padding: 6px;
        border-radius: 16px;
    }

    .tutorial-step-tabs {
        min-width: max-content;
    }

    .tutorial-step-tab-button {
        flex: 0 0 auto;
        font-size: 0.82rem;
        padding: 10px 14px;
        border-radius: 13px;
    }

    .step-card {
        padding: 18px 12px;
        border-radius: 18px;
        margin-top: 18px;
    }

    .step-label {
        display: block;
        width: 100%;
        text-align: center;
        font-size: 0.9rem;
        padding: 10px 12px;
        border-radius: 14px;
        box-sizing: border-box;
    }

    .demo-wrapper,
    .demo-form-wrapper,
    .demo-wrapper-reset {
        padding-top: 85px;
        margin: 20px 0 28px 0;
    }

    .toolbar-row,
    .input-row,
    .form-row,
    .toolbar-row-reset,
    .input-row-reset {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
        flex-wrap: wrap;
    }

    .demo-btn,
    .btn-blue,
    .btn-red,
    .btn-green,
    .btn-gray {
        width: auto;
        min-width: 135px;
        font-size: 0.85rem;
        padding: 10px 14px;
        margin: 4px;
    }

    .demo-input,
    .demo-select,
    .demo-input-reset,
    .demo-select-reset {
        width: 100%;
        max-width: 260px;
    }

    .premium-tooltip,
    .tooltip-guide,
    .tooltip-purple,
    .tooltip-purple-reset {
        max-width: 260px;
        white-space: normal;
        font-size: 0.75rem;
        line-height: 1.4;
        z-index: 9999;
    }

    .semesta-container,
    .semesta-container-2,
    .semesta-container-final,
    .semesta-container-click {
        width: 100%;
        height: auto;
        min-height: 300px;
        padding: 65px 14px 28px 14px;
        border-radius: 26px;
        border-width: 5px;
        box-sizing: border-box;
    }

    .semesta-box {
        width: 100%;
        height: 230px;
        border-radius: 24px;
        border-width: 5px;
    }

    .semesta-title,
    .semesta-title-2,
    .semesta-title-final,
    .semesta-title-click {
        font-size: 1rem;
        white-space: normal;
        width: 90%;
        text-align: center;
    }

    .circle-wrapper,
    .circle-area,
    .circle-row-click,
    .circles-row {
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 34px;
        height: auto;
    }

    .circle-area {
        justify-content: center;
    }

    .lingkaran-a,
    .lingkaran-b,
    .lingkaran-a-final,
    .lingkaran-a-click,
    .lingkaran-b-click {
        width: 135px;
        height: 205px;
        border-width: 5px;
    }

    .circle-label,
    .circle-label-click,
    .label-a,
    .label-a-final {
        font-size: 1.05rem;
        margin-bottom: 8px;
        text-align: center;
    }

    .member,
    .member-item {
        font-size: 0.82rem;
        margin: 4px 0;
    }

    .hasil-box {
        width: 100%;
        min-height: auto;
        padding: 22px 16px;
        border-radius: 22px;
        border-width: 4px;
    }

    .hasil-title {
        font-size: 1rem;
        margin-bottom: 18px;
    }

    .hasil-item {
        font-size: 0.9rem;
        margin-bottom: 16px;
    }

    .tutorial-instruction-box,
    .tutorial-note-box {
        font-size: 0.9rem;
        line-height: 1.7;
        text-align: center;
        padding: 14px 12px;
    }
}

/* =========================================================
   RESPONSIVE HP KECIL
========================================================= */

@media (max-width: 480px) {
    .tutorial-venn-wrap {
        padding: 14px 10px;
    }

    .tutorial-step-tab-button {
        font-size: 0.8rem;
        padding: 9px 12px;
    }

    .semesta-container,
    .semesta-container-2,
    .semesta-container-final,
    .semesta-container-click {
        padding: 60px 10px 24px 10px;
        border-radius: 22px;
    }

    .semesta-box {
        height: 210px;
    }

    .lingkaran-a,
    .lingkaran-b,
    .lingkaran-a-final,
    .lingkaran-a-click,
    .lingkaran-b-click {
        width: 120px;
        height: 180px;
    }

    .premium-tooltip,
    .tooltip-guide,
    .tooltip-purple,
    .tooltip-purple-reset {
        font-size: 0.74rem;
        padding: 9px 10px;
    }
}



/* ====================== WARNA TOMBOL HIJAU - HANYA TAMPILAN ====================== */
/* Tombol utama aktivitas */
.btn-ungu,
.notasi-ungu-btn-main {
    background: linear-gradient(135deg, #15803D, #22C55E) !important;
    color: #ffffff !important;
    border: none !important;
    box-shadow: 0 10px 18px rgba(21, 128, 61, 0.22) !important;
}

/* Tombol ulangi */
.btn-putih,
.notasi-ungu-btn-reset {
    background: #ffffff !important;
    color: #15803D !important;
    border: 2px solid #15803D !important;
}

/* Pilihan jawaban yang sedang dipilih */
.pilihan:hover,
.pilihan.active {
    background: linear-gradient(135deg, #15803D, #22C55E) !important;
    color: #ffffff !important;
    border-color: #15803D !important;
}

/* Tab langkah tutorial yang aktif */
.tutorial-step-tab-button:hover {
    background: #DCFCE7 !important;
    color: #166534 !important;
}

.tutorial-step-tab-button.active {
    background: linear-gradient(135deg, #15803D, #22C55E) !important;
    color: #ffffff !important;
    box-shadow: 0 8px 18px rgba(21, 128, 61, 0.22) !important;
}



/* ====================== PETUNJUK SERAGAM ====================== */
.activity-instruction,
.notasi-ungu-instruction {
    background: #FBF7FF !important;
    border: 2px dashed #CFA7F3 !important;
    border-radius: 18px !important;
    padding: 16px 18px !important;
    margin-bottom: 16px !important;
    color: #4B2673 !important;
    line-height: 1.85 !important;
    box-sizing: border-box !important;
}

.activity-instruction strong,
.notasi-ungu-instruction b {
    color: #4B2673 !important;
}

</style>

<div class="content-gap" data-materi="materi_1" data-sub-page="penyajian" data-total-pages="4">

  <!-- ====================== HALAMAN 1 ====================== -->
<div class="penyajian-page active" id="penyajianPage1">

    <div class="penyajian-intro-card">

        <div class="penyajian-awal-title">
            Penyajian Himpunan
        </div>

        <p class="materi-intro">
            Perlu diingat, suatu himpunan dinotasikan dengan huruf kapital
            (seperti <strong>A, B, C, … atau Z</strong>) dan elemen/anggota dari suatu
            himpunan dituliskan di dalam tanda kurung kurawal <strong>{ … }</strong>.
        </p>

        <p class="materi-intro">
            Ada tiga cara untuk menyatakan himpunan tanpa mengubah maknanya, yaitu sebagai berikut.
        </p>

        <div class="cara-item">
            <div class="cara-label">1. Cara Deskripsi</div>

            <p>Himpunan dinyatakan dengan cara kata-kata.</p>

            <p>
                Himpunan dapat direpresentasikan dengan menggambarkan karakteristik
                yang dimiliki setiap anggota himpunan.
            </p>
        </div>

    </div>

    <div class="activity-wrap">
        <div class="activity-title">Ayo Nyatakan Himpunan Dengan Cara Deskripsi</div>

        <div class="activity-box">
            <div class="activity-subtitle">Soal Cerita</div>

            <p>Di sebuah keluarga, ada Andi dan Lina. Mereka adalah kakek dan nenek.</p>

            <p>Andi dan Lina mempunyai empat orang anak, yaitu Iful, Hendra, Ardi, dan Ica.</p>

            <p>Iful menikah dengan Ifit. Mereka mempunyai dua orang anak, yaitu Lala dan Nabil.</p>

            <p>Hendra menikah dengan Hikmah. Mereka mempunyai tiga orang anak, yaitu Alfi, Bella, dan Rehan.</p>

            <p>Sementara itu, Ardi dan Ica belum menikah.</p>
        </div>

        <div class="activity-box">
            <strong>Perhatikan himpunan berikut.</strong><br><br>
            A = {Ipul, Hendra, Ardi, Ica}<br>
            B = {Lala, Nabil, Alfi, Bella, Rehan}<br>
            C = {Andi, Lina}<br>
            S = {Andi, Lina, Ipul, Ifit, Hendra, Hikmah, Ardi, Nisa, Lala, Nabil, Alfi, Bella, Rehan}
        </div>

        <div class="activity-instruction">
            <strong>Petunjuk:</strong><br>
            1. Klik salah satu pilihan deskripsi di bawah.<br>
            2. Lalu klik kotak kosong di samping Himpunan A, B, C, atau S yang sesuai.<br>
            3. Ulangi sampai semua kotak terisi.
        </div>

        <div class="activity-box">
            <strong>Isilah dengan deskripsi yang tepat.</strong>

            <div class="baris-jawaban">
                Himpunan A = { <span class="kotak-jawaban" onclick="isiJawaban('A')"></span> }
            </div>

            <div class="baris-jawaban">
                Himpunan B = { <span class="kotak-jawaban" onclick="isiJawaban('B')"></span> }
            </div>

            <div class="baris-jawaban">
                Himpunan C = { <span class="kotak-jawaban" onclick="isiJawaban('C')"></span> }
            </div>

            <div class="baris-jawaban">
                Himpunan S = { <span class="kotak-jawaban" onclick="isiJawaban('S')"></span> }
            </div>
        </div>

        <div class="activity-box">
            <strong>Pilihan deskripsi:</strong><br><br>

            <div id="daftarPilihan">
                <div class="pilihan" onclick="pilihJawaban(this,'opt1')">anak-anak Andi dan Lina</div>
                <div class="pilihan" onclick="pilihJawaban(this,'opt2')">cucu-cucu Andi dan Lina</div>
                <div class="pilihan" onclick="pilihJawaban(this,'opt3')">kakek dan nenek</div>
                <div class="pilihan" onclick="pilihJawaban(this,'opt4')">semua anggota keluarga</div>
            </div>
        </div>

        <div class="btn-row">
            <button type="button" onclick="cekJawabanDeskripsi()" class="btn-ungu">
                Cek Jawaban
            </button>

            <button type="button" onclick="ulangSoal()" class="btn-putih">
                Ulangi
            </button>
        </div>

        <p id="hasil" data-exercise="deskripsi"></p>
    </div>
</div>
    <!-- ====================== HALAMAN 2 ====================== -->
<div class="penyajian-page" id="penyajianPage2">

    <div class="cara-item">
        <div class="cara-label">2. Cara Enumerasi</div>

        <p>Himpunan dinyatakan dengan cara menyebutkan anggota-anggotanya.</p>

        <p>Anggota himpunan dituliskan satu per satu dalam bentuk daftar.</p>

        <p>
            Jika jumlah anggotanya banyak, dapat digunakan tanda
            <strong>(...)</strong> yang berarti “dan seterusnya”.
        </p>
    </div>

    <div class="activity-wrap">
        <div class="activity-title">Ayo Nyatakan Dengan Cara Enumerasi</div>

        <div class="activity-box">
            <div class="activity-subtitle">Soal Cerita:</div>

            <p>Di sebuah keluarga, ada Andi dan Lina. Mereka adalah kakek dan nenek.</p>

            <p>Andi dan Lina mempunyai empat orang anak, yaitu Iful, Hendra, Ardi, dan Ica.</p>

            <p>Iful menikah dengan Ifit dan mempunyai dua anak, yaitu Lala dan Nabil.</p>

            <p>Hendra menikah dengan Hikmah dan mempunyai tiga anak, yaitu Alfi, Bella, dan Rehan.</p>

            <p>Ardi dan Ica belum menikah.</p>

            <p><strong>Arti setiap himpunan:</strong></p>

            <p>A = anak-anak Andi dan Lina</p>
            <p>B = cucu-cucu Andi dan Lina</p>
            <p>C = kakek dan nenek</p>
        </div>

        <div class="activity-box">
            <div class="activity-instruction">
                <strong>Petunjuk:</strong><br>
                Pilih nama yang tepat untuk melengkapi setiap himpunan berikut.
            </div>

            <div class="select-line">
                Himpunan A = {Iful,
                <select id="A">
                    <option value="">Pilih Jawaban</option>
                    <option>Hendra</option>
                    <option>Alfi</option>
                    <option>Andi</option>
                </select>
                , Ardi, Ica}
            </div>

            <div class="select-line">
                Himpunan B = {Lala, Nabil,
                <select id="B">
                    <option value="">Pilih Jawaban</option>
                    <option>Hendra</option>
                    <option>Alfi</option>
                    <option>Andi</option>
                </select>
                , Bella, Rehan}
            </div>

            <div class="select-line">
                Himpunan C = {
                <select id="C">
                    <option value="">Pilih Jawaban</option>
                    <option>Hendra</option>
                    <option>Alfi</option>
                    <option>Andi</option>
                </select>
                , Lina}
            </div>

            <div class="btn-row">
                <button type="button" onclick="cekJawabanEnumerasi()" class="btn-ungu">
                    Cek Jawaban
                </button>

                <button type="button" onclick="ulangEnumerasi()" class="btn-putih">
                    Ulangi
                </button>
            </div>

            <div id="feedback" data-exercise="enumerasi" style="display:none;"></div>
        </div>
    </div>
</div>
    <!-- ====================== HALAMAN 3 ====================== -->
    <div class="penyajian-page" id="penyajianPage3">

        <div class="cara-item">
            <div class="cara-label">3. Cara Notasi Himpunan</div>

            <p>Himpunan dinyatakan dengan cara menggunakan notasi pembuat himpunan.</p>

            <p>
                Konstruktor himpunan digunakan untuk menyatakan syarat keanggotaan suatu himpunan.
                Bentuk umum notasi ini adalah <strong>{x | P(x)}</strong> Cara bacanya Himpunan semua x sedemikian sehingga P(x)
            </p>

            <p>
                Simbol <strong>x</strong> menyatakan anggota himpunan, sedangkan <strong>P(x)</strong>
                menyatakan syarat yang harus dipenuhi agar x menjadi anggota himpunan.
            </p>

            <p>Variabel lain juga dapat digunakan, seperti a, b, c, y, z, dan lain-lain.</p>
        </div>

        <div class="notasi-ungu-wrap">
            <div class="notasi-ungu-title">Ayo Nyatakan dalam Notasi Pembentuk Himpunan</div>

            <div class="notasi-ungu-box">
                <div class="notasi-ungu-subtitle">Soal Cerita:</div>

                <div class="notasi-ungu-text">
                    <p>Dalam sebuah keluarga, Andi dan Lina adalah kakek dan nenek.</p>

                    <p>Mereka mempunyai empat orang anak, yaitu <b>Iful, Hendra, Ardi, dan Ica</b>.</p>

                    <p>Iful memiliki dua anak, yaitu <b>Lala dan Nabil</b>.</p>

                    <p>Hendra memiliki tiga anak, yaitu <b>Alfi, Bella, dan Rehan</b>.</p>

                    <p>Ardi dan Ica belum menikah.</p>

                    <p>Dari cerita tersebut, diperoleh beberapa himpunan berikut:</p>

                    <ul class="notasi-ungu-list">
                        <li><span class="notasi-ungu-badge">Himpunan A</span> = { Iful, Hendra, Ardi, Ica }</li>
                        <li><span class="notasi-ungu-badge">Himpunan B</span> = { Lala, Nabil, Alfi, Bella, Rehan }</li>
                        <li><span class="notasi-ungu-badge">Himpunan C</span> = { Andi, Lina }</li>
                        <li><span class="notasi-ungu-badge">Himpunan S</span> = { Andi, Lina, Iful, Ifit, Hendra, Hikmah, Ardi, Ica, Lala, Nabil, Alfi, Bella, Rehan }</li>
                    </ul>

                    <p style="margin-top:10px;">
                        Sekarang, nyatakan himpunan tersebut dalam bentuk <b>notasi pembentuk himpunan</b>.
                    </p>
                </div>
            </div>

            <div class="notasi-ungu-box">
                <div class="notasi-ungu-subtitle">Perhatikan pernyataan berikut.</div>

                <div class="notasi-ungu-instruction">
                    <b>Petunjuk:</b><br>
                    Pilih kata yang tepat untuk melengkapi notasi pembentuk himpunan berikut.<br>
                    Jawaban yang dipilih adalah <b>jenis anggota</b>, bukan nama orang.
                </div>

                <div class="notasi-ungu-row">
                    Himpunan A = { x | x adalah
                    <select id="notasiUngu-A" class="notasi-ungu-select">
                        <option value="">Pilih Jawaban</option>
                        <option value="anak">anak</option>
                        <option value="cucu">cucu</option>
                        <option value="orang tua">orang tua</option>
                        <option value="anggota keluarga">anggota keluarga</option>
                    </select>
                    dari Andi dan Lina }
                </div>

                <div class="notasi-ungu-row">
                    Himpunan B = { x | x adalah
                    <select id="notasiUngu-B" class="notasi-ungu-select">
                        <option value="">Pilih Jawaban</option>
                        <option value="anak">anak</option>
                        <option value="cucu">cucu</option>
                        <option value="orang tua">orang tua</option>
                        <option value="anggota keluarga">anggota keluarga</option>
                    </select>
                    dari Andi dan Lina }
                </div>

                <div class="notasi-ungu-row">
                    Himpunan C = { x | x adalah
                    <select id="notasiUngu-C" class="notasi-ungu-select">
                        <option value="">Pilih Jawaban</option>
                        <option value="anak">anak</option>
                        <option value="cucu">cucu</option>
                        <option value="orang tua">orang tua</option>
                        <option value="anggota keluarga">anggota keluarga</option>
                    </select>
                    (kakek atau nenek) }
                </div>

                <div class="notasi-ungu-row">
                    Himpunan S = { x | x merupakan
                    <select id="notasiUngu-S" class="notasi-ungu-select">
                        <option value="">Pilih Jawaban</option>
                        <option value="anak">anak</option>
                        <option value="cucu">cucu</option>
                        <option value="orang tua">orang tua</option>
                        <option value="anggota keluarga">anggota keluarga</option>
                    </select>
                    dalam silsilah keluarga Andi }
                </div>

                <div class="notasi-ungu-btn-row">
                    <button type="button" class="notasi-ungu-btn-main" onclick="notasiUnguCheck()">Cek Jawaban</button>
                    <button type="button" class="notasi-ungu-btn-reset" onclick="notasiUnguReset()">Ulangi</button>
                </div>

                <div id="notasiUngu-feedback" class="notasi-ungu-feedback" data-exercise="notasi" style="display:none;"></div>
            </div>
        </div>
    </div>
<!-- ====================== HALAMAN 4 ====================== -->
<div class="penyajian-page" id="penyajianPage4">

    <div class="tutorial-venn-wrap">
        <div class="tutorial-title">Tutorial Menggambar Diagram Venn</div>

        <p>Ikuti langkah-langkah berikut untuk membuat diagram Venn:</p>

        <!-- TAB LANGKAH -->
        <div class="tutorial-step-tabs-wrap">
            <div class="tutorial-step-tabs">
                <button type="button" class="tutorial-step-tab-button active" onclick="changeTutorialStep(1)">
                    1. Semesta
                </button>

                <button type="button" class="tutorial-step-tab-button" onclick="changeTutorialStep(2)">
                    2. Himpunan
                </button>

                <button type="button" class="tutorial-step-tab-button" onclick="changeTutorialStep(3)">
                    3. Anggota
                </button>

                <button type="button" class="tutorial-step-tab-button" onclick="changeTutorialStep(4)">
                    4. Periksa
                </button>

                <button type="button" class="tutorial-step-tab-button" onclick="changeTutorialStep(5)">
                    5. Hapus
                </button>

                <button type="button" class="tutorial-step-tab-button" onclick="changeTutorialStep(6)">
                    6. Reset
                </button>
            </div>
        </div>

        <!-- ====================== LANGKAH 1 ====================== -->
        <div class="tutorial-step-page active" id="tutorialStep1">
            <div class="step-card">
                <div class="step-label">Langkah 1: Membuat Himpunan Semesta</div>

                <div class="demo-wrapper">
                    <div class="toolbar-row">
                        <div class="target-wrapper">
                            <div class="premium-tooltip">Klik tombol ini untuk membuat Himpunan Semesta</div>
                            <button class="demo-btn btn-blue target-btn">Buat Semesta</button>
                        </div>

                        <button class="demo-btn btn-blue">Buat Himpunan</button>
                        <button class="demo-btn btn-red">Hapus Himpunan</button>
                        <button class="demo-btn btn-green">Periksa</button>
                        <button class="demo-btn btn-gray">Reset Semua</button>
                    </div>

                    <div class="input-row">
                        <input type="text" class="demo-input" placeholder="Nama anggota...">

                        <select class="demo-select">
                            <option>Pilih Himpunan</option>
                        </select>

                        <button class="demo-btn btn-blue">Tambah Anggota</button>
                    </div>
                </div>

                <p style="text-align:center; font-weight:500;">
                    Setelah diklik, maka akan muncul sebuah kotak besar di layar seperti gambar di bawah ini.
                </p>

                <div class="semesta-wrapper">
                    <div class="semesta-title">HIMPUNAN SEMESTA</div>
                    <div class="semesta-box"></div>
                </div>

                <p>
                    Kotak ini disebut <strong>Himpunan Semesta (S)</strong>.
                    Himpunan semesta adalah tempat semua lingkaran atau himpunan (A, B, C, …) dan semua anggotanya akan dibuat.
                    Semua kegiatan selanjutnya harus dilakukan di dalam kotak ini.
                </p>
            </div>
        </div>

        <!-- ====================== LANGKAH 2 ====================== -->
        <div class="tutorial-step-page" id="tutorialStep2">
            <div class="step-card">
                <div class="step-label">Langkah 2: Membuat Himpunan (Lingkaran)</div>

                <div class="demo-wrapper">
                    <div class="toolbar-row">
                        <button class="demo-btn btn-blue">Buat Semesta</button>

                        <div class="target-wrapper">
                            <div class="premium-tooltip">Klik tombol ini untuk membuat Himpunan (A, B, dst.)</div>
                            <button class="demo-btn btn-blue target-btn">Buat Himpunan</button>
                        </div>

                        <button class="demo-btn btn-red">Hapus Himpunan</button>
                        <button class="demo-btn btn-green">Periksa</button>
                        <button class="demo-btn btn-gray">Reset Semua</button>
                    </div>

                    <div class="input-row">
                        <input type="text" class="demo-input" placeholder="Nama anggota...">

                        <select class="demo-select">
                            <option>Pilih Himpunan</option>
                        </select>

                        <button class="demo-btn btn-blue">Tambah Anggota</button>
                    </div>
                </div>

                <p style="text-align:center;">
                    Setelah di klik tombol buat himpunan maka akan muncul otomatis himpunan <strong>A</strong>.
                </p>

             <div class="lingkaran-demo-wrapper">
            <div class="semesta-container">
                <div class="semesta-title">HIMPUNAN SEMESTA</div>

                <div class="circle-wrapper">
                    <div class="circle-item-single">
                        <div class="label-a">A</div>
                        <div class="lingkaran-a"></div>
                    </div>
                </div>
            </div>
        </div>

                <ul>
                    <li>
                        Jika kamu mengklik tombol tersebut lagi:
                        <ul>
                            <li>Klik ke-2 → muncul Himpunan <strong>B</strong></li>
                        </ul>
                    </li>
                </ul>

                <div class="semesta-wrapper-2">
                    <div class="semesta-container-2">
                        <div class="semesta-title-2">HIMPUNAN SEMESTA</div>

                        <div class="circles-row">
                            <div class="circle-item">
                                <div class="circle-label">A</div>
                                <div class="lingkaran-a"></div>
                            </div>

                            <div class="circle-item">
                                <div class="circle-label">B</div>
                                <div class="lingkaran-b"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <ul>
                    <li>
                        Lingkaran-lingkaran ini adalah <strong>himpunan</strong>,
                        yaitu tempat kamu memasukkan nama anggota. lingkaran tersebut bisa disebut Diagram Venn.
                    </li>
                </ul>
            </div>
        </div>

        <!-- ====================== LANGKAH 3 ====================== -->
        <div class="tutorial-step-page" id="tutorialStep3">
            <div class="step-card">
                <div class="step-label">Langkah 3: Menambahkan Anggota</div>

                <ul>
                    <li>
                        Ketikkan nama anggota pada kolom <strong>“Nama anggota…”</strong>.
                        <br>
                        Pada contoh ini dituliskan nama anggota:
                        <strong>Ipul, Hendra, Ardi, dan Ica</strong>.
                    </li>

                    <li>
                        Pilih himpunan tujuan pada menu <strong>“Pilih Himpunan”</strong>.
                        <br>
                        Pada contoh ini dipilih <strong>Himpunan A</strong>.
                    </li>

                    <li>Klik tombol <strong>“Tambah Anggota”</strong>.</li>
                </ul>

                <div class="demo-form-wrapper">
                    <div class="form-row">
                        <div class="highlight-target">
                            <div class="tooltip-guide">Ketik nama anggota</div>
                            <input type="text" class="demo-input glow-blue" placeholder="Nama anggota...">
                        </div>

                        <div class="highlight-target">
                            <div class="tooltip-guide">Pilih himpunan</div>
                            <select class="demo-select">
                                <option>Pilih Himpunan</option>
                                <option>Himpunan A</option>
                            </select>
                        </div>

                        <div class="highlight-target">
                            <div class="tooltip-guide">Klik Tambah Anggota</div>
                            <button class="demo-btn btn-blue glow-blue">Tambah Anggota</button>
                        </div>
                    </div>
                </div>

                <p>
                    Setelah tombol <strong>“Tambah Anggota”</strong> diklik,
                    nama-nama anggota akan otomatis masuk dan tersusun rapi
                    di dalam lingkaran himpunan yang dipilih.
                </p>

                <div class="semesta-wrapper-final">
                    <div class="semesta-container-final">
                        <div class="semesta-title-final">HIMPUNAN SEMESTA</div>

                        <div class="circle-area">
                            <div class="circle-item">
                                <div class="label-a-final">A</div>

                                <div class="lingkaran-a-final">
                                    <div class="member-item">Ipul <div class="member-dot"></div></div>
                                    <div class="member-item">Hendra <div class="member-dot"></div></div>
                                    <div class="member-item">Ardi <div class="member-dot"></div></div>
                                    <div class="member-item">Ica <div class="member-dot"></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ====================== LANGKAH 4 ====================== -->
<div class="tutorial-step-page" id="tutorialStep4">
    <div class="step-card">
        <div class="step-label">Langkah 4: Melihat Isi Semua Himpunan</div>

        <div class="tutorial-instruction-box">
            Pada langkah ini, klik tombol <strong>Periksa</strong> untuk melihat hasil gambar diagram Venn yang sudah dibuat.
            Tombol ini digunakan untuk memeriksa apakah anggota himpunan sudah dimasukkan ke tempat yang benar.
        </div>

        <div class="demo-wrapper">
            <div class="toolbar-row">
                <button class="demo-btn btn-blue">Buat Semesta</button>
                <button class="demo-btn btn-blue">Buat Himpunan</button>
                <button class="demo-btn btn-red">Hapus Himpunan</button>

                <div class="highlight-wrapper">
                    <div class="tooltip-purple">
                        Klik tombol ini untuk memeriksa hasil diagram Venn
                    </div>

                    <button class="demo-btn btn-green glow-green">Periksa</button>
                </div>

                <button class="demo-btn btn-gray">Reset Semua</button>
            </div>

            <div class="input-row">
                <input type="text" class="demo-input" placeholder="Nama anggota...">

                <select class="demo-select">
                    <option>Pilih Himpunan</option>
                </select>

                <button class="demo-btn btn-blue">Tambah Anggota</button>
            </div>
        </div>

        <p class="tutorial-center-text">
            Setelah tombol <strong>“Periksa”</strong> diklik, aplikasi akan menampilkan hasil pemeriksaan diagram Venn.
            Hasil tersebut membantu pengguna mengetahui apakah jawaban yang dibuat sudah benar atau masih perlu diperbaiki.
        </p>

        <div class="tutorial-instruction-box">
            Jika jawaban masih salah, aplikasi akan menampilkan bagian yang perlu diperbaiki, seperti anggota yang belum dimasukkan,
            anggota yang tidak sesuai, serta jawaban benar sebagai pembanding. Dengan begitu, pengguna dapat mengetahui letak kesalahannya
            dan memperbaiki diagram Venn dengan lebih mudah.
        </div>

        <p class="tutorial-center-text">
            Jadi, tombol <strong>Periksa</strong> berfungsi sebagai alat untuk mengecek hasil akhir gambar diagram Venn sebelum pengguna melanjutkan atau mengulang pengerjaan.
        </p>
    </div>
</div>
        <!-- ====================== LANGKAH 5 ====================== -->
        <div class="tutorial-step-page" id="tutorialStep5">
            <div class="step-card">
                <div class="step-label">Langkah 5: Menghapus Lingkaran</div>

                <ul>
                    <li>Klik tombol <strong>“Hapus Lingkaran”</strong>.</li>
                </ul>

                <div class="demo-wrapper">
                    <div class="toolbar-row">
                        <button class="demo-btn btn-blue">Buat Semesta</button>
                        <button class="demo-btn btn-blue">Buat Himpunan</button>

                        <div class="highlight-wrapper">
                            <div class="tooltip-purple">
                                Klik Hapus Himpunan untuk menghapus lingkaran yang terakhir dibuat.
                            </div>

                            <button id="hapusBtn" class="demo-btn btn-red glow-red">Hapus Himpunan</button>
                            <div id="notifHapus" class="notif"></div>
                        </div>

                        <button class="demo-btn btn-green">Periksa</button>
                        <button class="demo-btn btn-gray">Reset Semua</button>
                    </div>

                    <div class="input-row">
                        <input type="text" class="demo-input" placeholder="Nama anggota...">

                        <select id="setSelect" class="demo-select">
                            <option value="">Pilih Himpunan</option>
                            <option value="A">Himpunan A</option>
                            <option value="B">Himpunan B</option>
                        </select>

                        <button class="demo-btn btn-blue">Tambah Anggota</button>
                    </div>
                </div>

                <p>
                    Pada contoh ini, Himpunan B akan terhapus lebih dulu karena merupakan lingkaran yang terakhir dibuat.
                </p>

                <div class="semesta-wrapper-click">
                    <div class="semesta-container-click">
                        <div class="semesta-title-click">HIMPUNAN SEMESTA</div>

                        <div class="circle-row-click">
                            <div class="circle-item-click">
                                <div class="circle-label-click">A</div>

                                <div class="lingkaran-a-click">
                                    <div class="member">Ipul <div class="dot"></div></div>
                                    <div class="member">Hendra <div class="dot"></div></div>
                                    <div class="member">Ardi <div class="dot"></div></div>
                                    <div class="member">Ica <div class="dot"></div></div>
                                </div>
                            </div>

                            <div class="circle-item-click">
                                <div class="circle-label-click">B</div>
                                <div class="lingkaran-b-click"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <p>
                    Setelah diklik tombol hapus himpunan, maka himpunan terakhir dibuat akan
                    <strong>hilang</strong>. Jika himpunan memiliki anggota,
                    maka seluruh anggotanya juga akan ikut terhapus.
                </p>

                <div class="semesta-wrapper-click">
                    <div class="semesta-container-click">
                        <div class="semesta-title-click">HIMPUNAN SEMESTA</div>

                        <div class="circle-row-click">
                            <div class="circle-item-click">
                                <div class="circle-label-click">A</div>

                                <div class="lingkaran-a-click">
                                    <div class="member">Ipul <div class="dot"></div></div>
                                    <div class="member">Hendra <div class="dot"></div></div>
                                    <div class="member">Ardi <div class="dot"></div></div>
                                    <div class="member">Ica <div class="dot"></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ====================== LANGKAH 6 ====================== -->
        <div class="tutorial-step-page" id="tutorialStep6">
            <div class="step-card">
                <div class="step-label">Langkah 6: Reset Semua</div>

                <ul>
                    <li>Klik tombol <strong>“Reset Semua”</strong>.</li>
                </ul>

                <div class="demo-wrapper-reset">
                    <div class="toolbar-row-reset">
                        <button class="demo-btn btn-blue">Buat Semesta</button>
                        <button class="demo-btn btn-blue">Buat Himpunan</button>
                        <button class="demo-btn btn-red">Hapus Himpunan</button>
                        <button class="demo-btn btn-green">Periksa</button>

                        <div class="highlight-wrapper-reset">
                            <div class="tooltip-purple-reset">
                                Klik tombol ini untuk mengembalikan semua ke kondisi awal
                            </div>

                            <button class="demo-btn btn-gray glow-gray">Reset Semua</button>
                        </div>
                    </div>

                    <div class="input-row-reset">
                        <input type="text" class="demo-input-reset" placeholder="Nama anggota...">

                        <select class="demo-select-reset">
                            <option>Pilih Himpunan</option>
                        </select>

                        <button class="demo-btn btn-blue">Tambah Anggota</button>
                    </div>
                </div>

                <p>
                    Setelah tombol <strong>“Reset Semua”</strong> diklik, seluruh
                    lingkaran, anggota, dan hasil pemeriksaan akan
                    <strong>dikembalikan ke kondisi awal</strong>, sehingga pengguna
                    dapat memulai kembali dari awal.
                </p>
            </div>
        </div>

    </div>
</div>

    <!-- ====================== PAGINATION ====================== -->
    <div class="penyajian-pagination">
        <nav aria-label="Pagination Penyajian Himpunan">
            <ul class="pagination justify-content-center flex-wrap">

                <li class="page-item" id="penyajianPrevItem">
                    <button type="button" class="page-link" onclick="changePenyajianPage(currentPenyajianPage - 1)">
                        Sebelumnya
                    </button>
                </li>

                <li class="page-item active" id="penyajianPageItem1">
                    <button type="button" class="page-link" onclick="changePenyajianPage(1)">1</button>
                </li>

                <li class="page-item" id="penyajianPageItem2">
                    <button type="button" class="page-link" onclick="changePenyajianPage(2)">2</button>
                </li>

                <li class="page-item" id="penyajianPageItem3">
                    <button type="button" class="page-link" onclick="changePenyajianPage(3)">3</button>
                </li>

                <li class="page-item" id="penyajianPageItem4">
                    <button type="button" class="page-link" onclick="changePenyajianPage(4)">4</button>
                </li>

                <li class="page-item" id="penyajianNextItem">
                    <button type="button" class="page-link" onclick="nextPenyajianPage()">
                        Berikutnya
                    </button>
                </li>

            </ul>
        </nav>
    </div>

</div>

<script>
    let currentPenyajianPage = 1;
    const totalPenyajianPage = 4;

    function changePenyajianPage(page) {
        if (page < 1 || page > totalPenyajianPage) {
            return;
        }

        if (page > currentPenyajianPage) {
            var prevEl = document.getElementById('penyajianPage' + currentPenyajianPage);
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

        currentPenyajianPage = page;

        for (let i = 1; i <= totalPenyajianPage; i++) {
            const pageElement = document.getElementById("penyajianPage" + i);
            const pageItem = document.getElementById("penyajianPageItem" + i);

            if (pageElement) {
                pageElement.classList.toggle("active", i === page);
            }

            if (pageItem) {
                pageItem.classList.toggle("active", i === page);
            }
        }

        const prevItem = document.getElementById("penyajianPrevItem");
        const nextItem = document.getElementById("penyajianNextItem");

        if (prevItem) {
            prevItem.classList.toggle("disabled", page === 1);
        }

        if (nextItem) {
            nextItem.classList.toggle("disabled", false);
        }

        const target = document.querySelector(".content-gap");

        if (target) {
            target.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
        }
    }

   function nextPenyajianPage() {
    var curEl = document.getElementById(
        'penyajianPage' + currentPenyajianPage
    );

    if (curEl) {
        var exs = curEl.querySelectorAll('[data-exercise]');

        for (var i = 0; i < exs.length; i++) {
            if (exs[i].getAttribute('data-correct') !== 'true') {
                ProgressManager.showAlert(
                    'Selesaikan semua soal pada halaman ini dengan benar terlebih dahulu!'
                );
                return;
            }
        }
    }

    if (currentPenyajianPage < totalPenyajianPage) {
        ProgressManager.markPageDone(
            'materi_1',
            'penyajian',
            currentPenyajianPage
        );

        changePenyajianPage(currentPenyajianPage + 1);
    } else {
        ProgressManager.markSubPageDone(
            'materi_1',
            'penyajian'
        );

        window.location.href = "/bab_1/latihan1";
    }
}
function pilihJawaban(el, id) {
    document.querySelectorAll('.pilihan').forEach(function(item) {
        item.classList.remove('active');
    });

    el.classList.add('active');

    window.pilihanAktif = {
        id: id,
        teks: el.innerText,
        element: el
    };
}

function isiJawaban(target) {
    if (!window.pilihanAktif) {
        return;
    }

    const kotak = document.querySelectorAll('.kotak-jawaban');
    const mapIndex = {
        A: 0,
        B: 1,
        C: 2,
        S: 3
    };

    const box = kotak[mapIndex[target]];

    if (!box) {
        return;
    }

    if (window.jawaban[target]) {
        const teksLama = box.innerText;
        const idLama = window.jawaban[target];

        const opsiBaru = document.createElement("div");
        opsiBaru.className = "pilihan";
        opsiBaru.innerText = teksLama;
        opsiBaru.onclick = function () {
            pilihJawaban(this, idLama);
        };

        document.getElementById("daftarPilihan").appendChild(opsiBaru);
    }

    box.innerHTML = window.pilihanAktif.teks;
    window.jawaban[target] = window.pilihanAktif.id;

    if (window.pilihanAktif.element) {
        window.pilihanAktif.element.remove();
    }

    window.pilihanAktif = null;
}

function cekJawabanDeskripsi() {
    const kunci = {
        A: "opt1",
        B: "opt2",
        C: "opt3",
        S: "opt4"
    };

    const jawabanBenarTeks = {
        A: "anak-anak Andi dan Lina",
        B: "cucu-cucu Andi dan Lina",
        C: "kakek dan nenek",
        S: "semua anggota keluarga"
    };

    const kotak = document.querySelectorAll('.kotak-jawaban');
    const urutan = ["A", "B", "C", "S"];

    let benar = 0;
    let kosong = 0;

    urutan.forEach(function(kode, i) {
        if (!window.jawaban[kode]) {
            kosong++;
            kotak[i].className = "kotak-jawaban empty";
        } else if (window.jawaban[kode] === kunci[kode]) {
            benar++;
            kotak[i].className = "kotak-jawaban correct";
        } else {
            kotak[i].className = "kotak-jawaban wrong";
        }
    });

    const hasil = document.getElementById("hasil");
    hasil.className = "hasil-deskripsi";

    if (kosong > 0) {
        hasil.classList.add("hasil-kosong-final");

        hasil.innerHTML = `
            <strong>Masih ada jawaban yang belum diisi 😊</strong><br>
            Lengkapi dulu semua jawaban, lalu klik kembali tombol Cek Jawaban.
        `;
        return;
    }

    if (benar === 4) {
        window.percobaanDeskripsiSalah = 0;

        hasil.classList.add("hasil-benar-final");
        hasil.setAttribute('data-correct', 'true');

        hasil.innerHTML = `
            <strong>Hebat! Jawaban kamu benar semua 🎉</strong><br>
            Kamu sudah memahami cara menyajikan himpunan dengan cara deskripsi. Pertahankan semangat belajarmu!
        `;
        return;
    }

    window.percobaanDeskripsiSalah++;

    hasil.classList.add(benar === 0 ? "hasil-salah-final" : "hasil-sebagian-final");

    if (window.percobaanDeskripsiSalah < 3) {
        hasil.innerHTML = `
            <strong>Kamu benar ${benar} dari 4 soal.</strong><br>
            Bagus, kamu sudah mencoba! Yuk, perhatikan kembali anggota setiap himpunan agar jawabannya semakin tepat.
        `;
    } else {
        hasil.innerHTML = `
            <strong>Kamu benar ${benar} dari 4 soal.</strong><br>
            Tidak apa-apa, kamu sudah berusaha. Sekarang perhatikan jawaban yang benar berikut agar lebih paham.
            <br><br>
            <strong>Jawaban yang benar:</strong><br>
            Himpunan A = ${jawabanBenarTeks.A}<br>
            Himpunan B = ${jawabanBenarTeks.B}<br>
            Himpunan C = ${jawabanBenarTeks.C}<br>
            Himpunan S = ${jawabanBenarTeks.S}
        `;
    }
}

function ulangSoal() {
    document.querySelectorAll('.kotak-jawaban').forEach(function(box) {
        box.innerHTML = "";
        box.className = "kotak-jawaban";
    });

    document.getElementById("daftarPilihan").innerHTML = `
        <div class="pilihan" onclick="pilihJawaban(this,'opt1')">anak-anak Andi dan Lina</div>
        <div class="pilihan" onclick="pilihJawaban(this,'opt2')">cucu-cucu Andi dan Lina</div>
        <div class="pilihan" onclick="pilihJawaban(this,'opt3')">kakek dan nenek</div>
        <div class="pilihan" onclick="pilihJawaban(this,'opt4')">semua anggota keluarga</div>
    `;

    window.pilihanAktif = null;
    window.jawaban = {};

    const hasil = document.getElementById("hasil");
    hasil.innerHTML = "";
    hasil.className = "";
}

window.percobaanEnumerasiSalah = 0;

function cekJawabanEnumerasi() {
    const A = document.getElementById("A");
    const B = document.getElementById("B");
    const C = document.getElementById("C");
    const feedback = document.getElementById("feedback");

    let benar = 0;
    let kosong = 0;

    const valA = A.value;
    const valB = B.value;
    const valC = C.value;

    [A, B, C].forEach(function(el) {
        el.style.borderColor = "#C4B5FD";
        el.style.background = "#FFFFFF";
    });

    if (valA === "") kosong++;
    if (valB === "") kosong++;
    if (valC === "") kosong++;

    if (valA === "Hendra") {
        benar++;
        A.style.borderColor = "#16A34A";
        A.style.background = "#ECFDF5";
    } else if (valA !== "") {
        A.style.borderColor = "#DC2626";
        A.style.background = "#FEF2F2";
    }

    if (valB === "Alfi") {
        benar++;
        B.style.borderColor = "#16A34A";
        B.style.background = "#ECFDF5";
    } else if (valB !== "") {
        B.style.borderColor = "#DC2626";
        B.style.background = "#FEF2F2";
    }

    if (valC === "Andi") {
        benar++;
        C.style.borderColor = "#16A34A";
        C.style.background = "#ECFDF5";
    } else if (valC !== "") {
        C.style.borderColor = "#DC2626";
        C.style.background = "#FEF2F2";
    }

    feedback.style.display = "block";

    if (kosong > 0) {
        feedback.innerHTML = `
            <strong>Masih ada jawaban yang belum diisi 😊</strong><br>
            Lengkapi dulu semua pilihan jawaban, lalu klik kembali tombol Cek Jawaban.
        `;
        return;
    }

    if (benar === 3) {
        window.percobaanEnumerasiSalah = 0;

        feedback.setAttribute('data-correct', 'true');
        feedback.innerHTML = `
            <strong>Hebat! Jawaban kamu benar semua 🎉</strong><br>
            Kamu sudah memahami cara menyajikan himpunan dengan cara enumerasi. Pertahankan semangat belajarmu!
        `;
        return;
    }

    window.percobaanEnumerasiSalah++;

    if (window.percobaanEnumerasiSalah < 3) {
        feedback.innerHTML = `
            <strong>Kamu benar ${benar} dari 3 soal.</strong><br>
            Bagus, kamu sudah mencoba! Yuk, perhatikan kembali cerita keluarga dan anggota setiap himpunan agar jawabannya semakin tepat.
        `;
    } else {
        feedback.innerHTML = `
            <strong>Kamu benar ${benar} dari 3 soal.</strong><br>
            Tidak apa-apa, kamu sudah berusaha. Sekarang perhatikan jawaban yang benar berikut agar lebih paham.
            <br><br>
            <strong>Jawaban yang benar:</strong><br>
            Himpunan A = {Iful, Hendra, Ardi, Ica}<br>
            Himpunan B = {Lala, Nabil, Alfi, Bella, Rehan}<br>
            Himpunan C = {Andi, Lina}
        `;
    }
}

function ulangEnumerasi() {
    document.getElementById("A").value = "";
    document.getElementById("B").value = "";
    document.getElementById("C").value = "";

    const feedback = document.getElementById("feedback");
    feedback.style.display = "none";
    feedback.innerHTML = "";

    ["A", "B", "C"].forEach(function(id) {
        const el = document.getElementById(id);
        el.style.borderColor = "#C4B5FD";
        el.style.background = "#FFFFFF";
    });
}
   window.percobaanNotasiSalah = 0;

function notasiUnguCheck() {
    const A = document.getElementById("notasiUngu-A");
    const B = document.getElementById("notasiUngu-B");
    const C = document.getElementById("notasiUngu-C");
    const S = document.getElementById("notasiUngu-S");

    const feedback = document.getElementById("notasiUngu-feedback");

    const kunci = {
        A: "anak",
        B: "cucu",
        C: "orang tua",
        S: "anggota keluarga"
    };

    let benar = 0;
    let kosong = 0;

    [A, B, C, S].forEach(function(el) {
        el.style.borderColor = "#C4B5FD";
        el.style.background = "#FFFFFF";
    });

    if (A.value === "") kosong++;
    if (B.value === "") kosong++;
    if (C.value === "") kosong++;
    if (S.value === "") kosong++;

    if (A.value === kunci.A) {
        benar++;
        A.style.borderColor = "#16A34A";
        A.style.background = "#ECFDF5";
    } else if (A.value !== "") {
        A.style.borderColor = "#DC2626";
        A.style.background = "#FEF2F2";
    }

    if (B.value === kunci.B) {
        benar++;
        B.style.borderColor = "#16A34A";
        B.style.background = "#ECFDF5";
    } else if (B.value !== "") {
        B.style.borderColor = "#DC2626";
        B.style.background = "#FEF2F2";
    }

    if (C.value === kunci.C) {
        benar++;
        C.style.borderColor = "#16A34A";
        C.style.background = "#ECFDF5";
    } else if (C.value !== "") {
        C.style.borderColor = "#DC2626";
        C.style.background = "#FEF2F2";
    }

    if (S.value === kunci.S) {
        benar++;
        S.style.borderColor = "#16A34A";
        S.style.background = "#ECFDF5";
    } else if (S.value !== "") {
        S.style.borderColor = "#DC2626";
        S.style.background = "#FEF2F2";
    }

    feedback.style.display = "block";

    if (kosong > 0) {
        feedback.innerHTML = `
            <strong>Masih ada jawaban yang belum diisi 😊</strong><br>
            Lengkapi dulu semua pilihan jawaban, lalu klik kembali tombol Cek Jawaban.
        `;
        return;
    }

    if (benar === 4) {
        window.percobaanNotasiSalah = 0;

        feedback.setAttribute('data-correct', 'true');
        feedback.innerHTML = `
            <strong>Hebat! Jawaban kamu benar semua 🎉</strong><br>
            Kamu sudah memahami cara menyatakan himpunan dalam bentuk notasi pembentuk himpunan. Pertahankan semangat belajarmu!
        `;
        return;
    }

    window.percobaanNotasiSalah++;

    if (window.percobaanNotasiSalah < 3) {
        feedback.innerHTML = `
            <strong>Kamu benar ${benar} dari 4 soal.</strong><br>
            Bagus, kamu sudah mencoba! Yuk, perhatikan kembali hubungan anggota keluarga dan jenis anggota pada setiap himpunan.
        `;
    } else {
        feedback.innerHTML = `
            <strong>Kamu benar ${benar} dari 4 soal.</strong><br>
            Tidak apa-apa, kamu sudah berusaha. Sekarang perhatikan jawaban yang benar berikut agar lebih paham.
            <br><br>
            <strong>Jawaban yang benar:</strong><br>
            Himpunan A = { x | x adalah anak dari Andi dan Lina }<br>
            Himpunan B = { x | x adalah cucu dari Andi dan Lina }<br>
            Himpunan C = { x | x adalah orang tua (kakek atau nenek) }<br>
            Himpunan S = { x | x merupakan anggota keluarga dalam silsilah keluarga Andi }
        `;
    }
}

function notasiUnguReset() {
    const ids = ["notasiUngu-A", "notasiUngu-B", "notasiUngu-C", "notasiUngu-S"];

    ids.forEach(function(id) {
        const el = document.getElementById(id);
        el.value = "";
        el.style.borderColor = "#C4B5FD";
        el.style.background = "#FFFFFF";
    });

    const feedback = document.getElementById("notasiUngu-feedback");
    feedback.style.display = "none";
    feedback.innerHTML = "";
}


function changeTutorialStep(step) {
    const pages = document.querySelectorAll(".tutorial-step-page");
    const buttons = document.querySelectorAll(".tutorial-step-tab-button");

    pages.forEach(function(page) {
        page.classList.remove("active");
    });

    buttons.forEach(function(button) {
        button.classList.remove("active");
    });

    const activePage = document.getElementById("tutorialStep" + step);

    if (activePage) {
        activePage.classList.add("active");
    }

    if (buttons[step - 1]) {
        buttons[step - 1].classList.add("active");
    }
}

document.addEventListener("DOMContentLoaded", function () {
    changeTutorialStep(1);
});

function changeTutorialStep(step) {
    const pages = document.querySelectorAll(".tutorial-step-page");
    const buttons = document.querySelectorAll(".tutorial-step-tab-button");

    pages.forEach(function(page) {
        page.classList.remove("active");
    });

    buttons.forEach(function(button) {
        button.classList.remove("active");
    });

    const activePage = document.getElementById("tutorialStep" + step);

    if (activePage) {
        activePage.classList.add("active");
    }

    if (buttons[step - 1]) {
        buttons[step - 1].classList.add("active");
    }
}

document.addEventListener("DOMContentLoaded", function () {
    changeTutorialStep(1);
});


/* =========================================================
   TAMBAHAN: SIMPAN JAWABAN SISWA AGAR TIDAK HILANG
   Jawaban dan jumlah percobaan disimpan di browser.
========================================================= */

const kunciPenyimpananPenyajian =
    "jawaban_penyajian_himpunan_" + window.location.pathname;

const opsiDeskripsiPenyajian = {
    opt1: "anak-anak Andi dan Lina",
    opt2: "cucu-cucu Andi dan Lina",
    opt3: "kakek dan nenek",
    opt4: "semua anggota keluarga"
};

function ambilTutorialStepAktif() {
    const tombol = Array.from(
        document.querySelectorAll(".tutorial-step-tab-button")
    );

    const index = tombol.findIndex(function (item) {
        return item.classList.contains("active");
    });

    return index >= 0 ? index + 1 : 1;
}

function buatUlangPilihanDeskripsi() {
    const daftarPilihan = document.getElementById("daftarPilihan");

    if (!daftarPilihan) return;

    daftarPilihan.innerHTML = "";

    const idTerpakai = Object.values(window.jawaban || {});

    Object.keys(opsiDeskripsiPenyajian).forEach(function (id) {
        if (idTerpakai.includes(id)) return;

        const pilihan = document.createElement("div");
        pilihan.className = "pilihan";
        pilihan.innerText = opsiDeskripsiPenyajian[id];
        pilihan.setAttribute("onclick", "pilihJawaban(this,'" + id + "')");

        daftarPilihan.appendChild(pilihan);
    });
}

function simpanJawabanPenyajian() {
    try {
        const data = {
            halamanAktif: currentPenyajianPage,
            tutorialStepAktif: ambilTutorialStepAktif(),

            percobaanDeskripsi:
                Number(window.percobaanDeskripsiSalah) || 0,

            percobaanEnumerasi:
                Number(window.percobaanEnumerasiSalah) || 0,

            percobaanNotasi:
                Number(window.percobaanNotasiSalah) || 0,

            jawabanDeskripsi: window.jawaban || {},

            kotakDeskripsi: Array.from(
                document.querySelectorAll(".kotak-jawaban")
            ).map(function (kotak) {
                return {
                    innerHTML: kotak.innerHTML,
                    className: kotak.className
                };
            }),

            kontrol: {},

            tampilan: {}
        };

        document
            .querySelectorAll(
                ".content-gap input, .content-gap select, .content-gap textarea"
            )
            .forEach(function (elemen) {
                if (!elemen.id) return;

                data.kontrol[elemen.id] = {
                    value: elemen.value,
                    checked: elemen.checked,
                    className: elemen.className,
                    style: elemen.getAttribute("style") || ""
                };
            });

        [
            "hasil",
            "feedback",
            "notasiUngu-feedback"
        ].forEach(function (id) {
            const elemen = document.getElementById(id);

            if (!elemen) return;

            data.tampilan[id] = {
                innerHTML: elemen.innerHTML,
                className: elemen.className,
                style: elemen.getAttribute("style") || ""
            };
        });

        localStorage.setItem(
            kunciPenyimpananPenyajian,
            JSON.stringify(data)
        );
    } catch (error) {
        console.warn("Jawaban belum dapat disimpan:", error);
    }
}

function pulihkanJawabanPenyajian() {
    try {
        const tersimpan =
            localStorage.getItem(kunciPenyimpananPenyajian);

        if (!tersimpan) return;

        const data = JSON.parse(tersimpan);

        window.percobaanDeskripsiSalah =
            Number(data.percobaanDeskripsi) || 0;

        window.percobaanEnumerasiSalah =
            Number(data.percobaanEnumerasi) || 0;

        window.percobaanNotasiSalah =
            Number(data.percobaanNotasi) || 0;

        window.jawaban = data.jawabanDeskripsi || {};
        window.pilihanAktif = null;

        const kotakDeskripsi =
            document.querySelectorAll(".kotak-jawaban");

        (data.kotakDeskripsi || []).forEach(function (kondisi, index) {
            const kotak = kotakDeskripsi[index];

            if (!kotak) return;

            kotak.innerHTML = kondisi.innerHTML || "";
            kotak.className =
                kondisi.className || "kotak-jawaban";
        });

        buatUlangPilihanDeskripsi();

        Object.keys(data.kontrol || {}).forEach(function (id) {
            const elemen = document.getElementById(id);
            const kondisi = data.kontrol[id];

            if (!elemen) return;

            elemen.value = kondisi.value ?? "";

            if (
                elemen.type === "checkbox" ||
                elemen.type === "radio"
            ) {
                elemen.checked = Boolean(kondisi.checked);
            }

            if (typeof kondisi.className === "string") {
                elemen.className = kondisi.className;
            }

            if (kondisi.style) {
                elemen.setAttribute("style", kondisi.style);
            } else {
                elemen.removeAttribute("style");
            }
        });

        Object.keys(data.tampilan || {}).forEach(function (id) {
            const elemen = document.getElementById(id);
            const kondisi = data.tampilan[id];

            if (!elemen) return;

            elemen.innerHTML = kondisi.innerHTML || "";

            if (typeof kondisi.className === "string") {
                elemen.className = kondisi.className;
            }

            if (kondisi.style) {
                elemen.setAttribute("style", kondisi.style);
            } else {
                elemen.removeAttribute("style");
            }
        });

        if (
            Number.isInteger(data.halamanAktif) &&
            data.halamanAktif >= 1 &&
            data.halamanAktif <= totalPenyajianPage
        ) {
            changePenyajianPage(data.halamanAktif);
        }

        if (
            Number.isInteger(data.tutorialStepAktif) &&
            data.tutorialStepAktif >= 1 &&
            data.tutorialStepAktif <= 6
        ) {
            changeTutorialStep(data.tutorialStepAktif);
        }
    } catch (error) {
        console.warn(
            "Jawaban tersimpan belum dapat dipulihkan:",
            error
        );
    }
}

document.addEventListener("DOMContentLoaded", function () {
    pulihkanJawabanPenyajian();

    document
        .querySelectorAll(
            ".content-gap input, .content-gap select, .content-gap textarea"
        )
        .forEach(function (elemen) {
            elemen.addEventListener(
                "input",
                simpanJawabanPenyajian
            );

            elemen.addEventListener(
                "change",
                simpanJawabanPenyajian
            );
        });
});

document.addEventListener("click", function () {
    setTimeout(simpanJawabanPenyajian, 0);
});

window.addEventListener(
    "pagehide",
    simpanJawabanPenyajian
);

window.addEventListener(
    "beforeunload",
    simpanJawabanPenyajian
);

</script>

@endsection