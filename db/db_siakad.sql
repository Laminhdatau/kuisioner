-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 26, 2022 at 07:03 PM
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
  `kd_quisioner` varchar(255) NOT NULL,
  `id_answer` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_answer_quisioner`
--

INSERT INTO `t_answer_quisioner` (`kd_answer_quisioner`, `kd_quisioner`, `id_answer`, `waktu`) VALUES
('asqesds', '4dfe87ef-3f26-11ed-84af-3c0c898d271c', 3, '2022-10-25 15:53:11'),
('sasasa', '0a090997-3f24-11ed-84af-3c0c898d271c', 1, '2022-09-30 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `t_comments`
--

CREATE TABLE `t_comments` (
  `kd_comments` varchar(255) NOT NULL COMMENT 'UUID',
  `jenis_comments` enum('Dosen','Mata Kuliah') NOT NULL,
  `comments` text NOT NULL,
  `nipy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Table structure for table `t_kelas`
--

CREATE TABLE `t_kelas` (
  `kd_kelas` varchar(255) NOT NULL COMMENT 'UUID()',
  `kelas` varchar(25) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `sub` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(2, 'wadir 1'),
(3, 'kaprodi'),
(4, 'dosen'),
(5, 'mahasiswa'),
(6, 'upm');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id`, `username`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(2, 'saiful', '4eeccab0e8c08e16a1d08296265e38fa', 3, 1, 24072001),
(3, 'lamin', 'a2e83cbe02697493b0add6f15667789a', 5, 1, 24072001);

-- --------------------------------------------------------

--
-- Table structure for table `t_user_access_menu`
--

CREATE TABLE `t_user_access_menu` (
  `id_acces_menu` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_user_access_menu`
--

INSERT INTO `t_user_access_menu` (`id_acces_menu`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `t_user_menu`
--

CREATE TABLE `t_user_menu` (
  `menu_id` int(11) NOT NULL,
  `menu` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_user_menu`
--

INSERT INTO `t_user_menu` (`menu_id`, `menu`) VALUES
(1, 'Direktur'),
(4, 'Dosen'),
(5, 'Mahasiswa'),
(3, 'Prodi'),
(2, 'Wadir 1');

-- --------------------------------------------------------

--
-- Table structure for table `t_user_sub_menu`
--

CREATE TABLE `t_user_sub_menu` (
  `id_user_sub_menu` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(120) NOT NULL,
  `url` varchar(120) NOT NULL,
  `d_down` varchar(255) NOT NULL,
  `icon` varchar(120) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_user_sub_menu`
--

INSERT INTO `t_user_sub_menu` (`id_user_sub_menu`, `menu_id`, `title`, `url`, `d_down`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', '', '', 'fa fa-home fa-fw', 1),
(2, 1, 'Kuisioner Mata Kuliah', 'backend/quismatakuliah', '', 'fa fa-table fa-fw', 1),
(3, 2, 'Kuisioner Mata Kuliah', 'quisioner/getquismk', '', 'fa fa-fw fa-table', 1),
(4, 1, 'Kuisioner Dosen', 'backend/quisdosen', '', 'fa fa-fw fa-edit', 1),
(5, 1, 'Response Mahasiswa', 'backend/answerquisioner', '', 'fa fa-fw fa-group', 1),
(6, 1, 'Options', 'backend/getanswer', '', 'fa fa-fw fa-check-circle', 1),
(7, 1, 'Jenis Kuisioner', 'backend/getjenis', '', 'fa fa-fw fa-retweet', 1),
(8, 2, 'Kuisioner Dosen', 'quisioner/', '', 'fa fa-fw fa-user', 1);

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
  ADD KEY `id_answer` (`id_answer`);

--
-- Indexes for table `t_comments`
--
ALTER TABLE `t_comments`
  ADD KEY `nipy` (`nipy`);

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
-- Indexes for table `t_kelas`
--
ALTER TABLE `t_kelas`
  ADD PRIMARY KEY (`kd_kelas`);

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
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `nip/nipy` (`username`);

--
-- Indexes for table `t_user_access_menu`
--
ALTER TABLE `t_user_access_menu`
  ADD KEY `menu_id` (`menu_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `t_user_menu`
--
ALTER TABLE `t_user_menu`
  ADD PRIMARY KEY (`menu_id`),
  ADD UNIQUE KEY `menu` (`menu`);

--
-- Indexes for table `t_user_sub_menu`
--
ALTER TABLE `t_user_sub_menu`
  ADD PRIMARY KEY (`id_user_sub_menu`),
  ADD KEY `menu_id` (`menu_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_user_menu`
--
ALTER TABLE `t_user_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `t_user_sub_menu`
--
ALTER TABLE `t_user_sub_menu`
  MODIFY `id_user_sub_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_answer_quisioner`
--
ALTER TABLE `t_answer_quisioner`
  ADD CONSTRAINT `t_answer_quisioner_ibfk_1` FOREIGN KEY (`kd_quisioner`) REFERENCES `t_quisioner` (`kd_quisioner`) ON UPDATE CASCADE,
  ADD CONSTRAINT `t_answer_quisioner_ibfk_2` FOREIGN KEY (`id_answer`) REFERENCES `t_answer` (`id_answer`) ON UPDATE CASCADE;

--
-- Constraints for table `t_comments`
--
ALTER TABLE `t_comments`
  ADD CONSTRAINT `t_comments_ibfk_1` FOREIGN KEY (`nipy`) REFERENCES `t_dosen_pengampu` (`nipy`) ON UPDATE CASCADE;

--
-- Constraints for table `t_quisioner`
--
ALTER TABLE `t_quisioner`
  ADD CONSTRAINT `t_quisioner_ibfk_1` FOREIGN KEY (`id_jenis_quisioner`) REFERENCES `t_jenis_quisioner` (`id_jenis_quisioner`) ON UPDATE CASCADE;

--
-- Constraints for table `t_user`
--
ALTER TABLE `t_user`
  ADD CONSTRAINT `t_user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `t_role` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `t_user_access_menu`
--
ALTER TABLE `t_user_access_menu`
  ADD CONSTRAINT `t_user_access_menu_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `t_user_menu` (`menu_id`),
  ADD CONSTRAINT `t_user_access_menu_ibfk_3` FOREIGN KEY (`role_id`) REFERENCES `t_role` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `t_user_sub_menu`
--
ALTER TABLE `t_user_sub_menu`
  ADD CONSTRAINT `t_user_sub_menu_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `t_user_menu` (`menu_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
