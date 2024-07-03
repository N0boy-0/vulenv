-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 04:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pipago`
--
CREATE DATABASE IF NOT EXISTS `pipago` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pipago`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1000, 'admin1@pipago.com', 'admin1login');

-- --------------------------------------------------------

--
-- Table structure for table `blocking`
--

CREATE TABLE `blocking` (
  `bid` int(11) NOT NULL COMMENT 'restriction id ',
  `blocker` int(11) NOT NULL,
  `blocked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentid` int(11) NOT NULL COMMENT 'id',
  `postid` int(11) NOT NULL COMMENT 'post id ',
  `commenter` int(11) NOT NULL COMMENT 'commenter id',
  `date` datetime NOT NULL COMMENT 'date'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `following`
--

CREATE TABLE `following` (
  `foid` int(11) NOT NULL COMMENT 'following number',
  `followed` int(11) NOT NULL COMMENT 'followed person',
  `follower` int(11) NOT NULL COMMENT 'follower'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `likeid` int(11) NOT NULL COMMENT 'like number',
  `postid` int(11) NOT NULL,
  `liker_id` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mesg`
--

CREATE TABLE `mesg` (
  `mess_id` int(11) NOT NULL COMMENT 'mesage id',
  `sendid` int(11) NOT NULL COMMENT 'sender id',
  `receid` int(11) NOT NULL COMMENT 'receiver id',
  `markread` tinyint(1) NOT NULL COMMENT 'message delivered',
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `noid` int(11) NOT NULL COMMENT 'notification id',
  `markread` tinyint(1) NOT NULL COMMENT 'notification seen',
  `owner` int(11) NOT NULL,
  `note` varchar(100) NOT NULL COMMENT 'notification'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postid` int(11) NOT NULL,
  `post` text NOT NULL,
  `poster` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL COMMENT 'id',
  `fname` varchar(50) NOT NULL COMMENT 'first name',
  `lname` varchar(50) NOT NULL COMMENT 'last name',
  `bday` date NOT NULL,
  `city` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL COMMENT 'email',
  `password` varchar(50) NOT NULL COMMENT 'pass',
  `gender` varchar(6) NOT NULL,
  `edu` varchar(30) NOT NULL,
  `last_seen` datetime NOT NULL,
  `joined` datetime NOT NULL COMMENT 'joined',
  `avatar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `bday`, `city`, `email`, `password`, `gender`, `edu`, `last_seen`, `joined`, `avatar`) VALUES
(1001, 'firaol', 'wakuma', '2022-04-21', 'addis abeba ', 'firaol@email.com', 'password123', 'male', 'is', '2022-04-25 14:47:39', '2022-04-25 14:47:39', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blocking`
--
ALTER TABLE `blocking`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `blocker_fk` (`blocker`),
  ADD KEY `blocked` (`blocked`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentid`),
  ADD KEY `commenter` (`commenter`);

--
-- Indexes for table `following`
--
ALTER TABLE `following`
  ADD PRIMARY KEY (`foid`),
  ADD KEY `follower_fk` (`follower`),
  ADD KEY `followed_fk` (`followed`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`likeid`),
  ADD KEY `liked_post_fk` (`postid`),
  ADD KEY `liker_id_fk` (`liker_id`);

--
-- Indexes for table `mesg`
--
ALTER TABLE `mesg`
  ADD PRIMARY KEY (`mess_id`),
  ADD KEY `sender_id_fk` (`sendid`),
  ADD KEY `receiver_id_fk` (`receid`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`noid`),
  ADD KEY `owner_id_fk` (`owner`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postid`),
  ADD KEY `poster_id_fk` (`poster`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1037;

--
-- AUTO_INCREMENT for table `blocking`
--
ALTER TABLE `blocking`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'restriction id ';

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id';

--
-- AUTO_INCREMENT for table `following`
--
ALTER TABLE `following`
  MODIFY `foid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'following number';

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `likeid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'like number';

--
-- AUTO_INCREMENT for table `mesg`
--
ALTER TABLE `mesg`
  MODIFY `mess_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'mesage id';

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `noid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'notification id';

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=1002;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blocking`
--
ALTER TABLE `blocking`
  ADD CONSTRAINT `blocked` FOREIGN KEY (`blocked`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `blocker_fk` FOREIGN KEY (`blocker`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `commented_post_fk` FOREIGN KEY (`commentid`) REFERENCES `post` (`postid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commenter` FOREIGN KEY (`commenter`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `following`
--
ALTER TABLE `following`
  ADD CONSTRAINT `followed_fk` FOREIGN KEY (`followed`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `follower_fk` FOREIGN KEY (`follower`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `liked_post_fk` FOREIGN KEY (`postid`) REFERENCES `post` (`postid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `liker_id_fk` FOREIGN KEY (`liker_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mesg`
--
ALTER TABLE `mesg`
  ADD CONSTRAINT `receiver_id_fk` FOREIGN KEY (`receid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sender_id_fk` FOREIGN KEY (`sendid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `owner_id_fk` FOREIGN KEY (`owner`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `poster_id_fk` FOREIGN KEY (`poster`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
