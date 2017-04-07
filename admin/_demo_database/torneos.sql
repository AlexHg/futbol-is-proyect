-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2017 at 09:07 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `torneos`
--

-- --------------------------------------------------------

--
-- Table structure for table `capitan`
--

CREATE TABLE `capitan` (
  `IDCapitan` int(11) NOT NULL DEFAULT '0',
  `Correo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `capitan`
--

INSERT INTO `capitan` (`IDCapitan`, `Correo`) VALUES
(2, 'Hector@outlook.com'),
(3, 'music@ipn.mx'),
(4, 'rolas@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `coordinador`
--

CREATE TABLE `coordinador` (
  `Nombre` varchar(50) DEFAULT NULL,
  `Contra` varchar(15) NOT NULL,
  `Correo` varchar(45) NOT NULL DEFAULT '',
  `Imagen` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coordinador`
--

INSERT INTO `coordinador` (`Nombre`, `Contra`, `Correo`, `Imagen`) VALUES
('Diego Espinoza', 'diegoelguapo', 'coordinador@gmail.com', 'hola.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `equipo`
--

CREATE TABLE `equipo` (
  `IDEquipo` int(11) NOT NULL,
  `Correo` varchar(45) NOT NULL,
  `NombreEquipo` varchar(45) NOT NULL,
  `DescripcionUniforme` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `equipo`
--

INSERT INTO `equipo` (`IDEquipo`, `Correo`, `NombreEquipo`, `DescripcionUniforme`) VALUES
(1, 'Hector@outlook.com', 'BFF', 'verde'),
(2, 'music@ipn.mx', 'losguapos', 'azul'),
(3, 'rolas@gmail.com', 'escomios', 'morado');

-- --------------------------------------------------------

--
-- Table structure for table `equipogrupo`
--

CREATE TABLE `equipogrupo` (
  `IDEquipo` int(11) NOT NULL DEFAULT '0',
  `IDGrupo` varchar(1) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `equipogrupo`
--

INSERT INTO `equipogrupo` (`IDEquipo`, `IDGrupo`) VALUES
(1, '1'),
(2, '1'),
(3, '1');

-- --------------------------------------------------------

--
-- Table structure for table `equipo_jugador`
--

CREATE TABLE `equipo_jugador` (
  `IDEquipo` int(11) NOT NULL DEFAULT '0',
  `Correo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `equipo_jugador`
--

INSERT INTO `equipo_jugador` (`IDEquipo`, `Correo`) VALUES
(1, 'barney@outlook.com'),
(1, 'laloca@gmail.com'),
(2, 'gtrf@gmail.com'),
(2, 'laloca@gmail.com'),
(2, 'luke@outlook.com'),
(3, 'luke@outlook.com');

-- --------------------------------------------------------

--
-- Table structure for table `equipo_torneo`
--

CREATE TABLE `equipo_torneo` (
  `IDTorneo` int(11) NOT NULL DEFAULT '0',
  `IDEquipo` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `equipo_torneo`
--

INSERT INTO `equipo_torneo` (`IDTorneo`, `IDEquipo`) VALUES
(1, 1),
(1, 2),
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `fase`
--

CREATE TABLE `fase` (
  `IDFase` int(11) NOT NULL,
  `Descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fase`
--

INSERT INTO `fase` (`IDFase`, `Descripcion`) VALUES
(1, 'jornada1'),
(2, 'jornada2'),
(3, 'jornada3'),
(4, 'cuartos de final'),
(5, 'semifinal'),
(6, 'octavos de final'),
(7, 'final');

-- --------------------------------------------------------

--
-- Table structure for table `grupo`
--

CREATE TABLE `grupo` (
  `IDGrupo` varchar(1) NOT NULL DEFAULT '',
  `Dia` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grupo`
--

INSERT INTO `grupo` (`IDGrupo`, `Dia`) VALUES
('1', 'Lunes'),
('2', 'Martes'),
('3', 'Miercoles'),
('4', 'Jueves'),
('5', 'Viernes');

-- --------------------------------------------------------

--
-- Table structure for table `horario_juego`
--

CREATE TABLE `horario_juego` (
  `IDFase` int(11) NOT NULL DEFAULT '0',
  `IDHorario` int(11) NOT NULL DEFAULT '0',
  `IDTorneo` int(11) DEFAULT NULL,
  `DiayHora` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `horario_juego`
--

INSERT INTO `horario_juego` (`IDFase`, `IDHorario`, `IDTorneo`, `DiayHora`) VALUES
(1, 1, 1, '2016-04-17 01:30:00'),
(1, 2, 1, '2016-04-24 01:30:00'),
(1, 3, 1, '2016-04-17 12:00:00'),
(2, 4, 1, '2016-05-01 01:30:00'),
(2, 5, 1, '2016-05-01 12:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `juego`
--

CREATE TABLE `juego` (
  `IDEquipo1` int(11) DEFAULT NULL,
  `IDEquipo2` int(11) DEFAULT NULL,
  `IDTorneo` int(11) NOT NULL,
  `IDJuego` int(11) NOT NULL,
  `IDFase` int(11) DEFAULT NULL,
  `IDHorario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `juego`
--

INSERT INTO `juego` (`IDEquipo1`, `IDEquipo2`, `IDTorneo`, `IDJuego`, `IDFase`, `IDHorario`) VALUES
(2, 3, 1, 1, 1, NULL),
(1, 2, 1, 2, 1, NULL),
(2, 3, 1, 3, 1, NULL),
(2, 1, 1, 4, 2, NULL),
(3, 1, 1, 5, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `juegosresultado`
--

CREATE TABLE `juegosresultado` (
  `IDEquipo` int(11) NOT NULL DEFAULT '0',
  `IDJuego` int(11) NOT NULL,
  `GolesaFavor` int(11) DEFAULT NULL,
  `GolesenContra` int(11) DEFAULT NULL,
  `IDTorneo` int(11) DEFAULT NULL,
  `IDFase` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `juegosresultado`
--

INSERT INTO `juegosresultado` (`IDEquipo`, `IDJuego`, `GolesaFavor`, `GolesenContra`, `IDTorneo`, `IDFase`) VALUES
(1, 1, 1, 2, 1, 1),
(1, 2, 1, 2, 1, 1),
(1, 3, 1, 2, 1, 1),
(1, 4, 1, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jugador`
--

CREATE TABLE `jugador` (
  `IDJugador` int(11) NOT NULL,
  `Correo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jugador`
--

INSERT INTO `jugador` (`IDJugador`, `Correo`) VALUES
(7, 'alexxh42@gmail.com'),
(6, 'barney@outlook.com'),
(5, 'gtrf@gmail.com'),
(4, 'kiobo@gmail.com'),
(3, 'laloca@gmail.com'),
(2, 'luke@outlook.com'),
(1, 'May@outlook.com');

-- --------------------------------------------------------

--
-- Table structure for table `solicitud`
--

CREATE TABLE `solicitud` (
  `IDEquipo` int(11) NOT NULL DEFAULT '0',
  `correo` varchar(45) NOT NULL DEFAULT '',
  `Tipo_Solicitud` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `solicitud`
--

INSERT INTO `solicitud` (`IDEquipo`, `correo`, `Tipo_Solicitud`) VALUES
(1, 'gtrf@gmail.com', 0),
(1, 'kiobo@gmail.com', 1),
(1, 'luke@outlook.com', 1),
(1, 'May@outlook.com', 0),
(2, 'barney@outlook.com', 1),
(2, 'May@outlook.com', 0),
(3, 'barney@outlook.com', 1),
(3, 'gtrf@gmail.com', 0),
(3, 'May@outlook.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `torneo`
--

CREATE TABLE `torneo` (
  `IDTorneo` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Tipo_Torneo` tinyint(1) NOT NULL,
  `Fecha_Inicio` date NOT NULL,
  `Fecha_Fin` date NOT NULL,
  `Fecha_Cierre_Inscripcion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `torneo`
--

INSERT INTO `torneo` (`IDTorneo`, `Nombre`, `Tipo_Torneo`, `Fecha_Inicio`, `Fecha_Fin`, `Fecha_Cierre_Inscripcion`) VALUES
(1, 'del pavo', 1, '2012-09-09', '2012-12-09', '2024-08-00');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `Correo` varchar(45) NOT NULL DEFAULT '',
  `Nombre` varchar(50) NOT NULL,
  `Apellidos` varchar(45) NOT NULL,
  `contra` varchar(15) NOT NULL,
  `Telefono` char(10) NOT NULL,
  `Imagen` varchar(200) DEFAULT NULL,
  `EsCapitan` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`Correo`, `Nombre`, `Apellidos`, `contra`, `Telefono`, `Imagen`, `EsCapitan`) VALUES
('alexxh42@gmail.com', 'Alejandro', 'Hernandez', 'alex6699', '123123123', '111.JPG', 0),
('barney@outlook.com', 'Oscar', 'Hernandez', 'oscarito', '5534879658', 'oscar.jpg', 0),
('gtrf@gmail.com', 'Daniel', 'Lopez', 'danit', '8788956754', 'jd.jpg', 0),
('Hector@outlook.com', 'Hector', 'Barba', '12345', '4567454323', 'mayra1.jpg', 1),
('kiobo@gmail.com', 'Alan', 'Lopez', 'alancito', '8788958497', 'alan.jpg', 0),
('laloca@gmail.com', 'Daniela', 'Esparza', 'danita', '8789958984', 'daniela.jpg', 0),
('luke@outlook.com', 'Pamela', 'Albino', 'batman', '4565454323', 'pame.jpg', 0),
('May@outlook.com', 'Mayra', 'Tovar', '1234', '4567432354', 'mayra.jpg', 0),
('music@ipn.mx', 'Manuel', 'Juarez', 'mau', '8788956465', 'manu.jpg', 1),
('rolas@gmail.com', 'Rolando', 'Romero', 'rcrol', '8789564176', 'rolando.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `capitan`
--
ALTER TABLE `capitan`
  ADD PRIMARY KEY (`IDCapitan`),
  ADD KEY `Fk_CorreoNotNull` (`Correo`);

--
-- Indexes for table `coordinador`
--
ALTER TABLE `coordinador`
  ADD PRIMARY KEY (`Correo`);

--
-- Indexes for table `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`IDEquipo`),
  ADD UNIQUE KEY `NombreEquipo` (`NombreEquipo`),
  ADD KEY `Fk_IDCapitanNotNull` (`Correo`);

--
-- Indexes for table `equipogrupo`
--
ALTER TABLE `equipogrupo`
  ADD PRIMARY KEY (`IDEquipo`,`IDGrupo`),
  ADD KEY `FK_IDGrupo` (`IDGrupo`);

--
-- Indexes for table `equipo_jugador`
--
ALTER TABLE `equipo_jugador`
  ADD PRIMARY KEY (`IDEquipo`,`Correo`),
  ADD KEY `FK_IDJugadorJ` (`Correo`);

--
-- Indexes for table `equipo_torneo`
--
ALTER TABLE `equipo_torneo`
  ADD PRIMARY KEY (`IDTorneo`,`IDEquipo`),
  ADD KEY `FK_IDEquipoT` (`IDEquipo`);

--
-- Indexes for table `fase`
--
ALTER TABLE `fase`
  ADD PRIMARY KEY (`IDFase`);

--
-- Indexes for table `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`IDGrupo`);

--
-- Indexes for table `horario_juego`
--
ALTER TABLE `horario_juego`
  ADD PRIMARY KEY (`IDHorario`,`IDFase`),
  ADD KEY `FK_IDTorneoH` (`IDTorneo`),
  ADD KEY `FK_IDFaseH` (`IDFase`);

--
-- Indexes for table `juego`
--
ALTER TABLE `juego`
  ADD PRIMARY KEY (`IDJuego`,`IDTorneo`),
  ADD KEY `FK_IDTorneo` (`IDTorneo`),
  ADD KEY `FK_IDEquipo1` (`IDEquipo1`),
  ADD KEY `FK_IDEquipo2` (`IDEquipo2`),
  ADD KEY `FK_IDFase` (`IDFase`),
  ADD KEY `FK_IDMAYRA` (`IDHorario`);

--
-- Indexes for table `juegosresultado`
--
ALTER TABLE `juegosresultado`
  ADD PRIMARY KEY (`IDEquipo`,`IDJuego`),
  ADD KEY `FK_IDTorneoR` (`IDTorneo`),
  ADD KEY `FK_IDFaseR` (`IDFase`),
  ADD KEY `FK_IDJuegoR` (`IDJuego`);

--
-- Indexes for table `jugador`
--
ALTER TABLE `jugador`
  ADD PRIMARY KEY (`IDJugador`),
  ADD KEY `FK_CorreoJ` (`Correo`);

--
-- Indexes for table `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`IDEquipo`,`correo`),
  ADD KEY `FK_IDJugadorS` (`correo`);

--
-- Indexes for table `torneo`
--
ALTER TABLE `torneo`
  ADD PRIMARY KEY (`IDTorneo`),
  ADD UNIQUE KEY `Nombre` (`Nombre`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Correo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipo`
--
ALTER TABLE `equipo`
  MODIFY `IDEquipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `fase`
--
ALTER TABLE `fase`
  MODIFY `IDFase` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `juego`
--
ALTER TABLE `juego`
  MODIFY `IDJuego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `jugador`
--
ALTER TABLE `jugador`
  MODIFY `IDJugador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `torneo`
--
ALTER TABLE `torneo`
  MODIFY `IDTorneo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `capitan`
--
ALTER TABLE `capitan`
  ADD CONSTRAINT `Fk_CorreoNotNull` FOREIGN KEY (`Correo`) REFERENCES `usuario` (`Correo`);

--
-- Constraints for table `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `Fk_IDCapitanNotNull` FOREIGN KEY (`Correo`) REFERENCES `capitan` (`Correo`);

--
-- Constraints for table `equipogrupo`
--
ALTER TABLE `equipogrupo`
  ADD CONSTRAINT `FK_IDEquipo` FOREIGN KEY (`IDEquipo`) REFERENCES `equipo` (`IDEquipo`),
  ADD CONSTRAINT `FK_IDGrupo` FOREIGN KEY (`IDGrupo`) REFERENCES `grupo` (`IDGrupo`);

--
-- Constraints for table `equipo_jugador`
--
ALTER TABLE `equipo_jugador`
  ADD CONSTRAINT `FK_IDEquipoJ` FOREIGN KEY (`IDEquipo`) REFERENCES `equipo` (`IDEquipo`),
  ADD CONSTRAINT `FK_IDJugadorJ` FOREIGN KEY (`Correo`) REFERENCES `usuario` (`Correo`);

--
-- Constraints for table `equipo_torneo`
--
ALTER TABLE `equipo_torneo`
  ADD CONSTRAINT `FK_IDEquipoT` FOREIGN KEY (`IDEquipo`) REFERENCES `equipo` (`IDEquipo`),
  ADD CONSTRAINT `FK_IDTorneoT` FOREIGN KEY (`IDTorneo`) REFERENCES `torneo` (`IDTorneo`);

--
-- Constraints for table `horario_juego`
--
ALTER TABLE `horario_juego`
  ADD CONSTRAINT `FK_IDFaseH` FOREIGN KEY (`IDFase`) REFERENCES `fase` (`IDFase`),
  ADD CONSTRAINT `FK_IDTorneoH` FOREIGN KEY (`IDTorneo`) REFERENCES `torneo` (`IDTorneo`);

--
-- Constraints for table `juego`
--
ALTER TABLE `juego`
  ADD CONSTRAINT `FK_IDEquipo1` FOREIGN KEY (`IDEquipo1`) REFERENCES `equipo` (`IDEquipo`),
  ADD CONSTRAINT `FK_IDEquipo2` FOREIGN KEY (`IDEquipo2`) REFERENCES `equipo` (`IDEquipo`),
  ADD CONSTRAINT `FK_IDFase` FOREIGN KEY (`IDFase`) REFERENCES `fase` (`IDFase`),
  ADD CONSTRAINT `FK_IDMAYRA` FOREIGN KEY (`IDHorario`) REFERENCES `horario_juego` (`IDHorario`),
  ADD CONSTRAINT `FK_IDTorneo` FOREIGN KEY (`IDTorneo`) REFERENCES `torneo` (`IDTorneo`);

--
-- Constraints for table `juegosresultado`
--
ALTER TABLE `juegosresultado`
  ADD CONSTRAINT `FK_IDEquipoR` FOREIGN KEY (`IDEquipo`) REFERENCES `equipo` (`IDEquipo`),
  ADD CONSTRAINT `FK_IDFaseR` FOREIGN KEY (`IDFase`) REFERENCES `fase` (`IDFase`),
  ADD CONSTRAINT `FK_IDJuegoR` FOREIGN KEY (`IDJuego`) REFERENCES `juego` (`IDJuego`),
  ADD CONSTRAINT `FK_IDTorneoR` FOREIGN KEY (`IDTorneo`) REFERENCES `torneo` (`IDTorneo`);

--
-- Constraints for table `jugador`
--
ALTER TABLE `jugador`
  ADD CONSTRAINT `FK_CorreoJ` FOREIGN KEY (`Correo`) REFERENCES `usuario` (`Correo`);

--
-- Constraints for table `solicitud`
--
ALTER TABLE `solicitud`
  ADD CONSTRAINT `FK_IDEquipoS` FOREIGN KEY (`IDEquipo`) REFERENCES `equipo` (`IDEquipo`),
  ADD CONSTRAINT `FK_IDJugadorS` FOREIGN KEY (`correo`) REFERENCES `usuario` (`Correo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
