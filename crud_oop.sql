-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2024 at 04:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_oop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` char(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postingdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `firstname`, `lastname`, `email`, `phonenumber`, `address`, `postingdate`) VALUES
(2, 'GG', 'p', 'nmvgm@gmail.com', '024574', ' ', '2024-10-21 11:42:32'),
(3, '', '', '', '', '', '2024-10-21 11:42:45'),
(5, 'runglawan', 'haiwang', 'dongdog4845@gmail.com', '09305786888', '178 m.1', '2024-10-21 11:43:35'),
(6, 'runglawan', 'haiwang', 'dongdog4845@gmail.com', '09305786888', '178 m.1', '2024-10-21 11:46:28'),
(7, 'runglawan', 'haiwang', 'dongdog4845@gmail.com', '09305786888', '178 m.1', '2024-10-21 11:46:31'),
(9, 'NK', 'Game', 'nuttawutkomaram250@gmail.com', '', '2/1ข', '2024-10-21 11:49:06'),
(10, 'Gae', 'Gamy', 'nuttawutkomaram250@hotmail.com', '0973052207', '191', '2024-10-21 11:50:18'),
(11, 'PP', 'Game', 'nuttawutkomaram250@gmail.com', '', '2/1ข', '2024-10-21 11:50:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
