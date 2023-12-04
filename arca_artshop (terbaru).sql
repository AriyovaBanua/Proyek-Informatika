-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 01:25 AM
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
  `password` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `updated_at`, `created_at`) VALUES
('admin', '$2y$12$yqXsuS50foQOOLF5QB9EN.Ad11wcFfAEdaQCtr03ZkFvUBjYJskBi', '2023-11-30 14:58:23', '2023-11-30 14:58:23'),
('tejak', '$2y$12$fjAiQkDJCriqy/rcBZZHmuY/RvphAHBZCtGWw1TTGRWEeb6jF4xm2', '2023-11-30 15:07:46', '2023-11-30 15:07:46');

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
('customer1@example.com', 'John Doe', '08123456789'),
('customer2@example.com', 'Jane Smith', '087654321'),
('customer3@example.com', 'Alice Johnson', '08543217654'),
('customer4@example.com', 'Bob Williams', '08123784653'),
('customer5@example.com', 'Emily Brown', '08976543217'),
('surtitejo@gmail.com', 'Surti', '085678349921');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id` int(11) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id`, `order_id`, `code`, `kuantitas`, `subtotal`) VALUES
(374, '0001', 'S001', 1, 425000),
(375, '0002', 'S001', 5, 170000),
(376, '0003', 'S001', 2, 85000),
(377, '0004', 'S001', 4, 255000),
(378, '0005', 'S001', 2, 255000),
(379, '0001', 'S002', 1, 255000),
(380, '0002', 'S002', 1, 425000),
(381, '0003', 'S002', 1, 170000),
(382, '0004', 'S002', 4, 340000),
(383, '0005', 'S002', 2, 85000),
(384, '0001', 'S003', 2, 90000),
(385, '0002', 'S003', 2, 270000),
(386, '0003', 'S003', 4, 90000),
(387, '0004', 'S003', 5, 90000),
(388, '0005', 'S003', 1, 180000),
(389, '0001', 'S004', 5, 500000),
(390, '0002', 'S004', 1, 125000),
(391, '0003', 'S004', 3, 250000),
(392, '0004', 'S004', 1, 125000),
(393, '0005', 'S004', 4, 125000),
(394, '0001', 'S005', 2, 425000),
(395, '0002', 'S005', 3, 425000),
(396, '0003', 'S005', 3, 170000),
(397, '0004', 'S005', 5, 425000),
(398, '0005', 'S005', 3, 340000),
(399, '0001', 'S006', 5, 220000),
(400, '0002', 'S006', 2, 110000),
(401, '0003', 'S006', 2, 275000),
(402, '0004', 'S006', 4, 110000),
(403, '0005', 'S006', 4, 220000),
(404, '0001', 'S007', 4, 275000),
(405, '0002', 'S007', 1, 110000),
(406, '0003', 'S007', 1, 275000),
(407, '0004', 'S007', 2, 275000),
(408, '0005', 'S007', 5, 165000),
(409, '0001', 'S008', 1, 270000),
(410, '0002', 'S008', 1, 675000),
(411, '0003', 'S008', 1, 540000),
(412, '0004', 'S008', 4, 540000),
(413, '0005', 'S008', 4, 405000),
(414, '0001', 'S009', 5, 180000),
(415, '0002', 'S009', 5, 450000),
(416, '0003', 'S009', 4, 270000),
(417, '0004', 'S009', 5, 360000),
(418, '0005', 'S009', 5, 450000);

-- --------------------------------------------------------

--
-- Table structure for table `history_produk`
--

CREATE TABLE `history_produk` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `update_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history_produk`
--

INSERT INTO `history_produk` (`id`, `code`, `harga`, `update_time`) VALUES
(6, 'S002', 85000, '2023-12-01'),
(7, 'S003', 90000, '2023-12-01'),
(8, 'S003', 20000, '2023-12-02'),
(10, 'S001', 40000, '2023-12-02'),
(12, 'S001', 85000, '2023-12-03'),
(13, 'S003', 90000, '2023-12-03'),
(14, 'S004', 125000, '2023-12-03'),
(15, 'S005', 85000, '2023-12-03'),
(16, 'S006', 55000, '2023-12-03'),
(17, 'S007', 55000, '2023-12-03'),
(18, 'S008', 55000, '2023-12-03'),
(19, 'S009', 90000, '2023-12-03'),
(20, 'S008', 135000, '2023-12-03');

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
('S001', '13', 'Animal', 'Sapi Terbang', 85000, 'S', 'sapi.jpg', 'Hitam-Putih'),
('S002', '12', 'Animal', 'Zebra Nyengir', 85000, 'S', '6569333401ac6_zebra.jpg', 'Hitam-Putih'),
('S003', '6', 'Animal', 'Hiu Sunda', 90000, 'S', '6569345a1a48e_hiu.jpg', 'Biru'),
('S004', '8', 'Animal', 'Lumba-lumba Jawa', 125000, 'S', '656cf56fc7752_dolpin.jpg', 'Biru'),
('S005', '9', 'Animal', 'Keledai asli Ponorogo', 85000, 'S', '656cf76e77503_kedelai.jpg', 'Abu-abu'),
('S006', '5', 'Animal', 'Kucing Ireng', 55000, 'S', '656cf7c9440ab_kucing hitam.jpg', 'Hitam'),
('S007', '10', 'Animal', 'Kocing Oren', 55000, 'S', '656cf857a9d5f_kucing oren.jpg', 'Orange'),
('S008', '12', 'Animal', 'Kucing asli Beijing', 135000, 'L', '656cf931353ee_kucing.jpg', 'Putih'),
('S009', '15', 'Animal', 'Paus asli Selat Malaka', 90000, 'M', '656cf9fdcabb3_paus.jpg', 'Biru');

-- --------------------------------------------------------

--
-- Table structure for table `transakasi`
--

CREATE TABLE `transakasi` (
  `order_id` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `status_pesanan` varchar(20) NOT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transakasi`
--

INSERT INTO `transakasi` (`order_id`, `email`, `date`, `status_pesanan`, `total`) VALUES
('0001', 'customer1@example.com', '2023-12-15', 'Proses', 2640000),
('0002', 'customer2@example.com', '2023-11-14', 'Dikirim', 2760000),
('0003', 'customer3@example.com', '2023-10-26', 'Proses', 2125000),
('0004', 'customer4@example.com', '2023-09-05', 'Selesai', 2520000),
('0005', 'surtitejo@gmail.com', '2023-08-23', 'Proses', 2225000);

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
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_transaksi_produk` (`code`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `history_produk`
--
ALTER TABLE `history_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `transakasi`
--
ALTER TABLE `transakasi`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=437;

--
-- AUTO_INCREMENT for table `history_produk`
--
ALTER TABLE `history_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `transakasi` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_transaksi_produk` FOREIGN KEY (`code`) REFERENCES `produk` (`code`);

--
-- Constraints for table `transakasi`
--
ALTER TABLE `transakasi`
  ADD CONSTRAINT `transakasi_ibfk_1` FOREIGN KEY (`email`) REFERENCES `customer` (`email`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
