-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 20, 2020 at 09:57 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id13804502_syrfr`
--
CREATE DATABASE IF NOT EXISTS `id13804502_syrfr` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id13804502_syrfr`;

-- --------------------------------------------------------

--
-- Table structure for table `Asas`
--

CREATE TABLE `Asas` (
  `Idd` int(11) NOT NULL,
  `kind` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dis` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Asas`
--

INSERT INTO `Asas` (`Idd`, `kind`, `color`, `dis`, `price`, `type`, `image`) VALUES
(76, 'كنباية', 'ازرق', 'مفردة', 20000, 'غرفة معيشة', 'https://syr-furniture.000webhostapp.com/uploads/product-1.jpeg'),
(77, 'مجموعة كنبايات', 'اسود', 'مزوجة', 40000, 'غرفة معيشة', 'https://syr-furniture.000webhostapp.com/uploads/product-77.jpeg'),
(78, 'كنباية', 'اصفر', 'مفردة', 30000, 'غرفة معيشة', 'https://syr-furniture.000webhostapp.com/uploads/product-78.jpeg'),
(79, 'مجموعة كنبايات', 'عسلي', 'مزوجة', 50000, 'غرفة معيشة', 'https://syr-furniture.000webhostapp.com/uploads/product-79.jpeg'),
(80, 'اكساء مطبخ', 'عسلي', 'كامل', 100000, 'مطبخ', 'https://syr-furniture.000webhostapp.com/uploads/product-80.jpeg'),
(81, 'اكساء مطبخ', 'ازرق', 'كامل', 150000, 'مطبخ', 'https://syr-furniture.000webhostapp.com/uploads/product-81.jpeg'),
(82, 'تخت', 'عسلي', 'مزوج', 90000, 'غرفة نوم', 'https://syr-furniture.000webhostapp.com/uploads/product-82.jpeg'),
(83, 'تخت', 'اسود ملكي', 'مزوج', 120000, 'غرفة نوم', 'https://syr-furniture.000webhostapp.com/uploads/product-83.jpeg'),
(85, 'طاولة سفرة', 'ابيض فاخر', '12 كرسي', 200000, 'غرفة طعام', 'https://syr-furniture.000webhostapp.com/uploads/product-84.jpeg'),
(86, 'طاولة سفرة', 'اسود', '12 كرسي', 200000, 'غرفة طعام', 'https://syr-furniture.000webhostapp.com/uploads/product-86.jpeg'),
(87, 'كنباية', 'ابيض', 'صغيرة', 25000, 'البلكونة', 'https://syr-furniture.000webhostapp.com/uploads/product-87.jpeg'),
(88, 'كنباية', 'ابيض', 'متوسطة', 30000, 'البلكونة', 'https://syr-furniture.000webhostapp.com/uploads/product-88.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `Login`
--

CREATE TABLE `Login` (
  `Id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` int(11) NOT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Login`
--

INSERT INTO `Login` (`Id`, `user_name`, `user_password`, `total`) VALUES
(1, 'bilal', 123456, NULL),
(2, 'bilaljd', 654321, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `Order_Id` int(11) NOT NULL,
  `Name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `Adress` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `Product_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Orders`
--

INSERT INTO `Orders` (`Order_Id`, `Name`, `Adress`, `Phone`, `Product_id`) VALUES
(6, 'بلال', 'دمشق', '123456789', 78),
(7, 'بلال', 'تجارة', '09966555', 77),
(8, 'محمد ', 'مشروع', '099665547', 81),
(9, 'طلال', 'دمشق', '09852475586', 83),
(10, 'سمير', 'فحامة', '09335544', 81),
(11, 'زهير', 'روضة', '09887988', 81),
(12, 'أحمد', 'حمص', '33445522', 88);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Asas`
--
ALTER TABLE `Asas`
  ADD PRIMARY KEY (`Idd`);

--
-- Indexes for table `Login`
--
ALTER TABLE `Login`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`Order_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Asas`
--
ALTER TABLE `Asas`
  MODIFY `Idd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `Login`
--
ALTER TABLE `Login`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Orders`
--
ALTER TABLE `Orders`
  MODIFY `Order_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
