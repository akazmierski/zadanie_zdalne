-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 16 Paź 2020, 17:38
-- Wersja serwera: 10.3.22-MariaDB-54+deb10u1
-- Wersja PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `amadeusz_msi`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Delegacja`
--

CREATE TABLE `Delegacja` (
  `lp` tinyint(4) NOT NULL,
  `imie_i_nazwisko` varchar(50) CHARACTER SET utf8 NOT NULL,
  `data_od` date NOT NULL,
  `data_do` date NOT NULL,
  `miejsce_wyjazdu` varchar(25) CHARACTER SET utf8 NOT NULL,
  `miejsce_przyjazdu` varchar(25) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Zrzut danych tabeli `Delegacja`
--

INSERT INTO `Delegacja` (`lp`, `imie_i_nazwisko`, `data_od`, `data_do`, `miejsce_wyjazdu`, `miejsce_przyjazdu`) VALUES
(1, 'Jan Kowalski', '2020-01-15', '2020-01-19', 'Leszno', 'Lublin'),
(2, 'Marian Nowak', '2020-02-20', '2020-02-25', 'Leszno', 'Londyn'),
(3, 'Zbigniew Koralowski', '2020-03-01', '2020-03-10', 'Leszno', 'York'),
(4, 'Anna Litewska', '2020-04-05', '2020-04-15', 'Leszno', 'Wilno'),
(5, 'Delfina Siepal', '2020-02-10', '2020-02-15', 'Leszno', 'Berlin'),
(6, 'Marcin Wachowiak', '2020-07-15', '2020-07-30', 'Leszno', 'Monachium');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kontrahent`
--

CREATE TABLE `kontrahent` (
  `nip` varchar(10) COLLATE utf8_polish_ci NOT NULL,
  `regon` int(16) NOT NULL,
  `nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `czy_platnik` varchar(3) COLLATE utf8_polish_ci NOT NULL,
  `ulica` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `numer_domu` varchar(10) COLLATE utf8_polish_ci NOT NULL,
  `numer_mieszkania` varchar(10) COLLATE utf8_polish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `kontrahent`
--

INSERT INTO `kontrahent` (`nip`, `regon`, `nazwa`, `czy_platnik`, `ulica`, `numer_domu`, `numer_mieszkania`) VALUES
('6541234568', 900300248, 'Alma trend', 'Tak', 'Wielichowska', '25', ''),
('9503249840', 650324990, 'Astra sp. z o.o.', 'Tak', 'Rumiankowa', '5', ''),
('6324506080', 300562789, 'Jan Kowalski', 'Nie', 'Komorowska', '23', '5'),
('7238006940', 600352421, 'Andrzej Stysiak', 'Nie', 'Malwowa', '23', '45'),
('7821086530', 2147483647, 'Auto Serwis Roman Kluska', 'Tak', 'Konarzewo', '25', ''),
('8806503240', 900800300, 'Anna Zuch', 'Nie', 'Kowalewska', '35', '4c'),
('7821058021', 350400600, 'Wulkanizacja Adam Wolny', 'Tak', 'Reknicka', '4', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
