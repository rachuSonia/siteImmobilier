-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 08 nov. 2019 à 13:06
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `acheter`
--

DROP TABLE IF EXISTS `acheter`;
CREATE TABLE IF NOT EXISTS `acheter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(250) NOT NULL,
  `typeBien` varchar(250) NOT NULL,
  `photo1` varchar(250) NOT NULL,
  `photo2` varchar(250) NOT NULL,
  `photo3` varchar(250) NOT NULL,
  `photo4` varchar(250) NOT NULL,
  `photo5` varchar(250) NOT NULL,
  `photo6` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `ville` varchar(250) NOT NULL,
  `departement` int(11) NOT NULL,
  `prix` varchar(50) NOT NULL,
  `typeConstruction` varchar(250) NOT NULL,
  `anneeConstruction` int(11) NOT NULL,
  `surfaceTotal` int(11) NOT NULL,
  `surfaceHabitable` int(11) NOT NULL,
  `surfaceTerrain` varchar(50) NOT NULL,
  `nombrePiece` int(11) NOT NULL,
  `taxeFonciere` int(11) NOT NULL,
  `travauxRecent` varchar(250) NOT NULL,
  `travauxPrevoir` varchar(250) NOT NULL,
  `equipement` varchar(250) NOT NULL,
  `chauffage` varchar(250) NOT NULL,
  `eauChaude` varchar(250) NOT NULL,
  `plus` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `acheter`
--

INSERT INTO `acheter` (`id`, `type`, `typeBien`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `description`, `ville`, `departement`, `prix`, `typeConstruction`, `anneeConstruction`, `surfaceTotal`, `surfaceHabitable`, `surfaceTerrain`, `nombrePiece`, `taxeFonciere`, `travauxRecent`, `travauxPrevoir`, `equipement`, `chauffage`, `eauChaude`, `plus`) VALUES
(7, 'Appartement', 'F1', '78331fc111ddf5ade28c104e55d93646.jpg', 'ff63eb9ac7492aeb1a25210b9fa11dab.jpg', '11244562aa31b9224cd78ec2a1cb739f.jpg', '78e100f70f594b13bcc67c68f3591b3b.jpg', 'a80823da7d3e6637e28d562c8740aed1.jpg', '50274d5da979613a28f3c8f09714dc5f.jpg', 'Boulevard Emile Augier-Rue Jean Richepin . Studette d\'environ 10 m2 VENDU OCCUPE Bail location vide signé le 1er Juin 2008 renouvelable par tacite reconduction tous les 3 ans, prochian renouvellemnt de bail 1er Juin 2020, loyer charges comprises : 350 euros, loyer hors charges: 340 euros, provision pour charge: 10 euros (charges trimestrielles générales: 48.39 euros) situé au 7éme étage SANS ascenseur par accés de service d\'un bel immeuble ancien en Pierre de Taille comprenant une piéce principale avec coin cuisine et cabine de douche. WC sur le palier à partager. Eau et chauffage individuels électrique. Gardien. Travaux à prévoir. A VOIR!!!!!', 'PARIS', 75016, '94 000', 'Traditionnelle', 1970, 10, 10, '/', 1, 110, '2017', '/', 'Balcon', 'Individuel électrique', 'Ballon électrique', 'Vue sur les toits'),
(8, 'Appartement', 'Studio', 'b978cf2953c38d4eda8ff7f4718788f0.jpg', 'a067a121f8ec620ca498943af0182e45.jpg', '67ef5b07b5ea7ecb812f9b8d67a1681c.jpg', '8a55ca0b989f1756fa351f4d296a3c99.jpg', 'e0d95c5a99b9924ba33775c3bbd60a6a.jpg', 'a9755df4364900fda7be1de17b3697fc.jpg', 'Paris 12éme, Avenue Lerdu-Rolli proche Bastille, Gare de Lyon, Quai de l\'Arsenal et Gare d\'Austerlitz. A deux pas des commerces et des transports, votre agence vous propose une studette de 13.90 m2 au sol, au dernier en étage avec une vue dégagé sur les toits de Paris.Il se compose d\'un espace nuit, d\'une douche et d\'un coin cuisine. Aucune perte d\'espace. Idéal pour un premier achat.', 'PARIS', 75012, '128 950', 'Traditionnelle', 1900, 11, 11, '/', 1, 128, '/', '/', 'Digicode', 'Individuel', 'Individuel', '/'),
(9, 'Appartement', 'T1', '4961d903c791cb5ca62b73429cb71308.jpg', 'c8ca2e1297f918a496ad135a62def994.jpg', '75651a0849dafbafe10b6c7671edd4d9.jpg', 'f83976f3f272cba4c19829861fef300f.jpg', '605641fd2c31005f0bda4041b2558f00.jpg', 'b252fa9b8001c74fef05f57c2dfed290.jpg', 'Nation - Paris 20 éme. Dans une belle résidence récente avec ascenseur et gardien à proximité de la place de la Nation avec ses transport et ses commerces. Votre agence vous propose en exclusivité ce studio bien agencé au calme sur cour. Il dispose d\'une entrée, d\'une salle d\'eau avec WC puis de la pièce de vie. A visiter sans tarder.', 'PARIS', 75020, '150 000', 'Traditionnelle', 1965, 13, 13, '/', 1, 167, '2015', '/', 'Ascenseur', 'Collectif', 'Collectif', 'Jardin'),
(10, 'Appartement', 'F1', 'bcdb7a83b40662ae1b9a17c79a9e5da7.jpg', '0ccf7010e23766aa12f0bf3dcf0807da.jpg', '649151f2e6a12a5a04c420fc7ff1bbb7.jpg', 'e3556f9da3004b1fd97bcce2ba9828c2.jpg', 'f12aee59cd0a93d9a6115c8652250a51.jpg', 'db16cbd28fa52a5e0b1441ea9c05e742.jpg', '75003 Paris - En Exclusivité - Rue CAFFARELLI / rue de BRETAGNE : Mairie du 3émme - Dans une belle copropriété du 18éme siècle, au cœur d\'un quartier à la mode, un studio de 12.53 loi Carrez, en étage élevé - Bon état général, poutres apparentes - Nombreux commerces à proximité ! vendu occupé Bail en cours, loué 504 euros cc/mois. Charges annuelles 480 euros.', 'PARIS', 75003, '179 900', 'Moderne', 2013, 13, 13, '/', 1, 210, 'Réfection mur pignon', '/', 'Interphone', 'Individuel électrique', 'Individuel électrique', 'Cour'),
(11, 'Appartement', 'F1', '99212482a3a6452285491953ef51a2ec.jpg', 'c9a3dcf16731645bcc404c7b067f7782.jpg', '7b7b17ee711cf0eac55664c4222263ad.jpg', 'e766ef1ee6a760e59740ee7270dec274.jpg', '6b78da6acd295fa7d76316af2a26bafa.jpg', 'acc59e461cc4466ee23b6c226083e1ef.jpg', 'Rue des Cloys, dans une copropriété de bon standing, votre agence vous propose à venir découvrir ce studio lumineux en étage élevé avec une vue dégagée composé d\'une entrée, d\'une pièce de vie, d\'une salle d\'eau/cuisine et WC séparé.', 'PARIS', 75018, '188 000', 'Traditionnelle', 1800, 16, 16, '/', 1, 199, '2012', '/', 'Ascenseur, Digicode, Interphone', 'Collectif', 'Collectif', 'Cour, Jardin'),
(12, 'Appartement', 'F2', '1b7da502cb19fdee3dd8570077511e8e.jpg', 'd14b5e99635b71ed8a8d0d287261bb62.jpg', 'aa88faee6a88a4848309f91de2040ac3.jpg', 'ce9e35a20979de90bc7f8ea7e2da5628.jpg', 'f8060211528dedca5a718494ac61a675.jpg', '87a768d83be2e19820afb739fc6e8afe.jpg', 'Vous l\'attendiez tous... le voilà ! Sur la fameuse avenue Wilson et à seulement 10 minutes du Métro 12 Front populaire, votre agence vous a déniché ce cosy 2 pièces manucuré et fraichement rénové. Ce bien se compose d\'une entrée, une cuisine aménagée, une salle d\'eau avec douche à l\'italienne et WC suspendus, un lumineux séjour et d\'une spacieuse chambre. Ce qu\'on aime ? le parquet d\'époque conservé et les prestations haut de gamme qui donnent ce style inimitable ! Qui dit mieux ?(plus de détails sur notre site)', 'PARIS', 75002, '159000', 'Traditionnelle', 1930, 34, 34, '/', 2, 520, '/', '/', 'Digicode', 'Individuel radiateur electricité', 'Individuel ', '/'),
(13, 'Appartement', 'F2', '3527e9978af71f8dda7aeab43db4c945.jpg', 'b57245784f89256d8cf7cedcfcf1f55e.jpg', '12b910560224b54b701e131e8870b5b2.jpg', '39e3017cb8ab7064e69d960e8d13fe98.jpg', '76b6e7d4b57979cc755566b22999fa4b.jpg', 'df7a694b0c99e65b2f498e06c057a95f.jpg', 'Sur le secteur de la Boissière, à proximité du théâtre des Roches, des écoles Fidélis et Montessori, du futur métro ligne 11 et du métro Mairie de Montreuil (13 min en bus 102 ou 129), des commerces (Auchan, boulangeries, pharmacies, ...).\r\n\r\nVos agences Boissière Immobilier vous proposent de découvrir ce charmant appartement lumineux de type 2 pièces vendu loué avec un bail s\'achevant courant novembre 2020.\r\n\r\nIl se compose d\'une entrée avec rangements, d\'un séjour, d\'une chambre, une cuisine indépendante, une salle de bain et un wc.\r\n\r\nLes points positifs? Deux balcons donnant sur la chambre et séjour, un box + une place de parking, une cave ainsi qu\'un séchoir partagé sur palier.', 'PARIS', 75013, '220 230', 'Traditionnelle', 1970, 51, 51, '/', 2, 1200, '/', '/', 'Digicode', 'Collectif radiateur gaz', 'Individuelle ballons', 'Terrasse'),
(14, 'Maison', 'F2', '4a52d1fea1fd665590c41533fa11907b.jpg', 'd6343372455227d697c1cdddd91cc916.jpg', 'f6cb20e64b093b18a7d462c3d6001e5b.jpg', 'd1bbd2352cb2aab8272772893c2816eb.jpg', '5ed8e285a96fe8bb59e33260d8016f07.jpg', '960814ddbd9d0df49cf44bb28ee0eef8.jpg', 'L HAY LES ROSES, dans quartier pavillonnaire proche de la future station de métro Chevilly 3 communes (ligne 14), charmant pavillon de plain-pied entièrement refait à neuf comprenant entrée sur séjour double, cuisine ouverte, dégagement, salle d\'eau, WC, une chambre.\r\nTrès belle terrasse devant la maison', 'PARIS', 75018, '295 000', 'Moderne', 2011, 43, 43, '101', 2, 403, 'Année rénovation 2014', '/', '/', 'Individuel électrique', 'Ballon électrique', 'Terrasse'),
(15, 'Appartement', 'F3', '4f6157afd0b21b11d2ccae496ff091ce.jpg', 'cf1370e515807fb7ba1be78ba6e02ba2.jpg', 'e48e6a51d39bce8aeec49a5c500fca7b.jpg', '410748746346e3538275ce77c762876b.jpg', '1135ba41886481470ee4b71de0a9f6d2.jpg', '48f85769f4a5c6407eba3b2568173632.jpg', 'QUARTIER PORTE DES LILAS - Vente en viager occupé - Au 2ème étage sans ascenseur d\'un petit immeuble, l\'agence Century 21 Saint-Fargeau à le plaisir de vous présenter en exclusivité cet appartement de type 3 pièces avec balcon.\r\n\r\nCe bien se compose d\'une entrée, d\'un séjour donnant sur le balcon, d\'une cuisine aménagée et équipée, de deux chambres, d\'une salle d\'eau, d\'un WC séparé et d\'un dressing.\r\n\r\nUn cave complète ce bien\r\n\r\nVous apprécierez la bonne distribution de cet appartement et son balcon.', 'PARIS', 75016, '174 000', 'Traditionnelle', 1960, 57, 57, '/', 3, 320, '/', '/', 'Digicode', 'Individuel électrique', 'Ballon électrique', '/'),
(16, 'Maison', 'F5', '18ddf0c78fd7469e3c7d25a76f2a3ec7.jpg', 'c2d5a0a67944ca51921014c6121f7ddc.jpg', '71519fa2683ec0b7598c7212e8fa4ced.jpg', '25311cefbd95eb8dad6a966ae1c5f0a0.jpg', 'd1c40031babfc8b5704db4bb7e9bdf33.jpg', '30c400f4d782faa8e42e6564ffc9dbdb.jpg', 'Au Blanc Mesnil, dans un secteur très prisé du \"quartier des musiciens\", nous vous proposons ce pavillon comprenant un double séjour donnant directement sur le jardin, cuisine indépendante, 3 chambres spacieuses, le tout sur un sous-sol total avec un garage pouvant contenir plusieurs véhicules.\r\nSon terrain de 315m² vous offre la possibilité d\'imaginer et de réaliser un agrandissement si tel est votre souhait, ou bien de profiter pleinement des beaux jours en famille.', 'PARIS', 75002, '339 000', 'Moderne', 2011, 90, 90, '315', 5, 1240, '/', '/', '/', 'Individuel radiateur fioul', 'Chaudière', 'Garage, Jardin');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `comment` text NOT NULL,
  `date_publication` date NOT NULL,
  `id_post` int(11) NOT NULL,
  PRIMARY KEY (`id_comment`),
  KEY `id_post` (`id_post`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id_comment`, `name`, `comment`, `date_publication`, `id_post`) VALUES
(2, 'sisis', 'je sus pas', '2019-10-11', 1),
(3, 'cc', 'cvbh,k:jyt kiuyjtger', '2019-10-11', 1),
(4, 'cc', 'cvbh,k:jyt kiuyjtger', '2019-10-11', 1),
(11, 'cx', 'vdcq', '2019-10-13', 8);

-- --------------------------------------------------------

--
-- Structure de la table `estimation`
--

DROP TABLE IF EXISTS `estimation`;
CREATE TABLE IF NOT EXISTS `estimation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typeBien` varchar(250) NOT NULL,
  `ville` varchar(250) NOT NULL,
  `adresse` text NOT NULL,
  `description_projet` text NOT NULL,
  `civilite` varchar(50) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `telephone` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `estimation`
--

INSERT INTO `estimation` (`id`, `typeBien`, `ville`, `adresse`, `description_projet`, `civilite`, `prenom`, `nom`, `email`, `telephone`) VALUES
(1, 'Maison', 'paris', '1 Rue De L\'Oise', 'JE SUIS ACTUELLEMENT', 'Mr', 'Sonia', 'RACHI', 'sonia.RACHU@hotmail.com', '0646807335'),
(2, 'Maison', 'pontoise', '1 Rue De L\'Oise', 'Quelques mots sur votre projet*', 'Mr', 'Sonia', 'RACHI', 'sonia.RACHU@hotmail.com', '0989876868'),
(3, 'Maison', 'pontoise', '1 Rue De L\'Oise', 'Quelques mots sur votre projet*', 'Mr', 'Sonia', 'RACHI', 'sonia.RACHU@hotmail.com', '0989876868');

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(250) NOT NULL,
  `typeAppartement` varchar(250) NOT NULL,
  `photo1` varchar(250) NOT NULL,
  `photo2` varchar(250) NOT NULL,
  `photo3` varchar(250) NOT NULL,
  `photo4` varchar(250) NOT NULL,
  `photo5` varchar(250) NOT NULL,
  `photo6` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `ville` varchar(250) NOT NULL,
  `departement` int(11) NOT NULL,
  `surface` int(11) NOT NULL,
  `surfaceHabitable` int(11) NOT NULL,
  `nombrePiece` int(11) NOT NULL,
  `typeConstruction` varchar(250) NOT NULL,
  `anneeConstruction` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `provisionCharge` int(11) NOT NULL,
  `travauxRecent` text NOT NULL,
  `travausPrevoir` text NOT NULL,
  `honoraireCharge` int(11) NOT NULL,
  `constitutionDossier` int(11) NOT NULL,
  `etatDesLieux` int(11) NOT NULL,
  `depotGarantie` int(11) NOT NULL,
  `chauffage` varchar(250) NOT NULL,
  `eauChaude` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=152 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `location`
--

INSERT INTO `location` (`id`, `type`, `typeAppartement`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `description`, `ville`, `departement`, `surface`, `surfaceHabitable`, `nombrePiece`, `typeConstruction`, `anneeConstruction`, `price`, `provisionCharge`, `travauxRecent`, `travausPrevoir`, `honoraireCharge`, `constitutionDossier`, `etatDesLieux`, `depotGarantie`, `chauffage`, `eauChaude`) VALUES
(134, 'Appartement', 'F1', '62bf319bce612795bcc50081d0fceae3.jpg', '65af94ab877e9cce127654047e20717d.jpg', '4d61aeceaaa2e01777486cdbe160f137.jpg', '88bd9ceb488de97c09ef1cde91258677.jpg', '20791281e8bae362828dd06a2e9b16fb.jpg', '1e6f4f7c318f52b2e32c2ad00d777a19.jpg', 'Quartier Olympiades-rue des Terres au Curé dans le 13éme arrondissement de Paris, proche des transports (ligne 14, RER C et TRAM T3A) et des facultés. Dans une résidence récente, sécurisée et bien entretenue, nous vous proposons ce studio meublé avec balcon de 23 m au 5éme étage avec ascenseur. Il comprend une entrée avec kitchenette équipée, une pièce principale avec placard, une salle de bains avec WC.', 'paris', 75013, 23, 23, 1, 'moderne', 2011, 750, 50, '/', '/', 555, 288, 72, 1440, 'Individuel électrique', 'Ballon électrique'),
(136, 'Appartement', 'Studio', 'adb04a65409947bc3d7154ee5cabf193.jpg', '9d0cbcc931fa0d5d738c65d3c5b68ae4.jpg', 'd19dfff40ad582d36a8c5c2103a815e3.jpg', 'e563b8d7dc163ed8ae54fcbfc43ddb85.jpg', '8ed07e9c91f207ab6d68b86e529bf2c4.jpg', '9370cf596aad2a143b49aed33a65d217.jpg', 'GARE DE LYON / TRAVERSIERE : Joli studio MEUBLE en bon état. Situé dans un immeuble année 60 avec gardien, il vous séduira par sa lumière et son calme. Aménagé avec gout, il est composé d\'une pièce principale avec kitchenette, une salle d\'eau avec WC. L\'appartement est au 5e étage avec ascenseur. Le chauffage et l\'eau chaude sont collectifs.\r\nA deux pas de la gare de Lyon.\r\nLIBRE FIN JUIN.', 'paris', 75012, 22, 22, 1, 'Traditionnelle', 1960, 802, 93, '/', '/', 333, 267, 67, 1418, 'Collectif au sol', 'Collectif'),
(137, 'Appartement', 'Studio', 'd9eefecf117c972745923a7ce175fb30.jpg', 'a0f50d66d559c7758d4ab224148f6eff.jpg', 'b2228919a83e7fe4c5d543cff9119540.jpg', 'e1ba3959af42e6ba4fc7b3f5ec4d7c78.jpg', 'fbf4993e1722bf4f23ab835b4f7f9c1a.jpg', '0c1478a1b3146c6c8ff890e0a8d8b620.jpg', 'Rue Vulpian 75013 PARIS\r\nAu sein d\'un très bel immeuble récent avec gardien. Studio loué meublé d\'environ 25m2 au 4éme étage avec ascenseur donnant sur jardin exposé plein ouest.', 'paris', 75103, 23, 23, 1, 'Traditionnelle', 1991, 806, 56, '/', '/', 370, 296, 74, 1500, 'Individuelle électricité', 'Individuelle électricité'),
(138, 'Appartement', 'F1', '45087b31174d1c4cb56b5cdca7ffd144.jpg', '4a6dd6be88d4cfc6b77736e003cabbfa.jpg', '9ae6b65e62b4ab82bc439a259753e7df.jpg', '8a9ecef5927f0078fd13807c0828cb2f.jpg', 'dacd4bc6cae58b79e59fcd309069b1e7.jpg', '94c5cec9c6501fa27b410ddf0f276c7e.jpg', 'Location Paris V-Rue Linné-Proche du métro Jussieu (Ligne 7 et 10)-Votre agence vous propose,au 1er étage d\'un immeuble ancien, un studio d\'une superficie de 24.51 m,comprenant une entrée,une belle piéce à vivre,une cuisne indépendante aménagée et équipée (plaques,four,micro\'ondes,frigo) et salle de bain avec WC.\r\nChauffage et eau chaude individuels électriques.\r\nDisponible le 01 Juillet.', 'paris', 75005, 25, 25, 1, 'Traditionnelle', 1840, 850, 76, '/', '/', 368, 294, 74, 1566, 'Individuelle électricité', 'Individuelle électricité'),
(139, 'Appartement', 'F1', '1ac9d67674a392dcd611b94377406e8e.jpg', '6be1da9b9fda745202ea7f7a8a5d7930.jpg', '424946276af69e0404ffe74e1ab5f8bd.jpg', '4301ecb095738247faaafa648a6d13fc.jpg', 'f7b99cf4995e6dc2af9d64cf3f7ee680.jpg', 'a493d5e24ff97e9588588580569a2f9f.jpg', ' en plein cœur du Village Pernety, votre agence vous présente en exclusivité ce studio refait à neuf situé dans un immeuble ancien bien entretenu en fond d\'allée fleurie.\r\nVenez découvrir cet appartement loué meublé,composé d\'une grande pièce de vie lumineuse avec nombreux rangements, une cuisine ouverte aménagée et équipée, et une salle d\'eau avec WC.\r\nVous serez séduit par son calme, son emplacement et sa luminosité.\r\nCet appartement est à proximité du Métro Pernety et des nombreux commerces de la rue Raymond Losserand.', 'paris', 75020, 34, 34, 1, 'Moderne', 2011, 1100, 98, '/', '/', 333, 267, 89, 2436, 'Collectif', 'Collectif'),
(140, 'Appartement', 'F1', '35c505a80fa738bddcd0fa3fb3ea22d3.jpg', '4a6497d0cd80a60da65973a819f8d75e.jpg', '92c8589dccff4232d4190c03a9cb6463.jpg', '0096c2d78886b36bd4a811116ac6e4a4.jpg', '5e598bec58976ecc24b62475e70d9430.jpg', '3ff5fd8a26f0d755f6031039c8ee6bdb.jpg', 'L\'agence vous propose au deuxième étage d\'un immeuble récent, ce grand studio avec vue dégagée sur jardin. Il est composé d\'une entrée,d\'une pièce principale donnant sur balcon, d\'une cuisine indépendante aménagée non équipée, et d\'une salle de bains avec WC.\r\nDisponible immédiatement.', 'paris', 75020, 30, 30, 1, 'Traditionnelle', 1976, 850, 110, '/', '/', 396, 396, 36, 740, 'Collectif', 'Collectif'),
(141, 'Appartement', 'F1', '6021bca32102159ec92e4f73a04e8216.jpg', '04a4d17c2b1ee6717b03eef4128dbe53.jpg', '2ca7ad6c78229d1d28de28c17e4bfe94.jpg', 'fd076149b5ac5c6bc31976b46f5af9fd.jpg', 'c38a5f401eaf2429837a0183e0dbadbb.jpg', '2c3956287e9754aea886c655b1fa28b4.jpg', 'Tram Georges Brassens \r\nAu rez-de-chaussée d\'un immeuble neuf, nous vous proposons un appartement qui vous séduira par son agencement et sa très belle hauteur sous plafond de 3.50m. Il comprend une entrée distribuant un séjour, un espace cuisine équipée (deux feux et d\'un réfrigérateur) et d\'une belle salle d\'eau avec WC.\r\nSes grandes fenêtres apportent une luminosité exceptionnelle.\r\nLibre au 08 juillet 2019', 'paris', 75015, 25, 25, 1, 'Moderne', 2017, 860, 60, '/', '/', 368, 294, 74, 800, 'Collectif radiateur gaz', 'Chaudiére gaz'),
(142, 'Appartement', 'F2', '9655a1cac7d4926a91a9920bc6b5b840.jpg', '025b688992eff606112d2bab03d0e82f.jpg', 'cf80457922ba069548d4cc5524e471ed.jpg', '090c519931f88dc2ccccfd35745e6340.jpg', 'a35d8a3bffe35177ec14a447bd082bd7.jpg', '367779c5bf30f2e75b6aff055ec2aa7e.jpg', 'JULES JOFFRIN. Location vide. Situé rue de Poteau, proche des commerces et des transports, dans une copropriété récente et bien entretenue, cet appartement de 50.04 m2 est au septième étage avec ascenseur.Il compose d\'une entrée, d\'une cuisine indépendante aménagée, un séjour exposé sud de 21.22 m2 avec balcon, une salle de bain avec WC séparé.\r\nNombreux rangement. Chauffage collectif.Ce bien dispose d\'un garage au sous-sol.\r\nDisponible de suite.', 'paris', 75018, 50, 50, 2, 'Traditionnelle', 1970, 1279, 150, '/', '/', 751, 600, 150, 1130, 'Collectif radiateur gaz', 'Chaudiére'),
(143, 'Appartement', 'F2', 'd2a37a26e9981bec6932deb82236c2a8.jpg', '7a620d67993e7ec5938fb5554ef259c4.jpg', '23e585a3783df92e067a350d776b332a.jpg', '40d842ab325406b07c153c83b78b05cb.jpg', 'e19aa1dc61c20533b20a0af49083a61c.jpg', '537390250a55eda5f0d75a15ad560cc4.jpg', 'République-Proche du Canal Saint Martin-Location MEUBLÉE disponible de suite.\r\nDans une très jolie copropriété bien entretenue avec gardien, au 4éme étage sans ascenseur, au calme sur cour et lumineux, se présente un CHARMANT 2 pièces ATYPIQUE. Il se compose d\'une entrée avec WC, d\'un grand séjour avec coin bureau de 24 m2, d\'une chambre, d\'une cuisine séparée aménagée et équipée et d\'une salle d\'eau avec WC. Cave en sous-sol.', 'paris', 75011, 54, 54, 2, 'Moderne', 2013, 1500, 125, '/', '/', 813, 651, 163, 2750, 'Individuel au gaz', 'Individuelle gaz'),
(144, 'Appartement', 'F2', '88711b89e2fc4a215183279186e476a8.jpg', 'f189d386b514e76bd92031ded2e17abe.jpg', 'e2e18aa07cee0fe810363984bea176fd.jpg', 'a699fd213f5f0d451a4c9a8ea8d3e963.jpg', 'b00a506c306a7c1f05e993c33d703823.jpg', 'd8f57a06aa8abdbeb95e90688c5e58a4.jpg', 'CHARONNE-Fbg SAINT-ANTOINE (11e). Lumineux 2 pièces MEUBLÉE situé au 4e étage avec ascenseur. Vous aimerez son grand séjour avec vue dégagée coté rue. Coté cour, sa cuisine dînatoire indépendante, sa chambre avec le salle de bains ouverte sur celle-ci. Les WC séparés.Possibilité de louer un box situé rue Basfroi pour 150 € cc.', 'paris', 75011, 57, 57, 2, 'Traditionnelle', 1880, 1800, 100, '/', '/', 847, 678, 169, 3400, 'Individuel gaz', 'Chaudiére gaz'),
(145, 'Appartement', 'F2', 'bf4708e5261bea4aa4151539f3f5f530.jpg', 'eab45863018d475146c716bc8a982e74.jpg', '913b428ee095aed2a782ac577e3f681d.jpg', 'b02b8790c8be7e30731d9a1dc12ec37e.jpg', '33e2d243af1d503d23e7d56bfb6a7876.jpg', 'b34e5f439f4e7f903ffc5e8425ab8ef7.jpg', 'LOCATION MEUBLÉE. VILLA DANCOURT. Dans une jolie voie privé à proximité de la rue des Martyrs et des abbesses, dans un bel immeuble ancien, sublime appartement rénové de 55.55 m2 carrez situé en rez de chaussée sur cours. Le bien se compose d\'un grand séjour avec cuisine ouverte complètement aménagée et équipée,chambres avec dressings / placards et une salle de bain avec WC. Matériaux haut de gamme, mobilier neuf Beaucoup de style pour cet appartement unique. Avoir trés vite. Libre de suite.', 'paris', 75018, 57, 57, 2, 'Traditionnelle', 1900, 1999, 150, '/', '/', 833, 667, 167, 3698, 'Collectif radiateurs', 'Collective'),
(146, 'Appartement', 'F2', '046ba1159ca6dfdbc6d3ef9e37292b80.jpg', 'be18cef5cc13e3210f36b61e24a338e2.jpg', '13342af09ed1c8f22d8e006d001209a4.jpg', '08d8f8c45959febde62e91913b34e5a6.jpg', '34ba3b667baad2af1a6bf586bd85a118.jpg', 'dba17201f891f6e85cf4f1ac30f60b8a.jpg', 'Paris 8éme FAUBOURG SAINT HONORE. Dans un immeuble récent sécurisé au 1er étage avec ascenseur, beau 2 pièces meublé en parfait état avec des très bonnes prestations. Bien agencé avec un salon/salle à manger, une cuisine indépendante équipée, une chambre, une salle de bains et un WC séparés. Appartement idéalement situé à 2 pas de Charles de Gaulle Etoile et de la place des Terres. Disponible immédiatement.', 'paris', 7508, 55, 55, 2, 'Traditionnelle', 1975, 2000, 150, '/', '/', 825, 660, 165, 3700, 'Collectif', 'Collectif'),
(147, 'Appartement', 'Duplex', 'a7d9746f4bda8c7a58478c20535c71d1.jpg', '07642b0dd987b7197ebb7f72d25f48ff.jpg', '3574938b3d17dce3d272c8229dc1fa95.jpg', 'accde3d66b26a0b71c523eb5dada0085.jpg', '84a18aae18ab0c457f39e0cc280184cd.jpg', 'c1bae88db6e4f1c94a08b64728a750a5.jpg', 'RUE FABERT- EXCEPTIONNEL - VUE SUR L\'ESPLANADE ET LE DÔME DES INVALIDES - Luxueux appartement, meublé et équipé, splendide deux pièces en duplex, situé au dernier étage avec ascenseur d\'un bel immeuble ancien de standing, il est composé d\'une entrée, d\'une cuisine aménagée et équipée, parquet, Air conditionné.', 'paris', 75007, 50, 50, 2, 'moderne', 3015, 2960, 160, '/', '/', 750, 450, 320, 2800, 'Individuel électrique', 'Individuel électrique'),
(148, 'Appartement', 'F5', 'aeeabcf1e628bf0a095cc0132eff493f.jpg', 'f35f4b84a37ca73f62b301f1603282d5.jpg', 'f74a72c0f28bc7c1128e500faa7669de.jpg', 'b7d167a05154e1b44d7ba02e55554b43.jpg', '21b2a704b0150ed83a66967bd33d1973.jpg', '42147bca83d98fb9675f15b653f14e3f.jpg', 'PARIS BOULEVARD DE MAGENTA. Votre agence vous propose en exclusivité ce magnifique appartement familial de 113.66 m2 situé au 3éme étage avec ascenseur d\'une copropriété bien tenue et gardiennée. Il se compose d\'une entrée, double-séjour, une petite chambre, deux chambres avec salles d\'eau attenantes, une cuisine, une buanderie et un WC. Disponible de suite.', 'paris', 75010, 114, 114, 5, 'Traditionnelle', 1900, 3000, 133, '/', '/', 2182, 1364, 818, 2867, 'Individuel gaz', 'Chaudière gaz'),
(149, 'Appartement', 'F5', 'eacbf6fe3f468d7b177e511bb6c67766.jpg', '92c28c4de46da22a08a4ed24f2788349.jpg', '5e75dd6da708705d5c39db8249fa5836.jpg', 'b44fb75a11caf69d5fb0614ce0fff2e8.jpg', '80a533d12c588a381363e5ae35033ccf.jpg', '41227e048b87bdbd527eacaf893d0de1.jpg', 'Location Paris 5éme - Rue GAY LUSSAC - Proche du Panthéon et du RER B Luxembourg - Dans un bel immeuble Haussmannien, au 1er étage avec ascenseur, votre agence vous propose un appartement 5 pièces, il se compose d\'une entrée desservant un séjour et une salle à manger, une cuisine entièrement équipée et aménagée (plaques, four, micro-ondes, frigo, lave vaisselle, lave linge, sèche linge), une belle chambre parentale avec salle d\'eau et WC, deux chambres en enfilades, une salle d\'eau et WC séparé. Deux bureaux intégrés dans le séjour et la salle à manger.Charme de l\'ancien (Parquet, moulure, cheminée). Immeuble sécurisé et proche de nombreuses grandes écoles. Disponible de suite.', 'paris', 75005, 120, 120, 5, 'Traditionnelle', 1960, 3300, 100, '/', '/', 1800, 1440, 360, 6400, 'Individuel électrique', 'Individuel'),
(150, 'Maison', 'F5', 'f940e52a5a7fc946a3ab8f1f967437e8.jpg', '1eccf2e8d083298418a74e764b7c4eb6.jpg', 'f0d8f15a56da64c4d588416ed4e5369c.jpg', '28ba0c1ec34029a7d5e2d180edeaa65d.jpg', 'dac8cc9342d577edc4ed1ed35b2992e1.jpg', '7615c33a69e81ea48e507c3bbcc493f3.jpg', 'CLAMART-GARE : Belle maison en meulière de 1900 avec extérieur, découvrez ses espaces agréablement desservis jusqu\'au deuxième étage. Vous profiterez d\'un séjour lumineux, d\'une cuisine indépendante et aménagée, trois chambres, une salle de bains, deux water-closets. De nombreux rangements.\r\n\r\nUn sous-sol avec coin buanderie et deux dépendances complètent cette maison.\r\nPas de garage.\r\n\r\nProche des commerces et de la gare.', 'paris', 75002, 80, 73, 5, 'Traditionnelle', 1998, 1900, 0, '/', '/', 1114, 881, 232, 1900, '/', '/'),
(151, 'Maison', 'F7', '758338186a83bb1100a60bade88cef4f.jpg', 'd8252d64dbd45e434b316eb25e4b4dec.jpg', '677dfdfb7f15b92da453ead8182e4067.jpg', '5a23dbfad08796a9a5b4dd39d538cb4a.jpg', '6d295eac25620316d8aa643d2a64cf9a.jpg', '04e252ab5c02345dac3151c66cf7113a.jpg', '10 minutes de la gare à pied, dans résidence privée au calme absolu, maison récente de 150 m2 comprenant séjour double avec cheminée donnant sur terrasse et jardin, cuisine aménagée et équipée, 4 chambres, bureau, salle de bains, salle d\'eau, toilettes, garage, double vitrage, carrelage et parquet, chauffage gaz', 'paris', 75005, 150, 140, 7, 'Traditionnelle', 2000, 2087, 80, '/', '/', 1950, 1500, 450, 2007, 'Individuel gaz', 'Chaudiére gaz');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `date_publication` date NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_post`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id_post`, `title`, `content`, `date_publication`, `id_user`) VALUES
(1, 'Comment voir le potentiel d’un bien avec travaux ? ', '\r\n\r\nSi vous souhaitez acheter un bien à rénover, la première chose que vous devez faire pour évaluer ses qualités sera de consulter les plans. Cet espace doit vous correspondre sur différents points : regardez si la surface totale et le nombre de pièces sont suffisants par rapport à ce dont vous avez besoin, relevez quels sont les murs porteurs qui seront les plus délicats à abattre ou à modifier pour voir si l’aménagement vous convient en conservant ces murs, etc.\r\n\r\nLes plans vous permettent également d’avoir une vue d’ensemble des surfaces de chaque pièce, et de savoir si vous allez laisser chaque pièce en l’état ou non. A la vue des différentes pièces, de leur agencement et de leur surface respective, est-ce que vous pensez avoir besoin de modifier l’agencement, d’ajouter une cloison dans une pièce ou au contraire d’en ouvrir une autre ?\r\n\r\nLes plans sont précieux pour commencer à mettre au point votre éventuel projet de rénovation.\r\n\r\n\r\n\r\nLa plus grande difficulté pour beaucoup d’acquéreurs d’un bien à rénover consiste à se projeter dans une maison vide, et qui n’est pas encore en état d’être habitée. Pourtant, des astuces et des outils existent pour visualiser au mieux l’espace une fois rénové et aménagé, c’est le cas notamment des logiciels et des sites comme kozikaza, qui vous permettent de créer votre maison virtuelle.\r\n\r\nVous allez ainsi pouvoir dessiner les plans du logement, décorer l’espace virtuellement à partir des motifs, couleurs et ambiances proposés, et obtenir ainsi un plan 3D qui vous permet de visiter le futur logement comme si vous y étiez. Cela vous permet notamment de tester différents plans et différents aménagements.\r\n\r\nVous pouvez par exemple faire un plan avec une cuisine ouverte et un autre avec une cuisine fermée, réaliser un plan avec deux pièces fusionnées ou au contraire en séparant des pièces en plusieurs plus petites, vous pouvez également changer les coloris pour savoir lesquels vous plaisent, etc.\r\n\r\n', '2019-10-11', 37),
(8, 'Loi Carrez: comment calculer la surface habitable d’un bien ?', '\r\n\r\nLa loi Carrez a été mise en place pour harmoniser le calcul des surfaces des logements qui sont en copropriété. Il s’agit d’un système de métrage des logements qui permet de mesurer leur superficie privative pouvant être dédiée à l’habitation. Ce mode de calcul concerne les biens dont la surface est au moins égale à 8 m2, et il est réalisé à partir de la superficie des planchers des locaux clos et couverts après déduction des cloisons, des murs, des marches et des cages d’escalier, des gaines, des embrasures de portes et des fenêtres.\r\n\r\nUne fois ce métrage réalisé, il doit apparaître dans les documents relatifs à la vente comme l’avant-contrat (promesse ou compromis de vente), l’acte de vente définitif, etc.\r\n\r\nNotez que pour obtenir la surface en loi Carrez il est indispensable de faire appel à un expert qui va se déplacer dans le logement pour réaliser le métrage avec des outils adaptés.\r\n', '2019-10-13', 35),
(9, 'Et si au lieu de déménager, je construisais une extension de maison ?', 'Qu’est-ce qu’une extension de maison ?\r\n\r\nLorsque l’on souhaite davantage d’espace dans sa maison, on se dit souvent qu’il est impossible de pousser les murs. Pourtant, l’extension de maison permet justement d’agrandir l’espace de vie sans avoir à changer de maison, ce qui évite un déménagement. Mais une extension de maison répond à des caractéristiques précises. Il s’agit d’une nouvelle partie de maison, une partie issue de l’agrandissement, qui doit communiquer directement avec la partie de la maison déjà existante.\r\n\r\nCela signifie que les deux parties, l’ancienne et la nouvelle, doivent bénéficier d’une part d’un mur commun, et d’autre part d’une ouverture permettant de passer de l’une à l’autre comme dans n’importe quelle autre pièce.\r\n\r\nUne extension peut prendre plusieurs formes : l’aménagement de combles peut être considérée comme une extension, mais il peut également s’agir de l’installation d’une véranda ou de la construction d’un autre bloc accolé à la maison ou monté sur le toit, dans lequel vous aménagerez la pièce que vous souhaitez.\r\n', '2019-10-15', 37),
(10, 'La rentrée approche, comment trouver sa location étudiante ?', 'Pour tous les étudiants, la solution la plus pratique et la plus économique pour se loger consiste à déposer un dossier au Crous pour bénéficier d’une chambre dans une résidence universitaire. Ces résidences présentent l’avantage d’être situées à proximité des universités et de proposer des loyers peu élevés, adaptés au budget des étudiants. Il s’agit du DSE (dossier social étudiant), qui, une fois déposé, vous permettra peut-être de prétendre à une place dans une résidence universitaire, ainsi qu’à la bourse d’études.\r\n\r\nCependant, ce dossier doit théoriquement être déposé avant le 31 mai qui précède votre rentrée universitaire. Si vous n’avez  pas déposé ce dossier à temps, il est peu probable que vous puissiez vous rattraper, surtout quelques jours avant la rentrée, sans compter que les places sont restreintes, la demande étant toujours plus forte que l’offre dans ce domaine.\r\nSi vous avez fait votre demande dans les délais impartis, le Crous vous envoie alors des papiers à compléter, et votre dossier est validé. Vous saurez alors rapidement si vous pouvez obtenir à la fois une bourse étudiante et/ou un logement en résidence universitaire.', '2019-10-15', 35);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `avatar` varchar(250) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `firstName` varchar(250) NOT NULL,
  `birth_date` date NOT NULL,
  `pseudo` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `e_mail` varchar(250) NOT NULL,
  `adress` text NOT NULL,
  `phoneMobile` varchar(250) NOT NULL,
  `admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `avatar`, `lastName`, `firstName`, `birth_date`, `pseudo`, `password`, `e_mail`, `adress`, `phoneMobile`, `admin`) VALUES
(1, '', 'soniasde', 'soniacvxc', '2019-10-30', 'soniasonia', 'azer', 'soniaaaaa@sonia.com', 'sonia', '09234182', NULL),
(35, '35.jpg', 'cylia', 'cylia', '2019-10-05', 'cylia', 'cylia', 'cylia@cylia.com', 'cyliaxfvw', '098765457', NULL),
(36, '', 'pp', '!lù', '2019-10-02', 'lkm', 'aze', 'cc@cclp.cc', 'mlù', '098765457', NULL),
(37, '37.jpg', 'sonia', 'Sonia', '2019-10-04', 'sonia', 'sonia', 'sonia@sonia.com', 'soniasedg', '098765457', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id_post`);

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
