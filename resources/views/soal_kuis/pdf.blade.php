<!DOCTYPE html>
<html>

<head>
    <title>Export Soal Kuis</title>
    <style>
        body {
            font-family: sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            font-size: 12px;
        }

        th {
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            color: #333;
        }
    </style>
</head>

<body>
    <h1>Daftar Soal Kuis</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Kuis</th>
                <th>Pertanyaan</th>
                <th>Jawaban Benar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($soalKuis as $index => $soal)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $soal->jenis_kuis }}</td>
                    <td>{{ $soal->pertanyaan }}</td>
                    <td>{{ $soal->jawaban_benar }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>