-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-04-2025 a las 15:34:23
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carnets`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `sucursal` varchar(50) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `cargo`, `sucursal`, `fecha_creacion`) VALUES
(22, 'ELENA SALAZAR', 'elenaS', 'GrzU1WYSQQ2kZY9', 'Supervisora', '', '2025-02-11 21:48:58'),
(23, 'CARLOS ROMERO', 'carlosR', 'Yni1ykAgPzJcuJF', 'Gerente', '', '2025-02-11 21:49:21'),
(24, 'MARIA GARCIA', 'mariaG', 'TPrZE31radapQDI', 'Supervisora', '', '2025-02-11 21:55:59'),
(55, 'Kaled Salah', 'kaledS', 'teNPjMhwgfAzkmQ', 'Gerente', 'sanjuandelosmorros', '2025-02-22 19:58:35'),
(56, 'Caja 1', 'caja1', 'BrwTgxHDP29Ao0g', 'Supervisora', 'sanjuandelosmorros', '2025-02-22 19:58:28'),
(57, 'Caja 2', 'caja2', 'MFzKyqv594xuNJw', 'Supervisora', 'sanjuandelosmorros', '2025-02-22 19:58:25'),
(58, 'Caja 3', 'caja3', 'KkJlwsoOcyQzsS5', 'Supervisora', 'sanjuandelosmorros', '2025-02-22 20:08:41'),
(59, 'Caja 4', 'caja4', 'OvsPZnlMS4AUIKn', 'Supervisora', 'sanjuandelosmorros', '2025-02-22 19:58:16'),
(60, 'Caja 5', 'caja5', 'JFM0lee9vTA0NSr', 'Supervisora', 'sanjuandelosmorros', '2025-02-22 19:58:12'),
(62, 'Yiselis Azuaje', 'yiselisA', 'amvSvm6dnU1hQ8T', 'Supervisora', 'sanjuandelosmorros2', '2025-02-25 12:55:29'),
(63, 'CAJA 1', 'caja1', 'YRbPZu5YK56Jrog', 'Cajera', 'elsombrero', '2025-03-20 21:49:45'),
(64, 'CAJA 2', 'caja2', 'YBfubzkDyduyeUT', 'Cajera', 'elsombrero', '2025-03-20 21:50:03'),
(65, 'CAJA 3', 'caja3', 'ui2N02R1jKlSSmm', 'Cajera', 'elsombrero', '2025-03-20 21:50:19'),
(67, 'SANDRIMAR GUARAN', 'sandrimarG', 'eMtdDAfgxqwlFc3', 'Gerente', 'sansebastian', '2025-04-05 21:15:49'),
(68, 'CAJA 1', 'caja1', 'mJVSrY3w1FX7TMS', 'Cajera', 'sansebastian', '2025-04-05 20:56:06'),
(69, 'CAJA 2', 'caja2', 'B0wCPR1TBBXFxTk', 'Cajera', 'sansebastian', '2025-04-05 20:56:23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
