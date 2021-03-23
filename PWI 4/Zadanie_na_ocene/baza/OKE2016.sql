-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 22 Mar 2021, 09:49
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `egzamin`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `czytelnicy`
--

CREATE TABLE `czytelnicy` (
  `IDCzytelnik` int(11) NOT NULL,
  `Nazwisko` text NOT NULL,
  `Imie` text NOT NULL,
  `Adres` text NOT NULL,
  `Miasto` text NOT NULL,
  `KodPocztowy` text NOT NULL,
  `DataZapisania` date NOT NULL,
  `Blokada` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wypożyczenia`
--

CREATE TABLE `wypożyczenia` (
  `EgzemplarzID` int(11) NOT NULL,
  `CzytelnikID` int(11) NOT NULL,
  `DataWypoz` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamówienia`
--

CREATE TABLE `zamówienia` (
  `EgzemplarzID` int(11) NOT NULL,
  `CzytelnikID` int(11) NOT NULL,
  `DataZamowienia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `czytelnicy`
--
ALTER TABLE `czytelnicy`
  ADD PRIMARY KEY (`IDCzytelnik`);

--
-- Indeksy dla tabeli `wypożyczenia`
--
ALTER TABLE `wypożyczenia`
  ADD PRIMARY KEY (`EgzemplarzID`);

--
-- Indeksy dla tabeli `zamówienia`
--
ALTER TABLE `zamówienia`
  ADD PRIMARY KEY (`EgzemplarzID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
