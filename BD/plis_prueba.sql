-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 25-11-2020 a las 21:03:37
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `plis_prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Debt` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`ID`, `Name`, `LastName`, `Phone`, `Address`, `Debt`) VALUES
(3, 'Julian', 'Ramirez', '3146146824', 'Carrera 87A #18A-38', 0),
(5, 'Cliente', 'Prueba', '123456789', 'Carrera 28 #19-38', 0),
(6, 'Liz', 'Rodriguez', '12345678', 'Carrera 87A #18A-38', 0),
(7, 'Raul', 'Profesor', '12345678', 'Carrera 87A #18A-38', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Producto` varchar(50) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID`, `Producto`, `Precio`, `Descripcion`, `Imagen`) VALUES
(25, 'Ron Viejo de Caldas', 23000, 'Ron Viejo de Caldas MEDIA', '../img/imagen_2020-11-24_170045.png'),
(24, 'Aguardiente AntioqueÃ±o', 18000, 'MEDIA Aguardiente AntioqueÃ±o.', '../img/aguardiente.webp'),
(23, 'Arroz Caribe', 1700, '1 Libra - Arroz blanco', '../img/arrozcaribe.jpg'),
(21, 'Arroz Roa', 1700, 'Peso: 1 libra - Arroz blanco', '../img/roa.jpg'),
(22, 'Panela San Joaquin', 4000, 'Panela San Joaquin - KILO', '../img/panela.jpg'),
(26, 'Ron MedellÃ­n', 25000, 'Ron Medellin MEDIA', '../img/imagen_2020-11-24_170120.png'),
(27, 'Papitas LIMON Margarita', 1300, 'Papitas de limÃ³n Margarita 105g', '../img/imagen_2020-11-24_170320.png'),
(28, 'Papitas POLLO Margarita', 1300, 'Papitas de pollo Margarita 105g', '../img/imagen_2020-11-24_170341.png'),
(29, 'Papitas NAT Margarita', 1300, 'Papitas natural Margarita 105g', '../img/imagen_2020-11-24_170405.png'),
(30, 'Papitas onduladas MAYO.', 1300, 'Papitas mayonesa 105g', '../img/imagen_2020-11-24_170702.png'),
(34, 'Bon Bon Bum', 300, 'Bon Bon Bum cualquier sabor.', '../img/imagen_2020-11-24_171320.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Usuario` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nombre`, `Apellido`, `Usuario`, `pass`) VALUES
(1, 'Julian', 'Ramirez', 'JulianRG2', 'dfrgdfrg'),
(2, 'Simon', 'Marin', 'smarin', 'dfrgdfrg'),
(3, 'Taye', 'Anderson', 'persival', ''),
(4, 'Hola', 'Prueba', 'HolaPrueba', ''),
(5, 'David', 'Loaiza', 'DL', ''),
(6, '123', '123', '12345', '1234'),
(9, 'Prueba1', 'Prueba2', 'Prueba3', 'Prueba4'),
(10, 'PruebaRegistro', 'PruebaRegistro', 'PR', '12345'),
(11, 'Hola', 'Como', 'Como', '123'),
(12, 'Cuenta', 'Prueba', 'CP', '1234'),
(13, 'Gabriel', 'Quintero', 'GabrielQ', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
