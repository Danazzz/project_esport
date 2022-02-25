-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 25, 2022 at 05:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_esport`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_group`
--

CREATE TABLE `auth_group` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `auth_group_permissions`
--

CREATE TABLE `auth_group_permissions` (
  `id` bigint(20) NOT NULL,
  `group_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `auth_permission`
--

CREATE TABLE `auth_permission` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content_type_id` int(11) NOT NULL,
  `codename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth_permission`
--

INSERT INTO `auth_permission` (`id`, `name`, `content_type_id`, `codename`) VALUES
(1, 'Can add log entry', 1, 'add_logentry'),
(2, 'Can change log entry', 1, 'change_logentry'),
(3, 'Can delete log entry', 1, 'delete_logentry'),
(4, 'Can view log entry', 1, 'view_logentry'),
(5, 'Can add permission', 2, 'add_permission'),
(6, 'Can change permission', 2, 'change_permission'),
(7, 'Can delete permission', 2, 'delete_permission'),
(8, 'Can view permission', 2, 'view_permission'),
(9, 'Can add group', 3, 'add_group'),
(10, 'Can change group', 3, 'change_group'),
(11, 'Can delete group', 3, 'delete_group'),
(12, 'Can view group', 3, 'view_group'),
(13, 'Can add user', 4, 'add_user'),
(14, 'Can change user', 4, 'change_user'),
(15, 'Can delete user', 4, 'delete_user'),
(16, 'Can view user', 4, 'view_user'),
(17, 'Can add content type', 5, 'add_contenttype'),
(18, 'Can change content type', 5, 'change_contenttype'),
(19, 'Can delete content type', 5, 'delete_contenttype'),
(20, 'Can view content type', 5, 'view_contenttype'),
(21, 'Can add session', 6, 'add_session'),
(22, 'Can change session', 6, 'change_session'),
(23, 'Can delete session', 6, 'delete_session'),
(24, 'Can view session', 6, 'view_session'),
(25, 'Can add auth token', 7, 'add_authtoken'),
(26, 'Can change auth token', 7, 'change_authtoken'),
(27, 'Can delete auth token', 7, 'delete_authtoken'),
(28, 'Can view auth token', 7, 'view_authtoken'),
(29, 'Can add blacklisted token', 8, 'add_blacklistedtoken'),
(30, 'Can change blacklisted token', 8, 'change_blacklistedtoken'),
(31, 'Can delete blacklisted token', 8, 'delete_blacklistedtoken'),
(32, 'Can view blacklisted token', 8, 'view_blacklistedtoken'),
(33, 'Can add outstanding token', 9, 'add_outstandingtoken'),
(34, 'Can change outstanding token', 9, 'change_outstandingtoken'),
(35, 'Can delete outstanding token', 9, 'delete_outstandingtoken'),
(36, 'Can view outstanding token', 9, 'view_outstandingtoken');

-- --------------------------------------------------------

--
-- Table structure for table `auth_user`
--

CREATE TABLE `auth_user` (
  `id` int(11) NOT NULL,
  `password` varchar(128) NOT NULL,
  `last_login` datetime(6) DEFAULT NULL,
  `is_superuser` tinyint(1) NOT NULL,
  `username` varchar(150) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(254) NOT NULL,
  `is_staff` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `date_joined` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `auth_user_groups`
--

CREATE TABLE `auth_user_groups` (
  `id` bigint(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `auth_user_user_permissions`
--

CREATE TABLE `auth_user_user_permissions` (
  `id` bigint(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `django_admin_log`
--

CREATE TABLE `django_admin_log` (
  `id` int(11) NOT NULL,
  `action_time` datetime(6) NOT NULL,
  `object_id` longtext DEFAULT NULL,
  `object_repr` varchar(200) NOT NULL,
  `action_flag` smallint(5) UNSIGNED NOT NULL CHECK (`action_flag` >= 0),
  `change_message` longtext NOT NULL,
  `content_type_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `django_content_type`
--

CREATE TABLE `django_content_type` (
  `id` int(11) NOT NULL,
  `app_label` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `django_content_type`
--

INSERT INTO `django_content_type` (`id`, `app_label`, `model`) VALUES
(1, 'admin', 'logentry'),
(3, 'auth', 'group'),
(2, 'auth', 'permission'),
(4, 'auth', 'user'),
(5, 'contenttypes', 'contenttype'),
(7, 'knox', 'authtoken'),
(6, 'sessions', 'session'),
(8, 'token_blacklist', 'blacklistedtoken'),
(9, 'token_blacklist', 'outstandingtoken');

-- --------------------------------------------------------

--
-- Table structure for table `django_migrations`
--

CREATE TABLE `django_migrations` (
  `id` bigint(20) NOT NULL,
  `app` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `applied` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `django_migrations`
--

INSERT INTO `django_migrations` (`id`, `app`, `name`, `applied`) VALUES
(1, 'contenttypes', '0001_initial', '2022-02-24 08:32:06.809703'),
(2, 'auth', '0001_initial', '2022-02-24 08:32:07.061570'),
(3, 'admin', '0001_initial', '2022-02-24 08:32:07.121264'),
(4, 'admin', '0002_logentry_remove_auto_add', '2022-02-24 08:32:07.145628'),
(5, 'admin', '0003_logentry_add_action_flag_choices', '2022-02-24 08:32:07.157466'),
(6, 'contenttypes', '0002_remove_content_type_name', '2022-02-24 08:32:07.198310'),
(7, 'auth', '0002_alter_permission_name_max_length', '2022-02-24 08:32:07.229931'),
(8, 'auth', '0003_alter_user_email_max_length', '2022-02-24 08:32:07.247502'),
(9, 'auth', '0004_alter_user_username_opts', '2022-02-24 08:32:07.256197'),
(10, 'auth', '0005_alter_user_last_login_null', '2022-02-24 08:32:07.277122'),
(11, 'auth', '0006_require_contenttypes_0002', '2022-02-24 08:32:07.279287'),
(12, 'auth', '0007_alter_validators_add_error_messages', '2022-02-24 08:32:07.287624'),
(13, 'auth', '0008_alter_user_username_max_length', '2022-02-24 08:32:07.299190'),
(14, 'auth', '0009_alter_user_last_name_max_length', '2022-02-24 08:32:07.309520'),
(15, 'auth', '0010_alter_group_name_max_length', '2022-02-24 08:32:07.324191'),
(16, 'auth', '0011_update_proxy_permissions', '2022-02-24 08:32:07.331990'),
(17, 'auth', '0012_alter_user_first_name_max_length', '2022-02-24 08:32:07.342219'),
(18, 'knox', '0001_initial', '2022-02-24 08:32:07.374799'),
(19, 'knox', '0002_auto_20150916_1425', '2022-02-24 08:32:07.413339'),
(20, 'knox', '0003_auto_20150916_1526', '2022-02-24 08:32:07.429099'),
(21, 'knox', '0004_authtoken_expires', '2022-02-24 08:32:07.439598'),
(22, 'knox', '0005_authtoken_token_key', '2022-02-24 08:32:07.457251'),
(23, 'knox', '0006_auto_20160818_0932', '2022-02-24 08:32:07.494376'),
(24, 'knox', '0007_auto_20190111_0542', '2022-02-24 08:32:07.505452'),
(25, 'knox', '0008_remove_authtoken_salt', '2022-02-24 08:32:07.517784'),
(26, 'sessions', '0001_initial', '2022-02-24 08:32:07.544050'),
(27, 'token_blacklist', '0001_initial', '2022-02-24 08:32:07.649289'),
(28, 'token_blacklist', '0002_outstandingtoken_jti_hex', '2022-02-24 08:32:07.687471'),
(29, 'token_blacklist', '0003_auto_20171017_2007', '2022-02-24 08:32:07.703820'),
(30, 'token_blacklist', '0004_auto_20171017_2013', '2022-02-24 08:32:07.738112'),
(31, 'token_blacklist', '0005_remove_outstandingtoken_jti', '2022-02-24 08:32:07.754436'),
(32, 'token_blacklist', '0006_auto_20171017_2113', '2022-02-24 08:32:07.772116'),
(33, 'token_blacklist', '0007_auto_20171017_2214', '2022-02-24 08:32:07.869943'),
(34, 'token_blacklist', '0008_migrate_to_bigautofield', '2022-02-24 08:32:08.013304'),
(35, 'token_blacklist', '0010_fix_migrate_to_bigautofield', '2022-02-24 08:32:08.045078'),
(36, 'token_blacklist', '0011_linearizes_history', '2022-02-24 08:32:08.047583');

-- --------------------------------------------------------

--
-- Table structure for table `django_session`
--

CREATE TABLE `django_session` (
  `session_key` varchar(40) NOT NULL,
  `session_data` longtext NOT NULL,
  `expire_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id_game` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id_game`, `name`, `image`, `created_at`, `updated_at`) VALUES
('62108a45e522d', 'Valorant', '62108a45e523e.svg', '2022-02-19 14:12:22', '2022-02-19 14:12:22'),
('96441d2c-908d-11ec-962f-00d861e392f3', 'mobile legends', 'moba.svg', '2022-02-18 15:39:20', '2022-02-18 15:39:20');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `join_squad`
--

CREATE TABLE `join_squad` (
  `id_join_squad` int(11) NOT NULL,
  `id_squad` varchar(50) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `id_game` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `join_tournament`
--

CREATE TABLE `join_tournament` (
  `id_join_tournament` int(11) NOT NULL,
  `id_tournament` varchar(50) NOT NULL,
  `id_game` varchar(50) NOT NULL,
  `id_squad` varchar(50) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `knox_authtoken`
--

CREATE TABLE `knox_authtoken` (
  `digest` varchar(128) NOT NULL,
  `created` datetime(6) NOT NULL,
  `user_id` int(11) NOT NULL,
  `expiry` datetime(6) DEFAULT NULL,
  `token_key` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_logIn` int(11) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `otp_code` smallint(6) NOT NULL,
  `logIn_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `logOut_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_logIn`, `id_user`, `username`, `email`, `password`, `otp_code`, `logIn_at`, `logOut_at`, `created_at`, `updated_at`) VALUES
(1, '41930026', '', 'artaputra97@gmail.com', 'd1c056a983786a38ca76a05cda240c7b86d77136', 1234, '2022-02-18 09:35:53', '2022-02-18 09:35:53', '2022-02-18 09:35:53', '2022-02-18 09:35:53'),
(3, '620e01ad9c154', 'ardhi', 'gusardhi@gmail.com', 'd1c056a983786a38ca76a05cda240c7b86d77136', 0, '2022-02-21 13:47:19', '2022-02-21 13:47:19', '2022-02-21 13:47:19', '2022-02-21 13:47:19'),
(11, '62110159534e2', 'teskun', 'tes@gmail.com', 'd1c056a983786a38ca76a05cda240c7b86d77136', 0, '2022-02-21 11:05:11', '2022-02-21 11:05:11', '2022-02-21 11:05:11', '2022-02-21 11:05:11'),
(13, '62132b578e092', 'myudik', 'yudik@gmail.com', 'd1c056a983786a38ca76a05cda240c7b86d77136', 0, '2022-02-21 14:04:07', '2022-02-21 14:04:07', '2022-02-21 14:04:07', '2022-02-21 14:04:07'),
(16, '6215c20b6af0d', 'mr. trading', 'labdakun@gmail.com', 'd1c056a983786a38ca76a05cda240c7b86d77136', 0, '2022-02-23 13:11:39', '2022-02-23 13:11:39', '2022-02-23 13:11:39', '2022-02-23 13:11:39');

-- --------------------------------------------------------

--
-- Table structure for table `organizer`
--

CREATE TABLE `organizer` (
  `id_organizer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `schedule_tournament`
--

CREATE TABLE `schedule_tournament` (
  `id_schedule` int(11) NOT NULL,
  `open_registration` date NOT NULL,
  `technical_meeting` date NOT NULL,
  `tournament_starts` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `squad`
--

CREATE TABLE `squad` (
  `id_squad` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `leaderboard` int(11) NOT NULL,
  `poin` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `token_blacklist_blacklistedtoken`
--

CREATE TABLE `token_blacklist_blacklistedtoken` (
  `id` bigint(20) NOT NULL,
  `blacklisted_at` datetime(6) NOT NULL,
  `token_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `token_blacklist_outstandingtoken`
--

CREATE TABLE `token_blacklist_outstandingtoken` (
  `id` bigint(20) NOT NULL,
  `token` longtext NOT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `expires_at` datetime(6) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `jti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `topup`
--

CREATE TABLE `topup` (
  `id_topup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tournament`
--

CREATE TABLE `tournament` (
  `id_tournament` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` enum('free','paid') NOT NULL,
  `status` enum('open','closed','ongoing','comingsoon') NOT NULL,
  `mode` varchar(255) NOT NULL,
  `location` enum('online','offline') NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `coordinates` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `startTime` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `endTime` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id_transaction` int(11) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `poin` int(11) NOT NULL,
  `id_topup` int(11) NOT NULL,
  `id_transfer` int(11) NOT NULL,
  `id_withdraw` int(11) NOT NULL,
  `id_history` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `id_transfer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(50) NOT NULL,
  `id_game` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `birth_date` date NOT NULL,
  `gender` enum('L','P','Unknown') NOT NULL,
  `status` enum('0','1') NOT NULL,
  `poin` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `role` enum('admin','user','organizer') NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_game`, `full_name`, `phone_number`, `birth_date`, `gender`, `status`, `poin`, `image`, `role`, `description`, `created_at`, `updated_at`) VALUES
('41930026', '', 'Nyoman Dana Wardhianaaaa', '089635524614', '2022-02-03', 'L', '1', 10, 'hjghjghj.jpg', 'admin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sodales, erat ut sagittis mattis, est lorem venenatis tellus, in semper dolor ligula vitae risus. Cras vitae turpis non tellus ullamcorper faucibus sed ac ante. Cras dui dolor, dictum sit amet scelerisque in, volutpat blandit magna. Aliquam dui sem, sodales non nunc ut, congue lacinia purus. Quisque eget justo nec lorem sagittis volutpat. Ut rutrum vulputate imperdiet. Sed porta, sem vitae sagittis sodales, lacus tortor fringilla eros, quis sodales lacus libero id urna. Nam condimentum ligula hendrerit ipsum lacinia, at tincidunt est vestibulum. Fusce ac rhoncus erat, eu dictum sem. Sed quis posuere dolor, vitae hendrerit sapien. Mauris cursus nulla sit amet neque viverra cursus. Sed efficitur vitae tortor sed venenatis. Integer sed diam tortor.', '2022-02-18 10:57:53', '2022-02-18 10:57:53'),
('620e01ad9c154', '', 'gus ardhi', '098765432123', '2022-02-01', 'L', '', 0, '621327679a998.jpg', 'user', 'Lorem ipsum dolor sit amet', '2022-02-21 13:47:19', '2022-02-21 13:47:19'),
('62110159534e2', '', 'tes', '089123456789', '2022-02-15', 'L', '0', 0, '62132623eebec.jpg', 'admin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum convallis condimentum lacus, id bibendum dolor imperdiet quis. Nulla viverra finibus rutrum. Suspendisse porta turpis nec nibh convallis tincidunt. Pellentesque a laoreet ipsum. Donec quis pellentesque metus. Aenean sagittis ut mi ut auctor. Nam pulvinar pulvinar arcu, sed bibendum risus faucibus eget. Cras vestibulum urna viverra, maximus nunc id, euismod orci. Morbi a massa in turpis convallis sagittis ut vitae erat. Quisque vel orci augue. Fusce eleifend ac ipsum gravida gravida. Ut suscipit sed metus vel pellentesque. In in vehicula dolor, porta convallis enim.', '2022-02-21 13:41:55', '2022-02-21 13:41:55'),
('62132b578e092', '', 'Dwi Yudhiarshana darma', '098765432112', '2022-02-06', 'L', '0', 0, '', 'user', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum convallis condimentum lacus, id bibendum dolor imperdiet quis. Nulla viverra finibus rutrum. Suspendisse porta turpis nec nibh convallis tincidunt. Pellentesque a laoreet ipsum. Donec quis pellentesque metus. Aenean sagittis ut mi ut auctor. Nam pulvinar pulvinar arcu, sed bibendum risus faucibus eget. Cras vestibulum urna viverra, maximus nunc id, euismod orci. Morbi a massa in turpis convallis sagittis ut vitae erat. Quisque vel orci augue. Fusce eleifend ac ipsum gravida gravida. Ut suscipit sed metus vel pellentesque. In in vehicula dolor, porta convallis enim.\r\n\r\nDuis et blandit diam, in tincidunt mauris. Suspendisse posuere lorem libero, ac feugiat nisl congue eu. Nulla congue orci ut pellentesque consectetur. Nam vestibulum, erat id tristique varius, urna erat viverra ante, et iaculis leo nibh nec dolor. Cras interdum mi ut est dictum interdum. Praesent leo neque, mollis eu sem quis, pretium viverra sapien. Aenean dapibus eros justo, vitae pretium nisi consectetur vel. Quisque ornare neque non neque ornare finibus mollis a augue. Curabitur in diam ornare nunc vulputate facilisis sed nec lorem. Ut molestie convallis mauris, sit amet aliquam turpis porta vel. Maecenas arcu sem, semper non massa vel, aliquam efficitur augue.\r\n\r\nProin sed diam non eros tempor gravida at eget lectus. Quisque eget leo lacinia, lobortis diam a, malesuada tortor. Vivamus luctus dui ornare nunc volutpat, et facilisis elit vehicula. Pellentesque lobortis ornare mollis. Vestibulum et augue sem. Aenean orci erat, dictum non lacinia eget, pretium eget urna. Sed leo felis, porta a suscipit id, commodo a augue. Nulla porttitor, elit ut pretium ultricies, tortor eros bibendum est, quis vestibulum quam magna ut erat. Proin consequat arcu varius nisi efficitur, dapibus maximus ante auctor.', '2022-02-21 14:55:53', '2022-02-21 14:55:53'),
('6215c20b6af0d', '', 'labdaaaaaaaa', '123456789012', '2022-02-01', 'L', '0', 0, '6215e2d09a52f.jpg', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget dui vel dui congue dictum. Mauris commodo lorem nulla, ut imperdiet felis imperdiet laoreet. Nullam quis dictum ligula. Donec bibendum, ipsum et eleifend pulvinar, purus mauris mollis mauris, at auctor mauris nulla nec tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce nec lectus enim. Praesent euismod iaculis ligula, congue vulputate mauris rutrum ut. Suspendisse a augue eu lacus pellentesque egestas. Donec at urna bibendum, venenatis tortor ac, pellentesque orci. Nam felis urna, pharetra sed arcu consectetur, dapibus porta ipsum. Praesent varius porta imperdiet. Duis vestibulum venenatis sapien vel tincidunt. Fusce volutpat lorem non augue aliquet condimentum. Nulla nibh nisl, finibus ac facilisis quis, varius non elit. Quisque sit amet egestas magna.\r\n\r\nNulla commodo nunc eget velit porta aliquam. Praesent diam nisl, interdum eu purus sed, egestas molestie sem. Aliquam id mollis nisl, in faucibus mauris. Proin facilisis dignissim nisl eget vulputate. Suspendisse sed ornare mi. Quisque elementum non lacus id dapibus. Donec eu ultrices erat, sit amet consectetur ligula. Proin in lacinia ex. Pellentesque tincidunt facilisis tellus ut egestas. Aenean sit amet risus nulla. Proin velit sapien, convallis eget odio egestas, cursus consequat odio. Nullam vel dui in mauris ultrices consequat sit amet id leo. Phasellus nec nulla tempus, vestibulum risus ac, fringilla nibh. Nulla risus nunc, varius vitae auctor eu, fringilla nec est. In hac habitasse platea dictumst.\r\n\r\nUt sit amet leo id neque tempor pretium. Suspendisse sit amet luctus mauris, at dictum augue. Pellentesque nec consectetur nisl. In hac habitasse platea dictumst. Nam non aliquam urna, eget aliquam mauris. Morbi ultrices lobortis risus a auctor. Integer lacinia, lorem eu gravida eleifend, ligula magna facilisis ligula, nec fringilla velit sem quis massa. Suspendisse potenti. In efficitur sed augue a gravida. Vivamus tristique nisl in quam euismod, sit amet porta tellus aliquet. Donec rutrum, ipsum eget pellentesque blandit, tortor massa sodales urna, id interdum neque felis id ipsum. Phasellus ullamcorper libero ut fringilla tincidunt.\r\n\r\nIn hac habitasse platea dictumst. Curabitur iaculis eget ex ac posuere. Cras et pharetra tortor. Aliquam vehicula euismod tincidunt. Donec quam nisl, consectetur sed erat non, aliquet ultrices ipsum. Pellentesque ex ipsum, elementum ut odio quis, tempus accumsan dolor. In sem lacus, tempor a bibendum at, pulvinar sed neque. Phasellus et tortor nec est tincidunt sollicitudin vel sit amet nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin lacus risus, varius eget sapien vel, blandit iaculis nunc. Suspendisse sollicitudin suscipit imperdiet. Fusce mauris lacus, ultricies ut felis eget, mollis hendrerit ligula. Vivamus sed neque mauris. In sit amet lorem augue.\r\n\r\nQuisque vitae malesuada est. Nulla faucibus leo urna, eu bibendum neque finibus at. Nullam efficitur volutpat urna, nec ullamcorper tortor vehicula sit amet. Aliquam erat volutpat. Curabitur interdum quam mauris, at congue elit interdum ac. Donec metus lectus, efficitur tempus dui eget, accumsan ultrices ipsum. Nunc bibendum vehicula finibus. Sed et libero metus. Sed id sollicitudin velit. Nullam quis neque et mi rutrum tincidunt. Nam diam dolor, viverra at euismod eu, suscipit ac metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rhoncus ac sapien a rhoncus. Praesent vel justo commodo, dapibus nibh ut, lacinia dui. Nulla vestibulum tellus at elit ornare, nec sagittis elit suscipit.', '2022-02-23 15:31:28', '2022-02-23 15:31:28');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `id_withdraw` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_group`
--
ALTER TABLE `auth_group`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `auth_group_permissions`
--
ALTER TABLE `auth_group_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `auth_group_permissions_group_id_permission_id_0cd325b0_uniq` (`group_id`,`permission_id`),
  ADD KEY `auth_group_permissio_permission_id_84c5c92e_fk_auth_perm` (`permission_id`);

--
-- Indexes for table `auth_permission`
--
ALTER TABLE `auth_permission`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `auth_permission_content_type_id_codename_01ab375a_uniq` (`content_type_id`,`codename`);

--
-- Indexes for table `auth_user`
--
ALTER TABLE `auth_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `auth_user_groups`
--
ALTER TABLE `auth_user_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `auth_user_groups_user_id_group_id_94350c0c_uniq` (`user_id`,`group_id`),
  ADD KEY `auth_user_groups_group_id_97559544_fk_auth_group_id` (`group_id`);

--
-- Indexes for table `auth_user_user_permissions`
--
ALTER TABLE `auth_user_user_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `auth_user_user_permissions_user_id_permission_id_14a6b632_uniq` (`user_id`,`permission_id`),
  ADD KEY `auth_user_user_permi_permission_id_1fbb5f2c_fk_auth_perm` (`permission_id`);

--
-- Indexes for table `django_admin_log`
--
ALTER TABLE `django_admin_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `django_admin_log_content_type_id_c4bce8eb_fk_django_co` (`content_type_id`),
  ADD KEY `django_admin_log_user_id_c564eba6_fk_auth_user_id` (`user_id`);

--
-- Indexes for table `django_content_type`
--
ALTER TABLE `django_content_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `django_content_type_app_label_model_76bd3d3b_uniq` (`app_label`,`model`);

--
-- Indexes for table `django_migrations`
--
ALTER TABLE `django_migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `django_session`
--
ALTER TABLE `django_session`
  ADD PRIMARY KEY (`session_key`),
  ADD KEY `django_session_expire_date_a5c62663` (`expire_date`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id_game`);

--
-- Indexes for table `join_squad`
--
ALTER TABLE `join_squad`
  ADD PRIMARY KEY (`id_join_squad`),
  ADD UNIQUE KEY `id_squad` (`id_squad`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `id_game` (`id_game`);

--
-- Indexes for table `join_tournament`
--
ALTER TABLE `join_tournament`
  ADD PRIMARY KEY (`id_join_tournament`),
  ADD UNIQUE KEY `id_tournament` (`id_tournament`),
  ADD UNIQUE KEY `id_game` (`id_game`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `id_squad` (`id_squad`);

--
-- Indexes for table `knox_authtoken`
--
ALTER TABLE `knox_authtoken`
  ADD PRIMARY KEY (`digest`),
  ADD KEY `knox_authtoken_user_id_e5a5d899_fk_auth_user_id` (`user_id`),
  ADD KEY `knox_authtoken_token_key_8f4f7d47` (`token_key`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_logIn`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `schedule_tournament`
--
ALTER TABLE `schedule_tournament`
  ADD PRIMARY KEY (`id_schedule`);

--
-- Indexes for table `squad`
--
ALTER TABLE `squad`
  ADD PRIMARY KEY (`id_squad`);

--
-- Indexes for table `token_blacklist_blacklistedtoken`
--
ALTER TABLE `token_blacklist_blacklistedtoken`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token_id` (`token_id`);

--
-- Indexes for table `token_blacklist_outstandingtoken`
--
ALTER TABLE `token_blacklist_outstandingtoken`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token_blacklist_outstandingtoken_jti_hex_d9bdf6f7_uniq` (`jti`),
  ADD KEY `token_blacklist_outs_user_id_83bc629a_fk_auth_user` (`user_id`);

--
-- Indexes for table `tournament`
--
ALTER TABLE `tournament`
  ADD PRIMARY KEY (`id_tournament`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id_transaction`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_game` (`id_game`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_group`
--
ALTER TABLE `auth_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_group_permissions`
--
ALTER TABLE `auth_group_permissions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_permission`
--
ALTER TABLE `auth_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `auth_user`
--
ALTER TABLE `auth_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_user_groups`
--
ALTER TABLE `auth_user_groups`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_user_user_permissions`
--
ALTER TABLE `auth_user_user_permissions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `django_admin_log`
--
ALTER TABLE `django_admin_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `django_content_type`
--
ALTER TABLE `django_content_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `django_migrations`
--
ALTER TABLE `django_migrations`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `join_squad`
--
ALTER TABLE `join_squad`
  MODIFY `id_join_squad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `join_tournament`
--
ALTER TABLE `join_tournament`
  MODIFY `id_join_tournament` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_logIn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `schedule_tournament`
--
ALTER TABLE `schedule_tournament`
  MODIFY `id_schedule` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `token_blacklist_blacklistedtoken`
--
ALTER TABLE `token_blacklist_blacklistedtoken`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `token_blacklist_outstandingtoken`
--
ALTER TABLE `token_blacklist_outstandingtoken`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id_transaction` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_group_permissions`
--
ALTER TABLE `auth_group_permissions`
  ADD CONSTRAINT `auth_group_permissio_permission_id_84c5c92e_fk_auth_perm` FOREIGN KEY (`permission_id`) REFERENCES `auth_permission` (`id`),
  ADD CONSTRAINT `auth_group_permissions_group_id_b120cbf9_fk_auth_group_id` FOREIGN KEY (`group_id`) REFERENCES `auth_group` (`id`);

--
-- Constraints for table `auth_permission`
--
ALTER TABLE `auth_permission`
  ADD CONSTRAINT `auth_permission_content_type_id_2f476e4b_fk_django_co` FOREIGN KEY (`content_type_id`) REFERENCES `django_content_type` (`id`);

--
-- Constraints for table `auth_user_groups`
--
ALTER TABLE `auth_user_groups`
  ADD CONSTRAINT `auth_user_groups_group_id_97559544_fk_auth_group_id` FOREIGN KEY (`group_id`) REFERENCES `auth_group` (`id`),
  ADD CONSTRAINT `auth_user_groups_user_id_6a12ed8b_fk_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`);

--
-- Constraints for table `auth_user_user_permissions`
--
ALTER TABLE `auth_user_user_permissions`
  ADD CONSTRAINT `auth_user_user_permi_permission_id_1fbb5f2c_fk_auth_perm` FOREIGN KEY (`permission_id`) REFERENCES `auth_permission` (`id`),
  ADD CONSTRAINT `auth_user_user_permissions_user_id_a95ead1b_fk_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`);

--
-- Constraints for table `django_admin_log`
--
ALTER TABLE `django_admin_log`
  ADD CONSTRAINT `django_admin_log_content_type_id_c4bce8eb_fk_django_co` FOREIGN KEY (`content_type_id`) REFERENCES `django_content_type` (`id`),
  ADD CONSTRAINT `django_admin_log_user_id_c564eba6_fk_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`);

--
-- Constraints for table `join_squad`
--
ALTER TABLE `join_squad`
  ADD CONSTRAINT `join_squad_ibfk_1` FOREIGN KEY (`id_squad`) REFERENCES `squad` (`id_squad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `join_squad_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `join_squad_ibfk_3` FOREIGN KEY (`id_game`) REFERENCES `game` (`id_game`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `join_tournament`
--
ALTER TABLE `join_tournament`
  ADD CONSTRAINT `join_tournament_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `join_tournament_ibfk_2` FOREIGN KEY (`id_game`) REFERENCES `game` (`id_game`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `join_tournament_ibfk_3` FOREIGN KEY (`id_tournament`) REFERENCES `tournament` (`id_tournament`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `join_tournament_ibfk_4` FOREIGN KEY (`id_squad`) REFERENCES `squad` (`id_squad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `knox_authtoken`
--
ALTER TABLE `knox_authtoken`
  ADD CONSTRAINT `knox_authtoken_user_id_e5a5d899_fk_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `token_blacklist_blacklistedtoken`
--
ALTER TABLE `token_blacklist_blacklistedtoken`
  ADD CONSTRAINT `token_blacklist_blacklistedtoken_token_id_3cc7fe56_fk` FOREIGN KEY (`token_id`) REFERENCES `token_blacklist_outstandingtoken` (`id`);

--
-- Constraints for table `token_blacklist_outstandingtoken`
--
ALTER TABLE `token_blacklist_outstandingtoken`
  ADD CONSTRAINT `token_blacklist_outs_user_id_83bc629a_fk_auth_user` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
