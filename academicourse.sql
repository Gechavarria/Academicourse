-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2022 a las 03:22:39
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `academicourse`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio_login`
--

CREATE TABLE `inicio_login` (
  `id` int(255) NOT NULL,
  `usuario` text NOT NULL,
  `contrasena` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inicio_login`
--

INSERT INTO `inicio_login` (`id`, `usuario`, `contrasena`) VALUES
(1, 'gerardo', '123'),
(2, 'isabel', '123'),
(3, 'SARA', '123'),
(4, 'camilo', '123'),
(5, 'vaiolett', '123'),
(6, 'luis', '123'),
(7, 'juan', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_alumnos`
--

CREATE TABLE `registro_alumnos` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `codigo` int(11) NOT NULL,
  `grupo` text NOT NULL,
  `nota1` decimal(10,2) NOT NULL,
  `nota2` decimal(10,2) NOT NULL,
  `nota3` decimal(10,2) NOT NULL,
  `promedio` decimal(10,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_docentes`
--

CREATE TABLE `registro_docentes` (
  `id` int(255) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `cedula` int(255) NOT NULL,
  `titulo1` text NOT NULL,
  `titulo2` text NOT NULL,
  `materia` text NOT NULL,
  `horario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inicio_login`
--
ALTER TABLE `inicio_login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro_alumnos`
--
ALTER TABLE `registro_alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro_docentes`
--
ALTER TABLE `registro_docentes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inicio_login`
--
ALTER TABLE `inicio_login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `registro_alumnos`
--
ALTER TABLE `registro_alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `registro_docentes`
--
ALTER TABLE `registro_docentes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
