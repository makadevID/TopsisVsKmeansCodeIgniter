-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Jul 2016 pada 09.17
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `topsis_k_means`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `calon_mahasiswa` (
  `no_pendaftaran` varchar(20) NOT NULL,
  `nama_calon_mahasiswa` varchar(50) NOT NULL,
  `jenis_kelamin_calon_mahasiswa` tinyint(1) NOT NULL,
  `alamat_calon_mahasiswa` varchar(50) NOT NULL,
  `no_telepon_calon_mahasiswa` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calon_mahasiswa`
--

INSERT INTO `calon_mahasiswa` (`no_pendaftaran`, `nama_calon_mahasiswa`, `jenis_kelamin_calon_mahasiswa`, `alamat_calon_mahasiswa`, `no_telepon_calon_mahasiswa`) VALUES
('201451001', 'NI NENGAH DADI ASTITI', 0, '-', '-'),
('201451002', 'LEOPOLDO XAVIER SOARES', 1, '-', '-'),
('201451003', 'I NYOMAN SWETA', 1, '-', '-'),
('201451004', 'I MADE EDY SEDHANA', 1, '-', '-'),
('201451005', 'I WAYAN TIKA WIARTA', 1, '-', '-'),
('201451006', 'I WAYAN YUDISTYA', 0, '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cluster`
--

CREATE TABLE IF NOT EXISTS `cluster` (
  `id_cluster` int(11) NOT NULL,
  `no_pendaftaran` varchar(20) NOT NULL,
  `nil_raport` int(11) NOT NULL,
  `tes_tulis` int(11) NOT NULL,
  `kepribadian_wawancara` int(11) NOT NULL,
  `keaktifan` int(11) NOT NULL,
  `pekerjaan_orang_tua` int(11) NOT NULL,
  `biaya_hidup_calon_mahasiswa` int(11) NOT NULL,
  `pekerjaan` int(11) NOT NULL,
  `prestasi_semasa_calon_mahasiswa` int(11) NOT NULL,
  `beasiswa` int(11) NOT NULL,
  `ekstrakulikuler` int(11) NOT NULL,
  `dc1` float NOT NULL,
  `dc2` float NOT NULL,
  `kelompok` int(11) NOT NULL,
  `kMeansAccesTime` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=248 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cluster`
--

INSERT INTO `cluster` (`id_cluster`, `no_pendaftaran`, `nil_raport`, `tes_tulis`, `kepribadian_wawancara`, `keaktifan`, `pekerjaan_orang_tua`, `biaya_hidup_calon_mahasiswa`, `pekerjaan`, `prestasi_semasa_calon_mahasiswa`, `beasiswa`, `ekstrakulikuler`, `dc1`, `dc2`, `kelompok`, `kMeansAccesTime`) VALUES
(242, '201451006', 70, 60, 70, 70, 70, 70, 80, 70, 60, 70, 0, 42.6615, 1, 1.2381),
(243, '201451005', 60, 60, 70, 70, 80, 80, 80, 70, 60, 70, 17.3205, 44.2719, 1, 1.2381),
(244, '201451004', 60, 60, 70, 80, 80, 60, 30, 70, 70, 80, 55.6776, 21.9089, 2, 1.2381),
(245, '201451003', 60, 60, 70, 70, 60, 60, 30, 50, 60, 50, 60, 29.3258, 2, 1.2381),
(246, '201451002', 60, 70, 70, 70, 70, 60, 30, 70, 60, 70, 52.915, 14.8324, 2, 1.2381),
(247, '201451001', 50, 60, 80, 70, 70, 60, 30, 70, 60, 70, 55.6776, 16.7332, 2, 1.2381);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jumlah_kuadrat`
--

CREATE TABLE IF NOT EXISTS `jumlah_kuadrat` (
  `jenis_nilai` varchar(50) NOT NULL,
  `nil_raport` int(11) NOT NULL,
  `tes_tulis` int(11) NOT NULL,
  `kepribadian_wawancara` int(11) NOT NULL,
  `keaktifan` int(11) NOT NULL,
  `pekerjaan_orang_tua` int(11) NOT NULL,
  `biaya_hidup_calon_mahasiswa` int(11) NOT NULL,
  `pekerjaan` int(11) NOT NULL,
  `prestasi_semasa_calon_mahasiswa` int(11) NOT NULL,
  `beasiswa` int(11) NOT NULL,
  `ekstrakulikuler` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jumlah_kuadrat`
--

INSERT INTO `jumlah_kuadrat` (`jenis_nilai`, `nil_raport`, `tes_tulis`, `kepribadian_wawancara`, `keaktifan`, `pekerjaan_orang_tua`, `biaya_hidup_calon_mahasiswa`, `pekerjaan`, `prestasi_semasa_calon_mahasiswa`, `beasiswa`, `ekstrakulikuler`) VALUES
('JUMLAH KUADRAT', 21800, 22900, 30900, 30900, 31100, 25700, 16400, 27000, 22900, 28500),
('AKAR KUADRAT', 148, 151, 176, 176, 176, 160, 128, 164, 151, 169);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kedekatan_relatif`
--

CREATE TABLE IF NOT EXISTS `kedekatan_relatif` (
  `id_cluster` int(11) NOT NULL,
  `no_pendaftaran` varchar(100) NOT NULL,
  `dekat_relatif` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kedekatan_relatif`
--

INSERT INTO `kedekatan_relatif` (`id_cluster`, `no_pendaftaran`, `dekat_relatif`) VALUES
(73, '201451006', 0.543081),
(74, '201451005', 0.594448),
(75, '201451004', 0.463224),
(76, '201451003', 0.243748),
(77, '201451002', 0.389683),
(78, '201451001', 0.275327);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
  `keterangan` varchar(20) NOT NULL,
  `nil_raport` float NOT NULL,
  `tes_tulis` float NOT NULL,
  `kepribadian_wawancara` float NOT NULL,
  `keaktifan` float NOT NULL,
  `pekerjaan_orang_tua` float NOT NULL,
  `biaya_hidup_calon_mahasiswa` float NOT NULL,
  `pekerjaan` float NOT NULL,
  `prestasi_semasa_calon_mahasiswa` float NOT NULL,
  `beasiswa` float NOT NULL,
  `ekstrakulikuler` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`keterangan`, `nil_raport`, `tes_tulis`, `kepribadian_wawancara`, `keaktifan`, `pekerjaan_orang_tua`, `biaya_hidup_calon_mahasiswa`, `pekerjaan`, `prestasi_semasa_calon_mahasiswa`, `beasiswa`, `ekstrakulikuler`) VALUES
('bobot_kriteria', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuadrat`
--

CREATE TABLE IF NOT EXISTS `kuadrat` (
  `id_cluster` int(11) NOT NULL,
  `no_pendaftaran` varchar(20) NOT NULL,
  `nil_raport` int(11) NOT NULL,
  `tes_tulis` int(11) NOT NULL,
  `kepribadian_wawancara` int(11) NOT NULL,
  `keaktifan` int(11) NOT NULL,
  `pekerjaan_orang_tua` int(11) NOT NULL,
  `biaya_hidup_calon_mahasiswa` int(11) NOT NULL,
  `pekerjaan` int(11) NOT NULL,
  `prestasi_semasa_calon_mahasiswa` int(11) NOT NULL,
  `beasiswa` int(11) NOT NULL,
  `ekstrakulikuler` int(11) NOT NULL,
  `dc1` float NOT NULL,
  `dc2` float NOT NULL,
  `kelompok` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=223 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kuadrat`
--

INSERT INTO `kuadrat` (`id_cluster`, `no_pendaftaran`, `nil_raport`, `tes_tulis`, `kepribadian_wawancara`, `keaktifan`, `pekerjaan_orang_tua`, `biaya_hidup_calon_mahasiswa`, `pekerjaan`, `prestasi_semasa_calon_mahasiswa`, `beasiswa`, `ekstrakulikuler`, `dc1`, `dc2`, `kelompok`) VALUES
(217, '201451006', 4900, 3600, 4900, 4900, 4900, 4900, 6400, 4900, 3600, 4900, 0, 0, 0),
(218, '201451005', 3600, 3600, 4900, 4900, 6400, 6400, 6400, 4900, 3600, 4900, 0, 0, 0),
(219, '201451004', 3600, 3600, 4900, 6400, 6400, 3600, 900, 4900, 4900, 6400, 0, 0, 0),
(220, '201451003', 3600, 3600, 4900, 4900, 3600, 3600, 900, 2500, 3600, 2500, 0, 0, 0),
(221, '201451002', 3600, 4900, 4900, 4900, 4900, 3600, 900, 4900, 3600, 4900, 0, 0, 0),
(222, '201451001', 2500, 3600, 6400, 4900, 4900, 3600, 900, 4900, 3600, 4900, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `normalisasi_matriks`
--

CREATE TABLE IF NOT EXISTS `normalisasi_matriks` (
  `id_cluster` int(11) NOT NULL,
  `no_pendaftaran` varchar(20) NOT NULL,
  `nil_raport` float NOT NULL,
  `tes_tulis` float NOT NULL,
  `kepribadian_wawancara` float NOT NULL,
  `keaktifan` float NOT NULL,
  `pekerjaan_orang_tua` float NOT NULL,
  `biaya_hidup_calon_mahasiswa` float NOT NULL,
  `pekerjaan` float NOT NULL,
  `prestasi_semasa_calon_mahasiswa` float NOT NULL,
  `beasiswa` float NOT NULL,
  `ekstrakulikuler` float NOT NULL,
  `dc1` double NOT NULL,
  `dc2` double NOT NULL,
  `kelompok` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `normalisasi_matriks`
--

INSERT INTO `normalisasi_matriks` (`id_cluster`, `no_pendaftaran`, `nil_raport`, `tes_tulis`, `kepribadian_wawancara`, `keaktifan`, `pekerjaan_orang_tua`, `biaya_hidup_calon_mahasiswa`, `pekerjaan`, `prestasi_semasa_calon_mahasiswa`, `beasiswa`, `ekstrakulikuler`, `dc1`, `dc2`, `kelompok`) VALUES
(107, '201451006', 0.472973, 0.397351, 0.397727, 0.397727, 0.397727, 0.4375, 0.625, 0.426829, 0.397351, 0.414201, 0, 0, 0),
(108, '201451005', 0.405405, 0.397351, 0.397727, 0.397727, 0.454545, 0.5, 0.625, 0.426829, 0.397351, 0.414201, 0, 0, 0),
(109, '201451004', 0.405405, 0.397351, 0.397727, 0.454545, 0.454545, 0.375, 0.234375, 0.426829, 0.463576, 0.473373, 0, 0, 0),
(110, '201451003', 0.405405, 0.397351, 0.397727, 0.397727, 0.340909, 0.375, 0.234375, 0.304878, 0.397351, 0.295858, 0, 0, 0),
(111, '201451002', 0.405405, 0.463576, 0.397727, 0.397727, 0.397727, 0.375, 0.234375, 0.426829, 0.397351, 0.414201, 0, 0, 0),
(112, '201451001', 0.337838, 0.397351, 0.454545, 0.397727, 0.397727, 0.375, 0.234375, 0.426829, 0.397351, 0.414201, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `positif_negatif`
--

CREATE TABLE IF NOT EXISTS `positif_negatif` (
  `jenis_nilai` varchar(50) NOT NULL,
  `nil_raport` float NOT NULL,
  `tes_tulis` float NOT NULL,
  `kepribadian_wawancara` float NOT NULL,
  `keaktifan` float NOT NULL,
  `pekerjaan_orang_tua` float NOT NULL,
  `biaya_hidup_calon_mahasiswa` float NOT NULL,
  `pekerjaan` float NOT NULL,
  `prestasi_semasa_calon_mahasiswa` float NOT NULL,
  `beasiswa` float NOT NULL,
  `ekstrakulikuler` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `positif_negatif`
--

INSERT INTO `positif_negatif` (`jenis_nilai`, `nil_raport`, `tes_tulis`, `kepribadian_wawancara`, `keaktifan`, `pekerjaan_orang_tua`, `biaya_hidup_calon_mahasiswa`, `pekerjaan`, `prestasi_semasa_calon_mahasiswa`, `beasiswa`, `ekstrakulikuler`) VALUES
('MAX POSITIF', 0.472973, 0.463576, 0.454545, 0.454545, 0.454545, 0.5, 0.625, 0.426829, 0.463576, 0.473373),
('MIN NEGATIF', 0.337838, 0.397351, 0.397727, 0.397727, 0.340909, 0.375, 0.234375, 0.304878, 0.397351, 0.295858);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rangking`
--

CREATE TABLE IF NOT EXISTS `rangking` (
  `id_cluster` int(11) NOT NULL,
  `no_pendaftaran` varchar(100) NOT NULL,
  `nilai` float NOT NULL,
  `ranking` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `topsisAccesTime` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rangking`
--

INSERT INTO `rangking` (`id_cluster`, `no_pendaftaran`, `nilai`, `ranking`, `status`, `topsisAccesTime`) VALUES
(72, '201451006', 0.543081, 2, '', 0.356),
(73, '201451005', 0.594448, 1, '', 0.356),
(74, '201451004', 0.463224, 3, '', 0.356),
(75, '201451003', 0.243748, 6, '', 0.356),
(76, '201451002', 0.389683, 4, '', 0.356),
(77, '201451001', 0.275327, 5, '', 0.356);

-- --------------------------------------------------------

--
-- Struktur dari tabel `separasi`
--

CREATE TABLE IF NOT EXISTS `separasi` (
  `id_cluster` int(11) NOT NULL,
  `no_pendaftaran` varchar(100) NOT NULL,
  `ideal_positif` double NOT NULL,
  `ideal_negatif` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `separasi`
--

INSERT INTO `separasi` (`id_cluster`, `no_pendaftaran`, `ideal_positif`, `ideal_negatif`) VALUES
(74, '201451006', 0.13407779830009, 0.15936123540247),
(75, '201451005', 0.12412798031467, 0.18194350767477),
(76, '201451004', 0.16674672522422, 0.14389831517082),
(77, '201451003', 0.209632764598, 0.067567),
(78, '201451002', 0.17284469906827, 0.11036002554367),
(79, '201451001', 0.21149181804032, 0.080352786186914);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `hakakses` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `hakakses`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 1),
('201451002', '81dc9bdb52d04dc20036dbd8313ed055', 0),
('201451003', '81dc9bdb52d04dc20036dbd8313ed055', 0),
('201451004', '81dc9bdb52d04dc20036dbd8313ed055', 0),
('201451001', '81dc9bdb52d04dc20036dbd8313ed055', 0),
('201451005', '81dc9bdb52d04dc20036dbd8313ed055', 0),
('201451006', '81dc9bdb52d04dc20036dbd8313ed055', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `weighted_normalized_decision_matrix`
--

CREATE TABLE IF NOT EXISTS `weighted_normalized_decision_matrix` (
  `id_cluster` int(11) NOT NULL,
  `no_pendaftaran` varchar(20) NOT NULL,
  `nil_raport` float NOT NULL,
  `tes_tulis` float NOT NULL,
  `kepribadian_wawancara` float NOT NULL,
  `keaktifan` float NOT NULL,
  `pekerjaan_orang_tua` float NOT NULL,
  `biaya_hidup_calon_mahasiswa` float NOT NULL,
  `pekerjaan` float NOT NULL,
  `prestasi_semasa_calon_mahasiswa` float NOT NULL,
  `beasiswa` float NOT NULL,
  `ekstrakulikuler` float NOT NULL,
  `dc1` double NOT NULL,
  `dc2` double NOT NULL,
  `kelompok` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `weighted_normalized_decision_matrix`
--

INSERT INTO `weighted_normalized_decision_matrix` (`id_cluster`, `no_pendaftaran`, `nil_raport`, `tes_tulis`, `kepribadian_wawancara`, `keaktifan`, `pekerjaan_orang_tua`, `biaya_hidup_calon_mahasiswa`, `pekerjaan`, `prestasi_semasa_calon_mahasiswa`, `beasiswa`, `ekstrakulikuler`, `dc1`, `dc2`, `kelompok`) VALUES
(105, '201451006', 0.472973, 0.397351, 0.397727, 0.397727, 0.397727, 0.4375, 0.625, 0.426829, 0.397351, 0.414201, 0, 0, 0),
(106, '201451005', 0.405405, 0.397351, 0.397727, 0.397727, 0.454545, 0.5, 0.625, 0.426829, 0.397351, 0.414201, 0, 0, 0),
(107, '201451004', 0.405405, 0.397351, 0.397727, 0.454545, 0.454545, 0.375, 0.234375, 0.426829, 0.463576, 0.473373, 0, 0, 0),
(108, '201451003', 0.405405, 0.397351, 0.397727, 0.397727, 0.340909, 0.375, 0.234375, 0.304878, 0.397351, 0.295858, 0, 0, 0),
(109, '201451002', 0.405405, 0.463576, 0.397727, 0.397727, 0.397727, 0.375, 0.234375, 0.426829, 0.397351, 0.414201, 0, 0, 0),
(110, '201451001', 0.337838, 0.397351, 0.454545, 0.397727, 0.397727, 0.375, 0.234375, 0.426829, 0.397351, 0.414201, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_mahasiswa`
--
ALTER TABLE `calon_mahasiswa`
  ADD PRIMARY KEY (`no_pendaftaran`);

--
-- Indexes for table `cluster`
--
ALTER TABLE `cluster`
  ADD PRIMARY KEY (`id_cluster`);

--
-- Indexes for table `kedekatan_relatif`
--
ALTER TABLE `kedekatan_relatif`
  ADD PRIMARY KEY (`id_cluster`);

--
-- Indexes for table `kuadrat`
--
ALTER TABLE `kuadrat`
  ADD PRIMARY KEY (`id_cluster`);

--
-- Indexes for table `normalisasi_matriks`
--
ALTER TABLE `normalisasi_matriks`
  ADD PRIMARY KEY (`id_cluster`);

--
-- Indexes for table `positif_negatif`
--
ALTER TABLE `positif_negatif`
  ADD PRIMARY KEY (`jenis_nilai`);

--
-- Indexes for table `rangking`
--
ALTER TABLE `rangking`
  ADD PRIMARY KEY (`id_cluster`);

--
-- Indexes for table `separasi`
--
ALTER TABLE `separasi`
  ADD PRIMARY KEY (`id_cluster`);

--
-- Indexes for table `weighted_normalized_decision_matrix`
--
ALTER TABLE `weighted_normalized_decision_matrix`
  ADD PRIMARY KEY (`id_cluster`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cluster`
--
ALTER TABLE `cluster`
  MODIFY `id_cluster` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=248;
--
-- AUTO_INCREMENT for table `kedekatan_relatif`
--
ALTER TABLE `kedekatan_relatif`
  MODIFY `id_cluster` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `kuadrat`
--
ALTER TABLE `kuadrat`
  MODIFY `id_cluster` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=223;
--
-- AUTO_INCREMENT for table `normalisasi_matriks`
--
ALTER TABLE `normalisasi_matriks`
  MODIFY `id_cluster` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `rangking`
--
ALTER TABLE `rangking`
  MODIFY `id_cluster` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `separasi`
--
ALTER TABLE `separasi`
  MODIFY `id_cluster` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `weighted_normalized_decision_matrix`
--
ALTER TABLE `weighted_normalized_decision_matrix`
  MODIFY `id_cluster` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=111;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
