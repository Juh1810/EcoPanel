-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2024 at 08:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecopanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `order_id` int(11) NOT NULL,
  `custName` text NOT NULL,
  `Item` text NOT NULL,
  `Quantity` int(11) NOT NULL,
  `subtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`order_id`, `custName`, `Item`, `Quantity`, `subtotal`) VALUES
(1, 'Juhaina', 'Monocrystalline', 1, 550),
(2, 'Marwa', 'Polycrystalline', 2, 726),
(3, 'Hajir', 'Light', 4, 160),
(4, 'Salim', 'Charger', 2, 130),
(5, 'Juhaina', 'Camera', 1, 95),
(6, 'AlZahraa', 'Monocrystalline 400W', 2, 1100),
(7, 'Hajir', 'Polycrystalline 400W', 1, 380);

-- --------------------------------------------------------

--
-- Table structure for table `customers_contact`
--

CREATE TABLE `customers_contact` (
  `customer_id` int(11) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` text NOT NULL,
  `customer_msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers_contact`
--

INSERT INTO `customers_contact` (`customer_id`, `customer_name`, `customer_email`, `customer_msg`) VALUES
(1, 'Juhaina', 's140615@student.squ.edu.om', 'great website'),
(2, 'Khaloud', 's136968@student.squ.edu.om', 'good service'),
(3, 'Rayan', 's142015@student.squ.edu.om', 'add more products'),
(4, 'Asma', 'aalsaidi@squ.edu.om', 'Love the website, easy to use and well organized'),
(5, 'AlZahra', 's137084@student.squ.edu.om', ''),
(6, 'Salma', 's131121@student.squ.edu.om', 'the website is fantastic , the service is excellent and it is easy to use.'),
(7, 'Ali', 's142331@student.squ.edu.om', 'I tried to order and the quality was very good , also it arrived on time .');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `product_info` text NOT NULL,
  `product_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_info`, `product_price`) VALUES
(1, 'Monocrystaline', '330W', 335),
(2, 'Polycrystalline', '330W', 363),
(3, 'Monocrystaline', '400W', 550),
(4, 'Polycrystalline', '400W', 380),
(5, 'Holder', 'solar panel holder', 30),
(6, 'charger', 'solar charger 30000mAh', 65),
(7, 'camera', 'solar charging surveillance camera', 95),
(8, 'light', 'solar powered light tout', 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `customers_contact`
--
ALTER TABLE `customers_contact`
  ADD UNIQUE KEY `UNIQUE` (`customer_id`),
  ADD UNIQUE KEY `customer_id` (`customer_id`),
  ADD UNIQUE KEY `customer_id_2` (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD UNIQUE KEY `product_id` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


--
-- Table structure for table `solar_panels`
--

CREATE TABLE `solar_panels` (
  `brand` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `wattage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `solar_panels`
--

INSERT INTO `solar_panels` (`brand`, `type`, `wattage`) VALUES
('SolarTech', 'Monocrystalline', 330),
('EcoPower', 'Polycrystalline', 330),
('SunRise', 'Polycrystalline', 400),
('Panasonic', 'Monocrytalline', 234);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
