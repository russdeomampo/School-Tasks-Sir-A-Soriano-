-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 08:35 AM
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
-- Database: `demodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbemailandpass`
--

CREATE TABLE `dbemailandpass` (
  `demo_id` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dbemailandpass`
--

INSERT INTO `dbemailandpass` (`demo_id`, `Email`, `Password`) VALUES
(1002, '@lacsareeva.dcsa.edu', 12345),
(1003, '@deomamporuss.dcsa.edu', 1234),
(1004, '@dayoangel.dcsa.edu', 1234),
(1005, '@monreal.dcsa.edu', 1234),
(1006, '@desoyo.dcsa.edu', 1234),
(1007, '@millares.dcsa.edu', 1234),
(1008, '@cabanigan.dcsa.edu', 1234),
(1009, '@fetalvero.dcsa.edu', 1234),
(1010, '@ferrer.dcsa.edu', 1234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbemailandpass`
--
ALTER TABLE `dbemailandpass`
  ADD PRIMARY KEY (`demo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dbemailandpass`
--
ALTER TABLE `dbemailandpass`
  MODIFY `demo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1019;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
