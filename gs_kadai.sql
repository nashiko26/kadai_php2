-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-06-30 02:56:44
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_kadai`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_kadai_an_table`
--

CREATE TABLE `gs_kadai_an_table` (
  `id` int(11) NOT NULL,
  `name` varchar(24) NOT NULL,
  `category` varchar(12) NOT NULL,
  `sns` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `date` varchar(64) NOT NULL,
  `place` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `pass` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_kadai_an_table`
--

INSERT INTO `gs_kadai_an_table` (`id`, `name`, `category`, `sns`, `email`, `date`, `place`, `description`, `pass`) VALUES
(13, 'xxx', '写真', 'https://xxx', 'xxx@gmail.com', '', 'Tokyo', '', ''),
(14, 'きよこ', '版画', 'https://xxx', 'xxx@gmail.com', '', 'Tokyo', 'xcxc', ''),
(15, 'あああ', '版画', 'https://xxx', 'xxx@gmail.com', '', 'Osaka', '123123', '1212'),
(25, 'xxx', '絵画', 'https://xxx', 'xxx@gmail.com', '', '', '', ''),
(26, 'xxx', '絵画', '1111', '2222', '', '', '', ''),
(27, 'xxx', '絵画', '1111', '2222', '', '', '', '');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_kadai_an_table_2`
--

CREATE TABLE `gs_kadai_an_table_2` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_kadai_an_table`
--
ALTER TABLE `gs_kadai_an_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `gs_kadai_an_table_2`
--
ALTER TABLE `gs_kadai_an_table_2`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_kadai_an_table`
--
ALTER TABLE `gs_kadai_an_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- テーブルの AUTO_INCREMENT `gs_kadai_an_table_2`
--
ALTER TABLE `gs_kadai_an_table_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
