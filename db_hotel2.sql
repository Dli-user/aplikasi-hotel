-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Feb 2022 pada 04.54
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitashotel`
--

CREATE TABLE `fasilitashotel` (
  `id_fasilitas_hotel` int(11) NOT NULL,
  `nama_fasilitas_hotel` varchar(50) DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fasilitashotel`
--

INSERT INTO `fasilitashotel` (`id_fasilitas_hotel`, `nama_fasilitas_hotel`, `gambar`, `keterangan`) VALUES
(12, '12', 'youtube.png', 'keterangan kamar baru ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` int(11) DEFAULT NULL,
  `nama_hotel` varchar(50) DEFAULT NULL,
  `slogan` text DEFAULT NULL,
  `nama_perusahaan` varchar(50) DEFAULT NULL,
  `alamat_jalan` text DEFAULT NULL,
  `alamat_kabupaten` text DEFAULT NULL,
  `alamat_propinsi` text DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `faximile` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hotel`
--

INSERT INTO `hotel` (`id_hotel`, `nama_hotel`, `slogan`, `nama_perusahaan`, `alamat_jalan`, `alamat_kabupaten`, `alamat_propinsi`, `telepon`, `faximile`, `email`, `website`) VALUES
(1, 'Hotel Hebat', 'Syar\'i. Modern. Accessible. Affordable.', NULL, 'Jalan Nitikan 48, Umbulharjo, Yogyakarta', NULL, NULL, '(0274) 370850', NULL, NULL, NULL),
(1, 'Hotel Hebat', 'Syar\'i. Modern. Accessible. Affordable.', NULL, 'Jalan Nitikan 48, Umbulharjo, Yogyakarta', NULL, NULL, '(0274) 370850', NULL, NULL, NULL),
(1, 'Hotel Hebat', 'Syar\'i. Modern. Accessible. Affordable.', NULL, 'Jalan Nitikan 48, Umbulharjo, Yogyakarta', NULL, NULL, '(0274) 370850', NULL, NULL, NULL),
(1, 'Hotel Hebat', 'Syar\'i. Modern. Accessible. Affordable.', NULL, 'Jalan Nitikan 48, Umbulharjo, Yogyakarta', NULL, NULL, '(0274) 370850', NULL, NULL, NULL),
(12, '12', '12', '12', '12', '12', '12', '12', '12', '12', NULL),
(13, '13', '13', '13', '13', '13', '13', '13', '13', '13', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `id_kamar_tipe` int(11) DEFAULT NULL,
  `nomor_kamar` int(11) DEFAULT NULL,
  `max_dewasa` int(11) DEFAULT NULL,
  `max_anak` int(11) DEFAULT NULL,
  `status_kamar` enum('1','2') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `id_kamar_tipe`, `nomor_kamar`, `max_dewasa`, `max_anak`, `status_kamar`) VALUES
(1, 1, 101, 1, 2, '1'),
(2, 1, 102, 1, 2, '1'),
(3, 1, 103, 1, 2, '1'),
(4, 2, 104, 2, 4, '1'),
(5, 2, 105, 2, 4, '1'),
(6, 3, 106, 2, 1, '1'),
(7, 4, 107, 2, 2, '1'),
(8, 3, 108, 2, 1, '1'),
(9, 3, 109, 2, 1, '1'),
(10, 4, 110, 2, 2, '1'),
(11, 1, 201, 1, 2, '1'),
(12, 1, 202, 1, 2, '1'),
(13, 1, 203, 1, 2, '1'),
(15, 12, 12, 12, 12, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` int(11) NOT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `nama_depan` varchar(50) DEFAULT NULL,
  `nama_belakang` varchar(50) DEFAULT NULL,
  `tipe_identitas` varchar(20) DEFAULT NULL,
  `nomor_identitas` varchar(20) DEFAULT NULL,
  `kewarganegaraan` enum('1','2') DEFAULT NULL,
  `alamat_jalan` varchar(50) DEFAULT NULL,
  `alamat_kecamatan` varchar(50) DEFAULT NULL,
  `alamat_kabupaten` varchar(50) DEFAULT NULL,
  `alamat_propinsi` varchar(50) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_reservasi`
--

CREATE TABLE `tb_reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `kode_booking` varchar(50) DEFAULT NULL,
  `tanggal_in` date DEFAULT NULL,
  `jam_in` time DEFAULT NULL,
  `tanggal_out` date DEFAULT NULL,
  `jam_out` time DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL,
  `pajak` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipekamar`
--

CREATE TABLE `tipekamar` (
  `id_kamar_tipe` int(11) NOT NULL,
  `nama_kamar_tipe` varchar(50) DEFAULT NULL,
  `fasilitas` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `harga` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tipekamar`
--

INSERT INTO `tipekamar` (`id_kamar_tipe`, `nama_kamar_tipe`, `fasilitas`, `gambar`, `harga`) VALUES
(1, 'Single Room', NULL, NULL, 125000),
(2, 'Twin Room', NULL, NULL, 155000),
(3, 'Double Room', NULL, NULL, 235000),
(4, 'Family Room', 'Kamar ukuran 36m2. \r\nAir Conditionare. \r\nBath Tube. \r\nTV.', NULL, 350000),
(6, 'Deluxe', 'Kamar ukuran 36m2. Air Conditionare. Bath Tube. TV.', NULL, 575000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `level` enum('administrator','resepsionis') NOT NULL,
  `akses_terakhir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `level`, `akses_terakhir`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'administrator', '2022-01-29'),
(2, 'cs1', '21232f297a57a5a743894a0e4a801fc3', 'Customer Service 1', 'resepsionis', '2022-01-29'),
(7, '12', 'c51ce410c124a10e0db5e4b97fc2af39', '14', 'administrator', '2022-02-01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fasilitashotel`
--
ALTER TABLE `fasilitashotel`
  ADD PRIMARY KEY (`id_fasilitas_hotel`) USING BTREE;

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`) USING BTREE;

--
-- Indeks untuk tabel `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`) USING BTREE;

--
-- Indeks untuk tabel `tb_reservasi`
--
ALTER TABLE `tb_reservasi`
  ADD PRIMARY KEY (`id_reservasi`) USING BTREE;

--
-- Indeks untuk tabel `tipekamar`
--
ALTER TABLE `tipekamar`
  ADD PRIMARY KEY (`id_kamar_tipe`) USING BTREE;

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fasilitashotel`
--
ALTER TABLE `fasilitashotel`
  MODIFY `id_fasilitas_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_reservasi`
--
ALTER TABLE `tb_reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tipekamar`
--
ALTER TABLE `tipekamar`
  MODIFY `id_kamar_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
