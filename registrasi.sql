-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 16, 2025 at 04:25 PM
-- Server version: 8.0.43
-- PHP Version: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `FullName` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `Username` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `Age` int NOT NULL,
  `Email` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `Password` varchar(300) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`FullName`, `Username`, `Age`, `Email`, `Password`) VALUES
('ven', 'ssvenz', 13, 'lulubff@gmail.com', '$2y$10$1IZwn5ka905XYckBvK8XAOUIOfUeRfRUuaBYw9gJDogKhcvKbsW2e'),
('nesya', 'nesya14', 23, 'nesya@gmail.com', '$2y$10$QtgyjNbwJGt8g.iUMqhLneXMz.50cssu0N08y1FXRN9wKQOTkCvN.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
