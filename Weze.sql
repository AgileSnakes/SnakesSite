-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Cze 05, 2023 at 11:00 AM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weze`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `games`
--

CREATE TABLE `games` (
  `id_games` int(11) NOT NULL,
  `game_name` varchar(200) NOT NULL,
  `game_link` varchar(999) NOT NULL,
  `png_link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id_games`, `game_name`, `game_link`, `png_link`) VALUES
(1, 'RollABall', 'Gry/RollABall/index.html', 'Gry/Img/Roll.png'),
(2, 'Angry Birds', 'Gry/AngryBirds/index.html', 'Gry/Img/Angry.png'),
(6, '2D Platformer', 'Gry/Platformer/index.html', 'Gry/Img/2D.png');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `games2`
--

CREATE TABLE `games2` (
  `game_id` int(11) NOT NULL,
  `game_name` varchar(50) NOT NULL,
  `png_link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `games2`
--

INSERT INTO `games2` (`game_id`, `game_name`, `png_link`) VALUES
(2, 'RollABall', ''),
(3, 'AngryBirds', ''),
(4, '2DPlatformer', ''),
(7, '', ''),
(8, '', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `leaderboard`
--

CREATE TABLE `leaderboard` (
  `id_leaderboard` int(200) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `highscore` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `admin` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `pass`, `admin`) VALUES
(10, 'Admin', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(11, 'Szymon', '81dc9bdb52d04dc20036dbd8313ed055', NULL),
(12, 'Michal', '202cb962ac59075b964b07152d234b70', 1),
(13, 'test', '098f6bcd4621d373cade4e832627b4f6', NULL);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id_games`);

--
-- Indeksy dla tabeli `games2`
--
ALTER TABLE `games2`
  ADD PRIMARY KEY (`game_id`);

--
-- Indeksy dla tabeli `leaderboard`
--
ALTER TABLE `leaderboard`
  ADD PRIMARY KEY (`id_leaderboard`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id_games` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `games2`
--
ALTER TABLE `games2`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `leaderboard`
--
ALTER TABLE `leaderboard`
  MODIFY `id_leaderboard` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
