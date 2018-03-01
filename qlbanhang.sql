
-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost:6666
-- Generation Time: Mar 01, 2018 at 07:06 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.27-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlbanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `ID` int(11) NOT NULL,
  `MaHD` varchar(255) NOT NULL,
  `HangHoa` varchar(255) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `daily`
--

CREATE TABLE `daily` (
  `id` int(11) NOT NULL,
  `MaDL` varchar(255) NOT NULL,
  `TenDaiLy` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `SDT` double NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `GhiChu` varchar(255) DEFAULT NULL,
  `NVQuanLy` varchar(255) NOT NULL,
  `NgayDangKy` date NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `daily`
--

INSERT INTO `daily` (`id`, `MaDL`, `TenDaiLy`, `Email`, `Password`, `SDT`, `DiaChi`, `GhiChu`, `NVQuanLy`, `NgayDangKy`, `updated_at`, `created_at`) VALUES
(1, '789731104', 'Big C Thăng Long', 'thanglong@123.com', '7c222fb2927d828af22f592134e8932480637c0d', 12345678900, 'Trần Duy Hưng-Cầu Giấy', NULL, 'Nguyễn Văn B', '2017-09-12', '2018-01-26 16:48:15', '0000-00-00 00:00:00'),
(2, '105815787', 'Big C Hồ Gươm', 'hoguom@123.com', '10a34637ad661d98ba3344717656fcc76209c2f8', 12345678, 'Trần Phú-Hà Đông', NULL, 'Nguyễn Văn A', '2017-09-13', '2017-09-20 02:50:27', '0000-00-00 00:00:00'),
(6, '841459278', 'Big C Mê Linh', 'melinh@123.com', '3da0a5528cbeee9f8a56160fc30a41e552e0401b', 1234567890, 'Mê Linh-Mê Linh', NULL, 'Trần Quốc Việt', '2017-09-18', '2017-09-21 03:01:12', '0000-00-00 00:00:00'),
(7, '765389150', 'Trần Anh-Hà Đông', 'anhsonit96@gmail.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 546879135, 'Hà Đông', NULL, 'Trần Văn Sang', '2017-09-05', '2017-09-27 02:07:14', '2017-09-19 01:48:35'),
(8, '910086772', 'Nguyễn Kim-Hà Đông', 'nguyenkim@123.com', '7c222fb2927d828af22f592134e8932480637c0d', 1234567891234, 'Hà Đông-Hà Nội', NULL, 'Anh Sơn', '2018-01-21', '2018-01-21 17:47:27', '2018-01-21 17:47:27'),
(9, '803537703', 'Media Hà Đông', 'mediahadong@123.com', '7c222fb2927d828af22f592134e8932480637c0d', 123, 'nguyễn trãi-hà đông, ba vì', NULL, 'Anh Sơn', '2018-01-21', '2018-01-21 18:03:52', '2018-01-21 18:03:52'),
(10, '30053131', 'Thế Giới Di Động', 'tgdd@123.com', '7c222fb2927d828af22f592134e8932480637c0d', 12312312312, 'Sài Đồng, TT. Sài Đồng, Hà Nội, Việt Nam', NULL, 'anh anh', '2018-01-22', '2018-01-22 08:05:28', '2018-01-22 08:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `id` int(11) NOT NULL,
  `MaHH` varchar(11) NOT NULL,
  `TenHH` varchar(255) NOT NULL,
  `TenLoaiHH` varchar(11) NOT NULL,
  `SoLuong` int(255) NOT NULL,
  `DonGia` varchar(255) NOT NULL,
  `MoTa` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `AnhSP` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`id`, `MaHH`, `TenHH`, `TenLoaiHH`, `SoLuong`, `DonGia`, `MoTa`, `updated_at`, `created_at`, `AnhSP`) VALUES
(6, '782332785', 'laptop asus', 'LapTop', 300, '2000000', 'đây là mô tả 1', '2018-01-31 18:46:51', NULL, 'uploads/1517424411_3728489_f537c8e9b50688782612023670d3871b.jpg'),
(18, '267451773', 'Usb Kingtom', 'Điện Thoại', 534, '135000', 'đây là mô tả 2', '2018-02-01 19:09:20', '2017-12-05 13:27:43', 'uploads/1517512160_3231349_bb8939ae31980cf9f0bee1571a992c80.jpg'),
(19, '261268497', 'chuột genius', 'LapTop', 30, '100000', NULL, '2018-02-06 17:43:33', '2017-12-05 14:53:03', 'uploads/1517939013_5407376_2cc2d2ddd53591131da04f8b54a6317b.jpg'),
(21, '370741603', 'iphone X', 'Điện Thoại', 13, '1000000', NULL, '2018-01-31 18:51:45', '2017-12-11 11:21:29', 'uploads/1517424705_77864_368e9d73465c1a75d8a587867555d9e6.jpg'),
(22, '174503678', 'dell xps 13', 'LapTop', 100, '18000000', NULL, '2018-01-31 19:05:26', '2018-01-24 18:22:22', 'uploads/W2ebIvx8OC2SX6eIav9vaRV4lwvGAkesCNDtSYVT.jpeg'),
(23, '217058530', 'dell xps 15', 'LapTop', 100, '27000000', NULL, '2018-01-31 19:05:38', '2018-01-29 19:26:47', 'uploads/DlQuIDheFNC8cyP35IEVpnvfkNcn3KxDVKRMZmMo.jpeg'),
(24, '108041396', 'bbb', 'Điện Thoại', 23, '3000000', NULL, '2018-02-01 19:05:28', '2018-01-30 08:45:14', 'uploads/1517511928_3446239_86d82248fc66b70677cc1d79c45272fc.png'),
(25, '870999836', 'iphone 8 plus', 'Điện Thoại', 100, '25000000', NULL, '2018-01-31 19:03:08', '2018-01-30 17:36:28', 'uploads/1517425388_8457621_5c5812be40d2a72e4abb1fae2a7ef87f.jpeg'),
(26, '321313184', 'aaaaaaaa', 'Điện Thoại', 111, '11111112', NULL, '2018-02-06 17:46:58', '2018-01-30 17:51:41', 'uploads/aaaaaaaa1517939218_7069521_f2917cedf1a6659aef6e166943732f78.JPG'),
(27, '334008535', 'bfda', 'Điện Thoại', 12, '100000', NULL, '2018-01-31 18:59:17', '2018-01-30 18:01:20', 'uploads/1517425157_9289850_e1e83affa4b11e375c0d4841c492f20a.jpg'),
(28, '124457255', 'Điều hòa Funiki', 'Điều Hòa', 20, '12000000', NULL, '2018-01-31 19:07:23', '2018-01-31 19:07:23', 'uploads/1517425643_3598396_0b83305ca80d0c823563510db3c312f3.png');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` varchar(255) NOT NULL,
  `NgayBan` datetime NOT NULL,
  `NgayGiaoHang` datetime NOT NULL,
  `DaiLy` varchar(255) NOT NULL,
  `NguoiBan` varchar(255) NOT NULL,
  `NguoiNhanHang` varchar(255) NOT NULL,
  `SDTNhan` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `DiaChiNhanHang` varchar(255) NOT NULL,
  `NguoiGiaoHang` varchar(255) NOT NULL,
  `TinhTrangHD` varchar(255) NOT NULL,
  `GhiChu` varchar(255) DEFAULT NULL,
  `NguoiHuyHD` binary(255) DEFAULT NULL,
  `LyDoHuy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `loaihanghoa`
--

CREATE TABLE `loaihanghoa` (
  `id` int(11) NOT NULL,
  `MaLoaiHH` varchar(255) NOT NULL,
  `TenLoaiHH` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaihanghoa`
--

INSERT INTO `loaihanghoa` (`id`, `MaLoaiHH`, `TenLoaiHH`) VALUES
(1, '986327534', 'Điện Thoại'),
(2, '123546891', 'LapTop'),
(3, '895647358', 'Tủ Lạnh'),
(4, '568794358', 'Ti Vi'),
(10, '285002824', 'Điều Hòa'),
(11, '123568945', 'Máy Giặt'),
(12, '157820801', 'Loa'),
(13, '129248227', 'Balo'),
(15, '313812670', 'Nước Ngọt'),
(16, '230885224', 'Sạc dự phòng'),
(17, '183250989', 'Chuột');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `quanlynhanvien`
--

CREATE TABLE `quanlynhanvien` (
  `MaNV` varchar(255) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `SDT` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `NhomNV` bit(1) NOT NULL,
  `GhiChu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Anh Sơn', 'admin@abc.com', '$2y$10$NylLGOgunq7RNDTdA/S4xuHAi0J8CK380U92Ta7SzphHIXtapZvJq', 'Mỗ Lao, Hà Đông, Hà Nội', '0981639326', 'ERRrxtzqEZ4YuOjw6HvvWL1SYICEx9B3dbhOwQt8uryXg2s5DewcomSbeiKa', NULL, NULL),
(2, 'Vô Danh', 'client@abc.com', '$2y$10$F/lKzQ8FdeaE3ZlNgTj98e4LD30i0hkCnrHlEU0lvOCW3ddpk898a', 'Mỗ Lao, Hà Đông, Hà Nội, Việt Nam', '0981639326', 'KLbeuEfQZUCUFLPa9iCisr7XRaRT4D7xu44jWYHOPHlemePrxI2rFn8CR9vr', NULL, '2018-02-07 12:28:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MaHD` (`MaHD`);

--
-- Indexes for table `daily`
--
ALTER TABLE `daily`
  ADD PRIMARY KEY (`id`,`MaDL`),
  ADD KEY `NVQuanLy` (`NVQuanLy`),
  ADD KEY `TenDaiLy` (`TenDaiLy`);

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `LoaiHH` (`TenLoaiHH`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `DaiLy` (`DaiLy`),
  ADD KEY `NguoiBan` (`NguoiBan`);

--
-- Indexes for table `loaihanghoa`
--
ALTER TABLE `loaihanghoa`
  ADD PRIMARY KEY (`id`,`MaLoaiHH`),
  ADD KEY `MaLoaiHH` (`MaLoaiHH`);

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
-- Indexes for table `quanlynhanvien`
--
ALTER TABLE `quanlynhanvien`
  ADD PRIMARY KEY (`MaNV`);

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
-- AUTO_INCREMENT for table `daily`
--
ALTER TABLE `daily`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `loaihanghoa`
--
ALTER TABLE `loaihanghoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
