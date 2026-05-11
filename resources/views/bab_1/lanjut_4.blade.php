<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi: Penyajian Himpunan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

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

        .purple-card {
            width: 100%;
            border: 2px solid #8E44AD;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 6px 16px rgba(142, 68, 173, 0.08);
        }

        .purple-header {
            background-color: #CDA4DE;
            color: #2D1B4E;
            font-size: 1.1rem;
            font-weight: 700;
            border-bottom: 2px solid #8E44AD;
            padding: 14px 20px;
        }

        .purple-body {
            padding: 30px;
            background-color: #FFFFFF;
        }

        .label-box {
            display: inline-block;
            padding: 7px 18px;
            background-color: #F3E8FF;
            color: #4C1D95;
            font-weight: 700;
            border-radius: 10px;
            border: 1.8px solid #A855F7;
            margin: 18px 0 10px;
            font-size: 0.95rem;
        }

        .purple-divider {
            margin: 25px 0;
            border-top: 2px dashed #A855F7;
        }

        .purple-table thead {
            background-color: #E9D5FF;
        }

        .purple-table th,
        .purple-table td {
            border: 1px solid #d8c7f0 !important;
        }

        @media (max-width: 768px) {
            .content-gap {
                margin-left: 12px;
                margin-right: 12px;
            }

            .purple-body {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

@extends('layouts.main')
@section('container')

<br>

<div class="content-gap">

    <!-- ======================== CONTOH 4.1 ======================== -->
    <div class="card mt-4 purple-card">

        <div class="purple-header">
            Contoh 4.1
        </div>

        <div class="purple-body">

            <p style="font-size:1rem; line-height:1.8;">
                Seperti yang ada di permasalahan sebelumnya,
                diperoleh data berikut.
            </p>

            <div class="table-responsive my-3">
                <table class="table table-bordered text-center align-middle purple-table" style="max-width:450px;">
                    <thead>
                        <tr>
                            <th>Anggota Keluarga</th>
                            <th>Wadai yang Dibeli</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ibu Rahmah</td>
                            <td>Bingka</td>
                        </tr>
                        <tr>
                            <td>Bapak Zain</td>
                            <td>Ipau</td>
                        </tr>
                        <tr>
                            <td>Nisa</td>
                            <td>Wadai Cincin</td>
                        </tr>
                        <tr>
                            <td>Rafi</td>
                            <td>Putri Selat</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p style="font-size:1rem; line-height:1.8;">
                Hubungan antara anggota keluarga dan wadai yang dibeli
                merupakan <strong>korespondensi satu-satu</strong>, karena:
            </p>

            <ul style="font-size:1rem; line-height:1.8;">
                <li>Setiap anggota keluarga membeli satu jenis wadai yang berbeda.</li>
                <li>Setiap jenis wadai hanya dibeli oleh satu orang.</li>
            </ul>

            <p style="font-size:1rem; line-height:1.8; margin-top:15px;">
                <strong>Banyak Korespondensi Satu-satu</strong>
            </p>

            <p style="font-size:1rem; line-height:1.8;">
                Banyaknya cara berbeda untuk memasangkan anggota keluarga
                dengan wadai khas dapat dihitung menggunakan faktorial (<em>n!</em>).
            </p>

            <p style="font-size:1rem; font-weight:600;">
                Banyak korespondensi satu-satu = n!
            </p>

            <p style="font-size:1rem;">
                4! = 4 × 3 × 2 × 1 = 24
            </p>

            <p style="font-size:1rem; line-height:1.8;">
                Artinya, terdapat <strong>24 cara berbeda</strong> untuk
                memasangkan anggota keluarga dengan jenis wadai yang dibeli.
            </p>

            <p style="font-size:1rem; line-height:1.8;">
                Namun, hanya satu susunan yang benar-benar terjadi sesuai
                selera masing-masing anggota keluarga, seperti pada tabel di atas.
            </p>

        </div>
    </div>
    <!-- ====================== END CONTOH 4.1 ====================== -->


    <!-- ======================== 4.2 CIRI-CIRI ======================== -->
    <div class="card mt-4 purple-card">

        <div class="purple-header">
            Ciri-Ciri Korespondensi Satu-Satu
        </div>

        <div class="purple-body">

            <ol style="font-size:1rem; line-height:1.8; margin-left:15px;">
                <li>Setiap anggota himpunan A berpasangan tepat dengan satu anggota himpunan B.</li>
                <li>Setiap anggota himpunan B berpasangan tepat dengan satu anggota himpunan A.</li>
                <li>Banyak anggota himpunan A dan B harus sama (<strong>n(A) = n(B)</strong>).</li>
                <li>Tidak ada anggota yang berpasangan ganda atau tidak memiliki pasangan.</li>
            </ol>

        </div>
    </div>
    <!-- ====================== END 4.2 ====================== -->


    <!-- ======================== CONTOH 4.2 ======================== -->
    <div class="card mt-4 purple-card">

        <div class="purple-header">
            Contoh 4.2
        </div>

        <div class="purple-body">

            <div class="label-box">Diketahui</div>

            <p style="font-size:1rem; line-height:1.8;">
                Himpunan K = {Ibu Rahmah, Bapak Zain, Nisa, Rafi, Umi, Ahmad}
                <br>
                Himpunan L = {Bingka, Ipau, Wadai Cincin, Putri Selat, Amparan Tatak, Cucur}
            </p>

            <div class="label-box">Ditanya</div>

            <p style="font-size:1rem; line-height:1.8;">
                Berapakah banyaknya korespondensi satu-satu yang mungkin
                dari himpunan K ke himpunan L?
            </p>

            <hr class="purple-divider">

            <div class="label-box">Alternatif Penyelesaian</div>

            <p style="font-size:1rem; line-height:1.8;">
                Banyak anggota masing-masing himpunan adalah:
            </p>

            <p style="font-size:1rem;">
                n(K) = 6 dan n(L) = 6
            </p>

            <p style="font-size:1rem; line-height:1.8;">
                Karena banyak anggota kedua himpunan sama, maka
                banyaknya korespondensi satu-satu dapat dihitung
                menggunakan faktorial:
            </p>

            <p style="font-size:1rem; font-weight:600;">
                n(K)! = n(L)! = 6! = 6 × 5 × 4 × 3 × 2 × 1 = 720
            </p>

            <p style="font-size:1rem; line-height:1.8;">
                Jadi, terdapat <strong>720 cara berbeda</strong> untuk
                memasangkan setiap anggota keluarga dengan jenis wadai
                yang mungkin mereka beli.
            </p>

        </div>
    </div>
    <!-- ====================== END CONTOH 4.2 ====================== -->


    <!-- ======================== CONTOH 4.3 ======================== -->
    <div class="card mt-4 purple-card">

        <div class="purple-header">
            Contoh 4.3
        </div>

        <div class="purple-body">

            <div class="label-box">Diketahui</div>

            <p style="font-size:1rem; line-height:1.8;">
                Himpunan P = {Rawa, Sungai, Danau, Gambut, Pesisir}
                <br>
                Himpunan Q = {Purun, Nipah, Teratai, Jelutung, Bakau}
            </p>

            <div class="label-box">Ditanya</div>

            <p style="font-size:1rem; line-height:1.8;">
                Berapakah banyaknya korespondensi satu-satu yang mungkin
                dari himpunan P ke himpunan Q?
            </p>

            <hr class="purple-divider">

            <div class="label-box">Alternatif Penyelesaian</div>

            <p style="font-size:1rem; line-height:1.8;">
                Banyak anggota masing-masing himpunan adalah:
            </p>

            <p style="font-size:1rem;">
                n(P) = 5 dan n(Q) = 5
            </p>

            <p style="font-size:1rem; line-height:1.8;">
                Karena banyak anggota kedua himpunan sama, maka
                banyaknya korespondensi satu-satu dapat dihitung
                menggunakan faktorial:
            </p>

            <p style="font-size:1rem; font-weight:600;">
                n(P)! = n(Q)! = 5! = 5 × 4 × 3 × 2 × 1 = 120
            </p>

            <p style="font-size:1rem; line-height:1.8;">
                Jadi, terdapat <strong>120 cara berbeda</strong> untuk
                memasangkan jenis lahan basah dengan tumbuhan khasnya
                jika seluruh pasangan memungkinkan untuk diubah-ubah.
            </p>

        </div>
    </div>
    <!-- ====================== END CONTOH 4.3 ====================== -->

</div>

<br>

<!-- GANTI BAGIAN TOMBOL BAWAH DENGAN INI -->
<div class="content-gap mt-4 mb-4">
    <div class="d-flex justify-content-between align-items-center">

        <a href="/bab_1/bab_4" class="btn btn-success px-4">
            ← Sebelumnya
        </a>

        <a href="/bab_1/latihan4" class="btn btn-success px-4">
            Selanjutnya →
        </a>

    </div>
</div>

@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>