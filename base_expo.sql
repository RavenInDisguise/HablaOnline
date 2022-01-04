-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-10-2017 a las 04:47:06
-- Versión del servidor: 5.7.19
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base_expo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `nombre` varchar(512) NOT NULL,
  `comentario` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`nombre`, `comentario`) VALUES
('Adrian', 'Me gusta el helado'),
('Monica', 'Me gusta la pagina, es cool xd'),
('Marianna ', 'La terapia de lenguaje es genial'),
('raul', 'me gusto mucho'),
('Henry', 'Es increÃ­ble\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntaje`
--

CREATE TABLE `puntaje` (
  `username` varchar(512) NOT NULL,
  `puntos` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(512) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`) VALUES
(1, 'adrian@mail.com', 'adrian', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'default@mail.com', 'default', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'danilo@gmail.com', 'Danilo', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'mareana@mail.com', 'mariana', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'susana@mail.com', 'susana', '827ccb0eea8a706c4c34a16891f84e7b'),
(7, 'raul@mail.com', 'raul', '827ccb0eea8a706c4c34a16891f84e7b'),
(8, 'carlos@mail.com', 'carlos', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `unico` (`id`,`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
