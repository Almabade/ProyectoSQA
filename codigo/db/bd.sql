CREATE TABLE `administrador` (
  `administrador_id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasenia` varchar(100) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `especialidad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`administrador_id`, `usuario`, `contrasenia`, `nombres`, `apellidos`, `especialidad`) VALUES
(1234, 'admin', 'admin', 'Mariana', 'Balceda', 'BD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `alum_id` int(11) NOT NULL,
  `nivel_id` int(11) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`alum_id`, `nivel_id`, `nombres`, `apellidos`) VALUES
(485, 1, 'Paco', 'Salinas'),
(656532, 2, 'hbhbh', 'jbhb'),
(14785421, 1, 'jhjbs', 'jhbjas'),
(15975378, 2, 'Marito', 'Casas'),
(45518645, 1, 'hbb', 'yghbj');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `asignatura_id` int(11) NOT NULL,
  `nivel_id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`asignatura_id`, `nivel_id`, `nombre`) VALUES
(1, 1, 'Matematica'),
(2, 1, 'Comunicacion'),
(3, 1, 'Ingles'),
(4, 1, 'Ciencia,Tecnologia y Ambiente'),
(5, 1, 'Educacion Fisica'),
(6, 2, 'Matematica 2'),
(7, 2, 'Ingles 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `docente_id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasenia` varchar(100) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `asignatura_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `celular` int(11) NOT NULL,
  `especialidad` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`docente_id`, `usuario`, `contrasenia`, `nombres`, `apellidos`, `asignatura_id`, `email`, `celular`, `especialidad`) VALUES
(24785613, 'ROSARIO CANO', '24785613', 'Rosario', 'Cano', 7, 'rosariocano@gmail.com', 978534615, 'Ingles 2'),
(28844275, 'JUAN CARLOS TORRES CANO', '28844275', 'Juan Carlos', 'Torres Cano', 1, 'rfeeneyz_d198v@chyju.com', 958745627, 'Matematica'),
(48963217, 'ROCIO VELTRAN', '48963217', 'Rocio', 'Veltran', 3, 'rociov@gmail.com', 94786213, 'Ingles'),
(74175369, 'PAOLA CANTO', '74175369', 'Paola', 'Canto', 6, 'paolac@gmail.com', 147753951, 'Matematica 2');

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

--
-- Volcado de datos para la tabla `falta_asistencia`
--

INSERT INTO `falta_asistencia` (`id`, `asignatura_id`, `alum_id`, `fecha`, `descripcion`) VALUES
(1, 1, 485, '2023-08-31', 'Inasistencia'),
(2, 1, 45518645, '2023-08-31', 'Inasistencia'),
(3, 1, 485, '2023-09-07', 'Inasistencia'),
(4, 1, 45518645, '2023-09-07', 'Inasistencia'),
(5, 3, 485, '2023-09-09', 'Tardanza'),
(6, 3, 45518645, '2023-09-09', 'Tardanza'),
(7, 6, 15975378, '2023-09-14', 'Inasistencia'),
(8, 3, 485, '2023-09-12', 'Tardanza'),
(9, 3, 45518645, '2023-09-12', 'Tardanza'),
(10, 6, 15975378, '2023-09-04', 'Inasistencia'),
(11, 1, 45518645, '2023-08-30', 'Asistencia'),
(12, 7, 656532, '2023-10-31', 'Asistencia'),
(13, 7, 15975378, '2023-10-31', 'Asistencia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE `nivel` (
  `nivel_id` int(11) NOT NULL,
  `nivel` varchar(10) NOT NULL,
  `año` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `nivel`
--

INSERT INTO `nivel` (`nivel_id`, `nivel`, `año`) VALUES
(1, 'secundaria', 1),
(2, 'secundaria', 2);

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

--
-- Volcado de datos para la tabla `nota`
--

INSERT INTO `nota` (`nota_id`, `asignatura_id`, `alum_id`, `trimestre`, `nota`) VALUES
(94, 3, 485, 1, 10),
(95, 3, 485, 2, 15),
(96, 3, 485, 3, 11),
(97, 3, 45518645, 1, 6),
(98, 3, 45518645, 2, 10),
(99, 3, 45518645, 3, 9),
(100, 6, 15975378, 1, 9),
(101, 6, 15975378, 2, 15),
(102, 6, 15975378, 3, 11),
(103, 1, 45518645, 1, 11),
(104, 1, 45518645, 2, 6),
(105, 1, 45518645, 3, 16),
(121, 1, 656532, 1, 0),
(122, 1, 656532, 2, 0),
(123, 1, 656532, 3, 0),
(124, 2, 656532, 1, 0),
(125, 2, 656532, 2, 0),
(126, 2, 656532, 3, 0),
(127, 3, 656532, 1, 0),
(128, 3, 656532, 2, 0),
(129, 3, 656532, 3, 0),
(130, 4, 656532, 1, 0),
(131, 4, 656532, 2, 0),
(132, 4, 656532, 3, 0),
(133, 5, 656532, 1, 0),
(134, 5, 656532, 2, 0),
(135, 5, 656532, 3, 0),
(226, 1, 14785421, 1, 0),
(227, 1, 14785421, 2, 0),
(228, 1, 14785421, 3, 0),
(229, 2, 14785421, 1, 0),
(230, 2, 14785421, 2, 0),
(231, 2, 14785421, 3, 0),
(232, 3, 14785421, 1, 0),
(233, 3, 14785421, 2, 0),
(234, 3, 14785421, 3, 0),
(235, 4, 14785421, 1, 0),
(236, 4, 14785421, 2, 0),
(237, 4, 14785421, 3, 0),
(238, 5, 14785421, 1, 0),
(239, 5, 14785421, 2, 0),
(240, 5, 14785421, 3, 0),
(241, 7, 15975378, 1, 13),
(242, 7, 15975378, 2, 7),
(243, 7, 15975378, 3, 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `observación`
--

CREATE TABLE `observación` (
  `obs_id` int(11) NOT NULL,
  `id_alum` int(11) NOT NULL,
  `id_asig` int(11) NOT NULL,
  `descripción` varchar(255) NOT NULL,
  `fecha_observacion` date NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `observación`
--

INSERT INTO `observación` (`obs_id`, `id_alum`, `id_asig`, `descripción`, `fecha_observacion`, `estado`) VALUES
(1, 485, 1, 'No asiste a clase', '2023-08-31', 0),
(2, 45518645, 1, 'No asiste a clase', '2023-08-31', 1),
(3, 485, 1, 'El alumno no colabora en clase', '2023-09-09', 0),
(4, 485, 3, 'Llego tarde a clases y no hizo tarea', '2023-09-09', 0),
(5, 15975378, 7, 'Conversa mucho', '2023-10-12', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padre`
--

CREATE TABLE `padre` (
  `padre_id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasenia` varchar(100) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `alum_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `celular` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `padre`
--

INSERT INTO `padre` (`padre_id`, `usuario`, `contrasenia`, `nombres`, `apellidos`, `alum_id`, `email`, `celular`) VALUES
(5322354, 'fgvhhv', '5322354', 'fgvhhv', 'ghbb', 45518645, 'gbhsj@gmail.com', 454533336),
(15975345, 'Mario', '15975345', 'Mario', 'Casas', 15975378, 'marioc@gmail.com', 789486123),
(15975642, 'hbas', '15975642', 'hbas', 'yhbas', 14785421, 'bhas@jhjban.fh', 998546214);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `nota`
--
ALTER TABLE `nota`
  MODIFY `nota_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT de la tabla `observación`
--
ALTER TABLE `observación`
  MODIFY `obs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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