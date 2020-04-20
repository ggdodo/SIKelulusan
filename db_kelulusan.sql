-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 04:30 PM
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
(15, 'paijo', 'mtsaddarain@gmail.com', 'halo halo bandung'),
(16, 'Adi Supardi', 'agusrahman@gmail.com', 'jhjhgjgkhkjhk');

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
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Ahmad Kusnadi', 0, '20-04-2020 16+7:21:23'),
(10, 'adiman', 'd41d8cd98f00b204e9800998ecf8427e', 'Adi Manahan', 1, '0000-00-00'),
(11, 'saipul', '0df98fedfb246b51562ba130fc39b376', 'Saipulloh', 1, '20-04-2020 16+7:03:37');

-- --------------------------------------------------------

--
-- Table structure for table `tb_student`
--

CREATE TABLE `tb_student` (
  `no` int(5) NOT NULL,
  `noujian` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tgllhr` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `jurusan` varchar(200) NOT NULL,
  `indo` varchar(200) NOT NULL,
  `mat` varchar(200) NOT NULL,
  `inggris` varchar(200) NOT NULL,
  `kejuruan` varchar(200) NOT NULL,
  `nsindo` varchar(200) NOT NULL,
  `nsinggris` varchar(200) NOT NULL,
  `nsmat` varchar(200) NOT NULL,
  `nskejuruan` varchar(200) NOT NULL,
  `naindo` varchar(200) NOT NULL,
  `nainggris` varchar(200) NOT NULL,
  `namat` varchar(200) NOT NULL,
  `nakejuruan` varchar(200) NOT NULL,
  `rataun` varchar(200) NOT NULL,
  `ratans` varchar(200) NOT NULL,
  `ratana` varchar(200) NOT NULL,
  `ket` int(1) NOT NULL,
  `ketgambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_student`
--

INSERT INTO `tb_student` (`no`, `noujian`, `nama`, `tgllhr`, `alamat`, `jurusan`, `indo`, `mat`, `inggris`, `kejuruan`, `nsindo`, `nsinggris`, `nsmat`, `nskejuruan`, `naindo`, `nainggris`, `namat`, `nakejuruan`, `rataun`, `ratans`, `ratana`, `ket`, `ketgambar`) VALUES
(13, '27-807-001-8', 'Ahmad Sobri', '20-02-2000', 'kediri', '1', '70', '80', '78', '79', '80', '81', '67', '66', '55', '67', '55', '75', '76.75', '73.5', '63', 0, 'lulus'),
(14, '27-807-002-7', 'Adi Hidayat', '15-02-2001', 'kediri', '2', '80', '78', '80', '76', '70', '89', '78', '77', '66', '88', '66', '76', '78.5', '78.5', '74', 0, 'lulus'),
(15, '27-807-003-6', 'Ahmed Saiful', '16-02-2000', 'kediri', '2', '67', '56', '56', '56', '70', '57', '79', '88', '55', '77', '77', '65', '58.75', '73.5', '68.5', 0, 'lulus'),
(16, '27-807-004-5', 'Sunnan', '15-03-2000', 'kediri', '1', '56', '45', '45', '45', '80', '76', '67', '77', '77', '66', '66', '55', '47.75', '75', '66', 0, 'tidaklulus'),
(17, '27-807-005-4', 'Afiyati', '18-05-2001', 'kediri', '1', '56', '65', '65', '65', '70', '75', '70', '66', '88', '77', '55', '65', '62.75', '70.25', '71.25', 0, 'tidaklulus'),
(18, '27-807-001-8', 'Ahmad Sobri', '20-02-2000', 'kediri', '1', '70', '80', '78', '79', '80', '81', '67', '66', '55', '67', '55', '75', '76.75', '73.5', '63', 0, 'lulus'),
(19, '27-807-002-7', 'Adi Hidayat', '15-02-2001', 'kediri', '2', '80', '78', '80', '76', '70', '89', '78', '77', '66', '88', '66', '76', '78.5', '78.5', '74', 0, 'lulus'),
(20, '27-807-003-6', 'Ahmed Saiful', '16-02-2000', 'kediri', '2', '67', '56', '56', '56', '70', '57', '79', '88', '55', '77', '77', '65', '58.75', '73.5', '68.5', 0, 'lulus'),
(21, '27-807-004-5', 'Sunnan', '15-03-2000', 'kediri', '1', '56', '45', '45', '45', '80', '76', '67', '77', '77', '66', '66', '55', '47.75', '75', '66', 0, 'tidaklulus'),
(22, '27-807-005-4', 'Afiyati', '18-05-2001', 'kediri', '1', '56', '65', '65', '65', '70', '75', '70', '66', '88', '77', '55', '65', '62.75', '70.25', '71.25', 0, 'tidaklulus');

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
  MODIFY `id_hubungi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_student`
--
ALTER TABLE `tb_student`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
