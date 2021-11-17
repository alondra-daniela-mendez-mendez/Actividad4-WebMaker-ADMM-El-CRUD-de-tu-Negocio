-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2021 a las 05:47:31
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbwebmaster`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(5) NOT NULL,
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nac` date NOT NULL,
  `especializacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `apellidos`, `email`, `fecha_nac`, `especializacion`) VALUES
(2, 'Carmen', 'Méndez Chávez', 'carmen176@gmail.com', '1990-08-17', 'Gestión de Bases de Datos'),
(3, 'Miguel', 'Palacios Méndez', 'migmende@gmail.com', '1995-04-26', 'Desarrollo Movil'),
(4, 'Gabriel', 'Pérez Martinez', 'gabomart@gmail.com', '1996-11-14', 'Diseño de Aplicaciones Web'),
(5, 'Ignacio Raúl', 'Rodríguez Aragón', 'ignacio123@gmail.com', '1997-05-27', 'Web FrontEnd'),
(6, 'Alondra Daniela', 'Méndez Méndez', 'alondramendez@dgeti.sems.gob.mx', '2004-09-13', 'Gestión de Bases de Datos'),
(7, 'Eliseo', 'Nava', 'elinava@gmail.com', '1970-10-10', 'Gestión de Bases de Datos'),
(8, 'Mario', 'Molina Andrade', 'mario14andrade@gmail.com', '2000-12-14', 'Desarrollo Movil');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
