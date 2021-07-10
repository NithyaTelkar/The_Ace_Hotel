-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2021 at 02:34 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `phone`, `email`) VALUES
('admin', 'admin', '9999', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `dob` date NOT NULL,
  `id_proof` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`user_id`, `username`, `password`, `email`, `phone`, `dob`, `id_proof`) VALUES
(2, 'n', 'n', 'n@gmail.com', 687654321, '2020-05-13', ''),
(16, 'x', 'x', 'x@x.x', 1111, '2021-01-20', 'xxx'),
(33, 's', 's', 's@s.c', 95965695, '2019-10-21', 'aadhar'),
(35, 'd', 'd', 'd@d.com', 54656, '2021-01-13', 'fdgfd'),
(36, 'f', 'f', 'f@f.c', 444, '2021-01-09', 'cx'),
(37, 'admin', 'asd', 'm@gmail.com', 3, '2021-01-21', 'adsasd'),
(38, 'Arya', '123456', 'arya22@gmail.com', 988765432, '1999-01-20', 'aadhar');

-- --------------------------------------------------------

--
-- Table structure for table `double_ac`
--

CREATE TABLE `double_ac` (
  `room_no` int(11) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_email` varchar(20) NOT NULL,
  `c_phone` varchar(20) NOT NULL,
  `idproof` varchar(20) DEFAULT NULL,
  `check_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `double_ac`
--

INSERT INTO `double_ac` (`room_no`, `c_name`, `c_email`, `c_phone`, `idproof`, `check_in`, `check_out`, `status`) VALUES
(301, '', '', '', NULL, NULL, NULL, 0),
(302, '', '', '', NULL, NULL, NULL, 0),
(303, '', '', '', NULL, NULL, NULL, 0),
(304, '', '', '', NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `double_non_ac`
--

CREATE TABLE `double_non_ac` (
  `room_no` int(11) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_email` varchar(20) NOT NULL,
  `c_phone` varchar(20) NOT NULL,
  `idproof` varchar(20) DEFAULT NULL,
  `check_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `double_non_ac`
--

INSERT INTO `double_non_ac` (`room_no`, `c_name`, `c_email`, `c_phone`, `idproof`, `check_in`, `check_out`, `status`) VALUES
(401, '', '', '', NULL, NULL, NULL, 0),
(402, '', '', '', NULL, NULL, NULL, 0),
(403, '', '', '', NULL, NULL, NULL, 0),
(404, '', '', '', NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `single_ac`
--

CREATE TABLE `single_ac` (
  `room_no` int(11) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_email` varchar(20) NOT NULL,
  `c_phone` varchar(20) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `check_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `single_ac`
--

INSERT INTO `single_ac` (`room_no`, `c_name`, `c_email`, `c_phone`, `idproof`, `check_in`, `check_out`, `status`) VALUES
(101, '', '', '', '', NULL, NULL, 0),
(102, '', '', '', '', NULL, NULL, 0),
(103, '', '', '', '', NULL, NULL, 0),
(104, '', '', '', '', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `single_non_ac`
--

CREATE TABLE `single_non_ac` (
  `room_no` int(11) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_email` varchar(20) DEFAULT NULL,
  `c_phone` varchar(20) DEFAULT NULL,
  `idproof` varchar(20) DEFAULT NULL,
  `check_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `single_non_ac`
--

INSERT INTO `single_non_ac` (`room_no`, `c_name`, `c_email`, `c_phone`, `idproof`, `check_in`, `check_out`, `status`) VALUES
(201, '', NULL, NULL, NULL, NULL, NULL, 0),
(202, '', NULL, NULL, NULL, NULL, NULL, 0),
(203, '', NULL, NULL, NULL, NULL, NULL, 0),
(204, '', NULL, NULL, NULL, NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `double_ac`
--
ALTER TABLE `double_ac`
  ADD PRIMARY KEY (`room_no`);

--
-- Indexes for table `double_non_ac`
--
ALTER TABLE `double_non_ac`
  ADD PRIMARY KEY (`room_no`);

--
-- Indexes for table `single_ac`
--
ALTER TABLE `single_ac`
  ADD PRIMARY KEY (`room_no`);

--
-- Indexes for table `single_non_ac`
--
ALTER TABLE `single_non_ac`
  ADD PRIMARY KEY (`room_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
