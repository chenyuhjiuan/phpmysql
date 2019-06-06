-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2015 at 09:55 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_guitar_shop1`
--
CREATE DATABASE IF NOT EXISTS `heroku_21a6d789c6a8678` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `heroku_21a6d789c6a8678`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(255) NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`) VALUES
(1, 'Guitars'),
(2, 'Basses'),
(3, 'Drums');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `orderID` int(11) NOT NULL AUTO_INCREMENT,
  `customerID` int(11) NOT NULL,
  `orderDate` datetime NOT NULL,
  PRIMARY KEY (`orderID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `productID` int(11) NOT NULL AUTO_INCREMENT,
  `categoryID` int(11) NOT NULL,
  `productCode` varchar(10) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `listPrice` decimal(10,2) NOT NULL,
  PRIMARY KEY (`productID`),
  UNIQUE KEY `productCode` (`productCode`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=153 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `categoryID`, `productCode`, `productName`, `listPrice`) VALUES
(2, 1, 'les_paul', 'Gibson Les Paul', '1199.00'),
(3, 1, 'sg', 'Gibson SG', '2517.00'),
(4, 1, 'fg700s', 'Yamaha FG700S', '489.99'),
(5, 1, 'washburn', 'Washburn D10S', '299.00'),
(6, 1, 'rodriguez', 'Rodriguez Caballero 11', '415.00'),
(7, 2, 'precision', 'Fender Precision', '799.99'),
(8, 2, 'hofner', 'Hofner Icon', '499.99'),
(142, 0, '456', 'ty', '3000.00'),
(143, 0, 'fg', 'rt', '5666.00'),
(144, 1, 'rty', 'ghj', '550.00'),
(145, 3, 'tyury', 'hgy', '499.00'),
(147, 1, 'dfg', 'jkk', '480.00'),
(148, 3, 'ludwig', 'Ludwig 5-piece Drum Set with Cymbals', '699.00'),
(149, 0, 'asd', 'ger', '5666.01'),
(150, 0, 'Bar', 'Sensor', '5888.00'),
(151, 0, '34', '80', '55.00'),
(152, 0, '45', 'eee', '33.00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
