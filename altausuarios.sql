-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-01-2021 a las 18:12:28
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `altausuarios`
--

CREATE TABLE `altausuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `altausuarios`
--

INSERT INTO `altausuarios` (`id`, `nombre`, `apellido`, `email`, `usuario`, `clave`) VALUES
(2, 'Tomas2', 'Coscarelli2', 'tomas@tomas.com', 'root', ''),
(3, 'Holala', 'Cosca', 'tomi@tomi.com', 'root', ''),
(4, 'Marianella', 'Coscarelli', 'tomi@tomi.com.ar', 'root', ''),
(5, 'Marianella2', 'Coscarelli2', 'tomi@tomi.com.ar', '', ''),
(6, 'Marianella2', 'Coscarelli2', 'tomi@tomi.com.ar', 'root', ''),
(7, 'Marianella2', 'Coscarelli2', 'tomi@tomi.com.ar', 'root', ''),
(8, 'rfgtar', 'ergserg', 'tomi@tomi.com', 'root', ''),
(9, 'Tomas1', 'Cosca1', 'tomi@tomi.com.ar', 'root', ''),
(10, 'Tomas1', 'Cosca1', 'tomi@tomi.com.ar', 'root', ''),
(11, '', '', '', 'root', ''),
(12, 'rev', 'ar', 'tomas@hotmail.com', 'root', ''),
(13, 'Carlos', 'Coscarelli', 'tomascoscarelli3@gmail.com', 'root', ''),
(14, 'Carlos', 'Coscarelli', 'tomascoscarelli3@gmail.com', 'root', ''),
(15, 'Carlos', 'Coscarelli', 'tomascoscarelli3@gmail.com', 'root', ''),
(16, 'Carlos', 'Coscarelli', 'tomascoscarelli3@gmail.com', 'TomasasÑKUYTGK', ''),
(17, 'Carlos', 'Coscarelli', 'tomascoscarelli3@gmail.com', 'TomasasÑKUYTGK', 'KYFKU'),
(18, 'Tomas', 'Coscarelli', 'tomi@tomi.com', 'Thising12', '3c07a2b495cd838'),
(19, 'Tomas', 'Coscarelli', 'tomi@tomi.com', 'Thising1', '3c07a2b495cd8389880f508bb8d19e52'),
(20, 'Carlos', 'Coscarelli2', 'tomas@tomas.com', 'Carlos', '409c2baac455afee82a6823769e965c9'),
(21, '', '', '', 'juans', '16fdfa8f744211bb1f44be3042e5ebeb'),
(22, 'Tomas', 'Coscarelli', 'tomaas.-14@hotmail.com', 'Thising', '409c2baac455afee82a6823769e965c9'),
(23, 'Tomas', 'Cosca1', 'tomi@tomi.com', 'ewargr', '4c449a2bdbc0f879109fe23d1afe11ff'),
(24, 'Tomas', 'Cosca1', 'tomi@tomi.com', 'ewargr1', 'c81380e4ce87cc7662b4cb7ebc0eef50'),
(25, 'Tomas1', 'Coscarella', 'tomi@tomi.com', 'Thising2', 'polopolo'),
(26, 'Marianela', 'Coscarelli', 'mc@resu.pro', 'marianella', 'TomasAngel'),
(27, 'Marianela', 'Sofia', 'marianella.sofia@outlook.com', 'Mari', 'Mari1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `altausuarios`
--
ALTER TABLE `altausuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `altausuarios`
--
ALTER TABLE `altausuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
