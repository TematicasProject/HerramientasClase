CREATE DATABASE  IF NOT EXISTS `tematicasprojectdb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `tematicasprojectdb`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: localhost    Database: tematicasprojectdb
-- ------------------------------------------------------
-- Server version	5.5.24-log

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
-- Table structure for table `escuelas`
--

DROP TABLE IF EXISTS `escuelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `escuelas` (
  `idEscuela` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `escuelas`
--

LOCK TABLES `escuelas` WRITE;
/*!40000 ALTER TABLE `escuelas` DISABLE KEYS */;
INSERT INTO `escuelas` VALUES (1,'ESCUELA DE SALUD'),(2,'ESCUELA DE EDUCACION'),(3,'ESCUELA DE ADMINISTRACION'),(4,'ESCUELA DE LAS TIC'),(5,'ESCUELA DE MERCADEO'),(6,'ESCUELA DE COMUNICACIONES'),(7,'ESCUELA DE IDIOMAS'),(8,'ESCUELA DE GASTRONOMIA'),(9,'ESCUELA DE BELLEZA INTEGRAL');
/*!40000 ALTER TABLE `escuelas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupos`
--

DROP TABLE IF EXISTS `grupos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupos` (
  `idGrupo` int(11) NOT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `idJornada` int(11) NOT NULL,
  `idProfesor` char(20) NOT NULL,
  `idMateria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupos`
--

LOCK TABLES `grupos` WRITE;
/*!40000 ALTER TABLE `grupos` DISABLE KEYS */;
INSERT INTO `grupos` VALUES (1,'GRUPO PROGRAMACION PHP',4,'MALAVIDA',4);
/*!40000 ALTER TABLE `grupos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupos_estudiantes`
--

DROP TABLE IF EXISTS `grupos_estudiantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupos_estudiantes` (
  `idGrupo` int(11) DEFAULT NULL,
  `idEstudiante` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupos_estudiantes`
--

LOCK TABLES `grupos_estudiantes` WRITE;
/*!40000 ALTER TABLE `grupos_estudiantes` DISABLE KEYS */;
INSERT INTO `grupos_estudiantes` VALUES (1,'YGIRALDO'),(1,'DTORRES'),(1,'MGUTIERREZ'),(1,'JBECERRA'),(1,'YPENAGOS');
/*!40000 ALTER TABLE `grupos_estudiantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jornadas`
--

DROP TABLE IF EXISTS `jornadas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jornadas` (
  `idJornada` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jornadas`
--

LOCK TABLES `jornadas` WRITE;
/*!40000 ALTER TABLE `jornadas` DISABLE KEYS */;
INSERT INTO `jornadas` VALUES (1,'SEMANA MAÑANA'),(2,'SEMANA TARDE'),(3,'SABADO MAÑANA'),(4,'SABADO TARDE'),(5,'DOMINGO MAÑANA');
/*!40000 ALTER TABLE `jornadas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materias`
--

DROP TABLE IF EXISTS `materias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materias` (
  `idMateria` int(11) NOT NULL,
  `nombre` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materias`
--

LOCK TABLES `materias` WRITE;
/*!40000 ALTER TABLE `materias` DISABLE KEYS */;
INSERT INTO `materias` VALUES (1,'EMPRENDIMIENTO'),(2,'PRIMEROS AUXILIOS'),(3,'INGLES'),(4,'PHP'),(5,'JAVA'),(6,'BASES DE DATOS'),(7,'INTRODUCCION A LA CONTABILIDAD'),(8,'COSTOS'),(9,'PRESUPUESTOS'),(10,'LEGISLACION LABORAL'),(11,'ALGORITMOS');
/*!40000 ALTER TABLE `materias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matriculas`
--

DROP TABLE IF EXISTS `matriculas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matriculas` (
  `idMatricula` int(11) NOT NULL,
  `idEstudiante` char(20) DEFAULT NULL,
  `idPrograma` int(11) NOT NULL,
  `idJornada` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matriculas`
--

LOCK TABLES `matriculas` WRITE;
/*!40000 ALTER TABLE `matriculas` DISABLE KEYS */;
INSERT INTO `matriculas` VALUES (1,'YGIRALDO',2,4,'2015-09-27'),(2,'DTORRES',2,4,'2015-09-27'),(3,'MGUTIERREZ',2,4,'2015-09-27'),(4,'JBECERRA',2,4,'2015-09-27'),(4,'YPENAGOS',2,4,'2015-09-27');
/*!40000 ALTER TABLE `matriculas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pensum`
--

DROP TABLE IF EXISTS `pensum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pensum` (
  `idPrograma` int(11) NOT NULL,
  `idMateria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pensum`
--

LOCK TABLES `pensum` WRITE;
/*!40000 ALTER TABLE `pensum` DISABLE KEYS */;
INSERT INTO `pensum` VALUES (1,1),(2,1),(3,1),(4,1),(1,2),(1,3),(2,3),(3,3),(4,3),(2,4),(2,5),(2,6),(2,11);
/*!40000 ALTER TABLE `pensum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfiles`
--

DROP TABLE IF EXISTS `perfiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perfiles` (
  `codperfil` char(2) NOT NULL,
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfiles`
--

LOCK TABLES `perfiles` WRITE;
/*!40000 ALTER TABLE `perfiles` DISABLE KEYS */;
INSERT INTO `perfiles` VALUES ('01','ADMINISTRADOR'),('02','DOCENTE'),('03','ESTUDIANTE');
/*!40000 ALTER TABLE `perfiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programas`
--

DROP TABLE IF EXISTS `programas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programas` (
  `idPrograma` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `idEscuela` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programas`
--

LOCK TABLES `programas` WRITE;
/*!40000 ALTER TABLE `programas` DISABLE KEYS */;
INSERT INTO `programas` VALUES (1,'EFERMERIA',1),(2,'ANALISIS Y PROGRAMACION',4),(3,'CONTABILIDAD SISTEMATIZADA',3),(4,'INGLES',7);
/*!40000 ALTER TABLE `programas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tematicas`
--

DROP TABLE IF EXISTS `tematicas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tematicas` (
  `idTematica` int(11) NOT NULL,
  `idGrupo` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `idMateria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tematicas`
--

LOCK TABLES `tematicas` WRITE;
/*!40000 ALTER TABLE `tematicas` DISABLE KEYS */;
INSERT INTO `tematicas` VALUES (1,1,'PROGRAMACION EN PHP',0);
/*!40000 ALTER TABLE `tematicas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tematicas_detalle`
--

DROP TABLE IF EXISTS `tematicas_detalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tematicas_detalle` (
  `idDetalle` int(11) NOT NULL,
  `idTematica` int(11) NOT NULL,
  `nombreArchivo` varchar(100) NOT NULL,
  `extencion` varchar(10) NOT NULL,
  `comentario` varchar(500) NOT NULL,
  `rutaFisica` varchar(250) NOT NULL,
  `rutaVirtual` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tematicas_detalle`
--

LOCK TABLES `tematicas_detalle` WRITE;
/*!40000 ALTER TABLE `tematicas_detalle` DISABLE KEYS */;
INSERT INTO `tematicas_detalle` VALUES (1,1,'prueba','xlsx','Archivo de prueba','D:Descargas','/Descargas');
/*!40000 ALTER TABLE `tematicas_detalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `codusuario` char(20) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `codperfil` char(2) NOT NULL,
  `habilitado` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES ('DTORRES','123','DIANA TORRES','03',''),('YGIRALDO','123','YASMIT GIRALDO','03',''),('MGUTIERREZ','123','MARIO GUTIERREZ','03',''),('MALAVIDA','123','MARIO MALAVIDA','02',''),('ADMIN','123','ADMINISTRADOR','01',''),('JBECERRA','123','JUAN BECERRA','03',''),('YPENAGOS','123','YULIANA PENAGOS','03',''),('PERANITO','123','PERANITO DE TAL','02',''),('JAJA','LSJDF','SLJDF','02','');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'tematicasprojectdb'
--
/*!50003 DROP PROCEDURE IF EXISTS `spAdminEscuelas` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `spAdminEscuelas`(
_opcion int,
_codescuela int,
_nombre varchar(60)
)
begin
	if _opcion = 1 then /*Crea o modifica el registro de una escuela*/
		if(select count(*) from escuela where codescuela = _codescuela) > 0 then
			update escuelas set
			nombre = _nombre
			where codescuela = _codescuela;
		else
			insert into escuelas 
				(codescuela, nombre)
			values
				(_codescuela, _nombre);
		end if;
	end if;
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `spAdminjornada` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `spAdminjornada`(
_opcion int,
_codjornada int,
_nombre varchar(60)
)
begin
	if _opcion = 1 then /*Crea o modifica el registro de una jornada*/
		if(select count(*) from jornadas where codjornada = _codjornada) > 0 then
			update jornadas set
			nombre = _nombre
			where codjornada = _codjornada;
		else
			insert into jornadas 
				(codjornada, nombre)
			values
				(_codjornada, _nombre);
		end if;
	end if;
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `spAdminMateria` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `spAdminMateria`(
_opcion int,
_codmateria int,
_nombre varchar(60)
)
begin
	if _opcion = 1 then /*Crea o modifica el registro de una materia*/
		if(select count(*) from materia where codmateria = _codmateria) > 0 then
			update materias set
			nombre = _nombre
			where codmateria = _codmateria;
		else
			insert into materias 
				(codmateria, nombre)
			values
				(_codmateria, _nombre);
		end if;
	end if;
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `spAdminPensum` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `spAdminPensum`(
_opcion int,
_codprograma char(20),
_codmateria char(20)
)
begin
	if _opcion = 1 then /*Crea o modifica el registro de un usuario*/
		if(select count(*) from pensum where codprograma = _codprograma and codmateria  = _codmateria) = 0 then
			insert into pensum
				(codprograma, codmateria)
			values
				(_codprograma, _codmateria);
		end if;
    end if;
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `spAdminPerfil` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `spAdminPerfil`(
_opcion int,
_codperfil char(2),
_nombre varchar(60)
)
begin
	if _opcion = 1 then /*Crea o modifica el registro de un perfil*/
		if(select count(*) from perfiles where codperfil = _codperfil) > 0 then
			update perfiles set
			nombre = _nombre
			where codperfil = _codperfil;
		else
			insert into perfiles 
				(codperfil, nombre)
			values
				(_codperfil, _nombre);
		end if;
	end if;
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `spAdminUsuarios` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `spAdminUsuarios`(
_opcion int,
_codusuario char(20),
_clave varchar(20),
_nombre varchar(60),
_codperfil char(2)
)
begin
	if _opcion = 1 then /*Crea o modifica el registro de un usuario*/
		if(select count(*) from usuarios where codusuario = _codusuario) > 0 then
			update usuarios set
			nombre = _nombre,
			clave =_clave,
			codperfil = _codperfil
			where codusuario = _codusuario;
		else
			insert into usuarios 
				(codusuario, clave, nombre, codperfil)
			values
				(_codusuario, _clave, _nombre, _codperfil);
		end if;
	elseif _opcion = 2 then /*Deshabilita un usuario*/
		update usuarios set habilitado = 0
		where codusuario = _codusuario;
	end if;
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `spgruposPrograma` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `spgruposPrograma`(_idProfesor int)
begin
	select idgrupo, nombre, idmateria,  idjornada
from grupos
where idProfesor = _idProfesor;
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `spMateriasPrograma` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `spMateriasPrograma`(_idPrograma int)
begin
	select m.idMateria, m.nombre as materia
	from pensum as p
	inner join materias  as m on p.idMateria = m.idmateria
	where p.idprograma = _idPrograma;
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `spOpcionesMenu` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `spOpcionesMenu`(_usuario char(20))
begin
	declare _codPerfil char(2);

	set _codPerfil = (select codperfil
					  from usuarios
					  where codusuario = _usuario);

	if _codPerfil = '03' then
		select _codPerfil as codPerfil, p.idPrograma, p.nombre as programa
		from matriculas as m
		inner join programas as p on m.idPrograma = p.idPrograma
		where m.idEstudiante =  _usuario;
	elseif _codPerfil = '02' then
		select distinct _codPerfil as codPerfil, m.idMateria, m.nombre as materia
		from grupos as g
		inner join materias as m on g.idmateria = m.idmateria
		where g.idProfesor =  _usuario;
	end if;
	
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-13 22:21:48
