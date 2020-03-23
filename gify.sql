-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2020 at 08:36 AM
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
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `photo` text NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `kado_buat` varchar(255) NOT NULL,
  `acara` varchar(255) NOT NULL,
  `range_date` varchar(100) NOT NULL,
  `berat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nama_barang`, `photo`, `kode_barang`, `harga`, `deskripsi`, `kado_buat`, `acara`, `range_date`, `berat`) VALUES
(1, 'Raket Badminton Victor', 'victor.jpg', 'rb200', 500000, 'Raket Yang Di Khususkan Untuk Pertandingan', 'Kakak Laki-Laki,Ayah,Suami,Om (Paman),Guru', 'Ulang tahun,Graduation', 'Wild', 0),
(2, 'Raket Badminton Yonex', 'yonex.jpg', 'rb200', 1000000, 'fydjgdyj', 'Anak Perempuan,Ayah,Ibu', 'Anniversary (Pernikahan),New Born Baby', 'Desire', 0);

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
  `id` int(10) NOT NULL,
  `bulan` varchar(100) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `bulanend` varchar(100) NOT NULL,
  `hariend` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kado_range_date`
--

INSERT INTO `tbl_kado_range_date` (`id`, `bulan`, `hari`, `nama`, `bulanend`, `hariend`) VALUES
(1, '11', '22', 'Wild', '0', '19'),
(2, '0', '20', 'Care', '1', '18'),
(3, '1', '19', 'Sensitive', '2', '20'),
(4, '2', '21', 'Energic', '3', '19'),
(5, '3', '20', 'Desire', '4', '20'),
(6, '4', '21', 'Extreme', '5', '20'),
(7, '5', '21', 'Possessive', '6', '22'),
(8, '6', '23', 'Showup', '7', '22'),
(9, '7', '23', 'Experiment', '8', '22'),
(10, '8', '23', 'Authoritative', '9', '22'),
(11, '9', '23', 'Persuasive', '10', '21'),
(12, '10', '22', 'Commitment', '11', '21');

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
  `kode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kode_barang`
--

INSERT INTO `tbl_kode_barang` (`id`, `kode`) VALUES
(1, 'gt100'),
(2, 'rb220'),
(3, 'sp300'),
(4, 'sp310'),
(5, 'gt110'),
(6, 'rb210'),
(7, 'rb200'),
(8, 'bk400');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `photo` text NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `kado_buat` varchar(255) NOT NULL,
  `tgl_order` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `penerima` varchar(20) NOT NULL,
  `resi` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `id_pesanan`, `nama_barang`, `photo`, `kode_barang`, `kado_buat`, `tgl_order`, `status`, `penerima`, `resi`, `jenis`) VALUES
(1, 3536, 'Kaos Distro', 'https://s3.bukalapak.com/img/3314881826/w-1000/Baju_clothing_smoothing_putih_kaos_distro_terbaru.jpg', 'kd1457', 'Ayah', '2020-03-19', 'menunggu pembayaran', 'Sopo', '13253frg5rhru6u', 'Kaos'),
(2, 25346, 'jhjuf', 'kuyfkukufkuf', 'lkfhulu', 'lflflu', '2020-03-02', '1', 'gdfgfd', 'fhhsd', 'hsfhs');

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

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_pesanan`, `id_tetap`, `ttl`, `penerima`, `resi`, `status`, `jenis`) VALUES
(1, '', '2020-03-24', 'Sopo', '15840368408745ret', 1, 'Sepatu');

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
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`);

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
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_kado_buat`
--
ALTER TABLE `tbl_kado_buat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_kado_range_date`
--
ALTER TABLE `tbl_kado_range_date`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_kado_untuk_acara`
--
ALTER TABLE `tbl_kado_untuk_acara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_kode_barang`
--
ALTER TABLE `tbl_kode_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_pesanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
