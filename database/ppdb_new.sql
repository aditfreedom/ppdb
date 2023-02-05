-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2022 at 06:13 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

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
  `nisn` varchar(15) DEFAULT NULL,
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
  `tptlahir_ibu` varchar(50) DEFAULT NULL,
  `tgllahir_ibu` varchar(20) DEFAULT NULL,
  `pendidikan_ibu` varchar(50) DEFAULT NULL,
  `pekerjaan_ibu` varchar(50) DEFAULT NULL,
  `penghasilan_ibu` varchar(50) DEFAULT NULL,
  `alamat_ibu` varchar(50) DEFAULT NULL,
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

--
-- Dumping data for table `daftarulang`
--

INSERT INTO `daftarulang` (`id_daftarulang`, `id`, `tingkat`, `nama_lengkap`, `nama_panggilan`, `nisn`, `tpt_lahir`, `tgl_lahir`, `agama`, `suku`, `jk`, `goldar`, `anak_ke`, `dari_saudara`, `alamat`, `jarak`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `nama_ayah`, `tptlahir_ayah`, `tgllahir_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `alamat_ayah`, `desa_ayah`, `kecamatan_ayah`, `kabupaten_ayah`, `provinsi_ayah`, `hp_ayah`, `nama_ibu`, `tptlahir_ibu`, `tgllahir_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `alamat_ibu`, `desa_ibu`, `kecamatan_ibu`, `kabupaten_ibu`, `provinsi_ibu`, `hp_ibu`, `sekolah_asal`, `npsn`, `alamat_sekolah`, `kabupaten_sekolah`, `provinsi_sekolah`, `penyakit`, `olah_raga`, `seni`, `tari`, `lukis`, `drama`, `sastra`, `organisasi`, `prestasi`, `alasan`, `tentang_sekolah`) VALUES
(167, 236, 'SMA', 'Aditya Aziz Fikhri', 'Adit', '1457301021', 'Lhokseumawe', '1996-01-31', 'Islam', 'Aceh', 'Laki-Laki', 'O', '1', '3', 'Jl. H. Hanafiah', '1 - 3 KM', 'Juli Cot Meurak, Kec. Juli', '', 'Bireuen', 'Aceh', 'Asnawir Azhar', 'Langsa', '1969-09-03', 'SMA', 'Wiraswasta', '> Rp. 5.000.000', 'Jl. H. Hanafiah', 'Juli Cot Meurak, Kec. Juli', '', 'Bireuen', 'Aceh', '6285261321805', 'Endang Fitrianty', 'Medan', '1974-10-10', 'SMA', 'Wiraswasta', '> Rp. 5.000.000', 'Jl. H. Hanafiah', 'Juli Cot Meurak, Kec. Juli', '', 'Bireuen', 'Aceh', '6285263610354', 'SMP SUKMA BANGSA BIREUEN', '10107071', 'Desa Cot Keutapang, Kec. Jeumpa Kab. Bireuen', 'Bireuen', 'Aceh', 'Tidak Ada', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Cum Laude 3.74', 'Ingin Menuntut Ilmu Ke Jenjang Lebih Tinggi', 'Sekolah Swasta Yang Bergengsi');

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
(3, 'Peserta Didik Baru SD', 56, 'Peserta Didik Baru Kelas I SD'),
(5, 'Peserta Didik Baru SMP', 58, 'Peserta Didik Baru Kelas VII SMP'),
(6, 'Peserta Didik Baru SMA', 60, 'Peserta Didik Baru Kelas X SMA'),
(7, 'Pindahan SD', 12, 'Hanya Kelas II SD'),
(8, 'Pindahan SMP', 7, 'Hanya Kelas IX'),
(9, 'Pindahan SMA', 15, 'Kelas XI dan XII');

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
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(1) DEFAULT NULL,
  `approve_formulir` varchar(30) DEFAULT NULL,
  `approve_lulus` varchar(30) DEFAULT NULL,
  `approve_daftarulang` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama_lengkap`, `tptlahir`, `tgllahir`, `nisn`, `alamat`, `sekolah_asal`, `namaayah`, `namaibu`, `no_hp`, `no_wa`, `foto`, `akte`, `bukti_tf`, `jenis`, `username`, `password`, `role`, `approve_formulir`, `approve_lulus`, `approve_daftarulang`) VALUES
(1, 'ADMINISTRATOR PPDB', '', '', 'admin', 'admin', 'admin', '', '', 'admin', '', 'admin', '', 'admin', 'admin', 'admin', 'sukma2021', '0', 'admin', 'admin', 'admin'),
(11, 'superadmin', '', '', 'superadmin', 'superadmin', 'superadmin', '', '', 'superadmin', '', 'superadmin', '', 'superadmin', 'superadmin', 'superadmin', 'adminsukma2021', '0', 'superadmin', 'superadmin', 'superadmin'),
(18, 'adminoperator', '', '', '0', 'adminoperator', 'adminoperator', '', '', '0', '', 'adminoperator', '', 'adminoperator', '', 'adminoperator', 'adminoperator2021', '0', 'adminoperator', 'adminoperator', 'adminoperator'),
(236, 'Aditya Aziz Fikhri', 'Lhokseumawe', '1996-01-31', '1457301021', 'Jl. H. Hanafiah No. 5, Desa Juli Cot Meurak, Kec. Juli Kab. Bireuen - Aceh', 'SMP SUKMA BANGSA BIREUEN', 'Asnawir Azhar', 'Endang Fitrianty', '6281362059403', '6281362059403', 'foto26.jpg', 'aktalahirbaru5.jpg', 'WhatsApp_Image_2021-12-22_at_10_10_225.jpeg', 'Peserta Didik Baru SMA', '', '', '1', 'Diterima', 'Lulus', 'Diterima');

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
  MODIFY `id_daftarulang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `kuota`
--
ALTER TABLE `kuota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
