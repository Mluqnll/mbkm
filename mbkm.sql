-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 12, 2023 at 10:29 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mbkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(50) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `program_studi` varchar(255) DEFAULT NULL,
  `nomor_hp` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `program_studi`, `nomor_hp`, `created_at`, `updated_at`) VALUES
('3042021050', 'diqi', 'TI', '0843174183174', '2023-07-12 15:09:09', '2023-07-12 15:09:09'),
('3042021051', 'dimas', 'TI', '2637568465', '2023-07-12 01:08:44', '2023-07-12 01:08:44'),
('3042021052', 'muhammad', 'TI', '4718347214', '2023-07-12 15:08:01', '2023-07-12 15:08:01'),
('3042021053', 'luqinul', 'TI', '0843174183174', '2023-07-12 15:07:41', '2023-07-12 15:07:41'),
('3042021054', 'Luqinul', 'TI', '08194782472', '2023-07-11 23:15:19', '2023-07-11 23:58:27'),
('3042021055', 'mifdlol', 'TI', '2637568465', '2023-07-12 15:08:33', '2023-07-12 15:08:33'),
('3042021056', 'assidiq', 'TI', '0843174183174', '2023-07-12 15:08:55', '2023-07-12 15:08:55');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` char(36) NOT NULL,
  `nim_mahasiswa` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mata_kuliah` varchar(50) DEFAULT NULL,
  `nilai` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `nim_mahasiswa`, `mata_kuliah`, `nilai`, `created_at`, `updated_at`) VALUES
('99a1bf4a-6c24-42fd-869f-3df0d8e7e68a', '3042021050', 'imk', '90', '2023-07-12 15:09:41', '2023-07-12 15:09:41'),
('99a1c599-3f44-46f7-a2cf-175f798d4332', '3042021051', 'imk', '84', '2023-07-12 15:27:19', '2023-07-12 15:27:19'),
('99a1c5be-54c7-4609-9c61-8e23cbfa9e23', '3042021052', 'imk', '75', '2023-07-12 15:27:43', '2023-07-12 15:27:43'),
('99a1c5df-61f5-459b-b8b2-f8cd2fc50342', '3042021053', 'imk', '65', '2023-07-12 15:28:05', '2023-07-12 15:28:05'),
('99a1c5fb-27e7-4552-ab72-bf3727caa68f', '3042021054', 'imk', '64', '2023-07-12 15:28:23', '2023-07-12 15:28:23'),
('99a1c624-8acb-43d8-b62b-e6b46144226b', '3042021055', 'imk', '50', '2023-07-12 15:28:50', '2023-07-12 15:28:50'),
('99a1c635-7f72-4afc-8633-0273ab11c823', '3042021056', 'imk', '49', '2023-07-12 15:29:01', '2023-07-12 15:29:01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` char(36) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`, `created_at`, `updated_at`) VALUES
('99a0d1d8-c601-4fe3-a135-adbcabc06ba3', 'admin', '$2y$10$1L2M8qWNxogD9pPTlAHB.Or3Ut8X6U/w9NVDTO68MSg/vudvyUyzu', 'app/Admin/1689159943-qmlCw.webp', '2023-07-12 04:05:44', '2023-07-12 04:05:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`) USING BTREE;

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
