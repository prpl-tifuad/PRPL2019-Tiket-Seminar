-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2019 at 05:15 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tenten`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `image_url` varchar(50) DEFAULT NULL,
  `date_e` date DEFAULT NULL,
  `lokasi` varchar(25) DEFAULT NULL,
  `kategori` varchar(25) DEFAULT NULL,
  `jam` time NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `image_url`, `date_e`, `lokasi`, `kategori`, `jam`, `harga`) VALUES
(1, 'POKEMON dan Sonic Coming Soon', 'Bagaimanakah kisah selanjutnya antara Pokemon dengan Sonic, saksikan seminarnya', 'gambar/seminar5.png', '2019-04-24', 'jakarta', 'education', '22:10:49', 0),
(2, 'AVENGERS END GAME', 'Bagaimanakah nasib tanos pada serian avengers yang katanya terakhir ini, durasinya panjang loh 3 jam', 'gambar/seminar6.png', '2019-04-24', 'bekasi', 'technology', '22:10:49', 100000),
(3, 'RAMADHAN TELAH TIBA', 'Sebentar lagi bulan ramadhan akan datang, mari kita sambut bulan ramadhan ini', 'gambar/seminar7.png', '2019-04-25', 'depok', 'education', '22:10:49', 100000),
(4, 'BUKA PUASA BERSAMA', 'Ayo kita berbuka puasa bersama dengan sahabat dan keluarga, jangan lupa batalkan puasanya ketika mendengan adzan magrib', 'gambar/seminar8.png', '2019-04-25', 'jakarta', 'education', '22:10:49', 100000),
(5, 'LEBARAN SEBENTAR LAGI', 'Baju baru alhamdulillah, tuk dipakai dihari raya, tak punyapun tak apa-apa.. masih ada baju yang lama', 'gambar/seminar9.png', '2019-04-25', 'jakarta', 'education', '22:10:49', 100000),
(6, 'LEBARAN KAPAN ?', 'Lebaran akan jatuh pada tanggal 1 syawal, maka tidak boleh ada yang berpuasa pada tanggal tersebut.. hehe', 'gambar/seminar10.png', '2019-04-25', 'jakarta', 'education', '22:10:49', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(15) DEFAULT NULL,
  `lastname` varchar(15) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'Insan', 'Kamil', 'insankamil@gmail.co', 'c1c41a826c01b123a2930958054465a6'),
(2, 'Feny', 'Tenten', 'ftenten302@gmail.com', 'ba59292c10f76360cf4223e5851abeda'),
(3, 'Tester', '', 'tester@mail.com', '48d85b02cc231688f3142338e4ee4f1c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
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
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
