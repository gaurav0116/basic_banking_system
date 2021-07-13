-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 02:50 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spark_bank_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(5) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(9) NOT NULL,
  `datetime` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(0, 'Gaurav', 'Ankit', 500, '2021-07-07'),
(0, 'Gaurav', 'Puja', 200, '2021-07-09'),
(0, 'Gaurav', 'Sreya', 100, '2021-07-12'),
(0, 'Krishna', 'Rutvik', 250, '2021-07-12'),
(0, 'Shubham', 'Krishna', 100, '2021-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Gaurav', 'gaurav@gmail.com', 8100),
(2, 'Ankit', 'ankit@gmail.com', 5500),
(3, 'Shubham', 'shubham@gmail.com', 6100),
(4, 'Puja', 'puja@gmail.com', 4700),
(5, 'Sreya', 'sreya@gmail.com', 3500),
(6, 'Rutvik', 'rutvik@gmail.com', 7050),
(7, 'Krishna', 'krishna@gmail.com', 8850),
(8, 'Rohit', 'rohit@gmail.com', 7500),
(9, 'Vivek', 'vivek@gmail.com', 5400),
(10, 'Neha', 'neha@gmail.com', 8500);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
