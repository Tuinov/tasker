-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Окт 06 2019 г., 23:02
-- Версия сервера: 5.6.43
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `task_test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `name_user` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `task_text` mediumtext NOT NULL,
  `done` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `name_user`, `email`, `task_text`, `done`) VALUES
(1, 'oleg', 'oleg@yandex.ru', 'проверить работу', 1),
(2, 'maksim', 'max@yandex.ru', 'назначить встречу', 1),
(3, 'egor', 'egor@yandex.ru', 'help', 1),
(4, 'женя', 'grhj@udjjk.ru', 'всё проверить!', 1),
(5, 'qrqrr', 'tuin@gmail.com', 'die', 1),
(6, 'heehfj', 'tuvjob@gmail.com', 'ddf', 0),
(7, 'Евгений Туинов', 'tuinovjob@gmail.com', 'убрать снег', 0),
(8, 'Евге', 'tuinovjob@gmil.com', 'олрпнп', 0),
(9, 'Евгений Туинов', 'tuinovjob@gmail.com', 'риор', 0),
(10, 'Евгений Туинов', 'tuinovjob@gmail.com', 'ронон', 0),
(11, 'Евгений Туинов', 'tuinovjob@gmail.com', 'сходить в магаз', 0),
(12, 'eeeee', 'tb@gmail.com', 'доделать', 0),
(14, 'maksim', 'max@yandex.ru', 'назначить встречу', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
