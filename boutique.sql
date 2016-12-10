-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2016 a las 15:57:40
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `boutique`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abonos`
--

CREATE TABLE IF NOT EXISTS `abonos` (
  `id_abono` varchar(6) NOT NULL,
  `id_proveedor` varchar(6) NOT NULL,
  `fecha_abono` date NOT NULL,
  `valor` decimal(6,0) NOT NULL,
  PRIMARY KEY (`id_abono`),
  KEY `id_proveedor` (`id_proveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `abonos`
--

INSERT INTO `abonos` (`id_abono`, `id_proveedor`, `fecha_abono`, `valor`) VALUES
('abo001', 'pro001', '2014-10-23', '100');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(6) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `Direccion` varchar(25) NOT NULL,
  `DUI` varchar(10) NOT NULL,
  `telefono` int(8) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=454 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `apellido`, `Direccion`, `DUI`, `telefono`, `email`) VALUES
(2, 'Monica', 'Portillo', 'Col Aurora', '5467888878', 2147483647, 'mlportilloh14@hotmail.com'),
(14, 'mmmm', 'mmmmmmm', 'mmm', '888', 8888, 'monicaportillo19@gmail.com'),
(15, 'gfgfhg', 'hggfgf', '45ygfhgf', '323233', 544444443, 'monicaportillo19@gmail.com'),
(16, 'gfgggr', 'trrtrt', 'rft54rf', '445455454', 455555, 'monicaportillo19@gmail.com'),
(17, 'errerere', 'rererere', 'tyyytr', 'rtr', 45454, ''),
(18, 'errerere', 'rererere', 'tyyytr', '433333', 45454, 'monicaportillo19@gmail.com'),
(19, 'dffdfd', 'dsdsd', 'dfsff', '4334543', 35544343, 'tgf'),
(20, 'trtrtrtrtr', 'rttrtr', 'rtrtr', '5454', 453454, 'monicaportillo19@gmail.com'),
(21, 'rger', 'retttttttre', 'gfghdhd', '435', 5464432, 'monicaportillo19@gmail.com'),
(22, 'hghggh', 'jhhhnhnh', '45ygfhgf', '9876543433', 2147483647, 'monicaportillo19@gmail.com'),
(23, 'ererrere', 'eereew', 'rerer', '7654321245', 2147483647, 'mlportilloh14@hotmail.com'),
(24, '', '', '', '', 0, ''),
(25, '', '', '', '', 0, ''),
(26, 'fttftftf', 'tttdrtrtr', 'ttrtrtrtr', '55456464', 0, 'monicaportillo19@gmail.com'),
(27, 'ffdfd', 'fdfdfd', 'sddssd', 'dfsdfsdfsd', 0, 'dsdsd'),
(28, 'fdffdfd', 'fdffdfd', 'fdfdf', '45454', 2147483647, 'monicaportillo19@gmail.com'),
(29, 'wewerwer', 'wrrrrw', 'rrere', 'rrer', 767676, 'monicaportillo19@gmail.com'),
(444, 'ffd', 'fdfd', 'fddf', 'df34542', 2454424, '4222222226fs'),
(445, '', '', '', '', 0, ''),
(446, 'sdadsd', 'ddsdsd', 'ddsdsds', '1234567543', 232343, 'mlportilloh14@hotmail.com'),
(447, 'Jose', 'Arg', 'San Miguel', '232332323', 74714870, 'mm@gmail.com'),
(448, 'Joseline', 'Rosales', 'San Miguel', '43434334', 76563412, 'joseline@gmail.com'),
(449, 'Lourdes Maria', 'Rosales', 'San Miguel', '34567687', 67895432, 'lourdes@gmail.com'),
(450, 'Carolina', 'Lopez', 'San Miguel', '33333456', 76543212, 'caro@gmail.com'),
(451, 'Karina', 'Lopez', 'San Miguel', '2345676543', 76587643, 'kari@gmail.com'),
(452, 'Luis', 'Lorenzo', 'San Miguel', '5432456', 76876532, 'luis@gmail.com'),
(453, 'Karen', 'Lopez', 'San Miguel', '9875678978', 76543212, 'karen@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE IF NOT EXISTS `compras` (
  `id_compra` varchar(6) NOT NULL,
  `id_proveedor` varchar(6) NOT NULL,
  `id_perfume` varchar(6) NOT NULL,
  `cantidad` int(3) NOT NULL,
  `fecha_compra` date NOT NULL,
  `total` decimal(6,0) NOT NULL,
  `saldo_pendiente` decimal(6,0) NOT NULL,
  PRIMARY KEY (`id_compra`),
  KEY `id_proveedor` (`id_proveedor`),
  KEY `id_perfume` (`id_perfume`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE IF NOT EXISTS `empleados` (
  `id_empleado` varchar(6) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `DUI` varchar(10) NOT NULL,
  `f_nacimiento` date NOT NULL,
  `telefono` int(8) NOT NULL,
  `f_inicio` date NOT NULL,
  `puesto` varchar(20) NOT NULL,
  `salario` decimal(6,0) NOT NULL,
  PRIMARY KEY (`id_empleado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `nombre`, `apellido`, `direccion`, `DUI`, `f_nacimiento`, `telefono`, `f_inicio`, `puesto`, `salario`) VALUES
('em98', 'Jose', 'Castillo', 'San Miguel', '456788766', '0000-00-00', 76898976, '2012-03-15', 'Gerente', '550'),
('emp001', 'Marcos Jose', 'Perez', 'col. san benito #42', '12457693-3', '2000-12-17', 78965421, '2014-01-06', 'Gerente ventas', '800');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfume`
--

CREATE TABLE IF NOT EXISTS `perfume` (
  `id_perfume` varchar(6) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `marca` varchar(15) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `ml` int(4) NOT NULL,
  `familia` varchar(15) NOT NULL,
  `cantidad_existente` int(4) NOT NULL,
  `precio_unitario` decimal(5,0) NOT NULL,
  `precio_mayoreo` decimal(5,0) NOT NULL,
  `precio_compra` decimal(5,0) NOT NULL,
  `imagen` text NOT NULL,
  PRIMARY KEY (`id_perfume`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfume`
--

INSERT INTO `perfume` (`id_perfume`, `nombre`, `marca`, `descripcion`, `ml`, `familia`, `cantidad_existente`, `precio_unitario`, `precio_mayoreo`, `precio_compra`, `imagen`) VALUES
('1', 'Coco Mademoisel', 'chanelkkkk', 'Fresca y sensual. Un', 100, 'floral de rosa ', 25, '80', '60', '0', '761413_116520_a_LARGE.jpg'),
('10', 'ANTAEUS', 'chanel', 'Perfume sensual y po', 100, 'AromÃ¡tico-cuer', 75, '80', '75', '0', '668426_118450_a_LARGE.jpg'),
('11', '212', 'carolina herrer', 'Sorprendente fraganc', 100, 'La luz captura ', 75, '90', '80', '0', '130066_212_men_by_carolina_herrera_100ml_.jpg'),
('12', '212 SEXY', 'Carolina Herrer', 'La forma del frasco ', 100, 'Sensualidad sex', 40, '80', '75', '0', '531128_producto-2270-2.jpg'),
('13', '212 surf', 'carolina herrer', 'Este original frasco', 100, 'Este acorde acu', 40, '60', '50', '0', '710174_PRFM-199904 (1).jpg'),
('14', '212 body-spray', 'carolina herrer', 'El exclusivo diseÃ±o', 100, 'Aire fresco - F', 25, '100', '75', '0', '59754_7005517792_6a3e8a7f8e_z.jpg'),
('15', '212 body-spray', 'carolina herrer', 'El exclusivo diseÃ±o', 100, 'Comodidad y fre', 25, '150', '100', '0', '375855_71wpm7GdHaL._SY355_.jpg'),
('16', '212 VIP', 'carolina herrer', 'La botella es un pod', 100, 'CÃ³ctel que man', 25, '150', '125', '0', '131653_nd.12865.jpg'),
('17', 'Can Can Burlesq', 'Paris Hilton', 'El olor, al igual qu', 100, 'Las notas super', 25, '80', '60', '0', '551392_nd.24464.jpg'),
('18', 'Heir', 'Paris Hilton', 'es una fragancia aro', 100, 'La fragancia cu', 50, '100', '80', '0', '570648_yhst-87074699935963_2271_360868406.jpg'),
('19', 'Eau De Toilette', 'Lacoste', 'La nota mÃ¡s alta se', 100, 'es una fraganci', 60, '75', '65', '0', '280518_68716M.jpg'),
('2', 'COCO NOIR', 'chanel', 'La versiÃ³n voluptuo', 100, 'El acorde noble', 50, '60', '50', '0', '351013_113630_a_LARGE.png'),
('20', 'Gucci Eau ', 'Gucci', 's una fragancia de l', 100, 'frambuesa negra', 25, '90', '75', '0', '494171_o.841.jpg'),
('3', 'Coco ', 'chanel', ' Un perfume atractiv', 100, 'un acorde sensu', 80, '80', '70', '0', '397705_113530_a_LARGE.jpg'),
('4', 'CRISTALLE EAU V', 'chanel paris', 'un eau de toilette c', 100, 'pÃ©talos limÃ³n', 50, '90', '80', '0', '101593_111260_a_LARGE.jpg'),
('5', 'Blue', 'chanel', 'eau de parfum, un ar', 100, 'Una interpretac', 50, '90', '85', '0', '506653_107350_a_LARGE.jpg'),
('6', ' ALLURE HOMME S', 'chanel', '4 facetas que compon', 100, 'Un frescor chis', 80, '90', '75', '0', '834259_123620_a_LARGE.jpg'),
('7', ' ALLURE HOMME', 'chanel', 'Textura ligera y no ', 100, 'LociÃ³n fresca ', 60, '100', '80', '0', '445648_121450_a_LARGE.jpg'),
('8', 'Platinum-Ã‰goÃ¯', 'chanel paris', 'Perfume fresco y mas', 100, 'Fresco-verde-am', 75, '100', '80', '0', '277069_124450_a_LARGE.jpg'),
('9', 'POUR-MONSIEUR', 'chanel', 'La elegancia masculi', 100, 'Fresco-chipre, ', 100, '90', '75', '0', '203156_117450_a_LARGE.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE IF NOT EXISTS `promociones` (
  `id_promocion` varchar(6) NOT NULL,
  `id_perfume` varchar(6) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `f_inicio` date NOT NULL,
  `f_final` date NOT NULL,
  `precio_unitario` decimal(5,0) NOT NULL,
  `descuento` decimal(5,0) NOT NULL,
  `total` decimal(5,0) NOT NULL,
  PRIMARY KEY (`id_promocion`),
  KEY `id_perfume` (`id_perfume`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
  `id_proveedor` varchar(6) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `Direccion` varchar(30) NOT NULL,
  `telefono` int(8) NOT NULL,
  `email` varchar(30) NOT NULL,
  `saldo` decimal(6,0) NOT NULL,
  PRIMARY KEY (`id_proveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `nombre`, `Direccion`, `telefono`, `email`, `saldo`) VALUES
('pro001', 'Fernando Caseres', 'col. almendros #75', 28975463, 'fer_caseres78@gmail.com', '100');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `alias` varchar(25) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `type` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`alias`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`alias`, `pass`, `type`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 1),
('user', '21232f297a57a5a743894a0e4a801fc3', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE IF NOT EXISTS `ventas` (
  `id_venta` int(6) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(6) NOT NULL,
  `id_perfume` varchar(6) NOT NULL,
  `id_empleado` varchar(6) NOT NULL,
  `cantidad` int(4) NOT NULL,
  `fecha` date NOT NULL,
  `id_promocion` varchar(6) NOT NULL,
  `total` decimal(6,0) NOT NULL,
  PRIMARY KEY (`id_venta`),
  KEY `id_cliente` (`id_cliente`),
  KEY `id_perfume` (`id_perfume`),
  KEY `id_empleado` (`id_empleado`),
  KEY `id_promocion` (`id_promocion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_online`
--

CREATE TABLE IF NOT EXISTS `ventas_online` (
  `id_ventaonline` int(6) NOT NULL AUTO_INCREMENT,
  `id_perfume` varchar(6) NOT NULL,
  `id_cliente` int(6) NOT NULL,
  `cantidad` int(4) NOT NULL,
  `tarjeta` varchar(15) NOT NULL,
  `total` decimal(6,0) NOT NULL,
  PRIMARY KEY (`id_ventaonline`),
  KEY `id_perfume` (`id_perfume`),
  KEY `id_cliente` (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `abonos`
--
ALTER TABLE `abonos`
  ADD CONSTRAINT `abonos_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedores` (`id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`id_perfume`) REFERENCES `perfume` (`id_perfume`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedores` (`id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD CONSTRAINT `promociones_ibfk_1` FOREIGN KEY (`id_perfume`) REFERENCES `perfume` (`id_perfume`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`id_perfume`) REFERENCES `perfume` (`id_perfume`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ventas_ibfk_3` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id_empleado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ventas_ibfk_4` FOREIGN KEY (`id_promocion`) REFERENCES `promociones` (`id_promocion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas_online`
--
ALTER TABLE `ventas_online`
  ADD CONSTRAINT `ventas_online_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ventas_online_ibfk_2` FOREIGN KEY (`id_perfume`) REFERENCES `perfume` (`id_perfume`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
