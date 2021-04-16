-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 16, 2021 at 07:15 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism_made`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `item_id` int(3) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(256) NOT NULL,
  `description` varchar(256) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `description`, `price`) VALUES
(1, 'Eccolo Passport Case', 'Marble Style,6.4 x 4', 1000),
(2, 'Leatherman Multitool', 'Wire Cutters,Spring-Action Scissors, etc', 2599),
(3, 'Samsonite Luggage', 'Black Expandable Spinner wheels 28 inch', 9000),
(4, 'Barbecue Charcoal Grill', 'Kit inluced, Foldable', 2000),
(5, 'Osprey Travel Bag', 'Water Proof,Foam Straps,Back Support', 13000),
(6, 'Sony Bluetooth Headset', 'Noise Cancelling,Mic,10HR Battery life', 8000),
(7, 'Sony MINI Speaker', 'Bluetooth,loud Clear Audio', 5000),
(8, 'Cabeau Neck Pillow', 'Evolution Style ,Memory Foam', 999),
(9, 'Lifedrop bottle', '@ stage intigrated filter With travel Strap', 1200),
(10, 'Anker Power Bank', '12000 watt ,2 ports + LED', 4000),
(11, 'Sony DSLR', 'Professional Camera+Stand+lens', 40000),
(12, 'Fastrack Sports Watch', '3 dials+Date', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(3) NOT NULL AUTO_INCREMENT,
  `item_id` int(5) NOT NULL,
  `cust_id` int(5) NOT NULL,
  `number` int(2) NOT NULL,
  `status` enum('Added to cart','Confirmed') DEFAULT NULL,
  PRIMARY KEY (`order_id`),
  KEY `item_id` (`item_id`),
  KEY `cust_id` (`cust_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `item_id`, `cust_id`, `number`, `status`) VALUES
(1, 1, 1, 4, 'Confirmed'),
(10, 2, 1, 4, 'Confirmed'),
(11, 7, 1, 1, 'Confirmed'),
(12, 10, 1, 5, 'Confirmed'),
(13, 2, 2, 1, 'Added to cart'),
(14, 3, 2, 4, 'Added to cart');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

DROP TABLE IF EXISTS `trips`;
CREATE TABLE IF NOT EXISTS `trips` (
  `trip_id` int(5) NOT NULL AUTO_INCREMENT,
  `pack` varchar(256) NOT NULL,
  `description` varchar(256) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`trip_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`trip_id`, `pack`, `description`, `price`) VALUES
(1, 'Bhutan', '3N 4D 1N Thimpu-1N Punakha-1N Paro', 12380),
(2, 'Europe', '6N 7D 3N France 3N Switzerland', 124990),
(3, 'Bali', '5N 6D 5N Bali', 32044),
(4, 'Kerela', '4N 2D 2N Munnar-1D thekkady-1N Allepay', 21000),
(5, 'Dubai', '4N 5D 4N Dubai', 55580),
(6, 'Moriane Lake', '3N 4D 3N Moriane Resort', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `trip_order`
--

DROP TABLE IF EXISTS `trip_order`;
CREATE TABLE IF NOT EXISTS `trip_order` (
  `o_id` int(5) NOT NULL AUTO_INCREMENT,
  `trip_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `travelers` int(2) DEFAULT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`o_id`),
  KEY `trip_id` (`trip_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trip_order`
--

INSERT INTO `trip_order` (`o_id`, `trip_id`, `user_id`, `travelers`, `status`) VALUES
(3, 1, 1, 6, 'Confirmed'),
(4, 1, 2, 1, 'Added to cart'),
(5, 2, 2, 3, 'Added to cart');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `contact` int(15) NOT NULL,
  `address` varchar(256) NOT NULL,
  `state` varchar(256) NOT NULL,
  `zip_code` varchar(256) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `name`, `password`, `contact`, `address`, `state`, `zip_code`) VALUES
(1, 'abc@gmail.com', 'ABC', '9bcd24949fe9b7a0d79931e551c719da', 1234567890, 'asdfghjkl', 'qwertyuiop', 'qwertyuiop'),
(2, 'bc@gmail.com', 'DHAWAL  SONI', '6f85bd61503641e0a22934fe57dc13f0', 1234567891, 'Qr.no.-11-A/Street 13/Sector 2', 'Chhattisgarh', '490001');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`);

--
-- Constraints for table `trip_order`
--
ALTER TABLE `trip_order`
  ADD CONSTRAINT `trip_order_ibfk_1` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`trip_id`),
  ADD CONSTRAINT `trip_order_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
