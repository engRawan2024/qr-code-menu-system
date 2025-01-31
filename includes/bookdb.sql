-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2024 at 05:01 AM
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
-- Database: `bookdb1`
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
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `ID` int(4) NOT NULL,
  `ISBN` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `author` varchar(200) DEFAULT NULL,
  `SubcategoryID` int(2) DEFAULT NULL,
  `price` double(6,2) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `postedDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ID`, `ISBN`, `title`, `author`, `SubcategoryID`, `price`, `description`, `image`, `postedDate`) VALUES
(10, '9780679423126', 'Daddy long legss', 'Jean Webster', 3, 45.00, 'About Daddy-Long-Legs\r\nAn orphaned girl named Judy Abbott and an unknown, unseen benefactor who sends her to college and whom she refers to as \"Daddy-Long-Legs\" are the two principals in this immensely popular modern-day fairy tale. Told through Judy’s letters and illustrated by her own quaint drawings, DADDY-LONG-LEGS is a profound and tender homage to the power of awakening love.\r\n', 'DADDYLOGLEGS.png', '2024-11-29'),
(11, '9780375756726', 'Little Women', 'Louisa May Alcott', 7, 67.00, 'it is no surprise that Little Women, the adored classic of four devoted sisters, was loosely based on Louisa May Alcott’s own life. In fact, Alcott drew from her own personality to create a heroine unlike any seen before: Jo, willful, headstrong, and undoubtedly the backbone of the March family. Follow the sisters from innocent adolescence to sage adulthood, with all the joy and sorrow of life in between, and fall in love with them and this endearing story. Praised by Madeleine Stern as “a book on the American home, and hence universal in its appeal,” Little Women has been an avidly read tale for generations. This Modern Library edition includes notes that offer more description and insight than those of previous editions.\r\n ', 'LITTLEWOMEN.png', '2024-11-29'),
(12, '9780143138136', 'How to Let Things Go', 'Shunmyo Masuno', 1, 100.00, 'With these practical tips, you can abandon the futile pursuit of trying to control everything and discover the key to a fulfilling social life; individual well-being; and a calmer, more focused mind.\r\n ', 'HOWTOLETTHINGSGO.png', '2024-11-29'),
(13, '9780593472491', 'Break the Cycle', 'Break the Cycle', 1, 90.00, 'The definitive, paradigm-shifting guide to healing intergenerational trauma—weaving together scientific research with practical exercises and stories from the therapy room—from Dr. Mariel Buqué, PhD, a Columbia University–trained trauma-informed psychologist and practitioner of holistic healing\r\n', 'BRAKTHECYCLE.png', '2024-11-29'),
(14, '9780142424179', 'The Fault in Our Stars', 'John Green', 1, 67.00, 'Despite the tumor-shrinking medical miracle that has bought her a few years, Hazel has never been anything but terminal, her final chapter inscribed upon diagnosis. But when a gorgeous plot twist named Augustus Waters suddenly appears at Cancer Kid Support Group, Hazel’s story is about to be completely rewritten.\r\n', 'THEFAULTINOURSTARS.png', '2024-11-29'),
(15, '9780812980356', 'Snow Flower and the Secret', 'Lisa See', 1, 160.00, 'Lily is haunted by memories–of who she once was, and of a person, long gone, who defined her existence. She has nothing but time now, as she recounts the tale of Snow Flower, and asks the gods for forgiveness.\r\n', 'SERLOCKHOLMES.png', '2024-11-29'),
(16, '9781644732090', 'Harry Potter and the Prisoner of Azkaban', 'Harry Potter and the Prisoner of Azkaban', 1, 67.00, 'Welcome to the night bus, an emergency transport for any wizard abandoned to their own fate. Raise your wand, get on board, and we’ll take you wherever you need to go.”\r\n', 'HARRTPOTTER.png', '2024-11-29'),
(17, '756786676', 'Sherlock Holmes: The Novels', 'Sir Arthur Conan Doyle', 1, 143.00, 'All four legendary Sherlock Holmes novels, collected in a unique Graphic Deluxe Edition with an introduction by Michael Dirda\r\n', 'SERLOCKHOLMES.png', '2024-11-29');

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
(1, ' Science Fiction'),
(2, 'Romance'),
(3, 'Mystery'),
(4, 'Fantasy'),
(5, 'Biography'),
(6, 'History'),
(7, 'Self-help');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `ID` int(3) NOT NULL,
  `CategoryID` int(3) NOT NULL,
  `SubcategoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`ID`, `CategoryID`, `SubcategoryName`) VALUES
(1, 1, 'Dystopian 1'),
(3, 2, 'Contemporary Romance'),
(4, 2, 'Historical Romance'),
(5, 3, 'Crime Thriller'),
(7, 5, 'Autobiography');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_ibfk_1` FOREIGN KEY (`CategoryID`) REFERENCES `categories` (`ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
