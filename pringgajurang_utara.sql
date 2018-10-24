-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2018 at 06:45 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pringgajurang_utara`
--

-- --------------------------------------------------------

--
-- Table structure for table `apbds`
--

CREATE TABLE `apbds` (
  `id` int(10) UNSIGNED NOT NULL,
  `tahun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urlgambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apbds`
--

INSERT INTO `apbds` (`id`, `tahun`, `urlgambar`, `created_at`, `updated_at`) VALUES
(1, '2018', '/storage/0001.jpg', '2018-10-19 22:02:10', '2018-10-19 22:02:10'),
(2, '2018', '/storage/0002.jpg', '2018-10-19 22:02:10', '2018-10-19 22:02:10'),
(3, '2018', '/storage/0003.jpg', '2018-10-19 22:02:10', '2018-10-19 22:02:10'),
(4, '2018', '/storage/0004.jpg', '2018-10-19 22:02:10', '2018-10-19 22:02:10'),
(5, '2018', '/storage/0005.jpg', '2018-10-19 22:02:10', '2018-10-19 22:02:10'),
(6, '2018', '/storage/0006.jpg', '2018-10-19 22:02:10', '2018-10-19 22:02:10'),
(7, '2018', '/storage/0007.jpg', '2018-10-19 22:02:10', '2018-10-19 22:02:10'),
(8, '2018', '/storage/0008.jpg', '2018-10-19 22:02:10', '2018-10-19 22:02:10'),
(9, '2018', '/storage/0009.jpg', '2018-10-19 22:02:10', '2018-10-19 22:02:10'),
(10, '2018', '/storage/0010.jpg', '2018-10-19 22:02:10', '2018-10-19 22:02:10');

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` int(10) UNSIGNED NOT NULL,
  `judulberita` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `urlgambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `judulberita`, `deskripsi`, `urlgambar`, `created_at`, `updated_at`) VALUES
(8, 'judul_berita 2', 'isi berita 2', '/storage/43375252_2158358707720665_4993470445962395648_o.jpg', '2018-10-18 21:04:07', '2018-10-18 21:04:07'),
(9, 'judul_berita 3', 'isi berita 3', '/storage/department-clipart-transparent-6.png', '2018-10-18 21:04:35', '2018-10-18 21:04:35'),
(10, 'judul_berita212', 'berita 212', '/storage/images.jpg', '2018-10-19 01:10:32', '2018-10-19 01:10:32'),
(11, 'Sosialisasikan Pondok Pesantren Tahfiz Qu’an Al Fatah Pedekik, Masyarakat Bikin Kenduri', 'Bengkalis – Dalam rangka menghidupkan syi’ar agama Islam dan mengembangkan Pendidikan Ilmu Agama, masyarakat Desa Pedekik telah mendirikan Lembaga Pendidikan Pondok Pesantren Tahfiz Al Qur’an AL FATAH Cabang dari Magetan Jawa Timur.\r\n\r\nPembukaan Ponpes yang berlokasi di Belakang Musholla Ihsaniyah Dusun II itu disosialisasikan kepada masyarakat Desa Pedekik dan sekitarnya dengan mengadakan kenduri dan syukuran yag diadakan pada Jum’at malam Sabtu (21/09/2018).\r\n\r\nTampak hadir pada malam kenduri tersebut Kepala Desa Pedekik Drs. Jansuar, Sekdes dan tokoh-tokoh masyarakat serta sesepuh Desa. Tidak lupa juga tentunya lapisan masyarakat dari Dusun I, II dan Dusun III Pedekik.\r\n\r\nUstazd Makhrus selaku penggagas sosialisasi Ponpes Al Fatah ini menyampaikan banyak terima kasih kepada semua lapisan masyarakat karena sudi hadir memenuhi undangan tersebut.\r\n\r\n“Acara kita malam hari ini merupakan silaturrahiem sesama masyarakat. Sekaligus kami ingin menyampaikan bahwa di desa kita sekarang sudah ada Pondok Pesantren Tahfiz Qur’an yang merupakan cabang dari Pondok Pesantren Al Fatah Temboro, Magetan Jawa Timur,” terang nya.\r\n\r\nUstadz yang pernah mengadakan perjalanan dakwah hingga ke Korea dan Turki ini juga memberitahukan bahwa cabang-cabang Ponpes Al Fatah Temboro ini sudah banyak tersebar di seluruh Indonesia.\r\n\r\n“Ada sekitar 120-an lebih cabang Pondok Temboro ini diseluruh Indonesia. Dan salah satunya adalah di desa kita ini. Jadi sebagai masyarakat yang peduli tehadap pendidikan agama anak-anak kita kelak, mari kita sama-sama majukan pondok kita ini. Paling tidak kita memberikan dukungan secara moril,” lanjut ustadz lulusan S1 ini.\r\n\r\nDalam kesempatan kenduri itu juga diisi dengan tausiyah agama yang disampaikan oleh Ustadz Ghufronuddin alias ustadz Salamun. Dimana beliau baru saja kembali ke kampung halaman setelah melakukan perjalanan safari dakwah selama lebih kurang 9 bulan. Baik ke luar negeri maupun di dalam negeri.\r\n\r\nSetelah acara pembacaan tahlil dan do’a usai, acara kenduri di akhiri dengan makan jamuan bersama hidangan roti canai dan gulai kambing yang dimasak oleh pemuda-pemuda Musholla Ihsaniyyah Dusun II Pedekik. (pdk)', '/storage/download.jpg', '2018-10-19 04:12:29', '2018-10-19 04:12:29');

-- --------------------------------------------------------

--
-- Table structure for table `jmlpends`
--

CREATE TABLE `jmlpends` (
  `id` int(10) UNSIGNED NOT NULL,
  `wilayah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jmlpends`
--

INSERT INTO `jmlpends` (`id`, `wilayah`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'wonosobo', '123', '2018-10-20 19:38:08', '2018-10-20 19:38:08'),
(2, 'sikur', '900', '2018-10-20 19:51:31', '2018-10-20 19:51:31');

-- --------------------------------------------------------

--
-- Table structure for table `lembagas`
--

CREATE TABLE `lembagas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urlgambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_10_14_050951_organisasis', 1),
(4, '2018_10_14_051036_prokers', 1),
(5, '2018_10_14_051053_agendas', 1),
(6, '2018_10_18_123702_tabel_lembaga', 2),
(7, '2018_10_18_142116_tabelberita', 3),
(8, '2018_10_18_142117_tabelberita', 4),
(9, '2018_10_18_215433_tabelpengumuman', 5),
(10, '2018_10_18_221841_tabelpengumumandesa', 6),
(11, '2018_10_20_024126_tabeldata_apbds', 7),
(12, '2018_10_20_052055_tabeldata_rkp', 8),
(13, '2018_10_20_052141_tabeldata_rpjm', 8),
(14, '2018_10_20_093514_tabeljmlpend', 9),
(15, '2018_10_20_093630_tabelstatpendidikanpend', 9),
(16, '2018_10_20_093707_tabelstatpekerjaanpend', 9),
(17, '2018_10_20_093757_tabelstatetnispend', 9),
(18, '2018_10_20_093836_tabelstatagamapend', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengumumandesas`
--

CREATE TABLE `pengumumandesas` (
  `id` int(10) UNSIGNED NOT NULL,
  `judulpengumuman` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `urlgambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengumumandesas`
--

INSERT INTO `pengumumandesas` (`id`, `judulpengumuman`, `deskripsi`, `urlgambar`, `created_at`, `updated_at`) VALUES
(1, 'judul_pengumuman', 'lkajflajhfajlfafafaf', '/storage/152571-200.png', '2018-10-18 14:21:15', '2018-10-19 01:18:25'),
(2, 'judul_pengumuman2', 'flashfjkashgjhaslkghlkasgasg', '/storage/3f20030623adb3f666c91eb1360d70be.jpg', '2018-10-18 15:26:04', '2018-10-18 15:26:04');

-- --------------------------------------------------------

--
-- Table structure for table `rkps`
--

CREATE TABLE `rkps` (
  `id` int(10) UNSIGNED NOT NULL,
  `tahun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urlgambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rkps`
--

INSERT INTO `rkps` (`id`, `tahun`, `urlgambar`, `created_at`, `updated_at`) VALUES
(1, '2018', '/storage/0003.jpg', '2018-10-19 21:45:19', '2018-10-19 21:45:19'),
(2, '2018', '/storage/0004.jpg', '2018-10-19 21:45:19', '2018-10-19 21:45:19'),
(3, '2018', '/storage/0005.jpg', '2018-10-19 21:45:19', '2018-10-19 21:45:19');

-- --------------------------------------------------------

--
-- Table structure for table `rpjms`
--

CREATE TABLE `rpjms` (
  `id` int(10) UNSIGNED NOT NULL,
  `tahun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urlgambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rpjms`
--

INSERT INTO `rpjms` (`id`, `tahun`, `urlgambar`, `created_at`, `updated_at`) VALUES
(1, '2018', '/storage/0007.jpg', '2018-10-19 21:44:47', '2018-10-19 21:44:47'),
(2, '2018', '/storage/0008.jpg', '2018-10-19 21:44:48', '2018-10-19 21:44:48'),
(3, '2018', '/storage/0009.jpg', '2018-10-19 21:44:48', '2018-10-19 21:44:48'),
(4, '2018', '/storage/0010.jpg', '2018-10-19 21:44:48', '2018-10-19 21:44:48');

-- --------------------------------------------------------

--
-- Table structure for table `statagamapends`
--

CREATE TABLE `statagamapends` (
  `id` int(10) UNSIGNED NOT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wanita` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statagamapends`
--

INSERT INTO `statagamapends` (`id`, `agama`, `pria`, `wanita`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'islam', '100', '100', '200', '2018-10-20 20:18:08', '2018-10-20 20:20:43');

-- --------------------------------------------------------

--
-- Table structure for table `statetnispends`
--

CREATE TABLE `statetnispends` (
  `id` int(10) UNSIGNED NOT NULL,
  `etnis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wanita` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statetnispends`
--

INSERT INTO `statetnispends` (`id`, `etnis`, `pria`, `wanita`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'sasak', '300', '900', '1200', '2018-10-20 19:57:21', '2018-10-20 19:57:21');

-- --------------------------------------------------------

--
-- Table structure for table `statpekerjaanpends`
--

CREATE TABLE `statpekerjaanpends` (
  `id` int(10) UNSIGNED NOT NULL,
  `pekerjaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wanita` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statpekerjaanpends`
--

INSERT INTO `statpekerjaanpends` (`id`, `pekerjaan`, `pria`, `wanita`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'petani', '100', '100', '200', '2018-10-20 19:56:38', '2018-10-20 19:56:38');

-- --------------------------------------------------------

--
-- Table structure for table `statpendidikanpends`
--

CREATE TABLE `statpendidikanpends` (
  `id` int(10) UNSIGNED NOT NULL,
  `pendidikan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wanita` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statpendidikanpends`
--

INSERT INTO `statpendidikanpends` (`id`, `pendidikan`, `pria`, `wanita`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'sma', '120', '300', '420', '2018-10-20 19:53:58', '2018-10-20 19:53:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'pringgajurangutara', 'admin@gmail.com', NULL, '$2y$10$nUgJ.jDe8zAcqD4vGAzBRemkVp7PgXdNdStxdjdcGSWDGoy3WYPSa', 'Yt1ycMLwkoDluN2GlikbLb0pdi1aVcW0qro1NYdryDxmgdQ224j4U4R9OY5n', '2018-10-18 02:55:59', '2018-10-18 02:55:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apbds`
--
ALTER TABLE `apbds`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `apbds_id_unique` (`id`);

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `beritas_id_unique` (`id`);

--
-- Indexes for table `jmlpends`
--
ALTER TABLE `jmlpends`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jmlpends_id_unique` (`id`);

--
-- Indexes for table `lembagas`
--
ALTER TABLE `lembagas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lembagas_id_unique` (`id`);

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
-- Indexes for table `pengumumandesas`
--
ALTER TABLE `pengumumandesas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pengumumandesas_id_unique` (`id`);

--
-- Indexes for table `rkps`
--
ALTER TABLE `rkps`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rkps_id_unique` (`id`);

--
-- Indexes for table `rpjms`
--
ALTER TABLE `rpjms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rpjms_id_unique` (`id`);

--
-- Indexes for table `statagamapends`
--
ALTER TABLE `statagamapends`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `statagamapends_id_unique` (`id`);

--
-- Indexes for table `statetnispends`
--
ALTER TABLE `statetnispends`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `statetnispends_id_unique` (`id`);

--
-- Indexes for table `statpekerjaanpends`
--
ALTER TABLE `statpekerjaanpends`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `statpekerjaanpends_id_unique` (`id`);

--
-- Indexes for table `statpendidikanpends`
--
ALTER TABLE `statpendidikanpends`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `statpendidikanpends_id_unique` (`id`);

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
-- AUTO_INCREMENT for table `apbds`
--
ALTER TABLE `apbds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jmlpends`
--
ALTER TABLE `jmlpends`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lembagas`
--
ALTER TABLE `lembagas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pengumumandesas`
--
ALTER TABLE `pengumumandesas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rkps`
--
ALTER TABLE `rkps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rpjms`
--
ALTER TABLE `rpjms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `statagamapends`
--
ALTER TABLE `statagamapends`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `statetnispends`
--
ALTER TABLE `statetnispends`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `statpekerjaanpends`
--
ALTER TABLE `statpekerjaanpends`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `statpendidikanpends`
--
ALTER TABLE `statpendidikanpends`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
