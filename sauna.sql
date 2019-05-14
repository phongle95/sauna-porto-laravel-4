-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 14, 2019 lúc 08:53 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sauna`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `tenMatHang` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maLoaiSanPham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `items`
--

INSERT INTO `items` (`id`, `tenMatHang`, `maLoaiSanPham`) VALUES
(1, 'Máy Xông Hơi KingSteam', 1),
(2, 'Máy Xông Hơi Tylo', 2),
(4, 'Phòng Xông Hơi Tia Hồng Ngoại HomeSteam', 4),
(5, 'Thiết Kế  - Thi Công Theo Mẫu', 3),
(6, 'Bồn Tắm Ceaser', 6),
(7, 'Ghế Massage', 7),
(8, 'Giường Massage', 7),
(9, 'Bộ Điều Khiển Nhiệt', 8),
(10, 'Bồn Tắm Massage', 6),
(11, 'Máy Xông Hơi Relax', 1),
(12, 'Máy Xông Hơi Coast', 1),
(13, 'Máy Xông Hơi Amazon', 1),
(14, 'Máy Xông Hơi Haviva', 1),
(15, 'Máy Xông Hơi Husan', 1),
(16, 'Máy Xông Hơi Sawo', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `id` int(11) NOT NULL,
  `tenLoaiSanPham` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`id`, `tenLoaiSanPham`) VALUES
(1, 'Máy Xông Hơi Ướt - Steam'),
(2, 'Máy Xông Hơi Khô - Sauna'),
(3, 'Phòng Xông Hơi Khô - Sauna'),
(4, 'Phòng Xông Hơi Hồng Ngoại'),
(6, 'Bồn Tắm - Bồn Massage'),
(7, 'Thiết Bị - Phụ Kiện Xông Hơi'),
(8, 'Hệ Thống Sửi Sàn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitin`
--

CREATE TABLE `loaitin` (
  `id` int(11) NOT NULL,
  `tenLoaiTin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaitin`
--

INSERT INTO `loaitin` (`id`, `tenLoaiTin`) VALUES
(1, 'Công Trình'),
(3, 'Tuyển Dụng'),
(4, 'Tin Tức');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `tieuDe` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tomTat` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `noiDung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `maLoaiTin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `tieuDe`, `tomTat`, `keyword`, `img`, `date`, `noiDung`, `maLoaiTin`) VALUES
(5, 'LỢI ÍCH CỦA PHÒNG XÔNG HƠI VÀ NHỮNG ĐIỀU CẦN LƯU Ý', 'Theo số liệu thống kê bệnh tim mạch tại Việt Nam, cứ 3 người trưởng thành có 1 người có nguy cơ mắc bệnh tim mạch. Mỗi năm, các bệnh lý về tim mạch cướp đi khoảng 200.000 người. Đây là con số đáng báo động đối với tình trạng sức khỏe của chúng ta hiện nay.', 'a', 'RQOVzi1VBa4jB9YuTlWZQbDJReT0LzVf6ZiSNppX.jpeg', '2019-05-06', '<p>Theo số liệu thống k&ecirc; bệnh tim mạch tại Việt Nam, cứ 3 người trưởng th&agrave;nh c&oacute; 1 người c&oacute; nguy cơ mắc bệnh tim mạch.&nbsp;Mỗi năm, c&aacute;c bệnh l&yacute; về tim mạch cướp đi khoảng 200.000 người. Đ&acirc;y l&agrave; con số đ&aacute;ng b&aacute;o động đối với t&igrave;nh trạng sức khỏe của ch&uacute;ng ta hiện nay.</p>', 4),
(6, 'CÔNG DỤNG TỪ ĐÁ MUỐI HIMALAYA TỰ NHIÊN', 'Nổi bật nhất trong số những công dụng kỳ diệu của đá muối Himalaya đó là hỗ trợ tim mạch, hỗ trợ chức năng hô hấp, duy trì ham muốn tình dục lành mạnh, cải thiện lượng đường trong máu, làm giảm dấu hiệu lão hóa và giúp xương cứng cáp hơn.', 'abc', 'IlfSuNgcjlWaIROjvCgmKCT4hFtTrWqFdwpFFo0w.jpeg', '2019-05-06', '<p><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:14px\">Nổi bật nhất trong số những c&ocirc;ng dụng kỳ diệu của đ&aacute; muối Himalaya đ&oacute; l&agrave; hỗ trợ tim mạch, hỗ trợ chức năng h&ocirc; hấp, duy tr&igrave; ham muốn t&igrave;nh dục l&agrave;nh mạnh, cải thiện lượng đường trong m&aacute;u, l&agrave;m giảm dấu hiệu l&atilde;o h&oacute;a v&agrave; gi&uacute;p xương cứng c&aacute;p hơn.<br />\r\nNăm 2003, cơ quan bảo vệ người ti&ecirc;u d&ugrave;ng Bayerisches Landesamt f&uuml;r Gesundheit und Lebensmittelsicherheit tiến h&agrave;nh ph&acirc;n t&iacute;ch 15 mẫu vật của c&aacute;c loại được b&aacute;n ở Đức v&agrave; đ&atilde; ph&aacute;t hiện ra 84 kho&aacute;ng chất c&oacute; c&ocirc;ng dụng tốt đối với sức khỏe của con người. Ch&uacute;ng bao gồm 1,2% lưu huỳnh, 0,4% canxi, 0,35% kali, 0,16% magie v&agrave; 80 kho&aacute;ng chất vi lượng kh&aacute;c</span></span></span></p>', 4),
(7, 'LỢI ÍCH TUYỆT VỜI CỦA XÔNG HƠI ĐỐI VỚI SỨC KHOẺ VÀ SẮC ĐẸP', 'Sau một ngày làm việc mệt mỏi chắc hẳn ai cũng muốn có riêng cho mình một không gian để thư giãn, và mỗi người có một cách thư giãn khác nhau như: chơi thể thao, tập Gym, bơi lội...vv. Ngoài ra, hiện nay xông hơi là cách hữu hiệu nhất đáp ứng được nhu cầu giảm căng thẳng mệt mỏi.', 'avc', 'MByYo1XsD8R4Z4HTCzMQqveX9qRBld8sRUbGrmdW.jpeg', '2019-05-06', '<p><strong><span style=\"font-size:14px\">Sau một ng&agrave;y l&agrave;m việc mệt mỏi chắc hẳn ai cũng muốn c&oacute; ri&ecirc;ng cho m&igrave;nh một kh&ocirc;ng gian để thư gi&atilde;n, v&agrave; mỗi người c&oacute; một c&aacute;ch thư gi&atilde;n kh&aacute;c nhau như: chơi thể thao, tập Gym, bơi lội...vv. Ngo&agrave;i ra, hiện nay x&ocirc;ng hơi l&agrave; c&aacute;ch hữu hiệu nhất đ&aacute;p ứng được nhu cầu giảm căng thẳng mệt mỏi. Một v&agrave;i năm trở lại đ&acirc;y&nbsp;đang l&agrave; ti&ecirc;u ch&iacute; của rất nhiều người ti&ecirc;u d&ugrave;ng Việt. X&ocirc;ng hơi kh&ocirc;ng chỉ những giảm căng thẳng mệt mỏi m&agrave; c&ograve;n mang lại những lợi &iacute;ch hữu hiệu chữa được một số bệnh như cảm c&uacute;m, giảm mỡ m&agrave; &iacute;t ai ngờ đến. Sử dụng m&aacute;y x&ocirc;ng hơi thường xuy&ecirc;n v&agrave; đ&uacute;ng c&aacute;ch th&igrave; việc để sở hữu một l&agrave;n da trắng mịn sẽ kh&ocirc;ng c&ograve;n l&agrave; vấn đề qu&aacute; nan giải với chị em phụ nữ. Liệu ph&aacute;p d&ugrave;ng m&aacute;y x&ocirc;ng hơi gia đ&igrave;nh sẽ gi&uacute;p lỗ ch&acirc;n l&ocirc;ng được gi&atilde;n nở, da được l&agrave;m sạch s&acirc;u thẩm thấu đồng thời loại bỏ độc tố tr&ecirc;n da qua đ&oacute; gi&uacute;p da trắng mịn kh&ocirc;ng t&igrave; vết.</span></strong></p>', 4),
(8, 'NHỮNG ĐIỀU CẦN BIẾT VỀ ĐÁ MUỐI HIMALAYA', 'là sản phẩm được làm từ loại đá muối hồng tinh khiết nhất trên thế giới, được khai thác ở dãy Himalaya (Pakistan) từ độ sâu hơn 2km trong lòng đất. Cách nay 250 triệu năm, các cuộc va chạm thềm lục địa và các cơn đại hồng thủy đã làm vùi lấp các đại dương nhỏ.', 'a', 'PM8Yz98avASbBkD2Y1d5LjayIyQESKMgwOyrNAT3.jpeg', '2019-05-06', '<p><span style=\"font-size:14px\">&agrave; sản phẩm được l&agrave;m từ loại đ&aacute; muối hồng tinh khiết nhất tr&ecirc;n thế giới, được khai th&aacute;c ở d&atilde;y Himalaya (Pakistan) từ độ s&acirc;u hơn 2km trong l&ograve;ng đất. C&aacute;ch nay 250 triệu năm, c&aacute;c cuộc va chạm thềm lục địa v&agrave; c&aacute;c cơn đại hồng thủy đ&atilde; l&agrave;m v&ugrave;i lấp c&aacute;c đại dương nhỏ. Dần dần, nước biển của c&aacute;c đại dương n&agrave;y bốc hơi, c&aacute;c tinh thể muối kết hợp với c&aacute;c kho&aacute;ng chất tự nhi&ecirc;n trong l&ograve;ng đất h&igrave;nh th&agrave;nh n&ecirc;n những mỏ đ&aacute; muối hồng Himalaya v&ocirc; c&ugrave;ng qu&yacute; gi&aacute;.<br />\r\nDo đ&oacute; m&agrave; trong đ&aacute; muối hồng Himalaya c&oacute; chứa đến 84 trong tổng số 92 loại kho&aacute;ng chất c&oacute; lợi cho sức khoẻ. Với 85,62 % natri clorua v&agrave; 14,38% kho&aacute;ng chất vi lượng kh&aacute;c như: sunfat, magi&ecirc;, canxi, kali, bicarbonate, &hellip;đ&aacute; muối hồng Himalaya được khoa học chứng minh l&agrave; c&oacute; nhiều c&ocirc;ng dụng cho sức khỏe v&agrave; l&agrave;m đẹp.</span></p>', 4),
(9, 'Lê Hồng Phong công trình', 'đây là công trình sauna', '123', 'W405ojFHTJIy6zkUSuSxXb3QRbUolqJgUHeJB4Ol.jpeg', '2019-05-15', '<p>đ&acirc;y l&agrave; c&ocirc;ng tr&igrave;nh</p>', 1),
(10, 'Lê Hồng Phong Tuyển Dụng', 'Lê Hồng Phong Tuyển Dụng', 'Lê Hồng Phong Tuyển Dụng', '6uV4WCCLK76D6b1wj2Mx3yyGqgYB8XokXA5n1Nf5.jpeg', '2019-05-07', '<p>abc</p>', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `tenSP` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tomTat` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `img` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img1` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img2` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img3` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productDetail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `maLoaiSanPham` int(11) NOT NULL,
  `maSanPham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `tenSP`, `tomTat`, `keyword`, `gia`, `img`, `img1`, `img2`, `img3`, `productDetail`, `maLoaiSanPham`, `maSanPham`) VALUES
(7, 'Máy xông hơi ướt KINGSTEAM N45', 'Máy xông hơi ướt KINGSTEAM N45 (4,5KW)', 'Máy xông hơi ướt KINGSTEAM N45 (4,5KW)', 8000000, 'kP02MaUtpM2QwyvuD0q73MXNziALqOsqe8ssuDFR.jpeg', 'VLM2dMCsIuzZsXmCbDCU38ByLBMZgV1P4P72pQo0.jpeg', '0EpX8lWHpJsHQdzwoEzULm34EIfPH4sk2jTswtOm.jpeg', '1hpJk0mXVrqsKQU1AcbsbNrQ0bqbCcij11Bvw4SN.jpeg', '<p><strong>T&ecirc;n Sản Phẩm</strong>&nbsp;&nbsp;:<strong>vb</strong></p>\r\n\r\n<p>- M&atilde; Sản Phẩm &nbsp; &nbsp; &nbsp; &nbsp;:a.</p>\r\n\r\n<p>- C&ocirc;ng Suất &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 4500&nbsp;w&nbsp;- ( 4.5 Kw ) .</p>\r\n\r\n<p>- Bảng&nbsp;điều khiển &nbsp; &nbsp; &nbsp;- Bảng Điện Tử ( Hiển thị số v&agrave; t&ugrave;y chỉnh thời&nbsp;gian , nhiệt&nbsp;độ theo y&ecirc;u cầu &nbsp;)&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Hoặc &nbsp; &nbsp;- Điều Khiển Cơ ( T&ugrave;y chỉnh theo nhiệt độ v&agrave; kh&ocirc;ng c&oacute; hiển thị số )</p>\r\n\r\n<p>- Điện thế &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 220V - 380V ( Sử&nbsp;dụng&nbsp;điện&nbsp;1 pha hoặc&nbsp;3 pha t&ugrave;y&nbsp;theo c&ocirc;ng tr&igrave;nh&nbsp;)</p>\r\n\r\n<p>- D&ograve;ng điện &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 26 A - 32 A</p>\r\n\r\n<p>- K&iacute;ch thước &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : D&agrave;i 40cm &nbsp;x Rộng 15cm x&nbsp;Cao 40cm&nbsp;</p>\r\n\r\n<p>- Trọng&nbsp;lượng &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 6 Kg</p>\r\n\r\n<p>- D&ugrave;ng&nbsp;cho ph&ograve;ng&nbsp;c&oacute;&nbsp;thể&nbsp;t&iacute;ch&nbsp;&nbsp;: 1 &ndash; 3 m3 .</p>\r\n\r\n<p>- Thời&nbsp;gian l&agrave;m n&oacute;ng : 3 - 5 Ph&uacute;t</p>\r\n\r\n<p>- Hệ thống van xả cặn, l&agrave;m sạch&nbsp;m&aacute;y&nbsp;thủ&nbsp;c&ocirc;ng&nbsp;.</p>\r\n\r\n<p><em><strong>Thời gian bảo h&agrave;nh sản phẩm : 18 Th&aacute;ng kể từ ng&agrave;y b&agrave;n giao sử dụng .</strong></em></p>', 1, 1),
(8, 'KingSauna - N60 (6KW)', 'KingSauna - N60 (6KW)', 'KingSauna - N60 (6KW)', 8500000, 'iDR0jg8BdGtnqf5vgehfuHzLjtdcHrR0sFgrtiCk.jpeg', 'eHyN5SJShZJFFuQhcNXAQ2xUiqGHhqD1uh2O5nwd.jpeg', 'RCWwm2dGDIwext4otsOH22rafL4TKE3QeHKl3FOM.jpeg', 'loyGnEoJEo1eRIYgoCssGSuhoAeD0CS4yE6lvvAI.jpeg', '<p><strong>1. T&ecirc;n Sản Phẩm &nbsp;:</strong>&nbsp;<strong><a href=\"http://kingsteamsauna.com/may-xong-hoi-kho-kingsauna\" title=\"Máy Xông Khô \">M&aacute;y X&ocirc;ng Kh&ocirc;&nbsp;</a>KingSauna&nbsp;N - Serial</strong></p>\r\n\r\n<p>- M&atilde; Sản Phẩm &nbsp; &nbsp; &nbsp; &nbsp;:<strong><a href=\"http://kingsteamsauna.com/may-xong-hoi-kho-kingsauna-n60.html\" title=\"KingSauna - N60\">KingSauna - N60</a></strong>&nbsp;.</p>\r\n\r\n<p>- C&ocirc;ng Suất &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 6000&nbsp;w&nbsp;- ( 6 Kw ) .</p>\r\n\r\n<p>- Bảng&nbsp;điều khiển &nbsp; &nbsp; &nbsp;- Bảng Điện Tử ( Hiển thị số v&agrave; t&ugrave;y chỉnh thời&nbsp;gian , nhiệt&nbsp;độ theo y&ecirc;u cầu &nbsp;)&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Hoặc &nbsp; &nbsp;- Điều Khiển Cơ ( T&ugrave;y chỉnh theo nhiệt độ v&agrave; kh&ocirc;ng c&oacute; hiển thị số )</p>\r\n\r\n<p>- Điện thế &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 220V - 380V ( Sử&nbsp;dụng&nbsp;điện&nbsp;1 pha hoặc&nbsp;3 pha t&ugrave;y&nbsp;theo c&ocirc;ng tr&igrave;nh&nbsp;)</p>\r\n\r\n<p>- D&ograve;ng điện &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 28 A - 32 A</p>\r\n\r\n<p>- K&iacute;ch thước &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;:&nbsp;D&agrave;i 37cm &nbsp;x Rộng 23cm x&nbsp;Cao 60cm&nbsp;</p>\r\n\r\n<p>- Trọng&nbsp;lượng &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 5 Kg</p>\r\n\r\n<p>- D&ugrave;ng&nbsp;cho ph&ograve;ng&nbsp;c&oacute;&nbsp;thể&nbsp;t&iacute;ch&nbsp;&nbsp;: 2 &ndash; 4 m3 .</p>\r\n\r\n<p>- Thời&nbsp;gian l&agrave;m n&oacute;ng : 3 - 5 Ph&uacute;t .</p>', 2, 2),
(9, 'Phòng Xông Hơi Khô KS - C106', 'Phòng Xông Hơi Khô KS - C106', 'Phòng Xông Hơi Khô KS - C106', 10000000, 'ejjbquxCQeuE2Uj6LGyc1zmtcEzOJcj9GcxhffsS.jpeg', 'ZPjimG0N3dNF0jkpeHapOGg6PdyKErqoMLameLKu.jpeg', '7akYAwb1l02q4CVevS1NecjbBHht6pyZ2zJ9roAw.jpeg', 'XrTu6n0pajV7OmJu1yVYzS1nnJm4oyVSxkzUF8M8.jpeg', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;được c&aacute;c chuy&ecirc;n gia chăm s&oacute;c sức khỏe đầu ng&agrave;nh khuy&ecirc;n d&ugrave;ng bởi n&oacute; được v&iacute; như một liệu ph&aacute;p chăm s&oacute;c sức khỏe tuyệt vời hiện nay. Kh&ocirc;ng chỉ gi&uacute;p thư gi&atilde;n, giải stress hiệu quả,&nbsp;<strong><a href=\"http://xonghoidanang.com/phong-xong-hoi-kho-sauna\">ph&ograve;ng x&ocirc;ng hơi kh&ocirc;</a></strong>&nbsp;c&ograve;n gi&uacute;p đ&agrave;o thải độc tố , giết chết vi khuẩn k&iacute; sinh trong cơ thể, ti&ecirc;u độc mỡ, chăm s&oacute;c da,&hellip;.</p>', 3, 5),
(10, 'Phòng Xông Hơi Hồng Ngoại HS', 'Phòng Xông Hơi Hồng Ngoại HS - 101A', 'Phòng Xông Hơi Hồng Ngoại HS - 101A', 18000000, 'sdo4fZnwIwm4MzqR0n3g4wuAtmnZmyxpo5egEinU.jpeg', '6JT8txhMvj1t1wmwqNkfOEwDuYTi0Ugs5xFrxUKR.jpeg', '1fEDfnZJgJZj1JF92hM6RS9tyi6LMSvf33bu1FIF.jpeg', 'enpzGkv2RBCwJ7G3w8fcWxQ3U6hCyaB6I5dnSrhT.jpeg', '<p>Sản xuất bằng Gỗ th&ocirc;ng Phần Lan nhập khẩu .<br />\r\ntốt cho xương cốt .<br />\r\n&ndash; Cửa k&iacute;nh nh&igrave;n ra ngo&agrave;i sang trọng, tinh tế .<br />\r\n&ndash; Đ&egrave;n led chiếu ngo&agrave;i v&agrave; trong .<br />\r\n&ndash; Bản điều khiển điện tử , t&iacute;ch hơp bộ điều khiển đ&egrave;n led v&agrave; m&aacute;y nghe nhạc .<br />\r\n&ndash; Oxi Ionizer (Điều h&ograve;a oxy, duyệt khuẩn bằng Ionizer) .<br />\r\n&ndash; Nhiệt độ hoạt động từ 38 &ndash; 65 độ C .</p>', 4, 4),
(11, 'Bồn tắm massage Nofer PM-1010', 'Bồn tắm massage Nofer PM-1010', 'Bồn tắm massage Nofer PM-1010', 500000, 'qFM2XWUnmn7buNFDuBA0s2h3wMhDTt3mz4NVLziY.jpeg', 'ht1LvhydsD5kcqpk3Qf8HnnXSfqG53lZPa0QL5Cr.jpeg', 'UMN2W2QbmCorj4CWppMBchit8IxIURYsa2YLQISu.jpeg', 'GrczX75HWgBtKFxvU9tykuBSiGFtAzu8Fqb5fXTf.jpeg', '<p>ab</p>', 6, 10),
(12, 'Bồn tắm massage Caesar MT0660C', 'Bồn tắm massage Caesar MT0660C', 'Bồn tắm massage Caesar MT0660C', 800000, 'DGofCYcxsbTvMIotfh7gJ0YlgllcQzwwaDlZAFRw.jpeg', '7ttKW3ZfnAp66tXLLRYpoAQzrYbBHfFb21iHaiQK.jpeg', '4sPveWFBH9l26uiDNBDBbizZQWtUpUvbkzZhvRId.jpeg', 'p9mT5em7k7fv9vwJuKeinIZMyOcd6Md24q9YPcWo.jpeg', '<p>abc</p>', 6, 6),
(13, 'Máy xông hơi ướt KINGSTEAM N45', 'Máy xông hơi ướt KINGSTEAM N45 (4,5KW)', 'Máy xông hơi ướt KINGSTEAM N45 (4,5KW)', 8000000, 'ksz9pkdmxFsc28V1U61qT8CRSxYWaJUnZVWNvmol.jpeg', 'F3CNj6R5cHm6v2aQk3JnRjLkXz511elGewNHFTbs.jpeg', '7sKSgYvLoBWt3VrsMAB4TUf5otqFftgHa2TXgZFf.jpeg', 'q4T8QTodwk2xfZYrtzRvumSdLjh5CYEhT078q9ay.jpeg', '<p>xyz</p>', 1, 1),
(14, 'Máy xông hơi ướt KINGSTEAM 3', 'Máy xông hơi ướt KINGSTEAM 3', 'Máy xông hơi ướt KINGSTEAM 3', 7000000, 'HHd61EhLtdHX8PhUmojP00yHDYcz45sGzCrmlHHk.jpeg', 'xr7H5xs2A8Q7e2BuoDs67QhX1b4NtkdVOhleF2lq.jpeg', 'D8oH2ChOt5amHcuGhBwFmThE3YIW5GfAE29uPfVU.jpeg', 'w2A6O2oYxwV4nTmnIreyh8Bc1k5aHqpalyoCzUlC.jpeg', '<p>ảeadf</p>', 1, 1),
(15, 'Máy xông hơi ướt KINGSTEAM 4', 'Máy xông hơi ướt KINGSTEAM 4', 'Máy xông hơi ướt KINGSTEAM 4', 9000000, 'OX15moYGzPEBJPs3JzQjlYHAVItPSltjmXBoNcJo.jpeg', 'f4s2BW5yT1yBMNh06v49YRUmSH2fM73c9JIP9WR2.jpeg', 'EEY3bDnnV8MaGanlZwhv7KDhFJrRAYzh6EBlf0A6.jpeg', 'Sk5O975uHUweJZFJiD4QN7tyqqZT5LIkWMwqtCb0.jpeg', '<p>acdg</p>', 1, 1),
(16, 'Máy xông hơi ướt KINGSTEAM 5', 'Máy xông hơi ướt KINGSTEAM 4', 'Máy xông hơi ướt KINGSTEAM 4', 10000000, '9zPF0w9bKP3p6RSZW6amvQ56FBrZDXBaH8tz1iHD.jpeg', 'OaH6m6nmAvrdqba8AGdC5s1OlFhtMCv2KLsaxLYw.jpeg', 'zt31VEHhlSde31Vy42GUzVND35OjzOJPwF5eFaor.jpeg', '2WfDyZqjJsdNxC22YWFEWU82slHPJEewdz8AMM9O.jpeg', '<p>ac</p>', 1, 1),
(17, 'Phòng Xông Hơi Đá Muối B1', 'Phòng xông hơi đá muối là sự kết hợp của phòng xông hơi truyền thống với đá muối Hymalaya được lắp bổ sung trong phòng .Trong đá muối có rất nhiều khoáng chất có lợi cho sức khỏe con người.  Trong đó có các ion âm giúp làm sạch không khí, săn chắc da và gìn giữ da đẹp. Các ion âm được giải phóng khi có tác dụng nhiệt hoặc tia hồng ngoại trong phòng xông hơi đá muối.', 'Phòng Xông Hơi Hồng Ngoại HS - 101A, sauna đà nẵng', 39000000, 'YsTLAs6LbaqsdKLq8zwQqZWbgvKTJGGIFKDFr8ww.jpeg', 'AomV14vMUl3NqHuUhx9ErJhfcxFjtPdnLVgsTBYj.jpeg', 't6ssBa8liQ4PQt2EMOMigKzGPmNOauzU9ZZaWlWe.jpeg', 'lUTUgmCOS1iqOsouTUTplyB4q6PjtKmwH4W2bMnM.jpeg', '<p>abc</p>', 50, 0),
(18, 'Máy Xông Hơi Khô Sawo SCA-6Kw', 'Máy xông hơi khô Sawo SCA được thiết kế linh hoạt với cả hai loại điều khiển cơ và điều khiển điện tử, vỏ ngoài được làm bằng thép không gỉ nhằm bảo đảm an toàn cho người sử dụng và giúp thiết bị bền hơn, tự bảo vệ trong môi trường ẩm ướt.', 'Máy Xông Hơi Khô Sawo SCA-6Kw', 5000000, 'WA0HvDg1QM1r9ijc8tXZ3B8yxB9s39bzH8WV6j0O.jpeg', 'R7hJWxi7hy2jtF5a58szyMecx4WGJocqyyx2n9IE.jpeg', '4ngg6T4TLqLG4AZq1YopkArjg2DRaPoZ4wz4dIlj.jpeg', '6buBUVqS30tzIGWJKZzrZupJzS9n3EROClD0K6gD.jpeg', '<p><strong><em>M&aacute;y x&ocirc;ng hơi kh&ocirc; Sawo SCA</em></strong>&nbsp;được thiết kế linh hoạt với cả hai loại điều khiển cơ v&agrave; điều khiển điện tử, vỏ ngo&agrave;i được l&agrave;m bằng th&eacute;p kh&ocirc;ng gỉ nhằm bảo đảm an to&agrave;n cho người sử dụng v&agrave; gi&uacute;p thiết bị bền hơn, tự bảo vệ trong m&ocirc;i trường ẩm ướt.</p>\r\n\r\n<p>Sawo SCA được lắp đặt sử dụng cho ph&ograve;ng x&ocirc;ng hơi kh&ocirc; với mức nhiều mức c&ocirc;ng suất kh&aacute;c nhau như 4.5KW, 6KW, 9KW ph&ugrave; hợp với mọi k&iacute;ch thước v&agrave; cấu tạo của ph&ograve;ng x&ocirc;ng hơi kh&ocirc;.</p>\r\n\r\n<h3>Cấu tạo v&agrave; nguy&ecirc;n l&yacute; hoạt động m&aacute;y x&ocirc;ng hơi kh&ocirc; Sawo SCA</h3>\r\n\r\n<p><em><strong>Cấu tạo m&aacute;y gồm 3 bộ phận:</strong></em></p>\r\n\r\n<ol>\r\n	<li><strong>Vỏ m&aacute;y:</strong>&nbsp;bao quanh b&ecirc;n ngo&agrave;i, thường được l&agrave;m bằng chất liệu inox hoặc th&eacute;p kh&ocirc;ng gỉ, c&oacute; mạ kẽm gi&uacute;p bảo vệ m&aacute;y v&agrave; tr&aacute;nh nguy hiểm cho người d&ugrave;ng.</li>\r\n	<li><strong>Thanh maiso:</strong>&nbsp;c&oacute; t&aacute;c dụng tạo nhiệt kh&ocirc; l&agrave;m n&oacute;ng đ&aacute; sauna</li>\r\n	<li><strong>Bảng điều khiển cơ v&agrave; điện tử:</strong>&nbsp;cũng được lắp b&ecirc;n ngo&agrave;i ph&ograve;ng x&ocirc;ng c&oacute; t&aacute;c dụng tự động điều chỉnh nhiệt độ hay thời gian x&ocirc;ng hơi ph&ugrave; hợp.</li>\r\n</ol>\r\n\r\n<p><em><strong>Nguy&ecirc;n l&yacute; hoạt động:</strong></em></p>\r\n\r\n<p>M&aacute;y được cấp điện qua đường d&acirc;y dẫn điện, khi c&aacute;c cầu đấu được nối trực tiếp v&agrave;o c&aacute;c d&acirc;y mayso b&ecirc;n trong th&acirc;n m&aacute;y. Trong khoảng thời gian từ 3-5 ph&uacute;t, sẽ tạo ra nhiệt lượng khoảng 50-70 độ C (max=70 độ C, t&ugrave;y v&agrave;o sự c&agrave;i đặt của người d&ugrave;ng); nhiệt lượng tỏa ra l&agrave;m n&oacute;ng c&aacute;c đ&aacute; tỏa nhiệt ph&iacute;a tr&ecirc;n m&aacute;y đốt ch&aacute;y tinh dầu l&agrave;m n&oacute;ng ph&ograve;ng gi&uacute;p người sử dụng c&oacute; những gi&acirc;y ph&uacute;t thư gi&atilde;n v&agrave; thoải m&aacute;i trong ph&ograve;ng x&ocirc;ng.</p>\r\n\r\n<h2><strong><em>Quy tr&igrave;nh lắp đặt v&agrave; những lưu &yacute; khi sử dụng m&aacute;y x&ocirc;ng hơi kh&ocirc; Sawo SCA</em></strong></h2>\r\n\r\n<ul>\r\n	<li>Bước 1: Khảo s&aacute;t vị tr&iacute; đặt m&aacute;y</li>\r\n</ul>\r\n\r\n<p>M&aacute;y x&ocirc;ng hơi kh&ocirc; phải được lắp ở vị tr&iacute; bằng phẳng, gần cửa ra v&agrave;o v&agrave; treo tr&ecirc;n v&aacute;ch ph&ograve;ng c&aacute;ch mặt đất khoảng 270 mm. Tr&aacute;nh đặt m&aacute;y ở nơi ẩm ướt hay ngo&agrave;i trời&hellip;</p>\r\n\r\n<ul>\r\n	<li>Bước 2: Kết nối m&aacute;y v&agrave; đi đường d&acirc;y m&aacute;y.</li>\r\n	<li>Bước 3: Chạy v&agrave; lắp bảng điều khiển</li>\r\n	<li>Bước 4: Chạy thử m&aacute;y</li>\r\n	<li>Bước 5: B&agrave;n giao m&aacute;y v&agrave; hướng dẫn sử dụng cho chủ sở hữu khi đ&atilde; chạy thử ổn định</li>\r\n</ul>\r\n\r\n<h3><em><strong>Những lưu &yacute; khi sử dụng m&aacute;y x&ocirc;ng hơi kh&ocirc;:</strong></em></h3>\r\n\r\n<p>Trước khi x&ocirc;ng hơi bạn n&ecirc;n bật m&aacute;y trước 5-10 ph&uacute;t để ph&ograve;ng tạo đủ nhiệt sau đ&oacute; mới bước v&agrave;o.</p>\r\n\r\n<p>C&oacute; thể th&ecirc;m c&aacute;c loại tinh dầu để cơ thể hấp thụ tinh chất.</p>\r\n\r\n<p>N&ecirc;n tắm qua trước khi x&ocirc;ng v&agrave; tuyệt đối kh&ocirc;ng tắm lại ngay khi vừa x&ocirc;ng xong. N&ecirc;n đợi &iacute;t nhất 50 ph&uacute;t sau mới tắm lại.</p>\r\n\r\n<p>Kh&ocirc;ng x&ocirc;ng hơi qu&aacute; nhiều lần, một tuần chỉ n&ecirc;n từ 2-3 lần, mỗi lần từ 15-30 ph&uacute;t, qu&aacute; thời gian tr&ecirc;n sẽ g&acirc;y phản t&aacute;c dụng.</p>', 2, 16),
(19, 'Sauna SAWO SCA60-NB', 'Máy xông hơi khô Sawo Scandia sử dụng nguyên lý đốt nóng bằng điện trở  kết hợp với đá chuyên dùng tạo nhiệt một cách hiệu quả cho phòng xông hơi khô.', 'Sauna SAWO SCA60-NB', 6000000, 'xGuvTlQY87rVGHIX4usVNpSHmj1hXzM6cmNT9fOW.jpeg', 'ww8CkFP8h6YcaYulV03imt0bARbpjKWH0HdSoOf4.jpeg', 'owakBg3YZdEGvOY4U34xEcy03r2oQsxH781RyAYz.jpeg', 'oZI7uJdBQCV2SR6o3jTheHfgOgI6HN2oexRuIePy.jpeg', '<p>M&aacute;y x&ocirc;ng hơi kh&ocirc; Sawo Scandia sử dụng nguy&ecirc;n l&yacute; đốt n&oacute;ng bằng điện trở&nbsp; kết hợp với đ&aacute; chuy&ecirc;n d&ugrave;ng tạo nhiệt một c&aacute;ch hiệu quả cho ph&ograve;ng x&ocirc;ng hơi kh&ocirc;. K&egrave;m theo đ&oacute; l&agrave; nhiều lựa chọn điều khiển theo nhu cầu người d&ugrave;ng, như: điều khiển bằng cơ t&iacute;ch hợp tr&ecirc;n m&aacute;y hoặc điều khiển điện tử. Ch&iacute;nh sự linh hoạt n&agrave;y đ&atilde; gi&uacute;p d&ograve;ng m&aacute;y Scandia dễ sử dụng đối với mọi ph&ograve;ng x&ocirc;ng hơi loại nhỏ v&agrave; trung b&igrave;nh tại nh&agrave; hoặc Spa.</p>\r\n\r\n<p><strong>T&iacute;nh năng</strong></p>\r\n\r\n<p>M&Aacute;Y X&Ocirc;NG HƠI KH&Ocirc; SAWO SCANDIA DỄ SỬ DỤNG, TIẾT KIỆM&nbsp; DIỆN T&Iacute;CH V&Agrave; ĐIỆN NĂNG</p>\r\n\r\n<p>Thiết kế bề d&agrave;y mỏng, treo tường chắc chắn gi&uacute;p tiết kiệm kh&ocirc;ng gian.</p>\r\n\r\n<p>Vỏ bọc bằng chất liệu th&eacute;p kh&ocirc;ng gỉ, bền đẹp theo thời gian, tăng t&iacute;nh thẩm mỹ cho kh&ocirc;ng gian ph&ograve;ng x&ocirc;ng.</p>\r\n\r\n<p>Thiết kế c&aacute;c lỗ cắt tr&ecirc;n miệng v&agrave; lưới tản nhiệt ph&iacute;a trước th&acirc;n m&aacute;y gi&uacute;p tỏa nhiệt tốt v&agrave; tản nhiệt đều trong ph&ograve;ng x&ocirc;ng hơi.</p>\r\n\r\n<p>C&ocirc;ng suất m&aacute;y nhỏ, nhưng chứa trung b&igrave;nh 18-22kg đ&aacute; tạo nhiệt chuy&ecirc;n d&ugrave;ng. Ch&iacute;nh điều n&agrave;y tạo ra hiệu quả rất r&otilde; rệt trong qu&aacute; tr&igrave;nh tạo nhiệt, giữ nhiệt độ ph&ograve;ng x&ocirc;ng ổn định v&agrave; lưu l&acirc;u hơn, từ đ&oacute; tiết kiệm điện năng ti&ecirc;u thụ.</p>\r\n\r\n<p>C&oacute; 2 lựa chọn đa dạng cho người sử dụng:</p>\r\n\r\n<ul>\r\n	<li>N&uacute;m xoay Analoge (Bộ điều khiển cơ) điều chỉnh nhiệt độ, hẹn thời gian x&ocirc;ng đơn giản, dễ sử dụng, ph&ugrave; hợp với mọi đối tượng nhất l&agrave; phụ nữ v&agrave; người gi&agrave;.</li>\r\n	<li>Bộ điều khiển điện tử tiện nghi, sang trọng hỗ trợ c&agrave;i đặt nhiệt độ, thời gian theo sở th&iacute;ch chi tiết, r&otilde; r&agrave;ng&hellip;chỉ bằng thao t&aacute;c ấn n&uacute;t tr&ecirc;n bảng điều khiển.</li>\r\n</ul>\r\n\r\n<p>M&aacute;y x&ocirc;ng hơi kh&ocirc; Sawo Scandia sử dụng tối ưu đối với&nbsp; ph&ograve;ng x&ocirc;ng nhỏ v&agrave; vừa (từ 2-6 người) với mục đ&iacute;ch trang bị trong gia đ&igrave;nh hoặc thương mại .</p>\r\n\r\n<p>Sản phẩm đạt ti&ecirc;u chuẩn&nbsp; an to&agrave;n điện của Quatest 3.</p>', 2, 16),
(20, 'Máy xông hơi Khô A-12', 'tóm tắt', 'Máy xông hơi Khô A-12', 4000000, 'xcsgUb8AKWSlhHBLf0pBmYpaqkRt4nSTdfbvil7e.jpeg', '3VJ6IigXNyShZKaXhfQ21Q79QqSCmozfWlaAq8JZ.jpeg', 'RXdV9MdJHkoY1DjGEI3a16MkedJOmXOUu8QIfLgp.jpeg', 'CzuUZBMU89OGFxTrNc9rInG8C7Cxk8oIKSUXTqTv.jpeg', '<p>abc</p>', 2, 16),
(21, 'Phòng Xông Hơi Khô K1', 'Phòng Xông Hơi Khô K1', 'Phòng Xông Hơi Khô K1', 34000000, 'Njajrqm4ozbtZIOLj4hhGnpFqA8ZcXMNpWX9k7gD.jpeg', 'FrbAdDQwdB1WnkeleLiK708LJrY2VMjsOEHqtltX.jpeg', 'yc7CY25YG39P2DynRTMkheXN4annHprYSu0e2dzy.jpeg', 'mQxgPO2ffQjZQNPqZEDe0nQ9NMWvu3KKt6rIH1Hu.jpeg', '<p>a</p>', 3, 5),
(22, 'Phòng Xông Hơi Khô K2', 'Phòng Xông Hơi Khô K2', 'Phòng Xông Hơi Khô K2', 35000000, 'kkcJkooj6Fs4B4CoGmmG76M7S024kFeLiur1BNUk.jpeg', '3KWhxGgpgLPgQb3e9pqVgNwcoCD7xsAkclO9inHy.jpeg', 's2S7D5JRC4huOq3wv7hFkhX6dGhKMnSWbbEO4UWj.jpeg', '1VQmv4TGHnIahpkTT8jPrfQqFGcjEW1Sqw3ZkfBf.jpeg', '<p>abc</p>', 3, 5),
(23, 'Phòng Xông Hơi Khô K3', 'Phòng Xông Hơi Khô K3', 'Phòng Xông Hơi Khô K3', 30000000, 'VpgUvUE5crL3LBm7Wy2icr3TXD7KHc8xxzhBCAdx.jpeg', 'dLncWBwxnGjZwFyWhwiUmJq0ToY6ov3SZWeXIadN.jpeg', 'i2lLlhEW8EJ0c4pf5UlhskO8NwNcW1PoCpJxGptR.jpeg', 'uWF3iX1aj4ZeoZsdAqf4YyzDEkjUSnfgKwPQX2fv.jpeg', '<p>abc</p>', 3, 5),
(24, 'Phòng Xông Hơi Hồng Ngoại A1', 'Phòng Xông Hơi Hồng Ngoại A1', 'Phòng Xông Hơi Hồng Ngoại A1', 45000000, 'HePZ6u3IJtiSLwTjtfGKfdjVEH7ckMhyeblYjCAO.jpeg', 'Z0Qz8FREpM1Auq9GLMaJqS7iqyXzqSMc6FgZ98r5.jpeg', 'DLLfF3zextMT6QbxC9ZGUGQ0nIiGWm9WreRI5oHs.jpeg', 'p5yZ7GwqeFhZSKf2yNFUYNRgPmWn7E8TBCeG5qtV.jpeg', '<p>abc</p>', 4, 4),
(25, 'Phòng Xông Hơi Hồng Ngoại A2', 'Phòng Xông Hơi Hồng Ngoại A2', 'Phòng Xông Hơi Hồng Ngoại A2', 65000000, 'JhaMR9v5baWSEBcWCIKJ2hVZjdQIIariN6rpynBO.jpeg', 'essYizE3lgD6615toAMXDQfRSulVe6hyhgdVnWkP.jpeg', 't95bCt8DDB8gvY71R8Yc8QmYlubYBM5W7YFtBjEg.jpeg', '84T5QAVlfIQJMhc5NrBg2IvxXIcKIyolx5VTVpDA.jpeg', '<p>agc</p>', 4, 4),
(26, 'Phòng Xông Hơi Hồng Ngoại A3', 'Phòng Xông Hơi Hồng Ngoại A3', 'Phòng Xông Hơi Hồng Ngoại A2', 46000000, '7C8nxSdLm1Yq7vmddUzWhDrDwP9pDsz4rWvomKbL.jpeg', 'WylKBlsrXyvvsOyPa13hYlH9p9XYZ0zje17XyLd1.jpeg', 'X1Vs0wwNBkXnfBwakhZz3tNRAiT6V1ws8xyTDKCq.jpeg', '3aG91Bo2lWTFteyq5WGrBHubBGsTA51PJ48aHJfy.jpeg', '<p>&aacute;df</p>', 4, 4),
(27, 'Phòng Xông Hơi Đá Muối B2', 'Phòng Xông Hơi Đá Muối B2', 'Phòng Xông Hơi Đá Muối B2', 46000000, 'yneQCPyy0XnHbaAutSuK10gl7LDoHhrfrRHBOQ9M.jpeg', 'aoEPAyuR45BtIs0XGVxyCMhm5su8rvTMIjmQgD1n.jpeg', 'U2IBc8Grd7T0VmrmQysxxtiRIB9WkgCNepygbfrR.jpeg', '0KtSadfILm5rBrA6IO076RFzJ8blmqHBfmAecjWa.jpeg', '<p>&aacute;df</p>', 50, 0),
(28, 'Phòng Xông Hơi Đá Muối B3', 'Phòng Xông Hơi Đá Muối B3', 'Phòng Xông Hơi Đá Muối B3', 64000000, 'AxZsl2IfJrPY1YuKeGo2JzWeNAsrVFizU7tuohQr.jpeg', 'DR979tCCZB69BpNfec46x7oXLtAPCiwFM5jOYzjE.jpeg', 'fRFat5Vb4FC5tbsrxy9AtrDFivZCOzY3hFF1z4Fj.jpeg', '6eTlCOm01ucI0ZTpj16rMMUhYaXvpZS4O7NclPTz.jpeg', '<p>sdf</p>', 50, 0),
(29, 'Phòng Xông Hơi Đá Muối B4', 'Phòng Xông Hơi Đá Muối B4', 'Phòng Xông Hơi Đá Muối B4', 56000000, 'y3cjTbYdIGrv0U6c0SUaZGPGLzIPl5IcnXREAPs5.jpeg', '8MzF4hljyB8fqlXjSdAqtxX3RBqsZJiRTNh6VyFP.jpeg', 'wb4nGjZzfgwmDiXWtVJxCeThs2xDBJVwYZs4FsKg.jpeg', 'ffp8SJJbztxJOesIm0NykO41DUWBzCCfWh9LDQv4.jpeg', '<p>&aacute;df</p>', 50, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`) VALUES
(1, 'admin', '$2y$10$SUh1lzfSrthenGfJICefnOImGAVCiDxqWcVegVdUPHC7oeqoeBxJG', 'Lê Hồng Phong');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaitin`
--
ALTER TABLE `loaitin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `loaitin`
--
ALTER TABLE `loaitin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
