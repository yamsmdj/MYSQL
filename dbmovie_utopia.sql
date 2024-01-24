-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 22 jan. 2024 à 14:19
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbmovie_utopia`
--

-- --------------------------------------------------------

--
-- Structure de la table `director`
--

DROP TABLE IF EXISTS `director`;
CREATE TABLE IF NOT EXISTS `director` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(110) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `director`
--

INSERT INTO `director` (`id`, `name`) VALUES
(1, 'FRANK Darabont'),
(2, 'Francis Ford'),
(3, 'Christopher Nolan'),
(4, 'Sidney Lumet'),
(5, 'Steven Spielberg'),
(6, 'Peter Jackson'),
(7, 'Quentin Tarentino'),
(8, 'Sergio Leone'),
(9, 'Robert Zenneckis'),
(10, 'Olivier Nakache'),
(11, 'Jonathan Demme'),
(12, 'Abdellatif Keniche');

-- --------------------------------------------------------

--
-- Structure de la table `distribution_company`
--

DROP TABLE IF EXISTS `distribution_company`;
CREATE TABLE IF NOT EXISTS `distribution_company` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(110) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `distribution_company`
--

INSERT INTO `distribution_company` (`id`, `name`) VALUES
(1, 'Columbia Pictures'),
(2, 'Gaumont Film Company'),
(3, 'Miramax Films'),
(4, 'New Line Cinema'),
(5, 'Orion Pictures'),
(6, 'Paramount Pictures'),
(7, 'The Weinstein Company'),
(8, 'United Artists'),
(9, 'Universal Pictures'),
(10, 'Warner Bros'),
(11, 'Wild Bunch');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(110) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id`, `name`) VALUES
(1, 'Drama'),
(2, 'Crime'),
(3, 'Action'),
(4, 'Fantasy'),
(5, 'Western'),
(6, 'Comedy'),
(7, 'Thriller'),
(8, 'War'),
(9, 'Romance');

-- --------------------------------------------------------

--
-- Structure de la table `language`
--

DROP TABLE IF EXISTS `language`;
CREATE TABLE IF NOT EXISTS `language` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `language`
--

INSERT INTO `language` (`id`, `name`) VALUES
(1, 'ENGLISH'),
(2, 'Sicilian'),
(3, 'German'),
(4, 'Yiddish'),
(5, 'Italian'),
(6, 'Spanish'),
(7, 'French');

-- --------------------------------------------------------

--
-- Structure de la table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `movie_title` varchar(250) NOT NULL,
  `rating` float NOT NULL,
  `year_released` int NOT NULL,
  `box_office` int NOT NULL,
  `budget` bigint NOT NULL,
  `duration` int NOT NULL,
  `company_id` int DEFAULT NULL,
  `genre_id` int DEFAULT NULL,
  `A SUPPRIMER` int DEFAULT NULL,
  `director_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `company_id` (`company_id`),
  KEY `genre_id` (`genre_id`),
  KEY `director_id` (`A SUPPRIMER`),
  KEY `director_id_2` (`director_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `movies`
--

INSERT INTO `movies` (`id`, `movie_title`, `rating`, `year_released`, `box_office`, `budget`, `duration`, `company_id`, `genre_id`, `A SUPPRIMER`, `director_id`) VALUES
(1, 'The Shawshank Redemption', 9.2, 1994, 73300000, 25000000, 142, NULL, NULL, NULL, NULL),
(2, 'Intouchables', 8.5, 2011, 426600000, 10800000, 112, NULL, NULL, NULL, NULL),
(3, 'Pulp Fiction', 8.8, 1994, 213900000, 8500000, 154, NULL, NULL, NULL, NULL),
(4, 'The Lord of the Rings: The Return of the King', 8.9, 2003, 1146000000, 94000000, 201, NULL, NULL, NULL, NULL),
(5, 'The Lord of the Rings: The Fellowship of the Ring', 8.8, 2001, 898200000, 93000000, 178, NULL, NULL, NULL, NULL),
(6, '12 Angry Men', 9, 1957, 2000000, 340000, 96, NULL, NULL, NULL, NULL),
(7, 'The Silence of the Lambs', 8.6, 1991, 272700000, 19000000, 118, NULL, NULL, NULL, NULL),
(8, 'The Godfather', 9.2, 1972, 0, 7200000, 175, NULL, NULL, NULL, NULL),
(9, 'The Godfather Part II', 9, 1974, 93000000, 13000000, 202, NULL, NULL, NULL, NULL),
(10, 'Inglourious Bastards', 8.4, 2009, 321500000, 70000000, 153, NULL, NULL, NULL, NULL),
(11, 'The Good, the Bad and the Ugly', 8.8, 1966, 38900000, 1200000, 161, NULL, NULL, NULL, NULL),
(12, 'Schindler\'s List', 8.9, 1993, 322200000, 22000000, 195, NULL, NULL, NULL, NULL),
(13, 'Forrest Gump', 8.7, 1994, 677400000, 55000000, 142, NULL, NULL, NULL, NULL),
(14, 'The Dark Knight', 9, 2008, 1006000000, 185000000, 152, NULL, NULL, NULL, NULL),
(15, 'La Vie d\'Adèle', 7.7, 2013, 19000000, 4000000, 180, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `movie_language`
--

DROP TABLE IF EXISTS `movie_language`;
CREATE TABLE IF NOT EXISTS `movie_language` (
  `movie_id` int NOT NULL,
  `language_id` int NOT NULL,
  KEY `language_id` (`language_id`),
  KEY `movie_id` (`movie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `distribution_company` (`id`),
  ADD CONSTRAINT `movies_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`),
  ADD CONSTRAINT `movies_ibfk_3` FOREIGN KEY (`A SUPPRIMER`) REFERENCES `distribution_company` (`id`),
  ADD CONSTRAINT `movies_ibfk_4` FOREIGN KEY (`director_id`) REFERENCES `director` (`id`);

--
-- Contraintes pour la table `movie_language`
--
ALTER TABLE `movie_language`
  ADD CONSTRAINT `movie_language_ibfk_1` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`),
  ADD CONSTRAINT `movie_language_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
