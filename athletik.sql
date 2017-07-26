-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 26, 2017 at 05:18 PM
-- Server version: 5.7.19-0ubuntu0.17.04.1
-- PHP Version: 7.0.18-0ubuntu0.17.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `athletik`
--

-- --------------------------------------------------------

--
-- Table structure for table `athlete`
--

CREATE TABLE `athlete` (
  `id` int(11) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `birthdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `athlete`
--

INSERT INTO `athlete` (`id`, `firstname`, `lastname`, `birthdate`) VALUES
(1, 'Jean Claude', 'Duss', '1985'),
(2, 'Bibi', 'Lafrite', '1965'),
(3, 'Robert', 'Camembert', '1989'),
(4, 'Christine', 'Boutin', '1992'),
(5, 'Albert', 'Heinstein', '1995'),
(6, 'Marguaret', 'Thatcher', '2003'),
(7, 'Jules', 'Cesar', '1991'),
(8, 'Momo', 'Ise', '1997'),
(9, 'Sidharta', 'gautama', '1991'),
(10, 'Adolf', 'Hitler', '2006'),
(11, 'Oussama', 'Ben Laden', '2001'),
(12, 'Jonnhy', 'Haliday', '1989'),
(13, 'Justin', 'Bieber', '1982'),
(14, 'Nicky', 'Minaj', '2006'),
(15, 'Lionel', 'Duboeuf', '2004'),
(16, 'Pika', 'Tchu', '1999'),
(17, 'Trall', 'Orc', '1998'),
(18, 'tata', 'glab', '1992'),
(19, 'tatatata', 'rouge', '1978'),
(20, 'tutuy', 'raclé', '1890'),
(21, 'gal', 'hère', '2000'),
(22, 'toto', 'gfdfg', '1890'),
(23, 'kalkal', 'traceur', '1982'),
(24, 'talion', 'talius', '1945');

-- --------------------------------------------------------

--
-- Table structure for table `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `athlete_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `athlete_id`) VALUES
(1, 'sheelman', 'sheelman', 'sheelman@hotmail.com', 'sheelman@hotmail.com', 1, NULL, '$2y$13$AEeEeNdsQoaNjciqKoEwzOwrFPpuSbT9abGvu1IOLRvuUU8/.Gwua', '2017-07-26 14:35:44', NULL, NULL, 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}', 18),
(2, 'toto', 'toto', 'toto@gmail.com', 'toto@gmail.com', 1, NULL, '$2y$13$2HUU0jKXYRQ9I9nTrYcXseBAB82ZPELQE5IQbCJpnhLbVgbSx25cW', '2017-07-26 13:24:39', NULL, NULL, 'a:0:{}', 22),
(3, 'tata', 'tata', 'tata@gmail.com', 'tata@gmail.com', 1, NULL, '$2y$13$vn/o7GYPSpbQhTtcaKBzN.Ddp212UBI4L/Iks0G.UM1v6va7nWqcm', '2017-07-26 11:18:37', NULL, NULL, 'a:0:{}', 19),
(4, 'tutuy', 'tutuy', 'tutuy@gmail.com', 'tutuy@gmail.com', 1, NULL, '$2y$13$io1xwJcUlcGjHn1hJ92n8.g8R6Sr8hJrLngw1ABzdYxjjQe97eC7S', '2017-07-26 10:24:37', NULL, NULL, 'a:0:{}', 20),
(5, 'gal', 'gal', 'galle@gmail.com', 'galle@gmail.com', 1, NULL, '$2y$13$dIvoddYIovH0alKMNyTUMebVh3ZoZ8mevsvH9i1WgS6cvUQO.XRBu', '2017-07-26 14:47:02', NULL, NULL, 'a:0:{}', 21),
(6, 'kalkal', 'kalkal', 'kalkal@hto.com', 'kalkal@hto.com', 1, NULL, '$2y$13$zBAZqQQHQKa9oOS7KQ8qG.jfSrT4TbAgexLyuRRqsOfaUnEYZaOh2', '2017-07-26 13:55:49', NULL, NULL, 'a:0:{}', 23),
(7, 'talion', 'talion', 'talion@hji.fr', 'talion@hji.fr', 1, NULL, '$2y$13$FddUL1J2BWXKD7BpG3TAT.Zk1cWJRL2D798nOikcO/BTXPe2JoxUW', '2017-07-26 14:00:56', NULL, NULL, 'a:0:{}', 24);

-- --------------------------------------------------------

--
-- Table structure for table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(11) NOT NULL,
  `meeting_id` int(11) DEFAULT NULL,
  `athlete_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE `meeting` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`id`, `name`, `description`, `date`) VALUES
(1, 'Peta Ouchnok', '', '2017-07-18'),
(2, 'Troufaillon Les oies', '', '2017-07-28'),
(12, 'manger moi sur loir', 'FFFFFFF c\'est la course a manger', '2017-08-19'),
(13, 'ttruc muchhh', 'galère day', '2017-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `meeting_id` int(11) DEFAULT NULL,
  `athlete_id` int(11) DEFAULT NULL,
  `time` double DEFAULT NULL,
  `points` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `meeting_id`, `athlete_id`, `time`, `points`) VALUES
(1, 1, 1, 2.4800000190734863, 404),
(2, 1, 2, 3.450000047683716, 392),
(3, 1, 3, 2.390000104904175, 419),
(4, 1, 4, 2.450000047683716, 409),
(5, 1, 5, 3.200000047683716, 341),
(6, 1, 6, 3.559999942779541, 380),
(7, 1, 8, 2.559999942779541, 391),
(8, 1, 9, 3.25, 308),
(9, 1, 7, 3.119999885559082, 321),
(10, 1, 10, 4.199999809265137, 358),
(11, 1, 11, 4.300000190734863, 282),
(12, 1, 12, 5.199999809265137, 193),
(13, 1, 13, 2.299999952316284, 435),
(14, 1, 14, 3.119999885559082, 481),
(15, 1, 15, 4.590000152587891, 310),
(16, 1, 16, 2.5299999713897705, 467),
(17, 2, 16, 3.8499999046325684, 460),
(18, 2, 8, 2.6500000953674316, 520),
(19, 2, 10, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `athlete`
--
ALTER TABLE `athlete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`),
  ADD KEY `IDX_957A6479FE6BCB8B` (`athlete_id`);

--
-- Indexes for table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`),
  ADD KEY `meeting_id` (`meeting_id`),
  ADD KEY `athlete_id` (`athlete_id`);

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `athlete_id` (`athlete_id`),
  ADD KEY `meeting_id` (`meeting_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `athlete`
--
ALTER TABLE `athlete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `fos_user`
--
ALTER TABLE `fos_user`
  ADD CONSTRAINT `FK_957A6479FE6BCB8B` FOREIGN KEY (`athlete_id`) REFERENCES `athlete` (`id`);

--
-- Constraints for table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `inscription_ibfk_1` FOREIGN KEY (`meeting_id`) REFERENCES `meeting` (`id`),
  ADD CONSTRAINT `inscription_ibfk_2` FOREIGN KEY (`athlete_id`) REFERENCES `athlete` (`id`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`athlete_id`) REFERENCES `athlete` (`id`),
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`meeting_id`) REFERENCES `meeting` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
