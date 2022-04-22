-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 22 apr 2022 om 16:03
-- Serverversie: 10.4.22-MariaDB
-- PHP-versie: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurantpizza`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `adminlogin`
--

CREATE TABLE `adminlogin` (
  `ID` int(11) NOT NULL,
  `adminname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `adminlogin`
--

INSERT INTO `adminlogin` (`ID`, `adminname`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `titel` varchar(255) NOT NULL,
  `beschrijving` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `prijs` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `menu`
--

INSERT INTO `menu` (`id`, `titel`, `beschrijving`, `foto`, `prijs`) VALUES
(7, 'Pizza', 'Lekkerste pizza', 'c00dc34a-e73d-42f0-a86e-e2fd967d33fe.jpg', 232.2),
(10, 'Pizza Salami', 'de lekkerste pizza', 'png-transparent-pizza-garlic-bread-food-clock-ingredient-pizza-removebg-preview.png', 9.98),
(11, 'Pizza', 'de lekkerste pizza', 'pizzalanding3.jpg', 9.82),
(14, 'Pizza Mozzarella', 'lekkerste pizza', 'pizzalanding3.jpg', 9.32),
(15, 'Pizza', 'De lekkerste pizza', 'Den-Haag-pizza-bestellen-1-scaled.jpg', 15.32),
(16, 'Pizza', 'lekkerste', 'dish-4.png', 9.98),
(17, 'Pizza kaas', 'pizza kaas', 'c00dc34a-e73d-42f0-a86e-e2fd967d33fe.jpg', 9.32);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reserveringen`
--

CREATE TABLE `reserveringen` (
  `id` int(9) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(15) NOT NULL,
  `volwassenen` varchar(255) NOT NULL,
  `kinderen` varchar(255) NOT NULL,
  `checkin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `reserveringen`
--

INSERT INTO `reserveringen` (`id`, `naam`, `email`, `phone`, `volwassenen`, `kinderen`, `checkin`) VALUES
(2, 'dawiodoi', 'dhwioahddwhaio@gmail.com', 0, '2', '2', '2022-04-06');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `reserveringen`
--
ALTER TABLE `reserveringen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT voor een tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT voor een tabel `reserveringen`
--
ALTER TABLE `reserveringen`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
