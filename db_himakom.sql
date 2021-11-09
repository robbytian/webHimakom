-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2021 at 06:35 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_himakom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `level` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `level`) VALUES
(1, 'admin', '$2y$10$zKjWN3wYclMvBIxDvhyKT.EI/wHdLZJO86QaRi4kVmZphXcvynt7u', 1),
(2, 'bendahara', '$2y$10$zKjWN3wYclMvBIxDvhyKT.EI/wHdLZJO86QaRi4kVmZphXcvynt7u', 2);

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nrp` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `foto` text DEFAULT NULL,
  `instagram` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nrp`, `nama`, `id_divisi`, `foto`, `instagram`) VALUES
(1, '190313013', 'Aldi Novriadi', 1, NULL, 'aldinovvv_'),
(2, '190313011', 'Celvin Zakaria', 11, NULL, 'kelvinzakaria'),
(3, '190313003', 'Dafa Rofi Saefulloh', 3, NULL, 'dafa_rofi'),
(4, '190313007', 'Dara Febriani Iskandar', 9, NULL, 'dara_febriani'),
(5, '190613015', 'Fatah At Thariq', 8, NULL, NULL),
(6, '190313004', 'Firmansah', 14, NULL, 'frmndmng'),
(7, '190613006', 'Khaerunisa Trisania', 6, NULL, 'khaerunisatrsnia'),
(8, '190613005', 'Megasuria Widya Tantri', 12, NULL, 'megawdyaaa'),
(9, '190613011', 'Robby Gustian', 13, NULL, 'robbytian_'),
(10, '190313012', 'Silver Farhanny Syifa', 10, NULL, 'silverfarhany'),
(11, '190613014', 'Vinny Lindawaty', 4, NULL, 'vinnylindawaty'),
(19, '200613016', 'Dera Akbar ', 2, NULL, ''),
(20, '200613008', 'Ryan Budiawan', 5, NULL, ''),
(21, '200313017', 'Khoirunisa Mujahidah Salman', 7, NULL, ''),
(22, '200613007', 'Jovi Julian Hendri', 15, NULL, ''),
(23, '200313011', 'Iwan Ramdani', 15, NULL, ''),
(24, '200313001', 'Mirza Ambar Prasasti', 15, NULL, ''),
(25, '200813005', ' Muhammad Azhar Akmal', 15, NULL, ''),
(26, '200313016', 'Launa Wandy Monic', 15, NULL, ''),
(27, '200813003', 'Sofyanis Suwary', 15, NULL, ''),
(28, '200613013', 'Alifudin Nuryansyah Putra', 15, NULL, ''),
(29, '200613014', 'Naufal Ramdhani', 15, NULL, ''),
(30, '200813007', 'Astri Andini', 15, NULL, ''),
(31, '200813002', 'Yanuarti Mutiara', 15, NULL, ''),
(32, '200813001', 'Muhamad Ghifari Aji Soemarta', 15, NULL, ''),
(33, '200313007', 'Risma Putri Anggraeni', 15, NULL, ''),
(34, '200613009', 'Darrell Syabian R', 15, NULL, ''),
(35, '200613005', 'Mochamad Rafli Djamhuri', 15, NULL, ''),
(36, '200313004', 'Much Herizal Aryabirlan', 15, NULL, ''),
(37, '200313002', 'Abil Ramdani', 15, NULL, ''),
(38, '200313013', 'Mochamad Alif Fauzan', 15, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `data_pembayaran`
--

CREATE TABLE `data_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `id_detail_waktu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detail_waktu`
--

CREATE TABLE `detail_waktu` (
  `id_detail_waktu` int(11) NOT NULL,
  `id_waktu` int(11) NOT NULL,
  `minggu_ke` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_waktu`
--

INSERT INTO `detail_waktu` (`id_detail_waktu`, `id_waktu`, `minggu_ke`) VALUES
(1, 1, '1'),
(2, 1, '2'),
(3, 1, '3'),
(4, 1, '4'),
(5, 2, '1'),
(6, 2, '2'),
(7, 2, '3'),
(8, 2, '4'),
(9, 3, '1'),
(10, 3, '2'),
(11, 3, '3'),
(12, 3, '4'),
(13, 4, '1'),
(14, 4, '2'),
(15, 4, '3'),
(16, 4, '4'),
(17, 5, '1'),
(18, 5, '2'),
(19, 5, '3'),
(20, 5, '4'),
(21, 6, '1'),
(22, 6, '2'),
(23, 6, '3'),
(24, 6, '4'),
(25, 7, '1'),
(26, 7, '2'),
(27, 7, '3'),
(28, 7, '4'),
(29, 8, '1'),
(30, 8, '2'),
(31, 8, '3'),
(32, 8, '4'),
(33, 9, '1'),
(34, 9, '2'),
(35, 9, '3'),
(36, 9, '4'),
(37, 10, '1'),
(38, 10, '2'),
(39, 10, '3'),
(40, 10, '4');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nama`) VALUES
(1, 'Ketua'),
(2, 'Wakil Ketua'),
(3, 'Koordinasi KSM'),
(4, 'Sekretaris 1'),
(5, 'Sekretaris 2'),
(6, 'Bendahara 1'),
(7, 'Bendahara 2'),
(8, 'Departemen IT'),
(9, 'Departemen Internal'),
(10, 'Departemen Eksternal'),
(11, 'Departemen Danus 1'),
(12, 'Departemen Danus 2'),
(13, 'Departemen Humas'),
(14, 'Departemen Logistik'),
(15, 'Anggota');

-- --------------------------------------------------------

--
-- Table structure for table `dokumentasi`
--

CREATE TABLE `dokumentasi` (
  `id_dok` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokumentasi`
--

INSERT INTO `dokumentasi` (`id_dok`, `nama`, `link`) VALUES
(1, 'Sertijab & Bukber 2021', 'https://drive.google.com/drive/folders/1nzhNj7GVPiQom5NpLQt6X0epdaVJl1i7?usp=sharing'),
(3, 'Staycation', 'https://drive.google.com/drive/folders/1SM__Nde1xs2k_vpopH4mAEkGzeL50T0Y?usp=sharing'),
(14, 'Workshop Android 2020', 'https://drive.google.com/drive/folders/1Gg1x1NVmRWts7yBuhSJRKiW1kbWk65rZ?usp=sharing'),
(15, 'Workshop Web 2020', 'https://drive.google.com/drive/folders/1Vt3amXQbTZM7NwFiPcgT3r8YVAvjEQ60?usp=sharing'),
(16, 'Mabim & Makrab 2020', 'https://drive.google.com/drive/folders/1VLCKOxJzT0xYm_Yl77dPn7B-BoYBwEfy?usp=sharing');

-- --------------------------------------------------------

--
-- Table structure for table `dop`
--

CREATE TABLE `dop` (
  `id` int(11) NOT NULL,
  `bulan_tahun` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dop`
--

INSERT INTO `dop` (`id`, `bulan_tahun`, `status`) VALUES
(1, 'Mei 2021', 0),
(2, 'Juni 2021', 0),
(3, 'Juli 2021', 0),
(4, 'Agustus 2021', 0),
(5, 'September 2021', 0),
(6, 'Oktober 2021', 0),
(7, 'November 2021', 0),
(8, 'Desember 2021', 0),
(9, 'Januari 2022', 0),
(10, 'Februari 2022', 0),
(11, 'Maret 2022', 0),
(12, 'April 2022', 0);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `waktu` date NOT NULL,
  `sampai` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `kegiatan`, `waktu`, `sampai`) VALUES
(8, 'Sertijab & Bukber', '2021-04-30', '2021-04-30'),
(9, 'Rapat Bahas Proker', '2021-05-20', '2021-05-20'),
(10, 'Bersih-Bersih Sekre Himakom', '2021-05-27', '2021-05-27'),
(11, 'Rapat Bersama Move bahas staycation', '2021-05-29', '2021-05-29'),
(12, 'LKMK', '2021-05-30', '2021-05-30'),
(36, 'Makrab', '2021-06-16', '2021-06-17'),
(37, 'Persiapan Buat Makrab', '2021-06-14', '2021-06-15'),
(40, 'Pelatihan : Belajar GNS3', '2021-07-04', '2021-07-04'),
(43, 'martikulasi 2', '2021-08-30', '2021-08-30');

-- --------------------------------------------------------

--
-- Table structure for table `history_pembayaran`
--

CREATE TABLE `history_pembayaran` (
  `id_history` int(11) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_pembayaran`
--

INSERT INTO `history_pembayaran` (`id_history`, `deskripsi`, `tanggal`) VALUES
(44, 'Dafa Rofi Saefulloh Membayar Kas bulan Juni 2021 Minggu ke-4', '2021-10-25 04:23:28'),
(45, 'Dafa Rofi Saefulloh Membayar Kas bulan Juli 2021 Minggu ke-1', '2021-10-25 04:23:29'),
(46, 'Dera Akbar  Membayar Kas bulan Juni 2021 Minggu ke-2', '2021-10-25 04:23:32'),
(47, 'Dera Akbar  Membayar Kas bulan Juni 2021 Minggu ke-3', '2021-10-25 04:23:33'),
(48, 'Dera Akbar  Membayar Kas bulan Juni 2021 Minggu ke-4', '2021-10-25 04:23:34'),
(49, 'Dafa Rofi Saefulloh Membayar Kas bulan Juli 2021 Minggu ke-2', '2021-10-25 04:23:35'),
(50, 'Dara Febriani Iskandar Membayar Kas bulan Juni 2021 Minggu ke-4', '2021-10-25 04:23:36'),
(51, 'Dara Febriani Iskandar Membayar Kas bulan Juli 2021 Minggu ke-1', '2021-10-25 04:23:37'),
(52, 'Aldi Novriadi Membatalkan Pembayaran Kas bulan Juli 2021 Minggu ke-1', '2021-10-25 16:00:22'),
(53, 'Aldi Novriadi Membatalkan Pembayaran Kas bulan Juli 2021 Minggu ke-2', '2021-10-25 16:00:23'),
(54, 'Aldi Novriadi Membatalkan Pembayaran Kas bulan Juli 2021 Minggu ke-3', '2021-10-25 16:00:23'),
(55, 'Dafa Rofi Saefulloh Membatalkan Pembayaran Kas bulan Juli 2021 Minggu ke-2', '2021-10-25 16:00:24'),
(56, 'Dafa Rofi Saefulloh Membatalkan Pembayaran Kas bulan Juli 2021 Minggu ke-1', '2021-10-25 16:00:24'),
(57, 'Dara Febriani Iskandar Membatalkan Pembayaran Kas bulan Juli 2021 Minggu ke-1', '2021-10-25 16:00:25'),
(58, 'Fatah At Thariq Membayar Kas bulan Juni 2021 Minggu ke-3', '2021-10-25 16:00:28'),
(59, 'Fatah At Thariq Membayar Kas bulan Juni 2021 Minggu ke-4', '2021-10-25 16:00:32'),
(60, 'Aldi Novriadi Membayar Kas bulan Juli 2021 Minggu ke-1', '2021-10-25 16:02:21'),
(61, 'Aldi Novriadi Membayar Kas bulan Juli 2021 Minggu ke-2', '2021-10-25 16:02:21'),
(62, 'Aldi Novriadi Membayar Kas bulan Juli 2021 Minggu ke-3', '2021-10-25 16:02:22'),
(63, 'Aldi Novriadi Membayar Kas bulan Juli 2021 Minggu ke-4', '2021-10-25 16:02:23'),
(64, 'Celvin Zakaria Membayar Kas bulan Juli 2021 Minggu ke-1', '2021-10-25 16:02:23'),
(65, 'Celvin Zakaria Membayar Kas bulan Juli 2021 Minggu ke-2', '2021-10-25 16:02:24'),
(66, 'Celvin Zakaria Membayar Kas bulan Juli 2021 Minggu ke-3', '2021-10-25 16:02:25'),
(67, 'Celvin Zakaria Membayar Kas bulan Juli 2021 Minggu ke-4', '2021-10-25 16:02:25'),
(68, 'Dafa Rofi Saefulloh Membayar Kas bulan Juli 2021 Minggu ke-1', '2021-10-25 16:02:26'),
(69, 'Dafa Rofi Saefulloh Membayar Kas bulan Juli 2021 Minggu ke-2', '2021-10-25 16:02:27'),
(70, 'Dafa Rofi Saefulloh Membayar Kas bulan Juli 2021 Minggu ke-3', '2021-10-25 16:02:27'),
(71, 'Dafa Rofi Saefulloh Membayar Kas bulan Juli 2021 Minggu ke-4', '2021-10-25 16:02:28'),
(72, 'Dara Febriani Iskandar Membayar Kas bulan Juli 2021 Minggu ke-1', '2021-10-25 16:02:29'),
(73, 'Dara Febriani Iskandar Membayar Kas bulan Juli 2021 Minggu ke-2', '2021-10-25 16:02:29'),
(74, 'Dara Febriani Iskandar Membayar Kas bulan Juli 2021 Minggu ke-3', '2021-10-25 16:02:30'),
(75, 'Dara Febriani Iskandar Membayar Kas bulan Juli 2021 Minggu ke-4', '2021-10-25 16:02:30'),
(76, 'Dera Akbar  Membayar Kas bulan Juli 2021 Minggu ke-1', '2021-10-25 16:02:31'),
(77, 'Dera Akbar  Membayar Kas bulan Juli 2021 Minggu ke-2', '2021-10-25 16:02:32'),
(78, 'Dera Akbar  Membayar Kas bulan Juli 2021 Minggu ke-3', '2021-10-25 16:02:32'),
(79, 'Dera Akbar  Membayar Kas bulan Juli 2021 Minggu ke-4', '2021-10-25 16:02:33'),
(80, 'Fatah At Thariq Membayar Kas bulan Juli 2021 Minggu ke-1', '2021-10-25 16:02:34'),
(81, 'Fatah At Thariq Membayar Kas bulan Juli 2021 Minggu ke-2', '2021-10-25 16:02:34'),
(82, 'Fatah At Thariq Membayar Kas bulan Juli 2021 Minggu ke-3', '2021-10-25 16:02:35'),
(83, 'Fatah At Thariq Membayar Kas bulan Juli 2021 Minggu ke-4', '2021-10-25 16:02:36'),
(84, 'Aldi Novriadi Membayar Kas bulan September 2021 Minggu ke-1', '2021-10-25 16:02:37'),
(85, 'Aldi Novriadi Membayar Kas bulan September 2021 Minggu ke-2', '2021-10-25 16:02:39'),
(86, 'Celvin Zakaria Membayar Kas bulan September 2021 Minggu ke-1', '2021-10-25 16:02:40'),
(87, 'Dafa Rofi Saefulloh Membayar Kas bulan September 2021 Minggu ke-1', '2021-10-25 16:02:41'),
(88, 'Dara Febriani Iskandar Membayar Kas bulan September 2021 Minggu ke-1', '2021-10-25 16:02:44'),
(89, 'Celvin Zakaria Membatalkan Pembayaran Kas bulan September 2021 Minggu ke-1', '2021-10-25 16:02:45'),
(90, 'Fatah At Thariq Membayar Kas bulan September 2021 Minggu ke-1', '2021-10-25 16:02:47'),
(91, 'Aldi Novriadi Membayar Kas bulan September 2021 Minggu ke-3', '2021-10-25 16:03:50'),
(92, 'Celvin Zakaria Membayar Kas bulan September 2021 Minggu ke-1', '2021-10-25 16:03:51'),
(93, 'Celvin Zakaria Membayar Kas bulan September 2021 Minggu ke-2', '2021-10-25 16:03:51'),
(94, 'Celvin Zakaria Membayar Kas bulan September 2021 Minggu ke-3', '2021-10-25 16:03:52'),
(95, 'Dafa Rofi Saefulloh Membayar Kas bulan September 2021 Minggu ke-3', '2021-10-25 16:03:52'),
(96, 'Dafa Rofi Saefulloh Membayar Kas bulan September 2021 Minggu ke-2', '2021-10-25 16:03:53'),
(97, 'Dara Febriani Iskandar Membayar Kas bulan September 2021 Minggu ke-2', '2021-10-25 16:03:53'),
(98, 'Dera Akbar  Membayar Kas bulan September 2021 Minggu ke-3', '2021-10-25 16:03:55'),
(99, 'Dera Akbar  Membayar Kas bulan September 2021 Minggu ke-1', '2021-10-25 16:03:56'),
(100, 'Dara Febriani Iskandar Membayar Kas bulan September 2021 Minggu ke-3', '2021-10-25 16:03:57'),
(101, 'Dera Akbar  Membayar Kas bulan September 2021 Minggu ke-2', '2021-10-25 16:03:58');

-- --------------------------------------------------------

--
-- Table structure for table `pengambilan_uang`
--

CREATE TABLE `pengambilan_uang` (
  `id_pengambilan` int(11) NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jenis` enum('dop','kas') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `proker`
--

CREATE TABLE `proker` (
  `id_proker` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `deadline` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proker`
--

INSERT INTO `proker` (`id_proker`, `nama`, `deskripsi`, `deadline`) VALUES
(21, 'MI Day (Kompetisi)', 'Web Design, Poster Design, Short Movie, Photography, Programming, ICT Product', '2021-09-30 00:00:00'),
(22, 'Seminar Akbar', 'Seminar Tingkat Nasional', '2021-11-30 00:00:00'),
(23, 'Temu Kangen Alumni Hima (Mabim dan Makrab)', 'Semua Alumni Himakom, Himastmik, Move, Loop', '2021-11-30 00:00:00'),
(24, 'Sertijab Himakom Tahun 2022/2023', 'Seluruh pengurus himakom', '2022-02-28 00:00:00'),
(25, 'MI Esport', 'Baik seluruh\r\nmahasiswa\r\nmahasiswi ataupun\r\nsmk dan sma', '2021-11-30 00:00:00'),
(26, 'Mengikuti Kompetisi', 'Jika ada kompetisi wajib mengikutinya', '2022-02-28 00:00:00'),
(27, 'Workshop Eksternal', 'Seluruh mahasiswa prodi MI dan mahasiswa dari luar LPKIA', '2021-12-31 00:00:00'),
(28, 'Goes To School', 'Mengunjungi SMK atau SMA sederajat', '2022-01-31 00:00:00'),
(29, 'Goes To School', 'Mengunjungi SMK atau SMA sederajat', '2022-01-31 00:00:00'),
(30, 'Bakti Sosial', 'Mendonasi kepada yang membutuhkan', '2022-02-27 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id_tugas` int(11) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `deadline` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `waktu_kas`
--

CREATE TABLE `waktu_kas` (
  `id_waktu` int(11) NOT NULL,
  `bulan_tahun` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `waktu_kas`
--

INSERT INTO `waktu_kas` (`id_waktu`, `bulan_tahun`) VALUES
(1, 'Juni 2021'),
(2, 'Juli 2021'),
(3, 'Agustus 2021'),
(4, 'September 2021'),
(5, 'Oktober 2021'),
(6, 'November 2021'),
(7, 'Desember 2021'),
(8, 'Januari 2022'),
(9, 'Februari 2022'),
(10, 'Maret 2022');

--
-- Triggers `waktu_kas`
--
DELIMITER $$
CREATE TRIGGER `after_insert_waktu` AFTER INSERT ON `waktu_kas` FOR EACH ROW BEGIN	
declare x int;    
set x=1;    
while(x<=4) do    	
insert into detail_waktu VALUES(null,new.id_waktu,x);        
set x=x+1;    
end WHILE;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `id_divisi` (`id_divisi`);

--
-- Indexes for table `data_pembayaran`
--
ALTER TABLE `data_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_anggota` (`id_anggota`),
  ADD KEY `id_detail_waktu` (`id_detail_waktu`);

--
-- Indexes for table `detail_waktu`
--
ALTER TABLE `detail_waktu`
  ADD PRIMARY KEY (`id_detail_waktu`),
  ADD KEY `id_waktu` (`id_waktu`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD PRIMARY KEY (`id_dok`);

--
-- Indexes for table `dop`
--
ALTER TABLE `dop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `history_pembayaran`
--
ALTER TABLE `history_pembayaran`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `pengambilan_uang`
--
ALTER TABLE `pengambilan_uang`
  ADD PRIMARY KEY (`id_pengambilan`);

--
-- Indexes for table `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`id_proker`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id_tugas`);

--
-- Indexes for table `waktu_kas`
--
ALTER TABLE `waktu_kas`
  ADD PRIMARY KEY (`id_waktu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `data_pembayaran`
--
ALTER TABLE `data_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `detail_waktu`
--
ALTER TABLE `detail_waktu`
  MODIFY `id_detail_waktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  MODIFY `id_dok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `dop`
--
ALTER TABLE `dop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `history_pembayaran`
--
ALTER TABLE `history_pembayaran`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `pengambilan_uang`
--
ALTER TABLE `pengambilan_uang`
  MODIFY `id_pengambilan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `proker`
--
ALTER TABLE `proker`
  MODIFY `id_proker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `waktu_kas`
--
ALTER TABLE `waktu_kas`
  MODIFY `id_waktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `anggota_ibfk_1` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id_divisi`);

--
-- Constraints for table `data_pembayaran`
--
ALTER TABLE `data_pembayaran`
  ADD CONSTRAINT `data_pembayaran_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`) ON DELETE CASCADE,
  ADD CONSTRAINT `data_pembayaran_ibfk_2` FOREIGN KEY (`id_detail_waktu`) REFERENCES `detail_waktu` (`id_detail_waktu`) ON DELETE CASCADE;

--
-- Constraints for table `detail_waktu`
--
ALTER TABLE `detail_waktu`
  ADD CONSTRAINT `detail_waktu_ibfk_1` FOREIGN KEY (`id_waktu`) REFERENCES `waktu_kas` (`id_waktu`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
