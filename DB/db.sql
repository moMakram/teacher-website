-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 25, 2013 at 03:30 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `teach`
--

-- --------------------------------------------------------

--
-- Table structure for table `group_st`
--

CREATE TABLE IF NOT EXISTS `group_st` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_n` varchar(100) NOT NULL,
  `group_s` varchar(100) NOT NULL,
  `group_e` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `group_st`
--

INSERT INTO `group_st` (`id`, `group_n`, `group_s`, `group_e`) VALUES
(1, 'm1', '10', '11.30'),
(2, 'm2', '12', '1.30');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE IF NOT EXISTS `inquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `mass` varchar(1000) NOT NULL,
  `ans` varchar(1000) NOT NULL,
  `app` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `user_name`, `mass`, `ans`, `app`) VALUES
(14, 'sss', 'لابد من المتابعة الجيدة يا استاذى العزيز', '', 'لا يظهر'),
(15, 'قق', 'ان شاء الله تمام باذن الله', '', 'لا يظهر'),
(16, 'rrt', 'محمد عايز ينضرب', 'ان شاء الله هيضرب', 'يظهر'),
(17, 'rrt', 'هيضرب امتى', 'بكره', 'يظهر');

-- --------------------------------------------------------

--
-- Table structure for table `js_pho`
--

CREATE TABLE IF NOT EXISTS `js_pho` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descr` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `js_pho`
--

INSERT INTO `js_pho` (`id`, `descr`) VALUES
(4, 'Koala.jpg'),
(5, 'Jellyfish.jpg'),
(6, 'firewithfireposter.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_desc` varchar(1000) NOT NULL,
  `news_app` varchar(100) NOT NULL,
  `news_order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_desc`, `news_app`, `news_order`) VALUES
(1, ' سنبدا المراجعة اليوم ان شاء الله', 'يظهر', 2),
(2, 'لل', 'لا يظهر', 1),
(3, 'لل', 'يظهر', 1),
(4, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `is_s` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mn` varchar(100) NOT NULL,
  `pay_c` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `is_s`, `name`, `mn`, `pay_c`) VALUES
(4, 7, 'محمد اسلام', 'فبراير', 'لم يدفع'),
(5, 8, 'ahmed el hofy', 'فبراير', 'دفع'),
(6, 7, 'محمد اسلام', 'مارس', 'دفع');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(100) NOT NULL,
  `s_year` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `group_n` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `s_name`, `s_year`, `user_name`, `pass`, `group_n`) VALUES
(7, 'محمد اسلام', 'sec_year', 'قق', 'يي', 'm1'),
(8, 'ahmed el hofy', 'sec_year', 'rrt', '445', 'm2'),
(9, 'ahmed elhofy', 'm1', 'sss', 'sssa', '');

-- --------------------------------------------------------

--
-- Table structure for table `st_leavle`
--

CREATE TABLE IF NOT EXISTS `st_leavle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_s` int(11) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_date` date NOT NULL,
  `s_hodor` varchar(100) NOT NULL,
  `t_gread` varchar(100) NOT NULL,
  `ex_gread` varchar(100) NOT NULL,
  `h_gread` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `st_leavle`
--

INSERT INTO `st_leavle` (`id`, `id_s`, `s_name`, `s_date`, `s_hodor`, `t_gread`, `ex_gread`, `h_gread`) VALUES
(12, 7, 'محمد اسلام', '2013-09-23', '', '', '', '');
