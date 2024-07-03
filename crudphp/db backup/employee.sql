-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Feb 08, 2024 at 06:36 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `dsg` varchar(20) NOT NULL,
  `salary` int(11) NOT NULL,
  `city` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `phone`, `dsg`, `salary`, `city`, `state`) VALUES
(3, 'Suhail Akhtar', 'suhailakhtar@689gmail.com', '8750083134', 'Student', 65800, 'New Delhi', 'Delhi'),
(5, 'Diwakar', 'deewakarjhapandit963@gmail.com', '9891561828', 'Student', 75400, 'Noida', 'Uttar Pradesh'),
(6, ' Amit', 'amit49@gmail.com', '9891561828', 'Student', 58400, 'Noida', 'Uttar Pradesh'),
(7, 'Golu', 'golu@gamil.com', '8810512225', 'Student', 69500, 'Agra', 'Uttar Pradesh'),
(8, 'Mamta', 'mamtajain@gmail.com', '9858584585', 'Student', 74500, 'South Delhi', 'Delhi'),
(9, 'Shahina', 'shahina@gmail.com', '8741523460', 'Coordinator', 86542, 'Noida', 'Uttar Pradesh'),
(10, 'Deepak Singh', 'deepaksingh@gmail.com', '7845130160', 'Student', 45000, 'Noida', 'Uttar Pradesh'),
(11, 'Shamim Akhtar', 'shamimakhtar@gmail.com', '9899541220', 'Coordinator', 89000, 'East Delhi', 'Delhi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
