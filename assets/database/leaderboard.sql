-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Ned 05. kvě 2024, 21:46
-- Verze serveru: 10.4.25-MariaDB
-- Verze PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `leaderboard`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `player`
--

CREATE TABLE `player` (
  `id_player` int(11) NOT NULL,
  `nickname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `player`
--

INSERT INTO `player` (`id_player`, `nickname`) VALUES
(1, 'testos'),
(2, 'killer'),
(3, 'krajan');

-- --------------------------------------------------------

--
-- Struktura tabulky `score`
--

CREATE TABLE `score` (
  `id_score` int(11) NOT NULL,
  `finished_time` time NOT NULL,
  `date_leaderboard` date NOT NULL,
  `id_player` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `score`
--

INSERT INTO `score` (`id_score`, `finished_time`, `date_leaderboard`, `id_player`) VALUES
(1, '11:11:11', '2011-11-11', 1),
(2, '222:22:22', '2024-12-13', 2),
(3, '333:33:33', '2023-12-11', 3),
(4, '00:56:06', '2000-04-07', 1),
(5, '00:56:06', '2000-04-07', 1),
(6, '00:01:11', '2024-11-12', 1);

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id_player`);

--
-- Indexy pro tabulku `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id_score`),
  ADD KEY `player_id_player` (`id_player`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `player`
--
ALTER TABLE `player`
  MODIFY `id_player` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pro tabulku `score`
--
ALTER TABLE `score`
  MODIFY `id_score` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
