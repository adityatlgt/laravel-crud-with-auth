-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 13, 2023 at 12:36 AM
-- Server version: 8.0.32-0ubuntu0.20.04.2
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint UNSIGNED NOT NULL,
  `type` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `type`, `name`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 2, 'dsdsds', NULL, 'cxcxcxcx', '2023-04-12 06:39:59', '2023-04-12 06:39:59'),
(2, 2, 'dkldfkfd', NULL, 'fggfgf', '2023-04-12 06:47:23', '2023-04-12 06:47:23'),
(3, 2, 'dkldfkfd', NULL, 'fggfgf', '2023-04-12 06:48:52', '2023-04-12 06:48:52'),
(4, 2, 'dsdsds', NULL, 'gfgf', '2023-04-12 06:49:15', '2023-04-12 06:49:15'),
(5, 2, 'dsdsds', NULL, 'gfgf', '2023-04-12 06:50:06', '2023-04-12 06:50:06'),
(6, 2, 'dsdsds', NULL, 'gfgf', '2023-04-12 06:53:20', '2023-04-12 06:53:20'),
(7, 2, 'dsdsds', NULL, 'gfgf', '2023-04-12 06:54:45', '2023-04-12 06:54:45'),
(8, 2, 'dkldfkfd', NULL, 'ghgh', '2023-04-12 06:55:25', '2023-04-12 06:55:25'),
(9, 3, 'fdfd', NULL, 'fdfdfd', '2023-04-12 06:56:30', '2023-04-12 06:56:30'),
(11, 2, 'fdfd', NULL, 'dfdfdfdfdf', '2023-04-12 06:57:39', '2023-04-12 06:57:39'),
(12, 2, 'fdfd', NULL, 'dfdfdfdfdf', '2023-04-12 06:58:10', '2023-04-12 06:58:10'),
(14, 2, 'fdfd', NULL, 'dfdfdfdfdf', '2023-04-12 06:59:03', '2023-04-12 06:59:03'),
(15, 1, 'fdfd', NULL, 'xccxcx', '2023-04-12 07:01:00', '2023-04-12 07:01:00'),
(16, 2, 'fdfd', NULL, 'hghhg', '2023-04-12 07:01:55', '2023-04-12 07:01:55'),
(19, 2, 'dsdsds', NULL, 'dsds', '2023-04-12 10:31:39', '2023-04-12 10:31:39'),
(20, 3, 'asas', NULL, 'sasasaas', '2023-04-12 10:32:27', '2023-04-12 10:32:27'),
(21, 3, 'dkldfkfd', NULL, 'dsdsds', '2023-04-12 10:33:25', '2023-04-12 10:33:25'),
(22, 1, 'dfdfd', NULL, 'dfdffd', '2023-04-12 10:35:43', '2023-04-12 10:35:43'),
(23, 1, 'dfdfd', NULL, 'dfdffd', '2023-04-12 10:36:36', '2023-04-12 10:36:36'),
(24, 1, 'dfdfd', NULL, 'dfdffd', '2023-04-12 10:37:02', '2023-04-12 10:37:02'),
(25, 1, 'dfdfd', NULL, 'dfdffd', '2023-04-12 10:37:22', '2023-04-12 10:37:22'),
(26, 1, 'dfdfd', NULL, 'dfdffd', '2023-04-12 10:38:37', '2023-04-12 10:38:37'),
(27, 2, 'hjhhj', NULL, 'hjhj', '2023-04-12 10:39:40', '2023-04-12 10:39:40'),
(28, 3, 'dsds', NULL, 'dsdsdsds', '2023-04-12 10:40:43', '2023-04-12 10:40:43'),
(29, 3, 'dsds', NULL, 'dsdsdsds', '2023-04-12 10:40:55', '2023-04-12 10:40:55'),
(30, 3, 'dsds', NULL, 'dsdsdsds', '2023-04-12 10:42:13', '2023-04-12 10:42:13'),
(31, 1, 'dkldfkfd', NULL, '5445', '2023-04-12 10:42:53', '2023-04-12 10:42:53'),
(32, 1, 'dkldfkfd', NULL, '5445', '2023-04-12 10:43:38', '2023-04-12 10:43:38'),
(33, 1, 'dkldfkfd', NULL, '5445', '2023-04-12 10:43:58', '2023-04-12 10:43:58'),
(34, 2, 'dffddf', NULL, 'dfdffd', '2023-04-12 10:44:38', '2023-04-12 10:44:38'),
(42, 1, 'dsdsds', 'images/event_42.png', 'sasa', '2023-04-12 11:19:46', '2023-04-12 11:36:57'),
(43, 2, 'dkldfkfd', 'images/event_43.png', 'dfdffd', '2023-04-12 11:48:57', '2023-04-12 11:48:57'),
(44, 1, 'fdfddf', 'images/event_44.png', 'fddfldfkkldf00000000000000000000000000fddfldf;\r\n\r\n\r\nkkldf00000000000000000000000000fddfldfkkldf00000000000000000000000000fddfldfkkldf00000000000000000000000000fddfldfkkldf00000000000000000000000000fddfldfkkldf00000000000000000000000000fddfldfkkldf00000000000000000000000000fddfldfkkldf00000000000000000000000000fddfldfkkldf00000000000000000000000000fddfldfkkldf00000000000000000000000000fddfldfkkldf00000000000000000000000000fddfldfkkldf00000000000000000000000000fddfldfkkldf00000000000000000000000000fddfldfkkldf00000000000000000000000000fddfldfkkldf00000000000000000000000000fddfldfkkldf00000000000000000000000000fddfldfkkldf00000000000000000000000000fddfldfkkldf00000000000000000000000000fddfldfkkldf00000000000000000000000000fddfldfkkldf00000000000000000000000000fddfldfkkldf00000000000000000000000000fddfldfkkldf00000000000000000000000000fddfldfkkldf00000000000000000000000000fddfldfkkldf00000000000000000000000000', '2023-04-12 12:39:45', '2023-04-12 13:26:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_type_foreign` (`type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_type_foreign` FOREIGN KEY (`type`) REFERENCES `event_types` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
