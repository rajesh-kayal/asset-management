-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2023 at 12:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assets-management`
--

-- --------------------------------------------------------

--
-- Table structure for table `asset_classes`
--

CREATE TABLE `asset_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_id` varchar(255) NOT NULL,
  `class_description` varchar(255) NOT NULL,
  `asset_life` int(11) NOT NULL,
  `Rate_of_def_c_act` decimal(10,0) NOT NULL,
  `Rate_of_def_it_act` decimal(10,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asset_classes`
--

INSERT INTO `asset_classes` (`id`, `class_id`, `class_description`, `asset_life`, `Rate_of_def_c_act`, `Rate_of_def_it_act`, `created_at`, `updated_at`) VALUES
(1, '001', 'Furniture', 3, 64, 41, '2023-12-27 04:59:23', '2023-12-27 05:30:47'),
(2, '002', 'Furniture new', 1, 11, 22, '2023-12-27 05:31:35', '2023-12-27 05:31:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asset_classes`
--
ALTER TABLE `asset_classes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `asset_classes_class_id_unique` (`class_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asset_classes`
--
ALTER TABLE `asset_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
