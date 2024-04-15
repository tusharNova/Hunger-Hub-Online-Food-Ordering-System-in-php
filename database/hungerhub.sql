-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2024 at 06:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hungerhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(11) NOT NULL,
  `username` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `username`, `password`, `date`) VALUES
(1, 'tushar', '9022', NULL),
(2, 'bharti', '9022', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `d_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `slogan` text NOT NULL,
  `price` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`d_id`, `r_id`, `title`, `slogan`, `price`, `img`) VALUES
(1, 1, 'VadaPav', 'best', '30', 'M2.jpg'),
(2, 2, 'Dosa', 'good', '60', 'S1.png');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `r_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `url` text NOT NULL,
  `o_hr` text NOT NULL,
  `c_hr` text NOT NULL,
  `o_days` text NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`r_id`, `c_id`, `title`, `email`, `phone`, `url`, `o_hr`, `c_hr`, `o_days`, `address`, `image`, `date`) VALUES
(1, 1, 'Aamantran ', 'Aamantran02@gmail.com', '8521479630', 'www.AamantranFood.com', '7am ', ' 10pm', 'Mon-Fri', ' Shivaji nagar , near IT park  nagpur', 'maha.png', '2024-04-14'),
(2, 2, 'Swamy', 'SwamyFoods@gmail.com', '8520147963', 'www.SwamyFoods.com', '10am ', ' 10pm', 'Mon-Sat', ' pt- 212 Near New main-road ,Nagpur - 440256 ', 'south.jpg', '2024-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `res_category`
--

CREATE TABLE `res_category` (
  `c_id` int(11) NOT NULL,
  `c_name` text NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `res_category`
--

INSERT INTO `res_category` (`c_id`, `c_name`, `date`) VALUES
(1, 'Maharashtrian', '2024-04-14'),
(2, 'South-Indian', '2024-04-14'),
(3, 'Gujarati', '2024-04-14'),
(4, 'North-Indian', '2024-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `password` text NOT NULL,
  `addresss` text NOT NULL,
  `status` text NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `addresss`, `status`, `date`) VALUES
(1, 'tushar', 'tushar', 'mankar', 'tushar@gmail.com', '9022126544', '9022', 'plot--11111', 'ok', NULL),
(2, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '[value-9]', NULL),
(3, 'h', 'h', 'h', 'h', 'h', 'h', 'hh', 'ok', NULL),
(4, 'h', 'h', 'h', 'h', 'h', 'h', 'hh', 'ok', NULL),
(5, 'h', 'h', 'h', 'h', 'h', 'h', 'hh', 'ok', '2024-04-13'),
(6, 'yash', 'ryash', 'gedam', 'yash@gamilcom', '985012347', '1234', 'pt-15', 'ok', '2024-04-13'),
(7, 'Neha', 'neha', 'kawade', 'neha@gamil.com', '9630125874', '1234', 'pt-22 manewada , nagpur', 'ok', '2024-04-13'),
(8, 'Neha', 'neha', 'kawade', 'neha@gamil.com', '9630125874', '1234', 'pt-22 manewada , nagpur', 'ok', '2024-04-13'),
(9, 'janhvi', 'janhvi', 'shende', 'viddhi@gmail.com', '8541207369', '1234', 'pt-12 manewada , nagpur', 'ok', '2024-04-13'),
(10, 'janhvi', 'janhvi', 'shende', 'viddhi@gmail.com', '8541207369', '1234', 'pt-12 manewada , nagpur', 'ok', '2024-04-13'),
(11, '', '', '', '', '', '', '', 'ok', '2024-04-13'),
(12, '', '', '', '', '', '', '', 'ok', '2024-04-13');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `o_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `res_category`
--
ALTER TABLE `res_category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`o_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `res_category`
--
ALTER TABLE `res_category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
