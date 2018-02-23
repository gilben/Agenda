-- MySQL dump 10.16  Distrib 10.1.30-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: agenda
-- ------------------------------------------------------
-- Server version	10.1.30-MariaDB

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
-- Table structure for table `agenda_eventos`
--

CREATE DATABASE `agenda` /*!40100 DEFAULT CHARACTER SET latin1 */;

DROP TABLE IF EXISTS `agenda_eventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agenda_eventos` (
  `id_evento` int(11) NOT NULL AUTO_INCREMENT,
  `Id_usuario` tinyint(4) NOT NULL,
  `Titulo` varchar(50) NOT NULL,
  `Fecha_inicio` date NOT NULL,
  `Hora_inicio` time DEFAULT NULL,
  `Fecha_fin` date DEFAULT NULL,
  `Hora_fin` time DEFAULT NULL,
  `Dia_completo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_evento`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agenda_eventos`
--

LOCK TABLES `agenda_eventos` WRITE;
/*!40000 ALTER TABLE `agenda_eventos` DISABLE KEYS */;
INSERT INTO `agenda_eventos` VALUES (18,2,'sdf','2017-12-31','07:00:00','0000-00-00','00:00:00',0),(19,2,'sdf','0000-00-00','00:00:01','0000-00-00','00:00:01',0),(22,2,'nidia','2018-01-10','00:00:00','0000-00-00','00:00:00',1),(23,1,'sdfs','2018-01-09','00:00:00','0000-00-00','00:00:00',1),(24,2,'sfsdf','2018-01-01','05:00:00','2018-01-01','07:00:00',0);
/*!40000 ALTER TABLE `agenda_eventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `agenda_usuarios`
--

DROP TABLE IF EXISTS `agenda_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agenda_usuarios` (
  `Usuario` varchar(50) NOT NULL,
  `Id_Usuario` tinyint(4) NOT NULL AUTO_INCREMENT,
  `Contrasena` varchar(500) NOT NULL,
  `Nombre_completo` varchar(30) NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  PRIMARY KEY (`Usuario`),
  UNIQUE KEY `Id_Usuario_UNIQUE` (`Id_Usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agenda_usuarios`
--

LOCK TABLES `agenda_usuarios` WRITE;
/*!40000 ALTER TABLE `agenda_usuarios` DISABLE KEYS */;
INSERT INTO `agenda_usuarios` VALUES ('ant@live.com',4,'EexC/00WPds6lXIJcNu9APzhG9h3hvvlLcvIldnjUzc=','oscar Castro','1984-12-06'),('gil@live.com',2,'EexC/00WPds6lXIJcNu9APzhG9h3hvvlLcvIldnjUzc=','oscar Castro','1984-12-06'),('gilber@live.com',1,'EexC/00WPds6lXIJcNu9APzhG9h3hvvlLcvIldnjUzc=','oscar Castro','1984-12-06');
/*!40000 ALTER TABLE `agenda_usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-12 20:37:01
