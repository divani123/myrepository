-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2019 at 12:10 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdb`
--

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
(1, 'Divani', 'Tharuka', 'divani@bestjoblk.com', '91dfd9ddb4198affc5c194cd8ce6d338fde470e2', '2019-06-19 21:03:14', 0),
(2, 'Samindi', 'Nawodya', 'samindi@bestjoblk.com', '91dfd9ddb4198affc5c194cd8ce6d338fde470e2', '0000-00-00 00:00:00', 0),
(3, 'Ishani', 'Udara', 'ishani@bestjoblk.com', '91dfd9ddb4198affc5c194cd8ce6d338fde470e2', '0000-00-00 00:00:00', 0),
(4, 'Apsara', 'Kumari', 'apsara@bestjoblk.com', '91dfd9ddb4198affc5c194cd8ce6d338fde470e2', '0000-00-00 00:00:00', 0),
(5, 'Achala', 'Bandara', 'achala@bestjoblk.com', '91dfd9ddb4198affc5c194cd8ce6d338fde470e2', '2019-06-05 09:29:04', 0),
(6, 'Shashini', 'Bhagya', 'shashini@bestjoblk.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '2019-06-09 10:46:47', 0);

--
-- Indexes for dumped tables
--

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
