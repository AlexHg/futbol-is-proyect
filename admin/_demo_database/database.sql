-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: torneos
-- ------------------------------------------------------
-- Server version	5.7.15-log

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
-- Table structure for table `capitan`
--

DROP TABLE IF EXISTS `capitan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `capitan` (
  `IDCapitan` int(11) NOT NULL AUTO_INCREMENT,
  `Correo` varchar(45) NOT NULL,
  PRIMARY KEY (`IDCapitan`),
  KEY `Fk_CorreoNotNull` (`Correo`),
  CONSTRAINT `Fk_CorreoNotNull` FOREIGN KEY (`Correo`) REFERENCES `usuario` (`Correo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `capitan`
--

LOCK TABLES `capitan` WRITE;
/*!40000 ALTER TABLE `capitan` DISABLE KEYS */;
INSERT INTO `capitan` VALUES (2,'capitan@hotmail.com'),(1,'Hector@outlook.com'),(3,'music@ipn.mx'),(4,'rolas@gmail.com');
/*!40000 ALTER TABLE `capitan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coordinador`
--

DROP TABLE IF EXISTS `coordinador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coordinador` (
  `Nombre` varchar(50) DEFAULT NULL,
  `Contraseña` varchar(30) NOT NULL,
  `Correo` varchar(45) NOT NULL,
  PRIMARY KEY (`Correo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coordinador`
--

LOCK TABLES `coordinador` WRITE;
/*!40000 ALTER TABLE `coordinador` DISABLE KEYS */;
INSERT INTO `coordinador` VALUES ('Diego Espinoza','diegoelguapo','coordinador@gmail.com');
/*!40000 ALTER TABLE `coordinador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipo`
--

DROP TABLE IF EXISTS `equipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipo` (
  `IDEquipo` int(11) NOT NULL AUTO_INCREMENT,
  `IDCapitan` int(11) NOT NULL,
  `NombreEquipo` varchar(45) NOT NULL,
  PRIMARY KEY (`IDEquipo`),
  KEY `Fk_IDCapitanNotNull` (`IDCapitan`),
  CONSTRAINT `Fk_IDCapitanNotNull` FOREIGN KEY (`IDCapitan`) REFERENCES `capitan` (`IDCapitan`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipo`
--

LOCK TABLES `equipo` WRITE;
/*!40000 ALTER TABLE `equipo` DISABLE KEYS */;
INSERT INTO `equipo` VALUES (1,1,'Pastorcitos de belen'),(2,2,'BFF'),(3,3,'losguapos'),(4,4,'escomios');
/*!40000 ALTER TABLE `equipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipo_jugador`
--

DROP TABLE IF EXISTS `equipo_jugador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipo_jugador` (
  `IDEquipo` int(11) NOT NULL,
  `IDJugador` int(11) NOT NULL,
  PRIMARY KEY (`IDEquipo`,`IDJugador`),
  KEY `FK_IDJugadorJ` (`IDJugador`),
  CONSTRAINT `FK_IDEquipoJ` FOREIGN KEY (`IDEquipo`) REFERENCES `equipo` (`IDEquipo`),
  CONSTRAINT `FK_IDJugadorJ` FOREIGN KEY (`IDJugador`) REFERENCES `jugador` (`IDJugador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipo_jugador`
--

LOCK TABLES `equipo_jugador` WRITE;
/*!40000 ALTER TABLE `equipo_jugador` DISABLE KEYS */;
INSERT INTO `equipo_jugador` VALUES (2,2),(3,2),(1,3),(1,4),(2,4),(2,5),(4,5);
/*!40000 ALTER TABLE `equipo_jugador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipo_torneo`
--

DROP TABLE IF EXISTS `equipo_torneo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipo_torneo` (
  `IDTorneo` int(11) NOT NULL,
  `IDEquipo` int(11) NOT NULL,
  PRIMARY KEY (`IDTorneo`,`IDEquipo`),
  KEY `FK_IDEquipoT` (`IDEquipo`),
  CONSTRAINT `FK_IDEquipoT` FOREIGN KEY (`IDEquipo`) REFERENCES `equipo` (`IDEquipo`),
  CONSTRAINT `FK_IDTorneoT` FOREIGN KEY (`IDTorneo`) REFERENCES `torneo` (`IDTorneo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipo_torneo`
--

LOCK TABLES `equipo_torneo` WRITE;
/*!40000 ALTER TABLE `equipo_torneo` DISABLE KEYS */;
INSERT INTO `equipo_torneo` VALUES (1,1),(1,2),(1,3),(1,4);
/*!40000 ALTER TABLE `equipo_torneo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipogrupo`
--

DROP TABLE IF EXISTS `equipogrupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipogrupo` (
  `IDEquipo` int(11) NOT NULL,
  `IDGrupo` varchar(1) NOT NULL,
  PRIMARY KEY (`IDEquipo`,`IDGrupo`),
  KEY `FK_IDGrupo` (`IDGrupo`),
  CONSTRAINT `FK_IDEquipo` FOREIGN KEY (`IDEquipo`) REFERENCES `equipo` (`IDEquipo`),
  CONSTRAINT `FK_IDGrupo` FOREIGN KEY (`IDGrupo`) REFERENCES `grupo` (`IDGrupo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipogrupo`
--

LOCK TABLES `equipogrupo` WRITE;
/*!40000 ALTER TABLE `equipogrupo` DISABLE KEYS */;
INSERT INTO `equipogrupo` VALUES (1,'1'),(2,'1'),(3,'1'),(4,'1');
/*!40000 ALTER TABLE `equipogrupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fase`
--

DROP TABLE IF EXISTS `fase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fase` (
  `IDFase` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IDFase`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fase`
--

LOCK TABLES `fase` WRITE;
/*!40000 ALTER TABLE `fase` DISABLE KEYS */;
INSERT INTO `fase` VALUES (1,'jornada1'),(2,'jornada2'),(3,'jornada3'),(4,'cuartos de final'),(5,'semifinal'),(6,'octavos de final'),(7,'final');
/*!40000 ALTER TABLE `fase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupo`
--

DROP TABLE IF EXISTS `grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupo` (
  `IDGrupo` varchar(1) NOT NULL,
  `Dia` varchar(10) NOT NULL,
  PRIMARY KEY (`IDGrupo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupo`
--

LOCK TABLES `grupo` WRITE;
/*!40000 ALTER TABLE `grupo` DISABLE KEYS */;
INSERT INTO `grupo` VALUES ('1','Lunes'),('2','Martes'),('3','Miercoles'),('4','Jueves'),('5','Viernes');
/*!40000 ALTER TABLE `grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `horario_juego`
--

DROP TABLE IF EXISTS `horario_juego`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `horario_juego` (
  `IDFase` int(11) NOT NULL,
  `IDHorario` int(11) NOT NULL,
  `IDTorneo` int(11) DEFAULT NULL,
  `DiayHora` datetime DEFAULT NULL,
  `IDJuego` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDHorario`,`IDFase`),
  KEY `FK_IDTorneoH` (`IDTorneo`),
  KEY `FK_IDJuegoH` (`IDJuego`),
  KEY `FK_IDFaseH` (`IDFase`),
  CONSTRAINT `FK_IDFaseH` FOREIGN KEY (`IDFase`) REFERENCES `fase` (`IDFase`),
  CONSTRAINT `FK_IDJuegoH` FOREIGN KEY (`IDJuego`) REFERENCES `juego` (`IDJuego`),
  CONSTRAINT `FK_IDTorneoH` FOREIGN KEY (`IDTorneo`) REFERENCES `torneo` (`IDTorneo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `horario_juego`
--

LOCK TABLES `horario_juego` WRITE;
/*!40000 ALTER TABLE `horario_juego` DISABLE KEYS */;
INSERT INTO `horario_juego` VALUES (1,1,1,'2016-04-17 01:30:00',1),(1,2,1,'2016-04-24 01:30:00',2),(1,3,1,'2016-04-17 12:00:00',3),(2,4,1,'2016-05-01 01:30:00',4),(2,5,1,'2016-05-01 12:30:00',1);
/*!40000 ALTER TABLE `horario_juego` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `juego`
--

DROP TABLE IF EXISTS `juego`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `juego` (
  `IDEquipo1` int(11) DEFAULT NULL,
  `IDEquipo2` int(11) DEFAULT NULL,
  `IDTorneo` int(11) NOT NULL,
  `IDJuego` int(11) NOT NULL AUTO_INCREMENT,
  `IDFase` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDJuego`,`IDTorneo`),
  KEY `FK_IDTorneo` (`IDTorneo`),
  KEY `FK_IDEquipo1` (`IDEquipo1`),
  KEY `FK_IDEquipo2` (`IDEquipo2`),
  KEY `FK_IDFase` (`IDFase`),
  CONSTRAINT `FK_IDEquipo1` FOREIGN KEY (`IDEquipo1`) REFERENCES `equipo` (`IDEquipo`),
  CONSTRAINT `FK_IDEquipo2` FOREIGN KEY (`IDEquipo2`) REFERENCES `equipo` (`IDEquipo`),
  CONSTRAINT `FK_IDFase` FOREIGN KEY (`IDFase`) REFERENCES `fase` (`IDFase`),
  CONSTRAINT `FK_IDTorneo` FOREIGN KEY (`IDTorneo`) REFERENCES `torneo` (`IDTorneo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `juego`
--

LOCK TABLES `juego` WRITE;
/*!40000 ALTER TABLE `juego` DISABLE KEYS */;
INSERT INTO `juego` VALUES (2,4,1,1,1),(1,2,1,2,1),(1,3,1,3,1),(2,3,1,4,2),(3,4,1,5,2);
/*!40000 ALTER TABLE `juego` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `juegosresultado`
--

DROP TABLE IF EXISTS `juegosresultado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `juegosresultado` (
  `IDEquipo` int(11) NOT NULL,
  `IDJuego` int(11) NOT NULL,
  `GolesaFavor` int(11) DEFAULT NULL,
  `GolesenContra` int(11) DEFAULT NULL,
  `IDTorneo` int(11) DEFAULT NULL,
  `IDFase` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDEquipo`,`IDJuego`),
  KEY `FK_IDTorneoR` (`IDTorneo`),
  KEY `FK_IDFaseR` (`IDFase`),
  KEY `FK_IDJuegoR` (`IDJuego`),
  CONSTRAINT `FK_IDEquipoR` FOREIGN KEY (`IDEquipo`) REFERENCES `equipo` (`IDEquipo`),
  CONSTRAINT `FK_IDFaseR` FOREIGN KEY (`IDFase`) REFERENCES `fase` (`IDFase`),
  CONSTRAINT `FK_IDJuegoR` FOREIGN KEY (`IDJuego`) REFERENCES `juego` (`IDJuego`),
  CONSTRAINT `FK_IDTorneoR` FOREIGN KEY (`IDTorneo`) REFERENCES `torneo` (`IDTorneo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `juegosresultado`
--

LOCK TABLES `juegosresultado` WRITE;
/*!40000 ALTER TABLE `juegosresultado` DISABLE KEYS */;
INSERT INTO `juegosresultado` VALUES (1,1,1,2,1,1),(1,2,1,2,1,1),(1,3,1,2,1,1),(1,4,1,2,1,1);
/*!40000 ALTER TABLE `juegosresultado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jugador`
--

DROP TABLE IF EXISTS `jugador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jugador` (
  `IDJugador` int(11) NOT NULL AUTO_INCREMENT,
  `Correo` varchar(45) NOT NULL,
  PRIMARY KEY (`IDJugador`),
  KEY `FK_CorreoJ` (`Correo`),
  CONSTRAINT `FK_CorreoJ` FOREIGN KEY (`Correo`) REFERENCES `usuario` (`Correo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jugador`
--

LOCK TABLES `jugador` WRITE;
/*!40000 ALTER TABLE `jugador` DISABLE KEYS */;
INSERT INTO `jugador` VALUES (6,'barney@outlook.com'),(5,'gtrf@gmail.com'),(4,'kiobo@gmail.com'),(3,'laloca@gmail.com'),(2,'luke@outlook.com');
/*!40000 ALTER TABLE `jugador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitud`
--

DROP TABLE IF EXISTS `solicitud`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `solicitud` (
  `IDEquipo` int(11) NOT NULL,
  `IDJugador` int(11) NOT NULL,
  `Tipo_Solicitud` tinyint(1) NOT NULL,
  PRIMARY KEY (`IDEquipo`,`IDJugador`),
  KEY `FK_IDJugadorS` (`IDJugador`),
  CONSTRAINT `FK_IDEquipoS` FOREIGN KEY (`IDEquipo`) REFERENCES `equipo` (`IDEquipo`),
  CONSTRAINT `FK_IDJugadorS` FOREIGN KEY (`IDJugador`) REFERENCES `jugador` (`IDJugador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitud`
--

LOCK TABLES `solicitud` WRITE;
/*!40000 ALTER TABLE `solicitud` DISABLE KEYS */;
INSERT INTO `solicitud` VALUES (1,2,1),(1,4,1),(1,5,0),(1,6,1),(2,3,1),(2,6,0),(3,3,1),(3,5,0),(3,6,0),(4,4,1);
/*!40000 ALTER TABLE `solicitud` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitud_equipo`
--

DROP TABLE IF EXISTS `solicitud_equipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `solicitud_equipo` (
  `idSolicitud` int(11) NOT NULL AUTO_INCREMENT,
  `NombreEquipo` varchar(45) NOT NULL,
  `IDCapitan` int(11) NOT NULL,
  `Tipo_Solicitud` tinyint(1) NOT NULL,
  PRIMARY KEY (`idSolicitud`,`IDCapitan`),
  KEY `FK_IDCapitanS` (`IDCapitan`),
  CONSTRAINT `FK_IDCapitanS` FOREIGN KEY (`IDCapitan`) REFERENCES `capitan` (`IDCapitan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitud_equipo`
--

LOCK TABLES `solicitud_equipo` WRITE;
/*!40000 ALTER TABLE `solicitud_equipo` DISABLE KEYS */;
INSERT INTO `solicitud_equipo` VALUES (1,'BFF',2,1),(2,'losguapos',3,1);
/*!40000 ALTER TABLE `solicitud_equipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `torneo`
--

DROP TABLE IF EXISTS `torneo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `torneo` (
  `IDTorneo` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  `Tipo_Torneo` tinyint(1) NOT NULL,
  `Fecha_Inicio` date NOT NULL,
  `Fecha_Fin` date DEFAULT NULL,
  `Fecha_Cierre_Inscripcion` date NOT NULL,
  PRIMARY KEY (`IDTorneo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `torneo`
--

LOCK TABLES `torneo` WRITE;
/*!40000 ALTER TABLE `torneo` DISABLE KEYS */;
INSERT INTO `torneo` VALUES (1,'del pavo',1,'2012-09-09','2012-12-09','2024-08-00');
/*!40000 ALTER TABLE `torneo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `Correo` varchar(45) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellidos` varchar(45) NOT NULL,
  `Contraseña` varchar(20) NOT NULL,
  `Telefono` char(8) NOT NULL,
  `Imagen` varchar(200) DEFAULT NULL,
  `EsCapitan` tinyint(1) NOT NULL,
  PRIMARY KEY (`Correo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES ('barney@outlook.com','Oscar','Hernandez','oscarito','55879658','oscar.jpg',0),('capitan@hotmail.com','Oscar','Gonzalez Gonzal\nez','oscar','55167785','image.jpg',1),('gtrf@gmail.com','Daniel','Lopez','danit','87889567','jd.jpg',0),('Hector@outlook.com','Hector','Barba','12345','45674323','mayra1.jpg',1),('kiobo@gmail.com','Alan','Lopez','alancito','87889584','alan.jpg',0),('laloca@gmail.com','Daniela','Esparza','danita','87899584','daniela.jpg',0),('luke@outlook.com','Pamela','Albino','batman','45654323','pame.jpg',0),('May@outlook.com','Mayra','Tovar','1234','45674323','mayra.jpg',0),('music@ipn.mx','Manuel','Juarez','mau','87889564','manu.jpg',1),('rolas@gmail.com','Rolando','Romero','rcrol','87895641','rolando.jpg',1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'torneos'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-29 17:50:51
