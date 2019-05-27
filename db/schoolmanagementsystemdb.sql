-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 22, 2018 at 11:40 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolmanagementsystemdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `hiredate` date NOT NULL,
  `address` varchar(30) NOT NULL,
  `sex` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `phone`, `email`, `dob`, `hiredate`, `address`, `sex`) VALUES
('ad-123-0', 'Prosen', '123', '01822804168', 'prosen@example.com', '1993-11-20', '2016-01-01', 'Dhaka,Cantonment', 'male'),
('ad-123-1', 'Rifat', '123', '01922000000', 'Rifat@gmail.com', '1992-05-12', '2016-04-24', 'Dhaka', 'Male'),
('ad-123-2', 'Rizvi', '123', '01922000012', 'rizvi@gmail.com', '1992-05-12', '2016-04-24', 'Dhaka', 'Male'),
('ad-123-3', 'Barid', '123', '01922012000', 'barid@gmail.com', '1992-05-12', '2016-04-24', 'Dhaka', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `attendedid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `date`, `attendedid`) VALUES
(18, '2016-05-04', 'te-123-1'),
(20, '2016-05-01', 'te-123-1'),
(21, '2016-04-12', 'te-123-1'),
(22, '2016-05-04', 'te-124-1'),
(23, '2016-04-19', 'te-124-1'),
(24, '2016-05-02', 'te-124-1'),
(25, '2016-05-04', 'sta-123-1'),
(26, '2016-05-05', 'sta-123-1'),
(27, '2016-04-04', 'sta-123-1'),
(28, '2016-04-05', 'sta-123-1'),
(32, '2018-02-18', 'te-13242-2016'),
(33, '2018-02-18', 'te-13245-2016'),
(34, '2018-02-18', 'b135/13242/2016'),
(35, '2018-02-18', 'b135/13245/2016  '),
(36, '2018-02-19', 'te-145-12'),
(37, '2018-02-19', 'te-13245-2016'),
(38, '2018-02-19', 'b135/13245/2016    '),
(39, '2018-02-19', 'b135/13242/2016'),
(40, '2018-03-06', 'b135/13245/2016     '),
(41, '2018-03-12', 'sta-12345-78'),
(42, '2018-03-20', 'b135/13245/2016     '),
(43, '2018-03-20', 'b135/13242/2016'),
(44, '2018-03-22', '13245'),
(45, '2018-03-22', 'b135/13245/2016     '),
(46, '2018-03-24', 'b135/13245/2016     '),
(47, '2018-03-24', '13245');

-- --------------------------------------------------------

--
-- Table structure for table `availablecourse`
--

CREATE TABLE `availablecourse` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `classid` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `availablecourse`
--

INSERT INTO `availablecourse` (`id`, `name`, `classid`) VALUES
(1, 'Bangla 1st', '1'),
(2, 'Bangla 1st', '2'),
(3, 'Bangla 1st', '3'),
(4, 'Bangla 1st', '4'),
(5, 'Bangla 1st', '5'),
(6, 'Bangla 1st', '6'),
(7, 'Bangla 1st', '7'),
(8, 'Bangla 1st', '8'),
(9, 'Bangla 1st', '9'),
(10, 'Bangla 1st', '10'),
(11, 'Bangla 2nd', '1'),
(12, 'Bangla 2nd', '2'),
(13, 'Bangla 2nd', '3'),
(14, 'Bangla 2nd', '4'),
(15, 'Bangla 2nd', '5'),
(16, 'Bangla 2nd', '6'),
(17, 'Bangla 2nd', '7'),
(18, 'Bangla 2nd', '8'),
(19, 'Bangla 2nd', '9'),
(20, 'Bangla 2nd', '10'),
(21, 'English 1st', '1'),
(22, 'English 1st', '2'),
(23, 'English 1st', '3'),
(24, 'English 1st', '4'),
(25, 'English 1st', '5'),
(26, 'English 1st', '6'),
(27, 'English 1st', '7'),
(28, 'English 1st', '8'),
(29, 'English 1st', '9'),
(30, 'English 1st', '10'),
(31, 'English 2nd', '1'),
(32, 'English 2nd', '2'),
(33, 'English 2nd', '3'),
(34, 'English 2nd', '4'),
(35, 'English 2nd', '5'),
(36, 'English 2nd', '6'),
(37, 'English 2nd', '7'),
(38, 'English 2nd', '8'),
(39, 'English 2nd', '9'),
(40, 'English 2nd', '10');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `room` varchar(20) NOT NULL,
  `section` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`, `room`, `section`) VALUES
('F2', 'FORM1', 'F1B', 'B'),
('F3', 'FORM1', 'F1C', 'C'),
('F4', 'FORM2', 'F2A', 'A'),
('F5', 'FORM3', 'F3A', 'A'),
('F6', 'FORM4', 'F4A', 'A'),
('FI', 'FORM1', 'F1A', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `teacherid` varchar(20) NOT NULL,
  `studentid` varchar(20) NOT NULL,
  `classid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `teacherid`, `studentid`, `classid`) VALUES
('1', 'Bangla 1st', 'te-124-1', 'st-123-1', '1A'),
('1', 'Bangla 1st', 'te-124-1', 'st-124-1', '1A'),
('', 'kisw', '132', 'b135/13245/2016', '243'),
('', 'eng', '4657', 'b135/13245/2016', '32'),
('', 'math', '324', 'b135/13245/2016', '56'),
('', 'agri', '456', 'b135/13245/2016', '432435'),
('', 'chem', '6789', 'b135/13245/2016', '987'),
('', 'physics', '5678', 'b135/13245/2016', ''),
('', 'business', '35678', 'b135/13245/2016', '56');

-- --------------------------------------------------------

--
-- Table structure for table `examschedule`
--

CREATE TABLE `examschedule` (
  `id` varchar(20) NOT NULL,
  `examdate` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `courseid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `examschedule`
--

INSERT INTO `examschedule` (`id`, `examdate`, `time`, `courseid`) VALUES
('145', '2016-05-06', '2:00-4:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` int(11) NOT NULL,
  `studentid` varchar(20) NOT NULL,
  `courseid` varchar(20) NOT NULL,
  `marks` varchar(125) NOT NULL,
  `grade` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `studentid`, `courseid`, `marks`, `grade`) VALUES
(19, 'b135/13245/2016', 'eng', '78', 'A'),
(20, 'b135/13245/2016', 'math', '60', 'B'),
(21, 'b135/13245/2016', 'bss', '55', 'C'),
(22, 'b135/13245/2016', 'chem', '77', 'A'),
(23, 'b135/13245/2016', 'physics', '20', 'E'),
(24, 'b135/13245/2016', 'kisw', '49', 'D'),
(25, 'b135/13245/2016', 'agri', '78', 'A'),
(27, 'b135/13245/2016', 'comp', '69', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `studentid` varchar(125) NOT NULL,
  `fathername` varchar(20) NOT NULL,
  `mothername` varchar(20) NOT NULL,
  `fatherphone` varchar(13) NOT NULL,
  `motherphone` varchar(13) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `password`, `studentid`, `fathername`, `mothername`, `fatherphone`, `motherphone`, `address`) VALUES
('11598923', '1279', '1279', 'joe', 'agn', '0720955763', '0712096735', '52 Kagio'),
('34319670', '1234', 'b135/13245/2016', 'john', 'sizzy', '0712046734', '0720955764', '45 kagio'),
('pa-123-1', '123', '', 'Mr.A', 'mrs.A', '01711000000', '01711000000', 'unknown'),
('pa-124-1', '123', '', 'Mukles khan', 'morzina akter', '01724242424', '01924242314', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `studentid` varchar(20) NOT NULL,
  `parentid` varchar(125) NOT NULL,
  `payable` varchar(125) NOT NULL,
  `paid` varchar(125) NOT NULL,
  `balance` varchar(125) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `studentid`, `parentid`, `payable`, `paid`, `balance`, `date`) VALUES
(5, 'b135/13245/2016', '34319670', '40000', '2000', '21540', '2018-04-13 18:06:28'),
(6, 'b135/13245/2016', '34319670', '40000', '1200', '21540', '2018-04-13 18:06:28'),
(13, 'b135/13245/2016', '34319670', '40000', '200', '21540', '2018-04-13 18:06:28'),
(14, 'b135/13245/2016', '34319670', '40000', '20', '21540', '2018-04-13 18:06:28'),
(15, 'b135/13245/2016', '34319670', '40000', '20', '21540', '2018-04-13 18:06:28'),
(16, 'b135/13245/2016', '34319670', '40000', '20', '21540', '2018-04-13 18:06:28'),
(18, 'b135/13245/2016', '34319670', '40000', '5000', '21540', '2018-04-13 18:06:28'),
(19, 'b135/13245/2016', '34319670', '40000', '10000', '21540', '2018-04-13 18:06:28');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `dob` date NOT NULL,
  `hiredate` date NOT NULL,
  `address` varchar(30) NOT NULL,
  `salary` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `password`, `phone`, `email`, `sex`, `dob`, `hiredate`, `address`, `salary`) VALUES
('sta-12345-78', 'ken', '1234', '0715723736', 'hafsj@gmail.com', 'Female', '1992-12-12', '2018-02-22', '34', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(20) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `dob` date NOT NULL,
  `addmissiondate` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `parentid` varchar(20) NOT NULL,
  `classid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `password`, `phone`, `email`, `sex`, `dob`, `addmissiondate`, `address`, `parentid`, `classid`) VALUES
('1279', 'george maina', '1279', '0715772720', 'george@gmail,com', 'Male', '1997-04-01', '2018-03-09', '43 kagio', '11598923', 'form4'),
('13245', 'maina', 'maina', '07167727720', 'maina@gmail.com', 'Female', '1997-09-09', '2018-03-13', '54', '34319670', '67'),
('143562', 'wtyewqu', '12334', '0789890098', 'xet@gmail.com', 'Female', '1990-09-08', '2018-02-19', '1234', '34567892', '1234'),
('45678', 'ken', '1234', '0789890098', 'kenny@hotmai.com', 'Female', '1997-04-01', '2018-04-07', '45 point', '34567892', 'form3'),
('b132/23453/2016', 'lewi', '123', '0712345456', 'geor@gmail.com', 'Male', '1998-08-09', '2018-04-13', '56', '34556766', 'form2'),
('b135/13242/2016', 'josee', '1234', '0712888888', 'jose@gmail.com', 'Male', '1998-07-09', '2018-02-07', '45ruirr', '34319670', 'css 121'),
('b135/13245/2016     ', '      george', '1279', '0715772720', 'georgemwas.george@gm', '      M', '1997-04-01', '2018-02-01', '53-kagio', '11598923', 'form4'),
('hunny', 'bae', 'werry', '1278', 'weeryhopper@gmail.co', 'Female', '1997-09-05', '2018-04-07', '45 point', '34319670', '345'),
('wrhtyru', 'xnh', '54678', '0789890098', 'geo@gmail.com', 'Female', '1997-04-01', '2018-04-07', '34 -pwani', '34319670', 'form2');

-- --------------------------------------------------------

--
-- Table structure for table `takencoursebyteacher`
--

CREATE TABLE `takencoursebyteacher` (
  `id` int(11) NOT NULL,
  `courseid` varchar(20) NOT NULL,
  `teacherid` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `takencoursebyteacher`
--

INSERT INTO `takencoursebyteacher` (`id`, `courseid`, `teacherid`) VALUES
(1, '4', 'te-123-1'),
(2, '8', 'te-123-1'),
(3, '1', 'te-124-1'),
(4, '2', 'te-124-1'),
(5, '18', 'te-125-1'),
(6, '19', 'te-125-1'),
(7, '11', 'te-125-1'),
(8, '24', 'te-126-1'),
(9, '23', 'te-126-1'),
(10, '22', 'te-126-1'),
(11, '4', 'te-124-1'),
(12, '5', 'te-123-1'),
(13, '6', 'te-125-1'),
(14, '7', 'te-127-1'),
(15, '9', 'te-127-1'),
(16, '10', 'te-127-1'),
(17, '17', 'te-125-1'),
(18, '16', 'te-125-1'),
(19, '15', 'te-125-1'),
(20, '14', 'te-126-1'),
(21, '13', 'te-126-1'),
(22, '12', 'te-126-1');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `dob` date NOT NULL,
  `hiredate` date NOT NULL,
  `salary` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `password`, `phone`, `email`, `address`, `sex`, `dob`, `hiredate`, `salary`) VALUES
('te-13242-2016', 'mr.serem', '1234', '0716545342', 'serem@gmail.com', '45pokot', 'Male', '1991-09-07', '2018-02-07', 450000),
('te-13245-2016', 'mr.ken', '12345', '0765772720', 'mrken@gmail.com', '53kaggs', 'Male', '1997-07-07', '2018-02-07', 200000),
('te-145-12', 'john', 'kiriamiti', '0789678654', 'kiria@gmail.com', '43 ruai', 'Male', '1998-12-21', '2018-02-18', 45321);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `usertype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `password`, `usertype`) VALUES
('11598923', '1279', 'parent'),
('123', '1234', 'student'),
('1279', '1279', 'student'),
('13245', 'maina', 'student'),
('143562', '12334', 'student'),
('34319670', '1234', 'parent'),
('45678', '1234', 'student'),
('ad-123-1', '123', 'admin'),
('ad-123-3', '123', 'admin'),
('b132/23453/2016', '123', 'student'),
('b135/13242/2016', '1234', 'student'),
('b135/13245/2016', '1279', 'student'),
('hunny', 'werry', 'student'),
('pa-123-1', '123', 'parent'),
('sta-12345-78', '1234', 'staff'),
('te-13242-2016', '1234', 'teacher'),
('te-13245-2016', '12345', 'teacher'),
('te-145-12', 'kiriamiti', 'teacher'),
('wrhtyru', '54678', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `availablecourse`
--
ALTER TABLE `availablecourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `takencoursebyteacher`
--
ALTER TABLE `takencoursebyteacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `availablecourse`
--
ALTER TABLE `availablecourse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `takencoursebyteacher`
--
ALTER TABLE `takencoursebyteacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
