-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Agu 2023 pada 09.16
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

--
-- Dumping data untuk tabel `batalkan_perintah_tugas`
--

INSERT INTO `batalkan_perintah_tugas` (`id`, `hash_id`, `nomor_surat`, `sppd_hash`, `alasan`, `nip_petugas`, `nama_petugas`, `jabatan_petugas`, `SKPD_petugas`, `nip_pegawai`, `nama_pegawai`, `jabatan_pegawai`, `SKPD_pegawai`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'JDJ5JDEwJDREQ0JZbkIxOTNFaE03LjVvcWFPY09oc2c3cWZtbm1TejRsbk5oUTJkcFRIcnFnc29GcmtH', '06.1/DKP3-KB//2023', 'JDJ5JDEwJG1wZTk1QUV1MjF4NlRkMVo3L0w1Mk9tWms0SnpBTXFWRU9IVFN5WWJGSERjSEx5Q05nRUt1', '', '', '', '', '', '', '', '', '', '2023-07-24 10:12:57', '2023-07-24 10:12:57', NULL),
(2, 'JDJ5JDEwJGdhMkk3bS9iL2tRZTZYeHlIUFlOSk9FVDVKc3NZTjVRUzBHNnlvdlNrY2dEeGUuWTh3cDJP', '06.02/DKP3-KB/VIII/2023', 'JDJ5JDEwJGx6NzJEVHczL0FsSjVab2tyLlVPYk9BY2FPVFltRXNRRG1ERVNjaGhMZWQ0MjllNDB0cDBL', '', '1600018001', 'Yadhi', 'Office Boy', 'abc123def', '1600018015', 'Muhammad Insan Kamil', 'Research and Development', 'abc123def', '2023-08-04 15:07:15', '2023-08-04 15:07:15', NULL);

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
  `nomor_SPPD` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `file_type` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kwitansi`
--

INSERT INTO `kwitansi` (`id`, `nomor_SPPD`, `file`, `file_type`, `user_id`, `created_at`, `updated_at`) VALUES
(4, '12.002/DKP3-KB/II/2023', 'monitoring_pulang_pisau2.pdf', '.pdf', 2, '2023-08-08 14:51:44', '2023-08-08 14:51:44');

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
-- Struktur dari tabel `pengganti_surat_perintah_perjalanan_dinas`
--

CREATE TABLE `pengganti_surat_perintah_perjalanan_dinas` (
  `id` int(11) NOT NULL,
  `hash_id` varchar(255) NOT NULL,
  `nomor_SPPD` varchar(100) NOT NULL,
  `nip_karyawan` varchar(100) NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `nip_karyawan_pengganti` varchar(100) NOT NULL,
  `nama_karyawan_pengganti` varchar(100) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengganti_surat_perintah_perjalanan_dinas`
--

INSERT INTO `pengganti_surat_perintah_perjalanan_dinas` (`id`, `hash_id`, `nomor_SPPD`, `nip_karyawan`, `nama_karyawan`, `nip_karyawan_pengganti`, `nama_karyawan_pengganti`, `file`, `created_at`, `updated_at`) VALUES
(1, '', '12.001/DKP3-KB/II/2023', '1600018015', 'Insan Kamil', '1600018016', 'Fitriana Puspa', '', '2023-08-04 13:11:41', '2023-08-04 13:11:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinces`
--

CREATE TABLE `provinces` (
  `id` char(2) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `provinces`
--

INSERT INTO `provinces` (`id`, `name`) VALUES
('11', 'ACEH'),
('12', 'SUMATERA UTARA'),
('13', 'SUMATERA BARAT'),
('14', 'RIAU'),
('15', 'JAMBI'),
('16', 'SUMATERA SELATAN'),
('17', 'BENGKULU'),
('18', 'LAMPUNG'),
('19', 'KEPULAUAN BANGKA BELITUNG'),
('21', 'KEPULAUAN RIAU'),
('31', 'DKI JAKARTA'),
('32', 'JAWA BARAT'),
('33', 'JAWA TENGAH'),
('34', 'DI YOGYAKARTA'),
('35', 'JAWA TIMUR'),
('36', 'BANTEN'),
('51', 'BALI'),
('52', 'NUSA TENGGARA BARAT'),
('53', 'NUSA TENGGARA TIMUR'),
('61', 'KALIMANTAN BARAT'),
('62', 'KALIMANTAN TENGAH'),
('63', 'KALIMANTAN SELATAN'),
('64', 'KALIMANTAN TIMUR'),
('65', 'KALIMANTAN UTARA'),
('71', 'SULAWESI UTARA'),
('72', 'SULAWESI TENGAH'),
('73', 'SULAWESI SELATAN'),
('74', 'SULAWESI TENGGARA'),
('75', 'GORONTALO'),
('76', 'SULAWESI BARAT'),
('81', 'MALUKU'),
('82', 'MALUKU UTARA'),
('91', 'PAPUA BARAT'),
('94', 'PAPUA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `regencies`
--

CREATE TABLE `regencies` (
  `id` char(4) NOT NULL,
  `province_id` char(2) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `regencies`
--

INSERT INTO `regencies` (`id`, `province_id`, `name`) VALUES
('1101', '11', 'KABUPATEN SIMEULUE'),
('1102', '11', 'KABUPATEN ACEH SINGKIL'),
('1103', '11', 'KABUPATEN ACEH SELATAN'),
('1104', '11', 'KABUPATEN ACEH TENGGARA'),
('1105', '11', 'KABUPATEN ACEH TIMUR'),
('1106', '11', 'KABUPATEN ACEH TENGAH'),
('1107', '11', 'KABUPATEN ACEH BARAT'),
('1108', '11', 'KABUPATEN ACEH BESAR'),
('1109', '11', 'KABUPATEN PIDIE'),
('1110', '11', 'KABUPATEN BIREUEN'),
('1111', '11', 'KABUPATEN ACEH UTARA'),
('1112', '11', 'KABUPATEN ACEH BARAT DAYA'),
('1113', '11', 'KABUPATEN GAYO LUES'),
('1114', '11', 'KABUPATEN ACEH TAMIANG'),
('1115', '11', 'KABUPATEN NAGAN RAYA'),
('1116', '11', 'KABUPATEN ACEH JAYA'),
('1117', '11', 'KABUPATEN BENER MERIAH'),
('1118', '11', 'KABUPATEN PIDIE JAYA'),
('1171', '11', 'KOTA BANDA ACEH'),
('1172', '11', 'KOTA SABANG'),
('1173', '11', 'KOTA LANGSA'),
('1174', '11', 'KOTA LHOKSEUMAWE'),
('1175', '11', 'KOTA SUBULUSSALAM'),
('1201', '12', 'KABUPATEN NIAS'),
('1202', '12', 'KABUPATEN MANDAILING NATAL'),
('1203', '12', 'KABUPATEN TAPANULI SELATAN'),
('1204', '12', 'KABUPATEN TAPANULI TENGAH'),
('1205', '12', 'KABUPATEN TAPANULI UTARA'),
('1206', '12', 'KABUPATEN TOBA SAMOSIR'),
('1207', '12', 'KABUPATEN LABUHAN BATU'),
('1208', '12', 'KABUPATEN ASAHAN'),
('1209', '12', 'KABUPATEN SIMALUNGUN'),
('1210', '12', 'KABUPATEN DAIRI'),
('1211', '12', 'KABUPATEN KARO'),
('1212', '12', 'KABUPATEN DELI SERDANG'),
('1213', '12', 'KABUPATEN LANGKAT'),
('1214', '12', 'KABUPATEN NIAS SELATAN'),
('1215', '12', 'KABUPATEN HUMBANG HASUNDUTAN'),
('1216', '12', 'KABUPATEN PAKPAK BHARAT'),
('1217', '12', 'KABUPATEN SAMOSIR'),
('1218', '12', 'KABUPATEN SERDANG BEDAGAI'),
('1219', '12', 'KABUPATEN BATU BARA'),
('1220', '12', 'KABUPATEN PADANG LAWAS UTARA'),
('1221', '12', 'KABUPATEN PADANG LAWAS'),
('1222', '12', 'KABUPATEN LABUHAN BATU SELATAN'),
('1223', '12', 'KABUPATEN LABUHAN BATU UTARA'),
('1224', '12', 'KABUPATEN NIAS UTARA'),
('1225', '12', 'KABUPATEN NIAS BARAT'),
('1271', '12', 'KOTA SIBOLGA'),
('1272', '12', 'KOTA TANJUNG BALAI'),
('1273', '12', 'KOTA PEMATANG SIANTAR'),
('1274', '12', 'KOTA TEBING TINGGI'),
('1275', '12', 'KOTA MEDAN'),
('1276', '12', 'KOTA BINJAI'),
('1277', '12', 'KOTA PADANGSIDIMPUAN'),
('1278', '12', 'KOTA GUNUNGSITOLI'),
('1301', '13', 'KABUPATEN KEPULAUAN MENTAWAI'),
('1302', '13', 'KABUPATEN PESISIR SELATAN'),
('1303', '13', 'KABUPATEN SOLOK'),
('1304', '13', 'KABUPATEN SIJUNJUNG'),
('1305', '13', 'KABUPATEN TANAH DATAR'),
('1306', '13', 'KABUPATEN PADANG PARIAMAN'),
('1307', '13', 'KABUPATEN AGAM'),
('1308', '13', 'KABUPATEN LIMA PULUH KOTA'),
('1309', '13', 'KABUPATEN PASAMAN'),
('1310', '13', 'KABUPATEN SOLOK SELATAN'),
('1311', '13', 'KABUPATEN DHARMASRAYA'),
('1312', '13', 'KABUPATEN PASAMAN BARAT'),
('1371', '13', 'KOTA PADANG'),
('1372', '13', 'KOTA SOLOK'),
('1373', '13', 'KOTA SAWAH LUNTO'),
('1374', '13', 'KOTA PADANG PANJANG'),
('1375', '13', 'KOTA BUKITTINGGI'),
('1376', '13', 'KOTA PAYAKUMBUH'),
('1377', '13', 'KOTA PARIAMAN'),
('1401', '14', 'KABUPATEN KUANTAN SINGINGI'),
('1402', '14', 'KABUPATEN INDRAGIRI HULU'),
('1403', '14', 'KABUPATEN INDRAGIRI HILIR'),
('1404', '14', 'KABUPATEN PELALAWAN'),
('1405', '14', 'KABUPATEN S I A K'),
('1406', '14', 'KABUPATEN KAMPAR'),
('1407', '14', 'KABUPATEN ROKAN HULU'),
('1408', '14', 'KABUPATEN BENGKALIS'),
('1409', '14', 'KABUPATEN ROKAN HILIR'),
('1410', '14', 'KABUPATEN KEPULAUAN MERANTI'),
('1471', '14', 'KOTA PEKANBARU'),
('1473', '14', 'KOTA D U M A I'),
('1501', '15', 'KABUPATEN KERINCI'),
('1502', '15', 'KABUPATEN MERANGIN'),
('1503', '15', 'KABUPATEN SAROLANGUN'),
('1504', '15', 'KABUPATEN BATANG HARI'),
('1505', '15', 'KABUPATEN MUARO JAMBI'),
('1506', '15', 'KABUPATEN TANJUNG JABUNG TIMUR'),
('1507', '15', 'KABUPATEN TANJUNG JABUNG BARAT'),
('1508', '15', 'KABUPATEN TEBO'),
('1509', '15', 'KABUPATEN BUNGO'),
('1571', '15', 'KOTA JAMBI'),
('1572', '15', 'KOTA SUNGAI PENUH'),
('1601', '16', 'KABUPATEN OGAN KOMERING ULU'),
('1602', '16', 'KABUPATEN OGAN KOMERING ILIR'),
('1603', '16', 'KABUPATEN MUARA ENIM'),
('1604', '16', 'KABUPATEN LAHAT'),
('1605', '16', 'KABUPATEN MUSI RAWAS'),
('1606', '16', 'KABUPATEN MUSI BANYUASIN'),
('1607', '16', 'KABUPATEN BANYU ASIN'),
('1608', '16', 'KABUPATEN OGAN KOMERING ULU SELATAN'),
('1609', '16', 'KABUPATEN OGAN KOMERING ULU TIMUR'),
('1610', '16', 'KABUPATEN OGAN ILIR'),
('1611', '16', 'KABUPATEN EMPAT LAWANG'),
('1612', '16', 'KABUPATEN PENUKAL ABAB LEMATANG ILIR'),
('1613', '16', 'KABUPATEN MUSI RAWAS UTARA'),
('1671', '16', 'KOTA PALEMBANG'),
('1672', '16', 'KOTA PRABUMULIH'),
('1673', '16', 'KOTA PAGAR ALAM'),
('1674', '16', 'KOTA LUBUKLINGGAU'),
('1701', '17', 'KABUPATEN BENGKULU SELATAN'),
('1702', '17', 'KABUPATEN REJANG LEBONG'),
('1703', '17', 'KABUPATEN BENGKULU UTARA'),
('1704', '17', 'KABUPATEN KAUR'),
('1705', '17', 'KABUPATEN SELUMA'),
('1706', '17', 'KABUPATEN MUKOMUKO'),
('1707', '17', 'KABUPATEN LEBONG'),
('1708', '17', 'KABUPATEN KEPAHIANG'),
('1709', '17', 'KABUPATEN BENGKULU TENGAH'),
('1771', '17', 'KOTA BENGKULU'),
('1801', '18', 'KABUPATEN LAMPUNG BARAT'),
('1802', '18', 'KABUPATEN TANGGAMUS'),
('1803', '18', 'KABUPATEN LAMPUNG SELATAN'),
('1804', '18', 'KABUPATEN LAMPUNG TIMUR'),
('1805', '18', 'KABUPATEN LAMPUNG TENGAH'),
('1806', '18', 'KABUPATEN LAMPUNG UTARA'),
('1807', '18', 'KABUPATEN WAY KANAN'),
('1808', '18', 'KABUPATEN TULANGBAWANG'),
('1809', '18', 'KABUPATEN PESAWARAN'),
('1810', '18', 'KABUPATEN PRINGSEWU'),
('1811', '18', 'KABUPATEN MESUJI'),
('1812', '18', 'KABUPATEN TULANG BAWANG BARAT'),
('1813', '18', 'KABUPATEN PESISIR BARAT'),
('1871', '18', 'KOTA BANDAR LAMPUNG'),
('1872', '18', 'KOTA METRO'),
('1901', '19', 'KABUPATEN BANGKA'),
('1902', '19', 'KABUPATEN BELITUNG'),
('1903', '19', 'KABUPATEN BANGKA BARAT'),
('1904', '19', 'KABUPATEN BANGKA TENGAH'),
('1905', '19', 'KABUPATEN BANGKA SELATAN'),
('1906', '19', 'KABUPATEN BELITUNG TIMUR'),
('1971', '19', 'KOTA PANGKAL PINANG'),
('2101', '21', 'KABUPATEN KARIMUN'),
('2102', '21', 'KABUPATEN BINTAN'),
('2103', '21', 'KABUPATEN NATUNA'),
('2104', '21', 'KABUPATEN LINGGA'),
('2105', '21', 'KABUPATEN KEPULAUAN ANAMBAS'),
('2171', '21', 'KOTA B A T A M'),
('2172', '21', 'KOTA TANJUNG PINANG'),
('3101', '31', 'KABUPATEN KEPULAUAN SERIBU'),
('3171', '31', 'KOTA JAKARTA SELATAN'),
('3172', '31', 'KOTA JAKARTA TIMUR'),
('3173', '31', 'KOTA JAKARTA PUSAT'),
('3174', '31', 'KOTA JAKARTA BARAT'),
('3175', '31', 'KOTA JAKARTA UTARA'),
('3201', '32', 'KABUPATEN BOGOR'),
('3202', '32', 'KABUPATEN SUKABUMI'),
('3203', '32', 'KABUPATEN CIANJUR'),
('3204', '32', 'KABUPATEN BANDUNG'),
('3205', '32', 'KABUPATEN GARUT'),
('3206', '32', 'KABUPATEN TASIKMALAYA'),
('3207', '32', 'KABUPATEN CIAMIS'),
('3208', '32', 'KABUPATEN KUNINGAN'),
('3209', '32', 'KABUPATEN CIREBON'),
('3210', '32', 'KABUPATEN MAJALENGKA'),
('3211', '32', 'KABUPATEN SUMEDANG'),
('3212', '32', 'KABUPATEN INDRAMAYU'),
('3213', '32', 'KABUPATEN SUBANG'),
('3214', '32', 'KABUPATEN PURWAKARTA'),
('3215', '32', 'KABUPATEN KARAWANG'),
('3216', '32', 'KABUPATEN BEKASI'),
('3217', '32', 'KABUPATEN BANDUNG BARAT'),
('3218', '32', 'KABUPATEN PANGANDARAN'),
('3271', '32', 'KOTA BOGOR'),
('3272', '32', 'KOTA SUKABUMI'),
('3273', '32', 'KOTA BANDUNG'),
('3274', '32', 'KOTA CIREBON'),
('3275', '32', 'KOTA BEKASI'),
('3276', '32', 'KOTA DEPOK'),
('3277', '32', 'KOTA CIMAHI'),
('3278', '32', 'KOTA TASIKMALAYA'),
('3279', '32', 'KOTA BANJAR'),
('3301', '33', 'KABUPATEN CILACAP'),
('3302', '33', 'KABUPATEN BANYUMAS'),
('3303', '33', 'KABUPATEN PURBALINGGA'),
('3304', '33', 'KABUPATEN BANJARNEGARA'),
('3305', '33', 'KABUPATEN KEBUMEN'),
('3306', '33', 'KABUPATEN PURWOREJO'),
('3307', '33', 'KABUPATEN WONOSOBO'),
('3308', '33', 'KABUPATEN MAGELANG'),
('3309', '33', 'KABUPATEN BOYOLALI'),
('3310', '33', 'KABUPATEN KLATEN'),
('3311', '33', 'KABUPATEN SUKOHARJO'),
('3312', '33', 'KABUPATEN WONOGIRI'),
('3313', '33', 'KABUPATEN KARANGANYAR'),
('3314', '33', 'KABUPATEN SRAGEN'),
('3315', '33', 'KABUPATEN GROBOGAN'),
('3316', '33', 'KABUPATEN BLORA'),
('3317', '33', 'KABUPATEN REMBANG'),
('3318', '33', 'KABUPATEN PATI'),
('3319', '33', 'KABUPATEN KUDUS'),
('3320', '33', 'KABUPATEN JEPARA'),
('3321', '33', 'KABUPATEN DEMAK'),
('3322', '33', 'KABUPATEN SEMARANG'),
('3323', '33', 'KABUPATEN TEMANGGUNG'),
('3324', '33', 'KABUPATEN KENDAL'),
('3325', '33', 'KABUPATEN BATANG'),
('3326', '33', 'KABUPATEN PEKALONGAN'),
('3327', '33', 'KABUPATEN PEMALANG'),
('3328', '33', 'KABUPATEN TEGAL'),
('3329', '33', 'KABUPATEN BREBES'),
('3371', '33', 'KOTA MAGELANG'),
('3372', '33', 'KOTA SURAKARTA'),
('3373', '33', 'KOTA SALATIGA'),
('3374', '33', 'KOTA SEMARANG'),
('3375', '33', 'KOTA PEKALONGAN'),
('3376', '33', 'KOTA TEGAL'),
('3401', '34', 'KABUPATEN KULON PROGO'),
('3402', '34', 'KABUPATEN BANTUL'),
('3403', '34', 'KABUPATEN GUNUNG KIDUL'),
('3404', '34', 'KABUPATEN SLEMAN'),
('3471', '34', 'KOTA YOGYAKARTA'),
('3501', '35', 'KABUPATEN PACITAN'),
('3502', '35', 'KABUPATEN PONOROGO'),
('3503', '35', 'KABUPATEN TRENGGALEK'),
('3504', '35', 'KABUPATEN TULUNGAGUNG'),
('3505', '35', 'KABUPATEN BLITAR'),
('3506', '35', 'KABUPATEN KEDIRI'),
('3507', '35', 'KABUPATEN MALANG'),
('3508', '35', 'KABUPATEN LUMAJANG'),
('3509', '35', 'KABUPATEN JEMBER'),
('3510', '35', 'KABUPATEN BANYUWANGI'),
('3511', '35', 'KABUPATEN BONDOWOSO'),
('3512', '35', 'KABUPATEN SITUBONDO'),
('3513', '35', 'KABUPATEN PROBOLINGGO'),
('3514', '35', 'KABUPATEN PASURUAN'),
('3515', '35', 'KABUPATEN SIDOARJO'),
('3516', '35', 'KABUPATEN MOJOKERTO'),
('3517', '35', 'KABUPATEN JOMBANG'),
('3518', '35', 'KABUPATEN NGANJUK'),
('3519', '35', 'KABUPATEN MADIUN'),
('3520', '35', 'KABUPATEN MAGETAN'),
('3521', '35', 'KABUPATEN NGAWI'),
('3522', '35', 'KABUPATEN BOJONEGORO'),
('3523', '35', 'KABUPATEN TUBAN'),
('3524', '35', 'KABUPATEN LAMONGAN'),
('3525', '35', 'KABUPATEN GRESIK'),
('3526', '35', 'KABUPATEN BANGKALAN'),
('3527', '35', 'KABUPATEN SAMPANG'),
('3528', '35', 'KABUPATEN PAMEKASAN'),
('3529', '35', 'KABUPATEN SUMENEP'),
('3571', '35', 'KOTA KEDIRI'),
('3572', '35', 'KOTA BLITAR'),
('3573', '35', 'KOTA MALANG'),
('3574', '35', 'KOTA PROBOLINGGO'),
('3575', '35', 'KOTA PASURUAN'),
('3576', '35', 'KOTA MOJOKERTO'),
('3577', '35', 'KOTA MADIUN'),
('3578', '35', 'KOTA SURABAYA'),
('3579', '35', 'KOTA BATU'),
('3601', '36', 'KABUPATEN PANDEGLANG'),
('3602', '36', 'KABUPATEN LEBAK'),
('3603', '36', 'KABUPATEN TANGERANG'),
('3604', '36', 'KABUPATEN SERANG'),
('3671', '36', 'KOTA TANGERANG'),
('3672', '36', 'KOTA CILEGON'),
('3673', '36', 'KOTA SERANG'),
('3674', '36', 'KOTA TANGERANG SELATAN'),
('5101', '51', 'KABUPATEN JEMBRANA'),
('5102', '51', 'KABUPATEN TABANAN'),
('5103', '51', 'KABUPATEN BADUNG'),
('5104', '51', 'KABUPATEN GIANYAR'),
('5105', '51', 'KABUPATEN KLUNGKUNG'),
('5106', '51', 'KABUPATEN BANGLI'),
('5107', '51', 'KABUPATEN KARANG ASEM'),
('5108', '51', 'KABUPATEN BULELENG'),
('5171', '51', 'KOTA DENPASAR'),
('5201', '52', 'KABUPATEN LOMBOK BARAT'),
('5202', '52', 'KABUPATEN LOMBOK TENGAH'),
('5203', '52', 'KABUPATEN LOMBOK TIMUR'),
('5204', '52', 'KABUPATEN SUMBAWA'),
('5205', '52', 'KABUPATEN DOMPU'),
('5206', '52', 'KABUPATEN BIMA'),
('5207', '52', 'KABUPATEN SUMBAWA BARAT'),
('5208', '52', 'KABUPATEN LOMBOK UTARA'),
('5271', '52', 'KOTA MATARAM'),
('5272', '52', 'KOTA BIMA'),
('5301', '53', 'KABUPATEN SUMBA BARAT'),
('5302', '53', 'KABUPATEN SUMBA TIMUR'),
('5303', '53', 'KABUPATEN KUPANG'),
('5304', '53', 'KABUPATEN TIMOR TENGAH SELATAN'),
('5305', '53', 'KABUPATEN TIMOR TENGAH UTARA'),
('5306', '53', 'KABUPATEN BELU'),
('5307', '53', 'KABUPATEN ALOR'),
('5308', '53', 'KABUPATEN LEMBATA'),
('5309', '53', 'KABUPATEN FLORES TIMUR'),
('5310', '53', 'KABUPATEN SIKKA'),
('5311', '53', 'KABUPATEN ENDE'),
('5312', '53', 'KABUPATEN NGADA'),
('5313', '53', 'KABUPATEN MANGGARAI'),
('5314', '53', 'KABUPATEN ROTE NDAO'),
('5315', '53', 'KABUPATEN MANGGARAI BARAT'),
('5316', '53', 'KABUPATEN SUMBA TENGAH'),
('5317', '53', 'KABUPATEN SUMBA BARAT DAYA'),
('5318', '53', 'KABUPATEN NAGEKEO'),
('5319', '53', 'KABUPATEN MANGGARAI TIMUR'),
('5320', '53', 'KABUPATEN SABU RAIJUA'),
('5321', '53', 'KABUPATEN MALAKA'),
('5371', '53', 'KOTA KUPANG'),
('6101', '61', 'KABUPATEN SAMBAS'),
('6102', '61', 'KABUPATEN BENGKAYANG'),
('6103', '61', 'KABUPATEN LANDAK'),
('6104', '61', 'KABUPATEN MEMPAWAH'),
('6105', '61', 'KABUPATEN SANGGAU'),
('6106', '61', 'KABUPATEN KETAPANG'),
('6107', '61', 'KABUPATEN SINTANG'),
('6108', '61', 'KABUPATEN KAPUAS HULU'),
('6109', '61', 'KABUPATEN SEKADAU'),
('6110', '61', 'KABUPATEN MELAWI'),
('6111', '61', 'KABUPATEN KAYONG UTARA'),
('6112', '61', 'KABUPATEN KUBU RAYA'),
('6171', '61', 'KOTA PONTIANAK'),
('6172', '61', 'KOTA SINGKAWANG'),
('6201', '62', 'KABUPATEN KOTAWARINGIN BARAT'),
('6202', '62', 'KABUPATEN KOTAWARINGIN TIMUR'),
('6203', '62', 'KABUPATEN KAPUAS'),
('6204', '62', 'KABUPATEN BARITO SELATAN'),
('6205', '62', 'KABUPATEN BARITO UTARA'),
('6206', '62', 'KABUPATEN SUKAMARA'),
('6207', '62', 'KABUPATEN LAMANDAU'),
('6208', '62', 'KABUPATEN SERUYAN'),
('6209', '62', 'KABUPATEN KATINGAN'),
('6210', '62', 'KABUPATEN PULANG PISAU'),
('6211', '62', 'KABUPATEN GUNUNG MAS'),
('6212', '62', 'KABUPATEN BARITO TIMUR'),
('6213', '62', 'KABUPATEN MURUNG RAYA'),
('6271', '62', 'KOTA PALANGKA RAYA'),
('6301', '63', 'KABUPATEN TANAH LAUT'),
('6302', '63', 'KABUPATEN KOTA BARU'),
('6303', '63', 'KABUPATEN BANJAR'),
('6304', '63', 'KABUPATEN BARITO KUALA'),
('6305', '63', 'KABUPATEN TAPIN'),
('6306', '63', 'KABUPATEN HULU SUNGAI SELATAN'),
('6307', '63', 'KABUPATEN HULU SUNGAI TENGAH'),
('6308', '63', 'KABUPATEN HULU SUNGAI UTARA'),
('6309', '63', 'KABUPATEN TABALONG'),
('6310', '63', 'KABUPATEN TANAH BUMBU'),
('6311', '63', 'KABUPATEN BALANGAN'),
('6371', '63', 'KOTA BANJARMASIN'),
('6372', '63', 'KOTA BANJAR BARU'),
('6401', '64', 'KABUPATEN PASER'),
('6402', '64', 'KABUPATEN KUTAI BARAT'),
('6403', '64', 'KABUPATEN KUTAI KARTANEGARA'),
('6404', '64', 'KABUPATEN KUTAI TIMUR'),
('6405', '64', 'KABUPATEN BERAU'),
('6409', '64', 'KABUPATEN PENAJAM PASER UTARA'),
('6411', '64', 'KABUPATEN MAHAKAM HULU'),
('6471', '64', 'KOTA BALIKPAPAN'),
('6472', '64', 'KOTA SAMARINDA'),
('6474', '64', 'KOTA BONTANG'),
('6501', '65', 'KABUPATEN MALINAU'),
('6502', '65', 'KABUPATEN BULUNGAN'),
('6503', '65', 'KABUPATEN TANA TIDUNG'),
('6504', '65', 'KABUPATEN NUNUKAN'),
('6571', '65', 'KOTA TARAKAN'),
('7101', '71', 'KABUPATEN BOLAANG MONGONDOW'),
('7102', '71', 'KABUPATEN MINAHASA'),
('7103', '71', 'KABUPATEN KEPULAUAN SANGIHE'),
('7104', '71', 'KABUPATEN KEPULAUAN TALAUD'),
('7105', '71', 'KABUPATEN MINAHASA SELATAN'),
('7106', '71', 'KABUPATEN MINAHASA UTARA'),
('7107', '71', 'KABUPATEN BOLAANG MONGONDOW UTARA'),
('7108', '71', 'KABUPATEN SIAU TAGULANDANG BIARO'),
('7109', '71', 'KABUPATEN MINAHASA TENGGARA'),
('7110', '71', 'KABUPATEN BOLAANG MONGONDOW SELATAN'),
('7111', '71', 'KABUPATEN BOLAANG MONGONDOW TIMUR'),
('7171', '71', 'KOTA MANADO'),
('7172', '71', 'KOTA BITUNG'),
('7173', '71', 'KOTA TOMOHON'),
('7174', '71', 'KOTA KOTAMOBAGU'),
('7201', '72', 'KABUPATEN BANGGAI KEPULAUAN'),
('7202', '72', 'KABUPATEN BANGGAI'),
('7203', '72', 'KABUPATEN MOROWALI'),
('7204', '72', 'KABUPATEN POSO'),
('7205', '72', 'KABUPATEN DONGGALA'),
('7206', '72', 'KABUPATEN TOLI-TOLI'),
('7207', '72', 'KABUPATEN BUOL'),
('7208', '72', 'KABUPATEN PARIGI MOUTONG'),
('7209', '72', 'KABUPATEN TOJO UNA-UNA'),
('7210', '72', 'KABUPATEN SIGI'),
('7211', '72', 'KABUPATEN BANGGAI LAUT'),
('7212', '72', 'KABUPATEN MOROWALI UTARA'),
('7271', '72', 'KOTA PALU'),
('7301', '73', 'KABUPATEN KEPULAUAN SELAYAR'),
('7302', '73', 'KABUPATEN BULUKUMBA'),
('7303', '73', 'KABUPATEN BANTAENG'),
('7304', '73', 'KABUPATEN JENEPONTO'),
('7305', '73', 'KABUPATEN TAKALAR'),
('7306', '73', 'KABUPATEN GOWA'),
('7307', '73', 'KABUPATEN SINJAI'),
('7308', '73', 'KABUPATEN MAROS'),
('7309', '73', 'KABUPATEN PANGKAJENE DAN KEPULAUAN'),
('7310', '73', 'KABUPATEN BARRU'),
('7311', '73', 'KABUPATEN BONE'),
('7312', '73', 'KABUPATEN SOPPENG'),
('7313', '73', 'KABUPATEN WAJO'),
('7314', '73', 'KABUPATEN SIDENRENG RAPPANG'),
('7315', '73', 'KABUPATEN PINRANG'),
('7316', '73', 'KABUPATEN ENREKANG'),
('7317', '73', 'KABUPATEN LUWU'),
('7318', '73', 'KABUPATEN TANA TORAJA'),
('7322', '73', 'KABUPATEN LUWU UTARA'),
('7325', '73', 'KABUPATEN LUWU TIMUR'),
('7326', '73', 'KABUPATEN TORAJA UTARA'),
('7371', '73', 'KOTA MAKASSAR'),
('7372', '73', 'KOTA PAREPARE'),
('7373', '73', 'KOTA PALOPO'),
('7401', '74', 'KABUPATEN BUTON'),
('7402', '74', 'KABUPATEN MUNA'),
('7403', '74', 'KABUPATEN KONAWE'),
('7404', '74', 'KABUPATEN KOLAKA'),
('7405', '74', 'KABUPATEN KONAWE SELATAN'),
('7406', '74', 'KABUPATEN BOMBANA'),
('7407', '74', 'KABUPATEN WAKATOBI'),
('7408', '74', 'KABUPATEN KOLAKA UTARA'),
('7409', '74', 'KABUPATEN BUTON UTARA'),
('7410', '74', 'KABUPATEN KONAWE UTARA'),
('7411', '74', 'KABUPATEN KOLAKA TIMUR'),
('7412', '74', 'KABUPATEN KONAWE KEPULAUAN'),
('7413', '74', 'KABUPATEN MUNA BARAT'),
('7414', '74', 'KABUPATEN BUTON TENGAH'),
('7415', '74', 'KABUPATEN BUTON SELATAN'),
('7471', '74', 'KOTA KENDARI'),
('7472', '74', 'KOTA BAUBAU'),
('7501', '75', 'KABUPATEN BOALEMO'),
('7502', '75', 'KABUPATEN GORONTALO'),
('7503', '75', 'KABUPATEN POHUWATO'),
('7504', '75', 'KABUPATEN BONE BOLANGO'),
('7505', '75', 'KABUPATEN GORONTALO UTARA'),
('7571', '75', 'KOTA GORONTALO'),
('7601', '76', 'KABUPATEN MAJENE'),
('7602', '76', 'KABUPATEN POLEWALI MANDAR'),
('7603', '76', 'KABUPATEN MAMASA'),
('7604', '76', 'KABUPATEN MAMUJU'),
('7605', '76', 'KABUPATEN MAMUJU UTARA'),
('7606', '76', 'KABUPATEN MAMUJU TENGAH'),
('8101', '81', 'KABUPATEN MALUKU TENGGARA BARAT'),
('8102', '81', 'KABUPATEN MALUKU TENGGARA'),
('8103', '81', 'KABUPATEN MALUKU TENGAH'),
('8104', '81', 'KABUPATEN BURU'),
('8105', '81', 'KABUPATEN KEPULAUAN ARU'),
('8106', '81', 'KABUPATEN SERAM BAGIAN BARAT'),
('8107', '81', 'KABUPATEN SERAM BAGIAN TIMUR'),
('8108', '81', 'KABUPATEN MALUKU BARAT DAYA'),
('8109', '81', 'KABUPATEN BURU SELATAN'),
('8171', '81', 'KOTA AMBON'),
('8172', '81', 'KOTA TUAL'),
('8201', '82', 'KABUPATEN HALMAHERA BARAT'),
('8202', '82', 'KABUPATEN HALMAHERA TENGAH'),
('8203', '82', 'KABUPATEN KEPULAUAN SULA'),
('8204', '82', 'KABUPATEN HALMAHERA SELATAN'),
('8205', '82', 'KABUPATEN HALMAHERA UTARA'),
('8206', '82', 'KABUPATEN HALMAHERA TIMUR'),
('8207', '82', 'KABUPATEN PULAU MOROTAI'),
('8208', '82', 'KABUPATEN PULAU TALIABU'),
('8271', '82', 'KOTA TERNATE'),
('8272', '82', 'KOTA TIDORE KEPULAUAN'),
('9101', '91', 'KABUPATEN FAKFAK'),
('9102', '91', 'KABUPATEN KAIMANA'),
('9103', '91', 'KABUPATEN TELUK WONDAMA'),
('9104', '91', 'KABUPATEN TELUK BINTUNI'),
('9105', '91', 'KABUPATEN MANOKWARI'),
('9106', '91', 'KABUPATEN SORONG SELATAN'),
('9107', '91', 'KABUPATEN SORONG'),
('9108', '91', 'KABUPATEN RAJA AMPAT'),
('9109', '91', 'KABUPATEN TAMBRAUW'),
('9110', '91', 'KABUPATEN MAYBRAT'),
('9111', '91', 'KABUPATEN MANOKWARI SELATAN'),
('9112', '91', 'KABUPATEN PEGUNUNGAN ARFAK'),
('9171', '91', 'KOTA SORONG'),
('9401', '94', 'KABUPATEN MERAUKE'),
('9402', '94', 'KABUPATEN JAYAWIJAYA'),
('9403', '94', 'KABUPATEN JAYAPURA'),
('9404', '94', 'KABUPATEN NABIRE'),
('9408', '94', 'KABUPATEN KEPULAUAN YAPEN'),
('9409', '94', 'KABUPATEN BIAK NUMFOR'),
('9410', '94', 'KABUPATEN PANIAI'),
('9411', '94', 'KABUPATEN PUNCAK JAYA'),
('9412', '94', 'KABUPATEN MIMIKA'),
('9413', '94', 'KABUPATEN BOVEN DIGOEL'),
('9414', '94', 'KABUPATEN MAPPI'),
('9415', '94', 'KABUPATEN ASMAT'),
('9416', '94', 'KABUPATEN YAHUKIMO'),
('9417', '94', 'KABUPATEN PEGUNUNGAN BINTANG'),
('9418', '94', 'KABUPATEN TOLIKARA'),
('9419', '94', 'KABUPATEN SARMI'),
('9420', '94', 'KABUPATEN KEEROM'),
('9426', '94', 'KABUPATEN WAROPEN'),
('9427', '94', 'KABUPATEN SUPIORI'),
('9428', '94', 'KABUPATEN MAMBERAMO RAYA'),
('9429', '94', 'KABUPATEN NDUGA'),
('9430', '94', 'KABUPATEN LANNY JAYA'),
('9431', '94', 'KABUPATEN MAMBERAMO TENGAH'),
('9432', '94', 'KABUPATEN YALIMO'),
('9433', '94', 'KABUPATEN PUNCAK'),
('9434', '94', 'KABUPATEN DOGIYAI'),
('9435', '94', 'KABUPATEN INTAN JAYA'),
('9436', '94', 'KABUPATEN DEIYAI'),
('9471', '94', 'KOTA JAYAPURA');

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
(1, 'JDJ5JDEwJG1wZTk1QUV1MjF4NlRkMVo3L0w1Mk9tWms0SnpBTXFWRU9IVFN5WWJGSERjSEx5Q05nRUt1', '12.001/DKP3-KB/II/2023', 'sdfadfa', '1600018015', 'asdfadsfa', 'asdfasdfsadfa', 'asdfad', 'asdfadfsa', 'asdfasdf', 'fsadfa', 'sadfsadf', 'asdfadf', 'sdfadfa', 'sfasdf', '12312', '2023-02-12', '2023-02-15', '1221', 'fasdfaweraewr', '', '', 'asdfsadasdf', 'Banjarmasin', 'Singapura', NULL, NULL, NULL, NULL, -1, '2023-02-01 10:58:58', '2023-02-01 10:58:58'),
(2, 'JDJ5JDEwJGx6NzJEVHczL0FsSjVab2tyLlVPYk9BY2FPVFltRXNRRG1ERVNjaGhMZWQ0MjllNDB0cDBL', '12.002/DKP3-KB/II/2023', 'Kambing Mawon', '1600018015', 'Muhammad Insan Kamil', 'Jendral', 'Golkar', 'Research and Development', 'IT', 'Ga ngerti', 'Healing', 'Pesawat', 'Banjarmasin', 'Singapura', '5', '2023-02-19', '2023-02-24', '50000', 'Rupiah', '', '', 'Aku Cinta Rupiah', 'Banjarmasin', 'Singapura', '', '0000-00-00', '', '0000-00-00', -1, '2023-02-19 17:33:39', '2023-02-19 17:33:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_perintah_tugas`
--

CREATE TABLE `surat_perintah_tugas` (
  `id` int(11) NOT NULL,
  `hash_id` varchar(255) NOT NULL,
  `nomor_SPPD` varchar(100) NOT NULL,
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

INSERT INTO `surat_perintah_tugas` (`id`, `hash_id`, `nomor_SPPD`, `nip_karyawan`, `nama_karyawan`, `pangkat`, `golongan`, `jabatan`, `rangka_acara`, `tujuan`, `tanggal_kegiatan`, `atas_beban`, `status`, `created_at`, `updated_at`) VALUES
(4, 'JDJ5JDEwJHBxQzJ5dWh0VnpxSW9SbVV1c0xJQ3VGWWQzbW13OHVwV3M0eUtNR081aTdlN1ZQUHVuZ2dL', '12.1/DKP3-KB//2023', '1600018015', 'Muhammad Insan Kamil', 'Jendral', 'Golkar', 'Research and Development', 'Ulang tahun Barbie', 'Ga jelas', '21 April 2023', 'Ringan koq', 1, '2023-08-16 14:13:13', '2023-08-16 14:13:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tolak_surat_perintah_perjalanan_dinas`
--

CREATE TABLE `tolak_surat_perintah_perjalanan_dinas` (
  `id` int(11) NOT NULL,
  `hash_id` varchar(100) NOT NULL,
  `alasan` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Indeks untuk tabel `pengganti_surat_perintah_perjalanan_dinas`
--
ALTER TABLE `pengganti_surat_perintah_perjalanan_dinas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `regencies`
--
ALTER TABLE `regencies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `regencies_province_id_index` (`province_id`);

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
-- Indeks untuk tabel `tolak_surat_perintah_perjalanan_dinas`
--
ALTER TABLE `tolak_surat_perintah_perjalanan_dinas`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `laporan_perjalanan_dinas`
--
ALTER TABLE `laporan_perjalanan_dinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengganti_surat_perintah_perjalanan_dinas`
--
ALTER TABLE `pengganti_surat_perintah_perjalanan_dinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tolak_surat_perintah_perjalanan_dinas`
--
ALTER TABLE `tolak_surat_perintah_perjalanan_dinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `regencies`
--
ALTER TABLE `regencies`
  ADD CONSTRAINT `regencies_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
