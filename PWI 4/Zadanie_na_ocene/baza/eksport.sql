-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 22 Mar 2021, 09:39
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
-- Baza danych: `baz_zad1`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazki`
--

CREATE TABLE `ksiazki` (
  `IDKsiazki` int(10) UNSIGNED NOT NULL,
  `AutorID` int(10) UNSIGNED NOT NULL,
  `Tytul` text DEFAULT NULL,
  `Wydawnictwo` text DEFAULT NULL,
  `RokWydania` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `ksiazki`
--

INSERT INTO `ksiazki` (`IDKsiazki`, `AutorID`, `Tytul`, `Wydawnictwo`, `RokWydania`) VALUES
(1, 1, 'W pustyni i w puszczy', 'Znak', 2014),
(2, 1, 'Quo vadis', 'Greg', 2014),
(3, 2, 'Pan Tadeusz', 'Ossolineum', 2005),
(4, 2, 'Ballady i romanse', 'Zielona Sowa', 2010),
(5, 2, 'Dziady', 'Ossolineum', 2009);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  ADD PRIMARY KEY (`IDKsiazki`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  MODIFY `IDKsiazki` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
