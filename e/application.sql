-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2025 at 04:34 AM
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
-- Database: `4142db`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

DROP TABLE IF EXISTS `application`;
CREATE TABLE `application` (
  `an_id` int(6) NOT NULL,
  `an_position` varchar(255) NOT NULL,
  `an_prefix` varchar(255) NOT NULL,
  `an_fullname` varchar(255) NOT NULL,
  `an_dob` varchar(255) NOT NULL,
  `an_education` varchar(255) NOT NULL,
  `an_skills` varchar(255) NOT NULL,
  `an_experience` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`an_id`, `an_position`, `an_prefix`, `an_fullname`, `an_dob`, `an_education`, `an_skills`, `an_experience`) VALUES
(1, 'AI Specialist', 'นาย', 'ตะวันฉาย สวัสดิ์พาณิชย์', '2025-12-24', 'ปวช./ปวส.', 'กฟห', 'กฟห'),
(2, 'Blockchain Engineer', 'นาย', 'ตะวันฉาย สวัสดิ์พาณิชย์', '2004-09-28', 'ปริญญาตรี', 'SQL', 'เก่งมากๆ ทำได้หลายตำแหน่งๆ เหนือฟ้าใต้หล้าข้าประเสริฐที่สุด'),
(3, 'Cloud Architect', 'นาย', 'ตะวันฉาย สวัสดิ์พาณิชย์', '2004-09-28', 'ปริญญาโท', 'SQL', 'เหนือฟ้าใต้หล้าข้าประเสริฐที่สุด');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`an_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `an_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
