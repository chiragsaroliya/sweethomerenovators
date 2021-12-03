-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2019 at 06:34 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sweethomerenovators`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `CID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `Message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`CID`, `Name`, `Email`, `Phone`, `Message`) VALUES
(1, 'Dhaval Ramesh Saroliya', 'dhaval.saroliya@gmail.com', '9821923038', 'aa'),
(2, 'Dhaval Ramesh Saroliya', 'dhaval.saroliya@gmail.com', '9821923038', 'zz'),
(3, 'Dhaval Ramesh Saroliya', 'dhaval.saroliya@gmail.com', '9821923038', 'aa'),
(4, 'Dhaval Ramesh Saroliya', 'dhaval.saroliya@gmail.com', '9821923038', 'aa'),
(5, 'Dhaval Ramesh Saroliya', 'dhaval.saroliya@gmail.com', '9821923038', 'zz'),
(6, 'Dhaval Ramesh Saroliya', 'chirag123@mailinator.com', '9821923038', 'xxxx'),
(7, 'Dhaval Ramesh Saroliya', 'chirag123@mailinator.com', '9821923038', 'xxxx'),
(8, 'Dhaval Ramesh Saroliya', 'chirag123@mailinator.com', '9821923038', 'xxxx'),
(9, 'Dhaval Ramesh Saroliya', 'chirag123@mailinator.com', '9821923038', 'xxxx'),
(10, 'Dhaval Ramesh Saroliya', 'chirag123@mailinator.com', '9821923038', 'qq'),
(11, 'Dhaval Ramesh Saroliya', 'chirag123@mailinator.com', '9821923038', 'qq'),
(12, 'Dhaval Ramesh Saroliya', 'chirag123@mailinator.com', '9821923038', 'bb'),
(13, 'Dhaval Ramesh Saroliya', 'chirag123@mailinator.com', '9821923038', 'bb'),
(14, 'Dhaval Ramesh Saroliya', 'chirag123@mailinator.com', '9821923038', 'bb'),
(15, 'Dhaval Ramesh Saroliya', 'chirag123@mailinator.com', '9821923038', 'bb'),
(16, 'Dhaval Ramesh Saroliya', 'chirag123@mailinator.com', '9821923038', 'bb'),
(17, 'Dhaval Ramesh Saroliya', 'chirag123@mailinator.com', '9821923038', 'bb'),
(18, 'Dhaval Ramesh Saroliya', 'chirag123@mailinator.com', '9821923038', 'I want to renpvate.'),
(19, 'Dhaval Ramesh Saroliya', 'chirag123@mailinator.com', '9821923038', 'I need to renovate'),
(20, 'Dhaval Ramesh Saroliya', 'dhaval.saroliya@gmail.com', '9821923038', 'jo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`CID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
