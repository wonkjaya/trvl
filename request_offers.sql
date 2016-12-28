-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 28, 2016 at 12:38 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mlg_travel`
--

--
-- Truncate table before insert `post_images`
--

TRUNCATE TABLE `post_images`;
--
-- Dumping data for table `post_images`
--

INSERT INTO `post_images` (`image_id`, `post_id`, `image_key`, `image_value`, `description`) VALUES
(1, 1, 'thumnail', 'tangkuban-perahu.jpg', ''),
(2, 2, 'thumnail', 'kawah-ijen.jpg', ''),
(3, 3, 'thumnail', 'tanah-lot.jpg', ''),
(4, 4, 'thumnail', 'lake-singkarak.jpg', ''),
(5, 5, 'thumnail', 'pantai-bunaken.jpg', ''),
(6, 6, 'thumnail', 'taman-mini-indonesia.jpg', ''),
(7, 7, 'thumnail', 'pantai-sanur-bali.jpg', ''),
(8, 8, 'thumnail', 'raja-ampat.jpg', ''),
(9, 9, 'thumnail', 'pantai-indrayanti.jpg', ''),
(10, 10, 'thumnail', 'nusa-dua.jpg', ''),
(11, 11, 'thumnail', 'om-hendro.jpg', ''),
(12, 12, 'thumnail', 'om-wawan.jpg', ''),
(13, 13, 'thumnail', 'agan-eko.jpg', ''),
(14, 14, 'thumnail', 'agan-aldo.jpg', ''),
(15, 15, 'thumnail', 'neng-icha.jpg', ''),
(16, 16, 'thumnail', 'agan-ferdy.jpg', ''),
(17, 17, 'thumnail', 'om-setyo.jpg', ''),
(18, 18, 'thumnail', 'neng-mariska.jpg', ''),
(19, 19, 'thumnail', 'neng-silvi.jpg', ''),
(20, 20, 'thumnail', 'neng-riska.jpg', ''),
(21, 25, 'thumnail', 'camry.jpg', ''),
(22, 26, 'thumnail', 'family-car.jpg', ''),
(23, 27, 'thumnail', 'big-jeep.jpg', ''),
(24, 28, 'thumnail', 'resort-bintang.jpg', ''),
(25, 3, 'gallery', 'tanah-lot-1.jpg', ''),
(26, 3, 'gallery', 'tanah-lot-2.jpg', ''),
(27, 3, 'gallery', 'tanah-lot-3.jpg', ''),
(28, 3, 'gallery', 'tanah-lot-4.jpg', ''),
(29, 3, 'gallery', 'tanah-lot-5.jpg', ''),
(30, 3, 'gallery', 'tanah-lot-6.jpg', ''),
(31, 3, 'gallery', 'tanah-lot-7.jpg', ''),
(32, 3, 'gallery', 'tanah-lot-8.jpg', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
