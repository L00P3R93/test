-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2019 at 09:54 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `f_name` varchar(200) NOT NULL,
  `l_name` varchar(200) NOT NULL,
  `id` varchar(200) NOT NULL,
  `work_id` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `reset_phrase` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL DEFAULT 'Male',
  `phone` varchar(200) NOT NULL,
  `avatar` varchar(200) NOT NULL DEFAULT 'default.jpg',
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `title`, `f_name`, `l_name`, `id`, `work_id`, `email`, `password`, `reset_phrase`, `gender`, `phone`, `avatar`, `add_date`) VALUES
(3, 'admin', '', '', '', '', '', 'admin@mail.com', '#admin@#1234', '123456789', 'Male', '', 'default.jpg', '2019-07-19 11:40:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `f_name` varchar(200) NOT NULL,
  `l_name` varchar(200) NOT NULL,
  `id` varchar(200) NOT NULL,
  `work_id` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `reset_phrase` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL DEFAULT 'Male',
  `phone` varchar(200) NOT NULL,
  `avatar` varchar(200) NOT NULL DEFAULT 'default.jpg',
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `title`, `f_name`, `l_name`, `id`, `work_id`, `email`, `password`, `reset_phrase`, `gender`, `phone`, `avatar`, `add_date`) VALUES
(4, 'STUDENT', '', 'first', 'last', '12345678', '', 'student@gmail.com', 'Aaa1234', '40153', 'Male', '87654321', 'default.jpg', '2019-08-05 23:09:03'),
(5, 'xxx', '', 'xxx', 'xxx', '313232', '', 'xxx@mail.com', 'Aaa1234', '79208', 'Male', '32323', 'default.jpg', '2019-08-15 21:47:51'),
(6, 'yyy', '', 'yyy', 'yyy', '33434', '', 'yyy@mail.com', 'Aaa1234', '85516', 'Male', '4343', 'default.jpg', '2019-08-28 05:22:47'),
(7, 'kkk', '', 'kkk', 'kkk', '12132232', '', 'kkk@mail.com', 'Aaa1234', '47018', 'Male', '33131313', 'default.jpg', '2019-08-28 05:57:44'),
(8, 'fff', '', 'fff', 'fff', '111', '', 'fff@mail.com', 'Asdf1234', '68681', 'Male', '111', 'default-.jpg', '2019-08-28 07:49:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
