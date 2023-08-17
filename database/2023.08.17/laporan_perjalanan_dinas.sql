-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Agu 2023 pada 12.57
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
  `skor_penilaian` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `laporan_perjalanan_dinas`
--

INSERT INTO `laporan_perjalanan_dinas` (`id`, `hash_id`, `user_id`, `penerima_surat`, `pengirim_surat`, `tanggal_kegiatan`, `perihal`, `kegiatan`, `waktu_pelaksanaan`, `tempat_pelaksanaan`, `poin_dasar`, `poin_hasil_kegiatan`, `poin_kesimpulan_saran`, `nama_petugas`, `NIP_petugas`, `NIP_karyawan`, `nama_karyawan`, `status`, `skor_penilaian`, `created_at`, `updated_at`) VALUES
(3, 'JDJ5JDEwJHdzLjdoVk5wNEtWZDF1QzZDUjhkZXU5ZG9zVlFmLnRZRXhpU0V6Y1RGMDYyQ0ZJT29OeHNX', 2, 'Raja Kingdom', 'Insan kamil', '2023-02-14 00:00:00', 'Nyoba aja', 'percobaan pengajuan laporan perjalanan dinas', '28 Desember 2023', 'Rumah Makan Kaganangan', 'Tidak punya hal mendasar', 'Tidak ada poin hasil kegiatan', 'cukup tau aja', NULL, NULL, '1600018015', 'Muhammad Insan Kamil', -1, 0, '2023-02-14 19:31:50', '2023-02-14 19:31:50'),
(4, 'JDJ5JDEwJEJzUXRhREpmNWVMLmlPTTkwOExZTHUyVjk3YzRyUnpiMEg1dXpLdUtLMEJiS3NWcE1yVVMy', 2, 'Kepala Dinas', 'Eike Sendiri', '2023-08-18 00:00:00', 'Healing', 'Liburan', 'Siang Hari', 'Bali', 'Tercapainya kesenangan untuk meningkatnya mood', 'stress released', 'perbanyak liburan', NULL, NULL, '1600018015', 'Muhammad Insan Kamil', 1, 4, '2023-08-17 13:34:12', '2023-08-17 13:34:12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laporan_perjalanan_dinas`
--
ALTER TABLE `laporan_perjalanan_dinas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laporan_perjalanan_dinas`
--
ALTER TABLE `laporan_perjalanan_dinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
