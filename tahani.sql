-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08 Mei 2019 pada 22.35
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

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
  `kecepatan_processor` float NOT NULL,
  `dimensi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_laptops`
--

INSERT INTO `tbl_laptops` (`id_laptop`, `id_merk`, `nama_laptop`, `harga`, `nama_processor`, `kecepatan_processor`, `dimensi`) VALUES
(1, 4, 'Lenovo V310 14', 9299000, 'Core i7', 2.7, 14),
(2, 1, 'ASUS X540LJ', 5399000, 'Core i3', 1.7, 15.6),
(3, 4, 'Lenovo Legion Y530', 14789000, 'Core i7', 2.2, 15),
(4, 2, 'HP Pavilion 10-f001au', 2490000, 'AMD A4', 1, 10.1),
(5, 5, 'Acer Aspire ES1-131-C7JQ', 2715000, 'Dual Core', 1.6, 11.6),
(6, 6, 'TOSHIBA Portege R830', 3430000, 'Core i7', 3.4, 13.3),
(7, 3, 'MSI GL62M 7RD', 12995000, 'Core i7', 2.8, 15.6),
(8, 3, 'MSI GL62M 7RDX', 11799000, 'Core i7', 2.8, 15.6),
(9, 1, 'ASUS ROG Strix GL503', 14299000, 'Core i7', 2.4, 15.6);

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
(3, 'MSI'),
(4, 'Lenovo'),
(5, 'Acer'),
(6, 'Toshiba');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_laptops`
--
ALTER TABLE `tbl_laptops`
  ADD PRIMARY KEY (`id_laptop`),
  ADD KEY `CONN_MERK` (`id_merk`);

--
-- Indexes for table `tbl_merk`
--
ALTER TABLE `tbl_merk`
  ADD PRIMARY KEY (`id_merk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_laptops`
--
ALTER TABLE `tbl_laptops`
  MODIFY `id_laptop` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_merk`
--
ALTER TABLE `tbl_merk`
  MODIFY `id_merk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
