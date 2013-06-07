-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2013 at 02:02 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rdbeportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tax_exemption_items`
--

CREATE TABLE IF NOT EXISTS `tax_exemption_items` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tax_details_id` bigint(20) NOT NULL,
  `rdb` tinyint(1) DEFAULT NULL,
  `rra` tinyint(1) DEFAULT NULL,
  `hs_code` bigint(20) DEFAULT NULL,
  `description` text,
  `cif` bigint(20) DEFAULT NULL,
  `quantity` bigint(20) DEFAULT NULL,
  `import_duties` bigint(20) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` text,
  PRIMARY KEY (`id`),
  KEY `tax_details_id_idx` (`tax_details_id`),
  KEY `created_by_idx` (`created_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tax_exemption_items`
--

INSERT INTO `tax_exemption_items` (`id`, `tax_details_id`, `rdb`, `rra`, `hs_code`, `description`, `cif`, `quantity`, `import_duties`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, 0, 0, 16034354, 'Extracts and juices of meat', 1000, 1000, 52, '2013-04-07 09:59:01', '2013-04-07 09:59:06', NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tax_exemption_items`
--
ALTER TABLE `tax_exemption_items`
  ADD CONSTRAINT `tax_exemption_items_created_by_sf_guard_user_id` FOREIGN KEY (`created_by`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tax_exemption_items_tax_details_id_tax_exemption_details_id` FOREIGN KEY (`tax_details_id`) REFERENCES `tax_exemption_details` (`id`) ON DELETE CASCADE;
