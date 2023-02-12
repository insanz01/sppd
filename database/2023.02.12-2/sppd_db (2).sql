-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Feb 2023 pada 13.07
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sppd_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biaya_perjalanan_dinas`
--

CREATE TABLE `biaya_perjalanan_dinas` (
  `id` int(11) NOT NULL,
  `hash_id` varchar(100) NOT NULL,
  `file_dokumen` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `nomor_SPPD` varchar(100) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `perincian_biaya` text NOT NULL,
  `jumlah_biaya` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `nama_bendaharawan` varchar(100) NOT NULL,
  `NIP_bendaharawan` varchar(30) NOT NULL,
  `NIP_karyawan` varchar(100) NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `biaya_perjalanan_dinas`
--

INSERT INTO `biaya_perjalanan_dinas` (`id`, `hash_id`, `file_dokumen`, `user_id`, `status`, `created_at`, `updated_at`, `nomor_SPPD`, `tanggal`, `perincian_biaya`, `jumlah_biaya`, `keterangan`, `nama_bendaharawan`, `NIP_bendaharawan`, `NIP_karyawan`, `nama_karyawan`) VALUES
(2, 'JDJ5JDEwJHZZVzlKaFZyQS9tdHdVTzYxV0Q3ZmUxTkx6UFUzOTBxM3p0UGlKZkdUSnRIekdleXQzRGhx', 'template_bpd11.xlsx', 2, 0, '2023-02-01 11:36:10', '2023-02-01 11:36:10', '', NULL, '', 0, '', '', '', '', ''),
(3, 'JDJ5JDEwJG1uQmhmS053Tmk1bnNjQWVWMEhjZk9wT1NMV0YyM3NTbkRQVDFzb09ya0NOck9OZk53alhl', '', 2, 0, '2023-02-12 14:11:49', '2023-02-12 14:11:49', '1231231231', '2023-02-12', 'Biaya', 123123, 'Entah apa', 'IPUL', '987817239712', '1600018015', 'INSAN KAMIL'),
(4, 'JDJ5JDEwJC9vTnBpNUZkOVFNQzZyc20vdzNmaS41Y0NDS2Y3MWRUblFzendFanVqaGdPN2NveDdRZkNP', '', 2, 0, '2023-02-12 14:13:48', '2023-02-12 14:13:48', '1231231231', '2023-02-20', 'Biaya', 1311232, 'Entah apa', 'IPUL', '987817239712', '1600018015', 'INSAN KAMIL'),
(5, 'JDJ5JDEwJENqRjI1NFVZWkZPYWJuMUNhcWZRbS5kbHlVaHpmZ1V6aEhkVUZLWXh2UFFqS2pYUTl4cC51', '', 2, 0, '2023-02-12 14:13:55', '2023-02-12 14:13:55', '1231231231', '2023-02-20', 'Biaya', 1311232, 'Entah apa', 'IPUL', '987817239712', '1600018015', 'INSAN KAMIL'),
(6, 'JDJ5JDEwJFRIRXZYb2dGNTZPZWJBNUpZZ0hNNC5xZ2Q1YjJlVXZqaG5KQnRzWWFWR2pUUFhPZGt0WVZD', '', 2, 0, '2023-02-12 16:42:43', '2023-02-12 16:42:43', '1231231231', '2023-02-12', 'Biaya', 12341234, 'Entah apa', 'IPUL', '987817239712', '1600018015', 'Muhammad Insan Kamil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `NIP` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `golongan` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `user_id`, `NIP`, `nama`, `email`, `nomor_hp`, `alamat`, `jabatan`, `golongan`, `created_at`, `updated_at`) VALUES
(1, 2, '1600018015', 'Muhammad Insan Kamil', 'muhammad.kamil@jatis.com', '0891513123123', 'Jalan Sutoyo S. Komp Wildan Sari IV RT 2 RW 1 NO 108', 'Research and Development', '', '2023-01-24 07:55:08', '2023-01-24 07:55:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kwitansi`
--

CREATE TABLE `kwitansi` (
  `id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_perjalanan_dinas`
--

CREATE TABLE `laporan_perjalanan_dinas` (
  `id` int(11) NOT NULL,
  `hash_id` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `penerima_surat` varchar(255) NOT NULL,
  `pengirim_surat` varchar(255) NOT NULL,
  `tanggal_kegiatan` datetime NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `waktu_pelaksanaan` varchar(255) NOT NULL,
  `tempat_pelaksanaan` varchar(255) NOT NULL,
  `poin_dasar` text NOT NULL,
  `poin_hasil_kegiatan` text NOT NULL,
  `poin_kesimpulan_saran` text NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `NIP_petugas` varchar(100) NOT NULL,
  `NIP_karyawan` varchar(100) NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `laporan_perjalanan_dinas`
--

INSERT INTO `laporan_perjalanan_dinas` (`id`, `hash_id`, `user_id`, `penerima_surat`, `pengirim_surat`, `tanggal_kegiatan`, `perihal`, `kegiatan`, `waktu_pelaksanaan`, `tempat_pelaksanaan`, `poin_dasar`, `poin_hasil_kegiatan`, `poin_kesimpulan_saran`, `nama_petugas`, `NIP_petugas`, `NIP_karyawan`, `nama_karyawan`, `status`, `created_at`, `updated_at`) VALUES
(1, 'JDJ5JDEwJElNMDhLSEd0dEZCV2lsWkNoVVlsWGU2d05Qby5VdWhTQkJWWk9VNm16Y0VlZjN1Nm5FT3ll', 2, 'Pangeran', 'kamil', '2023-02-01 00:00:00', 'Laporan Perjalanan Dinas', 'Outbound', '1 dan 2 Febuari', 'Sungai', '1. Tidak ada poin\r\n2. Cukup ini aja', 'Apa hayo ?', 'tidak ada, no comment', '', '', '', '', 1, '2023-02-01 10:17:44', '2023-02-01 10:17:44'),
(2, 'JDJ5JDEwJHNvRkZXbWF4OWxMT08yUzJJNldJM3VVRGdZRmZQbnVrbi9VME9zWTFHdWV5a2JFbUZ2Sjg2', 2, 'asdfasdf', 'asdasda', '2023-02-16 00:00:00', 'asfasd', 'sdfasdf', 'sfasdasd', 'sdfasfa', 'asfdad\r\n123dasdf\r\n1rf23f2', 'asdfadf', '1fwe23f2e3', '', '', '', '', -1, '2023-02-01 10:23:50', '2023-02-01 10:23:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `membership`
--

CREATE TABLE `membership` (
  `id` int(11) NOT NULL,
  `kode_member` varchar(10) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `no_identitas` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `membership`
--

INSERT INTO `membership` (`id`, `kode_member`, `nama_lengkap`, `no_identitas`, `alamat`, `nomor_hp`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'MB_000003', 'MUHAMMAD REHAN', '1600018002', 'JALAN WONOSARI KM 10, SITIMULYO, PIYUNGAN, BANTUL', '0891212312331', 'rehana@gmail.com', '2023-01-10 21:14:46', '2023-01-10 21:14:46', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_users`
--

CREATE TABLE `role_users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `role_users`
--

INSERT INTO `role_users` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'administrator', '2023-01-30 16:07:19', '2023-01-30 16:07:19'),
(2, 'pegawai', '2023-01-30 16:07:19', '2023-01-30 16:07:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_perintah_perjalanan_dinas`
--

CREATE TABLE `surat_perintah_perjalanan_dinas` (
  `id` int(11) NOT NULL,
  `hash_id` varchar(100) NOT NULL,
  `author` varchar(255) NOT NULL,
  `nip_karyawan` varchar(30) NOT NULL,
  `nama_karyawan` varchar(255) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `golongan` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `tingkat_perjalanan_dinas` varchar(255) NOT NULL,
  `maksud_perjalanan_dinas` text NOT NULL,
  `alat_angkutan` varchar(255) NOT NULL,
  `tempat_berangkat` varchar(255) NOT NULL,
  `tempat_tujuan` varchar(255) NOT NULL,
  `lama_dinas` varchar(100) NOT NULL,
  `tanggal_berangkat` varchar(100) NOT NULL,
  `tanggal_kembali` varchar(100) NOT NULL,
  `beban_anggaran_instansi` varchar(100) NOT NULL,
  `beban_anggaran_mata_anggaran` varchar(100) NOT NULL,
  `NIP_kepala_dinas` varchar(100) NOT NULL,
  `nama_kepala_dinas` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `surat_perintah_perjalanan_dinas`
--

INSERT INTO `surat_perintah_perjalanan_dinas` (`id`, `hash_id`, `author`, `nip_karyawan`, `nama_karyawan`, `pangkat`, `golongan`, `jabatan`, `instansi`, `tingkat_perjalanan_dinas`, `maksud_perjalanan_dinas`, `alat_angkutan`, `tempat_berangkat`, `tempat_tujuan`, `lama_dinas`, `tanggal_berangkat`, `tanggal_kembali`, `beban_anggaran_instansi`, `beban_anggaran_mata_anggaran`, `NIP_kepala_dinas`, `nama_kepala_dinas`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'JDJ5JDEwJG1wZTk1QUV1MjF4NlRkMVo3L0w1Mk9tWms0SnpBTXFWRU9IVFN5WWJGSERjSEx5Q05nRUt1', 'sdfadfa', 'asfasdfa', 'asdfadsfa', 'asdfasdfsadfa', 'asdfad', 'asdfadfsa', 'asdfasdf', 'fsadfa', 'sadfsadf', 'asdfadf', 'sdfadfa', 'sfasdf', '12312', '1231233', '3312312', '1221', 'fasdfaweraewr', '', '', 'asdfsadasdf', '2023-02-01 10:58:58', '2023-02-01 10:58:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_perintah_tugas`
--

CREATE TABLE `surat_perintah_tugas` (
  `id` int(11) NOT NULL,
  `hash_id` varchar(255) NOT NULL,
  `nomor_sppd` varchar(255) NOT NULL,
  `nip_karyawan` varchar(30) NOT NULL,
  `nama_karyawan` varchar(255) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `golongan` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `rangka_acara` text NOT NULL,
  `tujuan` text NOT NULL,
  `tanggal_kegiatan` varchar(255) NOT NULL,
  `atas_beban` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role_id`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', '$2y$10$Yl8SIO8UfTXMAUQ.I2F25u4jomVx90cOXFBalu6svyVs4N40w2jGu', 1, 1, '2023-01-29 23:39:54', '2023-01-29 23:39:54', NULL),
(2, 'kamil', '$2y$10$Yl8SIO8UfTXMAUQ.I2F25u4jomVx90cOXFBalu6svyVs4N40w2jGu', 2, 1, '2023-01-30 21:39:01', '2023-01-30 21:39:01', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biaya_perjalanan_dinas`
--
ALTER TABLE `biaya_perjalanan_dinas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kwitansi`
--
ALTER TABLE `kwitansi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan_perjalanan_dinas`
--
ALTER TABLE `laporan_perjalanan_dinas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_perintah_perjalanan_dinas`
--
ALTER TABLE `surat_perintah_perjalanan_dinas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_perintah_tugas`
--
ALTER TABLE `surat_perintah_tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biaya_perjalanan_dinas`
--
ALTER TABLE `biaya_perjalanan_dinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kwitansi`
--
ALTER TABLE `kwitansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `laporan_perjalanan_dinas`
--
ALTER TABLE `laporan_perjalanan_dinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `membership`
--
ALTER TABLE `membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `role_users`
--
ALTER TABLE `role_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `surat_perintah_perjalanan_dinas`
--
ALTER TABLE `surat_perintah_perjalanan_dinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `surat_perintah_tugas`
--
ALTER TABLE `surat_perintah_tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
