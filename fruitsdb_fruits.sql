-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: fruitsdb
-- ------------------------------------------------------
-- Server version	8.0.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `fruits`
--

DROP TABLE IF EXISTS `fruits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fruits` (
  `fruit_id` int NOT NULL AUTO_INCREMENT,
  `fruit_name` varchar(45) NOT NULL,
  `quantity` float NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdby` varchar(45) NOT NULL DEFAULT 'Alexis',
  `last_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatedby` varchar(45) NOT NULL DEFAULT 'Alexis',
  `unit_of_measure_id` int NOT NULL,
  PRIMARY KEY (`fruit_id`),
  KEY `unit_of_measure_unit_id_idx` (`unit_of_measure_id`),
  CONSTRAINT `unit_of_measure_unit_id` FOREIGN KEY (`unit_of_measure_id`) REFERENCES `unit_of_measure` (`unit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fruits`
--

LOCK TABLES `fruits` WRITE;
/*!40000 ALTER TABLE `fruits` DISABLE KEYS */;
INSERT INTO `fruits` VALUES (3,'Orange',50,'2023-04-13 14:14:34','Alexis','2023-04-13 14:14:34','Alexis',1),(4,'Abocado',2,'2023-04-13 21:02:17','Alexis','2023-04-13 21:02:17','Alexis',1),(5,'Apple',200,'2023-04-13 21:05:40','Alexis','2023-04-13 21:05:40','Alexis',3),(6,'bayabas',12,'2023-04-13 21:44:06','Alexis','2023-04-13 21:44:06','Alexis',2),(7,'Grapes',50,'2023-04-14 11:06:31','Alexis','2023-04-14 11:06:31','Alexis',2);
/*!40000 ALTER TABLE `fruits` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-25  9:26:03
