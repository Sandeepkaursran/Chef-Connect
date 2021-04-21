-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2021 at 05:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chefconnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `chefconnects`
--

CREATE TABLE `chefconnects` (
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `age` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `chefs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chefconnects`
--

INSERT INTO `chefconnects` (`f_name`, `l_name`, `email`, `password`, `age`, `gender`, `chefs`) VALUES
('Sandeep', 'Kaur', 'Sandeep@gmail.com', '1234567890', '1995-02-09', 'Female', 'Sous Chef'),
('SUKHJINDER ', 'SINGH ', 'sukhjinder@gmail.com', 'asdfghjkl', '1996-06-12', 'Male', 'Commis Chef(Junior Chef)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chefconnects`
--
ALTER TABLE `chefconnects`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
