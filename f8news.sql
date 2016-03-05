-- phpMyAdmin SQL Dump
-- version 4.4.15.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2016 at 08:05 AM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `f8news`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` bigint(11) NOT NULL,
  `category_name` varchar(20) NOT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

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
  `gallery_id` bigint(20) unsigned NOT NULL,
  `gallery_name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `description` text CHARACTER SET latin1 NOT NULL,
  `author` int(11) unsigned NOT NULL,
  `created_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_on` timestamp NULL DEFAULT NULL,
  `images` varchar(5000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gallery_name`, `description`, `author`, `created_on`, `modified_on`, `images`) VALUES
(5, 'animals', 'Some Pics of Cute Animals', 1, '2016-02-28 05:58:22', NULL, '5_0.jpg,5_1.jpg,5_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

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
  `id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` bigint(20) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `news_short` varchar(500) NOT NULL,
  `news_full` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` timestamp NULL DEFAULT NULL,
  `author` int(11) unsigned NOT NULL,
  `images` varchar(2000) DEFAULT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'Publishing State of News Articles'
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `slug`, `title`, `news_short`, `news_full`, `created`, `modified`, `author`, `images`, `publish`) VALUES
(18, 'kanhaiya-kumar-released-from-tihar', 'Kanhaiya Kumar released from Tihar', 'A Delhi court ordered the JNUSU president''s release after he furnished bail bond and a JNU professor stood as surety for him.', '<p>The Delhi Police and Tihar Jail authorities worked in close coordination on Thursday to ensure a secret release of JNUSU president and sedition accused Kanhaiya Kumar from the prison after he was granted a six-month interim bail by High Court on Wednesday.</p>\r\n\r\n<p>Sources said Mr. Kumar was escorted by three police vehicles. He would be dropped to a place of his choice, said a senior police officer soon after his release.</p>\r\n\r\n<p>Police had beefed up security outside the three gates of Tihar Jail since afternoon. This was to confuse the media as well as any possible miscreants about the possible exit routes.</p>\r\n\r\n<p>It turned out that that Mr. Kumar was taken out of jail premises through a residential colony for prison staff. He was then driven to Hari Nagar police station without the media getting even a sniff of the developments. From there, three police vehicles escorted him.</p>\r\n\r\n<p>Heavy security arrangements were in place because of court orders as well as the threat perception on Mr. Kumar&#39;s release. He has already been assaulted, allegedly by a group of lawyers, at the Patiala House Court premises a few days ago.</p>\r\n\r\n<p>Earlier, a court in New Delhi ordered release of the JNUSU president from the Tihar jail after he furnished bail bond of Rs. 10,000 in the sedition case, a day after he was granted six months&rsquo; interim bail by the Delhi High Court.</p>\r\n\r\n<p>According to the sources, the magistrate accepted his bail bond and orderded his release from jail.</p>\r\n\r\n<p>Sources said that he furnished a personal bond of Rs 10,000 and one surety of the like amount as directed by the High Court on Wednesday.</p>\r\n\r\n<p>A faculty member of the Jawaharlal Nehru University (JNU), Professor S.N. Malakar, stood surety for him.</p>\r\n\r\n<p>Mr. Kumar was granted interim bail for six months by high court which had observed that FIR lodged in connection with an on-campus event that led to his arrest on sedition charge suggested it &ldquo;is a case of raising anti&mdash;national slogans which do have the effect of threatening national integrity&ldquo;.</p>\r\n\r\n<p>He was arrested on February 12 in the case in which he and others, including two arrested JNU students Umar Khalid and Anirban Bhattacharya, are accused of raising anti&mdash;India slogans during an event organised inside the JNU campus on February 9.</p>\r\n\r\n<p>The two other students who were arrested are presently in judicial custody.</p>\r\n\r\n<p><em>(with inputs from PTI)</em></p>\r\n', '2016-03-03 18:09:21', NULL, 1, 'news_18_0.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE IF NOT EXISTS `news_category` (
  `news_id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`news_id`, `category_id`) VALUES
(18, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL,
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
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, 'cIZPc3vhpuX07nuqXTia0e', 1268889823, 1457144837, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '::1', NULL, '$2y$08$7kjXO3aQj8iZnrr7XPnXb.br7BNK8tTxaAJhOvMtLh2p2NM2MNwlK', NULL, 'rabidassanjay@gmail.com', NULL, NULL, NULL, NULL, 1454910020, NULL, 1, 'Sanjay', 'Rabidas', NULL, '9545142899'),
(3, '::1', NULL, '$2y$08$fM9KEF7S1XvJKbil0CSWJ.2ymld6IWDVUsgrUvz/As72z1Xugxk/G', NULL, 'test@bharatbhutan.com', NULL, NULL, NULL, NULL, 1455957292, 1455957317, 1, 'Test', 'User', NULL, '1234567899');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

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
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `idx_cat_name` (`category_name`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`),
  ADD KEY `author` (`author`) USING BTREE;

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `author` (`author`);

--
-- Indexes for table `news_category`
--
ALTER TABLE `news_category`
  ADD PRIMARY KEY (`news_id`,`category_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` bigint(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
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
