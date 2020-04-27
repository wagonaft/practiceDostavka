-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 27 2020 г., 14:09
-- Версия сервера: 5.5.62
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
-- База данных: `dostavka`
--

-- --------------------------------------------------------

--
-- Структура таблицы `zakaz`
--

CREATE TABLE `zakaz` (
  `FIO` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Adress` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Blydo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Summa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `zakaz`
--

INSERT INTO `zakaz` (`FIO`, `Adress`, `Phone`, `Blydo`, `Summa`) VALUES
('', '', '', '', 0),
('Shatalov Kirill Romanovich', 'Первомайская 1, 104', '+7 (963) 542 - 6702', 'Pizza Margarita', 700),
('', '', '', '', 123),
('', '', '', '', 0),
('', '', '', '', 0),
('', '', '', '', 0),
('', '', '', '', 0),
('', '', '', '', 0),
('', '', '', '', 0),
('', '', '', '', 0),
('', '', '', '', 0),
('', '', '', '', 0),
('', '', '', '', 0),
('', '', '', '', 0),
('', '', '', '', 0),
('', '', '', '', 0),
('', '', '', '', 0),
('', '', '', '', 0),
('', '', '', '', 0),
('', '', '', '', 0),
('', '', '', '', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
