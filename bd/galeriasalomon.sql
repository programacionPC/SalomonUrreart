-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 08-07-2021 a las 16:43:16
-- Versión del servidor: 5.7.33-log-cll-lve
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `galeriaSalomon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artista`
--

CREATE TABLE `artista` (
  `ID_Artista` int(11) NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre_Fotografia` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_Fotografia` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `tamanio_Fotografia` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `artista`
--

INSERT INTO `artista` (`ID_Artista`, `perfil`, `nombre_Fotografia`, `tipo_Fotografia`, `tamanio_Fotografia`) VALUES
(45, 'Salomón Urrea es un artista inspirado por la esencia de la naturaleza, desde que era niño, intuía sobre su talento en el dibujo y sentía una conexión especial con los animales, durante las clases de dibujo en la carrera de diseño industrial culminada en el 2019 confirmo sus gustos.  \r\n\r\nSalomón interpreta las maracas  de los llanos, instrumento que puso su padre como herencia cultural, la relación sonora entre el galope del caballos que corre libre en la llanura se transmitió por las mismas manos al pincel. \r\n\r\nEl encuentro con la fauna salvaje y en especial con los caballos, inspiró su desarrollo como artista, que empezaría a fortalecerse a partir de la elaboración de pinturas sobre ponchos para la empresa artesanal de sus padres y haciéndose mas firme posteriormente al experimentar el lienzo, logrando un éxito empírico. \r\n \r\nActualmente, su misión esta consolidada en una visión amplia de la estética de la naturaleza, la cual es referencia aplicada en el estilo de realismo, llevándolo a pintar la biodiversidad  de los llanos de Casanare - Colombia donde reside. Pretende, por medio de sus obras, acariciar las fibras del asombro que existe en la relación del hombre y el entorno natural. \r\n', 'salomonurreart_caballo.jpeg', 'image/jpeg', '88562');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colecciones`
--

CREATE TABLE `colecciones` (
  `ID_Coleccion` int(11) NOT NULL,
  `nombre_coleccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_creacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `colecciones`
--

INSERT INTO `colecciones` (`ID_Coleccion`, `nombre_coleccion`, `fecha_creacion`) VALUES
(1, 'Borra', '2021-06-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenesminiaturas`
--

CREATE TABLE `imagenesminiaturas` (
  `ID_ImagenMiniatura` int(11) NOT NULL,
  `ID_Pintura` int(11) NOT NULL,
  `nombre_ImagenMiniatura` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenesminiaturas`
--

INSERT INTO `imagenesminiaturas` (`ID_ImagenMiniatura`, `ID_Pintura`, `nombre_ImagenMiniatura`) VALUES
(1, 3, 'Buho-Cabeza-min.jpg'),
(2, 3, 'Buho-Ojo-min.jpg'),
(3, 3, 'Buho-Patas-min.jpg'),
(4, 3, 'Buho-Pico-min.jpg'),
(5, 3, 'Buho-Plumas-min.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pinturas`
--

CREATE TABLE `pinturas` (
  `ID_Pintura` int(11) NOT NULL,
  `nombre_pintura` varchar(50) NOT NULL,
  `tecnica_pintura` varchar(50) NOT NULL,
  `medida_pintura` varchar(50) NOT NULL,
  `nombre_ImgPintura` varchar(100) NOT NULL,
  `tamanio_ImgPintura` varchar(20) NOT NULL,
  `tipo_ImgPintura` varchar(20) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pinturas`
--

INSERT INTO `pinturas` (`ID_Pintura`, `nombre_pintura`, `tecnica_pintura`, `medida_pintura`, `nombre_ImgPintura`, `tamanio_ImgPintura`, `tipo_ImgPintura`, `fecha`) VALUES
(1, 'Oso hormiguero', 'Oleo', '23 cm x 50 cm', 'Lapa.jpg', '4575442', 'image/jpeg', '2021-06-18'),
(2, 'Pajarillo', 'Acuarella', '50 cm x 60 cm ', 'Pajaro.jpg', '5339539', 'image/jpeg', '2021-06-18'),
(5, 'Garza', '', '', 'Garza.jpg', '3496041', 'image/jpeg', '2021-06-18'),
(6, 'Camaleon', 'Oleo', '35 cm x 50 cm', 'Camaleon.png', '546578', 'image/png', '2021-06-18'),
(7, 'Buho', 'Tinta', '120 cm x 80 cm', 'Buho.jpg', '6248529', 'image/jpeg', '2021-06-18'),
(8, 'Cachirre', 'Óleo sobre lienzo', '90 x 60 cm', 'IMG_7945.jpeg', '3509940', 'image/jpeg', '2021-06-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ponchos`
--

CREATE TABLE `ponchos` (
  `ID_Poncho` int(11) NOT NULL,
  `nombrePoncho` varchar(50) NOT NULL,
  `medidaPoncho` varchar(20) NOT NULL,
  `tecnicaPoncho` varchar(50) NOT NULL,
  `nombre_ImgPoncho` varchar(100) NOT NULL,
  `tamanio_ImgPoncho` varchar(10) NOT NULL,
  `tipo_ImgPoncho` varchar(10) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ponchos`
--

INSERT INTO `ponchos` (`ID_Poncho`, `nombrePoncho`, `medidaPoncho`, `tecnicaPoncho`, `nombre_ImgPoncho`, `tamanio_ImgPoncho`, `tipo_ImgPoncho`, `fecha`) VALUES
(3, 'Poncho de Buho', '102 cm x 89 cm', 'Oleo', 'Buho-min.jpg', '6248529', 'image/jpeg', '2021-06-10'),
(2, 'Poncho de Lapa', '45 cm x 87 cm', 'Pintura al frio', 'Lapa-min.jpg', '4575442', 'image/jpeg', '2021-06-08'),
(6, 'Poncho de Pajaro', 'Acrilico', '100 cm x 100 cm', 'Pajaro-min.jpg', '5339539', 'image/jpeg', '2021-06-13'),
(7, 'Pavorreal_sito', '45 cm x 45 cm', 'Oleo frio', 'Pavoreal-min.jpg', '1277412', 'image/jpeg', '2021-06-29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ultimasobras`
--

CREATE TABLE `ultimasobras` (
  `ID_UltimaObra` int(11) NOT NULL,
  `nombre_UltimaObra` varchar(50) NOT NULL,
  `tecnica_UltimaObra` varchar(50) NOT NULL,
  `tamanio_UltimaObra` varchar(20) NOT NULL,
  `nombre_ImgUltimaObra` varchar(100) NOT NULL,
  `tamanio_ImgUltimaObra` varchar(20) NOT NULL,
  `tipo_ImgUltimaObra` varchar(20) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ultimasobras`
--

INSERT INTO `ultimasobras` (`ID_UltimaObra`, `nombre_UltimaObra`, `tecnica_UltimaObra`, `tamanio_UltimaObra`, `nombre_ImgUltimaObra`, `tamanio_ImgUltimaObra`, `tipo_ImgUltimaObra`, `fecha`) VALUES
(1, 'Pajarito', 'Oleo', '20 cm x 50 cm', 'Pajaro-min.jpg', 'image/jpeg', '1672405', '2021-06-29'),
(2, 'Pavorreal', 'Acrilico', '60 cm x 70 cm', 'Pavoreal-min.jpg', 'image/jpeg', '1277412', '2021-06-29'),
(3, 'Oso hormiguero', 'Pincel frio', '50 cm x 70 cm', 'Lapa-min.jpg', 'image/jpeg', '1433090', '2021-06-29');

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
-- Indices de la tabla `imagenesminiaturas`
--
ALTER TABLE `imagenesminiaturas`
  ADD PRIMARY KEY (`ID_ImagenMiniatura`);

--
-- Indices de la tabla `pinturas`
--
ALTER TABLE `pinturas`
  ADD PRIMARY KEY (`ID_Pintura`);

--
-- Indices de la tabla `ponchos`
--
ALTER TABLE `ponchos`
  ADD PRIMARY KEY (`ID_Poncho`);

--
-- Indices de la tabla `ultimasobras`
--
ALTER TABLE `ultimasobras`
  ADD PRIMARY KEY (`ID_UltimaObra`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artista`
--
ALTER TABLE `artista`
  MODIFY `ID_Artista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `colecciones`
--
ALTER TABLE `colecciones`
  MODIFY `ID_Coleccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `imagenesminiaturas`
--
ALTER TABLE `imagenesminiaturas`
  MODIFY `ID_ImagenMiniatura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `pinturas`
--
ALTER TABLE `pinturas`
  MODIFY `ID_Pintura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `ponchos`
--
ALTER TABLE `ponchos`
  MODIFY `ID_Poncho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ultimasobras`
--
ALTER TABLE `ultimasobras`
  MODIFY `ID_UltimaObra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
