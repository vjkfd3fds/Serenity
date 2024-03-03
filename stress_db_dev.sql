-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2024 at 06:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stress.db.dev`
--
CREATE DATABASE IF NOT EXISTS `stress.db.dev` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `stress.db.dev`;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_details`
--

CREATE TABLE `doctor_details` (
  `did` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `workemail` varchar(50) NOT NULL,
  `workingdate` date NOT NULL,
  `dob` date NOT NULL,
  `address` text NOT NULL,
  `experience` text NOT NULL,
  `education` text NOT NULL,
  `description` text NOT NULL,
  `profile` varchar(50) NOT NULL,
  `license` varchar(50) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor_details`
--

INSERT INTO `doctor_details` (`did`, `fullname`, `workemail`, `workingdate`, `dob`, `address`, `experience`, `education`, `description`, `profile`, `license`, `phonenumber`, `status`, `age`) VALUES
(1, 'Jxy', 'workemail@gmail.com', '2024-03-28', '2003-06-19', 'Adoor - Mannady Road', 'wrrerewr', 'erqrqwrweqr', 'qwerqwrwqere', 'a14b87bfd1d5c37f6b1354f7d3d2a685.jpg', 'ebe6631e86211b958755d41033b196ee.jpg', 2147483647, 'verified', 18);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_login`
--

CREATE TABLE `doctor_login` (
  `did` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor_login`
--

INSERT INTO `doctor_login` (`did`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'Thushar', 'T', 'c8354270@gmail.com', 'password'),
(2, 'Thushar', 'T', 'thushar17223@gmail.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `uid` int(11) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `did` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `doctorname` varchar(40) NOT NULL,
  `subscribed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`did`, `uid`, `doctorname`, `subscribed`) VALUES
(1, 1, 'Jxy', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT 'unique id',
  `firstname` varchar(20) NOT NULL COMMENT 'first name of the user',
  `lastname` varchar(20) NOT NULL COMMENT 'lastname of the user',
  `email` varchar(25) NOT NULL COMMENT 'email of the user',
  `phonenumber` int(11) NOT NULL COMMENT 'phone number of the user',
  `dob` date NOT NULL COMMENT 'date of birth',
  `gender` varchar(10) NOT NULL COMMENT 'gender of the user',
  `password` varchar(100) NOT NULL COMMENT 'passwords (stored in hash)',
  `state` varchar(20) NOT NULL COMMENT 'state of the user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `phonenumber`, `dob`, `gender`, `password`, `state`) VALUES
(1, 'Thushar', 'T', 'thushar17223@gmail.com', 2147483647, '2024-02-14', 'male', '5f4dcc3b5aa765d61d8327deb882cf99', 'Kerala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor_login`
--
ALTER TABLE `doctor_login`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor_login`
--
ALTER TABLE `doctor_login`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'unique id', AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
