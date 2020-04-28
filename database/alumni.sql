-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2020 at 01:24 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '$2y$13$biI9lk.DpDqRsiSZSUCRlukGcnI.a62QwrmLzMIwcUwenoMg/YHqC');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(11) NOT NULL,
  `title` int(255) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `duration` int(11) NOT NULL,
  `stipend` int(11) NOT NULL,
  `work_type` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `venue` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `day` int(11) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `organize_name` varchar(256) NOT NULL,
  `organize_contact` bigint(11) NOT NULL,
  `is_publish` int(11) NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `description`, `venue`, `state`, `city`, `day`, `month`, `year`, `organize_name`, `organize_contact`, `is_publish`, `date_posted`) VALUES
(1, 'Campus Reconnect 2020', 'Central University Alumni Association organized the \'Campus Reconnect ,which focused on preparing students on how to deal with real life struggles outside the four walls of the campus, learning from the experiences of alumni of Management Department , named Mr. Manish Gupta  (2017 Batch Pass Out), Consultant at Deloitte Hyderabad and Mr. Ashwin ( 2013 Batch Pass Out), JBM environment Pvt Ltd.', 'Main Seminar Hall , Block D', 'Punjab', 'Bathinda', 4, 'april', 2020, 'Himanshu', 7888626805, 1, '2020-02-26 08:55:48'),
(2, 'TASHAN NITE-2020', 'Central University of Punjab persistently take inimitable steps to lend a hand to the students in expediting the erudition and value addition to their individuality & confidence to further ignite their passion to face day to day challenges more zealously. One of our sole efforts is to provide universal exposure to the students through BFGI\'s Annual International Festival, “TASHAN NITE”. As the name depicts this fest offers motley of colors exhibiting an assortment of traditions all across the globe, folk as well as of up-to-the-minute technology with a pleasurable and fun part added to it. This fest strengthens global bonds among 12,000+ students from 28 Countries and 31 Indian states. CUPB strongly believes that diversity leads to innovation and extends a warm welcome to international students by organizing TASHAN NITE.', 'Lab 5, Inovation Center', 'Punjab', 'Bathinda', 13, 'may', 2020, 'karan', 9056560861, 1, '2020-02-26 10:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `group_chat`
--

CREATE TABLE `group_chat` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_chat`
--

INSERT INTO `group_chat` (`id`, `message`, `name`, `date`) VALUES
(1, 'Hey!! Everyone', 'Alishaloona20@gmail.com', '2020-02-26 08:35:50'),
(2, 'Hlo! whats up?', 'karanloona77@gmail.com', '2020-02-26 08:36:20'),
(3, 'Hey Guys', 'arsharora5@gmail.com', '2020-02-26 08:36:59'),
(4, 'Hlo', 'jasmeen@gmail.com', '2020-02-26 08:40:45'),
(5, 'hlo ', 'dheeraj@gmail.com', '2020-02-26 11:01:15');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `is_publish` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `body`, `is_publish`, `date`) VALUES
(1, 'Guest Lecture by Mr. Ashwin on topic Anti-Money Laundering', 'The event started with lightening of the lamp. Dr. Shweta Sharma, Head Alumni along with Shiv Kumar Triatic, Head and Professor, Executive Director USB Department. And Ms. Sheena Chopra, Assistant Professor USB Department, presented a bouquet to the guest.\r\n\r\nMr. Manish shared his views on the topic “Anti-Money Laundering” and Mr. Ashwin gave his life experience throughout his journey. They also shared their experiences that how they dealt with the problems that they faced immediately after completing their master’s degree. What were the hands-on experiences that they learnt in the industry and what are the expectations of industries from a fresher. The audience seemed highly connected with their interaction.\r\nAt the final stage of the event, the floor was open for the audience and they asked some valuable questions related to industry problems and trouble shoots, career planning and stress management.', 1, '2020-02-26 11:52:55'),
(2, 'Annual General Body Meeting', 'The event started with lightening of the lamp. Dr. Shweta Sharma, Head Alumni along with Shiv Kumar Triatic, Head and Professor, Executive Director USB Department. And Ms. Sheena Chopra, Assistant Professor USB Department, presented a bouquet to the guest.\r\n\r\nMr. Manish shared his views on the topic “Anti-Money Laundering” and Mr. Ashwin gave his life experience throughout his journey. They also shared their experiences that how they dealt with the problems that they faced immediately after completing their master’s degree. What were the hands-on experiences that they learnt in the industry and what are the expectations of industries from a fresher. The audience seemed highly connected with their interaction.\r\nAt the final stage of the event, the floor was open for the audience and they asked some valuable questions related to industry problems and trouble shoots, career planning and stress management.', 1, '2020-02-26 09:41:34'),
(3, 'Asian Excellence Award to CUPB student Tanya Mittal', 'It was another day of achievements for our former students and now an #alumni Tanya Mittal, #TheYoungestMillionaire and #MissAsiaTourismUniverse, who is honored with #AsianExcellenceAward2019 for outstanding individual achievements and distinguished services to the nation from Anti Corruption Foundation of India. Not only this, Tanya was also honored with the National Women Excellence Award 2019 and made it to the top 50 Women Achievers of India.\r\n\r\nCongratulations Tanya.', 1, '2020-02-26 09:41:32'),
(4, 'Interdisciplinary workshop on Environmental Management at CUPB', 'Teaching Learning Centre (TLC) of Central University of Punjab Bathinda (CUPB) conducted two-week national level interdisciplinary workshop on Environmental Management which concluded on Friday. It was aimed at sensitise & engage youngsters to adopt sustainable environmental practices through capacity building. She said, during this workshop, scientists and academicians spread awareness on various aspects of environmental management including application of satellites in environmental management, health impacts of agricultural crop residue burning, environmental application of nanotechnology & transgenic plants, natural resource management, global environmental issues, constitutional laws & environmental protection, the national green tribunal, and hazardous waste management. ', 1, '2020-02-26 09:41:30');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `uid` int(11) NOT NULL,
  `degree` varchar(110) NOT NULL,
  `stream` varchar(110) NOT NULL,
  `from_date` int(11) NOT NULL,
  `to_date` int(11) NOT NULL,
  `current` varchar(110) NOT NULL,
  `job` text NOT NULL,
  `verify` int(11) NOT NULL,
  `date_register` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `first_name`, `last_name`, `mobile`, `email`, `password`, `uid`, `degree`, `stream`, `from_date`, `to_date`, `current`, `job`, `verify`, `date_register`) VALUES
(2, 'karan', 'loona', 7888626805, 'karanloona77@gmail.com', '$2y$13$9/uFPF/wmst3AXsYpiyroepI/.Vpv.24rLl3VYLI8U4uATt.kpiDm', 1872001, 'Btech', 'CSE', 2010, 2014, 'Self Employed', 'Entrepreneur - CEO / Founder AdvanceTemplate', 1, '2020-02-26 12:19:39'),
(3, 'dheeraj', 'kumar', 6280085001, 'dheeraj@gmail.com', '$2y$13$7w3cM0C8PM3Gfn9GKe2kHu71rq8hf1eiPO94nn0vuti..o3lgFfOS', 1872031, 'Becth', 'cse', 2010, 2014, 'Service/Job', 'Google', 1, '2020-02-26 08:40:13'),
(4, 'Jasmeen', 'arora', 9876085471, 'jasmeen@gmail.com', '$2y$13$E0YWDcEQ7OhAo1O6/vJJ2Ofhgv9aRo.U8Q0SFxdAQTw9q9d1i86OG', 1872031, 'Btech', 'Mechanical Engineering', 2006, 2010, 'Student', 'Student at Thapar University', 1, '2020-02-26 08:40:15'),
(5, 'arsh', 'arora', 9876095841, 'arsharora5@gmail.com', '$2y$13$drsBtp6e06NPurwWFKdHTu6Ve/pYJCz72II20iVA834HG6d7f4onu', 1871105, 'BCA', 'Science', 2008, 2011, 'Student', 'Mtech - Cgc Landran', 1, '2020-02-26 07:02:55'),
(6, 'Alisha ', 'Loona', 9056700861, 'Alishaloona20@gmail.com', '$2y$13$YK4lwv17e2kRkvEW42LkWu99WG.nhKa6e0Kd8hpzF2RD7YWnmQs06', 1873205, 'BSC non-med', 'Science', 2007, 2010, 'Service/Job', 'Assistant Professor in GNDU', 1, '2020-02-26 07:57:58'),
(7, 'neha', 'gera', 9854557412, 'neha@gmail.com', '$2y$13$SXXMTUbgEipUFi.VTFQF4exz/bm1kcQDsfp5QCOHYECP0Evmnt9IC', 1872059, 'Btech', 'cse', 2010, 2014, 'Service/Job', 'Google', 0, '2020-02-26 12:12:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_chat`
--
ALTER TABLE `group_chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `group_chat`
--
ALTER TABLE `group_chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
