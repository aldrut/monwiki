-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : mer. 22 sep. 2021 à 09:26
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `td_symfony_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_date` datetime DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL,
  `themes_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_23A0E6667B3B43D` (`users_id`),
  KEY `IDX_23A0E6694F4A9D2` (`themes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commentary`
--

DROP TABLE IF EXISTS `commentary`;
CREATE TABLE IF NOT EXISTS `commentary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_date` datetime DEFAULT NULL,
  `img_src` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1CAC12CA7294869C` (`article_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210920143030', '2021-09-20 14:30:53', 162),
('DoctrineMigrations\\Version20210921093235', '2021-09-21 09:32:57', 272),
('DoctrineMigrations\\Version20210921134808', '2021-09-21 13:48:16', 95),
('DoctrineMigrations\\Version20210921135428', '2021-09-21 13:54:33', 367),
('DoctrineMigrations\\Version20210921135739', '2021-09-21 13:57:50', 414),
('DoctrineMigrations\\Version20210922072141', '2021-09-22 07:22:01', 422),
('DoctrineMigrations\\Version20210922090325', '2021-09-22 09:04:03', 157),
('DoctrineMigrations\\Version20210922090727', '2021-09-22 09:07:34', 2146),
('DoctrineMigrations\\Version20210922091553', '2021-09-22 09:16:21', 576),
('DoctrineMigrations\\Version20210922092402', '2021-09-22 09:24:10', 6026);

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_635405967B3B43D` (`users_id`),
  KEY `IDX_63540597294869C` (`article_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `interest`
--

DROP TABLE IF EXISTS `interest`;
CREATE TABLE IF NOT EXISTS `interest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `interest`
--

INSERT INTO `interest` (`id`, `name`, `description`) VALUES
(1, 'php', 'développement'),
(2, 'mysql', 'base de donnée');

-- --------------------------------------------------------

--
-- Structure de la table `themes`
--

DROP TABLE IF EXISTS `themes`;
CREATE TABLE IF NOT EXISTS `themes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nbresponse` int(11) DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `newsletter` tinyint(1) DEFAULT NULL,
  `activated` tinyint(1) DEFAULT NULL,
  `subdate` datetime DEFAULT NULL,
  `imgsrc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nbquestion` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `firstname`, `mail`, `pwd`, `phone`, `nbresponse`, `role`, `newsletter`, `activated`, `subdate`, `imgsrc`, `nbquestion`) VALUES
(67, 'DRUT', 'Alexandre', 'adrut@free.fr', NULL, NULL, 1, 'admin', 1, 1, '2021-09-21 12:55:00', '/ttt', 1),
(68, 'DRUT', 'Alexandre', 'adrut@free.fr', NULL, NULL, 1, 'admin', 1, 1, '2021-09-21 12:55:00', '/ttt', 1),
(69, 'DRUT', 'Alexandre', 'adrut@free.fr', NULL, NULL, 1, 'admin', 1, 1, '2021-09-21 12:55:00', '/ttt', 1),
(70, 'DRUT', 'Alexandre', 'adrut@free.fr', NULL, NULL, 1, 'admin', 1, 1, '2021-09-21 12:55:00', '/ttt', 1),
(71, 'DRUT', 'Alexandre', 'adrut@free.fr', NULL, NULL, 1, 'admin', 1, 1, '2021-09-21 12:55:00', '/ttt', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users_interest`
--

DROP TABLE IF EXISTS `users_interest`;
CREATE TABLE IF NOT EXISTS `users_interest` (
  `users_id` int(11) NOT NULL,
  `interest_id` int(11) NOT NULL,
  PRIMARY KEY (`users_id`,`interest_id`),
  KEY `IDX_177F31BD67B3B43D` (`users_id`),
  KEY `IDX_177F31BD5A95FF89` (`interest_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_23A0E6667B3B43D` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_23A0E6694F4A9D2` FOREIGN KEY (`themes_id`) REFERENCES `themes` (`id`);

--
-- Contraintes pour la table `commentary`
--
ALTER TABLE `commentary`
  ADD CONSTRAINT `FK_1CAC12CA7294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`);

--
-- Contraintes pour la table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `FK_635405967B3B43D` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_63540597294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`);

--
-- Contraintes pour la table `users_interest`
--
ALTER TABLE `users_interest`
  ADD CONSTRAINT `FK_177F31BD5A95FF89` FOREIGN KEY (`interest_id`) REFERENCES `interest` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_177F31BD67B3B43D` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
