-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 26 2019 г., 12:33
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `medic`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ex_file`
--

CREATE TABLE IF NOT EXISTS `ex_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(255) DEFAULT NULL,
  `fail` varchar(255) DEFAULT NULL,
  `vrem` datetime DEFAULT NULL,
  `name_kg` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `fail_thumb` varchar(200) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `ex_file`
--

INSERT INTO `ex_file` (`id`, `id_user`, `fail`, `vrem`, `name_kg`, `name_ru`, `name_en`, `fail_thumb`, `type`) VALUES
(8, 1, 'e7e589d06a3f9bd443320c45df7b48be.jpg', '2019-02-02 15:03:35', '', '', '', 'e7e589d06a3f9bd443320c45df7b48be_thumb.jpg', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `ex_file_page`
--

CREATE TABLE IF NOT EXISTS `ex_file_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_page` int(11) DEFAULT NULL,
  `id_file` int(11) DEFAULT NULL,
  `vrem` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Структура таблицы `ex_menu`
--

CREATE TABLE IF NOT EXISTS `ex_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sort` int(11) DEFAULT '0',
  `id_parent` int(11) DEFAULT '0',
  `id_page` int(11) DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `target` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `name_kg` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `name_ru` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `name_en` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=104 ;

--
-- Дамп данных таблицы `ex_menu`
--

INSERT INTO `ex_menu` (`id`, `sort`, `id_parent`, `id_page`, `url`, `target`, `name_kg`, `name_ru`, `name_en`) VALUES
(83, 2, 1, 1, '', '0', 'ц', 'О МК Медикал Клиник ', 'Контакты'),
(82, 1, 1, 1, 'http://vak1/pages/application', NULL, '', 'Главная', ''),
(86, 5, 1, 1, 'http://vak1/pages/application', NULL, '', 'Услуги', ''),
(87, 3, 1, 1, 'http://vak1/pages/application', NULL, '', 'Программы', ''),
(88, 4, 1, 1, 'http://vak1/pages/application', NULL, '', 'Обучение', ''),
(103, 0, 88, NULL, NULL, NULL, NULL, 'Курсы повышения квалификации специалистов УЗ-диагностики', ''),
(102, 0, 88, NULL, NULL, NULL, NULL, 'Курсы подготовки УЗ специалистов', ''),
(101, 0, 87, NULL, NULL, NULL, NULL, 'Комплекс для детей дошкольного возраста', ''),
(93, 0, 83, NULL, NULL, NULL, NULL, 'Коллектив ', ''),
(94, 0, 83, NULL, NULL, NULL, NULL, 'Время работы', ''),
(95, 0, 86, NULL, NULL, NULL, NULL, 'Ультразвуковая диагностика', ''),
(96, 0, 86, NULL, NULL, NULL, NULL, 'Физиотерапия', ''),
(97, 0, 86, NULL, NULL, NULL, NULL, 'Консультация врача', ''),
(98, 0, 86, NULL, NULL, NULL, NULL, 'Обучение', ''),
(99, 0, 87, NULL, NULL, NULL, NULL, 'Комплекс для будущих мам', ''),
(100, 0, 87, NULL, NULL, NULL, NULL, 'Комплекс для пенсионеров', ''),
(84, 6, 1, 1, 'http://vak1/pages/application', NULL, '', 'Прайс', ''),
(85, 7, 1, 1, 'http://vak1/pages/application', NULL, '', 'Контакты', ''),
(1, 0, 0, NULL, NULL, NULL, NULL, 'Главное меню', '');

-- --------------------------------------------------------

--
-- Структура таблицы `ex_news_tema`
--

CREATE TABLE IF NOT EXISTS `ex_news_tema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_ru` varchar(20) NOT NULL,
  `name_kg` varchar(20) NOT NULL,
  `name_en` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `ex_news_tema`
--

INSERT INTO `ex_news_tema` (`id`, `name_ru`, `name_kg`, `name_en`) VALUES
(1, 'Образование и наука', 'Образование и наука', 'Образование и наука'),
(2, 'Культура', 'Культура', 'Культура'),
(3, 'Спорт', 'Спорт', 'Спорт'),
(4, 'Разное', 'Разное', 'Разное');

-- --------------------------------------------------------

--
-- Структура таблицы `ex_page`
--

CREATE TABLE IF NOT EXISTS `ex_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_type_page` int(11) DEFAULT NULL,
  `id_page_tema` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `user` varchar(100) CHARACTER SET utf8 NOT NULL,
  `address` varchar(250) CHARACTER SET utf8 NOT NULL,
  `vrem_ot` datetime DEFAULT NULL,
  `vrem_do` datetime DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `foto_thumb` varchar(250) CHARACTER SET utf8 NOT NULL,
  `video` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `audio` varchar(250) CHARACTER SET utf8 NOT NULL,
  `url` varchar(250) CHARACTER SET utf8 NOT NULL,
  `log` int(11) DEFAULT '1',
  `stat` int(11) DEFAULT '0',
  `vrem` datetime DEFAULT NULL,
  `tema_kg` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tema_ru` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `tema_en` varchar(250) CHARACTER SET utf8 NOT NULL,
  `page_text_kg` text CHARACTER SET utf8 NOT NULL,
  `page_text_ru` text CHARACTER SET utf8 NOT NULL,
  `page_text_en` text CHARACTER SET utf8,
  `key_text_kg` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `key_text_ru` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `key_text_en` varchar(250) CHARACTER SET utf8 NOT NULL,
  `gallery_thumb` text CHARACTER SET utf8 NOT NULL,
  `gallery` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=33 ;

-- --------------------------------------------------------

--
-- Структура таблицы `ex_results_archive`
--

CREATE TABLE IF NOT EXISTS `ex_results_archive` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `birthday` date NOT NULL,
  `diagnos` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `ex_type_menu`
--

CREATE TABLE IF NOT EXISTS `ex_type_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_kg` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `name_ru` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `name_en` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=14 ;

-- --------------------------------------------------------

--
-- Структура таблицы `ex_type_page`
--

CREATE TABLE IF NOT EXISTS `ex_type_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `style` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `name_kg` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `name_ru` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `name_en` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `ex_type_page`
--

INSERT INTO `ex_type_page` (`id`, `style`, `name_kg`, `name_ru`, `name_en`) VALUES
(1, 'label label-primary', 'Новости', 'Новости', 'Новости'),
(2, 'label label-default', 'Страница', 'Страница', 'Страница'),
(3, 'label label-danger', 'Объявление', 'Объявление', 'Объявление'),
(4, 'label label-success', 'События', 'События', 'События'),
(5, NULL, 'Фотогалерея', 'Фотогалерея', 'Фотогалерея'),
(6, NULL, 'Видеогалерея', 'Видеогалерея', 'Видеогалерея');

-- --------------------------------------------------------

--
-- Структура таблицы `ex_type_user`
--

CREATE TABLE IF NOT EXISTS `ex_type_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `style` varchar(50) NOT NULL,
  `name_ru` varchar(50) NOT NULL,
  `name_kg` varchar(50) NOT NULL,
  `name_en` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `ex_type_user`
--

INSERT INTO `ex_type_user` (`id`, `style`, `name_ru`, `name_kg`, `name_en`) VALUES
(1, 'label label-danger', 'Администратор', 'Администратор', 'Администратор'),
(2, 'label label-success', 'Редактор', 'Редактор', 'Редактор'),
(3, 'label label-primary', 'Автор', 'Автор', 'Автор'),
(4, 'label label-warning', 'Участник', 'Участник', 'Участник'),
(5, 'label label-default', 'Подписчик', 'Подписчик', 'Подписчик');

-- --------------------------------------------------------

--
-- Структура таблицы `ex_user`
--

CREATE TABLE IF NOT EXISTS `ex_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `fio` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `type_user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `ex_user`
--

INSERT INTO `ex_user` (`id`, `login`, `pass`, `fio`, `name`, `tel`, `type_user`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'Абдирасулов А.', NULL, '35646540', 1),
(3, 'press', '202cb962ac59075b964b07152d234b70', 'Самиева У.', NULL, '88608362', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
