# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 192.168.10.10 (MySQL 5.7.27-0ubuntu0.18.04.1)
# Datenbank: weddingplaner
# Erstellt am: 2020-02-03 13:06:26 +0000
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
	(1,'Liebe ist ...','Die Liebe ist langmütig, die Liebe ist gütig. Sie ereifert sich nicht, sie prahlt nicht, sie bläht sich nicht auf. Sie handelt nicht ungehörig, sucht nicht ihren Vorteil, lässt sich nicht zum Zorn reizen, trägt das Böse nicht nach. Sie freut sich nicht über das Unrecht, sondern freut sich an der Wahrheit. Sie erträgt alles, glaubt alles, hofft alles, hält allem stand. Die Liebe hört niemals auf.\"',1,2,'2020-02-03 12:53:16','2020-02-03 12:53:16'),
	(2,'Liebe (Gedicht)','Ich muß hinaus, ich muß zu dir,\r\nIch muß es selbst dir sagen:\r\nDu bist mein Frühling, du nur mir\r\nIn diesen lichten Tagen.\r\n\r\nIch will die Blumen nicht mehr sehn,\r\nNicht mehr die grünen Matten,\r\nIch will nicht mehr zum Walde gehn\r\nNach Duft und Klang und Schatten.\r\n\r\nIch will nicht mehr der Lüfte Zug,\r\nNicht mehr der Wellen Rauschen,\r\nIch will nicht mehr der Vögel Flug\r\nUnd ihrem Liede lauschen.\r\n\r\nIch will hinaus, ich will zu dir\r\nIch will es selbst dir sagen:\r\nDu bist mein Frühling, du nur mir,\r\nIn diesen lichten Tagen.',1,3,'2020-02-03 12:56:44','2020-02-03 12:57:02'),
	(3,'Hochzeitstorten-Deko: Ideen','Das Brautpaar oben auf der Hochzeitstorte hat Tradition. Daneben gibt es mittlerweile aber jede Menge modernerer Aufsteller und Cake Topper, aus denen ihr wählen könnt. Grundsätzlich könnt ihr die Torte mit allem verzieren, was euch gefällt und zu eurer Hochzeitsdeko passt. Die Verzierung solltet ihr aber vorab mit eurer Konditorin bzw. eurem Konditor absprechen. Sie müssen wissen, was sie einplanen oder einarbeiten müssen.\r\nNeben dem traditionellen Brautpaar könnt ihr eure Hochzeitstorte z. B. hiermit verzieren:\r\n\r\nungiftige Blumen und Blätter, passend zur Hochzeitsdeko\r\nkandierte Rosen\r\nBlüten (oder aktuell auch Sukkulenten) aus Marzipan oder Zucker\r\nSchriftzug mit Mr. und Mrs. oder individuell mit euren Namen\r\nFiguren passend zu eurer Hochzeitsdeko\r\nkleine Macarons\r\nWinterhochzeit: gezuckerte Beeren, kleine Tannenzweige, Pinienzapfen, Zimtstangen\r\nHerbsthochzeit: kleine Zapfen, schöne Blätter, Feigen, Trauben, Mini-Kürbisse, Brombeeren',1,1,'2020-02-03 13:00:12','2020-02-03 13:00:51');

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
	(1,'Location & Catering','2020-02-03 12:23:16','2020-02-03 12:23:16'),
	(2,'Unterhaltung, Musik, Video','2020-02-03 12:23:16','2020-02-03 12:23:16'),
	(3,'Mode, Schmuck, Make-up','2020-02-03 12:23:16','2020-02-03 12:23:16'),
	(4,'Blumen & Deko','2020-02-03 12:23:16','2020-02-03 12:23:16'),
	(5,'Auto, Motorrad, Kutsche','2020-02-03 12:23:16','2020-02-03 12:23:16'),
	(6,'Einladungen & Dankesschreiben','2020-02-03 12:23:16','2020-02-03 12:23:16'),
	(7,'Poltern/Polterabend','2020-02-03 12:23:16','2020-02-03 12:23:16'),
	(8,'Sonstiges','2020-02-03 12:23:16','2020-02-03 12:23:16');

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
	(1,2,'Brautkleid',0,'2020-02-03 12:46:32','2020-02-03 12:46:32'),
	(3,2,'Fotograf suchen',0,'2020-02-03 12:47:14','2020-02-03 12:47:14'),
	(4,2,'Hochzeitstorte bestellen',0,'2020-02-03 12:47:29','2020-02-03 12:47:29'),
	(5,1,'Anzug',0,'2020-02-03 13:01:41','2020-02-03 13:01:41'),
	(6,1,'Location',1,'2020-02-03 13:01:48','2020-02-03 13:04:40'),
	(7,1,'Blumenstrauß',0,'2020-02-03 13:02:01','2020-02-03 13:02:01');

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
	(1,'Daniela Strauss','dani_strau@yahoo.de',NULL,'$2y$10$06mp6lPZgrR0oHwF.UchmOGCbazwnnN4tFqwFP9zbvtIrvTUxvl3C',12000,NULL,'2020-02-03 12:23:16','2020-02-03 13:04:07',1),
	(2,'Test','test@test.at',NULL,'$2y$10$Zd6Fyqa/C8HllfLKO.3Il.TDD7lNG727Yq9NI2OzUUpmau8vrp/Ey',25000,NULL,'2020-02-03 12:23:16','2020-02-03 12:48:51',0),
	(3,'Alexander Ghirardini','a.ghirardini@gmx.at',NULL,'$2y$10$SWsa3gV2Oo6h/ltzq7sdCud79eXN7embU1eXluW7qiU.hgqTjBXCu',NULL,NULL,'2020-02-03 12:23:16','2020-02-03 12:23:16',0);

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
	(1,1,1,7000.00,NULL,NULL),
	(2,1,2,1900.00,NULL,NULL),
	(3,1,3,1850.00,NULL,NULL),
	(4,1,6,60.00,NULL,NULL),
	(5,1,4,250.00,NULL,NULL);

/*!40000 ALTER TABLE `users_budgets` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
