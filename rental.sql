-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2022 at 11:35 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `kendaraantbl`
--

CREATE TABLE `kendaraantbl` (
  `id` int(11) NOT NULL,
  `no_polisi` varchar(12) NOT NULL,
  `nama_kendaraan` varchar(35) NOT NULL,
  `tipe` varchar(2) NOT NULL,
  `warna` varchar(15) NOT NULL,
  `no_rangka` varchar(75) NOT NULL,
  `no_mesin` varchar(75) NOT NULL,
  `bahan_bakar` varchar(10) NOT NULL,
  `thn_kendaraan` int(11) NOT NULL,
  `foto` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kendaraantbl`
--

INSERT INTO `kendaraantbl` (`id`, `no_polisi`, `nama_kendaraan`, `tipe`, `warna`, `no_rangka`, `no_mesin`, `bahan_bakar`, `thn_kendaraan`, `foto`, `status`) VALUES
(1, 'H 1234 A', 'Avanza', 'AT', 'Hitam', '123456789', 'AV-2013-096', 'Bensin', 2013, '', 'Ready'),
(7, 'H', 'Xenia', 'AT', 'Silver', '987654321', 'XN-765-88', 'Bensin', 2019, '', 'Ready'),
(9, 'H 2130 O', 'Avanza', 'AT', 'Silver', '987654321', 'XN-765-88', 'Bensin', 2004, '', 'Ready');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggantbl`
--

CREATE TABLE `pelanggantbl` (
  `id` int(11) NOT NULL,
  `no_ktp` varchar(75) NOT NULL,
  `nama_pelanggan` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `no_sewa` varchar(20) NOT NULL,
  `no_ktp` varchar(25) NOT NULL,
  `no_polisi` varchar(12) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `biaya` int(11) NOT NULL,
  `catatan` text NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`id`, `tanggal`, `no_sewa`, `no_ktp`, `no_polisi`, `tgl_sewa`, `tgl_kembali`, `biaya`, `catatan`, `status`) VALUES
(1, '2022-09-14', '123', '092348293480', 'H 1234 A', '2022-09-01', '2022-09-14', 1000000, 'Baik', 'Ready');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kendaraantbl`
--
ALTER TABLE `kendaraantbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggantbl`
--
ALTER TABLE `pelanggantbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kendaraantbl`
--
ALTER TABLE `kendaraantbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pelanggantbl`
--
ALTER TABLE `pelanggantbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
