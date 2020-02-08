-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2020 at 09:40 PM
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
-- Database: `9jabukadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `9jabukatbl`
--

CREATE TABLE `9jabukatbl` (
  `id` int(11) NOT NULL,
  `restaurant` varchar(100) NOT NULL,
  `meals` varchar(500) NOT NULL,
  `address` varchar(300) NOT NULL,
  `website` varchar(50) NOT NULL,
  `keyword` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `9jabukatbl`
--

INSERT INTO `9jabukatbl` (`id`, `restaurant`, `meals`, `address`, `website`, `keyword`) VALUES
(1, 'Charles', 'Egusi,vegetable,jollof,yam', 'Plot 272 kosini street,warri,delta state. Nigeria', 'charles.com', 'egusi,warri,nigeria,delta,vegetable,beans,yam,banga'),
(2, 'Mags kitchen', 'Egusi,vegetable,jollof,yam, Ewedu, Pepper soup, okra soup, fried rice, ', 'Plot 272 kosini street,Lekki,lagos state. Nigeria', '', 'Lekki , Lagos, fried rice, Ewedu, okra'),
(3, 'The Lagoon', 'Rice , egusi , banga soup , beans , spaghetti', '10 Ozumba mbadiwe street , Victoria Island ,Lagos . Nigeria', '', 'Victoria Island , vi, spaghetti , banga , egusi'),
(4, 'Oga sunny', 'Ewedu , jollof rice , owo soup , banga soup ,', 'Airport road , warri  . Beside D-range night club . delta state,', '', 'Airport road, warri , ewedu , owo, '),
(5, 'Mega Chicken', 'Rice , Chinese , snacks, ice cream , chicken , ', 'Festac , Lagos state . Nigeria ', '', 'Festac , snacks , chinese');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `9jabukatbl`
--
ALTER TABLE `9jabukatbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `9jabukatbl`
--
ALTER TABLE `9jabukatbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
