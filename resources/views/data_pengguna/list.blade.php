<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Soal Kuis</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 950px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .alert {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            color: #155724;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
        }
        .btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .btn-back {
            background-color: #6c757d;
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .quiz-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .quiz-table th,
        .quiz-table td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 8px;
        }

        .quiz-table th {
            background-color: #f4f4f4;
            color: #333;
        }

        .quiz-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .quiz-table tr:hover {
            background-color: #f1f1f1;
        }

        .btn {
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            font-size: 14px;
            border-radius: 4px;
            text-decoration: none;
        }

        .btn.edit {
            background-color: #ffc107;
            color: #fff;
        }

        .btn.delete {
            background-color: #dc3545;
            color: #fff;
        }

        search-container,
            .filter-container {
                display: flex;
                align-items: center;
                margin-bottom: 10px;
                gap: 10px;
            }

            .search-container input {
                width: 200px;
                padding: 8px;
                font-size: 14px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            .filter-container select {
                padding: 8px;
                font-size: 14px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            .btn.search {
                padding: 8px 12px;
                background-color: #007bff;
                color: #fff;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            .btn.search:hover {
                background-color: #0056b3;
            }
    </style>
</head>
<body>
    <!-- Tombol Kembali -->
    <a href="/guru_dashboard" class="btn btn-back">Kembali</a>

    <div class="container">
        <h1>Soal Kuis</h1>
        <a class="btn edit" href="/soal_kuis/soal_kuis/" style="background-color: green;">Tambah Soal</a>
        
        <!-- <div class="search-container">
            <input type="text" id="searchInput" placeholder="Cari pertanyaan..." />
            <button class="btn search" onclick="searchTable()">Submit Search</button>
        </div>
        <div class="filter-container">
            <label for="filterSelect">Filter Jenis Kuis:</label>
            <select id="filterSelect" onchange="filterTable()">
                <option value="">Semua Jenis Kuis</option>
                <option value="Kuis 1">Kuis 1</option>
                <option value="Kuis 2">Kuis 2</option>
            </select>
        </div> -->

        <table class="quiz-table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NISN/NUPTK</th>
                <th>Password</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $usr)
            <tr>
                <td>{{$usr->name}}</td>
                <td>{{$usr->nim}}</td>
                <td>{{$usr->password}}</td>
                <td>{{$usr->role}}</td>
                <td>
                    <a href="/soal_kuis/update/{{$usr->id}}" class="btn edit">Edit</a>
                    <button class="btn delete" id="{{$usr->id}}">Hapus</button>
                    <form action="{{ route('soal_kuis.delete', ['id' => $usr->id]) }}" method="POST" id="form-del-{{$soal->id}}">
                            @csrf
                            @method('delete')
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    @if (session('success'))
        <script>
            Swal.fire({
                text: "{{ session('success') }}",
                icon: "success"
            });
        </script>
    @endif

    <script>
        const btnDelete = document.querySelectorAll(".btn.delete");
        btnDelete.forEach(element => {
            element.addEventListener('click', () => {
                Swal.fire({
                    title: "Apakah anda yakin ingin menghapus soal ini?",
                    showDenyButton: true,
                    confirmButtonText: "Hapus",
                    denyButtonText: `Batal`
                    }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        const form = document.getElementById(`form-del-${element?.id}`);
                        form.submit();
                    }
                });
            });
        });
    </script>
</body>
</html>
