-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 19 fév. 2021 à 19:52
-- Version du serveur :  10.3.15-MariaDB
-- Version de PHP :  7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `plateforme_forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `ID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`ID`, `username`, `email`, `password`) VALUES
(8, 'Alino', 'alino@gmail.com', '$2y$10$FfnzQ7nX1GWlBhmiKGHsWO6h8txC5seLnWJmowqYbfCnakOMLBWA.');

-- --------------------------------------------------------

--
-- Structure de la table `poster`
--

CREATE TABLE `poster` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `sous_categorie` varchar(100) NOT NULL,
  `sujet` text NOT NULL,
  `question` text NOT NULL,
  `date_a` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `poster`
--

INSERT INTO `poster` (`ID`, `username`, `categorie`, `sous_categorie`, `sujet`, `question`, `date_a`) VALUES
(3, 'oui', 'js', 'jq', 'c\'es koi', 'j me rapelle pas', '2021-02-18 12:08:04'),
(4, 'Alain', 'php', 'poo', 'class', 'qui peut m\'expliquer la notion d\'heritage', '2021-02-19 09:40:03');

-- --------------------------------------------------------

--
-- Structure de la table `poste_reponse`
--

CREATE TABLE `poste_reponse` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `reponses` text NOT NULL,
  `date_a` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `poste_reponse`
--

INSERT INTO `poste_reponse` (`id`, `username`, `reponses`, `date_a`) VALUES
(1, 'wiz', 'yeahh i am boss', '2021-02-18 19:16:22'),
(2, 'oui', 'j\'ai oubliÃ©', '2021-02-18 19:16:22'),
(3, 'Alain', 'fait revoir tes name', '2021-02-19 09:37:24'),
(4, '&quot;reoifdsmhlkc:;', 'pmÃ©uiorelz:fn;d,c', '2021-02-19 10:28:39'),
(5, '\'&quot;orjeklfd,sc;x', '&quot;\'iorklends,;cx', '2021-02-19 18:15:09');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `poster`
--
ALTER TABLE `poster`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `poste_reponse`
--
ALTER TABLE `poste_reponse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `poster`
--
ALTER TABLE `poster`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `poste_reponse`
--
ALTER TABLE `poste_reponse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
