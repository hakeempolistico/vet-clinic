-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2019 at 05:22 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vet_clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `diagnose`
--

CREATE TABLE `diagnose` (
  `diagnose_id` int(11) NOT NULL,
  `schedule_id` int(11) DEFAULT NULL,
  `diagnose_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnose`
--

INSERT INTO `diagnose` (`diagnose_id`, `schedule_id`, `diagnose_details`) VALUES
(1, 1, 'Flees');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `gender_id` int(11) NOT NULL,
  `gender_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`gender_id`, `gender_name`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `global_parameter`
--

CREATE TABLE `global_parameter` (
  `global_parameter_id` int(5) NOT NULL,
  `global_parameter_type_id` int(5) DEFAULT NULL,
  `global_parameter_count` int(5) DEFAULT NULL,
  `global_parameter_name` text,
  `global_parameter_description` text,
  `global_parameter_status` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `global_parameter`
--

INSERT INTO `global_parameter` (`global_parameter_id`, `global_parameter_type_id`, `global_parameter_count`, `global_parameter_name`, `global_parameter_description`, `global_parameter_status`) VALUES
(1, 2, 1, 'Dog', '', 1),
(2, 2, 2, 'Cat', '', 1),
(3, 1, 1, 'Admin', NULL, 1),
(4, 1, 2, 'Customer', NULL, 1),
(5, 3, 1, 'Male', NULL, 1),
(6, 3, 2, 'Female', NULL, 1),
(7, 4, 1, 'Pending', NULL, 1),
(8, 4, 2, 'Accepted', NULL, 1),
(9, 4, 3, 'Rejcted', NULL, 1),
(10, 4, 4, 'Cancel', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `global_parameter_types`
--

CREATE TABLE `global_parameter_types` (
  `global_parameter_type_id` int(5) NOT NULL,
  `global_parameter_type_name` text,
  `global_parameter_type_status` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `global_parameter_types`
--

INSERT INTO `global_parameter_types` (`global_parameter_type_id`, `global_parameter_type_name`, `global_parameter_type_status`) VALUES
(1, 'user Type', 1),
(2, 'Pet Type', 1),
(3, 'Gender', 1),
(4, 'Appointment Status', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `pet_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `pet_name` varchar(255) DEFAULT NULL,
  `pet_breed` varchar(255) NOT NULL,
  `pet_age` int(11) NOT NULL,
  `gender_id` varchar(255) DEFAULT NULL,
  `pet_description` text NOT NULL,
  `pet_type_id` int(255) NOT NULL,
  `pet_status_id` int(255) NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`pet_id`, `user_id`, `pet_name`, `pet_breed`, `pet_age`, `gender_id`, `pet_description`, `pet_type_id`, `pet_status_id`, `is_deleted`, `created_at`) VALUES
(2, 1, 'Mushi', 'K9', 5, '1', 'asd', 1, 1, 0, '2019-01-06 03:59:57');

-- --------------------------------------------------------

--
-- Table structure for table `pet_status`
--

CREATE TABLE `pet_status` (
  `pet_status_id` int(11) NOT NULL,
  `pet_status_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pet_status`
--

INSERT INTO `pet_status` (`pet_status_id`, `pet_status_name`) VALUES
(1, 'Active'),
(2, 'Deceased');

-- --------------------------------------------------------

--
-- Table structure for table `pet_types`
--

CREATE TABLE `pet_types` (
  `pet_type_id` int(11) NOT NULL,
  `pet_type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pet_types`
--

INSERT INTO `pet_types` (`pet_type_id`, `pet_type_name`) VALUES
(1, 'Dog'),
(2, 'Cat');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `profile_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `gender_id` varchar(255) DEFAULT NULL,
  `contact_num` varchar(16) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `details_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`profile_id`, `user_id`, `fname`, `mname`, `lname`, `address`, `gender_id`, `contact_num`, `birthdate`, `details_modified`) VALUES
(1, 1, 'Kim Arvin', 'Antonio', 'Toledo', 'Panapaan', '1', '09757842616', NULL, '2019-01-06 11:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `schedule_id` int(5) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `pet_id` int(11) DEFAULT NULL,
  `date_time` timestamp NULL DEFAULT NULL,
  `description` text,
  `status` int(5) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`schedule_id`, `user_id`, `pet_id`, `date_time`, `description`, `status`) VALUES
(1, 17, 5, '2019-01-10 02:30:00', NULL, 1),
(2, 1, 2, '2018-03-07 05:30:00', 'asd', 1),
(3, 1, 2, '2018-03-11 05:30:00', 'asdsadasdasdasdasdasdadsa', 1),
(4, 1, 2, '2018-03-11 05:30:00', 'asdsadasdasdasdasdasdadsa', 1),
(5, 1, 2, '2018-03-01 05:30:00', 'test 1111', 1),
(6, 1, 2, '2018-09-29 05:30:00', 'asd', 1),
(7, 1, 2, '2018-09-29 04:00:00', 'asd', 1),
(8, 1, 2, '2018-09-09 04:00:00', 'asdasdsad', 1),
(9, 1, 2, '2018-09-09 04:00:00', 'asdasdsad', 1),
(10, 1, 2, '2018-09-09 04:00:00', 'asdasdsad', 1),
(11, 1, 2, '2018-09-09 04:00:00', 'asdasdsad', 1),
(12, 1, 2, '2018-09-09 04:00:00', 'asdasdsad', 1),
(13, 1, 2, '2018-09-09 04:00:00', 'asdasdsad', 1),
(14, 1, 2, '2018-09-09 04:00:00', 'asdasdsad', 1),
(15, 1, 2, '2018-09-09 04:00:00', 'asdasdsad', 1),
(16, 1, 2, '2018-09-09 04:00:00', 'asdasdsad', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(11) NOT NULL,
  `diagnose_id` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `transaction_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transaction_id`, `diagnose_id`, `amount`, `transaction_date`) VALUES
(1, 1, 2000000, '2019-01-06 02:05:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(250) DEFAULT NULL,
  `user_password` varchar(250) DEFAULT NULL,
  `user_type_id` int(11) DEFAULT NULL,
  `user_details_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_password`, `user_type_id`, `user_details_modified`) VALUES
(1, 'kma.toledo@gmail.com', '$2y$10$I6Wk9j7nsSvx9K.Bik46wuudys0fZLfq5tlpYidrjeTMBKhkm/sk.', 2, '2019-01-06 11:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `user_type_id` int(11) NOT NULL,
  `user_type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`user_type_id`, `user_type_name`) VALUES
(1, 'Admin'),
(2, 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diagnose`
--
ALTER TABLE `diagnose`
  ADD PRIMARY KEY (`diagnose_id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`gender_id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`pet_id`);

--
-- Indexes for table `pet_status`
--
ALTER TABLE `pet_status`
  ADD PRIMARY KEY (`pet_status_id`);

--
-- Indexes for table `pet_types`
--
ALTER TABLE `pet_types`
  ADD PRIMARY KEY (`pet_type_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`user_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diagnose`
--
ALTER TABLE `diagnose`
  MODIFY `diagnose_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `gender_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pet_status`
--
ALTER TABLE `pet_status`
  MODIFY `pet_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pet_types`
--
ALTER TABLE `pet_types`
  MODIFY `pet_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `schedule_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `user_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
