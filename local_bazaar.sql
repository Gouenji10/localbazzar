-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 25, 2020 at 08:12 AM
-- Server version: 10.4.12-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `local_bazaar`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_ads`
--

CREATE TABLE `all_ads` (
  `id` int(10) NOT NULL,
  `category` int(10) NOT NULL,
  `sub_category` int(10) NOT NULL,
  `title` text NOT NULL,
  `price_type` int(11) NOT NULL,
  `price` varchar(256) NOT NULL,
  `zone` varchar(256) NOT NULL,
  `city` varchar(256) NOT NULL,
  `details` longtext NOT NULL,
  `expiry_duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(256) NOT NULL,
  `slug` varchar(256) NOT NULL,
  `icon` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `icon`) VALUES
(1, 'Apparels & Accessories', '', 'im im-icon-T-Shirt'),
(2, 'Automobiles', '', 'im im-icon-Car-3'),
(3, 'Beauty & Health', '', 'im im-icon-Eyebrow-2'),
(4, 'Books & Learning', '', 'im im-icon-Books-2'),
(5, 'Business & Industrial', '', 'im im-icon-Coins'),
(6, 'Computer & Peripherals', '', 'im im-icon-Monitor-5'),
(7, 'Electronics', '', 'im im-icon-Electricity'),
(8, 'Home, Furnishing & Appliances', '', 'im im-icon-Chair'),
(9, 'Mobile & Accessories', '', 'im im-icon-Smartphone-2'),
(10, 'Music & Instrument', '', 'im im-icon-Headphones'),
(11, 'Pets & Pet Care', '', 'im im-icon-Dog'),
(12, 'Real Estate', '', 'im im-icon-Home-4'),
(13, 'Services', '', 'im im-icon-Light-BulbLeaf'),
(14, 'Sports & Fitness', '', 'im im-icon-weight-Lift'),
(15, 'Toys & Video Games', '', 'im im-icon-Helicopter-2');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `slug` varchar(256) NOT NULL,
  `icon` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `slug`, `icon`) VALUES
(1, 2, 'Cars', 'cars', ''),
(2, 2, 'Motorcycle/Scooty', 'motorcycle', ''),
(3, 2, 'Parts & Accessories', 'parts-accessories', ''),
(4, 6, 'Desktops', 'desktops', ''),
(5, 6, 'Laptops', 'laptops', ''),
(6, 6, 'Accessories & Equipments', '', ''),
(9, 8, 'Antique & Collectables', '', ''),
(10, 8, 'Art & Handicrafts', '', ''),
(11, 8, 'Home Decor & Interiors', '', ''),
(12, 8, 'Kitchen Appliances', '', ''),
(13, 8, 'Others  Appliances', '', ''),
(14, 15, 'Gaming Accessories', '', ''),
(15, 15, 'Toys', '', ''),
(16, 14, 'Fitness & Gym Equipment', '', ''),
(17, 14, 'Fitness Supplements', '', ''),
(18, 14, 'Sporting Accessories', '', ''),
(19, 12, 'Flat & Apartment', '', ''),
(20, 12, 'Office Space & Shop Space', '', ''),
(21, 12, 'House & Land', '', ''),
(22, 12, 'Business & Shop', '', ''),
(23, 11, 'Pets', '', ''),
(24, 11, 'Aquarium & Fish Accessories', '', ''),
(25, 11, 'Pet Accessories', '', ''),
(26, 11, 'Pet Services', '', ''),
(27, 10, 'Music Instrument', '', ''),
(28, 10, 'Mixer & Studio Equipments', '', ''),
(29, 10, 'DJ Gear & Lighting', '', ''),
(30, 9, 'Accessories', '', ''),
(31, 9, 'Handsets', '', ''),
(32, 7, 'Camera Lens & Accesories', '', ''),
(33, 7, 'Kitchen Applinces', '', ''),
(34, 7, 'Televison & Accessories', '', ''),
(35, 7, 'DIY & Hobby Electronics', '', ''),
(36, 1, 'Baby & Children Clothing', '', ''),
(37, 1, 'Bags & Luggage', '', ''),
(38, 1, 'Jewellery', '', ''),
(39, 1, 'Men\'s Clothing', '', ''),
(40, 1, 'Women\'s Clothing', '', ''),
(41, 1, 'Accessories', '', ''),
(42, 3, 'Body Care', '', ''),
(43, 3, 'Medical & Health Devices', '', ''),
(44, 3, 'Perfumes & Fragrances', '', ''),
(45, 3, 'Tattoo Equipment', '', ''),
(46, 7, 'Electronic Cigarette & Vape', '', ''),
(47, 3, 'Tools & Equipment', '', ''),
(48, 4, 'Educational Textbook', '', ''),
(49, 4, 'Magazine & Comics', '', ''),
(50, 4, ' Fiction & Non Fiction', '', ''),
(51, 4, 'Biography & Technology', '', ''),
(52, 4, 'Stationery Items', '', ''),
(53, 13, 'Advertising-Printing-Publication', '', ''),
(54, 13, 'Classes Coaching & Tutors', '', ''),
(55, 13, 'Sales & Repair', '', ''),
(56, 13, 'Other Services', '', ''),
(57, 5, 'Business Offers & Services', '', ''),
(58, 5, 'Raw Materials & Supplies', '', ''),
(59, 5, 'Tools & Small Machines', '', ''),
(60, 5, 'Office Furniture & Fixtures', '', ''),
(61, 5, 'Others', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `status` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `status`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$nZ0svno2u/GYFcTeDMHi6ulfvC1.5uOGycPgg7db7q3FKXpqQmsEm', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1583342904, 1, 'Admin', 'istrator', 'ADMIN', '0', 'not_verified'),
(12, '::1', 'sanjay@pcsoftnepal.com', '$2y$10$LIF8KBWhOnJt2bjkuwN8K.a6aC4Nv0ts0njgLucA0s7kuPjlBoxbq', 'sanjay@pcsoftnepal.com', NULL, '732398', NULL, NULL, NULL, NULL, NULL, 1583344127, 1583424607, 1, 'Sanjay', 'Chaudhary', NULL, '9864573650', 'not_verified');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(13, 12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_meta`
--

CREATE TABLE `user_meta` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `zone` varchar(256) NOT NULL,
  `district` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `city` varchar(256) NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_meta`
--

INSERT INTO `user_meta` (`id`, `user_id`, `zone`, `district`, `address`, `city`, `facebook`, `twitter`) VALUES
(2, 12, '8', 'Nawalparasi', 'Ashnaiya - 07', 'Sunwal', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_ads`
--
ALTER TABLE `all_ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Indexes for table `user_meta`
--
ALTER TABLE `user_meta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_ads`
--
ALTER TABLE `all_ads`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_meta`
--
ALTER TABLE `user_meta`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
