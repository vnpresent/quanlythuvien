-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 20, 2022 lúc 03:12 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

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
-- Cấu trúc bảng cho bảng `chitietmt`
--

CREATE TABLE `chitietmt` (
  `id` int(11) NOT NULL,
  `ID_MuonTra` int(11) NOT NULL,
  `MaCaBiet` int(11) NOT NULL,
  `KieuMuon` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `HanTra` date NOT NULL,
  `Loai` varchar(11) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NgayTra` date NOT NULL,
  `NguoiNhan` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietmt`
--

INSERT INTO `chitietmt` (`id`, `ID_MuonTra`, `MaCaBiet`, `KieuMuon`, `HanTra`, `Loai`, `NgayTra`, `NguoiNhan`) VALUES
(5, 18, 1, 'demve', '2022-07-18', 'muon', '0000-00-00', ''),
(6, 18, 2, 'demve', '0000-00-00', 'muon', '0000-00-00', ''),
(7, 18, 3, 'taicho', '2022-03-10', 'tra', '2022-03-09', 'present'),
(8, 19, 4, 'taicho', '2022-03-22', 'tra', '2022-03-17', 'present'),
(9, 19, 5, 'demve', '2022-03-18', 'tra', '2022-03-09', 'present'),
(10, 19, 6, 'taicho', '2022-03-10', 'tra', '2022-03-09', 'present'),
(11, 20, 1, 'demve', '2022-03-19', 'tra', '2022-03-17', 'present'),
(12, 20, 2, 'demve', '2022-03-26', 'tra', '2022-03-17', 'present'),
(13, 20, 3, 'demve', '2022-03-26', 'tra', '2022-03-17', 'present');

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
  `NgayCN` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `docgia`
--

INSERT INTO `docgia` (`SoThe`, `MaDK`, `AnhBarcode`, `NgayCap`, `HSD`, `TinhTrang`, `NguoiCN`, `NgayCN`, `status`) VALUES
(1, 2, 'anh dep day', '2022-03-01', '2022-03-11', 'binh thuong moi', 'present', '2022-03-01', 1);

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
(3, 'Khoa Phan Mem', 'khoa phan mem', 1),
(4, 'Khoa CNTT TH', '     ', 1);

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
(2, 'Nguyen Viet Phuong', '2000-08-08', 'nam', 'Không', 1, 1, 'Th4', '0337646311', 'phuong2k88@gmail.com', 'none', 'online', 'lamlai', '0000-00-00', 'yes', 'yes', 1);

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
-- Cấu trúc bảng cho bảng `muontra`
--

CREATE TABLE `muontra` (
  `ID_MuonTra` int(11) NOT NULL,
  `SoThe` int(11) NOT NULL,
  `NgayMuon` date NOT NULL,
  `NguoiChoMuon` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `muontra`
--

INSERT INTO `muontra` (`ID_MuonTra`, `SoThe`, `NgayMuon`, `NguoiChoMuon`) VALUES
(18, 1, '2022-03-09', 'present'),
(19, 2, '2022-03-09', 'present'),
(20, 3, '2022-03-17', 'present');

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
(1, 'Anh', 'tiếng anh', 0),
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
(1, 'present', '123', 'Phuong', '2022-02-11', 'nam', 'admin', 'phuong2k88@gmail.com', '0', 'snjfhsjdjfjfjdiiss', 1),
(2, 'ngdung', 'ngdung', 'Nguoi Dung', NULL, NULL, '0', '', '0', '', 0),
(3, 'phuong2kpresenta', 'phuong2kpresenta', 'phuong2kpresenta', NULL, NULL, '0', '', '0', 'wFuDbJUl6RQxgyI5XF', 0),
(4, 'aphuong2kpresenta', 'present', 'aphuong2kpresenta', '2022-02-10', 'nam', '0', 'phuong2k88@gmail.com', '0', '9w6IIjGIhfUu9jDcdY', 1),
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
(3, 'Bắc Giang', 'bac giang bac giang', 1),
(4, 'Việt Nam Net', 'vnn', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieunhap`
--

CREATE TABLE `phieunhap` (
  `IDNhap` int(11) NOT NULL,
  `MaTL` int(11) NOT NULL,
  `MaNCC` int(11) NOT NULL,
  `NguoiNhap` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NgayNhap` date NOT NULL,
  `Soluong` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `phieunhap`
--

INSERT INTO `phieunhap` (`IDNhap`, `MaTL`, `MaNCC`, `NguoiNhap`, `NgayNhap`, `Soluong`, `status`) VALUES
(1, 6, 1, '', '0000-00-00', 5, 0),
(2, 5, 1, 'present', '2022-03-01', 10, 1),
(3, 3, 1, 'present', '2022-03-01', 12, 1),
(4, 6, 1, 'present', '2022-03-01', 10, 1),
(5, 6, 1, 'present', '2022-03-01', 5, 1),
(6, 6, 1, 'present', '2022-03-01', 5, 1),
(7, 3, 1, 'present', '2022-03-06', 10, 1);

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
(3, 'Nguyen Viet Phuong', 'nguyen viet phuong 2000', 1),
(4, 'Tôi Là Phương', 'toi la phuong', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tailieu`
--

CREATE TABLE `tailieu` (
  `MaTL` int(11) NOT NULL,
  `TenTL` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `MaTheLoai` int(11) DEFAULT NULL,
  `MaDV` int(11) DEFAULT NULL,
  `MaTG` text COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
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
(2, 'Bài Làm Về Nhà', 12, 1, '[\"1\"]', 1, 2020, 5, 'Bài Làm', 5, 'a2', 2, 20000, 3, '2022-02-09', 12, 1, '2022-02-26', 0),
(3, 'Toán Cao Cấp', 1, 1, '[\"1\",\"3\"]', 1, 0, 2, '1', 1, '1', 1, 1, 1, '2022-03-18', 1, 1, '2022-03-20', 1),
(4, 'Toán Cao Cấp', 1, 1, '[\"1\"]', 1, 1, 1, '1', 1, '1', 1, 1, 1, '2022-02-16', 1, 1, '2022-02-26', 1),
(5, 'Lập Trình Phân Tán', 1, 2, '[\"3\"]', 1, 2000, 1, 'adadfád', 12, '3', 4, 5, 1, '2022-02-18', 12, 2, '2022-02-27', 1),
(6, 'Toán Cao Cấp Cho 12', 3, 1, '[\"1\"]', 1, 1, 1, 'okok', 1, '1', 1, 1, 1, '2022-02-01', 1, 1, '2022-02-28', 1),
(7, 'Bai Tap Cap 2', 7, 3, '[\"1\"]', 4, 1, 4, 'okok', 1, '1', 1, 2333, 34, '2022-03-08', 12, 9, '2022-03-20', 1),
(8, 'fdhtdfhtfth', 7, 3, '[\"1\",\"4\"]', 4, 4, 4, '434r34', 4, '4', 4, 4, 4, '2022-03-07', 4, 9, '2022-03-20', 1);

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
(6, 'Lop 1', 'lop 1', 1),
(7, 'Trinh Tham', 'tiếng pháp', 1),
(8, 'Trinh Thams', '    ', 1),
(9, 'Trinh Tham', '    ', 1),
(10, 'okok', '', 1),
(11, 'afeafadfaw', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tlchitiet`
--

CREATE TABLE `tlchitiet` (
  `MaCaBiet` int(11) NOT NULL,
  `MaTL` int(11) NOT NULL,
  `IDNhap` int(11) NOT NULL,
  `AnhBarcode` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NgayCN` date NOT NULL,
  `NguoiCN` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TinhTrang` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `XuLy` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tlchitiet`
--

INSERT INTO `tlchitiet` (`MaCaBiet`, `MaTL`, `IDNhap`, `AnhBarcode`, `NgayCN`, `NguoiCN`, `TinhTrang`, `XuLy`) VALUES
(1, 6, 0, '', '2022-03-01', 'present', 'moi', ''),
(2, 6, 0, '', '2022-03-01', 'present', 'moi', ''),
(3, 6, 0, '', '2022-03-01', 'present', 'moi', ''),
(4, 6, 0, '', '2022-03-01', 'present', 'moi', ''),
(5, 6, 0, '', '2022-03-01', 'present', 'moi', ''),
(6, 3, 0, '', '2022-03-06', 'present', 'moi', ''),
(7, 3, 0, '', '2022-03-06', 'present', 'moi', ''),
(8, 3, 0, '', '2022-03-06', 'present', 'moi', ''),
(9, 3, 0, '', '2022-03-06', 'present', 'moi', ''),
(10, 3, 0, '', '2022-03-06', 'present', 'moi', ''),
(11, 3, 0, '', '2022-03-06', 'present', 'moi', ''),
(12, 3, 0, '', '2022-03-06', 'present', 'moi', ''),
(13, 3, 0, '', '2022-03-06', 'present', 'moi', ''),
(14, 3, 0, '', '2022-03-06', 'present', 'moi', ''),
(15, 3, 0, '', '2022-03-06', 'present', 'moi', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vitri`
--

CREATE TABLE `vitri` (
  `MaVT` int(11) NOT NULL,
  `TenVT` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `MoTa` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `vitri`
--

INSERT INTO `vitri` (`MaVT`, `TenVT`, `MoTa`, `status`) VALUES
(1, '1', 'so 1', 1),
(2, '2', 'so 2', 1),
(3, '3', 'so 3', 1),
(4, '4', 'so 4', 1),
(5, 'so 5', 'so cua 5 day nhe', 1),
(6, 'ok', 'ok', 1),
(7, 'ok', 'ok', 1),
(8, 'ok', 'ok', 1),
(9, 'ok', 'ok', 1),
(10, 'ok', '    ', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xulyvp`
--

CREATE TABLE `xulyvp` (
  `IDPhat` int(11) NOT NULL,
  `SoThe` int(11) NOT NULL,
  `LyDoVP` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `HTXuLy` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NgayXL` date NOT NULL,
  `NguoiXL` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NgayMoThe` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `xulyvp`
--

INSERT INTO `xulyvp` (`IDPhat`, `SoThe`, `LyDoVP`, `HTXuLy`, `NgayXL`, `NguoiXL`, `NgayMoThe`, `status`) VALUES
(1, 1, 'chiu ko ro', 'phat 100000d cho nho', '2022-03-03', 'present', '2022-03-26', 0),
(2, 2, 'chiu ko ro nua', 'ban 10 ngay', '2022-03-03', 'present', '2022-03-29', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietmt`
--
ALTER TABLE `chitietmt`
  ADD PRIMARY KEY (`id`);

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
-- Chỉ mục cho bảng `muontra`
--
ALTER TABLE `muontra`
  ADD PRIMARY KEY (`ID_MuonTra`);

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
-- Chỉ mục cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD PRIMARY KEY (`IDNhap`);

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
-- Chỉ mục cho bảng `tlchitiet`
--
ALTER TABLE `tlchitiet`
  ADD PRIMARY KEY (`MaCaBiet`);

--
-- Chỉ mục cho bảng `vitri`
--
ALTER TABLE `vitri`
  ADD PRIMARY KEY (`MaVT`);

--
-- Chỉ mục cho bảng `xulyvp`
--
ALTER TABLE `xulyvp`
  ADD PRIMARY KEY (`IDPhat`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietmt`
--
ALTER TABLE `chitietmt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `docgia`
--
ALTER TABLE `docgia`
  MODIFY `SoThe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `donvi`
--
ALTER TABLE `donvi`
  MODIFY `MaDV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT cho bảng `muontra`
--
ALTER TABLE `muontra`
  MODIFY `ID_MuonTra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  MODIFY `MaNXB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  MODIFY `IDNhap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tacgia`
--
ALTER TABLE `tacgia`
  MODIFY `MaTG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tailieu`
--
ALTER TABLE `tailieu`
  MODIFY `MaTL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `MaTheLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tlchitiet`
--
ALTER TABLE `tlchitiet`
  MODIFY `MaCaBiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `vitri`
--
ALTER TABLE `vitri`
  MODIFY `MaVT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `xulyvp`
--
ALTER TABLE `xulyvp`
  MODIFY `IDPhat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
