-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 21 Cze 2020, 02:15
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `logindb`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `regi`
--

CREATE TABLE `regi` (
  `id` int(11) NOT NULL,
  `urname` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `regi`
--

INSERT INTO `regi` (`id`, `urname`, `email`, `passwd`, `fname`, `gender`) VALUES
(1, 'dasd', 'madziula@gmail.com', 'www', 'dddd', ''),
(2, 'Ewa', 'ewajanisz99@gmail.com', 'ttt', 'Ewa', ''),
(3, 'klient', 'klient@mail.com', 'xxx', 'prk', ''),
(4, 'qll', 'qll@mail.com', 'asdasd', 'k', ''),
(5, 'test', 'test@test.com', 'xxxx12', 'test', '');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `regi`
--
ALTER TABLE `regi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `regi`
--
ALTER TABLE `regi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
