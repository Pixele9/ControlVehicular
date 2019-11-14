-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 15, 2019 at 05:48 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `controlvehicular201922`
--

-- --------------------------------------------------------

--
-- Table structure for table `Conductores`
--

CREATE TABLE `Conductores` (
  `IdConductores` int(15) NOT NULL,
  `RFC` char(13) NOT NULL,
  `Firma` varchar(40) NOT NULL,
  `Foto` varchar(40) NOT NULL,
  `Edad` int(3) DEFAULT NULL,
  `Direccion` varchar(90) DEFAULT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `Donador` tinyint(1) DEFAULT NULL,
  `CURP` char(18) DEFAULT NULL,
  `Genero` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Licencias`
--

CREATE TABLE `Licencias` (
  `IdLicencia` int(15) NOT NULL,
  `FechaExpedicion` date NOT NULL,
  `Antigüedad` int(3) NOT NULL,
  `Vigencia` date NOT NULL,
  `LugarExpedicion` varchar(90) DEFAULT NULL,
  `Restriccion` varchar(90) DEFAULT NULL,
  `IdConductor` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Multas`
--

CREATE TABLE `Multas` (
  `IdMultas` int(10) NOT NULL,
  `Motivo` varchar(250) NOT NULL,
  `Agente` varchar(50) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `Lugar` varchar(100) NOT NULL,
  `Descuento` double(7,2) DEFAULT NULL,
  `Vehiculo` int(8) DEFAULT NULL,
  `IdLicencia` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Propietarios`
--

CREATE TABLE `Propietarios` (
  `IdPropietario` int(15) NOT NULL,
  `CURP` char(18) NOT NULL,
  `RFC` char(13) NOT NULL,
  `Nombre` varchar(70) NOT NULL,
  `Dirección` varchar(90) NOT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `TipoPersona` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Tenencias`
--

CREATE TABLE `Tenencias` (
  `IdTenencia` int(15) NOT NULL,
  `Monto` varchar(45) NOT NULL,
  `AnioTenencia` date NOT NULL,
  `IdVehiculos` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Usuarios`
--

CREATE TABLE `Usuarios` (
  `Usuario` varchar(50) NOT NULL,
  `Contrasenia` varchar(50) NOT NULL,
  `Tipo` varchar(10) NOT NULL,
  `Estado` tinyint(1) DEFAULT NULL,
  `Intento` tinyint(1) DEFAULT NULL,
  `Bloqueado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Vehiclos`
--

CREATE TABLE `Vehiclos` (
  `IdVehiculos` int(15) NOT NULL,
  `NumSerie` varchar(20) NOT NULL,
  `Placa` varchar(8) NOT NULL,
  `Motor` varchar(10) NOT NULL,
  `Factura` varchar(15) NOT NULL,
  `VERSION` varchar(20) NOT NULL,
  `Anio` date NOT NULL,
  `Color` varchar(10) NOT NULL,
  `Modelo` varchar(25) NOT NULL,
  `Origen` varchar(30) NOT NULL,
  `numPuertas` char(1) DEFAULT NULL,
  `tipoCombustible` varchar(15) DEFAULT NULL,
  `cilindraje` int(8) DEFAULT NULL,
  `IdPropietario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Verificaciones`
--

CREATE TABLE `Verificaciones` (
  `Folio` int(10) NOT NULL,
  `Tipo` varchar(45) NOT NULL,
  `Vigencia` date NOT NULL,
  `Dictamen` varchar(45) DEFAULT NULL,
  `IdVehiculo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Conductores`
--
ALTER TABLE `Conductores`
  ADD PRIMARY KEY (`IdConductores`),
  ADD UNIQUE KEY `Firma` (`Firma`),
  ADD UNIQUE KEY `Foto` (`Foto`);

--
-- Indexes for table `Licencias`
--
ALTER TABLE `Licencias`
  ADD PRIMARY KEY (`IdLicencia`),
  ADD KEY `IdConductor` (`IdConductor`);

--
-- Indexes for table `Multas`
--
ALTER TABLE `Multas`
  ADD PRIMARY KEY (`IdMultas`),
  ADD KEY `IdLicencia` (`IdLicencia`);

--
-- Indexes for table `Propietarios`
--
ALTER TABLE `Propietarios`
  ADD PRIMARY KEY (`IdPropietario`);

--
-- Indexes for table `Tenencias`
--
ALTER TABLE `Tenencias`
  ADD PRIMARY KEY (`IdTenencia`);

--
-- Indexes for table `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`Usuario`);

--
-- Indexes for table `Vehiclos`
--
ALTER TABLE `Vehiclos`
  ADD PRIMARY KEY (`IdVehiculos`),
  ADD UNIQUE KEY `NumSerie` (`NumSerie`),
  ADD KEY `IdPropietario` (`IdPropietario`);

--
-- Indexes for table `Verificaciones`
--
ALTER TABLE `Verificaciones`
  ADD PRIMARY KEY (`Folio`),
  ADD KEY `IdVehiculo` (`IdVehiculo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Conductores`
--
ALTER TABLE `Conductores`
  MODIFY `IdConductores` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Licencias`
--
ALTER TABLE `Licencias`
  MODIFY `IdLicencia` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Multas`
--
ALTER TABLE `Multas`
  MODIFY `IdMultas` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Propietarios`
--
ALTER TABLE `Propietarios`
  MODIFY `IdPropietario` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Tenencias`
--
ALTER TABLE `Tenencias`
  MODIFY `IdTenencia` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Vehiclos`
--
ALTER TABLE `Vehiclos`
  MODIFY `IdVehiculos` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Verificaciones`
--
ALTER TABLE `Verificaciones`
  MODIFY `Folio` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Licencias`
--
ALTER TABLE `Licencias`
  ADD CONSTRAINT `Licencias_ibfk_1` FOREIGN KEY (`IdConductor`) REFERENCES `Conductores` (`IdConductores`);

--
-- Constraints for table `Multas`
--
ALTER TABLE `Multas`
  ADD CONSTRAINT `Multas_ibfk_1` FOREIGN KEY (`IdLicencia`) REFERENCES `Licencias` (`IdLicencia`);

--
-- Constraints for table `Tenencias`
--
ALTER TABLE `Tenencias`
  ADD CONSTRAINT `Tenencias_ibfk_1` FOREIGN KEY (`IdTenencia`) REFERENCES `Vehiclos` (`IdPropietario`);

--
-- Constraints for table `Vehiclos`
--
ALTER TABLE `Vehiclos`
  ADD CONSTRAINT `Vehiclos_ibfk_1` FOREIGN KEY (`IdPropietario`) REFERENCES `Propietarios` (`IdPropietario`);

--
-- Constraints for table `Verificaciones`
--
ALTER TABLE `Verificaciones`
  ADD CONSTRAINT `Verificaciones_ibfk_1` FOREIGN KEY (`IdVehiculo`) REFERENCES `Vehiclos` (`IdVehiculos`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
