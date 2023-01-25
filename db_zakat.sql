-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2023 at 05:51 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_zakat`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pembayaran`
--

CREATE TABLE `data_pembayaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `noTelp` int(100) NOT NULL,
  `jenisKelamin` char(50) NOT NULL,
  `jumlah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pembayaran`
--

INSERT INTO `data_pembayaran` (`id`, `nama`, `alamat`, `noTelp`, `jenisKelamin`, `jumlah`) VALUES
(3, 'Raka', 'kembang', 987654321, 'L', 1234567890),
(6, 'Raka', 'kembang', 9876543, 'L', 1234567890),
(8, 'Dani', 'kesatuan', 34567786, 'L', 486667576);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pembayaran`
--
ALTER TABLE `data_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pembayaran`
--
ALTER TABLE `data_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
