-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2022 at 08:42 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `accession_number` char(6) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(20) NOT NULL,
  `edition` int(2) NOT NULL,
  `year_of_publication` year(4) NOT NULL,
  `publisher` varchar(20) NOT NULL,
  `number_of_pages` int(11) NOT NULL,
  `price` double NOT NULL,
  `source` varchar(50) NOT NULL,
  `image_field` varchar(50) NOT NULL,
  `isbn` char(10) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `electronic_copy_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `borrow_id` char(15) NOT NULL,
  `user_id` char(15) NOT NULL,
  `accession_number` char(6) NOT NULL,
  `borrow_date` date NOT NULL,
  `due_date` date NOT NULL,
  `return_date` date NOT NULL,
  `fine_amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE `librarian` (
  `librarian_id` char(15) NOT NULL,
  `name` char(20) NOT NULL,
  `present_address` varchar(50) NOT NULL,
  `pr_post_code` char(4) NOT NULL,
  `permanent_address` varchar(50) NOT NULL,
  `pa_post_code` char(4) NOT NULL,
  `mobile_number` char(11) NOT NULL,
  `email_address` varchar(30) NOT NULL,
  `username` char(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `requested_books`
--

CREATE TABLE `requested_books` (
  `user_id` char(15) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(20) NOT NULL,
  `edition` int(2) NOT NULL,
  `other_details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` char(15) NOT NULL,
  `name` char(20) NOT NULL,
  `father_name` char(20) NOT NULL,
  `mother_name` char(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `present_address` varchar(50) NOT NULL,
  `pr_post_code` char(4) NOT NULL,
  `permanent_address` varchar(50) NOT NULL,
  `pa_post_code` char(4) NOT NULL,
  `mobile_number` char(11) NOT NULL,
  `email_address` varchar(30) NOT NULL,
  `roll_number` char(11) NOT NULL,
  `session` char(9) NOT NULL,
  `designation` char(20) NOT NULL,
  `pin` char(10) NOT NULL,
  `username` char(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`accession_number`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`borrow_id`),
  ADD KEY `accession_number` (`accession_number`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `librarian`
--
ALTER TABLE `librarian`
  ADD PRIMARY KEY (`librarian_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `requested_books`
--
ALTER TABLE `requested_books`
  ADD KEY `id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `borrow`
--
ALTER TABLE `borrow`
  ADD CONSTRAINT `accession_number` FOREIGN KEY (`accession_number`) REFERENCES `book` (`accession_number`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `requested_books`
--
ALTER TABLE `requested_books`
  ADD CONSTRAINT `id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
