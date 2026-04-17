-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2026 at 09:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empowro-craft`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `total_price` decimal(10,2) NOT NULL,
  `status` enum('pending','completed','cancelled') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `product_id`, `quantity`, `total_price`, `status`, `created_at`) VALUES
(1, 7, 1, 2, 90.00, 'completed', '2026-04-16 17:27:08'),
(2, 7, 2, 1, 12.50, 'pending', '2026-04-16 17:27:08'),
(3, 7, 3, 5, 40.00, 'completed', '2026-04-16 17:27:08');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` int(11) DEFAULT 100,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `vendor_id`, `title`, `price`, `stock`, `created_at`) VALUES
(1, 5, 'Custom Craft Box 10x10', 45.00, 500, '2026-04-16 17:27:08'),
(2, 5, 'Matte Business Cards (1000pcs)', 12.50, 1000, '2026-04-16 17:27:08'),
(3, 6, 'Eco-Friendly Kraft Bags', 8.00, 300, '2026-04-16 17:27:08'),
(4, 6, 'Premium Foil Stamped Labels', 25.00, 500, '2026-04-16 17:27:08'),
(7, 5, 'Small Batch Craft Box', 15.50, 50, '2026-04-16 18:57:21'),
(8, 5, 'Core Test Product', 20.00, 10, '2026-04-16 19:18:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','vendor','customer') DEFAULT 'customer',
  `status` enum('active','inactive','banned') DEFAULT 'active',
  `reset_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `role`, `status`, `reset_token`, `created_at`, `updated_at`) VALUES
(1, 'Aminul Islam (Admin)', 'admin@empowro.com', '01711000000', '$2y$10$6SjYaehZci/uSR8pMJ.b7uIST68omi5NLCWZ7zPLVMgxwLa65QDMu', 'admin', 'active', NULL, '2026-04-12 06:01:37', '2026-04-12 06:01:37'),
(5, 'Jane Doe (Vendor 1)', 'mediabrainy@gmail.com', NULL, '$2y$10$068Cu1mebs9nBHfaVOPWV.LG.RtX0kdo8aR8IQCmBh1GU/WtWkD4G', 'vendor', 'active', NULL, '2026-04-15 03:08:31', '2026-04-15 03:08:31'),
(6, 'Jane Doe (Vendor 2)', 'mediabrainyy@gmail.com', NULL, '$2y$10$QCtZcRYNA6dorWBqzw6OlukoJbUARPUlwrSvfle0QV6lH0jkev3x6', 'vendor', 'active', NULL, '2026-04-15 03:08:43', '2026-04-15 03:08:43'),
(7, 'Updated by Core Test', 'mdahadaminul@gmail.com', '01888888888', '$2y$10$elT9KBWrWJIJL41B3P/38.Q.1GyNLzsz4mlSJXfB5t8dJoIR1el4S', 'customer', 'active', NULL, '2026-04-15 03:09:38', '2026-04-15 03:09:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vendor_id` (`vendor_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`vendor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
