-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 07, 2022 at 10:26 AM
-- Server version: 5.7.33-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `LatihanCI`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `no_induk_mahasiswa` char(8) NOT NULL,
  `nama_mahasiswa` varchar(150) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `program_studi` enum('Sistem Informasi S1','Teknik Informatika S1','Akuntansi S1','Manajemen S1','Pendidikan Matematika','Pendidikan Ekonomi','Kehutanan','Ilmu Hukum') NOT NULL,
  `tgl_berita_acara` date NOT NULL,
  `no_berita_acara` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`no_induk_mahasiswa`, `nama_mahasiswa`, `jenis_kelamin`, `program_studi`, `tgl_berita_acara`, `no_berita_acara`) VALUES
('20112101', 'M. Ridwan Farhan', 'Laki-laki', 'Teknik Informatika S1', '2014-01-12', 'BA.01/PPA/I/2015'),
('20122101', 'Abiq Sabiqul Khoir', 'Laki-laki', 'Teknik Informatika S1', '2015-03-13', 'BA.02/PPA/III/2015'),
('20122102', 'Rika Widianingsih', 'Perempuan', 'Teknik Informatika S1', '2015-04-16', 'BA.03/PPA/IV/2015'),
('20132101', 'Zaki Nur Fatah', 'Laki-laki', 'Akuntansi S1', '2015-04-07', 'BA.04/PPA/IV/2015');

-- --------------------------------------------------------

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`no_induk_mahasiswa`);
