-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2024 at 04:15 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wtms`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(2) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `client_template` varchar(100) NOT NULL,
  `client_status` int(2) NOT NULL COMMENT '0->active, 1->inactive, 2->deleted',
  `client_created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `client_updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_name`, `client_template`, `client_status`, `client_created_on`, `client_updated_on`) VALUES
(1, 'asdasd', '0', 0, '2024-02-07 10:56:45', '2024-02-07 10:56:45'),
(2, 'su', 'template1', 0, '2024-02-07 10:58:20', '2024-02-07 10:58:20'),
(3, 'su', 'template1', 0, '2024-02-07 12:17:10', '2024-02-07 12:17:10'),
(4, 'asd', 'template1', 0, '2024-02-07 12:17:32', '2024-02-07 12:17:32'),
(5, 'asd', 'template1', 0, '2024-02-07 12:18:21', '2024-02-07 12:18:21'),
(6, 'asd', 'template1', 0, '2024-02-07 12:18:41', '2024-02-07 12:18:41'),
(7, 'asd', 'template1', 0, '2024-02-07 12:18:47', '2024-02-07 12:18:47'),
(8, 'asd', 'template1', 0, '2024-02-07 12:18:57', '2024-02-07 12:18:57'),
(9, 'asdasd', 'template1', 0, '2024-02-07 12:24:35', '2024-02-07 12:24:35'),
(10, 'asdasd', 'template1', 0, '2024-02-07 12:25:17', '2024-02-07 12:25:17'),
(11, 'asd', 'template1', 0, '2024-02-07 12:26:56', '2024-02-07 12:26:56'),
(12, 'asd', 'template1', 0, '2024-02-07 12:27:43', '2024-02-07 12:27:43'),
(13, 'asd', 'template1', 0, '2024-02-07 12:27:50', '2024-02-07 12:27:50'),
(14, 'asdsad', 'template1', 0, '2024-02-07 12:28:11', '2024-02-07 12:28:11'),
(15, 'asd', 'template1', 0, '2024-02-07 12:29:32', '2024-02-07 12:29:32');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` text NOT NULL,
  `user_password` varchar(256) DEFAULT NULL,
  `user_status` int(2) NOT NULL DEFAULT 0 COMMENT '0->active, 1->inactive',
  `user_last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_udpated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_status`, `user_last_login`, `user_created_on`, `user_udpated_on`) VALUES
(1, 'Admin', 'admin@gmail.com', '123456', 0, '2024-02-07 10:01:45', '2024-02-07 09:59:13', '2024-02-07 10:01:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
