-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 19, 2020 at 04:52 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obbm_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank_info`
--

DROP TABLE IF EXISTS `bloodbank_info`;
CREATE TABLE IF NOT EXISTS `bloodbank_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `nicnumber` varchar(255) NOT NULL,
  `bloodtype` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` int(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `CreateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blood_camp`
--

DROP TABLE IF EXISTS `blood_camp`;
CREATE TABLE IF NOT EXISTS `blood_camp` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Author` varchar(255) NOT NULL,
  `Heading` varchar(255) NOT NULL,
  `Message` varchar(30000) NOT NULL,
  `CreateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_camp`
--

INSERT INTO `blood_camp` (`id`, `Author`, `Heading`, `Message`, `CreateTime`) VALUES
(9, 'shajanthan', 'save life', 'kjfhgdcbvnbufhcvnbkhkufhcvkhgfh', '2020-11-17 12:02:54');

-- --------------------------------------------------------

--
-- Table structure for table `blood_received_info`
--

DROP TABLE IF EXISTS `blood_received_info`;
CREATE TABLE IF NOT EXISTS `blood_received_info` (
  `donorscode` varchar(255) NOT NULL,
  `referencenumber` varchar(255) NOT NULL,
  `nicnumber` varchar(255) NOT NULL,
  `bloodtype` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` int(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `CreateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`donorscode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blood_sent_info`
--

DROP TABLE IF EXISTS `blood_sent_info`;
CREATE TABLE IF NOT EXISTS `blood_sent_info` (
  `receivedscode` varchar(255) NOT NULL,
  `nicnumber` varchar(255) NOT NULL,
  `bloodtype` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` int(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `CreateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`receivedscode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donors_info`
--

DROP TABLE IF EXISTS `donors_info`;
CREATE TABLE IF NOT EXISTS `donors_info` (
  `donorid` int(10) NOT NULL AUTO_INCREMENT,
  `nicnumber` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `datetime` date NOT NULL,
  `donationplace` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `haemoglobinlevel` varchar(255) NOT NULL,
  `diabeticsmedicine` varchar(255) NOT NULL,
  `pressurecontrol` varchar(255) NOT NULL,
  `cancer` varchar(255) NOT NULL,
  `thyroid` varchar(255) NOT NULL,
  `aids` varchar(255) NOT NULL,
  `homosexual` varchar(255) NOT NULL,
  `tattoo` varchar(255) NOT NULL,
  `updation` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`donorid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donors_info`
--

INSERT INTO `donors_info` (`donorid`, `nicnumber`, `weight`, `bloodgroup`, `datetime`, `donationplace`, `age`, `haemoglobinlevel`, `diabeticsmedicine`, `pressurecontrol`, `cancer`, `thyroid`, `aids`, `homosexual`, `tattoo`, `updation`) VALUES
(2, '200116201800', '40', 'B-', '2020-11-26', 'Nelliady', 20, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', '2020-11-14 11:35:29.560447');

-- --------------------------------------------------------

--
-- Table structure for table `medical_info`
--

DROP TABLE IF EXISTS `medical_info`;
CREATE TABLE IF NOT EXISTS `medical_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nicnumber` varchar(255) NOT NULL,
  `weight` int(10) NOT NULL,
  `bloodtype` varchar(255) NOT NULL,
  `haemoglobinlevel` varchar(255) NOT NULL,
  `diabeticsmedicine` varchar(255) NOT NULL,
  `pressurecontrol` varchar(255) NOT NULL,
  `cancer` varchar(255) NOT NULL,
  `thyroid` varchar(255) NOT NULL,
  `aids` varchar(255) NOT NULL,
  `homosexual` varchar(255) NOT NULL,
  `tattoo` varchar(255) NOT NULL,
  `updation` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_info`
--

INSERT INTO `medical_info` (`id`, `nicnumber`, `weight`, `bloodtype`, `haemoglobinlevel`, `diabeticsmedicine`, `pressurecontrol`, `cancer`, `thyroid`, `aids`, `homosexual`, `tattoo`, `updation`) VALUES
(4, '200116201800', 67, 'B+', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', '2020-11-16 04:10:50.838840'),
(7, '922862266v', 68, 'B+', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', '2020-11-17 11:49:09.770939');

-- --------------------------------------------------------

--
-- Table structure for table `members_info`
--

DROP TABLE IF EXISTS `members_info`;
CREATE TABLE IF NOT EXISTS `members_info` (
  `fullname` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL,
  `nicnumber` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `province` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `primarycontactnumber` int(15) NOT NULL,
  `secondarycontactnumber` int(12) NOT NULL,
  `emailaddress` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `bloodtype` varchar(255) NOT NULL,
  `CreateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`nicnumber`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members_info`
--

INSERT INTO `members_info` (`fullname`, `usertype`, `nicnumber`, `dob`, `gender`, `age`, `province`, `district`, `city`, `area`, `address`, `primarycontactnumber`, `secondarycontactnumber`, `emailaddress`, `password`, `bloodtype`, `CreateTime`) VALUES
('Ravi shajee', 'Admin', '922862265v', '1992-10-12', 'male', 28, 'nothern', 'jaffna', 'kondavil', 'kondavil', 'no:-31,madathadi lane,kondavil west,kondavil', 766095390, 761514888, 'shajeeshajeeth31@gmail.com', 'shajee1992', 'A-', '2020-11-17 11:56:15'),
('shajee shajeeth', 'Member', '922862266v', '1992-12-10', 'Male', 28, 'northern', 'Jaffna', 'kondavil', 'kondavil', 'no:-31,madathadi lane,kondavil west kondavil', 766095390, 761514888, 'sajee@gmail.com', 'shajee1992', 'B+', '2020-11-17 11:47:56');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `CreationTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recipients_info`
--

DROP TABLE IF EXISTS `recipients_info`;
CREATE TABLE IF NOT EXISTS `recipients_info` (
  `recipientid` int(10) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nicnumber` varchar(255) NOT NULL,
  `phonenumber` int(15) NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `numberofunits` varchar(255) NOT NULL,
  `requestdatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `obtaindatetime` date NOT NULL,
  `hospitalname` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  PRIMARY KEY (`recipientid`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userlogs`
--

DROP TABLE IF EXISTS `userlogs`;
CREATE TABLE IF NOT EXISTS `userlogs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `userEmail` varchar(255) NOT NULL,
  `userip` varchar(255) NOT NULL,
  `logintime` varchar(255) NOT NULL,
  `logouttime` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=174 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogs`
--

INSERT INTO `userlogs` (`id`, `userEmail`, `userip`, `logintime`, `logouttime`, `status`) VALUES
(173, 'sajee@gmail.com', '::1', '17-11-2020 05:29:35 PM', '17-11-2020 05:29:35 PM', '1'),
(172, 'shajeeshajeeth31@gmail.com', '::1', '17-11-2020 05:26:42 PM', '17-11-2020 05:26:42 PM', '1'),
(169, 'sajee@gmail.com', '::1', '17-11-2020 05:17:56 PM', '17-11-2020 05:17:56 PM', '1'),
(170, 'sajee@gmail.com', '::1', '17-11-2020 05:19:46 PM', '17-11-2020 05:21:52 PM', '1'),
(171, 'sajee@gmail.com', '::1', '17-11-2020 05:21:56 PM', '17-11-2020 05:21:56 PM', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
