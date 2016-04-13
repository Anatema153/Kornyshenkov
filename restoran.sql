-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 13 2016 г., 11:14
-- Версия сервера: 10.1.9-MariaDB
-- Версия PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `restoran`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bludo`
--

CREATE TABLE `bludo` (
  `Id_bludo` int(11) NOT NULL,
  `Bludo_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Id_razdel` int(11) NOT NULL,
  `Calorii` int(11) NOT NULL,
  `Price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Visible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `bludo`
--

INSERT INTO `bludo` (`Id_bludo`, `Bludo_name`, `Id_razdel`, `Calorii`, `Price`, `Image`, `Visible`) VALUES
(1, 'Сациви из курицы', 7, 40, '230 евро', 'bm1.jpg', 1),
(2, 'Пробное блюдо', 2, 123, '255 евро', 'desert1.jpg', 1),
(3, 'Блюдо, которого не должно быть видно', 40, 8, '1300 euro', 'bm1.jpg', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `Id_podacategory` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`Id_podacategory`, `Name`) VALUES
(1, 'Мясные продукты'),
(2, 'Фрукты'),
(3, 'Овощи'),
(4, 'Масла (жидкие)'),
(5, 'Специи'),
(6, 'Рыба и морепродукты'),
(7, 'Молочные продукты и яйца'),
(8, 'Зелень'),
(9, 'Крупы и каши'),
(10, 'Птица'),
(11, 'Сырье и добавки'),
(12, 'Грибы'),
(13, 'Орехи и сухофрукты'),
(14, 'Мука и мучные изделия');

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `di_comment` int(11) NOT NULL,
  `author_komment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `e_mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_comment` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`di_comment`, `author_komment`, `e_mail`, `comment`, `date_comment`) VALUES
(1, 'Nitta', 'nitta@gmail.com', 'Probnij komment', '2016-02-04');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `name_menu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_menu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_menu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id_menu`, `name_menu`, `file_menu`, `order_menu`) VALUES
(1, 'Главная', 'esileht.php', 1),
(2, 'Меню', 'menu.php', 2),
(3, 'Контакты', 'contact.php', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `podcategory`
--

CREATE TABLE `podcategory` (
  `Id_type` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Id_podacategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `podcategory`
--

INSERT INTO `podcategory` (`Id_type`, `Name`, `Id_podacategory`) VALUES
(1, 'Курица целая', 10),
(2, 'Сливочное масло', 7),
(3, 'Куриное филе', 10),
(4, 'Винный уксус', 11),
(5, 'Грецкие орехи', 13),
(6, 'Соль', 5),
(7, 'Говядина', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `postavshiki`
--

CREATE TABLE `postavshiki` (
  `Id_postavshik` int(11) NOT NULL,
  `FirmName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `postavshiki`
--

INSERT INTO `postavshiki` (`Id_postavshik`, `FirmName`) VALUES
(1, 'TalMan Kaubandus As'),
(2, 'Stimbar AS'),
(3, 'Lunden Food OÜ'),
(4, 'Santa Maria AS'),
(5, ' Kalev AS'),
(6, 'Spratfil AS'),
(7, ' Lihakarn OÜ'),
(8, 'Reval Kondiiter OÜ');

-- --------------------------------------------------------

--
-- Структура таблицы `produkti`
--

CREATE TABLE `produkti` (
  `Id_product` int(11) NOT NULL,
  `Name_produkt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Kolichestvo` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kalorii` int(11) NOT NULL,
  `Id_podacategory` int(11) NOT NULL,
  `Srok_postavki` date NOT NULL,
  `Srok_godnosty` date NOT NULL,
  `Srok_realisats` date NOT NULL,
  `Uslovia` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Id_postavshik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `produkti`
--

INSERT INTO `produkti` (`Id_product`, `Name_produkt`, `Kolichestvo`, `Kalorii`, `Id_podacategory`, `Srok_postavki`, `Srok_godnosty`, `Srok_realisats`, `Uslovia`, `Id_postavshik`) VALUES
(1, 'Говяжья вырезка из плечевой мякоти', '1', 3, 21, '2016-01-22', '2016-01-26', '2016-01-26', 'Хранить при темпиратуре +3 С', 2),
(2, 'Курица', '4 кг', 776000, 10, '2016-01-24', '2016-01-27', '2016-01-26', 'Хранение при температуре +2С', 1),
(3, 'Гвоздика', '2 кг', 646000, 5, '2016-01-01', '2016-02-01', '2016-02-01', 'Хранить в темном прохладном месте', 4),
(4, 'Чеснок', '3 кг', 447000, 3, '2016-01-23', '2016-01-26', '2016-01-26', '', 1),
(5, 'Масло сливочное', '1 кг', 74800, 7, '2016-01-22', '2016-01-27', '2016-01-27', '', 8),
(6, 'Грецкие орехи', '4,2 кг', 2755200, 13, '2015-12-23', '2016-02-24', '2016-02-24', '', 8),
(7, 'Мука пшеничная высшего сорта', '8520 кг', 284560, 14, '2016-01-01', '2016-02-01', '2016-01-31', NULL, 6),
(8, 'Кинза', '2 кг', 80000, 8, '2016-01-24', '2016-01-26', '2016-01-26', NULL, 7),
(9, 'Петрушка', '2', 98000, 8, '2016-01-24', '2016-01-26', '2016-01-26', '', 7),
(10, 'Лавровый лист', '1 кг', 313000, 5, '2016-01-13', '2016-01-31', '2016-01-31', NULL, 4),
(11, 'Яйца куриные', '80 штук', 12560, 7, '2016-01-21', '2016-01-28', '2016-01-28', NULL, 3),
(12, 'Шафран ', '1 кг', 310200, 8, '2016-01-23', '2016-01-27', '2016-01-27', '', 6),
(13, 'Уцхо-сунели', '1 кг', 12000, 5, '2015-12-23', '2016-02-24', '2016-02-24', '', 4),
(14, 'Перец душистый', '1 кг', 263000, 5, '2016-04-27', '2016-04-08', '2016-04-14', '', 4),
(15, 'Кориандр в зернах', '1 кг', 298, 5, '2015-12-13', '2016-02-26', '2016-02-25', '', 4),
(16, 'Соль поваренная', '2 кг', 2000, 5, '2016-01-01', '2016-01-31', '2016-01-31', '', 4),
(17, 'Винный уксус', '3 литра', 27, 11, '2016-01-10', '2016-01-31', '2016-01-31', '', 8),
(18, 'we', '3', 457, 0, '0000-00-20', '0000-00-00', '0000-00-00', '', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `razdelmenu`
--

CREATE TABLE `razdelmenu` (
  `Id_razdel` int(11) NOT NULL,
  `Name_razdel` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `razdelmenu`
--

INSERT INTO `razdelmenu` (`Id_razdel`, `Name_razdel`) VALUES
(1, 'Бутерброды'),
(2, 'Холодные закуски'),
(3, 'Салаты'),
(4, 'Супы'),
(5, 'Горячие закуски'),
(6, 'Основные блюда из мяса'),
(7, 'Основные блюда из птицы'),
(8, 'Основные блюда из рыбы и морепродуктов'),
(9, 'Основные вегетарианские блюда'),
(10, 'Гарниры'),
(11, 'Десерты'),
(12, 'Холодные безалкогольные напитки'),
(13, 'Горячие безалкогольные напитки'),
(14, 'Алкогольные и слабоалкогольные напитки');

-- --------------------------------------------------------

--
-- Структура таблицы `recept`
--

CREATE TABLE `recept` (
  `Id_bludo` int(11) NOT NULL,
  `Id_razdel` int(11) NOT NULL,
  `Id_product` int(11) NOT NULL,
  `Kolvo` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `recept`
--

INSERT INTO `recept` (`Id_bludo`, `Id_razdel`, `Id_product`, `Kolvo`) VALUES
(1, 7, 2, '1,5 кг'),
(1, 7, 5, '0,2 кг'),
(1, 7, 7, '2 ст.л.'),
(1, 7, 6, '3 шт'),
(1, 7, 4, '1 головка'),
(1, 7, 8, '0,5 пучка (25 гр)'),
(1, 7, 9, '0,5 пучка (25 гр)'),
(1, 7, 11, '3 шт'),
(1, 7, 12, '1 ч.л'),
(1, 7, 14, '1 ч.л'),
(1, 7, 15, '1 ч.л'),
(1, 7, 3, '6 шт'),
(1, 7, 17, '0,5 ч.л'),
(1, 7, 16, 'повкусу'),
(1, 7, 10, '6 шт');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bludo`
--
ALTER TABLE `bludo`
  ADD PRIMARY KEY (`Id_bludo`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id_podacategory`);

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`di_comment`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Индексы таблицы `podcategory`
--
ALTER TABLE `podcategory`
  ADD PRIMARY KEY (`Id_type`);

--
-- Индексы таблицы `postavshiki`
--
ALTER TABLE `postavshiki`
  ADD PRIMARY KEY (`Id_postavshik`);

--
-- Индексы таблицы `produkti`
--
ALTER TABLE `produkti`
  ADD PRIMARY KEY (`Id_product`);

--
-- Индексы таблицы `razdelmenu`
--
ALTER TABLE `razdelmenu`
  ADD PRIMARY KEY (`Id_razdel`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bludo`
--
ALTER TABLE `bludo`
  MODIFY `Id_bludo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `Id_podacategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `di_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `podcategory`
--
ALTER TABLE `podcategory`
  MODIFY `Id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `postavshiki`
--
ALTER TABLE `postavshiki`
  MODIFY `Id_postavshik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `produkti`
--
ALTER TABLE `produkti`
  MODIFY `Id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT для таблицы `razdelmenu`
--
ALTER TABLE `razdelmenu`
  MODIFY `Id_razdel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
