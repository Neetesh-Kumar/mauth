-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 11:17 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mauth`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$chSzVhq8KwSRIXLgEz3oy.T3Mn4JjD9xQNPYu.mFoFlBdTTQj9LSC', NULL, '2021-11-26 00:42:08', '2021-11-26 00:42:08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `reg_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_sonof` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_grandchild` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_work` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_work_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_nic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_datebirth` date NOT NULL,
  `reg_number` int(11) NOT NULL,
  `reg_landline` int(11) NOT NULL,
  `reg_wife` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_daughter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_grand_daughter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_childerns` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_child1_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_child1_age` int(11) DEFAULT NULL,
  `reg_child1_education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_child1_nic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_child1_marital` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_child2_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_child2_age` int(11) DEFAULT NULL,
  `reg_child2_education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_child2_nic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_child2_marital` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_child3_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_child3_age` int(11) DEFAULT NULL,
  `reg_child3_education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_child3_nic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_child3_marital` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_child4_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_child4_age` int(11) DEFAULT NULL,
  `reg_child4_education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_child4_nic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_child4_marital` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_child5_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_child5_age` int(11) DEFAULT NULL,
  `reg_child5_education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_child5_nic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_child5_marital` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_child6_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_child6_age` int(11) DEFAULT NULL,
  `reg_child6_education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_child6_nic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_child6_marital` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_child7_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_child7_age` int(11) DEFAULT NULL,
  `reg_child7_education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_child7_nic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_child7_marital` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `reg_img`, `user_id`, `reg_password`, `reg_fname`, `reg_lname`, `reg_sonof`, `reg_grandchild`, `reg_education`, `reg_address`, `reg_work`, `reg_work_address`, `reg_nic`, `reg_datebirth`, `reg_number`, `reg_landline`, `reg_wife`, `reg_daughter`, `reg_grand_daughter`, `reg_childerns`, `reg_child1_name`, `reg_child1_age`, `reg_child1_education`, `reg_child1_nic`, `reg_child1_marital`, `reg_child2_name`, `reg_child2_age`, `reg_child2_education`, `reg_child2_nic`, `reg_child2_marital`, `reg_child3_name`, `reg_child3_age`, `reg_child3_education`, `reg_child3_nic`, `reg_child3_marital`, `reg_child4_name`, `reg_child4_age`, `reg_child4_education`, `reg_child4_nic`, `reg_child4_marital`, `reg_child5_name`, `reg_child5_age`, `reg_child5_education`, `reg_child5_nic`, `reg_child5_marital`, `reg_child6_name`, `reg_child6_age`, `reg_child6_education`, `reg_child6_nic`, `reg_child6_marital`, `reg_child7_name`, `reg_child7_age`, `reg_child7_education`, `reg_child7_nic`, `reg_child7_marital`, `created_at`, `updated_at`) VALUES
(1, 'Admin/reg_img/reg_img-1637987876-t1.png', 'DJSB-00000', '$2y$10$I6B8/pp/RDD7Evfec9VNBuc79V.oF0PSBepyzdBYLwawJath/881C', 'Updated', 'Ali', 'Saleh', 'Test', 'Matric Fail', 'dwqqw', 'Business', 'Test', '12345-6789567-8', '2021-10-31', 1332444, 3443, 'UNKNOWN', 'Test', 'Aneel', 'None', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-26 23:37:58', '2021-11-27 01:11:38'),
(2, 'Admin/reg_img/reg_img-1637998519-t1.png', 'DJSB-00001', '$2y$10$yH7r./DG1y6uMZMK9J4BaOKbYF903oK36BhaOSrvlms2uZKWx5Tum', 'Test', 'Test', 'Test', 'Test', 'Test', 'dsadsa', 'Job', 'Test', '12345-6789567-8', '2021-11-11', 32213, 13132323, 'test', 'Test', 'Test', 'None', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-27 02:35:21', '2021-11-27 02:35:21'),
(3, 'Admin/reg_img/reg_img-1637999632-t3.png', 'DJSB-00002', '$2y$10$f/rhFJd8qTJQFSCuyeEb0u6wz4Ib687uV4LLCXtMWk3HCiPU3Auqa', 'Test', 'Ali', 'Test', 'I dont Know', 'Matric Fail', 'dswdsd', 'Business', 'Karachi', '12345-6789567-8', '2021-11-11', 34522, 33432, 'test', 'Dont Know', 'Aneel', 'None', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-27 02:53:53', '2021-11-27 02:53:53'),
(4, 'Admin/reg_img/reg_img-1638336960-t1.png', 'DJSB-00003', '$2y$10$/PKuLMgAqtAJEpAPN9Fmm..XaRFzL.tSF1l5mtJIXFrrB3tudu.Pe', 'Zahid', 'Ali', 'Saleh', 'I dont Know', 'Matric Fail', 'hogia bara ab kam kar l', 'Job', 'Test', '12345-6789567-8', '2021-12-02', 13332, 213123, 'UNKNOWN', 'Dont Know', 'Update1', 'None', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-01 00:36:01', '2021-12-01 00:36:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
