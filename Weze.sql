-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 04 Kwi 2023, 17:27
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `Weze`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Games`
--

CREATE TABLE `Games` (
  `id_games` int(11) NOT NULL,
  `game_name` varchar(200) COLLATE utf8_bin NOT NULL,
  `game_link` varchar(200) COLLATE utf8_bin NOT NULL,
  `png_link` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `Games`
--

INSERT INTO `Games` (`id_games`, `game_name`, `game_link`, `png_link`) VALUES
(1, 'Roll a ball', 'build/index.html', 'Img/Roll.png'),
(2, 'Angry Birds', 'AngryBirds/AngryBirds/index.html', 'Img/Angry.png'),
(6, '2D Platformer', '2DPlatformer/index.html', 'Img/2D.png');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Leaderboard`
--

CREATE TABLE `Leaderboard` (
  `id_leaderboard` int(200) NOT NULL,
  `user_name` varchar(20) COLLATE utf8_bin NOT NULL,
  `highscore` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `pass` varchar(200) COLLATE utf8_bin NOT NULL,
  `admin` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `pass`, `admin`) VALUES
(10, 'Admin', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(11, 'Szymon', '81dc9bdb52d04dc20036dbd8313ed055', NULL);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `Games`
--
ALTER TABLE `Games`
  ADD PRIMARY KEY (`id_games`);

--
-- Indeksy dla tabeli `Leaderboard`
--
ALTER TABLE `Leaderboard`
  ADD PRIMARY KEY (`id_leaderboard`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `Games`
--
ALTER TABLE `Games`
  MODIFY `id_games` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `Leaderboard`
--
ALTER TABLE `Leaderboard`
  MODIFY `id_leaderboard` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
