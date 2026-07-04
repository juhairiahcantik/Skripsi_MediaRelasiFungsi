-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 03 Jul 2026 pada 16.50
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_skripsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `kelas`, `created_at`, `updated_at`) VALUES
(146, 'kelas ibu juhai', '2026-05-11 05:46:39', '2026-05-11 05:46:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kkm`
--

CREATE TABLE `kkm` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kuis` varchar(255) NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kkm`
--

INSERT INTO `kkm` (`id`, `kuis`, `nilai`, `created_at`, `updated_at`) VALUES
(146, 'Kuis 1', 65, '2026-04-20 04:16:51', '2026-04-20 04:16:51'),
(147, 'Kuis 2', 65, '2026-04-20 04:16:51', '2026-04-20 04:16:51'),
(148, 'Kuis 3', 65, '2026-04-20 04:16:51', '2026-04-20 04:16:51'),
(149, 'Kuis 4', 54, '2026-04-20 04:16:51', '2026-04-20 04:16:51'),
(150, 'Evaluasi', 65, '2026-04-20 04:16:51', '2026-04-20 04:16:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_10_23_141221_create_soal_kuis_table', 2),
(5, '2024_11_16_041940_add_jenis_kuis_to_soal_kuis_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_siswa`
--

CREATE TABLE `nilai_siswa` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `nilai` float NOT NULL,
  `jenis_kuis` enum('Kuis 1','Kuis 2','Kuis 3','Kuis 4','Evaluasi') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jawaban` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nilai_siswa`
--

INSERT INTO `nilai_siswa` (`id`, `id_user`, `nama`, `nilai`, `jenis_kuis`, `created_at`, `updated_at`, `jawaban`) VALUES
(106, 27, 'Juhai', 30, 'Kuis 1', '2026-05-11 11:12:12', '2026-05-11 11:12:12', '[{\"no\":1,\"soal\":\"\",\"pilihan\":{\"a\":\"\",\"b\":\"\",\"c\":\"\",\"d\":\"\"},\"jawaban_siswa\":\"B\",\"jawaban_benar\":\"D\",\"is_benar\":false},{\"no\":2,\"soal\":\"\",\"pilihan\":{\"a\":\"\",\"b\":\"\",\"c\":\"\",\"d\":\"\"},\"jawaban_siswa\":\"D\",\"jawaban_benar\":\"B\",\"is_benar\":false},{\"no\":3,\"soal\":\"\",\"pilihan\":{\"a\":\"\",\"b\":\"\",\"c\":\"\",\"d\":\"\"},\"jawaban_siswa\":\"C\",\"jawaban_benar\":\"C\",\"is_benar\":true},{\"no\":4,\"soal\":\"\",\"pilihan\":{\"a\":\"\",\"b\":\"\",\"c\":\"\",\"d\":\"\"},\"jawaban_siswa\":\"B\",\"jawaban_benar\":\"D\",\"is_benar\":false},{\"no\":5,\"soal\":\"\",\"pilihan\":{\"a\":\"\",\"b\":\"\",\"c\":\"\",\"d\":\"\"},\"jawaban_siswa\":\"D\",\"jawaban_benar\":\"B\",\"is_benar\":false},{\"no\":6,\"soal\":\"\",\"pilihan\":{\"a\":\"\",\"b\":\"\",\"c\":\"\",\"d\":\"\"},\"jawaban_siswa\":\"C\",\"jawaban_benar\":\"A\",\"is_benar\":false},{\"no\":7,\"soal\":\"\",\"pilihan\":{\"a\":\"\",\"b\":\"\",\"c\":\"\",\"d\":\"\"},\"jawaban_siswa\":\"B\",\"jawaban_benar\":\"B\",\"is_benar\":true},{\"no\":8,\"soal\":\"\",\"pilihan\":{\"a\":\"\",\"b\":\"\",\"c\":\"\",\"d\":\"\"},\"jawaban_siswa\":\"C\",\"jawaban_benar\":\"B\",\"is_benar\":false},{\"no\":9,\"soal\":\"\",\"pilihan\":{\"a\":\"\",\"b\":\"\",\"c\":\"\",\"d\":\"\"},\"jawaban_siswa\":\"C\",\"jawaban_benar\":\"C\",\"is_benar\":true},{\"no\":10,\"soal\":\"\",\"pilihan\":{\"a\":\"\",\"b\":\"\",\"c\":\"\",\"d\":\"\"},\"jawaban_siswa\":\"D\",\"jawaban_benar\":\"A\",\"is_benar\":false}]'),
(107, 27, 'Juhai', 80, 'Kuis 2', '2026-05-11 11:14:34', '2026-05-11 11:14:34', '[{\"no\":1,\"soal\":\"\",\"pilihan\":{\"a\":\"\",\"b\":\"\",\"c\":\"\",\"d\":\"\"},\"jawaban_siswa\":\"B\",\"jawaban_benar\":\"B\",\"is_benar\":true},{\"no\":2,\"soal\":\"\",\"pilihan\":{\"a\":\"\",\"b\":\"\",\"c\":\"\",\"d\":\"\"},\"jawaban_siswa\":\"C\",\"jawaban_benar\":\"C\",\"is_benar\":true},{\"no\":3,\"soal\":\"\",\"pilihan\":{\"a\":\"\",\"b\":\"\",\"c\":\"\",\"d\":\"\"},\"jawaban_siswa\":\"A\",\"jawaban_benar\":\"A\",\"is_benar\":true},{\"no\":4,\"soal\":\"\",\"pilihan\":{\"a\":\"\",\"b\":\"\",\"c\":\"\",\"d\":\"\"},\"jawaban_siswa\":\"A\",\"jawaban_benar\":\"A\",\"is_benar\":true},{\"no\":5,\"soal\":\"\",\"pilihan\":{\"a\":\"\",\"b\":\"\",\"c\":\"\",\"d\":\"\"},\"jawaban_siswa\":\"D\",\"jawaban_benar\":\"D\",\"is_benar\":true},{\"no\":6,\"soal\":\"\",\"pilihan\":{\"a\":\"\",\"b\":\"\",\"c\":\"\",\"d\":\"\"},\"jawaban_siswa\":\"C\",\"jawaban_benar\":\"C\",\"is_benar\":true},{\"no\":7,\"soal\":\"\",\"pilihan\":{\"a\":\"\",\"b\":\"\",\"c\":\"\",\"d\":\"\"},\"jawaban_siswa\":\"C\",\"jawaban_benar\":\"A\",\"is_benar\":false},{\"no\":8,\"soal\":\"\",\"pilihan\":{\"a\":\"\",\"b\":\"\",\"c\":\"\",\"d\":\"\"},\"jawaban_siswa\":\"D\",\"jawaban_benar\":\"D\",\"is_benar\":true},{\"no\":9,\"soal\":\"\",\"pilihan\":{\"a\":\"\",\"b\":\"\",\"c\":\"\",\"d\":\"\"},\"jawaban_siswa\":\"B\",\"jawaban_benar\":\"B\",\"is_benar\":true},{\"no\":10,\"soal\":\"\",\"pilihan\":{\"a\":\"\",\"b\":\"\",\"c\":\"\",\"d\":\"\"},\"jawaban_siswa\":\"C\",\"jawaban_benar\":\"A\",\"is_benar\":false}]');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ZsWqVoZuClf8mYTaPKNLHm8JtedgYSFBtboajEkR', 27, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieEQ0Mmlmc01waW4yMzBiVXdGQTFjcExkenJwaTcyT1RTNEJLek5ncCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9iYWJfMS9wZXRhX2tvbnNlcCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI3O30=', 1782813049);

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_kuis`
--

CREATE TABLE `soal_kuis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pertanyaan` text NOT NULL,
  `jenis_kuis` varchar(255) NOT NULL,
  `pilihan_a` varchar(255) NOT NULL,
  `pilihan_b` varchar(255) NOT NULL,
  `pilihan_c` varchar(255) NOT NULL,
  `pilihan_d` varchar(255) NOT NULL,
  `jawaban_benar` char(1) NOT NULL,
  `tanggal_dibuat` timestamp NOT NULL DEFAULT current_timestamp(),
  `tanggal_diperbarui` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `soal_kuis`
--

INSERT INTO `soal_kuis` (`id`, `pertanyaan`, `jenis_kuis`, `pilihan_a`, `pilihan_b`, `pilihan_c`, `pilihan_d`, `jawaban_benar`, `tanggal_dibuat`, `tanggal_diperbarui`, `created_at`, `updated_at`) VALUES
(86, 'Dalam suatu keluarga besar, terdapat kelompok yang disebut “anak-anak”, “orang tua”, dan “cucu”. Setiap kelompok berisi orang-orang tertentu yang bisa disebut dengan jelas siapa saja anggotanya.\r\nKelompok semacam itu dalam matematika disebut …', 'Kuis 1', 'Kumpulan orang yang dipilih secara acak tanpa aturan tertentu', 'Kumpulan individu yang tidak dapat ditentukan secara pasti', 'Kumpulan anggota yang berubah tergantung waktu', 'Kumpulan objek yang dapat diidentifikasi secara jelas dan pasti berdasarkan sifat tertentu', 'D', '2026-01-26 08:23:53', '2026-01-26 08:23:53', '2026-01-26 00:23:53', '2026-01-26 00:23:53'),
(87, 'Seorang guru menuliskan di papan tulis:\r\nA = {apel, jeruk, mangga},\r\nB = {buah yang manis},\r\nC = {buah yang warna kulitnya merah}.\r\nDari ketiga contoh tersebut, manakah yang tidak dapat disebut sebagai himpunan?', 'Kuis 1', 'Himpunan A', 'Himpunan B', 'Himpunan C', 'Semua termasuk himpunan', 'B', '2026-01-26 08:24:53', '2026-01-26 08:24:53', '2026-01-26 00:24:53', '2026-01-26 00:24:53'),
(88, 'Suatu sekolah memiliki kelompok siswa yang gemar menari, kelompok siswa yang gemar menggambar, dan kelompok siswa yang gemar bermain musik.\r\nJika semua kelompok ini dapat disebutkan nama anggotanya dengan jelas, maka keseluruhan kelompok tersebut dapat digambarkan menggunakan …', 'Kuis 1', 'Diagram batang', 'Diagram lingkaran', 'Diagram Venn', 'Diagram kartesius', 'C', '2026-01-26 08:25:57', '2026-01-26 08:25:57', '2026-01-26 00:25:57', '2026-01-26 00:25:57'),
(89, 'Himpunan semesta dari kegiatan di sekolah mencakup semua siswa dan semua jenis kegiatan yang diikuti.\r\nMengapa himpunan semesta penting dalam pembahasan himpunan?', 'Kuis 1', 'Karena menunjukkan kelompok terkecil', 'Karena berisi anggota yang tidak diketahui', 'Karena hanya berisi anggota yang sama', 'Karena berisi semua anggota yang dibicarakan', 'D', '2026-01-26 08:26:57', '2026-01-26 08:26:57', '2026-01-26 00:26:57', '2026-01-26 00:26:57'),
(90, 'Jika S = {1, 2, 3, 4, 5, 6} dan A = {2, 4, 6}, maka yang merupakan komplemen A adalah …', 'Kuis 1', '{2, 4, 6}', '{1, 3, 5}', '{1, 2, 3, 4, 5, 6}', '{5, 6}', 'B', '2026-01-26 08:27:55', '2026-01-26 08:27:55', '2026-01-26 00:27:55', '2026-01-26 00:27:55'),
(91, 'Seorang siswa mengelompokkan jenis hewan menjadi “hewan berkaki empat”, “hewan yang hidup di air”, dan “hewan yang bisa terbang”.\r\nJika ia menggambar tiga lingkaran yang saling beririsan, apa makna bagian yang beririsan antara dua lingkaran?', 'Kuis 1', 'Hewan yang memiliki dua sifat sekaligus', 'Hewan yang tidak memiliki sifat sama sekali', 'Hewan yang termasuk semesta', 'Hewan yang bukan anggota himpunan', 'A', '2026-01-26 08:28:54', '2026-01-26 08:28:54', '2026-01-26 00:28:54', '2026-01-26 00:28:54'),
(92, 'Diketahui himpunan A = {2, 3, 5, 7, 11}.\r\nPernyataan yang benar adalah …', 'Kuis 1', '4 ∈ A', '7 ∈ A', '2 ∉ A', '5 ∉ A', 'B', '2026-01-26 08:30:07', '2026-01-26 08:30:07', '2026-01-26 00:30:07', '2026-01-26 00:30:07'),
(93, 'Dalam sebuah penelitian, siswa mengelompokkan data responden ke dalam “pengguna internet aktif” dan “pengguna internet pasif”.\r\nMengapa pengelompokan tersebut dapat disebut himpunan?', 'Kuis 1', 'Karena jumlah anggotanya tidak tetap', 'Karena anggota-anggotanya dapat diidentifikasi secara pasti', 'Karena berisi data yang berubah setiap hari', 'Karena hanya mencakup sebagian kecil responden', 'B', '2026-01-26 08:31:10', '2026-01-26 08:31:10', '2026-01-26 00:31:10', '2026-01-26 00:31:10'),
(94, 'Himpunan kosong ditulis dengan lambang …', 'Kuis 1', '0', '{}', 'Ø', 'A', 'C', '2026-01-26 08:31:54', '2026-01-26 08:31:54', '2026-01-26 00:31:54', '2026-01-26 00:31:54'),
(95, 'Seseorang ingin membuat diagram Venn untuk menunjukkan hubungan antara siswa yang menyukai matematika dan siswa yang menyukai sains.\r\nLangkah pertama yang seharusnya ia lakukan adalah …', 'Kuis 1', 'Menentukan anggota himpunan semesta terlebih dahulu', 'Menggambar dua lingkaran secara acak', 'Menentukan warna untuk setiap himpunan', 'Menulis semua nama tanpa urutan', 'A', '2026-01-26 08:32:55', '2026-01-26 08:32:55', '2026-01-26 00:32:55', '2026-01-26 00:32:55'),
(96, 'Di sebuah kafe, empat teman masing-masing memesan menu yang berbeda. Hubungan antara nama teman dan menu yang dipesan disebut …', 'Kuis 2', 'Himpunan', 'Relasi', 'Kodomain', 'Fungsi', 'B', '2026-01-26 08:34:21', '2026-01-26 08:34:21', '2026-01-26 00:34:21', '2026-01-26 00:34:21'),
(97, 'Relasi dari himpunan A ke B dapat digambarkan dengan berbagai cara.\r\nJika relasi tersebut ingin diperlihatkan secara visual dengan tanda panah dari anggota A ke anggota B, maka digunakan …', 'Kuis 2', 'Diagram batang', 'Diagram kartesius', 'Diagram Panah', 'Diagram garis', 'C', '2026-01-26 08:35:27', '2026-01-26 08:35:27', '2026-01-26 00:35:27', '2026-01-26 00:35:27'),
(98, 'Seorang siswa menulis relasi “menyukai” antara dua himpunan berikut:\r\nA = {Andi, Rina, Laila} dan B = {Lontong, Soto, Mie}.\r\nJika relasi R = {(Andi, Soto), (Rina, Lontong)}, maka domain dari relasi tersebut adalah …', 'Kuis 2', '{Andi, Rina}', '{Lontong, Soto}', '{Rina, Laila}', '{Soto, Mie}', 'A', '2026-01-26 08:36:27', '2026-01-26 08:36:27', '2026-01-26 00:36:27', '2026-01-26 00:36:27'),
(99, 'Mengapa relasi disebut sebagai “hubungan antara dua himpunan”?', 'Kuis 2', 'Karena setiap anggota A dapat berpasangan dengan anggota B', 'Karena hanya satu anggota A yang punya pasangan', 'Karena A dan B selalu sama', 'Karena A dan B tidak memiliki kesamaan', 'A', '2026-01-26 08:37:43', '2026-01-26 08:37:43', '2026-01-26 00:37:43', '2026-01-26 00:37:43'),
(100, 'Seorang siswa mengamati tinggi badan teman-temannya di kelas.\r\nIa menemukan ada beberapa siswa yang memiliki tinggi badan sama.\r\nHubungan antara dua siswa yang memiliki tinggi badan sama menunjukkan bahwa...', 'Kuis 2', 'Hanya satu siswa yang berhubungan dengan siswa lain', 'Tidak menunjukkan adanya hubungan apa pun', 'Termasuk hubungan yang tidak pastid. Relasi searah', 'Kedua siswa saling berhubungan karena memiliki kesamaan sifat', 'D', '2026-01-26 08:39:08', '2026-01-26 08:39:08', '2026-01-26 00:39:08', '2026-01-26 00:39:08'),
(101, 'Relasi antara “nama siswa” dan “nomor absen” termasuk jenis relasi yang …', 'Kuis 2', 'Satu ke banyak', 'Banyak ke satu', 'Satu ke satu', 'Tidak berpasangan', 'C', '2026-01-26 08:40:01', '2026-01-26 08:40:01', '2026-01-26 00:40:01', '2026-01-26 00:40:01'),
(102, 'Jika relasi “memesan” dari A = {Aldi, Bima, Citra} ke B = {Soto, Mie, Lontong}, maka pasangan kebalikannya (inverse) adalah …', 'Kuis 2', '{(Soto, Aldi), (Mie, Bima), (Lontong, Citra)}', '{(Aldi, Soto), (Bima, Mie), (Citra, Lontong)}', '{(Aldi, Mie), (Bima, Soto)}', '{(Citra, Soto), (Bima, Lontong)}', 'A', '2026-01-26 08:41:13', '2026-01-26 08:41:13', '2026-01-26 00:41:13', '2026-01-26 00:41:13'),
(103, 'Dalam kehidupan nyata, relasi berguna untuk …', 'Kuis 2', 'Membandingkan warna', 'Menghitung luas bidang', 'Mengurutkan bilangan prima', 'Menunjukkan hubungan antar dua kelompok data', 'D', '2026-01-26 08:42:28', '2026-01-26 08:42:28', '2026-01-26 00:42:28', '2026-01-26 00:42:28'),
(104, 'Dalam relasi antara “produk” dan “harga”, seorang siswa salah menuliskan dua harga untuk produk yang sama.\r\nApa yang sebaiknya dilakukan?', 'Kuis 2', 'Membiarkannya karena tetap termasuk relasi', 'Menghapus satu pasangan agar datanya jelas', 'Mengganti produknya', 'Menghapus semua relasi', 'B', '2026-01-26 08:43:30', '2026-01-26 08:43:30', '2026-01-26 00:43:30', '2026-01-26 00:43:30'),
(105, 'Jika dalam suatu relasi terdapat anggota domain yang tidak memiliki pasangan di kodomain, maka dapat disimpulkan bahwa …', 'Kuis 2', 'Relasi tersebut belum lengkap karena ada anggota yang belum berpasangan', 'Relasi tersebut sudah termasuk fungsi', 'Relasi tersebut menjadi simetris', 'Relasi tersebut tidak dapat digambarkan dengan diagram panah', 'A', '2026-01-26 08:44:33', '2026-01-26 08:44:33', '2026-01-26 00:44:33', '2026-01-26 00:44:33'),
(106, 'Dalam sebuah parkiran, setiap kendaraan memiliki satu nomor tiket yang berbeda.\r\nHubungan antara kendaraan dan nomor tiket disebut …', 'Kuis 3', 'Relasi', 'Fungsi', 'Korespondensi', 'Kodomain', 'B', '2026-01-29 20:57:06', '2026-01-29 20:57:06', '2026-01-29 12:57:06', '2026-01-29 12:57:06'),
(107, 'Jika fungsi f(x) = 3000x menyatakan biaya parkir Rp3.000 per jam, maka biaya untuk 5 jam adalah …', 'Kuis 3', 'Rp12.000', 'Rp16.000', 'Rp15.000', 'Rp18.000', 'C', '2026-01-29 20:58:18', '2026-01-29 20:58:18', '2026-01-29 12:58:18', '2026-01-29 12:58:18'),
(108, 'Mengapa hubungan antara “lama parkir” dan “biaya parkir” disebut fungsi?', 'Kuis 3', 'Karena biaya parkir berubah-ubah tanpa aturan', 'Karena setiap kendaraan membayar dengan nilai berbeda', 'Karena domain dan kodomain tidak berhubungan', 'Karena setiap lama parkir berpasangan dengan satu biaya tertentu', 'D', '2026-01-29 20:59:29', '2026-01-29 20:59:29', '2026-01-29 12:59:29', '2026-01-29 12:59:29'),
(109, 'Diketahui fungsi f(x) = 45000x yang menyatakan harga ikan per kilogram.\r\nJika berat ikan 4 kg, maka harga totalnya adalah …', 'Kuis 3', '90.000', '120.000', '180.000', '225.000', 'C', '2026-01-29 21:00:50', '2026-01-29 21:00:50', '2026-01-29 13:00:50', '2026-02-24 05:40:14'),
(110, 'Jika satu ikan memiliki dua harga berbeda tergantung ukuran, maka hubungan itu …', 'Kuis 3', 'Tetap fungsi', 'Bukan fungsi', 'Fungsi linear', 'Fungsi konstan', 'B', '2026-01-29 21:01:54', '2026-01-29 21:01:54', '2026-01-29 13:01:54', '2026-02-22 04:12:33'),
(111, 'Grafik fungsi linear f(x) = 2000x akan berbentuk …', 'Kuis 3', 'Garis lurus naik', 'Kurva menurun', 'Garis mendatar', 'Titik-titik acak', 'A', '2026-01-29 21:03:32', '2026-01-29 21:03:32', '2026-01-29 13:03:32', '2026-02-22 04:14:13'),
(112, 'Perhatikan data berikut:\r\n\r\nJika berat barang 1 kg, maka harganya Rp20.000.\r\nJika berat barang 2 kg, maka harganya Rp40.000.\r\nJika berat barang 3 kg, maka harganya Rp60.000.\r\n\r\nFungsi yang sesuai dengan hubungan antara berat barang (x) dan harga adalah …', 'Kuis 3', 'f(x) = 40.000x', 'f(x) = 20.000x', 'f(x) = 30.000x', 'f(x) = x + 20.000', 'B', '2026-01-29 21:04:42', '2026-01-29 21:04:42', '2026-01-29 13:04:42', '2026-02-22 04:22:39'),
(113, 'Mengapa fungsi sering digunakan dalam kehidupan sehari-hari?', 'Kuis 3', 'Untuk menggambarkan hubungan sebab-akibat dengan pasti', 'Untuk menunjukkan kelompok acak', 'Karena mudah digambar', 'Karena hanya berlaku di sekolah', 'A', '2026-01-29 21:05:57', '2026-01-29 21:05:57', '2026-01-29 13:05:57', '2026-02-22 04:17:22'),
(114, 'Dalam fungsi f(x)=45000x, variabel x disebut …', 'Kuis 3', 'Nilai Fungsi', 'Kodomain', 'Range', 'Domain', 'D', '2026-01-29 21:07:19', '2026-01-29 21:07:19', '2026-01-29 13:07:19', '2026-02-22 04:18:33'),
(115, 'Dalam sebuah lomba, setiap peserta memperoleh satu nomor dada yang berbeda, dan tidak ada nomor yang digunakan dua kali.\r\nHubungan ini termasuk …', 'Kuis 4', 'Fungsi ganda', 'Korespondensi satu-satu', 'Relasi biasa', 'Fungsi banyak ke satu', 'B', '2026-01-29 21:08:33', '2026-01-29 21:08:33', '2026-01-29 13:08:33', '2026-01-29 13:08:33'),
(116, 'Jika terdapat 4 siswa dan 4 jenis hadiah berbeda, maka banyak cara untuk memasangkan setiap siswa dengan satu hadiah adalah …', 'Kuis 4', '8', '12', '16', '24', 'D', '2026-01-29 21:09:15', '2026-01-29 21:09:15', '2026-01-29 13:09:15', '2026-01-29 13:09:15'),
(117, 'Ciri-ciri korespondensi satu-satu yang benar adalah …', 'Kuis 4', 'Setiap anggota A berpasangan dengan tepat satu anggota B, dan sebaliknya', 'Setiap anggota A berpasangan dengan dua anggota B', 'Hanya sebagian anggota A memiliki pasangan', 'Semua anggota B berpasangan dengan anggota A yang sama', 'A', '2026-01-29 21:10:36', '2026-01-29 21:10:36', '2026-01-29 13:10:36', '2026-01-29 13:10:36'),
(118, 'Dalam sebuah pameran, setiap stan dijaga oleh satu petugas yang berbeda. Tidak ada petugas yang menjaga dua stan sekaligus.\r\nHubungan antara “petugas” dan “stan” termasuk …', 'Kuis 4', 'Relasi biasa', 'Korespondensi satu-satu', 'Relasi banyak ke satu', 'Fungsi acak', 'B', '2026-01-29 21:11:41', '2026-01-29 21:11:41', '2026-01-29 13:11:41', '2026-01-29 13:11:41'),
(119, 'Jika n(A) = 5 dan n(B) = 5, maka banyaknya korespondensi satu-satu dari A ke B adalah …', 'Kuis 4', '10', '25', '60', '120', 'D', '2026-01-29 21:12:28', '2026-01-29 21:12:28', '2026-01-29 13:12:28', '2026-01-29 13:12:28'),
(120, 'Mengapa korespondensi satu-satu disebut fungsi khusus?', 'Kuis 4', 'Karena setiap anggota domain dan kodomain memiliki pasangan tunggal', 'Karena semua anggota domain berpasangan ganda', 'Karena domain lebih banyak dari kodomain', 'Karena semua pasangan berbeda bentuk', 'A', '2026-01-29 21:13:38', '2026-01-29 21:13:38', '2026-01-29 13:13:38', '2026-01-29 13:13:38'),
(121, 'Dalam kegiatan budaya daerah, setiap alat musik tradisional hanya berasal dari satu daerah tertentu, dan setiap daerah memiliki satu alat musik khas.\r\nHubungan tersebut merupakan contoh …', 'Kuis 4', 'Fungsi banyak ke satu', 'Relasi bebas', 'Korespondensi satu-satu', 'Himpunan bagian', 'C', '2026-01-29 21:14:50', '2026-01-29 21:14:50', '2026-01-29 13:14:50', '2026-01-29 13:14:50'),
(122, 'Jika dua himpunan memiliki jumlah anggota yang tidak sama, maka korespondensi satu-satu …', 'Kuis 4', 'Tetap bisa dibuat', 'Tidak dapat dibuat', 'Bisa sebagian saja', 'Dapat dibuat dengan pengulangan', 'B', '2026-01-29 21:15:55', '2026-01-29 21:15:55', '2026-01-29 13:15:55', '2026-01-29 13:15:55'),
(123, 'Seseorang mengatakan bahwa setiap siswa memiliki satu nomor induk dan setiap nomor induk hanya dimiliki satu siswa.\r\nPernyataan ini menggambarkan …', 'Kuis 4', 'Relasi bebas', 'Fungsi banyak ke satu', 'Korespondensi satu-satu', 'Himpunan kosong', 'C', '2026-01-29 21:17:06', '2026-01-29 21:17:06', '2026-01-29 13:17:06', '2026-01-29 13:17:06'),
(124, 'Buatlah contoh lain dari kehidupan di sekolah yang menunjukkan hubungan korespondensi satu-satu!', 'Kuis 4', 'Siswa dan nomor absen', 'Siswa dan warna kesukaan', 'Siswa dan tempat duduk di kelas', 'a dan c benar', 'D', '2026-01-29 21:18:39', '2026-01-29 21:18:39', '2026-01-29 13:18:39', '2026-01-29 13:18:39'),
(125, 'Seorang siswa membuat grafik hubungan antara “jumlah loyang kue” dan “harga total”.\r\nApa yang dapat ia simpulkan dari grafik tersebut?', 'Kuis 3', 'Harga total selalu meningkat seiring bertambahnya jumlah loyang', 'Harga total berubah secara acak', 'Garis grafik menurun setiap pembelian bertambah', 'Tidak ada hubungan antara harga dan jumlah Loyang', 'A', '2026-02-22 12:05:30', '2026-02-22 12:05:30', '2026-02-22 04:05:30', '2026-02-22 04:05:30'),
(126, 'Seorang guru menuliskan di papan tulis:\r\nA = {hari Senin, hari Selasa, hari Rabu}.\r\nPernyataan yang tepat tentang himpunan A adalah …', 'Evaluasi', 'Kumpulan hari yang tidak pasti anggotanya', 'Kumpulan objek yang dapat disebutkan dengan jelas dan pasti', 'Kumpulan benda yang berubah setiap waktu', 'Kumpulan anggota yang tidak memiliki kesamaan sifat', 'B', '2026-02-22 12:25:43', '2026-02-22 12:25:43', '2026-02-22 04:25:43', '2026-02-22 04:25:43'),
(127, 'Dalam sebuah perpustakaan, terdapat daftar buku yang dikategorikan sebagai “Buku Cerita Rakyat Kalimantan”.\r\nSemua buku di kategori itu memiliki tema dan asal daerah yang sama, dan judulnya dapat disebutkan satu per satu.\r\nBerdasarkan deskripsi tersebut, kelompok “Buku Cerita Rakyat Kalimantan” dapat disebut sebagai …', 'Evaluasi', 'Relasi karena menghubungkan buku dan pengarang', 'Fungsi karena setiap buku memiliki satu pengarang', 'Korespondensi satu-satu karena jumlah buku dan pengarang sama', 'Himpunan karena anggotanya dapat ditentukan dengan jelas', 'D', '2026-02-22 12:27:18', '2026-02-22 12:27:18', '2026-02-22 04:27:18', '2026-02-22 04:27:18'),
(128, 'Hubungan antara dua himpunan, misalnya siswa dan makanan yang mereka pilih di kantin, disebut …', 'Evaluasi', 'Fungsi', 'Korespondensi', 'Relasi', 'Range', 'C', '2026-02-22 12:28:35', '2026-02-22 12:28:35', '2026-02-22 04:28:35', '2026-02-22 04:28:35'),
(129, 'Dalam sebuah relasi dari A ke B, anggota A disebut …', 'Evaluasi', 'Domain', 'Kodomain', 'Range', 'Himpunan biasa', 'A', '2026-02-22 12:30:34', '2026-02-22 12:30:34', '2026-02-22 04:30:34', '2026-02-22 04:32:22'),
(130, 'Perhatikan himpunan berikut:\r\nA = {apel, jeruk, mangga}\r\nB = {buah manis, buah asam}\r\nRelasi yang dapat dibuat dari A ke B adalah …', 'Evaluasi', '(apel, buah asam), (jeruk, buah manis)', '(apel, buah manis), (jeruk, buah asam), (mangga, buah manis)', '(apel, jeruk), (mangga, buah)', '(buah manis, buah asam)', 'B', '2026-02-22 12:34:10', '2026-02-22 12:34:10', '2026-02-22 04:34:10', '2026-02-22 04:34:10'),
(131, 'Fungsi f(x) = 3.000x menyatakan biaya parkir per jam.\r\nJika seseorang memarkir kendaraannya selama 4 jam, maka biaya yang harus dibayar adalah …', 'Evaluasi', 'Rp9.000', 'Rp10.000', 'Rp12.000', 'Rp15.000', 'C', '2026-02-22 12:35:35', '2026-02-22 12:35:35', '2026-02-22 04:35:35', '2026-02-22 04:35:35'),
(132, 'Jika f(x) = 45.000x menyatakan harga ikan per kilogram, maka nilai f(5) adalah …', 'Evaluasi', '200.000', '225.000', '250.000', '300.000', 'B', '2026-02-22 12:36:58', '2026-02-22 12:36:58', '2026-02-22 04:36:58', '2026-02-22 04:36:58'),
(133, 'Diketahui fungsi f(x) = 20.000x menggambarkan harga total kue yang dibeli.\r\nBagaimana bentuk grafik hubungan antara jumlah loyang dan harga total?', 'Evaluasi', 'Garis menurun', 'Kurva melengkung', 'Garis mendatar', 'Garis lurus naik', 'D', '2026-02-22 12:38:29', '2026-02-22 12:38:29', '2026-02-22 04:38:29', '2026-02-22 04:38:29'),
(134, 'Dalam sebuah kelas, relasi antara “nama siswa” dan “nomor absen” merupakan …', 'Evaluasi', 'Himpunan kosong', 'Relasi banyak ke satu', 'Fungsi satu ke satu', 'Relasi bebas', 'C', '2026-02-22 12:39:39', '2026-02-22 12:39:39', '2026-02-22 04:39:39', '2026-02-22 04:39:39'),
(135, 'Jika dalam relasi antara siswa dan warna kesukaan terdapat beberapa siswa yang menyukai warna yang sama, maka hubungan itu …', 'Evaluasi', 'Bukan fungsi', 'Termasuk fungsi', 'Termasuk korespondensi', 'Termasuk himpunan kosong', 'A', '2026-02-22 12:41:11', '2026-02-22 12:41:11', '2026-02-22 04:41:11', '2026-02-22 04:41:11'),
(136, 'Dalam diagram panah, setiap anggota A terhubung ke lebih dari satu anggota B.\r\nPernyataan yang benar adalah …', 'Evaluasi', 'Relasi tersebut disebut fungsi', 'Relasi tersebut bukan fungsi', 'Termasuk korespondensi satu-satu', 'Termasuk relasi bebas', 'B', '2026-02-22 12:42:26', '2026-02-22 12:42:26', '2026-02-22 04:42:26', '2026-02-22 04:42:26'),
(137, 'Dalam Seorang pedagang ikan menjual dagangannya dengan harga tetap Rp45.000 per kilogram.\r\nKetika pembeli membeli ikan seberat 1 kg, harganya Rp45.000.\r\nJika membeli 2 kg menjadi Rp90.000, dan 3 kg menjadi Rp135.000.\r\nDari hubungan antara berat ikan dan harga tersebut, dapat disimpulkan bahwa …', 'Evaluasi', 'Harga berubah secara tidak menentu', 'Harga menurun setiap penambahan berat', 'Tidak ada hubungan antara berat dan harga', 'Harga bertambah secara tetap setiap kenaikan berat yang sama', 'D', '2026-02-22 12:45:10', '2026-02-22 12:45:10', '2026-02-22 04:45:10', '2026-02-22 04:45:10'),
(138, 'Jika suatu relasi memiliki jumlah anggota domain dan kodomain sama, dan setiap anggota domain berpasangan dengan satu anggota kodomain, maka relasi tersebut disebut …', 'Evaluasi', 'Fungsi konstan', 'Relasi bebas', 'Korespondensi satu-satu', 'Relasi tak lengkap', 'C', '2026-02-22 12:46:16', '2026-02-22 12:46:16', '2026-02-22 04:46:16', '2026-02-22 04:46:16'),
(139, 'Dalam kegiatan proyek, guru memasangkan setiap siswa dengan satu tugas berbeda.\r\nNamun ada dua siswa yang mengerjakan tugas yang sama. Agar menjadi korespondensi satu-satu, guru sebaiknya …', 'Evaluasi', 'Membiarkan dua siswa berbagi tugas', 'Menambah satu tugas baru agar setiap siswa memiliki tugas berbeda', 'Menghapus satu siswa dari proyek', 'Memberikan tugas yang sama ke semua siswa', 'B', '2026-02-22 12:47:19', '2026-02-22 12:47:19', '2026-02-22 04:47:19', '2026-02-22 04:47:19'),
(140, 'Dalam relasi “memesan menu di kantin”, beberapa siswa belum memiliki pasangan menu.\r\nKesimpulan yang tepat adalah …', 'Evaluasi', 'Relasi sudah lengkap', 'Termasuk fungsi linear', 'Termasuk korespondensi satu-satu', 'Relasi belum lengkap karena ada anggota tanpa pasangan', 'D', '2026-02-22 12:49:09', '2026-02-22 12:49:09', '2026-02-22 04:49:09', '2026-02-22 04:49:09'),
(141, 'Seseorang membuat fungsi f(x) = 45.000x, tetapi saat menggambar grafik ia menghubungkan titik (1, 40.000) dan (2, 90.000).\r\nKesalahan yang dilakukan adalah …', 'Evaluasi', 'Nilai f(1) dan f(2) tidak sesuai rumus fungsi', 'Grafik seharusnya naik lurus dari (0, 0)', 'Nilai domain tidak sesuai kodomain', 'Fungsi tersebut bukan linear', 'A', '2026-02-22 12:50:19', '2026-02-22 12:50:19', '2026-02-22 04:50:19', '2026-02-22 04:50:19'),
(142, 'Buatlah contoh hubungan di sekolah yang merupakan fungsi!', 'Evaluasi', 'Siswa dan nomor absen', 'Siswa dan warna kesukaan', 'Siswa dan makanan favorit', 'Siswa dan tempat duduk yang berganti setiap hari', 'A', '2026-02-22 12:51:17', '2026-02-22 12:51:17', '2026-02-22 04:51:17', '2026-02-22 04:51:17'),
(143, 'Seorang siswa ingin menggambar diagram Venn antara “siswa yang menyukai olahraga” dan “siswa yang menyukai musik”.\r\nBagian irisan dari dua lingkaran menunjukkan …', 'Evaluasi', 'Siswa yang hanya suka olahraga', 'Siswa yang tidak suka keduanya', 'Siswa yang hanya suka music', 'Siswa yang suka keduanya', 'D', '2026-02-22 12:52:40', '2026-02-22 12:52:40', '2026-02-22 04:52:40', '2026-02-22 04:52:40'),
(144, 'Misalkan terdapat 4 siswa dan 4 hadiah berbeda.\r\nSetiap siswa mendapat satu hadiah yang unik.\r\nHubungan antara siswa dan hadiah termasuk …', 'Evaluasi', 'Fungsi banyak ke satu', 'Relasi tidak lengkap', 'Korespondensi satu-satu', 'Fungsi acak', 'C', '2026-02-22 12:53:57', '2026-02-22 12:53:57', '2026-02-22 04:53:57', '2026-02-22 04:53:57'),
(145, 'Jika kamu diminta membuat grafik fungsi f(x)=3.000x yang menunjukkan biaya parkir, maka sumbu-x dan sumbu-y berturut-turut menunjukkan …', 'Evaluasi', 'Lama parkir dan biaya yang dibayar', 'Biaya dan lama parkir', 'Biaya dan jumlah kendaraan', 'Jumlah kendaraan dan biaya', 'A', '2026-02-22 12:55:06', '2026-02-22 12:55:06', '2026-02-22 04:55:06', '2026-02-22 04:55:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('siswa','guru') NOT NULL DEFAULT 'siswa',
  `kelas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `nim`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `kelas`) VALUES
(23, 'juhai', '12345', '$2y$12$fliZB2Y/EUkIjcTRyFFgh.q5NI6VU94bYtjz3Si6DwKdHdNONI2hy', NULL, '2026-01-11 03:09:16', '2026-01-11 03:09:16', 'guru', NULL),
(27, 'Juhai', '0102', '$2y$12$.KUyaT.MGSGeTrPyKltm5.Jdo38aKZo6doCHDxJCt15FpUioxFdXa', NULL, '2026-05-11 05:47:53', '2026-05-11 11:04:34', 'siswa', 'kelas ibu juhai'),
(28, 'CICI', '0103', '$2y$12$YTBYiCS.x0M4OH/0FcJxeuMIKTocIRGfDlcGGTG20ZW8dMu5FkTSS', NULL, '2026-05-11 06:45:41', '2026-05-11 06:45:41', 'guru', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `kkm`
--
ALTER TABLE `kkm`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `soal_kuis`
--
ALTER TABLE `soal_kuis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT untuk tabel `kkm`
--
ALTER TABLE `kkm`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT untuk tabel `soal_kuis`
--
ALTER TABLE `soal_kuis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  ADD CONSTRAINT `nilai_siswa_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
