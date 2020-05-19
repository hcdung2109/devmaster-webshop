-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 09:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target` int(10) UNSIGNED DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `position` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `is_active` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `slug`, `image`, `url`, `target`, `description`, `type`, `position`, `is_active`, `created_at`, `updated_at`) VALUES
(3, 'MUA VSMART TRÚNG VSSMART', 'mua-vsmart-trung-vssmart', 'uploads/banner/1584932740_Vsmart_copy.png', 'https://cellphones.com.vn/mobile/vsmart.html', 1, NULL, 1, 3, 1, '2020-03-22 20:05:40', '2020-03-22 20:05:40'),
(4, 'Samsung A71', 'samsung-a71', 'uploads/banner/1583415323_Slide-samsung-galaxy-a71-min-1.png', 'https://didongthongminh.vn/', 1, NULL, 1, 4, 1, '2020-03-05 06:35:23', '2020-03-22 19:58:26'),
(5, 'HOTSALES HUAWEI NOVA 7I', 'hotsales-huawei-nova-7i', 'uploads/banner/1584932808_hotsale_nova_7i.png', 'https://cellphones.com.vn/huawei-nova-7i.html', 1, NULL, 1, 5, 1, '2020-03-22 20:06:48', '2020-03-22 20:06:48'),
(6, 'LÊN ĐỜI NOTE 10 - NOTE 10 Plus', 'len-doi-note-10-note-10-plus', 'uploads/banner/1584932903_lendoi_nte10.png', 'https://cellphones.com.vn/mobile/samsung/galaxy-note.html', 1, NULL, 1, 6, 1, '2020-03-22 20:08:23', '2020-03-22 20:08:23'),
(7, 'JBL T600BTNC GIÁ ĐỘC QUYỀN', 'jbl-t600btnc-gia-doc-quyen', 'uploads/banner/1584932951_JBL_T600BTNC_home.png', 'https://cellphones.com.vn/tai-nghe-chong-on-jbl-t600btnc.html', 1, NULL, 1, 7, 1, '2020-03-22 20:09:11', '2020-03-22 20:09:11');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `is_active` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `image`, `website`, `position`, `is_active`, `created_at`, `updated_at`) VALUES
(5, 'Samsung', 'samsung', 'uploads/brand/1583329669_logo-thuong-hieu-samsung-typeface-elle-man.jpg', 'https://www.samsung.com/vn/', 2, 1, '2020-03-04 06:47:49', '2020-03-22 19:44:56'),
(6, 'Apple', 'apple', 'uploads/brand/1583409648_apple icon.jpg', 'apple.com', 1, 1, '2020-03-05 05:00:48', '2020-03-05 05:00:48'),
(7, 'Xiaomi', 'xiaomi', 'uploads/brand/1584935820_1200px-Xiaomi_logo.svg.png', 'https://www.mi.com/global', 3, 1, '2020-03-22 20:57:00', '2020-03-22 20:57:00'),
(8, 'Dell', 'dell', 'uploads/brand/1584935886_1024px-Dell_Logo.svg.png', 'dell.com', 4, 1, '2020-03-22 20:58:06', '2020-03-22 20:58:06'),
(9, 'Oppo', 'oppo', 'uploads/brand/1584935938_1521197184-brasol.vn-logo-oppo-oppo-logo.jpg', 'https://www.oppo.com/vn/', 5, 1, '2020-03-22 20:58:58', '2020-03-22 20:58:58'),
(10, 'Sony', 'sony', 'uploads/brand/1584936029_sonyview1.jpg', 'https://www.sony.com/', 6, 1, '2020-03-22 21:00:29', '2020-03-22 21:00:29'),
(11, 'Logitech', 'logitech', 'uploads/brand/1584936072_bab78b1ab6202c17519384fb90b06412.png', 'https://www.logitech.com/vi-vn', 7, 1, '2020-03-22 21:01:12', '2020-03-22 21:01:12'),
(12, 'Asus', 'asus', 'uploads/brand/1584936126_1_NwfoiV9f96_MhpmJwdinPA.png', 'https://www.asus.com/vn/', 8, 1, '2020-03-22 21:02:06', '2020-03-22 21:02:06'),
(13, 'Vsmart', 'vsmart', 'uploads/brand/1584946458_Vsmart-logo.jpg', 'https://vsmart.net/eu-vi/', 9, 1, '2020-03-22 23:54:18', '2020-03-22 23:54:18'),
(15, 'Khác', 'khac', NULL, NULL, 999, 1, '2020-04-11 21:52:35', '2020-04-11 21:52:35');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `position` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `is_active` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `parent_id`, `position`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Điện thoại', 'dien-thoai', NULL, 0, 1, 1, '2020-03-22 20:17:22', '2020-03-22 20:17:22'),
(2, 'Tablet', 'tablet', NULL, 0, 2, 1, '2020-03-22 20:17:43', '2020-03-22 20:17:43'),
(3, 'Phụ kiện', 'phu-kien', NULL, 0, 3, 1, '2020-03-22 20:17:53', '2020-03-22 20:17:53'),
(4, 'Laptop', 'laptop', NULL, 0, 4, 1, '2020-03-22 20:18:00', '2020-03-22 20:18:00'),
(6, 'Đồng hồ', 'dong-ho', NULL, 0, 6, 1, '2020-03-22 20:18:33', '2020-03-22 20:18:33'),
(7, 'Apple', 'apple', NULL, 1, 11, 1, '2020-03-22 20:20:33', '2020-03-22 20:20:33'),
(8, 'Samsung', 'samsung', NULL, 1, 12, 1, '2020-03-22 20:20:43', '2020-03-22 20:20:43'),
(9, 'Oppo', 'oppo', NULL, 1, 13, 1, '2020-03-22 20:20:53', '2020-03-22 20:20:53'),
(11, 'Vsmart', 'vsmart', NULL, 1, 15, 1, '2020-03-22 20:22:15', '2020-03-22 20:22:15'),
(12, 'Apple Watch', 'apple-watch', NULL, 6, 61, 1, '2020-03-22 20:28:57', '2020-03-22 20:28:57'),
(13, 'Xiaomi', 'xiaomi', NULL, 6, 62, 1, '2020-03-22 20:29:10', '2020-03-22 20:29:10'),
(14, 'Samsung Watch', 'samsung-watch', NULL, 6, 63, 1, '2020-03-22 20:29:39', '2020-03-22 20:29:39'),
(15, 'Macbook', 'macbook', NULL, 4, 41, 1, '2020-03-22 20:30:59', '2020-03-22 20:30:59'),
(16, 'Asus', 'asus', NULL, 4, 42, 1, '2020-03-22 20:31:15', '2020-03-22 20:31:15'),
(17, 'Dell', 'dell', NULL, 4, 43, 1, '2020-03-22 20:31:26', '2020-03-22 20:31:26'),
(18, 'Lenovo', 'lenovo', NULL, 4, 44, 1, '2020-03-22 20:32:00', '2020-03-22 20:32:00'),
(19, 'Loa', 'loa', NULL, 5, 51, 1, '2020-03-22 20:32:31', '2020-03-22 20:32:31'),
(20, 'Tai nghe', 'tai-nghe', NULL, 46, 52, 1, '2020-03-22 20:32:42', '2020-03-22 20:32:42');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `percent` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `type`, `value`, `percent`, `created_at`, `updated_at`) VALUES
(1, 'SHOP-KM1', 1, 50000, NULL, '2020-05-19 16:50:32', '2020-05-19 16:50:32'),
(2, 'SHOP-K2', 2, NULL, 50, '2020-05-19 16:52:27', '2020-05-19 16:52:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2020_01_07_122649_create_categories_table', 1),
(10, '2020_01_09_113851_create_products_table', 1),
(11, '2020_02_06_031728_create_banners_table', 2),
(12, '2020_02_06_032831_create_banners_table', 3),
(13, '2020_02_06_125433_create_vendors_table', 4),
(14, '2020_02_06_125734_create_brands_table', 5),
(15, '2020_03_04_083632_create_products_table', 6),
(17, '2020_03_05_122445_create_contacts_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(11) DEFAULT 0,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_id` int(11) DEFAULT 0,
  `total` int(11) DEFAULT 0,
  `member_id` int(11) DEFAULT 0,
  `order_status_id` int(11) DEFAULT 0,
  `payment_id` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `address`, `phone`, `discount`, `note`, `coupon_id`, `total`, `member_id`, `order_status_id`, `payment_id`, `created_at`, `updated_at`) VALUES
(9, 'Hoàng Công Dũng', 'dungthuy2109@gmail.com', 'HN', '0986346007', 0, NULL, 0, 25970000, 0, 1, 0, '2020-05-19 12:18:21', '2020-05-19 12:18:21');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `price`, `qty`) VALUES
(2, 9, 43, 17980000, 2),
(3, 9, 30, 7990000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `name`) VALUES
(1, 'Mới'),
(2, 'Đang Xử Lý'),
(3, 'Hoàn Thành'),
(4, 'Hủy');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `price` int(11) NOT NULL DEFAULT 0,
  `sale` int(11) NOT NULL DEFAULT 0,
  `position` int(11) NOT NULL DEFAULT 0,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `is_hot` int(11) NOT NULL DEFAULT 0,
  `views` int(11) NOT NULL DEFAULT 0,
  `category_id` int(11) NOT NULL DEFAULT 0,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_id` int(11) NOT NULL DEFAULT 0,
  `vendor_id` int(11) NOT NULL DEFAULT 0,
  `summary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `image`, `stock`, `price`, `sale`, `position`, `is_active`, `is_hot`, `views`, `category_id`, `url`, `sku`, `brand_id`, `vendor_id`, `summary`, `description`, `meta_title`, `meta_description`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Iphone 11 128GB Chính hãng (VN/A)', 'iphone-11-128gb-chinh-hang-vna', 'uploads/product/1584936264_iphone11-purple-select-2019.png', 10, 23990000, 22190000, 1, 1, 1, 0, 1, 'https://cellphones.com.vn/iphone-11-128gb.html', NULL, 6, 4, NULL, NULL, NULL, NULL, 0, '2020-03-22 21:04:24', '2020-03-22 21:04:24'),
(2, 'Iphone 11 Pro Max 512GB Chính hãng (VN/A)', 'iphone-11-pro-max-512gb-chinh-hang-vna', 'uploads/product/1584936455_iphone-11-pro-max-gold-select-2019.jpg', 20, 43990000, 38990000, 2, 1, 1, 0, 1, 'https://cellphones.com.vn/iphone-11-pro-max-512gb.html', NULL, 6, 4, NULL, NULL, NULL, NULL, 0, '2020-03-22 21:07:35', '2020-03-22 21:07:35'),
(3, 'Iphone 11 256GB Chính hãng (VN/A)', 'iphone-11-256gb-chinh-hang-vna', 'uploads/product/1584936584_iphone11-red-select-2019.jpg', 15, 25990000, 24990000, 3, 1, 0, 0, 1, 'https://cellphones.com.vn/iphone-11-256gb.html', NULL, 6, 4, NULL, NULL, NULL, NULL, 0, '2020-03-22 21:09:44', '2020-03-22 21:09:44'),
(4, 'Iphone 11 Pro 256GB Chính hãng (VN/A)', 'iphone-11-pro-256gb-chinh-hang-vna', 'uploads/product/1584936656_iphone-11-pro-max-space-select-2019.jpg', 30, 34990000, 31990000, 4, 1, 0, 0, 1, NULL, NULL, 6, 4, NULL, NULL, NULL, NULL, 0, '2020-03-22 21:10:56', '2020-03-22 21:11:04'),
(5, 'Samsung Galaxy S20+ (Plus)', 'samsung-galaxy-s20-plus', 'uploads/product/1584936729_ss-20-plus-6.jpg', 50, 23990000, 19990000, 5, 1, 1, 0, 1, 'https://cellphones.com.vn/samsung-galaxy-s20-plus.html', NULL, 5, 4, NULL, NULL, NULL, NULL, 0, '2020-03-22 21:12:09', '2020-03-22 21:12:09'),
(6, 'Iphone X 64GB Chính hãng (VN/A)', 'iphone-x-64gb-chinh-hang-vna', 'uploads/product/1584936812_iphone_x_64gb.jpg', 25, 19500000, 16990000, 6, 1, 0, 0, 1, 'https://didongviet.vn/iphone-x', NULL, 6, 5, NULL, NULL, NULL, NULL, 0, '2020-03-22 21:13:32', '2020-03-22 21:13:32'),
(7, 'Iphone Xs Max 256GB Chính hãng (VN/A)', 'iphone-xs-max-256gb-chinh-hang-vna', 'uploads/product/1584936905_iphone_xs_max_256gb.jpg', 22, 19990000, 17499000, 7, 1, 1, 0, 1, 'https://didongviet.vn/iphone-xs-xs-max', NULL, 6, 5, NULL, NULL, NULL, NULL, 0, '2020-03-22 21:15:05', '2020-03-22 21:15:05'),
(8, 'Samsung Galaxy A71', 'samsung-galaxy-a71', 'uploads/product/1584946189_600_samsung-galaxy-a71_1_1.jpg', 29, 10490000, 9490000, 8, 1, 1, 0, 1, 'https://fptshop.com.vn/dien-thoai/samsung-galaxy-a71', NULL, 5, 8, NULL, NULL, NULL, NULL, 0, '2020-03-22 23:49:49', '2020-03-22 23:49:49'),
(9, 'Iphone Xr 64GB', 'iphone-xr-64gb', 'uploads/product/1584946258_iphone_xr_64gb.jpg', 13, 16990000, 15990000, 9, 1, 0, 0, 1, 'https://fptshop.com.vn/dien-thoai/iphone-xr-64gb', NULL, 6, 8, NULL, NULL, NULL, NULL, 0, '2020-03-22 23:50:58', '2020-03-22 23:50:58'),
(10, 'Vsmart Active 3 6GB-64GB', 'vsmart-active-3-6gb-64gb', 'uploads/product/1584946508_Vsmart-active-3-black-1.jfif', 5, 4490000, 3990000, 10, 1, 1, 0, 1, 'https://fptshop.com.vn/dien-thoai/vsmart-active-3-6gb-64gb', NULL, 13, 8, NULL, NULL, NULL, NULL, 0, '2020-03-22 23:55:08', '2020-03-22 23:55:08'),
(11, 'Xiaomi Mi Note 10 Pro', 'xiaomi-mi-note-10-pro', 'uploads/product/1584946581_xiaomi-mi-note-10-pro-black-400x460.png', 7, 14990000, 13990000, 11, 1, 0, 0, 1, 'https://www.thegioididong.com/dtdd/xiaomi-mi-note-10-pro', NULL, 7, 6, NULL, NULL, NULL, NULL, 0, '2020-03-22 23:56:21', '2020-03-22 23:56:21'),
(12, 'Oppo Reno 2F', 'oppo-reno-2f', 'uploads/product/1584946658_oppo-reno2-f-400x460.png', 10, 8990000, 7990000, 12, 1, 0, 0, 1, 'https://www.thegioididong.com/dtdd/oppo-reno2-f', NULL, 9, 6, NULL, NULL, NULL, NULL, 0, '2020-03-22 23:57:38', '2020-03-22 23:57:38'),
(13, 'Macbook Pro 16 inch 2019 (MVVJ2/ MVVL2) – Core i7/ 16Gb/ 512GB – NEW', 'macbook-pro-16-inch-2019-mvvj2-mvvl2-core-i7-16gb-512gb-new', 'uploads/product/1584947146_macpro16_2019.jfif', 5, 57500000, 57500000, 13, 1, 1, 0, 4, 'https://macone.vn/macbook-pro-16-inch-2019-mvvj2-mvvl2-core-i7-16gb-512gb-new/', NULL, 6, 9, NULL, NULL, NULL, NULL, 0, '2020-03-23 00:05:46', '2020-03-23 00:05:46'),
(14, 'iMac 2019 27 inch Retina 5K MRR12 – New (Full VAT)', 'imac-2019-27-inch-retina-5k-mrr12-new-full-vat', 'uploads/product/1584947228_imac27inch2019.jfif', 2, 57990000, 57990000, 14, 1, 0, 0, 4, 'https://macone.vn/imac-2019-27inch-retina-5k-mrr12-new/', 'kajima0420', 6, 9, NULL, NULL, NULL, NULL, 0, '2020-03-23 00:07:08', '2020-03-23 00:07:08'),
(15, 'Apple Watch Series 5 GPS (Nhôm/40mm) – New', 'apple-watch-series-5-gps-nhom40mm-new', 'uploads/product/1584947328_apple_watch_series_5.jpg', 28, 10490000, 10790000, 15, 1, 1, 0, 6, 'https://macone.vn/apple-watch-series-5-gps-nhom-40mm-new/', NULL, 6, 9, NULL, NULL, NULL, NULL, 0, '2020-03-23 00:08:48', '2020-03-23 00:08:48'),
(16, 'Apple Watch Series 5 GPS + Cellular ( Thép/40mm/Sport )', 'apple-watch-series-5-gps-cellular-thep40mmsport', 'uploads/product/1584947401_apple_watch_series_5_gps_celluar.jpg', 15, 19500000, 18990000, 16, 1, 1, 0, 6, 'https://macone.vn/apple-watch-series-5-gps-cellular-thep-40mm-sport-new/', NULL, 6, 9, NULL, NULL, NULL, NULL, 0, '2020-03-23 00:10:01', '2020-03-23 00:10:01'),
(17, 'Apple Watch Series 3 GPS (Nhôm/38mm) – New', 'apple-watch-series-3-gps-nhom38mm-new', 'uploads/product/1586667523_apple-watch-3-phien-ban-38-mm-400x400.jpg', 1, 6300000, 5490000, 17, 1, 0, 0, 6, NULL, NULL, 6, 9, NULL, NULL, NULL, NULL, 0, '2020-03-23 00:11:04', '2020-04-11 21:58:43'),
(18, 'Macbook Air 13 inch 2019 – Core i5 128GB 8GB RAM – NEW', 'macbook-air-13-inch-2019-core-i5-128gb-8gb-ram-new', 'uploads/product/1584947569_mac_air_2019.jpg', 6, 26790000, 26490000, 18, 1, 1, 0, 4, 'https://macone.vn/macbook-air-13-inch-2019-core-i5-128gb-8gb-ram-new-2/', 'sdtpcmt', 6, 9, NULL, NULL, NULL, NULL, 0, '2020-03-23 00:12:49', '2020-03-23 00:12:49'),
(19, 'Samsung Galaxy Watch 42mm', 'samsung-galaxy-watch-42mm', 'uploads/product/1584947672_dong-ho-thong-minh-samsung-galaxy-watch-42mm-20-20-600x600.jpg', 2, 6990000, 6990000, 19, 1, 0, 0, 6, 'https://www.thegioididong.com/dong-ho-thong-minh/samsung-galaxy-watch-42mm', '0', 5, 6, NULL, NULL, NULL, NULL, 0, '2020-03-23 00:14:32', '2020-03-23 00:14:32'),
(20, 'Mi Band 4', 'mi-band-4', 'uploads/product/1584947723_mi-band-4-6-600x600.jpg', 5, 850000, 750000, 20, 1, 0, 0, 6, 'https://www.thegioididong.com/dong-ho-thong-minh/mi-band-4', NULL, 7, 6, NULL, NULL, NULL, NULL, 0, '2020-03-23 00:15:23', '2020-03-23 00:15:23'),
(21, 'Apple AirPods 2 VN/A', 'apple-airpods-2-vna', 'uploads/product/1584947820_apple airpods 2.jpg', 30, 5900000, 3650000, 21, 1, 1, 0, 20, 'https://cellphones.com.vn/apple-airpods-2.html', NULL, 6, 4, NULL, NULL, NULL, NULL, 0, '2020-03-23 00:17:00', '2020-03-23 00:17:00'),
(22, 'Airpods Pro', 'airpods-pro', 'uploads/product/1584947890_637094271123296138_HASP-00629662-1.jfif', 50, 7390000, 7390000, 22, 1, 1, 0, 20, 'https://fptshop.com.vn/phu-kien/apple-tai-nghe-airpods-pro', NULL, 6, 8, NULL, NULL, NULL, NULL, 0, '2020-03-23 00:18:10', '2020-03-23 00:18:10'),
(23, 'Galaxy Buds', 'galaxy-buds', 'uploads/product/1584947979_galaxy buds.jpg', 10, 4490000, 2390000, 23, 1, 0, 0, 20, 'https://cellphones.com.vn/tai-nghe-bluetooth-samsung-galaxy-buds.html?gclid=CjwKCAjwvOHzBRBoEiwA48i6Ap-1Plvl5J3-xCX-1Kg_DJ22VnDsC6ZH1rQoNzDtwhMkWq698MjRDhoCxvAQAvD_BwE', NULL, 5, 4, NULL, NULL, NULL, NULL, 0, '2020-03-23 00:19:39', '2020-03-23 00:19:39'),
(24, 'LAPTOP DELL INSPRION 7591 KJ2G41(I7 9750H 8GB / 256GB SSD/15.6FHD / VGA 3GB / Win 10 / Bạc)', 'laptop-dell-insprion-7591-kj2g41i7-9750h-8gb-256gb-ssd156fhd-vga-3gb-win-10-bac', 'uploads/product/1584948108_30089_laptop_dell_inspiron_15_7591_kj2g41_1.jpg', 10, 29990000, 2890000, 24, 1, 1, 0, 4, 'https://cellphones.com.vn/laptop-dell-insprion-7591-kj2g41-core-i7-9750h-ram-8gb-ssd-256gb-15-6inch-fhd-vga-3gb.html', NULL, 8, 4, NULL, NULL, NULL, NULL, 0, '2020-03-23 00:21:48', '2020-03-23 00:21:48'),
(25, 'Headphones chống ồn Sony WH-1000XM3', 'headphones-chong-on-sony-wh-1000xm3', 'uploads/product/1584948293_2068_tai_nghe_bluetooth_sony_wh_1000xm3__1__1_1.jpg', 5, 8490000, 6490000, 25, 1, 0, 0, 20, 'https://cellphones.com.vn/tai-nghe-khong-day-chong-on-sony-wh-1000-xm3.html', '0', 10, 4, NULL, NULL, NULL, NULL, 0, '2020-03-23 00:24:53', '2020-03-23 00:24:53'),
(26, 'Samsung Galaxy S20 Ultra', 'samsung-galaxy-s20-ultra', 'uploads/product/1584948393_600_samsung-galaxy-s20-ultra-5g.jpg', 35, 29990000, 25099000, 26, 1, 1, 0, 1, 'https://cellphones.com.vn/samsung-galaxy-s20-ultra.html?gclid=CjwKCAjwvOHzBRBoEiwA48i6ApklPr0_OfD-XUHmI6USZ7UdLMH2PMvZrHPgb4XFBPUCnH1SlnIiqxoCf3AQAvD_BwE', NULL, 5, 4, NULL, NULL, NULL, NULL, 0, '2020-03-23 00:26:33', '2020-03-23 00:26:33'),
(27, 'Asus Zenbook UX333FA-A4011T/Core i5-8265U', 'asus-zenbook-ux333fa-a4011tcore-i5-8265u', 'uploads/product/1584948463_637020003765248380_asus-zenbook-flip-um462da-bac-2.png', 3, 21990000, 20990000, 27, 1, 0, 0, 4, 'https://fptshop.com.vn/may-tinh-xach-tay/asus-zenbook-ux333fa-a4011t-core-i5-8265u?utm_source=masoffer&traffic_id=5e7583cf9ff3670041555447&', NULL, 12, 8, NULL, NULL, NULL, NULL, 0, '2020-03-23 00:27:43', '2020-03-23 00:27:43'),
(28, 'ASUS ROG Phone 2 512GB', 'asus-rog-phone-2-512gb', 'uploads/product/1584948535__600x600__crop_600_asus_rog_phone2_min_1.jpg', 0, 21490000, 20490000, 28, 1, 0, 0, 1, 'https://cellphones.com.vn/asus-rog-phone-2.html?cmpid=sem_search_google&gclid=CjwKCAjwvOHzBRBoEiwA48i6AhWoww0hYgq7gdPjqqHrdL7tqJ6Gbi32VOaynb1fYSBknBNmbnmv1BoCjX4QAvD_BwE', NULL, 12, 4, NULL, NULL, NULL, NULL, 0, '2020-03-23 00:28:55', '2020-03-23 00:28:55'),
(29, 'Tai Nghe Gaming Logitech G Pro (Gen 2) – Hàng Chính Hãng', 'tai-nghe-gaming-logitech-g-pro-gen-2-hang-chinh-hang', 'uploads/product/1584948978_a0abb6e8532b674d4bf4847b1e0819c1.png', 2, 2890000, 1990000, 29, 1, 0, 0, 20, NULL, NULL, 11, 10, NULL, NULL, NULL, NULL, 0, '2020-03-23 00:35:43', '2020-03-23 00:36:33'),
(30, 'Iphone 7 Plus 32GB - NEW', 'iphone-7-plus-32gb-new', 'uploads/product/1584949065_iphone-7-plus-gold-400x460-400x460.png', 1, 8990000, 7990000, 30, 1, 0, 0, 1, 'https://www.thegioididong.com/dtdd/iphone-7-plus', NULL, 6, 6, NULL, NULL, NULL, NULL, 0, '2020-03-23 00:37:45', '2020-03-23 00:37:45'),
(40, 'Samsung Galaxy Tab with S Pen (P205)', 'samsung-galaxy-tab-with-s-pen-p205', 'uploads/product/1586666383_samsung-galaxy-tab-a8-plus-p205-black-400x400.jpg', 5, 6999000, 5999000, 0, 1, 0, 0, 2, NULL, NULL, 5, 6, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, '2020-04-11 21:39:43', '2020-04-11 21:39:43'),
(41, 'iPad Mini 7.9 inch Wifi 64GB (2019)', 'ipad-mini-79-inch-wifi-64gb-2019', 'uploads/product/1586666566_ipad-mini-79-inch-wifi-2019-gold-400x400.jpg', 5, 10990000, 10490000, 1, 1, 0, 0, 2, NULL, NULL, 6, 6, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, '2020-04-11 21:42:46', '2020-04-11 21:42:46'),
(42, 'Samsung Galaxy Tab A8 8\" T295 (2019)', 'samsung-galaxy-tab-a8-8-t295-2019', 'uploads/product/1586666633_samsung-galaxy-tab-a8-plus-p205-black-400x400.jpg', 4, 4000000, 3690000, 2, 1, 0, 0, 2, NULL, NULL, 5, 0, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, '2020-04-11 21:43:53', '2020-04-11 21:47:15'),
(43, 'iPad 10.2 inch Wifi Cellular 128GB (2019)', 'ipad-102-inch-wifi-cellular-128gb-2019', 'uploads/product/1586666700_ipad-10-2-inch-wifi-cellular-128gb-2019-gray-400x400.jpg', 2, 9760000, 8990000, 3, 1, 0, 0, 2, NULL, NULL, 6, 6, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, '2020-04-11 21:45:00', '2020-04-11 21:45:00'),
(44, 'Huawei MediaPad M5 Lite', 'huawei-mediapad-m5-lite', 'uploads/product/1586666762_huawei-mediapad-m5-lite-gray-400x400.jpg', 3, 7900000, 7400000, 0, 1, 0, 0, 2, NULL, NULL, 5, 6, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, '2020-04-11 21:46:02', '2020-04-11 21:46:02'),
(45, 'Acer Aspire A315 54 36QY i3 10110U (NX.HM2SV.001)', 'acer-aspire-a315-54-36qy-i3-10110u-nxhm2sv001', 'uploads/product/1586666994_acer-aspire-a315-54-36qy-i3-10110u-4gb-256gb-win10-1-400x400.jpg', 2, 10230000, 8500000, 0, 1, 0, 0, 4, NULL, NULL, 6, 6, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, '2020-04-11 21:49:54', '2020-04-11 21:49:54'),
(46, 'Asus VivoBook A412FA i3 8145U', 'asus-vivobook-a412fa-i3-8145u', 'uploads/product/1586667066_asus-vivobook-a412f-i3-8145u-4gb-32gb-512gb-win10-400x400.jpg', 8, 7890000, 6900000, 0, 1, 0, 0, 4, NULL, 'EK661T', 5, 4, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, '2020-04-11 21:51:06', '2020-04-11 21:51:06'),
(47, 'HP 15s du0072TX i3 7020U (8WP16PA)', 'hp-15s-du0072tx-i3-7020u-8wp16pa', 'uploads/product/1586667231_hp-15s-du0072tx-i3-7020u-4gb-256gb-2gb-mx110-win10-1-400x400.jpg', 5, 22520000, 20000000, 2, 1, 0, 0, 4, NULL, NULL, 8, 4, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, '2020-04-11 21:53:51', '2020-04-11 21:53:51'),
(48, 'Asus VivoBook X409FA i5 8265U', 'asus-vivobook-x409fa-i5-8265u', 'uploads/product/1586667310_asus-vivobook-x409f-i5-8265u-8gb-1tb-win10-ek138t2-1-thumb-1-400x400.jpg', 2, 13800000, 12000000, 4, 1, 0, 0, 4, NULL, 'EK138T', 5, 11, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, '2020-04-11 21:55:10', '2020-04-11 21:55:10'),
(49, 'HP 348 G7 i5 10210U (9PH06PA)', 'hp-348-g7-i5-10210u-9ph06pa', 'uploads/product/1586667371_hp-348-g7-i5-9ph06pa-218439-1-400x400.jpg', 4, 16000000, 15700000, 0, 1, 0, 0, 4, NULL, NULL, 8, 5, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, '2020-04-11 21:56:11', '2020-04-11 21:56:11'),
(50, 'Apple Watch S5 LTE 40mm viền nhôm dây cao su', 'apple-watch-s5-lte-40mm-vien-nhom-day-cao-su', 'uploads/product/1586667604_apple-watch-s5-lte-40mm-vien-nhom-day-cao-su-ava-400x400.jpg', 2, 4000000, 2900000, 4, 1, 0, 0, 6, NULL, NULL, 6, 4, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, '2020-04-11 22:00:04', '2020-04-11 22:00:04'),
(51, 'Daumier DM-JLW001.SLTN.8SNI.S.M - Nam - Superman', 'daumier-dm-jlw001sltn8snism-nam-superman', 'uploads/product/1586667688_daumier-dm-jlw001-sltn-8sni-s-m-nam-1-1-400x400.jpg', 3, 3500000, 2990000, 0, 1, 0, 0, 6, NULL, NULL, 15, 0, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, '2020-04-11 22:01:28', '2020-04-11 22:01:28'),
(52, 'Pin sạc dự phòng Polymer 10.000mAh Xiaomi Mi 18W Fast Charge Power Bank 3', 'pin-sac-du-phong-polymer-10000mah-xiaomi-mi-18w-fast-charge-power-bank-3', 'uploads/product/1586667835_sac-du-phong-polymer-10000mah-xiaomi-mi-18w-den-1-400x400.jpg', 2, 4490000, 500000, 0, 1, 0, 0, 3, NULL, NULL, 15, 6, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, '2020-04-11 22:03:55', '2020-04-11 22:03:55'),
(53, 'Loa Bluetooth eSaver S12B-2 Đen', 'loa-bluetooth-esaver-s12b-2-den', 'uploads/product/1586667890_loa-bluetooth-esaver-s12b-2-den-avatar-2-400x400.jpg', 3, 300000, 2490000, 0, 1, 0, 0, 3, NULL, NULL, 5, 5, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, '2020-04-11 22:04:50', '2020-04-11 22:04:50'),
(54, 'Dây cáp Micro USB 1 m e.VALU LTM-01', 'day-cap-micro-usb-1-m-evalu-ltm-01', 'uploads/product/1586667963_cap-micro-1m-evalu-ltm-01-12-400x400.jpg', 2, 280000, 190000, 0, 1, 0, 0, 3, NULL, NULL, 15, 11, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, '2020-04-11 22:06:03', '2020-04-11 22:06:03'),
(55, 'Thẻ nhớ MicroSD 32 GB Lexar class 10 UHS-I', 'the-nho-microsd-32-gb-lexar-class-10-uhs-i', 'uploads/product/1586668015_the-nho-microsd-32gb-lexar-class-10-uhs-i-5-400x400.jpg', 3, 400000, 320000, 0, 1, 0, 0, 3, NULL, NULL, 15, 0, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, '2020-04-11 22:06:55', '2020-04-11 22:06:55'),
(56, 'Tai nghe Bluetooth Mozard Flex4 Đen Xanh', 'tai-nghe-bluetooth-mozard-flex4-den-xanh', 'uploads/product/1586668068_tai-nghe-bluetooth-mozard-flex4-den-xanh-1-600x600-1-400x400.jpg', 3, 200000, 190000, 0, 1, 0, 0, 3, NULL, NULL, 6, 11, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, '2020-04-11 22:07:48', '2020-04-11 22:07:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`, `avatar`, `is_active`) VALUES
(1, 'Hoàng Dũng', 'hcdung209@gmail.com', '$2y$10$TNWZo9WER49I.Z5ad4hIMO/cQRYAn8nMXOSgajlfo/pO.LEaXLKxq', NULL, '2020-04-10 21:24:51', '2020-05-19 12:32:10', 1, 'uploads/user/1586579091_Tổng-hợp-hình-ảnh-avatar-dễ-thương-làm-hình-đại-diện-đẹp-nhất-1.jpg', 1),
(2, 'Ngọc Hà', 'ngocha18082407@gmail.com', '2345678', NULL, '2020-04-10 21:25:55', '2020-04-10 21:25:55', 2, 'uploads/user/1586579155_tai-hinh-chibi-bst.jpg', 1),
(3, 'admin', 'admin@gmail.com', '$2y$10$CWWZcJDTL2Xf1O8ZaD99dOrImQSKfePrU8L19Hw/vcqUca6u2T0uq', NULL, '2020-05-19 12:32:27', '2020-05-19 12:32:27', 1, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `is_active` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `slug`, `email`, `phone`, `image`, `website`, `address`, `position`, `is_active`, `created_at`, `updated_at`) VALUES
(4, 'Cellphones', 'cellphones', 'cskh@cellphones.com.vn', '1800.2097', 'uploads/vendor/1584935240_logo.jpg', 'https://didongviet.vn/', 'Việt Nam', 1, 1, '2020-03-22 20:47:20', '2020-03-22 20:49:25'),
(5, 'Di động Việt', 'di-dong-viet', 'lienhe@didongviet.vn', '1800 6018', 'uploads/vendor/1584935377_logo-ddv-full-03.png', 'https://didongviet.vn/', 'Việt Nam', 2, 1, '2020-03-22 20:49:37', '2020-03-22 20:49:37'),
(6, 'Thế Giới Di Động', 'the-gioi-di-dong', 'cskh@thegioididong.com', '1800 1060', 'uploads/vendor/1584935523_Logo-Thegioididong-945x709.jpg', 'https://www.thegioididong.com/', 'Việt Nam', 3, 1, '2020-03-22 20:52:03', '2020-03-22 20:52:03'),
(7, 'Di Động Thông Minh', 'di-dong-thong-minh', NULL, '0945.722.268', NULL, 'https://didongthongminh.vn/', '119 Thái Thịnh, Thịnh Quang, Đống Đa, Hà Nội', 4, 1, '2020-03-22 20:54:05', '2020-03-22 20:54:05'),
(8, 'FPT Shop', 'fpt-shop', 'fptshop@fpt.com.vn', '1800 6601', 'uploads/vendor/1584935728_637133160350737542_201407171129187887_1378267132_fptshop-ver1-0-logo-color-bg-black.jpg', 'https://fptshop.com.vn/', 'Việt Nam', 5, 1, '2020-03-22 20:55:28', '2020-03-22 20:55:28'),
(9, 'Mac One', 'mac-one', 'lienhe@macone.vn', '0936096900', 'uploads/vendor/1584947052_xLogo-MacOne.png.pagespeed.ic.vtZRQ1sWEu.jpg', 'https://macone.vn/', '113 Hoàng Cầu, Q. Đống Đa, Hà Nội ( 68 Hoàng Cầu)', 6, 1, '2020-03-23 00:04:12', '2020-03-23 00:04:12'),
(10, 'Tiki', 'tiki', 'marketing@tiki.vn', '19006035', NULL, 'https://tiki.vn/', 'Ho Chi Minh City', 7, 1, '2020-03-23 00:31:28', '2020-03-23 00:31:28'),
(11, 'Khác', 'khac', NULL, NULL, NULL, NULL, NULL, 5, 1, '2020-04-11 21:53:06', '2020-04-11 21:53:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `banners_slug_unique` (`slug`) USING BTREE;

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `brands_slug_unique` (`slug`) USING BTREE;

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `categories_slug_unique` (`slug`) USING BTREE;

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`) USING BTREE;

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `products_slug_index` (`slug`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`) USING BTREE;

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `vendors_slug_unique` (`slug`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
