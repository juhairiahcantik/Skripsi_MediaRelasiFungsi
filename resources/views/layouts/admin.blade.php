<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Guru') - RelasiFungsi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        :root {
            --primary-color: #B57BEA; /* Purple color from previous theme */
            --bg-light: #F8F9FA;
        }

        body {
            background-color: var(--bg-light);
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        /* Content Area - Full Width */
        .main-wrapper {
            margin-left: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .main-container {
            padding: 20px;
            flex: 1;
            width: 100%;
        }

        /* Title Area (optional, removed if 'header' means everything above) */
        .page-title-section {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .icon-circle {
            width: 40px;
            height: 40px;
            background: white;
            border: 1px solid #E0E0E0;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: var(--primary-color);
        }

        .page-title-section h1 {
            font-size: 1.5rem;
            margin: 0;
            font-weight: 700;
            color: #333;
        }

        .card {
            background: white;
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            padding: 25px;
            width: 100%;
        }

        .btn-entri {
            background-color: var(--primary-color);
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            border: none;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-weight: 600;
            transition: all 0.2s;
            box-shadow: 0 4px 10px rgba(181, 123, 234, 0.3);
        }

        .btn-entri:hover {
            background-color: #9b5cc5;
            color: white;
            transform: translateY(-1px);
            box-shadow: 0 6px 15px rgba(181, 123, 234, 0.4);
        }

        .quiz-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            margin-top: 10px;
        }

        .quiz-table th {
            background-color: var(--primary-color);
            padding: 15px;
            font-weight: 600;
            color: white;
            border: none;
            text-align: left;
        }

        .quiz-table th:first-child { border-radius: 10px 0 0 0; }
        .quiz-table th:last-child { border-radius: 0 10px 0 0; }

        .quiz-table td {
            padding: 15px;
            border-bottom: 1px solid #F0F0F0;
            vertical-align: middle;
            color: #444;
        }

        .quiz-table tr:last-child td:first-child { border-radius: 0 0 0 10px; }
        .quiz-table tr:last-child td:last-child { border-radius: 0 0 10px 0; }

        .quiz-table tr:hover {
            background-color: #FDF9FF;
        }

        .btn-action {
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s;
            border: none;
        }

        .btn-edit { background-color: #28a745; color: white; }
        .btn-delete { background-color: #dc3545; color: white; }

        .btn-action:hover { opacity: 0.9; color: white; transform: scale(1.05); }

        footer {
            padding: 20px 0;
            color: #888;
            font-size: 0.9rem;
            text-align: center;
        }
    </style>


    @stack('styles')
</head>

<body>
    <div class="main-wrapper">
        <div class="main-container">
            <div class="page-title-section">
                @yield('back_button')
                <div class="icon-circle">
                    @yield('icon')
                </div>
                <h1 class="flex-grow-1">@yield('page-title')</h1>
                <a href="{{ route('login.logout') }}" class="btn btn-outline-danger btn-sm rounded-pill px-3 d-flex align-items-center gap-2">
                    <i class="bi bi-box-arrow-right"></i> Keluar
                </a>
            </div>


            @yield('content')
        </div>


        <footer>
            &copy; {{ date('Y') }} - <span style="color: var(--primary-color);">Juhairiah.</span> RelasiFungsi.
        </footer>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('scripts')
</body>

</html>
