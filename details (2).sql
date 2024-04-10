-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 12:37 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `ID` int(11) NOT NULL,
  `rec_id` varchar(10) NOT NULL DEFAULT '''YC001''',
  `First_name` varchar(100) NOT NULL,
  `Last` varchar(100) NOT NULL,
  `Phone_no` bigint(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Gender` enum('Male','Female','Others','') NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `User_name` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Qualification` enum('Under Graduate','Post Graduate','Diploma','') NOT NULL,
  `Marital_Status` enum('Single','Married','Divoced','') NOT NULL,
  `picture` blob NOT NULL,
  `file` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`ID`, `rec_id`, `First_name`, `Last`, `Phone_no`, `Email`, `Gender`, `Date_of_Birth`, `User_name`, `Password`, `State`, `Country`, `Address`, `Qualification`, `Marital_Status`, `picture`, `file`) VALUES
(1, 'YC001', 'SHIYAM', 'B', 6380176955, 'shiyamk289@gmail.com', 'Male', '1999-09-14', 'abc@01', '12345', 'TAMIL NADU', 'INDIA', 'SBM, COLONY14/4', 'Under Graduate', 'Single', 0x53637265656e73686f7420283137292e706e67, 0x4f4f5053204f555450552e706e67),
(2, 'YC002', 'RAJU', 'VINAYGAM', 7397611963, 'raju08@gmail.com', 'Male', '2001-07-05', 'raju@08', 'raju', 'TAMILNADU', 'INDIA', '213,Samba Street,Tenkasi.', 'Post Graduate', 'Married', 0x4231542e706e67, 0x31382d30322d323320283129202831292e706466),
(3, 'YC003', 'ESAKKI', 'VINAYAGAM', 987123452, 'esaki123@gmail.com', 'Male', '2000-02-21', 'esaki@123', '09876', 'TAMIL NADU', 'INDIA', 'xyz street', 'Under Graduate', 'Single', 0x53637265656e73686f74202831292e706e67, 0x53637265656e73686f74202837292e706e67),
(4, 'YC004', 'PRADEEP', 'V', 1234567890, 'pradee@gmail.com', 'Male', '1999-11-11', 'pradee@01', '123456', 'TAMIL NADU', 'INDIA', 'thee street y city', 'Under Graduate', 'Single', 0x53637265656e73686f74202835292e706e67, 0x53637265656e73686f74202839292e706e67),
(5, 'YC005', 'VEERA', 'MANI', 1234567899, 'vaara123@gmail.com', 'Male', '2000-05-04', 'veera@01', '112345', 'TAMIL NADU', 'INDIA', 'christoper street v city', 'Under Graduate', 'Single', 0x53637265656e73686f74202835292e706e67, 0x53637265656e73686f74202839292e706e67),
(6, 'YC006', 'ARUN', 'KUMAR', 2134568790, 'arun9@gmail.com', 'Others', '1890-02-21', 'arun@09', '99999', 'TAMIL NADU', 'INDIA', '9 xyz street y city', 'Under Graduate', 'Divoced', 0x53637265656e73686f74202832292e706e67, 0x53637265656e73686f74202839292e706e67),
(7, 'YC007', 'DEEPAK', 'K', 4321098755, 'deepak1@gmail.com', 'Male', '2001-02-06', 'deep@12', '123456', 'TAMIL NADU', 'INDIA', '123,xyz,abc', 'Under Graduate', 'Single', 0x53637265656e73686f74202837292e706e67, 0x53637265656e73686f74202838292e706e67),
(8, 'YC008', 'SEENI', 'VASAN', 9807621444, 'seeni1@gmail.com', 'Male', '2001-05-31', 'seeni@20', '1234555', 'TAMIL NADU', 'INDIA', '43 , xyz street , y city', 'Post Graduate', 'Married', 0x53637265656e73686f74202837292e706e67, 0x53637265656e73686f74202839292e706e67),
(9, 'YC009', 'SIVA', 'SANKAR', 9998887776, 'siva21@gmail.com', 'Male', '0000-00-00', 'siva@01', '123333', 'TAMIL NADU', 'INDIA', '23 , XYZ strret , Ycity', 'Post Graduate', 'Single', 0x53637265656e73686f74202835292e706e67, 0x53637265656e73686f74202838292e706e67),
(10, 'YC010', 'SUBASH', 'M', 9998887213, 'subhash12@gmail.com', 'Male', '2001-08-16', 'sub@02', '123456', 'TAMIL NADU', 'INDIA', '123 , abc street , y city', 'Under Graduate', 'Single', 0x53637265656e73686f74202838292e706e67, 0x53637265656e73686f74202838292e706e67),
(11, 'YC011', 'TAMIL', 'SELVAN', 7890123456, 'tamil98@gmail.com', 'Male', '0000-00-00', 'tamil@01', '1234567', 'TAMIL NADU', 'INDIA', '34  t1 street x city', 'Under Graduate', 'Single', 0x53637265656e73686f74202836292e706e67, 0x53637265656e73686f74202838292e706e67),
(12, 'YC012', 'GIRI', 'THARAN', 9876543210, 'giri123@gmail.com', 'Male', '2000-01-04', 'giri@12', '123456', 'KARNATAKA', 'INDIA', '123, xyz street ,ycity', 'Under Graduate', 'Single', 0x4f4f5053204f555450552e706e67, 0x4f4f5053204f555450552e706e67),
(13, 'YC013', 'KRISH', 'E', 7895165165, 'krish@gmail.com', 'Male', '2003-08-21', 'krish@08', 'raju', 'TAMILNADU', 'INDIA', '213,kovil street,kerala.', 'Post Graduate', 'Single', 0x6d79646174612e706466, 0x6d79646174612e706466);

--
-- Triggers `details`
--
DELIMITER $$
CREATE TRIGGER `details_insert_trigger` BEFORE INSERT ON `details` FOR EACH ROW BEGIN
    DECLARE next_alpha_num VARCHAR(10);
    SELECT MAX(rec_id) INTO next_alpha_num FROM details;
    IF next_alpha_num IS NULL THEN
        SET NEW.rec_id = 'YC001';
    ELSE
        SET NEW.rec_id = CONCAT('YC', LPAD(SUBSTRING(next_alpha_num, 3) + 1, 3, '0'));
    END IF;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
