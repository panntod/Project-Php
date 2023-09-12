-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2023 at 12:22 PM
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
-- Database: `projek_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pembayaran`
--

CREATE TABLE `detail_pembayaran` (
  `id_detail_pembayaran` int(10) NOT NULL,
  `id_pembayaran` int(11) NOT NULL,
  `id_menu` int(10) NOT NULL,
  `id_warung` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_pembayaran`
--

INSERT INTO `detail_pembayaran` (`id_detail_pembayaran`, `id_pembayaran`, `id_menu`, `id_warung`, `qty`, `total`) VALUES
(10, 10, 1, 1, 23, 322000),
(11, 10, 2, 1, 1, 6000),
(12, 10, 3, 2, 1, 7000),
(13, 11, 3, 2, 1, 7000),
(14, 11, 1, 1, 1, 14000),
(15, 11, 5, 2, 45, 720000);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(10) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `deskripsi_menu` varchar(100) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `jenis` enum('makanan','minuman') NOT NULL,
  `id_warung` int(10) NOT NULL,
  `harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `deskripsi_menu`, `gambar`, `jenis`, `id_warung`, `harga`) VALUES
(1, 'Ayam Laos', 'Ayam yang diolah secara tradisional, dan digoreng dengan sepenih hati', 'https://img.kurio.network/8MULHXwSbPTW1KvlvDzCajGaTDs=/440x440/filters:quality(80)/https://kurio-img.kurioapps.com/21/02/16/46841aa9-8853-4e4b-a4ab-1a884c8afb2a.jpe', 'makanan', 1, 14000),
(2, 'Es Jeruk', 'Dibuat dengan jeruk pilihan, dan diperas menggunakan metode tradisional', 'https://dcostseafood.id/wp-content/uploads/2021/12/ES-JERUK-murni.jpg', 'minuman', 1, 6000),
(3, 'Jus Jambu', 'dipilih dengan jambu pilihan yang dipetik ketika matahari subuh bersinar', 'https://dcostseafood.id/wp-content/uploads/2021/12/JUS-JAMBU-400x400.jpg', 'minuman', 2, 7000),
(4, 'Jus Alpukat', 'alpukat yang masih fresh diambil ketika sudah matang', 'https://dcostseafood.id/wp-content/uploads/2021/12/Jus-Alpukat-400x400.jpg', 'minuman', 3, 7000),
(5, 'Bakmi Goreng', 'bakmi asli yogyakarta dengan resep turun menurun', 'https://dcostseafood.id/wp-content/uploads/2023/04/Bakmi-goreng-spesial-2-400x400.jpg', 'makanan', 2, 16000),
(6, 'Tahu Crispy', 'digoreng dengan kematangan yang pas sehingga crispy yang pas', 'https://dcostseafood.id/wp-content/uploads/2019/04/Tahu-Jepang-saus-Telur-Asin-400x400.jpg', 'makanan', 3, 10000),
(7, 'Soto Lamongan', 'Soto asli lamongan menggunakan resep rahasia dari nenek moyang terdahulu', 'https://assets.unileversolutions.com/recipes-v2/242798.jpg', 'makanan', 3, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(10) NOT NULL,
  `id_siswa` int(10) NOT NULL,
  `tanggal_pembayaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_siswa`, `tanggal_pembayaran`) VALUES
(10, 2, '2023-09-12'),
(11, 2, '2023-09-12');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(22) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `saldo_siswa` int(100) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('admin','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama`, `kelas`, `saldo_siswa`, `email`, `password`, `role`) VALUES
(1, 'Asfina Andini', 'XI R 1', 100000, 'asfina@gmail.com', '21232f297a57a5a743894a0e4a801fc3', ''),
(2, 'pandhu arya munjalindra', 'X R1', 500000, 'pandhu@gmail.com', '21232f297a57a5a743894a0e4a801fc3', ''),
(3, 'sulthan', 'XI R2', 0, 'sulthan@gmail.com', '21232f297a57a5a743894a0e4a801fc3', ''),
(4, 'admin', 'XI R3', 60000, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `warung`
--

CREATE TABLE `warung` (
  `id_warung` int(10) NOT NULL,
  `nama_warung` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `warung`
--

INSERT INTO `warung` (`id_warung`, `nama_warung`, `deskripsi`) VALUES
(1, 'Pak Yoyok', 'Kami menjual berbagai makanan dan minuman khas daerah jawa dengan rempah rempah pilihan'),
(2, 'Bu Latif', 'Menjual masakan dengan bumbu tradisional jawa'),
(3, 'Pak Danang', 'Menjual Masakan Berkuah Dengan Rempah Tradisional');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pembayaran`
--
ALTER TABLE `detail_pembayaran`
  ADD PRIMARY KEY (`id_detail_pembayaran`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `warung`
--
ALTER TABLE `warung`
  ADD PRIMARY KEY (`id_warung`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pembayaran`
--
ALTER TABLE `detail_pembayaran`
  MODIFY `id_detail_pembayaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `warung`
--
ALTER TABLE `warung`
  MODIFY `id_warung` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
