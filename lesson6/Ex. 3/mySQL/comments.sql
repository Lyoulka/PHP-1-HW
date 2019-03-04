-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 04 2019 г., 18:12
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `geekbrains`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `date` text NOT NULL,
  `message` text NOT NULL,
  `path` text NOT NULL,
  `imgName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `name`, `date`, `message`, `path`, `imgName`) VALUES
(1, 'Екатерина', '2019-03-04T17:57:52+03:00', 'Всем привет! Это мой первый комментарий!', './img/', '5b2d3ffe8556a069181c4aaeb3aead10.jpg'),
(2, 'Константин', '2019-03-04T17:58:50+03:00', 'Добро пожаловать, Екатерина!', './img/', '0b1dd23df7f8f60b721181be26c616fe.jpg'),
(3, 'Марта', '2019-03-04T18:00:35+03:00', 'Кто знает где купить гидравлический домкрат?!', './img/', 'raskraska.jpg'),
(4, 'Дарья', '2019-03-04T18:02:15+03:00', 'Никто не знает...', './img/', 'i.jpg'),
(5, 'Bad boy', '2019-03-04T18:07:43+03:00', 'Погугли =)))', './img/', '81852646.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
