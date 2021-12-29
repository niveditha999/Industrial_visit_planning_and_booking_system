-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 29, 2021 at 01:46 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `industrialvisits`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `b_id` int(10) NOT NULL AUTO_INCREMENT,
  `cust_id` int(10) NOT NULL,
  `college` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `person` int(10) NOT NULL,
  `transport` varchar(20) NOT NULL,
  PRIMARY KEY (`b_id`),
  KEY `cust_id` (`cust_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `cust_id`, `college`, `date`, `time`, `person`, `transport`) VALUES
(1, 2, 'Mite', '2019-11-21', '00:00:00.000000', 4, 'Train');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'IT industry'),
(2, 'Construction industry'),
(3, 'Manufacturing industry');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `cust_id` int(10) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `email`, `password`, `address`, `phone`) VALUES
(1, 'Shreeya', 'shreeyab@gmail.com', 'shreeya', 'mangalore', 123654789),
(2, 'Nishitha', 'nishithashettigar21@gmail.com', 'nishitha', 'mangalore', 1236547892),
(4, 'Niveditha', 'nivi@gmail.com', '1234', 'udupi', 9482498);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `cust_id` int(10) NOT NULL,
  `feedback-id` int(10) NOT NULL AUTO_INCREMENT,
  `rating` varchar(20) NOT NULL,
  `comment` varchar(20) NOT NULL,
  PRIMARY KEY (`feedback-id`),
  KEY `cust_id` (`cust_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`cust_id`, `feedback-id`, `rating`, `comment`) VALUES
(2, 1, 'good', 'good website');

-- --------------------------------------------------------

--
-- Table structure for table `industry`
--

DROP TABLE IF EXISTS `industry`;
CREATE TABLE IF NOT EXISTS `industry` (
  `cat_id` int(11) NOT NULL,
  `ind_name` varchar(30) NOT NULL,
  `int_id` int(10) NOT NULL AUTO_INCREMENT,
  `city` varchar(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `imgpath` varchar(30) NOT NULL,
  PRIMARY KEY (`int_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `industry`
--

INSERT INTO `industry` (`cat_id`, `ind_name`, `int_id`, `city`, `amount`, `imgpath`) VALUES
(1, 'Acer', 2, 'Bangalore', 2000, 'images/acer.jpg'),
(2, 'Sharadha Construction', 3, 'Mangalore', 500, 'images/construction.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`);

--
-- Constraints for table `industry`
--
ALTER TABLE `industry`
  ADD CONSTRAINT `industry_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
