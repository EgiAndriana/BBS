-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Des 2015 pada 00.47
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `anggota`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `idAnggota` varchar(10) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Alamat` text NOT NULL,
  `TempatLahir` varchar(20) NOT NULL,
  `TanggalLahir` date NOT NULL,
  `Kelas` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`idAnggota`, `Nama`, `Alamat`, `TempatLahir`, `TanggalLahir`, `Kelas`) VALUES
('A00001', 'Egi Andriana', 'Bandung', 'Bandung', '1995-01-16', 'Intermediate'),
('A00002', 'Danis', 'Cibiru', 'Bandung', '1995-02-04', 'Basic'),
('A00003', 'Regita Mega Juliani', 'Cinambo', 'Bandung', '1997-07-11', 'Basic');

-- --------------------------------------------------------

--
-- Struktur dari tabel `iuran`
--

CREATE TABLE IF NOT EXISTS `iuran` (
  `idIuran` varchar(10) NOT NULL,
  `idAnggota` varchar(10) NOT NULL,
  `TanggalIuran` date NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iuran`
--

INSERT INTO `iuran` (`idIuran`, `idAnggota`, `TanggalIuran`, `jumlah`) VALUES
('I00001', 'A00001', '2015-12-05', 2000),
('I00002', 'A00002', '2015-12-05', 2000),
('I00003', 'A00003', '2015-12-05', 2000),
('I00004', 'A00001', '2015-12-12', 2000),
('I00005', 'A00002', '2015-12-12', 2000),
('I00006', 'A00003', '2015-12-12', 2000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE IF NOT EXISTS `tb_login` (
`id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(75) NOT NULL,
  `level` enum('Admin','Kasir','Pemilik') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Danis Yogaswara', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(2, 'Nurjati Luhung', 'kasir', 'c7911af3adbd12a035b289556d96470a', 'Kasir'),
(3, 'Bismar', 'pemilik', '58399557dae3c60e23c78606771dfa3d', 'Pemilik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
 ADD PRIMARY KEY (`idAnggota`);

--
-- Indexes for table `iuran`
--
ALTER TABLE `iuran`
 ADD PRIMARY KEY (`idIuran`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
