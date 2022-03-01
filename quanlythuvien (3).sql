-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 01, 2022 lúc 08:13 AM
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
-- Cấu trúc bảng cho bảng `docgia`
--

CREATE TABLE `docgia` (
  `SoThe` int(11) NOT NULL,
  `MaDK` int(11) NOT NULL,
  `AnhBarcode` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NgayCap` date NOT NULL,
  `HSD` date NOT NULL,
  `TinhTrang` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NguoiCN` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NgayCN` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donvi`
--

CREATE TABLE `donvi` (
  `MaDV` int(11) NOT NULL,
  `TenDV` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `GhiChu` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `donvi`
--

INSERT INTO `donvi` (`MaDV`, `TenDV`, `GhiChu`, `status`) VALUES
(1, 'Khoa CNTT', 'khoa cong nghe thong tin', 1),
(2, 'Khoa DL', 'khoa dien lanh', 0),
(3, 'Khoa Phan Mem', 'khoa phan mem', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dsdktaothe`
--

CREATE TABLE `dsdktaothe` (
  `MaDK` int(11) NOT NULL,
  `HoTen` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NamSinh` date NOT NULL,
  `GioiTinh` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ChucDanh` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `MaDV` int(11) NOT NULL,
  `MaLop` int(11) NOT NULL,
  `KhoaHoc` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `DienThoai` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Email` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `AnhThe` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `HinhThucDK` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `LoaiDK` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NgayDK` date NOT NULL,
  `KTLePhi` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `XuLy` text COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT 'no',
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `dsdktaothe`
--

INSERT INTO `dsdktaothe` (`MaDK`, `HoTen`, `NamSinh`, `GioiTinh`, `ChucDanh`, `MaDV`, `MaLop`, `KhoaHoc`, `DienThoai`, `Email`, `AnhThe`, `HinhThucDK`, `LoaiDK`, `NgayDK`, `KTLePhi`, `XuLy`, `status`) VALUES
(1, 'Phuong', '2022-03-08', 'nam', 'khong', 1, 1, 'ok', '08543', 'pfggihgs', 'ok anh the', 'online', 'lam lai', '0000-00-00', 'yes', 'no', 0),
(2, 'Nguyen Viet Phuong', '2000-08-08', 'nam', 'Không', 1, 1, 'Th4', '0337646311', 'phuong2k88@gmail.com', 'none', 'online', 'lamlai', '0000-00-00', 'yes', 'no', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `MaLop` int(11) NOT NULL,
  `TenLop` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `MaDV` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`MaLop`, `TenLop`, `MaDV`, `status`) VALUES
(1, 'Th4', 3, 1),
(2, '', 3, 1),
(3, 'cndl', 2, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ngonngu`
--

CREATE TABLE `ngonngu` (
  `MaNgonNgu` int(11) NOT NULL,
  `TenNgonNgu` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `GhiChu` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `ngonngu`
--

INSERT INTO `ngonngu` (`MaNgonNgu`, `TenNgonNgu`, `GhiChu`, `status`) VALUES
(1, 'Anh', 'tiếng anh', 1),
(2, 'Pháp', 'tiếng pháp', 1),
(3, 'Ấn', 'tiếng Ấn', 0),
(4, 'Đức', 'tiếng đức nè', 1);

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
(1, 'present', 'present', 'Phuong', '2022-02-11', 'nam', 'admin', 'phuong2k88@gmail.com', '0', 'snjfhsjdjfjfjdiiss', 1),
(2, 'ngdung', 'ngdung', 'Nguoi Dung', NULL, NULL, '0', '', '0', '', 0),
(3, 'phuong2kpresenta', 'phuong2kpresenta', 'phuong2kpresenta', NULL, NULL, '0', '', '0', 'wFuDbJUl6RQxgyI5XF', 0),
(4, 'aphuong2kpresenta', 'aphuong2kpresenta', 'aphuong2kpresenta', '2022-02-10', 'nam', '0', 'phuong2k88@gmail.com', '0', '9w6IIjGIhfUu9jDcdY', 1),
(5, 'phuong', 'phuong', 'Phuong Viet', '2022-02-08', 'nam', '0', 'phuong2k88@gmail.com', '0337646311', 'snjfhsjdjfjfjdiis1', 1),
(6, 'abc', 'abc', '', '0000-00-00', '', 'kythuat', '', '', 'IvS4b1n58MrJRcko5M', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `MaNCC` int(11) NOT NULL,
  `TenNCC` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `DiaChi` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `DienThoai` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`MaNCC`, `TenNCC`, `DiaChi`, `DienThoai`, `status`) VALUES
(1, 'Tây Âu', 'Đông Âu', '0337646311', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhaxuatban`
--

CREATE TABLE `nhaxuatban` (
  `MaNXB` int(11) NOT NULL,
  `TenNXB` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `GhiChu` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nhaxuatban`
--

INSERT INTO `nhaxuatban` (`MaNXB`, `TenNXB`, `GhiChu`, `status`) VALUES
(1, 'Hà Nội', 'hn', 1),
(2, 'Việt Nam', 'Việt nam', 0),
(3, 'Bắc Giang', 'bac giang bac giang', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tacgia`
--

CREATE TABLE `tacgia` (
  `MaTG` int(11) NOT NULL,
  `TenTG` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `GhiChu` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tacgia`
--

INSERT INTO `tacgia` (`MaTG`, `TenTG`, `GhiChu`, `status`) VALUES
(1, 'Phuong', 'viet phuong', 1),
(2, 'Nguyen Phuong', 'nguyen phuong', 0),
(3, 'Nguyen Viet Phuong', 'nguyen viet phuong 2000', 1);

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
(2, 'Bài Làm Về Nhà', 12, 1, 1, 1, 2020, 5, 'Bài Làm', 5, 'a2', 2, 20000, 3, '2022-02-09', 12, 1, '2022-02-26', 0),
(3, 'Toán Cao Cấp', 1, 1, 1, 1, 0, 1, '1', 1, '1', 1, 1, 1, '0000-00-00', 1, 1, '2022-02-26', 1),
(4, 'Toán Cao Cấp', 1, 1, 1, 1, 1, 1, '1', 1, '1', 1, 1, 1, '2022-02-16', 1, 1, '2022-02-26', 1),
(5, 'Lập Trình Phân Tán', 1, 2, 3, 4, 2000, 1, 'adadfád', 12, '3', 4, 5, 1, '2022-02-18', 12, 43, '2022-02-27', 1),
(6, 'Toán Cao Cấp Cho 12', 3, 1, 1, 0, 1, 1, 'okok', 1, '1', 1, 1, 1, '2022-02-01', 1, 1, '2022-02-28', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `MaTheLoai` int(11) NOT NULL,
  `TenTheLoai` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `GhiChu` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`MaTheLoai`, `TenTheLoai`, `GhiChu`, `status`) VALUES
(1, 'Trinh Tham', 'trinh tham', 1),
(2, 'Giai Tri', 'giai tri nhe', 0),
(3, 'Truyen Cuoi', 'truyen cuoi', 1),
(4, 'Truyen Ma', 'truyen ma', 1),
(5, 'Lop 1', 'lop 1', 1),
(6, 'Lop 1', 'lop 1', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vitri`
--

CREATE TABLE `vitri` (
  `MaVT` int(11) NOT NULL,
  `TenVT` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `GhiChu` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `vitri`
--

INSERT INTO `vitri` (`MaVT`, `TenVT`, `GhiChu`, `status`) VALUES
(1, '1', 'so 1', 1),
(2, '2', 'so 2', 1),
(3, '3', 'so 3', 1),
(4, '4', 'so 4', 0),
(5, 'so 5', 'so cua 5 day nhe', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `docgia`
--
ALTER TABLE `docgia`
  ADD PRIMARY KEY (`SoThe`);

--
-- Chỉ mục cho bảng `donvi`
--
ALTER TABLE `donvi`
  ADD PRIMARY KEY (`MaDV`);

--
-- Chỉ mục cho bảng `dsdktaothe`
--
ALTER TABLE `dsdktaothe`
  ADD PRIMARY KEY (`MaDK`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`MaLop`);

--
-- Chỉ mục cho bảng `ngonngu`
--
ALTER TABLE `ngonngu`
  ADD PRIMARY KEY (`MaNgonNgu`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`Username`) USING HASH;

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`MaNCC`);

--
-- Chỉ mục cho bảng `nhaxuatban`
--
ALTER TABLE `nhaxuatban`
  ADD PRIMARY KEY (`MaNXB`);

--
-- Chỉ mục cho bảng `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`MaTG`);

--
-- Chỉ mục cho bảng `tailieu`
--
ALTER TABLE `tailieu`
  ADD PRIMARY KEY (`MaTL`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`MaTheLoai`);

--
-- Chỉ mục cho bảng `vitri`
--
ALTER TABLE `vitri`
  ADD PRIMARY KEY (`MaVT`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `docgia`
--
ALTER TABLE `docgia`
  MODIFY `SoThe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `donvi`
--
ALTER TABLE `donvi`
  MODIFY `MaDV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `dsdktaothe`
--
ALTER TABLE `dsdktaothe`
  MODIFY `MaDK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `lop`
--
ALTER TABLE `lop`
  MODIFY `MaLop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `ngonngu`
--
ALTER TABLE `ngonngu`
  MODIFY `MaNgonNgu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `MaNCC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `nhaxuatban`
--
ALTER TABLE `nhaxuatban`
  MODIFY `MaNXB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tacgia`
--
ALTER TABLE `tacgia`
  MODIFY `MaTG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tailieu`
--
ALTER TABLE `tailieu`
  MODIFY `MaTL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `MaTheLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `vitri`
--
ALTER TABLE `vitri`
  MODIFY `MaVT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
