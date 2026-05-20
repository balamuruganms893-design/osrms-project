-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2025 at 04:40 PM
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
-- Database: `osrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin12');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `sname` varchar(30) NOT NULL DEFAULT 'not null',
  `aid` int(11) NOT NULL DEFAULT 101,
  `email` varchar(30) NOT NULL DEFAULT 'not null',
  `password` varchar(30) NOT NULL DEFAULT 'not null',
  `course` varchar(30) NOT NULL DEFAULT 'not null',
  `mno` bigint(20) NOT NULL,
  `maths` int(11) DEFAULT NULL,
  `computer` int(11) DEFAULT NULL,
  `lang` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `avg` float DEFAULT NULL,
  `result` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `sname`, `aid`, `email`, `password`, `course`, `mno`, `maths`, `computer`, `lang`, `total`, `avg`, `result`) VALUES
(1, 'Ms Balamurugan', 101, 'balamuruganms893@gmail.com', '1234', 'B.sc', 7672055948, 99, 99, 99, 297, 9.9, 'pass'),
(2, 'pp dhanraj', 102, 'ppdhanraj@gmail.com', '4321', 'B.COM', 9876543210, 97, 95, 90, 282, 9.4, 'pass'),
(3, 'D pavan', 103, 'pavan@gmail.com', '5678', 'B.sc', 8765432190, 97, 98, 90, 285, 9.5, 'pass'),
(4, 'K uday', 104, 'uday@gmail.com', '8765', 'B.COM', 9087654321, 95, 98, 96, 289, 9.6, 'pass'),
(5, 'naveen', 105, 'naveen@gmail.com', '0987', 'BZC', 7878909065, 34, 34, 34, 102, 3.4, 'fail'),
(6, 'N Ajith', 106, 'aji@gmail.com', '3456', 'BZC', 9876543201, 55, 80, 83, 218, 7.3, 'pass'),
(7, 'tim', 107, 'tim@gmail.com', 'tim123', 'B.sc', 8765432199, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `aid` (`aid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
