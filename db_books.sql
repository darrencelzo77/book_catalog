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
  `picture_url` text DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`authorid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblauthors` */

insert  into `tblauthors`(`authorid`,`author_name`,`details`,`picture_url`,`is_featured`) values (1,'J.K. Rowling','British author of the Harry Potter series.','20250820_082828.jpg',0),(2,'George R.R. Martin','American novelist, Game of Thrones.','20250820_082828.jpg',0),(3,'Agatha Christie','Famous mystery and detective novel writer.','20250820_082828.jpg',0),(4,'Walter Isaacson','Biographer of Steve Jobs, Einstein.','20250820_082828.jpg',0),(5,'Dale Carnegie','Author of How to Win Friends.','20250820_082828.jpg',0),(6,'Stephen Hawking','Theoretical physicist, cosmologist.','20250820_082828.jpg',0),(7,'Carl Sagan','Astronomer and science communicator.','20250820_082828.jpg',0),(8,'Antony Beevor','Military historian.','20250820_082828.jpg',0),(9,'Mary Beard','Historian of ancient Rome.','20250820_082828.jpg',0),(10,'Hans Christian Andersen','Fairy tale writer.','20250820_082828.jpg',0),(11,'Dr. Seuss','Children’s author and cartoonist.','20250820_082828.jpg',0),(12,'Robert C. Martin','Software engineer, Uncle Bob.','20250820_082828.jpg',0),(13,'Stuart Russell','AI researcher.','20250820_082828.jpg',0);

/*Table structure for table `tblbooks` */

DROP TABLE IF EXISTS `tblbooks`;

CREATE TABLE `tblbooks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `genreid` int(11) DEFAULT 0,
  `title` varchar(255) DEFAULT '',
  `authorid` int(11) DEFAULT 0,
  `description` text DEFAULT NULL,
  `published_date` date DEFAULT NULL,
  `pages` int(11) DEFAULT NULL,
  `isbn` varchar(20) DEFAULT NULL,
  `publisher` varchar(128) DEFAULT '',
  `language` varchar(50) DEFAULT 'English',
  `picture_url` varchar(500) DEFAULT NULL,
  `rating` decimal(2,1) DEFAULT 0.0,
  `link` text DEFAULT NULL,
  `review_count` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `reviewer` varchar(255) DEFAULT '',
  `review` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `isbn` (`isbn`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblbooks` */

insert  into `tblbooks`(`id`,`genreid`,`title`,`authorid`,`description`,`published_date`,`pages`,`isbn`,`publisher`,`language`,`picture_url`,`rating`,`link`,`review_count`,`created_at`,`updated_at`,`reviewer`,`review`) values (1,1,'Harry Potter and the Sorcerer\'s Stone',1,'First book of the Harry Potter series.','1997-06-26',320,'9780747532699','Bloomsbury','English','20250820_082828.jpg','4.9','dafsadsf',25000,'2025-08-20 08:41:44','2025-08-22 21:53:08','darrne','darren celzo acuna darren celzo acunadarren celzo acunadarren celzo acunadarren celzo acunadarren celzo acuna'),(2,1,'A Game of Thrones',2,'First book in A Song of Ice and Fire.','1996-08-06',694,'9780553103540','Bantam Books','English','20250820_082828.jpg','4.8','dafsadsf',30000,'2025-08-20 08:41:44','2025-08-22 21:53:08','darrne','darren celzo acuna darren celzo acunadarren celzo acunadarren celzo acunadarren celzo acunadarren celzo acuna'),(3,3,'Murder on the Orient Express',3,'Detective Hercule Poirot investigates a murder.','1934-01-01',256,'9780007119318','Collins Crime Club','English','20250820_082828.jpg','4.7','dafsadsf',15000,'2025-08-20 08:41:44','2025-08-22 21:53:08','darrne','darren celzo acuna darren celzo acunadarren celzo acunadarren celzo acunadarren celzo acunadarren celzo acuna'),(4,4,'Steve Jobs',4,'Biography of Steve Jobs.','2011-10-24',656,'9781451648539','Simon & Schuster','English','20250820_082828.jpg','4.6','dafsadsf',12000,'2025-08-20 08:41:44','2025-08-22 21:53:08','darrne','darren celzo acuna darren celzo acunadarren celzo acunadarren celzo acunadarren celzo acunadarren celzo acuna'),(5,5,'How to Win Friends and Influence People',5,'Classic self-help book.','1936-10-01',291,'9780671027032','Simon & Schuster','English','20250820_082828.jpg','4.5','dafsadsf',18000,'2025-08-20 08:41:44','2025-08-22 21:53:08','darrne','darren celzo acuna darren celzo acunadarren celzo acunadarren celzo acunadarren celzo acunadarren celzo acuna'),(6,6,'A Brief History of Time',6,'Explains cosmology for general audience.','1988-04-01',256,'9780553380163','Bantam Dell','English','20250820_082828.jpg','4.8','dafsadsf',22000,'2025-08-20 08:41:44','2025-08-22 21:53:08','darrne','darren celzo acuna darren celzo acunadarren celzo acunadarren celzo acunadarren celzo acunadarren celzo acuna'),(7,7,'Cosmos',7,'Exploration of the universe.','1980-10-12',365,'9780345331359','Random House','English','20250820_082828.jpg','4.9','dafsadsf',24000,'2025-08-20 08:41:44','2025-08-22 21:53:08','darrne','darren celzo acuna darren celzo acunadarren celzo acunadarren celzo acunadarren celzo acunadarren celzo acuna'),(8,8,'Stalingrad',8,'Account of the Battle of Stalingrad.','1998-01-01',494,'9780140249859','Penguin Books','English','20250820_082828.jpg','4.6','dafsadsf',8000,'2025-08-20 08:41:44','2025-08-22 21:53:08','darrne','darren celzo acuna darren celzo acunadarren celzo acunadarren celzo acunadarren celzo acunadarren celzo acuna'),(9,9,'SPQR: A History of Ancient Rome',9,'History of Rome.','2015-10-20',606,'9780871404237','Liveright','English','20250820_082828.jpg','4.5','dafsadsf',9000,'2025-08-20 08:41:44','2025-08-22 21:53:08','darrne','darren celzo acuna darren celzo acunadarren celzo acunadarren celzo acunadarren celzo acunadarren celzo acuna'),(10,10,'The Little Mermaid',10,'Classic fairy tale.','1837-01-01',120,'9780147515681','Penguin Classics','English','20250820_082828.jpg','4.4','dafsadsf',6000,'2025-08-20 08:41:44','2025-08-22 21:53:08','darrne','darren celzo acuna darren celzo acunadarren celzo acunadarren celzo acunadarren celzo acunadarren celzo acuna'),(11,10,'The Ugly Duckling',10,'Classic fairy tale.','1843-01-01',90,'9780147515682','Penguin Classics','English','20250820_082828.jpg','4.3','dafsadsf',5500,'2025-08-20 08:41:44','2025-08-22 21:53:08','darrne','darren celzo acuna darren celzo acunadarren celzo acunadarren celzo acunadarren celzo acunadarren celzo acuna'),(12,11,'The Cat in the Hat',11,'Popular children’s book.','1957-03-12',61,'9780394800011','Random House','English','20250820_082828.jpg','4.7','dafsadsf',10000,'2025-08-20 08:41:44','2025-08-22 21:53:08','darrne','darren celzo acuna darren celzo acunadarren celzo acunadarren celzo acunadarren celzo acunadarren celzo acuna'),(13,11,'Green Eggs and Ham',11,'Children’s rhyming story.','1960-08-12',62,'9780394800165','Random House','English','20250820_082828.jpg','4.8','dafsadsf',11000,'2025-08-20 08:41:44','2025-08-22 21:53:08','darrne','darren celzo acuna darren celzo acunadarren celzo acunadarren celzo acunadarren celzo acunadarren celzo acuna'),(14,12,'Clean Code',12,'Handbook of agile software craftsmanship.','2008-08-01',464,'9780132350884','Prentice Hall','English','20250820_082828.jpg','4.9','dafsadsf',15000,'2025-08-20 08:41:44','2025-08-22 21:53:08','darrne','darren celzo acuna darren celzo acunadarren celzo acunadarren celzo acunadarren celzo acunadarren celzo acuna'),(15,12,'The Clean Coder',12,'Professionalism in software development.','2011-05-23',256,'9780137081073','Prentice Hall','English','20250820_082828.jpg','4.7','dafsadsf',9000,'2025-08-20 08:41:44','2025-08-22 21:53:08','darrne','darren celzo acuna darren celzo acunadarren celzo acunadarren celzo acunadarren celzo acunadarren celzo acuna'),(16,13,'Artificial Intelligence: A Modern Approach',13,'Leading textbook on AI.','2010-12-11',1152,'9780136042594','Pearson','English','20250820_082828.jpg','4.8','dafsadsf',7000,'2025-08-20 08:41:44','2025-08-22 21:53:08','darrne','darren celzo acuna darren celzo acunadarren celzo acunadarren celzo acunadarren celzo acunadarren celzo acuna'),(17,13,'Human Compatible',13,'Discusses the future of AI.','2019-10-08',336,'9780525558613','Viking','English','20250820_082828.jpg','4.6','dafsadsf',5000,'2025-08-20 08:41:44','2025-08-22 21:53:08','darrne','darren celzo acuna darren celzo acunadarren celzo acunadarren celzo acunadarren celzo acunadarren celzo acuna'),(18,2,'Pride and Prejudice',1,'Classic romance novel.','1813-01-28',279,'9780141439518','T. Egerton','English','20250820_082828.jpg','4.8','dafsadsf',20000,'2025-08-20 08:41:44','2025-08-22 21:53:08','darrne','darren celzo acuna darren celzo acunadarren celzo acunadarren celzo acunadarren celzo acunadarren celzo acuna'),(19,3,'And Then There Were None',3,'Mystery thriller novel.','1939-11-06',272,'9780062073488','Collins Crime Club','English','20250820_082828.jpg','4.7','dafsadsf',25000,'2025-08-20 08:41:44','2025-08-22 21:53:08','darrne','darren celzo acuna darren celzo acunadarren celzo acunadarren celzo acunadarren celzo acunadarren celzo acuna'),(20,5,'The Power of Positive Thinking',5,'Self-help book about optimism.','1952-01-01',276,'9780743234801','Prentice Hall','English','20250820_082828.jpg','4.4','dafsadsf',14000,'2025-08-20 08:41:44','2025-08-22 21:53:08','darrne','darren celzo acuna darren celzo acunadarren celzo acunadarren celzo acunadarren celzo acunadarren celzo acuna'),(21,13,'aaaaaaaaaa',3,'kjjjj','2026-12-02',3,'AA4808607E','sadfkj','English','20250822_202425.jpg','1.2','dafsadsf',2341,'2025-08-21 00:56:32','2025-08-22 21:53:08','darrne','darren celzo acuna darren celzo acunadarren celzo acunadarren celzo acunadarren celzo acunadarren celzo acuna'),(22,4,'Tite',5,'a','2025-08-21',34,'21A2EB871D','bb','English','20250822_001240.jpg','2.2','adsfasfasf',34,'2025-08-22 00:12:14','2025-08-22 22:02:00','darrne','kely');

/*Table structure for table `tblcategories` */

DROP TABLE IF EXISTS `tblcategories`;

CREATE TABLE `tblcategories` (
  `catid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`catid`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblcategories` */

insert  into `tblcategories`(`catid`,`name`) values (5,'Children'),(1,'Fiction'),(4,'History'),(2,'Non-Fiction'),(3,'Science'),(6,'Technology');

/*Table structure for table `tblgenres` */

DROP TABLE IF EXISTS `tblgenres`;

CREATE TABLE `tblgenres` (
  `genreid` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT 0,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`genreid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblgenres` */

insert  into `tblgenres`(`genreid`,`category_id`,`name`) values (1,1,'Fantasy'),(2,1,'Romance'),(3,1,'Thriller'),(4,2,'Biography'),(5,2,'Self-Help'),(6,3,'Physics'),(7,3,'Astronomy'),(8,4,'World War II'),(9,4,'Ancient Civilizations'),(10,5,'Fairy Tales'),(11,5,'Educational'),(12,6,'Programming'),(13,6,'Artificial Intelligencea');

/*Table structure for table `tblinquiry` */

DROP TABLE IF EXISTS `tblinquiry`;

CREATE TABLE `tblinquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inquiry_type` varchar(255) DEFAULT '',
  `fullname` varchar(255) DEFAULT '',
  `emailaddress` varchar(255) DEFAULT '',
  `phonenumber` varchar(255) DEFAULT '',
  `subject` varchar(255) DEFAULT '',
  `message` text DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblinquiry` */

insert  into `tblinquiry`(`id`,`inquiry_type`,`fullname`,`emailaddress`,`phonenumber`,`subject`,`message`,`created`) values (1,'manuscript','asfa','sdfasfa@gmail.com','03189','askfn','kasdf','2025-08-21 09:25:39'),(2,'manuscript','asfa','sdfasfa@gmail.com','03189','askfn','kasdf','2025-08-21 09:25:39'),(3,'','','','','','','2025-08-21 09:31:02'),(4,'support','Darren acuna','darren@gmail.com','09123238283','aksdfasdf','fakjsdfkasdfjdarrenfakjsdfkasdfjdarrenfakjsdfkasdfjdarrenfakjsdfkasdfjdarrenfakjsdfkasdfjdarrenfakjsdfkasdfjdarrenfakjsdfkasdfjdarrenfakjsdfkasdfjdarrenfakjsdfkasdfjdarrenfakjsdfkasdfjdarrenfakjsdfkasdfjdarrenfakjsdfkasdfjdarrenfakjsdfkasdfjdarrenfakjsdfkasdfjdarrenfakjsdfkasdfjdarrenfakjsdfkasdfjdarrenfakjsdfkasdfjdarrenfakjsdfkasdfjdarrenfakjsdfkasdfjdarrenfakjsdfkasdfjdarrenfakjsdfkasdfjdarrenfakjsdfkasdfjdarrenfakjsdfkasdfjdarrenfakjsdfkasdfjdarrenfakjsdfkasdfjdarrenfakjsdfkasdfjdarrenfakjsd','2025-08-22 20:29:55');

/*Table structure for table `tblmanuscripts` */

DROP TABLE IF EXISTS `tblmanuscripts`;

CREATE TABLE `tblmanuscripts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `book_title` varchar(255) NOT NULL,
  `word_count` int(11) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `synopsis` text NOT NULL,
  `publications` text DEFAULT NULL,
  `platform` text DEFAULT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblmanuscripts` */

insert  into `tblmanuscripts`(`id`,`first_name`,`last_name`,`email_address`,`phone_number`,`book_title`,`word_count`,`genre`,`synopsis`,`publications`,`platform`,`submitted_at`) values (1,'asdflas','kladfkl','kladlk@gmail.com','092482349','lksdfjlskd',234,'non-fiction','asdfas','asdfasd','fasdfasdf','2025-08-21 09:41:33'),(2,'Darren','acuna','darren@gmail.com','09123901320','akdslfj',123,'non-fiction','aksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffff','aksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffff','aksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffffffffffffffffffffffffffffffffaksjdfffffffffff','2025-08-22 20:29:02');

/*Table structure for table `tblowner` */

DROP TABLE IF EXISTS `tblowner`;

CREATE TABLE `tblowner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tblowner` */

insert  into `tblowner`(`id`,`email`) values (1,'darrencelzo77@gmail.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
