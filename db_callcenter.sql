-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-12-2023 a las 01:26:53
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
-- Estructura de tabla para la tabla `chat`
--

CREATE TABLE `chat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emisor` text NOT NULL,
  `mensaje` text NOT NULL,
  `fecha` datetime NOT NULL,
  `porcentaje` double(8,2) NOT NULL,
  `id_interaccion` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `chat`
--

INSERT INTO `chat` (`id`, `emisor`, `mensaje`, `fecha`, `porcentaje`, `id_interaccion`, `created_at`, `updated_at`) VALUES
(1, 'Pablo Bustos', 'que planes o promociones tiene para ofrecerme', '2023-12-13 15:38:20', 0.70, 1, '2023-12-13 19:38:20', '2023-12-13 19:38:20'),
(2, 'Asistente-Virtual', '¿Qué tipo de servicio le interesaría?', '2023-12-13 15:38:20', 0.00, 1, '2023-12-13 19:38:20', '2023-12-13 19:38:20'),
(3, 'Pablo Bustos', 'su servicio de internet', '2023-12-13 15:38:29', 0.70, 1, '2023-12-13 19:38:29', '2023-12-13 19:38:29'),
(4, 'Asistente-Virtual', 'Genial!, contamos con los siguientes planes de internet:', '2023-12-13 15:38:29', 0.00, 1, '2023-12-13 19:38:29', '2023-12-13 19:38:29'),
(5, 'Pablo Bustos', 'el plan estandar', '2023-12-13 15:38:38', 0.55, 1, '2023-12-13 19:38:38', '2023-12-13 19:38:38'),
(6, 'Asistente-Virtual', 'Estos son los datos que tenemos registrados de tu persona.', '2023-12-13 15:38:38', 0.00, 1, '2023-12-13 19:38:38', '2023-12-13 19:38:38'),
(7, 'Asistente-Virtual', 'Estos son los datos que tenemos registrados de tu persona.', '2023-12-13 15:38:38', 0.00, 1, '2023-12-13 19:38:38', '2023-12-13 19:38:38'),
(8, 'Pablo Bustos', 'el plan estandar', '2023-12-13 15:42:39', 0.55, 1, '2023-12-13 19:42:39', '2023-12-13 19:42:39'),
(9, 'Asistente-Virtual', 'Estos son los datos que tenemos registrados de tu persona.', '2023-12-13 15:42:39', 0.00, 1, '2023-12-13 19:42:39', '2023-12-13 19:42:39'),
(10, 'Asistente-Virtual', 'Estos son los datos que tenemos registrados de tu persona.', '2023-12-13 15:42:39', 0.00, 1, '2023-12-13 19:42:39', '2023-12-13 19:42:39'),
(11, 'Pablo Bustos', 'que planes o promociones tiene para ofrecerme', '2023-12-13 15:56:18', 0.70, 2, '2023-12-13 19:56:18', '2023-12-13 19:56:18'),
(12, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-13 15:56:18', 0.00, 2, '2023-12-13 19:56:18', '2023-12-13 19:56:18'),
(13, 'Pablo Bustos', 'de su servicio de internet para mi casa', '2023-12-13 15:56:27', 0.75, 2, '2023-12-13 19:56:27', '2023-12-13 19:56:27'),
(14, 'Asistente-Virtual', 'Estos planes de Internet, tenemos para ti:', '2023-12-13 15:56:27', 0.00, 2, '2023-12-13 19:56:27', '2023-12-13 19:56:27'),
(15, 'Pablo Bustos', 'el plan estandar', '2023-12-13 15:56:35', 0.55, 2, '2023-12-13 19:56:35', '2023-12-13 19:56:35'),
(16, 'Asistente-Virtual', 'Estos son los datos que tenemos registrados de tu persona.', '2023-12-13 15:56:35', 0.00, 2, '2023-12-13 19:56:35', '2023-12-13 19:56:35'),
(17, 'Asistente-Virtual', 'Estos son los datos que tenemos registrados de tu persona.', '2023-12-13 15:56:35', 0.00, 2, '2023-12-13 19:56:35', '2023-12-13 19:56:35'),
(18, 'Pablo Bustos', 'que planes o promociones tiene para ofrecerme', '2023-12-13 15:58:26', 0.70, 3, '2023-12-13 19:58:26', '2023-12-13 19:58:26'),
(19, 'Asistente-Virtual', '¿Qué tipo de servicio le interesaría?', '2023-12-13 15:58:26', 0.00, 3, '2023-12-13 19:58:26', '2023-12-13 19:58:26'),
(20, 'Pablo Bustos', 'Internet.', '2023-12-13 15:58:35', 0.50, 3, '2023-12-13 19:58:35', '2023-12-13 19:58:35'),
(21, 'Asistente-Virtual', 'Estos planes de Internet, tenemos para ti:', '2023-12-13 15:58:35', 0.00, 3, '2023-12-13 19:58:35', '2023-12-13 19:58:35'),
(22, 'Pablo Bustos', 'El plan estándar.', '2023-12-13 15:58:43', 0.55, 3, '2023-12-13 19:58:43', '2023-12-13 19:58:43'),
(23, 'Asistente-Virtual', 'Estos son los datos que tenemos registrados de tu persona.', '2023-12-13 15:58:43', 0.00, 3, '2023-12-13 19:58:43', '2023-12-13 19:58:43'),
(24, 'Asistente-Virtual', 'Estos son los datos que tenemos registrados de tu persona.', '2023-12-13 15:58:43', 0.00, 3, '2023-12-13 19:58:43', '2023-12-13 19:58:43'),
(25, 'Pablo Bustos', 'que planes o promociones tiene para ofrecerme', '2023-12-13 16:00:29', 0.70, 5, '2023-12-13 20:00:29', '2023-12-13 20:00:29'),
(26, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-13 16:00:29', 0.00, 5, '2023-12-13 20:00:29', '2023-12-13 20:00:29'),
(27, 'Pablo Bustos', 'Servicio de Internet.', '2023-12-13 16:00:36', 0.55, 5, '2023-12-13 20:00:36', '2023-12-13 20:00:36'),
(28, 'Asistente-Virtual', 'Los planes de internet que podemos ofrecerte son los siguientes:', '2023-12-13 16:00:36', 0.00, 5, '2023-12-13 20:00:36', '2023-12-13 20:00:36'),
(29, 'Pablo Bustos', 'El plan estándar.', '2023-12-13 16:00:45', 0.55, 5, '2023-12-13 20:00:45', '2023-12-13 20:00:45'),
(30, 'Asistente-Virtual', 'Estos son los datos que tenemos registrados de tu persona.', '2023-12-13 16:00:45', 0.00, 5, '2023-12-13 20:00:45', '2023-12-13 20:00:45'),
(31, 'Asistente-Virtual', 'Estos son los datos que tenemos registrados de tu persona.', '2023-12-13 16:00:45', 0.00, 5, '2023-12-13 20:00:45', '2023-12-13 20:00:45'),
(32, 'Pablo Bustos', '¿Qué servicios tiene para ofrecer?', '2023-12-13 16:03:41', 0.55, 8, '2023-12-13 20:03:41', '2023-12-13 20:03:41'),
(33, 'Asistente-Virtual', '¿Qué tipo de servicio le interesaría?', '2023-12-13 16:03:41', 0.00, 8, '2023-12-13 20:03:41', '2023-12-13 20:03:41'),
(34, 'Pablo Bustos', 'Servicio de Internet.', '2023-12-13 16:03:50', 0.55, 8, '2023-12-13 20:03:50', '2023-12-13 20:03:50'),
(35, 'Asistente-Virtual', 'Estos planes de Internet, tenemos para ti:', '2023-12-13 16:03:50', 0.00, 8, '2023-12-13 20:03:50', '2023-12-13 20:03:50'),
(36, 'Pablo Bustos', 'El plan estándar.', '2023-12-13 16:04:06', 0.55, 8, '2023-12-13 20:04:06', '2023-12-13 20:04:06'),
(37, 'Asistente-Virtual', 'Estos son los datos que tenemos registrados de tu persona.', '2023-12-13 16:04:06', 0.00, 8, '2023-12-13 20:04:06', '2023-12-13 20:04:06'),
(38, 'Asistente-Virtual', 'Estos son los datos que tenemos registrados de tu persona.', '2023-12-13 16:04:06', 0.00, 8, '2023-12-13 20:04:06', '2023-12-13 20:04:06'),
(39, 'Pablo Bustos', 'que planes o promociones tiene para ofrecerme', '2023-12-13 16:09:08', 0.70, 9, '2023-12-13 20:09:08', '2023-12-13 20:09:08'),
(40, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-13 16:09:08', 0.00, 9, '2023-12-13 20:09:08', '2023-12-13 20:09:08'),
(41, 'Pablo Bustos', 'Servicio de Internet.', '2023-12-13 16:09:16', 0.55, 9, '2023-12-13 20:09:16', '2023-12-13 20:09:16'),
(42, 'Asistente-Virtual', 'Genial!, contamos con los siguientes planes de internet:', '2023-12-13 16:09:16', 0.00, 9, '2023-12-13 20:09:16', '2023-12-13 20:09:16'),
(43, 'Pablo Bustos', 'Del plan estándar.', '2023-12-13 16:09:24', 0.50, 9, '2023-12-13 20:09:24', '2023-12-13 20:09:24'),
(44, 'Asistente-Virtual', 'Estos son los datos que tenemos registrados de tu persona.', '2023-12-13 16:09:24', 0.00, 9, '2023-12-13 20:09:24', '2023-12-13 20:09:24'),
(45, 'Asistente-Virtual', 'Estos son los datos que tenemos registrados de tu persona.', '2023-12-13 16:09:24', 0.00, 9, '2023-12-13 20:09:24', '2023-12-13 20:09:24'),
(46, 'Pablo Bustos', 'que planes o promociones tiene para ofrecerme', '2023-12-13 16:11:16', 0.70, 10, '2023-12-13 20:11:16', '2023-12-13 20:11:16'),
(47, 'Asistente-Virtual', '¿Qué tipo de servicio le interesaría?', '2023-12-13 16:11:16', 0.00, 10, '2023-12-13 20:11:16', '2023-12-13 20:11:16'),
(48, 'Pablo Bustos', 'internet', '2023-12-13 16:11:27', 0.50, 10, '2023-12-13 20:11:27', '2023-12-13 20:11:27'),
(49, 'Asistente-Virtual', 'Estos planes de Internet, tenemos para ti:', '2023-12-13 16:11:27', 0.00, 10, '2023-12-13 20:11:27', '2023-12-13 20:11:27'),
(50, 'Pablo Bustos', 'estandar', '2023-12-13 16:11:32', 0.65, 10, '2023-12-13 20:11:32', '2023-12-13 20:11:32'),
(51, 'Asistente-Virtual', 'Estos son los datos que tenemos registrados de tu persona.', '2023-12-13 16:11:32', 0.00, 10, '2023-12-13 20:11:32', '2023-12-13 20:11:32'),
(52, 'Asistente-Virtual', 'Estos son los datos que tenemos registrados de tu persona.', '2023-12-13 16:11:32', 0.00, 10, '2023-12-13 20:11:32', '2023-12-13 20:11:32'),
(53, 'Pier Vaca', 'Quisiera contratar plan de Internet.', '2023-12-13 16:28:06', 0.55, 13, '2023-12-13 20:28:06', '2023-12-13 20:28:06'),
(54, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-13 16:28:06', 0.00, 13, '2023-12-13 20:28:06', '2023-12-13 20:28:06'),
(55, 'Pier Vaca', 'De su servicio de Internet.', '2023-12-13 16:28:17', 0.70, 13, '2023-12-13 20:28:17', '2023-12-13 20:28:17'),
(56, 'Asistente-Virtual', 'Genial!, contamos con los siguientes planes de internet:', '2023-12-13 16:28:17', 0.00, 13, '2023-12-13 20:28:17', '2023-12-13 20:28:17'),
(57, 'Pier Vaca', 'El plan de 249 bolivianos.', '2023-12-13 16:28:28', 0.65, 13, '2023-12-13 20:28:28', '2023-12-13 20:28:28'),
(58, 'Asistente-Virtual', '', '2023-12-13 16:28:28', 0.00, 13, '2023-12-13 20:28:28', '2023-12-13 20:28:28'),
(59, 'Pier Vaca', 'El plan libre.', '2023-12-13 16:29:49', 0.75, 13, '2023-12-13 20:29:49', '2023-12-13 20:29:49'),
(60, 'Asistente-Virtual', '', '2023-12-13 16:29:49', 0.00, 13, '2023-12-13 20:29:49', '2023-12-13 20:29:49'),
(61, 'Pier Vaca', '¿Qué servicio de Internet tiene?', '2023-12-13 16:34:00', 0.60, 15, '2023-12-13 20:34:00', '2023-12-13 20:34:00'),
(62, 'Asistente-Virtual', 'Ups, no he entendido a que te refieres. ¿Podrías ser mas claro en tu consulta?', '2023-12-13 16:34:00', 0.00, 15, '2023-12-13 20:34:00', '2023-12-13 20:34:00'),
(63, 'Pier Vaca', '¿Qué servicios de Internet tiene?', '2023-12-13 16:37:53', 0.55, 15, '2023-12-13 20:37:53', '2023-12-13 20:37:53'),
(64, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-13 16:37:53', 0.00, 15, '2023-12-13 20:37:53', '2023-12-13 20:37:53'),
(65, 'Pier Vaca', 'Su servicio de Internet.', '2023-12-13 16:38:02', 0.75, 15, '2023-12-13 20:38:02', '2023-12-13 20:38:02'),
(66, 'Asistente-Virtual', 'Genial!, contamos con los siguientes planes de internet:', '2023-12-13 16:38:02', 0.00, 15, '2023-12-13 20:38:02', '2023-12-13 20:38:02'),
(67, 'Pier Vaca', 'El plan de 249 bolivianos.', '2023-12-13 16:38:14', 0.65, 15, '2023-12-13 20:38:15', '2023-12-13 20:38:15'),
(68, 'Asistente-Virtual', '', '2023-12-13 16:38:15', 0.00, 15, '2023-12-13 20:38:15', '2023-12-13 20:38:15'),
(69, 'Pier Vaca', 'Servicio de Internet tiene.', '2023-12-13 16:48:41', 0.60, 17, '2023-12-13 20:48:41', '2023-12-13 20:48:41'),
(70, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-13 16:48:41', 0.00, 17, '2023-12-13 20:48:41', '2023-12-13 20:48:41'),
(71, 'Pier Vaca', 'Los servicios de Internet.', '2023-12-13 16:48:49', 0.60, 17, '2023-12-13 20:48:49', '2023-12-13 20:48:49'),
(72, 'Asistente-Virtual', 'Los planes de internet que podemos ofrecerte son los siguientes:', '2023-12-13 16:48:49', 0.00, 17, '2023-12-13 20:48:49', '2023-12-13 20:48:49'),
(73, 'Pier Vaca', 'El plan avanzado.', '2023-12-13 16:48:58', 0.75, 17, '2023-12-13 20:48:58', '2023-12-13 20:48:58'),
(74, 'Asistente-Virtual', 'Elegiste el PLAN Avanzado, estos son los datos que tenemos registrados de tu persona.', '2023-12-13 16:48:58', 0.00, 17, '2023-12-13 20:48:58', '2023-12-13 20:48:58'),
(75, 'Pier Vaca', 'El plan avanzado.', '2023-12-13 16:50:20', 0.75, 17, '2023-12-13 20:50:20', '2023-12-13 20:50:20'),
(76, 'Asistente-Virtual', 'Elegiste el PLAN Avanzado, estos son los datos que tenemos registrados de tu persona.', '2023-12-13 16:50:20', 0.00, 17, '2023-12-13 20:50:20', '2023-12-13 20:50:20'),
(77, 'Pier Vaca', '¿Qué servicios de Internet tiene?', '2023-12-13 16:50:35', 0.55, 18, '2023-12-13 20:50:35', '2023-12-13 20:50:35'),
(78, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-13 16:50:35', 0.00, 18, '2023-12-13 20:50:35', '2023-12-13 20:50:35'),
(79, 'Pier Vaca', 'Servicio de Internet.', '2023-12-13 16:50:43', 0.55, 18, '2023-12-13 20:50:43', '2023-12-13 20:50:43'),
(80, 'Asistente-Virtual', 'Los planes de internet que podemos ofrecerte son los siguientes:', '2023-12-13 16:50:43', 0.00, 18, '2023-12-13 20:50:43', '2023-12-13 20:50:43'),
(81, 'Pier Vaca', 'El plan libre.', '2023-12-13 16:50:51', 0.75, 18, '2023-12-13 20:50:51', '2023-12-13 20:50:51'),
(82, 'Asistente-Virtual', 'Elegiste el PLAN LIBRE, estos datos tenemos registrados de tu persona', '2023-12-13 16:50:51', 0.00, 18, '2023-12-13 20:50:51', '2023-12-13 20:50:51'),
(83, 'Pier Vaca', '¿Qué plan de telefonía tiene?', '2023-12-13 17:13:40', 0.55, 20, '2023-12-13 21:13:40', '2023-12-13 21:13:40'),
(84, 'Asistente-Virtual', '¿A qué tipo de servicio te refieres?', '2023-12-13 17:13:40', 0.00, 20, '2023-12-13 21:13:40', '2023-12-13 21:13:40'),
(85, 'Pier Vaca', 'post pago', '2023-12-13 17:15:23', -0.10, 20, '2023-12-13 21:15:23', '2023-12-13 21:15:23'),
(86, 'Asistente-Virtual', 'Ups, no he entendido a que te refieres. ¿Podrías ser mas claro en tu consulta?', '2023-12-13 17:15:23', 0.00, 20, '2023-12-13 21:15:23', '2023-12-13 21:15:23'),
(87, 'Pier Vaca', 'post pago', '2023-12-13 17:15:32', -0.10, 21, '2023-12-13 21:15:32', '2023-12-13 21:15:32'),
(88, 'Asistente-Virtual', '¿A qué tipo de servicio te refieres?', '2023-12-13 17:15:32', 0.00, 21, '2023-12-13 21:15:32', '2023-12-13 21:15:32'),
(89, 'Pier Vaca', 'Servicio de telefonía.', '2023-12-13 17:15:40', 0.55, 21, '2023-12-13 21:15:40', '2023-12-13 21:15:40'),
(90, 'Asistente-Virtual', 'Ups, no he entendido a que te refieres. ¿Podrías ser mas claro en tu consulta?', '2023-12-13 17:15:40', 0.00, 21, '2023-12-13 21:15:40', '2023-12-13 21:15:40'),
(91, 'Pier Vaca', '¿Qué plan de telefonía tiene?', '2023-12-13 17:17:43', 0.55, 23, '2023-12-13 21:17:43', '2023-12-13 21:17:43'),
(92, 'Asistente-Virtual', '¿Qué tipo de servicio le interesaría?', '2023-12-13 17:17:43', 0.00, 23, '2023-12-13 21:17:43', '2023-12-13 21:17:43'),
(93, 'Pier Vaca', 'post pago', '2023-12-13 17:17:51', -0.10, 23, '2023-12-13 21:17:51', '2023-12-13 21:17:51'),
(94, 'Asistente-Virtual', 'Estos los planes de telefonía que tenemos para ofrecerte:', '2023-12-13 17:17:51', 0.00, 23, '2023-12-13 21:17:51', '2023-12-13 21:17:51'),
(95, 'Pier Vaca', 'El plan básico.', '2023-12-13 17:18:09', 0.60, 23, '2023-12-13 21:18:09', '2023-12-13 21:18:09'),
(96, 'Asistente-Virtual', 'El plan de llamadas basico se habilitara en 5 minutos para el usuario:', '2023-12-13 17:18:09', 0.00, 23, '2023-12-13 21:18:09', '2023-12-13 21:18:09'),
(97, 'Pier Vaca', ' ¿Qué plan de telefonía tiene?', '2023-12-13 17:20:16', 0.55, 24, '2023-12-13 21:20:16', '2023-12-13 21:20:16'),
(98, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-13 17:20:16', 0.00, 24, '2023-12-13 21:20:16', '2023-12-13 21:20:16'),
(99, 'Pier Vaca', 'Su servicio postpago.', '2023-12-13 17:20:22', 0.65, 24, '2023-12-13 21:20:22', '2023-12-13 21:20:22'),
(100, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-13 17:20:22', 0.00, 24, '2023-12-13 21:20:22', '2023-12-13 21:20:22'),
(101, 'Pier Vaca', 'Servicio de telefonía.', '2023-12-13 17:20:35', 0.55, 24, '2023-12-13 21:20:35', '2023-12-13 21:20:35'),
(102, 'Asistente-Virtual', 'Estos los planes de telefonía que tenemos para ofrecerte:', '2023-12-13 17:20:35', 0.00, 24, '2023-12-13 21:20:35', '2023-12-13 21:20:35'),
(103, 'Pier Vaca', 'El plan básico.', '2023-12-13 17:20:43', 0.60, 24, '2023-12-13 21:20:43', '2023-12-13 21:20:43'),
(104, 'Asistente-Virtual', 'El plan de llamadas basico se habilitara en 5 minutos para el usuario:', '2023-12-13 17:20:43', 0.00, 24, '2023-12-13 21:20:43', '2023-12-13 21:20:43'),
(105, 'Pablo Bustos', 'tengo problemas con el servicio de Internet', '2023-12-13 17:30:09', -0.70, 25, '2023-12-13 21:30:09', '2023-12-13 21:30:09'),
(106, 'Asistente-Virtual', 'Bueno, si presentas problemas con la conexión a internet ve y acércate donde tengas colocado tu router y desenchúfalo de la conexión eléctrica, \nespera 5 segundos y vuélvelo a conectar a la corriente.\nEspera un par de minutos hasta que el router vuelva a iniciarse.\nCuando las luces del router dejen de parpadear,\nvuelve a verificar si la conexión de internet volvió a funcionar\n¿Este paso soluciono tu problema?', '2023-12-13 17:30:09', 0.00, 25, '2023-12-13 21:30:09', '2023-12-13 21:30:09'),
(107, 'Pablo Bustos', 'no', '2023-12-13 17:48:01', -0.50, 26, '2023-12-13 21:48:01', '2023-12-13 21:48:01'),
(108, 'Asistente-Virtual', 'Lamento que sigas teniendo problemas con el servicio de internet, intentaremos este ultimo paso:\n- Consigue un objeto que tenga punta delgada, por ejemplo un lapicero.\n- Ve a la parte de atrás del Router y con ayuda de un objeto presiona el botón de RESET por 5 segundos.\n- Espera que las luces del Router dejen de parpadear e intenta ingresar.\n- Como reiniciaste el Router, conéctate a la red wifi que lleva el mismo nombre de la marca de tu Router, puedes ver estos datos en la parte trasera del Router.\n- Verifica si el servicio de Internet volvió a funcionar.\n¿Este paso soluciono tu problema?', '2023-12-13 17:48:01', 0.00, 26, '2023-12-13 21:48:01', '2023-12-13 21:48:01'),
(109, 'Pablo Bustos', 'Tengo problemas con el servicio de internet', '2023-12-15 11:46:31', -0.70, 27, '2023-12-15 15:46:31', '2023-12-15 15:46:31'),
(110, 'Asistente-Virtual', 'Bueno, si presentas problemas con la conexión a internet ve y acércate donde tengas colocado tu router y desenchúfalo de la conexión eléctrica, \nespera 5 segundos y vuélvelo a conectar a la corriente.\nEspera un par de minutos hasta que el router vuelva a iniciarse.\nCuando las luces del router dejen de parpadear,\nvuelve a verificar si la conexión de internet volvió a funcionar\n¿Este paso soluciono tu problema?', '2023-12-15 11:46:31', 0.00, 27, '2023-12-15 15:46:31', '2023-12-15 15:46:31'),
(111, 'Pablo Bustos', 'Que tipo de servicios tiene', '2023-12-15 13:58:27', 0.60, 33, '2023-12-15 17:58:27', '2023-12-15 17:58:27'),
(112, 'Asistente-Virtual', '¿Qué tipo de servicio le interesaría?', '2023-12-15 13:58:27', 0.00, 33, '2023-12-15 17:58:27', '2023-12-15 17:58:27'),
(113, 'Pablo Bustos', 'tiene servicios de internet', '2023-12-15 13:58:47', 0.75, 33, '2023-12-15 17:58:47', '2023-12-15 17:58:47'),
(114, 'Asistente-Virtual', 'Genial!, contamos con los siguientes planes de internet:', '2023-12-15 13:58:47', 0.00, 33, '2023-12-15 17:58:47', '2023-12-15 17:58:47'),
(115, 'Pablo Bustos', 'no', '2023-12-15 13:59:06', -0.50, 33, '2023-12-15 17:59:06', '2023-12-15 17:59:06'),
(116, 'Asistente-Virtual', '¿A qué tipo de servicio te refieres?', '2023-12-15 13:59:06', 0.00, 33, '2023-12-15 17:59:06', '2023-12-15 17:59:06'),
(117, 'Pablo Bustos', 'buenos dias', '2023-12-17 10:19:35', 0.85, 37, '2023-12-17 14:19:35', '2023-12-17 14:19:35'),
(118, 'Asistente-Virtual', '¿A qué tipo de servicio te refieres?', '2023-12-17 10:19:35', 0.00, 37, '2023-12-17 14:19:35', '2023-12-17 14:19:35'),
(119, 'Pablo Bustos', 'quisiera informacion de sus servicios de internet', '2023-12-17 10:20:01', 0.50, 37, '2023-12-17 14:20:01', '2023-12-17 14:20:01'),
(120, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-17 10:20:01', 0.00, 37, '2023-12-17 14:20:01', '2023-12-17 14:20:01'),
(121, 'Pablo Bustos', 'me interesa su servicio de internet', '2023-12-17 10:20:17', 0.65, 37, '2023-12-17 14:20:17', '2023-12-17 14:20:17'),
(122, 'Asistente-Virtual', 'Los planes de internet que podemos ofrecerte son los siguientes:', '2023-12-17 10:20:17', 0.00, 37, '2023-12-17 14:20:17', '2023-12-17 14:20:17'),
(123, 'Pablo Bustos', 'quisiera saber que tipos de servicios tiene', '2023-12-17 10:21:25', 0.55, 38, '2023-12-17 14:21:25', '2023-12-17 14:21:25'),
(124, 'Asistente-Virtual', '¿A qué tipo de servicio te refieres?', '2023-12-17 10:21:25', 0.00, 38, '2023-12-17 14:21:25', '2023-12-17 14:21:25'),
(125, 'Pablo Bustos', 'Con que servicios cuenta la telefonia VIVA', '2023-12-17 10:24:01', 0.60, 38, '2023-12-17 14:24:01', '2023-12-17 14:24:01'),
(126, 'Asistente-Virtual', 'Ups, no he entendido a que te refieres. ¿Podrías ser mas claro en tu consulta?', '2023-12-17 10:24:01', 0.00, 38, '2023-12-17 14:24:01', '2023-12-17 14:24:01'),
(127, 'Pablo Bustos', 'cuanto cuestan sus servicios', '2023-12-17 10:33:54', 0.60, 38, '2023-12-17 14:33:54', '2023-12-17 14:33:54'),
(128, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-17 10:33:54', 0.00, 38, '2023-12-17 14:33:54', '2023-12-17 14:33:54'),
(129, 'Pablo Bustos', 'hola, estoy buscando información de sus servicios de internet', '2023-12-17 10:34:26', 0.50, 39, '2023-12-17 14:34:26', '2023-12-17 14:34:26'),
(130, 'Asistente-Virtual', 'Estos planes de Internet, tenemos para ti:', '2023-12-17 10:34:26', 0.00, 39, '2023-12-17 14:34:26', '2023-12-17 14:34:26'),
(131, 'Pablo Bustos', 'hola, estoy buscando información de sus servicios de internet', '2023-12-17 10:43:32', 0.50, 40, '2023-12-17 14:43:32', '2023-12-17 14:43:32'),
(132, 'Asistente-Virtual', 'Estos planes de Internet, tenemos para ti:', '2023-12-17 10:43:32', 0.00, 40, '2023-12-17 14:43:32', '2023-12-17 14:43:32'),
(133, 'Pablo Bustos', 'Me gusta el plan de 199 bolivianos', '2023-12-17 10:44:16', 0.95, 40, '2023-12-17 14:44:16', '2023-12-17 14:44:16'),
(134, 'Asistente-Virtual', 'Elegiste el PLAN EXPLORA, estos son los datos que tenemos registrados de tu persona.', '2023-12-17 10:44:16', 0.00, 40, '2023-12-17 14:44:16', '2023-12-17 14:44:16'),
(135, 'Pablo Bustos', 'Me gusta el plan de 199 bolivianos', '2023-12-17 10:53:06', 0.95, 40, '2023-12-17 14:53:06', '2023-12-17 14:53:06'),
(136, 'Asistente-Virtual', 'Elegiste el PLAN EXPLORA, estos son los datos que tenemos registrados de tu persona.', '2023-12-17 10:53:06', 0.00, 40, '2023-12-17 14:53:06', '2023-12-17 14:53:06'),
(137, 'Pablo Bustos', 'me gustaría tener su servicio de internet', '2023-12-17 11:03:32', 0.50, 41, '2023-12-17 15:03:32', '2023-12-17 15:03:32'),
(138, 'Asistente-Virtual', 'No logré identificar tu consulta.', '2023-12-17 11:03:32', 0.00, 41, '2023-12-17 15:03:32', '2023-12-17 15:03:32'),
(139, 'Pablo Bustos', 'me gustaría tener su servicio de internet', '2023-12-17 11:03:55', 0.50, 42, '2023-12-17 15:03:55', '2023-12-17 15:03:55'),
(140, 'Asistente-Virtual', 'No logré identificar tu consulta.', '2023-12-17 11:03:55', 0.00, 42, '2023-12-17 15:03:55', '2023-12-17 15:03:55'),
(141, 'Pablo Bustos', 'me gustaría tener su servicio de internet', '2023-12-17 11:05:16', 0.50, 43, '2023-12-17 15:05:16', '2023-12-17 15:05:16'),
(142, 'Asistente-Virtual', 'No logré identificar tu consulta.', '2023-12-17 11:05:16', 0.00, 43, '2023-12-17 15:05:16', '2023-12-17 15:05:16'),
(143, 'Pablo Bustos', 'me gustaría tener su servicio de internet', '2023-12-17 11:07:52', 0.50, 43, '2023-12-17 15:07:52', '2023-12-17 15:07:52'),
(144, 'Asistente-Virtual', 'No logré identificar tu consulta.', '2023-12-17 11:07:52', 0.00, 43, '2023-12-17 15:07:52', '2023-12-17 15:07:52'),
(145, 'Pablo Bustos', 'me gustaría tener su servicio de internet', '2023-12-17 11:09:02', 0.50, 44, '2023-12-17 15:09:02', '2023-12-17 15:09:02'),
(146, 'Asistente-Virtual', 'No logré identificar tu consulta.', '2023-12-17 11:09:02', 0.00, 44, '2023-12-17 15:09:02', '2023-12-17 15:09:02'),
(147, 'Pablo Bustos', 'me gustaría tener su servicio de internet', '2023-12-17 11:09:38', 0.50, 45, '2023-12-17 15:09:38', '2023-12-17 15:09:38'),
(148, 'Asistente-Virtual', 'No logré identificar tu consulta.', '2023-12-17 11:09:38', 0.00, 45, '2023-12-17 15:09:38', '2023-12-17 15:09:38'),
(149, 'Pablo Bustos', 'que tipo de servicios tiene', '2023-12-17 11:10:52', 0.60, 46, '2023-12-17 15:10:52', '2023-12-17 15:10:52'),
(150, 'Asistente-Virtual', '¿Qué tipo de servicio le interesaría?', '2023-12-17 11:10:52', 0.00, 46, '2023-12-17 15:10:52', '2023-12-17 15:10:52'),
(151, 'Pablo Bustos', 'que servicios tiene', '2023-12-17 11:12:31', 0.60, 47, '2023-12-17 15:12:31', '2023-12-17 15:12:31'),
(152, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-17 11:12:31', 0.00, 47, '2023-12-17 15:12:31', '2023-12-17 15:12:31'),
(153, 'Pablo Bustos', 'que servicios tiene', '2023-12-17 11:13:05', 0.60, 48, '2023-12-17 15:13:05', '2023-12-17 15:13:05'),
(154, 'Asistente-Virtual', '¿Qué tipo de servicio le interesaría?', '2023-12-17 11:13:05', 0.00, 48, '2023-12-17 15:13:05', '2023-12-17 15:13:05'),
(155, 'Pablo Bustos', 'que servicios tiene', '2023-12-17 11:16:21', 0.60, 49, '2023-12-17 15:16:21', '2023-12-17 15:16:21'),
(156, 'Asistente-Virtual', '¿Qué tipo de servicio le interesaría?', '2023-12-17 11:16:21', 0.00, 49, '2023-12-17 15:16:21', '2023-12-17 15:16:21'),
(157, 'Pablo Bustos', 'llamadas e internet ilimitado', '2023-12-17 11:16:45', 0.65, 49, '2023-12-17 15:16:45', '2023-12-17 15:16:45'),
(158, 'Asistente-Virtual', 'Los planes de internet que podemos ofrecerte son los siguientes:', '2023-12-17 11:16:45', 0.00, 49, '2023-12-17 15:16:45', '2023-12-17 15:16:45'),
(159, 'Pablo Bustos', 'el plan de 199 bolivianos', '2023-12-17 11:17:29', 0.60, 49, '2023-12-17 15:17:29', '2023-12-17 15:17:29'),
(160, 'Asistente-Virtual', 'Elegiste el PLAN EXPLORA, estos son los datos que tenemos registrados de tu persona.', '2023-12-17 11:17:29', 0.00, 49, '2023-12-17 15:17:29', '2023-12-17 15:17:29'),
(161, 'Pier Vaca', 'Tengo problemas con el servicio de internet', '2023-12-17 12:35:54', -0.70, 52, '2023-12-17 16:35:54', '2023-12-17 16:35:54'),
(162, 'Asistente-Virtual', 'Bueno, si presentas problemas con la conexión a internet ve y acércate donde tengas colocado tu router y desenchúfalo de la conexión eléctrica, \nespera 5 segundos y vuélvelo a conectar a la corriente.\nEspera un par de minutos hasta que el router vuelva a iniciarse.\nCuando las luces del router dejen de parpadear,\nvuelve a verificar si la conexión de internet volvió a funcionar\n¿Este paso soluciono tu problema?', '2023-12-17 12:35:54', 0.00, 52, '2023-12-17 16:35:54', '2023-12-17 16:35:54'),
(163, 'Pier Vaca', 'SI', '2023-12-17 12:42:30', 0.55, 52, '2023-12-17 16:42:30', '2023-12-17 16:42:30'),
(164, 'Asistente-Virtual', 'Genial, puedes realizar este paso la próxima ves q tengas problemas con tu servicio de internet.', '2023-12-17 12:42:30', 0.00, 52, '2023-12-17 16:42:30', '2023-12-17 16:42:30'),
(165, 'Pier Vaca', 'Tengo problemas con el servicio de internet', '2023-12-17 12:42:40', -0.70, 53, '2023-12-17 16:42:40', '2023-12-17 16:42:40'),
(166, 'Asistente-Virtual', 'Si presentas problemas con la conexión a internet acércate donde tengas colocado tu Router y desenchúfalo de la conexión eléctrica,  espera 5 segundos y vuélvelo a conectar a la corriente.', '2023-12-17 12:42:40', 0.00, 53, '2023-12-17 16:42:40', '2023-12-17 16:42:40'),
(167, 'Pier Vaca', 'No', '2023-12-17 12:47:25', -0.40, 53, '2023-12-17 16:47:25', '2023-12-17 16:47:25'),
(168, 'Asistente-Virtual', 'Lamento que sigas teniendo problemas con el servicio de internet, intentaremos este ultimo paso:\n- Consigue un objeto que tenga punta delgada, por ejemplo un lapicero.\n- Ve a la parte de atrás del Router y con ayuda de un objeto presiona el botón de RESET por 5 segundos.\n- Espera que las luces del Router dejen de parpadear e intenta ingresar.\n- Como reiniciaste el Router, conéctate a la red wifi que lleva el mismo nombre de la marca de tu Router, puedes ver estos datos en la parte trasera del Router.\n- Verifica si el servicio de Internet volvió a funcionar.\n¿Este paso soluciono tu problema?', '2023-12-17 12:47:25', 0.00, 53, '2023-12-17 16:47:25', '2023-12-17 16:47:25'),
(169, 'Pier Vaca', 'Tengo problemas de interenet', '2023-12-17 12:49:09', -0.80, 54, '2023-12-17 16:49:09', '2023-12-17 16:49:09'),
(170, 'Asistente-Virtual', 'Si presentas problemas con la conexión a internet acércate donde tengas colocado tu Router y desenchúfalo de la conexión eléctrica,  espera 5 segundos y vuélvelo a conectar a la corriente.', '2023-12-17 12:49:09', 0.00, 54, '2023-12-17 16:49:09', '2023-12-17 16:49:09'),
(171, 'Pier Vaca', 'Si', '2023-12-17 12:59:29', 0.65, 54, '2023-12-17 16:59:29', '2023-12-17 16:59:29'),
(172, 'Asistente-Virtual', 'Genial, puedes realizar este paso la próxima ves q tengas problemas con tu servicio de internet.', '2023-12-17 12:59:29', 0.00, 54, '2023-12-17 16:59:29', '2023-12-17 16:59:29'),
(173, 'Pier Vaca', 'Tengo problemas con el servicio de internet', '2023-12-17 12:59:52', -0.70, 55, '2023-12-17 16:59:52', '2023-12-17 16:59:52'),
(174, 'Asistente-Virtual', 'Te daremos una serie de pasos para ayudarte a reestablecer el servicio de internet.', '2023-12-17 12:59:52', 0.00, 55, '2023-12-17 16:59:52', '2023-12-17 16:59:52'),
(175, 'Pier Vaca', 'Si', '2023-12-17 13:01:22', 0.65, 55, '2023-12-17 17:01:22', '2023-12-17 17:01:22'),
(176, 'Asistente-Virtual', 'Genial, puedes realizar este paso la próxima ves q tengas problemas con tu servicio de internet.', '2023-12-17 13:01:22', 0.00, 55, '2023-12-17 17:01:22', '2023-12-17 17:01:22'),
(177, 'Pier Vaca', 'Tengo problemas con la señal de internet', '2023-12-17 13:01:37', -0.70, 56, '2023-12-17 17:01:37', '2023-12-17 17:01:37'),
(178, 'Asistente-Virtual', 'Te daremos una serie de pasos para ayudarte a reestablecer el servicio de internet.', '2023-12-17 13:01:37', 0.00, 56, '2023-12-17 17:01:37', '2023-12-17 17:01:37'),
(179, 'Pier Vaca', 'si', '2023-12-17 13:02:20', 0.65, 56, '2023-12-17 17:02:20', '2023-12-17 17:02:20'),
(180, 'Asistente-Virtual', 'Genial, puedes realizar este paso la próxima ves q tengas problemas con tu servicio de internet.', '2023-12-17 13:02:21', 0.00, 56, '2023-12-17 17:02:21', '2023-12-17 17:02:21'),
(181, 'Pier Vaca', 'tengo problemas con la red', '2023-12-17 20:02:20', -0.70, 59, '2023-12-18 00:02:20', '2023-12-18 00:02:20'),
(182, 'Asistente-Virtual', 'Te daremos una serie de pasos para ayudarte a reestablecer el servicio de internet.', '2023-12-17 20:02:20', 0.00, 59, '2023-12-18 00:02:20', '2023-12-18 00:02:20'),
(183, 'Pier Vaca', 'No, sigo con los mismos problemas', '2023-12-17 20:02:57', -0.50, 59, '2023-12-18 00:02:57', '2023-12-18 00:02:57'),
(184, 'Asistente-Virtual', 'Lamento que sigas teniendo problemas con el servicio de internet, intentaremos este ultimo paso:\n- Consigue un objeto que tenga punta delgada, por ejemplo un lapicero.\n- Ve a la parte de atrás del Router y con ayuda de un objeto presiona el botón de RESET por 5 segundos.\n- Espera que las luces del Router dejen de parpadear e intenta ingresar.\n- Como reiniciaste el Router, conéctate a la red wifi que lleva el mismo nombre de la marca de tu Router, puedes ver estos datos en la parte trasera del Router.\n- Verifica si el servicio de Internet volvió a funcionar.\n¿Este paso soluciono tu problema?', '2023-12-17 20:02:57', 0.00, 59, '2023-12-18 00:02:57', '2023-12-18 00:02:57'),
(185, 'Pier Vaca', 'Si', '2023-12-17 20:03:44', 0.65, 59, '2023-12-18 00:03:44', '2023-12-18 00:03:44'),
(186, 'Asistente-Virtual', 'Genial, puedes realizar este paso la próxima ves q tengas problemas con tu servicio de internet.', '2023-12-17 20:03:44', 0.00, 59, '2023-12-18 00:03:44', '2023-12-18 00:03:44'),
(187, 'Pier Vaca', 'tengo problemas con la red', '2023-12-17 20:04:14', -0.70, 60, '2023-12-18 00:04:14', '2023-12-18 00:04:14'),
(188, 'Asistente-Virtual', 'Te daremos una serie de pasos para ayudarte a reestablecer el servicio de internet.', '2023-12-17 20:04:14', 0.00, 60, '2023-12-18 00:04:14', '2023-12-18 00:04:14'),
(189, 'Pier Vaca', 'No, sigo sin internet', '2023-12-17 20:04:26', -0.60, 60, '2023-12-18 00:04:26', '2023-12-18 00:04:26'),
(190, 'Asistente-Virtual', 'Lamento que sigas teniendo problemas con el servicio de internet, intentaremos este ultimo paso:\n- Consigue un objeto que tenga punta delgada, por ejemplo un lapicero.\n- Ve a la parte de atrás del Router y con ayuda de un objeto presiona el botón de RESET por 5 segundos.\n- Espera que las luces del Router dejen de parpadear e intenta ingresar.\n- Como reiniciaste el Router, conéctate a la red wifi que lleva el mismo nombre de la marca de tu Router, puedes ver estos datos en la parte trasera del Router.\n- Verifica si el servicio de Internet volvió a funcionar.\n¿Este paso soluciono tu problema?', '2023-12-17 20:04:26', 0.00, 60, '2023-12-18 00:04:26', '2023-12-18 00:04:26'),
(191, 'Pier Vaca', 'si, muchas gracias', '2023-12-17 20:10:32', 0.90, 60, '2023-12-18 00:10:32', '2023-12-18 00:10:32'),
(192, 'Asistente-Virtual', 'Genial, pudimos restablecer el servicio de internet, gracias por comunicarte con nosotros.', '2023-12-17 20:10:32', 0.00, 60, '2023-12-18 00:10:32', '2023-12-18 00:10:32'),
(193, 'María Rodríguez', 'buenas noches, tengo problemas con el internet', '2023-12-17 21:08:01', -0.10, 61, '2023-12-18 01:08:01', '2023-12-18 01:08:01'),
(194, 'Asistente-Virtual', 'Te daremos una serie de pasos para ayudarte a reestablecer el servicio de internet.', '2023-12-17 21:08:01', 0.00, 61, '2023-12-18 01:08:01', '2023-12-18 01:08:01'),
(195, 'María Rodríguez', 'no, sigo sin internet', '2023-12-17 21:08:18', -0.60, 61, '2023-12-18 01:08:18', '2023-12-18 01:08:18'),
(196, 'Asistente-Virtual', 'Lamento que sigas teniendo problemas con el servicio de internet, intentaremos este ultimo paso:', '2023-12-17 21:08:18', 0.00, 61, '2023-12-18 01:08:18', '2023-12-18 01:08:18'),
(197, 'María Rodríguez', 'no', '2023-12-17 21:08:30', -0.50, 61, '2023-12-18 01:08:30', '2023-12-18 01:08:30'),
(198, 'Asistente-Virtual', 'Bueno, parece ser un problema externo a los equipos que reciben la señal.\nEn el transcurso de 1 a 2 días te estará visitando un técnico de la empresa para verificar el estado del servicio.\nCon los datos que registraste en esta cuenta, el técnico se comunicara contigo, para coordinar la visita a tu domicilio.\nA continuación te daremos una copia de la Solicitud de visita para revisión de funcionamiento de los servicios.', '2023-12-17 21:08:30', 0.00, 61, '2023-12-18 01:08:30', '2023-12-18 01:08:30'),
(199, 'Pablo Bustos', 'me gustaria saber que paquetes de internet para mi casa tienen', '2023-12-17 22:57:50', 0.55, 89, '2023-12-18 02:57:50', '2023-12-18 02:57:50'),
(200, 'Asistente-Virtual', 'No logré identificar tu consulta.', '2023-12-17 22:57:50', 0.00, 89, '2023-12-18 02:57:50', '2023-12-18 02:57:50'),
(201, 'Pablo Bustos', 'que servicios tienen', '2023-12-17 22:58:06', 0.65, 89, '2023-12-18 02:58:06', '2023-12-18 02:58:06'),
(202, 'Asistente-Virtual', '¿Qué tipo de servicio le interesaría?', '2023-12-17 22:58:06', 0.00, 89, '2023-12-18 02:58:06', '2023-12-18 02:58:06'),
(203, 'Pablo Bustos', 'su servicio de internet', '2023-12-17 22:58:17', 0.70, 89, '2023-12-18 02:58:17', '2023-12-18 02:58:17'),
(204, 'Asistente-Virtual', 'What is the serviciointernet?', '2023-12-17 22:58:17', 0.00, 89, '2023-12-18 02:58:17', '2023-12-18 02:58:17'),
(205, 'Pablo Bustos', 'el plan estandar', '2023-12-17 22:59:57', 0.55, 89, '2023-12-18 02:59:57', '2023-12-18 02:59:57'),
(206, 'Asistente-Virtual', 'Estos planes de Internet, tenemos para ti:', '2023-12-17 22:59:57', 0.00, 89, '2023-12-18 02:59:57', '2023-12-18 02:59:57'),
(207, 'Pablo Bustos', 'el plan estandar', '2023-12-17 23:00:12', 0.55, 89, '2023-12-18 03:00:12', '2023-12-18 03:00:12'),
(208, 'Asistente-Virtual', 'Elegiste el PLAN ESTANDAR, estos son los datos que tenemos registrados de tu persona.', '2023-12-17 23:00:12', 0.00, 89, '2023-12-18 03:00:12', '2023-12-18 03:00:12'),
(209, 'Pablo Bustos', 'que servicios tiene', '2023-12-17 23:02:14', 0.60, 91, '2023-12-18 03:02:14', '2023-12-18 03:02:14'),
(210, 'Asistente-Virtual', '¿Qué tipo de servicio le interesaría?', '2023-12-17 23:02:14', 0.00, 91, '2023-12-18 03:02:14', '2023-12-18 03:02:14'),
(211, 'Pablo Bustos', 'su servicio de internet', '2023-12-17 23:02:22', 0.70, 91, '2023-12-18 03:02:22', '2023-12-18 03:02:22'),
(212, 'Asistente-Virtual', 'Los planes de internet que podemos ofrecerte son los siguientes:', '2023-12-17 23:02:22', 0.00, 91, '2023-12-18 03:02:22', '2023-12-18 03:02:22'),
(213, 'Pablo Bustos', 'el plan avanzado', '2023-12-17 23:02:34', 0.70, 91, '2023-12-18 03:02:34', '2023-12-18 03:02:34'),
(214, 'Asistente-Virtual', 'Elegiste el PLAN Avanzado, estos son los datos que tenemos registrados de tu persona.', '2023-12-17 23:02:34', 0.00, 91, '2023-12-18 03:02:34', '2023-12-18 03:02:34'),
(215, 'Pablo Bustos', 'que servicios de internet tiene', '2023-12-17 23:03:38', 0.50, 92, '2023-12-18 03:03:38', '2023-12-18 03:03:38'),
(216, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-17 23:03:38', 0.00, 92, '2023-12-18 03:03:38', '2023-12-18 03:03:38'),
(217, 'Pablo Bustos', 'su servicio de internet', '2023-12-17 23:03:51', 0.70, 92, '2023-12-18 03:03:51', '2023-12-18 03:03:51'),
(218, 'Asistente-Virtual', 'Los planes de internet que podemos ofrecerte son los siguientes:', '2023-12-17 23:03:51', 0.00, 92, '2023-12-18 03:03:51', '2023-12-18 03:03:51'),
(219, 'Pablo Bustos', 'el plan avanzado', '2023-12-17 23:04:02', 0.70, 92, '2023-12-18 03:04:02', '2023-12-18 03:04:02'),
(220, 'Asistente-Virtual', 'Elegiste el PLAN Avanzado, estos son los datos que tenemos registrados de tu persona.', '2023-12-17 23:04:02', 0.00, 92, '2023-12-18 03:04:02', '2023-12-18 03:04:02'),
(221, 'Pablo Bustos', 'buenas noches, que planes de internet para domicilio tienen', '2023-12-17 23:05:41', 0.70, 93, '2023-12-18 03:05:41', '2023-12-18 03:05:41'),
(222, 'Asistente-Virtual', 'No logré identificar tu consulta.', '2023-12-17 23:05:41', 0.00, 93, '2023-12-18 03:05:41', '2023-12-18 03:05:41'),
(223, 'Pablo Bustos', 'buenas noches, que planes de internet para domicilio tienen', '2023-12-17 23:06:05', 0.70, 93, '2023-12-18 03:06:05', '2023-12-18 03:06:05'),
(224, 'Asistente-Virtual', 'No logré identificar tu consulta.', '2023-12-17 23:06:05', 0.00, 93, '2023-12-18 03:06:05', '2023-12-18 03:06:05'),
(225, 'Pablo Bustos', 'buenas noches, que planes de internet para domicilio tienen', '2023-12-17 23:08:18', 0.70, 93, '2023-12-18 03:08:18', '2023-12-18 03:08:18'),
(226, 'Asistente-Virtual', 'No logré identificar tu consulta.', '2023-12-17 23:08:18', 0.00, 93, '2023-12-18 03:08:18', '2023-12-18 03:08:18'),
(227, 'Pier Vaca', 'Que planes o promociones de internet domiciliario', '2023-12-18 09:32:56', 0.55, 94, '2023-12-18 13:32:56', '2023-12-18 13:32:56'),
(228, 'Asistente-Virtual', '¿Qué tipo de servicio le interesaría?', '2023-12-18 09:32:56', 0.00, 94, '2023-12-18 13:32:56', '2023-12-18 13:32:56'),
(229, 'Pier Vaca', 'Servicio de internet', '2023-12-18 09:33:05', 0.55, 94, '2023-12-18 13:33:05', '2023-12-18 13:33:05'),
(230, 'Asistente-Virtual', 'Estos planes de Internet, tenemos para ti:', '2023-12-18 09:33:05', 0.00, 94, '2023-12-18 13:33:05', '2023-12-18 13:33:05'),
(231, 'Pier Vaca', 'el plan estandar', '2023-12-18 09:33:16', 0.55, 94, '2023-12-18 13:33:16', '2023-12-18 13:33:16'),
(232, 'Asistente-Virtual', 'Elegiste el PLAN ESTANDAR, estos son los datos que tenemos registrados de tu persona.', '2023-12-18 09:33:16', 0.00, 94, '2023-12-18 13:33:16', '2023-12-18 13:33:16'),
(233, 'María Rodríguez', 'Tengo problemas con mi internet en mi casa', '2023-12-18 11:26:09', -0.80, 96, '2023-12-18 15:26:09', '2023-12-18 15:26:09'),
(234, 'Asistente-Virtual', 'Te daremos una serie de pasos para ayudarte a reestablecer el servicio de internet.', '2023-12-18 11:26:09', 0.00, 96, '2023-12-18 15:26:09', '2023-12-18 15:26:09'),
(235, 'María Rodríguez', 'Si', '2023-12-18 11:26:36', 0.65, 96, '2023-12-18 15:26:36', '2023-12-18 15:26:36'),
(236, 'Asistente-Virtual', 'Genial, puedes realizar este paso la próxima ves q tengas problemas con tu servicio de internet.', '2023-12-18 11:26:36', 0.00, 96, '2023-12-18 15:26:36', '2023-12-18 15:26:36'),
(237, 'María Rodríguez', 'tengo problemas con mi internet', '2023-12-18 11:26:54', -0.80, 97, '2023-12-18 15:26:54', '2023-12-18 15:26:54'),
(238, 'Asistente-Virtual', 'Te daremos una serie de pasos para ayudarte a reestablecer el servicio de internet.', '2023-12-18 11:26:54', 0.00, 97, '2023-12-18 15:26:54', '2023-12-18 15:26:54'),
(239, 'María Rodríguez', 'No, el problema continua, sigo sin internet', '2023-12-18 11:27:16', -0.60, 97, '2023-12-18 15:27:16', '2023-12-18 15:27:16'),
(240, 'Asistente-Virtual', 'Lamento que sigas teniendo problemas con el servicio de internet, intentaremos este ultimo paso:', '2023-12-18 11:27:16', 0.00, 97, '2023-12-18 15:27:16', '2023-12-18 15:27:16'),
(241, 'María Rodríguez', 'No', '2023-12-18 11:27:30', -0.40, 97, '2023-12-18 15:27:30', '2023-12-18 15:27:30'),
(242, 'Asistente-Virtual', 'Bueno, parece ser un problema externo a los equipos que reciben la señal.\nEn el transcurso de 1 a 2 días te estará visitando un técnico de la empresa para verificar el estado del servicio.\nCon los datos que registraste en esta cuenta, el técnico se comunicara contigo, para coordinar la visita a tu domicilio.\nA continuación te daremos una copia de la Solicitud de visita para revisión de funcionamiento de los servicios.', '2023-12-18 11:27:30', 0.00, 97, '2023-12-18 15:27:30', '2023-12-18 15:27:30'),
(243, 'Pier Vaca', 'Que planes de internet tiene para internet domiciliario', '2023-12-18 11:29:06', 0.60, 98, '2023-12-18 15:29:06', '2023-12-18 15:29:06'),
(244, 'Asistente-Virtual', 'No logré identificar tu consulta.', '2023-12-18 11:29:06', 0.00, 98, '2023-12-18 15:29:06', '2023-12-18 15:29:06'),
(245, 'Pier Vaca', 'Que planes de internet', '2023-12-18 11:29:24', 0.50, 98, '2023-12-18 15:29:24', '2023-12-18 15:29:24'),
(246, 'Asistente-Virtual', 'Te daremos una serie de pasos para ayudarte a reestablecer el servicio de internet.', '2023-12-18 11:29:24', 0.00, 98, '2023-12-18 15:29:24', '2023-12-18 15:29:24'),
(247, 'Pier Vaca', 'quiero contratar un servicio', '2023-12-18 11:29:43', 0.50, 98, '2023-12-18 15:29:43', '2023-12-18 15:29:43'),
(248, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-18 11:29:43', 0.00, 98, '2023-12-18 15:29:43', '2023-12-18 15:29:43'),
(249, 'Pier Vaca', 'quiero el servicio de internet', '2023-12-18 11:29:57', 0.55, 98, '2023-12-18 15:29:57', '2023-12-18 15:29:57'),
(250, 'Asistente-Virtual', 'Genial!, contamos con los siguientes planes de internet:', '2023-12-18 11:29:57', 0.00, 98, '2023-12-18 15:29:57', '2023-12-18 15:29:57'),
(251, 'Pier Vaca', 'el plan estandar', '2023-12-18 11:30:07', 0.55, 98, '2023-12-18 15:30:07', '2023-12-18 15:30:07'),
(252, 'Asistente-Virtual', 'Elegiste el PLAN ESTANDAR, estos son los datos que tenemos registrados de tu persona.', '2023-12-18 11:30:07', 0.00, 98, '2023-12-18 15:30:07', '2023-12-18 15:30:07'),
(253, 'Pier Vaca', 'Quiero contratar un servicio de internet', '2023-12-18 11:40:29', 0.55, 100, '2023-12-18 15:40:29', '2023-12-18 15:40:29'),
(254, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-18 11:40:29', 0.00, 100, '2023-12-18 15:40:29', '2023-12-18 15:40:29'),
(255, 'Pier Vaca', 'Quiero contratar un servicio de internet', '2023-12-18 11:40:43', 0.55, 100, '2023-12-18 15:40:43', '2023-12-18 15:40:43'),
(256, 'Asistente-Virtual', '¿Qué tipo de servicio le interesaría?', '2023-12-18 11:40:43', 0.00, 100, '2023-12-18 15:40:43', '2023-12-18 15:40:43'),
(257, 'Pier Vaca', 'servicio de internet', '2023-12-18 11:40:57', 0.60, 100, '2023-12-18 15:40:57', '2023-12-18 15:40:57'),
(258, 'Asistente-Virtual', 'Genial!, contamos con los siguientes planes de internet:', '2023-12-18 11:40:57', 0.00, 100, '2023-12-18 15:40:57', '2023-12-18 15:40:57'),
(259, 'Pier Vaca', 'el plan estandar', '2023-12-18 11:41:05', 0.55, 100, '2023-12-18 15:41:05', '2023-12-18 15:41:05'),
(260, 'Asistente-Virtual', 'Elegiste el PLAN ESTANDAR, estos son los datos que tenemos registrados de tu persona.', '2023-12-18 11:41:05', 0.00, 100, '2023-12-18 15:41:05', '2023-12-18 15:41:05'),
(261, 'Pier Vaca', 'Mi router no funciona', '2023-12-18 12:01:53', -0.70, 103, '2023-12-18 16:01:53', '2023-12-18 16:01:53'),
(262, 'Asistente-Virtual', 'Te daremos una serie de pasos para ayudarte a reestablecer el servicio de internet.', '2023-12-18 12:01:53', 0.00, 103, '2023-12-18 16:01:53', '2023-12-18 16:01:53'),
(263, 'Pier Vaca', 'quiero contratar el servico de internet', '2023-12-18 12:05:16', 0.55, 105, '2023-12-18 16:05:16', '2023-12-18 16:05:16'),
(264, 'Asistente-Virtual', '¿Qué tipo de servicio le interesaría?', '2023-12-18 12:05:16', 0.00, 105, '2023-12-18 16:05:16', '2023-12-18 16:05:16'),
(265, 'Pier Vaca', 'servicio de internet', '2023-12-18 12:05:26', 0.60, 105, '2023-12-18 16:05:26', '2023-12-18 16:05:26'),
(266, 'Asistente-Virtual', 'Estos planes de Internet, tenemos para ti:', '2023-12-18 12:05:26', 0.00, 105, '2023-12-18 16:05:26', '2023-12-18 16:05:26'),
(267, 'Pier Vaca', 'el plan estandar', '2023-12-18 12:05:38', 0.55, 105, '2023-12-18 16:05:38', '2023-12-18 16:05:38'),
(268, 'Asistente-Virtual', 'Elegiste el PLAN ESTANDAR, estos son los datos que tenemos registrados de tu persona.', '2023-12-18 12:05:38', 0.00, 105, '2023-12-18 16:05:38', '2023-12-18 16:05:38'),
(269, 'Pier Vaca', 'Quisiera contratar el plan estandar', '2023-12-18 12:11:50', 0.60, 108, '2023-12-18 16:11:50', '2023-12-18 16:11:50'),
(270, 'Asistente-Virtual', 'Elegiste el PLAN ESTANDAR, estos son los datos que tenemos registrados de tu persona.', '2023-12-18 12:11:50', 0.00, 108, '2023-12-18 16:11:50', '2023-12-18 16:11:50'),
(271, 'María Rodríguez', 'Quiero contratar el plan estandar', '2023-12-18 12:16:22', 0.65, 109, '2023-12-18 16:16:22', '2023-12-18 16:16:22'),
(272, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-18 12:16:22', 0.00, 109, '2023-12-18 16:16:22', '2023-12-18 16:16:22'),
(273, 'María Rodríguez', 'su servicio de internet', '2023-12-18 12:16:35', 0.70, 109, '2023-12-18 16:16:35', '2023-12-18 16:16:35'),
(274, 'Asistente-Virtual', 'Los planes de internet que podemos ofrecerte son los siguientes:', '2023-12-18 12:16:35', 0.00, 109, '2023-12-18 16:16:35', '2023-12-18 16:16:35'),
(275, 'María Rodríguez', 'el plan estandar', '2023-12-18 12:16:44', 0.55, 109, '2023-12-18 16:16:44', '2023-12-18 16:16:44'),
(276, 'Asistente-Virtual', 'Elegiste el PLAN ESTANDAR, estos son los datos que tenemos registrados de tu persona.', '2023-12-18 12:16:44', 0.00, 109, '2023-12-18 16:16:44', '2023-12-18 16:16:44'),
(277, 'María Rodríguez', 'Que servicios de internet tiene', '2023-12-18 12:24:42', 0.55, 111, '2023-12-18 16:24:42', '2023-12-18 16:24:42'),
(278, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-18 12:24:42', 0.00, 111, '2023-12-18 16:24:42', '2023-12-18 16:24:42'),
(279, 'María Rodríguez', 'servicio de internet', '2023-12-18 12:24:50', 0.60, 111, '2023-12-18 16:24:50', '2023-12-18 16:24:50'),
(280, 'Asistente-Virtual', 'Estos planes de Internet, tenemos para ti:', '2023-12-18 12:24:50', 0.00, 111, '2023-12-18 16:24:50', '2023-12-18 16:24:50'),
(281, 'María Rodríguez', 'plan estandar', '2023-12-18 12:24:57', 0.55, 111, '2023-12-18 16:24:57', '2023-12-18 16:24:57'),
(282, 'Asistente-Virtual', 'Elegiste el PLAN ESTANDAR, estos son los datos que tenemos registrados de tu persona.', '2023-12-18 12:24:57', 0.00, 111, '2023-12-18 16:24:57', '2023-12-18 16:24:57'),
(283, 'María Rodríguez', 'quiero el plan estandar de internet', '2023-12-18 12:27:00', 0.55, 112, '2023-12-18 16:27:00', '2023-12-18 16:27:00'),
(284, 'Asistente-Virtual', 'Elegiste el PLAN ESTANDAR, estos son los datos que tenemos registrados de tu persona.', '2023-12-18 12:27:00', 0.00, 112, '2023-12-18 16:27:00', '2023-12-18 16:27:00'),
(285, 'María Rodríguez', 'Quiero el plan estandar de internet', '2023-12-18 12:27:39', 0.55, 113, '2023-12-18 16:27:39', '2023-12-18 16:27:39'),
(286, 'Asistente-Virtual', 'Te daremos una serie de pasos para ayudarte a reestablecer el servicio de internet.', '2023-12-18 12:27:39', 0.00, 113, '2023-12-18 16:27:39', '2023-12-18 16:27:39'),
(287, 'María Rodríguez', 'Quiero el plan estandar ', '2023-12-18 12:27:51', 0.55, 113, '2023-12-18 16:27:51', '2023-12-18 16:27:51'),
(288, 'Asistente-Virtual', 'No logré identificar tu consulta.', '2023-12-18 12:27:51', 0.00, 113, '2023-12-18 16:27:51', '2023-12-18 16:27:51'),
(289, 'María Rodríguez', 'quiero contratar el plan estandar', '2023-12-18 12:28:04', 0.60, 113, '2023-12-18 16:28:04', '2023-12-18 16:28:04'),
(290, 'Asistente-Virtual', '¿Qué tipo de servicio le interesaría?', '2023-12-18 12:28:04', 0.00, 113, '2023-12-18 16:28:04', '2023-12-18 16:28:04'),
(291, 'María Rodríguez', 'servicio de internet', '2023-12-18 12:28:13', 0.60, 113, '2023-12-18 16:28:13', '2023-12-18 16:28:13'),
(292, 'Asistente-Virtual', 'Genial!, contamos con los siguientes planes de internet:', '2023-12-18 12:28:13', 0.00, 113, '2023-12-18 16:28:13', '2023-12-18 16:28:13'),
(293, 'María Rodríguez', 'el plan estandar', '2023-12-18 12:28:21', 0.55, 113, '2023-12-18 16:28:21', '2023-12-18 16:28:21'),
(294, 'Asistente-Virtual', 'Elegiste el PLAN ESTANDAR, estos son los datos que tenemos registrados de tu persona.', '2023-12-18 12:28:21', 0.00, 113, '2023-12-18 16:28:21', '2023-12-18 16:28:21'),
(295, 'María Rodríguez', 'Quiero contratar el plan estandar', '2023-12-18 12:35:26', 0.65, 115, '2023-12-18 16:35:26', '2023-12-18 16:35:26'),
(296, 'Asistente-Virtual', '¿Qué tipo de servicio le interesaría?', '2023-12-18 12:35:26', 0.00, 115, '2023-12-18 16:35:26', '2023-12-18 16:35:26'),
(297, 'María Rodríguez', 'el servicio de internet', '2023-12-18 12:35:37', 0.60, 115, '2023-12-18 16:35:37', '2023-12-18 16:35:37'),
(298, 'Asistente-Virtual', 'Los planes de internet que podemos ofrecerte son los siguientes:', '2023-12-18 12:35:37', 0.00, 115, '2023-12-18 16:35:37', '2023-12-18 16:35:37'),
(299, 'María Rodríguez', 'quiero contratar el plan estandar', '2023-12-18 12:35:50', 0.60, 115, '2023-12-18 16:35:50', '2023-12-18 16:35:50'),
(300, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-18 12:35:50', 0.00, 115, '2023-12-18 16:35:50', '2023-12-18 16:35:50'),
(301, 'María Rodríguez', 'el plan estandar', '2023-12-18 12:36:04', 0.55, 115, '2023-12-18 16:36:04', '2023-12-18 16:36:04'),
(302, 'Asistente-Virtual', 'Elegiste el PLAN ESTANDAR, estos son los datos que tenemos registrados de tu persona.', '2023-12-18 12:36:04', 0.00, 115, '2023-12-18 16:36:04', '2023-12-18 16:36:04'),
(303, 'Pier Vaca', 'Quisiera contratar un servicio', '2023-12-18 15:59:45', 0.50, 116, '2023-12-18 19:59:45', '2023-12-18 19:59:45');
INSERT INTO `chat` (`id`, `emisor`, `mensaje`, `fecha`, `porcentaje`, `id_interaccion`, `created_at`, `updated_at`) VALUES
(304, 'Asistente-Virtual', '¿Qué tipo de servicio le interesaría?', '2023-12-18 15:59:45', 0.00, 116, '2023-12-18 19:59:45', '2023-12-18 19:59:45'),
(305, 'Pier Vaca', 'plan estandar', '2023-12-18 15:59:58', 0.55, 116, '2023-12-18 19:59:58', '2023-12-18 19:59:58'),
(306, 'Asistente-Virtual', 'No logré identificar tu consulta.', '2023-12-18 15:59:58', 0.00, 116, '2023-12-18 19:59:58', '2023-12-18 19:59:58'),
(307, 'Pier Vaca', 'servicio de internet', '2023-12-18 16:00:10', 0.60, 116, '2023-12-18 20:00:10', '2023-12-18 20:00:10'),
(308, 'Asistente-Virtual', 'Los planes de internet que podemos ofrecerte son los siguientes:', '2023-12-18 16:00:10', 0.00, 116, '2023-12-18 20:00:10', '2023-12-18 20:00:10'),
(309, 'Pier Vaca', 'el plan estandar', '2023-12-18 16:00:27', 0.55, 116, '2023-12-18 20:00:27', '2023-12-18 20:00:27'),
(310, 'Asistente-Virtual', 'Elegiste el PLAN ESTANDAR, estos son los datos que tenemos registrados de tu persona.', '2023-12-18 16:00:27', 0.00, 116, '2023-12-18 20:00:27', '2023-12-18 20:00:27'),
(311, 'Pier Vaca', 'quisiera contratar un servicio de internet', '2023-12-18 16:02:23', 0.55, 118, '2023-12-18 20:02:23', '2023-12-18 20:02:23'),
(312, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-18 16:02:23', 0.00, 118, '2023-12-18 20:02:23', '2023-12-18 20:02:23'),
(313, 'Pier Vaca', 'servicio de internet', '2023-12-18 16:02:36', 0.60, 118, '2023-12-18 20:02:36', '2023-12-18 20:02:36'),
(314, 'Asistente-Virtual', 'Estos planes de Internet, tenemos para ti:', '2023-12-18 16:02:36', 0.00, 118, '2023-12-18 20:02:36', '2023-12-18 20:02:36'),
(315, 'Pier Vaca', 'el plan estandar', '2023-12-18 16:02:45', 0.55, 118, '2023-12-18 20:02:45', '2023-12-18 20:02:45'),
(316, 'Asistente-Virtual', 'Elegiste el PLAN ESTANDAR, estos son los datos que tenemos registrados de tu persona.', '2023-12-18 16:02:45', 0.00, 118, '2023-12-18 20:02:45', '2023-12-18 20:02:45'),
(317, 'María Rodríguez', 'Quisiera contratar un servicio', '2023-12-18 16:03:51', 0.50, 120, '2023-12-18 20:03:51', '2023-12-18 20:03:51'),
(318, 'Asistente-Virtual', '¿Qué tipo de servicio le interesaría?', '2023-12-18 16:03:51', 0.00, 120, '2023-12-18 20:03:51', '2023-12-18 20:03:51'),
(319, 'María Rodríguez', 'servicio de internet', '2023-12-18 16:03:58', 0.60, 120, '2023-12-18 20:03:58', '2023-12-18 20:03:58'),
(320, 'Asistente-Virtual', 'Genial!, contamos con los siguientes planes de internet:', '2023-12-18 16:03:58', 0.00, 120, '2023-12-18 20:03:58', '2023-12-18 20:03:58'),
(321, 'María Rodríguez', 'plan estandar', '2023-12-18 16:04:07', 0.55, 120, '2023-12-18 20:04:07', '2023-12-18 20:04:07'),
(322, 'Asistente-Virtual', 'Elegiste el PLAN ESTANDAR, estos son los datos que tenemos registrados de tu persona.', '2023-12-18 16:04:07', 0.00, 120, '2023-12-18 20:04:07', '2023-12-18 20:04:07'),
(323, 'María Rodríguez', 'quiero contratar el servicio de internet', '2023-12-18 16:08:27', 0.50, 139, '2023-12-18 20:08:27', '2023-12-18 20:08:27'),
(324, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-18 16:08:27', 0.00, 139, '2023-12-18 20:08:27', '2023-12-18 20:08:27'),
(325, 'María Rodríguez', 'servicio de internet', '2023-12-18 16:08:36', 0.60, 139, '2023-12-18 20:08:36', '2023-12-18 20:08:36'),
(326, 'Asistente-Virtual', 'Genial!, contamos con los siguientes planes de internet:', '2023-12-18 16:08:36', 0.00, 139, '2023-12-18 20:08:36', '2023-12-18 20:08:36'),
(327, 'María Rodríguez', 'plan estandar', '2023-12-18 16:08:46', 0.55, 139, '2023-12-18 20:08:46', '2023-12-18 20:08:46'),
(328, 'Asistente-Virtual', 'Elegiste el PLAN ESTANDAR, estos son los datos que tenemos registrados de tu persona.', '2023-12-18 16:08:46', 0.00, 139, '2023-12-18 20:08:46', '2023-12-18 20:08:46'),
(329, 'María Rodríguez', 'Quiero contratar el plan wow estandar', '2023-12-18 16:12:29', 0.80, 141, '2023-12-18 20:12:29', '2023-12-18 20:12:29'),
(330, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-18 16:12:29', 0.00, 141, '2023-12-18 20:12:29', '2023-12-18 20:12:29'),
(331, 'María Rodríguez', 'plan estandar', '2023-12-18 16:12:36', 0.55, 141, '2023-12-18 20:12:36', '2023-12-18 20:12:36'),
(332, 'Asistente-Virtual', 'No logré identificar tu consulta.', '2023-12-18 16:12:36', 0.00, 141, '2023-12-18 20:12:36', '2023-12-18 20:12:36'),
(333, 'Pier Vaca', 'Quiero contratar el plan estandar', '2023-12-18 16:15:43', 0.65, 142, '2023-12-18 20:15:43', '2023-12-18 20:15:43'),
(334, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-18 16:15:43', 0.00, 142, '2023-12-18 20:15:43', '2023-12-18 20:15:43'),
(335, 'Pier Vaca', 'servicio de internet', '2023-12-18 16:15:53', 0.60, 142, '2023-12-18 20:15:53', '2023-12-18 20:15:53'),
(336, 'Asistente-Virtual', 'Estos planes de Internet, tenemos para ti:', '2023-12-18 16:15:53', 0.00, 142, '2023-12-18 20:15:53', '2023-12-18 20:15:53'),
(337, 'Pier Vaca', 'plan estandar', '2023-12-18 16:16:01', 0.55, 142, '2023-12-18 20:16:01', '2023-12-18 20:16:01'),
(338, 'Asistente-Virtual', 'Elegiste el PLAN ESTANDAR, estos son los datos que tenemos registrados de tu persona.', '2023-12-18 16:16:01', 0.00, 142, '2023-12-18 20:16:01', '2023-12-18 20:16:01'),
(339, 'Pier Vaca', 'quiero el plan estandar', '2023-12-18 16:17:44', 0.60, 144, '2023-12-18 20:17:44', '2023-12-18 20:17:44'),
(340, 'Asistente-Virtual', 'Elegiste el PLAN ESTANDAR, estos son los datos que tenemos registrados de tu persona.', '2023-12-18 16:17:44', 0.00, 144, '2023-12-18 20:17:44', '2023-12-18 20:17:44'),
(341, 'Pier Vaca', 'quiero el plan estandar', '2023-12-18 16:25:20', 0.60, 146, '2023-12-18 20:25:20', '2023-12-18 20:25:20'),
(342, 'Asistente-Virtual', 'No logré identificar tu consulta.', '2023-12-18 16:25:20', 0.00, 146, '2023-12-18 20:25:20', '2023-12-18 20:25:20'),
(343, 'Pier Vaca', 'quiero el plan estandar', '2023-12-18 16:25:28', 0.60, 146, '2023-12-18 20:25:29', '2023-12-18 20:25:29'),
(344, 'Asistente-Virtual', 'No logré identificar tu consulta.', '2023-12-18 16:25:29', 0.00, 146, '2023-12-18 20:25:29', '2023-12-18 20:25:29'),
(345, 'Pier Vaca', 'quiero el plan de internet estándar', '2023-12-18 16:25:50', 0.50, 146, '2023-12-18 20:25:50', '2023-12-18 20:25:50'),
(346, 'Asistente-Virtual', 'Te daremos una serie de pasos para ayudarte a reestablecer el servicio de internet.', '2023-12-18 16:25:50', 0.00, 146, '2023-12-18 20:25:50', '2023-12-18 20:25:50'),
(347, 'Pier Vaca', 'quiero contratar el plan de internet', '2023-12-18 16:26:09', 0.55, 146, '2023-12-18 20:26:09', '2023-12-18 20:26:09'),
(348, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-18 16:26:09', 0.00, 146, '2023-12-18 20:26:09', '2023-12-18 20:26:09'),
(349, 'Pier Vaca', 'internet', '2023-12-18 16:26:18', 0.50, 146, '2023-12-18 20:26:18', '2023-12-18 20:26:18'),
(350, 'Asistente-Virtual', 'Genial!, contamos con los siguientes planes de internet:', '2023-12-18 16:26:18', 0.00, 146, '2023-12-18 20:26:18', '2023-12-18 20:26:18'),
(351, 'Pier Vaca', 'avanzado', '2023-12-18 16:26:32', 0.70, 146, '2023-12-18 20:26:32', '2023-12-18 20:26:32'),
(352, 'Asistente-Virtual', 'Elegiste el PLAN Avanzado, estos son los datos que tenemos registrados de tu persona.', '2023-12-18 16:26:32', 0.00, 146, '2023-12-18 20:26:32', '2023-12-18 20:26:32'),
(353, 'Pier Vaca', 'Que planes de telefonia tiene', '2023-12-18 16:27:13', 0.60, 148, '2023-12-18 20:27:13', '2023-12-18 20:27:13'),
(354, 'Asistente-Virtual', 'No logré identificar tu consulta.', '2023-12-18 16:27:13', 0.00, 148, '2023-12-18 20:27:13', '2023-12-18 20:27:13'),
(355, 'Pier Vaca', 'Que planes de telefonía tiene', '2023-12-18 16:27:56', 0.60, 148, '2023-12-18 20:27:56', '2023-12-18 20:27:56'),
(356, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-18 16:27:56', 0.00, 148, '2023-12-18 20:27:56', '2023-12-18 20:27:56'),
(357, 'Pier Vaca', 'telefonía', '2023-12-18 16:28:07', 0.65, 148, '2023-12-18 20:28:07', '2023-12-18 20:28:07'),
(358, 'Asistente-Virtual', 'Estos los planes de telefonía que tenemos para ofrecerte:', '2023-12-18 16:28:07', 0.00, 148, '2023-12-18 20:28:07', '2023-12-18 20:28:07'),
(359, 'Pier Vaca', 'el plan basico', '2023-12-18 16:28:16', 0.60, 148, '2023-12-18 20:28:16', '2023-12-18 20:28:16'),
(360, 'Asistente-Virtual', 'El plan de llamadas basico se habilitara en 5 minutos para el usuario:', '2023-12-18 16:28:16', 0.00, 148, '2023-12-18 20:28:16', '2023-12-18 20:28:16'),
(361, 'Pier Vaca', 'gracias', '2023-12-18 16:30:57', 0.90, 148, '2023-12-18 20:30:57', '2023-12-18 20:30:57'),
(362, 'Asistente-Virtual', 'No logré identificar tu consulta.', '2023-12-18 16:30:57', 0.00, 148, '2023-12-18 20:30:57', '2023-12-18 20:30:57'),
(363, 'Pier Vaca', 'me gustaria contratar un plan de telefonia', '2023-12-18 16:31:19', 0.50, 149, '2023-12-18 20:31:19', '2023-12-18 20:31:19'),
(364, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-18 16:31:19', 0.00, 149, '2023-12-18 20:31:19', '2023-12-18 20:31:19'),
(365, 'Pier Vaca', 'de telefonia y llamadas', '2023-12-18 16:31:31', 0.50, 149, '2023-12-18 20:31:31', '2023-12-18 20:31:31'),
(366, 'Asistente-Virtual', 'Estos los planes de telefonía que tenemos para ofrecerte:', '2023-12-18 16:31:31', 0.00, 149, '2023-12-18 20:31:31', '2023-12-18 20:31:31'),
(367, 'Pier Vaca', 'el plan basico', '2023-12-18 16:31:39', 0.60, 149, '2023-12-18 20:31:39', '2023-12-18 20:31:39'),
(368, 'Asistente-Virtual', 'El plan de llamadas basico se habilitara en 5 minutos para el usuario:', '2023-12-18 16:31:39', 0.00, 149, '2023-12-18 20:31:39', '2023-12-18 20:31:39'),
(369, 'Pier Vaca', 'quiero el plan de internet estandar', '2023-12-18 16:33:00', 0.55, 150, '2023-12-18 20:33:00', '2023-12-18 20:33:00'),
(370, 'Asistente-Virtual', 'Te daremos una serie de pasos para ayudarte a reestablecer el servicio de internet.', '2023-12-18 16:33:00', 0.00, 150, '2023-12-18 20:33:00', '2023-12-18 20:33:00'),
(371, 'Pier Vaca', 'quiero el plan de internet estandar', '2023-12-18 16:33:15', 0.55, 150, '2023-12-18 20:33:15', '2023-12-18 20:33:15'),
(372, 'Asistente-Virtual', 'Te daremos una serie de pasos para ayudarte a reestablecer el servicio de internet.', '2023-12-18 16:33:15', 0.00, 150, '2023-12-18 20:33:15', '2023-12-18 20:33:15'),
(373, 'Pier Vaca', 'quiero el plan de internet estándar', '2023-12-18 16:33:44', 0.50, 150, '2023-12-18 20:33:44', '2023-12-18 20:33:44'),
(374, 'Asistente-Virtual', 'Te daremos una serie de pasos para ayudarte a reestablecer el servicio de internet.', '2023-12-18 16:33:44', 0.00, 150, '2023-12-18 20:33:44', '2023-12-18 20:33:44'),
(375, 'Pier Vaca', 'quiero el plan estandar de internet', '2023-12-18 16:38:40', 0.55, 151, '2023-12-18 20:38:40', '2023-12-18 20:38:40'),
(376, 'Asistente-Virtual', 'Te daremos una serie de pasos para ayudarte a reestablecer el servicio de internet.', '2023-12-18 16:38:40', 0.00, 151, '2023-12-18 20:38:40', '2023-12-18 20:38:40'),
(377, 'María Rodríguez', 'quiero el plan basico', '2023-12-18 17:42:29', 0.60, 152, '2023-12-18 21:42:29', '2023-12-18 21:42:29'),
(378, 'Asistente-Virtual', 'No logré identificar tu consulta.', '2023-12-18 17:42:29', 0.00, 152, '2023-12-18 21:42:29', '2023-12-18 21:42:29'),
(379, 'María Rodríguez', 'servicio de telefonia', '2023-12-18 17:42:40', 0.65, 152, '2023-12-18 21:42:40', '2023-12-18 21:42:40'),
(380, 'Asistente-Virtual', 'No logré identificar tu consulta.', '2023-12-18 17:42:40', 0.00, 152, '2023-12-18 21:42:40', '2023-12-18 21:42:40'),
(381, 'María Rodríguez', 'telefonia', '2023-12-18 17:42:51', 0.50, 152, '2023-12-18 21:42:51', '2023-12-18 21:42:51'),
(382, 'Asistente-Virtual', 'No logré identificar tu consulta.', '2023-12-18 17:42:51', 0.00, 152, '2023-12-18 21:42:51', '2023-12-18 21:42:51'),
(383, 'María Rodríguez', 'Quiero contratar servicio de telefonia', '2023-12-18 17:44:50', 0.55, 153, '2023-12-18 21:44:50', '2023-12-18 21:44:50'),
(384, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-18 17:44:50', 0.00, 153, '2023-12-18 21:44:50', '2023-12-18 21:44:50'),
(385, 'María Rodríguez', 'telefonía', '2023-12-18 17:44:59', 0.65, 153, '2023-12-18 21:44:59', '2023-12-18 21:44:59'),
(386, 'Asistente-Virtual', 'Estos los planes de telefonía que tenemos para ofrecerte:', '2023-12-18 17:44:59', 0.00, 153, '2023-12-18 21:44:59', '2023-12-18 21:44:59'),
(387, 'María Rodríguez', 'plan basico', '2023-12-18 17:45:08', 0.60, 153, '2023-12-18 21:45:08', '2023-12-18 21:45:08'),
(388, 'Asistente-Virtual', 'El plan de llamadas basico se habilitara en 5 minutos para el usuario:', '2023-12-18 17:45:08', 0.00, 153, '2023-12-18 21:45:08', '2023-12-18 21:45:08'),
(389, 'Pablo Bustos', 'tengo problemas de internet', '2023-12-18 18:41:55', -0.70, 154, '2023-12-18 22:41:55', '2023-12-18 22:41:55'),
(390, 'Asistente-Virtual', 'Te daremos una serie de pasos para ayudarte a reestablecer el servicio de internet.', '2023-12-18 18:41:55', 0.00, 154, '2023-12-18 22:41:55', '2023-12-18 22:41:55'),
(391, 'Pablo Bustos', 'no, sigo con problemas de internet', '2023-12-18 18:42:10', -0.40, 154, '2023-12-18 22:42:10', '2023-12-18 22:42:10'),
(392, 'Asistente-Virtual', 'Te daremos una serie de pasos para ayudarte a reestablecer el servicio de internet.', '2023-12-18 18:42:10', 0.00, 154, '2023-12-18 22:42:10', '2023-12-18 22:42:10'),
(393, 'Pablo Bustos', 'si', '2023-12-18 18:42:26', 0.65, 154, '2023-12-18 22:42:26', '2023-12-18 22:42:26'),
(394, 'Asistente-Virtual', 'Genial, puedes realizar este paso la próxima ves q tengas problemas con tu servicio de internet.', '2023-12-18 18:42:26', 0.00, 154, '2023-12-18 22:42:26', '2023-12-18 22:42:26'),
(395, 'Pablo Bustos', 'Quiero contratar el plan estándar', '2023-12-18 18:42:52', 0.55, 155, '2023-12-18 22:42:52', '2023-12-18 22:42:52'),
(396, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-18 18:42:52', 0.00, 155, '2023-12-18 22:42:52', '2023-12-18 22:42:52'),
(397, 'Pablo Bustos', 'servicio de internet', '2023-12-18 18:43:00', 0.60, 155, '2023-12-18 22:43:00', '2023-12-18 22:43:00'),
(398, 'Asistente-Virtual', 'Los planes de internet que podemos ofrecerte son los siguientes:', '2023-12-18 18:43:00', 0.00, 155, '2023-12-18 22:43:00', '2023-12-18 22:43:00'),
(399, 'Pablo Bustos', 'plan estandar', '2023-12-18 18:43:07', 0.55, 155, '2023-12-18 22:43:07', '2023-12-18 22:43:07'),
(400, 'Asistente-Virtual', 'Elegiste el PLAN ESTANDAR, estos son los datos que tenemos registrados de tu persona.', '2023-12-18 18:43:07', 0.00, 155, '2023-12-18 22:43:07', '2023-12-18 22:43:07'),
(401, 'Pier Vaca', 'tengo problemas con mi internet', '2023-12-18 20:04:18', -0.80, 158, '2023-12-19 00:04:18', '2023-12-19 00:04:18'),
(402, 'Asistente-Virtual', 'Te daremos una serie de pasos para ayudarte a reestablecer el servicio de internet.', '2023-12-18 20:04:18', 0.00, 158, '2023-12-19 00:04:18', '2023-12-19 00:04:18'),
(403, 'Pier Vaca', 'si', '2023-12-18 20:05:01', 0.65, 158, '2023-12-19 00:05:01', '2023-12-19 00:05:01'),
(404, 'Asistente-Virtual', 'Genial, puedes realizar este paso la próxima ves q tengas problemas con tu servicio de internet.', '2023-12-18 20:05:01', 0.00, 158, '2023-12-19 00:05:01', '2023-12-19 00:05:01'),
(405, 'Administrador', 'Tengo problemas con mi Internet.', '2023-12-18 20:05:28', -0.80, 159, '2023-12-19 00:05:28', '2023-12-19 00:05:28'),
(406, 'Asistente-Virtual', 'Te daremos una serie de pasos para ayudarte a reestablecer el servicio de internet.', '2023-12-18 20:05:28', 0.00, 159, '2023-12-19 00:05:28', '2023-12-19 00:05:28'),
(407, 'Administrador', 'No no solucionó el problema.', '2023-12-18 20:05:39', -0.40, 159, '2023-12-19 00:05:39', '2023-12-19 00:05:39'),
(408, 'Asistente-Virtual', 'No logré identificar tu consulta.', '2023-12-18 20:05:39', 0.00, 159, '2023-12-19 00:05:39', '2023-12-19 00:05:39'),
(409, 'Administrador', 'Sigo sin Internet.', '2023-12-18 20:05:50', -0.30, 159, '2023-12-19 00:05:50', '2023-12-19 00:05:50'),
(410, 'Asistente-Virtual', 'Lamento que sigas teniendo problemas con el servicio de internet, intentaremos este ultimo paso:', '2023-12-18 20:05:50', 0.00, 159, '2023-12-19 00:05:50', '2023-12-19 00:05:50'),
(411, 'Administrador', 'Sí soluciona el problema.', '2023-12-18 20:06:05', 0.60, 159, '2023-12-19 00:06:05', '2023-12-19 00:06:05'),
(412, 'Asistente-Virtual', 'No logré identificar tu consulta.', '2023-12-18 20:06:05', 0.00, 159, '2023-12-19 00:06:05', '2023-12-19 00:06:05'),
(413, 'Administrador', 'Sí se solucionó.', '2023-12-18 20:06:15', 0.75, 159, '2023-12-19 00:06:15', '2023-12-19 00:06:15'),
(414, 'Asistente-Virtual', 'Genial, pudimos restablecer el servicio de internet, gracias por comunicarte con nosotros.', '2023-12-18 20:06:15', 0.00, 159, '2023-12-19 00:06:15', '2023-12-19 00:06:15'),
(415, 'Pablo Bustos', '¿Qué servicios tiene?', '2023-12-18 20:07:17', 0.55, 160, '2023-12-19 00:07:17', '2023-12-19 00:07:17'),
(416, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-18 20:07:17', 0.00, 160, '2023-12-19 00:07:17', '2023-12-19 00:07:17'),
(417, 'Pablo Bustos', 'Servicio de Internet.', '2023-12-18 20:07:25', 0.55, 160, '2023-12-19 00:07:25', '2023-12-19 00:07:25'),
(418, 'Asistente-Virtual', 'Los planes de internet que podemos ofrecerte son los siguientes:', '2023-12-18 20:07:25', 0.00, 160, '2023-12-19 00:07:25', '2023-12-19 00:07:25'),
(419, 'Pablo Bustos', 'El plan explora.', '2023-12-18 20:07:35', 0.60, 160, '2023-12-19 00:07:35', '2023-12-19 00:07:35'),
(420, 'Asistente-Virtual', 'Elegiste el PLAN EXPLORA, estos son los datos que tenemos registrados de tu persona.', '2023-12-18 20:07:35', 0.00, 160, '2023-12-19 00:07:35', '2023-12-19 00:07:35'),
(421, 'Pablo Bustos', 'Quiero contratar un servicio.', '2023-12-19 18:38:30', 0.50, 163, '2023-12-19 22:38:30', '2023-12-19 22:38:30'),
(422, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-19 18:38:30', 0.00, 163, '2023-12-19 22:38:30', '2023-12-19 22:38:30'),
(423, 'Pablo Bustos', 'Quiero el servicio de Internet.', '2023-12-19 18:38:39', 0.50, 163, '2023-12-19 22:38:39', '2023-12-19 22:38:39'),
(424, 'Asistente-Virtual', 'Los planes de internet que podemos ofrecerte son los siguientes:', '2023-12-19 18:38:39', 0.00, 163, '2023-12-19 22:38:39', '2023-12-19 22:38:39'),
(425, 'Pablo Bustos', 'El plan avanzado.', '2023-12-19 18:38:50', 0.75, 163, '2023-12-19 22:38:50', '2023-12-19 22:38:50'),
(426, 'Asistente-Virtual', 'Elegiste el PLAN Avanzado, estos son los datos que tenemos registrados de tu persona.', '2023-12-19 18:38:50', 0.00, 163, '2023-12-19 22:38:50', '2023-12-19 22:38:50'),
(427, 'Pablo Bustos', 'Quiero contratar servicio de llamadas.', '2023-12-19 18:40:47', 0.50, 164, '2023-12-19 22:40:47', '2023-12-19 22:40:47'),
(428, 'Asistente-Virtual', '¿Qué tipo de servicio le interesaría?', '2023-12-19 18:40:47', 0.00, 164, '2023-12-19 22:40:47', '2023-12-19 22:40:47'),
(429, 'Pablo Bustos', 'Servicio de telefonía.', '2023-12-19 18:40:55', 0.55, 164, '2023-12-19 22:40:55', '2023-12-19 22:40:55'),
(430, 'Asistente-Virtual', 'Estos los planes de telefonía que tenemos para ofrecerte:', '2023-12-19 18:40:55', 0.00, 164, '2023-12-19 22:40:55', '2023-12-19 22:40:55'),
(431, 'Pablo Bustos', 'El plan básico.', '2023-12-19 18:41:06', 0.60, 164, '2023-12-19 22:41:06', '2023-12-19 22:41:06'),
(432, 'Asistente-Virtual', 'El plan de llamadas basico se habilitara en 5 minutos para el usuario:', '2023-12-19 18:41:06', 0.00, 164, '2023-12-19 22:41:06', '2023-12-19 22:41:06'),
(433, 'Pablo Bustos', 'Quiero contratar el plan básico.', '2023-12-19 18:42:37', 0.65, 165, '2023-12-19 22:42:37', '2023-12-19 22:42:37'),
(434, 'Asistente-Virtual', 'El plan de llamadas basico se habilitara en 5 minutos para el usuario:', '2023-12-19 18:42:37', 0.00, 165, '2023-12-19 22:42:37', '2023-12-19 22:42:37'),
(435, 'Pablo Bustos', 'Quiero contratar el plan estándar.', '2023-12-19 18:43:04', 0.55, 166, '2023-12-19 22:43:04', '2023-12-19 22:43:04'),
(436, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-19 18:43:04', 0.00, 166, '2023-12-19 22:43:04', '2023-12-19 22:43:04'),
(437, 'Pablo Bustos', 'Quiero contratar el plan de Internet.', '2023-12-19 18:43:15', 0.55, 166, '2023-12-19 22:43:15', '2023-12-19 22:43:15'),
(438, 'Asistente-Virtual', 'Los planes de internet que podemos ofrecerte son los siguientes:', '2023-12-19 18:43:15', 0.00, 166, '2023-12-19 22:43:15', '2023-12-19 22:43:15'),
(439, 'Pablo Bustos', 'El plan estándar.', '2023-12-19 18:43:23', 0.55, 166, '2023-12-19 22:43:23', '2023-12-19 22:43:23'),
(440, 'Asistente-Virtual', 'Elegiste el PLAN ESTANDAR, estos son los datos que tenemos registrados de tu persona.', '2023-12-19 18:43:23', 0.00, 166, '2023-12-19 22:43:23', '2023-12-19 22:43:23'),
(441, 'Pablo Bustos', 'Quiero contratar un servicio de Internet.', '2023-12-19 18:45:07', 0.50, 167, '2023-12-19 22:45:07', '2023-12-19 22:45:07'),
(442, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-19 18:45:07', 0.00, 167, '2023-12-19 22:45:07', '2023-12-19 22:45:07'),
(443, 'Pablo Bustos', 'Servicio de Internet.', '2023-12-19 18:45:15', 0.55, 167, '2023-12-19 22:45:15', '2023-12-19 22:45:15'),
(444, 'Asistente-Virtual', 'Los planes de internet que podemos ofrecerte son los siguientes:', '2023-12-19 18:45:15', 0.00, 167, '2023-12-19 22:45:15', '2023-12-19 22:45:15'),
(445, 'Pablo Bustos', 'El plan estándar.', '2023-12-19 18:45:25', 0.55, 167, '2023-12-19 22:45:25', '2023-12-19 22:45:25'),
(446, 'Asistente-Virtual', 'Elegiste el PLAN ESTANDAR, estos son los datos que tenemos registrados de tu persona.', '2023-12-19 18:45:25', 0.00, 167, '2023-12-19 22:45:25', '2023-12-19 22:45:25'),
(447, 'Pablo Bustos', '¿Qué servicios tienes?', '2023-12-19 18:48:02', 0.55, 168, '2023-12-19 22:48:02', '2023-12-19 22:48:02'),
(448, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-19 18:48:02', 0.00, 168, '2023-12-19 22:48:02', '2023-12-19 22:48:02'),
(449, 'Pablo Bustos', '¿Qué servicios de Internet tiene?', '2023-12-19 18:48:09', 0.55, 168, '2023-12-19 22:48:09', '2023-12-19 22:48:09'),
(450, 'Asistente-Virtual', 'Genial!, contamos con los siguientes planes de internet:', '2023-12-19 18:48:09', 0.00, 168, '2023-12-19 22:48:09', '2023-12-19 22:48:09'),
(451, 'Pablo Bustos', 'El plan estándar.', '2023-12-19 18:48:19', 0.55, 168, '2023-12-19 22:48:19', '2023-12-19 22:48:19'),
(452, 'Asistente-Virtual', 'Elegiste el PLAN ESTANDAR, estos son los datos que tenemos registrados de tu persona.', '2023-12-19 18:48:19', 0.00, 168, '2023-12-19 22:48:19', '2023-12-19 22:48:19'),
(453, 'María Rodríguez', 'Tengo problemas de Internet.', '2023-12-19 18:50:39', -0.70, 170, '2023-12-19 22:50:39', '2023-12-19 22:50:39'),
(454, 'Asistente-Virtual', 'Te daremos una serie de pasos para ayudarte a reestablecer el servicio de internet.', '2023-12-19 18:50:39', 0.00, 170, '2023-12-19 22:50:39', '2023-12-19 22:50:39'),
(455, 'María Rodríguez', 'No.', '2023-12-19 18:50:53', -0.60, 170, '2023-12-19 22:50:53', '2023-12-19 22:50:53'),
(456, 'Asistente-Virtual', 'Lamento que sigas teniendo problemas con el servicio de internet, intentaremos este ultimo paso:', '2023-12-19 18:50:53', 0.00, 170, '2023-12-19 22:50:53', '2023-12-19 22:50:53'),
(457, 'María Rodríguez', 'Sí se soluciona el problema.', '2023-12-19 18:51:04', 0.55, 170, '2023-12-19 22:51:04', '2023-12-19 22:51:04'),
(458, 'Asistente-Virtual', 'Genial, pudimos restablecer el servicio de internet, gracias por comunicarte con nosotros.', '2023-12-19 18:51:04', 0.00, 170, '2023-12-19 22:51:04', '2023-12-19 22:51:04'),
(459, 'Pablo Bustos', '¿Qué servicios de Internet tiene?', '2023-12-19 18:54:06', 0.55, 171, '2023-12-19 22:54:06', '2023-12-19 22:54:06'),
(460, 'Asistente-Virtual', 'No logré identificar tu consulta.', '2023-12-19 18:54:06', 0.00, 171, '2023-12-19 22:54:06', '2023-12-19 22:54:06'),
(461, 'Pablo Bustos', '¿Qué planes de Internet tiene?', '2023-12-19 18:54:16', 0.55, 171, '2023-12-19 22:54:16', '2023-12-19 22:54:16'),
(462, 'Asistente-Virtual', 'No logré identificar tu consulta.', '2023-12-19 18:54:16', 0.00, 171, '2023-12-19 22:54:16', '2023-12-19 22:54:16'),
(463, 'Pablo Bustos', 'Sus servicios de Internet.', '2023-12-19 18:54:33', 0.65, 171, '2023-12-19 22:54:33', '2023-12-19 22:54:33'),
(464, 'Asistente-Virtual', '¿Qué tipo de servicio le interesaría?', '2023-12-19 18:54:33', 0.00, 171, '2023-12-19 22:54:33', '2023-12-19 22:54:33'),
(465, 'Pablo Bustos', '¿Qué planes o servicios tiene para ofrecerme?', '2023-12-19 18:54:56', 0.55, 171, '2023-12-19 22:54:56', '2023-12-19 22:54:56'),
(466, 'Asistente-Virtual', 'Para brindarte la información necesaria, podrías decirme ¿Qué servicio te interesa?', '2023-12-19 18:54:56', 0.00, 171, '2023-12-19 22:54:56', '2023-12-19 22:54:56'),
(467, 'Pablo Bustos', 'que planes o promociones tiene para ofrecerme', '2023-12-19 18:55:13', 0.70, 171, '2023-12-19 22:55:13', '2023-12-19 22:55:13'),
(468, 'Asistente-Virtual', '¿Qué tipo de servicio le interesaría?', '2023-12-19 18:55:13', 0.00, 171, '2023-12-19 22:55:13', '2023-12-19 22:55:13'),
(469, 'Pablo Bustos', 'Su servicio de Internet.', '2023-12-19 18:55:33', 0.75, 171, '2023-12-19 22:55:33', '2023-12-19 22:55:33'),
(470, 'Asistente-Virtual', 'Estos planes de Internet, tenemos para ti:', '2023-12-19 18:55:33', 0.00, 171, '2023-12-19 22:55:33', '2023-12-19 22:55:33'),
(471, 'Pablo Bustos', '¿Qué planes de Internet tienes?', '2023-12-19 18:56:10', 0.55, 172, '2023-12-19 22:56:10', '2023-12-19 22:56:10'),
(472, 'Asistente-Virtual', 'Elegiste el PLAN LIBRE, estos datos tenemos registrados de tu persona', '2023-12-19 18:56:10', 0.00, 172, '2023-12-19 22:56:10', '2023-12-19 22:56:10'),
(473, 'Pablo Bustos', '¿Qué servicios tiene?', '2023-12-19 18:56:30', 0.55, 173, '2023-12-19 22:56:30', '2023-12-19 22:56:30'),
(474, 'Asistente-Virtual', '¿Qué tipo de servicio le interesaría?', '2023-12-19 18:56:30', 0.00, 173, '2023-12-19 22:56:30', '2023-12-19 22:56:30'),
(475, 'Pablo Bustos', 'Servicio de Internet.', '2023-12-19 18:56:38', 0.55, 173, '2023-12-19 22:56:38', '2023-12-19 22:56:38'),
(476, 'Asistente-Virtual', 'Estos planes de Internet, tenemos para ti:', '2023-12-19 18:56:38', 0.00, 173, '2023-12-19 22:56:38', '2023-12-19 22:56:38'),
(477, 'Pablo Bustos', 'El plan libre.', '2023-12-19 18:56:46', 0.75, 173, '2023-12-19 22:56:46', '2023-12-19 22:56:46'),
(478, 'Asistente-Virtual', 'Elegiste el PLAN LIBRE, estos datos tenemos registrados de tu persona', '2023-12-19 18:56:46', 0.00, 173, '2023-12-19 22:56:46', '2023-12-19 22:56:46'),
(479, 'Pablo Bustos', 'Quiero contratar un servicio.', '2023-12-19 19:02:38', 0.50, 175, '2023-12-19 23:02:38', '2023-12-19 23:02:38'),
(480, 'Asistente-Virtual', '¿Qué tipo de servicio le interesaría?', '2023-12-19 19:02:38', 0.00, 175, '2023-12-19 23:02:38', '2023-12-19 23:02:38'),
(481, 'Pablo Bustos', 'Servicio de Internet.', '2023-12-19 19:02:45', 0.55, 175, '2023-12-19 23:02:45', '2023-12-19 23:02:45'),
(482, 'Asistente-Virtual', 'Estos planes de Internet, tenemos para ti:', '2023-12-19 19:02:45', 0.00, 175, '2023-12-19 23:02:45', '2023-12-19 23:02:45'),
(483, 'Pablo Bustos', 'El plan estándar.', '2023-12-19 19:02:54', 0.55, 175, '2023-12-19 23:02:54', '2023-12-19 23:02:54'),
(484, 'Asistente-Virtual', 'Elegiste el PLAN ESTANDAR, estos son los datos que tenemos registrados de tu persona.', '2023-12-19 19:02:54', 0.00, 175, '2023-12-19 23:02:54', '2023-12-19 23:02:54');

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
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `estado` varchar(191) NOT NULL,
  `nombre_facturacion` varchar(191) NOT NULL,
  `nit` varchar(191) NOT NULL,
  `id_servicio_contratado` bigint(20) UNSIGNED DEFAULT NULL,
  `id_usuario` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contrato`
--

INSERT INTO `contrato` (`id`, `fecha_inicio`, `fecha_fin`, `estado`, `nombre_facturacion`, `nit`, `id_servicio_contratado`, `id_usuario`, `created_at`, `updated_at`) VALUES
(1, '2023-12-13', NULL, 'Activo', 'Pablo Bustos', '5214521', 1, 2, '2023-12-13 19:42:39', '2023-12-13 19:42:39'),
(2, '2023-12-13', NULL, 'Activo', 'Pablo Bustos', '5214521', 2, 2, '2023-12-13 19:56:35', '2023-12-13 19:56:35'),
(3, '2023-12-13', NULL, 'Activo', 'Pablo Bustos', '5214521', 3, 2, '2023-12-13 19:58:43', '2023-12-13 19:58:43'),
(4, '2023-12-13', NULL, 'Activo', 'Pablo Bustos', '5214521', 4, 2, '2023-12-13 20:00:45', '2023-12-13 20:00:45'),
(5, '2023-12-13', NULL, 'Activo', 'Pablo Bustos', '5214521', 5, 2, '2023-12-13 20:04:06', '2023-12-13 20:04:06'),
(6, '2023-12-13', NULL, 'Activo', 'Pablo Bustos', '5214521', 6, 2, '2023-12-13 20:09:24', '2023-12-13 20:09:24'),
(7, '2023-12-13', NULL, 'Activo', 'Pablo Bustos', '5214521', 7, 2, '2023-12-13 20:11:32', '2023-12-13 20:11:32'),
(8, '2023-12-13', NULL, 'Activo', 'Pier Vaca', '6325418', 8, 6, '2023-12-13 20:28:28', '2023-12-13 20:28:28'),
(9, '2023-12-13', NULL, 'Activo', 'Pier Vaca', '6325418', 9, 6, '2023-12-13 20:29:49', '2023-12-13 20:29:49'),
(10, '2023-12-13', NULL, 'Activo', 'Pier Vaca', '6325418', 10, 6, '2023-12-13 20:38:15', '2023-12-13 20:38:15'),
(11, '2023-12-13', NULL, 'Activo', 'Pier Vaca', '6325418', 11, 6, '2023-12-13 20:50:51', '2023-12-13 20:50:51'),
(12, '2023-12-13', NULL, 'Activo', 'Pier Vaca', '6325418', 12, 6, '2023-12-13 21:18:09', '2023-12-13 21:18:09'),
(13, '2023-12-13', NULL, 'Activo', 'Pier Vaca', '6325418', 13, 6, '2023-12-13 21:20:43', '2023-12-13 21:20:43'),
(14, '2023-12-17', NULL, 'Activo', 'Pablo Bustos', '5214521', 14, 2, '2023-12-17 14:44:16', '2023-12-17 14:44:16'),
(15, '2023-12-17', NULL, 'Activo', 'Pablo Bustos', '5214521', 15, 2, '2023-12-17 14:53:06', '2023-12-17 14:53:06'),
(16, '2023-12-17', NULL, 'Activo', 'Pablo Bustos', '5214521', 16, 2, '2023-12-17 15:17:29', '2023-12-17 15:17:29'),
(17, '2023-12-17', NULL, 'Activo', 'Pablo Bustos', '5214521', 17, 2, '2023-12-18 03:00:12', '2023-12-18 03:00:12'),
(18, '2023-12-18', NULL, 'Activo', 'Pier Vaca', '6325418', 18, 6, '2023-12-18 13:33:16', '2023-12-18 13:33:16'),
(19, '2023-12-18', NULL, 'Activo', 'Pier Vaca', '6325418', 19, 6, '2023-12-18 15:30:07', '2023-12-18 15:30:07'),
(20, '2023-12-18', NULL, 'Activo', 'Pier Vaca', '6325418', 20, 6, '2023-12-18 15:41:05', '2023-12-18 15:41:05'),
(21, '2023-12-18', NULL, 'Activo', 'Pier Vaca', '6325418', 21, 6, '2023-12-18 16:05:38', '2023-12-18 16:05:38'),
(22, '2023-12-18', NULL, 'Activo', 'Pier Vaca', '6325418', 22, 6, '2023-12-18 16:11:50', '2023-12-18 16:11:50'),
(23, '2023-12-18', NULL, 'Activo', 'María Rodríguez', '1254123', 23, 7, '2023-12-18 16:16:44', '2023-12-18 16:16:44'),
(24, '2023-12-18', NULL, 'Activo', 'María Rodríguez', '1254123', 24, 7, '2023-12-18 16:24:57', '2023-12-18 16:24:57'),
(25, '2023-12-18', NULL, 'Activo', 'María Rodríguez', '1254123', 25, 7, '2023-12-18 16:27:00', '2023-12-18 16:27:00'),
(26, '2023-12-18', NULL, 'Activo', 'María Rodríguez', '1254123', 26, 7, '2023-12-18 16:28:21', '2023-12-18 16:28:21'),
(27, '2023-12-18', NULL, 'Activo', 'María Rodríguez', '1254123', 27, 7, '2023-12-18 16:36:04', '2023-12-18 16:36:04'),
(28, '2023-12-18', NULL, 'Activo', 'Pier Vaca', '6325418', 28, 6, '2023-12-18 20:00:27', '2023-12-18 20:00:27'),
(29, '2023-12-18', NULL, 'Activo', 'Pier Vaca', '6325418', 29, 6, '2023-12-18 20:02:45', '2023-12-18 20:02:45'),
(30, '2023-12-18', NULL, 'Activo', 'María Rodríguez', '1254123', 30, 7, '2023-12-18 20:04:07', '2023-12-18 20:04:07'),
(31, '2023-12-18', NULL, 'Activo', 'María Rodríguez', '1254123', 31, 7, '2023-12-18 20:08:46', '2023-12-18 20:08:46'),
(32, '2023-12-18', NULL, 'Activo', 'Pier Vaca', '6325418', 32, 6, '2023-12-18 20:16:01', '2023-12-18 20:16:01'),
(33, '2023-12-18', NULL, 'Activo', 'Pier Vaca', '6325418', 33, 6, '2023-12-18 20:17:44', '2023-12-18 20:17:44'),
(34, '2023-12-18', NULL, 'Activo', 'Pier Vaca', '6325418', 34, 6, '2023-12-18 20:26:32', '2023-12-18 20:26:32'),
(35, '2023-12-18', NULL, 'Activo', 'Pier Vaca', '6325418', 35, 6, '2023-12-18 20:28:16', '2023-12-18 20:28:16'),
(36, '2023-12-18', NULL, 'Activo', 'Pier Vaca', '6325418', 36, 6, '2023-12-18 20:31:39', '2023-12-18 20:31:39'),
(37, '2023-12-18', NULL, 'Activo', 'María Rodríguez', '1254123', 37, 7, '2023-12-18 21:45:08', '2023-12-18 21:45:08'),
(38, '2023-12-18', NULL, 'Activo', 'Pablo Bustos', '5214521', 38, 2, '2023-12-18 22:43:07', '2023-12-18 22:43:07'),
(39, '2023-12-18', NULL, 'Activo', 'Pablo Bustos', '5214521', 39, 2, '2023-12-19 00:07:35', '2023-12-19 00:07:35'),
(40, '2023-12-19', NULL, 'Activo', 'Pablo Bustos', '5214521', 40, 2, '2023-12-19 22:38:50', '2023-12-19 22:38:50'),
(41, '2023-12-19', NULL, 'Activo', 'Pablo Bustos', '5214521', 41, 2, '2023-12-19 22:41:06', '2023-12-19 22:41:06'),
(42, '2023-12-19', NULL, 'Activo', 'Pablo Bustos', '5214521', 42, 2, '2023-12-19 22:42:37', '2023-12-19 22:42:37'),
(43, '2023-12-19', NULL, 'Activo', 'Pablo Bustos', '5214521', 43, 2, '2023-12-19 22:43:23', '2023-12-19 22:43:23'),
(44, '2023-12-19', NULL, 'Activo', 'Pablo Bustos', '5214521', 44, 2, '2023-12-19 22:45:25', '2023-12-19 22:45:25'),
(45, '2023-12-19', NULL, 'Activo', 'Pablo Bustos', '5214521', 45, 2, '2023-12-19 22:48:19', '2023-12-19 22:48:19'),
(46, '2023-12-19', NULL, 'Activo', 'Pablo Bustos', '5214521', 46, 2, '2023-12-19 22:56:10', '2023-12-19 22:56:10'),
(47, '2023-12-19', NULL, 'Activo', 'Pablo Bustos', '5214521', 47, 2, '2023-12-19 22:56:46', '2023-12-19 22:56:46'),
(48, '2023-12-19', NULL, 'Activo', 'Pablo Bustos', '5214521', 48, 2, '2023-12-19 23:02:54', '2023-12-19 23:02:54');

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

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id`, `fecha`, `monto`, `id_servicio_contratado`, `created_at`, `updated_at`) VALUES
(1, '2023-12-16', 199, 15, '2023-12-17 14:53:06', '2023-12-17 14:53:06'),
(2, '2023-12-17', 199, 16, '2023-12-17 15:17:29', '2023-12-17 15:17:29'),
(3, '2023-12-17', 129, 17, '2023-12-18 03:00:12', '2023-12-18 03:00:12'),
(4, '2023-12-18', 129, 18, '2023-12-18 13:33:16', '2023-12-18 13:33:16'),
(5, '2023-12-18', 129, 19, '2023-12-18 15:30:07', '2023-12-18 15:30:07'),
(6, '2023-12-18', 129, 20, '2023-12-18 15:41:05', '2023-12-18 15:41:05'),
(7, '2023-12-18', 129, 21, '2023-12-18 16:05:38', '2023-12-18 16:05:38'),
(8, '2023-12-18', 129, 22, '2023-12-18 16:11:50', '2023-12-18 16:11:50'),
(9, '2023-12-18', 129, 23, '2023-12-18 16:16:44', '2023-12-18 16:16:44'),
(10, '2023-12-18', 129, 24, '2023-12-18 16:24:57', '2023-12-18 16:24:57'),
(11, '2023-12-18', 129, 25, '2023-12-18 16:27:00', '2023-12-18 16:27:00'),
(12, '2023-12-18', 129, 26, '2023-12-18 16:28:21', '2023-12-18 16:28:21'),
(13, '2023-12-18', 129, 27, '2023-12-18 16:36:04', '2023-12-18 16:36:04'),
(14, '2023-12-18', 129, 28, '2023-12-18 20:00:27', '2023-12-18 20:00:27'),
(15, '2023-12-18', 129, 29, '2023-12-18 20:02:45', '2023-12-18 20:02:45'),
(16, '2023-12-18', 129, 30, '2023-12-18 20:04:07', '2023-12-18 20:04:07'),
(17, '2023-12-18', 129, 31, '2023-12-18 20:08:46', '2023-12-18 20:08:46'),
(18, '2023-12-18', 129, 32, '2023-12-18 20:16:01', '2023-12-18 20:16:01'),
(19, '2023-12-18', 129, 33, '2023-12-18 20:17:44', '2023-12-18 20:17:44'),
(20, '2023-12-18', 139, 34, '2023-12-18 20:26:32', '2023-12-18 20:26:32'),
(21, '2023-12-18', 99, 35, '2023-12-18 20:28:16', '2023-12-18 20:28:16'),
(22, '2023-12-18', 99, 36, '2023-12-18 20:31:39', '2023-12-18 20:31:39'),
(23, '2023-12-18', 99, 37, '2023-12-18 21:45:08', '2023-12-18 21:45:08'),
(24, '2023-12-18', 129, 38, '2023-12-18 22:43:07', '2023-12-18 22:43:07'),
(25, '2023-12-18', 199, 39, '2023-12-19 00:07:35', '2023-12-19 00:07:35'),
(26, '2023-12-19', 139, 40, '2023-12-19 22:38:50', '2023-12-19 22:38:50'),
(27, '2023-12-19', 99, 41, '2023-12-19 22:41:06', '2023-12-19 22:41:06'),
(28, '2023-12-19', 99, 42, '2023-12-19 22:42:37', '2023-12-19 22:42:37'),
(29, '2023-12-19', 129, 43, '2023-12-19 22:43:23', '2023-12-19 22:43:23'),
(30, '2023-12-19', 129, 44, '2023-12-19 22:45:25', '2023-12-19 22:45:25'),
(31, '2023-12-19', 129, 45, '2023-12-19 22:48:19', '2023-12-19 22:48:19'),
(32, '2023-12-19', 249, 46, '2023-12-19 22:56:10', '2023-12-19 22:56:10'),
(33, '2023-12-19', 249, 47, '2023-12-19 22:56:46', '2023-12-19 22:56:46'),
(34, '2023-12-19', 129, 48, '2023-12-19 23:02:54', '2023-12-19 23:02:54');

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
  `descripcion` text DEFAULT NULL,
  `id_tipo_servicio_tecnico` bigint(20) UNSIGNED DEFAULT NULL,
  `id_usuario` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `interaccion`
--

INSERT INTO `interaccion` (`id`, `fecha`, `descripcion`, `id_tipo_servicio_tecnico`, `id_usuario`, `created_at`, `updated_at`) VALUES
(1, '2023-10-13', '62.50 %', 1, 2, '2023-12-13 19:34:11', '2023-12-13 19:42:39'),
(2, '2023-10-13', '66.67 %', 1, 2, '2023-12-13 19:44:20', '2023-12-13 19:56:35'),
(3, '2023-11-13', '58.33 %', 1, 2, '2023-12-13 19:57:05', '2023-12-13 19:58:43'),
(4, '2023-11-13', NULL, NULL, 2, '2023-12-13 19:58:57', '2023-12-13 19:58:57'),
(5, '2023-11-13', '60.00 %', 1, 2, '2023-12-13 20:00:21', '2023-12-13 20:00:45'),
(6, '2023-12-13', NULL, NULL, 2, '2023-12-13 20:01:47', '2023-12-13 20:01:47'),
(7, '2023-12-13', NULL, NULL, 2, '2023-12-13 20:03:23', '2023-12-13 20:03:23'),
(8, '2023-12-13', '55.00 %', 1, 2, '2023-12-13 20:03:33', '2023-12-13 20:04:06'),
(9, '2023-12-13', '58.33 %', 1, 2, '2023-12-13 20:09:02', '2023-12-13 20:09:24'),
(10, '2023-12-13', '61.67 %', 1, 2, '2023-12-13 20:10:04', '2023-12-13 20:11:32'),
(11, '2023-12-13', NULL, NULL, 2, '2023-12-13 20:11:40', '2023-12-13 20:11:40'),
(12, '2023-12-13', NULL, NULL, 2, '2023-12-13 20:18:40', '2023-12-13 20:18:40'),
(13, '2023-12-13', '66.25 %', 1, 6, '2023-12-13 20:27:55', '2023-12-13 20:29:49'),
(14, '2023-12-13', NULL, NULL, 6, '2023-12-13 20:31:48', '2023-12-13 20:31:48'),
(15, '2023-12-13', '63.75 %', 1, 6, '2023-12-13 20:33:46', '2023-12-13 20:38:15'),
(16, '2023-12-13', NULL, NULL, 6, '2023-12-13 20:42:23', '2023-12-13 20:42:23'),
(17, '2023-10-13', '60.00 %', 3, 6, '2023-12-13 20:48:33', '2023-12-13 20:48:41'),
(18, '2023-10-13', '61.67 %', 1, 6, '2023-12-13 20:50:26', '2023-12-13 20:50:51'),
(19, '2023-11-13', NULL, NULL, 6, '2023-12-13 20:50:58', '2023-12-13 20:50:58'),
(20, '2023-12-13', NULL, NULL, 6, '2023-12-13 21:13:31', '2023-12-13 21:13:31'),
(21, '2023-12-13', NULL, NULL, 6, '2023-12-13 21:15:27', '2023-12-13 21:15:27'),
(22, '2023-12-13', NULL, NULL, 6, '2023-12-13 21:16:03', '2023-12-13 21:16:03'),
(23, '2023-11-13', '35.00 %', 1, 6, '2023-12-13 21:17:39', '2023-12-13 21:18:09'),
(24, '2023-12-13', '58.75 %', 1, 6, '2023-12-13 21:20:01', '2023-12-13 21:20:43'),
(25, '2023-12-13', NULL, NULL, 2, '2023-12-13 21:30:04', '2023-12-13 21:30:04'),
(26, '2023-12-13', '-50.00 %', 3, 2, '2023-12-13 21:44:41', '2023-12-13 21:44:58'),
(27, '2023-12-15', '-70.00 %', 4, 2, '2023-12-15 15:46:15', '2023-12-15 15:46:31'),
(28, '2023-12-15', NULL, NULL, 2, '2023-12-15 16:40:18', '2023-12-15 16:40:18'),
(29, '2023-12-15', NULL, NULL, 2, '2023-12-15 17:55:01', '2023-12-15 17:55:01'),
(30, '2023-12-15', NULL, NULL, 2, '2023-12-15 17:56:42', '2023-12-15 17:56:42'),
(31, '2023-12-15', NULL, NULL, 2, '2023-12-15 17:57:35', '2023-12-15 17:57:35'),
(32, '2023-12-15', NULL, NULL, 2, '2023-12-15 17:57:49', '2023-12-15 17:57:49'),
(33, '2023-11-15', '67.50 %', 2, 2, '2023-12-15 17:57:58', '2023-12-15 17:58:47'),
(34, '2023-12-16', NULL, NULL, 2, '2023-12-16 14:07:31', '2023-12-16 14:07:31'),
(35, '2023-12-17', NULL, NULL, 2, '2023-12-17 14:14:16', '2023-12-17 14:14:16'),
(36, '2023-12-17', NULL, NULL, 2, '2023-12-17 14:14:17', '2023-12-17 14:14:17'),
(37, '2023-12-17', '66.67 %', 2, 2, '2023-12-17 14:19:26', '2023-12-17 14:20:17'),
(38, '2023-12-17', '58.33 %', 1, 2, '2023-12-17 14:21:09', '2023-12-17 14:33:54'),
(39, '2023-12-17', '50.00 %', 2, 2, '2023-12-17 14:34:05', '2023-12-17 14:34:26'),
(40, '2023-12-17', '80.00 %', 2, 2, '2023-12-17 14:43:27', '2023-12-17 14:53:06'),
(41, '2023-12-17', NULL, NULL, 2, '2023-12-17 14:58:48', '2023-12-17 14:58:48'),
(42, '2023-12-17', NULL, NULL, 2, '2023-12-17 15:03:50', '2023-12-17 15:03:50'),
(43, '2023-12-17', NULL, NULL, 2, '2023-12-17 15:05:11', '2023-12-17 15:05:11'),
(44, '2023-12-17', NULL, NULL, 2, '2023-12-17 15:08:57', '2023-12-17 15:08:57'),
(45, '2023-12-17', NULL, NULL, 2, '2023-12-17 15:09:33', '2023-12-17 15:09:33'),
(46, '2023-12-17', '60.00 %', 1, 2, '2023-12-17 15:10:42', '2023-12-17 15:10:52'),
(47, '2023-12-17', '60.00 %', 1, 2, '2023-12-17 15:12:18', '2023-12-17 15:12:31'),
(48, '2023-12-17', '60.00 %', 1, 2, '2023-12-17 15:13:01', '2023-12-17 15:13:05'),
(49, '2023-12-17', '61.67 %', 2, 2, '2023-12-17 15:16:11', '2023-12-17 15:17:29'),
(50, '2023-12-17', NULL, NULL, 2, '2023-12-17 15:17:49', '2023-12-17 15:17:49'),
(51, '2023-12-17', NULL, NULL, 2, '2023-12-17 16:35:34', '2023-12-17 16:35:34'),
(52, '2023-12-17', '-7.50 %', 4, 6, '2023-12-17 16:35:50', '2023-12-17 16:42:30'),
(53, '2023-12-17', '-70.00 %', 4, 6, '2023-12-17 16:42:36', '2023-12-17 16:42:40'),
(54, '2023-12-17', '-7.50 %', 4, 6, '2023-12-17 16:48:54', '2023-12-17 16:59:29'),
(55, '2023-12-17', '-2.50 %', 4, 6, '2023-12-17 16:59:41', '2023-12-17 17:01:22'),
(56, '2023-12-17', '-2.50 %', 4, 6, '2023-12-17 17:01:27', '2023-12-17 17:02:21'),
(57, '2023-12-17', NULL, NULL, 2, '2023-12-17 21:26:27', '2023-12-17 21:26:27'),
(58, '2023-12-17', NULL, NULL, 2, '2023-12-17 23:51:19', '2023-12-17 23:51:19'),
(59, '2023-12-17', '-18.33 %', 4, 6, '2023-12-18 00:02:14', '2023-12-18 00:03:44'),
(60, '2023-12-17', '-13.33 %', 4, 6, '2023-12-18 00:04:03', '2023-12-18 00:10:32'),
(61, '2023-12-17', '-40.00 %', 4, 7, '2023-12-18 01:07:48', '2023-12-18 01:08:30'),
(62, '2023-12-17', NULL, NULL, 2, '2023-12-18 02:55:45', '2023-12-18 02:55:45'),
(63, '2023-12-17', NULL, NULL, 2, '2023-12-18 02:55:45', '2023-12-18 02:55:45'),
(64, '2023-12-17', NULL, NULL, 2, '2023-12-18 02:55:45', '2023-12-18 02:55:45'),
(65, '2023-12-17', NULL, NULL, 2, '2023-12-18 02:55:45', '2023-12-18 02:55:45'),
(66, '2023-12-17', NULL, NULL, 2, '2023-12-18 02:55:45', '2023-12-18 02:55:45'),
(67, '2023-12-17', NULL, NULL, 2, '2023-12-18 02:55:45', '2023-12-18 02:55:45'),
(68, '2023-12-17', NULL, NULL, 2, '2023-12-18 02:55:45', '2023-12-18 02:55:45'),
(69, '2023-12-17', NULL, NULL, 2, '2023-12-18 02:55:45', '2023-12-18 02:55:45'),
(70, '2023-12-17', NULL, NULL, 2, '2023-12-18 02:55:45', '2023-12-18 02:55:45'),
(71, '2023-12-17', NULL, NULL, 2, '2023-12-18 02:55:56', '2023-12-18 02:55:56'),
(72, '2023-12-17', NULL, NULL, 2, '2023-12-18 02:55:57', '2023-12-18 02:55:57'),
(73, '2023-12-17', NULL, NULL, 2, '2023-12-18 02:55:57', '2023-12-18 02:55:57'),
(74, '2023-12-17', NULL, NULL, 2, '2023-12-18 02:55:57', '2023-12-18 02:55:57'),
(75, '2023-12-17', NULL, NULL, 2, '2023-12-18 02:55:57', '2023-12-18 02:55:57'),
(76, '2023-12-17', NULL, NULL, 2, '2023-12-18 02:55:57', '2023-12-18 02:55:57'),
(77, '2023-12-17', NULL, NULL, 2, '2023-12-18 02:55:57', '2023-12-18 02:55:57'),
(78, '2023-12-17', NULL, NULL, 2, '2023-12-18 02:55:57', '2023-12-18 02:55:57'),
(79, '2023-12-17', NULL, NULL, 2, '2023-12-18 02:55:57', '2023-12-18 02:55:57'),
(80, '2023-12-17', NULL, NULL, 2, '2023-12-18 02:56:31', '2023-12-18 02:56:31'),
(81, '2023-12-17', NULL, NULL, 2, '2023-12-18 02:56:31', '2023-12-18 02:56:31'),
(82, '2023-12-17', NULL, NULL, 2, '2023-12-18 02:56:31', '2023-12-18 02:56:31'),
(83, '2023-12-17', NULL, NULL, 2, '2023-12-18 02:56:31', '2023-12-18 02:56:31'),
(84, '2023-12-17', NULL, NULL, 2, '2023-12-18 02:56:31', '2023-12-18 02:56:31'),
(85, '2023-12-17', NULL, NULL, 2, '2023-12-18 02:56:31', '2023-12-18 02:56:31'),
(86, '2023-12-17', NULL, NULL, 2, '2023-12-18 02:56:31', '2023-12-18 02:56:31'),
(87, '2023-12-17', NULL, NULL, 2, '2023-12-18 02:56:31', '2023-12-18 02:56:31'),
(88, '2023-12-17', NULL, NULL, 2, '2023-12-18 02:56:31', '2023-12-18 02:56:31'),
(89, '2023-12-17', '60.00 %', 2, 2, '2023-12-18 02:57:17', '2023-12-18 03:00:12'),
(90, '2023-12-17', NULL, NULL, 2, '2023-12-18 03:00:19', '2023-12-18 03:00:19'),
(91, '2023-12-17', '65.00 %', 2, 2, '2023-12-18 03:02:07', '2023-12-18 03:02:22'),
(92, '2023-12-17', '60.00 %', 2, 2, '2023-12-18 03:03:25', '2023-12-18 03:03:51'),
(93, '2023-12-17', NULL, NULL, 2, '2023-12-18 03:05:16', '2023-12-18 03:05:16'),
(94, '2023-12-18', '55.00 %', 2, 6, '2023-12-18 13:32:23', '2023-12-18 13:33:05'),
(95, '2023-12-18', NULL, NULL, 6, '2023-12-18 13:33:46', '2023-12-18 13:33:46'),
(96, '2023-12-18', '-7.50 %', 4, 7, '2023-12-18 15:25:56', '2023-12-18 15:26:36'),
(97, '2023-12-18', '-60.00 %', 4, 7, '2023-12-18 15:26:43', '2023-12-18 15:27:30'),
(98, '2023-12-18', '54.00 %', 2, 6, '2023-12-18 15:28:42', '2023-12-18 15:30:07'),
(99, '2023-12-18', NULL, NULL, 6, '2023-12-18 15:30:52', '2023-12-18 15:30:52'),
(100, '2023-12-18', '56.25 %', 2, 6, '2023-12-18 15:40:09', '2023-12-18 15:41:05'),
(101, '2023-12-18', NULL, NULL, 6, '2023-12-18 15:45:14', '2023-12-18 15:45:14'),
(102, '2023-12-18', NULL, NULL, 6, '2023-12-18 15:45:23', '2023-12-18 15:45:23'),
(103, '2023-12-18', '-70.00 %', 4, 6, '2023-12-18 15:56:49', '2023-12-18 16:01:53'),
(104, '2023-12-18', NULL, NULL, 6, '2023-12-18 16:03:50', '2023-12-18 16:03:50'),
(105, '2023-12-18', '56.67 %', 2, 6, '2023-12-18 16:05:04', '2023-12-18 16:05:38'),
(106, '2023-12-18', NULL, NULL, 6, '2023-12-18 16:06:13', '2023-12-18 16:06:13'),
(107, '2023-12-18', NULL, NULL, 6, '2023-12-18 16:11:37', '2023-12-18 16:11:37'),
(108, '2023-12-18', NULL, NULL, 6, '2023-12-18 16:11:39', '2023-12-18 16:11:39'),
(109, '2023-12-18', '63.33 %', 2, 7, '2023-12-18 16:16:10', '2023-12-18 16:16:46'),
(110, '2023-12-18', NULL, NULL, 7, '2023-12-18 16:17:19', '2023-12-18 16:17:19'),
(111, '2023-12-18', '56.67 %', 2, 7, '2023-12-18 16:24:32', '2023-12-18 16:24:57'),
(112, '2023-12-18', '55.00 %', 2, 7, '2023-12-18 16:25:08', '2023-12-18 16:27:00'),
(113, '2023-12-18', '57.00 %', 2, 7, '2023-12-18 16:27:29', '2023-12-18 16:28:21'),
(114, '2023-12-18', NULL, NULL, 7, '2023-12-18 16:28:32', '2023-12-18 16:28:32'),
(115, '2023-12-18', '60.00 %', 2, 7, '2023-12-18 16:28:35', '2023-12-18 16:36:04'),
(116, '2023-12-18', '55.00 %', 2, 6, '2023-12-18 19:59:27', '2023-12-18 20:00:10'),
(117, '2023-12-18', NULL, NULL, 6, '2023-12-18 20:02:08', '2023-12-18 20:02:08'),
(118, '2023-12-18', '56.67 %', 2, 6, '2023-12-18 20:02:12', '2023-12-18 20:02:45'),
(119, '2023-12-18', NULL, NULL, 6, '2023-12-18 20:03:29', '2023-12-18 20:03:29'),
(120, '2023-12-18', '55.00 %', 2, 7, '2023-12-18 20:03:39', '2023-12-18 20:03:58'),
(121, '2023-12-18', NULL, NULL, 7, '2023-12-18 20:06:57', '2023-12-18 20:06:57'),
(122, '2023-12-18', NULL, NULL, 7, '2023-12-18 20:06:58', '2023-12-18 20:06:58'),
(123, '2023-12-18', NULL, NULL, 7, '2023-12-18 20:06:58', '2023-12-18 20:06:58'),
(124, '2023-12-18', NULL, NULL, 7, '2023-12-18 20:06:58', '2023-12-18 20:06:58'),
(125, '2023-12-18', NULL, NULL, 7, '2023-12-18 20:06:58', '2023-12-18 20:06:58'),
(126, '2023-12-18', NULL, NULL, 7, '2023-12-18 20:06:59', '2023-12-18 20:06:59'),
(127, '2023-12-18', NULL, NULL, 7, '2023-12-18 20:06:59', '2023-12-18 20:06:59'),
(128, '2023-12-18', NULL, NULL, 7, '2023-12-18 20:06:59', '2023-12-18 20:06:59'),
(129, '2023-12-18', NULL, NULL, 7, '2023-12-18 20:06:59', '2023-12-18 20:06:59'),
(130, '2023-12-18', NULL, NULL, 7, '2023-12-18 20:07:38', '2023-12-18 20:07:38'),
(131, '2023-12-18', NULL, NULL, 7, '2023-12-18 20:07:39', '2023-12-18 20:07:39'),
(132, '2023-12-18', NULL, NULL, 7, '2023-12-18 20:07:39', '2023-12-18 20:07:39'),
(133, '2023-12-18', NULL, NULL, 7, '2023-12-18 20:07:39', '2023-12-18 20:07:39'),
(134, '2023-12-18', NULL, NULL, 7, '2023-12-18 20:07:39', '2023-12-18 20:07:39'),
(135, '2023-12-18', NULL, NULL, 7, '2023-12-18 20:07:39', '2023-12-18 20:07:39'),
(136, '2023-12-18', NULL, NULL, 7, '2023-12-18 20:07:39', '2023-12-18 20:07:39'),
(137, '2023-12-18', NULL, NULL, 7, '2023-12-18 20:07:39', '2023-12-18 20:07:39'),
(138, '2023-12-18', NULL, NULL, 7, '2023-12-18 20:07:39', '2023-12-18 20:07:39'),
(139, '2023-12-18', '55.00 %', 2, 7, '2023-12-18 20:08:14', '2023-12-18 20:08:36'),
(140, '2023-12-18', NULL, NULL, 7, '2023-12-18 20:11:18', '2023-12-18 20:11:18'),
(141, '2023-12-18', '80.00 %', 1, 7, '2023-12-18 20:12:16', '2023-12-18 20:12:29'),
(142, '2023-12-18', '60.00 %', 2, 6, '2023-12-18 20:15:34', '2023-12-18 20:16:01'),
(143, '2023-12-18', NULL, NULL, 6, '2023-12-18 20:17:30', '2023-12-18 20:17:30'),
(144, '2023-12-18', '60.00 %', 2, 6, '2023-12-18 20:17:33', '2023-12-18 20:17:44'),
(145, '2023-12-18', NULL, NULL, 6, '2023-12-18 20:18:08', '2023-12-18 20:18:08'),
(146, '2023-12-18', '57.50 %', 2, 6, '2023-12-18 20:25:12', '2023-12-18 20:26:32'),
(147, '2023-12-18', NULL, NULL, 6, '2023-12-18 20:27:02', '2023-12-18 20:27:02'),
(148, '2023-12-18', '61.25 %', 3, 6, '2023-12-18 20:27:04', '2023-12-18 20:28:16'),
(149, '2023-12-18', '53.33 %', 3, 6, '2023-12-18 20:31:05', '2023-12-18 20:31:39'),
(150, '2023-12-18', '53.33 %', 4, 6, '2023-12-18 20:32:43', '2023-12-18 20:33:44'),
(151, '2023-12-18', '55.00 %', 4, 6, '2023-12-18 20:38:23', '2023-12-18 20:38:40'),
(152, '2023-12-18', NULL, NULL, 7, '2023-12-18 21:41:56', '2023-12-18 21:41:56'),
(153, '2023-12-18', '60.00 %', 3, 7, '2023-12-18 21:44:38', '2023-12-18 21:44:59'),
(154, '2023-12-18', '-15.00 %', 4, 2, '2023-12-18 22:41:46', '2023-12-18 22:42:26'),
(155, '2023-12-18', '56.67 %', 2, 2, '2023-12-18 22:42:34', '2023-12-18 22:43:07'),
(156, '2023-12-18', NULL, NULL, 2, '2023-12-18 22:43:16', '2023-12-18 22:43:16'),
(157, '2023-12-18', NULL, NULL, 2, '2023-12-18 22:43:57', '2023-12-18 22:43:57'),
(158, '2023-12-18', '-7.50 %', 4, 6, '2023-12-19 00:04:03', '2023-12-19 00:05:01'),
(159, '2023-12-18', '-3.00 %', 4, 1, '2023-12-19 00:05:15', '2023-12-19 00:06:15'),
(160, '2023-12-18', '56.67 %', 2, 2, '2023-12-19 00:07:07', '2023-12-19 00:07:35'),
(161, '2023-12-18', NULL, NULL, 2, '2023-12-19 00:07:55', '2023-12-19 00:07:55'),
(162, '2023-12-18', NULL, NULL, 2, '2023-12-19 00:07:58', '2023-12-19 00:07:58'),
(163, '2023-12-19', '58.33 %', 2, 2, '2023-12-19 22:38:16', '2023-12-19 22:38:50'),
(164, '2023-12-19', '55.00 %', 3, 2, '2023-12-19 22:40:37', '2023-12-19 22:41:06'),
(165, '2023-12-19', '65.00 %', 3, 2, '2023-12-19 22:42:29', '2023-12-19 22:42:37'),
(166, '2023-12-19', '55.00 %', 2, 2, '2023-12-19 22:42:56', '2023-12-19 22:43:15'),
(167, '2023-12-19', '53.33 %', 2, 2, '2023-12-19 22:44:58', '2023-12-19 22:45:25'),
(168, '2023-12-19', '55.00 %', 2, 2, '2023-12-19 22:46:14', '2023-12-19 22:48:09'),
(169, '2023-12-19', NULL, NULL, 2, '2023-12-19 22:48:46', '2023-12-19 22:48:46'),
(170, '2023-12-19', '-25.00 %', 4, 7, '2023-12-19 22:50:30', '2023-12-19 22:51:04'),
(171, '2023-12-19', '62.50 %', 2, 2, '2023-12-19 22:53:56', '2023-12-19 22:55:33'),
(172, '2023-12-19', '55.00 %', 2, 2, '2023-12-19 22:55:56', '2023-12-19 22:56:10'),
(173, '2023-12-19', '61.67 %', 2, 2, '2023-12-19 22:56:22', '2023-12-19 22:56:47'),
(174, '2023-12-19', NULL, NULL, 2, '2023-12-19 22:57:07', '2023-12-19 22:57:07'),
(175, '2023-12-19', '53.33 %', 2, 2, '2023-12-19 22:57:09', '2023-12-19 23:02:54'),
(176, '2023-12-19', NULL, NULL, 2, '2023-12-19 23:03:12', '2023-12-19 23:03:12'),
(177, '2023-12-19', NULL, NULL, 2, '2023-12-19 23:13:57', '2023-12-19 23:13:57');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `interaccionserviciotecnico`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `interaccionserviciotecnico` (
`id` bigint(20) unsigned
,`fecha` date
,`nombre_servicio` varchar(50)
);

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
(7, '2023_07_05_193750_plan_llamadas', 1),
(8, '2023_07_05_194436_tecnicos', 1),
(9, '2023_07_05_194831_tipo_servicios_tecnicos', 1),
(10, '2023_07_12_174641_combos_promo', 1),
(11, '2023_07_12_180315_servicio_contratado', 1),
(12, '2023_07_12_181024_factura', 1),
(13, '2023_07_12_181525_contrato', 1),
(14, '2023_07_12_182135_interaccion', 1),
(15, '2023_07_12_182654_ordentrabajo', 1),
(16, '2023_07_12_183147_cancelacion_ordentrabajo', 1),
(17, '2023_08_04_221653_chat', 1);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `ordentecnico`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `ordentecnico` (
`id` bigint(20) unsigned
,`problema` text
,`estado` varchar(191)
,`fecha_visita` date
,`nombre` varchar(50)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordentrabajo`
--

CREATE TABLE `ordentrabajo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha_visita` date NOT NULL,
  `problema` text NOT NULL,
  `resultado` text DEFAULT NULL,
  `estado` varchar(191) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `fecha_hora_visita_llegada` datetime NOT NULL,
  `fecha_hora_visita_salida` datetime DEFAULT NULL,
  `longitud` decimal(11,8) DEFAULT NULL,
  `latitud` decimal(10,8) DEFAULT NULL,
  `id_tecnico` bigint(20) UNSIGNED DEFAULT NULL,
  `id_interaccion` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ordentrabajo`
--

INSERT INTO `ordentrabajo` (`id`, `fecha_visita`, `problema`, `resultado`, `estado`, `descripcion`, `fecha_hora_visita_llegada`, `fecha_hora_visita_salida`, `longitud`, `latitud`, `id_tecnico`, `id_interaccion`, `created_at`, `updated_at`) VALUES
(1, '2023-12-14', 'Instalacion Servicio plan Internet Estandar', NULL, 'terminado', NULL, '2023-12-14 00:00:00', NULL, '-63.18521404', '-17.82862019', 1, 1, '2023-12-13 19:42:39', '2023-12-13 19:42:39'),
(2, '2023-12-14', 'Instalacion Servicio plan Internet Estandar', NULL, 'terminado', NULL, '2023-12-14 00:00:00', NULL, '-63.18510404', '-17.82862019', 3, 2, '2023-12-13 19:56:35', '2023-12-13 19:57:05'),
(3, '2023-12-14', 'Instalacion Servicio plan Internet Estandar', NULL, 'cancelado', NULL, '2023-12-14 00:00:00', NULL, '-63.18520409', '-17.82862019', 3, 3, '2023-12-13 19:58:43', '2023-12-13 19:58:57'),
(4, '2023-12-14', 'Instalacion Servicio plan Internet Estandar', NULL, 'pendiente', NULL, '2023-12-14 00:00:00', NULL, '-63.18522404', '-17.82862019', 3, 5, '2023-12-13 20:00:45', '2023-12-13 20:00:52'),
(5, '2023-12-14', 'Instalacion Servicio plan Internet Estandar', NULL, 'pendiente', NULL, '2023-12-14 00:00:00', NULL, '-63.18220404', '-17.82762019', 2, 8, '2023-12-13 20:04:06', '2023-12-13 20:04:06'),
(6, '2023-12-14', 'Instalacion Servicio plan Internet Estandar', NULL, 'terminado', NULL, '2023-12-14 00:00:00', NULL, '-63.18520404', '-17.80770150', 3, 9, '2023-12-13 20:09:24', '2023-12-13 20:09:38'),
(7, '2023-12-14', 'Instalacion Servicio plan Internet Estandar', NULL, 'cancelado', NULL, '2023-12-14 00:00:00', NULL, '-63.19644786', '-17.82862019', 2, 10, '2023-12-13 20:11:32', '2023-12-13 20:11:40'),
(8, '2023-12-14', 'Instalacion Servicio plan Internet Libre', NULL, 'pendiente', NULL, '2023-12-14 00:00:00', NULL, '-63.19922404', '-17.36862019', 2, 13, '2023-12-13 20:28:28', '2023-12-13 20:28:28'),
(9, '2023-12-14', 'Instalacion Servicio plan Internet Libre', NULL, 'pendiente', NULL, '2023-12-14 00:00:00', NULL, '-63.23522404', '-17.85862019', 3, 13, '2023-12-13 20:29:49', '2023-12-13 20:31:48'),
(10, '2023-12-14', 'Instalacion Servicio plan Internet Libre', NULL, 'pendiente', NULL, '2023-12-14 00:00:00', NULL, '-63.28522404', '-17.89862019', 3, 15, '2023-12-13 20:38:15', '2023-12-13 20:42:23'),
(11, '2023-12-14', 'Instalacion Servicio plan Internet Libre', NULL, 'terminado', NULL, '2023-12-14 00:00:00', NULL, '-63.16713668', '-17.82862019', 1, 18, '2023-12-13 20:50:51', '2023-12-13 20:50:58'),
(12, '2023-12-14', 'Instalacion Servicio plan Internet Estandar', NULL, 'terminado', NULL, '2023-12-14 00:00:00', NULL, '-63.16713668', '-17.82862019', 1, 23, '2023-12-13 21:18:09', '2023-12-13 21:18:09'),
(13, '2023-12-18', 'Instalacion Servicio plan Internet Explora', NULL, 'pendiente', NULL, '2023-12-18 00:00:00', NULL, '-63.16713668', '-17.82862019', 1, 40, '2023-12-17 14:44:16', '2023-12-17 14:44:16'),
(14, '2023-12-18', 'Instalacion Servicio plan Internet Explora', NULL, 'pendiente', NULL, '2023-12-18 00:00:00', NULL, '-63.16614963', '-17.79544332', 2, 40, '2023-12-17 14:53:06', '2023-12-17 14:58:48'),
(15, '2023-12-18', 'Instalacion Servicio plan Internet Explora', NULL, 'pendiente', NULL, '2023-12-18 00:00:00', NULL, '-63.16713668', '-17.83233790', 1, 49, '2023-12-17 15:17:29', '2023-12-17 15:17:49'),
(16, '2023-12-18', 'Instalacion Servicio plan Internet Estandar', NULL, 'pendiente', NULL, '2023-12-18 00:00:00', NULL, '-63.18146500', '-17.79544332', 2, 89, '2023-12-18 03:00:12', '2023-12-18 03:00:19'),
(17, '2023-12-19', 'Instalacion Servicio plan Internet Estandar', NULL, 'pendiente', NULL, '2023-12-19 00:00:00', NULL, '-63.19431282', '-17.81012239', 3, 94, '2023-12-18 13:33:16', '2023-12-18 13:33:46'),
(18, '2023-12-19', 'Instalacion Servicio plan Internet Estandar', NULL, 'pendiente', NULL, '2023-12-19 00:00:00', NULL, '-17.78349200', '-63.18146500', 3, 98, '2023-12-18 15:30:07', '2023-12-18 15:30:52'),
(19, '2023-12-19', 'Instalacion Servicio plan Internet Estandar', NULL, 'pendiente', NULL, '2023-12-19 00:00:00', NULL, '-63.15456249', '-17.80949930', 1, 100, '2023-12-18 15:41:05', '2023-12-18 15:45:14'),
(20, '2023-12-19', 'Instalacion Servicio plan Internet Estandar', NULL, 'pendiente', NULL, '2023-12-19 00:00:00', NULL, '-63.16713668', '-63.18146500', 1, 105, '2023-12-18 16:05:38', '2023-12-18 16:06:12'),
(21, '2023-12-19', 'Instalacion Servicio plan Internet Estandar', NULL, 'pendiente', NULL, '2023-12-19 00:00:00', NULL, '-63.16713668', '-17.82862019', 1, 108, '2023-12-18 16:11:50', '2023-12-18 16:11:50'),
(22, '2023-12-19', 'Instalacion Servicio plan Internet Estandar', NULL, 'pendiente', NULL, '2023-12-19 00:00:00', NULL, '-63.18146500', '-17.78349200', 2, 109, '2023-12-18 16:16:44', '2023-12-18 16:17:19'),
(23, '2023-12-19', 'Instalacion Servicio plan Internet Estandar', NULL, 'pendiente', NULL, '2023-12-19 00:00:00', NULL, '-17.78349200', '-63.18146500', 3, 111, '2023-12-18 16:24:57', '2023-12-18 16:25:07'),
(24, '2023-12-19', 'Instalacion Servicio plan Internet Estandar', NULL, 'pendiente', NULL, '2023-12-19 00:00:00', NULL, '-63.26713668', '-17.78349200', 2, 112, '2023-12-18 16:27:00', '2023-12-18 16:27:00'),
(25, '2023-12-19', 'Instalacion Servicio plan Internet Estandar', NULL, 'pendiente', NULL, '2023-12-19 00:00:00', NULL, '-17.78349200', '-63.18146500', 3, 113, '2023-12-18 16:28:21', '2023-12-18 16:28:32'),
(26, '2023-12-19', 'Instalacion Servicio plan Internet Estandar', NULL, 'pendiente', NULL, '2023-12-19 00:00:00', NULL, '-63.16713668', '-17.78349200', 2, 115, '2023-12-18 16:36:04', '2023-12-18 16:36:04'),
(27, '2023-12-19', 'Instalacion Servicio plan Internet Estandar', NULL, 'pendiente', NULL, '2023-12-19 00:00:00', NULL, '-63.16713668', '-17.82862019', 1, 116, '2023-12-18 20:00:27', '2023-12-18 20:02:08'),
(28, '2023-12-19', 'Instalacion Servicio plan Internet Estandar', NULL, 'pendiente', NULL, '2023-12-19 00:00:00', NULL, '-17.78349200', '-63.18146500', 3, 118, '2023-12-18 20:02:45', '2023-12-18 20:03:29'),
(29, '2023-12-19', 'Instalacion Servicio plan Internet Estandar', NULL, 'pendiente', NULL, '2023-12-19 00:00:00', NULL, '-17.78349200', '-63.18146500', 3, 120, '2023-12-18 20:04:07', '2023-12-18 20:06:56'),
(30, '2023-12-19', 'Instalacion Servicio plan Internet Estandar', NULL, 'pendiente', NULL, '2023-12-19 00:00:00', NULL, '-63.18146500', '-17.82862019', 2, 139, '2023-12-18 20:08:46', '2023-12-18 20:11:18'),
(31, '2023-12-19', 'Instalacion Servicio plan Internet Estandar', NULL, 'pendiente', NULL, '2023-12-19 00:00:00', NULL, '-17.78349200', '-63.18146500', 3, 142, '2023-12-18 20:16:01', '2023-12-18 20:17:30'),
(32, '2023-12-19', 'Instalacion Servicio plan Internet Estandar', NULL, 'pendiente', NULL, '2023-12-19 00:00:00', NULL, '-63.13722469', '-17.83074460', 1, 144, '2023-12-18 20:17:44', '2023-12-18 20:18:07'),
(33, '2023-12-19', 'Instalacion Servicio plan Internet Avanzado', NULL, 'pendiente', NULL, '2023-12-19 00:00:00', NULL, '-63.16713668', '-17.82862019', 1, 146, '2023-12-18 20:26:32', '2023-12-18 20:27:01'),
(34, '2023-12-19', 'Instalacion Servicio plan Internet Estandar', NULL, 'pendiente', NULL, '2023-12-19 00:00:00', NULL, '-63.18146500', '-17.78349200', 2, 155, '2023-12-18 22:43:07', '2023-12-18 22:43:16'),
(35, '2023-12-19', 'Instalacion Servicio plan Internet Explora', NULL, 'pendiente', NULL, '2023-12-19 00:00:00', NULL, '-63.19696285', '-17.84969981', 2, 160, '2023-12-19 00:07:35', '2023-12-19 00:07:55'),
(36, '2023-12-20', 'Instalacion Servicio plan Internet Avanzado', NULL, 'pendiente', NULL, '2023-12-20 00:00:00', NULL, '-63.10838558', '-17.73552958', 1, 163, '2023-12-19 22:38:50', '2023-12-19 22:40:37'),
(37, '2023-12-20', 'Instalacion Servicio plan Internet Estandar', NULL, 'pendiente', NULL, '2023-12-20 00:00:00', NULL, '-63.17876674', '-17.86375150', 3, 166, '2023-12-19 22:43:23', '2023-12-19 22:44:58'),
(38, '2023-12-20', 'Instalacion Servicio plan Internet Estandar', NULL, 'pendiente', NULL, '2023-12-20 00:00:00', NULL, '-63.18146500', '-17.78349200', 3, 167, '2023-12-19 22:45:25', '2023-12-19 22:46:14'),
(39, '2023-12-20', 'Instalacion Servicio plan Internet Estandar', NULL, 'pendiente', NULL, '2023-12-20 00:00:00', NULL, '-63.18803646', '-17.85688919', 1, 168, '2023-12-19 22:48:19', '2023-12-19 22:48:46'),
(40, '2023-12-20', 'Instalacion Servicio plan Internet Libre', NULL, 'pendiente', NULL, '2023-12-20 00:00:00', NULL, '1.00000000', '1.00000000', 2, 172, '2023-12-19 22:56:10', '2023-12-19 22:56:10'),
(41, '2023-12-20', 'Instalacion Servicio plan Internet Libre', NULL, 'pendiente', NULL, '2023-12-20 00:00:00', NULL, '-63.18146500', '-17.78349200', 3, 173, '2023-12-19 22:56:46', '2023-12-19 22:57:07'),
(42, '2023-12-20', 'Instalacion Servicio plan Internet Estandar', NULL, 'pendiente', NULL, '2023-12-20 00:00:00', NULL, '-63.18940975', '-17.83074460', 1, 175, '2023-12-19 23:02:54', '2023-12-19 23:03:12');

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
(1, 'Plan Estandar', '4 mbps', 129, '2023-12-13 20:08:18', '2023-12-13 20:08:18'),
(2, 'Plan Avanzado', '6 mbps', 139, '2023-12-13 20:08:43', '2023-12-13 20:08:43'),
(3, 'Plan Explora', '16 mbps', 199, '2023-12-13 20:08:57', '2023-12-13 20:08:57'),
(4, 'Plan Libre', '22 mbps', 249, '2023-12-13 20:09:11', '2023-12-13 20:09:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_llamadas`
--

CREATE TABLE `plan_llamadas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
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

INSERT INTO `plan_llamadas` (`id`, `nombre`, `minutos`, `credito`, `cantidadmb`, `precio`, `created_at`, `updated_at`) VALUES
(1, 'Plan wow basico', '40 minutos', '20', 10000, 99, '2023-12-13 18:43:34', '2023-12-13 18:43:34'),
(2, 'Plan wow Simple', '50 minutos', '40', 20000, 149, '2023-12-13 18:57:18', '2023-12-13 18:57:18'),
(3, 'Plan wow Plus', '50 minutos', '150', 9999999, 169, '2023-12-13 18:58:17', '2023-12-17 14:18:42');

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

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `satisfaccionusuario`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `satisfaccionusuario` (
`id` bigint(20) unsigned
,`fecha` date
,`descripcion` text
,`nombre` varchar(50)
);

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

--
-- Volcado de datos para la tabla `servicio_contratado`
--

INSERT INTO `servicio_contratado` (`id`, `estadoservicio`, `observacion`, `id_plan_internet`, `id_plan_tvcable`, `id_plan_llamada`, `id_combo_promo`, `created_at`, `updated_at`) VALUES
(1, 'Activo', 'Se registra una instalación en esta dirección Barrio 6 de agosto', 1, NULL, NULL, NULL, '2023-12-13 19:42:39', '2023-12-13 19:42:39'),
(2, 'Activo', 'Se registra una instalación en esta dirección Barrio 6 de agosto', 1, NULL, NULL, NULL, '2023-12-13 19:56:35', '2023-12-13 19:56:35'),
(3, 'Activo', 'Se registra una instalación en esta dirección Barrio 6 de agosto', 1, NULL, NULL, NULL, '2023-12-13 19:58:43', '2023-12-13 19:58:43'),
(4, 'Activo', 'Se registra una instalación en esta dirección Barrio 6 de agosto', 1, NULL, NULL, NULL, '2023-12-13 20:00:45', '2023-12-13 20:00:45'),
(5, 'Activo', 'Se registra una instalación en esta dirección Barrio 6 de agosto', 1, NULL, NULL, NULL, '2023-12-13 20:04:06', '2023-12-13 20:04:06'),
(6, 'Activo', 'Se registra una instalación en esta dirección Barrio 6 de agosto', 1, NULL, NULL, NULL, '2023-12-13 20:09:24', '2023-12-13 20:09:24'),
(7, 'Activo', 'Se registra una instalación en esta dirección Barrio 6 de agosto', 1, NULL, NULL, NULL, '2023-12-13 20:11:32', '2023-12-13 20:11:32'),
(8, 'Activo', 'Se registra una instalación en esta dirección Barrio la cuchilla', 4, NULL, NULL, NULL, '2023-12-13 20:28:28', '2023-12-13 20:28:28'),
(9, 'Activo', 'Se registra una instalación en esta dirección Barrio la cuchilla', 4, NULL, NULL, NULL, '2023-12-13 20:29:49', '2023-12-13 20:29:49'),
(10, 'Activo', 'Se registra una instalación en esta dirección Barrio la cuchilla', 4, NULL, NULL, NULL, '2023-12-13 20:38:15', '2023-12-13 20:38:15'),
(11, 'Activo', 'Se registra una instalación en esta dirección Barrio la cuchilla', 4, NULL, NULL, NULL, '2023-12-13 20:50:51', '2023-12-13 20:50:51'),
(12, 'Activo', 'Se registra una instalación en esta dirección Barrio la cuchilla', 1, NULL, NULL, NULL, '2023-12-13 21:18:09', '2023-12-13 21:18:09'),
(13, 'Activo', 'Se registra una instalación en esta dirección Barrio la cuchilla', 2, NULL, NULL, NULL, '2023-12-13 21:20:43', '2023-12-13 21:20:43'),
(14, 'Activo', 'Se registra una instalación en esta dirección Barrio 6 de agosto', 3, NULL, NULL, NULL, '2023-12-17 14:44:16', '2023-12-17 14:44:16'),
(15, 'Activo', 'Se registra una instalación en esta dirección Barrio 6 de agosto', 3, NULL, NULL, NULL, '2023-12-17 14:53:06', '2023-12-17 14:53:06'),
(16, 'Activo', 'Se registra una instalación en esta dirección Barrio 6 de agosto', 3, NULL, NULL, NULL, '2023-12-17 15:17:29', '2023-12-17 15:17:29'),
(17, 'Activo', 'Se registra una instalación en esta dirección Barrio 6 de agosto', 1, NULL, NULL, NULL, '2023-12-18 03:00:12', '2023-12-18 03:00:12'),
(18, 'Activo', 'Se registra una instalación en esta dirección Barrio la cuchilla', 1, NULL, NULL, NULL, '2023-12-18 13:33:16', '2023-12-18 13:33:16'),
(19, 'Activo', 'Se registra una instalación en esta dirección Barrio la cuchilla', 1, NULL, NULL, NULL, '2023-12-18 15:30:07', '2023-12-18 15:30:07'),
(20, 'Activo', 'Se registra una instalación en esta dirección Barrio la cuchilla', 1, NULL, NULL, NULL, '2023-12-18 15:41:05', '2023-12-18 15:41:05'),
(21, 'Activo', 'Se registra una instalación en esta dirección Barrio la cuchilla', 1, NULL, NULL, NULL, '2023-12-18 16:05:38', '2023-12-18 16:05:38'),
(22, 'Activo', 'Se registra una instalación en esta dirección Barrio la cuchilla', 1, NULL, NULL, NULL, '2023-12-18 16:11:50', '2023-12-18 16:11:50'),
(23, 'Activo', 'Se registra una instalación en esta dirección Barrio Fortaleza', 1, NULL, NULL, NULL, '2023-12-18 16:16:44', '2023-12-18 16:16:44'),
(24, 'Activo', 'Se registra una instalación en esta dirección Barrio Fortaleza', 1, NULL, NULL, NULL, '2023-12-18 16:24:57', '2023-12-18 16:24:57'),
(25, 'Activo', 'Se registra una instalación en esta dirección Barrio Fortaleza', 1, NULL, NULL, NULL, '2023-12-18 16:27:00', '2023-12-18 16:27:00'),
(26, 'Activo', 'Se registra una instalación en esta dirección Barrio Fortaleza', 1, NULL, NULL, NULL, '2023-12-18 16:28:21', '2023-12-18 16:28:21'),
(27, 'Activo', 'Se registra una instalación en esta dirección Barrio Fortaleza', 1, NULL, NULL, NULL, '2023-12-18 16:36:04', '2023-12-18 16:36:04'),
(28, 'Activo', 'Se registra una instalación en esta dirección Barrio la cuchilla', 1, NULL, NULL, NULL, '2023-12-18 20:00:27', '2023-12-18 20:00:27'),
(29, 'Activo', 'Se registra una instalación en esta dirección Barrio la cuchilla', 1, NULL, NULL, NULL, '2023-12-18 20:02:45', '2023-12-18 20:02:45'),
(30, 'Activo', 'Se registra una instalación en esta dirección Barrio Fortaleza', 1, NULL, NULL, NULL, '2023-12-18 20:04:07', '2023-12-18 20:04:07'),
(31, 'Activo', 'Se registra una instalación en esta dirección Barrio Fortaleza', 1, NULL, NULL, NULL, '2023-12-18 20:08:46', '2023-12-18 20:08:46'),
(32, 'Activo', 'Se registra una instalación en esta dirección Barrio la cuchilla', 1, NULL, NULL, NULL, '2023-12-18 20:16:01', '2023-12-18 20:16:01'),
(33, 'Activo', 'Se registra una instalación en esta dirección Barrio la cuchilla', 1, NULL, NULL, NULL, '2023-12-18 20:17:44', '2023-12-18 20:17:44'),
(34, 'Activo', 'Se registra una instalación en esta dirección Barrio la cuchilla', 2, NULL, NULL, NULL, '2023-12-18 20:26:32', '2023-12-18 20:26:32'),
(35, 'Activo', 'Se registro la adquisicion del plan llamadas Básico', NULL, NULL, 1, NULL, '2023-12-18 20:28:16', '2023-12-18 20:28:16'),
(36, 'Activo', 'Se registro la adquisicion del plan llamadas Básico', NULL, NULL, 1, NULL, '2023-12-18 20:31:39', '2023-12-18 20:31:39'),
(37, 'Activo', 'Se registro la adquisicion del plan llamadas Básico', NULL, NULL, 1, NULL, '2023-12-18 21:45:08', '2023-12-18 21:45:08'),
(38, 'Activo', 'Se registra una instalación en esta dirección Barrio 6 de agosto', 1, NULL, NULL, NULL, '2023-12-18 22:43:07', '2023-12-18 22:43:07'),
(39, 'Activo', 'Se registra una instalación en esta dirección Barrio 6 de agosto', 3, NULL, NULL, NULL, '2023-12-19 00:07:35', '2023-12-19 00:07:35'),
(40, 'Activo', 'Se registra una instalación en esta dirección Barrio 6 de agosto', 2, NULL, NULL, NULL, '2023-12-19 22:38:50', '2023-12-19 22:38:50'),
(41, 'Activo', 'Se registro la adquisicion del plan llamadas Básico', NULL, NULL, 1, NULL, '2023-12-19 22:41:06', '2023-12-19 22:41:06'),
(42, 'Activo', 'Se registro la adquisicion del plan llamadas Básico', NULL, NULL, 1, NULL, '2023-12-19 22:42:37', '2023-12-19 22:42:37'),
(43, 'Activo', 'Se registra una instalación en esta dirección Barrio 6 de agosto', 1, NULL, NULL, NULL, '2023-12-19 22:43:23', '2023-12-19 22:43:23'),
(44, 'Activo', 'Se registra una instalación en esta dirección Barrio 6 de agosto', 1, NULL, NULL, NULL, '2023-12-19 22:45:25', '2023-12-19 22:45:25'),
(45, 'Activo', 'Se registra una instalación en esta dirección Barrio 6 de agosto', 1, NULL, NULL, NULL, '2023-12-19 22:48:19', '2023-12-19 22:48:19'),
(46, 'Activo', 'Se registra una instalación en esta dirección Barrio 6 de agosto', 4, NULL, NULL, NULL, '2023-12-19 22:56:10', '2023-12-19 22:56:10'),
(47, 'Activo', 'Se registra una instalación en esta dirección Barrio 6 de agosto', 4, NULL, NULL, NULL, '2023-12-19 22:56:46', '2023-12-19 22:56:46'),
(48, 'Activo', 'Se registra una instalación en esta dirección Barrio 6 de agosto', 1, NULL, NULL, NULL, '2023-12-19 23:02:54', '2023-12-19 23:02:54');

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
(1, 'Carlos Lopez', 'Instalación Domiciliaria', '2023-12-13 19:27:07', '2023-12-13 19:27:07'),
(2, 'Ariel Censo', 'Instalación de redes y cableado estruturado', '2023-12-13 19:27:35', '2023-12-13 19:27:35'),
(3, 'Roger Andia', 'Instalación Domiciliaria', '2023-12-13 19:27:46', '2023-12-13 19:27:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_servicios_tecnicos`
--

CREATE TABLE `tipo_servicios_tecnicos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_servicio` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `estado` char(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_servicios_tecnicos`
--

INSERT INTO `tipo_servicios_tecnicos` (`id`, `nombre_servicio`, `descripcion`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Interacción con el asistente virtual', 'Se soluciono el inconveniente que tenia el usuario con el servicio de internet.', '1', '2023-12-13 20:02:58', '2023-12-13 20:02:58'),
(2, 'Contratar servicio de internet', 'El usuario adquirió el servicio de internet para su domicilio', '1', '2023-12-13 20:04:56', '2023-12-13 20:04:56'),
(3, 'Contratar un servicio de telefonía', 'El usuario adquirió el servicio de llamadas', '1', '2023-12-13 20:06:18', '2023-12-13 20:06:18'),
(4, 'Solicitud de soporte tecnico', 'El usuario solicitó soporte técnico domiciliario', '1', NULL, NULL);

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
(1, 'Administrador', '5214251', 'Barrio Manzana 1', '63635452', 'admin', 'a', 'admin', 'admin@gmail.com', NULL, '$2y$10$G5p2q2OJ1hjiuI6JPq80KuZAEJ58B5Sse.ma.iKbaY5L8sI1N4Mum', NULL, '2023-12-13 19:56:04', '2023-12-13 19:56:04'),
(2, 'Pablo Bustos', '5214521', 'Barrio 6 de agosto', '6365214', 'usuario', 'a', 'pp', 'pablobb.ram@gmail.com', NULL, '$2y$10$Detu7FMbdYwj.RJmV2l6KusBAto9CL8K3SW87l9h.6Td4s3IJze9.', NULL, '2023-12-13 19:59:09', '2023-12-13 19:59:09'),
(3, 'Carlos Lopez', '5231412', 'Barrio zoologico', '6363211', 'tecnico', 'a', 'cc', 'carlos@gmail.com', NULL, '$2y$10$xVZ50jHJz2keG0frdYC.p.Xf9kwnN4j4lba.LNK8Y.UMFjl3hBmZS', NULL, '2023-12-13 19:28:33', '2023-12-13 19:28:33'),
(4, 'Ariel Censo', '5236214', 'Mercado siete calles', '7548523', 'tecnico', 'a', 'ac', 'ariel@gmail.com', NULL, '$2y$10$HZDFcxtA7yIy4ErWk9.RNu9U4WjPhZOaJXJ2IEPXiRp1bt4EHiEdm', NULL, '2023-12-13 19:29:18', '2023-12-13 19:29:18'),
(5, 'Roger Andia', '6325412', 'Barrio Cotoca', '78541236', 'tecnico', 'a', 'ra', 'andia@gmail.com', NULL, '$2y$10$xfYCn173X5DtUahxRGMt8eHv2MWc5SWspRDsNVbUcgocJgglWsw8e', NULL, '2023-12-13 19:29:58', '2023-12-13 19:29:58'),
(6, 'Pier Vaca', '6325418', 'Barrio la cuchilla', '6352412', 'usuario', 'a', 'pier', 'pier@gmail.com', NULL, '$2y$10$mEm6P9D.MiPC5izeem5mDuvy8BgiRCu7JYiHlSQk7S/6tBe7HQvuy', NULL, '2023-12-13 20:27:49', '2023-12-13 20:27:49'),
(7, 'María Rodríguez', '1254123', 'Barrio Fortaleza', '65214298', 'usuario', 'a', 'ma', 'mariarata016@gmail.com', NULL, '$2y$10$/f5FDbHJqLYhyUmDzrdJeeXoxTQ5lGyvO5N2WrGi/UNLAKh1UgDBe', NULL, '2023-12-18 01:07:44', '2023-12-18 01:07:44');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `view_listar_interacciones`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `view_listar_interacciones` (
`id` bigint(20) unsigned
,`fecha` date
,`descripcion` text
,`nombre` varchar(50)
,`inicio` timestamp
,`final` timestamp
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_reporte_montos_fecha`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_reporte_montos_fecha` (
`tipo_plan` varchar(8)
,`monto_total` decimal(32,0)
,`fecha_factura` date
);

-- --------------------------------------------------------

--
-- Estructura para la vista `interaccionserviciotecnico`
--
DROP TABLE IF EXISTS `interaccionserviciotecnico`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `interaccionserviciotecnico`  AS SELECT `inte`.`id` AS `id`, `inte`.`fecha` AS `fecha`, `ts`.`nombre_servicio` AS `nombre_servicio` FROM (`interaccion` `inte` join `tipo_servicios_tecnicos` `ts` on(`inte`.`id_tipo_servicio_tecnico` = `ts`.`id`))  ;

-- --------------------------------------------------------

--
-- Estructura para la vista `ordentecnico`
--
DROP TABLE IF EXISTS `ordentecnico`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ordentecnico`  AS SELECT `ot`.`id` AS `id`, `ot`.`problema` AS `problema`, `ot`.`estado` AS `estado`, `ot`.`fecha_visita` AS `fecha_visita`, `te`.`nombre` AS `nombre` FROM (`ordentrabajo` `ot` join `tecnicos` `te` on(`ot`.`id_tecnico` = `te`.`id`))  ;

-- --------------------------------------------------------

--
-- Estructura para la vista `satisfaccionusuario`
--
DROP TABLE IF EXISTS `satisfaccionusuario`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `satisfaccionusuario`  AS SELECT `i`.`id` AS `id`, `i`.`fecha` AS `fecha`, `i`.`descripcion` AS `descripcion`, `u`.`nombre` AS `nombre` FROM (`interaccion` `i` join `users` `u` on(`i`.`id_usuario` = `u`.`id`)) WHERE `u`.`tipo` = 'usuario''usuario'  ;

-- --------------------------------------------------------

--
-- Estructura para la vista `view_listar_interacciones`
--
DROP TABLE IF EXISTS `view_listar_interacciones`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_listar_interacciones`  AS SELECT `i`.`id` AS `id`, `i`.`fecha` AS `fecha`, `i`.`descripcion` AS `descripcion`, `u`.`nombre` AS `nombre`, `i`.`created_at` AS `inicio`, `i`.`updated_at` AS `final` FROM ((`interaccion` `i` join `users` `u` on(`i`.`id_usuario` = `u`.`id`)) join `chat` `ch` on(`i`.`id` = `ch`.`id_interaccion`)) WHERE `u`.`tipo` = 'usuario' AND `i`.`descripcion` is not null AND `ch`.`id_interaccion` is not nullnot null  ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_reporte_montos_fecha`
--
DROP TABLE IF EXISTS `vista_reporte_montos_fecha`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_reporte_montos_fecha`  AS SELECT CASE WHEN `sc`.`id_plan_internet` is not null THEN 'Internet' WHEN `sc`.`id_plan_llamada` is not null THEN 'Llamada' END AS `tipo_plan`, sum(`f`.`monto`) AS `monto_total`, `f`.`fecha` AS `fecha_factura` FROM (`servicio_contratado` `sc` join `factura` `f` on(`sc`.`id` = `f`.`id_servicio_contratado`)) GROUP BY CASE WHEN `sc`.`id_plan_internet` is not null THEN 'Internet' WHEN `sc`.`id_plan_llamada` is not null THEN 'Llamada' END, `f`.`fecha``fecha`  ;

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
-- Indices de la tabla `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chat_id_interaccion_foreign` (`id_interaccion`);

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
-- AUTO_INCREMENT de la tabla `chat`
--
ALTER TABLE `chat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=485;

--
-- AUTO_INCREMENT de la tabla `combos_promo`
--
ALTER TABLE `combos_promo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contrato`
--
ALTER TABLE `contrato`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `interaccion`
--
ALTER TABLE `interaccion`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `ordentrabajo`
--
ALTER TABLE `ordentrabajo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `planinternets`
--
ALTER TABLE `planinternets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `plan_llamadas`
--
ALTER TABLE `plan_llamadas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `plan_tv_cables`
--
ALTER TABLE `plan_tv_cables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicio_contratado`
--
ALTER TABLE `servicio_contratado`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `tecnicos`
--
ALTER TABLE `tecnicos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_servicios_tecnicos`
--
ALTER TABLE `tipo_servicios_tecnicos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cancelacion_ordentrabajo`
--
ALTER TABLE `cancelacion_ordentrabajo`
  ADD CONSTRAINT `cancelacion_ordentrabajo_id_orden_trabajo_foreign` FOREIGN KEY (`id_orden_trabajo`) REFERENCES `ordentrabajo` (`id`);

--
-- Filtros para la tabla `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_id_interaccion_foreign` FOREIGN KEY (`id_interaccion`) REFERENCES `interaccion` (`id`);

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
