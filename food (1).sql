-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 10, 2020 at 07:06 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

DROP TABLE IF EXISTS `details`;
CREATE TABLE IF NOT EXISTS `details` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `food_name` varchar(100) NOT NULL,
  `chef_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`ID`, `food_name`, `chef_name`, `email`, `contact_no`) VALUES
(1, 'Hath Maluwa', 'Nadeera Nuwan', 'nuwan@gmail.com', 715647891),
(2, 'Pani Walalu', 'Tharaka Perera', 'tharaka@gmail.com', 778945614),
(3, 'Mixed Veggie Idli', 'Sandali Maleesha', 'm@gmail.com', 789654123),
(4, 'Adai Dosai', 'Anjana Wijethunge', 'anjana@gmail.com', 715649823),
(5, 'watalappan', 'Jithmi Bulegodaarachchi', 'jithmi@gmail.com', 778962564),
(6, 'Gulab Jamun', 'Ruvini Theruwara', 'runiwini@gmail.com', 112659874),
(7, 'Chicken Biriyani', 'Sandali Maleesha', 's@gmail.com', 778942165),
(8, 'Coconut Laddu', 'Anjana Wijethunge', 'anjana@gmail.com', 813267456);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `food_name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `name`, `food_name`, `description`, `email`, `date`) VALUES
(4, 'Dinethra Thalakiriyawa', 'Helapa', '15', 'dinethra1234@gmail.com', '2020-08-07 07:49:52'),
(3, 'Daham Wijekoon', 'Pani Walalu', '10', 'rkowijekoon@gmail.com', '2020-08-07 07:40:13'),
(5, 'Daham Wijekoon', 'Helapa', '20', 'rkowijekoon@gmail.com', '2020-08-10 13:55:35'),
(6, 'Dinethra Thalakiriyawa', 'Helapa', '12', 'dinethra1234@gmail.com', '2020-08-10 14:55:57'),
(8, 'Daham Wijekoon', 'Mixed Veggie Idli', '10', 'rkowijekoon@gmail.com', '2020-08-10 18:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ID`, `fname`, `lname`, `age`, `contact_no`, `email`, `password`) VALUES
(1, 'Daham', 'Wijekoon', 26, 719987994, 'rkowijekoon@gmail.com', '123'),
(2, 'Dinethra', 'Thalakiriyawa', 25, 717186562, 'dinethra1234@gmail.com', '1234'),
(3, 'Maleesha', 'wwe', 22, 147896532, 'nim12@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `comment_sender_name` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(68, 0, 'thnx', 'Dinethra', '2020-08-10 13:53:38'),
(58, 0, 'Nice job..', 'Daham Wijekoon', '2020-08-07 18:25:22');

-- --------------------------------------------------------

--
-- Table structure for table `reviews_muslim`
--

DROP TABLE IF EXISTS `reviews_muslim`;
CREATE TABLE IF NOT EXISTS `reviews_muslim` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `comment_sender_name` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews_muslim`
--

INSERT INTO `reviews_muslim` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(1, 0, 'good job', 'Daham Wijekoon', '2020-08-08 21:58:52'),
(2, 0, 'thnx', 'Dinethra', '2020-08-08 21:59:11');

-- --------------------------------------------------------

--
-- Table structure for table `reviews_tamil`
--

DROP TABLE IF EXISTS `reviews_tamil`;
CREATE TABLE IF NOT EXISTS `reviews_tamil` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `comment_sender_name` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews_tamil`
--

INSERT INTO `reviews_tamil` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(1, 0, 'Good job', 'Daham Wijekoon', '2020-08-08 21:39:31'),
(3, 0, 'thnx', 'Dinethra', '2020-08-08 21:44:15'),
(4, 0, 'dsfs', 'Daham Wijekoon', '2020-08-10 14:41:35'),
(5, 0, 'nice...', 'Daham Wijekoon', '2020-08-10 18:07:27'),
(6, 0, 'good', 'Dinethra', '2020-08-10 18:37:35');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
