-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jul 2023 pada 17.27
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alternatif`
--

CREATE TABLE `tb_alternatif` (
  `no` int(35) NOT NULL,
  `kode_alternatif` varchar(35) NOT NULL,
  `nama_alternatif` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_alternatif`
--

INSERT INTO `tb_alternatif` (`no`, `kode_alternatif`, `nama_alternatif`) VALUES
(1, 'A01', 'Alif Faridfytffytffytfy'),
(2, 'A02', 'Bernard'),
(3, 'A03', 'Marisah'),
(5, 'A04', 'Putra');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hitung`
--

CREATE TABLE `tb_hitung` (
  `kode_alternatif` varchar(10) NOT NULL,
  `kriteria1` varchar(10) NOT NULL,
  `kriteria2` varchar(10) NOT NULL,
  `kriteria3` varchar(10) NOT NULL,
  `kriteria4` varchar(10) NOT NULL,
  `kriteria5` varchar(10) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `hasil` varchar(10) NOT NULL,
  `kode_nka` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_hitung`
--

INSERT INTO `tb_hitung` (`kode_alternatif`, `kriteria1`, `kriteria2`, `kriteria3`, `kriteria4`, `kriteria5`, `jumlah`, `hasil`, `kode_nka`) VALUES
('A1', '3', '33', '1', '4', '88', '2.833', '0.667', 0),
('A2', '3', '18', '1', '3', '74', '2.417', '0.392', 2),
('A3', '3', '24', '3', '5', '85', '4.143', '0.914', 3),
('A4', '1', '25', '0', '3', '73', '0.000', '0.000', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `no` int(10) NOT NULL,
  `kode_kriteria` varchar(35) NOT NULL,
  `nama_kriteria` varchar(35) NOT NULL,
  `bobot` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`no`, `kode_kriteria`, `nama_kriteria`, `bobot`) VALUES
(2, 'C01', 'Hasil psikotes', '0.2'),
(3, 'C02', 'Usia', '0.1'),
(4, 'C03', 'Pengalaman', '0.2'),
(5, 'C04', 'wawancara', '0.2'),
(11, '32423', 'dawdawdadawdawdssadssssss', 'wdwadawda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `no` int(35) NOT NULL,
  `kode_alternatif` varchar(35) NOT NULL,
  `kriteria1` int(35) NOT NULL,
  `kriteria2` int(35) NOT NULL,
  `kriteria3` int(35) NOT NULL,
  `kriteria4` int(35) NOT NULL,
  `kriteria5` int(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_nilai`
--

INSERT INTO `tb_nilai` (`no`, `kode_alternatif`, `kriteria1`, `kriteria2`, `kriteria3`, `kriteria4`, `kriteria5`) VALUES
(1, 'A01', 3, 33, 1, 4, 88),
(2, 'A02', 3, 18, 1, 3, 77),
(3, 'A03', 3, 24, 3, 5, 85),
(4, 'A04', 1, 25, 0, 3, 73);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `tb_hitung`
--
ALTER TABLE `tb_hitung`
  ADD PRIMARY KEY (`kode_nka`);

--
-- Indeks untuk tabel `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  MODIFY `no` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `no` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
