<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang RelasiFungsi</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#C7A8EA',
                        primaryDark: '#9A6CE2',
                        textDark: '#4B2673',
                        bgSoft: '#F7EDFF'
                    }
                }
            }
        }
    </script>

    <style>
        html {
            overflow-y: scroll; /* mencegah halaman “meloncat” */
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
    </style>
</head>

<body class="min-h-screen flex flex-col bg-bgSoft">

    <!-- NAVBAR -->
    <nav class="sticky top-0 z-50 bg-primary text-textDark py-4 shadow-md">
        <div class="max-w-6xl mx-auto px-4 flex justify-between items-center">

            <!-- Branding -->
            <div class="text-3xl font-bold tracking-wide">RelasiFungsi</div>

          <ul class="flex items-center space-x-6 font-semibold">
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

    <!-- MAIN CONTENT -->
    <main class="flex-1 min-h-[600px]">

        <!-- TAB MENU -->
        <div class="max-w-6xl mx-auto mt-8 px-4">
            <div class="flex space-x-4 bg-white shadow p-3 rounded-lg">

                <button onclick="showTab('info')" id="btn-info"
                    class="px-4 py-2 bg-primary text-textDark rounded-lg font-semibold">
                    Informasi Aplikasi
                </button>

                <button onclick="showTab('pustaka')" id="btn-pustaka"
                    class="px-4 py-2 rounded-lg font-semibold hover:bg-primary hover:text-textDark">
                    Daftar Pustaka
                </button>

            </div>
        </div>

        <!-- TAB INFORMASI APLIKASI -->
        <div id="tab-info" class="max-w-6xl mx-auto px-4 mt-10 space-y-10 min-h-[500px] mb-20">

            <!-- Info Media -->
            <div class="border-2 border-dashed border-primary rounded-xl bg-white shadow p-6">
                <div class="bg-primaryDark px-4 py-2 rounded text-white text-lg font-semibold w-fit">
                    Info Media
                </div>

                <p class="mt-4 text-gray-700 leading-relaxed font-semibold">
                    Media Pembelajaran ini dibuat untuk memenuhi syarat dalam menyelesaikan Program Strata-1
                    Pendidikan Komputer dengan judul:
                    <br><br>
                    <span class="italic">
                        “PENGEMBANGAN MEDIA PEMBELAJARAN INTERAKTIF BERBASIS WEB PADA MATERI RELASI DAN FUNGSI
                        DENGAN METODE PROBLEM BASED LEARNING”
                    </span>
                </p>
            </div>

            <!-- Info Author -->
            <div class="border-2 border-dashed border-primary rounded-xl bg-white shadow p-6">
                <div class="bg-primaryDark px-4 py-2 rounded text-white text-lg font-semibold w-fit">
                    Info Author
                </div>

                <div class="mt-4 grid grid-cols-2 gap-y-3 text-gray-700 font-semibold">

                    <div>Nama</div>
                    <div>: Juhairiah</div>

                    <div>NIM</div>
                    <div>: 2210131220003</div>

                    <div>Dosen Pembimbing Utama</div>
                    <div>: Novan Alkaf Bahraini Saputra, S.Kom., M.T.</div>

                    <div>Dosen Pembimbing Pendamping</div>
                    <div>: Delsika Pramatasari, S.Pd., M.Pd</div>

                    <div>Program Studi</div>
                    <div>: Pendidikan Komputer</div>

                    <div>Fakultas</div>
                    <div>: Keguruan dan Ilmu Pendidikan</div>

                    <div>Instansi</div>
                    <div>: Universitas Lambung Mangkurat</div>

                    <div>Email</div>
                    <div>: juhairiahnew@gmail.com</div>

                </div>
            </div>

        </div> 
        <!-- PENUTUP TAB-INFO SANGAT PENTING !!! -->



        <!-- TAB DAFTAR PUSTAKA -->
        <div id="tab-pustaka" class="hidden max-w-6xl mx-auto px-4 mt-10 min-h-[500px] mb-20">

            <div class="border-2 border-dashed border-primary rounded-xl bg-white shadow p-6">
                <div class="bg-primaryDark px-4 py-2 rounded text-white text-lg font-semibold w-fit">
                    Daftar Pustaka
                </div>

                <ul class="list-disc pl-6 text-gray-700 text-lg space-y-2 mt-4 font-semibold">
                    <li>Purwanto, R. D., Sugiarti, & Adriani, R. (2021). Matematika: Buku Siswa Kelas VIII (Kurikulum Merdeka). Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi.</li>
                    <li>Dris, J., & Tasari. (2011). Matematika 2 untuk SMP dan MTs Kelas VIII. Pusat Kurikulum dan Perbukuan, Kementerian Pendidikan Nasional.</li>
                    <li>Kemendikbud. (2017). Matematika SMP/MTs Kelas VIII (Edisi Revisi 2017). Kementerian Pendidikan dan Kebudayaan.</li>
                </ul>
            </div>

        </div>

    </main>

    <!-- FOOTER -->
    <footer class="bg-primary text-center text-textDark py-3 mt-auto">
        © Juhairiah - RelasiFungsi
    </footer>

    <!-- SCRIPT TAB -->
    <script>
        function showTab(tab) {

            // sembunyikan semua tab
            document.getElementById('tab-info').classList.add('hidden');
            document.getElementById('tab-pustaka').classList.add('hidden');

            // reset tombol
            document.getElementById('btn-info').classList.remove('bg-primary', 'text-textDark');
            document.getElementById('btn-pustaka').classList.remove('bg-primary', 'text-textDark');

            // tampilkan tab aktif
            if (tab === 'info') {
                document.getElementById('tab-info').classList.remove('hidden');
                document.getElementById('btn-info').classList.add('bg-primary', 'text-textDark');
            } else {
                document.getElementById('tab-pustaka').classList.remove('hidden');
                document.getElementById('btn-pustaka').classList.add('bg-primary', 'text-textDark');
            }
        }
    </script>

</body>

</html>
