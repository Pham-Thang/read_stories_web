-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 10, 2020 lúc 02:57 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `story_management`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `authors`
--

CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Horror'),
(2, 'Than Bi'),
(3, 'Trinh Tham'),
(4, 'Action'),
(5, 'Anime'),
(6, 'Comedy'),
(7, 'School Life'),
(8, 'Dam Mi'),
(9, 'Fantasy'),
(10, 'Historical'),
(11, 'ngon tinh'),
(12, 'Adventure'),
(13, 'ecchi'),
(14, 'shounen'),
(15, 'doujinshi'),
(16, 'drama'),
(17, 'one shot'),
(18, 'harem'),
(19, 'mystery'),
(20, 'josei'),
(21, 'live action'),
(22, 'manhua'),
(23, 'manhwa'),
(24, 'mature'),
(25, 'mecha'),
(29, 'pyschological'),
(30, 'romance'),
(31, 'seine'),
(32, 'shoujo'),
(33, 'smut'),
(34, 'sport'),
(35, 'tragedy'),
(37, 'webtoon');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chapters`
--

CREATE TABLE `chapters` (
  `ordernumerical` int(11) NOT NULL,
  `chapter_name` varchar(100) NOT NULL,
  `story_id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chapters`
--

INSERT INTO `chapters` (`ordernumerical`, `chapter_name`, `story_id`, `link`) VALUES
(1, '0', 1, 'https://upload.wikimedia.org/wikipedia/vi/thumb/3/3e/Detective_conan_cover_1.jpg/230px-Detective_conan_cover_1.jpg'),
(1, '0', 2, 'https://upload.wikimedia.org/wikipedia/vi/thumb/3/3e/Detective_conan_cover_1.jpg/230px-Detective_conan_cover_1.jpg'),
(1, '0', 3, 'https://upload.wikimedia.org/wikipedia/vi/thumb/3/3e/Detective_conan_cover_1.jpg/230px-Detective_conan_cover_1.jpg'),
(1, '0', 4, 'https://upload.wikimedia.org/wikipedia/vi/thumb/3/3e/Detective_conan_cover_1.jpg/230px-Detective_conan_cover_1.jpg'),
(1, '0', 5, 'https://upload.wikimedia.org/wikipedia/vi/thumb/3/3e/Detective_conan_cover_1.jpg/230px-Detective_conan_cover_1.jpg'),
(1, '0', 6, 'https://upload.wikimedia.org/wikipedia/vi/thumb/3/3e/Detective_conan_cover_1.jpg/230px-Detective_conan_cover_1.jpg'),
(1, '0', 7, 'https://upload.wikimedia.org/wikipedia/vi/thumb/3/3e/Detective_conan_cover_1.jpg/230px-Detective_conan_cover_1.jpg'),
(1, '0', 8, 'https://upload.wikimedia.org/wikipedia/vi/thumb/3/3e/Detective_conan_cover_1.jpg/230px-Detective_conan_cover_1.jpg'),
(1, '0', 9, 'https://upload.wikimedia.org/wikipedia/vi/thumb/3/3e/Detective_conan_cover_1.jpg/230px-Detective_conan_cover_1.jpg'),
(1, '0', 10, 'https://upload.wikimedia.org/wikipedia/vi/thumb/3/3e/Detective_conan_cover_1.jpg/230px-Detective_conan_cover_1.jpg'),
(1, '0', 11, 'https://upload.wikimedia.org/wikipedia/vi/thumb/3/3e/Detective_conan_cover_1.jpg/230px-Detective_conan_cover_1.jpg'),
(1, '0', 12, 'https://upload.wikimedia.org/wikipedia/vi/thumb/3/3e/Detective_conan_cover_1.jpg/230px-Detective_conan_cover_1.jpg'),
(1, '0', 13, 'https://upload.wikimedia.org/wikipedia/vi/thumb/3/3e/Detective_conan_cover_1.jpg/230px-Detective_conan_cover_1.jpg'),
(1, '0', 14, 'https://upload.wikimedia.org/wikipedia/vi/thumb/3/3e/Detective_conan_cover_1.jpg/230px-Detective_conan_cover_1.jpg'),
(1, '0', 15, 'https://upload.wikimedia.org/wikipedia/vi/thumb/3/3e/Detective_conan_cover_1.jpg/230px-Detective_conan_cover_1.jpg'),
(1, '0', 16, 'https://upload.wikimedia.org/wikipedia/vi/thumb/3/3e/Detective_conan_cover_1.jpg/230px-Detective_conan_cover_1.jpg'),
(1, '0', 17, 'https://upload.wikimedia.org/wikipedia/vi/thumb/3/3e/Detective_conan_cover_1.jpg/230px-Detective_conan_cover_1.jpg'),
(1, '0', 18, 'https://upload.wikimedia.org/wikipedia/vi/thumb/3/3e/Detective_conan_cover_1.jpg/230px-Detective_conan_cover_1.jpg'),
(1, 'chapter 1', 19, 'http://st.truyenchon.com/data/comics/20/vo-nghich-cuu-thien.jpg'),
(2, 'chapter 2', 19, 'http://st.truyenchon.com/data/comics/20/vo-nghich-cuu-thien.jpg'),
(3, 'chapter 3', 19, 'http://st.truyenchon.com/data/comics/109/ma-ca-rong-quy-toc.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `story_id` int(11) NOT NULL,
  `account` varchar(20) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`comment_id`, `story_id`, `account`, `content`) VALUES
(1, 17, 'phamthang', 'a'),
(2, 1, 'phamthang', 'asd'),
(3, 19, 'phamthang', 'kaakakakakakaka'),
(4, 19, 'phamthang', 'JJJJJJJJJJJJJJJJJJJJJ'),
(5, 15, 'phamthang', 'HAHAHAHAH'),
(6, 19, '18021140', 'kkkkkkkkkkkkkkkkkkkkkkkkk'),
(7, 19, '18021140', 'hahahahhhhhhhhhhh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `composed`
--

CREATE TABLE `composed` (
  `story_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `readstories`
--

CREATE TABLE `readstories` (
  `story_id` int(11) NOT NULL,
  `account` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `stories`
--

CREATE TABLE `stories` (
  `story_id` int(11) NOT NULL,
  `story_name` varchar(100) NOT NULL,
  `day_update` timestamp NOT NULL DEFAULT current_timestamp(),
  `story_image` varchar(255) NOT NULL,
  `view` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `stories`
--

INSERT INTO `stories` (`story_id`, `story_name`, `day_update`, `story_image`, `view`) VALUES
(1, 'conan', '2020-11-09 22:53:22', 'https://upload.wikimedia.org/wikipedia/vi/thumb/3/3e/Detective_conan_cover_1.jpg/230px-Detective_conan_cover_1.jpg', 0),
(2, 'wonted', '2020-11-09 22:53:22', 'http://st.truyenchon.com/data/comics/237/wonted.jpg', 0),
(3, 'ma dao to su', '2020-11-09 22:53:22', 'https://3.bp.blogspot.com/-ygi8BwPu7aw/W43PRSMsXqI/AAAAAAAAZVE/27exMPoLyvg5dyWO_fhKjHRmkh9RyPf1ACHMYCw/ma-dao-to-su-mao-doan-tieu-kiem-kiem', 0),
(4, 'death note', '2020-11-09 22:53:22', 'https://upload.wikimedia.org/wikipedia/vi/thumb/7/7d/DeathNote_vol1_cover.jpg/275px-DeathNote_vol1_cover.jpg', 0),
(5, 'one piece', '2020-11-09 22:53:22', 'https://upload.wikimedia.org/wikipedia/en/thumb/9/90/One_Piece%2C_Volume_61_Cover_%28Japanese%29.jpg/220px-One_Piece%2C_Volume_61_Cover_%28Japanese%29.jpg', 0),
(6, 'toan chuc phap su', '2020-11-09 22:53:22', 'https://weblinhtinh.xyz/wp-content/uploads/2020/05/toan-chuc-phap-su-2-quanzhi-fashi-season-2-250x350.jpg', 0),
(7, 'one punch man', '2020-11-09 22:53:22', 'https://i.pinimg.com/236x/fa/11/c5/fa11c51174ffab470ba9768eb991688d.jpg', 0),
(8, 'naruto', '2020-11-09 22:53:22', 'http://st.truyenchon.com/data/comics/220/naruto-cuu-vi-ho-ly.jpg', 0),
(9, 'solo leveling', '2020-11-09 22:53:22', 'http://st.truyenchon.com/data/comics/29/toi-thang-cap-mot-minh.jpg', 0),
(10, 'nanyak', '2020-11-09 22:53:22', 'http://st.nettruyen.com/data/comics/218/nanyak.jpg', 0),
(11, 'mao', '2020-11-09 22:53:22', 'https://upload.wikimedia.org/wikipedia/en/thumb/e/ed/MAO_Vol_1.jpg/220px-MAO_Vol_1.jpg', 0),
(12, 'doraemon', '2020-11-09 22:53:22', 'https://i.postimg.cc/s1dHhXnJ/doraemon.jpg', 0),
(13, 'nam dam', '2020-11-09 22:53:22', 'http://st.nettruyen.com/data/comics/226/nam-dam.jpg', 0),
(14, 'parasite', '2020-11-09 22:53:22', 'http://st.nettruyen.com/data/comics/80/di-toc-trung-sinh.jpg', 0),
(15, 'hero', '2020-11-09 22:53:22', 'http://st.nettruyen.com/data/comics/178/heros.jpg', 0),
(16, 'fairy tail', '2020-11-09 22:53:22', 'http://st.nettruyen.com/data/comics/143/hoi-phap-su-chuyen-phieu-luu-ki-thu-cua-614.jpg', 0),
(17, 'gigant', '2020-11-09 22:53:22', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ7StcKj9pDM5lANjRzCWR6C4_SmEVLO42tAg&usqp=CAU', 0),
(19, 'cung dau', '2020-11-10 00:12:16', 'http://st.truyenchon.com/data/comics/13/cung-dau-live.jpg', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `storycategory`
--

CREATE TABLE `storycategory` (
  `story_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `storycategory`
--

INSERT INTO `storycategory` (`story_id`, `category_id`) VALUES
(1, 3),
(1, 5),
(3, 1),
(4, 2),
(2, 5),
(1, 6),
(7, 4),
(5, 5),
(12, 8),
(5, 3),
(6, 5),
(8, 5),
(9, 5),
(2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `account` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `sex` tinyint(1) DEFAULT NULL,
  `description` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`account`, `password`, `fullname`, `email`, `birthday`, `sex`, `description`) VALUES
('18021140', '12345', 'pham viet thang', 'thangpvno1@gmail.com', '2000-02-01', NULL, NULL),
('phamthang', 'thang2010', 'viet thang ', 'thangkui@vip.com', '2000-10-20', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Chỉ mục cho bảng `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`story_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`account`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `stories`
--
ALTER TABLE `stories`
  MODIFY `story_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
