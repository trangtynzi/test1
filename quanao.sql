-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2015 at 05:24 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quanao`
--

-- --------------------------------------------------------

--
-- Table structure for table `quanao`
--

CREATE TABLE IF NOT EXISTS `quanao` (
`quanao_id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `gia` int(11) NOT NULL,
  `mota` text NOT NULL,
  `khuyenmai` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `quanao`
--

INSERT INTO `quanao` (`quanao_id`, `ten`, `gia`, `mota`, `khuyenmai`) VALUES
(1, 'VÃ¡y maxi', 100, 'vÃ¡y maxi Ä‘i biá»ƒn', 10),
(2, 'Quáº§n', 20, 'Quáº§n nam', 20),
(3, 'Ã¡o', 300000, 'Ão thá»i trang', 30),
(5, 'MÅ©', 1212300, 'MÅ© NY', 10),
(7, 'Quáº§n legging', 235000, 'Quáº§n legging ná»¯', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quanao`
--
ALTER TABLE `quanao`
 ADD PRIMARY KEY (`quanao_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quanao`
--
ALTER TABLE `quanao`
MODIFY `quanao_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
