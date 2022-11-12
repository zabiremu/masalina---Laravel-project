-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2022 at 01:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masalina`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_pages`
--

CREATE TABLE IF NOT EXISTS `about_pages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_dscription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_dscription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_uri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_pages`
--

INSERT INTO `about_pages` (`id`, `title`, `short_title`, `short_dscription`, `long_dscription`, `image`, `image_uri`, `created_at`, `updated_at`) VALUES
(1, 'I have transform your ideas into remarkable digital products', '20+ Years Experience In this game, Means Product Designing', 'I love to work in User Experience & User Interface designing. Because I love to solve the design problem and find easy and better solutions to solve it. I always try my best to make good user interface with the best user experience. I have been working as a UX Designer', '<div><font color=\"#68666c\" face=\"Roboto, sans-serif\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of lorem ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the lorem ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated lorem ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</font></div><div><font color=\"#68666c\" face=\"Roboto, sans-serif\"><b><br></b></font></div><ul><li><font color=\"#68666c\" face=\"Roboto, sans-serif\"><b>User experience design - (Product Design)</b></font></li></ul><div><font color=\"#68666c\" face=\"Roboto, sans-serif\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to unseery.</font></div><div><font color=\"#68666c\" face=\"Roboto, sans-serif\"><b><br></b></font></div><ul><li><font color=\"#68666c\" face=\"Roboto, sans-serif\"><b>Web and user interface design - Development</b></font></li></ul><div><font color=\"#68666c\" face=\"Roboto, sans-serif\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of lorem ipsum.</font></div><div><font color=\"#68666c\" face=\"Roboto, sans-serif\"><br></font></div><ul><li><font color=\"#68666c\" face=\"Roboto, sans-serif\"><b>Interaction design - Animation</b></font></li></ul><div><font color=\"#68666c\" face=\"Roboto, sans-serif\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable.</font></div><div><br></div>', '636f367047cc9.png', 'uploads/636f367047cc9.png', NULL, '2022-11-12 00:00:16');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `blog_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blogs_blog_category_id_foreign` (`blog_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_category_id`, `blog_title`, `blog_details`, `blog_image`, `blog_image_url`, `blog_tags`, `created_at`, `updated_at`) VALUES
(6, 2, 'How to start sketch after build a website with Laravel', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable</p><p>Definition Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p><p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p><p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p><p><br></p><ul><li>Achieving effectiveness,</li><li>Perceiving and utilizing opportunities,</li><li>Mobilising resources,</li><li>Securing an advantageous position,</li><li>Meeting challenges and threats,</li><li>Directing efforts and behaviour and</li><li>Gaining command over the situation.</li></ul><p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>', '636629a5d052a.jpg', 'uploads/636629a5d052a.jpg', 'Laravel, React', '2022-11-05 03:15:17', '2022-11-05 03:15:38'),
(7, 1, 'How you should start product design', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable</p><p>Definition Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p><p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p><p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p><ul><li>Achieving effectiveness,</li><li>Perceiving and utilizing opportunities,</li><li>Mobilising resources,</li><li>Securing an advantageous position,</li><li>Meeting challenges and threats,</li><li>Directing efforts and behaviour and</li><li>Gaining command over the situation.</li></ul><p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>', '6366788b9dd74.jpg', 'uploads/6366788b9dd74.jpg', 'Laravel, React,Php', '2022-11-05 08:51:55', '2022-11-05 08:51:55'),
(8, 1, 'How to start sketch after build a website', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable</p><p>Definition Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p><p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p><p><span style=\"font-size: 0.875rem; font-weight: initial;\">In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</span></p><ul><li>Achieving effectiveness,</li><li>Perceiving and utilizing opportunities,</li><li>Mobilising resources,</li><li>Securing an advantageous position,</li><li>Meeting challenges and threats,</li><li>Directing efforts and behaviour and</li><li>Gaining command over the situation.</li></ul><p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>', '63667921d4cba.jpg', 'uploads/63667921d4cba.jpg', 'Laravel, React', '2022-11-05 08:54:25', '2022-11-05 08:54:25'),
(9, 1, 'Best website traffics Booster with great tools.', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable</p><p>Definition Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p><p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p><p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p><ul><li>Achieving effectiveness,</li><li>Perceiving and utilizing opportunities,</li><li>Mobilising resources,</li><li>Securing an advantageous position,</li><li>Meeting challenges and threats,</li><li>Directing efforts and behaviour and</li><li>Gaining command over the situation.</li></ul><p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>', '636679903451b.jpg', 'uploads/636679903451b.jpg', 'Laravel,php', '2022-11-05 08:56:16', '2022-11-05 08:56:16');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE IF NOT EXISTS `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `blog_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `blog_category`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', '2022-11-01 23:45:26', '2022-11-01 23:45:26'),
(2, 'Linkedin', '2022-11-01 23:45:53', '2022-11-01 23:45:53'),
(3, 'React', '2022-11-01 23:46:18', '2022-11-01 23:46:18');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `budget` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE IF NOT EXISTS `footers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shortTitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socially` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behance` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `number`, `shortTitle`, `address`, `address_details`, `email`, `socially`, `fb`, `twitter`, `behance`, `linkedin`, `instagram`, `created_at`, `updated_at`) VALUES
(1, '01833086035', 'There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form is also here.', 'AUSTRALIA', 'Level 13, 2 Elizabeth Steereyt set Melbourne, Victoria 3000', 'zabirraihan570@gmail.com', 'Lorem ipsum dolor sit amet enim. Etiam ullamcorper.', 'https://www.facebook.com/zabiremu', 'https://twitter.com/zabiremu', 'https://www.behance.net/zabiremu', 'https://www.linkedin.com/in/zabiremu/', 'https://www.instagram.com/', NULL, '2022-11-10 00:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE IF NOT EXISTS `homes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `title`, `short_title`, `image`, `image_url`, `video`, `created_at`, `updated_at`) VALUES
(1, 'I will give you Best Product in the shortest time', 'I will give you Best Product in the shortest time', '635cb78bd6cb0.png', 'uploads/635cb78bd6cb0.png', 'https://youtu.be/YAbqBJVJ5KA', NULL, '2022-10-30 04:38:54');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2022_10_28_124232_create_homes_table', 2),
(10, '2022_10_29_061325_create_abouts_table', 3),
(11, '2022_10_29_062356_create_about_pages_table', 4),
(12, '2022_10_30_140612_create_multi_images_table', 5),
(13, '2022_10_30_191355_create_portfolios_table', 6),
(14, '2022_11_02_052333_create_blog_categories_table', 7),
(15, '2022_11_02_073745_create_blogs_table', 8),
(16, '2022_11_07_002020_create_services_table', 9),
(17, '2022_11_10_011235_create_contacts_table', 10),
(18, '2022_11_10_054423_create_footers_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `multi_images`
--

CREATE TABLE IF NOT EXISTS `multi_images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `MultiImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multi_images`
--

INSERT INTO `multi_images` (`id`, `MultiImage`, `image_url`, `created_at`, `updated_at`) VALUES
(9, '635ebd20820b2.png', 'uploads/about/635ebd20820b2.png', '2022-10-30 12:06:24', '2022-10-30 12:06:24'),
(10, '635ebd2090b07.png', 'uploads/about/635ebd2090b07.png', '2022-10-30 12:06:24', '2022-10-30 12:06:24'),
(11, '635ebd20947b1.png', 'uploads/about/635ebd20947b1.png', '2022-10-30 12:06:24', '2022-10-30 12:06:24'),
(12, '635ebd2098fe6.png', 'uploads/about/635ebd2098fe6.png', '2022-10-30 12:06:24', '2022-10-30 12:06:24'),
(13, '635ebd209ce87.png', 'uploads/about/635ebd209ce87.png', '2022-10-30 12:06:24', '2022-10-30 12:06:24');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('zabirraihan570@gmail.com', '$2y$10$99MzYrS1Y2vKc9u89C99Sehw7GRKst14aPQj2jr0SAQ2/LT8a98Zu', '2022-10-27 00:03:28'),
('zabirraihan@gmail.com', '$2y$10$g6hwt3uzfEn4WcaRHNVqG.0FDpyqaZdS8gQjSsHc9.07fGGkaYJr.', '2022-10-27 00:04:20');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
-- Table structure for table `portfolios`
--

CREATE TABLE IF NOT EXISTS `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `short_title`, `short_details`, `image`, `image_url`, `created_at`, `updated_at`) VALUES
(2, 'web development', 'Rixelda - 24 hours Control room landing page', '<p>Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p><p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p><p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p><ul><li>Achieving effectiveness,</li><li>Perceiving and utilizing opportunities,</li><li>Mobilising resources,</li><li>Securing an advantageous position,</li><li>Meeting challenges and threats,</li><li>Directing efforts and behaviour and</li><li>Gaining command over the situation.</li></ul><p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p><p><br></p>', '635f66b9bba72.jpg', 'uploads/635f66b9bba72.jpg', '2022-10-31 00:10:01', '2022-11-01 00:32:16'),
(6, 'App Design', 'Rixelda - 24 hours Control room landing page', '<p>Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p><p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p><p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p><ul><li>Achieving effectiveness,</li><li>Perceiving and utilizing opportunities,</li><li>Mobilising resources,</li><li>Securing an advantageous position,</li><li>Meeting challenges and threats,</li><li>Directing efforts and behaviour and</li><li>Gaining command over the situation.</li></ul><p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p><p><br></p>', '6360bef47c8f6.jpg', 'uploads/6360bef47c8f6.jpg', '2022-11-01 00:38:44', '2022-11-01 00:38:44'),
(7, 'Ui/ Ux Design', 'Rixelda - 24 hours Control room landing page', '<p>Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p><p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p><p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p><ul><li>Achieving effectiveness,</li><li>Perceiving and utilizing opportunities,</li><li>Mobilising resources,</li><li>Securing an advantageous position,</li><li>Meeting challenges and threats,</li><li>Directing efforts and behaviour and</li><li>Gaining command over the situation.</li></ul><p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p><p><br></p>', '6360bf0b766c2.jpg', 'uploads/6360bf0b766c2.jpg', '2022-11-01 00:39:07', '2022-11-01 00:39:07'),
(8, 'Web Design', 'Rixelda - 24 hours Control room landing page', '<p>Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p><p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p><p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p><ul><li>Achieving effectiveness,</li><li>Perceiving and utilizing opportunities,</li><li>Mobilising resources,</li><li>Securing an advantageous position,</li><li>Meeting challenges and threats,</li><li>Directing efforts and behaviour and</li><li>Gaining command over the situation.</li></ul><p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p><p><br></p>', '6360bf2659063.jpg', 'uploads/6360bf2659063.jpg', '2022-11-01 00:39:34', '2022-11-01 00:39:34');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shot_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `shot_title`, `details`, `image`, `image_url`, `created_at`, `updated_at`) VALUES
(2, 'Brand Strategy', 'We Solve Business Strategy Problem in 24 hours', '<p>Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p><p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p><p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p><ul><li>Achieving effectiveness,</li><li>Perceiving and utilizing opportunities,</li><li>Mobilising resources,</li><li>Securing an advantageous position,</li><li>Meeting challenges and threats,</li><li>Directing efforts and behaviour and</li><li>Gaining command over the situation.</li></ul><p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>', '6368a75b831cb.jpg', 'uploads/6368a75b831cb.jpg', '2022-11-06 18:32:30', '2022-11-07 00:36:11'),
(3, 'Brand Strategy', 'We Solve Business Strategy Problem', '<p>Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p><p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p><p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p><ul><li>Achieving effectiveness,</li><li>Perceiving and utilizing opportunities,</li><li>Mobilising resources,</li><li>Securing an advantageous position,</li><li>Meeting challenges and threats,</li><li>Directing efforts and behaviour and</li><li>Gaining command over the situation.</li></ul><p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>', '6368526706f29.jpg', 'uploads/6368526706f29.jpg', '2022-11-06 18:33:43', '2022-11-06 18:33:43'),
(4, 'Product Design', 'We Solve Business Strategy Problem', '<p>Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p><p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p><p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p><ul><li>Achieving effectiveness,</li><li>Perceiving and utilizing opportunities,</li><li>Mobilising resources,</li><li>Securing an advantageous position,</li><li>Meeting challenges and threats,</li><li>Directing efforts and behaviour and</li><li>Gaining command over the situation.</li></ul><p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>', '636852bf7f69d.jpg', 'uploads/636852bf7f69d.jpg', '2022-11-06 18:35:11', '2022-11-06 18:35:11'),
(5, 'Visual Design', 'We Solve Business Strategy Problem', '<p>Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p><p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p><p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p><ul><li>Achieving effectiveness,</li><li>Perceiving and utilizing opportunities,</li><li>Mobilising resources,</li><li>Securing an advantageous position,</li><li>Meeting challenges and threats,</li><li>Directing efforts and behaviour and</li><li>Gaining command over the situation.</li></ul><p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>', '636852fc4c85a.jpg', 'uploads/636852fc4c85a.jpg', '2022-11-06 18:36:12', '2022-11-06 18:36:12'),
(6, 'Web Development', 'We Solve Business Strategy Problem', '<p>Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p><p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p><p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p><ul><li>Achieving effectiveness,</li><li>Perceiving and utilizing opportunities,</li><li>Mobilising resources,</li><li>Securing an advantageous position,</li><li>Meeting challenges and threats,</li><li>Directing efforts and behaviour and</li><li>Gaining command over the situation.</li></ul><p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>', '63685334cb0b2.jpg', 'uploads/63685334cb0b2.jpg', '2022-11-06 18:37:08', '2022-11-07 01:11:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `profile_image`, `image_url`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Zabir Raihan', 'zabirraihan570@gmail.com', 'zabir emu', '2022-10-28 00:12:50', '$2y$10$09QUiR3zTeohz2lux/kcAe75iENTLGqP2q.fbvO32ArinsleVUvvC', '635e545cd5a94.jpg', 'http://127.0.0.1:8000/storage/Profile/635e545cd5a94.jpg', NULL, '2022-10-28 00:12:23', '2022-11-09 11:00:57');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_blog_category_id_foreign` FOREIGN KEY (`blog_category_id`) REFERENCES `blog_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
