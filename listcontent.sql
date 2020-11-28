-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 06:55 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookwizard`
--

-- --------------------------------------------------------

--
-- Table structure for table `listcontent`
--

CREATE TABLE `listcontent` (
  `ID` int(11) NOT NULL,
  `TimelistID` int(11) NOT NULL,
  `BookName` varchar(100) NOT NULL,
  `BookAuther` varchar(50) NOT NULL,
  `BookImage` varchar(100) NOT NULL,
  `ISBN` varchar(20) NOT NULL,
  `BookContent` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listcontent`
--

INSERT INTO `listcontent` (`ID`, `TimelistID`, `BookName`, `BookAuther`, `BookImage`, `ISBN`, `BookContent`) VALUES
(8, 0, 'Neropatin päiväkirja. 9, Reissussa rähjääntyy ', 'Kinney, Jeff, ', 'https://armas.btj.fi/request.php?id=f55f7189859e3777&pid=9789510415948&qtype=m&ftype=04', '', 'teststestsetestes'),
(9, 0, 'Neropatin päiväkirja. 9, Reissussa rähjääntyy ', 'Kinney, Jeff, ', 'https://armas.btj.fi/request.php?id=f55f7189859e3777&pid=9789510415948&qtype=m&ftype=04', '', 'teststestsetestes'),
(14, 1, 'Neropatin päiväkirja. 9, Reissussa rähjääntyy ', 'Kinney, Jeff, ', 'https://armas.btj.fi/request.php?id=f55f7189859e3777&pid=9789510415948&qtype=m&ftype=04', '', 'teststestsetestes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listcontent`
--
ALTER TABLE `listcontent`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listcontent`
--
ALTER TABLE `listcontent`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
