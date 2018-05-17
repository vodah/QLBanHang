-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 15, 2018 at 06:56 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.2.3-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenBanner` varchar(255) NOT NULL,
  `MoTa` varchar(255) DEFAULT NULL,
  `AnhBanner` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `TenBanner`, `MoTa`, `AnhBanner`, `created_at`, `updated_at`) VALUES
(1, 'Iphone X', '', 'uploads/iphonex-spgry-pureangles_gb-en-screen_1.jpeg', NULL, NULL),
(3, 'S9', 'sản phẩm hot', 'uploads/S9_1520150824_145898_94e48e200fcfb377f5ed9d8516d13c94.jpg', NULL, NULL),
(4, 'Samsung Galaxy Note 8', NULL, 'uploads/Note 8_1520155319_3074710_c1eae962d75ad77909bbcb37c10a809f.jpg', NULL, '2018-03-04 03:07:08');

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
  `TenLoaiHH` varchar(255) NOT NULL,
  `SoLuong` int(255) NOT NULL,
  `DonGia` varchar(255) NOT NULL,
  `MoTa` longtext,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `AnhSP` varchar(255) DEFAULT NULL,
  `NoiBat` int(11) DEFAULT NULL,
  `NhaSanXuat` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`id`, `MaHH`, `TenHH`, `TenLoaiHH`, `SoLuong`, `DonGia`, `MoTa`, `updated_at`, `created_at`, `AnhSP`, `NoiBat`, `NhaSanXuat`, `slug`) VALUES
(6, '381974662', 'Asus X541UA i3 6100U/4GB/1TB/15.6\"', 'LapTop', 300, '2000000', '<h2>Đặc điểm nổi bật của Asus X541UA i3 6100U/4GB/1TB/15.6&quot;/Win10/(XX272T)/Đen</h2>\r\n\r\n<p><img src=\"https://cdn4.tgdd.vn/Products/Images/44/134806/Slider/-asus-x541ua-i3-6100u-xx272t-tk.jpg\" /></p>\r\n\r\n<p>Bộ sản phẩm chuẩn: S&aacute;ch hướng dẫn, Th&ugrave;ng m&aacute;y, Adapter sạc</p>\r\n\r\n<h2><strong>Asus X541UA i3 6100U thuộc ph&acirc;n kh&uacute;c laptop&nbsp;<a href=\"https://www.thegioididong.com/laptop?g=hoc-tap-van-phong\" target=\"_blank\" title=\"học tập - văn phòng\">học tập - văn ph&ograve;ng</a>, được trang bị cấu h&igrave;nh vừa đủ để phục vụ nhu cầu sử dụng hằng ng&agrave;y. Ngo&agrave;i ra, m&aacute;y c&ograve;n c&agrave;i sẵn hệ điều h&agrave;nh Windows 10 bản quyền gi&uacute;p sử dụng ổn định, tiện lợi hơn.</strong></h2>\r\n\r\n<h3><strong>Thiết kế m&aacute;y đơn giản phổ th&ocirc;ng</strong></h3>\r\n\r\n<p><strong>Asus X541UA</strong>&nbsp;c&oacute; thiết kế chất liệu vỏ nhựa v&agrave; c&oacute; trọng lượng tr&ograve;n&nbsp;<strong>2 kg</strong>&nbsp;c&ugrave;ng độ d&agrave;y&nbsp;<strong>27.6 mm</strong>. V&igrave; nằm trong ph&acirc;n kh&uacute;c phổ th&ocirc;ng n&ecirc;n c&oacute; thiết kế b&igrave;nh thường, kh&ocirc;ng c&oacute; đột ph&aacute; nổi bật như c&aacute;c sản phẩm laptop cao cấp.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/134806/asus-x541ua-i3-6100u-xx272t-1.jpg\" onclick=\"return false;\"><img alt=\"Thiết kế máy đơn giản phổ thông\" src=\"https://cdn3.tgdd.vn/Products/Images/44/134806/asus-x541ua-i3-6100u-xx272t-1.jpg\" title=\"Thiết kế máy đơn giản phổ thông\" /></a></p>\r\n\r\n<h3><strong>Cấu h&igrave;nh ph&ugrave; hợp với thao t&aacute;c sử dụng nhẹ nh&agrave;ng</strong></h3>\r\n\r\n<p>Cấu h&igrave;nh<strong>&nbsp;Asus X541UA</strong>&nbsp;ph&ugrave; hợp với c&aacute;c thao t&aacute;c về học tập, giải tr&iacute; nhẹ, c&ocirc;ng việc văn ph&ograve;ng cơ bản. M&aacute;y được trang bị CPU&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/intel-core-the-he-thu-6-skylake-774739#i3\" target=\"_blank\" title=\"Intel Core i3 Skylake 6100U\">Intel Core i3 Skylake 6100U</a>&nbsp;c&oacute; tốc độ&nbsp;<strong>2.30 GHz</strong>,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173\" target=\"_blank\" title=\"RAM DDR4\">RAM DDR4</a>&nbsp;<strong>4 GB</strong>&nbsp;v&agrave; ổ cứng lưu dữ liệu&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/hdd-la-gi-922791\" target=\"_blank\" title=\"HDD\">HDD</a>&nbsp;<strong>1 TB</strong>.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/134806/asus-x541ua-i3-6100u-xx272t-2.jpg\" onclick=\"return false;\"><img alt=\"Cấu hình phù hợp với thao tác sử dụng nhẹ nhàng\" src=\"https://cdn.tgdd.vn/Products/Images/44/134806/asus-x541ua-i3-6100u-xx272t-2.jpg\" title=\"Cấu hình phù hợp với thao tác sử dụng nhẹ nhàng\" /></a></p>\r\n\r\n<h3><strong>M&agrave;n h&igrave;nh lớn 15.6 inch</strong></h3>\r\n\r\n<p><strong>Laptop Asus X541UA i3 6100U</strong>&nbsp;sở hữu m&agrave;n h&igrave;nh&nbsp;<strong>15.6 inch</strong>, độ ph&acirc;n giải&nbsp;<strong>HD (1366 x 768)</strong>&nbsp;kết hợp c&ocirc;ng nghệ&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/cac-cong-nghe-hien-thi-tren-man-hinh-laptop-597377#splendvideo\" target=\"_blank\" title=\"Asus Splendid Video\">ASUS Splendid Video</a>&nbsp;v&agrave;&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/cac-cong-nghe-hien-thi-tren-man-hinh-laptop-597377#ledbacklit\" target=\"_blank\" title=\"LED Backlit\">LED Backlit</a>&nbsp;th&acirc;n thiện với m&ocirc;i trường xung quanh.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/134806/asus-x541ua-i3-6100u-xx272t-3.jpg\" onclick=\"return false;\"><img alt=\"Màn hình lớn 15.6 inch\" src=\"https://cdn2.tgdd.vn/Products/Images/44/134806/asus-x541ua-i3-6100u-xx272t-3.jpg\" title=\"Màn hình lớn 15.6 inch\" /></a></p>\r\n\r\n<h3><strong>B&agrave;n ph&iacute;m</strong>&nbsp;<strong>Asus X541UA i3 6100U&nbsp;</strong>&nbsp;<strong>như thế n&agrave;o?</strong></h3>\r\n\r\n<p>Ph&iacute;m bấm nhạy, to r&otilde; th&iacute;ch hợp với người d&ugrave;ng hay l&agrave;m việc thường xuy&ecirc;n về phần mềm nhập liệu như: Học tập thuyết tr&igrave;nh, c&ocirc;ng việc h&agrave;nh ch&iacute;nh (nhập văn bản), gi&aacute;o vi&ecirc;n&hellip;</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/134806/asus-x541ua-i3-6100u-xx272t-4.jpg\" onclick=\"return false;\"><img alt=\"Bàn phím Asus X541UA i3 6100U  như thế nào?\" src=\"https://cdn4.tgdd.vn/Products/Images/44/134806/asus-x541ua-i3-6100u-xx272t-4.jpg\" title=\"Bàn phím Asus X541UA i3 6100U  như thế nào?\" /></a></p>\r\n\r\n<h3><strong>Cổng kết nối, tr&igrave;nh chiếu</strong></h3>\r\n\r\n<p><strong>Asus X541UA</strong>&nbsp;trang bị đầy đủ cổng kết nối như&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/usb-30-la-gi-926737\" target=\"_blank\" title=\"USB 3.0\">USB 3.0</a>&nbsp;gi&uacute;p truyền tải sao ch&eacute;p dữ liệu nhanh hay cổng&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/vga-la-gi-920575\" target=\"_blank\" title=\"VGA\">VGA</a>,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/hdmi-la-gi-930605\" target=\"_blank\" title=\"HDMI\">HDMI</a>&nbsp;gi&uacute;p xuất h&igrave;nh ảnh laptop ra m&aacute;y chiếu, tivi tiện lợi trong những cuộc họp, thuyết tr&igrave;nh.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/134806/asus-x541ua-i3-6100u-xx272t-5.jpg\" onclick=\"return false;\"><img alt=\"Cổng kết nối, trình chiếu\" src=\"https://cdn1.tgdd.vn/Products/Images/44/134806/asus-x541ua-i3-6100u-xx272t-5.jpg\" title=\"Cổng kết nối, trình chiếu\" /></a></p>\r\n\r\n<p>&nbsp;</p>', '2018-03-14 05:18:47', NULL, 'uploads/1517424411_3728489_f537c8e9b50688782612023670d3871b.jpg', 0, 'Asus', 'asus-x541ua-i3-6100u4gb1tb156-5aa8b0aecc726'),
(18, '267451773', 'Usb Kingtom', 'Khác', 1000, '135000', '<p>đ&acirc;y l&agrave; m&ocirc; tả 2</p>', '2018-03-14 05:19:41', '2017-12-05 13:27:43', 'uploads/1517512160_3231349_bb8939ae31980cf9f0bee1571a992c80.jpg', 0, 'Khác', 'usb-kingtom-5aa8b0e414cf9'),
(19, '261268497', 'chuột genius', 'Khác', 30, '100000', '<p>m&ocirc; tả cho chuột genius</p>', '2018-03-14 05:19:59', '2017-12-05 14:53:03', 'uploads/1517939013_5407376_2cc2d2ddd53591131da04f8b54a6317b.jpg', 0, 'Khác', 'chuot-genius-5aa8b0f26b737'),
(21, '370741603', 'iphone X', 'Điện Thoại', 13, '30000000', '<h2>Đặc điểm nổi bật của iPhone X 64GB</h2>\r\n\r\n<p><img src=\"https://cdn4.tgdd.vn/Products/Images/42/114115/Slider/vi-vn-1-thietke.jpg\" /></p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/hoi-dap/man-hinh-retina-la-gi-905780\" target=\"_blank\">T&igrave;m hiểu th&ecirc;m</a></p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/tin-tuc/face-id-la-gi-bao-mat-3d-quet-khuon-mat-3d-tren-iphone-x-1018816\" target=\"_blank\">T&igrave;m hiểu th&ecirc;m</a></p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/tin-tuc/kinh-cuong-luc-la-gi--596319\" target=\"_blank\">T&igrave;m hiểu th&ecirc;m</a></p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/tin-tuc/tim-hieu-xoa-phong-huong-dan-xoa-phong-tren-moi-smartphone-892585\" target=\"_blank\">T&igrave;m hiểu th&ecirc;m</a></p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/hoi-dap/che-do-chong-rung-quang-hoc-ois-chup-anh-tren-smar-906416\" target=\"_blank\">T&igrave;m hiểu th&ecirc;m</a></p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/tin-tuc/xuat-hien-thong-tin-ve-chip-a11-tren-iphone-x-va-iphone-8-sap-toi-1020645\" target=\"_blank\">T&igrave;m hiểu th&ecirc;m</a></p>\r\n\r\n<p>Bộ sản phẩm chuẩn: Hộp, Sạc, Tai nghe, S&aacute;ch hướng dẫn, Jack chuyển tai nghe 3.5mm, C&aacute;p, C&acirc;y lấy sim</p>\r\n\r\n<h2>&quot;<a href=\"https://www.thegioididong.com/dtdd/iphone-x-64gb\" target=\"_blank\" title=\"Điện thoại iPhone X 64GB\" type=\"Điện thoại iPhone X 64GB\">iPhone X gi&aacute;</a>&quot; l&agrave; cụm từ được&nbsp;rất nhiều người mong chờ muốn biết v&agrave; t&igrave;m kiếm tr&ecirc;n Google bởi đ&acirc;y l&agrave; chiếc điện thoại m&agrave; Apple kỉ niệm 10 năm iPhone đầu ti&ecirc;n được b&aacute;n ra.</h2>\r\n\r\n<h3><strong>Thiết kế đột ph&aacute;</strong></h3>\r\n\r\n<p>Như c&aacute;c bạn cũng đ&atilde; biết th&igrave; đ&atilde; 4 năm kể từ iPhone 6 v&agrave; iPhone 6 Plus Apple vẫn chưa c&oacute; thay đổi n&agrave;o đ&aacute;ng kể trong thiết kế của m&igrave;nh.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/114115/iphone-x-64gb1.jpg\" onclick=\"return false;\"><img alt=\"Thiết kế đột phá\" src=\"https://cdn2.tgdd.vn/Products/Images/42/114115/iphone-x-64gb1.jpg\" title=\"Thiết kế đột phá\" /></a></p>\r\n\r\n<p>Nhưng với iPhone X th&igrave; đ&oacute; lại l&agrave; 1 c&acirc;u chuyện ho&agrave;n to&agrave;n kh&aacute;c, m&aacute;y chuyển qua sử dụng m&agrave;n h&igrave;nh tỉ lệ 19,5:9 mới mẻ với phần diện t&iacute;ch hiển thị mặt trước cực lớn.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/114115/iphone-x-64gb2.jpg\" onclick=\"return false;\"><img alt=\"Thiết kế đột phá\" src=\"https://cdn4.tgdd.vn/Products/Images/42/114115/iphone-x-64gb2.jpg\" title=\"Thiết kế đột phá\" /></a></p>\r\n\r\n<p>Mặt lưng k&iacute;nh hỗ trợ sạc nhanh kh&ocirc;ng d&acirc;y cũng như phần camera k&eacute;p đặt dọc cũng l&agrave; những thứ đầu ti&ecirc;n xuất hiện tr&ecirc;n 1 chiếc iPhone.</p>\r\n\r\n<h3><strong>M&agrave;n h&igrave;nh với tai thỏ</strong></h3>\r\n\r\n<p>Điểm khiến iPhone X bị ch&ecirc; nhiều nhất đ&oacute; ch&iacute;nh l&agrave; phần &quot;tai thỏ&quot; ph&iacute;a tr&ecirc;n m&agrave;n h&igrave;nh, Apple đ&atilde; chấp nhận điều n&agrave;y để đặt cụm camera&nbsp;TrueDept mới của h&atilde;ng.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/114115/iphone-x-64gb15.jpg\" onclick=\"return false;\"><img alt=\"Màn hình với tai thỏ\" src=\"https://cdn1.tgdd.vn/Products/Images/42/114115/iphone-x-64gb15.jpg\" title=\"Màn hình với tai thỏ\" /></a></p>\r\n\r\n<p>M&agrave;n h&igrave;nh k&iacute;ch thước 5.8 inch độ ph&acirc;n giải&nbsp;1125 x 2436 pixels đem đến khả năng hiển thị xuất sắc.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/114115/iphone-x-64gb20.jpg\" onclick=\"return false;\"><img alt=\"Màn hình với tai thỏ\" src=\"https://cdn3.tgdd.vn/Products/Images/42/114115/iphone-x-64gb20.jpg\" title=\"Màn hình với tai thỏ\" /></a></p>\r\n\r\n<p>iPhone X sử dụng tấm nền&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/man-hinh-oled-la-gi-905762\" target=\"_blank\" title=\"Tìm hiểu màn hình OLED\">OLED</a>&nbsp;(được tinh chỉnh bởi Apple) thay v&igrave; LCD như những chiếc iPhone trước đ&acirc;y v&agrave; điều n&agrave;y đem lại cho m&aacute;y 1 m&agrave;u đen thể hiện rất s&acirc;u cũng khả năng t&aacute;i tạo m&agrave;u sắc kh&ocirc;ng k&eacute;m phần ch&iacute;nh x&aacute;c.</p>\r\n\r\n<h3><strong>Face ID tạo n&ecirc;n đột ph&aacute;</strong></h3>\r\n\r\n<p>Touch ID tr&ecirc;n iPhone X đ&atilde; bị loại bỏ, thay v&agrave;o đ&oacute; l&agrave; bạn sẽ chuyển qua sử dụng Face ID, một phương thức bảo mật sinh trắc học mới của Apple.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/114115/iphone-x-64gb7.jpg\" onclick=\"return false;\"><img alt=\"Face ID tạo nên đột phá\" src=\"https://cdn.tgdd.vn/Products/Images/42/114115/iphone-x-64gb7.jpg\" title=\"Face ID tạo nên đột phá\" /></a></p>\r\n\r\n<p>Với sự trợ gi&uacute;p của cụm&nbsp;camera&nbsp;TrueDept th&igrave; iPhone X c&oacute; khả năng nhận diện khu&ocirc;n mặt 3D của người d&ugrave;ng từ đ&oacute; mở kh&oacute;a chiếc iPhone một c&aacute;ch nhanh ch&oacute;ng.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/114115/iphone-x-64gb11.jpg\" onclick=\"return false;\"><img alt=\"Face ID tạo nên đột phá\" src=\"https://cdn2.tgdd.vn/Products/Images/42/114115/iphone-x-64gb11.jpg\" title=\"Face ID tạo nên đột phá\" /></a></p>\r\n\r\n<p>Tuy sẽ hơi hụt hẫng khi Touch ID đ&atilde; qu&aacute; quen thuộc tr&ecirc;n những chiếc iPhone như tốc độ cũng như trải nghiệm &quot;kh&oacute;a như kh&ocirc;ng kh&oacute;a&quot; của Face ID ho&agrave;n to&agrave;n c&oacute; thể khiến bạn y&ecirc;n t&acirc;m sử dụng.</p>\r\n\r\n<h3><strong>Thao t&aacute;c vuốt v&agrave; vuốt</strong></h3>\r\n\r\n<p>Kh&ocirc;ng c&ograve;n ph&iacute;m Home cứng n&ecirc;n c&aacute;c thao t&aacute;c tr&ecirc;n iPhone X cũng ho&agrave;n to&agrave;n kh&aacute;c so với những đ&agrave;n anh đi trước.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/114115/iphone-x-64gb3.jpg\" onclick=\"return false;\"><img alt=\"Thao tác vuốt và vuốt\" src=\"https://cdn4.tgdd.vn/Products/Images/42/114115/iphone-x-64gb3.jpg\" title=\"Thao tác vuốt và vuốt\" /></a></p>\r\n\r\n<p>Giờ đ&acirc;y chỉ với thao t&aacute;c vuốt v&agrave; vuốt từ cạnh dưới l&agrave; bạn đ&atilde; c&oacute; thể truy cập v&agrave;o đa nhiệm, trở về m&agrave;n h&igrave;nh Home một c&aacute;ch nhanh ch&oacute;ng.</p>\r\n\r\n<h3><strong>Camera cải tiến</strong></h3>\r\n\r\n<p>iPhone X vẫn sở hữu bộ đ&ocirc;i camera với độ ph&acirc;n giải 12 MP nhưng camera tele thứ 2 với khẩu độ được n&acirc;ng l&ecirc;n mức f/2.4 so với f/2.8 của iPhone 7 Plus.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/114115/iphone-x-64gb19.jpg\" onclick=\"return false;\"><img alt=\"Camera cải tiến\" src=\"https://cdn1.tgdd.vn/Products/Images/42/114115/iphone-x-64gb19.jpg\" title=\"Camera cải tiến\" /></a></p>\r\n\r\n<p>Ngo&agrave;i ra th&igrave; cả 2 camera tr&ecirc;n iPhone X đều sở hữu cho m&igrave;nh khả năng chống rung quang học gi&uacute;p bạn dễ d&agrave;ng bắt trọn mọi khoảnh khắc trong cuộc sống.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/114115/iphone-x-64gb9.jpg\" onclick=\"return false;\"><img alt=\"Camera cải tiến\" src=\"https://cdn3.tgdd.vn/Products/Images/42/114115/iphone-x-64gb9.jpg\" title=\"Camera cải tiến\" /></a></p>\r\n\r\n<p>Camera trước độ ph&acirc;n giải 7 MP với khả năng selfie x&oacute;a ph&ocirc;ng đ&aacute;p ứng tốt mọi nhu cầu tự sướng của giới trẻ hiện nay.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/114115/iphone-x-64gb8.jpg\" onclick=\"return false;\"><img alt=\"Camera cải tiến\" src=\"https://cdn.tgdd.vn/Products/Images/42/114115/iphone-x-64gb8.jpg\" title=\"Camera cải tiến\" /></a></p>\r\n\r\n<p>Bộ đ&ocirc;i camera tr&ecirc;n iPhone X được đ&aacute;nh gi&aacute; rất cao về chất lượng ảnh chụp v&agrave; l&agrave; một trong những chiếc camera phone chụp ảnh đẹp nhất trong năm 2017.</p>\r\n\r\n<h3><strong>Hiệu năng mạnh mẽ</strong></h3>\r\n\r\n<p>Hiệu năng của những chiếc iPhone chưa bao giờ l&agrave; vấn đề v&agrave; với iPhone X th&igrave; mọi thứ vẫn rất ấn tượng.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/114115/iphone-x-64gb10.jpg\" onclick=\"return false;\"><img alt=\"Hiệu năng mạnh mẽ\" src=\"https://cdn2.tgdd.vn/Products/Images/42/114115/iphone-x-64gb10.jpg\" title=\"Hiệu năng mạnh mẽ\" /></a></p>\r\n\r\n<p>Con chip&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/chi-tiet-a11-bionic-chip-co-nhieu-thanh-phan-apple-tu-trong-nhat-tu-truoc-den-nay-1021653\" target=\"_blank\" title=\"Apple A11 Bionic 6 nhân\">Apple A11 Bionic 6 nh&acirc;n</a>&nbsp;kết hợp với 3 GB RAM th&igrave; iPhone X tự tin l&agrave; chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\" title=\"Điện thoại di động\">smartphone</a>&nbsp;mạnh mẽ nhất m&agrave; Apple từng sản xuất.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/114115/iphone-x-64gb13.jpg\" onclick=\"return false;\"><img alt=\"Hiệu năng mạnh mẽ\" src=\"https://cdn4.tgdd.vn/Products/Images/42/114115/iphone-x-64gb13.jpg\" title=\"Hiệu năng mạnh mẽ\" /></a></p>\r\n\r\n<p>Ngo&agrave;i ra với iPhone X th&igrave; Apple cũng nhấn mạnh với trải nghiệm thực tế ảo tăng cường gi&uacute;p bạn c&oacute; những ph&uacute;t gi&acirc;y thư gi&atilde;n th&uacute; vị.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/114115/iphone-x-64gb17.jpg\" onclick=\"return false;\"><img alt=\"Hiệu năng mạnh mẽ\" src=\"https://cdn1.tgdd.vn/Products/Images/42/114115/iphone-x-64gb17.jpg\" title=\"Hiệu năng mạnh mẽ\" /></a></p>\r\n\r\n<p>Vi&ecirc;n pin tr&ecirc;n iPhone X c&oacute; dung lượng&nbsp;2716 mAh (lớn hơn cả tr&ecirc;n iPhone 8 Plus) cho bạn sử dụng kh&aacute; ổn trong khoảng một ng&agrave;y li&ecirc;n tục.</p>', '2018-03-14 05:20:14', '2017-12-11 11:21:29', 'uploads/1517424705_77864_368e9d73465c1a75d8a587867555d9e6.jpg', 1, 'Apple', 'iphone-x-5aa8b104a24b8'),
(22, '174503678', 'dell xps 13', 'LapTop', 100, '18000000', '<p>f ầ asfqwa sdnu iashd9ashf 9phas9fh as9fh9aus huoash</p>', '2018-03-14 05:20:51', '2018-01-24 18:22:22', 'uploads/W2ebIvx8OC2SX6eIav9vaRV4lwvGAkesCNDtSYVT.jpeg', 0, 'Dell', 'dell-xps-13-5aa8b120c823a'),
(23, '217058530', 'dell xps 15', 'LapTop', 100, '27000000', '<p>fasfsaf wafwaf ưa hwh fueaphf eqhg8qhg&nbsp;fasfsaf wafwaf ưa hwh fueaphf eqhg8qhg&nbsp;fasfsaf wafwaf ưa hwh fueaphf eqhg8qhg&nbsp;fasfsaf wafwaf ưa hwh fueaphf eqhg8qhg&nbsp;fasfsaf wafwaf ưa hwh fueaphf eqhg8qhg&nbsp;</p>', '2018-03-14 05:21:06', '2018-01-29 19:26:47', 'uploads/DlQuIDheFNC8cyP35IEVpnvfkNcn3KxDVKRMZmMo.jpeg', 0, 'Dell', 'dell-xps-15-5aa8b13959c82'),
(24, '261103379', 'Xperia XZ2', 'Điện Thoại', 50, '18000000', '<h2>Xperia XZ2 l&agrave; chiếc flagship mới được&nbsp;<a href=\"https://www.thegioididong.com/dtdd-sony\" target=\"_blank\" title=\"Điện thoại Sony\">Sony</a>&nbsp;giới thiệu tại&nbsp;MWC 2018 với sự thay đổi lớn về thiết kế so với những người tiền nhiệm.</h2>\r\n\r\n<h3><strong>Lột x&aacute;c về thiết kế</strong></h3>\r\n\r\n<p>Với Xperia XZ2, ng&ocirc;n ngữ thiết kế &quot;Omni Balance&quot; trứ danh một thời của Sony đ&atilde; đi v&agrave;o dĩ v&atilde;ng để nhường chỗ cho một thiết kế mới mẻ v&agrave; đột ph&aacute; hơn hẳn.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/146014/sony-xperia-xz23.jpg\" onclick=\"return false;\"><img alt=\"Lột xác về thiết kế\" src=\"https://cdn4.tgdd.vn/Products/Images/42/146014/sony-xperia-xz23.jpg\" title=\"Lột xác về thiết kế\" /></a></p>\r\n\r\n<p>Sự thay đổi lớn nhất của Xperia XZ2 so với&nbsp;<a href=\"https://www.thegioididong.com/dtdd/sony-xperia-xz1\" target=\"_blank\" title=\"Sony Xperia XZ1\" type=\"Sony Xperia XZ1\">Xperia XZ1</a>&nbsp;đ&oacute; ch&iacute;nh l&agrave; mặt lưng đ&atilde; được l&agrave;m cong để gi&uacute;p tay của ch&uacute;ng ta &ocirc;m gọn được chiếc m&aacute;y dễ d&agrave;ng hơn.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/146014/sony-xperia-xz24.jpg\" onclick=\"return false;\"><img alt=\"Lột xác về thiết kế\" src=\"https://cdn1.tgdd.vn/Products/Images/42/146014/sony-xperia-xz24.jpg\" title=\"Lột xác về thiết kế\" /></a></p>\r\n\r\n<p>Chất liệu k&iacute;nh&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/gorilla-glass-5-ra-mat-smartphone-roi-tu-do-cao-1-6-met-vo-tu-860409\" target=\"_blank\" title=\"Gorilla Glass 5\">Gorilla Glass 5</a>&nbsp;xuất hiện ở cả 2 mặt của chiếc Xperia XZ2 c&ugrave;ng cảm biến v&acirc;n tay được xếp dọc ngay ch&iacute;nh giữa phần mặt lưng tạo n&ecirc;n sự c&acirc;n đối về mặt thẩm mỹ.</p>\r\n\r\n<p>Mặt k&iacute;nh của Xperia XZ2 được l&agrave;m cong 2.5D ở cả 4 cạnh gi&uacute;p phần th&acirc;n m&aacute;y liền lạc hơn hẳn.</p>\r\n\r\n<h3><strong>M&agrave;n h&igrave;nh sắc n&eacute;t</strong></h3>\r\n\r\n<p>Xperia XZ2 cũng l&agrave; chiếc smartphone đầu ti&ecirc;n của Sony sở hữu m&agrave;n h&igrave;nh tr&agrave;n viền 18:9 với k&iacute;ch thước 5.7 inch.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/146014/sony-xperia-xz26.jpg\" onclick=\"return false;\"><img alt=\"Màn hình sắc nét\" src=\"https://cdn3.tgdd.vn/Products/Images/42/146014/sony-xperia-xz26.jpg\" title=\"Màn hình sắc nét\" /></a></p>\r\n\r\n<p>Kh&aacute; đ&aacute;ng tiếc l&agrave;&nbsp;m&agrave;n h&igrave;nh của Xperia XZ2 chỉ dừng lại ở mức&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/do-phan-giai-man-hinh-qhd-hd-fullhd-2k-4k-la-gi--592178#2k\" target=\"_blank\" title=\"Độ phân giải Full HD+\" type=\"Độ phân giải Full HD+\">Full HD+</a>&nbsp;nhưng lại sở hữu c&ocirc;ng nghệ HDR nổi tiếng tới từ Sony c&ugrave;ng khả năng chuyển đổi những nội dung từ SDR sang HDR ti&ecirc;n tiến.</p>\r\n\r\n<h3><strong>Hiệu năng h&agrave;ng đầu</strong></h3>\r\n\r\n<p>Xperia XZ2 sẽ sử dụng vi xử l&yacute;&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/chip-snapdragon-845-manh-hon-25-tap-trung-ai-bao-mat-cao-1048166\" target=\"_blank\" title=\"Snapdragon 845\">Snapdragon 845</a>&nbsp;c&ugrave;ng 4 GB RAM v&agrave; 64 GB bộ nhớ trong.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/146014/sony-xperia-xz25.jpg\" onclick=\"return false;\"><img alt=\"Hiệu năng hàng đầu\" src=\"https://cdn.tgdd.vn/Products/Images/42/146014/sony-xperia-xz25.jpg\" title=\"Hiệu năng hàng đầu\" /></a></p>\r\n\r\n<p>Với vi xử l&iacute; n&agrave;y th&igrave; kh&ocirc;ng c&ograve;n g&igrave; nghi ngờ nữa, Xperia XZ2 sẽ l&agrave; một trong những chiếc smartphone mạnh nhất ở thời điểm hiện tại.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/146014/sony-xperia-xz27.jpg\" onclick=\"return false;\"><img alt=\"Hiệu năng hàng đầu\" src=\"https://cdn2.tgdd.vn/Products/Images/42/146014/sony-xperia-xz27.jpg\" title=\"Hiệu năng hàng đầu\" /></a></p>\r\n\r\n<p>M&aacute;y sẽ chạy sẵn&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/android-8-la-gi-vi-sao-co-ten-goi-khac-la-android-o--966604\" target=\"_blank\" title=\"Android 8.0\">Android 8.0</a>&nbsp;c&ugrave;ng giao diện Sony nhẹ nh&agrave;ng hứa hẹn sẽ đem lại một tốc độ phản hồi ấn tượng.</p>\r\n\r\n<h3><strong>Vẫn chỉ l&agrave; camera đơn</strong></h3>\r\n\r\n<p>Xperia XZ2 được trang bị camera Motion Eye độ phẩn giải 19 MP v&agrave; chưa c&oacute; camera k&eacute;p.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/146014/sony-xperia-xz22.jpg\" onclick=\"return false;\"><img alt=\"Vẫn chỉ là camera đơn\" src=\"https://cdn4.tgdd.vn/Products/Images/42/146014/sony-xperia-xz22.jpg\" title=\"Vẫn chỉ là camera đơn\" /></a></p>\r\n\r\n<p>Một cải tiến đ&aacute;ng gi&aacute; tr&ecirc;n XZ2 l&agrave; m&aacute;y c&oacute; thể quay được c&aacute;c thước phim si&ecirc;u chậm, l&ecirc;n tới 960 khung h&igrave;nh/gi&acirc;y ở độ ph&acirc;n giải Full HD.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/146014/sony-xperia-xz21.jpg\" onclick=\"return false;\"><img alt=\"Vẫn chỉ là camera đơn\" src=\"https://cdn1.tgdd.vn/Products/Images/42/146014/sony-xperia-xz21.jpg\" title=\"Vẫn chỉ là camera đơn\" /></a></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute; camera selfie của m&aacute;y c&oacute; độ ph&acirc;n giải 5 MP, nghe qua kh&ocirc;ng mấy ấn tượng nhưng đổi lại, bạn c&oacute; thể sử dụng ứng dụng 3D Creator để tạo ra khu&ocirc;n mặt 3D của m&igrave;nh bằng cụm camera selfie n&agrave;y.</p>\r\n\r\n<h3><strong>&Acirc;m thanh h&agrave;ng đầu</strong></h3>\r\n\r\n<p>Xperia XZ2 lần n&agrave;y đ&atilde; được Sony bỏ đi cổng cắm tai nghe 3.5 mm v&agrave; theo Sony th&igrave; điều n&agrave;y gi&uacute;p h&atilde;ng c&oacute; thể đem lại chất lượng &acirc;m thanh tốt hơn khi nghe qua tai nghe.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/146014/sony-xperia-xz28.jpg\" onclick=\"return false;\"><img alt=\"Âm thanh hàng đầu\" src=\"https://cdn3.tgdd.vn/Products/Images/42/146014/sony-xperia-xz28.jpg\" title=\"Âm thanh hàng đầu\" /></a></p>\r\n\r\n<p>Ngo&agrave;i ra loa ngo&agrave;i của m&aacute;y cũng rất ấn tượng với&nbsp;c&ocirc;ng nghệ S-Force Front Surround System đến từ Sony, qua đ&oacute; gi&uacute;p Xperia XZ2 sẽ c&oacute; &acirc;m lượng lớn hơn 20% so với&nbsp;<a href=\"https://www.thegioididong.com/dtdd/sony-xperia-xz1\" target=\"_blank\" title=\"Xperia XZ1\">Xperia XZ1</a>.</p>', '2018-03-14 05:21:20', '2018-01-30 08:45:14', 'uploads/1520337184_2232509_482ce314753853d5c881aa5cf9a123b6.jpeg', 1, 'Sony', 'xperia-xz2-5aa8b1496c430'),
(25, '870999836', 'iphone 8 plus', 'Điện Thoại', 100, '25000000', '<p>&aacute; iaoshfnas hfa9s</p>', '2018-03-14 05:21:38', '2018-01-30 17:36:28', 'uploads/1517425388_8457621_5c5812be40d2a72e4abb1fae2a7ef87f.jpeg', 1, 'Apple', 'iphone-8-plus-5aa8b1574862d'),
(27, '334008535', 'bfda', 'Điện Thoại', 12, '100000', '<p>dsvdasVBVdWA</p>', '2018-03-14 05:21:57', '2018-01-30 18:01:20', 'uploads/1517425157_9289850_e1e83affa4b11e375c0d4841c492f20a.jpg', 0, 'Apple', 'bfda-5aa8b16d6acff'),
(29, '994936688', 'Galaxy S9 Plus', 'Điện Thoại', 20, '23000000', '<p><img alt=\"\" src=\"/ckfinder/userfiles/images/sad.jpg\" style=\"height:720px; width:1280px\" /></p>\r\n\r\n<p>đ&acirc;y l&agrave; m&ocirc; tả chi tiết galaxy s9</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"/ckfinder/userfiles/images/180225113702-samsung-galaxy-s9-s9-780x439.jpg\" style=\"height:439px; width:780px\" /></p>', '2018-03-14 05:22:16', '2018-03-01 17:04:17', 'uploads/Galaxy S9_1520277542_706503_a93422105638f01302f1c9069cabf889.jpg', 1, 'SamSung', 'galaxy-s9-plus-5aa8b182ee559'),
(30, '408637161', 'Ipad air', 'Máy Tính Bảng', 100, '25000000', '<h2>Tại sự kiện ri&ecirc;ng của m&igrave;nh, Apple đ&atilde; ra mắt chiếc iPad thế hệ thứ 5. Điều đặc biệt l&agrave; n&oacute; sẽ c&oacute; t&ecirc;n mới l&agrave; iPad Air, một c&aacute;i t&ecirc;n rất lạ so với truyền thống đặt t&ecirc;n của Apple.</h2>\r\n\r\n<p><img alt=\"iPad Air thực sự là một “siêu mẫu” trong thế giới tablet\" src=\"http://cdn.tgdd.vn/Files/2013/10/23/522556/ImageAttach/apple-ipad-air-1-201310232554.jpg\" /></p>\r\n\r\n<p>iPad Air thực sự l&agrave; một &ldquo;si&ecirc;u mẫu&rdquo; trong thế giới tablet</p>\r\n\r\n<p>Trong khoảng v&agrave;i tuần trở lại đ&acirc;y, đ&atilde; li&ecirc;n tục c&oacute; những th&ocirc;ng tin r&ograve; rỉ về chiếc&nbsp;<a href=\"http://shopdunk.com/san-pham/10-ipad/65-ipad-air.html\">iPad Air</a>&nbsp;(trước đ&acirc;y gọi l&agrave; iPad 5). V&igrave; vậy, kh&ocirc;ng qu&aacute; bất ngờ về mặt thiết kế khi iPad Air tr&ocirc;ng như một chiếc&nbsp;<a href=\"http://shopdunk.com/san-pham/10-ipad/16-ipad-mini.html\">iPad Mini</a>&nbsp;ph&oacute;ng lớn. Ngoại trừ chất liệu nh&ocirc;m khối th&igrave; tất cả c&aacute;c g&oacute;c cạnh đều được thiết kế lại giống hệt người em iPad Mini.</p>\r\n\r\n<p>Apple cho biết,&nbsp;iPad Air mỏng hơn 20% v&agrave; nhẹ hơn 28%&nbsp;so với iPad 4. Cụ thể, m&aacute;y mỏng chỉ 7.5 mm v&agrave; nặng 453 g. Ngo&agrave;i ra, viền m&agrave;n h&igrave;nh cũng được l&agrave;m mỏng hơn đến 43%. Với c&aacute;c số đo như vậy, c&oacute; thể khẳng định&nbsp;iPad Air l&agrave; chiếc tablet thuộc ph&acirc;n kh&uacute;c 10 inch&nbsp;mỏng v&agrave; nhẹ nhất thế giới ở thời điểm hiện tại.</p>\r\n\r\n<p><img alt=\"Máy mỏng chỉ 7.5 mm, một con số đáng kinh ngạc!\" src=\"http://cdn.tgdd.vn/Files/2013/10/23/522556/ImageAttach/apple-ipad-air-2-2013102325516.jpg\" /></p>\r\n\r\n<p>M&aacute;y mỏng chỉ 7.5 mm, một con số đ&aacute;ng kinh ngạc!&nbsp;</p>\r\n\r\n<p>Về mặt cấu h&igrave;nh,&nbsp;iPad Air&nbsp;sở hữu m&agrave;n h&igrave;nh 9.7 inch độ ph&acirc;n giải 2048 x 1536 px, chip A7 64-bit cho hiệu năng gấp 8 lần v&agrave; xử l&yacute; đồ họa gấp 72 lần so với iPad thế hệ thứ nhất, chip xử l&yacute; chuyển động M7, camera 5 MP cảm biến BSI. Apple cũng lần đầu ti&ecirc;n sử dụng ăng-ten Wi-Fi MIMO tr&ecirc;n iPad Air, cho ph&eacute;p tăng tốc độ kết nối internet l&ecirc;n gấp đ&ocirc;i. Đặc biệt, bộ nhận diện v&acirc;n tay Touch ID m&agrave; nhiều người mong chờ đ&atilde; kh&ocirc;ng hiện diện tr&ecirc;n iPad Air.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Chắc chắn, iPad Air sẽ&nbsp;chạy iOS 7&nbsp;ngay khi xuất xưởng. M&aacute;y được b&aacute;n ra từ ng&agrave;y 1/11 với 2 m&agrave;u đen-bạc v&agrave; trắng-bạc. Gi&aacute; b&aacute;n sẽ trải đều từ 499$ cho phi&ecirc;n bản thấp nhất v&agrave; l&ecirc;n đến 929$ cho phi&ecirc;n bản cao cấp nhất. Apple cho hay, họ sẽ dừng b&aacute;n tất cả c&aacute;c thế hệ iPad cũ, ngoại trừ iPad 2. Điều n&agrave;y thật sự kh&oacute; hiểu bởi th&ocirc;ng thường Apple sẽ giữ lại thế hệ sản phẩm ngay trước đ&oacute;.</p>\r\n\r\n<p>Chi&ecirc;m ngưỡng loạt ảnh cận cảnh từng đường n&eacute;t của si&ecirc;u phẩm tablet n&agrave;y.&nbsp;</p>\r\n\r\n<p><img alt=\"Apple iPad Air\" src=\"http://cdn.tgdd.vn/Files/2013/10/23/522556/ImageAttach/apple-ipad-air-4-2013102325552.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Apple iPad Air\" src=\"http://cdn.tgdd.vn/Files/2013/10/23/522556/ImageAttach/apple-ipad-air-5-2013102325558.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Apple iPad Air\" src=\"http://cdn.tgdd.vn/Files/2013/10/23/522556/ImageAttach/apple-ipad-air-7-201310232565.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Apple iPad Air\" src=\"http://cdn.tgdd.vn/Files/2013/10/23/522556/ImageAttach/apple-ipad-air-8-2013102325622.jpg\" /></p>', '2018-03-14 05:23:03', '2018-03-09 07:02:32', 'uploads/1520578952_1247462_09c321ca0bdfce752e7043753b9ab8f5.png', 1, 'Apple', 'ipad-air-5aa8b1ab664f1'),
(31, '381182449', 'Galaxy Note 8', 'Điện Thoại', 20, '19000000', '<h3>Đ&aacute;nh gi&aacute; chi tiết Samsung Galaxy Note 8 Orchid Grey</h3>\r\n\r\n<p><strong>Ngoại h&igrave;nh của chiếc&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai/samsung-galaxy-note-8-orchid-grey\" target=\"_blank\">Samsung&nbsp;Galaxy Note 8 Orchid Grey</a>&nbsp;kh&ocirc;ng c&oacute; g&igrave; kh&aacute;c biệt so với những chiếc Note 8 kh&aacute;c. M&aacute;y vẫn giữ thiết kế khung viền kim loại chắc chắn c&ugrave;ng 2 mặt k&iacute;nh cường lực trước sau &quot;gợi cảm&quot;. C&aacute;c g&oacute;c cạnh của m&aacute;y được bo cong mềm mại đem lại cảm gi&aacute;c thoải m&aacute;i khi sử dụng.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>M&agrave;n h&igrave;nh v&ocirc; cực.</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"samsung-galaxy-note-8-orchid-grey\" longdesc=\"https://fptshop.com.vn/dien-thoai/samsung-galaxy-note-8-orchid-grey\" src=\"https://fptshop.com.vn/Uploads/images/2015/SANPHAM/MinhtriBin/samsung-galaxy-note-8-orchid-grey1/samsung-galaxy-note-8-orchid-grey1.JPG\" title=\"samsung-galaxy-note-8-orchid-grey\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Galaxy Note 8 Orchid Grey sở hữu&nbsp;m&agrave;n h&igrave;nh l&ecirc;n tới 6.3 inch nhưng thực sự m&aacute;y khi cầm tr&ecirc;n tay rất nhỏ gọn nhờ v&agrave;o c&ocirc;ng nghệ &quot;m&agrave;n h&igrave;nh v&ocirc; cực&quot; ti&ecirc;n tiến nhất hiện nay của Samsung. M&aacute;y sử dụng tấm nền Super AMOLED cho m&agrave;u sắc rực rỡ, độ s&aacute;ng cao khi hiển thị ngo&agrave;i trời.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Camera k&eacute;p vượt trội.</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"samsung-galaxy-note-8-orchid-grey\" longdesc=\"https://fptshop.com.vn/dien-thoai/samsung-galaxy-note-8-orchid-grey\" src=\"https://fptshop.com.vn/Uploads/images/2015/SANPHAM/MinhtriBin/samsung-galaxy-note-8-orchid-grey1/samsung-galaxy-note-8-orchid-grey2.JPG\" title=\"samsung-galaxy-note-8-orchid-grey\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Samsung Galaxy Note 8 Orchid Grey l&agrave; chiếc smartphone Samsung đầu ti&ecirc;n sở hữu camera k&eacute;p v&agrave; chất lượng từ bộ đ&ocirc;i camera n&agrave;y mang lại l&agrave; rất ấn tượng. Bộ đ&ocirc;i camera ch&iacute;nh c&oacute; c&ugrave;ng độ ph&acirc;n giải 12 MP với c&ocirc;ng nghệ&nbsp;chống rung quang học OIS cho cả 2 camera v&agrave; khả năng&nbsp;zoom quang học 2x. Điểm nổi bật nhất tr&ecirc;n&nbsp;Note 8 Orchid Grey ch&iacute;nh l&agrave; khả năng chụp ảnh x&oacute;a ph&ocirc;ng rất tốt, ph&ocirc;ng nền v&agrave; chủ thể được t&aacute;ch bạch kh&aacute; tự nhi&ecirc;n, kh&ocirc;ng qu&aacute; ảo. Camera trước cũng c&oacute; độ ph&acirc;n giải lớn 8 MP với t&iacute;nh năng l&agrave;m đẹp được trang bị sẵn đảm bảo cho bạn c&oacute; thể chia sẻ ngay l&ecirc;n mạng x&atilde; hội.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Hiệu năng h&agrave;ng đầu.</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"samsung-galaxy-note-8-orchid-grey\" longdesc=\"https://fptshop.com.vn/dien-thoai/samsung-galaxy-note-8-orchid-grey\" src=\"https://fptshop.com.vn/Uploads/images/2015/SANPHAM/MinhtriBin/samsung-galaxy-note-8-orchid-grey1/samsung-galaxy-note-8-orchid-grey3.JPG\" title=\"samsung-galaxy-note-8-orchid-grey\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Galaxy Note 8 Orchid Grey với cấu h&igrave;nh khủng long Exynos 8895 8 nh&acirc;n v&agrave; RAM 6 GB, Note 8 hỗ trợ chạy đa nhiệm rất tốt, đ&aacute;p ứng hầu hết c&aacute;c nhu cầu chơi game 3D nặng. Được thiết kế tr&ecirc;n c&ocirc;ng nghệ chip 10 nm n&ecirc;n Note 8 Orchid Grey tiết kiệm năng lượng hơn 40% so với thế hệ &quot;tai tiếng&quot; Galaxy Note 7 nhưng hiệu năng vẫn cao hơn 30%. V&agrave; với vi&ecirc;n pin&nbsp;c&oacute; dung lượng &quot;trung b&igrave;nh&quot; 3300 mAh tr&ecirc;n sản phẩm n&agrave;y tuy kh&ocirc;ng ấn tượng nhưng đủ d&ugrave;ng kh&aacute; thoải m&aacute;i trong cả ng&agrave;y d&agrave;i.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>B&uacute;t S-Pen thần th&aacute;nh.</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"samsung-galaxy-note-8-orchid-grey\" longdesc=\"https://fptshop.com.vn/dien-thoai/samsung-galaxy-note-8-orchid-grey\" src=\"https://fptshop.com.vn/Uploads/images/2015/SANPHAM/MinhtriBin/samsung-galaxy-note-8-orchid-grey1/samsung-galaxy-note-8-orchid-grey4.JPG\" title=\"samsung-galaxy-note-8-orchid-grey\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>B&uacute;t S-Pen thần th&aacute;nh tr&ecirc;n điện thoại Galaxy Note 8 Orchid Gre<strong>y</strong>&nbsp;được thiết kế với đầu cảm ứng 0.7 mm c&ugrave;ng 4.096 độ nhạy &aacute;p lực kh&aacute;c nhau đem lại độ ch&iacute;nh x&aacute;c cao hơn. Ngo&agrave;i ra bạn cũng c&oacute; thể tạo ảnh GIF động v&agrave; gửi ch&uacute;ng cho bạn b&egrave; ngay tr&ecirc;n m&agrave;n h&igrave;nh bằng b&uacute;t S-Pen thần th&aacute;nh.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Bảo mật ti&ecirc;n tiến.</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"samsung-galaxy-note-8-orchid-grey\" longdesc=\"https://fptshop.com.vn/dien-thoai/samsung-galaxy-note-8-orchid-grey\" src=\"https://fptshop.com.vn/Uploads/images/2015/SANPHAM/MinhtriBin/samsung-galaxy-note-8-orchid-grey1/samsung-galaxy-note-8-orchid-grey5.JPG\" title=\"samsung-galaxy-note-8-orchid-grey\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Samsung Note 8 Orchid Grey<strong>&nbsp;</strong>hỗ trợ rất nhiều c&ocirc;ng nghệ bảo mật ti&ecirc;n tiến hiện nay cho người d&ugrave;ng lựa chọn. M&aacute;y c&oacute; cảm biến v&acirc;n tay đặt ở mặt lưng, cảm biến mống mắt với độ ch&iacute;nh x&aacute;c cao hay khả năng mở kh&oacute;a bằng khu&ocirc;n mặt với tốc độ ấn tượng.</p>', '2018-03-14 05:23:28', '2018-03-09 18:54:07', 'uploads/1520621647_5772570_a4256a2d60af8444503046b3e75f8d68.jpg', 1, 'SamSung', 'galaxy-note-8-5aa8b1cc119cf'),
(32, '193206621', 'Macbook pro 2017', 'LapTop', 10, '30000000', '<h5>Thiết kế mỏng hơn v&agrave; nhẹ hơn</h5>\r\n\r\n<p><strong>Macbook Pro 2017 Touch Bar &amp; ID MPXV2</strong>&nbsp;với thiết kế vỏ bao được thiết kế lại v&agrave; cấu tr&uacute;c to&agrave;n bộ kim loại tạo ra một sản phẩm cứng nhắc nhưng kh&ocirc;ng k&eacute;m phần mỏng v&agrave; nhẹ. Với chỉ 14,9 mm mỏng, Macbook Pro MPXV2 nặng chỉ 1.37kg.</p>\r\n\r\n<p><img alt=\"\" src=\"https://vcdn.tikicdn.com/ts/tmp/ae/18/f8/ea7d2cd998dcd26b753610ab25d520ea.jpg\" style=\"height:567px; width:850px\" /></p>\r\n\r\n<h5>M&agrave;n h&igrave;nh Retina 13.3 inch</h5>\r\n\r\n<p>M&agrave;n h&igrave;nh Retina 13.3 inch c&oacute; độ ph&acirc;n giải 2560 x 1600 v&agrave; c&oacute; đ&egrave;n nền LED s&aacute;ng hơn so với thế hệ trước của n&oacute; cũng như tăng tỷ lệ tương phản, mang lại m&agrave;u sắc s&acirc;u hơn v&agrave; s&aacute;ng hơn. Hỗ trợ m&agrave;u sắc sống động hơn với những chi tiết sống động, thiết yếu cho thiết kế đồ hoạ, ph&acirc;n loại m&agrave;u v&agrave; chỉnh sửa. cảm ứng đa chạm sẽ thay đổi tự động dựa tr&ecirc;n những g&igrave; bạn đang l&agrave;m, từ việc hiển thị c&aacute;c điều khiển hệ thống truyền thống như khối lượng v&agrave; độ s&aacute;ng, tương t&aacute;c trực tiếp. C&aacute;c t&iacute;nh năng nhập th&ocirc;ng minh như biểu tượng cảm x&uacute;c v&agrave; văn bản ti&ecirc;n đo&aacute;n cải thiện trải nghiệm đ&aacute;nh m&aacute;y v&agrave; bạn c&oacute; thể t&ugrave;y chỉnh Touch Bar để ph&ugrave; hợp với nhu cầu của bạn.</p>\r\n\r\n<p><img alt=\"\" src=\"https://vcdn.tikicdn.com/ts/tmp/3a/b7/b4/c01702191e13d664286dd7b5d3ca6b86.jpg\" style=\"height:567px; width:850px\" /></p>\r\n\r\n<h5>Thanh Touch Bar linh hoạt v&agrave; tiện &iacute;ch</h5>\r\n\r\n<p>Apple Macbook Pro 2017 với thanh Touch Bar gi&uacute;p bạn hoạt động một c&aacute;ch linh hoạt v&agrave; tiện &iacute;ch hơn, thay thế c&aacute;c ph&iacute;m chức năng từ l&acirc;u đ&atilde; chiếm phần tr&ecirc;n c&ugrave;ng của b&agrave;n ph&iacute;m.</p>\r\n\r\n<p><img alt=\"\" src=\"https://vcdn.tikicdn.com/ts/tmp/0d/99/c5/9a6f3167c5d2df5dc8e15bb97641dad7.jpg\" style=\"height:567px; width:850px\" /></p>\r\n\r\n<h5>Touch ID</h5>\r\n\r\n<p>Cảm biến v&acirc;n tay Touch ID gi&uacute;p bạn đăng nhập v&agrave;o Macbook bằng dấu v&acirc;n tay, bạn cũng c&oacute; thể mua h&agrave;ng tr&ecirc;n web bằng c&aacute;ch sử dụng Touch ID th&ocirc;ng qua Apple Pay nhờ hệ điều h&agrave;nh MacOS Sierra.</p>\r\n\r\n<p><img alt=\"\" src=\"https://vcdn.tikicdn.com/ts/tmp/69/ef/85/74e3577d6841c8d7513db401d1c71370.jpg\" style=\"height:567px; width:850px\" /></p>\r\n\r\n<h5>Force Touch Trackpad</h5>\r\n\r\n<p>Sản phẩm n&agrave;y c&oacute; tất cả c&aacute;c t&iacute;nh năng cảm ứng đa điểm v&agrave; th&ecirc;m cảm biến lực để ph&aacute;t hiện sự kh&aacute;c biệt tinh tế trong &aacute;p lực đi xuống m&agrave; bạn &aacute;p dụng. Điều n&agrave;y cho ph&eacute;p bạn c&oacute; kết nối s&acirc;u hơn với nội dung của m&igrave;nh, mang lại nhiều chức năng hơn. Với đa cảm ứng, bạn c&oacute; thể sử dụng c&aacute;c cử chỉ thực tế như vuốt hoặc chụm để chuyển đổi giữa c&aacute;c ứng dụng, di chuyển nội dung của bạn v&agrave; tận dụng tối đa kh&ocirc;ng gian desktop.</p>\r\n\r\n<p><img alt=\"\" src=\"https://vcdn.tikicdn.com/ts/tmp/3c/3c/92/4a90d61898c5a4afaf067fdcee77b079.jpg\" style=\"height:567px; width:850px\" /></p>\r\n\r\n<h5>Loa phạm vi rộng</h5>\r\n\r\n<p>Loa đ&atilde; được thiết kế lại ho&agrave;n to&agrave;n để cung cấp gấp đ&ocirc;i phạm vi động v&agrave; l&ecirc;n tới 58% với bass trội hơn gấp hai lần rưỡi để tăng tối đa sự b&ugrave;ng nổ. Th&ecirc;m v&agrave;o đ&oacute;, ch&uacute;ng được kết nối trực tiếp với hệ thống, cho ph&eacute;p tăng c&ocirc;ng suất l&ecirc;n tới gấp ba lần.</p>\r\n\r\n<p><img alt=\"\" src=\"https://vcdn.tikicdn.com/ts/tmp/c9/8b/fd/597d173841847e6c06dfa1eb2ef2993a.jpg\" style=\"height:567px; width:850px\" /></p>', '2018-03-14 05:23:44', '2018-03-13 12:42:18', 'uploads/1520944938_9741396_db8574dfb9da7a22332909fc23bb9a9c.jpg', 0, 'Apple', 'macbook-pro-2017-5aa8b1d7e9832');

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
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(10) UNSIGNED NOT NULL,
  `Ten` varchar(255) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `Sdt` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `MoTa` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`id`, `Ten`, `DiaChi`, `Sdt`, `Email`, `MoTa`, `created_at`, `updated_at`) VALUES
(1, 'Web Bán Hàng online', 'Mỗ Lao, Hà Đông, Hà Nội, Việt Nam', '0981639326', 'anhsonit96@gmail.com', '<h1>Về ch&uacute;ng t&ocirc;i</h1>\r\n\r\n<p>Giới thiệu về Si&ecirc;u Mua</p>\r\n\r\n<p>Ra đời v&agrave;o cuối năm 2011, SieuMua.Com đ&atilde; sớm c&oacute; một vị tr&iacute; vững chắc tr&ecirc;n thị trường thương mại điện tử trong nước, trở th&agrave;nh địa chỉ mua sắm online đầy tin cậy, tiện lợi cho kh&aacute;ch h&agrave;ng tại TP.HCM v&agrave; c&aacute;c tỉnh th&agrave;nh kh&aacute;c tr&ecirc;n to&agrave;n quốc.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>SieuMua.Com &nbsp;l&agrave; một website thời trang online, phục vụ nhu cầu mua sắm trực tuyến bao gồm: chọn v&agrave; mua h&agrave;ng trực tuyến nhanh ch&oacute;ng, thanh to&aacute;n trực tuyến an to&agrave;n, giao h&agrave;ng tận nơi, chăm s&oacute;c v&agrave; tư vấn th&acirc;n thiện. Với mong muốn đem đến cho kh&aacute;ch h&agrave;ng những sản phẩm chất lượng,thời trang với gi&aacute; cả hơp l&yacute; nhất, mang ứng dụng cao, hiện đại, năng động, ph&ugrave; hợp với văn h&oacute;a, gu thẩm mỹ của người Việt Nam.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tầm nh&igrave;n:</p>\r\n\r\n<p>SieuMua.Com mong muốn trở th&agrave;nh website cung cấp những sản phẩm thời trang uy t&iacute;n, chất lượng v&agrave; tốt nhất cho qu&yacute; kh&aacute;ch h&agrave;ng. Đưa website SieuMua.Com trở th&agrave;nh nơi mua sắm trực tuyến ưa th&iacute;ch v&agrave; thường xuy&ecirc;n của kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sứ mệnh:</p>\r\n\r\n<p>Sản phẩm tr&ecirc;n SieuMua.Com &nbsp;l&agrave; những sản phẩm của thời trang hiện đại &nbsp;mang t&iacute;nh hữu dụng để mọi người c&oacute; thể tự do kết hợp v&agrave; s&aacute;ng tạo ch&uacute;ng trong phong c&aacute;ch độc đ&aacute;o ri&ecirc;ng của từng người m&agrave; kh&ocirc;ng ph&acirc;n biệt tuổi t&aacute;c v&agrave; ng&agrave;nh nghề. Mỗi sản phẩm được đăng tr&ecirc;n website SieuMua.Com đều được tuyển chọn v&agrave; bảo đảm chất lượng, v&agrave; ch&uacute;ng t&ocirc;i hi vọng đ&oacute; cũng sẽ l&agrave; m&oacute;n qu&agrave; &yacute; nghĩa để bạn gi&agrave;nh cho những người th&acirc;n y&ecirc;u nhất.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sản phẩm chủ đạo của ch&uacute;ng t&ocirc;i l&agrave;:</p>\r\n\r\n<p>- C&aacute;c sản phẩm thời trang nam nữ, bao gồm: Gi&agrave;y d&eacute;p, quần &aacute;o, thể thao, phụ kiện, l&agrave;m đẹp, v&aacute;y-đầm... với mẫu m&atilde; đa dạng, đảm bảo ph&ugrave; hợp với thị hiếu thời trang v&agrave; t&uacute;i tiền của qu&yacute; kh&aacute;ch.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>C&aacute;c sản phẩm của ch&uacute;ng t&ocirc;i đều được nhập từ c&aacute;c nh&agrave; cung cấp thời trang uy t&iacute;n,l&agrave;m từ c&aacute;c chất liệu tốt, đ&aacute;p ứng đầy đủ c&aacute;c y&ecirc;u cầu về thẩm mỹ v&agrave; chất lượng sản phẩm. Ngo&agrave;i ra SieuMua.Com lu&ocirc;n cố gắng khai th&aacute;c th&ecirc;m nhiều mẫu m&atilde;, đảm bảo được sự đa dạng v&agrave; độc đ&aacute;o của mỗi sản phẩm khi xuất hiện tr&ecirc;n website SieuMua.Com. Ch&uacute;ng t&ocirc;i sẽ lu&ocirc;n đ&aacute;p ứng nhằm phục vụ c&aacute;c Qu&yacute; kh&aacute;ch một c&aacute;ch tốt nhất.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Đặt mục ti&ecirc;u trở th&agrave;nh một trung t&acirc;m mua sắm trực tuyến h&agrave;ng đầu tại Việt Nam về c&aacute;c sản phẩm dẫn đầu về uy t&iacute;n, chất lượng v&agrave; dịch vụ, SieuMua cam kết:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>- Cung cấp c&aacute;c sản phẩm - dịch vụ chất lượng tốt, gi&aacute; cả ph&ugrave; hợp với t&uacute;i tiền người ti&ecirc;u d&ugrave;ng.</p>\r\n\r\n<p>- C&aacute;c sản phẩm được kiểm tra, s&agrave;ng lọc kỹ c&agrave;ng, đảm bảo an to&agrave;n cho sức khỏe cho người sử dụng.</p>\r\n\r\n<p>- Bảo h&agrave;nh nghi&ecirc;m t&uacute;c theo quy định của nh&agrave; sản xuất.</p>\r\n\r\n<p>- Được đổi, trả h&agrave;ng trong v&ograve;ng 15 ng&agrave;y ho&agrave;n to&agrave;n miễn ph&iacute;.</p>\r\n\r\n<p>- Tư vấn, hướng dẫn sử dụng với từng sản phẩm, đặc biệt với c&aacute;c sản phẩm chuy&ecirc;n dụng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Với c&aacute;c ti&ecirc;u ch&iacute; về chất lượng v&agrave; một đội ngũ năng động, nhiệt t&igrave;nh, gi&agrave;u kinh nghiệm, SieuMua.Com nhất định sẽ l&agrave; điểm mua sắm l&yacute; tưởng cho c&aacute;c đối tượng kh&aacute;ch h&agrave;ng tr&ecirc;n cả nước, nhanh gọn, an to&agrave;n v&agrave; tiết kiệm thời gian hiệu quả.</p>', NULL, '2018-03-08 11:54:32');

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
(18, '212702717', 'Điện Thoại'),
(21, '375600484', 'LapTop'),
(22, '215359545', 'Máy Tính Bảng'),
(23, '350817952', 'Tai Nghe'),
(24, '389007487', 'Khác');

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
(14, '2014_10_12_100000_create_password_resets_table', 1),
(16, '2018_03_02_073207_create_banner_table', 2),
(18, '2018_03_06_094619_create_nhasanxuat_table', 3),
(19, '2018_03_08_081046_create_lienhe_table', 4),
(20, '2018_03_14_031658_create_slug_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `id` int(10) UNSIGNED NOT NULL,
  `MaHang` varchar(255) NOT NULL,
  `TenNhaSanXuat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`id`, `MaHang`, `TenNhaSanXuat`, `created_at`, `updated_at`) VALUES
(1, '238983461', 'SamSung', '2018-03-06 03:25:30', '2018-03-06 03:25:30'),
(3, '469277383', 'Apple', '2018-03-06 03:32:02', '2018-03-06 03:32:02'),
(4, '413362186', 'Dell', '2018-03-06 03:32:44', '2018-03-06 03:32:44'),
(5, '177527116', 'Sony', '2018-03-06 03:32:58', '2018-03-06 03:32:58'),
(6, '347495512', 'Asus', '2018-03-06 10:44:37', '2018-03-06 10:44:37'),
(7, '412180653', 'LG', '2018-03-06 10:45:21', '2018-03-06 10:45:21'),
(8, '377604874', 'Xiaomi', '2018-03-06 10:46:12', '2018-03-06 10:46:12'),
(9, '303203846', 'HP', '2018-03-06 10:47:23', '2018-03-06 10:47:23'),
(10, '389007487', 'Khác', '2018-03-13 22:19:23', '2018-03-13 22:19:23');

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
-- Table structure for table `slug`
--

CREATE TABLE `slug` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenHH_id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slug`
--

INSERT INTO `slug` (`id`, `TenHH_id`, `slug`) VALUES
(1, 18, 'usb-kingtom'),
(2, 33, 'anc-anianfia');

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
(1, 'Anh Sơn', 'anhsonit96@gmail.com', '$2y$10$NylLGOgunq7RNDTdA/S4xuHAi0J8CK380U92Ta7SzphHIXtapZvJq', 'Mỗ Lao, Hà Đông, Hà Nội', '0981639326', 'O9xU7LEJUisyQpUjYNjR0iMGM3yCOZJNc4ZmKWDFkQZDd6Z71DzbnSCuWwd1', NULL, NULL),
(2, 'Vô Danh', 'client@abc.com', '$2y$10$F/lKzQ8FdeaE3ZlNgTj98e4LD30i0hkCnrHlEU0lvOCW3ddpk898a', 'Mỗ Lao, Hà Đông, Hà Nội, Việt Nam', '0981639326', 'KLbeuEfQZUCUFLPa9iCisr7XRaRT4D7xu44jWYHOPHlemePrxI2rFn8CR9vr', NULL, '2018-02-07 12:28:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
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
-- Indexes for table `slug`
--
ALTER TABLE `slug`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug_slug_unique` (`slug`);

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
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `daily`
--
ALTER TABLE `daily`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loaihanghoa`
--
ALTER TABLE `loaihanghoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `slug`
--
ALTER TABLE `slug`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
