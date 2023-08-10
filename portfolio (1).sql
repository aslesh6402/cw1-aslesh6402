-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2023 at 09:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'ÄDONIS GAMING', 'adhikariaslesh@gmail.com', 'jgefik', '2023-07-20 09:55:55');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `number`, `password`, `role`) VALUES
(5, 'aslesh', 'admin1@gmail.com', '9866296130', '$2y$10$p0R.QbONDT3stg08fmbLQOpomo7tpK15vbJ.tR8ITDPJSM0w49b6K', 'admin'),
(6, 'aayush', 'aayushbikram@gmail.com', '9823456789', '$2y$10$YLxq5V6R6RwMfyVpUqYt3.iCCEJi6N7aVqYbH/HSdIWW5sy116pY6', ''),
(7, 'softwarica', 'adhikariaslesh@gmail.com', '12345678', '$2y$10$65sz7aaGO3afUECADNlPh.e/r5XzAeeIXN.ccEXDBcvi0EHPrcNyG', ''),
(8, 'aslesh', 'adhikari@gmail.com', '982345678', '$2y$10$Dy1BZxta0fUliL78Wus0Fe63hByoRYX6j5HL6muLxNr5.QdwFq7Jq', ''),
(9, 'aslesh adhikari', 'adhikariaslesh@gmail.com', '9866296130', '$2y$10$wYBb.8fkFim9V.Y/pVbpEOYi1Og68oQ6Pgkd3cFHMK3KQZ3CCCMcO', ''),
(10, 'aslesh', 'aslesh@gmail.com', '9866296130', '$2y$10$d84sLFk.7fvaW5W12zZ3RuGmQQqBDlEJPChKBGlRnpIEYOr.gq.oW', ''),
(11, 'ayush', 'ayush@gmail.com', '9818686847', '$2y$10$S0qpLjhvCnZ5r2LgFYN8EOvsgfJ1hDUf.Sd06jQpgc9E3dhKvZle.', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
