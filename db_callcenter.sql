-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-07-2023 a las 18:37:13
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_callcenter`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cancelacion_ordentrabajo`
--

CREATE TABLE `cancelacion_ordentrabajo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `justification` text NOT NULL,
  `fecha` date NOT NULL,
  `id_orden_trabajo` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `combos_promo`
--

CREATE TABLE `combos_promo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) NOT NULL,
  `precio` int(11) NOT NULL,
  `id_plan_internet` bigint(20) UNSIGNED NOT NULL,
  `id_plan_tvcable` bigint(20) UNSIGNED NOT NULL,
  `id_plan_llamada` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE `contrato` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `estado` varchar(191) NOT NULL,
  `nombre_facturacion` varchar(191) NOT NULL,
  `nit` varchar(191) NOT NULL,
  `id_servicio_contratado` bigint(20) UNSIGNED DEFAULT NULL,
  `id_usuario` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `monto` int(11) NOT NULL,
  `id_servicio_contratado` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `interaccion`
--

CREATE TABLE `interaccion` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` text NOT NULL,
  `id_tipo_servicio_tecnico` bigint(20) UNSIGNED DEFAULT NULL,
  `id_usuario` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `interaccion`
--

INSERT INTO `interaccion` (`id`, `fecha`, `descripcion`, `id_tipo_servicio_tecnico`, `id_usuario`, `created_at`, `updated_at`) VALUES
(1, '2023-07-19', 'Pidio Soporte Tecnico', 2, 1, '2023-07-19 23:15:00', '2023-07-19 23:15:00'),
(2, '2023-07-19', 'Pidio Soporte Tecnico', 1, 1, '2023-07-19 23:34:36', '2023-07-19 23:34:36'),
(3, '2023-07-19', 'Pidio Soporte Tecnico', 1, 2, '2023-07-19 23:35:13', '2023-07-19 23:35:13'),
(4, '2023-07-19', 'Pidio Soporte Tecnico', 2, 1, '2023-07-19 23:46:55', '2023-07-19 23:46:55'),
(5, '2023-07-19', 'Solicito Informacion sobre los paquetes de internet', 3, 1, '2023-07-19 23:47:43', '2023-07-19 23:47:43'),
(6, '2023-07-20', 'Pidio Soporte Tecnico', 2, 1, '2023-07-20 16:06:12', '2023-07-20 16:06:12'),
(7, '2023-07-21', 'Solicito Informacion sobre los paquetes de internet', 3, 2, '2023-07-21 14:10:01', '2023-07-21 14:10:01'),
(8, '2023-07-21', 'Solicito Informacion sobre los paquetes de internet', 3, 2, '2023-07-21 14:19:17', '2023-07-21 14:19:17'),
(9, '2023-07-21', 'Solicito Informacion sobre los paquetes de internet', 3, 2, '2023-07-21 14:19:50', '2023-07-21 14:19:50'),
(10, '2023-07-21', 'Solicito Informacion sobre los paquetes de internet', 3, 2, '2023-07-21 14:25:23', '2023-07-21 14:25:23'),
(11, '2023-07-21', 'Solicito Informacion sobre los paquetes de internet', 3, 2, '2023-07-21 14:28:38', '2023-07-21 14:28:38'),
(12, '2023-07-21', 'Solicito Informacion sobre los paquetes de internet', 3, 2, '2023-07-21 14:30:19', '2023-07-21 14:30:19'),
(13, '2023-07-21', 'Solicito Informacion sobre los paquetes de internet', 3, 2, '2023-07-21 15:09:31', '2023-07-21 15:09:31'),
(14, '2023-07-21', 'Solicito Informacion sobre los paquetes de internet', 3, 2, '2023-07-21 15:09:45', '2023-07-21 15:09:45'),
(15, '2023-07-21', 'Solicito Informacion sobre los paquetes de internet', 3, 2, '2023-07-21 15:37:58', '2023-07-21 15:37:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_05_154248_planinternets', 1),
(6, '2023_07_05_190852_plan_tv_cables', 1),
(7, '2023_07_05_193725_combo_tv_internet_telef', 2),
(8, '2023_07_05_193750_plan_llamadas', 2),
(9, '2023_07_05_194436_tecnicos', 3),
(10, '2023_07_05_194831_tipo_servicios_tecnicos', 4),
(11, '2023_07_12_174641_combos_promo', 5),
(12, '2023_07_12_180315_servicio_contratado', 6),
(13, '2023_07_12_181024_factura', 7),
(14, '2023_07_12_181525_contrato', 8),
(15, '2023_07_12_182135_interaccion', 9),
(16, '2023_07_12_182654_ordentrabajo', 10),
(17, '2023_07_12_183147_cancelacion_ordentrabajo', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordentrabajo`
--

CREATE TABLE `ordentrabajo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha_visita` date NOT NULL,
  `problema` text NOT NULL,
  `resultado` text NOT NULL,
  `estado` varchar(191) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha_hora_visita_llegada` datetime NOT NULL,
  `fecha_hora_visita_salida` datetime NOT NULL,
  `id_tecnico` bigint(20) UNSIGNED DEFAULT NULL,
  `id_interaccion` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planinternets`
--

CREATE TABLE `planinternets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `velocidad` varchar(10) NOT NULL,
  `precio` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `planinternets`
--

INSERT INTO `planinternets` (`id`, `nombre`, `velocidad`, `precio`, `created_at`, `updated_at`) VALUES
(1, 'Plan wifi hogar esencial', '35 mb', 169, '2023-07-10 17:43:30', '2023-07-21 15:56:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_llamadas`
--

CREATE TABLE `plan_llamadas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `minutos` varchar(50) NOT NULL,
  `credito` varchar(10) NOT NULL,
  `cantidadmb` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `plan_llamadas`
--

INSERT INTO `plan_llamadas` (`id`, `minutos`, `credito`, `cantidadmb`, `precio`, `created_at`, `updated_at`) VALUES
(1, '200', '100', 4000, 160, '2023-07-10 17:46:51', '2023-07-10 17:46:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_tv_cables`
--

CREATE TABLE `plan_tv_cables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `plan_tv_cables`
--

INSERT INTO `plan_tv_cables` (`id`, `nombre`, `precio`, `created_at`, `updated_at`) VALUES
(1, 'Plan tv esencial', 229, '2023-07-10 17:44:00', '2023-07-21 15:56:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_contratado`
--

CREATE TABLE `servicio_contratado` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `estadoservicio` varchar(191) NOT NULL,
  `observacion` text NOT NULL,
  `id_plan_internet` bigint(20) UNSIGNED DEFAULT NULL,
  `id_plan_tvcable` bigint(20) UNSIGNED DEFAULT NULL,
  `id_plan_llamada` bigint(20) UNSIGNED DEFAULT NULL,
  `id_combo_promo` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnicos`
--

CREATE TABLE `tecnicos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `especialidad` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tecnicos`
--

INSERT INTO `tecnicos` (`id`, `nombre`, `especialidad`, `created_at`, `updated_at`) VALUES
(1, 'Carlos Lopez', 'Instalación domiciliaria', NULL, '2023-07-10 17:49:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_servicios_tecnicos`
--

CREATE TABLE `tipo_servicios_tecnicos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_servicio` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `estado` char(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_servicios_tecnicos`
--

INSERT INTO `tipo_servicios_tecnicos` (`id`, `nombre_servicio`, `descripcion`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Instalacion', 'Servicio de instalacion domiciliaria', '1', '2023-07-05 19:53:24', '2023-07-05 19:53:24'),
(2, 'Revision Equipos', 'Se enviara un trabajador para revisar las instalaciones domiciliarias y evaluar la calidad del servicios', '1', '2023-07-05 20:02:17', '2023-07-05 20:02:17'),
(3, 'Solicitar Informacion', 'El asistente virtual brindara información sobre los servicios que ofrece la telefonía.', '1', '2023-07-19 23:40:18', '2023-07-19 23:40:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cedula` varchar(8) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `estado` char(1) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `cedula`, `direccion`, `telefono`, `tipo`, `estado`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pablo Bustos', '53632111', 'Barrio Equipetrol', '60989453', 'usuario', 'a', 'pp', 'Barrio Equipetrol', NULL, '$2y$10$ZsXSGQbWeDL1pj.meBO96OPsGLh4tPk9yoX8utAWrYF0jjYLzAZ1K', NULL, '2023-07-11 11:18:09', '2023-07-11 11:18:09'),
(2, 'Ramiro Belzu', '7777777', 'Barrio Guapuru', '63636363', 'admin', 'a', 'admin', 'Barrio Guapuru', NULL, '$2y$10$wZSzHrdUoIwmtzbRE6kH/.iW584hzM9Je31sKkjatkeTDb9JehW9.', NULL, '2023-07-11 11:32:40', '2023-07-11 11:32:40');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cancelacion_ordentrabajo`
--
ALTER TABLE `cancelacion_ordentrabajo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cancelacion_ordentrabajo_id_orden_trabajo_foreign` (`id_orden_trabajo`);

--
-- Indices de la tabla `combos_promo`
--
ALTER TABLE `combos_promo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `combos_promo_id_plan_internet_foreign` (`id_plan_internet`),
  ADD KEY `combos_promo_id_plan_tvcable_foreign` (`id_plan_tvcable`),
  ADD KEY `combos_promo_id_plan_llamada_foreign` (`id_plan_llamada`);

--
-- Indices de la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contrato_id_servicio_contratado_foreign` (`id_servicio_contratado`),
  ADD KEY `contrato_id_usuario_foreign` (`id_usuario`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `factura_id_servicio_contratado_foreign` (`id_servicio_contratado`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `interaccion`
--
ALTER TABLE `interaccion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `interaccion_id_tipo_servicio_tecnico_foreign` (`id_tipo_servicio_tecnico`),
  ADD KEY `interaccion_id_usuario_foreign` (`id_usuario`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ordentrabajo`
--
ALTER TABLE `ordentrabajo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ordentrabajo_id_tecnico_foreign` (`id_tecnico`),
  ADD KEY `ordentrabajo_id_interaccion_foreign` (`id_interaccion`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `planinternets`
--
ALTER TABLE `planinternets`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `plan_llamadas`
--
ALTER TABLE `plan_llamadas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `plan_tv_cables`
--
ALTER TABLE `plan_tv_cables`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicio_contratado`
--
ALTER TABLE `servicio_contratado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `servicio_contratado_id_plan_internet_foreign` (`id_plan_internet`),
  ADD KEY `servicio_contratado_id_plan_tvcable_foreign` (`id_plan_tvcable`),
  ADD KEY `servicio_contratado_id_plan_llamada_foreign` (`id_plan_llamada`),
  ADD KEY `servicio_contratado_id_combo_promo_foreign` (`id_combo_promo`);

--
-- Indices de la tabla `tecnicos`
--
ALTER TABLE `tecnicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_servicios_tecnicos`
--
ALTER TABLE `tipo_servicios_tecnicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_cedula_unique` (`cedula`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cancelacion_ordentrabajo`
--
ALTER TABLE `cancelacion_ordentrabajo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `combos_promo`
--
ALTER TABLE `combos_promo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contrato`
--
ALTER TABLE `contrato`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `interaccion`
--
ALTER TABLE `interaccion`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `ordentrabajo`
--
ALTER TABLE `ordentrabajo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `planinternets`
--
ALTER TABLE `planinternets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `plan_llamadas`
--
ALTER TABLE `plan_llamadas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `plan_tv_cables`
--
ALTER TABLE `plan_tv_cables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `servicio_contratado`
--
ALTER TABLE `servicio_contratado`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tecnicos`
--
ALTER TABLE `tecnicos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipo_servicios_tecnicos`
--
ALTER TABLE `tipo_servicios_tecnicos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cancelacion_ordentrabajo`
--
ALTER TABLE `cancelacion_ordentrabajo`
  ADD CONSTRAINT `cancelacion_ordentrabajo_id_orden_trabajo_foreign` FOREIGN KEY (`id_orden_trabajo`) REFERENCES `ordentrabajo` (`id`);

--
-- Filtros para la tabla `combos_promo`
--
ALTER TABLE `combos_promo`
  ADD CONSTRAINT `combos_promo_id_plan_internet_foreign` FOREIGN KEY (`id_plan_internet`) REFERENCES `planinternets` (`id`),
  ADD CONSTRAINT `combos_promo_id_plan_llamada_foreign` FOREIGN KEY (`id_plan_llamada`) REFERENCES `plan_llamadas` (`id`),
  ADD CONSTRAINT `combos_promo_id_plan_tvcable_foreign` FOREIGN KEY (`id_plan_tvcable`) REFERENCES `plan_tv_cables` (`id`);

--
-- Filtros para la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `contrato_id_servicio_contratado_foreign` FOREIGN KEY (`id_servicio_contratado`) REFERENCES `servicio_contratado` (`id`),
  ADD CONSTRAINT `contrato_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_id_servicio_contratado_foreign` FOREIGN KEY (`id_servicio_contratado`) REFERENCES `servicio_contratado` (`id`);

--
-- Filtros para la tabla `interaccion`
--
ALTER TABLE `interaccion`
  ADD CONSTRAINT `interaccion_id_tipo_servicio_tecnico_foreign` FOREIGN KEY (`id_tipo_servicio_tecnico`) REFERENCES `tipo_servicios_tecnicos` (`id`),
  ADD CONSTRAINT `interaccion_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `ordentrabajo`
--
ALTER TABLE `ordentrabajo`
  ADD CONSTRAINT `ordentrabajo_id_interaccion_foreign` FOREIGN KEY (`id_interaccion`) REFERENCES `interaccion` (`id`),
  ADD CONSTRAINT `ordentrabajo_id_tecnico_foreign` FOREIGN KEY (`id_tecnico`) REFERENCES `tecnicos` (`id`);

--
-- Filtros para la tabla `servicio_contratado`
--
ALTER TABLE `servicio_contratado`
  ADD CONSTRAINT `servicio_contratado_id_combo_promo_foreign` FOREIGN KEY (`id_combo_promo`) REFERENCES `combos_promo` (`id`),
  ADD CONSTRAINT `servicio_contratado_id_plan_internet_foreign` FOREIGN KEY (`id_plan_internet`) REFERENCES `planinternets` (`id`),
  ADD CONSTRAINT `servicio_contratado_id_plan_llamada_foreign` FOREIGN KEY (`id_plan_llamada`) REFERENCES `plan_llamadas` (`id`),
  ADD CONSTRAINT `servicio_contratado_id_plan_tvcable_foreign` FOREIGN KEY (`id_plan_tvcable`) REFERENCES `plan_tv_cables` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
