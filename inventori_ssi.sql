-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2020 at 09:16 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventori_ssi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblbarang`
--

CREATE TABLE `tblbarang` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(15) NOT NULL,
  `nama_barang` varchar(35) NOT NULL,
  `kode_kelompok` varchar(15) NOT NULL,
  `rak` varchar(15) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `foto` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbarang`
--

INSERT INTO `tblbarang` (`id`, `kode_barang`, `nama_barang`, `kode_kelompok`, `rak`, `harga_beli`, `harga_jual`, `stock`, `foto`) VALUES
(1, 'BRG-1', 'Tes Nama Barang 1', 'KLP-1', '', 15000, 17500, 50, ''),
(2, 'BRG-2', 'Tes Nama Barang 2', 'KLP-1', '', 32500, 40000, 100, ''),
(3, 'BRG-3', 'Tes Nama Barang 3', 'KLP-1', '', 22500, 30000, 100, ''),
(5, 'BRG-4', 'msr', 'swd 9tm', 'f12', 1500000, 0, 0, ''),
(6, '2221', 'conrod us', 'swd 16tm', 'a2', 1000000, 0, 9, ''),
(7, '300', 'press', 'swd 16tm', 'a1', 10000, 0, 0, ''),
(8, '301', 'loop', 'swd 9tm', 'a2', 1000, 0, 0, ''),
(9, '302', 'o ring', 'swd 16tm', 'a3', 100, 0, 0, ''),
(10, '303', 'gh', 'swd 9tm', 'a3', 400, 0, 0, ''),
(11, '11111111', 'der', 'pielstick', 'd2', 500, 0, -2, ''),
(12, '40000', 'ver', 'swd 16tm', 'a3', 2000, 0, 0, '12.JPG'),
(13, '40001', 'vert', 'swd 16tm', '12', 100000, 0, 0, '13.jpg'),
(14, '00212223331', 'dert', 'swd 16tm', 'a1', 145, 0, 0, '14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblkelompok`
--

CREATE TABLE `tblkelompok` (
  `id` int(11) NOT NULL,
  `kode_kelompok` varchar(15) NOT NULL,
  `nama_kelompok` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblkelompok`
--

INSERT INTO `tblkelompok` (`id`, `kode_kelompok`, `nama_kelompok`) VALUES
(1, 'KLP-1', 'Makanan');

-- --------------------------------------------------------

--
-- Table structure for table `tblpemasok`
--

CREATE TABLE `tblpemasok` (
  `id` int(11) NOT NULL,
  `kode_pemasok` varchar(15) NOT NULL,
  `nama_pemasok` varchar(35) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpemasok`
--

INSERT INTO `tblpemasok` (`id`, `kode_pemasok`, `nama_pemasok`, `alamat`) VALUES
(1, 'PMS-1', 'Toko Jaya Makmur', 'Palembang 0711-010101'),
(2, 'PMS-2', 'rizky', 'jakarta selatan');

-- --------------------------------------------------------

--
-- Table structure for table `tblpengguna`
--

CREATE TABLE `tblpengguna` (
  `id` int(11) NOT NULL,
  `user` varchar(15) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpengguna`
--

INSERT INTO `tblpengguna` (`id`, `user`, `password`) VALUES
(2, 'brian', 'cbd44f8b5b48a51f7dab98abcdf45d4e'),
(3, 'reza', 'bb98b1d0b523d5e783f931550d7702b6');

-- --------------------------------------------------------

--
-- Table structure for table `tbltransaksi_beli`
--

CREATE TABLE `tbltransaksi_beli` (
  `id` int(11) NOT NULL,
  `no_faktur` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_pemasok` varchar(15) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltransaksi_beli`
--

INSERT INTO `tbltransaksi_beli` (`id`, `no_faktur`, `tanggal`, `kode_pemasok`, `total`) VALUES
(1, 'FB-0314-1', '2014-03-25', 'PMS-1', 15000),
(2, 'FB-0314-2', '2014-03-25', 'PMS-1', 812500),
(3, 'FB-0314-3', '2014-03-26', 'PMS-1', 1850000),
(4, 'FB-0220-4', '2020-02-21', 'PMS-2', 0),
(5, 'FB-0220-5', '2020-02-21', 'PMS-2', 0),
(6, 'FB-0220-6', '2020-02-22', 'PMS-2', 0),
(7, 'FB-0220-7', '2020-02-22', 'PMS-2', 1000000),
(8, 'FB-0220-8', '2020-02-23', 'PMS-2', 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `tbltransaksi_beli_rinci`
--

CREATE TABLE `tbltransaksi_beli_rinci` (
  `no_faktur` varchar(15) NOT NULL,
  `kode_barang` varchar(15) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltransaksi_beli_rinci`
--

INSERT INTO `tbltransaksi_beli_rinci` (`no_faktur`, `kode_barang`, `harga_beli`, `jumlah`, `sub_total`) VALUES
('FB-0314-1', 'BRG-1', 15000, 1, 15000),
('FB-0314-2', 'BRG-2', 32500, 25, 812500),
('FB-0314-3', 'BRG-3', 22500, 10, 225000),
('FB-0314-3', 'BRG-2', 32500, 50, 1625000),
('FB-0220-4', '2221', 0, 10, 0),
('FB-0220-5', '2221', 0, 10, 0),
('FB-0220-5', '2221', 0, 4, 0),
('FB-0220-6', '2221', 0, 1, 0),
('FB-0220-7', '2221', 1000000, 1, 0),
('FB-0220-7', '2221', 1000000, 1, 1000000),
('FB-0220-8', '2221', 1000000, 1, 1000000),
('FB-0220-9', '2221', 1000000, 1, 1000000),
('FB-0220-9', '2221', 1000000, 2, 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `tbltransaksi_jual`
--

CREATE TABLE `tbltransaksi_jual` (
  `id` int(11) NOT NULL,
  `no_faktur` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltransaksi_jual`
--

INSERT INTO `tbltransaksi_jual` (`id`, `no_faktur`, `tanggal`, `total`) VALUES
(1, 'FJ-0314-1', '2014-03-25', 2035000),
(2, 'FJ-0314-2', '2014-03-25', 3437500),
(3, 'FJ-0314-3', '2014-03-26', 1500000),
(5, 'SSIPB-0220-4', '2020-02-22', 0),
(6, 'SSIPB-0220-6', '2020-02-22', 1000000),
(7, 'FJ-0220-7', '2020-02-23', 3000500),
(8, 'FJ-0220-8', '2020-02-23', 500);

-- --------------------------------------------------------

--
-- Table structure for table `tbltransaksi_jual_rinci`
--

CREATE TABLE `tbltransaksi_jual_rinci` (
  `no_faktur` varchar(15) NOT NULL,
  `kode_barang` varchar(15) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltransaksi_jual_rinci`
--

INSERT INTO `tbltransaksi_jual_rinci` (`no_faktur`, `kode_barang`, `harga_jual`, `jumlah`, `sub_total`) VALUES
('FJ-0314-1', 'BRG-1', 17500, 2, 35000),
('FJ-0314-1', 'BRG-2', 40000, 50, 2000000),
('FJ-0314-2', 'BRG-2', 40000, 75, 3000000),
('FJ-0314-2', 'BRG-1', 17500, 25, 437500),
('FJ-0314-3', 'BRG-3', 30000, 50, 1500000),
('SSIPB-0220-4', '2221', 0, 9, 0),
('SSIPB-0220-6', '2221', 1000000, 1, 1000000),
('FJ-0220-7', '2221', 1000000, 2, 2000000),
('FJ-0220-7', '2221', 1000000, 1, 1000000),
('FJ-0220-7', '11111111', 500, 1, 500),
('FJ-0220-8', '11111111', 500, 1, 500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblbarang`
--
ALTER TABLE `tblbarang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblkelompok`
--
ALTER TABLE `tblkelompok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpemasok`
--
ALTER TABLE `tblpemasok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpengguna`
--
ALTER TABLE `tblpengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltransaksi_beli`
--
ALTER TABLE `tbltransaksi_beli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltransaksi_jual`
--
ALTER TABLE `tbltransaksi_jual`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblbarang`
--
ALTER TABLE `tblbarang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tblkelompok`
--
ALTER TABLE `tblkelompok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblpemasok`
--
ALTER TABLE `tblpemasok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblpengguna`
--
ALTER TABLE `tblpengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbltransaksi_beli`
--
ALTER TABLE `tbltransaksi_beli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbltransaksi_jual`
--
ALTER TABLE `tbltransaksi_jual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
