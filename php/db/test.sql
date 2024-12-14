-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 13 2024 г., 20:55
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `RPODUCT_ID` int(11) NOT NULL,
  `PRODUCT_NAME` text NOT NULL,
  `PRODUCT_PRICE` int(11) NOT NULL,
  `PRODUCT_ARTICLE` int(11) NOT NULL,
  `PRODUCT_QUANTITY` int(11) NOT NULL,
  `DATE_CREATE` date NOT NULL,
  `ACTIVE` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`ID`, `RPODUCT_ID`, `PRODUCT_NAME`, `PRODUCT_PRICE`, `PRODUCT_ARTICLE`, `PRODUCT_QUANTITY`, `DATE_CREATE`, `ACTIVE`) VALUES
(1, 1, 'Cheese', 190, 96155382, 16, '2024-06-01', 1),
(2, 6, 'Milk', 60, 96155382, 12, '2024-06-27', 1),
(3, 2, 'Fish', 250, 11135043, 30, '2024-06-12', 1),
(4, 3, 'Egg', 109, 36604230, 100, '2024-05-25', 1),
(5, 4, 'Bread', 49, 28874959, 88, '2024-05-10', 1),
(6, 5, 'Coca-Cola', 60, 8065161, 13, '2024-08-23', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
