-- MySQL dump 10.13  Distrib 5.7.38, for Linux (x86_64)
--
-- Host: localhost    Database: oil
-- ------------------------------------------------------
-- Server version	5.7.38-0ubuntu0.18.04.1

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
-- Table structure for table `child_systems`
--

DROP TABLE IF EXISTS `child_systems`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `child_systems` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `table` json DEFAULT NULL,
  `parent_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `child_systems_parent_id_foreign` (`parent_id`),
  CONSTRAINT `child_systems_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `parent_systems` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `child_systems`
--

LOCK TABLES `child_systems` WRITE;
/*!40000 ALTER TABLE `child_systems` DISABLE KEYS */;
INSERT INTO `child_systems` VALUES (1,'ПК–60','https://d2kq0urxkarztv.cloudfront.net/5d43ffcbceb2a34d44a98645/1621650/upload-4aa4b7d3-62a0-41ca-ad5e-11dd7afdfecc.png?e=webp&nll=true','Протектор кабеля предназначен для крепления кабеля к НКТ в месте муфтового соединения и защиты кабеля от механических повреждений во время проведения СПО. При воздействии ударов, литая сталь деформируется снаружи, сохраняя внутреннюю часть целой (неизменной), тем самым обеспечивая защиту кабеля.','\"{\\r\\n  \\\"table\\\": {\\r\\n    \\\"rows\\\": [\\r\\n      {\\r\\n        \\\"columns\\\": [\\r\\n          {\\r\\n            \\\"text\\\": \\\"Наименование протектора\\\",\\r\\n            \\\"style\\\": \\\"\\\"\\r\\n          },\\r\\n          {\\r\\n            \\\"text\\\": \\\"Место установки\\\",\\r\\n            \\\"style\\\": \\\"\\\"\\r\\n          },\\r\\n          {\\r\\n            \\\"text\\\": \\\"Место установки\\\",\\r\\n            \\\"style\\\": \\\"\\\"\\r\\n          },\\r\\n          {\\r\\n            \\\"text\\\": \\\"Диаметр НКТ с допуском, мм\\\",\\r\\n            \\\"style\\\": \\\"\\\"\\r\\n          },\\r\\n          {\\r\\n            \\\"text\\\": \\\"Внешний диаметр и длина протектора мм\\\",\\r\\n            \\\"style\\\": \\\"\\\"\\r\\n          },\\r\\n          {\\r\\n            \\\"text\\\": \\\"Масса протектора\\\",\\r\\n            \\\"style\\\": \\\"\\\"\\r\\n          },\\r\\n          {\\r\\n            \\\"text\\\": \\\"Тип защищаемого кабеля, размер\\\",\\r\\n            \\\"style\\\": \\\"\\\"\\r\\n          }\\r\\n        ]\\r\\n      },\\r\\n      {\\r\\n        \\\"columns\\\": [\\r\\n          {\\r\\n            \\\"text\\\": \\\"ПК-60.41\\\",\\r\\n            \\\"style\\\": \\\"\\\"\\r\\n          },\\r\\n          {\\r\\n            \\\"text\\\": \\\"На муфту и тело трубы НКТ 60.32 ГОСТ-53366-2009\\\",\\r\\n            \\\"style\\\": \\\"\\\"\\r\\n          },\\r\\n          {\\r\\n            \\\"text\\\": \\\"60,32 (+/-0,79)\\\",\\r\\n            \\\"style\\\": \\\"\\\"\\r\\n          },\\r\\n          {\\r\\n            \\\"text\\\": \\\"HKT, NU<br/>73 (+/-0,73)\\\",\\r\\n            \\\"style\\\": \\\"\\\"\\r\\n          },\\r\\n          {\\r\\n            \\\"text\\\": \\\"Ø 100 х 236\\\",\\r\\n            \\\"style\\\": \\\"\\\"\\r\\n          },\\r\\n          {\\r\\n            \\\"text\\\": \\\"2 кг\\\",\\r\\n            \\\"style\\\": \\\"\\\"\\r\\n          },\\r\\n          {\\r\\n            \\\"text\\\": \\\"Плоский<br/>45.0x12.0–15.5\\\",\\r\\n            \\\"style\\\": \\\"\\\"\\r\\n          }\\r\\n        ]\\r\\n      },\\r\\n      {\\r\\n        \\\"columns\\\": [\\r\\n          {\\r\\n            \\\"text\\\": \\\"СПК-60.02\\\",\\r\\n            \\\"style\\\": \\\"\\\"\\r\\n          },\\r\\n          {\\r\\n            \\\"text\\\": \\\"на муфту и тело трубы <br/>НКТ 60,32 ГОСТ-53366-2009:<br/>НКТ гладкая + клапан,<br/>NU + клапан,EUE, НКТВ\\\",\\r\\n            \\\"style\\\": \\\"\\\"\\r\\n          },\\r\\n          {\\r\\n            \\\"text\\\": \\\"60,32 (+/-0,79)\\\",\\r\\n            \\\"style\\\": \\\"\\\"\\r\\n          },\\r\\n          {\\r\\n            \\\"text\\\": \\\"Клапан 73(+/-0,89)<br/>Муфта НКТ 73<br/>Муфта НКТВ 77,8\\\",\\r\\n            \\\"style\\\": \\\"\\\"\\r\\n          },\\r\\n          {\\r\\n            \\\"text\\\": \\\"Ø 100 х 373\\\",\\r\\n            \\\"style\\\": \\\"\\\"\\r\\n          },\\r\\n          {\\r\\n            \\\"text\\\": \\\"2.4 кг\\\",\\r\\n            \\\"style\\\": \\\"\\\"\\r\\n          },\\r\\n          {\\r\\n            \\\"text\\\": \\\"Плоский<br/>42.0 х 12.0-17.0\\\",\\r\\n            \\\"style\\\": \\\"\\\"\\r\\n          }\\r\\n        ]\\r\\n      }\\r\\n    ]\\r\\n  }\\r\\n}\"',1);
/*!40000 ALTER TABLE `child_systems` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2019_08_19_000000_create_failed_jobs_table',1),(2,'2019_12_14_000001_create_personal_access_tokens_table',1),(3,'2022_05_17_092711_create_parent_systems_table',1),(4,'2022_05_17_092806_create_child_systems_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parent_systems`
--

DROP TABLE IF EXISTS `parent_systems`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parent_systems` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `table` json DEFAULT NULL,
  `is_parent` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parent_systems`
--

LOCK TABLES `parent_systems` WRITE;
/*!40000 ALTER TABLE `parent_systems` DISABLE KEYS */;
INSERT INTO `parent_systems` VALUES (1,'Протектор  кабеля','https://d2kq0urxkarztv.cloudfront.net/6013ed3cff9bea00cf346317/3124043/upload-e8cbd901-3f96-417e-9726-80f22bd96bad.png?w=668&e=webp&nll=true',NULL,NULL,0);
/*!40000 ALTER TABLE `parent_systems` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-18 13:25:26
