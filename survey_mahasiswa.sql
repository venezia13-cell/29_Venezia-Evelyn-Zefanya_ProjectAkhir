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
-- Table structure for table `survey_mahasiswa`
--

CREATE TABLE `survey_mahasiswa` (
  `id` int NOT NULL,
  `nama` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `alasan_beasiswa` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `negara_tujuan` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `bidang_studi` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `harapan` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `rencana_setelah_lulus` varchar(600) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `survey_mahasiswa`
--

INSERT INTO `survey_mahasiswa` (`id`, `nama`, `email`, `tanggal`, `alasan_beasiswa`, `negara_tujuan`, `bidang_studi`, `harapan`, `rencana_setelah_lulus`) VALUES
(1, 'lusiana wibowo', 'lusiana@gmail.com', '1902-04-13', 'ya tertarik ', 'Singapore', 'Teknik Mesin', 'Beli mobil', 'kerja'),
(2, 'nesya kartika', 'nesya@gmail.com', '2025-11-14', 'karena sangat membantu', 'Indonesia', 'bisnis', 'dapat beasiswa terbaik', 'bekerja di perusahaan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `survey_mahasiswa`
--
ALTER TABLE `survey_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `survey_mahasiswa`
--
ALTER TABLE `survey_mahasiswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
