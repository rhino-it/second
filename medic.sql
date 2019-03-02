-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 02 2019 г., 14:50
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
-- Структура таблицы `ex_medic_list_of_analisys`
--

CREATE TABLE IF NOT EXISTS `ex_medic_list_of_analisys` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `id_parent` int(20) DEFAULT NULL,
  `name` varchar(300) NOT NULL,
  `price` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Дамп данных таблицы `ex_medic_list_of_analisys`
--

INSERT INTO `ex_medic_list_of_analisys` (`id`, `id_parent`, `name`, `price`) VALUES
(1, NULL, 'УЗИ органов брюшной полости', NULL),
(2, NULL, 'УЗИ плода', NULL),
(3, NULL, 'Эластография молочной железы', NULL),
(4, NULL, 'Доплерография', NULL),
(5, NULL, '3 и 4 D –УЗИ', NULL),
(6, NULL, 'Физиотерапия', NULL),
(24, NULL, 'УЗИ щитовидной железы', '300 сом'),
(25, NULL, 'УЗИ молочных желез', '400 сом'),
(26, NULL, 'УЗИ внутренних органов (печень, желчный пузырь, почки, селезенки, поджелудочной железы)', '650 сом'),
(27, NULL, 'УЗИ печени, желчного пузыря', '300 сом'),
(28, NULL, 'УЗИ поджелудочной железы', '200 сом'),
(29, NULL, 'УЗИ внутренних органов (печень, желчный пузырь, почки)', '500 сом'),
(30, NULL, 'УЗИ мочевого пузыря, мочеточников', '300 сом'),
(31, NULL, 'УЗИ матки и яичников', '400 сом'),
(32, NULL, 'УЗИ почек', '300 сом'),
(33, NULL, 'УЗИ предстательной железы', '250 сом'),
(34, NULL, 'УЗИ плода до 12 недель', '300 сом'),
(35, NULL, 'УЗИ плода II-III триместр', '500 сом'),
(36, NULL, 'Определение беременности', '200 сом'),
(37, NULL, 'УЗИ суставов', '300 сом'),
(38, NULL, 'Скриннинговое и объемное исследование плода с допплерографией (2-3 триместр, с видеозаписью)', '1000 сом'),
(39, NULL, 'Скриннинговое и объемное исследование плодов при многоплодной беременности с допплерографией', '1500 сом'),
(40, NULL, 'Скриннинговое и объемное исследование плода 1 триместр  (3D и 4D)', '700 сом');

-- --------------------------------------------------------

--
-- Структура таблицы `ex_medic_patient`
--

CREATE TABLE IF NOT EXISTS `ex_medic_patient` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `birthday` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `ex_medic_patient_analysys`
--

CREATE TABLE IF NOT EXISTS `ex_medic_patient_analysys` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `id_record_book` int(20) NOT NULL,
  `id_analysys` int(20) NOT NULL,
  `price` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `ex_medic_record_book`
--

CREATE TABLE IF NOT EXISTS `ex_medic_record_book` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `id_patient` int(20) NOT NULL,
  `data` date NOT NULL,
  `result` varchar(250) NOT NULL,
  `md5` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
(83, 2, 1, 1, '', NULL, NULL, 'О МК Медикал Клиник ', ''),
(82, 1, 1, 1, '', NULL, NULL, 'Главная', ''),
(86, 5, 1, 1, '', NULL, NULL, 'Услуги', ''),
(87, 3, 1, 1, '', NULL, NULL, 'Программы', ''),
(88, 4, 1, 1, '', NULL, NULL, 'Обучение', ''),
(103, 0, 88, NULL, NULL, NULL, NULL, 'Курсы повышения квалификации специалистов УЗ-диагностики', ''),
(102, 0, 88, NULL, NULL, NULL, NULL, 'Курсы подготовки УЗ специалистов', ''),
(101, 0, 87, NULL, NULL, NULL, NULL, 'Комплекс для детей дошкольного возраста', ''),
(93, 0, 83, NULL, 'http://mkmc.kg/pages/staff', NULL, NULL, 'Коллектив ', ''),
(94, 0, 83, NULL, 'http://mkmc.kg/pages/schedule', NULL, NULL, 'Время работы', ''),
(95, 0, 86, NULL, 'http://mkmc.kg/pages/uzi', NULL, NULL, 'Ультразвуковая диагностика', ''),
(96, 0, 86, NULL, 'http://mkmc.kg/pages/phizio', NULL, NULL, 'Физиотерапия', ''),
(97, 0, 86, NULL, NULL, NULL, NULL, 'Консультация врача', ''),
(98, 0, 86, NULL, NULL, NULL, NULL, 'Обучение', ''),
(99, 0, 87, NULL, NULL, NULL, NULL, 'Комплекс для будущих мам', ''),
(100, 0, 87, NULL, NULL, NULL, NULL, 'Комплекс для пенсионеров', ''),
(84, 6, 1, 1, '', NULL, NULL, 'Прайс', ''),
(85, 7, 1, 1, '', NULL, NULL, 'Контакты', ''),
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
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=111 ;

--
-- Дамп данных таблицы `ex_page`
--

INSERT INTO `ex_page` (`id`, `id_type_page`, `id_page_tema`, `id_user`, `user`, `address`, `vrem_ot`, `vrem_do`, `foto`, `foto_thumb`, `video`, `audio`, `url`, `log`, `stat`, `vrem`, `tema_kg`, `tema_ru`, `tema_en`, `page_text_kg`, `page_text_ru`, `page_text_en`, `key_text_kg`, `key_text_ru`, `key_text_en`, `gallery_thumb`, `gallery`) VALUES
(95, 1, 0, 0, '', '', NULL, NULL, 'assets/files/7.jpg', '', NULL, '', '', 1, 0, NULL, 'Tema1', 'Tema1', 'Tema', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum veritatis aut nemo modi sequi, eligendi magni! Eum veritatis rerum ipsam alias natus sapiente, expedita ex aperiam maiores perspiciatis pariatur eaque perferendis totam, velit tempore tenetur beatae distinctio vitae est asperiores ad, iusto soluta eveniet. Tenetur sunt blanditiis id itaque nostrum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum veritatis aut nemo modi sequi, eligendi magni! Eum veritatis rerum ipsam alias natus sapiente, expedita ex aperiam maiores perspiciatis pariatur eaque perferendis totam, velit tempore tenetur beatae distinctio vitae est asperiores ad, iusto soluta eveniet. Tenetur sunt blanditiis id itaque nostrum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum veritatis aut nemo modi sequi, eligendi magni! Eum veritatis rerum ipsam alias natus sapiente, expedita ex aperiam maiores perspiciatis pariatur eaque perferendis totam, velit tempore tenetur beatae distinctio vitae est asperiores ad, iusto soluta eveniet. Tenetur sunt blanditiis id itaque nostrum.', NULL, NULL, '', '', ''),
(96, 1, 0, 0, '', '', NULL, NULL, 'assets/files/7.jpg', '', NULL, '', '', 1, 0, NULL, 'Tema2', 'Tema2', 'Tema', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum veritatis aut nemo modi sequi, eligendi magni! Eum veritatis rerum ipsam alias natus sapiente, expedita ex aperiam maiores perspiciatis pariatur eaque perferendis totam, velit tempore tenetur beatae distinctio vitae est asperiores ad, iusto soluta eveniet. Tenetur sunt blanditiis id itaque nostrum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum veritatis aut nemo modi sequi, eligendi magni! Eum veritatis rerum ipsam alias natus sapiente, expedita ex aperiam maiores perspiciatis pariatur eaque perferendis totam, velit tempore tenetur beatae distinctio vitae est asperiores ad, iusto soluta eveniet. Tenetur sunt blanditiis id itaque nostrum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum veritatis aut nemo modi sequi, eligendi magni! Eum veritatis rerum ipsam alias natus sapiente, expedita ex aperiam maiores perspiciatis pariatur eaque perferendis totam, velit tempore tenetur beatae distinctio vitae est asperiores ad, iusto soluta eveniet. Tenetur sunt blanditiis id itaque nostrum.', NULL, NULL, '', '', ''),
(97, 1, 0, 0, '', '', NULL, NULL, 'assets/files/7.jpg', '', NULL, '', '', 1, 0, NULL, 'Tema3', 'Tema3', 'Tema', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum veritatis aut nemo modi sequi, eligendi magni! Eum veritatis rerum ipsam alias natus sapiente, expedita ex aperiam maiores perspiciatis pariatur eaque perferendis totam, velit tempore tenetur beatae distinctio vitae est asperiores ad, iusto soluta eveniet. Tenetur sunt blanditiis id itaque nostrum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum veritatis aut nemo modi sequi, eligendi magni! Eum veritatis rerum ipsam alias natus sapiente, expedita ex aperiam maiores perspiciatis pariatur eaque perferendis totam, velit tempore tenetur beatae distinctio vitae est asperiores ad, iusto soluta eveniet. Tenetur sunt blanditiis id itaque nostrum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum veritatis aut nemo modi sequi, eligendi magni! Eum veritatis rerum ipsam alias natus sapiente, expedita ex aperiam maiores perspiciatis pariatur eaque perferendis totam, velit tempore tenetur beatae distinctio vitae est asperiores ad, iusto soluta eveniet. Tenetur sunt blanditiis id itaque nostrum.', NULL, NULL, '', '', ''),
(98, 1, 0, 0, '', '', NULL, NULL, 'assets/files/7.jpg', '', NULL, '', '', 1, 0, NULL, 'Tema4', 'Tema4', 'Tema', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum veritatis aut nemo modi sequi, eligendi magni! Eum veritatis rerum ipsam alias natus sapiente, expedita ex aperiam maiores perspiciatis pariatur eaque perferendis totam, velit tempore tenetur beatae distinctio vitae est asperiores ad, iusto soluta eveniet. Tenetur sunt blanditiis id itaque nostrum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum veritatis aut nemo modi sequi, eligendi magni! Eum veritatis rerum ipsam alias natus sapiente, expedita ex aperiam maiores perspiciatis pariatur eaque perferendis totam, velit tempore tenetur beatae distinctio vitae est asperiores ad, iusto soluta eveniet. Tenetur sunt blanditiis id itaque nostrum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum veritatis aut nemo modi sequi, eligendi magni! Eum veritatis rerum ipsam alias natus sapiente, expedita ex aperiam maiores perspiciatis pariatur eaque perferendis totam, velit tempore tenetur beatae distinctio vitae est asperiores ad, iusto soluta eveniet. Tenetur sunt blanditiis id itaque nostrum.', NULL, NULL, '', '', ''),
(99, 1, 0, 0, '', '', NULL, NULL, 'assets/files/7.jpg', '', NULL, '', '', 1, 0, NULL, 'Tema5', 'Tema5', 'Tema', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum veritatis aut nemo modi sequi, eligendi magni! Eum veritatis rerum ipsam alias natus sapiente, expedita ex aperiam maiores perspiciatis pariatur eaque perferendis totam, velit tempore tenetur beatae distinctio vitae est asperiores ad, iusto soluta eveniet. Tenetur sunt blanditiis id itaque nostrum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum veritatis aut nemo modi sequi, eligendi magni! Eum veritatis rerum ipsam alias natus sapiente, expedita ex aperiam maiores perspiciatis pariatur eaque perferendis totam, velit tempore tenetur beatae distinctio vitae est asperiores ad, iusto soluta eveniet. Tenetur sunt blanditiis id itaque nostrum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum veritatis aut nemo modi sequi, eligendi magni! Eum veritatis rerum ipsam alias natus sapiente, expedita ex aperiam maiores perspiciatis pariatur eaque perferendis totam, velit tempore tenetur beatae distinctio vitae est asperiores ad, iusto soluta eveniet. Tenetur sunt blanditiis id itaque nostrum.', NULL, NULL, '', '', ''),
(100, 1, 0, 0, '', '', NULL, NULL, 'assets/files/7.jpg', '', NULL, '', '', 1, 0, NULL, 'Tema6', 'Tema6', 'Tema', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum veritatis aut nemo modi sequi, eligendi magni! Eum veritatis rerum ipsam alias natus sapiente, expedita ex aperiam maiores perspiciatis pariatur eaque perferendis totam, velit tempore tenetur beatae distinctio vitae est asperiores ad, iusto soluta eveniet. Tenetur sunt blanditiis id itaque nostrum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum veritatis aut nemo modi sequi, eligendi magni! Eum veritatis rerum ipsam alias natus sapiente, expedita ex aperiam maiores perspiciatis pariatur eaque perferendis totam, velit tempore tenetur beatae distinctio vitae est asperiores ad, iusto soluta eveniet. Tenetur sunt blanditiis id itaque nostrum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum veritatis aut nemo modi sequi, eligendi magni! Eum veritatis rerum ipsam alias natus sapiente, expedita ex aperiam maiores perspiciatis pariatur eaque perferendis totam, velit tempore tenetur beatae distinctio vitae est asperiores ad, iusto soluta eveniet. Tenetur sunt blanditiis id itaque nostrum.', NULL, NULL, '', '', ''),
(101, 1, 0, 0, '', '', NULL, NULL, 'assets/files/7.jpg', '', NULL, '', '', 1, 0, NULL, 'Tema7', 'Tema7', 'Tema', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum veritatis aut nemo modi sequi, eligendi magni! Eum veritatis rerum ipsam alias natus sapiente, expedita ex aperiam maiores perspiciatis pariatur eaque perferendis totam, velit tempore tenetur beatae distinctio vitae est asperiores ad, iusto soluta eveniet. Tenetur sunt blanditiis id itaque nostrum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum veritatis aut nemo modi sequi, eligendi magni! Eum veritatis rerum ipsam alias natus sapiente, expedita ex aperiam maiores perspiciatis pariatur eaque perferendis totam, velit tempore tenetur beatae distinctio vitae est asperiores ad, iusto soluta eveniet. Tenetur sunt blanditiis id itaque nostrum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum veritatis aut nemo modi sequi, eligendi magni! Eum veritatis rerum ipsam alias natus sapiente, expedita ex aperiam maiores perspiciatis pariatur eaque perferendis totam, velit tempore tenetur beatae distinctio vitae est asperiores ad, iusto soluta eveniet. Tenetur sunt blanditiis id itaque nostrum.', NULL, NULL, '', '', ''),
(102, 1, 0, 0, '', '', NULL, NULL, 'assets/files/7.jpg', '', NULL, '', '', 1, 0, NULL, 'Tema8', 'Tema8', 'Tema', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum veritatis aut nemo modi sequi, eligendi magni! Eum veritatis rerum ipsam alias natus sapiente, expedita ex aperiam maiores perspiciatis pariatur eaque perferendis totam, velit tempore tenetur beatae distinctio vitae est asperiores ad, iusto soluta eveniet. Tenetur sunt blanditiis id itaque nostrum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum veritatis aut nemo modi sequi, eligendi magni! Eum veritatis rerum ipsam alias natus sapiente, expedita ex aperiam maiores perspiciatis pariatur eaque perferendis totam, velit tempore tenetur beatae distinctio vitae est asperiores ad, iusto soluta eveniet. Tenetur sunt blanditiis id itaque nostrum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum veritatis aut nemo modi sequi, eligendi magni! Eum veritatis rerum ipsam alias natus sapiente, expedita ex aperiam maiores perspiciatis pariatur eaque perferendis totam, velit tempore tenetur beatae distinctio vitae est asperiores ad, iusto soluta eveniet. Tenetur sunt blanditiis id itaque nostrum.', NULL, NULL, '', '', ''),
(103, 1, 0, 0, '', '', NULL, NULL, 'assets/files/7.jpg', '', NULL, '', '', 1, 0, NULL, 'Tema9', 'Tema9', 'Tema', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum veritatis aut nemo modi sequi, eligendi magni! Eum veritatis rerum ipsam alias natus sapiente, expedita ex aperiam maiores perspiciatis pariatur eaque perferendis totam, velit tempore tenetur beatae distinctio vitae est asperiores ad, iusto soluta eveniet. Tenetur sunt blanditiis id itaque nostrum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum veritatis aut nemo modi sequi, eligendi magni! Eum veritatis rerum ipsam alias natus sapiente, expedita ex aperiam maiores perspiciatis pariatur eaque perferendis totam, velit tempore tenetur beatae distinctio vitae est asperiores ad, iusto soluta eveniet. Tenetur sunt blanditiis id itaque nostrum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum veritatis aut nemo modi sequi, eligendi magni! Eum veritatis rerum ipsam alias natus sapiente, expedita ex aperiam maiores perspiciatis pariatur eaque perferendis totam, velit tempore tenetur beatae distinctio vitae est asperiores ad, iusto soluta eveniet. Tenetur sunt blanditiis id itaque nostrum.', NULL, NULL, '', '', ''),
(104, 1, 0, 0, '', '', NULL, NULL, 'assets/files/7.jpg', '', NULL, '', '', 1, 0, NULL, 'Tema10', 'Tema10', 'Tema', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum veritatis aut nemo modi sequi, eligendi magni! Eum veritatis rerum ipsam alias natus sapiente, expedita ex aperiam maiores perspiciatis pariatur eaque perferendis totam, velit tempore tenetur beatae distinctio vitae est asperiores ad, iusto soluta eveniet. Tenetur sunt blanditiis id itaque nostrum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum veritatis aut nemo modi sequi, eligendi magni! Eum veritatis rerum ipsam alias natus sapiente, expedita ex aperiam maiores perspiciatis pariatur eaque perferendis totam, velit tempore tenetur beatae distinctio vitae est asperiores ad, iusto soluta eveniet. Tenetur sunt blanditiis id itaque nostrum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum veritatis aut nemo modi sequi, eligendi magni! Eum veritatis rerum ipsam alias natus sapiente, expedita ex aperiam maiores perspiciatis pariatur eaque perferendis totam, velit tempore tenetur beatae distinctio vitae est asperiores ad, iusto soluta eveniet. Tenetur sunt blanditiis id itaque nostrum.', NULL, NULL, '', '', ''),
(105, 14, 0, 0, '', '', NULL, NULL, 'assets/images/9.jpeg', '', NULL, '', '', 1, 0, NULL, 'УЗИ органов брюшной полости', 'УЗИ органов брюшной полости', 'УЗИ органов брюшной полости', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio cum autem assumenda saepe molestias omnis aperiam labore, hic asperiores debitis, voluptate mollitia voluptatum minima dignissimos ex natus et est quis.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio cum autem assumenda saepe molestias omnis aperiam labore, hic asperiores debitis, voluptate mollitia voluptatum minima dignissimos ex natus et est quis.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio cum autem assumenda saepe molestias omnis aperiam labore, hic asperiores debitis, voluptate mollitia voluptatum minima dignissimos ex natus et est quis.', NULL, NULL, '', '', ''),
(106, 14, 0, 0, '', '', NULL, NULL, 'assets/images/6.jpg', '', NULL, '', '', 1, 0, NULL, 'УЗИ плода', 'УЗИ плода', 'УЗИ плода', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio cum autem assumenda saepe molestias omnis aperiam labore, hic asperiores debitis, voluptate mollitia voluptatum minima dignissimos ex natus et est quis.', '<div>\n	<p><strong>УЗИ плода беременным</strong>\n	</p>\n	<p>УЗИ – это безопасный, безболезненный, высокоинформативный и один из самых доступных методов исследований, применяемых, в том числе и для беременных женщин. При помощи ультразвука можно подтвердить беременность, определить ее сроки и местоположение плода.\n	</p>\n	<p>По мере роста плода УЗИ помогает врачу изучить особенности развития будущего малыша, его анатомию, оценить состояние плаценты, пуповины, матки и придатков, а также определить количество околоплодных вод (индекс амниотической жидкости).\n	</p>\n	<p><span style="color: black;"><br><br> В «СМ-Клиника» </span>\n	</p>\n	<p style="margin-right: 0cm; margin-left: 0cm;"><span style="color: #0072cf;">Виды</span>\n	</p>\n	<p>Во время беременности применяют два основных метода УЗИ:\n	</p>\n	<p style="margin-right: 0cm; margin-left: 9pt;">·        \nтрансабдоминальное – проводится через брюшную стенку, датчик располагается на животе;\n	</p>\n	<p style="margin-right: 0cm; margin-left: 9pt;">·        \nтрансвагинальное – датчик вводится через влагалище.\n	</p>\n	<p>Трансвагинальное обеспечивает наиболее близкое расположение датчика к исследуемым органам, что упрощает задачу врача. Для улучшения проводимости сигнала датчик смазывают специальным гелем, который абсолютно безопасный и легко смывается. Ни тот, ни другой вид не доставляет будущей маме боли или дискомфорта.\n	</p>\n	<p>Доверьте свое здоровье и здоровье своего будущего малыша специалистам медицинского центра «МК МЕДИКАЛ КЛИНИК»\n	</p>\n	<p>Они готовы принять Вас и сделать УЗИ по беременности в любое удобное время, <strong>без выходных и праздников</strong>!\n	</p>\n	<p>Современные аппараты от лучших мировых производителей обеспечивают высочайшую информативность исследования, позволяют детальным образом оценить строение и состояние плода, а также состояние здоровья будущей мамы.\n	</p>\n	<p>Записаться в «МК МЕДИКАЛ КЛИНИК» на УЗИ в по беременности Вы можете как по телефону, так и через наш сайт.\n	</p>\n	<p style="margin-right: 0cm; margin-left: 0cm;"><span style="color: #0072cf;">Сроки проведения УЗИ при беременности</span>\n	</p>\n	<p><span style="color: black;">Плановые пренатальные скрининговые УЗИ при беременности проводятся в соответствии с общепринятыми международными стандартами в 11-13 недель, 20-24 недели и в 30-34 недели. <br><br><strong>1-е скрининговое УЗИ (в сроке 11-13 недель)</strong> имеет особое значение, так как именно в этот период оценивается максимальное количество маркеров врожденных пороков и аномалий. Качественно проведенное УЗИ позволяет оценить порядка 20 различных показателей, включая специфические маркеры хромосомных аномалий (используются для выявления синдрома Дауна, Тернера, Эдвардса и пр.). <br><br><strong>2-е скрининговое УЗИ ( в сроке 20-24 недели) и 3-е скрининговое УЗИ ( в сроке 30-34 недели)</strong>, проводят в сочетании с плановой допплерометрией. </span>\n	</p>\n	<p>Если по какой-то причине Вы пропустили плановое обследование – обязательно пройдите его так скоро, как сможете. И обязательно поставьте об этом в известность своего гинеколога.\n	</p>\n	<p style="margin-right: 0cm; margin-left: 0cm;"><span style="color: #0072cf;">Показания к внеплановому УЗИ</span>\n	</p>\n	<p>Ряд симптомов, проявляющихся во время беременности, должны заставить сразу же обратиться для проведения экстренного УЗИ. Вас должно насторожить:\n	</p>\n	<p style="margin-right: 0cm; margin-left: 9pt;">·        \nпоявление болезненных ощущений внизу живота, непривычные выделения из половых путей;\n	</p>\n	<p style="margin-right: 0cm; margin-left: 9pt;">·        \nподозрение на подтекание околоплодных вод;\n	</p>\n	<p style="margin-right: 0cm; margin-left: 9pt;">·        \nотсутствие шевелений плода.\n	</p>\n	<p>Сделать внеплановое трансабдоминальное или трансвагинальное УЗИ врач также может назначить при несоответствии размеров матки сроку, который определяется по дате последней менструации или на предыдущем УЗИ. Также внеплановое исследование проводится для оценки состояния шейки матки и в целях уточнения положения плаценты, плода и пуповины.\n	</p>\n	<p><span style="color: black;">В течение последних 50 лет в мире было проведено большое количество исследований, в результате которых установлено, что <strong>ультразвуковое сканирование не оказывает отрицательного воздействия на протекание беременности и развитие плода. </strong>Своевременная ультразвуковая диагностика при беременности позволяет эффективно корректировать выявленные отклонения в развитии. УЗИ при беременности безопасно, количество необходимых обследований определяется врачом акушером-гинекологом в зависимости от характера протекания беременности. </span>\n	</p>\n	<p>Запишитесь в «МК МЕДИКАЛ КЛИНИК» – обеспечьте себе и своему будущему малышу крепкое здоровье.\n	</p>\n	<p style="margin-right: 0cm; margin-left: 0cm;"><span style="color: #0072cf;">Цена на УЗИ плода беременным</span>\n	</p>\n	<table class="table table-responsive table-bordered table-hover">\n	<tbody>\n	<tr>\n		<td>\n			<p>1\n			</p>\n		</td>\n		<td>\n			<p>УЗИ плода до 12 недель\n			</p>\n		</td>\n		<td>\n			<p>300 сом\n			</p>\n		</td>\n	</tr>\n	<tr>\n		<td>\n			<p>2\n			</p>\n		</td>\n		<td>\n			<p>УЗИ плода II-III триместр\n			</p>\n		</td>\n		<td>\n			<p>500 сом\n			</p>\n		</td>\n	</tr>\n	<tr>\n		<td>\n			<p>3\n			</p>\n		</td>\n		<td>\n			<p>Определение беременности\n			</p>\n		</td>\n		<td>\n			<p>200 сом\n			</p>\n		</td>\n	</tr>\n	</tbody>\n	</table>\n	<p style="margin-right: 0cm; margin-left: 0cm;"><span style="color: #0072cf;"></span>\n	</p>\n	<p style="text-align: center; text-align: center;"><strong><span style="color: #0066cc;">Нам 10 лет. Нас выбрали тысячи. Присоединяйтесь!</span></strong>\n	</p>\n</div>', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio cum autem assumenda saepe molestias omnis aperiam labore, hic asperiores debitis, voluptate mollitia voluptatum minima dignissimos ex natus et est quis.', NULL, NULL, '', '', ''),
(107, 14, 0, 0, '', '', NULL, NULL, 'assets/images/10.jpg', '', NULL, '', '', 1, 0, NULL, 'Эластография молочной железы', 'Эластография молочной железы', 'Эластография молочной железы', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio cum autem assumenda saepe molestias omnis aperiam labore, hic asperiores debitis, voluptate mollitia voluptatum minima dignissimos ex natus et est quis.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio cum autem assumenda saepe molestias omnis aperiam labore, hic asperiores debitis, voluptate mollitia voluptatum minima dignissimos ex natus et est quis.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio cum autem assumenda saepe molestias omnis aperiam labore, hic asperiores debitis, voluptate mollitia voluptatum minima dignissimos ex natus et est quis.', NULL, NULL, '', '', ''),
(108, 14, 0, 0, '', '', NULL, NULL, 'assets/files/7.jpg', '', NULL, '', '', 1, 0, NULL, 'Доплерография', 'Доплерография', 'Доплерография', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio cum autem assumenda saepe molestias omnis aperiam labore, hic asperiores debitis, voluptate mollitia voluptatum minima dignissimos ex natus et est quis.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio cum autem assumenda saepe molestias omnis aperiam labore, hic asperiores debitis, voluptate mollitia voluptatum minima dignissimos ex natus et est quis.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio cum autem assumenda saepe molestias omnis aperiam labore, hic asperiores debitis, voluptate mollitia voluptatum minima dignissimos ex natus et est quis.', NULL, NULL, '', '', ''),
(109, 14, 0, 0, '', '', NULL, NULL, 'assets/images/2.jpg', '', NULL, '', '', 1, 0, NULL, '3 и 4 D –УЗИ', '3 и 4 D –УЗИ', '3 и 4 D –УЗИ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio cum autem assumenda saepe molestias omnis aperiam labore, hic asperiores debitis, voluptate mollitia voluptatum minima dignissimos ex natus et est quis.', '<div>\n	<p><strong>3D и 4D УЗИ при беременности</strong>\n	</p>\n	<p>Приходите на трехмерное и четырехмерное УЗИ в диагностическо-образовательном центре «МК Медикал Клиник» и узнайте полную информацию о развитии Вашего малыша. Команда опытных профессионалов нашего центра позаботится о том, чтобы Ваш ребенок родился абсолютно здоровым и крепким.\n	</p>\n	<p>Мы предлагаем:\n	</p>\n	<p style="margin-right: 0cm; margin-left: 9pt;">·        \n3D и 4D УЗИ плода на различных сроках беременности;\n	</p>\n	<p style="margin-right: 0cm; margin-left: 9pt;">·        \nдиагностика маточно-плацентарного кровотока;\n	</p>\n	<p>Трехмерное и четырехмерное ультразвуковое исследование в «МК Медикал Клиник» включает:\n	</p>\n	<p style="margin-right: 0cm; margin-left: 9pt;">·        \nфетометрию (протокол скриннингового УЗИ на определенном сроке);\n	</p>\n	<p style="margin-right: 0cm; margin-left: 9pt;">·        \nзапись на CD или DVD.\n	</p>\n	<h2><span style="color: #0072cf; font-weight: normal;">Преимущества трехмерного УЗИ</span></h2>\n	<p style="margin-right: 0cm; margin-left: 0cm;">Трехмерное 3D УЗИ завоевало огромную популярность как среди врачей, так и среди пациенток благодаря широким возможностям, которые предоставляет этот современный метод диагностики. Кроме того, 3D абсолютно безопасно, надежно и доступно практически для любой женщины.\n	</p>\n	<p style="margin-right: 0cm; margin-left: 0cm;">В акушерской практике такой вид УЗИ – незаменимый диагностический метод, который дает возможность оценить состояние плода и вовремя выявить развитие врожденных пороков. Объемное трехмерное изображение предоставляет полную информацию о состоянии будущего ребенка.\n	</p>\n	<p style="margin-right: 0cm; margin-left: 0cm;">Это уникальный метод, позволяющий с высокой точностью рассмотреть и идентифицировать пороки, аномалии развития ребенка на ранних сроках беременности сразу в трех проекциях. При этом медицинское заключение выдается в день проведения исследования.\n	</p>\n	<p style="margin-right: 0cm; margin-left: 0cm;">У нас также возможно проведение новейшего ультразвукового диагностического исследования – 4D УЗИ-трехмерного изображения в реальном времени, где четвертым измерением является время.\n	</p>\n	<p style="margin-right: 0cm; margin-left: 0cm;">Мы даем возможность будущим родителям увидеть своего малыша. При этом они получают не только первую фотокарточку, но и видеозапись.\n	</p>\n	<p style="margin-right: 0cm; margin-left: 0cm;">Объемное изображение с максимальной реалистичностью и точностью дает возможность рассмотреть будущего малыша.\n	</p>\n	<p style="margin-right: 0cm; margin-left: 0cm;">Этот метод особенную важность имеет в диагностике развития внутриутробных нарушений. <strong>Помните</strong>: УЗИ на патологию плода помогает как можно раньше выявить нарушения и начать лечение еще неродившегося малыша.\n	</p>\n	<h2><span style="color: #0072cf; font-weight: normal;">Безопасна ли процедура для матери и ребенка?</span></h2>\n	<p style="margin-right: 0cm; margin-left: 0cm;">Среди некоторых родителей бытует мнение по поводу небезопасности диагностики с помощью 3D и 4D УЗИ. Спешим успокоить: ультразвуковое исследование абсолютно безопасно!\n	</p>\n	<p style="margin-right: 0cm; margin-left: 0cm;">3D и 4D УЗИ признаны одними из самых безопасных диагностических методов, которые даже при условии частого проведения не наносят организму ни малейшего вреда! Исследование безопасно как для женщины, так и еще не родившегося малыша.\n	</p>\n	<h2><span style="color: #0072cf; font-weight: normal;">Определение пола ребенка</span></h2>\n	<p style="margin-right: 0cm; margin-left: 0cm;">Пол ребенка закладывается сразу после зачатия. Но поначалу у плода отсутствуют выраженные внешние признаки половых органов. Определить, девочку или мальчика Вы ждете, при помощи УЗИ можно только при сроке беременности свыше 12 недель, во втором и третьем триместре беременности. Точность определения пола ребенка – примерно 98%.\n	</p>\n	<p style="margin-right: 0cm; margin-left: 0cm;">Трехмерное УЗИ позволяют получить более точные результаты с максимально достоверным определением пола. Изображение на мониторе настолько четкое, что в большинстве случаев родители могут разглядеть пол ребенка без посторонней помощи.\n	</p>\n	<h2><span style="color: #0072cf; font-weight: normal;">УЗИ сердца плода</span></h2>\n	<p style="margin-right: 0cm; margin-left: 0cm;">Сердцебиение плода является основным показателем состояния будущего ребенка. По этой причине врачи контролируют работу сердца малыша в течение всего периода беременности. УЗИ помогает уточнить расположение сердца, его размеры, размеры желудочков и предсердий, выяснить, на месте ли межжелудочковая перегородка и не имеет ли она дефектов, а также многое другое.\n	</p>\n	<h2><span style="color: #0072cf; font-weight: normal;">Отличие 4D от 3D УЗИ</span></h2>\n	<p style="margin-right: 0cm; margin-left: 0cm;">Не все знают разницу между трехмерным и четырехмерным УЗИ. Благодаря 3D врач получает объемное изображение и может записать на электронный носитель главные моменты развития малыша.\n	</p>\n	<p style="margin-right: 0cm; margin-left: 0cm;">Четырехмерное УЗИ является новейшей технологией: оно не только позволяет увидеть будущего ребенка в нескольких пространственных измерениях. Во время такого исследования можно снять небольшой видеоролик о внутриутробной жизни плода. Вы можете наблюдать за жизнью малыша в режиме реального времени!\n	</p>\n	<h2><span style="color: #ff6600; font-weight: normal;">Особенности проведения 3D и 4D УЗИ</span></h2>\n	<p><span style="color: black;">Новые функции современных ультразвуковых сканеров не влияют на безопасность исследования. Частота сканирования, интенсивность и мощность ультразвуковой волны при 3D / 4D УЗИ такие же, как и при обычном ультразвуковом исследовании. <br><br> Будущим родителям следует иметь в виду, что до 10 недель беременности трехмерная реконструкция имеет низкую информативность. Проводить процедуру рекомендуется не ранее 10 недели и не позже 30. <br><br> Качество изображения зависит от множества факторов. Положение тела ребенка и его конечностей, положение пуповины и плаценты сильно влияют на качество получаемого на мониторе изображения, также многое зависит от двигательной активности ребенка. Избыточный вес у будущей мамы, наличие рубцов на передней брюшной стенке, а также малое количество околоплодных вод могут служить помехами для обработки ультразвукового сигнала и создания объемного изображения ребенка. </span>\n	</p>\n	<h2><span style="font-weight: normal;">Цены на 3 D-4D УЗИ при беременности</span></h2>\n	<table class="table table-responsive table-bordered table-hover">\n	<tbody>\n	<tr>\n		<td>\n			<p>Скриннинговое и объемное исследование плода с допплерографией (2-3 триместр, с видеозаписью)\n			</p>\n		</td>\n		<td>\n			<p>1000 сом\n			</p>\n		</td>\n	</tr>\n	<tr>\n		<td>\n			<p>Скриннинговое и объемное исследование плодов при многоплодной беременности с допплерографией\n			</p>\n		</td>\n		<td>\n			<p>1500 сом\n			</p>\n		</td>\n	</tr>\n	<tr>\n		<td>\n			<p>Скриннинговое и объемное исследование плода 1 триместр  (3D и 4D)\n			</p>\n		</td>\n		<td>\n			<p>700 сом\n			</p>\n		</td>\n	</tr>\n	</tbody>\n	</table>\n	<p style="text-align: center; margin-right: 0cm; margin-left: 0cm; text-align: center;"><strong><span style="color: #0066cc;">Доверяйте здоровье ребенка профессионалам!</span></strong>\n	</p>\n</div>', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio cum autem assumenda saepe molestias omnis aperiam labore, hic asperiores debitis, voluptate mollitia voluptatum minima dignissimos ex natus et est quis.', NULL, NULL, '', '', ''),
(110, 14, 0, 0, '', '', NULL, NULL, 'assets/images/8.jpg', '', NULL, '', '', 1, 0, NULL, 'Физиотерапия', 'Физиотерапия', 'Физиотерапия', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio cum autem assumenda saepe molestias omnis aperiam labore, hic asperiores debitis, voluptate mollitia voluptatum minima dignissimos ex natus et est quis.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio cum autem assumenda saepe molestias omnis aperiam labore, hic asperiores debitis, voluptate mollitia voluptatum minima dignissimos ex natus et est quis.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio cum autem assumenda saepe molestias omnis aperiam labore, hic asperiores debitis, voluptate mollitia voluptatum minima dignissimos ex natus et est quis.', NULL, NULL, '', '', '');

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
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `ex_type_page`
--

INSERT INTO `ex_type_page` (`id`, `style`, `name_kg`, `name_ru`, `name_en`) VALUES
(1, 'label label-primary', 'Новости', 'Новости', 'Новости'),
(2, 'label label-default', 'Страница', 'Страница', 'Страница'),
(3, 'label label-danger', 'Объявление', 'Объявление', 'Объявление'),
(4, 'label label-success', 'События', 'События', 'События'),
(5, NULL, 'Фотогалерея', 'Фотогалерея', 'Фотогалерея'),
(6, NULL, 'Видеогалерея', 'Видеогалерея', 'Видеогалерея'),
(14, NULL, 'Услуги', 'Услуги', 'Услуги');

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
