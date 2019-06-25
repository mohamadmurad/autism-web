-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 24, 2019 at 07:03 PM
-- Server version: 10.3.14-MariaDB
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
-- Database: `id6326551_syad3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `join_date` date NOT NULL,
  `active` tinyint(1) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `recover_hash` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `username`, `password`, `full_name`, `join_date`, `active`, `salt`, `recover_hash`) VALUES
(2, 'mhdite7@gmail.com', 'mhdite7', 'c225e9cd07bd96f904f32dfd37234ff6a4e1c2e3', 'mohamad murad', '2019-05-05', 1, 'kcm4VKUw@0!HOUl5SfiGuQS?tFCn3Dfe', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `join_date` date NOT NULL,
  `birth_date` date NOT NULL,
  `salt` varchar(255) NOT NULL,
  `recover_hash` varchar(255) DEFAULT NULL,
  `user_pecs_level` tinyint(1) NOT NULL,
  `created_by` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `profile_img` varchar(255) NOT NULL DEFAULT 'avatar.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `full_name`, `join_date`, `birth_date`, `salt`, `recover_hash`, `user_pecs_level`, `created_by`, `active`, `profile_img`) VALUES
(1, 'maram', 'c225e9cd07bd96f904f32dfd37234ff6a4e1c2e3', 'maram', '2019-05-06', '2019-05-06', 'kcm4VKUw@0!HOUl5SfiGuQS?tFCn3Dfe', NULL, 2, 2, 1, 'avatar.png'),
(2, 'maram2', 'c225e9cd07bd96f904f32dfd37234ff6a4e1c2e3', 'mouaz Herafi', '2019-05-13', '2019-05-08', 'kcm4VKUw@0!HOUl5SfiGuQS?tFCn3Dfe', NULL, 1, 2, 1, 'avatar.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `created_by` (`created_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `admin` (`admin_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
