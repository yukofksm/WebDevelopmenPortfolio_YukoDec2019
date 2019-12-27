-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2019 年 12 月 27 日 03:40
-- サーバのバージョン： 5.7.26
-- PHP のバージョン: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `hotel`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `adult` int(11) NOT NULL,
  `kids` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `book`
--

INSERT INTO `book` (`book_id`, `checkin`, `checkout`, `adult`, `kids`, `room_id`, `user_id`, `firstname`) VALUES
(1, '2019-12-12', '2019-12-16', 2, 0, 5, 1, ''),
(2, '2019-12-19', '2019-12-20', 2, 1, 5, 3, ''),
(4, '2019-12-10', '2019-12-11', 4, 0, 6, 4, ''),
(5, '2019-12-24', '2019-12-25', 2, 2, 1, 2, 'Arika'),
(6, '2019-12-27', '2019-12-28', 2, 1, 1, 2, 'Arika'),
(7, '2019-12-03', '2019-12-04', 2, 1, 1, 2, 'Arika'),
(8, '2019-12-03', '2019-12-04', 2, 0, 1, 2, 'Arika'),
(9, '2019-12-05', '2019-12-08', 2, 0, 5, 1, 'Yuko'),
(10, '2019-12-13', '2019-12-14', 2, 0, 10, 1, 'Yuko');

-- --------------------------------------------------------

--
-- テーブルの構造 `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `contact`
--

INSERT INTO `contact` (`contact_id`, `message`, `name`, `email`, `subject`) VALUES
(1, 'test', 'tet', 'test', 'test'),
(2, 'hello.You wont probably see it on the menu because its not as heavily advertised but if you ever need a mini caffeine jolt, you can just get your hot coffee in their short cup! Its the smallest and definitely, the cheapest. All you need to do is ask for ', 'yuko', 'fukusuke.pipi@gmail.com', 'hello'),
(3, 'ok', 'yuko', 'fukusuke.pipi@gmail.com', 'hello');

-- --------------------------------------------------------

--
-- テーブルの構造 `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_num` int(11) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `room_view` varchar(50) NOT NULL,
  `room_price` int(11) NOT NULL,
  `cap_adult` int(11) NOT NULL,
  `cap_kids` int(11) NOT NULL,
  `room_img` varchar(50) NOT NULL,
  `room_status` varchar(10) DEFAULT 'available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `room`
--

INSERT INTO `room` (`room_id`, `room_num`, `room_type`, `room_view`, `room_price`, `cap_adult`, `cap_kids`, `room_img`, `room_status`) VALUES
(1, 501, 'Couple', 'City view', 250, 2, 1, '4.png', 'reserved'),
(2, 502, 'Couple', 'Sea view', 150, 2, 1, 'io.jpg', 'available'),
(5, 608, 'deluxe', 'sea view', 250, 4, 1, '3.png', 'available'),
(7, 207, 'deluxe', 'sea view', 400, 4, 1, '1.png', 'available'),
(10, 201, 'Superior', 'Sea view', 210, 2, 2, '4.png', 'available'),
(11, 202, 'Signature', 'Sea view', 50000, 2, 2, '3.png', 'available'),
(13, 708, 'Deluxe', 'City view', 400, 5, 1, 'GOPR0283_1558164737015_high.JPG', 'available'),
(14, 10, 'Superior', 'Sea view', 10, 4, 4, '2.png', 'available'),
(15, 706, 'Superior', 'Sea view', 400, 4, 2, '4.png', 'available');

-- --------------------------------------------------------

--
-- テーブルの構造 `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'U'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `number`, `email`, `gender`, `password`, `status`) VALUES
(1, 'Yuko', 'Fukushima', '12345', 'yuko@email.com', '', '81dc9bdb52d04dc20036dbd8313ed055', 'A'),
(2, 'Arika', 'Cataluna', '07026132119', 'arika@email.com', 'famale', '81dc9bdb52d04dc20036dbd8313ed055', 'U'),
(3, 'Kirby', 'Cataluna', '07026132119', 'kirby@email.com', 'male', '81dc9bdb52d04dc20036dbd8313ed055', 'U'),
(4, 'Kirby', 'Cataluna', '07026132119', 'kirby@email.com', 'male', 'd41d8cd98f00b204e9800998ecf8427e', 'U');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- テーブルのインデックス `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- テーブルのインデックス `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- テーブルのインデックス `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- テーブルのAUTO_INCREMENT `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- テーブルのAUTO_INCREMENT `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- テーブルのAUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
