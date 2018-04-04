-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2018 at 08:01 PM
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
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `AnswerID` int(11) NOT NULL,
  `ExamID` int(11) DEFAULT '0',
  `JobSeekerID` int(11) DEFAULT '0',
  `QuestionID` int(11) DEFAULT '0',
  `Answer` varchar(80) DEFAULT '',
  `Marks` int(11) DEFAULT '0',
  `DateStmp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `JobSeekerID` int(15) NOT NULL,
  `Name` varchar(50) DEFAULT '',
  `Address` varchar(50) DEFAULT '',
  `ten` int(50) DEFAULT '0',
  `twelve` int(50) DEFAULT '0',
  `special` varchar(50) DEFAULT '',
  `degree` varchar(50) DEFAULT '',
  `degree_marks` int(50) DEFAULT '0',
  `pg_marks` int(50) DEFAULT '0',
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
(1, 'Kedar', 'sadffsdaf', 2, 234, 'wer', 'ewr', 43, 434, '', 'sdfsaf', 'adsfsf56', '88771', 21212, NULL, NULL, '1212121', '1dasda', 'asdassd', 'asads', 'asdsad', 'sd', '2018-03-25 11:40:37'),
(2, 'c', 'ccc', 0, 0, '', '', 0, 0, '', 'c', 'c', '1111111111', 11, NULL, NULL, '2018-03-21', 'male', 'kedarkulkarni010@gmail.com', '4a8a08f09d37b73795649038408b5f33', '111111111111', '', '2018-03-26 09:11:23'),
(3, 'c', 'c', 98, 89, 'lkl;', 'PG', 8, 0, '', 'c', 'c', '1111111111', 1, NULL, NULL, '2018-03-13', 'male', 'c@gmail.com', '4a8a08f09d37b73795649038408b5f33', '111111111111', '', '2018-03-26 10:58:43'),
(4, 'kiran', 'git', 121, 12, 'kj', 'saab', 20, 0, '', 'belagavi', 'karnataka', '9900231592', 590008, NULL, NULL, '1996-09-24', 'male', 'akhanchin143@gmail.com', '6b5f9c7352466a8e8d8126ee9294f1ac', '362145985231', '', '2018-03-27 06:15:43'),
(5, '', '', 85, 83, 'CSE', 'UG', 65, 0, '', '', '', '', 0, NULL, NULL, NULL, NULL, '', '', '', '', '2018-03-27 06:42:25'),
(6, 'k', 'k', 85, 80, 'cse', 'UG', 65, 0, '', 'k', 'k', '6523014522', 5, NULL, NULL, '2000-02-02', 'male', 'k@k.k', '8ce4b16b22b58894aa86c421e8759df3', '320145226555', '', '2018-03-27 07:49:07'),
(7, 'Pralhad', 'Zangatihal', 60, 60, 'f', 'PG', 60, 55, '', 'BGM', 'KAR', '9916235510', 591306, NULL, NULL, '1996-07-10', 'male', 'pralhadmagadum322@gmail.com', '0a204769dd249455fd634d1c723e12cf', '123456789456', '', '2018-03-30 09:24:13'),
(8, 'asdff', 'sadfsfsadf', 0, 0, '', '', 0, 0, '', 'sdfsfsf', 'sdffds', '9606367060', 12345678, NULL, NULL, '2018-03-29', 'male', 'akhanchin143@gmail.com', '25d55ad283aa400af464c76d713c07ad', '123456846546', '', '2018-03-31 06:58:35'),
(9, 'Kedar', 'adsfa', 0, 0, '', '', 0, 0, '', 'sasdf', 'sdf', '9036103678', 3221321, NULL, NULL, '2018-03-08', 'male', 'kedarkulkarni010@gmail.com', '25d55ad283aa400af464c76d713c07ad', '123456789632', '', '2018-03-31 08:38:36'),
(10, 'Akash', 'sdfasdfasdfs', 0, 0, '', '', 0, 0, '', 'asdfdfd', 'asdf', '9632677941', 2147483647, NULL, NULL, '2018-04-27', 'male', 'kedar@gmail.com', 'b5f7aa3b182e9f27a7284b7d6eb52939', '231211546546', '', '2018-04-04 08:23:50');

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

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`ExamID`, `JobSeekerID`, `Name`, `EmailID`, `TotalMarks`) VALUES
(1, 7, 'Pralhad', 'pralhadmagadum322@gmail.com', 39);

-- --------------------------------------------------------

--
-- Table structure for table `examiner`
--

CREATE TABLE `examiner` (
  `ExaminerID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Designation` varchar(50) DEFAULT NULL,
  `Organisation` varchar(20) NOT NULL,
  `OraganizationID` int(11) NOT NULL,
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

INSERT INTO `examiner` (`ExaminerID`, `Name`, `Designation`, `Organisation`, `OraganizationID`, `dob`, `gender`, `emailid`, `phone`, `address`, `password`, `token`, `flag`, `conducting_flag`) VALUES
(1, 'a', 'a', '', 0, '2001-01-01', 'male', 'a@a.a', '14563214', 'a', '0cc175b9c0f1b6a831c399e269772661', 'iuj8kga9cqf0pl1', 1, 0),
(2, 'a', 'a', '', 0, '2018-03-26', 'male', 'a@a.a', '20320', 'a', '0cc175b9c0f1b6a831c399e269772661', 'iuj8kga9cqf0pl1', 1, 0),
(3, 'b', 'b', '', 0, '2020-02-02', 'male', 'b@b.b', '2145', 'b', '92eb5ffee6ae2fec3ad71c777531578f', '6y2187dgplwbfon', 1, 0),
(4, 'Kedar', 'Student', '', 0, '1321321', 'male', 'kdjasklfj2s', '32131323', 'ajksjfskfssdkjfkj', '', 'nz4xeaplg7835df', 1, 0),
(5, 'd', 'd', '', 0, '2018-03-14', 'male', 'kedarkulkarni010@gmail.com', '111111', 'dd', '8277e0910d750195b448797616e091ad', '1kbtm9ycvzod76r', 1, 0),
(6, 'k', 'k', '', 0, '2020-02-20', 'male', 'kiran@k.k', '3652365232', 'k', '8ce4b16b22b58894aa86c421e8759df3', 'g5f9irspebly3aw', 0, 0),
(7, 'l', 'l', '', 0, '2002-02-20', 's', 'l@l.l', '20201222', 'l', '2db95e8e1a9267b7a1188556b2013b33', '', 0, 0),
(8, 'r', 'r', '', 0, '2020-02-02', 'male', 'r@r.r', '252123641', 'r', '4b43b0aee35624cd95b910189b3dc231', 'zjxcduheprywab5', 0, 0),
(9, 'thh', 'hhf', 'hfhf', 11, '21996-02-02', 'male', 'd@d.d', '544122552233', 'cvv', '25d55ad283aa400af464c76d713c07ad', '', 0, 0),
(10, 'kedar', 'prof', 'git', 21, '1999-11-11', 'male', 'kkd@git.edu', '67886678', 'gggcg', '25d55ad283aa400af464c76d713c07ad', 'faespwuc5jqtrmb', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `ExamID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT '',
  `Postname` varchar(20) DEFAULT '0',
  `ExamDate` date DEFAULT NULL,
  `FromTime` time(5) NOT NULL,
  `ToTime` time(5) NOT NULL,
  `NoofQuestions` int(11) DEFAULT '0',
  `LastDateToApply` date NOT NULL,
  `TotalMarks` int(11) DEFAULT '0',
  `ExaminerID` varchar(30) DEFAULT '0',
  `DateStmp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `10th` int(100) NOT NULL,
  `12th` int(100) NOT NULL,
  `degree` int(100) NOT NULL,
  `Specialization` int(11) NOT NULL,
  `finalise` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`ExamID`, `Name`, `Postname`, `ExamDate`, `FromTime`, `ToTime`, `NoofQuestions`, `LastDateToApply`, `TotalMarks`, `ExaminerID`, `DateStmp`, `10th`, `12th`, `degree`, `Specialization`, `finalise`) VALUES
(1, 'fasdlkfjkk', 'ABC', '2018-08-31', '08:51:00.00000', '00:02:31.00000', 2, '2018-03-31', 23, '23', '2018-03-25 14:21:14', 0, 0, 0, 0, 0),
(21, 'UPSC', 'IAS', '2018-03-31', '15:30:00.00000', '18:30:00.00000', 20, '0000-00-00', 200, 'kkd@git.edu', '2018-03-31 09:09:34', 60, 60, 60, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`username`, `password`) VALUES
('n', 'n'),
('chetan14049', '991ad04730f2e6625ff994d1ceda859f');

-- --------------------------------------------------------

--
-- Table structure for table `login_examiner`
--

CREATE TABLE `login_examiner` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_examiner`
--

INSERT INTO `login_examiner` (`username`, `password`) VALUES
('shivaji', '25d55ad283aa400af464c76d713c07ad'),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', '8277e0910d750195b448797616e091ad'),
('', '8277e0910d750195b448797616e091ad'),
('kedarkulkarni010@gmail.com', '8277e0910d750195b448797616e091ad'),
('a@a.a', '0cc175b9c0f1b6a831c399e269772661'),
('a@a.a', '0cc175b9c0f1b6a831c399e269772661'),
('', ''),
('', ''),
('b@b.b', '92eb5ffee6ae2fec3ad71c777531578f'),
('kkd@git.edu', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `login_jobseeker`
--

CREATE TABLE `login_jobseeker` (
  `Email` varchar(50) NOT NULL,
  `Password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_jobseeker`
--

INSERT INTO `login_jobseeker` (`Email`, `Password`) VALUES
('akhanchin143@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
('akhanchin143@gmail.com', '6b5f9c7352466a8e8d8126ee9294f1ac'),
('c@gmail.com', '4a8a08f09d37b73795649038408b5f33'),
('k@k.k', '8ce4b16b22b58894aa86c421e8759df3'),
('kedar@gmail.com', 'b5f7aa3b182e9f27a7284b7d6eb52939'),
('pralhadmagadum322@gail.com', '0a204769dd249455fd634d1c723e12cf'),
('pralhadmagadum322@gmail.com', '0a204769dd249455fd634d1c723e12cf');

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

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`QuestionID`, `ExamID`, `Question`, `Opt1`, `Opt2`, `Opt3`, `Opt4`, `Answer`, `Marks`, `Duration`, `DateStmp`) VALUES
(139, 1, 'kiran', '1', '2', '3', '4', '1', 33, 23, '2018-03-30 06:42:26'),
(308, 1, 'Which of the following has most of the bank branches? -', 'Allahabad Bank ', 'HDFC Bank ', 'ICICI Bank ', 'State Bank of India ', '1', 2, 30, '2018-03-31 09:19:53'),
(309, 1, 'National stock exchange is located -', 'New Delhi ', 'Mumbai ', 'Kolkata ', 'Bangalore ', '1', 2, 30, '2018-03-31 09:19:53'),
(310, 1, 'Where is the head quarter of world Bank?', 'America ', 'London ', 'Washington DC ', 'New York ', '2', 3, 30, '2018-03-31 09:19:53'),
(311, 1, 'Where is the head quarter of International monetary fund (IMF)?', 'London ', 'New York ', 'Washington DC ', 'Peris ', '3', 4, 30, '2018-03-31 09:19:53'),
(312, 1, 'Where is the head quarter of world Health organization (WHO)?', 'New York ', 'Jineva ', 'Peris ', 'London ', '4', 2, 30, '2018-03-31 09:19:53'),
(313, 1, 'Who is called the Father of Computer ?', 'Bill Gates ', 'Charles Babbage ', 'Bells Pascal ', 'Josef Jackured ', '1', 2, 30, '2018-03-31 09:19:53'),
(314, 1, 'Super computer which is made by India?', 'T3A ', 'Yanha 3 ', 'PARAM 10000 ', 'J8 ', '2', 2, 30, '2018-03-31 09:19:53'),
(315, 1, 'The first computer which is made by India.', 'Siddharth ', 'PARAM ', 'MEGHA ', 'Cyber ', '3', 2, 30, '2018-03-31 09:19:53'),
(316, 1, 'The first Electronic digital computer of the world is?', 'ANIYAK ', 'SIDDHARTH ', 'PARAM ', 'DEEP ', '1', 2, 30, '2018-03-31 09:19:53'),
(317, 1, 'What language does the computer work?', 'BASIC ', 'COBOL ', 'Machine ', 'FORTRON ', '2', 2, 30, '2018-03-31 09:19:53'),
(318, 1, 'What is national sport of India?', 'Kabaddi ', 'Cricket ', 'Hockey ', 'Chess ', '1', 2, 30, '2018-03-31 09:19:54'),
(319, 1, 'Cricket is started from which of the following country? -', 'Australia ', 'India ', 'England ', 'West Indies ', '3', 2, 30, '2018-03-31 09:19:54'),
(320, 1, 'How much players are there in each team of Cricket?', '2', '11', '12', '10', '4', 2, 30, '2018-03-31 09:19:54'),
(321, 1, 'How many balls are thrown in one over in cricket?', '4', '12', '6', '8', '2', 2, 30, '2018-03-31 09:19:54'),
(322, 1, 'How much players are there in each team of Kabaddi?', '7', '8', '11', '5', '1', 2, 30, '2018-03-31 09:19:54'),
(323, 1, 'A money (at simple interest) amounts to Rs. 1200 in 3 years &amp; to Rs. 1280 in years. The sum is -', 'Rs. 840 ', 'Rs. 960 ', 'Rs. 900 ', 'Rs. 940 ', '1', 2, 30, '2018-03-31 09:19:54'),
(324, 1, 'How much time will it take for an amount of Rs. 1500 to get Rs 225 as interest at 5% per annum of si', '1 Year ', '2 Year ', '4 Years ', '3 Years ', '2', 2, 30, '2018-03-31 09:19:54'),
(325, 1, 'What will be the simple interest on an amount of Rs 2000 in 3 Years at interest 4% Per annum?', 'Rs . 220 ', 'Rs . 240 ', 'Rs . 250 ', 'Rs . 280 ', '3', 2, 30, '2018-03-31 09:19:54'),
(326, 1, '\"At what rate of interest', ' a sum of Rs 15000', ' will be Rs 17625 in 5 Years?\"', '0.03', '0.135', '0.04', 0, 3, '2018-03-31 09:19:54'),
(327, 1, 'A Person takes a loan ofRs 2500 at 4% simple interest. He returns Rs 1500 at the end of 1 Year. What', 'Rs. 1100 ', 'Rs. 1140 ', 'Rs. 1050 ', 'Rs. 1150 ', '4', 2, 30, '2018-03-31 09:19:54'),
(328, 1, '\"In January 2015', ' India has successfully test c', ' India has joined the five cou', ' which are equipped with inter', 'Chandipur (Odisha) ', 'Shri Harikota (Andhra Pradesh) ', 0, 0, '2018-03-31 09:19:54'),
(330, 1, 'When was concluded the 15th Delhi sustainable development convention on climate change', '5-7 February2015 ', '10 –15 February2015 ', '25-30 January2015 ', '20 –25 January2015 ', '4', 2, 30, '2018-03-31 09:19:54'),
(331, 1, 'The mobile handset manufacture company &ldquo;Xiaomi&quot; is from which country?', 'India ', 'China ', 'Japan ', 'Korea ', '4', 2, 30, '2018-03-31 09:19:54');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ExamId` int(11) NOT NULL,
  `JobSeekerID` int(11) NOT NULL,
  `attended` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ExamId`, `JobSeekerID`, `attended`) VALUES
(1, 2, 0),
(1, 4, 1),
(1, 6, 0),
(1, 7, 0);

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
-- Dumping data for table `results`
--

INSERT INTO `results` (`ExamID`, `ExaminerID`, `csv`) VALUES
(0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `snapshot`
--

CREATE TABLE `snapshot` (
  `Id` int(11) NOT NULL,
  `Image` varchar(20000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`AnswerID`),
  ADD UNIQUE KEY `ExamID` (`ExamID`,`JobSeekerID`,`QuestionID`),
  ADD KEY `JobSeekerID` (`JobSeekerID`),
  ADD KEY `QuestionID` (`QuestionID`);

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
  ADD PRIMARY KEY (`ExaminerID`),
  ADD UNIQUE KEY `emailid` (`emailid`,`phone`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`ExamID`);

--
-- Indexes for table `login_jobseeker`
--
ALTER TABLE `login_jobseeker`
  ADD PRIMARY KEY (`Email`,`Password`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`QuestionID`),
  ADD UNIQUE KEY `ExamID` (`ExamID`,`Question`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ExamId`,`JobSeekerID`),
  ADD KEY `JobSeekerID` (`JobSeekerID`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`ExamID`);

--
-- Indexes for table `snapshot`
--
ALTER TABLE `snapshot`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `AnswerID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `JobSeekerID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `examiner`
--
ALTER TABLE `examiner`
  MODIFY `ExaminerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `ExamID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `QuestionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=332;

--
-- AUTO_INCREMENT for table `snapshot`
--
ALTER TABLE `snapshot`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`ExamID`) REFERENCES `exams` (`ExamID`),
  ADD CONSTRAINT `answers_ibfk_2` FOREIGN KEY (`JobSeekerID`) REFERENCES `candidate` (`JobSeekerID`),
  ADD CONSTRAINT `answers_ibfk_3` FOREIGN KEY (`QuestionID`) REFERENCES `questions` (`QuestionID`);

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

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `registration_ibfk_1` FOREIGN KEY (`ExamId`) REFERENCES `exams` (`ExamID`),
  ADD CONSTRAINT `registration_ibfk_2` FOREIGN KEY (`JobSeekerID`) REFERENCES `candidate` (`JobSeekerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
