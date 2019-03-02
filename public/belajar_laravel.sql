-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2019 at 11:56 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `pegawai_id` int(11) NOT NULL,
  `pegawai_nama` varchar(100) NOT NULL,
  `pegawai_jabatan` varchar(100) NOT NULL,
  `pegawai_umur` int(11) NOT NULL,
  `pegawai_alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`pegawai_id`, `pegawai_nama`, `pegawai_jabatan`, `pegawai_umur`, `pegawai_alamat`) VALUES
(1, 'Sebastianus Sembara', 'Frontend Developer', 20, 'Surabaya'),
(3, 'Bella Tertiana', 'System Analyst', 19, 'Mojokerto'),
(4, 'Herwanda Ayu Destaria', 'UI/UX Designer', 19, 'Madiun'),
(5, 'Rayhan Sabian', 'Android Developer', 23, 'Surabaya'),
(6, 'Yohana Elita Aguelera', 'Data Engineer', 17, 'Surabaya'),
(7, 'Salma Maghfira', 'Fullstack Developer', 21, 'Sidoarjo'),
(8, 'Novan Yepta Wibowo', 'Data Scientist', 23, 'Surabaya'),
(9, 'Regina Martha Clarinssa', 'Data Spesialist', 21, 'Surabaya'),
(10, 'Alfiyan Richard', 'IT Support', 25, 'Gresik'),
(11, 'Johan Baptista', 'IT Support', 22, 'Gresik'),
(12, 'Katharina Anggun Dwi Novitasari', 'Database Administrator', 21, 'Ngawi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`pegawai_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `pegawai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
