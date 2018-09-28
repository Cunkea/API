-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2018 at 06:01 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.1.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `adresa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `email`, `username`, `adresa`) VALUES
(1, 'a', 'a', 'aa@aaaa.aaa', 'a', 'a'),
(2, 'Matej', 'Štajduhar', 'mstajduhar55@gmail.com', 'Cunkea', 'Krstova 146'),
(3, 'bla', 'blaa', 'bla@bla.bl', 'bla', 'hgfd 43');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `naslov` varchar(50) NOT NULL,
  `link` varchar(100) DEFAULT NULL,
  `tekst` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `naslov`, `link`, `tekst`) VALUES
(1, 'PRVI PISMENI ISPIT (WEB)', 'https://docs.google.com/spreadsheets/d/1zGnn3PaUpe2ik-cjmE02xGU2mALn7uD6_Ph-haf63a8/edit?usp=sharing', 'Poštovane kolegice i kolege,\r\nrezultati ispita se nalaze na linku\r\n<br>\r\nDatum usmenog ispita biti će naknadno objavljen.\r\nIspiti se mogu pogledati u ponedjeljak od 9 do 11 h.\r\nŽelim Vas samo podsjetiti da položene kontrolne zadaće vrijede samo za\r\nova dva zimska roka, a položeni pismeni ispit samo na tom roku.'),
(2, 'REZULTATI 2. KONTROLNE ZADAĆE (RIKM)', 'https://loomen.carnet.hr/pluginfile.php/313352/mod_forum/attachment/228940/RIKM%20-%20Rezultati%202.', 'U prilogu su rezultati 2. kontrolne zadaće održane 27.01.2016.\r\nKontrolne zadaće se mogu pogledati: 4.01.2016. od 10:00 – 11:00 \r\nUkupni bodovi iz obje zadaće će biti objavljeni nakon uvida u kontrolne\r\nzadaće. \r\n\r\nPrivitak RIKM - Rezultati 2. kolokvija  održanog 27.01.2016.'),
(3, 'ELEKTRIJADA 2016. (TRIBINA)', NULL, 'Pozivamo studente Elektrotehničkog fakulteta na tribinu o nadolazećoj Elektrijadi. \r\nLokacija ovogodišnje Elektrijade je Rimini (Italija) u razdoblju od 12.05.-17.05.2016. \r\nSvi studenti koji su zainteresirani za odlazak na Elektrijadu trebali bi doći na tribinu kako bi čuli sve važne informacije vezane za prijave, pripreme kao i za cijene putovanja. \r\nTribina će se održati 15.02.2016. na Elektrotehničkom fakultetu (Trpimirova) u prostoriji 2-31 u 16 sati.\r\nVidimo se :)'),
(4, 'Github', 'https://Github.com/Cunkea', 'Here is my Github account with all of my projects.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
