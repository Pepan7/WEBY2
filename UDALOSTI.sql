-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Hostiteľ: localhost
-- Čas generovania: Pi 26.Máj 2017, 14:53
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
-- Štruktúra tabuľky pre tabuľku `UDALOSTI`
--

CREATE TABLE `UDALOSTI` (
  `ID` int(11) NOT NULL,
  `DATE` varchar(30) COLLATE utf8_slovak_ci NOT NULL,
  `TITLE-SK` varchar(80) COLLATE utf8_slovak_ci NOT NULL,
  `TITLE-EN` varchar(80) COLLATE utf8_slovak_ci NOT NULL,
  `FOLDER` varchar(80) COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `UDALOSTI`
--

INSERT INTO `UDALOSTI` (`ID`, `DATE`, `TITLE-SK`, `TITLE-EN`, `FOLDER`) VALUES
(1, '07.02.2017', 'Den otvorených dverí na ÚAMT FEI STU', 'Open day at UAMT FEI STU', 'event001'),
(2, '25.09.2015', 'Noc výskumníkov', 'Night of researchers', 'event002');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `UDALOSTI`
--
ALTER TABLE `UDALOSTI`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `UDALOSTI`
--
ALTER TABLE `UDALOSTI`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
