-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Сен 06 2023 г., 16:09
-- Версия сервера: 5.7.21-20-beget-5.7.21-20-1-log
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `q91976m8_calc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Category`
--
-- Создание: Сен 03 2023 г., 15:13
-- Последнее обновление: Сен 03 2023 г., 15:15
--

DROP TABLE IF EXISTS `Category`;
CREATE TABLE `Category` (
  `id` int(11) NOT NULL,
  `Type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Category`
--

INSERT INTO `Category` (`id`, `Type`) VALUES
(1, 'Assault Rifles');

-- --------------------------------------------------------

--
-- Структура таблицы `Weapons`
--
-- Создание: Сен 03 2023 г., 15:13
-- Последнее обновление: Сен 03 2023 г., 15:16
--

DROP TABLE IF EXISTS `Weapons`;
CREATE TABLE `Weapons` (
  `id` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Damage` int(11) NOT NULL,
  `Type` tinyint(1) NOT NULL,
  `Accuracy` int(11) NOT NULL,
  `AP` int(11) NOT NULL,
  `Category` int(11) NOT NULL,
  `IsMelee` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Weapons`
--

INSERT INTO `Weapons` (`id`, `Name`, `Damage`, `Type`, `Accuracy`, `AP`, `Category`, `IsMelee`) VALUES
(1, 'Ares Alpha', 11, 1, 5, -2, 1, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Weapons`
--
ALTER TABLE `Weapons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Weapons_fk0` (`Category`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Category`
--
ALTER TABLE `Category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `Weapons`
--
ALTER TABLE `Weapons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Weapons`
--
ALTER TABLE `Weapons`
  ADD CONSTRAINT `Weapons_fk0` FOREIGN KEY (`Category`) REFERENCES `Category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
