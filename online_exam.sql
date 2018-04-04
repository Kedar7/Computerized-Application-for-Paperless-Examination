-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2018 at 05:47 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `JobSeekerID` int(15) NOT NULL,
  `Name` varchar(50) DEFAULT '',
  `Address` varchar(50) DEFAULT '',
  `ten` varchar(50) DEFAULT '',
  `twelve` varchar(50) DEFAULT '',
  `special` varchar(50) DEFAULT '',
  `degree` varchar(50) DEFAULT '',
  `degree_marks` varchar(50) DEFAULT '',
  `pg_marks` varchar(50) DEFAULT '',
  `jaf` varchar(50) DEFAULT '',
  `District` varchar(25) DEFAULT '',
  `State` varchar(25) DEFAULT '',
  `Mobile` varchar(15) DEFAULT '',
  `Pincode` int(6) NOT NULL,
  `token` varchar(50) DEFAULT NULL,
  `expire` varchar(123) DEFAULT NULL,
  `DOB` varchar(10) DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `EmailID` varchar(50) DEFAULT '',
  `Password` varchar(80) DEFAULT '',
  `AadharCard` varchar(12) DEFAULT '',
  `AppliedIP` varchar(15) DEFAULT '',
  `DateStmp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`JobSeekerID`, `Name`, `Address`, `ten`, `twelve`, `special`, `degree`, `degree_marks`, `pg_marks`, `jaf`, `District`, `State`, `Mobile`, `Pincode`, `token`, `expire`, `DOB`, `Gender`, `EmailID`, `Password`, `AadharCard`, `AppliedIP`, `DateStmp`) VALUES
(1, 'Kedar', 'sadffsdaf', '2', '234', 'wer', 'ewr', '43', '434', '', 'sdfsaf', 'adsfsf56', '88771', 21212, NULL, NULL, '1212121', '1dasda', 'asdassd', 'asads', 'asdsad', 'sd', '2018-03-25 11:40:37');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `ExamID` int(11) DEFAULT NULL,
  `JobSeekerID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `EmailID` varchar(50) DEFAULT NULL,
  `TotalMarks` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `examiner`
--

CREATE TABLE `examiner` (
  `Name` varchar(50) DEFAULT NULL,
  `Designation` varchar(50) DEFAULT NULL,
  `Organisation` varchar(50) NOT NULL,
  `OrganisationID` int(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `emailid` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `password` varchar(80) DEFAULT NULL,
  `token` varchar(50) NOT NULL,
  `flag` int(1) NOT NULL,
  `conducting_flag` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examiner`
--

INSERT INTO `examiner` (`Name`, `Designation`, `Organisation`, `OrganisationID`, `dob`, `gender`, `emailid`, `phone`, `address`, `password`, `token`, `flag`, `conducting_flag`) VALUES
('Kedar', 'Student', 'GIT', 123, '1321321', 'male', 'kdjasklfj2s', '32131323', 'ajksjfskfssdkjfkj', '', 'wcd3rhpkfmj8z5t', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `ExamID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT '',
  `Postname` varchar(20) DEFAULT '0',
  `ExamDate` date DEFAULT NULL,
  `FromTime` varchar(5) DEFAULT '',
  `ToTime` varchar(5) DEFAULT '',
  `NoofQuestions` int(11) DEFAULT '0',
  `TotalMarks` int(11) DEFAULT '0',
  `ExaminerID` int(11) DEFAULT '0',
  `DateStmp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `10th` int(100) NOT NULL,
  `12th` int(100) NOT NULL,
  `degree` int(100) NOT NULL,
  `Specialization` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`ExamID`, `Name`, `Postname`, `ExamDate`, `FromTime`, `ToTime`, `NoofQuestions`, `TotalMarks`, `ExaminerID`, `DateStmp`, `10th`, `12th`, `degree`, `Specialization`) VALUES
(1, 'fasdlkfjkk', '0', '2018-03-01', 'sdf', '231', 2, 23, 23, '2018-03-25 14:21:14', 23, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `QuestionID` int(11) NOT NULL,
  `ExamID` int(11) DEFAULT '0',
  `Question` varchar(100) DEFAULT '',
  `Opt1` varchar(30) DEFAULT '',
  `Opt2` varchar(30) DEFAULT '',
  `Opt3` varchar(30) DEFAULT '',
  `Opt4` varchar(30) DEFAULT '',
  `Answer` varchar(80) DEFAULT '',
  `Marks` int(11) DEFAULT '0',
  `Duration` int(11) DEFAULT '0',
  `DateStmp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `ExamID` int(11) NOT NULL,
  `ExaminerID` int(11) DEFAULT '0',
  `csv` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`JobSeekerID`),
  ADD UNIQUE KEY `EmailID` (`EmailID`,`AadharCard`,`Mobile`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`JobSeekerID`),
  ADD KEY `ExamID` (`ExamID`);

--
-- Indexes for table `examiner`
--
ALTER TABLE `examiner`
  ADD PRIMARY KEY (`Organisation`,`OrganisationID`),
  ADD UNIQUE KEY `emailid` (`emailid`,`phone`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`ExamID`),
  ADD UNIQUE KEY `Name` (`Name`,`ExamDate`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`QuestionID`),
  ADD UNIQUE KEY `ExamID` (`ExamID`,`Question`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`ExamID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `JobSeekerID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `ExamID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `QuestionID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `data_ibfk_1` FOREIGN KEY (`JobSeekerID`) REFERENCES `candidate` (`JobSeekerID`),
  ADD CONSTRAINT `data_ibfk_2` FOREIGN KEY (`ExamID`) REFERENCES `exams` (`ExamID`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`ExamID`) REFERENCES `exams` (`ExamID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
