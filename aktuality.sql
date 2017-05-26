-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Hostiteľ: localhost
-- Čas generovania: Pi 26.Máj 2017, 14:51
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
-- Štruktúra tabuľky pre tabuľku `aktuality`
--

CREATE TABLE `aktuality` (
  `id` int(11) NOT NULL,
  `skact` varchar(300) DEFAULT NULL,
  `enact` varchar(300) DEFAULT NULL,
  `platnost` date NOT NULL,
  `kat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sťahujem dáta pre tabuľku `aktuality`
--

INSERT INTO `aktuality` (`id`, `skact`, `enact`, `platnost`, `kat`) VALUES
(111, 'slovensky', NULL, '2017-05-31', 1),
(112, 'slovensky', NULL, '2017-05-26', 2),
(113, 'slovensky', NULL, '2017-05-28', 3),
(114, 'slovensky', NULL, '2017-05-01', 1),
(115, 'slovensky', NULL, '2017-05-01', 2),
(116, 'slovensky', NULL, '2017-05-01', 3),
(117, 'slovensky', NULL, '2017-05-01', 1),
(118, 'slovensky', NULL, '2017-05-01', 2),
(119, 'slovensky', NULL, '2017-05-01', 3),
(120, 'slovensky', NULL, '2017-05-10', 1),
(121, NULL, 'english', '2017-05-30', 3),
(122, NULL, 'english', '2017-05-22', 2),
(123, NULL, 'english', '2017-05-26', 1),
(124, NULL, 'english', '2017-05-28', 3),
(125, NULL, 'english', '2017-05-04', 2),
(126, NULL, 'english', '2017-05-06', 1),
(127, NULL, 'english', '2017-05-04', 3),
(128, NULL, 'english', '2017-05-11', 2),
(129, NULL, 'english', '2017-05-19', 1),
(130, NULL, 'english', '2017-05-15', 3),
(131, NULL, 'english', '2017-05-11', 2),
(132, NULL, 'english', '2017-05-11', 1),
(133, NULL, 'english', '2017-05-15', 3),
(134, NULL, 'english', '2017-05-12', 2),
(135, NULL, 'english', '2017-05-16', 1),
(136, 'both', 'both', '2017-05-25', 3),
(137, 'both', 'both', '2017-05-26', 2),
(138, 'both', 'both', '2017-05-27', 1),
(139, 'both', 'both', '2017-05-11', 3),
(140, 'both', 'both', '2017-05-01', 2),
(141, 'both', 'both', '2017-05-03', 1),
(142, 'both', 'both', '2017-05-05', 3),
(143, 'both', 'both', '2017-05-14', 2),
(144, 'both', 'both', '2017-05-06', 1),
(145, 'both', 'both', '2017-05-03', 3),
(146, 'both', 'both', '2017-05-05', 2),
(147, 'both', 'both', '2017-05-01', 1),
(148, 'both', 'both', '2017-05-10', 3),
(149, 'both', 'both', '2017-05-12', 2),
(150, 'both', 'both', '2017-05-03', 1),
(151, 'both', 'both', '2017-05-25', 3),
(152, 'both', 'both', '2017-05-26', 2),
(153, 'both', 'both', '2017-05-27', 1),
(154, 'both', 'both', '2017-05-11', 3),
(155, 'both', 'both', '2017-05-01', 2),
(156, 'both', 'both', '2017-05-03', 1),
(157, 'both', 'both', '2017-05-05', 3),
(158, 'both', 'both', '2017-05-14', 2),
(159, 'both', 'both', '2017-05-06', 1),
(160, 'both', 'both', '2017-05-03', 3),
(161, 'both', 'both', '2017-05-05', 2),
(162, 'both', 'both', '2017-05-01', 1),
(163, 'both', 'both', '2017-05-10', 3),
(164, 'both', 'both', '2017-05-12', 2),
(165, 'both', 'both', '2017-05-03', 1),
(166, 'dasdsdaaaaaaaaaaaaaaaaaaaaasf', 'dadasdadsadsada', '2017-05-31', 3),
(167, 'asads', 'dadsad', '2017-05-03', 3),
(168, 'slooovencinaa', 'andfwadw', '1992-11-05', 1),
(169, 'aasfaf', '', '2017-06-24', 2),
(170, 'fsdsfdfs', '', '1992-02-02', 1),
(171, 'null', 'ssvs', '2011-04-05', 1),
(172, NULL, 'dasda', '2017-11-23', 1),
(173, 'afsf', NULL, '2017-11-23', 1),
(177, 'nova aktualita', 'new new', '2017-04-06', 2),
(178, 'nooooova ack', NULL, '2017-05-06', 1),
(179, 'nananannanananananannana', 'okokokokokokokokokok', '2017-11-23', 2),
(180, 'batmanbatmanbatmanbatmanbatmanbatman', 'supermansupermansupermansuperman', '2018-01-01', 1),
(181, 'gcfd hzthrd ', 'gregsthdchnfz', '1666-02-02', 2),
(182, 'svdvahsvdhavsd', 'fhbsfbjsbfj', '2017-11-02', 1),
(183, 'blblblblblblblblblb', 'blblblblblbl len anglicky', '2017-06-09', 2),
(184, 'novinka', 'new', '2017-11-23', 2),
(185, 'novinka', 'ennovinka', '2019-02-03', 1);

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `aktuality`
--
ALTER TABLE `aktuality`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `aktuality`
--
ALTER TABLE `aktuality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
