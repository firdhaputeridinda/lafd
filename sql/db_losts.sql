-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2017 at 10:27 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_losts`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `idCategory` int(11) NOT NULL,
  `categoryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`idCategory`, `categoryName`) VALUES
(1, 'Alat Tulis'),
(2, 'Elektronik'),
(3, 'Update'),
(4, 'Jalan'),
(5, 'Makanan'),
(6, 'Perhiasan'),
(7, 'Uang'),
(8, 'Alat Makan'),
(9, 'Alat Sholat'),
(10, 'Pakaian');

-- --------------------------------------------------------

--
-- Table structure for table `losts`
--

CREATE TABLE `losts` (
  `idLost` int(11) NOT NULL,
  `isA` set('found','lost') NOT NULL,
  `lostTime` datetime NOT NULL,
  `stuffName` varchar(50) NOT NULL,
  `stuffPhotos` varchar(140) NOT NULL,
  `specificLocation` varchar(140) NOT NULL,
  `characteristic` varchar(140) NOT NULL,
  `status` enum('done','notyet') NOT NULL,
  `nik` char(16) NOT NULL,
  `idPlaces` int(11) NOT NULL,
  `nim` varchar(8) NOT NULL,
  `idCategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `losts`
--

INSERT INTO `losts` (`idLost`, `isA`, `lostTime`, `stuffName`, `stuffPhotos`, `specificLocation`, `characteristic`, `status`, `nik`, `idPlaces`, `nim`, `idCategory`) VALUES
(1, 'lost', '2017-12-22 00:00:00', 'Kotak Pensil', 'filepath', 'selat 1 2', 'warna : merah', 'done', '1234567891234567', 1, '15119382', 1);

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `idPlaces` int(11) NOT NULL,
  `placesName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`idPlaces`, `placesName`) VALUES
(1, 'Gedung 1'),
(2, 'Gedung 2'),
(3, 'Gedung 3'),
(4, 'Gedung 4');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `nik` char(16) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `mobilePhone` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`nik`, `name`, `gender`, `email`, `password`, `mobilePhone`) VALUES
('1234567891234567', 'Yudi Susanto, M.Kom', 'Laki-Laki', 'yudi@amikom.ac.id', '4297f44b13955235245b2497399d7a93', '088899889988');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `nim` char(8) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobilePhone` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`nim`, `name`, `password`, `email`, `mobilePhone`) VALUES
('15119382', 'David Rigan', 'bc0b629cc3e15f98864ba7d46081f5ee', 'david.rigan@students.amikom.ac.id', '08989664944');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idCategory`);

--
-- Indexes for table `losts`
--
ALTER TABLE `losts`
  ADD PRIMARY KEY (`idLost`),
  ADD KEY `nik` (`nik`),
  ADD KEY `idPlaces` (`idPlaces`),
  ADD KEY `nim` (`nim`),
  ADD KEY `idCategory` (`idCategory`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`idPlaces`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `idCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `losts`
--
ALTER TABLE `losts`
  MODIFY `idLost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `idPlaces` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `losts`
--
ALTER TABLE `losts`
  ADD CONSTRAINT `losts_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `staff` (`nik`),
  ADD CONSTRAINT `losts_ibfk_2` FOREIGN KEY (`idPlaces`) REFERENCES `places` (`idPlaces`),
  ADD CONSTRAINT `losts_ibfk_3` FOREIGN KEY (`nim`) REFERENCES `students` (`nim`),
  ADD CONSTRAINT `losts_ibfk_4` FOREIGN KEY (`idCategory`) REFERENCES `category` (`idCategory`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
