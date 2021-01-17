-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 17, 2021 lúc 02:58 PM
-- Phiên bản máy phục vụ: 10.4.16-MariaDB
-- Phiên bản PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cvonline`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoc_van`
--

CREATE TABLE `hoc_van` (
  `id_hv` int(11) NOT NULL,
  `Thoi_gian` date NOT NULL,
  `ket_thuc` date NOT NULL,
  `truong` varchar(255) NOT NULL,
  `Nganh` varchar(255) NOT NULL,
  `Xep_loai` varchar(255) NOT NULL,
  `Diem` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoc_van`
--

INSERT INTO `hoc_van` (`id_hv`, `Thoi_gian`, `ket_thuc`, `truong`, `Nganh`, `Xep_loai`, `Diem`) VALUES
(1, '2018-09-10', '2022-09-10', 'Đại học Thủy Lợi', 'Công nghệ thông tin', 'Khá', 7.5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kinh_nghiem`
--

CREATE TABLE `kinh_nghiem` (
  `id_kn` int(11) NOT NULL,
  `t_gian` date NOT NULL,
  `t_giankt` date NOT NULL,
  `ten_dtai` varchar(255) NOT NULL,
  `Cong_viec` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `kinh_nghiem`
--

INSERT INTO `kinh_nghiem` (`id_kn`, `t_gian`, `t_giankt`, `ten_dtai`, `Cong_viec`) VALUES
(1, '2020-10-16', '2021-01-10', 'Công nghệ web', 'Học lập trình web, thiết kế chính, xây dựng website cv online sử dụng HTML/JavaScript/Bootstrap4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ky_nang`
--

CREATE TABLE `ky_nang` (
  `id_kn` int(11) NOT NULL,
  `Ten` varchar(255) NOT NULL,
  `trinh_do` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ky_nang`
--

INSERT INTO `ky_nang` (`id_kn`, `Ten`, `trinh_do`) VALUES
(1, 'Giao tiếp trôi chảy, có khả năng thuyết trình', 'Khá'),
(2, 'HTML', 'Khá'),
(4, 'JavaScript', 'Khá'),
(5, 'Kỹ năng làm việc độc lập, làm việc nhóm, đóng góp ý kiến', 'Khá'),
(7, 'CSS', 'Khá');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `muctieu`
--

CREATE TABLE `muctieu` (
  `id_mt` int(11) NOT NULL,
  `ten_mtieu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `muctieu`
--

INSERT INTO `muctieu` (`id_mt`, `ten_mtieu`) VALUES
(1, 'Ứng tuyển vị thực tập trong công ty'),
(2, 'Trong thời gian thực tập, làm quen và nắm rõ kiến thức chuyên môn, tác phonng làm việc của công ty'),
(3, 'Trở thành một nhân viên chính thức của công ty'),
(4, 'Nâng cao chuyên môn, mở rộng hiểu biết sang nhiều lĩnh vực CNTT'),
(7, 'Tích cực đóng góp cho công ty ngày càng phát triển, có thể hợp tác với các nước khác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sothich`
--

CREATE TABLE `sothich` (
  `id_st` int(11) NOT NULL,
  `TenST` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sothich`
--

INSERT INTO `sothich` (`id_st`, `TenST`) VALUES
(1, 'xem phim'),
(2, 'nghe nhạc'),
(3, 'đọc sách'),
(4, 'xây dựng cộng đồng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `username` char(255) NOT NULL,
  `password` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `username`, `password`) VALUES
(1, 'vutiendung430@gmail.com', '$2y$10$fEygEI6Z5VpS/ZXqmt3jEulMGZdzzFa1NV0J9QuNLXMTH2a.xbSBG');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `gioi_tinh` varchar(3) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `so_dt` varchar(13) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`ID`, `ho_ten`, `ngay_sinh`, `gioi_tinh`, `dia_chi`, `so_dt`, `email`, `avatar`) VALUES
(1, 'Vũ Tiến Dũng', '2000-04-30', 'Nam', 'Đông Xuân - Đông Hưng - Thái Bình', '0366065929', 'vutiendung430@gmail.com', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hoc_van`
--
ALTER TABLE `hoc_van`
  ADD PRIMARY KEY (`id_hv`);

--
-- Chỉ mục cho bảng `kinh_nghiem`
--
ALTER TABLE `kinh_nghiem`
  ADD PRIMARY KEY (`id_kn`);

--
-- Chỉ mục cho bảng `ky_nang`
--
ALTER TABLE `ky_nang`
  ADD PRIMARY KEY (`id_kn`);

--
-- Chỉ mục cho bảng `muctieu`
--
ALTER TABLE `muctieu`
  ADD PRIMARY KEY (`id_mt`);

--
-- Chỉ mục cho bảng `sothich`
--
ALTER TABLE `sothich`
  ADD PRIMARY KEY (`id_st`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hoc_van`
--
ALTER TABLE `hoc_van`
  MODIFY `id_hv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `kinh_nghiem`
--
ALTER TABLE `kinh_nghiem`
  MODIFY `id_kn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `ky_nang`
--
ALTER TABLE `ky_nang`
  MODIFY `id_kn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `muctieu`
--
ALTER TABLE `muctieu`
  MODIFY `id_mt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `sothich`
--
ALTER TABLE `sothich`
  MODIFY `id_st` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
