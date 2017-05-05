-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-05-2017 a las 19:05:21
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actualiza`
--

CREATE TABLE `actualiza` (
  `id` int(11) UNSIGNED NOT NULL,
  `platillo_id` int(11) NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administra`
--

CREATE TABLE `administra` (
  `id` int(11) UNSIGNED NOT NULL,
  `producto_id` int(11) NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_ordena_orden`
--

CREATE TABLE `cliente_ordena_orden` (
  `id` int(11) UNSIGNED NOT NULL,
  `cliente_id` int(11) UNSIGNED NOT NULL,
  `orden_numero` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_paga_ticket`
--

CREATE TABLE `cliente_paga_ticket` (
  `id` int(11) UNSIGNED NOT NULL,
  `cliente_id` int(11) UNSIGNED NOT NULL,
  `folio_ticket` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_realiza_reservacion`
--

CREATE TABLE `cliente_realiza_reservacion` (
  `id` int(11) UNSIGNED NOT NULL,
  `cliente_id` int(11) UNSIGNED NOT NULL,
  `reservacion_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'Usuario', 'General User'),
(3, 'Recepcionista', 'asigna mesas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesa`
--

CREATE TABLE `mesa` (
  `numero` int(11) NOT NULL,
  `numero_sillas` int(11) NOT NULL,
  `disponibilidad` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mesa`
--

INSERT INTO `mesa` (`numero`, `numero_sillas`, `disponibilidad`) VALUES
(1, 5, 'SI'),
(3, 4, 'SI'),
(4, 4, 'SI'),
(5, 5, 'SI'),
(6, 6, 'SI'),
(7, 6, 'SI'),
(8, 4, 'SI'),
(9, 5, 'SI'),
(10, 5, 'SI'),
(11, 2, 'SI'),
(12, 2, 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `numero_orden` int(11) UNSIGNED NOT NULL,
  `hora` time NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL,
  `platillo_tipo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_tiene_platillo`
--

CREATE TABLE `orden_tiene_platillo` (
  `id` int(11) UNSIGNED NOT NULL,
  `numero_orden` int(11) UNSIGNED NOT NULL,
  `platillo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_tiene_ticket`
--

CREATE TABLE `orden_tiene_ticket` (
  `id` int(11) UNSIGNED NOT NULL,
  `numero_orden` int(11) UNSIGNED NOT NULL,
  `folio_ticket` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platillo`
--

CREATE TABLE `platillo` (
  `id` int(11) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `precio` float NOT NULL,
  `ingredientes` varchar(150) NOT NULL,
  `tiempo_preparacion` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `platillo`
--

INSERT INTO `platillo` (`id`, `tipo`, `nombre`, `precio`, `ingredientes`, `tiempo_preparacion`) VALUES
(1, 'Ensalada', 'Ensalada de Res', 50.5, 'Lechuga, carne de res', '25:00:00'),
(2, 'Carne', 'Arrachera con ensalada', 200, 'Carne con verduras', '00:40:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `num_pieza` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provee`
--

CREATE TABLE `provee` (
  `id` int(11) UNSIGNED NOT NULL,
  `producto_id` int(11) NOT NULL,
  `proveedor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `numero_telefonico` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrar_orden`
--

CREATE TABLE `registrar_orden` (
  `id` int(11) UNSIGNED NOT NULL,
  `numero_orden` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservacion`
--

CREATE TABLE `reservacion` (
  `id` int(11) UNSIGNED NOT NULL,
  `cliente` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `num_persona` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reservacion`
--

INSERT INTO `reservacion` (`id`, `cliente`, `fecha`, `hora`, `num_persona`) VALUES
(1, 'Angel', '2017-04-27', '12:45:00', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket`
--

CREATE TABLE `ticket` (
  `folio` int(11) UNSIGNED NOT NULL,
  `tipo_pago` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `codigo_postal` int(10) DEFAULT NULL,
  `genero` varchar(10) DEFAULT NULL,
  `asistencia` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `direccion`, `codigo_postal`, `genero`, `asistencia`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, 'XE8XQwdTxNNKwmA4jBUD5.', 1268889823, 1493859145, 1, 'Admin', 'istrator', 'ADMIN', '0', NULL, NULL, NULL, NULL),
(2, '::1', 'paco@gmail.com', '$2y$08$SQhvSq8iHkf101WAJeVGEuxf4Lt/IKE7edqqGAf/0eqXOPVQt9hLy', NULL, 'paco@gmail.com', NULL, NULL, NULL, NULL, 1493258579, 1494001873, 1, 'Paco', 'Galicia', 'Mr Chilon', '2281456786', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(6, 2, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actualiza`
--
ALTER TABLE `actualiza`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_actualiza_groups` (`group_id`),
  ADD KEY `fk_actualiza_platillo` (`platillo_id`);

--
-- Indices de la tabla `administra`
--
ALTER TABLE `administra`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `groups_producto` (`group_id`,`producto_id`),
  ADD KEY `fk_administra_groups` (`group_id`),
  ADD KEY `fk_administra_producto` (`producto_id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente_ordena_orden`
--
ALTER TABLE `cliente_ordena_orden`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cliente_orden` (`cliente_id`,`orden_numero`),
  ADD KEY `fk_ordena_cliente` (`cliente_id`),
  ADD KEY `fk_ordena_orden` (`orden_numero`);

--
-- Indices de la tabla `cliente_paga_ticket`
--
ALTER TABLE `cliente_paga_ticket`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cliente_paga` (`cliente_id`,`folio_ticket`),
  ADD KEY `fk_paga_cliente` (`cliente_id`),
  ADD KEY `fk_paga_ticket` (`folio_ticket`);

--
-- Indices de la tabla `cliente_realiza_reservacion`
--
ALTER TABLE `cliente_realiza_reservacion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cliente_realiza_reservacion` (`cliente_id`,`reservacion_id`),
  ADD KEY `fk_cliente` (`cliente_id`),
  ADD KEY `fk_reservacion` (`reservacion_id`);

--
-- Indices de la tabla `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`numero`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`numero_orden`);

--
-- Indices de la tabla `orden_tiene_platillo`
--
ALTER TABLE `orden_tiene_platillo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_orden` (`numero_orden`),
  ADD KEY `fk_platillo` (`platillo_id`);

--
-- Indices de la tabla `orden_tiene_ticket`
--
ALTER TABLE `orden_tiene_ticket`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orden_tiene_ticket` (`numero_orden`,`folio_ticket`),
  ADD KEY `fk_tiene_orden` (`numero_orden`),
  ADD KEY `fk_tiene_folio` (`folio_ticket`);

--
-- Indices de la tabla `platillo`
--
ALTER TABLE `platillo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `provee`
--
ALTER TABLE `provee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `producto_proveedor` (`producto_id`,`proveedor_id`),
  ADD KEY `fk_provee_producto` (`producto_id`),
  ADD KEY `fk_provee_proveedor` (`proveedor_id`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registrar_orden`
--
ALTER TABLE `registrar_orden`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `registrar_orden` (`numero_orden`,`group_id`),
  ADD KEY `fk_registra_groups` (`group_id`),
  ADD KEY `fk_registra_orden` (`numero_orden`);

--
-- Indices de la tabla `reservacion`
--
ALTER TABLE `reservacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`folio`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administra`
--
ALTER TABLE `administra`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cliente_ordena_orden`
--
ALTER TABLE `cliente_ordena_orden`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cliente_paga_ticket`
--
ALTER TABLE `cliente_paga_ticket`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cliente_realiza_reservacion`
--
ALTER TABLE `cliente_realiza_reservacion`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mesa`
--
ALTER TABLE `mesa`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `numero_orden` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `orden_tiene_ticket`
--
ALTER TABLE `orden_tiene_ticket`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `platillo`
--
ALTER TABLE `platillo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `provee`
--
ALTER TABLE `provee`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `registrar_orden`
--
ALTER TABLE `registrar_orden`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `reservacion`
--
ALTER TABLE `reservacion`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `ticket`
--
ALTER TABLE `ticket`
  MODIFY `folio` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actualiza`
--
ALTER TABLE `actualiza`
  ADD CONSTRAINT `fk_actualiza_groups` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_actualiza_platillo` FOREIGN KEY (`platillo_id`) REFERENCES `platillo` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `administra`
--
ALTER TABLE `administra`
  ADD CONSTRAINT `fk_administra_groups` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_administra_producto` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cliente_ordena_orden`
--
ALTER TABLE `cliente_ordena_orden`
  ADD CONSTRAINT `fk_ordena_cliente` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ordena_orden` FOREIGN KEY (`orden_numero`) REFERENCES `orden` (`numero_orden`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cliente_paga_ticket`
--
ALTER TABLE `cliente_paga_ticket`
  ADD CONSTRAINT `fk_paga_cliente` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_paga_ticket` FOREIGN KEY (`folio_ticket`) REFERENCES `ticket` (`folio`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cliente_realiza_reservacion`
--
ALTER TABLE `cliente_realiza_reservacion`
  ADD CONSTRAINT `fk_cliente` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reservacion` FOREIGN KEY (`reservacion_id`) REFERENCES `reservacion` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `orden_tiene_platillo`
--
ALTER TABLE `orden_tiene_platillo`
  ADD CONSTRAINT `fk_orden` FOREIGN KEY (`numero_orden`) REFERENCES `orden` (`numero_orden`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_platillo` FOREIGN KEY (`platillo_id`) REFERENCES `platillo` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `orden_tiene_ticket`
--
ALTER TABLE `orden_tiene_ticket`
  ADD CONSTRAINT `fk_tien_folio` FOREIGN KEY (`folio_ticket`) REFERENCES `ticket` (`folio`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tien_orden` FOREIGN KEY (`numero_orden`) REFERENCES `orden` (`numero_orden`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `registrar_orden`
--
ALTER TABLE `registrar_orden`
  ADD CONSTRAINT `fk_registar_groups` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_registrar_orden` FOREIGN KEY (`numero_orden`) REFERENCES `orden` (`numero_orden`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
