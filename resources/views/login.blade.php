<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <style>
        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 10;
        }
        .login-container {
            display: flex;
            max-width: 1000px;
            width: 90%;
            margin: 0 auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .login-image {
            flex: 2;
            background-size: cover;
            background-position: center;
            border-radius: 10px 0 0 10px;
            min-height: 400px;
        }
        .login-form {
            flex: 1;
            padding: 30px;
        }
    </style>
</head>
<body>

@extends('layouts.heading1')

@section('container')

<!-- Wrapper Halaman -->
<div class="min-h-screen flex items-start justify-center bg-bgSoft pt-10 pb-20">

    <!-- Container Login -->
    <div class="w-full max-w-4xl bg-white rounded-xl shadow-lg overflow-hidden flex flex-col md:flex-row">

        <!-- Bagian Gambar -->
        <div class="hidden md:block md:w-1/2 bg-cover bg-center"
             style="background-image: url('{{ asset('images/math.png') }}');">
        </div>

        <!-- Form Login -->
        <div class="w-full md:w-1/2 p-8">

            <h1 class="text-center text-3xl font-bold text-textDark mb-6">Login</h1>

            <form method="post" action="{{ route('login.auth') }}">
                @csrf

                <!-- Input NISN -->
                <div class="mb-4">
                    <label class="block font-semibold text-textDark mb-1">NISN/NUPTK</label>
                    <input type="text"
                        class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-primary @error('nim') border-red-500 @enderror"
                        id="nim" name="nim" value="{{ old('nim') }}">
                    @error('nim')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label class="block font-semibold text-textDark mb-1">Password</label>
                    <input type="password"
                        class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-primary @error('password') border-red-500 @enderror"
                        id="password" name="password">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Ingat Saya -->
                <div class="flex items-center mb-4">
                    <input type="checkbox" id="checkRemember" name="checkRemember" class="mr-2">
                    <label for="checkRemember" class="text-textDark">Ingat Saya</label>
                </div>

                <!-- Tombol -->
                <div class="space-y-3">
                    <button type="submit"
                        class="w-full bg-primaryDark text-white font-semibold py-2 rounded-lg hover:bg-primary transition">
                        Login
                    </button>

                    <a href="{{ route('register.show') }}"
                       class="block w-full text-center bg-primary text-textDark font-semibold py-2 rounded-lg hover:bg-primaryDark hover:text-white transition">
                        Register
                    </a>
                </div>

            </form>

        </div>

    </div>

</div>

@endsection

</body>
</html>
