-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 15 2019 г., 06:35
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lesson5php`
--

-- --------------------------------------------------------

--
-- Структура таблицы `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `name_foto` varchar(50) DEFAULT NULL,
  `url_foto` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `views` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `foto`
--

INSERT INTO `foto` (`id`, `name_foto`, `url_foto`, `size`, `views`) VALUES
(1, 'Природа1', 'img/real/1.jpg', 213372, 19),
(2, 'Природа2', 'img/real/2.jpg', 213372, 21),
(3, 'Природа4', 'img/real/4.jpg', 128406, 10),
(4, 'Природа5', 'img/real/5.jpg', 2277354, 7),
(5, 'Природа6', 'img/real/6.jpg', 205769, 19),
(6, 'Природа7', 'img/real/7.jpg', 313830, 9),
(7, 'Природа8', 'img/real/8.jpg', 199363, 7),
(8, 'Природа9', 'img/real/9.jpg', 140589, 8),
(9, 'Природа10', 'img/real/10.jpg', 199520, 4),
(10, 'Природа11', 'img/real/11.jpg', 366224, 5),
(20, '123', 'img/real/files/134120843_5588480_p26.jpg', 143003, 0),
(21, '123', 'img/real/files/134120843_5588480_p26.jpg', 143003, 0),
(22, '7889', 'img/real/files/boys-2769553_1920.jpg', 591179, 0),
(23, '7889', 'img/real/files/boys-2769553_1920.jpg', 591179, 0),
(24, '2', 'img/real/files/ball-3204197_1920.jpg', 733903, 1),
(25, 'Собока', 'img/real/files/3.jpg', 727122, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
