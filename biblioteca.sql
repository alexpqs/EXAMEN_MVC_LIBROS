-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-08-2024 a las 22:50:58
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `año_publicacion` year(4) NOT NULL,
  `genero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `titulo`, `autor`, `año_publicacion`, `genero`) VALUES
(1, 'Cien años de soledad', 'Gabriel García Márquez', '1967', 'Realismo Mágico'),
(2, '1984', 'George Orwell', '1949', 'Distopía'),
(3, 'Harry Potter y la piedra filosofal', 'J.K. Rowling', '1997', 'Fantasía'),
(4, 'Matar a un ruiseñor', 'Harper Lee', '1960', 'Drama'),
(5, 'Orgullo y prejuicio', 'Jane Austen', '0000', 'Romance'),
(6, 'El gran Gatsby', 'F. Scott Fitzgerald', '1925', 'Clásico Moderno'),
(7, 'Guerra y paz', 'Leo Tolstoy', '0000', 'Clásico'),
(8, 'El señor de los anillos', 'J.R.R. Tolkien', '1954', 'Fantasía'),
(9, 'El viejo y el mar', 'Ernest Hemingway', '1952', 'Aventura'),
(10, 'La metamorfosis', 'Franz Kafka', '1915', 'Existencialismo'),
(11, 'Don Quijote de la Mancha', 'Miguel de Cervantes', '0000', 'Clásico'),
(12, 'Crimen y castigo', 'Fyodor Dostoevsky', '0000', 'Psicológico'),
(13, 'Las aventuras de Huckleberry Finn', 'Mark Twain', '0000', 'Aventura'),
(14, 'Un mundo feliz', 'Aldous Huxley', '1932', 'Distopía'),
(15, 'Frankenstein', 'Mary Shelley', '0000', 'Ciencia Ficción'),
(16, 'Asesinato en el Orient Express', 'Agatha Christie', '1934', 'Misterio'),
(17, 'La máquina del tiempo', 'H.G. Wells', '0000', 'Ciencia Ficción'),
(18, 'Siddhartha', 'Hermann Hesse', '1922', 'Filosófico'),
(19, 'Fahrenheit 451', 'Ray Bradbury', '1953', 'Distopía'),
(20, 'El amor en los tiempos del cólera', 'Gabriel García Márquez', '1985', 'Realismo Mágico');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
