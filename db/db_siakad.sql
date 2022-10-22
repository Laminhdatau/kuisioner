-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 23, 2022 at 01:01 AM
-- Server version: 5.7.39-0ubuntu0.18.04.2
-- PHP Version: 7.2.24-0ubuntu0.18.04.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siakad`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_answer`
--

CREATE TABLE `t_answer` (
  `id_answer` int(11) NOT NULL,
  `answer` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_answer`
--

INSERT INTO `t_answer` (`id_answer`, `answer`) VALUES
(1, 'Sangat Baik'),
(2, 'Baik'),
(3, 'Cukup'),
(4, 'Kurang');

-- --------------------------------------------------------

--
-- Table structure for table `t_answer_quisioner`
--

CREATE TABLE `t_answer_quisioner` (
  `kd_answer_quisioner` varchar(255) NOT NULL COMMENT 'UUID',
  `nim` varchar(15) NOT NULL,
  `kd_mk` int(11) NOT NULL,
  `nipy` varchar(255) NOT NULL,
  `kd_quisioner` varchar(255) NOT NULL,
  `id_answer` int(11) NOT NULL,
  `comments` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_answer_quisioner`
--

INSERT INTO `t_answer_quisioner` (`kd_answer_quisioner`, `nim`, `kd_mk`, `nipy`, `kd_quisioner`, `id_answer`, `comments`, `waktu`) VALUES
('2112wsxssdfcdfdsfff', '20501049', 1, '121211', '0a090997-3f24-11ed-84af-3c0c898d271c', 1, 'sangat memuaskan kita', '2022-10-04 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `t_dosen_pengampu`
--

CREATE TABLE `t_dosen_pengampu` (
  `nipy` varchar(25) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_dosen_pengampu`
--

INSERT INTO `t_dosen_pengampu` (`nipy`, `nama_dosen`) VALUES
('121211', 'Saiful Bahri Musa'),
('121212', 'Ismail Mohidin'),
('121213', 'Alimudin'),
('121214', 'fajar hermawanto'),
('121215', 'Salman Suleman'),
('121216', 'Irwan Karim'),
('121217', 'Saprina mamase'),
('121218', 'Nursetya'),
('121219', 'Zainudin husain'),
('121220', 'Franky Tupamahu');

-- --------------------------------------------------------

--
-- Table structure for table `t_jenis_quisioner`
--

CREATE TABLE `t_jenis_quisioner` (
  `id_jenis_quisioner` int(11) NOT NULL,
  `jenis_quisioner` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_jenis_quisioner`
--

INSERT INTO `t_jenis_quisioner` (`id_jenis_quisioner`, `jenis_quisioner`) VALUES
(1, 'Pengajaran Dosen'),
(2, 'Evaluasi Mata Kuliah(IPM)');

-- --------------------------------------------------------

--
-- Table structure for table `t_mahasiswa`
--

CREATE TABLE `t_mahasiswa` (
  `nim` varchar(15) NOT NULL,
  `nama` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_mahasiswa`
--

INSERT INTO `t_mahasiswa` (`nim`, `nama`) VALUES
('20501049', 'Lamin H. Datau'),
('20501050', 'Marno Biki');

-- --------------------------------------------------------

--
-- Table structure for table `t_mk`
--

CREATE TABLE `t_mk` (
  `kd_mk` int(255) NOT NULL,
  `mk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_mk`
--

INSERT INTO `t_mk` (`kd_mk`, `mk`) VALUES
(1, 'Framework'),
(2, 'Mobile');

-- --------------------------------------------------------

--
-- Table structure for table `t_quisioner`
--

CREATE TABLE `t_quisioner` (
  `kd_quisioner` varchar(255) NOT NULL COMMENT 'UUID',
  `quisioner` text NOT NULL,
  `id_jenis_quisioner` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created_up` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_quisioner`
--

INSERT INTO `t_quisioner` (`kd_quisioner`, `quisioner`, `id_jenis_quisioner`, `status`, `created_up`) VALUES
('05d73bdf-3f26-11ed-84af-3c0c898d271c', 'Apakah capaian pembelajaran /learning outcome dijelaskan pada setiap pergantian tahap kuliah?', 2, '1', '2022-10-16 06:10:05'),
('0a090997-3f24-11ed-84af-3c0c898d271c', 'Apakah rencana pembelajaran(rp) dapat diakses dari laman resmi prodi atau di dalam classroom?', 2, '1', '2022-09-28 11:52:33'),
('181d72e3-3f26-11ed-84af-3c0c898d271c', 'Apakah pembelajaran scl digunakan? Yaitu mahasiswa diberi kesempatan luas dalam menentukan pembelajaran mandiri.', 2, '1', '2022-10-16 04:04:17'),
('35151377-3f26-11ed-84af-3c0c898d271c', 'Bagaimana kesesuaian sumber belajar yang digunakan mendukung capaian pembelajaran mk?', 2, '1', '2022-09-28 12:08:05'),
('41efb8f2-3f26-11ed-84af-3c0c898d271c', 'Bagaimana kesesuaian waktu untuk mengerjakan tugas dengan beban sks MK?', 2, '1', '2022-09-28 12:08:26'),
('4dfe87ef-3f26-11ed-84af-3c0c898d271c', 'Bagaimana kesesuaian jenis test / ujian / asesmen lain dengan pemenuhan capaian pembelajaran ?', 2, '1', '2022-09-28 12:08:46'),
('5c568fa6-3f26-11ed-84af-3c0c898d271c', 'Bagaimana dosen memberikan umpan balik untuk hasil asesmen?', 2, '1', '2022-09-28 12:09:10'),
('61bb93f6-4306-11ed-8915-38ca736f2629', 'Dosen menyediakan bahan ajar sesuai dengan bahan kajian mata kuliah dalam median online dan/atau offline', 1, '1', '2022-10-03 10:51:23'),
('6eeb97ef-3f26-11ed-84af-3c0c898d271c', 'Apakah dosen melakukan remidi untuk perbaikan hasil asessmen?', 2, '1', '2022-09-28 12:09:42'),
('8076abdb-3f23-11ed-84af-3c0c898d271c', 'Dosen memberi motivasi kepada mahasiswa untuk belajar lebih lanjut secara mandiri, dengan media online dan/atau offline', 1, '1', '2022-09-28 11:48:43'),
('926519c1-3f23-11ed-84af-3c0c898d271c', 'Dosen mampu berinteraksi secara aktif untuk mendapatkan hasil maksimal dalam pembelajaran, melalui media online dan/atau offline', 1, '1', '2022-09-28 11:49:13'),
('a1ac0d8f-3f23-11ed-84af-3c0c898d271c', 'Dosen menggunakan alokasi waktu sesuai dengan sks saat berinteraksi dengan mahasiswa, baik secara onlinedan /atau offline', 1, '1', '2022-09-28 11:49:38'),
('ad262863-3f23-11ed-84af-3c0c898d271c', 'Dosen memberikan tes/tugas/bentuk asesmen yang lain sesuai dengan tujuan pembelajaran yang telah ditetapkan', 1, '1', '2022-09-28 11:49:57'),
('c61c3eca-3f23-11ed-84af-3c0c898d271c', 'Dosen memberikan tugas yang terkait dengan praktek keprofesionalan setelah lulus', 1, '1', '2022-09-28 11:50:39'),
('cfa16057-3f23-11ed-84af-3c0c898d271c', 'Dosen memberikan tugas untuk meningkatkan kemampuan bekerja secara kelompok dengan menggunakan media online dan/atau offline', 1, '1', '2022-09-28 11:50:55'),
('d9bf4073-3ff4-11ed-81ae-503eaa456e2a', 'Dosen mempunyai persepsi positif atas kemampuan mahasiswa saat berinteraksi secara online dan/atau offline', 1, '1', '2022-10-16 04:03:47'),
('dbfdf2f4-3f23-11ed-84af-3c0c898d271c', 'Dosen membantu mahasiswa untuk meningkatkan rasa percaya diri, melalui media online dan/ atau offline', 1, '1', '2022-09-28 11:51:16'),
('ec292fcd-3f22-11ed-84af-3c0c898d271c', 'Dosen mampu meningkatkan kemampuan mahasiswa untuk mencapai capaian pembelajaran', 1, '1', '2022-09-28 11:44:34'),
('f3695c85-3f23-11ed-84af-3c0c898d271c', 'Apakah rencana pembelajaran(rp) dijelaskan di awal perkuliahan?', 2, '1', '2022-09-28 11:51:55'),
('f6837816-3f25-11ed-84af-3c0c898d271c', 'Apakah Rencana Tugas(RT) dan/Rencana Asesmen dan Evaluasi(RAE), disampaikan di dalam perkuliahan dan dapat diakses dari laman resmi prodi/classroom?', 2, '1', '2022-10-03 10:59:39');

-- --------------------------------------------------------

--
-- Table structure for table `t_role`
--

CREATE TABLE `t_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_role`
--

INSERT INTO `t_role` (`id`, `role`) VALUES
(1, 'direktur'),
(2, 'mahasiswa'),
(3, 'upm'),
(4, 'admin prodi'),
(5, 'dosen pengampu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_answer`
--
ALTER TABLE `t_answer`
  ADD PRIMARY KEY (`id_answer`);

--
-- Indexes for table `t_answer_quisioner`
--
ALTER TABLE `t_answer_quisioner`
  ADD PRIMARY KEY (`kd_answer_quisioner`),
  ADD KEY `kd_soal_quisioner` (`kd_quisioner`),
  ADD KEY `id_answer` (`id_answer`),
  ADD KEY `nim` (`nim`),
  ADD KEY `kd_dosen_pengampu` (`nipy`),
  ADD KEY `kd_mk` (`kd_mk`);

--
-- Indexes for table `t_dosen_pengampu`
--
ALTER TABLE `t_dosen_pengampu`
  ADD PRIMARY KEY (`nipy`);

--
-- Indexes for table `t_jenis_quisioner`
--
ALTER TABLE `t_jenis_quisioner`
  ADD PRIMARY KEY (`id_jenis_quisioner`);

--
-- Indexes for table `t_mahasiswa`
--
ALTER TABLE `t_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `t_mk`
--
ALTER TABLE `t_mk`
  ADD PRIMARY KEY (`kd_mk`);

--
-- Indexes for table `t_quisioner`
--
ALTER TABLE `t_quisioner`
  ADD PRIMARY KEY (`kd_quisioner`),
  ADD KEY `id_jenis_quisioner` (`id_jenis_quisioner`);

--
-- Indexes for table `t_role`
--
ALTER TABLE `t_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_answer`
--
ALTER TABLE `t_answer`
  MODIFY `id_answer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_mk`
--
ALTER TABLE `t_mk`
  MODIFY `kd_mk` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `t_role`
--
ALTER TABLE `t_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_answer_quisioner`
--
ALTER TABLE `t_answer_quisioner`
  ADD CONSTRAINT `t_answer_quisioner_ibfk_1` FOREIGN KEY (`id_answer`) REFERENCES `t_answer` (`id_answer`) ON UPDATE CASCADE,
  ADD CONSTRAINT `t_answer_quisioner_ibfk_2` FOREIGN KEY (`kd_quisioner`) REFERENCES `t_quisioner` (`kd_quisioner`) ON UPDATE CASCADE,
  ADD CONSTRAINT `t_answer_quisioner_ibfk_3` FOREIGN KEY (`nim`) REFERENCES `t_mahasiswa` (`nim`) ON UPDATE CASCADE,
  ADD CONSTRAINT `t_answer_quisioner_ibfk_5` FOREIGN KEY (`kd_mk`) REFERENCES `t_mk` (`kd_mk`) ON UPDATE CASCADE,
  ADD CONSTRAINT `t_answer_quisioner_ibfk_6` FOREIGN KEY (`nipy`) REFERENCES `t_dosen_pengampu` (`nipy`);

--
-- Constraints for table `t_quisioner`
--
ALTER TABLE `t_quisioner`
  ADD CONSTRAINT `t_quisioner_ibfk_1` FOREIGN KEY (`id_jenis_quisioner`) REFERENCES `t_jenis_quisioner` (`id_jenis_quisioner`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
