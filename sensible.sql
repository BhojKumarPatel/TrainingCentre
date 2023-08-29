-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2018 at 07:45 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sensible`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(50) NOT NULL,
  `blog_content` text NOT NULL,
  `blog_date` datetime NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_title`, `blog_content`, `blog_date`) VALUES
(1, 'Tribal School', 'it is my first blog', '2018-07-15 09:22:13');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(5) NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_fees` int(11) NOT NULL,
  PRIMARY KEY (`course_id`),
  UNIQUE KEY `s_no` (`s_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`s_no`, `course_name`, `course_id`, `course_fees`) VALUES
(1, 'c++', 101, 4000),
(2, 'c', 102, 2000),
(3, 'java', 103, 5000),
(4, 'php', 104, 4000),
(5, '.net', 105, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `file_no` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(30) NOT NULL,
  `file_dname` int(30) NOT NULL,
  `file_loc` text NOT NULL,
  PRIMARY KEY (`file_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_no`, `file_name`, `file_dname`, `file_loc`) VALUES
(1, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_no` int(11) NOT NULL AUTO_INCREMENT,
  `news_head` varchar(50) NOT NULL,
  `news_content` text NOT NULL,
  `news_date` datetime NOT NULL,
  PRIMARY KEY (`news_no`),
  UNIQUE KEY `news_head` (`news_head`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_no`, `news_head`, `news_content`, `news_date`) VALUES
(3, 'sensible on treand', 'cvsfvsdvsdvsdcscsdcs', '2018-07-15 08:04:49'),
(4, 'sensible now on raipur', 'dvdvcvdfvaxcdvdvdavadvasdcasdca', '2018-07-14 10:08:21'),
(5, 'BELIEVE', 'BELIEVE\r\nYou must have heard the line, “Believe is the most important thing in a relationship”. But my question is “Is believe is required only in a relationship?” You will find the answer as “NO”, believe is something which is required everywhere in friendship, in between family, even if you don’t believe your teacher your education is waste. It is the key point required to continue in the world.\r\n		Let me tell you a story based on this topic: One late night one old couple came out of restaurant finishing their dinner, while back to home wife insisted to drive the car and husband agreed to direct her to the way to home. They successfully reached home after reaching to home wife asked husband “how can you let me drive car knowing that I am blind?” This is called believe where husband gave the car believing his wife and wife drove as per husband’s instructions believing her husband that he won’t let happen anything wrong.\r\n    Believe is something which never came easily on anyone but goes away very easily, if believe is broken once the person will find it hard to show believe in anyone. Even if you buy a product and find it faulty you never visit that shop again, this is what believe is. It is like a glass hard to give the shape and must be handled with care since it is easily broken. Same as a glass if it is built it will show transparency quality and never let it down, but once it broke it can’t be joined again.\r\n		You can believe completely on a friend who speaks more since he never hide anything and let his heart out and someone who believes in you will never lie to you. Always try to have people around you who believe in you they will take you to higher positions and always show faith in you that you can do it. At last I would like to say that “Believe on them who show Believe on you”.\r\n', '2018-07-15 06:12:00'),
(6, 'sensible to launch new app', 'fvfvdfvsdfvdvdsfv', '2018-07-15 09:27:19');

-- --------------------------------------------------------

--
-- Table structure for table `quizquestions`
--

CREATE TABLE IF NOT EXISTS `quizquestions` (
  `question_no` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(50) NOT NULL,
  `option_a` varchar(30) NOT NULL,
  `option_b` varchar(30) NOT NULL,
  `option_c` varchar(30) NOT NULL,
  `option_d` varchar(30) NOT NULL,
  `question_answer` varchar(1) NOT NULL,
  `courseid` varchar(5) NOT NULL,
  PRIMARY KEY (`question_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `quizquestions`
--

INSERT INTO `quizquestions` (`question_no`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `question_answer`, `courseid`) VALUES
(78, 'aaaa', 'a', 'b', 'c', 'd', 'a', '101'),
(79, 'aaaa', 'a', 'b', 'c', 'd', 'a', '101'),
(80, 'vvv', 'v', 's', 'f', 'b', 'a', '102'),
(81, 'a', 'v', 'b', 'g', 'g', 'b', '102'),
(82, 'c', 's', 'f', 'f', 'f', 'a', '104'),
(83, '', '', '', '', '', '', '103'),
(84, 'x', 'x', 'c', 's', 'c', 'a', '103'),
(85, '', '', '', '', '', '', '103');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE IF NOT EXISTS `registrations` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_name` varchar(30) NOT NULL,
  `r_email` varchar(30) NOT NULL,
  `r_mob` varchar(10) NOT NULL,
  `r_course` varchar(5) NOT NULL,
  `r_date` date NOT NULL,
  PRIMARY KEY (`r_id`),
  UNIQUE KEY `r_email` (`r_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`r_id`, `r_name`, `r_email`, `r_mob`, `r_course`, `r_date`) VALUES
(8, 'bhoj', 'bhkmrptl@gmail.com', '7389327547', 'php', '2018-07-13');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE IF NOT EXISTS `user_detail` (
  `user_no` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(30) NOT NULL,
  `user_pass` varchar(16) NOT NULL DEFAULT 'sensible',
  `user_type` varchar(5) NOT NULL DEFAULT 'user',
  `course` varchar(5) NOT NULL,
  PRIMARY KEY (`user_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`user_no`, `user_id`, `user_pass`, `user_type`, `course`) VALUES
(1, 'bhjkmrptl', 'bk', 'admin', ''),
(2, 'rahul', 'sensible', 'user', 'php'),
(3, 'pooja', 'sensible', 'user', 'c++'),
(4, 'akash', 'sensible', 'user', 'java'),
(17, 'bhj', 'sensible', 'user', '103');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
