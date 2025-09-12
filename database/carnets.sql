-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-07-2025 a las 18:05:34
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
(24, 'MARIA GARCIA', 'mariaG', 'TPrZE31radapQDI', 'Supervisora', 'tocuyito', '2025-07-05 14:34:53'),
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
(69, 'CAJA 2', 'caja2', 'B0wCPR1TBBXFxTk', 'Cajera', 'sansebastian', '2025-04-05 20:56:23'),
(70, 'Jilver Rodriguez', 'jilverR', 'nyz1r89VUdUXkoz', 'Gerente', 'bruzual', '2025-04-28 12:16:03'),
(71, 'Gabriela Cardoza', 'gabrielaC', 'HzBhU3sjf74lAyL', 'Supervisora', 'administracion', '2025-04-30 20:30:21'),
(72, 'Daniela Muñoz', 'danielaM', 'pR3dd4k6gHxXGa8', 'Gerente', 'tinaquillo', '2025-05-01 13:50:06'),
(73, 'Diosdelyn Gonzalez', 'diosdelynG', 'kTfBavgEZwqgnvq', 'Supervisora', 'maracay', '2025-05-01 15:22:29'),
(74, 'Kareanny Lugo', 'kareannyL', 'erdEJ8GFxbvpJGc', 'Supervisora', 'tinaquillo', '2025-05-12 14:35:01'),
(75, 'LUIS GONZÁLEZ', 'luisG', '72Wp6ioLhlM8qFC', 'Gerente', 'valledelapascua2', '2025-05-24 20:36:55'),
(76, 'IKER RODRÍGUEZ', 'ikerR', 'djhYEfFLmDV0wL0', 'Gerente', 'guacara', '2025-07-07 12:18:55'),
(77, 'Winder Bracho', 'winderB', '7HWrTxaGSDhk3mI', 'Gerente', 'sanfernando3', '2025-05-28 21:55:02'),
(78, 'Fredy Mendoza', 'fredyM', '3Kd0y6KLgyhtjZ7', 'Gerente', 'bruzual', '2025-05-28 21:55:41'),
(79, 'Emilio Meléndez', 'emilioM', 'RfH5pkkYsCqeWTl', 'Gerente', 'calabozo', '2025-05-28 21:56:11'),
(80, 'CARLOS ROMERO', 'carlosR', 'kJxiavUeiwMG1QJ', 'Gerente', 'sanjuandelosmorros', '2025-06-20 13:45:57'),
(81, 'Andres Lara', 'andresL', 'dLtlY0J8bSKcuQU', 'Gerente', 'maracay', '2025-06-20 18:31:37'),
(82, 'Caja 3', 'caja3', 'v8FRbdpUu6lqP7u', 'Cajera', 'valledelapascua', '2025-07-03 22:06:58'),
(83, 'Jose Cordero', 'joseC', 'nAAvU4TFmbnTHoo', 'Dici', 'calabozo', '2025-07-07 20:12:21'),
(84, 'Freddy Herrera', 'freddyH', 'MpRax7pObTIhmAI', 'Dici', 'valledelapascua2', '2025-07-07 20:12:01'),
(85, 'Luis González', 'luisG', 'ZTEvkpDeUR1FMvq', 'Dici', 'elsombrero', '2025-07-07 20:12:07'),
(86, 'Elianny Pérez', 'eliannyP', 'SPhNC6z96aTLTPj', 'Cajera', 'achaguas', '2025-07-05 12:44:01'),
(87, 'john herrera', 'johnH', 'WcBzYdGM7Vy0wMk', 'Gerente', 'turen', '2025-07-05 13:31:23'),
(88, 'Nicoll Alvarez', 'nicollA', 'soAYjyDtNDs5G3X', 'Supervisora', 'guacara', '2025-07-05 14:31:32'),
(89, 'Almildre Silva', 'almildreS', 'omtOOJ2EqlWFw3w', 'Dici', 'turen', '2025-07-07 20:12:50'),
(90, 'Anderson Bustillo', 'andersonB', 'VNggk7gdonrMQQI', 'Dici', 'valledelapascua', '2025-07-07 20:10:57'),
(91, 'Wisam Al Hennawi', 'wisamH', 'dZQV0Y7j2nrdssg', 'Dici', 'mantecal', '2025-07-07 20:10:50'),
(92, 'Jose Gutiérrez', 'joseG', 'goP6tAeiCgGmseD', 'Dici', 'achaguas', '2025-07-07 20:10:39'),
(93, 'SAUL BORJAS', 'saulB', 'HQ5BoOf6o6Pmc1o', 'Dici', 'achaguas', '2025-07-07 20:12:39'),
(94, 'Tomas Nicoletti', 'tomasN', 'fI3hV5jib7QZBhn', 'Gerente', 'zaraza', '2025-07-05 21:21:37'),
(95, 'Walid Aldebs', 'walidA', 'V1PPBzspms7Taso', 'Gerente', 'guacara', '2025-07-11 15:13:55'),
(96, 'Maria Sarzalejo', 'mariaS', '647726627744056', 'Gerente', 'zaraza', '2025-07-06 15:55:54'),
(97, 'Jesús Rodríguez', 'jesusR', 'Di2blEB5xLBTq55', 'Dici', 'zaraza', '2025-07-06 15:16:02'),
(98, 'Eddinson Utrera', 'eddinsonU', 'RVPLowJgMmqCGxe', 'Dici', 'zaraza', '2025-07-10 16:25:36'),
(99, 'Admin', 'admin', 'M0u8HHqNMP15p8Z', 'Gerente', 'administracion', '2025-07-11 12:25:19'),
(100, 'Mones Hennawi', 'monesH', '7wHzp800ebLQu65', 'Gerente', 'anaco', '2025-07-17 23:01:23'),
(101, 'William Perez', 'williamP', 'igzRdNZQJOK8wVT', 'Dici', 'administracion', '2025-07-19 22:36:13'),
(102, 'Julio Arguello', 'julioA', 'y4zBPzPalpdu2kG', 'Dici', 'administracion', '2025-07-19 22:36:41'),
(103, 'Dixi Carrasquel', 'dixiC', 'r65mT0xYiUMPlIh', 'Dici', 'administracion', '2025-07-19 22:37:04'),
(104, 'CAJA 1', 'caja1', 'z8awdUyZ5kZAtXa', 'Cajera', 'administracion', '2025-07-19 22:45:13'),
(105, 'CAJA 2', 'caja2', 'jO7KDbibVp1G1Yf', 'Cajera', 'administracion', '2025-07-19 22:45:27'),
(106, 'CAJA 3', 'caja3', 'nVEhG0APxHfDXbE', 'Cajera', 'administracion', '2025-07-19 22:45:38'),
(107, 'CAJA 4', 'caja4', 'qHA87c9GC2yGNm0', 'Cajera', 'administracion', '2025-07-19 22:45:53');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
