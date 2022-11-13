-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 13, 2022 at 09:59 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int NOT NULL,
  `name` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `type` enum('admin','super admin') COLLATE utf32_unicode_ci NOT NULL DEFAULT 'admin',
  `status` enum('active','not active') COLLATE utf32_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `type`, `status`, `created_at`) VALUES
(1, 'tariq', 'admin@comp.com', '$2y$10$Va6eYCRJzKZxSiZVk6QulOVIl7xvP59H1ZflrI67Aq0WkhyfS48.S', 'super admin', 'active', '2022-11-13 23:55:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `status` enum('active','not active') COLLATE utf32_unicode_ci NOT NULL DEFAULT 'not active',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `created_at`) VALUES
(18, 'tariq', 'tariq@gmail.com', '$2y$10$MvDeEtDw2j8SLLTcr4okSuTVM0rScelxZABu.0GObKQ4H4hXUWyUC', 'not active', '2022-11-13 23:17:59'),
(19, 'rwerwe', 'rwetariq@gmail.com', '$2y$10$65IFPkGPjhazR6knuXUB5.Yh848dJRKbw2jfm.dJu4AcAiCF0QP86', 'not active', '2022-11-13 23:30:36'),
(20, 'gfdgdf', 'tariqgfd@gmail.com', '$2y$10$D26nXvsKT1qHHGP2eiq6E.wSM4UfeSW3oibFsVKCWcH6qyjHzrbDq', 'not active', '2022-11-13 23:33:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
