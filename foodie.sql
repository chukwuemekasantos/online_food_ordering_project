-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 28, 2018 at 11:26 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodie`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_add_product`
--

CREATE TABLE `admin_add_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_category` varchar(50) NOT NULL,
  `product_type` varchar(50) NOT NULL,
  `product_price` bigint(20) NOT NULL,
  `product_status` varchar(30) NOT NULL,
  `time_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_add_product`
--

INSERT INTO `admin_add_product` (`product_id`, `product_name`, `product_category`, `product_type`, `product_price`, `product_status`, `time_added`) VALUES
(1, 'Vegas Bread Small', 'snacksanddricks', 'snacks', 250, 'No', '2018-12-24 07:31:41'),
(2, 'Vegas Bread Medium', 'snacksanddricks', 'snacks', 350, 'Yes', '2018-12-24 07:17:29'),
(3, 'Pessi', 'snacksanddricks', 'Drinks', 100, 'Yes', '2018-12-24 07:23:29'),
(4, 'Garri and Egusi Soup', 'swallow', 'swallow', 300, 'Yes', '2018-12-28 08:47:52'),
(5, 'Meat', 'swallow', 'Meat', 100, 'Yes', '2018-12-28 09:03:06'),
(6, 'Rice and Stew', 'fastfood', 'fastfood', 300, 'Yes', '2018-12-28 10:58:12');

-- --------------------------------------------------------

--
-- Table structure for table `admin_reg`
--

CREATE TABLE `admin_reg` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(200) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(350) NOT NULL,
  `admin_phone` varchar(11) NOT NULL,
  `time_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_reg`
--

INSERT INTO `admin_reg` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_phone`, `time_reg`) VALUES
(1, 'chukwu chukwuemeka emeka', 'chukwuanthony555@yahoo.com', '$2y$10$I2szLNKbpTHP8DRQ2i9.COxP53NTxcbsMY./3KRt4/3zjSJeom0Jy', '08132230767', '2018-12-27 05:53:39');

-- --------------------------------------------------------

--
-- Table structure for table `reg_users`
--

CREATE TABLE `reg_users` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(300) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(400) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `time_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_users`
--

INSERT INTO `reg_users` (`user_id`, `full_name`, `email`, `password`, `phone`, `time_reg`) VALUES
(1, 'Chisom Ijeoma chisom', 'chukwuanthony553@yahoo.com', '$2y$10$6Sx.cWdTpXbWAE1GB7wuOeeB78s03iyQZIEL7nBfmVRO5ejucDvi.', '08132230767', '2018-12-17 13:14:02'),
(2, 'chukwu chukwuemeka', 'chukwuanthony@yahoo.com', '$2y$10$0TfQqiBewodnfodI23DzDeAu/fFUL.0YRmzLFV38W.gFeAYRXDQZy', '08132230767', '2018-12-17 07:27:34'),
(3, 'Santos Emeka chukwu', 'chukwuanthony555@yahoo.com', '$2y$10$6FY3IWDIdYjmYN/gCA64JeVsP1AE4yb.tHoHqSvv8Zham0lLEXMXS', '08132230767', '2018-12-25 17:45:58'),
(4, 'chukwu chukwuemeka sanos', 'santio@gmail.com', '$2y$10$Nrj0ezeYue8FMFekklG2h.kmjYyaY/d4A0SakZklaZv77dWgAapnW', '08132230767', '2018-12-22 04:28:16'),
(5, 'chukwu chukwuemeka santos', 'santio55@gmail.com', '$2y$10$Wmz51Dcr1NZamu2QVEubXuX46QEby2IzwpzfY/Jmx39V.D1an8lB6', '08132230767', '2018-12-28 06:21:18'),
(6, 'ben', 'santio556@gmail.com', '$2y$10$VfF1t0e/VJ4wXBTi7yIP1O8EWYy/Yvw4we8.JVPJA6VnP0qtF7XAS', '08132230767', '2018-12-24 17:19:39'),
(7, 'kalu', 'santio554@gmail.com', '$2y$10$zbOuYVXhoNlAaTbQ1ZKALeYD1tf4BbMHBAWtyYmfO7dsBjiRrUp.a', '08132230767', '2018-12-24 17:22:36'),
(8, 'nano', 'santio557@gmail.com', '$2y$10$IzetzWIH3dpPicKm1xx4veYDRBf.qO.YE7AqtF/HfoBo4biYngf/G', '09090545900', '2018-12-24 17:23:42'),
(9, 'ben', 'santio575@gmail.com', '$2y$10$omb0NIiVvrsVekaesjOQZevpC2osl/jnyiOP57MoAfCwlOy4VddAa', '09090545900', '2018-12-24 17:24:30'),
(10, 'vicky', 'santio57905@gmail.com', '$2y$10$xkJKI3/nfsXErVKaxHeF4OaTZ7kLdP8L5nPUkkyyJsNhYm0BmDSm.', '08132230767', '2018-12-24 17:27:44'),
(11, 'bencat', 'santio5587@gmail.com', '$2y$10$dZ3WEEIU/Yeg2SfKItSGY.AlK23mnpegQF5DRBTNa7j0XiIdKDAGe', '08132230767', '2018-12-25 19:42:13');

-- --------------------------------------------------------

--
-- Table structure for table `user_message`
--

CREATE TABLE `user_message` (
  `message_id` int(11) NOT NULL,
  `users_name` varchar(200) NOT NULL,
  `users_email` varchar(300) NOT NULL,
  `users_phone` varchar(11) NOT NULL,
  `users_message` longtext NOT NULL,
  `users_id` bigint(20) NOT NULL,
  `time_sent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_message`
--

INSERT INTO `user_message` (`message_id`, `users_name`, `users_email`, `users_phone`, `users_message`, `users_id`, `time_sent`) VALUES
(1, 'chukwu chukwuemeka santos', 'santio55@gmail.com', '08132230767', 'how to fund my account', 5, '2018-12-26 19:01:08'),
(2, 'chukwu chukwuemeka santos', 'santio55@gmail.com', '08132230767', 'how to fund my account', 5, '2018-12-26 19:08:49'),
(3, 'chukwu chukwuemeka santos', 'santio55@gmail.com', '08132230767', 'how to fund my account', 5, '2018-12-26 19:08:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_add_product`
--
ALTER TABLE `admin_add_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `admin_reg`
--
ALTER TABLE `admin_reg`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `reg_users`
--
ALTER TABLE `reg_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_message`
--
ALTER TABLE `user_message`
  ADD PRIMARY KEY (`message_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_add_product`
--
ALTER TABLE `admin_add_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin_reg`
--
ALTER TABLE `admin_reg`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reg_users`
--
ALTER TABLE `reg_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_message`
--
ALTER TABLE `user_message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
