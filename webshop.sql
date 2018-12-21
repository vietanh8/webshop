-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 21, 2018 lúc 04:28 PM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `date_order` date NOT NULL,
  `total` float(23,19) NOT NULL,
  `create_at` time NOT NULL,
  `update_at` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `name_customer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `name_products` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `date_order` date NOT NULL,
  `total` float(10,2) NOT NULL,
  `unit_price` float(23,19) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` time NOT NULL,
  `update_at` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_customer`, `name_customer`, `name_products`, `quantity`, `size`, `date_order`, `total`, `unit_price`, `status`, `created_at`, `update_at`) VALUES
(15, 26, 'Phan Ngọc Việt Anh', 'SHOES SCRENA', 2, 8, '2018-12-08', 240.00, 120.0000000000000000000, 'Complete', '00:00:00', '00:00:00'),
(16, 27, 'Anh là vô địch', 'SHOES SCRENA', 3, 9, '2018-12-08', 360.00, 120.0000000000000000000, 'Pending', '00:00:00', '00:00:00'),
(17, 28, 'Việt Anh', 'SHOES BLE', 1, 7, '2018-12-11', 169.00, 169.0000000000000000000, 'Pending', '00:00:00', '00:00:00'),
(20, 31, 'Việt Chị', 'SHOES SCRENA', 5, 7, '2018-12-14', 600.00, 120.0000000000000000000, 'Complete', '00:00:00', '00:00:00'),
(21, 32, 'Việt Em', 'Taja Commissioner', 2, 8, '2018-12-14', 278.00, 139.0000000000000000000, 'Pending', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone` varchar(15) NOT NULL,
  `created_at` time NOT NULL,
  `update_at` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `address`, `phone`, `created_at`, `update_at`) VALUES
(23, 'Phan Ngọc Việt Anh', 'pnvanh.17it3@sict.udn.vn', 'Nam Tanh', '1221', '00:00:00', '00:00:00'),
(24, 'Phan Ngọc Việt Anh', 'vietanh.17399@gmail.com', 'Nam Tanh', '1212', '00:00:00', '00:00:00'),
(25, 'Anh Vượng', 'vietanhit1007@abc.yzdr', '69 Sín Cháu', '123423', '00:00:00', '00:00:00'),
(26, 'Phan Ngọc Việt Anh', 'pnvanh.17it3@sict.udn.vn', '4 Nam Thành', '06969696969', '00:00:00', '00:00:00'),
(27, 'Anh là vô địch', 'vietanhit1007@gmail.com', '69 Sín Cháu', '0696969344', '00:00:00', '00:00:00'),
(28, 'Việt Anh', 'pnvanh.17it3@sict.udn.vn', '4 Nam Thành', '0397347197', '00:00:00', '00:00:00'),
(29, 'Việt Anh', 'pnvanh.17it3@sict.udn.vn', '4 Nam Thành', '0397347197', '00:00:00', '00:00:00'),
(30, 'Việt Anh', 'pnvanh.17it3@sict.udn.vn', '4 Nam Thành', '0397347197', '00:00:00', '00:00:00'),
(31, 'Việt Chị', 'vietanh.17399@gmail.com', 'Nam Thanh', '0696969344', '00:00:00', '00:00:00'),
(32, 'Việt Em', '17it123@sict.udn.vn', '69 abcxxx', '096969696', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `size` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `best` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `unit` float(23,19) NOT NULL,
  `promotion_price` float(23,19) NOT NULL,
  `create_at` time NOT NULL,
  `update_at` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `size`, `quantity`, `id_type`, `type`, `best`, `img`, `description`, `unit`, `promotion_price`, `create_at`, `update_at`) VALUES
(1, 'Boots shoes Maca', 7, 1, 1, 'BOOTS', 1, 'footwear/images/item-1.jpg', '<p><strong>SHOES </strong>MACA IS THE BEST</p>', 139.0000000000000000000, 0.0000000000000000000, '22:07:02', '02:06:10'),
(2, 'Minam Meaghan', 7, 1, 2, 'BOOTS', 0, 'footwear/images/item-2.jpg', '<p>Shoe for <em>ng&agrave;nh</em></p>', 139.0000000000000000000, 0.0000000000000000000, '00:00:00', '00:00:00'),
(3, 'Taja Commissioner', 7, 1, 2, 'BOOTS', 0, 'footwear/images/item-3.jpg', 'This is description', 139.0000000000000000000, 0.0000000000000000000, '22:07:02', '18:25:24'),
(4, 'SNEAKER CLOOD', 7, 1, 1, 'BOOTS', 0, 'footwear/images/item-4.jpg', 'Blue every where', 130.0000000000000000000, 0.0000000000000000000, '00:08:08', '18:25:24'),
(5, 'SHOES SCRENA', 7, 1, 1, 'SNEAKER', 1, 'footwear/images/item-5.jpg', '<p>This is shoes for <strong>&quot;Ng&agrave;nh&quot;</strong></p>', 120.0000000000000000000, 0.0000000000000000000, '22:07:02', '02:06:10'),
(6, 'SHOES BLE', 7, 1, 1, 'BOOTS', 0, 'footwear/images/item-6.jpg', 'No descroption', 169.0000000000000000000, 0.0000000000000000000, '22:07:02', '02:06:10'),
(7, 'SHOES SOAW', 7, 1, 1, 'BOOTS', 1, 'footwear/images/item-7.jpg', 'Long Lon', 187.0000000000000000000, 0.0000000000000000000, '22:07:02', '18:25:24'),
(8, 'SNEAKS 09', 7, 1, 1, 'SNEAKER', 0, 'footwear/images/item-8.jpg', 'Long Lon 2', 136.0000000000000000000, 0.0000000000000000000, '00:00:00', '00:00:00'),
(9, 'SNEAKER', 7, 1, 1, 'SNEAKER', 0, 'footwear/images/item-9.jpg', 'Rong lon 3', 121.0000000000000000000, 0.0000000000000000000, '22:07:02', '18:25:24'),
(10, 'SEHAM BSF', 7, 1, 1, 'BOOTS', 1, 'footwear/images/item-10.jpg', 'For \"Ngành\" 2', 141.0000000000000000000, 0.0000000000000000000, '22:07:02', '02:06:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products_type`
--

CREATE TABLE `products_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_at` time NOT NULL,
  `update_at` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `products_type`
--

INSERT INTO `products_type` (`id`, `name`, `created_at`, `update_at`) VALUES
(1, 'BOOTS', '11:00:00', '18:25:24'),
(2, 'SNEAKERS', '11:00:00', '02:06:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `link`, `img`) VALUES
(1, '', 'footwear/images/img_bg_1.jpg'),
(2, '', 'footwear/images/img_bg_2.jpg'),
(3, '', 'footwear/images/img_bg_3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `account_type` int(1) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `created_at` time NOT NULL,
  `update_at` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `account_type`, `phone`, `address`, `avatar`, `remember_token`, `created_at`, `update_at`) VALUES
(1, 'Viet Anh', 'pnvanh.17it3@sict.udn.vn', '$2y$10$lDEyV.802sLzIROrzGiqZOsaiYf0WQTHCziBpHdugvsCg0C4dOWKu', 0, '0397347197', '4 Nam Thành', 'footwear/images/person1.jpg', 'wbb4m3shhPLbyQvodcD1bxsZr26QYdPFm6HzNpgsPrlJ5ffrCKixkRYsrTOH', '00:00:00', '00:00:00'),
(2, 'Việt Em ', '17it123@sict.udn.vn', '$2y$10$uecBC7fg5G6PPuDO2qiP9epUvnKIYb6bh82vY7jF8ur4jir.lXzwG', 0, '096969696', '69 Sín Cháu', 'footwear/images/person1.jpg', 'vhgjwbbxLfTLgCPhA1uPOcsCwZRd44CSZTLMRzxMkVq0opJ95PqfySKYBPZo', '00:00:00', '00:00:00'),
(3, 'Việt Chị', 'vietanh.17399@gmail.com', '$2y$10$RH0VBSQWVwbjgjq7z5cZpupM8AUJ6tXQVZZCMF.VUPOdbrZQmsfYK', 0, '0696969344', 'Nam Thanh', 'footwear/images/person3.jpg', 'GW382QzIvKiJsO4VyieFAfBmCsWx0WjWxoJoW7wxRG0QqwFnnYuRr27CCnqh', '00:00:00', '00:00:00'),
(4, 'Anh là vô địch', 'admin@admin.com', '$2y$10$d64cKeKR3Xq/nxcejmsFLORSYrcc7Gj0V4q7P/oHf/caxL8LPwOQ6', 1, '+8439734719', '69 Sín Cháu', 'footwear/images/person3.jpg', 'hW7kmKiSYuFcOTdzjFL5Qiasaacof6L59iOx4KTFvxx66LKCKTzofrpwoLaD', '00:00:00', '00:00:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products_type`
--
ALTER TABLE `products_type`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `products_type`
--
ALTER TABLE `products_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
