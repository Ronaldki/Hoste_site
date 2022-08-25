-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2022 at 12:19 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beacon_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_tbl`
--

CREATE TABLE `booking_tbl` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `room_id` int(10) NOT NULL,
  `hostel_id` int(10) NOT NULL,
  `fee_paid` int(10) NOT NULL,
  `Booking_status` varchar(20) NOT NULL,
  `data_crated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_tbl`
--

INSERT INTO `booking_tbl` (`booking_id`, `user_id`, `room_id`, `hostel_id`, `fee_paid`, `Booking_status`, `data_crated`) VALUES
(35, 55, 10, 57, 60000, 'confirmed', '2022-07-08 09:08:10'),
(36, 57, 11, 58, 400000, 'pending', '2022-07-16 10:33:46');

-- --------------------------------------------------------

--
-- Table structure for table `deleted_users`
--

CREATE TABLE `deleted_users` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deleted_users`
--

INSERT INTO `deleted_users` (`id`, `user_id`, `date`) VALUES
(31, 9, '2022-06-15 10:34:00 am');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_tbl`
--

CREATE TABLE `hostel_tbl` (
  `hostel_id` int(11) NOT NULL,
  `hostel_name` varchar(50) NOT NULL,
  `user_id` int(100) NOT NULL,
  `hostel_description` text NOT NULL,
  `hostel_image` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostel_tbl`
--

INSERT INTO `hostel_tbl` (`hostel_id`, `hostel_name`, `user_id`, `hostel_description`, `hostel_image`, `created_date`, `status`) VALUES
(56, 'bako bless', 9, 'affordable single and double rooms', ' IMG-62ad907ed3653.jpg', '2022-06-18 08:44:46', 'active'),
(57, 'pacu wa', 9, 'well rated services fot all tennants, self contain single rooms', ' IMG-62ad90c42b838.jpg', '2022-06-18 08:45:56', 'active'),
(58, 'pilipo', 56, 'soo good ..', ' IMG-62bdd4560a3c1.jpg', '2022-06-30 16:50:30', 'active'),
(59, 'TOP STAR', 56, 'number 1', ' IMG-62bdd6d470a98.jpg', '2022-06-30 17:01:08', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `image_tbl`
--

CREATE TABLE `image_tbl` (
  `image_id` int(11) NOT NULL,
  `hostel_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `image_name` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image_tbl`
--

INSERT INTO `image_tbl` (`image_id`, `hostel_id`, `status`, `image_name`, `created_date`) VALUES
(8, 56, 'double', 'IMG-62ad93d51910d.jpg', '2022-06-18 08:59:01'),
(9, 57, 'single', 'IMG-62ad93e2f30a3.jpg', '2022-06-18 08:59:14'),
(10, 56, 'double', 'IMG-62ad93fa07b80.jpg', '2022-06-18 08:59:38'),
(11, 56, 'single', 'IMG-62ad9635b69bf.jpg', '2022-06-18 09:09:09'),
(12, 58, 'single', 'IMG-62bdd73b4539d.jpg', '2022-06-30 17:02:51'),
(13, 58, 'double', 'IMG-62bdd748ae2ba.jpg', '2022-06-30 17:03:04'),
(14, 59, 'double', 'IMG-62bdd75ff1dff.jpg', '2022-06-30 17:03:27'),
(15, 59, 'single', 'IMG-62bdd76c5d831.jpg', '2022-06-30 17:03:40');

-- --------------------------------------------------------

--
-- Table structure for table `message_tbl`
--

CREATE TABLE `message_tbl` (
  `id` int(150) NOT NULL,
  `text` varchar(100) NOT NULL,
  `status` int(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reciever_id` int(11) NOT NULL,
  `messege_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message_tbl`
--

INSERT INTO `message_tbl` (`id`, `text`, `status`, `user_id`, `reciever_id`, `messege_date`) VALUES
(68, 'hello  admin i need aroom', 0, 55, 1000, '2022-06-25 13:42:42'),
(108, 'i have seen', 0, 56, 56, '2022-07-01 18:34:53'),
(116, 'Your booking was confirmed', 0, 56, 55, '2022-07-03 05:49:26'),
(146, 'Your booking was confirmed', 0, 54, 55, '2022-07-08 09:18:31'),
(147, 'hello', 0, 57, 1000, '2022-07-16 07:26:14'),
(148, 'hello admin', 0, 57, 1000, '2022-07-16 07:34:57'),
(149, 'hello user', 0, 57, 54, '2022-07-16 07:35:38'),
(150, 'i see your messege', 0, 54, 57, '2022-07-16 07:41:10'),
(169, 'how can i help you ?', 0, 54, 54, '2022-07-16 08:34:44'),
(170, 'test', 0, 54, 54, '2022-07-16 08:55:32'),
(171, 'come to me now', 0, 54, 54, '2022-07-16 08:58:13'),
(172, 'hello admin', 0, 57, 1000, '2022-07-16 09:01:03'),
(173, 'hello user', 0, 54, 57, '2022-07-16 09:01:49'),
(177, 'found', 0, 54, 57, '2022-07-16 09:25:42'),
(178, 'found it', 0, 54, 57, '2022-07-16 09:26:46'),
(179, 'then reply too', 0, 54, 57, '2022-07-16 09:29:35'),
(180, 'fake js', 0, 54, 57, '2022-07-16 09:31:10'),
(181, 'ok', 0, 54, 57, '2022-07-16 09:36:02'),
(182, 'r5555', 0, 56, 56, '2022-07-16 10:05:55'),
(183, 'ok thanks', 0, 56, 56, '2022-07-16 10:06:16'),
(184, 'well', 0, 56, 56, '2022-07-16 10:08:09'),
(185, 'boking', 0, 56, 56, '2022-07-16 10:11:31'),
(189, 'kkk', 0, 56, 56, '2022-07-16 10:16:07'),
(190, 'reply', 0, 56, 56, '2022-07-16 10:21:19'),
(191, 'reply', 0, 56, 56, '2022-07-16 10:21:19'),
(192, 'two', 0, 56, 56, '2022-07-16 10:26:03');

-- --------------------------------------------------------

--
-- Table structure for table `report_tbl`
--

CREATE TABLE `report_tbl` (
  `report_id` int(11) NOT NULL,
  `booking_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `room_tbl`
--

CREATE TABLE `room_tbl` (
  `room_id` int(11) NOT NULL,
  `hostel_id` int(10) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `room_fee` int(10) NOT NULL,
  `room_status` varchar(10) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_tbl`
--

INSERT INTO `room_tbl` (`room_id`, `hostel_id`, `room_name`, `room_fee`, `room_status`, `date_create`) VALUES
(6, 56, 'a1', 400000, 'single', '2022-06-18 08:46:54'),
(7, 56, 'd5', 500000, 'double', '2022-06-18 08:47:33'),
(8, 57, 'nevada', 40000, 'single', '2022-06-18 08:47:53'),
(9, 56, 'new york', 40000, 'single', '2022-06-18 08:48:06'),
(10, 57, 'Rondan', 500000, 'double', '2022-06-18 08:48:28'),
(11, 58, 'france', 300000, 'single', '2022-06-30 16:51:02'),
(12, 58, 'nevada', 40000, 'double', '2022-06-30 16:51:25'),
(13, 59, 'abc', 470000, 'single', '2022-06-30 17:01:31'),
(14, 59, 'dc', 400000, 'double', '2022-06-30 17:02:05');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `type` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `password` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `fname`, `lname`, `type`, `phone`, `email`, `image`, `password`, `date`, `status`) VALUES
(1, 'felix', 'ongom', 'super_admi', '0785009090', 'felixongom2018@gmail.com', '', '$2y$10$KKLFcgYQ3g5o/qEYe1wMxerntzwBSGS/Z2C/HrgdRkYoyraJay9Xy', '2022-06-01 11:48:22', 'active'),
(9, 'andrew', 'tobby', 'house_owner', '0393 7878 388', 'andrew@gmail.com', '', '$2y$10$Gzm7trlMCH2vPSWD77G5yOo4GOkW6TbgxVCl6eRYMxO2r9wTYR372', '2022-06-04 17:19:07', 'active'),
(34, 'felix', 'ongom', 'users', '0780508860', 'felixkenya@gmail.com', '', '$2y$10$lI4Dvoj/ha1p3jSPccFTB.o4SOJWFgFSb3Wtbtt3O4mO2VQNz4A6G', '2022-06-17 09:56:57', 'active'),
(38, 'mark', 'okurmo', 'users', '0785009090', 'rronnie@gmail.com', '', '$2y$10$xBduM2jf3GEChuQYnR8X4eeYBtSPJ90GerE.KxX/j1APr1CBFxeB.', '2022-06-17 10:10:59', 'active'),
(48, 'mark', 'okurmo', 'users', '0771430177', 'felixongoddddddm2018@gmail.com', '', '$2y$10$CvYA/IZ8CyVrlO29d/BJpOLIwifYh3n23oXPXf3kpXpb1kttgo2OW', '2022-06-17 11:14:29', 'active'),
(49, 'mark', 'okurmo', 'users', '0771430177', 'felixongom2ddddddd018@gmail.com', '', '$2y$10$TCBs8/M8Cf5G7vsHR8HAhe9P2r6HCegZJymvoDe9LPMw7QhqfS0li', '2022-06-17 11:16:02', 'active'),
(50, 'felix', 'ongom', 'users', '0771430177', 'roledddx@gmail.com', '', '$2y$10$kW6Wgp7TOiXgvpMF5pqwBOrNggT1kJCCr29gSKksS1LaQIt15CUGe', '2022-06-17 11:32:43', 'active'),
(51, 'Tomdd', 'asaww', 'users', '0785009090', 'feliddss2018@gmail.com', '', '$2y$10$t/ERD5m5Gsy3ktb0t8dnwu6GnO9Aj6jfvjnni2lmXJOy1E72rzEEu', '2022-06-17 11:35:22', 'active'),
(52, 'Tomdd', 'asaww', 'users', '0785009090', 'feliddss8@gmail.com', '', '$2y$10$PBzPQcCKwYUs/kO7buY6ieK2mVjD8mJobCX6/K7B3IMTch2qPu2Qu', '2022-06-17 11:39:43', 'active'),
(53, 'mark', 'ongom', 'users', '0771430177', 'fegom2018@gmail.com', '', '$2y$10$1fDVDXuZyaF3NlbxkxByh.hpfQnEVM0zlIyhNysqGy3zPsysIK2Uy', '2022-06-17 11:44:17', 'active'),
(54, 'admin', 'admin', 'super_admin', '0785009090', 'admin@gmail.com', '', '$2y$10$SM.KFDsumWwrtyPg7zcWH..nqblRBRIaOnQHOVmoV/hJB4JDzj8Ny', '2022-06-17 11:46:02', 'active'),
(55, 'felix', 'felix', 'users', '0785009090', 'user@gmail.com', '', '$2y$10$cVU2jiq2T5kPhzln1LNOhe06RFWIi0XQPAR4uLO9wm8yPe1cPwima', '2022-06-22 13:35:58', 'active'),
(56, 'owner', 'admin', 'house_owner', '0774888333', 'owner@gmail.com', '', '$2y$10$/WXXbQBcnb9Q09zwGpPoG.6wAkyhmKk7AftiFqozHfj1.MJPhWCvy', '2022-06-30 16:09:58', 'active'),
(57, 'felix', 'ongom', 'users', '0785009090', 'felix@gmail.com', '', '$2y$10$Ph59F.WpQGMAPLilEGnIxe0LKPyPx0EJ7GB.jey1Cj2ZmBPInHl0C', '2022-07-01 08:49:33', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_tbl`
--
ALTER TABLE `booking_tbl`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `book_hostel` (`hostel_id`),
  ADD KEY `book_room_fkey` (`room_id`),
  ADD KEY `user_booking_key` (`user_id`);

--
-- Indexes for table `deleted_users`
--
ALTER TABLE `deleted_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deleted_use_fkey` (`user_id`);

--
-- Indexes for table `hostel_tbl`
--
ALTER TABLE `hostel_tbl`
  ADD PRIMARY KEY (`hostel_id`),
  ADD KEY `user_hostel_fkey` (`user_id`);

--
-- Indexes for table `image_tbl`
--
ALTER TABLE `image_tbl`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `hostel_fk` (`hostel_id`);

--
-- Indexes for table `message_tbl`
--
ALTER TABLE `message_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_messege_fk` (`user_id`);

--
-- Indexes for table `report_tbl`
--
ALTER TABLE `report_tbl`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `report_booking` (`booking_id`);

--
-- Indexes for table `room_tbl`
--
ALTER TABLE `room_tbl`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `hostel_room_fkey` (`hostel_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_tbl`
--
ALTER TABLE `booking_tbl`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `deleted_users`
--
ALTER TABLE `deleted_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `hostel_tbl`
--
ALTER TABLE `hostel_tbl`
  MODIFY `hostel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `image_tbl`
--
ALTER TABLE `image_tbl`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `message_tbl`
--
ALTER TABLE `message_tbl`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT for table `report_tbl`
--
ALTER TABLE `report_tbl`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room_tbl`
--
ALTER TABLE `room_tbl`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_tbl`
--
ALTER TABLE `booking_tbl`
  ADD CONSTRAINT `book_hostel` FOREIGN KEY (`hostel_id`) REFERENCES `hostel_tbl` (`hostel_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_room_fkey` FOREIGN KEY (`room_id`) REFERENCES `room_tbl` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_booking_key` FOREIGN KEY (`user_id`) REFERENCES `user_tbl` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `deleted_users`
--
ALTER TABLE `deleted_users`
  ADD CONSTRAINT `deleted_use_fkey` FOREIGN KEY (`user_id`) REFERENCES `user_tbl` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hostel_tbl`
--
ALTER TABLE `hostel_tbl`
  ADD CONSTRAINT `user_hostel_fkey` FOREIGN KEY (`user_id`) REFERENCES `user_tbl` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `image_tbl`
--
ALTER TABLE `image_tbl`
  ADD CONSTRAINT `hostel_fk` FOREIGN KEY (`hostel_id`) REFERENCES `hostel_tbl` (`hostel_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `report_tbl`
--
ALTER TABLE `report_tbl`
  ADD CONSTRAINT `report_booking` FOREIGN KEY (`booking_id`) REFERENCES `booking_tbl` (`booking_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `room_tbl`
--
ALTER TABLE `room_tbl`
  ADD CONSTRAINT `hostel_room_fkey` FOREIGN KEY (`hostel_id`) REFERENCES `hostel_tbl` (`hostel_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
