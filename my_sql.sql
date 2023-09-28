-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2023 at 10:58 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my sql`
--

-- --------------------------------------------------------

--
-- Table structure for table `ดารา`
--

CREATE TABLE `ดารา` (
  `sid` int(3) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `slastname` varchar(20) NOT NULL,
  `age` int(2) NOT NULL,
  `moviename` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ดารา`
--

INSERT INTO `ดารา` (`sid`, `sname`, `slastname`, `age`, `moviename`) VALUES
(1, 'คันนะ ', 'ฮาชิโมโตะ', 24, 'Once Upon a Crime'),
(2, 'วิน', 'ดีเซล', 56, 'เร็ว..แรงทะลุนรก 10,เร็ว..แรงทะลุนรก 9,เร็ว..แรงทะลุนรก 8 '),
(3, 'ไทส์ซ่า ', 'ฟาร์มิกา', 29, ' เดอะ นัน,  เดอะ นัน2'),
(4, 'ทอม ', 'ฮาร์ดี', 46, 'เวน่อม'),
(5, 'มิเชล ', 'วิลเลียมส์', 43, 'เวน่อม');

-- --------------------------------------------------------

--
-- Table structure for table `ดีวีดีภาพยนตร์`
--

CREATE TABLE `ดีวีดีภาพยนตร์` (
  `sid` int(2) NOT NULL,
  `sday` date NOT NULL,
  `stime` time(4) NOT NULL,
  `sname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ดีวีดีภาพยนตร์`
--

INSERT INTO `ดีวีดีภาพยนตร์` (`sid`, `sday`, `stime`, `sname`) VALUES
(1, '2015-09-29', '01:00:00.4040', 'Hidden Strike'),
(2, '2023-08-13', '15:00:00.4820', 'เร็ว..แรงทะลุนรก 10'),
(3, '2018-09-18', '10:00:00.9330', 'เวน่อม'),
(4, '2018-09-18', '14:30:00.9980', 'เดอะ นัน'),
(5, '2023-07-04', '14:00:00.0890', 'Once Upon a Crime');

-- --------------------------------------------------------

--
-- Table structure for table `สมาชิก`
--

CREATE TABLE `สมาชิก` (
  `sid` int(3) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `slastname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `buymoviename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `สมาชิก`
--

INSERT INTO `สมาชิก` (`sid`, `sname`, `slastname`, `address`, `telephone`, `buymoviename`) VALUES
(101, 'สมมา', 'ยังไม่ขาด', 'bankkok', '0654787689', 'เวน่อม'),
(102, 'สมเเมว', 'เหมียวเหมียว', 'bankkok', '0987654321', 'เวน่อม'),
(103, 'สมพง', 'ยอดดี', 'bankkok', '0543216789', 'เวน่อม	\r\n'),
(104, 'สมยอม', 'ยอมจำนง', 'bankkok', '0965438721', 'เวน่อม	\r\n'),
(105, 'สมน้อย', 'อันเท่านี้', 'bankkok', '0978658743', 'เวน่อม	\r\n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
