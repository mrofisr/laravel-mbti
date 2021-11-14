-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 14, 2021 at 09:52 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mbti`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_09_19_091817_create_questions_table', 1),
(7, '2021_09_19_091924_create_reports_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pertanyaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban_satu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban_dua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_satu` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_dua` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `pertanyaan`, `jawaban_satu`, `jawaban_dua`, `type_satu`, `type_dua`) VALUES
(1, 'Kamu adalah tipikal orang yang?', 'Spontan, Fleksibel, tidak diikat waktu', 'Terencana dan memiliki deadline jelas', 'P', 'J'),
(2, 'Kamu adalah tipikal orang yang?', 'Lebih memilih berkomunikasi dengan menulis', 'Lebih memilih berkomunikasi dengan bicara', 'I', 'E'),
(3, 'Kamu adalah tipikal orang yang?', 'Tidak menyukai hal-hal yang bersifat mendadak dan di luar perencanaan', 'Perubahan mendadak tidak jadi masalah', 'J', 'P'),
(4, 'Kamu adalah tipikal orang yang?', 'Obyektif', 'Subyektif', 'T', 'F'),
(5, 'Kamu adalah tipikal orang yang?', 'Menemukan dan mengembangkan ide dengan mendiskusikannya', 'Menemukan dan mengembangkan ide dengan merenungkan', 'E', 'I'),
(6, 'Kamu adalah tipikal orang yang?', 'Bergerak dari gambaran umum baru ke detail', 'Bergerak dari detail ke gambaran umum sebagai kesimpulan akhir', 'N', 'S'),
(7, 'Kamu adalah tipikal orang yang?', 'Berorientasi pada dunia eksternal (kegiatan, orang)', 'Berorientasi pada dunia internal (memori, pemikiran, ide)', 'E', 'I'),
(8, 'Kamu adalah tipikal orang yang?', 'Berbicara mengenai masalah yang dihadapi hari ini dan langkah-langkah praktis mengatasinya', 'Berbicara mengenai visi masa depan dan konsep-konsep mengenai visi tersebut', 'S', 'N'),
(9, 'Kamu adalah tipikal orang yang?', 'Diyakinkan dengan penjelasan yang menyentuh perasaan', 'Diyakinkan dengan penjelasan yang masuk akal', 'F', 'T'),
(10, 'Kamu adalah tipikal orang yang?', 'Fokus pada sedikit hobi namun mendalam', 'Fokus pada banyak hobi secara luas dan umum', 'I', 'E'),
(11, 'Kamu adalah tipikal orang yang?', 'Tertutup dan mandiri', 'Sosial dan ekspresif', 'I', 'E'),
(12, 'Kamu adalah tipikal orang yang?', 'Aturan, jadwal dan target sangat mengikat dan membebani', 'Aturan, jadwal dan target akan sangat membantu dan memperjelas tindakan', 'P', 'J'),
(13, 'Kamu adalah tipikal orang yang?', 'Menggunakan pengalaman sebagai pedoman', 'Menggunakan imajinasi dan perenungan sebagai pedoman', 'S', 'N'),
(14, 'Kamu adalah tipikal orang yang?', 'Berorientasi tugas dan job description', 'Berorientasi pada manusia dan hubungan', 'T', 'F'),
(15, 'Kamu adalah tipikal orang yang?', 'Pertemuan dengan orang lain dan aktivitas sosial melelahkan', 'Bertemu orang dan aktivitas sosial membuat bersemangat', 'I', 'E'),
(16, 'Kamu adalah tipikal orang yang?', 'SOP sangat membantu', 'SOP sangat membosankan', 'S', 'N'),
(17, 'Kamu adalah tipikal orang yang?', 'Mengambil keputusan berdasar logika dan aturan main', 'Mengambil keputusan berdasar perasaan pribadi dan kondisi orang lain', 'T', 'F'),
(18, 'Kamu adalah tipikal orang yang?', 'Bebas dan dinamis', 'Prosedural dan tradisional', 'N', 'S'),
(19, 'Kamu adalah tipikal orang yang?', 'Berorientasi pada hasil', 'Berorientasi pada proses', 'J', 'P'),
(20, 'Kamu adalah tipikal orang yang?', 'Beraktifitas sendirian di rumah menyenangkan', 'Beraktifitas sendirian di rumah membosankan', 'I', 'E'),
(21, 'Kamu adalah tipikal orang yang?', 'Membiarkan orang lain bertindak bebas asalkan tujuan tercapai', 'Mengatur orang lain dengan tata tertib agar tujuan tercapai', 'P', 'J'),
(22, 'Kamu adalah tipikal orang yang?', 'Memilih ide inspiratif lebih penting daripada fakta', 'Memilih fakta lebih penting daripada ide inspiratif', 'N', 'S'),
(23, 'Kamu adalah tipikal orang yang?', 'Mengemukakan tujuan dan sasaran lebih dahulu', 'Mengemukakan kesepakatan terlebih dahulu', 'T', 'F'),
(24, 'Kamu adalah tipikal orang yang?', 'Fokus pada target dan mengabaikan hal-hal baru', 'Memperhatikan hal-hal baru dan siap menyesuaikan diri serta mengubah target', 'J', 'P'),
(25, 'Kamu adalah tipikal orang yang?', 'Kontinuitas dan stabilitas lebih diutamakan', 'Perubahan dan variasi lebih diutamakan', 'S', 'N'),
(26, 'Kamu adalah tipikal orang yang?', 'Pendirian masih bisa berubah tergantung situasi nantinya', 'Berpegang teguh pada pendirian', 'P', 'J'),
(27, 'Kamu adalah tipikal orang yang?', 'Bertindak step by step dengan timeframe yang jelas', 'Bertindak dengan semangat tanpa menggunakan timeframe', 'S', 'N'),
(28, 'Kamu adalah tipikal orang yang?', 'Berinisiatif tinggi hampir dalam berbagai hal meskipun tidak berhubungan dengan dirinya', 'Berinisiatif bila situasi memaksa atau berhubungan dengan kepentingan sendiri', 'E', 'I'),
(29, 'Kamu adalah tipikal orang yang?', 'Lebih memilih tempat yang tenang dan pribadi untuk berkonsentrasi', 'Lebih memilih tempat yang ramai dan banyak interaksi / aktifitas', 'I', 'E'),
(30, 'Kamu adalah tipikal orang yang?', 'Menganalisa', 'Berempati', 'T', 'F'),
(31, 'Kamu adalah tipikal orang yang?', 'Berpikir secara matang sebelum bertindak', 'Berani bertindak tanpa terlalu lama berfikir', 'I', 'E'),
(32, 'Kamu adalah tipikal orang yang?', 'Menghargai seseorang karena sifat dan perilakunya', 'Menghargai seseorang karena skill dan faktor teknis', 'F', 'T'),
(33, 'Kamu adalah tipikal orang yang?', 'Merasa nyaman bila situasi tetap terbuka terhadap pilihan-pilihan lain', 'Merasa tenang bila semua sudah diputuskan', 'P', 'J'),
(34, 'Kamu adalah tipikal orang yang?', 'Menarik kesimpulan dengan lama dan hati-hati', 'menarik kesimpulan dengan cepat sesuai naluri', 'S', 'N'),
(35, 'Kamu adalah tipikal orang yang?', 'Mengekspresikan semangat', 'Menyimpan semangat dalam hati', 'E', 'I'),
(36, 'Kamu adalah tipikal orang yang?', 'Mengklarifikasi ide dan teori sebelum dipraktekkan', 'Memahami ide dan teori saat mempraktekkannya langsung', 'S', 'N'),
(37, 'Kamu adalah tipikal orang yang?', 'Melibatkan perasaan itu tidak profesional', 'Terlalu kaku pada peraturan dan pekerjaan itu kejam', 'T', 'F'),
(38, 'Kamu adalah tipikal orang yang?', 'Mencari kesempatan untuk berkomunikasi secara perorangan', 'Memilih berkomunikasi pada sekelompok orang', 'I', 'E'),
(39, 'Kamu adalah tipikal orang yang?', 'Yang penting situasi harmonis terjaga', 'Yang penting tujuan tercapai', 'F', 'T'),
(40, 'Kamu adalah tipikal orang yang?', 'Ketidakpastian itu seru, menegangkan dan membuat hati lebih senang', 'Ketidakpastian membuat bingung dan meresahkan', 'P', 'J'),
(41, 'Kamu adalah tipikal orang yang?', 'Berfokus pada masa kini (apa yang bisa diperbaiki sekarang)', 'Berfokus pada masa depan (apa yang mungkin dicapai di masa depan)', 'S', 'N'),
(42, 'Kamu adalah tipikal orang yang?', 'Mempertanyakan', 'Mengakomodasi', 'T', 'F'),
(43, 'Kamu adalah tipikal orang yang?', 'Secara konsisten mengamati dan mengingat detail', 'Mengamati dan mengingat detail hanya bila berhubungan dengan pola', 'S', 'N'),
(44, 'Kamu adalah tipikal orang yang?', 'Situasi last minute membuat bersemangat dan memunculkan potensi', 'Situasi last minute sangat menyiksa, membuat stress dan merupakan kesalahan', 'P', 'J'),
(45, 'Kamu adalah tipikal orang yang?', 'Lebih suka komunikasi tidak langsung (telp, surat, e-mail)', 'Lebih suka komunikasi langsung (tatap muka)', 'I', 'E'),
(46, 'Kamu adalah tipikal orang yang?', 'Praktis', 'Konseptual', 'S', 'N'),
(47, 'Kamu adalah tipikal orang yang?', 'Perubahan adalah musuh', 'Perubahan adalah semangat hidup', 'J', 'P'),
(48, 'Kamu adalah tipikal orang yang?', 'Sering dianggap keras kepala', 'Sering dianggap terlalu memihak', 'T', 'F'),
(49, 'Kamu adalah tipikal orang yang?', 'Bersemangat saat menolong orang keluar dari kesalahan dan meluruskan', 'Bersemangat saat mengkritik dan menemukan kesalahan', 'T', 'F'),
(50, 'Kamu adalah tipikal orang yang?', 'Bertindak sesuai situasi dan kondisi yang terjadi saat itu', 'Bertindak sesuai apa yang sudah direncanakan', 'P', 'J'),
(51, 'Kamu adalah tipikal orang yang?', 'Menggunakan keterampilan yang sudah dikuasai', 'Menyukai tantangan untuk menguasai keterampilan baru', 'S', 'N'),
(52, 'Kamu adalah tipikal orang yang?', 'Membangun ide pada saat berbicara', 'Membangun ide dengan matang baru membicarakannya', 'E', 'I'),
(53, 'Kamu adalah tipikal orang yang?', 'Memilih cara yang sudah ada dan sudah terbukti', 'Memilih cara yang unik dan belum dipraktekkan orang lain', 'S', 'N'),
(54, 'Kamu adalah tipikal orang yang?', 'Hidup harus sudah diatur dari awal', 'Hidup seharusnya mengalir sesuai kondisi', 'J', 'P'),
(55, 'Kamu adalah tipikal orang yang?', 'Standar harus ditegakkan di atas segalanya (itu menunjukkan kehormatan dan harga diri)', 'Perasaan manusia lebih penting dari sekadar standar (yang adalah benda mati)', 'T', 'F'),
(56, 'Kamu adalah tipikal orang yang?', 'Daftar dan checklist adalah panduan penting', 'Daftar dan checklist adalah tugas dan beban', 'J', 'P'),
(57, 'Kamu adalah tipikal orang yang?', 'Menuntut perlakuan yang adil dan sama pada semua orang', 'Menuntut perlakuan khusus sesuai karakteristik masing-masing orang', 'T', 'F'),
(58, 'Kamu adalah tipikal orang yang?', 'Mementingkan sebab-akibat', 'Mementingkan nilai-nilai personal', 'T', 'F'),
(59, 'Kamu adalah tipikal orang yang?', 'Puas ketika mampu beradaptasi dengan momentum yang terjadi', 'Puas ketika mampu menjalankan semuanya sesuai rencana', 'P', 'J'),
(60, 'Kamu adalah tipikal orang yang?', 'Spontan, Easy Going, fleksibel', 'Berhati-hati, penuh pertimbangan, kaku', 'E', 'I');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `P` int(11) NOT NULL,
  `I` int(11) NOT NULL,
  `J` int(11) NOT NULL,
  `T` int(11) NOT NULL,
  `E` int(11) NOT NULL,
  `N` int(11) NOT NULL,
  `S` int(11) NOT NULL,
  `F` int(11) NOT NULL,
  `result` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `nama`, `P`, `I`, `J`, `T`, `E`, `N`, `S`, `F`, `result`, `created_at`, `updated_at`) VALUES
(44, 'ROFI', 60, 53, 40, 33, 47, 80, 20, 67, 'INFP', '2021-11-14 02:32:00', '2021-11-14 02:32:00'),
(45, 'ROFI', 60, 53, 40, 33, 47, 80, 20, 67, 'INFP', '2021-11-14 02:42:40', '2021-11-14 02:42:40'),
(46, 'ROFI', 60, 53, 40, 33, 47, 80, 20, 67, 'INFP', '2021-11-14 02:42:47', '2021-11-14 02:42:47'),
(47, 'ROFI', 60, 53, 40, 33, 47, 80, 20, 67, 'INFP', '2021-11-14 02:43:20', '2021-11-14 02:43:20'),
(48, 'ROFI', 60, 53, 40, 33, 47, 80, 20, 67, 'INFP', '2021-11-14 02:44:18', '2021-11-14 02:44:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$IB5nZyuIrmU11.coovQDp.qxTo2YgXGUfJ/AdSBnn39YWRq2/ljQu', NULL, '2021-10-17 01:15:57', '2021-10-17 01:15:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
