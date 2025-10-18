-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 17, 2025 at 07:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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

--
-- Dumping data for table `about_contribution1`
--

INSERT INTO `about_contribution1` (`contribution1_id`, `member_id`, `contribution1_text`) VALUES
(1, 1, 'Home page html + css'),
(2, 1, 'Home background w/Ryan'),
(3, 1, 'Footer html + css w/Lira'),
(4, 2, 'About page html + css'),
(5, 2, 'Company logo #1'),
(6, 2, 'Github folder management'),
(7, 2, 'Footer html+css w/Wei-ting'),
(8, 3, 'Apply page html + css'),
(9, 3, 'Company logo #2'),
(10, 3, 'Jira project management'),
(11, 3, 'Header nav bar html+css w/Aron'),
(12, 4, 'Jobs page html + css'),
(13, 4, 'Company/Group name'),
(14, 4, 'Background keyframe animation'),
(15, 4, 'Header nav bar html+css w/Ryan');

-- --------------------------------------------------------

--
-- Table structure for table `about_contribution2`
--

CREATE TABLE `about_contribution2` (
  `contribution_id2` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `contribution2_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_contribution2`
--

INSERT INTO `about_contribution2` (`contribution_id2`, `member_id`, `contribution2_text`) VALUES
(1, 1, 'Cleaned up w3c validation errors for home page'),
(2, 1, 'Addressed Part 1 feedback (index page)'),
(3, 2, 'manage.php w/Aron: handled admin page'),
(4, 2, 'about.php: table and page'),
(5, 2, 'Reuse common UI with PHP includes w/Ryan'),
(6, 2, 'Cleaned up w3c validation errors for about page'),
(7, 2, 'Addressed Part 1 feedback (about page)'),
(8, 3, 'settings.php'),
(9, 3, 'eoi.php: table'),
(10, 3, 'process_eoi.php: table and page'),
(11, 3, 'Reuse common UI with PHP includes w/Lira'),
(12, 3, 'Cleaned up w3c validation errors for jobs/apply page'),
(13, 3, 'Addressed Part 1 feedback (apply page)'),
(14, 4, 'jobs.php: table and page'),
(15, 4, 'manage.php w/Lira: handled user login table'),
(16, 4, 'Cleaned up w3c validation errors for jobs/apply page'),
(17, 4, 'Addressed Part 1 feedback (jobs page)');

-- --------------------------------------------------------

--
-- Table structure for table `about_funfact`
--

CREATE TABLE `about_funfact` (
  `funfact_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `funfact_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_funfact`
--

INSERT INTO `about_funfact` (`funfact_id`, `member_id`, `funfact_text`) VALUES
(1, 1, 'Head was once stung by a bee, and I had to go to the hospital.'),
(2, 1, 'Love Japanese food, especially sushi and ramen.'),
(3, 1, 'The first time I visited a casino, I ran A$100 up to over A$1,000, then gave it all back the next day.'),
(4, 2, 'Fell down the stairs and had to get a stitch near my eye.'),
(5, 2, 'Had a serious fight with a 4 y/o because he broke my Rubik''s Cube when I was 11.'),
(6, 2, 'Had to save my stupid bird at home without a vet because he nearly got tangled and hung himself in his toy.'),
(7, 3, 'Broke his front tooth at age 7 while pretending to surf on a towel.'),
(8, 3, 'Aspiring barista/latte artist.'),
(9, 3, 'Ran a half marathon in a banana costume.'),
(10, 4, 'Ate mud as a kid.'),
(11, 4, 'Dropped a deuce in my pants during preschool for 5 days in a row.'),
(12, 4, 'Got lost once when i was a kid in Melbourne with no way of contacting anyone.');

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

--
-- Dumping data for table `about_member`
--

INSERT INTO `about_member` (`member_id`, `first_name`, `last_name`, `student_id`, `member_image`) VALUES
(1, 'Wei-ting', 'Chen', '105205347', 'images/about/venson.jpg'),
(2, 'Lira', 'Khisha', '105960769', 'images/about/lira.jpg'),
(3, 'Ryan', 'Tay', '106060754', 'images/about/ryan.jpg'),
(4, 'Aron', 'Winjoto', '105556236', 'images/about/aron.jpg');

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

--
-- Dumping data for table `about_quote`
--

INSERT INTO `about_quote` (`quote_id`, `member_id`, `quote_text`, `quote_translation`) VALUES
(1, 1, '(最愛の詩) - 「古池や蛙飛びこむ水の音', 'An old pond— a frog jumps in, the sound of water.'),
(2, 2, 'Se a vaca voar, apenas aplaude e aceita', 'If the cow flies, just clap and accept it.'),
(3, 3, '你爱我，我爱你, 蜜雪冰城甜蜜蜜', 'I love you you love me MIXUE Ice cream and tea.'),
(4, 4, '你叫我去这样干，他叫我去那样干。真是一群大混蛋', 'You tell me to do this, he told me to do that, you are all bastards.');

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

--
-- Dumping data for table `about_team`
--

INSERT INTO `about_team` (`team_id`, `meet_text`, `team_photo`, `team_name`, `class_day`, `class_time`) VALUES
(1, "We are", "images/about/group_photo.jpg", "Powerpuff Girls", "Tuesday", "2:30 PM - 4:30 PM"),
(2, "Powerpuff Corp!", "images/about/group_photo.jpg", "Powerpuff Girls", "Tuesday", "2:30 PM - 4:30 PM"),
(3, "A Melbourne-based team of four with big ideas and a love for creating memorable experiences. We are a game development company with a passion for crafting games and digital content that are engaging, inspiring, and full of imagination. With four dedicated members, we bring together different skills and ideas to design and develop. Though each of us focuses on different areas, together we create games and digital content that are fun, innovative, and inspiring. Alone we''re good. Together? We''re unstoppable!", "images/about/group_photo.jpg", "Powerpuff Girls", "Tuesday", "2:30 PM - 4:30 PM"),
(4, "Our team is growing, and we''re excited to welcome anyone who wants to code, design, or just bring bold ideas to the table. Got a weird idea? PERFECT. Think you can handle a brainstorming session that feels more like a jam session? Even BETTER.", "images/about/group_photo.jpg", "Powerpuff Girls", "Tuesday", "2:30 PM - 4:30 PM"),
(5, "Join us", "images/about/group_photo.jpg", "Powerpuff Girls", "Tuesday", "2:30 PM - 4:30 PM"),
(6, "if you like building games, sharing ideas, and maybe debating which game soundtrack is the best (spoiler: we don''t always agree).", "images/about/group_photo.jpg", "Powerpuff Girls", "Tuesday", "2:30 PM - 4:30 PM"),
(7, "We thrive on creativity, curiosity, and a little bit of chaos. Every brainstorming session is a chance to test new ideas, break stuff (safely), and turn challenges into wins. We love experimenting, learning from each other, and turning challenges into opportunities to level up.", "images/about/group_photo.jpg", "Powerpuff Girls", "Tuesday", "2:30 PM - 4:30 PM"),
(8, "Curious? Excited?? Think you''d enjoy being part of our team??? Check our ", "images/about/group_photo.jpg", "Powerpuff Girls", "Tuesday", "2:30 PM - 4:30 PM"),
(9, "pages to see how you can hop on board!", "images/about/group_photo.jpg", "Powerpuff Girls", "Tuesday", "2:30 PM - 4:30 PM"),
(10, "That''s a wrap! Hope to see you joining our quest!", "images/about/group_photo.jpg", "Powerpuff Girls", "Tuesday", "2:30 PM - 4:30 PM");

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
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ref_num` varchar(9) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `birth_date` date NOT NULL,
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
-- Indexes for table `eoi`
--
ALTER TABLE `eoi`
  ADD PRIMARY KEY (`email`);

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
  MODIFY `contribution1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `about_contribution2`
--
ALTER TABLE `about_contribution2`
  MODIFY `contribution_id2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `about_funfact`
--
ALTER TABLE `about_funfact`
  MODIFY `funfact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `about_member`
--
ALTER TABLE `about_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `about_quote`
--
ALTER TABLE `about_quote`
  MODIFY `quote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `about_team`
--
ALTER TABLE `about_team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
