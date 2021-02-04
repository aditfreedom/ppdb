-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Feb 2021 pada 16.20
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.14

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
-- Struktur dari tabel `kuota`
--

CREATE TABLE `kuota` (
  `id` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `kuota` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kuota`
--

INSERT INTO `kuota` (`id`, `jenis`, `kuota`) VALUES
(3, 'Peserta Didik Baru SD', 100),
(5, 'Peserta Didik Baru SMP', 65);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `sekolah_asal` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `bukti_tf` varchar(255) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(1) NOT NULL,
  `approve_formulir` varchar(30) NOT NULL,
  `approve_lulus` varchar(30) NOT NULL,
  `approve_daftarulang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama_lengkap`, `nisn`, `alamat`, `sekolah_asal`, `no_hp`, `foto`, `bukti_tf`, `jenis`, `username`, `password`, `role`, `approve_formulir`, `approve_lulus`, `approve_daftarulang`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', '0', 'admin', 'admin', 'admin'),
(3, 'Aditya Aziz Fikhri', '0', '', 'SMP SUKMA BANGSA', '', 'foto22.jpg', 'struk1.jpg', 'Peserta Didik Baru SMA', 'adit', 'adit', '1', 'Antrian', 'Antrian', 'Antrian'),
(4, 'Fitria Aprianty', '0', '', 'SMP SUKMA BANGSA', '', 'foto22.jpg', '', 'Peserta Didik Baru SMA', 'adit', 'ADIT', '1', 'Diterima', 'Antrian', 'Antrian'),
(5, 'Dieky Zulfikar Md.', '0', '', 'SMP SUKMA BANGSA', '', 'foto22.jpg', '', 'Peserta Didik Baru SMA', 'adit', 'ADIT', '1', 'Ditolak', 'Antrian', 'Antrian');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kuota`
--
ALTER TABLE `kuota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kuota`
--
ALTER TABLE `kuota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
