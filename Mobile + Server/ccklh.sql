-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2018 at 04:10 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccklh`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashboardesu`
--

CREATE TABLE `dashboardesu` (
  `TotalTeachers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dashboardesu`
--

INSERT INTO `dashboardesu` (`TotalTeachers`) VALUES
(2);

-- --------------------------------------------------------

--
-- Table structure for table `leveleasy`
--

CREATE TABLE `leveleasy` (
  `easyID` int(11) NOT NULL,
  `student` varchar(11) DEFAULT NULL,
  `easyScore` int(255) DEFAULT NULL,
  `easyDate` date DEFAULT '0000-00-00',
  `easyElapsed` varchar(255) DEFAULT NULL,
  `teacher` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leveleasy`
--

INSERT INTO `leveleasy` (`easyID`, `student`, `easyScore`, `easyDate`, `easyElapsed`, `teacher`) VALUES
(1, '15310303', 14, '2018-10-04', NULL, '888');

-- --------------------------------------------------------

--
-- Table structure for table `levelhard`
--

CREATE TABLE `levelhard` (
  `hardID` int(11) NOT NULL,
  `student` varchar(11) NOT NULL,
  `hardScore` int(255) NOT NULL,
  `hardDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `hardElapsed` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `levelnormal`
--

CREATE TABLE `levelnormal` (
  `normalID` int(11) NOT NULL,
  `student` varchar(11) NOT NULL,
  `normalScore` int(255) NOT NULL,
  `normalDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `normalElapsed` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `logID` int(11) NOT NULL,
  `logHuman` varchar(255) NOT NULL,
  `logTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `logType` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `studentID` varchar(11) NOT NULL,
  `Sfname` varchar(255) NOT NULL,
  `Smname` varchar(255) DEFAULT NULL,
  `Slname` varchar(255) NOT NULL,
  `Ssufname` varchar(10) DEFAULT NULL,
  `Sdob` date NOT NULL,
  `Sgender` varchar(255) NOT NULL,
  `Sguardian` varchar(255) NOT NULL,
  `Sguardiannum` varchar(11) NOT NULL,
  `SteacherID` varchar(11) NOT NULL,
  `starpoints` int(11) NOT NULL,
  `totalpoints` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentID`, `Sfname`, `Smname`, `Slname`, `Ssufname`, `Sdob`, `Sgender`, `Sguardian`, `Sguardiannum`, `SteacherID`, `starpoints`, `totalpoints`) VALUES
('15310303', 'Maria', 'XB', 'Mila', '', '2018-10-09', '0', 'Richard Echon', '911', '888', 4, 14),
('16330006', 'Crizon', 'Entrolezo', 'Parcia', 'Jr.', '2018-09-01', '1', 'Deadpool', '911', '1893', 106, 272),
('87654321', 'Guest', 'Guest', 'Guest', 'Guest', '1993-11-18', '2', 'Guest', 'Guest', 'Guest', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacherID` varchar(255) NOT NULL,
  `NameOfClass` varchar(255) NOT NULL,
  `Tfname` varchar(255) NOT NULL,
  `Tlname` varchar(255) NOT NULL,
  `Tgender` varchar(1) NOT NULL,
  `Tmobilenum` varchar(11) NOT NULL,
  `Temail` varchar(255) NOT NULL,
  `Tpassword` varchar(255) NOT NULL,
  `Tnumofstud` int(11) NOT NULL,
  `Tnumofonline` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacherID`, `NameOfClass`, `Tfname`, `Tlname`, `Tgender`, `Tmobilenum`, `Temail`, `Tpassword`, `Tnumofstud`, `Tnumofonline`) VALUES
('1893', 'X-Force', 'Dead', 'Pool', '1', '5555', 'x@x.x', 'xxx', 2, 0),
('888', 'St. Columban', 'Gemma', 'Tapado', '0', '888', '8@8.8', '888', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leveleasy`
--
ALTER TABLE `leveleasy`
  ADD PRIMARY KEY (`easyID`),
  ADD KEY `studentID` (`student`),
  ADD KEY `teacher` (`teacher`);

--
-- Indexes for table `levelhard`
--
ALTER TABLE `levelhard`
  ADD PRIMARY KEY (`hardID`),
  ADD KEY `studentID` (`student`),
  ADD KEY `teacher` (`teacher`);

--
-- Indexes for table `levelnormal`
--
ALTER TABLE `levelnormal`
  ADD PRIMARY KEY (`normalID`),
  ADD KEY `studentID` (`student`),
  ADD KEY `teacher` (`teacher`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`logID`),
  ADD KEY `logHuman` (`logHuman`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`studentID`),
  ADD KEY `teacherID` (`SteacherID`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacherID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leveleasy`
--
ALTER TABLE `leveleasy`
  MODIFY `easyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `levelhard`
--
ALTER TABLE `levelhard`
  MODIFY `hardID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `levelnormal`
--
ALTER TABLE `levelnormal`
  MODIFY `normalID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `logID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`logHuman`) REFERENCES `students` (`studentID`),
  ADD CONSTRAINT `logs_ibfk_2` FOREIGN KEY (`logHuman`) REFERENCES `teachers` (`teacherID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
