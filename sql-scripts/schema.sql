-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: scs1203_take_home_1
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.17.10.1

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
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authors` (
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `professor_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`author_name`),
  KEY `fk_authors_to_professors` (`professor_id`),
  CONSTRAINT `fk_authors_to_professors` FOREIGN KEY (`professor_id`) REFERENCES `professors` (`employee_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authors`
--

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT INTO `authors` VALUES ('Charles E. Leisserson',NULL),('Clifford Stein',NULL),('Ronald L. Rivest',NULL),('Thomas H. Cormen',NULL);
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book_authorships`
--

DROP TABLE IF EXISTS `book_authorships`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book_authorships` (
  `book_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`book_id`,`author_name`),
  KEY `fk_book_authorships_to_authors` (`author_name`),
  CONSTRAINT `fk_book_authorships_to_authors` FOREIGN KEY (`author_name`) REFERENCES `authors` (`author_name`) ON DELETE CASCADE,
  CONSTRAINT `fk_book_authorships_to_books` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book_authorships`
--

LOCK TABLES `book_authorships` WRITE;
/*!40000 ALTER TABLE `book_authorships` DISABLE KEYS */;
INSERT INTO `book_authorships` VALUES ('9780262531962','Charles E. Leisserson'),('9780262531962','Clifford Stein'),('9780262531962','Ronald L. Rivest'),('9780262531962','Thomas H. Cormen');
/*!40000 ALTER TABLE `book_authorships` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book_borrows`
--

DROP TABLE IF EXISTS `book_borrows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book_borrows` (
  `book_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `returned` tinyint(1) NOT NULL DEFAULT '0',
  KEY `fk_book_borrows_to_books` (`book_id`),
  KEY `fk_book_borrows_to_students` (`student_id`),
  CONSTRAINT `fk_book_borrows_to_books` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`) ON DELETE CASCADE,
  CONSTRAINT `fk_book_borrows_to_students` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book_borrows`
--

LOCK TABLES `book_borrows` WRITE;
/*!40000 ALTER TABLE `book_borrows` DISABLE KEYS */;
/*!40000 ALTER TABLE `book_borrows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `book_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publisher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copies` int(10) unsigned NOT NULL,
  `year` int(10) unsigned NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES ('9780262531962','Introduction to Algorithms','MIT Publications',10,1989);
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `books_view`
--

DROP TABLE IF EXISTS `books_view`;
/*!50001 DROP VIEW IF EXISTS `books_view`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `books_view` AS SELECT 
 1 AS `book_id`,
 1 AS `title`,
 1 AS `publisher`,
 1 AS `year`,
 1 AS `copies`,
 1 AS `authors`,
 1 AS `available`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `company_evaluations`
--

DROP TABLE IF EXISTS `company_evaluations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_evaluations` (
  `ungergraduate_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_evaluation_year` int(10) unsigned NOT NULL,
  `company_evaluation_semester` int(10) unsigned NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `evaluation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ungergraduate_id`,`company_evaluation_year`,`company_evaluation_semester`),
  CONSTRAINT `fk_company_evaluations_to_students` FOREIGN KEY (`ungergraduate_id`) REFERENCES `undergraduates` (`student_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_evaluations`
--

LOCK TABLES `company_evaluations` WRITE;
/*!40000 ALTER TABLE `company_evaluations` DISABLE KEYS */;
/*!40000 ALTER TABLE `company_evaluations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_session_enrollments`
--

DROP TABLE IF EXISTS `company_session_enrollments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_session_enrollments` (
  `company_session_year` int(10) unsigned NOT NULL,
  `company_session_semester` int(10) unsigned NOT NULL,
  `undergraduate_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`company_session_year`,`company_session_semester`,`undergraduate_id`),
  KEY `fk_company_session_enrollments_to_undergraduates` (`undergraduate_id`),
  CONSTRAINT `fk_company_session_enrollments_to_company_sessions` FOREIGN KEY (`company_session_year`, `company_session_semester`) REFERENCES `company_sessions` (`company_session_year`, `company_session_semester`),
  CONSTRAINT `fk_company_session_enrollments_to_undergraduates` FOREIGN KEY (`undergraduate_id`) REFERENCES `undergraduates` (`student_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_session_enrollments`
--

LOCK TABLES `company_session_enrollments` WRITE;
/*!40000 ALTER TABLE `company_session_enrollments` DISABLE KEYS */;
/*!40000 ALTER TABLE `company_session_enrollments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_sessions`
--

DROP TABLE IF EXISTS `company_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_sessions` (
  `company_session_year` int(10) unsigned NOT NULL,
  `company_session_semester` int(10) unsigned NOT NULL,
  `manager_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`company_session_year`,`company_session_semester`),
  KEY `fk_company_sessions_to_managers` (`manager_id`),
  CONSTRAINT `fk_company_sessions_to_managers` FOREIGN KEY (`manager_id`) REFERENCES `employees` (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_sessions`
--

LOCK TABLES `company_sessions` WRITE;
/*!40000 ALTER TABLE `company_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `company_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `company_sessions_view`
--

DROP TABLE IF EXISTS `company_sessions_view`;
/*!50001 DROP VIEW IF EXISTS `company_sessions_view`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `company_sessions_view` AS SELECT 
 1 AS `year`,
 1 AS `semester`,
 1 AS `manager_id`,
 1 AS `enrollments`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `course_prerequisites`
--

DROP TABLE IF EXISTS `course_prerequisites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_prerequisites` (
  `course_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `depending_course_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`course_id`,`depending_course_id`),
  KEY `fk_course_prerequisites_to_depending` (`depending_course_id`),
  CONSTRAINT `fk_course_prerequisites_to_depender` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE,
  CONSTRAINT `fk_course_prerequisites_to_depending` FOREIGN KEY (`depending_course_id`) REFERENCES `courses` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_prerequisites`
--

LOCK TABLES `course_prerequisites` WRITE;
/*!40000 ALTER TABLE `course_prerequisites` DISABLE KEYS */;
/*!40000 ALTER TABLE `course_prerequisites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_student_enrollments`
--

DROP TABLE IF EXISTS `course_student_enrollments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_student_enrollments` (
  `course_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`course_id`,`student_id`),
  KEY `fk_course_student_enrollments_to_students` (`student_id`),
  CONSTRAINT `fk_course_student_enrollments_to_courses` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`),
  CONSTRAINT `fk_course_student_enrollments_to_students` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_student_enrollments`
--

LOCK TABLES `course_student_enrollments` WRITE;
/*!40000 ALTER TABLE `course_student_enrollments` DISABLE KEYS */;
/*!40000 ALTER TABLE `course_student_enrollments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses` (
  `course_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit_hours` int(10) unsigned NOT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'None',
  PRIMARY KEY (`course_id`),
  KEY `fk_courses_to_departments` (`department_id`),
  CONSTRAINT `fk_courses_to_departments` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES ('biochemistry','Bio Chemistry','science',100,'None'),('database','Database','ucsc',50,'None'),('dsa','DSA','ucsc',100,'None'),('programming','Programming','ucsc',80,'None');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departments` (
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_head_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`department_id`),
  UNIQUE KEY `departments_name_unique` (`name`),
  KEY `fk_departments_to_professors` (`department_head_id`),
  CONSTRAINT `fk_departments_to_professors` FOREIGN KEY (`department_head_id`) REFERENCES `professors` (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` VALUES ('science','Science Facutly','Reid Avenue, Colombo 7','0112500001','emp3'),('ucsc','UCSC','UCSC Building Complex, 35 Reid Ave, Colombo 00700','0112445255','emp1');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `departments_view`
--

DROP TABLE IF EXISTS `departments_view`;
/*!50001 DROP VIEW IF EXISTS `departments_view`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `departments_view` AS SELECT 
 1 AS `department_id`,
 1 AS `name`,
 1 AS `location`,
 1 AS `phone`,
 1 AS `department_head_name`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees` (
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`employee_id`),
  KEY `fk_employees_to_users` (`user_id`),
  CONSTRAINT `fk_employees_to_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES ('emp1',2),('emp3',20);
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lab_sessions`
--

DROP TABLE IF EXISTS `lab_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab_sessions` (
  `course_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` int(10) unsigned NOT NULL,
  `year` int(10) unsigned NOT NULL,
  `topic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conductor_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`course_id`,`section_id`,`semester`,`year`,`topic`),
  KEY `fk_lab_sessions_to_postgraduates` (`conductor_id`),
  CONSTRAINT `fk_lab_sessions_to_postgraduates` FOREIGN KEY (`conductor_id`) REFERENCES `postgraduates` (`student_id`),
  CONSTRAINT `fk_lab_sessions_to_sections` FOREIGN KEY (`course_id`, `section_id`, `semester`, `year`) REFERENCES `sections` (`course_id`, `section_id`, `semester`, `year`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lab_sessions`
--

LOCK TABLES `lab_sessions` WRITE;
/*!40000 ALTER TABLE `lab_sessions` DISABLE KEYS */;
INSERT INTO `lab_sessions` VALUES ('dsa','scs1201',1,1,'Test Topic 1',NULL,'10:00:00','12:00:00','W001');
/*!40000 ALTER TABLE `lab_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `lab_sessions_view`
--

DROP TABLE IF EXISTS `lab_sessions_view`;
/*!50001 DROP VIEW IF EXISTS `lab_sessions_view`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `lab_sessions_view` AS SELECT 
 1 AS `department`,
 1 AS `department_id`,
 1 AS `course_id`,
 1 AS `course_name`,
 1 AS `section_id`,
 1 AS `year`,
 1 AS `semester`,
 1 AS `professor_id`,
 1 AS `topic`,
 1 AS `start_time`,
 1 AS `end_time`,
 1 AS `location`,
 1 AS `conductor_id`,
 1 AS `conductor_name`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `librarians`
--

DROP TABLE IF EXISTS `librarians`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `librarians` (
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`employee_id`),
  CONSTRAINT `fk_librarians_to_employees` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `librarians`
--

LOCK TABLES `librarians` WRITE;
/*!40000 ALTER TABLE `librarians` DISABLE KEYS */;
/*!40000 ALTER TABLE `librarians` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `managers`
--

DROP TABLE IF EXISTS `managers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `managers` (
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`employee_id`),
  CONSTRAINT `fk_managers_to_employees` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `managers`
--

LOCK TABLES `managers` WRITE;
/*!40000 ALTER TABLE `managers` DISABLE KEYS */;
/*!40000 ALTER TABLE `managers` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2018_06_15_072844_create_departments_table',1),(3,'2018_06_15_161753_create_employees_table',1),(4,'2018_06_15_161815_create_professors_table',1),(5,'2018_06_15_161823_create_managers_table',1),(6,'2018_06_15_161831_create_librarians_table',1),(7,'2018_06_15_161835_create_students_table',1),(8,'2018_06_15_161837_create_undergraduates_table',1),(9,'2018_06_15_161843_create_postgraduates_table',1),(10,'2018_06_16_054728_create_company_sessions_table',1),(11,'2018_06_16_071903_create_company_evaluations_table',1),(12,'2018_06_16_072850_create_courses_table',1),(13,'2018_06_16_072856_create_sections_table',1),(14,'2018_06_16_072905_create_lab_sessions_table',1),(15,'2018_06_16_083527_create_authors_table',1),(16,'2018_06_16_084214_create_books_table',1),(17,'2018_06_16_100158_add_head_to_department',1),(18,'2018_06_16_100415_create_course_prerequisites_table',1),(19,'2018_06_16_101257_create_course_student_enrollments_table',1),(20,'2018_06_16_101830_create_section_student_enrollments_table',1),(21,'2018_06_16_102050_create_textbooks_table',1),(22,'2018_06_16_102626_create_book_authorships_table',1),(23,'2018_06_16_103440_create_company_session_enrollments_table',1),(24,'2018_06_22_123000_create_book_borrows_table',1),(25,'2018_06_24_141646_professors_view',1),(26,'2018_06_24_174435_students_view',1),(27,'2018_06_24_184023_lab_sessions_view',1),(28,'2018_06_25_120708_books_view',1),(29,'2018_06_25_130323_textbooks_view',1),(30,'2018_06_25_152011_company_sessions_view',1),(31,'2018_06_26_063311_departments_view',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `postgraduates`
--

DROP TABLE IF EXISTS `postgraduates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `postgraduates` (
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`student_id`),
  CONSTRAINT `fk_postgraduates_to_students` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `postgraduates`
--

LOCK TABLES `postgraduates` WRITE;
/*!40000 ALTER TABLE `postgraduates` DISABLE KEYS */;
INSERT INTO `postgraduates` VALUES ('2014cs0541');
/*!40000 ALTER TABLE `postgraduates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `professors`
--

DROP TABLE IF EXISTS `professors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `professors` (
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`employee_id`),
  KEY `fk_professors_to_departments` (`department_id`),
  CONSTRAINT `fk_professors_to_departments` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`),
  CONSTRAINT `professors_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `professors`
--

LOCK TABLES `professors` WRITE;
/*!40000 ALTER TABLE `professors` DISABLE KEYS */;
INSERT INTO `professors` VALUES ('emp1','ucsc',NULL),('emp3','science',NULL);
/*!40000 ALTER TABLE `professors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `professors_view`
--

DROP TABLE IF EXISTS `professors_view`;
/*!50001 DROP VIEW IF EXISTS `professors_view`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `professors_view` AS SELECT 
 1 AS `department`,
 1 AS `user_id`,
 1 AS `first_name`,
 1 AS `last_name`,
 1 AS `phone`,
 1 AS `employee_id`,
 1 AS `department_id`,
 1 AS `author_name`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `section_student_enrollments`
--

DROP TABLE IF EXISTS `section_student_enrollments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `section_student_enrollments` (
  `course_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` int(10) unsigned NOT NULL,
  `year` int(10) unsigned NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`course_id`,`section_id`,`semester`,`year`,`student_id`),
  KEY `fk_section_student_enrollments_to_students` (`student_id`),
  CONSTRAINT `fk_section_student_enrollments_to_sections` FOREIGN KEY (`course_id`, `section_id`, `semester`, `year`) REFERENCES `sections` (`course_id`, `section_id`, `semester`, `year`),
  CONSTRAINT `fk_section_student_enrollments_to_students` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section_student_enrollments`
--

LOCK TABLES `section_student_enrollments` WRITE;
/*!40000 ALTER TABLE `section_student_enrollments` DISABLE KEYS */;
/*!40000 ALTER TABLE `section_student_enrollments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sections`
--

DROP TABLE IF EXISTS `sections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sections` (
  `course_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` int(10) unsigned NOT NULL,
  `year` int(10) unsigned NOT NULL,
  `professor_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`course_id`,`section_id`,`semester`,`year`),
  KEY `fk_sections_to_professors` (`professor_id`),
  CONSTRAINT `fk_sections_to_courses` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`),
  CONSTRAINT `fk_sections_to_professors` FOREIGN KEY (`professor_id`) REFERENCES `professors` (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sections`
--

LOCK TABLES `sections` WRITE;
/*!40000 ALTER TABLE `sections` DISABLE KEYS */;
INSERT INTO `sections` VALUES ('database','scs1203',1,1,NULL),('programming','scs1202',1,2,NULL),('dsa','scs1201',1,1,'emp1'),('dsa','scs1301',2,1,'emp1');
/*!40000 ALTER TABLE `sections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`student_id`),
  KEY `fk_students_to_users` (`user_id`),
  CONSTRAINT `fk_students_to_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES ('2014cs0541',4,'Multiverse S201'),('2017cs1951',3,'Wonderland');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `students_view`
--

DROP TABLE IF EXISTS `students_view`;
/*!50001 DROP VIEW IF EXISTS `students_view`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `students_view` AS SELECT 
 1 AS `first_name`,
 1 AS `last_name`,
 1 AS `phone`,
 1 AS `address`,
 1 AS `student_id`,
 1 AS `level`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `textbooks`
--

DROP TABLE IF EXISTS `textbooks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `textbooks` (
  `professor_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`professor_id`,`course_id`),
  KEY `fk_textbooks_to_courses` (`course_id`),
  KEY `fk_textbooks_to_books` (`book_id`),
  CONSTRAINT `fk_textbooks_to_books` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`) ON DELETE CASCADE,
  CONSTRAINT `fk_textbooks_to_courses` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE,
  CONSTRAINT `fk_textbooks_to_professors` FOREIGN KEY (`professor_id`) REFERENCES `professors` (`employee_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `textbooks`
--

LOCK TABLES `textbooks` WRITE;
/*!40000 ALTER TABLE `textbooks` DISABLE KEYS */;
INSERT INTO `textbooks` VALUES ('emp1','9780262531962','dsa');
/*!40000 ALTER TABLE `textbooks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `textbooks_view`
--

DROP TABLE IF EXISTS `textbooks_view`;
/*!50001 DROP VIEW IF EXISTS `textbooks_view`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `textbooks_view` AS SELECT 
 1 AS `book_id`,
 1 AS `title`,
 1 AS `publisher`,
 1 AS `year`,
 1 AS `authors`,
 1 AS `course`,
 1 AS `course_id`,
 1 AS `professor`,
 1 AS `professor_id`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `undergraduates`
--

DROP TABLE IF EXISTS `undergraduates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `undergraduates` (
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`student_id`),
  CONSTRAINT `fk_undergraduates_to_students` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `undergraduates`
--

LOCK TABLES `undergraduates` WRITE;
/*!40000 ALTER TABLE `undergraduates` DISABLE KEYS */;
INSERT INTO `undergraduates` VALUES ('2017cs1951');
/*!40000 ALTER TABLE `undergraduates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'undergraduate',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','secret','Hywel','Emery','0712365498','admin'),(2,'professor','secret','Alexander','Lucero','0712365498','professor'),(3,'undergraduate','secret','John','Snow','0712365498','undergraduate'),(4,'postgraduate','secret','Allen','Webber','0712365498','postgraduate'),(5,'librarian','secret','James','Wattson','0712365498','librarian'),(6,'manager','secret','Sherlock','Holmes','0712365498','manager'),(20,'professor2','secret','Owais','Wallace','0712365498','professor');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `books_view`
--

/*!50001 DROP VIEW IF EXISTS `books_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`scs1203_take_home_1`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `books_view` AS select `book`.`book_id` AS `book_id`,`book`.`title` AS `title`,`book`.`publisher` AS `publisher`,`book`.`year` AS `year`,`book`.`copies` AS `copies`,group_concat(`authorship`.`author_name` order by `authorship`.`author_name` ASC separator ', ') AS `authors`,(`book`.`copies` - count(`borrow`.`student_id`)) AS `available` from ((`books` `book` left join `book_authorships` `authorship` on((`authorship`.`book_id` = `book`.`book_id`))) left join `book_borrows` `borrow` on(((`borrow`.`book_id` = `book`.`book_id`) and (`borrow`.`returned` = FALSE)))) group by `book`.`book_id` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `company_sessions_view`
--

/*!50001 DROP VIEW IF EXISTS `company_sessions_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`scs1203_take_home_1`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `company_sessions_view` AS select `session`.`company_session_year` AS `year`,`session`.`company_session_semester` AS `semester`,`session`.`manager_id` AS `manager_id`,count(`enrollment`.`undergraduate_id`) AS `enrollments` from (`company_sessions` `session` left join `company_session_enrollments` `enrollment` on(((`enrollment`.`company_session_year` = `session`.`company_session_year`) and (`enrollment`.`company_session_semester` = `session`.`company_session_semester`)))) group by `session`.`company_session_year`,`session`.`company_session_semester` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `departments_view`
--

/*!50001 DROP VIEW IF EXISTS `departments_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`scs1203_take_home_1`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `departments_view` AS select `department`.`department_id` AS `department_id`,`department`.`name` AS `name`,`department`.`location` AS `location`,`department`.`phone` AS `phone`,concat(`head`.`first_name`,' ',`head`.`last_name`) AS `department_head_name` from (`departments` `department` left join `professors_view` `head` on((`head`.`employee_id` = `department`.`department_head_id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `lab_sessions_view`
--

/*!50001 DROP VIEW IF EXISTS `lab_sessions_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`scs1203_take_home_1`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `lab_sessions_view` AS select `department`.`name` AS `department`,`department`.`department_id` AS `department_id`,`course`.`course_id` AS `course_id`,`course`.`name` AS `course_name`,`section`.`section_id` AS `section_id`,`section`.`year` AS `year`,`section`.`semester` AS `semester`,`section`.`professor_id` AS `professor_id`,`lab_session`.`topic` AS `topic`,`lab_session`.`start_time` AS `start_time`,`lab_session`.`end_time` AS `end_time`,`lab_session`.`location` AS `location`,`lab_session`.`conductor_id` AS `conductor_id`,concat(`conductor`.`first_name`,' ',`conductor`.`last_name`) AS `conductor_name` from ((((`scs1203_take_home_1`.`departments` `department` join `scs1203_take_home_1`.`courses` `course` on((`course`.`department_id` = `department`.`department_id`))) join `scs1203_take_home_1`.`sections` `section` on((`section`.`course_id` = `course`.`course_id`))) join `scs1203_take_home_1`.`lab_sessions` `lab_session` on(((`lab_session`.`course_id` = `course`.`course_id`) and (`lab_session`.`section_id` = `section`.`section_id`) and (`lab_session`.`semester` = `section`.`semester`) and (`lab_session`.`year` = `section`.`year`)))) left join `scs1203_take_home_1`.`students_view` `conductor` on((`conductor`.`student_id` = `lab_session`.`conductor_id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `professors_view`
--

/*!50001 DROP VIEW IF EXISTS `professors_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`scs1203_take_home_1`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `professors_view` AS select `department`.`name` AS `department`,`user`.`user_id` AS `user_id`,`user`.`first_name` AS `first_name`,`user`.`last_name` AS `last_name`,`user`.`phone` AS `phone`,`employee`.`employee_id` AS `employee_id`,`professor`.`department_id` AS `department_id`,`professor`.`author_name` AS `author_name` from (((`users` `user` join `employees` `employee` on((`employee`.`user_id` = `user`.`user_id`))) join `professors` `professor` on((`professor`.`employee_id` = `employee`.`employee_id`))) join `departments` `department` on((`department`.`department_id` = `professor`.`department_id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `students_view`
--

/*!50001 DROP VIEW IF EXISTS `students_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`scs1203_take_home_1`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `students_view` AS select `user`.`first_name` AS `first_name`,`user`.`last_name` AS `last_name`,`user`.`phone` AS `phone`,`student`.`address` AS `address`,`student`.`student_id` AS `student_id`,`student_level`.`role` AS `level` from ((`scs1203_take_home_1`.`users` `user` join `scs1203_take_home_1`.`students` `student` on((`student`.`user_id` = `user`.`user_id`))) join (select 'undergraduate' AS `role`,`ug`.`student_id` AS `student_id` from `scs1203_take_home_1`.`undergraduates` `ug` union select 'postgraduate' AS `role`,`pg`.`student_id` AS `student_id` from `scs1203_take_home_1`.`postgraduates` `pg`) `student_level` on((`student_level`.`student_id` = `student`.`student_id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `textbooks_view`
--

/*!50001 DROP VIEW IF EXISTS `textbooks_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`scs1203_take_home_1`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `textbooks_view` AS select `book`.`book_id` AS `book_id`,`book`.`title` AS `title`,`book`.`publisher` AS `publisher`,`book`.`year` AS `year`,`book`.`authors` AS `authors`,`course`.`name` AS `course`,`course`.`course_id` AS `course_id`,`professor`.`first_name` AS `professor`,`professor`.`employee_id` AS `professor_id` from (((`textbooks` `textbook` join `books_view` `book` on((`textbook`.`book_id` = `book`.`book_id`))) join `professors_view` `professor` on((`professor`.`employee_id` = `textbook`.`professor_id`))) join `courses` `course` on((`course`.`course_id` = `textbook`.`course_id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-01 17:09:44
