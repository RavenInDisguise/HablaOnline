-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 24-10-2017 a las 07:16:56
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
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` longtext NOT NULL,
  `dated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `comment`, `dated`) VALUES
(1, 1, 'Prueba de comentario', '2017-10-24 01:54:58'),
(13, 1, 'Segundo comentario', '2017-10-24 02:29:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `points`
--

CREATE TABLE `points` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `points` int(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `game` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `points`
--

INSERT INTO `points` (`id`, `user_id`, `points`, `date`, `game`) VALUES
(1, 1, 78, '2017-10-24 00:32:49', 4),
(2, 1, 66, '2017-10-24 00:37:11', 2),
(3, 1, 98, '2017-10-24 00:40:10', 2),
(4, 1, 77, '2017-10-24 02:42:41', 4),
(5, 1, 44, '2017-10-24 03:28:21', 4),
(6, 1, 78, '2017-10-24 03:34:04', 3),
(7, 2, 18, '2017-10-24 03:51:39', 4),
(8, 1, 52, '2017-10-24 03:53:43', 1),
(9, 1, 54, '2017-10-24 03:54:19', 1),
(10, 1, 75, '2017-10-24 05:38:58', 4),
(11, 1, 28, '2017-10-24 05:41:15', 1),
(12, 1, 76, '2017-10-24 05:41:55', 3),
(13, 1, 31, '2017-10-24 05:43:21', 1),
(14, 1, 119, '2017-10-24 05:46:58', 1),
(15, 1, 32, '2017-10-24 05:47:53', 1),
(16, 1, 85, '2017-10-24 05:50:58', 3),
(17, 1, 76, '2017-10-24 05:55:11', 1),
(18, 1, 66, '2017-10-24 05:59:17', 4);

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
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `points`
--
ALTER TABLE `points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
