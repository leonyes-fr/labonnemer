-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 08 jan. 2020 à 12:49
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
-- Base de données :  `labonnemer`
--

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `car_id` int(10) NOT NULL AUTO_INCREMENT,
  `car_cust_id` int(10) NOT NULL,
  `car_prod_id` int(10) NOT NULL,
  `car_prod_quantity` int(10) NOT NULL,
  `car_prod_price` int(10) NOT NULL,
  `car_status` varchar(50) NOT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `cust_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cust_lastname` varchar(100) DEFAULT NULL,
  `cust_firstname` varchar(100) DEFAULT NULL,
  `cust_password` varchar(255) DEFAULT NULL,
  `cust_email` varchar(255) DEFAULT NULL,
  `cust_phone` varchar(30) DEFAULT NULL,
  `cust_address` varchar(255) DEFAULT NULL,
  `cust_postal_code` varchar(10) DEFAULT NULL,
  `cust_city` varchar(255) DEFAULT NULL,
  `cust_country` varchar(255) DEFAULT NULL,
  `cust_created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `prod_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(255) DEFAULT NULL,
  `prod_origin` varchar(100) NOT NULL,
  `prod_synopsis` text NOT NULL,
  `prod_description` text,
  `prod_price` double UNSIGNED DEFAULT NULL,
  `prod_picture` varchar(255) DEFAULT NULL,
  `prod_category` varchar(100) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`prod_id`, `prod_name`, `prod_origin`, `prod_synopsis`, `prod_description`, `prod_price`, `prod_picture`, `prod_category`) VALUES
(7, 'Araignée de mer marine', 'Dans un coin de la mer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 15, '1araignee.jpg', '1'),
(8, 'Homard', 'Plage des catalans', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 40, '1homard.jpg', '1'),
(9, 'Langouste', 'Port Miou Miou', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 50, '1langouste.jpg', '1'),
(10, 'Pince de Tourteau', 'Le panier de Marseille', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 10, '1pincetourteau.jpg', '1'),
(11, 'Tourteaux entier en morceaux', 'Iles du frioul', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 27, '1tourteaux.jpg', '1'),
(12, 'Bigorneaux', 'Iles du plantier', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 14, '2bigorneaux.jpg', '2'),
(13, 'c Bulots', 'Port Miou Miou', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 39, '2bulots.jpg', '2'),
(14, 'Crevettes Grises', 'Large de la méditerranée.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 10, '2crevettesgrises.jpg', '2'),
(15, 'Crevettes Roses', 'Large des Iles du Frioul', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 24, '2crevettesroses.jpg', '2'),
(16, 'Coquilles saint jacques', 'Estaque plage Nord', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 48, '2saintjacques.jpg', '2'),
(17, 'Court bouillon', 'Port Miou Miou sud', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 16, '3courtbouillon.jpg', '3'),
(18, 'Soupe de poisson entiers.', 'Vieux port de Marseille', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 10, '3poissonentiersoupe.jpg', '3'),
(19, 'Soupe extra de poisson frais', 'Vieux port de Marseille', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 34, '3poissonsoupe.jpg', '3'),
(20, 'Rillete de Homard', 'Plages de Montredon', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 42, '3rillettehomard.jpg', '3'),
(21, 'Salicorne', 'Port de Sormiou', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 50, '3salicorne.jpg', '3'),
(22, 'Sel de la pointe rouge', 'Port de la pointe rouge', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 7, '3sel.jpg', '3'),
(23, 'Bière de Ricard', 'Chateau Ricard de Cassis 1983', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 6, '4biere.jpg', '4'),
(24, 'Classique parmi les classiques.', 'Chateau Ricard de Cassis 1983', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 10, '4classique.jpg', '4'),
(25, 'Cubis', 'Chateau Ricard de Cassis 1983', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 89, '4cubis.jpg', '4'),
(26, 'LE DOUBLE !', 'Chateau Ricard de Cassis 1983', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 17, '4double.jpg', '4'),
(27, 'Ricard aux herbes de Provence', 'Chateau Ricard de Cassis 1983', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 50, '4herbe.jpg', '4'),
(28, 'Ricard en terrasse', 'Chateau Ricard de Cassis 1983', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 2, '4terrasse.jpg', '4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
