-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2022 at 12:49 AM
-- Server version: 10.5.12-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id19143575_dhaka_blood`
--

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
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `f_name`, `l_name`, `u_name`, `dob`, `location`, `donate_date`, `blood`, `photo`, `phone`, `fb`, `email`, `password`) VALUES
(2, 'MH', 'Rameem', 'rameem2003', '2003-11-04', 'Mirpur, Dhaka', '2022-06-02', 'A+', 'me.jpg', '01409029641', 'https://www.facebook.com/mahmood.rameem/', 'rameem2019@gmail.com', '588242'),
(3, 'Fahmida', 'Yeasmin', 'fahmida1998', '1998-05-05', 'Vasantek bajar, Dhaka', '2022-06-21', 'A+', 'fahmida.jpg', '01828810843', 'https://www.facebook.com/fahmida.yeasmin.378', 'fahmidayeasmin.me@gmail.com', '123'),
(4, 'Region ', 'Mahmud Sayel', 'Region', '1998-10-29', 'Mirpur-1', '2022-05-04', 'A+', 'inbound2102815574.tmp', '01841243927', 'https://www.facebook.com/ria.rito.7', 'mahamudregion@gmail.com', '01841243927'),
(5, 'Emon', 'Chowdhury ', 'emon.637', '2002-01-30', 'Mirpur', '2022-06-21', 'O+', 'IMG_20220601_175837-02.jpeg', '01731905097', 'https://www.facebook.com/emon.5677', 'nayemhasen3000@gmail.com', 'emon1234'),
(6, 'Mohammad', 'Sarfaraz Ahmed', 'Olid', '2000-01-08', 'Mirpur 11', '2022-06-04', 'A+', '', '01779121156', 'https://www.facebook.com/olid2019', 'olid1936@gmail.com', 'password121156'),
(7, 'MD Mahabul', 'Alam', 'MD Mahabul Alam', '2003-03-10', 'Mirpur 13, Dhaka', '2022-01-27', 'B+', 'inbound8645996178205896962.jpg', '01307660195', 'https://www.facebook.com/md.mahabulalom.5458', 'mdmahabulalamerin@gmail.com', 'mahabul12'),
(8, 'Md.', 'Rabbi', 'Rabbi', '2001-07-10', 'South badda ', '2022-04-20', 'O+', 'inbound1763061933542395677.jpg', '01837234904', 'https://www.facebook.com/bipul.hasanrabbi', 'bipulhasanrabbi@gmail.com', '12345'),
(9, 'Junaid', 'islam', 'junaidislam', '2002-02-13', 'brahmanbaria ', '2021-08-15', 'A+', 'inbound1909809449.jpg', '01647865987', 'https://www.facebook.com/profile.php?id=100008579554493', 'mdjunaidislam629@gmail.com ', 'JUnAid.[668'),
(10, 'Shourav', 'Shahriar ', 'Md. Shourav', '1997-04-03', 'Tangail', '2022-06-21', 'B+', 'inbound812652157.jpg', '01750498023', 'https://www.facebook.com/shourav.mbd', 'Shahriarshourav23@gmail.com', 'shourav'),
(11, 'Muhaimin', 'Shihab', 'muhaiminshihab', '2001-04-17', 'Dhaka', '2022-06-01', 'AB+', 'photo.jpeg', '01829004863', 'https://facebook.com/muhaiminshihab', 'hostforshihab@gmail.com', 'shihab123'),
(12, 'Nazmul', 'Islam', 'nazmul101112', '2001-11-07', 'Mirpur-14, Dhaka-1206', '2022-04-28', 'A+', 'inbound6188951507552945778.jpg', '01959061063', 'https://www.facebook.com/nazmulislam101112', 'nazmulislam101112@gmail.com', 'nazmul00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
