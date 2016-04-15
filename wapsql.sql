-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Stř 13. dub 2016, 21:24
-- Verze serveru: 10.1.9-MariaDB
-- Verze PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `wapsql`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `vlastnik`
--

CREATE TABLE `vlastnik` (
  `ID` int(11) NOT NULL,
  `jmeno` varchar(255) NOT NULL,
  `prijmeni` varchar(255) NOT NULL,
  `registrace` date NOT NULL,
  `vuzFK` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `vlastnik`
--

INSERT INTO `vlastnik` (`ID`, `jmeno`, `prijmeni`, `registrace`, `vuzFK`) VALUES
(1, 'Miroslav', 'Šedý', '1996-09-05', 3),
(2, 'David', 'Beckham', '1972-11-04', 2),
(3, 'Wayne', 'Rooney', '1975-03-28', 1),
(4, 'Franta', 'Vomáčka', '2005-12-25', 4);

-- --------------------------------------------------------

--
-- Struktura tabulky `vozidla`
--

CREATE TABLE `vozidla` (
  `vuzID` int(11) NOT NULL,
  `vozidlo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `vozidla`
--

INSERT INTO `vozidla` (`vuzID`, `vozidlo`) VALUES
(1, 'Audi TT'),
(2, 'Porsche Boxster'),
(3, 'Ferrari F12 GTO'),
(4, 'Porsche Cayman'),
(5, 'BMW M5');

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `vlastnik`
--
ALTER TABLE `vlastnik`
  ADD PRIMARY KEY (`ID`);

--
-- Klíče pro tabulku `vozidla`
--
ALTER TABLE `vozidla`
  ADD PRIMARY KEY (`vuzID`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `vlastnik`
--
ALTER TABLE `vlastnik`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pro tabulku `vozidla`
--
ALTER TABLE `vozidla`
  MODIFY `vuzID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
