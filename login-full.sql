-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Feb 2020 pada 07.56
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login-full`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calendar`
--

CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `title` varchar(126) DEFAULT NULL,
  `description` text,
  `color` varchar(24) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `create_by` varchar(64) DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `modified_by` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calendar`
--

INSERT INTO `calendar` (`id`, `title`, `description`, `color`, `start_date`, `end_date`, `create_at`, `create_by`, `modified_at`, `modified_by`) VALUES
(1, 'KODEKU Event', '<p><b>Montepless </b>arbi</p>', '#FFD700', '2017-01-16', '2017-01-20', '2017-01-12 18:29:20', 'admin@maidchan.com', NULL, NULL),
(8, 'AREMA', '', '#40E0D0', '2017-01-01', '2017-01-03', '2017-01-12 20:04:49', 'admin@maidchan.com', NULL, NULL),
(9, 'Ngepil', '<p>asdasdsa</p>', '#008000', '2017-01-07', '2017-01-09', '2017-01-12 20:05:13', 'admin@maidchan.com', NULL, NULL),
(10, 'AREMA ', '', '#0071c5', '2017-01-01', '2017-01-02', '2017-01-12 20:05:50', 'admin@maidchan.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `data_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `data_created`) VALUES
(5, 'Yassirli Amri', 'amri@gmail.com', 'default.jpg', '$2y$10$MPoZ43Z0Bq4jlbC7pZ.z7.IH8EyEjDIHrAZfdz4o3NtpBA5tf4qOG', 2, 1, 1573665126),
(6, 'Yassirli Amri', 'amriyasirli62@gmail.com', 'default.jpg', '$2y$10$fnKxz0UnDSUMP2TAFNoHUOREfbEBYB/zUpmXcprYS2/O3CZqdzSOW', 2, 1, 1573666021),
(7, 'Mutia Rahmi', 'rahmi@gmail.com', 'B612_20170316_132041.jpg', '$2y$10$tj4j3mtNwwBjinQ7weFE..lIBnusFudO.8zZBtuZ/2bAUViqGvQEC', 2, 1, 1573667101),
(8, 'Yasirli Amri', 'mir@gmail.com', 'admin.jpg', '$2y$10$MqWz7ttp6pWtMLrihc/WzOcQIoIqI1qaShv.Jx/BN1Ec/Dd/hWrq.', 1, 1, 1576147099),
(9, 'Arka', 'arka@mail.com', 'IMG20191027152405.jpg', '$2y$10$AjU/6N1cEadKzG7jtMLuWO14FBY1/b7/4o03aC5NNIhtaBPKBpCSO', 2, 1, 1576869340),
(10, 'Mumut Mutia', 'mumut@mail.com', 'B612_20170316_132041.jpg', '$2y$10$FTqVc8bV9ffVJgjOkxDsyuRfCVlJSKcHFj5.8LhzHeGKjhKb/6qkq', 2, 1, 1577080611),
(11, 'arif kurniawan', 'arif@gmail.com', 'Koala.jpg', '$2y$10$qLY0pyQQvF.hEBW3vvxPUOAiyRWdVz5ZLBdjTILQuBXUy7/PeuZC2', 2, 1, 1577889634);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(11, 1, 3),
(12, 1, 4),
(13, 1, 5),
(14, 2, 3),
(16, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'Menu'),
(4, 'Other'),
(5, 'Web');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'feather icon-home', 1),
(2, 2, 'My Profil', 'user', 'feather icon-user', 1),
(3, 3, 'Menu Management', 'menu', 'feather icon-menu', 1),
(4, 3, 'Submenu Management', 'menu/submenu', 'feather icon-layers', 1),
(5, 1, 'Role', 'admin/role', 'feather icon-unlock', 1),
(6, 2, 'Edit Profil', 'user/edit', 'feather icon-edit-1', 1),
(7, 1, 'Gallery', 'admin/gallery', 'feather icon-image', 1),
(8, 2, 'Change Password', 'user/changepassword', 'feather icon-shield', 1),
(9, 2, 'test', 'user/test', 'feather icon-user', 2),
(10, 4, 'Calendar', 'user/calendar', 'feather icon-calendar', 1),
(11, 5, 'home', 'welcome', 'feather icon-globe', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
