<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard RelasiFungsi</title>

<!-- Bootstrap Icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

body{
    min-height:100vh;
    background:
        radial-gradient(circle at 94% 15%, rgba(124,58,237,0.10) 0 125px, transparent 126px),
        radial-gradient(circle at 5% 96%, rgba(124,58,237,0.07) 0 165px, transparent 166px),
        linear-gradient(135deg,#f7f4ff 0%,#eee8ff 42%,#dfd5ff 100%);
    color:#1f2937;
    overflow:hidden;
}

/* ================= HEADER ================= */
.header{
    width:100%;
    height:92px;
    background:#ffffff;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:0 76px;
    box-shadow:0 8px 35px rgba(109,40,217,0.08);
    position:relative;
    z-index:5;
}

.logo{
    font-size:34px;
    font-weight:800;
    color:#6d28d9;
    letter-spacing:-1.5px;
}

.btn-logout{
    background:linear-gradient(90deg,#7c3aed,#6d28d9);
    color:white;
    border:none;
    padding:12px 32px;
    border-radius:32px;
    font-size:15px;
    font-weight:700;
    cursor:pointer;
    box-shadow:0 12px 30px rgba(124,58,237,0.32);
    transition:0.3s ease;
}

.btn-logout:hover{
    transform:translateY(-3px);
    box-shadow:0 16px 40px rgba(124,58,237,0.45);
}

/* ================= MAIN ================= */
.main{
    width:100%;
    height:calc(100vh - 92px);
    position:relative;
    padding:45px 0 45px;
}

/* TITIK DEKORASI KIRI */
.main::before{
    content:"";
    position:absolute;
    left:8px;
    top:45px;
    width:100px;
    height:115px;
    background-image:radial-gradient(rgba(124,58,237,0.12) 5px, transparent 6px);
    background-size:27px 27px;
    z-index:0;
}

/* TITIK DEKORASI KANAN */
.main::after{
    content:"";
    position:absolute;
    right:12px;
    bottom:90px;
    width:100px;
    height:115px;
    background-image:radial-gradient(rgba(124,58,237,0.14) 5px, transparent 6px);
    background-size:27px 27px;
    z-index:0;
}

.content-wrapper{
    width:86%;
    max-width:1600px;
    margin:0 auto;
    position:relative;
    z-index:2;
}

/* ================= WELCOME ================= */
.welcome{
    width:100%;
    height:140px;
    background:rgba(255,255,255,0.93);
    border-radius:24px;
    display:flex;
    align-items:center;
    padding:28px 46px;
    margin-bottom:36px;
    box-shadow:0 22px 65px rgba(91,33,182,0.10);
}

.user-icon{
    width:78px;
    height:78px;
    border-radius:50%;
    background:#f1eaff;
    display:flex;
    justify-content:center;
    align-items:center;
    margin-right:30px;
    flex-shrink:0;
}

.user-icon i{
    font-size:40px;
    color:#6d28d9;
}

.welcome-text span{
    display:block;
    font-size:23px;
    font-weight:500;
    color:#303642;
    margin-bottom:4px;
}

.welcome-text b{
    display:block;
    font-size:34px;
    font-weight:800;
    color:#1f2530;
}

/* ================= GRID ================= */
.grid{
    display:grid;
    grid-template-columns:repeat(3, 1fr);
    gap:34px;
}

.grid a{
    text-decoration:none;
    color:inherit;
}

/* ================= CARD ================= */
.card{
    height:300px;
    background:rgba(255,255,255,0.94);
    border-radius:24px;
    position:relative;
    overflow:hidden;
    padding:34px 44px;
    cursor:pointer;
    box-shadow:0 25px 70px rgba(91,33,182,0.10);
    transition:0.35s ease;
}

.card:hover{
    transform:translateY(-8px);
    box-shadow:0 35px 85px rgba(91,33,182,0.22);
}

.icon-box{
    width:78px;
    height:78px;
    border-radius:22px;
    background:#f1eaff;
    display:flex;
    justify-content:center;
    align-items:center;
    margin-bottom:42px;
}

.icon-box i{
    font-size:42px;
    color:#6d28d9;
}

.card h3{
    font-size:28px;
    font-weight:800;
    color:#6d28d9;
    margin-bottom:12px;
}

.card-line{
    width:100%;
    height:2px;
    background:#e9ddff;
    margin-bottom:16px;
}

.card p{
    font-size:18px;
    font-weight:400;
    color:#4b5563;
}

/* PANAH BULAT */
.arrow-circle{
    position:absolute;
    right:-28px;
    bottom:-30px;
    width:90px;
    height:90px;
    border-radius:50%;
    background:#f1eaff;
    display:flex;
    align-items:center;
    justify-content:center;
    transition:0.3s ease;
}

.arrow-circle i{
    font-size:31px;
    color:#6d28d9;
    transform:translate(-13px,-11px);
}

.card:hover .arrow-circle{
    background:#eadcff;
}

/* ================= RESPONSIVE ================= */
@media(max-width:1200px){
    body{
        overflow:auto;
    }

    .main{
        height:auto;
    }

    .content-wrapper{
        width:90%;
    }

    .grid{
        gap:25px;
    }

    .card{
        padding:30px 34px;
    }

    .card h3{
        font-size:25px;
    }

    .card p{
        font-size:16px;
    }
}

@media(max-width:950px){
    body{
        overflow:auto;
    }

    .header{
        height:auto;
        padding:24px 32px;
    }

    .main{
        height:auto;
        padding:40px 0 60px;
    }

    .grid{
        grid-template-columns:1fr;
    }

    .card{
        height:260px;
    }
}

@media(max-width:600px){
    .header{
        flex-direction:column;
        gap:16px;
    }

    .logo{
        font-size:30px;
    }

    .btn-logout{
        font-size:14px;
        padding:11px 28px;
    }

    .welcome{
        height:auto;
        flex-direction:column;
        align-items:flex-start;
        padding:30px;
    }

    .user-icon{
        margin-right:0;
        margin-bottom:22px;
    }

    .welcome-text span{
        font-size:21px;
    }

    .welcome-text b{
        font-size:30px;
    }

    .card{
        height:260px;
        padding:30px;
    }

    .icon-box{
        width:72px;
        height:72px;
        margin-bottom:34px;
    }

    .icon-box i{
        font-size:38px;
    }

    .card h3{
        font-size:25px;
    }

    .card p{
        font-size:16px;
    }
}
</style>
</head>

<body>

<!-- ================= HEADER ================= -->
<header class="header">
    <div class="logo">RelasiFungsi</div>

    <form action="{{ route('login.logout') }}" method="GET">
        @csrf
        <button type="submit" class="btn-logout">
            <i class="bi bi-box-arrow-right"></i> Keluar
        </button>
    </form>
</header>

<!-- ================= MAIN ================= -->
<main class="main">
    <div class="content-wrapper">

        <!-- WELCOME -->
        <section class="welcome">
            <div class="user-icon">
                <i class="bi bi-person"></i>
            </div>

            <div class="welcome-text">
                <span>Selamat Datang,</span>
                <b>{{ Auth::user()->name }}</b>
            </div>
        </section>

        <!-- CARD MENU -->
        <section class="grid">

            <!-- CARD CP -->
            <a href="/bab_1/capaianpembelajaran">
                <div class="card">
                    <div class="icon-box">
                        <i class="bi bi-journal-bookmark-fill"></i>
                    </div>

                    <h3>CP</h3>
                    <div class="card-line"></div>
                    <p>Capaian Pembelajaran</p>

                    <div class="arrow-circle">
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </div>
            </a>

            <!-- CARD MATERI -->
            <a href="/bab_1/peta_konsep">
                <div class="card">
                    <div class="icon-box">
                        <i class="bi bi-book-fill"></i>
                    </div>

                    <h3>Materi</h3>
                    <div class="card-line"></div>
                    <p>Materi pembelajaran</p>

                    <div class="arrow-circle">
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </div>
            </a>

            <!-- CARD PETUNJUK -->
            <a href="/bab_1/petunjukapk">
                <div class="card">
                    <div class="icon-box">
                        <i class="bi bi-file-earmark-text-fill"></i>
                    </div>

                    <h3>Petunjuk</h3>
                    <div class="card-line"></div>
                    <p>Panduan penggunaan</p>

                    <div class="arrow-circle">
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </div>
            </a>

        </section>

    </div>
</main>

</body>
</html>