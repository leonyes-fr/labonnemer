-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 07 jan. 2020 à 19:04
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
-- Structure de la table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `ord_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ord_date` datetime DEFAULT NULL,
  `ord_status` int(11) NOT NULL DEFAULT '0',
  `ord_datePayment` date DEFAULT NULL,
  `ord_dateShipped` date DEFAULT NULL,
  `ord_comment` text,
  `customer_cust_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`ord_id`),
  KEY `fk_order_customer_idx` (`customer_cust_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `orderdetail`
--

DROP TABLE IF EXISTS `orderdetail`;
CREATE TABLE IF NOT EXISTS `orderdetail` (
  `ordd_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ordd_quantity` int(11) DEFAULT NULL,
  `ordd_price` double DEFAULT NULL,
  `order_ord_id` int(10) UNSIGNED NOT NULL,
  `product_prod_id` int(10) UNSIGNED NOT NULL,
  `productvariation_prodv_id` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`ordd_id`),
  KEY `fk_orderDetail_order1_idx` (`order_ord_id`),
  KEY `fk_orderDetail_product1_idx` (`product_prod_id`),
  KEY `fk_orderdetail_productvariation1_idx` (`productvariation_prodv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `prod_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(255) DEFAULT NULL,
  `prod_description` text,
  `prod_price` double UNSIGNED DEFAULT NULL,
  `prod_tva` float UNSIGNED NOT NULL DEFAULT '20',
  `prod_picture` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`prod_id`, `prod_name`, `prod_description`, `prod_price`, `prod_tva`, `prod_picture`) VALUES
(7, 'sardine', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 10, 20, 'araignee.jpg'),
(8, 'canard', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 30, 20, 'homard.jpg'),
(9, 'langouste', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique odio recusandae ratione inventore sunt. Doloribus exercitationem possimus iste, quis sit at fuga, commodi assumenda delectus similique hic, a fugiat.', 50, 20, 'langouste.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `productvariation`
--

DROP TABLE IF EXISTS `productvariation`;
CREATE TABLE IF NOT EXISTS `productvariation` (
  `prodv_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `prodv_name` varchar(255) DEFAULT NULL,
  `prodv_price` double DEFAULT NULL,
  `prodv_quantity` int(11) DEFAULT NULL,
  `product_prod_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`prodv_id`),
  KEY `fk_productVariation_product1_idx` (`product_prod_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_order_customer` FOREIGN KEY (`customer_cust_id`) REFERENCES `customer` (`cust_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `fk_orderDetail_order1` FOREIGN KEY (`order_ord_id`) REFERENCES `order` (`ord_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_orderDetail_product1` FOREIGN KEY (`product_prod_id`) REFERENCES `product` (`prod_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_orderdetail_productvariation1` FOREIGN KEY (`productvariation_prodv_id`) REFERENCES `productvariation` (`prodv_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `productvariation`
--
ALTER TABLE `productvariation`
  ADD CONSTRAINT `fk_productVariation_product1` FOREIGN KEY (`product_prod_id`) REFERENCES `product` (`prod_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
