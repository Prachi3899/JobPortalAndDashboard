-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2025 at 05:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `apply` varchar(255) NOT NULL,
  `qual` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`Id`, `Name`, `apply`, `qual`, `year`) VALUES
(2, 'Prachi Gupta', 'PHP DEV', 'BTECH', '2025'),
(3, 'Rahul', 'cyber security', 'BTECH', '2025'),
(6, 'Prisha', 'software engineer', 'BTECH', '2025'),
(8, 'Tina', 'PHP DEV', 'BTECH', '2025'),
(9, 'Tina', 'PHP DEV', 'BTECH', '2025'),
(10, 'Mansi', 'Network Engineer', 'BTECH', '2025'),
(11, 'Ishika', 'Network Engineer', 'BTECH', '2025'),
(12, 'vimmi', 'PHP DEV', 'BTECH', '2025');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `Id` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `Jdesc` varchar(200) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `CTC` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`Id`, `cname`, `position`, `Jdesc`, `skills`, `CTC`) VALUES
(15, 'XYZ', 'PHP DEV', 'There is one opening', 'PHP,HTML,CSS', '3-5LPA'),
(16, '1stop.ai', 'Cyber security', 'There is one opening', 'Cybersecurity knowledge, Computer networking knowl', '6-7LPA'),
(19, 'ABC', 'software engineer', 'one job available', 'PHP,HTML,CSS', '3-5LPA'),
(20, 'cisco', 'Network Engineer', 'There is one opening', 'programming languages, networking skills', '10-12LPA'),
(21, 'techwebs', 'Network Engineer', 'there is one opening', 'programming languages, networking skills', '6-7LPA'),
(22, 'XYZ', 'PHP DEV', 'there is one position left', 'PHP,HTML,CSS', '6-7LPA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(110) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Name`, `email`, `password`, `number`) VALUES
(1, 'Prachi Gupta', 'prachigupta3899@gmail.com', 'Pr@040603', '07508569482'),
(2, 'Prisha', 'guptaprisha355@gmail.com', 'prisha123', '8360732122');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id` (`Id`),
  ADD UNIQUE KEY `Id_2` (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
