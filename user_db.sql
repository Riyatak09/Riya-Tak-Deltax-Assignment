-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 12:25 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `songname` varchar(50) NOT NULL,
  `songfile` varchar(50) NOT NULL,
  `songimg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`songname`, `songfile`, `songimg`) VALUES
('wef', '1.mp3', '1.jpg'),
('test', '2.mp3', 'bg.jpg'),
('test', '2.mp3', 'bg.jpg'),
('test', '2.mp3', 'bg.jpg'),
('test', '2.mp3', 'bg.jpg'),
('test', '2.mp3', 'bg.jpg'),
('test', '2.mp3', 'bg.jpg'),
('test', '2.mp3', 'bg.jpg'),
('fdgb', '2.mp3', 'bg.jpg'),
('fdgb', '2.mp3', 'bg.jpg'),
('fdgb', '2.mp3', 'bg.jpg'),
('fdgb', '2.mp3', 'bg.jpg'),
('fdgb', '2.mp3', 'bg.jpg'),
('fdgb', '2.mp3', 'bg.jpg'),
('fdgb', '2.mp3', 'bg.jpg'),
('fdgb', '2.mp3', 'bg.jpg'),
('fdgb', '2.mp3', 'bg.jpg'),
('fdgb', '2.mp3', 'bg.jpg'),
('fdgb', '2.mp3', 'bg.jpg'),
('fdgb', '2.mp3', 'bg.jpg'),
('fdgb', '2.mp3', 'bg.jpg'),
('fdgb', '2.mp3', 'bg.jpg'),
('fdgb', '2.mp3', 'bg.jpg'),
('fdgb', '2.mp3', 'bg.jpg'),
('fdgb', '2.mp3', 'bg.jpg'),
('fdgb', '2.mp3', 'bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
