-- phpMyAdmin SQL Dump
-- version 
-- http://www.phpmyadmin.net
--
-- Host: 
-- Generation Time: 
-- Server version: 
-- PHP Version: 

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `telusur_pesona_indonesia`
--

-- --------------------------------------------------------

--
-- Table structure for table `Anggota`
--

CREATE TABLE IF NOT EXISTS `Anggota` (
	`IdAnggota` INT(10) NOT NULL AUTO_INCREMENT,
	`Role` CHAR(1) NOT NULL DEFAULT '0',
	`Username` VARCHAR(20) NOT NULL,
	`Password` VARCHAR(16) NOT NULL,
	`Nama` VARCHAR(32) NOT NULL,
	`Email` VARCHAR(32) NOT NULL,
	`Sex` CHAR(1) NOT NULL,
	`Birthdate` DATE NOT NULL,
	`URLFoto` varchar(200) DEFAULT NULL,
	PRIMARY KEY (`IdAnggota`),
	UNIQUE KEY `Email` (`Email`),
	UNIQUE KEY `Username` (`Username`),
	KEY `IdAnggota` (`IdAnggota`)
)

CREATE TABLE IF NOT EXISTS `TamanNasional` (
	`IdTaman` INT(10) NOT NULL,
	`NamaTaman` VARCHAR(64) NOT NULL,
	`Provinsi` VARCHAR(32) NOT NULL,
	PRIMARY KEY (`IdTaman`)
	KEY `IdTaman` (`IdTaman`)
)

INSERT INTO `TamanNasional` (`IdTaman`, `NamaTaman`, `Provinsi`) VALUES
(1, 'Taman Nasional Gede Pangrango', 'Jawa Barat'),
(2, 'Taman Nasional Lore Lindu', 'Sulawesi Tengah'),
(3, 'Taman Nasional Alas Purwo', 'Jawa Timur'),
(4, 'Taman Nasional Ujung Kulon', 'Jawa Barat'),
(5, 'Taman Nasional Bukit Barisan Selatan', 'Bengkulu')

CREATE TABLE IF NOT EXISTS `Penginapan` (
	`IdTaman` INT(10) NOT NULL,
	`IdPenginapan` INT(10) NOT NULL,
	`NamaPenginapan` VARCHAR(100) NOT NULL,
	`Lokasi` VARCHAR(100) NOT NULL,
	`NomorKontak` VARCHAR(20) NOT NULL,
	PRIMARY KEY (`IdPenginapan`),
	KEY `IdTaman` (`IdTaman`)
)

INSERT INTO `Penginapan` (`IdPenginapan`, `NamaPenginapan`, `Lokasi`, `NomorKontak`) VALUES
(1, 1, 'Penginapan Indah', 'Jalan Papandayan 56', '022-98765432'),
(2, 2, 'Penginapan Lore Lindu', 'Jalan Sisingamangaraja 2', '022-98999999'),
(3, 3, 'Penginapan Alas Purwo', 'Jalan Nasution 1', '022-98777777'),
(4, 4, 'Penginapan Ujung Kulon Permai', 'Jalan Raya Ujung 12', '022-98888111'),
(5, 5, 'Penginapan Barisan Indah', 'Jalan Barisan Elok 4', '022-98123442')


CREATE TABLE IF NOT EXISTS `Thread` (
	`IdThread` INT(10) NOT NULL AUTO_INCREMENT,
	`JudulThread` VARCHAR(100) NOT NULL,
	PRIMARY KEY (`IdThread`)
)

CREATE TABLE IF NOT EXISTS `Post` (
	`IdThread` INT(10) NOT NULL AUTO_INCREMENT,
	`IdPost` INT(10) NOT NULL AUTO_INCREMENT,
	`TanggalPost` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`Isi` TEXT NOT NULL,
	PRIMARY KEY (`IdPost`),
	KEY `IdThread` (`IdThread`)
)