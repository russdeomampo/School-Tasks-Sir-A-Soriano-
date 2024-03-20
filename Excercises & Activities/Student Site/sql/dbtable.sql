-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 08:36 AM
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
-- Table structure for table `dbtable`
--

CREATE TABLE `dbtable` (
  `demo_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` bigint(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dbtable`
--

INSERT INTO `dbtable` (`demo_id`, `firstname`, `lastname`, `age`, `address`, `contact`, `birthday`, `Email`, `Password`) VALUES
(1002, 'Reeva', 'Lacsa', 24, 'Manila ', 9296345163, '2024-03-29', '@lacsareeva.dcsa.edu', '1234'),
(1003, 'Russel ', 'Deomampo', 22, 'Malabon City', 9292121981, '2024-03-20', '@deomamporuss.dcsa.edu', '1234'),
(1004, 'Angel', 'Dayo', 20, 'Navotas City', 9295125511, '2024-03-28', '@dayoangel.dcsa.edu', '1234'),
(1005, 'Bernard', 'Monreal', 21, 'Navotas City', 9129192111, '2024-02-27', '@monreal.dcsa.edu', '1234'),
(1006, 'Christine', 'Desoyo', 21, 'Malabon City', 9291929191, '2024-02-29', '@desoyo.dcsa.edu', '1234'),
(1007, 'Hazel', 'Millares', 20, 'Malabon City', 9296345121, '2024-03-01', '@millares.dcsa.edu', '1234'),
(1008, 'Johnloyd', 'Cabanigan', 21, 'Navotas City', 9129199211, '2024-03-15', '@cabanigan.dcsa.edu', '1234'),
(1009, 'Harmony', 'Fetalvero', 20, 'Manila City', 9296345121, '2024-02-26', '@fetalvero.dcsa.edu', '1234'),
(1010, 'Sheryl', 'Ferrer', 21, 'Malabon City', 9296312121, '2024-02-28', '@ferrer.dcsa.edu', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbtable`
--
ALTER TABLE `dbtable`
  ADD PRIMARY KEY (`demo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dbtable`
--
ALTER TABLE `dbtable`
  MODIFY `demo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1019;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
