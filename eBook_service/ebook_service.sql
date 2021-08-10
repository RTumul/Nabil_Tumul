-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2021 at 07:30 PM
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
-- Table structure for table `books_info`
--

CREATE TABLE `books_info` (
  `id` int(11) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `wname` varchar(50) NOT NULL,
  `pri` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books_info`
--

INSERT INTO `books_info` (`id`, `bname`, `wname`, `pri`, `email`, `phone`, `uname`, `address`, `image`) VALUES
(24, 'Math', 'Tumul', 120, 'amitumul@gmail.com', 1725103018, 'Tumul156', 'House-17, Road- 5, Block- C, Pallabi,  Mirpur 12', 'uploads/610d125e609584.43099145.jpg'),
(25, 'Sakib', 'Tumul', 120, 'amitumul@gmail.com', 1725103018, 'Turno123', 'House-17, Road- 5, Block- C, Pallabi,  Mirpur 12', 'uploads/610d54212b82a9.16053442.jpg');

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
(3, 'Tumul', 'Tumul125', 'Tumul#123', 'amitumul@gmail.com', 1725103018, '03/03/2000', 'male'),
(11, 'Md Ridwanuzzaman', 'Tumul123', 'Tumul#123', 'tumull@gmail.com', 1725103018, '1/Jan(1)/1', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `seller_info`
--

CREATE TABLE `seller_info` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `birthdate` varchar(10) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller_info`
--

INSERT INTO `seller_info` (`id`, `name`, `uname`, `pass`, `email`, `phone`, `birthdate`, `gender`, `address`) VALUES
(2, 'Turno', 'Turno123', 'Turno#123', 'meh@yahoo.com', 1725103018, '1/Jan(1)/1', 'Female', 'House-17, Road- 5, Block- C, Pallabi,  Mirpur 12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books_info`
--
ALTER TABLE `books_info`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`uname`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books_info`
--
ALTER TABLE `books_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `deliveryman_info`
--
ALTER TABLE `deliveryman_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `seller_info`
--
ALTER TABLE `seller_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
