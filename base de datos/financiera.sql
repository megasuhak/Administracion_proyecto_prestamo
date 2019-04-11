/*
SQLyog Community Edition- MySQL GUI v8.05 
MySQL - 5.5.5-10.1.38-MariaDB : Database - financiera
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`financiera` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `financiera`;

/*Table structure for table `moras` */

DROP TABLE IF EXISTS `moras`;

CREATE TABLE `moras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_prestamo` int(11) DEFAULT NULL,
  `mora` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `moras` */

insert  into `moras`(`id`,`id_prestamo`,`mora`,`fecha`) values (1,17,1375,'0000-00-00'),(2,17,1375,'0000-00-00'),(3,17,1375,'0000-00-00'),(4,17,1375,'0000-00-00'),(5,17,1375,'0000-00-00');

/*Table structure for table `pagos` */

DROP TABLE IF EXISTS `pagos`;

CREATE TABLE `pagos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_prestamo` int(11) DEFAULT NULL,
  `imagen` text,
  `estado` enum('pago','deuda') DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `pagos` */

insert  into `pagos`(`id`,`id_prestamo`,`imagen`,`estado`,`fecha`) values (1,17,'default.jpg','deuda','2019-04-11'),(2,17,'default.jpg','pago','2019-04-11'),(3,17,'default.jpg','deuda','2019-04-11'),(4,17,'default.jpg','pago','2019-04-11'),(5,17,'default.jpg','pago','2019-04-11'),(6,17,'default.jpg','pago','2019-04-11'),(7,16,'default.jpg','deuda','2019-04-11');

/*Table structure for table `prestamo` */

DROP TABLE IF EXISTS `prestamo`;

CREATE TABLE `prestamo` (
  `id_prestamo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) DEFAULT NULL,
  `cedula_pasaporte` varchar(60) DEFAULT NULL,
  `telefono` varchar(60) DEFAULT NULL,
  `fecha_nacimiento` int(11) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `ciudad` varchar(60) DEFAULT NULL,
  `provincia` varchar(60) DEFAULT NULL,
  `calle` varchar(60) DEFAULT NULL,
  `monto` int(11) DEFAULT NULL,
  `meses` int(11) DEFAULT NULL,
  `tipo_garantia` enum('aval','hipoteca','embargo') DEFAULT NULL,
  `tipo_prestamo` enum('no_garantia','garantia') DEFAULT NULL,
  `comentario` text,
  `estado` enum('pendiente','aprobado','rechazado') DEFAULT NULL,
  `fecha_estado` date DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_prestamo`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `prestamo` */

insert  into `prestamo`(`id_prestamo`,`nombre`,`cedula_pasaporte`,`telefono`,`fecha_nacimiento`,`email`,`ciudad`,`provincia`,`calle`,`monto`,`meses`,`tipo_garantia`,`tipo_prestamo`,`comentario`,`estado`,`fecha_estado`,`fecha`) values (16,'Robertico chacon','089890809','870938290',2019,'hola@gmail.com','Santo domingo','san cristobal','segunda',12000,4,'aval','garantia','Prestamo de prestamo','aprobado','2019-04-11','2019-04-11'),(17,'asdfasd asdfsd','40237252669','1234567890',2019,'admin@gmail.com','la vega','san juan ','alli',50000,12,'embargo','garantia','A gastar cualto','aprobado','2019-04-11','2019-04-11');

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `apellido` varchar(60) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `cedula` varchar(60) DEFAULT NULL,
  `telefono` varchar(60) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `clave` varchar(60) NOT NULL,
  `imagen` text,
  `role` enum('admin','user') DEFAULT NULL,
  `estado` enum('activo','inactivo') DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id_user`,`nombre`,`apellido`,`fecha_nacimiento`,`email`,`cedula`,`telefono`,`direccion`,`clave`,`imagen`,`role`,`estado`,`fecha`) values (15,'asdfasd','asdfsd','2019-04-04','admin@gmail.com','40237252669','1234567890','asdfasdf','21232f297a57a5a743894a0e4a801fc3','default.png','user','inactivo','2019-04-09'),(16,'Robertico','chacon','2019-04-04','hola@gmail.com','089890809','870938290','itla','4d186321c1a7f0f354b297e8914ab240','default.png','user','inactivo','2019-04-09'),(18,'alvaro','jaquez','2019-04-09','alvaro@gmail.com','40237252669','456789','aqui','98db6b79acb71383b5a83e0bbc1cadd4','default.png','admin','inactivo','2019-04-09');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
