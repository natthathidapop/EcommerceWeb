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
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `orderID` int(10) UNSIGNED ZEROFILL NOT NULL COMMENT 'เลขที่ใบสั่งซื้อ',
  `cus_name` varchar(60) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อ-นามสกุล',
  `address` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'ที่อยู่',
  `telephone` int(10) NOT NULL COMMENT 'เบอร์โทร',
  `total_price` float NOT NULL COMMENT 'ราคารวมสุทธิ',
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'วันที่สั่งซื้อ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`orderID`, `cus_name`, `address`, `telephone`, `total_price`, `reg_date`) VALUES
(0000000003, 'nattha thida', 'dfdfdf', 966435678, 600, '2023-03-09 12:08:01'),
(0000000004, 'nattha thida', 'dfdfdf', 966435678, 600, '2023-03-09 12:18:54'),
(0000000005, 'nattha thida', 'dfdfdf', 966435678, 600, '2023-03-09 12:28:59'),
(0000000006, 'nattha thida', 'dfdfdf', 966435678, 600, '2023-03-09 12:41:44'),
(0000000007, 'nutty nut', 'kurddd', 958456875, 300, '2023-03-09 12:50:53'),
(0000000008, 'nutty nut', 'kurddd', 958456875, 0, '2023-03-09 13:01:59'),
(0000000009, 'nattha thida', 'ewrewf', 5846987, 150, '2023-03-09 13:03:19'),
(0000000011, 'nattha', 'rt', 98745, 450, '2023-03-09 16:49:32'),
(0000000012, 'tyty', 'dddg hh', 65437567, 500, '2023-03-09 16:57:30'),
(0000000013, 'trt opp', 'ukljkljgllljfgh', 2147483647, 448, '2023-03-09 17:50:56'),
(0000000014, 'pop', 'nut', 2147483647, 150, '2023-03-09 18:53:47'),
(0000000015, 'nattha thida', 'hugiu', 2147483647, 150, '2023-03-09 18:57:50'),
(0000000016, 'ee', 'fghh', 454768789, 49, '2023-03-09 19:09:30'),
(0000000017, 'dtert', 'tryrty', 87965879, 349, '2023-03-09 19:58:36'),
(0000000018, 'kli;', '7il.', 2147483647, 49, '2023-03-09 20:11:27'),
(0000000019, 'nattha thida', 'dfydfgyh', 2147483647, 150, '2023-03-09 20:23:49'),
(0000000020, 'yujtyj', 'rujtyj', 56354363, 150, '2023-03-10 10:47:29'),
(0000000021, 'hguy', 'rtrt', 863563, 150, '2023-03-10 10:47:48'),
(0000000022, 'iuiu', 'tyfhgu', 5856456, 199, '2023-03-10 11:19:03'),
(0000000023, 'tha', 'pop', 8546985, 98, '2023-03-10 14:00:45'),
(0000000024, 'tyty', 'กิติกาญพลัส', 2147483647, 249, '2023-03-10 14:15:36'),
(0000000025, 'สวัสดีจ้า', '55555', 1234569875, 198, '2023-03-10 14:18:43'),
(0000000026, 'ggg', 'dstff', 2147483647, 200, '2023-03-10 14:22:41'),
(0000000027, 'tyty', 'uiyh', 56468765, 300, '2023-03-10 16:09:21'),
(0000000028, 'fgg', 'fgfg', 57675, 150, '2023-03-10 16:53:16'),
(0000000029, 'hh', 'dfdfgh', 567, 797, '2023-03-10 23:12:21'),
(0000000030, 'rrr', 'uuuu', 558536, 749, '2023-03-11 15:12:21'),
(0000000031, 'nattharr', 'gggg', 565353, 250, '2023-03-11 15:41:42'),
(0000000032, 'tttt', 'iii', 55555, 100, '2023-03-11 15:44:02'),
(0000000033, 'eee', 'etyyy', 565635, 100, '2023-03-11 15:49:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`orderID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `orderID` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'เลขที่ใบสั่งซื้อ', AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
