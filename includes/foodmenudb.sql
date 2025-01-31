-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2025 at 02:13 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodmenudb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(2) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `ID` int(3) NOT NULL,
  `CategoryName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ID`, `CategoryName`) VALUES
(1, 'الكل'),
(2, 'الوجبات'),
(3, 'الفلافل'),
(4, 'السندويشات'),
(5, 'الحلا'),
(6, 'المشروبات الباردة'),
(7, 'المشروبات الساخنة ');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `ID` int(4) NOT NULL,
  `name` varchar(200) NOT NULL,
  `categoryID` int(2) DEFAULT NULL,
  `price` double(6,2) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `postedDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`ID`, `name`, `categoryID`, `price`, `description`, `image`, `postedDate`) VALUES
(1, 'بنك باستا', 2, 11.00, 'مزيج مثالي من المكرونة الشهية مغطاة بصوص البناك الرائع مع لمسة من الجبن الكريمي اللذيذ.\r\n\r\n', 'binkbasta.jpg', '2018-01-31'),
(2, 'فتة ورق عنب ', 2, 7.00, 'مزيج من الأرز الطري وأوراق العنب الشهية مغطاة بالزبادي والكروتون المقرمش لإضافة لمسة لذيذة ومميزة.\r\n\r\n', 'fata.jpg', '2018-01-31'),
(3, 'كشري ', 2, 12.00, 'مزيج من العدس، الأرز والمكرونة، مزين بالبصل المقرمش لإضافة القرشة الرائعة.\r\n\r\n', 'koshari.jpg', '2018-01-31'),
(4, 'كبده', 4, 18.50, 'ساندوتش كبدة مطبوخ مع بعض الخضار اللذيذة\r\n\r\n', '1.jpeg', '2018-01-31'),
(5, 'عصير ليمون(نعناع)', 7, 12.00, 'عصير منعش ومفيد يتميز بطعم حامض ومنعش\r\n\r\n', 'hsimg-7837323.jpeg', '2024-11-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
