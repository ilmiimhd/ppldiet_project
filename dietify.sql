-- MySQL dump 10.13  Distrib 5.7.24, for Win64 (x86_64)
--
-- Host: localhost    Database: dietify
-- ------------------------------------------------------
-- Server version	5.7.24

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
-- Table structure for table `daily_progress`
--

DROP TABLE IF EXISTS `daily_progress`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `daily_progress` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `diet_schedule_id` bigint(20) unsigned NOT NULL,
  `sarapan` text COLLATE utf8mb4_unicode_ci,
  `snack_pagi` text COLLATE utf8mb4_unicode_ci,
  `makan_siang` text COLLATE utf8mb4_unicode_ci,
  `snack_sore` text COLLATE utf8mb4_unicode_ci,
  `makan_malam` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `daily_progress_diet_schedule_id_foreign` (`diet_schedule_id`),
  CONSTRAINT `daily_progress_diet_schedule_id_foreign` FOREIGN KEY (`diet_schedule_id`) REFERENCES `diet_schedules` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `daily_progress`
--

LOCK TABLES `daily_progress` WRITE;
/*!40000 ALTER TABLE `daily_progress` DISABLE KEYS */;
/*!40000 ALTER TABLE `daily_progress` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `days`
--

DROP TABLE IF EXISTS `days`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `days` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_hari` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `days`
--

LOCK TABLES `days` WRITE;
/*!40000 ALTER TABLE `days` DISABLE KEYS */;
INSERT INTO `days` VALUES (1,'Hari Ke-1',NULL,NULL,NULL),(2,'Hari Ke-2',NULL,NULL,NULL),(3,'Hari Ke-3',NULL,NULL,NULL),(4,'Hari Ke-4',NULL,NULL,NULL),(5,'Hari Ke-5',NULL,NULL,NULL),(6,'Hari Ke-6',NULL,NULL,NULL),(7,'Hari Ke-7',NULL,NULL,NULL),(8,'Hari Ke-8',NULL,NULL,NULL),(9,'Hari Ke-9',NULL,NULL,NULL),(10,'Hari Ke-10',NULL,NULL,NULL),(11,'Hari Ke-11',NULL,NULL,NULL),(12,'Hari Ke-12',NULL,NULL,NULL),(13,'Hari Ke-13',NULL,NULL,NULL),(14,'Hari Ke-14',NULL,NULL,NULL),(15,'Hari Ke-15',NULL,NULL,NULL),(16,'Hari Ke-16',NULL,NULL,NULL),(17,'Hari Ke-17',NULL,NULL,NULL),(18,'Hari Ke-18',NULL,NULL,NULL),(19,'Hari Ke-19',NULL,NULL,NULL),(20,'Hari Ke-20',NULL,NULL,NULL),(21,'Hari Ke-21',NULL,NULL,NULL),(22,'Hari Ke-22',NULL,NULL,NULL),(23,'Hari Ke-23',NULL,NULL,NULL),(24,'Hari Ke-24',NULL,NULL,NULL),(25,'Hari Ke-25',NULL,NULL,NULL),(26,'Hari Ke-26',NULL,NULL,NULL),(27,'Hari Ke-27',NULL,NULL,NULL),(28,'Hari Ke-28',NULL,NULL,NULL),(29,'Hari Ke-29',NULL,NULL,NULL),(30,'Hari Ke-30',NULL,NULL,NULL);
/*!40000 ALTER TABLE `days` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `diet_schedules`
--

DROP TABLE IF EXISTS `diet_schedules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `diet_schedules` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `diet_type_id` bigint(20) unsigned NOT NULL,
  `nama_hari` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `sarapan` text COLLATE utf8mb4_unicode_ci,
  `snack_pagi` text COLLATE utf8mb4_unicode_ci,
  `makan_siang` text COLLATE utf8mb4_unicode_ci,
  `snack_sore` text COLLATE utf8mb4_unicode_ci,
  `makan_malam` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `diet_schedules_diet_type_id_foreign` (`diet_type_id`),
  CONSTRAINT `diet_schedules_diet_type_id_foreign` FOREIGN KEY (`diet_type_id`) REFERENCES `diet_types` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diet_schedules`
--

LOCK TABLES `diet_schedules` WRITE;
/*!40000 ALTER TABLE `diet_schedules` DISABLE KEYS */;
INSERT INTO `diet_schedules` VALUES (1,1,'Hari Ke 1','Diet Standar','1 Cangkir Teh atau kopi hitam tanpa gula dan susu, Bubur havermut','1 Potong Keju, Kacang Kacangan yang direbus','2 Potong roti Panggang gandum utuh dengan sayuran, Daging tanpa lemak panggang atau rebus','','Selada ayam',NULL,NULL,NULL),(2,1,'Hari Ke 2','Diet Standar','1 Cangkir Teh atau kopi hitam tanpa gula dan susu, Haver dengan susu bebas lemak','1 Kue kering','Salad Sayuran (Wortel, tomat, paprika, mentimun), Yoghurt','','Sup sayuran tanpa garam, Seafood Panggang / Rebus',NULL,NULL,NULL),(3,1,'Hari Ke 3','Diet Standar','1 Cangkir teh atau kopi hitam tanpa gula dan susu, Bubur havermut 2 Telur orak arik','Hummus / kentang tumbuk, Yoghurt','Nasi merah / mie rebus, Sayuran matang / rebus','','3 kentang panggang / rebus, Daging tanpa lemak panggang atau rebus',NULL,NULL,NULL),(4,1,'Hari Ke 4','Diet Standar','1 Cangkir Teh atau kopi hitam tanpa gula dan susu, 2 Potong roti gandum utuh dengan sayuran','Yoghurt','buah- buahan, Seafood Panggang / Rebus','','Jagung matang / rebus, Selada ayam',NULL,NULL,NULL),(5,1,'Hari Ke 5','Diet Standar','1 Cangkir Teh atau kopi hitam tanpa gula dan susu, 2 Telur orak arik, 1 Potong roti gandum utuh','kacang kacangan','1 limau gedang / jeruk, kacang kacangan yang direbus','','Yoghurt, Daging tanpa lemak panggang atau rebus',NULL,NULL,NULL),(6,1,'Hari Ke 6','Diet Standar','1 Cangkir Teh atau kopi hitam tanpa gula dan susu,Haver dengan susu bebas lemak','Hummus / kentang tumbuk, Yoghurt','2 Potong roti gandum utuh dengan sayuran, Sayuran matang / rebus','','Salad Buah (apel, pir, jeruk, nanas), Seafood Panggang / Rebus',NULL,NULL,NULL),(7,1,'Hari Ke 7','Diet Standar','1 Cangkir Teh atau kopi hitam tanpa gula dan susu, jagung matang / rebus','1 Kue kering','Dadar telur tiga telur dan sayur, Yoghurt','','Salad Sayuran (Wortel, tomat, paprika, mentimun), Daging tanpa lemak panggang atau rebus',NULL,NULL,NULL),(8,2,'Hari Ke 1','Diet Vegetarian','1 Cangkir Teh atau kopi hitam tanpa gula dan susu, Bubur havermut','1 Potong Keju, Kacang Kacangan yang direbus','2 Potong roti Panggang gandum utuh dengan sayuran, Salad Buah (apel, pir, jeruk, nanas)','','Salad Sayuran (Wortel, tomat, paprika, mentimun), Salad Buah (apel, pir, jeruk, nanas)',NULL,NULL,NULL),(9,2,'Hari Ke 2','Diet Vegetarian','1 Cangkir Teh atau kopi hitam tanpa gula dan susu, Haver dengan susu bebas lemak','1 Kue kering, biji labu / kacang kacangan','Yoghurt, Pasta','','Sup sayuran tanpa garam, Dadar telur tiga telur dan sayur',NULL,NULL,NULL),(10,2,'Hari Ke 3','Diet Vegetarian','1 Cangkir teh atau kopi hitam tanpa gula dan susu, Bubur havermut','Hummus / kentang tumbuk, Yoghurt','Nasi merah / mie rebus, Pasta','','3 kentang panggang / rebus, kacang kacangan yang direbus',NULL,NULL,NULL),(11,2,'Hari Ke 4','Diet Vegetarian','1 Cangkir teh atau kopi hitam tanpa gula dan susu, 2 Potong roti gandum utuh dengan sayuran','Yoghurt, biji labu / kacang kacangan','Dadar telur tiga telur dan sayur, buah- buahan, Sayuran matang / rebus','','Jagung matang / rebus, kacang kacangan yang direbus, Salad Sayuran (Wortel, tomat, paprika, mentimun)',NULL,NULL,NULL),(12,2,'Hari Ke 5','Diet Vegetarian','1 Cangkir Teh atau kopi hitam tanpa gula dan susu, 2 Telur orak arik , 1 Potong roti gandum utuh','Kacang Kacangan yang direbus','1 limau gedang / jeruk, kacang kacangan yang direbus','','Yoghurt, Pasta',NULL,NULL,NULL),(13,2,'Hari Ke 6','Diet Vegetarian','1 Cangkir Teh atau kopi hitam tanpa gula dan susu, Haver dengan susu bebas lemak','Hummus / kentang tumbuk, Yoghurt','2 Potong roti gandum utuh dengan sayuran, Sayuran matang / rebus','','Salad Buah (apel, pir, jeruk, nanas), Pasta',NULL,NULL,NULL),(14,2,'Hari Ke 7','Diet Vegetarian','1 Cangkir Teh atau kopi hitam tanpa gula dan susu, jagung matang / rebus, 1 Potong roti gandum utuh','1 Kue kering, biji labu / kacang kacangan','Dadar telur tiga telur dan sayur, Yoghurt','','Salad Sayuran (Wortel, tomat, paprika, mentimun), Haver dengan susu bebas lemak, kacang kacangan',NULL,NULL,NULL),(15,3,'Hari Ke 1','Diet Mayo','1 Cangkir Teh / kopi + 1 Sendok Gula Pasir','','2 Telur Rebus, 1 Porsi Olahan Bayam','','1,5 Ons Bistik, Salad ',NULL,NULL,NULL),(16,3,'Hari Ke 2','Diet Mayo','1 Cangkir Teh / kopi + 1 Sendok Gula Pasir','','1,5 Ons Bistik, Salad, 1 Porsi buah (apel, pir, pisang, jeruk, nanas)','','2,5 ons ayam kukus, 1 Buah Pisang',NULL,NULL,NULL),(17,3,'Hari Ke 3','Diet Mayo','1 Cangkir Teh / kopi + 1 Sendok Gula Pasir','','2 Telur Rebus, 1 Porsi Olahan Bayam, 1 Porsi buah (apel, pir, pisang, jeruk, nanas)','','2,5 ons ayam kukus, Salad',NULL,NULL,NULL),(18,3,'Hari Ke 4','Diet Mayo','1 Cangkir Teh / kopi + 1 Sendok Gula Pasir','','2 Telur Rebus, Wortel Rebus, Keju 20 gram','','1 Porsi  Pepaya, 1 Porsi Jeruk, Susu',NULL,NULL,NULL),(19,3,'Hari Ke 5','Diet Mayo','1 Cangkir Teh / kopi + 1 Sendok Gula Pasir','','2,5 ons ayam kukus','','2,5 Ons Bistik, Salad, 1 Porsi Olahan Bayam',NULL,NULL,NULL),(20,3,'Hari Ke 6','Diet Mayo','1 Cangkir Teh / kopi + 1 Sendok Gula Pasir','','2,5 ons ayam kukus, Salad','','2 Telur Rebus, Wortel Rebus, Yoghurt',NULL,NULL,NULL),(21,3,'Hari Ke 7','Diet Mayo','1 Cangkir Teh / kopi + 1 Sendok Gula Pasir','','2,5 Ons Bistik, 1 Porsi buah (apel, pir, pisang, jeruk, nanas), 2 Telur Rebus','','Puasa, Jika sangat lapar makan 1 atau 2 Pisang, 1,5 Ons Bistik',NULL,NULL,NULL),(22,4,'Hari Ke 1','Diet Metabolisme','1 Cangkir Teh atau kopi, Sepotong roti',NULL,'1 Telur rebus, 200 gr Olahan Bayam dan Tomat',NULL,'100 gr daging sapi panggang, Salad ',NULL,NULL,NULL),(23,4,'Hari Ke 2','Diet Metabolisme','1 Cangkir Teh atau kopi, Sepotong roti',NULL,'150 gr daging (ayam, sapi, ikan dll), yoghurt bebas lemak',NULL,'100 gr daging sapi panggang, Salad, 1 Porsi buah (apel, pir, pisang, jeruk, nanas)',NULL,NULL,NULL),(24,4,'Hari Ke 3','Diet Metabolisme','1 Cangkir Teh atau kopi, Sepotong roti',NULL,'2 butir telur rebus, 150 gr daging (ayam, sapi, ikan dll), 200 gr Olahan Bayam dan Tomat',NULL,'1 Porsi sup seledri dan tomat, 1 Porsi buah (apel, pir, pisang, jeruk, nanas)',NULL,NULL,NULL),(25,4,'Hari Ke 4','Diet Metabolisme','1 Cangkir Teh atau kopi, Sepotong roti',NULL,'1200 ml jus jeruk atau apel, yoghurt bebas lemak',NULL,'1 Telur rebus, 100 ml keju cottage',NULL,NULL,NULL),(26,4,'Hari Ke 5','Diet Metabolisme','1 Cangkir Teh atau kopi, Sepotong roti',NULL,'150 gr salmon',NULL,'100 gr daging sapi panggang, Salad ',NULL,NULL,NULL),(27,4,'Hari Ke 6','Diet Metabolisme','1 Cangkir Teh atau kopi, Sepotong roti',NULL,'1 Telur rebus',NULL,'150 gr ayam panggang atau rebus, Salad ',NULL,NULL,NULL),(28,4,'Hari Ke 7','Diet Metabolisme','1 Cangkir Teh atau kopi, Sepotong roti',NULL,'150 gr daging (ayam, sapi, ikan dll), yoghurt bebas lemak',NULL,'200 gr irisan daging domba panggang,1 Potong appel',NULL,NULL,NULL),(29,5,'Hari Ke 1','Diet Mediterania','Oatmeal','Parfait','Mangkuk quinoa','','Pasta ayam panggang',NULL,NULL,NULL),(30,5,'Hari Ke 2','Diet Mediterania','Quiche sayuran kaleng muffin, buah-buahan','buah-buahan, kacang-kacangan','Pasta ayam panggang','','Lasagna terung',NULL,NULL,NULL),(31,5,'Hari Ke 3','Diet Mediterania','Oatmeal','Parfait','Lasagna terung','','Mangkuk quinoa',NULL,NULL,NULL),(32,5,'Hari Ke 4','Diet Mediterania','Quiche sayuran, buah-buahan','buah-buahan, kacang-kacangan','Mangkuk quinoa','','Pasta ayam panggang',NULL,NULL,NULL),(33,5,'Hari Ke 5','Diet Mediterania','Oatmeal','Parfait','Pasta ayam panggang','','Lasagna terung',NULL,NULL,NULL),(34,5,'Hari Ke 6','Diet Mediterania','Quiche sayuran','buah-buahan, kacang-kacangan','Lasagna terung','','Mangkuk quinoa',NULL,NULL,NULL),(35,5,'Hari Ke 7','Diet Mediterania','Oatmeal','Parfait','Mangkuk quinoa','','Pasta ayam panggang',NULL,NULL,NULL);
/*!40000 ALTER TABLE `diet_schedules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `diet_types`
--

DROP TABLE IF EXISTS `diet_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `diet_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diet_types`
--

LOCK TABLES `diet_types` WRITE;
/*!40000 ALTER TABLE `diet_types` DISABLE KEYS */;
INSERT INTO `diet_types` VALUES (1,'Diet Standar',NULL,NULL,NULL),(2,'Diet Vegetarian',NULL,NULL,NULL),(3,'Diet Mayo',NULL,NULL,NULL),(4,'Diet Metabolisme',NULL,NULL,NULL),(5,'Diet Mediterania',NULL,NULL,NULL);
/*!40000 ALTER TABLE `diet_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dietary_preferences`
--

DROP TABLE IF EXISTS `dietary_preferences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dietary_preferences` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `food_category_id` bigint(20) unsigned NOT NULL,
  `jenis_diet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `dietary_preferences_user_id_foreign` (`user_id`),
  KEY `dietary_preferences_food_category_id_foreign` (`food_category_id`),
  CONSTRAINT `dietary_preferences_food_category_id_foreign` FOREIGN KEY (`food_category_id`) REFERENCES `food_categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `dietary_preferences_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dietary_preferences`
--

LOCK TABLES `dietary_preferences` WRITE;
/*!40000 ALTER TABLE `dietary_preferences` DISABLE KEYS */;
/*!40000 ALTER TABLE `dietary_preferences` ENABLE KEYS */;
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
-- Table structure for table `food_categories`
--

DROP TABLE IF EXISTS `food_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `food_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `food_categories`
--

LOCK TABLES `food_categories` WRITE;
/*!40000 ALTER TABLE `food_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `food_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `foods`
--

DROP TABLE IF EXISTS `foods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `foods` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `food_category_id` bigint(20) unsigned NOT NULL,
  `nama_makanan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kalori` int(11) DEFAULT NULL,
  `karbohidrat` int(11) DEFAULT NULL,
  `protein` int(11) DEFAULT NULL,
  `lemak` int(11) DEFAULT NULL,
  `serat` int(11) DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `foods_food_category_id_foreign` (`food_category_id`),
  CONSTRAINT `foods_food_category_id_foreign` FOREIGN KEY (`food_category_id`) REFERENCES `food_categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foods`
--

LOCK TABLES `foods` WRITE;
/*!40000 ALTER TABLE `foods` DISABLE KEYS */;
/*!40000 ALTER TABLE `foods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `day_id` bigint(20) unsigned NOT NULL,
  `diet_type_id` bigint(20) unsigned NOT NULL,
  `jenis_menu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `menus_day_id_foreign` (`day_id`),
  KEY `menus_diet_type_id_foreign` (`diet_type_id`),
  CONSTRAINT `menus_day_id_foreign` FOREIGN KEY (`day_id`) REFERENCES `days` (`id`) ON DELETE CASCADE,
  CONSTRAINT `menus_diet_type_id_foreign` FOREIGN KEY (`diet_type_id`) REFERENCES `diet_types` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2024_01_14_024409_create_sessions_table',1),(6,'2024_01_16_020847_create_food_categories_table',1),(7,'2024_01_16_020948_create_foods_table',1),(8,'2024_01_16_030704_create_dietary_preferences_table',1),(9,'2024_01_16_030705_create_diet_types_table',1),(10,'2024_01_16_030713_create_user_profiles_table',1),(11,'2024_01_16_031230_create_days_table',1),(12,'2024_01_16_031335_create_menus_table',1),(13,'2024_01_16_031727_create_diet_schedules_table',1),(14,'2024_01_16_032503_create_user_selected_schedules_table',1),(15,'2024_01_16_033053_create_daily_progress_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
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
  `expires_at` timestamp NULL DEFAULT NULL,
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

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('61Zq32v3rAGHmGAexzHlwo0xz44sKBJ7J912rON0',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoibXJES3lNYnZxZlJzS1AycWVLUmxqRFFIR3ZNUno2TzdTZHVqT1hFNSI7czo1OiJlcnJvciI7czo3NjoiQW5kYSBiZWx1bSBtZW1pbGloIHByb2dyYW0gZGlldC4gU2lsYWthbiBwaWxpaCBwcm9ncmFtIGRpZXQgdGVybGViaWggZGFodWx1LiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjE6e2k6MDtzOjU6ImVycm9yIjt9fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMwOiJodHRwOi8vZGlldGlmeS5kZXYuY29tL3Byb2dyYW0iO319',1705414961),('JwwknxWIowII3yjGXe66EsyzMSMhVBjlDRl2GhTy',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoiQ2p4U2NNYnJqM09qTmNpdUs4cVFGSmU3NjF0SHdTNkZNbzBNZXdJTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9kaWV0aWZ5LmRldi5jb20vcHJvZ3JhbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjE6e2k6MDtzOjU6ImVycm9yIjt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NToiZXJyb3IiO3M6NzY6IkFuZGEgYmVsdW0gbWVtaWxpaCBwcm9ncmFtIGRpZXQuIFNpbGFrYW4gcGlsaWggcHJvZ3JhbSBkaWV0IHRlcmxlYmloIGRhaHVsdS4iO30=',1705414548),('WMEP4cj5xokVrMOzHIBeR1675RGxFgPXKXQyvgVN',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:121.0) Gecko/20100101 Firefox/121.0','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMDdqcW9GNnNqdml0bVhjQjQ3d0RKUDV4RFRDS01va1MzT2FvVDVROSI7czo1OiJlcnJvciI7czo3NjoiQW5kYSBiZWx1bSBtZW1pbGloIHByb2dyYW0gZGlldC4gU2lsYWthbiBwaWxpaCBwcm9ncmFtIGRpZXQgdGVybGViaWggZGFodWx1LiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjE6e2k6MDtzOjU6ImVycm9yIjt9fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMwOiJodHRwOi8vZGlldGlmeS5kZXYuY29tL3Byb2dyYW0iO319',1705414594),('y2eQObztkHaCC3NHohbkIs8dKc8U9UqDv66Xumso',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMGpNS3ljMUJrZmVzS2djaUJmVm92OFNmU2FBODR1dmE5ZVZXTHp1aCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9kaWV0aWZ5LmRldi5jb20vZGFzaGJvYXJkIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9',1705418711);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_profiles`
--

DROP TABLE IF EXISTS `user_profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_profiles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `diet_type_id` bigint(20) unsigned NOT NULL,
  `berat_badan` int(11) DEFAULT NULL,
  `tinggi_badan` int(11) DEFAULT NULL,
  `umur` int(11) DEFAULT NULL,
  `lemak_tubuh` int(11) DEFAULT NULL,
  `target_berat_badan` int(11) DEFAULT NULL,
  `aktivitas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_profiles_user_id_foreign` (`user_id`),
  KEY `user_profiles_diet_type_id_foreign` (`diet_type_id`),
  CONSTRAINT `user_profiles_diet_type_id_foreign` FOREIGN KEY (`diet_type_id`) REFERENCES `diet_types` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_profiles`
--

LOCK TABLES `user_profiles` WRITE;
/*!40000 ALTER TABLE `user_profiles` DISABLE KEYS */;
INSERT INTO `user_profiles` VALUES (1,1,1,150,50,30,50,70,'low',NULL,NULL,NULL),(2,2,3,120,200,20,200,50,'Low','2024-01-16 07:44:37','2024-01-16 07:44:37',NULL);
/*!40000 ALTER TABLE `user_profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_selected_schedules`
--

DROP TABLE IF EXISTS `user_selected_schedules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_selected_schedules` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `diet_schedule_id` bigint(20) unsigned NOT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_selected_schedules_user_id_foreign` (`user_id`),
  KEY `user_selected_schedules_diet_schedule_id_foreign` (`diet_schedule_id`),
  CONSTRAINT `user_selected_schedules_diet_schedule_id_foreign` FOREIGN KEY (`diet_schedule_id`) REFERENCES `diet_schedules` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_selected_schedules_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_selected_schedules`
--

LOCK TABLES `user_selected_schedules` WRITE;
/*!40000 ALTER TABLE `user_selected_schedules` DISABLE KEYS */;
INSERT INTO `user_selected_schedules` VALUES (1,1,1,'2023-01-16','2023-01-23',0,NULL,NULL,NULL),(2,2,3,'2024-01-16','2024-01-23',1,'2024-01-16 07:44:37','2024-01-16 07:44:37',NULL);
/*!40000 ALTER TABLE `user_selected_schedules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'jokowi','jokowi@gmail.com',NULL,'$2y$12$M3ax8wxU.1YGi3Xo/hDQ3OD0q8lvc43TviWeGk8rs/TOwYHe875TC','admin',NULL,'2024-01-16 05:23:17','2024-01-16 05:23:17'),(2,'teddi','teddinata2@gmail.com',NULL,'$2y$12$M0RSVuCT3f66.P4zUMXyg.tSFs0WSjl2KYwcqq4prCLSpFZxgXf6a','user',NULL,'2024-01-16 07:43:40','2024-01-16 07:43:40');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-16 22:26:52
