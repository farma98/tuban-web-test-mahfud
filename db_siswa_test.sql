-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 12 Jul 2022 pada 09.52
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siswa_test`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `a_nip` varchar(12) NOT NULL,
  `a_nama` varchar(50) NOT NULL,
  `a_password` varchar(100) NOT NULL,
  `a_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`a_nip`, `a_nama`, `a_password`, `a_level`) VALUES
('17390100009', 'Mahfud', '*74CCAE67B0D9D8269590381A30B73D93C8EBBD39', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `s_nim` varchar(12) NOT NULL,
  `s_nama` varchar(50) NOT NULL,
  `s_password` varchar(100) NOT NULL,
  `s_ttl` date NOT NULL,
  `s_alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`s_nim`, `s_nama`, `s_password`, `s_ttl`, `s_alamat`) VALUES
('1729010003', 'Farhan', '$2y$10$9miV6pe8G140QuDynbSM9eqxfS41OHaKXUIZphENI.7ls70oXoZ5W', '2022-07-12', 'Jl. Surabaya No. 03'),
('17390100002', 'Reza', '$2y$10$J0eBnIaHbk14f2.sdDxxk.viHJ6SeyHuL8/7LalnthFbB4cTsrR.i', '2022-07-12', 'Jl. Krian No. 02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`a_nip`);

--
-- Indeks untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`s_nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
