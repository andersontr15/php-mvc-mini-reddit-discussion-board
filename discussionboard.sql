CREATE DATABASE  IF NOT EXISTS `discussionboard` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `discussionboard`;
-- MySQL dump 10.13  Distrib 5.6.19, for osx10.7 (i386)
--
-- Host: 127.0.0.1    Database: discussionboard
-- ------------------------------------------------------
-- Server version	5.5.42

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
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` varchar(45) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `counter` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,10,4,'I agree!','2015-11-06 15:30:03','2015-11-06 15:30:03',1),(2,11,1,'cool man!','2015-11-07 08:57:06','2015-11-07 08:57:06',1);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `downvotes`
--

DROP TABLE IF EXISTS `downvotes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `downvotes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `counter` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `downvotes`
--

LOCK TABLES `downvotes` WRITE;
/*!40000 ALTER TABLE `downvotes` DISABLE KEYS */;
INSERT INTO `downvotes` VALUES (1,1,5,'2015-11-06 11:19:06','2015-11-06 11:19:06',1),(2,1,5,'2015-11-06 11:19:10','2015-11-06 11:19:10',1),(3,1,5,'2015-11-06 11:19:50','2015-11-06 11:19:50',1),(4,1,5,'2015-11-06 11:19:53','2015-11-06 11:19:53',1),(5,1,4,'2015-11-06 11:20:29','2015-11-06 11:20:29',1),(6,1,4,'2015-11-06 11:20:30','2015-11-06 11:20:30',1),(7,1,4,'2015-11-06 11:20:54','2015-11-06 11:20:54',1),(8,1,6,'2015-11-06 11:24:01','2015-11-06 11:24:01',1),(9,1,5,'2015-11-06 11:24:03','2015-11-06 11:24:03',1),(10,2,8,'2015-11-06 11:57:01','2015-11-06 11:57:01',1),(11,2,8,'2015-11-06 11:57:03','2015-11-06 11:57:03',1),(12,1,8,'2015-11-06 12:32:50','2015-11-06 12:32:50',1),(13,1,8,'2015-11-06 12:32:52','2015-11-06 12:32:52',1),(14,1,8,'2015-11-06 12:33:39','2015-11-06 12:33:39',1),(15,1,8,'2015-11-06 13:22:45','2015-11-06 13:22:45',1),(16,1,9,'2015-11-06 13:30:22','2015-11-06 13:30:22',1),(17,1,9,'2015-11-06 13:30:27','2015-11-06 13:30:27',1),(18,1,9,'2015-11-06 13:30:29','2015-11-06 13:30:29',1),(19,1,9,'2015-11-06 14:29:04','2015-11-06 14:29:04',1),(20,1,10,'2015-11-06 15:28:30','2015-11-06 15:28:30',1),(21,1,11,'2015-11-07 08:56:57','2015-11-07 08:56:57',1),(22,1,11,'2015-11-07 08:56:59','2015-11-07 08:56:59',1),(23,1,12,'2015-11-07 10:39:21','2015-11-07 10:39:21',1),(24,1,12,'2015-11-07 10:39:23','2015-11-07 10:39:23',1);
/*!40000 ALTER TABLE `downvotes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `messsage` varchar(45) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pokes`
--

DROP TABLE IF EXISTS `pokes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pokes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(45) NOT NULL,
  `counter` varchar(45) NOT NULL DEFAULT '0',
  `poked_id` varchar(45) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pokes`
--

LOCK TABLES `pokes` WRITE;
/*!40000 ALTER TABLE `pokes` DISABLE KEYS */;
/*!40000 ALTER TABLE `pokes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(45) NOT NULL,
  `topic_id` varchar(45) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `post` varchar(200) NOT NULL,
  `counter` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (8,'2','3','2015-11-06 11:44:28','2015-11-06 11:44:28','Hey Theo, check out codecademy',1),(9,'1','3','2015-11-06 13:25:01','2015-11-06 13:25:01','Check out w3 schools!',1),(10,'1','4','2015-11-06 15:28:26','2015-11-06 15:28:26','Python is very logical!',1),(11,'1','5','2015-11-07 08:56:50','2015-11-07 08:56:50','check out codecademy!',1),(12,'1','5','2015-11-07 08:57:17','2015-11-07 08:57:17','Check out w3 schools!',1);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `topics`
--

DROP TABLE IF EXISTS `topics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `topic` varchar(45) NOT NULL,
  `description` varchar(200) NOT NULL,
  `category` varchar(45) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `counter` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topics`
--

LOCK TABLES `topics` WRITE;
/*!40000 ALTER TABLE `topics` DISABLE KEYS */;
INSERT INTO `topics` VALUES (5,1,'Learning Intermediate Ruby','How should i begin?','Ruby','2015-11-07 08:56:26','2015-11-07 08:56:26',1);
/*!40000 ALTER TABLE `topics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `upvotes`
--

DROP TABLE IF EXISTS `upvotes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `upvotes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `counter` int(11) NOT NULL DEFAULT '0',
  `user_id` varchar(45) NOT NULL,
  `post_id` varchar(45) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `upvotes`
--

LOCK TABLES `upvotes` WRITE;
/*!40000 ALTER TABLE `upvotes` DISABLE KEYS */;
INSERT INTO `upvotes` VALUES (1,1,'1','4','2015-11-06 11:15:25','2015-11-06 11:15:25'),(2,1,'1','4','2015-11-06 11:16:02','2015-11-06 11:16:02'),(3,1,'1','4','2015-11-06 11:16:04','2015-11-06 11:16:04'),(4,1,'1','4','2015-11-06 11:16:07','2015-11-06 11:16:07'),(5,1,'1','5','2015-11-06 11:16:09','2015-11-06 11:16:09'),(6,1,'1','5','2015-11-06 11:16:11','2015-11-06 11:16:11'),(7,1,'1','5','2015-11-06 11:17:56','2015-11-06 11:17:56'),(8,1,'1','4','2015-11-06 11:17:58','2015-11-06 11:17:58'),(9,1,'1','4','2015-11-06 11:18:00','2015-11-06 11:18:00'),(10,1,'1','4','2015-11-06 11:18:02','2015-11-06 11:18:02'),(11,1,'1','4','2015-11-06 11:18:05','2015-11-06 11:18:05'),(12,1,'1','5','2015-11-06 11:18:07','2015-11-06 11:18:07'),(13,1,'1','5','2015-11-06 11:20:25','2015-11-06 11:20:25'),(14,1,'1','5','2015-11-06 11:20:27','2015-11-06 11:20:27'),(15,1,'1','6','2015-11-06 11:21:50','2015-11-06 11:21:50'),(16,1,'1','6','2015-11-06 11:21:53','2015-11-06 11:21:53'),(17,1,'1','6','2015-11-06 11:21:55','2015-11-06 11:21:55'),(18,1,'1','6','2015-11-06 11:21:57','2015-11-06 11:21:57'),(19,1,'1','6','2015-11-06 11:22:00','2015-11-06 11:22:00'),(20,1,'1','6','2015-11-06 11:22:02','2015-11-06 11:22:02'),(21,1,'1','6','2015-11-06 11:22:05','2015-11-06 11:22:05'),(22,1,'1','6','2015-11-06 11:22:07','2015-11-06 11:22:07'),(23,1,'1','6','2015-11-06 11:22:09','2015-11-06 11:22:09'),(24,1,'1','4','2015-11-06 11:23:07','2015-11-06 11:23:07'),(25,1,'1','6','2015-11-06 11:23:14','2015-11-06 11:23:14'),(26,1,'1','5','2015-11-06 11:26:07','2015-11-06 11:26:07'),(27,1,'1','7','2015-11-06 11:39:45','2015-11-06 11:39:45'),(28,1,'1','7','2015-11-06 11:39:48','2015-11-06 11:39:48'),(29,1,'2','8','2015-11-06 11:44:43','2015-11-06 11:44:43'),(30,1,'2','8','2015-11-06 11:56:59','2015-11-06 11:56:59'),(31,1,'2','8','2015-11-06 11:57:06','2015-11-06 11:57:06'),(32,1,'1','8','2015-11-06 12:17:43','2015-11-06 12:17:43'),(33,1,'1','8','2015-11-06 12:17:46','2015-11-06 12:17:46'),(34,1,'1','8','2015-11-06 12:21:52','2015-11-06 12:21:52'),(35,1,'1','8','2015-11-06 12:33:34','2015-11-06 12:33:34'),(36,1,'1','8','2015-11-06 13:24:41','2015-11-06 13:24:41'),(37,1,'1','9','2015-11-06 13:25:10','2015-11-06 13:25:10'),(38,1,'1','9','2015-11-06 13:30:25','2015-11-06 13:30:25'),(39,1,'1','9','2015-11-06 14:28:43','2015-11-06 14:28:43'),(40,1,'1','10','2015-11-06 15:28:28','2015-11-06 15:28:28'),(41,1,'4','10','2015-11-06 15:29:56','2015-11-06 15:29:56'),(42,1,'1','11','2015-11-07 08:56:53','2015-11-07 08:56:53'),(43,1,'1','11','2015-11-07 08:56:55','2015-11-07 08:56:55'),(44,1,'1','11','2015-11-07 08:57:01','2015-11-07 08:57:01'),(45,1,'1','12','2015-11-07 08:57:21','2015-11-07 08:57:21'),(46,1,'1','11','2015-11-07 09:08:03','2015-11-07 09:08:03'),(47,1,'1','12','2015-11-07 10:39:19','2015-11-07 10:39:19'),(48,1,'1','12','2015-11-07 10:48:57','2015-11-07 10:48:57'),(49,1,'1','12','2015-11-07 10:49:01','2015-11-07 10:49:01'),(50,1,'1','11','2015-11-07 10:49:05','2015-11-07 10:49:05'),(51,1,'1','12','2015-11-07 18:13:46','2015-11-07 18:13:46');
/*!40000 ALTER TABLE `upvotes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `topic_counter` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Theodore','Anderson','andersontr15@mail.vmi.edu','thuglife25','2015-11-05 15:22:37','2015-11-05 15:22:37',0),(2,'William','Anderson','trey@yahoo.com','thuglife25','2015-11-05 17:41:21','2015-11-05 17:41:21',0),(3,'Johnathon','Henderson','john@yahoo.com','thuglife25','2015-11-06 08:35:10','2015-11-06 08:35:10',0),(4,'Franz','Fernandez','franz@yahoo.com','thuglife25','2015-11-06 10:17:43','2015-11-06 10:17:43',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-10  9:38:53
