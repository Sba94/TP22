-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2022 a las 18:23:33
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_cevecera`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(1, 'Lupulo', 'Todas las variedades y clases del mejor lupulo.'),
(2, 'Malta', 'Las mejores semillas seleccionadas para la mejor cerveza.'),
(3, 'Levadura', 'Levaduras en Polvo para elaboración de Cerveza Artesanal. ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL,
  `stock` int(11) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `description`, `stock`, `id_category`) VALUES
(3, 'Bullion - Lúpulos Patagónicos', 300, 'Lúpulo de origen inglés e hijo de la variedad Brewers Gold. Si bien su desarrollo data de 1919, recién en los últimos años se ha vuelto popular por sus aromas a frutas de carozo (duraznos, pelones, ciruelas). Aunque siempre se lo caracterizó como un lúpulo de amargor, hoy tiene una tendencia de uso dual.', 5, 1),
(4, 'Roasted Barley', 250, 'Sabor astringente, amargo, quemado, con sabores a café y nueces. La cebada sin maltear en un tambor de tueste giratorio se tuesta a temperaturas de hasta 240 ° C.', 15, 2),
(5, 'Aromatic Amber ', 152, 'Esta malta cuenta con una germinado intensivo y un leve horneado otorgándole así un fuerte aroma a malta y un profundo color rojizo.', 5, 2),
(6, 'Patagonia Red', 120, 'Es la primera variedad comercial del programa de variedades de Lúpulos Patagónicos. Experimentalmente se la denominó AL001. Aporta aromas y sabores dulces, es por esto que no es recomendable usarla con maltas caramelo. Su amargor es suave y no astrigente con un retrogusto agradable y poco duradero.', 25, 1),
(7, 'Dry Ale Yeast', 300, 'Cepa ale inglesa seleccionada por su rápida capacidad fermentativa y por formar un sedimento compacto al final de la fermentación, ayudando a mejorar la claridad de la cerveza. ', 250, 3),
(8, 'Saflager S-23', 700, 'Esta cepa de fermentación baja es originaria del instituto VLB de Berlín, Alemania, y es recomendada para la producción de lagers frutales, con elevados ésteres. Su bajo perfil de atenuación produce cervezas con buena persistencia en el paladar.', 250, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(250) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', '$2a$12$wCEdF3/jfjsuPGfmCeA/GusEfK7R8M0ziRzDv2xAu6ySEjJOECP8K');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
