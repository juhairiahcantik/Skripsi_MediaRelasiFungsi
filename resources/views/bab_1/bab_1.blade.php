@extends('layouts.main')

@section('container')

<style>
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

    .card {
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        border-radius: 12px;
        overflow: hidden;
    }

    .card-header {
        background-color:  #a55cc4 !important;
        font-weight: bold;
        font-size: 1.3rem;
        color: white !important;
    }

    .tujuan-text {
        line-height: 1.8;
    }

    .materi-page {
        display: none;
        width: 100%;
        max-width: 100%;
        box-sizing: border-box;
        overflow-x: hidden;
    }

    .materi-page.active {
        display: block;
    }

    .materi-page > * {
        max-width: 100%;
        box-sizing: border-box;
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
        padding-left: 20px;
        padding-right: 10px;
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
    }

    .set-title {
        font-size: 1.15rem;
        font-weight: 700;
        margin-bottom: 10px;
        color: #222;
    }

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

    .btn-actions {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-top: 20px !important;
        flex-wrap: wrap;
    }

    .btn-cek,
    .btn-ulang {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 140px;
        height: 48px;
        box-sizing: border-box;
        padding: 0 16px;
        margin: 0 !important;
        line-height: 1;
        font-size: 1rem;
        font-weight: 600;
        border-radius: 12px;
        position: static !important;
        appearance: none;
        -webkit-appearance: none;
        vertical-align: middle;
    }

    .btn-cek {
        background: linear-gradient(135deg, #8e44ad, #a569bd);
        color: #fff;
        border: 2px solid transparent;
    }

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

    .pemahaman-item {
        background: #fff;
        border: 1px solid #f1e2bd;
        border-radius: 18px;
        padding: 20px 22px;
        margin: 18px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.04);
    }

    .pemahaman-item h4 {
        margin: 0 0 10px 0;
        font-size: 1.35rem;
        font-weight: 700;
        color: #c9832d;
    }

    .pemahaman-item p {
        margin-bottom: 10px;
        font-size: 1rem;
        line-height: 1.9;
        color: #333;
    }

    .pengertian-soft {
        background: #f3e7c6;
        border: 2px dashed #e0b96b;
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

    /* ====================== CONTOH HIMPUNAN PREMIUM ====================== */

.contoh-grid-2 {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 24px;
    margin-top: 28px;
    align-items: start;
}

.contoh-card {
    background: linear-gradient(180deg, #ffffff 0%, #fcf9ff 100%);
    border-radius: 24px;
    border: 1px solid #eadcf6;
    box-shadow: 0 14px 30px rgba(91, 44, 111, 0.10);
    overflow: hidden;
    transition: all 0.25s ease;
}

.contoh-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 18px 36px rgba(91, 44, 111, 0.14);
}

.contoh-header {
    background: linear-gradient(135deg, #8e44ad, #b57edc);
    color: #fff;
    padding: 16px 20px;
    font-weight: 700;
    font-size: 1.3rem;
    letter-spacing: 0.2px;
}

.contoh-body {
    padding: 22px 20px 20px 20px;
    line-height: 1.9;
    color: #333;
}

.contoh-body p {
    margin-bottom: 14px;
}

.contoh-set {
    background: linear-gradient(135deg, #f4ecff, #eee2ff);
    border: 1px solid #d8bdf0;
    border-left: 5px solid #8e44ad;
    border-radius: 16px;
    padding: 14px 16px;
    margin: 14px 0 18px 0;
    font-weight: 700;
    color: #5b2c6f;
    font-size: 1.05rem;
    box-shadow: inset 0 1px 0 rgba(255,255,255,0.6);
}

.opsi-checkbox {
    display: grid;
    gap: 12px;
    margin-top: 10px;
    margin-bottom: 18px;
}

.opsi-checkbox label {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    background: #fbf8ff;
    border: 1px solid #e8dbf5;
    border-radius: 16px;
    padding: 14px 16px;
    cursor: pointer;
    transition: all 0.2s ease;
    line-height: 1.7;
}

.opsi-checkbox label:hover {
    background: #f5edff;
    border-color: #cfb0eb;
    box-shadow: 0 6px 14px rgba(142, 68, 173, 0.08);
}

.opsi-checkbox input[type="checkbox"] {
    margin-top: 3px;
    transform: scale(1.15);
    accent-color: #8e44ad;
    flex-shrink: 0;
}

.btn-cek {
    background: linear-gradient(135deg, #8e44ad, #a85dcb);
    color: #fff;
    border: none;
    border-radius: 14px;
    padding: 12px 22px;
    font-weight: 700;
    font-size: 1rem;
    min-width: 140px;
    box-shadow: 0 10px 18px rgba(142, 68, 173, 0.18);
    transition: all 0.2s ease;
    cursor: pointer;
}

.btn-cek:hover {
    transform: translateY(-2px);
    box-shadow: 0 14px 22px rgba(142, 68, 173, 0.24);
}

.btn-cek:active {
    transform: translateY(0);
}

.hasil-box {
    display: none;
    margin-top: 16px;
    padding: 16px 18px;
    border-radius: 16px;
    font-weight: 600;
    line-height: 1.8;
    border: 1px solid transparent;
    box-shadow: 0 8px 18px rgba(0,0,0,0.05);
}

.hasil-benar {
    background: linear-gradient(135deg, #e8f7ef, #d8f0e3);
    color: #145c32;
    border-color: #b9dfc8;
}

.hasil-salah {
    background: linear-gradient(135deg, #fdeaea, #f9dddd);
    color: #8a1f2d;
    border-color: #f1c4ca;
}

.hasil-peringatan {
    background: linear-gradient(135deg, #fff8dd, #fff1bf);
    color: #7a5a00;
    border-color: #f2de91;
}

.kesimpulan {
    margin-top: 20px;
    background: linear-gradient(135deg, #f6efff, #efe5ff);
    border: 1px solid #dcc5f1;
    border-left: 5px solid #8e44ad;
    border-radius: 18px;
    padding: 16px 18px;
    line-height: 1.85;
    color: #4b2673;
    box-shadow: 0 8px 18px rgba(91, 44, 111, 0.06);
}

@media (max-width: 992px) {
    .contoh-grid-2 {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .contoh-header {
        font-size: 1.1rem;
        padding: 14px 16px;
    }

    .contoh-body {
        padding: 16px;
    }

    .contoh-set {
        font-size: 1rem;
        padding: 12px 14px;
    }

    .opsi-checkbox label {
        padding: 12px 14px;
        border-radius: 14px;
    }

    .btn-cek {
        width: 100%;
        min-width: unset;
    }

    .hasil-box,
    .kesimpulan {
        padding: 14px 15px;
    }
}
   /* ====================== AYO TENTUKAN - LAYOUT SAMPING ====================== */

.quiz-box-unik {
    background: linear-gradient(180deg, #ffffff 0%, #fcfbff 100%);
    border: 1px solid #ebe2f5;
    border-radius: 26px;
    box-shadow: 0 14px 32px rgba(91, 44, 111, 0.08);
    padding: 22px;
    margin-top: 26px;
    overflow: hidden;
}

.quiz-header-unik {
    background: linear-gradient(135deg, #8e44ad, #b57edc);
    color: #fff;
    padding: 16px 22px;
    border-radius: 20px;
    font-weight: 700;
    font-size: 1.35rem;
    text-align: center;
    margin-bottom: 22px;
    box-shadow: 0 10px 20px rgba(142, 68, 173, 0.16);
}

.quiz-layout-side {
    display: grid;
    grid-template-columns: 1.5fr 0.9fr;
    gap: 22px;
    align-items: stretch;
}

.quiz-left-panel {
    background: #ffffff;
}

.quiz-right-panel {
    background: linear-gradient(180deg, #faf7ff 0%, #f6f0ff 100%);
    border: 1px solid #e6d7f3;
    border-radius: 20px;
    padding: 18px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    box-shadow: inset 0 1px 0 rgba(255,255,255,0.7);
}

.quiz-intro-text {
    font-size: 1.02rem;
    color: #333;
    margin-bottom: 12px;
}

.quiz-case-card {
    background: linear-gradient(135deg, #f8f1ff, #f4ecff);
    border: 1px solid #e2d1f3;
    border-left: 5px solid #8e44ad;
    border-radius: 18px;
    padding: 16px 18px;
    margin-bottom: 18px;
}

.quiz-case-label {
    display: inline-block;
    background: #8e44ad;
    color: #fff;
    font-size: 0.9rem;
    font-weight: 700;
    padding: 6px 12px;
    border-radius: 999px;
    margin-bottom: 10px;
}

.quiz-case-card p {
    margin: 0;
    color: #4b2673;
    line-height: 1.85;
    font-size: 1.04rem;
}

.quiz-question {
    font-size: 1.06rem;
    color: #333;
    line-height: 1.85;
    margin-bottom: 10px;
}

.quiz-instruction {
    font-weight: 600;
    color: #5b2c6f;
    margin-bottom: 0;
}

.quiz-side-title {
    font-size: 1rem;
    font-weight: 700;
    color: #6a2c70;
    margin-bottom: 14px;
    text-align: center;
}

.quiz-opsi-wrap {
    display: flex;
    flex-direction: column;
    gap: 14px;
    margin-top: 0;
    margin-bottom: 0;
}

.quiz-opsi-btn {
    border: none;
    border-radius: 16px;
    padding: 14px 18px;
    background: linear-gradient(135deg, #8e44ad, #b57edc);
    color: white;
    font-weight: 700;
    font-size: 1rem;
    width: 100%;
    box-shadow: 0 10px 18px rgba(142, 68, 173, 0.16);
    transition: all 0.22s ease;
    cursor: pointer;
}

.quiz-opsi-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 14px 22px rgba(142, 68, 173, 0.22);
}

.quiz-opsi-btn:active {
    transform: translateY(0);
}

#feedbackUnik {
    display: none;
    margin-top: 18px;
    padding: 18px 20px;
    border-radius: 18px;
    line-height: 1.9;
    font-weight: 600;
    border-left: 5px solid transparent;
    box-shadow: 0 10px 20px rgba(0,0,0,0.05);
}

@media (max-width: 992px) {
    .quiz-layout-side {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .quiz-box-unik {
        padding: 16px;
        border-radius: 20px;
    }

    .quiz-header-unik {
        font-size: 1.1rem;
        padding: 14px 16px;
        border-radius: 16px;
    }

    .quiz-case-card {
        padding: 14px;
        border-radius: 14px;
    }

    .quiz-case-card p,
    .quiz-question,
    .quiz-intro-text {
        font-size: 0.98rem;
    }

    .quiz-right-panel {
        padding: 14px;
        border-radius: 16px;
    }

    #feedbackUnik {
        padding: 15px 16px;
        border-radius: 14px;
    }
}
   /* ====================== AYO TENTUKAN HIMPUNAN SEMESTA - RAPI RESPONSIVE FINAL ====================== */

.semesta-card-full {
    background: #ffffff;
    border: 1px solid #eadcf6;
    border-radius: 26px;
    padding: 26px;
    margin-top: 26px;
    box-shadow: 0 14px 32px rgba(91, 44, 111, 0.08);
    overflow: hidden;
}

.semesta-title-full {
    background: linear-gradient(135deg, #8e44ad, #b57edc);
    color: #ffffff;
    text-align: center;
    padding: 16px 22px;
    border-radius: 20px;
    font-weight: 800;
    font-size: 1.25rem;
    margin-bottom: 24px;
    box-shadow: 0 10px 20px rgba(142, 68, 173, 0.16);
}

.semesta-desc-full {
    line-height: 1.85;
    color: #333;
    margin-bottom: 16px;
}

.semesta-petunjuk-full {
    background: #fbf7ff;
    border: 2px dashed #cfa7f3;
    border-radius: 20px;
    padding: 18px 20px;
    line-height: 1.85;
    margin-bottom: 20px;
    color: #4b2673;
}

.semesta-petunjuk-full p {
    color: #5b2c6f !important;
}

.semesta-petunjuk-full div {
    color: #5b2c6f !important;
}

.semesta-wrap-full {
    width: 100%;
    display: grid;
    grid-template-columns: auto 1fr auto;
    align-items: center;
    gap: 12px;
    margin-top: 14px;
}

.kurung-kiri,
.kurung-kanan {
    font-size: 2rem;
    font-weight: 800;
    color: #5b2c6f;
    display: flex;
    align-items: center;
    justify-content: center;
}

.semesta-grid-full {
    width: 100%;
    display: grid;
    grid-template-columns: repeat(7, minmax(90px, 1fr));
    gap: 12px;
}

.semesta-grid-full input {
    width: 100%;
    min-height: 50px;
    padding: 10px 12px;
    border: 2px solid #ddd;
    border-radius: 14px;
    text-align: center;
    outline: none;
    font-weight: 700;
    color: #4b2673;
    background: #ffffff;
    box-sizing: border-box;
    transition: all 0.2s ease;
}

.semesta-grid-full input:focus {
    border-color: #9b59b6;
    box-shadow: 0 0 0 4px rgba(155, 89, 182, 0.12);
}

.semesta-grid-full input::placeholder {
    color: #777;
    font-weight: 600;
}

/* TOMBOL DITENGAH */
.semesta-btns-full {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 14px;
    flex-wrap: wrap;
    margin-top: 26px;
}

.btn-semesta-periksa-full,
.btn-semesta-ulang-full {
    min-width: 145px;
    height: 50px;
    border-radius: 14px;
    padding: 0 22px;
    font-weight: 800;
    font-size: 1rem;
    cursor: pointer;
    box-sizing: border-box;
    transition: all 0.22s ease;
}

.btn-semesta-periksa-full {
    background: linear-gradient(135deg, #8e44ad, #b57edc);
    color: #ffffff;
    border: none;
    box-shadow: 0 10px 18px rgba(142, 68, 173, 0.18);
}

.btn-semesta-periksa-full:hover {
    transform: translateY(-2px);
    box-shadow: 0 14px 22px rgba(142, 68, 173, 0.24);
}

.btn-semesta-ulang-full {
    background: #ffffff;
    color: #8e44ad;
    border: 2px solid #8e44ad;
}

.btn-semesta-ulang-full:hover {
    background: #f7efff;
    transform: translateY(-2px);
}

.semesta-feedback-full {
    display: none;
    margin-top: 18px;
    padding: 16px 18px;
    border-radius: 16px;
    line-height: 1.8;
    font-weight: 700;
    box-sizing: border-box;
}

/* RESPONSIVE TABLET */
@media (max-width: 1200px) {
    .semesta-grid-full {
        grid-template-columns: repeat(5, minmax(90px, 1fr));
    }
}

@media (max-width: 992px) {
    .semesta-grid-full {
        grid-template-columns: repeat(4, minmax(90px, 1fr));
    }
}

/* RESPONSIVE HP */
@media (max-width: 768px) {
    .semesta-card-full {
        padding: 18px;
        border-radius: 20px;
    }

    .semesta-title-full {
        font-size: 1.05rem;
        padding: 14px 16px;
        border-radius: 16px;
    }

    .semesta-petunjuk-full {
        padding: 15px;
        border-radius: 16px;
    }

    .semesta-wrap-full {
        grid-template-columns: 1fr;
        gap: 10px;
    }

    .kurung-kiri,
    .kurung-kanan {
        justify-content: flex-start;
        font-size: 1.6rem;
    }

    .semesta-grid-full {
        grid-template-columns: repeat(3, minmax(80px, 1fr));
        gap: 10px;
    }

    .semesta-grid-full input {
        min-height: 46px;
        font-size: 0.95rem;
    }

    .semesta-btns-full {
        justify-content: center;
        gap: 10px;
    }

    .btn-semesta-periksa-full,
    .btn-semesta-ulang-full {
        min-width: 130px;
        height: 48px;
    }
}

/* HP KECIL */
@media (max-width: 480px) {
    .semesta-grid-full {
        grid-template-columns: repeat(2, minmax(80px, 1fr));
    }

    .semesta-btns-full {
        flex-direction: column;
        align-items: stretch;
    }

    .btn-semesta-periksa-full,
    .btn-semesta-ulang-full {
        width: 100%;
    }
}

    .kard-premium-wrap {
        background: #ffffff;
        border-radius: 20px;
        box-shadow: 0 8px 22px rgba(0,0,0,0.08);
        border: 1px solid #eee;
        padding: 22px;
        margin-top: 24px;
    }

    .kard-premium-title {
        background: linear-gradient(135deg, #8e44ad, #b57edc);
        color: white;
        text-align: center;
        padding: 13px 16px;
        border-radius: 14px;
        font-weight: 700;
        font-size: 1.15rem;
        margin-bottom: 16px;
    }

    .kard-premium-desc {
        line-height: 1.8;
        color: #333;
    }

    .kard-grid-premium {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 18px;
        margin-top: 18px;
    }

    .kard-card-item {
        background: #faf7ff;
        border: 1px solid #eadcf6;
        border-radius: 18px;
        padding: 18px;
        position: relative;
    }

    .kard-no {
        width: 34px;
        height: 34px;
        border-radius: 50%;
        background: #8e44ad;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        margin-bottom: 12px;
    }

    .kard-content h4 {
        font-size: 1rem;
        font-weight: 700;
        color: #5b2c6f;
    }

    .kard-input-line {
        display: flex;
        align-items: center;
        gap: 8px;
        flex-wrap: wrap;
        margin-top: 12px;
        font-weight: 700;
    }

    .kard-input-line input {
        width: 80px;
        padding: 9px;
        border-radius: 12px;
        border: 2px solid #ddd;
        text-align: center;
        outline: none;
        font-weight: 700;
    }

    .kard-benarnya {
        border-color: #198754 !important;
        background: #d1e7dd !important;
        color: #0f5132;
    }

    .kard-salahnya {
        border-color: #dc3545 !important;
        background: #f8d7da !important;
        color: #842029;
    }

    .kard-kosongnya {
        border-color: #ffc107 !important;
        background: #fff3cd !important;
        color: #664d03;
    }

    .kard-ikon {
        font-size: 1.2rem;
    }

    .kard-action-bar {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
        margin-top: 18px;
    }

    .kard-btn-check,
    .kard-btn-reset {
        border-radius: 12px;
        padding: 11px 18px;
        font-weight: 700;
    }

    .kard-btn-check {
        background: linear-gradient(135deg, #8e44ad, #b57edc);
        color: #fff;
        border: none;
    }

    .kard-btn-reset {
        background: #fff;
        color: #8e44ad;
        border: 2px solid #8e44ad;
    }

    .kard-feedback-box {
        margin-top: 18px;
        padding: 14px 16px;
        border-radius: 14px;
        display: none;
        line-height: 1.8;
        font-weight: 600;
    }

    .materi-pagination {
        width: 100%;
        margin-top: 30px;
        margin-bottom: 35px;
        clear: both;
    }

    .materi-pagination .pagination {
        gap: 5px;
    }

    .materi-pagination .page-link {
        color: #6A2C70;
        border: 1px solid #E3C7F3;
        border-radius: 12px !important;
        font-weight: 600;
        background-color: #ffffff;
        box-shadow: 0 2px 6px rgba(0,0,0,0.08);
    }

    .materi-pagination .page-link:hover {
        background-color: #F3E5FF;
        color: #4B2673;
    }

    .materi-pagination .page-item.active .page-link {
        background-color: #CDA4DE;
        border-color: #CDA4DE;
        color: #ffffff;
    }

    .materi-pagination .page-item.disabled .page-link {
        color: #aaa;
        background-color: #f6f6f6;
        border-color: #eee;
        box-shadow: none;
        pointer-events: none;
    }

    @media (max-width: 992px) {
        .contoh-grid-2,
        .kard-grid-premium {
            grid-template-columns: 1fr !important;
        }
    }

    @media (max-width: 768px) {
        .card-body {
            padding: 16px !important;
        }

        .solution-card,
        .pemahaman-card,
        .notasi-card,
        .quiz-box-unik,
        .semesta-card-full,
        .kard-premium-wrap {
            padding-left: 16px !important;
            padding-right: 16px !important;
        }

        .solution-text input {
            width: 88px;
        }

        .materi-pagination .page-link {
            font-size: 0.85rem;
            padding: 7px 10px;
        }

        .set-content {
            padding-left: 0;
        }
    }
    /* ====================== STYLE PENGERTIAN & NOTASI SESUAI CONTOH ====================== */

.pemahaman-card {
    width: 100%;
    background: #ffffff;
    border-radius: 22px;
    overflow: hidden;
    margin-top: 24px;
    margin-bottom: 24px;
    box-shadow: 0 10px 25px rgba(75, 38, 115, 0.08);
    border: 1px solid #eee6f7;
}

.pemahaman-header {
    background: linear-gradient(135deg, #8e44ad, #c7a1df);
    color: #ffffff;
    padding: 18px 24px;
    font-size: 1.15rem;
    font-weight: 700;
    line-height: 1.6;
}

.pemahaman-item {
    background: #ffffff;
    border: none;
    box-shadow: none;
    margin: 0;
    padding: 28px 26px;
}

/* ====================== PENGERTIAN & NOTASI PREMIUM CLEAN FINAL ====================== */

/* HAPUS GARIS DEKORASI TAMBAHAN */
.pengertian-box-custom::after,
.notasi-box-custom::after {
    display: none !important;
    content: none !important;
}

/* HAPUS BULATAN / GLOW BERLEBIHAN */
.pengertian-box-custom::before,
.notasi-box-custom::before {
    display: none !important;
    content: none !important;
}

/* KOTAK PENGERTIAN */
.pengertian-box-custom {
    position: relative;
    background: #ffffff;
    border: 3px dashed #A855F7;
    border-radius: 24px;
    padding: 26px 30px;
    margin-bottom: 24px;
    overflow: hidden;
    box-shadow: 0 8px 20px rgba(168, 85, 247, 0.10) !important;
    transition: all 0.25s ease;
}

.pengertian-box-custom:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 24px rgba(168, 85, 247, 0.14) !important;
}

/* JUDUL PENGERTIAN DIBUAT SEPERTI LABEL NOTASI */
.pengertian-box-custom h4 {
    display: inline-block;
    background: linear-gradient(135deg, #8E44AD, #B57EDC);
    color: #ffffff;
    font-weight: 800;
    font-size: 1.05rem;
    padding: 10px 22px;
    border-radius: 16px;
    margin: 0 0 18px 0;
    box-shadow: 0 6px 14px rgba(142, 68, 173, 0.16) !important;
}

/* HAPUS IKON BINTANG DI JUDUL PENGERTIAN */
.pengertian-box-custom h4::before {
    display: none !important;
    content: none !important;
}

.pengertian-box-custom p {
    font-size: 1rem;
    line-height: 1.9;
    color: #4B2673;
    margin-bottom: 14px;
}

.pengertian-box-custom p strong {
    color: #6B21A8;
    font-weight: 800;
}

/* KOTAK NOTASI */
.notasi-box-custom {
    position: relative;
    background: #ffffff;
    border: 3px solid #A855F7;
    border-radius: 24px;
    padding: 30px 30px 26px 30px;
    overflow: hidden;
    box-shadow: 0 8px 20px rgba(168, 85, 247, 0.10) !important;
    transition: all 0.25s ease;
}

.notasi-box-custom:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 24px rgba(168, 85, 247, 0.14) !important;
}

/* LABEL NOTASI */
.notasi-label-custom {
    display: inline-block;
    background: linear-gradient(135deg, #8E44AD, #B57EDC);
    color: #ffffff;
    font-weight: 800;
    font-size: 1.05rem;
    padding: 10px 22px;
    border-radius: 16px;
    margin-bottom: 18px;
    box-shadow: 0 6px 14px rgba(142, 68, 173, 0.16) !important;
}

.notasi-box-custom p {
    font-size: 1rem;
    line-height: 1.9;
    color: #4B2673;
    margin-bottom: 16px;
}

.notasi-list-custom {
    margin: 0;
    padding-left: 0;
    list-style: none;
    display: grid;
    gap: 12px;
}

.notasi-list-custom li {
    background: #ffffff;
    border: 1px solid #E9D5FF;
    border-left: 4px solid #A855F7;
    border-radius: 16px;
    padding: 14px 18px;
    color: #4B2673;
    line-height: 1.8;
    box-shadow: 0 4px 12px rgba(168, 85, 247, 0.06);
}

.notasi-list-custom li strong {
    color: #6B21A8;
    font-weight: 800;
}

.notasi-list-custom li span {
    display: block;
    margin-top: 5px;
    color: #4B2673;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .pengertian-box-custom,
    .notasi-box-custom {
        padding: 20px 18px;
        border-radius: 20px;
    }

    .pengertian-box-custom h4 {
        font-size: 0.95rem;
        padding: 9px 18px;
        border-radius: 14px;
    }

    .notasi-label-custom {
        font-size: 0.95rem;
        padding: 9px 18px;
        border-radius: 14px;
    }

    .notasi-list-custom li {
        padding: 12px 14px;
    }
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .pemahaman-header {
        font-size: 1rem;
        padding: 15px 18px;
    }

    .pemahaman-item {
        padding: 18px 16px;
    }

    .pengertian-box-custom,
    .notasi-box-custom {
        padding: 18px 16px;
        border-radius: 18px;
    }

    .pengertian-box-custom h4 {
        font-size: 1.15rem;
    }

    .notasi-label-custom {
        font-size: 0.95rem;
        padding: 8px 16px;
        border-radius: 14px;
    }
}
/* ====================== HIMPUNAN SEMESTA PREMIUM CLEAN ====================== */

.semesta-info-box {
    position: relative;
    background: #ffffff;
    border: 3px dashed #A855F7;
    border-radius: 24px;
    padding: 28px 32px;
    margin-top: 24px;
    margin-bottom: 24px;
    box-sizing: border-box;
    overflow: hidden;
    box-shadow:
        0 14px 28px rgba(168, 85, 247, 0.16),
        0 6px 14px rgba(75, 38, 115, 0.08);
    transition: all 0.25s ease;
}

.semesta-info-box:hover {
    transform: translateY(-3px);
    box-shadow:
        0 20px 38px rgba(168, 85, 247, 0.22),
        0 8px 18px rgba(75, 38, 115, 0.10);
}

.semesta-info-title {
    display: inline-block;
    background: linear-gradient(135deg, #8E44AD, #B57EDC);
    color: #ffffff;
    font-weight: 800;
    font-size: 1.05rem;
    padding: 10px 22px;
    border-radius: 16px;
    margin: 0 0 18px 0;
    box-shadow: 0 6px 14px rgba(142, 68, 173, 0.16);
}

.semesta-info-text {
    font-size: 1rem;
    line-height: 1.9;
    color: #4B2673;
    margin-bottom: 14px;
    text-align: justify;
}

.semesta-info-text:last-child {
    margin-bottom: 0;
}

.semesta-info-text strong {
    color: #6B21A8;
    font-weight: 800;
}

@media (max-width: 768px) {
    .semesta-info-box {
        padding: 20px 18px;
        border-radius: 20px;
    }

    .semesta-info-title {
        font-size: 0.95rem;
        padding: 9px 18px;
        border-radius: 14px;
    }

    .semesta-info-text {
        font-size: 0.95rem;
        line-height: 1.85;
    }
}
/* ====================== KARDINALITAS HIMPUNAN PREMIUM CLEAN ====================== */

.kardinalitas-info-box {
    position: relative;
    background: #ffffff;
    border: 3px dashed #A855F7;
    border-radius: 24px;
    padding: 28px 32px;
    margin-top: 24px;
    margin-bottom: 24px;
    box-sizing: border-box;
    overflow: hidden;
    box-shadow:
        0 14px 28px rgba(168, 85, 247, 0.16),
        0 6px 14px rgba(75, 38, 115, 0.08);
    transition: all 0.25s ease;
}

.kardinalitas-info-box:hover {
    transform: translateY(-3px);
    box-shadow:
        0 20px 38px rgba(168, 85, 247, 0.22),
        0 8px 18px rgba(75, 38, 115, 0.10);
}

.kardinalitas-info-title {
    display: inline-block;
    background: linear-gradient(135deg, #8E44AD, #B57EDC);
    color: #ffffff;
    font-weight: 800;
    font-size: 1.05rem;
    padding: 10px 22px;
    border-radius: 16px;
    margin: 0 0 18px 0;
    box-shadow: 0 6px 14px rgba(142, 68, 173, 0.16);
}

.kardinalitas-info-text {
    font-size: 1rem;
    line-height: 1.9;
    color: #4B2673;
    margin-bottom: 14px;
    text-align: justify;
}

.kardinalitas-info-text:last-child {
    margin-bottom: 0;
}

.kardinalitas-info-text strong {
    color: #6B21A8;
    font-weight: 800;
}

@media (max-width: 768px) {
    .kardinalitas-info-box {
        padding: 20px 18px;
        border-radius: 20px;
    }

    .kardinalitas-info-title {
        font-size: 0.95rem;
        padding: 9px 18px;
        border-radius: 14px;
    }

    .kardinalitas-info-text {
        font-size: 0.95rem;
        line-height: 1.85;
    }
}
</style>

<div class="content-gap">

    <h2 style="text-align:center;">HIMPUNAN</h2>

    <!-- ====================== HALAMAN 1 ====================== -->
    <div class="materi-page active" id="materiPage1">

        <!-- TUJUAN PEMBELAJARAN -->
        <div class="card mt-3">
            <div class="card-header fw-semibold">
                Tujuan Pembelajaran
            </div>
            <div class="card-body">
                <ol class="tujuan-text mb-0">
                    <li>Peserta didik mampu menjelaskan konsep himpunan dan notasi himpunan.</li>
                    <li>Peserta didik mampu menentukan anggota himpunan, himpunan semesta, dan kardinalitas himpunan.</li>
                    <li>Peserta didik mampu menyajikan himpunan dalam bentuk deskripsi, enumerasi, notasi pembentuk himpunan, dan diagram Venn.</li>
                </ol>
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
                                <button type="button" class="btn-cek"
                                    onclick="cekSet(['a1','a2','a3','a4'], ['iful','hendra','ardi','ica'], 'hasilA')">
                                    Periksa
                                </button>

                                <button type="button" class="btn-ulang"
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
                                <button type="button" class="btn-cek"
                                    onclick="cekSet(['b1','b2','b3','b4','b5'], ['lala','nabil','alfi','bella','rehan'], 'hasilB')">
                                    Periksa
                                </button>

                                <button type="button" class="btn-ulang"
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
                                <button type="button" class="btn-cek"
                                    onclick="cekSet(['c1','c2'], ['andi','lina'], 'hasilC')">
                                    Periksa
                                </button>

                                <button type="button" class="btn-ulang"
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

    </div>
    <!-- ====================== AKHIR HALAMAN 1 ====================== -->


    <!-- ====================== HALAMAN 2 ====================== -->
    <div class="materi-page" id="materiPage2">

     <!-- ======================== CARD PEMAHAMAN HIMPUNAN ======================== -->
<div class="pemahaman-card">
    <div class="pemahaman-header">
        Berdasarkan masalah sebelumnya, apakah kamu bisa memahami apa itu himpunan?
    </div>

    <div class="pemahaman-item">

        <!-- KOTAK PENGERTIAN -->
        <div class="pengertian-box-custom">
            <h4>Pengertian Himpunan</h4>

            <p>
                <strong>Himpunan</strong> adalah kumpulan objek tertentu yang dapat diidentifikasi dengan jelas.
                Objek-objek tersebut dapat berupa angka, huruf, benda, atau orang yang memiliki kriteria tertentu.
            </p>

            <p>
                Objek yang terdapat dalam suatu himpunan disebut <strong>anggota</strong> atau
                <strong>elemen himpunan</strong>. Setiap anggota himpunan biasanya dituliskan di dalam
                tanda kurung kurawal <strong>{ }</strong>.
            </p>
        </div>

        <!-- KOTAK NOTASI -->
        <div class="notasi-box-custom">
            <div class="notasi-label-custom">Notasi Himpunan</div>

            <p>
                Dalam matematika, sebuah himpunan biasanya dituliskan dengan:
            </p>

            <ol class="notasi-list-custom">
                <li>
                    <strong>Huruf besar tunggal sebagai nama himpunan</strong>
                    <span>
                        Contoh huruf yang digunakan: A, B, C, D, dan seterusnya.
                        Huruf besar ini hanya sebagai nama atau label untuk himpunan.
                    </span>
                </li>

                <li>
                    <strong>Kurung kurawal { }</strong>
                    <span>
                        Kurung ini digunakan untuk menuliskan anggota-anggota himpunan.
                    </span>
                </li>

                <li>
                    <strong>Anggota dipisahkan dengan koma</strong>
                    <span>
                        Misalnya: A = {Lala, Nabil, Alfi, Bella, Rehan}
                    </span>
                </li>
            </ol>
        </div>

    </div>
</div>
        <!-- ====================== CONTOH HIMPUNAN ====================== -->
<div class="contoh-grid-2">

    <!-- CONTOH A -->
    <div class="contoh-card">
        <div class="contoh-header">Contoh Himpunan</div>

        <div class="contoh-body">
            <p>Perhatikan kumpulan berikut yang diambil dari cerita silsilah keluarga Bapak Andi.</p>

            <div class="contoh-set">
                A = {Iful, Hendra, Ardi, Ica}
            </div>

            <p class="mt-3">
                <strong>Pilihlah jawaban yang paling tepat dengan memberi tanda centang (✓).</strong>
            </p>

            <p>Kumpulan tersebut merupakan .....</p>

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

                <label>
                    <input type="checkbox" id="ca4">
                    <span>kumpulan anggota keluarga Bapak Andi yang terdiri atas Iful, Hendra, Ardi, dan Ica</span>
                </label>

                <label>
                    <input type="checkbox" id="ca5">
                    <span>kumpulan keturunan Bapak Andi pada generasi cucu</span>
                </label>
            </div>

            <button type="button" class="btn-cek" onclick="cekA()">Periksa</button>

            <div id="hasilContohA" class="hasil-box"></div>
        </div>
    </div>

    <!-- CONTOH B -->
    <div class="contoh-card">
        <div class="contoh-header">Contoh Himpunan</div>

        <div class="contoh-body">

            <p>
                <strong>Pilihlah jawaban yang paling tepat dengan memberi tanda centang (✓).</strong>
            </p>

            <div class="contoh-set">
                B = {Lala, Nabil, Alfi, Bella, Rehan}
            </div>

            <p class="mt-3">Kumpulan tersebut merupakan .....</p>

            <div class="opsi-checkbox">
                <label>
                    <input type="checkbox" id="cb1">
                    <span>kumpulan anak-anak dari Bapak Andi</span>
                </label>

                <label>
                    <input type="checkbox" id="cb2">
                    <span>kumpulan keturunan Bapak Andi pada generasi anak</span>
                </label>

                <label>
                    <input type="checkbox" id="cb3">
                    <span>kumpulan anggota keluarga Bapak Andi yang terdiri atas Lala, Nabil, Alfi, Bella, dan Rehan</span>
                </label>

                <label>
                    <input type="checkbox" id="cb4">
                    <span>kumpulan cucu-cucu dari Bapak Andi</span>
                </label>

                <label>
                    <input type="checkbox" id="cb5">
                    <span>kumpulan kakek dan nenek</span>
                </label>
            </div>

            <button type="button" class="btn-cek" onclick="cekB()">Periksa</button>

            <div id="hasilContohB" class="hasil-box"></div>
        </div>
    </div>

</div>

<div class="kesimpulan">
    Setelah kamu melengkapinya, perhatikan bahwa anggota kedua kumpulan tersebut
    <strong>dapat ditentukan dengan jelas</strong>. Oleh karena itu, kedua kumpulan tersebut
    disebut <strong>himpunan</strong>.
</div>

       <div class="quiz-box-unik">
    <div class="quiz-header-unik">Ayo Tentukan</div>

    <div class="quiz-layout-side">

        <!-- KIRI -->
        <div class="quiz-left-panel">
            <p class="quiz-intro-text">Perhatikan kumpulan berikut.</p>

           <div class="quiz-case-card">
                <p><strong>A = {Ipul, Hendra, Ardi, Ica}</strong> → kumpulan anak-anak yang rajin</p>
            </div>

            <p class="quiz-question">
                Menurutmu, apakah kumpulan tersebut dapat disebut <strong>himpunan</strong>?
            </p>

            <p class="quiz-instruction">
                Klik salah satu tombol jawaban yang menurutmu benar.
            </p>
        </div>

        <!-- KANAN -->
        <div class="quiz-right-panel">
            <div class="quiz-side-title">Pilih Jawaban</div>

            <div class="quiz-opsi-wrap">
                <button type="button" class="quiz-opsi-btn" onclick="cekJawabanUnik('ya')">
                    Himpunan
                </button>

                <button type="button" class="quiz-opsi-btn" onclick="cekJawabanUnik('tidak')">
                    Bukan Himpunan
                </button>
            </div>
        </div>

    </div>

    <div id="feedbackUnik"></div>
</div>

    </div>
    <!-- ====================== AKHIR HALAMAN 2 ====================== -->


    <!-- ====================== HALAMAN 3 ====================== -->
<div class="materi-page" id="materiPage3">

    <!-- ====================== KOTAK HIMPUNAN SEMESTA  ====================== -->
    <div class="semesta-info-box">

        <h3 class="semesta-info-title">
            Himpunan Semesta
        </h3>

        <p class="semesta-info-text">
            <strong>Himpunan semesta</strong> adalah himpunan yang memuat semua anggota yang menjadi bagian dari suatu kelompok. Semua anggota dari himpunan-himpunan lain berada di dalam himpunan semesta.
        </p>

        <p class="semesta-info-text">
            Himpunan semesta biasanya <strong>dilambangkan dengan huruf S</strong>. Himpunan ini disebut himpunan semesta karena memuat seluruh anggota yang ada pada himpunan-himpunan yang sedang dibentuk.
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

    </div>
    <!-- ====================== AKHIR HALAMAN 3 ====================== -->


    <!-- ====================== HALAMAN 4 ====================== -->
    <div class="materi-page" id="materiPage4">

      <!-- ====================== KOTAK KARDINALITAS HIMPUNAN ====================== -->
<div class="kardinalitas-info-box">

    <h3 class="kardinalitas-info-title">
        Kardinalitas Himpunan
    </h3>

    <p class="kardinalitas-info-text">
        <strong>Kardinalitas himpunan</strong> adalah bilangan yang menunjukkan banyaknya anggota dalam suatu himpunan. Artinya, kardinalitas digunakan untuk mengetahui berapa jumlah elemen yang ada di dalam suatu himpunan.
    </p>

    <p class="kardinalitas-info-text">
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

    </div>
    <!-- ====================== AKHIR HALAMAN 4 ====================== -->


    <!-- ====================== PAGINATION ====================== -->
    <div class="materi-pagination">
        <nav aria-label="Pagination Materi Himpunan">
            <ul class="pagination justify-content-center flex-wrap">

                <li class="page-item" id="prevItem">
                    <button type="button" class="page-link" onclick="changeMateriPage(currentMateriPage - 1)">
                        Sebelumnya
                    </button>
                </li>

                <li class="page-item active" id="pageItem1">
                    <button type="button" class="page-link" onclick="changeMateriPage(1)">1</button>
                </li>

                <li class="page-item" id="pageItem2">
                    <button type="button" class="page-link" onclick="changeMateriPage(2)">2</button>
                </li>

                <li class="page-item" id="pageItem3">
                    <button type="button" class="page-link" onclick="changeMateriPage(3)">3</button>
                </li>

                <li class="page-item" id="pageItem4">
                    <button type="button" class="page-link" onclick="changeMateriPage(4)">4</button>
                </li>

                <li class="page-item" id="nextItem">
                    <button type="button" class="page-link" onclick="nextMateriPage()">
                        Berikutnya
                    </button>
                </li>

            </ul>
        </nav>
    </div>

</div>

<script>
    let currentMateriPage = 1;
    const totalMateriPage = 4;

    function changeMateriPage(page) {
        if (page < 1 || page > totalMateriPage) {
            return;
        }

        currentMateriPage = page;

        for (let i = 1; i <= totalMateriPage; i++) {
            const pageElement = document.getElementById("materiPage" + i);
            const pageItem = document.getElementById("pageItem" + i);

            if (pageElement) {
                pageElement.classList.toggle("active", i === page);
            }

            if (pageItem) {
                pageItem.classList.toggle("active", i === page);
            }
        }

        const prevItem = document.getElementById("prevItem");
        const nextItem = document.getElementById("nextItem");

        if (prevItem) {
            prevItem.classList.toggle("disabled", page === 1);
        }

        if (nextItem) {
            nextItem.classList.remove("disabled");
        }

        const judulMateri = document.querySelector(".content-gap");

        if (judulMateri) {
            judulMateri.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
        }
    }

    function nextMateriPage() {
        if (currentMateriPage < totalMateriPage) {
            changeMateriPage(currentMateriPage + 1);
        } else {
            window.location.href = "/bab_1/lanjut_1";
        }
    }

    document.addEventListener("DOMContentLoaded", function () {
        changeMateriPage(1);
    });

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
        el.style.display = "block";
        el.innerHTML = `“${namaHimpunan} adalah himpunan yang beranggotakan ${daftar}.”`;
    }

    function cekSet(ids, jawabanBenar, hasilId) {
        const hasil = document.getElementById(hasilId);
        let isi = [];
        let adaKosong = false;

        ids.forEach(id => {
            const input = document.getElementById(id);
            input.classList.remove("benar", "salah", "kosong", "duplikat");
        });

        ids.forEach(id => {
            const input = document.getElementById(id);
            const val = input.value.toLowerCase().trim();

            if (val === "") {
                adaKosong = true;
                input.classList.add("kosong");
            } else {
                isi.push(val);
            }
        });

        const duplikat = isi.filter((item, index) => isi.indexOf(item) !== index);

        ids.forEach(id => {
            const input = document.getElementById(id);
            const val = input.value.toLowerCase().trim();

            if (val === "") return;

            if (duplikat.includes(val)) {
                input.classList.add("duplikat");
            } else if (jawabanBenar.includes(val)) {
                input.classList.add("benar");
            } else {
                input.classList.add("salah");
            }
        });

        const semuaBenar = jawabanBenar.every(j => isi.includes(j));
        const jumlahPas = isi.length === jawabanBenar.length;
        const tidakAdaDuplikat = new Set(isi).size === isi.length;

        hasil.className = "";

        if (isi.length === 0 || adaKosong) {
            hasil.innerHTML = "Lengkapi semua jawaban terlebih dahulu.";
            hasil.classList.add("hasil-peringatan");
        } else if (semuaBenar && jumlahPas && tidakAdaDuplikat) {
            hasil.innerHTML = "✅ Jawaban benar.";
            hasil.classList.add("hasil-benar");
        } else {
            hasil.innerHTML = "❌ Jawaban belum tepat. Coba periksa kembali.";
            hasil.classList.add("hasil-salah");
        }
    }

    function resetSet(ids, bacaId, hasilId) {
        ids.forEach(id => {
            const input = document.getElementById(id);
            input.value = "";
            input.classList.remove("benar", "salah", "kosong", "duplikat");
        });

        const baca = document.getElementById(bacaId);
        if (baca) {
            baca.innerHTML = "";
            baca.style.display = "none";
        }

        const hasil = document.getElementById(hasilId);
        if (hasil) {
            hasil.innerHTML = "";
            hasil.className = "";
        }
    }

    function cekA() {
    const hasil = document.getElementById("hasilContohA");

    const ca1 = document.getElementById("ca1").checked;
    const ca2 = document.getElementById("ca2").checked;
    const ca3 = document.getElementById("ca3").checked;
    const ca4 = document.getElementById("ca4").checked;
    const ca5 = document.getElementById("ca5").checked;

    hasil.style.display = "block";
    hasil.className = "hasil-box";

    if (!ca1 && !ca2 && !ca3 && !ca4 && !ca5) {
        hasil.innerHTML = "Silakan pilih jawaban terlebih dahulu.";
        hasil.classList.add("hasil-peringatan");
        return;
    }

    if (ca1 && !ca2 && !ca3 && ca4 && !ca5) {
        hasil.innerHTML =
            "✅ Jawaban benar. A = {Iful, Hendra, Ardi, Ica} merupakan <strong>kumpulan anak-anak dari Bapak Andi</strong> dan juga dapat disebut <strong>kumpulan anggota keluarga Bapak Andi yang terdiri atas Iful, Hendra, Ardi, dan Ica</strong>.";
        hasil.classList.add("hasil-benar");
    } else {
        hasil.innerHTML =
            "❌ Jawaban belum tepat. Jawaban yang benar adalah:<br>" +
            "✓ <strong>kumpulan anak-anak dari Bapak Andi</strong><br>" +
            "✓ <strong>kumpulan anggota keluarga Bapak Andi yang terdiri atas Iful, Hendra, Ardi, dan Ica</strong>";
        hasil.classList.add("hasil-salah");
    }
}

function cekB() {
    const hasil = document.getElementById("hasilContohB");

    const cb1 = document.getElementById("cb1").checked;
    const cb2 = document.getElementById("cb2").checked;
    const cb3 = document.getElementById("cb3").checked;
    const cb4 = document.getElementById("cb4").checked;
    const cb5 = document.getElementById("cb5").checked;

    hasil.style.display = "block";
    hasil.className = "hasil-box";

    if (!cb1 && !cb2 && !cb3 && !cb4 && !cb5) {
        hasil.innerHTML = "Silakan pilih jawaban terlebih dahulu.";
        hasil.classList.add("hasil-peringatan");
        return;
    }

    if (!cb1 && !cb2 && cb3 && cb4 && !cb5) {
        hasil.innerHTML =
            "✅ Jawaban benar. B = {Lala, Nabil, Alfi, Bella, Rehan} merupakan <strong>kumpulan anggota keluarga Bapak Andi yang terdiri atas Lala, Nabil, Alfi, Bella, dan Rehan</strong> dan juga <strong>kumpulan cucu-cucu dari Bapak Andi</strong>.";
        hasil.classList.add("hasil-benar");
    } else {
        hasil.innerHTML =
            "❌ Jawaban belum tepat. Jawaban yang benar adalah:<br>" +
            "✓ <strong>kumpulan anggota keluarga Bapak Andi yang terdiri atas Lala, Nabil, Alfi, Bella, dan Rehan</strong><br>" +
            "✓ <strong>kumpulan cucu-cucu dari Bapak Andi</strong>";
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

    function cekSemestaFull() {
        const jawabanBenar = [
            "andi", "lina", "iful", "ifit", "hendra", "hikmah",
            "ardi", "nisa", "lala", "nabil", "alfi", "bella", "rehan"
        ];

        const ids = [
            "sem1", "sem2", "sem3", "sem4", "sem5", "sem6", "sem7",
            "sem8", "sem9", "sem10", "sem11", "sem12", "sem13"
        ];

        const hasil = document.getElementById("hasilSemestaFull");

        let isi = [];
        let adaKosong = false;

        ids.forEach(id => {
            const el = document.getElementById(id);
            el.classList.remove("semesta-benar", "semesta-salah", "semesta-kosong");
        });

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

        if (isi.length === 0) {
            hasil.innerHTML =
                "<strong>Ayo mulai dulu ya 😊</strong><br>" +
                "Isi terlebih dahulu nama-nama yang ada pada silsilah keluarga.<br>" +
                "Ingat, himpunan semesta berisi semua anggota yang sedang dibicarakan.<br><br>" +
                "<strong>Bentuk himpunan semesta yang benar adalah:</strong><br>" +
                jawabanTampil;

            hasil.style.background = "#fff3cd";
            hasil.style.color = "#664d03";
            hasil.style.borderLeft = "4px solid #ffc107";
            return;
        }

        if (semuaBenar && jumlahPas && tidakAdaDuplikat && !adaKosong) {
            hasil.innerHTML =
                "<strong>Bagus sekali!</strong><br>" +
                "Kamu sudah berhasil menuliskan semua anggota himpunan semesta dengan lengkap dan tepat.<br>" +
                "Artinya, kamu sudah memahami bahwa himpunan semesta memuat seluruh anggota yang sedang dibicarakan.<br><br>" +
                "<strong>Bentuk himpunan semesta yang benar adalah:</strong><br>" +
                jawabanTampil;

            hasil.style.background = "#d1e7dd";
            hasil.style.color = "#0f5132";
            hasil.style.borderLeft = "4px solid #198754";
            return;
        }

        if (!tidakAdaDuplikat) {
            hasil.innerHTML =
                "<strong>Hampir benar 😊</strong><br>" +
                "Masih ada nama yang ditulis lebih dari satu kali.<br>" +
                "Setiap anggota himpunan cukup dituliskan satu kali saja.<br><br>" +
                "<strong>Bentuk himpunan semesta yang benar adalah:</strong><br>" +
                jawabanTampil;

            hasil.style.background = "#fff3cd";
            hasil.style.color = "#664d03";
            hasil.style.borderLeft = "4px solid #ffc107";
            return;
        }

        hasil.innerHTML =
            "<strong>Yuk, periksa lagi ya 😊</strong><br>" +
            "Masih ada nama yang belum tepat atau belum lengkap.<br>" +
            "Ingat, himpunan semesta harus memuat semua anggota yang ada pada silsilah tersebut.<br><br>" +
            "<strong>Bentuk himpunan semesta yang benar adalah:</strong><br>" +
            jawabanTampil;

        hasil.style.background = "#f8d7da";
        hasil.style.color = "#842029";
        hasil.style.borderLeft = "4px solid #dc3545";
    }

    function resetSemestaFull() {
        for (let i = 1; i <= 13; i++) {
            const el = document.getElementById("sem" + i);
            el.value = "";
            el.classList.remove("semesta-benar", "semesta-salah", "semesta-kosong");
        }

        const hasil = document.getElementById("hasilSemestaFull");
        hasil.innerHTML = "";
        hasil.style.display = "none";
    }

    function cekKardPremium() {
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

    function resetKardPremium() {
        const ids = ["kpa", "kpb", "kpc"];
        const ikonIds = ["ikonA", "ikonB", "ikonC"];

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

@endsection