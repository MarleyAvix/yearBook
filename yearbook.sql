-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 08 juin 2026 à 14:07
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `yearbook`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudient`
--

CREATE TABLE `etudient` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `filliere_id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etudient`
--

INSERT INTO `etudient` (`id`, `nom`, `prenom`, `photo`, `filliere_id`, `mail`) VALUES
(1, 'Martin', 'Lucas', 'https://placehold.co/600x400?text=Lucas+Martin', 1, 'LucasMartin@gmail.com'),
(2, 'Bernard', 'Emma', 'https://placehold.co/600x400?text=Emma+Bernard', 1, 'EmmaBernard@gmail.com'),
(3, 'Thomas', 'Louis', 'https://placehold.co/600x400?text=Louis+Thomas', 1, 'LouisThomas@gmail.com'),
(4, 'Petit', 'Chloé', 'https://placehold.co/600x400?text=Chloé+Petit', 1, 'ChloéPetit@gmail.com'),
(5, 'Robert', 'Gabriel', 'https://placehold.co/600x400?text=Gabriel+Robert', 1, 'GabrielRobert@gmail.com'),
(6, 'Richard', 'Inès', 'https://placehold.co/600x400?text=Inès+Richard', 1, 'InèsRichard@gmail.com'),
(7, 'Durand', 'Arthur', 'https://placehold.co/600x400?text=Arthur+Durand', 1, 'ArthurDurand@gmail.com'),
(8, 'Dubois', 'Léa', 'https://placehold.co/600x400?text=Léa+Dubois', 1, 'LéaDubois@gmail.com'),
(9, 'Moreau', 'Jules', 'https://placehold.co/600x400?text=Jules+Moreau', 1, 'JulesMoreau@gmail.com'),
(10, 'Laurent', 'Manon', 'https://placehold.co/600x400?text=Manon+Laurent', 1, 'ManonLaurent@gmail.com'),
(11, 'Simon', 'Maël', 'https://placehold.co/600x400?text=Maël+Simon', 1, 'MaëlSimon@gmail.com'),
(12, 'Michel', 'Jade', 'https://placehold.co/600x400?text=Jade+Michel', 1, 'JadeMichel@gmail.com'),
(13, 'Lefebvre', 'Hugo', 'https://placehold.co/600x400?text=Hugo+Lefebvre', 1, 'HugoLefebvre@gmail.com'),
(14, 'Leroy', 'Alice', 'https://placehold.co/600x400?text=Alice+Leroy', 1, 'AliceLeroy@gmail.com'),
(15, 'Roux', 'Nathan', 'https://placehold.co/600x400?text=Nathan+Roux', 1, 'NathanRoux@gmail.com'),
(16, 'David', 'Lina', 'https://placehold.co/600x400?text=Lina+David', 1, 'LinaDavid@gmail.com'),
(17, 'Bertrand', 'Léo', 'https://placehold.co/600x400?text=Léo+Bertrand', 1, 'LéoBertrand@gmail.com'),
(18, 'Morel', 'Camille', 'https://placehold.co/600x400?text=Camille+Morel', 1, 'CamilleMorel@gmail.com'),
(19, 'Fournier', 'Enzo', 'https://placehold.co/600x400?text=Enzo+Fournier', 1, 'EnzoFournier@gmail.com'),
(20, 'Girard', 'Eva', 'https://placehold.co/600x400?text=Eva+Girard', 1, 'EvaGirard@gmail.com'),
(21, 'Bonner', 'Tom', 'https://placehold.co/600x400?text=Tom+Bonner', 2, 'TomBonner@gmail.com'),
(22, 'Lambert', 'Zoé', 'https://placehold.co/600x400?text=Zoé+Lambert', 2, 'ZoéLambert@gmail.com'),
(23, 'Fontaine', 'Raphaël', 'https://placehold.co/600x400?text=Raphaël+Fontaine', 2, 'RaphaëlFontaine@gmail.com'),
(24, 'Rousseau', 'Sarah', 'https://placehold.co/600x400?text=Sarah+Rousseau', 2, 'SarahRousseau@gmail.com'),
(25, 'Vincent', 'Antoine', 'https://placehold.co/600x400?text=Antoine+Vincent', 2, 'AntoineVincent@gmail.com'),
(26, 'Muller', 'Clara', 'https://placehold.co/600x400?text=Clara+Muller', 2, 'ClaraMuller@gmail.com'),
(27, 'Lefevre', 'Clément', 'https://placehold.co/600x400?text=Clément+Lefevre', 2, 'ClémentLefevre@gmail.com'),
(28, 'Faure', 'Mila', 'https://placehold.co/600x400?text=Mila+Faure', 2, 'MilaFaure@gmail.com'),
(29, 'Andre', 'Rayane', 'https://placehold.co/600x400?text=Rayane+Andre', 2, 'RayaneAndre@gmail.com'),
(30, 'Mercier', 'Lola', 'https://placehold.co/600x400?text=Lola+Mercier', 2, 'LolaMercier@gmail.com'),
(31, 'Blanc', 'Maxime', 'https://placehold.co/600x400?text=Maxime+Blanc', 2, 'MaximeBlanc@gmail.com'),
(32, 'Guerin', 'Anna', 'https://placehold.co/600x400?text=Anna+Guerin', 2, 'AnnaGuerin@gmail.com'),
(33, 'Boyer', 'Alexandre', 'https://placehold.co/600x400?text=Alexandre+Boyer', 2, 'AlexandreBoyer@gmail.com'),
(34, 'Chevalier', 'Lucie', 'https://placehold.co/600x400?text=Lucie+Chevalier', 2, 'LucieChevalier@gmail.com'),
(35, 'Francois', 'Yanis', 'https://placehold.co/600x400?text=Yanis+Francois', 2, 'YanisFrancois@gmail.com'),
(36, 'Masson', 'Lou', 'https://placehold.co/600x400?text=Lou+Masson', 2, 'LouMasson@gmail.com'),
(37, 'Lucas', 'Mathis', 'https://placehold.co/600x400?text=Mathis+Lucas', 2, 'MathisLucas@gmail.com'),
(38, 'Mathieu', 'Eléna', 'https://placehold.co/600x400?text=Eléna+Mathieu', 2, 'ElénaMathieu@gmail.com'),
(39, 'Garnier', 'Paul', 'https://placehold.co/600x400?text=Paul+Garnier', 2, 'PaulGarnier@gmail.com'),
(40, 'Caron', 'Juliette', 'https://placehold.co/600x400?text=Juliette+Caron', 2, 'JulietteCaron@gmail.com'),
(41, 'Morvan', 'Evan', 'https://placehold.co/600x400?text=Evan+Morvan', 2, 'EvanMorvan@gmail.com'),
(42, 'Rios', 'Sofia', 'https://placehold.co/600x400?text=Sofia+Rios', 2, 'SofiaRios@gmail.com'),
(43, 'Marchand', 'Noah', 'https://placehold.co/600x400?text=Noah+Marchand', 2, 'NoahMarchand@gmail.com'),
(44, 'Dumont', 'Margaux', 'https://placehold.co/600x400?text=Margaux+Dumont', 2, 'MargauxDumont@gmail.com'),
(45, 'Vidal', 'Théo', 'https://placehold.co/600x400?text=Théo+Vidal', 2, 'ThéoVidal@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `filliere`
--

CREATE TABLE `filliere` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `annee` year(4) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `filliere`
--

INSERT INTO `filliere` (`id`, `titre`, `annee`, `description`) VALUES
(1, 'SIO', '2025', 'BTS SIO 2025'),
(2, 'CIEL', '2025', 'BTS CIEL 2025');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudient`
--
ALTER TABLE `etudient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fillier_id` (`filliere_id`);

--
-- Index pour la table `filliere`
--
ALTER TABLE `filliere`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudient`
--
ALTER TABLE `etudient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pour la table `filliere`
--
ALTER TABLE `filliere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `etudient`
--
ALTER TABLE `etudient`
  ADD CONSTRAINT `fillier` FOREIGN KEY (`filliere_id`) REFERENCES `filliere` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
