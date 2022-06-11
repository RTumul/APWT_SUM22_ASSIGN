-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 05:38 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adv_wt_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` datetime NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(5) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `gender`, `email`, `dob`, `password`, `type`, `updated_at`, `created_at`) VALUES
(1, 'Md Ridwanuzzaman', 'male', 'amitumul@gmail.com', '2022-06-07 00:00:00', 'Tumul..0402', 'admin', '2022-06-06 18:08:19', '2022-06-06 18:08:19'),
(2, 'Tumul', 'male', 'amichage@gmail.com', '2022-06-08 00:00:00', 'Tumul#0402', 'user', '2022-06-07 18:55:07', '2022-06-07 18:55:07'),
(3, 'Mahbuba Sharmin Ruba', 'female', 'mahbuba@gmail.com', '2022-06-09 00:00:00', 'Ruba..0000', 'user', '2022-06-08 16:04:15', '2022-06-08 16:04:15'),
(4, 'Md. tanvir', 'male', 'tanvir@gmail.com', '2022-06-09 00:00:00', 'Tanvir..0402', 'user', '2022-06-08 16:05:18', '2022-06-08 16:05:18'),
(6, 'Kabul', 'male', 'kabul@gmail.com', '2022-06-30 00:00:00', 'Kabul..0402', 'user', '2022-06-10 09:52:15', '2022-06-10 09:52:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
