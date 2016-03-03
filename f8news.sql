-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2016 at 04:52 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `f8news`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` bigint(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(20) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `idx_cat_name` (`category_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `description`) VALUES
(1, 'India', 'News related to India'),
(12, 'Bhutan', 'News articles related to Royal Bhutan'),
(13, 'World', 'News related to business and economy of the nation and the world.'),
(14, 'Sports', 'News related to sports.'),
(15, 'Local', 'Local Regional News and Articles'),
(16, 'Business', 'News related to business and economy.');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `gallery_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `gallery_name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `description` text CHARACTER SET latin1 NOT NULL,
  `author` int(11) unsigned NOT NULL,
  `created_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_on` timestamp NULL DEFAULT NULL,
  `images` varchar(5000) NOT NULL,
  PRIMARY KEY (`gallery_id`),
  KEY `author` (`author`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gallery_name`, `description`, `author`, `created_on`, `modified_on`, `images`) VALUES
(5, 'animals', 'Some Pics of Cute Animals', 1, '2016-02-28 05:58:22', NULL, '5_0.jpg,5_1.jpg,5_2.jpg'),
(6, 'More Animals', 'Some More Cute Animals', 1, '2016-02-28 06:02:21', NULL, '6_0.jpg,6_1.jpg,6_2.jpg'),
(7, 'More Animals', 'Some More Cute Animals', 1, '2016-03-03 11:09:32', NULL, '7_0.jpg,7_1.jpg,7_2.jpg,7_3.jpg,7_4.jpg,7_5.jpg,7_6.jpg,7_7.jpg,7_8.jpg,7_9.jpg,7_10.jpg,7_11.jpg,7_12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'System Administrator'),
(2, 'members', 'General User'),
(3, 'Editor', 'News Editors');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `slug` varchar(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `news_short` varchar(500) NOT NULL,
  `news_full` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` timestamp NULL DEFAULT NULL,
  `author` int(11) unsigned NOT NULL,
  `images` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `author` (`author`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `slug`, `title`, `news_short`, `news_full`, `created`, `modified`, `author`, `images`) VALUES
(13, 'supreme-court-freezes-obamas-climate', 'Supreme Court freezes Obama''s climate ', 'Supreme Court freezes Obama''s climate Supreme Court freezes Obama''s climate Supreme Court freezes Obama''s climate Supreme Court freezes Obama''s climate Supreme Court freezes Obama''s climate Supreme', '<p>Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;</p>\r\n\r\n<p>Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;</p>\r\n\r\n<blockquote>\r\n<p>Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;</p>\r\n</blockquote>\r\n\r\n<p>Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;</p>\r\n\r\n<p>Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;</p>\r\n\r\n<p>Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;Supreme Court freezes Obama&#39;s climate&nbsp;</p>\r\n', '2016-02-25 16:17:08', NULL, 1, ''),
(17, 'first-news-on-bharatbhutanharatbhutan', 'First News on Bharatbhutanharatbhutan', 'First News on Bhutanharatbhutanharatbhutanharatbhutanharatbhutan', '<p>Hello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutan</p>\r\n\r\n<blockquote>\r\n<p>Hello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutan</p>\r\n</blockquote>\r\n\r\n<p>Hello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutanHello bhutan&nbsp;</p>\r\n', '2016-02-28 14:11:27', NULL, 1, 'news_17_0.JPG'),
(18, 'kanhaiya-kumar-released-from-tihar', 'Kanhaiya Kumar released from Tihar', 'Kanhaiya Kumar released from Tihar', '<p>The Delhi Police and Tihar Jail authorities worked in close coordination on Thursday to ensure a secret release of JNUSU president and sedition accused Kanhaiya Kumar from the prison after he was granted a six-month interim bail by High Court on Wednesday. Sources said Mr. Kumar was escorted by three police vehicles. He would be dropped to a place of his choice, said a senior police officer soon after his release. Police had beefed up security outside the three gates of Tihar Jail since afternoon. This was to confuse the media as well as any possible miscreants about the possible exit routes. It turned out that that Mr. Kumar was taken out of jail premises through a residential colony for prison staff. He was then driven to Hari Nagar police station without the media getting even a sniff of the developments. From there, three police vehicles escorted him. Heavy security arrangements were in place because of court orders as well as the threat perception on Mr. Kumar&#39;s release. He has already been assaulted, allegedly by a group of lawyers, at the Patiala House Court premises a few days ago.</p>\r\n', '2016-03-03 15:51:27', NULL, 1, 'news_18_0.jpg,news_18_1.jpg,news_18_2.jpg,news_18_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE IF NOT EXISTS `news_category` (
  `news_id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  PRIMARY KEY (`news_id`,`category_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`news_id`, `category_id`) VALUES
(18, 1),
(17, 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, 'cIZPc3vhpuX07nuqXTia0e', 1268889823, 1457019149, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '::1', NULL, '$2y$08$7kjXO3aQj8iZnrr7XPnXb.br7BNK8tTxaAJhOvMtLh2p2NM2MNwlK', NULL, 'rabidassanjay@gmail.com', NULL, NULL, NULL, NULL, 1454910020, NULL, 1, 'Sanjay', 'Rabidas', NULL, '9545142899'),
(3, '::1', NULL, '$2y$08$fM9KEF7S1XvJKbil0CSWJ.2ymld6IWDVUsgrUvz/As72z1Xugxk/G', NULL, 'test@bharatbhutan.com', NULL, NULL, NULL, NULL, 1455957292, 1455957317, 1, 'Test', 'User', NULL, '1234567899');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(7, 2, 1),
(8, 2, 2),
(9, 2, 3),
(10, 3, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`author`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `news_category`
--
ALTER TABLE `news_category`
  ADD CONSTRAINT `news_category_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `news_category_ibfk_2` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
