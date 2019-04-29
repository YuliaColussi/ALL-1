-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 23 avr. 2019 à 15:46
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `immobilier`
--

-- --------------------------------------------------------

--
-- Structure de la table `logement`
--

CREATE TABLE `logement` (
  `id_logement` int(3) NOT NULL,
  `titre` varchar(30) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `cp` int(5) NOT NULL,
  `surface` int(10) NOT NULL,
  `prix` int(100) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `type` enum('location','vente') NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `logement`
--

INSERT INTO `logement` (`id_logement`, `titre`, `adresse`, `ville`, `cp`, `surface`, `prix`, `photo`, `type`, `description`) VALUES
(1, 'shemise blue', '23 rue de Choisy', 'Vitry-sur-Seine', 94400, 2222, 70, '', 'location', 'juste blanche'),
(2, 'shemise blue', 'fhfch', 'Vitry-sur-Seine', 94400, 2222, 65, '', 'vente', 'ertthjufjfjtfj'),
(3, 'tfuiyi', 'ryrturftu', 'tyiyi', 0, 0, 0, '', 'vente', 'yiyi'),
(4, 'meow', 'meow', 'meow', 0, 0, 0, '', 'location', 'meow'),
(5, 'meow', 'meow', 'meow', 0, 0, 0, '', 'location', 'meow'),
(6, 'puf', 'puf', 'puf', 0, 0, 555, '', 'location', 'puf'),
(7, 'shemise blue', '23 rue de Choisy', 'Vitry-sur-Seine', 94400, 0, 65, '', 'vente', 'gfkghk'),
(8, 'kljk', 'hgkgh', 'hj', 11, 0, 0, '', 'location', 'ghkj'),
(9, 'kljk', 'hgkgh', 'hj', 11, 0, 0, '', 'location', 'ghkj'),
(10, 'jhk', 'fhfch', 'Vitry-sur-Seine', 22, 0, 65, '', 'location', 'fghgvk,hjkl:l'),
(11, 'jkhjkjhk', 'fhfgh', 'jkhjk', 11, 0, 0, '', 'location', 'hgjkh'),
(12, 'oip', 'iopiop', 'hk', 22, 0, 0, '', 'location', ''),
(13, 'sdgtsg', 'dfsgsdfg', 'ghkghj', 55, 0, 0, '', 'location', 'jeans'),
(14, 'gyjf', 'fgjfgj', 'gfj', 0, 0, 0, '', '', ''),
(15, 'dfg', 'dfh', 'fh', 0, 0, 0, '', 'location', 'dfh'),
(16, 'shemise blue', 'fhfch', 'Vitry-sur-Seine', 94400, 0, 55, '', 'location', 'sdf');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `logement`
--
ALTER TABLE `logement`
  ADD PRIMARY KEY (`id_logement`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `logement`
--
ALTER TABLE `logement`
  MODIFY `id_logement` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
