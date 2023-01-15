-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 30, 2022 at 08:50 PM
-- Server version: 5.7.24
-- PHP Version: 8.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minimarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `minimarket`
--

CREATE TABLE `minimarket` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shirt_size` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shirt_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `print_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `print_placing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `byos` tinyint(1) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `minimarket`
--

INSERT INTO `minimarket` (`id`, `name`, `contact`, `shirt_size`, `shirt_color`, `print_color`, `print_placing`, `byos`, `count`) VALUES
(1, 'test', 'test', 'l', 'weiss', 'test', 'tets ', 1, 1),
(4, 'test', 'tgest', 's', 'tie_dye_black', 'test', 'test', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `minimarket`
--
ALTER TABLE `minimarket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `minimarket`
--
ALTER TABLE `minimarket`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
