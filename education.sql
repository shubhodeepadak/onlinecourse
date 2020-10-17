-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 06:08 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pno` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `username`, `pno`, `email`, `password`) VALUES
(1, 'shubhodeep', 'adak', 'shubho', '9353096713', 'shubhodeepadak9@gmail.com', '654321');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `cid` int(11) NOT NULL,
  `inst_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `categ` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `module1` varchar(50) NOT NULL,
  `module2` varchar(50) NOT NULL,
  `module3` varchar(50) NOT NULL,
  `module4` varchar(50) NOT NULL,
  `module5` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`cid`, `inst_id`, `name`, `categ`, `date`, `module1`, `module2`, `module3`, `module4`, `module5`) VALUES
(1, 1, 'Python for Data Science', 'PYTHON', '2020-02-13', 'NumPy', 'Pandas', 'Matplotlib', 'Seaborn', 'Ipython'),
(2, 1, 'Python for everybody', 'datascience', '2020-02-04', 'Numpy', 'Pandas', 'Matplotlib', 'seaborn', 'Ipython'),
(4, 1, 'Python for AI', 'Artificial', '2020-02-06', 'Introduction', 'Numpy and Pandas', 'Matplotlib and Seaborn', 'Algorithms', 'Practicals'),
(5, 2, 'The beginners guide to Artificial Intelligence', 'Artificial', '2020-02-05', 'Introduction', 'Moving', 'Cars', 'Waypoint', 'NavMeshes'),
(6, 5, 'Artificial Intelligence A-Z', 'Artificial', '2020-03-05', 'Introduction', 'Built-an Intelligence', 'Dynamic Programing', 'Practical Implementation', 'Case study of self driving cars'),
(7, 3, 'Data Science A-Z', 'datascience', '2020-02-05', 'Numpy', 'Pandas', 'Matplotlib', 'seaborn', 'Pandas Visualisation'),
(8, 4, 'Data Science in real life', 'datascience', '2020-03-02', 'Visualisation', 'Introduction to Tabluea', 'Modelling', 'Stars refresher', 'Simple learning'),
(9, 2, 'Deep learning', 'DL', '2020-05-06', 'Introduction', 'Training a machine ', 'Introduction to deep learning', 'Training neural network ', 'Practical implementation'),
(10, 2, 'Machine Learning', 'ML', '2020-02-12', 'Introduction', 'Brief review of Data Science', 'Important Algorithms', 'Implementation', 'Practical Approach'),
(12, 3, 'Deep learning A-Z', 'DL', '2020-03-10', 'Introduction', 'Prelimenaries', 'Classifying more than 2 things', 'Training neural network', 'Practical Machine learning'),
(13, 3, 'Machine Learning full course', 'ML', '2020-02-04', 'Numpy', 'Pandas', 'Matplotlib', 'seaborn', 'Practical Approach'),
(14, 4, 'Natural learning', 'NLP', '2020-02-06', 'Foundations of NLP', 'Neuro linguistic programing', 'NLP part 1', 'NLP part 2', 'Practical example'),
(15, 4, 'Full course of C', 'C', '2020-01-01', 'Basics of C', 'Basic topics ', 'Process oriented approach', 'basic programing', 'Advance problems'),
(16, 5, 'Full approach on Natural Language processing', 'NLP', '2020-02-24', 'Introduction', 'History of NLP', 'Developmental period', 'Cause and effect', 'neuro transmitter'),
(17, 5, 'The complete cyber sequrity course', 'cyber', '2020-03-04', 'Introduction', 'why it is required?', 'Goals and learning', 'Routers', 'Firewalls'),
(18, 6, 'Blockchain and Bitcoin fundamentals', 'blockchain', '2020-02-03', 'Introduction', 'Blockchain fundamentals', 'Bitcoins fundamentals', 'Getting started with bitcoins', 'Review and free resources'),
(19, 1, 'Complete Python Course', 'python', '2019-12-05', 'Introduction', 'Basics', 'Advance', 'OOP\'s introduction', 'Advance OOP\'s'),
(20, 1, 'Getting started with', 'C++', '2020-02-05', 'Basics', 'Brief History', 'Basics', 'OOP\'s introduction', 'Advance OOP\'s'),
(21, 6, 'Getting started', 'C', '2020-02-12', 'Introduction', 'Brief History', 'Basics', 'Oops', 'Advance'),
(22, 6, 'Gettingstarted', 'C', '2020-02-12', 'Introduction', 'Brief history', 'Basics', 'Oops', 'Advance'),
(23, 7, 'Introduction to java', 'Java', '2020-02-12', 'Introduction', 'Basics', 'Advance topics of Java', 'OOP\'s introduction', 'Advance OOP\'s'),
(24, 7, 'The complete JavaScript Course', 'javascript', '2020-02-06', 'Basics', 'Introduction', 'Advance', 'OOP\'s introduction', 'Advance OOP\'s'),
(25, 7, 'R', 'R', '2020-02-13', 'Introduction', 'Basics', 'Advance', 'DataScience', 'Advance'),
(27, 6, 'WebDevelopment', 'webdev', '2020-03-04', 'HTML', 'CSS', 'JavaScript', 'Python', 'Php'),
(28, 6, 'Android Development', 'app', '2020-01-09', 'Introduction to Androids', 'Basics', 'Tools used', 'JavaScript', 'Practical example'),
(29, 4, 'Complete Programing', 'programing', '2020-02-26', 'Introduction to Programing', 'Understanding of Programing', 'how to solve', 'Best Languages', 'Best Approach'),
(31, 3, 'Data Base Management', 'database', '2020-02-25', 'Introduction', 'RDBMS', 'Data Definition Language', 'Data Manipulation Language', 'Queries');

-- --------------------------------------------------------

--
-- Table structure for table `enroll`
--

CREATE TABLE `enroll` (
  `id` int(11) NOT NULL,
  `stdid` int(11) NOT NULL,
  `instid` int(11) NOT NULL,
  `courseid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enroll`
--

INSERT INTO `enroll` (`id`, `stdid`, `instid`, `courseid`) VALUES
(1, 1, 1, 1),
(2, 1, 1, 4),
(3, 1, 1, 2),
(4, 1, 3, 31);

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pno` varchar(10) NOT NULL,
  `description` varchar(250) NOT NULL,
  `country` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`id`, `fname`, `lname`, `username`, `pno`, `description`, `country`, `gender`, `email`, `pass`) VALUES
(1, 'Josh', 'Portilla', 'josh', '9806752341', 'Josh Potilla, Head of Data Science, Pierian Data inc.', 'America', 'Male', 'josh@gmail.com', '123456'),
(2, 'Colt ', 'Steele', 'colt', '9807651432', 'Back-end Developer at Facebook', 'England', 'Male', 'colt@gmail.com', '123456'),
(3, 'Tim ', 'Buchalka', 'tim', '8299514113', '10 years working experience as data scientist in google', 'Austria', 'Male', 'tim@gmail.com', '123456'),
(4, 'Rahul', 'Shetty', 'rahul', '998450321', 'Java, Selenium WebDriver', 'India', 'Male', 'rahul@gmail.com', '123456'),
(5, 'Mohit', 'Kesarwani', 'mohit', '9807651432', 'Data Scientist', 'India', 'Male', 'mohit@gmail.com', '123456'),
(6, 'David', 'Willey', 'david', '9892710719', 'Machine Learning Engineer and Data Scientist', 'America', 'Male', 'david@gmail.com', '123456'),
(7, 'Swiddy', 'Taylor', 'swiddy', '9829192719', 'Data Scientist', 'England', 'Female', 'swiddy@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pno` varchar(10) NOT NULL,
  `country` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `lname`, `username`, `pno`, `country`, `gender`, `email`, `pass`) VALUES
(1, 'shubho', 'adak', 'ayushya', '9452446637', 'India', 'Male', 'shubh@gmail.com', '123456'),
(2, 'Priya', 'Puniya', 'priya', '8299514113', 'India', 'Female', 'priya@gmail.com', '123456'),
(3, 'Aman', 'Srivastava', 'aman', '8936448173', 'India', 'Male', 'aman@gmail.com', '123456'),
(4, 'Akshat', 'Jaiswal', 'akshat', '8976540321', 'India', 'Male', 'akshat@gmail.com', '123456'),
(5, 'Sakshi', 'Agarwal', 'sakshi', '7892719311', 'India', 'Female', 'sakshi@gmail.com', '123456'),
(6, 'Surabhi', 'Goyel', 'surabhi', '9792189453', 'India', 'Female', 'surabhi@gmail.com', '123456'),
(7, 'Nancy', 'Kesarwani', 'nancy', '7892719311', 'India', 'Female', 'nancy@gmail.com', '123456'),
(8, 'Shrishti', 'Rani', 'shrishti', '9304651440', 'India', 'Female', 'shrishtiguggy@gmail.com', '123456'),
(9, 'Pratham', 'Kumar', 'pratham', '9309756123', 'India', 'Male', 'pratham@gmail.com', '123456'),
(10, 'ayush', 'kumar', 'shubho', '9810189187', 'India', 'Male', 'ak1324@gmail.com', '123456'),
(11, 'Tamanna', 'Singh', 'tamanna', '9719719271', 'India', 'Female', 'tamanna@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `enroll`
--
ALTER TABLE `enroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `enroll`
--
ALTER TABLE `enroll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
