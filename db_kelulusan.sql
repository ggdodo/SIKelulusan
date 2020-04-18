-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2020 at 03:25 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kelulusan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hubungi`
--

CREATE TABLE `tbl_hubungi` (
  `id_hubungi` int(10) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hubungi`
--

INSERT INTO `tbl_hubungi` (`id_hubungi`, `nama`, `email`, `pesan`) VALUES
(3, 'adi kiswanto', 'adikiswanto@gmail.com', 'halo halo'),
(15, 'paijo', 'mtsaddarain@gmail.com', 'halo halo bandung');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `id` int(11) NOT NULL,
  `kode` int(11) NOT NULL,
  `jurusan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`id`, `kode`, `jurusan`) VALUES
(1, 1, 'MULTIMEDIA'),
(2, 2, 'TEKNIK KOMPUTER JARINGAN'),
(3, 3, 'TEKNIK KENDARAAN RINGAN OTOMOTIF'),
(4, 4, 'TEKNIK BISNIS SEPEDA MOTOR'),
(5, 5, 'TEKNIK INSTALASI TENAGA LISTRIK'),
(6, 6, 'TEKNIK PEMESINAN');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kode`
--

CREATE TABLE `tbl_kode` (
  `id` int(11) NOT NULL,
  `kode` int(1) NOT NULL,
  `arti` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kode`
--

INSERT INTO `tbl_kode` (`id`, `kode`, `arti`) VALUES
(3, 0, 'TIDAK LULUS'),
(4, 1, 'LULUS'),
(5, 2, 'DITANGGUHKAN');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level_user` int(1) NOT NULL,
  `log_activity` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `pass`, `nama`, `level_user`, `log_activity`) VALUES
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Ahmad Kusnadi', 0, '18-04-2020 13+7:36:45'),
(10, 'adiman', 'd41d8cd98f00b204e9800998ecf8427e', 'Adi Manahan', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_student`
--

CREATE TABLE `tb_student` (
  `no` varchar(200) NOT NULL,
  `noujian` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tgllhr` varchar(200) NOT NULL,
  `addresse` varchar(200) NOT NULL,
  `sekolah` varchar(200) NOT NULL,
  `indo` varchar(200) NOT NULL,
  `mat` varchar(200) NOT NULL,
  `inggris` varchar(200) NOT NULL,
  `ipa` varchar(200) NOT NULL,
  `nsindo` varchar(200) NOT NULL,
  `nsinggris` varchar(200) NOT NULL,
  `nsmat` varchar(200) NOT NULL,
  `nsipa` varchar(200) NOT NULL,
  `naindo` varchar(200) NOT NULL,
  `nainggris` varchar(200) NOT NULL,
  `namat` varchar(200) NOT NULL,
  `naipa` varchar(200) NOT NULL,
  `rataun` varchar(200) NOT NULL,
  `ratans` varchar(200) NOT NULL,
  `ratana` varchar(200) NOT NULL,
  `ket` int(1) NOT NULL,
  `ketgambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_student`
--

INSERT INTO `tb_student` (`no`, `noujian`, `nama`, `tgllhr`, `addresse`, `sekolah`, `indo`, `mat`, `inggris`, `ipa`, `nsindo`, `nsinggris`, `nsmat`, `nsipa`, `naindo`, `nainggris`, `namat`, `naipa`, `rataun`, `ratans`, `ratana`, `ket`, `ketgambar`) VALUES
('1', '27-807-001-8', 'Adam Mulyana', '16 Oktober 1998', 'Kediri', '2', '70', '80', '78', '79', '80', '81', '67', '66', '55', '67', '55', '75', '76.75', '73.5', '63', 1, 'lulus'),
('2', '27-807-002-7', 'Adi Prasetyo', '17 Oktober 1998', 'Kediri', '3', '80', '78', '80', '76', '70', '89', '78', '77', '66', '88', '66', '76', '78.5', '78.5', '74', 2, 'ditangguhkan'),
('3', '27-807-003-6', 'Ahmad Syahrijal', '18 Oktober 2000', 'Kediri', '5', '67', '56', '56', '56', '70', '57', '79', '88', '55', '77', '77', '65', '58.75', '73.5', '68.5', 1, 'lulus'),
('4', '27-807-004-5', 'Sakir Muhammad', '19 Oktober 1998', 'Kediri', '3', '56', '45', '45', '45', '80', '76', '67', '77', '77', '66', '66', '55', '47.75', '75', '66', 0, 'tidaklulus'),
('5', '27-807-005-4', 'Afi Ariyati', '20 Oktober 1998', 'Kediri', '3', '56', '65', '65', '65', '70', '75', '70', '66', '88', '77', '55', '65', '62.75', '70.25', '71.25', 0, 'tidaklulus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_hubungi`
--
ALTER TABLE `tbl_hubungi`
  ADD PRIMARY KEY (`id_hubungi`);

--
-- Indexes for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kode`
--
ALTER TABLE `tbl_kode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_student`
--
ALTER TABLE `tb_student`
  ADD PRIMARY KEY (`no`),
  ADD KEY `no` (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_hubungi`
--
ALTER TABLE `tbl_hubungi`
  MODIFY `id_hubungi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_kode`
--
ALTER TABLE `tbl_kode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
