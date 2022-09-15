-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2022 at 11:39 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `isbn` char(13) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `electronic_copy_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`accession_number`, `title`, `author`, `edition`, `year_of_publication`, `publisher`, `number_of_pages`, `price`, `source`, `image_field`, `isbn`, `remarks`, `electronic_copy_path`) VALUES
('100001', 'Teach Yourself C', 'Herbert Schildt, Mcg', 3, 1997, 'McGraw-Hill Osborne ', 640, 17098, 'Rkomari', '', '0078823110', '', ''),
('100002', 'Teach Yourself C', 'Herbert Schildt, Mcg', 3, 1997, 'McGraw-Hill Osborne ', 640, 17098, 'Rkomari', '', '0078823110', '', ''),
('100003', 'Teach Yourself C', 'Herbert Schildt, Mcg', 3, 1997, 'McGraw-Hill Osborne ', 640, 17098, 'Rkomari', '', '0078823110', '', ''),
('100004', 'Discrete Mathematics and Its Applications', 'Kenneth H. Rosen ', 7, 2011, 'Mc Graw Hill', 0, 5600, 'Amazon', '', '0073383090', '', ''),
('100005', 'Discrete Mathematics and Its Applications', 'Kenneth H. Rosen ', 7, 2011, 'Mc Graw Hill', 0, 5600, 'Amazon', '', '0073383090', '', ''),
('100006', 'Discrete Mathematics and Its Applications', 'Kenneth H. Rosen ', 7, 2011, 'Mc Graw Hill', 0, 5600, 'Amazon', '', '0073383090', '', ''),
('100007', 'Calculus and Analytic Geometry', 'George B. Thomas & R', 9, 1995, 'Addison Wesley', 1264, 2000, 'Amazon', '', '0201531747', '', ''),
('100008', 'Calculus and Analytic Geometry', 'George B. Thomas & R', 9, 1995, 'Addison Wesley', 1264, 2000, 'Amazon', '', '0201531747', '', ''),
('100009', 'Calculus and Analytic Geometry', 'George B. Thomas & R', 9, 1995, 'Addison Wesley', 1264, 2000, 'Amazon', '', '0201531747', '', ''),
('100010', 'Introduction to Probability and Statistics for Eng', 'Sheldon M. Ross', 5, 2014, ' Academic Press', 686, 2650, 'Amazon', '', ' 012394811', '', ''),
('100011', 'Introduction to Probability and Statistics for Eng', 'Sheldon M. Ross', 5, 2014, ' Academic Press', 686, 2650, 'Amazon', '', ' 012394811', '', ''),
('100012', 'Introduction to Probability and Statistics for Eng', 'Sheldon M. Ross', 5, 2014, ' Academic Press', 686, 2650, 'Amazon', '', ' 012394811', '', ''),
('100013', 'Society and Technological Change', 'Rudi Volti', 6, 2009, 'Worth Publishers', 332, 8500, 'Amazon', '', '1429221216', '', ''),
('100014', 'Society and Technological Change', 'Rudi Volti', 6, 2009, 'Worth Publishers', 332, 8500, 'Amazon', '', '1429221216', '', ''),
('100015', 'Software Engineering A Practitioner \'S Approach', 'Pressman', 8, 2019, 'MC GRAW HILL INDIA', 976, 16400, 'Amazon', '', '9353165717', '', ''),
('100016', 'Software Engineering A Practitioner \'S Approach', 'Pressman', 8, 2019, 'MC GRAW HILL INDIA', 976, 16400, 'Amazon', '', '9353165717', '', ''),
('100017', 'Data Structures', 'Seymour Lipschutz', 1, 2014, 'Mcgraw Hill Educatio', 488, 1798, 'Rkomari', '', '9781259029967', '', ''),
('100018', 'Data Structures', 'Seymour Lipschutz', 1, 2014, 'Mcgraw Hill Educatio', 488, 1798, 'Amazon', '', '9781259029967', '', ''),
('100019', 'Data Structures', 'Seymour Lipschutz', 1, 2014, 'Mcgraw Hill Educatio', 488, 1798, 'Amazon', '', '9781259029967', '', ''),
('100020', 'Computer Organization and Design', 'John L. Hennessy', 1, 2016, 'Morgan Kaufmann', 720, 8560, 'Amazon', '', '0128017333', '', ''),
('100021', 'Computer Organization and Design', 'John L. Hennessy', 1, 2016, 'Morgan Kaufmann', 720, 8560, 'Amazon', '', '0128017333', '', ''),
('100022', 'Computer Organization and Design', 'John L. Hennessy', 1, 2016, 'Morgan Kaufmann', 720, 8560, 'Amazon', '', '0128017333', '', ''),
('100023', 'Advanced Engineering Mathematics', 'Erwin Kreyszig', 8, 1998, 'John Wiley & Sons', 1288, 2200, 'Amazon', '', '0471154962', '', ''),
('100024', 'Advanced Engineering Mathematics', 'Erwin Kreyszig', 8, 1998, 'John Wiley & Sons', 1288, 2200, 'Amazon', '', '0471154962', '', ''),
('100025', 'Advanced Engineering Mathematics', 'Erwin Kreyszig', 8, 1998, 'John Wiley & Sons', 1288, 2200, 'Amazon', '', '0471154962', '', ''),
('100026', 'The Foreshadowing of Bangladesh: Bengal Muslim Lea', 'Md. Harun Or Roshid', 3, 2015, 'The University Press', 382, 656, 'Rkomari', '', '9789845061094', '', ''),
('100027', 'The Foreshadowing of Bangladesh: Bengal Muslim Lea', 'Md. Harun Or Roshid', 3, 2015, 'The University Press', 382, 656, 'Rkomari', '', '9789845061094', '', ''),
('100028', 'The Foreshadowing of Bangladesh: Bengal Muslim Lea', 'Md. Harun Or Roshid', 3, 2015, 'The University Press', 382, 656, 'Rkomari', '', '9789845061094', '', ''),
('100029', 'Java How to Program', 'Paul J Deitel , Harv', 3, 1999, '	Prentice Hall', 1355, 8820, 'Rkomari', '', '9780130125071', '', ''),
('100030', 'Java How to Program', 'Paul J Deitel , Harv', 3, 1999, '	Prentice Hall', 1355, 8820, 'Rkomari', '', '9780130125071', '', ''),
('100031', 'Java How to Program', 'Paul J Deitel , Harv', 3, 1999, '	Prentice Hall', 1355, 8820, 'Rkomari', '', '9780130125071', '', '');

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

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`borrow_id`, `user_id`, `accession_number`, `borrow_date`, `due_date`, `return_date`, `fine_amount`) VALUES
('0000000002', '10000002', '100002', '2022-09-15', '2022-09-21', '2022-09-23', 0);

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

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`librarian_id`, `name`, `present_address`, `pr_post_code`, `permanent_address`, `pa_post_code`, `mobile_number`, `email_address`, `username`, `password`) VALUES
('10000001', 'Abdullah Alif 1', 'Maijdee, Noakhali', '3800', 'Kasba, Brahmanbaria', '3460', '01705197886', 'abdullahalif1404@gmail.com', 'abdullahalif1404', '1234'),
('10000002', 'Abdullah Alif 2', 'Maijdee, Noakhali', '3800', 'Kasba, Brahmanbaria', '3460', '01705197886', 'abdullahalif2404@gmail.com', 'abdullahalif2404', '1234'),
('10000003', 'Abdullah Alif 3', 'Maijdee, Noakhali', '3800', 'Kasba, Brahmanbaria', '3460', '01705197886', 'abdullahalif3404@gmail.com', 'abdullahalif3404', '1234'),
('10000004', 'Abdullah Alif 4', 'Maijdee, Noakhali', '3800', 'Kasba, Brahmanbaria', '3460', '01705197886', 'abdullahalif4404@gmail.com', 'abdullahalif4404', '1234'),
('10000005', 'Abdullah Alif 5', 'Maijdee, Noakhali', '3800', 'Kasba, Brahmanbaria', '3460', '01705197886', 'abdullahalif5404@gmail.com', 'abdullahalif5404', '1234'),
('10000006', 'Abdullah Alif 6', 'Maijdee, Noakhali', '3800', 'Kasba, Brahmanbaria', '3460', '01705197886', 'abdullahalif6404@gmail.com', 'abdullahalif6404', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `requested_books`
--

CREATE TABLE `requested_books` (
  `user_id` char(15) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(20) NOT NULL,
  `edition` int(2) NOT NULL,
  `publisher` varchar(20) NOT NULL,
  `source` varchar(50) NOT NULL,
  `image_field` varchar(50) NOT NULL,
  `isbn` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requested_books`
--

INSERT INTO `requested_books` (`user_id`, `title`, `author`, `edition`, `publisher`, `source`, `image_field`, `isbn`) VALUES
('10000001', 'C Programming in One Hour a Day, Sams Teach Yourse', 'Bradley Jones', 7, 'Sams Publishing', 'Amazon', '', '9780789751997');

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
  `password` varchar(30) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `father_name`, `mother_name`, `date_of_birth`, `present_address`, `pr_post_code`, `permanent_address`, `pa_post_code`, `mobile_number`, `email_address`, `roll_number`, `session`, `designation`, `pin`, `username`, `password`, `status`) VALUES
('10000001', 'Abdullah Alif 1', 'Mohammad', 'Akter', '2000-08-09', 'Maijdee, Noakhali', '3800', 'Kasba, Brahmanbaria', '3460', '01705197886', 'abdullahalif1404@gmail.com', 'ASH1925001M', '2018-19', 'Student', '1231', 'abdullahalif1404', '1234', 0),
('10000002', 'Abdullah Alif 2', 'Mohammad', 'Akter', '2000-08-09', 'Maijdee, Noakhali', '3800', 'Kasba, Brahmanbaria', '3460', '01705197886', 'abdullahalif2404@gmail.com', 'ASH1925002M', '2018-19', 'Student', '1232', 'abdullahalif2404', '1232', 1),
('10000003', 'Abdullah Alif 3', 'Mohammad', 'Akter', '2000-08-09', 'Maijdee, Noakhali', '3800', 'Kasba, Brahmanbaria', '3460', '01705197886', 'abdullahalif3404@gmail.com', 'ASH1925003M', '2018-19', 'Student', '1233', 'abdullahalif3404', '1234', 2),
('10000004', 'Abdullah Alif 4', 'Mohammad', 'Akter', '2000-08-09', 'Maijdee, Noakhali', '3800', 'Kasba, Brahmanbaria', '3460', '01705197886', 'abdullahalif4404@gmail.com', 'ASH1925004M', '2018-19', 'Student', '1234', 'abdullahalif4404', '1234', 1),
('10000005', 'Abdullah Alif 5', 'Mohammad', 'Akter', '2000-08-09', 'Maijdee, Noakhali', '3800', 'Kasba, Brahmanbaria', '3460', '01705197886', 'abdullahalif5404@gmail.com', 'ASH1925005M', '2018-19', 'Student', '1235', 'abdullahalif5404', '1235', 1),
('10000006', 'Abdullah Alif 6', 'Mohammad', 'Akter', '2000-08-09', 'Maijdee, Noakhali', '3800', 'Kasba, Brahmanbaria', '3460', '01705197886', 'abdullahalif6404@gmail.com', 'ASH1925006M', '2018-19', 'Student', '1236', 'abdullahalif6404', '1236', 0),
('10000007', 'Abdullah Alif 7', 'Mohammad', 'Akter', '2000-08-09', 'Maijdee, Noakhali', '3800', 'Kasba, Brahmanbaria', '3460', '01705197886', 'abdullahalif7404@gmail.com', 'ASH1925007M', '2018-19', 'Student', '1237', 'abdullahalif7404', '1234', 1),
('10000008', 'Abdullah Alif 8', 'Mohammad', 'Akter', '2000-08-09', 'Maijdee, Noakhali', '3800', 'Kasba, Brahmanbaria', '3460', '01705197886', 'abdullahalif8404@gmail.com', 'ASH1925008M', '2018-19', 'Student', '1238', 'abdullahalif8404', '1238', 0),
('10000009', 'Abdullah Alif 9', 'Mohammad', 'Akter', '2000-08-09', 'Maijdee, Noakhali', '3800', 'Kasba, Brahmanbaria', '3460', '01705197886', 'abdullahalif9404@gmail.com', 'ASH1925009M', '2018-19', 'Student', '1239', 'abdullahalif9404', '1234', 0),
('10000010', 'Abdullah Alif 10', 'Mohammad', 'Akter', '2000-08-09', 'Maijdee, Noakhali', '3800', 'Kasba, Brahmanbaria', '3460', '01705197886', 'abdullahalif10404@gmail.com', 'ASH1925010M', '2018-19', 'Student', '12310', 'abdullahalif10404', '12310', 2),
('10000011', 'Abdullah Alif 11', 'Mohammad', 'Akter', '2000-08-09', 'Maijdee, Noakhali', '3800', 'Kasba, Brahmanbaria', '3460', '01705197886', 'abdullahalif11404@gmail.com', 'ASH1925011M', '2018-19', 'Student', '12311', 'abdullahalif11404', '12311', 2),
('10000012', 'Abdullah Alif 12', 'Mohammad', 'Akter', '2000-08-09', 'Maijdee, Noakhali', '3800', 'Kasba, Brahmanbaria', '3460', '01705197886', 'abdullahalif12404@gmail.com', 'ASH1925012M', '2018-19', 'Student', '12312', 'abdullahalif12404', '12312', 2);

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
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `roll_number` (`roll_number`),
  ADD UNIQUE KEY `email_address` (`email_address`,`pin`),
  ADD UNIQUE KEY `pin` (`pin`);

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
