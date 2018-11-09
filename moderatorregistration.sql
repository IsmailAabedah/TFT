-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 07 نوفمبر 2018 الساعة 09:57
-- إصدار الخادم: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moderatorregistration`
--

-- --------------------------------------------------------

--
-- بنية الجدول `moderators`
--

DROP TABLE IF EXISTS `moderators`;
CREATE TABLE IF NOT EXISTS `moderators` (
  `mod_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`mod_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `moderators`
--

INSERT INTO `moderators` (`mod_id`, `username`, `password`, `fullname`, `contact`, `email`) VALUES
(1, 'sdfwad', 'sdfad', 'esfd', 'sdfwqd', 'dfs'),
(2, 'df', 'fd', 'ff', 'er', 'is@dd.com'),
(3, 'sdf', 'sf', 'sd', 'df', 'gbdf@hsdf.com'),
(4, 'sf', 'sdf', 'sd', 'df', 'mountazar.94@gmail.com'),
(5, '94521396', '12345', 'sd', 'a', 'mountazar.94@gmail.com'),
(6, '94521396', '12345', 'sd', '1', 'mountazar.94@gmail.com'),
(7, '94521396', '12345', 'sd', 'a', 'maliksyria62@gmail.com'),
(8, 'ismail_aabedah', '12345', 'sd', 'a', 'mountazar.94@gmail.com'),
(9, 'ghj', 'gj', 'fgh', 'fgh', 'mountazar.94@gmail.com'),
(10, 'ismail_aabedah', '12345', 'sd', 'a', 'mountazar.94@gmail.com'),
(11, 'ismail_aabedah', '12345', 'sdf', 'ds', 'mountazar.94@gmail.com'),
(12, 'ismail_aabedah', '12345', 'sdf', 'a', 'mountazar.94@gmail.com'),
(13, '94521396', '12345', 'sd', 'a', 'mountazar.94@gmail.com'),
(14, '94521396', '12345', 'sd', '55', 'mountazar.94@gmail.com'),
(15, '94521396', '12345', 'sd', '55', 'mountazar.94@gmail.com'),
(16, 'fh', 'tr', 'dfg', 'fh', 'mountazar.94@gmail.com'),
(17, 'ismail_aabedah', '12345', 'sd', '09100440343', 'mountazar.94@gmail.com'),
(18, 'ismail_aabedah', '12345', 'sd', '1', 'mountazar.94@gmail.com'),
(19, 'ismail_aabedah', '12345', 'sd', '09100440343', 'mountazar.94@gmail.com'),
(20, 'ismail_aabedah', '12345', 'sd', 'a', 'mountazar.94@gmail.com'),
(21, 'ismail_aabedah', '12345', 'sd', '09100440343', 'mountazar.94@gmail.com'),
(22, 'ismail_aabedah', '12345', 'sd', '09100440343', 'mountazar.94@gmail.com'),
(23, 'ismail_aabedah', '12345', 'sd', '09100440343', 'mountazar.94@gmail.com'),
(24, 'ismail_aabedah', '12345', 'sd', '089', 'mountazar.94@gmail.com'),
(25, 'ismail_aabedah', '12345', 'sd', '09100440343', 'mountazar.94@gmail.com'),
(26, 'ismail_aabedah', '12345', 'sd', '09100440343', 'mountazar.94@gmail.com'),
(27, 'ismail_aabedah', '12345', 'sd', '09100440343', 'mountazar.94@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
