-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2023 a las 13:37:45
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
-- Base de datos: `colfexxiones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `administrador_id` int(7) NOT NULL,
  `admin_nombres` varchar(70) NOT NULL,
  `admin_apellidos` varchar(70) NOT NULL,
  `admin_telefono` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(15) NOT NULL,
  `admin_rol` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`administrador_id`, `admin_nombres`, `admin_apellidos`, `admin_telefono`, `admin_email`, `admin_password`, `admin_rol`) VALUES
(1, 'David', 'Casas', '7222423333', 'david123@gmail.com', 'david123', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aliados`
--

CREATE TABLE `aliados` (
  `aliado_id` int(7) NOT NULL,
  `ali_documento` int(10) NOT NULL,
  `ali_nombres` varchar(70) NOT NULL,
  `ali_apellidos` varchar(70) NOT NULL,
  `ali_tipo_producto` varchar(50) NOT NULL,
  `ali_telefono` varchar(20) NOT NULL,
  `ali_direccion` varchar(30) DEFAULT NULL,
  `ali_email` varchar(50) NOT NULL,
  `ali_nombre_empresa` varchar(30) NOT NULL,
  `ali_estado` varchar(15) NOT NULL,
  `ali_password` varchar(15) NOT NULL,
  `ali_foto` varchar(25) NOT NULL,
  `ali_ventas` int(10) NOT NULL,
  `ali_rol` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `aliados`
--

INSERT INTO `aliados` (`aliado_id`, `ali_documento`, `ali_nombres`, `ali_apellidos`, `ali_tipo_producto`, `ali_telefono`, `ali_direccion`, `ali_email`, `ali_nombre_empresa`, `ali_estado`, `ali_password`, `ali_foto`, `ali_ventas`, `ali_rol`) VALUES
(1, 123456789, 'carlos', 'mancera', 'pantalones', '2222223333', 'dg 11 cr 2', 'carlos123@gmail.com', 'pantalonxz', '', 'carlos123', '', 0, 2),
(2, 2147483647, 'vendedor', 'dd', 'Zapatos', '11111123333', 'dg 23 cr 3', 'vendedor123@gmail.com', 'colzapatos', '', 'vendedor123', '', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `categoria_id` int(10) NOT NULL,
  `cat_descripcion` varchar(50) NOT NULL,
  `cat_nombre` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`categoria_id`, `cat_descripcion`, `cat_nombre`) VALUES
(1, 'Todo tipo de camisetas', 'Camisetas'),
(2, 'Todo tipo de pantalones', 'Pantalones'),
(3, 'Todo tipo de zapatos', 'Zapatos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informes`
--

CREATE TABLE `informes` (
  `informe_id` varchar(15) NOT NULL,
  `info_descripcion` varchar(150) NOT NULL,
  `info_fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `producto_id` int(15) NOT NULL,
  `pro_nombre` varchar(70) NOT NULL,
  `pro_cant_disponible` int(10) NOT NULL,
  `pro_precio` float NOT NULL,
  `pro_estado` varchar(15) NOT NULL,
  `pro_imagen` varchar(20) NOT NULL,
  `pro_categoria` int(7) NOT NULL,
  `pro_aliado` int(7) NOT NULL,
  `pro_fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`producto_id`, `pro_nombre`, `pro_cant_disponible`, `pro_precio`, `pro_estado`, `pro_imagen`, `pro_categoria`, `pro_aliado`, `pro_fecha_registro`) VALUES
(1, 'Saco negro', 10, 50000, 'Activo', 'ImgSaco', 1, 1, '2023-11-14'),
(2, 'zapato formal', 7, 123000, 'Activo', 'ImgZapato', 2, 2, '2023-11-29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(5) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `descripcion`) VALUES
(1, 'Usuarios'),
(2, 'Aliados'),
(3, 'Administradores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(7) NOT NULL,
  `usu_nombres` varchar(70) NOT NULL,
  `usu_apellidos` varchar(70) NOT NULL,
  `usu_telefono` varchar(50) NOT NULL,
  `usu_email` varchar(50) NOT NULL,
  `usu_estado` varchar(15) NOT NULL,
  `usu_password` varchar(15) NOT NULL,
  `usu_rol` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `usu_nombres`, `usu_apellidos`, `usu_telefono`, `usu_email`, `usu_estado`, `usu_password`, `usu_rol`) VALUES
(1, 'Santiago', 'Rocha', '111111222', 'santiago123@gmail.com', '', 'santiago123', 1),
(2, 'Elvis', 'crespo', '11133333322', 'elvis123@gmail.com', '', 'elvis123', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`administrador_id`),
  ADD KEY `admin_rol` (`admin_rol`);

--
-- Indices de la tabla `aliados`
--
ALTER TABLE `aliados`
  ADD PRIMARY KEY (`aliado_id`),
  ADD KEY `ali_rol` (`ali_rol`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Indices de la tabla `informes`
--
ALTER TABLE `informes`
  ADD PRIMARY KEY (`informe_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`producto_id`),
  ADD KEY `pro_aliado` (`pro_aliado`),
  ADD KEY `pro_categoria` (`pro_categoria`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`),
  ADD KEY `usu_rol` (`usu_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `administrador_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `aliados`
--
ALTER TABLE `aliados`
  MODIFY `aliado_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `categoria_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `producto_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD CONSTRAINT `administradores_ibfk_1` FOREIGN KEY (`admin_rol`) REFERENCES `roles` (`id`);

--
-- Filtros para la tabla `aliados`
--
ALTER TABLE `aliados`
  ADD CONSTRAINT `aliados_ibfk_1` FOREIGN KEY (`ali_rol`) REFERENCES `roles` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`pro_aliado`) REFERENCES `aliados` (`aliado_id`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`pro_categoria`) REFERENCES `categorias` (`categoria_id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`usu_rol`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
