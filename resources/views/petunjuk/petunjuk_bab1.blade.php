<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kuis 1 - Pengenalan</title>

    <!-- Bootstrap 5 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            min-height: 100%;
        }

        body {
            background-color: #f3f0f9;
            font-family: 'Poppins', sans-serif;
            color: #2f2936;
            padding: 14px 0 30px;
        }

        /* ===================== KOTAK FASE 5 ===================== */

        .fase-box-gray {
            width: calc(100% - 40px);
            max-width: 1080px;
            margin: 0 auto 14px;
            padding: 18px 24px;

            background-color: #ffffff;
            color: #4b5563;

            border: 1px solid #d1d5db;
            border-radius: 14px;

            box-shadow: 0 5px 12px rgba(0, 0, 0, 0.06);

            text-align: center;
            font-size: 1.35rem;
            font-weight: 700;
            line-height: 1.5;
        }

        /* ===================== KOTAK KUIS ===================== */

        .quiz-container {
            width: calc(100% - 40px);
            max-width: 1080px;
            margin: 0 auto;
            padding: 46px 60px;

            background-color: #ffffff;
            border: 3px solid #d8b4fe;
            border-radius: 24px;

            box-shadow:
                0 18px 40px rgba(91, 44, 111, 0.10),
                0 6px 16px rgba(0, 0, 0, 0.04);
        }

        /* ===================== JUDUL KUIS ===================== */

        .quiz-title {
            margin: 0 0 14px;

            color: #6f42c1;
            font-size: 2.6rem;
            font-weight: 800;
            line-height: 1.2;
            text-align: center;
            letter-spacing: 0.5px;
        }

        /* ===================== JUDUL PETUNJUK ===================== */

        .section-title {
            margin: 8px 0 22px;

            color: #5a2ea6;
            font-size: 1.45rem;
            font-weight: 700;
            line-height: 1.4;
        }

        /* ===================== ISI PETUNJUK ===================== */

        .instructions {
            margin: 0;
            padding-left: 26px;

            color: #2f2936;
            font-size: 1rem;
            line-height: 1.85;
        }

        .instructions li {
            margin-bottom: 14px;
            padding-left: 4px;
        }

        .instructions strong {
            color: #1f172a;
            font-weight: 700;
        }

        .status-list {
            margin-top: 8px;
            padding-left: 6px;
        }

        .status-item {
            display: flex;
            align-items: center;
            gap: 9px;
            margin: 5px 0;
        }

        .status-dot {
            width: 18px;
            height: 18px;
            border-radius: 50%;
            flex-shrink: 0;
        }

        .status-blue {
            background: linear-gradient(135deg, #2563eb, #93c5fd);
        }

        .status-green {
            background: linear-gradient(135deg, #16a34a, #86efac);
        }

        .status-red {
            background: linear-gradient(135deg, #dc2626, #fda4af);
        }

        /* ===================== AREA TOMBOL ===================== */

        .button-group {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 18px;
            flex-wrap: wrap;

            margin-top: 34px;
        }

        .btn-purple,
        .btn-gray {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            min-width: 155px;
            min-height: 50px;
            padding: 12px 30px;

            border-radius: 14px;
            font-size: 1rem;
            font-weight: 700;
            text-decoration: none;

            transition: all 0.22s ease;
        }

        /* Tombol Mulai */

        .btn-purple {
            background: linear-gradient(135deg, #7b4ce2, #a56de2);
            color: #ffffff;
            border: 2px solid transparent;

            box-shadow: 0 9px 18px rgba(123, 76, 226, 0.25);
        }

        .btn-purple:hover {
            background: linear-gradient(135deg, #6f42c1, #8b5cf6);
            color: #ffffff;
            transform: translateY(-2px);

            box-shadow: 0 13px 22px rgba(123, 76, 226, 0.32);
        }

        /* Tombol Kembali */

        .btn-gray {
            background-color: #ffffff;
            color: #6f42c1;
            border: 2px solid #9f7aea;

            box-shadow: 0 7px 15px rgba(111, 66, 193, 0.12);
        }

        .btn-gray:hover {
            background-color: #f5efff;
            color: #5a2ea6;
            border-color: #7b4ce2;
            transform: translateY(-2px);

            box-shadow: 0 10px 18px rgba(111, 66, 193, 0.18);
        }

        .btn-purple:active,
        .btn-gray:active {
            transform: translateY(0);
        }

        .btn-purple:focus-visible,
        .btn-gray:focus-visible {
            outline: 4px solid rgba(168, 85, 247, 0.28);
            outline-offset: 3px;
        }

        /* ===================== RESPONSIVE TABLET ===================== */

        @media (max-width: 992px) {
            .fase-box-gray,
            .quiz-container {
                width: calc(100% - 30px);
            }

            .quiz-container {
                padding: 40px 42px;
            }
        }

        /* ===================== RESPONSIVE HP ===================== */

        @media (max-width: 768px) {
            body {
                padding-top: 12px;
            }

            .fase-box-gray {
                width: calc(100% - 24px);
                margin-bottom: 10px;
                padding: 14px 16px;

                border-radius: 12px;

                font-size: 1.05rem;
                line-height: 1.5;
            }

            .quiz-container {
                width: calc(100% - 24px);
                padding: 28px 20px;

                border-width: 2px;
                border-radius: 20px;
            }

            .quiz-title {
                margin-bottom: 16px;

                font-size: 2rem;
            }

            .section-title {
                margin-bottom: 18px;

                font-size: 1.2rem;
                text-align: center;
            }

            .instructions {
                padding-left: 22px;

                font-size: 0.94rem;
                line-height: 1.8;
            }

            .instructions li {
                margin-bottom: 13px;
            }

            .button-group {
                flex-direction: column;
                gap: 12px;

                margin-top: 28px;
            }

            .btn-purple,
            .btn-gray {
                width: 100%;
                min-width: 100%;
            }
        }

        /* ===================== RESPONSIVE HP KECIL ===================== */

        @media (max-width: 480px) {
            .fase-box-gray {
                font-size: 0.95rem;
            }

            .quiz-container {
                padding: 24px 16px;
            }

            .quiz-title {
                font-size: 1.75rem;
            }

            .section-title {
                font-size: 1.08rem;
            }

            .instructions {
                padding-left: 20px;
                font-size: 0.9rem;
            }

            .status-dot {
                width: 16px;
                height: 16px;
            }
        }
    </style>
</head>

<body>

    <!-- ===================== FASE 5 ===================== -->
    <div class="fase-box-gray">
        Fase 5 Menganalisis dan Mengevaluasi Proses Pemecahan Masalah
    </div>

    <!-- ===================== KOTAK KUIS ===================== -->
    <div class="quiz-container">

        <div class="quiz-title">
            KUIS 1
        </div>

        <div class="text-start">

            <h4 class="section-title">
                Petunjuk Pengerjaan Kuis
            </h4>

            <ol class="instructions">

                <li>
                    Terdapat <strong>10 soal pilihan ganda</strong> pada kuis ini.
                    Untuk memulai mengerjakan kuis, tekan tombol
                    <strong>“MULAI”</strong>.
                </li>

                <li>
                    Waktu pengerjaan adalah <strong>15 menit</strong>.
                    Sisa waktu dapat dilihat pada bagian
                    <strong>kanan atas</strong> layar.
                    Jika waktu habis, kuis akan otomatis selesai.
                </li>

                <li>
                    Setiap soal memiliki
                    <strong>4 pilihan jawaban (A, B, C, D)</strong>.
                    Pilih satu jawaban yang paling tepat.
                </li>

                <li>
                    Untuk berpindah soal, gunakan tombol
                    <strong>Selanjutnya</strong> atau klik
                    <strong>nomor soal</strong> di bagian kanan layar.
                </li>

                <li>
                    Nomor soal memiliki tanda warna sebagai berikut:

                    <div class="status-list">

                        <div class="status-item">
                            <span class="status-dot status-blue"></span>
                            <span>Soal sedang aktif</span>
                        </div>

                        <div class="status-item">
                            <span class="status-dot status-green"></span>
                            <span>Sudah dijawab</span>
                        </div>

                        <div class="status-item">
                            <span class="status-dot status-red"></span>
                            <span>Belum dijawab</span>
                        </div>

                    </div>
                </li>

                <li>
                    Setelah semua soal dijawab, tekan tombol
                    <strong>“SELESAI”</strong> untuk melihat hasil kuis.
                </li>

            </ol>

        </div>

        <!-- ===================== TOMBOL ===================== -->
        <div class="button-group">

            <a href="/quiz/quiz_bab1" class="btn-purple">
                MULAI
            </a>

            <a href="/bab_1/latihan1" class="btn-gray">
                KEMBALI
            </a>

        </div>

    </div>

    <script src="{{ asset('js/progress.js') }}"></script>

</body>

</html>