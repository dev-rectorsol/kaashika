-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2020 at 08:31 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `homesetting`
--

CREATE TABLE `homesetting` (
  `id` int(11) NOT NULL,
  `address` varchar(62) NOT NULL,
  `email` varchar(32) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `title` varchar(32) NOT NULL,
  `favicon` varchar(50) NOT NULL,
  `about` varchar(132) NOT NULL,
  `logo` varchar(62) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homesetting`
--

INSERT INTO `homesetting` (`id`, `address`, `email`, `phone`, `title`, `favicon`, `about`, `logo`, `added_date`) VALUES
(1, '12/A sector 3 varanasi up India', 'onlinekashika@gmail.com', '9876543214', 'kashika', 'images1.png', 'Hello , What are you Say this site?', 'logo6.png', '2020-07-26 03:54:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `homesetting`
--
ALTER TABLE `homesetting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `homesetting`
--
ALTER TABLE `homesetting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
