-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 11:24 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eternity`
--

-- --------------------------------------------------------

--
-- Table structure for table `construction_documents`
--

CREATE TABLE `construction_documents` (
  `id_key` int(11) NOT NULL,
  `constructionId` text NOT NULL,
  `constructionName` varchar(255) NOT NULL,
  `constructionStart` varchar(255) NOT NULL,
  `constructionEnd` varchar(255) NOT NULL,
  `constructionFile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contract_documents`
--

CREATE TABLE `contract_documents` (
  `id_key` int(11) NOT NULL,
  `contractId` text NOT NULL,
  `nameOfContract` varchar(255) NOT NULL,
  `customerName` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `startDate` varchar(255) NOT NULL,
  `endDate` varchar(255) NOT NULL,
  `details` varchar(500) NOT NULL,
  `contractFile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `drawings`
--

CREATE TABLE `drawings` (
  `id_key` int(255) NOT NULL,
  `drawingId` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `typeDrawing` varchar(255) NOT NULL,
  `typeProperty` varchar(255) NOT NULL,
  `propertySize` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `bedrooms` int(25) NOT NULL,
  `bathrooms` int(25) NOT NULL,
  `garage` int(25) NOT NULL,
  `drawingFile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project_manuals`
--

CREATE TABLE `project_manuals` (
  `id_key` int(11) NOT NULL,
  `projectId` text NOT NULL,
  `projectName` varchar(255) NOT NULL,
  `projectStart` varchar(255) NOT NULL,
  `projectEnd` varchar(255) NOT NULL,
  `projectLocation` varchar(255) NOT NULL,
  `projectFile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `submittal_documents`
--

CREATE TABLE `submittal_documents` (
  `id_key` int(11) NOT NULL,
  `submittalId` text NOT NULL,
  `submittalName` varchar(255) NOT NULL,
  `submittalStart` varchar(255) NOT NULL,
  `submittalEnd` varchar(255) NOT NULL,
  `submittalFile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `construction_documents`
--
ALTER TABLE `construction_documents`
  ADD PRIMARY KEY (`id_key`);

--
-- Indexes for table `contract_documents`
--
ALTER TABLE `contract_documents`
  ADD PRIMARY KEY (`id_key`);

--
-- Indexes for table `drawings`
--
ALTER TABLE `drawings`
  ADD PRIMARY KEY (`id_key`);

--
-- Indexes for table `project_manuals`
--
ALTER TABLE `project_manuals`
  ADD PRIMARY KEY (`id_key`);

--
-- Indexes for table `submittal_documents`
--
ALTER TABLE `submittal_documents`
  ADD PRIMARY KEY (`id_key`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `construction_documents`
--
ALTER TABLE `construction_documents`
  MODIFY `id_key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contract_documents`
--
ALTER TABLE `contract_documents`
  MODIFY `id_key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `drawings`
--
ALTER TABLE `drawings`
  MODIFY `id_key` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `project_manuals`
--
ALTER TABLE `project_manuals`
  MODIFY `id_key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `submittal_documents`
--
ALTER TABLE `submittal_documents`
  MODIFY `id_key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
