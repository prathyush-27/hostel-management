-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 26, 2019 at 07:05 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) NOT NULL,
  `psw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `psw`) VALUES
('admin', '11');

-- --------------------------------------------------------

--
-- Table structure for table `amnt`
--

CREATE TABLE `amnt` (
  `id` varchar(50) NOT NULL,
  `hf` varchar(50) NOT NULL,
  `mf` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amnt`
--

INSERT INTO `amnt` (`id`, `hf`, `mf`, `total`, `month`, `date`) VALUES
('1', '1000', '1500', '2500', 'October', '2019-10-31'),
('2', '1000', '1500', '2500', 'September', '2019-10-30'),
('3', '1000', '1500', '2500', 'November', '2019-10-30'),
('4', '1000', '1700', '2700', 'December', '2019-11-29');

-- --------------------------------------------------------

--
-- Table structure for table `hcheck`
--

CREATE TABLE `hcheck` (
  `id` varchar(20) NOT NULL,
  `reg` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `dist` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hcheck`
--

INSERT INTO `hcheck` (`id`, `reg`, `name`, `gender`, `dept`, `dist`, `address`, `status`) VALUES
('1', 'UG1902', 'vinoth', 'male', 'cs', 'trichy', 'trichy', '1'),
('2', 'UG1903', 'vinoth', 'male', 'cs', 'trichy', 'trichy', '1');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `id` varchar(50) NOT NULL,
  `hname` varchar(50) NOT NULL,
  `nor` varchar(50) NOT NULL,
  `rm` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `hfor` varchar(50) NOT NULL,
  `hc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`id`, `hname`, `nor`, `rm`, `phone`, `hfor`, `hc`) VALUES
('1', 'Boys Hostel', '100', '1-100', '9988776611', 'boys', '300'),
('2', 'Rose', '100', '1-100', '9976322005', 'girls', '300'),
('3', 'Umayal', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `paid`
--

CREATE TABLE `paid` (
  `id` varchar(20) NOT NULL,
  `reg` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paid`
--

INSERT INTO `paid` (`id`, `reg`, `total`, `date`, `month`) VALUES
('1', 'UG1901', '2500', '19-10-04', 'October'),
('2', 'UG1901', '2500', '19-10-04', 'September'),
('4', 'UG1902', '2700', '19-11-01', 'December'),
('5', 'UG1901', '2500', '19-11-08', 'September');

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

CREATE TABLE `stud` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `reg` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `cls` varchar(50) NOT NULL,
  `hname` varchar(50) NOT NULL,
  `room` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud`
--

INSERT INTO `stud` (`id`, `name`, `reg`, `gender`, `age`, `email`, `phone`, `dept`, `cls`, `hname`, `room`) VALUES
('1', 'admin', 'UG1901', 'male', '24', 'test@gmail.com', '9976322005', 'cs', '3bca a', 'Boys Hostel	', '12'),
('2', 'susmitha', 'UG1902', 'female', '20', 'test@gmail.com', '9976322005', 'cs', '3bca a', 'Rose', '13');

-- --------------------------------------------------------

--
-- Table structure for table `suggest`
--

CREATE TABLE `suggest` (
  `id` varchar(20) NOT NULL,
  `reg` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `cmpl` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggest`
--

INSERT INTO `suggest` (`id`, `reg`, `name`, `sub`, `cmpl`) VALUES
('1', 'UG1901', 'admin', 'Hostel timing', 'the hostel study hours is not convinent for the all students');
