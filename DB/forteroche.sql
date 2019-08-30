-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 30 août 2019 à 08:57
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
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(512) NOT NULL,
  `content` text NOT NULL,
  `category` varchar(128) NOT NULL,
  `seo` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `date`, `title`, `subtitle`, `content`, `category`, `seo`, `slug`) VALUES
(3, '2019-08-30 08:36:48', 'test 2', 'lol', 'testons', '', '', 'test-2'),
(2, '2019-08-03 10:55:42', 'My new article', 'just  for now', 'Nothing is better than a hot coffee cup a sunday morning', 'idea', 'coffee love', 'my-new-article');

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
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `flag` tinyint(1) DEFAULT NULL,
  `trusted` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `id_post`, `author`, `content`, `date`, `flag`, `trusted`) VALUES
(1, 1, 'dqsdq', 'qsdsq', '2019-08-02 20:34:39', NULL, NULL),
(2, 1, 'ju', 'f', '2019-08-02 20:34:51', NULL, NULL),
(3, 1, 'ju', 'f', '2019-08-02 20:35:26', NULL, NULL),
(4, 1, 'ju', 'f', '2019-08-02 20:37:16', NULL, NULL),
(5, 1, 'monSupakoolPseudo', 'et mon message', '2019-08-02 20:37:30', NULL, NULL),
(6, 1, 'monSupakoolPseudo', 'et mon message', '2019-08-02 20:39:35', NULL, NULL),
(7, 1, 'monSupakoolPseudo', 'et mon message', '2019-08-02 20:39:38', NULL, NULL),
(8, 1, 'dqsdq', 'qsdsq', '2019-08-02 20:39:44', NULL, NULL),
(9, 2, 'Dodge', 'Im totally agree with you !', '2019-08-03 10:56:35', 1, NULL),
(10, 2, 'antiDodge', '... im not!', '2019-08-03 10:57:04', NULL, NULL),
(11, 2, 'qsd', 'qsd', '2019-08-09 18:48:46', 1, NULL),
(12, 2, 'member', 'nouveau commentaire\r\n', '2019-08-16 12:15:21', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'jean', '$2y$10$K/izo7Sq8hPGfk2SXbhVAuCdw2rTioPPkcCruNRYPNH74ym2GnXHS');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
