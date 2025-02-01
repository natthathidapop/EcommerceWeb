-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2023 at 05:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project246`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL COMMENT 'ลำดับที่',
  `orderID` int(10) UNSIGNED ZEROFILL NOT NULL COMMENT 'เลขใบสั่งซื้อ',
  `pro_id` int(6) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสสินค้า',
  `orderPrice` float NOT NULL COMMENT 'ราคาสินค้า',
  `orderQty` int(11) NOT NULL COMMENT 'จำนวนที่สั่งซื้อ',
  `Total` float NOT NULL COMMENT 'ราคารวม'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `orderID`, `pro_id`, `orderPrice`, `orderQty`, `Total`) VALUES
(3, 0000000011, 000001, 150, 3, 450),
(4, 0000000012, 000002, 150, 2, 300),
(5, 0000000012, 000005, 100, 2, 200),
(6, 0000000013, 000007, 99, 1, 99),
(7, 0000000013, 000009, 199, 1, 199),
(8, 0000000013, 000002, 150, 1, 150),
(9, 0000000014, 000002, 150, 1, 150),
(10, 0000000015, 000002, 150, 1, 150),
(11, 0000000016, 000008, 49, 1, 49),
(12, 0000000017, 000002, 150, 1, 150),
(13, 0000000017, 000009, 199, 1, 199),
(14, 0000000018, 000008, 49, 1, 49),
(15, 0000000019, 000002, 150, 1, 150),
(16, 0000000020, 000002, 150, 1, 150),
(17, 0000000021, 000002, 150, 1, 150),
(18, 0000000022, 000009, 199, 1, 199),
(19, 0000000023, 000008, 49, 2, 98),
(20, 0000000024, 000003, 150, 1, 150),
(21, 0000000024, 000007, 99, 1, 99),
(22, 0000000025, 000004, 100, 1, 100),
(23, 0000000025, 000008, 49, 2, 98),
(24, 0000000026, 000005, 100, 2, 200),
(25, 0000000027, 000001, 150, 2, 300),
(26, 0000000028, 000001, 150, 1, 150),
(27, 0000000029, 000003, 150, 2, 300),
(28, 0000000029, 000005, 100, 2, 200),
(29, 0000000029, 000008, 49, 2, 98),
(30, 0000000029, 000009, 199, 1, 199),
(31, 0000000030, 000002, 150, 2, 300),
(32, 0000000030, 000003, 150, 1, 150),
(33, 0000000030, 000006, 100, 1, 100),
(34, 0000000030, 000009, 199, 1, 199),
(35, 0000000031, 000003, 150, 1, 150),
(36, 0000000031, 000005, 100, 1, 100),
(37, 0000000032, 000005, 100, 1, 100),
(38, 0000000033, 000005, 100, 1, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับที่', AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
