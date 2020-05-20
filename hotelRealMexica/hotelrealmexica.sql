-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 19-05-2020 a las 19:49:35
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hotelrealmexica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

DROP TABLE IF EXISTS `administradores`;
CREATE TABLE IF NOT EXISTS `administradores` (
  `id_administrador` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `password` varchar(64) NOT NULL,
  `fotografia` varchar(25) NOT NULL,
  `fecha_agrego` date NOT NULL,
  PRIMARY KEY (`id_administrador`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id_administrador`, `nombre`, `password`, `fotografia`, `fecha_agrego`) VALUES
(1, 'Brayan Santiago', 'adminbrayan', 'fotoperfil-brayan.jpg', '2020-05-17'),
(2, 'Bramdon Santiago', 'adminBISC', 'fotoperfil-bramdon.jpg', '2020-05-18'),
(3, 'Arturo Rodriguez', 'adminarturo', 'fotoperfil-arturo.jpg', '2020-05-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `apellidos` varchar(25) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  PRIMARY KEY (`id_cliente`),
  UNIQUE KEY `nombre` (`nombre`,`apellidos`,`email`,`telefono`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `apellidos`, `email`, `telefono`) VALUES
(2, 'Ana Elizabeth ', 'PÃ©rez Lara', 'eli@gmail.com', '4381094097'),
(1, 'Bramdon Isay', 'Santiago Cardoso', 'bramdsantiago@gmail.com', '4381338561');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitaciones`
--

DROP TABLE IF EXISTS `habitaciones`;
CREATE TABLE IF NOT EXISTS `habitaciones` (
  `id_habitacion` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) NOT NULL,
  `precio` int(10) UNSIGNED NOT NULL,
  `capacidad` varchar(10) NOT NULL,
  `servicios` text NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id_habitacion`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `habitaciones`
--

INSERT INTO `habitaciones` (`id_habitacion`, `nombre`, `precio`, `capacidad`, `servicios`, `descripcion`) VALUES
(1, 'Simple', 1900, '2 personas', 'Wifi CableTV Bebidas Aire Acondicionado', 'Habitación sencilla, pero elegante, con detalles modernos y una decoración agradable. Muy acogedoras y de gran confort; diseñadas para momentos especiales y estancias tranquilas. Las habitaciones simples, tienen dos camas individuales '),
(2, 'Standard', 2400, '2 personas', 'Wifi CableTV Bañera Bebidas Aire Acondicionado', '¡Si buscas una habitación para 2 personas con grandes prestaciones esta es tu habitación!, muy elegantes, con una decoración exquisita. Una habitación muy economica comparada con todos los beneficios, vas a para pasar unas vacaciones de maravilla. Las habitaiones Standard tienen 2 camas individuales'),
(3, 'de Lujo 1', 3900, 'Familiar', 'Wifi CableTV Bañera Bebidas Aire Acondicionado Camas Grandes', 'De lo mejor, habitaciones con dimensiones muy grandes y 3 camas King Size de altisima calidad, habitaciones de lujo como tú'),
(4, 'de Lujo 2', 4700, 'Familiar', 'Wifi+Netflix CableTV Bañera Bebidas Aire Acondicionado Camas Grandes Vista al Mar', 'De lo mejor, habitaciones con dimensiones muy grandes y 3 camas king size de altisima calidad, habitaciones de lujo como tú y con una vista al mar increible '),
(5, 'de Lujo 3', 5200, 'Familiar', 'Wifi+Netflix CableTV Bañera Bebidas Aire Acondicionado Camas Grandes  Consola de Videojuegos Vista al Mar', 'Ni hablar, necesitas quedarte en estas habitaciones para que tu mismo compruebes que no hay nada igual, habitaciones con dimensiones muy grandes y 3 camas king size de altisima calidad, habitaciones de lujo como tú');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
CREATE TABLE IF NOT EXISTS `proveedores` (
  `id_proveedor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre_empresa` varchar(30) NOT NULL,
  `ciudad` varchar(25) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(45) NOT NULL,
  `sitio_web` varchar(45) NOT NULL,
  `tipo_proveedor` varchar(10) NOT NULL,
  `producto_servicio` varchar(60) NOT NULL,
  `responsable` varchar(60) NOT NULL,
  PRIMARY KEY (`id_proveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `nombre_empresa`, `ciudad`, `telefono`, `email`, `sitio_web`, `tipo_proveedor`, `producto_servicio`, `responsable`) VALUES
(1, 'Emma', 'Alemania', '+49 300683150', 'hola@emma-colchon.com.mx', 'https://www.emma-colchon.com.mx', 'Producto', 'Colchones ', 'Gretchen Dorft'),
(2, 'Milas', 'MichoacÃ¡n', '4381338559', 'milas@marketing.com.mx', 'https://www.milas.com.mx', 'Producto', 'Regalos del hotel', 'Mario Murillo'),
(3, 'Pikolin', 'EspaÃ±a', '+34  902445570', 'hola@pikolin.com', 'https://www.pikolin.com/es', 'Producto', 'Almohadas/fundas', 'Iker LÃ³pez '),
(4, 'Zara Home', 'Ciudad de MÃ©xico', '018000830986', 'contact.mx@zarahome.com', 'https://www.zarahome.com', 'Producto', 'Toallas/Comedor/Espejos Tapetes/DecoraciÃ³n', 'Jennifer Morales'),
(5, 'Microsoft Santa Fe', 'Ciudad de MÃ©xico', '5552672000', 'xbox360@microsoft.com', 'https://www.xbox.com/es-MX', 'Producto', 'Consolas Xbox', 'Harry GarcÃ­a'),
(6, 'Sony Store (Perisur)', 'Ciudad de MÃ©xico', '5551717035', 'nuevos_negocios@playstation.sony.com', 'https://www.sony.com.mx', 'Producto', 'Consolas Sony', 'SebastiÃ¡n Sanin'),
(7, 'Urrea', 'Jalisco', '01 800 008664 ', 'atencionaclientes@urrea.com.mx', 'https://urrea.mx', 'Producto', 'BaÃ±os', 'Hugo Lozano'),
(8, 'Zenth Polanco', 'Ciudad de MÃ©xico', '3389958034 ', 'clientes_zenth@zenth.com', 'https://www.zenth.com.mx', 'Producto', 'Tinas', 'SofÃ­a SÃ¡nchez '),
(9, 'Frutos con sabor a MÃ©xico', 'Estado de MÃ©xico', '7211430861', 'contacto@frutosconsaboramexico.com', 'https://www.frutosconsaboramexico.com', 'Producto', 'Verduras y frutas', 'Leny Guerra'),
(10, 'Dilac', 'CuauhtitlÃ¡n Izcalli', '5558705500', 'ventas@dilac.com.mx', 'https://www.dilac.com.mx', 'Producto', 'LÃ¡cteos', 'Ximena Montero'),
(11, 'WalMart', 'Ciudad de MÃ©xico', '5551340054', 'super@walmart.com', 'https://www.walmart.com.mx', 'Producto', 'Verduras/frutas/lÃ¡cteos', 'Daniel Herrera '),
(12, 'Costco', 'Estado de MÃ©xico', '5552465593', 'bus726@costco.com.mx', 'https://www.costco.com.mx', 'Producto', 'Carne', 'Yeray GÃ³mez '),
(13, 'Costco', 'Coapa', '5554839080', 'bus702@costco.com.mx', 'https://www.costco.com.mx', 'Producto', 'Refrescos', 'Pablo VÃ¡squez '),
(14, 'Costco', 'Cuernavaca', '7771010510', 'bus713@costco.com.mx', 'https://www.costco.com.mx', 'Producto', 'Tequilas', 'Michelle Vargas'),
(15, 'Liverpool', 'Ciudad de MÃ©xico', '5548559101', 'ventascorporativas@liverpool.com.mx', 'https://www.liverpool.com.mx', 'Producto', 'Muebles', 'Sandy Flores'),
(16, 'Liverpool', 'Ciudad de MÃ©xico', '5548556522 ', 'ventascorporativas@liverpool.com.mx', 'https://www.liverpool.com.mx', 'Producto', 'Pantallas', 'Diana Rey'),
(17, 'Costco', 'Ciudad de MÃ©xico', '5545204052', 'bus728@costco.com.mx', 'https://www.costco.com.mx', 'Producto', 'CafÃ©', 'LeÃ³n Rivero'),
(18, 'Liverpool', 'Ciudad de MÃ©xico', '5545204052', 'bus733@costco.com.mx', 'https://www.costco.com.mx', 'Producto', 'Aceite/artÃ­culos de cocina/despensa', 'LeÃ³n Rivero'),
(19, 'Sams Club', 'Ciudad de MÃ©xico', '5551340091', 'atencionsociosams@walmart.com', 'https://www.sams.com.mx', 'Producto', 'Productos de limpieza', 'Andrea Contreras'),
(20, 'FrioCalor', 'Morelia', '4431761111', 'ventas@friocalormorelia.com', 'http://www.friocalormorelia.com', 'Servicio', 'Mantenimiento calefacciÃ³n/aire acondicionado ', 'Carlos Lerner'),
(21, 'Vidrio Limpio', 'Guadalajara', '3318043591', 'ventas@vidriolimpio.com.mx', 'http://www.vidriolimpio.com.mx', 'Servicio', 'Limpieza de vidrios', 'Carolina Ramos'),
(22, 'Vidrio Limpio', 'Guadalajara', '3318043591', 'ventas@vidriolimpio.com.mx', 'http://www.vidriolimpio.com.mx/', 'Servicio', 'Limpieza/Mantenimiento Albercas-BaÃ±os, etc', 'Jorge Bianchini'),
(23, 'Shell', 'Manzanillo', '018002531034', 'Shell-proveedor-mx@shell.com', 'https://www.shell.com.mx/', 'Servicio', 'Gas', 'Juan GuzmÃ¡n'),
(24, 'jgrservicios', 'Monterrey', '8121816467', 'jgr_servicios@outlook.es', 'https://jgrservicios.com.mx', 'Servicio', 'PlomerÃ­a y electricidad ', 'Antonio Arango'),
(25, 'Mazay', 'Ciudad de MÃ©xico', '5540555552', 'mazay@gmail.com', 'https://www.herreriamazay.com.mx', 'Servicio', 'HerrerÃ­a', 'Martin MÃ¡rquez'),
(26, 'City Paint', 'Puebla', '2212135017', 'ventas@citypaint.com.mx', 'http://www.citypaint.com.mx', 'Servicio', 'Pintura del edificio', 'Adam Sanin'),
(27, 'Sky', 'Ciudad de MÃ©xico', '5540400202', 'servicioenlinea@sky.com.mx', 'https://www.sky.com.mx', 'Servicio', 'Internet y Cable', 'Paul Cisneros'),
(28, 'Telmex', 'Ciudad de MÃ©xico', '8001230000', 'telmexservicio@telmex.com ', 'https://telmex.com', 'Servicio', 'TelÃ©fono', 'Sara Ortega'),
(29, 'Netflix', 'Ciudad de MÃ©xico', '8002833301', 'netflix@netflixmexico.com', 'https://www.netflix.com.mx', 'Servicio', 'Netflix', 'Wine Carbajal'),
(30, 'Elevadores mrm', 'Ciudad de MÃ©xico', '5564770893', 'elevadoresmrm@gmail.com', 'https://elevadoresmrm.com', 'Servicio', 'Mantenimiento al elevador', 'Roberto Soriano'),
(31, 'City Water ', 'Ciudad de MÃ©xico', '5526017810', 'info@citywatermexico.com', 'https://citywatermexico.com', 'Servicio', 'Suministro de agua (Pipas)', 'Gustavo Ruiz'),
(32, 'Ciime', 'Ciudad de MÃ©xico', '5550469910', 'redes@ciime.mx', 'https://ciime.com.mx', 'Servicio', 'Servicios de InformÃ¡tica', 'Marco Alonso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaciones`
--

DROP TABLE IF EXISTS `reservaciones`;
CREATE TABLE IF NOT EXISTS `reservaciones` (
  `num_reservacion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre_cliente` varchar(25) NOT NULL,
  `apellidos_cliente` varchar(25) NOT NULL,
  `email_cliente` varchar(45) NOT NULL,
  `telefono_cliente` varchar(10) NOT NULL,
  `id_habitacion` tinyint(3) UNSIGNED NOT NULL,
  `numero_personas` tinyint(3) UNSIGNED NOT NULL,
  `total` int(10) UNSIGNED NOT NULL,
  `fecha_reservacion` datetime NOT NULL,
  `fecha_llegada` date NOT NULL,
  `fecha_salida` date NOT NULL,
  PRIMARY KEY (`num_reservacion`),
  KEY `id_habitacion` (`id_habitacion`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reservaciones`
--

INSERT INTO `reservaciones` (`num_reservacion`, `nombre_cliente`, `apellidos_cliente`, `email_cliente`, `telefono_cliente`, `id_habitacion`, `numero_personas`, `total`, `fecha_reservacion`, `fecha_llegada`, `fecha_salida`) VALUES
(1, 'Bramdon Isay', 'Santiago Cardoso', 'bramdsantiago@gmail.com', '4381338561', 5, 1, 36400, '2020-05-19 14:11:48', '2020-05-24', '2020-05-31'),
(2, 'Ana Elizabeth ', 'PÃ©rez Lara', 'eli@gmail.com', '4381094097', 5, 6, 36400, '2020-05-19 14:15:32', '2020-06-14', '2020-06-21');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  ADD CONSTRAINT `reservaciones_ibfk_2` FOREIGN KEY (`id_habitacion`) REFERENCES `habitaciones` (`id_habitacion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
