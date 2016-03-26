-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-12-2014 a las 19:56:26
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `clglobalcargo_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guias`
--

CREATE TABLE IF NOT EXISTS `guias` (
  `guia` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) NOT NULL,
  `tracking` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `libras` varchar(100) NOT NULL,
  `volumen` varchar(100) NOT NULL,
  `costo` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `dimensiones` varchar(100) DEFAULT NULL,
  `ext` varchar(100) DEFAULT NULL,
  `estatus` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`guia`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `guias`
--

INSERT INTO `guias` (`guia`, `usuario`, `tracking`, `direccion`, `libras`, `volumen`, `costo`, `des`, `foto`, `dimensiones`, `ext`, `estatus`) VALUES
(1, '1', '00000', 'caraballeda', 'libra', 'vol', 'cos', 'des', 'W10yi', 'dim', '', 'En Tramite');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
