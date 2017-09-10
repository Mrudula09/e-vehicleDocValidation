-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2017 at 06:32 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vwallet`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `Name` varchar(40) NOT NULL,
  `License_no` varchar(40) NOT NULL,
  `LFront_image` varchar(40) NOT NULL,
  `LBack_image` varchar(40) NOT NULL,
  `Rcbookno` varchar(40) NOT NULL,
  `RFront_image` varchar(40) NOT NULL,
  `RBack_image` varchar(40) NOT NULL,
  `Pollutioncheck` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`Name`, `License_no`, `LFront_image`, `LBack_image`, `Rcbookno`, `RFront_image`, `RBack_image`, `Pollutioncheck`) VALUES
('djf', '', 'images/Screenshot (20).png', 'images/Screenshot (4).png', 'jdshkf', 'images/Screenshot (12).png', 'images/Screenshot (11).png', 'images/Screenshot (9).png');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `licensefront` blob NOT NULL,
  `licenseback` blob NOT NULL,
  `rcbookfront` blob NOT NULL,
  `rcbookback` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `regdno` varchar(40) NOT NULL,
  `images` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`regdno`, `images`) VALUES
('', 'hjgjg'),
(' nbmn', ' nbmn.png'),
('bjhk', 'bjhk'),
('bv', 'bv..png'),
('gfdhg', 'gfdhg.png'),
('hgfhg', 'hgfhg.png'),
('hgh', 'hgh.png'),
('hjvj', 'hjvj.png'),
('ikehlfd', 'ikehlfd'),
('jg', 'jg.'),
('kjlfa', 'kjlfa.png'),
('kjufkh', 'kjufkh.png');

-- --------------------------------------------------------

--
-- Table structure for table `licensecard`
--

CREATE TABLE `licensecard` (
  `licenseid` varchar(16) NOT NULL,
  `name` varchar(30) NOT NULL,
  `validupto` date NOT NULL,
  `offenses` int(3) NOT NULL,
  `photo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `licensecard`
--

INSERT INTO `licensecard` (`licenseid`, `name`, `validupto`, `offenses`, `photo`) VALUES
('AP31201511223456', 'Chandra Raju', '2017-12-16', 0, ''),
('AP31201611223344', 'Ram Krishna', '2040-10-10', 0, ''),
('AP31201622334455', 'Ravi Sai', '2027-09-12', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `policewallet`
--

CREATE TABLE `policewallet` (
  `walletid` varchar(10) NOT NULL,
  `license` varchar(16) NOT NULL,
  `rcbook` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policewallet`
--

INSERT INTO `policewallet` (`walletid`, `license`, `rcbook`, `name`) VALUES
('59b4a66536', 'AP31201511223456', 'AP31BJ6768', 'mrudula09@gmail.com'),
('59b4b5b3d7', 'lid', 'rnumber', 'mrudula09@gmail.com'),
('59b4ba3e03', 'AP31201611223344', 'AP31CZ9809', 'mrudula09@gmail.com'),
('abd', 'dsf', 'fd34', '2dfdfc');

-- --------------------------------------------------------

--
-- Table structure for table `rcbook`
--

CREATE TABLE `rcbook` (
  `regno` varchar(19) NOT NULL,
  `name` varchar(30) NOT NULL,
  `class` varchar(20) NOT NULL,
  `chasisno` varchar(20) NOT NULL,
  `engineno` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rcbook`
--

INSERT INTO `rcbook` (`regno`, `name`, `class`, `chasisno`, `engineno`) VALUES
('AP31BJ6768', 'Chandra Raju', 'MOTOR VECHILE', 'CHAGLKDA;K', 'DCHDSJK'),
('AP31CZ9809', 'ANIL DIWAKAR', 'MOTOR VECHILE', 'HASJDLSA7', 'DLAKASD');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Fullname` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `mobile` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Fullname`, `Email`, `mobile`, `password`) VALUES
('', '', '', ''),
('', '', '', ''),
('', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `emailid` varchar(45) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL,
  `phno` text NOT NULL,
  `walletid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`emailid`, `name`, `password`, `phno`, `walletid`) VALUES
('manoj@gmail.com', 'Manoj', '5678', '9640841900', ''),
('mrudula09@gmail.com', 'Mrudula', '12345', '9177752676', '0980'),
('padhu123@gmail.com', 'PADMAJA ', '0989', '8976178965', ''),
('revathi18@gmail.com', 'Revathi Alamuru', '54321', '9640841388', ''),
('root@gmail.com', 'Anil', 'moto1997', '8921713291', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`regdno`);

--
-- Indexes for table `licensecard`
--
ALTER TABLE `licensecard`
  ADD PRIMARY KEY (`licenseid`);

--
-- Indexes for table `policewallet`
--
ALTER TABLE `policewallet`
  ADD PRIMARY KEY (`walletid`);

--
-- Indexes for table `rcbook`
--
ALTER TABLE `rcbook`
  ADD PRIMARY KEY (`regno`(10));

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`emailid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
