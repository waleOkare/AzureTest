-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `CMM007ALDB-1511463`;
CREATE DATABASE `cmm007aldb-1511463` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `CMM007ALDB-1511463`;

DROP TABLE IF EXISTS `blogview`;
CREATE TABLE `blogview` (
  `blogitemID` int(11) NOT NULL AUTO_INCREMENT,
  `entryTitle` varchar(150) NOT NULL,
  `entrySummary` varchar(150) NOT NULL,
  `category` varchar(150) NOT NULL,
  `submitter` varchar(150) NOT NULL,
  PRIMARY KEY (`blogitemID`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

INSERT INTO `blogview` (`blogitemID`, `entryTitle`, `entrySummary`, `category`, `submitter`) VALUES
(1,	'Today at work',	' Today I went to work and did lots of very complicated coding things. I was very pleased that I managed to finish them all',	'Work',	'Adam'),
(11,	'University Lecturer',	'This week in university I had an amazing lecture. I can’t remember the name of the lecturer but he was really really good.',	'University',	'Brian'),
(21,	'Dads new television',	'Today dad bought a new television. He likes to watch the F1 on it a lot.',	'Family',	'Charlie');

-- 2016-05-04 08:58:38
