-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2021 a las 05:23:13
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `datacaptures`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cifbioactive`
--

CREATE TABLE `cifbioactive` (
    `userid` int(255) NOT NULL,
`first_name` varchar(150) NOT NULL,
`last_name` varchar(150) NOT NULL,
`email` varchar(150) NOT NULL,
`birthday` varchar(150) NOT NULL,
`phone` varchar(150) NOT NULL,
`address` varchar(150) NOT NULL,
`que_marca_de_detergente_lavavajilla_usas_actualmente` varchar(150) NOT NULL,
`si_respondiste_otro_cual` varchar(150) NOT NULL,
`te_gusto_el_nuevo_cif_bioactive` varchar(150) NOT NULL,
`lo_volverias_a_comprar` varchar(150) NOT NULL, 
  `mayor_18_anos` tinyint(1) NOT NULL,
  `allow_global` tinyint(1) NOT NULL,
  `allow_brand` tinyint(1) NOT NULL,
  `acepto_bases_y_condiciones` tinyint(1) NOT NULL,
  `dia` varchar(100) NOT NULL,
  `hora` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cifbioactive`
--
ALTER TABLE `cifbioactive`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cifbioactive`
--
ALTER TABLE `cifbioactive`
  MODIFY `userid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
