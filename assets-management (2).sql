-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2023 at 01:26 PM
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
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Fixed_asset_no` varchar(100) DEFAULT NULL,
  `Class_code` varchar(11) NOT NULL,
  `asset_type` varchar(100) NOT NULL,
  `asset_description` varchar(255) NOT NULL,
  `asset_vendor` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `purchase_date` date NOT NULL,
  `purchase_cost` int(100) NOT NULL,
  `invoice` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `Fixed_asset_no`, `Class_code`, `asset_type`, `asset_description`, `asset_vendor`, `location`, `quantity`, `purchase_date`, `purchase_cost`, `invoice`, `created_at`, `updated_at`) VALUES
(1, 'IVDFA/2023/001', '002', 'Tangible', 'Furniture ,Fixture\'s & Equipments', 'new vendor', 'In Office', '6', '2023-08-01', 10000, '1703764042_invoice.pdf', '2023-12-28 06:17:22', '2023-12-28 06:17:22'),
(2, 'IVDFA/2023/013', '001', 'Tangible', 'Furniture ,Fixture\'s & Equipments', 'new vendor', 'In Office', '5', '2023-08-01', 10000, '1703764138_invoice.pdf', '2023-12-28 06:18:58', '2023-12-28 06:18:58'),
(3, 'IVDFA/2023/003', '001', 'Tangible', 'Furniture ,Fixture\'s & Equipments', 'new vendor', 'In Office', '00', '2023-08-01', 10000, '1703764181_invoice.pdf', '2023-12-28 06:19:41', '2023-12-28 06:19:41');

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
(1, '001', 'Office Chairs', 3, 19, 10, '2023-12-28 05:06:14', '2023-12-28 05:06:14'),
(2, '002', 'Furniture', 4, 19, 10, '2023-12-28 05:22:45', '2023-12-28 05:22:45'),
(3, '003', 'Office Chairs', 3, 63, 40, '2023-12-28 05:44:54', '2023-12-28 05:44:54');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `program_code` varchar(255) DEFAULT NULL,
  `department_code` varchar(255) DEFAULT NULL,
  `program_name` varchar(255) DEFAULT NULL,
  `department_description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `depreciations`
--

CREATE TABLE `depreciations` (
  `id` int(11) NOT NULL,
  `class_id` varchar(11) NOT NULL,
  `purchase_date` date NOT NULL,
  `purchase_cost` decimal(10,2) NOT NULL,
  `purchase_days` double(10,0) DEFAULT NULL,
  `Company_current_year_depreciation` decimal(10,0) DEFAULT NULL,
  `Company_accumulated_depreciation` decimal(10,0) DEFAULT NULL,
  `It_current_year_depreciation` decimal(10,2) DEFAULT NULL,
  `It_accumulated_depreciation` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `depreciations`
--

INSERT INTO `depreciations` (`id`, `class_id`, `purchase_date`, `purchase_cost`, `purchase_days`, `Company_current_year_depreciation`, `Company_accumulated_depreciation`, `It_current_year_depreciation`, `It_accumulated_depreciation`, `created_at`, `updated_at`) VALUES
(1, '002', '2023-08-01', 10000.00, 150, 781, 9219, 1000.00, 9000.00, '2023-12-28 06:17:22', '2023-12-28 06:17:22'),
(2, '001', '2023-08-01', 10000.00, 150, 781, 9219, 1000.00, 9000.00, '2023-12-28 06:18:58', '2023-12-28 06:18:58'),
(3, '001', '2023-08-01', 10000.00, 150, 781, 9219, 1000.00, 9000.00, '2023-12-28 06:19:41', '2023-12-28 06:19:41');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `code`, `name`, `created_at`, `updated_at`) VALUES
(1, 'KOl001', 'In Office', '2023-12-28 05:08:20', '2023-12-28 05:08:20');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` bigint(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `asset` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `primary_contact` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `address_line1` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `address_line2` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `vendor_name`, `phone`, `mobile`, `primary_contact`, `email`, `description`, `address_line1`, `city`, `state`, `address_line2`, `country`, `zip_code`, `created_at`, `updated_at`) VALUES
(1, 'new vendor', '9832558986', '445446364364', '777777777', 'vendor@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-28 05:07:21', '2023-12-28 05:07:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asset_classes`
--
ALTER TABLE `asset_classes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `asset_classes_class_id_unique` (`class_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `depreciations`
--
ALTER TABLE `depreciations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `asset_classes`
--
ALTER TABLE `asset_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `depreciations`
--
ALTER TABLE `depreciations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
