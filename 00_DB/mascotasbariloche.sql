-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2019 a las 22:28:04
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mascotasbariloche`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `mensaje` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `id_pulicacion` int(11) NOT NULL,
  `id_destinatario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `imagen` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=63 ;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `id_usuario`, `size`, `imagen`, `fecha`) VALUES
(53, 13, 71159, '47452967_2227447103954113_192878099270991872_n.jpg', '2018-12-09 18:41:09'),
(59, 14, 79160, '48269208_1939304396177632_8004204939494555648_n.jpg', '2018-12-09 19:01:53'),
(60, 15, 62057, '47686939_10156232337315749_5804626172872491008_n.jpg', '2018-12-09 19:23:31'),
(61, 16, 120529, '$_20.jpg', '2018-12-09 23:47:28'),
(62, 19, 66356, '48333194_2235875829777907_8793707764875526144_n.jpg', '2018-12-10 16:36:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE IF NOT EXISTS `mascotas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `edad` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE IF NOT EXISTS `publicaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `tipo` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 Perdidos 1 Encontrados 2 Adopción 3 Parejas',
  `publicacion` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_imagen` int(11) DEFAULT NULL,
  `id_mascota` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=83 ;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `id_usuario`, `tipo`, `publicacion`, `fecha`, `id_imagen`, `id_mascota`) VALUES
(73, 13, 0, 'Se perdió Ipa, tenía collar rojo y se perdió por la zona del km 5 cualquier información por favor comunicarse!', '2018-12-09 15:41:10', 53, NULL),
(79, 14, 1, 'Hola este perro grandote está perdido en Ruta 40 y Shaquil en la despensa. Busca comida y tiene marca de haber tenido collar. ', '2018-12-09 16:01:53', 59, NULL),
(80, 15, 3, 'Busca casa urgente. Se queda en la calle sino. Se termina el transito por viaje\r\n', '2018-12-09 16:23:31', 60, NULL),
(81, 16, 4, 'Chow chow busca novia, no cobro servicio solo quiero un cachorro,  me encanta esta raza y busco un descendiente de mi mascota.', '2018-12-09 20:47:28', 61, NULL),
(82, 19, 1, 'Holaaaa tengoo este golden en casa km 4 de bustillo. Aparecio ayer a la tarde\r\nMacho collar azul', '2018-12-10 13:36:28', 62, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `clave`, `mail`) VALUES
(13, 'Lautaro Huichalaf', '12345678', 'huichalaf.lautaro@cts.edu.ar'),
(14, 'Malena Colantonio', '12345678', 'malelauti@hotmail.com'),
(15, 'Tomás Sánchez Gavier', '12345678', 'sgtomas@cts.edu.ar '),
(16, 'Tadeo Painefil', '12345678', 'painefil.tadeo@cts.edu.ar '),
(17, 'Jiva', '12345678', 'villaroel.joaquin@cts.edu.ar '),
(18, 'cualquiera', '12345678', 'cualquiera@hotmail.com'),
(19, 'Ejemplo', '12345678', 'Ejemplo2@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
