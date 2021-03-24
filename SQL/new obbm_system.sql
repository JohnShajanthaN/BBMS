-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2021 at 04:17 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `bloodbank_info` (
  `id` int(10) NOT NULL,
  `code` varchar(255) NOT NULL,
  `nicnumber` varchar(255) NOT NULL,
  `bloodtype` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` int(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `CreateTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodbank_info`
--

INSERT INTO `bloodbank_info` (`id`, `code`, `nicnumber`, `bloodtype`, `hospital`, `email`, `phonenumber`, `address`, `status`, `CreateTime`) VALUES
(35, '922862266vB+766095390jaf1234', '922862266v', 'B+', 'Jaffna Central Hospital', 'sajee@gmail.com', 766095390, 'No:-31,Madathadi Lane', 'Received', '2020-11-22 04:05:47'),
(36, '922862266vB+766095390jaf1234', '922862266v', 'B+', 'Jaffna Central Hospital', 'sajee@gmail.com', 766095390, 'No:-31,Madathadi Lane', 'Donated', '2020-11-22 04:10:09'),
(37, '986324512vAB+776541245sinthu98', '986324512v', 'AB+', 'Jaffna Central Hospital', 'sinthuja98@gmail.com', 776541245, 'No:20,Kovil Lane', 'Received', '2020-11-22 06:46:01'),
(38, '986324512vAB+776541245sinthu98', '986324512v', 'AB+', 'Jaffna Central Hospital', 'sinthuja98@gmail.com', 776541245, 'No:20,Kovil Lane', 'Donated', '2020-11-22 06:47:48'),
(39, '971254783vA+773275398Suji1234', '971254783v', 'A+', 'Jaffna Central Hospital', 'sujee15@gmail.com', 773275398, 'No:30,Parathi Lane', 'Received', '2020-11-22 12:23:29'),
(40, '971254783vA+773275398Suji1234', '971254783v', 'A+', 'Jaffna Central Hospital', 'sujee15@gmail.com', 773275398, 'No:30,Parathi Lane', 'Donated', '2020-11-22 12:25:20'),
(41, '986324512vAB+776541245Sinthu96', '986324512v', 'AB+', 'Jaffna Central Hospital', 'sinthuja98@gmail.com', 776541245, 'No:20,Kovil Lane', 'Donated', '2020-11-24 06:12:58'),
(42, '986324512vAB+776541245Sinthu96', '986324512v', 'AB+', 'Jaffna Central Hospital', 'sinthuja98@gmail.com', 776541245, 'No:20,Kovil Lane', 'Donated', '2020-11-24 06:13:59'),
(46, '986324512vAB+776541245Sinthuja0001', '986324512v', 'AB+', 'Jaffna Central Hospital', 'sinthuja98@gmail.com', 776541245, 'No:20,Kovil Lane', 'Received', '2020-11-24 08:20:14'),
(45, '986324512vAB+776541245Sinthuja0001', '986324512v', 'AB+', 'Jaffna Central Hospital', 'sinthuja98@gmail.com', 776541245, 'No:20,Kovil Lane', 'Donated', '2020-11-24 08:18:47'),
(47, '965011234vO+773764456Vithu001', '965011234v', 'O+', 'Jaffna Central Hospital', 'vithusha96@gmail.com', 773764456, 'No:23,School Lane', 'Donated', '2020-11-24 11:01:01'),
(48, '965011234vO+773764456Vithu001', '961245784v', 'O+', 'Jaffna Central Hospital', 'kavin96@gmail.com', 771647639, 'No:20,School Lane', 'Received', '2020-11-24 11:05:58'),
(49, '922862266vAB+766095390Shajeeth0001', '922862266v', 'AB+', 'Jaffna Central Hospital', 'sajee@gmail.com', 766095390, 'No:-31,Madathadi Lane', 'Donated', '2020-11-24 13:25:23'),
(50, '922862266vAB+766095390Shajeeth0001', '986324512v', 'AB+', 'Jaffna Central Hospital', 'sinthuja98@gmail.com', 776541245, 'No:20,Kovil Lane', 'Received', '2020-11-24 13:27:19'),
(51, '986324512vAB+776541245sinthu45', '986324512v', 'AB+', 'Jaffna Central Hospital', 'sinthuja98@gmail.com', 776541245, 'No:20,Kovil Lane', 'Donated', '2020-11-28 02:46:49'),
(52, '986324512vAB+776541245sinthu45', '994536124v', 'O-', 'Jaffna Central Hospital', 'jasee99@gmail.com', 779695941, 'No:37,Pamankada Road', 'Received', '2020-11-28 02:49:10'),
(53, '922862266vAB+766095390shajee1992', '922862266v', 'AB+', 'Jaffna Central Hospital', 'sajee@gmail.com', 766095390, 'No:-31,Madathadi Lane', 'Donated', '2021-01-03 05:03:58'),
(54, '922862266vAB+766095390shajee1992', '922862266v', 'AB+', 'Jaffna Central Hospital', 'sajee@gmail.com', 766095390, 'No:-31,Madathadi Lane', 'Donated', '2021-01-03 05:05:11'),
(55, '922862266vAB+766095390shajee1992', '922862266v', 'AB+', 'Jaffna Central Hospital', 'sajee@gmail.com', 766095390, 'No:-31,Madathadi Lane', 'Donated', '2021-01-03 05:07:23'),
(56, '961245784vO+771647639kavin1996', '961245784v', 'O+', 'Jaffna Central Hospital', 'kavin96@gmail.com', 771647639, 'No:20,School Lane', 'Donated', '2021-01-03 05:12:03'),
(57, '961245784vO+771647639kavin1996', '961245784v', 'O+', 'Jaffna Central Hospital', 'kavin96@gmail.com', 771647639, 'No:20,School Lane', 'Received', '2021-01-03 05:13:34'),
(58, '922862266vAB+766095390shajee1992', '922862266v', 'AB+', 'Jaffna Central Hospital', 'sajee@gmail.com', 766095390, 'No:-31,Madathadi Lane', 'Received', '2021-01-25 06:13:55'),
(59, '922862266vAB+766095390shajee92', '922862266v', 'AB+', 'Jaffna Central Hospital', 'sajee@gmail.com', 766095390, 'No:-31,Madathadi Lane', 'Donated', '2021-01-25 06:14:44'),
(60, '922862266vAB+766095390shajee92', '952453657v', 'B-', 'Jaffna Central Hospital', 'mpiragash95@gmail.com', 770572025, 'No:31,Madathady Lane', 'Received', '2021-03-06 03:23:36'),
(61, '952453657vB-770572025piragash1992', '952453657v', 'B-', 'Jaffna Central Hospital', 'mpiragash95@gmail.com', 770572025, 'No:31,Madathady Lane', 'Donated', '2021-03-06 03:27:14');

-- --------------------------------------------------------

--
-- Table structure for table `blood_camp`
--

CREATE TABLE `blood_camp` (
  `id` int(10) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `corg` varchar(255) NOT NULL,
  `clocation` varchar(30000) NOT NULL,
  `cdate` date NOT NULL DEFAULT current_timestamp(),
  `ctime` time NOT NULL,
  `cdescription` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_camp`
--

INSERT INTO `blood_camp` (`id`, `cname`, `corg`, `clocation`, `cdate`, `ctime`, `cdescription`) VALUES
(12, 'Blood Donation', 'John', 'University Of College', '2020-11-29', '09:00:00', 'Save Some ones life'),
(11, 'Jaffna Blood Bank', 'John Shajanthan', 'Jaffna University', '2020-11-27', '08:30:00', 'Save The Life'),
(13, 'save some one life', 'john shajeepan', 'Jaffna SLIATE', '2020-11-30', '09:30:00', 'dhshadfihfijsffsdfdsfdfd'),
(14, 'blood donate', 'shan', 'Jaffna University', '2021-01-22', '11:50:00', '<div style=\"text-align: center;\"><b><u><font size=\"4\">ettwthyyh</font></u></b></div>'),
(15, 'donate blood', 'kajan', 'Jaffna University', '2021-01-28', '03:47:00', 'htrhytuy');

-- --------------------------------------------------------

--
-- Table structure for table `blood_received_info`
--

CREATE TABLE `blood_received_info` (
  `donorscode` varchar(255) NOT NULL,
  `referencenumber` varchar(255) NOT NULL,
  `nicnumber` varchar(255) NOT NULL,
  `bloodtype` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` int(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `CreateTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_received_info`
--

INSERT INTO `blood_received_info` (`donorscode`, `referencenumber`, `nicnumber`, `bloodtype`, `hospital`, `email`, `phonenumber`, `address`, `CreateTime`) VALUES
('952453657vB-770572025piragash1992', 'piragash1992', '952453657v', 'B-', 'Jaffna Central Hospital', 'mpiragash95@gmail.com', 770572025, 'No:31,Madathady Lane', '2021-03-06 03:27:14');

-- --------------------------------------------------------

--
-- Table structure for table `blood_sent_info`
--

CREATE TABLE `blood_sent_info` (
  `receivedscode` varchar(255) NOT NULL,
  `nicnumber` varchar(255) NOT NULL,
  `bloodtype` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` int(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `CreateTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_sent_info`
--

INSERT INTO `blood_sent_info` (`receivedscode`, `nicnumber`, `bloodtype`, `hospital`, `email`, `phonenumber`, `address`, `CreateTime`) VALUES
('922862266vB+766095390jaf1234', '922862266v', 'B+', 'Jaffna Central Hospital', 'sajee@gmail.com', 766095390, 'no:-31,madathadi lane,kondavil west kondavil', '2020-11-22 04:10:09'),
('986324512vAB+776541245sinthu98', '986324512v', 'AB+', 'Jaffna Central Hospital', 'sinthuja98@gmail.com', 776541245, 'No:20,Kovil Lane', '2020-11-22 06:47:48'),
('971254783vA+773275398Suji1234', '971254783v', 'A+', 'Jaffna Central Hospital', 'sujee15@gmail.com', 773275398, 'No:30,Parathi Lane', '2020-11-22 12:25:20'),
('986324512vAB+776541245Sinthu96', '986324512v', 'AB+', 'Jaffna Central Hospital', 'sinthuja98@gmail.com', 776541245, 'No:20,Kovil Lane', '2020-11-24 06:13:59'),
(' 986324512vAB+sinthuja96', '986324512v', 'AB+', 'Jaffna Central Hospital', 'sinthuja98@gmail.com', 776541245, 'No:20,Kovil Lane', '2020-11-24 08:12:13'),
('986324512vAB+776541245Sinthuja0001', '986324512v', 'AB+', 'Jaffna Central Hospital', 'sinthuja98@gmail.com', 776541245, 'No:20,Kovil Lane', '2020-11-24 08:20:14'),
('965011234vO+773764456Vithu001', '961245784v', 'O+', 'Jaffna Central Hospital', 'kavin96@gmail.com', 771647639, 'No:20,School Lane', '2020-11-24 11:05:58'),
('922862266vAB+766095390Shajeeth0001', '986324512v', 'AB+', 'Jaffna Central Hospital', 'sinthuja98@gmail.com', 776541245, 'No:20,Kovil Lane', '2020-11-24 13:27:19'),
('986324512vAB+776541245sinthu45', '994536124v', 'O-', 'Jaffna Central Hospital', 'jasee99@gmail.com', 779695941, 'No:37,Pamankada Road', '2020-11-28 02:49:10'),
('961245784vO+771647639kavin1996', '961245784v', 'O+', 'Jaffna Central Hospital', 'kavin96@gmail.com', 771647639, 'No:20,School Lane', '2021-01-03 05:13:34'),
('922862266vAB+766095390shajee1992', '922862266v', 'AB+', 'Jaffna Central Hospital', 'sajee@gmail.com', 766095390, 'No:-31,Madathadi Lane', '2021-01-25 06:13:55'),
('922862266vAB+766095390shajee92', '952453657v', 'B-', 'Jaffna Central Hospital', 'mpiragash95@gmail.com', 770572025, 'No:31,Madathady Lane', '2021-03-06 03:23:36');

-- --------------------------------------------------------

--
-- Table structure for table `donors_info`
--

CREATE TABLE `donors_info` (
  `donorid` int(10) NOT NULL,
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
  `updation` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emergency_message`
--

CREATE TABLE `emergency_message` (
  `id` int(11) NOT NULL,
  `From` varchar(100) NOT NULL,
  `To` varchar(20) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medical_info`
--

CREATE TABLE `medical_info` (
  `id` int(10) NOT NULL,
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
  `updation` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_info`
--

INSERT INTO `medical_info` (`id`, `nicnumber`, `weight`, `bloodtype`, `haemoglobinlevel`, `diabeticsmedicine`, `pressurecontrol`, `cancer`, `thyroid`, `aids`, `homosexual`, `tattoo`, `updation`) VALUES
(8, '961245784v', 67, 'O+', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'No', '2020-11-22 05:58:20.896320'),
(7, '922862266v', 68, 'AB+', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'No', '2020-11-17 11:49:09.770939'),
(9, '986324512v', 65, 'AB+', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'No', '2020-11-22 06:20:10.767987'),
(10, '971254783v', 70, 'A+', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'No', '2020-11-22 12:12:29.926474'),
(11, '986324512v', 45, 'AB+', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '2020-11-24 07:31:40.929928'),
(12, '994536124v', 75, 'O-', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'No', '2020-11-24 10:45:18.140497'),
(13, '926789124v', 63, 'O+', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'No', '2020-11-24 10:52:44.981510'),
(14, '965011234v', 66, 'O+', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'No', '2020-11-24 10:58:45.142579'),
(15, '922862265v', 75, 'A-', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'No', '2020-11-24 11:00:45.142579'),
(17, '952451234v', 64, 'B+', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'No', '2020-11-27 02:52:37.724118'),
(18, '952453657v', 75, 'B-', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'No', '2020-11-27 02:56:51.942498'),
(19, '922862265v', 75, 'A+', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '2021-03-23 01:35:35.451976');

-- --------------------------------------------------------

--
-- Table structure for table `members_info`
--

CREATE TABLE `members_info` (
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
  `CreateTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `Upload_Image` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members_info`
--

INSERT INTO `members_info` (`fullname`, `usertype`, `nicnumber`, `dob`, `gender`, `age`, `province`, `district`, `city`, `area`, `address`, `primarycontactnumber`, `secondarycontactnumber`, `emailaddress`, `password`, `bloodtype`, `CreateTime`, `Upload_Image`) VALUES
('Ravi Shajee', 'Admin', '922862265v', '1992-10-12', 'Male', 28, 'Nothern', 'Jaffna', 'Jaffna', 'Kondavil', 'No:-31,Madathadi Lane', 766095390, 761514888, 'shajeeshajeeth31@gmail.com', 'shajee1992', 'A-', '2020-11-17 11:56:15', NULL),
('shajee shajeeth', 'Member', '922862266v', '1992-12-10', 'Male', 28, 'Northern', 'Jaffna', 'Jaffna', 'Kondavil', 'No:-31,Madathadi Lane', 766095390, 761514888, 'sajee@gmail.com', 'Shajeeth92', 'AB+', '2020-11-17 11:47:56', NULL),
('Kavin Kaviraj', 'Member', '961245784v', '1996-08-25', 'Male', 24, 'Northern', 'Jaffna', 'Jaffna', 'Kopay', 'No:20,School Lane', 771647639, 774561234, 'kavin96@gmail.com', 'Kavin1234', 'O+', '2020-11-22 05:52:23', NULL),
('Sinthu Sinthuja', 'Member', '986324512v', '1998-02-05', 'Female', 22, 'Northern', 'Jaffna', 'Jaffna', 'Nellijady', 'No:20,Kovil Lane', 776541245, 779845633, 'sinthuja98@gmail.com', 'Sinthuja96', 'AB+', '2020-11-22 06:10:28', NULL),
('Sujee Sujitharan', 'Member', '971254783v', '1997-04-15', 'Male', 23, 'Northern', 'Jaffna', 'Jaffna', 'Nellijady', 'No:30,Parathi Lane', 773275398, 774631444, 'sujee15@gmail.com', 'Suji1234', 'A+', '2020-11-22 12:11:48', NULL),
('Jasee Jaseelan', 'Member', '994536124v', '1999-12-25', 'Male', 21, 'Western', 'Colombo', 'Wellawatta', 'Kiruklaponae', 'No:37,Pamankada Road', 779695941, 773614582, 'jasee99@gmail.com', 'jasee99', 'O-', '2020-11-24 10:42:35', NULL),
('Jana Janani', 'Member', '926789124v', '1992-04-09', 'Female', 28, 'Western', 'Colombo', 'Dehiwalla', 'Cross Street', 'No:05,1st Cross Street Lane', 764563210, 767896541, 'janani92@gmail.com', 'Janani123', 'O+', '2020-11-24 10:49:41', NULL),
('Vithu Vithusha', 'Member', '965011234v', '1996-01-01', 'Female', 24, 'Western', 'Colombo', 'Moratuwa', 'Kalkasduwa', 'No:23,School Lane', 773764456, 778547692, 'vithusha96@gmail.com', 'Vithu1996', 'O+', '2020-11-24 10:58:26', NULL),
('Logee Logeepan', 'Member', '952451234v', '1995-07-22', 'Male', 25, 'Northern', 'Jaffna', 'Jaffna', 'Kondavil', 'No:25,Madathady Lane', 779863451, 771237892, 'logee95@gmail.com', 'Logee1995', 'B+', '2020-11-27 02:49:52', NULL),
('Mathan Piragash', 'Member', '952453657v', '1995-11-12', 'Male', 25, 'Northern', 'Jaffna', 'Jaffna', 'Kondavil', 'No:31,Madathady Lane', 770572025, 770354621, 'mpiragash95@gmail.com', 'Piragash621', 'B-', '2020-11-27 02:55:36', NULL),
('sgggg fggsggg', 'Member', '922862273v', '1992-12-12', 'Male', 28, 'Northern', 'Jaffna', 'kondavil', 'kondavil', 'bggggggg', 766952356, 2147483647, 'fsagdgg@gmail.com', 'shajeepan12', 'A+', '2021-03-23 01:33:37', 'images/');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `CreationTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `fullname`, `email`, `message`, `CreationTime`) VALUES
(4, 'John Shajee', 'shajee12@gmail.com', 'Nothing to Say', '2020-11-22 05:12:55'),
(5, 'John Shajee', 'shajee12@gmail.com', 'Nothing to Say', '2020-11-22 05:13:25'),
(6, 'shajee', 'sajee@gmail.com', 'fgdgggg', '2021-01-03 05:16:46'),
(7, 'ikghik', 'kgh', 'ghkghgh', '2021-01-03 11:11:27'),
(8, 'shajeeshajeeth', 'shajeee@gmail.com', 'ttttttr', '2021-01-25 06:22:44');

-- --------------------------------------------------------

--
-- Table structure for table `recipients_info`
--

CREATE TABLE `recipients_info` (
  `recipientid` int(10) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nicnumber` varchar(255) NOT NULL,
  `phonenumber` int(15) NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `numberofunits` varchar(255) NOT NULL,
  `requestdatetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `obtaindatetime` date NOT NULL,
  `hospitalname` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipients_info`
--

INSERT INTO `recipients_info` (`recipientid`, `fullname`, `email`, `nicnumber`, `phonenumber`, `bloodgroup`, `numberofunits`, `requestdatetime`, `obtaindatetime`, `hospitalname`, `reason`) VALUES
(39, 'shajee shajeeth', 'sajee@gmail.com', '922862266v', 766095390, 'A-', '2', '2020-11-22 04:04:44', '2020-11-17', 'A', 'hukh'),
(40, 'shajee shajeeth', 'sajee@gmail.com', '922862266v', 766095390, 'B+', '1', '2020-11-22 04:06:49', '2020-11-29', 'A', 'Accident'),
(41, 'Sinthu Sinthuja', 'sinthuja98@gmail.com', '986324512v', 776541245, 'AB+', '1', '2020-11-22 06:46:51', '2020-11-23', 'A', 'Accident'),
(42, 'Sujee Sujitharan', 'sujee15@gmail.com', '971254783v', 773275398, 'A+', '1', '2020-11-22 12:25:10', '2020-11-27', 'A', 'Accident'),
(43, 'Sinthu Sinthuja', 'sinthuja98@gmail.com', '986324512v', 776541245, 'AB+', '1', '2020-11-24 06:13:45', '2020-11-27', 'A', 'Accident'),
(44, 'Sinthu Sinthuja', 'sinthuja98@gmail.com', '986324512v', 776541245, 'AB+', '1', '2020-11-24 08:08:13', '2020-11-30', 'A', 'Accident'),
(45, 'Sinthu Sinthuja', 'sinthuja98@gmail.com', '986324512v', 776541245, 'AB+', '1', '2020-11-24 08:19:11', '2020-11-30', 'A', 'Accident'),
(46, 'Kavin Kaviraj', 'kavin96@gmail.com', '961245784v', 771647639, 'O+', '1', '2020-11-24 11:04:55', '2020-11-27', 'A', 'Accident'),
(47, 'Sinthu Sinthuja', 'sinthuja98@gmail.com', '986324512v', 776541245, 'AB+', '1', '2020-11-24 13:26:38', '2020-11-30', 'A', 'Accident'),
(48, 'Jasee Jaseelan', 'jasee99@gmail.com', '994536124v', 779695941, 'B+', '1', '2020-11-28 02:48:11', '2020-11-30', 'A', 'accident'),
(49, 'Jasee Jaseelan', 'jasee99@gmail.com', '994536124v', 779695941, 'AB+', '1', '2020-11-28 02:48:24', '2020-11-30', 'A', 'accident'),
(50, 'Kavin Kaviraj', 'kavin96@gmail.com', '961245784v', 771647639, 'AB+', '1', '2020-11-29 05:22:47', '2020-11-30', 'A', 'accident'),
(51, 'Kavin Kaviraj', 'kavin96@gmail.com', '961245784v', 771647639, 'O+', '1', '2021-01-03 05:12:45', '2021-01-16', 'A', 'accident'),
(52, 'shajee shajeeth', 'sajee@gmail.com', '922862266v', 766095390, 'AB+', '1', '2021-01-25 06:09:35', '2021-01-28', 'A', 'accident'),
(53, 'shajee shajeeth', 'sajee@gmail.com', '922862266v', 766095390, 'A-', '1', '2021-01-25 06:13:36', '2021-01-27', 'A', 'accident'),
(54, 'shajee shajeeth', 'sajee@gmail.com', '922862266v', 766095390, 'AB+', '1', '2021-01-25 06:13:44', '2021-01-27', 'A', 'accident'),
(55, 'Mathan Piragash', 'mpiragash95@gmail.com', '952453657v', 770572025, 'B-', '2', '2021-03-06 03:22:40', '2021-03-13', 'A', 'sryhdrey'),
(56, 'Mathan Piragash', 'mpiragash95@gmail.com', '952453657v', 770572025, 'AB+', '1', '2021-03-06 03:23:03', '2021-03-12', 'A', 'drjhdtuj');

-- --------------------------------------------------------

--
-- Table structure for table `userlogs`
--

CREATE TABLE `userlogs` (
  `id` int(10) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userip` varchar(255) NOT NULL,
  `logintime` varchar(255) NOT NULL,
  `logouttime` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogs`
--

INSERT INTO `userlogs` (`id`, `userEmail`, `userip`, `logintime`, `logouttime`, `status`) VALUES
(173, 'sajee@gmail.com', '::1', '17-11-2020 05:29:35 PM', '17-11-2020 05:29:35 PM', '1'),
(172, 'shajeeshajeeth31@gmail.com', '::1', '17-11-2020 05:26:42 PM', '17-11-2020 05:26:42 PM', '1'),
(169, 'sajee@gmail.com', '::1', '17-11-2020 05:17:56 PM', '17-11-2020 05:17:56 PM', '1'),
(170, 'sajee@gmail.com', '::1', '17-11-2020 05:19:46 PM', '17-11-2020 05:21:52 PM', '1'),
(171, 'sajee@gmail.com', '::1', '17-11-2020 05:21:56 PM', '17-11-2020 05:21:56 PM', '1'),
(174, 'sajee@gmail.com', '::1', '22-11-2020 09:32:17 AM', '22-11-2020 09:32:17 AM', '1'),
(175, 'shajeeshajeeth31@gmail.com', '::1', '22-11-2020 09:32:57 AM', '22-11-2020 09:32:57 AM', '1'),
(176, 'shajeeshajeeth31@gmail.com', '::1', '22-11-2020 10:15:02 AM', '22-11-2020 10:15:02 AM', '1'),
(177, 'shajeeshajeeth31@gmail.com', '::1', '22-11-2020 10:17:44 AM', '22-11-2020 10:17:44 AM', '1'),
(178, 'shajeeshajeeth31@gmail.com', '::1', '22-11-2020 10:19:24 AM', '22-11-2020 10:19:24 AM', '1'),
(179, 'sajee@gmail.com', '::1', '22-11-2020 10:26:42 AM', '22-11-2020 10:26:42 AM', '1'),
(180, 'shajeeshajeeth31@gmail.com', '::1', '22-11-2020 10:58:30 AM', '22-11-2020 10:58:30 AM', '1'),
(181, 'sajee@gmail.com', '::1', '22-11-2020 11:00:06 AM', '22-11-2020 11:00:06 AM', '1'),
(182, 'kavin96@gmail.com', '::1', '22-11-2020 11:22:23 AM', '22-11-2020 11:22:23 AM', '1'),
(183, 'sinthuja98@gmail.com', '::1', '22-11-2020 11:40:28 AM', '22-11-2020 11:51:55 AM', '1'),
(184, 'sinthuja98@gmail.com', '::1', '22-11-2020 11:52:34 AM', '22-11-2020 11:52:34 AM', '1'),
(185, 'shajeeshajeeth31@gmail.com', '::1', '22-11-2020 11:52:49 AM', '22-11-2020 11:52:49 AM', '1'),
(186, 'sujee15@gmail.com', '::1', '22-11-2020 05:41:48 PM', '22-11-2020 05:47:55 PM', '1'),
(187, 'shajeeshajeeth31@gmail.com', '::1', '22-11-2020 05:51:10 PM', '22-11-2020 05:51:10 PM', '1'),
(188, 'sujee15@gmail.com', '::1', '22-11-2020 05:51:46 PM', '22-11-2020 05:51:46 PM', '1'),
(189, 'dghg@gmail.com', '::1', '23-11-2020 08:26:53 AM', '23-11-2020 08:26:53 AM', '1'),
(190, 'dfhdf@gmail.com', '::1', '23-11-2020 08:34:17 AM', '23-11-2020 08:34:17 AM', '1'),
(191, 'dfhdf@gmail.com', '::1', '23-11-2020 08:39:52 AM', '23-11-2020 08:39:52 AM', '1'),
(192, 'dfhdf@gmail.com', '::1', '23-11-2020 08:50:05 AM', '23-11-2020 08:50:05 AM', '1'),
(193, 'dfhdf@gmail.com', '::1', '23-11-2020 08:52:40 AM', '23-11-2020 08:52:40 AM', '1'),
(194, 'dfhdf@gmail.com', '::1', '23-11-2020 09:03:08 AM', '23-11-2020 09:03:08 AM', '1'),
(195, 'dfhdf@gmail.com', '::1', '23-11-2020 09:13:25 AM', '23-11-2020 09:13:25 AM', '1'),
(196, 'dfhdf@gmail.com', '::1', '23-11-2020 09:25:54 AM', '23-11-2020 09:25:54 AM', '1'),
(197, 'dfhdf@gmail.com', '::1', '23-11-2020 09:26:42 AM', '23-11-2020 09:26:42 AM', '1'),
(198, 'shajeeshajeeth31@gmail.com', '::1', '23-11-2020 03:30:12 PM', '23-11-2020 03:30:12 PM', '1'),
(199, 'sajee@gmail.com', '::1', '23-11-2020 04:21:22 PM', '23-11-2020 04:21:22 PM', '1'),
(200, 'shajeeshajeeth31@gmail.com', '::1', '23-11-2020 06:01:48 PM', '23-11-2020 06:01:48 PM', '1'),
(201, 'sinthuja98@gmail.com', '::1', '23-11-2020 06:05:42 PM', '23-11-2020 06:05:42 PM', '1'),
(202, 'shajeeshajeeth31@gmail.com', '::1', '23-11-2020 06:31:56 PM', '23-11-2020 06:31:56 PM', '1'),
(203, 'sajee@gmail.com', '::1', '23-11-2020 06:32:11 PM', '23-11-2020 06:32:11 PM', '1'),
(204, 'shajeeshajeeth31@gmail.com', '::1', '23-11-2020 07:38:59 PM', '23-11-2020 07:38:59 PM', '1'),
(205, 'shajeeshajeeth31@gmail.com', '::1', '24-11-2020 08:02:38 AM', '24-11-2020 08:02:38 AM', '1'),
(206, 'sinthuja98@gmail.com', '::1', '24-11-2020 11:42:39 AM', '24-11-2020 11:42:39 AM', '1'),
(207, 'sinthuja98@gmail.com', '::1', '24-11-2020 01:05:23 PM', '24-11-2020 01:05:23 PM', '1'),
(208, 'shajeeshajeeth31@gmail.com', '::1', '24-11-2020 04:08:00 PM', '24-11-2020 04:08:00 PM', '1'),
(209, 'jasee99@gmail.com', '::1', '24-11-2020 04:12:35 PM', '24-11-2020 04:12:35 PM', '1'),
(210, 'jasee99@gmail.com', '::1', '24-11-2020 04:15:55 PM', '24-11-2020 04:15:55 PM', '1'),
(211, 'janani92@gmail.com', '::1', '24-11-2020 04:19:41 PM', '24-11-2020 04:24:56 PM', '1'),
(212, 'vithusha96@gmail.com', '::1', '24-11-2020 04:28:26 PM', '24-11-2020 04:28:26 PM', '1'),
(213, 'vithusha96@gmail.com', '::1', '24-11-2020 04:29:07 PM', '24-11-2020 04:29:07 PM', '1'),
(214, 'shajeeshajeeth31@gmail.com', '::1', '24-11-2020 04:29:27 PM', '24-11-2020 04:29:27 PM', '1'),
(215, 'kavin96@gmail.com', '::1', '24-11-2020 04:32:01 PM', '24-11-2020 04:32:01 PM', '1'),
(216, 'kavin96@gmail.com', '::1', '24-11-2020 04:32:54 PM', '24-11-2020 04:32:54 PM', '1'),
(217, 'shajeeshajeeth31@gmail.com', '::1', '24-11-2020 04:33:46 PM', '24-11-2020 04:33:46 PM', '1'),
(218, 'vithusha96@gmail.com', '::1', '24-11-2020 04:55:25 PM', '24-11-2020 04:55:25 PM', '1'),
(219, 'shajeeshajeeth31@gmail.com', '::1', '24-11-2020 05:03:39 PM', '24-11-2020 05:03:39 PM', '1'),
(220, 'janani92@gmail.com', '::1', '24-11-2020 06:45:49 PM', '24-11-2020 06:46:36 PM', '1'),
(221, 'jasee99@gmail.com', '::1', '24-11-2020 06:47:18 PM', '24-11-2020 06:47:23 PM', '1'),
(222, 'shajeeshajeeth31@gmail.com', '::1', '24-11-2020 06:49:40 PM', '24-11-2020 06:49:40 PM', '1'),
(223, 'sajee@gmail.com', '::1', '24-11-2020 06:50:53 PM', '24-11-2020 06:55:54 PM', '1'),
(224, 'sinthuja98@gmail.com', '::1', '24-11-2020 06:56:20 PM', '24-11-2020 06:56:20 PM', '1'),
(225, 'shajeeshajeeth31@gmail.com', '::1', '24-11-2020 06:57:48 PM', '24-11-2020 06:57:48 PM', '1'),
(226, 'sinthuja98@gmail.com', '::1', '24-11-2020 06:58:02 PM', '24-11-2020 08:07:07 PM', '1'),
(227, 'kavin96@gmail.com', '::1', '24-11-2020 08:08:04 PM', '24-11-2020 08:08:04 PM', '1'),
(228, 'jasee99@gmail.com', '::1', '25-11-2020 01:33:03 AM', '25-11-2020 01:33:30 AM', '1'),
(229, 'kavin96@gmail.com', '::1', '25-11-2020 01:33:44 AM', '25-11-2020 01:33:48 AM', '1'),
(230, 'jasee99@gmail.com', '::1', '25-11-2020 01:39:46 AM', '25-11-2020 01:39:48 AM', '1'),
(231, 'sinthuja98@gmail.com', '::1', '25-11-2020 01:48:49 AM', '25-11-2020 01:48:52 AM', '1'),
(232, 'sujee15@gmail.com', '::1', '25-11-2020 01:49:04 AM', '25-11-2020 01:49:07 AM', '1'),
(233, 'jasee99@gmail.com', '::1', '25-11-2020 01:49:23 AM', '25-11-2020 01:49:26 AM', '1'),
(234, 'sinthuja98@gmail.com', '::1', '25-11-2020 01:50:48 AM', '25-11-2020 01:50:48 AM', '1'),
(235, 'sinthuja98@gmail.com', '::1', '25-11-2020 01:51:58 AM', '25-11-2020 01:51:58 AM', '1'),
(236, 'sinthuja98@gmail.com', '::1', '25-11-2020 01:53:38 AM', '25-11-2020 01:53:38 AM', '1'),
(237, 'jasee99@gmail.com', '::1', '26-11-2020 07:28:13 AM', '26-11-2020 07:30:16 AM', '1'),
(238, 'sujee15@gmail.com', '::1', '26-11-2020 07:43:56 AM', '26-11-2020 07:45:55 AM', '1'),
(239, 'kavin96@gmail.com', '::1', '26-11-2020 07:53:31 AM', '26-11-2020 07:53:51 AM', '1'),
(240, 'sinthuja98@gmail.com', '::1', '26-11-2020 07:54:00 AM', '26-11-2020 07:54:04 AM', '1'),
(241, 'sujee15@gmail.com', '::1', '26-11-2020 07:54:28 AM', '26-11-2020 07:54:31 AM', '1'),
(242, 'vithusha96@gmail.com', '::1', '26-11-2020 08:00:37 AM', '26-11-2020 08:00:37 AM', '1'),
(243, 'shajeeshajeeth31@gmail.com', '::1', '26-11-2020 08:02:40 AM', '26-11-2020 08:02:40 AM', '1'),
(244, 'shajeeshajeeth31@gmail.com', '::1', '26-11-2020 04:04:55 PM', '26-11-2020 04:04:55 PM', '1'),
(245, 'shajeeshajeeth31@gmail.com', '::1', '26-11-2020 04:15:36 PM', '26-11-2020 04:15:36 PM', '1'),
(246, 'vithusha96@gmail.com', '::1', '26-11-2020 04:57:52 PM', '26-11-2020 04:58:01 PM', '1'),
(247, 'vithusha96@gmail.com', '::1', '26-11-2020 04:58:14 PM', '26-11-2020 04:58:14 PM', '1'),
(248, 'shajeeshajeeth31@gmail.com', '::1', '26-11-2020 05:00:12 PM', '26-11-2020 05:00:12 PM', '1'),
(249, 'logee95@gmail.com', '::1', '27-11-2020 08:19:57 AM', '27-11-2020 08:19:57 AM', '1'),
(250, 'mpiragash95@gmail.com', '::1', '27-11-2020 08:25:36 AM', '27-11-2020 08:25:36 AM', '1'),
(251, 'shajeeshajeeth31@gmail.com', '::1', '28-11-2020 08:15:28 AM', '28-11-2020 08:15:28 AM', '1'),
(252, 'sinthuja98@gmail.com', '::1', '28-11-2020 08:16:38 AM', '28-11-2020 08:17:28 AM', '1'),
(253, 'jasee99@gmail.com', '::1', '28-11-2020 08:17:52 AM', '28-11-2020 08:17:52 AM', '1'),
(254, 'shajeeshajeeth31@gmail.com', '::1', '28-11-2020 08:20:46 AM', '28-11-2020 08:20:46 AM', '1'),
(255, 'jasee99@gmail.com', '::1', '28-11-2020 08:26:38 AM', '28-11-2020 08:26:38 AM', '1'),
(256, 'jasee99@gmail.com', '::1', '28-11-2020 08:28:02 AM', '28-11-2020 08:28:02 AM', '1'),
(257, 'shajeeshajeeth31@gmail.com', '::1', '28-11-2020 08:29:52 AM', '28-11-2020 08:29:52 AM', '1'),
(258, 'shajeeshajeeth31@gmail.com', '::1', '28-11-2020 08:34:11 AM', '28-11-2020 08:34:11 AM', '1'),
(259, 'kavin96@gmail.com', '::1', '28-11-2020 08:34:25 AM', '28-11-2020 08:34:25 AM', '1'),
(260, 'kavin96@gmail.com', '::1', '29-11-2020 10:44:02 AM', '29-11-2020 10:44:02 AM', '1'),
(261, 'shajeeshajeeth31@gmail.com', '::1', '29-11-2020 10:46:06 AM', '29-11-2020 10:46:06 AM', '1'),
(262, 'kavin96@gmail.com', '::1', '29-11-2020 10:52:21 AM', '29-11-2020 10:57:19 AM', '1'),
(263, 'sajee@gmail.com', '::1', '30-11-2020 07:50:58 AM', '30-11-2020 07:51:18 AM', '1'),
(264, 'shajeeshajeeth31@gmail.com', '::1', '30-11-2020 07:52:15 AM', '30-11-2020 07:52:15 AM', '1'),
(265, 'kavin96@gmail.com', '::1', '30-11-2020 09:05:43 AM', '30-11-2020 09:40:05 AM', '1'),
(266, 'sajee@gmail.com', '::1', '03-01-2021 10:32:23 AM', '03-01-2021 10:38:12 AM', '1'),
(267, 'kavin96@gmail.com', '::1', '03-01-2021 10:40:23 AM', '03-01-2021 10:44:39 AM', '1'),
(268, 'shajeeshajeeth31@gmail.com', '::1', '03-01-2021 10:45:14 AM', '03-01-2021 10:45:14 AM', '1'),
(269, 'shajeeshajeeth31@gmail.com', '::1', '03-01-2021 10:52:44 AM', '03-01-2021 10:52:44 AM', '1'),
(270, 'shajeeshajeeth31@gmail.com', '::1', '03-01-2021 10:53:50 AM', '03-01-2021 10:53:50 AM', '1'),
(271, 'kavin96@gmail.com', '::1', '03-01-2021 10:55:22 AM', '03-01-2021 10:55:22 AM', '1'),
(272, 'shajeeshajeeth31@gmail.com', '::1', '03-01-2021 11:33:41 AM', '03-01-2021 11:33:41 AM', '1'),
(273, 'shajeeshajeeth31@gmail.com', '::1', '03-01-2021 04:38:11 PM', '03-01-2021 04:38:11 PM', '1'),
(274, 'shajeeshajeeth31@gmail.com', '::1', '25-01-2021 11:34:02 AM', '25-01-2021 11:34:02 AM', '1'),
(275, 'sajee@gmail.com', '::1', '25-01-2021 11:38:03 AM', '25-01-2021 11:50:50 AM', '1'),
(276, 'shajeeshajeeth31@gmail.com', '::1', '25-01-2021 11:53:20 AM', '25-01-2021 11:53:20 AM', '1'),
(277, 'shajeeshajeeth31@gmail.com', '::1', '25-01-2021 11:57:48 AM', '25-01-2021 11:57:48 AM', '1'),
(278, 'sajee@gmail.com', '::1', '25-01-2021 11:59:56 AM', '25-01-2021 12:05:50 PM', '1'),
(279, 'mpiragash95@gmail.com', '::1', '06-03-2021 08:49:17 AM', '06-03-2021 08:49:17 AM', '1'),
(280, 'shajeeshajeeth31@gmail.com', '::1', '06-03-2021 09:00:02 AM', '06-03-2021 09:00:02 AM', '1'),
(281, 'shajeeshajeeth31@gmail.com', '::1', '23-03-2021 06:52:53 AM', '23-03-2021 06:52:53 AM', '1'),
(282, 'fsagdgg@gmail.com', '::1', '23-03-2021 07:03:37 AM', '23-03-2021 07:03:37 AM', '1'),
(283, 'fsagdgg@gmail.com', '::1', '23-03-2021 07:06:56 AM', '23-03-2021 07:09:54 AM', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodbank_info`
--
ALTER TABLE `bloodbank_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_camp`
--
ALTER TABLE `blood_camp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_received_info`
--
ALTER TABLE `blood_received_info`
  ADD PRIMARY KEY (`donorscode`);

--
-- Indexes for table `blood_sent_info`
--
ALTER TABLE `blood_sent_info`
  ADD PRIMARY KEY (`receivedscode`);

--
-- Indexes for table `donors_info`
--
ALTER TABLE `donors_info`
  ADD PRIMARY KEY (`donorid`);

--
-- Indexes for table `emergency_message`
--
ALTER TABLE `emergency_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_info`
--
ALTER TABLE `medical_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members_info`
--
ALTER TABLE `members_info`
  ADD PRIMARY KEY (`nicnumber`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipients_info`
--
ALTER TABLE `recipients_info`
  ADD PRIMARY KEY (`recipientid`);

--
-- Indexes for table `userlogs`
--
ALTER TABLE `userlogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodbank_info`
--
ALTER TABLE `bloodbank_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `blood_camp`
--
ALTER TABLE `blood_camp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `donors_info`
--
ALTER TABLE `donors_info`
  MODIFY `donorid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `emergency_message`
--
ALTER TABLE `emergency_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `medical_info`
--
ALTER TABLE `medical_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `recipients_info`
--
ALTER TABLE `recipients_info`
  MODIFY `recipientid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `userlogs`
--
ALTER TABLE `userlogs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=284;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
