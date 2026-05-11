<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Petunjuk Aplikasi</title>
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
            padding:30px;
        }

        /* ================= BOX UTAMA ================= */
        .container-box{
            width:90%;
            max-width:1200px;
            padding:50px 80px;
            background:#f3f0f7;
            border-radius:40px;
            box-shadow:0 40px 90px rgba(0,0,0,0.15);
        }

        /* ================= WRAPPER ALIGN ================= */
        .inner{
            margin-left:40px; /* AGAR SEMUA SEJAJAR */
        }

        /* ================= LABEL ================= */
        .label-badge{
            display:inline-block;
            background:linear-gradient(90deg,#7A4BC4,#9b6bd3);
            color:white;
            font-weight:800;
            padding:12px 28px;
            border-radius:50px;
            font-size:30px;
            box-shadow:0 15px 35px rgba(122,75,196,0.35);
        }

        /* ================= JUDUL ================= */
        .title{
            margin-top:25px;
            font-size:32px;
            font-weight:700;
            color:#5b34b6;
        }

        /* ================= KONTEN ================= */
        .content{
            margin-top:18px;
            font-size:19px;
            line-height:1.7;
            color:#333;
            max-width:900px;
        }

        .content ul{
            padding-left:25px;
        }

        .content li{
            margin-bottom:16px;
        }

        /* ================= TOMBOL ================= */
        .back-area{
            margin-top:20px;
            width:90%;
            max-width:1200px;
            display:flex;
            justify-content:flex-end;
        }

        .back-area a{
            background:white;
            color:#7A4BC4;
            padding:12px 36px;
            border-radius:40px;
            text-decoration:none;
            font-weight:600;
            font-size:15px;
            transition:0.3s;
            box-shadow:0 10px 25px rgba(0,0,0,0.15);
        }

        .back-area a:hover{
            transform:translateY(-3px);
            box-shadow:0 18px 40px rgba(0,0,0,0.2);
        }

        /* ================= RESPONSIVE ================= */
        @media(max-width:768px){
            .container-box{
                padding:35px 25px;
            }

            .inner{
                margin-left:0;
            }

            .label-badge{
                font-size:22px;
                padding:10px 20px;
            }

            .title{
                font-size:24px;
            }

            .content{
                font-size:17px;
                line-height:1.6;
            }
        }
    </style>
</head>

<body>

    <div class="container-box">

        <div class="inner">

            <div class="label-badge">
                Petunjuk Penggunaan Aplikasi
            </div>

            <div class="title">
                Halaman Materi
            </div>

            <div class="content">
                <ul>
                    <li>
                        <strong>1. Sidebar</strong><br>
                        Berisi daftar judul setiap sub bab materi.
                        Silakan klik materi yang ingin dipelajari.
                    </li>

                    <li>
                        <strong>2. Navbar</strong><br>
                        Terletak di bagian atas halaman yang berisi menu 
                        <em>Beranda</em>, <em>Materi</em>, <em>Tentang</em>, dan <em>Logout</em>.
                    </li>

                    <li>
                        <strong>3. Tombol Lanjut ke Materi Berikutnya</strong><br>
                        Tombol ini digunakan untuk berpindah ke materi selanjutnya 
                        setelah selesai membaca atau menonton materi yang tersedia.
                    </li>
                </ul>
            </div>

        </div>

    </div>

    <div class="back-area">
        <a href="javascript:history.back()">← Kembali</a>
    </div>

</body>
</html>