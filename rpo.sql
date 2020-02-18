-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: localhost    Database: rpo
-- ------------------------------------------------------
-- Server version	8.0.18

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
-- Table structure for table `cases`
--

DROP TABLE IF EXISTS `cases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `people_id` varchar(30) NOT NULL,
  `severity` varchar(30) NOT NULL,
  `notes` varchar(200) NOT NULL,
  `case_num` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cases`
--

LOCK TABLES `cases` WRITE;
/*!40000 ALTER TABLE `cases` DISABLE KEYS */;
/*!40000 ALTER TABLE `cases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `people`
--

DROP TABLE IF EXISTS `people`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `people` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `people_id` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(9) NOT NULL,
  `joined` varchar(30) NOT NULL,
  `tmp` varchar(30) NOT NULL,
  `dni` int(8) NOT NULL,
  `edad` int(3) NOT NULL,
  `cursos` varchar(50) NOT NULL,
  `pais` varchar(12) NOT NULL,
  `ciudad` varchar(15) NOT NULL,
  `id_tipo` int(11) DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `people`
--

LOCK TABLES `people` WRITE;
/*!40000 ALTER TABLE `people` DISABLE KEYS */;
INSERT INTO `people` VALUES (1,'8682146','mario','martinez','5496969696','mario@gmail.com','M',' 06 Feb 2020 ','4997',23456789,12,'Cuidadania y realidad Nacional','Peru','Arequipa',NULL,2020),(2,'9262079','Carlos','Castillo','5412345678','carlos@gmail.com','M',' 06 Feb 2020 ','6882',12345678,25,'Gestiojn de Procesos de Negocio','Peru','Arequipa',NULL,2020),(3,'3739446','Carlos','jimenez','5469696969','carlos1@gmail.com','M',' 07 Feb 2020 ','5459',12345678,34,'Cuidadania y realidad Nacional','Peru','Arequipa',NULL,2020),(4,'6407816','luis','medina','54123456479','luis1@gmail.com','M',' 07 Feb 2020 ','637',47092136,20,'Cuidadania y realidad Nacional','Peru','Arequipa',NULL,2020);
/*!40000 ALTER TABLE `people` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `picture`
--

DROP TABLE IF EXISTS `picture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `picture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tmp` varchar(90) NOT NULL,
  `name` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `picture`
--

LOCK TABLES `picture` WRITE;
/*!40000 ALTER TABLE `picture` DISABLE KEYS */;
INSERT INTO `picture` VALUES (17,'544','user544.jpg'),(18,'4982','user4982.jpg'),(19,'1439','user1439.jpg'),(20,'4509','user4509.png'),(21,'47','user47.png'),(22,'6171','user6171.png'),(23,'7591','user7591.jpg'),(24,'4997','user4997.jpg'),(25,'6882','user6882.jpg'),(26,'5459','user5459.jpg'),(27,'637','user637.jpg');
/*!40000 ALTER TABLE `picture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ubicacion`
--

DROP TABLE IF EXISTS `ubicacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ubicacion` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `type` varchar(20) NOT NULL,
  `lat` float(10,6) DEFAULT NULL,
  `lng` float(10,6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ubicacion`
--

LOCK TABLES `ubicacion` WRITE;
/*!40000 ALTER TABLE `ubicacion` DISABLE KEYS */;
INSERT INTO `ubicacion` VALUES (1,'Psicoune Arequipa - Yanahuara - 204','Yanahuara, Yanayahura, psicoune, yanahuara','ubicacion',-16.391394,-71.545738),(2,'Psicoune Tacna - Pje. Vigil 178 ','tacna, tacna, psicoune, tacna','ubicacion',-18.011364,-70.248444),(3,'Psicoune Juliaca - Jr. Jorge Chávez N° 277 ','juliaca, juliaca, psicoune, juliaca','ubicacion',-15.495717,-70.135429),(4,'Psicoune Huancayo - Psj. Santa Rosa 276',' Huancayo,  Huancayo, psicoune, Huancayo','ubicacion',-12.053631,-75.201675);
/*!40000 ALTER TABLE `ubicacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usersrpo`
--

DROP TABLE IF EXISTS `usersrpo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usersrpo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `password` varchar(130) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(80) DEFAULT NULL,
  `last_session` datetime DEFAULT NULL,
  `activacion` int(11) NOT NULL DEFAULT '0',
  `token` varchar(40) NOT NULL,
  `token_password` varchar(100) DEFAULT NULL,
  `password_request` int(11) DEFAULT '0',
  `joined` varchar(30) DEFAULT NULL,
  `gender` varchar(9) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `permission` varchar(10) NOT NULL,
  `year` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usersrpo`
--

LOCK TABLES `usersrpo` WRITE;
/*!40000 ALTER TABLE `usersrpo` DISABLE KEYS */;
INSERT INTO `usersrpo` VALUES (2,'Brian Enrique','Marquez Inca Roca','briandb','briandb','brian3marquez@gmail.com',NULL,1,'9435e651045639458fa7f2d4df004fa5',NULL,0,' 07 Feb 2020 ',NULL,NULL,'user','1',2020),(3,'maria','isabel','mariadb','mariadb','fanolaf924@mailmink.com',NULL,1,'5abde0375a691c63ee864a16fd2711d8',NULL,0,' 16 Feb 2020 ',NULL,NULL,'user','3',2020);
/*!40000 ALTER TABLE `usersrpo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-16 22:14:38
