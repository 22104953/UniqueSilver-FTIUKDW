-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 29, 2013 at 02:39 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

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
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(60) NOT NULL,
  `harga` int(10) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `nama_gambar` varchar(20) NOT NULL,
  `gambar_detail` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `deskripsi`, `kategori`, `kode`, `nama_gambar`, `gambar_detail`) VALUES
(2, 'Rectanglular Pave ', 160000, '925 Sterling Silver', 'Anting', 'AN0001', 'AN0001-120x120.jpg', 'AN0001-250x250.jpg'),
(3, 'Silver Dangle Earrings', 200000, 'AN0002', 'Anting', 'AN0002', 'AN0002-120x120.jpg', 'AN0002-250x250.jpg'),
(4, 'Lovely 925 Sterling ', 166000, 'AN0003', 'Anting', 'AN0003', 'AN0003-120x120.jpg', ''),
(5, 'Ornate 925 Sterling ', 190000, 'AN0004', 'Anting', 'AN0004', 'AN0004-120x120.jpg', ''),
(6, 'Crystal Glass', 200000, 'AN0005', 'Anting', 'AN0005', 'AN0005-120x120.jpg', ''),
(7, 'Sterling Silver Hugg', 155000, 'CN0001', 'cincin', 'CN0001', 'CN0001-120x120.jpg', 'CN0001-250x250.jpg'),
(8, 'Cluster Cocktail Ring ', 172000, 'CN0002', 'cincin', 'CN0002', 'CN0002-120x120.jpg', 'CN0002-250x250.jpg'),
(9, 'Natural Amethyst', 153000, 'CN0003', 'cincin', 'CN0003', 'CN0003-120x120.jpg', ''),
(10, 'Blue Topaz Ring ', 189000, 'CN0004', 'cincin', 'CN0004', 'CN0004-120x120.jpg', ''),
(11, 'Silver Filigree Ring', 389000, 'CN0005', 'cincin', 'CN0005', 'CN0005-120x120.jpg', ''),
(17, 'Silver Dangle Ring', 170000, 'CN0006', 'cincin', 'CN0006', 'CN0006-120120.jpg', ''),
(18, 'Intertwined Vines ', 155000, 'Openwork Band Ring', 'cincin', 'CN0007', 'CN0007-120x120.jpg', ''),
(19, 'Elegant Rounded ', 325000, 'Ring Adorned with an "X" Pattern', 'cincin', 'CN0008', 'CN0008-120x120.jpg', ''),
(20, 'Band Ring ', 469000, 'Raised Swirl and Granulated Design', 'cincin', 'CN0009', 'CN0009-120x120.jpg', ''),
(21, 'Crystal Blue', 200000, 'AN0006', 'Anting', 'AN0006', 'AN0006-120x120.jpg', ''),
(22, 'Silver Dangle ', 210000, 'AN0007', 'Anting', 'AN0007', 'AN0007-120x120.jpg', ''),
(23, 'Lovely 925 Sterling ', 185000, 'AN0008', 'Anting', 'AN0008', 'AN0008-120x120.jpg', ''),
(24, 'Swarovski Crystal', 250000, 'AN0009', 'Anting', 'AN0009', 'AN0009-120x120.jpg', ''),
(25, 'Crystal Silver', 210000, 'AN0010', 'Anting', 'AN0010', 'AN0010-120x120.jpg', ''),
(26, 'Bullet Silver', 210000, 'AN0011', 'Anting', 'AN0011', 'AN0011-120x120.jpg', ''),
(27, 'Ornate 925 ', 210000, 'AN0012', 'Anting', 'AN0012', 'AN0012-120x120.jpg', ''),
(28, 'Beautiful Swirled Filigree ', 230000, 'Toggle Bracelet with Six 3 mm Round Gem Cabs', 'gelang', 'GL0001', 'GL0001-120x120.jpg', 'GL0001-250x250.jpg'),
(29, 'Delicate Swirled Filigree ', 625000, 'Link Toggle Bracelet with Ten 5 mm Round Gems', 'gelang', 'GL0002', 'GL0002-120x120.jpg', ''),
(30, 'Woven Link Toggle Bracelet ', 750000, '12x6 mm Marquise Shaped Gem Cab Centerpiece', 'gelang', 'GL0003', 'GL0003-120x120.jpg', ''),
(31, 'Splendid Swirled Filigree ', 125000, 'Rectangular Link Bracelet with Six 5 mm Square Gem Cabs', 'gelang', 'GL0004', 'GL0004-120x120.jpg', ''),
(32, 'Wonderful Engraved Woven ', 550000, 'Link Toggle Bracelet with Five 10 mm Round Gem Cabs', 'gelang', 'GL0005', 'GL0005-120x120.jpg', ''),
(33, 'Snake Chain Necklace ', 550000, 'Ornate Engraved Swirled Pendant and Lobster Clasp', 'kalung', 'KL0001', 'KL0001-120x120.jpg', ''),
(34, 'Ornate Swirled ', 550000, 'Ornate Swirled Link ', 'kalung', 'KL0002', 'KL0002-120x120.jpg', ''),
(35, 'Romantic Snake Chain ', 350000, 'Alternating Heart and Bead Adornments', 'kalung', 'KL0003', 'KL0003-120x120.jpg', ''),
(36, 'Snake Chain', 185000, 'Swirled Pendant Centerpiece', 'kalung', 'KL0004', 'KL0004-120x120.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tgl_join` date NOT NULL,
  `nama` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `tgl_join`, `nama`) VALUES
(1, 'admin', 'admin', 'tisna_komang@yahoo.com', '2013-11-28', 'Komang');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
