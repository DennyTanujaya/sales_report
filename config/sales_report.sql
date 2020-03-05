-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2020 at 07:24 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sales_report`
--

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `eventName` varchar(100) NOT NULL,
  `date` varchar(20) NOT NULL,
  `salesActivity` varchar(20) NOT NULL,
  `salesVisit` varchar(20) NOT NULL,
  `tradeShow` varchar(20) NOT NULL,
  `salutation` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `typeAccount` varchar(50) NOT NULL,
  `contactType` varchar(100) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `industry` varchar(100) NOT NULL,
  `affilation` varchar(100) NOT NULL,
  `emailMarketing` varchar(5) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `targetSegment` varchar(100) NOT NULL,
  `accommodation` varchar(100) NOT NULL,
  `products` varchar(100) NOT NULL,
  `pcAccommodation` varchar(100) NOT NULL,
  `pcPcm` varchar(100) NOT NULL,
  `accountOwnerId` varchar(20) NOT NULL,
  `accountOwnerMy` varchar(20) NOT NULL,
  `accountOwnerTh` varchar(20) NOT NULL,
  `accountOwnerVt` varchar(20) NOT NULL,
  `defaultCurrency` varchar(5) NOT NULL,
  `language` varchar(20) NOT NULL,
  `sourceMarket` varchar(20) NOT NULL,
  `credit` varchar(20) NOT NULL,
  `numberOfDays` varchar(50) NOT NULL,
  `creditTerm` varchar(50) NOT NULL,
  `meetingSummary` varchar(300) NOT NULL,
  `followUp` varchar(50) NOT NULL,
  `pic` varchar(20) NOT NULL,
  `deadLine` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
