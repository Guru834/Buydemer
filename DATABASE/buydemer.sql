-- MySQL dump 10.13  Distrib 8.0.22, for macos10.15 (x86_64)
--
-- Host: 127.0.0.1    Database: buydemer
-- ------------------------------------------------------
-- Server version	8.0.22

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
-- Table structure for table `Electronic`
--

DROP TABLE IF EXISTS `Electronic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Electronic` (
  `ElectronicID` int NOT NULL AUTO_INCREMENT,
  `modelname` varchar(255) DEFAULT NULL,
  `eleccondition` varchar(255) DEFAULT NULL,
  `elecstorage` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `descriptionelec` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`ElectronicID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Electronic`
--

LOCK TABLES `Electronic` WRITE;
/*!40000 ALTER TABLE `Electronic` DISABLE KEYS */;
INSERT INTO `Electronic` VALUES (1,'Need An Iphone12 pro','Few scratches are accepted','256GB','blackck or Blue','Basically I want 2 but if you have 1 it is ok.','Please let me know about the iPhone condition in the comments. Also I don&#39;t want third hand. Additionally, if you have covers I am ready to buy them also.'),(2,'Need Ihpone&#39;s cover','New','None','Purple','20','I am work in a mobile cover shop. I need iPhone&#39;s cover immediately. If anyone has it please contact ASAP.');
/*!40000 ALTER TABLE `Electronic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Jobs`
--

DROP TABLE IF EXISTS `Jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Jobs` (
  `JobID` int NOT NULL AUTO_INCREMENT,
  `jobname` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `salary` varchar(255) DEFAULT NULL,
  `descriptionjob` varchar(5000) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `startingdate` varchar(255) DEFAULT NULL,
  `currentstatus` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`JobID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Jobs`
--

LOCK TABLES `Jobs` WRITE;
/*!40000 ALTER TABLE `Jobs` DISABLE KEYS */;
INSERT INTO `Jobs` VALUES (1,'Need web developer internship','Montreal','Quebec','Canada','$15/hour','I have skills like HTML/CSS,  Analytical skills.Moreover,  Responsive design skills and JavaScript skills. ','1 Year','1 July 2021','Unemployed'),(2,'Need job at McDonald','Toronto','Ontario','Canada','14/hour','I have 3 years experience in this field. I previously worked in Montreal. You can contact me and I can give you contact information of my supervisors','3 Years','ASAP','unemployed');
/*!40000 ALTER TABLE `Jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loginInfo`
--

DROP TABLE IF EXISTS `loginInfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `loginInfo` (
  `PersonID` int NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `Province` varchar(255) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL,
  `PostalCode` varchar(255) DEFAULT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `CompanyName` varchar(255) DEFAULT 'None',
  PRIMARY KEY (`PersonID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loginInfo`
--

LOCK TABLES `loginInfo` WRITE;
/*!40000 ALTER TABLE `loginInfo` DISABLE KEYS */;
INSERT INTO `loginInfo` VALUES (1,'Guruansh','singh','gurus5229@gmail.com','5143788073','montreal','Quebec','Canada','H3H2N7','Guru5229','buydemer123','buydemer');
/*!40000 ALTER TABLE `loginInfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `RealEstate`
--

DROP TABLE IF EXISTS `RealEstate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `RealEstate` (
  `RealEstateID` int NOT NULL AUTO_INCREMENT,
  `namereal` varchar(255) DEFAULT NULL,
  `cityreal` varchar(255) DEFAULT NULL,
  `statereal` varchar(255) DEFAULT NULL,
  `countryreal` varchar(255) DEFAULT NULL,
  `postalcode` varchar(255) DEFAULT NULL,
  `descriptionreal` varchar(5000) DEFAULT NULL,
  `expectederent` varchar(255) DEFAULT NULL,
  `expectedlease` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`RealEstateID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RealEstate`
--

LOCK TABLES `RealEstate` WRITE;
/*!40000 ALTER TABLE `RealEstate` DISABLE KEYS */;
INSERT INTO `RealEstate` VALUES (1,'Need 3 1/2 appartment','Montreal','Quebec','Canada','H3H2N7','I need a appartment near guy Concordia metro station. Actually my college is near it that is why I am preferring this location.','1200/ month','1 year'),(2,'Need a Studio','Brampton','Ontario','Canada','WE345','I need a studio near orender plaza. My credit score is good to get lease on my name. Please contact me ASAP. ','1500/month','2 years');
/*!40000 ALTER TABLE `RealEstate` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-11 21:20:05
