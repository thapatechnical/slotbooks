-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2020 at 12:35 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `navigus`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `slot` varchar(10) NOT NULL,
  `note` varchar(300) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `date`, `slot`, `note`, `uid`) VALUES
(1, '2020-05-24', 's0', 'thoydgrfcvdg', 1),
(2, '2020-05-24', 's3', 'thoy thoyrthfgnvbrthfg', 1),
(6, '2020-05-24', 's2', 'edgrbfcv', 1),
(7, '2020-05-24', 's13', 'egdrfrhtfgb', 1),
(8, '2020-05-23', 's0', 'afsdgfh', 2),
(9, '2020-05-23', 's2', 'esfv ', 2),
(10, '2020-05-24', 's8', 'e5rtg', 2),
(11, '2020-05-24', 's14', 'adfsghg', 3),
(12, '2020-05-24', 's15', 'dfgfhg', 3),
(13, '2020-05-23', 's7', 'rgdfrgdfb', 3);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `mobile`, `email`, `password`) VALUES
(1, 'abc', '987987987', 'abc@gmail.com', '$2y$10$Ig/wHHcBO.JKWEVyqKAUfObujgVujWregTth9yIjfTCPoUGbVHAre'),
(2, 'mno', '9898979978', 'mno@gmail.com', '$2y$10$2JTtHez30j8veeFVFeY1uefIc/kxNPhoxjgd1VetzZVxroa.UrpyW'),
(3, 'xyz', '99887989', 'xyz@gmail.com', '$2y$10$Q6VltVwX8.cd2cWFN/eOBuf98cuPnS9Rw7fxutjWscjK1E0BNuFJ6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `registration` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
