-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 21, 2020 at 06:38 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `afyacheck`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `patientdetails`
--

CREATE TABLE IF NOT EXISTS `patientdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `mnane` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `hospital` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `caseid` int(11) NOT NULL,
  `disease` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `patientdetails`
--

INSERT INTO `patientdetails` (`id`, `fname`, `mnane`, `lname`, `age`, `gender`, `hospital`, `district`, `region`, `status`, `caseid`, `disease`, `dob`) VALUES
(5, 'Judith', 'mniko', 'Joseph', 43, 'Male', 'musoma hospital', 'musoma', 'mara', 'positive', 1, 'Covid-19', '1997-02-10'),
(6, 'Anna', 'H', 'machete', 18, 'Female', 'nyasho clinic', 'serengeti', 'mara', 'recovered', 1, 'TB', '2001-06-07'),
(7, 'jackson', 'mlagwa', 'machame', 25, 'Male', 'musoma hospital', 'musoma', 'mara', 'positive', 1, 'Covid-19', '1996-02-01'),
(8, 'jackson', 'mlagwa', 'machame', 25, 'Male', 'musoma hospital', 'musoma', 'mara', 'positive', 1, 'Covid-19', '1996-02-01'),
(9, 'fatuma', 'hassan', 'shoni', 17, 'Female', 'nakuru', 'bunda', 'mara', 'positive', 1, 'Covid-19', '2003-04-02'),
(10, 'juma', 'H', 'hussen', 80, 'Male', 'sekou toure hospital', 'ilemela', 'mwanza', 'positive', 1, 'Covid-19', '1943-06-09'),
(11, 'Jnja', 'kalo', 'madebe', 16, 'Male', 'sekou toure hospital', 'ilemela', 'mwanza', 'positive', 1, 'Hiv/Aids', '1999-06-09'),
(12, 'vanessa', 'u', 'kharim', 19, 'Male', 'musoma hospital', 'musoma', 'mara', 'death', 1, 'Hiv/Aids', '1997-02-10'),
(13, 'judith', 'chakito', 'penta', 56, 'Male', 'sekou toure hospital', 'ilemela', 'mwanza', 'positive', 1, 'Covid-19', '1999-06-09'),
(14, 'kijubi', 'E', 'Mjema', 14, 'Male', 'sekou toure hospital', 'ilemela', 'mwanza', 'positive', 1, 'Hiv/Aids', '2005-08-23'),
(15, 'salama', 'hussein', 'kibori', 23, 'Male', 'sekou toure hospital', 'ilemela', 'mwanza', 'positive', 1, 'Hiv/Aids', '1996-06-09'),
(16, 'Ivon', 'F', 'sherry', 27, 'Female', 'nyasho clinic', 'serengeti', 'mara', 'positive', 1, 'Hiv/Aids', '1999-06-09'),
(17, 'bishanga', 'swai', 'Msele', 34, 'Male', 'nyasho clinic', 'serengeti', 'mara', 'positive', 1, 'Hiv/Aids', '1996-08-06'),
(18, 'babatisa', 'swai', 'Msele', 34, 'Male', 'nyasho clinic', 'serengeti', 'mwanza', 'death', 1, 'TB', '1996-08-06'),
(19, 'mateso', 'msele', 'mabeo', 6, 'Male', 'sekou toure hospital', 'ilemela', 'mwanza', 'death', 1, 'Malaria', '1996-08-06'),
(22, 'mayala', 'joseph', 'merykiory', 27, 'Male', 'sengerema hospital', 'sengerema', 'mwanza', 'recovered', 1, 'TB', '1996-02-01'),
(20, 'cleophance', 'S', 'mbonea', 27, 'Male', 'musoma hospital', 'musoma', 'mara', 'positive', 1, 'Malaria', '1993-06-09'),
(21, 'philipo', 'D', 'nyamase', 27, 'Male', 'musoma hospital', 'musoma', 'mara', 'recovered', 1, 'Malaria', '1993-06-09'),
(23, 'john', 'joseph', 'kiteto', 25, 'Male', 'sengerema hospital', 'sengerema', 'mwanza', 'positive', 1, 'TB', '1996-02-01'),
(32, 'kijubi', 'H', 'Salehe', 27, 'Male', 'nyasho clinic', 'serengeti', 'mara', 'positive', 1, 'Malaria', '1993-06-09'),
(24, 'aloyce', 'mnyeke', 'lulu', 27, 'Male', 'sekou toure hospital', 'ilemela', 'mwanza', 'death', 1, 'Covid-19', '1999-06-09'),
(25, 'Joyce', 'K', 'Moshi', 21, 'Female', 'sekou toure hospital', 'ilemela', 'mwanza', 'recovered', 1, 'Covid-19', '1999-06-09'),
(26, 'gift', 'B', 'Ngowi', 30, 'Male', 'musoma hospital', 'musoma', 'mara', 'positive', 1, 'Malaria', '2000-03-02'),
(27, 'juma', 'B', 'Namungu', 35, 'Male', 'nyasho clinic', 'serengeti', 'mara', 'positive', 1, 'TB', '1999-06-09'),
(28, 'Oscar', 'H', 'Mpanda', 21, 'Male', 'sekou toure hospital', 'ilemela', 'mwanza', 'positive', 1, 'Covid-19', '2000-08-10'),
(29, 'Oscar', 'H', 'Mpanda', 21, 'Male', 'sekou toure hospital', 'ilemela', 'mwanza', 'positive', 1, 'Hiv/Aids', '2000-08-10'),
(30, 'Junior', 'F', 'Abel', 45, 'Male', 'musoma hospital', 'musoma', 'mara', 'positive', 1, 'Malaria', '1999-06-09'),
(31, 'judith', 'S', 'Joseph', 21, 'Female', 'sekou toure hospital', 'ilemela', 'mwanza', 'positive', 1, 'Malaria', '1999-06-09'),
(33, 'fetty', 'G', 'kateta', 28, 'Female', 'sengerema hospital', 'sengerema', 'mwanza', 'positive', 1, 'Malaria', '2000-08-10'),
(34, 'maeda', 'G', 'Arnord', 27, 'Male', 'sekou toure hospital', 'ilemela', 'mwanza', 'positive', 1, 'Covid-19', '1999-06-09'),
(36, 'cleophance', 'swai', 'merykiory', 27, 'Male', 'sekou toure hospital', 'ilemela', 'mwanza', 'positive', 1, 'TB', '1999-06-09'),
(37, 'cornel', 'swai', 'merykiory', 27, 'Male', 'sekou toure hospital', 'ilemela', 'mwanza', 'positive', 1, 'Hiv/Aids', '1999-06-09');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
