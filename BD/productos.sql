-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2020 at 04:57 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plis_prueba`
--

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `Nombre_producto` varchar(50) NOT NULL,
  `Cod_producto` int(13) DEFAULT NULL,
  `Categoria_producto` varchar(50) NOT NULL,
  `Disponibilidad_producto` int(11) NOT NULL,
  `Precio_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`Nombre_producto`, `Cod_producto`, `Categoria_producto`, `Disponibilidad_producto`, `Precio_producto`) VALUES
('empanada grande', NULL, 'fritos', 100, 2200),
('pastel de pollo', NULL, 'fritos', 90, 2000),
('coca cola', 1335421547, 'gaseosa', 50, 2500),
('BUSCAR', NULL, 'PRUEBA', 20, 1000),
('pastel de carne', NULL, 'hechos', 20, 3000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD UNIQUE KEY `Cod_producto` (`Cod_producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
