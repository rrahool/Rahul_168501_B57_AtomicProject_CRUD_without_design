-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2017 at 08:04 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_atomic_project`
--
CREATE DATABASE IF NOT EXISTS `db_atomic_project` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `db_atomic_project`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_birthday`
--

CREATE TABLE `tbl_birthday` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_birthday`
--

INSERT INTO `tbl_birthday` (`id`, `name`, `dob`) VALUES
(1, 'rahul', '1994-07-08'),
(2, 'avi', '1994-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book_title`
--

CREATE TABLE `tbl_book_title` (
  `id` int(11) NOT NULL,
  `book_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `author_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `book_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_trashed` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_book_title`
--

INSERT INTO `tbl_book_title` (`id`, `book_title`, `author_name`, `book_image`, `is_trashed`) VALUES
(2, 'Himu', 'Humayun Ahmed', 'himu_sm.jpg', 'No'),
(3, 'Shesher Kobita', 'Rabindranath Tagore', 'shesher_kobita.jpg', 'No'),
(4, 'à¦¹à¦¿à¦®à§ à¦¸à¦®à¦—à§à¦°', 'à¦¹à§à¦®à¦¾à§Ÿà§‚à¦¨ à¦†à¦¹à¦®à§‡à¦¦', 'himu_sm_1.jpg', 'No'),
(5, 'Roll Number 13', 'Sumanta Aslam', '', 'No'),
(6, 'Srikanta', 'Nimai Bhattacharjee', '', 'No'),
(7, 'HabiJabi', 'Rahul Biswas', '', 'No'),
(8, 'Shatkahon', 'Shamaresh Mazumder', 'shatkahon.jpg', '2017-06-12 11:31:51'),
(9, 'HabiJabi Series', 'Rahul Biswas', '', '2017-06-12 11:32:09'),
(10, 'HabiJabi Series Part1', 'Rahul - Avinanda', '', 'No'),
(11, 'Adventure of Sherlock Holmes', 'Sir Aurthur Canon Doyle', 'sherlock.jpg', '2017-06-12 11:32:29'),
(12, 'Feluda', 'Satyajit Rai', '', '2017-06-12 11:31:58'),
(13, 'kiiiiiiiaskdasjk', 'aiyooooooo', '', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cities`
--

CREATE TABLE `tbl_cities` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_cities`
--

INSERT INTO `tbl_cities` (`id`, `name`, `city`) VALUES
(1, 'Rahul Biswas', 'Chittagong'),
(2, 'Avinanda', 'Chittagong'),
(3, 'Rubel Mazumdar', 'Dhaka'),
(4, 'yayusd', 'Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gender`
--

CREATE TABLE `tbl_gender` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_gender`
--

INSERT INTO `tbl_gender` (`id`, `name`, `gender`) VALUES
(1, 'rahul', 'Male'),
(2, 'avi', 'Female'),
(3, 'someone', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hobbies`
--

CREATE TABLE `tbl_hobbies` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hobbies` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_hobbies`
--

INSERT INTO `tbl_hobbies` (`id`, `name`, `hobbies`) VALUES
(1, 'rahul', ''),
(2, 'avi', 'Gardening, Book Reading, Traveling'),
(3, 'weqsa', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile_pictures`
--

CREATE TABLE `tbl_profile_pictures` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `profile_picture` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_profile_pictures`
--

INSERT INTO `tbl_profile_pictures` (`id`, `name`, `profile_picture`) VALUES
(1, 'rahul', '1496342491avatar-1.png'),
(2, 'birthday cake', '1496342529Pink and White 2 Tier Minny Mouse theme First Birthday Cake for Girl.JPG'),
(3, 'rrrrrr', '1496342686'),
(4, 'ttttttttt', '149634277401simple.xlsx'),
(5, 'njdjasbfbhsdjfb', '1496342851t1.PNG'),
(6, 'teafdxg', '1496343047filelist.xml'),
(7, 'something', '1496343184love-quotes-for-her-wallpaper - Copy.bmp'),
(8, 'object', '1496462552avatar-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_summary`
--

CREATE TABLE `tbl_summary` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `organization` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_summary`
--

INSERT INTO `tbl_summary` (`id`, `name`, `organization`, `summary`) VALUES
(1, 'Rahul Biswas', 'AAAAAA', 'bla bla bla....bla bla bla....bla bla bla....bla bla bla....bla bla bla....bla bla bla....bla bla bla....bla bla bla....bla bla bla....bla bla bla....');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_birthday`
--
ALTER TABLE `tbl_birthday`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_book_title`
--
ALTER TABLE `tbl_book_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gender`
--
ALTER TABLE `tbl_gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hobbies`
--
ALTER TABLE `tbl_hobbies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_profile_pictures`
--
ALTER TABLE `tbl_profile_pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_summary`
--
ALTER TABLE `tbl_summary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_birthday`
--
ALTER TABLE `tbl_birthday`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_book_title`
--
ALTER TABLE `tbl_book_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_gender`
--
ALTER TABLE `tbl_gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_hobbies`
--
ALTER TABLE `tbl_hobbies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_profile_pictures`
--
ALTER TABLE `tbl_profile_pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_summary`
--
ALTER TABLE `tbl_summary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
