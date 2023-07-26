-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jul 26, 2023 at 08:12 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `armoury`
--

-- --------------------------------------------------------

--
-- Table structure for table `armoury`
--

CREATE TABLE `armoury` (
  `item` varchar(200) NOT NULL,
  `total` int(11) NOT NULL,
  `A` int(11) NOT NULL,
  `B` int(11) NOT NULL,
  `C` int(11) NOT NULL,
  `D` int(11) NOT NULL,
  `E` int(11) NOT NULL,
  `F` int(11) NOT NULL,
  `G` int(11) NOT NULL,
  `H` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `armoury`
--

INSERT INTO `armoury` (`item`, `total`, `A`, `B`, `C`, `D`, `E`, `F`, `G`, `H`) VALUES
('a', 50, 0, 0, 0, 0, 0, 0, 50, 0),
('aab', 50, 25, 25, 0, 0, 0, 0, 0, 0),
('ab', 24, 12, 12, 0, 0, 0, 0, 0, 0),
('abcde', 56, 50, 6, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `armoury2`
--

CREATE TABLE `armoury2` (
  `item` varchar(200) NOT NULL,
  `total` int(11) NOT NULL,
  `A` int(11) NOT NULL,
  `B` int(11) NOT NULL,
  `C` int(11) NOT NULL,
  `D` int(11) NOT NULL,
  `E` int(11) NOT NULL,
  `F` int(11) NOT NULL,
  `G` int(11) NOT NULL,
  `H` int(11) NOT NULL,
  `I` int(11) NOT NULL,
  `J` int(11) NOT NULL,
  `K` int(11) NOT NULL,
  `L` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `armoury2`
--

INSERT INTO `armoury2` (`item`, `total`, `A`, `B`, `C`, `D`, `E`, `F`, `G`, `H`, `I`, `J`, `K`, `L`) VALUES
('abcd', 50, 0, 25, 50, 20, 4, 1, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `changeofaccess`
--

CREATE TABLE `changeofaccess` (
  `who_changed` int(11) NOT NULL,
  `changed_pno` int(11) NOT NULL,
  `new_access` varchar(200) NOT NULL,
  `new_admin` varchar(200) NOT NULL,
  `number` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `changeofaccess`
--

INSERT INTO `changeofaccess` (`who_changed`, `changed_pno`, `new_access`, `new_admin`, `number`, `date`) VALUES
(0, 74152963, '1', '0', 5, '2023-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `tran_id` int(11) NOT NULL,
  `item` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `source` varchar(200) NOT NULL,
  `destination` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `reason` varchar(200) NOT NULL,
  `who` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`tran_id`, `item`, `quantity`, `source`, `destination`, `date`, `time`, `reason`, `who`) VALUES
(1, 'a', 50, '0', '50', '2023-07-26', '18:03:44', 'dd', 0),
(2, 'a', 25, 'H', '', '2023-07-26', '18:38:09', 'SASA', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transactions2`
--

CREATE TABLE `transactions2` (
  `tran_id` int(11) NOT NULL,
  `item` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `source` varchar(200) NOT NULL,
  `destination` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `reason` varchar(200) NOT NULL,
  `who` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions2`
--

INSERT INTO `transactions2` (`tran_id`, `item`, `quantity`, `source`, `destination`, `date`, `time`, `reason`, `who`) VALUES
(1, 'abcd', 50, '0', '50', '2023-07-26', '18:00:41', 'sd', 0),
(2, 'abcd', 25, '25', '50', '2023-07-26', '18:28:44', '25', 0),
(3, 'abcd', 20, '5', '20', '2023-07-26', '18:33:28', '20', 0),
(4, 'abcd', 5, 'A', 'B', '2023-07-26', '18:41:44', 'we', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(200) NOT NULL,
  `pno` int(9) NOT NULL,
  `password` varchar(200) NOT NULL,
  `access` char(200) NOT NULL DEFAULT '0',
  `admin` char(1) NOT NULL DEFAULT '0',
  `ip` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `pno`, `password`, `access`, `admin`, `ip`) VALUES
('admin', 0, '0', '1', '1', '::1'),
('abc', 12, '12', '1', '1', '::1'),
('qazzaq', 74152963, 'qaz', '1', '0', '::1'),
('abc', 123456789, 'qazzaq', '1', '0', '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `armoury`
--
ALTER TABLE `armoury`
  ADD PRIMARY KEY (`item`);

--
-- Indexes for table `armoury2`
--
ALTER TABLE `armoury2`
  ADD PRIMARY KEY (`item`);

--
-- Indexes for table `changeofaccess`
--
ALTER TABLE `changeofaccess`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`tran_id`);

--
-- Indexes for table `transactions2`
--
ALTER TABLE `transactions2`
  ADD PRIMARY KEY (`tran_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`pno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `changeofaccess`
--
ALTER TABLE `changeofaccess`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `tran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transactions2`
--
ALTER TABLE `transactions2`
  MODIFY `tran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
