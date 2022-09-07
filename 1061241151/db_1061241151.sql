-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-06-27 05:18:56
-- 伺服器版本： 10.4.19-MariaDB
-- PHP 版本： 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `db_1061241151`
--
CREATE DATABASE IF NOT EXISTS `db_1061241151` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_1061241151`;

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `account` varchar(10) CHARACTER SET utf8 NOT NULL,
  `password` varchar(10) NOT NULL,
  `name` varchar(10) CHARACTER SET utf8 NOT NULL,
  `sex` char(2) CHARACTER SET utf8 NOT NULL,
  `year` tinyint(4) NOT NULL,
  `month` tinyint(4) NOT NULL,
  `day` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`id`, `account`, `password`, `name`, `sex`, `year`, `month`, `day`) VALUES
(1, 'b', 'b', 'b', '男', 12, 3, 5),
(2, 'c', 'c', 'c', '男', 92, 5, 3),
(3, 'a', 'a', 'a', '男', 92, 5, 1),
(4, 'd', 'd', 'd', '男', 43, 5, 6),
(5, 'e', 'e', 'e', '女', 92, 5, 6),
(6, 'f', 'f', 'f', '女', 56, 6, 12),
(7, 'g', 'g', 'g', '男', 63, 9, 3),
(8, 'ge', 'fe', 'efw', '男', 92, 6, 5),
(9, 'fe', 're', 'ZI-JIN LIN', '男', 100, 1, 6),
(10, 'ht', 'ht', '李茂仁', '男', 101, 1, 3),
(11, 'guest', 'r', '黃立瑋', '男', 88, 8, 9),
(12, 'fff', 'fff', 'fff', '男', 1, 5, 6),
(13, 'h', 'h', 'h', '男', 1, 1, 1),
(14, 'vvv', 'vvv', 'vvv', '男', 101, 8, 25),
(15, 'mm', 'mm', 'mm', '男', 92, 8, 5);

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `Order_Id` int(10) NOT NULL,
  `Order_Item` varchar(45) NOT NULL,
  `Order_Count` int(10) NOT NULL,
  `Tea_Suger` varchar(10) NOT NULL,
  `Tea_Ice` varchar(10) NOT NULL,
  `Tea_Price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`Order_Id`, `Order_Item`, `Order_Count`, `Tea_Suger`, `Tea_Ice`, `Tea_Price`) VALUES
(1, '高山茶', 5, '無糖', '去冰', 50),
(2, '檸檬紅茶', 5, '3分甜', '少冰', 50),
(3, '冬瓜茶', 11, '3分甜', '多冰', 88),
(4, '四季春茶', 5, '無糖', '微冰', 50),
(5, '鐵觀音奶茶', 3, '10分甜', '正常冰', 30),
(6, '金萱茶', 2, '無糖', '去冰', 20),
(7, '文山青茶', 3, '無糖', '少冰', 30),
(8, '冬瓜茶', 10, '5分甜', '去冰', 80),
(9, '高山茶', 11, '無糖', '微冰', 88),
(10, '冬瓜茶', 3, '5分甜', '少冰', 30),
(11, '高山茶', 3, '5分甜', '少冰', 30);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Order_Id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `Order_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
