-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 09 2020 г., 15:28
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `user_name`, `email`, `description`, `status`) VALUES
(1, 'christian0102', 'christia0102@mail.com', 'Description of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of Tasks', 0),
(2, 'christian0102', 'christia0102@mail.com', 'Description of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of Tasks', 0),
(3, 'christian0102', 'christia0102@mail.com', 'Description of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of Tasks', 0),
(4, 'christian0102', 'christia0102@mail.com', 'Description of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of Tasks', 0),
(5, 'christian0102', 'christia0102@mail.com', 'Description of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of Tasks', 0),
(6, 'christian0102', 'christia0102@mail.com', 'Description of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of Tasks', 0),
(7, 'christian0102', 'christia0102@mail.com', 'Description of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of Tasks', 0),
(8, 'christian0102', 'christia0102@mail.com', 'Description of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of Tasks', 0),
(9, 'christian0102', 'christia0102@mail.com', 'Description of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of Tasks', 0),
(10, 'christian0102', 'christia0102@mail.com', 'Description of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of Tasks', 0),
(11, 'bb0102', 'xxx@mail.com', 'xxxx', 0),
(12, 'christian0102', 'christia0102@mail.com', 'Description of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of TasksDescription of Tasks', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
