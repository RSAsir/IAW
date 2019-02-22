-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 15, 2019 at 05:55 PM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emp_dep`
--
CREATE DATABASE IF NOT EXISTS `emp_dep` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `emp_dep`;

-- --------------------------------------------------------

--
-- Table structure for table `dep`
--

CREATE TABLE `dep` (
  `dept_no` int(2) NOT NULL,
  `dnombre` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `localidad` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Prueba de comentario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `dep`
--

INSERT INTO `dep` (`dept_no`, `dnombre`, `localidad`) VALUES
(1, 'INFORMATICA', 'sevilla'),
(14, 'TEST', 'TEST'),
(17, 'ASDFG', 'NAR');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `emp_no` int(2) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_alta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `oficio` enum('Administrativo','Analista') COLLATE utf8_spanish_ci NOT NULL,
  `salario` decimal(6,2) NOT NULL,
  `comision` decimal(6,2) DEFAULT NULL,
  `dep_no` int(2) NOT NULL,
  `fotografia` varchar(60) COLLATE utf8_spanish_ci NOT NULL DEFAULT './img/silueta.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`emp_no`, `nombre`, `fecha_alta`, `oficio`, `salario`, `comision`, `dep_no`, `fotografia`) VALUES
(1, 'test', '2000-01-10 23:00:00', 'Administrativo', '3434.00', '10.00', 1, './img/Ink-Wallpaper-24-1680x1050.png'),
(6, 'gby', '2000-01-10 23:00:00', 'Administrativo', '3434.00', '10.00', 1, './img/silueta.png'),
(13, 'r', '2000-11-10 23:00:00', 'Administrativo', '44.00', NULL, 1, './img/silueta.png'),
(15, 'gb', '2000-01-10 23:00:00', 'Administrativo', '3434.00', '10.00', 1, './img/silueta.png');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `login` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `login`, `password`) VALUES
(3, 'grys', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dep`
--
ALTER TABLE `dep`
  ADD PRIMARY KEY (`dept_no`),
  ADD KEY `dep_no` (`dept_no`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`emp_no`) USING BTREE,
  ADD KEY `Dep_no` (`dep_no`) USING BTREE;

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dep`
--
ALTER TABLE `dep`
  MODIFY `dept_no` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `emp`
--
ALTER TABLE `emp`
  ADD CONSTRAINT `emp_ibfk_1` FOREIGN KEY (`dep_no`) REFERENCES `dep` (`dept_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
