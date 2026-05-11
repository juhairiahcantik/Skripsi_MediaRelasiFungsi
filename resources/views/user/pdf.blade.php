<!DOCTYPE html>
<html>

<head>
    <title>Export Data Pengguna</title>
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
    <h1>Data Pengguna</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM/NISN/NUPTK</th>
                <th>Role</th>
                <th>Waktu Dibuat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $index => $u)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->nim }}</td>
                    <td>{{ $u->role }}</td>
                    <td>{{ $u->created_at->format('d-m-Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>