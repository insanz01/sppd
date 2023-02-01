-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Feb 2023 pada 02.46
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
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `biaya_perjalanan_dinas`
--

INSERT INTO `biaya_perjalanan_dinas` (`id`, `hash_id`, `file_dokumen`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'JDJ5JDEwJGdaakV5WUdYU2M1WW9ZQzhpUjM0UHVaa1l5bUZqSi5QejZTbkQuNFFBRkp2alA5NDAuMXB5', 'template_bpd1.xlsx', 2, 0, '2023-01-31 00:34:17', '2023-01-31 00:34:17');

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
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `keterangan` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

--
-- Dumping data untuk tabel `surat_perintah_tugas`
--

INSERT INTO `surat_perintah_tugas` (`id`, `hash_id`, `nomor_sppd`, `nip_karyawan`, `nama_karyawan`, `pangkat`, `golongan`, `jabatan`, `rangka_acara`, `tujuan`, `tanggal_kegiatan`, `atas_beban`, `created_at`, `updated_at`) VALUES
(1, 'JDJ5JDEwJEdiNUZWUFQ3Y25vZ2VGMWVHL2xMSi4ua2YyZE0zZXllSUJyUkJMU0xubENUZUFUTG9SMFd1', '123123', '1231312', 'asd', 'Bintang Lima', 'O+', 'Pengangguran', 'Asdasdasd', 'asdasdad', '25. 26, 27 Agustus', 'Ente Beban', '2023-01-25 00:20:25', '2023-01-25 00:20:25');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `laporan_perjalanan_dinas`
--
ALTER TABLE `laporan_perjalanan_dinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
