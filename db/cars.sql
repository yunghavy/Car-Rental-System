-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 02:22 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_name` varchar(255) NOT NULL,
  `car_type` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `hire_cost` int(11) NOT NULL,
  `cost_unit` varchar(20) NOT NULL,
  `capacity` int(11) NOT NULL,
  `category` varchar(15) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `car_name`, `car_type`, `image`, `hire_cost`, `cost_unit`, `capacity`, `category`, `status`) VALUES
(1, 'Mercedes Benz', 'Mercedes Benz', 'mercedes.jpg', 20000, 'Per Weekend', 5, 'Offer', 'Available'),
(8, 'BMW I8', 'BMW', 'bmw 18.jfif', 65000, 'Per Weekend', 2, 'Offer', 'Available'),
(9, 'Land Cruiser V8', 'Toyota', 'v8.jpg', 30000, 'Per Weekend', 4, 'Offer', 'Unavailable'),
(10, 'Toyota Mark X', 'Toyota', 'mark_x.jpg', 6000, 'Per Day', 4, 'Fleet', 'Available'),
(11, 'Toyota Alphard', 'Toyota', 'toyota alpard.jpg', 12000, 'Per Day', 7, 'Fleet', 'Available'),
(12, 'Toyota Land Cruiser V8', 'Toyota', 'v8__.jpeg', 30000, 'Per Day', 5, 'Fleet', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_no` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `car_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `mpesa` varchar(255) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `fname`, `email`, `id_no`, `phone`, `location`, `gender`, `car_id`, `status`, `mpesa`) VALUES
(2, 'Jaffer Kimutai', 'kimutaij192@gmail.com', 35691858, 710638127, 'Ngara', 'Male', 18, 'Approved', 'QAW21345a');

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

DROP TABLE IF EXISTS `hire`;
CREATE TABLE IF NOT EXISTS `hire` (
  `hire_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_no` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `fromDate` varchar(20) DEFAULT NULL,
  `toDate` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`hire_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hire`
--

INSERT INTO `hire` (`hire_id`, `id_no`, `client_id`, `car_id`, `status`, `fromDate`, `toDate`) VALUES
(1, 12345678, 1, 1, 'Pending', '22/08/2022', '29/08/2022');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `client_id`, `message`, `status`, `time`) VALUES
(2, 0, 'Am happy its working?', 'Unread', '0000-00-00 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
