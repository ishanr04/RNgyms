-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2021 at 06:25 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gymdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `itemName` varchar(150) NOT NULL,
  `description` varchar(300) NOT NULL,
  `itemImage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `itemName`, `description`, `itemImage`) VALUES
(1, 'Treadmill', 'life is like a treadmil. if you dont move, you will fall..', 'img1.jpg'),
(2, 'Yoga', 'yoga adds years to your life and life to your years..', 'img2.jpg'),
(3, 'Trainer', 'what seems impossible today will one day become your warm-up..', 'img3.jpg'),
(4, 'Equipments', 'push through the pain on the other side is the reward..', 'img4.jpg'),
(5, 'Boxing', 'be stronger than your strongest excuse..', 'img5.jpg'),
(6, 'Weight Lifting', 'the body achieves what the mind believes..', 'img6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `package-details`
--

CREATE TABLE `package-details` (
  `packageId` int(11) NOT NULL,
  `packageName` varchar(150) NOT NULL,
  `packagePrice` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package-details`
--

INSERT INTO `package-details` (`packageId`, `packageName`, `packagePrice`) VALUES
(1, 'Individual Male', '23800.00'),
(2, 'Individual Female', '19800.00'),
(3, 'Student', '16000.00'),
(4, 'Family', '39500.00'),
(5, 'Monthly', '6000.00');

-- --------------------------------------------------------

--
-- Table structure for table `product-details`
--

CREATE TABLE `product-details` (
  `productId` int(11) NOT NULL,
  `productName` varchar(150) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `productImage` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product-details`
--

INSERT INTO `product-details` (`productId`, `productName`, `price`, `quantity`, `productImage`) VALUES
(1, 'NITRO TECH', '12000.00', 20, 'sup1.png'),
(2, 'COMBATXL', '10800.00', 10, 'sup2.png'),
(3, 'WHEY', '16000.00', 50, 'sup3.png'),
(4, 'MASS TECH', '12500.00', 15, 'sup4.png'),
(5, 'BODYBUILDING PILLS', '9000.00', 40, 'sup5.png'),
(6, 'JYM', '14000.00', 20, 'sup6.png');

-- --------------------------------------------------------

--
-- Table structure for table `registration-details`
--

CREATE TABLE `registration-details` (
  `Id` int(11) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` int(12) NOT NULL,
  `address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration-details`
--

INSERT INTO `registration-details` (`Id`, `firstname`, `lastname`, `email`, `number`, `address`) VALUES
(1, 'Sasha', 'Evans', 'sshevans@gmail.com', 776348169, 'No 96/1, Park Lane , Colombo 02'),
(2, 'Kevin', 'Ferdo', 'kevin@gmail.com', 718548789, 'No:31/1, Park Road , Colombo 04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package-details`
--
ALTER TABLE `package-details`
  ADD PRIMARY KEY (`packageId`);

--
-- Indexes for table `product-details`
--
ALTER TABLE `product-details`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `registration-details`
--
ALTER TABLE `registration-details`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `package-details`
--
ALTER TABLE `package-details`
  MODIFY `packageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product-details`
--
ALTER TABLE `product-details`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registration-details`
--
ALTER TABLE `registration-details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
