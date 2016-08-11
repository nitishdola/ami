-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 11, 2016 at 11:27 AM
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
  `city` varchar(127) NOT NULL,
  `pin` int(11) NOT NULL,
  `country` varchar(127) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `nationality` enum('indian','foreigner') NOT NULL DEFAULT 'indian',
  `passport_number` varchar(127) DEFAULT NULL,
  `valid_upto` varchar(127) NOT NULL,
  `issued_by` varchar(127) NOT NULL,
  `accommodation_required` enum('yes','no') NOT NULL DEFAULT 'no',
  `status` tinyint(5) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ami_delegates`
--

INSERT INTO `ami_delegates` (`id`, `title`, `first_name`, `last_name`, `dob`, `professional_role`, `speciality_others`, `speciality`, `main_workplace_type`, `institution`, `department`, `position`, `address_1`, `address_2`, `address_3`, `state`, `city`, `pin`, `country`, `mobile`, `email`, `nationality`, `passport_number`, `valid_upto`, `issued_by`, `accommodation_required`, `status`, `created_at`) VALUES
(1, 'Mr.', 'Dolakasharia', 'Dolakasharia', '1989-01-01', 'Technician', 'IT', 'Others', 'Company', 'Zantrik', 'IT', 'Dev', '&lt;script&gt;alert(\'Hi\');&lt;/script&gt;', '&lt;script&gt;alert(\'Hi\');&lt;/script&gt;', '&lt;script&gt;alert(\'Hi\');&lt;/script&gt;', 'Assam', 'Guwahati', 888888, 'India', '7777777777', 'nitish.dola@gmail.com', 'indian', 'S', '01', 'SS', 'yes', 1, '2016-08-11 10:36:40'),
(2, 'Mr.', 'Dolakasharia', 'Dolakasharia', '1950-01-01', 'Student', '', 'Industrial Microbiology', 'University', 'Zantrik', 'IT', 'Dev', 'Bora Service 1', '', '', 'Assam', 'Guwahati', 781025, 'India', '9999999999', 'nitish.dola@gmail.com', 'indian', 'S', '10', '', 'no', 1, '2016-08-11 11:11:36'),
(3, 'Mr.', 'Dolakasharia', 'Dolakasharia', '1950-01-01', 'Student', '', 'Industrial Microbiology', 'University', 'Zantrik', 'IT', 'Dev', 'Bora Service 1', 'Bora Service 2', 'Bora Service 3', 'Assam', 'Guwahati', 781028, 'India', '56456456', 'nitish.dola@gmail.com', 'indian', '', '01', '', 'yes', 1, '2016-08-11 11:52:31'),
(4, 'Mr.', 'Dolakasharia', 'Dolakasharia', '1950-01-01', 'PhD Research Scholar', '', 'Environmental Microbiology', 'Hospital', 'Zantrik', 'IT', 'Dev', 'Bora Service 1', 'Bora Service 2', 'Bora Service 3', 'Assam', 'Guwahati', 546546456, 'India', '456456456', 'nitish.dola@gmail.com', 'indian', '', '09', '', 'yes', 1, '2016-08-11 11:54:01'),
(5, 'Mr.', 'Dolakasharia', 'Dolakasharia', '1950-01-01', 'PhD Research Scholar', '', 'Environmental Microbiology', 'Hospital', 'Zantrik', 'IT', 'Dev', 'Bora Service 1', 'Bora Service 2', 'Bora Service 3', 'Assam', 'Guwahati', 546546456, 'India', '456456456', 'nitish.dola@gmail.com', 'indian', '', '09', '', 'yes', 1, '2016-08-11 11:54:27'),
(6, 'Mr.', 'Dolakasharia', 'Dolakasharia', '1950-01-01', 'PhD Research Scholar', '', 'Environmental Microbiology', 'Hospital', 'Zantrik', 'IT', 'Dev', 'Bora Service 1', 'Bora Service 2', 'Bora Service 3', 'Assam', 'Guwahati', 546546456, 'India', '456456456', 'nitish.dola@gmail.com', 'indian', '', '09', '', 'yes', 1, '2016-08-11 12:12:18'),
(7, 'Mr.', 'Dolakasharia', 'Dolakasharia', '1950-01-01', 'PhD Research Scholar', '', 'Environmental Microbiology', 'Hospital', 'Zantrik', 'IT', 'Dev', 'Bora Service 1', 'Bora Service 2', 'Bora Service 3', 'Assam', 'Guwahati', 546546456, 'India', '456456456', 'nitish.dola@gmail.com', 'indian', '', '09', '', 'yes', 1, '2016-08-11 12:19:15'),
(8, 'Mr.', 'Dolakasharia', 'Dolakasharia', '1950-01-01', 'PhD Research Scholar', '', 'Environmental Microbiology', 'Hospital', 'Zantrik', 'IT', 'Dev', 'Bora Service 1', 'Bora Service 2', 'Bora Service 3', 'Assam', 'Guwahati', 546546456, 'India', '456456456', 'nitish.dola@gmail.com', 'indian', '', '09', '', 'yes', 1, '2016-08-11 12:26:39');

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
-- Dumping data for table `ami_delegate_guests`
--

INSERT INTO `ami_delegate_guests` (`id`, `delegate_id`, `name`, `status`) VALUES
(2, 1, 'Munmi Konwar', 1),
(3, 3, 'Munmi Konwar', 1),
(4, 4, 'Munmi Konwar', 1),
(5, 5, 'Munmi Konwar', 1),
(6, 6, 'Munmi Konwar', 1),
(7, 7, 'Munmi Konwar', 1),
(8, 8, 'Munmi Konwar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ami_delegate_payments`
--

CREATE TABLE `ami_delegate_payments` (
  `id` int(10) NOT NULL,
  `delegate_id` int(10) NOT NULL,
  `customer_id` varchar(127) NOT NULL,
  `amount_paid` decimal(10,2) DEFAULT NULL,
  `pay_date` date DEFAULT NULL,
  `payment_type` varchar(127) DEFAULT NULL,
  `transaction_id` varchar(127) DEFAULT NULL,
  `bank_id` varchar(127) DEFAULT NULL,
  `bank_merchant_id` varchar(127) DEFAULT NULL,
  `bank_response_code` varchar(127) DEFAULT NULL COMMENT '0300 - Success | 0399 - Invalid authentication at bank, cancel | 0002 - Billdesk is waiting from bank, cancel | 0001 - Error at BillDesk , cancel',
  `bank_message` varchar(256) DEFAULT NULL,
  `curreny` enum('USD','INR') NOT NULL DEFAULT 'INR',
  `payment_status` int(10) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `ami_delegate_payments`
--

INSERT INTO `ami_delegate_payments` (`id`, `delegate_id`, `customer_id`, `amount_paid`, `pay_date`, `payment_type`, `transaction_id`, `bank_id`, `bank_merchant_id`, `bank_response_code`, `bank_message`, `curreny`, `payment_status`, `created_at`) VALUES
(1, 8, 'AMI86586', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'INR', 0, NULL),
(2, 8, 'AMI88585', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'INR', 0, NULL),
(3, 8, 'AMI88967', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'INR', 0, NULL),
(4, 8, 'AMI81394', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'INR', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ami_users`
--

CREATE TABLE `ami_users` (
  `id` int(10) NOT NULL,
  `first_name` varchar(127) NOT NULL,
  `last_name` varchar(127) NOT NULL,
  `email` varchar(60) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `status` tinyint(5) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ami_users`
--

INSERT INTO `ami_users` (`id`, `first_name`, `last_name`, `email`, `code`, `status`) VALUES
(1, 'nitish', 'Dolakasharia', 'nitish.dola@gmail.com', '9f783d30647e49cab613d1fbf0b1b76e', 1),
(2, 'Munmi ', 'Konwar', 'munmi@gmail.com', 'b797af0db8a9c1a628ec6921ef3db6a3', 1);

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
-- Indexes for table `ami_delegate_payments`
--
ALTER TABLE `ami_delegate_payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_id` (`customer_id`),
  ADD KEY `delegate_id` (`delegate_id`);

--
-- Indexes for table `ami_users`
--
ALTER TABLE `ami_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ami_delegates`
--
ALTER TABLE `ami_delegates`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `ami_delegate_guests`
--
ALTER TABLE `ami_delegate_guests`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `ami_delegate_payments`
--
ALTER TABLE `ami_delegate_payments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ami_users`
--
ALTER TABLE `ami_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ami_delegate_guests`
--
ALTER TABLE `ami_delegate_guests`
  ADD CONSTRAINT `delegate_id` FOREIGN KEY (`delegate_id`) REFERENCES `ami_delegates` (`id`);

--
-- Constraints for table `ami_delegate_payments`
--
ALTER TABLE `ami_delegate_payments`
  ADD CONSTRAINT `ami_delegate_payments_ibfk_1` FOREIGN KEY (`delegate_id`) REFERENCES `ami_delegates` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
