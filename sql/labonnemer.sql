-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 08 jan. 2020 à 10:11
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`prod_id`, `prod_name`, `prod_origin`, `prod_synopsis`, `prod_description`, `prod_price`, `prod_picture`, `prod_category`) VALUES
(7, 'sardine', 'Vieux port de Marseille', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 10, 'araignee.jpg', ''),
(8, 'canard', 'Estque plage', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 30, 'homard.jpg', ''),
(9, 'langouste', 'Port Miou Miou', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 50, 'langouste.jpg', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
