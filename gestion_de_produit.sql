-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 11 mai 2023 à 05:28
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `g_produit`
--

-- --------------------------------------------------------

--
-- Structure de la table `gestion_de_produit`
--

DROP TABLE IF EXISTS `gestion_de_produit`;
CREATE TABLE IF NOT EXISTS `gestion_de_produit` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(20) NOT NULL,
  `prix` int NOT NULL,
  `Description` text NOT NULL,
  `Numero_identification` varchar(20) NOT NULL,
  `Date_expiration` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `gestion_de_produit`
--

INSERT INTO `gestion_de_produit` (`id`, `Nom`, `prix`, `Description`, `Numero_identification`, `Date_expiration`) VALUES
(1, 'Aspirine', 1720, 'Médicament pour la douleur et la fièvre', 'ASPR-1234', '2023-04-03'),
(2, 'Seringue', 15, 'Dispositif pour injection de médicaments', 'SERI-5678', '2023-04-13'),
(3, 'Thermomètre', 25, 'Instrument pour la mesure de la température', 'THER-9012', '2023-04-30'),
(7, 'D?sinfectant mains', 1400, 'Produit pour nettoyer les mains', 'DESI-2468', '2023-05-11'),
(6, 'Masque facial', 14250, '?quipement de protection individuelle (EPI)', 'MASK-9876', '2024-05-18'),
(8, 'Oxym?tre de pouls', 4780, 'Dispositif m?dical pour mesurer la saturation en oxyg?ne du sang', 'OXYM-1357', '2023-05-26');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
