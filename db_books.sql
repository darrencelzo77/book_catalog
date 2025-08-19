/*
SQLyog Ultimate v8.55 
MySQL - 5.5.5-10.4.32-MariaDB : Database - db_books
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_books` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `db_books`;

/*Table structure for table `tbladmin` */

DROP TABLE IF EXISTS `tbladmin`;

CREATE TABLE `tbladmin` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) DEFAULT '',
  `password` varchar(128) DEFAULT '',
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbladmin` */

insert  into `tbladmin`(`adminid`,`username`,`password`) values (1,'admin','LzR3OVdhVFVmSWlHN3JGRXRGRUxGdz09');

/*Table structure for table `tblauthors` */

DROP TABLE IF EXISTS `tblauthors`;

CREATE TABLE `tblauthors` (
  `authorid` int(11) NOT NULL AUTO_INCREMENT,
  `author_name` varchar(255) NOT NULL,
  `details` text DEFAULT NULL,
  PRIMARY KEY (`authorid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblauthors` */

insert  into `tblauthors`(`authorid`,`author_name`,`details`) values (1,'Marcus Rivera','Award-winning novelist known for deeply emotional storytelling.'),(2,'Jane Doe','Specializes in psychological thrillers and suspense.'),(3,'John Smith','Historian and biographer with several best-selling works.');

/*Table structure for table `tblbooks` */

DROP TABLE IF EXISTS `tblbooks`;

CREATE TABLE `tblbooks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `genreid` int(11) DEFAULT 0,
  `title` varchar(255) NOT NULL,
  `authorid` int(11) DEFAULT 0,
  `description` text DEFAULT NULL,
  `published_date` date DEFAULT NULL,
  `pages` int(11) DEFAULT NULL,
  `isbn` varchar(20) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `language` varchar(50) DEFAULT 'English',
  `picture_url` varchar(500) DEFAULT NULL,
  `rating` decimal(2,1) DEFAULT 0.0,
  `review_count` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `isbn` (`isbn`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblbooks` */

insert  into `tblbooks`(`id`,`genreid`,`title`,`authorid`,`description`,`published_date`,`pages`,`isbn`,`publisher`,`language`,`picture_url`,`rating`,`review_count`,`created_at`,`updated_at`) values (1,1,'Garden Secrets',1,'A captivating tale of love, loss, and redemption set in mysterious English gardens. Eleanor uncovers family secrets hidden for generations in the overgrown hedges of Hartfield Manor.','2023-03-01',412,'978-0987654321','Bloomsbury Literary','English','https://example.com/images/garden_secrets.jpg','4.9',2187,'2025-08-19 22:29:36','2025-08-19 22:29:36');

/*Table structure for table `tblcategories` */

DROP TABLE IF EXISTS `tblcategories`;

CREATE TABLE `tblcategories` (
  `catid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`catid`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblcategories` */

insert  into `tblcategories`(`catid`,`name`) values (1,'Fiction'),(2,'Non-Fiction');

/*Table structure for table `tblgenres` */

DROP TABLE IF EXISTS `tblgenres`;

CREATE TABLE `tblgenres` (
  `genreid` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT 0,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`genreid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblgenres` */

insert  into `tblgenres`(`genreid`,`category_id`,`name`) values (1,1,'Romance'),(2,1,'Mystery'),(3,1,'Thriller'),(4,2,'Biography'),(5,2,'Self-Help');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
