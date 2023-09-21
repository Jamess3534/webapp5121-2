-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2023 at 10:23 AM
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
-- Table structure for table `insert`
--

CREATE TABLE `insert` (
  `sname` varchar(30) NOT NULL,
  `slastname` int(20) NOT NULL,
  `saddress` varchar(30) NOT NULL,
  `stelephone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `petid` int(2) NOT NULL,
  `pet` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`petid`, `pet`) VALUES
(10, 'dog'),
(11, 'cat'),
(12, 'fish'),
(13, 'cow'),
(14, 'bird');

-- --------------------------------------------------------

--
-- Table structure for table `studentbio`
--

CREATE TABLE `studentbio` (
  `sid` int(3) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `slastname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `telephone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='student deail';

--
-- Dumping data for table `studentbio`
--

INSERT INTO `studentbio` (`sid`, `sname`, `slastname`, `address`, `telephone`) VALUES
(101, 'Sawet', 'Kasemyart', 'Bangkok', '0633836611'),
(102, 'jiayus ', 'chompen', 'Bangkok', '0957314876'),
(103, 'Varakornkich ', 'Namkhem', 'Bangkok', '098842394'),
(104, 'Chanin ', 'Imjinda', 'Bangkok', '0943178795'),
(105, 'uraiwan', 'sa', 'Bangkok', ''),
(0, '', '', '', ''),
(0, '', '', '', ''),
(0, '', '', '', ''),
(0, '', '', '', ''),
(0, '', '', '', ''),
(0, '', '', '', ''),
(0, '', '', '', ''),
(0, '', '', '', ''),
(0, '', '', '', ''),
(0, '', '', '', ''),
(106, 'wi', 'dd', 'Bangkok', '0957314876'),
(107, 's', 'aaaaa', 'Bangkok', '06333333'),
(110, 'tawan', 'inyaem', 'bkk', '0898944631');

-- --------------------------------------------------------

--
-- Table structure for table `สมาชิก`
--

CREATE TABLE `สมาชิก` (
  `sid` int(10) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `saddress` varchar(30) NOT NULL,
  `stelephone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
