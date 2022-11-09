-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 09, 2022 lúc 02:42 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_nguoidung` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `id_phong` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_khachhang` (`id_khachhang`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `datphong`
--

INSERT INTO `datphong` (`id`, `id_nguoidung`, `id_khachhang`, `id_phong`, `trangthai`) VALUES
(1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donphong_ct`
--

DROP TABLE IF EXISTS `donphong_ct`;
CREATE TABLE IF NOT EXISTS `donphong_ct` (
  `id` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `id_phong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  KEY `idkhachhang` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `donphong_ct`
--

INSERT INTO `donphong_ct` (`id`, `id_khachhang`, `id_phong`, `dongia`, `soluong`, `thanhtien`) VALUES
(1, 1, 1, 800000, 1, 800000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `id_nguoidung` int(13) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `cccd` varchar(255) NOT NULL,
  `tuoi` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2147483648 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `id_nguoidung`, `hoten`, `sodienthoai`, `cccd`, `tuoi`) VALUES
(1, 1, 'Nguyễn Văn A', 945839248, '08980123456', 24),
(9093127, 9093127, 'Hoàng Khang', 988848654, '1234567891012', 22),
(1109093147, 1109093147, 'Hoàng Khang', 988848654, '1234567891012', 22),
(1109093854, 1109093854, 'Nguyen Phuc', 1639998182, '1234561278910', 25),
(1109094029, 1109094029, 'Nguyen Phuc', 1639998182, '1234561278910', 25);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

DROP TABLE IF EXISTS `nguoidung`;
CREATE TABLE IF NOT EXISTS `nguoidung` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(255) NOT NULL,
  `chucvu` varchar(255) NOT NULL,
  `mssv` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `loainguoidung` varchar(255) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `linkgithub` varchar(50) NOT NULL,
  `thongtin` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2147483648 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `hoten`, `chucvu`, `mssv`, `email`, `matkhau`, `loainguoidung`, `trangthai`, `hinhanh`, `linkgithub`, `thongtin`) VALUES
(1, 'Nguyễn Ra Băng', 'CEO', 'DTH195127 - DH20TH1', 'nrbang_20th@student.agu.edu.vn', '202cb962ac59075b964b07152d234b70', '1', 1, 'RB.png', 'https://github.com/NBhunter', ''),
(2, 'Thái Hoàng Khang', 'Director', 'DTH195144 - DH20TH1', 'thkhang_20th@student.agu.edu.vn', '202cb962ac59075b964b07152d234b70', '1', 1, 'HK.png', 'https://github.com/hoangkhang21', ''),
(3, 'Nguyễn Minh Ngọc', 'CEO', 'DTH195160 - DH20TH1', 'nmngoc_20th@student.agu.edu.vn', '202cb962ac59075b964b07152d234b70', '1', 1, 'MN.png', 'https://github.com/NgocMinh66', ''),
(4, 'Bùi Huỳnh Kim Cương', 'Designer', 'DTH195253 - DH20TH1', 'bhkcuong_20th@student.agu.edu.vn', '202cb962ac59075b964b07152d234b70', '1', 1, 'KC.png', 'https://github.com/kcuong20th', ''),
(5, 'Trịnh Hoàng Đông Nghi', 'Designer', 'DTH195313 - DH20TH1', 'thdnghi_20th@student.agu.edu.vn', '202cb962ac59075b964b07152d234b70', '1', 1, 'DN.png', 'https://github.com/thdngh', ''),
(9093127, 'Hoàng Khang', '', '', 'hoangkhang123@gmail.com', '202cb962ac59075b964b07152d234b70', '2', 1, '', '', ''),
(1109093147, 'Hoàng Khang', '', '', 'hoangkhang123@gmail.com', '202cb962ac59075b964b07152d234b70', '2', 1, '', '', ''),
(1109093854, 'Nguyen Phuc', '', '', 'nguyenthimyanh1809@gmail.com', '202cb962ac59075b964b07152d234b70', '2', 1, '', '', ''),
(1109094029, 'Nguyen Phuc', '', '', 'nguyenthimyanh1809@gmail.com', '202cb962ac59075b964b07152d234b70', '2', 1, '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

DROP TABLE IF EXISTS `phong`;
CREATE TABLE IF NOT EXISTS `phong` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_nguoidung` int(11) NOT NULL,
  `loaiphong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`id`, `id_nguoidung`, `loaiphong`, `gia`) VALUES
(1, 1, 2, 800000);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `datphong`
--
ALTER TABLE `datphong`
  ADD CONSTRAINT `id_khachhang` FOREIGN KEY (`id_khachhang`) REFERENCES `khachhang` (`id`),
  ADD CONSTRAINT `id_phong` FOREIGN KEY (`id`) REFERENCES `phong` (`id`);

--
-- Các ràng buộc cho bảng `donphong_ct`
--
ALTER TABLE `donphong_ct`
  ADD CONSTRAINT `idkhachhang` FOREIGN KEY (`id`) REFERENCES `khachhang` (`id`),
  ADD CONSTRAINT `idphong` FOREIGN KEY (`id`) REFERENCES `phong` (`id`);

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `id_nguoidung` FOREIGN KEY (`id`) REFERENCES `nguoidung` (`id`);

--
-- Các ràng buộc cho bảng `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `idnguoidung` FOREIGN KEY (`id`) REFERENCES `nguoidung` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
