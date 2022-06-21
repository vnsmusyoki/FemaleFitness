-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 21, 2022 at 08:38 PM
-- Server version: 8.0.29
-- PHP Version: 8.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `female_gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int NOT NULL,
  `admin_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_mobile` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone_number` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `instructor_id` int NOT NULL,
  `instructor_fullname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructor_mobile` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructor_address` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructor_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructor_user_id` int UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`instructor_id`, `instructor_fullname`, `instructor_mobile`, `instructor_address`, `instructor_email`, `instructor_user_id`) VALUES
(1, 'intruder', '0720882594', 'this is my residence', 'intruder@gmail.com', 1),
(2, 'elijah', '0722992200', 'home address', 'elijah@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int NOT NULL,
  `login_user_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login_password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login_rank` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login_admin_id` bigint UNSIGNED DEFAULT NULL,
  `login_member_id` bigint UNSIGNED DEFAULT NULL,
  `login_instructor_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `login_user_name`, `login_password`, `login_rank`, `login_admin_id`, `login_member_id`, `login_instructor_id`) VALUES
(1, 'intruder', '5f4dcc3b5aa765d61d8327deb882cf99', 'instructor', NULL, NULL, 1),
(2, 'adminadmin', '5f4dcc3b5aa765d61d8327deb882cf99', 'admin', NULL, NULL, NULL),
(4, 'oscarbrian', '5f4dcc3b5aa765d61d8327deb882cf99', 'member', NULL, 1, NULL),
(5, 'neemagrace', '5f4dcc3b5aa765d61d8327deb882cf99', 'member', NULL, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int NOT NULL,
  `member_full_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_mobile` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_date_of_birth` date DEFAULT NULL,
  `member_gender` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_joining_date` date DEFAULT NULL,
  `member_end_date` date DEFAULT NULL,
  `member_user_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_full_name`, `member_email`, `member_mobile`, `member_date_of_birth`, `member_gender`, `member_joining_date`, `member_end_date`, `member_user_id`) VALUES
(1, 'oscar Brian', 'oscar@gmail.com', '0788110011', '2022-05-30', 'Male', '2022-06-13', '2022-06-23', 4),
(2, 'Neema Grace', 'grace@gmail.com', '0799873209', '2001-01-15', 'Female', '2022-06-14', '2022-06-29', 5);

-- --------------------------------------------------------

--
-- Table structure for table `member_workout_plan`
--

CREATE TABLE `member_workout_plan` (
  `plan_id` int NOT NULL,
  `plan_member_id` bigint UNSIGNED NOT NULL,
  `plan_wef` date NOT NULL,
  `plan_wet` date NOT NULL,
  `plan_ref` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_workout_id` bigint UNSIGNED NOT NULL,
  `plan_assigned_instructor_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int NOT NULL,
  `payments_plan_id` bigint UNSIGNED NOT NULL,
  `payment_amount` int NOT NULL,
  `payment_date` date NOT NULL,
  `payment_time` time NOT NULL,
  `payment_transaction_code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_mode` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workout`
--

CREATE TABLE `workout` (
  `workout_id` int NOT NULL,
  `workout_name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `workout_description` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `workout_cost` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workout`
--

INSERT INTO `workout` (`workout_id`, `workout_name`, `workout_description`, `workout_cost`) VALUES
(1, 'work out one', 'this si tihe description', '500'),
(4, 'work out test', 'tis is the descripoon', '5000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`instructor_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `member_workout_plan`
--
ALTER TABLE `member_workout_plan`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `workout`
--
ALTER TABLE `workout`
  ADD PRIMARY KEY (`workout_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `instructor_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member_workout_plan`
--
ALTER TABLE `member_workout_plan`
  MODIFY `plan_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `workout`
--
ALTER TABLE `workout`
  MODIFY `workout_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
