-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2025 at 03:05 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookvista`
--

-- --------------------------------------------------------

--
-- Table structure for table `ser_portfolio_images`
--

CREATE TABLE `ser_portfolio_images` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `tag_name` varchar(100) DEFAULT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ser_portfolio_images`
--

INSERT INTO `ser_portfolio_images` (`id`, `image_path`, `tag_name`, `uploaded_at`) VALUES
(16, 'uploads/1747487064_main.png', 'book-writing', '2025-05-17 13:04:24'),
(17, 'uploads/1747487072_main.png', 'book-formating', '2025-05-17 13:04:32'),
(18, 'uploads/1747487079_main.png', 'book-proof-reading', '2025-05-17 13:04:39'),
(19, 'uploads/1747487086_main.png', 'book-cover-design', '2025-05-17 13:04:46'),
(20, 'uploads/1747487093_main.png', 'book-publishing', '2025-05-17 13:04:53'),
(21, 'uploads/1747487100_main.png', 'Web-Design', '2025-05-17 13:05:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ser_portfolio_images`
--
ALTER TABLE `ser_portfolio_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ser_portfolio_images`
--
ALTER TABLE `ser_portfolio_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
