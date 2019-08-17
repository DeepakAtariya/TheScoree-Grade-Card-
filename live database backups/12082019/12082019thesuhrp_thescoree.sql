-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 12, 2019 at 08:26 AM
-- Server version: 10.1.41-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thesuhrp_thescoree`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `program` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `program`, `code`, `name`) VALUES
(1, 'BCA', 'BCS011', 'Computer Basics and PC Software'),
(2, 'BCA', 'BCS012', 'Mathematics'),
(3, 'BCA', 'BCS031', 'Programming in C++'),
(4, 'BCA', 'BCS040', 'Statistical Techniques'),
(5, 'BCA', 'BCS041', 'Fundamentals of Computer Networks'),
(6, 'BCA', 'BCS042', 'Introduction to Algorithm Design'),
(7, 'BCA', 'BCS051', 'Introduction to Software Engineering'),
(8, 'BCA', 'BCS052', 'Network Programming and Administration'),
(9, 'BCA', 'BCS053', 'Web Programming'),
(10, 'BCA', 'BCS054', 'Computer Oriented Numerical Techniques'),
(11, 'BCA', 'BCS055', 'Business Communication '),
(12, 'BCA', 'BCS062', 'E-Commerce'),
(13, 'BCA', 'BCSL013', 'Computer Basics and PC Software Lab'),
(14, 'BCA', 'BCSL021', 'C Language Programming Lab'),
(15, 'BCA', 'BCSL022', 'Assembly Language Programming Lab'),
(16, 'BCA', 'BCSL032', 'C++ Programming Lab'),
(17, 'BCA', 'BCSL033', 'Data and File Structures Lab'),
(18, 'BCA', 'BCSL034', 'DBMS Lab'),
(19, 'BCA', 'BCSL043', 'Java Programming Lab'),
(20, 'BCA', 'BCSL044', 'Statistical Techniques Lab'),
(21, 'BCA', 'BCSL045', 'Algorithm Design Lab'),
(22, 'BCA', 'BCSL056', 'Network Programming and Administration Lab '),
(23, 'BCA', 'BCSL057', 'Web Programming Lab'),
(24, 'BCA', 'BCSL058', 'Computer Oriented Numerical Techniques Lab'),
(25, 'BCA', 'BCSL063', 'Operating System Concepts and Networking Management Lab'),
(26, 'BCA', 'BCSP064', 'Project'),
(27, 'BCA', 'ECO01', 'Business Organization'),
(28, 'BCA', 'ECO02', 'Accountancy-1'),
(29, 'BCA', 'FEG02', 'Foundation course in English -2'),
(30, 'BCA', 'MCS011', 'Problem Solving and Programming'),
(31, 'BCA', 'MCS012', 'Computer Organization and Assembly Language Programming'),
(32, 'BCA', 'MCS013', 'Discrete Mathematics'),
(33, 'BCA', 'MCS014', 'Systems Analysis and Design'),
(34, 'BCA', 'MCS015', 'Communication Skills '),
(35, 'BCA', 'MCS021', 'Data and File Structures'),
(36, 'BCA', 'MCS022', 'Operating System Concepts and Networking Management'),
(37, 'BCA', 'MCS023', 'Introduction to Database Management Systems'),
(38, 'BCA', 'MCS024', 'Object Oriented Technologies and Java Programming'),
(39, 'BCA', 'MCSL016', 'Internet Concepts and Web Design'),
(40, 'MCA', 'MCS011', 'Problem Solving and Programming'),
(41, 'MCA', 'MCS012', 'Computer Organization and Assembly Language Programming'),
(42, 'MCA', 'MCS013', 'Discrete Mathematics'),
(43, 'MCA', 'MCS014', 'Systems Analysis and Design'),
(44, 'MCA', 'MCS015', 'Communication Skills '),
(45, 'MCA', 'MCSL016', 'Internet Concepts and Web Design'),
(46, 'MCA', 'MCSL017', 'C and Assembly Language Programming Lab'),
(47, 'MCA', 'MCS021', 'Data and File Structures'),
(48, 'MCA', 'MCS022', 'Operating System Concepts and Networking Management'),
(49, 'MCA', 'MCS023', 'Introduction to Database Management Systems'),
(50, 'MCA', 'MCS024', 'Object Oriented Technologies and Java Programming'),
(51, 'MCA', 'MCSL025', 'Lab (Based on MCS-021, 022,023 & 024)'),
(52, 'MCA', 'MCS031', 'Design and Analysis of Algorithms'),
(53, 'MCA', 'MCS032', 'Object Oriented Analysis and Design	'),
(54, 'MCA', 'MCS033', 'Advanced Discrete Mathematics'),
(55, 'MCA', 'MCS034', 'Software Engineering'),
(56, 'MCA', 'MCS035', 'Accountancy and Financial Management'),
(57, 'MCA', 'MCSL036', 'Lab (based on MCS-032, 034 and 035)'),
(58, 'MCA', 'MCS041', 'Operating Systems'),
(59, 'MCA', 'MCS042', 'Data Communication and Computer Networks'),
(60, 'MCA', 'MCS043', 'Advanced Database Management Systems'),
(61, 'MCA', 'MCS044', 'Mini Project'),
(63, 'MCA', 'MCSL045', 'Lab (UNIX & Oracle)'),
(64, 'MCA', 'MCS051', 'Advanced Internet Technologies'),
(65, 'MCA', 'MCS052', 'Principles of Management and Information System'),
(66, 'MCA', 'MCS053', 'Computer Graphics and Multimedia'),
(67, 'MCA', 'MCSL054', 'Lab (based on MCS-051 & 053)'),
(68, 'MCA', 'MCSE003', 'Artificial Intelligence and Knowledge Management'),
(69, 'MCA', 'MCSE004', 'Numerical and Statistical Computing'),
(70, 'MCA', 'MCSE011', 'Parallel Computing'),
(71, 'MCA', 'MCSP060', 'Project\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feedback`, `updated_at`, `created_at`) VALUES
(15, 'Deepak Atariya', 'deepakkumaratariya@gmail.com', 'sad', '2019-07-22 05:15:46', '2019-07-22 05:15:46'),
(16, 'Deepak Atariya', 'deepakkumaratariya@gmail.com', '☺️', '2019-07-22 05:20:37', '2019-07-22 05:20:37'),
(17, 'Deepak Atariya', 'deepakkumaratariya@gmail.com', 'Thank you', '2019-07-22 05:56:40', '2019-07-22 05:56:40');

-- --------------------------------------------------------

--
-- Table structure for table `notes__courses`
--

CREATE TABLE `notes__courses` (
  `id` int(10) NOT NULL,
  `program_id` int(10) NOT NULL,
  `course_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notes__courses`
--

INSERT INTO `notes__courses` (`id`, `program_id`, `course_code`, `course_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'BCS011', 'Computer Basics and PC Software', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 'BCS012', 'Mathematics', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 'BCS031', 'Programming in C++', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 'BCS040', 'Statistical Techniques', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 1, 'BCS041', 'Fundamentals of Computer Networks', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 1, 'BCS042', 'Introduction to Algorithm Design', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 1, 'BCS051', 'Introduction to Software Engineering', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 1, 'BCS052', 'Network Programming and Administration', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 1, 'BCS053', 'Web Programming', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 1, 'BCS054', 'Computer Oriented Numerical Techniques', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 1, 'BCS055', 'Business Communication ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 1, 'BCS062', 'E-Commerce', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 1, 'BCSL013', 'Computer Basics and PC Software Lab', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 1, 'BCSL021', 'C Language Programming Lab', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 1, 'BCSL022', 'Assembly Language Programming Lab', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 1, 'BCSL032', 'C++ Programming Lab', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 1, 'BCSL033', 'Data and File Structures Lab', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 1, 'BCSL034', 'DBMS Lab', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 1, 'BCSL043', 'Java Programming Lab', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 1, 'BCSL044', 'Statistical Techniques Lab', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 1, 'BCSL045', 'Algorithm Design Lab', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 1, 'BCSL056', 'Network Programming and Administration Lab ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 1, 'BCSL057', 'Web Programming Lab', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 1, 'BCSL058', 'Computer Oriented Numerical Techniques Lab', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 1, 'BCSL063', 'Operating System Concepts and Networking Management Lab', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 1, 'BCSP064', 'Project', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 1, 'ECO01', 'Business Organization', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 1, 'ECO02', 'Accountancy-1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 1, 'FEG02', 'Foundation course in English -2', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 1, 'MCS011', 'Problem Solving and Programming', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 1, 'MCS012', 'Computer Organization and Assembly Language Programming', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 1, 'MCS013', 'Discrete Mathematics', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 1, 'MCS014', 'Systems Analysis and Design', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 1, 'MCS015', 'Communication Skills ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 1, 'MCS021', 'Data and File Structures', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 1, 'MCS022', 'Operating System Concepts and Networking Management', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 1, 'MCS023', 'Introduction to Database Management Systems', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 1, 'MCS024', 'Object Oriented Technologies and Java Programming', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 1, 'MCSL016', 'Internet Concepts and Web Design', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 2, 'MCS011', 'Problem Solving and Programming', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 2, 'MCS012', 'Computer Organization and Assembly Language Programming', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 2, 'MCS013', 'Discrete Mathematics', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 2, 'MCS014', 'Systems Analysis and Design', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 2, 'MCS015', 'Communication Skills ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 2, 'MCSL016', 'Internet Concepts and Web Design', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 2, 'MCSL017', 'C and Assembly Language Programming Lab', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 2, 'MCS021', 'Data and File Structures', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 2, 'MCS022', 'Operating System Concepts and Networking Management', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 2, 'MCS023', 'Introduction to Database Management Systems', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 2, 'MCS024', 'Object Oriented Technologies and Java Programming', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 2, 'MCSL025', 'Lab (Based on MCS-021, 022,023 & 024)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 2, 'MCS031', 'Design and Analysis of Algorithms', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 2, 'MCS032', 'Object Oriented Analysis and Design	', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 2, 'MCS033', 'Advanced Discrete Mathematics', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 2, 'MCS034', 'Software Engineering', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 2, 'MCS035', 'Accountancy and Financial Management', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 2, 'MCSL036', 'Lab (based on MCS-032, 034 and 035)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 2, 'MCS041', 'Operating Systems', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 2, 'MCS042', 'Data Communication and Computer Networks', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 2, 'MCS043', 'Advanced Database Management Systems', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 2, 'MCS044', 'Mini Project', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 2, 'MCSL045', 'Lab (UNIX & Oracle)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 2, 'MCS051', 'Advanced Internet Technologies', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 2, 'MCS052', 'Principles of Management and Information System', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 2, 'MCS053', 'Computer Graphics and Multimedia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 2, 'MCSL054', 'Lab (based on MCS-051 & 053)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 2, 'MCSE003', 'Artificial Intelligence and Knowledge Management', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 2, 'MCSE004', 'Numerical and Statistical Computing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 2, 'MCSE011', 'Parallel Computing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 2, 'MCSP060', 'Project ', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `notes__programs`
--

CREATE TABLE `notes__programs` (
  `id` int(10) NOT NULL,
  `program_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_fullform` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notes__programs`
--

INSERT INTO `notes__programs` (`id`, `program_code`, `program_fullform`, `created_at`, `updated_at`) VALUES
(1, 'BCA', 'Bachelor of Computer Application', NULL, NULL),
(2, 'MCA', 'Master of Computer Application', NULL, NULL),
(6, 'MEG', 'Masters in English honours', NULL, NULL),
(7, 'MEC', 'Master of Arts (Economics)', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notes__units`
--

CREATE TABLE `notes__units` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) NOT NULL DEFAULT '0',
  `unit_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_application` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_importantQuestions` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_reference` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_author_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_author_email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `id` int(10) UNSIGNED NOT NULL,
  `student` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `asgn1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lab1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lab2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lab3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lab4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `theory` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `program` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`id`, `student`, `course_code`, `asgn1`, `lab1`, `lab2`, `lab3`, `lab4`, `theory`, `total`, `status`, `program`, `name`, `created_at`, `updated_at`) VALUES
(10370, '155478956', 'MCS031', '75', '#', '#', '#', '#', '43', 51, 'Completed', 'MCA', 'SHRINKHLA SHIROMANI', NULL, NULL),
(10371, '155478956', 'MCS032', '80', '#', '#', '#', '#', '62', 67, 'Completed', 'MCA', 'SHRINKHLA SHIROMANI', NULL, NULL),
(10372, '155478956', 'MCS033', '52', '#', '#', '#', '#', '52', 52, 'Completed', 'MCA', 'SHRINKHLA SHIROMANI', NULL, NULL),
(10373, '155478956', 'MCS034', '75', '#', '#', '#', '#', '47', 54, 'Completed', 'MCA', 'SHRINKHLA SHIROMANI', NULL, NULL),
(10374, '155478956', 'MCS035', '82', '#', '#', '#', '#', '21', 37, 'Not Completed', 'MCA', 'SHRINKHLA SHIROMANI', NULL, NULL),
(10375, '155478956', 'MCSL036', '92', '50', '60', '88', '-', '#', 73, 'Completed', 'MCA', 'SHRINKHLA SHIROMANI', NULL, NULL),
(11193, '168126512', 'MCS031', '88', '#', '#', '#', '#', '40', 52, 'Completed', 'MCA', 'MANDEEP KAUR BANSAL', '2019-07-17 04:31:59', '2019-07-17 04:31:59'),
(11194, '168126512', 'MCS032', '88', '#', '#', '#', '#', '14', 33, 'Not Completed', 'MCA', 'MANDEEP KAUR BANSAL', '2019-07-17 04:31:59', '2019-07-17 04:31:59'),
(11195, '168126512', 'MCS033', '86', '#', '#', '#', '#', '22', 38, 'Not Completed', 'MCA', 'MANDEEP KAUR BANSAL', '2019-07-17 04:31:59', '2019-07-17 04:31:59'),
(11196, '168126512', 'MCS034', '90', '#', '#', '#', '#', '19', 37, 'Not Completed', 'MCA', 'MANDEEP KAUR BANSAL', '2019-07-17 04:31:59', '2019-07-17 04:31:59'),
(11197, '168126512', 'MCS035', '88', '#', '#', '#', '#', '59', 67, 'Completed', 'MCA', 'MANDEEP KAUR BANSAL', '2019-07-17 04:31:59', '2019-07-17 04:31:59'),
(11199, '168126512', 'MCSL017', '88', '52', '64', '-', '-', '#', 66, 'Completed', 'MCA', 'MANDEEP KAUR BANSAL', '2019-07-17 04:31:59', '2019-07-17 04:31:59'),
(11200, '168126512', 'MCSL025', '79', '76', '72', '72', '56', '#', 72, 'Completed', 'MCA', 'MANDEEP KAUR BANSAL', '2019-07-17 04:31:59', '2019-07-17 04:31:59'),
(11201, '168126512', 'MCSL036', '86', '73', '17', '58', '-', '#', 59, 'Not Completed', 'MCA', 'MANDEEP KAUR BANSAL', '2019-07-17 04:31:59', '2019-07-17 04:31:59'),
(11441, '145349573', 'MCS031', '88', '#', '#', '#', '#', '45', 56, 'Completed', 'MCA', 'MANDAL NITIN BASUDEO', '2019-07-17 14:06:15', '2019-07-17 14:06:15'),
(11442, '145349573', 'MCS032', '84', '#', '#', '#', '#', '50', 59, 'Completed', 'MCA', 'MANDAL NITIN BASUDEO', '2019-07-17 14:06:15', '2019-07-17 14:06:15'),
(11443, '145349573', 'MCS033', '82', '#', '#', '#', '#', '46', 55, 'Completed', 'MCA', 'MANDAL NITIN BASUDEO', '2019-07-17 14:06:15', '2019-07-17 14:06:15'),
(11444, '145349573', 'MCS034', '88', '#', '#', '#', '#', '34', 48, 'Not Completed', 'MCA', 'MANDAL NITIN BASUDEO', '2019-07-17 14:06:15', '2019-07-17 14:06:15'),
(11445, '145349573', 'MCS035', '87', '#', '#', '#', '#', '4', 25, 'Not Completed', 'MCA', 'MANDAL NITIN BASUDEO', '2019-07-17 14:06:15', '2019-07-17 14:06:15'),
(11446, '145349573', 'MCSL036', '88', '87', '87', '58', '-', '#', 80, 'Completed', 'MCA', 'MANDAL NITIN BASUDEO', '2019-07-17 14:06:15', '2019-07-17 14:06:15'),
(12320, '155451113', 'MCS031', '80', '#', '#', '#', '#', '-', 20, 'Not Completed', 'MCA', 'KAJAL JAIN', '2019-07-17 18:56:35', '2019-07-17 18:56:35'),
(12321, '155451113', 'MCS032', '80', '#', '#', '#', '#', '51', 59, 'Completed', 'MCA', 'KAJAL JAIN', '2019-07-17 18:56:35', '2019-07-17 18:56:35'),
(12322, '155451113', 'MCS033', '80', '#', '#', '#', '#', '40', 50, 'Completed', 'MCA', 'KAJAL JAIN', '2019-07-17 18:56:35', '2019-07-17 18:56:35'),
(12323, '155451113', 'MCS034', '82', '#', '#', '#', '#', '55', 62, 'Completed', 'MCA', 'KAJAL JAIN', '2019-07-17 18:56:35', '2019-07-17 18:56:35'),
(12324, '155451113', 'MCS035', '80', '#', '#', '#', '#', '47', 56, 'Completed', 'MCA', 'KAJAL JAIN', '2019-07-17 18:56:35', '2019-07-17 18:56:35'),
(12325, '155451113', 'MCSL036', '80', '77', '67', '58', '-', '#', 71, 'Completed', 'MCA', 'KAJAL JAIN', '2019-07-17 18:56:35', '2019-07-17 18:56:35'),
(12374, '172518310', 'MCS031', '86', '#', '#', '#', '#', '41', 53, 'Completed', 'MCA', 'DIVYA', '2019-07-17 18:58:44', '2019-07-17 18:58:44'),
(12375, '172518310', 'MCS032', '88', '#', '#', '#', '#', '54', 63, 'Completed', 'MCA', 'DIVYA', '2019-07-17 18:58:44', '2019-07-17 18:58:44'),
(12376, '172518310', 'MCS033', '90', '#', '#', '#', '#', '42', 54, 'Completed', 'MCA', 'DIVYA', '2019-07-17 18:58:44', '2019-07-17 18:58:44'),
(12377, '172518310', 'MCS034', '81', '#', '#', '#', '#', '64', 69, 'Completed', 'MCA', 'DIVYA', '2019-07-17 18:58:44', '2019-07-17 18:58:44'),
(12378, '172518310', 'MCS035', '86', '#', '#', '#', '#', '67', 72, 'Completed', 'MCA', 'DIVYA', '2019-07-17 18:58:44', '2019-07-17 18:58:44'),
(12379, '172518310', 'MCS041', '89', '#', '#', '#', '#', '45', 56, 'Completed', 'MCA', 'DIVYA', '2019-07-17 18:58:44', '2019-07-17 18:58:44'),
(12380, '172518310', 'MCS042', '88', '#', '#', '#', '#', '43', 55, 'Completed', 'MCA', 'DIVYA', '2019-07-17 18:58:44', '2019-07-17 18:58:44'),
(12381, '172518310', 'MCS043', '90', '#', '#', '#', '#', '52', 62, 'Completed', 'MCA', 'DIVYA', '2019-07-17 18:58:44', '2019-07-17 18:58:44'),
(12382, '172518310', 'MCS044', '87', '#', '#', '#', '70', '60', 72, 'Completed', 'MCA', 'DIVYA', '2019-07-17 18:58:44', '2019-07-17 18:58:44'),
(12384, '172518310', 'MCSL017', '90', '52', '92', '-', '-', '#', 77, 'Completed', 'MCA', 'DIVYA', '2019-07-17 18:58:44', '2019-07-17 18:58:44'),
(12385, '172518310', 'MCSL025', '88', '-', '-', '-', '-', '#', 22, 'Not Completed', 'MCA', 'DIVYA', '2019-07-17 18:58:44', '2019-07-17 18:58:44'),
(12386, '172518310', 'MCSL036', '84', '67', '63', '75', '-', '#', 73, 'Completed', 'MCA', 'DIVYA', '2019-07-17 18:58:44', '2019-07-17 18:58:44'),
(12387, '172518310', 'MCSL045', '88', '60', '88', '-', '-', '#', 78, 'Completed', 'MCA', 'DIVYA', '2019-07-17 18:58:44', '2019-07-17 18:58:44'),
(12517, '155462020', 'MCS031', '86', '#', '#', '#', '#', '24', 40, 'Not Completed', 'MCA', 'KAMAL GUPTA', '2019-07-17 19:06:10', '2019-07-17 19:06:10'),
(12518, '155462020', 'MCS032', '71', '#', '#', '#', '#', '40', 48, 'Completed', 'MCA', 'KAMAL GUPTA', '2019-07-17 19:06:10', '2019-07-17 19:06:10'),
(12519, '155462020', 'MCS033', '77', '#', '#', '#', '#', '64', 68, 'Completed', 'MCA', 'KAMAL GUPTA', '2019-07-17 19:06:10', '2019-07-17 19:06:10'),
(12520, '155462020', 'MCS034', '77', '#', '#', '#', '#', '-', 20, 'Not Completed', 'MCA', 'KAMAL GUPTA', '2019-07-17 19:06:10', '2019-07-17 19:06:10'),
(12521, '155462020', 'MCS035', '77', '#', '#', '#', '#', '52', 59, 'Completed', 'MCA', 'KAMAL GUPTA', '2019-07-17 19:06:10', '2019-07-17 19:06:10'),
(12522, '155462020', 'MCSL036', '82', '67', '60', '55', '-', '#', 66, 'Completed', 'MCA', 'KAMAL GUPTA', '2019-07-17 19:06:10', '2019-07-17 19:06:10'),
(12844, '175252281', 'MCS031', '83', '#', '#', '#', '#', '-', 21, 'Not Completed', 'MCA', 'RAKESH KUMAR', '2019-07-18 02:57:22', '2019-07-18 02:57:22'),
(12845, '175252281', 'MCS032', '82', '#', '#', '#', '#', '-', 21, 'Not Completed', 'MCA', 'RAKESH KUMAR', '2019-07-18 02:57:22', '2019-07-18 02:57:22'),
(12846, '175252281', 'MCS033', '84', '#', '#', '#', '#', '56', 64, 'Completed', 'MCA', 'RAKESH KUMAR', '2019-07-18 02:57:22', '2019-07-18 02:57:22'),
(12847, '175252281', 'MCS034', '88', '#', '#', '#', '#', '35', 49, 'Not Completed', 'MCA', 'RAKESH KUMAR', '2019-07-18 02:57:22', '2019-07-18 02:57:22'),
(12848, '175252281', 'MCS035', '89', '#', '#', '#', '#', '10', 30, 'Not Completed', 'MCA', 'RAKESH KUMAR', '2019-07-18 02:57:22', '2019-07-18 02:57:22'),
(12850, '175252281', 'MCSL017', '83', '100', '96', '-', '-', '#', 95, 'Completed', 'MCA', 'RAKESH KUMAR', '2019-07-18 02:57:22', '2019-07-18 02:57:22'),
(12851, '175252281', 'MCSL025', '83', '64', '48', '52', '52', '#', 62, 'Completed', 'MCA', 'RAKESH KUMAR', '2019-07-18 02:57:22', '2019-07-18 02:57:22'),
(12852, '175252281', 'MCSL036', '84', '-', '-', '-', '-', '#', 21, 'Not Completed', 'MCA', 'RAKESH KUMAR', '2019-07-18 02:57:22', '2019-07-18 02:57:22'),
(12892, '111011738', 'MCS031', '89', '#', '#', '#', '#', '60', 68, 'Completed', 'MCA', 'HITESH SADANA', '2019-07-18 07:50:03', '2019-07-18 07:50:03'),
(12893, '111011738', 'MCS032', '89', '#', '#', '#', '#', '44', 56, 'Completed', 'MCA', 'HITESH SADANA', '2019-07-18 07:50:03', '2019-07-18 07:50:03'),
(12894, '111011738', 'MCS033', '88', '#', '#', '#', '#', '50', 60, 'Completed', 'MCA', 'HITESH SADANA', '2019-07-18 07:50:03', '2019-07-18 07:50:03'),
(12895, '111011738', 'MCS034', '89', '#', '#', '#', '#', '46', 57, 'Completed', 'MCA', 'HITESH SADANA', '2019-07-18 07:50:03', '2019-07-18 07:50:03'),
(12896, '111011738', 'MCS035', '89', '#', '#', '#', '#', '50', 60, 'Completed', 'MCA', 'HITESH SADANA', '2019-07-18 07:50:03', '2019-07-18 07:50:03'),
(12897, '111011738', 'MCS041', '87', '#', '#', '#', '#', '58', 66, 'Completed', 'MCA', 'HITESH SADANA', '2019-07-18 07:50:03', '2019-07-18 07:50:03'),
(12898, '111011738', 'MCS042', '85', '#', '#', '#', '#', '50', 59, 'Completed', 'MCA', 'HITESH SADANA', '2019-07-18 07:50:03', '2019-07-18 07:50:03'),
(12899, '111011738', 'MCS043', '89', '#', '#', '#', '#', '50', 60, 'Completed', 'MCA', 'HITESH SADANA', '2019-07-18 07:50:03', '2019-07-18 07:50:03'),
(12900, '111011738', 'MCS044', '86', '#', '#', '#', '90', '88', 89, 'Completed', 'MCA', 'HITESH SADANA', '2019-07-18 07:50:03', '2019-07-18 07:50:03'),
(12901, '111011738', 'MCS051', '80', '#', '#', '#', '#', '41', 51, 'Completed', 'MCA', 'HITESH SADANA', '2019-07-18 07:50:03', '2019-07-18 07:50:03'),
(12902, '111011738', 'MCS052', '85', '#', '#', '#', '#', '50', 59, 'Completed', 'MCA', 'HITESH SADANA', '2019-07-18 07:50:03', '2019-07-18 07:50:03'),
(12903, '111011738', 'MCS053', '86', '#', '#', '#', '#', '51', 60, 'Completed', 'MCA', 'HITESH SADANA', '2019-07-18 07:50:03', '2019-07-18 07:50:03'),
(12904, '111011738', 'MCSE003', '89', '#', '#', '#', '#', '49', 59, 'Completed', 'MCA', 'HITESH SADANA', '2019-07-18 07:50:03', '2019-07-18 07:50:03'),
(12905, '111011738', 'MCSE004', '87', '#', '#', '#', '#', '50', 60, 'Completed', 'MCA', 'HITESH SADANA', '2019-07-18 07:50:03', '2019-07-18 07:50:03'),
(12906, '111011738', 'MCSE011', '90', '#', '#', '#', '#', '42', 54, 'Completed', 'MCA', 'HITESH SADANA', '2019-07-18 07:50:03', '2019-07-18 07:50:03'),
(12907, '111011738', 'MCSL036', '88', '67', '87', '75', '-', '#', 80, 'Completed', 'MCA', 'HITESH SADANA', '2019-07-18 07:50:03', '2019-07-18 07:50:03'),
(12908, '111011738', 'MCSL045', '87', '52', '56', '-', '-', '#', 63, 'Completed', 'MCA', 'HITESH SADANA', '2019-07-18 07:50:03', '2019-07-18 07:50:03'),
(12909, '111011738', 'MCSL054', '90', '48', '40', '-', '-', '#', 56, 'Completed', 'MCA', 'HITESH SADANA', '2019-07-18 07:50:03', '2019-07-18 07:50:03'),
(12910, '111011738', 'MCSP060', '-', '#', '#', '#', '109', '31', 105, 'Completed', 'MCA', 'HITESH SADANA', '2019-07-18 07:50:03', '2019-07-18 07:50:03'),
(12911, '073572720', 'MCS031', '85', '#', '#', '#', '#', '40', 52, 'Completed', 'MCA', 'BALDEEP SINGH', '2019-07-19 01:51:51', '2019-07-19 01:51:51'),
(12912, '073572720', 'MCS032', '80', '#', '#', '#', '#', '40', 50, 'Completed', 'MCA', 'BALDEEP SINGH', '2019-07-19 01:51:51', '2019-07-19 01:51:51'),
(12913, '073572720', 'MCS033', '82', '#', '#', '#', '#', '40', 51, 'Completed', 'MCA', 'BALDEEP SINGH', '2019-07-19 01:51:51', '2019-07-19 01:51:51'),
(12914, '073572720', 'MCS034', '83', '#', '#', '#', '#', '50', 59, 'Completed', 'MCA', 'BALDEEP SINGH', '2019-07-19 01:51:51', '2019-07-19 01:51:51'),
(12915, '073572720', 'MCS035', '80', '#', '#', '#', '#', '40', 50, 'Completed', 'MCA', 'BALDEEP SINGH', '2019-07-19 01:51:51', '2019-07-19 01:51:51'),
(12916, '073572720', 'MCS041', '75', '#', '#', '#', '#', '20', 34, 'Not Completed', 'MCA', 'BALDEEP SINGH', '2019-07-19 01:51:51', '2019-07-19 01:51:51'),
(12917, '073572720', 'MCS042', '80', '#', '#', '#', '#', '40', 50, 'Completed', 'MCA', 'BALDEEP SINGH', '2019-07-19 01:51:51', '2019-07-19 01:51:51'),
(12918, '073572720', 'MCS043', '72', '#', '#', '#', '#', '19', 33, 'Not Completed', 'MCA', 'BALDEEP SINGH', '2019-07-19 01:51:51', '2019-07-19 01:51:51'),
(12919, '073572720', 'MCS044', '78', '#', '#', '#', '74', '76', 76, 'Completed', 'MCA', 'BALDEEP SINGH', '2019-07-19 01:51:51', '2019-07-19 01:51:51'),
(12920, '073572720', 'MCS051', '80', '#', '#', '#', '#', '16', 32, 'Not Completed', 'MCA', 'BALDEEP SINGH', '2019-07-19 01:51:51', '2019-07-19 01:51:51'),
(12921, '073572720', 'MCS052', '80', '#', '#', '#', '#', '44', 53, 'Completed', 'MCA', 'BALDEEP SINGH', '2019-07-19 01:51:51', '2019-07-19 01:51:51'),
(12922, '073572720', 'MCS053', '78', '#', '#', '#', '#', '17', 33, 'Not Completed', 'MCA', 'BALDEEP SINGH', '2019-07-19 01:51:51', '2019-07-19 01:51:51'),
(12923, '073572720', 'MCSE003', '76', '#', '#', '#', '#', '12', 28, 'Not Completed', 'MCA', 'BALDEEP SINGH', '2019-07-19 01:51:51', '2019-07-19 01:51:51'),
(12924, '073572720', 'MCSE004', '78', '#', '#', '#', '#', '-', 20, 'Not Completed', 'MCA', 'BALDEEP SINGH', '2019-07-19 01:51:51', '2019-07-19 01:51:51'),
(12925, '073572720', 'MCSE011', '80', '#', '#', '#', '#', '11', 29, 'Not Completed', 'MCA', 'BALDEEP SINGH', '2019-07-19 01:51:51', '2019-07-19 01:51:51'),
(12926, '073572720', 'MCSL036', '80', '7', '10', '10', '-', '#', 27, 'Not Completed', 'MCA', 'BALDEEP SINGH', '2019-07-19 01:51:51', '2019-07-19 01:51:51'),
(12927, '073572720', 'MCSL045', '78', '12', '8', '-', '-', '#', 27, 'Not Completed', 'MCA', 'BALDEEP SINGH', '2019-07-19 01:51:51', '2019-07-19 01:51:51'),
(12928, '073572720', 'MCSL054', '78', '8', '24', '-', '-', '#', 32, 'Not Completed', 'MCA', 'BALDEEP SINGH', '2019-07-19 01:51:51', '2019-07-19 01:51:51'),
(12929, '073572720', 'MCSP060', '-', '#', '#', '#', '80', '27', 81, 'Completed', 'MCA', 'BALDEEP SINGH', '2019-07-19 01:51:51', '2019-07-19 01:51:51'),
(12957, '111011738', 'BCS61', '80', '73', '-', '-', '60', '67', 125, 'Completed', 'BCA', 'HITESH SADANA', '2019-07-19 04:48:21', '2019-07-19 04:48:21'),
(12958, '111011738', 'BSHF1', '80', '80', '-', '-', '75', '-', 80, 'Completed', 'BCA', 'HITESH SADANA', '2019-07-19 04:48:21', '2019-07-19 04:48:21'),
(12959, '111011738', 'CS5', '80', '73', '-', '-', '67', '-', 75, 'Completed', 'BCA', 'HITESH SADANA', '2019-07-19 04:48:21', '2019-07-19 04:48:21'),
(12960, '111011738', 'CS6', '80', '87', '-', '-', '48', '-', 86, 'Completed', 'BCA', 'HITESH SADANA', '2019-07-19 04:48:21', '2019-07-19 04:48:21'),
(12961, '111011738', 'CS60', '80', '80', '-', '-', '57', '-', 80, 'Completed', 'BCA', 'HITESH SADANA', '2019-07-19 04:48:21', '2019-07-19 04:48:21'),
(12962, '111011738', 'CS610', '90', '87', '-', '-', '52', '-', 88, 'Completed', 'BCA', 'HITESH SADANA', '2019-07-19 04:48:21', '2019-07-19 04:48:21'),
(12963, '111011738', 'CS611', '80', '73', '-', '-', '40', '57', 118, 'Completed', 'BCA', 'HITESH SADANA', '2019-07-19 04:48:21', '2019-07-19 04:48:21'),
(12964, '111011738', 'CS612', '80', '73', '-', '-', '40', '-', 75, 'Completed', 'BCA', 'HITESH SADANA', '2019-07-19 04:48:21', '2019-07-19 04:48:21'),
(12965, '111011738', 'CS62', '80', '73', '-', '-', '57', '54', 116, 'Completed', 'BCA', 'HITESH SADANA', '2019-07-19 04:48:21', '2019-07-19 04:48:21'),
(12966, '111011738', 'CS63', '70', '73', '-', '-', '52', '98', 146, 'Completed', 'BCA', 'HITESH SADANA', '2019-07-19 04:48:21', '2019-07-19 04:48:21'),
(12967, '111011738', 'CS64', '80', '80', '-', '-', '47', '-', 80, 'Completed', 'BCA', 'HITESH SADANA', '2019-07-19 04:48:21', '2019-07-19 04:48:21'),
(12968, '111011738', 'CS65', '80', '73', '-', '-', '-', '60', 120, 'Completed', 'BCA', 'HITESH SADANA', '2019-07-19 04:48:21', '2019-07-19 04:48:21'),
(12969, '111011738', 'CS66', '90', '87', '-', '-', '53', '-', 88, 'Completed', 'BCA', 'HITESH SADANA', '2019-07-19 04:48:21', '2019-07-19 04:48:21'),
(12970, '111011738', 'CS67', '100', '93', '-', '-', '-', '64', 143, 'Completed', 'BCA', 'HITESH SADANA', '2019-07-19 04:48:21', '2019-07-19 04:48:21'),
(12971, '111011738', 'CS68', '80', '73', '-', '-', '40', '80', 135, 'Completed', 'BCA', 'HITESH SADANA', '2019-07-19 04:48:21', '2019-07-19 04:48:21'),
(12972, '111011738', 'CS70', '80', '80', '-', '-', '61', '-', 80, 'Completed', 'BCA', 'HITESH SADANA', '2019-07-19 04:48:21', '2019-07-19 04:48:21'),
(12973, '111011738', 'CS71', '80', '80', '-', '-', '41', '-', 80, 'Completed', 'BCA', 'HITESH SADANA', '2019-07-19 04:48:21', '2019-07-19 04:48:21'),
(12974, '111011738', 'CS72', '60', '67', '-', '-', '45', '88', 132, 'Completed', 'BCA', 'HITESH SADANA', '2019-07-19 04:48:21', '2019-07-19 04:48:21'),
(12975, '111011738', 'CS73', '60', '60', '-', '-', '44', '-', 60, 'Completed', 'BCA', 'HITESH SADANA', '2019-07-19 04:48:21', '2019-07-19 04:48:21'),
(12976, '111011738', 'CS74', '60', '67', '-', '-', '45', '47', 101, 'Completed', 'BCA', 'HITESH SADANA', '2019-07-19 04:48:21', '2019-07-19 04:48:21'),
(12977, '111011738', 'CS75', '60', '67', '-', '-', '53', '-', 66, 'Completed', 'BCA', 'HITESH SADANA', '2019-07-19 04:48:21', '2019-07-19 04:48:21'),
(12978, '111011738', 'CS76', '-', '-', '-', '-', '101', '41', 107, 'Completed', 'BCA', 'HITESH SADANA', '2019-07-19 04:48:21', '2019-07-19 04:48:21'),
(12979, '111011738', 'FST1', '84', '84', '-', '-', '51', '-', 84, 'Completed', 'BCA', 'HITESH SADANA', '2019-07-19 04:48:21', '2019-07-19 04:48:21'),
(12980, '155415590', 'MCS031', '88', '#', '#', '#', '#', '53', 62, 'Completed', 'MCA', 'VANSHMANI KUMAR', '2019-07-19 09:44:58', '2019-07-19 09:44:58'),
(12981, '155415590', 'MCS032', '89', '#', '#', '#', '#', '35', 49, 'Not Completed', 'MCA', 'VANSHMANI KUMAR', '2019-07-19 09:44:58', '2019-07-19 09:44:58'),
(12982, '155415590', 'MCS033', '87', '#', '#', '#', '#', '18', 36, 'Not Completed', 'MCA', 'VANSHMANI KUMAR', '2019-07-19 09:44:58', '2019-07-19 09:44:58'),
(12983, '155415590', 'MCS034', '91', '#', '#', '#', '#', '40', 53, 'Completed', 'MCA', 'VANSHMANI KUMAR', '2019-07-19 09:44:58', '2019-07-19 09:44:58'),
(12984, '155415590', 'MCS035', '86', '#', '#', '#', '#', '43', 54, 'Completed', 'MCA', 'VANSHMANI KUMAR', '2019-07-19 09:44:58', '2019-07-19 09:44:58'),
(12985, '155415590', 'MCSL036', '85', '50', '50', '63', '-', '#', 62, 'Completed', 'MCA', 'VANSHMANI KUMAR', '2019-07-19 09:44:58', '2019-07-19 09:44:58'),
(13161, '175282736', 'MCS031', '85', '#', '#', '#', '#', '30', 44, 'Not Completed', 'MCA', 'POOJA RAWAT', '2019-07-21 17:17:45', '2019-07-21 17:17:45'),
(13162, '175282736', 'MCS032', '86', '#', '#', '#', '#', '24', 40, 'Not Completed', 'MCA', 'POOJA RAWAT', '2019-07-21 17:17:45', '2019-07-21 17:17:45'),
(13163, '175282736', 'MCS033', '83', '#', '#', '#', '#', '40', 51, 'Completed', 'MCA', 'POOJA RAWAT', '2019-07-21 17:17:45', '2019-07-21 17:17:45'),
(13164, '175282736', 'MCS034', '85', '#', '#', '#', '#', '22', 38, 'Not Completed', 'MCA', 'POOJA RAWAT', '2019-07-21 17:17:45', '2019-07-21 17:17:45'),
(13165, '175282736', 'MCS035', '84', '#', '#', '#', '#', '45', 55, 'Completed', 'MCA', 'POOJA RAWAT', '2019-07-21 17:17:45', '2019-07-21 17:17:45'),
(13167, '175282736', 'MCSL017', '85', '4', '4', '-', '-', '#', 25, 'Not Completed', 'MCA', 'POOJA RAWAT', '2019-07-21 17:17:45', '2019-07-21 17:17:45'),
(13168, '175282736', 'MCSL025', '78', '-', '-', '-', '-', '#', 20, 'Not Completed', 'MCA', 'POOJA RAWAT', '2019-07-21 17:17:45', '2019-07-21 17:17:45'),
(13169, '175282736', 'MCSL036', '83', '53', '63', '53', '-', '#', 63, 'Completed', 'MCA', 'POOJA RAWAT', '2019-07-21 17:17:45', '2019-07-21 17:17:45'),
(13170, '155407775', 'MCS031', '83', '#', '#', '#', '#', '23', 38, 'Not Completed', 'MCA', 'MOHD SHAKIR', '2019-07-21 18:12:06', '2019-07-21 18:12:06'),
(13171, '155407775', 'MCS032', '86', '#', '#', '#', '#', '31', 45, 'Not Completed', 'MCA', 'MOHD SHAKIR', '2019-07-21 18:12:06', '2019-07-21 18:12:06'),
(13172, '155407775', 'MCS033', '82', '#', '#', '#', '#', '8', 27, 'Not Completed', 'MCA', 'MOHD SHAKIR', '2019-07-21 18:12:06', '2019-07-21 18:12:06'),
(13173, '155407775', 'MCS034', '84', '#', '#', '#', '#', '27', 42, 'Not Completed', 'MCA', 'MOHD SHAKIR', '2019-07-21 18:12:06', '2019-07-21 18:12:06'),
(13174, '155407775', 'MCS035', '87', '#', '#', '#', '#', '40', 52, 'Completed', 'MCA', 'MOHD SHAKIR', '2019-07-21 18:12:06', '2019-07-21 18:12:06'),
(13175, '155407775', 'MCSL036', '88', '57', '50', '55', '-', '#', 63, 'Completed', 'MCA', 'MOHD SHAKIR', '2019-07-21 18:12:06', '2019-07-21 18:12:06'),
(13223, '170316792', 'MCS031', '83', '#', '#', '#', '#', '26', 41, 'Not Completed', 'MCA', 'RAJNEESH MISHRA', '2019-07-23 10:41:38', '2019-07-23 10:41:38'),
(13224, '170316792', 'MCS032', '81', '#', '#', '#', '#', '33', 45, 'Not Completed', 'MCA', 'RAJNEESH MISHRA', '2019-07-23 10:41:38', '2019-07-23 10:41:38'),
(13225, '170316792', 'MCS033', '84', '#', '#', '#', '#', '50', 59, 'Completed', 'MCA', 'RAJNEESH MISHRA', '2019-07-23 10:41:38', '2019-07-23 10:41:38'),
(13226, '170316792', 'MCS034', '82', '#', '#', '#', '#', '13', 31, 'Not Completed', 'MCA', 'RAJNEESH MISHRA', '2019-07-23 10:41:38', '2019-07-23 10:41:38'),
(13227, '170316792', 'MCS035', '85', '#', '#', '#', '#', '19', 36, 'Not Completed', 'MCA', 'RAJNEESH MISHRA', '2019-07-23 10:41:38', '2019-07-23 10:41:38'),
(13228, '170316792', 'MCS041', '-', '#', '#', '#', '#', '6', 5, 'Not Completed', 'MCA', 'RAJNEESH MISHRA', '2019-07-23 10:41:38', '2019-07-23 10:41:38'),
(13229, '170316792', 'MCS042', '-', '#', '#', '#', '#', '12', 9, 'Not Completed', 'MCA', 'RAJNEESH MISHRA', '2019-07-23 10:41:38', '2019-07-23 10:41:38'),
(13230, '170316792', 'MCS043', '-', '#', '#', '#', '#', '4', 3, 'Not Completed', 'MCA', 'RAJNEESH MISHRA', '2019-07-23 10:41:38', '2019-07-23 10:41:38'),
(13231, '170316792', 'MCS044', '-', '#', '#', '#', '84', '80', 62, 'Not Completed', 'MCA', 'RAJNEESH MISHRA', '2019-07-23 10:41:38', '2019-07-23 10:41:38'),
(13233, '170316792', 'MCSL017', '89', '64', '72', '-', '-', '#', 74, 'Completed', 'MCA', 'RAJNEESH MISHRA', '2019-07-23 10:41:38', '2019-07-23 10:41:38'),
(13234, '170316792', 'MCSL025', '88', '64', '12', '92', '16', '#', 57, 'Not Completed', 'MCA', 'RAJNEESH MISHRA', '2019-07-23 10:41:38', '2019-07-23 10:41:38'),
(13235, '170316792', 'MCSL036', '80', '57', '50', '13', '-', '#', 50, 'Not Completed', 'MCA', 'RAJNEESH MISHRA', '2019-07-23 10:41:38', '2019-07-23 10:41:38'),
(13323, '170316825', 'MCS031', '85', '#', '#', '#', '#', '40', 52, 'Completed', 'MCA', 'PRANAY SAXENA', '2019-07-23 13:46:49', '2019-07-23 13:46:49'),
(13324, '170316825', 'MCS032', '82', '#', '#', '#', '#', '40', 51, 'Completed', 'MCA', 'PRANAY SAXENA', '2019-07-23 13:46:49', '2019-07-23 13:46:49'),
(13325, '170316825', 'MCS033', '89', '#', '#', '#', '#', '44', 56, 'Completed', 'MCA', 'PRANAY SAXENA', '2019-07-23 13:46:49', '2019-07-23 13:46:49'),
(13326, '170316825', 'MCS034', '85', '#', '#', '#', '#', '40', 52, 'Completed', 'MCA', 'PRANAY SAXENA', '2019-07-23 13:46:49', '2019-07-23 13:46:49'),
(13327, '170316825', 'MCS035', '84', '#', '#', '#', '#', '44', 54, 'Completed', 'MCA', 'PRANAY SAXENA', '2019-07-23 13:46:49', '2019-07-23 13:46:49'),
(13328, '170316825', 'MCS041', '92', '#', '#', '#', '#', '32', 47, 'Not Completed', 'MCA', 'PRANAY SAXENA', '2019-07-23 13:46:49', '2019-07-23 13:46:49'),
(13329, '170316825', 'MCS042', '93', '#', '#', '#', '#', '20', 39, 'Not Completed', 'MCA', 'PRANAY SAXENA', '2019-07-23 13:46:49', '2019-07-23 13:46:49'),
(13330, '170316825', 'MCS043', '94', '#', '#', '#', '#', '9', 31, 'Not Completed', 'MCA', 'PRANAY SAXENA', '2019-07-23 13:46:49', '2019-07-23 13:46:49'),
(13331, '170316825', 'MCS044', '94', '#', '#', '#', '84', '80', 86, 'Completed', 'MCA', 'PRANAY SAXENA', '2019-07-23 13:46:49', '2019-07-23 13:46:49'),
(13333, '170316825', 'MCSL017', '90', '60', '68', '-', '-', '#', 71, 'Completed', 'MCA', 'PRANAY SAXENA', '2019-07-23 13:46:49', '2019-07-23 13:46:49'),
(13334, '170316825', 'MCSL025', '89', '52', '72', '92', '64', '#', 75, 'Completed', 'MCA', 'PRANAY SAXENA', '2019-07-23 13:46:49', '2019-07-23 13:46:49'),
(13335, '170316825', 'MCSL036', '82', '83', '57', '55', '-', '#', 70, 'Completed', 'MCA', 'PRANAY SAXENA', '2019-07-23 13:46:49', '2019-07-23 13:46:49'),
(13336, '170316825', 'MCSL045', '94', '-', '40', '-', '-', '#', 54, 'Not Completed', 'MCA', 'PRANAY SAXENA', '2019-07-23 13:46:49', '2019-07-23 13:46:49'),
(13375, '155402561', 'MCS031', '76', '#', '#', '#', '#', '60', 64, 'Completed', 'MCA', 'GANESH KUMAR SWAIN', '2019-07-24 05:24:42', '2019-07-24 05:24:42'),
(13376, '155402561', 'MCS032', '84', '#', '#', '#', '#', '50', 59, 'Completed', 'MCA', 'GANESH KUMAR SWAIN', '2019-07-24 05:24:42', '2019-07-24 05:24:42'),
(13377, '155402561', 'MCS033', '85', '#', '#', '#', '#', '40', 52, 'Completed', 'MCA', 'GANESH KUMAR SWAIN', '2019-07-24 05:24:42', '2019-07-24 05:24:42'),
(13378, '155402561', 'MCS034', '75', '#', '#', '#', '#', '40', 49, 'Completed', 'MCA', 'GANESH KUMAR SWAIN', '2019-07-24 05:24:42', '2019-07-24 05:24:42'),
(13379, '155402561', 'MCS035', '75', '#', '#', '#', '#', '44', 52, 'Completed', 'MCA', 'GANESH KUMAR SWAIN', '2019-07-24 05:24:42', '2019-07-24 05:24:42'),
(13380, '155402561', 'MCSL036', '89', '47', '43', '53', '-', '#', 58, 'Completed', 'MCA', 'GANESH KUMAR SWAIN', '2019-07-24 05:24:42', '2019-07-24 05:24:42'),
(13381, '157048205', 'MCS031', '92', '#', '#', '#', '#', '69', 75, 'Completed', 'MCA', 'SUNANDA SHARMA', '2019-07-24 06:47:36', '2019-07-24 06:47:36'),
(13382, '157048205', 'MCS032', '88', '#', '#', '#', '#', '57', 65, 'Completed', 'MCA', 'SUNANDA SHARMA', '2019-07-24 06:47:36', '2019-07-24 06:47:36'),
(13383, '157048205', 'MCS033', '72', '#', '#', '#', '#', '-', 18, 'Not Completed', 'MCA', 'SUNANDA SHARMA', '2019-07-24 06:47:36', '2019-07-24 06:47:36'),
(13384, '157048205', 'MCS034', '90', '#', '#', '#', '#', '46', 57, 'Completed', 'MCA', 'SUNANDA SHARMA', '2019-07-24 06:47:36', '2019-07-24 06:47:36'),
(13385, '157048205', 'MCS035', '86', '#', '#', '#', '#', '36', 49, 'Not Completed', 'MCA', 'SUNANDA SHARMA', '2019-07-24 06:47:36', '2019-07-24 06:47:36'),
(13386, '157048205', 'MCSL036', '90', '60', '43', '38', '-', '#', 58, 'Not Completed', 'MCA', 'SUNANDA SHARMA', '2019-07-24 06:47:36', '2019-07-24 06:47:36'),
(13460, '137882721', 'MCS031', '70', '#', '#', '#', '#', '43', 50, 'Completed', 'MCA', 'POOJA JOSHI', '2019-07-24 17:23:36', '2019-07-24 17:23:36'),
(13461, '137882721', 'MCS032', '80', '#', '#', '#', '#', '40', 50, 'Completed', 'MCA', 'POOJA JOSHI', '2019-07-24 17:23:36', '2019-07-24 17:23:36'),
(13462, '137882721', 'MCS033', '85', '#', '#', '#', '#', '48', 58, 'Completed', 'MCA', 'POOJA JOSHI', '2019-07-24 17:23:36', '2019-07-24 17:23:36'),
(13463, '137882721', 'MCS034', '70', '#', '#', '#', '#', '41', 49, 'Completed', 'MCA', 'POOJA JOSHI', '2019-07-24 17:23:36', '2019-07-24 17:23:36'),
(13464, '137882721', 'MCS035', '72', '#', '#', '#', '#', '44', 51, 'Completed', 'MCA', 'POOJA JOSHI', '2019-07-24 17:23:36', '2019-07-24 17:23:36'),
(13465, '137882721', 'MCSL036', '60', '43', '40', '63', '-', '#', 52, 'Completed', 'MCA', 'POOJA JOSHI', '2019-07-24 17:23:36', '2019-07-24 17:23:36'),
(13514, '175996599', 'MCS031', '70', '#', '#', '#', '#', '18', 31, 'Not Completed', 'MCA', 'VANDANA AGGARWAL', '2019-07-24 17:39:13', '2019-07-24 17:39:13'),
(13515, '175996599', 'MCS032', '72', '#', '#', '#', '#', '48', 54, 'Completed', 'MCA', 'VANDANA AGGARWAL', '2019-07-24 17:39:13', '2019-07-24 17:39:13'),
(13516, '175996599', 'MCS033', '81', '#', '#', '#', '#', '62', 67, 'Completed', 'MCA', 'VANDANA AGGARWAL', '2019-07-24 17:39:13', '2019-07-24 17:39:13'),
(13517, '175996599', 'MCS034', '92', '#', '#', '#', '#', '51', 62, 'Completed', 'MCA', 'VANDANA AGGARWAL', '2019-07-24 17:39:13', '2019-07-24 17:39:13'),
(13518, '175996599', 'MCS035', '85', '#', '#', '#', '#', '41', 52, 'Completed', 'MCA', 'VANDANA AGGARWAL', '2019-07-24 17:39:13', '2019-07-24 17:39:13'),
(13520, '175996599', 'MCSL017', '77', '44', '48', '-', '-', '#', 54, 'Completed', 'MCA', 'VANDANA AGGARWAL', '2019-07-24 17:39:13', '2019-07-24 17:39:13'),
(13521, '175996599', 'MCSL025', '87', '8', '16', '52', '16', '#', 39, 'Not Completed', 'MCA', 'VANDANA AGGARWAL', '2019-07-24 17:39:13', '2019-07-24 17:39:13'),
(13522, '175996599', 'MCSL036', '96', '57', '50', '88', '-', '#', 73, 'Completed', 'MCA', 'VANDANA AGGARWAL', '2019-07-24 17:39:13', '2019-07-24 17:39:13'),
(13523, '141774539', 'MCS031', '84', '#', '#', '#', '#', '52', 60, 'Completed', 'MCA', 'SUNITA SHARMA', '2019-07-24 23:50:19', '2019-07-24 23:50:19'),
(13524, '141774539', 'MCS032', '77', '#', '#', '#', '#', '27', 40, 'Not Completed', 'MCA', 'SUNITA SHARMA', '2019-07-24 23:50:19', '2019-07-24 23:50:19'),
(13525, '141774539', 'MCS033', '74', '#', '#', '#', '#', '-', 19, 'Not Completed', 'MCA', 'SUNITA SHARMA', '2019-07-24 23:50:19', '2019-07-24 23:50:19'),
(13526, '141774539', 'MCS034', '75', '#', '#', '#', '#', '17', 32, 'Not Completed', 'MCA', 'SUNITA SHARMA', '2019-07-24 23:50:19', '2019-07-24 23:50:19'),
(13527, '141774539', 'MCS035', '78', '#', '#', '#', '#', '60', 65, 'Completed', 'MCA', 'SUNITA SHARMA', '2019-07-24 23:50:19', '2019-07-24 23:50:19'),
(13528, '141774539', 'MCSL036', '89', '-', '-', '-', '-', '#', 23, 'Not Completed', 'MCA', 'SUNITA SHARMA', '2019-07-24 23:50:19', '2019-07-24 23:50:19'),
(13607, '159673056', 'MCS031', '88', '#', '#', '#', '#', '50', 60, 'Completed', 'MCA', 'DEEPAK', '2019-07-28 13:14:20', '2019-07-28 13:14:20'),
(13608, '159673056', 'MCS032', '91', '#', '#', '#', '#', '42', 55, 'Completed', 'MCA', 'DEEPAK', '2019-07-28 13:14:20', '2019-07-28 13:14:20'),
(13609, '159673056', 'MCS033', '88', '#', '#', '#', '#', '46', 57, 'Completed', 'MCA', 'DEEPAK', '2019-07-28 13:14:20', '2019-07-28 13:14:20'),
(13610, '159673056', 'MCS034', '90', '#', '#', '#', '#', '41', 54, 'Completed', 'MCA', 'DEEPAK', '2019-07-28 13:14:20', '2019-07-28 13:14:20'),
(13611, '159673056', 'MCS035', '90', '#', '#', '#', '#', '47', 58, 'Completed', 'MCA', 'DEEPAK', '2019-07-28 13:14:20', '2019-07-28 13:14:20'),
(13612, '159673056', 'MCSL036', '89', '73', '67', '75', '-', '#', 76, 'Completed', 'MCA', 'DEEPAK', '2019-07-28 13:14:20', '2019-07-28 13:14:20'),
(13613, '159673056', 'BCS011', '87', '-', '-', '-', '-', '63', 69, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13614, '159673056', 'BCS012', '83', '-', '-', '-', '-', '40', 51, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13615, '159673056', 'BCS031', '92', '-', '-', '-', '-', '50', 61, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13616, '159673056', 'BCS040', '89', '-', '-', '-', '-', '30', 45, 'Not Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13617, '159673056', 'BCS041', '89', '-', '-', '-', '-', '44', 56, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13618, '159673056', 'BCS042', '88', '-', '-', '-', '-', '64', 70, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13619, '159673056', 'BCS051', '88', '-', '-', '-', '-', '72', 76, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13620, '159673056', 'BCS052', '87', '-', '-', '-', '-', '58', 66, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13621, '159673056', 'BCS053', '90', '-', '-', '-', '-', '86', 87, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13622, '159673056', 'BCS054', '79', '-', '-', '-', '-', '63', 67, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13623, '159673056', 'BCS055', '89', '-', '-', '-', '-', '50', 60, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13624, '159673056', 'BCS062', '88', '-', '-', '-', '-', '50', 60, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13625, '159673056', 'BCSL013', '89', '66', '-', '-', '-', '-', 72, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13626, '159673056', 'BCSL021', '88', '92', '-', '-', '-', '-', 91, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13627, '159673056', 'BCSL022', '86', '92', '-', '-', '-', '-', 91, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13628, '159673056', 'BCSL032', '90', '46', '-', '-', '-', '-', 57, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13629, '159673056', 'BCSL033', '82', '56', '-', '-', '-', '-', 63, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13630, '159673056', 'BCSL034', '80', '62', '-', '-', '-', '-', 67, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13631, '159673056', 'BCSL043', '94', '96', '-', '-', '-', '-', 96, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13632, '159673056', 'BCSL044', '90', '94', '-', '-', '-', '-', 93, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13633, '159673056', 'BCSL045', '92', '98', '-', '-', '-', '-', 97, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13634, '159673056', 'BCSL056', '90', '54', '-', '-', '-', '-', 63, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13635, '159673056', 'BCSL057', '90', '76', '-', '-', '-', '-', 80, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13636, '159673056', 'BCSL058', '80', '64', '-', '-', '-', '-', 68, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13637, '159673056', 'BCSL063', '94', '50', '-', '-', '-', '-', 61, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13638, '159673056', 'BCSP064', '-', '40', '44', '-', '-', '-', 41, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13639, '159673056', 'ECO01', '87', '-', '-', '-', '-', '62', 69, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13640, '159673056', 'ECO02', '80', '-', '-', '-', '-', '48', 56, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13641, '159673056', 'FEG02', '86', '-', '-', '-', '-', '42', 53, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13642, '159673056', 'MCS011', '81', '-', '-', '-', '-', '68', 72, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13643, '159673056', 'MCS012', '80', '-', '-', '-', '-', '56', 63, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13644, '159673056', 'MCS013', '81', '-', '-', '-', '-', '40', 51, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13645, '159673056', 'MCS014', '84', '-', '-', '-', '-', '43', 54, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13646, '159673056', 'MCS015', '80', '-', '-', '-', '-', '50', 58, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13647, '159673056', 'MCS021', '85', '-', '-', '-', '-', '48', 58, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13648, '159673056', 'MCS022', '90', '-', '-', '-', '-', '46', 57, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13649, '159673056', 'MCS023', '85', '-', '-', '-', '-', '54', 62, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13650, '159673056', 'MCS024', '89', '-', '-', '-', '-', '47', 58, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13651, '159673056', 'MCSL016', '90', '94', '-', '-', '-', '-', 93, 'Completed', 'BCA', 'DEEPAK', '2019-07-28 13:26:39', '2019-07-28 13:26:39'),
(13652, '155478956', 'BCS011', '87', '-', '-', '-', '-', '76', 79, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13653, '155478956', 'BCS012', '86', '-', '-', '-', '-', '48', 58, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13654, '155478956', 'BCS031', '90', '-', '-', '-', '-', '59', 67, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13655, '155478956', 'BCS040', '85', '-', '-', '-', '-', '40', 52, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13656, '155478956', 'BCS041', '82', '-', '-', '-', '-', '40', 51, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13657, '155478956', 'BCS042', '90', '-', '-', '-', '-', '62', 69, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13658, '155478956', 'BCS051', '89', '-', '-', '-', '-', '45', 56, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13659, '155478956', 'BCS052', '89', '-', '-', '-', '-', '41', 53, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13660, '155478956', 'BCS053', '90', '-', '-', '-', '-', '60', 68, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13661, '155478956', 'BCS054', '88', '-', '-', '-', '-', '47', 58, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13662, '155478956', 'BCS055', '89', '-', '-', '-', '-', '64', 71, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13663, '155478956', 'BCS062', '90', '-', '-', '-', '-', '42', 54, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13664, '155478956', 'BCSL013', '86', '69', '-', '-', '-', '-', 74, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13665, '155478956', 'BCSL021', '94', '68', '-', '-', '-', '-', 75, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13666, '155478956', 'BCSL022', '94', '92', '-', '-', '-', '-', 93, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13667, '155478956', 'BCSL032', '96', '50', '-', '-', '-', '-', 62, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13668, '155478956', 'BCSL033', '94', '86', '-', '-', '-', '-', 88, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13669, '155478956', 'BCSL034', '90', '96', '-', '-', '-', '-', 95, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13670, '155478956', 'BCSL043', '88', '90', '-', '-', '-', '-', 90, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13671, '155478956', 'BCSL044', '90', '92', '-', '-', '-', '-', 92, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13672, '155478956', 'BCSL045', '88', '96', '-', '-', '-', '-', 94, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13673, '155478956', 'BCSL056', '90', '52', '-', '-', '-', '-', 62, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13674, '155478956', 'BCSL057', '90', '76', '-', '-', '-', '-', 80, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13675, '155478956', 'BCSL058', '92', '66', '-', '-', '-', '-', 73, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13676, '155478956', 'BCSL063', '90', '42', '-', '-', '-', '-', 54, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13677, '155478956', 'BCSP064', '-', '83', '78', '-', '-', '-', 82, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13678, '155478956', 'ECO01', '88', '-', '-', '-', '-', '54', 63, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13679, '155478956', 'ECO02', '85', '-', '-', '-', '-', '56', 64, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13680, '155478956', 'FEG02', '87', '-', '-', '-', '-', '52', 61, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13681, '155478956', 'MCS011', '90', '-', '-', '-', '-', '53', 63, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13682, '155478956', 'MCS012', '86', '-', '-', '-', '-', '53', 62, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13683, '155478956', 'MCS013', '87', '-', '-', '-', '-', '74', 78, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13684, '155478956', 'MCS014', '88', '-', '-', '-', '-', '60', 67, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13685, '155478956', 'MCS015', '87', '-', '-', '-', '-', '64', 70, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13686, '155478956', 'MCS021', '85', '-', '-', '-', '-', '43', 54, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13687, '155478956', 'MCS022', '88', '-', '-', '-', '-', '61', 68, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13688, '155478956', 'MCS023', '95', '-', '-', '-', '-', '40', 54, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13689, '155478956', 'MCS024', '90', '-', '-', '-', '-', '46', 57, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13690, '155478956', 'MCSL016', '90', '84', '-', '-', '-', '-', 86, 'Completed', 'BCA', 'SHRINKHLA SHIROMANI', '2019-07-31 13:49:33', '2019-07-31 13:49:33'),
(13691, '175307228', 'MCS011', '88', '#', '#', '#', '#', '11', 31, 'Not Completed', 'MCA', 'SACHIN DHIMAN', '2019-08-03 18:54:42', '2019-08-03 18:54:42'),
(13692, '175307228', 'MCS012', '89', '#', '#', '#', '#', '14', 33, 'Not Completed', 'MCA', 'SACHIN DHIMAN', '2019-08-03 18:54:42', '2019-08-03 18:54:42'),
(13693, '175307228', 'MCS013', '88', '#', '#', '#', '#', '40', 52, 'Completed', 'MCA', 'SACHIN DHIMAN', '2019-08-03 18:54:42', '2019-08-03 18:54:42'),
(13694, '175307228', 'MCS014', '89', '#', '#', '#', '#', '28', 44, 'Not Completed', 'MCA', 'SACHIN DHIMAN', '2019-08-03 18:54:42', '2019-08-03 18:54:42'),
(13695, '175307228', 'MCS015', '89', '#', '#', '#', '#', '50', 60, 'Completed', 'MCA', 'SACHIN DHIMAN', '2019-08-03 18:54:42', '2019-08-03 18:54:42'),
(13696, '175307228', 'MCS021', '83', '#', '#', '#', '#', '20', 36, 'Not Completed', 'MCA', 'SACHIN DHIMAN', '2019-08-03 18:54:42', '2019-08-03 18:54:42'),
(13697, '175307228', 'MCS022', '80', '#', '#', '#', '#', '-', 20, 'Not Completed', 'MCA', 'SACHIN DHIMAN', '2019-08-03 18:54:42', '2019-08-03 18:54:42'),
(13698, '175307228', 'MCS023', '80', '#', '#', '#', '#', '-', 20, 'Not Completed', 'MCA', 'SACHIN DHIMAN', '2019-08-03 18:54:42', '2019-08-03 18:54:42'),
(13699, '175307228', 'MCS024', '86', '#', '#', '#', '#', '5', 26, 'Not Completed', 'MCA', 'SACHIN DHIMAN', '2019-08-03 18:54:42', '2019-08-03 18:54:42'),
(13700, '175307228', 'MCS031', '80', '#', '#', '#', '#', '-', 20, 'Not Completed', 'MCA', 'SACHIN DHIMAN', '2019-08-03 18:54:42', '2019-08-03 18:54:42'),
(13701, '175307228', 'MCS032', '80', '#', '#', '#', '#', '20', 35, 'Not Completed', 'MCA', 'SACHIN DHIMAN', '2019-08-03 18:54:42', '2019-08-03 18:54:42'),
(13702, '175307228', 'MCS033', '81', '#', '#', '#', '#', '-', 21, 'Not Completed', 'MCA', 'SACHIN DHIMAN', '2019-08-03 18:54:42', '2019-08-03 18:54:42'),
(13703, '175307228', 'MCS034', '80', '#', '#', '#', '#', '-', 20, 'Not Completed', 'MCA', 'SACHIN DHIMAN', '2019-08-03 18:54:42', '2019-08-03 18:54:42'),
(13704, '175307228', 'MCS035', '81', '#', '#', '#', '#', '-', 21, 'Not Completed', 'MCA', 'SACHIN DHIMAN', '2019-08-03 18:54:42', '2019-08-03 18:54:42'),
(13705, '175307228', 'MCSL016', '89', '-', '-', '-', '-', '#', 23, 'Not Completed', 'MCA', 'SACHIN DHIMAN', '2019-08-03 18:54:42', '2019-08-03 18:54:42'),
(13706, '175307228', 'MCSL017', '89', '-', '-', '-', '-', '#', 23, 'Not Completed', 'MCA', 'SACHIN DHIMAN', '2019-08-03 18:54:42', '2019-08-03 18:54:42'),
(13707, '175307228', 'MCSL025', '84', '-', '-', '-', '-', '#', 21, 'Not Completed', 'MCA', 'SACHIN DHIMAN', '2019-08-03 18:54:42', '2019-08-03 18:54:42'),
(13708, '175307228', 'MCSL036', '80', '-', '-', '-', '-', '#', 20, 'Not Completed', 'MCA', 'SACHIN DHIMAN', '2019-08-03 18:54:42', '2019-08-03 18:54:42'),
(13709, '155407775', 'BCS011', '80', '-', '-', '-', '-', '42', 52, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13710, '155407775', 'BCS012', '81', '-', '-', '-', '-', '30', 43, 'Not Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13711, '155407775', 'BCS031', '78', '-', '-', '-', '-', '42', 51, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13712, '155407775', 'BCS040', '84', '-', '-', '-', '-', '22', 38, 'Not Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13713, '155407775', 'BCS041', '88', '-', '-', '-', '-', '53', 62, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13714, '155407775', 'BCS042', '88', '-', '-', '-', '-', '40', 52, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13715, '155407775', 'BCS051', '86', '-', '-', '-', '-', '44', 55, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13716, '155407775', 'BCS052', '84', '-', '-', '-', '-', '29', 43, 'Not Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13717, '155407775', 'BCS053', '87', '-', '-', '-', '-', '42', 54, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13718, '155407775', 'BCS054', '87', '-', '-', '-', '-', '36', 49, 'Not Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13719, '155407775', 'BCS055', '86', '-', '-', '-', '-', '54', 62, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13720, '155407775', 'BCS062', '83', '-', '-', '-', '-', '54', 62, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13721, '155407775', 'BCSL013', '82', '67', '-', '-', '-', '-', 71, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13722, '155407775', 'BCSL021', '86', '52', '-', '-', '-', '-', 61, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13723, '155407775', 'BCSL022', '90', '40', '-', '-', '-', '-', 53, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13724, '155407775', 'BCSL032', '82', '52', '-', '-', '-', '-', 60, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13725, '155407775', 'BCSL033', '80', '52', '-', '-', '-', '-', 59, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13726, '155407775', 'BCSL034', '80', '68', '-', '-', '-', '-', 72, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13727, '155407775', 'BCSL043', '84', '58', '-', '-', '-', '-', 65, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13728, '155407775', 'BCSL044', '80', '44', '-', '-', '-', '-', 53, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13729, '155407775', 'BCSL045', '82', '50', '-', '-', '-', '-', 58, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13730, '155407775', 'BCSL056', '80', '52', '-', '-', '-', '-', 59, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13731, '155407775', 'BCSL057', '82', '54', '-', '-', '-', '-', 61, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13732, '155407775', 'BCSL058', '80', '54', '-', '-', '-', '-', 61, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13733, '155407775', 'BCSL063', '82', '42', '-', '-', '-', '-', 52, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13734, '155407775', 'BCSP064', '-', '67', '50', '-', '-', '-', 63, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13735, '155407775', 'ECO01', '83', '-', '-', '-', '-', '44', 54, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13736, '155407775', 'ECO02', '80', '-', '-', '-', '-', '44', 53, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13737, '155407775', 'FEG02', '80', '-', '-', '-', '-', '60', 65, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13738, '155407775', 'MCS011', '85', '-', '-', '-', '-', '48', 58, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13739, '155407775', 'MCS012', '83', '-', '-', '-', '-', '52', 60, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13740, '155407775', 'MCS013', '80', '-', '-', '-', '-', '50', 58, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13741, '155407775', 'MCS014', '81', '-', '-', '-', '-', '13', 30, 'Not Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13742, '155407775', 'MCS015', '82', '-', '-', '-', '-', '40', 51, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13743, '155407775', 'MCS021', '78', '-', '-', '-', '-', '42', 51, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13744, '155407775', 'MCS022', '81', '-', '-', '-', '-', '40', 51, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13745, '155407775', 'MCS023', '80', '-', '-', '-', '-', '26', 40, 'Not Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13746, '155407775', 'MCS024', '89', '-', '-', '-', '-', '27', 43, 'Not Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13747, '155407775', 'MCSL016', '89', '44', '-', '-', '-', '-', 56, 'Completed', 'BCA', 'MOHD SHAKIR', '2019-08-03 19:43:44', '2019-08-03 19:43:44'),
(13748, '155450444', 'BCS011', '82', '-', '-', '-', '-', '50', 58, 'Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28');
INSERT INTO `score` (`id`, `student`, `course_code`, `asgn1`, `lab1`, `lab2`, `lab3`, `lab4`, `theory`, `total`, `status`, `program`, `name`, `created_at`, `updated_at`) VALUES
(13749, '155450444', 'BCS012', '81', '-', '-', '-', '-', '22', 37, 'Not Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13750, '155450444', 'BCS031', '80', '-', '-', '-', '-', '40', 50, 'Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13751, '155450444', 'BCS040', '86', '-', '-', '-', '-', '36', 49, 'Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13752, '155450444', 'BCS041', '78', '-', '-', '-', '-', '48', 56, 'Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13753, '155450444', 'BCS042', '87', '-', '-', '-', '-', '40', 52, 'Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13754, '155450444', 'BCS051', '84', '-', '-', '-', '-', '36', 48, 'Not Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13755, '155450444', 'BCS052', '87', '-', '-', '-', '-', '47', 57, 'Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13756, '155450444', 'BCS053', '82', '-', '-', '-', '-', '42', 52, 'Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13757, '155450444', 'BCS054', '85', '-', '-', '-', '-', '16', 34, 'Not Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13758, '155450444', 'BCS055', '85', '-', '-', '-', '-', '46', 56, 'Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13759, '155450444', 'BCS062', '88', '-', '-', '-', '-', '54', 63, 'Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13760, '155450444', 'BCSL013', '82', '70', '-', '-', '-', '-', 73, 'Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13761, '155450444', 'BCSL021', '90', '72', '-', '-', '-', '-', 77, 'Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13762, '155450444', 'BCSL022', '90', '40', '-', '-', '-', '-', 53, 'Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13763, '155450444', 'BCSL032', '82', '48', '-', '-', '-', '-', 57, 'Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13764, '155450444', 'BCSL033', '80', '56', '-', '-', '-', '-', 63, 'Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13765, '155450444', 'BCSL034', '82', '44', '-', '-', '-', '-', 54, 'Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13766, '155450444', 'BCSL043', '80', '50', '-', '-', '-', '-', 58, 'Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13767, '155450444', 'BCSL044', '80', '92', '-', '-', '-', '-', 89, 'Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13768, '155450444', 'BCSL045', '80', '54', '-', '-', '-', '-', 61, 'Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13769, '155450444', 'BCSL056', '84', '52', '-', '-', '-', '-', 60, 'Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13770, '155450444', 'BCSL057', '84', '52', '-', '-', '-', '-', 60, 'Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13771, '155450444', 'BCSL058', '82', '54', '-', '-', '-', '-', 61, 'Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13772, '155450444', 'BCSL063', '82', '50', '-', '-', '-', '-', 58, 'Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13773, '155450444', 'BCSP064', '-', '43', '50', '-', '-', '-', 45, 'Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13774, '155450444', 'ECO01', '86', '-', '-', '-', '-', '44', 55, 'Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13775, '155450444', 'ECO02', '82', '-', '-', '-', '-', '4', 24, 'Not Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13776, '155450444', 'FEG02', '83', '-', '-', '-', '-', '36', 48, 'Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13777, '155450444', 'MCS011', '80', '-', '-', '-', '-', '35', 47, 'Not Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13778, '155450444', 'MCS012', '80', '-', '-', '-', '-', '36', 47, 'Not Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13779, '155450444', 'MCS013', '82', '-', '-', '-', '-', '48', 57, 'Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13780, '155450444', 'MCS014', '82', '-', '-', '-', '-', '48', 57, 'Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13781, '155450444', 'MCS015', '82', '-', '-', '-', '-', '46', 55, 'Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13782, '155450444', 'MCS021', '80', '-', '-', '-', '-', '14', 31, 'Not Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13783, '155450444', 'MCS022', '89', '-', '-', '-', '-', '34', 48, 'Not Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13784, '155450444', 'MCS023', '82', '-', '-', '-', '-', '40', 51, 'Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13785, '155450444', 'MCS024', '82', '-', '-', '-', '-', '21', 37, 'Not Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13786, '155450444', 'MCSL016', '79', '96', '-', '-', '-', '-', 92, 'Completed', 'BCA', 'NAVEEN KUMAR MAHTO', '2019-08-05 13:38:28', '2019-08-05 13:38:28'),
(13787, '151480217', 'MCS011', '81', '#', '#', '#', '#', '73', 75, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13788, '151480217', 'MCS012', '89', '#', '#', '#', '#', '56', 65, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13789, '151480217', 'MCS013', '86', '#', '#', '#', '#', '76', 79, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13790, '151480217', 'MCS014', '70', '#', '#', '#', '#', '71', 71, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13791, '151480217', 'MCS015', '85', '#', '#', '#', '#', '64', 70, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13792, '151480217', 'MCS021', '88', '#', '#', '#', '#', '87', 88, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13793, '151480217', 'MCS022', '90', '#', '#', '#', '#', '82', 84, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13794, '151480217', 'MCS023', '90', '#', '#', '#', '#', '96', 95, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13795, '151480217', 'MCS024', '87', '#', '#', '#', '#', '66', 72, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13796, '151480217', 'MCS031', '85', '#', '#', '#', '#', '74', 77, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13797, '151480217', 'MCS032', '90', '#', '#', '#', '#', '51', 61, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13798, '151480217', 'MCS033', '85', '#', '#', '#', '#', '72', 76, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13799, '151480217', 'MCS034', '87', '#', '#', '#', '#', '80', 82, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13800, '151480217', 'MCS035', '88', '#', '#', '#', '#', '51', 61, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13801, '151480217', 'MCS041', '88', '#', '#', '#', '#', '59', 67, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13802, '151480217', 'MCS042', '78', '#', '#', '#', '#', '57', 63, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13803, '151480217', 'MCS043', '77', '#', '#', '#', '#', '71', 73, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13804, '151480217', 'MCS044', '90', '#', '#', '#', '90', '88', 90, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13805, '151480217', 'MCS051', '83', '#', '#', '#', '#', '51', 59, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13806, '151480217', 'MCS052', '86', '#', '#', '#', '#', '74', 77, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13807, '151480217', 'MCS053', '84', '#', '#', '#', '#', '56', 64, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13808, '151480217', 'MCSE003', '88', '#', '#', '#', '#', '65', 71, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13809, '151480217', 'MCSE004', '91', '#', '#', '#', '#', '74', 79, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13810, '151480217', 'MCSE011', '90', '#', '#', '#', '#', '61', 69, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13811, '151480217', 'MCSL016', '84', '76', '-', '-', '-', '#', 78, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13812, '151480217', 'MCSL017', '85', '76', '72', '-', '-', '#', 77, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13813, '151480217', 'MCSL025', '84', '88', '52', '60', '64', '#', 71, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13814, '151480217', 'MCSL036', '86', '83', '83', '53', '-', '#', 77, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13815, '151480217', 'MCSL045', '92', '88', '92', '-', '-', '#', 91, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13816, '151480217', 'MCSL054', '80', '56', '72', '-', '-', '#', 68, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13817, '151480217', 'MCSP060', '-', '#', '#', '#', '94', '30', 93, 'Completed', 'MCA', 'SWADESH SINGH', '2019-08-06 10:13:48', '2019-08-06 10:13:48'),
(13818, '155431760', 'BCS011', '86', '-', '-', '-', '-', '41', 53, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13819, '155431760', 'BCS012', '88', '-', '-', '-', '-', '41', 53, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13820, '155431760', 'BCS031', '85', '-', '-', '-', '-', '42', 53, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13821, '155431760', 'BCS040', '77', '-', '-', '-', '-', '42', 51, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13822, '155431760', 'BCS041', '86', '-', '-', '-', '-', '65', 71, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13823, '155431760', 'BCS042', '74', '-', '-', '-', '-', '60', 64, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13824, '155431760', 'BCS051', '72', '-', '-', '-', '-', '50', 56, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13825, '155431760', 'BCS052', '70', '-', '-', '-', '-', '82', 79, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13826, '155431760', 'BCS053', '73', '-', '-', '-', '-', '46', 53, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13827, '155431760', 'BCS054', '80', '-', '-', '-', '-', '55', 62, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13828, '155431760', 'BCS055', '72', '-', '-', '-', '-', '48', 54, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13829, '155431760', 'BCS062', '80', '-', '-', '-', '-', '62', 67, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13830, '155431760', 'BCSL013', '87', '61', '-', '-', '-', '-', 68, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13831, '155431760', 'BCSL021', '94', '82', '-', '-', '-', '-', 85, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13832, '155431760', 'BCSL022', '88', '64', '-', '-', '-', '-', 70, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13833, '155431760', 'BCSL032', '84', '80', '-', '-', '-', '-', 81, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13834, '155431760', 'BCSL033', '81', '52', '-', '-', '-', '-', 60, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13835, '155431760', 'BCSL034', '73', '52', '-', '-', '-', '-', 58, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13836, '155431760', 'BCSL043', '74', '54', '-', '-', '-', '-', 59, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13837, '155431760', 'BCSL044', '80', '44', '-', '-', '-', '-', 53, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13838, '155431760', 'BCSL045', '79', '40', '-', '-', '-', '-', 50, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13839, '155431760', 'BCSL056', '77', '24', '-', '-', '-', '-', 38, 'Not Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13840, '155431760', 'BCSL057', '71', '60', '-', '-', '-', '-', 63, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13841, '155431760', 'BCSL058', '80', '50', '-', '-', '-', '-', 58, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13842, '155431760', 'BCSL063', '85', '40', '-', '-', '-', '-', 52, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13843, '155431760', 'BCSP064', '-', '43', '64', '-', '-', '-', 49, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13844, '155431760', 'ECO01', '87', '-', '-', '-', '-', '36', 49, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13845, '155431760', 'ECO02', '80', '-', '-', '-', '-', '24', 38, 'Not Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13846, '155431760', 'FEG02', '86', '-', '-', '-', '-', '46', 56, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13847, '155431760', 'MCS011', '96', '-', '-', '-', '-', '60', 69, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13848, '155431760', 'MCS012', '91', '-', '-', '-', '-', '36', 50, 'Not Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13849, '155431760', 'MCS013', '91', '-', '-', '-', '-', '50', 61, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13850, '155431760', 'MCS014', '76', '-', '-', '-', '-', '40', 49, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13851, '155431760', 'MCS015', '93', '-', '-', '-', '-', '56', 66, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13852, '155431760', 'MCS021', '89', '-', '-', '-', '-', '40', 53, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13853, '155431760', 'MCS022', '85', '-', '-', '-', '-', '43', 54, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13854, '155431760', 'MCS023', '83', '-', '-', '-', '-', '40', 51, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13855, '155431760', 'MCS024', '78', '-', '-', '-', '-', '28', 41, 'Not Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13856, '155431760', 'MCSL016', '72', '74', '-', '-', '-', '-', 74, 'Completed', 'BCA', 'RAHUL BHUTANI', '2019-08-07 03:05:09', '2019-08-07 03:05:09'),
(13857, '155409636', 'BCS011', '92', '-', '-', '-', '-', '80', 83, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13858, '155409636', 'BCS012', '95', '-', '-', '-', '-', '43', 56, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13859, '155409636', 'BCS031', '77', '-', '-', '-', '-', '47', 55, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13860, '155409636', 'BCS040', '82', '-', '-', '-', '-', '50', 58, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13861, '155409636', 'BCS041', '84', '-', '-', '-', '-', '40', 51, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13862, '155409636', 'BCS042', '81', '-', '-', '-', '-', '62', 67, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13863, '155409636', 'BCS051', '76', '-', '-', '-', '-', '53', 59, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13864, '155409636', 'BCS052', '60', '-', '-', '-', '-', '79', 75, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13865, '155409636', 'BCS053', '70', '-', '-', '-', '-', '48', 54, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13866, '155409636', 'BCS054', '75', '-', '-', '-', '-', '51', 57, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13867, '155409636', 'BCS055', '60', '-', '-', '-', '-', '70', 68, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13868, '155409636', 'BCS062', '-', '-', '-', '-', '-', '58', 44, 'Not Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13869, '155409636', 'BCSL013', '95', '63', '-', '-', '-', '-', 71, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13870, '155409636', 'BCSL021', '80', '72', '-', '-', '-', '-', 74, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13871, '155409636', 'BCSL022', '90', '64', '-', '-', '-', '-', 71, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13872, '155409636', 'BCSL032', '89', '74', '-', '-', '-', '-', 78, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13873, '155409636', 'BCSL033', '87', '60', '-', '-', '-', '-', 67, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13874, '155409636', 'BCSL034', '88', '42', '-', '-', '-', '-', 54, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13875, '155409636', 'BCSL043', '86', '30', '-', '-', '-', '-', 44, 'Not Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13876, '155409636', 'BCSL044', '82', '44', '-', '-', '-', '-', 54, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13877, '155409636', 'BCSL045', '81', '60', '-', '-', '-', '-', 66, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13878, '155409636', 'BCSL056', '78', '14', '-', '-', '-', '-', 30, 'Not Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13879, '155409636', 'BCSL057', '78', '52', '-', '-', '-', '-', 59, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13880, '155409636', 'BCSL058', '70', '12', '-', '-', '-', '-', 27, 'Not Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13881, '155409636', 'BCSL063', '-', '52', '-', '-', '-', '-', 39, 'Not Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13882, '155409636', 'BCSP064', '-', '50', '30', '-', '-', '-', 45, 'Not Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13883, '155409636', 'ECO01', '94', '-', '-', '-', '-', '38', 52, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13884, '155409636', 'ECO02', '91', '-', '-', '-', '-', '72', 77, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13885, '155409636', 'FEG02', '88', '-', '-', '-', '-', '56', 64, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13886, '155409636', 'MCS011', '82', '-', '-', '-', '-', '48', 57, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13887, '155409636', 'MCS012', '79', '-', '-', '-', '-', '78', 79, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13888, '155409636', 'MCS013', '87', '-', '-', '-', '-', '40', 52, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13889, '155409636', 'MCS014', '78', '-', '-', '-', '-', '51', 58, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13890, '155409636', 'MCS015', '88', '-', '-', '-', '-', '62', 69, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13891, '155409636', 'MCS021', '92', '-', '-', '-', '-', '48', 59, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13892, '155409636', 'MCS022', '-', '-', '-', '-', '-', '63', 48, 'Not Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13893, '155409636', 'MCS023', '87', '-', '-', '-', '-', '42', 54, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13894, '155409636', 'MCS024', '81', '-', '-', '-', '-', '48', 57, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13895, '155409636', 'MCSL016', '78', '44', '-', '-', '-', '-', 53, 'Completed', 'BCA', 'DIKSHA', '2019-08-07 03:06:27', '2019-08-07 03:06:27'),
(13896, '155430546', 'BCS011', '85', '-', '-', '-', '-', '40', 52, 'Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13897, '155430546', 'BCS012', '86', '-', '-', '-', '-', '5', 26, 'Not Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13898, '155430546', 'BCS031', '86', '-', '-', '-', '-', '40', 52, 'Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13899, '155430546', 'BCS040', '73', '-', '-', '-', '-', '24', 37, 'Not Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13900, '155430546', 'BCS041', '91', '-', '-', '-', '-', '28', 44, 'Not Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13901, '155430546', 'BCS042', '76', '-', '-', '-', '-', '54', 60, 'Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13902, '155430546', 'BCS051', '76', '-', '-', '-', '-', '41', 50, 'Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13903, '155430546', 'BCS052', '70', '-', '-', '-', '-', '75', 74, 'Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13904, '155430546', 'BCS053', '90', '-', '-', '-', '-', '40', 53, 'Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13905, '155430546', 'BCS054', '90', '-', '-', '-', '-', '44', 56, 'Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13906, '155430546', 'BCS055', '89', '-', '-', '-', '-', '52', 62, 'Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13907, '155430546', 'BCS062', '-', '-', '-', '-', '-', '40', 30, 'Not Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13908, '155430546', 'BCSL013', '83', '62', '-', '-', '-', '-', 68, 'Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13909, '155430546', 'BCSL021', '94', '4', '-', '-', '-', '-', 27, 'Not Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13910, '155430546', 'BCSL022', '87', '-', '-', '-', '-', '-', 22, 'Not Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13911, '155430546', 'BCSL032', '80', '60', '-', '-', '-', '-', 65, 'Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13912, '155430546', 'BCSL033', '86', '16', '-', '-', '-', '-', 34, 'Not Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13913, '155430546', 'BCSL034', '85', '24', '-', '-', '-', '-', 40, 'Not Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13914, '155430546', 'BCSL043', '79', '24', '-', '-', '-', '-', 38, 'Not Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13915, '155430546', 'BCSL044', '76', '-', '-', '-', '-', '-', 19, 'Not Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13916, '155430546', 'BCSL045', '79', '12', '-', '-', '-', '-', 29, 'Not Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13917, '155430546', 'BCSL056', '82', '6', '-', '-', '-', '-', 25, 'Not Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13918, '155430546', 'BCSL057', '85', '-', '-', '-', '-', '-', 22, 'Not Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13919, '155430546', 'BCSL058', '94', '-', '-', '-', '-', '-', 24, 'Not Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13920, '155430546', 'BCSL063', '-', '40', '-', '-', '-', '-', 30, 'Not Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13921, '155430546', 'BCSP064', '-', '40', '40', '-', '-', '-', 40, 'Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13922, '155430546', 'ECO01', '88', '-', '-', '-', '-', '40', 52, 'Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13923, '155430546', 'ECO02', '74', '-', '-', '-', '-', '36', 46, 'Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13924, '155430546', 'FEG02', '85', '-', '-', '-', '-', '48', 58, 'Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13925, '155430546', 'MCS011', '96', '-', '-', '-', '-', '61', 70, 'Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13926, '155430546', 'MCS012', '90', '-', '-', '-', '-', '21', 39, 'Not Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13927, '155430546', 'MCS013', '92', '-', '-', '-', '-', '78', 82, 'Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13928, '155430546', 'MCS014', '75', '-', '-', '-', '-', '33', 44, 'Not Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13929, '155430546', 'MCS015', '88', '-', '-', '-', '-', '40', 52, 'Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13930, '155430546', 'MCS021', '89', '-', '-', '-', '-', '58', 66, 'Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13931, '155430546', 'MCS022', '-', '-', '-', '-', '-', '50', 38, 'Not Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13932, '155430546', 'MCS023', '85', '-', '-', '-', '-', '14', 32, 'Not Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13933, '155430546', 'MCS024', '70', '-', '-', '-', '-', '25', 37, 'Not Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13934, '155430546', 'MCSL016', '72', '40', '-', '-', '-', '-', 48, 'Completed', 'BCA', 'ABHISHEK SHARMA', '2019-08-07 03:07:05', '2019-08-07 03:07:05'),
(13935, '155415837', 'BCS011', '89', '-', '-', '-', '-', '40', 53, 'Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13936, '155415837', 'BCS012', '87', '-', '-', '-', '-', '50', 60, 'Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13937, '155415837', 'BCS031', '77', '-', '-', '-', '-', '21', 35, 'Not Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13938, '155415837', 'BCS040', '74', '-', '-', '-', '-', '26', 38, 'Not Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13939, '155415837', 'BCS041', '87', '-', '-', '-', '-', '30', 45, 'Not Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13940, '155415837', 'BCS042', '75', '-', '-', '-', '-', '44', 52, 'Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13941, '155415837', 'BCS051', '71', '-', '-', '-', '-', '41', 49, 'Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13942, '155415837', 'BCS052', '68', '-', '-', '-', '-', '59', 62, 'Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13943, '155415837', 'BCS053', '71', '-', '-', '-', '-', '42', 50, 'Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13944, '155415837', 'BCS054', '80', '-', '-', '-', '-', '45', 54, 'Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13945, '155415837', 'BCS055', '71', '-', '-', '-', '-', '46', 53, 'Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13946, '155415837', 'BCS062', '76', '-', '-', '-', '-', '44', 52, 'Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13947, '155415837', 'BCSL013', '87', '44', '-', '-', '-', '-', 55, 'Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13948, '155415837', 'BCSL021', '93', '52', '-', '-', '-', '-', 63, 'Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13949, '155415837', 'BCSL022', '85', '24', '-', '-', '-', '-', 40, 'Not Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13950, '155415837', 'BCSL032', '82', '20', '-', '-', '-', '-', 36, 'Not Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13951, '155415837', 'BCSL033', '82', '20', '-', '-', '-', '-', 36, 'Not Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13952, '155415837', 'BCSL034', '88', '50', '-', '-', '-', '-', 60, 'Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13953, '155415837', 'BCSL043', '79', '8', '-', '-', '-', '-', 26, 'Not Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13954, '155415837', 'BCSL044', '80', '44', '-', '-', '-', '-', 53, 'Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13955, '155415837', 'BCSL045', '77', '10', '-', '-', '-', '-', 27, 'Not Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13956, '155415837', 'BCSL056', '78', '18', '-', '-', '-', '-', 33, 'Not Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13957, '155415837', 'BCSL057', '73', '4', '-', '-', '-', '-', 22, 'Not Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13958, '155415837', 'BCSL058', '80', '40', '-', '-', '-', '-', 50, 'Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13959, '155415837', 'BCSL063', '67', '44', '-', '-', '-', '-', 50, 'Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13960, '155415837', 'BCSP064', '-', '50', '10', '-', '-', '-', 40, 'Not Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13961, '155415837', 'ECO01', '80', '-', '-', '-', '-', '62', 67, 'Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13962, '155415837', 'ECO02', '79', '-', '-', '-', '-', '36', 47, 'Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13963, '155415837', 'FEG02', '89', '-', '-', '-', '-', '46', 57, 'Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13964, '155415837', 'MCS011', '96', '-', '-', '-', '-', '40', 54, 'Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13965, '155415837', 'MCS012', '90', '-', '-', '-', '-', '30', 45, 'Not Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13966, '155415837', 'MCS013', '92', '-', '-', '-', '-', '40', 53, 'Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13967, '155415837', 'MCS014', '79', '-', '-', '-', '-', '29', 42, 'Not Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13968, '155415837', 'MCS015', '76', '-', '-', '-', '-', '52', 58, 'Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13969, '155415837', 'MCS021', '86', '-', '-', '-', '-', '48', 58, 'Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13970, '155415837', 'MCS022', '72', '-', '-', '-', '-', '43', 51, 'Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13971, '155415837', 'MCS023', '87', '-', '-', '-', '-', '10', 30, 'Not Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13972, '155415837', 'MCS024', '77', '-', '-', '-', '-', '16', 32, 'Not Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13973, '155415837', 'MCSL016', '75', '40', '-', '-', '-', '-', 49, 'Completed', 'BCA', 'PUNEET', '2019-08-07 03:07:28', '2019-08-07 03:07:28'),
(13974, '177565448', 'BCS011', '81', '-', '-', '-', '-', '55', 62, 'Completed', 'BCA', 'AMIT GUPTA', '2019-08-07 14:33:30', '2019-08-07 14:33:30'),
(13975, '177565448', 'BCS012', '77', '-', '-', '-', '-', '52', 59, 'Completed', 'BCA', 'AMIT GUPTA', '2019-08-07 14:33:30', '2019-08-07 14:33:30'),
(13976, '177565448', 'BCS031', '92', '-', '-', '-', '-', '57', 66, 'Completed', 'BCA', 'AMIT GUPTA', '2019-08-07 14:33:30', '2019-08-07 14:33:30'),
(13977, '177565448', 'BCSL013', '79', '63', '-', '-', '-', '-', 67, 'Completed', 'BCA', 'AMIT GUPTA', '2019-08-07 14:33:30', '2019-08-07 14:33:30'),
(13978, '177565448', 'BCSL021', '82', '56', '-', '-', '-', '-', 63, 'Completed', 'BCA', 'AMIT GUPTA', '2019-08-07 14:33:30', '2019-08-07 14:33:30'),
(13979, '177565448', 'BCSL022', '86', '48', '-', '-', '-', '-', 58, 'Completed', 'BCA', 'AMIT GUPTA', '2019-08-07 14:33:30', '2019-08-07 14:33:30'),
(13980, '177565448', 'BCSL032', '88', '10', '-', '-', '-', '-', 30, 'Not Completed', 'BCA', 'AMIT GUPTA', '2019-08-07 14:33:30', '2019-08-07 14:33:30'),
(13981, '177565448', 'BCSL033', '72', '-', '-', '-', '-', '-', 18, 'Not Completed', 'BCA', 'AMIT GUPTA', '2019-08-07 14:33:30', '2019-08-07 14:33:30'),
(13982, '177565448', 'BCSL034', '78', '84', '-', '-', '-', '-', 83, 'Completed', 'BCA', 'AMIT GUPTA', '2019-08-07 14:33:30', '2019-08-07 14:33:30'),
(13983, '177565448', 'ECO01', '86', '-', '-', '-', '-', '56', 64, 'Completed', 'BCA', 'AMIT GUPTA', '2019-08-07 14:33:30', '2019-08-07 14:33:30'),
(13984, '177565448', 'ECO02', '89', '-', '-', '-', '-', '40', 53, 'Completed', 'BCA', 'AMIT GUPTA', '2019-08-07 14:33:30', '2019-08-07 14:33:30'),
(13985, '177565448', 'FEG02', '52', '-', '-', '-', '-', '60', 58, 'Completed', 'BCA', 'AMIT GUPTA', '2019-08-07 14:33:30', '2019-08-07 14:33:30'),
(13986, '177565448', 'MCS011', '76', '-', '-', '-', '-', '69', 71, 'Completed', 'BCA', 'AMIT GUPTA', '2019-08-07 14:33:30', '2019-08-07 14:33:30'),
(13987, '177565448', 'MCS012', '95', '-', '-', '-', '-', '31', 47, 'Not Completed', 'BCA', 'AMIT GUPTA', '2019-08-07 14:33:30', '2019-08-07 14:33:30'),
(13988, '177565448', 'MCS013', '84', '-', '-', '-', '-', '30', 44, 'Not Completed', 'BCA', 'AMIT GUPTA', '2019-08-07 14:33:30', '2019-08-07 14:33:30'),
(13989, '177565448', 'MCS014', '89', '-', '-', '-', '-', '43', 55, 'Completed', 'BCA', 'AMIT GUPTA', '2019-08-07 14:33:30', '2019-08-07 14:33:30'),
(13990, '177565448', 'MCS015', '55', '-', '-', '-', '-', '58', 58, 'Completed', 'BCA', 'AMIT GUPTA', '2019-08-07 14:33:30', '2019-08-07 14:33:30'),
(13991, '177565448', 'MCS021', '70', '-', '-', '-', '-', '34', 43, 'Not Completed', 'BCA', 'AMIT GUPTA', '2019-08-07 14:33:30', '2019-08-07 14:33:30'),
(13992, '177565448', 'MCS023', '86', '-', '-', '-', '-', '40', 52, 'Completed', 'BCA', 'AMIT GUPTA', '2019-08-07 14:33:30', '2019-08-07 14:33:30'),
(13993, '159673959', 'BCS011', '90', '-', '-', '-', '-', '59', 67, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(13994, '159673959', 'BCS012', '80', '-', '-', '-', '-', '42', 52, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(13995, '159673959', 'BCS031', '80', '-', '-', '-', '-', '60', 65, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(13996, '159673959', 'BCS040', '88', '-', '-', '-', '-', '30', 45, 'Not Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(13997, '159673959', 'BCS041', '79', '-', '-', '-', '-', '40', 50, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(13998, '159673959', 'BCS042', '88', '-', '-', '-', '-', '56', 64, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(13999, '159673959', 'BCS051', '86', '-', '-', '-', '-', '63', 69, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14000, '159673959', 'BCS052', '87', '-', '-', '-', '-', '57', 65, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14001, '159673959', 'BCS053', '89', '-', '-', '-', '-', '62', 69, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14002, '159673959', 'BCS054', '86', '-', '-', '-', '-', '55', 63, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14003, '159673959', 'BCS055', '89', '-', '-', '-', '-', '74', 78, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14004, '159673959', 'BCS062', '84', '-', '-', '-', '-', '52', 60, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14005, '159673959', 'BCSL013', '80', '79', '-', '-', '-', '-', 80, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14006, '159673959', 'BCSL021', '86', '48', '-', '-', '-', '-', 58, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14007, '159673959', 'BCSL022', '90', '68', '-', '-', '-', '-', 74, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14008, '159673959', 'BCSL032', '82', '42', '-', '-', '-', '-', 52, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14009, '159673959', 'BCSL033', '80', '52', '-', '-', '-', '-', 59, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14010, '159673959', 'BCSL034', '86', '84', '-', '-', '-', '-', 85, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14011, '159673959', 'BCSL043', '90', '56', '-', '-', '-', '-', 65, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14012, '159673959', 'BCSL044', '94', '74', '-', '-', '-', '-', 79, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14013, '159673959', 'BCSL045', '90', '52', '-', '-', '-', '-', 62, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14014, '159673959', 'BCSL056', '84', '52', '-', '-', '-', '-', 60, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14015, '159673959', 'BCSL057', '90', '76', '-', '-', '-', '-', 80, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14016, '159673959', 'BCSL058', '82', '52', '-', '-', '-', '-', 60, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14017, '159673959', 'BCSL063', '84', '44', '-', '-', '-', '-', 54, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14018, '159673959', 'BCSP064', '-', '47', '60', '-', '-', '-', 51, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14019, '159673959', 'ECO01', '80', '-', '-', '-', '-', '56', 63, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14020, '159673959', 'ECO02', '83', '-', '-', '-', '-', '74', 77, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14021, '159673959', 'FEG02', '90', '-', '-', '-', '-', '66', 72, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14022, '159673959', 'MCS011', '92', '-', '-', '-', '-', '44', 56, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14023, '159673959', 'MCS012', '82', '-', '-', '-', '-', '42', 52, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14024, '159673959', 'MCS013', '86', '-', '-', '-', '-', '44', 55, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14025, '159673959', 'MCS014', '78', '-', '-', '-', '-', '44', 53, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14026, '159673959', 'MCS015', '87', '-', '-', '-', '-', '46', 57, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14027, '159673959', 'MCS021', '81', '-', '-', '-', '-', '40', 51, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14028, '159673959', 'MCS022', '86', '-', '-', '-', '-', '59', 66, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14029, '159673959', 'MCS023', '90', '-', '-', '-', '-', '48', 59, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14030, '159673959', 'MCS024', '85', '-', '-', '-', '-', '61', 67, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43'),
(14031, '159673959', 'MCSL016', '91', '78', '-', '-', '-', '-', 82, 'Completed', 'BCA', 'SANJAY SINGH NEGI', '2019-08-09 04:15:43', '2019-08-09 04:15:43');

-- --------------------------------------------------------

--
-- Table structure for table `termends`
--

CREATE TABLE `termends` (
  `id` int(10) UNSIGNED NOT NULL,
  `enrollment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `termends`
--

INSERT INTO `termends` (`id`, `enrollment`, `program`, `created_at`, `updated_at`) VALUES
(2, '159673056', 'BCA</b>', '2019-08-03 06:27:23', '2019-08-03 06:27:23'),
(3, '155478956', 'BCA</b>', '2019-08-03 06:35:23', '2019-08-03 06:35:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes__courses`
--
ALTER TABLE `notes__courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `program_id` (`program_id`);

--
-- Indexes for table `notes__programs`
--
ALTER TABLE `notes__programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes__units`
--
ALTER TABLE `notes__units`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id`),
  ADD KEY `score_student_foreign` (`student`);

--
-- Indexes for table `termends`
--
ALTER TABLE `termends`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `notes__courses`
--
ALTER TABLE `notes__courses`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `notes__programs`
--
ALTER TABLE `notes__programs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notes__units`
--
ALTER TABLE `notes__units`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14032;

--
-- AUTO_INCREMENT for table `termends`
--
ALTER TABLE `termends`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
