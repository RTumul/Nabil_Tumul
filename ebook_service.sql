-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2021 at 11:29 PM
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
-- Database: `ebook_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `deliveryman_info`
--

CREATE TABLE `deliveryman_info` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `birthdate` varchar(10) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deliveryman_info`
--

INSERT INTO `deliveryman_info` (`id`, `name`, `uname`, `pass`, `email`, `phone`, `birthdate`, `gender`) VALUES
(1, 'Md Ridwanuzzaman', 'Tumul123', 'Tumul#1234', 'amitumul@gmail.com', 1725103018, '3/Mar(3)/2', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `seller_info`
--

CREATE TABLE `seller_info` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone_Number` varchar(15) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Date_of_Birth` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller_info`
--

INSERT INTO `seller_info` (`ID`, `Name`, `Username`, `Password`, `Email`, `Phone_Number`, `Address`, `Gender`, `Date_of_Birth`) VALUES
(402, 'Mahbuba Sharmin Ruba', 'Ruba123', 'Tumul123', 'amitumul@gmail.com', '01725103018', 'House-17, Road- 5, Block- C, Pallabi,  Mirpur 12', 'Male', '12/03/2000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deliveryman_info`
--
ALTER TABLE `deliveryman_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`uname`,`email`);

--
-- Indexes for table `seller_info`
--
ALTER TABLE `seller_info`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Username` (`Username`,`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deliveryman_info`
--
ALTER TABLE `deliveryman_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seller_info`
--
ALTER TABLE `seller_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=403;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
