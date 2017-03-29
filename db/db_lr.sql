-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2017 at 11:54 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lr`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `ID` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `user` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`ID`, `name`, `user`, `email`, `password`) VALUES
(1, 'Abbas Uddin', 'abbas', 'abbas@gmail.com', '123456789'),
(2, 'Sarder Mohin', 'mohin', 'mohin@gmail.com', ''),
(3, 'Fahad ibn sayed', 'fahad', 'fahad@gmail.com', ''),
(4, 'Ibrahim Khalil', 'ibrahim', 'ibrahim@gmail.com', ''),
(5, 'kalam min', 'kalam', 'kalam@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'Sourov das', 'sourov', 'sourov@ymail.com', ''),
(7, 'Sourov das', 'sourov', 'mohinaa@gmail.com', ''),
(8, 'hell', 'sourov', 'souroferv@ymail.com', ''),
(9, 'Sourov das', 'sourov', 'sourosadaSDv@ymail.com', ''),
(10, 'Sourov das', 'mohin', '', 'sourfwefrweov@ymail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
