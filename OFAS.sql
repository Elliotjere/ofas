-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 14, 2023 at 09:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `OFAS`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `Email`) VALUES
(1, 'admin', 'admin', 'admin@ofas');

-- --------------------------------------------------------

--
-- Table structure for table `Appeal_Result`
--

CREATE TABLE `Appeal_Result` (
  `FormId` int(11) NOT NULL,
  `student_RegNo` int(11) NOT NULL,
  `NameOfStudent` varchar(255) NOT NULL,
  `FormType` varchar(255) DEFAULT NULL,
  `dept` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `retake_semister` varchar(255) NOT NULL,
  `retake_module` varchar(255) NOT NULL,
  `copyofID` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `Appeal_Result`
--

INSERT INTO `Appeal_Result` (`FormId`, `student_RegNo`, `NameOfStudent`, `FormType`, `dept`, `course`, `retake_semister`, `retake_module`, `copyofID`, `status`) VALUES
(5, 1000, 'elliot', 'Appeal', '1', '1', '1', '1', 'FirstSemisterFinalYearResult.pdf', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `Course`
--

CREATE TABLE `Course` (
  `CourseId` int(255) NOT NULL,
  `CourseName` varchar(256) NOT NULL,
  `CourseDuration` int(11) NOT NULL,
  `Department_DeptId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `Course`
--

INSERT INTO `Course` (`CourseId`, `CourseName`, `CourseDuration`, `Department_DeptId`) VALUES
(1, 'IT', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Department`
--

CREATE TABLE `Department` (
  `DeptId` int(11) NOT NULL,
  `DeptName` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `Department`
--

INSERT INTO `Department` (`DeptId`, `DeptName`) VALUES
(1, 'Electronics and Telecommunications'),
(2, 'Electronics and Telecommunications');

-- --------------------------------------------------------

--
-- Table structure for table `Module`
--

CREATE TABLE `Module` (
  `ModuleCode` int(11) NOT NULL,
  `ModuleName` varchar(256) NOT NULL,
  `ModuleCredit` varchar(256) NOT NULL,
  `Department_DeptId` int(11) NOT NULL,
  `Course_CourseId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `Module`
--

INSERT INTO `Module` (`ModuleCode`, `ModuleName`, `ModuleCredit`, `Department_DeptId`, `Course_CourseId`) VALUES
(2, 'project', '10', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `PostPondExam`
--

CREATE TABLE `PostPondExam` (
  `FormId` int(11) NOT NULL,
  `NameOfStudent` varchar(255) NOT NULL,
  `student_RegNo` int(11) NOT NULL,
  `department` varchar(255) NOT NULL,
  `FormType` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `yearOfpostpond` varchar(255) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `semisterOfpostpond` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `PostPondExam`
--

INSERT INTO `PostPondExam` (`FormId`, `NameOfStudent`, `student_RegNo`, `department`, `FormType`, `reason`, `yearOfpostpond`, `attachment`, `semisterOfpostpond`, `course`, `status`) VALUES
(4, 'Elliot Moses Jere', 1000, '2', 'Post pondment', 'kdkfjkljk', '2022', '', '1', '1', 'approved'),
(5, 'Doctor Majo', 1000, '1', 'Post pondment', 'dfadfadf', '2022', '', '1', '1', 'pending'),
(6, 'Elliot Moses kibabi', 1000, '1', 'Post pondment', 'ertdyk', '2022', '', '1', '2', 'approved'),
(7, 'Elliot Moses Jere', 2000, '1', 'Post pondment', 'kdjfjdkljfa', '2022', '', '1', '1', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `Special_Exam`
--

CREATE TABLE `Special_Exam` (
  `FormId` int(11) NOT NULL,
  `NameOfStudent` varchar(255) DEFAULT NULL,
  `FormType` varchar(255) NOT NULL,
  `student_RegNo` int(11) NOT NULL,
  `course` varchar(255) NOT NULL,
  `module` varchar(255) NOT NULL,
  `reasons` varchar(255) NOT NULL,
  `uploaded_file` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `Special_Exam`
--

INSERT INTO `Special_Exam` (`FormId`, `NameOfStudent`, `FormType`, `student_RegNo`, `course`, `module`, `reasons`, `uploaded_file`, `status`) VALUES
(3, 'DITtypingClub', 'Special Exam', 1000, '1', 'Project', 'jkljljkl', '', 'disapproved'),
(4, 'jona', 'Special Exam', 2000, '1', 'Project', 'sorry for missing out the test', '', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `Staff`
--

CREATE TABLE `Staff` (
  `CheqNo` int(11) NOT NULL,
  `Name` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Department_DeptId` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `Staff`
--

INSERT INTO `Staff` (`CheqNo`, `Name`, `Email`, `Department_DeptId`, `password`) VALUES
(2000, 'damas', 'damas@ofas.com', 1, 'Agdwamg1234$'),
(4000, 'Masoud', 'elliotjere28@gmail.com', 1, 'Agdwamg1234$');

-- --------------------------------------------------------

--
-- Table structure for table `Staff_has_Form`
--

CREATE TABLE `Staff_has_Form` (
  `Staff_CheqNo` int(11) NOT NULL,
  `Form_FormId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `RegNo` int(255) NOT NULL,
  `Name` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Course_CourseId` int(11) NOT NULL,
  `Department_DeptId` int(11) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`RegNo`, `Name`, `Email`, `Course_CourseId`, `Department_DeptId`, `password`) VALUES
(1000, 'elliot', 'elliotjere28@gmail.com', 1, 1, 'Agdwamg1234$'),
(2000, 'jona', 'jona@ofas.com', 1, 1, 'Agdwamg1234$');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Appeal_Result`
--
ALTER TABLE `Appeal_Result`
  ADD PRIMARY KEY (`FormId`,`student_RegNo`),
  ADD KEY `student_RegNo` (`student_RegNo`);

--
-- Indexes for table `Course`
--
ALTER TABLE `Course`
  ADD PRIMARY KEY (`CourseId`,`Department_DeptId`),
  ADD KEY `Department_DeptId` (`Department_DeptId`);

--
-- Indexes for table `Department`
--
ALTER TABLE `Department`
  ADD PRIMARY KEY (`DeptId`);

--
-- Indexes for table `Module`
--
ALTER TABLE `Module`
  ADD PRIMARY KEY (`ModuleCode`,`Department_DeptId`,`Course_CourseId`),
  ADD KEY `Department_DeptId` (`Department_DeptId`),
  ADD KEY `Course_CourseId` (`Course_CourseId`);

--
-- Indexes for table `PostPondExam`
--
ALTER TABLE `PostPondExam`
  ADD PRIMARY KEY (`FormId`,`student_RegNo`),
  ADD KEY `student_RegNo` (`student_RegNo`);

--
-- Indexes for table `Special_Exam`
--
ALTER TABLE `Special_Exam`
  ADD PRIMARY KEY (`FormId`,`student_RegNo`),
  ADD KEY `student_RegNo` (`student_RegNo`);

--
-- Indexes for table `Staff`
--
ALTER TABLE `Staff`
  ADD PRIMARY KEY (`CheqNo`,`Department_DeptId`),
  ADD KEY `Department_DeptId` (`Department_DeptId`);

--
-- Indexes for table `Staff_has_Form`
--
ALTER TABLE `Staff_has_Form`
  ADD PRIMARY KEY (`Staff_CheqNo`,`Form_FormId`),
  ADD KEY `Form_FormId` (`Form_FormId`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`RegNo`,`Course_CourseId`,`Department_DeptId`),
  ADD KEY `Course_CourseId` (`Course_CourseId`),
  ADD KEY `Department_DeptId` (`Department_DeptId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Appeal_Result`
--
ALTER TABLE `Appeal_Result`
  MODIFY `FormId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Course`
--
ALTER TABLE `Course`
  MODIFY `CourseId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Department`
--
ALTER TABLE `Department`
  MODIFY `DeptId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Module`
--
ALTER TABLE `Module`
  MODIFY `ModuleCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `PostPondExam`
--
ALTER TABLE `PostPondExam`
  MODIFY `FormId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Special_Exam`
--
ALTER TABLE `Special_Exam`
  MODIFY `FormId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Appeal_Result`
--
ALTER TABLE `Appeal_Result`
  ADD CONSTRAINT `appeal_result_ibfk_1` FOREIGN KEY (`student_RegNo`) REFERENCES `student` (`RegNo`);

--
-- Constraints for table `Course`
--
ALTER TABLE `Course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`Department_DeptId`) REFERENCES `Department` (`DeptId`);

--
-- Constraints for table `Module`
--
ALTER TABLE `Module`
  ADD CONSTRAINT `module_ibfk_1` FOREIGN KEY (`Department_DeptId`) REFERENCES `Department` (`DeptId`),
  ADD CONSTRAINT `module_ibfk_2` FOREIGN KEY (`Course_CourseId`) REFERENCES `Course` (`CourseId`);

--
-- Constraints for table `PostPondExam`
--
ALTER TABLE `PostPondExam`
  ADD CONSTRAINT `postpondexam_ibfk_1` FOREIGN KEY (`student_RegNo`) REFERENCES `student` (`RegNo`);

--
-- Constraints for table `Special_Exam`
--
ALTER TABLE `Special_Exam`
  ADD CONSTRAINT `special_exam_ibfk_1` FOREIGN KEY (`student_RegNo`) REFERENCES `student` (`RegNo`);

--
-- Constraints for table `Staff`
--
ALTER TABLE `Staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`Department_DeptId`) REFERENCES `Department` (`DeptId`);

--
-- Constraints for table `Staff_has_Form`
--
ALTER TABLE `Staff_has_Form`
  ADD CONSTRAINT `staff_has_form_ibfk_1` FOREIGN KEY (`Staff_CheqNo`) REFERENCES `Staff` (`CheqNo`),
  ADD CONSTRAINT `staff_has_form_ibfk_2` FOREIGN KEY (`Form_FormId`) REFERENCES `Special_Exam` (`FormId`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`Course_CourseId`) REFERENCES `Course` (`CourseId`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`Department_DeptId`) REFERENCES `Department` (`DeptId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
