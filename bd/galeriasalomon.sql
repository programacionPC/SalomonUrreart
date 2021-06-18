-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2021 a las 23:02:38
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `galeriasalomon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artista`
--

CREATE TABLE `artista` (
  `ID_Artista` int(11) NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre_Fotografia` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_Fotografia` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `tamanio_Fotografia` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `artista`
--

INSERT INTO `artista` (`ID_Artista`, `perfil`, `nombre_Fotografia`, `tipo_Fotografia`, `tamanio_Fotografia`) VALUES
(1, 'asdfsdf\r\nsdfsdfsdfsdfs sadf sdfsf sdf sdfsa dfs dfsa dfs adf sadfsdfsadf sdf sadfsadfs adfsadfsdfsdfsadf sdfsadfsadf sdfsdfsdf sdfsdfsdfsadfsd\r\nssdfsadfsdfsdfsdf fsdfsdfsdf sdfsdfsdf sdfsdfsdfsdfsdfsdf sdfsdfsd\r\n\r\nasdfsdfsdfdfasdfsd fsdfsdf sdfsdf sdfsdfs fdsdfsdfsdfs fsdfsdf sdfsdfs dfsdfsa dfsdfsdf sdfsdfsdf sdfsdfsdfsadf sdf sdfsdf sdfsdfsdfsdfsdfsdfsdfsdf sdfsdfsdf sdfsdfsdfsdfsdf sdfsd fsdfs dfsdf sdfsdfsddfsad fsdf sdfsdfsdf sdfsdfsdf sdfsdf sdfsdfsdfsd fsd\r\n\r\nfsadfsdfs dfsdfsdf sdfsdfsdf sdfsdfsdf sdfasdfsdf sdfsdfsdfsd sdfsdf sdfsadfs adfsadf sdf sdfsfdsdfsdf sdf sdf sdfs dfs dfsdfsdfsdfs dfsdfsdf sdfsdfsdf sdfsdfsd fsdfsdfdsfasdf sdfsdfsadf sdfsfs fsdfa sdfsdf sdfsdf sdf sdf sdfsadfsdfsdf', '11659559_1029575237054074_8264324599556140025_n.jpg', 'image/jpeg', '51081');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colecciones`
--

CREATE TABLE `colecciones` (
  `ID_Coleccion` int(11) NOT NULL,
  `nombre_coleccion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_creacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ponchos`
--

CREATE TABLE `ponchos` (
  `ID_Poncho` int(11) NOT NULL,
  `nombrePoncho` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `medidaPoncho` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `tecnicaPoncho` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_ImgPoncho` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tamanio_ImgPoncho` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_ImgPoncho` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ponchos`
--

INSERT INTO `ponchos` (`ID_Poncho`, `nombrePoncho`, `medidaPoncho`, `tecnicaPoncho`, `nombre_ImgPoncho`, `tamanio_ImgPoncho`, `tipo_ImgPoncho`, `fecha`) VALUES
(2, 'Poncho Pajaro', '50 cm x 50 cm', 'Oleo al frio', 'Pajaro.jpg', '5339539', 'image/jpeg', '2021-06-17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artista`
--
ALTER TABLE `artista`
  ADD PRIMARY KEY (`ID_Artista`);

--
-- Indices de la tabla `colecciones`
--
ALTER TABLE `colecciones`
  ADD PRIMARY KEY (`ID_Coleccion`);

--
-- Indices de la tabla `ponchos`
--
ALTER TABLE `ponchos`
  ADD PRIMARY KEY (`ID_Poncho`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artista`
--
ALTER TABLE `artista`
  MODIFY `ID_Artista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `colecciones`
--
ALTER TABLE `colecciones`
  MODIFY `ID_Coleccion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ponchos`
--
ALTER TABLE `ponchos`
  MODIFY `ID_Poncho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
