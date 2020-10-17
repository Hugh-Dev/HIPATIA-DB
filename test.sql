-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-07-2016 a las 11:33:43
-- Versión del servidor: 10.0.25-MariaDB-0+deb8u1
-- Versión de PHP: 5.6.22-0+deb8u1

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
-- Estructura de tabla para la tabla `madb`
--

CREATE TABLE IF NOT EXISTS `madb` (
`id_documento` int(10) unsigned NOT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `descripcion` mediumtext,
  `tamanio` int(10) unsigned DEFAULT NULL,
  `tipo` varchar(150) DEFAULT NULL,
  `nombre_archivo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `madb`
--

INSERT INTO `madb` (`id_documento`, `titulo`, `descripcion`, `tamanio`, `tipo`, `nombre_archivo`) VALUES
(1, 'virtual', 'hacking', 469565, 'image/png', 'zDgAhOH.png'),
(2, 'hola', 'hola', 16536, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'Sin tÃ­tulo 1.docx'),
(3, 'no se', 'nose', 280774, 'application/pdf', 'ArtÃ­culo-Confucio.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mpdb`
--

CREATE TABLE IF NOT EXISTS `mpdb` (
`id_documento` int(10) unsigned NOT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `descripcion` mediumtext,
  `tamanio` int(10) unsigned DEFAULT NULL,
  `tipo` varchar(150) DEFAULT NULL,
  `nombre_archivo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mpdb`
--

INSERT INTO `mpdb` (`id_documento`, `titulo`, `descripcion`, `tamanio`, `tipo`, `nombre_archivo`) VALUES
(1, 'pasivo', 'pasivo', 251532, 'image/jpeg', 'Sello_Biblioteca.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pdb`
--

CREATE TABLE IF NOT EXISTS `pdb` (
`id_documento` int(10) unsigned NOT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `descripcion` mediumtext,
  `tamanio` int(10) unsigned DEFAULT NULL,
  `tipo` varchar(150) DEFAULT NULL,
  `nombre_archivo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `nombre_archivo` varchar(255) DEFAULT NULL,
  `dirigido_a` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_documentos`
--

INSERT INTO `tbl_documentos` (`id_documento`, `titulo`, `descripcion`, `tamanio`, `tipo`, `nombre_archivo`, `dirigido_a`) VALUES
(18, 'Temario Javascript', 'video2brain', 37142, 'application/pdf', 'javascript_toc.pdf', 'ma'),
(19, 'Html5 Avanzado', 'Curso Video2Brain Html5 Avanzado', 330675, 'application/pdf', 'html5_avanzado.pdf', ''),
(20, 'Temaria Html5', 'Temario Video2Brain Html5', 34996, 'application/pdf', 'html5_avanzado_toc.pdf', ''),
(21, 'La voz del silencio', 'H.P.B', 645421, 'application/pdf', 'LA VOZ DEL SILENCIO.pdf', 'p'),
(22, 'Titulo ejemplo', 'cuestionario', 59995, 'application/pdf', 'LeyEspecialcontraDelitosInformaticos.pdf', ''),
(26, 'sdsd', 'dsds', 325181, 'application/pdf', 'Diagrama de actores.pdf', ''),
(27, 'virtual', 'pdf db', 582962, 'application/pdf', 'seguridadBDibc.pdf', 'mp'),
(28, 'Confucio', 'Articulo del maestro confucio', 280774, 'application/pdf', 'ArtÃ­culo-Confucio.pdf', 'ma');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`ID` int(9) NOT NULL,
  `username` varchar(180) DEFAULT NULL,
  `password` varchar(180) DEFAULT NULL,
  `email` varchar(180) DEFAULT NULL,
  `id_extreme` varchar(180) DEFAULT NULL,
  `nivel` varchar(200) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `username`, `password`, `email`, `id_extreme`, `nivel`) VALUES
(2, 'root', '50720c419c912756c16486a7b34926d5', 'root@admin.com', NULL, 'superusuario'),
(10, 'ale', 'f7a3803365a55b197a3b43bc64aacc13', 'ale@alejo.com', NULL, 'miembroA'),
(8, 'maria', '263bce650e68ab4e23f28263760b9fa5', 'maria@acropolis.org', NULL, 'miembroA'),
(11, 'gisselle', 'e0b6f81cabc2f841756131d2e375827f', 'gisselle@oina.org', NULL, 'miembroP'),
(12, 'alejandro', 'e052450f29b2e0e9a53fd4eb389e25a9', 'ale@alejo.com', NULL, 'proba');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `madb`
--
ALTER TABLE `madb`
 ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `mpdb`
--
ALTER TABLE `mpdb`
 ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `pdb`
--
ALTER TABLE `pdb`
 ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `tbl_documentos`
--
ALTER TABLE `tbl_documentos`
 ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `madb`
--
ALTER TABLE `madb`
MODIFY `id_documento` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `mpdb`
--
ALTER TABLE `mpdb`
MODIFY `id_documento` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `pdb`
--
ALTER TABLE `pdb`
MODIFY `id_documento` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_documentos`
--
ALTER TABLE `tbl_documentos`
MODIFY `id_documento` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `ID` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
