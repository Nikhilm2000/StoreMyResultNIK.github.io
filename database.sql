DROP DATABASE IF EXISTS PROJECTDB;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE DATABASE IF NOT EXISTS `ProjectDB` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ProjectDB`;


CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `marks` (
  `uid` int(10) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `USN` varchar(11) DEFAULT NULL,
  `sem` int(2) NOT NULL,
  `Branch` int(2) NOT NULL,
  `SUB1` varchar(30) DEFAULT NULL,
  `MRK1` int(3) DEFAULT 0,
  `SUB2` varchar(30) DEFAULT NULL,
  `MRK2` int(3) DEFAULT 0,
  `SUB3` varchar(30) DEFAULT NULL,
  `MRK3` int(3) DEFAULT 0,
  `SUB4` varchar(30) DEFAULT NULL,
  `MRK4` int(3) DEFAULT 0,
  `SUB5` varchar(30) DEFAULT NULL,
  `MRK5` int(3) DEFAULT 0,
  `SUB6` varchar(30) DEFAULT NULL,
  `MRK6` int(3) DEFAULT 0,
  `SUB7` varchar(30) DEFAULT NULL,
  `MRK7` int(3) DEFAULT 0,
  `SUB8` varchar(30) DEFAULT NULL,
  `MRK8` int(3) DEFAULT 0,
  `SUB9` varchar(30) DEFAULT NULL,
  `MRK9` int(3) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
