-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 04:48 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nip` bigint(16) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nip`, `nama`, `email`, `password`) VALUES
(1234567890987654, 'masud', 'hmazud@gmail.com', '12345678');

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
(5, 'Kota', 'senin', '2019-07-30', '01:00:00', 'eto', 'anu', 'mmm'),
(9, 'aaaaeeeeeaaa', 'dddd', '2019-07-02', '01:00:00', 'cccccc', 'ffffffff', 'gggaaaagggg'),
(10, 'Kasihan', 'Selasa', '2019-07-30', '01:00:00', 'Terjadi kebocoran pipa PDAM.', '-', 'Sedang dilakukan pembenahan oleh pihak PDAM.'),
(11, 'IMogiri', 'Minggu', '2019-06-22', '01:00:00', 'Keboran Pipa PDam', 'Harap menampung Air', 'Sedang dilakukan pembenahan oleh pihak PDAM'),
(12, 'Kanto', 'Selasa', '2019-07-30', '01:00:00', 'anu', 'mmm', 'eto'),
(13, 'Shibuya', 'Rabu', '2019-09-09', '02:00:00', 'test', 'test', 'test');

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
  `foto_ktp` varchar(100) NOT NULL,
  `pilih_tarif` char(4) NOT NULL,
  `no_pelanggan` int(6) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`no_daftar`, `no_ktp`, `nama`, `alamat`, `email`, `no_hp`, `foto_ktp`, `pilih_tarif`, `no_pelanggan`, `password`) VALUES
(1, 2147483647098765, 'upload', 'sfddhdsg', 'hijrahadv22@gmail.com', '234567456789', 'hac.jpg', 'A1', 1, 'fdggfdg4356'),
(2, 9876542340987089, 'upload', 'sfddhdsg', 'upload@gmail.com', '234567456789', 'Kyoukai-no-Kanata-Wallpaper-Kanbara-Akihito.jpg', 'A1', 2, 'upload'),
(3, 2147483647098765, 'hanabi n', 'sfddhdsg', 'upload@gmail.com', '99999999999', '1543cafdff8fc6e10463c711c388c02c94b4d221_hq.jpg', 'B1', 3, 'fdggfdg4356'),
(4, 2147483647098765, 'aaaaaaaaa', 'sfddhdsg', 'hm@gmail.com', '34567456789', 'samurai_chamlpoo.png', 'A1', 4, 'fdggfdg4356'),
(5, 2147483647098765, 'upload', 'sfddhdsg', 'renzo@gmail.com', '123456723421', 'ao-haru-ride-kou-futaba-under-the-stars.jpg', 'A3', 6, '85741620'),
(6, 9876542340987089, 'hanabi n', 'sfddhdsg', 'hijrahadv22@gmail.com', '234567456789', '1543cafdff8fc6e10463c711c388c02c94b4d221_hq.jpg', 'B3', 5, '98164705'),
(7, 1234567890987654, 'hhhhhhhh', 'jklhkg', 'hmazud@gmail.com', '12345678909', 'hjkghf.jpg', 'A1', 7, '01357692'),
(8, 2222222222222222, 'test', 'tokyo', 'test@gmail.com', '33333333333', 'hjghjg.jpg', 'A3', 10, '09283417'),
(9, 9999999999999999, 'Hando', 'Shibame', 'hando@gmail.com', '12312312312', 'shi.png', 'B1', 9, '41789506'),
(10, 1234567890987654, 'f', 'Lat:-0.789275. Long:113.92132699999999', 'hmazud@gmail.com', '12346754565', 'ffg.jpg', 'a1', 8, '96024718'),
(11, 3456757547897532, 'new ', 'Lat:-33.137551. Long:81.826172', 'new@gmail.com', '56677567777', '', 'A4', NULL, NULL),
(12, 3456757547897532, 'new ', 'Lat:-27.593924599999998. Long:120.57715119999999', 'new@gmail.com', '67876543566', '', 'A4', NULL, NULL),
(13, 3635653367546854, 'tesr', 'Lat:-8.007710399999999. Long:110.41921529999999', 'test@gmail.com', '56654555555', '', 'a3', NULL, NULL),
(14, 1234567890123455, 'image', 'image', 'image@gmail.com', '12345678900', 'bc_008.jpg', 'A1_2', 11, '29605341'),
(15, 1234567890123455, 'image', 'image', 'image@gmail.com', '12345678900', 'bc_008.jpg', 'A1_2', NULL, NULL),
(16, 1234567890123455, 'image', 'image', 'image@gmail.com', '12345678900', 'avatar92.jpg', 'A1_2', NULL, NULL),
(17, 1234567890123455, 'image', 'image', 'image@gmail.com', '12345678900', 'avatar92.jpg', 'A1_2', NULL, NULL),
(18, 1234567890123455, 'image', 'image', 'image@gmail.com', '12345678900', 'avatar92.jpg', 'A1_3', NULL, NULL),
(19, 1234567890123455, 'image', 'image', 'image@gmail.com', '12345678900', 'avatar92.jpg', 'A1_1', NULL, NULL),
(20, 1234567890123455, 'image', 'image', 'image@gmail.com', '12345678900', 'avatar92.jpg', 'A1_1', NULL, NULL),
(21, 1234567890123455, 'image', 'image', 'image@gmail.com', '12345678900', 'avatar92.jpg', 'A1_1', NULL, NULL),
(22, 1234567890123457, 'images', 'images', 'images@gmail.com', '12345678901', 'avatar921.jpg', 'A1_5', NULL, NULL),
(23, 1234567890123457, 'images', 'images', 'images@gmail.com', '12345678901', 'avatar921.jpg', 'A1_5', NULL, NULL),
(24, 1234567890123457, 'images', 'images', 'images@gmail.com', '12345678901', 'avatar921.jpg', 'A1_5', NULL, NULL),
(25, 1234567890123457, 'newnew', 'images', 'images@gmail.com', '12345678901', 'Screenshot_1.png', 'A1_5', 13, '75324091'),
(26, 1234567890123457, 'new image', 'images', 'images@gmail.com', '12345678901', 'stock-vector-set-of-arabic-numbers-vector-645284404.jpg', 'A1_9', 12, '23541708'),
(27, 1234567890123457, 'new image', 'images', 'images@gmail.com', '12345678901', 'WhatsApp_Image_2018-09-05_at_10_33_19_AM.jpeg', 'A1_9', 14, '82697413'),
(28, 9876543212345678, 'fix try', 'kljhgfcmhvj,bk.', 'kbjhgchj@gmail.com', '98765432123', '', 'A2_1', NULL, NULL),
(29, 9876543212345678, 'fix try2', 'kljhgfcmhvj,bk.', 'kbjhgchj@gmail.com', '98765432123', 'IMG_20181010_113609.jpg', 'A2_1', 15, '89560321'),
(30, 9876543212345678, 'Masud Al Hafiz', 'Karangtengah', 'hmazud@gmail.com', '08882766731', '_DSC0237-Rec.jpg', 'A2_1', 16, '53964870'),
(31, 1234567890123456, 'MAsud', 'imogiri', 'hmazud@gmail.com', '98274657365', 'Screenshot_4.png', '9827', NULL, NULL),
(32, 1234567890123456, 'MAsud', 'imogiri', 'hmazud@gmail.com', '98274657365', 'Screenshot_4.png', '9827', NULL, NULL),
(33, 1234567890123456, 'MAsud', 'imogiri', 'hmazud@gmail.com', '98274657365', 'Screenshot_4.png', '9827', NULL, NULL),
(34, 1234567890123456, 'MAsud', 'imogiri', 'hmazud@gmail.com', '98274657365', 'Screenshot_2019-09-19-21-37-47-562_com_mobile_legends.png', '9827', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(5) NOT NULL,
  `keluhan` text NOT NULL,
  `tanggapan` text,
  `no_pelanggan` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `keluhan`, `tanggapan`, `no_pelanggan`) VALUES
(1, 'ada masalah air !', 'masalahnya ?', 3),
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
  `status_bayar` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tagihan_air`
--

INSERT INTO `tagihan_air` (`no_tagihan`, `no_daftar`, `denda`, `bulan_bayar`, `biaya_air`, `biaya_segel`, `std_awal`, `std_akhir`, `tgl_bayar`, `angs_air`, `angs_non_air`, `total_tagihan`, `status_bayar`) VALUES
(1, 3, NULL, '2019-07-01', 20000, NULL, 2400, 2500, '0000-00-00', NULL, NULL, 20000, 0),
(6, 4, 1, '0000-00-00', 40001, 1, 2400, 2500, '2019-07-09', 1, 1, 40000, 0),
(7, 0, 0, '0000-00-00', 50000, 0, 4000, 4500, NULL, 0, 0, 50000, 0),
(8, 0, 0, '0000-00-00', 50000, 0, 4000, 4500, NULL, 0, 0, 50000, 0),
(9, 5, 3333, '0000-00-00', 555556, 9999, 4009, 4507, '0000-00-00', 5555, 4444, 555553, 1),
(10, 12, 0, '0000-00-00', 40001, 0, 4000, 4500, NULL, 0, 0, 40001, 0),
(11, 9, 5000, '0000-00-00', 20000, 0, 2000, 3000, NULL, 0, 0, 25000, 1),
(12, 6, 5000, '0000-00-00', 20000, 0, 2000, 3000, NULL, 0, 0, 25000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tarif_air`
--

CREATE TABLE `tarif_air` (
  `id_tarif_air` char(5) NOT NULL,
  `tarif` int(5) NOT NULL,
  `ket_tarif` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarif_air`
--

INSERT INTO `tarif_air` (`id_tarif_air`, `tarif`, `ket_tarif`) VALUES
('A1_1', 2750, 'Rumah Tipe A1(0-10 m3)'),
('A1_2', 3900, 'Rumah Tipe A1(11-20 m3)'),
('A1_3', 4400, 'Rumah Tipe A1(>20 m3)'),
('A2_1', 4500, 'Rumah Tipe A2(0-10 m3)'),
('A2_2', 4800, 'Rumah Tipe A2(11-20 m3)'),
('A2_3', 5400, 'Rumah Tipe A2(>20 m3)'),
('SK_1', 2500, 'Sosial Khusus(0-10 m3)'),
('SK_2', 3400, 'Sosial Khusus(11-20 m3)'),
('SK_3', 4100, 'Sosial Khusus(>20 m3)'),
('SU_1', 2200, 'Sosial Umum(0-10 m3)'),
('SU_2', 2800, 'Sosial Umum(11-20 m3)'),
('SU_3', 3200, 'Sosial Umum(>20 m3)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`nip`);

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
-- Indexes for table `tarif_air`
--
ALTER TABLE `tarif_air`
  ADD PRIMARY KEY (`id_tarif_air`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `masalah_air`
--
ALTER TABLE `masalah_air`
  MODIFY `no_info` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `no_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tagihan_air`
--
ALTER TABLE `tagihan_air`
  MODIFY `no_tagihan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
