-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2019 at 09:37 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koolitused`
--

-- --------------------------------------------------------

--
-- Table structure for table `kasutaja`
--

CREATE TABLE `kasutaja` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nimi` varchar(50) COLLATE utf8_bin NOT NULL,
  `parool` varchar(50) COLLATE utf8_bin NOT NULL,
  `status` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `kasutaja`
--

INSERT INTO `kasutaja` (`id`, `nimi`, `parool`, `status`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'user', 'user', 'user'),
(3, 'test', 'test', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `kategooria`
--

CREATE TABLE `kategooria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nimetus` varchar(50) COLLATE utf8_bin NOT NULL,
  `Kirjeldus` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `kategooria`
--

INSERT INTO `kategooria` (`id`, `Nimetus`, `Kirjeldus`) VALUES
(1, 'Tasuta koolitused', 'Ida-Virumaa Kutsehariduskeskus osaleb Haridus- ja Teadusministeeriumi programmis ï¿½Tï¿½iskasvanuhariduse edendamine ja ï¿½ppimisvï¿½imaluste avardamineï¿½, mille raames on vï¿½imalik riikliku koolitustellimuse (RKT) kohtadele ï¿½ppima asuda.'),
(2, 'Tasulised koolitused', 'Ida-Virumaa Kutsehariduskeskus pakub täiskasvanute koolitust sellistel suundadel nagu elektrotehnika ja energeetika, arvutikasutus, teenindus, äri, mehaanika ja metallitöö, majutamine ja toitlustamine, kaevandamine ja rikastamine, keemia ja protsessitehno'),
(3, 'Huvialakoolitused', 'Huvialakoolitusel on inimesel võimalik õppida täpselt seda, mille vastu ta huvi tunneb ja seeläbi arendada ennast kui isiksust ja omandada eluks vajalikke teadmisi ja oskusi. Õpe toimub eesti ja vene keeles.'),
(10, 'ÐÐ¾Ð²Ð°Ñ ÐºÐ°Ñ‚ÐµÐ³Ð¾Ñ€Ð¸Ñ 2', 'Ñ€ÑƒÑÑÐºÐ¸Ð¹ Ñ‚ÐµÐºÑÑ‚');

-- --------------------------------------------------------

--
-- Table structure for table `kursus`
--

CREATE TABLE `kursus` (
  `id` int(11) NOT NULL,
  `Nimetus` varchar(50) COLLATE utf8_bin NOT NULL,
  `kategoriaID` int(11) NOT NULL,
  `Hind` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `kursus`
--

INSERT INTO `kursus` (`id`, `Nimetus`, `kategoriaID`, `Hind`) VALUES
(1, 'Raamatupidamine', 1, 0),
(2, 'Raamatupidamine 2', 2, 10),
(3, 'Juuksur', 3, 100);

-- --------------------------------------------------------

--
-- Table structure for table `registratsioon`
--

CREATE TABLE `registratsioon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coursID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `registratsioon`
--

INSERT INTO `registratsioon` (`id`, `coursID`, `userID`, `data`) VALUES
(1, 1, 2, '2019-11-01'),
(2, 3, 3, '2019-11-01'),
(4, 1, 3, '2019-11-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kasutaja`
--
ALTER TABLE `kasutaja`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `kategooria`
--
ALTER TABLE `kategooria`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `kursus`
--
ALTER TABLE `kursus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategoriaID` (`kategoriaID`);

--
-- Indexes for table `registratsioon`
--
ALTER TABLE `registratsioon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kasutaja`
--
ALTER TABLE `kasutaja`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategooria`
--
ALTER TABLE `kategooria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `registratsioon`
--
ALTER TABLE `registratsioon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
