-- phpMyAdmin SQL Dump
<<<<<<< HEAD
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2020 at 02:30 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2
=======
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2020 at 02:15 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10
>>>>>>> g

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
<<<<<<< HEAD
  `password` varchar(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_account`
--

INSERT INTO `tbl_account` (`id`, `username`, `email`, `password`, `image`) VALUES
(1, 'Luthfi', 'luthfi@gmail.com', 'luthfi', 'https://www.admin.ayokngaji.com/img/luthfi.jpg');

=======
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

>>>>>>> g
-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
<<<<<<< HEAD
  `id_barang` int(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
=======
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
>>>>>>> g
  `photo` text NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

<<<<<<< HEAD
--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nama_barang`, `photo`, `kode_barang`, `harga`, `deskripsi`) VALUES
(1, 'Gitar', 'https://static.bmdstatic.com/pk/product/medium/CORT-Gitar-Elektrik-X-1-Black-SKU01614640_0-20141016162148.jpg', 'gt123', 3500000, 'Gitar Listrik');

=======
>>>>>>> g
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
<<<<<<< HEAD
  `id_date` int(10) NOT NULL,
=======
  `id` int(10) NOT NULL,
>>>>>>> g
  `ttl` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kado_range_date`
--

<<<<<<< HEAD
INSERT INTO `tbl_kado_range_date` (`id_date`, `ttl`, `nama`) VALUES
=======
INSERT INTO `tbl_kado_range_date` (`id`, `ttl`, `nama`) VALUES
>>>>>>> g
(1, '22 Desember - 19 Januari', 'Wild');

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

<<<<<<< HEAD
--
-- Dumping data for table `tbl_kode_barang`
--

INSERT INTO `tbl_kode_barang` (`id`, `kode_barang`) VALUES
(1, 'gt100');

=======
>>>>>>> g
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
<<<<<<< HEAD
  ADD PRIMARY KEY (`id_barang`);
=======
  ADD PRIMARY KEY (`id`);
>>>>>>> g

--
-- Indexes for table `tbl_kado_buat`
--
ALTER TABLE `tbl_kado_buat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kado_range_date`
--
ALTER TABLE `tbl_kado_range_date`
<<<<<<< HEAD
  ADD PRIMARY KEY (`id_date`);
=======
  ADD PRIMARY KEY (`id`);
>>>>>>> g

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
<<<<<<< HEAD
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
=======
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
>>>>>>> g

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
<<<<<<< HEAD
  MODIFY `id_barang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
=======
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
>>>>>>> g

--
-- AUTO_INCREMENT for table `tbl_kado_buat`
--
ALTER TABLE `tbl_kado_buat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_kado_range_date`
--
ALTER TABLE `tbl_kado_range_date`
<<<<<<< HEAD
  MODIFY `id_date` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
=======
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
>>>>>>> g

--
-- AUTO_INCREMENT for table `tbl_kado_untuk_acara`
--
ALTER TABLE `tbl_kado_untuk_acara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_kode_barang`
--
ALTER TABLE `tbl_kode_barang`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
>>>>>>> g

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
