-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 14, 2018 at 08:41 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.14

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
-- Table structure for table `event`
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
-- Table structure for table `poster`
--

CREATE TABLE `poster` (
  `id_poster` int(11) NOT NULL,
  `nama_poster` varchar(255) DEFAULT NULL,
  `id_event` int(11) DEFAULT NULL,
  `alamat_poster` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ukm`
--

CREATE TABLE `ukm` (
  `id_ukm` int(11) NOT NULL,
  `nama_ukm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `role`, `remember_token`, `created_at`, `updated_at`, `id_ukm`) VALUES
(1, 'pandhu@gmail.com', '$2y$10$.TLqCnD1Mi5aJ0GkQl9.nOPFwQdyE4VSskeclfamIGmC5ORdxQhyq', 'Pandhu', 'superadmin', 'cpJzLa5mYP16mpyHGHSSRDW7GbG7X3bNTOBOcd1dFkCuEptT6JUuMf3yv5d4', '2018-05-08 06:41:51', '2018-05-08 06:41:51', NULL),
(2, 'marsel@gmail.com', '$2y$10$HQF0XXrcjmprvuUi9AyJeu8CH6EerdPNc5fDCsn51F8bH/4eoomei', 'Marsel', 'admin', 'LyWOXe2Uu4DdgZ7ZfOMR0VxEiea0DcWN7BtjCjFGKopnprtpezpGsKQgUGC1', '2018-05-08 06:42:59', '2018-05-08 06:42:59', NULL),
(3, 'hasby@gmail.com', '$2y$10$s4xfBMRXKRkiSZK1lMPvO.IO3e9WUHcu62w5aed1U5zmpmbtJV.m.', 'Hasby', 'member', 'AZZgi0MgykyUJvuIDL3DcRmSgctdeXp6RBWISvy560RdCmXRoWkgxd6D1KOb', '2018-05-08 06:43:21', '2018-05-08 06:43:21', NULL),
(4, 'achis@gmail.com', '$2y$10$XnTN11z2l.C2NhQi4v4b7.ovPQ5MyJFDgY5QSo0m9fe1khQP4jo/.', 'Achis', 'member', 'QqTK2rV2G88VTNnb1wxlyE0NZfFv6l2aPVAqSixdV5iUOtdAhm0javEnajHj', '2018-05-12 02:15:17', '2018-05-12 02:15:17', NULL);

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
  MODIFY `id_ukm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`id_user_member`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `event_ibfk_2` FOREIGN KEY (`id_user_admin`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `poster`
--
ALTER TABLE `poster`
  ADD CONSTRAINT `poster_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`id_ukm`) REFERENCES `ukm` (`id_ukm`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
