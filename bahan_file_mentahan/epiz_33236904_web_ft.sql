-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql200.epizy.com
-- Generation Time: Dec 21, 2022 at 10:10 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_33236904_web_ft`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `peminjam` varchar(255) NOT NULL,
  `ruangan` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `peminjam`, `ruangan`, `tanggal`) VALUES
(1, 'Anjeli Gusnawan - 3337210040', 'BR 2-2', '2022-12-22'),
(2, 'Firmansyah Sutan Wahyu - 3337210030', 'BR 1-3', '2022-12-22');

-- --------------------------------------------------------

--
-- Table structure for table `perlengkapan_proyektor`
--

CREATE TABLE `perlengkapan_proyektor` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `ruangan` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perlengkapan_proyektor`
--

INSERT INTO `perlengkapan_proyektor` (`id`, `nama`, `nim`, `ruangan`, `tanggal`) VALUES
(3, 'Anjeli Gusnawan', '3337210040', 'BR 2-2', '2022-12-22'),
(4, 'Firmansyah Sutan Wahyu', '3337210030', 'BR 1-3', '2022-12-22');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `ruangan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `ruangan`, `status`) VALUES
(1, 'BR 1-1', 'READY'),
(2, 'BR 1-2', 'READY'),
(3, 'BR 1-3', 'NOT READY'),
(4, 'BR 2-1', 'READY'),
(5, 'BR 2-2', 'NOT READY'),
(6, 'BR 2-3', 'READY'),
(7, 'BR 3-1', 'READY'),
(8, 'BR 3-2', 'READY'),
(9, 'BR 3-3', 'READY');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`) VALUES
(1, 'Jeilyn', 'b93939873fd4923043b9dec975811f66', 'Anjeli Gusnawan'),
(2, 'admin', '202cb962ac59075b964b07152d234b70', 'admin'),
(3, 'cek', '250cf8b51c773f3f8dc8b4be867a9a02', 'cek'),
(4, 'Jeilynn', 'a19ea7dff6ced87d8cb9c62cc7922497', 'Jeilyn.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perlengkapan_proyektor`
--
ALTER TABLE `perlengkapan_proyektor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `perlengkapan_proyektor`
--
ALTER TABLE `perlengkapan_proyektor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
