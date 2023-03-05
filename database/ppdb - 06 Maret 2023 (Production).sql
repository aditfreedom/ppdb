-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2023 at 07:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftarulang`
--

CREATE TABLE `daftarulang` (
  `id_daftarulang` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `tingkat` varchar(11) DEFAULT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `nama_panggilan` varchar(125) DEFAULT NULL,
  `nisn` varchar(255) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `tpt_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` varchar(20) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `suku` varchar(50) DEFAULT NULL,
  `jk` varchar(50) DEFAULT NULL,
  `goldar` varchar(3) DEFAULT NULL,
  `anak_ke` varchar(99) DEFAULT NULL,
  `dari_saudara` varchar(99) DEFAULT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `jarak` varchar(25) DEFAULT NULL,
  `desa` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `kabupaten` varchar(50) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `nama_ayah` varchar(255) DEFAULT NULL,
  `nik_ayah` varchar(20) DEFAULT NULL,
  `tptlahir_ayah` varchar(50) DEFAULT NULL,
  `tgllahir_ayah` varchar(20) DEFAULT NULL,
  `pendidikan_ayah` varchar(50) DEFAULT NULL,
  `pekerjaan_ayah` varchar(50) DEFAULT NULL,
  `penghasilan_ayah` varchar(50) DEFAULT NULL,
  `alamat_ayah` varchar(500) DEFAULT NULL,
  `desa_ayah` varchar(50) DEFAULT NULL,
  `kecamatan_ayah` varchar(50) DEFAULT NULL,
  `kabupaten_ayah` varchar(50) DEFAULT NULL,
  `provinsi_ayah` varchar(50) DEFAULT NULL,
  `hp_ayah` varchar(20) DEFAULT NULL,
  `nama_ibu` varchar(255) DEFAULT NULL,
  `nik_ibu` varchar(20) DEFAULT NULL,
  `tptlahir_ibu` varchar(50) DEFAULT NULL,
  `tgllahir_ibu` varchar(20) DEFAULT NULL,
  `pendidikan_ibu` varchar(50) DEFAULT NULL,
  `pekerjaan_ibu` varchar(50) DEFAULT NULL,
  `penghasilan_ibu` varchar(50) DEFAULT NULL,
  `alamat_ibu` varchar(500) DEFAULT NULL,
  `desa_ibu` varchar(50) DEFAULT NULL,
  `kecamatan_ibu` varchar(50) DEFAULT NULL,
  `kabupaten_ibu` varchar(50) DEFAULT NULL,
  `provinsi_ibu` varchar(50) DEFAULT NULL,
  `hp_ibu` varchar(50) DEFAULT NULL,
  `sekolah_asal` varchar(255) DEFAULT NULL,
  `npsn` varchar(20) DEFAULT NULL,
  `alamat_sekolah` varchar(500) DEFAULT NULL,
  `kabupaten_sekolah` varchar(500) DEFAULT NULL,
  `provinsi_sekolah` varchar(50) DEFAULT NULL,
  `penyakit` varchar(255) DEFAULT NULL,
  `olah_raga` varchar(10) DEFAULT NULL,
  `seni` varchar(10) DEFAULT NULL,
  `tari` varchar(10) DEFAULT NULL,
  `lukis` varchar(10) DEFAULT NULL,
  `drama` varchar(10) DEFAULT NULL,
  `sastra` varchar(10) DEFAULT NULL,
  `organisasi` varchar(10) DEFAULT NULL,
  `prestasi` varchar(500) DEFAULT NULL,
  `alasan` varchar(500) DEFAULT NULL,
  `tentang_sekolah` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kuota`
--

CREATE TABLE `kuota` (
  `id` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `kuota` int(5) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuota`
--

INSERT INTO `kuota` (`id`, `jenis`, `kuota`, `keterangan`) VALUES
(3, 'Peserta Didik Baru SD', 75, 'Peserta Didik Baru Kelas I SD'),
(5, 'Peserta Didik Baru SMP', 60, 'Peserta Didik Baru Kelas VII SMP'),
(6, 'Peserta Didik Baru SMA', 60, 'Peserta Didik Baru Kelas X SMA'),
(7, 'Pindahan SD', 0, 'Hanya Kelas II SD'),
(8, 'Pindahan SMP', 0, 'Hanya Kelas IX'),
(9, 'Pindahan SMA', 0, 'Kelas XI dan XII');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `tptlahir` varchar(255) DEFAULT NULL,
  `tgllahir` varchar(255) DEFAULT NULL,
  `nisn` varchar(20) DEFAULT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `sekolah_asal` varchar(255) DEFAULT NULL,
  `namaayah` varchar(255) DEFAULT NULL,
  `namaibu` varchar(255) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `no_wa` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `akte` varchar(255) DEFAULT NULL,
  `bukti_tf` varchar(255) DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `pindah_kelas` varchar(5) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(1) DEFAULT NULL,
  `approve_formulir` varchar(30) DEFAULT NULL,
  `approve_lulus` varchar(30) DEFAULT NULL,
  `approve_daftarulang` varchar(30) DEFAULT NULL,
  `created_tima` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama_lengkap`, `tptlahir`, `tgllahir`, `nisn`, `alamat`, `sekolah_asal`, `namaayah`, `namaibu`, `no_hp`, `no_wa`, `foto`, `akte`, `bukti_tf`, `jenis`, `pindah_kelas`, `username`, `password`, `role`, `approve_formulir`, `approve_lulus`, `approve_daftarulang`, `created_tima`) VALUES
(1, 'ADMINISTRATOR', '', '', 'admin', 'admin', 'admin', '', '', 'admin', '', 'admin', '', 'admin', 'admin', '', 'admin', '0eab68759cc784399fa5c6ba986cdb3d', '0', 'admin', 'admin', 'admin', '2023-02-07 05:56:40'),
(11, 'superadmin', '', '', 'superadmin', 'superadmin', 'superadmin', '', '', 'superadmin', '', 'superadmin', '', 'superadmin', 'superadmin', '', 'superadmin', 'adminsukma2021', '0', 'superadmin', 'superadmin', 'superadmin', '2023-02-07 05:56:40'),
(18, 'adminoperator', '', '', '0', 'adminoperator', 'adminoperator', '', '', '0', '', 'adminoperator', '', 'adminoperator', '', '', 'adminoperator', 'adminoperator2021', '0', 'adminoperator', 'adminoperator', 'adminoperator', '2023-02-07 05:56:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftarulang`
--
ALTER TABLE `daftarulang`
  ADD PRIMARY KEY (`id_daftarulang`);

--
-- Indexes for table `kuota`
--
ALTER TABLE `kuota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftarulang`
--
ALTER TABLE `daftarulang`
  MODIFY `id_daftarulang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kuota`
--
ALTER TABLE `kuota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=524;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
