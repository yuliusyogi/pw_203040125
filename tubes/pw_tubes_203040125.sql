-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 10:33 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_203040125`
--

-- --------------------------------------------------------

--
-- Table structure for table `pw_tubes_203040125`
--

CREATE TABLE `pw_tubes_203040125` (
  `id` int(11) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pw_tubes_203040125`
--

INSERT INTO `pw_tubes_203040125` (`id`, `picture`, `name`, `brand`, `description`, `category`, `price`) VALUES
(1, 'M4.jpg', 'M4', 'BMW', 'Mobil seri M-sport dari pabrikan BMW', 'Sport Car', 'Rp 2.000.000.000'),
(2, 'G63.jpg', 'G63', 'Mercedes Benz', 'Mobil seri G class dari Mercedes Benz', 'SUV', 'Rp 5.000.000.000'),
(3, '458.jpg', '458', 'Ferrari', 'Salah satu brand mobil tercepat didunia', 'Sport Car', 'Rp 14.000.000.000'),
(4, 'M5.jpg', 'M5', 'BMW', 'Salah satu line up M-sport dari BMW', 'Sport Car', 'Rp 4.000.000.000'),
(5, '720.jpg', '720s', 'Mclaren', 'Salah satu mobil terkencang didunia', 'Sport Car', 'Rp 3.800.000.000'),
(6, 'lp750.jpg', 'Aventador LP 750-4 Superveloce', 'Lamborghini', 'Salah satu supercar dari lamborghini', 'Sport Car', 'Rp 6.400.000.000'),
(7, 'LP750R.jpg', 'Aventador LP 750-4 Superveloce Roadster', 'Lamborghini', 'Salah satu supercar dari lamborghini', 'Sport Car', 'Rp 7.650.000.000'),
(8, 'lp700.jpg', 'Aventador LP 700-4', 'Lamborghini', 'Salah satu supercar dari lamborghini', 'Sport Car', 'Rp 8.400.000.000'),
(9, 'svj.jpg', 'Aventador SVJ Verde Scandal', 'Lamborghini', 'Salah satu supercar dari lamborghini', 'Sport Car', 'Rp 22.000.000.000 '),
(10, '911.jpg', '911 gt3 rs', 'Porsche', 'Lineup dari 911', 'Sport Car', 'Rp 4.700.000.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pw_tubes_203040125`
--
ALTER TABLE `pw_tubes_203040125`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pw_tubes_203040125`
--
ALTER TABLE `pw_tubes_203040125`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
