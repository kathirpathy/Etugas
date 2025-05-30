-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 03:34 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etugas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `no_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`no_id`, `name`, `username`, `password`) VALUES
(1, 'admin', 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daftar`
--

CREATE TABLE `tbl_daftar` (
  `no_id` int(11) NOT NULL,
  `id_pegawai` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `emel` varchar(255) NOT NULL,
  `notel` varchar(12) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `peranan` varchar(255) NOT NULL,
  `tahapakses` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_daftar`
--

INSERT INTO `tbl_daftar` (`no_id`, `id_pegawai`, `username`, `password`, `nama`, `emel`, `notel`, `alamat`, `jabatan`, `peranan`, `tahapakses`) VALUES
(51, 'CI080130', 'nazry', '202cb962ac59075b964b07152d234b70', 'Nazry Bin Yusof', 'nazry@gmail.com', '01234567891', 'Umbai Melaka', 'Teknologi Komputer Perisian (Pengaturcaraan)', 'Pensyarah', ''),
(52, 'CI080199', 'ainon', 'b706835de79a2b4e80506f582af3676a', 'Ainon Binti Abdullah', 'ainon@gmail.com', '0193273367', 'Alor Gajah Melaka', 'Teknologi Komputer Perisian (Pengaturcaraan)', 'Pensyarah', ''),
(53, 'CI080199', 'zul', '202cb962ac59075b964b07152d234b70', 'Muhamad Nur Zulfadhli Bin Abd Rahim', 'zulfadhli@gmail.com', '01234596753', 'Jasin Melaka', 'Teknologi Komputer Perisian (Pengaturcaraan)', 'Pensyarah', ''),
(54, 'CI080101', 'munir', '202cb962ac59075b964b07152d234b70', 'Munir Syafwan Bin Mohamed', 'munir@gmail.com', '0192233448', 'Jasin Melaka', 'Teknologi Komputer Sistem', 'Pensyarah', ''),
(55, 'CI080144', 'ayu', '202cb962ac59075b964b07152d234b70', 'Siti Noridayu Binti Mustafar', 'ayu@gmail.com', '0177865342', 'Kesang Melaka', 'Teknologi Minyak & Gas (Lukisan Perpaipan)', 'Pensyarah', ''),
(56, 'CI0801355', 'din', '202cb962ac59075b964b07152d234b70', 'Ts Mohd Hairudin Bin Hasan', 'din@gmail.com', '01877263471', 'Selandar Melaka', 'Teknologi Komputer Sistem', 'Pensyarah', ''),
(57, 'CI080166', 'meor', '202cb962ac59075b964b07152d234b70', 'Meor Safri Bin Zamri', 'meor@gmail.com', '0177863421', 'Alor Gajah Melaka', 'Teknologi Komputer Rangkaian', 'Pensyarah', ''),
(58, 'CI080177', 'meen', '202cb962ac59075b964b07152d234b70', 'Aminah Binti Jaferi ', 'meen@gmail.com', '012345894031', 'Jasin Melaka', 'Teknologi Komputer Rangkaian', 'Pensyarah', ''),
(59, 'CI080115', 'raja', '202cb962ac59075b964b07152d234b70', 'Raja Azman Bin Raja Omar', 'raja@gmail.com', '01787352781', 'Jasin Melaka', 'Teknologi Komputer Rangkaian', 'Pensyarah', ''),
(60, 'CI080166', 'jefri', '202cb962ac59075b964b07152d234b70', 'Muhammad Jefri Bin Ibrahim', 'jefri@gmail.com', '0127346821', 'Selandar Melaka', 'Teknologi Rekabentuk Produk Industri', 'Pensyarah', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semakan`
--

CREATE TABLE `tbl_semakan` (
  `no_id` int(12) NOT NULL,
  `id_pegawai` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `subjek` text NOT NULL,
  `semester` varchar(10) NOT NULL,
  `tarikh_ganti` date NOT NULL,
  `sebab` enum('Cuti Sakit','Cuti Rehat','Cuti Kecemasan','Kursus','Lain-lain') NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `nama_pengganti` varchar(300) NOT NULL,
  `lulus_jabatan` varchar(255) NOT NULL DEFAULT 'Dalam Proses'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_semakan`
--

INSERT INTO `tbl_semakan` (`no_id`, `id_pegawai`, `nama`, `subjek`, `semester`, `tarikh_ganti`, `sebab`, `jabatan`, `nama_pengganti`, `lulus_jabatan`) VALUES
(34, 'CI080130', 'Nazry Bin Yusof', 'Bug Management', '4', '2022-12-22', 'Cuti Rehat', 'Teknologi Komputer Perisian (Pengaturcaraan)', 'Ainon Binti Abdullah', 'Diterima'),
(35, 'CI080166', 'Meor Safri Bin Zamri', 'Cable Installation', '4', '2022-12-22', 'Kursus', 'Teknologi Komputer Sistem', 'Muhammad Nur Zaulfadhli Bin Abd Rahim', 'Ditolak'),
(36, 'CI080199', 'Encik Nazry', 'IT Project Management', '4', '2022-12-07', 'Kursus', 'Teknologi Komputer Perisian', 'Ainon Binti Abdullah', 'Diterima');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`no_id`);

--
-- Indexes for table `tbl_daftar`
--
ALTER TABLE `tbl_daftar`
  ADD PRIMARY KEY (`no_id`);

--
-- Indexes for table `tbl_semakan`
--
ALTER TABLE `tbl_semakan`
  ADD PRIMARY KEY (`no_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_daftar`
--
ALTER TABLE `tbl_daftar`
  MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `tbl_semakan`
--
ALTER TABLE `tbl_semakan`
  MODIFY `no_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
