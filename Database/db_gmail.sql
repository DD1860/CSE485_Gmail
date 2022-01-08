-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 10:17 AM
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
-- Table structure for table `tb_client`
--

CREATE TABLE IF NOT EXISTS `tb_client` (
`ID` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `link` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tb_client`
--

INSERT INTO `tb_client` (`ID`, `user_id`, `link`, `date`) VALUES
(10, 1, '86093be21201e748f977e5786a3326d1jpeg', '2022-01-07 09:27:23'),
(11, 2, '69a7c75cc56a18b2e9142ebc52de4602.jpg', '2022-01-07 09:36:16'),
(12, 1, 'bdf6d214a8b77dff8ecac2a71f4395a9.jpg', '2022-01-08 02:51:23'),
(13, 1, '586e508f161f26ce94633729ac56c602.png', '2022-01-08 02:56:10');

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
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=63 ;

--
-- Dumping data for table `tb_mail`
--

INSERT INTO `tb_mail` (`ID`, `from_user`, `to_user`, `subject`, `text`, `time`) VALUES
(42, 1, 2, 'Hỗ trợ kiểm tra Hosting', 'message-sender message-content unread message-sender message-content unreadmessage-sender message-content unreadmessage-sender message-content unreadmessage-sender message-content unreadmessage-sender message-content unreadmessage-sender message-content unreadmessage-sender message-content unreadmessage-sender message-content unreadmessage-sender message-content unreadmessage-sender message-content unread', '0000-00-00 00:00:00'),
(44, 1, 2, 'đơn xin nghỉ học', 'message-sender message-content unreadmessage-sender message-content unreadmessage-sender message-content unreadmessage-sender message-content unreadmessage-sender message-content unreadmessage-sender message-content unreadmessage-sender message-content unreadmessage-sender message-content unread', '0000-00-00 00:00:00'),
(52, 1, 1, 'tiếp tục nè', 'NOT NULLNOT NULLNOT NULLNOT NULLNOT NULLNOT NULLNOT NULLNOT NULLNOT NULLNOT NULLNOT NULLNOT NULLNOT NULLNOT NULLNOT NULLNOT NULLNOT NULLNOT NULLNOT NULLNOT NULLNOT NULLNOT NULLNOT NULLNOT NULLNOT NULLNOT NULLNOT NULLNOT NULLNOT NULLNOT NULL', '2022-01-06 16:16:52'),
(53, 1, 1, 'ai cũng được', 'nhưng làm sao anh quên ??? 2022-01-14 10:25:242022-01-14 10:25:242022-01-14 10:25:242022-01-14 10:25:242022-01-14 10:25:242022-01-14 10:25:242022-01-14 10:25:242022-01-14 10:25:242022-01-14 10:25:242022-01-14 10:25:242022-01-14 10:25:242022-01-14 10:25:24', '2022-01-06 16:17:50'),
(54, 1, 1, 'đi rút tiền đi bro', 'đi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi bro', '2022-01-06 16:18:09'),
(55, 1, 1, 'kiểm tra chức năng gửi tin nhắn', 'đi rút tiền đi bro đi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi brođi rút tiền đi bro', '2022-01-06 16:24:48'),
(56, 2, 2, 'em là Nguyễn Văn A nè anh ơi :(((', 'nhận ra em không anh ? :(\r\nmysqli_fetch_assoc($check_name_sent);\r\nmysqli_fetch_assoc($check_name_sent);\r\nmysqli_fetch_assoc($check_name_sent);\r\nmysqli_fetch_assoc($check_name_sent);', '2022-01-06 17:16:26'),
(57, 2, 1, 'vẫn là em NVA nè', 'mysqli_fetch_assoc($check_name_sent); mysqli_fetch_assoc($check_name_sent);mysqli_fetch_assoc($check_name_sent);mysqli_fetch_assoc($check_name_sent);mysqli_fetch_assoc($check_name_sent);mysqli_fetch_assoc($check_name_sent);mysqli_fetch_assoc($check_name_sent);mysqli_fetch_assoc($check_name_sent);mysqli_fetch_assoc($check_name_sent);mysqli_fetch_assoc($check_name_sent);mysqli_fetch_assoc($check_name_sent);mysqli_fetch_assoc($check_name_sent);mysqli_fetch_assoc($check_name_sent);', '2022-01-06 17:16:56'),
(60, 1, 0, 'hy vọng là gửi được', 'thần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\nthần linh ban phướccccccc\r\n', '2022-01-06 18:14:40'),
(62, 1, 2, 'Bạn khỏe không NVA ?', 'Hy vọng bạn sẽ đạt điểm cao <3\r\nHy vọng bạn sẽ đạt điểm cao <3\r\nHy vọng bạn sẽ đạt điểm cao <3\r\nHy vọng bạn sẽ đạt điểm cao <3\r\nHy vọng bạn sẽ đạt điểm cao <3\r\nHy vọng bạn sẽ đạt điểm cao <3\r\nHy vọng bạn sẽ đạt điểm cao <3\r\nHy vọng bạn sẽ đạt điểm cao <3\r\nHy vọng bạn sẽ đạt điểm cao <3\r\nHy vọng bạn sẽ đạt điểm cao <3\r\nHy vọng bạn sẽ đạt điểm cao <3\r\nHy vọng bạn sẽ đạt điểm cao <3\r\nHy vọng bạn sẽ đạt điểm cao <3\r\nHy vọng bạn sẽ đạt điểm cao <3\r\nHy vọng bạn sẽ đạt điểm cao <3\r\n', '2022-01-06 18:22:23');

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
-- Indexes for table `tb_client`
--
ALTER TABLE `tb_client`
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
-- AUTO_INCREMENT for table `tb_client`
--
ALTER TABLE `tb_client`
MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_mail`
--
ALTER TABLE `tb_mail`
MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
