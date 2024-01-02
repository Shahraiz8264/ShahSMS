-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 21, 2023 at 12:13 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Image` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `Image`) VALUES
(1, 'admin', 'admin@123', '112233', ''),
(2, 'Admin', 'Admin@gmail.com', '8264', ''),
(3, 'admin', 'shahraiz1906f@aptechsite.com', '', ''),
(4, 'admin', 'shahraiz1906f@aptechsite.com', '$2y$10$zn6fiRicFG2ssiGN4t21zuA57ozJG8iNBomTQB8.CpWKi.O9g7UqO', ''),
(5, 'SHAHRAIZ AZAM KHAN', 'bc220207838sak@vu.edu.pk', '$2y$10$eH9wdZZaCZ1Wz0Ggs55kn.r5iwBf6tCo7sknc97CJTJNwyk5umUKi', 0x576861747341707020496d61676520323032332d31312d313520617420312e33332e343420504d2e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

DROP TABLE IF EXISTS `stud`;
CREATE TABLE IF NOT EXISTS `stud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `num` varchar(255) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `standard` varchar(255) NOT NULL,
  `add_fee` varchar(255) NOT NULL,
  `tut_fee` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `join_date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud`
--

INSERT INTO `stud` (`id`, `name`, `f_name`, `num`, `sub`, `standard`, `add_fee`, `tut_fee`, `address`, `join_date`, `status`, `Image`) VALUES
(1, 'SHAHRAIZ AZAM KHAN', 'Azam Khan', '03342811203', 'B.Com', '34', '44555', '55555', 'rtyuj', '2023-12-15', 'Active', 'file (1).jpeg'),
(6, 'HR Digit', 'rr', '4556666', 'B.B.A', '5', '4546464', '64646464', 'hhhhhhh', '2023-12-22', 'Active', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
