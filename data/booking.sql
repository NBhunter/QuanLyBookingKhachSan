-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 08, 2022 at 01:16 PM
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
  `id` int(11) NOT NULL,
  `id_nguoidung` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `id_phong` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `datphong`
--

INSERT INTO `datphong` (`id`, `id_nguoidung`, `id_khachhang`, `id_phong`, `trangthai`) VALUES
(1, 1, 1, 1, 1);

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

--
-- Dumping data for table `donphong_ct`
--

INSERT INTO `donphong_ct` (`id`, `id_khachhang`, `id_phong`, `dongia`, `soluong`, `thanhtien`) VALUES
(1, 1, 1, 800000, 1, 800000);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `id_nguoidung` int(11) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `cccd` varchar(255) NOT NULL,
  `tuoi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id`, `id_nguoidung`, `hoten`, `sodienthoai`, `cccd`, `tuoi`) VALUES
(1, 1, 'Nguyễn Văn A', 945839248, '08980123456', 24);

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(11) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `chucvu` varchar(255) NOT NULL,
  `mssv` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `loainguoidung` varchar(255) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `linkgithub` varchar(50) NOT NULL,
  `thongtin` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `hoten`, `chucvu`, `mssv`, `email`, `matkhau`, `loainguoidung`, `trangthai`, `hinhanh`, `linkgithub`, `thongtin`) VALUES
(1, 'Nguyễn Ra Băng', 'CEO', 'DTH195127 - DH20TH1', 'nrbang_20th@student.agu.edu.vn', 'abc', '1', 1, 'RB.png', 'https://github.com/NBhunter', ''),
(2, 'Thái Hoàng Khang', 'Director', 'DTH195144 - DH20TH1', 'thkhang_20th@student.agu.edu.vn', 'abc', '1', 1, 'HK.png', 'https://github.com/hoangkhang21', ''),
(3, 'Nguyễn Minh Ngọc', 'CEO', 'DTH195160 - DH20TH1', 'nmngoc_20th@student.agu.edu.vn', 'abc', '1', 1, 'MN.png', 'https://github.com/NgocMinh66', ''),
(4, 'Bùi Huỳnh Kim Cương', 'Designer', 'DTH195253 - DH20TH1', 'bhkcuong_20th@student.agu.edu.vn', 'abc', '1', 1, 'KC.png', 'https://github.com/kcuong20th', ''),
(5, 'Trịnh Hoàng Đông Nghi', 'Designer', 'DTH195313 - DH20TH1', 'thdnghi_20th@student.agu.edu.vn', 'abc', '1', 1, 'DN.png', 'https://github.com/thdngh', '');

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `id` int(11) NOT NULL,
  `id_nguoidung` int(11) NOT NULL,
  `loaiphong` int(11) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`id`, `id_nguoidung`, `loaiphong`, `gia`) VALUES
(1, 1, 2, 800000);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `phong`
--
ALTER TABLE `phong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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

--
-- Constraints for table `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `idnguoidung` FOREIGN KEY (`id`) REFERENCES `nguoidung` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
