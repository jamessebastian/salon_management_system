-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 09:58 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `natura_salon`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `service` varchar(100) DEFAULT NULL,
  `apt_date` varchar(20) DEFAULT NULL,
  `apt_time` varchar(20) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modification_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `service`, `apt_date`, `apt_time`, `user_id`, `creation_date`, `modification_date`) VALUES
(1, 'Fruit Facial', '2021-12-18', '03:47', 7, '2021-12-13 08:43:29', '2021-12-13 08:43:29'),
(2, 'Charcol Facial', '2021-12-06', '03:50', 7, '2021-12-13 08:44:47', '2021-12-13 08:44:47'),
(4, 'Charcol Facial', '2021-12-06', '03:50', 7, '2021-12-13 08:46:29', '2021-12-13 08:46:29'),
(5, 'Fruit Facial', '2021-12-25', '05:30', 7, '2021-12-13 10:27:10', '2021-12-13 10:27:10'),
(6, 'O3 Facial', '2021-12-22', '15:54', 9, '2021-12-13 20:49:11', '2021-12-13 20:49:11'),
(7, 'Deluxe Menicure', '2021-12-31', '03:52', 7, '2021-12-17 08:50:02', '2021-12-17 08:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL,
  `Timing` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`, `Timing`) VALUES
(1, 'aboutus', 'About Us', 'Welcome to Natura Salon— where guests can expect nothing less than perfection. Whether you are seated in one of our salon chairs or tucked away in our luxurious starlight lathering lounge, our salon space was specifically designed for your relaxation and comfort. We deliver experiences uniquely tailored to you. \n\nWith 10+ years of industry experience, our stylists are committed to the highest professional standards. From hair cuts and colour services, to perming and keratin treatments, we offer a broad portfolio of the very best services to help you achieve your desired look.\n\nLocated in the heart of downtown Toronto’s Annex neighbourhood, natura Salon is easily accessible by transit and by car.', NULL, NULL, NULL, ''),
(2, 'contactus', 'Contact Us', '771 Bathurst Street\nToronto, ON, M5S 1Z5\nCanada\n\n416-531-6127', 'info@gmail.com', 111111, NULL, '10:30 am to 8:30 pm');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ID` int(10) NOT NULL,
  `ServiceName` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `Cost` int(10) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ID`, `ServiceName`, `Description`, `Cost`, `CreationDate`) VALUES
(1, 'O3 Facial', 'Activated charcoal draws bacteria, toxins, dirt and oil from the skin.', 120, '2019-07-25 11:22:38'),
(2, 'Fruit Facial', 'If its a peel-off mask, it also works as an excellent exfoliator, ridding the skin of dead cells.', 500, '2019-07-25 11:22:53'),
(3, 'Charcol Facial', 'The end result is skin that is clean and clear. When used as a powder, charcoal masks can reach deep in your pores and suck out impurities with them.', 1000, '2019-07-25 11:23:10'),
(4, 'Deluxe Menicure', 'The end result is skin that is clean and clear. When used as a powder, charcoal masks can reach deep in your pores and suck out impurities with them.', 500, '2019-07-25 11:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `ID` int(5) NOT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `DateofSub` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`ID`, `Email`, `DateofSub`) VALUES
(1, 'ani@gmail.com', '2021-07-16 07:32:33'),
(2, 'rahul@gmail.com', '2021-07-16 07:32:33'),
(3, 'ganesh@gmail.com', '2021-07-21 07:36:46'),
(4, 'ak@gmail.com', '2021-07-25 17:25:29'),
(5, 'jamessebastian916@gmail.com', '2021-12-13 06:50:31'),
(6, 'jamessebastian916@gmail.com', '2021-12-13 07:08:44'),
(7, 'jamessebastian916@gmail.com', '2021-12-13 07:14:18'),
(8, 'jamessebastian916@gmail.com', '2021-12-13 07:18:19'),
(9, 'jamessebastian916@gmail.com', '2021-12-13 07:20:27'),
(10, 'jamessebastian916@gmail.com', '2021-12-13 07:26:26'),
(11, 'jamessebastian916@gmail.com', '2021-12-13 07:29:59'),
(12, 'jamessebastian916@gmail.com', '2021-12-13 07:33:05'),
(13, 'jamessebastian916@gmail.com', '2021-12-13 10:26:55'),
(14, 'praveensudharsanan@gmail.com', '2021-12-13 20:46:54'),
(15, 'praveensudharsanan@gmail.com', '2021-12-13 20:47:22'),
(16, 'jamessebastian916@gmail.com', '2021-12-17 08:52:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL CHECK (octet_length(`name`) > 0),
  `type` enum('admin','customer') NOT NULL CHECK (octet_length(`type`) > 0),
  `email` varchar(100) NOT NULL CHECK (octet_length(`email`) > 0),
  `password` text NOT NULL CHECK (octet_length(`password`) > 0),
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modification_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `type`, `email`, `password`, `creation_date`, `modification_date`) VALUES
(7, 'yo', 'admin', 'jamessebastian916@gmail.com', '$2y$10$AKv5ImcNOEN0SJG.BnFkx.gAzH968jyOVtPPGkDk9jA63/dpL7BWu', '2021-12-13 05:07:27', '2021-12-13 10:34:34'),
(8, 'suja george', 'customer', 'suja@gmial.com', '$2y$10$yOYpvS56b4R3NSdqZKEO5ur1OZ3ymr3wDTTB8XA11qGav8gKswHqW', '2021-12-13 09:58:56', '2021-12-13 09:58:56'),
(9, 'praveen', 'customer', 'praveensudharsanan@gmail.com', '$2y$10$VWL5LtdgV4GjpmT8Yya4juyeXL0Ih/04UviRwtgaWbyFpzE7zMo/G', '2021-12-13 20:48:32', '2021-12-13 20:48:32'),
(10, 'dsf', 'customer', 'fssf@dfsd.sdf', '$2y$10$ZiYofMuuGvZvRJQZS1ll3OPuOHjkECM3stJ7mmx6eiX613wlS7B8K', '2021-12-13 22:00:52', '2021-12-13 22:00:52'),
(13, 'cfg', 'customer', 'asd@james.cc', '$2y$10$a7LxsDORmyYJ4/dzNeVQzuDf3X2iGne1zdQQJv9iI65S2qKaUmdZy', '2021-12-13 22:03:17', '2021-12-13 22:03:17'),
(15, 'yosad', 'customer', 'y@g.c', '$2y$10$PAhwCzpHuUia5LJFnP69ue2Wu1Y7Z7PeSFk8IQV8hjzkDRmK8Lvzi', '2021-12-13 22:08:28', '2021-12-13 22:08:28'),
(18, 'suja george', 'customer', 'sdf@sdf.sdf', '$2y$10$on4AoRtib3onZo.J8N.Or.sA8EDqeEXZolszsHvEMDfeHTsVoWM0S', '2021-12-13 22:10:50', '2021-12-13 22:10:50'),
(19, 'james', 'customer', 'sdfds@gdgd.df', '$2y$10$kColb4Zjhd0Rp2JLBdZHkuUkVrUNnJ7h5G8.P9PXe9tS8fZP8W7g2', '2021-12-13 22:13:27', '2021-12-13 22:13:27'),
(20, 'suja george', 'customer', 'sds@df.dsf', '$2y$10$VBDIIINMVMI9UU5ywHNAVOpyyKgEBUhU3sQfb.OGM7gXB7bjfNtTW', '2021-12-13 22:14:40', '2021-12-17 08:39:39'),
(21, 'dsfds', 'customer', 'recon@fdsf.cc', '$2y$10$tNBDjGOznK5rIHepMLCUpOi6bucpP6Pgp.BYHW2Im2mXc5A6R1sxm', '2021-12-13 22:17:49', '2021-12-13 22:17:49'),
(24, 'james', 'customer', 'sdf@sdf.df', '$2y$10$TlMi3t.HdIEXrrTbLYvciOZhA/64l6p4Ol248/XkxjUteM.8s.Pdu', '2021-12-17 08:31:01', '2021-12-17 08:31:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
