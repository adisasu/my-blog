-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2016 at 07:41 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `creation_date`) VALUES
(1, '', '', '2016-02-12 19:01:01'),
(2, 'My second title', 'Lorep ipsum', '2016-02-12 19:03:27'),
(3, 'My second title', 'Lorep ipsum', '2016-02-12 19:06:17'),
(4, 'My second title', 'Lorep ipsum', '2016-02-12 19:06:18'),
(5, 'My second title', 'Lorep ipsum', '2016-02-12 19:06:19'),
(6, 'My second title', 'Lorep ipsum', '2016-02-12 19:06:20'),
(7, 'My second title', 'Lorep ipsum', '2016-02-12 19:06:20'),
(8, 'My second title', 'Lorep ipsum', '2016-02-12 19:06:41'),
(9, 'My second title', 'Lorep ipsum', '2016-02-12 19:06:41'),
(10, 'My second title', 'Lorep ipsum', '2016-02-12 19:20:53'),
(11, 'My second title', 'Lorep ipsum', '2016-02-12 19:22:38'),
(12, 'My second title', 'Lorep ipsum', '2016-02-12 19:23:04'),
(13, 'My second title', 'Lorep ipsum', '2016-02-12 19:23:39'),
(14, 'My second title', 'Lorep ipsum', '2016-02-12 19:24:24'),
(15, 'My second title', 'Lorep ipsum', '2016-02-12 19:25:16'),
(16, 'My second title', 'Lorep ipsum', '2016-02-12 19:36:26'),
(17, 'Test', 'PHP DAY!', '2016-02-12 19:49:55'),
(18, 'Test', 'PHP DAY!', '2016-02-12 19:49:55'),
(19, 'Test', 'PHP DAY!', '2016-02-12 20:26:02'),
(20, 'Test', 'PHP DAY!', '2016-02-12 20:26:02'),
(21, 'Buna ziua', 'blablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablabla', '0000-00-00 00:00:00'),
(25, 'tesry', 'yh tfgb', '0000-00-00 00:00:00'),
(26, '', '', '0000-00-00 00:00:00'),
(27, 'testare', 'buna ziua romania buna ziua romaniabuna ziua romaniabuna ziua romaniabuna ziua romaniabuna ziua romaniabuna ziua romaniabuna ziua romaniabuna ziua romaniabuna ziua romaniabuna ziua romaniabuna ziua romaniabuna ziua romaniabuna ziua romaniabuna ziua romania', '0000-00-00 00:00:00'),
(28, 'jjjjjjjj', 'fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `article_id`, `email`, `body`, `creation_date`) VALUES
(1, 0, 'boanca.radu@gmail.com', 'nice article', '2016-02-12 19:25:16'),
(2, 0, 'boanca.radu@gmail.com', 'nice article', '2016-02-12 19:36:26'),
(3, 0, 'vlad@boss.ro', 'Primul meu comment.', '2016-02-12 19:49:55'),
(4, 0, 'vlad@boss.ro', 'Primul meu comment.', '2016-02-12 20:26:02');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`) VALUES
(68, 'sasu adrian', 'sasuady@gmail.com', 'buna ziua imi bag picioru in rahatu asta de mvc'),
(69, 'sasu adrian', 'sasuady@gmail.com', 'buna ziua imi bag picioru in rahatu asta de mvc'),
(70, '', '', ''),
(71, '', '', ''),
(72, '', '', ''),
(73, '', '', ''),
(74, '', '', ''),
(75, '', '', ''),
(76, '', '', ''),
(77, '', '', ''),
(78, '', '', ''),
(79, '', '', ''),
(80, '', '', ''),
(81, '', '', ''),
(82, '', '', ''),
(83, 'sasu', 'adi_50_c_e_n_t@yahoo.com', 'rgbrsbrtbr'),
(84, 'xwcwd', 'dvcwdsvcdw', 'dcdwverd'),
(85, 'xwcwd', 'dvcwdsvcdw', 'dcdwverd'),
(86, 'dcwef', 'rvergverv', 'ewverfdbrtntyfgntrf'),
(87, '', '', ''),
(88, '', '', ''),
(89, 'kjk', 'thtrh', 'thbtfh'),
(90, 'kjk', 'thtrh', 'thbtfh'),
(91, 'vdsvds', 'vdsv', 'dvdsvdsvdsvds'),
(92, '', '', ''),
(93, '', '', ''),
(94, '', '', ''),
(95, '', '', ''),
(96, '', '', ''),
(97, '', '', ''),
(98, '', '', ''),
(99, '', '', ''),
(100, '', '', ''),
(101, 'sasu', 'asfdsfvdf', 'buna buna buna bunabuna bunabuna bunabuna bunabuna bunabuna bunabuna bunabuna bunabuna bunabuna bunabuna bunabuna bunabuna bunabuna bunabuna bunabuna bunabuna bunabuna bunabuna bunabuna bunabuna bunabuna buna'),
(102, 'sasu', 'sasuadrian@ymail.com', 'edvcefvefv'),
(103, 'sdcsd', 'dscds', 'dsvdsfvegf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
