-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2015 pada 14.37
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(1000) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'rinekso@a', '4fe961aef976ac84dae7baa405cdde5e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `gambar`, `isi`, `tanggal`) VALUES
(1, 'tes artikel', '19061.jpg', 'lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet \r\n', '27-Oct-2014'),
(3, 'Membaca buku dapat menambah ilmu lebih banyak', '14567.jpg', 'Membaca buku dapat menambah ilmu lebih dalam karena dan itu yang, bla bla bla Membaca buku dapat menambah ilmu lebih dalam karena dan itu yang, bla bla bla Membaca buku dapat menambah ilmu lebih dalam karena dan itu yang, bla bla bla Membaca buku dapat menambah ilmu lebih dalam karena dan itu yang, bla bla bla Membaca buku dapat menambah ilmu lebih dalam karena dan itu yang, bla bla bla Membaca buku dapat menambah ilmu lebih dalam karena dan itu yang, bla bla bla Membaca buku dapat menambah ilmu lebih dalam karena dan itu yang, bla bla bla Membaca buku dapat menambah ilmu lebih dalam karena dan itu yang, bla bla bla Membaca buku dapat menambah ilmu lebih dalam karena dan itu yang, bla bla bla Membaca buku dapat menambah ilmu lebih dalam karena dan itu yang, bla bla bla ', '02-Jan-2015'),
(5, 'Indonesia dukung anak membaca', '21880.jpg', 'Indonesia sekarang banyak mengeluarkan perpustakaan keliling untuk anak-anak yang berada di pelosok daerah. Indonesia sekarang banyak mengeluarkan perpustakaan keliling untuk anak-anak yang berada di pelosok daerah. Indonesia sekarang banyak mengeluarkan perpustakaan keliling untuk anak-anak yang berada di pelosok daerah. Indonesia sekarang banyak mengeluarkan perpustakaan keliling untuk anak-anak yang berada di pelosok daerah. Indonesia sekarang banyak mengeluarkan perpustakaan keliling untuk anak-anak yang berada di pelosok daerah. Indonesia sekarang banyak mengeluarkan perpustakaan keliling untuk anak-anak yang berada di pelosok daerah. Indonesia sekarang banyak mengeluarkan perpustakaan keliling untuk anak-anak yang berada di pelosok daerah. Indonesia sekarang banyak mengeluarkan perpustakaan keliling untuk anak-anak yang berada di pelosok daerah. Indonesia sekarang banyak mengeluarkan perpustakaan keliling untuk anak-anak yang berada di pelosok daerah. Indonesia sekarang banyak mengeluarkan perpustakaan keliling untuk anak-anak yang berada di pelosok daerah. Indonesia sekarang banyak mengeluarkan perpustakaan keliling untuk anak-anak yang berada di pelosok daerah. Indonesia sekarang banyak mengeluarkan perpustakaan keliling untuk anak-anak yang berada di pelosok daerah. Indonesia sekarang banyak mengeluarkan perpustakaan keliling untuk anak-anak yang berada di pelosok daerah. Indonesia sekarang banyak mengeluarkan perpustakaan keliling untuk anak-anak yang berada di pelosok daerah. Indonesia sekarang banyak mengeluarkan perpustakaan keliling untuk anak-anak yang berada di pelosok daerah. ', '22-Dec-2014');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `sinopsis` text NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `pinjam` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `cover`, `kategori`, `penerbit`, `pengarang`, `sinopsis`, `lokasi`, `harga`, `pinjam`) VALUES
(2, 'Dimensi manusia dan ruang interior', '17648.jpg', 'Pendidikan', 'Andi Publisher', 'Yusuf Abu', 'lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet ', 'lorong 3 rak B', 40000, 0),
(3, 'Kamus kantong istilah kedokteran', '20319.jpg', 'Pendidikan', 'Dinas Pendidikan', 'Andi Rifki', 'lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet ', 'lorong 3 rak A', 60000, 0),
(6, 'All about durian', '5070.jpg', 'Masakan', 'Andi Publisher', 'Andi Rifki', 'masakan-masakan yang terbuat dari durian masakan-masakan yang terbuat dari durian masakan-masakan yang terbuat dari durian masakan-masakan yang terbuat dari durian masakan-masakan yang terbuat dari durian ', 'lorong 3 rak B', 20000, 1),
(7, 'Dendam dinasti berdarah', '15781.jpg', 'Novel', 'Maxicom', 'Maruf Pardarmean', 'Novel bercerita tentang Dendam seorang di dinasti yang berdarah. Novel bercerita tentang Dendam seorang di dinasti yang berdarah. Novel bercerita tentang Dendam seorang di dinasti yang berdarah. Novel bercerita tentang Dendam seorang di dinasti yang berdarah. Novel bercerita tentang Dendam seorang di dinasti yang berdarah. Novel bercerita tentang Dendam seorang di dinasti yang berdarah. ', 'lorong 2 rak A', 24000, 2),
(8, 'Imperia', '26250.jpg', 'Novel', 'Mediakita', 'Ahmad barizi', 'Lorem ipsum dolor amet Lorem ipsum dolor amet Lorem ipsum dolor amet Lorem ipsum dolor amet Lorem ipsum dolor amet Lorem ipsum dolor amet Lorem ipsum dolor amet Lorem ipsum dolor amet Lorem ipsum dolor amet Lorem ipsum dolor amet Lorem ipsum dolor amet ', 'lorong 3 rak E', 40000, 1),
(9, 'Mayat Dalam Perpustakaan', '25389.jpg', 'Novel', 'Andi Publisher', 'Ahmad barizi', 'Cerita Mayat Dalam Perpustakaan Cerita Mayat Dalam Perpustakaan Cerita Mayat Dalam Perpustakaan Cerita Mayat Dalam Perpustakaan Cerita Mayat Dalam Perpustakaan Cerita Mayat Dalam Perpustakaan Cerita Mayat Dalam Perpustakaan Cerita Mayat Dalam Perpustakaan ', 'lorong 2 rak A', 42000, 0),
(10, 'Misteri Penginapan Tua', '25851.jpg', 'Novel', 'Maxicom', 'Ahmad barizi', 'Misteri Penginapan Tua - The Pale Horse yang berhantu Misteri Penginapan Tua - The Pale Horse yang berhantu Misteri Penginapan Tua - The Pale Horse yang berhantu Misteri Penginapan Tua - The Pale Horse yang berhantu Misteri Penginapan Tua - The Pale Horse yang berhantu Misteri Penginapan Tua - The Pale Horse yang berhantu Misteri Penginapan Tua - The Pale Horse yang berhantu ', 'lorong 3 rak B', 80000, 0),
(11, 'The Innoncen Man', '13690.jpg', 'Novel', 'Andi Publisher', 'Ahmad barizi', 'asd lorem ipsum asd lorem ipsum asd lorem ipsum asd lorem ipsum asd lorem ipsum asd lorem ipsum asd lorem ipsum asd lorem ipsum asd lorem ipsum asd lorem ipsum ', 'lorong 1 rak B', 21000, 0),
(13, 'Biar mengiris asal laris', '13949.jpg', 'Humor', 'Andi Publisher', 'Maruf Pardarmean', 'humor lorem ipsum dolor amet humor lorem ipsum dolor amet humor lorem ipsum dolor amet humor lorem ipsum dolor amet humor lorem ipsum dolor amet humor lorem ipsum dolor amet humor lorem ipsum dolor amet humor lorem ipsum dolor amet humor lorem ipsum dolor amet humor lorem ipsum dolor amet humor lorem ipsum dolor amet humor lorem ipsum dolor amet humor lorem ipsum dolor amet humor lorem ipsum dolor amet humor lorem ipsum dolor amet ', 'lorong 2 rak D', 30000, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ebook`
--

CREATE TABLE IF NOT EXISTS `ebook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(1000) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `pdf` varchar(1000) NOT NULL,
  `besar` varchar(1000) NOT NULL,
  `ket` text NOT NULL,
  `suka` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data untuk tabel `ebook`
--

INSERT INTO `ebook` (`id`, `nama`, `cover`, `pdf`, `besar`, `ket`, `suka`) VALUES
(15, 'Instalasi Perangkat', 'Instalasi Perangkat.jpg', 'Instalasi Perangkat(27716).pdf', '1121', 'asd', 1),
(16, 'Modul PHP 1', 'Modul PHP 1.jpg', 'Modul PHP 1(16787).pdf', '374', 'modul untuk belajar php', 2),
(17, 'Modul PHP 3', 'Modul PHP 3.jpg', 'Modul PHP 3(24421).pdf', '374', 'Modul php untuk belajar php script bagian 3', 1),
(18, 'Mercury', 'Mercury.jpg', 'Mercury(31354).pdf', '1053', 'Gtw buku apa ini, yang penting gw masukin di web ini :P', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jumlah`
--

CREATE TABLE IF NOT EXISTS `jumlah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `buku` varchar(1000) NOT NULL,
  `no` int(11) NOT NULL,
  `pinjam` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data untuk tabel `jumlah`
--

INSERT INTO `jumlah` (`id`, `buku`, `no`, `pinjam`) VALUES
(5, 'Dimensi manusia dan ruang interior', 2, ''),
(6, 'Dimensi manusia dan ruang interior', 3, ''),
(7, 'Dimensi manusia dan ruang interior', 4, ''),
(8, 'Dimensi manusia dan ruang interior', 5, ''),
(10, 'Kamus kantong istilah kedokteran', 1, ''),
(11, 'Kamus kantong istilah kedokteran', 2, ''),
(13, 'Kamus kantong istilah kedokteran', 4, ''),
(14, 'Kamus kantong istilah kedokteran', 5, ''),
(15, 'Kamus kantong istilah kedokteran', 6, ''),
(16, 'Kamus kantong istilah kedokteran', 7, ''),
(17, 'Kamus kantong istilah kedokteran', 8, ''),
(18, 'Kamus kantong istilah kedokteran', 9, ''),
(19, 'Kamus kantong istilah kedokteran', 10, ''),
(20, 'Kamus kantong istilah kedokteran', 3, ''),
(21, 'Dimensi manusia dan ruang interior', 6, ''),
(22, 'All about durian', 1, 'rey@3'),
(23, 'All about durian', 2, ''),
(24, 'All about durian', 3, ''),
(25, 'All about durian', 4, ''),
(26, 'All about durian', 5, ''),
(27, 'All about durian', 6, ''),
(29, 'Biar meringis, asal laris', 1, ''),
(30, 'Biar meringis, asal laris', 2, ''),
(31, 'Biar meringis, asal laris', 3, ''),
(32, 'Biar meringis, asal laris', 4, ''),
(33, 'Biar meringis, asal laris', 5, ''),
(34, 'Biar meringis, asal laris', 6, ''),
(35, 'Biar meringis, asal laris', 7, ''),
(36, 'Biar meringis, asal laris', 8, ''),
(37, 'Biar meringis, asal laris', 9, ''),
(38, 'Dendam dinasti berdarah', 1, ''),
(39, 'Dendam dinasti berdarah', 2, 'rey@3'),
(40, 'Dendam dinasti berdarah', 3, ''),
(41, 'Dendam dinasti berdarah', 4, ''),
(42, 'Dendam dinasti berdarah', 5, ''),
(43, 'Dendam dinasti berdarah', 6, ''),
(44, 'Dendam dinasti berdarah', 7, 's@s'),
(45, 'Imperia', 1, ''),
(46, 'Imperia', 2, ''),
(47, 'Imperia', 3, ''),
(48, 'Imperia', 4, ''),
(49, 'Imperia', 5, ''),
(50, 'Imperia', 6, ''),
(51, 'Imperia', 7, ''),
(55, 'Mayat Dalam Perpustakaan', 1, ''),
(56, 'Mayat Dalam Perpustakaan', 2, ''),
(57, 'Mayat Dalam Perpustakaan', 3, ''),
(58, 'Mayat Dalam Perpustakaan', 4, ''),
(59, 'Mayat Dalam Perpustakaan', 5, ''),
(60, 'Misteri Penginapan Tua', 1, ''),
(61, 'Misteri Penginapan Tua', 2, ''),
(62, 'Misteri Penginapan Tua', 3, ''),
(63, 'Misteri Penginapan Tua', 4, ''),
(64, 'Misteri Penginapan Tua', 5, ''),
(65, 'Dimensi manusia dan ruang interior', 1, ''),
(66, 'Mayat Dalam Perpustakaan', 6, ''),
(67, 'Mayat Dalam Perpustakaan', 7, ''),
(68, 'Mayat Dalam Perpustakaan', 8, ''),
(69, 'Mayat Dalam Perpustakaan', 9, ''),
(70, 'Mayat Dalam Perpustakaan', 10, ''),
(71, 'Dimensi manusia dan ruang interior', 7, ''),
(72, 'Dimensi manusia dan ruang interior', 8, ''),
(73, 'Dimensi manusia dan ruang interior', 9, ''),
(74, 'Dimensi manusia dan ruang interior', 10, ''),
(75, 'All about durian', 7, ''),
(76, 'Biar mengiris asal laris', 1, ''),
(77, 'Biar mengiris asal laris', 2, 'donodoni@yahoo.com'),
(78, 'Biar mengiris asal laris', 3, ''),
(79, 'Biar mengiris asal laris', 4, ''),
(80, 'Biar mengiris asal laris', 5, ''),
(81, 'Misteri Penginapan Tua', 6, ''),
(82, 'Misteri Penginapan Tua', 7, ''),
(83, 'Misteri Penginapan Tua', 8, ''),
(84, 'Misteri Penginapan Tua', 9, ''),
(85, 'Misteri Penginapan Tua', 10, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kat` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kat`) VALUES
(1, 'Pendidikan'),
(2, 'Sastra'),
(3, 'Sains'),
(4, 'Novel'),
(5, 'Motivasi'),
(8, 'Anak-anak'),
(10, 'Masakan'),
(11, 'Humor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komen`
--

CREATE TABLE IF NOT EXISTS `komen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_b` int(11) NOT NULL,
  `t` varchar(100) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `komen` varchar(1000) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data untuk tabel `komen`
--

INSERT INTO `komen` (`id`, `id_b`, `t`, `email`, `komen`, `tanggal`) VALUES
(2, 4, 'a', 'ads@s', 'tes komen', '27-Oct-2014'),
(3, 4, 'a', 's@s', 'zfadjbbkn   myuu hij,.', '27-Oct-2014'),
(4, 2, 'a', 's@s', 'gak ngoros\r\n', '27-Oct-2014'),
(5, 6, 'b', 's@s', 'bagus', '27-Oct-2014'),
(6, 6, 'b', 's@s', 'wow pokoknya', '27-Oct-2014'),
(7, 5, 'b', 's@s', 'lucu banget min :)', '27-Oct-2014'),
(8, 3, 'b', 's@s', 'coba', '27-Oct-2014'),
(9, 4, 'a', 's@s', 'assdsd asf', '30-Dec-2014'),
(10, 2, 'b', 's@s', 'cobe coment', '30-Dec-2014'),
(11, 2, 'a', 's@s', 'wow', '30-Dec-2014'),
(12, 9, 'b', 'a@a', 'wow', '02-Jan-2015'),
(13, 9, 'b', 'a@a', 'lagi', '02-Jan-2015'),
(14, 9, 'b', 'a@a', 'komen lagi', '02-Jan-2015'),
(15, 11, 'b', 'sip@p.com', 'dagdf', '31-Oct-2014'),
(16, 5, 'a', 'd@dam.com', 'wow keren bro', '31-Oct-2014'),
(17, 2, 'b', 'sim@s', 'coba lagi', '04-Nov-2014'),
(18, 6, 'b', 's@s', 'Wow lagi bro :P', '19-Nov-2014'),
(19, 2, 'b', 'rey@3', 'woe\r\n', '23-Dec-2014'),
(20, 1, 'a', 'rey@3', 'yayaya', '23-Dec-2014');

-- --------------------------------------------------------

--
-- Struktur dari tabel `look`
--

CREATE TABLE IF NOT EXISTS `look` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_e` int(11) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `look`
--

INSERT INTO `look` (`id`, `id_e`, `nama`) VALUES
(1, 16, 'rey@3'),
(2, 16, 's@s'),
(3, 15, 'rey@3'),
(4, 17, 'rey@3'),
(5, 17, 'x@x'),
(6, 18, 's@s'),
(7, 18, 'rey@3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `depan` varchar(100) NOT NULL,
  `belakang` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `ktp` varchar(100) NOT NULL,
  `lahir` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id`, `depan`, `belakang`, `email`, `password`, `alamat`, `ktp`, `lahir`, `tanggal`, `status`) VALUES
(6, 'simson', 'rinekso', 's@s', '9f6e6800cfae7749eb6c486619254b9c', 'sss', '9434.jpg', '2014-12-03', '30-Dec-2014', 'ya'),
(7, 'xxx', 'xxx', 'x@x', 'f561aaf6ef0bf14d4208bb46a4ccb3ad', 'xxx', '8491.jpg', '2014-12-03', '30-Dec-2014', 'ya'),
(12, 'reyno', 'the', 'rey@3', 'd2b3ea2dfddc40efdc6941359436c847', 'rey', '31267.jpg', '1997-10-19', '20-Dec-2014', '1'),
(13, 'Doni', 'Prasetyo', 'donodoni@yahoo.com', 'd90c5e8854f8bdf49d676cc8b2be2d62', 'GJP', '18452.jpg', '2014-12-05', '23-Dec-2014', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerbit`
--

CREATE TABLE IF NOT EXISTS `penerbit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kat` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `penerbit`
--

INSERT INTO `penerbit` (`id`, `kat`) VALUES
(7, 'Mediakita'),
(8, 'Andi Publisher'),
(10, 'Dinas Pendidikan'),
(11, 'Maxicom');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peng`
--

CREATE TABLE IF NOT EXISTS `peng` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `waktu` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data untuk tabel `peng`
--

INSERT INTO `peng` (`id`, `nama`, `tanggal`, `waktu`) VALUES
(32, 's@s', '23-Dec-2014', '09:07:40 PM'),
(33, 'x@x', '23-Dec-2014', '09:12:26 PM'),
(34, 'rey@3', '23-Dec-2014', '09:12:55 PM'),
(35, 'donodoni@yahoo.com', '23-Dec-2014', '09:19:02 PM'),
(36, 'rey@3', '23-Dec-2014', '09:31:28 PM'),
(37, 's@s', '29-Dec-2014', '10:56:52 PM'),
(38, 'rey@3', '03-Jan-2015', '08:25:36 PM'),
(39, 'rey@3', '03-Jan-2015', '08:27:16 PM'),
(40, 'rey@3', '03-Jan-2015', '08:29:53 PM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengarang`
--

CREATE TABLE IF NOT EXISTS `pengarang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kat` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `pengarang`
--

INSERT INTO `pengarang` (`id`, `kat`) VALUES
(1, 'Yusuf Abu'),
(2, 'Simson Rinekso'),
(3, 'Ahmad barizi'),
(4, 'Andi Rifki'),
(5, 'Maruf Pardarmean');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjung`
--

CREATE TABLE IF NOT EXISTS `pengunjung` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `no`) VALUES
(1, 56);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam`
--

CREATE TABLE IF NOT EXISTS `pinjam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(1000) NOT NULL,
  `buku` varchar(100) NOT NULL,
  `no` int(11) NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  `kembali` varchar(100) NOT NULL,
  `denda` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `h` int(11) NOT NULL,
  `p` int(11) NOT NULL,
  `d` int(11) NOT NULL,
  `n` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data untuk tabel `pinjam`
--

INSERT INTO `pinjam` (`id`, `nama`, `buku`, `no`, `tanggal`, `kembali`, `denda`, `keterangan`, `h`, `p`, `d`, `n`, `status`) VALUES
(18, 's@s', 'Imperia', 7, '19-Nov-2014', '19-Nov-2014', 0, 'selesai', 0, 0, 0, 1, 1),
(19, 'rey@3', 'Biar mengiris asal laris', 5, '20-Dec-2014', '22-Dec-2014', 0, 'selesai', 0, 0, 0, 1, 1),
(21, 's@s', 'Dendam dinasti berdarah', 7, '22-Dec-2014', '29-Dec-2014', 0, 'dipinjam', 0, 0, 0, 0, 1),
(22, 'rey@3', 'Dendam dinasti berdarah', 2, '22-Dec-2014', '29-Dec-2014', 0, 'dipinjam', 0, 0, 0, 0, 1),
(23, 'rey@3', 'All about durian', 1, '22-Dec-2014', '29-Dec-2014', 0, 'dipinjam', 0, 0, 0, 0, 1),
(25, 'donodoni@yahoo.com', 'Biar mengiris asal laris', 2, '23-Dec-2014', '30-Dec-2014', 0, 'dipinjam', 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_b` int(11) NOT NULL,
  `rat` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data untuk tabel `rating`
--

INSERT INTO `rating` (`id`, `id_b`, `rat`, `nama`) VALUES
(2, 2, 4, 's@s'),
(3, 6, 2, 's@s'),
(4, 5, 5, 's@s'),
(5, 3, 3, 's@s'),
(6, 11, 4, 's@s'),
(7, 10, 3, 's@s'),
(8, 9, 5, 's@s'),
(9, 8, 2, 's@s'),
(10, 10, 5, 'x@x'),
(11, 9, 1, 'a@a'),
(12, 7, 3, 's@s'),
(13, 8, 5, 'a@a'),
(14, 6, 5, 'a@a'),
(15, 3, 5, 'a@a'),
(16, 13, 3, 's@s'),
(17, 7, 5, 'rey@3'),
(18, 9, 1, 'rey@3'),
(19, 2, 2, 'rey@3'),
(20, 3, 5, 'rey@3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suka`
--

CREATE TABLE IF NOT EXISTS `suka` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_e` int(11) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `ket` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `suka`
--

INSERT INTO `suka` (`id`, `id_e`, `nama`, `ket`) VALUES
(5, 15, 'x@x', 'y'),
(6, 15, 's@s', 'y'),
(7, 18, 's@s', 'y'),
(8, 16, 's@s', 'y'),
(9, 16, 'rey@3', 'y'),
(10, 18, 'rey@3', 'y'),
(11, 17, 'rey@3', 'y');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
