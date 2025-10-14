-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 14, 2025 at 10:58 AM
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
-- Table structure for table `applicant_skills`
--

CREATE TABLE `applicant_skills` (
  `email` varchar(50) NOT NULL,
  `skill_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eoi`
--

CREATE TABLE `eoi` (
  `email` varchar(50) NOT NULL,
  `ref_num` varchar(9) NOT NULL,
  `first_name` varchar(11) NOT NULL,
  `last_name` varchar(11) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `street_address` varchar(50) NOT NULL,
  `suburb_town` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `postcode` int(4) NOT NULL,
  `phone_num` int(12) NOT NULL,
  `other_skills` varchar(11) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'New'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skills_lookup`
--

CREATE TABLE `skills_lookup` (
  `skill_id` int(11) NOT NULL,
  `skill_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant_skills`
--
ALTER TABLE `applicant_skills`
  ADD PRIMARY KEY (`email`,`skill_id`),
  ADD KEY `skill_id` (`skill_id`);

--
-- Indexes for table `eoi`
--
ALTER TABLE `eoi`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `skills_lookup`
--
ALTER TABLE `skills_lookup`
  ADD PRIMARY KEY (`skill_id`),
  ADD UNIQUE KEY `skill_name` (`skill_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skills_lookup`
--
ALTER TABLE `skills_lookup`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicant_skills`
--
ALTER TABLE `applicant_skills`
  ADD CONSTRAINT `email` FOREIGN KEY (`email`) REFERENCES `eoi` (`email`),
  ADD CONSTRAINT `skill_id` FOREIGN KEY (`skill_id`) REFERENCES `skills_lookup` (`skill_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
