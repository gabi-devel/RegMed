-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2022 a las 17:58:25
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
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL DEFAULT 'nombre',
  `apellido` varchar(255) NOT NULL DEFAULT 'apellido',
  `email` varchar(255) NOT NULL DEFAULT 'email',
  `password` varchar(255) NOT NULL DEFAULT 'password',
  `rol` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `apellido`, `email`, `password`, `rol`, `created_at`, `updated_at`) VALUES
(1, 'Paciente', 'Apellido', 'otro@gmail.com', '$2y$04$ApvsNW63oYlVlvVN8YCEs.wTkmW4inx7wv3U5xGZHRgOKJeJ7tZHO', 0, '2022-06-28 14:55:03', '2022-06-28 14:55:03'),
(2, 'Doctor', 'Uno', 'doctor@gmail.com', '$2y$04$OgcjhqpaJ9tuXTNAQU65VeZdvmAutKXMvcdgclqrS.t2N2iunrQwK', 1, '2022-07-02 04:32:31', '2022-07-02 04:32:31'),
(3, 'Paciente', 'Apellido', 'paciente@gmail.com', '$2y$04$aaqa/PUcbCxKRGKt/IAT2.jJRc8TYOq2i7XvBGs7jI8IYpBk0CGma', 0, '2022-08-20 02:49:34', '2022-08-20 02:49:34'),
(5, 'Doctor', '2222222222222', 'doc3@gmail.com', '$2y$04$q9ggs/89jTwwtJzBcby3EOviXFWGziSrCSmWsA7R9eGI53mvLIkim', 1, '2022-10-27 15:54:36', '2022-10-27 15:54:36');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
