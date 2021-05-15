-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2021 at 08:04 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(45) DEFAULT NULL,
  `deskripsi` varchar(45) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `diskon` int(11) DEFAULT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `deskripsi`, `harga`, `diskon`, `gambar`) VALUES
(1, 'Zalia Textured Drape Wrap Topt', 'Bahan Katun dan tidak luntur ', 300000, 0, 'wanita1.jpg'),
(2, 'Kemeja Pria', 'Barang dijamin BAGUS, KECE,coba aja order', 180000, 50, 'pria1.jpg'),
(3, 'Kemeja Wanita', 'Bahan Katun yang berkualitas ', 180000, 50, 'diskon3.jpg'),
(4, 'Kai Top Blouse Wanita', 'bahan crepe berkualitas', 200000, 0, 'wanita2.jpg'),
(5, 'Baju kokoh', 'Halus, Ringan dan Nyaman dipakai', 220000, 70, 'pria2.jpg'),
(6, 'Baju Gemes', 'BAHAN WOLFIS, HALUS, TIDAK PANAS', 180000, 0, 'diskon2.jpg');
-- --------------------------------------------------------

--
-- Table structure for table `kritik_saran`
--

CREATE TABLE `kritik_saran` (
  `id_kritik` int(11) NOT NULL,
  `isi` varchar(45) DEFAULT NULL,
  `nama` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `tanggal` date DEFAULT current_timestamp(),
  `telp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kritik_saran`
--

INSERT INTO `kritik_saran` (`id_kritik`, `isi`, `nama`, `email`, `tanggal`, `telp`) VALUES
(4, 'helo guys', 'Horror', 'elisa@gmail.com', '2021-05-04', '085956456900'),
(15, 'Saya suka websitenya. lucu!', 'Sonia', 'admin@gmail.com', '2021-05-05', '082167183916'),
(16, 'semangat seller!', 'Lily', 'admin@gmail.com', '2021-05-05', '085968666324');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `barang_id_barang` int(11) NOT NULL,
  `User_id_user` varchar(10) NOT NULL,
  `harga_barang` int(45) DEFAULT NULL,
  `ongkos_kirim` int(45) DEFAULT NULL,
  `alamat_kirim` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`barang_id_barang`, `User_id_user`, `harga_barang`, `ongkos_kirim`, `alamat_kirim`) VALUES
(1, 'elisa01', 150000, 19000, 'Balige'),
(2, 'elisa01', 90000, 19000, 'Balige');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(10) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `password`, `email`) VALUES
('a', 'a', 'a'),
('elisa01', 'elisa01', 'elisa@gmail.com'),
('lily11', 'lily11', 'lily11@gmail.com'),
('q', 'q', 'q');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  ADD PRIMARY KEY (`id_kritik`) USING BTREE;

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`barang_id_barang`,`User_id_user`),
  ADD KEY `fk_order_User1_idx` (`User_id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  MODIFY `id_kritik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_order_User1` FOREIGN KEY (`User_id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_order_barang1` FOREIGN KEY (`barang_id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
