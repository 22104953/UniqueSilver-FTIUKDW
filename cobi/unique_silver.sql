-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 11. Nopember 2013 jam 18:01
-- Versi Server: 5.1.41
-- Versi PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unique_silver`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hubungi`
--

CREATE TABLE IF NOT EXISTS `hubungi` (
  `id_hubungi` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_hubungi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `hubungi`
--

INSERT INTO `hubungi` (`id_hubungi`, `nama`, `email`, `pesan`, `tanggal`) VALUES
(2, 'hehhehhe', 'ksdskkkl', 'kslkslakslakslaskla', '0000-00-00'),
(4, 'andre', 'hhh', 'jskjskjksjkjskjskjks', '2013-11-08'),
(5, 'gkgkg', 'efanglend@yahoo.com', 'r', '2013-11-08'),
(6, 'komang', 'de_ndree@yahoo.com', 'jelek', '2013-11-08'),
(7, '1', '2', '3', '2013-11-09'),
(8, '5', '6', '7', '2013-11-09'),
(9, 'rere', 'gi', 'na', '2013-11-09'),
(10, 'r', 'rererrererrerreer', 'r', '2013-11-10'),
(11, 'hahahah', 'hahaha', 'hahaha', '2013-11-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(50) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_depan`, `nama_belakang`, `email`, `telepon`, `password`) VALUES
(1, 'admin', 'adminn', 'admin@progweb.com', '08156934040', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'andree', 'caesario', 'de_ndree@yahoo.com', '08156934040', '48b9ed905114d16ef2a35099c0f80b3d');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
