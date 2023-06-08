-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: 10.10.51.252    Database: andras
-- ------------------------------------------------------
-- Server version	8.0.27

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
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item`
--

LOCK TABLES `item` WRITE;
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` VALUES (14,45,'Calathea est un genre de plantes monocotylédones appartenant à la famille des Marantaceae. Ce genre comprend aujourd\'hui 56 espèces de plantes herbacées.',71451,1,3,2,1,'https://media.s-bol.com/LJykG4NLxWNw/550x809.jpg','Calathea'),(15,7,'Les euphorbes, nom féminin, sont des plantes dicotylédones de la famille des Euphorbiacées. Elles possèdent des inflorescences particulières nommées cyathes, particularité que les euphorbes partagent seulement avec quelques genres voisins.',45452,1,2,2,1,'https://www.mesarbustes.fr/450076-large_default/euphorbia-characias-euphorbe-des-garrigues.jpg','Euphorbe'),(17,50,'Strelitzia nicolai est un oiseau de paradis aux fleurs noires et blanchâtres de la famille des Strelitziaceae originaire d\'Afrique du Sud.',7554,1,3,2,1,'https://cdn.webshopapp.com/shops/271987/files/416496898/strelitzia-nicolai-l.jpg','Strelitzia'),(19,30,'Anthurium clarinervium, connu sous le nom d\'anthurium en carton de velours, est une espèce de plante à fleurs de la famille des Araceae, originaire du Chiapas, au Mexique.',71451,1,2,3,1,'https://cdn.webshopapp.com/shops/271987/files/389230744/anthurium-clarinervium-s.jpg','anthurium'),(20,30,'Très en vogue ces dernières années, le Monstera deliciosa est une plante qui a beaucoup de style. Grâce à ses grandes feuilles, elle habille n’importe quelle pièce de la maison, tant qu’elle est lumineuse',4110,1,2,3,1,'https://frenchyfancy.com/wp-content/uploads/2021/06/plante-verte-interieur-Monstera-deliciosa-bergamotte-1024x1024.jpeg','Monstera'),(21,40,'Avec ses feuilles imposantes, le Ficus lyrata est une belle et grande plante d’intérieur. Il faudra lui réserver une place lumineuse ou légèrement ombragée, sans les rayons directs du soleil et à l’abris des courants d’air.',74551,1,4,3,1,'https://frenchyfancy.com/wp-content/uploads/2021/06/plante-verte-Ficus-lyrata-bergamotte-1024x1024.jpeg','Lyrata'),(22,20,'Également star des internets, le Pilea peperomioides est une petite plante qui surprend de par la forme de ses feuilles. En effet, celles-ci sont bien rondes, comme des médaillons.',416,1,2,3,1,'https://frenchyfancy.com/wp-content/uploads/2021/06/plante-verte-appartement-Pilea-peperomioides-bergamotte.jpg','Pilea'),(23,15,'L\'Aloe vera est une espèce d\'aloès d\'origine incertaine mais cultivée de longue date en région méditerranéenne, Afrique du Nord, aux îles Canaries et au Cap-Vert.',6057,1,1,2,1,'https://images.truffaut.com/media/catalog/productcdn:///Articles/jpg/0326000/326095_009.jpg?width=700&height=700&store=fr&image-type=image','Aloe vera'),(24,20,'Orpin rose Brillant - Sedum spectabile est un produit de jardin spécialement sélectionné de notre gamme de . Orpin rose Brillant',3604,1,2,3,1,'https://media.gerbeaud.net/2021/01/640/sedum-morganianum.jpg','Orpin'),(25,5,'Sansevieria trifasciata est une espèce subtropicale de plantes succulentes. Elle est familièrement appelée langue de belle-mère ou couteau.',1219,1,2,3,1,'https://images.kkeu.de/is/image/BEG/%C3%89quipement_de_bureau/Plantes_artificielles_de_bureau/Sansevi%C3%A8re_pdplarge-mrd--570260_AAS_00_00_00_7920754.jpg','Sansevière'),(26,35,'Cette plante se distingue par ses épaisses feuilles vertes recouvertes de poils argentés. Comme la plupart des plantes succulentes, elle ne devrait être arrosée que lorsque le sol est sec,',9976,1,2,3,1,'https://www.cillawnandgarden.com/sites/cil/files/Article/Article-March/10%20most%20beautiful%20cacti%20and%20succulents/cil-lawn-garden-panda-plant.jpg','Bryophyllum '),(27,45,'Cette plante unique est munie d\'un tronc ayant l\'aspect du cuir, de feuilles vertes rappelant des plumes, et d\'un bulbe agissant comme réservoir d\'eau. Le nolina ne demande que peu de soins et bien qu\'il préfère un niveau élevé de lumière et d\'humidité,',8578,1,2,4,1,'https://www.cillawnandgarden.com/sites/cil/files/Article/Article-March/10%20most%20beautiful%20cacti%20and%20succulents/cil-lawn-garden-ponytail-plant.jpg','Nolina'),(28,16,'Les pommiers sont des arbres du genre botanique Malus et de la famille des Rosacées, dont le fruit est la pomme.',4753,1,2,3,1,'https://conseils-jardin.willemsefrance.fr/wp-content/uploads/2021/07/pommier-dirige.jpg','Pommier'),(29,0,'Elle sert a rien donc cadeau',1,1,1,1,1,'https://cdn.shopify.com/s/files/1/0046/2779/1960/files/sakura_haruno.jpg?v=1584885057','Sakura'),(30,700,'Le roi de la foret des biscuit',1,1,1,1,1,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwzW-GP-1LNy8EWWuCqiCD02U_JvVnv3pFK01ixDVUsYKQ8uWfqIiFK8_ynsa5YMTVXpM&usqp=CAU','KG baum'),(31,33496239,'Le fruit permetant de faire l\'opération de jouvance',1,1,1,1,1,'https://pm1.narvii.com/6561/e59ef3f39d62ee0a9b701f4b9bc1186bd8e07c40_00.jpg','Ope nomi'),(32,100,'Un champignon qui vous fait grandir de un mètre',31782,1,1,1,2,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3aryr36DwCwjTisGNhEYvcFhcoFzgmpi-rPePt-jataOelWEX1AOJR1Cba-XsTDRc_KI&usqp=CAU','Champix'),(33,15,'Une plante vivace, ou plante pérenne, est une plante pouvant vivre plusieurs années. Elle subsiste l\'hiver sous forme d\'organes spécialisés souterrains protégés du froid et chargés en réserve.',48481,1,3,2,2,'https://www.lovethegarden.com/sites/default/files/styles/og_image/public/content/articles/UK_advice-gardening-flowers-shrubs-growing-herbaceous-perennials_main_1.jpg?itok=7noOSc4Q','Vivalia'),(34,35,'Un joli cactus',77454,1,1,5,2,'https://static.fnac-static.com/multimedia/Images/D2/D2/B1/FC/16560594-1505-1540-1/tsp20210311000151/Peluche-dansante-et-chantante-Cactus-vert-35cm-multicolore.jpg','Cacthy'),(35,1500,'Attention elle mord',200,1,1,1,2,'https://i.etsystatic.com/10479794/r/il/3d9f7d/4361568375/il_570xN.4361568375_2q1u.jpg','deku baba'),(36,89,'Joli fleur',89,1,3,2,6,'https://www.donaliflor.be/wp-content/uploads/2021/05/ORCHIDEE-BLANCHE-PHALAENOPSIS-2-TIGES-AVEC-CACHE-POT.png','Orchidée '),(37,2,'bleu',89000,1,2,1,6,'https://t3t8k6v8.rocketcdn.me/wp-content/uploads/2018/08/ipom%C3%A9e.jpg','Capucine Bleu'),(38,10,'gfhnbdesnhnhdtgndggsbhndfbg',3200000,1,2,2,6,'https://media.gerbeaud.net/2015/10/640/diaporama-tulipe-rose-double.jpg','Tulipe'),(39,1,'persil très délicieuse',890,1,1,1,6,'https://shop.majardinerie.com/botans/1207-large_default/persil-frise.jpg','Persil'),(40,1518,'aaaa fegteghrfeghrfe',1,1,5,5,6,'https://image.jeuxvideo.com/medias-sm/161253/1612533537-282-artwork.jpg','Rosalia'),(42,15,'aaref',10,1,1,1,10,'https://www.simplilearn.com/ice9/free_resources_article_thumb/what_is_image_Processing.jpg','<h1>ahahaha</h1>');
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

-- Dump completed on 2023-06-08 14:48:32
