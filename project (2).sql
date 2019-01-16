-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2016 at 04:48 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'Sports'),
(2, 'HTML'),
(3, 'PHP'),
(4, 'CSS');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_name` text NOT NULL,
  `answer1` varchar(250) NOT NULL,
  `answer2` varchar(250) NOT NULL,
  `answer3` varchar(250) NOT NULL,
  `answer4` varchar(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_name`, `answer1`, `answer2`, `answer3`, `answer4`, `answer`, `category_id`) VALUES
(1, 'CSS Stands for...', '1) Computer Styled Sections ', '2) Cascading Style Sheets', '3) Crazy Solid Shapes', '4) None of the above', '2', 1),
(2, 'Internet Explorer 6 was released in...', '1) 2001', '2) 1998', '3) 2006', '4) 2003', '1', 1),
(3, 'Which property is used to change the background color?', '1) background-color:', '2) bg-color:', '3) bground:', '4) b-color:', '4', 1),
(4, 'What property is used to change the text color of an element?\n\n\n', '1) fontcolor:', '2) textcolor:', '3) color:', '4) font-color:', '3', 1),
(5, 'The # symbol specifies that the selector is?', '1) class', '2) tag', '3) first', '4) id', '2', 1),
(6, 'Which of the following is used to create Web Page.', '1 )HTML', '2)JVM', '3)DTD', '4)C', '1', 2),
(7, 'HTML Stands for _____________.', '1) Hyper Text Makeup Language', '2) Hyper Text Markup Language', '3) Hyper Tech Markup Language', '4) None of these', '2', 2),
(8, 'HTML program is saved using ____________ extension.', '1 ).htnl', '2).htl', '3).hml', '4).html', '4', 2),
(9, 'HTML program can be read and rendered by _________.', '1) Compiler', '2) Web Browser', '3) Server', '4) Interpreter', '2', 2),
(10, 'HTML document contain 1 root tag called __________.', '1) HTML', '2) BODY', '3) TITLE', '4) HEAD', '1', 2),
(11, 'Which of the following is correct about PHP?', '1)PHP can access cookies variables and set cookies.', '2) Using PHP, you can restrict users to access some pages of your website.', '3) It can encrypt data.', '4) All of the above.', '4', 3),
(12, 'Which of the following array represents an array with a numeric index?', '1) Numeric Array', '2) Associative Array', '3) Multidimentional Array', '4) None of the above.', '1', 3),
(13, 'Which of the following function is used to redirect a page?', '1)redirect()', '2) header()', '3) reflect()', '4) None of the above.', '2', 3),
(14, 'Which of the following is used to delete a cookie?', '1) setcookie() function', '2) $_COOKIE variable', '3)- isset() function', '4) None of the above.', '1', 3),
(15, 'Which of the following method returns current date and time?', '1) time()', '2) getdate()', '3) date()', '4) None of the above', '1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `userCont` varchar(15) NOT NULL,
  `score` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `userEmail` (`userEmail`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`, `userCont`, `score`, `category_id`) VALUES
(1, 'gaurav1234', 'gaurav@gmail.com', 'yo123', '9930538977', 0, 0),
(2, 'naveen', 'naveen@gmail.com', 'naveen123', '9930538977', 0, 0),
(3, 'ola', 'ola@gmail.com', 'ola123', '7732345678', 0, 0),
(7, 'txtname', 'txtemailid', 'txtpassword', 'txtcontact', 0, 0),
(8, 'olAS', 'dsadha@gmail.com', 'yo123', '9930538977', 0, 0),
(10, 'mola', 'mola@gmail.com', 'yo123', '9930538977', 0, 0),
(13, 'mola1', 'mola1@gmail.com', 'yo12345', '9930538977', 0, 0),
(15, 'kola', 'kola@gmail.com', 'rock123', '9930538977', 0, 0),
(16, 'lola', 'lola@gmail.com', 'lola123', '9930538977', 0, 0),
(19, 'bola', 'bola@gmail.com', 'bola123', '9930538977', 0, 0),
(22, 'nola', 'fasfa@ask.com', 'iusdgas', '9878678678', 0, 0),
(23, 'xcxc', 'yo@gmail.com', 'yo123', '8756789i87', 0, 0),
(24, 'rrla', 'rola@gmail.com', 'yo123', '9930538977', 0, 0),
(26, 'sacas', 's@gmail.com', 'sdasd', 'swdqwds', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
