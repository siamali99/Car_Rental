-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2023 at 03:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `carlist`
--

CREATE TABLE `carlist` (
  `id` int(11) NOT NULL,
  `carID` varchar(200) NOT NULL,
  `carName` varchar(200) NOT NULL,
  `carCondition` varchar(200) NOT NULL,
  `carQuality` varchar(200) NOT NULL,
  `carPrice` varchar(200) NOT NULL,
  `carSeats` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carlist`
--

INSERT INTO `carlist` (`id`, `carID`, `carName`, `carCondition`, `carQuality`, `carPrice`, `carSeats`, `file`) VALUES
(12, 'car1', 'Toyota Fotunar', 'Excellent', 'High', '200', '6', '64f875bf943b0.jpg'),
(13, 'car2', 'Toyota corolla 2016', 'Good', 'Medium', '100', '4', '64f8760e78375.jpg'),
(14, 'Car3', 'Toyota Vitz', 'Good', 'Medium', '120', '4', '64f876502bc79.jpg'),
(15, 'Car4', 'Honda Grace', 'Good', 'Medium', '100', '4', '64f896583749f.jpg'),
(16, 'Car 5', 'Honda Civic', 'Good', 'Medium', '100', '4', '64f8968dafed6.jpg'),
(17, 'car6', 'Honda car 6', 'Good', 'Medium', '100', '5', '64fb4eef93150.jpg'),
(18, 'car7', 'Honda car 7', 'Fair', 'Low', '50', '4', '64fb4f1710e41.jpg'),
(19, 'car8', 'FAW XPV', 'Fair', 'Low', '50', '6', '64fb4f3ad2ecd.jpg'),
(20, 'car9', 'Suzuki every', 'Fair', 'Medium', '60', '6', '64fb4f6a3db62.jpeg'),
(21, 'car10', 'Toyota Landcruser', 'Excellent', 'High', '150', '6', '64fb4fa1c081c.jpg'),
(22, 'car11', 'Toyota passo', 'Good', 'Medium', '100', '4', '64fb4fcb0845b.jpg'),
(23, 'car12', 'Toyota Prado', 'Excellent', 'High', '120', '6', '64fb500fc2874.jpg'),
(24, 'car13', 'Premio', 'Good', 'Medium', '90', '4', '64fb503a2bc73.jpg'),
(25, 'car14', 'car14', 'Good', 'Medium', '80', '4', '64fb50a460fb8.jpg'),
(26, 'car15', 'car15', 'Good', 'Low', '100', '4', '64fb50be134d3.jpg'),
(27, 'car16', 'car16', 'Good', 'Low', '60', '4', '64fb50dabb95f.jpg'),
(28, 'car17', 'car17', 'Good', 'Low', '80', '4', '64fb510a5739d.jpg'),
(29, 'car18', 'toyota', 'Excellent', 'High', '120', '4', '64fb512fbb588.jpg'),
(30, 'car19', 'toyota', 'Fair', 'Medium', '60', '4', '64fb514c13006.jpg'),
(31, 'car20', 'car20', 'Excellent', 'High', '120', '4', '64fb5167ab28e.jpg'),
(32, 'car21', 'toyota', 'Excellent', 'High', '120', '4', '64fb51ab33d29.jpg'),
(33, 'car22', 'car22', 'Excellent', 'High', '120', '5', '64fb51c43f2a0.jpg'),
(34, 'car23', 'toyota', 'Fair', 'Low', '50', '4', '64fb51e7cf7bc.jpg'),
(35, 'car24', 'car24', 'Excellent', 'High', '200', '6', '64fb52151e93d.jpg'),
(36, 'car25', 'car25', 'Excellent', 'High', '120', '5', '64fb52295988f.jpg'),
(37, 'car26', 'car26', 'Excellent', 'High', '160', '4', '64fb52594f628.jpg'),
(38, 'car27', 'car27', 'Good', 'Medium', '100', '4', '64fb527623f2d.jpg'),
(39, 'car28', 'car28', 'Good', 'Medium', '100', '4', '64fb529890025.jpg'),
(40, 'car29', 'honda', 'Good', 'Medium', '120', '4', '64fb52c119f15.jpg'),
(41, 'car30', 'car30', 'Good', 'Medium', '100', '4', '64fb52e9aedd9.jpg'),
(42, 'car31', 'car31', 'Fair', 'Low', '80', '4', '64fb53045b256.jpg'),
(43, 'car32', 'car32', 'Good', 'Medium', '100', '4', '64fb531b1aa68.jpg'),
(44, 'car33', 'car33', 'Fair', 'Low', '60', '4', '64fb53440e692.jpg'),
(45, 'car34', 'honda vazel', 'Good', 'Medium', '120', '6', '64fb535fa5e60.jpg'),
(46, 'car35', 'honda vazel', 'Fair', 'Medium', '120', '4', '64fb537df1388.jpg'),
(47, 'car36', 'car36', 'Good', 'Medium', '60', '4', '64fb53bc48b10.jpg'),
(48, 'car37', 'toyota', 'Good', 'Medium', '120', '4', '64fbe5bd40f4f.jpg'),
(49, 'car38', 'honda', 'Excellent', 'High', '120', '4', '64fbe5d1897dd.jpg'),
(50, 'car39', 'car39', 'Fair', 'Low', '60', '4', '64fbe5edb47c8.jpg'),
(51, 'car40', 'honda 40', 'Good', 'Medium', '120', '4', '64fbe607c53f4.jpg'),
(52, 'car41', 'honda 41', 'Excellent', 'High', '200', '4', '64fbe69699377.jpg'),
(53, 'car42', 'toyota', 'Excellent', 'High', '200', '4', '64fbe6a721524.jpg'),
(54, 'car43', 'car43', 'Excellent', 'High', '120', '4', '64fbe6b9ea9e4.jpg'),
(55, 'car44', 'car44', 'Excellent', 'High', '120', '4', '64fbe6cf5e0eb.jpg'),
(56, 'car45', 'kAI', 'Excellent', 'High', '200', '5', '64fbe723ed1e8.jpg'),
(57, 'car46', 'KAI 46', 'Excellent', 'High', '120', '200', '64fbe7364537d.jpg'),
(58, 'car47', 'car47', 'Excellent', 'High', '200', '4', '64fbe74a8b5d9.jpg'),
(59, 'car48', 'toyotoa', 'Excellent', 'High', '200', '5', '64fbe766e9297.jpg'),
(60, 'car49', 'car49', 'Excellent', 'High', '200', '4', '64fbe784cb755.jpg'),
(61, 'car50', 'car50', 'Excellent', 'High', '120', '4', '64fbe7965f042.jpg'),
(62, 'car51', 'car51', 'Excellent', 'High', '120', '4', '64fbe7a78f6da.jpg'),
(63, 'car52', 'car52', 'Excellent', 'High', '120', '4', '64fbe7b7bc038.jpg'),
(64, 'car53', 'car', 'Excellent', 'High', '120', '4', '64fbe82aa5510.jpg'),
(65, 'car54', 'car', 'Excellent', 'High', '120', '4', '64fbe8473877a.jpg'),
(66, 'car55', 'car', 'Excellent', 'High', '120', '4', '64fbe84e7e668.jpg'),
(67, 'car56', 'car', 'Excellent', 'High', '120', '4', '64fbe8569816a.jpg'),
(68, 'car57', 'car', 'Excellent', 'High', '120', '4', '64fbe85f667b7.jpg'),
(69, 'car58', 'car', 'Excellent', 'High', '120', '4', '64fbe866e54a5.jpg'),
(70, 'car59', 'car', 'Excellent', 'High', '120', '4', '64fbe8744be2d.jpg'),
(71, 'car60', 'car', 'Excellent', 'High', '120', '4', '64fbe87e27f21.jpg'),
(72, 'car61', 'car', 'Excellent', 'High', '120', '4', '64fbe8890f6aa.jpg'),
(73, 'car62', 'car', 'Excellent', 'High', '120', '4', '64fbe89107c3c.jpg'),
(74, 'car63', 'car', 'Excellent', 'High', '120', '4', '64fbe89c1070f.jpg'),
(75, 'car64', 'car', 'Excellent', 'High', '120', '4', '64fbe8a38aea8.jpg'),
(76, 'car65', 'car', 'Excellent', 'High', '120', '4', '64fbe8b573932.jpg'),
(77, 'car66', 'car', 'Excellent', 'High', '120', '4', '64fbe8bded85c.jpg'),
(78, 'car67', 'car', 'Excellent', 'High', '120', '4', '64fbe8c599493.jpg'),
(79, 'car68', 'car', 'Excellent', 'High', '120', '4', '64fbe8cec2988.jpg'),
(80, 'car69', 'car', 'Excellent', 'High', '120', '4', '64fbe8d7f0dee.jpg'),
(81, 'car70', 'car', 'Excellent', 'High', '120', '4', '64fbe8f1be52f.jpg'),
(82, 'car71', 'car', 'Excellent', 'High', '120', '4', '64fbe8fa9a4fc.jpg'),
(83, 'car72', 'car', 'Excellent', 'High', '120', '4', '64fbe903c44b0.jpg'),
(84, 'car73', 'car', 'Excellent', 'High', '120', '4', '64fbe910d50bb.jpg'),
(85, 'car74', 'car', 'Excellent', 'High', '120', '4', '64fbe9192ee94.jpg'),
(86, 'car75', 'car', 'Excellent', 'High', '120', '4', '64fbe92243a49.jpg'),
(87, 'car76', 'car', 'Excellent', 'High', '120', '4', '64fbe92c19b54.jpg'),
(88, 'car77', 'car', 'Excellent', 'High', '120', '4', '64fbe9351108f.jpg'),
(89, 'car78', 'car', 'Excellent', 'High', '120', '4', '64fbe941c6fb0.jpg'),
(90, 'car79', 'car', 'Excellent', 'High', '120', '4', '64fbe94955e8d.jpg'),
(91, 'car80', 'car', 'Excellent', 'High', '120', '4', '64fbe950b73f1.jpg'),
(92, 'car81', 'car', 'Excellent', 'High', '120', '4', '64fbe95ae9d5a.jpg'),
(93, 'car82', 'car', 'Excellent', 'High', '120', '4', '64fbe963d9fec.jpg'),
(94, 'car83', 'car', 'Excellent', 'High', '120', '4', '64fbe96b36372.jpg'),
(95, 'car84', 'car', 'Excellent', 'High', '120', '4', '64fbe9779e91c.jpg'),
(96, 'car85', 'car', 'Excellent', 'High', '120', '4', '64fbe981e45bd.jpg'),
(97, 'car86', 'car', 'Excellent', 'High', '120', '4', '64fbe98acf168.jpg'),
(98, 'car87', 'car', 'Excellent', 'High', '120', '4', '64fbe992a1eb5.jpg'),
(99, 'car88', 'car', 'Excellent', 'High', '120', '4', '64fbe99ae9bb8.jpg'),
(100, 'car89', 'car', 'Excellent', 'High', '120', '4', '64fbe9a31c4e1.jpg'),
(101, 'car90', 'car', 'Excellent', 'High', '120', '4', '64fbe9aba32bf.jpg'),
(102, 'car91', 'car', 'Excellent', 'High', '120', '4', '64fbe9bb57322.jpg'),
(103, 'car92', 'car', 'Excellent', 'High', '120', '4', '64fbe9c2886a6.jpg'),
(104, 'car93', 'car', 'Excellent', 'High', '120', '4', '64fbe9cb3cc07.jpg'),
(105, 'car94', 'car', 'Excellent', 'High', '120', '4', '64fbe9d4724a0.jpg'),
(106, 'car95', 'car', 'Excellent', 'High', '120', '4', '64fbe9dcf39ad.jpg'),
(107, 'car96', 'car', 'Excellent', 'High', '120', '4', '64fbe9e4f2b6f.jpg'),
(108, 'car97', 'car', 'Excellent', 'High', '120', '4', '64fbe9ede851e.jpg'),
(109, 'car98', 'car', 'Excellent', 'High', '120', '4', '64fbe9f72f8bd.jpg'),
(110, 'car99', 'car', 'Excellent', 'High', '120', '4', '64fbe9ff9245b.jpg'),
(111, 'car100', 'car', 'Excellent', 'High', '120', '4', '64fbea28ac2c1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `orderid` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `carID` varchar(25) NOT NULL,
  `carName` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `carPrice` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`orderid`, `username`, `carID`, `carName`, `address`, `carPrice`) VALUES
(1, 'siamali', '13', 'Toyota corolla 2016', 'Dhaka', '500'),
(2, 'siam2', '14', 'Toyota Vitz', 'Narayangonj', '1200'),
(3, 'user1', '15', 'Honda Grace', 'Cumilla', '500'),
(4, 'siamali', '16', 'Honda Civic', 'Dhaka', '500'),
(5, 'user2', '13', 'Toyota corolla 2016', 'Motijheel', '200'),
(6, 'siam2', '13', 'Toyota corolla 2016', 'Fatullah', '600'),
(7, 'siamali', '31', 'car20', 'Dhaka', '600'),
(8, 'siam2', '13', 'Toyota corolla 2016', 'Fatullah', '500'),
(9, 'user1', '17', 'Honda car 6', 'Narayangonj', '500'),
(10, 'user2', '16', 'Honda Civic', 'Dhaka', '200'),
(11, 'siam2', '17', 'Honda car 6', 'Fatullah', '500'),
(12, 'user1', '18', 'Honda car 7', 'Cumilla', '250'),
(13, 'user2', '20', 'Suzuki every', 'Motijheel', '300'),
(14, 'user2', '29', 'toyota', 'dhaka', '600'),
(15, 'user3', '25', 'car14', 'Fatullah', '400'),
(16, 'user3', '13', 'Toyota corolla 2016', 'Motijheel', '500'),
(17, 'siamali', '14', 'Toyota Vitz', 'Cumilla', '600'),
(18, 'siamali', '13', 'Toyota corolla 2016', 'Motijheel', '500');

-- --------------------------------------------------------

--
-- Table structure for table `orderlist2`
--

CREATE TABLE `orderlist2` (
  `orderid` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `carID` varchar(25) NOT NULL,
  `carName` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `carPrice` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ratinglist`
--

CREATE TABLE `ratinglist` (
  `ratingid` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `carID` varchar(25) NOT NULL,
  `carCondition` int(2) NOT NULL,
  `carQuality` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ratinglist`
--

INSERT INTO `ratinglist` (`ratingid`, `username`, `carID`, `carCondition`, `carQuality`) VALUES
(1, 'user1', '15', 4, 4),
(2, 'siamali', '13', 3, 3),
(4, 'siamali', '16', 4, 3),
(5, 'siam2', '14', 3, 3),
(6, 'siam2', '14', 3, 4),
(7, 'siam2', '14', 3, 4),
(8, 'siam2', '17', 5, 4),
(9, 'siamali', '31', 3, 4),
(10, 'user1', '17', 3, 5),
(11, 'user1', '18', 4, 4),
(12, 'user2', '16', 4, 5),
(13, 'user2', '20', 5, 3),
(14, 'user2', '29', 3, 3),
(15, 'user3', '25', 3, 5),
(16, 'user3', '13', 3, 3),
(17, 'siamali', '14', 3, 5),
(18, 'siamali', '13', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_uid` tinytext NOT NULL,
  `users_pwd` longtext NOT NULL,
  `users_email` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_uid`, `users_pwd`, `users_email`) VALUES
(1, 'siamali', '$2y$10$AyRFUQVUtUEv5uNTzRTrK.jxBAprGxQy/MtSL3bkDnHeow7ZzMajS', 'siamali1499@gmail.com'),
(2, 'siam2', '$2y$10$ngpamyNVGXC9NbU3dYqIlOd6pgSR6dguG.g3J0.jwdNKcDezkc3Xe', 'siam2@gmail.com'),
(3, 'admin', '$2y$10$sJlpwEsbjoJdJQ/3oyXHg.p2EDKvjwSqzFSwaNfLvxpNxxfMHa3.i', 'admin@gmail.com'),
(4, 'user1', '$2y$10$0H5g1WLRoT7PKWBh5bsH9eIRjm0mB66sCZI4ZyFDSGjVNSz9CmYKW', 'user1@gmail.com'),
(5, 'user2', '$2y$10$VjzoBEa5uq2BZAPG2gb8M.gcbwdGLNMm7ZH45i9MRdu5GvicKM4s.', 'user2@gmail.com'),
(6, 'user3', '$2y$10$WcdLk0uM1.tvGbprkjydgOILtZeIRpjqHPIIKCw0L.VO5EdyMoxdO', 'user3@gmail.com'),
(7, 'user4', '$2y$10$t2UT9zifTLI5cP7a5HLcMe36ZWBjW/p31PcCK16lhCxCBXWVL7ggq', 'user4@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carlist`
--
ALTER TABLE `carlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `orderlist2`
--
ALTER TABLE `orderlist2`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `ratinglist`
--
ALTER TABLE `ratinglist`
  ADD PRIMARY KEY (`ratingid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carlist`
--
ALTER TABLE `carlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `orderlist`
--
ALTER TABLE `orderlist`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orderlist2`
--
ALTER TABLE `orderlist2`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ratinglist`
--
ALTER TABLE `ratinglist`
  MODIFY `ratingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
