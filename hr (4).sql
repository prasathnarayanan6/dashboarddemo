-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2023 at 11:44 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr`
--

-- --------------------------------------------------------

--
-- Table structure for table `deduction`
--

CREATE TABLE `deduction` (
  `s.no` int(11) NOT NULL,
  `id` varchar(20) NOT NULL,
  `month` varchar(30) NOT NULL,
  `salary` varchar(30) NOT NULL,
  `basic` varchar(30) NOT NULL,
  `da` varchar(30) NOT NULL,
  `hra` varchar(30) NOT NULL,
  `pf` varchar(30) NOT NULL,
  `sa` varchar(30) NOT NULL,
  `epfe` varchar(30) NOT NULL,
  `epfr` varchar(30) NOT NULL,
  `esic` varchar(30) NOT NULL,
  `tds` varchar(30) NOT NULL,
  `hi` varchar(30) NOT NULL,
  `gs` varchar(30) NOT NULL,
  `td` varchar(30) NOT NULL,
  `twd` varchar(10) NOT NULL,
  `pd` varchar(10) NOT NULL,
  `na` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deduction`
--

INSERT INTO `deduction` (`s.no`, `id`, `month`, `salary`, `basic`, `da`, `hra`, `pf`, `sa`, `epfe`, `epfr`, `esic`, `tds`, `hi`, `gs`, `td`, `twd`, `pd`, `na`) VALUES
(25, '', '2023-02', '15000', '7500', '3000', '4500', '1260', '09', '1260', '1260', '112.5', '123', '32', '4', '1404.5', '6', '7', '88'),
(31, 'xy02', '2023-02', '15000', '7500', '3000', '4500', '1260', '2272.5', '1260', '1260', '112.5', '134', '900', '16240', '2272.5', '21', '21', '13967.5'),
(32, 'xy01', '2023-02', '15000', '7500', '3000', '4500', '1260', '1603.5', '1260', '1260', '112.5', '123', '231', '16240', '1603.5', '31', '21', '14636.5');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `s_no` int(11) NOT NULL,
  `id` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `uan` varchar(30) NOT NULL,
  `desig` varchar(30) NOT NULL,
  `dep` varchar(30) NOT NULL,
  `dj` varchar(30) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `acc` varchar(30) NOT NULL,
  `ifsc` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `docs` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`s_no`, `id`, `name`, `uan`, `desig`, `dep`, `dj`, `bank`, `acc`, `ifsc`, `branch`, `photo`, `docs`) VALUES
(49, 'xy01', 'Dr.Nishanth Raja', '12345', 'Chief Executive officer', 'Ceo', '2023-01-01', 'HDFC', '112', '111', 'ramapuram', '1.png', '1.png'),
(50, 'xy02', 'Ashwin Kumar Kathirvel', '11223', 'Chief Technology Officer', 'CTO', '2023-01-11', 'axis', '22455', '222', 'ramapuram', '2.png', '2.png'),
(52, 'xy06', 'karthikeyan', '123455', 'Internet of things Lead', 'IoT', '2023-01-11', 'HDFC', ',m', 'hdfc1234', 'kh', '6.png', '6.png');

-- --------------------------------------------------------

--
-- Table structure for table `llogin`
--

CREATE TABLE `llogin` (
  `Emp_ID` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `llogin`
--

INSERT INTO `llogin` (`Emp_ID`, `Password`) VALUES
('adminxyma', 'admin2k19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deduction`
--
ALTER TABLE `deduction`
  ADD PRIMARY KEY (`s.no`,`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`s_no`,`id`);

--
-- Indexes for table `llogin`
--
ALTER TABLE `llogin`
  ADD PRIMARY KEY (`Emp_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deduction`
--
ALTER TABLE `deduction`
  MODIFY `s.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
