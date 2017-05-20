-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 19, 2015 at 01:39 AM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `catID` int(11) NOT NULL AUTO_INCREMENT,
  `catDescr` varchar(100) NOT NULL,
  PRIMARY KEY (`catID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catID`, `catDescr`) VALUES
(1, 'Food'),
(2, 'Beer');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `prodID` int(11) NOT NULL AUTO_INCREMENT,
  `prodTitle` varchar(100) NOT NULL,
  `prodPrice` float NOT NULL,
  `prodDescr` varchar(1000) NOT NULL,
  `prodCat` int(11) NOT NULL,
  PRIMARY KEY (`prodID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prodID`, `prodTitle`, `prodPrice`, `prodDescr`, `prodCat`) VALUES
(1, 'ÕŽÕ¡Ö€Õ¸Ö‚Õ¶Õ£', 45.25, 'Ô¿Õ¡Õ¶Õ¡Õ¹, Õ½Õ«Ö€Õ¸Ö‚Õ¶ Õ¾Õ¡Ö€Õ¸Ö‚Õ¶Õ£', 1),
(2, 'Õ‡Õ¸Ö‚Õ´Õ¥Ö€', 5250, 'Õ´Õ¸Ö‚Õ£,Õ¹ÕºÕ¡Õ½Õ¿Õ¥Ö€Õ«Õ¦Õ¡ÖÕ¾Õ¡Õ®', 2),
(3, 'Õ‡Õ¸Ö‚Õ´Õ¥Ö€', 5250, 'Õ´Õ¸Ö‚Õ£,Õ¹ÕºÕ¡Õ½Õ¿Õ¥Ö€Õ«Õ¦Õ¡ÖÕ¾Õ¡Õ®', 2),
(4, 'Õ‡Õ¸Ö‚Õ´Õ¥Ö€', 5250, 'Õ´Õ¸Ö‚Õ£,Õ¹ÕºÕ¡Õ½Õ¿Õ¥Ö€Õ«Õ¦Õ¡ÖÕ¾Õ¡Õ®', 2),
(5, 'Õ‡Õ¸Ö‚Õ´Õ¥Ö€', 5250, 'Õ´Õ¸Ö‚Õ£,Õ¹ÕºÕ¡Õ½Õ¿Õ¥Ö€Õ«Õ¦Õ¡ÖÕ¾Õ¡Õ®', 2),
(6, 'Õ‡Õ¸Ö‚Õ´Õ¥Ö€', 5250, 'Õ´Õ¸Ö‚Õ£,Õ¹ÕºÕ¡Õ½Õ¿Õ¥Ö€Õ«Õ¦Õ¡ÖÕ¾Õ¡Õ®', 2),
(7, 'Õ€Õ¡Ö', 52, 'ÖƒÕ¡ÖƒÕ¸Ö‚Õ¯, Õ½ÕºÕ«Õ¿Õ¡Õ¯', 1),
(8, 'Հաց', 5222, 'ասդֆփափուկ, սպիտակ', 1),
(9, 'Ֆրի', 2552, 'սլկդյֆհ ասդֆ կսհդֆ ասդկհֆ ', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
