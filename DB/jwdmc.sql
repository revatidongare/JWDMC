-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 23, 2021 at 12:52 AM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jwdmc`
--

-- --------------------------------------------------------

--
-- Table structure for table `agentreg`
--

CREATE TABLE `agentreg` (
  `id` int(11) NOT NULL,
  `travelagencyname` varchar(100) NOT NULL,
  `yourname` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `whatsappno` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `presentoccupation` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agentreg`
--

INSERT INTO `agentreg` (`id`, `travelagencyname`, `yourname`, `address`, `city`, `state`, `country`, `pincode`, `mobileno`, `whatsappno`, `email`, `password`, `presentoccupation`) VALUES
(1, 'Travelog Immigration', 'Paresh More', 'Kalyani Nagar', 'Pune', 'Maharastra', 'India', '40412', '9975114190', '975114190', 'pallavitambe598@gmail.com', 'pallavi@7276', 'Developer'),
(2, 'jwdmcccc', 'pallavi', 'hfghf', 'anagar', 'mahara', 'India', '46546', '09975114190', '99766745674', 'pallavitambe598@gmail.com', 'jwdmc@1234', 'developer'),
(3, 'ABC Holidays', 'Brian Lara', 'Nigeria', 'Nigeria', 'Africa', 'Africa', '3923910', '1234567890', '1234567890', 'vaibhavpushpa@gmail.com', 'Dongle@123', 'Service');

-- --------------------------------------------------------

--
-- Table structure for table `corporatereg`
--

CREATE TABLE `corporatereg` (
  `id` int(11) NOT NULL,
  `companyname` varchar(100) NOT NULL,
  `contactpersonname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `whatsappno` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `presentoccupation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `corporatereg`
--

INSERT INTO `corporatereg` (`id`, `companyname`, `contactpersonname`, `address`, `city`, `state`, `country`, `pincode`, `mobileno`, `whatsappno`, `email`, `password`, `presentoccupation`) VALUES
(1, 'Travelog world pvt.ltd', 'paresh more', 'at kalyaninagar', 'Pune', 'Maharashtra', 'India', '40412', '9975114190', '975114190', 'pallavitambe598@gmail.com', 'pallavi@7276', 'Developer'),
(2, 'jwdmc', 'paresh more', 'at kalyninagar', 'Pune', 'Maharashtra', 'India', '40412', '9975114190', '975114190', 'pallu5091998@gmail.com', 'pallavi@72766', 'Developer'),
(3, 'travelog', 'pallavi', 'hfghf', 'anagar', 'mahara', 'India', '46546', '09975114190', '', 'pallavitambe598@gmail.com', 'jwdmc@1234', 'developer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agentreg`
--
ALTER TABLE `agentreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporatereg`
--
ALTER TABLE `corporatereg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agentreg`
--
ALTER TABLE `agentreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `corporatereg`
--
ALTER TABLE `corporatereg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
