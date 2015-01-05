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
  `type` varchar(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zh_about`
--

LOCK TABLES `zh_about` WRITE;
/*!40000 ALTER TABLE `zh_about` DISABLE KEYS */;
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
INSERT INTO `zh_admin_user` VALUES (2,'wangte@wangte.com','7edec1ff2d4a904a4f19ce92cd648253','422996','4ed8d21886e2e238414fa063efe2b634');
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
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zh_articles`
--

LOCK TABLES `zh_articles` WRITE;
/*!40000 ALTER TABLE `zh_articles` DISABLE KEYS */;
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
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zh_articles_type`
--

LOCK TABLES `zh_articles_type` WRITE;
/*!40000 ALTER TABLE `zh_articles_type` DISABLE KEYS */;
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

-- Dump completed on 2015-01-05 10:30:44
