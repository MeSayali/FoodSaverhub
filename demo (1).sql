-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2024 at 06:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Aid` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` text NOT NULL,
  `location` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Aid`, `name`, `email`, `password`, `location`, `address`) VALUES
(3, 'sakshi', 'sakshi@gmail.com', '$2y$10$8RSYS2TqN6df5UpmYlGyvO1xmc04gYPQgN/7ma7dlVeuiqtHRcnoS', 'madurai', 'amt'),
(4, 'sakshi', 'sakshijaysingpure5@gmail.com', '$2y$10$AURABTbRx/57Et9ZWlu4ru6FlOVXJCSGKg5PW2vf9OSY5yoY3eTZa', 'madurai', 'amt');

-- --------------------------------------------------------

--
-- Table structure for table `cloth_donations`
--

CREATE TABLE `cloth_donations` (
  `Cid` int(6) NOT NULL,
  `name` varchar(20) NOT NULL,
  `type_of_cloth` varchar(10) NOT NULL,
  `size` int(5) NOT NULL,
  `quantity` int(10) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `address` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `assigned_to` varchar(10) DEFAULT NULL,
  `deliverd_by` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cloth_donations`
--

INSERT INTO `cloth_donations` (`Cid`, `name`, `type_of_cloth`, `size`, `quantity`, `phone`, `email`, `address`, `gender`, `assigned_to`, `deliverd_by`) VALUES
(1, 'sakshi', 'pant', 5, 10, 1231231289, 'sakshi@gmail.com', '', 'male', '3', '10'),
(2, 'payal', 'pant', 5, 30, 1231231232, 'shyam@gmail.com', '', 'male', '3', '10'),
(3, 'radha', 'pant', 5, 23, 2147483647, 'ram@gmail.com', '', '', '3', '10'),
(4, 'manisha', 'pant', 5, 30, 1231231232, 'sham@gmail.com', '', '', '3', '10'),
(5, 'shraddha', 'pant', 5, 100, 1231231232, 'sakshi@gmail.com', '', '', '3', '10'),
(6, 'shradhha', 'pant', 45, 500, 1231231232, 'sakshi@gmail.com', 'amravati', '', '3', '10'),
(7, 'prachi', 'pant', 5, 10, 1231231232, 'shyam@gmail.com', 'pant', '', '3', '20'),
(8, 'sayali', 'pant', 34, 23, 1231231289, 'ram@gmail.com', 'shirt', '', '3', '20'),
(9, 'radha', 'pant', 12, 10, 2147483647, 'shyam@gmail.com', 'panchwati', '', '3', '20'),
(10, 'rakhi', 'dress', 100, 23, 1231231232, 'ram@gmail.com', 'rajkamal', '', '3', NULL),
(11, 'ram', 'pant', 34, 23, 1231231232, 'ram@gmail.com', 'irvin_square', '', '3', '11'),
(12, 'radha', 'pant', 100, 23, 1231231232, 'shyam@gmail.com', 'rajkamal', '', '3', NULL),
(13, 'radha', 'pant', 12, 30, 2147483647, 'sayali@gmail.com', 'panchwati', '', '3', '20'),
(14, 'sarika', 'winter clo', 100, 80, 1234569878, 'sarika@gmail.com', 'panchwati', '', '3', '20'),
(15, 'sayali', 'dress', 34, 30, 1231231232, 'sham@gmail.com', 'irvin_square', '', '4', '20'),
(16, 'radha', 'blanket', 34, 80, 1231231289, 'sayali@gmail.com', 'rajkamal', '', NULL, NULL),
(17, 'sakshi', 'shirt', 24, 78, 987698765, 'sayali@gmail.com', 'irvin_square', '', '4', '20'),
(18, 'monali', 'blanket', 55, 100, 456321452, 'sayali@gmail.com', 'irvin_square', '', '4', NULL),
(19, 'sakshi', 'blanket', 34, 80, 2147483647, 'sakshijaysingpure5@gmail.', 'panchwati', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `delivery_persons`
--

CREATE TABLE `delivery_persons` (
  `Did` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery_persons`
--

INSERT INTO `delivery_persons` (`Did`, `name`, `email`, `password`, `city`) VALUES
(13, 'sayali', 'sayalip320@gmail.com', '$2y$10$xPE0vhwIM3zFWx1IpgIvluDTYRrEtangL4vWl6cuwjQz3PjOa6/Oe', 'gadge_nagar'),
(14, 'manisha', 'manishajunare@gmail.com', '$2y$10$jjbSTJmFTRv7xc4QX14nieUtiu3PsUF8XZgCaHd4V0h6cn37j//D.', 'rajkamal'),
(15, 'prachi', 'prachirahte@gmail.com', '$2y$10$z.oyNj0XVeodLjrM6XeoZeo.8OReBKa9oUfINFj3MhvAU/yAZfD56', 'rajkamal'),
(16, 'sneha', 'sneha@gmail.com', '$2y$10$RO9vfZhsMEjJTc3epoEEU.haplBqB73/cbgWuENCLH/ajFpFv/khK', 'gadge_nagar'),
(17, 'shraddha', 'shraddhapathak@gmail.com', '$2y$10$sFapinVOw5DRf.eEszuSd.b4Ud/JKL02MJhKcHVqhJiox3vGDwYcW', 'panchwati'),
(18, 'rani', 'ranijunare@gmail.com', '$2y$10$t2UOJRQfnHsq40q6vOSd2eky5ySqjnvupUoq/JAB7rgUrkZbmRxqi', 'irvin square'),
(19, 'rushali', 'rushali@gmail.com', '$2y$10$fOfPP3d8glyujeFOIy9Qae0LuNyXE2x9StbbKxjKkr8hQ3HD1oXrS', 'irvin square'),
(20, 'sakshijaysingpure5@gmail.com', 'sakshijaysingpure5@gmail.com', '$2y$10$fczS/CL2aXDxGzwq2jrBU.4q/1k0XdPJd8nJIm5X/5EqJmVCkIq62', 'rajkamal'),
(21, 'shraddha', 'shraddhapathak445@gmail.com', '$2y$10$JrRoXXj.my5ocL89EC8TQOH6oOJZapNiUREhn.tFP9m/r5Il3/cmu', 'rajkamal');

-- --------------------------------------------------------

--
-- Table structure for table `food_donations`
--

CREATE TABLE `food_donations` (
  `Fid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `food` varchar(50) NOT NULL,
  `type` text NOT NULL,
  `category` text NOT NULL,
  `quantity` text NOT NULL,
  `date` datetime DEFAULT current_timestamp(),
  `address` text NOT NULL,
  `location` varchar(50) NOT NULL,
  `phoneno` varchar(25) NOT NULL,
  `assigned_to` int(11) DEFAULT NULL,
  `delivery_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_donations`
--

INSERT INTO `food_donations` (`Fid`, `name`, `email`, `food`, `type`, `category`, `quantity`, `date`, `address`, `location`, `phoneno`, `assigned_to`, `delivery_by`) VALUES
(40, 'radha', 'sakshi@gmail.com', 'rice', 'Non-veg', 'packed-food', '30', '2024-03-07 15:46:43', 'amravati', 'nanded', '1234564562', 3, 8),
(47, 'sakshi', 'sakshi@gmail.com', 'pasta', 'veg', 'raw-food', '100', '2024-03-16 00:00:06', 'amravati', 'amravati', '9527863517', 3, 10),
(48, 'Prachi ', 'Prachi123@gmail.com', 'dal rice', 'veg', 'cooked-food', '23 people', '2024-03-16 12:53:58', 'amravati', 'amravati', '1231231235', 4, 10),
(49, 'Prachi ', 'Prachi123@gmail.com', 'rice', 'veg', 'raw-food', '80', '2024-03-16 13:05:22', 'amravati', 'amravati', '1234567898', 4, 10),
(50, 'shraddha', 'sakshijaysingpure5@gmail.com', 'samosa', 'veg', 'cooked-food', '80', '2024-03-19 22:56:30', 'amravati', 'amravati', '1232212321', 4, 10),
(51, 'meenal', 'sakshijaysingpure5@gmail.com', 'pasta', 'veg', 'raw-food', '500', '2024-03-20 08:53:59', 'amravati', 'amravati', '1236547895', 4, 10),
(52, 'meenal', 'sakshijaysingpure5@gmail.com', 'pasta', 'veg', 'raw-food', '500', '2024-03-20 08:58:48', 'amravati', 'amravati', '1236547895', 4, 20),
(53, 'ram', 'sakshijaysingpure5@gmail.com', 'idli', 'veg', 'raw-food', '30', '2024-03-20 08:59:23', 'amravati', 'amravati', '1236547895', 4, 20),
(54, 'rani', 'sakshijaysingpure5@gmail.com', 'roti', 'veg', 'cooked-food', '150', '2024-03-20 09:01:15', 'amravati', 'amravati', '1236547895', 4, 20),
(55, 'hema', 'sakshijaysingpure5@gmail.com', 'noodles', 'veg', 'raw-food', '200', '2024-03-20 09:14:30', 'amravati', 'amravati', '1232123243', 4, 20),
(56, 'sarika', 'sakshijaysingpure5@gmail.com', 'noodles', 'veg', 'cooked-food', '20', '2024-03-20 09:31:42', 'amravati', 'amravati', '1236547895', 4, 20),
(57, 'sarika', 'sakshijaysingpure5@gmail.com', 'biryani', 'Non-veg', 'packed-food', '23', '2024-03-21 14:03:43', 'amravati', 'amravati', '1231231235', 4, 20),
(58, 'sayali Pawar', 'sakshijaysingpure5@gmail.com', 'idli', 'veg', 'cooked-food', '10', '2024-04-04 14:39:50', 'rajkamal', 'amravati', '7083261961', 4, 20),
(59, 'sunil', 'sakshijaysingpure5@gmail.com', 'dosa', 'veg', 'packed-food', '95', '2024-04-04 22:50:17', 'irvin-square', 'amravati', '6589784525', 4, 20),
(60, 'sonali kale', 'sakshijaysingpure5@gmail.com', 'noodles', 'veg', 'packed-food', '20', '2024-04-05 10:32:24', 'irvin-square', 'amravati', '1231231235', 4, 20),
(61, 'Sarika Rahate', 'sakshijaysingpure5@gmail.com', 'rice, dal', 'veg', 'cooked-food', '100', '2024-04-05 10:43:02', 'panchwati', 'amravati', '9865759632', 4, 20),
(62, 'Sarika Rahate', 'sakshijaysingpure5@gmail.com', 'rice, dal', 'veg', 'cooked-food', '100', '2024-04-05 10:43:33', 'panchwati', 'amravati', '9865759632', 4, 20),
(63, 'sayali pawar', 'sakshijaysingpure5@gmail.com', 'rice,dal', 'veg', 'cooked-food', '10', '2024-04-05 12:26:07', 'panchwati', 'amravati', '7083261961', 4, 20),
(64, 'pallvi', 'sakshijaysingpure5@gmail.com', 'rice,dal', 'veg', 'cooked-food', '10', '2024-04-05 15:07:44', 'gadge_nagar', 'amravati', '5678943567', 4, 20),
(65, 'neha', 'sakshijaysingpure5@gmail.com', 'pasta', 'veg', 'raw-food', '80', '2024-04-05 15:33:55', 'gadge_nagar', 'amravati', '1236547895', 4, NULL),
(66, 'sarika', 'sakshijaysingpure5@gmail.com', 'noodles', 'veg', 'raw-food', '23', '2024-04-05 15:46:03', 'irvin-square', 'amravati', '1236547895', 4, 20),
(67, 'naina', 'sakshijaysingpure5@gmail.com', 'pizza', 'veg', 'cooked-food', '50', '2024-05-04 00:54:31', 'irvin-square', 'amravati', '2564789568', 4, NULL),
(68, 'radhika', 'sakshijaysingpure5@gmail.com', 'pasta', 'veg', 'raw-food', '50', '2024-05-04 12:08:04', 'panchwati', 'amravati', '1231231235', 4, NULL),
(69, 'sudha ', 'sakshijaysingpure5@gmail.com', 'rice', 'veg', 'raw-food', '50', '2024-05-04 15:08:18', 'gadge_nagar', 'amravati', '1236547895', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` text NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `gender`) VALUES
(20, 'sakshi', 'jaysingpuresakshi@gmail.com', '$2y$10$trUvK01exYPhbHRLJ9/Df.hJ.r4uZTbnmuhfDR1Xlf2j1xo4E8r52', 'female'),
(19, 'Prachi ', 'Prachi123@gmail.com', '$2y$10$qaIKVVauh0VDl9aVKCIsg.ks70s0aPlC2Ew77mw/he7UZ43XCQgS2', 'female'),
(21, 'sarika', 'sakshijaysingpure5@gmail.com', '$2y$10$TdbWrXQIMG6NAzl4bCTrI.DzujSP2SKBAg997yaoQLHUTrtLsWGtu', 'female'),
(18, 'shyam', 'sayalip320@gmail.com', 'sayali123', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `money_donations`
--

CREATE TABLE `money_donations` (
  `id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `amount` int(50) NOT NULL,
  `card_number` int(12) NOT NULL,
  `expiry_date` int(10) NOT NULL,
  `cvv` int(3) NOT NULL,
  `phoneno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `money_donations`
--

INSERT INTO `money_donations` (`id`, `email`, `amount`, `card_number`, `expiry_date`, `cvv`, `phoneno`) VALUES
(10, '', 1000, 213654987, 12, 123, 2147483647),
(11, '', 22, 4587125, 874258, 123, 1234564562),
(13, '', 1000, 2147483647, 2025, 125, 1234565284),
(14, '', 22, 2147483647, 2025, 265, 1236547895);

-- --------------------------------------------------------

--
-- Table structure for table `user_feedback`
--

CREATE TABLE `user_feedback` (
  `feedback_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_feedback`
--

INSERT INTO `user_feedback` (`feedback_id`, `name`, `email`, `message`) VALUES
(1, 'John Smith', 'john@example.com', 'I really enjoyed using your product!'),
(2, 'prasanna', 'bprasanna0502@gmail.com', 'good'),
(3, 'prasanna', 'bprasanna0502@gmail.com', 'liked it'),
(4, 'prasanna', 'bprasanna0502@gmail.com', 'great'),
(5, 'abi', 'bsabineshakash@gmail.com', 'great'),
(6, 'arun', 'arun26ifs@gmail.com', 'not good'),
(7, 'Prachi ', 'prachi@gmail.com', 'Happy to donate and nice work');

-- --------------------------------------------------------

--
-- Table structure for table `user_feedback_cloth`
--

CREATE TABLE `user_feedback_cloth` (
  `feedback_id` int(10) NOT NULL,
  `name` int(30) NOT NULL,
  `email` int(30) NOT NULL,
  `message` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Aid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `cloth_donations`
--
ALTER TABLE `cloth_donations`
  ADD PRIMARY KEY (`Cid`);

--
-- Indexes for table `delivery_persons`
--
ALTER TABLE `delivery_persons`
  ADD PRIMARY KEY (`Did`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `food_donations`
--
ALTER TABLE `food_donations`
  ADD PRIMARY KEY (`Fid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `money_donations`
--
ALTER TABLE `money_donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_feedback`
--
ALTER TABLE `user_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `user_feedback_cloth`
--
ALTER TABLE `user_feedback_cloth`
  ADD PRIMARY KEY (`feedback_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cloth_donations`
--
ALTER TABLE `cloth_donations`
  MODIFY `Cid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `delivery_persons`
--
ALTER TABLE `delivery_persons`
  MODIFY `Did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `food_donations`
--
ALTER TABLE `food_donations`
  MODIFY `Fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `money_donations`
--
ALTER TABLE `money_donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_feedback`
--
ALTER TABLE `user_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_feedback_cloth`
--
ALTER TABLE `user_feedback_cloth`
  MODIFY `feedback_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
