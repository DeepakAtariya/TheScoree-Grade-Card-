-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2019 at 06:37 PM
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
(71, 'MCA', 'MCSP060', 'Project\r\n'),
(72, 'BA', '?FEG-01', '?Foundation Course in English-1 Or Foundation Course in Hindi-2'),
(73, 'BA', '?FST-01', '?Foundation Course in Science and Technology'),
(74, 'BA', '?BHDF-01', '?Foundation Course in Hindi'),
(75, 'BA', '?FHS-1', '?Foundation Course in Humanities and Social Sciences'),
(76, 'BA', '?FGB-01', '?Foundation Course in Bengali'),
(77, 'BA', '?FKD-1', '?Foundation Course in Kannada'),
(78, 'BA', '?FML-1', '?Foundation Course in Malayalam'),
(79, 'BA', '?FMT-1', '?Foundation Course in Marathi'),
(80, 'BA', '?FOR-1', '?Foundation Course in Oriya'),
(81, 'BA', '?FOR-1', '?Foundation Course in Oriya'),
(82, 'BA', '?FPB-1', '?Foundation Course in Punjabi'),
(83, 'BA', '?FTM-1', '?Foundation Course in Tamil'),
(84, 'BA', '?FTG-1', '?Foundation Course in Telugu'),
(85, 'BA', '?FUD-1', '?Foundation Course in Urdu'),
(86, 'BA', '?BEGE-101', '?From Language to Literature'),
(87, 'BA', '?EEG-02', '?The Structure of Modern English'),
(88, 'BA', '?EEG-03', '?Communication Skills in English'),
(89, 'BA', '?EEG-04', '?English for Practical Purposes'),
(90, 'BA', '?EEG-05', '?Understanding Prose'),
(91, 'BA', '?EEG-06', '?Understanding Poetry'),
(92, 'BA', '?EEG-06', '?Understanding Poetry'),
(93, 'BA', '?EEG-07', '?Understanding Drama'),
(94, 'BA', '?EEG-08', '?Reading the Novel'),
(95, 'BA', '?AFW-(E)', '?Feature Writing'),
(96, 'BA', '?AWR-(E)', '?Writing for Radio'),
(97, 'BA', '?AWR-(H)', '?Radio Lekhan (Hindi)'),
(98, 'BA', '?EHD-01', '?Hindi Gadya'),
(99, 'BA', '?EHD-02', '?Hindi Kavya'),
(100, 'BA', '?EHD-03', '?Hindi Sahitya ka Itihas evam Sahitya Parichay'),
(101, 'BA', '?EHD-04', '?Madhyakaleen Bharatiya Sahitya: Samaj aur Sanskriti'),
(102, 'BA', '?EHD-05', '?Adhunik Bharatiya Sahitya: Navjagaran aur Rashtriya Chetna'),
(103, 'BA', '?EHD-06', '?Hindi Bhasha: Itihas aur Vartman'),
(104, 'BA', '?EHD-07', '?Hindi Samrachna'),
(105, 'BA', '?CTE-03', '?Teaching Strategies'),
(106, 'BA', '?CTE-04', '?Teaching English (Elementary School)'),
(107, 'BA', '?CTE-05', '?Teaching English (Secondary School)'),
(108, 'BA', '?FAS-01', '?Foundation Course in Assamese'),
(109, 'BA', '?FEG-1', '?Foundation Course in English-1'),
(110, 'BA', '?AOM-1', '?Office Organisation Management'),
(111, 'BA', '?ASP-1', '?Secretarial Practice'),
(112, 'BA', '?AHE-1', '?Human Environment'),
(113, 'BA', '?EHI-1', '?Modern India, 1857-1964`'),
(114, 'BA', '?EHI-2', '?India: Earliest Times to 8th Century A.D.'),
(115, 'BA', '?EHI-3', '?India From 8th to 15th Century A.D.'),
(116, 'BA', '?EHI-4', '?India From 16th to Mid 18th Century A.D.'),
(117, 'BA', '?ESO-15', '?Society and Religion'),
(118, 'BA', '?BPVI-028', '?Entrepreneurship and Marketing'),
(119, 'BA', '?DECE-1', '?Organising Child Care Services'),
(120, 'BA', '?MPA-012', '?Administrative Theory'),
(121, 'BA', '?AED-1', '?Export Procedures and Documentation'),
(122, 'BA', '?ATR-1', '?Translation'),
(123, 'BA', '?ACS-1', '?Consumer Studies -ACS-1'),
(124, 'BA', '?BCOA-001', '?Business Communication and Entrepreneurship'),
(125, 'BA', '?DNHE- 01', '?Nutrition for the Community'),
(126, 'BA', '?MS-51', '?Operations Research'),
(127, 'BA', '?EU-1', '?History of Urdu Language'),
(128, 'BA', '?EU-2', '?History of Urdu Literature'),
(129, 'BA', '?EU-3', '?Urdu Poetry'),
(130, 'BA', '?EU-4', '?Urdu Fiction'),
(131, 'BA', '?EU-5', '?Urdu Non-Fictional Prose'),
(132, 'BA', '?EU-6', '?Elements of Urdu Literature'),
(133, 'BA', '?EU-7', '?Diasprestic Urdu Literature'),
(134, 'BA', '?EU-8', '?Women in Urdu Literature'),
(135, 'BA', '?EU-9', '?Socio-Cultural Forms in Urdu'),
(136, 'BA', '?EPS-11', '?Political Ideas and Ideologies'),
(137, 'BA', '?EPS-12', '?Government & Politics in India'),
(138, 'BA', '?EPS-03', '?Modern Indian Political Thought'),
(139, 'BA', '?EPS-15', '?South Asia: Economy, Society'),
(140, 'BA', '?EPS-06', '?Government and Politics in East'),
(141, 'BA', '?EPS-07', '?International Relations'),
(142, 'BA', '?EPS-07', '?International Relations'),
(143, 'BA', '?EPS-08', '?Government and Politics in Australia'),
(144, 'BA', '?EPS-09', '?Comparative Government and Politics'),
(145, 'BA', '?EHI-05', '?India from Mid 18th to Mid 19th Century'),
(146, 'BA', '?EHI-06', '?History of China and Japan 1840-1949'),
(147, 'BA', '?EHI-07??', '?Modern Europe: Mid 18th to Mid 20th Century'),
(148, 'BA', '?BECE-015', '?Elementary Mathematical Methods in Economic Development'),
(149, 'BA', '?BECE-016', '?Economic Development: Comparative'),
(150, 'BA', '?EEC-07', '?Industrial Development in In'),
(151, 'BA', '?EEC-10', '?National Income Accounting'),
(152, 'BA', '?EEC-11', '?Fundamentals of Economics'),
(153, 'BA', '?BECE-002', '?Indian Economic Development:Issues and Perspectives'),
(154, 'BA', '?EEC-13', '?Elementary Statistical Methods and Survey Techniques'),
(155, 'BA', '?EEC-14', '?Agricultural Development in India'),
(156, 'BA', '?EPA-3', '?Development Administration'),
(157, 'BA', '?EPA-4', '?Personnel Administration'),
(158, 'BA', '?EPA-5', '?Financial Administration'),
(159, 'BA', '?EPA-6', '?Public Policy'),
(160, 'BA', '?APM-1', '?Integrated Pest Management'),
(161, 'BA', '?AEC-1', '?Environmental Chemistry'),
(162, 'BA', '?AST-01', '?Statistical techniques'),
(163, 'BA', '?AMT-1', '?Teaching of Primary School Mathematics'),
(164, 'BA', '?BHDA-101', '?Samachar Lekhan aur Feature Lekhan'),
(165, 'BA', '?ESO-11', '?The Study of Society'),
(166, 'BA', '?ESO-12', '?Society in India'),
(167, 'BA', '?ESO-13', '?Sociological Thought'),
(168, 'BA', '?ESO-14', '?Society and Stratification'),
(169, 'BA', '?ESO-16', '?Social Problems in India'),
(170, 'BA', '?BPY-001', '?Indian Philosophy: Part I'),
(171, 'BA', '?BPY-002', '?Logic: Classical and Symbolic'),
(172, 'BA', '?BPY-003', '?Ancient and Medieval Philosophy'),
(173, 'BA', '?BPY-004', '?Religions of the World'),
(174, 'BA', '?BPY-005', '?Indian Philosophy: Part II'),
(175, 'BA', '?BPY-006', '?Metaphysics'),
(176, 'BA', '?BPY-007', '?Ethics'),
(177, 'BA', '?BPY-008', '?Modern Western Philosophy'),
(178, 'BA', '?BPY-009', '?Contemporary Western Philosophy'),
(179, 'BA', '?BPY-010', '?Epistemology'),
(180, 'BA', '?BPY-011', '?Philosophy of Human Persons'),
(181, 'BA', '?BPY-012', '?Philosophy of Science and Cosmology'),
(182, 'BCOM', '?FEG-02', '?Foundation Course in English'),
(183, 'BCOM', '?FST-1', '?Foundation Course in Science and Technology'),
(184, 'BCOM', '?FEG-1', '?Foundation Course in English-1'),
(185, 'BCOM', '?FHD-2', '?Foundation Course in Hindi-2'),
(186, 'BCOM', '?FHD-1', '?Foundation Course in Hindi-1'),
(187, 'BCOM', '?MSW-009', '?Community Organisation Management for Community Development'),
(188, 'BCOM', '?ECO-1', '?Business Organisation'),
(189, 'BCOM', '?ECO-02', '?Accountancy-I'),
(190, 'BCOM', '?ECO-03', '?Management Theory'),
(191, 'BCOM', '?ECO-05', '?Mercantile Law'),
(192, 'BCOM', '?ECO-06', '?Economic Theory'),
(193, 'BCOM', '?ECO-07', '?Elements of Statistics'),
(194, 'BCOM', '?ECO-08', '?Company Law'),
(195, 'BCOM', '?ECO-09', '?Money, Banking and Financial Institutions'),
(196, 'BCOM', '?ECO-10', '?Elements of Costing'),
(197, 'BCOM', '?ECO-11', '?Elements of Income Tax'),
(198, 'BCOM', '?ECO-12', '?Elements of Auditing'),
(199, 'BCOM', '?ECO-13', '?Business Environment'),
(200, 'BCOM', '?ECO-14', '?Accountancy-II'),
(201, 'BCOM', '?AFW-(E)', '?Feature Writing'),
(202, 'BCOM', '?AWR-(E)', '?Writing for Radio'),
(203, 'BCOM', '?AWR-(H)', '?Radio Lekhan (Hindi)'),
(204, 'BCOM', '?CTE-03', '?Teaching Strategies'),
(205, 'BCOM', '?CTE-04', '?Teaching English (Elementary School)'),
(206, 'BCOM', '?CTE-05', '?Teaching English (Secondary School)'),
(207, 'BCOM', '?AOM-1', '?Office Organisation Management'),
(208, 'BCOM', '?ASP-1', '?Secretarial Practice'),
(209, 'BCOM', '?AHE-1', '?Human Environment'),
(210, 'BCOM', '?AMT-01', '?Teaching of Primary School Mathematics'),
(211, 'BCOM', '?AMK-1', '?Marketing -AMK-1'),
(212, 'BCOM', '?AED-1', '?Export Procedures and Documentation'),
(213, 'BCOM', '?ATR-1', '?Translation'),
(214, 'BCOM', '?ACC-1', '?Organizing Childcare Services'),
(215, 'BCOM', '?ANC-1', '?Nutrition for the Community -ANC-1'),
(216, 'BCOM', '?ACS-1', '?Consumer Studies -ACS-1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
