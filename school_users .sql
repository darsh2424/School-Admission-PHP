-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 17, 2024 at 10:04 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_users`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission_final`
--

DROP TABLE IF EXISTS `admission_final`;
CREATE TABLE IF NOT EXISTS `admission_final` (
  `admit_no` int NOT NULL AUTO_INCREMENT,
  `stud_name` varchar(50) NOT NULL,
  `stud_gender` char(1) NOT NULL,
  `stud_aadhaar` varchar(12) NOT NULL,
  `stud_admit_class` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `stud_admit_year` varchar(10) NOT NULL,
  `parent_phone` varchar(10) NOT NULL,
  `parent_email` varchar(50) NOT NULL,
  `req_date` date NOT NULL,
  `accept_date` date NOT NULL,
  PRIMARY KEY (`admit_no`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission_final`
--

INSERT INTO `admission_final` (`admit_no`, `stud_name`, `stud_gender`, `stud_aadhaar`, `stud_admit_class`, `stud_admit_year`, `parent_phone`, `parent_email`, `req_date`, `accept_date`) VALUES
(1, 'Darsh Jayeshkumar Parikh', 'M', '9638527410', '5', '2024-2025', '9874563211', 'darsh@gmail.com', '2023-04-09', '2023-04-17'),
(2, 'Devarsh Manish Soni', 'M', '852741963', '7', '2025-20', '9662799456', 'devarsh@gmail.com', '2023-04-09', '2023-04-17'),
(3, 'Darsh Jayeshkumar Parikh', 'M', '96385274179', '7', '2023-20', '9662799456', 'darsh@gmail.com', '2023-04-09', '2023-04-17'),
(5, 'Devarsh Manish Soni', 'M', '9874563321', '7', '2024-2025', '987453210', 'devarsh@gmail.com', '2023-04-09', '2023-05-03'),
(6, 'Aadi Hitendra Shah', 'M', '225896371', '9', '2024-2025', '98563210', 'aadi@gmail.com', '2023-04-16', '2024-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `admission_inq`
--

DROP TABLE IF EXISTS `admission_inq`;
CREATE TABLE IF NOT EXISTS `admission_inq` (
  `inq_no` int NOT NULL AUTO_INCREMENT,
  `inq_date` date NOT NULL,
  `stud_name` varchar(50) NOT NULL,
  `stud_gender` char(1) NOT NULL,
  `parent_phone` varchar(10) NOT NULL,
  `admission_class` varchar(2) NOT NULL,
  `admission_year` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `parent_email` varchar(25) NOT NULL,
  `stud_aadhaar` varchar(12) NOT NULL,
  `prev_school` varchar(50) NOT NULL,
  `prev_class` varchar(2) NOT NULL,
  `prev_study_year` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `prev_class_perc` varchar(2) NOT NULL,
  `inq_request` varchar(10) NOT NULL DEFAULT 'No',
  PRIMARY KEY (`inq_no`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission_inq`
--

INSERT INTO `admission_inq` (`inq_no`, `inq_date`, `stud_name`, `stud_gender`, `parent_phone`, `admission_class`, `admission_year`, `parent_email`, `stud_aadhaar`, `prev_school`, `prev_class`, `prev_study_year`, `prev_class_perc`, `inq_request`) VALUES
(1, '2023-04-09', 'Darsh Jayeshkumar Parikh', 'M', '9874563211', '5', '2024-2025', 'darsh@gmail.com', '9638527410', 'Shantiniketan School,Kalol', '4', '2022-2023', '90', 'Yes'),
(2, '2023-04-09', 'Devarsh Manish Soni', 'M', '987453210', '7', '2024-2025', 'devarsh@gmail.com', '9874563321', 'Narayan Vidhyalaya Rajpipla', '6', '2022-2023', '90', 'Yes'),
(3, '2023-04-16', 'Aadi Hitendra Shah', 'M', '98563210', '9', '2024-2025', 'aadi@gmail.com', '225896371', 'Vapi Public School', '8', '2019-2020', '95', 'Yes'),
(5, '2023-05-03', 'Das Jayeshkuumar Parikh', 'M', '965871254', '11', '2023-2024', 'darsh@gmail.com', '968745123', 'Shantiniketan Kalol', '10', '2022-2023', '90', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `admission_tb`
--

DROP TABLE IF EXISTS `admission_tb`;
CREATE TABLE IF NOT EXISTS `admission_tb` (
  `sr_no` int NOT NULL AUTO_INCREMENT,
  `admit_date` date NOT NULL,
  `stud_name` varchar(50) NOT NULL,
  `stud_gender` varchar(6) NOT NULL,
  `parent_phone` varchar(10) NOT NULL,
  `admission_class` varchar(2) NOT NULL,
  `admission_year` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `stud_bdate` date NOT NULL,
  `stud_aadhaar` varchar(12) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `nation` varchar(15) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `mother_tongue` varchar(10) NOT NULL,
  `parent_email` varchar(50) NOT NULL,
  `prev_school` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `prev_class` varchar(2) NOT NULL,
  `prev_study_year` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `prev_class_perc` varchar(2) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `father_aadhaar` varchar(12) NOT NULL,
  `father_contact` varchar(10) NOT NULL,
  `father_occupation` varchar(10) NOT NULL,
  `father_income` varchar(10) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `mother_aadhaar` varchar(12) NOT NULL,
  `mother_contact` varchar(10) NOT NULL,
  `mother_occupation` varchar(10) NOT NULL,
  `mother_income` varchar(10) NOT NULL,
  `admit_request` varchar(5) NOT NULL DEFAULT 'No',
  PRIMARY KEY (`sr_no`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission_tb`
--

INSERT INTO `admission_tb` (`sr_no`, `admit_date`, `stud_name`, `stud_gender`, `parent_phone`, `admission_class`, `admission_year`, `stud_bdate`, `stud_aadhaar`, `address`, `city`, `state`, `nation`, `pincode`, `mother_tongue`, `parent_email`, `prev_school`, `prev_class`, `prev_study_year`, `prev_class_perc`, `father_name`, `father_aadhaar`, `father_contact`, `father_occupation`, `father_income`, `mother_name`, `mother_aadhaar`, `mother_contact`, `mother_occupation`, `mother_income`, `admit_request`) VALUES
(1, '2023-04-09', 'Darsh Jayeshkumar Parikh', 'M', '9662799456', '7', '2023-20', '2004-02-24', '96385274179', 'AbC Apartment,Anand', 'Anand', 'Gujarat', 'India', '388120', 'Gujarati', 'darsh@gmail.com', 'Shantiniketan School Kalol', '6', '2021-20', '95', 'Jayeshkumar Kanchanlal Parikh', '9576541233', '9662799456', 'Business', '96200', 'Bhaminiben Jayeshkumar Parikh', '96385274', '987456325', 'Housewife', '-', 'Yes'),
(2, '2023-04-09', 'Devarsh Manish Soni', 'M', '9662799456', '7', '2025-20', '2002-08-05', '852741963', '20-A,Housing Society, Anand', 'Anand', 'Gujarat', 'India', '388120', 'Gujarati', 'devarsh@gmail.com', 'RajPipla School', '6', '2020-20', '69', 'Manish Chhagan Soni', '963852741', '9638527410', 'Business', '1000000', 'Sita Manish Soni', '963852741', '5274196320', 'Business', '205500', 'Yes'),
(3, '2023-04-28', 'Aadi Hidendra Shah', 'M', '6987423651', '10', '2023-2024', '2010-02-11', '879456147', 'Vapi', 'Vapi', 'Gujarat', 'India', '380010', 'Gujarati', 'aadi@gmail.com', 'Vapi Public School', '9', '2022-2023', '90', 'Hidendra k. Shah', '9874589631', '8749631475', 'Businessma', '25000', 'Radhaben Hidendra Shah', '987414853', '7448962563', 'Housewife', '0', 'No'),
(4, '2023-05-02', 'Tanvi Jayeshkumar Parikh', 'F', '9426560053', '10', '2024-2025', '2000-09-04', '857469123', '20-A,Housing Society,Kalol', 'Kalol', 'Gujarat', 'India', '389330', 'Gujarati', 'tanu@gmail.com', 'Shantiniketan Godhara', '9', '2022-2023', '90', 'Jayeshkumar k Parikh', '962587413', '9426560053', 'Businessma', '250000', 'Bhaminiben Jayeshkumar Parikh', '852147963', '987452163', 'Housewife', '0', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `sr_no` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `name` varchar(35) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `contacted` char(3) NOT NULL DEFAULT 'No',
  PRIMARY KEY (`sr_no`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sr_no`, `email`, `name`, `message`, `date`, `contacted`) VALUES
(1, 'darsh@gmail.com', 'Darsh', 'Hello World!!', '2023-05-02', 'Yes'),
(2, 'devarsh@gmail.com', 'devarsh', 'Hello!!', '2023-05-02', 'No'),
(3, 'aadi@gmail.com', 'aadi', 'hello guys!', '2023-05-02', 'Yes'),
(4, 'user@gmail.com', 'user', 'i can not enter data in admission form please help!', '2023-05-02', 'No'),
(5, 'hello@gmail.com', 'XYZ', 'i want to update my admission details', '2023-05-02', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE IF NOT EXISTS `tb_user` (
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `auth` varchar(5) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `email`, `password`, `auth`) VALUES
('darsh242', 'darsh242@gmail.com', 'darsh242', 'user'),
('darsh24', 'darsh24@gmail.com', 'darsh24', 'user'),
('aadi28', 'aadi28@gmail.com', 'aadi28', 'user'),
('admin', 'admin@gmail.com', 'admin12', 'admin'),
('darsh11', 'darsh11@gmail.com', 'd1234', 'user'),
('darsh2424', 'darsh2424@gmail.com', 'd1234', 'user'),
('tanu12', 'tanu@gmail.com', 'tanu123', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
