-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 09:50 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autism`
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
-- Table structure for table `pecs`
--

CREATE TABLE `pecs` (
  `id` int(11) NOT NULL,
  `name` varchar(12) NOT NULL,
  `Image` varchar(13) NOT NULL,
  `parent` varchar(7) NOT NULL,
  `ِAudio` varchar(15) NOT NULL,
  `level1` tinyint(1) NOT NULL,
  `fav` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pecs`
--

INSERT INTO `pecs` (`id`, `name`, `Image`, `parent`, `ِAudio`, `level1`, `fav`, `user_id`) VALUES
(2, 'انا بدي', 'iwant.jpg', 'root', 'i_need.mp3', 0, 0, 1),
(3, 'أنا', 'iam.jpg', 'root', 'i.mp3', 0, 0, 1),
(4, 'فرحان', 'happy.jpg', 'أنا', 'happy.mp3', 0, 0, 1),
(5, 'معصب', 'angry.jpg', 'أنا', 'mp3.خبز', 0, 0, 1),
(6, 'زعلان', 'sad.jpg', 'أنا', 'sad.mp3', 0, 0, 1),
(7, 'ألعب', 'play.jpg', 'انا بدي', 'play.mp3', 0, 0, 1),
(8, 'خايف', 'scared.jpg', 'أنا', 'mp3.خبز', 0, 0, 1),
(9, 'مرضان', 'sick.jpg', 'أنا', 'sick.mp3', 0, 0, 1),
(10, 'تعبان', 'tired.jpg', 'أنا', 'tired.mp3', 0, 0, 1),
(11, 'اكل', 'eat.jpg', 'انا بدي', 'eat.mp3', 0, 0, 1),
(12, 'خبز', 'bread.jpg', 'اكل', 'bread.mp3', 0, 0, 1),
(13, 'Cookies', 'cookies.jpg', 'اكل', 'cookies.mp3', 0, 0, 1),
(14, 'لبن', 'yogurt.jpg', 'اكل', 'laban.mp3', 0, 0, 1),
(15, 'كريب', 'pancakes.jpg', 'اكل', 'kerab.mp3', 0, 0, 1),
(16, 'جبنة', 'cheese.jpg', 'اكل', 'cheese.mp3', 0, 0, 1),
(17, 'بيض', 'egg.jpg', 'اكل', 'eggs.mp3', 0, 0, 1),
(18, 'مربى', 'jam.jpg', 'اكل', 'mraba.mp3', 0, 0, 1),
(19, 'شيبس', 'chips.jpg', 'اكل', 'Chips.mp3', 0, 0, 1),
(20, 'بيتزا', 'pizza.jpg', 'اكل', 'Pizza.mp3', 0, 0, 1),
(21, 'أشرب', 'drink.jpg', 'انا بدي', 'drink.mp3', 0, 0, 1),
(22, 'مي', 'water.jpg', 'أشرب', 'water.mp3', 0, 0, 1),
(23, 'حليب', 'milk.jpg', 'أشرب', 'milk.mp3', 0, 0, 1),
(24, 'برتقال', 'orange.jpg', 'أشرب', 'orange.mp3', 0, 0, 1),
(25, 'شوكولا', 'chocolate.jpg', 'أشرب', 'chocolate.mp3', 0, 0, 1),
(26, 'كومبيوتر', 'computer.jpg', 'ألعب', 'pc.mp3', 0, 0, 1),
(27, 'Slide', 'slide.jpg', 'ألعب', 'mp3.خبز', 0, 0, 1),
(28, 'Bubbles', 'bubbles.jpg', 'ألعب', 'mp3.خبز', 0, 0, 1),
(29, 'طابة', 'ball.jpg', 'ألعب', 'ball.mp3', 0, 0, 1),
(30, 'تركيب الصور', 'puzzle.jpg', 'ألعب', 'tarkebPhoto.mp3', 0, 0, 1),
(31, 'بسيارة', 'cars.jpg', 'ألعب', 'car.mp3', 0, 0, 1),
(32, 'Bowling', 'bowling.jpg', 'ألعب', 'poling.mp3', 0, 0, 1),
(33, 'روح', 'go.jpg', 'انا بدي', 'ro7.mp3', 0, 0, 1),
(34, 'أعمل نونو', 'bathroom.jpg', 'روح', 'nono.mp3', 0, 0, 1),
(35, 'علبيت', 'home.jpg', 'روح', 'to_home.mp3', 0, 0, 1),
(36, 'علمدرسة', 'school.jpg', 'روح', 'to_school.mp3', 0, 0, 1),
(37, 'عجنينة', 'park.jpg', 'روح', 'to_garden.mp3', 0, 0, 1),
(38, 'علبحر', 'beach.jpg', 'روح', 'to_sea.mp3', 0, 0, 1),
(39, 'علمول', 'mall.jpg', 'روح', 'to_mol.mp3', 0, 0, 1),
(40, 'أحضر تلفزيون', 'watch_tv.jpg', 'انا بدي', 'watch_tv.mp3', 0, 0, 1),
(41, 'نام', 'sleep.jpg', 'انا بدي', 'sleep.mp3', 0, 0, 1),
(42, 'حمام', 'bathe.jpg', 'انا بدي', 'washing.mp3', 0, 0, 1),
(43, 'People', 'people.jpg', 'انا بدي', 'mp3.خبز', 0, 0, 1),
(44, 'ماما', 'mom.jpg', 'People', 'mama.mp3', 0, 0, 1),
(45, 'بابا', 'dad.jpg', 'People', 'baba.mp3', 0, 0, 1),
(46, 'اضافة1', 'add.jpg', 'root', '', 0, 0, 1),
(47, 'اضافة2', 'add.jpg', 'أنا', '', 0, 0, 1),
(48, 'اضافة3', 'add.jpg', 'اكل', '', 0, 0, 1),
(49, 'اضافة4', 'add.jpg', 'أشرب', '', 0, 0, 1),
(50, 'اضافة5', 'add.jpg', 'ألعب', '', 0, 0, 1),
(51, 'اضافة6', 'add.jpg', 'روح', '', 0, 0, 1),
(52, 'اضافة7', 'add.jpg', 'People', '', 0, 0, 1);

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
(1, 'maram', 'c225e9cd07bd96f904f32dfd37234ff6a4e1c2e3', 'maram bakarr', '2019-05-06', '2019-05-06', 'kcm4VKUw@0!HOUl5SfiGuQS?tFCn3Dfe', NULL, 1, 2, 1, 'avatar.png'),
(2, 'maram2', 'c225e9cd07bd96f904f32dfd37234ff6a4e1c2e3', 'mouaz Herafi', '2019-05-13', '2019-05-08', 'kcm4VKUw@0!HOUl5SfiGuQS?tFCn3Dfe', NULL, 1, 2, 1, 'avatar.png'),
(3, 'mohamadsssss', 'c80c93b3d9a931f724589f37b41317d688299660', 'maram1211dddddddddddddd', '2019-06-25', '2019-06-12', 'HTr#!flL3wJ*cS*$MB9nyUCRX7HM3ijP', NULL, 1, 2, 1, 'avatar.png');

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
-- Indexes for table `pecs`
--
ALTER TABLE `pecs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pecs_user` (`user_id`);

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
-- AUTO_INCREMENT for table `pecs`
--
ALTER TABLE `pecs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pecs`
--
ALTER TABLE `pecs`
  ADD CONSTRAINT `pecs_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `admin` (`admin_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
