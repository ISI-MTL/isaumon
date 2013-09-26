-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 26 Septembre 2013 à 15:22
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

-- --------------------------------------------------------

--
-- Structure de la table `recettes`
--

CREATE TABLE IF NOT EXISTS `recettes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `titre` varchar(555) COLLATE utf8_bin NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=43 ;

--
-- Contenu de la table `recettes`
--

INSERT INTO `recettes` (`id`, `titre`, `commentaire`, `ingredients`, `portion`, `tpspreparation`, `tpscuisson`, `mdcuisson`, `preparation`, `evaluation`, `date`, `img`) VALUES
(36, 'Quiche Saumon-fromage de chèvre', 'Quiche Saumon-fromage de chèvre', '- 200 g de de saumon sans peau;\r\n- 15 0 g de fromage de chèvre frais;\r\n- 1 pâte brisée;\r\n- 1 tasse de cerfeuil;\r\n- 3 oeufs;\r\n- 250 ml  de crème fraîche;\r\n- sel, poivre;\r\n', 5, 15, 35, 'Four', 'Étaler la pâte brisée dans un moule à tarte et la piquer à la fourchette.\r\nFaire couper le saumon en cubes et les répartir sur la pâte.\r\nBattre les œufs, puis mélanger avec la crème fraîche.\r\nIncorporer le fromage de chèvre frais et écraser à la fourchette afin d''obtenir un mélange homogène.\r\nVerser le mélange sur les le saumon puis saler et poivrer au goût. \r\nParsemer la quiche de cerfeuil, ajouter une couche de fromage et mettre au four 30 à 35 min.\r\n', 8, '2013-09-26 14:54:49', 'filets-de-saumon2.jpg'),
(37, 'Saumon au whisky', 'Une assiètte au saumon marinée au whisky avec un soupson de coriandre fraîche.\r\nCette combinaison de saveurs va forcement activer vos papilles gustative. Un repas très simple. Préparer la marinade 24hrs d''avance.', '1 filet de saumon de 225 g (1/2 livre) avec la peau, très frais;\r\n30 ml ( 2 c. à soupe) de whisky;\r\nsel de mer;\r\nsucre;\r\npoivre frais moulu;\r\n60 ml (1/4 tasse) environ d''herbes fraîches ( mélisse, coriandre ou aneth);', 4, 20, 12, 'Four', 'Déposer le filet de saumon, côté peau dans l''assiette;\nArroser de whisky;\nSaler le saumon un peu plus qu''à la normale;\nSaupoudrer la même quantité de sucre;\nPoivrer et répartir les herbes sur le poisson;\nPresser les herbes et retourner le poisson;\nCouvrir d''une pellicule de plastique. Laisser mariner 24 heures au réfrigérateur;', 8, '2013-09-26 14:59:59', 'recette_saumon_whisky.jpg'),
(38, 'Saumon grillés au piment chili, aux poivrons et aux courgettes', 'Un mélange onctueux de légumes frais servie à côté d''un filet de saumon grillé à la perfection.', '2 c. à tab (30 ml) de jus de lime;\r\n1 c. à tab (15 ml) d''assaisonnement au chili;\r\n1 c. à tab (15 ml) de piment chili (de type jalapeño) frais, haché finement;\r\n1 c. à tab (15 ml) d''huile végétale;\r\n1/2 c. à thé (2 ml) de sel;\r\n4 filets de saumon avec la peau (environ 6 oz/175 g chacun);\r\n1 poivron rouge coupé en quatre;\r\n1 poivron jaune coupé en quatre;\r\n2 courgettes coupées en tranches de 1/2 po (1 cm) d''épaisseur;\r\n1 c. à tab (15 ml) d''huile d''olive;\r\n1 c. à thé (5 ml) de mélange de fines herbes séchées à l''italienne;\r\n1/4 c. à thé (1 ml) de poivre noir du moulin;', 4, 20, 10, 'Four', 'Mélanger le jus de lime, l''assaisonnement au chili, le piment chili, l''huile végétale et 1/4 de cuillerée à thé (1 ml) du sel;\r\nÉtendre la préparation au piment chili sur le dessus des filets de saumon;\r\nLaisser reposer pendant 10 minutes à la température ambiante;\r\nEntre-temps, mettre les poivrons rouge et jaune et les courgettes dans un bol;\r\nAjouter l''huile d''olive, le mélange de fines herbes séchées, le poivre et le reste du sel et mélanger pour bien enrober les légumes;\r\nRégler le barbecue au gaz à puissance moyenne-élevée;\r\nMettre les légumes et les filets de saumon, la peau dessous, sur la grille huilée du barbecue.\r\nFermer le couvercle et cuire pendant environ 10 minutes ou jusqu''à ce que la chair du saumon se défasse facilement à la fourchette et que les légumes soient tendres mais encore croquants;\r\n\r\nEn accompagnement: Triangles de pain pita grillé;', 9, '2013-09-26 15:05:05', 'saumon_grille_avec_legume.jpg'),
(39, 'Filets de saumon aux fines herbes', 'Un fabuleux mélange de fines herbes qui enrobe nos filets de saumons. \r\nUn mets savoureux et rapide à préparer qui vous mettra l''eau à la bouche.', '1 c. à thé (5 ml) de basilic séché;\r\n1 c. à thé de thym (5 ml) séché;\r\n1/2 c. à thé (2 ml) de sel;\r\n1/2 c. à thé (2 ml) de poivre noir du moulin;\r\n4 filets de saumon avec la peau (environ 1 1/2 lb/750 g en tout);\r\n2 tomates coupées en deux;\r\n2 c. à thé (10 ml) d''huile végétale quartiers de citron;', 4, 10, 10, 'Poele', 'Dans un petit bol, mélanger le basilic, le thym, le sel et le poivre;\r\nFrotter la moitié du mélange sur les filets de saumon;\r\nParsemer le reste du mélange sur le côté coupé des tomates;\r\n\r\n2. Dans un poêlon, chauffer l''huile à feu moyen-vif;\r\nAjouter les filets de saumon, la peau dessus, et cuire pendant environ 4 minutes;\r\nRetourner le saumon et ajouter les tomates;\r\nCuire pendant environ 6 minutes ou jusqu''à ce que la chair du saumon se défasse facilement à la fourchette (retourner les tomates à la mi-cuisson). Servir avec des quartiers de citron;', 7, '2013-09-26 15:07:57', 'saumon_herbes_citron.jpg'),
(40, 'Bouchées de saumon caramélisé', 'Les multiples saveurs combinées vous combleront de bonheur. Uniquement trois ingrédients sucrée salée et le tour est jouer! Vous avez des délicieuse bouchée caramélise.', '45 ml (3 c. à soupe) de marmelade à l''orange (ou de tartinade à l''orange sans sucre ajouté);\r\n30 ml (2 c. à soupe) de moutarde de Dijon;\r\n30 ml (2 c. à soupe) de miel;\r\nPoivre et sel;\r\n450 g (1 lb) de saumon frais sans la peau;', 4, 10, 10, 'Four', 'Préchauffer le gril du four (à broil). Placer la grille au centre du four;\r\nDans un grand bol, mélanger la marmelade, la moutarde et le miel;\r\nPoivrer généreusement et ajouter une pincée de sel;\r\nCouper le saumon en cubes de 2,5 cm (1 po) de côtés;\r\nAjouter les cubes de saumon à la marinade et mélanger pour bien enrober;\r\nDéposer le saumon sur une plaque de cuisson doublée de papier parchemin et cuire 8 à 10 minutes ou jusqu''à ce que le saumon soit doré et que les extrémités soient caramélisées;\r\nServir sur des vermicelles de riz cuits et accompagner de légumes sautés;', 9, '2013-09-26 15:13:11', 'boucher_de_saumon_caramelise.jpg'),
(41, 'Saumon au thaï', 'Sortez vous baguette pour déguster ce repas typiquement asiatique. Une recette sucrée et épicée signée VH sera vous surprendre.', 'Enduit antiadhésif PAM original;\r\n4 filets de saumon sans peau (d''environ 170 g/6 oz chacun);\r\n125 ml (1/2 tasse) de sauce chili sucrée Thaï VH;\r\n30 ml (2 c. à soupe) de sauce soya VH;\r\n30 ml (2 c. à soupe) de jus d''orange;', 4, 0, 15, 'Four', 'Préchauffer le four à 200 °C (400 °F);\r\nVaporiser un plat de cuisson en verre de 2 l (20 cm/8 po) d''enduit antiadhésif PAMMD. Mettre le saumon dans le plat;\r\nDans un bol, mélanger la sauce chili sucrée Thaï VHMD, la sauce soya VHMD et le jus d''orange; Verser sur le saumon;\r\nCuire dans un four préchauffé sur la grille du centre pendant 10 à 15 minutes ou jusqu''à ce que la chair du saumon se détache facilement à la fourchette;', 9, '2013-09-26 15:15:57', 'saumon_au_thai_sur_riz.jpg'),
(42, 'Doigts de saumon panner', 'Un a côté de pure délice qui a un goût à n''en laisser rêver. Cette recette croustillantes est sure de faire fureur à un souper de groupe.', '1,5 L (6 tasses) de céréales de flocons de maïs de type Corn Flakes, écrasées; \r\n10 ml (2 c. à thé) de paprika ;\r\n5 ml (1 c. à thé) de chacun : coriandre moulue et moutarde en poudre ;\r\n450 g (1 lb) de filet de saumon sans peau coupé en petites lanières d''environ 6 cm x 2 cm ;\r\n125 ml (1/2 tasse) de farine ;\r\n3 oeufs battus ;', 4, 35, 15, 'Four', 'Dans un bol, mélanger les céréales et les épices;\r\nTremper les lanières de saumon dans la farine, les oeufs puis dans la chapelure de céréales. Réserver;\r\nDéposer les doigts de saumon sur la moitié de la plaque libre, à côté des légumes;\r\nPoursuivre la cuisson 15 minutes de plus;', 9, '2013-09-26 15:19:04', 'doigts_de_saumon.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
