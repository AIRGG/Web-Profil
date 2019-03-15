-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Sep 2018 pada 14.34
-- Versi Server: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rpl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `alamat`, `no_hp`, `username`, `password`, `level`) VALUES
(10101, 'Airlangga Yudiatama', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081315473483', 'angga', '202cb962ac59075b964b07152d234b70', 3),
(10103, 'Dimas Arsya Maulana', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081387382813', 'dimas', '202cb962ac59075b964b07152d234b70', 3),
(10104, 'Nurul Syawalia', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081387382813', 'caca', '202cb962ac59075b964b07152d234b70', 3),
(10105, 'Airlangga Yudiatama', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081315473483', 'angga', '202cb962ac59075b964b07152d234b70', 3),
(10106, 'Bagas Tri Nugroho', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081315473483', 'bagas', '202cb962ac59075b964b07152d234b70', 3),
(10107, 'Dimas Arsya Maulana', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081387382813', 'dimas', '202cb962ac59075b964b07152d234b70', 3),
(10108, 'Nurul Syawalia', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081387382813', 'caca', '202cb962ac59075b964b07152d234b70', 3),
(10109, 'Airlangga Yudiatama', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081315473483', 'angga', '202cb962ac59075b964b07152d234b70', 3),
(10110, 'Bagas Tri Nugroho', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081315473483', 'bagas', '202cb962ac59075b964b07152d234b70', 3),
(10111, 'Dimas Arsya Maulana', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081387382813', 'dimas', '202cb962ac59075b964b07152d234b70', 3),
(10112, 'Nurul Syawalia', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081387382813', 'caca', '202cb962ac59075b964b07152d234b70', 3),
(10113, 'Airlangga Yudiatama', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081315473483', 'angga', '202cb962ac59075b964b07152d234b70', 3),
(10114, 'Bagas Tri Nugroho', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081315473483', 'bagas', '202cb962ac59075b964b07152d234b70', 3),
(10115, 'Dimas Arsya Maulana', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081387382813', 'dimas', '202cb962ac59075b964b07152d234b70', 3),
(10116, 'Nurul Syawalia', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081387382813', 'caca', '202cb962ac59075b964b07152d234b70', 3),
(10117, 'Airlangga Yudiatama', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081315473483', 'angga', '202cb962ac59075b964b07152d234b70', 3),
(10118, 'Bagas Tri Nugroho', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081315473483', 'bagas', '202cb962ac59075b964b07152d234b70', 3),
(10119, 'Dimas Arsya Maulana', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081387382813', 'dimas', '202cb962ac59075b964b07152d234b70', 3),
(10120, 'Nurul Syawalia', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081387382813', 'caca', '202cb962ac59075b964b07152d234b70', 3),
(10121, 'Airlangga Yudiatama', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081315473483', 'angga', '202cb962ac59075b964b07152d234b70', 3),
(10122, 'Bagas Tri Nugroho', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081315473483', 'bagas', '202cb962ac59075b964b07152d234b70', 3),
(10123, 'Dimas Arsya Maulana', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081387382813', 'dimas', '202cb962ac59075b964b07152d234b70', 3),
(10124, 'Nurul Syawalia', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081387382813', 'caca', '202cb962ac59075b964b07152d234b70', 3),
(10125, 'Airlangga Yudiatama', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081315473483', 'angga', '202cb962ac59075b964b07152d234b70', 3),
(10126, 'Bagas Tri Nugroho', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081315473483', 'bagas', '202cb962ac59075b964b07152d234b70', 3),
(10127, 'Dimas Arsya Maulana', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081387382813', 'dimas', '202cb962ac59075b964b07152d234b70', 3),
(10128, 'Nurul Syawalia', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081387382813', 'caca', '202cb962ac59075b964b07152d234b70', 3),
(10129, 'Airlangga Yudiatama', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081315473483', 'angga', '202cb962ac59075b964b07152d234b70', 3),
(10130, 'Bagas Tri Nugroho', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081315473483', 'bagas', '202cb962ac59075b964b07152d234b70', 3),
(10131, 'Dimas Arsya Maulana', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081387382813', 'dimas', '202cb962ac59075b964b07152d234b70', 3),
(10132, 'Nurul Syawalia', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081387382813', 'caca', '202cb962ac59075b964b07152d234b70', 3),
(10133, 'Airlangga Yudiatama', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081315473483', 'angga', '202cb962ac59075b964b07152d234b70', 3),
(10134, 'Bagas Tri Nugroho', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081315473483', 'bagas', '202cb962ac59075b964b07152d234b70', 3),
(10135, 'Dimas Arsya Maulana', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081387382813', 'dimas', '202cb962ac59075b964b07152d234b70', 3),
(10136, 'Nurul Syawalia', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081387382813', 'caca', '202cb962ac59075b964b07152d234b70', 3),
(10137, 'Airlangga Yudiatama', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081315473483', 'angga', '202cb962ac59075b964b07152d234b70', 3),
(10138, 'Bagas Tri Nugroho', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081315473483', 'bagas', '202cb962ac59075b964b07152d234b70', 3),
(10139, 'Dimas Arsya Maulana', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081387382813', 'dimas', '202cb962ac59075b964b07152d234b70', 3),
(10140, 'Nurul Syawalia', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081387382813', 'caca', '202cb962ac59075b964b07152d234b70', 3),
(10141, 'Airlangga Yudiatama', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081315473483', 'angga', '202cb962ac59075b964b07152d234b70', 3),
(10142, 'Bagas Tri Nugroho', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081315473483', 'bagas', '202cb962ac59075b964b07152d234b70', 3),
(10143, 'Dimas Arsya Maulana', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081387382813', 'dimas', '202cb962ac59075b964b07152d234b70', 3),
(10144, 'Nurul Syawalia', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081387382813', 'caca', '202cb962ac59075b964b07152d234b70', 3),
(10145, 'Airlangga Yudiatama', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081315473483', 'angga', '202cb962ac59075b964b07152d234b70', 3),
(10146, 'Bagas Tri Nugroho', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081315473483', 'bagas', '202cb962ac59075b964b07152d234b70', 3),
(10147, 'Dimas Arsya Maulana', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081387382813', 'dimas', '202cb962ac59075b964b07152d234b70', 3),
(10148, 'Nurul Syawalia', 'Jl. Animan Rt 03/07 No.03 Kel. Harapan Jaya, Cikaret, Cibinong, Bogor 16914', '081387382813', 'caca', '202cb962ac59075b964b07152d234b70', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_rpl`
--

CREATE TABLE IF NOT EXISTS `tabel_rpl` (
  `kode_jurusan` varchar(4) NOT NULL,
  `nama_jurusan` text NOT NULL,
  `jumlah_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_rpl`
--

INSERT INTO `tabel_rpl` (`kode_jurusan`, `nama_jurusan`, `jumlah_siswa`) VALUES
('MM', 'Multimedia', 180),
('RPL', 'Rekayasa Perangkat Lunak', 180),
('TKJ', 'Teknik Komputer & Jaringan', 180);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE IF NOT EXISTS `tbl_siswa` (
  `nis` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `level` int(1) NOT NULL,
  `kode_jurusan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`nis`, `nama`, `tgl_lahir`, `tempat_lahir`, `jk`, `username`, `password`, `level`, `kode_jurusan`) VALUES
(10101, 'Airlangga Yudiatama', '2002-03-18', 'Sukabumi', 'Laki-Laki', 'angga', '202cb962ac59075b964b07152d234b70', 3, 'RPL'),
(10102, 'Bagas Trinugroho', '2009-08-14', 'Bogor', 'Laki-Laki', 'bagas', '202cb962ac59075b964b07152d234b70', 3, 'TKJ'),
(10103, 'Dimas Arsya Maulana', '2015-05-05', 'Bogor', 'Laki-Laki', 'dimas', '202cb962ac59075b964b07152d234b70', 3, 'MM'),
(10104, 'Nurul Syawalia', '2004-11-19', 'Sukabumi', 'Perempuan', 'caca', '202cb962ac59075b964b07152d234b70', 3, 'MM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tabel_rpl`
--
ALTER TABLE `tabel_rpl`
  ADD PRIMARY KEY (`kode_jurusan`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`nis`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
