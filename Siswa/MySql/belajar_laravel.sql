-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2023 at 08:28 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(3) NOT NULL,
  `nama_buku` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `nama_buku`, `deskripsi`, `foto`) VALUES
(1, 'Matematika', 'ini buku matematika', 'matematika.jpeg'),
(2, 'Seni Budaya', 'ini buku seni budaya', 'senibudaya.jpeg'),
(3, 'IPA', 'ini buku ipa', 'ipa.jpeg'),
(4, 'RPL', 'ini buku Rpl', 'rpl.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `detail_peminjaman_buku`
--

CREATE TABLE `detail_peminjaman_buku` (
  `id_detail_peminjaman_buku` int(11) NOT NULL,
  `id_peminjaman_buku` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_peminjaman_buku`
--

INSERT INTO `detail_peminjaman_buku` (`id_detail_peminjaman_buku`, `id_peminjaman_buku`, `id_buku`, `qty`) VALUES
(4, 6, 1, 1),
(5, 6, 2, 3),
(6, 7, 1, 5),
(7, 7, 3, 9),
(8, 8, 1, 1),
(9, 8, 1, 1),
(10, 9, 2, 3),
(11, 9, 3, 1),
(12, 10, 1, 1),
(13, 10, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `kelompok` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kelompok`) VALUES
(1, 'exerthrees', 'sepuluh'),
(2, 'bersatu', 'sebelas');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman_buku`
--

CREATE TABLE `peminjaman_buku` (
  `id_peminjaman_buku` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman_buku`
--

INSERT INTO `peminjaman_buku` (`id_peminjaman_buku`, `id_siswa`, `tanggal_pinjam`, `tanggal_kembali`) VALUES
(6, 13, '2023-08-04', '2023-08-09'),
(7, 15, '2023-08-29', '2023-09-03'),
(8, 15, '2023-08-29', '2023-09-03'),
(9, 15, '2023-08-29', '2023-09-03'),
(10, 13, '2023-08-30', '2023-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian_buku`
--

CREATE TABLE `pengembalian_buku` (
  `id_pengembalian_buku` int(11) NOT NULL,
  `id_peminjaman_buku` int(11) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengembalian_buku`
--

INSERT INTO `pengembalian_buku` (`id_pengembalian_buku`, `id_peminjaman_buku`, `tanggal_pengembalian`, `denda`) VALUES
(1, 1, '2023-08-04', 0),
(2, 5, '2023-08-04', 0),
(3, 4, '2023-08-04', 0),
(4, 3, '2023-08-04', 0),
(5, 2, '2023-08-04', 0),
(6, 6, '2023-08-04', 0),
(7, 7, '2023-08-29', 0),
(8, 8, '2023-08-29', 0),
(9, 9, '2023-08-29', 0);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `tanggal_lahir`, `gender`, `alamat`, `username`, `password`, `id_kelas`) VALUES
(10, 'sultan', '2023-08-02', 'L', 'malang', 'sultanrafi', '2b84bb45c716003706627ee0c14f5b5f', 2),
(11, 'sultan', '2023-08-02', 'L', 'malang', 'sultanrafi', '4d2b31c91d33a32a98584546736d5c73', 2),
(13, 'pandhu', '2023-08-02', 'L', 'malang', 'pandhuarya', '2b84bb45c716003706627ee0c14f5b5f', 2),
(14, 'ahsan ', '2023-08-03', 'L', 'jauh disana', 'ahsanazizan', 'a1fb7f01ffe3fc76e0b997be59ae212f', 1),
(15, 'panpan', '2023-08-26', 'L', 'ponorogo', 'panntod', '2b84bb45c716003706627ee0c14f5b5f', 2),
(16, 'yusuf', '2023-08-31', 'L', 'bumi', 'yusuf', '21232f297a57a5a743894a0e4a801fc3', 1),
(17, 'jalu', '2023-08-31', 'L', 'bumi ini ', 'jalu', '21232f297a57a5a743894a0e4a801fc3', 1),
(18, 'jalu', '2023-08-11', 'L', 'adsa', 'jalu1', '21232f297a57a5a743894a0e4a801fc3', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `detail_peminjaman_buku`
--
ALTER TABLE `detail_peminjaman_buku`
  ADD PRIMARY KEY (`id_detail_peminjaman_buku`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `peminjaman_buku`
--
ALTER TABLE `peminjaman_buku`
  ADD PRIMARY KEY (`id_peminjaman_buku`);

--
-- Indexes for table `pengembalian_buku`
--
ALTER TABLE `pengembalian_buku`
  ADD PRIMARY KEY (`id_pengembalian_buku`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `detail_peminjaman_buku`
--
ALTER TABLE `detail_peminjaman_buku`
  MODIFY `id_detail_peminjaman_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `peminjaman_buku`
--
ALTER TABLE `peminjaman_buku`
  MODIFY `id_peminjaman_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengembalian_buku`
--
ALTER TABLE `pengembalian_buku`
  MODIFY `id_pengembalian_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
