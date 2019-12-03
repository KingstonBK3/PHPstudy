-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 03 2019 г., 09:16
-- Версия сервера: 10.1.33-MariaDB
-- Версия PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dizital_news`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'All'),
(2, 'Other'),
(3, 'Policy'),
(4, 'Sport');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `text` varchar(10000) NOT NULL,
  `date` date NOT NULL,
  `news_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `text` text NOT NULL,
  `img` blob NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `img`, `category_id`, `user_id`) VALUES
(1, 'Ученые нашли способ борьбы с алкогольным поражением печени', '2019-11-08', 0x73716c5c6e6577735f696d6167655c6f74686572312e6a7067, 2, 1),
(2, 'Эксперты из РФ рассказали о способе обезопасить смартфоны от взлома через Bluetooth-наушники', '2019-11-08', 0x73716c5c6e6577735f696d6167655c6f74686572332e6a706567, 2, 3),
(3, 'Россия получила несколько зарубежных заяво к на поставку Су-34', '2019-11-08', 0x73716c5c6e6577735f696d6167655c706f6c696379312e6a7067, 3, 2),
(4, 'Черчесов объяснил домашний разгром сборной от бельгийцев', '2019-11-08', 0x73716c5c6e6577735f696d6167655c73706f7274312e6a7067, 4, 1),
(5, 'Китайские СМИ назвали четыре слабые стороны России', '2019-11-08', 0x73716c5c6e6577735f696d6167655c6f74686572342e6a7067, 3, 1),
(6, 'Гонконгских демонстрантов осадила полиция после ночи протестов', '2019-11-08', 0x73716c5c6e6577735f696d6167655c706f6c696379322e6a7067, 3, 3),
(7, 'Шарль Леклер — о столкновении с Феттелем: «Мы оставим это в прошлом и продолжим работать как одна команда»', '2019-11-08', 0x73716c5c6e6577735f696d6167655c73706f7274322e6a7067, 4, 2),
(8, 'Время продажи алкоголя в магазинах могут сократить', '2019-11-08', 0x73716c5c6e6577735f696d6167655c6f74686572322e6a7067, 2, 2),
(9, 'Тебас о жалобе «Реала» на отдых перед «Барсой»: «Президент Ла Лиги не может подсчитывать секунды для каждого»', '2019-11-08', 0x73716c5c6e6577735f696d6167655c73706f7274332e6a7067, 4, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `registration_date` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `img` blob NOT NULL,
  `number` varchar(20) NOT NULL,
  `job` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `status`, `name`, `registration_date`, `email`, `img`, `number`, `job`) VALUES
(1, 'admin', 'admin', 'Administrator', '', '0000-00-00', '', '', '', ''),
(2, 'AndreiMuntjan', '123', 'Writer', '', '0000-00-00', '', '', '', ''),
(3, 'RandomUser', '123', 'RandomUser', '', '0000-00-00', '', '', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_ibfk_1` (`news_id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_ibfk_2` (`user_id`),
  ADD KEY `news_ibfk_1` (`category_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`);

--
-- Ограничения внешнего ключа таблицы `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
