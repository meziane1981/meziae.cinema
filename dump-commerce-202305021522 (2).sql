-- MariaDB dump 10.19  Distrib 10.6.12-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: commerce
-- ------------------------------------------------------
-- Server version	10.6.12-MariaDB-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `commerce`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `commerce` /*!40100 DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci */;

USE `commerce`;

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `adresse` varchar(45) DEFAULT NULL,
  `codepostal` varchar(45) DEFAULT NULL,
  `ville` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=214 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` VALUES (1,'Carre','Honoré','1, place Patrick Robert','29924','Masson'),(2,'Guibert','Philippe','boulevard Adrien Evrard','48 220','Rodrigues'),(3,'Leroux','Renée','772, chemin Thibaut Moreno','34896','Lesage'),(4,'Bourgeois','Emmanuel','rue de Pineau','84912','Evrard'),(5,'Fontaine','Gérard','228, rue Aubert','62388','Ferreira'),(6,'Daniel','Thibaut','118, boulevard de Renard','63 795','Caronboeuf'),(7,'Leconte','Martine','35, boulevard Meunier','23391','Pereira'),(8,'Marchal','Joséphine','27, rue Teixeira','51 143','Blin'),(9,'Renaud','David','69, impasse Rey','36977','Boyer'),(10,'Besson','Édith','rue de Clerc','15 800','Gilbert-la-Forêt'),(11,'Valentin','Juliette','871, avenue Richard','31062','Lebon-sur-Mary'),(12,'Blondel','Marine','915, rue de Robert','20 692','Humbert'),(13,'Fernandes','William','59, avenue Perret','68971','Perrin'),(14,'Lemonnier','Alexandrie','56, chemin Antoine','45 394','Maillard-la-Forêt'),(15,'Garnier','Denis','chemin Raymond Lebreton','18 921','Gilletdan'),(16,'Mercier','Jean','25, rue Auguste Diallo','54127','Baron'),(17,'Guillaume','Catherine','rue Fouquet','78549','Brunet'),(18,'Masson','Nicole','88, boulevard de Lebreton','93039','Marques'),(19,'Imbert','Augustin','24, boulevard Maury','13 672','Hameldan'),(20,'Lambert','Élise','28, chemin de Carlier','55 773','Roynec'),(21,'Klein','Marc','538, rue Fabre','63146','GuillonBourg'),(22,'Colin','Maurice','74, impasse Adrien Dumas','49 674','Ollivier'),(23,'Robert','Bertrand','4, rue Laetitia Gillet','97 960','Leblanc'),(24,'Fernandes','Corinne','81, impasse Moreau','50 413','Guyon'),(25,'Robert','Alfred','4, rue de Fernandez','62241','Moreno'),(26,'Schmitt','Bertrand','impasse Fabre','76 855','Guibert'),(27,'Leger','Arthur','place Barre','90 695','Robert'),(28,'Aubry','Alain','64, boulevard de Roche','86 417','Huet-sur-Fournier'),(29,'Schneider','Isaac','6, chemin Lebon','96 174','Mahe'),(30,'Ollivier','Noël','2, rue de Gomez','83 250','Etienne'),(31,'Pierre','Nicole','93, rue de Navarro','09214','Ollivier-sur-Bernard'),(32,'Julien','Honoré','733, rue Henriette Lambert','91 174','Texier-la-Forêt'),(33,'Legendre','Lucie','6, chemin Dupont','71166','Paul-sur-Petit'),(34,'Navarro','Maggie','8, impasse de Martinez','84 545','Georges'),(35,'Duhamel','Richard','1, impasse Leveque','33520','Hebert-la-Forêt'),(36,'Brunel','Léon','1, boulevard de Blanchet','86521','Dos Santos-sur-Teixeira'),(37,'Marion','Claudine','177, rue de Bonnin','23243','Dos Santos-sur-Alexandre'),(38,'Chauveau','Zoé','746, boulevard Laurent Petit','57702','Cousin-les-Bains'),(39,'Prevost','Laurent','69, chemin Rousseau','29769','Seguin'),(40,'Huet','Alain','impasse de Marques','91 562','Renaud'),(41,'Blanchard','Claude','4, rue Chauvet','49 248','Dupre'),(42,'Martineau','Anaïs','chemin Clémence Dumont','73913','Chevalliernec'),(43,'Meunier','Paul','rue de Paris','07 753','Renaud-sur-Evrard'),(44,'Cousin','André','4, rue Marcelle Nguyen','88 521','Petitjeannec'),(45,'Becker','Alice','74, avenue Leclerc','74 959','Durand'),(46,'Payet','Jules','33, place Barbe','52030','Toulon'),(47,'Lejeune','Pénélope','99, chemin Émilie Cousin','49001','Toulon'),(48,'Schmitt','Lorraine','284, impasse de Ribeiro','17172','Toulon'),(49,'Langlois','Isaac','22, place Yves Regnier','55248','Chevalierboeuf'),(50,'Mallet','Patrick','89, boulevard de Gregoire','41 913','Toulon'),(51,'Hamel','Éric','729, rue Carre','05 434','Collin'),(52,'Marchal','Léon','impasse de Pascal','05 683','Leclercdan'),(53,'Moreau','Andrée','7, boulevard Thibault Rolland','70 730','Le Rouxboeuf'),(54,'Laporte','David','2, chemin Zoé Bonnin','87009','Lefebvre'),(55,'Legros','Jean','7, rue Benard','04128','Toulon'),(56,'Bernard','Claude','boulevard de Leroy','93 724','Baudry'),(57,'Pires','Gabrielle','88, place de Rey','04 104','Ledouxdan'),(58,'Payet','Victoire','boulevard Marine Vaillant','84951','Buisson'),(59,'Mace','Claude','31, chemin de Perez','48372','Julien-sur-Poirier'),(60,'Guyot','Thérèse','56, boulevard Fleury','62182','Toulon'),(61,'Allain','Julien','64, rue de Renault','23 511','Delaunay'),(62,'Salmon','Paulette','400, rue de Gauthier','68 030','Toulon'),(63,'Chretien','Benjamin','1, place Bouvier','99472','Toulon'),(64,'Courtois','Augustin','35, place Océane Lemaitre','60646','BlinVille'),(66,'Brun','Guillaume','6, boulevard Raymond Bertin','41057','Toulon'),(67,'Chauveau','Robert','68, chemin Clerc','19164','Bourdon-sur-Colas'),(68,'Pelletier','Virginie','7, rue de Le Goff','88 863','Bailly'),(69,'Ferrand','Suzanne','539, avenue Meyer','10369','Torres'),(70,'Gomez','Michèle','1, boulevard Roche','77037','Muller-sur-Carre'),(71,'Philippe','Jean','23 rue eee','77760','Rouen'),(72,'Carre','Honoré','1, place Patrick Robert','29924','Masson'),(73,'Guibert','Philippe','boulevard Adrien Evrard','48 220','Rodrigues'),(74,'Leroux','Renée','772, chemin Thibaut Moreno','34896','Lesage'),(75,'Bourgeois','Emmanuel','rue de Pineau','84912','Evrard'),(76,'Fontaine','Gérard','228, rue Aubert','62388','Ferreira'),(77,'Daniel','Thibaut','118, boulevard de Renard','63 795','Caronboeuf'),(78,'Leconte','Martine','35, boulevard Meunier','23391','Pereira'),(79,'Marchal','Joséphine','27, rue Teixeira','51 143','Blin'),(80,'Renaud','David','69, impasse Rey','36977','Boyer'),(81,'Besson','Édith','rue de Clerc','15 800','Gilbert-la-Forêt'),(82,'Valentin','Juliette','871, avenue Richard','31062','Lebon-sur-Mary'),(83,'Blondel','Marine','915, rue de Robert','20 692','Humbert'),(84,'Fernandes','William','59, avenue Perret','68971','Perrin'),(85,'Lemonnier','Alexandrie','56, chemin Antoine','45 394','Maillard-la-Forêt'),(86,'Garnier','Denis','chemin Raymond Lebreton','18 921','Gilletdan'),(87,'Mercier','Jean','25, rue Auguste Diallo','54127','Baron'),(88,'Guillaume','Catherine','rue Fouquet','78549','Brunet'),(89,'Masson','Nicole','88, boulevard de Lebreton','93039','Marques'),(90,'Imbert','Augustin','24, boulevard Maury','13 672','Hameldan'),(91,'Lambert','Élise','28, chemin de Carlier','55 773','Roynec'),(92,'Klein','Marc','538, rue Fabre','63146','GuillonBourg'),(93,'Colin','Maurice','74, impasse Adrien Dumas','49 674','Ollivier'),(94,'Robert','Bertrand','4, rue Laetitia Gillet','97 960','Leblanc'),(95,'Fernandes','Corinne','81, impasse Moreau','50 413','Guyon'),(96,'Robert','Alfred','4, rue de Fernandez','62241','Moreno'),(97,'Schmitt','Bertrand','impasse Fabre','76 855','Guibert'),(98,'Leger','Arthur','place Barre','90 695','Robert'),(99,'Aubry','Alain','64, boulevard de Roche','86 417','Huet-sur-Fournier'),(100,'Schneider','Isaac','6, chemin Lebon','96 174','Mahe'),(101,'Ollivier','Noël','2, rue de Gomez','83 250','Etienne'),(102,'Pierre','Nicole','93, rue de Navarro','09214','Ollivier-sur-Bernard'),(103,'Julien','Honoré','733, rue Henriette Lambert','91 174','Texier-la-Forêt'),(104,'Legendre','Lucie','6, chemin Dupont','71166','Paul-sur-Petit'),(105,'Navarro','Maggie','8, impasse de Martinez','84 545','Georges'),(106,'Duhamel','Richard','1, impasse Leveque','33520','Hebert-la-Forêt'),(107,'Brunel','Léon','1, boulevard de Blanchet','86521','Dos Santos-sur-Teixeira'),(108,'Marion','Claudine','177, rue de Bonnin','23243','Dos Santos-sur-Alexandre'),(109,'Chauveau','Zoé','746, boulevard Laurent Petit','57702','Cousin-les-Bains'),(110,'Prevost','Laurent','69, chemin Rousseau','29769','Seguin'),(111,'Huet','Alain','impasse de Marques','91 562','Renaud'),(112,'Blanchard','Claude','4, rue Chauvet','49 248','Dupre'),(113,'Martineau','Anaïs','chemin Clémence Dumont','73913','Chevalliernec'),(114,'Meunier','Paul','rue de Paris','07 753','Renaud-sur-Evrard'),(115,'Cousin','André','4, rue Marcelle Nguyen','88 521','Petitjeannec'),(116,'Becker','Alice','74, avenue Leclerc','74 959','Durand'),(117,'Payet','Jules','33, place Barbe','52030','Toulon'),(118,'Lejeune','Pénélope','99, chemin Émilie Cousin','49001','Toulon'),(119,'Schmitt','Lorraine','284, impasse de Ribeiro','17172','Toulon'),(120,'Langlois','Isaac','22, place Yves Regnier','55248','Chevalierboeuf'),(121,'Mallet','Patrick','89, boulevard de Gregoire','41 913','Toulon'),(122,'Hamel','Éric','729, rue Carre','05 434','Collin'),(123,'Marchal','Léon','impasse de Pascal','05 683','Leclercdan'),(124,'Moreau','Andrée','7, boulevard Thibault Rolland','70 730','Le Rouxboeuf'),(125,'Laporte','David','2, chemin Zoé Bonnin','87009','Lefebvre'),(126,'Legros','Jean','7, rue Benard','04128','Toulon'),(127,'Bernard','Claude','boulevard de Leroy','93 724','Baudry'),(128,'Pires','Gabrielle','88, place de Rey','04 104','Ledouxdan'),(129,'Payet','Victoire','boulevard Marine Vaillant','84951','Buisson'),(130,'Mace','Claude','31, chemin de Perez','48372','Julien-sur-Poirier'),(131,'Guyot','Thérèse','56, boulevard Fleury','62182','Toulon'),(132,'Allain','Julien','64, rue de Renault','23 511','Delaunay'),(133,'Salmon','Paulette','400, rue de Gauthier','68 030','Toulon'),(134,'Chretien','Benjamin','1, place Bouvier','99472','Toulon'),(135,'Courtois','Augustin','35, place Océane Lemaitre','60646','BlinVille'),(136,'Torres','Virginie','2 place de l\' eglise','93100','Pantin'),(137,'Brun','Guillaume','6, boulevard Raymond Bertin','41057','Toulon'),(138,'Chauveau','Robert','68, chemin Clerc','19164','Bourdon-sur-Colas'),(139,'Pelletier','Virginie','7, rue de Le Goff','88 863','Bailly'),(140,'Ferrand','Suzanne','539, avenue Meyer','10369','Torres'),(141,'Gomez','Michèle','1, boulevard Roche','77037','Muller-sur-Carre'),(142,'Philippe','Jean','23 rue eee','77760','Rouen'),(143,'Carre','Honoré','1, place Patrick Robert','29924','Masson'),(144,'Guibert','Philippe','boulevard Adrien Evrard','48 220','Rodrigues'),(145,'Leroux','Renée','772, chemin Thibaut Moreno','34896','Lesage'),(146,'Bourgeois','Emmanuel','rue de Pineau','84912','Evrard'),(147,'Fontaine','Gérard','228, rue Aubert','62388','Ferreira'),(148,'Daniel','Thibaut','118, boulevard de Renard','63 795','Caronboeuf'),(149,'Leconte','Martine','35, boulevard Meunier','23391','Pereira'),(150,'Marchal','Joséphine','27, rue Teixeira','51 143','Blin'),(151,'Renaud','David','69, impasse Rey','36977','Boyer'),(152,'Besson','Édith','rue de Clerc','15 800','Gilbert-la-Forêt'),(153,'Valentin','Juliette','871, avenue Richard','31062','Lebon-sur-Mary'),(154,'Blondel','Marine','915, rue de Robert','20 692','Humbert'),(155,'Fernandes','William','59, avenue Perret','68971','Perrin'),(156,'Lemonnier','Alexandrie','56, chemin Antoine','45 394','Maillard-la-Forêt'),(157,'Garnier','Denis','chemin Raymond Lebreton','18 921','Gilletdan'),(158,'Mercier','Jean','25, rue Auguste Diallo','54127','Baron'),(159,'Guillaume','Catherine','rue Fouquet','78549','Brunet'),(160,'Masson','Nicole','88, boulevard de Lebreton','93039','Marques'),(161,'Imbert','Augustin','24, boulevard Maury','13 672','Hameldan'),(162,'Lambert','Élise','28, chemin de Carlier','55 773','Roynec'),(163,'Klein','Marc','538, rue Fabre','63146','GuillonBourg'),(164,'Colin','Maurice','74, impasse Adrien Dumas','49 674','Ollivier'),(165,'Robert','Bertrand','4, rue Laetitia Gillet','97 960','Leblanc'),(166,'Fernandes','Corinne','81, impasse Moreau','50 413','Guyon'),(167,'Robert','Alfred','4, rue de Fernandez','62241','Moreno'),(168,'Schmitt','Bertrand','impasse Fabre','76 855','Guibert'),(169,'Leger','Arthur','place Barre','90 695','Robert'),(170,'Aubry','Alain','64, boulevard de Roche','86 417','Huet-sur-Fournier'),(171,'Schneider','Isaac','6, chemin Lebon','96 174','Mahe'),(172,'Ollivier','Noël','2, rue de Gomez','83 250','Etienne'),(173,'Pierre','Nicole','93, rue de Navarro','09214','Ollivier-sur-Bernard'),(174,'Julien','Honoré','733, rue Henriette Lambert','91 174','Texier-la-Forêt'),(175,'Legendre','Lucie','6, chemin Dupont','71166','Paul-sur-Petit'),(176,'Navarro','Maggie','8, impasse de Martinez','84 545','Georges'),(177,'Duhamel','Richard','1, impasse Leveque','33520','Hebert-la-Forêt'),(178,'Brunel','Léon','1, boulevard de Blanchet','86521','Dos Santos-sur-Teixeira'),(179,'Marion','Claudine','177, rue de Bonnin','23243','Dos Santos-sur-Alexandre'),(180,'Chauveau','Zoé','746, boulevard Laurent Petit','57702','Cousin-les-Bains'),(181,'Prevost','Laurent','69, chemin Rousseau','29769','Seguin'),(182,'Huet','Alain','impasse de Marques','91 562','Renaud'),(183,'Blanchard','Claude','4, rue Chauvet','49 248','Dupre'),(184,'Martineau','Anaïs','chemin Clémence Dumont','73913','Chevalliernec'),(185,'Meunier','Paul','rue de Paris','07 753','Renaud-sur-Evrard'),(186,'Cousin','André','4, rue Marcelle Nguyen','88 521','Petitjeannec'),(187,'Becker','Alice','74, avenue Leclerc','74 959','Durand'),(188,'Payet','Jules','33, place Barbe','52030','Toulon'),(189,'Lejeune','Pénélope','99, chemin Émilie Cousin','49001','Toulon'),(190,'Schmitt','Lorraine','284, impasse de Ribeiro','17172','Toulon'),(191,'Langlois','Isaac','22, place Yves Regnier','55248','Chevalierboeuf'),(192,'Mallet','Patrick','89, boulevard de Gregoire','41 913','Toulon'),(193,'Hamel','Éric','729, rue Carre','05 434','Collin'),(194,'Marchal','Léon','impasse de Pascal','05 683','Leclercdan'),(195,'Moreau','Andrée','7, boulevard Thibault Rolland','70 730','Le Rouxboeuf'),(196,'Laporte','David','2, chemin Zoé Bonnin','87009','Lefebvre'),(197,'Legros','Jean','7, rue Benard','04128','Toulon'),(198,'Bernard','Claude','boulevard de Leroy','93 724','Baudry'),(199,'Pires','Gabrielle','88, place de Rey','04 104','Ledouxdan'),(200,'Payet','Victoire','boulevard Marine Vaillant','84951','Buisson'),(201,'Mace','Claude','31, chemin de Perez','48372','Julien-sur-Poirier'),(202,'Guyot','Thérèse','56, boulevard Fleury','62182','Toulon'),(203,'Allain','Julien','64, rue de Renault','23 511','Delaunay'),(204,'Salmon','Paulette','400, rue de Gauthier','68 030','Toulon'),(205,'Chretien','Benjamin','1, place Bouvier','99472','Toulon'),(206,'Courtois','Augustin','35, place Océane Lemaitre','60646','BlinVille'),(208,'Brun','Guillaume','6, boulevard Raymond Bertin','41057','Toulon'),(209,'Chauveau','Robert','68, chemin Clerc','19164','Bourdon-sur-Colas'),(210,'Pelletier','Virginie','7, rue de Le Goff','88 863','Bailly'),(211,'Ferrand','Suzanne','539, avenue Meyer','10369','Torres'),(212,'Gomez','Michèle','1, boulevard Roche','77037','Muller-sur-Carre'),(213,'Philippe','Jean','23 rue eee','77760','Rouen');
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client_has_livraison`
--

DROP TABLE IF EXISTS `client_has_livraison`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client_has_livraison` (
  `id_client` int(11) NOT NULL,
  `id_livraison` int(11) NOT NULL,
  KEY `client_has_livraison_FK` (`id_client`),
  KEY `client_has_livraison_FK_1` (`id_livraison`),
  CONSTRAINT `client_has_livraison_FK` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  CONSTRAINT `client_has_livraison_FK_1` FOREIGN KEY (`id_livraison`) REFERENCES `livraison` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client_has_livraison`
--

LOCK TABLES `client_has_livraison` WRITE;
/*!40000 ALTER TABLE `client_has_livraison` DISABLE KEYS */;
INSERT INTO `client_has_livraison` VALUES (23,2),(27,2),(3,1),(40,2),(45,3),(46,4),(55,2);
/*!40000 ALTER TABLE `client_has_livraison` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commande`
--

DROP TABLE IF EXISTS `commande`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL,
  `valide` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_commande`),
  KEY `fk_commande_client_idx` (`id_client`),
  CONSTRAINT `fk_commande_client` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commande`
--

LOCK TABLES `commande` WRITE;
/*!40000 ALTER TABLE `commande` DISABLE KEYS */;
INSERT INTO `commande` VALUES (1,'1985-02-13 02:50:52',9,1),(2,'1987-05-17 11:09:57',33,0),(3,'2017-05-02 04:08:02',37,1),(4,'1997-05-18 22:43:40',50,0),(5,'2008-07-12 21:36:21',45,0),(6,'1971-02-19 17:08:32',57,1),(7,'1994-03-16 14:05:09',33,0),(8,'2003-05-08 06:52:13',22,1),(9,'2018-05-21 20:12:22',31,0),(10,'2011-10-01 18:25:50',12,1),(11,'1986-01-02 15:52:28',66,1),(12,'1979-02-23 01:36:52',48,1),(13,'2019-04-28 20:00:42',60,1),(14,'1998-07-04 21:52:41',3,1),(15,'2013-01-27 13:43:44',13,0),(16,'1989-05-27 12:41:58',13,1),(17,'2010-04-23 06:36:58',31,1),(18,'1978-10-28 13:46:44',31,1),(19,'1971-03-31 12:38:26',47,1),(20,'2016-11-16 20:29:57',35,1),(21,'2017-04-02 08:35:21',5,1),(22,'2018-01-19 05:38:43',45,1),(23,'2013-12-14 07:54:54',9,1),(24,'1972-12-01 21:21:34',15,1),(25,'2001-09-12 03:04:28',21,1),(26,'1974-07-17 22:31:53',33,1),(27,'2017-09-24 21:53:46',51,1),(28,'1972-03-13 10:46:38',67,1),(29,'2006-12-17 02:47:50',34,1),(30,'2012-12-01 04:15:20',1,0),(31,'1994-04-29 03:14:37',57,1),(32,'1986-08-16 02:44:35',59,1),(33,'1979-11-07 11:00:21',13,1),(34,'2006-06-08 18:23:09',33,1),(35,'1988-05-22 21:07:13',40,1),(36,'1985-05-25 07:23:38',17,1),(37,'2005-12-29 08:13:48',25,1),(38,'2004-06-12 23:09:24',39,1),(39,'1981-08-17 18:41:59',30,1),(40,'1970-05-20 22:42:14',70,1),(41,'2016-10-05 13:24:56',70,1),(42,'1981-05-07 15:42:26',46,1),(43,'2015-04-03 02:29:30',38,1),(44,'1982-03-02 23:29:05',64,1),(45,'1974-03-30 10:21:45',68,1),(46,'1973-02-14 10:21:54',55,1),(47,'1973-05-26 02:22:56',23,1),(48,'1975-10-09 02:11:22',58,1),(49,'2020-01-30 17:53:48',28,1),(50,'1980-12-01 00:13:26',57,1),(51,'1980-12-16 20:30:08',31,1),(52,'1977-03-31 16:44:05',45,1),(53,'1970-06-22 06:45:10',56,1),(54,'1984-11-29 07:59:57',31,1),(55,'2006-05-06 17:35:58',66,0),(56,'1980-09-15 07:01:12',25,1),(57,'1971-04-19 05:32:41',49,1),(58,'2007-05-02 04:03:16',49,1),(59,'1970-05-17 02:02:44',31,1),(60,'1979-09-19 07:56:11',22,0),(61,'1994-10-01 18:10:34',32,1),(62,'2010-05-18 06:23:25',31,1),(63,'1992-07-06 08:02:58',22,1),(64,'1976-07-21 05:31:50',27,1),(65,'2011-07-18 00:41:05',35,1),(66,'1987-07-24 15:33:10',62,1),(67,'2001-02-03 23:30:05',32,1),(68,'2012-12-22 13:06:43',63,1),(69,'1989-08-09 10:59:57',33,1),(70,'2017-04-01 18:08:15',53,1);
/*!40000 ALTER TABLE `commande` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commande_has_produit`
--

DROP TABLE IF EXISTS `commande_has_produit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `commande_has_produit` (
  `commande_id_commande` int(11) NOT NULL,
  `produit_id_produit` int(11) NOT NULL,
  PRIMARY KEY (`commande_id_commande`,`produit_id_produit`),
  KEY `fk_commande_has_produit_produit1_idx` (`produit_id_produit`),
  KEY `fk_commande_has_produit_commande1_idx` (`commande_id_commande`),
  CONSTRAINT `fk_commande_has_produit_commande1` FOREIGN KEY (`commande_id_commande`) REFERENCES `commande` (`id_commande`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_commande_has_produit_produit1` FOREIGN KEY (`produit_id_produit`) REFERENCES `produit` (`id_produit`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commande_has_produit`
--

LOCK TABLES `commande_has_produit` WRITE;
/*!40000 ALTER TABLE `commande_has_produit` DISABLE KEYS */;
INSERT INTO `commande_has_produit` VALUES (3,24),(3,26),(9,1),(21,1),(21,24),(27,26);
/*!40000 ALTER TABLE `commande_has_produit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `livraison`
--

DROP TABLE IF EXISTS `livraison`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `livraison` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomlivraison` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `livraison`
--

LOCK TABLES `livraison` WRITE;
/*!40000 ALTER TABLE `livraison` DISABLE KEYS */;
INSERT INTO `livraison` VALUES (1,'Colisimo'),(2,'Chronopost'),(3,'UPS'),(4,'TNT'),(5,'GLS');
/*!40000 ALTER TABLE `livraison` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produit`
--

DROP TABLE IF EXISTS `produit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `nom_produit` varchar(45) DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id_produit`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produit`
--

LOCK TABLES `produit` WRITE;
/*!40000 ALTER TABLE `produit` DISABLE KEYS */;
INSERT INTO `produit` VALUES (1,'Lecteur blu-Ray 4K Samsung',199.00),(2,'iPhone 3GS',524.23),(3,'Incredible Copper Car',113.64),(4,'Aerodynamic Aluminum Coat',114.48),(5,'100 DVD vierge',29.99),(6,'Small Rubber Gloves',428.98),(7,'iPhone 8 / 8 Plus',63.10),(8,'iPhone 5C',469.98),(9,'Intelligent Steel Gloves',467.92),(10,'iPhone 5C',318.48),(11,'iPhone 7 / 7 Plus',196.29),(12,'Mediocre Leather Gloves',10.52),(13,'iPhone 8 / 8 Plus',157.53),(14,'iPhone 8 / 8 Plus',295.63),(15,'Durable Wooden Gloves',552.20),(16,'Aerodynamic Aluminum Coat',506.48),(17,'Practical Paper Chair',455.59),(18,'Fantastic Granite Bench',107.92),(19,'iPhone 5C',577.32),(20,'Mediocre Leather Gloves',115.38),(21,'Small Rubber Gloves',83.67),(22,'iPhone 7 / 7 Plus',68.80),(23,'Durable Wooden Gloves',483.38),(24,'Lecteur blu-Ray 4K Samsung',199.00),(25,'Aerodynamic Leather Computer',236.08),(26,'Lecteur blu-Ray 4K Samsung',199.00),(27,'iPhone 3GS',391.58),(28,'Lecteur blu-Ray 4K Samsung',199.00),(29,'Lecteur blu-Ray 4K Samsung',199.00),(30,'Ergonomic Leather Knife',540.79),(31,'Durable Wooden Gloves',187.03),(32,'Mediocre Cotton Pants',350.61),(33,'Fantastic Granite Bench',169.58),(34,'Aerodynamic Aluminum Coat',482.38),(35,'Lightweight Marble Knife',329.87),(36,'Enormous Linen Plate',576.33),(37,'Lecteur blu-Ray 4K Samsung',199.00),(38,'Small Bronze Hat',87.38),(39,'iPhone 8 / 8 Plus',230.99),(40,'Intelligent Steel Gloves',233.19),(41,'Lightweight Iron Car',408.01),(42,'iPhone 8 / 8 Plus',433.69),(43,'Mediocre Wooden Lamp',116.00),(44,'Aerodynamic Leather Computer',91.46),(45,'Fantastic Granite Bench',478.83),(46,'iPhone 3GS',420.33),(47,'iPhone 8 / 8 Plus',355.75),(48,'Aerodynamic Aluminum Coat',217.00),(49,'iPhone 3GS',145.49),(50,'Small Bronze Hat',212.92),(51,'iPhone 5C',206.95),(52,'iPhone 5C',352.54),(53,'Sleek Copper Hat',307.88),(54,'Practical Paper Chair',489.98),(55,'Incredible Copper Car',407.96),(56,'Incredible Copper Car',485.28),(57,'Durable Wooden Gloves',551.71),(58,'iPhone 8 / 8 Plus',560.42),(59,'Mediocre Wooden Lamp',538.95),(60,'Lightweight Marble Knife',285.23),(61,'Mediocre Leather Gloves',459.51),(62,'100 DVD vierge',29.99),(63,'100 DVD vierge',29.99),(64,'Aerodynamic Aluminum Coat',164.35),(65,'Practical Paper Chair',227.97),(66,'Small Rubber Gloves',551.16),(67,'Sleek Steel Bag',37.49),(68,'Lightweight Leather Keyboard',30.31),(69,'iPhone 4',166.28),(70,'Ergonomic Leather Knife',403.21),(71,'smartphone Xiaomi MI9',180.00),(72,'Box TV Android',110.00);
/*!40000 ALTER TABLE `produit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'commerce'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-02 15:22:03
