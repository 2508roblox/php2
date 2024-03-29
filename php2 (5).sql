-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3309
-- Thời gian đã tạo: Th1 29, 2024 lúc 10:14 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code_order` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qr_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_date` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(45, 4, 25, 6, '2024-01-26 09:31:34', '2024-01-26 09:31:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `image`, `slug`, `publish_date`, `created_at`, `updated_at`) VALUES
(1, '2313', 'scheduled', '', 'hand-tools', '01/17/2024', '2024-01-14 15:41:15', '2024-01-14 15:41:15'),
(2, 'Hand Tools', 'scheduled', '', 'hand-tools', '01/08/2024', '2024-01-14 14:35:20', '2024-01-14 14:35:20'),
(3, 'Hand Tools', 'scheduled', 'upload/65a38ef7eac2c_pngwing.com (7).png', 'hand-tools', '01/15/2024', '2024-01-14 14:36:23', '2024-01-14 14:36:23'),
(5, 'Hand Tools', 'scheduled', '', 'hand-tools', '01/08/2024', '2024-01-14 14:39:28', '2024-01-14 14:39:28'),
(6, 'Hand Tools', 'scheduled', '', 'hand-tools', '01/07/2024', '2024-01-14 14:39:53', '2024-01-14 14:39:53'),
(8, 'Hand Tools', 'scheduled', '', 'hand-tools', '01/08/2024', '2024-01-14 14:41:32', '2024-01-14 14:41:32'),
(12, 'Hand Tools', 'scheduled', '', 'hand-tools', '', '2024-01-14 14:43:13', '2024-01-14 14:43:13'),
(13, 'Hand Tools', 'scheduled', '', 'hand-tools', '', '2024-01-14 14:44:02', '2024-01-14 14:44:02'),
(14, 'Hand Tools', 'scheduled', '', 'hand-tools', '', '2024-01-14 14:44:31', '2024-01-14 14:44:31'),
(15, 'Hand Tools', 'hidden', 'upload/65a393f5a9168_pngwing.com (7).png', 'hand-tools', '01/08/2024', '2024-01-14 14:57:41', '2024-01-14 14:57:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usage_limit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `discount`, `is_active`, `expires_at`, `created_at`, `updated_at`, `usage_limit`) VALUES
(1, 'AAAAAA', 10000, 1, '1970-01-01 01:00:00', '2024-01-25 09:35:41', '2024-01-25 09:35:41', 100),
(2, '123123', 100000, 1, '2024-01-31 00:00:00', '2024-01-25 11:06:52', '2024-01-25 11:06:52', 100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'pending',
  `payment_mode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `shipping_price` decimal(16,2) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `total_amount` decimal(16,2) DEFAULT NULL,
  `discount` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `firstname`, `lastname`, `address`, `city`, `phone`, `status`, `payment_mode`, `created_at`, `updated_at`, `shipping_price`, `user_id`, `total_amount`, `discount`) VALUES
(38, '123', '123123', '123123', '202', '0337799453', 'confirm', 'vnpay', '2024-01-29 15:28:30', '2024-01-29 15:28:30', 30800.00, 3, 30900.00, 0.00),
(39, '123', '123123', '123123', '238', '0337799453', 'pending', 'cash', '2024-01-29 16:09:31', '2024-01-29 16:09:31', 91301.00, 3, 192201.00, 0.00),
(40, '123', '123123', '123123', '202', '0337799453', 'pending', 'cash', '2024-01-29 16:12:30', '2024-01-29 16:12:30', 31900.00, 3, 1732070.00, 0.00),
(41, '123123', '123123123', '123123', '202', '0337799453', 'pending', 'cash', '2024-01-29 16:12:45', '2024-01-29 16:12:45', 29700.00, 3, 1729870.00, 0.00),
(42, '123123', '123123123', '123123', '202', '0337799453', 'pending', 'cash', '2024-01-29 16:13:41', '2024-01-29 16:13:41', 29700.00, 3, 1729870.00, 0.00);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(4, 12, 16, 5, 123123, '2024-01-18 22:23:46', '2024-01-18 22:23:46'),
(5, 13, 18, 5, 123123, '2024-01-18 22:25:11', '2024-01-18 22:25:11'),
(6, 13, 16, 5, 123123, '2024-01-18 22:25:11', '2024-01-18 22:25:11'),
(7, 14, 18, 3, 123123, '2024-01-18 22:26:03', '2024-01-18 22:26:03'),
(8, 15, 16, 4, 123123, '2024-01-18 22:34:24', '2024-01-18 22:34:24'),
(9, 16, 25, 8, 100, '2024-01-18 22:45:45', '2024-01-18 22:45:45'),
(10, 17, 26, 6, 100, '2024-01-18 22:48:52', '2024-01-18 22:48:52'),
(11, 19, 25, 7, 100, '2024-01-19 07:46:37', '2024-01-19 07:46:37'),
(12, 20, 25, 5, 100, '2024-01-19 09:31:41', '2024-01-19 09:31:41'),
(13, 21, 25, 1, 100, '2024-01-19 16:13:09', '2024-01-19 16:13:09'),
(14, 22, 26, 1, 100, '2024-01-19 16:18:21', '2024-01-19 16:18:21'),
(15, 23, 26, 1, 100, '2024-01-19 16:37:35', '2024-01-19 16:37:35'),
(16, 24, 26, 2, 100, '2024-01-19 16:44:02', '2024-01-19 16:44:02'),
(17, 25, 26, 1, 100, '2024-01-19 16:54:20', '2024-01-19 16:54:20'),
(18, 26, 26, 6, 100, '2024-01-20 10:01:37', '2024-01-20 10:01:37'),
(19, 27, 25, 100, 100, '2024-01-25 09:37:58', '2024-01-25 09:37:58'),
(20, 27, 26, 100, 100, '2024-01-25 09:37:58', '2024-01-25 09:37:58'),
(21, 28, 26, 1, 100, '2024-01-25 11:07:41', '2024-01-25 11:07:41'),
(22, 29, 25, 2, 100, '2024-01-27 17:15:36', '2024-01-27 17:15:36'),
(23, 37, 25, 1, 100, '2024-01-27 17:44:56', '2024-01-27 17:44:56'),
(24, 38, 25, 1, 100, '2024-01-27 17:53:29', '2024-01-27 17:53:29'),
(25, 39, 27, 1, 100900, '2024-01-29 16:09:31', '2024-01-29 16:09:31'),
(26, 42, 25, 17, 100010, '2024-01-29 16:13:41', '2024-01-29 16:13:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `small_description` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `promotion_price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `feature` tinyint(4) DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `slide` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `small_description`, `description`, `price`, `category_id`, `promotion_price`, `quantity`, `feature`, `status`, `publish_date`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`, `slide`) VALUES
(25, 'Brwwandix Screwdriver SCREW150', 'brandix-screwdriver-screw150', 'Short description                                            \r\n                                                                                        \r\n                                            ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ornare, mi in ornare elementum, libero nibh lacinia urna, quis convallis lorem erat at purus. Maecenas eu varius nisi.', 1498997, 15, 100010, 1, 1, 'scheduled', '01/15/2024', 'Short description', 'Short description                                            \r\n                                          \r\n                                                                                        \r\n                                          \r\n                                            ', '2024-01-29 16:13:41', '2024-01-29 16:13:41', 1),
(26, 'Brandix Screwdriver SCREW150', 'brandix-screwdriver-screw150', 'Short description                                            \r\n                                                                                        \r\n                                            ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ornare, mi in ornare elementum, libero nibh lacinia urna, quis convallis lorem erat at purus. Maecenas eu varius nisi.', 15012312, 15, 10012312, 18, 1, 'scheduled', '01/15/2024', 'Short description', 'Short description                                            \r\n                                          \r\n                                                                                        \r\n                                          \r\n                                            ', '2024-01-29 16:08:23', '2024-01-29 16:08:23', 1),
(27, 'Brwwandix Screwdriver SCREW150', 'brandix-screwdriver-screw150', 'Short description                                            \r\n                                                                                        \r\n                                            ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ornare, mi in ornare elementum, libero nibh lacinia urna, quis convallis lorem erat at purus. Maecenas eu varius nisi.', 1499500, 15, 100900, 18, 1, 'scheduled', '01/15/2024', 'Short description', 'Short description                                            \r\n                                          \r\n                                                                                        \r\n                                          \r\n                                            ', '2024-01-29 16:09:05', '2024-01-29 16:09:05', 1),
(28, 'Brandix Screwdriver SCREW150', 'brandix-screwdriver-screw150', 'Short description                                            \r\n                                                                                        \r\n                                            ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ornare, mi in ornare elementum, libero nibh lacinia urna, quis convallis lorem erat at purus. Maecenas eu varius nisi.', 1499100, 15, 800000, 18, 1, 'scheduled', '01/15/2024', 'Short description', 'Short description                                            \r\n                                          \r\n                                                                                        \r\n                                          \r\n                                            ', '2024-01-29 16:08:36', '2024-01-29 16:08:36', 1),
(29, 'Brwwandix Screwdriver SCREW150', 'brandix-screwdriver-screw150', 'Short description                                            \r\n                                            ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ornare, mi in ornare elementum, libero nibh lacinia urna, quis convallis lorem erat at purus. Maecenas eu varius nisi.', 1499, 15, 100, 18, 1, 'scheduled', '01/15/2024', 'Short description', 'Short description                                            \r\n                                          \r\n                                            ', '2024-01-19 16:16:51', '2024-01-19 16:16:51', 1),
(30, 'Brandix Screwdriver SCREW150', 'brandix-screwdriver-screw150', 'Short description                                            \r\n                                                                                        \r\n                                            ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ornare, mi in ornare elementum, libero nibh lacinia urna, quis convallis lorem erat at purus. Maecenas eu varius nisi.', 149950, 15, 100500, 18, 1, 'scheduled', '01/15/2024', 'Short description', 'Short description                                            \r\n                                          \r\n                                                                                        \r\n                                          \r\n                                            ', '2024-01-29 16:08:49', '2024-01-29 16:08:49', 1),
(31, 'Brwwandix Screwdriver SCREW150', 'brandix-screwdriver-screw150', 'Short description                                            \r\n                                            ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ornare, mi in ornare elementum, libero nibh lacinia urna, quis convallis lorem erat at purus. Maecenas eu varius nisi.', 1499, 15, 100, 18, 1, 'scheduled', '01/15/2024', 'Short description', 'Short description                                            \r\n                                          \r\n                                            ', '2024-01-19 16:17:04', '2024-01-19 16:17:04', 1),
(32, 'Brandix Screwdriver SCREW150', 'brandix-screwdriver-screw150', 'Short description                                            \r\n                                            ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ornare, mi in ornare elementum, libero nibh lacinia urna, quis convallis lorem erat at purus. Maecenas eu varius nisi.', 1499, 15, 100, 18, 1, 'scheduled', '01/15/2024', 'Short description', 'Short description                                            \r\n                                          \r\n                                            ', '2024-01-19 16:16:32', '2024-01-19 16:16:32', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_img`
--

CREATE TABLE `product_img` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product_img`
--

INSERT INTO `product_img` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(62, 24, '65a89abb9ad1b_1.png', '2024-01-18 10:27:55', '2024-01-18 10:27:55'),
(63, 24, '65a89abb9c389_2.png', '2024-01-18 10:27:55', '2024-01-18 10:27:55'),
(64, 24, '65a89abb9d665_3.png', '2024-01-18 10:27:55', '2024-01-18 10:27:55'),
(65, 24, '65a89abba37a2_4.png', '2024-01-18 10:27:55', '2024-01-18 10:27:55'),
(66, 24, '65a89abba7402_5.png', '2024-01-18 10:27:55', '2024-01-18 10:27:55'),
(67, 24, '65a89abbab3ab_6.png', '2024-01-18 10:27:55', '2024-01-18 10:27:55'),
(68, 24, '65a89abbb1373_7.png', '2024-01-18 10:27:55', '2024-01-18 10:27:55'),
(69, 24, '65a89abbb27e2_8.png', '2024-01-18 10:27:55', '2024-01-18 10:27:55'),
(86, 26, '65aa3dd598ef2_pic-1.png', '2024-01-19 16:16:05', '2024-01-19 16:16:05'),
(87, 28, '65aa3dde8affb_pic-2.png', '2024-01-19 16:16:14', '2024-01-19 16:16:14'),
(88, 30, '65aa3de732094_pic-3.png', '2024-01-19 16:16:23', '2024-01-19 16:16:23'),
(89, 32, '65aa3df031289_pic-4.png', '2024-01-19 16:16:32', '2024-01-19 16:16:32'),
(90, 27, '65aa3dfa3feb2_pic-5.png', '2024-01-19 16:16:42', '2024-01-19 16:16:42'),
(91, 29, '65aa3e03d4c37_pic-6.png', '2024-01-19 16:16:51', '2024-01-19 16:16:51'),
(92, 31, '65aa3e1046c71_pic-7.png', '2024-01-19 16:17:04', '2024-01-19 16:17:04'),
(93, 25, '65aa3e2ca9d41_pic-8.png', '2024-01-19 16:17:32', '2024-01-19 16:17:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT 0,
  `publish_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `avatar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `image`, `address`, `phone`, `role`, `publish_date`, `created_at`, `updated_at`, `avatar`) VALUES
(3, 'TRẦN LÊ ', 'HUY HOÀNG', 'trangiangzxc@gmail.com', '$2y$10$7X9CZ6kVv.hxjmJHSNe.s.HzXWsBp2QkK6QspDgnNcQeT3fLZHCBO', NULL, NULL, NULL, 0, NULL, '2024-01-19 16:46:53', '2024-01-19 16:46:53', ''),
(4, 'trangiangzxc@gmail.c', 'trangiangzxc@gmail.c', 'trangiangzxc@gmail.comx', '$2y$10$.sxKrsWe5uB/NKX1Y6dE6ebANcAX/Uz5eSwAjMYSIIEQNHz6SR69K', NULL, NULL, NULL, 0, NULL, '2024-01-26 16:31:15', '2024-01-26 16:31:15', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(17, 3, 25, '2024-01-20 10:02:14', '2024-01-20 10:02:14');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code_index` (`code`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_img`
--
ALTER TABLE `product_img`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `EMAIL` (`email`);

--
-- Chỉ mục cho bảng `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `product_img`
--
ALTER TABLE `product_img`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
