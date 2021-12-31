-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2021 at 03:24 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_gmail`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
`ID` int(10) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`ID`, `email`, `password`) VALUES
(1, 'daiduc@gmail.com', 'daiduc'),
(2, 'vanhoan@gmail.com', 'vanhoan'),
(3, 'honggam@gmail.com', 'honggam');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mail`
--

CREATE TABLE IF NOT EXISTS `tb_mail` (
`ID` int(10) unsigned NOT NULL,
  `from_user` int(10) unsigned NOT NULL,
  `to_user` int(10) unsigned NOT NULL,
  `subject` text CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  `time` int(10) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=33 ;

--
-- Dumping data for table `tb_mail`
--

INSERT INTO `tb_mail` (`ID`, `from_user`, `to_user`, `subject`, `text`, `time`) VALUES
(17, 1, 1, 'Hỗ trợ kiểm tra Hosting', 'Ngày 24/12, một lãnh đạo Bệnh viện Trung ương Quân đội 108 cũng xác nhận với Zing đơn vị này đã xác định một ca nhiễm chủng Omicron qua giải trình tự gene.\r\n\r\nCùng ngày, GISAID, trang thông tin cung cấp dữ liệu bộ gen của virus cúm và virus gây ra đại dịch Covid-19, cập nhật vị trí biến chủng Omicron xuất hiện tại Hà Nội.\r\n\r\nĐầu tháng 12, Bộ Y tế phát đi văn bản yêu cầu các địa phương tăng cường biện pháp phòng, chống dịch và tích cực giám sát biến chủng mới. Cơ quan này nhận định nguy cơ biến chủng Omircon xâm nhập Việt Nam rất cao.', 123456),
(22, 1, 1, 'Hỗ trợ kiểm tra Hosting', 'Chiều 27/12, theo thông tin từ Bệnh viện Trung ương Quân đội 108 (Hà Nội), trường hợp đầu tiên nhiễm biến chủng Omicron đang được điều trị theo phác đồ của Bộ Y tế.\r\n\r\nTình trạng sức khỏe của người này ổn định, chưa có biểu hiện triệu chứng lâm sàng. Theo chẩn đoán ban đầu của các bác sĩ, đây là trường hợp mắc Covid-19 không triệu chứng, nguy cơ thấp.\r\n\r\nTrước đó, ngày 19/12, đơn vị này tiếp nhận một hành khách trên chuyến bay Bambo Airway QH9028 từ Anh về Việt Nam có test nhanh dương tính với SARS-CoV-2 tại sân bay.', 123456),
(23, 1, 1, 'kiểm tra chức năng gửi tin nhắn', 'Chiều 27/12, theo thông tin từ Bệnh viện Trung ương Quân đội 108 (Hà Nội), trường hợp đầu tiên nhiễm biến chủng Omicron đang được điều trị theo phác đồ của Bộ Y tế.\r\n\r\nTình trạng sức khỏe của người này ổn định, chưa có biểu hiện triệu chứng lâm sàng. Theo chẩn đoán ban đầu của các bác sĩ, đây là trường hợp mắc Covid-19 không triệu chứng, nguy cơ thấp.\r\n\r\nTrước đó, ngày 19/12, đơn vị này tiếp nhận một hành khách trên chuyến bay Bambo Airway QH9028 từ Anh về Việt Nam có test nhanh dương tính với SARS-CoV-2 tại sân bay.', 123456),
(25, 1, 1, 'kiểm tra chức năng gửi tin nhắn', 'Chiều 27/12, theo thông tin từ Bệnh viện Trung ương Quân đội 108 (Hà Nội), trường hợp đầu tiên nhiễm biến chủng Omicron đang được điều trị theo phác đồ của Bộ Y tế.\r\n\r\nTình trạng sức khỏe của người này ổn định, chưa có biểu hiện triệu chứng lâm sàng. Theo chẩn đoán ban đầu của các bác sĩ, đây là trường hợp mắc Covid-19 không triệu chứng, nguy cơ thấp.\r\n\r\nTrước đó, ngày 19/12, đơn vị này tiếp nhận một hành khách trên chuyến bay Bambo Airway QH9028 từ Anh về Việt Nam có test nhanh dương tính với SARS-CoV-2 tại sân bay.', 123456),
(26, 1, 1, 'xóa tin nhắn này đi', 'Chiều 27/12, theo thông tin từ Bệnh viện Trung ương Quân đội 108 (Hà Nội), trường hợp đầu tiên nhiễm biến chủng Omicron đang được điều trị theo phác đồ của Bộ Y tế.\r\n\r\nTình trạng sức khỏe của người này ổn định, chưa có biểu hiện triệu chứng lâm sàng. Theo chẩn đoán ban đầu của các bác sĩ, đây là trường hợp mắc Covid-19 không triệu chứng, nguy cơ thấp.\r\n\r\nTrước đó, ngày 19/12, đơn vị này tiếp nhận một hành khách trên chuyến bay Bambo Airway QH9028 từ Anh về Việt Nam có test nhanh dương tính với SARS-CoV-2 tại sân bay.', 123456),
(28, 1, 1, 'xóa tin nhắn này đi', 'Chiều 27/12, theo thông tin từ Bệnh viện Trung ương Quân đội 108 (Hà Nội), trường hợp đầu tiên nhiễm biến chủng Omicron đang được điều trị theo phác đồ của Bộ Y tế.\r\n\r\nTình trạng sức khỏe của người này ổn định, chưa có biểu hiện triệu chứng lâm sàng. Theo chẩn đoán ban đầu của các bác sĩ, đây là trường hợp mắc Covid-19 không triệu chứng, nguy cơ thấp.\r\n\r\nTrước đó, ngày 19/12, đơn vị này tiếp nhận một hành khách trên chuyến bay Bambo Airway QH9028 từ Anh về Việt Nam có test nhanh dương tính với SARS-CoV-2 tại sân bay.', 123456),
(29, 1, 1, 'Hỗ trợ kiểm tra Hosting', 'Chiều 27/12, theo thông tin từ Bệnh viện Trung ương Quân đội 108 (Hà Nội), trường hợp đầu tiên nhiễm biến chủng Omicron đang được điều trị theo phác đồ của Bộ Y tế.\r\n\r\nTình trạng sức khỏe của người này ổn định, chưa có biểu hiện triệu chứng lâm sàng. Theo chẩn đoán ban đầu của các bác sĩ, đây là trường hợp mắc Covid-19 không triệu chứng, nguy cơ thấp.\r\n\r\nTrước đó, ngày 19/12, đơn vị này tiếp nhận một hành khách trên chuyến bay Bambo Airway QH9028 từ Anh về Việt Nam có test nhanh dương tính với SARS-CoV-2 tại sân bay.', 123456),
(30, 1, 1, 'kiểm tra chức năng gửi tin nhắn', 'Chiều 27/12, theo thông tin từ Bệnh viện Trung ương Quân đội 108 (Hà Nội), trường hợp đầu tiên nhiễm biến chủng Omicron đang được điều trị theo phác đồ của Bộ Y tế.\r\n\r\nTình trạng sức khỏe của người này ổn định, chưa có biểu hiện triệu chứng lâm sàng. Theo chẩn đoán ban đầu của các bác sĩ, đây là trường hợp mắc Covid-19 không triệu chứng, nguy cơ thấp.\r\n\r\nTrước đó, ngày 19/12, đơn vị này tiếp nhận một hành khách trên chuyến bay Bambo Airway QH9028 từ Anh về Việt Nam có test nhanh dương tính với SARS-CoV-2 tại sân bay.', 123456),
(31, 1, 1, 'Hỗ trợ kiểm tra Hosting', 'Ngày 24/12, một lãnh đạo Bệnh viện Trung ương Quân đội 108 cũng xác nhận với Zing đơn vị này đã xác định một ca nhiễm chủng Omicron qua giải trình tự gene.\r\n\r\nCùng ngày, GISAID, trang thông tin cung cấp dữ liệu bộ gen của virus cúm và virus gây ra đại dịch Covid-19, cập nhật vị trí biến chủng Omicron xuất hiện tại Hà Nội.\r\n\r\nĐầu tháng 12, Bộ Y tế phát đi văn bản yêu cầu các địa phương tăng cường biện pháp phòng, chống dịch và tích cực giám sát biến chủng mới. Cơ quan này nhận định nguy cơ biến chủng Omircon xâm nhập Việt Nam rất cao.', 123456),
(32, 1, 1, 'kiểm tra chức năng gửi tin nhắn', 'Ngày 24/12, một lãnh đạo Bệnh viện Trung ương Quân đội 108 cũng xác nhận với Zing đơn vị này đã xác định một ca nhiễm chủng Omicron qua giải trình tự gene.\r\n\r\nCùng ngày, GISAID, trang thông tin cung cấp dữ liệu bộ gen của virus cúm và virus gây ra đại dịch Covid-19, cập nhật vị trí biến chủng Omicron xuất hiện tại Hà Nội.\r\n\r\nĐầu tháng 12, Bộ Y tế phát đi văn bản yêu cầu các địa phương tăng cường biện pháp phòng, chống dịch và tích cực giám sát biến chủng mới. Cơ quan này nhận định nguy cơ biến chủng Omircon xâm nhập Việt Nam rất cao.', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
`ID` int(10) NOT NULL,
  `firstName` varchar(20) CHARACTER SET utf8 NOT NULL,
  `lastName` varchar(35) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`ID`, `firstName`, `lastName`, `email`, `password`) VALUES
(1, 'Đại', 'Đức', 'phungdaiduc.61th@gmail.com', 'daiduc32'),
(2, 'Nguyễn', 'Văn A', 'nva@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_mail`
--
ALTER TABLE `tb_mail`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_mail`
--
ALTER TABLE `tb_mail`
MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
