-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 06, 2020 at 02:22 PM
-- Server version: 5.7.24
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pickbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(12) NOT NULL,
  `productt_id` int(12) NOT NULL,
  `categoryName` varchar(32) NOT NULL,
  `categoryDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news_letters`
--

CREATE TABLE `news_letters` (
  `news_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `news_subjekt` varchar(200) NOT NULL,
  `news_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderId` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `orderDate` date NOT NULL,
  `shippingaddress` text NOT NULL,
  `wight` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderId`, `users_id`, `orderDate`, `shippingaddress`, `wight`, `total_price`) VALUES
(8, 15, '2020-03-06', 'lextorps, Trollhättan, NY, 1234567,Sweden', 0, 719),
(9, 16, '2020-03-06', 'lextorps, Trollhättan, Västragotland, 46 342,Sweden', 0, 499);

-- --------------------------------------------------------

--
-- Table structure for table `order_detailis`
--

CREATE TABLE `order_detailis` (
  `ids` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `sum` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_detailis`
--

INSERT INTO `order_detailis` (`ids`, `order_id`, `user_id`, `productId`, `sum`, `quantity`, `order_date`) VALUES
(1, 8, 15, 2, 300, 1, '2020-03-06 11:56:10'),
(2, 8, 15, 1, 419, 1, '2020-03-06 11:56:10'),
(3, 9, 16, 2, 499, 1, '2020-03-06 14:16:47');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `description`, `quantity`, `unit_price`, `discount`, `image`) VALUES
(1, 'Changing Times', 'By Jack Sheffield', 99, 419, 20, 0x2e2f696d672f4944393738303535323137343034364032782e706e67),
(2, 'Cryogenic Systems', 'By Randall F. Barron', 118, 499, 20, 0x2e2f696d672f4944393236313031365f4d4032782e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `fulName` varchar(70) NOT NULL,
  `IsAdmin` tinyint(1) NOT NULL,
  `email` text NOT NULL,
  `phone` varchar(18) NOT NULL,
  `adress` text NOT NULL,
  `postNu` varchar(255) NOT NULL,
  `ZIPcode` varchar(20) NOT NULL,
  `city` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL,
  `Password` text NOT NULL,
  `is_news_letter` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `fulName`, `IsAdmin`, `email`, `phone`, `adress`, `postNu`, `ZIPcode`, `city`, `country`, `Password`, `is_news_letter`) VALUES
(14, 'Admin', 1, 'admin@pickbook.com', '0720203140', 'lextorps', '1234567', '1234567', 'Trollhättan', 'Sweden', 'd8913df37b24c97f28f840114d05bd110dbb2e44', 0),
(15, 'samer senbol', 0, 'samer@exampel.com', '0720203140', 'lextorps', '1234567', '1234567', 'Trollhättan', 'Sweden', 'cd9d379715cccc83fd8c8c2dc0730c6dd081bd35', 0),
(16, 'samer2', 0, 'samer2@exampel.com', '0720203140', 'lextorps', '46 342', '46 342', 'Trollhättan', 'Sweden', 'cd9d379715cccc83fd8c8c2dc0730c6dd081bd35', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `productt_id` (`productt_id`);

--
-- Indexes for table `news_letters`
--
ALTER TABLE `news_letters`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `order_detailis`
--
ALTER TABLE `order_detailis`
  ADD PRIMARY KEY (`ids`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news_letters`
--
ALTER TABLE `news_letters`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_detailis`
--
ALTER TABLE `order_detailis`
  MODIFY `ids` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
