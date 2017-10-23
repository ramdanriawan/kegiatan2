-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Okt 2017 pada 10.01
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas`
--

CREATE TABLE `kas` (
  `kode` int(11) NOT NULL,
  `ma` varchar(20) NOT NULL,
  `keterangan` varchar(80) NOT NULL,
  `tgl` date NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `keluar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kas`
--

INSERT INTO `kas` (`kode`, `ma`, `keterangan`, `tgl`, `jumlah`, `jenis`, `keluar`) VALUES
(101, '2', 'Syafri Anwar Donatur Bulanan', '2016-04-06', '100000', 'Masuk', ''),
(102, '12', 'Infak Jifis Harian', '2016-04-06', '21000', 'Masuk', ''),
(103, '', 'Hamba Allah Semen Padang', '2016-04-06', '100000', 'Masuk', ''),
(104, '', 'Ana T Sandal', '2016-04-06', '400000', 'Masuk', ''),
(105, '', 'Honor Mubaligh 060416', '2016-04-06', '', 'Keluar', '50000'),
(106, '', 'Infak Jifis Harian', '2016-04-07', '283000', 'Masuk', ''),
(107, '1', 'Honor Mubaligh', '2016-04-07', '', 'Keluar', '125000'),
(109, '', 'Infak Jummat', '2016-04-08', '2000000', 'Masuk', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `kd_user` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `No Telp/Hp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`kd_user`, `username`, `password`, `nama`, `No Telp/Hp`) VALUES
(11, 'admin', 'admin', 'administrator', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_penelitian`
--

CREATE TABLE `tabel_penelitian` (
  `id` int(11) NOT NULL,
  `jdl_kegiatan` text NOT NULL,
  `target_wkt_capai` text NOT NULL,
  `target_capai` text NOT NULL,
  `pre_target_capai` int(11) NOT NULL,
  `realisasi_capai` text NOT NULL,
  `pre_realisasi` int(11) NOT NULL,
  `struktur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_penelitian`
--

INSERT INTO `tabel_penelitian` (`id`, `jdl_kegiatan`, `target_wkt_capai`, `target_capai`, `pre_target_capai`, `realisasi_capai`, `pre_realisasi`, `struktur`) VALUES
(2, 'text', 'september', '100', 90, '2017-08-24', 100, 'Penelitian'),
(5, 'Aplikasi Pengembangan Pellet Kayu dari Biomassa untuk masyarakat', 'April-Mei', 'evaluasi,perbaikan/penyempurnaan/pemeliharaan alat dari kegiatan tahun 1 dan 2', 10, '-', 65, 'Pengembangan'),
(6, 'Teknik pemanfaatan limbah biomassa berlignoselulosa untuk bionergi', 'February', 'Penyusunan, Pembahasan, Perbaikan ROP dan RPTP', 10, 'Membuat Proposal', 0, 'Penelitian'),
(7, '-', 'April-Juni', 'Pengadaan bahan kimia, kaca dan bahan pembantu', 10, '-', 60, 'Penelitian'),
(8, 'nnmm', 'vfr', '2234', 0, 'c', 0, 'Pengembangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pengembangan`
--

CREATE TABLE `tabel_pengembangan` (
  `id` int(11) NOT NULL,
  `jdl_kegiatan` varchar(40) NOT NULL,
  `target_wkt_capai` date NOT NULL,
  `target_capai` varchar(40) NOT NULL,
  `pre_target_capai` varchar(40) NOT NULL,
  `realisasi_capai` varchar(40) NOT NULL,
  `pre_realisasi` int(40) NOT NULL,
  `struktur` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_user`
--

CREATE TABLE `tabel_user` (
  `No` int(11) NOT NULL,
  `Username` text NOT NULL,
  `Nama_Lengkap` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `tabel_penelitian`
--
ALTER TABLE `tabel_penelitian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_pengembangan`
--
ALTER TABLE `tabel_pengembangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
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
  MODIFY `kd_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tabel_penelitian`
--
ALTER TABLE `tabel_penelitian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tabel_pengembangan`
--
ALTER TABLE `tabel_pengembangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
