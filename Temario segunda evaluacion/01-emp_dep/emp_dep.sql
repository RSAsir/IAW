-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-01-2019 a las 20:13:14
-- Versión del servidor: 5.5.41
-- Versión de PHP: 5.4.39-0+deb7u2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `emp_dep`
--
CREATE DATABASE `emp_dep` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `emp_dep`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dep`
--

CREATE TABLE IF NOT EXISTS `dep` (
  `dep_no` int(2) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Localidad` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Prueba de comentario',
  PRIMARY KEY (`dep_no`),
  KEY `dep_no` (`dep_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `dep`
--

INSERT INTO `dep` (`dep_no`, `nombre`, `Localidad`) VALUES
(1, 'INFORMATICA', 'sevilla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emp`
--

CREATE TABLE IF NOT EXISTS `emp` (
  `emp_no` int(2) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `dep_no` int(2) NOT NULL,
  `oficio` enum('Empleado','Analista') COLLATE utf8_spanish_ci NOT NULL,
  `salario` decimal(6,2) NOT NULL,
  `comision` decimal(6,2) DEFAULT NULL,
  `fecha_alta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`emp_no`),
  KEY `Dep_no` (`dep_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `emp`
--
ALTER TABLE `emp`
  ADD CONSTRAINT `emp_ibfk_1` FOREIGN KEY (`Dep_no`) REFERENCES `dep` (`dep_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
