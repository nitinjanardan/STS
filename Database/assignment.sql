-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2017 at 10:06 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_detail`
--

CREATE TABLE `login_detail` (
  `login_id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(20) NOT NULL
) ;

--
-- Dumping data for table `login_detail`
--

INSERT INTO `login_detail` (`login_id`, `password`, `role`) VALUES
('karansingh@gmail.com', 'karan', 'teacher'),
('moondaw@gmail.com', 'moon', 'student'),
('nitin@gmail.com', '123', 'admin'),
('ntini@gmail.com', '123', 'teacher'),
('rajeshtiwari@gmail.com', 'rajesh', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `review_detail`
--

CREATE TABLE `review_detail` (
  `id` varchar(300) NOT NULL,
  `code` varchar(400) NOT NULL,
  `uploaded_by` varchar(400) NOT NULL,
  `teacher_name` varchar(300) NOT NULL,
  `review` varchar(350) NOT NULL
) ;

-- --------------------------------------------------------

--
-- Table structure for table `student_assignment`
--

CREATE TABLE `student_assignment` (
  `a_id` int(30) NOT NULL,
  `assignment_no` varchar(50) NOT NULL,
  `student_name` varchar(70) NOT NULL,
  `submit_date` varchar(50) NOT NULL
) ;

-- --------------------------------------------------------

--
-- Table structure for table `student_detail`
--

CREATE TABLE `student_detail` (
  `student_name` varchar(30) NOT NULL,
  `student_mob` bigint(20) NOT NULL,
  `student_dob` varchar(20) NOT NULL,
  `student_course` varchar(30) NOT NULL,
  `student_addr` varchar(200) NOT NULL,
  `login_id` varchar(40) NOT NULL
) ;

--
-- Dumping data for table `student_detail`
--

INSERT INTO `student_detail` (`student_name`, `student_mob`, `student_dob`, `student_course`, `student_addr`, `login_id`) VALUES
('Moon', 2345566723, '1996-08-15', 'be', 'SMriti Nagar', 'moondaw@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_assignment`
--

CREATE TABLE `teacher_assignment` (
  `a_id` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `last_date` varchar(20) NOT NULL,
  `teacher_name` varchar(30) NOT NULL,
  `upload_date` varchar(30) NOT NULL
) ;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_detail`
--

CREATE TABLE `teacher_detail` (
  `teacher_name` varchar(30) NOT NULL,
  `teacher_mobno` bigint(20) NOT NULL,
  `teacher_dob` varchar(50) NOT NULL,
  `teacher_qualification` varchar(20) NOT NULL,
  `teacher_addr` varchar(3000) NOT NULL,
  `login_id` varchar(30) NOT NULL
) ;

--
-- Dumping data for table `teacher_detail`
--

INSERT INTO `teacher_detail` (`teacher_name`, `teacher_mobno`, `teacher_dob`, `teacher_qualification`, `teacher_addr`, `login_id`) VALUES
('Karan Singh', 5678912035, '1987-08-01', 'phd', 'Maroda sector  ', 'karansingh@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_detail`
--
ALTER TABLE `login_detail`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `review_detail`
--
ALTER TABLE `review_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_assignment`
--
ALTER TABLE `student_assignment`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `student_detail`
--
ALTER TABLE `student_detail`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `teacher_assignment`
--
ALTER TABLE `teacher_assignment`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `teacher_detail`
--
ALTER TABLE `teacher_detail`
  ADD PRIMARY KEY (`login_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
