-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2019 at 09:36 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `feedback` text NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feedback`, `updated_at`, `created_at`) VALUES
(1, 'deepak', 'deepak@de.com', 'asdasdasd', '0000-00-00 00:00:00', NULL),
(2, 'asd', 'asd@gmail.com', 'asd', '2019-07-15 00:09:45', '2019-07-15 00:09:45'),
(3, 'dasd', 'codolic127@gmail.com', 'dasda', '2019-07-15 00:10:36', '2019-07-15 00:10:36'),
(4, 'Hello', 'deepakkumaratariya@gmail.com', 'asdasdas', '2019-07-15 00:14:32', '2019-07-15 00:14:32'),
(5, 'deepak', 'deepakkumaratariya@gmail.com', 'deepak suggestions', '2019-07-15 00:52:21', '2019-07-15 00:52:21'),
(6, 'deepak', 'deepakkumaratariya@gmail.com', 'deepak', '2019-07-15 00:56:19', '2019-07-15 00:56:19'),
(7, 'BCA', '159673056', 'dasd', '2019-07-21 19:45:17', '2019-07-21 19:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_11_26_112440_student_details', 1);

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `name`) VALUES
(1, 'BCA'),
(2, 'MCA');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`id`, `student`, `course_code`, `asgn1`, `lab1`, `lab2`, `lab3`, `lab4`, `theory`, `total`, `status`, `program`, `name`, `created_at`, `updated_at`) VALUES
(1, '159673056', 'BCS011', '87', '-', '-', '-', '-', '63', 69, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(2, '159673056', 'BCS012', '83', '-', '-', '-', '-', '40', 51, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(3, '159673056', 'BCS031', '92', '-', '-', '-', '-', '50', 61, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(4, '159673056', 'BCS040', '89', '-', '-', '-', '-', '30', 45, 'Not Completed', 'BCA', 'DEEPAK', NULL, NULL),
(5, '159673056', 'BCS041', '89', '-', '-', '-', '-', '44', 56, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(6, '159673056', 'BCS042', '88', '-', '-', '-', '-', '64', 70, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(7, '159673056', 'BCS051', '88', '-', '-', '-', '-', '72', 76, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(8, '159673056', 'BCS052', '87', '-', '-', '-', '-', '58', 66, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(9, '159673056', 'BCS053', '90', '-', '-', '-', '-', '86', 87, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(10, '159673056', 'BCS054', '79', '-', '-', '-', '-', '63', 67, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(11, '159673056', 'BCS055', '89', '-', '-', '-', '-', '50', 60, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(12, '159673056', 'BCS062', '88', '-', '-', '-', '-', '50', 60, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(13, '159673056', 'BCSL013', '89', '66', '-', '-', '-', '-', 72, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(14, '159673056', 'BCSL021', '88', '92', '-', '-', '-', '-', 91, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(15, '159673056', 'BCSL022', '86', '92', '-', '-', '-', '-', 91, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(16, '159673056', 'BCSL032', '90', '46', '-', '-', '-', '-', 57, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(17, '159673056', 'BCSL033', '82', '56', '-', '-', '-', '-', 63, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(18, '159673056', 'BCSL034', '80', '62', '-', '-', '-', '-', 67, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(19, '159673056', 'BCSL043', '94', '96', '-', '-', '-', '-', 96, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(20, '159673056', 'BCSL044', '90', '94', '-', '-', '-', '-', 93, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(21, '159673056', 'BCSL045', '92', '98', '-', '-', '-', '-', 97, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(22, '159673056', 'BCSL056', '90', '54', '-', '-', '-', '-', 63, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(23, '159673056', 'BCSL057', '90', '76', '-', '-', '-', '-', 80, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(24, '159673056', 'BCSL058', '80', '64', '-', '-', '-', '-', 68, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(25, '159673056', 'BCSL063', '94', '50', '-', '-', '-', '-', 61, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(26, '159673056', 'BCSP064', '-', '40', '44', '-', '-', '-', 41, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(27, '159673056', 'ECO01', '87', '-', '-', '-', '-', '62', 69, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(28, '159673056', 'ECO02', '80', '-', '-', '-', '-', '48', 56, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(29, '159673056', 'FEG02', '86', '-', '-', '-', '-', '42', 53, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(30, '159673056', 'MCS011', '81', '-', '-', '-', '-', '68', 72, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(31, '159673056', 'MCS012', '80', '-', '-', '-', '-', '56', 63, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(32, '159673056', 'MCS013', '81', '-', '-', '-', '-', '40', 51, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(33, '159673056', 'MCS014', '84', '-', '-', '-', '-', '43', 54, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(34, '159673056', 'MCS015', '80', '-', '-', '-', '-', '50', 58, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(35, '159673056', 'MCS021', '85', '-', '-', '-', '-', '48', 58, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(36, '159673056', 'MCS022', '90', '-', '-', '-', '-', '46', 57, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(37, '159673056', 'MCS023', '85', '-', '-', '-', '-', '54', 62, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(38, '159673056', 'MCS024', '89', '-', '-', '-', '-', '47', 58, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(39, '159673056', 'MCSL016', '90', '94', '-', '-', '-', '-', 93, 'Completed', 'BCA', 'DEEPAK', NULL, NULL),
(40, '159673056', 'MCS031', '88', '#', '#', '#', '#', '50', 60, 'Completed', 'MCA', 'DEEPAK', NULL, NULL),
(41, '159673056', 'MCS032', '91', '#', '#', '#', '#', '42', 55, 'Completed', 'MCA', 'DEEPAK', NULL, NULL),
(42, '159673056', 'MCS033', '88', '#', '#', '#', '#', '46', 57, 'Completed', 'MCA', 'DEEPAK', NULL, NULL),
(43, '159673056', 'MCS034', '90', '#', '#', '#', '#', '41', 54, 'Completed', 'MCA', 'DEEPAK', NULL, NULL),
(44, '159673056', 'MCS035', '90', '#', '#', '#', '#', '47', 58, 'Completed', 'MCA', 'DEEPAK', NULL, NULL),
(45, '159673056', 'MCSL036', '89', '73', '67', '75', '-', '#', 76, 'Completed', 'MCA', 'DEEPAK', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `enrollment` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id`),
  ADD KEY `score_student_foreign` (`student`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `enrollment` (`enrollment`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
