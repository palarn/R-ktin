-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 24, 2015 at 01:11 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gym`
--
CREATE DATABASE IF NOT EXISTS `gym` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gym`;

-- --------------------------------------------------------

--
-- Table structure for table `stodvar`
--

CREATE TABLE IF NOT EXISTS `stodvar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `1man` int(11) DEFAULT '0',
  `3man` int(11) DEFAULT '0',
  `6man` int(11) DEFAULT '0',
  `12man` int(11) DEFAULT '0',
  `staerd` int(11) DEFAULT '0',
  `stadur` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `hoptimar` int(11) DEFAULT '0',
  `postnr` int(11) NOT NULL DEFAULT '0',
  `ot-man-fim` text CHARACTER SET utf8 COLLATE utf8_bin,
  `ot-fos` text CHARACTER SET utf8 COLLATE utf8_bin,
  `ot-lau` text CHARACTER SET utf8 COLLATE utf8_bin,
  `ot-sun` text CHARACTER SET utf8 COLLATE utf8_bin,
  `lt-man-fim` text CHARACTER SET utf8 COLLATE utf8_bin,
  `lt-fos` text CHARACTER SET utf8 COLLATE utf8_bin,
  `lt-lau` text CHARACTER SET utf8 COLLATE utf8_bin,
  `lt-sun` text CHARACTER SET utf8 COLLATE utf8_bin,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `stodvar`
--

INSERT INTO `stodvar` (`id`, `title`, `1man`, `3man`, `6man`, `12man`, `staerd`, `stadur`, `hoptimar`, `postnr`, `ot-man-fim`, `ot-fos`, `ot-lau`, `ot-sun`, `lt-man-fim`, `lt-fos`, `lt-lau`, `lt-sun`) VALUES
(1, 'World Class - Laugar', 11430, 31190, 54590, 79990, 7500, 'Laugar, Reykjavik', 25, 105, '06:00', '06:00', '08:00', '08:00', '23:30', '23:30', '22:00', '20:00'),
(2, 'World Class - Egilsholl', 11430, 31190, 54590, 79990, 2400, 'Egilsholl, Reykjavik', 25, 112, '06:00', '06:00', '08:00', '10:00', '22:30', '20:30', '16:30', '16:00'),
(3, 'World Class - Hafnarfjordur', 11430, 31190, 54590, 79990, 700, 'Hafnarfjordur', 25, 220, '06:00', '06:00', '08:00', '10:00', '22:30', '20:30', '16:30', '14:00'),
(4, 'World Class - HR', 11430, 31190, 54590, 79990, 200, 'Haskoli Reykjavik, Reykjavik', 25, 101, '24/7', '24/7', '24/7', '24/7', '24/7', '24/7', '24/7', '24/7'),
(5, 'World Class - Kopavogur', 11430, 31190, 54590, 79990, 700, 'Smaratorg, Kopavogur', 25, 201, '06:00', '06:00', '08:00', 'Lokad', '22:30', '20:30', '16:30', 'Lokad'),
(6, 'World Class - Kringlan', 11430, 31190, 54590, 79990, 2000, 'Kringlan, Reykjavik', 25, 103, '24/7', '24/7', '24/7', '24/7', '24/7', '24/7', '24/7', '24/7'),
(7, 'World Class - Mosfellsbaer', 11430, 31190, 54590, 79990, 700, 'Mosfellsbaer', 25, 270, '06:00', '06:00', '08:00', '08:00', '21:30', '21:30', '19:00', '19:00'),
(8, 'World Class - Seltjarnarnes', 11430, 31190, 54590, 79990, 2000, 'Seltjarnarnes', 25, 170, '06:00', '06:00', '08:00', '08:00', '22:30', '22:30', '20:00', '20:00'),
(9, 'World Class - Ogurhvarf', 11430, 31190, 54590, 79990, 1100, 'Ogurhvarf, Kopavogur', 25, 203, '05:50', '05:50', '08:00', '10:00', '22:30', '20:30', '16:30', '14:00'),
(10, 'Hress - Dalshraun', 12990, 26990, 36990, 71990, 0, 'Dalshraun, Hafnarfjordur', 15, 220, '05:30', '05:30', '08:00', '09:00', '21:30', '20:00', '16:00', '15:00'),
(11, 'Hress - Asvellir', 12990, 26990, 36990, 71990, 0, 'Asvellir, Hafnarfjordur', 15, 221, '05:30', '05:30', '08:00', '09:00', '21:30', '20:00', '16:00', '15:00'),
(12, 'Reebok Fitness - Holtagardar', 6540, 19620, 36900, 65400, 0, 'Holtagardar, Reykjavik', 31, 104, '05:45', '05:45', '08:00', '09:00', '22:00', '21:00', '17:00', '16:00'),
(13, 'Reebok Fitness - Ogurhvarf', 6540, 19620, 36900, 65400, 0, 'Ogurhvarf, Kopavogur', 31, 203, '05:45', '05:45', '08:00', '09:00', '22:00', '21:00', '17:00', '16:00'),
(14, 'Sporthusid - Reykjanesbaer', 13900, 29900, 49900, 78990, 2000, 'Reykjanesbaer', 25, 701, '05:50', '05:50', '08:00', '10:00', '22:00', '21:00', '18:00', '17:00'),
(15, 'Sporthusid - Kopavogur	', 13900, 29900, 49900, 78990, 7000, 'Kopavogur', 25, 201, '05:50', '05:50', '08:00', '09:00', '23:30', '22:30', '19:00', '22:30'),
(16, 'Hreyfing - Reykjavik', 14900, 39900, 64900, 97092, 0, 'Reykjavik', 33, 104, '06:00', '06:00', '08:00', '09:00', '22:00', '21:00', '17:00', '17:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
