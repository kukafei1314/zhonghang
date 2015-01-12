-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-01-12 15:11:46
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zhonghang`
--

-- --------------------------------------------------------

--
-- 表的结构 `zh_pic_news`
--

CREATE TABLE IF NOT EXISTS `zh_pic_news` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `aid` int(10) NOT NULL,
  `path` varchar(50) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `zh_pic_news`
--

INSERT INTO `zh_pic_news` (`pid`, `aid`, `path`) VALUES
(1, 36, 'upload/20150112/142106820808.jpg'),
(2, 37, 'upload/20150112/142106828222.jpg'),
(3, 38, 'upload/20150112/142106829030.jpg'),
(4, 39, 'upload/20150112/142106829939.jpg'),
(5, 40, 'upload/20150112/142107174909.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
