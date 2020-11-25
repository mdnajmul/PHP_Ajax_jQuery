-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2020 at 01:13 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jquery_ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_autosave`
--

CREATE TABLE `tbl_autosave` (
  `contentid` int(11) NOT NULL,
  `content` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_autosave`
--

INSERT INTO `tbl_autosave` (`contentid`, `content`, `status`) VALUES
(385, 'Najmul ovi', 'draft');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `content`) VALUES
(3, 'I am Md. Najmul Ovi. I completed my BSc. in CSE from SEU.'),
(4, 'I am Juwel Rana. I completed my BSc. in EEE from SEU.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_searchdata`
--

CREATE TABLE `tbl_searchdata` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_searchdata`
--

INSERT INTO `tbl_searchdata` (`id`, `username`, `name`, `email`) VALUES
(1, 'ovi', 'Md. Najmul Ovi', 'najmul@gmail.com'),
(2, 'rana', 'Rana Hossain', 'rana@gmail.com'),
(3, 'juwel', 'Md. Juwel Rana', 'juwel@gmail.com'),
(4, 'aslam', 'Aslam Shikder', 'aslam@gmail.com'),
(5, 'imran', 'Imran Khan', 'imran@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skill`
--

CREATE TABLE `tbl_skill` (
  `skillid` int(11) NOT NULL,
  `skill` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_skill`
--

INSERT INTO `tbl_skill` (`skillid`, `skill`) VALUES
(1, 'Java'),
(2, 'Php'),
(3, 'JavaScript'),
(4, 'jQuery'),
(5, 'Html');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userid` int(11) NOT NULL,
  `username` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`userid`, `username`) VALUES
(1, 'najmul'),
(2, 'ovi'),
(3, 'rana'),
(4, 'aslam'),
(5, 'juwel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_autosave`
--
ALTER TABLE `tbl_autosave`
  ADD PRIMARY KEY (`contentid`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_searchdata`
--
ALTER TABLE `tbl_searchdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_skill`
--
ALTER TABLE `tbl_skill`
  ADD PRIMARY KEY (`skillid`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_autosave`
--
ALTER TABLE `tbl_autosave`
  MODIFY `contentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=390;
--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_searchdata`
--
ALTER TABLE `tbl_searchdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_skill`
--
ALTER TABLE `tbl_skill`
  MODIFY `skillid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
