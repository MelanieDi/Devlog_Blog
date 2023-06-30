-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 29, 2023 at 12:59 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `Articles`
--

CREATE TABLE `Articles` (
  `ID` int(11) NOT NULL,
  `Startdate` datetime NOT NULL,
  `Enddate` datetime NOT NULL,
  `Text` varchar(45) NOT NULL,
  `Importance` int(11) NOT NULL DEFAULT '0',
  `Title` varchar(45) NOT NULL,
  `Author_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Articles`
--

INSERT INTO `Articles` (`ID`, `Startdate`, `Enddate`, `Text`, `Importance`, `Title`, `Author_ID`) VALUES
(1, '2023-06-28 11:56:49', '2023-09-01 00:00:00', 'Sophie championne olympique de Biathlon', 0, 'Entraînez vous au sport avec Sophie !', 1),
(2, '2023-06-28 11:58:15', '2023-08-01 00:00:00', 'Pratiquez le biathlon dans votre région', 1, 'Faites du sport le weekend ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `Articles_Category`
--

CREATE TABLE `Articles_Category` (
  `Articles_ID` int(11) NOT NULL,
  `Category_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Author`
--

CREATE TABLE `Author` (
  `ID` int(11) NOT NULL,
  `Lastname` varchar(45) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Pseudo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Author`
--

INSERT INTO `Author` (`ID`, `Lastname`, `Name`, `Pseudo`) VALUES
(1, 'Lolo', 'Mateo', 'Matéo'),
(2, 'Lala', 'Valentine', 'Valentine'),
(3, 'Lili', 'Lala', 'Lala'),
(4, 'Di Ciccio Dorier', 'Melanie', 'Mel'),
(5, 'Wacquet', 'Victor', 'Vico');

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE `Category` (
  `ID` int(11) NOT NULL,
  `Category articles` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`ID`, `Category articles`) VALUES
(1, 'Loisirs');

-- --------------------------------------------------------

--
-- Table structure for table `Comments`
--

CREATE TABLE `Comments` (
  `ID` int(11) NOT NULL,
  `Commentaires` varchar(45) NOT NULL,
  `Date comments` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Author_ID` int(11) NOT NULL,
  `Articles_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Comments`
--

INSERT INTO `Comments` (`ID`, `Commentaires`, `Date comments`, `Author_ID`, `Articles_ID`) VALUES
(1, '\"Bravo\" Sophie', '2023-06-28 12:02:00', 1, 1),
(2, 'Sans avis', '2023-06-28 12:02:16', 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Articles`
--
ALTER TABLE `Articles`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_Articles_Author1_idx` (`Author_ID`);

--
-- Indexes for table `Articles_Category`
--
ALTER TABLE `Articles_Category`
  ADD PRIMARY KEY (`Articles_ID`,`Category_ID`),
  ADD KEY `fk_Articles_has_Category_Category1_idx` (`Category_ID`),
  ADD KEY `fk_Articles_has_Category_Articles1_idx` (`Articles_ID`);

--
-- Indexes for table `Author`
--
ALTER TABLE `Author`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Pseudo_UNIQUE` (`Pseudo`);

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Comments`
--
ALTER TABLE `Comments`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_Comments_Author_idx` (`Author_ID`),
  ADD KEY `fk_Comments_Articles1_idx` (`Articles_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Articles`
--
ALTER TABLE `Articles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Articles_Category`
--
ALTER TABLE `Articles_Category`
  MODIFY `Articles_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Author`
--
ALTER TABLE `Author`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Category`
--
ALTER TABLE `Category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Comments`
--
ALTER TABLE `Comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Articles`
--
ALTER TABLE `Articles`
  ADD CONSTRAINT `fk_Articles_Author1` FOREIGN KEY (`Author_ID`) REFERENCES `Author` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Articles_Category`
--
ALTER TABLE `Articles_Category`
  ADD CONSTRAINT `fk_Articles_has_Category_Articles1` FOREIGN KEY (`Articles_ID`) REFERENCES `Articles` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Articles_has_Category_Category1` FOREIGN KEY (`Category_ID`) REFERENCES `Category` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Comments`
--
ALTER TABLE `Comments`
  ADD CONSTRAINT `fk_Comments_Articles1` FOREIGN KEY (`Articles_ID`) REFERENCES `Articles` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Comments_Author` FOREIGN KEY (`Author_ID`) REFERENCES `Author` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
