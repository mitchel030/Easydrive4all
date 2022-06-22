-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 22 jun 2022 om 14:55
-- Serverversie: 5.7.31
-- PHP-versie: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examen2022`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `annulerenlessen`
--

DROP TABLE IF EXISTS `annulerenlessen`;
CREATE TABLE IF NOT EXISTS `annulerenlessen` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Les` int(11) NOT NULL,
  `Reden` varchar(300) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Les` (`Les`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `annulerenlessen`
--

INSERT INTO `annulerenlessen` (`ID`, `Les`, `Reden`) VALUES
(1, 1, 'Corona\r\n'),
(2, 6, 'Griep');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `instructeur2`
--

DROP TABLE IF EXISTS `instructeur2`;
CREATE TABLE IF NOT EXISTS `instructeur2` (
  `Email` varchar(50) NOT NULL,
  `Naam` varchar(50) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `instructeur2`
--

INSERT INTO `instructeur2` (`Email`, `Naam`) VALUES
('groen@mail.nl', 'Groen'),
('konijn@google.nl', 'Konijn'),
('frasi@google.sp', 'Frasi');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `leerling2`
--

DROP TABLE IF EXISTS `leerling2`;
CREATE TABLE IF NOT EXISTS `leerling2` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Naam` varchar(50) NOT NULL,
  `Woonplaats` varchar(50) NOT NULL,
  `Postcode` varchar(50) NOT NULL,
  `Straat` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `leerling2`
--

INSERT INTO `leerling2` (`Id`, `Naam`, `Woonplaats`, `Postcode`, `Straat`) VALUES
(3, 'Konijn', 'Utrecht', '3590UV', 'Laan 45'),
(4, 'Slavink', 'Nieuwegein', '3678 II', 'Overweg 7'),
(6, 'Otto', 'Houten', '3822AS', 'Groenlo 44');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `lessen`
--

DROP TABLE IF EXISTS `lessen`;
CREATE TABLE IF NOT EXISTS `lessen` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Datum` varchar(50) NOT NULL,
  `Leerling` int(50) DEFAULT NULL,
  `Instructeur` varchar(50) DEFAULT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'G',
  PRIMARY KEY (`ID`),
  KEY `Leerling` (`Leerling`),
  KEY `instructeur` (`Instructeur`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `lessen`
--

INSERT INTO `lessen` (`ID`, `Datum`, `Leerling`, `Instructeur`, `Status`) VALUES
(1, '2022-05-20', 3, 'groen@mail.nl', 'G'),
(2, '2022-05-20', 6, 'fransi@google.sp', 'G'),
(3, '2022-05-21', 4, 'konijn@google.com', 'G'),
(4, '2022-05-21', 6, 'frasi@google.sp', 'G'),
(5, '2022-05-22', 3, 'groen@mail.nl', 'G'),
(6, '2022-05-28', 4, 'konijn@google.com', 'G'),
(7, '2022-06-01', 3, 'konijn@google.com', 'G'),
(8, '2022-06-12', 3, 'groen@mail.nl', 'G'),
(9, '2022-06-22', 3, 'groen@mail.nl', 'G'),
(10, '2022-06-24', 4, 'konijn@google.com', 'G'),
(11, '2022-06-24', 3, 'groen@mail.nl', 'G'),
(12, '2022-06-28', 3, 'frasi@google.sp', 'G');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
