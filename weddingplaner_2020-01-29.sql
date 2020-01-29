# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 192.168.10.10 (MySQL 5.7.27-0ubuntu0.18.04.1)
# Datenbank: weddingplaner
# Erstellt am: 2020-01-29 13:43:34 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Export von Tabelle blogs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `blogs`;

CREATE TABLE `blogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;

INSERT INTO `blogs` (`id`, `title`, `text`, `is_published`, `user_id`, `created_at`, `updated_at`)
VALUES
	(3,'Wie plant man eine Hochzeit?','Also, dann legen wir mal los, wie plant man am besten die eigene Traumhochzeit, wenn man auf einen Wedding Planner à la Froonck verzichten möchte? Die Vorbereitung des eigenen Hochzeitstages soll ja zudem auch bitte nicht nur mit Stress verbunden werden, sondern auch Freude bringen. Genießt auch die kleinen Erfolge! Wenn Ihr zum Beispiel die Einladungskarten an Eure Gäste in den Briefkasten steckt, kann man ruhig schon mal einen Freudensprung in die Luft machen. Denn dann seid Ihr schon gut vorangekommen und Dinge, wie die perfekte Kirche für die Trauung und Eure Traumlocation, habt Ihr da schon gefunden. Wahnsinn!\r\n\r\nSo, der Punkt Einladung ist abgehakt. Dann kann die verbleibende Vorbereitungszeit ja nun für Menükarten, Brautstrauß, Torte und den Berg an sonstigen Listen, Rechnungen, Register und Rubriken genutzt werden. Wow, was man nicht alles braucht, \"nur\" weil man heiratet. Bei der Planung der eigenen Hochzeit können sogar die Planungsprofis unter Euch an einen Punkt der Verzweiflung kommen. Erst mal sei Euch gesagt: Tief durchatmen, ein wenig Abwechslung suchen und dann gehen die Hochzeitsvorbereitungen mit neuer Motivation auch gleich wieder viel leichter von der Hand. Versprochen!\r\n\r\nHabt Ihr familiäre Unterstützung oder eine Trauzeugin? Dann fragt, wie weit Euch Eure Lieben unterstützen wollen und können. Die Vorbereitungen sind mit Hilfe um einiges leichter. Dinge wie die Verkostung der Torte, machen mit der Freundin an der Seite auch gleich noch mehr Spaß. Vielleicht haben sie auch noch den einen oder anderen Tipp für Eure Traumhochzeit parat, geben die richtigen Anregungen für die Hochzeitsdeko, Location und Kleidung oder kennen sogar einen super guten Hochzeitsfotografen. Fangt früh genug mit der Planung an, denn mit ausreichend Vorbereitungszeit geratet Ihr natürlich nicht so stark unter Stress. Und mit viel Spaß und jeder Menge gute Laune stellt Ihr bestimmt eine tolle Feier auf die Beine, fast so wie ein Profi.',1,2,'2020-01-28 18:08:57','2020-01-29 11:55:05');

/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;


# Export von Tabelle budgets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `budgets`;

CREATE TABLE `budgets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `budgets` WRITE;
/*!40000 ALTER TABLE `budgets` DISABLE KEYS */;

INSERT INTO `budgets` (`id`, `title`, `created_at`, `updated_at`)
VALUES
	(1,'Location & Catering','2020-01-28 16:41:36','2020-01-28 16:41:36'),
	(2,'Unterhaltung, Musik, Video','2020-01-28 16:41:36','2020-01-28 16:41:36'),
	(3,'Mode, Schmuck, Make-up','2020-01-28 16:41:36','2020-01-28 16:41:36'),
	(4,'Blumen & Deko','2020-01-28 16:41:36','2020-01-28 16:41:36'),
	(5,'Auto, Motorrad, Kutsche','2020-01-28 16:41:36','2020-01-28 16:41:36'),
	(6,'Sonstiges','2020-01-28 16:41:36','2020-01-28 16:41:36');

/*!40000 ALTER TABLE `budgets` ENABLE KEYS */;
UNLOCK TABLES;


# Export von Tabelle checklists
# ------------------------------------------------------------

DROP TABLE IF EXISTS `checklists`;

CREATE TABLE `checklists` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checked` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `checklists` WRITE;
/*!40000 ALTER TABLE `checklists` DISABLE KEYS */;

INSERT INTO `checklists` (`id`, `user_id`, `title`, `checked`, `created_at`, `updated_at`)
VALUES
	(1,2,'Hochzeitstorte',0,'2020-01-29 13:06:01','2020-01-29 13:06:01'),
	(3,2,'Brautkleid',1,'2020-01-29 13:06:33','2020-01-29 13:07:13'),
	(4,2,'Anzug',0,'2020-01-29 13:06:48','2020-01-29 13:06:48');

/*!40000 ALTER TABLE `checklists` ENABLE KEYS */;
UNLOCK TABLES;


# Export von Tabelle migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2019_10_23_140210_create_checklists_table',1),
	(4,'2019_11_14_125434_create_budget_table',1),
	(5,'2019_12_12_162139_create_users_budget_table',1),
	(6,'2019_12_18_124822_create_blogs_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Export von Tabelle password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Export von Tabelle users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_budget` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `total_budget`, `remember_token`, `created_at`, `updated_at`, `is_admin`)
VALUES
	(1,'Daniela Strauss','dani_strau@yahoo.de',NULL,'$2y$10$FFJy0PH3Qbo0fzizKMA2Xu4WEeigJ.a2yONcikI/DtWE.BQhfzORO',NULL,NULL,'2020-01-28 16:41:36','2020-01-28 16:41:36',1),
	(2,'test','test@test.at',NULL,'$2y$10$Z3Wam0rEbgWTyWPvwX7j..OiRiAzLmtNbAQoAgfOtDNSUdKhjFnxG',25000,NULL,'2020-01-28 16:41:36','2020-01-29 13:07:58',0),
	(3,'Alexander Ghirardini','a.ghirardini@gmx.at',NULL,'$2y$10$4Cia5nDc0A5eqUHT0ojuaelbKXIb2uqXEVpwy/VFQuZOokgfXTRke',NULL,NULL,'2020-01-28 16:41:36','2020-01-28 16:41:36',0);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Export von Tabelle users_budgets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users_budgets`;

CREATE TABLE `users_budgets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `budget_id` bigint(20) unsigned DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users_budgets` WRITE;
/*!40000 ALTER TABLE `users_budgets` DISABLE KEYS */;

INSERT INTO `users_budgets` (`id`, `user_id`, `budget_id`, `price`, `created_at`, `updated_at`)
VALUES
	(1,2,1,7000.00,NULL,NULL),
	(2,2,2,1500.00,NULL,NULL);

/*!40000 ALTER TABLE `users_budgets` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
