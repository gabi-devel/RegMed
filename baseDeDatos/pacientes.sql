-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2022 a las 17:57:35
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
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `dni` int(11) NOT NULL,
  `fecha_nac` date NOT NULL,
  `sexo` varchar(11) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tel` bigint(15) NOT NULL,
  `direccion` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `nombre`, `apellido`, `dni`, `fecha_nac`, `sexo`, `tel`, `direccion`) VALUES
(1, 'Hector', 'Ramirez', 3, '1975-06-14', 'Hombre', 3364865236, 'Rivadavia 300'),
(2, 'Florencia', 'Rodriguez', 13838923, '2022-06-14', 'Mujer', 3364286153, 'Alem 35'),
(3, 'Juan', 'Gonzalez', 45828113, '2022-06-14', 'Hombre', 3364056274, 'Pellegrini 132'),
(92, 'Jorge', 'Ramirez', 25486218, '2022-06-14', 'Hombre', 3364852356, 'Savio 671'),
(97, 'Carla', 'Martinez', 5, '2022-06-14', 'Mujer', 3364852356, 'adsdasd'),
(101, 'Juan', 'Diaz', 3, '2022-06-29', 'Hombre', 3364846151, 'adsdfsf'),
(103, 'Otro Nombre', 'Otro Apellido', 15, '2022-06-15', 'Hombre', 3364852111, 'Juan B Justo 2771'),
(162, 'Luis', 'Spindola', 55555, '0000-00-00', '', 0, 'Bolivar 28'),
(215, 'Gabriel', 'Otro', 777, '2022-06-21', 'Hombre', 1718671, 'Savio 671'),
(216, 'Gabriel', 'Otro', 777, '2022-06-21', 'Hombre', 1718671, 'Savio 671'),
(227, 'Joaquin', 'Lopez', 28952186, '0000-00-00', 'Hombre', 336486126, 'Urquiza 834'),
(230, 'Gabriela', 'User', 1, '0000-00-00', '', 0, 'Tal direccion'),
(231, 'Gabriela', 'Dos', 2, '0000-00-00', '', 0, 'Rivadavia 1568'),
(232, 'Roberto', 'Fontanarrosa', 10, '0000-00-00', '', 0, 'Buenos Aires');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
