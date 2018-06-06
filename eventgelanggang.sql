-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06 Jun 2018 pada 09.26
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventgelanggang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id_event` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `deskripsi` varchar(2550) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL,
  `status` enum('belumverif','ditolak','direvisi','dibatalkan','berlangsung','selesai') NOT NULL,
  `id_user_member` int(11) NOT NULL,
  `id_user_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id_event`, `nama`, `tanggal_mulai`, `tanggal_selesai`, `deskripsi`, `lokasi`, `kontak`, `status`, `id_user_member`, `id_user_admin`) VALUES
(1, 'bukber', '2018-06-02', '2018-06-03', 'Makan minum', 'Hal GP', '08123456789', 'belumverif', 3, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `poster`
--

CREATE TABLE `poster` (
  `id_poster` int(11) NOT NULL,
  `nama_poster` varchar(255) DEFAULT NULL,
  `id_event` int(11) DEFAULT NULL,
  `alamat_poster` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ukms`
--

CREATE TABLE `ukms` (
  `id_ukm` int(11) NOT NULL,
  `nama_ukm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ukms`
--

INSERT INTO `ukms` (`id_ukm`, `nama_ukm`) VALUES
(1, 'panahan'),
(2, 'upi'),
(3, 'basket'),
(4, 'futsal'),
(5, 'voli'),
(6, 'badminton'),
(7, 'mapagama'),
(8, 'fotografi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(22) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `role` enum('superadmin','admin','member') DEFAULT 'member',
  `foto` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `role`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'pandhu@gmail.com', '$2y$10$.TLqCnD1Mi5aJ0GkQl9.nOPFwQdyE4VSskeclfamIGmC5ORdxQhyq', 'Pandhu', 'superadmin', NULL, 'oMpaZjLoqTLJVIEwMO4I38zSYmomwzzPMzZgyOdjd91ELPMD9hTBk27L4RD5', '2018-05-08 06:41:51', '2018-05-08 06:41:51'),
(2, 'marsel@gmail.com', '$2y$10$HQF0XXrcjmprvuUi9AyJeu8CH6EerdPNc5fDCsn51F8bH/4eoomei', 'Marsell', 'admin', '1.jpg', 'fthk9La2LGo1wR1POMWgT7se4V1KFchrtUSfoTZa5PYhPzW63xMWmZ1EvcAS', '2018-05-08 06:42:59', '2018-06-05 00:56:58'),
(3, 'hasby@gmail.com', '$2y$10$s4xfBMRXKRkiSZK1lMPvO.IO3e9WUHcu62w5aed1U5zmpmbtJV.m.', 'futsal', 'member', 'img.jpg', 'jwqfOVUP9LBAChbnnUSFUlXadVV0SwiV76HoSbsmLq73Bcqniux3g4VioQHE', '2018-05-08 06:43:21', '2018-06-06 00:14:11'),
(4, 'achis@gmail.com', '$2y$10$XnTN11z2l.C2NhQi4v4b7.ovPQ5MyJFDgY5QSo0m9fe1khQP4jo/.', 'voli', 'member', NULL, '4ZuMctAg0PRUSiWGJ8UDWq30CK8Pff5gHMsPrv4ZBycBuJVXXjyzPRUc4auZ', '2018-05-12 02:15:17', '2018-05-12 02:15:17'),
(6, 'zaldy@mail.com', '$2y$10$t2M/Rb.gXrvAlIcMIlIKReUQyQDLiMW5/qtuRJvC.Tz0goL/x0dyO', 'zaldy', 'admin', 'kerbau lokal.jpg', NULL, '2018-05-20 00:41:38', '2018-06-05 03:02:08'),
(9, 'eldi@gmail.com', '$2y$10$tWuCCAFxqSBxHP/VWY9NpuCdBHfkUkk8yDXzHTViNEdTXmrO07gJ6', 'Eldi', 'admin', 'img.jpg', NULL, '2018-05-20 06:53:07', '2018-06-06 00:22:04'),
(53, 'izul@gmail.com', '$2y$10$1BqSQ0VQdY.0Qoo9TH0BpeFOtHWgxAlxEmaJ7uMMl/pDCvzcFA9Aq', 'izul', 'admin', 'kerbau bule.jpg', NULL, '2018-06-03 08:41:55', '2018-06-03 08:41:55'),
(54, 'afif@gmail.com', '$2y$10$PbqKpKDYFdirMgFxq7uw4OY8us2G/V.pGRjsxC..7W0WMALhPW0ze', 'afif', 'admin', '9.jpg', NULL, '2018-06-03 08:48:34', '2018-06-03 08:48:34'),
(57, 'basket@gmail.com', '$2y$10$17pqmX.BtzEoSbrziXdOyOSPOqLuilPzQimumuCqnKql4YcFEL406', 'basket', 'member', NULL, NULL, '2018-06-04 05:36:52', '2018-06-04 05:36:52'),
(58, 'budi@gmail.com', '$2y$10$pFOIYQUCajQW78ah0T6/2uGUC/GogLziqsFpLSLGAZLztA3pmSOFG', 'budi', 'admin', '5.jpg', NULL, '2018-06-04 11:26:56', '2018-06-04 21:03:16'),
(59, 'badminton@gmail.com', '$2y$10$pAdwPKbjsGC.CcE8CQ/7GueSbDhPUD1rVh0jF26iOJtAgixUka6Gm', 'badminton', 'member', '8.jpg', NULL, '2018-06-04 11:29:32', '2018-06-04 11:29:32'),
(64, 'alvis@gmail.com', '$2y$10$9jY758RJ5pKETYY/IMwPA.0Rrd0AZ7q.idGLMKtxH4I9pAbd074aa', 'alvis', 'admin', '050618.jpg', NULL, '2018-06-05 04:47:50', '2018-06-05 04:47:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `id_user` (`id_user_member`),
  ADD KEY `id_user_admin` (`id_user_admin`);

--
-- Indexes for table `poster`
--
ALTER TABLE `poster`
  ADD PRIMARY KEY (`id_poster`),
  ADD KEY `id_event` (`id_event`);

--
-- Indexes for table `ukms`
--
ALTER TABLE `ukms`
  ADD PRIMARY KEY (`id_ukm`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `poster`
--
ALTER TABLE `poster`
  MODIFY `id_poster` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ukms`
--
ALTER TABLE `ukms`
  MODIFY `id_ukm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`id_user_member`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `events_ibfk_2` FOREIGN KEY (`id_user_admin`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `poster`
--
ALTER TABLE `poster`
  ADD CONSTRAINT `poster_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `events` (`id_event`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
