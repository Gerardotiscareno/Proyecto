-- MySQL dump 10.13  Distrib 5.5.41, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: Proyecto
-- ------------------------------------------------------
-- Server version	5.5.41-0ubuntu0.14.04.1

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
-- Table structure for table `Codigo`
--

DROP TABLE IF EXISTS `Codigo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Codigo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Lenguaje` int(11) NOT NULL,
  `Titulo` varchar(50) NOT NULL,
  `Fecha` date NOT NULL,
  `Autor` varchar(75) NOT NULL,
  `Correo` varchar(75) NOT NULL,
  `Codigo` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Codigo`
--

LOCK TABLES `Codigo` WRITE;
/*!40000 ALTER TABLE `Codigo` DISABLE KEYS */;
INSERT INTO `Codigo` VALUES (1,1,'test','2015-04-16','Gerardo Tiscareno','Gerardo.Tiscareno@gmail.com','<?php\r\n// Connecting, selecting database\r\n$db_name = \"Proyecto\";\r\n$db_server = \"localhost\";\r\n$db_user = \"root\";\r\n$db_pass = \"mysql\";\r\n$conn=mysql_connect($db_server,$db_user,$db_pass) or die(\'Could not connect: \' . mysql_error());\r\nmysql_select_db($db_name,$conn) or die(\"La base no existe\");\r\n?>'),(2,1,'PHP Test','2015-04-17','1','1','1'),(3,2,'Test 2','2015-04-17','2342342342','2342342234','2323'),(4,1,'Test 3','2015-04-17','2323','2323','232323'),(5,1,'Test 4','2015-04-17','23423','234','234234  34234'),(6,1,'Test 5','2015-04-17','Elizabeth','elizabeth.tiscareno@gmail.com',''),(7,1,'Test 6','2015-04-18','Angel','Tiscareno','testteste\r\netst\r\nets\r\nastar\r\nasdf\r\nasdf\r\nasd\r\nfasd\r\nfa\r\nsdf\r\nasd\r\nfasd\r\nfas\r\ndfa\r\nsdf\r\nasd\r\nfasd\r\nfas\r\ndfa\r\nsdf'),(8,1,'Test 7','2015-04-18','Hazael Tiscareno','hazael.tiscareno@gmail.com','<?php\r\n?>'),(9,1,'Test 8','2015-04-18','fdghdfg','dfghdfgh','rtyerthdfghdfghdfghdf\r\nghdfg\r\nhdf\r\ngh\r\ndfg\r\nhd\r\nfgh\r\ndf\r\ngh\r\ndfg'),(10,1,'','2015-04-19','test','test','teetasfadf'),(11,4,'1234','2015-04-19','1234','1234',' Inserte codigo aqui'),(12,5,'234','2015-04-19','234','234',' Inserte codigo aqui'),(13,15,'PHP Completo 2','2015-04-19','23452345','2345',' Inserte codigo aqui'),(14,20,'097890','2015-04-19','7890','78907890',' Inserte codigo aqui');
/*!40000 ALTER TABLE `Codigo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Enviado`
--

DROP TABLE IF EXISTS `Enviado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Enviado` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Codigo` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Correo` varchar(75) NOT NULL,
  `Subscriptor` varchar(75) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Enviado`
--

LOCK TABLES `Enviado` WRITE;
/*!40000 ALTER TABLE `Enviado` DISABLE KEYS */;
INSERT INTO `Enviado` VALUES (1,1,'2015-04-18','gerardo_tisca@yahoo.com','Gerardo H Tiscareno'),(14,1,'2015-04-19','gerardo.tiscareno@gmail.com','Gerardo'),(15,1,'2015-04-19','angel.tiscareno@gmail.com','Angel'),(16,1,'2015-04-19','2','2'),(17,1,'2015-04-19','3333','333');
/*!40000 ALTER TABLE `Enviado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Lenguaje`
--

DROP TABLE IF EXISTS `Lenguaje`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Lenguaje` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=260 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Lenguaje`
--

LOCK TABLES `Lenguaje` WRITE;
/*!40000 ALTER TABLE `Lenguaje` DISABLE KEYS */;
INSERT INTO `Lenguaje` VALUES (1,'PHP'),(2,'C'),(3,'JAVA'),(4,'4th Dimension/4D'),(5,'ABAP'),(6,'ABC'),(7,'ActionScript'),(8,'Ada'),(9,'Agilent VEE'),(10,'Algol'),(11,'Alice'),(12,'Angelscript'),(13,'Apex'),(14,'APL'),(15,'AppleScript'),(16,'Arc'),(17,'Arduino'),(18,'ASP'),(19,'AspectJ'),(20,'Assembly'),(21,'ATLAS'),(22,'Augeas'),(23,'AutoHotkey'),(24,'AutoIt'),(25,'AutoLISP'),(26,'Automator'),(27,'Avenue'),(28,'Awk'),(29,'Bash'),(30,'(Visual) Basic'),(31,'bc'),(32,'BCPL'),(33,'BETA'),(34,'BlitzMax'),(35,'Boo'),(36,'Bourne Shell'),(37,'Bro'),(38,'C'),(39,'C Shell'),(40,'C#'),(41,'C++'),(42,'C++/CLI'),(43,'C-Omega'),(44,'Caml'),(45,'Ceylon'),(46,'CFML'),(47,'cg'),(48,'Ch'),(49,'CHILL'),(50,'CIL'),(51,'CL (OS/400)'),(52,'Clarion'),(53,'Clean'),(54,'Clipper'),(55,'Clojure'),(56,'CLU'),(57,'COBOL'),(58,'Cobra'),(59,'CoffeeScript'),(60,'ColdFusion'),(61,'COMAL'),(62,'Common Lisp'),(63,'Coq'),(64,'cT'),(65,'Curl'),(66,'D'),(67,'Dart'),(68,'DCL'),(69,'DCPU-16 ASM'),(70,'Delphi/Object Pascal'),(71,'DiBOL'),(72,'Dylan'),(73,'E'),(74,'eC'),(75,'Ecl'),(76,'ECMAScript'),(77,'EGL'),(78,'Eiffel'),(79,'Elixir'),(80,'Emacs Lisp'),(81,'Erlang'),(82,'Etoys'),(83,'Euphoria'),(84,'EXEC'),(85,'F#'),(86,'Factor'),(87,'Falcon'),(88,'Fancy'),(89,'Fantom'),(90,'Felix'),(91,'Forth'),(92,'Fortran'),(93,'Fortress'),(94,'(Visual) FoxPro'),(95,'Gambas'),(96,'GNU Octave'),(97,'Go'),(98,'Google AppsScript'),(99,'Gosu'),(100,'Groovy'),(101,'Haskell'),(102,'haXe'),(103,'Heron'),(104,'HPL'),(105,'HyperTalk'),(106,'Icon'),(107,'IDL'),(108,'Inform'),(109,'Informix-4GL'),(110,'INTERCAL'),(111,'Io'),(112,'Ioke'),(113,'J'),(114,'J#'),(115,'JADE'),(116,'Java'),(117,'Java FX Script'),(118,'JavaScript'),(119,'JScript'),(120,'JScript.NET'),(121,'Julia'),(122,'Korn Shell'),(123,'Kotlin'),(124,'LabVIEW'),(125,'Ladder Logic'),(126,'Lasso'),(127,'Limbo'),(128,'Lingo'),(129,'Lisp'),(130,'Logo'),(131,'Logtalk'),(132,'LotusScript'),(133,'LPC'),(134,'Lua'),(135,'Lustre'),(136,'M4'),(137,'MAD'),(138,'Magic'),(139,'Magik'),(140,'Malbolge'),(141,'MANTIS'),(142,'Maple'),(143,'Mathematica'),(144,'MATLAB'),(145,'Max/MSP'),(146,'MAXScript'),(147,'MEL'),(148,'Mercury'),(149,'Mirah'),(150,'Miva'),(151,'ML'),(152,'Monkey'),(153,'Modula-2'),(154,'Modula-3'),(155,'MOO'),(156,'Moto'),(157,'MS-DOS Batch'),(158,'MUMPS'),(159,'NATURAL'),(160,'Nemerle'),(161,'Nimrod'),(162,'NQC'),(163,'NSIS'),(164,'Nu'),(165,'NXT-G'),(166,'Oberon'),(167,'Object Rexx'),(168,'Objective-C'),(169,'Objective-J'),(170,'OCaml'),(171,'Occam'),(172,'ooc'),(173,'Opa'),(174,'OpenCL'),(175,'OpenEdge ABL'),(176,'OPL'),(177,'Oz'),(178,'Paradox'),(179,'Parrot'),(180,'Pascal'),(181,'Perl'),(182,'PHP'),(183,'Pike'),(184,'PILOT'),(185,'PL/I'),(186,'PL/SQL'),(187,'Pliant'),(188,'PostScript'),(189,'POV-Ray'),(190,'PowerBasic'),(191,'PowerScript'),(192,'PowerShell'),(193,'Processing'),(194,'Prolog'),(195,'Puppet'),(196,'Pure Data'),(197,'Python'),(198,'Q'),(199,'R'),(200,'Racket'),(201,'REALBasic'),(202,'REBOL'),(203,'Revolution'),(204,'REXX'),(205,'RPG (OS/400)'),(206,'Ruby'),(207,'Rust'),(208,'S'),(209,'S-PLUS'),(210,'SAS'),(211,'Sather'),(212,'Scala'),(213,'Scheme'),(214,'Scilab'),(215,'Scratch'),(216,'sed'),(217,'Seed7'),(218,'Self'),(219,'Shell'),(220,'SIGNAL'),(221,'Simula'),(222,'Simulink'),(223,'Slate'),(224,'Smalltalk'),(225,'Smarty'),(226,'SPARK'),(227,'SPSS'),(228,'SQR'),(229,'Squeak'),(230,'Squirrel'),(231,'Standard ML'),(232,'Suneido'),(233,'SuperCollider'),(234,'TACL'),(235,'Tcl'),(236,'Tex'),(237,'thinBasic'),(238,'TOM'),(239,'Transact-SQL'),(240,'Turing'),(241,'TypeScript'),(242,'Vala/Genie'),(243,'VBScript'),(244,'Verilog'),(245,'VHDL'),(246,'VimL'),(247,'Visual Basic .NET'),(248,'WebDNA'),(249,'Whitespace'),(250,'X10'),(251,'xBase'),(252,'XBase++'),(253,'Xen'),(254,'XPL'),(255,'XSLT'),(256,'XQuery'),(257,'yacc'),(258,'Yorick'),(259,'Z shell');
/*!40000 ALTER TABLE `Lenguaje` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-04-19 12:52:26
