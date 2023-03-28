-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 28 mars 2023 à 20:07
-- Version du serveur : 8.0.31
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cap`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `categorie_id` int NOT NULL AUTO_INCREMENT,
  `categorie_nom` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`categorie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`categorie_id`, `categorie_nom`) VALUES
(9, 'Agents des finances publiquess');

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

DROP TABLE IF EXISTS `classe`;
CREATE TABLE IF NOT EXISTS `classe` (
  `classe_id` int NOT NULL AUTO_INCREMENT,
  `classe_nom` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`classe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`classe_id`, `classe_nom`) VALUES
(10, 'Mathematiques'),
(11, 'Philisophie'),
(12, 'Ingenerie');

-- --------------------------------------------------------

--
-- Structure de la table `mode`
--

DROP TABLE IF EXISTS `mode`;
CREATE TABLE IF NOT EXISTS `mode` (
  `mode_id` int NOT NULL AUTO_INCREMENT,
  `mode_nom` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`mode_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `mode`
--

INSERT INTO `mode` (`mode_id`, `mode_nom`) VALUES
(4, 'Revision'),
(3, 'Entrainement'),
(5, 'Annales');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `users_id` int NOT NULL AUTO_INCREMENT,
  `users_pseudo` text COLLATE utf8mb4_general_ci NOT NULL,
  `users_password` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`users_id`, `users_pseudo`, `users_password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
