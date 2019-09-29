-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 23, 2019 at 09:58 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jomg3847_bbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `siswa_id` int(11) NOT NULL,
  `siswa_kode` varchar(50) NOT NULL,
  `siswa_password` varchar(50) NOT NULL,
  `siswa_pilihan_pendidikan` varchar(11) NOT NULL,
  `siswa_pilihan_pondok` enum('ya','tidak') NOT NULL,
  `siswa_no_kk` varchar(32) NOT NULL,
  `siswa_no_nisn` varchar(32) DEFAULT NULL,
  `siswa_no_nik` varchar(50) DEFAULT NULL,
  `siswa_nama` varchar(100) NOT NULL,
  `siswa_tempat_lahir` varchar(50) NOT NULL,
  `siswa_tanggal_lahir` date NOT NULL,
  `siswa_anak_ke` int(11) NOT NULL,
  `siswa_jumlah_saudara` int(11) NOT NULL,
  `siswa_jenis_kelamin` varchar(11) NOT NULL,
  `siswa_kewarganegaraan` varchar(11) DEFAULT NULL,
  `siswa_isi_kewarganegaraan` varchar(50) DEFAULT NULL,
  `siswa_penanggung_biaya` varchar(11) NOT NULL,
  `siswa_isi_penanggung_biaya` varchar(50) DEFAULT NULL,
  `siswa_asal_sekolah` varchar(25) DEFAULT NULL,
  `siswa_isi_asal_sekolah` varchar(100) DEFAULT NULL,
  `siswa_status_asal_sekolah` varchar(11) DEFAULT NULL,
  `siswa_nama_asal_sekolah` varchar(100) DEFAULT NULL,
  `siswa_alamat_asal_sekolah` varchar(100) NOT NULL,
  `siswa_telp_asal_sekolah` varchar(32) DEFAULT NULL,
  `siswa_npsn_asal_sekolah` varchar(50) DEFAULT NULL,
  `siswa_no_ijazah` varchar(100) DEFAULT NULL,
  `siswa_th_ijazah` varchar(11) DEFAULT NULL,
  `siswa_nama_ayah` varchar(100) NOT NULL,
  `siswa_agama_ayah` varchar(11) NOT NULL,
  `siswa_nama_ibu` varchar(100) NOT NULL,
  `siswa_agama_ibu` varchar(11) NOT NULL,
  `siswa_pekerjaan_wali` varchar(15) NOT NULL,
  `siswa_penghasilan_wali` varchar(50) NOT NULL,
  `siswa_alamat` text NOT NULL,
  `siswa_no_telp` varchar(50) NOT NULL,
  `siswa_nik` varchar(32) NOT NULL,
  `siswa_nik2` varchar(50) NOT NULL,
  `siswa_kode_pos` varchar(11) NOT NULL,
  `siswa_pendidikan_ayah` varchar(15) NOT NULL,
  `siswa_pendidikan_ibu` varchar(15) NOT NULL,
  `siswa_file_foto` text,
  `siswa_file_ktp` text,
  `siswa_file_nisn` text,
  `siswa_file_kk` text,
  `siswa_file_akte` text,
  `siswa_file_ijazah` text,
  `siswa_status` varchar(11) NOT NULL,
  `siswa_tanggal_validasi` datetime NOT NULL,
  `siswa_tanggal_daftar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`siswa_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `siswa_id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
