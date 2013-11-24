-- MySQL dump 10.13  Distrib 5.6.12, for Win64 (x86_64)
--
-- Host: localhost    Database: tracking
-- ------------------------------------------------------
-- Server version	5.6.12-log

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
-- Table structure for table `beneficiary`
--

DROP TABLE IF EXISTS `beneficiary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `beneficiary` (
  `idBeneficiary` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `contactNumber` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`idBeneficiary`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beneficiary`
--

LOCK TABLES `beneficiary` WRITE;
/*!40000 ALTER TABLE `beneficiary` DISABLE KEYS */;
INSERT INTO `beneficiary` VALUES (1,'Adrie Go','Sasa, Davao City','09324114187','aabgo','d41d8cd98f00b204e9800998ecf8427e'),(2,'','','','','d41d8cd98f00b204e9800998ecf8427e');
/*!40000 ALTER TABLE `beneficiary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donationrecord`
--

DROP TABLE IF EXISTS `donationrecord`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `donationrecord` (
  `idDonationRec` int(11) NOT NULL AUTO_INCREMENT,
  `amount` decimal(8,2) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `idDonor` int(11) DEFAULT NULL,
  PRIMARY KEY (`idDonationRec`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donationrecord`
--

LOCK TABLES `donationrecord` WRITE;
/*!40000 ALTER TABLE `donationrecord` DISABLE KEYS */;
INSERT INTO `donationrecord` VALUES (1,10500.00,'2013-11-24 00:00:00',2);
/*!40000 ALTER TABLE `donationrecord` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donor`
--

DROP TABLE IF EXISTS `donor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `donor` (
  `idDonor` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(256) NOT NULL,
  `companyName` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `emailAddress` varchar(256) NOT NULL,
  `contactNumber` varchar(60) NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  PRIMARY KEY (`idDonor`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donor`
--

LOCK TABLES `donor` WRITE;
/*!40000 ALTER TABLE `donor` DISABLE KEYS */;
INSERT INTO `donor` VALUES (2,'Adrie Go','AdDU','Sasa','aabgo@addu.edu.ph','09324114187',200.00);
/*!40000 ALTER TABLE `donor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `particulars`
--

DROP TABLE IF EXISTS `particulars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `particulars` (
  `particular_id` int(11) NOT NULL AUTO_INCREMENT,
  `beneficiary_id` int(11) DEFAULT NULL,
  `iddonationrecord` int(4) DEFAULT NULL,
  `amount` decimal(10,0) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`particular_id`),
  KEY `paticulars_fk` (`beneficiary_id`),
  KEY `paticulars_fk2` (`iddonationrecord`),
  CONSTRAINT `paticulars_fk` FOREIGN KEY (`beneficiary_id`) REFERENCES `beneficiary` (`idBeneficiary`),
  CONSTRAINT `paticulars_fk2` FOREIGN KEY (`iddonationrecord`) REFERENCES `donor` (`idDonor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `particulars`
--

LOCK TABLES `particulars` WRITE;
/*!40000 ALTER TABLE `particulars` DISABLE KEYS */;
/*!40000 ALTER TABLE `particulars` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-11-24 13:11:28
