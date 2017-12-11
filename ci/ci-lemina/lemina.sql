-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2017 at 06:43 PM
-- Server version: 5.7.17-log
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lemina`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` varchar(15) NOT NULL,
  `productCategory` varchar(45) NOT NULL,
  `productName` varchar(45) NOT NULL,
  `productYear` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` varchar(10) NOT NULL,
  `userRole` int(11) NOT NULL DEFAULT '0',
  `userPassword` varchar(45) NOT NULL,
  `userName` varchar(45) NOT NULL,
  `userBirthDate` date NOT NULL,
  `userSex` varchar(15) NOT NULL,
  `userAddress` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `userRole`, `userPassword`, `userName`, `userBirthDate`, `userSex`, `userAddress`) VALUES
('a', 0, 'wow', 'Viqri', '1313-07-03', 'M', 'K'),
('email@emai', 0, 'wowo', 'Raditya', '1998-07-01', 'M', 'Jatinangor'),
('goblog', 0, 'g', 'anying', '2017-12-13', 'W', 'asd'),
('nah', 1, 'n', 'popopop', '2017-11-09', 'W', 'asd'),
('popo', 0, 'w', '132', '2017-12-27', 'W', '333'),
('popo2', 0, 'e', '132', '2017-12-27', 'W', '333'),
('popo22', 0, 'r', '132', '2017-12-27', 'W', '333'),
('rq', 0, 'e', 'wanjing', '2017-12-06', 'W', 'e'),
('rrrrr', 0, 'r', 'nah ini', '2017-12-05', 'M', 'q'),
('w', 0, 'w', 'an', '2017-12-05', 'M', 'asd'),
('w2eeww2', 0, 'r', 'an', '2017-12-05', 'M', 'asd'),
('we', 0, 'w', 'an', '2017-12-05', 'M', 'asd'),
('wee', 0, '2', 'an', '2017-12-05', 'M', 'asd'),
('weew', 0, '1', 'an', '2017-12-05', 'M', 'asd'),
('weeww', 0, '2', 'an', '2017-12-05', 'M', 'asd'),
('weeww2', 0, 'e', 'an', '2017-12-05', 'M', 'asd'),
('wow', 0, 'oop', 'Asep', '1998-01-01', 'M', 'Nangor');

-- --------------------------------------------------------

--
-- Table structure for table `user_buys_product`
--

CREATE TABLE `user_buys_product` (
  `User_userID` varchar(10) NOT NULL,
  `Product_productID` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `user_buys_product`
--
ALTER TABLE `user_buys_product`
  ADD KEY `User_userID` (`User_userID`),
  ADD KEY `Product_productID` (`Product_productID`),
  ADD KEY `User_userID_2` (`User_userID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `user_buys_product` (`Product_productID`);

--
-- Constraints for table `user_buys_product`
--
ALTER TABLE `user_buys_product`
  ADD CONSTRAINT `user_buys_product_ibfk_1` FOREIGN KEY (`User_userID`) REFERENCES `user` (`userID`),
  ADD CONSTRAINT `user_buys_product_ibfk_2` FOREIGN KEY (`Product_productID`) REFERENCES `product` (`productID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
