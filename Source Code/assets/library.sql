-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2022 at 08:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
  `isbn` char(13) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(20) NOT NULL,
  `edition` int(2) NOT NULL,
  `date_of_publication` char(10) NOT NULL,
  `publisher` varchar(20) NOT NULL,
  `number_of_pages` int(11) NOT NULL,
  `price` double NOT NULL,
  `source` varchar(50) NOT NULL,
  `image_field` varchar(50) NOT NULL,
  `electronic_copy_path` varchar(100) NOT NULL,
  `no_of_books` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`isbn`, `title`, `author`, `edition`, `date_of_publication`, `publisher`, `number_of_pages`, `price`, `source`, `image_field`, `electronic_copy_path`, `no_of_books`) VALUES
(' 978111980036', 'Operating System Concepts', 'Abraham Silberschatz', 10, '02/09/2021', 'Wiley', 1040, 8384, 'Amazon', ' 9781119800361.jpg', ' 9781119800361.pdf', 0),
('9780070141605', 'FUNDAMENTALS OF COMPUTERS', 'E Balagurusamy', 0, '', 'McGraw Hill', 495, 0, '', '9780070141605.jpg', '9780070141605.pdf', 0),
('9780070240353', 'Schaum\'s Outline of Programming with C 2nd Edition', 'Byron S. S. Gottfrie', 2, '06-22-1996', 'McGraw Hill', 552, 3500, 'Amazon', '9780070240353.jpeg', '9780070240353.pdf', 0),
('9780070701984', 'Data Structures With C', 'Seymour Lipschutz ', 0, '', '', 554, 0, '', '9780070701984.jpg', '9780070701984.pdf', 0),
('9780071072830', 'Object Orinted Programming With C++', ' E Balaguruswamy', 0, '01/01/2011', 'McGraw Hill', 928, 798, 'Amazon', '9780071072830.jpg', '9780071072830.pdf', 0),
('9780071346665', 'Programming and Customizing the AVR Microcontrolle', 'Dhananjay Gadre', 1, '10/09/2000', 'McGraw-Hill Educatio', 366, 596, 'Amazon', '9780071346665.jpg', '9780071346665.pdf', 0),
('9780071470384', 'Discrete Mathematics', 'Seymour Lipschutz ', 3, '06/21/2007', 'McGraw-Hill', 474, 1102, 'Amazon', '9780071470384.jpg', '9780071470384.pdf', 0),
('9780072263855', 'Java: The Complete Reference', 'Herbert Schildt', 7, '12/15/2006', 'McGraw-Hill Osborne ', 1024, 4202, 'Amazon', '9780072263855.jpg', '9780072263855.pdf', 0),
('9780072958867', 'Database System Concepts', 'Abraham Silberschatz', 5, '05/17/2005', 'McGraw-Hill Science/', 1142, 1111, 'Amazon', '9780072958867.jpg', '9780072958867.pdf', 0),
('9780073660097', 'Electric Machinery', 'Charles Kingsley Jr.', 6, '07/25/2002', ' ‎ McGraw-Hill Scien', 704, 754, 'Amazon', '9780073660097.jpg', '9780073660097.pdf', 0),
('9780074638804', 'C++: The Complete Reference', ' Schildt Herbert ', 3, '01/01/1999', 'Tata Mcgraw Hill', 1007, 1196, 'Amazon', '9780074638804.jpg', '9780074638804.pdf', 0),
('9780077103934', 'Practical Object-Oriented Design Using UML', 'Mark Priestley', 2, '12/01/2003', '‎ McGraw-Hill Educat', 372, 1777, 'Amazon', '9780077103934.jpg', '9780077103934.pdf', 0),
('9780078022128', 'Software Engineering: A Practitioner\'s Approach', 'Roger S. Pressman', 5, '01/23/2014', 'McGraw Hil', 888, 5871, 'Amazon', '9780078022128.jpg', '9780078022128.pdf', 0),
('9780078022159', 'Database System Concepts', 'Abraham Silberschatz', 7, '02/19/2019', ' McGraw Hill', 1376, 5299, 'Amazon', '9780078022159.jpg', '9780078022159.pdf', 0),
('9780123814791', 'Data Mining: Concepts and Techniques', 'Micheline Kamber', 3, '06/09/2011', 'Morgan Kaufmann', 740, 1792, 'Amazon', '9780123814791.jpg', '9780123814791.pdf', 0),
('9780128243466', 'Introduction to Probability and Statistics for Eng', 'Sheldon M. Ross ', 6, '09/11/2020', '‎ Academic Press', 692, 1731, 'Amazon', '9780128243466.jpg', '9780128243466.pdf', 0),
('9780130810816', 'UNIX Network Programming', 'W. Richard Stevens', 2, '08/01/1998', 'Prentice Hall', 400, 1392, 'Amazon', '9780130810816.jpeg', '9780130810816.pdf', 0),
('9780132065412', 'Operational Amplifiers and Linear Integrated Circu', 'Robert F. Coughlin', 6, '01/01/1997', 'Prentice Hall Colleg', 558, 1164, 'Amazon', '9780132065412.jpg', '9780132065412.pdf', 0),
('9780132737968', 'Digital Fundamentals', 'Thomas L. Floyd', 11, '09/09/2014', 'Pearson', 913, 7499, 'Amazon', '9780132737968.jpg', '9780132737968.pdf', 0),
('9780132936491', 'Problem Solving and Program Design in C', 'Jeri R. Hanly ', 8, '03/04/2012', ' Pearson', 840, 2730, 'Amazon', '9780132936491.jpg', '9780132936491.pdf', 0),
('9780134101613', 'Computer Organization and Architecture', 'William Stallings', 6, '01/12/2015', 'Pearson', 826, 7501, 'Amazon', '9780134101613.jpg', '9780134101613.pdf', 0),
('9780134439020', 'Calculus', 'Joel Hass', 14, '01/01/2017', 'Pearson', 1224, 3647, 'Amazon', '9780134439020.jpg', '9780134439020.pdf', 0),
('9780137035151', 'Software Engineering', 'Ian Sommerville', 9, '03/13/2010', 'Pearson', 0, 0, 'Amazon', '9780137035151.jpg', '9780137035151.pdf', 0),
('9780139141010', 'Theory and Application of Digital Signal Processin', 'Lawrence R. Rabiner ', 1, '05/31/1975', 'Prentice Hall', 762, 2200, 'Amazon', '9780139141010.jpg', '9780139141010.pdf', 0),
('9780139586538', 'Control System Design', 'Graham C. Goodwin ', 0, '10/06/2000', 'Pearson', 944, 7618, 'Amazon', '9780139586538.jpg', '9780139586538.pdf', 0),
('9780199465873', 'Software Testing', 'NARESH CHAUHAN ', 2, '01/01/2016', 'OXFORD UNIVERSITY PR', 629, 2174, 'Amazon', '9780199465873.jpg', '9780199465873.pdf', 0),
('9780201042979', 'An Introduction to Distributed Systems', 'Bennet P. Lientz ', 0, '01/01/1981', ' ‎ Addison Wesley', 588, 1267, 'Amazon', '9780201042979.jpg', '9780201042979.pdf', 0),
('9780201441246', 'Introduction to Automata, Theory, Languages and Co', 'John E. Hopcroft ', 2, '05/31/2001', ' Addison-Wesley', 521, 1523, 'Amazon', '9780201441246.jpg', '9780201441246.pdf', 0),
('9780201498400', 'Data Structures and Algorithm Analysis in C', 'Mark Allen Weiss', 2, '09/19/1996', '‎Pearson', 528, 1104, 'Amazon', '9780201498400.jpg', '9780201498400.pdf', 0),
('9780201612448', 'Computer Algorithms: Introduction to Design and An', 'Sara Baase ', 3, '11/05/1999', 'Pearson', 694, 10178, 'Amazon', '9780201612448.jpg', '9780201612448.pdf', 0),
('9780262033848', 'Introduction to Algorithms', 'Thomas H. Cormen', 3, '07/31/2009', 'The MIT Press', 1313, 7499, 'Amazon', '9780262033848.jpg', '9780262033848.pdf', 0),
('9780408002950', 'A Short Course in Foundation Engineering', 'N.E. Simons and B.K.', 0, '10/22/2013', 'Butterworth-Heineman', 168, 3035, 'Amazon', '9780408002950.jpg', '9780408002950.pdf', 0),
('9780470458365', 'Advanced Engineering Mathematics', ' Erwin Kreyszig', 10, '08/162011', 'Wiley', 1280, 6447, 'Amazon', '9780470458365.jpg', '9780470458365.pdf', 0),
('9780521058599', 'Better English Pronunciation', 'J. D. O\'Connor', 2, '06/02/1967', 'Cambridge University', 82, 2014, 'Amazon', '9780521058599.jpg', '9780521058599.pdf', 0),
('9780521675420', 'Essential Grammar in Use', ' Helen Naylor', 2, '01/29/2007', 'Cambridge University', 152, 3187, 'Amazon', '9780521675420.jpg', '9780521675420.pdf', 0),
('9780672337178', 'Java in 24 Hours', 'Rogers Cadenhead', 7, '05/30/2014', '‎ Sams', 496, 225, 'Amazon', '9780672337178.jpg', '9780672337178.pdf', 0),
('9780789729842', 'Novell Netware 6.5: Administrator\'s Handbook', 'Jeffrey L. Harris', 1, '01/01/2004', 'Novell Pr', 776, 1035, 'Amazon', '9780789729842.jpg', '9780789729842.pdf', 0),
('9780805304107', 'Programming in Turbo Pascal', 'Walter Savitch ', 2, '02/01/1989', 'Addison Wesley Publi', 715, 2824, 'Amazon', '9780805304107.jpg', '9780805304107.pdf', 0),
('9781105105685', 'Object-Oriented Programming With ANSI-C', 'Axel Schreiner ', 0, '09/30/2011', 'Axel T. Schreiner / ', 223, 0, 'Amazon', '9781105105685.jpg', '9781105105685.pdf', 0),
('9781119746355', 'Applied Statistics and Probability for Engineers ', ' Douglas C. Montgome', 7, '07/08/2020', 'Wiley', 720, 12495, 'Amazon', '9781119746355.jpg', '9781119746355.pdf', 0),
('9781260440232', 'Java: The Complete Reference', ' Herbert Schildt', 11, '12/12/2018', 'McGraw Hill', 1248, 5700, 'Amazon', '9781260440232.jpg', '9781260440232.pdf', 0),
('9781498763974', 'Data Mining', 'Richard J. Roiger ', 2, '06/01/2017', 'hapman and Hall/CRC', 529, 2662, 'Amazon', '9781498763974.jpg', '9781498763974.pdf', 0),
('9781556353505', 'Distributed Operating Systems', 'Andrew S. Tanenbaum', 1, '09/04/1994', 'Pearson', 632, 3146, 'Amazon', '9781556353505.jpg', '9781556353505.pdf', 0),
('9781558604742', 'Fundamentals of the Theory of Computation: Princip', 'Raymond Greenlaw', 1, '07/14/1998', ' Morgan Kaufmann', 336, 2038, 'Amazon', '9781558604742.jpg', '9781558604742.pdf', 0),
('9781617290183', 'Machine Learning in Action', 'Peter Harrington', 1, '04/03/2012', '‎ Manning', 382, 3499, 'Amazon', '9781617290183.jpg', '9781617290183.pdf', 0),
('9781861003010', 'Professional Linux Programming', ' Neil Matthew and Ri', 0, '09/01/2000', 'Apress; illustrated ', 1200, 3000, 'Amazon', '9781861003010.jpg', '9781861003010.pdf', 0),
('9788121924375', 'A Textbook of Electrical Technology', 'Theraja', 1, '07/06/2013', ' S Chand & Co Ltd', 2745, 2100, 'Amazon', '9788121924375.jpg', '9788121924375.pdf', 0),
('9788131525296', 'Introduction to the Theory of Computation', ' Sipser', 2, '09/13/2014', ' Cengage India', 458, 7299, 'Amazon', '9788131525296.jpg', '9788131525296.pdf', 0),
('9788177581218', 'Software Testing: Principles and Practice', 'Srinivasan Desikan ', 0, '08/10/2009', 'Pearson Education Ca', 388, 295, 'Amazon', '9788177581218.jpg', '9788177581218.pdf', 0),
('9789811045844', 'Networking Communication and Data Knowledge Engine', 'Gregorio Martinez Pe', 1, '11/13/2017', 'Springer', 450, 1731, 'Amazon', '9789811045844.jpg', '9789811045844.pdf', 0),
('B001Y0MU7G', 'Network Analysis', 'M.E. Van Valkenburg', 4, '01/01/1958', ' Prentice-Hall', 449, 3605, 'Amazon', 'B001Y0MU7G.jpg', 'B001Y0MU7G.pdf', 0),
('B005FCNXS4', 'An Introduction to Database Systems', ' C.J. Date. Addison-', 8, '01/01/2004', 'Addison Wesley', 983, 29900, 'Amazon', 'B005FCNXS4.jpg', 'B005FCNXS4.pdf', 1),
('B00HXFJFGK', 'Cyber Security', 'John G. Voeller', 1, '01/16/2014', 'Wiley', 126, 1999, 'Amazon', 'B00HXFJFGK.jpg', 'B00HXFJFGK.pdf', 0),
('B012046LV0', 'Operational Amplifiers and Linear Integrated Circu', ' Frederick F. Drisco', 0, '01/01/1900', 'Prentice-Hall', 558, 2450, 'Amazon', 'B012046LV0.jpg', 'B012046LV0.pdf', 0),
('B01N5RR0LQ', 'Management', 'Stephen P. Robbins ', 14, '01/09/2017', 'Pearson', 753, 3963, 'Amazon', 'B01N5RR0LQ.jpg', 'B01N5RR0LQ.pdf', 0),
('B075HHH1GJ', 'Sams Teach Yourself Java in 24 Hours', ' Cadenhead Rogers', 8, '09/08/2017', 'Sams Publishing', 432, 1539, 'Amazon', 'B075HHH1GJ.jpg', 'B075HHH1GJ.pdf', 0),
('B09HBGN45C', 'Software Engineering: A Practitioner\'s Approach', ' Roger Pressman', 0, '09/10/2019', 'McGraw-Hill Higher E', 705, 7700, 'Amazon', 'B09HBGN45C.jpg', 'B09HBGN45C.pdf', 0),
('B09KGXQ2SB', 'Numerical Methods', 'E Balagurusamy', 2, '01/04/2022', 'Dreamtech Press ', 295, 424, 'Amazon', 'B09KGXQ2SB.jpg', 'B09KGXQ2SB.pdf', 0);

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
  ADD PRIMARY KEY (`isbn`);

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
