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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

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
(12, 'asdsad', 'czantany@hotmail.com', '', '', '', '', '', 'aaasdàsdàs`dsa`dQ·%"·$·&%/%/', 1330668307, 'Friday, March 02, 2012', 'Unread');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `zan_pages`
--

INSERT INTO `zan_pages` (`ID_Page`, `Title`, `Slug`, `Content`, `Principal`, `Language`) VALUES
(1, 'About me', 'about-me', '<p><img style="float: left; padding-right: 10px;" src="http://127.0.0.1/openweek/www/lib/files/images/uploaded/carlos.png" alt="Carlos Santana" width="201" height="250" /></p>\r\n\r\n<p><h2>Carlos Santana</h2></p>\r\n\r\n<p><em>Web Developer</em></p>\r\n\r\n<p><em>24 years old</em></p>\r\n\r\n<p><em>México</em></p>\r\n\r\n\r\n<p><strong>Email:</strong> carlos@milkzoft.com</p>\r\n\r\n<p><strong>Skype:</strong> MilkZoft</p>\r\n\r\n<p><strong>Twitter:</strong> @czantany</p>\r\n\r\n<h3>Passionate about developing Web applications and new technologies, creator and founder of the framework of MilkZoft ZanPHP.</h3>', 1, 'English'),
(2, 'Acerca de mi', 'acerca-de-mi', '<p><img style="float: left; padding-right: 10px;" src="http://127.0.0.1/openweek/www/lib/files/images/uploaded/carlos.png" alt="Carlos Santana" width="201" height="250" /></p>\r\n\r\n<p><h2>Carlos Santana</h2></p>\r\n\r\n<p><em>Web Developer</em></p>\r\n\r\n<p><em>24 años de edad</em></p>\r\n\r\n<p><em>México</em></p>\r\n\r\n\r\n<p><strong>Email:</strong> carlos@milkzoft.com</p>\r\n\r\n<p><strong>Skype:</strong> MilkZoft</p>\r\n\r\n<p><strong>Twitter:</strong> @czantany</p>\r\n\r\n<h3>Apasionado por el desarrollo de aplicaciones Web y las nuevas tecnologías, creador del framework ZanPHP y fundador de MilkZoft.</h3>', 1, 'Spanish');
