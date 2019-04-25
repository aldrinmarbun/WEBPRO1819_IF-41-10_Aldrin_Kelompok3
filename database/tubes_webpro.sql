-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 06:47 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_webpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_pkl`
--

CREATE TABLE `calon_pkl` (
  `id_pkl` int(11) NOT NULL,
  `nama_sekolah` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `lampiran` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `kode_pos` varchar(5) NOT NULL,
  `mulai` date NOT NULL,
  `selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon_pkl`
--

INSERT INTO `calon_pkl` (`id_pkl`, `nama_sekolah`, `email`, `alamat_sekolah`, `lampiran`, `password`, `no_hp`, `kode_pos`, `mulai`, `selesai`) VALUES
(1, 'SMK Telkom Bandung', 'stematelbandung@gmail.com', 'Jl.Telekomunikasi No.1 Bandung', 'doc1.docx', 'password', '081313335835', '40255', '2019-04-24', '2019-04-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_pkl`
--
ALTER TABLE `calon_pkl`
  ADD PRIMARY KEY (`id_pkl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_pkl`
--
ALTER TABLE `calon_pkl`
  MODIFY `id_pkl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
