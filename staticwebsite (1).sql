-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2021 at 01:45 PM
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
-- Database: `staticwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `form_id` int(8) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_mess` text NOT NULL,
  `user_ph` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`form_id`, `user_email`, `user_name`, `user_mess`, `user_ph`) VALUES
(1, 'sourav.works.iem@gmail.com', 'sourav paul', 'hello', 23356099),
(2, 'subham@gmail.com', 'subham', 'hello', 23356099),
(3, 'subhamK@gmail.com', 'subhamK', 'demo', 877750552),
(4, 'test@gmail.com', 'test', 'hi', 8777505),
(5, 'test2@gmail.com', 'test', 'hi', 8777505),
(6, 'test2@gmail.com', 'test', 'hi', 8777505),
(7, 'test2@gmail.com', 'test', 'hi', 8777505),
(8, 'odyseeyconsultancygroup.ceo@gm', 'test', 'hi', 8777505),
(9, 'odyseeyconsultancygroup.ceo@gm', 'test', 'hi', 8777505),
(10, 'test3@gmail.com', 'der', 'hi', 8777505),
(11, 'test3@gmail.com', 'der', 'hi', 8777505),
(12, 'test3@gmail.com', 'der', 'hi', 8777505),
(13, 'wq@gmail.com', 'sunny', 'demo 1', 1234568),
(14, 'test@gmail.com', 'hel', 'lovely', 2147483647),
(15, 'tamal@yahoo.com', 'tamal', 'test 4', 2147483647),
(16, 'haha@gmail.com', 'haha', 'haha haha', 123456789),
(17, 'haha2@gmail.com', 'i am haha', 'hello test', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(8) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `timestamp` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `user_email`, `user_pass`, `timestamp`) VALUES
(2, 'test', '$2y$10$lcgDFyQ5pblM381Dgadpa.6fPLHWqz6tY6EuZxC0jwgstZNrleWgW', '2021-07-03 20:48:19'),
(3, 'admin', '$2y$10$uNPslsU2lIcIuMDzvt3jreigM9QEMCjSMXZVWEetqIoejroEhECu2', '2021-07-03 21:02:42'),
(4, 'haha', '$2y$10$jFJ1InlSDYn8LtKDPuTmRueZA7PT6hiQmgICKDUGN7WFH/PrUe/tK', '2021-07-03 21:07:42'),
(5, 'haha2', '$2y$10$8TGbg/oIMN1DZ727Y0Jby.gg50/2kWfb1krwaVOiEo/g6/dbfnm2.', '2021-07-03 22:02:37'),
(6, 'haha3', '$2y$10$P/rew3.MXiWNsUjFzo5bXOUIhbvoQLXdTcNKHQH7PwkHJEJjYWAay', '2021-07-05 00:21:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `form_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
