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
  PRIMARY KEY (`author_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authors`
--

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `book_authorships` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book_copies`
--

DROP TABLE IF EXISTS `book_copies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book_copies` (
  `book_copy_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `book_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `borrowed_student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`book_copy_id`),
  KEY `fk_book_copies_to_books` (`book_id`),
  KEY `fk_book_copies_to_students` (`borrowed_student_id`),
  CONSTRAINT `fk_book_copies_to_books` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`),
  CONSTRAINT `fk_book_copies_to_students` FOREIGN KEY (`borrowed_student_id`) REFERENCES `students` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book_copies`
--

LOCK TABLES `book_copies` WRITE;
/*!40000 ALTER TABLE `book_copies` DISABLE KEYS */;
/*!40000 ALTER TABLE `book_copies` ENABLE KEYS */;
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
  `year` int(10) unsigned NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

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
  `college` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `department_head_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;

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
  `section_id` int(10) unsigned NOT NULL,
  `semester` int(10) unsigned NOT NULL,
  `year` int(10) unsigned NOT NULL,
  `lab_session_id` int(10) unsigned NOT NULL,
  `conductor_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `topic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`course_id`,`section_id`,`semester`,`year`,`lab_session_id`),
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
/*!40000 ALTER TABLE `lab_sessions` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=148 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (123,'2014_10_12_000000_create_users_table',1),(124,'2018_06_15_072844_create_departments_table',1),(125,'2018_06_15_083527_create_authors_table',1),(126,'2018_06_15_161753_create_employees_table',1),(127,'2018_06_15_161815_create_professors_table',1),(128,'2018_06_15_161823_create_managers_table',1),(129,'2018_06_15_161831_create_librarians_table',1),(130,'2018_06_15_161835_create_students_table',1),(131,'2018_06_15_161837_create_undergraduates_table',1),(132,'2018_06_15_161843_create_postgraduates_table',1),(133,'2018_06_16_054728_create_company_sessions_table',1),(134,'2018_06_16_071903_create_company_evaluations_table',1),(135,'2018_06_16_072850_create_courses_table',1),(136,'2018_06_16_072856_create_sections_table',1),(137,'2018_06_16_072905_create_lab_sessions_table',1),(138,'2018_06_16_084214_create_books_table',1),(139,'2018_06_16_084517_create_book_copies_table',1),(140,'2018_06_16_100158_add_head_to_department',1),(141,'2018_06_16_100415_create_course_prerequisites_table',1),(142,'2018_06_16_101257_create_course_student_enrollments_table',1),(143,'2018_06_16_101830_create_section_student_enrollments_table',1),(144,'2018_06_16_102050_create_textbooks_table',1),(145,'2018_06_16_102626_create_book_authorships_table',1),(146,'2018_06_16_103440_create_company_session_enrollments_table',1),(147,'2018_06_23_190653_user_roles_view',1);
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
  KEY `fk_professors_to_authors` (`author_name`),
  CONSTRAINT `fk_professors_to_authors` FOREIGN KEY (`author_name`) REFERENCES `authors` (`author_name`),
  CONSTRAINT `fk_professors_to_departments` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`),
  CONSTRAINT `professors_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `professors`
--

LOCK TABLES `professors` WRITE;
/*!40000 ALTER TABLE `professors` DISABLE KEYS */;
/*!40000 ALTER TABLE `professors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section_student_enrollments`
--

DROP TABLE IF EXISTS `section_student_enrollments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `section_student_enrollments` (
  `course_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_id` int(10) unsigned NOT NULL,
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
  `section_id` int(10) unsigned NOT NULL,
  `semester` int(10) unsigned NOT NULL,
  `year` int(10) unsigned NOT NULL,
  `professor_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

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
/*!40000 ALTER TABLE `textbooks` ENABLE KEYS */;
UNLOCK TABLES;

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
/*!40000 ALTER TABLE `undergraduates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `userRoles`
--

DROP TABLE IF EXISTS `userRoles`;
/*!50001 DROP VIEW IF EXISTS `userRoles`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `userRoles` AS SELECT 
 1 AS `user_id`,
 1 AS `is_admin`,
 1 AS `is_student`,
 1 AS `is_employee`,
 1 AS `is_professor`,
 1 AS `is_manager`,
 1 AS `is_librarian`*/;
SET character_set_client = @saved_cs_client;

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
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `userRoles`
--

/*!50001 DROP VIEW IF EXISTS `userRoles`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `userRoles` AS select `user`.`user_id` AS `user_id`,`user`.`is_admin` AS `is_admin`,(`student`.`user_id` is not null) AS `is_student`,(`employee`.`user_id` is not null) AS `is_employee`,(`professor`.`employee_id` is not null) AS `is_professor`,(`manager`.`employee_id` is not null) AS `is_manager`,(`librarian`.`employee_id` is not null) AS `is_librarian` from (((((`users` `user` left join `students` `student` on((`user`.`user_id` = `student`.`user_id`))) left join `employees` `employee` on((`user`.`user_id` = `employee`.`user_id`))) left join `professors` `professor` on((`employee`.`employee_id` = `professor`.`employee_id`))) left join `managers` `manager` on((`employee`.`employee_id` = `manager`.`employee_id`))) left join `librarians` `librarian` on((`employee`.`employee_id` = `librarian`.`employee_id`))) */;
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

-- Dump completed on 2018-06-24  1:57:33
