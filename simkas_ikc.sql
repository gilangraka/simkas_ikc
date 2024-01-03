-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 03 Jan 2024 pada 16.33
-- Versi server: 10.6.15-MariaDB-cll-lve
-- Versi PHP: 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelastan_simkas_ikc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kas_masuk_keluar`
--

CREATE TABLE `data_kas_masuk_keluar` (
  `id_kas` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `deskripsi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nominal` int(11) NOT NULL,
  `status_kas` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `jenis_kas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `data_kas_masuk_keluar`
--

INSERT INTO `data_kas_masuk_keluar` (`id_kas`, `tanggal_masuk`, `deskripsi`, `nominal`, `status_kas`, `jenis_kas`) VALUES
(1, '2023-12-18', 'Kas Bulan Desember', 20000, '{\"33422206\":0,\"33422208\":1,\"33422212\":0,\"33422215\":2,\"33422221\":0}', 0),
(2, '2004-12-11', 'kAS BULANAN', 500000, '{\"33422206\":0,\"33422208\":1,\"33422212\":0,\"33422215\":2,\"33422221\":0}', 0),
(3, '2023-12-18', 'Asda', 10000, '{\"33422206\":0,\"33422208\":1,\"33422212\":0,\"33422215\":2,\"33422221\":0}', 0),
(4, '2023-12-18', 'sdx1', 20000, '{\"33422206\":0,\"33422208\":1,\"33422212\":0,\"33422215\":2,\"33422221\":0}', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `status_bayar` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`id_mahasiswa`, `nama_mhs`, `status_bayar`) VALUES
(33422206, 'Elang Argawana', 0),
(33422208, 'Gilang Raka Ramadhan', 0),
(33422212, 'Mochammad Anda Fadholli', 0),
(33422215, 'Nabilla Khairunnisa', 0),
(33422221, 'Yufigor Caesar T', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi_kas_masuk`
--

CREATE TABLE `konfirmasi_kas_masuk` (
  `id_kas` int(11) NOT NULL,
  `id_mhs` varchar(50) NOT NULL,
  `nominal` int(11) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_mhs`
--

CREATE TABLE `login_mhs` (
  `id_mahasiswa` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login_mhs`
--

INSERT INTO `login_mhs` (`id_mahasiswa`, `email`, `password`, `role`) VALUES
('33422206', '33422206@kelastanpaac.my.id', 'polines2023', 'mahasiswa'),
('33422208', '33422208@kelastanpaac.my.id', 'polines2023', 'mahasiswa'),
('33422212', '33422212@kelastanpaac.my.id', 'polines2023', 'mahasiswa'),
('33422215', '33422215@kelastanpaac.my.id', 'polines2023', 'bendahara'),
('33422221', '33422221@kelastanpaac.my.id', 'polines2023', 'mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `total_kas`
--

CREATE TABLE `total_kas` (
  `jumlah_kas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `total_kas`
--

INSERT INTO `total_kas` (`jumlah_kas`) VALUES
(85000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_kas_masuk_keluar`
--
ALTER TABLE `data_kas_masuk_keluar`
  ADD PRIMARY KEY (`id_kas`);

--
-- Indeks untuk tabel `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indeks untuk tabel `konfirmasi_kas_masuk`
--
ALTER TABLE `konfirmasi_kas_masuk`
  ADD PRIMARY KEY (`id_kas`);

--
-- Indeks untuk tabel `login_mhs`
--
ALTER TABLE `login_mhs`
  ADD UNIQUE KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_kas_masuk_keluar`
--
ALTER TABLE `data_kas_masuk_keluar`
  MODIFY `id_kas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33422222;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
