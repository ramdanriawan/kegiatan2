-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2017 at 12:35 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kegiatan`
--

-- --------------------------------------------------------

--
-- Table structure for table `kas`
--

CREATE TABLE `kas` (
  `kode` int(11) NOT NULL,
  `ma` varchar(20) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `tgl` date NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `keluar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kas`
--

INSERT INTO `kas` (`kode`, `ma`, `keterangan`, `tgl`, `jumlah`, `jenis`, `keluar`) VALUES
(101, '2', 'syafir anwar donatur bulanan', '2016-04-06', '100000', 'masuk', ''),
(102, '12', 'Infak Jifis Harian', '2016-04-06', '21000', 'masuk', ''),
(103, '', 'Hamba Allah Semen Padang', '2016-04-06', '100000', 'masuk', ''),
(104, '', 'Ana T Sandal', '2016-04-06', '400000', 'masuk', ''),
(105, '', 'Honor Mubaligh 060416', '2016-04-06', '', 'keluar', '5000'),
(106, '', 'nfak Jifis Harian', '2016-04-07', '283000', 'masuk', ''),
(107, '1', 'Honor Mubaligh', '2017-04-07', '', 'keluar', '125000'),
(109, '', 'Infak Jummat', '2016-04-08', '2000000', 'masuk', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `kd_user` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`kd_user`, `username`, `password`, `nama`, `alamat`) VALUES
(2, 'admin', 'admin', 'administrator', 'jl.berok raya no 40 siteba'),
(3, 'fdsfsdfsf', 'dsfsdfdsf', 'dfdsfdsf', 'sdfsdfsd'),
(4, 'adminsfsdfsf', 'adminsdfsfsdf', 'sdfsfsdfs', 'fsdfsdfsdfs'),
(5, 'adminsdfsfsf', 'adminsdfsfsdfsd', 'fsdfsdfsdfsdf', 'sdfsfsdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `penelitian`
--

CREATE TABLE `penelitian` (
  `No` int(50) NOT NULL,
  `jdl_kegiatan` text NOT NULL,
  `target_wkt_capai` text NOT NULL,
  `target_capai` text NOT NULL,
  `pre_target_capai` varchar(80) NOT NULL,
  `realisasi_capai` text NOT NULL,
  `pre_realisasi` varchar(80) NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penelitian`
--

INSERT INTO `penelitian` (`No`, `jdl_kegiatan`, `target_wkt_capai`, `target_capai`, `pre_target_capai`, `realisasi_capai`, `pre_realisasi`, `tahun`) VALUES
(90, 'dicki', '2017-12 _ 2017-10', 'sdf', '90%', 'sdfs', 'safd', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `pengembangan`
--

CREATE TABLE `pengembangan` (
  `No` int(80) NOT NULL,
  `jdl_kegiatan` text NOT NULL,
  `target_wkt_capai` text NOT NULL,
  `target_capai` text NOT NULL,
  `pre_target_capai` varchar(80) NOT NULL,
  `realisasi_capai` text NOT NULL,
  `pre_realisasi` varchar(80) NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengembangan`
--

INSERT INTO `pengembangan` (`No`, `jdl_kegiatan`, `target_wkt_capai`, `target_capai`, `pre_target_capai`, `realisasi_capai`, `pre_realisasi`, `tahun`) VALUES
(1, 'Aplikasi Pengembangan Pellet Kayu dari Biomassa untuk Masyarakat', 'february-mei', 'evaluasi,  perbaikan/ penyempurnaan/ pemeliharaan alat dari kegiatan tahun 1 dan 2', '70%', '-', '-', 0000),
(2, 'sfvdffdfdfddgdgdgdfg', '2017-10 _ 2017-10', 'Pengadaan/pengumpulan bahan dan alat, serta  bahan penunjang  kegiatan', '85%', 'Dalam penyusunan dan pengesahan RPHP dan ROPg', '80%', 2017);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kas`
--
ALTER TABLE `kas`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`kd_user`);

--
-- Indexes for table `penelitian`
--
ALTER TABLE `penelitian`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `pengembangan`
--
ALTER TABLE `pengembangan`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kas`
--
ALTER TABLE `kas`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `kd_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `penelitian`
--
ALTER TABLE `penelitian`
  MODIFY `No` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `pengembangan`
--
ALTER TABLE `pengembangan`
  MODIFY `No` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
