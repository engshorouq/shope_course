-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2016 at 08:12 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
`aid` int(11) NOT NULL,
  `username` varchar(400) NOT NULL,
  `email` varchar(400) NOT NULL,
  `password` varchar(400) NOT NULL,
  `salt` varchar(9000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`aid`, `username`, `email`, `password`, `salt`) VALUES
(1, 'inass', 'inass@gmail.com', '1234', ''),
(2, 'anas', 'soso.kindd@hotmail.com', '9199789', ''),
(3, 'inas', 'fff', 'salt76c043c3ae91205bc489965a7676d2f12638b3b797ab69ef0ab09a5837958cc1', ''),
(4, 'inas', 'fff', 'salt058d5d43bf485bf78dda1ed4eaf8b78e3106f3c6364c625ead2cc3aeb1908237', ''),
(5, 'inas', 'ff', 'salt95af88b45680c35368c70b442cfff50b9c0c684d5f90e522a6508127dc53f3c5', ''),
(6, 'dd', 'ggg', 'e5bf74f3bf2a9301f61166b8a6ea016fffd7a19aeed0660884a0b9d6000a726a', '56e'),
(7, 'amal', 'iii', '39241e598ef0e32fc82f7111c2476a8323d5d64d4b16033b6ba351af6afe8c69', '56e'),
(8, 'anos', 'inas', '39241e598ef0e32fc82f7111c2476a8323d5d64d4b16033b6ba351af6afe8c69', '56e'),
(9, 'anoos', 'anoos', '39241e598ef0e32fc82f7111c2476a8323d5d64d4b16033b6ba351af6afe8c69', '56e'),
(10, 'anoos', 'anoos', '0a2178edf8e1d9bb850f5b6c2f73db83f4f2b5a239fe16fba06927d990d029cd', '56e'),
(11, 'inass', 'inass', 'e5186673c3d77ebaeb712e6065851ae1060a58eb841b7b0f50faa3d3d1df8b17', '56e'),
(12, 'amal', 'amal', '39241e598ef0e32fc82f7111c2476a8323d5d64d4b16033b6ba351af6afe8c69', '56e');

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE IF NOT EXISTS `cat` (
`cat_id` int(11) NOT NULL,
  `cat_name` varchar(500) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`cat_id`, `cat_name`) VALUES
(1, 'ملابس رجالية'),
(2, 'ملابس أطفال'),
(3, 'رياضة'),
(4, 'اكسسوارات'),
(5, 'موبايلات');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`p_id` int(11) NOT NULL,
  `p_title` varchar(300) DEFAULT NULL,
  `p_price` double DEFAULT NULL,
  `p_desc` text,
  `p_img` varchar(100) DEFAULT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_title`, `p_price`, `p_desc`, `p_img`, `cat_id`) VALUES
(1, 'بنطلون رجالي', 299.8, 'بنطلون رجاليبنطلون رجاليبنطلون رجاليبنطلون رجاليبنطلون رجاليبنطلون رجالي', '1.jpeg', 1),
(2, 'حذاء فاخر', 190.88, 'حذاء فاخر حذاء فاخر حذاء فاخر حذاء فاخر حذاء فاخر ', '1.jpeg', 1),
(3, 'تيشرت ', 80, 'تيشرت  تيشرت  تيشرت  تيشرت  ', '5.jpg', 2),
(4, 'adidas', 300, 'adidas adidas adidas adidas adidas', '1.jpeg', 3),
(5, 'iPhon', 1000, 'iPhone iPhone iPhone iPhone', '1.jpeg', 5),
(6, 'انسيال', 200, 'انسيال انسيال انسيال انسيال ', '5.jpg', 4),
(7, 'nokia', 6000, 'Nokia Nokia Nokia ', '1.jpeg', 5),
(8, 'خاتم', 600, 'خاتم خاتم خاتم خاتم خاتم', '1.jpeg', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
 ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
 ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
