-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 2018 at 06:32 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `insert`
--
CREATE DATABASE IF NOT EXISTS `insert` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `insert`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blogs`
--

CREATE TABLE IF NOT EXISTS `tbl_blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_blogs`
--

INSERT INTO `tbl_blogs` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'helo', 'pelo', '2018-01-28 00:00:00', '2018-01-31 06:55:34'),
(2, 'helo', 'pelo', '2018-01-28 00:00:00', '2018-01-31 06:55:34'),
(4, 'helo', 'pelo', '2018-01-28 00:00:00', '2018-01-31 06:55:34'),
(5, 'helo', 'pelo', '0000-00-00 00:00:00', '2018-01-31 06:55:34'),
(6, 'helo', 'pelo', '2018-01-28 11:26:10', '2018-01-31 06:55:34'),
(8, 'helo', 'pelo', '2018-01-29 04:50:41', '2018-01-31 06:55:34'),
(9, 'helo', 'pelo', '2018-01-29 05:06:46', '2018-01-31 06:55:34'),
(11, 'hi', 'pelo', '2018-01-29 05:09:28', '2018-02-10 16:11:13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
