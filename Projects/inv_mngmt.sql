-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 26, 2020 at 06:51 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inv_mngmt`
--

-- --------------------------------------------------------
--
-- Table structure for table `Admin_login`
--

CREATE TABLE `Admin_login` (
  `Admin_Name` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Admin_login`
--

INSERT INTO `Admin_login` (`Admin_Name`, `Password`) VALUES
('Anjul', 'AJ@822'),
('Krishna', 'KKJ@123');

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(30) DEFAULT NULL,
  `cust_email` varchar(40) DEFAULT NULL,
  `cust_gender` varchar(1) DEFAULT NULL,
  `cust_addr` varchar(50) DEFAULT NULL,
  `cust_phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`cust_id`, `cust_name`, `cust_email`, `cust_gender`, `cust_addr`, `cust_phone`) VALUES
(1000, 'Arun Lal', 'arunlal123@gmail.com', 'M', '421,charbagh Lucknow', '99194567830'),
(1001, 'Amit Rawat', 'amit786@gmail.com', 'M', 'Nayi Basti ,Lucknow', '6388123904'),
(1002, 'Akash Ojha', 'ako123@gmail.com', 'M', 'Behind Mauni Mandir,Orai', '7823591037'),
(1003, 'Priyanka Sharma', 'priyanka123@gmail.com', 'F', 'Lal banglow ,Lucknow', '8923457128'),
(1004, 'Rajesh Kumar', 'rajeshkumar@gmail.com', 'M', 'Bada chaurah, Kanpur', '6782190467'),
(1005, 'Shiksha Prajapati', 'shiksha1206@gmail.com', 'F', '311,Saket Nagar Kanpur', '6399836422'),
(1006, 'Naman Dwivedi', 'nddon@gmail.com', 'M', '322,Kaka Dev Kanpur ', '9415926444'),
(1007, 'Shreya singh', 'shreyastar@gmail.com', 'F', 'Jila Parishad Orai', '9919587093'),
(1008, 'Akshay Ahirwal', 'akki1608@gmail.com', 'M', 'Sabji Mandi,Orai', '9714926695'),
(1009, 'Harshit Shukla', 'harshit1112@gmail.com', 'M', 'Yasoda nagar Kanpur', '83924828479');

-- --------------------------------------------------------

--
-- Table structure for table `Inventory`
--

CREATE TABLE `Inventory` (
  `inv_id` int(11) NOT NULL,
  `inv_qty` int(11) DEFAULT NULL,
  `inv_rate` int(11) DEFAULT NULL,
  `inv_desc` varchar(50) DEFAULT NULL,
  `stock_id` int(11) DEFAULT NULL,
  `inv_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Inventory`
--

INSERT INTO `Inventory` (`inv_id`, `inv_qty`, `inv_rate`, `inv_desc`, `stock_id`, `inv_name`) VALUES
(3000, 1445, 20, 'Mill', 5000, 'Flour'),
(3001, 1500, 25, 'Mill', 5000, 'Grind Flour'),
(3002, 1500, 20, 'Mill', 5000, 'Rava'),
(3003, 200, 85, 'Agent', 5001, 'Arhar Daal'),
(3004, 295, 120, 'Mill', 5002, 'Moong daal'),
(3005, 100, 50, 'Mill', 5002, 'Moong powder'),
(3006, 200, 80, 'Agent', 5003, 'Urad daal'),
(3007, 600, 50, 'Agent', 5004, 'Matar daal'),
(3008, 580, 80, 'Agent', 5005, 'Massor daal'),
(3009, 70, 50, 'Agent', 5006, 'Raajma'),
(3010, 200, 50, 'Mill', 5007, 'Chana Daal'),
(3011, 100, 60, 'Mill', 5007, 'Chana flour');

-- --------------------------------------------------------

--
-- Table structure for table `Payment`
--

CREATE TABLE `Payment` (
  `pay_id` int(11) NOT NULL,
  `pay_amt` int(11) DEFAULT NULL,
  `pay_date` date DEFAULT NULL,
  `inv_id` int(11) DEFAULT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `pay_inv_qty` int(11) DEFAULT NULL,
  `pay_desc` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Payment`
--

INSERT INTO `Payment` (`pay_id`, `pay_amt`, `pay_date`, `inv_id`, `cust_id`, `pay_inv_qty`, `pay_desc`) VALUES
(8000, 600, '2020-02-09', 3000, 1002, 30, 'cash'),
(8001, 1000, '2019-12-25', 3009, 1008, 20, 'Gpay'),
(8003, 5000, '2020-02-28', 3010, 1000, 100, 'Paytm'),
(8004, 600, '2020-02-20', 3004, 1003, 5, 'cash'),
(8005, 500, '2020-06-27', 3000, 1000, 25, 'cash');

-- --------------------------------------------------------

--
-- Stand-in structure for view `presentInventory`
-- (See below for the actual view)
--
CREATE TABLE `presentInventory` (
`stock_id` int(11)
,`inv_rate` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `Purchase`
--

CREATE TABLE `Purchase` (
  `purch_id` int(11) NOT NULL,
  `purch_qty` int(11) DEFAULT NULL,
  `purch_rate` int(11) DEFAULT NULL,
  `stock_id` int(11) DEFAULT NULL,
  `amt_to_pay` int(11) DEFAULT NULL,
  `amt_paid` int(11) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL,
  `purch_date` date DEFAULT NULL,
  `sup_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Purchase`
--

INSERT INTO `Purchase` (`purch_id`, `purch_qty`, `purch_rate`, `stock_id`, `amt_to_pay`, `amt_paid`, `balance`, `purch_date`, `sup_id`) VALUES
(6000, 4000, 20, 5000, 80000, 60000, 20000, '2019-12-26', 4004),
(6001, 500, 80, 5001, 40000, 40000, 0, '2019-11-20', 4002),
(6002, 3000, 18, 5000, 54000, 45000, 9000, '2020-01-20', 4000),
(6003, 90, 40, 5006, 3600, 3600, 0, '2020-02-09', 4002),
(6004, 4000, 17, 5000, 68000, 58000, 10000, '2020-01-26', 4001),
(6005, 600, 35, 5007, 21000, 18000, 3000, '2020-02-24', 4005),
(6006, 400, 30, 5007, 12000, 12000, 0, '2020-01-20', 4003),
(6007, 1000, 85, 5002, 85000, 65000, 20000, '2020-01-20', 4000),
(6008, 200, 75, 5003, 15000, 15000, 0, '2019-05-20', 4003),
(6009, 800, 40, 5004, 32000, 22000, 10000, '2019-01-25', 4004),
(6010, 780, 70, 5005, 54600, 54600, 0, '2019-12-31', 4001);

-- --------------------------------------------------------

--
-- Stand-in structure for view `purchase_status`
-- (See below for the actual view)
--
CREATE TABLE `purchase_status` (
`sup_id` int(11)
,`purch_qty` int(11)
,`balance` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `Staff_login`
--

CREATE TABLE `Staff_login` (
  `StaffName` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Staff_login`
--

INSERT INTO `Staff_login` (`StaffName`, `Password`) VALUES
('Kishan', 'KG@123'),
('Raj', 'RJ@qwerty'),
('Aman', 'ak@456'),
('Aman', 'ak@456');

-- --------------------------------------------------------

--
-- Table structure for table `Stock`
--

CREATE TABLE `Stock` (
  `stock_id` int(11) NOT NULL,
  `stock_item` varchar(50) DEFAULT NULL,
  `stock_qty` int(11) DEFAULT NULL,
  `stock_desc` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Stock`
--

INSERT INTO `Stock` (`stock_id`, `stock_item`, `stock_qty`, `stock_desc`) VALUES
(5000, 'Wheat', 6500, 'excellent quality'),
(5001, 'Arhar Daal', 300, 'average quality'),
(5002, 'Moong ', 600, 'Green'),
(5003, 'Urad ', 200, 'Big Urad'),
(5004, 'Matar daal ', 200, 'Exellent quality'),
(5005, 'Masoor daal', 200, 'Exellent quality'),
(5006, 'Raajma', 90, 'exellent'),
(5007, 'Chana ', 1000, 'Avon quality gram');

-- --------------------------------------------------------

--
-- Table structure for table `Supplier`
--

CREATE TABLE `Supplier` (
  `sup_id` int(11) NOT NULL,
  `sup_name` varchar(30) DEFAULT NULL,
  `sup_email` varchar(40) DEFAULT NULL,
  `supp_addr` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Supplier`
--

INSERT INTO `Supplier` (`sup_id`, `sup_name`, `sup_email`, `supp_addr`) VALUES
(4000, 'Ramesh Gupta', 'ramesh234@gmail.com', 'Ghantaghar, Kanpur'),
(4001, 'Krishna jha', 'kkj@gmail.com', 'near BNSD school Kanpur'),
(4002, 'Shyamu pandey', 'shyamu123@gmail.com', '231,naya ram nagar Kanpur'),
(4003, 'Anshu Sharma', 'anshu@gmail.com', 'Collector Ganj Kanpur'),
(4004, 'Anuj Paliwal', 'anujagro@gmail.com', 'Near jaiswal royal Orai'),
(4005, 'Pramod kumar', 'PK786@gmail.com', 'kajipura Rath');

-- --------------------------------------------------------

--
-- Structure for view `presentInventory`
--
DROP TABLE IF EXISTS `presentInventory`;

CREATE ALGORITHM=UNDEFINED DEFINER=`anjul`@`%` SQL SECURITY DEFINER VIEW `presentInventory`  AS  select `Inventory`.`stock_id` AS `stock_id`,`Inventory`.`inv_rate` AS `inv_rate` from `Inventory` ;

-- --------------------------------------------------------

--
-- Structure for view `purchase_status`
--
DROP TABLE IF EXISTS `purchase_status`;

CREATE ALGORITHM=UNDEFINED DEFINER=`anjul`@`%` SQL SECURITY DEFINER VIEW `purchase_status`  AS  select `Purchase`.`sup_id` AS `sup_id`,`Purchase`.`purch_qty` AS `purch_qty`,`Purchase`.`balance` AS `balance` from `Purchase` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`cust_id`),
  ADD UNIQUE KEY `IDX_cust_email` (`cust_email`),
  ADD KEY `IDX_cust_name` (`cust_name`);

--
-- Indexes for table `Inventory`
--
ALTER TABLE `Inventory`
  ADD PRIMARY KEY (`inv_id`),
  ADD KEY `stock_id` (`stock_id`);

--
-- Indexes for table `Payment`
--
ALTER TABLE `Payment`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `inv_id` (`inv_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `Purchase`
--
ALTER TABLE `Purchase`
  ADD PRIMARY KEY (`purch_id`),
  ADD KEY `sup_id` (`sup_id`),
  ADD KEY `stock_id` (`stock_id`);

--
-- Indexes for table `Stock`
--
ALTER TABLE `Stock`
  ADD PRIMARY KEY (`stock_id`),
  ADD KEY `IDX_stock_qty` (`stock_qty`);

--
-- Indexes for table `Supplier`
--
ALTER TABLE `Supplier`
  ADD PRIMARY KEY (`sup_id`),
  ADD KEY `IDX_sup_name` (`sup_name`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Inventory`
--
ALTER TABLE `Inventory`
  ADD CONSTRAINT `Inventory_ibfk_1` FOREIGN KEY (`stock_id`) REFERENCES `Stock` (`stock_id`);

--
-- Constraints for table `Payment`
--
ALTER TABLE `Payment`
  ADD CONSTRAINT `Payment_ibfk_1` FOREIGN KEY (`inv_id`) REFERENCES `Inventory` (`inv_id`),
  ADD CONSTRAINT `Payment_ibfk_2` FOREIGN KEY (`cust_id`) REFERENCES `Customer` (`cust_id`);

--
-- Constraints for table `Purchase`
--
ALTER TABLE `Purchase`
  ADD CONSTRAINT `Purchase_ibfk_1` FOREIGN KEY (`sup_id`) REFERENCES `Supplier` (`sup_id`),
  ADD CONSTRAINT `Purchase_ibfk_2` FOREIGN KEY (`stock_id`) REFERENCES `Stock` (`stock_id`);
COMMIT;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
