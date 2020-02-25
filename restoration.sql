-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 25 fév. 2020 à 09:45
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `restoration`
--

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `tel` varchar(40) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `mdp` varchar(40) NOT NULL,
  `role` varchar(40) NOT NULL,
  `identifiant` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`id`, `nom`, `prenom`, `tel`, `mail`, `mdp`, `role`, `identifiant`) VALUES
(1, 'test', 'test', '0123456789', 'a@a.fr', '098f6bcd4621d373cade4e832627b4f6', 'admin', 'test'),
(6, 'a', 'a', '0687654321', 'a@a.a', '0cc175b9c0f1b6a831c399e269772661', 'client', 'az'),
(7, 'b', 'b', '0111111111', 'b@b.b', '92eb5ffee6ae2fec3ad71c777531578f', 'client', 'b');

-- --------------------------------------------------------

--
-- Structure de la table `heure`
--

DROP TABLE IF EXISTS `heure`;
CREATE TABLE IF NOT EXISTS `heure` (
  `heures` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `heure`
--

INSERT INTO `heure` (`heures`) VALUES
('10:00'),
('10:30'),
('11:00'),
('11:30'),
('12:00'),
('12:30'),
('13:00'),
('13:30'),
('14:00'),
('14:30'),
('15:00'),
('15:30'),
('16:00'),
('16:30'),
('17:00'),
('17:30'),
('18:00'),
('18:30'),
('19:00'),
('19:30'),
('20:00');

-- --------------------------------------------------------

--
-- Structure de la table `place`
--

DROP TABLE IF EXISTS `place`;
CREATE TABLE IF NOT EXISTS `place` (
  `places` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `place`
--

INSERT INTO `place` (`places`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `nom` varchar(40) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `jour` varchar(10) NOT NULL,
  `heure` varchar(5) NOT NULL,
  `nb_pers` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`nom`, `tel`, `mail`, `jour`, `heure`, `nb_pers`) VALUES
('Goncalves', '0611223344', 'a@a.a', '30/01/2020', '19:00', 4),
('Aggoun', '0987654321', 'a@a', '28/01/2020', '10:00', 10),
('Guo', '0612346587', 'g@g', '07/02/2020', '20:00', 6),
('Serva', '0918237465', 's@s', '31/01/2020', '12:00', 10),
('Yallap', '0918237465', 'y@y', '23/04/2020', '13:00', 8),
('Carmone', '0192837465', 'c@c', '13/05/2020', '12:00', 2),
('az', '0611223344', 'az', '28/01/2020', '10:00', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
