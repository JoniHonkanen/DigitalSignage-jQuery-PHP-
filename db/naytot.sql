-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13.02.2017 klo 19:23
-- Palvelimen versio: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naytot`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL DEFAULT 'root',
  `password` varchar(30) NOT NULL DEFAULT 'qwerty',
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `admin`
--

INSERT INTO `admin` (`username`, `password`, `id`) VALUES
('root', 'qwerty', 1);

-- --------------------------------------------------------

--
-- Rakenne taululle `naytonnimi`
--

CREATE TABLE `naytonnimi` (
  `nimi` varchar(40) NOT NULL,
  `id` int(255) NOT NULL,
  `kuva` varchar(200) NOT NULL,
  `teksti1` varchar(100) NOT NULL,
  `teksti2` varchar(100) NOT NULL,
  `teksti3` varchar(100) NOT NULL,
  `teksti4` varchar(100) NOT NULL,
  `teksti5` varchar(100) NOT NULL,
  `teksti6` varchar(100) NOT NULL,
  `teksti7` varchar(100) NOT NULL,
  `marginLeft` int(100) NOT NULL DEFAULT '0',
  `marginTop` int(100) NOT NULL DEFAULT '0',
  `vari` varchar(50) NOT NULL DEFAULT 'black',
  `koko` int(50) NOT NULL DEFAULT '5',
  `fontti` varchar(100) NOT NULL DEFAULT 'Arial'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `naytonnimi`
--

INSERT INTO `naytonnimi` (`nimi`, `id`, `kuva`, `teksti1`, `teksti2`, `teksti3`, `teksti4`, `teksti5`, `teksti6`, `teksti7`, `marginLeft`, `marginTop`, `vari`, `koko`, `fontti`) VALUES
('naytto1', 263, 'http://192.168.0.102/digitalSignageIframeTesti/kuvat/Seaside_uusi_eteen.jpg', 'asd', '', 'asd', '', 'asdsda', '', '', 0, 1, 'black', 5, 'Arial'),
('naytto2', 264, 'http://192.168.0.102/digitalSignageIframeTesti/kuvat/idis1.jpg', 'yksi', 'kaksi', 'kolme', 'neljä', 'viisi', 'kuusi', '', 0, 0, 'black', 5, 'Arial'),
('naytto3', 265, 'http://192.168.0.102/digitalSignageIframeTesti/kuvat/Seaside_uusi_oikea.jpg', '', '', '', '', '', '', '', 0, 0, 'black', 5, 'Arial'),
('naytto4', 266, 'http://localhost/digitalSignageIframeTesti/kuvat/dynamo2.jpg', '', '', '', '', '', '', '', 0, 0, 'black', 5, 'Arial');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `naytonnimi`
--
ALTER TABLE `naytonnimi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `naytonnimi`
--
ALTER TABLE `naytonnimi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
