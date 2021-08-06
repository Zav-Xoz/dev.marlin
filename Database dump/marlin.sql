-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 05 2021 г., 10:15
-- Версия сервера: 8.0.19
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `marlin`
--

-- --------------------------------------------------------

--
-- Структура таблицы `client`
--

CREATE TABLE `client` (
  `id` int NOT NULL,
  `first name` varchar(255) NOT NULL,
  `last name` varchar(255) NOT NULL,
  `uzername` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `client`
--

INSERT INTO `client` (`id`, `first name`, `last name`, `uzername`) VALUES
(1, 'Mark', 'Otto', '@mdo'),
(2, 'Jacob', 'Thornton', '@fat'),
(3, 'Larry', 'the Bird', '@twitter'),
(4, 'Larry the Bird', 'Bird', '@twitter');

-- --------------------------------------------------------

--
-- Структура таблицы `records`
--

CREATE TABLE `records` (
  `id` int NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `records`
--

INSERT INTO `records` (`id`, `message`) VALUES
(104, ''),
(105, 'qwe'),
(106, '248'),
(107, '242'),
(121, 'qWWWWWW'),
(122, '1');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `banned` varchar(255) NOT NULL,
  `img src` varchar(255) NOT NULL,
  `img alt` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `wrapbootstrap link` varchar(255) NOT NULL,
  `wrapbootstrap title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `banned`, `img src`, `img alt`, `name`, `position`, `twitter`, `wrapbootstrap link`, `wrapbootstrap title`) VALUES
(1, '', 'sunny.png', 'Sunny A.', 'Sunny A. (UI/UX Expert)', 'Lead Author', '@myplaneticket', 'myorange', 'Contact Sunny'),
(2, '', 'josh.png', 'Jos K.', 'Jos K. (ASP.NET Developer)', 'Partner & Contributor', '@atlantez', 'Walapa', 'Contact Jos'),
(3, 'banned', 'jovanni.png', 'Jovanni Lo', 'Jovanni L. (PHP Developer)', 'Partner & Contributor', '@lodev09', 'lodev09', 'Contact Jovanni'),
(4, 'banned', 'roberto.png', 'Roberto R.', 'Roberto R. (Rails Developer)', 'Partner & Contributor', '@sildur', 'sildur', 'Contact Roberto');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `client`
--
ALTER TABLE `client`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `records`
--
ALTER TABLE `records`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
