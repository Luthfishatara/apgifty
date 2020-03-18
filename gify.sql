-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2020 at 12:04 PM
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
-- Database: `gify`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account`
--

CREATE TABLE `tbl_account` (
  `id` int(255) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` varchar(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_account`
--

INSERT INTO `tbl_account` (`id`, `username`, `email`, `password`, `image`) VALUES
(1, 'Admin', 'admin@gify.com', 'admin', 'http://home.gify.co.id/img/icon/favgify.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `photo` text NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `kado_buat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nama_barang`, `photo`, `kode_barang`, `harga`, `deskripsi`, `kado_buat`) VALUES
(1, 'Gitar', 'https://static.bmdstatic.com/pk/product/medium/CORT-Gitar-Elektrik-X-1-Black-SKU01614640_0-20141016162148.jpg', 'gt123', 3500000, 'Gitar Listrik', ''),
(2, 'Raket Badminton Victor', 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium//89/MTA-1219337/victor_raket-badminton-victor-arrow-power-9000_full05.jpg', 'rb220', 500000, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kado_buat`
--

CREATE TABLE `tbl_kado_buat` (
  `id` int(11) NOT NULL,
  `sub_category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kado_buat`
--

INSERT INTO `tbl_kado_buat` (`id`, `sub_category`) VALUES
(1, 'Adik Laki-Laki'),
(2, 'Adik Perempuan'),
(3, 'Kakak Laki-Laki'),
(4, 'Kakak Perempuan'),
(5, 'Anak Laki-Laki'),
(6, 'Anak Perempuan'),
(7, 'Ayah'),
(8, 'Ibu'),
(9, 'Suami'),
(10, 'Istri'),
(11, 'Pacar (Laki-Laki)'),
(12, 'Pacar (Perempuan)'),
(13, 'Kakek'),
(14, 'Nenek'),
(15, 'Om (Paman)'),
(16, 'Tante (Bibi)'),
(17, 'Guru'),
(18, 'Atasan'),
(19, 'Kerabat');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kado_range_date`
--

CREATE TABLE `tbl_kado_range_date` (
  `id_date` int(10) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kado_range_date`
--

INSERT INTO `tbl_kado_range_date` (`id_date`, `ttl`, `nama`) VALUES
(1, '22 Desember - 19 Januari', 'Wild'),
(2, '20 Januari - 18 Februari', 'Care'),
(3, '19 Februari - 20 Maret', 'Sensitive'),
(4, '21 Maret - 19 April', 'Energic'),
(5, '20 April - 20 Mei', 'Desire'),
(6, '21 Mei - 20 Juni', 'Extreme'),
(7, '21 Juni - 22 Juli', 'Possessive'),
(8, '23 Juli - 22 Agustus', 'Showup'),
(9, '23 Agustus - 22 September', 'Experiment'),
(10, '23 September - 22 Oktober', 'Authoritative'),
(11, '23 Oktober - 21 November', 'Persuasive'),
(12, '22 November - 21 Desember', 'Commitment');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kado_untuk_acara`
--

CREATE TABLE `tbl_kado_untuk_acara` (
  `id` int(11) NOT NULL,
  `untuk_acara` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kado_untuk_acara`
--

INSERT INTO `tbl_kado_untuk_acara` (`id`, `untuk_acara`) VALUES
(1, 'Ulang tahun'),
(2, 'Anniversary (Pernikahan)'),
(3, 'New Born Baby'),
(4, 'Graduation'),
(5, 'Welcome Gift');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kode_barang`
--

CREATE TABLE `tbl_kode_barang` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kode_barang`
--

INSERT INTO `tbl_kode_barang` (`id`, `kode_barang`) VALUES
(1, 'gt100'),
(2, 'rb220');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_pesanan` int(10) NOT NULL,
  `id_tetap` varchar(100) NOT NULL,
  `ttl` date NOT NULL,
  `penerima` varchar(100) NOT NULL,
  `resi` varchar(225) NOT NULL,
  `status` int(1) NOT NULL,
  `jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `id_tetap` varchar(300) NOT NULL,
  `nama` text NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `photo` text NOT NULL,
  `ttl` text NOT NULL,
  `email` text NOT NULL,
  `nohp` int(11) NOT NULL,
  `password` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_account`
--
ALTER TABLE `tbl_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_kado_buat`
--
ALTER TABLE `tbl_kado_buat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kado_range_date`
--
ALTER TABLE `tbl_kado_range_date`
  ADD PRIMARY KEY (`id_date`);

--
-- Indexes for table `tbl_kado_untuk_acara`
--
ALTER TABLE `tbl_kado_untuk_acara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kode_barang`
--
ALTER TABLE `tbl_kode_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_account`
--
ALTER TABLE `tbl_account`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_kado_buat`
--
ALTER TABLE `tbl_kado_buat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_kado_range_date`
--
ALTER TABLE `tbl_kado_range_date`
  MODIFY `id_date` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_kado_untuk_acara`
--
ALTER TABLE `tbl_kado_untuk_acara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_kode_barang`
--
ALTER TABLE `tbl_kode_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_pesanan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
