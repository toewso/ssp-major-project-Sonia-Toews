-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 20, 2019 at 08:33 AM
-- Server version: 5.5.64-MariaDB
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `author_id` int(11) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `image_id`, `author_id`, `date_created`, `date_modified`) VALUES
(1, 'The Waiting Game [The Surreal Collection]', 'content', 27, 1, '2019-12-02 19:20:44', '2019-12-17 02:45:21'),
(2, 'Coral', 'Content', 28, 1, '2019-12-02 20:01:12', '2019-12-17 03:36:02'),
(4, 'Brochure', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero&#039;s De Finibus Bonorum et Malorum for use in a type specimen book.', 29, 1, '2019-12-02 21:04:24', '2019-12-17 04:18:47'),
(6, 'W+M monogram concept', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero&#039;s De Finibus Bonorum et Malorum for use in a type specimen book.', 22, 1, '2019-12-06 19:28:38', '2019-12-17 02:30:06'),
(7, 'Article Title', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 21, 1, '2019-12-09 21:11:36', '2019-12-17 02:26:17'),
(8, 'Font', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero&#039;s De Finibus Bonorum et Malorum for use in a type specimen book.', 31, 1, '2019-12-17 03:42:14', '2019-12-17 04:18:27'),
(9, 'Map', 'Lorem', 32, 1, '2019-12-17 04:16:50', '2019-12-17 04:18:15'),
(10, 'Peacock ', 'Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It&#039;s also called placeholder (or filler) text. It&#039;s a convenient tool for mock-ups.', 33, 1, '2019-12-17 21:59:50', '2019-12-17 21:59:50'),
(11, 'The Letter L', '.', 34, 1, '2019-12-17 22:01:30', '2019-12-20 05:46:45'),
(12, 'Unique Secrets', 'Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It&#039;s also called placeholder (or filler) text. It&#039;s a convenient tool for mock-ups.', 35, 1, '2019-12-17 22:01:50', '2019-12-17 22:01:50'),
(13, 'Moon', 'Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It&#039;s also called placeholder (or filler) text. It&#039;s a convenient tool for mock-ups.', 36, 1, '2019-12-17 22:02:06', '2019-12-17 22:02:06'),
(14, 'Adventure Is Out There', 'Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It&#039;s also called placeholder (or filler) text. It&#039;s a convenient tool for mock-ups.', 37, 1, '2019-12-17 22:02:35', '2019-12-17 22:02:35'),
(15, 'Art Project', 'Lorem', 45, 24, '2019-12-20 06:20:13', '2019-12-20 06:20:13'),
(16, 'Graphics', 'art', 46, 30, '2019-12-20 06:21:16', '2019-12-20 06:21:16'),
(17, 'Business Poster', 'Lorem', 47, 23, '2019-12-20 06:22:27', '2019-12-20 06:22:27');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `upload_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `title`, `description`, `url`, `owner_id`, `upload_date`) VALUES
(1, NULL, NULL, '/uploads/dba48f86252441.5d94f8e295e1b.jpg', 1, '2019-11-27 12:50:25'),
(2, NULL, NULL, '/uploads/Screenshot_20191031-141709.jpg', 1, '2019-12-02 12:48:23'),
(3, NULL, NULL, '/uploads/2f596c86252441.5d94f8e29d381.jpg', 1, '2019-12-02 13:04:24'),
(4, NULL, NULL, '/uploads/html-cheat-sheet.jpg', 23, '2019-12-05 16:29:16'),
(5, NULL, NULL, '/uploads/823019.jpg', 24, '2019-12-05 16:30:04'),
(6, NULL, NULL, '/uploads/unnamed.png', 1, '2019-12-05 18:58:17'),
(7, NULL, NULL, '/uploads/553228-PK37K1-739.jpg', 1, '2019-12-05 18:59:46'),
(8, NULL, NULL, '/uploads/Screenshot_20191031-173825.jpg', 1, '2019-12-06 10:51:46'),
(9, NULL, NULL, '/uploads/4c511ac47614de1d056f265f7cb869de.jpg', 1, '2019-12-06 12:42:26'),
(10, NULL, NULL, '/uploads/0b84cbfdc801e11ad350fe5c8e39e98d.jpg', 1, '2019-12-06 12:43:08'),
(11, NULL, NULL, '/uploads/Screenshot_20180227-194731.png', 1, '2019-12-06 12:44:54'),
(12, NULL, NULL, '/uploads/Snapchat-1959150958.jpg', 1, '2019-12-06 12:45:23'),
(13, NULL, NULL, '/uploads/Snapchat-1959150958.20191206211232.jpg', 1, '2019-12-06 13:12:32'),
(14, NULL, NULL, '/uploads/Snapchat-1959150958.20191206211335.jpg', 1, '2019-12-06 13:13:35'),
(15, NULL, NULL, '/uploads/Snapchat-1959150958.20191206211357.jpg', 1, '2019-12-06 13:13:57'),
(16, NULL, NULL, '/uploads/Snapchat-1959150958.20191206211409.jpg', 1, '2019-12-06 13:14:09'),
(17, NULL, NULL, '/uploads/Screenshot_20180227-194731.20191206211448.png', 1, '2019-12-06 13:14:48'),
(18, NULL, NULL, '/uploads/92152d8ed80e3aea1b892f40b101afcf.jpg', 1, '2019-12-09 12:39:51'),
(19, NULL, NULL, '/uploads/313f2afc83cf6fd585c77a94c233557d.jpg', 1, '2019-12-09 13:11:36'),
(20, NULL, NULL, '/uploads/il_1140xN.1343614770_to0n.20191217012300.jpg', 1, '2019-12-16 17:23:00'),
(21, NULL, NULL, '/uploads/92152d8ed80e3aea1b892f40b101afcf.20191217021115.jpg', 1, '2019-12-16 18:11:15'),
(22, NULL, NULL, '/uploads/5d03e5cba04317aededd4146575bb6ea.20191217023006.png', 1, '2019-12-16 18:30:06'),
(23, NULL, NULL, '/uploads/db33073c086f515316d635ed9e3e5e76.20191217023106.jpg', 1, '2019-12-16 18:31:06'),
(24, NULL, NULL, '/uploads/db33073c086f515316d635ed9e3e5e76.20191217023822.jpg', 1, '2019-12-16 18:38:22'),
(25, NULL, NULL, '/uploads/db33073c086f515316d635ed9e3e5e76.20191217024007.jpg', 1, '2019-12-16 18:40:07'),
(26, NULL, NULL, '/uploads/db33073c086f515316d635ed9e3e5e76.20191217024457.jpg', 1, '2019-12-16 18:44:57'),
(27, NULL, NULL, '/uploads/cc87e7db952b92ea0fcdcde863bce035.20191217024521.jpg', 1, '2019-12-16 18:45:21'),
(28, NULL, NULL, '/uploads/e6c5cce0af5890eecd236c3747af0660.20191217033602.jpg', 1, '2019-12-16 19:36:02'),
(29, NULL, NULL, '/uploads/c1893ab519259d0a66ed7d69f170b416.20191217033743.png', 1, '2019-12-16 19:37:43'),
(30, NULL, NULL, '/uploads/09b9dd0701f49532005b2e46bafa9d98.png', 1, '2019-12-16 19:39:09'),
(31, NULL, NULL, '/uploads/5d5f924cc289ad9980e55500adfcaf0b.jpg', 1, '2019-12-16 19:42:14'),
(32, NULL, NULL, '/uploads/db33073c086f515316d635ed9e3e5e76.jpg', 1, '2019-12-16 20:16:50'),
(33, NULL, NULL, '/uploads/b29d1c8b9d0adcc2e9ab75598fad34f6.png', 1, '2019-12-17 13:59:50'),
(34, NULL, NULL, '/uploads/1930bfaf6c32efe0a4d701c3dc4060b8.jpg', 1, '2019-12-17 14:01:30'),
(35, NULL, NULL, '/uploads/7fe20de35bb15a6f25ec0e1bbb216e6c.jpg', 1, '2019-12-17 14:01:50'),
(36, NULL, NULL, '/uploads/87dd62a67e68a7960e1660506fcb1522.png', 1, '2019-12-17 14:02:06'),
(37, NULL, NULL, '/uploads/e8b1a8293dea4c1368b4c8bdc44edd08.png', 1, '2019-12-17 14:02:35'),
(38, NULL, NULL, '/uploads/mahmudul-hasan-OnMjJgFtpiA-unsplash.jpg', 25, '2019-12-17 14:56:21'),
(39, NULL, NULL, '/uploads/icons8-team-FcLyt7lW5wg-unsplash.jpg', 26, '2019-12-17 14:57:43'),
(40, NULL, NULL, '/uploads/gift-habeshaw-ZQ12blmrjpE-unsplash.jpg', 27, '2019-12-17 15:00:11'),
(41, NULL, NULL, '/uploads/ben-parker-ym--mSBZ0ro-unsplash.jpg', 28, '2019-12-17 15:02:07'),
(42, NULL, NULL, '/uploads/michael-dam-mEZ3PoFGs_k-unsplash.jpg', 29, '2019-12-17 15:05:21'),
(43, NULL, NULL, '/uploads/eye-for-ebony-QhoDs-dFIdE-unsplash.jpg', 30, '2019-12-17 15:09:10'),
(44, NULL, NULL, '/uploads/taylor-grote-UiVe5QvOhao-unsplash.jpg', 31, '2019-12-17 15:11:10'),
(45, NULL, NULL, '/uploads/6c44306f635b66b4cc4a9e06ebcc9a2b.jpg', 24, NULL),
(46, NULL, NULL, '/uploads/c9ffe02aa1aec7caad9a137045ce8000.jpg', 30, NULL),
(47, NULL, NULL, '/uploads/235b68b3d6b5147208233a919488b2b1.jpg', 23, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`) VALUES
(1, 'BC'),
(2, 'Alberta'),
(3, 'Saskatchewan'),
(4, 'Manitoba'),
(5, 'Quebec'),
(6, 'Ontario'),
(7, 'Newfoundland and Labrador'),
(8, 'Prince Edward Island'),
(9, 'New Brunswick'),
(10, 'Nova Scotia	'),
(11, 'Northwest Territories'),
(12, 'Yukon'),
(13, 'Nunavut');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(3) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `province` int(255) DEFAULT NULL,
  `province_id` int(3) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `newsletter` tinyint(1) NOT NULL DEFAULT '1',
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `profile_pic_id` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`, `address`, `address2`, `city`, `province`, `province_id`, `postal_code`, `newsletter`, `first_name`, `last_name`, `profile_pic_id`, `date_created`) VALUES
(1, 'toewso@gmail.com', '202cb962ac59075b964b07152d234b70', 1, '1424 SE Broadway Ave', '', 'College Place', NULL, 1, '99324', 1, 'Sonia', 'Toews', 7, '2019-11-22 11:26:26'),
(23, 'deanmartin@gmail.com', '202cb962ac59075b964b07152d234b70', 2, '285 Taylor Road', '', 'Kelowna', NULL, 1, 'V1X 4G1', 1, 'Dean', 'Martin', 4, '2019-11-25 13:46:20'),
(24, 'franks@gmail.com', '202cb962ac59075b964b07152d234b70', 2, '1424 SE Broadway Ave', '', 'College Place', NULL, 3, '99324', 1, 'Frank', 'Sinatra', 5, '2019-11-25 13:47:21'),
(25, 'paulr@gmail.com', '202cb962ac59075b964b07152d234b70', 2, '123 Taylor Rd', '', '', NULL, 1, 'V1X 4G1', 1, 'Paul', 'Rudd', 38, '2019-12-17 14:55:57'),
(26, 'nancys@gmail.com', '202cb962ac59075b964b07152d234b70', 2, '1424 SE Broadway Ave', '', '', NULL, 3, '99324', 1, 'Nancy', 'Sinatra', 39, '2019-12-17 14:57:18'),
(27, 'suzannesomers@gmail.com', '202cb962ac59075b964b07152d234b70', 2, '285 Taylor Road', '', '', NULL, 1, 'V1X 4G1', 1, 'Suzanne ', 'Somers', 40, '2019-12-17 14:59:55'),
(28, 'lennon@gmail.com', '202cb962ac59075b964b07152d234b70', 2, '1424 SE Broadway Ave', '', 'College Place', NULL, 4, '99324', 1, 'John', 'Lennon', 41, '2019-12-17 15:01:47'),
(29, 'ettaj@gmail.com', '202cb962ac59075b964b07152d234b70', 2, '1424 SE Broadway Ave', '', '', NULL, 3, '99324', 1, 'Etta', 'James', 42, '2019-12-17 15:05:07'),
(30, 'taylore@gmail.com', '202cb962ac59075b964b07152d234b70', 2, '1424 SE Broadway Ave', '', '', NULL, 3, '99324', 1, 'Elizabeth', 'Taylor', 43, '2019-12-17 15:08:55'),
(31, 'crosby@gmail.com', '202cb962ac59075b964b07152d234b70', 2, '285 Taylor Road', '', '', NULL, 1, 'V1X 4G1', 1, 'Bing', 'Crosby', 44, '2019-12-17 15:10:50'),
(32, 'pvigilante@digitalartschool.com', '202cb962ac59075b964b07152d234b70', 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'Peter', 'Vigilante', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
