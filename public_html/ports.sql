-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 25, 2016 at 09:50 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ports`
--

-- --------------------------------------------------------

--
-- Table structure for table `aauth_groups`
--

CREATE TABLE IF NOT EXISTS `aauth_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `definition` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `aauth_groups`
--

INSERT INTO `aauth_groups` (`id`, `name`, `definition`) VALUES
(1, 'Admin', 'Super Admin Group'),
(2, 'Public', 'Public Access Group'),
(3, 'Default', 'Default Access Group');

-- --------------------------------------------------------

--
-- Table structure for table `aauth_perms`
--

CREATE TABLE IF NOT EXISTS `aauth_perms` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `definition` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `aauth_perm_to_group`
--

CREATE TABLE IF NOT EXISTS `aauth_perm_to_group` (
  `perm_id` int(11) unsigned NOT NULL DEFAULT '0',
  `group_id` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`perm_id`,`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aauth_perm_to_user`
--

CREATE TABLE IF NOT EXISTS `aauth_perm_to_user` (
  `perm_id` int(11) unsigned NOT NULL DEFAULT '0',
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`perm_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aauth_pms`
--

CREATE TABLE IF NOT EXISTS `aauth_pms` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) unsigned NOT NULL,
  `receiver_id` int(11) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text,
  `date_sent` datetime DEFAULT NULL,
  `date_read` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `full_index` (`id`,`sender_id`,`receiver_id`,`date_read`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `aauth_system_variables`
--

CREATE TABLE IF NOT EXISTS `aauth_system_variables` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `data_key` varchar(100) NOT NULL,
  `value` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `aauth_users`
--

CREATE TABLE IF NOT EXISTS `aauth_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `pass` varchar(64) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `other_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `banned` tinyint(1) DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `last_activity` datetime DEFAULT NULL,
  `last_login_attempt` datetime DEFAULT NULL,
  `forgot_exp` text,
  `remember_time` datetime DEFAULT NULL,
  `remember_exp` text,
  `verification_code` text,
  `totp_secret` varchar(16) DEFAULT NULL,
  `ip_address` text,
  `login_attempts` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `aauth_users`
--

INSERT INTO `aauth_users` (`id`, `email`, `pass`, `name`, `last_name`, `first_name`, `other_name`, `address`, `phone`, `company_name`, `banned`, `last_login`, `last_activity`, `last_login_attempt`, `forgot_exp`, `remember_time`, `remember_exp`, `verification_code`, `totp_secret`, `ip_address`, `login_attempts`) VALUES
(1, 'admin@example.com', 'dd5073c93fb477a167fd69072e95455834acd93df8fed41a2c468c45b394bfe3', 'Admin', 'Doe', 'John', 'Test', 'Silicon Valley', '08062457326', 'ShareQube', 0, NULL, NULL, '2016-04-21 20:00:00', NULL, NULL, NULL, '', NULL, NULL, 3),
(2, 'matrix4u2002@gmail.com', 'c91a337187d493c38ce1b07433bfb4261d11000002b05a40c0bfd661bf184e18', 'further', 'Onuwa', 'Nnachi ', 'Isaac', '#9 Ezinho Ihunwo Close, Ogbatai, Port Harcourt', '08062457326', 'ShareQube', 0, '2016-04-25 05:54:55', '2016-04-25 05:54:55', '2016-04-25 05:00:00', NULL, NULL, NULL, '', NULL, '::1', NULL),
(3, 'demo@email.com', 'd4cf951e9f92ee7b6243f1d7958442323d1f6e4ce341e0a1cdf34da8c40108b8', 'demo', 'Doe', 'Jane', 'Demo', '#9 Ezinho Ihunwo Close, Ogbatai, Woji, Port Harcourt', '08062457326', 'ShareQube', 0, '2016-04-25 07:18:58', '2016-04-25 07:18:58', '2016-04-25 07:00:00', NULL, NULL, NULL, '', NULL, '127.0.0.1', NULL),
(4, 'demo_john@email.com', '8900fb4d8eb2120c1df4154db296afaf0beb8a63c4204eaf268f0f63bf16d5f0', 'demojohn', 'Doe', 'John', 'Demo', '', '', '', 1, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 0),
(5, 'egoodluck@live.com', 'd990a5cc38c8de44e1ef0085f1277e3706db2c114e9a20e4bac9b6b7c885251f', 'egoodluck1', 'Emereonye', 'Goodluck', 'Ikwudiuto', '', '', '', 0, '2016-04-25 03:39:03', '2016-04-25 03:39:03', '2016-04-25 03:00:00', NULL, NULL, NULL, NULL, NULL, '127.0.0.1', NULL),
(6, 'giemereonye@gmail.com', '0b5758740f60a30779ab82ac69eeae59d3672814868cb2c118588e2c86c76cab', 'chibuzo', 'Ukegbu', 'Chibuzo', 'C', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(7, 'nobleman@gmail.com', 'c82df20f8e8e72bfcb378fb0d6deec63c9f46f607403cf94788a93888cc4336a', 'udobenji', 'Nwahele', 'Noble', 'Udo', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(8, 'elizbest@rocketmail.com', '072f977c50614be1596e8875b6b72bfcd3b92bd8267473d4d10e0694d2df9895', 'elizbest', 'Ogenyi', 'Elizabeth', 'Ori', '', '', '', 0, '2016-04-25 03:53:42', '2016-04-25 03:53:42', '2016-04-25 03:00:00', NULL, NULL, NULL, NULL, NULL, '::1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `aauth_user_to_group`
--

CREATE TABLE IF NOT EXISTS `aauth_user_to_group` (
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `group_id` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`,`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aauth_user_to_group`
--

INSERT INTO `aauth_user_to_group` (`user_id`, `group_id`) VALUES
(1, 1),
(2, 1),
(3, 3),
(4, 2),
(5, 1),
(6, 1),
(7, 2),
(8, 3);

-- --------------------------------------------------------

--
-- Table structure for table `aauth_user_variables`
--

CREATE TABLE IF NOT EXISTS `aauth_user_variables` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `data_key` varchar(100) NOT NULL,
  `value` text,
  PRIMARY KEY (`id`),
  KEY `user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bill_of_entry`
--

CREATE TABLE IF NOT EXISTS `bill_of_entry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `container_id` varchar(25) NOT NULL,
  `ship_name` varchar(200) NOT NULL,
  `ship_desc` varchar(200) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Pending',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bill_of_entry`
--

INSERT INTO `bill_of_entry` (`id`, `user_id`, `container_id`, `ship_name`, `ship_desc`, `quantity`, `weight`, `status`, `date_created`, `last_update`, `deleted`) VALUES
(1, 3, 'KFDSKFKNI', 'JASCON 25', 'dsgdf', '50', '4324', 'Pending', '2016-04-25 06:06:50', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cargo_pass`
--

CREATE TABLE IF NOT EXISTS `cargo_pass` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `container_id` varchar(20) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `container`
--

CREATE TABLE IF NOT EXISTS `container` (
  `container_id` int(11) NOT NULL AUTO_INCREMENT,
  `container_name` varchar(255) NOT NULL,
  `ship_name` varchar(255) NOT NULL,
  `container_size` varchar(20) NOT NULL,
  `location` varchar(200) NOT NULL,
  `owner` int(11) NOT NULL,
  `services` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`container_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `container`
--

INSERT INTO `container` (`container_id`, `container_name`, `ship_name`, `container_size`, `location`, `owner`, `services`, `date_created`, `last_update`) VALUES
(1, 'X023-SDSD-4-323', 'JASCON 25', '40', 'PORT OF HARBOUR', 3, 'HAULAGE, STORAGE', '2016-04-25 05:12:30', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_order`
--

CREATE TABLE IF NOT EXISTS `delivery_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` varchar(250) NOT NULL,
  `ship_name` varchar(250) NOT NULL,
  `arrival_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `container_id` varchar(25) NOT NULL,
  `exporter` varchar(250) NOT NULL,
  `delivery_terminal` varchar(250) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tally`
--

CREATE TABLE IF NOT EXISTS `tally` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `container_id` varchar(20) NOT NULL,
  `status` varchar(200) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tally`
--

INSERT INTO `tally` (`id`, `container_id`, `status`, `date_created`, `last_update`, `deleted`) VALUES
(1, 'X023-SDSD-4-323', 'Cleared', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
