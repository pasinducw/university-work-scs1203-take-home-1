-- MySQL Script generated by MySQL Workbench
-- Tue Jun 26 16:32:36 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema scs1203_take_home_1
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema scs1203_take_home_1
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `scs1203_take_home_1` DEFAULT CHARACTER SET latin1 ;
USE `scs1203_take_home_1` ;

-- -----------------------------------------------------
-- Table `scs1203_take_home_1`.`departments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scs1203_take_home_1`.`departments` (
  `department_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `name` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `location` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `phone` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `department_head_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NULL DEFAULT NULL,
  PRIMARY KEY (`department_id`),
  UNIQUE INDEX `departments_name_unique` (`name` ASC),
  INDEX `fk_departments_to_professors` (`department_head_id` ASC),
  CONSTRAINT `fk_departments_to_professors`
    FOREIGN KEY (`department_head_id`)
    REFERENCES `scs1203_take_home_1`.`professors` (`employee_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `scs1203_take_home_1`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scs1203_take_home_1`.`users` (
  `user_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `password` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `first_name` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `last_name` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `phone` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NULL DEFAULT NULL,
  `role` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL DEFAULT 'undergraduate',
  PRIMARY KEY (`user_id`),
  UNIQUE INDEX `users_username_unique` (`username` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `scs1203_take_home_1`.`employees`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scs1203_take_home_1`.`employees` (
  `employee_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `user_id` INT(10) UNSIGNED NULL DEFAULT NULL,
  PRIMARY KEY (`employee_id`),
  INDEX `fk_employees_to_users` (`user_id` ASC),
  CONSTRAINT `fk_employees_to_users`
    FOREIGN KEY (`user_id`)
    REFERENCES `scs1203_take_home_1`.`users` (`user_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `scs1203_take_home_1`.`professors`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scs1203_take_home_1`.`professors` (
  `employee_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `department_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `author_name` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NULL DEFAULT NULL,
  PRIMARY KEY (`employee_id`),
  INDEX `fk_professors_to_departments` (`department_id` ASC),
  CONSTRAINT `fk_professors_to_departments`
    FOREIGN KEY (`department_id`)
    REFERENCES `scs1203_take_home_1`.`departments` (`department_id`),
  CONSTRAINT `professors_employee_id_foreign`
    FOREIGN KEY (`employee_id`)
    REFERENCES `scs1203_take_home_1`.`employees` (`employee_id`)
    ON DELETE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `scs1203_take_home_1`.`authors`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scs1203_take_home_1`.`authors` (
  `author_name` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `professor_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NULL DEFAULT NULL,
  PRIMARY KEY (`author_name`),
  INDEX `fk_authors_to_professors` (`professor_id` ASC),
  CONSTRAINT `fk_authors_to_professors`
    FOREIGN KEY (`professor_id`)
    REFERENCES `scs1203_take_home_1`.`professors` (`employee_id`)
    ON DELETE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `scs1203_take_home_1`.`books`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scs1203_take_home_1`.`books` (
  `book_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `title` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `publisher` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `copies` INT(10) UNSIGNED NOT NULL,
  `year` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`book_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `scs1203_take_home_1`.`book_authorships`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scs1203_take_home_1`.`book_authorships` (
  `book_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `author_name` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  PRIMARY KEY (`book_id`, `author_name`),
  INDEX `fk_book_authorships_to_authors` (`author_name` ASC),
  CONSTRAINT `fk_book_authorships_to_authors`
    FOREIGN KEY (`author_name`)
    REFERENCES `scs1203_take_home_1`.`authors` (`author_name`)
    ON DELETE CASCADE,
  CONSTRAINT `fk_book_authorships_to_books`
    FOREIGN KEY (`book_id`)
    REFERENCES `scs1203_take_home_1`.`books` (`book_id`)
    ON DELETE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `scs1203_take_home_1`.`students`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scs1203_take_home_1`.`students` (
  `student_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `user_id` INT(10) UNSIGNED NULL DEFAULT NULL,
  `address` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NULL DEFAULT NULL,
  PRIMARY KEY (`student_id`),
  INDEX `fk_students_to_users` (`user_id` ASC),
  CONSTRAINT `fk_students_to_users`
    FOREIGN KEY (`user_id`)
    REFERENCES `scs1203_take_home_1`.`users` (`user_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `scs1203_take_home_1`.`book_borrows`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scs1203_take_home_1`.`book_borrows` (
  `book_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `student_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `returned` TINYINT(1) NOT NULL DEFAULT '0',
  INDEX `fk_book_borrows_to_books` (`book_id` ASC),
  INDEX `fk_book_borrows_to_students` (`student_id` ASC),
  CONSTRAINT `fk_book_borrows_to_books`
    FOREIGN KEY (`book_id`)
    REFERENCES `scs1203_take_home_1`.`books` (`book_id`)
    ON DELETE CASCADE,
  CONSTRAINT `fk_book_borrows_to_students`
    FOREIGN KEY (`student_id`)
    REFERENCES `scs1203_take_home_1`.`students` (`student_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `scs1203_take_home_1`.`undergraduates`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scs1203_take_home_1`.`undergraduates` (
  `student_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  PRIMARY KEY (`student_id`),
  CONSTRAINT `fk_undergraduates_to_students`
    FOREIGN KEY (`student_id`)
    REFERENCES `scs1203_take_home_1`.`students` (`student_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `scs1203_take_home_1`.`company_evaluations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scs1203_take_home_1`.`company_evaluations` (
  `ungergraduate_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `company_evaluation_year` INT(10) UNSIGNED NOT NULL,
  `company_evaluation_semester` INT(10) UNSIGNED NOT NULL,
  `company_name` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `evaluation` TEXT CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  PRIMARY KEY (`ungergraduate_id`, `company_evaluation_year`, `company_evaluation_semester`),
  CONSTRAINT `fk_company_evaluations_to_students`
    FOREIGN KEY (`ungergraduate_id`)
    REFERENCES `scs1203_take_home_1`.`undergraduates` (`student_id`)
    ON DELETE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `scs1203_take_home_1`.`company_sessions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scs1203_take_home_1`.`company_sessions` (
  `company_session_year` INT(10) UNSIGNED NOT NULL,
  `company_session_semester` INT(10) UNSIGNED NOT NULL,
  `manager_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  PRIMARY KEY (`company_session_year`, `company_session_semester`),
  INDEX `fk_company_sessions_to_managers` (`manager_id` ASC),
  CONSTRAINT `fk_company_sessions_to_managers`
    FOREIGN KEY (`manager_id`)
    REFERENCES `scs1203_take_home_1`.`employees` (`employee_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `scs1203_take_home_1`.`company_session_enrollments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scs1203_take_home_1`.`company_session_enrollments` (
  `company_session_year` INT(10) UNSIGNED NOT NULL,
  `company_session_semester` INT(10) UNSIGNED NOT NULL,
  `undergraduate_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  PRIMARY KEY (`company_session_year`, `company_session_semester`, `undergraduate_id`),
  INDEX `fk_company_session_enrollments_to_undergraduates` (`undergraduate_id` ASC),
  CONSTRAINT `fk_company_session_enrollments_to_company_sessions`
    FOREIGN KEY (`company_session_year` , `company_session_semester`)
    REFERENCES `scs1203_take_home_1`.`company_sessions` (`company_session_year` , `company_session_semester`),
  CONSTRAINT `fk_company_session_enrollments_to_undergraduates`
    FOREIGN KEY (`undergraduate_id`)
    REFERENCES `scs1203_take_home_1`.`undergraduates` (`student_id`)
    ON DELETE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `scs1203_take_home_1`.`courses`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scs1203_take_home_1`.`courses` (
  `course_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `name` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `department_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `credit_hours` INT(10) UNSIGNED NOT NULL,
  `college` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL DEFAULT 'None',
  PRIMARY KEY (`course_id`),
  INDEX `fk_courses_to_departments` (`department_id` ASC),
  CONSTRAINT `fk_courses_to_departments`
    FOREIGN KEY (`department_id`)
    REFERENCES `scs1203_take_home_1`.`departments` (`department_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `scs1203_take_home_1`.`course_prerequisites`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scs1203_take_home_1`.`course_prerequisites` (
  `course_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `depending_course_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  PRIMARY KEY (`course_id`, `depending_course_id`),
  INDEX `fk_course_prerequisites_to_depending` (`depending_course_id` ASC),
  CONSTRAINT `fk_course_prerequisites_to_depender`
    FOREIGN KEY (`course_id`)
    REFERENCES `scs1203_take_home_1`.`courses` (`course_id`)
    ON DELETE CASCADE,
  CONSTRAINT `fk_course_prerequisites_to_depending`
    FOREIGN KEY (`depending_course_id`)
    REFERENCES `scs1203_take_home_1`.`courses` (`course_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `scs1203_take_home_1`.`course_student_enrollments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scs1203_take_home_1`.`course_student_enrollments` (
  `course_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `student_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `grade` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  PRIMARY KEY (`course_id`, `student_id`),
  INDEX `fk_course_student_enrollments_to_students` (`student_id` ASC),
  CONSTRAINT `fk_course_student_enrollments_to_courses`
    FOREIGN KEY (`course_id`)
    REFERENCES `scs1203_take_home_1`.`courses` (`course_id`),
  CONSTRAINT `fk_course_student_enrollments_to_students`
    FOREIGN KEY (`student_id`)
    REFERENCES `scs1203_take_home_1`.`students` (`student_id`)
    ON DELETE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `scs1203_take_home_1`.`postgraduates`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scs1203_take_home_1`.`postgraduates` (
  `student_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  PRIMARY KEY (`student_id`),
  CONSTRAINT `fk_postgraduates_to_students`
    FOREIGN KEY (`student_id`)
    REFERENCES `scs1203_take_home_1`.`students` (`student_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `scs1203_take_home_1`.`sections`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scs1203_take_home_1`.`sections` (
  `course_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `section_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `semester` INT(10) UNSIGNED NOT NULL,
  `year` INT(10) UNSIGNED NOT NULL,
  `professor_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NULL DEFAULT NULL,
  PRIMARY KEY (`course_id`, `section_id`, `semester`, `year`),
  INDEX `fk_sections_to_professors` (`professor_id` ASC),
  CONSTRAINT `fk_sections_to_courses`
    FOREIGN KEY (`course_id`)
    REFERENCES `scs1203_take_home_1`.`courses` (`course_id`),
  CONSTRAINT `fk_sections_to_professors`
    FOREIGN KEY (`professor_id`)
    REFERENCES `scs1203_take_home_1`.`professors` (`employee_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `scs1203_take_home_1`.`lab_sessions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scs1203_take_home_1`.`lab_sessions` (
  `course_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `section_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `semester` INT(10) UNSIGNED NOT NULL,
  `year` INT(10) UNSIGNED NOT NULL,
  `topic` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `conductor_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NULL DEFAULT NULL,
  `start_time` TIME NOT NULL,
  `end_time` TIME NOT NULL,
  `location` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  PRIMARY KEY (`course_id`, `section_id`, `semester`, `year`, `topic`),
  INDEX `fk_lab_sessions_to_postgraduates` (`conductor_id` ASC),
  CONSTRAINT `fk_lab_sessions_to_postgraduates`
    FOREIGN KEY (`conductor_id`)
    REFERENCES `scs1203_take_home_1`.`postgraduates` (`student_id`),
  CONSTRAINT `fk_lab_sessions_to_sections`
    FOREIGN KEY (`course_id` , `section_id` , `semester` , `year`)
    REFERENCES `scs1203_take_home_1`.`sections` (`course_id` , `section_id` , `semester` , `year`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `scs1203_take_home_1`.`librarians`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scs1203_take_home_1`.`librarians` (
  `employee_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  PRIMARY KEY (`employee_id`),
  CONSTRAINT `fk_librarians_to_employees`
    FOREIGN KEY (`employee_id`)
    REFERENCES `scs1203_take_home_1`.`employees` (`employee_id`)
    ON DELETE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `scs1203_take_home_1`.`managers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scs1203_take_home_1`.`managers` (
  `employee_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  PRIMARY KEY (`employee_id`),
  CONSTRAINT `fk_managers_to_employees`
    FOREIGN KEY (`employee_id`)
    REFERENCES `scs1203_take_home_1`.`employees` (`employee_id`)
    ON DELETE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `scs1203_take_home_1`.`migrations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scs1203_take_home_1`.`migrations` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `batch` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 31
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `scs1203_take_home_1`.`section_student_enrollments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scs1203_take_home_1`.`section_student_enrollments` (
  `course_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `section_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `semester` INT(10) UNSIGNED NOT NULL,
  `year` INT(10) UNSIGNED NOT NULL,
  `student_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  PRIMARY KEY (`course_id`, `section_id`, `semester`, `year`, `student_id`),
  INDEX `fk_section_student_enrollments_to_students` (`student_id` ASC),
  CONSTRAINT `fk_section_student_enrollments_to_sections`
    FOREIGN KEY (`course_id` , `section_id` , `semester` , `year`)
    REFERENCES `scs1203_take_home_1`.`sections` (`course_id` , `section_id` , `semester` , `year`),
  CONSTRAINT `fk_section_student_enrollments_to_students`
    FOREIGN KEY (`student_id`)
    REFERENCES `scs1203_take_home_1`.`students` (`student_id`)
    ON DELETE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `scs1203_take_home_1`.`textbooks`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scs1203_take_home_1`.`textbooks` (
  `professor_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `book_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  `course_id` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
  PRIMARY KEY (`professor_id`, `course_id`),
  INDEX `fk_textbooks_to_courses` (`course_id` ASC),
  INDEX `fk_textbooks_to_books` (`book_id` ASC),
  CONSTRAINT `fk_textbooks_to_books`
    FOREIGN KEY (`book_id`)
    REFERENCES `scs1203_take_home_1`.`books` (`book_id`)
    ON DELETE CASCADE,
  CONSTRAINT `fk_textbooks_to_courses`
    FOREIGN KEY (`course_id`)
    REFERENCES `scs1203_take_home_1`.`courses` (`course_id`)
    ON DELETE CASCADE,
  CONSTRAINT `fk_textbooks_to_professors`
    FOREIGN KEY (`professor_id`)
    REFERENCES `scs1203_take_home_1`.`professors` (`employee_id`)
    ON DELETE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;

USE `scs1203_take_home_1` ;

-- -----------------------------------------------------
-- Placeholder table for view `scs1203_take_home_1`.`books_view`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scs1203_take_home_1`.`books_view` (`book_id` INT, `title` INT, `publisher` INT, `year` INT, `copies` INT, `authors` INT, `available` INT);

-- -----------------------------------------------------
-- Placeholder table for view `scs1203_take_home_1`.`company_sessions_view`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scs1203_take_home_1`.`company_sessions_view` (`year` INT, `semester` INT, `manager_id` INT, `enrollments` INT);

-- -----------------------------------------------------
-- Placeholder table for view `scs1203_take_home_1`.`professors_view`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scs1203_take_home_1`.`professors_view` (`department` INT, `user_id` INT, `first_name` INT, `last_name` INT, `phone` INT, `employee_id` INT, `department_id` INT, `author_name` INT);

-- -----------------------------------------------------
-- Placeholder table for view `scs1203_take_home_1`.`students_view`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scs1203_take_home_1`.`students_view` (`first_name` INT, `last_name` INT, `phone` INT, `address` INT, `student_id` INT, `level` INT);

-- -----------------------------------------------------
-- Placeholder table for view `scs1203_take_home_1`.`textbooks_view`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scs1203_take_home_1`.`textbooks_view` (`book_id` INT, `title` INT, `publisher` INT, `year` INT, `authors` INT, `course` INT, `course_id` INT, `professor` INT, `professor_id` INT);

-- -----------------------------------------------------
-- View `scs1203_take_home_1`.`books_view`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `scs1203_take_home_1`.`books_view`;
USE `scs1203_take_home_1`;
CREATE  OR REPLACE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `scs1203_take_home_1`.`books_view` AS select `book`.`book_id` AS `book_id`,`book`.`title` AS `title`,`book`.`publisher` AS `publisher`,`book`.`year` AS `year`,`book`.`copies` AS `copies`,group_concat(`authorship`.`author_name` order by `authorship`.`author_name` ASC separator ', ') AS `authors`,(`book`.`copies` - count(`borrow`.`student_id`)) AS `available` from ((`scs1203_take_home_1`.`books` `book` left join `scs1203_take_home_1`.`book_authorships` `authorship` on((`authorship`.`book_id` = `book`.`book_id`))) left join `scs1203_take_home_1`.`book_borrows` `borrow` on(((`borrow`.`book_id` = `book`.`book_id`) and (`borrow`.`returned` = FALSE)))) group by `book`.`book_id`;

-- -----------------------------------------------------
-- View `scs1203_take_home_1`.`company_sessions_view`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `scs1203_take_home_1`.`company_sessions_view`;
USE `scs1203_take_home_1`;
CREATE  OR REPLACE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `scs1203_take_home_1`.`company_sessions_view` AS select `session`.`company_session_year` AS `year`,`session`.`company_session_semester` AS `semester`,`session`.`manager_id` AS `manager_id`,count(`enrollment`.`undergraduate_id`) AS `enrollments` from (`scs1203_take_home_1`.`company_sessions` `session` left join `scs1203_take_home_1`.`company_session_enrollments` `enrollment` on(((`enrollment`.`company_session_year` = `session`.`company_session_year`) and (`enrollment`.`company_session_semester` = `session`.`company_session_semester`)))) group by `session`.`company_session_year`,`session`.`company_session_semester`;

-- -----------------------------------------------------
-- View `scs1203_take_home_1`.`professors_view`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `scs1203_take_home_1`.`professors_view`;
USE `scs1203_take_home_1`;
CREATE  OR REPLACE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `scs1203_take_home_1`.`professors_view` AS select `department`.`name` AS `department`,`user`.`user_id` AS `user_id`,`user`.`first_name` AS `first_name`,`user`.`last_name` AS `last_name`,`user`.`phone` AS `phone`,`employee`.`employee_id` AS `employee_id`,`professor`.`department_id` AS `department_id`,`professor`.`author_name` AS `author_name` from (((`scs1203_take_home_1`.`users` `user` join `scs1203_take_home_1`.`employees` `employee` on((`employee`.`user_id` = `user`.`user_id`))) join `scs1203_take_home_1`.`professors` `professor` on((`professor`.`employee_id` = `employee`.`employee_id`))) join `scs1203_take_home_1`.`departments` `department` on((`department`.`department_id` = `professor`.`department_id`)));

-- -----------------------------------------------------
-- View `scs1203_take_home_1`.`students_view`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `scs1203_take_home_1`.`students_view`;
USE `scs1203_take_home_1`;
CREATE  OR REPLACE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `scs1203_take_home_1`.`students_view` AS select `user`.`first_name` AS `first_name`,`user`.`last_name` AS `last_name`,`user`.`phone` AS `phone`,`student`.`address` AS `address`,`student`.`student_id` AS `student_id`,`student_level`.`role` AS `level` from ((`scs1203_take_home_1`.`users` `user` join `scs1203_take_home_1`.`students` `student` on((`student`.`user_id` = `user`.`user_id`))) join (select 'undergraduate' AS `role`,`ug`.`student_id` AS `student_id` from `scs1203_take_home_1`.`undergraduates` `ug` union select 'postgraduate' AS `role`,`pg`.`student_id` AS `student_id` from `scs1203_take_home_1`.`postgraduates` `pg`) `student_level` on((`student_level`.`student_id` = `student`.`student_id`)));

-- -----------------------------------------------------
-- View `scs1203_take_home_1`.`textbooks_view`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `scs1203_take_home_1`.`textbooks_view`;
USE `scs1203_take_home_1`;
CREATE  OR REPLACE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `scs1203_take_home_1`.`textbooks_view` AS select `book`.`book_id` AS `book_id`,`book`.`title` AS `title`,`book`.`publisher` AS `publisher`,`book`.`year` AS `year`,`book`.`authors` AS `authors`,`course`.`name` AS `course`,`course`.`course_id` AS `course_id`,`professor`.`first_name` AS `professor`,`professor`.`employee_id` AS `professor_id` from (((`scs1203_take_home_1`.`textbooks` `textbook` join `scs1203_take_home_1`.`books_view` `book` on((`textbook`.`book_id` = `book`.`book_id`))) join `scs1203_take_home_1`.`professors_view` `professor` on((`professor`.`employee_id` = `textbook`.`professor_id`))) join `scs1203_take_home_1`.`courses` `course` on((`course`.`course_id` = `textbook`.`course_id`)));

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
