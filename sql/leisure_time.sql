-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 02, 2021 at 12:25 PM
-- Server version: 8.0.23-0ubuntu0.20.04.1
-- PHP Version: 7.3.27-9+ubuntu20.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leisure_time`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int NOT NULL,
  `emailId` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL,
  `profilePicture` varchar(255) NOT NULL,
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `emailId`, `password`, `profilePicture`, `createdDate`) VALUES
(1, 'manavsheth@gmail.com', 'abcdabcd', 'blahblah', '2021-04-03 13:47:41');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackId` int NOT NULL,
  `userId` int NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hobby`
--

CREATE TABLE `hobby` (
  `hobbyId` int NOT NULL,
  `hobbyName` varchar(255) NOT NULL,
  `hobbyImage` varchar(255) NOT NULL,
  `desctiption` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hobby`
--

INSERT INTO `hobby` (`hobbyId`, `hobbyName`, `hobbyImage`, `desctiption`, `createdDate`) VALUES
(1, 'Cricket', 'Skin/img/hobby/cricket.jpg', 'cricket lover', '2021-04-08 17:06:48'),
(2, 'Dance', 'Skin/img/hobby/dance.jpg', 'this is chess', '2021-04-08 17:07:21'),
(3, 'Hip Hop', 'Skin/img/hobby/hiphop.jpg', 'football hobby', '2021-04-08 17:37:05'),
(4, 'Comics', 'Skin/img/hobby/comics.jpg', 'comics hobby', '2021-04-24 17:35:51');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int NOT NULL,
  `firstName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `description` text,
  `emailId` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL,
  `city` varchar(255) NOT NULL,
  `profilePicture` varchar(255) NOT NULL,
  `connections` int NOT NULL DEFAULT '0',
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `firstName`, `lastName`, `description`, `emailId`, `password`, `city`, `profilePicture`, `connections`, `createdDate`) VALUES
(1, 'Manav', 'Sheth', '‘But the door slid slowly open before Lupin could reach it. Standing in the doorway, illuminated by the shivering flames in Lupin’s hand, was a cloaked figure that towered to the ceiling. Its face was completely hidden beneath its hood. Harry’s eyes darted downwards, and what he saw made his stomach contract. There was a hand protruding from the cloak and it was glistening, greyish, slimy-looking and scabbed, like something dead that had decayed in water…’ ', 'manav@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Rajkot', 'Skin/img/profiles/manav@gmail.com_Manav.jpeg', 0, '2021-04-03 13:46:52'),
(10, 'Anuj', 'Padhiyar', 'The purpose of descriptive writing is to inspire imagination. When you put your mind into making a piece of writing more descriptive, you automatically begin to pay attention to detail and refine your perception about things. You begin to imagine them as much more than, say a party hat or a hard-bound book. You begin to look at them as a tall, pink, pointed paper hat with tassels, and a book that had a gleaming golden spine, and weighed a few good pounds.', 'anuj@gmail.com', 'c482e3014f9b268c6d953a0fb0df6cc6', 'Rajkot', 'Skin/img/profiles/helloAnuj.jpeg', 1, '2021-04-08 16:51:46'),
(11, 'Jayesh', 'Makwana', 'Since you have picked something to describe and have observed all its details, you are sure to understand the subject better. You may even come across bits and pieces that you may have missed the first time you looked at the object/subject in question. Thoroughly understanding what you’re going to write about is exceedingly important to the process of writing about it.', 'jayesh@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Rajkot', 'Skin/img/profiles/adnnks@gmail.com_jayesh.jpeg', 0, '2021-04-08 20:43:27'),
(12, 'Keyur', 'Somaiya', '1‘But the door slid slowly open before Lupin could reach it. Standing in the doorway, illuminated by the shivering flames in Lupin’s hand, was a cloaked figure that towered to the ceiling. Its face was completely hidden beneath its hood. Harry’s eyes darted downwards, and what he saw made his stomach contract. There was a hand protruding from the cloak and it was glistening, greyish, slimy-looking and scabbed, like something dead that had decayed in water…’ \"\"\"', 'keyur@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Rajkot', 'Skin/img/profiles/keyur@gmail.com_Keyur.jpeg', 1, '2021-04-24 21:21:11');

-- --------------------------------------------------------

--
-- Table structure for table `user_friend`
--

CREATE TABLE `user_friend` (
  `userFriendId` int NOT NULL,
  `userId` int NOT NULL,
  `friendId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_friend`
--

INSERT INTO `user_friend` (`userFriendId`, `userId`, `friendId`) VALUES
(10, 11, 10),
(11, 11, 12),
(12, 11, 12),
(13, 12, 10),
(14, 12, 10),
(15, 12, 10),
(16, 12, 10),
(17, 12, 10),
(18, 12, 10),
(19, 10, 12);

-- --------------------------------------------------------

--
-- Table structure for table `user_hobby`
--

CREATE TABLE `user_hobby` (
  `userHobbyId` int NOT NULL,
  `userId` int NOT NULL,
  `hobbyId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_hobby`
--

INSERT INTO `user_hobby` (`userHobbyId`, `userId`, `hobbyId`) VALUES
(5, 12, 4),
(12, 10, 3),
(13, 12, 3),
(14, 12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_request`
--

CREATE TABLE `user_request` (
  `userRequestId` int NOT NULL,
  `userId` int NOT NULL,
  `requestId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackId`);

--
-- Indexes for table `hobby`
--
ALTER TABLE `hobby`
  ADD PRIMARY KEY (`hobbyId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `user_friend`
--
ALTER TABLE `user_friend`
  ADD PRIMARY KEY (`userFriendId`);

--
-- Indexes for table `user_hobby`
--
ALTER TABLE `user_hobby`
  ADD PRIMARY KEY (`userHobbyId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `hobbyId` (`hobbyId`);

--
-- Indexes for table `user_request`
--
ALTER TABLE `user_request`
  ADD PRIMARY KEY (`userRequestId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackId` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hobby`
--
ALTER TABLE `hobby`
  MODIFY `hobbyId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_friend`
--
ALTER TABLE `user_friend`
  MODIFY `userFriendId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_hobby`
--
ALTER TABLE `user_hobby`
  MODIFY `userHobbyId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_request`
--
ALTER TABLE `user_request`
  MODIFY `userRequestId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_hobby`
--
ALTER TABLE `user_hobby`
  ADD CONSTRAINT `user_hobby_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_hobby_ibfk_2` FOREIGN KEY (`hobbyId`) REFERENCES `hobby` (`hobbyId`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
