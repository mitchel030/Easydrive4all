-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 21 jun 2022 om 09:09
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
-- Tabelstructuur voor tabel `instructeur`
--

DROP TABLE IF EXISTS `instructeur`;
CREATE TABLE IF NOT EXISTS `instructeur` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `InstructeurVoornaam` varchar(100) NOT NULL,
  `Tussenvoegsel` varchar(50) NOT NULL,
  `Achternaam` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `instructeur`
--

INSERT INTO `instructeur` (`id`, `InstructeurVoornaam`, `Tussenvoegsel`, `Achternaam`) VALUES
(1, 'karel', 'de', 'groot'),
(2, 'Max', 'van', 'haarst\r\n'),
(3, 'mitchel', '', '	ors'),
(4, 'Joost', 'van', 'geerard'),
(5, 'karim', '', 'hassan');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `leerling`
--

DROP TABLE IF EXISTS `leerling`;
CREATE TABLE IF NOT EXISTS `leerling` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `Voornaam` varchar(100) NOT NULL,
  `Tussenvoegsel` varchar(50) NOT NULL,
  `Achternaam` varchar(100) NOT NULL,
  `Woonadres` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `leerling`
--

INSERT INTO `leerling` (`id`, `Voornaam`, `Tussenvoegsel`, `Achternaam`, `Woonadres`) VALUES
(1, 'hans', '', 'bart', '3553dd, Utrecht'),
(2, 'joost', 'van', 'boom', '3560DG, Utrecht'),
(3, 'brian', '', 'segakindi', '3223PP, Nieuwegein'),
(4, 'yassin', '', 'karimi', '3541FP, Utrecht'),
(5, 'hasan', 'van', 'jasaan', '7632DD, Houten');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `rijles`
--

DROP TABLE IF EXISTS `rijles`;
CREATE TABLE IF NOT EXISTS `rijles` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `InstructeurId` int(50) DEFAULT NULL,
  `LeerlingId` int(50) DEFAULT NULL,
  `Datum` varchar(30) NOT NULL,
  `Tijd` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `LeerlingId` (`LeerlingId`),
  KEY `InstructeurId` (`InstructeurId`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `rijles`
--

INSERT INTO `rijles` (`id`, `InstructeurId`, `LeerlingId`, `Datum`, `Tijd`) VALUES
(1, 1, 1, '20-6-2022', '20:00:00'),
(2, 2, 2, '25-6-2022', '12:00:00'),
(3, 3, 3, '13-7-2022', '15:00:00'),
(4, 4, 4, '24-6-2022', '13:30:00'),
(5, 5, 5, '12-7-2022', '17:45:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
