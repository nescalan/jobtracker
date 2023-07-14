-- MySQL dump 10.13  Distrib 8.0.33, for Linux (x86_64)
--
-- Host: localhost    Database: axioma
-- ------------------------------------------------------
-- Server version	8.0.33-0ubuntu0.20.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `condominos`
--

DROP TABLE IF EXISTS `condominos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `condominos` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `cedula` int unsigned NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `estado` enum('activo','inactivo') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `condominos`
--

LOCK TABLES `condominos` WRITE;
/*!40000 ALTER TABLE `condominos` DISABLE KEYS */;
INSERT INTO `condominos` VALUES (1,1000000001,'Juan Pérez','1234567890','activo'),(2,1000000002,'María López','9876543210','activo'),(3,1000000003,'Pedro González','0987654321','activo'),(4,1000000004,'Sofía Hernández','8765432109','activo'),(5,1000000005,'Carlos Ramírez','7654321098','activo'),(6,1000000006,'Laura Díaz','6543210987','activo'),(7,1000000007,'David Castillo','5432109876','activo'),(8,1000000008,'Carolina Gutiérrez','4321098765','activo'),(9,1000000009,'Andrés Gómez','3210987654','activo'),(10,1000000010,'Daniela Martínez','2109876543','activo'),(11,1000000011,'Esteban Suárez','1098765432','activo'),(12,1000000012,'Jennifer Rodríguez','9876543210','activo'),(13,1000000013,'Kevin Sánchez','8765432109','activo'),(14,1000000014,'Luisa Castro','7654321098','activo'),(15,1000000015,'Jorge Hernández','6543210987','activo'),(16,1000000016,'Anahí Díaz','5432109876','activo'),(17,1000000017,'Miguel Castillo','4321098765','activo'),(18,1000000018,'Paula Gutiérrez','3210987654','activo'),(19,1000000019,'Juan Pablo Gómez','2109876543','activo'),(20,1000000020,'Camila Martínez','1098765432','activo');
/*!40000 ALTER TABLE `condominos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invitados`
--

DROP TABLE IF EXISTS `invitados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `invitados` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `cedula` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `acceso` enum('conceder','denegar') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invitados`
--

LOCK TABLES `invitados` WRITE;
/*!40000 ALTER TABLE `invitados` DISABLE KEYS */;
INSERT INTO `invitados` VALUES (1,'1234567890','John Doe','1234567890','conceder'),(2,'9876543210','Jane Smith','9876543210','denegar'),(3,'4567890123','Alice Johnson','4567890123','conceder'),(4,'0123456789','Bob Williams','0123456789','conceder'),(5,'9870123456','Emily Davis','9870123456','denegar'),(6,'6543210987','Michael Brown','6543210987','conceder'),(7,'2109876543','Sarah Taylor','2109876543','conceder'),(8,'7890123456','David Wilson','7890123456','denegar'),(9,'5432109876','Jessica Anderson','5432109876','conceder'),(10,'8765432109','Christopher Thomas','8765432109','denegar'),(11,'4321098765','Laura Martinez','4321098765','conceder'),(12,'2109876543','Daniel Robinson','2109876543','conceder'),(13,'9876543210','Sophia Walker','9876543210','conceder'),(14,'5432109876','Matthew White','5432109876','denegar'),(15,'0123456789','Olivia Clark','0123456789','conceder'),(16,'6789012345','Andrew Hall','6789012345','conceder'),(17,'5432167890','Ava Lewis','5432167890','denegar'),(18,'0987654321','James Young','0987654321','conceder'),(19,'6543210987','Emma Turner','6543210987','conceder'),(20,'8901234567','Benjamin King','8901234567','denegar');
/*!40000 ALTER TABLE `invitados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reportes`
--

DROP TABLE IF EXISTS `reportes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reportes` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `fecha_reporte` date NOT NULL,
  `invitado_id` int unsigned NOT NULL,
  `vivienda_id` int unsigned NOT NULL,
  `visita_id` int unsigned NOT NULL,
  `condomino_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_invitado_id_reportes` (`invitado_id`),
  KEY `fk_vivienda_id_reportes` (`vivienda_id`),
  KEY `fk_visita_id_reportes` (`visita_id`),
  KEY `fk_condomino_id_reportes` (`condomino_id`),
  CONSTRAINT `fk_condomino_id_reportes` FOREIGN KEY (`condomino_id`) REFERENCES `condominos` (`id`),
  CONSTRAINT `fk_invitado_id_reportes` FOREIGN KEY (`invitado_id`) REFERENCES `invitados` (`id`),
  CONSTRAINT `fk_visita_id_reportes` FOREIGN KEY (`visita_id`) REFERENCES `visitas` (`id`),
  CONSTRAINT `fk_vivienda_id_reportes` FOREIGN KEY (`vivienda_id`) REFERENCES `viviendas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reportes`
--

LOCK TABLES `reportes` WRITE;
/*!40000 ALTER TABLE `reportes` DISABLE KEYS */;
INSERT INTO `reportes` VALUES (1,'2023-05-01',1,1,1,1),(2,'2023-05-02',2,1,2,2),(3,'2023-05-03',3,1,3,3),(4,'2023-05-04',4,2,4,4),(5,'2023-05-05',5,2,5,5),(6,'2023-05-06',6,2,6,6),(7,'2023-05-07',7,3,7,7),(8,'2023-05-08',8,3,8,8),(9,'2023-05-09',9,3,9,9),(10,'2023-05-10',10,4,10,10),(11,'2023-05-11',11,4,11,11),(12,'2023-05-12',12,4,12,12),(13,'2023-05-13',13,5,13,13),(14,'2023-05-14',14,5,14,14),(15,'2023-05-15',15,5,15,15),(16,'2023-05-16',16,6,16,16),(17,'2023-05-17',17,6,17,17),(18,'2023-05-18',18,6,18,18),(19,'2023-05-19',19,7,19,19),(20,'2023-05-20',20,7,20,20);
/*!40000 ALTER TABLE `reportes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visitas`
--

DROP TABLE IF EXISTS `visitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `visitas` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `fecha_ingreso` date NOT NULL,
  `hora_ingreso` time DEFAULT NULL,
  `fecha_salida` date NOT NULL,
  `hora_salida` time DEFAULT NULL,
  `tipo_visita` varchar(60) NOT NULL,
  `placa_vehiculo` varchar(7) NOT NULL,
  `numero_acompanantes` int unsigned NOT NULL,
  `invitado_id` int unsigned NOT NULL,
  `vivienda_id` int unsigned NOT NULL,
  `observaciones` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_invitado_id` (`invitado_id`),
  KEY `fk_vivienda_id` (`vivienda_id`),
  CONSTRAINT `fk_invitado_id` FOREIGN KEY (`invitado_id`) REFERENCES `invitados` (`id`),
  CONSTRAINT `fk_vivienda_id` FOREIGN KEY (`vivienda_id`) REFERENCES `viviendas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visitas`
--

LOCK TABLES `visitas` WRITE;
/*!40000 ALTER TABLE `visitas` DISABLE KEYS */;
INSERT INTO `visitas` VALUES (1,'2023-05-01','09:00:00','2023-05-01','12:00:00','Visita 1','ABC123',2,1,1,'Observaciones 1'),(2,'2023-05-01','10:00:00','2023-05-01','13:00:00','Visita 2','DEF456',3,2,1,'Observaciones 2'),(3,'2023-05-01','11:00:00','2023-05-03','14:00:00','Visita 3','GHI789',4,3,1,'Observaciones 3'),(4,'2023-05-04','12:00:00','2023-05-04','15:00:00','Visita 4','JKL012',5,4,2,'Observaciones 4'),(5,'2023-05-05','13:00:00','2023-05-05','16:00:00','Visita 5','MNO345',6,5,2,'Observaciones 5'),(6,'2023-05-06','14:00:00','2023-05-06','17:00:00','Visita 6','PQR678',7,6,2,'Observaciones 6'),(7,'2023-05-07','15:00:00','2023-05-07','18:00:00','Visita 7','STU901',8,7,3,'Observaciones 7'),(8,'2023-05-08','16:00:00','2023-05-08','19:00:00','Visita 8','VWX234',9,8,3,'Observaciones 8'),(9,'2023-05-09','17:00:00','2023-05-09','20:00:00','Visita 9','YZA567',10,9,3,'Observaciones 9'),(10,'2023-05-10','18:00:00','2023-05-10','21:00:00','Visita 10','BCD890',11,10,4,'Observaciones 10'),(11,'2023-05-11','19:00:00','2023-05-11','22:00:00','Visita 11','EFG123',12,11,4,'Observaciones 11'),(12,'2023-05-12','20:00:00','2023-05-12','23:00:00','Visita 12','HIJ456',13,12,4,'Observaciones 12'),(13,'2023-05-13','21:00:00','2023-05-13','00:00:00','Visita 13','KLM789',14,13,5,'Observaciones 13'),(14,'2023-05-14','22:00:00','2023-05-14','01:00:00','Visita 14','NOP012',15,14,5,'Observaciones 14'),(15,'2023-05-15','23:00:00','2023-05-15','02:00:00','Visita 15','QRS345',16,15,5,'Observaciones 15'),(16,'2023-05-16','00:00:00','2023-05-16','03:00:00','Visita 16','TUV678',17,16,6,'Observaciones 16'),(17,'2023-05-17','01:00:00','2023-05-17','04:00:00','Visita 17','WXY901',18,17,6,'Observaciones 17'),(18,'2023-05-18','02:00:00','2023-05-18','05:00:00','Visita 18','ZAB234',19,18,6,'Observaciones 18'),(19,'2023-05-19','03:00:00','2023-05-19','06:00:00','Visita 19','CDE567',20,19,7,'Observaciones 19'),(20,'2023-05-20','04:00:00','2023-05-20','07:00:00','Visita 20','FGH890',21,20,7,'Observaciones 20'),(21,'2023-05-02','12:00:00','2023-05-04','15:00:00','Visita 4','JKL012',5,2,2,'Observaciones 4'),(22,'2023-05-02','13:00:00','2023-05-05','16:00:00','Visita 5','MNO345',6,3,2,'Observaciones 5'),(23,'2023-05-02','14:00:00','2023-05-06','17:00:00','Visita 6','PQR678',7,4,2,'Observaciones 6'),(24,'2023-05-03','15:00:00','2023-05-07','18:00:00','Visita 7','STU901',8,5,3,'Observaciones 7'),(25,'2023-05-03','16:00:00','2023-05-08','19:00:00','Visita 8','VWX234',9,6,3,'Observaciones 8'),(26,'2023-05-03','17:00:00','2023-05-09','20:00:00','Visita 9','YZA567',10,7,3,'Observaciones 9'),(27,'2023-05-04','18:00:00','2023-05-10','21:00:00','Visita 10','BCD890',11,8,4,'Observaciones 10'),(28,'2023-05-04','19:00:00','2023-05-11','22:00:00','Visita 11','EFG123',12,9,4,'Observaciones 11'),(29,'2023-05-04','20:00:00','2023-05-12','23:00:00','Visita 12','HIJ456',13,10,4,'Observaciones 12'),(30,'2023-05-05','21:00:00','2023-05-13','00:00:00','Visita 13','KLM789',14,11,5,'Observaciones 13'),(31,'2023-05-05','22:00:00','2023-05-14','01:00:00','Visita 14','NOP012',15,12,5,'Observaciones 14'),(32,'2023-05-05','23:00:00','2023-05-15','02:00:00','Visita 15','QRS345',16,13,5,'Observaciones 15'),(33,'2023-05-06','00:00:00','2023-05-16','03:00:00','Visita 16','TUV678',17,14,6,'Observaciones 16'),(34,'2023-05-06','01:00:00','2023-05-17','04:00:00','Visita 17','WXY901',18,15,6,'Observaciones 17'),(35,'2023-05-06','02:00:00','2023-05-18','05:00:00','Visita 18','ZAB234',19,16,6,'Observaciones 18'),(36,'2023-05-07','03:00:00','2023-05-19','06:00:00','Visita 19','CDE567',20,17,7,'Observaciones 19'),(37,'2023-05-07','04:00:00','2023-05-20','07:00:00','Visita 20','FGH890',21,18,7,'Observaciones 20');
/*!40000 ALTER TABLE `visitas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `viviendas`
--

DROP TABLE IF EXISTS `viviendas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `viviendas` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `numero_casa` varchar(4) NOT NULL,
  `direccion` varchar(120) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `estado` enum('activo','inactivo') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `viviendas`
--

LOCK TABLES `viviendas` WRITE;
/*!40000 ALTER TABLE `viviendas` DISABLE KEYS */;
INSERT INTO `viviendas` VALUES (1,'01A','123 Main St','1234567890','activo'),(2,'02A','456 Elm St','9876543210','activo'),(3,'03A','789 Oak St','4567890123','inactivo'),(4,'04A','321 Pine St','0123456789','activo'),(5,'05A','654 Maple St','9870123456','inactivo'),(6,'06A','987 Cedar St','6543210987','activo'),(7,'07A','654 Birch St','2109876543','activo'),(8,'08B','321 Walnut St','7890123456','inactivo'),(9,'09A','123 Cherry St','5432109876','activo'),(10,'10B','456 Apple St','8765432109','inactivo'),(11,'11B','789 Orange St','4321098765','activo'),(12,'12B','321 Peach St','2109876543','inactivo'),(13,'13B','654 Grape St','9876543210','activo'),(14,'14B','987 Lemon St','5432109876','activo'),(15,'15B','654 Lime St','0123456789','inactivo'),(16,'16C','321 Mango St','6789012345','activo'),(17,'17C','123 Banana St','5432167890','inactivo'),(18,'18C','456 Pear St','0987654321','activo'),(19,'19C','789 Watermelon St','6543210987','inactivo'),(20,'20D','321 Avocado St','8901234567','activo');
/*!40000 ALTER TABLE `viviendas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-22 21:30:56
