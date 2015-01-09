CREATE DATABASE  IF NOT EXISTS `zhonghang` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `zhonghang`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: localhost    Database: zhonghang
-- ------------------------------------------------------
-- Server version	5.6.21-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `zh_about`
--

DROP TABLE IF EXISTS `zh_about`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zh_about` (
  `aid` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` text CHARACTER SET utf8mb4 NOT NULL,
  `add_date` date DEFAULT NULL,
  `add_time` time DEFAULT NULL,
  `add_user` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zh_about`
--

LOCK TABLES `zh_about` WRITE;
/*!40000 ALTER TABLE `zh_about` DISABLE KEYS */;
INSERT INTO `zh_about` VALUES (1,'我的滑板鞋','<p>我的滑板鞋，摩擦摩擦。</p>','2015-01-06','838:59:59','wangte@wangte.com'),(2,'小苹果','<p>你是我的小丫削苹果</p>','2015-01-06','838:59:59','wangte@wangte.com');
/*!40000 ALTER TABLE `zh_about` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zh_admin_user`
--

DROP TABLE IF EXISTS `zh_admin_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zh_admin_user` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `salt` varchar(50) NOT NULL,
  `token` varchar(50) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zh_admin_user`
--

LOCK TABLES `zh_admin_user` WRITE;
/*!40000 ALTER TABLE `zh_admin_user` DISABLE KEYS */;
INSERT INTO `zh_admin_user` VALUES (2,'wangte@wangte.com','7edec1ff2d4a904a4f19ce92cd648253','422996','871e1f639835c83ade027905dcda0503');
/*!40000 ALTER TABLE `zh_admin_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zh_articles`
--

DROP TABLE IF EXISTS `zh_articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zh_articles` (
  `aid` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `add_time` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zh_articles`
--

LOCK TABLES `zh_articles` WRITE;
/*!40000 ALTER TABLE `zh_articles` DISABLE KEYS */;
INSERT INTO `zh_articles` VALUES (1,'8','测试动态1','<p>测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1测试动态1</p>','2015/01/06','wangte@wangte.com'),(2,'11','测试业务1','<p>测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1测试业务1</p>','2015/01/06','wangte@wangte.com');
/*!40000 ALTER TABLE `zh_articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zh_articles_type`
--

DROP TABLE IF EXISTS `zh_articles_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zh_articles_type` (
  `pid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `en_name` varchar(45) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zh_articles_type`
--

LOCK TABLES `zh_articles_type` WRITE;
/*!40000 ALTER TABLE `zh_articles_type` DISABLE KEYS */;
INSERT INTO `zh_articles_type` VALUES (0,'新闻动态',2,'News'),(0,'业绩案例',3,'Cases'),(0,'研发中心',4,'R&D Center'),(0,'人力资源',5,'Corporate Culture'),(0,'下载中心',6,'Download Center'),(0,'公司概况',7,'Company Overview'),(2,'公司动态',8,''),(2,'图片新闻',9,''),(2,'媒体聚焦',10,''),(3,'业务领域',11,''),(3,'水务投资项目',12,''),(3,'行业动态',13,''),(3,'业务视野',14,''),(5,'人才理念',15,''),(5,'人才现状',16,''),(5,'人才政策',17,''),(5,'招聘信息',18,''),(5,'澄清公告',19,''),(7,'公司简介',20,''),(7,'董事长致辞',21,''),(7,'管理团队',22,''),(7,'组织机构',23,''),(7,'公司战略',24,''),(7,'荣誉与奖励',25,''),(7,'企业文化',26,'');
/*!40000 ALTER TABLE `zh_articles_type` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-01-09  9:37:53
