-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 03. Feb 2015 um 10:30
-- Server Version: 5.6.21
-- PHP-Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `gewinnspiel`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `game`
--

CREATE TABLE IF NOT EXISTS `game` (
`ID` int(11) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `DESCRIPTION` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `map_game_prize`
--

CREATE TABLE IF NOT EXISTS `map_game_prize` (
  `FK_GAME` int(11) NOT NULL,
  `FK_PRIZE` int(11) NOT NULL,
  `FK_ACT_WINNER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `map_user_game_score`
--

CREATE TABLE IF NOT EXISTS `map_user_game_score` (
  `FK_USER` int(11) NOT NULL,
  `FK_GAME` int(11) NOT NULL,
  `ACT_SCORE` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `prize`
--

CREATE TABLE IF NOT EXISTS `prize` (
`ID` int(11) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `DESCRIPTION` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`ID` int(11) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `ISVERIFIED` int(11) NOT NULL,
  `EMAIL` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`ID`, `NAME`, `ISVERIFIED`, `EMAIL`) VALUES
(1, 'name', 0, 'example@web.de');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `game`
--
ALTER TABLE `game`
 ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `map_game_prize`
--
ALTER TABLE `map_game_prize`
 ADD KEY `fk_prize` (`FK_PRIZE`), ADD KEY `fk_act_winner` (`FK_ACT_WINNER`), ADD KEY `fk_game_score` (`FK_GAME`);

--
-- Indizes für die Tabelle `map_user_game_score`
--
ALTER TABLE `map_user_game_score`
 ADD KEY `fk_user_score` (`FK_USER`);

--
-- Indizes für die Tabelle `prize`
--
ALTER TABLE `prize`
 ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `game`
--
ALTER TABLE `game`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `prize`
--
ALTER TABLE `prize`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `map_game_prize`
--
ALTER TABLE `map_game_prize`
ADD CONSTRAINT `map_game_prize_ibfk_1` FOREIGN KEY (`FK_GAME`) REFERENCES `game` (`ID`),
ADD CONSTRAINT `map_game_prize_ibfk_2` FOREIGN KEY (`FK_PRIZE`) REFERENCES `prize` (`ID`),
ADD CONSTRAINT `map_game_prize_ibfk_3` FOREIGN KEY (`FK_ACT_WINNER`) REFERENCES `user` (`ID`),
ADD CONSTRAINT `map_game_prize_ibfk_4` FOREIGN KEY (`FK_GAME`) REFERENCES `game` (`ID`);

--
-- Constraints der Tabelle `map_user_game_score`
--
ALTER TABLE `map_user_game_score`
ADD CONSTRAINT `map_user_game_score_ibfk_1` FOREIGN KEY (`FK_USER`) REFERENCES `user` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
