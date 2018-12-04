-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2018 at 02:57 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `awe_sandesh`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tutorials`
--

CREATE TABLE `tbl_tutorials` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` double NOT NULL,
  `teacher` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tutorials`
--

INSERT INTO `tbl_tutorials` (`id`, `name`, `cost`, `teacher`) VALUES
(1, 'PHP', 12000, 'Niraj Adhikari'),
(2, 'PHP', 12000, 'Niraj Adhikari');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `username`, `email`, `password`, `user_type`, `address`) VALUES
(5, 'sandesh', 'anuzbvbmaniac123@gmail.com', 'e09c80c42fda55f9d992e59ca6b3307d', 'Normal', 'Maligaun, KTM'),
(6, 'sandesh', 'sandesh@gmail.com', 'aaaaa', 'Normal', ''),
(7, 'superman2', 'kusumm.sht', '12345', 'Normal', ''),
(8, '', '', '', 'Normal', ''),
(9, 'prabal.bariya2018', 'hekasandyvr46@gmail.com', 'qq', 'Normal', ''),
(10, 'krishna', 'hala@gmail.com', 'Guu', 'Normal', ''),
(11, 'prabal.bariya2018', 'hekasandyvr4@gmail.com', 'Guukha9988', 'Normal', ''),
(12, 'himal.malla2018', 'himal@gmail.com', '12345', 'Normal', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_tutorials`
--
ALTER TABLE `tbl_tutorials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_tutorials`
--
ALTER TABLE `tbl_tutorials`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
