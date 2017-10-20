-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2015 at 06:58 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wedjourney`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `password` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`password`, `id`, `name`) VALUES
(12345, 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE IF NOT EXISTS `store` (
  `iname` varchar(225) NOT NULL,
  `share` varchar(222) NOT NULL,
  `id` int(25) NOT NULL,
  `name` varchar(222) NOT NULL,
  `age` varchar(222) NOT NULL,
  `loc` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `password` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `iname` varchar(222) NOT NULL,
  `share` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `name`, `fname`, `password`, `email`, `age`, `sex`, `religion`, `country`, `district`, `profession`, `address`, `iname`, `share`) VALUES
(1, 'zaba', 'hossain', 123, 'zaba@mail.com', 27, 'female', 'Muslim', '18', 'maymansingh', 'Education,Training', 'pallabi', '', ''),
(2, 'zaba', 'hossain', 123, 'zaba@mail.com', 27, 'female', 'Muslim', '18', 'maymansingh', 'Education,Training', 'pallabi', '', ''),
(3, 'oishee', 'samiha', 123, 'oishee@mail.com', 20, 'female', 'Muslim', 'Bangladesh', 'rija', 'Engineering', 'pallabi', '', ''),
(4, 'Tanzila', 'Jamil', 12345, 'jamil@mail.com', 35, 'female', 'Muslim', 'Bangladesh', 'hkjhok', 'BPO, KPO,Customer Support', 'gulsha', '', ''),
(5, 'emi', 'israt', 12345, 'emi@mail.com', 21, 'female', 'Muslim', 'Aruba', 'mohammadpur', 'Education,Training', 'mohammadpur', '', ''),
(6, 'littza', 'moumita', 12345, 'littza@mail.com', 19, 'female', '---Select religion---', 'Anguilla', 'tangial', 'Artists, Animators,Web Designers', 'mirpur,12', '', ''),
(7, 'ja', 'ui', 23, 'ui@mail.com', 31, 'female', 'Muslim', 'Antarctica', 'hjk', 'Artists, Animators,Web Designers', 'kll', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
