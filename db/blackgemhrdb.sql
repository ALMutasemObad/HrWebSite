-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10 نوفمبر 2021 الساعة 20:48
-- إصدار الخادم: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blackgemhrdb`
--

-- --------------------------------------------------------

--
-- بنية الجدول `attendance`
--

CREATE TABLE `attendance` (
  `empID` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `logType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `attendance`
--

INSERT INTO `attendance` (`empID`, `date`, `time`, `logType`) VALUES
(1, '2021-11-10', '22:29:28', 1),
(1, '2021-11-10', '21:31:27', 2),
(2, '2021-11-10', '21:21:31', 1),
(2, '2021-11-10', '21:31:28', 2),
(3, '2021-11-10', '21:21:17', 1),
(3, '2021-11-10', '21:31:29', 2),
(4, '2021-11-10', '21:21:18', 1),
(4, '2021-11-10', '21:31:30', 2),
(5, '2021-11-10', '21:21:33', 1),
(5, '2021-11-10', '21:31:30', 2),
(6, '2021-11-10', '21:21:35', 1),
(6, '2021-11-10', '21:31:32', 2),
(7, '2021-11-10', '21:21:36', 1),
(7, '2021-11-10', '21:31:33', 2);

-- --------------------------------------------------------

--
-- بنية الجدول `employee`
--

CREATE TABLE `employee` (
  `id` int(10) NOT NULL,
  `firstname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Role` text COLLATE utf8_unicode_ci NOT NULL,
  `salary` float NOT NULL,
  `JoinDate` date DEFAULT NULL,
  `Image` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `employee`
--

INSERT INTO `employee` (`id`, `firstname`, `lastname`, `Role`, `salary`, `JoinDate`, `Image`) VALUES
(1, 'motasm', 'abbad', '', 100000, NULL, NULL),
(2, 'amr', 'atef', '', 134000, NULL, NULL),
(3, 'motasmw', 'OBAD', '', 0, '0000-00-00', NULL),
(4, 'sfsdf', 'wqrwer', '', 0, '0000-00-00', NULL),
(5, 'kahled', 'mohemmed', 'admin', 23424, '2021-10-30', NULL),
(6, 'jsdfa', 'asdf', 'admin', 2352, '2021-11-06', NULL),
(7, 'asama', 'alafary', 'admin', 100000, '2021-11-10', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'mutasem', '$2y$10$43VAI6Suu.s02P/cN21WbeZLnTwZdJiYm3zW9DRIQKc3Is1Rg7yc6', '2021-11-07 22:25:58'),
(2, 'blackgem', '$2y$10$KVorKHD.Z3F5xo7g7jFTKOuAQDIF1mTpp4Um1zjLCDveVy7E1MUgO', '2021-11-07 22:33:16'),
(3, 'aaaa', '$2y$10$8VuTQnZ0ROGV2kda7ivbJuK2tyzNKa2rvJ0fqUqSmW2n/cq8lY85e', '2021-11-07 23:03:03'),
(4, 'm', '$2y$10$Zyy4Fa2V5B7wMMijnO/2.ORs2sgRnmcU9lkaOBaCY8wiXO6IFRmka', '2021-11-08 20:55:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`empID`,`date`,`logType`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
