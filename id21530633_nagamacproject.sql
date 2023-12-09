-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2023 at 01:49 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21530633_nagamacproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminusers`
--

CREATE TABLE `adminusers` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `adminusers`
--

INSERT INTO `adminusers` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '$2y$10$Zb2HgfJcqPZHPRHKw7Yx/OK2EziLR5Ys3FWjhKjxWgFezth.tZmR.', '2023-11-25 02:55:33'),
(2, 'Melisa', '$2y$10$5/kTsSbgFKhbSuJLwGQVAu0bAwYRjBCnA4s9YlSMIhuqfRDT/Ahlm', '2023-11-25 05:51:37'),
(3, 'catherine', '$2y$10$FoaZZiUuZNDz3kBML1C6LOC1sOcChdhgw8dOPvVC1EutdIrB4EQGS', '2023-11-25 07:56:06'),
(4, 'Namoc', '$2y$10$l9K2jYT0j5U0xFf4vu7II.GzKbXCrbmEG8DS.v6Puc3F5bjKk1f4.', '2023-11-27 09:41:41');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `image`, `title`) VALUES
(1, 'Bag4.jpg', 'Kendall Jenner bags and Heart Evangelista..'),
(3, 'theme2.jpg', ' its youre choice to serve qccount. '),
(4, 'theme2.jpg', 'This is it.'),
(5, 'theme3.jpg', 'Hello'),
(6, 'theme3.jpg', 'Hello'),
(7, 'inbound6354574156474896316.jpg', 'Hi'),
(8, 'YSL.jpg', 'Saint Laurent Shoulder Bag'),
(9, 'inbound6900418017444369744.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(5, 'Carlgeline', '$2y$10$.jpR8VDhMPrqSEt30eXbZ.rb1hANwaOUJ/k8/RHhqiEk3MLPp0OaK', '2023-11-25 01:39:27'),
(6, 'Bernalo', '$2y$10$PhhPJWERg59Q9WGV5v955e4YSSIoGcuRUNMwMKLM.Glj92qo.8GBi', '2023-11-25 11:00:10'),
(8, 'Namoc', '$2y$10$2GJwbY5nJBzhV7l0FAywR.GJp9QxMZU70pCrwR44z7yYG/MQV/xQW', '2023-11-27 09:40:07'),
(9, 'Carlomamax', '$2y$10$QfI2DudAsm0f2DddoH9FyOXSzlWhkCrUquEHTEKTRksOOHaH/WZ96', '2023-12-08 15:56:38'),
(10, 'carlomamac', '$2y$10$M9IR/2HERHQbBKIVrXyRZOrs9ZLB7J7HsBJe66oCaCGm0ugREGO9e', '2023-12-08 15:57:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminusers`
--
ALTER TABLE `adminusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
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
-- AUTO_INCREMENT for table `adminusers`
--
ALTER TABLE `adminusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
