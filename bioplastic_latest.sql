-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: localhost    Database: bioplastic
-- ------------------------------------------------------
-- Server version	5.7.26-0ubuntu0.18.04.1

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
-- Table structure for table `requests`
--

DROP TABLE IF EXISTS `requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `requests` (
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `cname` varchar(100) DEFAULT NULL,
  `weight` int(10) DEFAULT NULL,
  `cost` int(10) DEFAULT NULL,
  `flexb` int(10) DEFAULT NULL,
  `entry_time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requests`
--

LOCK TABLES `requests` WRITE;
/*!40000 ALTER TABLE `requests` DISABLE KEYS */;
INSERT INTO `requests` VALUES ('Maanav','Singh','PC TSA',50000,10,33965,'2019-06-15 01:29:18'),('Maanav','Singh','PC TSA',50000,10,33965,'2019-06-15 01:32:01'),('asdasd','asdasd','asdasd',500,0,390,'2019-06-15 01:32:48'),('Anil','Singh','Dosvak',999,0,728,'2019-06-15 01:48:33'),('Aarushi','Singh','Singh',100000,20,67880,'2019-06-15 01:50:54'),('Maanav','Singh','PCHS TSA',800,0,593,'2019-06-15 01:53:03'),('dasdasd','asdasd','asdasdas',23,0,66,'2019-06-15 02:32:39'),('asdvsdfa','asdfa','asdfa',999,0,728,'2019-06-15 02:36:28'),('Maanav','Singh','PCHS',1231,0,886,'2019-06-15 03:33:19'),('Maanav','Singh','Pchs',340,0,281,'2019-06-15 16:14:20'),('Ishan','Thakur','Pchs',75000,15,50922,'2019-06-15 19:57:57'),('yy','jhkj','hjkh',1270,0,912,'2019-06-16 00:07:47'),('Test','Tester','Biotech',500000,100,339195,'2019-06-16 00:09:03'),('12512512`','1231231231','231231321',44,0,81,'2019-06-16 01:21:37'),('aditya','gupta','sas ',50000,10,33965,'2019-06-17 18:46:57'),('Maanav','Singh','PCHS',150000,30,101794,'2019-06-17 19:40:12'),('Maanav','Singh','PCHS',20,0,1017,'2019-06-17 20:52:35'),('Maanav','Singh','PCHS',20,0,1017,'2019-06-17 20:54:55'),('Maanav','Singh','PCHS',400,2,2986,'2019-06-17 20:55:22'),('1','asdasd','16313',12600,50,66192,'2019-06-18 01:52:54'),('asdasd','asdas','dasdasd',5000,20,26818,'2019-06-18 01:56:18'),('asdasd','asdas','dasdasd',5000,20,26818,'2019-06-18 01:58:49'),('asdasd','asdas','dasdasd',5000,20,26818,'2019-06-18 01:59:30'),('asdasd','asdas','dasdasd',5000,20,26818,'2019-06-18 02:00:21'),('Maanav','Singh','Panther Creek High School',1500,6,8685,'2019-06-18 02:05:25'),('Maanav','Singh','PCHS',6667,20,50301,'2019-06-18 02:07:05'),('Maanav','Singh','PCHS',6667,20,50301,'2019-06-18 02:08:32'),('Maanav','Singh','PCHS',6667,20,50301,'2019-06-18 02:09:35'),('Maanav','Singh','PCHS',333,1,2535,'2019-06-18 02:09:48'),('sdf','dgfsdag','sdfsa',50,0,398,'2019-06-18 22:39:50'),('Bharath','G','Ace Tech',166667,500,1257021,'2019-06-18 22:41:26'),('Bharath','G','Ace Tech',166667,500,1257021,'2019-06-18 22:42:50'),('Maanav','Singh','PCHS',998900,2997,10000,'2019-06-22 03:11:21');
/*!40000 ALTER TABLE `requests` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-26 16:47:35
