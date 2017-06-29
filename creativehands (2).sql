-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2017 at 04:27 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creativehands`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productId` int(11) NOT NULL,
  `productName` varchar(20) NOT NULL,
  `productPrice` double NOT NULL,
  `catagoryA` varchar(10) NOT NULL,
  `catagoryB` varchar(10) NOT NULL,
  `catagoryC` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `productName`, `productPrice`, `catagoryA`, `catagoryB`, `catagoryC`) VALUES
(1, 'Decor', 250, 'Cards', 'For Family', 'For Mother'),
(2, 'trt', 40, 'c', 'Cards', 'v'),
(3, 'fgd', 300, 'fdgdfdf', 'f', 'Cards'),
(4, 'dsfsfsdfsdsfs', 7676767, 'dfd', 'f', 'gbfgg');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchaseId` int(11) NOT NULL,
  `productId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `customized` tinyint(1) DEFAULT '0',
  `quantity` int(11) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `userGender` text NOT NULL,
  `userAddress` varchar(50) NOT NULL,
  `userEmail` varchar(20) NOT NULL,
  `userContact` double NOT NULL,
  `userLogin` varchar(20) NOT NULL,
  `userPassword` varchar(20) NOT NULL,
  `userAccess` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userName`, `userGender`, `userAddress`, `userEmail`, `userContact`, `userLogin`, `userPassword`, `userAccess`) VALUES
(1, 'hjh', 'Male', 'hj', 'ccvb', 13, 'aa', 'qq', 0),
(2, 'hjh', 'Male', 'hj', 'ccvb', 13, 'aa', 'qqq', 0),
(4, 'Wishwa Wijeratne', 'Male', 'qq', 'ww46673@gmail.com', 710626577, 'admin', 'admin', 1),
(5, 'sas', 'Male', 'dsfsfs', 'sd', 25, 'zz', 'zz', 0),
(6, 'Wishwa Wijeratne', 'Male', '1ratta,Keselwatta,', 'ww46673@gmail.com', 710626577, 'aa', 'aa', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchaseId`),
  ADD KEY `productId` (`productId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchaseId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
