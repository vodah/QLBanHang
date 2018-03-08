
-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost:6666
-- Generation Time: Mar 08, 2018 at 03:35 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-1+ubuntu16.04.1+deb.sury.org+1

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
  `TenLoaiHH` varchar(11) NOT NULL,
  `SoLuong` int(255) NOT NULL,
  `DonGia` varchar(255) NOT NULL,
  `MoTa` longtext,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `AnhSP` varchar(255) DEFAULT NULL,
  `NoiBat` int(11) DEFAULT NULL,
  `NhaSanXuat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`id`, `MaHH`, `TenHH`, `TenLoaiHH`, `SoLuong`, `DonGia`, `MoTa`, `updated_at`, `created_at`, `AnhSP`, `NoiBat`, `NhaSanXuat`) VALUES
(6, '782332785', 'laptop asus', 'LapTop', 300, '2000000', '<h2>Đặc điểm nổi bật của Asus X541UA i3 6100U/4GB/1TB/15.6&quot;/Win10/(XX272T)/Đen</h2>\r\n\r\n<p><img src="https://cdn4.tgdd.vn/Products/Images/44/134806/Slider/-asus-x541ua-i3-6100u-xx272t-tk.jpg" /></p>\r\n\r\n<p>Bộ sản phẩm chuẩn: S&aacute;ch hướng dẫn, Th&ugrave;ng m&aacute;y, Adapter sạc</p>\r\n\r\n<h2><strong>Asus X541UA i3 6100U thuộc ph&acirc;n kh&uacute;c laptop&nbsp;<a href="https://www.thegioididong.com/laptop?g=hoc-tap-van-phong" target="_blank" title="học tập - văn phòng">học tập - văn ph&ograve;ng</a>, được trang bị cấu h&igrave;nh vừa đủ để phục vụ nhu cầu sử dụng hằng ng&agrave;y. Ngo&agrave;i ra, m&aacute;y c&ograve;n c&agrave;i sẵn hệ điều h&agrave;nh Windows 10 bản quyền gi&uacute;p sử dụng ổn định, tiện lợi hơn.</strong></h2>\r\n\r\n<h3><strong>Thiết kế m&aacute;y đơn giản phổ th&ocirc;ng</strong></h3>\r\n\r\n<p><strong>Asus X541UA</strong>&nbsp;c&oacute; thiết kế chất liệu vỏ nhựa v&agrave; c&oacute; trọng lượng tr&ograve;n&nbsp;<strong>2 kg</strong>&nbsp;c&ugrave;ng độ d&agrave;y&nbsp;<strong>27.6 mm</strong>. V&igrave; nằm trong ph&acirc;n kh&uacute;c phổ th&ocirc;ng n&ecirc;n c&oacute; thiết kế b&igrave;nh thường, kh&ocirc;ng c&oacute; đột ph&aacute; nổi bật như c&aacute;c sản phẩm laptop cao cấp.</p>\r\n\r\n<p><a href="https://www.thegioididong.com/images/44/134806/asus-x541ua-i3-6100u-xx272t-1.jpg" onclick="return false;"><img alt="Thiết kế máy đơn giản phổ thông" src="https://cdn3.tgdd.vn/Products/Images/44/134806/asus-x541ua-i3-6100u-xx272t-1.jpg" title="Thiết kế máy đơn giản phổ thông" /></a></p>\r\n\r\n<h3><strong>Cấu h&igrave;nh ph&ugrave; hợp với thao t&aacute;c sử dụng nhẹ nh&agrave;ng</strong></h3>\r\n\r\n<p>Cấu h&igrave;nh<strong>&nbsp;Asus X541UA</strong>&nbsp;ph&ugrave; hợp với c&aacute;c thao t&aacute;c về học tập, giải tr&iacute; nhẹ, c&ocirc;ng việc văn ph&ograve;ng cơ bản. M&aacute;y được trang bị CPU&nbsp;<a href="https://www.thegioididong.com/hoi-dap/intel-core-the-he-thu-6-skylake-774739#i3" target="_blank" title="Intel Core i3 Skylake 6100U">Intel Core i3 Skylake 6100U</a>&nbsp;c&oacute; tốc độ&nbsp;<strong>2.30 GHz</strong>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/ram-ddr4-la-gi-882173" target="_blank" title="RAM DDR4">RAM DDR4</a>&nbsp;<strong>4 GB</strong>&nbsp;v&agrave; ổ cứng lưu dữ liệu&nbsp;<a href="https://www.thegioididong.com/hoi-dap/hdd-la-gi-922791" target="_blank" title="HDD">HDD</a>&nbsp;<strong>1 TB</strong>.</p>\r\n\r\n<p><a href="https://www.thegioididong.com/images/44/134806/asus-x541ua-i3-6100u-xx272t-2.jpg" onclick="return false;"><img alt="Cấu hình phù hợp với thao tác sử dụng nhẹ nhàng" src="https://cdn.tgdd.vn/Products/Images/44/134806/asus-x541ua-i3-6100u-xx272t-2.jpg" title="Cấu hình phù hợp với thao tác sử dụng nhẹ nhàng" /></a></p>\r\n\r\n<h3><strong>M&agrave;n h&igrave;nh lớn 15.6 inch</strong></h3>\r\n\r\n<p><strong>Laptop Asus X541UA i3 6100U</strong>&nbsp;sở hữu m&agrave;n h&igrave;nh&nbsp;<strong>15.6 inch</strong>, độ ph&acirc;n giải&nbsp;<strong>HD (1366 x 768)</strong>&nbsp;kết hợp c&ocirc;ng nghệ&nbsp;<a href="https://www.thegioididong.com/tin-tuc/cac-cong-nghe-hien-thi-tren-man-hinh-laptop-597377#splendvideo" target="_blank" title="Asus Splendid Video">ASUS Splendid Video</a>&nbsp;v&agrave;&nbsp;<a href="https://www.thegioididong.com/tin-tuc/cac-cong-nghe-hien-thi-tren-man-hinh-laptop-597377#ledbacklit" target="_blank" title="LED Backlit">LED Backlit</a>&nbsp;th&acirc;n thiện với m&ocirc;i trường xung quanh.</p>\r\n\r\n<p><a href="https://www.thegioididong.com/images/44/134806/asus-x541ua-i3-6100u-xx272t-3.jpg" onclick="return false;"><img alt="Màn hình lớn 15.6 inch" src="https://cdn2.tgdd.vn/Products/Images/44/134806/asus-x541ua-i3-6100u-xx272t-3.jpg" title="Màn hình lớn 15.6 inch" /></a></p>\r\n\r\n<h3><strong>B&agrave;n ph&iacute;m</strong>&nbsp;<strong>Asus X541UA i3 6100U&nbsp;</strong>&nbsp;<strong>như thế n&agrave;o?</strong></h3>\r\n\r\n<p>Ph&iacute;m bấm nhạy, to r&otilde; th&iacute;ch hợp với người d&ugrave;ng hay l&agrave;m việc thường xuy&ecirc;n về phần mềm nhập liệu như: Học tập thuyết tr&igrave;nh, c&ocirc;ng việc h&agrave;nh ch&iacute;nh (nhập văn bản), gi&aacute;o vi&ecirc;n&hellip;</p>\r\n\r\n<p><a href="https://www.thegioididong.com/images/44/134806/asus-x541ua-i3-6100u-xx272t-4.jpg" onclick="return false;"><img alt="Bàn phím Asus X541UA i3 6100U  như thế nào?" src="https://cdn4.tgdd.vn/Products/Images/44/134806/asus-x541ua-i3-6100u-xx272t-4.jpg" title="Bàn phím Asus X541UA i3 6100U  như thế nào?" /></a></p>\r\n\r\n<h3><strong>Cổng kết nối, tr&igrave;nh chiếu</strong></h3>\r\n\r\n<p><strong>Asus X541UA</strong>&nbsp;trang bị đầy đủ cổng kết nối như&nbsp;<a href="https://www.thegioididong.com/hoi-dap/usb-30-la-gi-926737" target="_blank" title="USB 3.0">USB 3.0</a>&nbsp;gi&uacute;p truyền tải sao ch&eacute;p dữ liệu nhanh hay cổng&nbsp;<a href="https://www.thegioididong.com/hoi-dap/vga-la-gi-920575" target="_blank" title="VGA">VGA</a>,&nbsp;<a href="https://www.thegioididong.com/hoi-dap/hdmi-la-gi-930605" target="_blank" title="HDMI">HDMI</a>&nbsp;gi&uacute;p xuất h&igrave;nh ảnh laptop ra m&aacute;y chiếu, tivi tiện lợi trong những cuộc họp, thuyết tr&igrave;nh.</p>\r\n\r\n<p><a href="https://www.thegioididong.com/images/44/134806/asus-x541ua-i3-6100u-xx272t-5.jpg" onclick="return false;"><img alt="Cổng kết nối, trình chiếu" src="https://cdn1.tgdd.vn/Products/Images/44/134806/asus-x541ua-i3-6100u-xx272t-5.jpg" title="Cổng kết nối, trình chiếu" /></a></p>\r\n\r\n<p>&nbsp;</p>', '2018-03-01 17:27:50', NULL, 'uploads/1517424411_3728489_f537c8e9b50688782612023670d3871b.jpg', 1, 'Asus'),
(18, '267451773', 'Usb Kingtom', 'Điện Thoại', 534, '135000', '<p>đ&acirc;y l&agrave; m&ocirc; tả 2</p>', '2018-03-01 16:34:37', '2017-12-05 13:27:43', 'uploads/1517512160_3231349_bb8939ae31980cf9f0bee1571a992c80.jpg', 0, NULL),
(19, '261268497', 'chuột genius', 'Chuột', 30, '100000', '<p>m&ocirc; tả cho chuột genius</p>', '2018-03-06 08:30:58', '2017-12-05 14:53:03', 'uploads/1517939013_5407376_2cc2d2ddd53591131da04f8b54a6317b.jpg', 0, NULL),
(21, '370741603', 'iphone X', 'Điện Thoại', 13, '30000000', '<h2>Đặc điểm nổi bật của iPhone X 64GB</h2>\r\n\r\n<p><img src="https://cdn4.tgdd.vn/Products/Images/42/114115/Slider/vi-vn-1-thietke.jpg" /></p>\r\n\r\n<p><a href="https://www.thegioididong.com/hoi-dap/man-hinh-retina-la-gi-905780" target="_blank">T&igrave;m hiểu th&ecirc;m</a></p>\r\n\r\n<p><a href="https://www.thegioididong.com/tin-tuc/face-id-la-gi-bao-mat-3d-quet-khuon-mat-3d-tren-iphone-x-1018816" target="_blank">T&igrave;m hiểu th&ecirc;m</a></p>\r\n\r\n<p><a href="https://www.thegioididong.com/tin-tuc/kinh-cuong-luc-la-gi--596319" target="_blank">T&igrave;m hiểu th&ecirc;m</a></p>\r\n\r\n<p><a href="https://www.thegioididong.com/tin-tuc/tim-hieu-xoa-phong-huong-dan-xoa-phong-tren-moi-smartphone-892585" target="_blank">T&igrave;m hiểu th&ecirc;m</a></p>\r\n\r\n<p><a href="https://www.thegioididong.com/hoi-dap/che-do-chong-rung-quang-hoc-ois-chup-anh-tren-smar-906416" target="_blank">T&igrave;m hiểu th&ecirc;m</a></p>\r\n\r\n<p><a href="https://www.thegioididong.com/tin-tuc/xuat-hien-thong-tin-ve-chip-a11-tren-iphone-x-va-iphone-8-sap-toi-1020645" target="_blank">T&igrave;m hiểu th&ecirc;m</a></p>\r\n\r\n<p>Bộ sản phẩm chuẩn: Hộp, Sạc, Tai nghe, S&aacute;ch hướng dẫn, Jack chuyển tai nghe 3.5mm, C&aacute;p, C&acirc;y lấy sim</p>\r\n\r\n<h2>&quot;<a href="https://www.thegioididong.com/dtdd/iphone-x-64gb" target="_blank" title="Điện thoại iPhone X 64GB" type="Điện thoại iPhone X 64GB">iPhone X gi&aacute;</a>&quot; l&agrave; cụm từ được&nbsp;rất nhiều người mong chờ muốn biết v&agrave; t&igrave;m kiếm tr&ecirc;n Google bởi đ&acirc;y l&agrave; chiếc điện thoại m&agrave; Apple kỉ niệm 10 năm iPhone đầu ti&ecirc;n được b&aacute;n ra.</h2>\r\n\r\n<h3><strong>Thiết kế đột ph&aacute;</strong></h3>\r\n\r\n<p>Như c&aacute;c bạn cũng đ&atilde; biết th&igrave; đ&atilde; 4 năm kể từ iPhone 6 v&agrave; iPhone 6 Plus Apple vẫn chưa c&oacute; thay đổi n&agrave;o đ&aacute;ng kể trong thiết kế của m&igrave;nh.</p>\r\n\r\n<p><a href="https://www.thegioididong.com/images/42/114115/iphone-x-64gb1.jpg" onclick="return false;"><img alt="Thiết kế đột phá" src="https://cdn2.tgdd.vn/Products/Images/42/114115/iphone-x-64gb1.jpg" title="Thiết kế đột phá" /></a></p>\r\n\r\n<p>Nhưng với iPhone X th&igrave; đ&oacute; lại l&agrave; 1 c&acirc;u chuyện ho&agrave;n to&agrave;n kh&aacute;c, m&aacute;y chuyển qua sử dụng m&agrave;n h&igrave;nh tỉ lệ 19,5:9 mới mẻ với phần diện t&iacute;ch hiển thị mặt trước cực lớn.</p>\r\n\r\n<p><a href="https://www.thegioididong.com/images/42/114115/iphone-x-64gb2.jpg" onclick="return false;"><img alt="Thiết kế đột phá" src="https://cdn4.tgdd.vn/Products/Images/42/114115/iphone-x-64gb2.jpg" title="Thiết kế đột phá" /></a></p>\r\n\r\n<p>Mặt lưng k&iacute;nh hỗ trợ sạc nhanh kh&ocirc;ng d&acirc;y cũng như phần camera k&eacute;p đặt dọc cũng l&agrave; những thứ đầu ti&ecirc;n xuất hiện tr&ecirc;n 1 chiếc iPhone.</p>\r\n\r\n<h3><strong>M&agrave;n h&igrave;nh với tai thỏ</strong></h3>\r\n\r\n<p>Điểm khiến iPhone X bị ch&ecirc; nhiều nhất đ&oacute; ch&iacute;nh l&agrave; phần &quot;tai thỏ&quot; ph&iacute;a tr&ecirc;n m&agrave;n h&igrave;nh, Apple đ&atilde; chấp nhận điều n&agrave;y để đặt cụm camera&nbsp;TrueDept mới của h&atilde;ng.</p>\r\n\r\n<p><a href="https://www.thegioididong.com/images/42/114115/iphone-x-64gb15.jpg" onclick="return false;"><img alt="Màn hình với tai thỏ" src="https://cdn1.tgdd.vn/Products/Images/42/114115/iphone-x-64gb15.jpg" title="Màn hình với tai thỏ" /></a></p>\r\n\r\n<p>M&agrave;n h&igrave;nh k&iacute;ch thước 5.8 inch độ ph&acirc;n giải&nbsp;1125 x 2436 pixels đem đến khả năng hiển thị xuất sắc.</p>\r\n\r\n<p><a href="https://www.thegioididong.com/images/42/114115/iphone-x-64gb20.jpg" onclick="return false;"><img alt="Màn hình với tai thỏ" src="https://cdn3.tgdd.vn/Products/Images/42/114115/iphone-x-64gb20.jpg" title="Màn hình với tai thỏ" /></a></p>\r\n\r\n<p>iPhone X sử dụng tấm nền&nbsp;<a href="https://www.thegioididong.com/hoi-dap/man-hinh-oled-la-gi-905762" target="_blank" title="Tìm hiểu màn hình OLED">OLED</a>&nbsp;(được tinh chỉnh bởi Apple) thay v&igrave; LCD như những chiếc iPhone trước đ&acirc;y v&agrave; điều n&agrave;y đem lại cho m&aacute;y 1 m&agrave;u đen thể hiện rất s&acirc;u cũng khả năng t&aacute;i tạo m&agrave;u sắc kh&ocirc;ng k&eacute;m phần ch&iacute;nh x&aacute;c.</p>\r\n\r\n<h3><strong>Face ID tạo n&ecirc;n đột ph&aacute;</strong></h3>\r\n\r\n<p>Touch ID tr&ecirc;n iPhone X đ&atilde; bị loại bỏ, thay v&agrave;o đ&oacute; l&agrave; bạn sẽ chuyển qua sử dụng Face ID, một phương thức bảo mật sinh trắc học mới của Apple.</p>\r\n\r\n<p><a href="https://www.thegioididong.com/images/42/114115/iphone-x-64gb7.jpg" onclick="return false;"><img alt="Face ID tạo nên đột phá" src="https://cdn.tgdd.vn/Products/Images/42/114115/iphone-x-64gb7.jpg" title="Face ID tạo nên đột phá" /></a></p>\r\n\r\n<p>Với sự trợ gi&uacute;p của cụm&nbsp;camera&nbsp;TrueDept th&igrave; iPhone X c&oacute; khả năng nhận diện khu&ocirc;n mặt 3D của người d&ugrave;ng từ đ&oacute; mở kh&oacute;a chiếc iPhone một c&aacute;ch nhanh ch&oacute;ng.</p>\r\n\r\n<p><a href="https://www.thegioididong.com/images/42/114115/iphone-x-64gb11.jpg" onclick="return false;"><img alt="Face ID tạo nên đột phá" src="https://cdn2.tgdd.vn/Products/Images/42/114115/iphone-x-64gb11.jpg" title="Face ID tạo nên đột phá" /></a></p>\r\n\r\n<p>Tuy sẽ hơi hụt hẫng khi Touch ID đ&atilde; qu&aacute; quen thuộc tr&ecirc;n những chiếc iPhone như tốc độ cũng như trải nghiệm &quot;kh&oacute;a như kh&ocirc;ng kh&oacute;a&quot; của Face ID ho&agrave;n to&agrave;n c&oacute; thể khiến bạn y&ecirc;n t&acirc;m sử dụng.</p>\r\n\r\n<h3><strong>Thao t&aacute;c vuốt v&agrave; vuốt</strong></h3>\r\n\r\n<p>Kh&ocirc;ng c&ograve;n ph&iacute;m Home cứng n&ecirc;n c&aacute;c thao t&aacute;c tr&ecirc;n iPhone X cũng ho&agrave;n to&agrave;n kh&aacute;c so với những đ&agrave;n anh đi trước.</p>\r\n\r\n<p><a href="https://www.thegioididong.com/images/42/114115/iphone-x-64gb3.jpg" onclick="return false;"><img alt="Thao tác vuốt và vuốt" src="https://cdn4.tgdd.vn/Products/Images/42/114115/iphone-x-64gb3.jpg" title="Thao tác vuốt và vuốt" /></a></p>\r\n\r\n<p>Giờ đ&acirc;y chỉ với thao t&aacute;c vuốt v&agrave; vuốt từ cạnh dưới l&agrave; bạn đ&atilde; c&oacute; thể truy cập v&agrave;o đa nhiệm, trở về m&agrave;n h&igrave;nh Home một c&aacute;ch nhanh ch&oacute;ng.</p>\r\n\r\n<h3><strong>Camera cải tiến</strong></h3>\r\n\r\n<p>iPhone X vẫn sở hữu bộ đ&ocirc;i camera với độ ph&acirc;n giải 12 MP nhưng camera tele thứ 2 với khẩu độ được n&acirc;ng l&ecirc;n mức f/2.4 so với f/2.8 của iPhone 7 Plus.</p>\r\n\r\n<p><a href="https://www.thegioididong.com/images/42/114115/iphone-x-64gb19.jpg" onclick="return false;"><img alt="Camera cải tiến" src="https://cdn1.tgdd.vn/Products/Images/42/114115/iphone-x-64gb19.jpg" title="Camera cải tiến" /></a></p>\r\n\r\n<p>Ngo&agrave;i ra th&igrave; cả 2 camera tr&ecirc;n iPhone X đều sở hữu cho m&igrave;nh khả năng chống rung quang học gi&uacute;p bạn dễ d&agrave;ng bắt trọn mọi khoảnh khắc trong cuộc sống.</p>\r\n\r\n<p><a href="https://www.thegioididong.com/images/42/114115/iphone-x-64gb9.jpg" onclick="return false;"><img alt="Camera cải tiến" src="https://cdn3.tgdd.vn/Products/Images/42/114115/iphone-x-64gb9.jpg" title="Camera cải tiến" /></a></p>\r\n\r\n<p>Camera trước độ ph&acirc;n giải 7 MP với khả năng selfie x&oacute;a ph&ocirc;ng đ&aacute;p ứng tốt mọi nhu cầu tự sướng của giới trẻ hiện nay.</p>\r\n\r\n<p><a href="https://www.thegioididong.com/images/42/114115/iphone-x-64gb8.jpg" onclick="return false;"><img alt="Camera cải tiến" src="https://cdn.tgdd.vn/Products/Images/42/114115/iphone-x-64gb8.jpg" title="Camera cải tiến" /></a></p>\r\n\r\n<p>Bộ đ&ocirc;i camera tr&ecirc;n iPhone X được đ&aacute;nh gi&aacute; rất cao về chất lượng ảnh chụp v&agrave; l&agrave; một trong những chiếc camera phone chụp ảnh đẹp nhất trong năm 2017.</p>\r\n\r\n<h3><strong>Hiệu năng mạnh mẽ</strong></h3>\r\n\r\n<p>Hiệu năng của những chiếc iPhone chưa bao giờ l&agrave; vấn đề v&agrave; với iPhone X th&igrave; mọi thứ vẫn rất ấn tượng.</p>\r\n\r\n<p><a href="https://www.thegioididong.com/images/42/114115/iphone-x-64gb10.jpg" onclick="return false;"><img alt="Hiệu năng mạnh mẽ" src="https://cdn2.tgdd.vn/Products/Images/42/114115/iphone-x-64gb10.jpg" title="Hiệu năng mạnh mẽ" /></a></p>\r\n\r\n<p>Con chip&nbsp;<a href="https://www.thegioididong.com/tin-tuc/chi-tiet-a11-bionic-chip-co-nhieu-thanh-phan-apple-tu-trong-nhat-tu-truoc-den-nay-1021653" target="_blank" title="Apple A11 Bionic 6 nhân">Apple A11 Bionic 6 nh&acirc;n</a>&nbsp;kết hợp với 3 GB RAM th&igrave; iPhone X tự tin l&agrave; chiếc&nbsp;<a href="https://www.thegioididong.com/dtdd" target="_blank" title="Điện thoại di động">smartphone</a>&nbsp;mạnh mẽ nhất m&agrave; Apple từng sản xuất.</p>\r\n\r\n<p><a href="https://www.thegioididong.com/images/42/114115/iphone-x-64gb13.jpg" onclick="return false;"><img alt="Hiệu năng mạnh mẽ" src="https://cdn4.tgdd.vn/Products/Images/42/114115/iphone-x-64gb13.jpg" title="Hiệu năng mạnh mẽ" /></a></p>\r\n\r\n<p>Ngo&agrave;i ra với iPhone X th&igrave; Apple cũng nhấn mạnh với trải nghiệm thực tế ảo tăng cường gi&uacute;p bạn c&oacute; những ph&uacute;t gi&acirc;y thư gi&atilde;n th&uacute; vị.</p>\r\n\r\n<p><a href="https://www.thegioididong.com/images/42/114115/iphone-x-64gb17.jpg" onclick="return false;"><img alt="Hiệu năng mạnh mẽ" src="https://cdn1.tgdd.vn/Products/Images/42/114115/iphone-x-64gb17.jpg" title="Hiệu năng mạnh mẽ" /></a></p>\r\n\r\n<p>Vi&ecirc;n pin tr&ecirc;n iPhone X c&oacute; dung lượng&nbsp;2716 mAh (lớn hơn cả tr&ecirc;n iPhone 8 Plus) cho bạn sử dụng kh&aacute; ổn trong khoảng một ng&agrave;y li&ecirc;n tục.</p>', '2018-03-06 10:53:53', '2017-12-11 11:21:29', 'uploads/1517424705_77864_368e9d73465c1a75d8a587867555d9e6.jpg', 1, 'Iphone'),
(22, '174503678', 'dell xps 13', 'LapTop', 100, '18000000', NULL, '2018-01-31 19:05:26', '2018-01-24 18:22:22', 'uploads/W2ebIvx8OC2SX6eIav9vaRV4lwvGAkesCNDtSYVT.jpeg', 0, 'Dell'),
(23, '217058530', 'dell xps 15', 'LapTop', 100, '27000000', NULL, '2018-01-31 19:05:38', '2018-01-29 19:26:47', 'uploads/DlQuIDheFNC8cyP35IEVpnvfkNcn3KxDVKRMZmMo.jpeg', 1, 'Dell'),
(24, '261103379', 'Xperia XZ2', 'Điện Thoại', 50, '18000000', '<h2>Xperia XZ2 l&agrave; chiếc flagship mới được&nbsp;<a href="https://www.thegioididong.com/dtdd-sony" target="_blank" title="Điện thoại Sony">Sony</a>&nbsp;giới thiệu tại&nbsp;MWC 2018 với sự thay đổi lớn về thiết kế so với những người tiền nhiệm.</h2>\r\n\r\n<h3><strong>Lột x&aacute;c về thiết kế</strong></h3>\r\n\r\n<p>Với Xperia XZ2, ng&ocirc;n ngữ thiết kế &quot;Omni Balance&quot; trứ danh một thời của Sony đ&atilde; đi v&agrave;o dĩ v&atilde;ng để nhường chỗ cho một thiết kế mới mẻ v&agrave; đột ph&aacute; hơn hẳn.</p>\r\n\r\n<p><a href="https://www.thegioididong.com/images/42/146014/sony-xperia-xz23.jpg" onclick="return false;"><img alt="Lột xác về thiết kế" src="https://cdn4.tgdd.vn/Products/Images/42/146014/sony-xperia-xz23.jpg" title="Lột xác về thiết kế" /></a></p>\r\n\r\n<p>Sự thay đổi lớn nhất của Xperia XZ2 so với&nbsp;<a href="https://www.thegioididong.com/dtdd/sony-xperia-xz1" target="_blank" title="Sony Xperia XZ1" type="Sony Xperia XZ1">Xperia XZ1</a>&nbsp;đ&oacute; ch&iacute;nh l&agrave; mặt lưng đ&atilde; được l&agrave;m cong để gi&uacute;p tay của ch&uacute;ng ta &ocirc;m gọn được chiếc m&aacute;y dễ d&agrave;ng hơn.</p>\r\n\r\n<p><a href="https://www.thegioididong.com/images/42/146014/sony-xperia-xz24.jpg" onclick="return false;"><img alt="Lột xác về thiết kế" src="https://cdn1.tgdd.vn/Products/Images/42/146014/sony-xperia-xz24.jpg" title="Lột xác về thiết kế" /></a></p>\r\n\r\n<p>Chất liệu k&iacute;nh&nbsp;<a href="https://www.thegioididong.com/tin-tuc/gorilla-glass-5-ra-mat-smartphone-roi-tu-do-cao-1-6-met-vo-tu-860409" target="_blank" title="Gorilla Glass 5">Gorilla Glass 5</a>&nbsp;xuất hiện ở cả 2 mặt của chiếc Xperia XZ2 c&ugrave;ng cảm biến v&acirc;n tay được xếp dọc ngay ch&iacute;nh giữa phần mặt lưng tạo n&ecirc;n sự c&acirc;n đối về mặt thẩm mỹ.</p>\r\n\r\n<p>Mặt k&iacute;nh của Xperia XZ2 được l&agrave;m cong 2.5D ở cả 4 cạnh gi&uacute;p phần th&acirc;n m&aacute;y liền lạc hơn hẳn.</p>\r\n\r\n<h3><strong>M&agrave;n h&igrave;nh sắc n&eacute;t</strong></h3>\r\n\r\n<p>Xperia XZ2 cũng l&agrave; chiếc smartphone đầu ti&ecirc;n của Sony sở hữu m&agrave;n h&igrave;nh tr&agrave;n viền 18:9 với k&iacute;ch thước 5.7 inch.</p>\r\n\r\n<p><a href="https://www.thegioididong.com/images/42/146014/sony-xperia-xz26.jpg" onclick="return false;"><img alt="Màn hình sắc nét" src="https://cdn3.tgdd.vn/Products/Images/42/146014/sony-xperia-xz26.jpg" title="Màn hình sắc nét" /></a></p>\r\n\r\n<p>Kh&aacute; đ&aacute;ng tiếc l&agrave;&nbsp;m&agrave;n h&igrave;nh của Xperia XZ2 chỉ dừng lại ở mức&nbsp;<a href="https://www.thegioididong.com/tin-tuc/do-phan-giai-man-hinh-qhd-hd-fullhd-2k-4k-la-gi--592178#2k" target="_blank" title="Độ phân giải Full HD+" type="Độ phân giải Full HD+">Full HD+</a>&nbsp;nhưng lại sở hữu c&ocirc;ng nghệ HDR nổi tiếng tới từ Sony c&ugrave;ng khả năng chuyển đổi những nội dung từ SDR sang HDR ti&ecirc;n tiến.</p>\r\n\r\n<h3><strong>Hiệu năng h&agrave;ng đầu</strong></h3>\r\n\r\n<p>Xperia XZ2 sẽ sử dụng vi xử l&yacute;&nbsp;<a href="https://www.thegioididong.com/tin-tuc/chip-snapdragon-845-manh-hon-25-tap-trung-ai-bao-mat-cao-1048166" target="_blank" title="Snapdragon 845">Snapdragon 845</a>&nbsp;c&ugrave;ng 4 GB RAM v&agrave; 64 GB bộ nhớ trong.</p>\r\n\r\n<p><a href="https://www.thegioididong.com/images/42/146014/sony-xperia-xz25.jpg" onclick="return false;"><img alt="Hiệu năng hàng đầu" src="https://cdn.tgdd.vn/Products/Images/42/146014/sony-xperia-xz25.jpg" title="Hiệu năng hàng đầu" /></a></p>\r\n\r\n<p>Với vi xử l&iacute; n&agrave;y th&igrave; kh&ocirc;ng c&ograve;n g&igrave; nghi ngờ nữa, Xperia XZ2 sẽ l&agrave; một trong những chiếc smartphone mạnh nhất ở thời điểm hiện tại.</p>\r\n\r\n<p><a href="https://www.thegioididong.com/images/42/146014/sony-xperia-xz27.jpg" onclick="return false;"><img alt="Hiệu năng hàng đầu" src="https://cdn2.tgdd.vn/Products/Images/42/146014/sony-xperia-xz27.jpg" title="Hiệu năng hàng đầu" /></a></p>\r\n\r\n<p>M&aacute;y sẽ chạy sẵn&nbsp;<a href="https://www.thegioididong.com/tin-tuc/android-8-la-gi-vi-sao-co-ten-goi-khac-la-android-o--966604" target="_blank" title="Android 8.0">Android 8.0</a>&nbsp;c&ugrave;ng giao diện Sony nhẹ nh&agrave;ng hứa hẹn sẽ đem lại một tốc độ phản hồi ấn tượng.</p>\r\n\r\n<h3><strong>Vẫn chỉ l&agrave; camera đơn</strong></h3>\r\n\r\n<p>Xperia XZ2 được trang bị camera Motion Eye độ phẩn giải 19 MP v&agrave; chưa c&oacute; camera k&eacute;p.</p>\r\n\r\n<p><a href="https://www.thegioididong.com/images/42/146014/sony-xperia-xz22.jpg" onclick="return false;"><img alt="Vẫn chỉ là camera đơn" src="https://cdn4.tgdd.vn/Products/Images/42/146014/sony-xperia-xz22.jpg" title="Vẫn chỉ là camera đơn" /></a></p>\r\n\r\n<p>Một cải tiến đ&aacute;ng gi&aacute; tr&ecirc;n XZ2 l&agrave; m&aacute;y c&oacute; thể quay được c&aacute;c thước phim si&ecirc;u chậm, l&ecirc;n tới 960 khung h&igrave;nh/gi&acirc;y ở độ ph&acirc;n giải Full HD.</p>\r\n\r\n<p><a href="https://www.thegioididong.com/images/42/146014/sony-xperia-xz21.jpg" onclick="return false;"><img alt="Vẫn chỉ là camera đơn" src="https://cdn1.tgdd.vn/Products/Images/42/146014/sony-xperia-xz21.jpg" title="Vẫn chỉ là camera đơn" /></a></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute; camera selfie của m&aacute;y c&oacute; độ ph&acirc;n giải 5 MP, nghe qua kh&ocirc;ng mấy ấn tượng nhưng đổi lại, bạn c&oacute; thể sử dụng ứng dụng 3D Creator để tạo ra khu&ocirc;n mặt 3D của m&igrave;nh bằng cụm camera selfie n&agrave;y.</p>\r\n\r\n<h3><strong>&Acirc;m thanh h&agrave;ng đầu</strong></h3>\r\n\r\n<p>Xperia XZ2 lần n&agrave;y đ&atilde; được Sony bỏ đi cổng cắm tai nghe 3.5 mm v&agrave; theo Sony th&igrave; điều n&agrave;y gi&uacute;p h&atilde;ng c&oacute; thể đem lại chất lượng &acirc;m thanh tốt hơn khi nghe qua tai nghe.</p>\r\n\r\n<p><a href="https://www.thegioididong.com/images/42/146014/sony-xperia-xz28.jpg" onclick="return false;"><img alt="Âm thanh hàng đầu" src="https://cdn3.tgdd.vn/Products/Images/42/146014/sony-xperia-xz28.jpg" title="Âm thanh hàng đầu" /></a></p>\r\n\r\n<p>Ngo&agrave;i ra loa ngo&agrave;i của m&aacute;y cũng rất ấn tượng với&nbsp;c&ocirc;ng nghệ S-Force Front Surround System đến từ Sony, qua đ&oacute; gi&uacute;p Xperia XZ2 sẽ c&oacute; &acirc;m lượng lớn hơn 20% so với&nbsp;<a href="https://www.thegioididong.com/dtdd/sony-xperia-xz1" target="_blank" title="Xperia XZ1">Xperia XZ1</a>.</p>', '2018-03-06 11:53:04', '2018-01-30 08:45:14', 'uploads/1520337184_2232509_482ce314753853d5c881aa5cf9a123b6.jpeg', 1, 'Sony'),
(25, '870999836', 'iphone 8 plus', 'Điện Thoại', 100, '25000000', NULL, '2018-01-31 19:03:08', '2018-01-30 17:36:28', 'uploads/1517425388_8457621_5c5812be40d2a72e4abb1fae2a7ef87f.jpeg', 1, 'Iphone'),
(27, '334008535', 'bfda', 'Điện Thoại', 12, '100000', NULL, '2018-01-31 18:59:17', '2018-01-30 18:01:20', 'uploads/1517425157_9289850_e1e83affa4b11e375c0d4841c492f20a.jpg', 0, NULL),
(29, '386391354', 'Galaxy S9', 'Điện Thoại', 20, '23000000', '<p><img alt="" src="/ckfinder/userfiles/images/sad.jpg" style="height:720px; width:1280px" /></p>\r\n\r\n<p>đ&acirc;y l&agrave; m&ocirc; tả chi tiết galaxy s9</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="" src="/ckfinder/userfiles/images/180225113702-samsung-galaxy-s9-s9-780x439.jpg" style="height:439px; width:780px" /></p>', '2018-03-06 11:17:32', '2018-03-01 17:04:17', 'uploads/Galaxy S9_1520277542_706503_a93422105638f01302f1c9069cabf889.jpg', 1, 'SamSung');

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
(1, 'Tên Shop', 'Mỗ Lao, Hà Đông, Hà Nội, Việt Nam', '0981639326', 'anhsonit96@gmail.com', 'Mô Tả', NULL, NULL);

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
(2, '123546891', 'LapTop'),
(12, '157820801', 'Loa'),
(17, '183250989', 'Chuột'),
(18, '212702717', 'Điện Thoại'),
(19, '215359545', 'Máy Tính Bảng'),
(20, '350817952', 'Tai Nghe');

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
(19, '2018_03_08_081046_create_lienhe_table', 4);

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
(3, '469277383', 'Iphone', '2018-03-06 03:32:02', '2018-03-06 03:32:02'),
(4, '413362186', 'Dell', '2018-03-06 03:32:44', '2018-03-06 03:32:44'),
(5, '177527116', 'Sony', '2018-03-06 03:32:58', '2018-03-06 03:32:58'),
(6, '347495512', 'Asus', '2018-03-06 10:44:37', '2018-03-06 10:44:37'),
(7, '412180653', 'LG', '2018-03-06 10:45:21', '2018-03-06 10:45:21'),
(8, '377604874', 'Xiaomi', '2018-03-06 10:46:12', '2018-03-06 10:46:12'),
(9, '303203846', 'HP', '2018-03-06 10:47:23', '2018-03-06 10:47:23');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `loaihanghoa`
--
ALTER TABLE `loaihanghoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
