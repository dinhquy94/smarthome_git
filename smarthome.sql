-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 28, 2015 at 04:01 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smarthome`
--

-- --------------------------------------------------------

--
-- Table structure for table `smh_device`
--

CREATE TABLE IF NOT EXISTS `smh_device` (
  `IdPort` int(100) NOT NULL,
  `DeviceName` char(100) DEFAULT NULL,
  `RoomId` char(10) DEFAULT NULL,
  PRIMARY KEY (`IdPort`),
  KEY `fk_PerOrders` (`RoomId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smh_device`
--

INSERT INTO `smh_device` (`IdPort`, `DeviceName`, `RoomId`) VALUES
(53, 'Main light', '1'),
(55, 'Main FAN', '1'),
(59, 'Toilet Light', '1');

-- --------------------------------------------------------

--
-- Table structure for table `smh_history`
--

CREATE TABLE IF NOT EXISTS `smh_history` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Event` char(100) DEFAULT NULL,
  `Time` datetime DEFAULT NULL,
  `Place` char(10) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `history` (`Place`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `smh_mode_auto`
--

CREATE TABLE IF NOT EXISTS `smh_mode_auto` (
  `ModeId` char(100) NOT NULL,
  `Modename` char(100) DEFAULT NULL,
  PRIMARY KEY (`ModeId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `smh_mode_collection`
--

CREATE TABLE IF NOT EXISTS `smh_mode_collection` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ModeId` char(100) DEFAULT NULL,
  `IdPort` int(10) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `auto_mode` (`IdPort`),
  KEY `mode` (`ModeId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `smh_room`
--

CREATE TABLE IF NOT EXISTS `smh_room` (
  `RoomId` char(10) NOT NULL,
  `RoomName` char(50) DEFAULT NULL,
  `FloorId` int(11) DEFAULT NULL,
  `icon` varchar(255) NOT NULL DEFAULT 'ion-ios-home',
  PRIMARY KEY (`RoomId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smh_room`
--

INSERT INTO `smh_room` (`RoomId`, `RoomName`, `FloorId`, `icon`) VALUES
('1', 'Batch room', NULL, 'ion-ios-albums'),
('gara', 'Garage', NULL, 'ion-android-car'),
('kids-bedro', 'Kids Bedroom', NULL, 'ion-ios-paw'),
('kitchen', 'Kitchen', NULL, 'ion-android-restaurant'),
('loughe', 'Loughe', NULL, 'ion-ios-ionic-outline'),
('master-bed', 'Master Bedroom', NULL, 'ion-ios-filing'),
('sauna', 'Sauna', NULL, 'ion-happy'),
('study', 'Study', NULL, 'ion-ios-book'),
('wholehouse', 'Whole House', NULL, 'ion-ios-grid-view');

-- --------------------------------------------------------

--
-- Table structure for table `smh_user`
--

CREATE TABLE IF NOT EXISTS `smh_user` (
  `username` char(100) NOT NULL,
  `password` char(100) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smh_user`
--

INSERT INTO `smh_user` (`username`, `password`) VALUES
('admin', 'admin123');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `smh_device`
--
ALTER TABLE `smh_device`
  ADD CONSTRAINT `fk_PerOrders` FOREIGN KEY (`RoomId`) REFERENCES `smh_room` (`RoomId`);

--
-- Constraints for table `smh_history`
--
ALTER TABLE `smh_history`
  ADD CONSTRAINT `history` FOREIGN KEY (`Place`) REFERENCES `smh_room` (`RoomId`);

--
-- Constraints for table `smh_mode_collection`
--
ALTER TABLE `smh_mode_collection`
  ADD CONSTRAINT `auto_mode` FOREIGN KEY (`IdPort`) REFERENCES `smh_device` (`IdPort`),
  ADD CONSTRAINT `mode` FOREIGN KEY (`ModeId`) REFERENCES `smh_mode_auto` (`ModeId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
