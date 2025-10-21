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

--
-- Dumping data for table `about_contribution1`
--

INSERT INTO `about_contribution1` (`contribution1_id`, `member_id`, `contribution1_text`) VALUES
(1, 1, 'Home page html + css'),
(2, 1, 'Footer html + css w/Lira'),
(3, 2, 'About page html + css'),
(4, 2, 'Company logo #1'),
(5, 2, 'Github folder management'),
(6, 2, 'Footer html+css w/Wei-ting'),
(7, 3, 'Apply page html + css'),
(8, 3, 'Company logo #2'),
(9, 3, 'Jira project management'),
(10, 3, 'Header nav bar html+css w/Aron'),
(11, 3, 'Created image and slogan for home page'),
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
(3, 2, '-'),
(4, 2, 'about.php: table and page'),
(5, 2, 'Cleaned up w3c validation errors and addressed Part 1 feedback for about page'),
(6, 3, 'settings.php'),
(7, 3, 'eoi.php: table, process_eoi.php: table and page'),
(8, 3, 'Reuse common UI with PHP include'),
(9, 3, 'Cleaned up w3c validation errors and Addressed Part 1 feedback for jobs/apply page'),
(10, 4, 'jobs.php: table and page'),
(11, 4, '-'),
(12, 4, 'Cleaned up w3c validation errors and addressed Part 1 feedbackfor jobs/apply page');

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
  `class_time` varchar(50) NOT NULL,
  `lecturer` varchar(50) NOT NULL,
  `lab_instructor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_team`
--

INSERT INTO `about_team` (`team_id`, `meet_text`, `team_photo`, `team_name`, `class_day`, `class_time`, `lecturer`, `lab_instructor`) VALUES
(1, 'We are', 'images/about/group_photo.jpg', 'Powerpuff Girls', 'Tuesday', '2:30 PM - 4:30 PM', 'Dr Atie Kia', 'Enrique Ketterer Ortiz (Nick)'),
(2, 'Powerpuff Corp!', 'images/about/group_photo.jpg', 'Powerpuff Girls', 'Tuesday', '2:30 PM - 4:30 PM', 'Dr Atie Kia', 'Enrique Ketterer Ortiz (Nick)'),
(3, 'A Melbourne-based team of four with big ideas and a love for creating memorable experiences. We are a game development company with a passion for crafting games and digital content that are engaging, inspiring, and full of imagination. With four dedicated members, we bring together different skills and ideas to design and develop. Though each of us focuses on different areas, together we create games and digital content that are fun, innovative, and inspiring. Alone we are good. Together? We are unstoppable!', 'images/about/group_photo.jpg', 'Powerpuff Girls', 'Tuesday', '2:30 PM - 4:30 PM', 'Dr Atie Kia', 'Enrique Ketterer Ortiz (Nick)'),
(4, 'Our team is growing, and we are excited to welcome anyone who wants to code, design, or just bring bold ideas to the table. Got a weird idea? PERFECT. Think you can handle a brainstorming session that feels more like a jam session? Even BETTER.', 'images/about/group_photo.jpg', 'Powerpuff Girls', 'Tuesday', '2:30 PM - 4:30 PM', 'Dr Atie Kia', 'Enrique Ketterer Ortiz (Nick)'),
(5, 'Join us', 'images/about/group_photo.jpg', 'Powerpuff Girls', 'Tuesday', '2:30 PM - 4:30 PM', 'Dr Atie Kia', 'Enrique Ketterer Ortiz (Nick)'),
(6, 'if you like building games, sharing ideas, and maybe debating which game soundtrack is the best (spoiler: we don''t always agree).', 'images/about/group_photo.jpg', 'Powerpuff Girls', 'Tuesday', '2:30 PM - 4:30 PM', 'Dr Atie Kia', 'Enrique Ketterer Ortiz (Nick)'),
(7, 'We thrive on creativity, curiosity, and a little bit of chaos. Every brainstorming session is a chance to test new ideas, break stuff (safely), and turn challenges into wins. We love experimenting, learning from each other, and turning challenges into opportunities to level up.', 'images/about/group_photo.jpg', 'Powerpuff Girls', 'Tuesday', '2:30 PM - 4:30 PM', 'Dr Atie Kia', 'Enrique Ketterer Ortiz (Nick)'),
(8, 'Curious? Excited?? Think you''d enjoy being part of our team??? Check our ', 'images/about/group_photo.jpg', 'Powerpuff Girls', 'Tuesday', '2:30 PM - 4:30 PM', 'Dr Atie Kia', 'Enrique Ketterer Ortiz (Nick)'),
(9, 'pages to see how you can hop on board!', 'images/about/group_photo.jpg', 'Powerpuff Girls', 'Tuesday', '2:30 PM - 4:30 PM', 'Dr Atie Kia', 'Enrique Ketterer Ortiz (Nick)'),
(10, 'That''s a wrap! Hope to see you joining our quest!', 'images/about/group_photo.jpg', 'Powerpuff Girls', 'Tuesday', '2:30 PM - 4:30 PM', 'Dr Atie Kia', 'Enrique Ketterer Ortiz (Nick)');

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
  `user_id` int(11) DEFAULT NULL,
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

INSERT INTO `eoi_skill` (`skill_id`, `skill_name`) VALUES
(1, 'Project Management'),
(2, 'Database Management'),
(3, 'Front-End Development'),
(4, 'Back-End Development'),
(5, 'Lua'),
(6, 'Rust'),
(7, 'Unity'),
(8, 'Adobe Animate');

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

INSERT INTO `job_appeal` (`appeal_id`, `ref_num`, `job_appeal`)
VALUES
(1, 'REF-SE842', 'Contribute directly to core gameplay systems.'),
(2, 'REF-SE842', 'Collaborate with creative teams in a dynamic environment.'),
(3, 'REF-SE842', 'Grow your engineering skills with challenging problems.'),

(4, 'REF-GE529', 'Work on the cutting edge of rendering technology.'),
(5, 'REF-GE529', 'Define the visual direction of our games.'),
(6, 'REF-GE529', 'Gain hands-on experience with the latest graphics APIs.'),

(7, 'REF-BE317', 'Maintain automated systems that ensure smooth development.'),
(8, 'REF-BE317', 'Be the backbone of the studio’s technical pipeline.'),
(9, 'REF-BE317', 'Play a key role in streamlining workflows.'),

(10, 'REF-NE604', 'Develop the multiplayer backbone that connects players worldwide.'),
(11, 'REF-NE604', 'Build matchmaking and online service systems.'),
(12, 'REF-NE604', 'Join a team that values technical excellence and collaboration.');

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

INSERT INTO `job_company` (`company_id`, `ref_num`, `company_name`, `company_logo`)
VALUES
(1, 'REF-SE842', 'Powerpuff Corp.', 'domain'),
(1, 'REF-GE529', 'Powerpuff Corp.', 'domain'),
(1, 'REF-BE317', 'Powerpuff Corp.', 'domain'),
(1, 'REF-NE604', 'Powerpuff Corp.', 'domain');

--
-- Table structure for table `job_involvement`
--

CREATE TABLE `job_involvement` (
  `involvement_id` int(11) NOT NULL,
  `ref_num` varchar(9) NOT NULL,
  `job_involvement` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

INSERT INTO `job_involvement` (`involvement_id`, `ref_num`, `job_involvement`)
VALUES
(1, 'REF-SE842', 'Build core gameplay systems and implement in-game mechanics.'),
(2, 'REF-SE842', 'Collaborate with design and art teams to translate creative ideas into features.'),
(3, 'REF-SE842', 'Requires strong coding and debugging skills in C++ or C#.'),

(4, 'REF-GE529', 'Create rendering and visual effects systems for games.'),
(5, 'REF-GE529', 'Optimize shaders and rendering performance across platforms.'),
(6, 'REF-GE529', 'Requires knowledge of DirectX/Vulkan/OpenGL and linear algebra.'),

(7, 'REF-BE317', 'Manage automated build pipelines to maintain stable builds.'),
(8, 'REF-BE317', 'Troubleshoot and improve CI/CD efficiency.'),
(9, 'REF-BE317', 'Requires strong scripting and DevOps skills.'),

(10, 'REF-NE604', 'Develop multiplayer and networked gameplay systems.'),
(11, 'REF-NE604', 'Ensure stable, low-latency connections for smooth play.'),
(12, 'REF-NE604', 'Requires networking and server expertise.');

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

INSERT INTO `job_location` (`location_id`, `ref_num`, `job_location`, `location_logo`)
VALUES
(1, 'REF-SE842', 'Melbourne VIC', 'location_on'),
(1, 'REF-GE529', 'Melbourne VIC', 'location_on'),
(1, 'REF-BE317', 'Melbourne VIC', 'location_on'),
(1, 'REF-NE604', 'Melbourne VIC', 'location_on');

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

INSERT INTO `job_main` (`ref_num`, `salary_min`, `salary_max`, `job_name`, `job_logo`, `location_id`, `company_id`)
VALUES
('REF-SE842', 90000, 110000, 'Software Engineer', 'deployed_code', 1, 1),
('REF-GE529', 90000, 110000, 'Graphics Engineer', 'wall_art', 1, 1),
('REF-BE317', 100000, 130000, 'Build Engineer', 'construction', 1, 1),
('REF-NE604', 105000, 125000, 'Network Engineer', 'network_node', 1, 1);

--
-- Table structure for table `job_requirement`
--

CREATE TABLE `job_requirement` (
  `requirement_id` int(11) NOT NULL,
  `ref_num` varchar(9) NOT NULL,
  `job_requirement` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

INSERT INTO `job_requirement` (`requirement_id`, `ref_num`, `job_requirement`)
VALUES
(1, 'REF-SE842', 'Solid experience with programming languages such as C++ or C#, and a strong understanding of object-oriented design principles.'),
(2, 'REF-SE842', 'Proven ability to debug and solve complex technical issues efficiently.'),
(3, 'REF-SE842', 'A strong interest in gameplay design and the ability to translate creative ideas into functional systems.'),

(4, 'REF-GE529', 'Strong knowledge of graphics APIs such as DirectX, Vulkan, or OpenGL, and experience writing shaders.'),
(5, 'REF-GE529', 'Solid understanding of rendering pipelines, lighting, post-processing, and visual effects.'),
(6, 'REF-GE529', 'Strong mathematical foundation in linear algebra, geometry, and 3D transformations.'),

(7, 'REF-BE317', 'Proficiency in scripting languages such as Python, Bash, or PowerShell, with the ability to automate complex tasks.'),
(8, 'REF-BE317', 'Hands-on experience with CI/CD systems such as Jenkins, GitHub Actions, or TeamCity.'),
(9, 'REF-BE317', 'Strong troubleshooting and diagnostic skills to quickly resolve build and deployment issues.'),

(10, 'REF-NE604', 'Strong knowledge of networking protocols (TCP, UDP, WebSockets) and their use in real-time applications.'),
(11, 'REF-NE604', 'Experience with server architecture, backend services, and scalable infrastructure.'),
(12, 'REF-NE604', 'Ability to debug and optimize network performance, addressing latency, packet loss, and connectivity issues.');

--
-- Table structure for table `job_summary`
--

CREATE TABLE `job_summary` (
  `summary_id` int(11) NOT NULL,
  `ref_num` varchar(9) NOT NULL,
  `job_summary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

INSERT INTO `job_summary` (`summary_id`, `ref_num`, `job_summary`)
VALUES
(1, 'REF-SE842', 'Build core gameplay systems'),
(2, 'REF-SE842', 'Collaborate with design and art teams'),
(3, 'REF-SE842', 'Requires strong coding skills (C++/C#)'),

(4, 'REF-GE529', 'Create rendering and visual effects'),
(5, 'REF-GE529', 'Optimize shaders and performance'),

(6, 'REF-BE317', 'Manage automated build pipelines'),
(7, 'REF-BE317', 'Troubleshoot and streamline CI/CD'),
(8, 'REF-BE317', 'Requires scripting and DevOps skills'),

(9, 'REF-NE604', 'Develop multiplayer features'),
(10, 'REF-NE604', 'Ensure stable, low-latency connections'),
(11, 'REF-NE604', 'Requires networking and server expertise');


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
  ADD KEY (`company_id`),
  ADD KEY `ref_num` (`ref_num`);

--
-- Indexes for table `job_involvement`
--
ALTER TABLE `job_involvement`
  ADD KEY (`involvement_id`),
  ADD KEY `ref_num` (`ref_num`);

--
-- Indexes for table `job_location`
--
ALTER TABLE `job_location`
  ADD KEY (`location_id`),
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
  MODIFY `contribution_id2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
