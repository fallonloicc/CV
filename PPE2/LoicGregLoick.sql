-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 05 oct. 2018 à 09:09
-- Version du serveur :  10.1.34-MariaDB
-- Version de PHP :  7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `loicgregloick`
--

-- --------------------------------------------------------

--
-- Structure de la table `bornes`
--

CREATE TABLE `bornes` (
  `idBornes` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresseMac` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresseIp` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `bornes_commandes`
--

CREATE TABLE `bornes_commandes` (
  `idBornes` int(11) NOT NULL,
  `idCommande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `borne_photo`
--

CREATE TABLE `borne_photo` (
  `idBornes` int(11) NOT NULL,
  `idPhotos` int(11) NOT NULL,
  `idCommande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `idClient` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cp` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `siret` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwd` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `idCommande` int(11) NOT NULL,
  `dateCommande` date NOT NULL,
  `debutDate` date NOT NULL,
  `finDate` date NOT NULL,
  `payement` float NOT NULL,
  `codeEvent` int(11) DEFAULT NULL,
  `idEvenement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commande_client`
--

CREATE TABLE `commande_client` (
  `idClient` int(11) NOT NULL,
  `idCommande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `consommables`
--

CREATE TABLE `consommables` (
  `idConsosommables` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `consommable_commande`
--

CREATE TABLE `consommable_commande` (
  `idCommande` int(11) NOT NULL,
  `idConsommables` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `idEvenement` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

CREATE TABLE `photos` (
  `idPhotos` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chemin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `selection` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bornes`
--
ALTER TABLE `bornes`
  ADD PRIMARY KEY (`idBornes`);

--
-- Index pour la table `bornes_commandes`
--
ALTER TABLE `bornes_commandes`
  ADD KEY `idCommande` (`idCommande`),
  ADD KEY `idBornes` (`idBornes`);

--
-- Index pour la table `borne_photo`
--
ALTER TABLE `borne_photo`
  ADD KEY `idBornes` (`idBornes`),
  ADD KEY `idPhotos` (`idPhotos`),
  ADD KEY `idCommande` (`idCommande`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`idClient`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `siret` (`siret`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idCommande`),
  ADD KEY `idEvenement` (`idEvenement`);

--
-- Index pour la table `commande_client`
--
ALTER TABLE `commande_client`
  ADD KEY `idCommande` (`idCommande`),
  ADD KEY `idClient` (`idClient`);

--
-- Index pour la table `consommables`
--
ALTER TABLE `consommables`
  ADD PRIMARY KEY (`idConsosommables`);

--
-- Index pour la table `consommable_commande`
--
ALTER TABLE `consommable_commande`
  ADD PRIMARY KEY (`idCommande`),
  ADD KEY `idConsommables` (`idConsommables`),
  ADD KEY `idCommande` (`idCommande`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`idEvenement`);

--
-- Index pour la table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`idPhotos`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bornes`
--
ALTER TABLE `bornes`
  MODIFY `idBornes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `idCommande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `consommables`
--
ALTER TABLE `consommables`
  MODIFY `idConsosommables` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `idEvenement` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `photos`
--
ALTER TABLE `photos`
  MODIFY `idPhotos` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bornes_commandes`
--
ALTER TABLE `bornes_commandes`
  ADD CONSTRAINT `bornes_commandes_ibfk_2` FOREIGN KEY (`idCommande`) REFERENCES `commande` (`idCommande`),
  ADD CONSTRAINT `bornes_commandes_ibfk_3` FOREIGN KEY (`idBornes`) REFERENCES `bornes` (`idBornes`);

--
-- Contraintes pour la table `borne_photo`
--
ALTER TABLE `borne_photo`
  ADD CONSTRAINT `borne_photo_ibfk_1` FOREIGN KEY (`idBornes`) REFERENCES `bornes` (`idBornes`),
  ADD CONSTRAINT `borne_photo_ibfk_2` FOREIGN KEY (`idPhotos`) REFERENCES `photos` (`idPhotos`),
  ADD CONSTRAINT `borne_photo_ibfk_3` FOREIGN KEY (`idCommande`) REFERENCES `commande` (`idCommande`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`idEvenement`) REFERENCES `evenement` (`idEvenement`);

--
-- Contraintes pour la table `commande_client`
--
ALTER TABLE `commande_client`
  ADD CONSTRAINT `commande_client_ibfk_1` FOREIGN KEY (`idClient`) REFERENCES `clients` (`idClient`),
  ADD CONSTRAINT `commande_client_ibfk_2` FOREIGN KEY (`idCommande`) REFERENCES `commande` (`idCommande`);

--
-- Contraintes pour la table `consommable_commande`
--
ALTER TABLE `consommable_commande`
  ADD CONSTRAINT `consommable_commande_ibfk_1` FOREIGN KEY (`idConsommables`) REFERENCES `consommables` (`idConsosommables`),
  ADD CONSTRAINT `consommable_commande_ibfk_2` FOREIGN KEY (`idCommande`) REFERENCES `commande` (`idCommande`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
