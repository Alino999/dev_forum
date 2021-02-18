-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 16 fév. 2021 à 19:24
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `plateforme_forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `Inscription`
--

CREATE TABLE `Inscription` (
  `ID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Inscription`
--

INSERT INTO `Inscription` (`ID`, `username`, `email`, `password`) VALUES
(1, 'hyjiu', 'nfhn@gmail.com', '$2y$10$AqBv/ZMfC91pFUkC1FdBX.bZJd20emX36TCaJ2djVramb1.FA./Nq'),
(2, 'Alino', 'alainguigma99@gmail.com', '$2y$10$dN.wlWiMDT6HV5bnDhntfO5ddKdYCgO5H/JqJQ7I6gCzDfW6I.xUe'),
(3, 'rebecca', 'rebe@gmail.com', '$2y$10$31pvaa7ZxP.AHTeykcDqM.lwgv5b7yoeOzYUGmUSN0NAWF4Xt9WrS'),
(4, 'Alain', 'alain@gmail.com', '$2y$10$jqCA/jGDUk87kdt9SaczDuWLqaklZ7AgPm.F48z7v0ZiLWgQrdfoW'),
(5, 'Alino', 'tfghjg@trfghtf.com', '$2y$10$5nTaUc6mzuUHVerEGYfAVu.OHG5EWckr1vh.3tosLZXUdLxVobkTm'),
(6, 'ali', 'ali@gmail.com', '$2y$10$PXGvdEbE.0VUerrumgw86.J/4ff/yye8pk3FU1zkBmgvanzo2.Bzy');

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
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Inscription`
--
ALTER TABLE `Inscription`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `poster`
--
ALTER TABLE `poster`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Inscription`
--
ALTER TABLE `Inscription`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `poster`
--
ALTER TABLE `poster`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
