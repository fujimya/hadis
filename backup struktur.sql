/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.10-MariaDB : Database - hadis
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hadis` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `hadis`;

/*Table structure for table `ahmad` */

DROP TABLE IF EXISTS `ahmad`;

CREATE TABLE `ahmad` (
  `id` int(5) NOT NULL,
  `NoHdt` int(5) DEFAULT NULL,
  `Isi_Arab` longtext DEFAULT NULL,
  `Isi_Indonesia` longtext DEFAULT NULL,
  `Kategori` varchar(100) DEFAULT NULL,
  `Perawi` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `annasai` */

DROP TABLE IF EXISTS `annasai`;

CREATE TABLE `annasai` (
  `id` int(4) NOT NULL,
  `NoHdt` int(4) DEFAULT NULL,
  `Isi_Arab` longtext DEFAULT NULL,
  `Isi_Indonesia` longtext DEFAULT NULL,
  `Kategori` varchar(100) DEFAULT NULL,
  `Perawi` varchar(9) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `bukhari` */

DROP TABLE IF EXISTS `bukhari`;

CREATE TABLE `bukhari` (
  `id` int(4) NOT NULL,
  `NoHdt` int(4) DEFAULT NULL,
  `Isi_Arab` longtext DEFAULT NULL,
  `Isi_Indonesia` longtext DEFAULT NULL,
  `Kategori` varchar(100) DEFAULT NULL,
  `Perawi` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `ibnumajah` */

DROP TABLE IF EXISTS `ibnumajah`;

CREATE TABLE `ibnumajah` (
  `id` int(4) NOT NULL,
  `NoHdt` int(4) DEFAULT NULL,
  `Isi_Arab` longtext DEFAULT NULL,
  `Isi_Indonesia` longtext DEFAULT NULL,
  `Kategori` varchar(100) DEFAULT NULL,
  `Perawi` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `malik` */

DROP TABLE IF EXISTS `malik`;

CREATE TABLE `malik` (
  `id` int(4) NOT NULL,
  `NoHdt` int(4) DEFAULT NULL,
  `Isi_Arab` longtext DEFAULT NULL,
  `Isi_Indonesia` longtext DEFAULT NULL,
  `Kategori` varchar(100) DEFAULT NULL,
  `Perawi` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `muslim` */

DROP TABLE IF EXISTS `muslim`;

CREATE TABLE `muslim` (
  `id` int(4) NOT NULL,
  `NoHdt` int(4) DEFAULT NULL,
  `Isi_Arab` longtext DEFAULT NULL,
  `Isi_Indonesia` longtext DEFAULT NULL,
  `Kategori` varchar(100) DEFAULT NULL,
  `Perawi` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `tbl_kata` */

DROP TABLE IF EXISTS `tbl_kata`;

CREATE TABLE `tbl_kata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kata` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `tirmidzi` */

DROP TABLE IF EXISTS `tirmidzi`;

CREATE TABLE `tirmidzi` (
  `id` int(4) NOT NULL,
  `NoHdt` int(4) DEFAULT NULL,
  `Isi_Arab` longtext DEFAULT NULL,
  `Isi_Indonesia` longtext DEFAULT NULL,
  `Kategori` varchar(100) DEFAULT NULL,
  `Perawi` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
