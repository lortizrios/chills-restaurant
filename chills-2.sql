-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 05, 2023 at 09:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chills`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id_account` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id_account`, `client_name`, `address`, `phone_number`, `email`) VALUES
(1, 'Juan Pérez', 'Calle Principal 123, San Juan, PR', '787-123-4567', 'juan.perez@yahoo.com'),
(2, 'María García', 'Avenida Independencia 567, Bayamón, PR', '787-654-3210', 'maria.garcia@gmail.com'),
(3, 'Pedro Rodríguez', 'Calle Segunda 345, Caguas, PR', '787-234-5678', 'pedro.rodriguez@yahoo.com'),
(4, 'Ana López', 'Avenida Tercera 678, Ponce, PR', '787-345-6789', 'ana.lopez@gmail.com'),
(5, 'José Martínez', 'Calle Cuarta 789, Mayagüez, PR', '787-456-7890', 'jose.martinez@hotmail.com'),
(6, 'Luisa Sánchez', 'Avenida Quinta 901, Aguadilla, PR', '787-567-8901', 'luisa.sanchez@yahoo.com'),
(7, 'Carlos Gómez', 'Calle Sexta 890, Arecibo, PR', '787-678-9012', 'carlos.gomez@gmail.com'),
(8, 'María Hernández', 'Avenida Séptima 789, Humacao, PR', '787-789-0123', 'maria.hernandez@hotmail.com'),
(9, 'Juan Rivera', 'Calle Octava 901, Fajardo, PR', '787-890-1234', 'juan.rivera@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `name`, `description`, `price`) VALUES
(1, 'Pizza Margarita', 'Pizza tradicional con salsa de tomate, queso mozzarella y orégano', 12.00),
(2, 'Ensalada César', 'Ensalada con lechuga, pollo, croutons y aderezo César', 10.00),
(3, 'Hamburguesa Clásica', 'Hamburguesa con carne de res, queso, lechuga, tomate y cebolla', 15.00),
(4, 'Pulpo a la gallega', 'Pulpo hervido con papas, cebolla y pimentón', 20.00),
(5, 'Pastel de carne', 'Pastel de carne con masa de hojaldre', 15.00),
(6, 'Arroz con pollo', 'Arroz con pollo, guisantes y habichuelas', 10.00),
(7, 'Mofongo', 'Mofongo de plátano verde con carne de cerdo frita', 12.00),
(8, 'Pastelón de plátano verde', 'Pastelón de plátano verde con carne de res, pollo o cerdo', 15.00),
(9, 'Asopao de pollo', 'Asopao de pollo con arroz, vegetales y especias', 10.00);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `id_account` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `completed_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'Juan Pérez', 'juan.perez@yahoo.com', '123456', 'client'),
(2, 'María García', 'maria.garcia@gmail.com', '123456', 'admin'),
(3, 'Pedro Rodríguez', 'pedro.rodriguez@yahoo.com', '123456', 'client'),
(4, 'Ana López', 'ana.lopez@gmail.com', '123456', 'client'),
(5, 'José Martínez', 'jose.martinez@hotmail.com', '123456', 'client'),
(6, 'Luisa Sánchez', 'luisa.sanchez@yahoo.com', '123456', 'client'),
(7, 'Carlos Gómez', 'carlos.gomez@gmail.com', '123456', 'client'),
(8, 'María Hernández', 'maria.hernandez@hotmail.com', '123456', 'client'),
(9, 'Juan Rivera', 'juan.rivera@yahoo.com', '123456', 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id_account`),
  ADD UNIQUE KEY `phone_number` (`phone_number`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_account` (`id_account`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id_account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_account`) REFERENCES `accounts` (`id_account`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
