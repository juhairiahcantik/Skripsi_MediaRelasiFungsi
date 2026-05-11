<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Materi: Penyajian Himpunan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        .content-gap {
            margin-left: 40px;
            margin-right: 20px;
        }
    </style>
</head>

<body>

@extends('layouts.main')
@section('container')

<br>
<div class="content-gap">

    <!-- ======================== PETA KONSEP ======================== -->
    <div class="card mt-4" style="width:100%; border:2px solid #7f3ab7;">

        <!-- HEADER -->
        <div class="card-header"
             style="
                background-color:#E6D5F3;
                color:#000;
                font-size:1.3rem;
                font-weight:700;
                border-bottom:2px solid #7f3ab7;
                text-align:center;
             ">
            Peta Konsep
        </div>

        <!-- BODY -->
        <div class="card-body" style="padding:25px; background-color:#FFFFFF;">

            <div style="display:flex; justify-content:center;">
                <img src="/images/peta-konsep.png"
                     alt="Peta Konsep Penyajian Himpunan"
                     style="
                        max-width:900px;
                        width:100%;
                        height:auto;
                        object-fit:contain;
                     ">
            </div>

        </div>
    </div>
    <!-- ====================== END PETA KONSEP ====================== -->

</div>

@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
