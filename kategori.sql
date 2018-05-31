-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2018 at 02:29 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrid`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategoriID` int(10) NOT NULL,
  `namaKategori` varchar(32) NOT NULL,
  `deskripsiKategori` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategoriID`, `namaKategori`, `deskripsiKategori`) VALUES
(1, 'pupuk organik', 'Lorem ipsum dolor sit amet.'),
(2, 'pupuk urea', 'Lorem ipsum dolor sit'),
(3, 'pupuk organik', 'Lorem ipsum dolor sit amet'),
(4, 'pupuk kandang', 'Lorem ipsum dolor sit'),
(5, 'pupuk kandang', 'Lorem ipsum dolor'),
(6, 'pupuk kompos', 'Lorem ipsum dolor sit'),
(7, 'pupuk urea', 'Lorem ipsum dolor sit amet'),
(8, 'pupuk urea', 'Lorem ipsum dolor sit amet'),
(9, 'pupuk organik', 'Lorem ipsum dolor sit'),
(10, 'pupuk kompos', 'Lorem ipsum dolor'),
(11, 'pupuk kandang', 'Lorem ipsum dolor sit amet'),
(12, 'pupuk kandang', 'Lorem ipsum dolor sit amet'),
(13, 'pupuk organik', 'Lorem ipsum dolor sit amet'),
(14, 'pupuk urea', 'Lorem ipsum dolor sit'),
(15, 'pupuk organik', 'Lorem ipsum dolor sit amet');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategoriID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategoriID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
