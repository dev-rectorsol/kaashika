-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 03, 2020 at 04:01 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `pbc` varchar(24) DEFAULT NULL COMMENT 'Releted to id',
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` int(5) NOT NULL,
  `profile_pic` text NOT NULL,
  `discount` int(5) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(64) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pbc`, `name`, `description`, `price`, `profile_pic`, `discount`, `quantity`, `status`, `created_at`, `updated_at`) VALUES
(23, NULL, 'Shree', '<p>beautiful</p>', 2000, 'DSC_0146-copy-330x413.jpg', 10, 1, 'On_Sell', '2020-05-04 20:30:33', NULL),
(25, NULL, 'Dupatta', '<p>nice</p>', 200, '002-330x413.jpg', 12, 2, 'On_Sell', '2020-05-04 20:36:22', NULL),
(27, NULL, 'Lehenga', '<p>marrege party wear</p>', 10000, '1562871246794_0_.jpg', 12, 2, 'Best_Sell', '2020-05-05 18:09:36', NULL),
(28, NULL, 'lehenga', '<p>party wear henga</p>', 9000, 'download_(1).jpg', 12, 5, 'On_Sell', '2020-05-05 18:33:27', NULL),
(31, NULL, 'saree', '<p>df dhf ssudhf igdsvv uyvsv cvydv mvgsh</p>', 200, 'DSC_0381-330x4131.jpg', 20, 1, 'On_Sell', '2020-05-13 14:23:37', NULL),
(41, NULL, 'cotoon saree', '<p>xcvbnmc dfghm fghjk fdfghj, dfh</p>', 200, 'DSC_0146-copy-330x4131.jpg', 0, 3, 'On_Sell', '2020-05-15 16:45:38', NULL),
(42, NULL, 'product1', '<p>vn</p>', 200, '1562871246794_0_1.jpg', 0, 8, 'Best_Sell', '2020-05-18 22:01:45', NULL),
(45, NULL, 'Salwar kameez', '<p>beautifuly dress</p>', 900, 'cream-cotton-salwar-kameez-137927-800x1100.jpg', 10, 2, 'Best_Sell', '2020-05-30 06:13:24', NULL),
(46, NULL, 'Lehenga', '<p><span xss=removed>A </span><b xss=removed>Lehenga</b><span xss=removed> is a form of skirt from the Indian subcontinent which is long and embroidered usually paired with a dupatta. </span><br></p>', 5000, '1979lg25-n228.jpg', 20, 1, 'On_Sell', '2020-06-02 15:48:09', NULL),
(47, NULL, 'Saree', '<p><span xss=removed>A wedding sari is the traditional wedding dress of Indian women. The sari is traditionally a combination of red and green, with golden brocade.</span><br></p>', 10000, '0621119_admirable-mehendi-silk-sarees.jpeg', 12, 2, 'On_Sell', '2020-06-02 15:52:16', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pbc` (`pbc`),
  ADD KEY `product` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
