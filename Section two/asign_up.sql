-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2023 at 11:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `morrly`
--

-- --------------------------------------------------------

--
-- Table structure for table `asign_up`
--

CREATE TABLE `asign_up` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `YPassword` varchar(50) NOT NULL,
  `CPassword` varchar(50) NOT NULL,
  `Phnamber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `asign_up`
--

INSERT INTO `asign_up` (`Id`, `Firstname`, `Lastname`, `Email`, `YPassword`, `CPassword`, `Phnamber`) VALUES
(1, 'zahrara', 'fadhil', 'zahraadfdg@gmail.com', 'ZAZA654', 'ZAZA654', '96480952003'),
(3, 'zahrara654', 'fadhil654', 'root@gmail.com', '123987', '123987', '7894555222'),
(6, 'ZahraraFadhil', 'Hussein', 'Zahraa_Fadhil$%@gmail.com', 'zxcv12345', 'zxcv12345', '7894563210');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asign_up`
--
ALTER TABLE `asign_up`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asign_up`
--
ALTER TABLE `asign_up`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
