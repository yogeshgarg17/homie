-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 11:44 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homie`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `userid` int(6) NOT NULL,
  `id` int(6) NOT NULL,
  `rentid` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`userid`, `id`, `rentid`) VALUES
(20, 17, 12),
(14, 17, 12),
(15, 14, 19),
(15, 14, 18),
(14, 15, 23);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `email` varchar(30) NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`email`, `message`) VALUES
('yogeshgarg1@gmail.com', 'bekar ghr h sab'),
('abhishek@gmail.com', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `profilephoto`
--

CREATE TABLE `profilephoto` (
  `id` int(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `photo` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profilephoto`
--

INSERT INTO `profilephoto` (`id`, `username`, `photo`) VALUES
(15, 'yuvraj', '5552.jpg'),
(16, 'abhishek bagdiya', 'the_avengers_age_of_ultron_team-wallpaper-3840x2160.jpg'),
(17, 'abcdefghijklmnopsjkj', '5410.jpg'),
(18, 'King123', '5620.jpg'),
(18, 'King123', '5620.jpg'),
(23, 'ABHISHEK', '1281.jpg'),
(14, 'ekta01', '7960.jpg'),
(27, 'yash gehlot', '5450.jpg'),
(20, 'yogesh', '5642.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `securityanswers`
--

CREATE TABLE `securityanswers` (
  `quesid` varchar(4) NOT NULL,
  `id` int(4) NOT NULL,
  `answer` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `securityanswers`
--

INSERT INTO `securityanswers` (`quesid`, `id`, `answer`) VALUES
('sq1', 11, 'jj'),
('sq1', 12, 'ghui'),
('sq1', 14, 'jodhpur'),
('sq1', 15, 'jodhpur'),
('sq1', 16, 'jaipur'),
('sq1', 17, 'jodhpur'),
('sq2', 18, 'fiftyshades'),
('sq2', 19, 'fiftyshades'),
('sq1', 23, 'HOSPITAL'),
('sq1', 25, 'jodhpurr'),
('sq1', 27, 'jaipur');

-- --------------------------------------------------------

--
-- Table structure for table `securityquestion`
--

CREATE TABLE `securityquestion` (
  `quesid` varchar(4) NOT NULL,
  `question` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `securityquestion`
--

INSERT INTO `securityquestion` (`quesid`, `question`) VALUES
('sq1', 'birthplace'),
('sq2', 'favsub'),
('sq3', 'favplace');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `email`, `password`) VALUES
(11, 'yy', 'yogo1@gmail.com', 'yogi'),
(12, 'yuvraj', 'yuvi@gmail.com', '4567'),
(14, 'ekta01', 'rathiekta20@gmail.com', 'ekta@001'),
(15, 'yuvraj', 'yuvrajschouhan5@gmail.com', 'yuvi2000'),
(16, 'abhishek bagdiy', 'abhishek123@gmail.com', 'abhi001'),
(17, 'abcdefghijklmno', 'priyanka1@gmail.com', 'priyanka123'),
(18, 'King123', 'prince@gmail.com', '4321'),
(19, 'godly', '1234@gmail.com', '12345'),
(20, 'yogesh', 'yogesh12@gmail.com', 'yogi123'),
(23, 'ABHISHEK', 'abhishek94@Gmail.com', 'GLORY2HANUMAN'),
(25, 'ekta rathi', 'ekta@gmail.com', 'ektaheyy'),
(26, 'umang', 'umang@gmail.com', 'umang123'),
(27, 'yash gehlot', 'yash002@gmail.com', 'yash001');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `rentid` int(4) NOT NULL,
  `type` varchar(10) NOT NULL,
  `furnishing` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `photo` mediumtext NOT NULL,
  `photo2` text DEFAULT NULL,
  `photo3` varchar(10000) DEFAULT NULL,
  `bedroom` int(3) DEFAULT NULL,
  `bathroom` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `username`, `rentid`, `type`, `furnishing`, `address`, `area`, `price`, `photo`, `photo2`, `photo3`, `bedroom`, `bathroom`) VALUES
(17, 'priyanka jangid', 12, 'Room', 'furnished', '69', 'sojathi gate', 90, 'gallery3.jpg', '', '', NULL, NULL),
(14, 'ekta01', 18, 'Room', 'furnished', '20', 'banar', 1200, 'banner1.jpg', NULL, NULL, NULL, NULL),
(14, 'ekta01', 19, 'Flat/House', 'furnished', '25', 'shastri nagar', 1200, 'banner1.jpg', 'gallery1.jpg', 'gallery4.jpg', 3, 3),
(14, 'ekta01', 21, 'Room', 'furnished', '12-h fhul bagh', 'mandore', 3000, 'gallery1.jpg', NULL, NULL, NULL, NULL),
(15, 'yuvraj', 23, 'Flat/House', 'furnished', '45-A', 'Shastri Nagar', 4000, 'WhatsApp Image 2022-07-05 at 5.47.14 AM.jpeg', 'WhatsApp Image 2022-07-05 at 5.43.00 AM.jpeg', 'WhatsApp Image 2022-07-05 at 5.48.31 AM.jpeg', 2, 1),
(15, 'yuvraj', 24, 'Room', 'furnished', '67', 'ratanada', 2500, 'WhatsApp Image 2022-07-05 at 5.47.21 AM (1).jpeg', NULL, NULL, NULL, NULL),
(27, 'yash gehlot', 25, 'Flat/House', 'furnished', '45', 'mahamandir', 6000, 'WhatsApp Image 2022-07-05 at 5.47.20 AM (1).jpeg', 'WhatsApp Image 2022-07-05 at 5.47.14 AM (1).jpeg', 'WhatsApp Image 2022-07-05 at 5.43.57 AM (1).jpeg', 2, 1),
(20, 'yogesh', 26, 'Flat/House', 'furnished', '78-c', 'mahamandir', 7000, 'WhatsApp Image 2022-07-05 at 5.47.18 AM (1).jpeg', 'WhatsApp Image 2022-07-05 at 5.47.18 AM.jpeg', 'WhatsApp Image 2022-07-05 at 5.51.52 AM (1).jpeg', 2, 1),
(15, 'yuvraj', 27, 'Room', 'furnished', 'g-45', 'abc', 9000, 'gallery4.jpg', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD KEY `userid` (`userid`),
  ADD KEY `id` (`id`),
  ADD KEY `rentid` (`rentid`);

--
-- Indexes for table `profilephoto`
--
ALTER TABLE `profilephoto`
  ADD KEY `id` (`id`);

--
-- Indexes for table `securityanswers`
--
ALTER TABLE `securityanswers`
  ADD KEY `quesid` (`quesid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `securityquestion`
--
ALTER TABLE `securityquestion`
  ADD PRIMARY KEY (`quesid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`rentid`),
  ADD KEY `id` (`id`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `rentid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `signup` (`id`),
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`rentid`) REFERENCES `upload` (`rentid`);

--
-- Constraints for table `profilephoto`
--
ALTER TABLE `profilephoto`
  ADD CONSTRAINT `profilephoto_ibfk_1` FOREIGN KEY (`id`) REFERENCES `signup` (`id`);

--
-- Constraints for table `securityanswers`
--
ALTER TABLE `securityanswers`
  ADD CONSTRAINT `securityanswers_ibfk_1` FOREIGN KEY (`id`) REFERENCES `signup` (`id`),
  ADD CONSTRAINT `securityanswers_ibfk_2` FOREIGN KEY (`quesid`) REFERENCES `securityquestion` (`quesid`);

--
-- Constraints for table `upload`
--
ALTER TABLE `upload`
  ADD CONSTRAINT `upload_ibfk_1` FOREIGN KEY (`id`) REFERENCES `signup` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
