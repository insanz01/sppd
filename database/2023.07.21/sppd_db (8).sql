-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jul 2023 pada 02.27
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
-- Struktur dari tabel `batalkan_perintah_tugas`
--

CREATE TABLE `batalkan_perintah_tugas` (
  `id` int(11) NOT NULL,
  `hash_id` varchar(255) NOT NULL,
  `nomor_surat` varchar(50) NOT NULL,
  `sppd_hash` varchar(255) NOT NULL,
  `alasan` text NOT NULL,
  `nip_petugas` varchar(50) NOT NULL,
  `nama_petugas` varchar(150) NOT NULL,
  `jabatan_petugas` varchar(50) NOT NULL,
  `SKPD_petugas` varchar(100) NOT NULL,
  `nip_pegawai` varchar(50) NOT NULL,
  `nama_pegawai` varchar(150) NOT NULL,
  `jabatan_pegawai` varchar(50) NOT NULL,
  `SKPD_pegawai` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `nama_bendaharawan` varchar(100) DEFAULT NULL,
  `NIP_bendaharawan` varchar(30) DEFAULT NULL,
  `NIP_karyawan` varchar(100) DEFAULT NULL,
  `nama_karyawan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `biaya_perjalanan_dinas`
--

INSERT INTO `biaya_perjalanan_dinas` (`id`, `hash_id`, `file_dokumen`, `user_id`, `status`, `created_at`, `updated_at`, `nomor_SPPD`, `tanggal`, `perincian_biaya`, `jumlah_biaya`, `keterangan`, `nama_bendaharawan`, `NIP_bendaharawan`, `NIP_karyawan`, `nama_karyawan`) VALUES
(4, 'JDJ5JDEwJC9vTnBpNUZkOVFNQzZyc20vdzNmaS41Y0NDS2Y3MWRUblFzendFanVqaGdPN2NveDdRZkNP', '', 2, 0, '2023-02-12 14:13:48', '2023-02-12 14:13:48', '1231231231', '2023-02-20', 'Biaya', 1311232, 'Entah apa', 'IPUL', '987817239712', '1600018015', 'INSAN KAMIL'),
(5, 'JDJ5JDEwJENqRjI1NFVZWkZPYWJuMUNhcWZRbS5kbHlVaHpmZ1V6aEhkVUZLWXh2UFFqS2pYUTl4cC51', '', 2, 0, '2023-02-12 14:13:55', '2023-02-12 14:13:55', '1231231232', '2023-02-20', 'Biaya', 1311232, 'Entah apa', 'IPUL', '987817239712', '1600018015', 'INSAN KAMIL'),
(6, 'JDJ5JDEwJFRIRXZYb2dGNTZPZWJBNUpZZ0hNNC5xZ2Q1YjJlVXZqaG5KQnRzWWFWR2pUUFhPZGt0WVZD', '', 2, 0, '2023-02-12 16:42:43', '2023-02-12 16:42:43', '1231231233', '2023-02-12', 'Biaya', 12341234, 'Entah apa', 'IPUL', '987817239712', '1600018015', 'Muhammad Insan Kamil'),
(7, 'JDJ5JDEwJFNrODVpN3diT3J0ZUFwOUI0cmR1NGU5ZXVnazJpWDd0dXRMSUxRdHZYNVBSS1ZSTmRWU0c2', '', 2, 0, '2023-02-12 19:12:32', '2023-02-12 19:12:32', '1231231234', '2023-02-12', 'Biaya', 123121, 'Entah apa', 'IPUL', '987817239712', '1600018015', 'Muhammad Insan Kamil'),
(8, 'JDJ5JDEwJDFaajVzcWl5NUZseWtRTnp1SC9sYnVLeGpidVE1bXJHYzBzc3NLUEZmcGZoLzdXOWZqQnBX', '', 2, 0, '2023-02-14 16:21:51', '2023-02-14 16:21:51', 'abc-123-def-456', '2023-02-12', 'iPhone', 20000000, 'Jajan Bulanan', 'MICHAEL BUDIMAN', '14045', '1600018015', 'Muhammad Insan Kamil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `biaya_pesawat`
--

CREATE TABLE `biaya_pesawat` (
  `id` int(11) NOT NULL,
  `kota_asal` varchar(100) NOT NULL,
  `kota_tujuan` varchar(100) NOT NULL,
  `kelas_bisnis` int(11) NOT NULL,
  `kelas_ekonomi` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `biaya_pesawat`
--

INSERT INTO `biaya_pesawat` (`id`, `kota_asal`, `kota_tujuan`, `kelas_bisnis`, `kelas_ekonomi`, `created_at`, `updated_at`) VALUES
(1, 'BANJARMASIN', 'YOGYAKARTA', 4000000, 2000000, '2023-07-13 09:13:58', '2023-07-13 09:13:58');

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
  `file_type` varchar(20) NOT NULL,
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
  `nama_petugas` varchar(100) DEFAULT NULL,
  `NIP_petugas` varchar(100) DEFAULT NULL,
  `NIP_karyawan` varchar(100) DEFAULT NULL,
  `nama_karyawan` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `laporan_perjalanan_dinas`
--

INSERT INTO `laporan_perjalanan_dinas` (`id`, `hash_id`, `user_id`, `penerima_surat`, `pengirim_surat`, `tanggal_kegiatan`, `perihal`, `kegiatan`, `waktu_pelaksanaan`, `tempat_pelaksanaan`, `poin_dasar`, `poin_hasil_kegiatan`, `poin_kesimpulan_saran`, `nama_petugas`, `NIP_petugas`, `NIP_karyawan`, `nama_karyawan`, `status`, `created_at`, `updated_at`) VALUES
(3, 'JDJ5JDEwJHdzLjdoVk5wNEtWZDF1QzZDUjhkZXU5ZG9zVlFmLnRZRXhpU0V6Y1RGMDYyQ0ZJT29OeHNX', 2, 'Raja Kingdom', 'Insan kamil', '2023-02-14 00:00:00', 'Nyoba aja', 'percobaan pengajuan laporan perjalanan dinas', '28 Desember 2023', 'Rumah Makan Kaganangan', 'Tidak punya hal mendasar', 'Tidak ada poin hasil kegiatan', 'cukup tau aja', NULL, NULL, '1600018015', 'Muhammad Insan Kamil', -1, '2023-02-14 19:31:50', '2023-02-14 19:31:50');

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
  `nomor_SPPD` varchar(50) NOT NULL,
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
  `tanggal_berangkat` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `beban_anggaran_instansi` varchar(100) NOT NULL,
  `beban_anggaran_mata_anggaran` varchar(100) NOT NULL,
  `NIP_kepala_dinas` varchar(100) NOT NULL,
  `nama_kepala_dinas` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `berangkat_dari` varchar(100) DEFAULT NULL,
  `tujuan_satu` varchar(100) DEFAULT NULL,
  `tujuan_dua` varchar(100) DEFAULT NULL,
  `tanggal_berangkat_tujuan_dua` date DEFAULT NULL,
  `tujuan_tiga` varchar(100) DEFAULT NULL,
  `tanggal_berangkat_tujuan_tiga` date DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `surat_perintah_perjalanan_dinas`
--

INSERT INTO `surat_perintah_perjalanan_dinas` (`id`, `hash_id`, `nomor_SPPD`, `author`, `nip_karyawan`, `nama_karyawan`, `pangkat`, `golongan`, `jabatan`, `instansi`, `tingkat_perjalanan_dinas`, `maksud_perjalanan_dinas`, `alat_angkutan`, `tempat_berangkat`, `tempat_tujuan`, `lama_dinas`, `tanggal_berangkat`, `tanggal_kembali`, `beban_anggaran_instansi`, `beban_anggaran_mata_anggaran`, `NIP_kepala_dinas`, `nama_kepala_dinas`, `keterangan`, `berangkat_dari`, `tujuan_satu`, `tujuan_dua`, `tanggal_berangkat_tujuan_dua`, `tujuan_tiga`, `tanggal_berangkat_tujuan_tiga`, `status`, `created_at`, `updated_at`) VALUES
(1, 'JDJ5JDEwJG1wZTk1QUV1MjF4NlRkMVo3L0w1Mk9tWms0SnpBTXFWRU9IVFN5WWJGSERjSEx5Q05nRUt1', '12.001/DKP3-KB/II/2023', 'sdfadfa', '1600018015', 'asdfadsfa', 'asdfasdfsadfa', 'asdfad', 'asdfadfsa', 'asdfasdf', 'fsadfa', 'sadfsadf', 'asdfadf', 'sdfadfa', 'sfasdf', '12312', '2023-02-12', '2023-02-15', '1221', 'fasdfaweraewr', '', '', 'asdfsadasdf', 'Banjarmasin', 'Singapura', NULL, NULL, NULL, NULL, 1, '2023-02-01 10:58:58', '2023-02-01 10:58:58'),
(2, 'JDJ5JDEwJGx6NzJEVHczL0FsSjVab2tyLlVPYk9BY2FPVFltRXNRRG1ERVNjaGhMZWQ0MjllNDB0cDBL', '12.002/DKP3-KB/II/2023', 'Kambing Mawon', '1600018015', 'Muhammad Insan Kamil', 'Jendral', 'Golkar', 'Research and Development', 'IT', 'Ga ngerti', 'Healing', 'Pesawat', 'Banjarmasin', 'Singapura', '5', '2023-02-19', '2023-02-24', '50000', 'Rupiah', '', '', 'Aku Cinta Rupiah', 'Banjarmasin', 'Singapura', '', '0000-00-00', '', '0000-00-00', 1, '2023-02-19 17:33:39', '2023-02-19 17:33:39');

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
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `surat_perintah_tugas`
--

INSERT INTO `surat_perintah_tugas` (`id`, `hash_id`, `nomor_sppd`, `nip_karyawan`, `nama_karyawan`, `pangkat`, `golongan`, `jabatan`, `rangka_acara`, `tujuan`, `tanggal_kegiatan`, `atas_beban`, `status`, `created_at`, `updated_at`) VALUES
(2, 'JDJ5JDEwJDBnNGlVNkEub3dYdGVXU2hpdWkzZk9jd0hQOUJlNC5nREZoSjd3REVIc1dMN25ZSS91RFlH', '12.002/DKP3-KB/II/2023', '1600018015', 'Muhammad Insan Kamil', 'Jendral', 'Golkar', 'Research and Development', 'lah koq iso', 'liburan', '21 April 2023', 'Berat', 1, '2023-07-05 19:18:16', '2023-07-05 19:18:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `uang_harian_perjalanan_dinas`
--

CREATE TABLE `uang_harian_perjalanan_dinas` (
  `id` int(11) NOT NULL,
  `nama_provinsi` varchar(20) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `besaran` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `uang_harian_perjalanan_dinas`
--

INSERT INTO `uang_harian_perjalanan_dinas` (`id`, `nama_provinsi`, `satuan`, `besaran`, `created_at`, `updated_at`) VALUES
(1, 'JAWA TENGAH', 'OH', 300000, '2023-06-26 23:16:43', '2023-06-26 23:16:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `uang_harian_perjalanan_dinas_dki`
--

CREATE TABLE `uang_harian_perjalanan_dinas_dki` (
  `id` int(11) NOT NULL,
  `uraian` varchar(100) NOT NULL,
  `walikota` varchar(30) NOT NULL,
  `dprd` varchar(30) NOT NULL,
  `sekda` varchar(30) NOT NULL,
  `asisten_sekda` varchar(30) NOT NULL,
  `administrator` varchar(30) NOT NULL,
  `pengawas` varchar(30) NOT NULL,
  `pelaksana` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `uang_taxi_perjalanan_dinas`
--

CREATE TABLE `uang_taxi_perjalanan_dinas` (
  `id` int(11) NOT NULL,
  `nama_provinsi` varchar(50) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `besaran` int(11) NOT NULL,
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
-- Indeks untuk tabel `batalkan_perintah_tugas`
--
ALTER TABLE `batalkan_perintah_tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `biaya_perjalanan_dinas`
--
ALTER TABLE `biaya_perjalanan_dinas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `biaya_pesawat`
--
ALTER TABLE `biaya_pesawat`
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
-- Indeks untuk tabel `uang_harian_perjalanan_dinas`
--
ALTER TABLE `uang_harian_perjalanan_dinas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `uang_harian_perjalanan_dinas_dki`
--
ALTER TABLE `uang_harian_perjalanan_dinas_dki`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `uang_taxi_perjalanan_dinas`
--
ALTER TABLE `uang_taxi_perjalanan_dinas`
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
-- AUTO_INCREMENT untuk tabel `batalkan_perintah_tugas`
--
ALTER TABLE `batalkan_perintah_tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `biaya_perjalanan_dinas`
--
ALTER TABLE `biaya_perjalanan_dinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `biaya_pesawat`
--
ALTER TABLE `biaya_pesawat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kwitansi`
--
ALTER TABLE `kwitansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `laporan_perjalanan_dinas`
--
ALTER TABLE `laporan_perjalanan_dinas`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `surat_perintah_tugas`
--
ALTER TABLE `surat_perintah_tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `uang_harian_perjalanan_dinas`
--
ALTER TABLE `uang_harian_perjalanan_dinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `uang_harian_perjalanan_dinas_dki`
--
ALTER TABLE `uang_harian_perjalanan_dinas_dki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `uang_taxi_perjalanan_dinas`
--
ALTER TABLE `uang_taxi_perjalanan_dinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
