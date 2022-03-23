-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 16, 2022 at 03:23 AM
-- Server version: 10.5.12-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id18507049_db_perjananan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_catatan`
--

CREATE TABLE `tb_catatan` (
  `nik` int(15) NOT NULL,
  `tgl` date NOT NULL,
  `waktu` time(6) NOT NULL,
  `lokasi` varchar(10) NOT NULL,
  `suhu_tubuh` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_catatan`
--

INSERT INTO `tb_catatan` (`nik`, `tgl`, `waktu`, `lokasi`, `suhu_tubuh`) VALUES
(3204050, '2022-02-15', '56:19:11.000000', 'smk', 36),
(123, '2022-03-01', '37:09:01.000000', 'bdg', 20),
(1234, '2022-03-11', '17:47:00.000000', 'BANDUNG', 44),
(123, '2022-03-13', '20:33:00.000000', 'SMD', 28),
(123, '2022-03-13', '21:35:00.000000', 'seoul', 57),
(102, '2022-03-16', '10:19:00.000000', 'BDG', 28),
(102, '2022-03-16', '10:22:00.000000', 'BDG', 24.8);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `nik` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`nik`, `nama`) VALUES
(101, 'Nnd'),
(102, 'Ninda'),
(123, '123'),
(123456, '123456'),
(1234567890, 'Ninda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
