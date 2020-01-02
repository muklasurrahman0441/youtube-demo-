-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2018 at 08:23 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alibaba`
--

-- --------------------------------------------------------

--
-- Table structure for table `producthome`
--

CREATE TABLE `producthome` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `discription` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producthome`
--

INSERT INTO `producthome` (`id`, `image`, `name`, `price`, `discount`, `discription`) VALUES
(70, 'pic2.jpg', 'ashif rahman', NULL, NULL, 'This is a commercial channel . '),
(71, 'a2.jpg', 'al jajera news', NULL, NULL, 'news appears here from any corner of the world'),
(72, 'a6.jpg', 'the new boston', NULL, NULL, 'any kinds of tutorial can be seen from here . basically technology based tutorials');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `producthome`
--
ALTER TABLE `producthome`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `producthome`
--
ALTER TABLE `producthome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
