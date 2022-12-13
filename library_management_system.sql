-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 06:16 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library management system`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_ID` bigint(20) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `feedback_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_ID`, `full_name`, `country`, `feedback_text`) VALUES
(39, 'Valdimire Klitscho', ' usa', 'Nice page!'),
(40, 'Vitaly Kutuzuv', ' rusia', 'Useful website');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `h_ID` int(11) NOT NULL,
  `fName` varchar(100) NOT NULL,
  `lName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `m_ID` varchar(100) NOT NULL,
  `question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`h_ID`, `fName`, `lName`, `email`, `m_ID`, `question`) VALUES
(3, 'Mary', 'Woodely', 'mary123@gmail.com', '232323', 'Need to recover the lost membership.'),
(4, 'Jonathan', 'Mclaren', 'jonathan@gmail.com', '34456', 'Require the library assistance to manage my account.'),
(5, 'Roger', 'Manchester', 'roger123@gmail.com', '45676', 'Requesting a book to add.');

-- --------------------------------------------------------

--
-- Table structure for table `member_details`
--

CREATE TABLE `member_details` (
  `id` bigint(20) NOT NULL,
  `user_ID` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_details`
--

INSERT INTO `member_details` (`id`, `user_ID`, `user_name`, `fullName`, `password`, `email`, `contact`, `date`) VALUES
(15, 5860061225549783785, 'john123', 'John Mc Feild', 'john123', 'john123@gmail.com', 773017245, '2021-10-10 04:02:31'),
(16, 9223372036854775807, 'evander123', 'Evander Statham', 'evander123', 'evander123@gmail.com', 773017247, '2021-10-10 04:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_ID` bigint(20) NOT NULL,
  `member_name` varchar(100) NOT NULL,
  `member_plan` varchar(20) NOT NULL,
  `card_number` int(11) NOT NULL,
  `card_holder` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_ID`, `member_name`, `member_plan`, `card_number`, `card_holder`) VALUES
(25, 'John McFeild', 'Monthly', 2147483647, 'tyson'),
(26, 'Evander Statham', 'Annual', 2147483647, 'Evander Statham');

-- --------------------------------------------------------

--
-- Table structure for table `resource_details`
--

CREATE TABLE `resource_details` (
  `bookID` int(20) NOT NULL,
  `category` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `publisher` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resource_details`
--

INSERT INTO `resource_details` (`bookID`, `category`, `title`, `author`, `publisher`) VALUES
(1, 'novel', 'les Miserable', 'Victor Hugo', 'A. Lacroix, Verboeckhoven & Cie.'),
(2, 'novel', 'While it lasts', 'Abbi Glines', 'Simon Pulse Publication'),
(3, 'novel', 'The Lost City', 'Trevor McField', 'Doubleday publishers'),
(4, 'novel', 'Jane Eyre', 'Charlotte Bronte', 'Smith, Elder and Co'),
(5, 'novel', 'Plain Bad Heroines', 'Emily M. Danforth', 'HarperCollins Publishers');

-- --------------------------------------------------------

--
-- Table structure for table `vacancies`
--

CREATE TABLE `vacancies` (
  `vac_ID` bigint(20) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vacancies`
--

INSERT INTO `vacancies` (`vac_ID`, `first_name`, `last_name`, `email`, `phone`, `position`, `address`) VALUES
(18, 'Anthony', ' Joshua', 'anthony@gmail.com', 773057161, 'library technician', 'E-Block, Holly Woods, Sothern Wales'),
(19, 'Roy', ' virginia', 'roy123@gmail.com', 773087222, 'library assistant', 'No-08, South Dakota, Vermont');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_ID`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`h_ID`);

--
-- Indexes for table `member_details`
--
ALTER TABLE `member_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_ID` (`user_ID`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_ID`);

--
-- Indexes for table `resource_details`
--
ALTER TABLE `resource_details`
  ADD PRIMARY KEY (`bookID`);

--
-- Indexes for table `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`vac_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `h_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `member_details`
--
ALTER TABLE `member_details`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `resource_details`
--
ALTER TABLE `resource_details`
  MODIFY `bookID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `vac_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
