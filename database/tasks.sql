-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 01, 2017 at 06:48 PM
-- Server version: 10.1.20-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id600071_uzd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `taskID` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `task` text COLLATE utf8_unicode_ci NOT NULL,
  `created` date NOT NULL,
  `deadline` date NOT NULL,
  `taskStatus` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `taskTopic` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`taskID`, `userID`, `task`, `created`, `deadline`, `taskStatus`, `taskTopic`) VALUES
(14, 14, 'Į vieną kartoninę dėžutę telpa trys puodeliai. Pakuotojas užklijuoja dėžutę ir išsiunčia ją į parduotuvę, jei ji pilna. Iš viso reikia supakuoti m puodelių. Parašykite programą, kuri apskaičiuotų, kelios bus pilnos dėžutės ir kiek puodelių liks nesupakuota.', '2017-02-28', '2017-03-22', 'published', 'Puodelių pakavimas.'),
(15, 12, 'Į vieną kartoninę dėžutę telpa trys puodeliai. Pakuotojas užklijuoja dėžutę ir išsiunčia ją į parduotuvę, jei ji pilna. Iš viso reikia supakuoti m puodelių. Parašykite programą, kuri apskaičiuotų, kelios bus pilnos dėžutės ir kiek puodelių liks nesupakuota.', '2017-02-28', '2017-03-04', 'completed', 'Puodeliai'),
(16, 15, 'Parašykite programą, kuri suskaičiuotų, kelis kartus keltui teks kelti per upę k automobilių, jeigu vienu metu jis gali perkelti m automobilių. Keltas kelia tik tada, kai yra pilnas (susidaro m automobilių.) Taip pat išveskite automobilių skaičių, kuriems persikelti per upę nepavyks (jei buvo 11 automobilių, o į keltą telpa 10, tai 10 perkels, o vienas liks neperkeltas).', '2017-02-28', '2017-03-31', 'published', 'Keltas'),
(17, 12, 'Mobilusis telefonas išsimokėtinai. Sukurkite programą, kuri apskaičiuotų, keliais procentais pabrangs išsimokėtinai perkamas mobilusis telefonas. Kiekvieno vėlesnio mėnesio palūkanos litais skaičiuojamos nuo likusios neišmokėtos telefono kainos. Pvz., jei telefono kaina - 600 Lt, o išsimokėjimo laikotarpis - 12 mėn., tada pirmąjį mėnesį palūkanos skaičiuojamos nuo 600 Lt, antrąjį nuo 550 Lt ir t.t. Be to, sudarant išsimokėjimo sutartį, yra skaičiuojamas fiksuotas sutarties mokestis. Pradinių duomenų faile Duomenys.txt įrašyta: telefono pradinė kaina K, mėnesinė palūkanų norma N, išsimokėjimo už telefoną laikotarpis mėnesiais L, sutarties mokestis M.\r\nRezultatų faile Rezultatai.txt reikia pateikti telefono pabrangimo kainą procentais.', '2017-02-28', '2017-03-17', 'completed', 'Nojaus laivas'),
(18, 16, 'Mobilusis telefonas išsimokėtinai. Sukurkite programą, kuri apskaičiuotų, keliais procentais pabrangs išsimokėtinai perkamas mobilusis telefonas. Kiekvieno vėlesnio mėnesio palūkanos litais skaičiuojamos nuo likusios neišmokėtos telefono kainos. Pvz., jei telefono kaina - 600 Lt, o išsimokėjimo laikotarpis - 12 mėn., tada pirmąjį mėnesį palūkanos skaičiuojamos nuo 600 Lt, antrąjį nuo 550 Lt ir t.t. Be to, sudarant išsimokėjimo sutartį, yra skaičiuojamas fiksuotas sutarties mokestis. Pradinių duomenų faile Duomenys.txt įrašyta: telefono pradinė kaina K, mėnesinė palūkanų norma N, išsimokėjimo už telefoną laikotarpis mėnesiais L, sutarties mokestis M.\r\nRezultatų faile Rezultatai.txt reikia pateikti telefono pabrangimo kainą procentais.', '2017-02-28', '2017-03-02', 'completed', 'Atsigavimas'),
(19, 13, 'Mobilusis telefonas išsimokėtinai. Sukurkite programą, kuri apskaičiuotų, keliais procentais pabrangs išsimokėtinai perkamas mobilusis telefonas. Kiekvieno vėlesnio mėnesio palūkanos litais skaičiuojamos nuo likusios neišmokėtos telefono kainos. Pvz., jei telefono kaina - 600 Lt, o išsimokėjimo laikotarpis - 12 mėn., tada pirmąjį mėnesį palūkanos skaičiuojamos nuo 600 Lt, antrąjį nuo 550 Lt ir t.t. Be to, sudarant išsimokėjimo sutartį, yra skaičiuojamas fiksuotas sutarties mokestis. Pradinių duomenų faile Duomenys.txt įrašyta: telefono pradinė kaina K, mėnesinė palūkanų norma N, išsimokėjimo už telefoną laikotarpis mėnesiais L, sutarties mokestis M.\r\nRezultatų faile Rezultatai.txt reikia pateikti telefono pabrangimo kainą procentais.', '2017-02-28', '2017-03-10', 'published', 'Aha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`taskID`),
  ADD KEY `userID` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `taskID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
