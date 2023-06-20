-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 11:20 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_informasi`
--

CREATE TABLE `db_informasi` (
  `id` int(11) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `prodi` varchar(255) DEFAULT NULL,
  `waktu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_informasi`
--

INSERT INTO `db_informasi` (`id`, `deskripsi`, `gambar`, `prodi`, `waktu`) VALUES
(4, 'lorem ipsum', '647fd93b42b3f.jpg', NULL, ''),
(5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '64914d6f5b158.png', 'Biologi', ''),
(6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '64914d8fda2ba.png', 'Informatika', ''),
(7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '64915cbade53d.jpg', 'Biologi', '2023-06-20T15:00'),
(8, 'lorem ipsum', '6491632e26a38.jpg', 'Biologi', '2023-06-20T15:28');

-- --------------------------------------------------------

--
-- Table structure for table `db_mahasiswaunsharing`
--

CREATE TABLE `db_mahasiswaunsharing` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `fakultas` varchar(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `roleAs` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_mahasiswaunsharing`
--

INSERT INTO `db_mahasiswaunsharing` (`id`, `nama`, `prodi`, `fakultas`, `email`, `password`, `roleAs`) VALUES
(1, 'admin', 'administrator', 'administrator', 'admin@admin.com', 'admin123', 'Mahasiswa'),
(2, 'triyuli', 'informatika', 'fatisda', 'triyuli@student.uns.ac.id', 'asd123', 'Mahasiswa'),
(3, 'triyuli', 'informatika', 'fatisda', 'salomopolanco@student.uns.ac.id', 'asd123', 'Mahasiswa'),
(5, 'Salomo Polanco', 'Informatika', 'FATISDA', 'salomopm26@student.uns.ac.id', 'asd123', 'Mahasiswa'),
(6, 'Salomo Polanco', 'Informatika', 'FATISDA', 'salomopm26123@student.uns.ac.id', 'asd123', 'Mahasiswa'),
(9, 'Klein Moretti', 'Informatika', 'FATISDA', 'salomopm123@student.uns.ac.id', 'asd123', 'Mahasiswa'),
(10, 'admin', 'administrator', 'administrator', 'admin@admin.com', 'admin123', 'admin'),
(19, 'Leonard Mitchell', 'Biologi', 'FMIPA', 'leonardmitchell@student.uns.ac.id', 'asd123', 'Mahasiswa'),
(20, 'Tulus', 'Informatika', 'FATISDA', 'tulus@student.uns.ac.id', 'asd123', 'Mahasiswa'),
(21, 'Derrick Berg', 'Biologi', 'FMIPA', 'derrickberg@student.uns.ac.id', 'asd123', 'Mahasiswa'),
(23, 'Alger', 'Biologi', 'FMIPA', 'alger@student.uns.ac.id', 'asd123', 'Mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_informasi`
--
ALTER TABLE `db_informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_mahasiswaunsharing`
--
ALTER TABLE `db_mahasiswaunsharing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_informasi`
--
ALTER TABLE `db_informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `db_mahasiswaunsharing`
--
ALTER TABLE `db_mahasiswaunsharing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
