-- MySQL dump 10.13  Distrib 5.5.53, for Win32 (AMD64)
--
-- Host: localhost    Database: movielist
-- ------------------------------------------------------
-- Server version	5.5.53

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
-- Table structure for table `movie_rate`
--

DROP TABLE IF EXISTS `movie_rate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movie_rate` (
  `1` int(100) NOT NULL,
  `2` int(100) NOT NULL,
  `3` int(100) NOT NULL,
  `4` int(100) NOT NULL,
  `5` int(100) NOT NULL,
  `6` int(100) NOT NULL,
  `7` int(100) NOT NULL,
  `8` int(100) NOT NULL,
  `9` int(100) NOT NULL,
  `10` int(100) NOT NULL,
  `11` int(100) NOT NULL,
  `12` int(100) NOT NULL,
  `13` int(100) NOT NULL,
  `14` int(100) NOT NULL,
  `15` int(100) NOT NULL,
  `16` int(100) NOT NULL,
  `17` int(100) NOT NULL,
  `18` int(100) NOT NULL,
  `19` int(100) NOT NULL,
  `20` int(100) NOT NULL,
  `21` int(100) NOT NULL,
  `22` int(100) NOT NULL,
  `23` int(100) NOT NULL,
  `24` int(100) NOT NULL,
  `25` int(100) NOT NULL,
  `26` int(100) NOT NULL,
  `27` int(100) NOT NULL,
  `28` int(100) NOT NULL,
  `29` int(100) NOT NULL,
  `30` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movie_rate`
--

LOCK TABLES `movie_rate` WRITE;
/*!40000 ALTER TABLE `movie_rate` DISABLE KEYS */;
INSERT INTO `movie_rate` VALUES (3,5,2,2,3,3,3,3,2,3,5,5,5,5,5,3,2,5,5,3,4,5,4,3,3,3,3,4,1,2,'userone'),(4,5,3,4,4,5,5,3,4,4,4,4,3,4,4,5,3,4,4,5,5,3,5,5,5,4,3,3,2,2,'usertwo'),(3,3,2,5,4,4,3,3,2,4,4,2,3,3,4,4,1,4,4,2,2,2,3,4,3,3,5,5,5,5,'userthree');
/*!40000 ALTER TABLE `movie_rate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `show_movie`
--

DROP TABLE IF EXISTS `show_movie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `show_movie` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `mName` varchar(100) NOT NULL,
  `mYear` int(100) NOT NULL,
  `mKeywordOne` varchar(100) NOT NULL,
  `mKeywordTwo` varchar(100) NOT NULL,
  `mKeywordThree` varchar(100) NOT NULL,
  `mPicture` varchar(100) NOT NULL,
  `mContent` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `show_movie`
--

LOCK TABLES `show_movie` WRITE;
/*!40000 ALTER TABLE `show_movie` DISABLE KEYS */;
INSERT INTO `show_movie` VALUES (9,'狩猎',2012,'北欧','伦理','奥斯卡','jagten.jpg','弱小是否就意味着无条件的同情？');
/*!40000 ALTER TABLE `show_movie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_info` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `note` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_info`
--

LOCK TABLES `user_info` WRITE;
/*!40000 ALTER TABLE `user_info` DISABLE KEYS */;
INSERT INTO `user_info` VALUES (18,'wangxinlei','lenny123','Beijing','','',''),(17,'RT','44','Nanjing','2018-12-31','15616@QQ.COM','SFASDEEE'),(16,'BF','PP','Beijing','','',''),(15,'00','00','Beijing','','',''),(14,'44','44','Beijing','','','');
/*!40000 ALTER TABLE `user_info` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-31 15:41:10
