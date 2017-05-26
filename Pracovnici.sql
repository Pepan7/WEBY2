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
-- Štruktúra tabuľky pre tabuľku `Pracovnici`
--

CREATE TABLE `Pracovnici` (
  `ID` int(11) NOT NULL,
  `Meno` varchar(20) COLLATE utf8_slovak_ci NOT NULL,
  `Priezvisko` varchar(35) COLLATE utf8_slovak_ci NOT NULL,
  `Titul_pred` varchar(20) COLLATE utf8_slovak_ci DEFAULT NULL,
  `Titul_za` varchar(20) COLLATE utf8_slovak_ci DEFAULT NULL,
  `LDAPlogin` varchar(20) COLLATE utf8_slovak_ci DEFAULT NULL,
  `Fotka` varchar(50) COLLATE utf8_slovak_ci DEFAULT NULL,
  `Miestnost` varchar(10) COLLATE utf8_slovak_ci NOT NULL,
  `Telefon` varchar(5) COLLATE utf8_slovak_ci DEFAULT NULL,
  `Oddelenie` varchar(10) COLLATE utf8_slovak_ci NOT NULL,
  `Pozicia_v_skole` varchar(25) COLLATE utf8_slovak_ci NOT NULL,
  `Funkcia` text COLLATE utf8_slovak_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `Pracovnici`
--

INSERT INTO `Pracovnici` (`ID`, `Meno`, `Priezvisko`, `Titul_pred`, `Titul_za`, `LDAPlogin`, `Fotka`, `Miestnost`, `Telefon`, `Oddelenie`, `Pozicia_v_skole`, `Funkcia`) VALUES
(1, 'Vladislav', 'Bača', 'Ing.', NULL, NULL, 'baca.jpg', 'T005', '264', 'OEMP', 'doktorand', NULL),
(2, 'Peter', 'Balko', 'Ing.', NULL, NULL, NULL, 'D 102', '395', 'OIKR', 'doktorand', NULL),
(3, 'Richard', 'Balogh', 'Ing.', 'PhD.', NULL, 'balogh.jpg', 'D 110', '411', 'OEMP', 'teacher', 'zástupca vedúceho oddelenia'),
(4, 'Igor', 'Bélai', 'Ing.', 'PhD.', NULL, NULL, 'D 126', '478', 'OEMP', 'teacher', NULL),
(5, 'Katarína', 'Beringerová', NULL, NULL, NULL, NULL, 'A 705', '672', 'AHU', 'teacher', NULL),
(6, 'Pavol', 'Bisták', 'Ing.', 'PhD.', 'bistak', 'bistak.jpg', 'D 120', '695', 'OEAP', 'teacher', NULL),
(7, 'Dmitrii', 'Borkin', 'Ing.', NULL, NULL, NULL, 'D 102', '395', 'OIKR', 'doktorand', NULL),
(8, 'Martin', 'Bugár', 'Ing.', 'PhD.', NULL, NULL, 'A 708', '579', 'OEAP', 'teacher', NULL),
(9, 'Ján', 'Cigánek', 'Ing.', 'PhD.', NULL, NULL, 'D 104', '686', 'OIKR', 'teacher', NULL),
(10, 'Peter', 'Drahoš', 'doc. Ing.', 'PhD.', NULL, NULL, 'D 118', '669', 'OEMP', 'teacher', NULL),
(11, 'František', 'Erdödy', NULL, NULL, NULL, 'erdody.jpg', 'A S39', '818', 'AHU', 'teacher', NULL),
(12, 'Viktor', 'Ferencey', 'prof. Ing.', 'PhD.', NULL, 'ferencey.jpg', 'A 802', '438', 'OEAP', 'teacher', 'zástupca vedúceho oddelenia'),
(13, 'Peter', 'Fuchs', 'doc. Ing.', 'PhD.', NULL, NULL, 'B S05', '826', 'OEMP', 'researcher', NULL),
(14, 'Gabriel', 'Gálik', 'Ing.', NULL, NULL, NULL, 'A 706', '559', 'OAMM', 'researcher', NULL),
(15, 'Vladimír', 'Goga', 'doc. Ing.', 'PhD.', NULL, NULL, 'A 702', '687', 'OAMM', 'teacher', NULL),
(16, 'Miroslav', 'Gula', 'Ing.', NULL, 'xgulam', 'gula.jpg', 'D 103', '628', 'OIKR', 'doktorand', NULL),
(17, 'Oto', 'Haffner', 'Ing.', 'PhD.', NULL, 'haffner.jpg', 'D 125', '315', 'OIKR', 'teacher', NULL),
(18, 'Juraj', 'Hrabovský', 'Ing.', 'PhD.', NULL, NULL, 'A 706', '559', 'OAMM', 'teacher', NULL),
(19, 'Mikuláš', 'Huba', 'prof. Ing.', 'PhD.', NULL, 'huba.jpg', 'D 112', '771', 'OEAP', 'teacher', 'riaditeľ ústavu; vedúci oddelenia'),
(20, 'Mária', 'Hypiusová', 'Ing.', 'PhD.', NULL, NULL, 'D 122', '193', 'OIKR', 'teacher', NULL),
(21, 'Štefan', 'Chamraz', 'Ing.', 'PhD.', NULL, NULL, 'D 107', '848', 'OEMP', 'teacher', NULL),
(22, 'Jakub', 'Jakubec', 'Ing.', 'PhD.', NULL, NULL, 'A 707', '452', 'OAMM', 'researcher', NULL),
(23, 'Igor', 'Jakubička', 'Ing.', NULL, NULL, 'jakubicka.jpg', 'T005', '264', 'OEMP', 'doktorand', NULL),
(24, 'Katarína', 'Kermietová', NULL, NULL, NULL, NULL, 'D 116', '598', 'AHU', 'teacher', 'zástupca vedúceho oddelenia'),
(25, 'Ivan', 'Klimo', 'Ing.', NULL, NULL, NULL, 'D 101', '509', 'OEMP', 'doktorand', NULL),
(26, 'Michal', 'Kocúr', 'Ing.', 'PhD.', 'xkocurm2', 'kocur.jpg', 'D 104', '686', 'OIKR', 'teacher', NULL),
(27, 'Štefan', 'Kozák', 'prof. Ing.', 'PhD.', NULL, 'kozak.jpg', 'D 115', '281', 'OEMP', 'teacher', 'zástupca riaditeľa ústavu pre rozvoj ústavu; vedúci oddelenia'),
(28, 'Alena', 'Kozáková', 'doc. Ing.', 'PhD.', NULL, NULL, 'D 111', '563', 'OIKR', 'teacher', NULL),
(29, 'Erik', 'Kučera', 'Ing.', 'PhD.', NULL, NULL, 'D 125', '315', 'OIKR', 'teacher', NULL),
(30, 'Vladimír', 'Kutiš', 'doc. Ing.', 'PhD.', NULL, 'kutis.jpg', 'A 701', '562', 'OAMM', 'teacher', 'zástupca vedúceho oddelenia'),
(31, 'Alek', 'Lichtman', 'Ing.', NULL, NULL, NULL, 'D 101', '509', 'OEMP', 'doktorand', NULL),
(32, 'Justín', 'Murín', 'prof. Ing.', 'DrSc.', NULL, 'murin.jpg', 'A 704', '611', 'OAMM', 'teacher', 'zástupca riaditeľa ústavu pre vedeckú činnosť; vedúci oddelenia'),
(33, 'Jakub', 'Osuský', 'Ing.', 'PhD.', NULL, 'osusky.jpg', 'D 123', '356', 'OIKR', 'teacher', NULL),
(34, 'Tomáš', 'Paciga', 'Ing.', NULL, NULL, NULL, 'A 707', '452', 'OAMM', 'doktorand', NULL),
(35, 'Juraj', 'Paulech', 'Ing.', 'PhD.', NULL, 'paulech.jpg', 'A 701', '562', 'OAMM', 'teacher', NULL),
(36, 'Matej', 'Rábek', 'Ing.', NULL, 'xrabek', 'rabek.jpg', 'D 103', '628', 'OIKR', 'doktorand', NULL),
(37, 'Danica', 'Rosinová', 'doc. Ing.', 'PhD.', NULL, 'rosinova.jpg', 'D 111', '563', 'OIKR', 'teacher', 'vedúci oddelenia'),
(38, 'Tibor', 'Sedlár', 'Ing.', NULL, NULL, NULL, 'A 803', '399', 'OAMM', 'teacher', NULL),
(39, 'Erich', 'Stark', 'Ing.', NULL, NULL, 'stark.jpg', 'C 014', NULL, 'OIKR', 'doktorand', NULL),
(40, 'Peter', 'Ťapák', 'Ing.', 'PhD.', NULL, NULL, 'D 121', '569', 'OEAP', 'teacher', NULL),
(41, 'Katarína ', 'Žáková', 'doc. Ing.', 'PhD.', 'zakova', 'zakova.jpg', 'D 119', '742', 'OIKR', 'teacher', 'zástupca riaditeľa ústavu pre pedagogickú činnosť; zástupca vedúceho oddelenia');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `Pracovnici`
--
ALTER TABLE `Pracovnici`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `Pracovnici`
--
ALTER TABLE `Pracovnici`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
