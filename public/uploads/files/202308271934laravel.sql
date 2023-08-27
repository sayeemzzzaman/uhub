-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2023 at 04:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `auther` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `shelf` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `auther`, `description`, `shelf`, `photo`, `created_at`, `updated_at`) VALUES
(2, 'Electrical Circuits', 'Md Abdus Salam', 'circuits', 'row: 2 colum:10', '202308260258978-981-10-8624-3.jfif', NULL, NULL),
(3, 'Compilers: Principles, Techniques', 'Alfred V. Aho, Monica S. Lam, Ravi Sethi, and Jeffrey D. Ullman', 'It is known as the Dragon Book to generations of computer scientists[3][4] as its cover depicts a knight and a dragon in battle, a metaphor for conquering complexity. This name can also refer to Aho and Ullman\'s older Principles of Compiler Design.', 'row: 2 , shelf: 6', '202308270507Purple_dragon_book_b.jpg', NULL, NULL),
(4, 'Algorithms to Live By: The Computer Science of Human Decisions', 'Brian Christian, Griffiths', 'this dazzlingly interdisciplinary work, acclaimed author Brian Christian and cognitive scientist Tom Gothers.  From', 'row: 2 , shelf: 1', '202308270534images (1).jfif', NULL, NULL),
(5, 'Designing Data-Intensive Applications', 'Martin Kleppmann', 'Data is at the center of many challenges in system design today. Difficult issues need to be figured out, such as scalability, consistency, reliability, ef', 'self:2, row :5', '202308270538images (2).jfif', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE IF NOT EXISTS `clubs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `formLink` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`id`, `name`, `logo`, `formLink`, `description`, `created_at`, `updated_at`) VALUES
(1, 'SIAS', '202308260304SIAS 1.png', 'google.com', 'Sias', NULL, NULL),
(2, 'SIAS', '202308260307SIAS 1.png', 'google.com', 'Sias', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `projectId` varchar(255) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `projectId`, `userId`, `name`, `message`, `created_at`, `updated_at`) VALUES
(1, '4', '1', 'Wasi galib', 'good project', NULL, NULL),
(2, '4', '1', 'salman saad', 'wonderfull', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `designation` enum('Faculty','Lab attendent','TA') NOT NULL DEFAULT 'TA',
  `email` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `counseling_hour` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `image`, `designation`, `email`, `description`, `counseling_hour`, `created_at`, `updated_at`) VALUES
(1, 'Md Nurul Huda', '202308260300images.jfif', 'Faculty', 'nurulhuda@cse.uiu.ac.bd', 'Head of CSE', 'sddfs_dsjfhskjfh,Thursday_11:30 AM - 12:30 PM,Tuesday_10:00AM - 12:30 PM', NULL, '2023-08-26 23:51:28'),
(2, 'Wasimul', '202308260303Ellipse 1823.png', 'TA', 'wasimul@gmail.com', 'DS2 TA', NULL, NULL, NULL),
(3, 'AHMMED, SUMAN', '202308270632sa.jpg', 'Faculty', 'suman@cse.uiu.ac.bd', 'Asst. Professor, CSE | Director, Center for Development of IT Professionals (CDIP)', NULL, NULL, NULL),
(4, 'BASHIR MINHAJUL', '202308270633pic-uiu-768x631.jpg', 'Faculty', 'minhajul@cse.uiu.ac.bd', 'Lecturer', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `counsellings`
--

CREATE TABLE IF NOT EXISTS `counsellings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `studentId` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `status` enum('pending','accepted','rejected') NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counsellings`
--

INSERT INTO `counsellings` (`id`, `created_at`, `updated_at`, `studentId`, `day`, `time`, `faculty`, `status`) VALUES
(1, NULL, '2023-08-26 23:47:02', 'student', 'Thursday', '11:30 AM - 12:30 PM', 'Md Nurul Huda', 'pending'),
(2, NULL, NULL, '011211115', 'Wednesday', '2pm- 4pm', 'md zohir', 'pending'),
(3, NULL, NULL, '011211115', 'Monday', '11:30pm - 1:50pm', 'Wasimul Karim', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `projectId` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `projectId`, `name`, `link`, `created_at`, `updated_at`) VALUES
(1, '4', 'final project', 'dd.zip', NULL, NULL),
(2, '4', 'code zip', 'JetBrainsMono-1.0.3.zip', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(72, '2014_10_12_000000_create_users_table', 1),
(73, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(74, '2019_08_19_000000_create_failed_jobs_table', 1),
(75, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(76, '2023_08_11_034248_create_books_table', 1),
(77, '2023_08_11_231102_create_requisitions_table', 1),
(78, '2023_08_12_022455_create_contacts_table', 1),
(79, '2023_08_18_210049_create_clubs_table', 1),
(80, '2023_08_24_102619_create_counsellings_table', 1),
(81, '2023_08_25_121901_create_projects_table', 1),
(82, '2023_08_25_173553_create_files_table', 2),
(83, '2023_08_25_192718_create_comments_table', 3),
(84, '2023_08_26_015039_create_papers_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `papers`
--

CREATE TABLE IF NOT EXISTS `papers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `contributors` varchar(255) NOT NULL,
  `github` varchar(255) DEFAULT NULL,
  `scholar` varchar(255) DEFAULT NULL,
  `owner` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `paperLink` varchar(255) NOT NULL,
  `like` int(11) DEFAULT NULL,
  `dept` enum('cse','eee','civil') NOT NULL DEFAULT 'cse',
  `status` enum('public','private') NOT NULL DEFAULT 'private',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `contributors` varchar(255) NOT NULL,
  `github` varchar(255) DEFAULT NULL,
  `scholar` varchar(255) DEFAULT NULL,
  `owner` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `like` int(11) DEFAULT NULL,
  `dept` enum('cse','eee','civil') NOT NULL DEFAULT 'cse',
  `status` enum('public','private') NOT NULL DEFAULT 'private',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `logo`, `contributors`, `github`, `scholar`, `owner`, `bio`, `like`, `dept`, `status`, `created_at`, `updated_at`) VALUES
(2, 'cargod', NULL, 'student,wasi,Salman Saad', NULL, NULL, 'student', 'believable. If you are going to use a passage of Lorem Ipsum, you ', 34, 'cse', 'public', NULL, NULL),
(3, 'Car Maker seed', NULL, 'saad,fdsg,th', NULL, NULL, '011211115', 'There are many variations of passages of Lorem Ipsum available, ', 956, 'cse', 'public', NULL, NULL),
(4, 'UPMS', NULL, 'Wasimul, Salman, Sayeem', 'sayeemzzzaman.guthub.io', NULL, '011211115', 'professor at Hampden-Sydney College in Virginia, looked up one of ', 234, 'cse', 'public', NULL, NULL),
(5, 'Hostel Management System', NULL, 'Salman Saad, wasi, Sayeem', NULL, NULL, 'student', 'The standard chunk of Lorem Ipsum used since the 1500s is r', 645, 'eee', 'public', NULL, NULL),
(6, 'Road Tracking', NULL, 'Saad, Ornob', NULL, NULL, '011211115', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,', 375, 'civil', 'public', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `requisitions`
--

CREATE TABLE IF NOT EXISTS `requisitions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `requisitionsId` varchar(255) NOT NULL,
  `bookID` varchar(255) NOT NULL,
  `studentID` varchar(255) NOT NULL,
  `bookName` varchar(255) NOT NULL,
  `status` enum('pending','accepted','rejected') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requisitions`
--

INSERT INTO `requisitions` (`id`, `requisitionsId`, `bookID`, `studentID`, `bookName`, `status`, `created_at`, `updated_at`) VALUES
(1, '2063417301', '2', '011211115', 'Electrical Circuits', 'pending', NULL, '2023-08-26 23:42:26'),
(2, '234423', '232', '011211115', 'Electrical Circuits', 'pending', NULL, '2023-08-26 23:42:17'),
(3, '663453', '123', '011211115', 'Algorithms to Live By: The Computer Science of Human Decisions', 'pending', NULL, NULL),
(4, '939561054', '4', '011211115', 'Algorithms to Live By: The Computer Science of Human Decisions', 'pending', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `uiuid` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `role` enum('admin','student','faculty','librarian') NOT NULL DEFAULT 'student',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_uiuid_unique` (`uiuid`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `uiuid`, `email`, `password`, `photo`, `phone`, `role`, `status`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Salman Saad', '011211115', 'devsalmansaad@gmail.com', '$2y$10$KA0qcoRv4mFHE1lNHwAe5O9RqONJehPIJkVrXU4bLEdih8trQjN/y', '202308270501342058602_247197077695631_4179570266772718869_n.jpg', '01622222222222', 'student', 'active', NULL, NULL, NULL, '2023-08-26 23:03:09'),
(2, 'admin', 'admin', 'admin@gmail.com', '$2y$10$MnMEf2OCIWt2U0Ozc36UF./n3.dqJSfjR6yevhz0kCtpTd9EJNEGW', NULL, NULL, 'admin', 'active', NULL, NULL, NULL, NULL),
(3, 'student', 'student', 'student@gmail.com', '$2y$10$7ya6tVYZaFHY.ZRRhirbIOtnzy1rP44drci7pExui9qb9xe2NOoNq', '202308120305342058602_247197077695631_4179570266772718869_n.jpg', NULL, 'student', 'active', NULL, NULL, NULL, NULL),
(4, 'faculty', 'faculty', 'faculty@gmail.com', '$2y$10$c2eb0sjkQIiJurhvWX9Y6OF7.KjRN1S43hvtRYlfoavGZHiaIaYXG', NULL, NULL, 'faculty', 'active', NULL, NULL, NULL, NULL),
(5, 'librarian', 'librarian', 'librarian@gmail.com', '$2y$10$jja/zqZeAtx2ajLWc21xju4tUd92rg7c9y480cT8zAyYXnu9x9ioK', NULL, NULL, 'librarian', 'active', NULL, NULL, NULL, NULL),
(6, 'Mr. Brennan Shanahan IV', '9C6WlsRdqRD4', 'oberbrunner.sheridan@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/60x60.png/001199?text=rerum', '+1-640-923-1330', 'faculty', 'inactive', '2023-08-25 08:04:22', 'xScFiByDv7', '2023-08-25 08:04:22', '2023-08-25 08:04:22'),
(7, 'Ignatius Funk II', 'FvMWdzEO5czk', 'qkrajcik@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/60x60.png/001199?text=blanditiis', '1-346-661-5864', 'faculty', 'inactive', '2023-08-25 08:04:22', '3hoM9BBJoe', '2023-08-25 08:04:22', '2023-08-25 08:04:22'),
(8, 'Etha Spencer PhD', '8YvKb3zIZ54X', 'icie.huels@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/60x60.png/002211?text=dolores', '636-555-0869', 'librarian', 'active', '2023-08-25 08:04:22', 's1ZL5PkzdJ', '2023-08-25 08:04:22', '2023-08-25 08:04:22'),
(9, 'Tyree Nolan', 'xp50iSvahEFr', 'hassie63@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/60x60.png/00bb44?text=deserunt', '(571) 526-3622', 'admin', 'active', '2023-08-25 08:04:22', 'qmeVVRkPGu', '2023-08-25 08:04:22', '2023-08-25 08:04:22'),
(10, 'Newell White IV', 'V27Np2lXwxY0', 'pbeahan@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/60x60.png/00aa11?text=ut', '443-246-9017', 'admin', 'active', '2023-08-25 08:04:22', '4WC01RyUgS', '2023-08-25 08:04:22', '2023-08-25 08:04:22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
