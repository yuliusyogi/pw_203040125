-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2021 at 06:59 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040125`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(15) NOT NULL,
  `img` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `terbit` date NOT NULL,
  `dimensi` varchar(15) NOT NULL,
  `ISBN` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `img`, `judul`, `pengarang`, `terbit`, `dimensi`, `ISBN`) VALUES
(1, '1.png', 'Awaken The Giant within', 'Anthony Robbins', '1992-10-26', '654 halaman', '9786020637112'),
(2, '2.png', 'Think and Grow Rich', 'Napoleon Hill', '1937-05-06', '420 Halaman', '9786020639512'),
(3, '3.png', 'The 7 Habit of Highly Effective people', 'Steven R.Covery', '1898-12-23', '320 halaman', '9786020639536'),
(4, '4.png', 'The Magic of Thingking Big', 'David J.Schawartz', '1957-10-23', '320 halaman', '9789792234343'),
(5, '5.png', 'How To Win Friends and Influence People', 'Dale Cernegie', '1896-04-01', '430 halaman', '9786020638010'),
(6, '6.png', 'The Power of Positive Thingking', 'Norman Vincent Peale', '1883-12-11', '320 halaman', '9786020640853'),
(7, '7.png', 'The Science of Getting Rich', 'Wallace D.Wattles', '1993-01-23', '510 halaman', '9786020639246'),
(8, '8.png', 'As A Man Thinketh', 'James Allen', '1903-10-23', '470 halaman', '9786020329987'),
(9, '9.png', 'Outliers The Story of Success', 'Malcolm Gladwel', '2008-05-26', '370 halaman', '9786024246945'),
(10, '10.png', 'Rich Dar Poor Dad', 'Robert Kiyosaki', '2003-10-26', '270 halaman', '9786020451558');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
