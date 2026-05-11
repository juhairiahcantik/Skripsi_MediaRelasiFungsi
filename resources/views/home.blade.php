<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RelasiFungsi - Media Pembelajaran</title>
</head>

<body class="min-h-screen flex flex-col bg-bgSoft">

@extends('layouts.heading1')

@section('container')

<section class="max-w-6xl mx-auto py-20 px-6 
                grid grid-cols-1 md:grid-cols-2 
                gap-10 items-start">

    <!-- IMAGE LEFT -->
    <div class="flex justify-start">
        <img src="{{ asset('images/cewek-relasi-fungsi.png') }}"
             class="w-96 drop-shadow-xl floating"
             alt="HiReFun Illustration">
    </div>

    <!-- TEXT RIGHT -->
    <div class="md:pl-16">
        <h1 class="text-5xl font-extrabold mb-6 text-textDark leading-tight">
            MEDIA PEMBELAJARAN INTERAKTIF
            RELASI DAN FUNGSI
        </h1>

        <span class="font-semibold text-textDark block mb-6">
            Matematika | Untuk SMP KELAS VIII
        </span>

          <!-- BUTTON RIGHT ALIGN -->
        <div class="flex justify-end">
            <a href="/login"
               class="bg-primaryDark text-white px-8 py-3 rounded-lg
                      font-semibold shadow-md hover:bg-purple-700 transition">
                Mulai Belajar
            </a>
        </div>
    </div>

</section>

@endsection

</body>
</html>
