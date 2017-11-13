-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2017 at 07:30 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `Project_title` varchar(50) NOT NULL,
  `Total_amount` int(11) NOT NULL,
  `Primary_contact` varchar(50) NOT NULL,
  `Campus_Affiliation` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Name_of_group` varchar(50) DEFAULT NULL,
  `Advisor` varchar(50) NOT NULL,
  `Advisor_Email` varchar(50) NOT NULL,
  `Advisor_Depart_Organiz` varchar(50) NOT NULL,
  `Advisor_phone` int(11) NOT NULL,
  `Project_description` varchar(500) NOT NULL,
  `Input_Endorsement` varchar(500) NOT NULL,
  `Anticipated_out_impact` varchar(500) NOT NULL,
  `Project_benchmarking` varchar(500) NOT NULL,
  `Accountability` varchar(500) NOT NULL,
  `Cost_savings` varchar(500) NOT NULL,
  `Project_self_sufficiency` varchar(500) NOT NULL,
  `Project_lifespan` varchar(500) NOT NULL,
  `Project_sustainability` varchar(500) NOT NULL,
  `Potential` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Project_title` varchar(50) NOT NULL,
  `Total_amount` int(11) NOT NULL,
  `Primary_contact` varchar(50) NOT NULL,
  `Campus_Affiliation` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Name_of_group` varchar(50) DEFAULT NULL,
  `Advisor` varchar(50) NOT NULL,
  `Advisor_Email` varchar(50) NOT NULL,
  `Advisor_Depart_Organiz` varchar(50) NOT NULL,
  `Advisor_phone` int(11) NOT NULL,
  `Project_description` varchar(500) NOT NULL,
  `Input_Endorsement` varchar(500) NOT NULL,
  `Anticipated_out_impact` varchar(500) NOT NULL,
  `Project_benchmarking` varchar(500) NOT NULL,
  `Accountability` varchar(500) NOT NULL,
  `Cost_savings` varchar(500) NOT NULL,
  `Project_self_sufficiency` varchar(500) NOT NULL,
  `Project_lifespan` varchar(500) NOT NULL,
  `Project_sustainability` varchar(500) NOT NULL,
  `Potential` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `Project_type` varchar(50) NOT NULL,
  `Project_title` varchar(50) NOT NULL,
  `Total_amount` int(11) NOT NULL,
  `Primary_contact` varchar(50) NOT NULL,
  `Campus_Affiliation` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Name_of_group` varchar(50) DEFAULT NULL,
  `Advisor` varchar(50) NOT NULL,
  `Advisor_Email` varchar(50) NOT NULL,
  `Advisor_Depart_Organiz` varchar(50) NOT NULL,
  `Advisor_phone` int(11) NOT NULL,
  `Project_description` varchar(500) NOT NULL,
  `Input_Endorsement` varchar(500) NOT NULL,
  `Anticipated_out_impact` varchar(500) NOT NULL,
  `Project_benchmarking` varchar(500) NOT NULL,
  `Accountability` varchar(500) NOT NULL,
  `Cost_savings` varchar(500) NOT NULL,
  `Project_self_sufficiency` varchar(500) NOT NULL,
  `Project_lifespan` varchar(500) NOT NULL,
  `Project_sustainability` varchar(500) NOT NULL,
  `Potential` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
