-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2022 a las 17:58:12
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `medico_id` int(10) NOT NULL,
  `paciente_id` int(11) NOT NULL,
  `especialidad` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `comentario` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `medico_id`, `paciente_id`, `especialidad`, `comentario`, `date`) VALUES
(1, 2, 1, 'Cardiologia', 'Comentario numero 1 ', '2022-03-16 09:24:08'),
(2, 1, 2, 'Cardiologia', 'Comentario numero 2', '2022-07-04 09:24:31'),
(3, 2, 1, 'General', 'Comentario numero 3', '2022-07-04 09:24:48'),
(18, 5, 230, 'Clinico', 'Comentario nuevo\r\n', '2022-10-22 07:20:21'),
(20, 5, 1, 'Clinico', 'Otro comentario', '2022-10-22 07:30:07'),
(42, 5, 234, 'uno', 'Uno', '2022-10-22 08:35:53'),
(43, 5, 23, 'dos', 'Dos\r\n', '2022-10-22 08:36:04'),
(44, 5, 230, 'uno', 'Uno', '2022-10-22 08:39:52'),
(69, 5, 236, 'Clinica', 'Le pasó tal tal y tal', '2022-10-22 13:15:45');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
