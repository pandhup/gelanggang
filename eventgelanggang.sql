# Host: localhost  (Version 5.5.5-10.1.28-MariaDB)
# Date: 2018-05-29 19:16:40
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "poster"
#

DROP TABLE IF EXISTS `poster`;
CREATE TABLE `poster` (
  `id_poster` int(11) NOT NULL AUTO_INCREMENT,
  `nama_poster` varchar(255) DEFAULT NULL,
  `id_event` int(11) DEFAULT NULL,
  `alamat_poster` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_poster`),
  KEY `id_event` (`id_event`),
  CONSTRAINT `poster_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "poster"
#


#
# Structure for table "ukm"
#

DROP TABLE IF EXISTS `ukm`;
CREATE TABLE `ukm` (
  `id_ukm` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ukm` varchar(255) NOT NULL,
  PRIMARY KEY (`id_ukm`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

#
# Data for table "ukm"
#

INSERT INTO `ukm` VALUES (1,'panahan'),(2,'upi'),(3,'basket'),(4,'futsal'),(5,'voli'),(6,'badminton'),(7,'mapagama'),(8,'fotografi');

#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `role` enum('superadmin','admin','member') DEFAULT 'member',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_ukm` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_ukm` (`id_ukm`),
  CONSTRAINT `users_ibfk_2` FOREIGN KEY (`id_ukm`) REFERENCES `ukm` (`id_ukm`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (1,'pandhu@gmail.com','$2y$10$.TLqCnD1Mi5aJ0GkQl9.nOPFwQdyE4VSskeclfamIGmC5ORdxQhyq','Pandhu','superadmin','BVnCs94i49sKznHsjgVIH1TwA9V71slN9C5twrv1v12L39gVuxM71iUSIIEF','2018-05-08 13:41:51','2018-05-08 13:41:51',NULL),(2,'marsel@gmail.com','$2y$10$HQF0XXrcjmprvuUi9AyJeu8CH6EerdPNc5fDCsn51F8bH/4eoomei','Marsel','admin','N7aiIe6Z22NdFZxyNj4XVxDErCj7J9jAYiSEh9vrQGaTvpGsFVjzdlsSkcVt','2018-05-08 13:42:59','2018-05-08 13:42:59',NULL),(3,'hasby@gmail.com','$2y$10$s4xfBMRXKRkiSZK1lMPvO.IO3e9WUHcu62w5aed1U5zmpmbtJV.m.','Hasby','member','hvDCDEqXnE6Irrj5Jn144woZZoFqv8i5mgNhdeLbONFIIKwztsTxYfntJder','2018-05-08 13:43:21','2018-05-08 13:43:21',4),(4,'achis@gmail.com','$2y$10$XnTN11z2l.C2NhQi4v4b7.ovPQ5MyJFDgY5QSo0m9fe1khQP4jo/.','Achis','member','QqTK2rV2G88VTNnb1wxlyE0NZfFv6l2aPVAqSixdV5iUOtdAhm0javEnajHj','2018-05-12 09:15:17','2018-05-12 09:15:17',3),(6,'zaldy@mail.com','$2y$10$t2M/Rb.gXrvAlIcMIlIKReUQyQDLiMW5/qtuRJvC.Tz0goL/x0dyO','zaldy','admin',NULL,'2018-05-20 07:41:38','2018-05-20 07:41:38',NULL),(7,'eldy@mail.com','$2y$10$ba4NHCxZiYiHK7XqXaRjWeObcshaDWIePLVVkcTKgUupcOXQYcQ7u','eldy','admin',NULL,'2018-05-20 07:47:09','2018-05-20 07:47:09',NULL),(9,'eldi@gmail.com','$2y$10$tWuCCAFxqSBxHP/VWY9NpuCdBHfkUkk8yDXzHTViNEdTXmrO07gJ6','Eldi','admin',NULL,'2018-05-20 13:53:07','2018-05-20 13:53:07',NULL),(12,'izul@gmail.com','$2y$10$5sGfMC/z/pcPekzGlZtMjeGk64wiIGASqZQ3pYl3CKbol8Byf986q','izul','admin',NULL,'2018-05-27 12:04:57','2018-05-27 12:04:57',NULL);

#
# Structure for table "event"
#

DROP TABLE IF EXISTS `event`;
CREATE TABLE `event` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `deskripsi` varchar(2550) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL,
  `status` enum('belumverif','ditolak','direvisi','dibatalkan','berlangsung','selesai') NOT NULL,
  `id_user_member` int(11) NOT NULL,
  `id_user_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_event`),
  KEY `id_user` (`id_user_member`),
  KEY `id_user_admin` (`id_user_admin`),
  CONSTRAINT `event_ibfk_1` FOREIGN KEY (`id_user_member`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `event_ibfk_2` FOREIGN KEY (`id_user_admin`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "event"
#

