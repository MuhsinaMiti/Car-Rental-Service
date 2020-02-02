-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2020 at 01:59 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `brand_status`) VALUES
(1, 'BMW', 1),
(2, 'Maruti', 1),
(3, 'Toyota', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_car`
--

CREATE TABLE `tbl_car` (
  `car_id` int(11) NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `price_per_day` float NOT NULL,
  `car_overview` varchar(255) NOT NULL,
  `car_brand` int(11) NOT NULL,
  `car_fuel` int(11) NOT NULL,
  `car_location` int(11) NOT NULL,
  `car_image` text NOT NULL,
  `recent_car` tinyint(1) NOT NULL COMMENT 'if recent_car = 1, it will be shown in Recent Car, & if recent_car=0, it will be hidden from Recent Car',
  `car_status` tinyint(3) NOT NULL DEFAULT 1 COMMENT 'car_status = 1 Active & car_status = 2 Inactive & car_status = 3 Deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_car`
--

INSERT INTO `tbl_car` (`car_id`, `car_name`, `price_per_day`, `car_overview`, `car_brand`, `car_fuel`, `car_location`, `car_image`, `recent_car`, `car_status`) VALUES
(36, 'car 1', 0, '..................................', 1, 2, 1, 'uploads/recent-car-1.jpg', 0, 1),
(38, 'car', 13, 'sdsd', 1, 1, 1, 'uploads/trending-car-img-1.jpg', 1, 1),
(39, '150', 0, 'sdasd', 1, 2, 0, 'uploads/car_755x4301.png', 1, 3),
(40, 'car', 124, 'dfsdf', 2, 1, 2, 'uploads/featured-img-16.jpg', 0, 1),
(41, 'car 2', 500, 'dsasd', 2, 1, 0, 'uploads/post_200x200_2.jpg', 0, 3),
(42, 'car6', 150, 'sdlkdjkld', 1, 2, 2, 'uploads/featured-img-3.jpg', 1, 1),
(44, 'car 7', 1500, 'jdaksjdalks', 1, 1, 2, 'uploads/recent-car-61.jpg', 1, 1),
(45, 'car 8', 1600, 'sdasd sdsdfsdf dfsdfs', 2, 1, 2, 'uploads/featured-img-21.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(5) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `mobile_number` varchar(11) NOT NULL,
  `car_delivery_address` text NOT NULL,
  `days` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `customer_name`, `email_address`, `password`, `mobile_number`, `car_delivery_address`, `days`) VALUES
(1, 'Muhsina Tabassum Miti', 'miti@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', 0),
(2, 'Muhsina Tabassum Miti', 'miti@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '00000000000', 'sdasa asdasds sdas', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fuel`
--

CREATE TABLE `tbl_fuel` (
  `fuel_id` int(11) NOT NULL,
  `fuel_name` varchar(255) NOT NULL,
  `fuel_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_fuel`
--

INSERT INTO `tbl_fuel` (`fuel_id`, `fuel_name`, `fuel_status`) VALUES
(1, 'Petrol', 1),
(2, 'Diesel', 1),
(3, 'CNG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE `tbl_location` (
  `location_id` int(11) NOT NULL,
  `location_name` varchar(255) NOT NULL,
  `location_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`location_id`, `location_name`, `location_status`) VALUES
(1, 'Sylhet', 1),
(2, 'Dhaka', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_role` tinyint(3) NOT NULL,
  `user_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_email`, `user_name`, `user_password`, `user_role`, `user_status`) VALUES
(1, 'miti@gmail.com', '', '$2y$10$MkG9.6NfpgK07YLU4Qx6j.6c.V/o3MqSLUZo9t9LeL/nzP.2ZNDQS', 1, 1),
(2, 'munfa@gmail.com', 'munfa', '1234', 1, 1),
(3, 'miti@gmail.com', 'Miti', '$2y$10$37OVZa8.zzdIlTcdXI6IduZ6yqjgAslTC0gPmI/qkyEkYZ/e.Fxle', 1, 1),
(29, 'r@r.com', 'Raisa', '$2y$10$mC2VpuOMbw0Dy6EESBGbH.mrtZOOnwyVO/iF1/cMElYkXrC.0t4dq', 1, 1),
(37, 'mitinew@email', 'Miti new', '$2y$10$8Ng4VlxAB3XG1Wd5o3BrI.4ULr8LvUYr3hpHUEzQNtqVUVBjuCHGa', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `tbl_car`
--
ALTER TABLE `tbl_car`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_fuel`
--
ALTER TABLE `tbl_fuel`
  ADD PRIMARY KEY (`fuel_id`);

--
-- Indexes for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_car`
--
ALTER TABLE `tbl_car`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_fuel`
--
ALTER TABLE `tbl_fuel`
  MODIFY `fuel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_location`
--
ALTER TABLE `tbl_location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
