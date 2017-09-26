-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2017 a las 05:44:13
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_resolve`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `foto` varchar(45) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `foto`
--

INSERT INTO `foto` (`id`, `id_empleado`, `foto`) VALUES
(1, 0, 'foto20160929014529.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrocuenta`
--

CREATE TABLE `registrocuenta` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `avatar` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `fechaDeNacimiento` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `contraseña` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `foto` varchar(45) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `registrocuenta`
--

INSERT INTO `registrocuenta` (`id`, `nombre`, `apellido`, `avatar`, `fechaDeNacimiento`, `email`, `contraseña`, `foto`) VALUES
(17, 'papa', 'papa', 'papa', 'papa', 'papa@papa', '0ac6cd34e2fac333bf0ee3cd06bdcf96', 'foto20160929021727.jpg'),
(18, 'afasdfas', 'asfas', 'fasfafd', 'asfasf', 'afad@asdfa', '6a204bd89f3c8348afd5c77c717a097a', 'foto20160929021924.jpg'),
(19, 'baraco', 'baraco', 'baraco', 'baraco', 'baraco@baraco', '463bd8909df8f2cc1f0d88d652b257c1', 'foto20160929022737.jpg'),
(20, 'william', 'william', 'william', 'william', 'william@william', 'fd820a2b4461bddd116c1518bc4b0f77', 'foto20160929082914.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registrocuenta`
--
ALTER TABLE `registrocuenta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `registrocuenta`
--
ALTER TABLE `registrocuenta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
