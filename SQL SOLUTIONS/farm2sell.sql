-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 22, 2024 at 01:27 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farm2sell`
--

-- --------------------------------------------------------

--
-- Table structure for table `familymembers`
--

DROP TABLE IF EXISTS `familymembers`;
CREATE TABLE IF NOT EXISTS `familymembers` (
  `id` int NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Gender` varchar(25) DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `familymembers`
--

INSERT INTO `familymembers` (`id`, `FirstName`, `LastName`, `Gender`, `DateOfBirth`) VALUES
(1, 'Martin', 'Muwanguzi', 'Male', '1975-08-10'),
(2, 'Sandra', 'Muwanguzi', 'Female', '1981-02-11'),
(3, 'Samantha', 'Muwanguzi', 'Female', '2004-01-12'),
(4, 'Tony', 'Muwanguzi', 'Male', '2006-03-17'),
(5, 'Timothy', 'Muwanguzi', 'Male', '2008-03-19'),
(6, 'Catherine', 'Muwanguzi', 'Female', '2010-05-21'),
(7, 'Cynthia', 'Muwanguzi', 'Female', '2014-09-10');

-- --------------------------------------------------------

--
-- Table structure for table `preferredmovies`
--

DROP TABLE IF EXISTS `preferredmovies`;
CREATE TABLE IF NOT EXISTS `preferredmovies` (
  `id` int NOT NULL,
  `userID` int DEFAULT NULL,
  `PreferredMovie` varchar(255) DEFAULT NULL,
  `TypeOfMovie` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userID` (`userID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `preferredmovies`
--

INSERT INTO `preferredmovies` (`id`, `userID`, `PreferredMovie`, `TypeOfMovie`) VALUES
(1, 1, 'Kingsman', 'Action'),
(2, 1, 'The Lego Movie', 'Animation'),
(3, 1, 'Batman vs Superman', 'Action'),
(4, 2, 'Flatliners', 'Thriller'),
(5, 2, 'Battle of the Sexes', 'Drama'),
(6, 2, 'Mother', 'Drama'),
(7, 2, 'American Made', 'Drama'),
(8, 2, 'Wonder Woman', 'Action'),
(9, 3, 'The Lego Movie', 'Animation'),
(10, 3, 'Beauty and the Beast', 'Animation'),
(11, 4, 'Kingsman', 'Action'),
(12, 5, 'The Lego Movie', 'Animation'),
(13, 5, 'Batman vs Superman', 'Action'),
(14, 5, 'Guardians of the Galaxy', 'Action'),
(15, 6, 'Mother', 'Drama');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
