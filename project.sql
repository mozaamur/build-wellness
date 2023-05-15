-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 12:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `coaches`
--

CREATE TABLE `coaches` (
  `name` varchar(20) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `number` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coaches`
--

INSERT INTO `coaches` (`name`, `gender`, `number`) VALUES
('moza', 'female', 98654235),
('rayan', 'female', 93456432),
('ali', 'male', 99654243),
('omar', 'male', 97653345),
('amira', 'female', 99764555),
('noor', 'female', 99976533),
('ahmed', 'male', 98666443);

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `name` varchar(20) NOT NULL,
  `age` int(2) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`name`, `age`, `email`) VALUES
('Moza', 20, 's135058@student.squ.edu.om'),
('Sara', 21, 's134573@student.squ.edu.om'),
('Rayan', 20, 's134576@student.squ.edu.om'),
('Amjad', 18, 'amjad2005@gmail.com'),
('Rahma', 19, 's144671@student.squ.edu.om'),
('Hajer', 35, 'hajer_1992034@gmail.com'),
('Omar', 26, 'alismailiomar22@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `gyms`
--

CREATE TABLE `gyms` (
  `name` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `number` int(8) NOT NULL,
  `note` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gyms`
--

INSERT INTO `gyms` (`name`, `type`, `location`, `number`, `note`) VALUES
('flex', 'Ladies', 'Al Kuwair', 95878675, 'with swimming pool'),
('flex', 'Mixed', 'Sohar', 92889336, '	Personal trainer recommended'),
('Horizon', 'Men', 'Barka', 92889336, 'with swimming pool'),
('Horizon', 'Ladies', 'Al Amerat', 92844336, 'Excellent personal trainer'),
('style fitness', 'Ladies', 'Nizwa	', 95878675, 'There is a nursery for children'),
('Alwafi fitness', 'men', 'Sharqiyah', 95878675, 'with swimming pool'),
('Fitness center', 'men', 'Musandam', 95878675, 'Personal trainer recommended'),
('THE GYM', 'Ladies', 'Buraimi', 95878675, 'Excellent personal trainer');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
