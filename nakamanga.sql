-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Sep 2019 pada 03.26
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nakamanga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `chapter`
--

CREATE TABLE `chapter` (
  `id` int(10) UNSIGNED NOT NULL,
  `komik_id` int(11) DEFAULT NULL,
  `ch` int(11) DEFAULT NULL,
  `link_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `chapter`
--

INSERT INTO `chapter` (`id`, `komik_id`, `ch`, `link_file`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 7, 1, 'link chapter 1', 2, '2019-09-11 08:32:47', '2019-09-11 08:32:47'),
(4, 7, 2, 'link chapter 2', 2, '2019-09-11 08:32:58', '2019-09-11 08:32:58'),
(5, 7, 3, 'link chapter 3', 2, '2019-09-11 08:33:10', '2019-09-11 08:33:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id` int(10) UNSIGNED NOT NULL,
  `chapter_id` int(11) NOT NULL,
  `nama_gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id`, `chapter_id`, `nama_gambar`, `created_at`, `updated_at`) VALUES
(6, 3, '1568217025_3-chap1.jpg', '2019-09-11 08:50:25', '2019-09-11 08:50:25'),
(7, 3, '1568217035_3-chap2.jpg', '2019-09-11 08:50:35', '2019-09-11 08:50:35'),
(8, 3, '1568217046_3-chap3.jpg', '2019-09-11 08:50:46', '2019-09-11 08:50:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `genre`
--

CREATE TABLE `genre` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `genre`
--

INSERT INTO `genre` (`id`, `nama_genre`, `created_at`, `updated_at`) VALUES
(3, 'Action', '2019-09-10 21:30:44', '2019-09-10 21:30:44'),
(4, 'Adventure', '2019-09-10 21:30:51', '2019-09-10 21:30:51'),
(5, 'Romance', '2019-09-10 21:31:28', '2019-09-10 21:31:28'),
(6, 'Comedy', '2019-09-10 21:31:55', '2019-09-10 21:31:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `genre_komik`
--

CREATE TABLE `genre_komik` (
  `id` int(10) UNSIGNED NOT NULL,
  `komik_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `genre_komik`
--

INSERT INTO `genre_komik` (`id`, `komik_id`, `genre_id`, `created_at`, `updated_at`) VALUES
(8, 7, 3, '2019-09-10 21:32:54', '2019-09-10 21:32:54'),
(9, 7, 4, '2019-09-10 21:32:54', '2019-09-10 21:32:54'),
(10, 7, 6, '2019-09-10 21:32:54', '2019-09-10 21:32:54'),
(11, 8, 5, '2019-09-10 21:34:01', '2019-09-10 21:34:01'),
(12, 9, 3, '2019-09-10 21:34:24', '2019-09-10 21:34:24'),
(13, 9, 4, '2019-09-10 21:34:25', '2019-09-10 21:34:25'),
(14, 10, 4, '2019-09-10 21:34:47', '2019-09-10 21:34:47'),
(15, 11, 6, '2019-09-10 21:35:04', '2019-09-10 21:35:04'),
(16, 12, 3, '2019-09-10 21:35:28', '2019-09-10 21:35:28'),
(17, 12, 6, '2019-09-10 21:35:28', '2019-09-10 21:35:28'),
(18, 13, 6, '2019-09-10 21:35:56', '2019-09-10 21:35:56'),
(19, 14, 3, '2019-09-10 21:36:23', '2019-09-10 21:36:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komik`
--

CREATE TABLE `komik` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul_komik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinopsis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ongoing','completed') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year(4) DEFAULT NULL,
  `cover` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `komik`
--

INSERT INTO `komik` (`id`, `judul_komik`, `sinopsis`, `author`, `status`, `tahun`, `cover`, `created_at`, `updated_at`) VALUES
(7, 'One Piece', 'Petualangan menjadi raja bajak laut', 'Eiichiro Oda', 'ongoing', 1999, '1568176373One Piece-cover1.jpg', '2019-09-10 21:32:54', '2019-09-10 21:32:54'),
(8, 'A', 'AA', 'AAA', 'ongoing', 2000, '1568176441A-cover2.jpg', '2019-09-10 21:34:01', '2019-09-10 21:34:01'),
(9, 'B', 'BB', 'BBB', 'ongoing', 2001, '1568176464B-cover3.png', '2019-09-10 21:34:24', '2019-09-10 21:34:24'),
(10, 'C', 'CC', 'CCC', 'ongoing', 2002, '1568176487C-cover2.png', '2019-09-10 21:34:47', '2019-09-10 21:34:47'),
(11, 'D', 'DD', 'DDD', 'ongoing', 2003, '1568176504D-cover4.jpg', '2019-09-10 21:35:04', '2019-09-10 21:35:04'),
(12, 'E', 'EE', 'EEE', 'ongoing', 2004, '1568176528E-cover5.png', '2019-09-10 21:35:28', '2019-09-10 21:35:28'),
(13, 'F', 'FF', 'FFF', 'ongoing', 2005, '1568176556F-cover6.jpg', '2019-09-10 21:35:56', '2019-09-10 21:35:56'),
(14, 'G', 'GG', 'GGG', 'ongoing', 2006, '1568176583G-cover7.jpg', '2019-09-10 21:36:23', '2019-09-10 21:36:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2019_08_30_022010_create_users_table', 1),
(9, '2019_08_30_024138_create_komik_table', 1),
(10, '2019_08_30_150146_create_genre_table', 1),
(11, '2019_08_30_150415_create_komik_genre_table', 1),
(12, '2019_08_30_150838_create_chapter_table', 1),
(13, '2019_08_30_151914_create_gambar_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ADMIN', 'admin@admin.com', NULL, '$2y$10$kt4Bfql4MQzIYt3duxHxp.HGW.Hy7izNQVoacnFfoY4pn3ZZqo1sW', 'ESaXNdfJxQdXuWVNZXuB9X93nI0YGmMRXo1b1vlq4x5UvCK23YRuNv5kkCPu', '2019-08-30 08:26:08', '2019-08-30 08:26:08'),
(2, 'Iqbal', 'iqbal@bal.com', NULL, '$2y$10$IIsFRCQ2FbXeLgqy2Phl.Otjzg95VT1o8X6YIXwRl25pAmM8vwGfq', NULL, '2019-09-01 05:59:58', '2019-09-01 05:59:58'),
(3, 'Irin', 'irinsmile@gmail.com', NULL, '$2y$10$q7kf3agLaPQ/e7ioyE1ipud49WGpCXOSgtg3rroncOwjy27e4l9pi', NULL, '2019-09-03 23:46:18', '2019-09-03 23:46:18');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `genre_komik`
--
ALTER TABLE `genre_komik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komik`
--
ALTER TABLE `komik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT untuk tabel `chapter`
--
ALTER TABLE `chapter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `genre_komik`
--
ALTER TABLE `genre_komik`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `komik`
--
ALTER TABLE `komik`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
