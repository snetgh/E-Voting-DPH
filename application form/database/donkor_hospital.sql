-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 22, 2019 at 04:59 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donkor_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `staff_department_id` int(50) NOT NULL AUTO_INCREMENT,
  `staff_department` varchar(60) NOT NULL,
  PRIMARY KEY (`staff_department_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`staff_department_id`, `staff_department`) VALUES
(1, 'Administration'),
(2, 'Accounts'),
(3, 'Internal Audit'),
(4, 'Laboratory'),
(5, 'X-Ray'),
(6, 'OPD'),
(7, 'Revenue'),
(8, 'Health Insurance'),
(9, 'Casualty'),
(10, 'Theatre'),
(11, 'Records'),
(12, 'Pharmacy'),
(13, 'Stores'),
(14, 'Procurement'),
(15, 'Laundry'),
(16, 'Maternity'),
(17, 'Female/Kids '),
(18, 'Male Medical/VIP'),
(19, 'Maintenance'),
(20, 'Security'),
(21, 'Mortuary'),
(22, 'Transport'),
(23, 'Dental'),
(24, 'Eye'),
(25, 'Psychiatry'),
(26, 'Disease Control'),
(27, 'ART'),
(28, 'I.T');

-- --------------------------------------------------------

--
-- Table structure for table `nominees`
--

DROP TABLE IF EXISTS `nominees`;
CREATE TABLE IF NOT EXISTS `nominees` (
  `nominee_id` int(100) NOT NULL AUTO_INCREMENT,
  `nominee_name` varchar(60) NOT NULL,
  `nominee_department` int(10) NOT NULL,
  `nominee_rank` int(10) NOT NULL,
  `nominee_contact` varchar(20) NOT NULL,
  `elector_1_name` varchar(60) NOT NULL,
  `elector_1_contact` varchar(20) NOT NULL,
  `elector_1_department` int(10) NOT NULL,
  `elector_1_rank` int(10) NOT NULL,
  `elector_2_name` varchar(60) NOT NULL,
  `elector_2_contact` varchar(20) NOT NULL,
  `elector_2_department` int(10) NOT NULL,
  `elector_2_rank` int(10) NOT NULL,
  `nominee_representative` varchar(60) NOT NULL,
  `creation_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`nominee_id`),
  KEY `nominee_department` (`nominee_department`),
  KEY `nominee_rank` (`nominee_rank`),
  KEY `elector_1_department` (`elector_1_department`),
  KEY `elector_1_rank` (`elector_1_rank`),
  KEY `elector_2_department` (`elector_2_department`),
  KEY `elector_2_rank` (`elector_2_rank`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nominees`
--

INSERT INTO `nominees` (`nominee_id`, `nominee_name`, `nominee_department`, `nominee_rank`, `nominee_contact`, `elector_1_name`, `elector_1_contact`, `elector_1_department`, `elector_1_rank`, `elector_2_name`, `elector_2_contact`, `elector_2_department`, `elector_2_rank`, `nominee_representative`, `creation_timestamp`) VALUES
(1, 'petrerq', 2, 1, '6767', 'jhhjh', '565656', 13, 37, 'hhjhjh', '56565', 12, 35, 'peterdonk', '2019-01-22 15:24:03'),
(2, 'Peter Donkor', 2, 13, '0552513405', 'John Doe', '0244037473', 1, 3, 'Sammy Forson', '02222222222', 23, 13, 'Petro', '2019-01-22 16:04:38');

-- --------------------------------------------------------

--
-- Table structure for table `ranks`
--

DROP TABLE IF EXISTS `ranks`;
CREATE TABLE IF NOT EXISTS `ranks` (
  `staff_rank_id` int(50) NOT NULL AUTO_INCREMENT,
  `staff_ranks` varchar(60) NOT NULL,
  PRIMARY KEY (`staff_rank_id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ranks`
--

INSERT INTO `ranks` (`staff_rank_id`, `staff_ranks`) VALUES
(1, 'Enrolled Nurse'),
(2, 'Staff Midwife'),
(3, 'Bio-Statistics Assistant'),
(4, 'Nutrition Officer'),
(5, 'Dispensing Assistant'),
(6, 'Senior Hospital orderly/Senior Hostel Orderly'),
(7, 'Senior Supply Manager'),
(8, 'Pharmacy Technician'),
(9, 'Nursing Officer'),
(10, 'Field Technician'),
(11, 'Deputy Chief Accountant'),
(12, 'Stenographer Secretary'),
(13, 'Principal Accountant Officer'),
(14, 'Senior Health Assistant'),
(15, 'Principal Health Assistant'),
(16, 'Principal Artisan'),
(17, 'Chief Technical Officer (Bio/Info/Disease Control)'),
(18, 'Head Hospital orderly/Head Hostel Orderly'),
(19, 'Chief Conservancy Labourer'),
(20, 'Labourer'),
(21, 'Senior Leading Launderer'),
(22, 'Principal Catering Officer'),
(23, 'Principal Security Guard'),
(24, 'Senior Accountant'),
(25, 'Senior Staff Nurse'),
(26, 'Principal Driver/Senior Coxswain'),
(27, 'Deputy Chief Clinical Engineering Manager'),
(28, 'Senior Bio-Statistics Assistant'),
(29, 'Principal Receptionist/Telephonist'),
(30, 'Supt. Laboratory Assistant'),
(31, 'Principal Technician Ass./Darkroom Ass. (X-Ray)'),
(32, 'Deputy Chief Bio-Statistics Officer'),
(33, 'Physician Assistant '),
(34, 'Specialist'),
(35, 'Midwifery Officer'),
(36, 'Senior Medical Officer'),
(37, 'Principal Community Health Nurse'),
(38, 'Deputy Chief Health Service Administrator'),
(39, 'Senior Dental Technician'),
(40, 'Senior Field Technician '),
(41, 'Senior Pharmacist'),
(42, 'Senior Technical Assistant'),
(43, 'Senior Medical Assistant'),
(44, 'Senior Technical Officer'),
(45, 'Senior Technical Officer (Lab/X-Ray/Orth)'),
(46, 'Community Health Nurse');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nominees`
--
ALTER TABLE `nominees`
  ADD CONSTRAINT `nominees_ibfk_1` FOREIGN KEY (`nominee_department`) REFERENCES `departments` (`staff_department_id`),
  ADD CONSTRAINT `nominees_ibfk_2` FOREIGN KEY (`nominee_rank`) REFERENCES `ranks` (`staff_rank_id`),
  ADD CONSTRAINT `nominees_ibfk_3` FOREIGN KEY (`elector_1_department`) REFERENCES `departments` (`staff_department_id`),
  ADD CONSTRAINT `nominees_ibfk_4` FOREIGN KEY (`elector_1_rank`) REFERENCES `ranks` (`staff_rank_id`),
  ADD CONSTRAINT `nominees_ibfk_5` FOREIGN KEY (`elector_2_department`) REFERENCES `departments` (`staff_department_id`),
  ADD CONSTRAINT `nominees_ibfk_6` FOREIGN KEY (`elector_2_rank`) REFERENCES `ranks` (`staff_rank_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
