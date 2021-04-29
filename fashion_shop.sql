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
  `id_barang` INT(11) NOT NULL,
  `nama_barang` VARCHAR(45) DEFAULT NULL,
  `deskripsi` VARCHAR(45) DEFAULT NULL,
  `harga` INT(11) DEFAULT NULL,
  `diskon` INT(11) DEFAULT NULL,
  `gambar` VARCHAR(225) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8;

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
  `id_kritik` INT(11) NOT NULL,
  `isi` VARCHAR(45) DEFAULT NULL,
  `tanggal` VARCHAR(45) DEFAULT NULL,
  `User_id` VARCHAR(10) NOT NULL,
  `email` VARCHAR(40) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `barang_id_barang` INT(11) NOT NULL,
  `User_id_user` VARCHAR(10) NOT NULL,
  `harga_barang` VARCHAR(45) DEFAULT NULL,
  `ongkos_kirim` VARCHAR(45) DEFAULT NULL,
  `alamat_kirim` VARCHAR(45) DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` VARCHAR(10) NOT NULL,
  `password` VARCHAR(45) DEFAULT NULL,
  `email` VARCHAR(45) DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `password`, `email`) VALUES
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
  ADD PRIMARY KEY (`id_kritik`,`User_id`),
  ADD KEY `fk_kritik_saran_User_idx` (`User_id`);

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
  MODIFY `id_kritik` INT(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  ADD CONSTRAINT `fk_kritik_saran_User` FOREIGN KEY (`User_id`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
