-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-03-2016 a las 18:39:47
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Estructura de tabla para la tabla `tbl_documentos`
--

CREATE TABLE IF NOT EXISTS `tbl_documentos` (
`id_documento` int(10) unsigned NOT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `descripcion` mediumtext,
  `tamanio` int(10) unsigned DEFAULT NULL,
  `tipo` varchar(150) DEFAULT NULL,
  `nombre_archivo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_documentos`
--

INSERT INTO `tbl_documentos` (`id_documento`, `titulo`, `descripcion`, `tamanio`, `tipo`, `nombre_archivo`) VALUES
(17, 'Javascript', 'Curso Video2Brain', 409931, 'application/pdf', 'javascript.pdf'),
(18, 'Temario Javascript', 'video2brain', 37142, 'application/pdf', 'javascript_toc.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_temp_files`
--

CREATE TABLE IF NOT EXISTS `tbl_temp_files` (
`id_files` int(10) NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `status` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_temp_files`
--

INSERT INTO `tbl_temp_files` (`id_files`, `nombre`, `descripcion`, `tipo`, `status`) VALUES
(12, '1457729593-12705350_1687952604751039_2560027385184152278_n.jpg', 'family', 'jpg', '1'),
(13, '1457729850-imagen2.png', 'ssl', 'png', '1'),
(14, '1457732703-529321_10152112800685400_707233599_n.jpg', 'gsdgfdfdg', 'jpg', '1'),
(15, '1457732703-imagen1.png', 'gsdgfdfdg', 'png', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_documentos`
--
ALTER TABLE `tbl_documentos`
 ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `tbl_temp_files`
--
ALTER TABLE `tbl_temp_files`
 ADD PRIMARY KEY (`id_files`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_documentos`
--
ALTER TABLE `tbl_documentos`
MODIFY `id_documento` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `tbl_temp_files`
--
ALTER TABLE `tbl_temp_files`
MODIFY `id_files` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
