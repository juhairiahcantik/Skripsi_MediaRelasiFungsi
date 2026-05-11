<!DOCTYPE html>
<html>

<head>
    <title>Export Hasil Kuis</title>
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
    <h1>Hasil Kuis Siswa</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Kuis</th>
                <th>Nama Siswa</th>
                <th>Nilai</th>
                <th>Waktu Pengerjaan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nilaiSiswa as $index => $nilai)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $nilai->jenis_kuis }}</td>
                    <td>{{ $nilai->nama }}</td>
                    <td>{{ $nilai->nilai }}</td>
                    <td>{{ $nilai->created_at->format('d-m-Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>