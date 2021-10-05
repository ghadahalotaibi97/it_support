-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05 أكتوبر 2021 الساعة 21:57
-- إصدار الخادم: 5.7.26
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it_support`
--

-- --------------------------------------------------------

--
-- بنية الجدول `ask`
--

CREATE TABLE `ask` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `question` text NOT NULL,
  `answer` varchar(1000) NOT NULL DEFAULT 'Waiting',
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `ask`
--

INSERT INTO `ask` (`id`, `firstname`, `email`, `question`, `answer`, `status`) VALUES
(26, 'ghadah', 'ghadah@gmail.com', 'Question1............................', 'Waiting', 0),
(27, 'ghadah', 'ghadah@gmail.com', 'Question2...............', 'Waiting', 0);

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(9) NOT NULL,
  `status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `firstname`, `email`, `password`, `status`) VALUES
(1, 'ghadah', 'ghadah@gmail.com', '123456Gm', 'user'),
(2, 'noor', 'noor@gmail.com', '123456Gm', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ask`
--
ALTER TABLE `ask`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ask`
--
ALTER TABLE `ask`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
