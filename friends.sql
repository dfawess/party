-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 23 2018 г., 15:24
-- Версия сервера: 10.1.28-MariaDB
-- Версия PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `party`
--

-- --------------------------------------------------------

--
-- Структура таблицы `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `surname` varchar(15) NOT NULL,
  `phone_number` int(12) NOT NULL,
  `age` enum('15','16','17','18') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `friends`
--

INSERT INTO `friends` (`id`, `name`, `surname`, `phone_number`, `age`) VALUES
(1, 'asdasdasd', 'asdas', 123421, ''),
(2, 'asd', 'asd', 371123, ''),
(3, 'xd', 'xd', 371123, ''),
(4, 'xd', 'xd', 371123, ''),
(5, 'asd', 'asd', 371, '17'),
(6, 'asd', 'asd', 371123, '17'),
(7, 'asd', 'asd', 371123, '15'),
(8, 'asd', 'xd', 371, '15');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
