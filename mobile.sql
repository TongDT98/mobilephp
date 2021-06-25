SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mobile`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `Id` int(11) NOT NULL,
  `SanPhamId` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `TenSanPham` varchar(250) NOT NULL,
  `AnhSanPham` varchar(250) NOT NULL,
  `Gia` double(12,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `Id` int(11) NOT NULL,
  `NgayBan` date DEFAULT NULL,
  `SoTien` double DEFAULT NULL,
  `KhachHangId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadonchitiet`
--

CREATE TABLE `hoadonchitiet` (
  `Id` int(11) NOT NULL,
  `SanPhamId` int(11) DEFAULT NULL,
  `HoaDonId` int(11) DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `Gia` double(12,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `Id` int(11) NOT NULL,
  `TenDayDu` varchar(250) DEFAULT NULL,
  `DiaChi` varchar(45) DEFAULT NULL,
  `SoDienThoai` int(11) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `Id` int(11) NOT NULL,
  `TenLoaiSanPham` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `Id` int(11) NOT NULL,
  `TenDangNhap` varchar(250) DEFAULT NULL,
  `MatKhau` varchar(45) DEFAULT NULL,
  `TenDayDu` varchar(100) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `VaiTro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`Id`, `TenDangNhap`, `MatKhau`, `TenDayDu`, `Email`, `VaiTro`) VALUES
(1, 'thongdinh', 'matkhau@123', 'tongdt', 'dtt@gmail.com', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `Id` int(11) NOT NULL,
  `TenNhaSanXuat` varchar(250) DEFAULT NULL,
  `DienThoai` int(13) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `DiaChi` varchar(250) DEFAULT NULL,
  `Website` varchar(250) DEFAULT NULL,
  `MoTa` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`Id`, `TenNhaSanXuat`, `DienThoai`, `Email`, `DiaChi`, `Website`, `MoTa`) VALUES
(1, 'trungquoc', 123454554, 'tau@gmail.com', 'trungquoc', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `Id` int(11) NOT NULL,
  `MaSanPham` int(15) NOT NULL,
  `TenSanPham` varchar(250) DEFAULT NULL,
  `Gia` double(12,0) NOT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `MoTa` varchar(250) DEFAULT NULL,
  `AnhSanPham` varchar(250) DEFAULT NULL,
  `MauSac` varchar(250) DEFAULT NULL,
  `RAM` int(11) DEFAULT NULL,
  `CPU` varchar(250) DEFAULT NULL,
  `CameraTruoc` varchar(250) DEFAULT NULL,
  `CameraSau` varchar(250) DEFAULT NULL,
  `TheNho` int(11) DEFAULT NULL,
  `HeDieuHanh` varchar(250) DEFAULT NULL,
  `ManHinh` varchar(250) DEFAULT NULL,
  `DoPhanGiai` varchar(250) DEFAULT NULL,
  `Pin` varchar(250) DEFAULT NULL,
  `TinhTrang` varchar(150) DEFAULT NULL,
  `NhaSanXuatId` int(11) DEFAULT NULL,
  `LoaiSanPhamId` int(11) DEFAULT NULL,
  `NguoiDungId` int(11) DEFAULT NULL,
  `BaoHanh` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;