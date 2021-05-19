-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 10:20 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eye`
--

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis`
--

CREATE TABLE `diagnosis` (
  `id` int(30) NOT NULL,
  `f1` int(11) NOT NULL,
  `f2` int(11) NOT NULL,
  `f3` int(11) NOT NULL,
  `f4` int(11) NOT NULL,
  `f5` int(11) NOT NULL,
  `f6` int(11) NOT NULL,
  `f7` int(11) NOT NULL,
  `f8` int(11) NOT NULL,
  `f9` int(11) NOT NULL,
  `f10` int(11) NOT NULL,
  `f11` int(11) NOT NULL,
  `f12` int(11) NOT NULL,
  `f13` int(11) NOT NULL,
  `f14` int(11) NOT NULL,
  `f15` int(11) NOT NULL,
  `f16` int(11) NOT NULL,
  `f17` int(11) NOT NULL,
  `f18` int(11) NOT NULL,
  `f19` int(11) NOT NULL,
  `f20` int(11) NOT NULL,
  `f21` int(11) NOT NULL,
  `f22` int(11) NOT NULL,
  `f23` int(11) NOT NULL,
  `f24` int(11) NOT NULL,
  `f25` int(11) NOT NULL,
  `f26` int(11) NOT NULL,
  `f27` int(11) NOT NULL,
  `f28` int(11) NOT NULL,
  `f29` int(11) NOT NULL,
  `f30` int(11) NOT NULL,
  `f31` int(11) NOT NULL,
  `f32` int(11) NOT NULL,
  `f33` int(11) NOT NULL,
  `f34` int(11) NOT NULL,
  `f35` int(11) NOT NULL,
  `f36` int(11) NOT NULL,
  `f37` int(11) NOT NULL,
  `f38` int(11) NOT NULL,
  `f39` int(11) NOT NULL,
  `f40` int(11) NOT NULL,
  `f41` int(11) NOT NULL,
  `f42` int(11) NOT NULL,
  `f43` int(11) NOT NULL,
  `f44` int(11) NOT NULL,
  `f45` int(11) NOT NULL,
  `f46` int(11) NOT NULL,
  `f47` int(11) NOT NULL,
  `f48` int(11) NOT NULL,
  `f49` int(11) NOT NULL,
  `result` text NOT NULL,
  `advice` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosis`
--

INSERT INTO `diagnosis` (`id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`, `f10`, `f11`, `f12`, `f13`, `f14`, `f15`, `f16`, `f17`, `f18`, `f19`, `f20`, `f21`, `f22`, `f23`, `f24`, `f25`, `f26`, `f27`, `f28`, `f29`, `f30`, `f31`, `f32`, `f33`, `f34`, `f35`, `f36`, `f37`, `f38`, `f39`, `f40`, `f41`, `f42`, `f43`, `f44`, `f45`, `f46`, `f47`, `f48`, `f49`, `result`, `advice`, `date`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'very high', 'Sleep well', '2021-02-17 17:30:01'),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'hello', 'hi', '2021-02-18 00:38:08'),
(6, 0, 1, 1, 1, 1, 0, 0, 0, 0, 1, 1, 0, 0, 1, 0, 1, 1, 0, 0, 1, 1, 0, 0, 1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 1, 1, 1, 1, 1, 0, 'Bad eye', 'Remove Eye', '2021-03-09 18:26:32');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` int(2) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `role`, `date_created`) VALUES
(1, 'oche', 'a@a.com', '123456', 1, '2021-01-30 14:57:12'),
(14, 'Oche Peter', 's@s.com', '123456', 3, '2021-02-17 23:46:12'),
(15, 'Bola Shade', 'b@b.com', '123456', 3, '2021-03-03 12:57:17');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(30) NOT NULL,
  `user_id` int(11) NOT NULL,
  `diagnosis_id` int(30) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `user_id`, `diagnosis_id`, `date`) VALUES
(1, 1, 2, '2021-02-17 17:30:01'),
(2, 4, 1, '2021-02-18 00:38:08'),
(4, 1, 6, '2021-02-18 01:29:59'),
(6, 1, 1, '2021-03-11 00:09:20'),
(7, 1, 2, '2021-03-11 00:10:05'),
(8, 1, 1, '2021-03-11 00:10:13');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`) VALUES
(1, 'Abia'),
(2, 'Adamawa'),
(3, 'Akwa Ibom '),
(4, 'Anambra '),
(5, 'Bauchi'),
(6, 'Bayelsa '),
(7, 'Benue '),
(8, 'Borno '),
(9, 'Cross River '),
(10, 'Delta '),
(11, 'Ebonyi '),
(12, 'Edo '),
(13, 'Ekiti '),
(14, 'Enugu '),
(15, 'FCT'),
(16, 'Gombe '),
(17, 'Imo '),
(18, 'Jigawa '),
(19, 'Kaduna '),
(20, 'Kano '),
(21, 'Katsina '),
(22, 'Kebbi '),
(23, 'Kogi '),
(24, 'Kwara '),
(25, 'Lagos '),
(26, 'Nasarawa '),
(27, 'Niger'),
(28, 'Ogun'),
(29, 'Ondo'),
(30, 'Osun'),
(31, 'Oyo'),
(32, 'Plateau '),
(33, 'Rivers '),
(34, 'Sokoto '),
(35, 'Taraba '),
(36, 'Yobe '),
(37, 'Zamfara ');

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `id` int(11) NOT NULL,
  `symptoms` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`id`, `symptoms`) VALUES
(1, 'pain in the eye'),
(2, 'watery or dry eyes'),
(3, 'headache'),
(4, 'difficulty in keeping your eyes open'),
(5, 'trouble distinguishing different colours or shades of the sa'),
(6, 'failure in seeing differing tones or shades of thesame colou'),
(7, 'vision  getting blurry when looking at distant objects'),
(8, 'partial closing of the eyelids to get a clear vision'),
(9, 'difficulty viewing objects while driving a vehicle at night'),
(10, 'vision getting blurry for objects close by'),
(11, 'need to squint for getting a better vision'),
(12, 'headache hitting after tasks needing your focus on close by '),
(13, 'eyestrian'),
(14, 'squinting'),
(15, 'eye irritation'),
(16, 'Gradual change in the quality of your vision'),
(17, 'Appearance of straight line as distorted'),
(18, 'Blurriness of vision'),
(19, 'Partial vision loss marked by formation of blink spots'),
(20, 'Problem seeing in dim light'),
(21, 'Objects appearing smaller than their actual size as viewed o'),
(22, 'Problem seeing at night'),
(23, 'seeing halos around lights'),
(24, 'Frequently changing contact lens prescription'),
(25, 'Problem seeing through light and glare'),
(26, 'Faded view of colour'),
(27, 'Dark spots or strings through your vision'),
(28, 'Impaired colour recognition'),
(29, 'Fluctuating vision'),
(30, 'Vision loss'),
(31, 'A burning, scratchy or stinging sensation in eyes'),
(32, 'Eye redness'),
(33, 'Sensitivity to light'),
(34, 'Mucus production in or around the eyes'),
(35, 'Eye fatigue'),
(36, 'Issues in wearing contact lenses'),
(37, 'Tunnel vision'),
(38, 'Peripheral vision loss, gradually affecting both eyes'),
(39, 'Severe pain in eyes  accompanied by nausea and vomiting in m'),
(40, 'Sudden visual disturbance in low light conditions'),
(41, 'Swelling in the conjunctiva'),
(42, 'Excessive tearing'),
(43, 'Thick yellowish discharge'),
(44, 'Itching and burning eyes'),
(45, 'Extra sensitivity to light'),
(46, 'Sudden appearance of floaters'),
(47, 'Sudden appearance of light flashes in one or both eyes'),
(48, 'Steadily receding peripheral or side vision'),
(49, 'Presence of curtain like shadow through your field vision');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `address`, `password`, `gender`, `date`) VALUES
(1, 'Oche Peter', 's@s.com', '08136473738', 'London', '123456', 'MALE', '0000-00-00 00:00:00'),
(4, 'Bola Shade', 'b@b.com', '08136473738', 'Texas,London', '123456', 'FEMALE', '2021-03-03 11:57:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diagnosis`
--
ALTER TABLE `diagnosis`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `symptoms`
--
ALTER TABLE `symptoms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
