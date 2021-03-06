-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 25 Apr 2018 pada 03.02
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contacts`
--

CREATE TABLE `contacts` (
  `id_contact` int(11) NOT NULL,
  `contact` text NOT NULL,
  `author` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contacts`
--

INSERT INTO `contacts` (`id_contact`, `contact`, `author`, `last_update`) VALUES
(1, '<h2><strong>Identitas Perusahaan</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Nama Perusahaan</strong>&nbsp; &nbsp; &nbsp; Simple Clean Laundry</p>\r\n\r\n<p><strong>Alamat</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Jl. Rejowinangun No.1, Rejowinangun, Kotagede, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55171</p>\r\n\r\n<p><strong>Telephone</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;(0274) xxxxxxx</p>\r\n\r\n<p><strong>Fax</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;(0274) xxxxxx</p>\r\n\r\n<p><strong>Email</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; info@example.com</p>\r\n', 'User Admin', '2018-04-09 21:27:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` text NOT NULL,
  `detail` text NOT NULL,
  `harga` int(11) NOT NULL,
  `author` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `detail`, `harga`, `author`, `last_update`) VALUES
(1, 'Cuci Saja', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lectus nibh, ultrices ultricies sodales elementum, porta quis nisi. Vivamus tempus luctus molestie. Praesent risus diam, vestibulum mattis elementum ut, rutrum non nibh. Aliquam porttitor sit amet turpis vel pharetra. In sed ipsum turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus mollis nisi a nunc malesuada, nec tincidunt nulla eleifend. Integer malesuada velit at ipsum feugiat sollicitudin.', 3000, 'User Admin', '2018-04-05 17:48:00'),
(2, 'Cuci + Setrika', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lectus nibh, ultrices ultricies sodales elementum, porta quis nisi. Vivamus tempus luctus molestie. Praesent risus diam, vestibulum mattis elementum ut, rutrum non nibh. Aliquam porttitor sit amet turpis vel pharetra. In sed ipsum turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus mollis nisi a nunc malesuada, nec tincidunt nulla eleifend. Integer malesuada velit at ipsum feugiat sollicitudin.', 5000, 'User Admin', '2018-04-25 00:57:26'),
(3, 'Setrika Saja', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lectus nibh, ultrices ultricies sodales elementum, porta quis nisi. Vivamus tempus luctus molestie. Praesent risus diam, vestibulum mattis elementum ut, rutrum non nibh. Aliquam porttitor sit amet turpis vel pharetra. In sed ipsum turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus mollis nisi a nunc malesuada, nec tincidunt nulla eleifend. Integer malesuada velit at ipsum feugiat sollicitudin.', 2000, 'User Admin', '2018-04-25 00:20:18'),
(4, 'Paket Express 1 Hari Jadi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lectus nibh, ultrices ultricies sodales elementum, porta quis nisi. Vivamus tempus luctus molestie. Praesent risus diam, vestibulum mattis elementum ut, rutrum non nibh. Aliquam porttitor sit amet turpis vel pharetra. In sed ipsum turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus mollis nisi a nunc malesuada, nec tincidunt nulla eleifend. Integer malesuada velit at ipsum feugiat sollicitudin.', 7000, 'User Admin', '2018-04-25 00:20:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `name`, `username`, `password`, `last_update`) VALUES
(1, 'User Admin', 'admin', 'c93ccd78b2076528346216b3b2f701e6', '2018-04-04 15:50:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id_visi_misi` int(11) NOT NULL,
  `visi_misi` text NOT NULL,
  `author` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `visi_misi`
--

INSERT INTO `visi_misi` (`id_visi_misi`, `visi_misi`, `author`, `last_update`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.khasiat.co.id/wp-content/uploads/2017/03/Daging-Ular-Piton.jpg\" style=\"height:400px; width:600px\" /></p>\r\n', 'User Admin', '2018-04-05 09:32:08');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id_visi_misi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id_visi_misi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
