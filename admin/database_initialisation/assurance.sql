-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 10:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assurance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(8) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `energie`
--

CREATE TABLE `energie` (
  `id` int(8) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prix_an` varchar(100) NOT NULL,
  `prix_abonnement_annuel` varchar(30) NOT NULL,
  `prix_kwh` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `energie_dualite`
--

CREATE TABLE `energie_dualite` (
  `id` int(8) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prix_an` varchar(100) NOT NULL,
  `prix_abonnement_annuel` varchar(100) NOT NULL,
  `prix_kwh` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `energie_electrique`
--

CREATE TABLE `energie_electrique` (
  `id` int(8) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prix_an` varchar(100) NOT NULL,
  `prix_abonnement_annuel` varchar(100) NOT NULL,
  `prix_kwh` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `energie_gaz`
--

CREATE TABLE `energie_gaz` (
  `id` int(8) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prix_an` varchar(100) NOT NULL,
  `prix_abonnement_annuel` varchar(100) NOT NULL,
  `prix_kwh` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `telecoms`
--

CREATE TABLE `telecoms` (
  `id` int(8) NOT NULL,
  `nom_offre` varchar(100) NOT NULL,
  `debit` varchar(100) NOT NULL,
  `prix` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `telecoms_internet`
--

CREATE TABLE `telecoms_internet` (
  `id` int(8) NOT NULL,
  `nom_offre` varchar(100) NOT NULL,
  `debit` varchar(100) NOT NULL,
  `prix` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `telecoms_mobile`
--

CREATE TABLE `telecoms_mobile` (
  `id` int(8) NOT NULL,
  `nom_offre` varchar(100) NOT NULL,
  `debit` varchar(100) NOT NULL,
  `prix` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `energie`
--
ALTER TABLE `energie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `energie_dualite`
--
ALTER TABLE `energie_dualite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `energie_electrique`
--
ALTER TABLE `energie_electrique`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `energie_gaz`
--
ALTER TABLE `energie_gaz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telecoms`
--
ALTER TABLE `telecoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telecoms_internet`
--
ALTER TABLE `telecoms_internet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telecoms_mobile`
--
ALTER TABLE `telecoms_mobile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `energie`
--
ALTER TABLE `energie`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `energie_dualite`
--
ALTER TABLE `energie_dualite`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `energie_electrique`
--
ALTER TABLE `energie_electrique`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `energie_gaz`
--
ALTER TABLE `energie_gaz`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `telecoms`
--
ALTER TABLE `telecoms`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `telecoms_internet`
--
ALTER TABLE `telecoms_internet`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `telecoms_mobile`
--
ALTER TABLE `telecoms_mobile`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
