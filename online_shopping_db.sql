-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2021 at 11:53 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shopping_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_table`
--

CREATE TABLE `cart_table` (
  `cart_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` double NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE `category_table` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registration_date` date NOT NULL DEFAULT current_timestamp(),
  `category_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`category_id`, `category_name`, `registration_date`, `category_image`, `category_description`) VALUES
(1, 'Sea-Food-Pizza', '2021-09-30', '4_zu_3_Teaser_Google_Pixel_5.jpg', 'hellolllllllllllll11111111aaaaaaaaahellolllllllllllll11111111aaaaaaaaahellolllllllllllll11111111aaaaaaaaahellolllllllllllll11111111aaaaaaaaahellolllllllllllll11111111aaaaaaaaahellollllll'),
(2, 'Vegetable-Pizza', '2021-10-04', '4_zu_3_Teaser_Google_Pixel_5.jpg', 'heellllooooooo2heellllooooooo2heellllooooooo2heellllooooooo2heellllooooooo2heellllooooooo2heellllooooooo2heellllooooooo2heellllooooooo2heellllooooooo2'),
(3, 'Cheese-Pizza', '2021-10-04', '4_zu_3_Teaser_Google_Pixel_5.jpg', 'heellllooooooo3heellllooooooo3heellllooooooo3heellllooooooo3heellllooooooo3heellllooooooo3heellllooooooo3heellllooooooo3heellllooooooo3heellllooooooo3heellllooooooo3'),
(4, 'Pork-Pizza', '2021-10-04', 'images.jpg', 'heellllooooooo4heellllooooooo4heellllooooooo4heellllooooooo4heellllooooooo4heellllooooooo4heellllooooooo4heellllooooooo4heellllooooooo4heellllooooooo4heellllooooooo4heellllooooooo4'),
(18, 'Chicken-Pizza', '2021-10-06', 'images.jpg', 'asasasasasasasasasasasasasasasasasasasasasasassssssssssssssssssssssssssssssssssaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(19, 'Cow-Pizza', '2021-10-06', '4_zu_3_Teaser_Google_Pixel_5.jpg', 'Cow r Very Cow'),
(20, 'Duck-Pizza', '2021-10-06', 'images.jpg', 'Duck R very Duck');

-- --------------------------------------------------------

--
-- Table structure for table `customer_table`
--

CREATE TABLE `customer_table` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer_table`
--

INSERT INTO `customer_table` (`customer_id`, `name`, `email`, `phone`, `password`, `address`, `date`) VALUES
(1, 'Nay Ba La', 'nay@gmail.com', '', 'nay123', '3rd,Ayeyarwady', '2021-09-25'),
(2, 'cus1', 'cus@gmail.com', '', 'cus000001', 'adafas', '2021-09-26'),
(3, 'cus2', 'cus2@gmail.com', '', 'cus000002', 'aasfafa', '2021-09-26'),
(17, 'cus1', 'cus1@gmail.com', '1213213123', '12345678', '12345678', '2021-09-27'),
(18, 'cus1', 'cus4@gmail.com', '1223123', '12345678', '12345678', '2021-09-27'),
(20, 'admin_id', 'naybala@gmail.com', '1233123', '12345678', 'asdasfaf', '2021-09-30'),
(21, 'cus7', 'cus7@gmail.com', '1233123', 'asdfghjkl', 'asdasfaf', '2021-10-04'),
(22, 'Nay Ba La', 'naybalaasdfg@gmail.com', '1234234', 'asdfghjkl', 'asda', '2021-10-04'),
(23, 'cus8', 'cus8@gmail.com', '12121121', '12345678', 'asdasfds', '2021-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `employee_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`employee_id`, `name`, `email`, `phone`, `password`, `address`, `role_id`, `date`, `admin_id`) VALUES
(28, 'Nay NAy HR', 'hr@gmail.com', '1233123', '12345678', 'asdasfaf', 1, '2021-09-30', 1),
(32, 'Nay Nay Nay', 'mananger@gmail.com', '09250123361', '12345678', 'Yangon', 2, '2021-09-30', 1),
(33, 'Nay Secretary', 'secretary@gmail.com', '1233123', 'asdfghjkl', 'asdasfaf', 3, '2021-09-30', 1),
(37, 'Nay Staff', 'staff@gmail.com', '1233123', '1234567', 'asdasfaf', 4, '2021-10-04', 1),
(38, 'Nay Worker Hello', 'worker1@gmail.com', '09250123361', 'asdfghjkl', 'SuLay', 5, '2021-10-04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail_table`
--

CREATE TABLE `order_detail_table` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remark` text COLLATE utf8_unicode_ci NOT NULL,
  `vocher_code` text COLLATE utf8_unicode_ci NOT NULL,
  `order_date` date NOT NULL DEFAULT current_timestamp(),
  `confirm_date` date NOT NULL,
  `order_status` int(11) NOT NULL,
  `order_total_quantity` int(11) NOT NULL,
  `order_total_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paymentcard_table`
--

CREATE TABLE `paymentcard_table` (
  `paymentcard_id` int(11) NOT NULL,
  `cardname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cardnumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `expiration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cvv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_table`
--

CREATE TABLE `payment_table` (
  `payment_id` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment_table`
--

INSERT INTO `payment_table` (`payment_id`, `payment_type`, `payment_date`) VALUES
(1, 'Cash On Delivery', '2021-10-16'),
(2, 'Credit Card', '2021-10-16'),
(3, 'Visa Card', '2021-10-16');

-- --------------------------------------------------------

--
-- Table structure for table `pre_order_table`
--

CREATE TABLE `pre_order_table` (
  `pre_order_id` int(11) NOT NULL,
  `pre_customer_id` int(11) NOT NULL,
  `pre_order_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pre_order_email` varchar(2555) COLLATE utf8_unicode_ci NOT NULL,
  `pre_order_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pre_order_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `product_id` int(11) NOT NULL,
  `product_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `registration_product_date` date NOT NULL DEFAULT current_timestamp(),
  `product_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`product_id`, `product_code`, `product_name`, `price`, `registration_product_date`, `product_image`, `product_description`, `category_id`) VALUES
(24, 'asdada', 'pizza-2', 11111, '2021-10-04', '4_zu_3_Teaser_Google_Pixel_5.jpg', 'asdasfa', 2),
(25, 'ssss', 'pixxa-1', 1111, '2021-10-04', '4_zu_3_Teaser_Google_Pixel_5.jpg', 'asdsdad', 1),
(26, '123', 'pizza-3', 100, '2021-10-04', 'images.jpg', 'Buy', 3),
(27, '112', 'pizza-4', 200, '2021-10-04', 'images.jpg', 'adaf', 4),
(28, 'SEE11', 'See', 12, '2021-10-16', '4_zu_3_Teaser_Google_Pixel_5.jpg', 'Hello lorem Hello Heloo Hello lorem Hello HelooHello lorem Hello HelooHello lorem Hello HelooHello lorem Hello HelooHello lorem Hello Heloo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `role_table`
--

CREATE TABLE `role_table` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_table`
--

INSERT INTO `role_table` (`role_id`, `role_name`, `date`) VALUES
(1, 'HR', '2021-10-04'),
(2, 'Mananger', '2021-09-27'),
(3, 'Secretary', '2021-09-27'),
(4, 'Staff', '2021-10-04'),
(5, 'Worker', '2021-09-27');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_table`
--

CREATE TABLE `shipping_table` (
  `shipping_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_table`
--
ALTER TABLE `cart_table`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category_table`
--
ALTER TABLE `category_table`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer_table`
--
ALTER TABLE `customer_table`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `order_detail_table`
--
ALTER TABLE `order_detail_table`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `paymentcard_table`
--
ALTER TABLE `paymentcard_table`
  ADD PRIMARY KEY (`paymentcard_id`);

--
-- Indexes for table `payment_table`
--
ALTER TABLE `payment_table`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pre_order_table`
--
ALTER TABLE `pre_order_table`
  ADD PRIMARY KEY (`pre_order_id`);

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `role_table`
--
ALTER TABLE `role_table`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `shipping_table`
--
ALTER TABLE `shipping_table`
  ADD PRIMARY KEY (`shipping_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_table`
--
ALTER TABLE `cart_table`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `category_table`
--
ALTER TABLE `category_table`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `customer_table`
--
ALTER TABLE `customer_table`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `order_detail_table`
--
ALTER TABLE `order_detail_table`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `paymentcard_table`
--
ALTER TABLE `paymentcard_table`
  MODIFY `paymentcard_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment_table`
--
ALTER TABLE `payment_table`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pre_order_table`
--
ALTER TABLE `pre_order_table`
  MODIFY `pre_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `role_table`
--
ALTER TABLE `role_table`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `shipping_table`
--
ALTER TABLE `shipping_table`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
