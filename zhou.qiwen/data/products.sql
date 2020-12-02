-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 02, 2020 at 12:42 PM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qiwen_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `category` varchar(64) NOT NULL,
  `image_main` varchar(256) NOT NULL,
  `image_other` varchar(512) NOT NULL,
  `image_thumb` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `miles` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `date_create`, `date_modify`, `category`, `image_main`, `image_other`, `image_thumb`, `description`, `miles`) VALUES
(17, 'SUBARU', 12345.00, '2020-12-02 00:20:25', '2020-12-02 00:20:25', 'CAR', 'img/subaru_m.jpg', 'img/subaru_1.jpg, img/subaru_2.jpg', 'img/subaru_2.jpg', 'This is the best car in the world.', '12,675miles'),
(15, 'BMW', 13243.00, '2020-12-02 00:20:25', '2020-12-02 00:20:25', 'CAR', 'img/bmw_1.jpg', 'img/bmw_1.jpg', 'img/bmw_1.jpg', 'This is the best car in the world.', '76,345miles'),
(16, 'NISSAN', 12345.00, '2020-12-02 00:20:25', '2020-12-02 00:20:25', 'CAR', 'img/nissanblue_m.jpg', 'img/nissanblue_m.jpg', 'img/nissanblue_m.jpg', 'This is the best car in the world.', '12,234miles'),
(5, 'FIAT', 100000.00, '2020-12-02 00:09:06', '2020-12-02 00:09:06', 'car', 'img/fiat_m.jpg', 'img/fiat_m.jpg', 'img/fiat_m.jpg', 'The best car in the world.', '34,567miles'),
(6, 'HONDA', 1233445.00, '2020-12-02 00:09:06', '2020-12-02 00:09:06', 'CAR', 'img/hondablack_m.jpg', 'img/hondablack_m.jpg', 'img/hondablack_m.jpg', 'This is the best car in the world.', '56,777miles'),
(7, 'HONDA', 7678876.00, '2020-12-02 00:09:06', '2020-12-02 00:09:06', 'CAR', 'img/hondagrey_m.jpg', 'img/hondagrey_m.jpg', 'img/hondagrey_m.jpg', 'This is the best car in the world.', '87,986miles'),
(8, 'HONDA', 654332.00, '2020-12-02 00:09:06', '2020-12-02 00:09:06', 'CAR', 'img/hondawhite_m.jpg', 'img/hondawhite_m.jpg', 'img/hondawhite_m.jpg', 'This is the best car in the world.', '89,765miles'),
(9, 'HYUNDAI', 12695.00, '2020-12-02 00:09:06', '2020-12-02 00:09:06', 'car', 'img/hyundai_m.jpg', 'img/hyundai_m.jpg', 'img/hyundai_m.jpg', 'This is the best car in the world.', '76,987miles'),
(10, 'LEXUS', 1223455.00, '2020-12-02 00:09:06', '2020-12-02 00:09:06', 'car', 'img/lexus_m.jpg', 'img/lexus_m.jpg', 'img/lexus_m.jpg', 'This is the best car in the world.', '56,987miles'),
(11, 'LEXUS', 123445.00, '2020-12-02 00:09:06', '2020-12-02 00:09:06', 'CAR', 'img/lexusblack_m.jpg', 'img/lexusblack_m.jpg', 'img/lexusblack_m.jpg', 'This is the best car in the world.', '76,875miles'),
(12, 'MINI', 234556.00, '2020-12-02 00:09:06', '2020-12-02 00:09:06', 'CAR', 'img/mini_m.jpg', 'img/mini_m.jpg', 'img/mini_m.jpg', 'This is the best car in the world.', ''),
(13, 'NISSAN', 9999999.99, '2020-12-02 00:09:06', '2020-12-02 00:09:06', 'car', 'img/nissan_m.jpg', 'img/nissan_m.jpg', 'img/nissan_m.jpg', 'This is the best car in the world.', '12,564miles'),
(14, 'VOLKSWAGEN', 1234556.00, '2020-12-02 00:09:06', '2020-12-02 00:09:06', 'CAR', 'img/volkswagen_m.jpg', 'img/volkswagen_m.jpg', 'img/volkswagen_m.jpg', 'This is the best car in the world.', '12,567miles');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
