-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Apr 2022 pada 13.33
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `beli`
--

CREATE TABLE `beli` (
  `id_beli` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `noid` varchar(16) DEFAULT NULL,
  `nohp` varchar(15) DEFAULT NULL,
  `tmpwisata` varchar(255) NOT NULL,
  `tgl` date DEFAULT NULL,
  `pdewasa` int(11) DEFAULT NULL,
  `panak` int(11) DEFAULT NULL,
  `total` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `beli`
--

INSERT INTO `beli` (`id_beli`, `nama`, `noid`, `nohp`, `tmpwisata`, `tgl`, `pdewasa`, `panak`, `total`) VALUES
(55, 'jauhar1994', '234253', '2147483647', 'Air Terjun Dolo', '2022-04-12', 2, 4, 40000),
(56, 'NINIK NURBANI', '234253', '2147483647', 'Simpang Lima Gumul', '2022-04-27', 2, 2, 30000),
(57, 'NINIK NURBANI', '234253', '2147483647', 'Simpang Lima Gumul', '2022-04-27', 2, 2, 30000),
(58, 'NINIK NURBANI', '234253', '2147483647', 'Simpang Lima Gumul', '2022-04-27', 2, 2, 30000),
(59, 'jauhar', '2147483647', '2147483647', 'Gunung Kelud', '2022-04-29', 2, 0, 20000),
(60, 'Kharisudin Aqib', '2147483647', '2147483647', 'Air Terjun Dolo', '2022-04-22', 1, 2, 20000),
(61, 'Kharisudin Aqib1111111', '2147483647', '2147483647', 'Air Terjun Dolo', '2022-04-22', 2, 0, 20000),
(62, 'Kharisudin Aqib', '123', '456', 'Air Terjun Dolo', '2022-04-22', 2, 2, 30000),
(63, 'ilham codex', '2147483647', '2147483647', 'Gunung Kelud', '2022-04-25', 3, 2, 40000),
(64, 'jojo', '5463728291746354', '085868646344', 'Air Terjun Dolo', '2022-04-29', 2, 5, 45000),
(65, 'haiyaaaa', '1234567891123456', '081335465017', 'Air Terjun Dolo', '2022-04-29', 6, 2, 70000),
(66, 'haiyaaaa', 'kharisudin Aqib.', '081335465017', 'Air Terjun Dolo', '2022-04-28', 2, 2, 30000),
(67, 'keren', '7426387364873668', '085868646342', 'Air Terjun Dolo', '2022-04-23', 3, 2, 40000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `beli`
--
ALTER TABLE `beli`
  ADD PRIMARY KEY (`id_beli`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `beli`
--
ALTER TABLE `beli`
  MODIFY `id_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
