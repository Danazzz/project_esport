-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2022 at 02:23 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kode_otp` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','organizer') NOT NULL,
  `id_person` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id_game` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `popularity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_logIn` int(11) NOT NULL,
  `id_user` varchar(50) NOT NULL,
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

INSERT INTO `login` (`id_logIn`, `id_user`, `email`, `password`, `otp_code`, `logIn_at`, `logOut_at`, `created_at`, `updated_at`) VALUES
(1, '41930026', 'tes@gmail.com', 'd1c056a983786a38ca76a05cda240c7b86d77136', 1234, '2022-02-03 12:27:11', '2022-02-03 12:27:11', '2022-02-03 12:27:11', '2022-02-03 12:27:11');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id_person` int(11) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id_person`, `description`) VALUES
(1, 'isAdmin'),
(2, 'isUser'),
(3, 'isOrganizer');

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
-- Table structure for table `tournament`
--

CREATE TABLE `tournament` (
  `id_tournament` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('free','paid') NOT NULL,
  `state` varchar(50) NOT NULL,
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `birth_date` date NOT NULL,
  `gender` enum('L','P','Unknown') NOT NULL,
  `status` enum('0','1') NOT NULL,
  `poin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_person` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `full_name`, `phone_number`, `birth_date`, `gender`, `status`, `poin`, `username`, `image`, `id_person`, `created_at`, `updated_at`) VALUES
('41930001', 'I Putu tes', '0811392406', '2022-02-01', 'L', '1', 5, 'tes', 'tes.jpg', 3, '2022-02-14 15:40:04', '2022-02-14 15:40:04'),
('41930026', 'I Nyoman tes', '089635524614', '2022-02-02', 'L', '1', 10, 'admin', 'hjghjghj.jpg', 2, '2022-02-02 13:24:35', '2022-02-02 13:24:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `id_person` (`id_person`);

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
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_logIn`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id_person`);

--
-- Indexes for table `squad`
--
ALTER TABLE `squad`
  ADD PRIMARY KEY (`id_squad`);

--
-- Indexes for table `tournament`
--
ALTER TABLE `tournament`
  ADD PRIMARY KEY (`id_tournament`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_person` (`id_person`);

--
-- AUTO_INCREMENT for dumped tables
--

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
  MODIFY `id_logIn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id_person` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `person` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `join_squad`
--
ALTER TABLE `join_squad`
  ADD CONSTRAINT `join_squad_ibfk_1` FOREIGN KEY (`id_squad`) REFERENCES `squad` (`id_squad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `join_squad_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `join_squad_ibfk_3` FOREIGN KEY (`id_game`) REFERENCES `game` (`id_game`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `join_tournament`
--
ALTER TABLE `join_tournament`
  ADD CONSTRAINT `join_tournament_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `join_tournament_ibfk_2` FOREIGN KEY (`id_game`) REFERENCES `game` (`id_game`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `join_tournament_ibfk_3` FOREIGN KEY (`id_tournament`) REFERENCES `tournament` (`id_tournament`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `join_tournament_ibfk_4` FOREIGN KEY (`id_squad`) REFERENCES `squad` (`id_squad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `person` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
