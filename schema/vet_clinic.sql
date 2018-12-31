

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
  `pet_gender` varchar(255) DEFAULT NULL,
  `pet_description` text NOT NULL,
  `pet_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pet_types`
--

CREATE TABLE `pet_types` (
  `pet_type_id` int(11) NOT NULL,
  `pet_type_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(2, 3, 'Marc', 'Inzon', 'Terrobias', 'Bago Bantay, QC', '1', '09558874823', '1996-03-22', '2018-12-30 20:20:16');

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
(3, 'marc@gmail.com', 'password', 2, '2018-12-30 20:18:25');

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
-- AUTO_INCREMENT for table `pet_types`
--
ALTER TABLE `pet_types`
  MODIFY `pet_type_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `user_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
