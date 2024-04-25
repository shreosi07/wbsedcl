-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 08:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wbsedcl`
--

-- --------------------------------------------------------

--
-- Table structure for table `cs_details`
--

CREATE TABLE `cs_details` (
  `id` int(255) NOT NULL,
  `name` varchar(200) NOT NULL,
  `consumer_id` varchar(500) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone no` varchar(15) NOT NULL,
  `email` varchar(150) NOT NULL,
  `supply office` varchar(150) NOT NULL,
  `installation no` varchar(150) NOT NULL,
  `connection date` date NOT NULL,
  `connection status` varchar(100) NOT NULL,
  `meter no` varchar(150) NOT NULL,
  `rate category` varchar(200) NOT NULL,
  `connection load` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cs_details`
--

INSERT INTO `cs_details` (`id`, `name`, `consumer_id`, `address`, `phone no`, `email`, `supply office`, `installation no`, `connection date`, `connection status`, `meter no`, `rate category`, `connection load`) VALUES
(1, 'Sayan Rajak Das', '513155689', 'Police line', '2147483647', 'sayan@gmail.com', 'sector 2', '356447897', '2022-12-31', 'Domestric', 'BE0214785', 'DM_U', '24454854'),
(2, 'Sayan Rajak', '513155655', 'Police ', '9856220114', 'sayan@gmail.com', 'sector 4', '356447854', '2022-12-31', 'Domestric', 'BE0214766', 'DM_U', '24454832'),
(3, 'Shuvajit Barik', '512062464', 'Ausgram', '8158859185', 'shuvajit@gmail.com', 'Guskara', '123456', '2008-08-11', 'Domestric', '329', 'DM_U', '1.55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cs_details`
--
ALTER TABLE `cs_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cs_details`
--
ALTER TABLE `cs_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
