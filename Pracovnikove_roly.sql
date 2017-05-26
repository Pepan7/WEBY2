-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Hostiteľ: localhost
-- Čas generovania: Pi 26.Máj 2017, 14:52
-- Verzia serveru: 5.7.17-0ubuntu0.16.04.1
-- Verzia PHP: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `Zaverecne_zadanie`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `Pracovnikove_roly`
--

CREATE TABLE `Pracovnikove_roly` (
  `ID` int(11) NOT NULL,
  `ID_Roly` int(11) NOT NULL,
  `ID_pracovnika` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `Pracovnikove_roly`
--

INSERT INTO `Pracovnikove_roly` (`ID`, `ID_Roly`, `ID_pracovnika`) VALUES
(12, 1, 1),
(13, 1, 2),
(14, 1, 3),
(15, 1, 4),
(16, 1, 5),
(17, 1, 6),
(18, 1, 7),
(19, 1, 8),
(20, 1, 9),
(21, 1, 10),
(22, 1, 11),
(23, 1, 12),
(24, 1, 13),
(25, 1, 14),
(26, 1, 15),
(27, 1, 16),
(28, 1, 17),
(29, 1, 18),
(30, 1, 19),
(31, 1, 20),
(32, 1, 21),
(33, 1, 22),
(34, 1, 23),
(35, 1, 24),
(36, 1, 25),
(37, 1, 26),
(38, 1, 27),
(39, 1, 28),
(40, 1, 29),
(41, 1, 30),
(42, 1, 31),
(43, 1, 32),
(44, 1, 33),
(45, 1, 34),
(46, 1, 35),
(47, 1, 36),
(48, 1, 37),
(49, 1, 38),
(50, 1, 39),
(51, 1, 40),
(52, 1, 41),
(54, 5, 41);

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `Pracovnikove_roly`
--
ALTER TABLE `Pracovnikove_roly`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Roly` (`ID_Roly`),
  ADD KEY `ID_pracovnika` (`ID_pracovnika`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `Pracovnikove_roly`
--
ALTER TABLE `Pracovnikove_roly`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- Obmedzenie pre exportované tabuľky
--

--
-- Obmedzenie pre tabuľku `Pracovnikove_roly`
--
ALTER TABLE `Pracovnikove_roly`
  ADD CONSTRAINT `Pracovnikove_roly_ibfk_1` FOREIGN KEY (`ID_Roly`) REFERENCES `Roly_pracovnikov` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Pracovnikove_roly_ibfk_2` FOREIGN KEY (`ID_pracovnika`) REFERENCES `Pracovnici` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
