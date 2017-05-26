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
-- Štruktúra tabuľky pre tabuľku `Roly_pracovnikov`
--

CREATE TABLE `Roly_pracovnikov` (
  `ID` int(11) NOT NULL,
  `Typ` varchar(10) COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `Roly_pracovnikov`
--

INSERT INTO `Roly_pracovnikov` (`ID`, `Typ`) VALUES
(1, 'user'),
(2, 'hr'),
(3, 'reporter'),
(4, 'editor'),
(5, 'admin');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `Roly_pracovnikov`
--
ALTER TABLE `Roly_pracovnikov`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `Roly_pracovnikov`
--
ALTER TABLE `Roly_pracovnikov`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
