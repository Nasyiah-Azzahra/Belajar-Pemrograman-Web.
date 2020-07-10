-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2020 at 04:03 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guards`
--

-- --------------------------------------------------------

--
-- Table structure for table `guard`
--

CREATE TABLE `guard` (
  `id` varchar(64) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guard`
--

INSERT INTO `guard` (`id`, `nama`, `nohp`, `foto`, `deskripsi`) VALUES
('5efed55df3967', 'Auriga B Septario', '081222111222', '5efed55df3967.jpg', 'Sangat berpengalaman, dan telah menekuni profesi bodyguard selama lebih dari 5 tahun'),
('5f03f105554db', 'Bintang Lee Kenzo', '081222111223', '5f03f105554db.jpg', 'Berpengalaman selama 2 tahun dibidangnya'),
('5f03f180872ed', 'Septario Alvaro', '081222111224', '5f03f180872ed.jpg', 'Pernah melakukan pengawalan pada sebuah event besar'),
('5f03f6bcca65b', 'Alfa Centauri', '081222111225', '5f03f6bcca65b.jpg', 'Sangat berpengalaman dan ahli dibidangnya'),
('5f03f89fcc377', 'Daniel Frey', '081222111226', '5f03f89fcc377.jpg', 'Mampu bekerja dalam tim maupun individu dan sangat kompeten'),
('5f03fa0755917', 'Deolinda Grizlle', '081222111227', '5f03fa0755917.jpg', 'Bodyguard yang cekatan dan sangat kompeten'),
('5f040da285b99', 'Gerald Liam', '081222111228', '5f040da285b99.jpg', 'Mampu bekerja dalam tim dan dibawah tekanan serta berpengalaman'),
('5f069b1903425', 'Azzahra Zeline', '081222111229', '5f069b1903425.jpg', 'Seorang atlet beladiri yang mampu menjadi bodyguard profesional'),
('5f06a494bca5b', 'William Alvaro', '081222111211', '5f06a494bca5b.jpg', 'Berpengalaman menjadi bodyguard selama 3 tahun dan sangat disiplin'),
('5f06a836a3a59', 'The Guard Girls', '081222111212', '5f06a836a3a59.jpg', 'Mampu menjadi bodyguard untuk pengawalan dan pengamanan sebuah event maupun personal'),
('5f06c3ab6cc6b', 'Triguard', '081222111213', '5f06c3ab6cc6b.jpg', 'Selalu Siaga, siap melayani sebuah event maupun personal'),
('5f06c5e18ed22', 'Gengster Guard', '081222111214', '5f06c5e18ed22.jpg', 'Siap bekerja untuk event besar, memiliki banyak penghargaan dibidang bodyguard, dan tentunya sangat profesional'),
('5f06cb6b2b0d4', 'Vania Keisya', '081222111210', '5f06cb6b2b0d4.jpg', 'Memiliki banyak prestasi dibidang bodyguard, sangat gesit dan cekatan.'),
('5f06cdae420a3', 'The Infinity', '081222111215', '5f06cdae420a3.jpg', 'Sangat loyal dan profesional. Memiliki banyak penghargaan dan berpengalaman dalam mengamankan sebuah event besar selama lebih dari 4 tahun');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `role` enum('admin','customer') NOT NULL DEFAULT 'customer',
  `last_login` timestamp NOT NULL DEFAULT current_timestamp(),
  `photo` varchar(64) NOT NULL DEFAULT 'user_no_image.jpg',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `full_name`, `phone`, `role`, `last_login`, `photo`, `created_at`, `is_active`) VALUES
(1, 'rara', '$2y$10$tonZkQrnGnp9n38rWeMTieLPNxtDfvy4Z/35Q4rlFObsm/xFnSae.', 'admin@admin.admin', 'raraazzahra', '085950111222', 'admin', '2020-07-09 08:23:07', 'user_no_image.jpg', '2020-07-04 01:38:09', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guard`
--
ALTER TABLE `guard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
