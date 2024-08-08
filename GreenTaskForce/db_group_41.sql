-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 11:08 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_group_41`
--
CREATE DATABASE IF NOT EXISTS `db_group_41` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_group_41`;

-- --------------------------------------------------------

--
-- Table structure for table `gtf_master_data`
--

CREATE TABLE IF NOT EXISTS `gtf_master_data` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Image` longblob NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Comment` varchar(250) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `AddDate` datetime NOT NULL,
  `Status` varchar(20) NOT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `gtf_master_data`
--

INSERT INTO `gtf_master_data` (`Serial`, `Image`, `Location`, `Comment`, `Username`, `AddDate`, `Status`) VALUES
(1, '', 'Wajira Road, Bambalapitiya', 'Garbage loaded in the road side. Drainage Lines are also blocked', 'Krish', '2023-05-12 00:15:52', 'Approved'),
(2, '', 'Next to Vihara Maha Devi Park', 'Garbage in the road side', 'Krish', '2023-05-12 00:17:32', 'Approved'),
(3, '', 'Sample Location', 'Sample Incident', 'Krish', '2023-05-12 00:26:46', 'Rejected'),
(4, '', 'In front of Colombo Fort Station', 'Inappropriate garbage releasing to environment', 'Krish', '2023-05-12 00:28:43', 'Red Flagged'),
(5, '', 'Bastian Road Bus stand', 'Inappropriate garbage releasing to environment', 'Krish', '2023-05-12 00:29:39', 'Not Approved');

-- --------------------------------------------------------

--
-- Table structure for table `logsch`
--

CREATE TABLE IF NOT EXISTS `logsch` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(25) NOT NULL,
  `LogIn` datetime NOT NULL,
  `LogOut` datetime NOT NULL,
  PRIMARY KEY (`Serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `logsch`
--

INSERT INTO `logsch` (`Serial`, `Username`, `LogIn`, `LogOut`) VALUES
(1, 'Krish', '2023-05-11 21:15:29', '0000-00-00 00:00:00'),
(2, 'Deshan', '2023-05-11 21:16:44', '0000-00-00 00:00:00'),
(3, 'Krish', '2023-05-11 21:21:49', '0000-00-00 00:00:00'),
(4, 'Krish', '2023-05-11 23:23:25', '2023-05-12 01:11:24'),
(5, 'Jayara123', '2023-05-12 01:13:31', '2023-05-12 01:31:10'),
(6, 'Admin', '2023-05-12 01:43:22', '0000-00-00 00:00:00'),
(7, 'Admin', '2023-05-12 01:43:59', '0000-00-00 00:00:00'),
(8, 'Admin', '2023-05-12 01:48:19', '0000-00-00 00:00:00'),
(9, 'GCap', '2023-05-12 01:59:04', '2023-05-12 02:14:39'),
(10, 'prageeth', '2023-05-12 02:19:01', '2023-05-12 02:21:47'),
(11, 'Krish', '2023-05-12 02:23:55', '2023-05-12 02:26:03'),
(12, 'GCap', '2023-05-12 02:26:33', '2023-05-12 02:27:43'),
(13, 'prageeth', '2023-05-12 02:28:16', '2023-05-12 02:28:37');

-- --------------------------------------------------------

--
-- Table structure for table `userstbl`
--

CREATE TABLE IF NOT EXISTS `userstbl` (
  `FullName` varchar(100) NOT NULL,
  `ConNo` varchar(10) NOT NULL,
  `NIC` varchar(12) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Date` datetime NOT NULL,
  `UType` varchar(20) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userstbl`
--

INSERT INTO `userstbl` (`FullName`, `ConNo`, `NIC`, `Email`, `Username`, `Password`, `Date`, `UType`) VALUES
('Thunurie Kariyawasam', '0776145898', '199956988990', 'thunuri@gmail.com', 'Admin', 'Admin123', '2023-05-01 00:00:00', 'Web Master'),
('Deshan Gamage', '0771148556', '200214785556', 'deshangamage@gmail.com', 'Deshan', '123456789', '2023-05-11 21:11:26', 'GTF Master'),
('Hashan Dulanjan', '0765165121', '199954551212', 'hash@yahoo.com', 'GCap', '123', '2023-05-12 01:48:53', 'GREEN CAPTAIN'),
('Jayara Jithathma', '0771154545', '200145454521', 'jayara@gmail.com', 'Jayara123', '123456', '2023-05-12 01:12:53', 'GTF Master'),
('Krishmi Bhagya', '0714458966', '200145862200', 'krishmi@yahoo.com', 'Krish', '147852', '2023-05-11 21:13:22', 'GTF Master'),
('Prageeth Saranga', '0715444545', '199995565665', 'N/A', 'prageeth', '147852369', '2023-05-12 01:49:41', 'COLLECTOR');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
