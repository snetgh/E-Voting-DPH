-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: localhost    Database: donkor_hospital
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.18.04.2

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
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departments` (
  `staff_department_id` int(50) NOT NULL AUTO_INCREMENT,
  `staff_department` varchar(60) NOT NULL,
  PRIMARY KEY (`staff_department_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` VALUES (1,'Administration'),(2,'Accounts'),(3,'Internal Audit'),(4,'Laboratory'),(5,'X-Ray'),(6,'OPD'),(7,'Revenue'),(8,'Health Insurance'),(9,'Casualty'),(10,'Theatre'),(11,'Records'),(12,'Pharmacy'),(13,'Stores'),(14,'Procurement'),(15,'Laundry'),(16,'Maternity'),(17,'Female/Kids '),(18,'Male Medical/VIP'),(19,'Maintenance'),(20,'Security'),(21,'Mortuary'),(22,'Transport'),(23,'Dental'),(24,'Eye'),(25,'Psychiatry'),(26,'Disease Control'),(27,'ART'),(28,'I.T');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nominees`
--

DROP TABLE IF EXISTS `nominees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nominees` (
  `nominee_id` int(100) NOT NULL AUTO_INCREMENT,
  `nominee_name` varchar(60) NOT NULL,
  `nominee_department` int(10) NOT NULL,
  `nominee_rank` int(10) NOT NULL,
  `nominee_contact` varchar(20) NOT NULL,
  `elector_1_name` varchar(60) NOT NULL,
  `elector_1_contact` varchar(20) NOT NULL,
  `elector_1_department` int(10) NOT NULL,
  `elector_1_rank` int(10) NOT NULL,
  `elector_2_name` varchar(60) NOT NULL,
  `elector_2_contact` varchar(20) NOT NULL,
  `elector_2_department` int(10) NOT NULL,
  `elector_2_rank` int(10) NOT NULL,
  `nominee_representative` varchar(60) NOT NULL,
  `creation_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`nominee_id`),
  KEY `nominee_department` (`nominee_department`),
  KEY `nominee_rank` (`nominee_rank`),
  KEY `elector_1_department` (`elector_1_department`),
  KEY `elector_1_rank` (`elector_1_rank`),
  KEY `elector_2_department` (`elector_2_department`),
  KEY `elector_2_rank` (`elector_2_rank`),
  CONSTRAINT `nominees_ibfk_1` FOREIGN KEY (`nominee_department`) REFERENCES `departments` (`staff_department_id`),
  CONSTRAINT `nominees_ibfk_2` FOREIGN KEY (`nominee_rank`) REFERENCES `ranks` (`staff_rank_id`),
  CONSTRAINT `nominees_ibfk_3` FOREIGN KEY (`elector_1_department`) REFERENCES `departments` (`staff_department_id`),
  CONSTRAINT `nominees_ibfk_4` FOREIGN KEY (`elector_1_rank`) REFERENCES `ranks` (`staff_rank_id`),
  CONSTRAINT `nominees_ibfk_5` FOREIGN KEY (`elector_2_department`) REFERENCES `departments` (`staff_department_id`),
  CONSTRAINT `nominees_ibfk_6` FOREIGN KEY (`elector_2_rank`) REFERENCES `ranks` (`staff_rank_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nominees`
--

LOCK TABLES `nominees` WRITE;
/*!40000 ALTER TABLE `nominees` DISABLE KEYS */;
INSERT INTO `nominees` VALUES (1,'petrerq',2,1,'6767','jhhjh','565656',13,37,'hhjhjh','56565',12,35,'peterdonk','2019-01-22 15:24:03'),(2,'Peter Donkor',2,13,'0552513405','John Doe','0244037473',1,3,'Sammy Forson','02222222222',23,13,'Petro','2019-01-22 16:04:38');
/*!40000 ALTER TABLE `nominees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ranks`
--

DROP TABLE IF EXISTS `ranks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ranks` (
  `staff_rank_id` int(50) NOT NULL AUTO_INCREMENT,
  `staff_ranks` varchar(60) NOT NULL,
  PRIMARY KEY (`staff_rank_id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ranks`
--

LOCK TABLES `ranks` WRITE;
/*!40000 ALTER TABLE `ranks` DISABLE KEYS */;
INSERT INTO `ranks` VALUES (1,'Enrolled Nurse'),(2,'Staff Midwife'),(3,'Bio-Statistics Assistant'),(4,'Nutrition Officer'),(5,'Dispensing Assistant'),(6,'Senior Hospital orderly/Senior Hostel Orderly'),(7,'Senior Supply Manager'),(8,'Pharmacy Technician'),(9,'Nursing Officer'),(10,'Field Technician'),(11,'Deputy Chief Accountant'),(12,'Stenographer Secretary'),(13,'Principal Accountant Officer'),(14,'Senior Health Assistant'),(15,'Principal Health Assistant'),(16,'Principal Artisan'),(17,'Chief Technical Officer (Bio/Info/Disease Control)'),(18,'Head Hospital orderly/Head Hostel Orderly'),(19,'Chief Conservancy Labourer'),(20,'Labourer'),(21,'Senior Leading Launderer'),(22,'Principal Catering Officer'),(23,'Principal Security Guard'),(24,'Senior Accountant'),(25,'Senior Staff Nurse'),(26,'Principal Driver/Senior Coxswain'),(27,'Deputy Chief Clinical Engineering Manager'),(28,'Senior Bio-Statistics Assistant'),(29,'Principal Receptionist/Telephonist'),(30,'Supt. Laboratory Assistant'),(31,'Principal Technician Ass./Darkroom Ass. (X-Ray)'),(32,'Deputy Chief Bio-Statistics Officer'),(33,'Physician Assistant '),(34,'Specialist'),(35,'Midwifery Officer'),(36,'Senior Medical Officer'),(37,'Principal Community Health Nurse'),(38,'Deputy Chief Health Service Administrator'),(39,'Senior Dental Technician'),(40,'Senior Field Technician '),(41,'Senior Pharmacist'),(42,'Senior Technical Assistant'),(43,'Senior Medical Assistant'),(44,'Senior Technical Officer'),(45,'Senior Technical Officer (Lab/X-Ray/Orth)'),(46,'Community Health Nurse');
/*!40000 ALTER TABLE `ranks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reg_tbl_login`
--

DROP TABLE IF EXISTS `reg_tbl_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reg_tbl_login` (
  `reg_user_id` int(50) NOT NULL AUTO_INCREMENT,
  `reg_user_name` varchar(50) NOT NULL,
  `reg_user_username` varchar(50) NOT NULL,
  `reg_user_password` mediumtext NOT NULL,
  `reg_user_status` int(10) NOT NULL,
  `reg_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`reg_user_id`),
  KEY `reg_user_status` (`reg_user_status`),
  CONSTRAINT `reg_tbl_login_ibfk_1` FOREIGN KEY (`reg_user_status`) REFERENCES `tbl_user_status` (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reg_tbl_login`
--

LOCK TABLES `reg_tbl_login` WRITE;
/*!40000 ALTER TABLE `reg_tbl_login` DISABLE KEYS */;
INSERT INTO `reg_tbl_login` VALUES (1,'Stephen Kwabena','stephen','$2y$10$sgxDYRiL6B8NrzS/gMMiTek7O5O0hANfUAPfGk6SXncn/syH6S5xK',1,'2019-02-06 11:07:24'),(2,'Prince','prince','$2y$10$GYC9IV9UPy/vnxrQESWqnOKByPQ25zCNn7LgzHAk4AZWmCrhjS7qq',2,'2019-02-06 11:08:27');
/*!40000 ALTER TABLE `reg_tbl_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_candidates`
--

DROP TABLE IF EXISTS `tbl_candidates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_candidates` (
  `candidate_id` int(100) NOT NULL AUTO_INCREMENT,
  `candidate_name` varchar(50) NOT NULL,
  `candidate_picture` mediumtext NOT NULL,
  `candidate_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`candidate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_candidates`
--

LOCK TABLES `tbl_candidates` WRITE;
/*!40000 ALTER TABLE `tbl_candidates` DISABLE KEYS */;
INSERT INTO `tbl_candidates` VALUES (1,'ABDUL MALIK TANKO','scan0002.jpg','2019-02-06 11:12:48'),(2,'SAFO GEORGE','scan0001.jpg','2019-02-06 11:13:02');
/*!40000 ALTER TABLE `tbl_candidates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user_status`
--

DROP TABLE IF EXISTS `tbl_user_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user_status` (
  `status_id` int(50) NOT NULL AUTO_INCREMENT,
  `status_name` varchar(50) NOT NULL,
  `status_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user_status`
--

LOCK TABLES `tbl_user_status` WRITE;
/*!40000 ALTER TABLE `tbl_user_status` DISABLE KEYS */;
INSERT INTO `tbl_user_status` VALUES (1,'Admin','2019-02-02 21:03:41'),(2,'E.C. Official ','2019-02-02 21:03:41');
/*!40000 ALTER TABLE `tbl_user_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_voters_list`
--

DROP TABLE IF EXISTS `tbl_voters_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_voters_list` (
  `voters_id` int(50) NOT NULL AUTO_INCREMENT,
  `voters_name` varchar(50) NOT NULL,
  `voters_code` varchar(50) NOT NULL,
  `voters_code_allow` tinyint(1) NOT NULL DEFAULT '0',
  `voters_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`voters_id`)
) ENGINE=InnoDB AUTO_INCREMENT=269 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_voters_list`
--

LOCK TABLES `tbl_voters_list` WRITE;
/*!40000 ALTER TABLE `tbl_voters_list` DISABLE KEYS */;
INSERT INTO `tbl_voters_list` VALUES (3,'Abankwa Princeworth','0',0,'2019-02-06 10:37:28'),(4,'Abdul  Malik Tanko','0',0,'2019-02-06 10:37:28'),(5,'Abdul-Fatawu Mashoud','0',0,'2019-02-06 10:37:28'),(6,'Aboagyewaa Angela D','0',0,'2019-02-06 10:37:28'),(7,'Abrakwa Peter','0',0,'2019-02-06 10:37:28'),(8,'Abrokwa Emmanuel','0',0,'2019-02-06 10:37:28'),(9,'Abu Rubabatu','0',0,'2019-02-06 10:37:28'),(10,'Abukari Mohammed','0',0,'2019-02-06 10:37:28'),(11,'Achiaa Phyllis Ataa','0',0,'2019-02-06 10:37:28'),(12,'Achinah Anabel Appiah','0',0,'2019-02-06 10:37:28'),(13,'Addae Jacinta','0',0,'2019-02-06 10:37:28'),(14,'Addae-Kagyah Rosemary','0',0,'2019-02-06 10:37:28'),(15,'Addo Kofi','0',0,'2019-02-06 10:37:28'),(16,'Adekemah Priscilla A','0',0,'2019-02-06 10:37:28'),(17,'Adelayitar Portia','0',0,'2019-02-06 10:37:28'),(18,'Adikah Esther','0',0,'2019-02-06 10:37:28'),(19,'Adike Comfort Ame','0',0,'2019-02-06 10:37:28'),(20,'Adjei Alexander Derick','0',0,'2019-02-06 10:37:28'),(21,'Adjei  Nti Kofi','0',0,'2019-02-06 10:37:28'),(22,'Adjeitsey Livingstone','0',0,'2019-02-06 10:37:28'),(23,'Adjetey Grace Tawiah','0',0,'2019-02-06 10:37:28'),(24,'Adomako Evans','0',0,'2019-02-06 10:37:28'),(25,'Adu Emmanuel','0',0,'2019-02-06 10:37:28'),(26,'Adu  Gyimah','0',0,'2019-02-06 10:37:29'),(27,'Aduah Margaret','0',0,'2019-02-06 10:37:29'),(28,'Afua Donkor Caroline Donkor Caroline','0',0,'2019-02-06 10:37:29'),(29,'Agbenorto Moses','0',0,'2019-02-06 10:37:29'),(30,'Agbeve Victor','0',0,'2019-02-06 10:37:29'),(31,'Agbleta Samuel','0',0,'2019-02-06 10:37:29'),(32,'Agyeiwah Mary','0',0,'2019-02-06 10:37:29'),(33,'Agyemang Oforiwaa','0',0,'2019-02-06 10:37:29'),(34,'Ahmed Haruna','0',0,'2019-02-06 10:37:29'),(35,'Ahmed  Seidu','0',0,'2019-02-06 10:37:29'),(36,'Ahorsey Bright','0',0,'2019-02-06 10:37:29'),(37,'Akpabu Janet','0',0,'2019-02-06 10:37:29'),(38,'Akpah Rebecca Exornam','0',0,'2019-02-06 10:37:29'),(39,'Alhassan  Imurana','0',0,'2019-02-06 10:37:29'),(40,'Alice Alomatu','0',0,'2019-02-06 10:37:29'),(41,'Alipoe Eunice','0',0,'2019-02-06 10:37:29'),(42,'Alugsi A Samuel','0',0,'2019-02-06 10:37:29'),(43,'Amfo Abigail Korantemaa','0',0,'2019-02-06 10:37:29'),(44,'Amoah Joyce','0',0,'2019-02-06 10:37:29'),(45,'Amoah Rosina Ekua','0',0,'2019-02-06 10:37:29'),(46,'Amoah Faustina','0',0,'2019-02-06 10:37:29'),(47,'Amoako Joshua Agyei','0',0,'2019-02-06 10:37:29'),(48,'Amo-Duodu Alice','0',0,'2019-02-06 10:37:29'),(49,'Amoh Deborah','0',0,'2019-02-06 10:37:29'),(50,'Amponsah Abrafi Aswoa','0',0,'2019-02-06 10:37:29'),(51,'Amponsah Faustina','0',0,'2019-02-06 10:37:29'),(52,'Amuzu Emmanuel','0',0,'2019-02-06 10:37:29'),(53,'Anaglatey Augustina Siaw','0',0,'2019-02-06 10:37:29'),(54,'Ankoma Mavis','0',0,'2019-02-06 10:37:29'),(55,'Ansah Samuel','0',0,'2019-02-06 10:37:29'),(56,'Ansah Sarah','0',0,'2019-02-06 10:37:29'),(57,'Ansah David Ofosu','0',0,'2019-02-06 10:37:29'),(58,'Ansah Sekyi Linda','0',0,'2019-02-06 10:37:29'),(59,'Ansong Benedicta Ofosua','0',0,'2019-02-06 10:37:29'),(60,'Antwi Isaac Danso','0',0,'2019-02-06 10:37:29'),(61,'Antwi Christiana','0',0,'2019-02-06 10:37:29'),(62,'Apafo Agnes','0',0,'2019-02-06 10:37:29'),(63,'Apenyo  Richard','0',0,'2019-02-06 10:37:29'),(64,'Appiah Joyce Larbi','0',0,'2019-02-06 10:37:30'),(65,'Arkoh Victoria Sika','0',0,'2019-02-06 10:37:30'),(66,'Asabea Jemima','0',0,'2019-02-06 10:37:30'),(67,'Asamoah David','0',0,'2019-02-06 10:37:30'),(68,'Asamoah  Samuel','0',0,'2019-02-06 10:37:30'),(69,'Asante Andrews','0',0,'2019-02-06 10:37:30'),(70,'Asantewaa Lydia','0',0,'2019-02-06 10:37:30'),(71,'Asare Florence A','0',0,'2019-02-06 10:37:30'),(72,'Asare Benony','0',0,'2019-02-06 10:37:30'),(73,'Asase  James','0',0,'2019-02-06 10:37:30'),(74,'Ashison Naomi','0',0,'2019-02-06 10:37:30'),(75,'Asubroni Ellen','0',0,'2019-02-06 10:37:30'),(76,'Atuobi Gabriel','0',0,'2019-02-06 10:37:30'),(77,'Awini David','0',0,'2019-02-06 10:37:30'),(78,'Awudu  Malik','0',0,'2019-02-06 10:37:30'),(79,'Awuni Belinda','0',0,'2019-02-06 10:37:30'),(80,'Ayeh  Eric','0',0,'2019-02-06 10:37:30'),(81,'Ayertey Monica Korkor','0',0,'2019-02-06 10:37:30'),(82,'Baadu Emmanuella','0',0,'2019-02-06 10:37:30'),(83,'Babanawo Kate','0',0,'2019-02-06 10:37:30'),(84,'Baffour Rose Adjei','0',0,'2019-02-06 10:37:30'),(85,'Banongle Gerald','0',0,'2019-02-06 10:37:30'),(86,'Bayor Elizabeth Zineyele','0',0,'2019-02-06 10:37:30'),(87,'Bayuo  Dorcas','0',0,'2019-02-06 10:37:30'),(88,'Bekoe Bernice','0',0,'2019-02-06 10:37:30'),(89,'Bempong Cecilia Tamea','0',0,'2019-02-06 10:37:30'),(90,'Bernad  Kumah','0',0,'2019-02-06 10:37:30'),(91,'Bernard  Takyi Mensah','0',0,'2019-02-06 10:37:30'),(92,'Blaise  Nyuore','0',0,'2019-02-06 10:37:30'),(93,'Bless Nyoure','0',0,'2019-02-06 10:37:30'),(94,'Boachie Flowrence Attaah','0',0,'2019-02-06 10:37:30'),(95,'Boadu Martha','0',0,'2019-02-06 10:37:30'),(96,'Boadu Samuel','0',0,'2019-02-06 10:37:30'),(97,'Boakye Fredrick','0',0,'2019-02-06 10:37:30'),(98,'Boatemaa Sanitha','0',0,'2019-02-06 10:37:30'),(99,'Boateng Aboagye Daniel','0',0,'2019-02-06 10:37:30'),(100,'Boateng Justice Agyenim','0',0,'2019-02-06 10:37:30'),(101,'Bong - Irema Cecilia','0',0,'2019-02-06 10:37:30'),(102,'Borley Lucy Akweley','0',0,'2019-02-06 10:37:30'),(103,'Bosompem Felix','0',0,'2019-02-06 10:37:30'),(104,'Boye Eric Siaw','0',0,'2019-02-06 10:37:30'),(105,'Brempong Doris','0',0,'2019-02-06 10:37:31'),(106,'Brown Frank Ewusie','0',0,'2019-02-06 10:37:31'),(107,'Brown George','0',0,'2019-02-06 10:37:31'),(108,'Buabeng Josephine','0',0,'2019-02-06 10:37:31'),(109,'Cecelia Bong-lrema','0',0,'2019-02-06 10:37:31'),(110,'Cecilia  Padikie','0',0,'2019-02-06 10:37:31'),(111,'Christiana  Sarpong','0',0,'2019-02-06 10:37:31'),(112,'Coffie Julius','0',0,'2019-02-06 10:37:31'),(113,'Comfort  Adekah','0',0,'2019-02-06 10:37:31'),(114,'Crentsil Patrick','0',0,'2019-02-06 10:37:31'),(115,'Dakurah Mary Margaret','0',0,'2019-02-06 10:37:31'),(116,'Dakurah Genevieve','0',0,'2019-02-06 10:37:31'),(117,'Danso Faustina','0',0,'2019-02-06 10:37:31'),(118,'Darko Beatrice Otikwa','0',0,'2019-02-06 10:37:31'),(119,'Darko Juliet','0',0,'2019-02-06 10:37:31'),(120,'Datsey Marcus','0',0,'2019-02-06 10:37:31'),(121,'David  Agbalenyo','0',0,'2019-02-06 10:37:31'),(122,'David  Gaikpa','0',0,'2019-02-06 10:37:31'),(123,'Deblah Maxwell','0',0,'2019-02-06 10:37:31'),(124,'Degadzor Ellen Senanu','0',0,'2019-02-06 10:37:31'),(125,'Dekey Anita Millicent','0',0,'2019-02-06 10:37:31'),(126,'Demegbe Eric K','0',0,'2019-02-06 10:37:31'),(127,'Dina  Gyapong','0',0,'2019-02-06 10:37:31'),(128,'Djan Daniel K','0',0,'2019-02-06 10:37:31'),(129,'Dommoh Thomas K.','0',0,'2019-02-06 10:37:31'),(130,'Dompreh Margaret','0',0,'2019-02-06 10:37:31'),(131,'Donkor Collins','0',0,'2019-02-06 10:37:31'),(132,'Donkor 2 Veronica','0',0,'2019-02-06 10:37:31'),(133,'Dora  Danso','0',0,'2019-02-06 10:37:31'),(134,'Dorcas  Mensah','0',0,'2019-02-06 10:37:31'),(135,'Dorkey  Comfort','0',0,'2019-02-06 10:37:31'),(136,'Du-Twum Florence','0',0,'2019-02-06 10:37:31'),(137,'Dwamena Vera','0',0,'2019-02-06 10:37:31'),(138,'Dwamena  Emmanuel','0',0,'2019-02-06 10:37:31'),(139,'Dzisenu  Mathar','0',0,'2019-02-06 10:37:31'),(140,'Edem  Morglo','0',0,'2019-02-06 10:37:31'),(141,'Eric  Nyarko','0',0,'2019-02-06 10:37:31'),(142,'Eric  Narh','0',0,'2019-02-06 10:37:32'),(143,'Esther  Agyapong','0',0,'2019-02-06 10:37:32'),(144,'Etuaful Jude Kwabena','0',0,'2019-02-06 10:37:32'),(145,'Eunice  Lanyo','0',0,'2019-02-06 10:37:32'),(146,'Ezekiel  Amadu Daribi','0',0,'2019-02-06 10:37:32'),(147,'Fato Yaw J','0',0,'2019-02-06 10:37:32'),(148,'Fiave Thompson Young','0',0,'2019-02-06 10:37:32'),(149,'Fosu  Stephen','0',0,'2019-02-06 10:37:32'),(150,'Frempong Eugenia Yirenchi','0',0,'2019-02-06 10:37:32'),(151,'Frimpong Sandra','0',0,'2019-02-06 10:37:32'),(152,'Frimpong Comfort','0',0,'2019-02-06 10:37:32'),(153,'Fuseini Halidu','0',0,'2019-02-06 10:37:32'),(154,'Gaikpa Patricia','0',0,'2019-02-06 10:37:32'),(155,'Ganyiyu Rahaman','nloyv6',1,'2019-02-06 10:37:32'),(156,'Ghunney Millicent Adjoa','0',0,'2019-02-06 10:37:32'),(157,'Gilbert Barnes','0',0,'2019-02-06 10:37:32'),(158,'Gyan Priscilla','0',0,'2019-02-06 10:37:32'),(159,'Hagar  Awuni','0',0,'2019-02-06 10:37:32'),(160,'Hammond Joseph','0',0,'2019-02-06 10:37:32'),(161,'Hiame Veronica','0',0,'2019-02-06 10:37:32'),(162,'Hussein Samiratu','0',0,'2019-02-06 10:37:32'),(163,'Ibrahim  Babangidah','0',0,'2019-02-06 10:37:32'),(164,'Iddrisu Sulemanu','0',0,'2019-02-06 10:37:32'),(165,'Issah Saeed Umar','0',0,'2019-02-06 10:37:32'),(166,'Issaka Aminatu','0',0,'2019-02-06 10:37:32'),(167,'Joseph  Segbeawu','0',0,'2019-02-06 10:37:32'),(168,'Joyce  Malemeber','0',0,'2019-02-06 10:37:32'),(169,'Justina  Akwatia','0',0,'2019-02-06 10:37:32'),(170,'Kaatang Monica','0',0,'2019-02-06 10:37:32'),(171,'Kaketo Rolanda','0',0,'2019-02-06 10:37:32'),(172,'Kakla Juliet','0',0,'2019-02-06 10:37:32'),(173,'Kando Amedius','0',0,'2019-02-06 10:37:32'),(174,'Kassah Godsway','0',0,'2019-02-06 10:37:32'),(175,'Kasule Ziblim','0',0,'2019-02-06 10:37:32'),(176,'Kemeh Elizabeth','0',0,'2019-02-06 10:37:32'),(177,'Kesse Stella','0',0,'2019-02-06 10:37:32'),(178,'Konogini Patience','0',0,'2019-02-06 10:37:32'),(179,'Kumasidza Patience','0',0,'2019-02-06 10:37:32'),(180,'Kumi Francis','0',0,'2019-02-06 10:37:32'),(181,'Kumiwaa Lydia','0',0,'2019-02-06 10:37:32'),(182,'Kwakye Judith Yeboah','0',0,'2019-02-06 10:37:32'),(183,'Kwapong Portia Ansah','0',0,'2019-02-06 10:37:32'),(184,'Lani Stephen Kuoyiri','0',0,'2019-02-06 10:37:32'),(185,'Lanyor Mary Fati','0',0,'2019-02-06 10:37:32'),(186,'Loglo Mawuli','0',0,'2019-02-06 10:37:33'),(187,'Lomotey Sampson','0',0,'2019-02-06 10:37:33'),(188,'Luseanu  Yendor','0',0,'2019-02-06 10:37:33'),(189,'Lutterodi Albert Augustus','0',0,'2019-02-06 10:37:33'),(190,'Marfo Cornelia Frema','0',0,'2019-02-06 10:37:33'),(191,'Markwei Pearl','0',0,'2019-02-06 10:37:33'),(192,'Mensah Maxwell Adjetey Massey','0',0,'2019-02-06 10:37:33'),(193,'Mensah Esther','0',0,'2019-02-06 10:37:33'),(194,'Millar Herbert Mawuena','0',0,'2019-02-06 10:37:33'),(195,'Miniyele  Abdul - Jabaru','0',0,'2019-02-06 10:37:33'),(196,'Mohammed Abdul-Majeed','0',0,'2019-02-06 10:37:33'),(197,'Morglo Olivia','0',0,'2019-02-06 10:37:33'),(198,'Moses Agbenorto','0',0,'2019-02-06 10:37:33'),(199,'Mumuni  Halidu','0',0,'2019-02-06 10:37:33'),(200,'Nadern  Wajak Damba','0',0,'2019-02-06 10:37:33'),(201,'Nankani Ramatu','0',0,'2019-02-06 10:37:33'),(202,'Naomi  Klu','0',0,'2019-02-06 10:37:33'),(203,'Nartey Ellen Dede','0',0,'2019-02-06 10:37:33'),(204,'Nelson Katherine Adams','0',0,'2019-02-06 10:37:33'),(205,'Nenyonyoge Emmanuel','0',0,'2019-02-06 10:37:33'),(206,'Ntiri Theresa','0',0,'2019-02-06 10:37:33'),(207,'Nuanleeb Biitian','0',0,'2019-02-06 10:37:33'),(208,'Nyarko Joyce Owusua','0',0,'2019-02-06 10:37:33'),(209,'Obeng  Joseph','0',0,'2019-02-06 10:37:33'),(210,'Obiri Adobea Joyce','0',0,'2019-02-06 10:37:33'),(211,'Oblie Zenabu Ayeley','0',0,'2019-02-06 10:37:33'),(212,'Odei Frank','0',0,'2019-02-06 10:37:33'),(213,'Odonkor Salomey','0',0,'2019-02-06 10:37:33'),(214,'Ofori Samuel K','0',0,'2019-02-06 10:37:33'),(215,'Ofori Daniel Gyamfi','0',0,'2019-02-06 10:37:33'),(216,'Ofosua  Phyllis','0',0,'2019-02-06 10:37:33'),(217,'Ofusu Mark','0',0,'2019-02-06 10:37:33'),(218,'Okletey Nelson Melchizedek K','0',0,'2019-02-06 10:37:33'),(219,'Okyere Priscilla','0',0,'2019-02-06 10:37:33'),(220,'Okyere  Eunice Biraa','0',0,'2019-02-06 10:37:33'),(221,'Onwona-Agyemang Seth Owusu Ansah','0',0,'2019-02-06 10:37:34'),(222,'Oparebea Esther Mantey','0',0,'2019-02-06 10:37:34'),(223,'Opoku Kwasi','0',0,'2019-02-06 10:37:34'),(224,'Opoku Augustina','0',0,'2019-02-06 10:37:34'),(225,'Opokua Pholomina Boni','0',0,'2019-02-06 10:37:34'),(226,'Osei Joyce','0',0,'2019-02-06 10:37:34'),(227,'Osei Stanley Akoto','0',0,'2019-02-06 10:37:34'),(228,'Osei Georgina Animwaah','0',0,'2019-02-06 10:37:34'),(229,'Osei Belinda Mensah','0',0,'2019-02-06 10:37:34'),(230,'Osei Reagan Yaw','0',0,'2019-02-06 10:37:34'),(231,'Osei  Agyemang Prempeh','0',0,'2019-02-06 10:37:34'),(232,'Osumanu Gila','0',0,'2019-02-06 10:37:34'),(233,'Otchere-Djan  D. Isaac','0',0,'2019-02-06 10:37:34'),(234,'Owusu Wilberforce O','0',0,'2019-02-06 10:37:34'),(235,'Owusu Sandra Boakyewaa','0',0,'2019-02-06 10:37:34'),(236,'Owusu  Nyame','0',0,'2019-02-06 10:37:34'),(237,'Owusu  Akumfi Ameyaw','0',0,'2019-02-06 10:37:34'),(238,'Paarima Yennuten','0',0,'2019-02-06 10:37:34'),(239,'Panti Paul','0',0,'2019-02-06 10:37:34'),(240,'Paulina Awudi','0',0,'2019-02-06 10:37:34'),(241,'Prah Stella','0',0,'2019-02-06 10:37:34'),(242,'Rachael  Owusua Atiebi','0',0,'2019-02-06 10:37:34'),(243,'Reyna  Achisah','0',0,'2019-02-06 10:37:34'),(244,'Richard  Aziati','0',0,'2019-02-06 10:37:34'),(245,'Sabaja Charles','0',0,'2019-02-06 10:37:34'),(246,'Safo Rosemary','0',0,'2019-02-06 10:37:34'),(247,'Safo  George','0',0,'2019-02-06 10:37:34'),(248,'Saka Esmond K','0',0,'2019-02-06 10:37:34'),(249,'Sakoalia Nanteeb Kennedy','0',0,'2019-02-06 10:37:34'),(250,'Sarah  Kpabi','0',0,'2019-02-06 10:37:34'),(251,'Sarpong William Nana Osei','0',0,'2019-02-06 10:37:34'),(252,'Sedegah  Dora','0',0,'2019-02-06 10:37:34'),(253,'Siameh Miriam','0',0,'2019-02-06 10:37:34'),(254,'Suallah Saeed Mohammed','0',0,'2019-02-06 10:37:34'),(255,'Tayuu Kofi Daniel','0',0,'2019-02-06 10:37:34'),(256,'Terkpertey Eric Lawer','0',0,'2019-02-06 10:37:34'),(257,'Tette Celestina','0',0,'2019-02-06 10:37:34'),(258,'Teye Isaac','0',0,'2019-02-06 10:37:34'),(259,'Teye  Gaikpa Martin','0',0,'2019-02-06 10:37:34'),(260,'Victor  Ayiku','0',0,'2019-02-06 10:37:34'),(261,'Vida  Serwaah','0',0,'2019-02-06 10:37:34'),(262,'Vincent  Akakpo','0',0,'2019-02-06 10:37:34'),(263,'Yeboah Comfort','0',0,'2019-02-06 10:37:34'),(264,'Yeboah Evans','0',0,'2019-02-06 10:37:35'),(265,'Yelbuori Prudence','0',0,'2019-02-06 10:37:35'),(266,'Yevu Mark','0',0,'2019-02-06 10:37:35'),(267,'Yuoni Thomas','0',0,'2019-02-06 10:37:35'),(268,'Zuuri Clement N','0',0,'2019-02-06 10:37:35');
/*!40000 ALTER TABLE `tbl_voters_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `voters_voting_pool`
--

DROP TABLE IF EXISTS `voters_voting_pool`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `voters_voting_pool` (
  `pool_id` int(50) NOT NULL AUTO_INCREMENT,
  `pool_user_id` int(10) NOT NULL,
  `pool_added` int(10) NOT NULL DEFAULT '0',
  `pool_voted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pool_id`),
  KEY `pool_user_id` (`pool_user_id`),
  KEY `pool_added` (`pool_added`),
  CONSTRAINT `voters_voting_pool_ibfk_1` FOREIGN KEY (`pool_user_id`) REFERENCES `tbl_voters_list` (`voters_id`),
  CONSTRAINT `voters_voting_pool_ibfk_2` FOREIGN KEY (`pool_added`) REFERENCES `tbl_candidates` (`candidate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `voters_voting_pool`
--

LOCK TABLES `voters_voting_pool` WRITE;
/*!40000 ALTER TABLE `voters_voting_pool` DISABLE KEYS */;
/*!40000 ALTER TABLE `voters_voting_pool` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'donkor_hospital'
--

--
-- Dumping routines for database 'donkor_hospital'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-29 17:50:26
