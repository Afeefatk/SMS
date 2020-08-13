-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2020 at 03:14 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_branch`
--

CREATE TABLE `tbl_branch` (
  `br_id` int(255) NOT NULL,
  `br_name` varchar(1000) NOT NULL,
  `br_date` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_branch`
--

INSERT INTO `tbl_branch` (`br_id`, `br_name`, `br_date`) VALUES
(1, 'AL Barsha', ''),
(2, 'Al Garhoud', ''),
(3, 'Al Khawaneej ', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `UserId` int(255) NOT NULL,
  `Username` varchar(1000) NOT NULL,
  `Password` varchar(1000) NOT NULL,
  `Email` varchar(1000) NOT NULL,
  `date` varchar(1000) NOT NULL,
  `Name` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`UserId`, `Username`, `Password`, `Email`, `date`, `Name`) VALUES
(1, 'admin', 'admin!@#$%', 'afeefaktk@gmail.com', '', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(255) NOT NULL,
  `first_name` varchar(1000) NOT NULL,
  `last_name` varchar(10000) NOT NULL,
  `email` varchar(10000) NOT NULL,
  `date` date NOT NULL,
  `branch` varchar(10000) NOT NULL,
  `grade` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `first_name`, `last_name`, `email`, `date`, `branch`, `grade`) VALUES
(2, 'test', 'k', 'aswanth_33@yahoo.com', '2020-08-01', 'Al Khawaneej ', 'Grade 5'),
(3, 'test', 'k', 'aswanth_33@yahoo.com', '2020-08-08', 'Al Garhoud', 'Grade 4'),
(4, 'test', 'k', 'aswanth_33@yahoo.com', '2020-08-01', 'Al Khawaneej ', 'Grade3'),
(5, 'test', 'k', 'rahul_raj42@yahoo.com', '2020-08-15', 'Al Garhoud', 'Grade 4'),
(6, 'test', 'raj', 'aswanth_33@yahoo.com', '2020-08-01', 'Al Khawaneej ', 'Grade 4'),
(7, 'wertyuil', 'y', 'jose.kiran@yahoo.com', '2020-08-15', 'Al Garhoud', 'Grade 3'),
(8, 'tesing', 'raj', 'aswanth_33@yahoo.com', '2018-10-02', 'Al Khawaneej ', 'Grade 3'),
(9, 'rrr', 'p', 'aswanth_33@yahoo.com', '2020-08-01', 'AL Barsha', 'Grade 4'),
(10, 'ttttwertg', 'k', 'aswanth_33@yahoo.com', '2020-08-01', 'Al Garhoud', 'Grade 2'),
(11, 'ertyui', 'k', 'aswanth_33@yahoo.com', '2020-08-01', 'Al Garhoud', 'Grade 3'),
(13, 'tech@redberryglobals.com', 'p', 'tech@redberryglobals.com', '2020-08-01', 'Al Garhoud', 'Grade 3'),
(14, 'jose.kiran@yahoo.com', 'shilpa', 'anurag.shilpa@yahoo.com', '2020-08-08', 'Al Garhoud', 'Grade 4'),
(15, 'aswanth_33@yahoo.com', 'k', 'info@topgulfnews.com', '2020-08-01', 'Al Garhoud', 'Grade 3'),
(16, 'rahul_raj42@yahoo.com', 'raj', 'gfes@redberryglobals.com', '2020-08-01', 'Al Khawaneej ', 'Grade 2'),
(17, 'tech@redberryglobals.com', 'p', 'info@terfg.com', '2020-08-08', 'Al Garhoud', 'Grade 2'),
(18, 'rahul_raj42@yahoo.com', 'raj', 'info@sdfgc.com', '2020-08-01', 'AL Barsha', 'Grade 3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_branch`
--
ALTER TABLE `tbl_branch`
  ADD PRIMARY KEY (`br_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_branch`
--
ALTER TABLE `tbl_branch`
  MODIFY `br_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `UserId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
