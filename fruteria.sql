-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-09-2022 a las 15:23:22
-- Versión del servidor: 5.7.36
-- Versión de PHP: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fruteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Precio` int(11) NOT NULL,
  `Localizacion` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id`, `Nombre`, `Descripcion`, `Precio`, `Localizacion`) VALUES
(6, 'qweqw', 'eqwe', 234, 'qew'),
(7, 'qweqw', 'eqwe', 234, 'qew'),
(8, 'qweqw', 'eqwe', 234, 'qew'),
(9, 'qweqw', 'eqwe', 234, 'qew'),
(10, 'qweqw', 'eqwe', 234, 'qew'),
(11, 'qweqw', 'eqwe', 234, 'qew'),
(12, 'ad', 'sdf', 32, 'fds'),
(13, 'ad', 'sdf', 32, 'fds'),
(14, 'ad', 'sdf', 32, 'fds'),
(15, 'ad', 'sdf', 32, 'fds'),
(16, 'ad', 'sdf', 32, 'fds'),
(17, 'ad', 'sdf', 32, 'fds'),
(18, 'ad', 'sdf', 32, 'fds'),
(19, 'ad', 'sdf', 32, 'fds'),
(20, 'Hola', 'ada', 21, 'dasads'),
(21, 'Hola', 'ada', 21, 'dasads'),
(22, 'Hola', 'ada', 21, 'dasads'),
(23, 'Hola', 'ada', 21, 'dasads'),
(24, 'Hola', 'ada', 21, 'dasads'),
(25, 'Hola', 'ada', 21, 'dasads'),
(26, 'Hola', 'ada', 21, 'dasads'),
(27, 'Hola', 'ada', 21, 'dasads'),
(28, 'Hola', 'ada', 21, 'dasads'),
(29, 'Hola', 'ada', 21, 'dasads'),
(30, 'Hola', 'ada', 21, 'dasads'),
(31, '231', '1231', 2133, '123'),
(32, '231', '1231', 2133, '123'),
(33, '231', '1231', 2133, '123'),
(34, '231', '1231', 2133, '123'),
(35, '231', '1231', 2133, '123'),
(36, '231', '1231', 2133, '123'),
(37, 'Mandarina', 'asd', 12, 'ads'),
(38, 'Mandarina', 'asd', 12, 'ads'),
(39, 'Mandarina', 'asd', 12, 'ads'),
(40, 'Mandarina', 'asd', 12, 'ads'),
(41, 'Mandarina', 'asd', 12, 'ads'),
(42, 'Mandarina', 'asd', 12, 'ads'),
(43, 'Mandarina', 'asd', 12, 'ads'),
(44, 'Mandarina', 'asd', 12, 'ads'),
(45, 'Mandarina', 'asd', 12, 'ads'),
(46, 'Mandarina', 'asd', 12, 'ads'),
(47, 'Mandarina', 'asd', 12, 'ads'),
(48, 'Mandarina', 'asd', 12, 'ads'),
(49, 'Mandarina', 'asd', 12, 'ads'),
(50, 'Mandarina', 'asd', 12, 'ads'),
(51, 'Mandarina', 'asd', 12, 'ads'),
(52, 'Mandarina', 'asd', 12, 'ads'),
(53, 'Mandarina', 'asd', 12, 'ads'),
(54, 'Mandarina', 'asd', 12, 'ads'),
(55, 'Mandarina', 'asd', 12, 'ads'),
(56, 'Mandarina', 'asd', 12, 'ads'),
(57, 'Mandarina', 'asd', 12, 'ads'),
(60, 'ad', 'das', 2, 'eqw'),
(61, 'ad', 'das', 2, 'eqw');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
