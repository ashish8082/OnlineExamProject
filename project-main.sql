-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2016 at 03:52 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'CSS'),
(2, 'HTML'),
(3, 'PHP');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `c_name` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `query` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_name`, `contact`, `query`) VALUES
('', '', ''),
('', '', ''),
('', '', ''),
('dAD', 'dadA', 'dADad');

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
  `answer` varchar(250) NOT NULL,
  `category` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_name`, `answer1`, `answer2`, `answer3`, `answer`, `category`) VALUES
(1, 'CSS Stands for...', 'Computer Styled Sections ', 'Cascading Style Sheets', 'Crazy Solid Shapes', 'Cascading Style Sheets', '1'),
(2, 'Internet Explorer 6 was released in...', '2001', '1998', '1995', '1995', '1'),
(3, 'Which property is used to change the background color?', 'background-color:', 'bg-color:', 'bground:', 'background-color:', '1'),
(4, 'What property is used to change the text color of an element?\n\n\n', 'fontcolor:', 'textcolor:', 'color:', 'color:', '1'),
(5, 'The # symbol specifies that the selector is?', 'class', 'tag', 'first', 'tag', '1'),
(6, 'Which of the following is used to create Web Page.', 'HTML', 'JVM', 'DTD', 'HTML', ''),
(7, 'HTML Stands for _____________.', 'Hyper Text Makeup Language', 'Hyper Text Markup Language', 'Hyper Tech Markup Language', 'Hyper Text Markup Language', ''),
(8, 'HTML program is saved using ____________ extension.', '.htnl', '.htl', '.html', '.html', ''),
(9, 'HTML program can be read and rendered by _________.', 'Compiler', 'Web Browser', 'Server', 'Web Browser', ''),
(10, 'HTML document contain 1 root tag called __________.', 'HTML', 'BODY', 'TITLE', 'HTML', ''),
(11, 'Which of the following is correct about PHP?', 'PHP can access cookies variables and set cookies.', 'you can restrict users to access some pages of your website.', 'It can encrypt data.', 'PHP can access cookies variables and set cookies.', ''),
(12, 'Which of the following array represents an array with a numeric index?', 'Numeric Array', 'Associative Array', 'Multidimentional Array', 'Numeric Array', ''),
(13, 'Which of the following function is used to redirect a page?', 'redirect()', 'header()', 'reflect()', 'header()', ''),
(14, 'Which of the following is used to delete a cookie?', 'setcookie() function', '$_COOKIE variable', 'isset() function', 'setcookie() function', ''),
(15, 'Which of the following method returns current date and time?', 'time()', 'getdate()', 'date()', 'time()', '');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `userName` varchar(50) NOT NULL,
  `question_name` varchar(50) NOT NULL,
  `answer_att` varchar(50) NOT NULL,
  `answer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `name`, `type`) VALUES
(1, 'css.pdf', 'application/pdf'),
(2, 'html.pdf', 'application/pdf'),
(3, 'javascript.pdf', 'application/pdf'),
(4, 'jquery.pdf', 'application/pdf'),
(5, 'php.pdf', 'application/pdf');

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
  PRIMARY KEY (`userId`),
  UNIQUE KEY `userEmail` (`userEmail`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`, `userCont`, `score`) VALUES
(1, 'gaurav', 'gaurav@gmail.com', 'yo123', '9930538977', 2),
(2, 'naveen', 'naveen@gmail.com', 'naveen123', '9930538977', 0),
(3, 'ola', 'ola@gmail.com', 'ola123', '7732345678', 0),
(7, 'txtname', 'txtemailid', 'txtpassword', 'txtcontact', 0),
(8, 'olAS', 'dsadha@gmail.com', 'yo123', '9930538977', 0),
(10, 'mola', 'mola@gmail.com', 'yo123', '9930538977', 0),
(13, 'mola1', 'mola1@gmail.com', 'yo12345', '9930538977', 0),
(15, 'kola', 'kola@gmail.com', 'rock123', '9930538977', 0),
(16, 'lola', 'lola@gmail.com', 'lola123', '9930538977', 0),
(19, 'bola', 'bola@gmail.com', 'bola123', '9930538977', 0),
(22, 'nola', 'fasfa@ask.com', 'iusdgas', '9878678678', 0),
(23, 'xcxc', 'yo@gmail.com', 'yo123', '8756789i87', 0),
(24, 'rrla', 'rola@gmail.com', 'yo123', '9930538977', 0),
(26, 'sacas', 's@gmail.com', 'sdasd', 'swdqwds', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
