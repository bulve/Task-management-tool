-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 01, 2017 at 06:47 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `role`, `password`) VALUES
(11, 'barankarankis@gmail.com', 'alex', 'admin', 'sha256:1000:47lZ1h5jnhcVHnfXQYvPVeWGGKUCMh6Y:pxKX/mO1pr8q1jxe7RjsSNC9/gtZ/tU3'),
(12, 'apsisaukelis@gmail.com', 'Viktoras', 'subscriber', 'sha256:1000:SJ+CKueD8I7zyqWvfOFTKfppwfg/VEGi:d3NGFctaWEH2TZ+CBe2o45di9ykvZJqU'),
(13, 'gediminas@gmail.com', 'Gediminas', 'subscriber', 'sha256:1000:agqbcnLEACyLhMfHNfTKwA2ebWnreIkS:JQ2U8XN36w/uQ6U9Hche/HeJjaY9yZAb'),
(14, 'atsigaves@one.lt', 'Petras', 'subscriber', 'sha256:1000:VQUpJTZ0uPgMr9pEHgzloA3ncw9WBHHD:NZhttSWUbVV05Vz/4NXKcLeISO650w+E'),
(15, 'alka@uba.com', 'Antanas', 'subscriber', 'sha256:1000:A/kNMX72+s0i03LXFNf8u7bXZzN/n2ky:j2aYk0Rst0yd/7V3KUO479JZ7TgOrPhG'),
(16, 'naujas@gmail.com', 'Antanas', 'subscriber', 'sha256:1000:YUlbNULifZjLwnVu/Fk+CPIQeqDZqBmN:USn4YH2yKS4Dy6Q8wqc4cweqe+wTlONq'),
(17, 'test@123.com', 'testas', 'admin', 'sha256:1000:qs0DPIJ0Q46cYgDbol3vqzXIDea5+1BP:xwzOwz29cNbPntXHbQ/YtnNGZYNZQMVN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
