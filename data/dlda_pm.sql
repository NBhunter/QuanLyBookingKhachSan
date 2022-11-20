-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 20, 2022 at 05:53 AM
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
-- Database: `dlda_pm`
--

-- --------------------------------------------------------

--
-- Table structure for table `datphong`
--

CREATE TABLE `datphong` (
  `id` int(11) NOT NULL,
  `id_nguoidung` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `id_phong` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `donphong_ct`
--

CREATE TABLE `donphong_ct` (
  `id` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `id_phong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `idnguoidung` int(11) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `cccd` varchar(255) NOT NULL,
  `tuoi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(11) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `sodienthoai` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `loainguoidung` varchar(255) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `linkgithub` varchar(200) DEFAULT NULL,
  `thongtin` varchar(300) DEFAULT NULL,
  `chucvu` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `hoten`, `sodienthoai`, `email`, `matkhau`, `loainguoidung`, `trangthai`, `hinhanh`, `linkgithub`, `thongtin`, `chucvu`) VALUES
(1, 'abc', 12345, 'abc@gmail.com', 'abc', '2', 1, '', '0', '', ''),
(2, 'Nguyễn Ra Băng', 988848653, 'bangnguyen01072001@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1', 1, 'RB.png', 'https://github.com/NBhunter', 'DTH195127 - DH20TH1', 'CEO'),
(3, 'Thái Hoàng Khang', 988848653, 'thkhang_20th@student.agu.edu.vn', '827ccb0eea8a706c4c34a16891f84e7b', '1', 1, 'HK.png', 'https://github.com/hoangkhang21', 'DTH195144 - DH20TH1', 'DESIGNER'),
(4, 'Nguyễn Minh Ngọc', 988848653, 'nmngoc_20th@student.agu.edu.vn', '827ccb0eea8a706c4c34a16891f84e7b', '1', 1, 'MN.png', 'https://github.com/NgocMinh66', 'DTH195160 - DH20TH1', 'FOUNDER'),
(5, 'Trịnh Hoàng Đông Nghi', 988848653, 'thdnghi_20th@student.agu.edu.vn', '827ccb0eea8a706c4c34a16891f84e7b', '1', 1, 'DN.png', 'https://github.com/thdngh', 'DTH195313 - DH20TH1', 'CONTENT'),
(6, 'Bùi Huỳnh Kim Cương', 988848653, 'bhkcuong_20th@student.agu.edu.vn', '827ccb0eea8a706c4c34a16891f84e7b', '1', 1, 'KC.png', 'https://github.com/kcuong20th', 'DTH195253 - DH20TH1', 'TESTER');

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `id` int(11) NOT NULL,
  `loaiphong` int(11) NOT NULL,
  `TenPhong` varchar(50) NOT NULL,
  `gia` int(11) NOT NULL,
  `mota` text NOT NULL,
  `motangan` varchar(100) NOT NULL,
  `hinhanh` varchar(30) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`id`, `loaiphong`, `TenPhong`, `gia`, `mota`, `motangan`, `hinhanh`, `trangthai`) VALUES
(445312, 1, 'Phòng Đơn 01', 225000, 'Phòng 1 giường đơn rộng rãi, thoáng mát, đẹp đẽ, đầy đủ tiện nghi.\r\n– Ngắm toàn bộ thành phố hà giang, phòng thoáng, đẹp, tiện nghi sang trọng, hiện đại.\r\n– Các trang thiết bị và dịch vụ trong phòng:\r\nPhòng ngủ\r\nĐiều hòa (2 chiều)\r\nĂn sáng theo yêu cầu\r\nHệ thống nước nóng\r\nĐiện thoại bàn\r\nTV LCD 40” Samsung có kết nối Internet, truyền hình cáp\r\nWifi miễn phí\r\nChăn, ga, gối đệm Hàn Quốc\r\nDép mang trong phòng.\r\nMáy sấy tóc', 'Phòng 1 giường đơn rộng rãi, thoáng mát, đẹp đẽ, đầy đủ tiện nghi.', 'phongdon_1.jpg', 1),
(445313, 1, 'Phòng Đơn 02', 225000, 'Phòng 1 giường đơn rộng rãi, thoáng mát, đẹp đẽ, đầy đủ tiện nghi.\r\n– Ngắm toàn bộ thành phố hà giang, phòng thoáng, đẹp, tiện nghi sang trọng, hiện đại.\r\n– Các trang thiết bị và dịch vụ trong phòng:\r\nPhòng ngủ\r\nĐiều hòa (2 chiều)\r\nĂn sáng theo yêu cầu\r\nHệ thống nước nóng\r\nĐiện thoại bàn\r\nTV LCD 40” Samsung có kết nối Internet, truyền hình cáp\r\nWifi miễn phí\r\nChăn, ga, gối đệm Hàn Quốc\r\nDép mang trong phòng.\r\nMáy sấy tóc', '', 'phongdon_1.jpg', 0),
(445314, 2, 'Phòng Đôi 01', 800000, 'Phòng đôi cho 3-4 người rộng rãi, thoáng mát, đẹp đẽ, có view nhìn ra thành phố và có đầy đủ tiện nghi.\r\n– Các trang thiết bị và dịch vụ trong phòng:\r\nPhòng ngủ\r\nĐiều hòa (2 chiều)\r\nĂn sáng theo yêu cầu\r\nHệ thống nước nóng\r\nĐiện thoại bàn\r\nTV LCD 40” Samsung có kết nối Internet, truyền hình cáp\r\nWifi miễn phí\r\nChăn, ga, gối đệm Hàn Quốc\r\nDép mang trong phòng.\r\nMáy sấy tóc', '', '', 1),
(445315, 2, 'Phòng Đôi 02', 800000, 'Phòng đôi cho 3-4 người rộng rãi, thoáng mát, đẹp đẽ, có view nhìn ra thành phố và có đầy đủ tiện nghi.\r\n– Các trang thiết bị và dịch vụ trong phòng:\r\nPhòng ngủ\r\nĐiều hòa (2 chiều)\r\nĂn sáng theo yêu cầu\r\nHệ thống nước nóng\r\nĐiện thoại bàn\r\nTV LCD 40” Samsung có kết nối Internet, truyền hình cáp\r\nWifi miễn phí\r\nChăn, ga, gối đệm Hàn Quốc\r\nDép mang trong phòng.', '', '', 0),
(445316, 3, 'Phòng Tập Thể 01', 2000000, 'Phòng tập thể cho nhóm bạn từ 5-6 người rộng rãi, thoáng mát, đẹp đẽ, có view nhìn ra thành phố và có đầy đủ tiện nghi.\r\n– Các trang thiết bị và dịch vụ trong phòng:\r\nPhòng ngủ\r\nĐiều hòa (2 chiều)\r\nĂn sáng theo yêu cầu\r\nHệ thống nước nóng\r\nĐiện thoại bàn\r\nTV LCD 40” Samsung có kết nối Internet, truyền hình cáp\r\nWifi miễn phí\r\nChăn, ga, gối đệm Hàn Quốc\r\nDép mang trong phòng.', '', '', 1),
(445317, 3, 'Phòng Tập Thể 02', 2000000, 'Phòng tập thể cho nhóm bạn từ 5-6 người rộng rãi, thoáng mát, đẹp đẽ, có view nhìn ra thành phố và có đầy đủ tiện nghi.\r\n– Các trang thiết bị và dịch vụ trong phòng:\r\nPhòng ngủ\r\nĐiều hòa (2 chiều)\r\nĂn sáng theo yêu cầu\r\nHệ thống nước nóng\r\nĐiện thoại bàn\r\nTV LCD 40” Samsung có kết nối Internet, truyền hình cáp\r\nWifi miễn phí\r\nChăn, ga, gối đệm Hàn Quốc\r\nDép mang trong phòng.', '', '', 0);

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
  ADD KEY `idkhachhang` (`id`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
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
-- AUTO_INCREMENT for table `datphong`
--
ALTER TABLE `datphong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `phong`
--
ALTER TABLE `phong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=445318;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `datphong`
--
ALTER TABLE `datphong`
  ADD CONSTRAINT `id_khachhang` FOREIGN KEY (`id_khachhang`) REFERENCES `khachhang` (`id`),
  ADD CONSTRAINT `id_phong` FOREIGN KEY (`id`) REFERENCES `phong` (`id`);

--
-- Constraints for table `donphong_ct`
--
ALTER TABLE `donphong_ct`
  ADD CONSTRAINT `idkhachhang` FOREIGN KEY (`id`) REFERENCES `khachhang` (`id`),
  ADD CONSTRAINT `idphong` FOREIGN KEY (`id`) REFERENCES `phong` (`id`);

--
-- Constraints for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `id_nguoidung` FOREIGN KEY (`id`) REFERENCES `nguoidung` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
