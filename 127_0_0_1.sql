-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2018 at 08:23 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `time_table`
--
CREATE DATABASE IF NOT EXISTS `time_table` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `time_table`;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(13) DEFAULT NULL,
  `subjects` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `mobile`, `subjects`) VALUES
(12, 'A', '4451', 'u14cs001,u14cs003'),
(13, 'B', '596', 'u14cs002'),
(14, 'C', '5125', 'u14cs001,u14cs002,u14cs003,u14cs003'),
(15, 'D', '9685', 'u14cs001'),
(16, 'E', '2514', 'u14cs004'),
(17, 'F', '142514', 'u14cs003,u14cs004'),
(18, 'J', '3251', 'u14cs003,u14cs002'),
(19, 'Z', '87946', '6hin,7hin,8hin,9hin,10hin'),
(20, 'X', '124785', '6eng,7eng,8eng,9eng,10eng'),
(21, 'V', '465132', '6mat,7mat,8mat,9mat,10mat'),
(22, 'L', '15314', '6sci,7sci,8sci,9sci,10sci'),
(23, 'T', '1324654', '7soc,8soc,9soc,10soc'),
(24, 'sanjay', '1234567890', 'u14cs001,u14cs003');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `section` varchar(1) DEFAULT NULL,
  `cse` varchar(3) NOT NULL,
  `ece` varchar(3) NOT NULL,
  `eee` varchar(3) NOT NULL,
  `mech` varchar(3) NOT NULL,
  `civil` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `section`, `cse`, `ece`, `eee`, `mech`, `civil`) VALUES
(1, '1', '1', '2', '3', '4', '5'),
(2, '2', '11', '12', '13', '14', '15'),
(3, '3', '21', '22', '23', '24', '25');

-- --------------------------------------------------------

--
-- Table structure for table `slot_info`
--

CREATE TABLE `slot_info` (
  `id` int(11) NOT NULL,
  `class` varchar(2) NOT NULL,
  `slot_id` varchar(3) DEFAULT NULL,
  `subject` varchar(10) DEFAULT NULL,
  `faculty` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slot_info`
--

INSERT INTO `slot_info` (`id`, `class`, `slot_id`, `subject`, `faculty`) VALUES
(1, '1', '1', NULL, NULL),
(2, '1', '2', NULL, NULL),
(3, '1', '3', NULL, NULL),
(4, '1', '4', NULL, NULL),
(5, '1', '5', NULL, NULL),
(6, '1', '6', NULL, NULL),
(7, '1', '7', NULL, NULL),
(8, '2', '1', NULL, NULL),
(9, '2', '2', NULL, NULL),
(10, '2', '3', NULL, NULL),
(11, '2', '4', NULL, NULL),
(12, '2', '5', NULL, NULL),
(13, '2', '6', NULL, NULL),
(14, '2', '7', NULL, NULL),
(15, '3', '1', NULL, NULL),
(16, '3', '2', NULL, NULL),
(17, '3', '3', NULL, NULL),
(18, '3', '4', NULL, NULL),
(19, '3', '5', NULL, NULL),
(20, '3', '6', NULL, NULL),
(21, '3', '7', NULL, NULL),
(22, '4', '1', NULL, NULL),
(23, '4', '2', NULL, NULL),
(24, '4', '3', NULL, NULL),
(25, '4', '4', NULL, NULL),
(26, '4', '5', NULL, NULL),
(27, '4', '6', NULL, NULL),
(28, '4', '7', NULL, NULL),
(29, '5', '1', NULL, NULL),
(30, '5', '2', NULL, NULL),
(31, '5', '3', NULL, NULL),
(32, '5', '4', NULL, NULL),
(33, '5', '5', NULL, NULL),
(34, '5', '6', NULL, NULL),
(35, '5', '7', NULL, NULL),
(36, '6', '1', NULL, NULL),
(37, '6', '2', NULL, NULL),
(38, '6', '3', NULL, NULL),
(39, '6', '4', NULL, NULL),
(40, '6', '5', NULL, NULL),
(41, '6', '6', NULL, NULL),
(42, '6', '7', NULL, NULL),
(43, '7', '1', NULL, NULL),
(44, '7', '2', NULL, NULL),
(45, '7', '3', NULL, NULL),
(46, '7', '4', NULL, NULL),
(47, '7', '5', NULL, NULL),
(48, '7', '6', NULL, NULL),
(49, '7', '7', NULL, NULL),
(50, '8', '1', NULL, NULL),
(51, '8', '2', NULL, NULL),
(52, '8', '3', NULL, NULL),
(53, '8', '4', NULL, NULL),
(54, '8', '5', NULL, NULL),
(55, '8', '6', NULL, NULL),
(56, '8', '7', NULL, NULL),
(57, '9', '1', NULL, NULL),
(58, '9', '2', NULL, NULL),
(59, '9', '3', NULL, NULL),
(60, '9', '4', NULL, NULL),
(61, '9', '5', NULL, NULL),
(62, '9', '6', NULL, NULL),
(63, '9', '7', NULL, NULL),
(64, '10', '1', NULL, NULL),
(65, '10', '2', NULL, NULL),
(66, '10', '3', NULL, NULL),
(67, '10', '4', NULL, NULL),
(68, '10', '5', NULL, NULL),
(69, '10', '6', NULL, NULL),
(70, '10', '7', NULL, NULL),
(71, '11', '1', 'u14cs003', '12'),
(72, '11', '2', 'u14cs004', '16'),
(73, '11', '3', 'u14cs001', '12'),
(74, '11', '4', 'u14cs002', '13'),
(75, '11', '5', NULL, NULL),
(76, '11', '6', NULL, NULL),
(77, '11', '7', NULL, NULL),
(78, '12', '1', NULL, NULL),
(79, '12', '2', NULL, NULL),
(80, '12', '3', NULL, NULL),
(81, '12', '4', NULL, NULL),
(82, '12', '5', NULL, NULL),
(83, '12', '6', NULL, NULL),
(84, '12', '7', NULL, NULL),
(85, '13', '1', NULL, NULL),
(86, '13', '2', NULL, NULL),
(87, '13', '3', NULL, NULL),
(88, '13', '4', NULL, NULL),
(89, '13', '5', NULL, NULL),
(90, '13', '6', NULL, NULL),
(91, '13', '7', NULL, NULL),
(92, '14', '1', NULL, NULL),
(93, '14', '2', NULL, NULL),
(94, '14', '3', NULL, NULL),
(95, '14', '4', NULL, NULL),
(96, '14', '5', NULL, NULL),
(97, '14', '6', NULL, NULL),
(98, '14', '7', NULL, NULL),
(99, '15', '1', NULL, NULL),
(100, '15', '2', NULL, NULL),
(101, '15', '3', NULL, NULL),
(102, '15', '4', NULL, NULL),
(103, '15', '5', NULL, NULL),
(104, '15', '6', NULL, NULL),
(105, '15', '7', NULL, NULL),
(106, '16', '1', NULL, NULL),
(107, '16', '2', NULL, NULL),
(108, '16', '3', NULL, NULL),
(109, '16', '4', NULL, NULL),
(110, '16', '5', NULL, NULL),
(111, '16', '6', NULL, NULL),
(112, '16', '7', NULL, NULL),
(113, '17', '1', NULL, NULL),
(114, '17', '2', NULL, NULL),
(115, '17', '3', NULL, NULL),
(116, '17', '4', NULL, NULL),
(117, '17', '5', NULL, NULL),
(118, '17', '6', NULL, NULL),
(119, '17', '7', NULL, NULL),
(120, '18', '1', NULL, NULL),
(121, '18', '2', NULL, NULL),
(122, '18', '3', NULL, NULL),
(123, '18', '4', NULL, NULL),
(124, '18', '5', NULL, NULL),
(125, '18', '6', NULL, NULL),
(126, '18', '7', NULL, NULL),
(127, '19', '1', NULL, NULL),
(128, '19', '2', NULL, NULL),
(129, '19', '3', NULL, NULL),
(130, '19', '4', NULL, NULL),
(131, '19', '5', NULL, NULL),
(132, '19', '6', NULL, NULL),
(133, '19', '7', NULL, NULL),
(134, '20', '1', NULL, NULL),
(135, '20', '2', NULL, NULL),
(136, '20', '3', NULL, NULL),
(137, '20', '4', NULL, NULL),
(138, '20', '5', NULL, NULL),
(139, '20', '6', NULL, NULL),
(140, '20', '7', NULL, NULL),
(141, '21', '1', NULL, NULL),
(142, '21', '2', NULL, NULL),
(143, '21', '3', NULL, NULL),
(144, '21', '4', NULL, NULL),
(145, '21', '5', NULL, NULL),
(146, '21', '6', NULL, NULL),
(147, '21', '7', NULL, NULL),
(148, '22', '1', NULL, NULL),
(149, '22', '2', NULL, NULL),
(150, '22', '3', NULL, NULL),
(151, '22', '4', NULL, NULL),
(152, '22', '5', NULL, NULL),
(153, '22', '6', NULL, NULL),
(154, '22', '7', NULL, NULL),
(155, '23', '1', NULL, NULL),
(156, '23', '2', NULL, NULL),
(157, '23', '3', NULL, NULL),
(158, '23', '4', NULL, NULL),
(159, '23', '5', NULL, NULL),
(160, '23', '6', NULL, NULL),
(161, '23', '7', NULL, NULL),
(162, '24', '1', NULL, NULL),
(163, '24', '2', NULL, NULL),
(164, '24', '3', NULL, NULL),
(165, '24', '4', NULL, NULL),
(166, '24', '5', NULL, NULL),
(167, '24', '6', NULL, NULL),
(168, '24', '7', NULL, NULL),
(169, '25', '1', NULL, NULL),
(170, '25', '2', NULL, NULL),
(171, '25', '3', NULL, NULL),
(172, '25', '4', NULL, NULL),
(173, '25', '5', NULL, NULL),
(174, '25', '6', NULL, NULL),
(175, '25', '7', NULL, NULL),
(176, '26', '1', NULL, NULL),
(177, '26', '2', NULL, NULL),
(178, '26', '3', NULL, NULL),
(179, '26', '4', NULL, NULL),
(180, '26', '5', NULL, NULL),
(181, '26', '6', NULL, NULL),
(182, '26', '7', NULL, NULL),
(183, '27', '1', NULL, NULL),
(184, '27', '2', NULL, NULL),
(185, '27', '3', NULL, NULL),
(186, '27', '4', NULL, NULL),
(187, '27', '5', NULL, NULL),
(188, '27', '6', NULL, NULL),
(189, '27', '7', NULL, NULL),
(190, '28', '1', NULL, NULL),
(191, '28', '2', NULL, NULL),
(192, '28', '3', NULL, NULL),
(193, '28', '4', NULL, NULL),
(194, '28', '5', NULL, NULL),
(195, '28', '6', NULL, NULL),
(196, '28', '7', NULL, NULL),
(197, '29', '1', NULL, NULL),
(198, '29', '2', NULL, NULL),
(199, '29', '3', NULL, NULL),
(200, '29', '4', NULL, NULL),
(201, '29', '5', NULL, NULL),
(202, '29', '6', NULL, NULL),
(203, '29', '7', NULL, NULL),
(204, '30', '1', NULL, NULL),
(205, '30', '2', NULL, NULL),
(206, '30', '3', NULL, NULL),
(207, '30', '4', NULL, NULL),
(208, '30', '5', NULL, NULL),
(209, '30', '6', NULL, NULL),
(210, '30', '7', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `id` int(11) NOT NULL,
  `class_id` varchar(3) NOT NULL,
  `cse` varchar(3) DEFAULT NULL,
  `ece` varchar(3) DEFAULT NULL,
  `eee` varchar(3) DEFAULT NULL,
  `mech` varchar(3) DEFAULT NULL,
  `civil` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`id`, `class_id`, `cse`, `ece`, `eee`, `mech`, `civil`) VALUES
(1, '1', '1', '2', '3', '4', '5'),
(2, '2', '1', '2', '3', '4', '5'),
(3, '3', '1', '2', '3', '4', '5'),
(4, '4', '1', '2', '3', '4', '5'),
(5, '5', '1', '2', '3', '4', '5'),
(6, '6', '1', '2', '3', '4', '5'),
(7, '7', '1', '2', '3', '4', '5'),
(8, '8', '1', '2', '3', '4', '5'),
(9, '9', '1', '2', '3', '4', '5'),
(10, '10', '1', '2', '3', '4', '5'),
(11, '11', '1', '2', '3', '4', '5'),
(12, '12', '1', '2', '3', '4', '5'),
(13, '13', '1', '2', '3', '4', '5'),
(14, '14', '1', '2', '3', '4', '5'),
(15, '15', '1', '2', '3', '4', '5'),
(16, '16', '1', '2', '3', '4', '5'),
(17, '17', '1', '2', '3', '4', '5'),
(18, '18', '1', '2', '3', '4', '5'),
(19, '19', '1', '2', '3', '4', '5'),
(20, '20', '1', '2', '3', '4', '5'),
(21, '21', '1', '2', '3', '4', '5'),
(22, '22', '1', '2', '3', '4', '5'),
(23, '23', '1', '2', '3', '4', '5'),
(24, '24', '1', '2', '3', '4', '5'),
(25, '25', '1', '2', '3', '4', '5'),
(26, '26', '1', '2', '3', '4', '5'),
(27, '27', '1', '2', '3', '4', '5'),
(28, '28', '1', '2', '3', '4', '5'),
(29, '29', '1', '2', '3', '4', '5'),
(30, '30', '1', '2', '3', '4', '5');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `class` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `code`, `class`) VALUES
(61, 'computer networks', 'u14cs001', 'cse'),
(62, 'dot net', 'u14cs002', 'cse'),
(63, 'c language', 'u14cs003', 'cse'),
(64, 'c++', 'u14cs004', 'cse'),
(65, 'electronics', 'u14ec002', 'ece'),
(66, 'electricals', 'u14ec003', 'ece');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slot_info`
--
ALTER TABLE `slot_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `slot_info`
--
ALTER TABLE `slot_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;
--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
