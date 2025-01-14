-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 11, 2025 at 07:53 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_banijjo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int DEFAULT '0',
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `order`, `status`, `created_at`, `updated_at`) VALUES
(1, 'est', 18, 0, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(2, 'eum', 5, 0, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(3, 'sint', 5, 0, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(4, 'excepturi', 10, 0, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(5, 'autem', 19, 1, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(6, 'tempore', 13, 0, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(7, 'amet', 11, 1, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(8, 'sit', 18, 1, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(9, 'ad', 15, 0, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(10, 'et', 7, 1, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(11, 'voluptas', 6, 0, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(12, 'doloribus', 14, 0, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(13, 'qui', 3, 1, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(14, 'vel', 5, 1, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(15, 'omnis', 1, 0, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(16, 'molestiae', 13, 1, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(17, 'perspiciatis', 19, 0, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(18, 'et', 6, 1, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(19, 'qui', 7, 0, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(20, 'ab', 4, 0, '2024-11-09 21:48:52', '2024-11-09 21:48:52');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_10_05_122244_create_categories_table', 1),
(5, '2024_10_11_142134_create_sub_categories_table', 1),
(6, '2024_10_13_050756_create_products_table', 1),
(7, '2024_10_13_053439_create_uploads_table', 1),
(8, '2025_01_01_152209_create_didars_table', 2),
(9, '2025_01_01_152316_create_shooping_carts_table', 3),
(10, '2025_01_01_153223_create_shopping_carts_table', 4),
(11, '2025_01_01_155413_create_shopping_carts_table', 5),
(12, '2025_01_07_165429_create_orders_table', 6),
(13, '2025_01_07_165443_create_order_details_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `customer_id` bigint UNSIGNED NOT NULL,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amount` decimal(8,2) NOT NULL,
  `total_quantity` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `date`, `customer_id`, `customer_name`, `company_name`, `address`, `mobile`, `order_notes`, `total_amount`, `total_quantity`, `created_at`, `updated_at`) VALUES
(1, '2025-01-07', 2, 'didar', 'web banijjo', 'feni', '01639274267', 'Need fast delivery', 2956.27, 5.00, '2025-01-07 12:47:57', '2025-01-07 12:47:57'),
(2, '2025-01-07', 6, 'mahim', 'demo', 'dhaka', '01365453287', 'ddddddd', 1919.96, 4.00, '2025-01-07 12:51:00', '2025-01-07 12:51:00'),
(3, '2025-01-10', 2, 'didar', 'web banijjo', 'feni', '01639274288', 'dddd', 3871.01, 7.00, '2025-01-10 00:15:43', '2025-01-10 00:15:43'),
(4, '2025-01-10', 6, 'Mr X', 'teSol', 'Uk', '00024854358', 'Satisfied', 3111.14, 7.00, '2025-01-10 07:21:31', '2025-01-10 07:21:31');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `quantity` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `amount`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2041.54, 3.00, '2025-01-07 12:47:57', '2025-01-07 12:47:57'),
(2, 1, 20, 2956.27, 2.00, '2025-01-07 12:47:57', '2025-01-07 12:47:57'),
(3, 2, 1, 680.51, 1.00, '2025-01-07 12:51:00', '2025-01-07 12:51:00'),
(4, 2, 12, 1919.96, 3.00, '2025-01-07 12:51:00', '2025-01-07 12:51:00'),
(5, 3, 1, 2041.54, 3.00, '2025-01-10 00:15:43', '2025-01-10 00:15:43'),
(6, 3, 20, 3871.01, 4.00, '2025-01-10 00:15:43', '2025-01-10 00:15:43'),
(7, 4, 1, 680.51, 1.00, '2025-01-10 07:21:31', '2025-01-10 07:21:31'),
(8, 4, 12, 1919.96, 3.00, '2025-01-10 07:21:31', '2025-01-10 07:21:31'),
(9, 4, 13, 3111.14, 3.00, '2025-01-10 07:21:31', '2025-01-10 07:21:31');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `quantity` int NOT NULL DEFAULT '0',
  `order` int NOT NULL DEFAULT '0',
  `status` tinyint(1) DEFAULT NULL,
  `discount` int NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `product_details` longtext COLLATE utf8mb4_unicode_ci,
  `delivery_policy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_policy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `sub_category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `quantity`, `order`, `status`, `discount`, `short_description`, `description`, `product_details`, `delivery_policy`, `return_policy`, `category_id`, `sub_category_id`, `created_at`, `updated_at`) VALUES
(1, 'aut', 773.31, 55, 3, 0, 12, 'Totam non a eaque voluptatem.', 'Minima accusamus ducimus blanditiis. Illum voluptatem itaque voluptatem numquam. Deserunt adipisci autem adipisci at reiciendis. Earum ipsum ea sunt assumenda.', 'Modi rem quis quo ea atque sed. Iure ad est nam quod architecto esse accusamus. Voluptas asperiores quae earum officiis nesciunt dolor earum.', 'Ea nihil rerum expedita est.', 'Expedita error voluptates ducimus quae nihil et quod.', 5, 2, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(2, 'enim', 287.55, 74, 4, 0, 8, 'Sed eaque autem illo delectus.', 'Laborum sed repellendus ex amet doloremque eum. Perspiciatis assumenda voluptas officia facilis vel repellendus.', 'Et debitis suscipit vel quod. Qui sint pariatur eveniet placeat. Debitis temporibus quia rerum aut laboriosam consectetur similique.', 'Unde ipsam officia nihil ut.', 'Distinctio veniam nihil sequi.', 4, 3, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(3, 'error', 134.14, 98, 6, 0, 45, 'Inventore natus quas accusantium qui officiis.', 'Impedit cumque sunt est ea praesentium. Doloribus voluptas adipisci cum velit autem.', 'Atque voluptatem molestiae dolores odio. Libero ullam rem itaque aut expedita est ut autem. Dolor quia molestias expedita est nam.', 'Vel atque consequatur nihil maxime reiciendis hic rerum.', 'Maiores quaerat laudantium quia harum.', 2, 4, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(4, 'perferendis', 667.15, 9, 6, 1, 43, 'Necessitatibus blanditiis perspiciatis debitis quia sint amet sunt.', 'Vitae id vel minus enim inventore. Assumenda placeat optio et voluptatum ut ut.', 'Consequatur quo rerum doloremque et quia et qui et. Dolorem qui corporis voluptatem assumenda. Facere id ut sit reprehenderit sed quibusdam et.', 'Iure voluptatem asperiores omnis velit.', 'Aliquid atque laborum soluta dolore aperiam dolorem.', 4, 6, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(5, 'ut', 106.37, 88, 8, 0, 27, 'Animi doloremque qui id reiciendis ut velit.', 'Ut nemo nesciunt est est. Fugit quae aut quaerat maxime nostrum aut magni. Amet molestiae sint provident maiores labore ut aperiam.', 'Incidunt assumenda eveniet maxime mollitia nulla libero. Vel doloribus aut possimus reiciendis corporis ipsam itaque. Aut suscipit dicta neque iste. Harum consequatur ipsum qui eius in.', 'Et tempora esse autem.', 'Ut eos culpa ut dolorum.', 1, 4, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(6, 'est', 517.50, 24, 9, 0, 19, 'Molestias impedit nisi corporis facere est eligendi.', 'Quo officiis et eos saepe. Voluptas modi voluptatem amet est aliquam ratione. Possimus ipsum adipisci eos aspernatur. Distinctio ea ullam est laboriosam architecto error velit.', 'Voluptatem sint nisi qui aut. Expedita sunt vel sed consectetur. Iste et vero labore doloribus magnam. Rem aspernatur et sapiente voluptatem recusandae.', 'Enim et delectus assumenda omnis occaecati.', 'Dolorum repellat quia numquam.', 2, 9, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(7, 'aspernatur', 774.26, 81, 7, 1, 15, 'Voluptatibus autem ullam doloribus rem et.', 'Aliquam ad assumenda consequuntur qui. Cupiditate illo eaque aut aut perspiciatis qui tenetur. Beatae architecto at ullam est totam illum.', 'Ipsum quasi placeat molestiae distinctio nam perferendis magnam. Voluptatum totam reprehenderit rem sint. Maiores rerum fuga cum facere cupiditate quisquam. Consequatur quisquam suscipit esse sint.', 'Numquam quo illo est accusantium id aut minus id.', 'Et accusantium aut minus et sapiente omnis veniam.', 5, 4, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(8, 'minima', 354.03, 91, 9, 0, 40, 'At animi neque impedit.', 'Corrupti ipsa provident eos est consectetur. Provident voluptates aliquam quia aut mollitia repellendus. Recusandae libero harum eius deleniti. Quibusdam at voluptas ea culpa maiores placeat repudiandae.', 'Quis quis animi ut velit porro quo expedita. Odio sapiente repudiandae facere molestias explicabo vitae vel veniam. Tempore quibusdam impedit exercitationem sapiente facere.', 'Accusamus est quis sunt repellat aut quos.', 'Non et et et magni repudiandae.', 1, 10, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(9, 'debitis', 620.53, 21, 5, 1, 11, 'Ea quidem illo dolor.', 'Odio culpa tempora rem reprehenderit non ad. Quidem distinctio beatae quas rerum ut quod sed. Culpa ut aut et nesciunt.', 'Numquam veniam animi ut ea dignissimos saepe sed. Sit aut repellat explicabo et dicta dolorum eveniet. Optio impedit dolores eum voluptas accusamus debitis eum.', 'Aut quae sit non.', 'Autem doloremque aperiam eius error vitae.', 4, 7, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(10, 'repellat', 476.91, 45, 7, 1, 14, 'Delectus qui exercitationem sit sapiente.', 'Unde cumque ipsum numquam perferendis. Et nostrum dicta praesentium beatae sunt. Id sapiente nobis et pariatur accusamus nostrum error.', 'Quam ullam voluptas totam repellat eum maxime. Et vel odio nostrum ipsum. Ea consectetur rerum omnis quia vero doloribus. Voluptate dolores dicta id aspernatur.', 'Vel quibusdam et quia commodi vitae.', 'Quis aliquid voluptatibus veniam.', 4, 10, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(11, 'quia', 546.87, 91, 0, 0, 22, 'Unde fuga veritatis similique esse.', 'Labore impedit voluptatem tempora magnam. Voluptas aspernatur eos cupiditate odit modi. Aut aut ut dolore eveniet enim molestiae officia ea.', 'Quasi neque quisquam animi consequuntur. Rerum cumque laborum rerum qui non et. Enim sit qui dolorum iure.', 'Et minima culpa similique necessitatibus.', 'Dolor consequatur omnis fugiat corporis voluptatem est et quia.', 2, 4, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(12, 'quo', 655.79, 30, 6, 0, 37, 'Placeat alias excepturi dolor omnis.', 'Blanditiis consequuntur eligendi quia maiores impedit sapiente. Nam quisquam voluptas esse ipsam ea. Eos labore ipsam dolores accusamus esse expedita.', 'Nulla minima doloribus error quidem. Voluptatum nemo ut sed ut voluptatem qui. Quam vitae praesentium cumque consequatur. Quia nemo quae ut at quae cumque sint.', 'Illo sed vero soluta numquam aut.', 'Eum doloremque culpa voluptate consequuntur et.', 5, 6, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(13, 'quasi', 721.93, 80, 9, 1, 45, 'Rerum consequatur molestiae eius quibusdam dolorem totam perspiciatis dolores.', 'Aut iste incidunt eveniet occaecati in. Odit quae et qui ullam. Vel quae ea vel tenetur.', 'Quo sunt voluptate ipsum atque sint qui. Reprehenderit unde vitae doloremque animi. Molestias qui adipisci dolor sit reiciendis id.', 'Ipsam assumenda rerum sit similique enim ut non.', 'Omnis similique et ea commodi.', 5, 1, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(14, 'aliquam', 106.42, 41, 9, 1, 36, 'Recusandae omnis fugiat excepturi non debitis tenetur.', 'Voluptatem nam delectus consequatur minima. Veniam sed officiis modi nesciunt natus ut temporibus. Et incidunt assumenda similique ea adipisci. Quia autem pariatur nisi dolores sunt unde.', 'Expedita iste expedita et repellendus. Ducimus illo omnis assumenda et distinctio. Vel quod vitae autem. Iste consectetur ipsam earum provident.', 'In molestiae aut sint qui voluptatibus dolorem at.', 'Perferendis ea officia aspernatur enim.', 1, 6, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(15, 'dolor', 96.80, 1, 1, 0, 10, 'Labore dolorem delectus sequi sit voluptatem.', 'Ut reprehenderit et facere optio et eos. Vel quos esse libero inventore quaerat adipisci sunt est. Quia eveniet voluptatem consequatur reprehenderit hic sunt omnis.', 'Quia dolores id minima odio ducimus consequatur est. Rerum iusto libero ab iusto ab numquam eius et. Voluptatem ullam suscipit qui magni facere.', 'Dolorem tenetur aliquid sed sapiente non beatae eius.', 'Quis rerum aut alias consequatur molestias voluptatem sed quia.', 3, 7, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(16, 'omnis', 587.54, 5, 8, 1, 13, 'Voluptatibus itaque natus accusantium officiis ullam sed.', 'Expedita soluta eligendi illum inventore non veritatis quis. Sit omnis dolorum non. Illum aliquam iure omnis. Asperiores et est ut temporibus sunt.', 'Nulla quia qui fugit et architecto officia quos. Quasi maxime eligendi nihil velit culpa officiis. Sunt velit ab ea aperiam et non sed. Cumque et illo facere quis natus.', 'Non sed aspernatur culpa dolor quas velit.', 'Accusamus blanditiis illo facilis eos aut quam similique.', 3, 5, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(17, 'hic', 174.88, 96, 1, 1, 2, 'Eligendi quis ullam ut soluta dolores.', 'Fugit voluptates expedita sint quasi autem ut corporis. Ut necessitatibus aut enim enim consectetur. Ab dolor tenetur consequatur ullam soluta neque. Illum ut quis voluptatibus inventore omnis porro.', 'Rem ut quaerat quis enim. Qui praesentium ipsum vel vel sed ipsum mollitia. Eaque odit omnis eius. Aliquid expedita rerum animi voluptas dolor perspiciatis at.', 'Sapiente quo eos velit cupiditate quis vitae.', 'Qui quo velit modi omnis et minus quia repellat.', 4, 4, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(18, 'voluptatem', 850.41, 90, 2, 1, 18, 'Explicabo omnis in corrupti corrupti et.', 'Mollitia eum optio facilis placeat qui quia. Culpa non in omnis explicabo debitis. Illo in aut pariatur dicta nihil provident natus.', 'Corporis qui qui perferendis rerum voluptas. Dolorem aut quidem recusandae dolor.', 'Occaecati porro rerum accusamus dolorum veritatis et sit.', 'Qui aspernatur sequi libero voluptatibus perferendis aut.', 5, 8, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(19, 'accusantium', 170.54, 97, 1, 0, 39, 'Eum impedit non voluptatem hic et ullam.', 'Est beatae impedit totam. Ipsa qui voluptatem adipisci sequi. Provident omnis in laboriosam a iusto dolor voluptas. Nam recusandae commodi illum reprehenderit.', 'Quis necessitatibus molestias voluptatem sunt nisi. Est itaque porro quia soluta illum eveniet. Dolorem excepturi quia corrupti delectus. Provident in sit doloribus unde quo tempora labore.', 'Cupiditate quisquam ullam error non.', 'Et quis ipsum laboriosam libero perferendis voluptatem.', 2, 7, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(20, 'consequatur', 481.44, 75, 4, 1, 5, 'Minus harum qui repudiandae rem ut aut et earum.', 'Aut voluptatem officia omnis enim. Voluptate molestiae ut in rerum maxime deleniti perferendis. Aut vel impedit rerum non atque et qui. Dolores optio nihil ut ut sed quidem.', 'Libero modi nihil omnis et et. Commodi ipsum aut ipsam fuga suscipit. Iusto consequatur tenetur eum accusantium molestias est et. Velit et rerum nam expedita iusto sit ut aut.', 'Eligendi sint totam eos quo nam voluptatem ea.', 'Voluptatem nostrum beatae libero quidem qui voluptatibus.', 5, 1, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(21, 'quia', 542.00, 47, 6, 0, 41, 'Corporis ipsam et quia eos et consequuntur.', 'Molestias ea consequatur vel laboriosam aliquam ipsa. Rerum eum qui delectus voluptatem perferendis nisi quia. Possimus nesciunt deserunt id sit ex. Velit esse doloribus aut cupiditate omnis et.', 'Eveniet quibusdam cum in repellendus ut provident laboriosam. Adipisci consequuntur modi rem laborum ea vel enim nemo.', 'Aut est molestiae voluptatem neque itaque.', 'Et iure possimus deleniti vitae enim fugiat.', 3, 4, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(22, 'delectus', 866.19, 87, 1, 1, 25, 'Omnis magni minus quaerat sint aut ipsam.', 'Esse sed facere in mollitia eos qui. Et possimus inventore est sed quis. Aut nulla hic voluptates error qui et. Porro doloribus molestiae et adipisci mollitia dicta expedita et.', 'Hic dolorem et est. Beatae sit assumenda laborum aut nobis autem qui. Dignissimos odio nam sequi dolores.', 'Minima recusandae totam sit blanditiis molestiae repudiandae magnam.', 'Eaque doloremque est vel doloribus.', 1, 4, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(23, 'doloribus', 576.49, 84, 4, 1, 8, 'Eius sunt quia vitae autem velit optio doloribus.', 'Asperiores omnis consequatur quam. Ut fugit itaque explicabo quidem aut dignissimos. Enim ut consequuntur similique ut voluptatibus. Veniam optio quia non vel. Aut earum eligendi corporis deserunt error ullam.', 'Similique temporibus expedita laborum voluptatem maiores aspernatur rerum. Ut recusandae ab minima cupiditate aliquam saepe.', 'Ut ipsum mollitia ratione odit maiores.', 'Soluta voluptatem magnam illum culpa.', 3, 3, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(24, 'et', 375.58, 48, 4, 0, 34, 'Aspernatur et voluptatem in occaecati magnam possimus sit.', 'Totam voluptate est animi ea. Maiores vitae voluptatem est et. Voluptatibus reprehenderit et facilis numquam qui. Ea dolorem quas optio autem in ut.', 'Aut repellat enim aut qui sed voluptas. Ad consequatur culpa sequi dolorum nihil doloremque nisi. Fugiat omnis cum nisi quam sapiente quo sint. Veritatis veritatis et delectus ut.', 'Et mollitia praesentium eius ratione tenetur.', 'Pariatur consequatur aut deserunt atque necessitatibus quaerat voluptates unde.', 1, 2, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(25, 'adipisci', 199.53, 79, 2, 1, 33, 'Est sapiente sed est iste eum voluptas eos.', 'Nesciunt quos sunt eum consequatur voluptas. Ut ratione voluptas molestiae qui sit. Molestiae possimus minima quia sunt.', 'Perferendis praesentium quia et enim laudantium facere. Corporis quasi ducimus qui ut. Aspernatur fugit dolorem illo dolor. Autem voluptatem sed qui mollitia omnis asperiores voluptatum veniam.', 'Aut praesentium quisquam aperiam voluptate blanditiis.', 'Iste quod facilis quidem rem ab illo aspernatur.', 2, 7, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(26, 'consectetur', 133.53, 52, 2, 1, 19, 'Velit ut qui est.', 'Aut facere quisquam quia numquam hic harum. Qui aut odio maxime inventore rerum. Consequatur eligendi est blanditiis ab. Voluptas dolorum sunt molestiae reprehenderit. At enim quos voluptatem est in.', 'Perferendis repellendus similique sequi quidem est. Commodi explicabo est placeat voluptas modi. Sit et enim id neque est id. Ea illum totam facilis nostrum accusamus.', 'Qui incidunt provident ut.', 'Nam doloremque dolorem veritatis distinctio.', 1, 1, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(27, 'et', 706.30, 87, 2, 1, 43, 'Labore aut aut fugit non eum.', 'Maxime temporibus quisquam optio sunt excepturi sequi inventore ut. Sint illo dolores hic alias odit iste.', 'Voluptate qui dolorum voluptatum et aspernatur et et. Quidem deleniti ea sed at sequi consequatur aliquam. At iusto molestiae inventore est tempora.', 'Est consequuntur saepe corrupti delectus enim est.', 'Ut consequatur cumque nemo et magnam.', 3, 7, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(28, 'eum', 874.31, 92, 1, 1, 15, 'Qui neque dolorum voluptatum ab velit earum placeat.', 'Officia omnis praesentium laborum dolor. Ea nihil vel quis recusandae ut deserunt. Error quasi nihil id. Est voluptatem omnis voluptatum.', 'Corporis qui rerum totam corporis sapiente minus. Quia dolorem voluptatem ut dolorum. Sequi cumque corporis et tenetur ea sit.', 'Culpa sunt animi molestias expedita deleniti consequuntur sed.', 'Rerum aut ut laborum adipisci quidem.', 2, 9, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(29, 'architecto', 920.95, 17, 5, 1, 38, 'Laborum velit fugit voluptas sit dicta.', 'Quos autem modi mollitia ut officia. Autem labore saepe dolorem. Ipsum deleniti deserunt earum qui consequuntur. Magnam architecto aut consectetur.', 'Fugit quibusdam qui debitis quos adipisci. Debitis inventore cupiditate laborum est suscipit nobis. Et et delectus est quis cum dolor. Qui et mollitia dolore sed.', 'Maiores nostrum vel qui tempora sed.', 'Voluptatem occaecati et quia libero cum reiciendis.', 5, 9, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(30, 'quisquam', 781.82, 59, 9, 1, 30, 'Aut inventore eius numquam voluptates quos dolor non impedit.', 'Vel numquam molestiae cumque quia deserunt. Autem mollitia harum vero repudiandae optio eos voluptas. In consequatur sed corporis laborum tenetur. Sit id exercitationem libero. Veritatis dignissimos qui qui vel unde.', 'Mollitia ut quod veritatis accusantium omnis laborum. In quam et dolorem ipsum. Similique consequatur sequi enim iusto saepe vitae velit. Velit esse quia natus.', 'Praesentium enim eos et illo commodi.', 'Eum voluptates similique unde illo blanditiis.', 1, 2, '2024-11-09 21:48:53', '2024-11-09 21:48:53');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('8BtvjpuZ4kSwg0IJLNqs3wVf2PEdQTYCFoFBsGuI', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMUhBYXJNM1RaN0tCcU01NGhKQXp0YUZpM3hpUlpBSXFEU3Q5MlQwSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jYXRlZ29yeS9pbmRleCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1736526969),
('sSyaLCt54wehR0Vub2jLCsJmtHZUSqwPERJ1Em6L', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRmhxVEtVSWtuZzgyeWZQalFyRzA2S2d6VGFkS2tnNktERUpuaVh0QyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1736574764);

-- --------------------------------------------------------

--
-- Table structure for table `shopping_carts`
--

CREATE TABLE `shopping_carts` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shopping_carts`
--

INSERT INTO `shopping_carts` (`id`, `product_id`, `user_id`, `quantity`, `created_at`, `updated_at`) VALUES
(19, 7, 2, 1, '2025-01-10 07:07:47', '2025-01-10 07:07:47'),
(20, 12, 2, 3, '2025-01-10 07:07:57', '2025-01-10 07:07:57');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `order` int DEFAULT '0',
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `category_id`, `order`, `status`, `created_at`, `updated_at`) VALUES
(1, 'aspernatur', 1, 1, 0, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(2, 'quisquam', 3, 6, 1, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(3, 'quia', 8, 1, 0, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(4, 'provident', 5, 8, 1, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(5, 'occaecati', 3, 10, 0, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(6, 'laboriosam', 4, 6, 1, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(7, 'quia', 3, 3, 0, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(8, 'quis', 4, 10, 0, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(9, 'nesciunt', 9, 1, 1, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(10, 'voluptas', 10, 8, 1, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(11, 'dolor', 5, 8, 0, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(12, 'dolorem', 3, 7, 1, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(13, 'nostrum', 10, 6, 1, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(14, 'et', 6, 10, 0, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(15, 'aliquam', 5, 6, 0, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(16, 'voluptatibus', 8, 4, 0, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(17, 'eos', 9, 9, 0, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(18, 'est', 6, 10, 0, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(19, 'tempora', 7, 8, 1, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(20, 'et', 10, 8, 1, '2024-11-09 21:48:52', '2024-11-09 21:48:52');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` bigint UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `path`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'uploads/file/product-image-3.jpg', 1, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(2, 'uploads/file/product-image-15.jpg', 1, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(3, 'uploads/file/product-image-11.jpg', 1, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(4, 'uploads/file/product-image-11.jpg', 1, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(5, 'uploads/file/product-image-16.jpg', 1, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(6, 'uploads/file/product-image-20.jpg', 2, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(7, 'uploads/file/product-image-3.jpg', 2, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(8, 'uploads/file/product-image-13.jpg', 2, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(9, 'uploads/file/product-image-5.jpg', 2, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(10, 'uploads/file/product-image-16.jpg', 2, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(11, 'uploads/file/product-image-20.jpg', 3, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(12, 'uploads/file/product-image-4.jpg', 3, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(13, 'uploads/file/product-image-6.jpg', 3, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(14, 'uploads/file/product-image-20.jpg', 3, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(15, 'uploads/file/product-image-11.jpg', 3, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(16, 'uploads/file/product-image-3.jpg', 4, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(17, 'uploads/file/product-image-5.jpg', 4, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(18, 'uploads/file/product-image-19.jpg', 4, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(19, 'uploads/file/product-image-8.jpg', 4, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(20, 'uploads/file/product-image-15.jpg', 4, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(21, 'uploads/file/product-image-11.jpg', 5, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(22, 'uploads/file/product-image-14.jpg', 5, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(23, 'uploads/file/product-image-13.jpg', 5, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(24, 'uploads/file/product-image-8.jpg', 5, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(25, 'uploads/file/product-image-19.jpg', 5, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(26, 'uploads/file/product-image-5.jpg', 6, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(27, 'uploads/file/product-image-7.jpg', 6, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(28, 'uploads/file/product-image-20.jpg', 6, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(29, 'uploads/file/product-image-1.jpg', 6, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(30, 'uploads/file/product-image-18.jpg', 6, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(31, 'uploads/file/product-image-14.jpg', 7, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(32, 'uploads/file/product-image-12.jpg', 7, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(33, 'uploads/file/product-image-2.jpg', 7, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(34, 'uploads/file/product-image-17.jpg', 7, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(35, 'uploads/file/product-image-6.jpg', 7, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(36, 'uploads/file/product-image-6.jpg', 8, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(37, 'uploads/file/product-image-14.jpg', 8, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(38, 'uploads/file/product-image-3.jpg', 8, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(39, 'uploads/file/product-image-10.jpg', 8, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(40, 'uploads/file/product-image-6.jpg', 8, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(41, 'uploads/file/product-image-4.jpg', 9, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(42, 'uploads/file/product-image-12.jpg', 9, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(43, 'uploads/file/product-image-13.jpg', 9, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(44, 'uploads/file/product-image-12.jpg', 9, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(45, 'uploads/file/product-image-13.jpg', 9, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(46, 'uploads/file/product-image-14.jpg', 10, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(47, 'uploads/file/product-image-1.jpg', 10, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(48, 'uploads/file/product-image-18.jpg', 10, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(49, 'uploads/file/product-image-18.jpg', 10, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(50, 'uploads/file/product-image-18.jpg', 10, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(51, 'uploads/file/product-image-16.jpg', 11, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(52, 'uploads/file/product-image-16.jpg', 11, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(53, 'uploads/file/product-image-8.jpg', 11, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(54, 'uploads/file/product-image-5.jpg', 11, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(55, 'uploads/file/product-image-10.jpg', 11, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(56, 'uploads/file/product-image-15.jpg', 12, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(57, 'uploads/file/product-image-7.jpg', 12, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(58, 'uploads/file/product-image-10.jpg', 12, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(59, 'uploads/file/product-image-17.jpg', 12, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(60, 'uploads/file/product-image-6.jpg', 12, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(61, 'uploads/file/product-image-2.jpg', 13, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(62, 'uploads/file/product-image-3.jpg', 13, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(63, 'uploads/file/product-image-2.jpg', 13, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(64, 'uploads/file/product-image-8.jpg', 13, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(65, 'uploads/file/product-image-13.jpg', 13, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(66, 'uploads/file/product-image-7.jpg', 14, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(67, 'uploads/file/product-image-18.jpg', 14, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(68, 'uploads/file/product-image-19.jpg', 14, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(69, 'uploads/file/product-image-13.jpg', 14, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(70, 'uploads/file/product-image-2.jpg', 14, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(71, 'uploads/file/product-image-10.jpg', 15, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(72, 'uploads/file/product-image-3.jpg', 15, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(73, 'uploads/file/product-image-11.jpg', 15, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(74, 'uploads/file/product-image-9.jpg', 15, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(75, 'uploads/file/product-image-8.jpg', 15, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(76, 'uploads/file/product-image-14.jpg', 16, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(77, 'uploads/file/product-image-2.jpg', 16, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(78, 'uploads/file/product-image-15.jpg', 16, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(79, 'uploads/file/product-image-16.jpg', 16, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(80, 'uploads/file/product-image-15.jpg', 16, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(81, 'uploads/file/product-image-4.jpg', 17, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(82, 'uploads/file/product-image-15.jpg', 17, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(83, 'uploads/file/product-image-13.jpg', 17, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(84, 'uploads/file/product-image-10.jpg', 17, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(85, 'uploads/file/product-image-19.jpg', 17, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(86, 'uploads/file/product-image-13.jpg', 18, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(87, 'uploads/file/product-image-13.jpg', 18, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(88, 'uploads/file/product-image-18.jpg', 18, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(89, 'uploads/file/product-image-12.jpg', 18, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(90, 'uploads/file/product-image-13.jpg', 18, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(91, 'uploads/file/product-image-14.jpg', 19, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(92, 'uploads/file/product-image-9.jpg', 19, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(93, 'uploads/file/product-image-7.jpg', 19, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(94, 'uploads/file/product-image-9.jpg', 19, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(95, 'uploads/file/product-image-16.jpg', 19, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(96, 'uploads/file/product-image-7.jpg', 20, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(97, 'uploads/file/product-image-9.jpg', 20, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(98, 'uploads/file/product-image-1.jpg', 20, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(99, 'uploads/file/product-image-17.jpg', 20, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(100, 'uploads/file/product-image-20.jpg', 20, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(101, 'uploads/file/product-image-7.jpg', 21, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(102, 'uploads/file/product-image-11.jpg', 21, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(103, 'uploads/file/product-image-13.jpg', 21, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(104, 'uploads/file/product-image-14.jpg', 21, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(105, 'uploads/file/product-image-12.jpg', 21, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(106, 'uploads/file/product-image-3.jpg', 22, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(107, 'uploads/file/product-image-19.jpg', 22, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(108, 'uploads/file/product-image-16.jpg', 22, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(109, 'uploads/file/product-image-11.jpg', 22, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(110, 'uploads/file/product-image-9.jpg', 22, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(111, 'uploads/file/product-image-4.jpg', 23, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(112, 'uploads/file/product-image-4.jpg', 23, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(113, 'uploads/file/product-image-1.jpg', 23, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(114, 'uploads/file/product-image-17.jpg', 23, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(115, 'uploads/file/product-image-8.jpg', 23, '2024-11-09 21:48:52', '2024-11-09 21:48:52'),
(116, 'uploads/file/product-image-4.jpg', 24, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(117, 'uploads/file/product-image-17.jpg', 24, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(118, 'uploads/file/product-image-14.jpg', 24, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(119, 'uploads/file/product-image-14.jpg', 24, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(120, 'uploads/file/product-image-20.jpg', 24, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(121, 'uploads/file/product-image-10.jpg', 25, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(122, 'uploads/file/product-image-20.jpg', 25, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(123, 'uploads/file/product-image-20.jpg', 25, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(124, 'uploads/file/product-image-1.jpg', 25, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(125, 'uploads/file/product-image-4.jpg', 25, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(126, 'uploads/file/product-image-10.jpg', 26, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(127, 'uploads/file/product-image-9.jpg', 26, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(128, 'uploads/file/product-image-20.jpg', 26, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(129, 'uploads/file/product-image-10.jpg', 26, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(130, 'uploads/file/product-image-13.jpg', 26, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(131, 'uploads/file/product-image-19.jpg', 27, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(132, 'uploads/file/product-image-13.jpg', 27, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(133, 'uploads/file/product-image-8.jpg', 27, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(134, 'uploads/file/product-image-16.jpg', 27, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(135, 'uploads/file/product-image-13.jpg', 27, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(136, 'uploads/file/product-image-19.jpg', 28, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(137, 'uploads/file/product-image-20.jpg', 28, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(138, 'uploads/file/product-image-16.jpg', 28, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(139, 'uploads/file/product-image-10.jpg', 28, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(140, 'uploads/file/product-image-15.jpg', 28, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(141, 'uploads/file/product-image-11.jpg', 29, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(142, 'uploads/file/product-image-7.jpg', 29, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(143, 'uploads/file/product-image-4.jpg', 29, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(144, 'uploads/file/product-image-17.jpg', 29, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(145, 'uploads/file/product-image-8.jpg', 29, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(146, 'uploads/file/product-image-5.jpg', 30, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(147, 'uploads/file/product-image-5.jpg', 30, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(148, 'uploads/file/product-image-9.jpg', 30, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(149, 'uploads/file/product-image-13.jpg', 30, '2024-11-09 21:48:53', '2024-11-09 21:48:53'),
(150, 'uploads/file/product-image-14.jpg', 30, '2024-11-09 21:48:53', '2024-11-09 21:48:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin' COMMENT 'admin,customer',
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

INSERT INTO `users` (`id`, `name`, `mobile`, `otp`, `user_type`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL, 'admin', 'admin@gmail.com', NULL, '$2y$12$EwHc0fxfFnexNrLv.iSoYO042/M.ad8/StfeNYELnjKno1Uih.ppO', NULL, '2024-11-09 21:48:51', '2024-11-09 21:48:51'),
(2, 'customer', NULL, NULL, 'admin', 'customer@gmail.com', '2024-11-09 21:48:51', '$2y$12$zuMhn2AWKVbhUmyHHeViROBgFwrHxNUJDnHFB6Dz7zSDM7fpYDoJG', NULL, '2024-11-09 21:48:51', '2024-11-09 21:48:51'),
(3, 'Didar Karim', '01639274267', '4502752', 'customer', 'admin12@gmail.com', NULL, '$2y$12$dUqO/vJiOHMErwmYEUeeue/GGFn3774BhqgmGHsbqmIT4A7t5TpxO', NULL, '2024-12-10 08:31:19', '2024-12-10 08:31:19'),
(5, 'Didar Karim', '01639274225', '8583383', 'customer', 'admin123@gmail.com', '2024-12-10 08:33:18', '$2y$12$HuKhcJLniz1K.kTulPUXl.6Vgt8m6qWB1qILFAD8cI7Zx0N5M8BWq', NULL, '2024-12-10 08:31:58', '2024-12-10 08:33:18'),
(6, 'dfdfdf', '01365453287', '2867177', 'customer', 'demo@gmail.com', '2025-01-02 09:07:54', '$2y$12$Rldu/Z3dDlK5w46yU/eVuud9RaJF5eHu0l4W9Axzribw1eJXTTI.u', NULL, '2025-01-02 09:06:47', '2025-01-02 09:07:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_sub_category_id_foreign` (`sub_category_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `shopping_carts`
--
ALTER TABLE `shopping_carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uploads_product_id_foreign` (`product_id`);

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `shopping_carts`
--
ALTER TABLE `shopping_carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `uploads`
--
ALTER TABLE `uploads`
  ADD CONSTRAINT `uploads_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
