-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Okt 2020 pada 02.49
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengelola`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket`
--

CREATE TABLE `tiket` (
  `id_penumpang` int(11) NOT NULL,
  `nama_penumpang` varchar(100) DEFAULT NULL,
  `tiket_kelas` varchar(100) DEFAULT NULL,
  `tujuan` varchar(100) DEFAULT NULL,
  `harga_tiket` int(11) DEFAULT NULL,
  `tanggal` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tiket`
--

INSERT INTO `tiket` (`id_penumpang`, `nama_penumpang`, `tiket_kelas`, `tujuan`, `harga_tiket`, `tanggal`) VALUES
(108, 'Aodellas Magosiang ', 'VIP', 'Yogyakarta', 300000, '31-01-2021'),
(109, 'Sudiyono', 'Executive', 'Kendal', 150000, '22-10-2020'),
(110, 'Toba Fathir', 'Super Executive', 'Kendal', 300000, '08-01-2021'),
(111, 'Bayu Pamungkas', 'Executive', 'Kendal', 300000, '05-10-2020'),
(114, 'Munif Soleh', 'Super Executive', 'Magelang', 300000, '12-10-2020'),
(115, 'Matsna', 'Patas', 'Magelang', 400000, '28-10-2020'),
(116, 'Rendi', 'Ekonomi', 'Magelang', 400000, '16-10-2020'),
(117, 'Reyhan', 'VIP', 'Bondowoso', 500000, '28-10-2020'),
(129, 'Anang Syah Amirul Haqim', 'Super Executive', 'Kanciland', 400000, '20-10-2020'),
(135, 'reza', 'Patas', 'cobaan', 150000, '26-04-2023'),
(142, 'ahmad', 'Executive', 'jepara', 450000, '05-10-2020');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_penumpang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_penumpang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
