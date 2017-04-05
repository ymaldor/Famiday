-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 05 Avril 2017 à 12:13
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `famiday`
--

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `id` int(32) NOT NULL,
  `eventname` varchar(45) NOT NULL,
  `eventstart` datetime NOT NULL,
  `eventend` datetime NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `participant` varchar(255) NOT NULL,
  `summary` longtext,
  `last_modif` date DEFAULT NULL,
  `frequence` varchar(45) DEFAULT NULL,
  `until` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `event`
--

INSERT INTO `event` (`id`, `eventname`, `eventstart`, `eventend`, `location`, `participant`, `summary`, `last_modif`, `frequence`, `until`) VALUES
(2, 'test2', '2017-03-19 07:00:00', '2017-03-19 15:00:00', 'quelque part', '2,3', '', '2017-03-19', '0', '2017-03-19 13:00:00'),
(7, 'Anniv bhf', '2017-04-03 12:00:00', '2017-04-03 19:00:00', NULL, '2,5', '', '2017-04-03', '0', '2017-04-05 19:00:00'),
(8, 'Course', '2017-04-04 08:00:00', '2017-04-04 10:00:00', NULL, '1,2,3,5', '', '2017-04-03', '0', '2017-04-04 10:00:00'),
(11, 'ert', '2017-04-05 12:00:00', '2017-04-05 15:00:00', NULL, '10,16', '', '2017-04-05', '0', '2017-04-05 15:00:00'),
(12, 'ert', '2017-04-06 08:00:00', '2017-04-06 18:00:00', NULL, '15,16', '', '2017-04-05', '0', '2017-04-06 18:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `family`
--

CREATE TABLE `family` (
  `id` varchar(32) NOT NULL,
  `familyname` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `family`
--

INSERT INTO `family` (`id`, `familyname`) VALUES
('1', '123456'),
('2', '789123'),
('26c3579077107484ccd8c16646df8dcd', 'dfg'),
('8c76cbec30dd7f70879325cd5b2ded97', 'sets');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` varchar(32) NOT NULL,
  `object` varchar(60) NOT NULL,
  `message` longtext NOT NULL,
  `datemessage` datetime NOT NULL,
  `trashed` tinyint(1) NOT NULL,
  `read` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `message_sent`
--

CREATE TABLE `message_sent` (
  `id` int(11) NOT NULL,
  `from` varchar(32) NOT NULL,
  `to` varchar(32) NOT NULL,
  `message` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `phone` int(11) NOT NULL,
  `adress` varchar(70) NOT NULL,
  `about` longtext,
  `userid` varchar(32) DEFAULT NULL,
  `idfamily` varchar(32) NOT NULL,
  `responsible` tinyint(1) DEFAULT NULL,
  `sexe` tinyint(4) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `personne`
--

INSERT INTO `personne` (`id`, `nom`, `prenom`, `phone`, `adress`, `about`, `userid`, `idfamily`, `responsible`, `sexe`, `status`, `color`) VALUES
(1, 'Bill', 'Jhones', 123, 'ghjghj', 'hjhg', 'bd65eh886db489593fa603a5e74ad0ab', '1', 0, NULL, NULL, '#7bd148'),
(2, 'Roger', 'le nouveau né', 123, 'ghjghj', 'hjhg', NULL, '1', 0, NULL, NULL, '#d06b64'),
(3, 'Luis', 'Sanchez', 123, 'ghjghj', 'hjhg', NULL, '1', 0, NULL, NULL, '#92e1c0'),
(4, 'Wang', 'Fu', 123, 'ghjghj', 'hjhg', 'e7ce2f886db489593fa603a5e74ad0ab', '2', 0, NULL, NULL, '#fa573c'),
(5, 'Herman', 'Gunter', 123, 'ghjghj', 'hjhg', NULL, '1', 0, NULL, NULL, '#42d692'),
(6, 'Herman', 'Gunter', 123, 'ghjghj', 'hjhg', NULL, '2', 0, NULL, NULL, '#fad165'),
(9, 'gfd', 'Gfd', 0, 'gfd', 'gfd', NULL, '2', NULL, 1, NULL, '#fbe983'),
(10, 'sets', 'test', 0, 'fgdfg', 'dfgdfg', '5d1ccb5494c6e6249ab2e9ad65de2455', '8c76cbec30dd7f70879325cd5b2ded97', NULL, 0, NULL, '#42d692'),
(11, 'dfg', 'dfg', 0, 'dfg', 'dfg', NULL, '26c3579077107484ccd8c16646df8dcd', NULL, 0, NULL, '#92e1c0'),
(12, 'dfg', 'dfg', 0, 'dfg', 'dfg', '7b20810971d86305184546ec6a95242e', '26c3579077107484ccd8c16646df8dcd', NULL, 0, NULL, '#7bd148'),
(13, 'gfd', 'Gfd', 0, 'gfd', 'gfd', NULL, '2', NULL, 0, NULL, '#ff7537'),
(14, 'gfd', 'Gfd', 0, 'gfd', 'gfd', NULL, '2', NULL, NULL, NULL, '#d06b64'),
(15, 'hgf', 'hgf', 0, 'hfg', 'fgh', NULL, '8c76cbec30dd7f70879325cd5b2ded97', NULL, 0, NULL, '#42d692'),
(16, 'fgh', 'hf', 0, 'fhg', 'hfg', NULL, '8c76cbec30dd7f70879325cd5b2ded97', NULL, 0, NULL, '#fad165');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` varchar(32) NOT NULL,
  `mail` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `datecreation` date NOT NULL,
  `online` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `mail`, `password`, `datecreation`, `online`) VALUES
('1', 'sghsgh', 'sfghsfg', '2017-03-14', 0),
('2', 'sghsgh', 'sfghsfg', '2017-03-14', 0),
('3', 'sghsgh', 'sfghsfg', '2017-03-14', 0),
('4', 'sghsgh', 'sfghsfg', '2017-03-14', 0),
('5', 'sghsgh', 'sfghsfg', '2017-03-14', 0),
('560346c4df65024cbe1c7430e93c7ebe', 'r@r.fr', 'r', '2017-04-05', 0),
('5d1ccb5494c6e6249ab2e9ad65de2455', 'e@e.fr', 'e', '2017-04-05', 0),
('6', 'sghsgh', 'sfghsfg', '2017-03-14', 0),
('7b20810971d86305184546ec6a95242e', 'd@d.fr', 'd', '2017-04-04', 0),
('bd65eh886db489593fa603a5e74ad0ab', 'b@b.fr', 'b', '2017-04-04', 0),
('e7ce2f886db489593fa603a5e74ad0ab', 'c@c.fr', 'c', '2017-04-04', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `family`
--
ALTER TABLE `family`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message_sent`
--
ALTER TABLE `message_sent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_message_sent_user1_idx` (`from`),
  ADD KEY `fk_message_sent_user2_idx` (`to`),
  ADD KEY `fk_message_sent_message1_idx` (`message`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_personne_user1_idx` (`userid`),
  ADD KEY `fk_personne_family1_idx` (`idfamily`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `message_sent`
--
ALTER TABLE `message_sent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `message_sent`
--
ALTER TABLE `message_sent`
  ADD CONSTRAINT `fk_message_sent_message1` FOREIGN KEY (`message`) REFERENCES `message` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_message_sent_user1` FOREIGN KEY (`from`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_message_sent_user2` FOREIGN KEY (`to`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `personne`
--
ALTER TABLE `personne`
  ADD CONSTRAINT `fk_personne_family1` FOREIGN KEY (`idfamily`) REFERENCES `family` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_personne_user1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
