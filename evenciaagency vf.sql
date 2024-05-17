-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 05 sep. 2022 à 19:38
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `evenciaagency`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `titre`, `description`) VALUES
(1, ' Anniversaire', ' Fêter le jour de sa naissance !'),
(2, 'Mariage', 'Une nouvelle vie commence...'),
(3, 'Séminaire', 'Conférences & séminaires de formation '),
(4, 'Team building', ' Team building des entreprises, des ONGs...'),
(5, 'Réunion', ' Tous types de réunions...'),
(6, 'Sport', ' évènement sportif (foot, hand, tennis, gymnase, danse.)'),
(7, 'Festivals & concerts', ' Manifestation culturelle de chant, musique, danse, opéra....'),
(8, 'Exposition', ' Exposition de tableaux, pièces artisanales...');

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `lieu` varchar(255) DEFAULT NULL,
  `date` varchar(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `categorieId` int(11) DEFAULT NULL,
  `accepter` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `event`
--

INSERT INTO `event` (`id`, `nom`, `image`, `lieu`, `date`, `description`, `categorieId`, `accepter`) VALUES
(1, 'Nadine\'s Birthday', 'anniversaire 3.jpg', 'YOYO_Sidi Bou', '20/12/2022', ' La coquette Nadine fêtera ses 4ans ! Meilleurs vœux ! ', 1, 1),
(2, 'Art Moderne', 'artmoderne.gif', 'Centre culturel_M6', '26/09/2022', ' Exposition de tableaux uniques et modernes ! ', 8, 1),
(3, 'Festival des lumières', 'concert.jpg', 'théatre de carthage', '26/08/2022', 'Ambiance festive et extraordinaire !', 7, 1),
(4, 'Réunion Statutaire Phoenix', 'réunion.jpg', 'The Moon-coworking space', '10/09/2022', ' C\'est la 2ème réunion statutaire du Rotaract Phoenix Sud mandat 2022_2023.', 5, 1),
(5, 'TeamB Interact Tunis Doyen', 'teamB.jpg', 'Entrepôt_coworkingspace', '24/09/2022', 'Interact Tunis Doyen organise un team building pour ses recrues...', 4, 1),
(6, 'Tournoi de foot', 'foot.jpg', 'Terrain_menzah5', '11/10/2022', ' Un tournoi de foot pour les élèves de 5ème année de Salim School.', 6, 1),
(7, 'Séminaire AI', 'séminaire 3.jpg', 'Esprit_Ariana', '21/03/2023', ' Un séminaire de formation sur l\'avenir de l\'intelligence Artificielle...', 3, 1),
(14, 'Today is the Day!', 'calender.png', 'Paris_France', '14/02/2023', 'Célébrer autrement \" The Love Day\" !', 2, 1),
(15, 'Compétition Natation', 'natation.jpg', 'Piscine Olympique_ezzahra', '14/10/2022', ' Une compétition chaude entre nos jeunes nageurs...', 6, 1),
(16, 'Mariage Elisabeth&Roméo', 'mariage.jpg', 'Maldives', '31/08/2022', ' Finalement, ils se marient !', 2, 1),
(21, 'Anniversaire de Feriel', 'GIF Happy Birthday.gif', 'Bigaboo_Lac ', '14/06/2022', ' My Birthday ! Youpy !', 1, 1),
(22, 'Séminaire de Formation Rotaract_SFR', 'séminaire.jpg', 'Hôtel IBEROSTAR_Hammamet', '14/03/2023', ' Le séminaire de formation spécial pour les Rotaractiens arrive ! Préparez-vous !', 3, 1),
(23, 'teambuilding2', 'teamB 2.png', 'ennaser 2', '29/08/2022', ' Team building pour briser la glace !', 4, 1),
(32, 'Tournoi de tennis', 'tennis.jpg', 'Centre culturel_M6', '29/09/2022', 'Un tournoi de tennis est organisé par le centre culturel pour couronner les efforts de nos élèves.', 6, 1),
(33, 'Salon de la création Artisanale', 'expoart.jpg', 'Foire du Kram', '26/11/2022', ' Fêtons la création artisanale_20ème édition', 8, 1);

-- --------------------------------------------------------

--
-- Structure de la table `favs`
--

CREATE TABLE `favs` (
  `userId` int(11) NOT NULL,
  `eventId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `favs`
--

INSERT INTO `favs` (`userId`, `eventId`) VALUES
(1, 3),
(1, 21),
(6, 14),
(6, 16),
(6, 21);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` bigint(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `role`, `email`, `tel`, `password`) VALUES
(1, 'Ben aissia', 'feriel', 'administrateur', 'feriel@gmail.com', 20700505, 'feriel'),
(2, 'Admin', 'admin', 'administrateur', 'admin@gmail.com', 20230600, 'admin'),
(3, 'Organisateur', 'test', 'organisateur', 'organisateur@gmail.com', 25548250, 'organiser'),
(4, 'mohamed', 'mohamed', 'participant', 'mohamed@gmail.com', 50201308, 'mohamed'),
(6, 'bchira', 'bchira', 'participant', 'bchira@gmail.com', 99780210, 'bchira'),
(18, 'New', 'user', 'participant', 'newuser@gmail.com', 20590590, 'new'),
(19, 'feriel', 'again', 'participant', 'ferielagain@gmail.com', 50200999, 'again'),
(20, 'front', 'ajout', 'participant', 'frontajout@gmail.com', 90890520, 'front'),
(21, 'front', 'ajout', 'participant', 'frontajout@gmail.com', 90890520, 'front');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorieId` (`categorieId`);

--
-- Index pour la table `favs`
--
ALTER TABLE `favs`
  ADD PRIMARY KEY (`userId`,`eventId`),
  ADD KEY `eventId` (`eventId`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`categorieId`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `favs`
--
ALTER TABLE `favs`
  ADD CONSTRAINT `favs_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `favs_ibfk_2` FOREIGN KEY (`eventId`) REFERENCES `event` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
