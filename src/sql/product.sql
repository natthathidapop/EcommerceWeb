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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(2) UNSIGNED ZEROFILL NOT NULL,
  `pro_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `type_id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `price` smallint(5) NOT NULL,
  `amount` smallint(3) NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `detail`, `type_id`, `price`, `amount`, `image`) VALUES
(01, 'Chocolate Bar', 'Cacao from Wang Kham Farm that has been naturally fermented by microorganisms Chocolate Cereal Really Chocolate for chocolate lovers without sugar', 001, 150, 23, 'chocbar.png'),
(02, 'Chocolate Cubes', 'Cacao from Wang Kham Farm fermentation of cocoa by natural microorganisms Cereal chocolate, the actual stuff for fans of chocolate Without sugar, concentrated 54%, 75%, 85%, or 100%, square form, size 10 to 12 grams, fit in a bite, and suitable for dessert consumption. Or you can produce hot or cold chocolate by dissolving in hot milk or water. Available in a 120 gram package', 001, 150, 17, 'choccubes.png'),
(03, 'Cocoa Bean Shell Tea', 'Cocoa Bean Shell Tea no calories, soak in hot water, enjoy all day while relaxing to the scent of chocolate and light orange.', 001, 150, 25, 'cocoatea.png'),
(04, 'Galangal Herbal Tea', 'Galangal herbal tea from Ban Rim Yom Herbal Community Enterprise (using sweetness from stevia) Properties: relieves cough, sore throat, and phlegm; aids with digestion. Decrease intestinal peristalsis to help with the symptoms of arthritis - Prevents gastric ulcers.', 003, 100, 29, 'kah.jpg'),
(05, 'Citronella Herbal Tea', 'Citronella, herbal tea, Ban Rim Yom Herbal Community Enterprise (using sweetness from stevia) Properties: diuretic, lowers cholesterol, cures flatulence, flatulence, and distension.', 003, 100, 21, 'takai.jpg'),
(06, 'Safflower Herbal Tea', 'Safflower herbal tea from Ban Rim Yom Herbal Community Enterprise (using sweetness from stevia) Benefits - Feed the heart - Sift to avoid clogging with fat. -Decreased Cholesterol.', 003, 100, 29, 'dok.jpg'),
(07, 'Cat Necklace', 'Cat necklace, indigo-dyed fabric work, one piece of fabric will be unique. The product will look the same, but the color and pattern will not be the same.', 002, 99, 28, 'cat.png'),
(08, 'Handkerchief', 'Handkerchief (tie-dye) *** Each piece of fabric that is dyed indigo is unique. Although the product\'s color and pattern will differ, its appearance will remain the same.', 002, 49, 22, 'handkerchief.png'),
(09, 'Bucket Hat', 'Hat (tie-dye) *** Each piece of fabric that is dyed indigo is unique. Although the product\'s color and pattern will differ, its appearance will remain the same.', 002, 199, 45, 'hat.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(2) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
