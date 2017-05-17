-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 17, 2017 at 11:39 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `architecture`
--

-- --------------------------------------------------------

--
-- Table structure for table `magazine`
--

CREATE TABLE IF NOT EXISTS `magazine` (
  `id` int(11) NOT NULL,
  `number` int(11) DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `magazine`
--

INSERT INTO `magazine` (`id`, `number`, `img`, `pdf`, `region`, `year`) VALUES
(7, 285, 'couv_martinique.jpg', 'yo', 'Martinique', 2017),
(8, 284, 'couv_bretagne.jpg', 'plop', 'Bretagne', 2017),
(9, 283, 'couv_ile_de_france.jpg', 'hugo est un con mé il é cool', 'ile de france', 2017),
(10, 282, 'couv_rhone.jpg', 'gerome > hugo ', 'Rhone', 2016);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `architect` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` int(11) DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `infos` text COLLATE utf8mb4_unicode_ci,
  `partners` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `date`, `architect`, `department`, `city`, `type`, `title`, `description`, `infos`, `partners`, `img`) VALUES
(4, '2009-05-21', 'ABH Architectes', 92, 'Plessis Robinson', 'Tertiaire - Bureau', 'Projet Astrale - Construction d''un ensemble de bureaux au Plessis Robinson (92)', '﻿\r\nSitué au coeur de NOVEOS Parc d’Affaires Paris Sud Ouest, en plein essor.	\r\nL''immeuble tertiaire "Astrale" permet de répondre aussi bien à un mono utilisateur qu’à un grand nombre de locataires.\r\nD’une capacité d''accueil de 1 500 personnes, avec une surface de 25 000 m2 SHON et 56 000m2 SHOB, il intègre 760 places de parkings sur 2 niveaux de sous-sol et un restaurant 1000 couverts.\r\nLe parti d''implantation est de créer un bâtiment urbain périmétrique permettant de dégager un parc végétal de la plus grande dimension possible en son centre.\r\nLe restaurant tout en courbe devient lui même une partie de ce jardin en s''agrémentant d''une terrasse végétalisée.\r\nL''ensemble des bâtiments s''articule autour de ce parc où plateaux, paliers, escaliers, rue intérieure et restaurant ont des vues.\r\n\r\n\r\nDeux halls principaux ponctuent l’édifice en marquant fortement la volumétrie de l’ensemble.\r\nAu Nord une faille entièrement vitrée accompagnée par un voile en béton blanc courbe offre une transparence entre l’avenue et le jardin intérieur.\r\nAu Sud, un totem vitré lumineux visible depuis l’A86 englobe les salles de réunion rouges afin de former un signal identitaire.\r\nL’organisation en plan résulte d’une recherche de confort et de flexibilité des plateaux de bureaux ainsi que d’une optimisation de l’éclairage naturel, y compris pour l’ensemble des circulations verticales et horizontales. \r\nLes systèmes environnementaux développés sont le traitement de toiture végétalisée avec récupération des eaux de pluies, \r\nla mise en place de pompes à chaleur individuelles réversibles raccordées sur une boucle thermodynamique,\r\nun système de gestion technique centralisé.', '', '', '["abh.jpg","abhOne.jpg","abhtwo.jpg","abhthree.jpg"]'),
(5, '2009-05-20', 'ARSENAULT Eric', 58, 'Chinon', 'Enseignement - Lycée', 'Internat du lycée agricole à Château Chinon', 'Le bâtiment est régi par une courbe à double inflexion qui s’avance dans le paysage vers le Morvan avec une tisanerie suspendue dans le vide à son extrémité.\r\nDifférentes loggias ponctuent le bâtiment et offrent depuis l’intérieur autant de vues sur Château Chinon et la campagne environnante. Une logique de traitement de façade est développée en fonction du degré d’exposition aux intempéries : zinc, enduit, bois et verre sont répartis du plus exposé au mieux protégé. \r\nA l’intérieur, les chambres permettent à chaque élève l’appropriation d’un sous-espace distinct.\r\n', NULL, '', '["ARSENAULT.jpg","ARSENAULTone.jpg","ARSENAULTtwo.jpg"]'),
(6, '2009-05-20', 'BIK Architecture', 49, 'Angers', 'Espace de loisir', 'Aménagement du bowling Le colisée à Angers', 'Le bâtiment est régi par une courbe à double inflexion qui s’avance dans le paysage vers le Morvan avec une tisanerie suspendue dans le vide à son extrémité.\r\nDifférentes loggias ponctuent le bâtiment et offrent depuis l’intérieur autant de vues sur Château Chinon et la campagne environnante. Une logique de traitement de façade est développée en fonction du degré d’exposition aux intempéries : zinc, enduit, bois et verre sont répartis du plus exposé au mieux protégé. \r\nA l’intérieur, les chambres permettent à chaque élève l’appropriation d’un sous-espace distinct.', NULL, '', '["bik.jpg","bikone.jpg","biktwo.jpg"]'),
(7, '2009-05-19', 'DUCLOS Architectes Associés', 86, 'Poitiers', 'Tertiaire - Bureau', 'Construction de la délégation régionale du CNFPT à Poitiers', 'Le bâtiment est régi par une courbe à double inflexion qui s’avance dans le paysage vers le Morvan avec une tisanerie suspendue dans le vide à son extrémité.\r\nDifférentes loggias ponctuent le bâtiment et offrent depuis l’intérieur autant de vues sur Château Chinon et la campagne environnante. Une logique de traitement de façade est développée en fonction du degré d’exposition aux intempéries : zinc, enduit, bois et verre sont répartis du plus exposé au mieux protégé. \r\nA l’intérieur, les chambres permettent à chaque élève l’appropriation d’un sous-espace distinct.', NULL, '', '["duclo.jpg","ducloone.jpg","duclotwo.jpg","duclothree.jpg","duclofour.jpg"]'),
(8, '2009-05-18', 'MICHEL Jean-Louis', 30, 'Gard', 'Tertiaire - Bureau', 'Construction du nouveau siège social de la C.A.F. du Gard', 'Le bâtiment est régi par une courbe à double inflexion qui s’avance dans le paysage vers le Morvan avec une tisanerie suspendue dans le vide à son extrémité.\r\nDifférentes loggias ponctuent le bâtiment et offrent depuis l’intérieur autant de vues sur Château Chinon et la campagne environnante. Une logique de traitement de façade est développée en fonction du degré d’exposition aux intempéries : zinc, enduit, bois et verre sont répartis du plus exposé au mieux protégé. \r\nA l’intérieur, les chambres permettent à chaque élève l’appropriation d’un sous-espace distinct.', NULL, '', '["Michel.jpg","Michelone.jpg","Micheltwo.jpg"]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `magazine`
--
ALTER TABLE `magazine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `magazine`
--
ALTER TABLE `magazine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
