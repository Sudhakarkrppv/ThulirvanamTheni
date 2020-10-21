-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2019 at 06:22 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plants`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `message` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `message`) VALUES
('', '', ''),
('', '', ''),
('Sudhakar', 'ksk@gmail.com', 'Hai');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `name` varchar(10) NOT NULL,
  `phone_no` bigint(5) NOT NULL,
  `address` varchar(15) NOT NULL,
  `city` varchar(10) NOT NULL,
  `district` varchar(10) NOT NULL,
  `pincode` bigint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`name`, `phone_no`, `address`, `city`, `district`, `pincode`) VALUES
('Sudhakar', 8220169930, 'Nethaji street', 'chennai', 'Nellai', 627810),
('Sudhakar', 8220169930, 'North street', 'madurai', 'Madurai', 627810),
('', 0, '', '', '', 0),
('Dhoni', 9362758498, '4th street', 'madurai', 'Madurai', 627812),
('Athira', 9600642534, 'North street', 'Theni', 'Theni', 625008),
('Athira', 9600642534, '4th street', 'Theni', 'Nellai', 625508),
('Nanthini', 8882993030, 'knsdsl', 'kndc', ',dncs', 623920),
('Dhoni', 8220169930, 'Nethaji street', 'chennai', 'Madurai', 627809);

-- --------------------------------------------------------

--
-- Table structure for table `plant`
--

CREATE TABLE `plant` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(30) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plant`
--

INSERT INTO `plant` (`id`, `name`, `image`, `price`) VALUES
(1, 'Pink White Rose', 'img/r1.jpg', 320),
(2, 'Jatropha', 'img/f6.jpg', 75),
(3, 'Purple Rose', 'img/r3.jpg', 320),
(5, 'Calla Lily', 'img/9.jpg', 200),
(6, 'Kalanchoe', 'img/f9.jpg', 200),
(7, 'Peace Lily', 'img/f1.jpg', 550),
(8, 'Jasmine', 'img/f8.jpg', 75),
(9, 'Poinsettia ', 'img/f10.jpg', 550);

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `email` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`email`, `password`) VALUES
('athira@gmail.co', 'athira'),
('nanthini@gmail.', 'nanthini');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `password`, `email`) VALUES
('Athira', 'athira', 'athira@gmail.com'),
('Dhoni', 'csk', 'csk@gmail.com'),
('Sudhakar', 'ksk', 'ksk@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `plant`
--
ALTER TABLE `plant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
