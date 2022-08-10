-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 11:01 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `phonestore`
--

-- --------------------------------------------------------

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Samsung', 'Samsung Galaxy S6', 352.00, './assets/products/1.png', '2020-12-30 11:08:57'),
(2, 'Redmi', 'Redmi Note 4', 156.00, './assets/products/2.png', '2020-12-30 11:08:57'),
(3, 'Redmi', 'Redmi 5', 134.00, './assets/products/3.png', '2020-12-30 11:08:57'),
(4, 'Redmi', 'Redmi 4', 112.00, './assets/products/4.png', '2020-12-30 11:08:57'),
(5, 'Redmi', 'Redmi Note 4 Pro', 262.00, './assets/products/5.png', '2020-12-30 11:08:57'),
(6, 'Redmi', 'Redmi Note 5', 162.00, './assets/products/6.png', '2020-12-30 11:08:57'),
(7, 'Redmi', 'Redmi Note 5 Pro', 222.00, './assets/products/8.png', '2020-12-30 11:08:57'),
(8, 'Redmi', 'Redmi 6', 302.00, './assets/products/10.png', '2020-12-30 11:08:57'),
(9, 'Samsung', 'Samsung Galaxy S6', 252.00, './assets/products/11.png', '2020-12-30 11:08:57'),
(10, 'Samsung', 'Samsung Galaxy S7', 452.00, './assets/products/12.png', '2020-12-30 11:08:57'),
(11, 'Apple', 'Apple iPhone X', 999.00, './assets/products/13.png', '2020-12-30 11:08:57'),
(12, 'Apple', 'Apple iPhone 4', 202.00, './assets/products/14.png', '2020-12-30 11:08:57'),
(13, 'Apple', 'Apple iPhone 6', 452.00, './assets/products/15.png', '2020-12-30 11:08:57');

-- --------------------------------------------------------

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `user` (`user_id`, `username`, `password`, `name`) VALUES
(1, 'Ghani', '$2y$10$L/ajqSpgElawM/rEorh2o.zW.DuY6Qvw311IUbYpavCUE6q7dQhSG', 'abdul'),
(2, 'Adit','$2y$10$L/ajqSpgElawM/rEorh2o.zW.DuY6Qvw311IUbYpavCUE6q7dQhSG', 'Samiaji');

-- --------------------------------------------------------

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);


--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

