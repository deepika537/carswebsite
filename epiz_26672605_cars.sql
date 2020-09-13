-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql302.epizy.com
-- Generation Time: Sep 12, 2020 at 11:43 PM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_26672605_cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars_table`
--

CREATE TABLE `cars_table` (
  `Id` int(10) NOT NULL,
  `Make` varchar(6) DEFAULT NULL,
  `Model` varchar(8) DEFAULT NULL,
  `Year` varchar(4) DEFAULT NULL,
  `Color` varchar(1404) DEFAULT NULL,
  `Transmission` varchar(37) DEFAULT NULL,
  `Mileage` varchar(9) DEFAULT NULL,
  `Country` varchar(13) DEFAULT NULL,
  `Platenum` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cars_table`
--

INSERT INTO `cars_table` (`Id`, `Make`, `Model`, `Year`, `Color`, `Transmission`, `Mileage`, `Country`, `Platenum`, `State`) VALUES
(1, 'BMW', '3 Series', '1996', 'Red', '5-speed manual', '18/26 mpg', 'USA', '42_1996_CA', 'CA'),
(2, 'BMW', '3 Series', '1996', 'Black', '5-speed manual', '18/26 mpg', 'USA', '38_1996_TX', 'TX'),
(3, 'BMW', '3 Series', '1996', 'Blue', '5-speed manual', '20/29 mpg', 'USA', '45_1996_TN', 'TN'),
(4, 'BMW', '3 Series', '1996', 'Blue', '5-speed manual', '18/26 mpg', 'USA', '46_1996_TN', 'TN'),
(5, 'BMW', '3 Series', '1996', 'Blue', '5-speed manual', '18/26 mpg', 'USA', '53_1996_TN', 'TN'),
(6, 'Ford', 'F-150', '2000', 'Silver', '5-speed manual', '13/17 mpg', 'USA', '9772_2000_ND', 'ND'),
(7, 'Ford', 'F-150', '2000', 'Silver', '5-speed manual', '13/17 mpg', 'USA', '9771_2000_ND', 'ND'),
(8, 'Ford', 'F-150', '2000', 'Silver', '5-speed manual', '15/19 mpg', 'USA', '9769_2000_ND', 'ND'),
(9, 'Ford', 'F-150', '2000', 'Silver', '5-speed manual', '13/17 mpg', 'USA', '9777_2000_ND', 'ND'),
(10, 'Ford', 'F-150', '2000', 'Silver', '5-speed manual', '13/17 mpg', 'USA', '9778_2000_ND', 'ND'),
(11, 'Ford', 'F-150', '2000', 'Silver', '5-speed manual', '15/19 mpg', 'USA', '9774_2000_ND', 'ND'),
(12, 'Ford', 'F-150', '2000', 'Silver', '5-speed manual', '15/19 mpg', 'USA', '9776_2000_ND', 'ND'),
(13, 'Ford', 'F-150', '2000', 'Silver', '5-speed manual', '15/19 mpg', 'USA', '9780_2000_ND', 'ND'),
(14, 'Ford', 'F-150', '2000', 'Silver', '5-speed manual', '15/19 mpg', 'USA', '9770_2000_ND', 'ND'),
(15, 'Ford', 'F-150', '2000', 'Silver', '5-speed manual', '13/17 mpg', 'USA', '9781_2000_ND', 'ND'),
(16, 'Ford', 'F-150', '2000', 'Silver', '7-speed manual', '16/17 mpg', 'USA', '97821_2000_MN', 'MN'),
(17, 'Ford', 'F-150', '2000', 'Silver', '5-speed manual', '15/19 mpg', 'USA', '9773_2000_ND', 'ND'),
(18, 'Ford', 'F-150', '2000', 'Silver', '5-speed manual', '15/19 mpg', 'USA', '9775_2000_ND', 'ND'),
(19, 'Ford', 'F-150', '2000', 'Silver', '5-speed manual', '15/19 mpg', 'USA', '9779_2000_ND', 'ND'),
(20, 'Ford', 'F-150', '1991', 'RED', '5-speed manual', '16/19 mpg', 'USA', '97831_1991_ND', 'ND'),
(21, 'Ford', 'F-150', '2000', 'Silver', '4-speed automatic', '13/17 mpg', 'USA', '9739_2000_ND', 'ND'),
(22, 'Ford', 'F-150', '2000', 'Silver', '4-speed automatic', '12/15 mpg', 'USA', '1654_2000_ND', 'ND'),
(23, 'Ford', 'F-150', '2005', 'Silver', '5-speed manual', '13/19 mpg', 'USA', '100447604_2005_ND', 'ND'),
(24, 'Ford', 'F-150', '2005', 'Silver', '4-speed automatic', '12/16 mpg', 'USA', '100447605_2005_ND', 'ND'),
(25, 'Ford', 'F-150', '2015', 'Silver', '6-speed shiftable automatic', '15/21 mpg', 'USA', '200470591_2015_ND', 'ND'),
(26, 'Ford', 'F-150', '2020', 'Silver', '6-speed shiftable automatic', '18/23 mpg', 'USA', '401822570_2020_ND', 'ND'),
(27, 'Ford', 'F-150', '2020', 'Silver', '10-speed shiftable automatic', '20/26 mpg', 'USA', '401822567_2020_ND', 'ND'),
(28, 'Toyota', 'Prius', '2005', 'Green', 'continuously variable-speed automatic', '48/45 mpg', 'USA', '100454051_2005_MN', 'MN'),
(29, 'Toyota', 'Prius', '2009', 'Green', 'continuously variable-speed automatic', '48/45 mpg', 'USA', '101042875_2009_MN', 'MN'),
(30, 'Toyota', 'Prius', '2009', 'Green', 'continuously variable-speed automatic', '48/45 mpg', 'USA', '101042877_2009_MN', 'MN');

-- --------------------------------------------------------

--
-- Table structure for table `Drivers`
--

CREATE TABLE `Drivers` (
  `Id` int(30) NOT NULL,
  `carId` int(30) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `AssociateDriver` varchar(150) NOT NULL,
  `DriverStick` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Drivers`
--

INSERT INTO `Drivers` (`Id`, `carId`, `Name`, `AssociateDriver`, `DriverStick`) VALUES
(2, 2, 'Driver2', 'Associatedriver2', 'Yes'),
(1, 1, 'Driver1', 'Associatedriver1', 'Yes'),
(3, 3, 'Driver3', 'Associatedriver3', 'Yes'),
(4, 4, 'Driver4', 'Associatedriver4', 'Yes'),
(5, 5, 'Driver5', 'Associatedriver5', 'No'),
(6, 6, 'Driver6', 'Associatedriver6', 'Yes'),
(7, 7, 'Driver7', 'Associatedriver7', 'Yes'),
(8, 8, 'Driver8', 'Associatedriver8', 'Yes'),
(9, 9, 'Driver9', 'Associatedriver9', 'Yes'),
(10, 10, 'Driver10', 'Associatedriver10', 'Yes'),
(11, 11, 'Driver11', 'Associatedriver11', 'No'),
(12, 12, 'Driver12', 'Associatedriver12', 'Yes'),
(23, 23, 'Driver23', 'Associatedriver23', 'Yes'),
(24, 24, 'Driver24', 'Associatedriver24', 'Yes'),
(25, 25, 'Driver25', 'Associatedriver25', 'No'),
(26, 26, 'Driver26', 'Associatedriver26', 'No'),
(27, 27, 'Driver27', 'Associatedriver27', 'Yes'),
(28, 28, 'Driver28', 'Associatedriver28', 'Yes'),
(29, 29, 'Driver29', 'Associatedriver29', 'Yes'),
(30, 30, 'Driver30', 'Associatedriver30', 'Yes'),
(13, 13, 'Driver13', 'Associatedriver13', 'Yes'),
(14, 14, 'Driver14', 'Associatedriver14', 'No'),
(15, 15, 'Driver15', 'Associatedriver15', 'Yes'),
(16, 16, 'Driver16', 'Associatedriver16', 'Yes'),
(17, 17, 'Driver17', 'Associatedriver17', 'No'),
(18, 18, 'Driver18', 'Associatedriver18', 'Yes'),
(19, 19, 'Driver19', 'Associatedriver19', 'Yes'),
(20, 20, 'Driver20', 'Associatedriver20', 'No'),
(21, 21, 'Driver21', 'Associatedriver21', 'Yes'),
(22, 22, 'Driver22', 'Associatedriver22', 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars_table`
--
ALTER TABLE `cars_table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Drivers`
--
ALTER TABLE `Drivers`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id` (`Id`),
  ADD KEY `carId` (`carId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars_table`
--
ALTER TABLE `cars_table`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `Drivers`
--
ALTER TABLE `Drivers`
  MODIFY `Id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
