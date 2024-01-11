-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2023 at 08:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

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
  `Fixed_asset_no` varchar(100) NOT NULL,
  `Class_code` int(11) NOT NULL,
  `Fixed_asset_id` varchar(100) NOT NULL,
  `status` varchar(255) NOT NULL,
  `asset_type` varchar(100) NOT NULL,
  `asset_description` varchar(255) NOT NULL,
  `asset_models` varchar(255) NOT NULL,
  `asset_vendor` varchar(255) NOT NULL,
  `asset_manufacturing` varchar(255) NOT NULL,
  `department_code` bigint(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `acquisition_date` date NOT NULL,
  `original_cost` varchar(100) NOT NULL,
  `depreciation_beg_date` date NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `life` varchar(255) NOT NULL,
  `replacement_value` varchar(255) NOT NULL,
  `depreciation_amount` varchar(100) NOT NULL,
  `invoice` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `Fixed_asset_no`, `Class_code`, `Fixed_asset_id`, `status`, `asset_type`, `asset_description`, `asset_models`, `asset_vendor`, `asset_manufacturing`, `department_code`, `location`, `quantity`, `acquisition_date`, `original_cost`, `depreciation_beg_date`, `account_number`, `life`, `replacement_value`, `depreciation_amount`, `invoice`, `created_at`, `updated_at`) VALUES
(2, '0', 1100, 'uudvhuohovu', 'nvnkwv', '', 'njvfnoef', 'uyw1otwdy', 'nb,vj', '2023-12-24', 95, 'kbrkrnkrn', '8860', '2023-12-19', '868068', '2023-12-20', 'y8680680', '5 Years', '7t857', 'tyhtiut7979', '1703421796_MongoDb commands.docx', '2023-12-24 07:13:16', '2023-12-24 07:13:16'),
(3, '1', 1000, 'uudvhuohovu', 'kgkuguoouto7', '', '8996908', 'gykyfk', 'jlglu', '2023-12-25', 96, 't7975', '7606', '2023-12-31', '688468', '2023-12-24', 'r66ryrgjh', '5 Years', 'yti7i7i', 'tyhtiut7979', '1703422462_MongoDb commands.docx', '2023-12-24 07:24:22', '2023-12-24 07:24:22'),
(4, '01', 1300, 'vdijihvsdvsdf', 'ldsvldvb', 'Intangible', 'njvfnoef', 'nm v', 'Microsoft Corporation', '2023-12-24', 97, 'Company Headquarters', '8758', '2023-12-24', '787', '2023-12-24', 'jhibiyig7t779', '5 Years', '866690n', 'tyhtiut7979', '1703429903_MCA_Rajesh Kayal_OOPS using C++.pdf', '2023-12-24 08:06:38', '2023-12-24 09:28:23');

-- --------------------------------------------------------

--
-- Table structure for table `asset_classes`
--

CREATE TABLE `asset_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_id` varchar(255) NOT NULL,
  `class_description` varchar(255) NOT NULL,
  `asset_life` int(11) NOT NULL,
  `account_description` varchar(255) NOT NULL,
  `category_description` varchar(255) NOT NULL,
  `account_code` varchar(255) NOT NULL,
  `category_code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asset_classes`
--

INSERT INTO `asset_classes` (`id`, `class_id`, `class_description`, `asset_life`, `account_description`, `category_description`, `account_code`, `category_code`, `created_at`, `updated_at`) VALUES
(1, 'VDFA/2023/001', 'jj', 3, '8u8980', 'Land', 'jj j', 'grkorge', '2023-12-24 00:02:05', '2023-12-24 00:02:05'),
(2, 'IVDFA/2023/002', 'nnon', 3, '8u8980', 'Land', 'njn', 'grkorge', '2023-12-24 00:04:11', '2023-12-24 00:04:11'),
(3, 'IVDFA/2023/003', 'nnon', 5, 'knonlll', 'Furniture & Accessories', 'gkwkgr', 'grkorge', '2023-12-24 02:03:37', '2023-12-24 04:06:02'),
(4, 'IVDFA/2023/004', 'lmmpk', 4, 'lbgk gtr', 'Furniture & Accessories', 'oiiinip', 'nnonoino', '2023-12-24 04:21:04', '2023-12-24 04:21:04'),
(5, 'IVDFA/2023/005', 'kjjonoinoi', 3, '8u8980kk', 'Land', 'jnnjnojno', 'njijibiu', '2023-12-24 04:21:48', '2023-12-24 04:21:48'),
(6, 'IVDFA/2023/006', 'knjnjo', 5, 'ononoi', 'Land', 'jnnjonono', 'jniib', '2023-12-24 04:22:12', '2023-12-24 04:22:12'),
(7, 'IVDFA/2023/007', 'jj', 4, 'knonjh', 'Land', 'jj j', 'njjn', '2023-12-24 15:20:49', '2023-12-24 15:20:49'),
(8, 'IVDFA/2023/008', 'kmk', 3, 'knonjh', 'Land', 'gkwkgr', 'grkorge00', '2023-12-24 15:26:14', '2023-12-24 15:26:14');

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

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `program_code`, `department_code`, `program_name`, `department_description`, `created_at`, `updated_at`) VALUES
(1, '8680808', '75857', 'vvhjckhk', 'cgcmjc', '2023-12-23 14:00:53', '2023-12-24 13:46:09'),
(2, '709979909-', 'jvhhhjki', 'touuotouo', 'cgjgj', '2023-12-25 08:35:30', '2023-12-25 08:35:30'),
(3, NULL, NULL, NULL, NULL, '2023-12-25 09:11:24', '2023-12-25 09:18:14'),
(4, 'new dept', 'jvhhhjki', 'touuotouo', 'cgjgj', '2023-12-25 09:19:12', '2023-12-25 09:28:58');

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
(1, '888', 'fhjkkh', '2023-12-23 14:00:53', '2023-12-24 13:46:09'),
(2, '696889680', 'jjhkuguu', '2023-12-25 08:35:30', '2023-12-25 08:35:30'),
(3, 'ljhjbl', ',,jvvjlvjjl111', '2023-12-25 09:33:18', '2023-12-25 09:33:36');

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

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `userid`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 1012, 'IVD Admin', '$2y$10$0BjqzTCrPYalCxZbc6XD9.v0nMe.i7YwLAix2ysqOOKP95eIitPWy', '2023-12-23 13:42:58', '2023-12-23 13:42:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(15, '2014_10_12_000000_create_users_table', 1),
(16, '2014_10_12_100000_create_password_resets_table', 1),
(17, '2019_08_19_000000_create_failed_jobs_table', 1),
(18, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(19, '2023_12_22_050222_create_logins_table', 1),
(20, '2023_12_22_054449_create_admins_table', 1),
(21, '2023_12_23_081711_create_asset_classes_table', 1),
(22, '2023_12_23_133843_create_assets_table', 1),
(23, '2023_12_23_144445_create_vendors_table', 2),
(24, '2023_12_23_191217_create_locations_table', 3),
(25, '2023_12_23_191413_create_departments_table', 3),
(26, '2023_12_23_200336_create_users_table', 4);

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

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone_number`, `designation`, `asset`, `created_at`, `updated_at`) VALUES
(1, 'Rajeshlkk', '6289943975', 'Jr PHP Laravel Developer', 'bjkjj', '2023-12-23 14:39:29', '2023-12-24 14:19:38'),
(2, 'Rajesh', '970772170737', 'Jr PHP Laravel Developer', '11111111111', '2023-12-24 14:00:52', '2023-12-24 14:00:52'),
(3, 'Rajesh', '970772170737', 'Front End UI / React JS Developer', 'bjkjj', '2023-12-24 14:19:55', '2023-12-24 14:19:55'),
(4, 'Rajesh', '8965599997', 'Front End UI / React JS Developer', 'bjkjj', '2023-12-24 14:23:51', '2023-12-24 14:24:22'),
(5, 'Mnot77', '8y965599997', 'Jr PHP Laravel Developer', '11111111111', '2023-12-25 00:47:07', '2023-12-25 13:40:55'),
(6, 'Mno', '8y965599997', 'Jr PHP Laravel Developer', '11111111111', '2023-12-25 00:47:22', '2023-12-25 00:47:22'),
(7, 'Mno', '8y965599997', 'Jr PHP Laravel Developer', '11111111111', '2023-12-25 00:48:15', '2023-12-25 00:48:15'),
(8, 'Raju Sing', '8y965599997', 'Jr PHP Laravel Developer', '11111111111', '2023-12-25 00:48:32', '2023-12-25 00:48:32'),
(9, 'Arohi', '6296155279', 'Jr PHP Laravel Developer', '11111111111', '2023-12-25 00:48:47', '2023-12-25 00:48:47'),
(10, 'raju', '06296155279', 'Jr PHP Laravel Developer', '11111111111', '2023-12-25 00:49:10', '2023-12-25 00:49:10'),
(11, 'raju', '06296155279', 'Jr PHP Laravel Developer', '11111111111', '2023-12-25 00:51:29', '2023-12-25 00:51:29'),
(12, 'raju', '06296155279', 'Jr PHP Laravel Developer', '11111111111', '2023-12-25 00:51:39', '2023-12-25 00:51:39'),
(13, 'Rajesh', 'knhdzvk;hdv;ids', 'Sr Laravel Developer', 'furniture', '2023-12-25 13:40:35', '2023-12-25 13:40:35');

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
(1, 'uuuu', 'gououguoi9079-79-', '6578817187', '80600y80', 'rajesh@gmail.com', 'ininon', 'jij0ji0j0', 'oubbu9u', 'gtfyfcyfy', 'ninio', '777966', 'bbbugv', '2023-12-23 09:23:28', '2023-12-24 12:59:48'),
(2, 'yyiyfj', '75251482363', '6578817187', 'u80y760886', 'rajesh@gmail.com', 'bb98ygy8v8yyvg', 'bb9b9b99uh0', 'ij00ih08', 'uub9b9', 'nb9ubbu', 'niubbu9u', 'i9bubui', '2023-12-24 12:19:36', '2023-12-24 12:58:28');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `asset_classes`
--
ALTER TABLE `asset_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
