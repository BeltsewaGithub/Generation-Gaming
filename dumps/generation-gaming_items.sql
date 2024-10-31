-- MySQL dump 10.13  Distrib 8.0.40, for Win64 (x86_64)
--
-- Host: localhost    Database: generation-gaming
-- ------------------------------------------------------
-- Server version	8.0.40

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
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `items` (
  `idItems` int NOT NULL AUTO_INCREMENT,
  `ItemName` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'тинка\n??',
  `ItemPrice` double DEFAULT '0',
  `ItemCategory` enum('CS2','DOTA2','CS1.6','GTA','Other games','Social network','Other') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ItemDescription` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'Нет описания',
  `ItemSellerNickname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'Продавец скрыт',
  `ItemPicture` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'source/default.jpg',
  `ItemLabelText` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '-',
  PRIMARY KEY (`idItems`),
  UNIQUE KEY `idItems_UNIQUE` (`idItems`)
) ENGINE=InnoDB AUTO_INCREMENT=138 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (1,'Аккаунт CS2',2000,'CS2','Описание','Ник продавца','Upload/cs2prime.jpg','Prime'),(2,'Аккаунт CS2',554,'CS2','Описание','Ник продавца','Upload/cs2prime.jpg','10 ранг'),(3,'Аккаунт CS2',545,'CS2','Описание','Ник продавца','Upload/cs2prime.jpg','Нулевой аккаунт'),(4,'Аккаунт DOTA2',1000,'DOTA2','Описание','Ник продавца','Upload/DOTA2Acc.jpeg','-'),(5,'Аккаунт DOTA2',1000,'DOTA2','Описание','Ник продавца','Upload/DOTA2Acc.jpeg','-'),(6,'Аккаунт GTA V',500,'GTA','Описание','Ник продавца','Upload/gta.webp','V license'),(136,'Аккаунт CS2',5,'CS2','Нет описания','Продавец скрыт','./Upload/67210b81c0f0d.jpg','10 ранг'),(137,'Аккаунт CS2',500,'CS2','Нет описания','Продавец скрыт','source/default.jpg','-');
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-29 19:58:55
