-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2024 at 09:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minateck`
--

-- --------------------------------------------------------

--
-- Table structure for table `minateck_about`
--

CREATE TABLE `minateck_about` (
  `about_id` int(11) NOT NULL,
  `about_info` text NOT NULL,
  `about_street1` varchar(250) NOT NULL,
  `about_street2` varchar(250) NOT NULL,
  `about_country` varchar(250) NOT NULL,
  `about_state` varchar(250) NOT NULL,
  `about_city` varchar(250) NOT NULL,
  `about_phone` varchar(20) NOT NULL,
  `about_email` varchar(250) NOT NULL,
  `about_phone2` varchar(20) NOT NULL,
  `about_fax` varchar(50) NOT NULL,
  `dues_for_fresher` double(10,2) NOT NULL,
  `dues_for_continue` double(10,2) NOT NULL,
  `ads` text DEFAULT NULL,
  `facebook` varchar(500) DEFAULT NULL,
  `instagram` varchar(500) DEFAULT NULL,
  `youtube` varchar(500) DEFAULT NULL,
  `twitter` varchar(500) DEFAULT NULL,
  `linkedin` varchar(500) DEFAULT NULL,
  `signature` text NOT NULL,
  `mission` varchar(500) NOT NULL,
  `vision` varchar(500) NOT NULL,
  `constitution` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `minateck_about`
--

INSERT INTO `minateck_about` (`about_id`, `about_info`, `about_street1`, `about_street2`, `about_country`, `about_state`, `about_city`, `about_phone`, `about_email`, `about_phone2`, `about_fax`, `dues_for_fresher`, `dues_for_continue`, `ads`, `facebook`, `instagram`, `youtube`, `twitter`, `linkedin`, `signature`, `mission`, `vision`, `constitution`) VALUES
(1, '<p><strong>some changes</strong></p>\r\n<p><span style=\"background-color: #236fa1;\"> sunt</span> in culpa qui officia deserunt mollit anim id est laborum. tijani Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation <strong>ullamco </strong>laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. wsf</p>', 'AF-0006-0091', 'FL 32904', 'ghana', 'upper east', 'navrongo', '+233 541 444 016', 'info@gmsacktutas.org', '+233 24 387 4525', '+1 234 567 89', 50.00, 40.00, 'assets/media/ads/670.jpg', 'https://www.facebook.com/gmsacktutas', 'https://instagram.com/gmsa', 'https://www.youtube.com/@gmsackt-utasofficial', 'https://x.com/cktgmsa?s=21', 'https://linkedin.com/gmsa', 'assets/media/signature/632.png', 'mission mission', 'vision vision', 'assets/media/constitution/GMSA-CK-TUTAS-CONSTITUTION.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `minateck_about`
--
ALTER TABLE `minateck_about`
  ADD PRIMARY KEY (`about_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `minateck_about`
--
ALTER TABLE `minateck_about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
