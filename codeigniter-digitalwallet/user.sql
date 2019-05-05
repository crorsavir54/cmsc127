-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 07:50 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci-login-registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_age` int(11) NOT NULL,
  `user_mobile` int(11) NOT NULL,
  `studentnumber` varchar(20) NOT NULL,
  `balance` int(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_age`, `user_mobile`, `studentnumber`, `balance`) VALUES
(1, 'Ehtesham', 'ehtesham@gmail.com', '123', 23, 334443333, '', 0),
(2, 'Ehtesham', 'ehtesham@gmail.com', '123', 23, 2147483647, '', 0),
(3, 'farrukh', 'farrukh@gmail.com', '123', 32, 232342343, '', 0),
(4, 'zaid', 'zaid@gmail.com', '202cb962ac59075b964b07152d234b70', 23, 324234234, '', 0),
(0, 'allein', 'aligbalic@up.edu.ph', 'fa896b79454016b01326deba9220519c', 20, 911, '', 0),
(0, 'asd', 'aligbalic@up', '4297f44b13955235245b2497399d7a93', 20, 123123, '', 0),
(0, 'allein', 'iron@a', '4297f44b13955235245b2497399d7a93', 20, 12, '', 0),
(0, 'kyle', 'kyle@up', '202cb962ac59075b964b07152d234b70', 12, 123, '', 0),
(0, '', 'imongmama@up', '123123', 0, 0, '', 0),
(0, '', 'imongmama@up', '123123', 0, 0, '', 0),
(0, '', '', '202cb962ac59075b964b07152d234b70', 0, 0, '2015-00000', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
