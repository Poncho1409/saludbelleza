-- MySQL dump 10.13  Distrib 8.0.15, for Win64 (x86_64)
--
-- Host: localhost    Database: smbb
-- ------------------------------------------------------
-- Server version	8.0.15

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alimentacion`
--

DROP TABLE IF EXISTS `alimentacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `alimentacion` (
  `id_a` int(11) NOT NULL,
  `modovida` int(11) NOT NULL,
  `actfisica` int(11) NOT NULL,
  `fuma` int(11) NOT NULL,
  `bebidas_alc` int(11) NOT NULL,
  `calidad_sueno` int(11) NOT NULL,
  `drogas_consumo` int(11) NOT NULL,
  PRIMARY KEY (`id_a`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alimentacion`
--

LOCK TABLES `alimentacion` WRITE;
/*!40000 ALTER TABLE `alimentacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `alimentacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bitacora`
--

DROP TABLE IF EXISTS `bitacora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `bitacora` (
  `id_bitacora` int(11) NOT NULL,
  `creador` varchar(40) NOT NULL,
  `modificacion` varchar(30) NOT NULL,
  `cantidad_productos` int(11) NOT NULL,
  `id_p` int(11) NOT NULL,
  PRIMARY KEY (`id_bitacora`),
  KEY `id_p` (`id_p`),
  CONSTRAINT `bitacora_ibfk_1` FOREIGN KEY (`id_p`) REFERENCES `producto` (`id_producto`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bitacora`
--

LOCK TABLES `bitacora` WRITE;
/*!40000 ALTER TABLE `bitacora` DISABLE KEYS */;
/*!40000 ALTER TABLE `bitacora` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cita`
--

DROP TABLE IF EXISTS `cita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `cita` (
  `id_cita` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `total` int(11) NOT NULL,
  `id_c` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `id_d` int(11) NOT NULL,
  PRIMARY KEY (`id_cita`),
  KEY `id_c` (`id_c`),
  KEY `id_tipo` (`id_tipo`),
  KEY `id_d` (`id_d`),
  CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`id_c`) REFERENCES `cliente` (`id_c`),
  CONSTRAINT `cita_ibfk_2` FOREIGN KEY (`id_tipo`) REFERENCES `tipo` (`id_tipo`),
  CONSTRAINT `cita_ibfk_3` FOREIGN KEY (`id_d`) REFERENCES `doctor` (`id_d`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cita`
--

LOCK TABLES `cita` WRITE;
/*!40000 ALTER TABLE `cita` DISABLE KEYS */;
/*!40000 ALTER TABLE `cita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `cliente` (
  `id_c` int(11) NOT NULL,
  `tel` int(15) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `doctor` (
  `id_d` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `id_p` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_d`),
  KEY `id_p` (`id_p`),
  CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`id_p`) REFERENCES `producto` (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctor`
--

LOCK TABLES `doctor` WRITE;
/*!40000 ALTER TABLE `doctor` DISABLE KEYS */;
/*!40000 ALTER TABLE `doctor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historialclinico`
--

DROP TABLE IF EXISTS `historialclinico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `historialclinico` (
  `id_h` int(11) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `peso` int(3) NOT NULL,
  `estatura` int(3) NOT NULL,
  `id_c` int(11) NOT NULL,
  `id_a` int(11) NOT NULL,
  PRIMARY KEY (`id_h`),
  KEY `id_c` (`id_c`),
  KEY `id_a` (`id_a`),
  CONSTRAINT `historialclinico_ibfk_1` FOREIGN KEY (`id_c`) REFERENCES `cliente` (`id_c`) ON DELETE CASCADE,
  CONSTRAINT `historialclinico_ibfk_2` FOREIGN KEY (`id_a`) REFERENCES `alimentacion` (`id_a`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historialclinico`
--

LOCK TABLES `historialclinico` WRITE;
/*!40000 ALTER TABLE `historialclinico` DISABLE KEYS */;
/*!40000 ALTER TABLE `historialclinico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `padecimiento`
--

DROP TABLE IF EXISTS `padecimiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `padecimiento` (
  `id_padecimiento` int(11) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  PRIMARY KEY (`id_padecimiento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `padecimiento`
--

LOCK TABLES `padecimiento` WRITE;
/*!40000 ALTER TABLE `padecimiento` DISABLE KEYS */;
/*!40000 ALTER TABLE `padecimiento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `padecimiento_historial`
--

DROP TABLE IF EXISTS `padecimiento_historial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `padecimiento_historial` (
  `id_padecimiento` int(11) NOT NULL,
  `id_h` int(11) NOT NULL,
  KEY `id_h` (`id_h`),
  KEY `id_padecimiento` (`id_padecimiento`),
  CONSTRAINT `padecimiento_historial_ibfk_1` FOREIGN KEY (`id_h`) REFERENCES `historialclinico` (`id_h`),
  CONSTRAINT `padecimiento_historial_ibfk_2` FOREIGN KEY (`id_padecimiento`) REFERENCES `padecimiento` (`id_padecimiento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `padecimiento_historial`
--

LOCK TABLES `padecimiento_historial` WRITE;
/*!40000 ALTER TABLE `padecimiento_historial` DISABLE KEYS */;
/*!40000 ALTER TABLE `padecimiento_historial` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido`
--

DROP TABLE IF EXISTS `pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `fecha` date NOT NULL,
  `id_c` int(11) NOT NULL,
  `id_p` int(11) NOT NULL,
  `id_b` int(11) NOT NULL,
  PRIMARY KEY (`id_pedido`),
  KEY `id_c` (`id_c`),
  KEY `id_p` (`id_p`),
  KEY `id_b` (`id_b`),
  CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_c`) REFERENCES `cliente` (`id_c`) ON DELETE CASCADE,
  CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`id_p`) REFERENCES `producto` (`id_producto`) ON DELETE CASCADE,
  CONSTRAINT `pedido_ibfk_3` FOREIGN KEY (`id_b`) REFERENCES `bitacora` (`id_bitacora`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido`
--

LOCK TABLES `pedido` WRITE;
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `costo` int(11) NOT NULL,
  `id_d` int(11) NOT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `id_d` (`id_d`),
  CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_d`) REFERENCES `doctor` (`id_d`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo`
--

DROP TABLE IF EXISTS `tipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tipo` (
  `id_tipo` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `costo` int(11) NOT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo`
--

LOCK TABLES `tipo` WRITE;
/*!40000 ALTER TABLE `tipo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-22 19:30:48
