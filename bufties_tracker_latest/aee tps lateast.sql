-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2023 at 01:38 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tps`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodataa`
--

CREATE TABLE `biodataa` (
  `ukey` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(250) NOT NULL,
  `rolukey` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodataa`
--

INSERT INTO `biodataa` (`ukey`, `name`, `gender`, `phone`, `email`, `password`, `rolukey`) VALUES
(1, 'Yusuf Ahmad', 'Male', '07037969117', 'iyusufahmad@gmail.com', '$2y$10$ujTzOKR86zlDa6PhWXrDR.ym87hzZCHk/.UTdUCzKw6ELSoIVMuSC', 0),
(2, 'Murtala Isma`il', 'Male', '07063598202', 'murtalaismail@gail.com', '$2y$10$uWNfGm3JI4OdRiWfRFN17eU7TH7PoFqsntYwB/vBrxgswyqZMw2Ze', 0),
(3, '', '', '', 'murtalaismail@gmail.com', '$2y$10$ChihAGa78EVQppoeQyCVzu457aEOqkagtkbbbxwau12K9ONwDRSxC', 0),
(4, '', '', '', 'abuya@gmail.com', '$2y$10$YCZgEaUFoMgxDoFB70sYx.Co.q.ONPEgqZVrcceK2K72wiBqkn6Pu', 0),
(5, '', '', '', 'aishazubairu57@gmail.com', '$2y$10$eCNnRRQwai2/lLM7Lrn8Uuuka.r43jkOwlxbwYXj.6u7Npjo86Bn2', 0),
(6, '', '', '', 'madaki@gmail.com', '$2y$10$baloOLGlsaRV4KfrUMhpzO05I4kkUtH170k2AYu56ubOcZVX2VBbC', 0),
(7, '', '', '', 'e10@gmail.com', '$2y$10$RvX5hpoonN44c.RtQxCuWe7DIXBovl6y6VxAoh1Uq9PdQOfqUAH8.', 0),
(8, '', '', '', 'seamlessict@gmail.com', '$2y$10$5GqISHXEHdG9h.j9RlVp1.v2t8RhPrfP6nFvCmk5sTqzR9u8zfW7W', 0);

-- --------------------------------------------------------

--
-- Table structure for table `carry_over`
--

CREATE TABLE `carry_over` (
  `id` int(11) NOT NULL,
  `course_id` varchar(8) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `department_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carry_over`
--

INSERT INTO `carry_over` (`id`, `course_id`, `status`, `department_id`, `faculty_id`, `stud_id`, `session_id`, `level_id`, `semester_id`) VALUES
(1, '9', 0, 2, 1, 3, 36, 3, 1),
(2, '9', 0, 2, 1, 8, 36, 3, 1),
(3, '9', 0, 2, 1, 9, 36, 3, 1),
(4, '10', 0, 2, 1, 3, 36, 3, 1),
(5, '10', 0, 2, 1, 9, 36, 3, 1),
(6, '6', 0, 2, 1, 3, 36, 3, 1),
(7, '6', 0, 2, 1, 9, 36, 3, 1),
(8, '6', 0, 2, 1, 30, 36, 3, 1),
(9, '7', 0, 2, 1, 3, 36, 3, 1),
(10, '7', 0, 2, 1, 9, 36, 3, 1),
(11, '7', 0, 2, 1, 26, 36, 3, 1),
(12, '7', 0, 2, 1, 30, 36, 3, 1),
(13, '8', 0, 2, 1, 3, 36, 3, 1),
(14, '8', 0, 2, 1, 9, 36, 3, 1),
(15, '8', 0, 2, 1, 16, 36, 3, 1),
(16, '8', 0, 2, 1, 30, 36, 3, 1),
(17, '8', 0, 2, 1, 36, 36, 3, 1),
(18, '4', 0, 2, 1, 3, 36, 3, 1),
(19, '4', 0, 2, 1, 9, 36, 3, 1),
(20, '4', 0, 2, 1, 10, 36, 3, 1),
(21, '4', 0, 2, 1, 13, 36, 3, 1),
(22, '4', 0, 2, 1, 16, 36, 3, 1),
(23, '4', 0, 2, 1, 30, 36, 3, 1),
(24, '5', 0, 2, 1, 3, 36, 3, 1),
(25, '5', 0, 2, 1, 13, 36, 3, 1),
(26, '5', 0, 2, 1, 16, 36, 3, 1),
(27, '1', 0, 2, 1, 3, 36, 3, 1),
(28, '1', 0, 2, 1, 9, 36, 3, 1),
(29, '1', 0, 2, 1, 13, 36, 3, 1),
(30, '2', 0, 2, 1, 3, 36, 3, 1),
(31, '3', 0, 2, 1, 1, 36, 3, 1),
(32, '3', 0, 2, 1, 3, 36, 3, 1),
(33, '3', 0, 2, 1, 13, 36, 3, 1),
(34, '3', 0, 2, 1, 30, 36, 3, 1),
(35, '3', 0, 2, 1, 33, 36, 3, 1),
(36, '3', 0, 2, 1, 36, 36, 3, 1),
(37, '11', 0, 2, 1, 30, 36, 3, 1),
(38, '11', 0, 2, 1, 31, 36, 3, 1),
(39, '23', 0, 2, 1, 1, 36, 3, 1),
(40, '23', 0, 2, 1, 4, 36, 3, 1),
(41, '23', 0, 2, 1, 13, 36, 3, 1),
(42, '23', 0, 2, 1, 33, 36, 3, 1),
(43, '24', 0, 2, 1, 30, 36, 3, 1),
(44, '24', 0, 2, 1, 36, 36, 3, 1),
(45, '14', 0, 2, 1, 3, 36, 3, 2),
(46, '14', 0, 2, 1, 9, 36, 3, 2),
(47, '12', 0, 2, 1, 3, 36, 3, 2),
(48, '12', 0, 2, 1, 9, 36, 3, 2),
(49, '12', 0, 2, 1, 30, 36, 3, 2),
(50, '13', 0, 2, 1, 3, 36, 3, 2),
(51, '13', 0, 2, 1, 9, 36, 3, 2),
(52, '19', 0, 2, 1, 3, 36, 3, 2),
(53, '19', 0, 2, 1, 9, 36, 3, 2),
(54, '20', 0, 2, 1, 3, 36, 3, 2),
(55, '20', 0, 2, 1, 9, 36, 3, 2),
(56, '20', 0, 2, 1, 30, 36, 3, 2),
(57, '20', 0, 2, 1, 36, 36, 3, 2),
(58, '21', 0, 2, 1, 3, 36, 3, 2),
(59, '21', 0, 2, 1, 9, 36, 3, 2),
(60, '16', 0, 2, 1, 1, 36, 3, 2),
(61, '16', 0, 2, 1, 3, 36, 3, 2),
(62, '16', 0, 2, 1, 8, 36, 3, 2),
(63, '16', 0, 2, 1, 9, 36, 3, 2),
(64, '16', 0, 2, 1, 13, 36, 3, 2),
(65, '16', 0, 2, 1, 14, 36, 3, 2),
(66, '16', 0, 2, 1, 16, 36, 3, 2),
(67, '16', 0, 2, 1, 30, 36, 3, 2),
(68, '17', 0, 2, 1, 3, 36, 3, 2),
(69, '17', 0, 2, 1, 9, 36, 3, 2),
(70, '18', 0, 2, 1, 3, 36, 3, 2),
(71, '18', 0, 2, 1, 9, 36, 3, 2),
(72, '18', 0, 2, 1, 28, 36, 3, 2),
(73, '18', 0, 2, 1, 30, 36, 3, 2),
(74, '15', 0, 2, 1, 3, 36, 3, 2),
(75, '15', 0, 2, 1, 9, 36, 3, 2),
(76, '22', 0, 2, 1, 3, 36, 3, 2),
(77, '22', 0, 2, 1, 9, 36, 3, 2),
(78, '22', 0, 2, 1, 30, 36, 3, 2),
(79, '46', 0, 2, 1, 3, 36, 3, 2),
(80, '46', 0, 2, 1, 9, 36, 3, 2),
(81, '46', 0, 2, 1, 10, 36, 3, 2),
(82, '46', 0, 2, 1, 13, 36, 3, 2),
(83, '46', 0, 2, 1, 16, 36, 3, 2),
(84, '46', 0, 2, 1, 30, 36, 3, 2),
(85, '26', 0, 2, 1, 30, 37, 4, 1),
(86, '27', 0, 2, 1, 30, 37, 4, 1),
(87, '28', 0, 2, 1, 30, 37, 4, 1),
(88, '32', 0, 2, 1, 30, 37, 4, 1),
(89, '33', 0, 2, 1, 30, 37, 4, 1),
(90, '34', 0, 2, 1, 13, 37, 4, 1),
(91, '34', 0, 2, 1, 30, 37, 4, 1),
(92, '37', 0, 2, 1, 3, 37, 4, 2),
(93, '37', 0, 2, 1, 9, 37, 4, 2),
(94, '50', 0, 0, 0, 2, 40, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `credit_unit` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_code`, `course_name`, `credit_unit`, `level_id`, `semester_id`, `status`) VALUES
(1, 'AEX 3201', 'Social Change and Rural Development', 2, 3, 1, 1),
(2, 'AEX 3203', 'Participatory Agricultural Extension', 2, 3, 1, 0),
(3, 'AEX 3205', 'Systems Thinking for Changing Agriculture', 2, 3, 1, 0),
(4, 'AEC 3201', 'Agricultural Production Economics', 2, 3, 1, 0),
(5, 'AEC 3203', 'Farm Business Management', 2, 3, 1, 0),
(6, 'AGX 3201', 'Principles of Plant Breeding', 2, 3, 1, 0),
(7, 'AGX 3203', 'Physiology of Crop Growth', 2, 3, 1, 0),
(8, 'AGX 3205', 'Introduction to Soil & Water Conservation', 2, 3, 1, 0),
(9, 'ANX 3201', 'Non-Ruminant Animal Production', 2, 3, 1, 0),
(10, 'ANX 3203', 'Feed Resource and Feeding Principles', 2, 3, 1, 0),
(11, 'GSP 2202', 'Nigerian Government and Economy', 2, 3, 0, 0),
(12, 'AEX 3202', 'Communication & Teaching Methods in Extension', 2, 3, 2, 0),
(13, 'AEX 3204', 'Research Methods', 2, 3, 2, 0),
(14, 'AEC 3204', 'Agricultural Entrepreneurship', 2, 3, 2, 0),
(15, 'ANX 3202', 'Ruminant  Animal Production ', 2, 3, 2, 0),
(16, 'AGX 3202', 'Plantation Crop Production', 2, 3, 2, 0),
(17, 'AGX 3204', 'Arable crop production', 2, 3, 2, 0),
(18, 'AGX 3206', 'Crop Protection', 2, 3, 2, 0),
(19, 'AGA 3201', 'Introduction to Computer and Information Management', 2, 3, 2, 0),
(20, 'AGA 3202', 'Value Addition on Agricultural Products', 2, 3, 2, 0),
(21, 'AGE 3201', 'Introduction to Agricultural Engineering', 2, 3, 2, 0),
(22, 'GSP 2204', 'Foundation of Nigerian Culture, Government and Economy', 2, 3, 2, 0),
(23, 'GSP 2222', 'Peace and Conflict', 2, 3, 1, 0),
(24, 'GSP 2201', 'Use of English', 2, 3, 1, 0),
(25, 'AEX 4201', 'Planning of Supervised Experienced Projects', 2, 3, 0, 0),
(26, 'AEX 4203', 'Principles of Cooperative Practices', 2, 4, 1, 0),
(27, 'AEX 4205', 'Management of Extension Organizations', 2, 4, 1, 0),
(28, 'AEX 4207', 'Development of Agricultural Extension Training Materials', 2, 4, 1, 0),
(29, 'AEX 4209', 'Current Issues in Agricultural Extension & Technology', 2, 4, 1, 0),
(30, 'AEC 4201', 'Agricultural Marketing and Prices', 2, 4, 1, 0),
(31, 'AEC 4203', 'Agricultural Policy and Development Planning', 2, 4, 1, 0),
(32, 'ANX 4201', 'Introduction to Fisheries and Wild Life', 2, 4, 1, 0),
(33, 'AGX 4201', 'Horticultural Crop Production', 2, 4, 1, 0),
(34, 'AGX 4203', 'Soil and Crop Nutrition ', 2, 4, 1, 0),
(35, 'AGX 4205', 'Farming Systems and Agro-forestry', 2, 4, 1, 0),
(36, 'AGE 4201', 'Introduction to Agricultural Mechanization', 2, 4, 1, 0),
(37, 'AGNX 4702', 'Conduct and Supervision of SEPs', 7, 4, 2, 0),
(38, 'AEX 5201', 'Programme Planning and Evaluation', 2, 5, 1, 0),
(39, 'AEX 5203', 'Gender and Youth Issues in Agricultural Extension', 2, 5, 1, 0),
(40, 'AEX 5405', 'Project', 4, 5, 1, 0),
(41, 'AGX 5201', 'Harvest and Post harvest Technology', 2, 5, 1, 0),
(42, 'AGX 5203', 'Irrigation and Drainage', 2, 5, 1, 0),
(43, 'AGX 5205', 'Seed Production Technology', 2, 5, 1, 0),
(44, 'AGX 5207', 'Pesticides and their Application', 2, 5, 1, 0),
(45, 'AGX 5209', 'Soil Water and Plant Analyses ', 2, 5, 1, 0),
(46, 'EEP 3201', 'Enterpreneurship and Innovation', 2, 0, 0, 0),
(47, 'GSP 2206', 'Peace Studies and Conflict Resolution', 2, 3, 0, 0),
(48, 'EEP 4201', 'Venture Creation and Growth', 2, 4, 1, 0),
(49, 'GSP 2202', 'Use of Library, Study Skills and ICT', 2, 3, 1, 1),
(50, 'GSP 2205', 'Logic and Philosophy', 2, 3, 2, 1),
(51, 'ANX3201', 'Animal Ruminant', 2, 0, 1, 0),
(52, 'ANX3201', 'Animal Ruminant', 2, 0, 1, 0),
(53, 'ANX3201', 'Animal Ruminant', 2, 1, 1, 0),
(54, 'ANX3201', 'Animal Ruminant', 2, 1, 1, 0),
(55, 'ANX3201', 'Animal Ruminant', 2, 1, 1, 0),
(56, 'ANX3202', 'Animal Rearing', 2, 3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_of_study`
--

CREATE TABLE `course_of_study` (
  `id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_of_study`
--

INSERT INTO `course_of_study` (`id`, `course_name`, `status`) VALUES
(1, 'B. Sc. Agronomy', 1),
(2, 'B. Sc. Crop Protection', 1),
(3, 'B. Sc. Agricultural Econnomics ', 1),
(4, 'B. Sc. Agricultural Extension', 1),
(5, 'History', 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department_name`, `faculty_id`, `status`) VALUES
(1, 'Agronomy', 1, 1),
(2, 'Agricultural Economics and Extension', 1, 1),
(3, 'Animal Science', 1, 1),
(4, 'Crop Protection', 1, 1),
(5, 'Forestry', 1, 1),
(6, 'Fishery', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(50) NOT NULL,
  `employee_salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `employee_name`, `employee_salary`) VALUES
(2, 'Smith', 170750),
(3, 'Jhon', 86000),
(6, 'Andy', 372000),
(7, 'Flower', 137500),
(8, 'Steve', 327900),
(9, 'William', 205500),
(10, 'Dany', 103600),
(11, 'Dove', 120000),
(12, 'Kim', 14000),
(13, 'Frost', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(11) NOT NULL,
  `course_id` varchar(8) NOT NULL,
  `score` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `examtype_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `course_id`, `score`, `department_id`, `faculty_id`, `stud_id`, `session_id`, `level_id`, `semester_id`, `examtype_id`) VALUES
(1, '15', 60, 0, 0, 1, 40, 3, 1, 1),
(2, '15', 67, 0, 0, 2, 40, 3, 1, 1),
(3, '15', 74, 0, 0, 3, 40, 3, 1, 1),
(4, '19', 69, 0, 0, 1, 40, 3, 1, 1),
(5, '19', 61, 0, 0, 2, 40, 3, 1, 1),
(6, '19', 65, 0, 0, 3, 40, 3, 1, 1),
(7, '20', 51, 0, 0, 1, 40, 3, 1, 1),
(8, '20', 43, 0, 0, 2, 40, 3, 1, 1),
(9, '20', 49, 0, 0, 3, 40, 3, 1, 1),
(10, '16', 66, 0, 0, 1, 40, 3, 1, 1),
(11, '16', 47, 0, 0, 2, 40, 3, 1, 1),
(12, '16', 61, 0, 0, 3, 40, 3, 1, 1),
(13, '17', 82, 0, 0, 1, 40, 3, 1, 1),
(14, '17', 55, 0, 0, 2, 40, 3, 1, 1),
(15, '17', 64, 0, 0, 3, 40, 3, 1, 1),
(16, '18', 53, 0, 0, 1, 40, 3, 1, 1),
(17, '18', 50, 0, 0, 2, 40, 3, 1, 1),
(18, '18', 65, 0, 0, 3, 40, 3, 1, 1),
(19, '21', 52, 0, 0, 1, 40, 3, 1, 1),
(20, '21', 60, 0, 0, 2, 40, 3, 1, 1),
(21, '21', 56, 0, 0, 3, 40, 3, 1, 1),
(22, '14', 55, 0, 0, 1, 40, 3, 1, 1),
(23, '14', 44, 0, 0, 2, 40, 3, 1, 1),
(24, '14', 63, 0, 0, 3, 40, 3, 1, 1),
(25, '13', 48, 0, 0, 1, 40, 3, 1, 1),
(26, '13', 57, 0, 0, 2, 40, 3, 1, 1),
(27, '13', 63, 0, 0, 3, 40, 3, 1, 1),
(28, '14', 58, 0, 0, 1, 40, 3, 1, 1),
(29, '14', 61, 0, 0, 2, 40, 3, 1, 1),
(30, '14', 71, 0, 0, 3, 40, 3, 1, 1),
(31, '24', 51, 0, 0, 1, 40, 3, 1, 1),
(32, '24', 44, 0, 0, 2, 40, 3, 1, 1),
(33, '24', 48, 0, 0, 3, 40, 3, 1, 1),
(34, '50', 51, 0, 0, 1, 40, 3, 1, 1),
(35, '50', 35, 0, 0, 2, 40, 3, 1, 1),
(36, '50', 50, 0, 0, 3, 40, 3, 1, 1),
(37, '46', 60, 0, 0, 1, 40, 3, 1, 1),
(38, '46', 54, 0, 0, 2, 40, 3, 1, 1),
(39, '46', 63, 0, 0, 3, 40, 3, 1, 1),
(40, '9', 51, 0, 0, 1, 40, 3, 2, 1),
(41, '9', 40, 0, 0, 2, 40, 3, 2, 1),
(42, '9', 65, 0, 0, 3, 40, 3, 2, 1),
(43, '10', 41, 0, 0, 1, 40, 3, 2, 1),
(44, '10', 45, 0, 0, 2, 40, 3, 2, 1),
(45, '10', 49, 0, 0, 3, 40, 3, 2, 1),
(46, '6', 50, 0, 0, 1, 40, 3, 2, 1),
(47, '6', 65, 0, 0, 2, 40, 3, 2, 1),
(48, '6', 62, 0, 0, 3, 40, 3, 2, 1),
(49, '7', 77, 0, 0, 1, 40, 3, 2, 1),
(50, '7', 62, 0, 0, 2, 40, 3, 2, 1),
(51, '7', 68, 0, 0, 3, 40, 3, 2, 1),
(52, '8', 63, 0, 0, 1, 40, 3, 2, 1),
(53, '8', 47, 0, 0, 2, 40, 3, 2, 1),
(54, '8', 60, 0, 0, 3, 40, 3, 2, 1),
(55, '4', 73, 0, 0, 1, 40, 3, 2, 1),
(56, '4', 60, 0, 0, 2, 40, 3, 2, 1),
(57, '4', 51, 0, 0, 3, 40, 3, 2, 1),
(58, '5', 45, 0, 0, 1, 40, 3, 2, 1),
(59, '5', 46, 0, 0, 2, 40, 3, 2, 1),
(60, '5', 52, 0, 0, 3, 40, 3, 2, 1),
(61, '1', 56, 0, 0, 1, 40, 3, 2, 1),
(62, '1', 56, 0, 0, 2, 40, 3, 2, 1),
(63, '1', 65, 0, 0, 3, 40, 3, 2, 1),
(64, '2', 46, 0, 0, 1, 40, 3, 2, 1),
(65, '2', 47, 0, 0, 2, 40, 3, 2, 1),
(66, '2', 60, 0, 0, 3, 40, 3, 2, 1),
(67, '3', 55, 0, 0, 1, 40, 3, 2, 1),
(68, '3', 44, 0, 0, 2, 40, 3, 2, 1),
(69, '3', 64, 0, 0, 3, 40, 3, 2, 1),
(70, '24', 52, 0, 0, 1, 40, 3, 2, 1),
(71, '24', 47, 0, 0, 2, 40, 3, 2, 1),
(72, '24', 66, 0, 0, 3, 40, 3, 2, 1),
(73, '22', 66, 0, 0, 1, 40, 3, 2, 1),
(74, '22', 48, 0, 0, 2, 40, 3, 2, 1),
(75, '22', 64, 0, 0, 3, 40, 3, 2, 1),
(76, '47', 62, 0, 0, 1, 40, 3, 2, 1),
(77, '47', 52, 0, 0, 2, 40, 3, 2, 1),
(78, '47', 61, 0, 0, 3, 40, 3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `examtype`
--

CREATE TABLE `examtype` (
  `id` int(11) NOT NULL,
  `examtype_name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `examtype`
--

INSERT INTO `examtype` (`id`, `examtype_name`, `status`) VALUES
(1, 'Regular', 1),
(2, 'Cary Over', 1),
(3, 'Spil Over', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ex_excel`
--

CREATE TABLE `ex_excel` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `m_status` varbinary(15) NOT NULL,
  `lga` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ex_excel`
--

INSERT INTO `ex_excel` (`id`, `name`, `age`, `gender`, `m_status`, `lga`, `state`) VALUES
(1, 'Sani', 83, 'Male', 0x6d617272696564, 'Zaria', 'Kaduna'),
(2, 'Ibrahim', 20, 'Male', 0x53696e676c65, 'Gwale', 'Kano'),
(3, 'Adamu', 21, 'Male', 0x4469766f636565, 'Kiyawa', 'Jigawa'),
(4, 'Sani', 83, 'Male', 0x6d617272696564, 'Zaria', 'Kaduna'),
(5, 'Ibrahim', 20, 'Male', 0x53696e676c65, 'Gwale', 'Kano'),
(6, 'Adamu', 21, 'Male', 0x4469766f636565, 'Kiyawa', 'Jigawa'),
(7, 'Sani', 83, 'Male', 0x6d617272696564, 'Zaria', 'Kaduna'),
(8, 'Ibrahim', 20, 'Male', 0x53696e676c65, 'Gwale', 'Kano'),
(9, 'Adamu', 21, 'Male', 0x4469766f636565, 'Kiyawa', 'Jigawa'),
(10, 'Sani', 83, 'Male', 0x6d617272696564, 'Zaria', 'Kaduna'),
(11, 'Ibrahim', 20, 'Male', 0x53696e676c65, 'Gwale', 'Kano'),
(12, 'Adamu', 21, 'Male', 0x4469766f636565, 'Kiyawa', 'Jigawa');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `faculty_name` varchar(100) NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `faculty_name`, `status`) VALUES
(1, 'Agriculture', '1'),
(2, 'Sciences', '1'),
(3, 'Medicine', '1');

-- --------------------------------------------------------

--
-- Table structure for table `gps`
--

CREATE TABLE `gps` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `tcr` int(11) NOT NULL,
  `tce` int(11) NOT NULL,
  `tpe` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gps`
--

INSERT INTO `gps` (`id`, `student_id`, `tcr`, `tce`, `tpe`, `session_id`, `semester_id`, `status`) VALUES
(1, 3, 52, 0, 192, 40, 0, 0),
(2, 2, 52, 0, 130, 40, 0, 0),
(3, 1, 52, 0, 172, 40, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `level_name` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `level_name`, `status`) VALUES
(1, 'Level 100', 0),
(2, 'Level 200', 0),
(3, 'Level 300', 1),
(4, 'Level 400', 1),
(5, 'Level 500', 1),
(6, 'Spill Over I', 1),
(7, 'Spill Over II', 1);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(11) NOT NULL,
  `semester_name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `semester_name`, `status`) VALUES
(1, 'First', 1),
(2, 'Second', 1);

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `session_name` varchar(20) NOT NULL,
  `year` year(4) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `session_name`, `year`, `status`) VALUES
(1, '1979/1980', 1980, 1),
(2, '1980/1981', 1981, 1),
(3, '1981/1982', 1982, 1),
(4, '1982/1983', 1983, 1),
(5, '1983/1984', 1984, 1),
(6, '1984/1985', 1985, 1),
(7, '1985/1986', 1986, 1),
(8, '1986/1987', 1987, 1),
(9, '1987/1988', 1988, 1),
(10, '1988/1989', 1989, 1),
(11, '1989/1990', 1990, 1),
(12, '1990/1991', 1991, 1),
(13, '1991/1992', 1992, 1),
(14, '1992/1993', 1993, 1),
(15, '1993/1994', 1994, 1),
(16, '1994/1995', 1995, 1),
(17, '1995/1996', 1996, 1),
(18, '1996/1997', 1997, 1),
(19, '1997/1998', 1998, 1),
(20, '1998/1999', 1999, 1),
(21, '1999/2000', 2000, 1),
(22, '2000/2001', 2001, 1),
(23, '2001/2002', 2002, 1),
(24, '2002/2003', 2003, 1),
(25, '2003/2004', 2004, 1),
(26, '2004/2005', 2005, 1),
(27, '2005/2006', 2006, 1),
(28, '2006/2007', 2007, 1),
(29, '2007/2008', 2008, 1),
(30, '2008/2009', 2009, 1),
(31, '2009/2010', 2010, 1),
(32, '2010/2011', 2011, 1),
(33, '2011/2012', 2012, 1),
(34, '2012/2013', 2013, 1),
(35, '2013/2014', 2014, 1),
(36, '2014/2015', 2015, 1),
(37, '2015/2016', 2016, 1),
(38, '2016/2017', 2017, 1),
(39, '2017/2018', 2018, 1),
(40, '2018/2019', 2019, 1),
(41, '2019/2020', 2020, 1),
(46, '2020/2021', 2021, 1),
(47, '2021/2022', 2022, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `course_of_study_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `regno`, `student_name`, `course_of_study_id`, `department_id`, `faculty_id`, `level_id`, `session_id`) VALUES
(1, 'AGR/18/AGR/01917', 'Ishaq Madaki', 0, 0, 0, 3, 40),
(2, 'AGR/18/AGR/01918', 'Aminu Garba Musa', 0, 0, 0, 3, 40),
(3, 'AGR/18/AGR/01920', 'Plangwam Ngal Bahago', 0, 0, 0, 3, 40);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`) VALUES
(1, 'Yusuf Ahmad', 'iyusufahmad@gmail.com', '$2y$10$138ALwjksl8RzqT818.y4eQjBWKbNA5YOs3y2VmVzlvbI5.Vh3XYG', 0),
(2, 'Amina Aminu Idris', 'amina@gmail.com', '$2y$10$YL1bb4Vg/h2ooMEMCC3.WOI23t01nV6q8vr9sx7DLJG9p/KpbIlui', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodataa`
--
ALTER TABLE `biodataa`
  ADD PRIMARY KEY (`ukey`);

--
-- Indexes for table `carry_over`
--
ALTER TABLE `carry_over`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_of_study`
--
ALTER TABLE `course_of_study`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examtype`
--
ALTER TABLE `examtype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ex_excel`
--
ALTER TABLE `ex_excel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gps`
--
ALTER TABLE `gps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodataa`
--
ALTER TABLE `biodataa`
  MODIFY `ukey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `carry_over`
--
ALTER TABLE `carry_over`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `course_of_study`
--
ALTER TABLE `course_of_study`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `examtype`
--
ALTER TABLE `examtype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ex_excel`
--
ALTER TABLE `ex_excel`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gps`
--
ALTER TABLE `gps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
