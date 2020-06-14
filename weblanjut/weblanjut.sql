-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2020 at 06:37 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weblanjut`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `kode_dokter` varchar(5) NOT NULL,
  `nama_dokter` varchar(30) NOT NULL,
  `SIP` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`kode_dokter`, `nama_dokter`, `SIP`, `tanggal_lahir`, `telepon`, `alamat`) VALUES
('DR003', 'Asti', '098978574', '2000-03-08', '082345678921', 'campurejo'),
('DR004', 'Afelia', '968756589', '1998-07-04', '083586784213', 'tampingan'),
('DR005', 'Safika', '8785799', '1997-07-05', '089234567897', 'boja');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `kode_user` varchar(5) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `sandi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`kode_user`, `nama_user`, `sandi`) VALUES
('LG001', 'admin', 'admin'),
('LG002', 'asti', 'asti'),
('LG003', 'metong', 'metong'),
('LG004', 'tongseng', 'tongseeeeng'),
('LG005', 'suchai', 'suchai');

--
-- Triggers `login`
--
DELIMITER $$
CREATE TRIGGER `tr_del_login` AFTER DELETE ON `login` FOR EACH ROW BEGIN
DELETE FROM dokter WHERE kode_user=old.kode_user;

END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`kode_dokter`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`kode_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
