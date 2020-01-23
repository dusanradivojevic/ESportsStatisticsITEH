-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2020 at 01:34 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esports_iteh`
--

-- --------------------------------------------------------

--
-- Table structure for table `igrac`
--

CREATE TABLE `igrac` (
  `IgracID` int(11) NOT NULL,
  `Ime` varchar(30) NOT NULL,
  `Prezime` varchar(30) NOT NULL,
  `Nickname` varchar(30) NOT NULL,
  `GodinaRodjenja` int(11) NOT NULL DEFAULT '0',
  `Zarada` int(11) NOT NULL,
  `Igrica` int(11) NOT NULL,
  `ZemljaPorekla` int(11) NOT NULL,
  `Tim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `igrac`
--

INSERT INTO `igrac` (`IgracID`, `Ime`, `Prezime`, `Nickname`, `GodinaRodjenja`, `Zarada`, `Igrica`, `ZemljaPorekla`, `Tim`) VALUES
(1, 'Johan', 'Sundstein', 'N0tail', 1993, 6890591, 1, 0, 3),
(2, 'Jesse', 'Vainikka', 'JerAx', 1992, 6470000, 5, 1, 6),
(3, 'Anathan', 'Pham', 'ana', 1999, 6000000, 3, 2, 7),
(4, 'Sebastien', 'Debs', 'Ceb', 1992, 5489233, 2, 3, 5),
(5, 'Topias', 'Taavitsainen', 'Topson', 1998, 5414446, 6, 1, 4),
(6, 'Kuro', 'Takhasomi', 'KuroKy', 1992, 5128788, 2, 5, 2),
(7, 'Maroun', 'Merhej', 'GH', 1995, 4086426, 1, 6, 8),
(8, 'Sumail', 'Syed Hassan', 'SumaiL', 1999, 3581225, 6, 8, 1),
(9, 'Lasse', 'Urpalainen', 'Matumbaman', 1995, 3561781, 5, 1, 1),
(10, 'Kyle', 'Giersdorf', 'Bugha', 2002, 3062966, 3, 9, 1),
(11, 'Saahil', 'Arora', 'UNiVeRsE', 1989, 3053237, 4, 9, 5),
(12, 'Peter', 'Dager', 'ppd', 1991, 3015831, 1, 9, 7),
(13, 'Lu', 'Yao', 'SomnusM', 1995, 2917865, 5, 10, 4),
(14, 'Xu', 'Linsen', 'fy', 1995, 2826655, 4, 10, 8),
(15, 'Clement', 'Ivanov', 'Puppey', 1990, 2666486, 1, 11, 2),
(16, 'Clinton', 'Loomis', 'Fear', 1988, 2552850, 3, 9, 6),
(17, 'Gustav', 'Magnusson', 's4', 1992, 2505333, 2, 12, 4),
(18, 'Tal', 'Aizik', 'Fly', 1993, 2233896, 2, 13, 3),
(19, 'Amer', 'Al-Barkawi', 'Miracle', 1997, 4692418, 1, 4, 1),
(20, 'Ivan', 'Ivanov', 'MinD_ContRoL', 1995, 4483493, 1, 7, 6);

-- --------------------------------------------------------

--
-- Table structure for table `igrica`
--

CREATE TABLE `igrica` (
  `IgraID` int(11) NOT NULL,
  `NazivIgre` varchar(30) NOT NULL,
  `GodinaNastanka` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `igrica`
--

INSERT INTO `igrica` (`IgraID`, `NazivIgre`, `GodinaNastanka`) VALUES
(1, 'Dota 2', 2013),
(2, 'CS:GO', 2012),
(3, 'Fortinite', 2017),
(4, 'League Of Legends', 2009),
(5, 'StarCraft 2', 2010),
(6, 'PUBG', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `KorisnikID` int(11) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`KorisnikID`, `Email`, `Password`) VALUES
(1, 'r.dusan97@gmail.com', 'pw123'),
(2, 'miskpet@gmail.com', 'pw123');

-- --------------------------------------------------------

--
-- Table structure for table `tim`
--

CREATE TABLE `tim` (
  `TimID` int(11) NOT NULL,
  `NazivTima` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tim`
--

INSERT INTO `tim` (`TimID`, `NazivTima`) VALUES
(1, 'Team Liquid'),
(2, 'OG'),
(3, 'Evil Geniuses'),
(4, 'Fnatic'),
(5, 'Newbee'),
(6, 'Virtus.pro'),
(7, 'Vici Gaming'),
(8, 'Invictus Gaming');

-- --------------------------------------------------------

--
-- Table structure for table `zemlja`
--

CREATE TABLE `zemlja` (
  `ZemljaID` int(11) NOT NULL,
  `Naziv` varchar(50) DEFAULT NULL,
  `SkraceniNaziv` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zemlja`
--

INSERT INTO `zemlja` (`ZemljaID`, `Naziv`, `SkraceniNaziv`) VALUES
(0, 'Danska', 'DAN'),
(1, 'Finska', 'FIN'),
(2, 'Australija', 'AU'),
(3, 'Francuska', 'FR'),
(4, 'Jordan', 'JRD'),
(5, 'Nemacka', 'DE'),
(6, 'Liban', 'LBN'),
(7, 'Bugarska', 'BG'),
(8, 'Pakistan', 'PK'),
(9, 'Sjedinjene Americke Drzave', 'SAD'),
(10, 'Kina', 'CHN'),
(11, 'Estonia', 'EST'),
(12, 'Svedska', 'SWE'),
(13, 'Izrael', 'ISR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `igrac`
--
ALTER TABLE `igrac`
  ADD PRIMARY KEY (`IgracID`),
  ADD KEY `Igrica` (`Igrica`,`ZemljaPorekla`,`Tim`),
  ADD KEY `ZemljaPorekla` (`ZemljaPorekla`),
  ADD KEY `Tim` (`Tim`);

--
-- Indexes for table `igrica`
--
ALTER TABLE `igrica`
  ADD PRIMARY KEY (`IgraID`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`KorisnikID`);

--
-- Indexes for table `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`TimID`);

--
-- Indexes for table `zemlja`
--
ALTER TABLE `zemlja`
  ADD PRIMARY KEY (`ZemljaID`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `igrica`
--
ALTER TABLE `igrica`
  MODIFY `IgraID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tim`
--
ALTER TABLE `tim`
  MODIFY `TimID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `igrac`
--
ALTER TABLE `igrac`
  ADD CONSTRAINT `igrac_ibfk_1` FOREIGN KEY (`ZemljaPorekla`) REFERENCES `zemlja` (`ZemljaID`),
  ADD CONSTRAINT `igrac_ibfk_2` FOREIGN KEY (`Tim`) REFERENCES `tim` (`TimID`),
  ADD CONSTRAINT `igrac_ibfk_3` FOREIGN KEY (`Igrica`) REFERENCES `igrica` (`IgraID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
