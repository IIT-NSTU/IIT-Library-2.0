-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2022 at 12:51 AM
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
-- Table structure for table `accession_isbn`
--

CREATE TABLE `accession_isbn` (
  `accession` char(15) NOT NULL,
  `isbn` char(13) NOT NULL,
  `borrowed` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accession_isbn`
--

INSERT INTO `accession_isbn` (`accession`, `isbn`, `borrowed`) VALUES
('A10915821043', '9780071072830', 'yes'),
('A11080388896', '9780070141605', 'maybe'),
('A11092310280', '9780071072830', 'yes'),
('A11106350042', '9780070701984', 'no'),
('A11371880057', '9780071072830', 'yes'),
('A11405937950', '9780071072830', 'yes'),
('A11450869300', '9780071072830', 'no'),
('A11486702125', '9780071072830', 'no'),
('A11615918837', '9780070701984', 'no'),
('A11833317246', '9780070701984', 'no'),
('A11840542993', '9780071072830', 'no'),
('A11990145513', '9780071072830', 'no'),
('A12049463195', '9780071072830', 'no'),
('A12247253681', '9780070240353', 'yes'),
('A12342804002', '9780071072830', 'no'),
('A12823426348', '9780071072830', 'no'),
('A13560322582', '9780070141605', 'no'),
('A13580234155', '9780070240353', 'yes'),
('A13599613658', '9780070240353', 'yes'),
('A13653657674', '9780070701984', 'no'),
('A13826444763', '9780070141605', 'no'),
('A14129768616', '9780070701984', 'no'),
('A14450592673', '9780070240353', 'no'),
('A14529291569', '9780070240353', 'no'),
('A15393875004', '9780070701984', 'no'),
('A15547470274', '9780071072830', 'no'),
('A15690510751', '9780070240353', 'no'),
('A15992152862', '9780070240353', 'no'),
('A16530227761', '9780071072830', 'no'),
('A16782308768', '9780070701984', 'no'),
('A17119979357', '9780070701984', 'no'),
('A17182305829', '9780070141605', 'no'),
('A17385571247', '9780070701984', 'no'),
('A17550806302', '9780070701984', 'no'),
('A17602814280', '9780070701984', 'no'),
('A17722255922', '9780070141605', 'no'),
('A18047157210', '9780071072830', 'no'),
('A18207794256', '9780071072830', 'no'),
('A18217120692', '9780071072830', 'no'),
('A18618185524', '9780070141605', 'no'),
('A18650512459', '9780071072830', 'no'),
('A18765751947', '9780070701984', 'no'),
('A19242050995', '9780070240353', 'no'),
('A19675513933', '9780070141605', 'no');

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
('9780070141605', 'FUNDAMENTALS OF COMPUTERS', 'E Balagurusamy', 0, '', 'McGraw Hill', 495, 0, '', '9780070141605.jpg', '9780070141605.pdf', 7),
('9780070240353', 'Schaum\'s Outline of Programming with C 2nd Edition', 'Byron S. S. Gottfrie', 2, '06-22-1996', 'McGraw Hill', 552, 3500, 'Amazon', '9780070240353.png', '9780070240353.pdf', 8),
('9780070701984', 'Data Structures With C', 'Seymour Lipschutz ', 0, '', '', 554, 0, '', '9780070701984.jpg', '9780070701984.pdf', 12),
('9780071072830', 'Object Orinted Programming With C++', ' E Balaguruswamy', 0, '01/01/2011', 'McGraw Hill', 928, 798, 'Amazon', '9780071072830.jpg', '9780071072830.pdf', 17),
('9780071346665', 'Programming and Customizing the AVR Microcontrolle', 'Dhananjay Gadre', 1, '10/09/2000', 'McGraw-Hill Educatio', 366, 596, 'Amazon', '9780071346665.jpg', '9780071346665.pdf', 0),
('9780071470384', 'Discrete Mathematics', 'Seymour Lipschutz ', 3, '06/21/2007', 'McGraw-Hill', 474, 1102, 'Amazon', '9780071470384.jpg', '9780071470384.pdf', 0),
('9780072263855', 'Java: The Complete Reference', 'Herbert Schildt', 7, '12/15/2006', 'McGraw-Hill Osborne ', 1024, 4202, 'Amazon', '9780072263855.jpg', '9780072263855.pdf', 0),
('9780072958867', 'Database System Concepts', 'Abraham Silberschatz', 5, '05/17/2005', 'McGraw-Hill Science/', 1142, 1111, 'Amazon', '9780072958867.jpg', '', 0),
('9780073660097', 'Electric Machinery', 'Charles Kingsley Jr.', 6, '07/25/2002', ' ??? McGraw-Hill Scien', 704, 754, 'Amazon', '9780073660097.jpg', '9780073660097.pdf', 0),
('9780074638804', 'C++ The Complete Reference', ' Schildt Herbert ', 3, '01/01/1999', 'Tata Mcgraw Hill', 1007, 1196, 'Amazon', '9780074638804.jpg', '9780074638804.pdf', 0),
('9780077103934', 'Practical Object-Oriented Design Using UML', 'Mark Priestley', 2, '12/01/2003', '??? McGraw-Hill Educat', 372, 1777, 'Amazon', '9780077103934.jpg', '9780077103934.pdf', 0),
('9780078022128', 'Software Engineering: A Practitioner\'s Approach', 'Roger S. Pressman', 5, '01/23/2014', 'McGraw Hil', 888, 5871, 'Amazon', '9780078022128.jpg', '9780078022128.pdf', 0),
('9780078022159', 'Database System Concepts', 'Abraham Silberschatz', 7, '02/19/2019', ' McGraw Hill', 1376, 5299, 'Amazon', '9780078022159.jpg', '9780078022159.pdf', 0),
('9780123814791', 'Data Mining: Concepts and Techniques', 'Micheline Kamber', 3, '06/09/2011', 'Morgan Kaufmann', 740, 1792, 'Amazon', '9780123814791.jpg', '9780123814791.pdf', 0),
('9780128243466', 'Introduction to Probability and Statistics for Eng', 'Sheldon M. Ross ', 6, '09/11/2020', '??? Academic Press', 692, 1731, 'Amazon', '9780128243466.jpg', '9780128243466.pdf', 0),
('9780130810816', 'UNIX Network Programming', 'W. Richard Stevens', 2, '08/01/1998', 'Prentice Hall', 400, 1392, 'Amazon', '9780130810816.jpg', '9780130810816.pdf', 0),
('9780132065412', 'Operational Amplifiers and Linear Integrated Circu', 'Robert F. Coughlin', 6, '01/01/1997', 'Prentice Hall Colleg', 558, 1164, 'Amazon', '9780132065412.jpg', '9780132065412.pdf', 0),
('9780132737968', 'Digital Fundamentals', 'Thomas L. Floyd', 11, '09/09/2014', 'Pearson', 913, 7499, 'Amazon', '9780132737968.jpg', '9780132737968.pdf', 0),
('9780132936491', 'Problem Solving and Program Design in C', 'Jeri R. Hanly ', 8, '03/04/2012', ' Pearson', 840, 2730, 'Amazon', '9780132936491.jpg', '9780132936491.pdf', 0),
('9780134101613', 'Computer Organization and Architecture', 'William Stallings', 6, '01/12/2015', 'Pearson', 826, 7501, 'Amazon', '9780134101613.jpg', '', 0),
('9780134438986', 'Thomas\' Calculus', 'Joel Hass', 14, '03/13/2017', 'Pearson', 1224, 3647, 'Amazon', '9780134438986.jpg', '', 0),
('9780137035151', 'Software Engineering', 'Ian Sommerville', 9, '03/13/2010', 'Pearson', 0, 0, 'Amazon', '9780137035151.jpg', '9780137035151.pdf', 0),
('9780139141010', 'Theory and Application of Digital Signal Processin', 'Lawrence R. Rabiner ', 1, '05/31/1975', 'Prentice Hall', 762, 2200, 'Amazon', '9780139141010.jpg', '9780139141010.pdf', 0),
('9780139586538', 'Control System Design', 'Graham C. Goodwin ', 0, '10/06/2000', 'Pearson', 944, 7618, 'Amazon', '9780139586538.jpg', '9780139586538.pdf', 0),
('9780199465873', 'Software Testing', 'NARESH CHAUHAN ', 2, '01/01/2016', 'OXFORD UNIVERSITY PR', 629, 2174, 'Amazon', '9780199465873.jpg', '9780199465873.pdf', 0),
('9780201042979', 'An Introduction to Distributed Systems', 'Bennet P. Lientz ', 0, '01/01/1981', ' ??? Addison Wesley', 588, 1267, 'Amazon', '9780201042979.jpg', '9780201042979.pdf', 0),
('9780201441246', 'Introduction to Automata, Theory, Languages and Co', 'John E. Hopcroft ', 2, '05/31/2001', ' Addison-Wesley', 521, 1523, 'Amazon', '9780201441246.jpg', '9780201441246.pdf', 0),
('9780201498400', 'Data Structures and Algorithm Analysis in C', 'Mark Allen Weiss', 2, '09/19/1996', '???Pearson', 528, 1104, 'Amazon', '9780201498400.jpg', '9780201498400.pdf', 0),
('9780201612448', 'Computer Algorithms: Introduction to Design and An', 'Sara Baase ', 3, '11/05/1999', 'Pearson', 694, 10178, 'Amazon', '9780201612448.jpg', '9780201612448.pdf', 11),
('9780262033848', 'Introduction to Algorithms', 'Thomas H. Cormen', 3, '07/31/2009', 'The MIT Press', 1313, 7499, 'Amazon', '9780262033848.jpg', '9780262033848.pdf', 0),
('9780408002950', 'A Short Course in Foundation Engineering', 'N.E. Simons and B.K.', 0, '10/22/2013', 'Butterworth-Heineman', 168, 3035, 'Amazon', '9780408002950.jpg', '9780408002950.pdf', 0),
('9780470458365', 'Advanced Engineering Mathematics', ' Erwin Kreyszig', 10, '08/162011', 'Wiley', 1280, 6447, 'Amazon', '9780470458365.jpg', '9780470458365.pdf', 0),
('9780521058599', 'Better English Pronunciation', 'J. D. O\'Connor', 2, '06/02/1967', 'Cambridge University', 82, 2014, 'Amazon', '9780521058599.jpg', '9780521058599.pdf', 0),
('9780521675420', 'Essential Grammar in Use', ' Helen Naylor', 2, '01/29/2007', 'Cambridge University', 152, 3187, 'Amazon', '9780521675420.jpg', '9780521675420.pdf', 0),
('9780672337178', 'Java in 24 Hours', 'Rogers Cadenhead', 7, '05/30/2014', '??? Sams', 496, 225, 'Amazon', '9780672337178.jpg', '9780672337178.pdf', 0),
('9780789729842', 'Novell Netware 6.5: Administrator\'s Handbook', 'Jeffrey L. Harris', 1, '01/01/2004', 'Novell Pr', 776, 1035, 'Amazon', '9780789729842.jpg', '9780789729842.pdf', 0),
('9780805304107', 'Programming in Turbo Pascal', 'Walter Savitch ', 2, '02/01/1989', 'Addison Wesley Publi', 715, 2824, 'Amazon', '9780805304107.jpg', '9780805304107.pdf', 0),
('9781105105685', 'Object-Oriented Programming With ANSI-C', 'Axel Schreiner ', 0, '09/30/2011', 'Axel T. Schreiner / ', 223, 0, 'Amazon', '9781105105685.jpg', '9781105105685.pdf', 0),
('9781119746355', 'Applied Statistics and Probability for Engineers ', ' Douglas C. Montgome', 7, '07/08/2020', 'Wiley', 720, 12495, 'Amazon', '9781119746355.jpg', '9781119746355.pdf', 0),
('9781119800361', 'Operating System Concepts', 'Abraham Silberschatz', 10, '02/09/2021', 'Wiley', 1040, 8384, 'Amazon', '9781119800361.jpg', '9781119800361.pdf', 0),
('9781260440232', 'Java: The Complete Reference', ' Herbert Schildt', 11, '12/12/2018', 'McGraw Hill', 1248, 5700, 'Amazon', '9781260440232.jpg', '', 0),
('9781498763974', 'Data Mining', 'Richard J. Roiger ', 2, '06/01/2017', 'hapman and Hall/CRC', 529, 2662, 'Amazon', '9781498763974.jpg', '9781498763974.pdf', 0),
('9781556353505', 'Distributed Operating Systems', 'Andrew S. Tanenbaum', 1, '09/04/1994', 'Pearson', 632, 3146, 'Amazon', '9781556353505.jpg', '9781556353505.pdf', 0),
('9781558604742', 'Fundamentals of the Theory of Computation: Princip', 'Raymond Greenlaw', 1, '07/14/1998', ' Morgan Kaufmann', 336, 2038, 'Amazon', '9781558604742.jpg', '9781558604742.pdf', 0),
('9781617290183', 'Machine Learning in Action', 'Peter Harrington', 1, '04/03/2012', '??? Manning', 382, 3499, 'Amazon', '9781617290183.jpg', '9781617290183.pdf', 0),
('9781861003010', 'Professional Linux Programming', ' Neil Matthew and Ri', 0, '09/01/2000', 'Apress; illustrated ', 1200, 3000, 'Amazon', '9781861003010.jpg', '9781861003010.pdf', 0),
('9788121924375', 'A Textbook of Electrical Technology', 'Theraja', 1, '07/06/2013', ' S Chand & Co Ltd', 2745, 2100, 'Amazon', '9788121924375.jpg', '', 0),
('9788131525296', 'Introduction to the Theory of Computation', ' Sipser', 2, '09/13/2014', ' Cengage India', 458, 7299, 'Amazon', '9788131525296.jpg', '9788131525296.pdf', 0),
('9788177581218', 'Software Testing: Principles and Practice', 'Srinivasan Desikan ', 0, '08/10/2009', 'Pearson Education Ca', 388, 295, 'Amazon', '9788177581218.jpg', '9788177581218.pdf', 0),
('9789811045844', 'Networking Communication and Data Knowledge Engine', 'Gregorio Martinez Pe', 1, '11/13/2017', 'Springer', 450, 1731, 'Amazon', '9789811045844.jpg', '9789811045844.pdf', 0),
('9999', '2', '2', 2, '2022-09-06', '2', 2, 2, '2', '9999.png', '9999.png', 9999),
('B001Y0MU7G', 'Network Analysis', 'M.E. Van Valkenburg', 4, '01/01/1958', ' Prentice-Hall', 449, 3605, 'Amazon', 'B001Y0MU7G.jpg', 'B001Y0MU7G.pdf', 0),
('B005FCNXS4', 'An Introduction to Database Systems', ' C.J. Date. Addison-', 8, '01/01/2004', 'Addison Wesley', 983, 29900, 'Amazon', 'B005FCNXS4.jpg', '', 1),
('B00HXFJFGK', 'Cyber Security', 'John G. Voeller', 1, '01/16/2014', 'Wiley', 126, 1999, 'Amazon', 'B00HXFJFGK.jpg', 'B00HXFJFGK.pdf', 0),
('B012046LV0', 'Operational Amplifiers and Linear Integrated Circu', ' Frederick F. Drisco', 0, '01/01/1900', 'Prentice-Hall', 558, 2450, 'Amazon', 'B012046LV0.jpg', 'B012046LV0.pdf', 0),
('B01N5RR0LQ', 'Management', 'Stephen P. Robbins ', 14, '01/09/2017', 'Pearson', 753, 3963, 'Amazon', 'B01N5RR0LQ.jpg', '', 0),
('B075HHH1GJ', 'Sams Teach Yourself Java in 24 Hours', ' Cadenhead Rogers', 8, '09/08/2017', 'Sams Publishing', 432, 1539, 'Amazon', 'B075HHH1GJ.jpg', 'B075HHH1GJ.pdf', 0),
('B09HBGN45C', 'Software Engineering: A Practitioner\'s Approach', ' Roger Pressman', 0, '09/10/2019', 'McGraw-Hill Higher E', 705, 7700, 'Amazon', 'B09HBGN45C.jpg', '', 0),
('B09KGXQ2SB', 'Numerical Methods', 'E Balagurusamy', 2, '01/04/2022', 'Dreamtech Press ', 295, 424, 'Amazon', 'B09KGXQ2SB.jpg', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` char(15) NOT NULL,
  `user_id` char(15) NOT NULL,
  `accession_number` char(15) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `user_id`, `accession_number`, `date`) VALUES
('B19645793170', 'T32449247494', 'A11080388896', '2022-09-22 04:11:57');

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `borrow_id` char(15) NOT NULL,
  `user_id` char(15) NOT NULL,
  `accession_number` char(15) NOT NULL,
  `borrow_date` varchar(30) NOT NULL,
  `due_date` varchar(30) NOT NULL,
  `return_date` varchar(30) NOT NULL,
  `fine` char(10) NOT NULL,
  `borrowed_times` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`borrow_id`, `user_id`, `accession_number`, `borrow_date`, `due_date`, `return_date`, `fine`, `borrowed_times`) VALUES
('B10924603333', 'T32449247494', 'A13599613658', '2022-09-21 22:35:22', '2022-09-28 22:35:22', '', '', 0),
('B13761643252', 'T32449247494', 'A11371880057', '2022-09-21 21:45:18', '2022-09-28 21:45:18', '', '', 0),
('B14787681928', 'T32449247494', 'A12247253681', '2022-09-21 22:35:24', '2022-09-28 22:35:24', '', '', 0),
('B14903933509', 'T32449247494', 'A11092310280', '2022-09-21 21:45:20', '2022-09-28 21:45:20', '', '', 0),
('B16982992636', 'T32449247494', 'A11405937950', '2022-09-21 21:45:22', '2022-09-28 21:45:22', '', '', 0),
('B18883963276', 'T32449247494', 'A13580234155', '2022-09-21 22:35:25', '2022-09-28 22:35:25', '', '', 0),
('B19648702040', 'T32449247494', 'A10915821043', '2022-09-21 21:45:21', '2022-09-28 21:45:21', '', '', 0);

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
('L13226166784', 'Naimur Rahman', 'Maijdee', '3400', 'jessore', '5449', '01793222826', 'naimurrahman71@gmail.com', 'naimurrahman', 'librarian');

-- --------------------------------------------------------

--
-- Table structure for table `requested_books`
--

CREATE TABLE `requested_books` (
  `request_id` char(12) NOT NULL,
  `user_id` char(15) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(20) NOT NULL,
  `edition` int(2) NOT NULL,
  `publisher` varchar(20) NOT NULL,
  `source` varchar(50) NOT NULL,
  `isbn` char(13) NOT NULL,
  `status` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requested_books`
--

INSERT INTO `requested_books` (`request_id`, `user_id`, `title`, `author`, `edition`, `publisher`, `source`, `isbn`, `status`) VALUES
('R13325362806', 'T32449247494', 'Java', 'ABC', 4, 'XYZ', 'Amazon', '12312313', 'rejected'),
('R14042075503', 'T32449247494', 'C Program', 'ABC', 3, 'XYZ', 'Amazon', '1234', 'new'),
('R14946701977', 'T32449247494', 'Java', 'XYZ', 2, 'ABC', 'Amazon', '32142', 'processing'),
('R16587371400', 'T32449247494', 'C Programming', 'ABC', 4, 'XYZ', 'Amazon', '122323123', 'resolved');

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
  `email_address` varchar(50) NOT NULL,
  `roll_number` char(11) NOT NULL,
  `session` char(9) NOT NULL,
  `designation` char(20) NOT NULL,
  `pin` char(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `father_name`, `mother_name`, `date_of_birth`, `present_address`, `pr_post_code`, `permanent_address`, `pa_post_code`, `mobile_number`, `email_address`, `roll_number`, `session`, `designation`, `pin`, `username`, `password`, `status`) VALUES
('S14549362345', 'Abdullah Alif', 'Noor Mohammad Shadin', 'Parvin Akter', '2000-08-09', 'Maijdee', '3400', 'Brahmanbaria', '3640', '0170197886', 'abdullah.alif.166@gmail.com', 'Ash1925009M', '2018-19', '', '', 'abdullahalif166', '1234alif420', 'approved'),
('T32449247494', 'PROSANTO DEB', 'Samir Chandra Deb', 'Mukta Rani Deb', '2001-06-14', 'maijdee', '3400', 'Brahmanbaria', '3400', '01793222825', 'prosantodeb7@gmail.com', '', '', 'Lecturer', '123456', 'Prosanto7', '1234', 'approved'),
('T35796725945', 'Samir Chandra Deb', 'Shamol Chandra Deb', 'Vanu Bala Deb', '2022-09-08', 'Brahmanbaria', '3400', 'Brahmanbaria', '3400', '01793222825', 'prosanto2514@student.nstu.edu.bd', '', '', 'Professor', '123456', 'Samir71', '1234', 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accession_isbn`
--
ALTER TABLE `accession_isbn`
  ADD PRIMARY KEY (`accession`),
  ADD KEY `isbn` (`isbn`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`isbn`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `accession_number` (`accession_number`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`borrow_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `accession_number` (`accession_number`);

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
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email_address` (`email_address`,`pin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accession_isbn`
--
ALTER TABLE `accession_isbn`
  ADD CONSTRAINT `accession_isbn_ibfk_1` FOREIGN KEY (`isbn`) REFERENCES `book` (`isbn`);

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`accession_number`) REFERENCES `accession_isbn` (`accession`);

--
-- Constraints for table `borrow`
--
ALTER TABLE `borrow`
  ADD CONSTRAINT `borrow_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `borrow_ibfk_2` FOREIGN KEY (`accession_number`) REFERENCES `accession_isbn` (`accession`);

--
-- Constraints for table `requested_books`
--
ALTER TABLE `requested_books`
  ADD CONSTRAINT `id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `requested_books_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
