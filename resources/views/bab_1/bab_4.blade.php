<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi: Korespondensi satu-satu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body, html{
            margin:0;
            padding:0;
            min-height:100%;
            font-family:'Poppins', sans-serif;
            background-color:#f8f9fa;
        }

        .content-gap{
            margin-left:40px;
            margin-right:20px;
        }

        .card{
            box-shadow:0 4px 8px rgba(0,0,0,0.1);
            border-radius:12px;
            overflow:hidden;
        }

        .card-header{
            background-color:#CDA4DE !important;
            font-weight:700;
            font-size:1.25rem;
            color:white !important;
            line-height:1.5;
            padding:14px 22px;
        }

        .materi-content{
            font-size:1rem;
            color:#444;
            line-height:1.7;
        }

        .question-box{
            width:100%;
            background-color:#FFF6D6;
            border:3px dashed #FFDF94;
            border-radius:18px;
            padding:20px;
            font-weight:600;
            font-size:1.05rem;
            color:#444;
        }

        .solution-card{
            background-color:#FFF3FF;
            border:3px dashed #FFDF94;
            border-radius:18px;
            padding:25px;
            width:100%;
            box-sizing:border-box;
            margin-top:20px;
        }

        .solution-title{
            font-size:1.4rem;
            font-weight:700;
            color:#6A2C70;
            margin-bottom:20px;
            text-align:center;
        }

        .sub-solution-box{
            background:white;
            border:1px solid #ead7f5;
            border-radius:14px;
            padding:20px;
            margin-bottom:0;
        }

        .ks-kuis-box{
            background:#ffffff;
            border-radius:18px;
            padding:22px;
            margin-bottom:22px;
            box-shadow:0 10px 24px rgba(124,58,237,.08);
        }

        .ks-soal{
            background:linear-gradient(135deg,#f7edff,#fff);
            border-left:6px solid #8e44ad;
            border-radius:14px;
            padding:16px 18px;
            font-size:1rem;
            font-weight:700;
            color:#3b0764;
            line-height:1.7;
            margin-bottom:14px;
        }

        .ks-petunjuk{
            font-size:0.95rem;
            color:#6b21a8;
            margin-bottom:16px;
        }

        .ks-opsi{
            display:grid;
            gap:12px;
        }

        .ks-labelopsi{
            display:flex;
            gap:13px;
            align-items:center;
            padding:15px 16px;
            border:1.5px solid #ead7ff;
            border-radius:14px;
            background:#fff;
            cursor:pointer;
            transition:.2s ease;
            font-size:0.95rem;
            line-height:1.55;
        }

        .ks-labelopsi:hover{
            transform:translateY(-1px);
            border-color:#a855f7;
            background:#fbf7ff;
            box-shadow:0 8px 18px rgba(124,58,237,.08);
        }

        .ks-labelopsi input[type="checkbox"]{
            width:18px;
            height:18px;
            accent-color:#7c3aed;
            cursor:pointer;
            flex-shrink:0;
        }

        .ks-aksi{
            margin-top:20px;
            display:flex;
            justify-content:center;
            gap:12px;
            flex-wrap:wrap;
        }

        .ks-btn{
            min-width:150px;
            height:44px;
            border-radius:12px;
            font-size:0.95rem;
            font-weight:700;
            cursor:pointer;
            transition:.2s ease;
        }

        .ks-btn-primary{
            border:none;
            background:linear-gradient(135deg,#7c3aed,#a855f7);
            color:white;
            box-shadow:0 8px 16px rgba(124,58,237,.22);
        }

        .ks-btn-reset{
            background:#fff;
            color:#7c3aed;
            border:1.5px solid #b979ff;
        }

        .ks-hasil{
            display:none;
            margin-top:20px;
            padding:18px;
            border-radius:16px;
            font-size:0.95rem;
            line-height:1.8;
        }

        .ks-benar{
            background:#ecfdf3;
            border:1.5px solid #86efac;
            color:#166534;
        }

        .ks-salah{
            background:#fff7ed;
            border:1.5px solid #fdba74;
            color:#7c2d12;
        }

        .definition-card{
            margin-top:24px;
            background:#fff;
            border:1px solid #ead7f5;
            border-radius:18px;
            overflow:hidden;
            box-shadow:0 8px 22px rgba(124,58,237,.08);
        }

        .definition-header{
            background:linear-gradient(135deg,#b980d4,#cda4de);
            color:#fff;
            padding:16px 22px;
            font-size:1.08rem;
            font-weight:700;
            line-height:1.5;
        }

        .definition-body{
            background:#fff9df;
            border:2px dashed #ffdf94;
            border-radius:16px;
            padding:22px 26px;
            margin:22px;
            color:#333;
            line-height:1.8;
            font-size:1rem;
        }

        .definition-body p{
            margin-bottom:10px;
        }

        .definition-body p:last-child{
            margin-bottom:0;
        }

        @media(max-width:768px){
            .content-gap{
                margin-left:12px;
                margin-right:12px;
            }

            .card-header,
            .definition-header{
                font-size:1rem;
                padding:12px 16px;
            }

            .solution-card{
                padding:18px;
            }

            .ks-kuis-box{
                padding:16px;
            }

            .ks-btn{
                width:100%;
            }

            .definition-body{
                margin:16px;
                padding:18px;
            }
        }
    </style>
</head>

<body>

@extends('layouts.main')
@section('container')

<div class="content-gap">

    <br>

    <div class="card mt-3">
        <div class="card-header">Tujuan Pembelajaran</div>
        <div class="card-body materi-content">
            Peserta didik mampu memahami korespondensi satu-satu dan
            menyajikannya untuk menyelesaikan masalah sehari-hari.
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">Perhatikan situasi berikut!</div>

        <div class="card-body materi-content">

            <p>
                Keluarga Ibu Rahmah pergi berbelanja di Pasar Wadai Ramadhan.
                Setiap anggota keluarga membeli satu jenis wadai yang paling disukainya.
            </p>

            <p>
                Data berikut menunjukkan jenis wadai yang dibeli oleh setiap anggota keluarga.
            </p>

            <div class="table-responsive my-3">
                <table class="table table-bordered text-center align-middle">
                    <thead style="background-color:#E6E6FA;">
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

            <div style="margin-top:25px;">
                <div class="question-box">
                    <ol style="margin:0; padding-left:20px;">
                        <li>
                            Bagaimana hubungan antara anggota keluarga dan
                            wadai yang dibeli dapat disebut sebagai korespondensi satu-satu?
                        </li>
                        <li>
                            Bagaimana cara menyajikan hubungan tersebut dalam bentuk diagram panah?
                        </li>
                    </ol>
                </div>
            </div>

            <div class="solution-card">
                <div class="solution-title">Penyelesaian</div>

                <div class="ks-kuis-box">
                    <div class="ks-soal">
                        Centang pernyataan yang benar agar hubungan anggota keluarga
                        dan wadai termasuk korespondensi satu-satu.
                    </div>

                    <div class="ks-petunjuk">
                        Pilih semua pernyataan yang sesuai.
                    </div>

                    <div class="ks-opsi">
                        <label class="ks-labelopsi">
                            <input type="checkbox" id="ks_a">
                            <span>Setiap anggota keluarga berpasangan tepat dengan satu jenis wadai.</span>
                        </label>

                        <label class="ks-labelopsi">
                            <input type="checkbox" id="ks_b">
                            <span>Satu orang boleh membeli semua jenis wadai.</span>
                        </label>

                        <label class="ks-labelopsi">
                            <input type="checkbox" id="ks_c">
                            <span>Tidak ada anggota keluarga yang membeli lebih dari satu wadai.</span>
                        </label>

                        <label class="ks-labelopsi">
                            <input type="checkbox" id="ks_d">
                            <span>Beberapa anggota keluarga boleh membeli wadai yang sama.</span>
                        </label>

                        <label class="ks-labelopsi">
                            <input type="checkbox" id="ks_e">
                            <span>Tidak ada wadai yang dibeli oleh dua orang berbeda.</span>
                        </label>
                    </div>

                    <div class="ks-aksi">
                        <button type="button" class="ks-btn ks-btn-primary" onclick="cekJawabanKorespondensi()">
                            Periksa Jawaban
                        </button>
                        <button type="button" class="ks-btn ks-btn-reset" onclick="ulangKorespondensi()">
                            Ulangi
                        </button>
                    </div>

                    <div id="ks_hasil" class="ks-hasil"></div>
                </div>

                <div class="sub-solution-box">
                    <strong>Menyajikan dalam bentuk diagram panah</strong>

                    <p class="mt-2">
                        Diagram panah menggambarkan hubungan dari
                        <strong>anggota keluarga (himpunan A)</strong> ke
                        <strong>wadai yang dibeli (himpunan B)</strong>.
                    </p>

                    <div style="display:flex; justify-content:center; margin-top:18px;">
                        <img src="/images/diagram-korespondensi-wadai.png"
                             alt="Diagram Panah Korespondensi Satu-satu"
                             style="max-width:500px; width:100%; height:auto; object-fit:contain;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="definition-card">
        <div class="definition-header">
            Berdasarkan masalah di atas, apakah kamu bisa memahami apa itu korespondensi satu-satu?
        </div>

        <div class="definition-body">
            <p>
                <strong>Korespondensi satu-satu</strong> adalah fungsi khusus yang memasangkan
                tepat satu anggota daerah asal dengan tepat satu anggota daerah kawan.
            </p>

            <p>
                Dengan kata lain, setiap anggota dari daerah asal maupun daerah kawan
                hanya mempunyai satu pasangan.
            </p>
        </div>
    </div>

    <div class="container-fluid mt-4 mb-4">
        <div class="row">
            <div class="col-12 d-flex justify-content-end">
                <a href="/bab_1/lanjut_4" class="btn btn-success px-4">
                    Selanjutnya →
                </a>
            </div>
        </div>
    </div>

</div>

<br>

@endsection

<script>
function cekJawabanKorespondensi(){
    let a = document.getElementById("ks_a").checked;
    let b = document.getElementById("ks_b").checked;
    let c = document.getElementById("ks_c").checked;
    let d = document.getElementById("ks_d").checked;
    let e = document.getElementById("ks_e").checked;

    let hasil = document.getElementById("ks_hasil");

    if(a && !b && c && !d && e){
        hasil.style.display = "block";
        hasil.className = "ks-hasil ks-benar";
        hasil.innerHTML = `
            <strong>Jawaban Benar!</strong><br><br>
            Hubungan anggota keluarga dan wadai termasuk korespondensi satu-satu
            karena setiap anggota keluarga membeli tepat satu wadai, dan setiap
            jenis wadai hanya dibeli oleh satu orang.
        `;
    }else{
        hasil.style.display = "block";
        hasil.className = "ks-hasil ks-salah";
        hasil.innerHTML = `
            <strong>Jawaban Belum Tepat.</strong><br><br>

            Korespondensi satu-satu berarti setiap anggota di himpunan pertama
            harus memiliki tepat satu pasangan di himpunan kedua, dan setiap
            anggota di himpunan kedua juga hanya boleh dipasangkan dengan satu
            anggota dari himpunan pertama.<br><br>

            Jadi, pernyataan yang benar adalah:<br>
            <strong>✔ Setiap anggota keluarga berpasangan tepat dengan satu jenis wadai.</strong><br>
            Ini benar karena setiap orang hanya memiliki satu pasangan wadai.<br><br>

            <strong>✔ Tidak ada anggota keluarga yang membeli lebih dari satu wadai.</strong><br>
            Ini benar karena satu anggota keluarga tidak boleh memiliki dua pasangan.<br><br>

            <strong>✔ Tidak ada wadai yang dibeli oleh dua orang berbeda.</strong><br>
            Ini benar karena satu wadai hanya boleh dimiliki satu orang.<br><br>

            Pernyataan <strong>“satu orang boleh membeli semua jenis wadai”</strong>
            dan <strong>“beberapa anggota keluarga boleh membeli wadai yang sama”</strong>
            tidak sesuai dengan korespondensi satu-satu.
        `;
    }
}

function ulangKorespondensi(){
    document.querySelectorAll('#ks_a, #ks_b, #ks_c, #ks_d, #ks_e')
        .forEach(function(input){
            input.checked = false;
        });

    document.getElementById("ks_hasil").style.display = "none";
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>