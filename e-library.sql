-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 04:13 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-library`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(12) NOT NULL,
  `judul_buku` text NOT NULL,
  `harga_buku` text NOT NULL,
  `cover_buku` varchar(255) NOT NULL,
  `sinopsis` text NOT NULL,
  `genre` varchar(255) NOT NULL,
  `trend` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `harga_buku`, `cover_buku`, `sinopsis`, `genre`, `trend`) VALUES
(1, 'Kisah Tanah Jawa', '45.000', 'ktj.jpg', 'Penulisnya Kim Suhyun yang suka menggambar dan mengambil jurusan desain, telah menuangkan ceritanya dalam buku ini, selain sebagai penulis, juga merangkap sebagai illustrator, keren, ya! Tidak banyak penulis yang memiliki dua keahlian yaitu penulis dan ilustrator, kebanyakan karya-karya yang sering saya baca penulis berbeda keahlian dengan ilustrator. Selain buku ini, saya juga bisa menemukan dua keahlian dalam satu karya buku, yaitu saat membaca buku Santai Aja, Namanya juga hidup karya Yozuck, yang terjemahannya diterbitkan juga oleh penerbit yang sama dan penulisnya berasal dari negeri ginseng. Kalau karya penulis Indonesia, saya pernah baca buku Nanti Kita Cerita Tentang Hari Ini karya Marchella FP.\r\nBuat kamu yang sedang lelah menjalani hidup, apalagi ditambah situasi pandemi yang sudah berjalan lebih dari setahun, barangkali dengan meluangkan waktu membaca buku ini bisa menemukan perspektif baru dalam memaknai hidupmu, setidaknya kamu akan semakin mencintai diri kamu. Karena kalau tidak dimulai dari diri kamu dengan mencintai dirimu sendiri, lantas siapa yang akan mencintai dirimu yang berharga. Percayalah, setiap orang berharga, tidak perlu memusingkan pendapat dan penilaian orang lain yang tidak benar tentang dirimu. ', 'horor', 'yes'),
(12, 'Dilan', '124.000', 'dilan.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'romance', 'yes'),
(13, 'Paper Umbrela', '124.000', 'paperumbrela.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'romance', ''),
(14, 'Rumah Teteg', '124.000', 'rumah teteg.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'horor', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Muhamad Rafli Alfarizqi', 'admin', 'admin', 'admin'),
(13, 'Evi Nirmalasari', 'user', 'user', 'user'),
(19, 'Farel', 'farel', 'farel1234', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
