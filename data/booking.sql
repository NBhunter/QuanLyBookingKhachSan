-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 05, 2022 at 06:58 AM
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
  `id_nguoidung` int(11) NOT NULL,
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
  `sodienthoai` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `loainguoidung` varchar(255) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `hoten`, `sodienthoai`, `email`, `matkhau`, `loainguoidung`, `trangthai`, `hinhanh`) VALUES
(1, 'abc', 12345, 'abc@gmail.com', 'abc', '1', 1, '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `phong`
--
ALTER TABLE `phong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
