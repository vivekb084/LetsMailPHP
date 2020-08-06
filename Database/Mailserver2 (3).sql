-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 31, 2016 at 06:28 PM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Mailserver2`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `sender` varchar(30) NOT NULL,
  `reciever` varchar(30) NOT NULL,
  `Message` varchar(300) NOT NULL,
  `times` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `drafts`
--

CREATE TABLE IF NOT EXISTS `drafts` (
  `Messageid` int(11) NOT NULL,
  `from` varchar(50) NOT NULL,
  `to` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `subject` varchar(300) NOT NULL,
  `Message` varchar(1000) NOT NULL,
  PRIMARY KEY (`Messageid`,`from`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drafts`
--

INSERT INTO `drafts` (`Messageid`, `from`, `to`, `date`, `subject`, `Message`) VALUES
(2, 'vivekb084@letsmail.co.in', 'fasdasdfsad', '2016-07-19 12:04:01', '', 'No Text');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `Messageid` int(11) NOT NULL,
  `fromname` varchar(100) DEFAULT NULL,
  `fromemail` varchar(100) NOT NULL,
  `toemail` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `subject` varchar(6000) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`Messageid`,`toemail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`Messageid`, `fromname`, `fromemail`, `toemail`, `date`, `subject`, `message`) VALUES
(1, 'Flippa Domains', 'domains+newsletter@flippa.com', '"vivekb085@letsmail.co.in" <vivekb085@letsmail.co.in>', '2016-07-26 05:52:16', 'ENDING: P4.com, Chapter.com, Jimmie.com, MondayNight.com, LEDFlashlight.com', '29vivekb085@letsmail.co.in.txt'),
(2, 'Flippa Domains', 'domains+newsletter@flippa.com', '"vivekb085@letsmail.co.in" <vivekb085@letsmail.co.in>', '2016-07-26 05:52:16', 'ENDING: P4.com, Chapter.com, Jimmie.com, MondayNight.com, LEDFlashlight.com', '29vivekb085@letsmail.co.in.txt'),
(3, 'Flippa Domains', 'domains+newsletter@flippa.com', '"vivekb085@letsmail.co.in" <vivekb085@letsmail.co.in>', '2016-07-26 05:52:16', 'ENDING: P4.com, Chapter.com, Jimmie.com, MondayNight.com, LEDFlashlight.com', '29vivekb085@letsmail.co.in.txt'),
(4, 'Flippa Domains', 'domains+newsletter@flippa.com', '"vivekb085@letsmail.co.in" <vivekb085@letsmail.co.in>', '2016-07-26 05:52:16', 'ENDING: P4.com, Chapter.com, Jimmie.com, MondayNight.com, LEDFlashlight.com', '29vivekb085@letsmail.co.in.txt'),
(5, 'Flippa Apps', 'news@flippa.com', '"vivekb085@letsmail.co.in" <vivekb085@letsmail.co.in>', '2016-07-27 00:24:15', 'New iOS App Quickly Earns $13,000 with 5 Stars', '29vivekb085@letsmail.co.in.txt'),
(6, 'Deon Carstens', 'deon.carstens@clickatell.com', 'Vivek Bindal <vivekb085@letsmail.co.in>', '2016-07-27 17:00:18', 'Would you like help with your messaging?', '29vivekb085@letsmail.co.in.txt'),
(7, 'Flippa Websites', 'news@flippa.com', '"vivekb085@letsmail.co.in" <vivekb085@letsmail.co.in>', '2016-07-27 21:37:04', 'Drop Ship eCommerce Profitting $2,700/Month', '29vivekb085@letsmail.co.in.txt'),
(8, 'Team Authy', 'teamauthy@authy.com', 'vivekb085@letsmail.co.in', '2016-07-28 21:36:05', 'SendGrid chose Authy 2FA', '8vivekb085@letsmail.co.in.txt'),
(9, 'Vivek Bindal', 'vivekb085@letsmail.co.in', 'vivekb085@letsmail.co.in', '2016-07-29 09:38:59', 'Hi', '9vivekb085@letsmail.co.in.txt'),
(10, 'Vivek Bindal', 'vivekb085@letsmail.co.in', 'vivekb085@letsmail.co.in', '2016-07-29 09:46:34', 'hi', '10vivekb085@letsmail.co.in.txt'),
(11, 'Vivek Bindal', 'vivekb085@letsmail.co.in', 'vivekb085@letsmail.co.in', '2016-07-29 09:49:39', 'hi', '11vivekb085@letsmail.co.in.txt'),
(12, 'Vivek Bindal', 'vivekb085@letsmail.co.in', 'vivekb085@letsmail.co.in', '2016-07-29 09:53:32', 'hi', '12vivekb085@letsmail.co.in.txt'),
(13, 'Vivek Bindal', 'vivekb085@letsmail.co.in', 'vivekb085@letsmail.co.in', '2016-07-29 09:53:32', 'hi', '13vivekb085@letsmail.co.in.txt'),
(14, 'Vivek Bindal', 'vivekb085@letsmail.co.in', 'vivekb085@letsmail.co.in', '2016-07-29 09:53:32', 'hi', '14vivekb085@letsmail.co.in.txt'),
(15, 'Vivek Bindal', 'vivekb085@letsmail.co.in', 'vivekb085@letsmail.co.in', '2016-07-29 09:53:32', 'hi', '15vivekb085@letsmail.co.in.txt'),
(16, 'Vivek Bindal', 'vivekb085@letsmail.co.in', 'vivekb085@letsmail.co.in', '2016-07-29 09:53:32', 'hi', '16vivekb085@letsmail.co.in.txt'),
(17, 'Vivek Bindal', 'vivekb085@letsmail.co.in', 'vivekb085@letsmail.co.in', '2016-07-29 09:53:32', 'hi', '17vivekb085@letsmail.co.in.txt'),
(18, 'Vivek Bindal', 'vivekb085@letsmail.co.in', 'vivekb085@letsmail.co.in', '2016-07-29 09:53:32', 'hi', '18vivekb085@letsmail.co.in.txt'),
(19, 'Vivek Bindal', 'vivekb085@letsmail.co.in', 'vivekb085@letsmail.co.in', '2016-07-29 09:53:32', 'hi', '19vivekb085@letsmail.co.in.txt'),
(20, 'Vivek Bindal', 'vivekb085@letsmail.co.in', 'vivekb085@letsmail.co.in', '2016-07-29 09:53:32', 'hi', '20vivekb085@letsmail.co.in.txt'),
(21, 'Vivek Bindal', 'vivekb085@letsmail.co.in', 'vivekb085@letsmail.co.in', '2016-07-29 09:53:32', 'hi', '21vivekb085@letsmail.co.in.txt'),
(22, 'Vivek Bindal', 'vivekb085@letsmail.co.in', 'vivekb085@letsmail.co.in', '2016-07-29 09:53:32', 'hi', '22vivekb085@letsmail.co.in.txt'),
(23, 'Vivek Bindal', 'vivekb085@letsmail.co.in', 'vivekb085@letsmail.co.in', '2016-07-29 09:53:32', 'hi', '23vivekb085@letsmail.co.in.txt'),
(24, 'Vivek Bindal', 'vivekb085@letsmail.co.in', 'vivekb085@letsmail.co.in', '2016-07-29 09:53:32', 'hi', '24vivekb085@letsmail.co.in.txt'),
(25, 'Vivek Bindal', 'vivekb085@letsmail.co.in', 'vivekb085@letsmail.co.in', '2016-07-29 09:53:32', 'hi', '25vivekb085@letsmail.co.in.txt'),
(26, 'Vivek Bindal', 'vivekb085@letsmail.co.in', 'vivekb085@letsmail.co.in', '2016-07-29 09:53:32', 'hi', '26vivekb085@letsmail.co.in.txt'),
(27, 'Vivek Bindal', 'vivekb085@letsmail.co.in', 'vivekb085@letsmail.co.in', '2016-07-29 09:53:32', 'hi', '27vivekb085@letsmail.co.in.txt'),
(28, 'Vivek Bindal', 'vivekb085@letsmail.co.in', 'vivekb085@letsmail.co.in', '2016-07-29 09:53:32', 'hi', '28vivekb085@letsmail.co.in.txt'),
(29, 'Vivek Bindal', 'vivekb085@letsmail.co.in', 'vivekb085@letsmail.co.in', '2016-07-29 09:53:32', 'hi', '29vivekb085@letsmail.co.in.txt');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user` varchar(50) NOT NULL,
  `pass` varchar(30) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Offline',
  `logincount` int(11) DEFAULT '0',
  `phone` varchar(11) NOT NULL DEFAULT '0',
  `gender` varchar(6) NOT NULL DEFAULT 'male',
  PRIMARY KEY (`user`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user`, `pass`, `name`, `status`, `logincount`, `phone`, `gender`) VALUES
('vivekb085@letsmail.co.in', 'vb02071995', 'Vivek Bindal', 'Online', 25, '8816885917', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `messagefile`
--

CREATE TABLE IF NOT EXISTS `messagefile` (
  `Box` varchar(20) NOT NULL,
  `Messageid` int(11) NOT NULL,
  `Filelocation` varchar(400) NOT NULL,
  `Filename` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Filelocation`,`Filename`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messagefile`
--

INSERT INTO `messagefile` (`Box`, `Messageid`, `Filelocation`, `Filename`, `email`) VALUES
('Sent', 1, 'uploads/1-1468907278.jpg', '1.jpg ', 'vivekb085@letsmail.co.in'),
('Sent', 1, 'uploads/2-1468907277.jpg', '2.jpg ', 'vivekb085@letsmail.co.in'),
('Sent', 1, 'uploads/3-1468907277.jpg', '3.jpg ', 'vivekb085@letsmail.co.in'),
('Sent', 4, 'uploads/3-1468907701.jpg', '3.jpg ', 'vivekb085@letsmail.co.in'),
('Sent', 1, 'uploads/5-1468907277.jpg', '5.jpg ', 'vivekb085@letsmail.co.in'),
('Sent', 3, 'uploads/5-1468909341.jpg', '5.jpg ', 'vivekb084@letsmail.co.in'),
('Sent', 1, 'uploads/7-1468907276.jpg', '7.jpg ', 'vivekb085@letsmail.co.in'),
('Sent', 3, 'uploads/7-1468907689.jpg', '7.jpg ', 'vivekb085@letsmail.co.in'),
('Sent', 4, 'uploads/7-1468909468.jpg', '7.jpg ', 'vivekb084@letsmail.co.in'),
('Sent', 2, 'uploads/8-1468907671.jpg', '8.jpg ', 'vivekb085@letsmail.co.in'),
('Sent', 2, 'uploads/8-1468909325.jpg', '8.jpg ', 'vivekb084@letsmail.co.in'),
('Sent', 9, 'uploads/cs_1130547_vivek_bindal-9vivekb085@letsmail.co.in1469765954.pdf', 'cs_1130547_vivek_bindal.pdf ', 'vivekb085@letsmail.co.in'),
('Sent', 10, 'uploads/new-1-10vivekb085@letsmail.co.in1469766196.txt', 'new-1.txt ', 'vivekb085@letsmail.co.in'),
('Sent', 7, 'uploads/new-1-7vivekb085@letsmail.co.in1469765303.txt', 'new-1.txt ', 'vivekb085@letsmail.co.in'),
('Sent', 8, 'uploads/new-1-8vivekb085@letsmail.co.in1469765760.txt', 'new-1.txt ', 'vivekb085@letsmail.co.in'),
('Sent', 9, 'uploads/new-1-9vivekb085@letsmail.co.in1469765954.txt', 'new-1.txt ', 'vivekb085@letsmail.co.in'),
('Sent', 10, 'uploads/vivek-10vivekb085@letsmail.co.in1469766196.docx', 'vivek.docx ', 'vivekb085@letsmail.co.in'),
('Sent', 7, 'uploads/vivek-7vivekb085@letsmail.co.in1469765304.docx', 'vivek.docx ', 'vivekb085@letsmail.co.in'),
('Sent', 8, 'uploads/vivek-8vivekb085@letsmail.co.in1469765761.docx', 'vivek.docx ', 'vivekb085@letsmail.co.in'),
('Sent', 9, 'uploads/vivek-9vivekb085@letsmail.co.in1469765954.docx', 'vivek.docx ', 'vivekb085@letsmail.co.in'),
('Sent', 10, 'uploads/vivek1-10vivekb085@letsmail.co.in1469766196.docx', 'vivek1.docx ', 'vivekb085@letsmail.co.in'),
('Sent', 7, 'uploads/vivek1-7vivekb085@letsmail.co.in1469765303.docx', 'vivek1.docx ', 'vivekb085@letsmail.co.in'),
('Sent', 8, 'uploads/vivek1-8vivekb085@letsmail.co.in1469765761.docx', 'vivek1.docx ', 'vivekb085@letsmail.co.in'),
('Sent', 9, 'uploads/vivek1-9vivekb085@letsmail.co.in1469765954.docx', 'vivek1.docx ', 'vivekb085@letsmail.co.in');

-- --------------------------------------------------------

--
-- Table structure for table `sent`
--

CREATE TABLE IF NOT EXISTS `sent` (
  `Messageid` int(11) NOT NULL,
  `from` varchar(50) NOT NULL,
  `to` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `subject` varchar(300) NOT NULL,
  `Message` varchar(1000) NOT NULL,
  PRIMARY KEY (`Messageid`,`from`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sent`
--

INSERT INTO `sent` (`Messageid`, `from`, `to`, `date`, `subject`, `Message`) VALUES
(1, 'vivekb085@letsmail.co.in', 'vivekb084@gmail.com', '2016-07-19 11:18:34', 'hi', 'No Text'),
(4, 'vivekb084@letsmail.co.in', 'vivekb084@gmail.com', '2016-07-19 11:54:33', '', 'No Text'),
(4, 'vivekb085@letsmail.co.in', 'vivekb085@letsmail.co.in', '2016-07-19 11:25:15', 'hi', 'No Text'),
(5, 'vivekb084@letsmail.co.in', 'vivekb084@gmail.com', '2016-07-19 11:59:43', '', 'No Text'),
(5, 'vivekb085@letsmail.co.in', 'vivekb084@gmail.com', '2016-07-19 11:27:11', '', 'No Text'),
(6, 'vivekb085@letsmail.co.in', 'vivekb084@gmail.com', '2016-07-19 11:40:38', '', 'No Text'),
(7, 'vivekb085@letsmail.co.in', 'vivekb085@letsmail.co.in', '2016-07-29 09:38:30', 'Hi', 'fasdfdsaf'),
(8, 'vivekb085@letsmail.co.in', 'vivekb085@letsmail.co.in', '2016-07-29 09:46:10', 'hi', 'FASDFDSAF'),
(9, 'vivekb085@letsmail.co.in', 'vivekb085@letsmail.co.in', '2016-07-29 09:49:17', 'hi', 'No Text'),
(10, 'vivekb085@letsmail.co.in', 'vivekb085@letsmail.co.in', '2016-07-29 09:53:27', 'hi', 'asdfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `trash`
--

CREATE TABLE IF NOT EXISTS `trash` (
  `Messageid` int(11) NOT NULL,
  `fromname` varchar(100) DEFAULT NULL,
  `fromemail` varchar(100) NOT NULL,
  `toemail` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `subject` varchar(6000) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`Messageid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
