-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 24-01-2021 a las 22:26:20
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dammas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada`
--

DROP TABLE IF EXISTS `entrada`;
CREATE TABLE IF NOT EXISTS `entrada` (
  `ident` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(23) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `fechaCosecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cantidad` double NOT NULL,
  `fechaLlegada` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `recibido` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ident`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `entrada`
--

INSERT INTO `entrada` (`ident`, `nombre`, `fechaCosecha`, `cantidad`, `fechaLlegada`, `recibido`, `status`) VALUES
(1, 'Mango', '2020-12-29 00:00:03', 19000, '2021-01-31 00:00:00', 'Alicia Chan', 1),
(2, 'Limon', '2021-01-01 00:00:00', 10000, '2021-01-06 00:00:00', 'Fabian Perez', 1),
(3, 'Aguacate Hass', '2021-01-04 00:00:00', 12000, '2021-01-07 00:00:00', 'Alicia Chan', 2),
(4, 'Piña Miel', '2021-01-04 00:00:00', 12000, '2021-01-06 00:00:00', 'Alicia Chan', 1),
(5, 'Piña', '2021-01-11 00:00:00', 9000, '2021-01-07 00:00:00', 'Fabian Perez', 1),
(6, 'Papaya', '2021-01-06 00:00:00', 12000, '2021-01-07 00:00:00', 'Fabian Perez', 1),
(7, 'Manzana', '2021-01-05 00:00:00', 9000, '2021-01-07 00:00:00', 'Alicia Dzib', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exportacion`
--

DROP TABLE IF EXISTS `exportacion`;
CREATE TABLE IF NOT EXISTS `exportacion` (
  `id` bigint(20) NOT NULL,
  `producto` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `fecha_cosecha` date NOT NULL,
  `productor` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `fecha_llegada` date NOT NULL,
  `estado_producto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `cantidad` decimal(40,0) NOT NULL,
  `destino` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `direccion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `fecha_embarque` date NOT NULL,
  `ficha_tecnica` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `precio` decimal(11,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `exportacion`
--

INSERT INTO `exportacion` (`id`, `producto`, `fecha_cosecha`, `productor`, `fecha_llegada`, `estado_producto`, `cantidad`, `destino`, `direccion`, `fecha_embarque`, `ficha_tecnica`, `precio`) VALUES
(1, 'Limon', '2020-10-10', 'Granja1', '2020-10-13', 'Pieza', '600', 'San Diego', '3035 Cedar St', '2020-10-15', 'Ficha Tecnica Limon.pdf', '60000'),
(2, 'Aguacate', '2020-10-25', 'Fruta Express', '2020-10-27', 'Pieza', '500', 'Albuquerque', '301', '2020-10-31', 'Ficha Tecnica Aguacate.pdf', '65000'),
(3, 'Sandia', '2020-10-10', 'Pamasur', '2020-10-13', 'Pieza', '1000', 'Austin', '7108 Woodrow Ave', '2020-10-15', 'Ficha Tecnica Sandia.pdf', '114000'),
(4, 'Piña', '2020-10-18', 'Fruta Express', '2020-10-20', 'Pieza', '1500', 'Phoenix', '1202 E', '2020-10-22', 'Ficha Tecnica Piña.pdf', '120000'),
(5, 'Melon', '2020-11-22', 'La Concordia', '2020-11-23', 'Pieza', '600', 'Los Ángeles', '12324 Hoxie Ave', '2020-11-25', 'Ficha Tecnica Melon.pdf', '82000'),
(6, 'Papaya', '2020-12-05', 'FreshMex', '2020-12-07', 'Pieza', '750', 'Bend', '61535 S, Hwy 97', '2020-12-08', 'Ficha Tecnica Papaya.pdf', '57000'),
(7, 'Sandia', '2020-10-10', 'Grupo GR', '2020-12-13', 'Pieza', '600', 'Dallas', '5750 E Lovers Ln', '2020-10-15', 'Ficha Tecnica Sandia.pdf', '342000'),
(8, 'Piña', '2020-11-18', 'El Porvenir', '2020-11-20', 'Pieza', '600', 'Denver', '5141 Chambers Rd', '2020-11-22', 'Ficha Tecnica Piña.pdf', '105000'),
(9, 'Melon', '2020-11-23', 'Del Campo', '2020-11-23', 'Pieza', '600', 'Pasadena', '458 N Altadena Dr', '2020-11-24', 'Ficha Tecnica Melon.pdf', '100000'),
(10, 'Limon', '2020-11-03', 'La Concordia', '2020-11-05', 'Pieza', '600', 'Dallas', '6185 Retail Rd', '2020-11-06', 'Ficha Tecnica Limon.pdf', '92000'),
(11, 'Aguacate', '2020-11-08', 'Divemex', '2020-11-10', 'Pieza', '600', 'Las Vegas', '2211 N Rampart Blvd', '2020-11-12', 'Ficha Tecnica Aguacate.pdf', '64000'),
(12, 'Papaya', '2020-12-05', 'Santiagro', '2020-12-07', 'Pieza', '600', 'Kansas City', '20 E 5th St #201, River Market', '2020-12-08', 'Ficha Tecnica Papaya.pdf', '103000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `merma`
--

DROP TABLE IF EXISTS `merma`;
CREATE TABLE IF NOT EXISTS `merma` (
  `idmer` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(23) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `fechaCosecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cantidad` double NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idmer`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `merma`
--

INSERT INTO `merma` (`idmer`, `nombre`, `fechaCosecha`, `cantidad`, `status`) VALUES
(1, 'Mango', '2021-01-01 10:23:33', 10000, 1),
(2, 'Limon', '2021-01-03 00:00:00', 23000, 1),
(3, 'Piña Miel', '2021-01-01 00:00:00', 7000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo`
--

DROP TABLE IF EXISTS `modulo`;
CREATE TABLE IF NOT EXISTS `modulo` (
  `idmodulo` bigint(20) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idmodulo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `modulo`
--

INSERT INTO `modulo` (`idmodulo`, `titulo`, `descripcion`, `status`) VALUES
(1, 'Dashboard', 'Dashboard', 1),
(2, 'Usuarios', 'Usuarios del sistema', 1),
(3, 'Clientes', 'Clientes ', 1),
(4, ' Proveedores', 'Proveedores de materia prima', 1),
(5, 'Entradas', 'Materia Prima', 1),
(6, ' Merma', 'Desperdicios', 1),
(7, 'QR', 'Qr', 1),
(8, 'Pedidos', 'Exportaciones', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `idped` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(23) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `fechaCosecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `clasificacion` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `cantidad` double NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idped`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`idped`, `nombre`, `fechaCosecha`, `estado`, `clasificacion`, `cantidad`, `status`) VALUES
(1, 'Mango', '2021-01-01 10:23:23', 'Pieza', 'A', 80000, 1),
(2, 'Aguacate Hass', '2021-01-05 00:00:00', 'Pieza', 'A', 3000, 1),
(10, 'Piña Miel', '2021-01-04 00:16:00', 'Pieza', 'A', 3000, 1),
(4, 'Melon', '2021-01-05 00:00:00', 'Pieza', 'B', 7000, 1),
(5, 'Fresas', '2021-01-03 00:00:00', 'Cubos', 'C', 2000, 2),
(6, 'Uvas', '2021-01-02 00:00:00', 'Pieza', 'A', 1000, 1),
(7, 'Coco', '2021-01-11 23:55:00', 'Pieza', 'A', 2000, 1),
(8, 'Limon', '2021-01-14 00:00:00', 'Pieza', 'A', 2000, 1),
(9, 'cacahuate', '2021-01-05 00:11:00', 'Pieza', 'A', 10000, 1),
(11, 'Piña Miel', '2021-01-05 00:30:00', 'Pieza', 'A', 2000, 1),
(12, 'Piña Miel', '2021-01-05 00:30:00', 'Pieza', 'A', 2000, 1),
(13, 'Piña Miel', '2021-01-05 00:35:00', 'Pieza', 'A', 2000, 1),
(14, 'Piña Miel', '2021-01-05 00:35:00', 'Pieza', 'A', 2000, 1),
(15, 'Piña Miel', '2021-01-05 00:35:00', 'Pieza', 'A', 2000, 1),
(16, 'Piña Miel', '2021-01-05 00:35:00', 'Pieza', 'A', 2000, 1),
(17, 'Piña Miel', '2021-01-05 00:35:00', 'Pieza', 'A', 2000, 1),
(18, 'Piña Miel', '2021-01-05 00:35:00', 'Pieza', 'A', 2000, 1),
(19, 'Piña Miel', '2021-01-05 00:35:00', 'Pieza', 'A', 2000, 1),
(20, 'Piña Miel', '2021-01-05 00:35:00', 'Pieza', 'A', 2000, 1),
(21, 'Piña Miel', '2021-01-05 00:35:00', 'Pieza', 'A', 2000, 1),
(22, 'Piña Miel', '2021-01-05 00:35:00', 'Pieza', 'A', 2000, 1),
(23, 'Piña Miel', '2021-01-05 00:35:00', 'Pieza', 'A', 2000, 1),
(24, 'Piña Miel', '2021-01-05 00:35:00', 'Pieza', 'A', 2000, 1),
(25, 'Piña Miel', '2021-01-05 00:35:00', 'Pieza', 'A', 2000, 1),
(26, 'Piña Miel', '2021-01-05 00:35:00', 'Pieza', 'A', 2000, 1),
(27, 'Piña Miel', '2021-01-05 00:35:00', 'Pieza', 'A', 2000, 1),
(28, 'Piña Miel', '2021-01-05 00:35:00', 'Pieza', 'A', 2000, 1),
(29, 'Piña Miel', '2021-01-05 00:35:00', 'Pieza', 'A', 2000, 1),
(30, 'Piña Miel', '2021-01-05 00:35:00', 'Pieza', 'A', 2000, 1),
(31, 'Piña Mie', '2021-01-05 00:30:00', 'Pieza', 'A', 7, 1),
(32, 'Piña M', '2021-01-18 00:38:00', 'Pieza', 'A', 7000, 1),
(33, 'Piña Miel', '2021-01-19 00:41:00', 'Pieza', 'A', 3000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

DROP TABLE IF EXISTS `permisos`;
CREATE TABLE IF NOT EXISTS `permisos` (
  `idpermiso` bigint(20) NOT NULL AUTO_INCREMENT,
  `rolid` bigint(20) NOT NULL,
  `moduloid` bigint(20) NOT NULL,
  `r` int(11) NOT NULL DEFAULT '0',
  `w` int(11) NOT NULL DEFAULT '0',
  `u` int(11) NOT NULL DEFAULT '0',
  `d` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idpermiso`),
  KEY `rolid` (`rolid`),
  KEY `moduloid` (`moduloid`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`idpermiso`, `rolid`, `moduloid`, `r`, `w`, `u`, `d`) VALUES
(75, 1, 1, 1, 1, 1, 1),
(76, 1, 2, 1, 1, 1, 1),
(77, 1, 3, 1, 1, 1, 1),
(78, 1, 4, 1, 1, 1, 1),
(79, 1, 5, 1, 1, 1, 0),
(80, 1, 6, 1, 1, 1, 0),
(81, 1, 7, 0, 0, 0, 0),
(82, 1, 8, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

DROP TABLE IF EXISTS `persona`;
CREATE TABLE IF NOT EXISTS `persona` (
  `idpersona` bigint(20) NOT NULL AUTO_INCREMENT,
  `identificacion` varchar(30) COLLATE utf8mb4_swedish_ci NOT NULL,
  `nombres` varchar(80) COLLATE utf8mb4_swedish_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `email_user` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `password` varchar(75) COLLATE utf8mb4_swedish_ci NOT NULL,
  `nit` varchar(20) COLLATE utf8mb4_swedish_ci NOT NULL,
  `nombrefiscal` varchar(80) COLLATE utf8mb4_swedish_ci NOT NULL,
  `direccionfiscal` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `rolid` bigint(20) NOT NULL,
  `datecreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idpersona`),
  KEY `rolid` (`rolid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idpersona`, `identificacion`, `nombres`, `apellidos`, `telefono`, `email_user`, `password`, `nit`, `nombrefiscal`, `direccionfiscal`, `token`, `rolid`, `datecreated`, `status`) VALUES
(1, '24091989', 'Dmmas', 'Campeche', 24091989, 'andrespoot9723@gmail.com', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 'CF', 'Dammas Campeche', 'Ciudad de Campeche', '', 1, '2020-10-03 02:28:53', 1),
(2, '15932020', 'Carlos Enrrique', 'OSH', 78451210, 'carlos@info.com', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', '', '', '', '', 2, '2020-10-03 02:31:07', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

DROP TABLE IF EXISTS `proveedor`;
CREATE TABLE IF NOT EXISTS `proveedor` (
  `idprov` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombrer` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `apellido` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `emailprov` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idprov`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`idprov`, `nombrer`, `apellido`, `emailprov`, `telefono`, `status`) VALUES
(1, 'Daniel', 'Damas', 'dani@hotmail.com', 64564646, 1),
(2, 'Danitza', 'Perez', 'sadada@homail.com', 7887787878, 1),
(3, 'Karla', 'Hernández', '676776@gmail.com', 77876, 1),
(4, 'Hector', 'sds', '5656@gmail.com', 678686, 1),
(5, 'Armando', 'paat', '6587@gmail.com', 6564564, 1),
(6, 'Daniela', 'Perez', '7898@gmail.com', 575757, 2),
(7, 'Gabriel', 'Moo', 'carlos@info.com', 78451210, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `idrol` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombrerol` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idrol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `nombrerol`, `descripcion`, `status`) VALUES
(1, 'Administrador', 'Acceso a todo el sistema 	', 1),
(2, 'Supervisores', 'Supervisores', 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_ibfk_1` FOREIGN KEY (`rolid`) REFERENCES `rol` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permisos_ibfk_2` FOREIGN KEY (`moduloid`) REFERENCES `modulo` (`idmodulo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`rolid`) REFERENCES `rol` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
