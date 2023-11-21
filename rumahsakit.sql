-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2023 at 03:52 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `subairi_dokter`
--

CREATE TABLE `subairi_dokter` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `spesialis` varchar(128) NOT NULL,
  `klinik` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subairi_dokter`
--

INSERT INTO `subairi_dokter` (`id`, `nama`, `spesialis`, `klinik`) VALUES
(5080456, 'Dr. Radit', 'Umum', 'Poli Umum'),
(5081827, 'Dr. Rafi', 'Gigi', 'Gigi dan Mulut'),
(5082918, 'Dr. Sutomo', 'Kulit', 'Utama'),
(5083474, 'Dr. Sabui', 'Umum', 'Poli Umum'),
(5083827, 'Dr. Citra', 'Anak', 'KIA');

-- --------------------------------------------------------

--
-- Table structure for table `subairi_obat`
--

CREATE TABLE `subairi_obat` (
  `no_seri` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `bentuk` varchar(50) NOT NULL,
  `tanggal_kadaluarsa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subairi_obat`
--

INSERT INTO `subairi_obat` (`no_seri`, `nama`, `bentuk`, `tanggal_kadaluarsa`) VALUES
(528273, 'Alopurinol', 'Tablet', '11/01/2026'),
(679371, 'Ambroxol', 'Sirup', '19/08/2026'),
(752525, 'Panadol', 'Kapsul', '12/02/2025'),
(819991, 'Karbidopa', 'Tablet', '16/05/2026'),
(912281, 'Aminofilin', 'Injeksi', '21/09/2024'),
(989762, 'Betametason', 'Tablet', '21/07/2025');

-- --------------------------------------------------------

--
-- Table structure for table `subairi_pasien`
--

CREATE TABLE `subairi_pasien` (
  `no_antrian` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `umur` int(3) NOT NULL,
  `tekanan_darah` varchar(20) NOT NULL,
  `efek_samping` varchar(20) NOT NULL,
  `tanggal_check_in` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `no_obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subairi_pasien`
--

INSERT INTO `subairi_pasien` (`no_antrian`, `nama`, `jenis_kelamin`, `umur`, `tekanan_darah`, `efek_samping`, `tanggal_check_in`, `id_dokter`, `no_obat`) VALUES
(7, 'Citra', 'Perempuan', 19, '112/98', 'Sehat', 1696427338, 5083474, 752525),
(8, 'Radit', 'Laki-Laki', 21, '107/80', 'Lemas', 1696428020, 5082918, 819991),
(9, 'Bagus', 'Laki-Laki', 25, '119/99', 'Sehat', 1696428081, 5081827, 912281),
(10, 'Icha', 'Perempuan', 27, '125/100', 'Pusing', 1696428175, 5083827, 679371),
(11, 'Fadhila', 'Perempuan', 28, '112/97', 'Sehat', 1696428330, 5083827, 989762);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subairi_dokter`
--
ALTER TABLE `subairi_dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subairi_obat`
--
ALTER TABLE `subairi_obat`
  ADD PRIMARY KEY (`no_seri`);

--
-- Indexes for table `subairi_pasien`
--
ALTER TABLE `subairi_pasien`
  ADD PRIMARY KEY (`no_antrian`),
  ADD KEY `dokter_pasien` (`id_dokter`),
  ADD KEY `obat_pasien` (`no_obat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subairi_dokter`
--
ALTER TABLE `subairi_dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5083829;

--
-- AUTO_INCREMENT for table `subairi_obat`
--
ALTER TABLE `subairi_obat`
  MODIFY `no_seri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9182282;

--
-- AUTO_INCREMENT for table `subairi_pasien`
--
ALTER TABLE `subairi_pasien`
  MODIFY `no_antrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subairi_pasien`
--
ALTER TABLE `subairi_pasien`
  ADD CONSTRAINT `dokter_pasien` FOREIGN KEY (`id_dokter`) REFERENCES `subairi_dokter` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `obat_pasien` FOREIGN KEY (`no_obat`) REFERENCES `subairi_obat` (`no_seri`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
