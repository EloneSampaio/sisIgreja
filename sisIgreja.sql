-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 27-Mar-2018 às 10:03
-- Versão do servidor: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.1.14-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisIgreja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`id`, `nome`, `data`, `time`) VALUES
(1, 'Jogo de futebol', '2018-02-27', '1970-01-01'),
(2, 'weree', '2018-02-17', '1970-01-01'),
(3, 'rererrd effffff rrrrrrrr rrrrrrrrr rrrrrrrrrr', '2018-02-16', '1970-01-01'),
(4, 'sddsdsdsddsds', '2018-02-16', '1970-01-01'),
(5, 'dddffdfdf', '2018-02-16', '1970-01-01'),
(6, 'sdsddssdsdds', '2018-02-16', '1970-01-01'),
(7, 'ffwwwww', '2018-02-16', '1970-01-01'),
(8, 'www', '2018-02-16', '1970-01-01'),
(9, 'wwwwwww', '2018-02-16', '1970-01-01'),
(10, 'mmmmm', '2018-12-26', '1970-01-01'),
(11, 'sdsddsddsdsddd', '2018-02-17', '1970-01-01');

-- --------------------------------------------------------

--
-- Stand-in structure for view `aniversario_view`
--
CREATE TABLE `aniversario_view` (
`id` int(11)
,`nome` varchar(40)
,`date_nascimento` date
,`next_birthday` date
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `audit_log`
--

CREATE TABLE `audit_log` (
  `id` int(11) NOT NULL,
  `type_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_time` datetime NOT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `impersonatingUser` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `audit_log`
--

INSERT INTO `audit_log` (`id`, `type_id`, `type`, `description`, `event_time`, `user`, `impersonatingUser`, `ip`) VALUES
(1, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "15"', '2018-02-12 19:56:15', 'admin', NULL, '127.0.0.1'),
(2, 'security.interactive_login', 'security.interactive_login', 'security.interactive_login', '2018-02-12 20:00:41', 'admin', NULL, '127.0.0.1'),
(3, 'security.interactive_login', 'security.interactive_login', 'Custom description', '2018-02-12 21:10:19', 'admin', NULL, '127.0.0.1'),
(4, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-12 21:11:14', 'admin', NULL, '127.0.0.1'),
(5, 'easy_audit.doctrine.entity.created', 'Despesa created', 'Despesa has been created with id = "6"', '2018-02-12 21:23:10', 'admin', NULL, '127.0.0.1'),
(6, 'easy_audit.doctrine.entity.updated', 'Dizimo updated', 'Dizimo has been updated with id = "14"', '2018-02-12 21:29:03', 'admin', NULL, '127.0.0.1'),
(7, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-13 01:10:10', 'admin', NULL, '127.0.0.1'),
(8, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-13 02:08:16', 'admin', NULL, '127.0.0.1'),
(9, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-13 16:34:59', 'admin', NULL, '127.0.0.1'),
(10, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "15"', '2018-02-13 16:55:05', 'admin', NULL, '127.0.0.1'),
(11, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "14"', '2018-02-13 16:55:42', 'admin', NULL, '127.0.0.1'),
(12, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "12"', '2018-02-13 16:55:55', 'admin', NULL, '127.0.0.1'),
(13, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "13"', '2018-02-13 16:56:26', 'admin', NULL, '127.0.0.1'),
(14, 'easy_audit.doctrine.entity.updated', 'Dizimo updated', 'Dizimo has been updated with id = "14"', '2018-02-13 17:13:08', 'admin', NULL, '127.0.0.1'),
(15, 'easy_audit.doctrine.entity.updated', 'Dizimo updated', 'Dizimo has been updated with id = "13"', '2018-02-13 17:13:20', 'admin', NULL, '127.0.0.1'),
(16, 'easy_audit.doctrine.entity.updated', 'Dizimo updated', 'Dizimo has been updated with id = "13"', '2018-02-13 17:14:13', 'admin', NULL, '127.0.0.1'),
(17, 'easy_audit.doctrine.entity.updated', 'Dizimo updated', 'Dizimo has been updated with id = "13"', '2018-02-13 17:18:27', 'admin', NULL, '127.0.0.1'),
(18, 'easy_audit.doctrine.entity.created', 'Dizimo created', 'Dizimo has been created with id = "15"', '2018-02-13 17:19:20', 'admin', NULL, '127.0.0.1'),
(19, 'easy_audit.doctrine.entity.created', 'Dizimo created', 'Dizimo has been created with id = "16"', '2018-02-13 17:42:54', 'admin', NULL, '127.0.0.1'),
(20, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-13 17:45:56', 'admin', NULL, '127.0.0.1'),
(21, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-13 21:01:08', 'admin', NULL, '127.0.0.1'),
(22, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-14 00:05:56', 'admin', NULL, '127.0.0.1'),
(23, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-14 16:12:42', 'admin', NULL, '127.0.0.1'),
(24, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-14 23:00:35', 'admin', NULL, '127.0.0.1'),
(25, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-14 23:01:11', 'admin', NULL, '127.0.0.1'),
(26, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-15 00:05:28', 'admin', NULL, '127.0.0.1'),
(27, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-15 02:13:12', 'admin', NULL, '127.0.0.1'),
(28, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "15"', '2018-02-15 04:04:51', 'admin', NULL, '127.0.0.1'),
(29, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "13"', '2018-02-15 04:04:52', 'admin', NULL, '127.0.0.1'),
(30, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "13"', '2018-02-15 04:08:11', 'admin', NULL, '127.0.0.1'),
(31, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "15"', '2018-02-15 15:21:12', 'admin', NULL, '127.0.0.1'),
(32, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "14"', '2018-02-15 15:21:23', 'admin', NULL, '127.0.0.1'),
(33, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "13"', '2018-02-15 15:21:32', 'admin', NULL, '127.0.0.1'),
(34, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "12"', '2018-02-15 15:21:44', 'admin', NULL, '127.0.0.1'),
(35, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-15 17:16:34', 'admin', NULL, '127.0.0.1'),
(36, 'easy_audit.doctrine.entity.created', 'Crente created', 'Crente has been created with id = "16"', '2018-02-15 17:44:05', 'admin', NULL, '127.0.0.1'),
(37, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "16"', '2018-02-15 17:55:37', 'admin', NULL, '127.0.0.1'),
(38, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "15"', '2018-02-15 17:55:56', 'admin', NULL, '127.0.0.1'),
(39, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "14"', '2018-02-15 17:56:21', 'admin', NULL, '127.0.0.1'),
(40, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "13"', '2018-02-15 17:56:34', 'admin', NULL, '127.0.0.1'),
(41, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "12"', '2018-02-15 17:56:48', 'admin', NULL, '127.0.0.1'),
(42, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "16"', '2018-02-15 18:07:01', 'admin', NULL, '127.0.0.1'),
(43, 'easy_audit.doctrine.entity.updated', 'Dizimo updated', 'Dizimo has been updated with id = "15"', '2018-02-15 19:19:56', 'admin', NULL, '127.0.0.1'),
(44, 'easy_audit.doctrine.entity.updated', 'Dizimo updated', 'Dizimo has been updated with id = "13"', '2018-02-15 19:20:05', 'admin', NULL, '127.0.0.1'),
(45, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-16 01:26:43', 'admin', NULL, '127.0.0.1'),
(46, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-16 17:00:41', 'admin', NULL, '127.0.0.1'),
(47, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-17 16:32:36', 'admin', NULL, '127.0.0.1'),
(48, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-17 19:15:07', 'admin', NULL, '127.0.0.1'),
(49, 'easy_audit.doctrine.entity.created', 'Crente created', 'Crente has been created with id = "17"', '2018-02-17 21:18:13', 'admin', NULL, '127.0.0.1'),
(50, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "17"', '2018-02-17 21:18:21', 'admin', NULL, '127.0.0.1'),
(51, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "16"', '2018-02-17 21:22:49', 'admin', NULL, '127.0.0.1'),
(52, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "16"', '2018-02-17 21:25:05', 'admin', NULL, '127.0.0.1'),
(53, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "16"', '2018-02-17 21:28:58', 'admin', NULL, '127.0.0.1'),
(54, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "16"', '2018-02-17 21:29:33', 'admin', NULL, '127.0.0.1'),
(55, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "16"', '2018-02-17 21:31:56', 'admin', NULL, '127.0.0.1'),
(56, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "15"', '2018-02-17 21:32:13', 'admin', NULL, '127.0.0.1'),
(57, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "16"', '2018-02-17 21:33:05', 'admin', NULL, '127.0.0.1'),
(58, 'easy_audit.doctrine.entity.created', 'Crente created', 'Crente has been created with id = "18"', '2018-02-17 21:33:31', 'admin', NULL, '127.0.0.1'),
(59, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "18"', '2018-02-17 21:33:39', 'admin', NULL, '127.0.0.1'),
(60, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "18"', '2018-02-17 21:33:41', 'admin', NULL, '127.0.0.1'),
(61, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "15"', '2018-02-17 21:34:58', 'admin', NULL, '127.0.0.1'),
(62, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "18"', '2018-02-17 21:35:13', 'admin', NULL, '127.0.0.1'),
(63, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "15"', '2018-02-17 21:35:38', 'admin', NULL, '127.0.0.1'),
(64, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "18"', '2018-02-17 21:36:06', 'admin', NULL, '127.0.0.1'),
(65, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "18"', '2018-02-17 21:36:30', 'admin', NULL, '127.0.0.1'),
(66, 'easy_audit.doctrine.entity.created', 'Crente created', 'Crente has been created with id = "19"', '2018-02-17 21:36:50', 'admin', NULL, '127.0.0.1'),
(67, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "15"', '2018-02-17 21:37:37', 'admin', NULL, '127.0.0.1'),
(68, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "14"', '2018-02-17 21:37:59', 'admin', NULL, '127.0.0.1'),
(69, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "13"', '2018-02-17 21:38:15', 'admin', NULL, '127.0.0.1'),
(70, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "12"', '2018-02-17 21:38:36', 'admin', NULL, '127.0.0.1'),
(71, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "16"', '2018-02-17 21:39:05', 'admin', NULL, '127.0.0.1'),
(72, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "19"', '2018-02-17 21:39:58', 'admin', NULL, '127.0.0.1'),
(73, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "15"', '2018-02-17 21:40:11', 'admin', NULL, '127.0.0.1'),
(74, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "16"', '2018-02-17 21:47:30', 'admin', NULL, '127.0.0.1'),
(75, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "14"', '2018-02-17 21:47:48', 'admin', NULL, '127.0.0.1'),
(76, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "19"', '2018-02-17 21:52:42', 'admin', NULL, '127.0.0.1'),
(77, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "19"', '2018-02-17 21:53:04', 'admin', NULL, '127.0.0.1'),
(78, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "15"', '2018-02-17 21:53:28', 'admin', NULL, '127.0.0.1'),
(79, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "14"', '2018-02-17 21:55:35', 'admin', NULL, '127.0.0.1'),
(80, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "13"', '2018-02-17 21:56:12', 'admin', NULL, '127.0.0.1'),
(81, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "12"', '2018-02-17 21:56:36', 'admin', NULL, '127.0.0.1'),
(82, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "12"', '2018-02-17 21:57:15', 'admin', NULL, '127.0.0.1'),
(83, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "16"', '2018-02-17 21:57:29', 'admin', NULL, '127.0.0.1'),
(84, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "16"', '2018-02-17 21:57:45', 'admin', NULL, '127.0.0.1'),
(85, 'easy_audit.doctrine.entity.created', 'Crente created', 'Crente has been created with id = "20"', '2018-02-17 22:02:17', 'admin', NULL, '127.0.0.1'),
(86, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "12"', '2018-02-17 22:53:46', 'admin', NULL, '127.0.0.1'),
(87, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-17 23:02:16', 'admin', NULL, '127.0.0.1'),
(88, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-18 00:30:11', 'admin', NULL, '127.0.0.1'),
(89, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-18 01:38:33', 'admin', NULL, '127.0.0.1'),
(90, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-18 02:02:12', 'admin', NULL, '127.0.0.1'),
(91, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-18 02:44:44', 'admin', NULL, '127.0.0.1'),
(92, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-18 02:48:24', 'admin', NULL, '127.0.0.1'),
(93, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-18 14:49:26', 'admin', NULL, '127.0.0.1'),
(94, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-18 15:42:07', 'admin', NULL, '127.0.0.1'),
(95, 'easy_audit.doctrine.entity.created', 'Crente created', 'Crente has been created with id = "21"', '2018-02-18 16:22:52', 'admin', NULL, '127.0.0.1'),
(96, 'easy_audit.doctrine.entity.created', 'Crente created', 'Crente has been created with id = "22"', '2018-02-18 17:08:49', 'admin', NULL, '127.0.0.1'),
(97, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "22"', '2018-02-18 17:10:45', 'admin', NULL, '127.0.0.1'),
(98, 'easy_audit.doctrine.entity.created', 'Crente created', 'Crente has been created with id = "23"', '2018-02-18 17:11:08', 'admin', NULL, '127.0.0.1'),
(99, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "23"', '2018-02-18 17:12:57', 'admin', NULL, '127.0.0.1'),
(100, 'easy_audit.doctrine.entity.created', 'Crente created', 'Crente has been created with id = "24"', '2018-02-18 17:29:27', 'admin', NULL, '127.0.0.1'),
(101, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "24"', '2018-02-18 17:29:35', 'admin', NULL, '127.0.0.1'),
(102, 'easy_audit.doctrine.entity.created', 'Crente created', 'Crente has been created with id = "25"', '2018-02-18 17:52:42', 'admin', NULL, '127.0.0.1'),
(103, 'easy_audit.doctrine.entity.created', 'Crente created', 'Crente has been created with id = "26"', '2018-02-18 17:53:04', 'admin', NULL, '127.0.0.1'),
(104, 'easy_audit.doctrine.entity.created', 'Crente created', 'Crente has been created with id = "27"', '2018-02-18 17:54:47', 'admin', NULL, '127.0.0.1'),
(105, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "13"', '2018-02-18 18:09:03', 'admin', NULL, '127.0.0.1'),
(106, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "13"', '2018-02-18 18:10:36', 'admin', NULL, '127.0.0.1'),
(107, 'easy_audit.doctrine.entity.created', 'Despesa created', 'Despesa has been created with id = "7"', '2018-02-18 18:33:40', 'admin', NULL, '127.0.0.1'),
(108, 'easy_audit.doctrine.entity.created', 'Despesa created', 'Despesa has been created with id = "8"', '2018-02-18 18:38:19', 'admin', NULL, '127.0.0.1'),
(109, 'easy_audit.doctrine.entity.created', 'Despesa created', 'Despesa has been created with id = "9"', '2018-02-18 18:39:38', 'admin', NULL, '127.0.0.1'),
(110, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "25"', '2018-02-18 18:42:47', 'admin', NULL, '127.0.0.1'),
(111, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "26"', '2018-02-18 18:42:47', 'admin', NULL, '127.0.0.1'),
(112, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "19"', '2018-02-18 18:43:15', 'admin', NULL, '127.0.0.1'),
(113, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "19"', '2018-02-18 18:43:25', 'admin', NULL, '127.0.0.1'),
(114, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "27"', '2018-02-18 18:43:25', 'admin', NULL, '127.0.0.1'),
(115, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "16"', '2018-02-18 18:44:35', 'admin', NULL, '127.0.0.1'),
(116, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "16"', '2018-02-18 18:44:45', 'admin', NULL, '127.0.0.1'),
(117, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "15"', '2018-02-18 18:57:21', 'admin', NULL, '127.0.0.1'),
(118, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "15"', '2018-02-18 18:58:45', 'admin', NULL, '127.0.0.1'),
(119, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "15"', '2018-02-18 18:59:07', 'admin', NULL, '127.0.0.1'),
(120, 'easy_audit.doctrine.entity.deleted', 'Oferta deleted', 'Oferta has been deleted with id = "1"', '2018-02-18 19:00:51', 'admin', NULL, '127.0.0.1'),
(121, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "15"', '2018-02-18 19:00:51', 'admin', NULL, '127.0.0.1'),
(122, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "15"', '2018-02-18 19:20:13', 'admin', NULL, '127.0.0.1'),
(123, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "15"', '2018-02-18 19:22:35', 'admin', NULL, '127.0.0.1'),
(124, 'easy_audit.doctrine.entity.deleted', 'Dizimo deleted', 'Dizimo has been deleted with id = "14"', '2018-02-18 19:26:27', 'admin', NULL, '127.0.0.1'),
(125, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "15"', '2018-02-18 19:26:27', 'admin', NULL, '127.0.0.1'),
(126, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "21"', '2018-02-18 19:27:23', 'admin', NULL, '127.0.0.1'),
(127, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "21"', '2018-02-18 19:27:31', 'admin', NULL, '127.0.0.1'),
(128, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "20"', '2018-02-18 19:27:51', 'admin', NULL, '127.0.0.1'),
(129, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "20"', '2018-02-18 19:28:24', 'admin', NULL, '127.0.0.1'),
(130, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "20"', '2018-02-18 19:28:32', 'admin', NULL, '127.0.0.1'),
(131, 'easy_audit.doctrine.entity.deleted', 'Dizimo deleted', 'Dizimo has been deleted with id = "11"', '2018-02-18 19:36:23', 'admin', NULL, '127.0.0.1'),
(132, 'easy_audit.doctrine.entity.deleted', 'Dizimo deleted', 'Dizimo has been deleted with id = "13"', '2018-02-18 19:36:23', 'admin', NULL, '127.0.0.1'),
(133, 'easy_audit.doctrine.entity.deleted', 'Dizimo deleted', 'Dizimo has been deleted with id = "16"', '2018-02-18 19:36:23', 'admin', NULL, '127.0.0.1'),
(134, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "13"', '2018-02-18 19:36:23', 'admin', NULL, '127.0.0.1'),
(135, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "13"', '2018-02-18 19:38:24', 'admin', NULL, '127.0.0.1'),
(136, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "14"', '2018-02-18 19:38:31', 'admin', NULL, '127.0.0.1'),
(137, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "14"', '2018-02-18 19:39:57', 'admin', NULL, '127.0.0.1'),
(138, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "14"', '2018-02-18 19:41:19', 'admin', NULL, '127.0.0.1'),
(139, 'easy_audit.doctrine.entity.deleted', 'Dizimo deleted', 'Dizimo has been deleted with id = "15"', '2018-02-18 19:41:36', 'admin', NULL, '127.0.0.1'),
(140, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "12"', '2018-02-18 19:41:36', 'admin', NULL, '127.0.0.1'),
(141, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "12"', '2018-02-18 19:43:58', 'admin', NULL, '127.0.0.1'),
(142, 'easy_audit.doctrine.entity.created', 'Crente created', 'Crente has been created with id = "28"', '2018-02-18 19:51:03', 'admin', NULL, '127.0.0.1'),
(143, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "28"', '2018-02-18 19:51:10', 'admin', NULL, '127.0.0.1'),
(144, 'easy_audit.doctrine.entity.created', 'Crente created', 'Crente has been created with id = "29"', '2018-02-18 19:52:04', 'admin', NULL, '127.0.0.1'),
(145, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "29"', '2018-02-18 19:52:39', 'admin', NULL, '127.0.0.1'),
(146, 'easy_audit.doctrine.entity.created', 'Crente created', 'Crente has been created with id = "30"', '2018-02-18 19:52:48', 'admin', NULL, '127.0.0.1'),
(147, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "30"', '2018-02-18 20:02:00', 'admin', NULL, '127.0.0.1'),
(148, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "30"', '2018-02-18 20:06:34', 'admin', NULL, '127.0.0.1'),
(149, 'easy_audit.doctrine.entity.created', 'Crente created', 'Crente has been created with id = "31"', '2018-02-18 20:12:10', 'admin', NULL, '127.0.0.1'),
(150, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "31"', '2018-02-18 20:12:27', 'admin', NULL, '127.0.0.1'),
(151, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "31"', '2018-02-18 20:16:57', 'admin', NULL, '127.0.0.1'),
(152, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "31"', '2018-02-18 20:17:02', 'admin', NULL, '127.0.0.1'),
(153, 'easy_audit.doctrine.entity.created', 'Crente created', 'Crente has been created with id = "32"', '2018-02-18 20:17:21', 'admin', NULL, '127.0.0.1'),
(154, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "32"', '2018-02-18 20:17:30', 'admin', NULL, '127.0.0.1'),
(155, 'easy_audit.doctrine.entity.created', 'Crente created', 'Crente has been created with id = "33"', '2018-02-18 20:19:01', 'admin', NULL, '127.0.0.1'),
(156, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "33"', '2018-02-18 20:20:01', 'admin', NULL, '127.0.0.1'),
(157, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "33"', '2018-02-18 20:20:09', 'admin', NULL, '127.0.0.1'),
(158, 'easy_audit.doctrine.entity.created', 'Crente created', 'Crente has been created with id = "34"', '2018-02-18 20:20:52', 'admin', NULL, '127.0.0.1'),
(159, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "34"', '2018-02-18 20:22:04', 'admin', NULL, '127.0.0.1'),
(160, 'easy_audit.doctrine.entity.created', 'Crente created', 'Crente has been created with id = "35"', '2018-02-18 20:27:00', 'admin', NULL, '127.0.0.1'),
(161, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "35"', '2018-02-18 20:27:13', 'admin', NULL, '127.0.0.1'),
(162, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "35"', '2018-02-18 20:27:27', 'admin', NULL, '127.0.0.1'),
(163, 'easy_audit.doctrine.entity.created', 'Crente created', 'Crente has been created with id = "36"', '2018-02-18 20:31:02', 'admin', NULL, '127.0.0.1'),
(164, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "36"', '2018-02-18 20:31:35', 'admin', NULL, '127.0.0.1'),
(165, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "36"', '2018-02-18 20:32:12', 'admin', NULL, '127.0.0.1'),
(166, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-18 21:23:19', 'admin', NULL, '127.0.0.1'),
(167, 'easy_audit.doctrine.entity.created', 'Crente created', 'Crente has been created with id = "37"', '2018-02-18 22:02:29', 'admin', NULL, '127.0.0.1'),
(168, 'easy_audit.doctrine.entity.created', 'Crente created', 'Crente has been created with id = "38"', '2018-02-18 22:02:49', 'admin', NULL, '127.0.0.1'),
(169, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "38"', '2018-02-18 22:03:12', 'admin', NULL, '127.0.0.1'),
(170, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "38"', '2018-02-18 22:06:42', 'admin', NULL, '127.0.0.1'),
(171, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "38"', '2018-02-18 22:06:44', 'admin', NULL, '127.0.0.1'),
(172, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "38"', '2018-02-18 22:07:04', 'admin', NULL, '127.0.0.1'),
(173, 'easy_audit.doctrine.entity.created', 'Dizimo created', 'Dizimo has been created with id = "17"', '2018-02-18 22:30:44', 'admin', NULL, '127.0.0.1'),
(174, 'easy_audit.doctrine.entity.updated', 'Dizimo updated', 'Dizimo has been updated with id = "17"', '2018-02-18 22:30:59', 'admin', NULL, '127.0.0.1'),
(175, 'easy_audit.doctrine.entity.created', 'Oferta created', 'Oferta has been created with id = "2"', '2018-02-18 22:38:56', 'admin', NULL, '127.0.0.1'),
(176, 'easy_audit.doctrine.entity.created', 'Crente created', 'Crente has been created with id = "39"', '2018-02-18 22:53:00', 'admin', NULL, '127.0.0.1'),
(177, 'easy_audit.doctrine.entity.created', 'Crente created', 'Crente has been created with id = "40"', '2018-02-18 22:53:19', 'admin', NULL, '127.0.0.1'),
(178, 'easy_audit.doctrine.entity.deleted', 'Crente deleted', 'Crente has been deleted with id = "40"', '2018-02-18 22:56:22', 'admin', NULL, '127.0.0.1'),
(179, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-18 22:57:00', 'admin', NULL, '127.0.0.1'),
(180, 'easy_audit.doctrine.entity.created', 'Crente created', 'Crente has been created with id = "41"', '2018-02-18 22:57:43', 'admin', NULL, '127.0.0.1'),
(181, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-19 10:47:51', 'admin', NULL, '127.0.0.1'),
(182, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-21 02:15:15', 'admin', NULL, '127.0.0.1'),
(183, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-21 02:16:14', 'admin', NULL, '127.0.0.1'),
(184, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-02-21 02:18:22', 'admin', NULL, '::1'),
(185, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-03-01 23:47:28', 'admin', NULL, '127.0.0.1'),
(186, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-03-11 17:30:09', 'admin', NULL, '127.0.0.1'),
(187, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-03-11 18:10:18', 'admin', NULL, '127.0.0.1'),
(188, 'easy_audit.doctrine.entity.created', 'Crente created', 'Crente has been created with id = "42"', '2018-03-11 18:10:46', 'admin', NULL, '127.0.0.1'),
(189, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-03-11 18:12:59', 'admin', NULL, '127.0.0.1'),
(190, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "42"', '2018-03-11 18:49:21', 'admin', NULL, '127.0.0.1'),
(191, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "42"', '2018-03-11 18:50:23', 'admin', NULL, '127.0.0.1'),
(192, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "42"', '2018-03-11 18:50:57', 'admin', NULL, '127.0.0.1'),
(193, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "39"', '2018-03-11 18:51:35', 'admin', NULL, '127.0.0.1'),
(194, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "39"', '2018-03-11 18:53:12', 'admin', NULL, '127.0.0.1'),
(195, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "39"', '2018-03-11 18:53:45', 'admin', NULL, '127.0.0.1'),
(196, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "39"', '2018-03-11 18:54:13', 'admin', NULL, '127.0.0.1'),
(197, 'easy_audit.doctrine.entity.updated', 'Crente updated', 'Crente has been updated with id = "39"', '2018-03-11 19:02:52', 'admin', NULL, '127.0.0.1'),
(198, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-03-16 09:32:38', 'admin', NULL, '127.0.0.1'),
(199, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-03-16 11:08:46', 'admin', NULL, '127.0.0.1'),
(200, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-03-16 12:41:35', 'admin', NULL, '127.0.0.1'),
(201, 'security.interactive_login', 'security.interactive_login', 'Login feito', '2018-03-16 12:42:14', 'admin', NULL, '127.0.0.1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cargo`
--

INSERT INTO `cargo` (`id`, `nome`) VALUES
(13, 'Nenhum'),
(15, 'Pastor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `igreja_sede` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `igreja_filial` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `crentes_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `config`
--

INSERT INTO `config` (`id`, `igreja_sede`, `igreja_filial`, `image`, `updated_at`, `crentes_id`) VALUES
(1, 'Igreja Pentecostal Unidas', 'Centro Cafarnaaum', 'adpm-logotipo.jpg', '2018-03-11 18:44:33', 38);

-- --------------------------------------------------------

--
-- Estrutura da tabela `corista`
--

CREATE TABLE `corista` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `corista`
--

INSERT INTO `corista` (`id`) VALUES
(1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `corista_crente`
--

CREATE TABLE `corista_crente` (
  `corista_id` int(11) NOT NULL,
  `crente_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `corista_crente`
--

INSERT INTO `corista_crente` (`corista_id`, `crente_id`) VALUES
(1, 39);

-- --------------------------------------------------------

--
-- Estrutura da tabela `crente`
--

CREATE TABLE `crente` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `estado_civil` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `numero_de_filhos` int(11) DEFAULT NULL,
  `profissao` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_trabalho` tinyint(1) NOT NULL,
  `grau_academico` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dizimista` tinyint(1) NOT NULL,
  `batizado` tinyint(1) NOT NULL,
  `nome_mulher` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `endereco` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cargo_id` int(11) DEFAULT NULL,
  `telefone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `genero` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date_cadastro` date NOT NULL,
  `date_nascimento` date NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `funcao_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `crente`
--

INSERT INTO `crente` (`id`, `nome`, `estado_civil`, `numero_de_filhos`, `profissao`, `status_trabalho`, `grau_academico`, `dizimista`, `batizado`, `nome_mulher`, `endereco`, `bi`, `cargo_id`, `telefone`, `genero`, `date_cadastro`, `date_nascimento`, `image`, `updated_at`, `funcao_id`) VALUES
(37, 'kjttt', 'Solteiro', NULL, NULL, 0, 'Nenhum', 0, 0, NULL, NULL, '98', 13, NULL, 'Femenino', '2018-02-18', '1898-01-01', NULL, NULL, 7),
(38, 'Elone Izata Gonçalves Sampaio', 'Solteiro', NULL, NULL, 0, 'Nenhum', 1, 1, NULL, NULL, '98ggg', 15, NULL, 'Femenino', '2018-02-18', '1898-01-01', 'pp.jpg', '2018-02-18 22:03:12', 7),
(39, 'Mario', 'Solteiro', NULL, NULL, 0, 'Nenhum', 0, 0, NULL, NULL, '23233233', 15, NULL, 'Femenino', '2018-02-18', '1898-01-01', 'hus.jpg', '2018-03-11 19:02:52', 7),
(41, 'ssf22323', 'Solteiro', NULL, NULL, 0, 'Nenhum', 0, 0, NULL, NULL, 's232323', 13, NULL, 'Femenino', '2018-02-18', '1898-01-01', NULL, NULL, 7),
(42, 'Lurdes', 'Solteiro', NULL, NULL, 0, 'Nenhum', 0, 0, NULL, NULL, '344343', 15, NULL, 'Femenino', '2018-03-11', '1898-01-01', 'lulu.jpg', '2018-03-11 18:49:21', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `crente_cargo`
--

CREATE TABLE `crente_cargo` (
  `crente_id` int(11) NOT NULL,
  `cargo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `crente_funcao`
--

CREATE TABLE `crente_funcao` (
  `crente_id` int(11) NOT NULL,
  `funcao_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `despesa`
--

CREATE TABLE `despesa` (
  `id` int(11) NOT NULL,
  `doc_number` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date_vencimento` date DEFAULT NULL,
  `date_pagamento` date NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  `recebido` tinyint(1) NOT NULL,
  `fornecedores_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `despesa`
--

INSERT INTO `despesa` (`id`, `doc_number`, `descricao`, `date_vencimento`, `date_pagamento`, `valor`, `recebido`, `fornecedores_id`) VALUES
(2, 'EWEWE4344', 'DFFDFD', '2018-02-11', '2018-02-11', '22', 0, 2),
(3, '334DDF', 'CONTA DE ÁGUA DESSE ANO', '2018-02-17', '2018-02-05', '4344', 0, 3),
(4, '233ss', 'CONTA DE ÁGUA DESSE ANO', '2018-02-12', '2018-02-12', '233', 1, 2),
(5, 'd3223d', 'CONTA DE ÁGUA', '2018-02-12', '2018-02-12', '200', 1, 3),
(6, '2323sdsd', 'sdsdsdd', '2018-02-12', '2018-02-12', '22', 1, 2),
(7, NULL, 'asas', '2018-02-18', '2018-02-18', '222', 1, 2),
(8, NULL, 'mmmmm', '2018-02-18', '2018-02-18', '10', 1, 2),
(9, NULL, '23233', '2018-02-18', '2018-02-18', '12', 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dizimo`
--

CREATE TABLE `dizimo` (
  `id` int(11) NOT NULL,
  `obs` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dizimos_id` int(11) DEFAULT NULL,
  `entrega_valores_id` int(11) DEFAULT NULL,
  `tipo_dizimos_id` int(11) DEFAULT NULL,
  `date_pagamento` date DEFAULT NULL,
  `valor` decimal(10,0) NOT NULL,
  `tipo_pagamentos_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `dizimo`
--

INSERT INTO `dizimo` (`id`, `obs`, `dizimos_id`, `entrega_valores_id`, `tipo_dizimos_id`, `date_pagamento`, `valor`, `tipo_pagamentos_id`) VALUES
(17, 'sdsdssd', 37, 2, 1, '2018-02-18', '20000', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrada`
--

CREATE TABLE `entrada` (
  `id` int(11) NOT NULL,
  `crentes_id` int(11) DEFAULT NULL,
  `tipo_pagamentos_id` int(11) DEFAULT NULL,
  `obs` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date_pagamento` date DEFAULT NULL,
  `valor` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrega_valor`
--

CREATE TABLE `entrega_valor` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `entrega_valor`
--

INSERT INTO `entrega_valor` (`id`, `nome`) VALUES
(1, 'Culto Jovem'),
(2, 'Culto Geral'),
(3, 'Culto De Quarta');

-- --------------------------------------------------------

--
-- Estrutura da tabela `evento`
--

CREATE TABLE `evento` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `familia`
--

CREATE TABLE `familia` (
  `id` int(11) NOT NULL,
  `nome_filho` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `familia`
--

INSERT INTO `familia` (`id`, `nome_filho`) VALUES
(1, 'Joao'),
(2, 'Mario'),
(5, 'Mario'),
(6, 'Mario'),
(7, 'Mario'),
(8, 'Mario'),
(11, 'Mario');

-- --------------------------------------------------------

--
-- Estrutura da tabela `filial`
--

CREATE TABLE `filial` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `crentes_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`id`, `nome`, `endereco`, `telefone`) VALUES
(2, 'EDEL', 'LUANDA', '344444'),
(3, 'EPAL', 'LUANDA', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(7, 'admin', 'admin', 'test@example.com', 'test@example.com', 1, NULL, '$2y$13$EJsI2wgrKzr.tFrCl30eUODkYq4aS.1C.jISE/nMq3mrv/ZHUofPm', '2018-03-16 12:42:14', NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}'),
(8, 'secretaria', 'secretaria', 'secretaria@gmail.com', 'secretaria@gmail.com', 0, NULL, '$2y$13$yLx2RLNiYdvbxEru5UlvROXVBI0sZ1FZQQpd1wTuenHazlr0kYYam', NULL, NULL, NULL, 'a:0:{}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcao`
--

CREATE TABLE `funcao` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `funcao`
--

INSERT INTO `funcao` (`id`, `nome`) VALUES
(1, 'Coordenador de Jovens'),
(2, 'Coordenador De Adolescentes'),
(7, 'Nenhum');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lancamento`
--

CREATE TABLE `lancamento` (
  `id` int(11) NOT NULL,
  `descricao` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `valor` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `lancamento`
--

INSERT INTO `lancamento` (`id`, `descricao`, `tipo`, `valor`) VALUES
(8, 'Marcos Luis Gonçalves', 'DIZIMO', '233'),
(9, 'Marcos Luis Gonçalves', 'DIZIMO', '122'),
(10, 'Luis Inacio Carlos', 'DIZIMO', '344'),
(11, 'EDEL', 'Despesa', '233'),
(12, 'EPAL', 'CONTA DE ÁGUA', '200'),
(13, 'EDEL', 'sdsdsdd', '22'),
(14, 'Elone Sampaio', 'DIZIMO', '23'),
(15, 'Marcos Luis Gonçalves', 'DIZIMO', '30000'),
(16, 'EDEL', 'asas', '222'),
(17, 'EDEL', 'mmmmm', '10'),
(18, 'EDEL', '23233', '12'),
(19, 'kjttt', 'DIZIMO', '20000'),
(20, 'kjttt', 'Oferta', '2222');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `migration_versions`
--

INSERT INTO `migration_versions` (`version`) VALUES
('20180115032745'),
('20180115054114');

-- --------------------------------------------------------

--
-- Estrutura da tabela `oferta`
--

CREATE TABLE `oferta` (
  `id` int(11) NOT NULL,
  `crentes_id` int(11) DEFAULT NULL,
  `entrega_valores_id` int(11) DEFAULT NULL,
  `tipo_ofertas_id` int(11) DEFAULT NULL,
  `tipo_pagamentos_id` int(11) DEFAULT NULL,
  `obs` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date_pagamento` date NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  `conferentes_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `oferta`
--

INSERT INTO `oferta` (`id`, `crentes_id`, `entrega_valores_id`, `tipo_ofertas_id`, `tipo_pagamentos_id`, `obs`, `date_pagamento`, `valor`, `conferentes_id`) VALUES
(2, 37, 2, 1, 1, 'sdsd', '2018-02-18', '2222', 38);

-- --------------------------------------------------------

--
-- Estrutura da tabela `oferta_crente`
--

CREATE TABLE `oferta_crente` (
  `oferta_id` int(11) NOT NULL,
  `crente_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `patrimonio`
--

CREATE TABLE `patrimonio` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `patrimonio`
--

INSERT INTO `patrimonio` (`id`, `nome`, `descricao`, `data`) VALUES
(1, 'Cadeiras Azuis', 'Doado pela irmã silvana', '2018-02-13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `saida`
--

CREATE TABLE `saida` (
  `id` int(11) NOT NULL,
  `crentes_id` int(11) DEFAULT NULL,
  `tipo_pagamentos_id` int(11) DEFAULT NULL,
  `obs` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date_pagamento` date DEFAULT NULL,
  `valor` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_dizimo`
--

CREATE TABLE `tipo_dizimo` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tipo_dizimo`
--

INSERT INTO `tipo_dizimo` (`id`, `nome`) VALUES
(1, 'DIZIMO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_oferta`
--

CREATE TABLE `tipo_oferta` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tipo_oferta`
--

INSERT INTO `tipo_oferta` (`id`, `nome`) VALUES
(1, 'Oferta');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_pagamento`
--

CREATE TABLE `tipo_pagamento` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tipo_pagamento`
--

INSERT INTO `tipo_pagamento` (`id`, `nome`) VALUES
(1, 'Dinheiro');

-- --------------------------------------------------------

--
-- Structure for view `aniversario_view`
--
DROP TABLE IF EXISTS `aniversario_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`admin`@`%` SQL SECURITY DEFINER VIEW `aniversario_view`  AS  select `crente`.`id` AS `id`,`crente`.`nome` AS `nome`,`crente`.`date_nascimento` AS `date_nascimento`,(`crente`.`date_nascimento` + interval if((dayofyear(`crente`.`date_nascimento`) >= dayofyear(curdate())),(year(curdate()) - year(`crente`.`date_nascimento`)),((year(curdate()) - year(`crente`.`date_nascimento`)) + 1)) year) AS `next_birthday` from `crente` where (`crente`.`date_nascimento` is not null) having (`next_birthday` between curdate() and (curdate() + interval 7 day)) order by `next_birthday` limit 100 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit_log`
--
ALTER TABLE `audit_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_D48A2F7C6566018B` (`crentes_id`);

--
-- Indexes for table `corista`
--
ALTER TABLE `corista`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corista_crente`
--
ALTER TABLE `corista_crente`
  ADD PRIMARY KEY (`corista_id`,`crente_id`),
  ADD KEY `IDX_A7C9F8D431A5B38F` (`corista_id`),
  ADD KEY `IDX_A7C9F8D41F486F56` (`crente_id`);

--
-- Indexes for table `crente`
--
ALTER TABLE `crente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_848AA7C6813AC380` (`cargo_id`),
  ADD KEY `IDX_848AA7C6263E9CB2` (`funcao_id`);

--
-- Indexes for table `crente_cargo`
--
ALTER TABLE `crente_cargo`
  ADD PRIMARY KEY (`crente_id`,`cargo_id`),
  ADD KEY `IDX_D0B8E0C11F486F56` (`crente_id`),
  ADD KEY `IDX_D0B8E0C1813AC380` (`cargo_id`);

--
-- Indexes for table `crente_funcao`
--
ALTER TABLE `crente_funcao`
  ADD PRIMARY KEY (`crente_id`,`funcao_id`),
  ADD KEY `IDX_A55414061F486F56` (`crente_id`),
  ADD KEY `IDX_A5541406263E9CB2` (`funcao_id`);

--
-- Indexes for table `despesa`
--
ALTER TABLE `despesa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_1F5A61D2A5DF4BF8` (`fornecedores_id`);

--
-- Indexes for table `dizimo`
--
ALTER TABLE `dizimo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F85F20A76D6EC761` (`entrega_valores_id`),
  ADD KEY `IDX_F85F20A736FC928D` (`tipo_dizimos_id`),
  ADD KEY `IDX_F85F20A7C4FBE645` (`tipo_pagamentos_id`),
  ADD KEY `IDX_F85F20A7A77A90A5` (`dizimos_id`);

--
-- Indexes for table `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C949A2746566018B` (`crentes_id`),
  ADD KEY `IDX_C949A274C4FBE645` (`tipo_pagamentos_id`);

--
-- Indexes for table `entrega_valor`
--
ALTER TABLE `entrega_valor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `familia`
--
ALTER TABLE `familia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filial`
--
ALTER TABLE `filial`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_F55997596566018B` (`crentes_id`);

--
-- Indexes for table `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`);

--
-- Indexes for table `funcao`
--
ALTER TABLE `funcao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lancamento`
--
ALTER TABLE `lancamento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `oferta`
--
ALTER TABLE `oferta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7479C8F26566018B` (`crentes_id`),
  ADD KEY `IDX_7479C8F26D6EC761` (`entrega_valores_id`),
  ADD KEY `IDX_7479C8F24A0EA02A` (`tipo_ofertas_id`),
  ADD KEY `IDX_7479C8F2C4FBE645` (`tipo_pagamentos_id`),
  ADD KEY `IDX_7479C8F2FA742689` (`conferentes_id`);

--
-- Indexes for table `oferta_crente`
--
ALTER TABLE `oferta_crente`
  ADD PRIMARY KEY (`oferta_id`,`crente_id`),
  ADD KEY `IDX_637C4219FAFBF624` (`oferta_id`),
  ADD KEY `IDX_637C42191F486F56` (`crente_id`);

--
-- Indexes for table `patrimonio`
--
ALTER TABLE `patrimonio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saida`
--
ALTER TABLE `saida`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_87E8F2A66566018B` (`crentes_id`),
  ADD KEY `IDX_87E8F2A6C4FBE645` (`tipo_pagamentos_id`);

--
-- Indexes for table `tipo_dizimo`
--
ALTER TABLE `tipo_dizimo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_oferta`
--
ALTER TABLE `tipo_oferta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_pagamento`
--
ALTER TABLE `tipo_pagamento`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `audit_log`
--
ALTER TABLE `audit_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;
--
-- AUTO_INCREMENT for table `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `corista`
--
ALTER TABLE `corista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `crente`
--
ALTER TABLE `crente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `despesa`
--
ALTER TABLE `despesa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `dizimo`
--
ALTER TABLE `dizimo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `entrada`
--
ALTER TABLE `entrada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `entrega_valor`
--
ALTER TABLE `entrega_valor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `evento`
--
ALTER TABLE `evento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `familia`
--
ALTER TABLE `familia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `filial`
--
ALTER TABLE `filial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `funcao`
--
ALTER TABLE `funcao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `lancamento`
--
ALTER TABLE `lancamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `oferta`
--
ALTER TABLE `oferta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `patrimonio`
--
ALTER TABLE `patrimonio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `saida`
--
ALTER TABLE `saida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipo_dizimo`
--
ALTER TABLE `tipo_dizimo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tipo_oferta`
--
ALTER TABLE `tipo_oferta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tipo_pagamento`
--
ALTER TABLE `tipo_pagamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `config`
--
ALTER TABLE `config`
  ADD CONSTRAINT `FK_D48A2F7C6566018B` FOREIGN KEY (`crentes_id`) REFERENCES `crente` (`id`);

--
-- Limitadores para a tabela `corista_crente`
--
ALTER TABLE `corista_crente`
  ADD CONSTRAINT `FK_A7C9F8D41F486F56` FOREIGN KEY (`crente_id`) REFERENCES `crente` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_A7C9F8D431A5B38F` FOREIGN KEY (`corista_id`) REFERENCES `corista` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `crente`
--
ALTER TABLE `crente`
  ADD CONSTRAINT `FK_848AA7C6263E9CB2` FOREIGN KEY (`funcao_id`) REFERENCES `funcao` (`id`),
  ADD CONSTRAINT `FK_848AA7C6813AC380` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`id`);

--
-- Limitadores para a tabela `crente_cargo`
--
ALTER TABLE `crente_cargo`
  ADD CONSTRAINT `FK_D0B8E0C11F486F56` FOREIGN KEY (`crente_id`) REFERENCES `crente` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_D0B8E0C1813AC380` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `crente_funcao`
--
ALTER TABLE `crente_funcao`
  ADD CONSTRAINT `FK_A55414061F486F56` FOREIGN KEY (`crente_id`) REFERENCES `crente` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_A5541406263E9CB2` FOREIGN KEY (`funcao_id`) REFERENCES `funcao` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `despesa`
--
ALTER TABLE `despesa`
  ADD CONSTRAINT `FK_1F5A61D2A5DF4BF8` FOREIGN KEY (`fornecedores_id`) REFERENCES `fornecedor` (`id`);

--
-- Limitadores para a tabela `dizimo`
--
ALTER TABLE `dizimo`
  ADD CONSTRAINT `FK_F85F20A736FC928D` FOREIGN KEY (`tipo_dizimos_id`) REFERENCES `tipo_dizimo` (`id`),
  ADD CONSTRAINT `FK_F85F20A76D6EC761` FOREIGN KEY (`entrega_valores_id`) REFERENCES `entrega_valor` (`id`),
  ADD CONSTRAINT `FK_F85F20A7A77A90A5` FOREIGN KEY (`dizimos_id`) REFERENCES `crente` (`id`),
  ADD CONSTRAINT `FK_F85F20A7C4FBE645` FOREIGN KEY (`tipo_pagamentos_id`) REFERENCES `tipo_pagamento` (`id`);

--
-- Limitadores para a tabela `entrada`
--
ALTER TABLE `entrada`
  ADD CONSTRAINT `FK_C949A2746566018B` FOREIGN KEY (`crentes_id`) REFERENCES `crente` (`id`),
  ADD CONSTRAINT `FK_C949A274C4FBE645` FOREIGN KEY (`tipo_pagamentos_id`) REFERENCES `tipo_pagamento` (`id`);

--
-- Limitadores para a tabela `filial`
--
ALTER TABLE `filial`
  ADD CONSTRAINT `FK_F55997596566018B` FOREIGN KEY (`crentes_id`) REFERENCES `crente` (`id`);

--
-- Limitadores para a tabela `oferta`
--
ALTER TABLE `oferta`
  ADD CONSTRAINT `FK_7479C8F24A0EA02A` FOREIGN KEY (`tipo_ofertas_id`) REFERENCES `tipo_oferta` (`id`),
  ADD CONSTRAINT `FK_7479C8F26566018B` FOREIGN KEY (`crentes_id`) REFERENCES `crente` (`id`),
  ADD CONSTRAINT `FK_7479C8F26D6EC761` FOREIGN KEY (`entrega_valores_id`) REFERENCES `entrega_valor` (`id`),
  ADD CONSTRAINT `FK_7479C8F2C4FBE645` FOREIGN KEY (`tipo_pagamentos_id`) REFERENCES `tipo_pagamento` (`id`),
  ADD CONSTRAINT `FK_7479C8F2FA742689` FOREIGN KEY (`conferentes_id`) REFERENCES `crente` (`id`);

--
-- Limitadores para a tabela `oferta_crente`
--
ALTER TABLE `oferta_crente`
  ADD CONSTRAINT `FK_637C42191F486F56` FOREIGN KEY (`crente_id`) REFERENCES `crente` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_637C4219FAFBF624` FOREIGN KEY (`oferta_id`) REFERENCES `oferta` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `saida`
--
ALTER TABLE `saida`
  ADD CONSTRAINT `FK_87E8F2A66566018B` FOREIGN KEY (`crentes_id`) REFERENCES `crente` (`id`),
  ADD CONSTRAINT `FK_87E8F2A6C4FBE645` FOREIGN KEY (`tipo_pagamentos_id`) REFERENCES `tipo_pagamento` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
