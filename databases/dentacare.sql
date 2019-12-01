-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2019 at 05:49 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dentacare`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `category`, `email`, `date`, `time`, `image`) VALUES
('0001', 'chrishani', 'dentist', 'chrishaniimalsha@gmail.com', '2019-09-27', '12:00:00', 'images.jpg'),
('Perspiciatis cillum', 'Clark Gallegos', 'Quibusdam alias ut s', 'mipy@mailinator.com', '1993-07-18', '21:10:00', ''),
('Amet duis enim labo', 'Hyatt Jimenez', 'Soluta eu impedit n', 'hini@mailinator.net', '2015-01-19', '06:45:00', ''),
('0056', 'chrusno', 'dwgw', 'wggww@gmail.com', '2019-09-13', '01:58:00', '20nthelp_1495949016.jpg'),
('0003', 'Acton Chan', 'Aliquam eligendi nos', 'jamycu@mailinator.net', '2009-06-19', '21:17:00', ''),
('0006', 'Sawyer Mason', 'Adipisicing recusand', 'nemojy@mailinator.com', '2012-09-05', '23:14:00', 'Screenshot (232).png'),
('0007', 'Liberty Ware', 'Id aut in et vel at ', 'xonehydus@mailinator.com', '1991-03-17', '11:40:00', 'Screenshot (233).png'),
('Facilis eum sit lib', 'Thor Mcgee', 'Voluptates ea adipis', 'keviber@mailinator.net', '1982-03-12', '15:11:00', 'Screenshot (235).png');

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `Name` text NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Age` int(3) NOT NULL,
  `Tele` int(20) NOT NULL,
  `DoctersName` text NOT NULL,
  `ChannelDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`Name`, `Address`, `Age`, `Tele`, `DoctersName`, `ChannelDate`) VALUES
('thehani', 'kadawatha', 25, 763781896, '', '0000-00-00'),
('thehani', 'kadawatha', 25, 763781896, '', '0000-00-00'),
('ruwan', 'Kandy', 25, 1172852825, '', '0000-00-00'),
('', '', 0, 0, '', '0000-00-00'),
('', '', 0, 0, '', '0000-00-00'),
('', '', 0, 0, '', '0000-00-00'),
('', '', 0, 0, '', '0000-00-00'),
('chrishani', 'bothalegama', 23, 717676983, '', '0000-00-00'),
('sisila', 'bothalegama', 56, 713642851, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `last_login` datetime NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `last_login`, `is_deleted`) VALUES
(1, 'Divani', 'Tharuka', 'divani@bestjoblk.com', '1234', '2019-09-05 21:00:27', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
