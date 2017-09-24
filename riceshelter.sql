-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Sep 24, 2017 at 06:52 AM
-- Server version: 5.6.36-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `riceshelter`
--

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE IF NOT EXISTS `markers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `phone` varchar(26) NOT NULL,
  `lat` float(15,11) NOT NULL,
  `lng` float(15,11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `phone`, `lat`, `lng`) VALUES
(12, 'locus', '122 kill', '232 221 1211', 0.00000000000, 0.00000000000),
(11, 'Daniel Torres', 'Rice University', '713-555-5555', 0.00000000000, 0.00000000000);

-- --------------------------------------------------------

--
-- Table structure for table `safe`
--

CREATE TABLE IF NOT EXISTS `safe` (
  `sid` int(22) NOT NULL AUTO_INCREMENT,
  `sname` varchar(40) NOT NULL,
  `sloc` varchar(100) NOT NULL,
  `sphone` varchar(33) NOT NULL,
  `snotes` varchar(200) NOT NULL,
  `sdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `safe`
--

INSERT INTO `safe` (`sid`, `sname`, `sloc`, `sphone`, `snotes`, `sdate`) VALUES
(9, 'alfred albizures', 'Rice University', '832 414 0264', 'I am safe and there is food', '2017-09-24 05:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE IF NOT EXISTS `volunteer` (
  `vid` int(11) NOT NULL AUTO_INCREMENT,
  `vname` varchar(33) NOT NULL,
  `vadd` varchar(33) NOT NULL,
  `vphone` varchar(33) NOT NULL,
  `vnotes` varchar(100) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`vid`, `vname`, `vadd`, `vphone`, `vnotes`) VALUES
(4, 'Daniel Torres', 'Rice University', '713 - 555 -5555', 'I am at the campus with food and phone chargers'),
(5, 'bill gates', '1 main st', '281 332 2212', 'Welcome home');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
