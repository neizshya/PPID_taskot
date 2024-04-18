-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Apr 2024 pada 09.25
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_ppid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `dok` varchar(255) NOT NULL,
  `layanan` varchar(255) NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `files`
--

INSERT INTO `files` (`id`, `judul`, `info`, `dok`, `layanan`, `instansi`, `file`, `created_at`, `updated_at`) VALUES
(6, 'ALAMAT LENGKAP PEMERINTAH KOTA TASIKMALAYA', 'Informasi setiap saat', 'Profil Badan Publik', 'PPID Utama', 'Diskominfo Kota Tasikmalaya', 'file/1707278121_SEKRETARIAT DAERAH.pdf', '2024-02-06 20:55:21', '2024-02-06 20:55:21'),
(7, 'Tata Cara Permohonan Informasi', 'Informasi setiap saat', 'Profil Badan Publik', 'PPID Pembantu', 'Dinas Kesehatan Kota Tasikmalaya', NULL, '2024-04-16 23:59:31', '2024-04-16 23:59:31'),
(8, 'Tata Cara Permohonan Informasi', 'Informasi setiap saat', 'Profil Badan Publik', 'PPID Pembantu', 'BPKAD Kota Tasikmalaya', NULL, '2024-04-17 01:10:39', '2024-04-17 01:10:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi_onlines`
--

CREATE TABLE `informasi_onlines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_reg` varchar(255) NOT NULL,
  `tipe_pemohon` varchar(255) NOT NULL,
  `nama_pemohon` varchar(255) NOT NULL,
  `ktp_sim` varchar(255) NOT NULL,
  `nim` varchar(255) DEFAULT NULL,
  `univ` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `alasan` varchar(255) NOT NULL,
  `memperoleh_info` varchar(255) NOT NULL,
  `mengirim_info` varchar(255) NOT NULL,
  `file_ktp` varchar(255) NOT NULL,
  `file_akta` varchar(255) DEFAULT NULL,
  `file_suratkuasa` varchar(255) DEFAULT NULL,
  `status_admin` varchar(255) NOT NULL,
  `status_user` varchar(255) NOT NULL,
  `tgl_masuk` varchar(255) NOT NULL,
  `tgl_proses` varchar(255) NOT NULL,
  `tgl_ditolak` varchar(255) NOT NULL,
  `tgl_selesai` varchar(255) NOT NULL,
  `file_balasan` varchar(255) NOT NULL,
  `file_perpanjangan` text DEFAULT NULL,
  `file_info` varchar(255) NOT NULL,
  `tgl_konfirmasi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `informasi_onlines`
--

INSERT INTO `informasi_onlines` (`id`, `no_reg`, `tipe_pemohon`, `nama_pemohon`, `ktp_sim`, `nim`, `univ`, `alamat`, `pekerjaan`, `no_hp`, `email`, `info`, `alasan`, `memperoleh_info`, `mengirim_info`, `file_ktp`, `file_akta`, `file_suratkuasa`, `status_admin`, `status_user`, `tgl_masuk`, `tgl_proses`, `tgl_ditolak`, `tgl_selesai`, `file_balasan`, `file_perpanjangan`, `file_info`, `tgl_konfirmasi`, `created_at`, `updated_at`) VALUES
(1, '321121', 'perorangan', 'rizqia', '3211', NULL, NULL, 'KP. Gunung Putat, Cikadongdong, Singaparna, Tasikmalaya', 'pegawai', '081321538783', 'rizqia81@gmail.com', 'data lansia', 'riset', 'email', 'email', 'storage/permohonan/ktp/GV38.jpg', NULL, NULL, 'Selesai', 'Sesuai', '2024-01-08 04:40:30', '2024-01-08', '-', '2024-01-09 08:26:02', 'public/permohonan/Surat-Balasan/BUKTI BAYAR PPH WIENA B2.pdf', NULL, 'storage/permohonan/file-informasi/Cetakan Kode Billing - SISKA B01 SVD.pdf', '2024-01-10 03:46:15', '2024-01-07 21:40:30', '2024-01-09 20:46:15'),
(2, '89898', 'perorangan', 'FAUZIAH', '67676', '123', 'APANYA', 'KP. Gunung Putat, Cikadongdong, Singaparna, Tasikmalaya', 'PEGAWAI BIASA', '081321538783', 'rizqia81@gmail.com', 'DATA IBU HAMIL', 'RISET', 'langsung', 'whatsapp', 'storage/permohonan/ktp/GV7.jpg', NULL, NULL, 'Ditolak', 'Ditolak', '2024-01-09 03:31:27', '-', '2024-01-09', '-', 'storage/permohonan/Surat-Balasan/Kode Billing PPH D03.pdf', NULL, '-', '-', '2024-01-08 20:31:27', '2024-01-09 01:11:27'),
(3, '898986877', 'perorangan', 'Aldi', '8989', NULL, NULL, 'KP. Gunung Putat, Cikadongdong, Singaparna, Tasikmalaya', 'pegawai', '081321538783', 'rizqia81@gmail.com', 'data TPS', 'untuk buang sampah', 'langsung', 'langsung', 'storage/permohonan/ktp/GV38.jpg', NULL, NULL, 'Selesai', 'Tidak Sesuai', '2024-01-12 13:26:19', '2024-03-07', '-', '2024-03-07 02:44:21', 'storage/permohonan/Surat-Balasan/BUKTI BAYAR SISKA.pdf', NULL, 'storage/permohonan/file-informasi/BUKTI BAYAR SISKA.pdf', '2024-03-07 02:45:38', '2024-01-12 06:26:19', '2024-03-06 19:45:38'),
(4, '14045', 'perorangan', 'Mallik R', '1234567890', '10514088', 'UNIKOM', 'Perum Sukarindik', 'IT', '089620946888', 'kruza8@gmail.com', 'Saya butuh...', 'Tanpa alasan', 'email', 'email', 'storage/permohonan/ktp/ppid-ERD.jpg', NULL, NULL, 'Selesai', 'Menunggu Diterima', '2024-02-15 03:57:18', '2024-02-15', '-', '2024-02-15 07:50:08', 'storage/permohonan/Surat-Balasan/ppid-USECASE.jpg', NULL, 'storage/permohonan/file-informasi/ppid-USECASE.jpg', '-', '2024-02-14 20:57:18', '2024-02-15 00:50:08'),
(5, '464645645', 'perorangan', 'Rizqia', '3211', '-', '-', 'KP. Gunung Putat, Cikadongdong, Singaparna, Tasikmalaya', 'pegawai', '081321538783', 'rizqia81@gmail.com', 'data tps kota tasik', 'riset', 'email', 'email', 'storage/permohonan/ktp/007.jpg', NULL, NULL, 'Selesai', 'Keberatan', '2024-03-28 06:00:16', '2024-03-28', '-', '2024-03-28 13:42:26', 'storage/permohonan/Surat-Balasan/14.pdf', 'storage/permohonan/file-perpanjangan/14.pdf', 'storage/permohonan/file-informasi/BUKTI BAYAR NUNAEBAH D2 (2).pdf', '2024-03-28 13:54:47', '2024-03-27 23:00:16', '2024-03-28 06:54:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `judul_doks`
--

CREATE TABLE `judul_doks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `jenis_info` varchar(255) NOT NULL,
  `jenis_dok` varchar(255) NOT NULL,
  `jenis_ppid` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `judul_doks`
--

INSERT INTO `judul_doks` (`id`, `judul`, `jenis_info`, `jenis_dok`, `jenis_ppid`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, 'Tata Cara Permohonan Informasi', 'Informasi setiap saat', 'Profil Badan Publik', 'PPID Pembantu', '-', '2024-04-04 07:18:22', '2024-04-16 22:52:58'),
(3, 'ALAMAT LENGKAP PEMERINTAH KOTA TASIKMALAYA', 'Informasi berkala', 'Laporan Dan Prosedur Akses Informasi', 'PPID Utama', '-', '2024-04-16 22:25:56', '2024-04-16 23:29:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `j_dokumens`
--

CREATE TABLE `j_dokumens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_dokumen` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `j_dokumens`
--

INSERT INTO `j_dokumens` (`id`, `jenis_dokumen`, `created_at`, `updated_at`) VALUES
(10, 'Profil Badan Publik', '2023-12-20 19:18:00', '2023-12-20 19:18:00'),
(11, 'Program Dan Kegiatan', '2023-12-20 19:18:25', '2023-12-20 19:18:25'),
(12, 'Informasi Kerja', '2023-12-20 19:18:45', '2023-12-20 19:18:45'),
(13, 'Informasi Keuangan', '2023-12-20 19:19:03', '2023-12-20 19:19:03'),
(14, 'Laporan Dan Prosedur Akses Informasi', '2023-12-20 19:19:37', '2023-12-20 19:19:37'),
(15, 'Regulasi', '2023-12-20 19:19:56', '2023-12-20 19:19:56'),
(16, 'Pengadaan Barang Dan Jasa', '2023-12-20 19:20:12', '2023-12-20 19:20:12'),
(17, 'Pengaduan', '2023-12-20 19:20:25', '2023-12-20 19:20:25'),
(18, 'Daftar Aset Dan Inventaris', '2023-12-20 19:20:48', '2023-12-20 19:20:48'),
(19, 'Informasi Darurat', '2023-12-20 19:22:03', '2023-12-20 19:22:03'),
(20, 'Data Perizinan', '2023-12-20 19:24:26', '2023-12-20 19:24:26'),
(21, 'Mekanisme Perolehan Informasi', '2023-12-20 19:26:15', '2023-12-20 19:26:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keberatan_onlines`
--

CREATE TABLE `keberatan_onlines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_reg` varchar(255) NOT NULL,
  `nama_pemohon` varchar(255) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `info_dimohon` varchar(255) NOT NULL,
  `tujuan_info` varchar(255) NOT NULL,
  `memperoleh_info` varchar(255) NOT NULL,
  `mengirim_info` varchar(255) NOT NULL,
  `alasan_keberatan` varchar(255) NOT NULL,
  `kasus_posisi` varchar(255) NOT NULL,
  `file_ktp` varchar(255) NOT NULL,
  `status_admin` varchar(255) NOT NULL,
  `status_user` varchar(255) NOT NULL,
  `tgl_masuk` varchar(255) NOT NULL,
  `tgl_proses` varchar(255) NOT NULL,
  `tgl_ditolak` varchar(255) NOT NULL,
  `tgl_selesai` varchar(255) NOT NULL,
  `file_balasan` varchar(255) NOT NULL,
  `file_info` varchar(255) NOT NULL,
  `tgl_konfirmasi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `keberatan_onlines`
--

INSERT INTO `keberatan_onlines` (`id`, `no_reg`, `nama_pemohon`, `ktp`, `alamat`, `pekerjaan`, `no_hp`, `email`, `info_dimohon`, `tujuan_info`, `memperoleh_info`, `mengirim_info`, `alasan_keberatan`, `kasus_posisi`, `file_ktp`, `status_admin`, `status_user`, `tgl_masuk`, `tgl_proses`, `tgl_ditolak`, `tgl_selesai`, `file_balasan`, `file_info`, `tgl_konfirmasi`, `created_at`, `updated_at`) VALUES
(1, '123', 'rizqia', 'C:\\xampp-81\\tmp\\phpAE30.tmp', 'KP. Gunung Putat, Cikadongdong, Singaparna, Tasikmalaya', 'pegawai', '081321538783', 'rizqia81@gmail.com', 'data bumil', 'riset', 'email', 'email', '2', 'selesai', 'storage/permohonan/ktp/GV7.jpg', 'Menunggu Konfirmasi', 'Menunggu Diterima', '2024-01-10 07:02:22', '-', '-', '-', '-', '-', '-', '2024-01-10 00:02:22', '2024-01-10 00:02:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_05_070606_create_p__pembantus_table', 2),
(6, '2023_12_07_065743_create_j_dokumens_table', 3),
(7, '2023_12_08_025021_create_slides_table', 4),
(8, '2023_12_19_063812_create_files_table', 5),
(11, '2023_12_27_073632_create_informasi_onlines_table', 6),
(12, '2024_01_10_061638_create_keberatan_onlines_table', 7),
(13, '2024_03_28_034225_create_judul_doks_table', 8),
(14, '2024_04_17_081922_create_visits_table', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `p__pembantus`
--

CREATE TABLE `p__pembantus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `p__pembantus`
--

INSERT INTO `p__pembantus` (`id`, `nama_instansi`, `foto`, `created_at`, `updated_at`) VALUES
(25, 'BPKAD Kota Tasikmalaya', 'storage/image/pembantu/Logo_Kota_Tasikmalaya.png', '2023-12-06 23:54:52', '2024-04-16 22:37:09'),
(26, 'Dinas Kesehatan Kota Tasikmalaya', 'storage/image/pembantu/Logo_Kota_Tasikmalaya.png', '2024-04-16 22:30:59', '2024-04-16 22:30:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_slide` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `slides`
--

INSERT INTO `slides` (`id`, `nama_slide`, `foto`, `ket`, `created_at`, `updated_at`) VALUES
(1, 'mekanisme', 'storage/image/slide/Screenshot 2024-01-15 085801.png', '-', '2023-12-07 20:36:51', '2024-01-14 19:04:59'),
(3, 'slide aja', 'storage/image/slide/contoh-element.png', 'ok', '2023-12-13 22:56:01', '2023-12-13 22:56:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `nik`, `password`, `instansi`, `role`, `created_at`, `updated_at`) VALUES
(1, 'RIZQIA FAUZIAH RACHMA', '123', '$2y$12$WGS2pI.ZPUlhmGVn7ynm4uGo4YyQJXLNCDM8v8udtqJ8QqvhL4j0u', 'Diskominfo Kota Tasikmalaya', 'PU', NULL, '2024-01-10 22:58:09'),
(3, 'RIZQIA FAUZIAH RACHMA', '321452211', '$2y$12$o0N/w3jAguNS0punt52AwejNm6CrACw6tuwdl4l2.V6boT/ziRF5q', 'BPKAD Kota Tasikmalaya', 'PP', '2023-12-18 08:46:24', '2024-04-17 01:06:35'),
(5, 'RACHMA', '3211', '$2y$12$uJ/bh0nmx.N3V70TeRJbYutMcbPBqCZrIooIbKAnq5eNx6d7b/HGG', '-', 'user', '2024-01-10 21:15:25', '2024-01-10 23:00:35'),
(6, 'Aldi', '8989', '$2y$12$b0C10tq29ZXfccU0cM24MebLQlEk3rOnbaiSdZEuXjUyNFar4ykku', '-', 'user', '2024-01-12 06:26:19', '2024-01-12 06:26:19'),
(7, 'Mallik R', '1234567890', '$2y$12$Bkt58XuWv1w3M3m1APA1/u52FMjuj/Ge/QrDwlDxynEOmOKvPX1zO', '-', 'user', '2024-02-14 20:57:19', '2024-02-14 20:57:19');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `informasi_onlines`
--
ALTER TABLE `informasi_onlines`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `judul_doks`
--
ALTER TABLE `judul_doks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `j_dokumens`
--
ALTER TABLE `j_dokumens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keberatan_onlines`
--
ALTER TABLE `keberatan_onlines`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `p__pembantus`
--
ALTER TABLE `p__pembantus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slides_nama_slide_unique` (`nama_slide`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_nik_unique` (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `informasi_onlines`
--
ALTER TABLE `informasi_onlines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `judul_doks`
--
ALTER TABLE `judul_doks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `j_dokumens`
--
ALTER TABLE `j_dokumens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `keberatan_onlines`
--
ALTER TABLE `keberatan_onlines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `p__pembantus`
--
ALTER TABLE `p__pembantus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
