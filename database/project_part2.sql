-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2025 at 03:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_part2`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `member_name` varchar(50) NOT NULL,
  `contribution_project1` text DEFAULT NULL,
  `contribution_project2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `about_contribution1`
--

CREATE TABLE `about_contribution1` (
  `contribution1_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `contribution1_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `about_contribution2`
--

CREATE TABLE `about_contribution2` (
  `contribution_id2` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `contribution2_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `about_funfact`
--

CREATE TABLE `about_funfact` (
  `funfact_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `funfact_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `about_member`
--

CREATE TABLE `about_member` (
  `member_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `student_id` varchar(9) NOT NULL,
  `member_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `about_quote`
--

CREATE TABLE `about_quote` (
  `quote_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `quote_text` text NOT NULL,
  `quote_translation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `about_team`
--

CREATE TABLE `about_team` (
  `team_id` int(11) NOT NULL,
  `meet_text` text NOT NULL,
  `team_photo` varchar(255) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `class_day` varchar(50) NOT NULL,
  `class_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eoi_location`
--

CREATE TABLE `eoi_location` (
  `eoi_id` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `suburb` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `postcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eoi_main`
--

CREATE TABLE `eoi_main` (
  `eoi_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL
  `email` varchar(255) NOT NULL,
  `ref_num` varchar(9) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `birth_date` varchar(10) NOT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `phone_num` varchar(50) NOT NULL,
  `other_skills` text DEFAULT NULL,
  `status` enum('New','Current','Final') NOT NULL DEFAULT 'New'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eoi_skill`
--

CREATE TABLE `eoi_skill` (
  `skill_id` int(11) NOT NULL,
  `skill_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eoi_skill_selection`
--

CREATE TABLE `eoi_skill_selection` (
  `eoi_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `ref_num` varchar(9) NOT NULL,
  `reporting_line` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `job_location` varchar(50) NOT NULL,
  `job_role` varchar(50) NOT NULL,
  `job_role_logo` text NOT NULL,
  `salary_min` int(11) NOT NULL,
  `salary_max` int(11) NOT NULL,
  `job_summary1` text NOT NULL,
  `job_summary2` text NOT NULL,
  `job_summary3` text NOT NULL,
  `job_requirement1` text NOT NULL,
  `job_requirement2` text NOT NULL,
  `job_requirement3` text NOT NULL,
  `job_requirement4` text NOT NULL,
  `job_requirement5` text NOT NULL,
  `job_involvement1` text NOT NULL,
  `job_involvement2` text NOT NULL,
  `job_involvement3` text NOT NULL,
  `job_appeal1` text NOT NULL,
  `job_appeal2` text NOT NULL,
  `job_appeal3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_appeal`
--

CREATE TABLE `job_appeal` (
  `appeal_id` int(11) NOT NULL,
  `ref_num` varchar(9) NOT NULL,
  `job_appeal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_company`
--

CREATE TABLE `job_company` (
  `company_id` int(11) NOT NULL,
  `ref_num` varchar(9) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_involvement`
--

CREATE TABLE `job_involvement` (
  `involvement_id` int(11) NOT NULL,
  `ref_num` varchar(9) NOT NULL,
  `job_involvement` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_location`
--

CREATE TABLE `job_location` (
  `location_id` int(11) NOT NULL,
  `ref_num` varchar(9) NOT NULL,
  `job_location` varchar(50) NOT NULL,
  `location_logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_main`
--

CREATE TABLE `job_main` (
  `ref_num` varchar(9) NOT NULL,
  `salary_min` varchar(50) NOT NULL,
  `salary_max` varchar(50) NOT NULL,
  `job_name` varchar(50) NOT NULL,
  `job_logo` varchar(50) NOT NULL,
  `location_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_requirement`
--

CREATE TABLE `job_requirement` (
  `requirement_id` int(11) NOT NULL,
  `ref_num` varchar(9) NOT NULL,
  `job_requirement` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_summary`
--

CREATE TABLE `job_summary` (
  `summary_id` int(11) NOT NULL,
  `ref_num` varchar(9) NOT NULL,
  `job_summary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_contribution1`
--
ALTER TABLE `about_contribution1`
  ADD PRIMARY KEY (`contribution1_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `about_contribution2`
--
ALTER TABLE `about_contribution2`
  ADD PRIMARY KEY (`contribution_id2`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `about_funfact`
--
ALTER TABLE `about_funfact`
  ADD PRIMARY KEY (`funfact_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `about_member`
--
ALTER TABLE `about_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `about_quote`
--
ALTER TABLE `about_quote`
  ADD PRIMARY KEY (`quote_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `about_team`
--
ALTER TABLE `about_team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `eoi_location`
--
ALTER TABLE `eoi_location`
  ADD PRIMARY KEY (`eoi_id`);

--
-- Indexes for table `eoi_main`
--
ALTER TABLE `eoi_main`
  ADD PRIMARY KEY (`eoi_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `ref_num` (`ref_num`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `eoi_skill`
--
ALTER TABLE `eoi_skill`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `eoi_skill_selection`
--
ALTER TABLE `eoi_skill_selection`
  ADD PRIMARY KEY (`eoi_id`,`skill_id`),
  ADD KEY `skill_id` (`skill_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`ref_num`);

--
-- Indexes for table `job_appeal`
--
ALTER TABLE `job_appeal`
  ADD PRIMARY KEY (`appeal_id`),
  ADD KEY `ref_num` (`ref_num`);

--
-- Indexes for table `job_company`
--
ALTER TABLE `job_company`
  ADD PRIMARY KEY (`company_id`),
  ADD KEY `ref_num` (`ref_num`);

--
-- Indexes for table `job_involvement`
--
ALTER TABLE `job_involvement`
  ADD PRIMARY KEY (`involvement_id`),
  ADD KEY `ref_num` (`ref_num`);

--
-- Indexes for table `job_location`
--
ALTER TABLE `job_location`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `ref_num` (`ref_num`);

--
-- Indexes for table `job_main`
--
ALTER TABLE `job_main`
  ADD PRIMARY KEY (`ref_num`),
  ADD KEY `location_id` (`location_id`),
  ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `job_requirement`
--
ALTER TABLE `job_requirement`
  ADD PRIMARY KEY (`requirement_id`),
  ADD KEY `ref_num` (`ref_num`);

--
-- Indexes for table `job_summary`
--
ALTER TABLE `job_summary`
  ADD PRIMARY KEY (`summary_id`),
  ADD KEY `ref_num` (`ref_num`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `about_contribution1`
--
ALTER TABLE `about_contribution1`
  MODIFY `contribution1_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `about_contribution2`
--
ALTER TABLE `about_contribution2`
  MODIFY `contribution_id2` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `about_funfact`
--
ALTER TABLE `about_funfact`
  MODIFY `funfact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `about_member`
--
ALTER TABLE `about_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `about_quote`
--
ALTER TABLE `about_quote`
  MODIFY `quote_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `about_team`
--
ALTER TABLE `about_team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eoi_main`
--
ALTER TABLE `eoi_main`
  MODIFY `eoi_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eoi_skill`
--
ALTER TABLE `eoi_skill`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_appeal`
--
ALTER TABLE `job_appeal`
  MODIFY `appeal_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_company`
--
ALTER TABLE `job_company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_involvement`
--
ALTER TABLE `job_involvement`
  MODIFY `involvement_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_location`
--
ALTER TABLE `job_location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_requirement`
--
ALTER TABLE `job_requirement`
  MODIFY `requirement_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_summary`
--
ALTER TABLE `job_summary`
  MODIFY `summary_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `about_contribution1`
--
ALTER TABLE `about_contribution1`
  ADD CONSTRAINT `about_contribution1_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `about_member` (`member_id`);

--
-- Constraints for table `about_contribution2`
--
ALTER TABLE `about_contribution2`
  ADD CONSTRAINT `about_contribution2_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `about_member` (`member_id`);

--
-- Constraints for table `about_funfact`
--
ALTER TABLE `about_funfact`
  ADD CONSTRAINT `about_funfact_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `about_member` (`member_id`);

--
-- Constraints for table `about_quote`
--
ALTER TABLE `about_quote`
  ADD CONSTRAINT `about_quote_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `about_member` (`member_id`);

--
-- Constraints for table `eoi_location`
--
ALTER TABLE `eoi_location`
  ADD CONSTRAINT `eoi_location_ibfk_1` FOREIGN KEY (`eoi_id`) REFERENCES `eoi_main` (`eoi_id`);

--
-- Constraints for table `eoi_main`
--
ALTER TABLE `eoi_main`
  ADD CONSTRAINT `eoi_main_ibfk_2` FOREIGN KEY (`ref_num`) REFERENCES `job_main` (`ref_num`),
  ADD CONSTRAINT `eoi_main_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `eoi_skill_selection`
--
ALTER TABLE `eoi_skill_selection`
  ADD CONSTRAINT `eoi_skill_selection_ibfk_1` FOREIGN KEY (`eoi_id`) REFERENCES `eoi_main` (`eoi_id`),
  ADD CONSTRAINT `eoi_skill_selection_ibfk_2` FOREIGN KEY (`skill_id`) REFERENCES `eoi_skill` (`skill_id`);

--
-- Constraints for table `job_appeal`
--
ALTER TABLE `job_appeal`
  ADD CONSTRAINT `job_appeal_ibfk_1` FOREIGN KEY (`ref_num`) REFERENCES `job_main` (`ref_num`);

--
-- Constraints for table `job_company`
--
ALTER TABLE `job_company`
  ADD CONSTRAINT `job_company_ibfk_1` FOREIGN KEY (`ref_num`) REFERENCES `job_main` (`ref_num`);

--
-- Constraints for table `job_involvement`
--
ALTER TABLE `job_involvement`
  ADD CONSTRAINT `job_involvement_ibfk_1` FOREIGN KEY (`ref_num`) REFERENCES `job_main` (`ref_num`);

--
-- Constraints for table `job_location`
--
ALTER TABLE `job_location`
  ADD CONSTRAINT `job_location_ibfk_1` FOREIGN KEY (`ref_num`) REFERENCES `job_main` (`ref_num`);

--
-- Constraints for table `job_main`
--
ALTER TABLE `job_main`
  ADD CONSTRAINT `job_main_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `job_location` (`location_id`),
  ADD CONSTRAINT `job_main_ibfk_2` FOREIGN KEY (`company_id`) REFERENCES `job_company` (`company_id`);

--
-- Constraints for table `job_requirement`
--
ALTER TABLE `job_requirement`
  ADD CONSTRAINT `job_requirement_ibfk_1` FOREIGN KEY (`ref_num`) REFERENCES `job_main` (`ref_num`);

--
-- Constraints for table `job_summary`
--
ALTER TABLE `job_summary`
  ADD CONSTRAINT `job_summary_ibfk_1` FOREIGN KEY (`ref_num`) REFERENCES `job_main` (`ref_num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
