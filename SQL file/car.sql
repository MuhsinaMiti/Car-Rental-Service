-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2020 at 04:20 PM
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
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(7) NOT NULL,
  `customer_id` int(5) NOT NULL,
  `car_id` int(5) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `mobile_number` varchar(11) NOT NULL,
  `car_delivery_address` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `days` int(5) NOT NULL,
  `order_date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `customer_id`, `car_id`, `customer_name`, `email_address`, `mobile_number`, `car_delivery_address`, `date`, `days`, `order_date_time`) VALUES
(39, 13, 40, ' Miti', 'miti@gmail.com', '2123114', 'address', '2020-03-05 15:14:46', 5, '2020-02-07 08:39:44'),
(40, 13, 45, 'Miti', 'miti@gmail.com', '323423423', 'address', '2020-03-05 15:15:23', 11, '2020-02-07 08:52:13'),
(41, 31, 46, 'Miti', 'miti@gmail.com', '2123131', 'address', '2020-03-05 15:15:39', 10, '2020-02-07 19:42:25');

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
  `car_overview` text NOT NULL,
  `car_brand` int(11) NOT NULL,
  `car_fuel` int(11) NOT NULL,
  `car_location` int(11) NOT NULL,
  `car_image` text NOT NULL,
  `recent_car` tinyint(1) NOT NULL COMMENT 'if recent_car = 1, it will be shown in Recent Car, & if recent_car=0, it will be hidden from Recent Car',
  `car_status` tinyint(3) NOT NULL DEFAULT 1 COMMENT 'car_status = 1 Active & car_status = 2 Inactive & car_status = 3 Deleted',
  `booking_status` tinyint(3) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_car`
--

INSERT INTO `tbl_car` (`car_id`, `car_name`, `price_per_day`, `car_overview`, `car_brand`, `car_fuel`, `car_location`, `car_image`, `recent_car`, `car_status`, `booking_status`) VALUES
(40, 'Mazda CX-5 SX, V6, ABS, Sunroof', 1240, '<div xss=\"removed\"><font face=\"Arial, Verdana\"><span xss=\"removed\">Lorem ipsum dolor sit amet, usu in erat mazim mediocritatem, est at utinam doming pertinax. No nec indoctum consequuntur, id sed porro mundi graecis. Vim ne dicta molestie oporteat, ne sea hinc feugait, pri eu fastidii eligendi. Nam te dico dicam iisque, id convenire argumentum cum, sit ne primis appetere dignissim.</span></font></div><div xss=\"removed\"><font face=\"Arial, Verdana\"><span xss=\"removed\"><br></span></font></div><div xss=\"removed\"><font face=\"Arial, Verdana\"><span xss=\"removed\">An quas doctus fabulas cum. Te cum quodsi melius tincidunt, sea liber erant legere id. Cum ei autem melius, mundi omnium pro ne, eirmod intellegam nec id. Ex aperiam alienum nostrum usu, stet putant percipit ut mei. Unum fierent senserit nam et.</span></font></div><div xss=\"removed\"><font face=\"Arial, Verdana\"><span xss=\"removed\"><br></span></font></div><div xss=\"removed\"><font face=\"Arial, Verdana\"><span xss=\"removed\">Sit at ubique debitis philosophia, te per errem eirmod eleifend. Eam fabulas nominati definiebas te. No nulla laudem accommodare ius, quas quidam pri an. Omnis movet ne duo, cu pro clita verear voluptua. Cu platonem explicari voluptatum pro, an habeo homero iudicabit eum. Indoctum democritum definitionem ex sea, semper consequuntur ut ius, mei integre eruditi intellegebat id.</span></font></div><div xss=\"removed\"><br></div>', 2, 1, 2, 'uploads/featured-img-16.jpg', 0, 1, 1),
(45, 'Maserati QUATTROPORTE 1,6', 1600, '<div xss=\"removed\"><font face=\"Arial, Verdana\">Lorem ipsum dolor sit amet, usu in erat mazim mediocritatem, est at utinam doming pertinax. No nec indoctum consequuntur, id sed porro mundi graecis. Vim ne dicta molestie oporteat, ne sea hinc feugait, pri eu fastidii eligendi. Nam te dico dicam iisque, id convenire argumentum cum, sit ne primis appetere dignissim.</font></div><div xss=\"removed\"><font face=\"Arial, Verdana\"><br></font></div><div xss=\"removed\"><font face=\"Arial, Verdana\">An quas doctus fabulas cum. Te cum quodsi melius tincidunt, sea liber erant legere id. Cum ei autem melius, mundi omnium pro ne, eirmod intellegam nec id. Ex aperiam alienum nostrum usu, stet putant percipit ut mei. Unum fierent senserit nam et.</font></div><div xss=\"removed\"><font face=\"Arial, Verdana\"><br></font></div><div xss=\"removed\"><font face=\"Arial, Verdana\">Sit at ubique debitis philosophia, te per errem eirmod eleifend. Eam fabulas nominati definiebas te. No nulla laudem accommodare ius, quas quidam pri an. Omnis movet ne duo, cu pro clita verear voluptua. Cu platonem explicari voluptatum pro, an habeo homero iudicabit eum. Indoctum democritum definitionem ex sea, semper consequuntur ut ius, mei integre eruditi intellegebat id.</font></div><div xss=\"removed\"><br xss=\"removed\"></div>', 2, 1, 2, 'uploads/featured-img-21.jpg', 1, 1, 1),
(46, 'Maserati QUATTROPORTE 1,6', 1500, '<div xss=\"removed\"><font face=\"Arial, Verdana\">Lorem ipsum dolor sit amet, usu in erat mazim mediocritatem, est at utinam doming pertinax. No nec indoctum consequuntur, id sed porro mundi graecis. Vim ne dicta molestie oporteat, ne sea hinc feugait, pri eu fastidii eligendi. Nam te dico dicam iisque, id convenire argumentum cum, sit ne primis appetere dignissim.</font></div><div xss=\"removed\"><font face=\"Arial, Verdana\"><br></font></div><div xss=\"removed\"><font face=\"Arial, Verdana\">An quas doctus fabulas cum. Te cum quodsi melius tincidunt, sea liber erant legere id. Cum ei autem melius, mundi omnium pro ne, eirmod intellegam nec id. Ex aperiam alienum nostrum usu, stet putant percipit ut mei. Unum fierent senserit nam et.</font></div><div xss=\"removed\"><font face=\"Arial, Verdana\"><br></font></div><div xss=\"removed\"><font face=\"Arial, Verdana\">Sit at ubique debitis philosophia, te per errem eirmod eleifend. Eam fabulas nominati definiebas te. No nulla laudem accommodare ius, quas quidam pri an. Omnis movet ne duo, cu pro clita verear voluptua. Cu platonem explicari voluptatum pro, an habeo homero iudicabit eum. Indoctum democritum definitionem ex sea, semper consequuntur ut ius, mei integre eruditi intellegebat id.</font></div><div xss=\"removed\"><br xss=\"removed\"></div>', 1, 1, 1, 'uploads/featured-img-31.jpg', 1, 1, 2),
(55, 'Mazda CX-5 SX, V6, ABS, Sunroof', 1500, '<div xss=\"removed\" xss=removed><font face=\"Arial, Verdana\">Lorem ipsum dolor sit amet, usu in erat mazim mediocritatem, est at utinam doming pertinax. No nec indoctum consequuntur, id sed porro mundi graecis. Vim ne dicta molestie oporteat, ne sea hinc feugait, pri eu fastidii eligendi. Nam te dico dicam iisque, id convenire argumentum cum, sit ne primis appetere dignissim.</font></div><div xss=\"removed\" xss=removed><font face=\"Arial, Verdana\"><br></font></div><div xss=\"removed\" xss=removed><font face=\"Arial, Verdana\">An quas doctus fabulas cum. Te cum quodsi melius tincidunt, sea liber erant legere id. Cum ei autem melius, mundi omnium pro ne, eirmod intellegam nec id. Ex aperiam alienum nostrum usu, stet putant percipit ut mei. Unum fierent senserit nam et.</font></div><div xss=\"removed\" xss=removed><font face=\"Arial, Verdana\"><br></font></div><div xss=\"removed\" xss=removed><font face=\"Arial, Verdana\">Sit at ubique debitis philosophia, te per errem eirmod eleifend. Eam fabulas nominati definiebas te. No nulla laudem accommodare ius, quas quidam pri an. Omnis movet ne duo, cu pro clita verear voluptua. Cu platonem explicari voluptatum pro, an habeo homero iudicabit eum. Indoctum democritum definitionem ex sea, semper consequuntur ut ius, mei integre eruditi intellegebat id.</font></div><div xss=\"removed\" xss=removed><br xss=removed></div>', 3, 1, 1, 'uploads/recent-car-4.jpg', 1, 1, 2),
(56, 'Mazda CX-5 SX, V6, ABS, Sunroof', 1500, '<div xss=\"removed\" xss=removed><font face=\"Arial, Verdana\">Lorem ipsum dolor sit amet, usu in erat mazim mediocritatem, est at utinam doming pertinax. No nec indoctum consequuntur, id sed porro mundi graecis. Vim ne dicta molestie oporteat, ne sea hinc feugait, pri eu fastidii eligendi. Nam te dico dicam iisque, id convenire argumentum cum, sit ne primis appetere dignissim.</font></div><div xss=\"removed\" xss=removed><font face=\"Arial, Verdana\"><br></font></div><div xss=\"removed\" xss=removed><font face=\"Arial, Verdana\">An quas doctus fabulas cum. Te cum quodsi melius tincidunt, sea liber erant legere id. Cum ei autem melius, mundi omnium pro ne, eirmod intellegam nec id. Ex aperiam alienum nostrum usu, stet putant percipit ut mei. Unum fierent senserit nam et.</font></div><div xss=\"removed\" xss=removed><font face=\"Arial, Verdana\"><br></font></div><div xss=\"removed\" xss=removed><font face=\"Arial, Verdana\">Sit at ubique debitis philosophia, te per errem eirmod eleifend. Eam fabulas nominati definiebas te. No nulla laudem accommodare ius, quas quidam pri an. Omnis movet ne duo, cu pro clita verear voluptua. Cu platonem explicari voluptatum pro, an habeo homero iudicabit eum. Indoctum democritum definitionem ex sea, semper consequuntur ut ius, mei integre eruditi intellegebat id.</font></div><div xss=\"removed\" xss=removed><br xss=removed></div>', 1, 2, 0, 'uploads/recent-car-5.jpg', 1, 1, 2),
(57, 'Mazda CX-5 SX, V6, ABS, Sunroof', 1500, '<div xss=\"removed\" xss=removed><font face=\"Arial, Verdana\">Lorem ipsum dolor sit amet, usu in erat mazim mediocritatem, est at utinam doming pertinax. No nec indoctum consequuntur, id sed porro mundi graecis. Vim ne dicta molestie oporteat, ne sea hinc feugait, pri eu fastidii eligendi. Nam te dico dicam iisque, id convenire argumentum cum, sit ne primis appetere dignissim.</font></div><div xss=\"removed\" xss=removed><font face=\"Arial, Verdana\"><br></font></div><div xss=\"removed\" xss=removed><font face=\"Arial, Verdana\">An quas doctus fabulas cum. Te cum quodsi melius tincidunt, sea liber erant legere id. Cum ei autem melius, mundi omnium pro ne, eirmod intellegam nec id. Ex aperiam alienum nostrum usu, stet putant percipit ut mei. Unum fierent senserit nam et.</font></div><div xss=\"removed\" xss=removed><font face=\"Arial, Verdana\"><br></font></div><div xss=\"removed\" xss=removed><font face=\"Arial, Verdana\">Sit at ubique debitis philosophia, te per errem eirmod eleifend. Eam fabulas nominati definiebas te. No nulla laudem accommodare ius, quas quidam pri an. Omnis movet ne duo, cu pro clita verear voluptua. Cu platonem explicari voluptatum pro, an habeo homero iudicabit eum. Indoctum democritum definitionem ex sea, semper consequuntur ut ius, mei integre eruditi intellegebat id.</font></div><div xss=\"removed\" xss=removed><br xss=removed></div>', 3, 2, 2, 'uploads/recent-car-21.jpg', 1, 1, 2),
(58, 'Maserati QUATTROPORTE 1,6', 1600, '<div xss=\"removed\" xss=removed><font face=\"Arial, Verdana\">Lorem ipsum dolor sit amet, usu in erat mazim mediocritatem, est at utinam doming pertinax. No nec indoctum consequuntur, id sed porro mundi graecis. Vim ne dicta molestie oporteat, ne sea hinc feugait, pri eu fastidii eligendi. Nam te dico dicam iisque, id convenire argumentum cum, sit ne primis appetere dignissim.</font></div><div xss=\"removed\" xss=removed><font face=\"Arial, Verdana\"><br></font></div><div xss=\"removed\" xss=removed><font face=\"Arial, Verdana\">An quas doctus fabulas cum. Te cum quodsi melius tincidunt, sea liber erant legere id. Cum ei autem melius, mundi omnium pro ne, eirmod intellegam nec id. Ex aperiam alienum nostrum usu, stet putant percipit ut mei. Unum fierent senserit nam et.</font></div><div xss=\"removed\" xss=removed><font face=\"Arial, Verdana\"><br></font></div><div xss=\"removed\" xss=removed><font face=\"Arial, Verdana\">Sit at ubique debitis philosophia, te per errem eirmod eleifend. Eam fabulas nominati definiebas te. No nulla laudem accommodare ius, quas quidam pri an. Omnis movet ne duo, cu pro clita verear voluptua. Cu platonem explicari voluptatum pro, an habeo homero iudicabit eum. Indoctum democritum definitionem ex sea, semper consequuntur ut ius, mei integre eruditi intellegebat id.</font></div><div xss=\"removed\" xss=removed><br xss=\"removed\" xss=removed></div>', 3, 3, 2, 'uploads/recent-car-31.jpg', 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(5) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `customer_status` tinyint(3) NOT NULL DEFAULT 1,
  `verification_key` varchar(250) NOT NULL,
  `is_email_verified` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `customer_name`, `email_address`, `password`, `customer_status`, `verification_key`, `is_email_verified`) VALUES
(13, 'Muhsina Tabassum Miti', 'miti@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '', 'no'),
(20, 'M', 'm@yahoo.com', '202cb962ac59075b964b07152d234b70', 1, '', 'no'),
(21, 'Brishti ', 'brishti@gmail.com', '202cb962ac59075b964b07152d234b70', 1, '', 'no'),
(24, 'Muhsina Miti', 'muhsinatabassum@gamil.com', '202cb962ac59075b964b07152d234b70', 1, '', 'yes');

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
(2, 'Dhaka', 1),
(3, 'Chittogong', 1);

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
(3, 'miti@gmail.com', 'Miti', '$2y$10$37OVZa8.zzdIlTcdXI6IduZ6yqjgAslTC0gPmI/qkyEkYZ/e.Fxle', 1, 1),
(29, 'r@r.com', 'Raisa', '$2y$10$mC2VpuOMbw0Dy6EESBGbH.mrtZOOnwyVO/iF1/cMElYkXrC.0t4dq', 1, 1),
(37, 'mitinew@email', 'Miti new', '$2y$10$8Ng4VlxAB3XG1Wd5o3BrI.4ULr8LvUYr3hpHUEzQNtqVUVBjuCHGa', 1, 1),
(38, 'munfa@gmail.com', 'munfa', '$2y$10$xq4ip2A.JbjGtPRHL3JZmeidndkQBGo80WNczXAvy99V8NcAtjAXS', 1, 1),
(39, 'mun@gmail.com', 'mun', '$2y$10$RGmqSFzBZkG3ht/JR3jeqev8TEbk/ijinp2qiLDEpP8JSppuJiPj6', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

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
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_car`
--
ALTER TABLE `tbl_car`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tbl_fuel`
--
ALTER TABLE `tbl_fuel`
  MODIFY `fuel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_location`
--
ALTER TABLE `tbl_location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
