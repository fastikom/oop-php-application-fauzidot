-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2017 at 04:16 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbbem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbcalon`
--

CREATE TABLE IF NOT EXISTS `tbcalon` (
  `noUrut` int(2) NOT NULL,
  `cKetua` varchar(30) NOT NULL,
  `cWakil` varchar(30) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `suara` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbcalon`
--

INSERT INTO `tbcalon` (`noUrut`, `cKetua`, `cWakil`, `visi`, `misi`, `foto`, `suara`) VALUES
(1, 'Ana', 'Ani', 'Memajukan universitas sehingga bisa menjadi kampus yang maju', 'Sama kaya visi', 'images/foto.jpg', 3),
(2, 'Jono', 'Joni', 'Mengembangkan universitas agar bisa berkembang secepat mungkin', 'Mirip kaya visi', 'images/foto.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `user_name` varchar(16) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_mail` varchar(50) NOT NULL,
  `user_active` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_pass`, `user_mail`, `user_active`, `status`) VALUES
(3, '2014150033', '9dfbd704d7e5c2d5a43c03463a33d0388a82cc00', 'triajigunawan96@gmail.com', 1, 1),
(5, '2014150014', '68fd7c6a2a6fb212fa6d101cb7ae6a40ede96fec', 'anggit26@gmail.com', 1, 0),
(8, '2014150003', '50efc57834495f6b1e5f7b6270a15e1786720cc3', 'hehe123@gmail.com', 1, 1),
(9, '2014150004', '5af97a50c318c96612450af77020b7045e0e7db7', 'sudahlah@gmail.com', 1, 1),
(11, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 2, 1),
(12, '2014150001', 'dc4dd44d3465997a4a04fd070df0bf24b75f9cff', '0101@gmail.com', 1, 1),
(13, '2014150002', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '002@gmail.com', 1, 1),
(14, '2014150004', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '004@gmail.com', 1, 1),
(18, '2014150010', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'yusuf@mail.com', 1, 0),
(19, '2015150128', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'wahyu@mal.com', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbcalon`
--
ALTER TABLE `tbcalon`
 ADD PRIMARY KEY (`noUrut`);

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
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
