-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 01 月 06 日 13:08
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `zhonghang2.0`
--

-- --------------------------------------------------------

--
-- 表的结构 `zh_about`
--

CREATE TABLE IF NOT EXISTS `zh_about` (
  `aid` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` text CHARACTER SET utf8mb4 NOT NULL,
  `add_date` date DEFAULT NULL,
  `add_time` time DEFAULT NULL,
  `add_user` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `zh_about`
--

INSERT INTO `zh_about` (`aid`, `title`, `content`, `add_date`, `add_time`, `add_user`) VALUES
(1, '我的滑板鞋', '<p>我的滑板鞋，摩擦摩擦。</p>', '2015-01-06', '838:59:59', 'wangte@wangte.com'),
(2, '小苹果', '<p>你是我的小丫削苹果</p>', '2015-01-06', '838:59:59', 'wangte@wangte.com');

-- --------------------------------------------------------

--
-- 表的结构 `zh_admin_user`
--

CREATE TABLE IF NOT EXISTS `zh_admin_user` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `salt` varchar(50) NOT NULL,
  `token` varchar(50) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `zh_admin_user`
--

INSERT INTO `zh_admin_user` (`uid`, `username`, `password`, `salt`, `token`) VALUES
(2, 'wangte@wangte.com', '7edec1ff2d4a904a4f19ce92cd648253', '422996', '4ed8d21886e2e238414fa063efe2b634');

-- --------------------------------------------------------

--
-- 表的结构 `zh_articles`
--

CREATE TABLE IF NOT EXISTS `zh_articles` (
  `aid` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `add_time` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `zh_articles`
--

INSERT INTO `zh_articles` (`aid`, `type`, `title`, `content`, `add_time`, `username`) VALUES
(1, '8', '测试动态1', '<p>测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1</p>', '2015/01/06', 'wangte@wangte.com'),
(2, '11', '测试业务1', '<p>测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1</p>', '2015/01/06', 'wangte@wangte.com');

-- --------------------------------------------------------

--
-- 表的结构 `zh_articles_type`
--

CREATE TABLE IF NOT EXISTS `zh_articles_type` (
  `pid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `zh_articles_type`
--

INSERT INTO `zh_articles_type` (`pid`, `name`, `tid`) VALUES
(0, '新闻动态', 2),
(0, '业绩案例', 3),
(0, '研发中心', 4),
(0, '人力资源', 5),
(0, '下载中心', 6),
(0, '公司公告', 7),
(2, '公司动态', 8),
(2, '图片新闻', 9),
(2, '媒体聚焦', 10),
(3, '业务领域', 11),
(3, '水务投资项目', 12),
(3, '行业动态', 13),
(3, '业务视野', 14),
(5, '人才理念', 15),
(5, '人才现状', 16),
(5, '人才政策', 17),
(5, '招聘信息', 18),
(5, '澄清公告', 19);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
