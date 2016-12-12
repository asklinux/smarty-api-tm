-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2016 at 08:50 AM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rehack`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `cid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `syarikat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`cid`, `name`, `phone`, `syarikat`) VALUES
(1, 'Hasnan Bin Hasim', '0193009310', 'tunnelbiz com'),
(2, 'Halim Bin Manaf', '0183990011', 'Teguh Bena Sdn Bhd'),
(3, 'Kamal Afandi', '0118991234', 'Teras Maju Bhd');

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `sid` int(11) NOT NULL,
  `sms_to` varchar(100) NOT NULL,
  `sms_from` varchar(100) NOT NULL,
  `msg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` (`sid`, `sms_to`, `sms_from`, `msg`) VALUES
(1, '019300912112', '01600911234', 'test data'),
(2, '0193009310', 'server', 'the test server');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `tid` int(11) NOT NULL,
  `taskName` varchar(200) NOT NULL,
  `startDateTime` datetime NOT NULL,
  `endDateTime` datetime NOT NULL,
  `remindDateTime` datetime NOT NULL,
  `recipient` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`tid`, `taskName`, `startDateTime`, `endDateTime`, `remindDateTime`, `recipient`, `status`, `message`) VALUES
(5, 'Board meeting', '2016-12-14 14:00:00', '2016-12-14 15:00:00', '2016-12-14 13:00:00', 'Haris', 0, 'Reminder to attend 1 hour earlier'),
(6, 'Board meeting', '2016-12-14 14:00:00', '2016-12-14 15:00:00', '2016-12-14 13:00:00', 'Haris', 0, 'Reminder to attend 1 hour earlier'),
(7, '"meaning"', '2016-12-12 06:00:00', '2016-12-12 07:00:00', '2016-12-12 06:00:00', '"Haris"', 0, '"1 2 3"'),
(8, '"meeting"', '2016-12-12 06:00:00', '2016-12-12 08:00:00', '2016-12-12 06:00:00', '"Haris"', 0, '"this is the place"'),
(9, '"meeting"', '2016-12-12 06:00:00', '2016-12-12 07:00:00', '2016-12-12 06:00:00', '"Haris"', 0, '"court 12122"'),
(10, '"this meeting"', '2016-12-12 05:00:00', '2016-12-12 06:00:00', '2003-02-01 04:56:00', '"Haris"', 0, '"1 2 3 4 5 6"'),
(11, '"task"', '2016-12-12 06:00:00', '2016-12-12 08:00:00', '2016-12-12 06:00:00', '"Haris"', 0, '"one two test one two three four five six test test test test"'),
(12, 'a smithing', '2016-12-12 06:00:00', '2016-12-12 07:00:00', '0000-00-00 00:00:00', 'Haris', 0, 'One two three four five six'),
(13, 'flight', '2016-12-16 06:00:00', '2016-12-16 07:00:00', '2016-12-12 06:00:00', 'Haris', 0, 'this is a text message'),
(14, 'meeting cash', '2016-12-13 05:00:00', '2016-12-13 06:00:00', '2016-12-12 06:00:00', 'Peter', 0, 'this is a reminder message'),
(15, 'appointment', '2016-12-12 06:00:00', '2016-12-12 07:00:00', '2016-12-12 05:00:00', 'Haris', 0, 'this is Elemental massage'),
(16, 'Create a slogan', '2016-12-12 06:00:00', '2016-12-12 08:00:00', '2016-12-12 18:00:00', 'Haris', 0, 'this is a text message'),
(17, 'Task reminder', '2016-12-12 08:00:00', '2016-12-12 07:00:00', '2016-12-12 05:00:00', 'Marry', 0, 'this is Desa message'),
(18, 'Board meeting', '2016-12-12 06:00:00', '2016-12-12 08:00:00', '2016-12-12 06:00:00', 'Peter', 0, 'this is your reminder message'),
(19, 'meeting', '2016-12-12 20:00:00', '2016-12-12 22:00:00', '0000-00-00 00:00:00', 'Haris', 0, 'reminder to eat more peanuts'),
(20, 'Meeting with developers', '2016-12-12 23:00:00', '2016-12-12 23:30:00', '2016-12-12 20:00:00', 'Haris', 0, 'Don\'t forget to bring blueprint');

-- --------------------------------------------------------

--
-- Table structure for table `tempah`
--

CREATE TABLE `tempah` (
  `tid` int(11) NOT NULL,
  `pelangan` varchar(100) NOT NULL,
  `maklumat` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempah`
--

INSERT INTO `tempah` (`tid`, `pelangan`, `maklumat`, `status`) VALUES
(1, 'aman', 'Order tshirt dan all material ', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `tempah`
--
ALTER TABLE `tempah`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sms`
--
ALTER TABLE `sms`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tempah`
--
ALTER TABLE `tempah`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
