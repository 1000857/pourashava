-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2021 at 08:26 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pourashava`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(10) NOT NULL,
  `First_name` varchar(60) NOT NULL,
  `Last_name` varchar(60) NOT NULL,
  `Birthday` datetime NOT NULL,
  `Gender` varchar(60) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Job_post` varchar(30) NOT NULL,
  `User_role` varchar(30) NOT NULL COMMENT '1=Admin,0=User',
  `Status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `First_name`, `Last_name`, `Birthday`, `Gender`, `Email`, `Phone`, `Password`, `Job_post`, `User_role`, `Status`) VALUES
(1, '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', ''),
(2, 'Mehedi', 'Hasan', '0000-00-00 00:00:00', 'male', 'hridoytca1@gmail.com', '01861601238', '12345', 'Admin Officer', '', ''),
(3, 'Mehedi', 'Hasan', '0000-00-00 00:00:00', 'female', 'hridoytca1@gmail.com', '01861601238', '12345', 'Peon', '', ''),
(4, 'Mehedi', 'Hasan', '0000-00-00 00:00:00', 'female', 'hridoytca1@gmail.com', '01861601238', '12345', 'Peon', '', ''),
(5, 'Mehedi', 'Hasan', '1993-12-17 00:00:00', 'male', 'hridoytca1@gmail.com', '01861601238', '12345', 'Admin Officer', '', ''),
(6, 'hr', 'gg', '2021-07-22 00:00:00', 'female', 'hridoytca1@gmail.com', '12434343666', '1000857', 'Admin Officer', '', ''),
(7, 'Mh', 'Hridoy', '1998-04-19 00:00:00', 'male', 'admin@gmail.com', '+12434343666', '599266', 'Admin', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(100) NOT NULL,
  `service_name` varchar(60) NOT NULL,
  `nid` varchar(20) NOT NULL,
  `birth_day` date NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `father` varchar(50) NOT NULL,
  `mother` varchar(50) NOT NULL,
  `husband_wife` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `education` varchar(50) NOT NULL,
  `relegion` varchar(50) NOT NULL,
  `present_village` varchar(50) NOT NULL,
  `present_ward` int(50) NOT NULL,
  `present_thana` varchar(50) NOT NULL,
  `present_upozilla` varchar(50) NOT NULL,
  `present_district` varchar(50) NOT NULL,
  `permanent_village` varchar(50) NOT NULL,
  `permanent_ward` int(11) NOT NULL,
  `permanent_thana` varchar(30) NOT NULL,
  `permanent_upozilla` varchar(30) NOT NULL,
  `permanent_district` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `other` text NOT NULL,
  `pic` varchar(50) NOT NULL,
  `is_approved` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_name`, `nid`, `birth_day`, `first_name`, `last_name`, `gender`, `father`, `mother`, `husband_wife`, `occupation`, `education`, `relegion`, `present_village`, `present_ward`, `present_thana`, `present_upozilla`, `present_district`, `permanent_village`, `permanent_ward`, `permanent_thana`, `permanent_upozilla`, `permanent_district`, `mobile`, `email`, `other`, `pic`, `is_approved`) VALUES
(1, 'ch_cer', '5444587589895968', '2021-08-09', 'Mehedi', 'gff', 'female', 'ibrhim', 'rsid', 'temps', 'student', 'bsc', 'islm', 'kllynpur', 12, 'kllynpur', 'kllynpur', 'dhk', 'kllynpur', 12, 'kllynpur', 'kllynpur', 'dhk', '01861601238', 'hridoytca1@gmail.com', 'nil', '227875894_351232686659832_2795934202615799742_n.jp', 0),
(2, 'permit', '555954255456566', '2021-08-13', 'tin', 'mia', 'female', 'hasan', 'moi', 'nil', 'job', 'ssc', 'hindu', 'matlab', 5, 'mirpur2', 'mirpur', 'dhaka', 'daudkandi', 17, 'gouripur', 'hasanpur', 'cumilla', '51685254', 'xtreme02013@xtremeflix.fun', 'freedom ', '227661537_351232533326514_9189783361653686911_n.jp', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
