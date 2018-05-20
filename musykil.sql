-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2017 at 08:33 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musykil`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `position` varchar(1000) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `position`, `username`, `password`) VALUES
('Faiq Afif', 'Pegawai Psikologi', 'faiq', 'afif'),
('Farid Ridzuan', 'Ustaz', 'farid', 'ridzuan'),
('Kamal Amin', 'Pegawai PIMPIN', 'kamal', 'amin');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `basic`
--

CREATE TABLE `basic` (
  `id` int(11) NOT NULL,
  `intro` varchar(1000) NOT NULL,
  `hadis` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basic`
--

INSERT INTO `basic` (`id`, `intro`, `hadis`) VALUES
(1, 'E-musykil merupakan suatu platform untuk semua pelajar dan kakitangan Universiti Malaysia Pahang mahupun orang awam untuk bertanya soalan berkenaan kekeliruan dalam agama Islam mahupun berkenaan kerjaya kepada para ilmuan agama ', 'Jauhilah segala yang haram nescaya kamu menjadi orang yang paling beribadah. (HR Ahmad)');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `category` varchar(25) NOT NULL,
  `scholar` varchar(25) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `answer` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `category`, `scholar`, `question`, `answer`) VALUES
(6, 'AWAM', 'Farid Ridzuan', 'Apakah yg dimaksudkan dengan ihsan?', 'Ihsan adalah ketepatan atau kesempurnaan (perfection or precsion). Pada makna syaraâ€™ ia bermaksud melakukan sesuatu IBADAT dengan BAIK dan TEPAT sebagaimana yang diperintahkan Allah swt'),
(7, 'KAKITANGAN', 'Faiq Afif', 'Apakah yang dimaksudkan dengan bersangka baik (husnul zon) dengan Allah SWT  dan bersangka baik sesama manusia?', 'Maksud bersangka baik dengan Allah ialah rasa takut dan harap yang saling bergandingan, ataupun rasa takut mengatasi rasa harap. '),
(8, 'AWAM', 'Faiq Afif', 'Bagaimana pula cara kita bersangka baik sesama manusia?', 'Tidak menyebarkan keburukan saudara seIslam yang lain. Apabila mendapat berita daripada orang fasik untuk aibkan saudaranya dia siasat dahulu dan tidak akan mudah mempercayainya.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `basic`
--
ALTER TABLE `basic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
