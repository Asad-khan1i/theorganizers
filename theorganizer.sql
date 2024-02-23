-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2024 at 10:01 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theorganizer`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city`) VALUES
(14, 'islamabad'),
(15, 'swat'),
(16, 'kaghan'),
(17, 'Naran');

-- --------------------------------------------------------

--
-- Table structure for table `destintion`
--

CREATE TABLE `destintion` (
  `id` int(11) NOT NULL,
  `dest` varchar(29) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destintion`
--

INSERT INTO `destintion` (`id`, `dest`) VALUES
(10, 'bahrain'),
(11, 'kalam'),
(12, 'malam jabba');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `hotelName` varchar(255) NOT NULL,
  `city` varchar(120) NOT NULL,
  `featureImg` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `map` varchar(1200) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `price` varchar(11) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `hotelName`, `city`, `featureImg`, `images`, `map`, `destination`, `price`, `description`) VALUES
(27, 'Honeymood hotel', 'islamabad', 'hotel4.jpg', 'hotel4.jpg,hotel3.jpg,hotel2.jpg,hotel1.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d878609.3299863981!2d71.885269678125!3d30.66022220000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922b7c422da0787%3A0x79c49eb51c9e7a53!2sHilton%20Hotel!5e0!3m2!1sen!2s!4v1705315495859!5m2!1sen!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'bahrain', '35000', 'kd ;sjnoidojnvioj j;kvniov;jrgir'),
(28, 'hotel hilton', 'swat', 'hotel2.jpg', 'hotel4.jpg,hotel3.jpg,hotel2.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3399.953662290249!2d74.33382498156887!3d31.552886279027526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391904c8606da7e9%3A0xd70a28b88f7720d7!2sPearl%20Continental%20Hotel%2CLahore!5e0!3m2!1sen!2s!4v1705407052880!5m2!1sen!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'kalam', '30,000', '<p>mmoye moyee</p>');

-- --------------------------------------------------------

--
-- Table structure for table `hotelcategory`
--

CREATE TABLE `hotelcategory` (
  `id` int(11) NOT NULL,
  `hcategory` varchar(29) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotelcategory`
--

INSERT INTO `hotelcategory` (`id`, `hcategory`) VALUES
(7, 'deluxe'),
(8, 'normal'),
(9, 'honeymoon');

-- --------------------------------------------------------

--
-- Table structure for table `hotelorder`
--

CREATE TABLE `hotelorder` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `email` varchar(28) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `departureDate` date NOT NULL,
  `arrivalDate` date NOT NULL,
  `noOfTicket` varchar(30) NOT NULL,
  `male` varchar(11) NOT NULL,
  `female` varchar(14) NOT NULL,
  `child` varchar(14) NOT NULL,
  `message` varchar(200) NOT NULL,
  `totalprice` varchar(29) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotelorder`
--

INSERT INTO `hotelorder` (`id`, `fname`, `email`, `phone`, `departureDate`, `arrivalDate`, `noOfTicket`, `male`, `female`, `child`, `message`, `totalprice`) VALUES
(38, 'ASad khan', 'a6677707941@gmaill.com', '039087', '2024-02-06', '2024-02-20', '12', '6', '3', '3', 'zxcklm \'', ''),
(39, '', 'admin@gmail.com', '03251916216', '2024-02-20', '0000-00-00', '', '1', '1', '2', '/ck vmladfp', ''),
(53, '', 'a67707941@gmail.com', '03251916216', '2024-02-06', '2024-02-19', '2', '1', '1', '1', ';knckslAK', ''),
(54, '', 'a67707941@gmail.com', '03251916216', '2024-02-06', '2024-02-19', '2', '1', '1', '1', ';knckslAK', ''),
(55, '', 'a67707941@gmail.com', '03251916216', '2024-02-06', '2024-02-19', '2', '1', '1', '1', ';knckslAK', '');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `services` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(20) NOT NULL,
  `Hotel` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `services`, `image`, `price`, `Hotel`) VALUES
(14, '7', 'breakfast', '7.jpg', '30,000', '16'),
(15, '9', 'breakfast,heater,cooler', 'hotel3.jpg', '35000', '22'),
(16, '7', 'breakfast,dinner,central coolin', 'hotel1.jpg', '30,000', '29');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `id` int(11) NOT NULL,
  `tourname` varchar(30) NOT NULL,
  `city` varchar(28) NOT NULL,
  `price` varchar(30) NOT NULL,
  `images` varchar(29) NOT NULL,
  `featureImg` varchar(29) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `days` varchar(11) NOT NULL,
  `person` varchar(11) NOT NULL,
  `departureDate` varchar(29) NOT NULL,
  `arrivalDate` varchar(29) NOT NULL,
  `age` varchar(11) NOT NULL,
  `pickupPoint` varchar(29) NOT NULL,
  `language` varchar(29) NOT NULL,
  `departureLocation` varchar(29) NOT NULL,
  `room` varchar(29) NOT NULL,
  `departureTime` time DEFAULT NULL,
  `arrivalTime` time DEFAULT NULL,
  `services` varchar(29) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`id`, `tourname`, `city`, `price`, `images`, `featureImg`, `duration`, `description`, `days`, `person`, `departureDate`, `arrivalDate`, `age`, `pickupPoint`, `language`, `departureLocation`, `room`, `departureTime`, `arrivalTime`, `services`) VALUES
(7, '', 'kaghan', '30000', 'hotel4.jpg,hotel3.jpg,hotel2.', 'hotel3.jpg', '', '<p>pn;fsjopigjeriopjryjio</p>', '', '4', '2024-02-09', '2024-02-27', '1', 'D ground', 'Urdu, English', 'D ground', 'yes', '19:20:00', '13:18:00', 'Array'),
(8, '', 'swat', '30000', 'hotel4.jpg,hotel3.jpg,hotel2.', 'hotel1.jpg', '', '<p>gndgi;ogaadgfko[dgh[ioauio</p>', '', '4', '2024-02-21', '2024-02-22', '1', 'D ground', 'Urdu, English', 'D ground', 'yes', '13:21:00', '19:20:00', 'Array');

-- --------------------------------------------------------

--
-- Table structure for table `tourorder`
--

CREATE TABLE `tourorder` (
  `id` int(11) NOT NULL,
  `totalperson` varchar(11) NOT NULL,
  `male` varchar(11) NOT NULL,
  `female` varchar(11) NOT NULL,
  `child` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `country` varchar(29) NOT NULL,
  `province` varchar(18) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tourorder`
--

INSERT INTO `tourorder` (`id`, `totalperson`, `male`, `female`, `child`, `email`, `phone`, `country`, `province`, `city`, `address`) VALUES
(17, '3', '1', '2', '1', 'admin@gmail.com', '03251916216', 'pakistan', 'punjab', 'kaghan', 'house no 44 no 3 jk;f');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'theorganizers@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destintion`
--
ALTER TABLE `destintion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotelcategory`
--
ALTER TABLE `hotelcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotelorder`
--
ALTER TABLE `hotelorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourorder`
--
ALTER TABLE `tourorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `destintion`
--
ALTER TABLE `destintion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `hotelcategory`
--
ALTER TABLE `hotelcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hotelorder`
--
ALTER TABLE `hotelorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tourorder`
--
ALTER TABLE `tourorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
