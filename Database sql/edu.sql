-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 11, 2022 at 08:11 PM
-- Server version: 10.3.29-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edu`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_newimage_slide`
--

CREATE TABLE `add_newimage_slide` (
  `id` int(11) NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_uz` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_ru` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_en` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_newimage_slide`
--

INSERT INTO `add_newimage_slide` (`id`, `image`, `content_uz`, `content_ru`, `content_en`) VALUES
(59, '../../frontend/web/imagebackend/6197b7729c0a727de54b7998f71ab684454d2422a166d.jpg', ' Sizning yorqin kelajagingiz bizning vazifamiz !', 'Ваше светлое будущее - наша миссия', 'Your Bright Future is Our Mission'),
(60, '../../frontend/web/imagebackend/6197b7e682adbd70426967bce34131b351e63acce1f15.jpg', 'Kelajak bizniki marra bizniki', 'Kelajak bizniki marra bizniki', 'Kelajak bizniki marra bizniki');

-- --------------------------------------------------------

--
-- Table structure for table `add_video`
--

CREATE TABLE `add_video` (
  `id` int(11) NOT NULL,
  `Url_from_youtobe` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facelogo_image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_uz` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ru` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_uz` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_ru` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_en` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_video`
--

INSERT INTO `add_video` (`id`, `Url_from_youtobe`, `facelogo_image`, `title_uz`, `title_ru`, `title_en`, `content_uz`, `content_ru`, `content_en`, `type_menu`) VALUES
(22, 'https:://youtobe.com', '../../frontend/web/imagebackend/612488082a6443541b2252614cedddaab3cd232cfdee2.jpg', 'Biz qayerdamiz !', 'ruscha', 'eng', 'Dunyo tiz suratlarda rivojlanib bormoqda Dunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz', 'ruscha', 'eng', 5),
(23, 'https:://youtobe.com', '../../frontend/web/imagebackend/61249e11bb025bb3b3df307b32ba97f0266503fdb0f53.jpg', 'O\'qituvchilar jamoasi', 'O\'qituvchilar jamoasi', 'O\'qituvchilar jamoasi', 'Dunyo tiz suratlarda rivojlanib bormoqda Dunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz', 'Dunyo tiz suratlarda rivojlanib bormoqda Dunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz', 'Dunyo tiz suratlarda rivojlanib bormoqda Dunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz', 3),
(24, 'https:://youtobe.com', '../../frontend/web/imagebackend/6124a155038f06220a030be5f7a8c4760d3e9b4d5d9ee.jpg', 'Kurslarimiz qay tartibda olib boriladi?!', 'Kurslarimiz qay tartibda olib boriladi?!', 'Kurslarimiz qay tartibda olib boriladi?!', 'Dunyo tiz suratlarda rivojlanib bormoqda Dunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz', 'Dunyo tiz suratlarda rivojlanib bormoqda Dunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz', 'Dunyo tiz suratlarda rivojlanib bormoqda Dunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz', 2),
(25, 'https://www.youtube.com/watch?v=SwycVhTHFbw', '../../frontend/web/imagebackend/6197b9cd1579f5e7aa63d5c0d77a4a49fbcacc2ef1a1f.jpg', 'Biz qanday boshladek', 'ruscha', 'eng', 'Dunyo tez suratlarda rivojlanib bormoqda Dunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz suratlarda rivojlanib bormoqdaDunyo tiz', 'ruscha cont', 'eng cont', 1);

-- --------------------------------------------------------

--
-- Table structure for table `allertlinks`
--

CREATE TABLE `allertlinks` (
  `id` int(11) NOT NULL,
  `location_uz` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_ru` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_en` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telegram` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtobe` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allertlinks`
--

INSERT INTO `allertlinks` (`id`, `location_uz`, `location_ru`, `location_en`, `telegram`, `phone`, `email`, `facebook`, `instagram`, `youtobe`) VALUES
(5, 'Samarqand Yoshlar Markazi uz', 'Samarqand Yoshlar Markazi ru', 'Samarqand Yoshlar Markazi eng', 'https://t.me/Minded_uz', '+998997713909', 'minded@gmail.com', 'https://facebook.com/minded', 'https://instagram.com/minded', 'https://YouTobe/minded.comm');

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '6', NULL),
('owner', '4', NULL),
('second-admin\r\n', '9', NULL),
('second-owner', '8', NULL),
('second-viewer', '10', NULL),
('simple-people', '7', NULL),
('viewer', '5', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, 'super-admin', NULL, NULL, NULL, NULL),
('owner', 3, 'owner', NULL, NULL, NULL, NULL),
('second-admin\r\n', 1, 'second-admin\r\n', NULL, NULL, NULL, NULL),
('second-owner', 3, 'second-owner', NULL, NULL, NULL, NULL),
('second-viewer', 2, 'only-second-viewer', NULL, NULL, NULL, NULL),
('simple-people', 3, 'simple-people', NULL, NULL, NULL, NULL),
('viewer', 2, 'only-viewer', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', 'owner'),
('admin', 'second-owner'),
('admin', 'second-viewer'),
('admin', 'simple-people'),
('admin', 'viewer'),
('second-admin\r\n', 'owner'),
('second-admin\r\n', 'second-owner'),
('second-admin\r\n', 'second-viewer'),
('second-admin\r\n', 'simple-people'),
('second-admin\r\n', 'viewer');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `derictors`
--

CREATE TABLE `derictors` (
  `id` int(11) NOT NULL,
  `name_uz` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ru` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_uz` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_ru` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_en` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `derictors`
--

INSERT INTO `derictors` (`id`, `name_uz`, `name_ru`, `name_en`, `about_uz`, `about_ru`, `about_en`, `image`) VALUES
(14, 'Feruz', 'Feruz  ', 'Feruz', 'Xalqaro toifadagi o\'qituvchi', 'Xalqaro toifadagi o\'qituvchi', 'Xalqaro toifadagi o\'qituvchi', '../../frontend/web/imagebackend/612498c3e9da1bb3b3df307b32ba97f0266503fdb0f53.jpg'),
(15, 'Feruz', 'Feruz  ', 'Feruz', 'Xalqaro toifadagi o\'qituvchi', 'Xalqaro toifadagi o\'qituvchi', 'Xalqaro toifadagi o\'qituvchi', '../../frontend/web/imagebackend/61249cf72e6265e4cb9d86be99f3a7c82817c59aeb7e3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title_uz` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ru` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moreinformation_uz` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moreinformation_ru` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moreinformation_en` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `where_uz` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `where_ru` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `where_en` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facelogo_video` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title_uz`, `title_ru`, `title_en`, `moreinformation_uz`, `moreinformation_ru`, `moreinformation_en`, `date`, `where_uz`, `where_ru`, `where_en`, `video`, `facelogo_video`) VALUES
(15, 'aa', 'aaaa', 'aaa', 'aaa', 'aaaa', 'aaa', '26-08-2021', 'aaaa', 'aaaa', 'aaa', 'youtobe.com', '../../frontend/web/imagebackend/611a9385df841f0a4025b3b49b3e256004503ee31df8c.jpg'),
(16, 'uzb', 'rus', 'aaa', 'uzb', 'Samarqand viloyatrida o\'tqazilgan musobaqa', 'eng', '26-08-2021', 'uzb', 'rus', 'eng', 'youtobe.com', '../../frontend/web/imagebackend/611a93e96af0fa90b5777071265fbff6c361cf0b751aa.jpg'),
(17, 'Samarqanda o\'tqazilayotgan ', 'rus', 'aaa', 'uzbSamarqanda o\'tqazilayotgan Samarqanda o\'tqazila', 'rus', 'eng', '29-10-2021', 'Samarqanda o\'tqazilayotgan Samarqanda o\'tqazilayotgan ', 'rus', 'eng', 'youtobe.com', '../../frontend/web/imagebackend/61248a34d5a6016908b0605f2645dfcb4c3a8d248cef3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1618133240),
('m130524_201442_init', 1618133243),
('m140506_102106_rbac_init', 1619287831),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1619287832),
('m180523_151638_rbac_updates_indexes_without_prefix', 1619287833),
('m190124_110200_add_verification_token_column_to_user_table', 1618133243),
('m200409_110543_rbac_update_mssql_trigger', 1619287833);

-- --------------------------------------------------------

--
-- Table structure for table `our_courses`
--

CREATE TABLE `our_courses` (
  `id` int(11) NOT NULL,
  `date` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_uz` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ru` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_uz` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_ru` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_en` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `enrolled` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_courses`
--

INSERT INTO `our_courses` (`id`, `date`, `name_uz`, `name_ru`, `name_en`, `content_uz`, `content_ru`, `content_en`, `image`, `type`, `enrolled`) VALUES
(26, '04-08-2021', 'matematika', 'math rus', 'matematika eng', 'Jahon standarti', 'Fizka rus', 'Jahon standarti', '../../frontend/web/imagebackend/6119452bc41a363e849642d75dabeecab8ca87fb2b584.jpg', 2, 114),
(27, '02-08-2021', 'matematika', 'matematika', 'matematika', 'Jahon standarti', 'Jahon standarti', 'Fizka eng', '../../frontend/web/imagebackend/611a93ace4f561421328d30acd2c848d76a16eee3ad50.jpg', 2, 119),
(28, '02-08-2021', 'Fizika', 'INgiliz tili rus', 'matematika', 'fizika uz', 'Fizka rus', 'Jahon standarti', '../../frontend/web/imagebackend/611a94b8f1d7ef0a4025b3b49b3e256004503ee31df8c.jpg', 1, 117),
(29, '27-08-2021', 'matematika', 'matematika', 'matematika', 'matematikadan ochilayotgan yangi kursimiz aynan siz uchun nimaga deganda siz eng zo\'r bo\'lishingiz', 'Jahon standarti', 'Jahon standarti', '../../frontend/web/imagebackend/611b3d9fe9731f0a4025b3b49b3e256004503ee31df8c.jpg', 1, 96),
(30, '01-09-2021', 'matematika', 'math rus', 'matematika', 'Jahon standarti', 'Jahon standarti', 'Jahon standarti', '../../frontend/web/imagebackend/611b3df4c2190a90b5777071265fbff6c361cf0b751aa.jpg', 1, 113),
(31, '06-08-2021', 'matematika', 'matematika', 'matematika', 'Jahon standarti', 'Jahon standarti', 'matim en', '../../frontend/web/imagebackend/611b3e5b4350496d6f2e7e1f705ab5e59c84a6dc009b2.jpg', 1, 107),
(32, '28-08-2021', 'matematika', 'matematika', 'matematika', 'Jahon standarti', 'Jahon standarti', 'Jahon standarti', '../../frontend/web/imagebackend/611b3e8507ea84af52202f77beb11ba59ce2056aa7878.jpg', 1, 116),
(33, '24-08-2021', 'matematika', 'matematika', 'Fizika eng', 'Jahon standarti', 'Jahon standarti', 'Jahon standarti', '../../frontend/web/imagebackend/6124a1b7d3594d19f40e734c01d41d450de6f04b4cd32.jpg', 1, 118),
(34, '24-08-2021', 'matematika', 'matematika', 'Fizika eng', 'Jahon standarti', 'Jahon standarti', 'Jahon standarti', '../../frontend/web/imagebackend/6124a1bc39701d19f40e734c01d41d450de6f04b4cd32.jpg', 2, 106);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `begining_date` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enrolled` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `age`, `subject`, `begining_date`, `duration`, `phone`, `address`, `enrolled`) VALUES
(137, 'Ramziddin', '15', 'Fizika', '2021-08-29', '3 month', '997713909', 'Samarqand', '2021-Aug-24 14:10:50'),
(139, 'Azim Abdukhalilov', '20', 'matematika', '2021-08-24', '3 month', '998997775443', 'Samarqadn', '2021-Aug-24 20:13:12'),
(140, 'Javlon', '12', 'Fizika', '2021-08-26', '6 month', '99897713909', 'Buxoro', '2021-Aug-25 10:32:37'),
(141, 'Ezozxon', '21', 'Fizika eng', '2021-08-27', '9 month', '998115233', 'Samarqand Urgut tumani', '2021-Aug-26 15:04:19'),
(142, 'Dilshod', '16', 'matematika', '2022-01-01', '3 month', '992485864', 'Urgut', '2021-Aug-26 17:10:24'),
(143, 'Hdhd', '55', 'Fizika', '2021-08-20', '3 month', '998955555555', 'Nevada, Usa.', '2021-Aug-30 13:54:55'),
(144, 'Hdhd', '55', 'Fizika', '2021-08-20', '3 month', '998955555555', 'Nevada, Usa.', '2021-Aug-30 13:55:10'),
(145, 'Hdhd', '55', 'Fizika', '2021-08-20', '3 month', '998955555555', 'Nevada, Usa.', '2021-Aug-30 13:55:12'),
(146, 'Hdhd', '55', 'Fizika', '2021-08-20', '3 month', '998955555555', 'Nevada, Usa.', '2021-Aug-30 13:55:27'),
(147, 'Abulqosim', '20', 'Fizika', '2021-09-14', '3 month', '937253906', 'Samarqand viloyati', '2021-Sep-09 09:45:31'),
(148, 'Biloliddin !', '13', 'INgiliz tili rus', '2021-09-15', '6 month', '99897713909', 'Samarqand', '2021-Sep-14 09:15:19'),
(149, 'Eymona', '22', 'matematika', '2021-10-06', '3 month', '99897713909', 'Buxoro', '2021-Sep-30 21:37:36'),
(150, 'Eymona', '22', 'Fizika eng', '4444-04-04', '6 month', '99897713909', 'dddddddddd', '2021-Nov-17 16:52:45'),
(151, 'Eymona', '22', 'Fizika eng', '4444-04-04', '6 month', '99897713909', 'dddddddddd', '2021-Nov-17 16:52:51'),
(152, 'Eymona', '22', 'Fizika eng', '4444-04-04', '6 month', '99897713909', 'dddddddddd', '2021-Nov-17 16:52:52'),
(153, 'Eymona', '22', 'Fizika eng', '4444-04-04', '6 month', '99897713909', 'dddddddddd', '2021-Nov-17 16:52:53'),
(154, 'Eymona', '22', 'Fizika eng', '4444-04-04', '6 month', '99897713909', 'dddddddddd', '2021-Nov-17 16:52:54'),
(155, 'Eymona', '22', 'Fizika eng', '4444-04-04', '6 month', '99897713909', 'dddddddddd', '2021-Nov-17 16:53:18'),
(156, 'Eymona', '22', 'Fizika eng', '4444-04-04', '6 month', '99897713909', 'dddddddddd', '2021-Nov-17 16:53:27'),
(157, 'Eymona', '22', 'matematika', '2021-11-17', '9 month', '99897713909', 'sa', '2021-Nov-19 19:31:41'),
(158, 'Eymona', '22', 'math rus', '2021-12-29', '3 month', '99897713909', 'Samarqand state', '2021-Dec-13 16:02:29'),
(159, 'Eymona', '22', 'math rus', '2021-12-29', '3 month', '99897713909', 'Samarqand state', '2021-Dec-13 16:02:38');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name_uz` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ru` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_uz` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_ru` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_en` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telegram` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name_uz`, `name_ru`, `name_en`, `field_uz`, `field_ru`, `field_en`, `image`, `telegram`, `facebook`, `instagram`, `phone`, `type`) VALUES
(12, 'John Simth ', 'Ramziddin7', 'Ramziddin7', 'kompyuter darslari', 'kompyuter ilmlari rus', 'computer sicience', '../../frontend/web/imagebackend/61248f7b655a0144cb8381aea8b7eb240d8c884e65495.jpg', 'telegram', 'facebook', 'instagram', '998977676676', 1),
(13, 'Abloqulov Jaloliddin', 'Abloqulov Jaloliddin', 'Abloqulov Jaloliddin', 'Matematika', 'math', 'math', '../../frontend/web/imagebackend/612492f1937515e4cb9d86be99f3a7c82817c59aeb7e3.jpg', 'telegram', 'facebook', 'instagram', '998977676676', 1),
(14, 'John  ', 'John  ', 'John  ', 'Fizika', 'Fizika', 'Fikics', '../../frontend/web/imagebackend/61249392eefb9ba8ab36e02a56a5dd8de4f99b3f45c72.jpg', 'telegram', 'facebook', 'instagram', '998977676676', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(4, 'Feruz', 'W8PzvKGUPo4NXlCtcjEtAeMhmtlqmWCU', '$2y$13$My6BoTSIrt7kuRPfumopoOJzl46WOTTmtHZDXhoNQgaR/V0s0bDvq', NULL, 'Feruz@gmail.com', 9, 1619272244, 1619272244, 'qwxQfqNVqB0Kzqs6T10ZBxPNUWO9XQaQ_1619272244'),
(5, 'Reception', '8V-IQODQvmeADIIHxeHix1bAwaHvi4Zb', '$2y$13$TtjPCybwYlyK.TTIruatRezyqXEYqWi1o05vQkgshAaF9OLsVxfoi', NULL, 'Reception@gmail.com', 9, 1619272504, 1619272504, 's3OkFIbrAf_4kQFy96-saxNjVAc5NqtK_1619272504'),
(6, 'Ramziddin', 'vbRGdM_6KQWeQC5C_tmJp98tTq1q_D8E', '$2y$13$FH9ZJBu02Zmm9aNYVsXi2.amvl42t7/HD2NVH0iqM0UvqceBuL8qG', NULL, 'rustamovramziddin@gmail.com', 9, 1619272584, 1619272584, '-pk2-sgGzOrgXU0YBoGw__WBpFyMh5vd_1619272584'),
(7, 'Viewer', '2S9o0UyOwpfnca_Ty_21UYh2-mTi4aSS', '$2y$13$h9OXAwck9Mt0apgd/rMBIuu1xpMZj66txhHH5SmR2CYGF86O5fva.', NULL, 'viewer@gmail.com', 9, 1619288729, 1619288729, 'BlCGun0AWkIdL7sRNwqNPRxIfXmDn_61_1619288729'),
(8, 'Feruz_uz', 'gSZLl06Um6bwg5aHKiH7diIAoTEOS3qd', '$2y$13$L/YPCjTiq0y.KhTFC/wc2urINhOlAXS6jKCHm6nKSmVMdsQ/y/Rvy', NULL, 'minded@gmail.com', 9, 1619288937, 1619288937, '-sPCoVTr2d2_Gs9MRCSNeFNP-dEGvwDw_1619288937'),
(9, 'Ramziddin7', 'YVDZbviV2fB8X-_g3FZy3KxDVm5bJSv6', '$2y$13$Hro7j2yjPJrixb04nqPSUOa.UCrv5SJbMelejuxy3Vcs5Cb0JUjbe', NULL, 'ramziddin7@gmail.com', 9, 1619289096, 1619289096, '2aGmtt1D-VWWJqw-LMTic0_u9EzGvyDY_1619289096'),
(10, 'Helper', '5tEwkxux1VVW1EdKXwHguIZBR558uFNy', '$2y$13$8MxuiMnkpveojMnYngLaSe1BW.P6ELOxlffpGv5QVcjRhLMTf8ysC', NULL, 'helper@gmail.com', 9, 1619289228, 1619289228, 'NKwbDZJOMGsaX6QS3YRyiXk0LYuaAGYG_1619289228'),
(11, 'Rustamov', '1111111111', '1111111111', '1111111111', 'ramziddin@gmail.com', 1, 2323, 2323, '222');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_newimage_slide`
--
ALTER TABLE `add_newimage_slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_video`
--
ALTER TABLE `add_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allertlinks`
--
ALTER TABLE `allertlinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `idx-auth_assignment-user_id` (`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `derictors`
--
ALTER TABLE `derictors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `our_courses`
--
ALTER TABLE `our_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_newimage_slide`
--
ALTER TABLE `add_newimage_slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `add_video`
--
ALTER TABLE `add_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `allertlinks`
--
ALTER TABLE `allertlinks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `derictors`
--
ALTER TABLE `derictors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `our_courses`
--
ALTER TABLE `our_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
