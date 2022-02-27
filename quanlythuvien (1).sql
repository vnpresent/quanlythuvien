-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 27, 2022 lúc 11:01 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlythuvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(11) NOT NULL,
  `Username` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `HoTen` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NamSinh` date DEFAULT NULL,
  `GioiTinh` varchar(4) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ChucDanh` varchar(11) COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT '0',
  `Email` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `DienThoai` varchar(14) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `token` varchar(18) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `Username`, `password`, `HoTen`, `NamSinh`, `GioiTinh`, `ChucDanh`, `Email`, `DienThoai`, `token`, `status`) VALUES
(1, 'present', 'present', 'Phuong', NULL, NULL, 'admin', '', '0', 'snjfhsjdjfjfjdiiss', 1),
(2, 'ngdung', 'ngdung', 'Nguoi Dung', NULL, NULL, '0', '', '0', '', 0),
(3, 'phuong2kpresenta', 'phuong2kpresenta', 'phuong2kpresenta', NULL, NULL, '0', '', '0', 'wFuDbJUl6RQxgyI5XF', 0),
(4, 'aphuong2kpresenta', 'aphuong2kpresenta', 'aphuong2kpresenta', '2022-02-10', 'nam', '0', 'phuong2k88@gmail.com', '0', '9w6IIjGIhfUu9jDcdY', 1),
(5, 'phuong', 'phuong', 'Phuong Viet', '2022-02-08', 'nam', '0', 'phuong2k88@gmail.com', '0337646311', 'snjfhsjdjfjfjdiis1', 1),
(6, 'abc', 'abc', '', '0000-00-00', '', 'kythuat', '', '', 'IvS4b1n58MrJRcko5M', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tailieu`
--

CREATE TABLE `tailieu` (
  `MaTL` int(11) NOT NULL,
  `TenTL` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `MaTheLoai` int(11) DEFAULT NULL,
  `MaDV` int(11) DEFAULT NULL,
  `MaTG` int(11) DEFAULT NULL,
  `MaNXB` int(11) DEFAULT NULL,
  `NamXB` int(11) DEFAULT NULL,
  `MaNgonNgu` int(11) DEFAULT NULL,
  `NoiDung` text COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `SoTrang` int(11) DEFAULT NULL,
  `KhoGiay` varchar(22) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `LanTB` int(11) DEFAULT NULL,
  `GiaBia` int(11) DEFAULT NULL,
  `SoPH` int(11) DEFAULT NULL,
  `NgayPH` date DEFAULT NULL,
  `TongSo` int(11) DEFAULT NULL,
  `MaVT` int(11) DEFAULT NULL,
  `NgayCN` date DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tailieu`
--

INSERT INTO `tailieu` (`MaTL`, `TenTL`, `MaTheLoai`, `MaDV`, `MaTG`, `MaNXB`, `NamXB`, `MaNgonNgu`, `NoiDung`, `SoTrang`, `KhoGiay`, `LanTB`, `GiaBia`, `SoPH`, `NgayPH`, `TongSo`, `MaVT`, `NgayCN`, `status`) VALUES
(1, 'Sách Giáo Khoa Toán', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, 'Bài Làm Về Nhà', 12, 1, 1, 1, 2020, 5, 'Bài Làm', 5, 'a2', 2, 20000, 3, '2022-02-09', 12, 1, '2022-02-26', 1),
(3, 'Toán Cao Cấp', 1, 1, 1, 1, 0, 1, '1', 1, '1', 1, 1, 1, '0000-00-00', 1, 1, '2022-02-26', 1),
(4, 'Toán Cao Cấp', 1, 1, 1, 1, 1, 1, '1', 1, '1', 1, 1, 1, '2022-02-16', 1, 1, '2022-02-26', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`Username`) USING HASH;

--
-- Chỉ mục cho bảng `tailieu`
--
ALTER TABLE `tailieu`
  ADD PRIMARY KEY (`MaTL`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tailieu`
--
ALTER TABLE `tailieu`
  MODIFY `MaTL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;