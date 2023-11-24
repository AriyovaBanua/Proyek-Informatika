-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2023 at 11:41 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arca_artshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('arcaarca', 'arcaAja'),
('yoyo', '$2y$10$1d1piZbSQAGfWUMerNKzs.H0gJ4uJNrjEZkgKQBEyf9nY4yiHDgZm');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `email` varchar(50) NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`email`, `nama_customer`, `no_hp`) VALUES
('surtitejo@gmail.com', 'Surti', '085678349921');

-- --------------------------------------------------------

--
-- Table structure for table `history_produk`
--

CREATE TABLE `history_produk` (
  `code` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `update_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `code` varchar(50) NOT NULL,
  `stock` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `ukuran` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `warna` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`code`, `stock`, `category`, `nama_produk`, `harga`, `ukuran`, `gambar`, `warna`) VALUES
('S001', '20', 'Animal', 'Sapi Terbang', 75000, 'S', 'G001', 'Hitam-Putih');

-- --------------------------------------------------------

--
-- Table structure for table `total_transakasi`
--

CREATE TABLE `total_transakasi` (
  `id` int(11) NOT NULL,
  `Order_ID` varchar(50) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_pesanan`
--

CREATE TABLE `transaksi_pesanan` (
  `order_id` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `status_pesanan` varchar(50) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `total_transakasi`
--
ALTER TABLE `total_transakasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_pesanan`
--
ALTER TABLE `transaksi_pesanan`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `email` (`email`,`code`),
  ADD KEY `fk_transaksi_produk` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `total_transakasi`
--
ALTER TABLE `total_transakasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi_pesanan`
--
ALTER TABLE `transaksi_pesanan`
  ADD CONSTRAINT `fk_transaksi_constraint` FOREIGN KEY (`email`) REFERENCES `customer` (`email`),
  ADD CONSTRAINT `fk_transaksi_produk` FOREIGN KEY (`code`) REFERENCES `produk` (`code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
