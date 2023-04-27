-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2023 at 09:03 PM
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
  `Phnamber` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `asign_up`
--

INSERT INTO `asign_up` (`Id`, `Firstname`, `Lastname`, `Email`, `YPassword`, `CPassword`, `Phnamber`) VALUES
(1, 'zahrara', 'fadhil', 'zahraa@gmail.com', '1234', '1234', 2147483647),
(2, 'zahrara', '22', 'zf@gmail.com', '1234', '123', 788985544),
(3, 'zahrara', 'fadhil', 'zahraafadhil@gmail.com', '9865', '9865', 789456123),
(4, 'za21', 'fa', 'bvodls@gmail.com', '987654321', '987654321', 789456123);

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
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
