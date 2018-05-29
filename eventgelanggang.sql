-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29 Mei 2018 pada 14.25
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
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
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
-- Struktur dari tabel `ukm`
--

CREATE TABLE `ukm` (
  `id_ukm` int(11) NOT NULL,
  `nama_ukm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ukm`
--

INSERT INTO `ukm` (`id_ukm`, `nama_ukm`) VALUES
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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_ukm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `role`, `remember_token`, `created_at`, `updated_at`, `id_ukm`) VALUES
(1, 'pandhu@gmail.com', '$2y$10$.TLqCnD1Mi5aJ0GkQl9.nOPFwQdyE4VSskeclfamIGmC5ORdxQhyq', 'Pandhu', 'superadmin', 'BVnCs94i49sKznHsjgVIH1TwA9V71slN9C5twrv1v12L39gVuxM71iUSIIEF', '2018-05-08 06:41:51', '2018-05-08 06:41:51', NULL),
(2, 'marsel@gmail.com', '$2y$10$HQF0XXrcjmprvuUi9AyJeu8CH6EerdPNc5fDCsn51F8bH/4eoomei', 'Marsel', 'admin', 'N7aiIe6Z22NdFZxyNj4XVxDErCj7J9jAYiSEh9vrQGaTvpGsFVjzdlsSkcVt', '2018-05-08 06:42:59', '2018-05-08 06:42:59', NULL),
(3, 'hasby@gmail.com', '$2y$10$s4xfBMRXKRkiSZK1lMPvO.IO3e9WUHcu62w5aed1U5zmpmbtJV.m.', 'Hasby', 'member', 'hvDCDEqXnE6Irrj5Jn144woZZoFqv8i5mgNhdeLbONFIIKwztsTxYfntJder', '2018-05-08 06:43:21', '2018-05-08 06:43:21', 4),
(4, 'achis@gmail.com', '$2y$10$XnTN11z2l.C2NhQi4v4b7.ovPQ5MyJFDgY5QSo0m9fe1khQP4jo/.', 'Achis', 'member', 'QqTK2rV2G88VTNnb1wxlyE0NZfFv6l2aPVAqSixdV5iUOtdAhm0javEnajHj', '2018-05-12 02:15:17', '2018-05-12 02:15:17', 3),
(6, 'zaldy@mail.com', '$2y$10$t2M/Rb.gXrvAlIcMIlIKReUQyQDLiMW5/qtuRJvC.Tz0goL/x0dyO', 'zaldy', 'admin', NULL, '2018-05-20 00:41:38', '2018-05-20 00:41:38', NULL),
(7, 'eldy@mail.com', '$2y$10$ba4NHCxZiYiHK7XqXaRjWeObcshaDWIePLVVkcTKgUupcOXQYcQ7u', 'eldy', 'admin', NULL, '2018-05-20 00:47:09', '2018-05-20 00:47:09', NULL),
(9, 'eldi@gmail.com', '$2y$10$tWuCCAFxqSBxHP/VWY9NpuCdBHfkUkk8yDXzHTViNEdTXmrO07gJ6', 'Eldi', 'admin', NULL, '2018-05-20 06:53:07', '2018-05-20 06:53:07', NULL),
(12, 'izul@gmail.com', '$2y$10$5sGfMC/z/pcPekzGlZtMjeGk64wiIGASqZQ3pYl3CKbol8Byf986q', 'izul', 'admin', NULL, '2018-05-27 05:04:57', '2018-05-27 05:04:57', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
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
-- Indexes for table `ukm`
--
ALTER TABLE `ukm`
  ADD PRIMARY KEY (`id_ukm`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ukm` (`id_ukm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poster`
--
ALTER TABLE `poster`
  MODIFY `id_poster` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ukm`
--
ALTER TABLE `ukm`
  MODIFY `id_ukm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`id_user_member`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `event_ibfk_2` FOREIGN KEY (`id_user_admin`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `poster`
--
ALTER TABLE `poster`
  ADD CONSTRAINT `poster_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`id_ukm`) REFERENCES `ukm` (`id_ukm`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
