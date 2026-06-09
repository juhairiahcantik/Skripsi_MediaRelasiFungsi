<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RelasiFungsi</title>

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
</head>

<body class="min-h-screen flex flex-col bg-bgSoft">

    <nav class="sticky top-0 z-50 bg-primary text-textDark shadow-md">
        <div class="max-w-6xl mx-auto px-4 py-4">

            <div class="flex justify-between items-center">
                <div class="text-2xl md:text-3xl font-bold tracking-wide">
                    RelasiFungsi
                </div>

                <button onclick="toggleMenu()"
                    class="sm:hidden bg-white text-primaryDark px-4 py-2 rounded-full shadow-md font-semibold">
                    Menu
                </button>

                <ul class="hidden sm:flex items-center gap-6 md:gap-8 font-semibold">
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
                            class="bg-white text-primaryDark px-5 py-2 rounded-full shadow-md hover:bg-purple-100 hover:shadow-lg transition">
                            Login
                        </a>
                    </li>
                </ul>
            </div>

            <ul id="mobileMenu"
                class="hidden sm:hidden mt-4 flex-col gap-3 font-semibold text-center">
                <li>
                    <a href="/" class="block py-2 hover:text-white transition">
                        Beranda
                    </a>
                </li>

                <li>
                    <a href="/tentang" class="block py-2 hover:text-white transition">
                        Tentang
                    </a>
                </li>

                <li>
                    <a href="/login"
                        class="inline-block bg-white text-primaryDark px-6 py-2 rounded-full shadow-md hover:bg-purple-100 transition">
                        Login
                    </a>
                </li>
            </ul>

        </div>
    </nav>

    <main class="flex-1">
        @yield('container')
    </main>

    <footer class="bg-primary text-center text-textDark py-3 shadow-md text-sm md:text-base">
        © Juhairiah - RelasiFungsi
    </footer>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
            menu.classList.toggle('flex');
        }
    </script>

</body>

</html>