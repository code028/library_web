-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 10:39 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteka`
--

-- --------------------------------------------------------

--
-- Table structure for table `administratori`
--

CREATE TABLE `administratori` (
  `id` int(13) NOT NULL,
  `korisnik_id` int(13) NOT NULL,
  `korisnik_username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administratori`
--

INSERT INTO `administratori` (`id`, `korisnik_id`, `korisnik_username`) VALUES
(1, 1, 'nemanja202');

-- --------------------------------------------------------

--
-- Table structure for table `knjige`
--

CREATE TABLE `knjige` (
  `id` int(13) NOT NULL,
  `naziv` varchar(255) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `zanr` varchar(50) NOT NULL,
  `godina_izdanja` year(4) NOT NULL,
  `broj_primeraka` int(13) NOT NULL,
  `cena` int(13) NOT NULL,
  `rating` varchar(5) NOT NULL DEFAULT '2.0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `knjige`
--

INSERT INTO `knjige` (`id`, `naziv`, `autor`, `zanr`, `godina_izdanja`, `broj_primeraka`, `cena`, `rating`) VALUES
(1, 'Kako popraviti juga', 'Simel', 'nesvrstan', 2023, 15, 20, '4.0'),
(2, 'Svet jednoroga i vila', 'Jovan', 'fikcija', 2023, 20, 15, '4.0'),
(3, 'Cucemo se / Vazi', 'Filip', 'nesvrstan', 2022, 26, 50, '5.0'),
(4, 'Php prirucnik', 'nepoznat', 'Horor', 2023, 10, 3, '1.0'),
(5, 'Gde su mi BAZE?', 'Damjana', 'drama', 2023, 2, 100, '2.0'),
(6, 'Kiselina bazdi?', 'Gosin Raka', 'naucni', 2010, 61, 10, '5.0'),
(7, 'I / Mrka Kapa', 'Gosin poznati', 'smesan', 2023, 25, 1, '5.0'),
(8, 'Kude si bre cicino?', 'Cukarici', 'komedija', 2015, 120, 5, '4.0');

-- --------------------------------------------------------

--
-- Table structure for table `narucene_knjige`
--

CREATE TABLE `narucene_knjige` (
  `id` int(13) NOT NULL,
  `korisnik_id` int(13) NOT NULL,
  `knjiga_id` int(13) NOT NULL,
  `day_start` date NOT NULL,
  `day_end` date NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'salje se'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(13) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pristupio` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `email`, `pristupio`) VALUES
(1, 'nemanja@gmail.com', '2023-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(13) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `regDate` date NOT NULL,
  `lastLog` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `kredit` int(5) NOT NULL DEFAULT 150,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `username`, `birthday`, `regDate`, `lastLog`, `email`, `password`, `kredit`, `status`) VALUES
(1, 'Nemanja', 'Lazarevic', 'nemanja202', '2001-07-25', '2023-06-12', '2023-06-12', 'nemanja@gmail.com', 'ed2b1f468c5f915f3f1cf75d7068baae', 100, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administratori`
--
ALTER TABLE `administratori`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Mod_User_id` (`korisnik_id`),
  ADD KEY `FK_Mod_User_name` (`korisnik_username`);

--
-- Indexes for table `knjige`
--
ALTER TABLE `knjige`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `narucene_knjige`
--
ALTER TABLE `narucene_knjige`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_knjige_korisnik_id` (`knjiga_id`),
  ADD KEY `fk_korisnici_korisnik_id` (`korisnik_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administratori`
--
ALTER TABLE `administratori`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `knjige`
--
ALTER TABLE `knjige`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `narucene_knjige`
--
ALTER TABLE `narucene_knjige`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administratori`
--
ALTER TABLE `administratori`
  ADD CONSTRAINT `FK_Mod_User_id` FOREIGN KEY (`korisnik_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Mod_User_name` FOREIGN KEY (`korisnik_username`) REFERENCES `users` (`username`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `narucene_knjige`
--
ALTER TABLE `narucene_knjige`
  ADD CONSTRAINT `fk_knjige_korisnik_id` FOREIGN KEY (`knjiga_id`) REFERENCES `knjige` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_korisnici_korisnik_id` FOREIGN KEY (`korisnik_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
