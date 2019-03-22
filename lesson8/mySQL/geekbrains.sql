-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 22 2019 г., 15:37
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
-- Структура таблицы `catalogue`
--

CREATE TABLE `catalogue` (
  `goods_id` int(11) NOT NULL,
  `goods_name` varchar(50) NOT NULL,
  `goods_price` int(11) NOT NULL,
  `goods_type` varchar(50) NOT NULL,
  `goods_description` text NOT NULL,
  `goods_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `catalogue`
--

INSERT INTO `catalogue` (`goods_id`, `goods_name`, `goods_price`, `goods_type`, `goods_description`, `goods_img`) VALUES
(1, 'Марио и дракон', 1000, 'общее', 'В комплекте две игрушки. Выполнено из высококачественных материалов', '1.png'),
(2, 'Яйцо дракона', 500, 'игрушка для девочки', 'Под действием солнечного света из яйца выпляется дракон. Выполнено из высококачественных материалов', '2.png'),
(3, 'Марио', 1500, 'игрушка для мальчика', 'В комплекте две игрушки. Выполнено из высококачественных материалов', '3.png'),
(4, 'Марио', 750, 'игрушка для мальчика', 'В комплекте одна игрушка. Выполнено из высококачественных материалов', '4.png'),
(5, 'Марио и дракон', 1250, 'общее', 'В комплекте три игрушки. Выполнено из высококачественных материалов', '5.png'),
(6, 'Дракон', 1250, 'игрушка для девочки', 'В комплекте одна игрушка. Выполнено из высококачественных материалов', '6.png'),
(7, 'Семья драконов', 3000, 'общее', 'В комплекте одиннадцать игрушек. Выполнено из высококачественных материалов', '7.png'),
(8, 'Марио', 1750, 'игрушка для мальчика', 'В комплекте две игрушки. Выполнено из высококачественных материалов', '8.png'),
(9, 'Марио', 850, 'игрушка для мальчика', 'В комплекте одна игрушка. Выполнено из высококачественных материалов', '9.png');

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
(5, 'Bad boy', '2019-03-04T18:07:43+03:00', 'Погугли =)))', './img/', '81852646.jpg'),
(6, 'Олег', '2019-03-04T19:02:58+03:00', 'а какого типа нужен домкрат?', './img/', 'koshka1_auto_700.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_login` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_surname` varchar(100) NOT NULL,
  `user_city` varchar(50) NOT NULL,
  `user_adress` text NOT NULL,
  `goods_id` int(11) NOT NULL,
  `goods_name` text NOT NULL,
  `numbers` int(11) NOT NULL,
  `goods_price` int(11) NOT NULL,
  `order_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `user_login`, `user_name`, `user_surname`, `user_city`, `user_adress`, `goods_id`, `goods_name`, `numbers`, `goods_price`, `order_status`) VALUES
(1, 1, 'wind', 'Илья', 'Ильичев', 'Ильинск', 'ул. Ильинская, д. 1, кв. 1', 1, 'Марио и дракон', 2, 1000, 'Доставляется'),
(2, 1, 'wind', 'Илья', 'Ильичев', 'Ильинск', 'ул. Ильинская, д. 1, кв. 1', 2, 'Яйцо дракона', 2, 500, 'Доставляется'),
(3, 1, 'wind', 'Илья', 'Ильичев', 'Ильинск', 'ул. Ильинская, д. 1, кв. 1', 3, 'Марио', 2, 1500, 'Доставляется'),
(4, 1, 'wind', 'Илья', 'Ильичев', 'Ильинск', 'ул. Ильинская, д. 1, кв. 1', 4, 'Марио', 1, 750, 'Доставляется'),
(5, 2, 'Masha', 'Мария', 'Марина', 'Маркс', 'ул. К.Маркса, д. 2, кв. 2', 1, 'Марио и дракон', 1, 1000, 'В обработке'),
(6, 2, 'Masha', 'Мария', 'Марина', 'Маркс', 'ул. К.Маркса, д. 2, кв. 2', 3, 'Марио', 1, 1500, 'В обработке'),
(7, 2, 'Masha', 'Мария', 'Марина', 'Маркс', 'ул. К.Маркса, д. 2, кв. 2', 4, 'Марио', 1, 750, 'В обработке'),
(8, 11, 'admin', 'Admin', 'Admin', 'Central Office', 'Central Office', 1, 'Марио и дракон', 10, 1000, 'Ожидает подтверждения'),
(9, 11, 'admin', 'Admin', 'Admin', 'Central Office', 'Central Office', 3, 'Марио', 10, 1500, 'Ожидает подтверждения'),
(10, 13, 'Glasha', 'Глаша', 'Сидорова', 'Тюмень', 'ул. Мичурина, д. 8', 1, 'Марио и дракон', 3, 1000, 'Ожидает подтверждения'),
(11, 13, 'Glasha', 'Глаша', 'Сидорова', 'Тюмень', 'ул. Мичурина, д. 8', 7, 'Семья драконов', 3, 3000, 'Ожидает подтверждения'),
(12, 13, 'Glasha', 'Глаша', 'Сидорова', 'Тюмень', 'ул. Мичурина, д. 8', 5, 'Марио и дракон', 3, 1250, 'Ожидает подтверждения');

-- --------------------------------------------------------

--
-- Структура таблицы `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `view` int(11) DEFAULT NULL,
  `click` int(11) DEFAULT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pictures`
--

INSERT INTO `pictures` (`id`, `path`, `size`, `name`, `view`, `click`, `description`) VALUES
(1, './img/', 461, '1.png', 7, 7, 'Mario_and_Dino'),
(2, './img/', 318, '2.png', 1, 1, 'Egg'),
(3, './img/', 540, '3.png', 2, 2, 'Mario_and_his_friend'),
(4, './img/', 501, '4.png', 0, 0, 'Mario'),
(5, './img/', 713, '5.png', 1, 1, 'Mario_and_Dino'),
(6, './img/', 443, '6.png', 0, 0, 'Dino'),
(7, './img/', 995, '7.png', 2, 2, 'Dinos'),
(8, './img/', 30, '8.png', 3, 3, 'Mario_and_his_friend'),
(9, './img/', 65, '9.png', 0, 0, 'Mario');

-- --------------------------------------------------------

--
-- Структура таблицы `temp_orders`
--

CREATE TABLE `temp_orders` (
  `id` int(10) NOT NULL,
  `goods_id` int(10) NOT NULL,
  `goods_img` varchar(11) NOT NULL,
  `goods_name` text NOT NULL,
  `goods_price` int(100) NOT NULL,
  `numbers` int(10) NOT NULL,
  `user_login` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `temp_orders`
--

INSERT INTO `temp_orders` (`id`, `goods_id`, `goods_img`, `goods_name`, `goods_price`, `numbers`, `user_login`) VALUES
(1, 1, '1.png', 'Марио и дракон', 1000, 1, 'Masha');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_login` varchar(50) NOT NULL,
  `user_hash_password` text NOT NULL,
  `admin` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_login`, `user_hash_password`, `admin`) VALUES
(1, 'Илья', 'wind', '$2y$10$W7ug5esA46YZ/xHnL6Tecu9TM/i2azas4IBgWtrqkCigmpkALZl.C', 0),
(2, 'Маша', 'Masha', '$2a$08$Y2U5NGYzODA4MjczNDBiO.VtPnQJ2q6paK10bo2k8o2zod6n4y3Oi', 0),
(3, 'Александр', 'Alex', '$2a$08$YjM4OGFjYTJiY2NhNDc1ZeKfZ/bemsnmk0tphO6BmCXJYbzh81opS', 0),
(4, 'Tan', 'tan', '$2a$08$OGJhN2ZlYmZjNzc5MTc0N.YKDX1DsfvZh0DsatXVth8Kst63YNZkS', 0),
(5, 'Оля', 'olya', '$2a$08$Y2ZjMjc1MGZhMzJhNGNhM.BreuBUplZGkqHqPG6W1KZCwBtieXsTO', 0),
(6, 'Аня', 'anna', '$2a$08$YjRkZGYzNjM1N2FjNzMwM.qE2URQ4vIm55CuyWEe7MtKA7FcUwOz6', 0),
(7, 'Katya', 'Kate', '$2a$08$MWM4YzI3MjMyNzgzZDE0YuPozmsvM3sM9Plq3MHqLOiBcshF/IQVq', 0),
(11, 'admin', 'admin', '$2a$08$OGU3N2JiODA0ZGY2OTBjYuYFwnT0Qb8.HeEKhfQ8bP7Ys8zN1Ylmi', 1),
(12, 'Женя', 'genya', '$2a$08$NGY2NjZjMDVlN2ZjNWEyNe56c3iaMTQI0wbrcED1MqzXrysDKIvBG', 0),
(13, 'Глаша', 'Glasha', '$2a$08$ZjkwMmYzYzFkNzcwMzFkMOSLepmwubIcTEYUg139.SaQQ/S3.yNGG', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalogue`
--
ALTER TABLE `catalogue`
  ADD PRIMARY KEY (`goods_id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `temp_orders`
--
ALTER TABLE `temp_orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_login` (`user_login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalogue`
--
ALTER TABLE `catalogue`
  MODIFY `goods_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `temp_orders`
--
ALTER TABLE `temp_orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
