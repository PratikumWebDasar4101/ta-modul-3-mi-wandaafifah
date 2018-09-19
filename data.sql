-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2018 at 11:30 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_datadiri`
--

CREATE TABLE `db_datadiri` (
  `nim` int(15) NOT NULL,
  `namauser` varchar(20) NOT NULL,
  `fakultas` varchar(5) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_datadiri`
--

INSERT INTO `db_datadiri` (`nim`, `namauser`, `fakultas`, `jk`, `foto`) VALUES
(12132, 'hsdfs', 'FIT', '2.', 'full-size-we-bare-be'),
(124723, 'buks', 'FIT', '1.', 'maxresdefault.jpg'),
(63254276, 'behel', 'FIT', '1.', 'MD5.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_datadiri`
--
ALTER TABLE `db_datadiri`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
