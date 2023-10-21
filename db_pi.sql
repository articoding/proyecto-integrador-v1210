-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2023 a las 04:27:51
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_pi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `appointment`
--

CREATE TABLE `appointment` (
  `idAppoint` int(11) NOT NULL,
  `appoint_name` varchar(40) DEFAULT NULL,
  `appoint_lastname` varchar(40) DEFAULT NULL,
  `appoint_phone` varchar(10) DEFAULT NULL,
  `appoint_date` date DEFAULT NULL,
  `appoint_service` varchar(40) DEFAULT NULL,
  `idUsers` int(11) DEFAULT NULL,
  `idServices` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `idcategories` int(11) NOT NULL,
  `categ_name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`idcategories`, `categ_name`) VALUES
(1, 'Rostro'),
(2, 'Manos'),
(3, 'Pies'),
(4, 'Pelo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact_us`
--

CREATE TABLE `contact_us` (
  `idContact` int(11) NOT NULL,
  `contact_ubication` varchar(40) DEFAULT NULL,
  `contact_social` varchar(40) DEFAULT NULL,
  `contact_phone` varchar(10) DEFAULT NULL,
  `contact_email` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contact_us`
--

INSERT INTO `contact_us` (`idContact`, `contact_ubication`, `contact_social`, `contact_phone`, `contact_email`) VALUES
(1, 'Calle Culiacán 440, Col. Rodríguez', 'Facebook: LIZBETH HAIR SALON', '8995493458', 'lizbeth.hair@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `services`
--

CREATE TABLE `services` (
  `idServices` int(11) NOT NULL,
  `Serv_name` varchar(45) DEFAULT NULL,
  `Serv_description` varchar(200) DEFAULT NULL,
  `Serv_price` varchar(15) DEFAULT NULL,
  `Serv_img` blob DEFAULT NULL,
  `idSubcateg` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategories`
--

CREATE TABLE `subcategories` (
  `idSubcateg` int(11) NOT NULL,
  `subcateg_name` varchar(40) DEFAULT NULL,
  `idcategories` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `subcategories`
--

INSERT INTO `subcategories` (`idSubcateg`, `subcateg_name`, `idcategories`) VALUES
(1, 'Cejas', 1),
(2, 'Pestañas', 1),
(4, 'Uñas', 2),
(16, 'Piel', 2),
(17, 'Piel', 3),
(18, 'Uñas (Pies)', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `user_name` varchar(40) DEFAULT NULL,
  `user_lastname` varchar(40) DEFAULT NULL,
  `user_birthdate` date DEFAULT NULL,
  `user_email` varchar(40) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`idUsers`, `user_name`, `user_lastname`, `user_birthdate`, `user_email`, `user_password`) VALUES
(5, 'Arturo', 'Peña De La Cruz', '2004-05-18', 'arturo@gmail.com', 'hola432');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`idAppoint`),
  ADD KEY `fk_appointment_users` (`idUsers`),
  ADD KEY `fk_appointment_services` (`idServices`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`idcategories`);

--
-- Indices de la tabla `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`idContact`);

--
-- Indices de la tabla `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`idServices`),
  ADD KEY `fk_services_subcategories` (`idSubcateg`);

--
-- Indices de la tabla `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`idSubcateg`),
  ADD KEY `fk_subcateg_categ` (`idcategories`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `appointment`
--
ALTER TABLE `appointment`
  MODIFY `idAppoint` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `idcategories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `idContact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `services`
--
ALTER TABLE `services`
  MODIFY `idServices` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `idSubcateg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `fk_appointment_services` FOREIGN KEY (`idServices`) REFERENCES `services` (`idServices`),
  ADD CONSTRAINT `fk_appointment_users` FOREIGN KEY (`idUsers`) REFERENCES `users` (`idUsers`);

--
-- Filtros para la tabla `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `fk_services_subcategories` FOREIGN KEY (`idSubcateg`) REFERENCES `subcategories` (`idSubcateg`);

--
-- Filtros para la tabla `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `fk_subcateg_categ` FOREIGN KEY (`idcategories`) REFERENCES `categories` (`idcategories`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
