-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 10, 2016 at 01:01 PM
-- Server version: 5.7.13-log
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ami`
--

-- --------------------------------------------------------

--
-- Table structure for table `ami_delegates`
--

CREATE TABLE `ami_delegates` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `dob` date NOT NULL,
  `professional_role` varchar(127) NOT NULL,
  `speciality_others` varchar(127) DEFAULT NULL,
  `speciality` varchar(127) NOT NULL,
  `main_workplace_type` varchar(127) NOT NULL,
  `institution` varchar(127) NOT NULL,
  `department` varchar(127) NOT NULL,
  `position` varchar(127) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `address_2` varchar(255) DEFAULT NULL,
  `address_3` varchar(255) NOT NULL,
  `state` varchar(127) NOT NULL,
  `pin` int(11) NOT NULL,
  `country` varchar(127) NOT NULL,
  `mobile` int(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `nationality` enum('indian','foreigner') NOT NULL DEFAULT 'indian',
  `passport_number` varchar(127) DEFAULT NULL,
  `valid_upto` varchar(127) NOT NULL,
  `issued_by` varchar(127) NOT NULL,
  `accommodation_required` enum('yes','no') NOT NULL DEFAULT 'no',
  `status` tinyint(5) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ami_delegate_guests`
--

CREATE TABLE `ami_delegate_guests` (
  `id` int(10) NOT NULL,
  `delegate_id` int(10) NOT NULL,
  `name` varchar(127) NOT NULL,
  `status` tinyint(5) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ami_delegates`
--
ALTER TABLE `ami_delegates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ami_delegate_guests`
--
ALTER TABLE `ami_delegate_guests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delegate_id` (`delegate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ami_delegates`
--
ALTER TABLE `ami_delegates`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ami_delegate_guests`
--
ALTER TABLE `ami_delegate_guests`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ami_delegate_guests`
--
ALTER TABLE `ami_delegate_guests`
  ADD CONSTRAINT `delegate_id` FOREIGN KEY (`delegate_id`) REFERENCES `ami_delegates` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
