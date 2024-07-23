-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2024 at 07:04 PM
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
-- Database: `intelliagric`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(1, 'Mukaka'),
(2, 'Mr chimuti'),
(3, 'testing ');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(11) NOT NULL,
  `ip_add` varchar(50) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'bethel'),
(2, 'bethel'),
(3, 'fruits'),
(4, 'here for testing'),
(5, 'Vegitables');

-- --------------------------------------------------------

--
-- Table structure for table `equipmenthiring`
--

CREATE TABLE `equipmenthiring` (
  `equip_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `specs_id` int(11) NOT NULL,
  `equip_hire_status` varchar(20) NOT NULL,
  `equip_notes` text DEFAULT NULL,
  `pickup_location` varchar(255) DEFAULT NULL,
  `equip_daily_cost` decimal(10,2) NOT NULL,
  `avail_equip_qty` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `equip_specs`
--

CREATE TABLE `equip_specs` (
  `specs_id` int(11) NOT NULL,
  `equip_category` varchar(100) NOT NULL,
  `equip_brand` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hirepayment`
--

CREATE TABLE `hirepayment` (
  `pay_id` int(11) NOT NULL,
  `hire_id` int(11) NOT NULL,
  `amt` double NOT NULL,
  `currency` text NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hires`
--

CREATE TABLE `hires` (
  `hire_id` int(11) NOT NULL,
  `equip_id` int(11) NOT NULL,
  `hired_by` int(11) NOT NULL,
  `hire_date` date NOT NULL,
  `return_date` date NOT NULL,
  `total_cost` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `land`
--

CREATE TABLE `land` (
  `land_id` int(11) NOT NULL,
  `land_description` text NOT NULL,
  `owner_id` int(11) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `size` decimal(10,2) DEFAULT NULL,
  `land_notes` text DEFAULT NULL,
  `land_status` varchar(20) NOT NULL,
  `land_cost` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `landborrowing`
--

CREATE TABLE `landborrowing` (
  `borrow_id` int(11) NOT NULL,
  `land_id` int(11) NOT NULL,
  `borrower_id` int(11) NOT NULL,
  `borrow_start_date` date NOT NULL,
  `borrow_end_date` date DEFAULT NULL,
  `total_cost` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `landpayment`
--

CREATE TABLE `landpayment` (
  `payment_id` int(11) NOT NULL,
  `borrow_id` int(11) NOT NULL,
  `payment_date` date NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_method` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `amt` double NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `currency` text NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_cat` int(11) NOT NULL,
  `product_brand` int(11) NOT NULL,
  `product_title` varchar(200) NOT NULL,
  `product_price` double NOT NULL,
  `product_desc` varchar(500) DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `product_keywords` varchar(100) DEFAULT NULL,
  `product_doe` date NOT NULL DEFAULT current_timestamp(),
  `product_discount` float NOT NULL,
  `product_qnty` int(11) NOT NULL,
  `admin_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`, `product_doe`, `product_discount`, `product_qnty`, `admin_id`) VALUES
(1, 4, 2, 'Discover the unmatched taste of our finest pork selections, meticulously raised and expertly crafted to deliver unparalleled flavor and tenderness.', 23, 'testing', '667eff5eadb20.jpg', 'Game Meat is Special', '0000-00-00', 0, 212, 0),
(2, 4, 3, 'testing', 232, 'testing', '667eff5eadb20.jpg', 'testing', '0000-00-00', 0, 1212, 0),
(3, 3, 3, 'testing 2', 232, 'testing 2', '667eff5eadb20.jpg', 'testing_2', '2024-06-29', 12, 212, 0),
(4, 4, 2, 'Discover the unmatched taste of our finest pork selections, meticulously raised and expertly crafted to deliver unparalleled flavor and tenderness.', 232, 'testing', '667eff5eadb20.jpg', 'Game Meat is Special', '2024-06-28', 12, 212, 1),
(5, 3, 2, 'cabbages', 120, 'Good quality cabbages ', '667eff5eadb20.jpg', 'godd quality cabbages', '2024-06-29', 30, 1212, 1),
(6, 5, 1, 'cabbages', 500, 'Discover the crisp, fresh taste of our Organic Cabbage, handpicked at peak ripeness to ensure the highest quality for your kitchen. Each head of cabbage is grown using sustainable farming practices, free from harmful pesticides and chemicals, offering a pure and healthy addition to your meals.', '667eff5eadb20.jpg', 'greens, Organic Cabbage,', '2024-07-05', 30, 212, 1),
(7, 5, 2, 'Fresh and Flavorful Tomatoes', 100, 'Experience the vibrant taste of our farm-fresh tomatoes, harvested at peak ripeness to ensure unparalleled flavor and nutrition. Perfectly juicy with a delightful balance of sweetness and acidity, our tomatoes are versatile for any culinary creation. Whether sliced in a salad, simmered into a rich pasta sauce, or enjoyed fresh with a sprinkle of sea salt, each bite promises a burst of garden-fresh goodness. Elevate your dishes with our premium tomatoes and savor the essence of summer all year ro', '667f45b25e3eb.png', ' Memory updated Sure, here’s a product description for selling tomatoes:  Fresh and Flavorful Tomato', '2024-07-06', 12, 1212, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pass` varchar(150) NOT NULL,
  `user_country` varchar(30) NOT NULL,
  `user_city` varchar(30) NOT NULL,
  `user_contact` varchar(15) NOT NULL,
  `user_image` varchar(100) DEFAULT NULL,
  `user_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_country`, `user_city`, `user_contact`, `user_image`, `user_role`) VALUES
(1, 'Panashe', 'bethel.choto@ashesi.edu.gh', '$2y$10$SNi1MdQwBlLZxcC64mYv6eew8OayG8SbFTfncq/zmNDPCOPg/v4ky', 'Zimbabwe', 'Chinhoyi', '209246391', '666396759b42e.jpeg', 1),
(2, 'panashe', 'panashe@gmail.com', '$2y$10$1HffWUoTP0hUj5Z/CF/EZe7SX0WnaxQhoYIEJd/qO5F9cGnNnLd4K', 'Ghana', 'Accra', '786122047', '667db5560cff7.jpeg', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `p_id` (`p_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `equipmenthiring`
--
ALTER TABLE `equipmenthiring`
  ADD PRIMARY KEY (`equip_id`),
  ADD KEY `specs_id` (`specs_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `equip_specs`
--
ALTER TABLE `equip_specs`
  ADD PRIMARY KEY (`specs_id`);

--
-- Indexes for table `hirepayment`
--
ALTER TABLE `hirepayment`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `hirepayment_ibfk_1` (`hire_id`);

--
-- Indexes for table `hires`
--
ALTER TABLE `hires`
  ADD PRIMARY KEY (`hire_id`),
  ADD KEY `hired_by` (`hired_by`),
  ADD KEY `equip_id` (`equip_id`);

--
-- Indexes for table `land`
--
ALTER TABLE `land`
  ADD PRIMARY KEY (`land_id`);

--
-- Indexes for table `landborrowing`
--
ALTER TABLE `landborrowing`
  ADD PRIMARY KEY (`borrow_id`),
  ADD KEY `landborrowing_ibfk_1` (`land_id`),
  ADD KEY `landborrowing_ibfk_2` (`borrower_id`);

--
-- Indexes for table `landpayment`
--
ALTER TABLE `landpayment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `landpayment_ibfk_1` (`borrow_id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_cat` (`product_cat`),
  ADD KEY `product_brand` (`product_brand`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `equipmenthiring`
--
ALTER TABLE `equipmenthiring`
  MODIFY `equip_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `equip_specs`
--
ALTER TABLE `equip_specs`
  MODIFY `specs_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hirepayment`
--
ALTER TABLE `hirepayment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hires`
--
ALTER TABLE `hires`
  MODIFY `hire_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `land`
--
ALTER TABLE `land`
  MODIFY `land_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `landborrowing`
--
ALTER TABLE `landborrowing`
  MODIFY `borrow_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `landpayment`
--
ALTER TABLE `landpayment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `equipmenthiring`
--
ALTER TABLE `equipmenthiring`
  ADD CONSTRAINT `equipmenthiring_ibfk_1` FOREIGN KEY (`specs_id`) REFERENCES `equip_specs` (`specs_id`),
  ADD CONSTRAINT `equipmenthiring_ibfk_2` FOREIGN KEY (`owner_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `hirepayment`
--
ALTER TABLE `hirepayment`
  ADD CONSTRAINT `hirepayment_ibfk_1` FOREIGN KEY (`hire_id`) REFERENCES `hires` (`hire_id`);

--
-- Constraints for table `hires`
--
ALTER TABLE `hires`
  ADD CONSTRAINT `hires_ibfk_1` FOREIGN KEY (`equip_id`) REFERENCES `equipmenthiring` (`equip_id`),
  ADD CONSTRAINT `hires_ibfk_2` FOREIGN KEY (`hired_by`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `landborrowing`
--
ALTER TABLE `landborrowing`
  ADD CONSTRAINT `landborrowing_ibfk_1` FOREIGN KEY (`land_id`) REFERENCES `land` (`land_id`),
  ADD CONSTRAINT `landborrowing_ibfk_2` FOREIGN KEY (`borrower_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `landpayment`
--
ALTER TABLE `landpayment`
  ADD CONSTRAINT `landpayment_ibfk_1` FOREIGN KEY (`borrow_id`) REFERENCES `landborrowing` (`borrow_id`);

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`product_cat`) REFERENCES `categories` (`cat_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`product_brand`) REFERENCES `brands` (`brand_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
