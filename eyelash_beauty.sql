-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2023 at 05:46 AM
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
-- Database: `eyelash_beauty`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'a', 'lenggo.geni0305@gmail.com', '$2y$10$sE1E.8F1x9qFH.LaC2dX.OTnZJTEu4D.2iRIKQt0T6cIfNKaXsuT6'),
(2, 'aaa', 'lenggo.geni0305@gmail.com', '$2y$10$XCDsLLvhpQxnj0DG4rPN8.glkxYcLgk4xEuEBrbCPIlcFFDRs9f6q'),
(3, 'aaa', 'caeca@gmail.com', '$2y$10$doXxkPWyo30YwcpzHSvqrOarvOdxeO9YbyCXV0eon6Sq19PLDIVBe'),
(4, 'aaa', 'lenggo.geni0305@gmail.com', '$2y$10$bJDEu3mRhuYAzCI8K5DZS.6zYz0oO4lG48YfcNYnsbp6A0u.bNbYm'),
(5, 'aaa', 'lenggo.geni0305@gmail.com', '$2y$10$.utpmR78jpOXm2.UoDXmvOPPWoyzrdA71M2vP0n1S.2aTKfPzVcBq'),
(6, 'haihai', 'haihai@gmail.com', '$2y$10$2l3/qt6Ks.8D89iZEEK4yuVc4iOvd0MhK2H.g7LngIoiA4brdNyQG');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`) VALUES
(3, 'mewi', 'mewimewi@gmail.com', 'mek123'),
(4, 'upin', 'ipin123@gmail.com', 'apaboleh'),
(5, 'lenggo', 'lenggo.geni0305@gmail.com', 'ya'),
(7, 'hi', 'hahahihi@gmail.com', 'wiwi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
