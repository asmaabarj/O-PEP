

-- --------------------------------------------------------
--creation de la base de donnees

CREATE DATABASE opep;
-- Structure de la table `categorie`


CREATE TABLE `categorie` (
  `idCategorie` int(11) NOT NULL,
  `nomCategorie` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Déchargement des données de la table `categorie`


INSERT INTO `categorie` (`idCategorie`, `nomCategorie`) VALUES
(1, 'Palm trees'),
(2, 'flowers'),
(3, 'trees'),
(4, 'fruit trees'),
(5, 'cactus'),
(6, 'olive trees'),
(15, 'nakhla');

-- --------------------------------------------------------


-- Structure de la table `commande`


CREATE TABLE `commande` (
  `idCommande` int(11) NOT NULL,
  `idPlante` varchar(255) DEFAULT NULL,
  `idUtilisateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------


-- Structure de la table `panier`


CREATE TABLE `panier` (
  `idPanier` int(11) NOT NULL,
  `idUtilisateur` int(11) DEFAULT NULL,
  `idPlante` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------


-- Structure de la table `plante`


CREATE TABLE `plante` (
  `idPlante` int(11) NOT NULL,
  `idCategorie` int(11) DEFAULT NULL,
  `nomPlante` varchar(50) DEFAULT NULL,
  `prix` decimal(11,2) DEFAULT NULL,
  `imagePlant` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Déchargement des données de la table `plante`


INSERT INTO `plante` (`idPlante`, `idCategorie`, `nomPlante`, `prix`, `imagePlant`) VALUES
(1, 1, 'howea forsteriana (kentia)', 1110.10, './images/picture1.png'),
(2, 1, 'rhapis excelsa (china)', 1502.98, './images/picture2.png'),
(3, 1, 'latania lontaroides (red latan palm)', 234.54, './images/picture3.png'),
(4, 1, 'phoenix dactylifera', 1041.50, './images/picture4.png'),
(5, 1, 'washingtonia robusta', 908.99, './images/picture5.png'),
(6, 2, 'poinsettia', 12.97, './images/picture6.png'),
(7, 2, 'osteospermum', 16.40, './images/picture7.png'),
(8, 2, 'solanum', 36.37, './images/picture8.png'),
(9, 2, 'kalanchoe', 15.50, './images/picture9.png'),
(10, 2, 'hypoestes', 11.98, './images/picture10.png'),
(11, 2, 'felicea', 10.00, './images/picture11.png'),
(12, 3, 'ficus nitida', 1201.68, './images/picture12.png'),
(13, 3, 'celtis australis', 1453.46, './images/picture13.png'),
(14, 3, 'tipuana tipu', 306.49, './images/picture14.png'),
(15, 3, 'sapin de noel', 141.76, './images/picture15.png'),
(16, 3, 'chorisia speciosa', 901.12, './images/picture16.png'),
(17, 4, 'orange thomson navel', 121.00, './images/picture17.png'),
(18, 4, 'goyavier fraise', 153.99, './images/picture18.png'),
(19, 4, 'banana tree', 351.80, './images/picture19.png'),
(20, 4, 'raisin', 91.65, './images/picture20.png'),
(21, 5, 'opuntia', 61.07, './images/picture21.png'),
(22, 5, 'neobuxbaumia', 53.77, './images/picture22.png'),
(23, 5, 'euphorbia', 151.21, './images/picture23.png'),
(24, 5, 'cactus barrel', 91.98, './images/picture24.png'),
(25, 6, 'languedoc', 601.50, './images/picture25.png'),
(26, 6, 'arbequina', 527.89, './images/picture26.png'),
(27, 6, 'menara', 785.98, './images/picture27.png');

-- --------------------------------------------------------


-- Structure de la table `roles`


CREATE TABLE `roles` (
  `idRole` int(11) NOT NULL,
  `nameRole` varchar(100) DEFAULT NULL
);


-- Déchargement des données de la table `roles`


INSERT INTO `roles` (`idRole`, `nameRole`) VALUES
(1, 'admin'),
(2, 'client');

-- --------------------------------------------------------


-- Structure de la table `utilisateur`

CREATE TABLE `utilisateur` (
  `idUtilisateur` int(11) NOT NULL,
  `idRole` int(11) DEFAULT NULL,
  `nomUtilisateur` varchar(50) DEFAULT NULL,
  `prénomUtilisateur` varchar(100) DEFAULT NULL,
  `emailUtilisateur` varchar(255) DEFAULT NULL,
  `MdpUtilisateur` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Déchargement des données de la table `utilisateur`


INSERT INTO `utilisateur` (`idUtilisateur`, `idRole`, `nomUtilisateur`, `prénomUtilisateur`, `emailUtilisateur`, `MdpUtilisateur`) VALUES
(2, 2, 'barj', 'asmaa', 'asmaabarj5@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 1, 'barj', 'dcv', 'xzz@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 1, 'barj', 'dcv', 'ihugxyfya@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 1, 'sara', 'sara', 'sara@gmail.com', '900150983cd24fb0d6963f7d28e17f72'),
(6, 2, 'ASMAA', 'ASMAA', 'ASMAA@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 2, 'kenza', 'barj', 'kenza@gmail.com', '202cb962ac59075b964b07152d234b70'),
(10, 1, 'asmaa', 'sara', 'saraasmaa@gmail.com', '202cb962ac59075b964b07152d234b70'),
(14, 2, 'aaa', 'aaaa', 'aaa@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808'),
(15, 2, 'douaa', 'douaa', 'douaa@gmail.com', '202cb962ac59075b964b07152d234b70');


-- Index pour les tables déchargées



-- Index pour la table `categorie`

ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idCategorie`);


-- Index pour la table `commande`

ALTER TABLE `commande`
  ADD PRIMARY KEY (`idCommande`),
  ADD KEY `idUtilisateur` (`idUtilisateur`);


-- Index pour la table `panier`

ALTER TABLE `panier`
  ADD PRIMARY KEY (`idPanier`),
  ADD KEY `idUtilisateur` (`idUtilisateur`),
  ADD KEY `idPlante` (`idPlante`);


-- Index pour la table `plante`

ALTER TABLE `plante`
  ADD PRIMARY KEY (`idPlante`),
  ADD KEY `plante_fk_1` (`idCategorie`);


-- Index pour la table `roles`

ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRole`);


-- Index pour la table `utilisateur`

ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idUtilisateur`),
  ADD KEY `fk_utilisateur_role` (`idRole`);





-- AUTO_INCREMENT pour la table `categorie`

ALTER TABLE `categorie`
  MODIFY `idCategorie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `idCommande` int(11) NOT NULL AUTO_INCREMENT;


-- AUTO_INCREMENT pour la table `panier`

ALTER TABLE `panier`
  MODIFY `idPanier` int(11) NOT NULL AUTO_INCREMENT;


-- AUTO_INCREMENT pour la table `plante`

ALTER TABLE `plante`
  MODIFY `idPlante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;


-- AUTO_INCREMENT pour la table `utilisateur`

ALTER TABLE `utilisateur`
  MODIFY `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;





-- Contraintes pour la table `commande`

ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`idUtilisateur`);


-- Contraintes pour la table `panier`

ALTER TABLE `panier`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`idUtilisateur`),
  ADD CONSTRAINT `panier_ibfk_2` FOREIGN KEY (`idPlante`) REFERENCES `plante` (`idPlante`);

--
-- Contraintes pour la table `plante`
--
ALTER TABLE `plante`
  ADD CONSTRAINT `plante_fk_1` FOREIGN KEY (`idCategorie`) REFERENCES `categorie` (`idCategorie`);


-- Contraintes pour la table `utilisateur`

ALTER TABLE `utilisateur`
  ADD CONSTRAINT `fk_utilisateur_role` FOREIGN KEY (`idRole`) REFERENCES `roles` (`idRole`);


