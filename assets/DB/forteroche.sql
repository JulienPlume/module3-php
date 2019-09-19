-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 19 sep. 2019 à 23:39
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `forteroche`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(512) NOT NULL,
  `content` text NOT NULL,
  `category` varchar(128) NOT NULL,
  `seo` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `date`, `title`, `subtitle`, `content`, `category`, `seo`, `slug`) VALUES
(8, '2019-09-19 23:52:43', 'Sit amet', 'Neque porro quisquam est qui ', '<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Praesent enim lectus, dapibus nec vulputate vitae, congue quis ante. Quisque tempus nisl sit amet turpis consectetur, a dapibus magna cursus. Vivamus est magna, sollicitudin a lectus malesuada, congue tristique nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum scelerisque iaculis metus quis pulvinar. Nunc id tincidunt elit. Sed sit amet magna a justo posuere dignissim a non elit. In hac habitasse platea dictumst. Quisque vitae erat eu eros tristique faucibus. Etiam tortor lorem, pharetra sed aliquet nec, fringilla vel elit. Curabitur ex mauris, egestas ac libero vitae, auctor viverra metus. Cras vel diam venenatis nulla rhoncus suscipit. Integer quis malesuada augue, vel sagittis nisi.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Aliquam pulvinar tristique risus in blandit. Quisque eu metus ac nibh iaculis tincidunt. In sagittis tortor vel magna ullamcorper, a congue risus luctus. Maecenas venenatis malesuada leo, luctus rhoncus libero. Sed non dui maximus, efficitur justo quis, blandit est. Aliquam rhoncus, leo ac pellentesque fermentum, lorem urna porttitor dolor, vitae placerat leo purus ut dolor. Etiam consectetur nisl at libero bibendum, ut imperdiet tellus lobortis. Pellentesque dictum lectus nulla, a posuere dui venenatis id. Phasellus eget viverra sem, id mollis est. Suspendisse tristique, diam at porta finibus, augue augue sollicitudin nibh, eu consectetur sapien dui at dolor. Aenean eu dictum turpis, quis convallis felis. Aliquam cursus libero nec libero dapibus rhoncus.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Vestibulum ac dolor vitae tellus vestibulum rutrum. Fusce molestie mollis sapien eu vestibulum. Etiam eget arcu vitae neque aliquam viverra sed et nisl. Nam tempor tristique arcu. Aliquam erat volutpat. Morbi vitae mauris pulvinar, auctor est ac, lacinia eros. Donec libero dolor, malesuada a eros in, porta ornare est. Aenean fermentum ac dolor ac accumsan. Vestibulum sed posuere nunc, non malesuada lorem. Praesent placerat, tellus vel placerat tincidunt, mauris dui porta libero, in molestie augue ante ac lacus. Donec ultrices tincidunt tincidunt. Quisque viverra nibh vitae aliquet rutrum. Nam odio dolor, blandit in ultricies non, sollicitudin non orci. Donec lobortis ullamcorper porta. Praesent a faucibus est. Nulla facilisi.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Nam eleifend efficitur molestie. Fusce laoreet lorem nulla, mollis dictum ante malesuada nec. Nam ac mauris iaculis lacus pretium feugiat. Morbi porttitor, lacus euismod sodales feugiat, lacus sapien molestie leo, in blandit libero dolor dictum sem. Suspendisse quis aliquam metus. Duis mattis ullamcorper justo, et lobortis sem tincidunt ut. Praesent sodales orci quis tellus euismod, sed porta ante imperdiet. Donec molestie ornare purus, nec pretium lectus. Praesent laoreet sagittis metus quis faucibus. Integer non varius quam. In diam nunc, maximus cursus nibh id, dapibus malesuada lacus. Fusce mattis dolor vel pretium luctus. Pellentesque tellus ex, pellentesque vitae nunc sed, ultrices sodales neque. Aliquam fringilla auctor nibh, sit amet euismod mi faucibus a. Quisque vel accumsan ipsum, quis interdum lorem.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Pellentesque porta molestie mauris eget pulvinar. Fusce et eros orci. Duis fringilla eros neque, ut mattis orci elementum eu. Suspendisse urna tortor, aliquam eget vehicula nec, ullamcorper ac sem. Ut mattis lorem eget metus elementum, a ornare neque blandit. Aenean lacinia justo in sagittis faucibus. Aliquam erat volutpat. Nam sit amet tempus augue, commodo sagittis risus. Vestibulum nec ultricies purus. Nulla consectetur vitae enim ut tincidunt. Suspendisse enim risus, pulvinar a ullamcorper at, egestas ut velit. Praesent sed mollis felis, a molestie tellus.</p>', 'lorem', 'ipsum', 'sit-amet'),
(9, '2019-09-19 23:59:02', 'Vergentem in mare', 'Vita est illis semper in fuga uxoresque', '<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Sed et scelerisque neque, eget egestas massa. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi sed nunc ac ex blandit rhoncus. Pellentesque ac dignissim lectus, molestie tincidunt nisi. Donec lectus nunc, pulvinar a tempor eu, fermentum non augue. Nulla facilisi. Phasellus metus ex, faucibus a lorem ac, dapibus placerat eros. Donec commodo, tortor vitae faucibus consequat, nunc risus fermentum nibh, ut accumsan tortor dolor pretium nisi. Nulla id augue non ex sodales sodales.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Maecenas tempus nisl sit amet finibus luctus. Phasellus sit amet tortor a ligula feugiat cursus. Mauris ullamcorper velit eget interdum posuere. Phasellus pretium lorem eget justo venenatis pulvinar. Etiam in urna accumsan massa vulputate dignissim ac sit amet mauris. In ac quam quis lorem condimentum vulputate. Duis fermentum mi metus, ac congue neque rhoncus iaculis. Maecenas dapibus libero ut scelerisque vulputate. Etiam non lacinia ex. Duis consectetur condimentum elit ac dignissim. Mauris cursus nisl nisi. Sed ornare commodo lectus vitae varius.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Phasellus eu sollicitudin sem. Quisque justo tortor, porta vitae porta non, feugiat sagittis lorem. Aliquam fermentum lorem dui, ut placerat dolor blandit pharetra. Quisque sapien elit, ullamcorper at varius a, varius vel mauris. Donec at posuere tellus. Nam vitae varius tellus. Suspendisse scelerisque ex quis condimentum finibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse viverra massa quis nibh hendrerit, ac feugiat ipsum convallis. Suspendisse ullamcorper quam neque, in luctus sapien venenatis id. In efficitur non tortor in feugiat. Fusce vestibulum vehicula leo, vel interdum ex convallis sit amet. Duis eros eros, faucibus faucibus nunc ac, tincidunt lacinia velit. Pellentesque consectetur, velit vitae auctor ultrices, magna quam malesuada lacus, nec laoreet purus turpis id enim. Nunc venenatis tellus sit amet placerat vestibulum.</p>', 'lorem', 'ipsum', 'vergentem-in-mare');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_post` int(11) NOT NULL,
  `author` varchar(75) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `signaled` tinyint(1) DEFAULT NULL,
  `approved` tinyint(1) DEFAULT NULL,
  `hidden` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `id_post`, `author`, `content`, `date`, `signaled`, `approved`, `hidden`) VALUES
(1, 1, 'dqsdq', 'qsdsq', '2019-08-02 22:34:39', NULL, NULL, NULL),
(2, 1, 'ju', 'f', '2019-08-02 22:34:51', NULL, NULL, NULL),
(3, 1, 'ju', 'f', '2019-08-02 22:35:26', NULL, NULL, NULL),
(4, 1, 'ju', 'f', '2019-08-02 22:37:16', NULL, NULL, NULL),
(5, 1, 'monSupakoolPseudo', 'et mon message', '2019-08-02 22:37:30', NULL, NULL, NULL),
(6, 1, 'monSupakoolPseudo', 'et mon message', '2019-08-02 22:39:35', NULL, NULL, NULL),
(7, 1, 'monSupakoolPseudo', 'et mon message', '2019-08-02 22:39:38', NULL, NULL, NULL),
(8, 1, 'dqsdq', 'qsdsq', '2019-08-02 22:39:44', NULL, NULL, NULL),
(9, 2, 'Dodge', 'Im totally agree with you !', '2019-08-03 12:56:35', 0, 1, NULL),
(10, 2, 'antiDodge', '... im not!', '2019-08-03 12:57:04', 0, 1, NULL),
(11, 2, 'qsd', 'qsd', '2019-08-09 20:48:46', 0, 1, NULL),
(12, 2, 'member', 'nouveau commentaire\r\n', '2019-08-16 14:15:21', 0, 1, NULL),
(13, 2, 'dqdq', 'qsd', '2019-09-06 13:35:04', 0, NULL, 1),
(14, 2, 'dqdq', 'qsd', '2019-09-06 13:47:15', NULL, NULL, NULL),
(15, 2, 'sqdqsd', 'sqd', '2019-09-06 14:07:54', NULL, NULL, NULL),
(16, 4, 'qsddqs', 'qsdqdsd', '2019-09-06 14:45:44', NULL, NULL, NULL),
(17, 5, 'qsdqsd', 'qsds', '2019-09-06 14:56:09', NULL, NULL, NULL),
(18, 6, 'Cesar', 'Vous n\'auriez pas vu mon Fils? ', '2019-09-06 18:13:09', NULL, NULL, NULL),
(19, 6, 'Novak Djokovic', 'J\'ai joué avec lui la semaine dernière ..', '2019-09-06 18:14:09', NULL, NULL, NULL),
(20, 6, 'Brutus', '@Cesar: tkt papa, jte rtrouve à la curie de Pompé, attends moi sur les marches!', '2019-09-06 18:16:03', NULL, NULL, NULL),
(21, 7, 'Hugo Contrepètre', 'J’ai glissé dans la piscine !', '2019-09-06 18:20:12', 0, NULL, 1),
(22, 7, 'user2755', 'C\'est déplacé, que quelqu\'un le signal à l\'administrateur !', '2019-09-06 18:21:13', NULL, NULL, NULL),
(23, 7, 'Claude', 'Si nous savions comment faire, c\'est vous que j\'aurai signalé @user2755', '2019-09-06 18:21:39', NULL, NULL, NULL),
(24, 7, 'Jessica', 'coucou, si tu aimes les vêtements blancs cassés, visite mon site :\r\n\r\nwww.tomate-et-brocoli.sex.xXx', '2019-09-06 18:22:54', 0, NULL, 1),
(25, 8, 'Hugo Contrepètre', 'J’ai glissé dans la piscine !', '2019-09-19 23:56:39', NULL, NULL, NULL),
(26, 8, 'user2755', 'C\'est déplacé, que quelqu\'un le signal à l\'administrateur !', '2019-09-19 23:57:02', NULL, NULL, NULL),
(27, 8, 'Claude', 'Si nous savions comment faire, c\'est vous que j\'aurai signalé @user2755', '2019-09-19 23:57:25', 1, NULL, NULL),
(28, 8, 'Jessica', 'coucou, si tu aimes les vêtements blancs cassés, visite mon site : www.tomate-et-brocoli.sex.xXx', '2019-09-19 23:57:36', 1, NULL, NULL),
(29, 9, 'Jué', 'first !', '2019-09-20 00:47:47', NULL, NULL, NULL),
(30, 9, 'Jué', 'first !', '2019-09-20 00:49:32', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user_table`
--

DROP TABLE IF EXISTS `user_table`;
CREATE TABLE IF NOT EXISTS `user_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user_table`
--

INSERT INTO `user_table` (`id`, `username`, `password`) VALUES
(1, 'jean', '$2y$10$K/izo7Sq8hPGfk2SXbhVAuCdw2rTioPPkcCruNRYPNH74ym2GnXHS');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
