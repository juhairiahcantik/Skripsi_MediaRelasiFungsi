@extends('layouts.heading1')

@section('container')

<style>
    html, body {
        overflow: hidden;
    }
</style>

<div class="h-[calc(100vh-140px)] overflow-hidden bg-bgSoft px-6 py-3 flex items-center justify-center">

    <!-- KOTAK UTAMA -->
    <div class="w-full max-w-5xl h-full bg-white rounded-2xl shadow-xl overflow-hidden flex flex-col md:flex-row">

        <!-- BAGIAN GAMBAR -->
        <div class="hidden md:flex md:w-[46%] h-full bg-[#ead6ff] items-center justify-center overflow-hidden">
            <img src="{{ asset('images/regis.png') }}"
                 alt="Ilustrasi Registrasi"
                 class="w-full h-full object-contain object-center">
        </div>

        <!-- BAGIAN FORM -->
        <div class="w-full md:w-[54%] h-full flex items-center justify-center px-8 py-3 overflow-hidden">

            <div class="w-full max-w-md">

                <!-- JUDUL -->
                <h1 class="text-center text-[24px] leading-none font-bold text-textDark mb-3">
                    Registrasi Pengguna Baru
                </h1>

                <form method="post" action="{{ route('register.store') }}">
                    @csrf

                    <!-- SEBAGAI -->
                    <div class="mb-1.5">
                        <label class="block font-semibold text-textDark mb-0.5 text-sm">
                            Sebagai
                        </label>

                        <select id="role"
                                name="role"
                                class="w-full h-9 border border-gray-300 rounded-lg px-3 text-sm focus:ring-2 focus:ring-primary focus:outline-none @error('role') border-red-500 @enderror"
                                onchange="toggleKelas(this.value)">
                            <option value="siswa" {{ old('role') == 'siswa' ? 'selected' : '' }}>Siswa</option>
                            <option value="guru" {{ old('role') == 'guru' ? 'selected' : '' }}>Guru</option>
                        </select>

                        @error('role')
                            <p class="text-red-500 text-xs mt-0.5">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- KELAS -->
                    <div id="kelas_container"
                         class="mb-1.5"
                         style="{{ old('role', 'siswa') == 'siswa' ? '' : 'display:none;' }}">

                        <label class="block font-semibold text-textDark mb-0.5 text-sm">
                            Kelas
                        </label>

                        <select id="kelas"
                                name="kelas"
                                class="w-full h-9 border border-gray-300 rounded-lg px-3 text-sm focus:ring-2 focus:ring-primary focus:outline-none @error('kelas') border-red-500 @enderror">
                            <option value="">-- Pilih Kelas --</option>

                            @foreach($kelas as $k)
                                <option value="{{ $k->kelas }}" {{ old('kelas') == $k->kelas ? 'selected' : '' }}>
                                    {{ $k->kelas }}
                                </option>
                            @endforeach
                        </select>

                        @error('kelas')
                            <p class="text-red-500 text-xs mt-0.5">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- NAMA -->
                    <div class="mb-1.5">
                        <label class="block font-semibold text-textDark mb-0.5 text-sm">
                            Nama
                        </label>

                        <input type="text"
                               id="UsernameInput"
                               name="UsernameInput"
                               value="{{ old('UsernameInput') }}"
                               class="w-full h-9 border border-gray-300 rounded-lg px-3 text-sm focus:ring-2 focus:ring-primary focus:outline-none @error('UsernameInput') border-red-500 @enderror">

                        @error('UsernameInput')
                            <p class="text-red-500 text-xs mt-0.5">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- NISN/NUPTK -->
                    <div class="mb-1.5">
                        <label class="block font-semibold text-textDark mb-0.5 text-sm">
                            NISN/NUPTK
                        </label>

                        <input type="text"
                               id="nimInput"
                               name="nimInput"
                               value="{{ old('nimInput') }}"
                               class="w-full h-9 border border-gray-300 rounded-lg px-3 text-sm focus:ring-2 focus:ring-primary focus:outline-none @error('nimInput') border-red-500 @enderror">

                        @error('nimInput')
                            <p class="text-red-500 text-xs mt-0.5">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- PASSWORD -->
                    <div class="mb-1.5">
                        <label class="block font-semibold text-textDark mb-0.5 text-sm">
                            Password
                        </label>

                        <input type="password"
                               id="passwordInput"
                               name="passwordInput"
                               class="w-full h-9 border border-gray-300 rounded-lg px-3 text-sm focus:ring-2 focus:ring-primary focus:outline-none @error('passwordInput') border-red-500 @enderror">

                        @error('passwordInput')
                            <p class="text-red-500 text-xs mt-0.5">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- KONFIRMASI PASSWORD -->
                    <div class="mb-2">
                        <label class="block font-semibold text-textDark mb-0.5 text-sm">
                            Konfirmasi Password
                        </label>

                        <input type="password"
                               id="passwordInput_confirmation"
                               name="passwordInput_confirmation"
                               class="w-full h-9 border border-gray-300 rounded-lg px-3 text-sm focus:ring-2 focus:ring-primary focus:outline-none @error('passwordInput_confirmation') border-red-500 @enderror">

                        @error('passwordInput_confirmation')
                            <p class="text-red-500 text-xs mt-0.5">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- TOMBOL -->
                    <div class="space-y-2">
                        <button type="submit"
                                class="w-full h-9 bg-primaryDark text-white font-semibold rounded-lg hover:bg-primary transition">
                            Submit
                        </button>

                        <a href="/login"
                           class="block w-full h-9 leading-9 text-center bg-primary text-textDark font-semibold rounded-lg hover:bg-primaryDark hover:text-white transition">
                            Sudah punya akun?
                        </a>
                    </div>

                </form>

            </div>
        </div>

    </div>

</div>

<script>
    function toggleKelas(role) {
        const container = document.getElementById('kelas_container');
        const kelas = document.getElementById('kelas');

        if (role === 'siswa') {
            container.style.display = 'block';
        } else {
            container.style.display = 'none';

            if (kelas) {
                kelas.value = '';
            }
        }
    }
</script>

@endsection