-- MySQL dump 10.13  Distrib 5.5.47, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: f8news
-- ------------------------------------------------------
-- Server version	5.5.47-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `category_id` bigint(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(20) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `idx_cat_name` (`category_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'India','News related to India'),(2,'Business','News related to business and economy of the nation and the world.'),(3,'Social Media','News and articles related to social media such as Facebook, Twitter etc.'),(4,'Sports','News related to sports.');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'admin','System Administrator'),(2,'members','General User'),(3,'Editor','News Editors');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_attempts`
--

LOCK TABLES `login_attempts` WRITE;
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (2,'supreme-court-freezes-obamas-climate-change-plan','Supreme Court freezes Obama\'s climate change plan','<p>WASHINGTON &mdash;&nbsp;A divided Supreme Court agreed Tuesday to halt enforcement of President Barack Obama&#39;s&nbsp;sweeping plan&nbsp;to address climate change until after legal challenges are resolved.</p>\r\n\r\n<p>The surprising move is a blow to the administration and a victory for the coalition of 27 mostly Republican-led states and industry opponents that call the regulations &quot;an unprecedented power grab.&quot;</p>\r\n','<p>WASHINGTON &mdash;&nbsp;A divided Supreme Court agreed Tuesday to halt enforcement of President Barack Obama&#39;s&nbsp;sweeping plan&nbsp;to address climate change until after legal challenges are resolved.</p>\r\n\r\n<p>The surprising move is a blow to the administration and a victory for the coalition of 27 mostly Republican-led states and industry opponents that call the regulations &quot;an unprecedented power grab.&quot;</p>\r\n\r\n<p>By temporarily freezing the rule the high court&#39;s order signals that opponents have made a strong argument against the plan, which aims to stave off the worst predicted impacts of climate change by reducing carbon dioxide emissions at existing power plants by about one-third by 2030. A federal appeals court last month refused to put it on hold.</p>\r\n\r\n<p>The appeals court is not likely to issue a ruling on the plan until months after it hears oral arguments begin on June 2. But any decision likely would be appealed to the Supreme Court, meaning resolution of the legal fight is not likely to happen until Obama leaves office.</p>\r\n\r\n<p>The high court&#39;s four liberal justices said Tuesday they would have denied the request for delay.</p>\r\n\r\n<p>Compliance with the new rules isn&#39;t required until 2022, but states must submit their plans to the Environmental Protection Administration by September or seek an extension.</p>\r\n\r\n<blockquote>The legal fight will likely be unresolved when Obama leaves office</blockquote>\r\n\r\n<p>Many states opposing the plan depend on economic activity tied to such fossil fuels as coal, oil and gas. They argued that power plants will have to spend billions of dollars to begin complying with a rule that may end up being overturned.</p>\r\n\r\n<p>Attorney General Patrick Morrisey of West Virginia, whose coal-dependent state is helping lead the legal fight, hailed the court&#39;s decision.</p>\r\n\r\n<p>&quot;We are thrilled that the Supreme Court realized the rule&#39;s immediate impact and froze its implementation, protecting workers and saving countless dollars as our fight against its legality continues,&quot; Morrisey said.</p>\r\n\r\n<p>Implementation of the rules is considered essential to the United States meeting emissions-reduction targets in a&nbsp;global climate agreement&nbsp;signed in Paris last month. The Obama administration and environmental groups also say the plan will spur new clean-energy jobs.</p>\r\n\r\n<p>To convince the high court to temporarily halt the plan, opponents had to convince the justices that there was a &quot;fair prospect&quot; the court would strike down the rule. The court also had to consider whether denying a stay would cause irreparable harm to the states and utility companies affected.</p>\r\n\r\n<p><em>Have something to add to this story? Share it in the comments.</em></p>\r\n','0000-00-00 00:00:00',NULL,1),(4,'supreme-court-freezes-obamas-climate','Supreme Court freezes Obama\'s climate ','<p>Supreme Court freezes Obama&#39;s climate change plan&nbsp;Supreme Court freezes Obama&#39;s climate change plan&nbsp;Supreme Court freezes Obama&#39;s climate change plan&nbsp;Supreme Court freezes Obama&#39;s climate change plan&nbsp;Supreme Court freezes Obama&#39;s climate change plan&nbsp;Supreme Court freezes Obama&#39;s climate change&nbsp;</p>\r\n','<p>Supreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change planSupreme Court freezes Obama&#39;s climate change plan</p>\r\n','0000-00-00 00:00:00',NULL,1);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news_category`
--

DROP TABLE IF EXISTS `news_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news_category` (
  `news_id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  PRIMARY KEY (`news_id`,`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_category`
--

LOCK TABLES `news_category` WRITE;
/*!40000 ALTER TABLE `news_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `news_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'127.0.0.1','administrator','$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36','','admin@admin.com','',NULL,NULL,'IlgdqwzwMHTwwvaCkTjMCO',1268889823,1455569403,1,'Admin','istrator','ADMIN','0'),(2,'::1',NULL,'$2y$08$7kjXO3aQj8iZnrr7XPnXb.br7BNK8tTxaAJhOvMtLh2p2NM2MNwlK',NULL,'rabidassanjay@gmail.com',NULL,NULL,NULL,NULL,1454910020,NULL,1,'Sanjay','Rabidas',NULL,'9545142899');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_groups`
--

LOCK TABLES `users_groups` WRITE;
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` VALUES (1,1,1),(2,1,2),(7,2,1),(8,2,2),(9,2,3);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-16  8:21:01
