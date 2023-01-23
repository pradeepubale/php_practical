-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 23, 2023 at 08:00 AM
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
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `bsc`
--

CREATE TABLE `bsc` (
  `rollno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `class` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bsc`
--

INSERT INTO `bsc` (`rollno`, `name`, `class`, `address`) VALUES
(1, 'ABCD', 'first year', 'aurangabad'),
(3, 'One', 'third year', 'Salt city'),
(4, 'john doe', 'second', 'unknown city'),
(5, 'pd1', 'final', 'salt'),
(7, 'abcd', 'third year', 'aurangabad'),
(8, 'abcdfuefg', 'fggfw', 'fgfge'),
(10, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bsc`
--
ALTER TABLE `bsc`
  ADD PRIMARY KEY (`rollno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bsc`
--
ALTER TABLE `bsc`
  MODIFY `rollno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
