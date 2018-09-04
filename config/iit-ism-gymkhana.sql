-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2018 at 09:00 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iit-ism-gymkhana`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `feedback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `post` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `fb_profile` varchar(100) DEFAULT NULL,
  `avatar` varchar(300) DEFAULT 'anonymous_male.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`id`, `name`, `email`, `post`, `phone`, `fb_profile`, `avatar`) VALUES
(2, 'Prasad Vankudavath', 'prasadjnvrr1@gmail.com', NULL, '9128932056', 'https://www.facebook.com/prasad.vankudavath', 'Vankudavath Prasad.jpg'),
(3, 'Aakash Nirmal', 'aakash.nirmal@gmail.com', 'Secretary (Weight Lifting)', '9433030553', 'https://www.facebook.com/aakash.nirmal', 'Aakash Nirmal.jpg'),
(4, 'Priyesh Pratap Singh', 'priyesh.16je002179@ece.ism.ac.in', 'Technical Head', '8299735891', 'https://www.facebook.com/priyeshpratapsingh.singh', 'Priyesh Pratap Singh.jpg'),
(5, 'Avinash Murmu', 'avimurmu18@gmail.com', 'Secretary (Table Tennis - Boys)', '7070380562', 'https://www.facebook.com/avicool18', 'Avinash Murmu.jpg'),
(6, 'Kushagra Tripathi', 'kushagra.17JE002715@ee.ism.ac.in', 'Secretary (Lawn Tennis)', '9837015331', '', 'Kushagra Tripathi.jpg'),
(7, 'Keshav Goyal', 'keshav.15je001681@am.ism.ac.in', 'Secretary (Badminton - Boys)', '8929485810', 'https://www.facebook.com/keshavthemathematicslover', 'Keshav Goyal.jpg'),
(8, 'Shantanu Kumar', 'shantanu.16je001900@am.ism.ac.in', 'Secretary (Karate - Boys)', '9973526846', 'https://www.facebook.com/devrajshantanu', 'Shantanu Devraj.jpg'),
(9, 'Marada Sahiti', 'sahiti.17JE003022@am.iitism.ac', 'Badminton Girls coordinator', '7485803038', '', 'Sahiti Marada.JPG'),
(10, 'Reha Panigrahi', 'reha97.17MS000414@ac.iitism.ac.in', 'Secretary (Volleyball - Girls)', '7485803066', '', 'Reha Panigrahi.jpg'),
(11, 'Ayush Somani', 'ayush.16JE001852@am.ism.ac.in', 'Media Head', '7023484950', 'https://www.facebook.com/ayushsomani001', 'Ayush Somani.jpeg'),
(12, 'Pogula Shiva Kumar', 'shivakumarpogula.15JE001569@am.ism.ac.in', 'Secretary (Chess Club)', '8500667449', 'https://www.facebook.com/shivakumar.pogula', 'Pogula Shiva Kumar.jpg'),
(13, 'Jahnvi Sharma', 'jahnvi.17JE003049@ese.iitism.ac.in', 'Secretary (Table Tennis - Girls)', '7367045295', 'https://www.facebook.com/jahnvi.sharma.7568596', 'Jahnvi Sharma.jpeg'),
(14, 'Abhinav Sharma', 'abhinav2112.16je002063@ee.iitism.ac.in', 'Institute Administrative Nominee', '9587228071', 'https://www.facebook.com/abhi2112', 'Abhinav Sharma.jpeg'),
(15, 'Yakkala V A S Durgesh', 'durgesh.16JE001905@pe.ism.ac.in', 'Secretary (Squash - Boys)', '9162828319', 'https://www.facebook.com/durgesh.yvas', 'YVAS Durgesh.jpg'),
(16, 'Roushan Kumar', 'rk.16JE002408@me.iitism.ac.in', 'Creative Head', '9135329931', 'https://www.facebook.com/profile.php?id=100014147970819', 'anonymous_male.jpg'),
(17, 'Rishabh Pandey', 'rishabhpandey.16JE002448@ee.iitism.ac.in', 'Secretary (Cricket)', '7597454199', 'https://www.facebook.com/rishabh.pandey.1884', 'Rishabh Pandey.jpg'),
(18, 'Prabhat Ranjan', 'prabhat.16JE002186@me.iitism.ac.in', 'Institute Events Nominee', '9570646539', 'https://www.facebook.com/profile.php?id=100008523010985', 'Prabhat Singh.jpeg'),
(19, 'Atul Solanki', 'atulkgn10.16je002208@pe.ism.ac.in', 'Secretary (Football)', '9479400587', 'https://www.facebook.com/Encore.a.apprendre', 'Atul Solanki.jpg'),
(20, 'Anirudh Krishnadas', 'ank.17MS000533@ap.ism.ac.in', 'Institute PG Nominee ', '9013462567', 'https://www.facebook.com/Anirudhkrishnadas', 'Anirudh Krishnadas.jpg'),
(21, 'Arti Kumari', 'arti.17JE003281@ece.iitism.ac.in', 'lnstitute Girls Nominee', '8678054114', 'https://m.facebook.com/arti.gupta.7186896', 'Arti Gupta.jpg'),
(22, 'Aashish Dalal', 'aashish.16JE002053@pe.iitism.ac.in', 'Secretary (Basketball - Boys)', '9075900829', '', 'Aashish Dalal.jpg'),
(23, 'Rohit Agarwal', NULL, 'General Sports Secretary', NULL, NULL, 'anonymous_male.jpg'),
(25, 'Saptarshi Das', 'saptarshi.das1998@gmail.com', 'Secretary (Aquatics)', '8337029799', NULL, 'anonymous_male.jpg'),
(26, 'V Prasad Naik', 'prasadjnvrr1@gmail.com', 'Secretary (Athletics)', '9128932056', NULL, 'anonymous_male.jpg'),
(27, 'Priyanka Subraveti', 'psubraveti1012@gmail.com', 'Sectretary (Basketball - Girls)', '9121370634', NULL, 'anonymous_female.jpg'),
(28, 'Shivam Tyagi', 'shivamdinash@gmail.com', 'Secretary (Boxing)', '7017231207', NULL, 'Shivam Tyagi.jpg'),
(29, 'Nishant Patel', 'nishant1998cool@gmail.com', 'Secretary (Handball)', '9408570027', NULL, 'Nishant Patel.jpg'),
(30, 'Vivek Rastogi', '', 'Sectretary (Hockey)', '', NULL, 'anonymous_male.jpg'),
(31, 'Vishal Gupta', '', 'Secretary (Snooker)', '', NULL, 'Vishal Gupta.png'),
(32, 'Ayushi Agarwal', 'ayutin2697@gmail.com', 'Secretary (Squash - Girls)', '9413186978', NULL, 'anonymous_female.jpg'),
(33, 'Abhilasha More', NULL, 'Secretary (Karate - Girls)', NULL, NULL, 'anonymous_female.jpg'),
(34, 'Harsh', 'harsh0940@gmail.com', 'Secretary (Volleyball - Boys)', NULL, NULL, 'anonymous_male.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
