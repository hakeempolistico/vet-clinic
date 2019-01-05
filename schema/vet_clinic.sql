-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2019 at 06:49 PM
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
-- Database: `vet_clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `diagnose`
--

CREATE TABLE `diagnose` (
  `diagnose_id` int(11) NOT NULL,
  `schedule_id` int(11) DEFAULT NULL,
  `pet_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `diagnose_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 17, 'Doggo', 'German Shepherd', 2, '1', 'Doggo is a dog', 1, 1, 1, '2019-01-05 17:24:55'),
(2, 17, 'Catta ', 'Siamese', 2, '2', 'Catta is a cat', 2, 1, 1, '2019-01-05 17:24:55'),
(3, 17, 'Cat', 'Siamese', 1, '1', 'Stray Cat', 2, 1, 0, '2019-01-05 17:24:55'),
(4, 17, 'Dog', 'Dobberdog', 1, '1', 'asd', 1, 1, 0, '2019-01-05 17:24:55'),
(5, 17, 'Tiger', 'Tiger', 1, '1', 'ASD', 2, 1, 0, '2019-01-05 17:24:55'),
(6, 17, 'Leopard', 'Leopard', 2, '2', 'ASD', 2, 1, 0, '2019-01-05 17:24:55'),
(7, 17, 'Panther', 'Panther', 1, '2', 'ASD', 2, 1, 0, '2019-01-05 17:24:55'),
(8, 17, 'Cheetah', 'Cheetah', 2, '2', 'ASD', 2, 1, 0, '2019-01-05 17:24:55');

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
(1, 'dog'),
(2, 'cat');

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
(1, 1, 'Hakeem', 'Andaya', 'Polistico', 'Maliksi II, Bacoor, Cavite', '1', '09558874822', '2019-07-22', '2018-12-30 18:35:39'),
(2, 3, 'Marc', 'Inzon', 'Terrobias', 'Bago Bantay, QC', '1', '09558874823', '1996-03-22', '2018-12-30 20:20:16'),
(3, 0, 'Hakeem', NULL, 'Polistico', 'addresss', NULL, '09558874822', NULL, '2018-12-31 18:59:44'),
(4, 5, 'Christine', NULL, 'Canimo', 'address', NULL, '0955884822', NULL, '2018-12-31 19:02:33'),
(5, 6, 'Hannah', NULL, 'Liao', 'address', NULL, '09558874822', NULL, '2019-01-01 14:11:54'),
(6, 7, 'Hakeem', NULL, 'Polistico', 'adress', NULL, '09558874822', NULL, '2019-01-01 14:15:21'),
(7, 8, 'Kim', NULL, 'Arvin', 'address', NULL, '09558874822', NULL, '2019-01-01 14:44:06'),
(8, 9, 'keem', NULL, 'polistico', 'address', NULL, '09558874822', NULL, '2019-01-01 15:29:05'),
(9, 10, 'arvin', NULL, 'toledo', 'address', NULL, '09558874822', NULL, '2019-01-01 15:30:32'),
(10, 11, 'joshua', NULL, 'polistico', 'add', NULL, '09558874822', NULL, '2019-01-01 15:31:05'),
(11, 12, 'joshuaa', NULL, 'polistico', 'add', NULL, '09558874822', NULL, '2019-01-01 15:31:50'),
(12, 13, 'arvins', NULL, 'po', 'add', NULL, '09558874822', NULL, '2019-01-01 15:33:06'),
(13, 14, 'first', NULL, 'last', 'ad', NULL, '09558874822', NULL, '2019-01-01 15:33:37'),
(14, 15, 'name', NULL, 'name', 'add', NULL, '09558874822', NULL, '2019-01-01 15:34:05'),
(15, 16, 'Hakeem', NULL, 'Polistico', 'adr', NULL, '09558874822', NULL, '2019-01-01 15:36:59'),
(16, 17, 'Hakeem', 'Andaya', 'Polistico', 'Apartment 4B, Villa Diaz Compound, Maliksi II, Bacoor, Cavite\r\n', '1', '09558874822', NULL, '2019-01-01 15:39:38'),
(17, 18, 'tin', NULL, 'canimo', 'address', NULL, '09558874822', NULL, '2019-01-01 16:15:37'),
(18, 19, 'Joshua', NULL, 'Polistico', 'Apartment 4B, Villa Diaz Compound, Maliksi II, Bacoor, Cavite', NULL, '09558874822', NULL, '2019-01-01 20:06:15'),
(19, 20, 'asd', NULL, 'asd', 'asdf', NULL, '09558874822', NULL, '2019-01-05 23:38:59');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `schedule_id` int(5) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `pet_id` int(11) DEFAULT NULL,
  `date_time` timestamp NULL DEFAULT NULL,
  `schedule_description` text,
  `schedule_status` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `diagnose_id` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'hakeem.polistico@gmail.com', 'password', 2, '2018-12-02 17:00:52'),
(2, 'kma.toledo@gmail.com', 'password', 1, '2018-12-26 12:46:15'),
(3, 'marc@gmail.com', 'password', 2, '2018-12-30 20:18:25'),
(4, 'hakeem@gmail.co', '$2y$10$PITo5W1si0.9DPGjjpQvCeGQjVCXmMN2196MwkA7.7F27oDJXt9tu', 2, '2018-12-31 18:59:44'),
(5, 'christine@gmail.com', '$2y$10$qrHgC9B4RvlcMh7QfAx1q.fL6NboICd/GEo62HdrOAC0ZLfCpTCAG', 2, '2018-12-31 19:02:33'),
(6, 'hannah@gmail.com', '$2y$10$NsB1FoLDY9OJ.CqNq4cVVOPfWHh7.dG0N3nQJxW0kUmgTabKejM5.', 2, '2019-01-01 14:11:54'),
(7, 'hak@gmail.com', '$2y$10$N5neJ6pcQ06pVYYbktsbAuzvCAszAnSR0.OdsY0EkebZhi63CxsNi', 2, '2019-01-01 14:15:21'),
(8, 'kim@gmail.com', '$2y$10$FPrWrvLs.OrB1OL5ETxYAODY0M.JxGHM0mhsKQJ/F7QwzQu4z8bUG', 2, '2019-01-01 14:44:06'),
(9, 'keem@gmail.com', '$2y$10$UEuBIf4ucCNl1LqNC3uNPucXEtMhgHQp7rfzM2oYeSKeQTMitWQq2', 2, '2019-01-01 15:29:05'),
(10, 'arvin@gmail.com', '$2y$10$j2tMGZN.HBEhpl90oBnr3eRQpdZQK1UBdCgwj9U7HFevl8J571Xge', 2, '2019-01-01 15:30:32'),
(11, 'joshua@gmail.com', '$2y$10$B47vprtE3BKhqRe6YBbJLuw4Ao7pjNz57imqCDyU5IcUxMQSuhPxG', 2, '2019-01-01 15:31:05'),
(12, 'joshua@gmail.coma', '$2y$10$5bxR/qepHJGP6sxBD7pZUeKKL4FVXcjIk5piN6P9u9E4Ekh5pUsBi', 2, '2019-01-01 15:31:50'),
(13, 'arvins@gmail.com', '$2y$10$Cpd8G6mr7tmxObSdvZpjKesKnoEjQlgY.rpWLDa5aMJhZzhix1OEm', 2, '2019-01-01 15:33:06'),
(14, 'first@gmail.com', '$2y$10$Vssy3xz8mdlCNPcTRCKb2.UtS4EMkh3FaKeCEygvpqGAZoJGkH2jy', 2, '2019-01-01 15:33:37'),
(15, 'name@gmail.com', '$2y$10$2mm/lXghlDd3FFP1lOXh/Oxp3IqFOMfVyBWSK3HvZ71TLmF0TZIEK', 2, '2019-01-01 15:34:05'),
(16, 'hakee@gmail.com', '$2y$10$W09ZvphgDyxGrJiN3y5TO.PEgUH1lIksn3CL6Lw669s6z.POqcKma', 2, '2019-01-01 15:36:59'),
(17, 'hakeemo@gmail.com', '$2y$10$zjK9UkPWWodYG4tv5eUVAeN0K9WfcGgmFdCL60TXoFUvx1yAU/6G.', 2, '2019-01-01 15:39:38'),
(18, 'tin@gmail.com', '$2y$10$A8oSae0cRzWxLa5Xz6UHnuQSH8URMZlEcQOsHG37gr7BOHE9xJWXu', 2, '2019-01-01 16:15:37'),
(19, 'joshua.polistico@gmail.com', '$2y$10$PI1AgtL7/WKC.thlzCYh2.IX.4YXD3t4A6XjIyG6FJhVcpNg2XneW', 2, '2019-01-01 20:06:15'),
(20, 'asd@example.com', '$2y$10$h5vzPbg..ZRbSnwmvByPE.rsAqbDOlVn70jwGCFfnKTbkiqwoluU2', 2, '2019-01-05 23:38:59');

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
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `gender_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `user_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
