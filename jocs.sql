-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: mysql
-- Temps de generació: 14-10-2020 a les 09:53:58
-- Versió del servidor: 8.0.21
-- Versió de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `jocs`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `diccionari`
--

CREATE TABLE `diccionari` (
  `valencia` varchar(40) NOT NULL,
  `angles` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Bolcament de dades per a la taula `diccionari`
--

INSERT INTO `diccionari` (`valencia`, `angles`) VALUES
('codony', 'quince'),
('emprenyar', 'enoying'),
('enyorar', 'to miss'),
('malaltia', 'illness'),
('mandrós', 'lazy'),
('xiulit', 'whistle');

-- --------------------------------------------------------

--
-- Estructura de la taula `users`
--

CREATE TABLE `users` (
  `user` varchar(20) NOT NULL,
  `password` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Bolcament de dades per a la taula `users`
--

INSERT INTO `users` (`user`, `password`) VALUES
('igomis', '03AC674216F3E15C761EE1A5E255F067953623C8B388B4459E13F978D7C846F4');

--
-- Índexs per a les taules bolcades
--

--
-- Índexs per a la taula `diccionari`
--
ALTER TABLE `diccionari`
  ADD PRIMARY KEY (`valencia`);

--
-- Índexs per a la taula `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
