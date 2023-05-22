-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2023 a las 22:21:18
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bowld`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bookings`
--

CREATE TABLE `bookings` (
  `id` varchar(15) NOT NULL,
  `user_id` varchar(15) NOT NULL,
  `number_persons` int(11) NOT NULL,
  `date_booking` datetime NOT NULL,
  `deposit` int(11) NOT NULL,
  `bowling_line_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `user_modified` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `number_persons`, `date_booking`, `deposit`, `bowling_line_id`, `status`, `date_created`, `date_modified`, `user_modified`) VALUES
('6469364e595a1', '642a1130274', 5, '2023-05-22 15:00:00', 0, 0, 0, '2023-05-19 23:08:11', '2023-05-20 23:08:11', '642a1130274'),
('6469364e595b8', '642a1130274', 9, '2023-05-22 16:00:00', 0, 0, 0, '2023-05-19 23:08:11', '2023-05-20 23:08:11', '642a1130274'),
('6469364e595a1', '642a1130274', 5, '2023-05-23 15:00:00', 0, 0, 0, '2023-05-19 23:08:11', '2023-05-20 23:08:11', '642a1130274'),
('6469364e595b8', '642a1130274', 9, '2023-05-23 16:00:00', 0, 0, 0, '2023-05-19 23:08:11', '2023-05-20 23:08:11', '642a1130274'),
('6469364e595a1', '642a1130274', 5, '2023-05-23 15:00:00', 0, 0, 0, '2023-05-19 23:08:11', '2023-05-20 23:08:11', '642a1130274'),
('6469364e595b8', '642a1130274', 9, '2023-05-24 16:00:00', 0, 0, 0, '2023-05-19 23:08:11', '2023-05-20 23:08:11', '642a1130274'),
('6469364e595a1', '642a1130274', 5, '2023-05-24 15:00:00', 0, 0, 0, '2023-05-19 23:08:11', '2023-05-20 23:08:11', '642a1130274'),
('6469364e595b8', '642a1130274', 9, '2023-05-24 16:00:00', 0, 0, 0, '2023-05-19 23:08:11', '2023-05-20 23:08:11', '642a1130274'),
('6469364e595a1', '642a1130274', 5, '2023-05-25 15:00:00', 0, 0, 0, '2023-05-19 23:08:11', '2023-05-20 23:08:11', '642a1130274'),
('6469364e595b8', '642a1130274', 9, '2023-05-25 16:00:00', 0, 0, 0, '2023-05-19 23:08:11', '2023-05-20 23:08:11', '642a1130274'),
('6469364e595a1', '642a1130274', 5, '2023-05-23 15:00:00', 0, 0, 0, '2023-05-19 23:08:11', '2023-05-20 23:08:11', '642a1130274'),
('6469364e595b8', '642a1130274', 9, '2023-05-23 16:00:00', 0, 0, 0, '2023-05-19 23:08:11', '2023-05-20 23:08:11', '642a1130274'),
('6469364e595a1', '642a1130274', 5, '2023-05-23 15:00:00', 0, 0, 0, '2023-05-19 23:08:11', '2023-05-20 23:08:11', '642a1130274'),
('6469364e595b8', '642a1130274', 9, '2023-05-24 16:00:00', 0, 0, 0, '2023-05-19 23:08:11', '2023-05-20 23:08:11', '642a1130274'),
('6469364e595a1', '642a1130274', 5, '2023-05-24 15:00:00', 0, 0, 0, '2023-05-19 23:08:11', '2023-05-20 23:08:11', '642a1130274'),
('6469364e595b8', '642a1130274', 9, '2023-05-24 16:00:00', 0, 0, 0, '2023-05-19 23:08:11', '2023-05-20 23:08:11', '642a1130274'),
('6469364e595a1', '642a1130274', 5, '2023-05-25 15:00:00', 0, 0, 0, '2023-05-19 23:08:11', '2023-05-20 23:08:11', '642a1130274'),
('6469364e595b8', '642a1130274', 9, '2023-05-25 16:00:00', 0, 0, 0, '2023-05-19 23:08:11', '2023-05-20 23:08:11', '642a1130274');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bowling_line`
--

CREATE TABLE `bowling_line` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `user_modify` varchar(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `bowling_line`
--

INSERT INTO `bowling_line` (`id`, `status`, `user_modify`, `date_created`, `date_modify`) VALUES
(1, 0, '642a1130274', '2023-04-02 18:00:00', '2023-04-02 18:00:00'),
(2, 0, '642a1130274', '2023-04-02 18:00:00', '2023-04-02 18:00:00'),
(3, 0, '642a1130274', '2023-04-02 18:00:00', '2023-04-02 18:00:00'),
(4, 0, '642a1130274', '2023-04-02 18:00:00', '2023-04-02 18:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees`
--

CREATE TABLE `employees` (
  `id` varchar(60) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `status` int(11) NOT NULL,
  `rol` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `last_connec` datetime NOT NULL,
  `user_modified` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `employees`
--

INSERT INTO `employees` (`id`, `user_id`, `user_name`, `password`, `status`, `rol`, `gender`, `date_created`, `date_modified`, `last_connec`, `user_modified`) VALUES
('646b8b2be7faa', '646b8b2be7fc7', 'jgarcia', 'e19d5cd5af0378da05f63f891c7467af', 0, 1, 0, '2023-05-22 10:32:59', '2023-05-22 10:32:59', '2023-05-22 14:21:16', ''),
('646b922b09961', '646b922b09971', 'ccastro', 'e19d5cd5af0378da05f63f891c7467af', 0, 1, 1, '2023-05-22 11:02:51', '2023-05-22 11:02:51', '0000-00-00 00:00:00', ''),
('646b841c15456', '646b841c15436', 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, 0, 0, '2023-05-22 10:02:52', '2023-05-22 10:02:52', '2023-05-22 15:13:40', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payments`
--

CREATE TABLE `payments` (
  `id` varchar(60) NOT NULL,
  `reference` int(11) NOT NULL,
  `deposito` float NOT NULL,
  `type` int(11) NOT NULL,
  `total` float NOT NULL,
  `status` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `user_modifies` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` varchar(60) NOT NULL,
  `unique_id` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(75) DEFAULT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `unique_id`, `name`, `last_name`, `phone`, `email`, `date_created`) VALUES
('646b8b2be7fc7', '1152712398', 'Juan Pablo', 'Garcia Duran', 123456789, 'juan@juan.com', '2023-05-22 10:32:59'),
('646b922b09971', '98060559066', 'Carlos ', 'Castro', 123456789, 'j@j.com', '2023-05-22 11:02:51'),
('646b841c15436', '123456789', 'Administrador', '', 123456789, 'admin@admin.com', '2023-05-22 10:02:52');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
