<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Kuis</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f3eef9;
            margin: 0;
            padding: 40px 0;
        }

        .container {
            width: 100%;
            max-width: 900px;
            margin: auto;
            background: #ffffff;
            border-radius: 20px;
            padding: 50px 60px;
            border: 3px solid #cbb6f7;
            box-shadow: 0 15px 35px rgba(111, 66, 193, 0.08);
        }

        /* Judul */
        .judul {
            text-align: center;
            margin-bottom: 30px;
        }

        .judul h1 {
            font-weight: 700;
            color: #6f42c1;
            font-size: 42px;
            margin-bottom: 5px;
        }

        .judul p {
            font-size: 20px;
            color: #555;
        }

        .garis {
            border-bottom: 1px solid #ddd;
            margin: 25px 0;
        }

        .section-title {
            text-align: center;
            font-weight: 600;
            font-size: 20px;
            margin-bottom: 25px;
            color: #444;
        }

        .waktu {
            margin-bottom: 40px;
        }

        .waktu-label {
            font-weight: 600;
            color: #6f42c1;
        }

        .nilai-section {
            text-align: center;
        }

        .nilai-label {
            color: #6f42c1;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .nilai-angka {
            font-size: 90px;
            font-weight: 700;
            line-height: 1;
        }

        .lulus {
            color: #198754;
        }

        .gagal {
            color: #dc3545;
        }

        .poin {
            color: #666;
            margin-bottom: 15px;
        }

        .detail-jawaban {
            margin-top: 10px;
            color: #333;
        }

        .box-lulus {
            background-color: #d1f2e0;
            border: 1px solid #20c997;
            color: #0f5132;
            padding: 15px;
            border-radius: 10px;
            margin: 30px auto;
            max-width: 600px;
            text-align: center;
        }

        .btn-lanjut {
            background-color: #22c55e;
            color: white;
            border: none;
            padding: 14px 40px;
            border-radius: 30px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-lanjut:hover {
            background-color: #16a34a;
            transform: translateY(-3px);
        }

        .btn-danger {
            border-radius: 30px;
            padding: 12px 30px;
        }

        @media (max-width: 768px) {
            .container {
                padding: 30px 25px;
            }

            .nilai-angka {
                font-size: 60px;
            }
        }
    </style>
</head>

<body>

    @php
        $typeArr = [
            'Kuis 1' => [
                'title' => 'KUIS 1',
                'subtitle' => 'Himpunan',
                'retry_url' => route('petunjuk_bab1'),
                'next_url' => '/bab_1/bab_2'
            ],
            'Kuis 2' => [
                'title' => 'KUIS 2',
                'subtitle' => 'Relasi',
                'retry_url' => route('petunjuk_bab2'),
                'next_url' => '/bab_1/bab_3'
            ],
            'Kuis 3' => [
                'title' => 'KUIS 3',
                'subtitle' => 'Fungsi',
                'retry_url' => route('petunjuk_bab3'),
                'next_url' => '/bab_1/bab_4'
            ],
            'Kuis 4' => [
                'title' => 'KUIS 4',
                'subtitle' => 'Korespondensi Satu-satu',
                'retry_url' => route('petunjuk_bab4'),
                'next_url' => route('petunjuk_evaluasi')
            ],
            'Evaluasi' => [
                'title' => 'EVALUASI',
                'subtitle' => 'Evaluasi Akhir',
                'retry_url' => route('petunjuk_evaluasi'),
                'next_url' => '/dashboard'
            ],
        ];

        $current = $typeArr[$type] ?? $typeArr['Kuis 1'];
    @endphp

    <div class="container">

        <!-- Judul -->
        <div class="judul">
            <h1>{{ $current['title'] }}</h1>
            <p>{{ $current['subtitle'] }}</p>
        </div>

        <div class="garis"></div>

        <div class="section-title">HASIL KUIS</div>

        <div class="garis"></div>

        <!-- Waktu -->
        <div class="waktu">
            <div class="waktu-label">WAKTU SELESAI</div>
            <div>
    Hari & Tanggal:
    
    @php
        \Carbon\Carbon::setLocale('id');
    @endphp

    <strong>{{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}</strong>
</div>

        <!-- Nilai -->
        <div class="nilai-section">

            <div class="nilai-label">NILAI</div>

            <div class="nilai-angka 
            @if(session('nilai', 0) >= ($kkm ? $kkm->nilai : 0)) lulus 
            @else gagal 
            @endif">
                {{ session('nilai', 0) }}
            </div>

            <div class="poin">poin</div>
            @if($kkm)
                <div class="mb-3">
                    <span class="badge bg-secondary p-2">KKM: {{ $kkm->nilai }}</span>
                </div>
            @endif

            <div class="detail-jawaban">
                Jawaban benar: {{ session('benar', 0) }} <br>
                Jawaban salah: {{ session('total_soal', 0) - session('benar', 0) }}
            </div>

        </div>

        <!-- Jika Lulus -->
        @if(session('nilai', 0) >= ($kkm ? $kkm->nilai : 0))
            <div class="box-lulus">
                Selamat, skor kamu memenuhi untuk dapat lanjut ke materi berikutnya
            </div>

            <div class="text-center">
                <a href="{{ $current['next_url'] }}" class="btn btn-lanjut">
                    {{ $type == 'Evaluasi' ? 'KEMBALI KE DASHBOARD' : 'LANJUT KE MATERI BERIKUTNYA' }}
                </a>
            </div>
        @else
            <!-- Jika Gagal -->
            <div class="alert alert-danger mt-4 text-center mx-auto" style="max-width: 600px; border-radius: 12px;">
                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                <strong>Peringatan!</strong> Nilai Anda masih di bawah KKM ({{ $kkm ? $kkm->nilai : '0' }}). Silakan ulangi kuis untuk mendapatkan nilai maksimal.
            </div>

            <div class="text-center mt-3">
                <a href="{{ $current['retry_url'] }}" class="btn btn-danger">
                    Ulangi Kuis
                </a>
            </div>
        @endif

    </div>

</body>

</html>