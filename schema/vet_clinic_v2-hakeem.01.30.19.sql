-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2019 at 01:18 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vet_clinic_v2`
--

-- --------------------------------------------------------

--
-- Table structure for table `diagnose`
--

CREATE TABLE `diagnose` (
  `diagnose_id` int(11) NOT NULL,
  `schedule_id` int(11) DEFAULT NULL,
  `diagnose_details` text NOT NULL,
  `treatment_details` text,
  `note` text,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnose`
--

INSERT INTO `diagnose` (`diagnose_id`, `schedule_id`, `diagnose_details`, `treatment_details`, `note`, `created_at`) VALUES
(1, 1, 'Flees', 'Treatment_details', 'Note', '2019-01-30 19:58:53'),
(2, 1, 'Flu', '1 Dose of Marijuanna', 'Don\'t overdose patient', '2019-01-30 19:58:53');

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
(2, 1, 'Mushi', 'K9', 5, '1', 'asd', 1, 1, 0, '2019-01-06 03:59:57'),
(3, 2, 'DogCat', 'Dobberdog', 2, '1', 'asd', 1, 1, 0, '2019-01-13 03:15:34'),
(4, 9, 'Mushi', 'K9', 80, '1', 'asd', 1, 1, 0, '2019-01-13 10:46:34'),
(5, 1, 'Mushi2', 'Ki10', 2, '1', 'asd', 2, 1, 0, '2019-01-20 13:35:54');

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
  `is_deleted` int(1) NOT NULL DEFAULT '0',
  `details_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`profile_id`, `user_id`, `fname`, `mname`, `lname`, `address`, `gender_id`, `contact_num`, `birthdate`, `is_deleted`, `details_modified`) VALUES
(1, 1, 'Kim Arvin  A', 'Antonio', 'Toledo', 'Panapaan', '1', '09757842616', '2019-07-22', 0, '2019-01-06 11:47:33'),
(2, 2, 'Hakeem', 'Andaya', 'Polistico', 'Maliksi II, Bacoor City, Cavite', '1', '09558874822', '1994-07-22', 0, '2019-01-13 11:02:43'),
(3, 3, 'Hakeem', NULL, 'Polistico', 'Maliksi II, Bacoor City, Cavite', '1', '09558874822', NULL, 0, '2019-01-13 11:03:41'),
(4, 4, 'asd', NULL, 'asd', 'asdfasdfsdfa', '2', '09558874822', NULL, 0, '2019-01-13 11:18:13'),
(5, 5, 'Hakeem', NULL, 'Polistico', 'ASPODASUDASO', '1', '09558874822', NULL, 0, '2019-01-13 11:24:15'),
(6, 6, 'asdasdas', NULL, 'asdasda', 'asdfasdfas', '2', '09558874822', NULL, 0, '2019-01-13 11:35:53'),
(7, 7, 'aaa', NULL, 'aaa', 'asdfasdfa', '1', '09558874822', NULL, 0, '2019-01-13 11:37:00'),
(8, 8, 'qwe', NULL, 'qwe', 'asdfasdf', '1', '09558874822', NULL, 0, '2019-01-13 11:39:22'),
(9, 9, 'Customer', 'Customer', 'Customer', '054 Paapaan 3, Bacoor City, Cavite', '1', '09757842616', NULL, 0, '2019-01-13 18:45:56');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `schedule_id` int(5) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `subject` text,
  `pet_id` int(11) DEFAULT NULL,
  `date` text,
  `time` text,
  `date_time` datetime DEFAULT NULL,
  `description` text,
  `status` int(5) DEFAULT '1',
  `is_deleted` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`schedule_id`, `user_id`, `subject`, `pet_id`, `date`, `time`, `date_time`, `description`, `status`, `is_deleted`) VALUES
(1, 2, 'asd', 3, '2019-01-03', '08:30', '2019-01-03 08:30:00', 'asd', 2, 0),
(2, 1, 'asd', 2, '2019-01-03', '08:30', '2019-01-03 08:30:00', 'asd', 2, 0),
(3, 1, 'asd', 2, '2019-01-03', '08:30', '2019-01-03 08:30:00', 'asd', 3, 0),
(4, 1, 'asd', 2, '2019-01-03', '08:30', '2019-01-03 08:30:00', 'asd', 3, 0),
(5, 1, 'asd', 2, '2019-01-03', '08:30', '2019-01-03 08:30:00', 'asd', 3, 0),
(6, 1, 'asd', 2, '2019-01-03', '08:30', '2019-01-03 08:30:00', 'asd', 3, 0),
(7, 1, 'asd', 2, '2019-01-03', '08:30', '2019-01-03 08:30:00', 'asd', 1, 1),
(8, 1, 'test', 2, '2019-01-26', '08:00', '2019-01-26 08:00:00', 'test', 1, 1),
(9, 1, 'test', 2, '2019-01-26', '08:00', '2019-01-26 08:00:00', 'test', 1, 0),
(10, 1, 'test', 2, '2019-01-26', '08:00', '2019-01-26 08:00:00', 'test', 1, 0),
(11, 1, 'test', 2, '2018-01-26', '08:00', '2018-01-26 08:00:00', 'asdasdasdasd', 1, 0),
(12, 1, 'test', 2, '2018-01-26', '08:00', '2018-01-26 08:00:00', 'asdasdasdasd', 1, 0),
(13, 1, 'test', 2, '2018-01-26', '08:00', '2018-01-26 08:00:00', 'asdasdasdasd', 1, 0),
(14, 1, 'test', 2, '2018-01-26', '08:00', '2018-01-26 08:00:00', 'asdasdasdasd', 1, 0),
(15, 1, 'test', 2, '2018-01-26', '08:00', '2018-01-26 08:00:00', 'asdasdasdasd', 1, 0),
(16, 1, 'test', 2, '2018-01-26', '08:00', '2018-01-26 08:00:00', 'asdasdasdasd', 1, 0),
(17, 1, 'test', 2, '2018-01-26', '08:00', '2018-01-26 08:00:00', 'asdasdasdasd', 1, 0),
(18, 1, 'test', 2, '2018-01-26', '08:00', '2018-01-26 08:00:00', 'asdasdasdasd', 1, 0),
(19, 1, 'test', 2, '2018-01-26', '08:00', '2018-01-26 08:00:00', 'asdasdasdasd', 1, 0),
(20, 1, 'asd', 5, '2019-01-05', '08:00', '2019-01-05 08:00:00', 'asd', 1, 0),
(21, 1, 'asd', 5, '2019-02-08', '08:00', '2019-02-08 08:00:00', 'asd', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `schedule_status`
--

CREATE TABLE `schedule_status` (
  `id` int(11) NOT NULL,
  `name` text,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule_status`
--

INSERT INTO `schedule_status` (`id`, `name`, `status`) VALUES
(1, 'Pending', 1),
(2, 'Approved', 1),
(3, 'Rejected', 1),
(4, 'Cancel', 1);

-- --------------------------------------------------------

--
-- Table structure for table `time_schedule`
--

CREATE TABLE `time_schedule` (
  `id` int(11) NOT NULL,
  `value` text,
  `name` text,
  `active` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_schedule`
--

INSERT INTO `time_schedule` (`id`, `value`, `name`, `active`) VALUES
(1, '08:00', '08:00-08:30', 1),
(3, '08:30', '08:30-09:00', 1),
(4, '09:00', '09:00-09:30', 1),
(5, '09:30', '09:30-10:00', 1),
(6, '10:00', '10:00-10:30', 1),
(7, '10:30', '10:30-11:00', 1),
(8, '11:00', '11:00-11:30', 1),
(9, '11:30', '11:30-12:00', 1),
(10, '13:00', '01:00-01:30', 1),
(11, '13:30', '01:30-02:00', 1),
(12, '14:00', '02:00-02:30', 1),
(13, '14:30', '02:30-03:00', 1),
(14, '15:00', '03:00-03:30', 1),
(15, '15:30', '03:30-04:00', 1),
(16, '16:00', '04:00-04:30', 1),
(17, '17:30', '04:30-05:00', 1),
(18, '18:00', '05:00-05:30', 1);

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
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `user_details_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_password`, `user_type_id`, `is_deleted`, `user_details_modified`) VALUES
(1, 'kma.toledo@gmail.com', '$2y$10$I6Wk9j7nsSvx9K.Bik46wuudys0fZLfq5tlpYidrjeTMBKhkm/sk.', 1, 0, '2019-01-06 11:47:33'),
(2, 'customer@example.com', '$2y$10$PI1AgtL7/WKC.thlzCYh2.IX.4YXD3t4A6XjIyG6FJhVcpNg2XneW', 2, 0, '2019-01-13 11:02:43'),
(3, 'admin@example.com', '$2y$10$ZkKjMxl5HqbjDaZSgFMGnuhRjTt8Q6Jl/Go3w3gy4OkGrfFneTHQS', 1, 0, '2019-01-13 11:03:41'),
(4, 'asd@example.com', '$2y$10$1Q0aBkPvnw0HzTzOhRcrd.X4E7dY6fAbmQlkfikQntBgs97tybKeC', 2, 0, '2019-01-13 11:18:13'),
(5, 'another@example.com', '$2y$10$WYgFFuAlGY8ILroiaB8La.FnakptxXReyevu0Nzz/iieHusvGEkuK', 2, 0, '2019-01-13 11:24:15'),
(6, 'asdasdas@example.com', '$2y$10$hmDPkxwUTyk4YJBC2Qo5uOPcQOasiOvxmb0cRp7baXYZi7Vtcciv2', 2, 0, '2019-01-13 11:35:53'),
(7, 'aaa@example.com', '$2y$10$7gLaW3FjBnYexfHgkM2pkOL5CuMByq5HLgo1Od/h1IGrbIZ67aeBi', 2, 0, '2019-01-13 11:37:00'),
(8, 'qwe@example.com', '$2y$10$6uf1tWY9MgW2z3hMheKyV.Er10QG0plC7ohCHGAkLpbxuuL8gYv32', 2, 0, '2019-01-13 11:39:22'),
(9, 'customer@customer.com', '$2y$10$tdPXojFPiCNGZFE1Dv3.1usOEWeIHhwerv4wMMB8CFxiIKRSOOUxq', 2, 0, '2019-01-13 18:45:56');

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
-- Indexes for table `schedule_status`
--
ALTER TABLE `schedule_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_schedule`
--
ALTER TABLE `time_schedule`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `diagnose_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `gender_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `schedule_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `schedule_status`
--
ALTER TABLE `schedule_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `time_schedule`
--
ALTER TABLE `time_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `user_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
