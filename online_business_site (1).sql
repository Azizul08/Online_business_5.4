-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2021 at 08:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_business_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoryName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publicationStatus` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryName`, `categoryDescription`, `publicationStatus`, `created_at`, `updated_at`) VALUES
(1, 'Branded foods', 'All Brand', 1, '2020-08-25 16:45:43', NULL),
(2, 'Households', 'Households Products', 1, '2020-08-25 16:46:06', NULL),
(3, 'Electronics', '<p>Eletronic products</p>', 1, NULL, NULL),
(4, 'Grocery', '<p>Grocery products</p>', 1, NULL, '2020-08-26 11:21:13'),
(6, 'VEGETABLES & FRUITS', '<p>VEGETABLES &amp; FRUITS</p>', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailAddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `firstName`, `lastName`, `emailAddress`, `phoneNumber`, `password`, `remember_token`, `address`, `created_at`, `updated_at`) VALUES
(1, 'saddam', 'saddam', 'saddam@gmail.com', '01516163561', '$2y$10$SUNAFWWfAplS0T5w1Q/Hg.dfdax9T79g2y1fgS2B/k/8/A.a35z9m', 'nX06ltP7LXhWm6VASTO7pcLrfIrAdda4hLF7yehrz9JjzG3d0Rcz0HMFm5s9', 'pabna', '2020-09-01 11:44:58', '2020-09-01 11:44:58'),
(2, 'kader', 'kader', 'kader@gmail.com', '01516163561', '$2y$10$4/VTKVWXjJcqyggn/Vql6.Ew/Rl9C/TZG6B6nv.yYbWQdzsYhqk16', 'g3OtMcPyUexW1wIrem28uwOp5diCbZG3tP6HuxzWA3FV6Y6qvO9ihpzCStgR', 'Pabna', '2020-09-01 11:46:41', '2020-09-01 11:46:41');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `manufacturerName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacturerDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publicationStatus` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `manufacturerName`, `manufacturerDescription`, `publicationStatus`, `created_at`, `updated_at`) VALUES
(1, 'Branded company', 'Square', 1, '2020-08-26 15:39:10', NULL),
(2, 'Walton', '<p>Electronic products</p>', 1, NULL, NULL),
(4, 'VEGETABLES', '<p>VEGETABLES &amp; FRUITS</p>', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_08_25_150852_create_products_table', 1),
(4, '2020_08_25_151531_create_categories_table', 2),
(5, '2020_08_26_145634_create_manufacturers_table', 3),
(6, '2020_08_27_131048_create_customers_table', 4),
(7, '2020_09_01_073219_create_shippings_table', 5),
(8, '2020_09_01_130606_create_payments_table', 6),
(9, '2020_09_01_130702_create_orders_table', 6),
(10, '2020_09_01_130804_create_order_details_table', 6),
(11, '2020_09_01_174319_create_customers_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customerId` int(11) NOT NULL,
  `shippingId` int(11) NOT NULL,
  `orderTotal` double(10,2) NOT NULL,
  `orderStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customerId`, `shippingId`, `orderTotal`, `orderStatus`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 700.00, 'pending', '2020-09-01 11:52:04', '2020-09-01 11:52:04'),
(2, 2, 3, 700.00, 'pending', '2020-09-01 11:53:01', '2020-09-01 11:53:01'),
(3, 2, 3, 700.00, 'pending', '2020-09-01 11:57:02', '2020-09-01 11:57:02'),
(4, 2, 3, 700.00, 'pending', '2020-09-01 11:59:10', '2020-09-01 11:59:10'),
(5, 2, 3, 700.00, 'pending', '2020-09-01 12:00:38', '2020-09-01 12:00:38'),
(6, 1, 4, 135.00, 'pending', '2020-09-01 12:48:31', '2020-09-01 12:48:31'),
(7, 1, 4, 135.00, 'pending', '2020-09-01 12:52:02', '2020-09-01 12:52:02'),
(8, 2, 6, 1200.00, 'pending', '2020-09-03 05:43:59', '2020-09-03 05:43:59'),
(9, 1, 7, 1085.00, 'pending', '2020-09-07 14:58:47', '2020-09-07 14:58:47'),
(10, 1, 9, 25.00, 'pending', '2020-10-11 22:27:30', '2020-10-11 22:27:30');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orderId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productPrice` double(10,2) NOT NULL,
  `productQuantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `orderId`, `productId`, `productName`, `productPrice`, `productQuantity`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 'Honey', 700.00, 1, NULL, NULL),
(2, 5, 1, 'Honey', 700.00, 1, NULL, NULL),
(3, 6, 2, 'Rice', 50.00, 2, NULL, NULL),
(4, 6, 4, 'Salt', 35.00, 1, NULL, NULL),
(5, 7, 2, 'Rice', 50.00, 2, NULL, NULL),
(6, 7, 4, 'Salt', 35.00, 1, NULL, NULL),
(7, 8, 3, 'Ghee', 1200.00, 1, NULL, NULL),
(8, 9, 4, 'Salt', 35.00, 1, NULL, NULL),
(9, 9, 8, 'Honey', 700.00, 1, NULL, NULL),
(10, 9, 2, 'Rice', 50.00, 7, NULL, NULL),
(11, 10, 6, 'Tissue', 25.00, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orderId` int(11) NOT NULL,
  `paymentType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paymentStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `orderId`, `paymentType`, `paymentStatus`, `created_at`, `updated_at`) VALUES
(1, 1, 'cashOnDelivery', 'pending', '2020-09-01 11:52:04', '2020-09-01 11:52:04'),
(2, 2, 'cashOnDelivery', 'pending', '2020-09-01 11:53:01', '2020-09-01 11:53:01'),
(3, 3, 'cashOnDelivery', 'pending', '2020-09-01 11:57:02', '2020-09-01 11:57:02'),
(4, 4, 'cashOnDelivery', 'pending', '2020-09-01 11:59:10', '2020-09-01 11:59:10'),
(5, 5, 'cashOnDelivery', 'pending', '2020-09-01 12:00:38', '2020-09-01 12:00:38'),
(6, 6, 'cashOnDelivery', 'pending', '2020-09-01 12:48:31', '2020-09-01 12:48:31'),
(7, 7, 'cashOnDelivery', 'pending', '2020-09-01 12:52:02', '2020-09-01 12:52:02'),
(8, 8, 'cashOnDelivery', 'pending', '2020-09-03 05:43:59', '2020-09-03 05:43:59'),
(9, 9, 'cashOnDelivery', 'pending', '2020-09-07 14:58:47', '2020-09-07 14:58:47'),
(10, 10, 'cashOnDelivery', 'pending', '2020-10-11 22:27:30', '2020-10-11 22:27:30');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryId` int(11) NOT NULL,
  `manufacturerId` int(11) NOT NULL,
  `productPrice` double(10,2) NOT NULL,
  `productPriceOld` int(10) NOT NULL,
  `productQuantity` int(11) NOT NULL,
  `productDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `productImage` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publicationStatus` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productName`, `categoryId`, `manufacturerId`, `productPrice`, `productPriceOld`, `productQuantity`, `productDescription`, `productImage`, `publicationStatus`, `created_at`, `updated_at`) VALUES
(1, 'Honey', 1, 1, 700.00, 750, 5, 'Pure', 'productImage/honey.png', 1, '2020-08-25 16:47:54', NULL),
(2, 'Rice', 2, 1, 50.00, 55, 50, 'Good Product', 'productImage/4.png', 1, '2020-08-25 16:50:06', NULL),
(3, 'Ghee', 2, 1, 1200.00, 1250, 10, 'Pure ghee', 'productImage/ghee.jpg', 1, '2020-08-25 17:34:54', NULL),
(4, 'Salt', 1, 1, 35.00, 38, 50, 'Salt Salt', 'productImage/21.png', 1, '2020-08-25 17:35:43', NULL),
(5, 'Oil', 2, 1, 120.00, 125, 100, '', 'productImage/down.jpg', 1, '2020-08-26 09:46:39', '2020-08-26 09:46:39'),
(6, 'Tissue', 2, 1, 25.00, 26, 50, '<p>TissueTissueTissue</p>', 'productImage/unnamed.jpg', 1, '2020-08-26 10:15:34', '2020-08-26 10:15:34'),
(8, 'Honey', 1, 1, 700.00, 800, 5, '<p>Pure</p>', 'productImage/honey.png', 1, '2020-08-26 12:04:51', '2020-08-26 12:04:51'),
(9, 'Honey', 1, 1, 700.00, 720, 5, '<p>Pure</p>', 'productImage/honey.png', 1, '2020-08-26 12:05:30', '2020-08-26 12:05:30'),
(10, 'Fresh Bananas', 6, 4, 80.00, 0, 12, '<p>Bananas</p>', 'productImage/29.png', 1, '2020-09-03 06:00:31', '2020-09-03 06:00:31'),
(11, 'Fresh Cauliflower', 6, 4, 50.00, 60, 10, '<p><span style=\"color: #212121; font-family: \'Open Sans\', sans-serif; text-transform: capitalize;\">Fresh Cauliflower</span></p>', 'productImage/30.png', 1, '2020-09-03 06:02:27', '2020-09-03 06:02:27'),
(12, 'Fresh Brinjal Bharta (1 Kg)', 6, 4, 50.00, 55, 40, '<p><span style=\"color: #212121; font-family: \'Open Sans\', sans-serif; text-transform: capitalize;\">Fresh Brinjal Bharta (1 Kg)</span></p>', 'productImage/31.png', 1, '2020-09-03 06:03:29', '2020-09-03 06:03:29'),
(13, 'Fresh Sweet Lime', 6, 4, 180.00, 200, 20, '<p><span style=\"color: #212121; font-family: \'Open Sans\', sans-serif; text-transform: capitalize;\">Fresh Sweet Lime</span></p>', 'productImage/32.png', 1, '2020-09-03 06:04:17', '2020-09-03 06:04:17'),
(14, 'Fresh Spinach (Palak)', 6, 4, 70.00, 75, 20, '<p><span style=\"color: #212121; font-family: \'Open Sans\', sans-serif; text-transform: capitalize;\">Fresh Spinach (Palak)</span></p>', 'productImage/9.png', 1, '2020-09-03 06:04:59', '2020-09-03 06:04:59'),
(15, 'Fresh Mango Dasheri (1 Kg)', 6, 4, 90.00, 95, 20, '<p><span style=\"color: #212121; font-family: \'Open Sans\', sans-serif; text-transform: capitalize;\">Fresh Mango Dasheri (1 Kg)</span></p>', 'productImage/10.png', 1, '2020-09-03 06:05:41', '2020-09-03 06:05:41'),
(16, 'Fresh Basket Onion (1 Kg)', 6, 4, 45.00, 50, 20, '<p><span style=\"color: #212121; font-family: \'Open Sans\', sans-serif; text-transform: capitalize;\">Fresh Basket Onion (1 Kg)</span></p>', 'productImage/33.png', 1, '2020-09-03 06:06:25', '2020-09-03 06:06:25'),
(17, 'Fresh Apple Red (1 Kg)', 6, 4, 160.00, 170, 20, '<p><span style=\"color: #212121; font-family: \'Open Sans\', sans-serif; text-transform: capitalize;\">Fresh Apple Red (1 Kg)</span></p>', 'productImage/11.png', 1, '2020-09-03 06:07:06', '2020-09-03 06:07:06');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailAddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `fullName`, `emailAddress`, `phoneNumber`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Md. Azizul', 'm.azizulcse@gmail.com', '01746478604', 'Dhaka', '2020-09-01 07:44:49', NULL),
(2, 'Md. Sagor', 'sagor@gmail.com', '01521122009', 'Baridhara,Dhaka', '2020-09-01 06:44:30', '2020-09-01 06:44:30'),
(3, 'Md. Sagor', 'sagor@gmail.com', '01521122009', 'Baridhara,Dhaka', '2020-09-01 11:51:57', '2020-09-01 11:51:57'),
(4, 'Md. Sagor', 'sagor@gmail.com', '01521122009', 'Baridhara,Dhaka', '2020-09-01 12:48:22', '2020-09-01 12:48:22'),
(5, 'Md. Sagor', 'sagor@gmail.com', '01521122009', 'Baridhara,Dhaka', '2020-09-03 05:07:59', '2020-09-03 05:07:59'),
(6, 'kader kader', 'kader@gmail.com', '01516163561', 'Pabna', '2020-09-03 05:43:54', '2020-09-03 05:43:54'),
(7, 'saddam saddam', 'saddam@gmail.com', '01516163561', 'pabna', '2020-09-07 14:58:37', '2020-09-07 14:58:37'),
(8, 'kader kader', 'kader@gmail.com', '01516163561', 'Pabna', '2020-09-07 15:08:34', '2020-09-07 15:08:34'),
(9, 'saddam saddam', 'saddam@gmail.com', '01516163561', 'pabna', '2020-10-11 22:27:15', '2020-10-11 22:27:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'sagor', 'sagor@gmail.com', NULL, '$2y$10$v5bu6wyCnh7Px8Z8veu70e3x3gYi/bXdNxAqKIKoF8jD2qSVLbsGq', NULL, '2020-08-26 05:59:55', '2020-08-26 05:59:55'),
(3, 'azizul', 'm.azizul@gmail.com', NULL, '$2y$10$uuIOSrLf1qT3Wkn2dFFy/elDoMzmtgesxeq3zV44KZ4zm/kK8K76W', NULL, '2020-08-26 06:21:03', '2020-08-26 06:21:03'),
(4, 'saddam', 'saddam@gmail.com', NULL, '$2y$10$5ftxtL5uBsSaFUGmKS3j6.x8KLyrNvBKD6Brgjr9LMxXAWO1gYs96', NULL, '2020-08-26 08:29:17', '2020-08-26 08:29:17'),
(5, 'kader', 'kader@gmail.com', NULL, '$2y$10$HodeH.FCLID0EdfFdoF5euHR/4vaP.CmsADqNdmhar/Pzyd/h1BJ6', NULL, '2020-09-01 11:32:10', '2020-09-01 11:32:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
