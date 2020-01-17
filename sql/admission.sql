-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2020 at 02:15 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `applyleave`
--

CREATE TABLE `applyleave` (
  `name` varchar(50) NOT NULL,
  `leavereason` varchar(100) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applyleave`
--

INSERT INTO `applyleave` (`name`, `leavereason`, `fromdate`, `todate`) VALUES
('amitha', 'headache', '2020-01-11', '2020-01-14');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `facultyid` int(11) NOT NULL,
  `facultyname` varchar(100) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `joiningdate` date NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`facultyid`, `facultyname`, `designation`, `joiningdate`, `qualification`, `gender`, `mobile`, `email`, `batch`, `dob`, `address`, `password`) VALUES
(1, 'amitha', 'Trainer', '2020-01-09', 'mca', 'female', 9876543215, 'amitha@gmail.com', 'jsd2', '2020-01-15', 'trivandrum', 'amitha'),
(2, 'vijith', 'Trainer', '2020-01-08', 'MTech', 'male', 9876543215, 'vijith@gmail.com', 'ui', '2020-01-23', 'kozhikode', 'vijith'),
(3, 'reshma', 'trainer', '2020-01-07', 'mca', 'female', 1234567895, 'reshma@gmail.com', 'jsd1', '2020-01-29', 'trivandtrum', 'reshma');

-- --------------------------------------------------------

--
-- Table structure for table `facultyleave`
--

CREATE TABLE `facultyleave` (
  `facultyid` int(11) NOT NULL,
  `facultyname` varchar(50) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `reason` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultyleave`
--

INSERT INTO `facultyleave` (`facultyid`, `facultyname`, `fromdate`, `todate`, `reason`, `status`) VALUES
(1, 'amitha', '2020-01-07', '2020-01-18', 'exam', 'Approved'),
(2, 'vijith', '2020-01-17', '2020-01-08', 'wedding', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `facultys`
--

CREATE TABLE `facultys` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultys`
--

INSERT INTO `facultys` (`username`, `password`) VALUES
('amitha', 'amitha'),
('vijith', 'vijith');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentid` int(11) NOT NULL,
  `studentname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `admissiondate` date NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentid`, `studentname`, `address`, `dob`, `gender`, `mobile`, `admissiondate`, `qualification`, `batch`, `email`, `password`) VALUES
(100, 'mujeeb', 'kollam', '2020-01-29', 'male', 987654321, '2020-01-06', 'mca', 'jsd2', 'mujeeb@gmail.com', 'mujeeb'),
(101, 'jijo', 'kollam', '2020-01-14', 'male', 987654325, '2020-01-14', 'bca', 'jsd1', 'jijo@gmail.com', 'jijo'),
(103, 'sudhin', 'idukki', '2020-01-21', 'male', 987654321, '2020-01-15', 'mca', 'ed', 'sudhin@gmail.com', 'sudhin'),
(104, 'sijo', 'kottayam', '2020-01-22', 'male', 1234567895, '2020-01-23', 'msc', 'ui', 'sijo@gmaiil.com', 'sijo');

-- --------------------------------------------------------

--
-- Table structure for table `studentattendance`
--

CREATE TABLE `studentattendance` (
  `studentid` int(11) NOT NULL,
  `studentname` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `hour1` varchar(10) NOT NULL,
  `hour2` varchar(10) NOT NULL,
  `hour3` varchar(10) NOT NULL,
  `hour4` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentattendance`
--

INSERT INTO `studentattendance` (`studentid`, `studentname`, `batch`, `date`, `hour1`, `hour2`, `hour3`, `hour4`) VALUES
(100, 'mujeeb', 'jsd2', '2020-01-01', 'p', 'p', 'p', 'p'),
(101, 'jijo', 'jsd1', '2020-01-09', 'p', 'p', 'p', 'p');

-- --------------------------------------------------------

--
-- Table structure for table `studentleave`
--

CREATE TABLE `studentleave` (
  `studentid` int(11) NOT NULL,
  `studentname` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `reason` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentleave`
--

INSERT INTO `studentleave` (`studentid`, `studentname`, `batch`, `fromdate`, `todate`, `reason`, `status`) VALUES
(101, 'jijo', 'jsd1', '2020-01-09', '2020-01-10', 'fever', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `studentmarks`
--

CREATE TABLE `studentmarks` (
  `studentid` int(11) NOT NULL,
  `studentname` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `assessmentno` varchar(10) NOT NULL,
  `sub1` int(11) NOT NULL,
  `sub2` int(11) NOT NULL,
  `sub3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentmarks`
--

INSERT INTO `studentmarks` (`studentid`, `studentname`, `batch`, `assessmentno`, `sub1`, `sub2`, `sub3`) VALUES
(100, 'mujeeb', 'jsd2', '1', 19, 18, 17);

-- --------------------------------------------------------

--
-- Table structure for table `student_attendence`
--

CREATE TABLE `student_attendence` (
  `std_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `hr1status` varchar(50) NOT NULL,
  `hr2status` varchar(50) NOT NULL,
  `hr3status` varchar(50) NOT NULL,
  `hr4status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_attendence`
--

INSERT INTO `student_attendence` (`std_id`, `name`, `date`, `hr1status`, `hr2status`, `hr3status`, `hr4status`) VALUES
(1, 'mujeeb', '2020-01-04', 'p', 'p', 'p', 'p');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`facultyid`);

--
-- Indexes for table `facultyleave`
--
ALTER TABLE `facultyleave`
  ADD PRIMARY KEY (`facultyid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `studentattendance`
--
ALTER TABLE `studentattendance`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `studentleave`
--
ALTER TABLE `studentleave`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `studentmarks`
--
ALTER TABLE `studentmarks`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `student_attendence`
--
ALTER TABLE `student_attendence`
  ADD PRIMARY KEY (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `facultyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `facultyleave`
--
ALTER TABLE `facultyleave`
  MODIFY `facultyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `studentattendance`
--
ALTER TABLE `studentattendance`
  MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `studentleave`
--
ALTER TABLE `studentleave`
  MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `studentmarks`
--
ALTER TABLE `studentmarks`
  MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `student_attendence`
--
ALTER TABLE `student_attendence`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
