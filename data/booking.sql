-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 25, 2022 at 11:58 PM
-- Server version: 5.7.25
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `datphong`
--

CREATE TABLE `datphong` (
  `id` int(30) NOT NULL,
  `id_nguoidung` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `id_phong` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `ngaynhanphong` date NOT NULL,
  `ngaytraphong` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `datphong`
--

INSERT INTO `datphong` (`id`, `id_nguoidung`, `id_khachhang`, `id_phong`, `status`, `ngaynhanphong`, `ngaytraphong`) VALUES
(1223082846, 1222080926, 1222080926, 445314, 2, '2022-12-24', '2022-12-27');

-- --------------------------------------------------------

--
-- Table structure for table `donphong_ct`
--

CREATE TABLE `donphong_ct` (
  `id` int(11) NOT NULL,
  `id_datphong` int(50) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `id_phong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL,
  `songay` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donphong_ct`
--

INSERT INTO `donphong_ct` (`id`, `id_datphong`, `id_khachhang`, `id_phong`, `dongia`, `songay`, `thanhtien`) VALUES
(1, 1223082846, 1222080926, 445314, 570000, 3, 1710000);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `idnguoidung` int(11) NOT NULL,
  `hoten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `cccd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tuoi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id`, `idnguoidung`, `hoten`, `sodienthoai`, `cccd`, `tuoi`) VALUES
(1222080926, 1222080926, 'bang', 988848654, '09999999999', 22),
(1222081150, 1222081150, 'bang', 988848653, '09999999999', 23);

-- --------------------------------------------------------

--
-- Table structure for table `loaiphong`
--

CREATE TABLE `loaiphong` (
  `id` int(11) NOT NULL,
  `TenLoai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaiphong`
--

INSERT INTO `loaiphong` (`id`, `TenLoai`) VALUES
(1, 'Phòng Đơn'),
(2, 'Phòng đôi'),
(3, 'Phòng 4'),
(4, 'Phòng Vip');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(11) NOT NULL,
  `hoten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loainguoidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkgithub` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thongtin` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chucvu` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nguoidung`
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
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `id` int(11) NOT NULL,
  `loaiphong` int(11) NOT NULL,
  `TenPhong` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `mota` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `motangan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`id`, `loaiphong`, `TenPhong`, `gia`, `mota`, `motangan`, `hinhanh`, `trangthai`) VALUES
(445312, 1, 'Phòng Đơn 01', 225000, 'Phòng 1 giường đơn rộng rãi , thoáng mát , đẹp đẽ , đầy đủ tiện nghi.\r\n– Ngắm toàn bộ thành phố hà giang, phòng thoáng , đẹp , tiện nghi sang trọng , hiện đại.\r\n– Các trang thiết bị và dịch vụ trong phòng:\r\nPhòng ngủ\r\nĐiều hòa (2 chiều)\r\nHệ thống nước nóng\r\nTV LCD 40” Samsung có kết nối Internet, truyền hình cáp\r\nWifi miễn phí.', 'Phòng 1 giường đơn rộng rãi , thoáng mát, đẹp đẽ , đầy đủ tiện nghi.', 'PDON1.jpg', 1),
(445313, 1, 'Phòng Đơn 02', 225000, 'Phòng 1 giường đơn rộng rãi, thoáng mát, đẹp đẽ, đầy đủ tiện nghi.\r\n– Ngắm toàn bộ thành phố hà giang, phòng thoáng, đẹp, tiện nghi sang trọng, hiện đại.\r\n– Các trang thiết bị và dịch vụ trong phòng:\r\nPhòng ngủ\r\nĐiều hòa (2 chiều)\r\nĂn sáng theo yêu cầu\r\nHệ thống nước nóng\r\nĐiện thoại bàn\r\nTV LCD 40” Samsung có kết nối Internet, truyền hình cáp\r\nWifi miễn phí\r\nChăn, ga, gối đệm Hàn Quốc\r\nDép mang trong phòng.\r\nMáy sấy tóc', 'Phòng đang bảo trì', 'PDON1.jpg', 0),
(445314, 2, 'Phòng Đôi 01', 570000, 'Phòng dành cho gia đình từ 4 - 5 người . Đầy đủ các tiện nghi', 'Phòng dành cho gia đình  rộng rãi , thoáng mát, đẹp đẽ , đầy đủ tiện nghi.', 'PDOI1.jpg', 1),
(445315, 4, 'Phòng President 01', 1700000, 'Phòng VIP có view nhìn ra biển . Đầy đủ các tiện ích ( bàn làm việc , sofa , phòng khách , ban công ...)', 'Phòng VIP ơn rộng rãi , thoáng mát, đẹp đẽ , đầy đủ tiện nghi , có ban công , phòng khách...', 'PPRE2.jpg', 1),
(445316, 4, 'Phòng President 02', 1900000, 'Phòng VIP có view nhìn ra biển . Đầy đủ các tiện ích ( bàn làm việc , sofa , phòng khách , ban công ...)', 'Phòng VIP ơn rộng rãi , thoáng mát, đẹp đẽ , đầy đủ tiện nghi , có ban công , phòng khách...', 'PPRE3.jpg', 1),
(445317, 4, 'Phòng President 03', 1700000, 'Phòng VIP có view nhìn ra biển . Đầy đủ các tiện ích ( bàn làm việc , sofa , phòng khách , ban công ...)', 'Phòng VIP ơn rộng rãi , thoáng mát, đẹp đẽ , đầy đủ tiện nghi , có ban công , phòng khách...', 'PPRE4.png', 1),
(445318, 2, 'Phòng Đôi 02', 600000, 'Phòng đôi phù hợp với gia đình 4-6 người\r\n– Ngắm toàn bộ thành phố hà giang, phòng thoáng , đẹp , tiện nghi sang trọng , hiện đại.\r\n– Các trang thiết bị và dịch vụ trong phòng:\r\nPhòng ngủ\r\nĐiều hòa (2 chiều)\r\nHệ thống nước nóng\r\nTV LCD 40” Samsung có kết nối Internet, truyền hình cáp\r\nWifi miễn phí.', 'Phòng đôi rộng rãi , thoáng mát, đẹp đẽ , đầy đủ tiện nghi.', 'PDO2.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datphong`
--
ALTER TABLE `datphong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_khachhang` (`id_khachhang`);

--
-- Indexes for table `donphong_ct`
--
ALTER TABLE `donphong_ct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaiphong`
--
ALTER TABLE `loaiphong`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donphong_ct`
--
ALTER TABLE `donphong_ct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1222081151;

--
-- AUTO_INCREMENT for table `loaiphong`
--
ALTER TABLE `loaiphong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1222081151;

--
-- AUTO_INCREMENT for table `phong`
--
ALTER TABLE `phong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=445319;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `id_nguoidung` FOREIGN KEY (`id`) REFERENCES `nguoidung` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
