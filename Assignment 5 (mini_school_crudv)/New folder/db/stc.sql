-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 10:04 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stc`
--

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cell` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `course` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active',
  `created_at` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `updated_at` varchar(100) DEFAULT NULL,
  `trash` varchar(20) NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cell` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `course` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active',
  `created_at` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `updated_at` varchar(100) DEFAULT NULL,
  `trash` varchar(15) NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cell` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `location` varchar(70) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `course` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active',
  `created_at` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `updated_at` varchar(100) DEFAULT NULL,
  `trash` varchar(10) NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `email`, `cell`, `username`, `location`, `age`, `gender`, `course`, `photo`, `status`, `created_at`, `updated_at`, `trash`) VALUES
(1, 'Fahid Bin Khair Shrabon', '35parvin@gmail.com', '01687192436', 'fshrabon151@gmail.com', 'Barishal', 6, 'Male', 'Web Design', 'fd27b1942e6fcc0ea84b71b550f41b95.jpg', 'active', '2021-03-31 23:51:33', NULL, 'true');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
