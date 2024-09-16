-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 16, 2024 at 01:28 PM
-- Server version: 10.11.8-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u658333731_SANVI_DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Baptism`
--

CREATE TABLE `Baptism` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bday` date DEFAULT NULL,
  `baptismal_date` date DEFAULT NULL,
  `parents_name` varchar(255) DEFAULT NULL,
  `baptized_by` varchar(255) DEFAULT NULL,
  `godparent_names` text DEFAULT NULL,
  `parish_church` varchar(255) DEFAULT NULL,
  `canonical_book_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Communion`
--

CREATE TABLE `Communion` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `first_com_date` date DEFAULT NULL,
  `first_confessor` varchar(255) DEFAULT NULL,
  `parish_church` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Confirmation`
--

CREATE TABLE `Confirmation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `confirm_date` date DEFAULT NULL,
  `parish_church` varchar(255) DEFAULT NULL,
  `godparent_names` text DEFAULT NULL,
  `confirmed_by` varchar(255) DEFAULT NULL,
  `canonical_book_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Marriage`
--

CREATE TABLE `Marriage` (
  `id` int(11) NOT NULL,
  `couple_names` varchar(255) NOT NULL,
  `marriage_date` date DEFAULT NULL,
  `officiated_by` varchar(255) DEFAULT NULL,
  `godparent_names` text DEFAULT NULL,
  `parish_church` varchar(255) DEFAULT NULL,
  `canonical_book_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `MassForTheFaithfulDeparted`
--

CREATE TABLE `MassForTheFaithfulDeparted` (
  `id` int(11) NOT NULL,
  `by_name` varchar(255) DEFAULT NULL,
  `for_name` varchar(255) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Others`
--

CREATE TABLE `Others` (
  `id` int(11) NOT NULL,
  `by_name` varchar(255) DEFAULT NULL,
  `for_name` varchar(255) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ThanksgivingMass`
--

CREATE TABLE `ThanksgivingMass` (
  `id` int(11) NOT NULL,
  `by_name` varchar(255) DEFAULT NULL,
  `for_name` varchar(255) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `Baptism`
--
ALTER TABLE `Baptism`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Communion`
--
ALTER TABLE `Communion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Confirmation`
--
ALTER TABLE `Confirmation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Marriage`
--
ALTER TABLE `Marriage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `MassForTheFaithfulDeparted`
--
ALTER TABLE `MassForTheFaithfulDeparted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Others`
--
ALTER TABLE `Others`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ThanksgivingMass`
--
ALTER TABLE `ThanksgivingMass`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Baptism`
--
ALTER TABLE `Baptism`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Communion`
--
ALTER TABLE `Communion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Confirmation`
--
ALTER TABLE `Confirmation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Marriage`
--
ALTER TABLE `Marriage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `MassForTheFaithfulDeparted`
--
ALTER TABLE `MassForTheFaithfulDeparted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Others`
--
ALTER TABLE `Others`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ThanksgivingMass`
--
ALTER TABLE `ThanksgivingMass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
