-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 06:16 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaksin`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `no_reg` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password2` varchar(255) NOT NULL,
  `gambar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `no_antrian` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `jam` varchar(20) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tgl` date NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `no_reg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_faskes` int(11) NOT NULL,
  `jam` varchar(20) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `nama_faskes` varchar(30) NOT NULL,
  `jenis_vaksin` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_faskes`, `jam`, `hari`, `nama_faskes`, `jenis_vaksin`) VALUES
(3, '08.00 - 11.00', 'Senin - Jumat', 'Puskesmas Moyudan', 'Pfizer'),
(4, '08.00 - 11.00', 'Senin - Jumat', 'Puskesmas Godean', 'Moderna'),
(5, '08.00 - 11.00', 'Senin - Jumat', 'Puskesmas Minggir', 'Astrazeneca'),
(6, '08.00 - 11.00', 'Senin - Jumat', 'Puskesmas Seyegan', 'Sinovac'),
(7, '08.00 - 11.00', 'Senin - Jumat', 'Puskesmas Ngaglik', 'Pfizer'),
(8, '08.00 - 11.00', 'Senin - Jumat', 'Puskesmas Depok', 'Astrazeneca'),
(9, '08.00 - 11.00', 'Senin - Jumat', 'Puskesmas Kalasan', 'Sinovac'),
(10, '08.00 - 11.00', 'Senin - Jumat', 'Puskesmas Turi', 'Pfizer'),
(11, '08.00 - 11.00', 'Senin - Jumat', 'Puskesmas Berbah', 'Moderna'),
(12, '08.00 - 11.00', 'Senin - Jumat', 'Puskesmas Pakem', 'Sinovac');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `NIK` varchar(16) NOT NULL,
  `no_reg` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `umur` varchar(2) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`no_reg`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`no_antrian`),
  ADD KEY `no_reg` (`no_reg`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_faskes`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`NIK`),
  ADD KEY `no_reg` (`no_reg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `no_reg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `no_antrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_faskes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `no_reg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
