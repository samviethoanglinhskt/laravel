-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2024 at 04:53 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Áo Nam', NULL, NULL),
(2, 'Quần Nam', NULL, NULL),
(3, 'Túi Sách', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2024_07_20_133740_create_comments_table', 1),
(12, '2014_10_12_000000_create_users_table', 2),
(13, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(14, '2019_08_19_000000_create_failed_jobs_table', 2),
(15, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(16, '2024_07_20_133615_create_categories_table', 2),
(17, '2024_07_20_133627_create_banners_table', 2),
(18, '2024_07_20_133638_create_accounts_table', 2),
(19, '2024_07_20_133649_create_products_table', 2),
(20, '2024_07_20_133702_create_orders_table', 2),
(21, '2024_07_20_133710_create_sales_table', 2),
(23, '2024_07_20_151148_add_column_to_products_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `account_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `describe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `price` int NOT NULL DEFAULT '1000000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `name`, `images`, `describe`, `category_id`, `price`) VALUES
(520, NULL, NULL, 'Quần Đùi', 'assets/images/cart-item-1.jpg', 'san pham dep', 1, 1000000),
(521, NULL, NULL, 'Áo Phông', 'assets/images/cart-item-2.jpg', 'san pham chat', 2, 1000000),
(522, NULL, NULL, 'Túi Gucci', 'assets/images/cart-item-3.jpg', 'tui dep', 3, 1000000),
(523, NULL, NULL, 'Quần Đùi', 'assets/images/cart-item-1.jpg', 'san pham dep', 1, 1000000),
(524, NULL, NULL, 'Áo Phông', 'assets/images/cart-item-2.jpg', 'san pham chat', 2, 1000000),
(525, NULL, NULL, 'Túi Gucci', 'assets/images/cart-item-3.jpg', 'tui dep', 3, 1000000),
(526, NULL, NULL, 'Quần Đùi', 'assets/images/cart-item-1.jpg', 'san pham dep', 1, 1000000),
(527, NULL, NULL, 'Áo Phông', 'assets/images/cart-item-2.jpg', 'san pham chat', 2, 1000000),
(528, NULL, NULL, 'Túi Gucci', 'assets/images/cart-item-3.jpg', 'tui dep', 3, 1000000),
(529, NULL, NULL, 'Quần Đùi', 'assets/images/cart-item-1.jpg', 'san pham dep', 1, 1000000),
(530, NULL, NULL, 'Áo Phông', 'assets/images/cart-item-2.jpg', 'san pham chat', 2, 1000000),
(531, NULL, NULL, 'Túi Gucci', 'assets/images/cart-item-3.jpg', 'tui dep', 3, 1000000),
(532, NULL, NULL, 'Quần Đùi', 'assets/images/cart-item-1.jpg', 'san pham dep', 1, 1000000),
(533, NULL, NULL, 'Áo Phông', 'assets/images/cart-item-2.jpg', 'san pham chat', 2, 1000000),
(534, NULL, NULL, 'Túi Gucci', 'assets/images/cart-item-3.jpg', 'tui dep', 3, 1000000),
(535, NULL, NULL, 'Quần Đùi', 'assets/images/cart-item-1.jpg', 'san pham dep', 1, 1000000),
(536, NULL, NULL, 'Áo Phông', 'assets/images/cart-item-2.jpg', 'san pham chat', 2, 1000000),
(537, NULL, NULL, 'Túi Gucci', 'assets/images/cart-item-3.jpg', 'tui dep', 3, 1000000),
(538, NULL, NULL, 'Quần Đùi', 'assets/images/cart-item-1.jpg', 'san pham dep', 1, 1000000),
(539, NULL, NULL, 'Áo Phông', 'assets/images/cart-item-2.jpg', 'san pham chat', 2, 1000000),
(540, NULL, NULL, 'Túi Gucci', 'assets/images/cart-item-3.jpg', 'tui dep', 3, 1000000),
(541, NULL, NULL, 'Quần Đùi', 'assets/images/cart-item-1.jpg', 'san pham dep', 1, 1000000),
(542, NULL, NULL, 'Áo Phông', 'assets/images/cart-item-2.jpg', 'san pham chat', 2, 1000000),
(543, NULL, NULL, 'Túi Gucci', 'assets/images/cart-item-3.jpg', 'tui dep', 3, 1000000),
(544, NULL, NULL, 'Quần Đùi', 'assets/images/cart-item-1.jpg', 'san pham dep', 1, 1000000),
(545, NULL, NULL, 'Áo Phông', 'assets/images/cart-item-2.jpg', 'san pham chat', 2, 1000000),
(546, NULL, NULL, 'Túi Gucci', 'assets/images/cart-item-3.jpg', 'tui dep', 3, 1000000),
(547, NULL, NULL, 'Quần Đùi', 'assets/images/cart-item-1.jpg', 'san pham dep', 1, 1000000),
(548, NULL, NULL, 'Áo Phông', 'assets/images/cart-item-2.jpg', 'san pham chat', 2, 1000000),
(549, NULL, NULL, 'Túi Gucci', 'assets/images/cart-item-3.jpg', 'tui dep', 3, 1000000),
(550, NULL, NULL, 'Quần Đùi', 'assets/images/cart-item-1.jpg', 'san pham dep', 1, 1000000),
(551, NULL, NULL, 'Áo Phông', 'assets/images/cart-item-2.jpg', 'san pham chat', 2, 1000000),
(552, NULL, NULL, 'Túi Gucci', 'assets/images/cart-item-3.jpg', 'tui dep', 3, 1000000),
(553, NULL, NULL, 'Quần Đùi', 'assets/images/cart-item-1.jpg', 'san pham dep', 1, 1000000),
(554, NULL, NULL, 'Áo Phông', 'assets/images/cart-item-2.jpg', 'san pham chat', 2, 1000000),
(555, NULL, NULL, 'Túi Gucci', 'assets/images/cart-item-3.jpg', 'tui dep', 3, 1000000),
(556, NULL, NULL, 'Quần Đùi', 'assets/images/cart-item-1.jpg', 'san pham dep', 1, 1000000),
(557, NULL, NULL, 'Áo Phông', 'assets/images/cart-item-2.jpg', 'san pham chat', 2, 1000000),
(558, NULL, NULL, 'Túi Gucci', 'assets/images/cart-item-3.jpg', 'tui dep', 3, 1000000),
(559, NULL, NULL, 'Quần Đùi', 'assets/images/cart-item-1.jpg', 'san pham dep', 1, 1000000),
(560, NULL, NULL, 'Áo Phông', 'assets/images/cart-item-2.jpg', 'san pham chat', 2, 1000000),
(561, NULL, NULL, 'Túi Gucci', 'assets/images/cart-item-3.jpg', 'tui dep', 3, 1000000),
(562, NULL, NULL, 'Quần Đùi', 'assets/images/cart-item-1.jpg', 'san pham dep', 1, 1000000),
(563, NULL, NULL, 'Áo Phông', 'assets/images/cart-item-2.jpg', 'san pham chat', 2, 1000000),
(564, NULL, NULL, 'Túi Gucci', 'assets/images/cart-item-3.jpg', 'tui dep', 3, 1000000),
(565, NULL, NULL, 'Quần Đùi', 'assets/images/cart-item-1.jpg', 'san pham dep', 1, 1000000),
(566, NULL, NULL, 'Áo Phông', 'assets/images/cart-item-2.jpg', 'san pham chat', 2, 1000000),
(567, NULL, NULL, 'Túi Gucci', 'assets/images/cart-item-3.jpg', 'tui dep', 3, 1000000),
(568, NULL, NULL, 'Quần Đùi', 'assets/images/cart-item-1.jpg', 'san pham dep', 1, 1000000),
(569, NULL, NULL, 'Áo Phông', 'assets/images/cart-item-2.jpg', 'san pham chat', 2, 1000000),
(570, NULL, NULL, 'Túi Gucci', 'assets/images/cart-item-3.jpg', 'tui dep', 3, 1000000),
(571, NULL, NULL, 'Quần Đùi', 'assets/images/cart-item-1.jpg', 'san pham dep', 1, 1000000),
(572, NULL, NULL, 'Áo Phông', 'assets/images/cart-item-2.jpg', 'san pham chat', 2, 1000000),
(573, NULL, NULL, 'Túi Gucci', 'assets/images/cart-item-3.jpg', 'tui dep', 3, 1000000),
(574, NULL, NULL, 'Quần Đùi', 'assets/images/cart-item-1.jpg', 'san pham dep', 1, 1000000),
(575, NULL, NULL, 'Áo Phông', 'assets/images/cart-item-2.jpg', 'san pham chat', 2, 1000000),
(576, NULL, NULL, 'Túi Gucci', 'assets/images/cart-item-3.jpg', 'tui dep', 3, 1000000),
(577, NULL, NULL, 'Quần Đùi', 'assets/images/cart-item-1.jpg', 'san pham dep', 1, 1000000),
(578, NULL, NULL, 'Áo Phông', 'assets/images/cart-item-2.jpg', 'san pham chat', 2, 1000000),
(579, NULL, NULL, 'Túi Gucci', 'assets/images/cart-item-3.jpg', 'tui dep', 3, 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint UNSIGNED DEFAULT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_account_id_foreign` (`account_id`),
  ADD KEY `orders_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_product_id_foreign` (`product_id`);

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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=580;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_account_id_foreign` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
