-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2019 at 05:12 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdam_rest`
--

-- --------------------------------------------------------

--
-- Table structure for table `masalah_air`
--

CREATE TABLE `masalah_air` (
  `no_info` int(16) NOT NULL,
  `wilayah` varchar(25) NOT NULL,
  `hari` tinytext NOT NULL,
  `tanggal` date NOT NULL,
  `estimasi` time NOT NULL,
  `kerusakan` text NOT NULL,
  `alternatif` text NOT NULL,
  `penanganan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masalah_air`
--

INSERT INTO `masalah_air` (`no_info`, `wilayah`, `hari`, `tanggal`, `estimasi`, `kerusakan`, `alternatif`, `penanganan`) VALUES
(2, 'aaaaaaa', 'dddd', '2019-06-22', '01:00:00', 'cccccc', 'bbbbbb', 'qqqqqqqqq'),
(3, 'eeeee', 'dddd', '2019-06-22', '01:00:00', 'cccccc', 'bbbbbb', 'gggaaaagggg'),
(4, 'eeeee', 'dddd', '2019-06-22', '01:00:00', 'cccccc', 'bbbbbb', 'gggaaaagggg'),
(5, 'yyyyyyy', 'bbbbb', '2019-06-22', '01:00:00', 'eeeeeee', 'bbbbbb', 'aaaaaaa'),
(6, 'eeeee', 'dddd', '2019-06-22', '01:00:00', 'cccccc', 'bbbbbb', 'ggggggg'),
(7, 'eeeee', 'dddd', '2019-06-22', '01:00:00', 'cccccc', 'bbbbbb', 'ggggggg');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `no_daftar` int(11) NOT NULL,
  `no_ktp` bigint(16) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `foto_ktp` varchar(25) NOT NULL,
  `pilih_tarif` char(4) NOT NULL,
  `no_pelanggan` int(6) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`no_daftar`, `no_ktp`, `nama`, `alamat`, `email`, `no_hp`, `foto_ktp`, `pilih_tarif`, `no_pelanggan`, `password`) VALUES
(3, 2147483647, 'hanabi', 'kirigakure', 'hanzo@gmail.com', '12345678901', 'djfnskjdf.jpg', 'A3', 4, '23456789'),
(4, 2147483647, 'dfsgdhrt', 'sfddhdsg', 'hijrahadv22@gmail.com', '234567456789', 'dfsgh.jpg', 'A1', 8, 'fdggfdg4356'),
(5, 9876542340987089, 'hanabi n', 'hhhhh', 'hm@gmail.com', '234567456789', 'djfnskjdf.png', 'A1', 90, 'fdggfdg4356');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(5) NOT NULL,
  `keluhan` text NOT NULL,
  `tanggapan` text,
  `no_daftar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `keluhan`, `tanggapan`, `no_daftar`) VALUES
(1, 'ada masalah air !', 'masalahnya apa ?', 3),
(2, 'airnya tidak mengalir', 'sejak kapan ya tidak mengalirnya ?', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tagihan_air`
--

CREATE TABLE `tagihan_air` (
  `no_tagihan` int(5) NOT NULL,
  `no_daftar` int(11) NOT NULL,
  `denda` int(8) DEFAULT NULL,
  `bulan_bayar` date NOT NULL,
  `biaya_air` float NOT NULL,
  `biaya_segel` int(8) DEFAULT NULL,
  `std_awal` float NOT NULL,
  `std_akhir` float NOT NULL,
  `tgl_bayar` date DEFAULT NULL,
  `angs_air` int(8) DEFAULT NULL,
  `angs_non_air` int(8) DEFAULT NULL,
  `total_tagihan` int(8) NOT NULL,
  `status_bayar` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tagihan_air`
--

INSERT INTO `tagihan_air` (`no_tagihan`, `no_daftar`, `denda`, `bulan_bayar`, `biaya_air`, `biaya_segel`, `std_awal`, `std_akhir`, `tgl_bayar`, `angs_air`, `angs_non_air`, `total_tagihan`, `status_bayar`) VALUES
(1, 3, NULL, '2019-07-01', 20000, NULL, 2400, 2500, '0000-00-00', NULL, NULL, 20000, ''),
(6, 4, 1, '0000-00-00', 40001, 1, 2400, 2500, '2019-07-09', 1, 1, 40000, 'sudah'),
(7, 0, 0, '0000-00-00', 50000, 0, 4000, 4500, NULL, 0, 0, 50000, ''),
(8, 0, 0, '0000-00-00', 50000, 0, 4000, 4500, NULL, 0, 0, 50000, ''),
(9, 5, 3333, '0000-00-00', 555556, 9999, 4009, 4507, '0000-00-00', 5555, 4444, 555553, 'sudah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masalah_air`
--
ALTER TABLE `masalah_air`
  ADD PRIMARY KEY (`no_info`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`no_daftar`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `tagihan_air`
--
ALTER TABLE `tagihan_air`
  ADD PRIMARY KEY (`no_tagihan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `masalah_air`
--
ALTER TABLE `masalah_air`
  MODIFY `no_info` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `no_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tagihan_air`
--
ALTER TABLE `tagihan_air`
  MODIFY `no_tagihan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
