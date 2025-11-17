-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2025 at 02:17 AM
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
-- Database: `akhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `akhir`
--

CREATE TABLE `akhir` (
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `usia` int DEFAULT NULL,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `no_hp` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akhir`
--

INSERT INTO `akhir` (`username`, `password`, `usia`, `nama`, `alamat`, `email`, `no_hp`) VALUES
('1232', '$2y$10$CfRhx5M24SjtkRgJEOAj3eHORMotC7UueI6sRsUhnBmwaxBOKrVJi', 22, '', '123125124124312', '2541243123123123', '183830202122'),
('nasgor', '$2y$10$z552ATt9bvkC3RYZ/Ue12Ogp3HeeEfS2oGgxmO6VKnAX7CNtEVDcO', 22, '', 'Jl Wiyung simpang no 81', '1231241', '0838302022122'),
('123', '$2y$10$IfrVGnmxeS6Qj8dMOE94QOIOCRRyMF193STBuJXkDBbdWSz0wVOp6', 12, '', '123', '12', '1111111111'),
('123', '$2y$10$swy9O3jP2Ph4650lD4isFuVtS4beh4rmUytvIV.Umjb4MEE0XWpgK', 123, '', '123', '123', '3125151231243'),
('nasgor', '$2y$10$KkdzmWDkcBuEdCx/QCWazudPnt9l3wfPmMJuwvW5QTEHVqxih5SrG', 17, 'Collin', 'Jl Wiyung simpang no 81', 'gunawangeorge28@gmail.com', '3125151231243'),
('123', '$2y$10$Ic7CKCeBWMFXqjCeNm14yuBr9iegRcDXAD.kvj4tGwdjDFZ3EYT.K', 12, 'Collin', 'Jl Wiyung simpang no 81', '123', '1234567890'),
('kennethbot111', '$2y$10$UDmwnMFfBKXuHdBx5JirreZOP6UIsazSIZZfJ8v0GhCXi45B5tjse', 2, 'Collin', 'Jl Wiyung simpang no 81', 'gunawangeorge28@gmail.com', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int NOT NULL,
  `kendaraan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `waktu` datetime NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `no_hp` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `kendaraan`, `waktu`, `nama`, `alamat`, `no_hp`) VALUES
(9, 'Ferarri SF90', '2025-11-06 00:00:00', 'Collin', 'Jl Wiyung simpang no 81', 183830202),
(10, 'Bugatti', '2025-10-26 00:00:00', 'Collin', 'Jl Darmo no 182', 1234567890);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
