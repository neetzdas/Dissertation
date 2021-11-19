-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 06:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diss_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `contact_num` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `fullName`, `type`, `contact_num`, `email`, `password`) VALUES
(1, 'Adam Zieu', 'Super', '+9779865784332', 'super@gmail.com', '$2y$10$9XMHU0NDhsvtJT0lGw9L5.J4os4VtgNo8mm/26m9iKHcdwy1afeKe'),
(2, 'Rama Adhikari', 'Electricity', '+9779815674434', 'rama@gmail.com', '$2y$10$CmeIk.xGXLxg9LQv7Kit5esiWl77Oo5U3eYDFRQgvwuHo1TWzt6JC'),
(3, 'Niush Adhikari', 'Drinking water', '+9779814434656', 'niush@gmail.com', '$2y$10$lT6UDFjpaAnu7zho4AG/uuDx4xZMvQutA5DrZoyuiTgbcL7/h2pwe');

-- --------------------------------------------------------

--
-- Table structure for table `tb_counters`
--

CREATE TABLE `tb_counters` (
  `c_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_counters`
--

INSERT INTO `tb_counters` (`c_id`, `name`) VALUES
(1, 'Achham'),
(2, 'Attariya'),
(3, 'Balaju'),
(4, 'Bardibas'),
(5, 'Bhadrapur'),
(6, 'Chabahil'),
(7, 'Chautara'),
(8, 'Darchula'),
(9, 'Dharan'),
(10, 'Gaushala'),
(11, 'Hetauda'),
(12, 'Itahari'),
(13, 'Jajarkot'),
(14, 'Janakpur'),
(15, 'Kavre'),
(16, 'Kritipur'),
(17, 'Lamjung'),
(18, 'Mainapokhari'),
(19, 'Nepalgunj'),
(20, 'Panchthar'),
(21, 'Pokhara'),
(22, 'Rajbiraj'),
(23, 'Simara'),
(24, 'Tatopani');

-- --------------------------------------------------------

--
-- Table structure for table `tb_customers`
--

CREATE TABLE `tb_customers` (
  `customer_id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `contactNum` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  `sc_no` varchar(20) DEFAULT NULL,
  `e_consumer_id` int(11) DEFAULT NULL,
  `m_id` int(11) DEFAULT NULL,
  `dw_consumer_id` int(11) NOT NULL,
  `digit` varchar(255) NOT NULL,
  `verification_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_customers`
--

INSERT INTO `tb_customers` (`customer_id`, `fullName`, `type`, `contactNum`, `email`, `password`, `image`, `c_id`, `sc_no`, `e_consumer_id`, `m_id`, `dw_consumer_id`, `digit`, `verification_num`) VALUES
(1, 'Jeon Jungkook					', 'Both', '+9779813411378', 'jeon@gmail.com', '$2y$10$tLWefFRg7hQPb2uiT4zwIeZ1rnqn4oyk4fMh.Xfgjhv3Nel7AnZXi', 'user.jpg', 16, '8765RT', 106, 11, 15, 'afda1097e59e54edc47dc992f2db2893', 1),
(2, 'Rashmi Pradhan', 'Drinking Water', '+977984567546', 'rashmi@gmail.com', '$2y$10$xlbkMQi9ocjC75njPst6VOFhtiJmSCOxFF0UF0voiHRCVeNepExh2', 'user4.jpg', NULL, NULL, NULL, 3, 12, '9b4d236125ca87bb4416c36c5785a414', 1),
(3, 'Kim Taehyung	', 'Electricity', '+9779840657687', 'kim@gmail.com', '$2y$10$jXSP8059EOKmyJeIYF1rTuRlu.atBZjBrzCM7UhAowtj72Cj20P4.', 'user7.jpg', 4, '1234AG', 102, NULL, 0, '9e528c7492002b717ef91ca63e4b0931', 1),
(4, 'Sarina Acharya	', 'Electricity', '+9779813400678', 'sarina@gmail.com', '$2y$10$fVkChVdq0gOgpbXYd7T/fO5hDA3sbsoOgTQElHpWBfwx9VXo8O.16', 'user3.jpg', 4, '1234BC', 103, NULL, 0, '214762bc2e4c25ea5eb15604fb1dc09d', 1),
(5, 'Amir Bhandari	', 'Electricity', '+9779840098687', 'amir@gmail.com', '$2y$10$mHilDx0s5SJ3oXg18kZDHu4IA1TFBOMOYgWOqJfRudNKOM0C48Lu6', NULL, 13, '7234BD', 108, NULL, 0, 'ef552003b3efc3c3e0f43f4c26f14b4e', 1),
(6, 'Sagun Bhandari', 'Drinking Water', '+9779813460678', 'sagun@gmail.com', '$2y$10$oyhVEgK0pgCmRLL.jfJhYO4aMvtb7phtDbxGCfZLxn7FogMjfUDlG', 'user5.jpg', NULL, NULL, NULL, 6, 17, '1adc737b073a731c535c9434877bdae0', 1),
(7, 'Neeraj Das', 'Both', '+9779817857018', 'neeraj@gmail.com', '$2y$10$asr1m8H9SK3xDN3Rg0wZzeGjj1/kcTVzvQLVecTRvfbA7cMeUtZyG', NULL, 3, '8934BC	', 110, 4, 19, '091a7c1df6accac753c1c624c657b409', 1),
(8, 'Mayur Shrestha', 'Drinking Water', '+9779840657689', 'mayur@gmail.com', '$2y$10$Q7gNLZni2gWzIIWnjRrMteGtmktB/mzI8o24huuBC.tOBT90STVgm', NULL, NULL, NULL, NULL, 1, 19, '8312d1026389e28fa6a5d5063ddc26e4', 1),
(16, 'Neetu Das', 'Both', '+9779813457678', 'neetz.das07@gmail.com', '$2y$10$cYtdL.05B.9raFGgk7YJJ..O2mYy1v0.zv2hLZ/USNkMoTmjYwKRW', NULL, 16, '1234AS', 101, 11, 11, '9e5a88e91df447e137266c6de875cefa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_dwbills`
--

CREATE TABLE `tb_dwbills` (
  `dwBill_id` int(11) NOT NULL,
  `dconsumer_id` int(11) NOT NULL,
  `reading_date` date NOT NULL,
  `billing_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `due_date` date NOT NULL,
  `consumed_unit` int(10) NOT NULL,
  `bill_amt` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dwbills`
--

INSERT INTO `tb_dwbills` (`dwBill_id`, `dconsumer_id`, `reading_date`, `billing_date`, `due_date`, `consumed_unit`, `bill_amt`, `status`) VALUES
(1, 3, '2021-03-08', '2021-03-11 18:07:17', '2021-03-28', 10, '171', 1),
(2, 1, '2021-03-08', '2021-03-12 18:03:59', '2021-03-25', 7, '150', 1),
(3, 1, '2021-04-06', '2021-04-09 14:23:12', '2021-04-30', 12, '185', 1),
(4, 2, '2021-03-05', '2021-03-10 17:45:26', '2021-03-29', 13, '192', 1),
(5, 2, '2021-04-06', '2021-04-11 17:00:28', '2021-04-28', 7, '150', 0),
(6, 6, '2021-04-05', '2021-04-09 17:01:07', '2021-04-25', 15, '206', 0),
(7, 5, '2021-04-05', '2021-04-09 18:05:51', '2021-04-25', 6, '150', 1),
(8, 6, '2021-04-04', '2021-04-09 05:52:18', '2021-04-30', 9, '164', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_dwconsumers`
--

CREATE TABLE `tb_dwconsumers` (
  `dconsumer_id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactNum` varchar(15) NOT NULL,
  `m_id` int(11) NOT NULL,
  `consumer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dwconsumers`
--

INSERT INTO `tb_dwconsumers` (`dconsumer_id`, `fullName`, `email`, `contactNum`, `m_id`, `consumer_id`) VALUES
(1, 'Neetu Das', 'neetz.das07@gmail.com', '+9779813457678', 11, 11),
(2, 'Jeon Jungkook			', 'jeon@gmail.com', '+9779813411378', 11, 15),
(3, 'Rashmi Pradhan', 'rashmi@gmail.com', '+977984567546', 3, 12),
(4, 'Ratika Shrestha', 'ratika@gmail.com', '+9779840657997', 4, 14),
(5, 'Sagun Bhandari', 'sagun@gmail.com', '+9779813460678', 6, 17),
(6, 'Mayur Shrestha', 'mayur@gmail.com', '+9779840657689', 1, 19),
(8, 'Ishwor Paudel', 'ishwor@gmail.com', '+9779817400678', 7, 16),
(9, 'Neeraj Das', 'neeraj@gmail.com', '+9779817857018', 4, 19);

-- --------------------------------------------------------

--
-- Table structure for table `tb_dwpayments`
--

CREATE TABLE `tb_dwpayments` (
  `dp_id` int(11) NOT NULL,
  `dwBill_id` int(11) NOT NULL,
  `paid_date` date NOT NULL,
  `paid_amt` varchar(10) NOT NULL,
  `paidBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dwpayments`
--

INSERT INTO `tb_dwpayments` (`dp_id`, `dwBill_id`, `paid_date`, `paid_amt`, `paidBy`) VALUES
(1, 4, '2021-03-28', '192', 1),
(2, 2, '2021-04-20', '150', 1),
(3, 7, '2021-03-23', '150', 6),
(4, 1, '2021-03-18', '171', 2),
(10, 3, '2021-06-09', '185', 16);

-- --------------------------------------------------------

--
-- Table structure for table `tb_ebills`
--

CREATE TABLE `tb_ebills` (
  `eBill_id` int(11) NOT NULL,
  `econsumer_id` int(11) NOT NULL,
  `reading_date` date NOT NULL,
  `billing_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `due_date` date NOT NULL,
  `consumed_unit` int(10) NOT NULL,
  `per_unit_price` varchar(6) NOT NULL,
  `bill_amt` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ebills`
--

INSERT INTO `tb_ebills` (`eBill_id`, `econsumer_id`, `reading_date`, `billing_date`, `due_date`, `consumed_unit`, `per_unit_price`, `bill_amt`, `status`) VALUES
(1, 3, '2021-01-05', '2021-01-09 18:00:35', '2021-01-25', 112, '8', '896', 1),
(2, 6, '2021-02-08', '2021-02-11 16:33:36', '2021-02-24', 132, '8', '1056', 0),
(3, 2, '2021-02-07', '2021-02-12 17:57:40', '2021-02-25', 121, '8', '968', 1),
(4, 1, '2021-03-05', '2021-03-09 18:02:22', '2021-03-23', 50, '6.5', '325', 1),
(5, 1, '2021-04-04', '2021-04-08 14:21:08', '2021-04-27', 52, '8', '416', 1),
(6, 7, '2021-03-04', '2021-03-11 17:43:48', '2021-03-28', 152, '9.5', '1444', 1),
(7, 7, '2021-04-03', '2021-04-08 16:38:54', '2021-04-26', 140, '8', '1120', 0),
(8, 4, '2021-04-06', '2021-04-09 16:39:34', '2021-04-29', 70, '8', '560', 0),
(9, 5, '2021-04-06', '2021-04-11 16:39:57', '2021-04-26', 49, '6.5', '318.5', 0),
(10, 6, '2021-04-08', '2021-04-11 17:50:11', '2021-04-28', 113, '8', '904', 0),
(12, 1, '2021-05-05', '2021-05-08 13:09:13', '2021-05-27', 51, '8', '408', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_econsumers`
--

CREATE TABLE `tb_econsumers` (
  `econsumer_id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactNum` varchar(15) NOT NULL,
  `c_id` int(11) NOT NULL,
  `sc_no` varchar(12) NOT NULL,
  `consumer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_econsumers`
--

INSERT INTO `tb_econsumers` (`econsumer_id`, `fullName`, `email`, `contactNum`, `c_id`, `sc_no`, `consumer_id`) VALUES
(1, 'Neetu Das', 'neetz.das07@gmail.com', '+9779813457678', 16, '1234AS', 101),
(2, 'Kim Taehyung', 'kim@gmail.com', '+9779840657687', 4, '1234AG', 102),
(3, 'Sarina Acharya', 'sarina@gmail.com', '+9779813400678', 4, '1234BC', 103),
(4, 'Swastika Adhikari', 'swastika@gmail.com', '+9779813457018', 15, '1234DC', 104),
(5, 'Dikshya Ghale', 'dikshya@gmail.com', '+9779849145678', 24, '2345EV', 105),
(6, 'Amir Bhandari', 'amir@gmail.com', '+9779840098687', 13, '7234BD', 108),
(7, 'Jeon Jungkook', 'jeon@gmail.com', '+9779813411378', 16, '8765RT', 106),
(8, 'Saurabh Chaudhary', 'saurabh@gmail.com', '+9779845675678', 4, '6634BD', 109),
(9, 'Neeraj Das', 'neeraj@gmail.com', '+9779817857018', 3, '8934BC', 110),
(10, 'Sarika Bhattrai', 'sarika@gmail.com', '+9779819457018', 19, '3332ED', 113),
(13, 'Neetu Das', 'neetz.das07@gmail.com', '+9779813457678', 14, '4321SA', 198);

-- --------------------------------------------------------

--
-- Table structure for table `tb_enquiry`
--

CREATE TABLE `tb_enquiry` (
  `enquiry_id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `contactNum` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_enquiry`
--

INSERT INTO `tb_enquiry` (`enquiry_id`, `fullName`, `contactNum`, `email`, `description`, `status`) VALUES
(2, 'Kim Taehyung', '+9779849145678', 'kim@gmail.com', 'Hi, I just want to tell that your system is going great!', 1),
(3, 'Sarina Acharya', '+9779813457018', 'sarina@gmail.com', 'Thank you for this system, it has helping me a lot!', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_epayments`
--

CREATE TABLE `tb_epayments` (
  `ep_id` int(11) NOT NULL,
  `eBill_id` int(11) NOT NULL,
  `paid_date` date NOT NULL,
  `paid_amt` varchar(10) NOT NULL,
  `paidBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_epayments`
--

INSERT INTO `tb_epayments` (`ep_id`, `eBill_id`, `paid_date`, `paid_amt`, `paidBy`) VALUES
(1, 6, '2021-03-25', '1444', 1),
(2, 3, '2021-02-17', '968', 3),
(3, 1, '2021-01-21', '896', 4),
(4, 4, '2021-03-23', '325', 4),
(14, 5, '2021-06-09', '416', 16);

-- --------------------------------------------------------

--
-- Table structure for table `tb_merchants`
--

CREATE TABLE `tb_merchants` (
  `m_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_merchants`
--

INSERT INTO `tb_merchants` (`m_id`, `name`) VALUES
(1, 'Aabu Khaireni Khanepani'),
(2, 'Baglung Khanepani'),
(3, 'Beni Khanepani'),
(4, 'Chundevi Khanepani'),
(5, 'Derauli Khanepani'),
(6, 'Gumi Khanepani'),
(7, 'Hile Khanepani'),
(8, 'Bindabasini Khanepani'),
(9, 'Tulsi Khanepani'),
(11, 'Thankot Khanepani'),
(16, 'Kritipur Khanepani');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `contact_num` (`contact_num`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tb_counters`
--
ALTER TABLE `tb_counters`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tb_customers`
--
ALTER TABLE `tb_customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `contactNum` (`contactNum`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `m_id` (`m_id`);

--
-- Indexes for table `tb_dwbills`
--
ALTER TABLE `tb_dwbills`
  ADD PRIMARY KEY (`dwBill_id`),
  ADD KEY `dconsumer_id` (`dconsumer_id`);

--
-- Indexes for table `tb_dwconsumers`
--
ALTER TABLE `tb_dwconsumers`
  ADD PRIMARY KEY (`dconsumer_id`),
  ADD KEY `m_id` (`m_id`);

--
-- Indexes for table `tb_dwpayments`
--
ALTER TABLE `tb_dwpayments`
  ADD PRIMARY KEY (`dp_id`),
  ADD KEY `dwBill_id` (`dwBill_id`),
  ADD KEY `paidBy` (`paidBy`);

--
-- Indexes for table `tb_ebills`
--
ALTER TABLE `tb_ebills`
  ADD PRIMARY KEY (`eBill_id`),
  ADD KEY `econsumer_id` (`econsumer_id`);

--
-- Indexes for table `tb_econsumers`
--
ALTER TABLE `tb_econsumers`
  ADD PRIMARY KEY (`econsumer_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `tb_enquiry`
--
ALTER TABLE `tb_enquiry`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- Indexes for table `tb_epayments`
--
ALTER TABLE `tb_epayments`
  ADD PRIMARY KEY (`ep_id`),
  ADD KEY `eBill_id` (`eBill_id`),
  ADD KEY `paidBy` (`paidBy`);

--
-- Indexes for table `tb_merchants`
--
ALTER TABLE `tb_merchants`
  ADD PRIMARY KEY (`m_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_counters`
--
ALTER TABLE `tb_counters`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_customers`
--
ALTER TABLE `tb_customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_dwbills`
--
ALTER TABLE `tb_dwbills`
  MODIFY `dwBill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_dwconsumers`
--
ALTER TABLE `tb_dwconsumers`
  MODIFY `dconsumer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_dwpayments`
--
ALTER TABLE `tb_dwpayments`
  MODIFY `dp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_ebills`
--
ALTER TABLE `tb_ebills`
  MODIFY `eBill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_econsumers`
--
ALTER TABLE `tb_econsumers`
  MODIFY `econsumer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_enquiry`
--
ALTER TABLE `tb_enquiry`
  MODIFY `enquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_epayments`
--
ALTER TABLE `tb_epayments`
  MODIFY `ep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_merchants`
--
ALTER TABLE `tb_merchants`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_customers`
--
ALTER TABLE `tb_customers`
  ADD CONSTRAINT `tb_customers_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `tb_counters` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_customers_ibfk_2` FOREIGN KEY (`m_id`) REFERENCES `tb_merchants` (`m_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_dwbills`
--
ALTER TABLE `tb_dwbills`
  ADD CONSTRAINT `tb_dwbills_ibfk_1` FOREIGN KEY (`dconsumer_id`) REFERENCES `tb_dwconsumers` (`dconsumer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_dwconsumers`
--
ALTER TABLE `tb_dwconsumers`
  ADD CONSTRAINT `tb_dwconsumers_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `tb_merchants` (`m_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_dwpayments`
--
ALTER TABLE `tb_dwpayments`
  ADD CONSTRAINT `tb_dwpayments_ibfk_1` FOREIGN KEY (`dwBill_id`) REFERENCES `tb_dwbills` (`dwBill_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_dwpayments_ibfk_2` FOREIGN KEY (`paidBy`) REFERENCES `tb_customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_ebills`
--
ALTER TABLE `tb_ebills`
  ADD CONSTRAINT `tb_ebills_ibfk_1` FOREIGN KEY (`econsumer_id`) REFERENCES `tb_econsumers` (`econsumer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_econsumers`
--
ALTER TABLE `tb_econsumers`
  ADD CONSTRAINT `tb_econsumers_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `tb_counters` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_epayments`
--
ALTER TABLE `tb_epayments`
  ADD CONSTRAINT `tb_epayments_ibfk_1` FOREIGN KEY (`eBill_id`) REFERENCES `tb_ebills` (`eBill_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_epayments_ibfk_2` FOREIGN KEY (`paidBy`) REFERENCES `tb_customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
