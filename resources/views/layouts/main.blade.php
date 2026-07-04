@php
    use App\Models\NilaiSiswa;
    use App\Models\Kkm;

    $nilaiSiswa = NilaiSiswa::where('id_user', Auth::id())
        ->whereIn('jenis_kuis', ['Kuis 1','Kuis 2','Kuis 3','Kuis 4'])
        ->selectRaw('jenis_kuis, MAX(nilai) as max_nilai')
        ->groupBy('jenis_kuis')
        ->pluck('max_nilai', 'jenis_kuis');

    $kkmList = Kkm::pluck('nilai', 'kuis');

    $materiUnlocked = [
        'materi_1' => true,
        'materi_2' => ($nilaiSiswa['Kuis 1'] ?? 0) >= ($kkmList['Kuis 1'] ?? 0),
        'materi_3' => ($nilaiSiswa['Kuis 2'] ?? 0) >= ($kkmList['Kuis 2'] ?? 0),
        'materi_4' => ($nilaiSiswa['Kuis 3'] ?? 0) >= ($kkmList['Kuis 3'] ?? 0),
        'evaluasi' => ($nilaiSiswa['Kuis 4'] ?? 0) >= ($kkmList['Kuis 4'] ?? 0),
    ];
@endphp
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

    <title>RelasiFungsi</title>
</head>

<body>
    <div id="materi-lock-data" data-locks='{{ json_encode($materiUnlocked) }}' style="display:none;"></div>

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

                    <li class="sidebar-item" data-sidebar-materi="materi_1">

                        <a href="#" class="sidebar-link {{ $himpunanActive ? '' : 'collapsed' }}" data-sidebar-materi-link="materi_1"
                            data-bs-toggle="collapse" data-bs-target="#sub1">
                            @php
                                $m1Locked = !$materiUnlocked['materi_1'];
                            @endphp
                            @if ($m1Locked)
                                1. Himpunan 🔒
                            @else
                                1. Himpunan
                            @endif
                        </a>

                        <ul id="sub1"
                            class="sidebar-dropdown list-unstyled collapse {{ $himpunanActive ? 'show' : '' }}"
                            data-bs-parent="#sidebar">

                            <li>
                                <a href="/bab_1/bab_1" data-sidebar-sub="pengertian" data-sidebar-label="Pengertian Himpunan"
                                    class="sidebar-link {{ request()->is('bab_1/bab_1') ? 'active' : '' }}">
                                    Pengertian Himpunan
                                </a>
                            </li>

                            <li>
                                <a href="/bab_1/lanjut_1" data-sidebar-sub="penyajian" data-sidebar-label="Penyajian Himpunan"
                                    class="sidebar-link {{ request()->is('bab_1/lanjut_1') ? 'active' : '' }}">
                                    Penyajian Himpunan
                                </a>
                            </li>

                            <li>
                                <a href="/bab_1/latihan1" data-sidebar-sub="latihan" data-sidebar-label="Latihan"
                                    class="sidebar-link {{ request()->is('bab_1/latihan1') ? 'active' : '' }}">
                                    Latihan
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('petunjuk_bab1') }}" data-sidebar-sub="kuis" data-sidebar-label="Kuis"
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

                    <li class="sidebar-item" data-sidebar-materi="materi_2">

                        <a href="#" class="sidebar-link {{ $relasiActive ? '' : 'collapsed' }}" data-sidebar-materi-link="materi_2"
                            data-bs-toggle="collapse" data-bs-target="#sub2">
                            @php
                                $m2Locked = !$materiUnlocked['materi_2'];
                            @endphp
                            @if ($m2Locked)
                                2. Relasi 🔒
                            @else
                                2. Relasi
                            @endif
                        </a>

                        <ul id="sub2" class="sidebar-dropdown list-unstyled collapse {{ $relasiActive && !$m2Locked ? 'show' : '' }}"
                            data-bs-parent="#sidebar">

                            <li>
                                <a href="/bab_1/bab_2" data-sidebar-sub="pengertian" data-sidebar-label="Pengertian Relasi"
                                    class="sidebar-link {{ request()->is('bab_1/bab_2') ? 'active' : '' }}">
                                    Pengertian Relasi
                                </a>
                            </li>

                            <li>
                                <a href="/bab_1/lanjut_2" data-sidebar-sub="penyajian" data-sidebar-label="Penyajian Relasi"
                                    class="sidebar-link {{ request()->is('bab_1/lanjut_2') ? 'active' : '' }}">
                                    Penyajian Relasi
                                </a>
                            </li>

                            <li>
                                <a href="/bab_1/latihan2" data-sidebar-sub="latihan" data-sidebar-label="Latihan"
                                    class="sidebar-link {{ request()->is('bab_1/latihan2') ? 'active' : '' }}">
                                    Latihan
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('petunjuk_bab2') }}" data-sidebar-sub="kuis" data-sidebar-label="Kuis"
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

                    <li class="sidebar-item" data-sidebar-materi="materi_3">

                        <a href="#" class="sidebar-link {{ $fungsiActive ? '' : 'collapsed' }}" data-sidebar-materi-link="materi_3"
                            data-bs-toggle="collapse" data-bs-target="#sub3">
                            @php
                                $m3Locked = !$materiUnlocked['materi_3'];
                            @endphp
                            @if ($m3Locked)
                                3. Fungsi 🔒
                            @else
                                3. Fungsi
                            @endif
                        </a>

                        <ul id="sub3" class="sidebar-dropdown list-unstyled collapse {{ $fungsiActive && !$m3Locked ? 'show' : '' }}"
                            data-bs-parent="#sidebar">

                            <li>
                                <a href="/bab_1/bab_3" data-sidebar-sub="pengertian" data-sidebar-label="Pengertian Fungsi"
                                    class="sidebar-link {{ request()->is('bab_1/bab_3') ? 'active' : '' }}">
                                    Pengertian Fungsi
                                </a>
                            </li>

                            <li>
                                <a href="/bab_1/lanjut_3_1" data-sidebar-sub="penyajian" data-sidebar-label="Penyajian Fungsi"
                                    class="sidebar-link {{ request()->is('bab_1/lanjut_3_1') ? 'active' : '' }}">
                                    Penyajian Fungsi
                                </a>
                            </li>

                            <li>
                                <a href="/bab_1/latihan3" data-sidebar-sub="latihan" data-sidebar-label="Latihan"
                                class="sidebar-link {{ request()->is('bab_1/latihan3') ? 'active' : '' }}">
                                    Latihan
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('petunjuk_bab3') }}" data-sidebar-sub="kuis" data-sidebar-label="Kuis"
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

                    <li class="sidebar-item" data-sidebar-materi="materi_4">

                        <a href="#" class="sidebar-link {{ $korespondensiActive ? '' : 'collapsed' }}" data-sidebar-materi-link="materi_4"
                            data-bs-toggle="collapse" data-bs-target="#sub4">
                            @php
                                $m4Locked = !$materiUnlocked['materi_4'];
                            @endphp
                            @if ($m4Locked)
                                4. Korespondensi satu-satu 🔒
                            @else
                                4. Korespondensi satu-satu
                            @endif
                        </a>

                        <ul id="sub4"
                            class="sidebar-dropdown list-unstyled collapse {{ $korespondensiActive && !$m4Locked ? 'show' : '' }}"
                            data-bs-parent="#sidebar">

                            <li>
                                <a href="/bab_1/bab_4" data-sidebar-sub="pengertian" data-sidebar-label="Pengertian Korespondensi satu-satu"
                                    class="sidebar-link {{ request()->is('bab_1/bab_4') ? 'active' : '' }}">
                                    Pengertian Korespondensi satu-satu
                                </a>
                            </li>

                            <li>
                                <a href="/bab_1/lanjut_4" data-sidebar-sub="penyajian" data-sidebar-label="Penyajian Korespondensi satu-satu"
                                    class="sidebar-link {{ request()->is('bab_1/lanjut_4') ? 'active' : '' }}">
                                    Penyajian Korespondensi satu-satu
                                </a>
                            </li>

                            <li>
                                <a href="/bab_1/latihan4" data-sidebar-sub="latihan" data-sidebar-label="Latihan"
                                class="sidebar-link {{ request()->is('bab_1/latihan4') ? 'active' : '' }}">
                                    Latihan
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('petunjuk_bab4') }}" data-sidebar-sub="kuis" data-sidebar-label="Kuis"
                                    class="sidebar-link {{ request()->is('quiz/quiz_bab4', 'petunjuk/petunjuk_bab4') ? 'active' : '' }}">
                                    Kuis
                                </a>
                            </li>

                        </ul>
                    </li>

                    {{-- MENU EVALUASI (BUKAN DROPDOWN) --}}
                    <li class="sidebar-item" data-sidebar-materi="evaluasi">
                        <a href="{{ route('petunjuk_evaluasi') }}"
                            class="sidebar-link {{ request()->is('quiz/evaluasi', 'petunjuk/petunjuk_evaluasi') ? 'active' : '' }}"
                            data-sidebar-sub="evaluasi" data-sidebar-label="Evaluasi">
                            @php $evaluasiLocked = !$materiUnlocked['evaluasi']; @endphp
                            @if ($evaluasiLocked)
                                Evaluasi 🔒
                            @else
                                Evaluasi
                            @endif
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


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script src="{{ asset('js/progress.js') }}"></script>

</body>

</html>