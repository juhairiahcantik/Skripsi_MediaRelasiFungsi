<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuis 2 - Petunjuk</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #f3f0f9;
            font-family: 'Poppins', sans-serif;
        }

        .quiz-container {
            max-width: 900px;
            margin: 20px auto 60px; /* sebelumnya 60px auto */
            background: #fff;
            border-radius: 20px;
            padding: 50px;
            border: 3px solid #cbb6f7;
            box-shadow: 0 10px 30px rgba(0,0,0,.05);
        }

        .quiz-title {
            font-size: 42px;
            font-weight: 700;
            color: #6f42c1;
        }

        .section-title {
            font-weight: 600;
            color: #5a2ea6;
            margin-bottom: 20px;
        }

        .instructions {
            font-size: 16px;
            line-height: 1.8;
            color: #333;
        }

        .instructions li {
            margin-bottom: 15px;
        }

        .btn-purple {
            background: linear-gradient(135deg, #7b4ce2, #9f7aea);
            color: white;
            border: none;
            padding: 14px 40px;
            border-radius: 15px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-purple:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }

        .btn-gray {
            background-color: #d9d9df;
            color: #333;
            border: none;
            padding: 14px 40px;
            border-radius: 15px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-gray:hover {
            background-color: #c8c8cf;
        }

        .button-group {
            margin-top: 40px;
        }
        .fase-box-gray {
    max-width: 900px;
    margin: 40px auto 20px;
    padding: 16px 20px;

    background-color: #ffffff;
    color: #4b5563;

    border: 1px solid #d1d5db;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.06);

    text-align: center;
    font-size: 1.3rem;
    font-weight: 700;
    box-sizing: border-box;
}

@media (max-width: 768px) {
    .fase-box-gray {
        margin: 20px 12px 16px;
        padding: 14px 16px;
        font-size: 1.05rem;
        border-radius: 10px;
    }

    .quiz-container {
        margin: 20px 12px;
        padding: 25px 18px;
    }
}
    </style>
</head>

<body data-materi="materi_2" data-sub-page="kuis">
  <!-- ===================== FASE 5 ===================== -->
    <div class="fase-box-gray">
        Fase 5 Menganalisis dan Mengevaluasi Proses Pemecahan Masalah
    </div>

    <div class="quiz-container text-center">
        <div class="quiz-title">KUIS 2</div>

        <div class="text-start">
            <h4 class="section-title">Petunjuk Pengerjaan Kuis</h4>

            <ol class="instructions">
                <li>
                    Terdapat <strong>10 soal pilihan ganda</strong> pada kuis ini.
                    Untuk memulai mengerjakan kuis, tekan tombol <strong>"MULAI"</strong>.
                </li>

                <li>
                    Waktu pengerjaan adalah <strong>15 menit</strong>.
                    Sisa waktu dapat dilihat pada bagian <strong>kanan atas</strong> layar.
                    Jika waktu habis, kuis akan otomatis selesai.
                </li>

                <li>
                    Setiap soal memiliki <strong>4 pilihan jawaban (A, B, C, D)</strong>.
                    Pilih satu jawaban yang paling tepat.
                </li>

                <li>
                    Untuk berpindah soal, gunakan tombol <strong>Selanjutnya</strong>
                    atau klik <strong>nomor soal</strong> di bagian kanan layar.
                </li>

                <li>
                    Nomor soal berwarna:
                    <br>🔵 Soal sedang aktif
                    <br>🟢 Sudah dijawab
                    <br>🔴 Belum dijawab
                </li>

                <li>
                    Setelah semua soal dijawab, tekan tombol <strong>"SELESAI"</strong>
                    untuk melihat hasil kuis.
                </li>
            </ol>
        </div>

        <div class="button-group d-flex justify-content-center gap-4">
            <a href="/quiz/quiz_bab2" class="btn btn-purple">MULAI</a>
            <a href="/bab_1/latihan2" class="btn btn-gray">KEMBALI</a>
        </div>
    </div>

<script src="{{ asset('js/progress.js') }}"></script>
</body>

</html>