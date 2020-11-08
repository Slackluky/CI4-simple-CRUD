/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.5.4-MariaDB : Database - db_ci4
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_ci4` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_ci4`;

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id_product` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `price` int(255) DEFAULT NULL,
  `description` tinytext DEFAULT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `products` */

insert  into `products`(`id_product`,`product_name`,`category`,`price`,`description`) values 
(1,'Intel core i5 10406H','Processor',3000000,'Mid Range Processor'),
(2,'NVIDIA GTX 1050','Graphic Card',3000000,'Mid Range GPU'),
(3,'Ducky K1','Keyboard',1500000,'Mechanical Keyboard'),
(4,'Intel core i9 10406H','Processor',6000000,'Latest and High Performance Processor from Intel\r\n'),
(5,'Nvidia GTX 1050 Ti','GPU',3500000,'Higher performance of GTX 1050'),
(6,'Core i 7 67859H','Processor',5000000,'High speed Processor'),
(8,'Nvidia MX250','GPU',2500000,'Nvidia GPU for Laptop');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
