-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 08, 2017 at 07:26 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `s_academics`
--

CREATE TABLE `s_academics` (
  `n_lang` varchar(40) NOT NULL,
  `c_institution` varchar(40) NOT NULL,
  `i_contact` varchar(40) NOT NULL,
  `secondary` varchar(40) NOT NULL,
  `o_type` varchar(40) NOT NULL,
  `s_subjects` varchar(40) NOT NULL,
  `-----` double NOT NULL,
  `h_secondary` varchar(40) NOT NULL,
  `h_subjects` varchar(40) NOT NULL,
  `s_total` double NOT NULL,
  `s_obtained` double NOT NULL,
  `h_total` double NOT NULL,
  `h_obtained` double NOT NULL,
  `f_interest` varchar(40) NOT NULL,
  `p_statement` varchar(40) NOT NULL,
  `id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s_personal`
--

CREATE TABLE `s_personal` (
  `id` int(7) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `m_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(8) NOT NULL,
  `e_id` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `s_academics`
--
ALTER TABLE `s_academics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_personal`
--
ALTER TABLE `s_personal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `s_personal`
--
ALTER TABLE `s_personal`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
