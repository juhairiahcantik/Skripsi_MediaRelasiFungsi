<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Capaian Pembelajaran</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:'Poppins', sans-serif;
            min-height:100vh;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            background:linear-gradient(135deg,#b9a8df,#8f7cd8);
        }

        /* KOTAK UTAMA */
        .cp-container{
            width:90%;
            max-width:1200px;
            padding:80px 100px;
            background:#f3f0f7;
            border-radius:40px;
            box-shadow:0 40px 90px rgba(0,0,0,0.15);
        }

        /* BADGE */
        .cp-label{
            display:inline-block;
            background:linear-gradient(90deg,#7A4BC4,#9b6bd3);
            color:white;
            font-weight:800;
            padding:18px 55px;   /* teks mulai di 55px */
            border-radius:50px;
            font-size:34px;
            box-shadow:0 15px 35px rgba(122,75,196,0.35);
        }

        /* SEJAJAR DENGAN TEKS BADGE */
        .cp-title{
            margin-top:40px;
            font-size:34px;
            font-weight:700;
            color:#5b34b6;
            padding-left:55px;   /* 🔥 sejajar huruf C */
        }

        .cp-content{
            margin-top:30px;
            font-size:22px;
            line-height:2;
            color:#333;
            max-width:850px;
            padding-left:55px;   /* 🔥 sejajar huruf C */
        }

        .cp-content ul{
            padding-left:25px;
        }

        /* TOMBOL DI LUAR */
        .cp-back{
            margin-top:40px;
            width:90%;
            max-width:1200px;
            text-align:right;
        }

        /* TOMBOL PUTIH */
        .cp-back a{
            background:white;
            color:#7A4BC4;
            padding:14px 45px;
            border-radius:40px;
            text-decoration:none;
            font-weight:600;
            font-size:16px;
            transition:0.3s;
            box-shadow:0 10px 25px rgba(0,0,0,0.15);
        }

        .cp-back a:hover{
            transform:translateY(-4px);
            box-shadow:0 18px 40px rgba(0,0,0,0.2);
        }

        @media(max-width:768px){
            .cp-container{
                padding:40px 25px;
            }

            .cp-label{
                font-size:24px;
                padding:12px 30px;
            }

            .cp-title{
                font-size:24px;
                padding-left:30px;
            }

            .cp-content{
                font-size:18px;
                padding-left:30px;
            }
        }
    </style>
</head>

<body>

    <div class="cp-container">

        <div class="cp-label">
            Capaian Pembelajaran
        </div>

        <div class="cp-title">
            Relasi dan Fungsi
        </div>

        <div class="cp-content">
            <ul>
                <li>
                    Peserta didik dapat memahami relasi dan fungsi 
                    (domain, kodomain, range) dan menyajikannya dalam bentuk 
                    diagram panah, tabel, himpunan pasangan berurutan, dan grafik.
                </li>
            </ul>
        </div>

    </div>

    <!-- TOMBOL KEMBALI DI LUAR -->
    <div class="cp-back">
        <a href="javascript:history.back()">← Kembali</a>
    </div>

</body>
</html>