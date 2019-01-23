-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 23 2019 г., 18:45
-- Версия сервера: 5.7.20-log
-- Версия PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `myblogloc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `breeds`
--

CREATE TABLE `breeds` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `category_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '1',
  `short_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `breeds`
--

INSERT INTO `breeds` (`id`, `title`, `content`, `category_id`, `author_id`, `image`, `date`, `status`, `short_content`) VALUES
(45, 'Бультерьер', 'Описание ушастого песика ))', 0, 0, 'bullterrier.jpg', '2019-01-15 21:58:18', 1, ''),
(50, 'Стаффордширский терер дурачок', 'Стаффордширский терер дурачокСтаффордширский терер дурачокСтаффордширский терер дурачокСтаффордширский терер дурачокСтаффордширский терер дурачок', 0, 0, 'screen-7.jpg', '2019-01-21 21:58:46', 1, ''),
(51, '111', '111', NULL, NULL, 'bull-terrier-red500.jpg', '2019-01-22 09:01:34', 1, ''),
(52, 'vfgfdf', 'dfdfdf', NULL, NULL, 'bullterrier.jpg', '2019-01-22 09:01:48', 1, ''),
(53, 'cscsc', 'scscs', NULL, NULL, 'screen-7.jpg', '2019-01-22 09:10:06', 1, ''),
(54, 'vvb', 'vbvb', NULL, NULL, 'bull-terrier-korsan.jpg', '2019-01-22 09:14:11', 1, ''),
(55, 'ававав', 'апавававававававававвавиавыиапавававававававававвавиавыиапавававававававававвавиавыиапавававававававававвавиавыиапавававававававававвавиавыиапавававававававававвавиавыиапавававававававававвавиавыиапавававававававававвавиавыиапавававававававававвавиавыиапавававававававававвавиавыиапавававававававававвавиавыиапавававававававававвавиавыиапавававававававававвавиавыиапавававававававававвавиавыиапавававававававававвавиавыиапавававававававававвавиавыиапавававававававававвавиавыиапавававававававававвавиавыиапавававававававававвавиавыиапавававававававававвавиавыиапавававававававававвавиавыиапавававававававававвавиавыиапавававававававававвавиавыиап', NULL, NULL, 'bull-terrier-korsan.jpg', '2019-01-23 09:19:31', 1, 'ававававав'),
(56, 'ваиавиавива', 'ааааааааааааивиаааааааааааааааааааааивиааааааааааааааааааааа ивиаааааааааивиааааааааааааааааааааа ивиаааааааааивиааааааааааааааааааааа ивиаааааааааивиааааааааааааааааааааа ивиаааааааааивиааааааааааааааааааааа ивиаааааааааивиааааааааааааааааааааа ивиаааааааааивиааааааааааааааааааааа ивиаааааааааивиааааааааааааааааааааа ивиаааааааааивиааааааааааааааааааааа ивиааааааааа', NULL, NULL, 'screen-7.jpg', '2019-01-23 15:35:57', 1, 'ааааааааааааиви');

-- --------------------------------------------------------

--
-- Структура таблицы `breeds_category`
--

CREATE TABLE `breeds_category` (
  `id` int(255) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int(255) NOT NULL,
  `status` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `text`) VALUES
(1, 'gggg', '\';\';\';\';\';\';opopopp'),
(2, 'gfgfgf', 'gfgfgfgfgfg'),
(3, 'fdfdf', 'fdfdfdf'),
(4, 'Ð²Ñ‹Ð²Ñ‹Ð²', 'Ð²Ñ‹Ð²Ñ‹Ð²Ñ‹Ð²'),
(5, 'ÑÐ¼ÑÐ¼ÑÐ¼', 'Ð¼ÑÐ¼ÑÐ¼Ñ'),
(6, 'gfgfg', 'fdfdfdfd'),
(7, '32323', '2323232323'),
(8, 'Ð‘Ð¸Ð³Ð»ÑŒ ', 'ÐžÑ‡ÐµÐ½ÑŒ Ð¼Ð¸Ð»Ð°Ñ Ð¿Ð¾Ñ€Ð¾Ð´Ð° Ð¾Ñ…Ð¾Ñ‚Ð½Ð¸Ñ‡ÑŒÐ¸Ñ… ÑÐ¾Ð±Ð°Ðº'),
(9, 'Ð‘Ð¸Ð³Ð»ÑŒ', 'Ð¢Ð›ÐÐ¢Ð”Ð¢Ð”Ð¢ÐÐ´ÑŒÐ°Ð´Ð»Ð²Ñ‹ÑŒÐ´Ð°Ð¾Ð²Ñ‹Ð´Ñ„Ð¾Ð°Ð´Ð²Ñ‹Ð¾Ñ„Ð°Ð¾Ð²Ñ‹Ñ„Ð´Ð»Ð°Ð¾Ð²Ñ‹Ð´Ð¾Ñ„Ð°Ð´Ð¶Ð²Ñ‹Ñ„Ð°'),
(10, 'ÑÐ¼ÑÐ¼Ñ', 'Ð¼ÑÐ¼ÑÐ¼ÑÐ¼');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES
(38, 'qqq', 'qqq@mail.ru', '$2y$10$f2WrmiI0uLk6DjWDiVOq2OTVDvMSYnn/jitJA462iTi1o6HqIVvm6'),
(39, 'qqq', 'qqq@mail.ru', '$2y$10$CqORWwFTOTZtvxPAXRDrauVn9oYapV8sM4CHpmU3SEkyuJ7kVBGPK'),
(40, 'qqq', 'qqq@mail.ru', '$2y$10$fxXVJJjBDtK7756AInNBy.6mwECGdXC.oGCiewl0RGwV06.r2y5Vy'),
(41, 'qqq', 'qqq@mail.ru', '$2y$10$HRtokr521kqgZC3s0oTpU.YFE9MtW9OhvWl.bTIt369QziPIc62na'),
(42, 'qqq', 'qqq@mail.ru', '$2y$10$rMTj1cWR3xCb3b8g7x1u1uPiB6jNwW75FDks3s.X2WCKrNw/PHemq'),
(43, 'qqq', 'qqq@mail.ru', '$2y$10$CDZQNIQFhLC2MrL0AxtMsOqgpllUMh7L9MhsvwMkSGp4qzyHscxS.'),
(44, 'qqq', 'qqq@mail.ru', '$2y$10$OL80zhj/HmhAvOoE1dfTHOwXyNYZ1trHpNK5WVy6BBLKFhRTdre7K'),
(45, '123', '123@mail.ru', '$2y$10$tv.YWGBQ8FqiNHXrtr3mn.D5trOk5EyfMZz5JI19tn6vK/Vnia7Bq'),
(46, '123', '123@mail.ru', '$2y$10$VjbMKl6IGzxM8vPCCbjjWu/zu7lgbOFgAWQTbM6BrLXTzAPZx4cMe'),
(47, '123', '123@mail.ru', '$2y$10$DB2ZOBkQUP/EWOl2I2tVUecv3ytE1EOyi45QBbMVsZS8QMV/VKIcO'),
(48, '123', '123@mail.ru', '$2y$10$xchusCiioSJg1k/0KldryebxzvLdurlx0AU3/3RUF9ev.GeWmDfIa'),
(49, '11111', '11111@mail.ru', '$2y$10$UM9nA6p2Yzz9ju/BpZDf4OK45rflQ6tb6yVi/yktTyI7uSOxSFdyK'),
(50, '11111', '11111@mail.ru', '$2y$10$ASG7abt7NsGZSG8HjNdy7ubid1OIkOkW9fggTNAaZDShcjysjF7Gu'),
(51, '11111', '11111@mail.ru', '$2y$10$rezYjYyWftt6fAKZFefOcO0xCi6xsGrN5BEFl3cqmNzME.oZT8usC'),
(52, '11111', '11111@mail.ru', '$2y$10$YMhQyBH1Xr1.EvNm1Ie5.O0x20f8thmx.qQg3qYW2NHlbU//.tXte'),
(53, '11111', '11111@mail.ru', '$2y$10$ypeMo8TThqNE7IfiihoZX.lKTpNcqxv.Dpg/QgtsUZgomlAptVylq'),
(54, '123', '123@mail.ru', '$2y$10$A6bBtAXAdQgWZ768tf2csOU9V1XJcuYvzucM9TXVteSg9csUb3ZIK'),
(55, '123', '123@mail.ru', '$2y$10$DuUE5PZ6ohpXycSG/PCfuuocQMMxRIqY4DYadwxTj9Sl19Urf1z8i'),
(56, '123', '123@mail.ru', '$2y$10$AUQW7PtZfgM8pc7pA32gk.7bzzsQR1wJqK0I.pS7LwjWKwVghPZq.'),
(57, '123', '123@mail.ru', '$2y$10$1uFSj0Y.FiDjYLP3/YGE0.WnIAotJEQ0kVk9SvWASxSmhTu9th0BG'),
(58, 'rrr', 'rrr@mail.ru', '$2y$10$.Fwprr6hAjyucJmQFQ.L5OcClZyNkM50TF04UpGb7RWhT.7EkP1Py'),
(59, 'vbvb', 'vbvb@mail.ru', '$2y$10$M8EQhKK1auRSruZ/8LXMmO7lLGtTk2iaylCs38fb7XPr9t32hBYca');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `breeds`
--
ALTER TABLE `breeds`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `breeds_category`
--
ALTER TABLE `breeds_category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT для таблицы `breeds`
--
ALTER TABLE `breeds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT для таблицы `breeds_category`
--
ALTER TABLE `breeds_category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
