-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-03-2012 a las 04:02:09
-- Versión del servidor: 5.1.44
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `website`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zan_feedback`
--

CREATE TABLE IF NOT EXISTS `zan_feedback` (
  `ID_Feedback` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `Phone` varchar(16) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `Message` text NOT NULL,
  `Start_Date` int(11) NOT NULL,
  `Text_Date` varchar(60) NOT NULL,
  `Situation` varchar(15) NOT NULL DEFAULT 'Unread',
  PRIMARY KEY (`ID_Feedback`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Volcar la base de datos para la tabla `zan_feedback`
--

INSERT INTO `zan_feedback` (`ID_Feedback`, `Name`, `Email`, `Company`, `Phone`, `Country`, `City`, `Subject`, `Message`, `Start_Date`, `Text_Date`, `Situation`) VALUES
(1, 'Carlos', 'carlos@milkzoft.com', '', '', '', '', '', 'Hola que tal', 1330664702, 'Viernes, 02 de Marzo de 2012', 'Unread'),
(2, 'Carlos Santana Roldán', 'czantany@hotmail.com', '', '', '', '', '', 'Hòla qué tál', 1330665025, 'Viernes, 02 de Marzo de 2012', 'Unread'),
(3, 'Carlos Santana Roldán', 'czantany@hotmail.com', '', '', '', '', '', 'Hòla qué tál', 1330665435, 'Viernes, 02 de Marzo de 2012', 'Unread'),
(4, 'Carlos Santana Roldán', 'czantany@hotmail.com', '', '', '', '', '', 'Hòla qué tál', 1330665453, 'Viernes, 02 de Marzo de 2012', 'Unread'),
(5, 'Carlos Santana Roldán', 'czantany@hotmail.com', '', '', '', '', '', 'Hòla qué tál', 1330665534, 'Viernes, 02 de Marzo de 2012', 'Unread'),
(6, 'Carlos Santana Roldán', 'czantany@hotmail.com', '', '', '', '', '', 'Hòla qué tál', 1330665630, 'Viernes, 02 de Marzo de 2012', 'Unread'),
(7, 'Carlos Santana Roldán', 'czantany@hotmail.com', '', '', '', '', '', 'Hòla qué tál', 1330665644, 'Viernes, 02 de Marzo de 2012', 'Unread'),
(8, 'Carlos Santana Roldán', 'czantany@hotmail.com', '', '', '', '', '', 'Hòla qué tál', 1330665697, 'Viernes, 02 de Marzo de 2012', 'Unread'),
(9, 'Carlos Santana Roldán', 'czantany@hotmail.com', '', '', '', '', '', 'Hòla qué tál', 1330665711, 'Viernes, 02 de Marzo de 2012', 'Unread'),
(10, 'Carlos Santana Roldán', 'czantany@hotmail.com', '', '', '', '', '', 'Hòla qué tál', 1330668139, 'Viernes, 02 de Marzo de 2012', 'Unread'),
(11, 'Carlos Santana Roldán', 'czantany@hotmail.com', '', '', '', '', '', 'Hòla qué tál', 1330668164, 'Viernes, 02 de Marzo de 2012', 'Unread'),
(12, 'asdsad', 'czantany@hotmail.com', '', '', '', '', '', 'aaasdàsdàs`dsa`dQ·%"·$·&%/%/', 1330668307, 'Friday, March 02, 2012', 'Unread'),
(13, 'Cristina Rojas', 'czantany@hotmail.com', '', '', '', '', '', 'Hola soy Criss :)', 1330846151, 'Sunday, March 04, 2012', 'Unread'),
(14, 'Cristina Rojas', 'czantany@hotmail.com', '', '', '', '', '', 'Hola soy Criss :)', 1330846212, 'Sunday, March 04, 2012', 'Unread'),
(15, 'kjnljnln', 'carlos@milkzoft.com', '', '', '', '', '', 'Hola me gustaría comprar una pagina Web', 1331173837, 'Jueves, 08 de Marzo de 2012', 'Unread'),
(16, 'Carlos ', 'czantany@hotmail.com', '', '', '', '', '', 'sadsadasdasdasd', 1331173983, 'Jueves, 08 de Marzo de 2012', 'Unread');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zan_pages`
--

CREATE TABLE IF NOT EXISTS `zan_pages` (
  `ID_Page` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `Title` varchar(150) NOT NULL,
  `Slug` varchar(150) NOT NULL,
  `Content` text NOT NULL,
  `Principal` tinyint(1) NOT NULL DEFAULT '0',
  `Language` varchar(15) NOT NULL DEFAULT 'English',
  PRIMARY KEY (`ID_Page`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `zan_pages`
--

INSERT INTO `zan_pages` (`ID_Page`, `Title`, `Slug`, `Content`, `Principal`, `Language`) VALUES
(1, 'About me', 'about-me', '<p><img style="float: left; padding-right: 10px;" src="http://127.0.0.1/openweek/www/lib/files/images/uploaded/carlos.png" alt="Carlos Santana" width="201" height="250" /></p>\r\n\r\n<p><h2>Carlos Santana</h2></p>\r\n\r\n<p><em>Web Developer</em></p>\r\n\r\n<p><em>24 years old</em></p>\r\n\r\n<p><em>México</em></p>\r\n\r\n\r\n<p><strong>Email:</strong> carlos@milkzoft.com</p>\r\n\r\n<p><strong>Skype:</strong> MilkZoft</p>\r\n\r\n<p><strong>Twitter:</strong> @czantany</p>\r\n\r\n<h3>Passionate about developing Web applications and new technologies, creator and founder of the framework of MilkZoft ZanPHP.</h3>', 1, 'English'),
(2, 'Acerca de mi', 'acerca-de-mi', '<p><img style="float: left; padding-right: 10px;" src="http://127.0.0.1/openweek/www/lib/files/images/uploaded/carlos.png" alt="Carlos Santana" width="201" height="250" /></p>\r\n\r\n<p><h2>Carlos Santana</h2></p>\r\n\r\n<p><em>Web Developer</em></p>\r\n\r\n<p><em>24 años de edad</em></p>\r\n\r\n<p><em>México</em></p>\r\n\r\n\r\n<p><strong>Email:</strong> carlos@milkzoft.com</p>\r\n\r\n<p><strong>Skype:</strong> MilkZoft</p>\r\n\r\n<p><strong>Twitter:</strong> @czantany</p>\r\n\r\n<h3>Apasionado por el desarrollo de aplicaciones Web y las nuevas tecnologías, creador del framework ZanPHP y fundador de MilkZoft.</h3>', 1, 'Spanish'),
(3, 'Prueba', 'prueba', 'prueba', 0, 'English');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zan_users`
--

CREATE TABLE IF NOT EXISTS `zan_users` (
  `ID_User` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `Username` varchar(30) NOT NULL,
  `Pwd` varchar(40) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Privilege` varchar(50) NOT NULL DEFAULT 'Member',
  `Situation` varchar(15) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`ID_User`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `zan_users`
--

INSERT INTO `zan_users` (`ID_User`, `Username`, `Pwd`, `Email`, `Privilege`, `Situation`) VALUES
(1, 'admin', 'b9223847e1566884893656e84798ff39cea2b8c4', 'carlos@milkzoft.com', 'Super Admin', 'Active');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zan_works`
--

CREATE TABLE IF NOT EXISTS `zan_works` (
  `ID_Work` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `Title` varchar(150) NOT NULL,
  `Slug` varchar(150) NOT NULL,
  `URL` varchar(100) NOT NULL,
  `Content` text NOT NULL,
  `Preview` varchar(250) NOT NULL,
  `Original` varchar(250) NOT NULL,
  `Type` varchar(20) NOT NULL DEFAULT 'Design',
  `Situation` varchar(15) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`ID_Work`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcar la base de datos para la tabla `zan_works`
--

INSERT INTO `zan_works` (`ID_Work`, `Title`, `Slug`, `URL`, `Content`, `Preview`, `Original`, `Type`, `Situation`) VALUES
(1, 'Project 1', 'project-1', 'http://www.codejobs.biz', '<p>\r\n    <strong>Client:</strong> DediServe <br />\r\n    <strong>Services provided:</strong> web site layout design, css/xhtml, flash, javascript\r\n</p>', 'www/lib/files/images/uploaded/works/project1-preview.png', 'www/lib/files/images/uploaded/works/project1.png', 'Design', 'Active'),
(2, 'Project 2', 'project-2', 'http://www.codejobs.biz', '<p>\r\n    <strong>Client:</strong> DediServe <br />\r\n    <strong>Services provided:</strong> web site layout design, css/xhtml, flash, javascript\r\n</p>', 'www/lib/files/images/uploaded/works/project2-preview.png', 'www/lib/files/images/uploaded/works/project2.png', 'Design', 'Active'),
(3, 'Project 3', 'project-3', 'http://www.codejobs.biz', '<p>\r\n    <strong>Client:</strong> DediServe <br />\r\n    <strong>Services provided:</strong> web site layout design, css/xhtml, flash, javascript\r\n</p>', 'www/lib/files/images/uploaded/works/project3-preview.png', 'www/lib/files/images/uploaded/works/project3.png', 'Design', 'Active'),
(4, 'Project 4', 'project-4', 'http://www.codejobs.biz', '<p>\r\n    <strong>Client:</strong> DediServe <br />\r\n    <strong>Services provided:</strong> web site layout design, css/xhtml, flash, javascript\r\n</p>', 'www/lib/files/images/uploaded/works/project4-preview.png', 'www/lib/files/images/uploaded/works/project4.png', 'Design', 'Active'),
(5, 'Project 5', 'project-5', 'http://www.codejobs.biz', '<p>\r\n    <strong>Client:</strong> DediServe <br />\r\n    <strong>Services provided:</strong> web site layout design, css/xhtml, flash, javascript\r\n</p>', 'www/lib/files/images/uploaded/works/project5-preview.png', 'www/lib/files/images/uploaded/works/project5.png', 'Design', 'Active'),
(6, 'Project 6', 'project-6', 'http://www.codejobs.biz', '<p>\r\n    <strong>Client:</strong> DediServe <br />\r\n    <strong>Services provided:</strong> web site layout design, css/xhtml, flash, javascript\r\n</p>', 'www/lib/files/images/uploaded/works/project6-preview.png', 'www/lib/files/images/uploaded/works/project6.png', 'Design', 'Active'),
(7, 'ZanPHP', 'zanphp', 'https://github.com/MilkZoft/ZanPHP', '<p>\r\nZanPHP is an agile Web application development framework written in PHP5 that uses different design patterns and best practices to create applications more quickly with good quality code.\r\n</p>', '', '', 'Development', 'Active'),
(8, 'MuuCMS', 'muucms', 'https://github.com/MilkZoft/MuuCMS', '<p>\r\nMuuCMS is a free and open source Content Management System (CMS) platform powered by ZanPHP Framework. You can develop any kind of application such as blog, gallery, forums, surveys, pages, links, users, videos, Twitter and Facebook applications integration, etc.\r\n</p>', '', '', 'Development', 'Active'),
(9, 'Bootstrap', 'bootrstrap', 'https://github.com/MilkZoft/bootstrap', '<p>\r\nBootstrap is Twitter''s toolkit for kickstarting CSS for websites, apps, and more. It includes base CSS styles for typography, forms, buttons, tables, grids, navigation, alerts, and more.\r\n</p>', '', '', 'Development', 'Active'),
(10, 'Diaspora', 'diaspora', 'https://github.com/MilkZoft/diaspora', '<p>\r\nDistributed and contextual social networking.\r\n</p>', '', '', 'Development', 'Active'),
(11, 'Mediacore', 'mediacore', 'https://github.com/MilkZoft/mediacore', '<p>\r\nA video, audio and podcast publication platform written in Python.\r\n</p>', '', '', 'Development', 'Active'),
(12, 'Phabricator', 'phabricator', 'https://github.com/MilkZoft/phabricator', '<p>\r\nAn early release of Facebook''s development tools.\r\n</p>', '', '', 'Development', 'Active'),
(13, 'Project 7', 'project-7', 'http://www.codejobs.biz', '<p>\r\n<strong>Client:</strong>\r\nDediServe\r\n<br>\r\n<strong>Services provided:</strong>\r\nweb site layout design, css/xhtml, flash, javascript\r\n</p>', 'www/lib/files/images/uploaded/works/project1-preview.png', 'www/lib/files/images/uploaded/works/project1.png', 'Design', 'Active');
