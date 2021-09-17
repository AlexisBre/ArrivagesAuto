-- MySQL dump 10.13  Distrib 8.0.22, for macos10.15 (x86_64)
--
-- Host: localhost    Database: autobonplan
-- ------------------------------------------------------
-- Server version	8.0.26

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
-- Table structure for table `arrivage`
--

DROP TABLE IF EXISTS `arrivage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `arrivage` (
  `id` int NOT NULL AUTO_INCREMENT,
  `VIN` varchar(255) DEFAULT NULL,
  `Marque` varchar(255) DEFAULT NULL,
  `Modele` varchar(255) DEFAULT NULL,
  `Energie` varchar(255) DEFAULT NULL,
  `DateArrivee` date DEFAULT NULL,
  `Fournisseur` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `arrivage`
--

LOCK TABLES `arrivage` WRITE;
/*!40000 ALTER TABLE `arrivage` DISABLE KEYS */;
INSERT INTO `arrivage` VALUES (1,'CDE_22976 / 00004','FIAT ','500 SERIE 8 EURO 6D-TEMP','Essence sans plomb','2021-11-26','STARTERRE'),(2,'UU1DJF00766098210','DACIA','SANDERO','Essence ou gaz','2021-11-08','Glinche Automobile'),(3,'VF1HJD40660966331','DACIA','DUSTER','Diesel','2021-10-15','RUIS VIRGINIE'),(4,'VF73DAHXMHJ752062','CITROEN','C4 PICASSO','Diesel','2021-12-17','SARL LOCOTO'),(5,'VF7KFRHC8DS508761','CITROEN','DS5','Diesel / Courant électrique','2021-08-27','MIGNET JULIEN'),(6,'VF7KFRHH8CS525749','CITROEN','DS5','Diesel','2021-08-30','LAUDRIN THIERRY'),(7,'VR1JCYHZUMY515464','DS','DS7 CROSSBACK','Diesel','2021-08-27','STARTERRE'),(8,'VR1URHNKKKW090669','DS','DS3 CROSSBACK','Essence sans plomb','2021-08-25','SAGA BOULOGNE'),(9,'WAUZZZ8V6LA064248','AUDI','A3 SPORTBACK','Diesel','2021-08-16','Aero Autofactoria'),(10,'WAUZZZ8X7JB100005','AUDI','A1 SPORTBACK','Diesel','2021-08-25','SAGA LENS'),(11,'WAUZZZGAXKA080983','AUDI','Q2','Diesel','2022-01-11','AUTOBONPLAN'),(12,'WAUZZZGY0MA013146','AUDI','A3 SPORTBACK','Diesel','2021-08-19','Aero Autofactoria'),(13,'WBA31DZ000FK99083','BMW','SERIE 3 G20','Diesel','2021-08-19',NULL),(14,'WBA35BG000N077175','BMW','X3 G01','Diesel','2021-08-19','Aero Autofactoria'),(15,'WBA35BG030N077638','BMW','X3 G01','Diesel','2021-08-19','Aero Autofactoria'),(16,'WBA4M910609F65258','BMW','X4 G02','Diesel','2021-08-19','Aero Autofactoria'),(17,'WBA4M910909F65304','BMW','X4 G02','Diesel','2021-08-19','Aero Autofactoria'),(18,'WBA6W910205R76079','BMW','SERIE 2 GRAN TOURER F46 LCI','Diesel','2021-08-19','AERO - AQ ATLANTIQ'),(19,'WBAHF11020WX19606','BMW','Z4 G29','Essence sans plomb','2021-08-19','Aero Autofactoria'),(20,'WBAJH510503G23945','BMW','X1 F48','Diesel','2021-09-01','VP Auto'),(21,'WVWZZZAWZKY093354','FIAT ','500 SERIE 6','Essence sans plomb','2021-11-07',NULL),(22,'ZARPAHBX8K7C24446','ALFA ROMEO','STELVIO','Diesel','2022-01-04','LOCOTO'),(23,'ZFA19900001157567','FIAT','GRANDE PUNTO','Diesel','2021-08-26','BERNARD AUDREY'),(24,'ZFA35600006L91931','FIAT','TIPO STATION WAGON MY19 E6D','Diesel','2021-09-01','VP Auto');
/*!40000 ALTER TABLE `arrivage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `unique_id` int DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `img` varchar(400) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `admin` tinyint DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (10,1411327256,'Alexis','Breuil','breuil.ale@gmail.com','9dd2905aea7500457f66f495b6678e64','IMG.jpg','Active now',1),(11,1501709848,'test','test','test.test@test.com','098f6bcd4621d373cade4e832627b4f6','user--v1.png','Offline now',NULL),(12,1487569568,'admin','admin','admin@admin.com','21232f297a57a5a743894a0e4a801fc3','user--v1.png','Active now',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'autobonplan'
--

--
-- Dumping routines for database 'autobonplan'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-09-17 12:41:30
