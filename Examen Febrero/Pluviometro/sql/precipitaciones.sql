-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-02-2019 a las 00:26:54
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `precipitaciones_mes_ano`
--
CREATE DATABASE IF NOT EXISTS `precipitaciones_mes_ano` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `precipitaciones_mes_ano`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla`
--

CREATE TABLE `tabla` (
  `ID` int(11) DEFAULT NULL,
  `mes` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `cant_2017` decimal(5,2) DEFAULT NULL,
  `cant_2018` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tabla`
--

INSERT INTO `tabla` (`ID`, `mes`, `cant_2017`, `cant_2018`) VALUES
(4, 'ABRIL', '18.00', '18.00'),
(8, 'AGOSTO', '0.00', '0.60'),
(12, 'DICIEMBRE', '0.70', '10.50'),
(1, 'ENERO', '10.80', '10.20'),
(2, 'FEBRERO', '9.10', '15.30'),
(7, 'JULIO', '0.00', '0.00'),
(6, 'JUNIO', '0.50', '0.80'),
(3, 'MARZO', '11.20', '15.80'),
(5, 'MAYO', '0.00', '8.80'),
(11, 'NOVIEMBRE', '11.40', '11.50'),
(10, 'OCTUBRE', '6.50', '5.70'),
(9, 'SEPTIEMBRE', '2.70', '3.01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabla`
--
ALTER TABLE `tabla`
  ADD PRIMARY KEY (`mes`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
