<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">

    <title>Sidebar</title>
</head>

<body>
    <header class="atas">
        <button id="mobile-toggle" class="btn text-white ps-3 pe-0 d-md-none" style="font-size: 1.5rem; border: none;">
            <i class="bi bi-list"></i>
        </button>
        <h4 style="margin: 20px;">RelasiFungsi</h4>
        <p class="bi bi-person-fill username">{{ Auth::user()->name }}</p>

    </header>
    <div class="wrapper">
        <!-- ========================== SIDEBAR ========================== -->
        <aside id="sidebar">
            <div class="h-100">

                <div class="sidebar-logo">
                    <a href="#">RelasiFungsi</a>
                </div>

                <ul class="sidebar-nav">

                    <li class="sidebar-item">
                        <a href="/bab_1/peta_konsep"
                            class="sidebar-link {{ request()->is('bab_1/bab_1') ? 'active' : '' }}">
                            Peta Konsep
                        </a>

                    </li>
                    <!-- 1. HIMPUNAN -->
                    @php
                        $himpunanActive = request()->is(
                            'bab_1/bab_1',
                            'bab_1/lanjut_1',
                            'bab_1/latihan',
                            'quiz/quiz_bab1',
                            'bab_1/latihan1'
                        );
                    @endphp

                    <li class="sidebar-item">

                        <a href="#" class="sidebar-link {{ $himpunanActive ? '' : 'collapsed' }}"
                            data-bs-toggle="collapse" data-bs-target="#sub1">

                            1. Himpunan
                        </a>

                        <ul id="sub1"
                            class="sidebar-dropdown list-unstyled collapse {{ $himpunanActive ? 'show' : '' }}"
                            data-bs-parent="#sidebar">

                            <li>
                                <a href="/bab_1/bab_1"
                                    class="sidebar-link {{ request()->is('bab_1/bab_1') ? 'active' : '' }}">
                                    Pengertian Himpunan
                                </a>
                            </li>

                            <li>
                                <a href="/bab_1/lanjut_1"
                                    class="sidebar-link {{ request()->is('bab_1/lanjut_1') ? 'active' : '' }}">
                                    Penyajian Himpunan
                                </a>
                            </li>

                            <li>
                                <a href="/bab_1/latihan1"
                                    class="sidebar-link {{ request()->is('bab_1/latihan1') ? 'active' : '' }}">
                                    Latihan
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('petunjuk_bab1') }}"
                                    class="sidebar-link {{ request()->is('quiz/quiz_bab1', 'petunjuk/petunjuk_bab1') ? 'active' : '' }}">
                                    Kuis
                                </a>
                            </li>

                        </ul>
                    </li>


                    <!-- 2. RELASI -->
                    @php
                        $relasiActive = request()->is(
                            'bab_1/bab_2',
                            'bab_1/lanjut_2',
                            'quiz/quiz_bab2',
                            'bab_1/latihan2',
                        );
                    @endphp

                    <li class="sidebar-item">

                        <a href="#" class="sidebar-link {{ $relasiActive ? '' : 'collapsed' }}"
                            data-bs-toggle="collapse" data-bs-target="#sub2">
                            2. Relasi
                        </a>

                        <ul id="sub2" class="sidebar-dropdown list-unstyled collapse {{ $relasiActive ? 'show' : '' }}"
                            data-bs-parent="#sidebar">

                            <li>
                                <a href="/bab_1/bab_2"
                                    class="sidebar-link {{ request()->is('bab_1/bab_2') ? 'active' : '' }}">
                                    Pengertian Relasi
                                </a>
                            </li>

                            <li>
                                <a href="/bab_1/lanjut_2"
                                    class="sidebar-link {{ request()->is('bab_1/lanjut_2') ? 'active' : '' }}">
                                    Penyajian Relasi
                                </a>
                            </li>

                            <li>
                                <a href="/bab_1/latihan2"
                                    class="sidebar-link {{ request()->is('bab_1/latihan2') ? 'active' : '' }}">
                                    Latihan
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('petunjuk_bab2') }}"
                                    class="sidebar-link {{ request()->is('quiz/quiz_bab2', 'petunjuk/petunjuk_bab2') ? 'active' : '' }}">
                                    Kuis
                                </a>
                            </li>

                        </ul>
                    </li>


                    <!-- 3. FUNGSI -->
                    @php
                        $fungsiActive = request()->is(
                            'bab_1/bab_3',
                            'bab_1/lanjut_3_1',
                            'quiz/quiz_bab3',
                            'bab_1/latihan3'
                        );
                    @endphp

                    <li class="sidebar-item">

                        <a href="#" class="sidebar-link {{ $fungsiActive ? '' : 'collapsed' }}"
                            data-bs-toggle="collapse" data-bs-target="#sub3">
                            3. Fungsi
                        </a>

                        <ul id="sub3" class="sidebar-dropdown list-unstyled collapse {{ $fungsiActive ? 'show' : '' }}"
                            data-bs-parent="#sidebar">

                            <li>
                                <a href="/bab_1/bab_3"
                                    class="sidebar-link {{ request()->is('bab_1/bab_3') ? 'active' : '' }}">
                                    Pengertian Fungsi
                                </a>
                            </li>

                            <li>
                                <a href="/bab_1/lanjut_3_1"
                                    class="sidebar-link {{ request()->is('bab_1/lanjut_3_1') ? 'active' : '' }}">
                                    Penyajian Fungsi
                                </a>
                            </li>

                            <li>
                                <a href="/bab_1/latihan3"
                                class="sidebar-link {{ request()->is('bab_1/latihan3') ? 'active' : '' }}">
                                    Latihan
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('petunjuk_bab3') }}"
                                    class="sidebar-link {{ request()->is('quiz/quiz_bab3', 'petunjuk/petunjuk_bab3') ? 'active' : '' }}">
                                    Kuis
                                </a>
                            </li>

                        </ul>
                    </li>

                    <!-- 4. KORESPONDENSI -->
                    @php
                        $korespondensiActive = request()->is(
                            'bab_1/bab_4',
                            'bab_1/lanjut_4',
                            'quiz/quiz_bab4',
                            'bab_1/latihan4'
                        );
                    @endphp

                    <li class="sidebar-item">

                        <a href="#" class="sidebar-link {{ $korespondensiActive ? '' : 'collapsed' }}"
                            data-bs-toggle="collapse" data-bs-target="#sub4">
                            4. Korespondensi satu-satu
                        </a>

                        <ul id="sub4"
                            class="sidebar-dropdown list-unstyled collapse {{ $korespondensiActive ? 'show' : '' }}"
                            data-bs-parent="#sidebar">

                            <li>
                                <a href="/bab_1/bab_4"
                                    class="sidebar-link {{ request()->is('bab_1/bab_4') ? 'active' : '' }}">
                                    Pengertian Korespondensi satu-satu
                                </a>
                            </li>

                            <li>
                                <a href="/bab_1/lanjut_4"
                                    class="sidebar-link {{ request()->is('bab_1/lanjut_4') ? 'active' : '' }}">
                                    Penyajian Korespondensi satu-satu
                                </a>
                            </li>

                            <li>
                                <a href="/bab_1/latihan4"
                                class="sidebar-link {{ request()->is('bab_1/latihan4') ? 'active' : '' }}">
                                    Latihan
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('petunjuk_bab4') }}"
                                    class="sidebar-link {{ request()->is('quiz/quiz_bab4', 'petunjuk/petunjuk_bab4') ? 'active' : '' }}">
                                    Kuis
                                </a>
                            </li>

                        </ul>
                    </li>

                    {{-- MENU EVALUASI (BUKAN DROPDOWN) --}}
                    <li class="sidebar-item">
                        <a href="{{ route('petunjuk_evaluasi') }}"
                            class="sidebar-link {{ request()->is('quiz/evaluasi', 'petunjuk/petunjuk_evaluasi') ? 'active' : '' }}">
                            Evaluasi
                        </a>
                    </li>

                </ul>

                <!-- ========================== SIDEBAR FOOTER ========================== -->
                <div class="sidebar-footer mt-auto px-3 pb-3">


                    <!-- Tombol Logout -->

                    <a href="/dashboard" class="btn-bawah">
                        <i class="bi bi-box-arrow-in-left"></i>
                        Keluar
                    </a>


                </div>

            </div>
        </aside>

        <!-- ========================== MAIN ========================== -->
        <div class="main">



            <div class="col py-3">
                @yield('container')
            </div>

        </div>

    </div>


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="{{ asset('js/sidebar.js') }}"></script>

</body>

</html>