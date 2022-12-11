-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2022 pada 11.39
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul4_rivaldo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `showroom_rivaldo_table`
--

CREATE TABLE `showroom_rivaldo_table` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `showroom_rivaldo_table`
--

INSERT INTO `showroom_rivaldo_table` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`) VALUES
(1, 'TRITON', 'BOBI', 'DAIHATSU', '2022-11-10', '4x2', 'triton.jpg', 'Lunas'),
(2, 'HILUX', 'BOBI', 'TOYOTA', '2022-11-09', '4x4', 'hilux.jpg', 'Lunas'),
(4, 'L300', 'EDI SURYANA', 'DAIHATSU', '2022-11-26', 'Balap Sayur', 'L300.jpg', 'Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_rivaldo`
--

CREATE TABLE `user_rivaldo` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_rivaldo`
--

INSERT INTO `user_rivaldo` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(1, 'admin', 'admin@gmail.com', 'asd', '0888888'),
(2, 'admin2', 'admin2@gmail.com', 'qwe', '088888822'),
(8, 'Rivaldo', 'admin1@gmail.com', '123', '082131223423');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `showroom_rivaldo_table`
--
ALTER TABLE `showroom_rivaldo_table`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indeks untuk tabel `user_rivaldo`
--
ALTER TABLE `user_rivaldo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `showroom_rivaldo_table`
--
ALTER TABLE `showroom_rivaldo_table`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_rivaldo`
--
ALTER TABLE `user_rivaldo`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
