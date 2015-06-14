-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 14 2015 г., 17:51
-- Версия сервера: 5.5.43-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `cake`
--

-- --------------------------------------------------------

--
-- Структура таблицы `acl_phinxlog`
--

CREATE TABLE IF NOT EXISTS `acl_phinxlog` (
  `version` bigint(20) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `acl_phinxlog`
--

INSERT IGNORE INTO `acl_phinxlog` (`version`, `start_time`, `end_time`) VALUES
(20141229162641, '2015-06-10 08:44:51', '2015-06-10 08:44:51');

-- --------------------------------------------------------

--
-- Структура таблицы `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lft` (`lft`,`rght`),
  KEY `alias` (`alias`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lft` (`lft`,`rght`),
  KEY `alias` (`alias`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aro_id` int(11) NOT NULL,
  `aco_id` int(11) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `aro_id` (`aro_id`,`aco_id`),
  KEY `aco_id` (`aco_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `bookmarks`
--

CREATE TABLE IF NOT EXISTS `bookmarks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` text,
  `url` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_key` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `bookmarks`
--

INSERT IGNORE INTO `bookmarks` (`id`, `user_id`, `title`, `description`, `url`, `created`, `modified`) VALUES
(2, 2, 'Новина 1', 'asdsadasdasdasd', 'test', '2015-06-10 00:40:31', '2015-06-13 08:52:42'),
(5, 1, '10 речей на Землі, які неможливо пояснити ...', 'Історія нашої планети повна разючих загадок. І цілого життя не вистачить, щоб їх розгадати.\r\n\r\nПроте Adme деякі із цих загадок розгадали.\r\nПтах Моа\r\n\r\nМоа – нелітаючі птахи, які мешкали в Новій Зеландії і вимерли близько 1500 року, знищені (за однією з теорій) аборигенами маорі. Але в ході однієї з експедицій вчені натрапили на величезну частину лапи птиці, яка неймовірно добре збереглася.\r\nХрамовий комплекс Саксайуаман, Перу\r\n\r\nЦей храмовий комплекс дивує своєю бездоганною кладкою без єдиної краплі з''єднувального розчину (між деякими з каменів можна просунути навіть листок паперу). І тим, як ідеально оброблена поверхня кожного блоку.\r\nВорота Сонця, Болівія\r\n\r\n\r\nВорота Сонця розташовані в Тіуанако – найдавнішому і загадковому місті. Деякі вчені вважають, що в першому тисячолітті нашої ери він був центром величезної імперії. Досі немає уявлення про те, що означають малюнки на воротах. Можливо, вони несли якусь астрологічну і астрономічну цінність.\r\nГроти Луньюя, Китай\r\n\r\n\r\nЦі гроти були видовбані в пісковику людьми – це була складна задача, в якій точно повинні були брати участь тисячі китайців, але ніде немає згадки про ці гроти і важку роботу над їхнім створенням.\r\n\r\nЧитайте також: Топ-10 країн, які можуть зникнути через 20 років\r\nОбеліск, Єгипет\r\n\r\n\r\nОбеліск почали вирубувати прямо в скелі, але по ньому пішли тріщини. Його так і залишили незакінченим. Розміри просто приголомшують.\r\nПідводне місто, о. Йонагуни, Японія\r\n\r\n\r\nКомплекс випадково виявив інструктор з дайвінгу Кіхачіро Аратаке. Це підводне місто руйнує всі наукові теорії. Скеля, в якій він вирубаний, пішла під воду приблизно 10 000 років тому, тобто набагато раніше, ніж зведення єгипетських пірамід. За сучасними уявленнями деяких учених, в ту далеку епоху люди тулилися в печерах і вміли хіба що збирати їстівні коріння та полювати на диких звірів, а не зводити кам''яні міста.\r\nМохенджо-Даро ("Пагорб Мертвих"), Пакистан\r\n\r\n\r\nОсь вже багато десятиліть археологів хвилює таємниця загибелі цього міста. У 1922 році індійський археолог Р. Банарджі виявив на одному з островів річки Інд стародавні руїни. Вже тоді виникли питання: як було зруйноване це велике місто, куди поділися його мешканці? На жодне з цих питань, розкопки відповіді не дали.\r\nГородище Л''Анс-о-Медоуз, Канада\r\n\r\n\r\nЦе городище заснували вікінги приблизно 1000 років тому. А це означає, що вони дісталися до Північної Америки набагато раніше, ніж народився Христофор Колумб.\r\nТунелі Кам''яного віку\r\n\r\n\r\nВідкриття великої мережі підземних тунелів, які розкинулися по всій Європі від Шотландії до Туреччини, говорить про те, що люди Кам''яного віку проводили свої дні не тільки за полюванням і збиранням. Але справжнє призначення тунелів досі залишається повною загадкою. Одні дослідники вважають, що їх завданням було захищати людей від хижаків, а інші, що за цією системою люди подорожували, захищені від погодних явищ і воєн.\r\nГігантські кам''яні кулі Коста-Ріки\r\n\r\n\r\nЗагадкові кам''яні утворення ідеально круглої форми інтригують не тільки своїм виглядом, але і своїм незрозумілим походженням і призначенням. Вперше вони були виявлені в 30-х роках XX століття робочими при розчищенні джунглів під бананові плантації. Місцеві легенди свідчили, що всередині загадкових кам''яних куль повинно було бути заховане золото. Але вони були порожні.\r\n', '10_rechey_na_zemli_yaki_nemozhlivo_poyasniti_zemnoyu_logikoyu', '2015-06-13 09:07:12', '2015-06-13 09:07:12');

-- --------------------------------------------------------

--
-- Структура таблицы `bookmarks_tags`
--

CREATE TABLE IF NOT EXISTS `bookmarks_tags` (
  `bookmark_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`bookmark_id`,`tag_id`),
  KEY `tag_idx` (`tag_id`,`bookmark_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bookmarks_tags`
--

INSERT IGNORE INTO `bookmarks_tags` (`bookmark_id`, `tag_id`) VALUES
(2, 1),
(2, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `phinxlog`
--

CREATE TABLE IF NOT EXISTS `phinxlog` (
  `version` bigint(20) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `tags`
--

INSERT IGNORE INTO `tags` (`id`, `title`, `created`, `modified`) VALUES
(1, 'test', '2015-06-10 00:33:38', '2015-06-10 00:33:38'),
(3, 'tag4', '2015-06-13 08:52:42', '2015-06-13 08:52:42');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  `password` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `users`
--

INSERT IGNORE INTO `users` (`id`, `name`, `email`, `role`, `password`, `created`, `modified`) VALUES
(1, 'mackrais', 'admim@site.com', 'admin', '$2y$10$Fkaa090lvLZApfNHCgwrF.6rL/q/1QFgz9d/.T21ynOJoxA.rkclK', '2015-06-10 00:39:48', '2015-06-10 00:39:48'),
(2, 'test', 'test@i.ua', 'user', '$2y$10$OTZnI28RQrbG4Qat2EZ9yeME81vcABOcm8AlyOoaRjuJDiRF7KP.S', '2015-06-11 14:13:39', '2015-06-13 10:56:29'),
(6, 'Tony', 'test@mail.com', 'user', '$2y$10$M8rVIg25Z1JQXapwOE1m7uCfhynFMq0gzKsHNySE0STTJdIiOY9Yq', '2015-06-12 16:53:21', '2015-06-13 10:57:49'),
(7, 'sss', 'aleksey@pyctex.com', 'user', '$2y$10$Ru5UbxEO/6cLyfcOjdjawe82yt.V0t.sgKpbeyQ.J.4WntQNwVDem', '2015-06-12 18:03:03', '2015-06-13 10:55:47');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `bookmarks`
--
ALTER TABLE `bookmarks`
  ADD CONSTRAINT `bookmarks_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `bookmarks_tags`
--
ALTER TABLE `bookmarks_tags`
  ADD CONSTRAINT `bookmarks_tags_ibfk_1` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`),
  ADD CONSTRAINT `bookmarks_tags_ibfk_2` FOREIGN KEY (`bookmark_id`) REFERENCES `bookmarks` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
