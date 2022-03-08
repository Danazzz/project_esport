-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2022 at 07:53 AM
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
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id_game`, `name`, `image`, `created_at`, `updated_at`) VALUES
('62108a45e522d', 'Valorant', '62108a45e523e.svg', '2022-02-19 14:12:22', '2022-02-19 14:12:22'),
('62173d5393dac', 'tes', '62173d5393df8.jpg', '2022-02-24 16:09:55', '2022-02-24 16:09:55'),
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
-- Table structure for table `leaderboard_squad`
--

CREATE TABLE `leaderboard_squad` (
  `id_leaderboard` int(11) NOT NULL,
  `id_squad` varchar(50) NOT NULL,
  `rank` int(11) NOT NULL
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
-- Table structure for table `squad`
--

CREATE TABLE `squad` (
  `id_squad` varchar(50) NOT NULL,
  `id_game` varchar(50) NOT NULL,
  `leader` varchar(50) NOT NULL,
  `member1` varchar(50) NOT NULL,
  `member2` varchar(50) NOT NULL,
  `member3` varchar(50) NOT NULL,
  `member4` varchar(50) NOT NULL,
  `member5` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `poin` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `squad`
--

INSERT INTO `squad` (`id_squad`, `id_game`, `leader`, `member1`, `member2`, `member3`, `member4`, `member5`, `name`, `poin`, `description`, `image`, `created_at`, `updated_at`) VALUES
('62172c9c48b07', '96441d2c-908d-11ec-962f-00d861e392f3', '620e01ad9c154', '62132b578e092', '', '', '', '', 'Pseudocode', 0, 'squad bunga', '62172c9c48b16.jpg', '2022-02-24 14:58:36', '2022-02-24 14:58:36');

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
  `id_user` varchar(50) NOT NULL,
  `id_registeam` int(11) NOT NULL,
  `id_game` varchar(50) NOT NULL,
  `id_schedule` int(11) NOT NULL,
  `id_rules` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` enum('free','paid') NOT NULL,
  `status` enum('open','closed','ongoing','comingsoon') NOT NULL,
  `location` enum('online','offline') NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `coordinates` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_bracket` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tournament`
--

INSERT INTO `tournament` (`id_tournament`, `id_user`, `id_registeam`, `id_game`, `id_schedule`, `id_rules`, `name`, `type`, `status`, `location`, `city`, `address`, `coordinates`, `price`, `description`, `image`, `id_bracket`, `created_at`, `updated_at`) VALUES
('12345678AABBCC', '41930026', 0, '62108a45e522d', 0, 0, 'Tournamnet test', 'free', 'open', 'online', 'Denpasar Utara', 'Jln. Cargo Permai', '-8.643575 , 115.209175', 0, 'tes tournament', '', 0, '2022-02-28 10:45:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tournament_bracket`
--

CREATE TABLE `tournament_bracket` (
  `id_bracket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tournament_registeam`
--

CREATE TABLE `tournament_registeam` (
  `id_registeam` int(11) NOT NULL,
  `id_squad` varchar(50) NOT NULL,
  `member1` varchar(50) NOT NULL,
  `member2` varchar(50) NOT NULL,
  `member3` varchar(50) NOT NULL,
  `member4` varchar(50) NOT NULL,
  `member5` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tournament_rules`
--

CREATE TABLE `tournament_rules` (
  `id_rules` int(11) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `match_system` varchar(255) NOT NULL,
  `requirements` text NOT NULL,
  `device` varchar(255) NOT NULL,
  `custom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tournament_schedule`
--

CREATE TABLE `tournament_schedule` (
  `id_schedule` int(11) NOT NULL,
  `registration` date NOT NULL,
  `technical_meeting` date NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `custom` date NOT NULL
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
-- Indexes for table `leaderboard_squad`
--
ALTER TABLE `leaderboard_squad`
  ADD PRIMARY KEY (`id_leaderboard`);

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
-- Indexes for table `tournament_bracket`
--
ALTER TABLE `tournament_bracket`
  ADD PRIMARY KEY (`id_bracket`);

--
-- Indexes for table `tournament_registeam`
--
ALTER TABLE `tournament_registeam`
  ADD PRIMARY KEY (`id_registeam`);

--
-- Indexes for table `tournament_rules`
--
ALTER TABLE `tournament_rules`
  ADD PRIMARY KEY (`id_rules`);

--
-- Indexes for table `tournament_schedule`
--
ALTER TABLE `tournament_schedule`
  ADD PRIMARY KEY (`id_schedule`);

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
-- AUTO_INCREMENT for table `leaderboard_squad`
--
ALTER TABLE `leaderboard_squad`
  MODIFY `id_leaderboard` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_logIn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tournament_bracket`
--
ALTER TABLE `tournament_bracket`
  MODIFY `id_bracket` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tournament_registeam`
--
ALTER TABLE `tournament_registeam`
  MODIFY `id_registeam` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tournament_rules`
--
ALTER TABLE `tournament_rules`
  MODIFY `id_rules` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tournament_schedule`
--
ALTER TABLE `tournament_schedule`
  MODIFY `id_schedule` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id_transaction` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
