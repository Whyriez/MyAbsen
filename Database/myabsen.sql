-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 03, 2024 at 02:21 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myabsen`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_absen10rpl1`
--

CREATE TABLE `data_absen10rpl1` (
  `id_absen10rpl1` int NOT NULL,
  `tanggal` datetime NOT NULL,
  `id_siswarpl` int NOT NULL,
  `gambar` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(5) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_absen10rpl1`
--

INSERT INTO `data_absen10rpl1` (`id_absen10rpl1`, `tanggal`, `id_siswarpl`, `gambar`, `keterangan`) VALUES
(1, '2022-03-16 20:57:17', 16, 'pic-421.png', 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `data_absen10rpl2`
--

CREATE TABLE `data_absen10rpl2` (
  `id_absen10rpl2` int NOT NULL,
  `tanggal` datetime NOT NULL,
  `id_siswarpl` int NOT NULL,
  `gambar` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(5) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_absen10rpl2`
--

INSERT INTO `data_absen10rpl2` (`id_absen10rpl2`, `tanggal`, `id_siswarpl`, `gambar`, `keterangan`) VALUES
(1, '2022-03-16 20:46:45', 17, 'pic-418.png', 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `data_absen10rpl3`
--

CREATE TABLE `data_absen10rpl3` (
  `id_absen10rpl3` int NOT NULL,
  `tanggal` datetime NOT NULL,
  `id_siswarpl` int NOT NULL,
  `gambar` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(5) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_absen10rpl3`
--

INSERT INTO `data_absen10rpl3` (`id_absen10rpl3`, `tanggal`, `id_siswarpl`, `gambar`, `keterangan`) VALUES
(1, '2022-03-16 20:42:50', 16, 'pic-415.png', 'Hadir'),
(2, '2022-03-16 20:44:24', 16, 'pic-416.png', 'Hadir'),
(3, '2022-03-16 20:46:08', 16, 'pic-417.png', 'Hadir'),
(4, '2022-03-16 20:47:08', 18, 'pic-34.png', 'Hadir'),
(5, '2022-03-16 20:47:33', 16, 'pic-419.png', 'Hadir'),
(6, '2022-03-16 20:55:03', 16, 'pic-420.png', 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `data_absen11rpl1`
--

CREATE TABLE `data_absen11rpl1` (
  `id_absen11rpl1` int NOT NULL,
  `tanggal` datetime NOT NULL,
  `id_siswarpl` int NOT NULL,
  `gambar` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(5) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_absen11rpl1`
--

INSERT INTO `data_absen11rpl1` (`id_absen11rpl1`, `tanggal`, `id_siswarpl`, `gambar`, `keterangan`) VALUES
(1, '2022-03-16 20:41:23', 7, 'pic-32.png', 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `data_absen11rpl2`
--

CREATE TABLE `data_absen11rpl2` (
  `id_absen11rpl2` int NOT NULL,
  `tanggal` datetime NOT NULL,
  `id_siswarpl` int NOT NULL,
  `gambar` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(5) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_absen11rpl2`
--

INSERT INTO `data_absen11rpl2` (`id_absen11rpl2`, `tanggal`, `id_siswarpl`, `gambar`, `keterangan`) VALUES
(1, '2022-03-16 20:41:54', 14, 'pic-33.png', 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `data_absen11rpl3`
--

CREATE TABLE `data_absen11rpl3` (
  `id_absen11rpl3` int NOT NULL,
  `tanggal` datetime NOT NULL,
  `id_siswarpl` int NOT NULL,
  `gambar` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(5) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_absen11rpl3`
--

INSERT INTO `data_absen11rpl3` (`id_absen11rpl3`, `tanggal`, `id_siswarpl`, `gambar`, `keterangan`) VALUES
(1, '2022-03-16 20:42:25', 15, 'pic-414.png', 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `data_absen12rpl1`
--

CREATE TABLE `data_absen12rpl1` (
  `id_absenrpl` int NOT NULL,
  `tanggal` datetime NOT NULL,
  `id_siswarpl` int NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `keterangan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_absen12rpl1`
--

INSERT INTO `data_absen12rpl1` (`id_absenrpl`, `tanggal`, `id_siswarpl`, `gambar`, `keterangan`) VALUES
(1, '2022-03-15 00:00:00', 3, 'pic-3.png', 'Hadir'),
(2, '2022-03-15 00:00:00', 3, 'pic-4.png', 'Izin'),
(3, '2022-03-15 00:00:00', 6, 'pic-41.png', 'Hadir'),
(4, '2022-03-15 00:00:00', 4, 'pic-1.png', 'Hadir'),
(5, '2022-03-16 00:00:00', 6, 'pic-43.png', 'Hadir'),
(6, '2022-03-16 00:00:00', 11, 'pic-31.png', 'Izin'),
(7, '2022-03-16 00:00:00', 10, 'pic-44.png', 'Hadir'),
(10, '0000-00-00 00:00:00', 11, 'pic-47.png', 'Hadir'),
(11, '2022-03-16 09:50:30', 6, 'pic-48.png', 'Sakit'),
(12, '2022-03-16 09:55:05', 6, 'pic-49.png', 'Hadir'),
(13, '2022-03-16 16:59:29', 11, 'pic-410.png', 'Hadir'),
(14, '2022-03-16 18:11:56', 6, 'pic-411.png', 'Izin');

-- --------------------------------------------------------

--
-- Table structure for table `data_absen12rpl2`
--

CREATE TABLE `data_absen12rpl2` (
  `id_absen` int NOT NULL,
  `tanggal` datetime NOT NULL,
  `id_siswarpl` int NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `keterangan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_absen12rpl2`
--

INSERT INTO `data_absen12rpl2` (`id_absen`, `tanggal`, `id_siswarpl`, `gambar`, `keterangan`) VALUES
(1, '2022-03-16 20:38:46', 3, 'pic-413.png', 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `data_absenmm`
--

CREATE TABLE `data_absenmm` (
  `id_absenmm` int NOT NULL,
  `tanggal` date NOT NULL,
  `id_siswamm` int NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `keterangan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_absentkj`
--

CREATE TABLE `data_absentkj` (
  `id_absentkj` int NOT NULL,
  `tanggal` date NOT NULL,
  `id_siswatkj` int NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `keterangan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id` int NOT NULL,
  `id_jurusan` int NOT NULL,
  `nama_jurusan` varchar(40) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id`, `id_jurusan`, `nama_jurusan`) VALUES
(1, 1, 'RPL'),
(2, 2, 'TKJ'),
(3, 3, 'MM');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas_mm`
--

CREATE TABLE `tb_kelas_mm` (
  `id_kelasmm` int NOT NULL,
  `keju` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas_rpl`
--

CREATE TABLE `tb_kelas_rpl` (
  `id_kelasrpl` int NOT NULL,
  `keju` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas_rpl`
--

INSERT INTO `tb_kelas_rpl` (`id_kelasrpl`, `keju`) VALUES
(1, 'XII RPL 1'),
(2, 'XII RPL 2'),
(3, 'XI RPL 1'),
(4, 'XI RPL 2'),
(5, 'XI RPL 3'),
(6, 'X RPL 1'),
(7, 'X RPL 2'),
(8, 'X RPL 3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas_tkj`
--

CREATE TABLE `tb_kelas_tkj` (
  `id_kelastkj` int NOT NULL,
  `keju` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas_tkj`
--

INSERT INTO `tb_kelas_tkj` (`id_kelastkj`, `keju`) VALUES
(2, 'XI TKJ 2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int NOT NULL,
  `nama_siswa` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `keju_siswa` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nama_siswa`, `keju_siswa`) VALUES
(2, 'Moh Sidiq Rauf', 'XII RPL 2'),
(3, 'Moh Rizki Akurama', 'XII RPL 2'),
(4, 'Jamal Hasan', 'XII RPL 2'),
(5, 'Moh Fahri Piloto', 'XII RPL 2'),
(6, 'Utiarahman Podungge', 'XII RPL 2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa_mm`
--

CREATE TABLE `tb_siswa_mm` (
  `id_mm` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa_rpl`
--

CREATE TABLE `tb_siswa_rpl` (
  `id` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa_rpl`
--

INSERT INTO `tb_siswa_rpl` (`id`, `nama`, `kelas`) VALUES
(3, 'Nur Alim M Suma', 2),
(4, 'Moh Sidiq Rauf', 2),
(5, 'Jamaludin Hasan', 2),
(6, 'Rosman Apriyanto Gani', 1),
(7, 'alims', 3),
(9, '24qarset44', 5),
(10, 'Fajri', 1),
(11, 'Fahri', 1),
(12, 'eggg', 3),
(14, 'Joko', 4),
(15, 'Adi', 5),
(16, 'Erni', 6),
(17, 'Dita', 7),
(18, 'Jihan', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa_tkj`
--

CREATE TABLE `tb_siswa_tkj` (
  `id_tkj` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int NOT NULL,
  `id_jurusan` int NOT NULL,
  `id_kelasrpl` int NOT NULL,
  `id_kelastkj` int NOT NULL,
  `id_kelasmm` int NOT NULL,
  `is_active` int NOT NULL,
  `date_created` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `id_jurusan`, `id_kelasrpl`, `id_kelastkj`, `id_kelasmm`, `is_active`, `date_created`) VALUES
(2, 'whyrez', 'siswa12rpl2@gmail.com', 'pic-43.png', '$2y$10$ISpexvfSLB47qItJoLfrfO493UZ9sQxTmDIfJw3LqCG3ZTjnmaDAK', 3, 0, 2, 0, 0, 1, 1619009670),
(3, 'erwe', 'adminrpl@gmail.com', 'pic-43.jpg', '$2y$10$JPdDvJECHClJ4CFx3pa/6ezMCl6hk0Z0z6uAqF7ogOEgCWBzX1RnW', 1, 1, 0, 0, 0, 1, 1647245801),
(4, 'Alim', 'siswa12rpl1@gmail.com', 'pic-3.png', '$2y$10$6N4O8wldpI1Nto3A4IbX7Oxl7QdxltHutRJsIiq2Mz5SMmUiSEPxe', 3, 0, 1, 0, 0, 1, 1647246046),
(5, 'sila', 'admintkj@gmail.com', 'default.jpg', '$2y$10$1CL7QD.i7fYT5ygWyGQkwu25kwVia/o68BliPStl4Z5gl87QpDne6', 1, 2, 0, 0, 0, 1, 1647318986),
(6, 'multi', 'adminmm@gmail.com', 'default.jpg', '$2y$10$4CTSPKYAkmgplxYkIDGBcex0d2zixHBRYuHkMtXyjpFC1g8zB9PaS', 1, 3, 0, 0, 0, 1, 1647333293),
(7, 'erwe1', 'siswatkj@gmail.com', 'default.jpg', '$2y$10$XpLygcckHqD0jwHbLZ/F0u5kcnSMdAjv6HeyT/dEmEKuT5MMwFsd.', 3, 0, 0, 1, 0, 1, 1647344124),
(8, 'alimsuma', 'siswamm@gmail.com', 'default.jpg', '$2y$10$hRiockxH9wpuNVcty2jMouzGmyPz9kpa34hvXHjYTkQQFpfKkk7MG', 3, 0, 0, 0, 1, 1, 1647344157),
(11, 'bebas', 'siswa11rpl2@gmail.com', 'pic-44.png', '$2y$10$dchCQwPq4rUlRmTdveBcOeA.vYImVaANcue1qZfmcbTh/4Lcsjmhy', 3, 0, 4, 0, 0, 1, 1647430243),
(12, 'bebas', 'siswa11rpl3@gmail.com', 'pic-45.png', '$2y$10$hDXLYCs3JG.1/hhxNS/iN.HpT/0OX7oq2W29wvmdQccmsu1R4/HZG', 3, 0, 5, 0, 0, 1, 1647430398),
(13, 'ejje', 'siswa10rpl1@gmail.com', 'pic-32.png', '$2y$10$41IjCusdsf7XUKFOOrSp2ecSBLMsjzaJztTk8PCDybc5qsq4P0sMy', 3, 0, 6, 0, 0, 1, 1647430444),
(14, 'gerr', 'siswa10rpl2@gmail.com', 'pic-2.png', '$2y$10$WEjp.KgkrvGorud/rnvD5.Cm9S9MjEibh1wsfFQbbLdpiU1/R1fqe', 3, 0, 7, 0, 0, 1, 1647430477),
(15, 'hauu', 'siswa10rpl3@gmail.com', 'pic-13.png', '$2y$10$mxJbz1zgs0dkdLDxN2ba3uGEynmUUd6s.vyAc40JayZASZY2wY.4W', 3, 0, 8, 0, 0, 1, 1647430516),
(16, 'sila', 'siswa11rpl1@gmail.com', 'pic-21.png', '$2y$10$vNK9pXzOkhqECZXECndTw.SxdzqfWkq6cMpiuUr3fBfiiH6Tanlam', 3, 0, 3, 0, 0, 1, 1647430847),
(17, 'admin', 'admin@gmail.com', 'pic-46.png', '$2y$10$9ndG0whei8wCABIMYSyK5eGpzrmtvEekAL4POj1EBlAOQA2VGLaV2', 1, 1, 0, 0, 0, 1, 1647439158);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'guru'),
(3, 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_absen10rpl1`
--
ALTER TABLE `data_absen10rpl1`
  ADD PRIMARY KEY (`id_absen10rpl1`);

--
-- Indexes for table `data_absen10rpl2`
--
ALTER TABLE `data_absen10rpl2`
  ADD PRIMARY KEY (`id_absen10rpl2`);

--
-- Indexes for table `data_absen10rpl3`
--
ALTER TABLE `data_absen10rpl3`
  ADD PRIMARY KEY (`id_absen10rpl3`);

--
-- Indexes for table `data_absen11rpl1`
--
ALTER TABLE `data_absen11rpl1`
  ADD PRIMARY KEY (`id_absen11rpl1`);

--
-- Indexes for table `data_absen11rpl2`
--
ALTER TABLE `data_absen11rpl2`
  ADD PRIMARY KEY (`id_absen11rpl2`);

--
-- Indexes for table `data_absen11rpl3`
--
ALTER TABLE `data_absen11rpl3`
  ADD PRIMARY KEY (`id_absen11rpl3`);

--
-- Indexes for table `data_absen12rpl1`
--
ALTER TABLE `data_absen12rpl1`
  ADD PRIMARY KEY (`id_absenrpl`);

--
-- Indexes for table `data_absen12rpl2`
--
ALTER TABLE `data_absen12rpl2`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `data_absenmm`
--
ALTER TABLE `data_absenmm`
  ADD PRIMARY KEY (`id_absenmm`);

--
-- Indexes for table `data_absentkj`
--
ALTER TABLE `data_absentkj`
  ADD PRIMARY KEY (`id_absentkj`);

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kelas_mm`
--
ALTER TABLE `tb_kelas_mm`
  ADD PRIMARY KEY (`id_kelasmm`);

--
-- Indexes for table `tb_kelas_rpl`
--
ALTER TABLE `tb_kelas_rpl`
  ADD PRIMARY KEY (`id_kelasrpl`);

--
-- Indexes for table `tb_kelas_tkj`
--
ALTER TABLE `tb_kelas_tkj`
  ADD PRIMARY KEY (`id_kelastkj`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tb_siswa_mm`
--
ALTER TABLE `tb_siswa_mm`
  ADD PRIMARY KEY (`id_mm`);

--
-- Indexes for table `tb_siswa_rpl`
--
ALTER TABLE `tb_siswa_rpl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_siswa_tkj`
--
ALTER TABLE `tb_siswa_tkj`
  ADD PRIMARY KEY (`id_tkj`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_absen10rpl1`
--
ALTER TABLE `data_absen10rpl1`
  MODIFY `id_absen10rpl1` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_absen10rpl2`
--
ALTER TABLE `data_absen10rpl2`
  MODIFY `id_absen10rpl2` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_absen10rpl3`
--
ALTER TABLE `data_absen10rpl3`
  MODIFY `id_absen10rpl3` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_absen11rpl1`
--
ALTER TABLE `data_absen11rpl1`
  MODIFY `id_absen11rpl1` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_absen11rpl2`
--
ALTER TABLE `data_absen11rpl2`
  MODIFY `id_absen11rpl2` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_absen11rpl3`
--
ALTER TABLE `data_absen11rpl3`
  MODIFY `id_absen11rpl3` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_absen12rpl1`
--
ALTER TABLE `data_absen12rpl1`
  MODIFY `id_absenrpl` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `data_absen12rpl2`
--
ALTER TABLE `data_absen12rpl2`
  MODIFY `id_absen` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_absenmm`
--
ALTER TABLE `data_absenmm`
  MODIFY `id_absenmm` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_absentkj`
--
ALTER TABLE `data_absentkj`
  MODIFY `id_absentkj` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_kelas_mm`
--
ALTER TABLE `tb_kelas_mm`
  MODIFY `id_kelasmm` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kelas_rpl`
--
ALTER TABLE `tb_kelas_rpl`
  MODIFY `id_kelasrpl` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_kelas_tkj`
--
ALTER TABLE `tb_kelas_tkj`
  MODIFY `id_kelastkj` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_siswa_mm`
--
ALTER TABLE `tb_siswa_mm`
  MODIFY `id_mm` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_siswa_rpl`
--
ALTER TABLE `tb_siswa_rpl`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
