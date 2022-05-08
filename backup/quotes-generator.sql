-- Adminer 4.8.1 MySQL 10.5.13-MariaDB dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `generate_quotes`;
CREATE TABLE `generate_quotes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `quotes_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `quotes_id` (`quotes_id`),
  CONSTRAINT `generate_quotes_ibfk_1` FOREIGN KEY (`quotes_id`) REFERENCES `quotes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `quotes`;
CREATE TABLE `quotes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `words` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `author` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2022-05-08 23:20:49
