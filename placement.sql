-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 09, 2020 at 02:54 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `com_id` int(11) NOT NULL AUTO_INCREMENT,
  `com_name` varchar(30) NOT NULL,
  `com_email_id` varchar(50) NOT NULL,
  `com_pass` varchar(15) NOT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`com_id`, `com_name`, `com_email_id`, `com_pass`) VALUES
(1, 'xyz', 'xyz@gmail.com', 'Cxyz*512'),
(2, 'Facebook', 'facebook@gmail.com', 'face@123'),
(3, 'Tata Consultancy Service', 'tata@gmail.com', 'tata@098'),
(4, 'infosys', 'infosys@gmail.com', 'infosys@1234'),
(5, 'Wipro', 'wipro@gmail.com', 'wipro145'),
(6, 'Oracle', 'oracle@gmail.com', 'oracle148'),
(7, 'Microsoft', 'microsoft@gmail.com', 'micro194'),
(8, 'Cisco', 'cisco@gmail.com', 'cisco@157'),
(9, 'SAP', 'sap@gmail.com', 'sap&120');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(30) NOT NULL,
  `c_email` varchar(60) NOT NULL,
  `c_subject` varchar(100) NOT NULL,
  `c_message` longtext NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `c_name`, `c_email`, `c_subject`, `c_message`) VALUES
(1, 'Reeya Nileshbhai Patel', '18SE09CE003@ppsu.ac.in', 'idsnjkfgrjksdmzbdghslak,', 'hfrdjkmdsfndjbhdsjklzxnsma,.ediouchgbsrmfklxicygsvbnqalksxiusfjvguijdkcbhgeywusjkmadbhwasjkmdnebwuidknfmgntjgkduirkedjhjgepqw;ledfmnrhfokqlw,.sa nbhwjeu\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feed_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(30) NOT NULL,
  `f_email` varchar(60) NOT NULL,
  `f_subject` varchar(100) NOT NULL,
  `f_message` longtext NOT NULL,
  PRIMARY KEY (`feed_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `f_name`, `f_email`, `f_subject`, `f_message`) VALUES
(1, 'Reeya Patel', '18SE09CE003@ppsu.ac.in', 'hdegufgjbrsnifjrsd', 'bjsjkjv,nfkhdscjm');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `com_id` int(11) NOT NULL,
  `message` longtext NOT NULL,
  `path` varchar(60) NOT NULL,
  `jobstatus` varchar(15) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `stud_id`, `com_id`, `message`, `path`, `jobstatus`, `date`) VALUES
(1, 1, 7, 'Hii..Good Morning.I m Reeya Patel', 'Final_Resume.pdf', 'approve', '2020-04-08'),
(2, 1, 2, 'Hello,I am reeya patel.I am applying for the job of developer.I upload my Cover Letter in this you can see all the details.', 'Cover letter.pdf', 'reject', '2020-04-08'),
(3, 3, 9, 'Hiii.Hello ', 'Mahek Vasoya (Resume).pdf', 'reject', '2020-04-08'),
(4, 3, 6, 'Hiiii', 'Mahek Vasoya (Resume).pdf', 'pending', '2020-04-08'),
(5, 1, 4, 'Hiii.Good afternoon', 'Final_Resume.pdf', 'pending', '2020-04-08'),
(6, 3, 2, '', 'Mahek Vasoya (Resume).pdf', 'approve', '2020-04-08'),
(7, 5, 2, '', 'Cover letter.pdf', 'pending', '2020-04-08'),
(8, 6, 2, '', 'Resume.pdf', 'pending', '2020-04-08'),
(9, 4, 2, '', 'Final_Resume.pdf', 'pending', '2020-04-08');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `stud_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_name` varchar(50) NOT NULL,
  `s_email_id` varchar(50) NOT NULL,
  `mob_no` int(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_id`, `stud_name`, `s_email_id`, `mob_no`, `password`) VALUES
(1, 'Reeya Patel', '18SE09CE003@ppsu.ac.in', 1234567890, 'reeya@512'),
(2, 'Jhanvi Mehta', '18SE09CE001@ppsu.ac.in', 1347896520, 'Jaanu@612'),
(3, 'Mahek Vasoya', '17SE02CE061@ppsu.ac.in', 1237896540, 'mahek@098'),
(4, 'Pratik Patel', '17SE02CE043@ppsu.ac.in', 1478965230, 'Pratik@168'),
(5, 'Jay thakkar', '17SE02CE059@ppsu.ac.in', 1245789630, 'jay$123'),
(6, 'Kenil Vavaliya', '17SE02CE062@ppsu.ac.in', 1278549630, 'kenil@834');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
