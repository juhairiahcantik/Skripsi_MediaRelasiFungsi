<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#C7A8EA',
                        primaryDark: '#9A6CE2',
                        textDark: '#4B2673',
                        bgSoft: '#FFFFFF'
                    }
                }
            }
        }
    </script>

    <style>
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        .floating {
            animation: float 3s ease-in-out infinite;
        }
    </style>
<body>
    <nav class="sticky top-0 z-50 bg-primary text-textDark py-4 shadow-md">
        <div class="max-w-6xl mx-auto px-4 flex justify-between items-center">
            <div class="text-3xl font-bold tracking-wide">RelasiFungsi</div>
            

            <ul class="flex items-center gap-8 font-semibold">
    <li>
        <a href="/" class="hover:text-white transition">
            Beranda
        </a>
    </li>
    <li>
        <a href="/tentang" class="hover:text-white transition">
            Tentang
        </a>
    </li>
    <li>
        <a href="/login"
           class="bg-white text-primaryDark
                  px-5 py-2 rounded-full
                  shadow-md
                  hover:bg-purple-100
                  hover:shadow-lg
                  transition">
            Login
        </a>
    </li>
</ul>

        </div>
    </nav>

    
    <div class="flex-1">
        @yield('container')
    </div>

   <footer class="fixed bottom-0 left-0 w-full bg-primary text-center text-textDark py-3 shadow-md">
    © Juhairiah - RelasiFungsi
</footer>
</body>

</html>