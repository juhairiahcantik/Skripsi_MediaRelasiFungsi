@extends('layouts.admin')

@section('title', 'Admin Dashboard')
@section('page-title', 'Dashboard Guru')
@section('icon')
    <i class="bi bi-speedometer2"></i>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
@endsection

@push('styles')
<style>
    /* ================= DASHBOARD COMPACT RESPONSIVE ================= */
    .dashboard-page {
        padding-bottom: 0 !important;
    }

    .welcome-section {
        background: linear-gradient(135deg, var(--primary-color) 0%, #9354d3 100%);
        color: white;
        padding: 22px 30px;
        border-radius: 18px;
        margin-bottom: 16px;
        box-shadow: 0 8px 18px rgba(181, 123, 234, 0.16);
        position: relative;
        overflow: hidden;
    }

    .welcome-section h2 {
        font-size: 1.65rem;
        line-height: 1.2;
        margin-bottom: 6px;
    }

    .welcome-section p {
        font-size: 0.95rem;
        line-height: 1.4;
    }

    .welcome-section::after {
        content: '';
        position: absolute;
        right: -45px;
        top: -55px;
        width: 180px;
        height: 180px;
        background: rgba(255,255,255,0.10);
        border-radius: 50%;
        z-index: 1;
    }

    .welcome-section > .row {
        position: relative;
        z-index: 2;
    }

    .dashboard-row {
        row-gap: 14px;
    }

    .dashboard-card {
        border: none;
        border-radius: 15px;
        transition: all 0.3s ease;
        overflow: hidden;
        background: white;
        height: 100%;
    }

    .dashboard-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.10) !important;
    }

    .main-card {
        min-height: 220px;
    }

    .main-card .card-body {
        padding: 20px 18px !important;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .wide-card {
        min-height: 105px;
    }

    .wide-card .card-body {
        padding: 16px 22px !important;
    }

    .card-icon-wrapper {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: #F0F2FF;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 10px;
        color: var(--primary-color);
        font-size: 1.45rem;
        transition: all 0.3s ease;
    }

    .dashboard-card:hover .card-icon-wrapper {
        background-color: var(--primary-color);
        color: white;
    }

    .dashboard-card h5 {
        font-size: 1.08rem;
        margin-bottom: 7px;
    }

    .dashboard-card p {
        font-size: 0.9rem;
        line-height: 1.45;
    }

    .main-card p {
        min-height: 42px;
        margin-bottom: 12px !important;
        max-width: 370px;
    }

    .btn-dashboard {
        border-radius: 20px;
        padding: 6px 22px;
        font-weight: 600;
        background-color: var(--primary-color);
        border: none;
        font-size: 0.9rem;
    }

    .btn-dashboard:hover {
        background-color: #303F9F;
    }

    .btn-outline-primary {
        padding: 6px 22px;
        font-size: 0.9rem;
    }

    .inner-flex {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 18px;
    }

    .inner-flex .card-icon-wrapper {
        width: 48px !important;
        height: 48px !important;
        font-size: 1.35rem !important;
        margin: 0 !important;
        flex-shrink: 0;
    }

    .inner-flex .text-start {
        flex: 1;
    }

    footer,
    .footer {
        margin-top: 14px !important;
        padding-top: 6px !important;
        padding-bottom: 6px !important;
        font-size: 0.9rem;
    }

    /* ================= RESPONSIVE TABLET ================= */
    @media (max-width: 991px) {
        .welcome-section {
            padding: 20px;
            border-radius: 16px;
        }

        .welcome-section h2 {
            font-size: 1.45rem;
        }

        .welcome-section p {
            font-size: 0.9rem;
        }

        .main-card {
            min-height: 210px;
        }

        .wide-card {
            min-height: auto;
        }

        .inner-flex {
            flex-wrap: wrap;
            text-align: center;
            gap: 12px;
        }

        .inner-flex .text-start {
            text-align: center !important;
            flex: 100%;
        }

        .inner-flex .btn {
            margin-left: 0 !important;
        }
    }

    /* ================= RESPONSIVE HP ================= */
    @media (max-width: 576px) {
        .welcome-section {
            padding: 18px;
            margin-bottom: 14px;
        }

        .welcome-section h2 {
            font-size: 1.25rem;
        }

        .welcome-section p {
            font-size: 0.88rem;
        }

        .main-card {
            min-height: 200px;
        }

        .main-card .card-body {
            padding: 18px 16px !important;
        }

        .dashboard-card h5 {
            font-size: 1rem;
        }

        .dashboard-card p {
            font-size: 0.86rem;
            line-height: 1.4;
        }

        .btn-dashboard,
        .btn-outline-primary {
            padding: 6px 18px;
            font-size: 0.86rem;
        }
    }
</style>
@endpush

@section('content')
<div class="dashboard-page">

    <!-- Welcome Section -->
    <div class="welcome-section">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h2 class="fw-bold">
                    Selamat Datang Kembali, {{ Auth::user()->name }}!
                </h2>
                <p class="mb-0 opacity-75">
                    Panel kontrol pembelajaran interaktif Relasi dan Fungsi.
                </p>
            </div>
        </div>
    </div>

    <!-- Main Dashboard Cards -->
    <div class="row g-3 dashboard-row">

        <!-- Soal Kuis -->
        <div class="col-xl-4 col-lg-4 col-md-6 col-12">
            <div class="card dashboard-card main-card text-center shadow-sm">
                <div class="card-body">
                    <div class="card-icon-wrapper">
                        <i class="bi bi-question-circle"></i>
                    </div>

                    <h5 class="fw-bold text-dark">Soal Kuis</h5>

                    <p class="text-secondary small">
                        Kelola daftar pertanyaan kuis untuk siswa, tambah, ubah, atau hapus soal.
                    </p>

                    <a href="soal_kuis/list" class="btn btn-primary btn-dashboard">
                        Lihat Soal Quiz
                    </a>
                </div>
            </div>
        </div>

        <!-- Hasil Kuis -->
        <div class="col-xl-4 col-lg-4 col-md-6 col-12">
            <div class="card dashboard-card main-card text-center shadow-sm">
                <div class="card-body">
                    <div class="card-icon-wrapper">
                        <i class="bi bi-trophy"></i>
                    </div>

                    <h5 class="fw-bold text-dark">Hasil Kuis</h5>

                    <p class="text-secondary small">
                        Pantau perkembangan dan hasil pengerjaan kuis oleh siswa Anda.
                    </p>

                    <a href="hasil_kuis" class="btn btn-primary btn-dashboard">
                        Lihat Hasil Quiz
                    </a>
                </div>
            </div>
        </div>

        <!-- Data Pengguna -->
        <div class="col-xl-4 col-lg-4 col-md-6 col-12">
            <div class="card dashboard-card main-card text-center shadow-sm">
                <div class="card-body">
                    <div class="card-icon-wrapper">
                        <i class="bi bi-people"></i>
                    </div>

                    <h5 class="fw-bold text-dark">Data Pengguna</h5>

                    <p class="text-secondary small">
                        Kelola akun pengguna, baik data guru maupun data siswa yang terdaftar.
                    </p>

                    <a href="user" class="btn btn-primary btn-dashboard">
                        Lihat Data Pengguna
                    </a>
                </div>
            </div>
        </div>

        <!-- Pengaturan KKM -->
        <div class="col-xl-6 col-lg-6 col-md-12 col-12">
            <div class="card dashboard-card wide-card shadow-sm border-start border-4 border-warning">
                <div class="card-body">
                    <div class="inner-flex">
                        <div class="card-icon-wrapper">
                            <i class="bi bi-shield-check"></i>
                        </div>

                        <div class="text-start">
                            <h5 class="fw-bold text-dark mb-1">Pengaturan KKM</h5>
                            <p class="text-secondary small mb-0">
                                Tentukan nilai ambang batas kelulusan.
                            </p>
                        </div>

                        <a href="{{ route('kkm.index') }}" class="btn btn-outline-primary rounded-pill px-4">
                            Atur KKM
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Master Kelas -->
        <div class="col-xl-6 col-lg-6 col-md-12 col-12">
            <div class="card dashboard-card wide-card shadow-sm border-start border-4 border-success">
                <div class="card-body">
                    <div class="inner-flex">
                        <div class="card-icon-wrapper">
                            <i class="bi bi-bookmarks"></i>
                        </div>

                        <div class="text-start">
                            <h5 class="fw-bold text-dark mb-1">Master Kelas</h5>
                            <p class="text-secondary small mb-0">
                                Kelola daftar kelas dan rombongan belajar.
                            </p>
                        </div>

                        <a href="{{ route('kelas.index') }}" class="btn btn-outline-primary rounded-pill px-4">
                            Atur Kelas
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection