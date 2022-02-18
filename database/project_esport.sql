-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2022 at 05:52 AM
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
(1, '41930026', 'artaputra97@gmail.com', 'd1c056a983786a38ca76a05cda240c7b86d77136', 1234, '2022-02-18 09:35:53', '2022-02-18 09:35:53', '2022-02-18 09:35:53', '2022-02-18 09:35:53'),
(3, '620e01ad9c154', 'artaputra95@gmail.com', 'd1c056a983786a38ca76a05cda240c7b86d77136', 0, '2022-02-18 09:33:50', '2022-02-18 09:33:50', '2022-02-18 09:33:50', '2022-02-18 09:33:50');

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
  `role` enum('admin','user','organizer') NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `full_name`, `phone_number`, `birth_date`, `gender`, `status`, `poin`, `username`, `image`, `role`, `description`, `created_at`, `updated_at`) VALUES
('41930026', 'Nyoman Dana Wardhianaaaa', '089635524614', '2022-02-03', 'L', '1', 10, 'admin', 'hjghjghj.jpg', 'admin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sodales, erat ut sagittis mattis, est lorem venenatis tellus, in semper dolor ligula vitae risus. Cras vitae turpis non tellus ullamcorper faucibus sed ac ante. Cras dui dolor, dictum sit amet scelerisque in, volutpat blandit magna. Aliquam dui sem, sodales non nunc ut, congue lacinia purus. Quisque eget justo nec lorem sagittis volutpat. Ut rutrum vulputate imperdiet. Sed porta, sem vitae sagittis sodales, lacus tortor fringilla eros, quis sodales lacus libero id urna. Nam condimentum ligula hendrerit ipsum lacinia, at tincidunt est vestibulum. Fusce ac rhoncus erat, eu dictum sem. Sed quis posuere dolor, vitae hendrerit sapien. Mauris cursus nulla sit amet neque viverra cursus. Sed efficitur vitae tortor sed venenatis. Integer sed diam tortor.', '2022-02-18 10:57:53', '2022-02-18 10:57:53'),
('620e01ad9c154', 'Nyoman Dana Wardhiana', '089635524614', '2022-02-03', 'L', '', 0, '', '', 'admin', '', '2022-02-18 09:33:50', '2022-02-18 09:33:50');

--
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`id_user`);

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
  MODIFY `id_logIn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
