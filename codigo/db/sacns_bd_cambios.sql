-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2021 a las 23:10:28
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sacns_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `administrador_id` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `contrasenia` varchar(100) COLLATE utf16_spanish_ci NOT NULL,
  `nombres` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `especialidad` varchar(100) COLLATE utf16_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`administrador_id`, `usuario`, `contrasenia`, `nombres`, `apellidos`, `especialidad`) VALUES
(1234, 'admin', 'admin', 'Mario', 'Huapaya', 'Maestro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `alum_id` int(11) NOT NULL,
  `nivel_id` int(11) NOT NULL,
  `nombres` varchar(20) COLLATE utf16_spanish_ci NOT NULL,
  `apellidos` varchar(20) COLLATE utf16_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `asignatura_id` int(11) NOT NULL,
  `nivel_id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf16_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`asignatura_id`, `nivel_id`, `nombre`) VALUES
(1, 1, 'Matematica'),
(2, 1, 'Comunicacion'),
(3, 1, 'Ingles'),
(4, 1, 'Ciencia,Tecnologia y Ambiente'),
(5, 1, 'Educacion Fisica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `docente_id` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `contrasenia` varchar(100) COLLATE utf16_spanish_ci NOT NULL,
  `nombres` varchar(20) COLLATE utf16_spanish_ci NOT NULL,
  `apellidos` varchar(20) COLLATE utf16_spanish_ci NOT NULL,
  `asignatura_id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf16_spanish_ci NOT NULL,
  `celular` int(11) NOT NULL,
  `especialidad` varchar(200) COLLATE utf16_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `falta_asistencia`
--

CREATE TABLE `falta_asistencia` (
  `id` int(11) NOT NULL,
  `asignatura_id` int(11) NOT NULL,
  `alum_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE `nivel` (
  `nivel_id` int(11) NOT NULL,
  `nivel` varchar(10) COLLATE utf16_spanish_ci NOT NULL,
  `año` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `nivel`
--

INSERT INTO `nivel` (`nivel_id`, `nivel`, `año`) VALUES
(1, 'secundaria', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE `nota` (
  `nota_id` int(11) NOT NULL,
  `asignatura_id` int(11) NOT NULL,
  `alum_id` int(11) NOT NULL,
  `trimestre` int(11) NOT NULL,
  `nota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `observación`
--

CREATE TABLE `observación` (
  `obs_id` int(11) NOT NULL,
  `id_alum` int(11) NOT NULL,
  `id_asig` int(11) NOT NULL,
  `descripción` varchar(255) COLLATE utf16_spanish_ci NOT NULL,
  `fecha_observacion` date NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padre`
--

CREATE TABLE `padre` (
  `padre_id` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `contrasenia` varchar(100) COLLATE utf16_spanish_ci NOT NULL,
  `nombres` varchar(20) COLLATE utf16_spanish_ci NOT NULL,
  `apellidos` varchar(20) COLLATE utf16_spanish_ci NOT NULL,
  `alum_id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf16_spanish_ci NOT NULL,
  `celular` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`administrador_id`),
  ADD UNIQUE KEY `usuario_2` (`usuario`),
  ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`alum_id`),
  ADD KEY `FK_NIVEL` (`nivel_id`);

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`asignatura_id`),
  ADD KEY `FK_NIVEL` (`nivel_id`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`docente_id`),
  ADD UNIQUE KEY `usuario_2` (`usuario`),
  ADD KEY `FK_ASIGNATURA` (`asignatura_id`),
  ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `falta_asistencia`
--
ALTER TABLE `falta_asistencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asignatura_id` (`asignatura_id`),
  ADD KEY `alum_id` (`alum_id`);

--
-- Indices de la tabla `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`nivel_id`);

--
-- Indices de la tabla `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`nota_id`),
  ADD KEY `FK_ASIGNATURA` (`asignatura_id`),
  ADD KEY `FK_ALUMN0` (`alum_id`);

--
-- Indices de la tabla `observación`
--
ALTER TABLE `observación`
  ADD PRIMARY KEY (`obs_id`),
  ADD KEY `id_alum` (`id_alum`),
  ADD KEY `id_asig` (`id_asig`);

--
-- Indices de la tabla `padre`
--
ALTER TABLE `padre`
  ADD PRIMARY KEY (`padre_id`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD KEY `alum_id` (`alum_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `administrador_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1235;

--
-- AUTO_INCREMENT de la tabla `falta_asistencia`
--
ALTER TABLE `falta_asistencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nota`
--
ALTER TABLE `nota`
  MODIFY `nota_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de la tabla `observación`
--
ALTER TABLE `observación`
  MODIFY `obs_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_2` FOREIGN KEY (`nivel_id`) REFERENCES `nivel` (`nivel_id`);

--
-- Filtros para la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD CONSTRAINT `asignatura_ibfk_1` FOREIGN KEY (`nivel_id`) REFERENCES `nivel` (`nivel_id`);

--
-- Filtros para la tabla `docente`
--
ALTER TABLE `docente`
  ADD CONSTRAINT `docente_ibfk_1` FOREIGN KEY (`asignatura_id`) REFERENCES `asignatura` (`asignatura_id`);

--
-- Filtros para la tabla `falta_asistencia`
--
ALTER TABLE `falta_asistencia`
  ADD CONSTRAINT `falta_asistencia_ibfk_1` FOREIGN KEY (`alum_id`) REFERENCES `alumno` (`alum_id`),
  ADD CONSTRAINT `falta_asistencia_ibfk_2` FOREIGN KEY (`asignatura_id`) REFERENCES `asignatura` (`asignatura_id`);

--
-- Filtros para la tabla `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `nota_ibfk_1` FOREIGN KEY (`asignatura_id`) REFERENCES `asignatura` (`asignatura_id`),
  ADD CONSTRAINT `nota_ibfk_2` FOREIGN KEY (`alum_id`) REFERENCES `alumno` (`alum_id`);

--
-- Filtros para la tabla `observación`
--
ALTER TABLE `observación`
  ADD CONSTRAINT `observación_ibfk_1` FOREIGN KEY (`id_alum`) REFERENCES `alumno` (`alum_id`),
  ADD CONSTRAINT `observación_ibfk_2` FOREIGN KEY (`id_asig`) REFERENCES `asignatura` (`asignatura_id`);

--
-- Filtros para la tabla `padre`
--
ALTER TABLE `padre`
  ADD CONSTRAINT `padre_ibfk_1` FOREIGN KEY (`alum_id`) REFERENCES `alumno` (`alum_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;