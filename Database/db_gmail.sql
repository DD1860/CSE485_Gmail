-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2022 at 06:31 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gmail`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `ID` int(10) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

CREATE TABLE `tb_mail` (
  `ID` int(10) UNSIGNED NOT NULL,
  `from_user` int(10) UNSIGNED NOT NULL,
  `to_user` int(10) UNSIGNED NOT NULL,
  `subject` text CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_mail`
--

INSERT INTO `tb_mail` (`ID`, `from_user`, `to_user`, `subject`, `text`, `time`) VALUES
(1, 10, 1, 'Kiện hàng của bạn giao không thành công #1', 'Đại Đức ơi,\r\n\r\nLazada rất tiếc vì bạn đã không nhận được kiện hàng vào hôm nay. Lazada rất tiếc vì bạn đã không nhận được kiện hàng giao bởi BEST vì lý do Không thể liên lạc với người nhận.\r\n\r\nLazada sẽ sắp xếp lịch giao hàng mới để thực hiện gửi kiện hàng đến bạn trong thời gian sớm nhất. Bạn vui lòng kiểm tra cuộc gọi từ phía nhân viên giao hàng để cập nhật lịch giao hàng mới nhất nhé.\r\n\r\nVui lòng chuẩn bị 4,711,100 VND để thanh toán và có thể tìm hiểu chi tiết bên dưới nhé.', '2022-01-12 06:10:35'),
(2, 5, 1, 'Xác Nhận Địa Chỉ Email Discord', '035768 này,\r\ncảm ơn bạn đã đăng ký tài khoản Discord! Trước khi bắt đầu, chúng tôi cần xác nhận rằng người đăng nhập là bạn. Nhấn vào bên dưới để xác nhận địa chỉ email:', '2022-01-12 15:10:45'),
(3, 8, 1, 'Thông báo tạm khóa gói dịch vụ Hosting miễn phí', 'Kính chào Phung Dai Duc,\r\n\r\n123HOST xin thông báo gói dịch vụ sau của quý khách hàng đã bị tạm khóa:\r\n\r\nTên gói dịch vụ: Free-Host-200\r\n\r\nTên miền: vfarm.tk\r\n\r\n\r\nNguyên nhân gói dịch vụ bị khóa có thể do quý khách không click Gia hạn tại phần Thời hạn&Gia hạn hoặc do các lý do khác. Quý khách hàng vui lòng liên hệ với 123HOST để biết thêm chi tiết.', '2022-01-12 08:15:14'),
(4, 2, 1, '[New post] Những quy luật vui của cuộc sống (phần 1)', 'Quy luật về trưởng thành: \"Trưởng thành chính là quá trình điều chỉnh tiếng khóc của bạn về chế độ im lặng\". Quy luật về sỉ nhục: \"Khi bị sỉ nhục, cách tốt nhất là hãy bỏ qua. Nếu không thể bỏ qua, hãy coi thường nó. Nếu đến việc coi thường nó mà bạn […]', '2022-01-12 08:16:35'),
(5, 3, 1, 'Re: [DD1860/CSE485_Gmail] Tong van hoan (PR #4)', 'Merged #4 into main.\r\n\r\n—\r\nReply to this email directly, view it on GitHub, or unsubscribe.\r\nTriage notifications on the go with GitHub Mobile for iOS or Android.\r\nYou are receiving this because you authored the thread.', '2022-01-12 07:06:49'),
(6, 4, 1, 'Did you log into Facebook from somewhere new?', 'Hi Luke\r\n \r\nIt looks like someone tried to log into your account on January 10 at 4:33 PM using Chrome for Windows 10. We blocked the login and just want to make sure it was you, logging in from somewhere new.\r\n \r\nIf you don\'t think this was you, please log into Facebook so we can walk you through a few steps to keep your account safe.\r\n \r\nThanks,\r\nThe Facebook team', '2022-01-12 07:07:35'),
(7, 10, 1, 'Just 12 days left! Try all of Clip Studio Paint’s features again for free!', 'If you already used your 30-day trial or if your free offer period has expired, you can once again use all the features on a single Windows, macOS, iPad, Chromebook, or Galaxy or Android tablet device of your choice until January 18, 2022.\r\n\r\nOver the past year, we have been busy improving and adding functionality to Clip Studio Paint. Notable changes include, adding dual brush functionality as well as a new liquify tool, and improvements to watercolor and oil paint brushes, touch gestures on Windows devices, and new 3D models.\r\n\r\nEven if you’ve already used your 30-day trial, don’t miss out on the chance to use Clip Studio Paint again!', '2022-01-12 08:08:45'),
(8, 9, 1, 'The Overflow #105: An oral history of Stack Overflow', 'Welcome to ISSUE #105 of The Overflow! This newsletter is by developers, for developers, written and curated by the Stack Overflow team and Cassidy Williams. This week: Hat season on Stack Exchange, an oral history of Stack Overflow to mark our 400th (!) podcast episode, and how to build a high-velocity DevOps culture.', '2022-01-12 09:10:35'),
(9, 6, 1, '✨Welcome to the GitHub Student Developer Pack!✨', 'Welcome! Thank you for joining GitHub Education, we’re so happy you’re here! GitHub Education helps students, teachers, and schools access the tools and events they need to shape the next generation of software development.', '2022-01-12 10:50:35'),
(10, 1, 2, 'kiểm tra chức năng gửi tin nhắn', 'Welcome! Thank you for joining GitHub Education, we’re so happy you’re here! GitHub Education helps students, teachers, and schools access the tools and events they need to shape the next generation of software development.\r\n\r\nWelcome! Thank you for joining GitHub Education, we’re so happy you’re here! GitHub Education helps students, teachers, and schools access the tools and events they need to shape the next generation of software development.', '2022-01-12 00:24:34'),
(11, 9, 1, 'FREE Webinar: Overview of Clip Studio Paint 1.11.6 new features, updates and improvements', 'Join us on Thursday, December 16 at 2pm PDT (California Time) for a FREE 1-hour webinar with artist Sarajean Chung, aka TheOneWithBear. The wait is finally over! The much requested feature, Liquify, is now in Clip Studio Paint. This session will cover all of the major features added to version 1.11.6. Come join us to learn about Liquify, improved 3D tools such as Primitives, Panorama, Snapping and Aligned Copy, as well as many useful features including importing PS gradient files, font files, PDF, and more!. Following the presentation, there will be a Q&A session.', '2022-01-12 14:10:45'),
(12, 1, 3, 'Hỗ trợ kiểm tra Hosting', 'Welcome! Thank you for joining GitHub Education, we’re so happy you’re here! GitHub Education helps students, teachers, and schools access the tools and events they need to shape the next generation of software development.\r\n\r\n✨Welcome to the GitHub Student Developer Pack!✨', '2022-01-12 00:26:22'),
(13, 4, 1, 'Liên kết đặt lại mật khẩu TeamViewer của bạn', 'Quý khách hàng thân mến,\r\n\r\nChúng tôi đã nhận được yêu cầu đặt lại mật khẩu TeamViewer. \r\n\r\nPhê duyệt Yêu cầu\r\n\r\nNếu bạn không yêu cầu điều này, bạn không cần thực hiện hành động nào — vui lòng bỏ qua email này.\r\n\r\nBạn có câu hỏi? Cần Giúp đỡ? Vui lòng truy cập bộ phận Hỗ trợ của TeamViewer\r\n\r\nเชื่อมต่อกันเสมอ ,\r\nTeamViewer', '2022-01-12 16:08:45'),
(14, 7, 1, 'We\'d love to hear your opinion', 'Merged #4 into main.\r\n\r\n—\r\nReply to this email directly, view it on GitHub, or unsubscribe.\r\nTriage notifications on the go with GitHub Mobile for iOS or Android.\r\nYou are receiving this because you authored the thread.', '2022-01-12 17:06:49'),
(15, 8, 1, 'Đã có đề kiểm tra chính thức tháng 12 - toán lớp 5 - trên Trường Toán Pitag', 'Chào bạn Đại Đức,\r\n\r\nĐã có chương trình học và đề kiểm tra chính thức của tháng 12, toán lớp 5 trên mạng Trường Toán Pitago. Bạn hãy vào làm bài tại đây.\r\n\r\nNội dung bài kiểm tra này được biên soạn bởi các nhà giáo giàu kinh nghiệm, bám sát theo sách giáo khoa và chương trình học trên lớp. (8 – 12 tuần gần nhất), bao gồm bài tập từ Cơ bản đến Nâng cao.\r\n\r\nSau khi làm bài, học sinh và phụ huynh sẽ nhận được nhận xét chi tiết, trong đó chỉ rõ các phần kiến thức các em còn chưa vững, cần ôn luyện thêm, kèm theo tài liệu học chi tiết...\r\n\r\nNếu có thêm bất kỳ câu hỏi nào, xin hãy gọi cho chúng tôi để được tư vấn thêm.\r\n\r\n\r\nTrường Toán Trực tuyến Pitago', '2022-01-12 19:24:34');

-- --------------------------------------------------------

--
-- Table structure for table `tb_uploads`
--

CREATE TABLE `tb_uploads` (
  `ID` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `link` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_uploads`
--

INSERT INTO `tb_uploads` (`ID`, `user_id`, `link`, `date`) VALUES
(1, 1, 'b3941732e76a7dbb2fef2bd791b2d895.png', '2022-01-11 16:59:08'),
(2, 3, '4a301072dec6b6a49050e5b294cd7983.png', '2022-01-11 17:00:25'),
(3, 2, '41b586905e6233e72b076191f8bf9512.png', '2022-01-11 17:01:50'),
(4, 4, '02b0ac8cf752c22ba9df4d77235537b4.png', '2022-01-11 17:03:20'),
(5, 5, 'f93446e3447ab765dc720389473df09b.png', '2022-01-11 17:04:25'),
(6, 6, 'd671a5a25bccab5bb1d0744d3ae8f729.png', '2022-01-11 17:05:45'),
(7, 7, '4a301072dec6b6a49050e5b294cd7983.png', '2022-01-11 17:06:33'),
(8, 8, '41b586905e6233e72b076191f8bf9512.png', '2022-01-11 17:07:10'),
(9, 9, '4389d9b5e3ba297410a11afc0b8e101b.png', '2022-01-11 17:07:59'),
(10, 10, 'f93446e3447ab765dc720389473df09b.png', '2022-01-11 17:08:41');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `ID` int(10) NOT NULL,
  `firstName` varchar(20) CHARACTER SET utf8 NOT NULL,
  `lastName` varchar(35) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`ID`, `firstName`, `lastName`, `email`, `password`, `ngaysinh`, `gioitinh`, `phone`) VALUES
(1, 'Phùng ', 'Đại Đức', 'phungdaiduc.61th@gmail.com', 'daiduc32', '0000-00-00', '', ''),
(2, 'Vũ Thị', 'Hồng Gấm', 'honggam@gmail.com', '12345', '0000-00-00', '', ''),
(3, 'Tòng Văn', 'Hoàn', 'tongvanhoan@gmail.com', '1234', '0000-00-00', 'Nam', ''),
(4, 'Nguyễn Thanh', 'Đào', 'daont@gmail.com', 'daodao', '0000-00-00', '', ''),
(5, 'Đặng Đức', 'Hiệp', 'duchiep@gmail.com', 'hiep2001', '0000-00-00', '', ''),
(6, 'Phùng Thị', 'Thiên Định', 'thiedinhca@gmail.com', 'dinh1998', '0000-00-00', '', ''),
(7, 'Dương', 'Đức Duy', 'duyuonglam@gmail.com', '123duy@', '0000-00-00', '', ''),
(8, 'Cao Thu', 'Hà', 'caothuha@gmail.com', 'haxinkdep', '0000-00-00', '', ''),
(9, 'Nghiêm', 'Hồng Ngát', 'ngattransform@gmail.com', 'ngatngat', '0000-00-00', '', ''),
(10, 'Trần Đức', 'Duy', 'duytran2001@gmail.com', '123987', '0000-00-00', '', '');

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
-- Indexes for table `tb_uploads`
--
ALTER TABLE `tb_uploads`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_mail`
--
ALTER TABLE `tb_mail`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_uploads`
--
ALTER TABLE `tb_uploads`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
