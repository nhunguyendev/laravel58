-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2021 at 12:36 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel58`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `created_at`, `updated_at`) VALUES
(1, 'Apple', 'apple', NULL, '2021-02-24 20:21:56'),
(2, 'Samsung', 'samsung', NULL, NULL),
(3, 'LG', 'lg', '2021-01-27 00:54:48', '2021-01-27 00:54:48'),
(5, 'Oppo', 'oppo', '2021-01-27 01:43:06', '2021-01-27 01:43:06'),
(7, 'Nokia', 'nokia', '2021-02-26 22:59:57', '2021-02-26 22:59:57'),
(8, 'Vivo', 'vivo', '2021-03-01 03:43:27', '2021-03-01 03:43:27');

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
(3, '2021_01_27_053527_create_categories_table', 2),
(4, '2021_02_03_152536_create_products_table', 3);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(4) NOT NULL,
  `img1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `category_id`, `price`, `description`, `featured`, `img1`, `img2`, `img3`, `img4`, `created_at`, `updated_at`) VALUES
(18, 'iPhone SE 256GB', 'iphone-se-256gb', 1, 15490000, '<p>iPhone SE 2020 c&oacute; thiết kế kh&aacute; nhỏ b&eacute; khi đặt cạnh c&aacute;c smartphone&nbsp;<a href=\"https://www.thegioididong.com/dtdd-tu-6-inch\" target=\"_blank\">m&agrave;n h&igrave;nh khủng</a>&nbsp;hiện nay, nhưng với những ai kh&ocirc;ng th&iacute;ch kiểu&nbsp;<a href=\"https://www.thegioididong.com/dtdd-man-hinh-tran-vien\" target=\"_blank\">thiết kế tr&agrave;n viền</a>&nbsp;v&agrave; m&agrave;n h&igrave;nh lớn, th&igrave; đ&acirc;y sẽ l&agrave; lựa chọn tốt nhất cho họ.</p>\r\n\r\n<p>Với m&agrave;n h&igrave;nh 4.7 inch, viền m&agrave;n h&igrave;nh kh&aacute; d&agrave;y, c&ugrave;ng&nbsp;<a href=\"https://www.thegioididong.com/dtdd-bao-mat-van-tay\" target=\"_blank\">cảm biến v&acirc;n tay</a>&nbsp;Touch ID, c&aacute;c cạnh bo cong ho&agrave;n hảo, iPhone SE 2020 mang lại cảm gi&aacute;c cầm nắm quen thuộc,&nbsp;<a href=\"https://www.thegioididong.com/dtdd-nho-gon\" target=\"_blank\">k&iacute;ch thước nhỏ gọn</a>&nbsp;để bạn sử dụng 1 tay một c&aacute;ch dễ d&agrave;ng.</p>', 0, 'iphone-se-128gb-2020-do-600x600.jpg', 'iphone-mini-do-new-600x600-600x600.jpg', 'iphone-se-2020-den-600x600-600x600.jpg', 'iphone-12-pro-max-xanh-duong-new-600x600-600x600.jpg', '2021-02-24 19:37:33', '2021-02-26 19:45:30'),
(19, 'iPhone 12 Pro Max 512GB', 'iphone-12-pro-max-512gb', 1, 41490000, '<p>i<a href=\"https://www.thegioididong.com/dtdd/iphone-12-pro-max-512gb\" target=\"_blank\">Phone 12 Pro Max 512GB</a>&nbsp;- đẳng cấp từ t&ecirc;n gọi đến từng chi tiết. Ngay từ khi chỉ l&agrave; tin đồn th&igrave; chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\">smartphone</a>&nbsp;n&agrave;y đ&atilde; l&agrave;m đứng ngồi kh&ocirc;ng y&ecirc;n bao &ldquo;fan cứng&rdquo; nh&agrave;&nbsp;<a href=\"https://www.thegioididong.com/apple\" target=\"_blank\">Apple</a>, với những n&acirc;ng cấp v&ocirc; c&ugrave;ng nổi bật hứa hẹn sẽ mang đến những trải nghiệm tốt nhất về mọi mặt m&agrave; chưa một chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd-apple-iphone\" target=\"_blank\">iPhone</a>&nbsp;tiền nhiệm n&agrave;o c&oacute; được.</p>', 1, 'iphone-12-pro-max-xanh-duong-new-600x600-600x600.jpg', 'iphone-12-trang-new-600x600-600x600.jpg', 'iphone-mini-do-new-600x600-600x600.jpg', 'iphone-se-2020-den-600x600-600x600.jpg', '2021-02-24 19:44:37', '2021-02-24 19:44:37'),
(20, 'Samsung Galaxy Z Fold2 5G', 'samsung-galaxy-z-fold2-5g', 2, 50000000, '<p>Samsung Galaxy Z Fold 2 vẫn giữ nguy&ecirc;n cơ chế m&agrave;n h&igrave;nh gập ở thế hệ tiền nhiệm. Như một quyển s&aacute;ch, chiếc điện thoại mở ra để hiển thị m&agrave;n h&igrave;nh lớn b&ecirc;n trong. B&ecirc;n ngo&agrave;i l&agrave; một m&agrave;n h&igrave;nh phụ&nbsp;<a href=\"https://www.thegioididong.com/dtdd-man-hinh-tran-vien\" target=\"_blank\">tr&agrave;n viền</a>&nbsp;với thiết kế đục lỗ.&nbsp;</p>', 1, 'samsung-galaxy-z-fold-2-den-600x600.jpg', 'samsung-galaxy-z-fold-2-vang-600x600-600x600.jpg', 'samsung-galaxy-s21-plus-062321-112345-400x400.jpg', 'samsung-galaxy-s20-plus-xanh-600x600-600x600.jpg', '2021-02-24 19:45:40', '2021-02-26 19:43:06'),
(24, 'Nokia 210', 'nokia-210', 7, 790000, '<h3>Thiết kế nhỏ gọn tinh tế</h3>\r\n\r\n<p>Chiếc điện thoại Nokia 210 c&oacute; thiết kế nhỏ gọn với hai đường cong ở hai b&ecirc;n th&acirc;n m&aacute;y cho cảm gi&aacute;c thoải m&aacute;i khi sử dụng.</p>\r\n\r\n<p>Đ&acirc;y l&agrave; một chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\">điện thoại</a>&nbsp;c&oacute; thiết kế đẹp, tối giản, ph&ugrave; hợp để trở th&agrave;nh chiếc điện thoại phụ trong cuộc sống số b&acirc;y giờ.&nbsp;</p>', 0, 'nokia-210-den-600x600.jpg', 'nokia-105-2019-black-600x600.jpg', NULL, NULL, '2021-02-26 23:01:23', '2021-02-26 23:01:23'),
(25, 'Nokia 2.4', 'nokia-24', 7, 2450000, '<h3>Thiết kế mới, trẻ trung, năng động nhiều m&agrave;u sắc</h3>\r\n\r\n<p>Nokia 2.4 mang ng&ocirc;n ngữ thiết kế ho&agrave;n to&agrave;n kh&aacute;c với c&aacute;c thế hệ&nbsp;<a href=\"https://www.thegioididong.com/dtdd/nokia-22\" target=\"_blank\">Nokia 2.2</a>&nbsp;hay&nbsp;<a href=\"https://www.thegioididong.com/dtdd/nokia-23\" target=\"_blank\">Nokia&nbsp;</a><a href=\"https://www.thegioididong.com/dtdd/nokia-23\" target=\"_blank\">2.3</a>&nbsp;khi được trang bị mặt lưng 3D họa tiết phay xước độc đ&aacute;o kết hợp c&ugrave;ng hiệu ứng chuyển đổi m&agrave;u gradient đẹp mắt ấn tượng từ c&aacute;i nh&igrave;n đầu ti&ecirc;n.</p>', 1, 'nokia-24.jpg', 'nokia-230-xam-dam-600x600-600x600.jpg', 'nokia-215-xanh-ngoc-new-600x600-600x600.jpg', NULL, '2021-02-26 23:02:54', '2021-02-26 23:02:54'),
(26, 'Nokia C2', 'nokia-c2', 7, 1690000, '<h3>M&agrave;n h&igrave;nh lớn, hiển thị nhiều hơn</h3>\r\n\r\n<p>Điểm n&acirc;ng cấp đầu ti&ecirc;n của Nokia C2 so với thế hệ trước&nbsp;<a href=\"https://www.thegioididong.com/dtdd/nokia-c1\" target=\"_blank\">Nokia C1</a>&nbsp;đ&oacute; l&agrave; k&iacute;ch thước m&agrave;n h&igrave;nh, nay đ&atilde; được mở rộng l&ecirc;n đến 5.7 inch. M&agrave;n h&igrave;nh lớn sẽ gi&uacute;p cho chiếc smartphone gi&aacute; rẻ mới n&agrave;y của&nbsp;<a href=\"https://www.thegioididong.com/dtdd-nokia\" target=\"_blank\">Nokia</a>&nbsp;hiển thị th&ocirc;ng tin r&otilde; r&agrave;ng hơn, dễ sử dụng hơn.</p>', 1, 'nokia-c2-xanh-600x600-1-600x600.jpg', 'nokia-24.jpg', 'nokia-8000-den-new-600x600-600x600.jpg', 'nokia-6300-new-600x600-600x600.jpg', '2021-02-26 23:04:03', '2021-02-26 23:04:03'),
(27, 'OPPO Reno5 5G', 'oppo-reno5-5g', 5, 11500000, '<p>Reno5 5G chỉ sở hữu 2 phi&ecirc;n bản m&agrave;u sắc một c&aacute;ch tối giản cho người d&ugrave;ng lựa chọn l&agrave;: M&agrave;u bạc v&agrave; đen. Trong đ&oacute;, lớp vỏ của m&agrave;u bạc được phủ kết hợp giữa lớp k&iacute;nh Reno Glow v&agrave; lớp nano Picasus cho sắc &aacute;nh kim cương tr&ecirc;n th&acirc;n m&aacute;y, m&agrave;u đen th&igrave; thanh lịch v&agrave; đơn giản.</p>\r\n\r\n<p>Chiếc điện thoại sở hữu 4 ống k&iacute;nh mặt sau v&agrave; đ&egrave;n LED flash được sắp xếp một c&aacute;ch tinh tế, nằm gọn trong khu&ocirc;n h&igrave;nh chữ nhật, c&ugrave;ng một ống k&iacute;nh selfie với thiết kế đục lỗ sang trọng nằm b&ecirc;n tr&aacute;i m&agrave;n h&igrave;nh.</p>', 1, 'oppo-reno5-5g-silver-600x600-1-600x600.jpg', 'oppo-reno5-(2).jpg', 'oppo-reno3-pro-(14).jpg', 'OPPO-a53-2020-den-600x600-1.jpg', '2021-02-26 23:05:10', '2021-02-26 23:05:10'),
(28, 'OPPO A15', 'oppo-a15', 5, 3490000, '<h3>M&agrave;n h&igrave;nh lớn, thoải m&aacute;i xem phim, đọc b&aacute;o</h3>\r\n\r\n<p>OPPO A15 được trang bị c&ocirc;ng nghệ m&agrave;n h&igrave;nh IPS LCD, cho độ ph&acirc;n giải HD+ (720 x 1600 Pixels), m&agrave;n h&igrave;nh lớn 6.52 inch thoải m&aacute;i nh&igrave;n khi sử dụng, đặc biệt l&agrave; d&agrave;nh cho người lớn tuổi hay sử dụng điện thoại th&ocirc;ng minh để đọc b&aacute;o, xem tin tức.</p>', 0, 'oppo-a15s-(2).jpg', 'oppo-reno5-(2) (1).jpg', 'OPPO-a53-2020-den-600x600-1.jpg', NULL, '2021-02-26 23:06:11', '2021-02-26 23:06:11'),
(29, 'iPhone 12 mini 128GB', 'iphone-12-mini-128gb', 1, 23990000, '<h3>A14 Bionic cho sức mạnh h&agrave;ng đầu</h3>\r\n\r\n<p>M&ocirc;̃i th&ecirc;́ h&ecirc;̣&nbsp;<a href=\"https://www.thegioididong.com/dtdd-apple-iphone\" target=\"_blank\">iPhone</a>&nbsp;mới đ&ecirc;̀u tương ứng với dòng CPU mới hơn nhằm mang lại hi&ecirc;̣u năng mạnh mẽ nh&acirc;́t. C&oacute; lẽ đ&oacute;, m&agrave; iPhone 12 mini c&oacute; nguồn sức mạnh đến từ A14 Bionic với quy tr&igrave;nh sản xuất 5 nm.</p>\r\n\r\n<p>Đ&acirc;y được coi l&agrave; con chip thuộc top những con chip mạnh nhất đến từ Apple t&iacute;nh đến thời điểm hiện tại (10/2020) mang đến sức mạnh vượt trội.</p>', 1, 'iphone-12-mini-128gb-(6).jpg', 'iphone-mini-do-new-600x600-600x600.jpg', 'iphone-12-trang-new-600x600-600x600.jpg', 'iphone-se-128gb-2020-do-600x600.jpg', '2021-02-28 06:43:35', '2021-02-28 06:43:35'),
(30, 'iPhone XR 128GB máy đẹp xuất sắc', 'iphone-xr-128gb-may-dep-xuat-sac', 1, 14900000, '<p>Thay v&igrave; sở hữu m&agrave;n h&igrave;nh OLED truyền thống, chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\">smartphone</a>&nbsp;n&agrave;y sở hữu m&agrave;n h&igrave;nh LCD.</p>\r\n\r\n<p>B&ugrave; lại với c&ocirc;ng nghệ&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-cong-nghe-man-hinh-true-tone-992705\" target=\"_blank\">True Tone</a>&nbsp;c&ugrave;ng m&agrave;n h&igrave;nh tr&agrave;n viền rộng tới 6.1 inch, mọi trải nghiệm tr&ecirc;n m&aacute;y vẫn đem lại sự th&iacute;ch th&uacute; v&agrave; ho&agrave;n hảo, như d&ograve;ng cao cấp kh&aacute;c của Apple.</p>', 0, 'iphone-xr-128gb-400x400.jpg', 'iphone-12-trang-new-600x600-600x600.jpg', 'iphone-mini-do-new-600x600-600x600.jpg', NULL, '2021-02-28 06:46:17', '2021-02-28 08:09:33');

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
  `level` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$DvXu3QatY3GEH/pUxA0qB.PUrBz.7nnMaj47k1D25kyd09Kl.5MJq', 1, NULL, NULL, NULL),
(2, 'Nhu', 'nhu@gmail.com', NULL, '$2y$10$ctNuPRVKi9iV0BazOndcl.OBDDMxsbZVCtO0MTTcC.689JEAyeGF.', 0, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
