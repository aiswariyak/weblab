-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2021 at 04:03 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `librarydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_details`
--

CREATE TABLE `book_details` (
  `Bookid` int(10) NOT NULL,
  `title` varchar(30) NOT NULL,
  `Author` varchar(30) NOT NULL,
  `publisher` varchar(30) NOT NULL,
  `language` varchar(30) NOT NULL,
  `publish_date` date NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_details`
--

INSERT INTO `book_details` (`Bookid`, `title`, `Author`, `publisher`, `language`, `publish_date`, `status`) VALUES
(2, '1984', 'George Orwell', '-', 'English', '1949-06-08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `issue_book`
--

CREATE TABLE `issue_book` (
  `issueid` int(11) NOT NULL,
  `studid` int(11) NOT NULL,
  `bookid` int(11) NOT NULL,
  `issuedate` date NOT NULL,
  `duedate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issue_book`
--

INSERT INTO `issue_book` (`issueid`, `studid`, `bookid`, `issuedate`, `duedate`) VALUES
(0, 1, 2, '2021-03-13', '2021-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginid` int(10) NOT NULL,
  `studid` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `studid`, `username`, `password`, `status`) VALUES
(3, 1, 'aparna@gmail.co', 'Aparna@123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `studenttbl`
--

CREATE TABLE `studenttbl` (
  `studid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `Admission_no` int(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studenttbl`
--

INSERT INTO `studenttbl` (`studid`, `name`, `Admission_no`, `dob`, `gender`, `phone`, `email`, `dept`, `password`, `status`) VALUES
(1, 'Aparna Raj R', 200727, '1999-09-28', 'female', 2147483647, 'aparna@gmail.com', 'MCA', 'Aparna@123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_details`
--
ALTER TABLE `book_details`
  ADD PRIMARY KEY (`Bookid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `studenttbl`
--
ALTER TABLE `studenttbl`
  ADD PRIMARY KEY (`studid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_details`
--
ALTER TABLE `book_details`
  MODIFY `Bookid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
