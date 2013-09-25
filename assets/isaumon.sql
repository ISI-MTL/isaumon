-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 25 Septembre 2013 à 15:44
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `isaumon`
--
CREATE DATABASE IF NOT EXISTS `isaumon` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `isaumon`;

-- --------------------------------------------------------

--
-- Structure de la table `article_categorie`
--

CREATE TABLE IF NOT EXISTS `article_categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catId` int(11) NOT NULL,
  `artId` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) COLLATE utf8_bin NOT NULL,
  `abbr` varchar(20) COLLATE utf8_bin NOT NULL,
  `type` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `chroniqueurs`
--

CREATE TABLE IF NOT EXISTS `chroniqueurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(100) COLLATE utf8_bin NOT NULL,
  `user` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL,
  `description` varchar(999) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) COLLATE utf8_bin NOT NULL,
  `contenu` text COLLATE utf8_bin NOT NULL,
  `commid` int(10) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `auteur` varchar(50) COLLATE utf8_bin NOT NULL,
  `img` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `recette_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `titre`, `contenu`, `commid`, `date`, `auteur`, `img`, `recette_id`) VALUES
(1, 'Saumon dans nos assiettes', 'Vous avez un faible pour le saumon? Le Guide alimentaire canadien recommande de consommer deux portions de poisson chaque semaine pour bénéficier de ses acides gras oméga-3. Essayez ces recettes saines et savoureuses à base de saumon qui vous plairont à coup sûr.', NULL, '2013-09-18 04:00:00', 'Admin', NULL, NULL),
(2, 'Tarataat', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, '2013-09-23 13:00:03', 'Mathieu', 'bouchees-saumon-roti_a_la_francaise.jpg', NULL),
(3, 'akgbjdjkfs', 'sdkfsdjklfgksdjfgdjkfg\ndfjkgjkdfgkdfgjksdkfsdjklfgksdjfgdjkfgd\nfjkgjkdfgkdfgjksdkfsdjklfgksdjfgdjkfgdf\njkgjkdfgkdfgjksdkfsdjklfgksdjfgdjkfgdfj\nkgjkdfgkdfgjksdkfsdjklfgksdjfgdjkfgdf\njkgjkdfgkdfgjksdkfsdjklfgksdjfgdjkfgdfj\nkgjkdfgkdfgjk', NULL, '2013-09-23 13:13:11', 'math', NULL, NULL),
(4, '', 'malade debile yay', 2, '2013-09-24 16:16:35', 'Mathieu', NULL, NULL),
(5, '', 'super commentaire', 2, '2013-09-24 16:17:05', 'Matata', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `faits`
--

CREATE TABLE IF NOT EXISTS `faits` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) COLLATE utf8_bin NOT NULL,
  `contenu` varchar(555) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Contenu de la table `faits`
--

INSERT INTO `faits` (`id`, `titre`, `contenu`, `date`) VALUES
(1, 'Ratio OMEGA-3', 'Selon le guide alimentaire du Canada,les études scientifique portant sur le rapport.........', '2013-09-18');

-- --------------------------------------------------------

--
-- Structure de la table `recettes`
--

CREATE TABLE IF NOT EXISTS `recettes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) COLLATE utf8_bin NOT NULL,
  `commentaire` varchar(555) COLLATE utf8_bin NOT NULL,
  `ingredients` text COLLATE utf8_bin NOT NULL,
  `portion` int(4) NOT NULL,
  `tpspreparation` int(4) DEFAULT NULL COMMENT 'temps de preparation',
  `tpscuisson` int(4) DEFAULT NULL COMMENT 'temps de cuisson',
  `mdcuisson` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT 'mode cuissom',
  `preparation` text COLLATE utf8_bin,
  `evaluation` float DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `img` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=20 ;

--
-- Contenu de la table `recettes`
--

INSERT INTO `recettes` (`id`, `titre`, `commentaire`, `ingredients`, `portion`, `tpspreparation`, `tpscuisson`, `mdcuisson`, `preparation`, `evaluation`, `date`, `img`) VALUES
(1, 'Mousse d''asperge au saumon fumé', 'Une verrine très fraîche au goût subtil d''asperge et de saumon fumé, un duo gagnant !', '300 g d''asperges blanches en conserve (garder 5 cl de jus pour la recette);\r\n2 oeufs durs;\r\n5 cuillères à soupe de crème allégée à 15 %;\r\n4 tranches de saumon fumé;\r\n3 feuilles de gélatine (3 g);', 4, NULL, 120, NULL, 'Faites tremper les feuilles de gélatine dans un bol d''eau froide.\r\nPortez à ébullition 5 cl du jus des asperges. Essorez la gélatine entre vos mains et faites-la dissoudre dans le jus chauffé, hors du feu. Laissez refroidir.\r\n\r\nMixez ensemble les asperges coupées en tronçons, les œufs écalés et coupés en morceaux, la crème fraîche et le jus d''asperge contenant la gélatine. Vous devez obtenir une crème bien lisse. Versez dans des mini verrines en les remplissant aux deux tiers. Placez au réfrigérateur au moins 3 heures.\r\n\r\nCoupez le saumon fumé en petits dés et répartissez-les sur la mousse d''asperge dans les verrines. Décorez avec un brin d''aneth ou autre aromatique à votre goût.\r\n\r\nServez frais en entrée ou lors de vos apéritifs dînatoires.', 9, '2013-09-16 04:00:00', ''),
(18, 'Quiche Saumon-fromage de ch', 'Quiche Saumon-fromage de ch', '200 g de de saumon sans peau, 15 0 g de fromage de ch', 5, 15, 35, 'Four', '', 8, '2013-09-25 15:38:51', 'saumon_fromage.jpg'),
(19, 'Bagles au saumon fum', 'Bagles au saumon fum', '15 tranches de saumon fum', 1, 5, 0, 'Four', 'Couper les bagels en deux et les faire toaster l', 8, '2013-09-25 15:41:52', 'Bagles_au_saumon.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `recette_categorie`
--

CREATE TABLE IF NOT EXISTS `recette_categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catId` int(11) NOT NULL,
  `recId` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
