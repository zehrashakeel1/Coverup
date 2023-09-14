-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 06:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cover`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `company_name`, `company_image`) VALUES
(2, 'samsung', 'DB_images/pics/new-smartphone-balancing-with-pebbles_23-2150296459.jpg'),
(3, 'iphones', 'DB_images/pics/elegant-smartphone-composition_23-2149437107.jpg'),
(4, 'oppo ', 'DB_images/pics/new-smartphone-balancing-with-podium_23-2150296471.png'),
(5, 'vivo', 'DB_images/pics/back-position-smartphone-device-tech-generative-ai_188544-12116.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `covers`
--

CREATE TABLE `covers` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(80) NOT NULL,
  `custom_price` int(11) NOT NULL,
  `mob_id_fk` int(11) NOT NULL,
  `image_by_user` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `covers`
--

INSERT INTO `covers` (`id`, `name`, `price`, `image`, `custom_price`, `mob_id_fk`, `image_by_user`) VALUES
(6, 'Silicon Transparent Cover', 850, 'DB_images/pics/i1.jpg', 0, 8, 'null'),
(7, 'Bear Pink Cover', 1000, 'DB_images/pics/i2.jpg', 1600, 8, 'null'),
(8, 'Blue Floral cover', 1000, 'DB_images/pics/i5.jpg', 0, 6, 'null'),
(9, 'Army cover', 1200, 'DB_images/pics/i4.jpg', 1400, 6, 'null'),
(10, 'colorful feather cover ', 1000, 'DB_images/pics/i6.jpg', 1200, 6, 'null'),
(11, 'Black queen cover ', 1200, 'DB_images/pics/i3.jpg', 0, 8, 'null'),
(12, 'oppo1', 2222, 'DB_images/pics/oppo.jpg', 0, 9, 'null'),
(13, 'oppo2', 4555, 'DB_images/pics/ooppo.jpeg', 88888, 10, 'null'),
(14, 'vivo1', 23232, 'DB_images/pics/vivo.jpeg', 8888, 11, 'null'),
(15, 'vivo2', 2222, 'DB_images/pics/vivo.jpeg', 9999, 12, 'null'),
(16, 'samsung', 100, 'DB_images/pics/samsung.jpeg', 3333, 13, 'null'),
(17, 'new', 100, 'DB_images/pics/new-smartphone-balancing-with-podium_23-2150296471.png', 200, 14, 'null');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `order_id_fk` int(11) NOT NULL,
  `cover_id_fk` int(11) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `img_user` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `order_id_fk`, `cover_id_fk`, `quantity`, `img_user`) VALUES
(1, 9, 13, '1', ''),
(2, 10, 8, '1', 'images/icon/cu.png'),
(3, 11, 6, '1', 'images/icon/cu.png'),
(4, 11, 7, '1', 'DB_images/pics/i2.jpg'),
(5, 11, 8, '1', 'DB_images/pics/i5.jpg'),
(6, 12, 15, '1', 'DB_images/pics/vivo.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `id` int(11) NOT NULL,
  `model` varchar(70) NOT NULL,
  `company_id_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`id`, `model`, `company_id_fk`) VALUES
(6, 'iphone11', 3),
(7, 'iphone12', 3),
(8, 'iphone14', 3),
(9, 'oppo1', 4),
(10, 'oppo 2', 4),
(11, 'vivo1', 5),
(12, 'vivo2', 5),
(13, 'samsung', 2),
(14, 'samsung', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `date`, `name`, `address`, `contact`, `status`, `total_price`) VALUES
(9, '2023-09-02', 'ewetr', '456', '1111-111-1111', 'Pending', 4555),
(10, '2023-09-02', 'ewetr', '456', '1111-111-1111', 'Pending', 1000),
(11, '2023-09-02', 'ewetr', '456', '1111-111-1111', 'Pending', 2850),
(12, '2023-09-03', 'zehra', 'karachi', '1111-111-3333', 'confirmed', 2222);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_name`) VALUES
(2, 'Admin'),
(4, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `contact` int(11) NOT NULL,
  `role_id_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `contact`, `role_id_fk`) VALUES
(6, 'zahra', 'Zehra12345', 12345, 2),
(8, 'zara', 'acp', 123456789, 4),
(9, 'zara', 'acp', 1234567, 4),
(10, 'huma', 'Pakistan1234567', 1111, 4);

-- --------------------------------------------------------

--
-- Table structure for table `web_details`
--

CREATE TABLE `web_details` (
  `id` int(11) NOT NULL,
  `msg` varchar(80) NOT NULL,
  `number` varchar(40) NOT NULL,
  `slogan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `web_details`
--

INSERT INTO `web_details` (`id`, `msg`, `number`, `slogan`) VALUES
(1, 'Free shipping for standard order over RS.5000', '+92 324 23456', 'Cover Badlo Phone Nahi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `covers`
--
ALTER TABLE `covers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mob_id_fk` (`mob_id_fk`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `cover_id_fk` (`cover_id_fk`),
  ADD KEY `order_id_fk` (`order_id_fk`);

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id_fk` (`company_id_fk`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id_fk` (`role_id_fk`);

--
-- Indexes for table `web_details`
--
ALTER TABLE `web_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `covers`
--
ALTER TABLE `covers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mobile`
--
ALTER TABLE `mobile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `web_details`
--
ALTER TABLE `web_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `covers`
--
ALTER TABLE `covers`
  ADD CONSTRAINT `covers_ibfk_1` FOREIGN KEY (`mob_id_fk`) REFERENCES `mobile` (`id`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`cover_id_fk`) REFERENCES `covers` (`id`),
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`order_id_fk`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `mobile`
--
ALTER TABLE `mobile`
  ADD CONSTRAINT `mobile_ibfk_1` FOREIGN KEY (`company_id_fk`) REFERENCES `company` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id_fk`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
