-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 28, 2024 lúc 02:22 PM
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
-- Cơ sở dữ liệu: `art-toys`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `username`, `pass`, `email`, `address`, `phone`, `role`) VALUES
(1, 'NTDungx', '123123', 'dungndtph28795@fpt.edu.vn', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 1),
(7, 'rgo', '68768768', 'tiendung18112002@gmail.com', NULL, NULL, 0),
(8, 'rgo', '68768768', 'tiendung18112002@gmail.com', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `id_user` int(10) DEFAULT 0,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_phone` varchar(50) NOT NULL,
  `bill_email` varchar(100) NOT NULL,
  `bill_payment` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1. thanh toán trực  tiếp\r\n2. chuyển khoản\r\n3. thanh toán online',
  `date_confirm` varchar(50) DEFAULT NULL,
  `total` int(10) NOT NULL DEFAULT 0,
  `bill_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0. Đơn hàng mới\r\n1. Đang chờ\r\n2. Đang giao hàng\r\n3. Đã giao hàng',
  `receive_name` varchar(255) DEFAULT NULL,
  `receive_address` varchar(255) DEFAULT NULL,
  `receive_phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `id_user`, `bill_name`, `bill_address`, `bill_phone`, `bill_email`, `bill_payment`, `date_confirm`, `total`, `bill_status`, `receive_name`, `receive_address`, `receive_phone`) VALUES
(9, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '06:48:01pm 18/02/2024', 1500000, 0, NULL, NULL, NULL),
(10, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '06:49:17pm 18/02/2024', 1500000, 0, NULL, NULL, NULL),
(11, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '06:49:27pm 18/02/2024', 1500000, 0, NULL, NULL, NULL),
(12, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '06:50:25pm 18/02/2024', 1500000, 0, NULL, NULL, NULL),
(13, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '06:52:58pm 18/02/2024', 1500000, 0, NULL, NULL, NULL),
(14, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '06:53:16pm 18/02/2024', 1500000, 0, NULL, NULL, NULL),
(15, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '06:53:30pm 18/02/2024', 1500000, 0, NULL, NULL, NULL),
(16, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '06:53:42pm 18/02/2024', 1500000, 0, NULL, NULL, NULL),
(17, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '06:54:33pm 18/02/2024', 1500000, 0, NULL, NULL, NULL),
(18, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '06:55:27pm 18/02/2024', 1500000, 0, NULL, NULL, NULL),
(19, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '06:56:18pm 18/02/2024', 1500000, 0, NULL, NULL, NULL),
(20, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '06:56:23pm 18/02/2024', 1500000, 0, NULL, NULL, NULL),
(21, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '06:56:25pm 18/02/2024', 1500000, 0, NULL, NULL, NULL),
(22, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '06:58:20pm 18/02/2024', 1500000, 0, NULL, NULL, NULL),
(23, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:00:45pm 18/02/2024', 1500000, 0, NULL, NULL, NULL),
(24, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:01:10pm 18/02/2024', 1500000, 0, NULL, NULL, NULL),
(25, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:03:02pm 18/02/2024', 1500000, 0, NULL, NULL, NULL),
(26, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:03:19pm 18/02/2024', 1500000, 0, NULL, NULL, NULL),
(27, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:06:27pm 18/02/2024', 1500000, 0, NULL, NULL, NULL),
(28, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:12:07pm 18/02/2024', 1500000, 0, NULL, NULL, NULL),
(29, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:14:04pm 18/02/2024', 1500000, 0, NULL, NULL, NULL),
(30, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:15:36pm 18/02/2024', 1500000, 0, NULL, NULL, NULL),
(31, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:16:32pm 18/02/2024', 1500000, 0, NULL, NULL, NULL),
(32, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:16:51pm 18/02/2024', 1500000, 0, NULL, NULL, NULL),
(33, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:17:14pm 18/02/2024', 1500000, 0, NULL, NULL, NULL),
(34, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:17:34pm 18/02/2024', 1740000, 0, NULL, NULL, NULL),
(35, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:24:29pm 18/02/2024', 1740000, 0, NULL, NULL, NULL),
(36, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:27:15pm 18/02/2024', 1740000, 0, NULL, NULL, NULL),
(37, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:27:18pm 18/02/2024', 1740000, 0, NULL, NULL, NULL),
(38, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:28:24pm 18/02/2024', 1740000, 0, NULL, NULL, NULL),
(39, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:28:43pm 18/02/2024', 1740000, 0, NULL, NULL, NULL),
(40, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:29:34pm 18/02/2024', 340000, 0, NULL, NULL, NULL),
(41, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:31:32pm 18/02/2024', 590000, 0, NULL, NULL, NULL),
(42, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:32:20pm 18/02/2024', 590000, 0, NULL, NULL, NULL),
(43, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:32:56pm 18/02/2024', 590000, 0, NULL, NULL, NULL),
(44, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:35:22pm 18/02/2024', 590000, 0, NULL, NULL, NULL),
(45, 0, '', '', '', '', 0, '07:35:25pm 18/02/2024', 590000, 0, NULL, NULL, NULL),
(46, 0, '', '', '', '', 0, '07:37:25pm 18/02/2024', 590000, 0, NULL, NULL, NULL),
(47, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:39:47pm 18/02/2024', 590000, 0, NULL, NULL, NULL),
(48, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:40:05pm 18/02/2024', 590000, 0, NULL, NULL, NULL),
(49, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:41:11pm 18/02/2024', 220000, 0, NULL, NULL, NULL),
(50, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:41:59pm 18/02/2024', 300000, 0, NULL, NULL, NULL),
(51, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:47:40pm 18/02/2024', 250000, 0, NULL, NULL, NULL),
(52, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:47:47pm 18/02/2024', 250000, 0, NULL, NULL, NULL),
(53, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:48:08pm 18/02/2024', 590000, 0, NULL, NULL, NULL),
(54, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:49:08pm 18/02/2024', 590000, 0, NULL, NULL, NULL),
(55, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:53:51pm 18/02/2024', 1090000, 0, NULL, NULL, NULL),
(56, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '07:55:30pm 18/02/2024', 680000, 0, NULL, NULL, NULL),
(57, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '04:20:16am 19/02/2024', 0, 0, NULL, NULL, NULL),
(58, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '04:20:38am 19/02/2024', 240000, 0, NULL, NULL, NULL),
(59, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '04:34:29am 19/02/2024', 0, 0, NULL, NULL, NULL),
(60, 0, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '04:34:54am 19/02/2024', 240000, 0, NULL, NULL, NULL),
(61, 1, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '09:32:24am 19/02/2024', 340000, 0, NULL, NULL, NULL),
(62, 1, 'NTDungx', 'Số 3, hẻm 19/132a, ngách 28, Đại Linh', '0988328867', 'dungndtph28795@fpt.edu.vn', 0, '09:39:06am 19/02/2024', 240000, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_pro` int(10) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(10) NOT NULL DEFAULT 0,
  `quantity` int(3) NOT NULL,
  `price_all` int(10) NOT NULL,
  `id_bill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `id_user`, `id_pro`, `img`, `name`, `price`, `quantity`, `price_all`, `id_bill`) VALUES
(66, 1, 25, 'IMG_20230714_152058.jpg', 'Elephant', 250000, 1, 250000, 51),
(67, 1, 25, 'IMG_20230714_152058.jpg', 'Elephant', 250000, 1, 250000, 52),
(68, 1, 25, 'IMG_20230714_152058.jpg', 'Elephant', 250000, 1, 250000, 53),
(69, 1, 27, 'IMG_20230714_152450.jpg', 'Fox', 340000, 1, 340000, 53),
(70, 1, 25, 'IMG_20230714_152058.jpg', 'Elephant', 250000, 1, 250000, 54),
(71, 1, 27, 'IMG_20230714_152450.jpg', 'Fox', 340000, 1, 340000, 54),
(72, 1, 25, 'IMG_20230714_152058.jpg', 'Elephant', 250000, 1, 250000, 55),
(73, 1, 27, 'IMG_20230714_152450.jpg', 'Fox', 340000, 1, 340000, 55),
(74, 1, 25, 'IMG_20230714_152058.jpg', 'Elephant', 250000, 1, 250000, 55),
(75, 1, 25, 'IMG_20230714_152058.jpg', 'Elephant', 250000, 1, 250000, 55),
(76, 1, 27, 'IMG_20230714_152450.jpg', 'Fox', 340000, 1, 340000, 56),
(77, 1, 27, 'IMG_20230714_152450.jpg', 'Fox', 340000, 1, 340000, 56),
(78, 1, 26, 'IMG_20230714_152255.jpg', 'Feline', 240000, 1, 240000, 58),
(79, 1, 26, 'IMG_20230714_152255.jpg', 'Feline', 240000, 1, 240000, 60),
(80, 1, 27, 'IMG_20230714_152450.jpg', 'Fox', 340000, 1, 340000, 61),
(81, 1, 26, 'IMG_20230714_152255.jpg', 'Feline', 240000, 1, 240000, 62);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Skullpanda'),
(3, 'dimmo'),
(4, 'popo & coco'),
(9, 'Molly');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(10) NOT NULL,
  `content` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `content`, `iduser`, `idpro`, `date`) VALUES
(12, 'đẹp', 1, 22, '11:07:47pm 27/01/2024'),
(14, 'mê', 1, 23, '04:10:04am 28/01/2024'),
(15, 'đẹp', 1, 23, '04:10:07am 28/01/2024'),
(16, 'fghfgh', 0, 27, '05:53:37pm 20/02/2024'),
(17, 'tỷtyrt', 1, 27, '05:53:51pm 20/02/2024');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) DEFAULT 0,
  `img` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `view` int(11) DEFAULT 0,
  `idcat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `img`, `description`, `view`, `idcat`) VALUES
(6, 'Polar Bear', 300000, 'IMG_20230714_145313.jpg', 'asdasdas', 3, 1),
(20, 'Space', 280000, 'IMG_20230714_151330.jpg', 'sdcasdcsd', 31, 9),
(21, 'Rabbit', 320000, 'IMG_20230714_151330.jpg', 'fdsdfse', 4, 1),
(22, 'Penguin', 220000, 'IMG_20230714_145726.jpg', '', 56, 1),
(23, 'Pigeon', 220000, 'IMG_20230714_150121.jpg', '', 29, 1),
(24, 'Unicorn', 280000, 'IMG_20230714_151645.jpg', 'sdfsdfs', 28, 1),
(25, 'Elephant', 250000, 'IMG_20230714_152058.jpg', 'dfsdfwe', 25, 1),
(26, 'Feline', 240000, 'IMG_20230714_152255.jpg', 'sdfsewe', 25, 1),
(27, 'Fox', 340000, 'IMG_20230714_152450.jpg', 'fsdfe', 27, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_bill_cart` (`id_bill`),
  ADD KEY `lk_cart_products` (`id_pro`),
  ADD KEY `lk_cart_account` (`id_user`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_category` (`idcat`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `lk_bill_cart` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `lk_cart_account` FOREIGN KEY (`id_user`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `lk_cart_products` FOREIGN KEY (`id_pro`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `lk_category` FOREIGN KEY (`idcat`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
