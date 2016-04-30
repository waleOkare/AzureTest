-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

USE `waleokaredb`;

DROP TABLE IF EXISTS `bugs`;
CREATE TABLE `bugs` (
  `bugID` int(11) NOT NULL AUTO_INCREMENT,
  `bugName` varchar(50) NOT NULL,
  `BugCategory` varchar(500) NOT NULL,
  `BugSummary` varchar(500) NOT NULL,
  PRIMARY KEY (`bugID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `bugs` (`bugID`, `bugName`, `BugCategory`, `BugSummary`) VALUES
(1,	'StageFrightBug ',	'Android',	'Stagefright is the collective name for a group of software bugs, that affect versions 2.2 and newer of the Android operating system, allowing an attacker to perform arbitrary operations on the victim device through remote code execution and privilege escalation.'),
(11,	'Dr Crabbs Evil Bug',	' iOS',	'The DCEB is a very powerful and fictional bug that infects iOS devices and does absolutely nothing at all. Its only purpose is to provide dummy data for assessed labs'),
(41,	'trojan horse',	'Windows',	' Gets into your system and mess things up like applications, directory files and documents.'),
(51,	'computer worms',	'Windows',	' A standalone malware computer program that replicates itself in order to spread to other computers.[1] Often, it uses a computer network to spread itself, relying on security failures on the target computer to access it. Unlike a computer virus, it does not need to attach itself to an existing program.'),
(61,	'Mr',	'iOS',	' bug is an error, flaw, failure, or fault in a computer program or system that causes it to produce an incorrect or unexpected result, or to behave in unintended ways'),
(62,	'ios bugger king',	'iOS',	' Attacks Mac / Apple systems.'),
(81,	'mac virus',	'iOS',	' Virus attacks only Mac systems was discovered few years ago, more research is still going on about it .'),
(101,	'love bug',	'Android ',	'  very deadly'),
(111,	'Ant bug',	'iOS',	' Attacks mainly mac systems');

-- 2016-04-30 22:47:52
