-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2024 at 12:56 PM
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
-- Database: `makeup`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `cart_item_id` int(100) NOT NULL,
  `order_id` int(100) NOT NULL,
  `customer_id` int(100) NOT NULL,
  `quantity` int(5) NOT NULL,
  `course_name` varchar(200) NOT NULL,
  `course_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`cart_item_id`, `order_id`, `customer_id`, `quantity`, `course_name`, `course_price`) VALUES
(1, 1, 2, 1, '', 0),
(2, 3, 2, 1, '', 0),
(3, 5, 2, 1, 'Party MakeUp Course', 4999),
(4, 6, 2, 1, 'Party MakeUp Course', 4999),
(5, 7, 2, 1, 'Party MakeUp Course', 4999),
(6, 8, 1, 1, 'Self-MakeUp Course', 1999),
(7, 8, 2, 1, 'Party MakeUp Course', 4999);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `cid` int(10) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `cprice` int(10) NOT NULL,
  `cdays` varchar(50) NOT NULL,
  `images` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`cid`, `cname`, `cprice`, `cdays`, `images`, `details`) VALUES
(1, 'Self-MakeUp Course', 1999, '2', 'images/courses/smc.png', 'self-makeup course is a tailored program designed to help individuals learn the art of enhancing their own features through makeup. It covers essential topics such as skincare, understanding your skin type, and choosing the right products for your complexion. Participants are taught how to apply foundation, concealer, and contour for a natural and polished look, as well as techniques for eyeshadow, eyeliner, mascara, and lip color application. The course also focuses on creating day-to-day looks'),
(2, 'Party MakeUp Course', 4999, '5 ', 'images/courses/pmc.png', 'A party makeup course teaches individuals how to create glamorous, long-lasting looks perfect for special occasions. It covers advanced techniques for applying bold eyeshadow, winged eyeliner, false lashes, and statement lip colors. The course also focuses on flawless base makeup, contouring, highlighting, and setting techniques to ensure the makeup stays intact throughout the event. Ideal for those seeking polished, eye-catching party looks.'),
(3, 'Bridal MakeUp Course', 9999, '15', 'images/courses/bmc.png', 'A bridal makeup course is designed to teach makeup artists and enthusiasts how to create flawless, long-lasting bridal looks. It covers techniques for prepping the skin, selecting the right foundation, and enhancing features with contouring, highlighting, and eye makeup tailored for photography. Participants learn to create elegant, timeless styles that suit various wedding themes and skin tones, ensuring the bride looks radiant throughout her special day.'),
(4, 'Eye-MakeUp Courses', 1500, '3', 'images/courses/emc.png', 'An eye makeup course teaches essential techniques to enhance and define the eyes. Participants learn how to apply eyeshadow, eyeliner, and mascara, with a focus on blending, shading, and creating depth. The course covers day and evening looks, smokey eyes, winged liner, and tips for different eye shapes. Perfect for beginners or enthusiasts, this course helps individuals master eye makeup for a polished, professional appearance.');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(100) NOT NULL,
  `customer_id` int(100) NOT NULL,
  `ship_fullname` varchar(100) NOT NULL,
  `ship_phone` bigint(250) NOT NULL,
  `ship_address` varchar(200) NOT NULL,
  `payment_info` varchar(50) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `status` enum('new','processing','completed','cancelled','deleted') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `ship_fullname`, `ship_phone`, `ship_address`, `payment_info`, `timestamp`, `status`) VALUES
(1, 1, '', 0, '', 'phonepe', 1727106631, 'new'),
(2, 1, '', 0, '', 'phonepe', 1727106718, 'new'),
(3, 1, '', 0, '', 'phonepe', 1727106744, 'new'),
(4, 1, '', 0, '', 'phonepe', 1727106806, 'new'),
(5, 1, '', 0, '', 'phonepe', 1727106832, 'new'),
(6, 1, 'sunanda', 8670831475, 'Kolkata', 'phonepe', 1727111505, 'new'),
(7, 1, '', 0, '', 'phonepe', 1727331178, 'new'),
(8, 1, 'sunanda', 8670831475, 'Kolkata', 'phonepe', 1727345331, 'new');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `sid` int(11) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `sprice` int(11) NOT NULL,
  `stime` int(11) NOT NULL,
  `images` varchar(200) NOT NULL,
  `details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`sid`, `sname`, `sprice`, `stime`, `images`, `details`) VALUES
(1, 'Basic Makeup Application', 3500, 1, 'images/services/1.jpg', 'Service: Simple everyday makeup, including foundation, concealer, blush, light eyeshadow, eyeliner, and lip color.\r\n'),
(2, 'Bridal Makeup\r\n', 18000, 3, 'images/services/2.jpg', 'Service: Full makeup for brides, including contouring, highlighting, and long-lasting products, tailored to the wedding theme and dress.'),
(3, 'Bridesmaid/Party Makeup\r\n', 5500, 2, 'images/services/3.jpg', 'Service: Similar to bridal makeup but less elaborate, focusing on natural beauty with moderate glam for events like weddings or parties.'),
(4, 'Editorial/Photoshoot Makeup', 10000, 3, 'images/services/4.jpg', 'Service: Bold and creative looks designed for editorial shoots, fashion shows, or themed projects.\r\n'),
(5, 'Makeup for Men\r\n', 5000, 1, 'images/services/5.jpg', 'Service: Light makeup to enhance features for photoshoots, TV appearances, or weddings, focusing on a natural, undetectable finish.\r\n'),
(6, 'Hair Styling', 1500, 2, 'images/services/6.jpg', 'Service: Our hair stylist gives an ultimate and elegant look with all the advance products that will give a attractive output.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `uemail` varchar(120) NOT NULL,
  `upass` varchar(20) NOT NULL,
  `uaddress` varchar(50) NOT NULL,
  `uphone` bigint(20) NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `uemail`, `upass`, `uaddress`, `uphone`, `timestamp`) VALUES
(1, 'sunanda', 'sunandapatra21@gmail.com', 'sunanda', 'Kolkata', 8670831475, '2024-09-21 13:10:16'),
(2, 'sunanda', 'sunandapatra21@gmail.com', '$2y$10$KSxOOqVLxQ/sJ', 'Maliara,hattala', 8670831475, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`cart_item_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `cart_item_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
