-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 27, 2018 at 10:33 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pagination`
--
CREATE DATABASE IF NOT EXISTS `pagination` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pagination`;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `content` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `title`, `content`) VALUES
(1, 'hii', 'helo'),
(2, 'act', 'Act of liberty'),
(3, 'cat', 'baeutiful cat'),
(4, 'monkey', 'monkey jumps'),
(5, 'shinchain', 'shinchain is sweet'),
(6, 'mobile', 'Mobile is ringing'),
(7, 'Cat', 'Cat down the road'),
(8, 'messgae', 'message is sent'),
(9, 'book', 'book is on table'),
(10, 'charger', 'charge your laptop'),
(11, 'compass', 'compass box'),
(12, 'water', 'drink water'),
(13, 'apple ', 'apple is healthy'),
(14, 'earphones', 'earphones are good'),
(15, 'party', 'theres a party'),
(16, 'bag', 'bag is heavy'),
(17, 'books ', 'pile of books'),
(18, 'birds', 'flock of birds'),
(19, 'door', 'shut the door'),
(20, 'table', 'clean the table'),
(21, 'hbk', 'rhjvgjrtnvr otjnbprj'),
(22, 'bgknrbl kbmpr', 'tjnojbn tobjtpgr orj'),
(23, 'bfh', 'ngbjng jtgnto tgtopk'),
(24, 'hgb ', 'n bknr tjngt tmbr'),
(25, 'jgnb', 'nb gmfb kgbmg tjgnpt'),
(26, 'vng kb', 'g nnf gjbnblg glbhmb'),
(27, 'ng lb ', 'mbhn hl hbkm;t'),
(28, 'gbgbg', 'gbhgbhg'),
(29, 'hgbhgnhg', 'hgnhgnghn'),
(30, 'hbhg', 'hn hgn'),
(31, 'jgnblhg ', 'bngbl lbjmhbk '),
(32, 'gm ;hg', 'hnb khgmh;');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
