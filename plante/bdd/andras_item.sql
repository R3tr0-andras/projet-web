-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: andras
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
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `item` (
  `itemId` int NOT NULL AUTO_INCREMENT,
  `itemPrix` int DEFAULT NULL,
  `itemDesc` varchar(255) DEFAULT NULL,
  `itemStock` int DEFAULT NULL,
  `itemValidate` tinyint(1) DEFAULT NULL,
  `specieauID` int DEFAULT NULL,
  `specsolID` int DEFAULT NULL,
  `userId` int DEFAULT NULL,
  `itemphoto` varchar(255) DEFAULT NULL,
  `itemNom` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`itemId`),
  KEY `specieauID` (`specieauID`),
  KEY `specsolID` (`specsolID`),
  KEY `userId` (`userId`),
  CONSTRAINT `item_ibfk_1` FOREIGN KEY (`specieauID`) REFERENCES `specieau` (`speciauID`),
  CONSTRAINT `item_ibfk_2` FOREIGN KEY (`specsolID`) REFERENCES `specsol` (`specsolID`),
  CONSTRAINT `item_ibfk_3` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item`
--

LOCK TABLES `item` WRITE;
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` VALUES (1,10,' Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima error perspiciatis quia numquam maxime. Quia, at facilis! Libero ipsam, provident magni praesentium laborum maiores accusantium!  Alias iusto optio omnis eveniet!',151,1,5,1,1,NULL,'monstera'),(2,1,' Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima error perspiciatis quia numquam maxime. Quia, at facilis! Libero ipsam, provident magni praesentium laborum maiores accusantium!  Alias iusto optio omnis eveniet!',45,1,4,2,1,NULL,'pommier'),(3,10,' Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima error perspiciatis quia numquam maxime. Quia, at facilis! Libero ipsam, provident magni praesentium laborum maiores accusantium!  Alias iusto optio omnis eveniet!',25,0,3,4,3,NULL,'oranger'),(4,11270,' Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima error perspiciatis quia numquam maxime. Quia, at facilis! Libero ipsam, provident magni praesentium laborum maiores accusantium!  Alias iusto optio omnis eveniet!',140,1,2,4,4,NULL,'pilea'),(6,110,' Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima error perspiciatis quia numquam maxime. Quia, at facilis! Libero ipsam, provident magni praesentium laborum maiores accusantium!  Alias iusto optio omnis eveniet!',12,1,3,2,2,NULL,'roquette'),(7,10,' Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima error perspiciatis quia numquam maxime. Quia, at facilis! Libero ipsam, provident magni praesentium laborum maiores accusantium!  Alias iusto optio omnis eveniet!',152,1,4,3,2,NULL,'tulipe'),(8,2820,' Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima error perspiciatis quia numquam maxime. Quia, at facilis! Libero ipsam, provident magni praesentium laborum maiores accusantium!  Alias iusto optio omnis eveniet!',0,1,3,3,2,NULL,'rose'),(10,999,' Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima error perspiciatis quia numquam maxime. Quia, at facilis! Libero ipsam, provident magni praesentium laborum maiores accusantium!  Alias iusto optio omnis eveniet!',1,1,4,4,1,NULL,'poirier');
/*!40000 ALTER TABLE `item` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-19 14:53:18
