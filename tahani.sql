-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Bulan Mei 2019 pada 08.55
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tahani`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_laptops`
--

CREATE TABLE `tbl_laptops` (
  `id_laptop` int(10) NOT NULL,
  `id_merk` int(2) NOT NULL,
  `nama_laptop` text NOT NULL,
  `harga` int(9) NOT NULL,
  `nama_processor` text NOT NULL,
  `kecepatan_processor` int(11) NOT NULL,
  `dimensi` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_merk`
--

CREATE TABLE `tbl_merk` (
  `id_merk` int(10) NOT NULL,
  `nama_merek` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_merk`
--

INSERT INTO `tbl_merk` (`id_merk`, `nama_merek`) VALUES
(1, 'ASUS'),
(2, 'HP'),
(4, 'Lenovo'),
(5, 'Acer'),
(6, 'Toshiba'),
(7, 'MSI');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_laptops`
--
ALTER TABLE `tbl_laptops`
  ADD PRIMARY KEY (`id_laptop`),
  ADD KEY `CONN_MERK` (`id_merk`);

--
-- Indeks untuk tabel `tbl_merk`
--
ALTER TABLE `tbl_merk`
  ADD PRIMARY KEY (`id_merk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_laptops`
--
ALTER TABLE `tbl_laptops`
  MODIFY `id_laptop` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_merk`
--
ALTER TABLE `tbl_merk`
  MODIFY `id_merk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_laptops`
--
ALTER TABLE `tbl_laptops`
  ADD CONSTRAINT `CONN_MERK` FOREIGN KEY (`id_merk`) REFERENCES `tbl_merk` (`id_merk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
