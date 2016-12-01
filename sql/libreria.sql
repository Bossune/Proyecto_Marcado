-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-11-2016 a las 23:52:51
-- Versión del servidor: 5.6.33
-- Versión de PHP: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbiblioteca`
--

CREATE TABLE `tbiblioteca` (
  `Id_registro` int(11) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Id_Source` int(11) NOT NULL,
  `Tipo_Registro` varchar(8) DEFAULT NULL,
  `Nota_personal` smallint(3) DEFAULT NULL,
  `Comentarios` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbiblioteca`
--

INSERT INTO `tbiblioteca` (`Id_registro`, `Id_Usuario`, `Id_Source`, `Tipo_Registro`, `Nota_personal`, `Comentarios`) VALUES
(14, 1, 4, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tsource`
--

CREATE TABLE `tsource` (
  `Id_Source` int(11) NOT NULL,
  `Generos` varchar(50) DEFAULT NULL,
  `Titulo` varchar(100) DEFAULT NULL,
  `Duracion` smallint(3) DEFAULT NULL,
  `Capitulos` smallint(4) DEFAULT NULL,
  `Duracion_Capitulos` smallint(3) DEFAULT NULL,
  `Nota` float(3,1) DEFAULT NULL,
  `Imagen` blob,
  `Descripcion` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tsource`
--

INSERT INTO `tsource` (`Id_Source`, `Generos`, `Titulo`, `Duracion`, `Capitulos`, `Duracion_Capitulos`, `Nota`, `Imagen`, `Descripcion`) VALUES
(2, 'Comedy, Drama, School, Shounen, Sports', 'Haikyuu!!', 0, 25, 24, 8.7, NULL, 'nspired after watching a volleyball ace nicknamed "Little Giant" in action, small-statured Shouyou Hinata revives the volleyball club at his middle school. The newly-formed team even makes it to a tournament; however, their first match turns out to be their last when they are brutally squashed by the "King of the Court," Tobio Kageyama. Hinata vows to surpass Kageyama, and so after graduating from middle school, he joins Karasuno High School\'s volleyball team—only to find that his sworn rival, Kageyama, is now his teammate.\r\n\r\nThanks to his short height, Hinata struggles to find his role on the team, even with his superior jumping power. Surprisingly, Kageyama has his own problems that only Hinata can help with, and learning to work together appears to be the only way for the team to be successful. Based on Haruichi Furudate\'s popular shounen manga of the same name, Haikyuu!! is an exhilarating and emotional sports comedy following two determined athletes as they attempt to patch a heated rivalry in order to make their high school volleyball team the best in Japan.\r\n'),
(4, 'Comedy, Drama, School, Shounen, Sports', 'Haikyuu!! Second Season', NULL, 26, 24, 9.0, NULL, 'Following their participation at the Inter-High, the Karasuno High School volleyball team attempts to refocus their efforts, aiming to conquer the Spring tournament instead. \r\n\r\nWhen they receive an invitation from long-standing rival Nekoma High, Karasuno agrees to take part in a large training camp alongside many notable volleyball teams in Tokyo and even some national level players. By playing with some of the toughest teams in Japan, they hope not only to sharpen their skills, but also come up with new attacks that would strengthen them. Moreover, Hinata and Kageyama attempt to devise a more powerful weapon, one that could possibly break the sturdiest of blocks. \r\n\r\nFacing what may be their last chance at victory before the senior players graduate, the members of Karasuno\'s volleyball team must learn to settle their differences and train harder than ever if they hope to overcome formidable opponents old and new—including their archrival Aoba Jousai and its world-class setter Tooru Oikawa.\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tusuario`
--

CREATE TABLE `tusuario` (
  `Id` int(100) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Usuario` varchar(20) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Avatar` mediumblob,
  `Sexo` varchar(9) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tusuario`
--

INSERT INTO `tusuario` (`Id`, `Email`, `Usuario`, `Password`, `Avatar`, `Sexo`, `fecha_nacimiento`, `fecha_registro`) VALUES
(1, 'zzz.ex@gmail.com', 'admin', 'admin', '', NULL, NULL, '2016-10-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `twatch_list`
--

CREATE TABLE `twatch_list` (
  `Id_Usuario` int(11) NOT NULL,
  `Id_Source` int(11) NOT NULL,
  `Tipo_Registro` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbiblioteca`
--
ALTER TABLE `tbiblioteca`
  ADD PRIMARY KEY (`Id_registro`),
  ADD KEY `Id_Source` (`Id_Source`),
  ADD KEY `Id_Usuario` (`Id_Usuario`);

--
-- Indices de la tabla `tsource`
--
ALTER TABLE `tsource`
  ADD PRIMARY KEY (`Id_Source`);

--
-- Indices de la tabla `tusuario`
--
ALTER TABLE `tusuario`
  ADD PRIMARY KEY (`Id`,`Email`,`Usuario`),
  ADD UNIQUE KEY `Id` (`Id`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Usuario` (`Usuario`);

--
-- Indices de la tabla `twatch_list`
--
ALTER TABLE `twatch_list`
  ADD KEY `Id_Usuario` (`Id_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbiblioteca`
--
ALTER TABLE `tbiblioteca`
  MODIFY `Id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `tsource`
--
ALTER TABLE `tsource`
  MODIFY `Id_Source` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tusuario`
--
ALTER TABLE `tusuario`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbiblioteca`
--
ALTER TABLE `tbiblioteca`
  ADD CONSTRAINT `tbiblioteca_ibfk_1` FOREIGN KEY (`Id_Usuario`) REFERENCES `tusuario` (`Id`),
  ADD CONSTRAINT `tbiblioteca_ibfk_2` FOREIGN KEY (`Id_Source`) REFERENCES `tsource` (`Id_Source`);

--
-- Filtros para la tabla `twatch_list`
--
ALTER TABLE `twatch_list`
  ADD CONSTRAINT `twatch_list_ibfk_1` FOREIGN KEY (`Id_Usuario`) REFERENCES `tusuario` (`Id`),
  ADD CONSTRAINT `twatch_list_ibfk_2` FOREIGN KEY (`Id_Usuario`) REFERENCES `tbiblioteca` (`Id_registro`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
