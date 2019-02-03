-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 16-08-2013 a las 19:10:03
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `diccionario`
-- 
CREATE DATABASE `diccionario` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `diccionario`;


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tabla`
-- 

CREATE TABLE `tabla` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `palabra` varchar(30) NOT NULL,
  `significado` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `palabra` (`palabra`,`significado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `tabla`
-- 

