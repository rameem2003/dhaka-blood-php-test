-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2023 at 05:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dhaka_blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `admin_user` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_user`, `admin_password`) VALUES
(1, 'fahmida', '451628'),
(2, 'rameem', '451638');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `donate_date` date NOT NULL,
  `blood` varchar(5) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `f_name`, `l_name`, `u_name`, `dob`, `location`, `donate_date`, `blood`, `photo`, `phone`, `fb`, `email`, `password`, `gender`) VALUES
(2, 'MH', 'Rameem', 'rameem2003', '2003-11-04', 'Mirpur, Dhaka', '2022-06-02', 'A+', 'me.jpg', '01409029641', 'https://www.facebook.com/mahmood.rameem/', 'rameem2019@gmail.com', '588242', 'male'),
(3, 'Fahmida', 'Yeasmin', 'fahmida1998', '1998-05-05', 'Vashantek, Dhaka', '2022-06-21', 'A+', 'fahmida.jpg', '01828810843', 'https://www.facebook.com/fahmida.yeasmin.378', 'fahmidayeasmin.me@gmail.com', '123', 'female'),
(5, 'Emon', 'Chowdhury ', 'emon.637', '2002-01-30', 'Mirpur, Dhaka', '2022-06-21', 'O+', 'IMG_20220601_175837-02.jpeg', '01731905097', 'https://www.facebook.com/emon.5677', 'nayemhasen3000@gmail.com', 'emon1234', 'male'),
(7, 'MD Mahabul', 'Alam', 'mahabul', '2003-03-10', 'Mirpur, Dhaka', '2022-01-27', 'B+', 'inbound8645996178205896962.jpg', '01307660195', 'https://www.facebook.com/md.mahabulalom.5458', 'mdmahabulalamerin@gmail.com', 'mahabul12', 'male'),
(8, 'Md.', 'Rabbi', 'Rabbi', '2001-07-10', 'Badda, Dhaka', '2022-04-20', 'O+', 'inbound1763061933542395677.jpg', '01837234904', 'https://www.facebook.com/bipul.hasanrabbi', 'bipulhasanrabbi@gmail.com', '12345', 'male'),
(9, 'Junaid', 'islam', 'junaidislam', '2002-02-13', 'brahmanbaria ', '2021-08-15', 'A+', 'inbound1909809449.jpg', '01647865987', 'https://www.facebook.com/profile.php?id=100008579554493', 'mdjunaidislam629@gmail.com ', 'JUnAid.[668', 'male'),
(10, 'Shourav', 'Shahriar ', 'Md. Shourav', '1997-04-03', 'Tangail', '2022-06-21', 'B+', 'inbound812652157.jpg', '01750498023', 'https://www.facebook.com/shourav.mbd', 'Shahriarshourav23@gmail.com', 'shourav', 'male'),
(11, 'Muhaimin', 'Shihab', 'muhaiminshihab', '2001-04-17', 'Mirpur, Dhaka', '2022-06-01', 'AB+', 'photo.jpeg', '01829004863', 'https://facebook.com/muhaiminshihab', 'hostforshihab@gmail.com', 'shihab123', 'male'),
(12, 'Nazmul', 'Islam', 'nazmul101112', '2001-11-07', 'Mirpur, Dhaka', '2022-04-28', 'A+', 'inbound6188951507552945778.jpg', '01959061063', 'https://www.facebook.com/nazmulislam101112', 'nazmulislam101112@gmail.com', 'nazmul00', 'male'),
(13, 'Musfika', 'Nawar', 'Musfika ', '2001-01-21', 'Dohar, Nawabganj ', '2022-06-22', 'O+', '', '01936584342', 'https://www.facebook.com/musfika.nawar', 'musfikanawar14@gmail.com', '27881', 'famale'),
(16, 'Abdul', 'Baten', 'baten2003', '2003-03-27', 'Vashantek, Dhaka', '2022-09-17', 'AB+', 'baten.jpg', '01872-86947', 'https://www.facebook.com/AbdulBaten9472', 'abbaten3212000@gmail.com', '451627', 'male'),
(17, 'Bithi', 'Akter', 'bithi', '2003-12-20', 'Mirpur, Dhaka', '2023-02-17', 'B+', 'bithi.jpg', '0150489489', 'https://www.facebook.com/ashpiajannat.bithi', 'Ashpiajannat88@gmail.com', '123', 'female'),
(18, 'Jahidul', 'Islam', 'rasel70', '2003-09-20', 'Badda, Dhaka', '2023-02-24', 'AB+', 'jahid_rasel.jpg', '01886561956', 'https://www.facebook.com/jahedulislam.hridoy.564', 'ridoyislam202002@gmail.com', '451670', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `unit` int(255) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `area` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `name`, `hospital`, `phone`, `unit`, `blood_group`, `date`, `time`, `area`, `address`) VALUES
(1, 'Mahmood Hassan Rameem', 'Marks Medical Hospital', '01409029641', 1, 'A+', '2023-02-24', '18:30:00', 'Mirpur, Dhaka', '21'),
(2, 'Fahmida Yeasmin', 'Marks Medical Hospital', '01828810843', 1, 'A+', '2023-02-24', '18:00:00', 'Kafrul, Dhaka', 'Vashantek bazar'),
(3, 'Abdul Baten', 'National Heart Foundation', '01872-86947', 2, 'AB+', '2023-02-25', '22:00:00', 'Mirpur, Dhaka', 'Mirpur 2'),
(4, 'Jahedul Islam Rasel', 'Badda General Hospital', '01886561956', 1, 'B+', '2023-02-25', '10:00:00', 'Badda, Dhaka', 'Badda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
