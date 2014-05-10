-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 25, 2014 at 03:16 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tlpi`
--
CREATE DATABASE IF NOT EXISTS `tlpi` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tlpi`;

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `IdAnggota` int(11) NOT NULL AUTO_INCREMENT,
  `Role` char(1) NOT NULL DEFAULT '0',
  `Username` varchar(20) NOT NULL,
  `Password` varchar(160) NOT NULL,
  `confirmationCode` varchar(255) DEFAULT NULL,
  `Nama` varchar(32) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `Sex` char(1) NOT NULL,
  `Birthdate` date NOT NULL,
  `URLFoto` varchar(200) DEFAULT NULL,
  `Lokasi` varchar(50) NOT NULL,
  `Pekerjaan` varchar(50) NOT NULL,
  `Website` varchar(100) NOT NULL,
  `AboutMe` text NOT NULL,
  PRIMARY KEY (`IdAnggota`),
  UNIQUE KEY `Email` (`Email`),
  UNIQUE KEY `Username` (`Username`),
  KEY `IdAnggota` (`IdAnggota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`IdAnggota`, `Role`, `Username`, `Password`, `confirmationCode`, `Nama`, `Email`, `Sex`, `Birthdate`, `URLFoto`, `Lokasi`, `Pekerjaan`, `Website`, `AboutMe`) VALUES
(1, '0', 'anakhilang', 'ngebolang', NULL, 'Anak Hilang', 'anakhilang@mail.com', 'L', '1993-01-30', NULL, 'Tak Tahu', 'Petualang', 'http://anakhilang.blog.com', ''),
(6, '0', 'tama', 'kudaliar', NULL, '', 'arizqip@gmail.com', '', '0000-00-00', NULL, '', '', '', ''),
(7, '0', 'Dyah Inastra', 'lalala', NULL, '', 'inastrade@gmail.com', '', '0000-00-00', NULL, '', '', '', ''),
(8, '0', 'XW672S', 'lalala', NULL, '', 'dyah.inastra@ui.ac.id', '', '0000-00-00', NULL, '', '', '', ''),
(9, '0', 'Tararara', 'Mananana', NULL, '', 'haha@hihi.com', '', '0000-00-00', NULL, '', '', '', ''),
(10, '0', 'mancingmania', 'mantap', NULL, '', 'mancing@mania.com', '', '0000-00-00', NULL, '', '', '', ''),
(11, '0', 'shantino', '111111', NULL, 'Shanti NO', 'shahajaja@hsjsj.hfh', '', '0000-00-00', NULL, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `fotopublik`
--

CREATE TABLE IF NOT EXISTS `fotopublik` (
  `IdFoto` int(11) NOT NULL AUTO_INCREMENT,
  `FilePath` varchar(500) NOT NULL,
  `IdTaman` int(11) NOT NULL,
  PRIMARY KEY (`IdFoto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `penginapan`
--

CREATE TABLE IF NOT EXISTS `penginapan` (
  `IdTaman` int(10) NOT NULL,
  `IdPenginapan` int(10) NOT NULL,
  `NamaPenginapan` varchar(100) NOT NULL,
  `Lokasi` varchar(100) NOT NULL,
  `NomorKontak` varchar(20) NOT NULL,
  PRIMARY KEY (`IdPenginapan`),
  KEY `IdTaman` (`IdTaman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `IdThread` int(10) NOT NULL AUTO_INCREMENT,
  `IdPost` int(10) NOT NULL,
  `TanggalPost` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Isi` text NOT NULL,
  PRIMARY KEY (`IdPost`),
  KEY `IdThread` (`IdThread`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tamannasional`
--

CREATE TABLE IF NOT EXISTS `tamannasional` (
  `IdTaman` int(10) NOT NULL,
  `NamaTaman` varchar(64) NOT NULL,
  `Provinsi` varchar(32) NOT NULL,
  `Profil` text NOT NULL,
  `Akses` varchar(500) DEFAULT NULL,
  `NomorKontak` varchar(20) DEFAULT NULL,
  `HTM` int(10) DEFAULT NULL,
  `Tips` text,
  `Waktu` varchar(15) NOT NULL,
  `Sarana` text NOT NULL,
  `Aktivitas` text NOT NULL,
  `HalMenarik` text NOT NULL,
  PRIMARY KEY (`IdTaman`),
  KEY `IdTaman` (`IdTaman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tamannasional`
--

INSERT INTO `tamannasional` (`IdTaman`, `NamaTaman`, `Provinsi`, `Profil`, `Akses`, `NomorKontak`, `HTM`, `Tips`, `Waktu`, `Sarana`, `Aktivitas`, `HalMenarik`) VALUES
(1100100003, 'Taman Nasional Bukit Barisan Selatan', 'Bengkulu', 'Taman Nasional ini terletak di tiga provinsi, yaitu Provinsi Lampung, Sumatera Selatan, dan Bengkulu. Di dominasi oleh hutan hujan tropis, wilayah ini menjadi habitat bagi tiga hewan langka, yaitu Gajah Sumatera, Harimau Sumatera, dan Badak Sumatera. ', 'Kantor: Jl. Ir. H. Juanda No. 19 Km 1\r\nTanggamus, Kota Agung 35751', '(0722) 21064', 0, 'Festival Krakatau setiap Bulan Juli di Bandar Lampung dan Festival Danau Ranau setiap Bulan Desember di Oku, Sulawesi Selatan', '', '', '', ''),
(1100200001, 'Taman Nasional Ujung Kulon', 'Banten', 'Terletak di ujung barat Pulau Jawa, taman nasional ini menjadi habitat bagi Badak Jawa. Samudera Indonesia di seb', 'Jl. Perintis Kemerdekaan No.51 Kec. Labuan, Kab. Pandeglang, Provinsi Banten. 42264, Indonesia', '62253801731', 2500, NULL, '', '', '', ''),
(1100200003, 'Taman Nasional Gunung Gede Pangrango', 'Jawa Barat', 'Taman nasional ini selalu ramai di akhir pekan. Menjadi tujuan wisata pendakian gunung bagi masyarakat Jawa Barat. Pengelolaan yang sudah cukup baik membuat masyarakat nyaman berkunjung ke sini.', 'Memiliki 6 pintu wisata, yaitu Cisarua, Gunung Putri, Salabintana, Situ Gunung, Bodogol, dan Cibodas. Dapat ditempuh dalam waktu sekitar', '62263512776', 3000, NULL, '', '', '', ''),
(1100200012, 'Taman Nasional Alas Purwo', 'Jawa Timur', 'Cerita tentang misteri Kerajaan Blambangan yang diduga terletak di kawasan inti menjadi salah satu daya tarik dari taman nasional ini. Selain itu, spot selancar dengan ombak yang menantang di kawasan G-Land menjadi daya tarik bagi peselancar domestik maupun mancanegara.', 'Jl. Brawijaya No. 20 Banyuwangi â€“ 68417 ', '(0333) 410857', 2500, 'Jika ingin mengikuti proses ritual di Pura Luhur Giri Salaka, sebaiknya datang pada bulan-bulan suci umat Hindu dan bulan Suro.', '', '', '', ''),
(1100500001, 'Taman Nasional Lore Lindu', 'Sulawesi Tengah', 'Patung-patung megalith yang tersebar di kawasan Taman Nasional Lore Lindu ini menjadi jejak kebudayaan animisme dan dinamisme ', 'Jl. Prof. Moh Yamin No.53 Palu Sulawesi Tengah (94124)', '(0451) 457623', 0, NULL, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE IF NOT EXISTS `thread` (
  `IdThread` int(10) NOT NULL AUTO_INCREMENT,
  `JudulThread` varchar(100) NOT NULL,
  PRIMARY KEY (`IdThread`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
