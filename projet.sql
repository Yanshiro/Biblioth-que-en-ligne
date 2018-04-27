-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 09 Avril 2018 à 14:31
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `emprunt`
--

CREATE TABLE `emprunt` (
  `Isbn` int(11) NOT NULL,
  `numE` int(11) NOT NULL,
  `date_emprunt` varchar(10) NOT NULL,
  `date_retour` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE `livre` (
  `Isbn` int(11) NOT NULL,
  `Titre` varchar(25) NOT NULL,
  `Auteur` varchar(25) NOT NULL,
  `Editeur` varchar(25) DEFAULT NULL,
  `Annee` int(4) DEFAULT NULL,
  `Photo` varchar(100) DEFAULT NULL,
  `Statut` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `livre`
--

INSERT INTO `livre` (`Isbn`, `Titre`, `Auteur`, `Editeur`, `Annee`, `Photo`, `Statut`) VALUES
(1, 'Aristochats', 'Walt Disney ', 'Hachette edition', 1987, 'aristochats.jpg', 'disponible'),
(2, 'Bambi', 'Walt Disney ', 'Walt Disney', 1954, 'bambi.jpg', 'disponible'),
(3, 'La belle et le Clochard', 'Walt Disney ', 'Walt Disney', 1965, 'belle.jpg', 'disponible'),
(4, 'Le livre de la jungle ', 'Walt Disney ', 'Walt Disney', 1990, 'jungle.jpg', 'disponible'),
(5, 'Koh-Lanta ', 'Inconnu', 'Splash', 2008, 'lanta.jpg', 'disponible'),
(6, 'Lilo et Stitch', 'Walt Disney ', 'Walt Disney', 1999, 'lilo.jpg', 'disponible'),
(7, 'Le roi lion', 'Walt Disney ', 'Walt Disney', 1992, 'lion.jpg', 'disponible'),
(8, 'Mulan', 'Walt Disney ', 'Hachette edition', 1997, 'mulan.jpg', 'disponible'),
(9, 'Rox et Rouky', 'Walt Disney ', 'Hachette edition', 1982, 'rox.jpg', 'disponible'),
(10, 'Winnie L ourson', 'Walt Disney ', 'Hachette edition', 1961, 'winnie.jpg', 'disponible');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `numE` int(11) NOT NULL,
  `mot_passe` varchar(25) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `adresse` varchar(25) DEFAULT NULL,
  `ddn` date DEFAULT NULL,
  `telephone` int(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `Photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`numE`, `mot_passe`, `nom`, `prenom`, `adresse`, `ddn`, `telephone`, `email`, `Photo`) VALUES
(123, 'test', 'rjao', 'jria', 'kz,,zi', '2121-01-09', 9231, 'irz', ''),
(2341234, 'test', 'ik', 'yannis3', 'jeaizea@gmail.com', '1212-09-02', 19291921, 'jeiaea@gmail.com', ''),
(3899238, 'aeaze', 'hjiea', 'huazh', 'jizje@gmail.com', '1993-01-03', 143880967, 'yannis.ikni@gmail.com', ''),
(12341231, 'TEST', 'eoazkeoa', 'yannis3', 'jriara@gmail.com', '1121-02-09', 10313123, 'kznfaz@gmail.com', ''),
(12341232, 'test', 'eoazkeoa', 'yannis3', 'jriara@gmail.com', '1121-02-09', 10313123, 'kznfaz@gmail.com', ''),
(36002643, 'test', 'IKNI', 'Yannis', '13 rue de  la paix', '1997-01-03', 138439234, 'yannis.ikni@gmail.com', ''),
(36002644, 'test', 'IKNI', 'Yannis2', '12 rue de la paix', '1997-01-03', 612323214, 'yannis.bibliotheque@gmail.com', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `emprunt`
--
ALTER TABLE `emprunt`
  ADD PRIMARY KEY (`Isbn`,`numE`),
  ADD KEY `numE` (`numE`);

--
-- Index pour la table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`Isbn`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`numE`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `livre`
--
ALTER TABLE `livre`
  MODIFY `Isbn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8237122;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `numE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36002645;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `emprunt`
--
ALTER TABLE `emprunt`
  ADD CONSTRAINT `emprunt_ibfk_1` FOREIGN KEY (`Isbn`) REFERENCES `livre` (`Isbn`),
  ADD CONSTRAINT `emprunt_ibfk_2` FOREIGN KEY (`numE`) REFERENCES `membre` (`numE`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
