-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2018 at 04:41 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pre_order`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `order_date` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000' ON UPDATE CURRENT_TIMESTAMP(6),
  `orders` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `fname`, `lname`, `email`, `order_date`, `orders`) VALUES
(1, 'ryan', 'decena', '', '0000-00-00 00:00:00.000000', 'sample'),
(2, 'robert', 'Ryan', 'rob@rob.com', '2018-02-28 18:58:42.000000', 'a'),
(4, 'robert', 'Ryan', 'rob@rob.com', '2018-02-28 19:02:06.000000', 'a'),
(5, 'robert', 'Ryan', 'rob@rob.com', '2018-02-28 19:02:57.000000', 'a'),
(6, 'robert', 'Ryan', 'rob@rob.com', '2018-02-28 19:07:01.000000', 'a:5:{i:0;s:11:\"Whole Wheat\";i:1;s:4:\"Mayo\";i:2;s:17:\"Turkey Bacon Club\";i:3;s:8:\"American\";i:4;s:8:\"Cucumber\";}'),
(7, 'robert', 'Ryan', 'rob@rob.com', '2018-02-28 19:21:03.000000', 'a:5:{i:0;s:11:\"Whole Wheat\";i:1;s:4:\"Mayo\";i:2;s:17:\"Turkey Bacon Club\";i:3;s:8:\"American\";i:4;s:8:\"Cucumber\";}'),
(8, 'robert', 'Ryan', 'rob@rob.com', '2018-02-28 19:21:49.000000', 'a:5:{i:0;s:11:\"Whole Wheat\";i:1;s:4:\"Mayo\";i:2;s:17:\"Turkey Bacon Club\";i:3;s:8:\"American\";i:4;s:8:\"Cucumber\";}'),
(9, 'asd', 'sd', 'sdasd@ay', '2018-02-28 19:45:02.000000', 'a:5:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";}'),
(10, 'er', 'er', 'asdasd@yahoo.com', '2018-02-28 20:29:36.000000', 'a:5:{i:0;s:12:\"Italian Herb\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
