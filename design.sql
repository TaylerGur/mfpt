-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 06 2016 г., 18:45
-- Версия сервера: 5.5.45
-- Версия PHP: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `design`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `text` text NOT NULL,
  `img_src` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `title`, `text`, `img_src`) VALUES
(1, 'Team Member One', 'He is the most important member of your team. Usually this is the person who started the website. Maybe it is worth to write why he has made such a decision and what has inspired him ...', 'img/img2.jpg'),
(2, 'Another Team Member', 'We are completly lost on what he''s responsible for, but we hope that you know it. We also hope that you will tell it to the rest of the world including us by placing some real text here ...', 'img/img3.jpg'),
(3, 'Team Member One', 'He is the most important member of your team. Usually this is the person who started the website. Maybe it is worth to write why he has made such a decision and what has inspired him ...', 'img/img4.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `contact_message`
--

CREATE TABLE IF NOT EXISTS `contact_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `e_mail` varchar(50) NOT NULL,
  `site` varchar(50) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `contact_message`
--

INSERT INTO `contact_message` (`id`, `name`, `e_mail`, `site`, `text`) VALUES
(1, '1', '1', '1', '1'),
(2, '0', '0', 'фыв', ''),
(3, '0', '0', 'фыв', ''),
(4, '1', '2', '3', '4'),
(5, '0', '0', 'http://starosta.pro', 'Hi!)'),
(6, '0', '0', '', ''),
(7, '5', '6', '7', '8'),
(8, '12', '12', '12', '12'),
(9, '', '', '', ''),
(10, '', '', '', ''),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
