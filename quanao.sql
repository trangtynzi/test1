-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 25, 2015 at 08:09 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `huy`
--

-- --------------------------------------------------------

--
-- Table structure for table `quanao`
--

CREATE TABLE IF NOT EXISTS `quanao` (
  `quanao_id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) NOT NULL,
  `gia` int(11) NOT NULL,
  `mota` text NOT NULL,
  `khuyenmai` int(11) NOT NULL,
  PRIMARY KEY (`quanao_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `quanao`
--

INSERT INTO `quanao` (`quanao_id`, `ten`, `gia`, `mota`, `khuyenmai`) VALUES
(1, 'san pham 1', 100, 'san pham 1', 10),
(2, 'san pham 2', 20, 'san pham 2', 20),
(3, 'san pham 3', 30, 'san pham 3', 30),
(5, 'san pham so 4', 12123, 'mo ta so 4', 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
