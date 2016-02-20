-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2016 at 11:42 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `description`) VALUES
(1, 'India', 'News related to India'),
(2, 'Business', 'News related to business and economy of the nation and the world.'),
(3, 'Social Media', 'News and articles related to social media such as Facebook, Twitter etc.'),
(4, 'Sports', 'News related to sports local, national and international.'),
(5, 'World', 'World News '),
(6, 'TV', 'Television Related News'),
(7, 'Food', 'Food Related News'),
(8, 'Bhutan', 'Bhutan related news articles'),
(9, 'Music', 'Music Related News and Articles'),
(10, 'Movies', 'Movies Updates'),
(11, 'Culture', 'News articles related social cultures and festivals');

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
  `author` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `author` (`author`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `slug`, `title`, `news_short`, `news_full`, `created`, `modified`, `author`) VALUES
(2, 'supreme-court-freezes-obamas-climate-change-plan', 'Supreme Court freezes Obama''s climate change plan', '<p>WASHINGTON &mdash;&nbsp;A divided Supreme Court agreed Tuesday to halt enforcement of President Barack Obama&#39;s&nbsp;sweeping plan&nbsp;to address climate change until after legal challenges are resolved.</p>\r\n\r\n<p>The surprising move is a blow to the administration and a victory for the coalition of 27 mostly Republican-led states and industry opponents that call the regulations &quot;an unprecedented power grab.&quot;</p>\r\n', '<p>WASHINGTON &mdash;&nbsp;A divided Supreme Court agreed Tuesday to halt enforcement of President Barack Obama&#39;s&nbsp;sweeping plan&nbsp;to address climate change until after legal challenges are resolved.</p>\r\n\r\n<p>The surprising move is a blow to the administration and a victory for the coalition of 27 mostly Republican-led states and industry opponents that call the regulations &quot;an unprecedented power grab.&quot;</p>\r\n\r\n<p>By temporarily freezing the rule the high court&#39;s order signals that opponents have made a strong argument against the plan, which aims to stave off the worst predicted impacts of climate change by reducing carbon dioxide emissions at existing power plants by about one-third by 2030. A federal appeals court last month refused to put it on hold.</p>\r\n\r\n<p>The appeals court is not likely to issue a ruling on the plan until months after it hears oral arguments begin on June 2. But any decision likely would be appealed to the Supreme Court, meaning resolution of the legal fight is not likely to happen until Obama leaves office.</p>\r\n\r\n<p>The high court&#39;s four liberal justices said Tuesday they would have denied the request for delay.</p>\r\n\r\n<p>Compliance with the new rules isn&#39;t required until 2022, but states must submit their plans to the Environmental Protection Administration by September or seek an extension.</p>\r\n\r\n<blockquote>The legal fight will likely be unresolved when Obama leaves office</blockquote>\r\n\r\n<p>Many states opposing the plan depend on economic activity tied to such fossil fuels as coal, oil and gas. They argued that power plants will have to spend billions of dollars to begin complying with a rule that may end up being overturned.</p>\r\n\r\n<p>Attorney General Patrick Morrisey of West Virginia, whose coal-dependent state is helping lead the legal fight, hailed the court&#39;s decision.</p>\r\n\r\n<p>&quot;We are thrilled that the Supreme Court realized the rule&#39;s immediate impact and froze its implementation, protecting workers and saving countless dollars as our fight against its legality continues,&quot; Morrisey said.</p>\r\n\r\n<p>Implementation of the rules is considered essential to the United States meeting emissions-reduction targets in a&nbsp;global climate agreement&nbsp;signed in Paris last month. The Obama administration and environmental groups also say the plan will spur new clean-energy jobs.</p>\r\n\r\n<p>To convince the high court to temporarily halt the plan, opponents had to convince the justices that there was a &quot;fair prospect&quot; the court would strike down the rule. The court also had to consider whether denying a stay would cause irreparable harm to the states and utility companies affected.</p>\r\n\r\n<p><em>Have something to add to this story? Share it in the comments.</em></p>\r\n', '0000-00-00 00:00:00', NULL, 1),
(4, 'supreme-court-freezes-obamas-climate', 'Supreme Court freezes Obama''s climate ', '<p>Supreme Court freezes Obama&#39;s climate change plan&nbsp;Supreme Court freezes Obama&#39;s climate change plan&nbsp;Supreme Court freezes Obama&#39;s climate change plan&nbsp;Supreme Court freezes Obama&#39;s climate change plan&nbsp;Supreme Court freezes Obama&#39;s climate change plan&nbsp;Supreme Court freezes Obama&#39;s climate change&nbsp;</p>\r\n', '<p>Supreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change plan</p>\r\n', '0000-00-00 00:00:00', NULL, 1),
(5, 'first-news-on-bharatbhutan', 'First News on Bharatbhutan', 'First News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on Bhar', '<p>First News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on BharatbhutanFirst News on Bharatbhutan</p>\r\n', '2016-02-20 10:03:43', NULL, 1),
(6, 'migrant-crisis-24-dead-off-turkey-as-boat-sinks', 'Migrant crisis: ''24 dead'' off Turkey as boat sinks', 'Migrant crisis: ''24 dead'' off Turkey as boat sinksMigrant crisis: ''24 dead'' off Turkey as boat sinksMigrant crisis: ''24 dead'' off Turkey as boat sinksMigrant crisis: ''24 dead'' off Turkey as boat sinks', '<p>Migrant crisis: &#39;24 dead&#39; off Turkey as boat sinksMigrant crisis: &#39;24 dead&#39; off Turkey as boat sinksMigrant crisis: &#39;24 dead&#39; off Turkey as boat sinksMigrant crisis: &#39;24 dead&#39; off Turkey as boat sinksMigrant crisis: &#39;24 dead&#39; off Turkey as boat sinksMigrant crisis: &#39;24 dead&#39; off Turkey as boat sinksMigrant crisis: &#39;24 dead&#39; off Turkey as boat sinksMigrant crisis: &#39;24 dead&#39; off Turkey as boat sinksMigrant crisis: &#39;24 dead&#39; off Turkey as boat sinksMigrant crisis: &#39;24 dead&#39; off Turkey as boat sinksMigrant crisis: &#39;24 dead&#39; off Turkey as boat sinksMigrant crisis: &#39;24 dead&#39; off Turkey as boat sinksMigrant crisis: &#39;24 dead&#39; off Turkey as boat sinksMigrant crisis: &#39;24 dead&#39; off Turkey as boat sinksMigrant crisis: &#39;24 dead&#39; off Turkey as boat sinksMigrant crisis: &#39;24 dead&#39; off Turkey as boat sinksMigrant crisis: &#39;24 dead&#39; off Turkey as boat sinksMigrant crisis: &#39;24 dead&#39; off Turkey as boat sinksMigrant crisis: &#39;24 dead&#39; off Turkey as boat sinksMigrant crisis: &#39;24 dead&#39; off Turkey as boat sinksMigrant crisis: &#39;24 dead&#39; off Turkey as boat sinksMigrant crisis: &#39;24 dead&#39; off Turkey as boat sinksMigrant crisis: &#39;24 dead&#39; off Turkey as boat sinks</p>\r\n', '2016-02-20 10:06:46', NULL, 1),
(7, 'somalia-drought-leaves', 'Somalia drought leaves ', '           Somalia drought leaves      ', '<p>Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;Somalia drought leaves&nbsp;</p>\r\n', '2016-02-20 10:07:32', NULL, 1),
(8, 'news-on-bhutan', 'News on Bhutan', 'BHutan News Demo                ', '<p>BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BHutan News Demo &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>\r\n', '2016-02-20 10:22:09', NULL, 1),
(9, 'test-article', 'Test Article', '                Test Article', '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Test Article&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Test Article&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Test Article&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Test Article</p>\r\n', '2016-02-20 10:38:50', NULL, 1),
(11, 'test-articleasdfasdfasdf', 'Test Articleasdfasdfasdf', '                Test Articleasdfasd', '<p>asdfasdfasdf &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Test Article&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Test Article</p>\r\n', '2016-02-20 10:39:54', NULL, 1);

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
(11, 1);

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
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, 'IlgdqwzwMHTwwvaCkTjMCO', 1268889823, 1455957443, 1, 'Admin', 'istrator', 'ADMIN', '0'),
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
-- Constraints for table `news_category`
--
ALTER TABLE `news_category`
  ADD CONSTRAINT `news_category_ibfk_2` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `news_category_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
