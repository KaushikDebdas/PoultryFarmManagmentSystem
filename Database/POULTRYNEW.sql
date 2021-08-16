-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2021 at 02:00 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `P`
--

-- --------------------------------------------------------

--
-- Table structure for table `chicken`
--

CREATE TABLE `chicken` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_stock` int(11) NOT NULL,
  `e_stock` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chicken`
--

INSERT INTO `chicken` (`c_id`, `c_name`, `c_stock`, `e_stock`, `date`) VALUES
(1, 'Layer', 10, 100, '2020-06-03 05:28:15'),
(2, 'Deshi', 50, 100, '2020-06-03 05:28:37');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `profile_pic` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `useremail` varchar(50) NOT NULL,
  `phone` char(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `submit_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `profile_pic`, `username`, `useremail`, `phone`, `password`, `submit_date`, `role`) VALUES
(1, '', 'Kaushik Debdas', 'kaushikdebdas27@gmail.com', '01685474608', '011162043', '2020-06-24 17:25:02', 1),
(2, '', 'Tanzeen', 'mayaboty123@gmail.com', '01620573368', '011162046', '2020-06-24 17:25:02', 1),
(3, '', 'Soron', 'soron123@gmail.com', '01683551478', '12345', '2020-06-24 17:25:02', 0),
(4, '', 'Rafsan', 'rafsan@gmail.com', '01624119178', '12345', '2020-06-24 17:25:02', 0),
(6, '', 'd', 'sabbir@gmail.com', '12', '123', '2020-06-25 09:52:56', 0),
(8, '', 'Saimun', 'saimun@gmail.com', '45', '123', '2020-06-25 14:22:34', 0),
(9, 'IMG_9299.jpg', '12', '123@gmail.com', '1', '12', '2020-06-25 14:24:09', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chicken`
--
ALTER TABLE `chicken`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `uq1` (`useremail`),
  ADD UNIQUE KEY `uq2` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chicken`
--
ALTER TABLE `chicken`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
