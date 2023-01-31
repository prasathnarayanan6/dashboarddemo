-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2023 at 02:54 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

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
  `lop` varchar(50) NOT NULL,
  `td` varchar(30) NOT NULL,
  `twd` varchar(10) NOT NULL,
  `pd` varchar(10) NOT NULL,
  `na` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deduction`
--

INSERT INTO `deduction` (`s.no`, `id`, `month`, `salary`, `basic`, `da`, `hra`, `pf`, `sa`, `epfe`, `epfr`, `esic`, `tds`, `hi`, `gs`, `lop`, `td`, `twd`, `pd`, `na`) VALUES
(47, 'XY038', '2023-01', '15000', '7500', '3000', '4500', '1260', '1540', '1260', '1260', '113', '0', '167', '16540', '0', '1540', '31', '31', '15000'),
(48, 'XY042', '2023-01', '10000', '5000', '2000', '3000', '840', '1082', '840', '840', '75', '0', '167', '11082', '0', '1082', '31', '31', '10000'),
(49, 'XY039', '2023-01', '30000', '15000', '6000', '9000', '1800', '1967', '1800', '1800', '0', '0', '167', '31967', '0', '1967', '31', '31', '30000'),
(50, 'XY07', '2023-01', '65000', '32500', '13000', '19500', '1800', '1967', '1800', '1800', '0', '0', '167', '66967', '0', '1967', '31', '31', '65000'),
(51, 'XY019', '2023-01', '34000', '17000', '6800', '10200', '1800', '1967', '1800', '1800', '0', '0', '167', '35967', '0', '1967', '31', '31', '34000'),
(52, 'XY035', '2023-01', '12000', '6000', '2400', '3600', '1008', '1265', '1008', '1008', '90', '0', '167', '13265', '0', '1265', '31', '31', '12000'),
(53, 'XY025', '2023-01', '25000', '12500', '5000', '7500', '1800', '1967', '1800', '1800', '0', '0', '167', '26967', '0', '1967', '31', '31', '25000'),
(54, 'XY032', '2023-01', '35000', '17500', '7000', '10500', '1800', '1967', '1800', '1800', '0', '0', '167', '36967', '0', '1967', '31', '31', '35000'),
(55, 'XY023', '2023-01', '25000', '12500', '5000', '7500', '1800', '1967', '1800', '1800', '0', '0', '167', '26967', '0', '1967', '31', '31', '25000'),
(56, 'XY029', '2023-01', '15000', '7500', '3000', '4500', '1260', '1540', '1260', '1260', '113', '0', '167', '16540', '0', '1540', '31', '31', '15000'),
(57, 'XY020', '2023-01', '30000', '15000', '6000', '9000', '1800', '1967', '1800', '1800', '0', '0', '167', '31967', '0', '1967', '31', '31', '30000'),
(58, 'XY08', '2023-01', '58000', '29000', '11600', '17400', '1800', '1967', '1800', '1800', '0', '0', '167', '59967', '0', '1967', '31', '31', '58000'),
(61, 'XY024', '2023-01', '45000', '22500', '9000', '13500', '1800', '1967', '1800', '1800', '0', '0', '167', '46967', '0', '1967', '31', '31', '45000'),
(62, 'XY036', '2023-01', '35000', '17500', '7000', '10500', '1800', '1967', '1800', '1800', '0', '0', '167', '36967', '0', '1967', '31', '31', '35000'),
(63, 'XY021', '2023-01', '30000', '15000', '6000', '9000', '1800', '1967', '1800', '1800', '0', '0', '167', '31967', '0', '1967', '31', '31', '30000'),
(64, 'XY010', '2023-01', '40000', '20000', '8000', '12000', '1800', '1967', '1800', '1800', '0', '0', '167', '41967', '0', '1967', '31', '31', '40000'),
(65, 'XY040', '2023-01', '52000', '26000', '10400', '15600', '1800', '1967', '1800', '1800', '0', '0', '167', '53967', '0', '1967', '31', '31', '52000'),
(66, 'XY041', '2023-01', '20000', '10000', '4000', '6000', '1800', '2117', '1800', '1800', '150', '0', '167', '21997', '0', '2117', '31', '31', '19880'),
(67, 'XY043', '2023-01', '15000', '7500', '3000', '4500', '1260', '1540', '1260', '1260', '113', '0', '167', '16540', '0', '1540', '31', '31', '15000'),
(68, 'XY037', '2023-01', '70000', '35000', '14000', '21000', '1800', '1967', '1800', '1800', '0', '0', '167', '71967', '0', '1967', '31', '31', '70000'),
(69, 'XY016', '2023-01', '42000', '21000', '8400', '12600', '1800', '1967', '1800', '1800', '0', '0', '167', '43967', '0', '1967', '31', '31', '42000'),
(70, 'XY030', '2023-01', '25000', '12500', '5000', '7500', '1800', '1967', '1800', '1800', '0', '0', '167', '26967', '0', '1967', '31', '31', '25000'),
(71, 'XY034', '2023-01', '22000', '11000', '4400', '6600', '1800', '2132', '1800', '1800', '165', '0', '167', '24132', '0', '2132', '31', '31', '22000'),
(72, 'XY044', '2023-01', '20000', '10000', '4000', '6000', '1800', '2117', '1800', '1800', '150', '0', '167', '21997', '0', '2117', '31', '31', '19880'),
(73, 'XY017', '2023-01', '35000', '17500', '7000', '10500', '1800', '1967', '1800', '1800', '0', '0', '167', '36967', '4928', '1967', '31', '27', '35000'),
(74, 'XY028', '2023-01', '35000', '17500', '7000', '10500', '1800', '1967', '1800', '1800', '0', '0', '167', '36967', '0', '1967', '31', '31', '35000');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`s_no`, `id`, `name`, `uan`, `desig`, `dep`, `dj`, `bank`, `acc`, `ifsc`, `branch`, `photo`, `docs`) VALUES
(58, 'XY038', 'Prasath Narayanan', '101889586971', 'IoT Trainee', 'IoT ', '2022-09-14', 'HDFC Bank', '50100316798254', 'HDFC0001869', 'DLF Rama Puram', 'Prasath.JPG', 'Prasath.JPG'),
(59, 'XY042', 'Thowfeeq Ahamed Ahamed Shafeeq', '101889586992', 'Graduate Engineer Trainee', 'Design', '2022-11-21', 'DBS BANK', '8811010000977609', 'DBSS0IN0811', 'ANNA SALAI', 'Thowfeeq.png', 'Thowfeeq.png'),
(60, 'XY039', 'Deeptha Balaji', '101814161641', 'FPGA Engineer', 'Electronics ', '2022-10-10', 'DBS BANK', '8811010000491030', 'DBSS0IN0832', 'ANNA SALAI', 'Deeptha Balaji.jpeg', 'Deeptha Balaji.jpeg'),
(61, 'XY07', 'Akshay Vinod Hankare', '101889589617', 'Project Manager Utmaps', 'Ultrasonic', '2020-01-08', 'DBS BANK', '881040617190', 'DBSS0IN0813', 'ANNA SALAI', 'Akshay Pic.jpeg', 'Akshay Pic.jpeg'),
(62, 'XY019', 'Alex A', '101541397728', ' Electronics Engineer', 'Electronics ', '2021-08-16', 'DBS BANK', '881040610740', 'DBSS0IN0818', 'ANNA SALAI', 'Alex A Pic.jpeg', 'Alex A Pic.jpeg'),
(63, 'XY035', 'Annuvan A', '101889586959', 'Operations Trainee', 'Operations ', '2022-07-11', 'DBS BANK', '881040841991', 'DBSS0IN0830', 'ANNA SALAI', 'Annuvan Pic.jpg', 'Annuvan Pic.jpg'),
(64, 'XY025', 'Asim Kumar Ghatak', '101889589693', 'Design Engineer', 'Design', '2022-03-01', 'DBS BANK', '881040678368', 'DBSS0IN0823', 'ANNA SALAI', 'Asim Kumar Ghatak.jpg', 'Asim Kumar Ghatak.jpg'),
(65, 'XY032', 'Chiranjeevi Vinothkumar', '101485048957', 'Ultrasonic Engineer', 'Ultrasonic', '2022-07-01', 'DBS BANK', '881040803739', 'DBSS0IN0828', 'ANNA SALAI', 'Chiranjeevi Pic.jpg', 'Chiranjeevi Pic.jpg'),
(69, 'XY023', 'Farzeen K A', '101889586985', 'Machine Learning Engineer', 'Ultrasonic ', '2021-11-01', 'DBS BANK', '881040678405', 'DBSS0IN0821', 'ANNA SALAI', 'Farzeen KA.jpg', 'Farzeen KA.jpg'),
(71, 'XY029', 'Jayaprakash J', '101240949027', 'Operations Trainee', 'Operations ', '2021-06-01', 'DBS BANK', '881040678344', 'DBSS0IN0825', 'ANNA SALAI', 'Jayaprakas Pic_page-0001.jpg', 'Jayaprakas Pic_page-0001.jpg'),
(72, 'XY020', 'Kalidass', '101362552997', 'Python Developer', 'IoT', '2021-08-16', 'DBS BANK', '881040618098', 'DBSS0IN0819', 'ANNA SALAI', 'Kalidas.JPG', 'Kalidas.JPG'),
(73, 'XY08', 'Karthikeyan S', '101889586963', 'IoT Lead  ', 'IoT', '2020-07-25', 'DBS BANK', '881040610870', 'DBSS0IN0814', 'ANNA SALAI', 'Karthikeyan.jpeg', 'Karthikeyan.jpeg'),
(74, 'XY028', 'Manish Reddy Papagiri', '101629512553', 'Ultrasonic Engineer', 'Ultrasonic', '2022-05-09', 'DBS BANK', '881040611020', 'DBSS0IN0824', 'ANNA SALAI', 'Manish Pic.jpeg', 'Manish Pic.jpeg'),
(75, 'XY017', 'Mitra Gupta', '101889589638', 'Ultrasonic engineer', 'Ultrasonic', '2021-07-06', 'DBS BANK', '881040617404', 'DBSS0IN0817', 'ANNA SALAI', 'Mitra Gupta.jpg', 'Mitra Gupta.jpg'),
(76, 'XY024', 'Naveen Kumar Murugesan', '101470936687', 'Electronics Lead', 'Electronics ', '2022-01-17', 'DBS BANK', '881040610702', 'DBSS0IN0822', 'ANNA SALAI', 'Naveen Pic.jpeg', 'Naveen Pic.jpeg'),
(77, 'XY036', 'Navneet Kumar', '101889589664', 'Ultrasonic Engineer', 'Ultrasonic ', '2022-08-08', 'DBS BANK', '881040988689', 'DBSS0IN0831', 'ANNA SALAI', 'Navneet .jpeg', 'Navneet .jpeg'),
(78, 'XY021', 'Naznin Nisha Ansari', '101889589705', 'HR & Legal Manager', 'HR / Legal ', '2021-09-01', 'DBS BANK', '881040617732', 'DBSS0IN0820', 'ANNA SALAI', 'Naznin PIC (2).jpg', 'Naznin PIC (2).jpg'),
(79, 'XY010', 'Nidheesh TT', '101889589672', 'Ultrasonic Lead', 'Ultrasonic', '2021-02-01', 'DBS BANK', '881040618135', 'DBSS0IN0815', 'ANNA SALAI', 'NIDHEESH-41659 (3).jpg', 'NIDHEESH-41659 (3).jpg'),
(80, 'XY040', 'Parmar Vinay Kumar Rupeshbhai', '101561148779', 'Business Development Manager', 'Marketing ', '2022-11-07', 'DBS BANK', '8811010000852142', 'CRRPP2275G', 'ANNA SALAI', 'Vinay PP Photo.jpg', 'Vinay PP Photo.jpg'),
(81, 'XY041', 'Pavithra S R', '101801545324', 'Accounts and Finance Trainee', 'Accounts', '2022-11-14', 'DBS BANK', '8811010000935012', 'DBSS0IN0811', 'ANNA SALAI', 'Pavithra.jpg', 'Pavithra.jpg'),
(82, 'XY043', 'K. Poovitha', '101327986114 ', 'Electronics & Embedeed Trainee', 'Electronics', '2022-12-14', 'DBS BANK', '8811010001387872', 'DBSS0IN0811', 'ANNA SALAI', 'Poovitha Pic.pdf', 'Poovitha Pic.pdf'),
(83, 'XY037', 'Rabi Sankar Panda', '101889589686', 'Senior Project Manager', 'Ultrasonic ', '2022-08-19', 'DBS BANK', '881040930640', 'DBSS0IN0832', 'ANNA SALAI', 'Rabi Sankar Panda_XYMA.jpg', 'Rabi Sankar Panda_XYMA.jpg'),
(84, 'XY016', 'Raveen R', '101889589640', 'Project Manager Ports', 'Ultrasonic', '2021-07-01', 'DBS BANK', '881040611044', 'DBSS0IN0816', 'ANNA SALAI', 'Raveen PIC.jpeg', 'Raveen PIC.jpeg'),
(85, 'XY030', 'Saleem Ahamed', '101411043518', 'Instrumentation Engineer', 'Ultrasonic ', '2022-06-11', 'DBS BANK', '881040736204', 'DBSS0IN0826', 'ANNA SALAI', 'Saleem Pic.jpg', 'Saleem Pic.jpg'),
(86, 'XY034', 'Shefin F', '101889589714', 'Graduate Engineer Trainee', 'Ultrasonic ', '2022-07-11', 'DBS BANK', '881040803609', 'DBSS0IN0829', 'ANNA SALAI', 'Shefin photo.pdf', 'Shefin photo.pdf'),
(87, 'XY044', 'Jeevanathan B', '100453377629 ', 'Electronics & Embedeed Trainee', 'Electronics ', '2023-01-02', 'DBS BANK', '8811010001491935', 'DBSS0IN0811', 'ANNA SALAI', 'Jeevanathan Pic.jpg', 'Jeevanathan Pic.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `llogin`
--

CREATE TABLE `llogin` (
  `Emp_ID` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  MODIFY `s.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
