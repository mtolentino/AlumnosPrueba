-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-08-2013 a las 17:36:50
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE IF NOT EXISTS `alumno` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_campus` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `matricula` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `id_campus`, `nombre`, `apellido`, `matricula`, `correo`) VALUES
(1, 1, 'julio cesae', 'aguayo', 'a01589798', 'julio@ejemplo.com'),
(2, 2, 'juan carlos', 'castroso', 'a1556', 'juan@ejemplo.com'),
(13, 1, 'o', 'o', 'o', 'o@gmail.com'),
(14, 1, 'wer', 'q', 'Ã ', 'a@f.com'),
(15, 1, 'x', 'x', 'x', 'x@hotmail.com'),
(16, 1, 'albert', 'a', 'a', 'a@f.com'),
(17, 1, 'i', 'i', 'i', 'i@d.com'),
(18, 1, 'i', 'i', 'i', 'i@d.com'),
(19, 1, '8', '8', '8', '8@ho.com'),
(20, 1, 'v`v', 'v', 'v', 'v@k.com'),
(21, 1, 'o', 'o', 'o', 'o@gmail.com'),
(22, 1, 'p', 'p', 'p', 'p@gmail.com'),
(23, 1, 'p', 'p', 'p', 'p@gmail.com'),
(24, 1, 'm', 'm', 'm', 'm@hotmail.com'),
(25, 1, 'albert', 'a', 'a', 'a@dd.com'),
(26, 1, '3', '3', '3', '3@gmail.com'),
(29, 1, 'p', 'p', 'p', 'p@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_materia`
--

CREATE TABLE IF NOT EXISTS `alumno_materia` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_alumno` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `calificacion` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `alumno_materia`
--

INSERT INTO `alumno_materia` (`id`, `id_alumno`, `id_materia`, `calificacion`) VALUES
(1, 1, 1, 10),
(2, 1, 2, 80),
(3, 1, 3, 80),
(4, 1, 4, 60),
(5, 1, 5, 60);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campus`
--

CREATE TABLE IF NOT EXISTS `campus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `campus` varchar(200) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `campus`
--

INSERT INTO `campus` (`id`, `campus`) VALUES
(1, 'jalisco'),
(2, 'colima'),
(3, 'df'),
(4, 'sinaloa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE IF NOT EXISTS `materia` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id`, `nombre`) VALUES
(1, 'matematicas'),
(2, 'ciencias naturales'),
(3, 'fisica'),
(4, 'biologia'),
(5, 'historia');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
