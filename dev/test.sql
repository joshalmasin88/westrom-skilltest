-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 02, 2021 at 01:02 PM
-- Server version: 8.0.25-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

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
-- Table structure for table `CustomerList`
--

CREATE TABLE `CustomerList` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `CustomerList`
--

INSERT INTO `CustomerList` (`id`, `name`, `phone`, `email`) VALUES
(4, 'John Doe', '909-414-9514', 'johndoe@gmail.com'),
(5, 'Mark', '23904u23', 'sdjalfk@gmail.com'),
(6, 'zz', '23423', '234@gmail.com'),
(7, 'Joshua Almasinasdfsdf', '234324', 'sddaf'),
(8, 'adsfasdf', 'sdfasdf', 'joshalmasin@gmail.com'),
(9, 'sadf', 'sadf', 'sdf@gmail.com'),
(10, 'sdfasdf', '808-414-9514', 'sdf@gmail.com'),
(11, 'asdfasfd', '909-414-9514', 'lkjsdfas@gmail.com'),
(12, 'blahbalhj', '234234234', 'josa@gmail.com'),
(13, 'blahbalhj', '234234234', 'josa@gmail.com'),
(14, 'asdfdsjf', 'asdfl', 'sadfjlsdkf@gmail.com'),
(15, 'asdfdsjf', 'asdfl', 'sadfjlsdkf@gmail.com'),
(16, 'test22', 'sajldfkj2', 'asdlfj@gmail.com'),
(17, 'test22', 'sajldfkj2', 'asdlfj@gmail.com'),
(18, 'asdfasdf', 'asdflkjasdfljksafjkl2', 'sadfsafd@gmail.com'),
(19, 'asfdasdflkj', '951-515-8541', 'asdfl@gmail.com'),
(20, 'TESTTER', '909-414-9511', 'joshalmasin88@gmail.com'),
(21, 'test100', '333-333-3333', 'saldfjasdlfkj@34.com'),
(22, 'sdfjasf', '1234567890asdf', 'safa@mgail.com'),
(23, 'sdfjasf', '1234567890asdf', 'safa@mgail.com'),
(24, 'Joshua A', '3091482309484asdfadsf', 'jasdf@gmail.com'),
(25, 'Joshua A', '3091482309484asdfadsf', 'jasdf@gmail.com'),
(26, 'testonphone', 'sladfjk23423', 'jsldf@gmail.com'),
(27, 'testonphone', 'sladfjk23423', 'jsldf@gmail.com'),
(28, 'TESTTESTAESTASF@$T%W', 'sajdflkasjdfl', 'alskdjfasldfjasdflk@gmail.com'),
(29, 'TESTTESTAESTASF@$T%W', 'sajdflkasjdfl', 'alskdjfasldfjasdflk@gmail.com'),
(30, 'sdfsadklfj', '808-414-9514', 'asdf@gmail.com'),
(31, 'sadfsdf', '9094149514', 'asldfkja@gmail.com'),
(32, 'sadfsdf', '9094149514', 'asldfkja@gmail.com'),
(33, 'sadfsadf', 'sadfasj', 'sadf@sdfa.com'),
(34, 'jkflsdajf', '9094149514', 'sdfljas@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `CustomerNotes`
--

CREATE TABLE `CustomerNotes` (
  `cnote_id` int NOT NULL,
  `note` text NOT NULL,
  `CustomerID` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `CustomerNotes`
--

INSERT INTO `CustomerNotes` (`cnote_id`, `note`, `CustomerID`) VALUES
(10, 'New User\r\n', 4),
(11, 'sadfdf', 4),
(12, 'asdfsdf', 6),
(13, 'test', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CustomerList`
--
ALTER TABLE `CustomerList`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `CustomerNotes`
--
ALTER TABLE `CustomerNotes`
  ADD PRIMARY KEY (`cnote_id`),
  ADD KEY `CustomerNotes_ibfk_1` (`CustomerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CustomerList`
--
ALTER TABLE `CustomerList`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `CustomerNotes`
--
ALTER TABLE `CustomerNotes`
  MODIFY `cnote_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `CustomerNotes`
--
ALTER TABLE `CustomerNotes`
  ADD CONSTRAINT `CustomerNotes_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `CustomerList` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
