-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 24, 2022 lúc 07:37 AM
-- Phiên bản máy phục vụ: 5.7.36
-- Phiên bản PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `booking`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `datphong`
--

DROP TABLE IF EXISTS `datphong`;
CREATE TABLE IF NOT EXISTS `datphong` (
  `id` int(30) NOT NULL,
  `id_nguoidung` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `id_phong` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `ngaynhanphong` date NOT NULL,
  `ngaytraphong` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_khachhang` (`id_khachhang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `datphong`
--

INSERT INTO `datphong` (`id`, `id_nguoidung`, `id_khachhang`, `id_phong`, `status`, `ngaynhanphong`, `ngaytraphong`) VALUES
(1223082846, 1222080926, 1222080926, 445314, 2, '2022-12-24', '2022-12-27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donphong_ct`
--

DROP TABLE IF EXISTS `donphong_ct`;
CREATE TABLE IF NOT EXISTS `donphong_ct` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_datphong` int(50) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `id_phong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL,
  `songay` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donphong_ct`
--

INSERT INTO `donphong_ct` (`id`, `id_datphong`, `id_khachhang`, `id_phong`, `dongia`, `songay`, `thanhtien`) VALUES
(1, 1223082846, 1222080926, 445314, 570000, 3, 1710000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idnguoidung` int(11) NOT NULL,
  `hoten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `cccd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tuoi` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1222081151 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `idnguoidung`, `hoten`, `sodienthoai`, `cccd`, `tuoi`) VALUES
(1222080926, 1222080926, 'bang', 988848654, '09999999999', 22),
(1222081150, 1222081150, 'bang', 988848653, '09999999999', 23);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaiphong`
--

DROP TABLE IF EXISTS `loaiphong`;
CREATE TABLE IF NOT EXISTS `loaiphong` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `TenLoai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaiphong`
--

INSERT INTO `loaiphong` (`id`, `TenLoai`) VALUES
(1, 'Phòng Đơn'),
(2, 'Phòng đôi'),
(3, 'Phòng 4'),
(4, 'Phòng Vip');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

DROP TABLE IF EXISTS `nguoidung`;
CREATE TABLE IF NOT EXISTS `nguoidung` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loainguoidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkgithub` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thongtin` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chucvu` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1222081151 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `hoten`, `sodienthoai`, `email`, `matkhau`, `loainguoidung`, `trangthai`, `hinhanh`, `linkgithub`, `thongtin`, `chucvu`) VALUES
(1, 'abc', 12345, 'abc@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2', 1, '', '0', '', ''),
(2, 'Nguyễn Ra Băng', 988848653, 'bangnguyen01072001@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1', 1, 'RB.png', 'https://github.com/NBhunter', 'DTH195127 - DH20TH1', 'CEO'),
(3, 'Thái Hoàng Khang', 988848653, 'thkhang_20th@student.agu.edu.vn', '827ccb0eea8a706c4c34a16891f84e7b', '1', 1, 'HK.png', 'https://github.com/hoangkhang21', 'DTH195144 - DH20TH1', 'DESIGNER'),
(4, 'Nguyễn Minh Ngọc', 988848653, 'nmngoc_20th@student.agu.edu.vn', '827ccb0eea8a706c4c34a16891f84e7b', '1', 1, 'MN.png', 'https://github.com/NgocMinh66', 'DTH195160 - DH20TH1', 'FOUNDER'),
(5, 'Trịnh Hoàng Đông Nghi', 988848653, 'thdnghi_20th@student.agu.edu.vn', '827ccb0eea8a706c4c34a16891f84e7b', '1', 1, 'DN.png', 'https://github.com/thdngh', 'DTH195313 - DH20TH1', 'CONTENT'),
(6, 'Bùi Huỳnh Kim Cương', 988848653, 'bhkcuong_20th@student.agu.edu.vn', '827ccb0eea8a706c4c34a16891f84e7b', '1', 1, 'KC.png', 'https://github.com/kcuong20th', 'DTH195253 - DH20TH1', 'TESTER'),
(1222080926, 'bang', NULL, 'bangnguyen@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2', 1, NULL, NULL, NULL, NULL),
(1222081150, 'bang', NULL, 'bangnguyen01072001@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

DROP TABLE IF EXISTS `phong`;
CREATE TABLE IF NOT EXISTS `phong` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `loaiphong` int(11) NOT NULL,
  `TenPhong` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `mota` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `motangan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=445318 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`id`, `loaiphong`, `TenPhong`, `gia`, `mota`, `motangan`, `hinhanh`, `trangthai`) VALUES
(445312, 1, 'Phòng Đơn 01', 225000, 'Phòng 1 giường đơn rộng rãi, thoáng mát, đẹp đẽ, đầy đủ tiện nghi.\r\n– Ngắm toàn bộ thành phố hà giang, phòng thoáng, đẹp, tiện nghi sang trọng, hiện đại.\r\n– Các trang thiết bị và dịch vụ trong phòng:\r\nPhòng ngủ\r\nĐiều hòa (2 chiều)\r\nĂn sáng theo yêu cầu\r\nHệ thống nước nóng\r\nĐiện thoại bàn\r\nTV LCD 40” Samsung có kết nối Internet, truyền hình cáp\r\nWifi miễn phí\r\nChăn, ga, gối đệm Hàn Quốc\r\nDép mang trong phòng.\r\nMáy sấy tóc', 'Phòng 1 giường đơn rộng rãi, thoáng mát, đẹp đẽ, đầy đủ tiện nghi.', 'phongdon_1.jpg', 1),
(445313, 1, 'Phòng Đơn 02', 225000, 'Phòng 1 giường đơn rộng rãi, thoáng mát, đẹp đẽ, đầy đủ tiện nghi.\r\n– Ngắm toàn bộ thành phố hà giang, phòng thoáng, đẹp, tiện nghi sang trọng, hiện đại.\r\n– Các trang thiết bị và dịch vụ trong phòng:\r\nPhòng ngủ\r\nĐiều hòa (2 chiều)\r\nĂn sáng theo yêu cầu\r\nHệ thống nước nóng\r\nĐiện thoại bàn\r\nTV LCD 40” Samsung có kết nối Internet, truyền hình cáp\r\nWifi miễn phí\r\nChăn, ga, gối đệm Hàn Quốc\r\nDép mang trong phòng.\r\nMáy sấy tóc', 'Phong Bảo Trì', 'phongdon_1.jpg', 0),
(445314, 2, 'Phòng Đôi giường lớn 01', 570000, 'Phòng dành cho gia đình từ 4 - 8 ngừoi', 'Phòng dành cho gia đình', 'phongdoilon.jpg', 1),
(445315, 4, 'Phòng Hoàng Đế ss1', 1700000, 'phòng siêu cấp víp bờ rồ vi ai bi ', 'phòng bự lắm,gọi thêm mấy em đào cho đông', 'phongvip.jpg', 1),
(445316, 4, 'Phòng Hoàng Đế ss1', 1900000, 'phòng siêu cấp víp bờ rồ vi ai bi, với cái giường dài 2 mét rữoi', 'phòng bự lắm, gọi thêm chục em đào vẫn còn rộng', 'phongvip2.jpg', 1),
(445317, 4, 'Phòng Hoàng Đế ss3', 1700000, 'phòng siêu cấp víp bờ rồ vi ai bi, với cái giường dài 2 mét rữoi', 'phòng bự lắm', 'phongvip.jpg', 1);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `id_nguoidung` FOREIGN KEY (`id`) REFERENCES `nguoidung` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
