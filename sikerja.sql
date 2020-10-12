-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.11-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for sikerja
CREATE DATABASE IF NOT EXISTS `sikerja` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `sikerja`;

-- Dumping structure for table sikerja.daftar_pembatik
CREATE TABLE IF NOT EXISTS `daftar_pembatik` (
  `jumlah_kain` varchar(4) DEFAULT NULL,
  `kode_pembatik` varchar(20) DEFAULT NULL,
  `batas` date DEFAULT NULL,
  `tanggal_ambil` date DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `kode_motif` varchar(20) DEFAULT NULL,
  `jenis_kain` varchar(50) DEFAULT NULL,
  `oleh` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table sikerja.daftar_pembatik: ~4 rows (approximately)
/*!40000 ALTER TABLE `daftar_pembatik` DISABLE KEYS */;
INSERT INTO `daftar_pembatik` (`jumlah_kain`, `kode_pembatik`, `batas`, `tanggal_ambil`, `tanggal_kembali`, `kode_motif`, `jenis_kain`, `oleh`) VALUES
	('2', '24', '2020-06-29', '2020-06-30', '2020-07-06', '44', '114', 'Staff'),
	('5', '23', '2020-07-01', '2020-07-01', '2020-07-05', '43', '112', 'Staff'),
	('6', '21', '2020-07-02', '2020-07-02', '2020-07-04', '41', '115', 'Staff'),
	('2', '26', '2020-07-01', '2020-07-01', '2020-07-05', '46', '112', 'Staff');
/*!40000 ALTER TABLE `daftar_pembatik` ENABLE KEYS */;

-- Dumping structure for table sikerja.daftar_penjahit
CREATE TABLE IF NOT EXISTS `daftar_penjahit` (
  `jumlah_kain` varchar(4) DEFAULT NULL,
  `kode_penjahit` varchar(15) DEFAULT NULL,
  `batas` date DEFAULT NULL,
  `tanggal_ambil` date DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `kode_model` varchar(4) DEFAULT NULL,
  `kain` varchar(20) DEFAULT NULL,
  `ukuran` varchar(4) DEFAULT NULL,
  `oleh` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table sikerja.daftar_penjahit: ~2 rows (approximately)
/*!40000 ALTER TABLE `daftar_penjahit` DISABLE KEYS */;
INSERT INTO `daftar_penjahit` (`jumlah_kain`, `kode_penjahit`, `batas`, `tanggal_ambil`, `tanggal_kembali`, `kode_model`, `kain`, `ukuran`, `oleh`) VALUES
	('1', '12', '2020-07-06', NULL, NULL, '31', 'BudiKeraton0507', 'L', NULL),
	('4', '11', '2020-07-02', NULL, NULL, '34', 'AhmadTujuhRupa0607', 'XL', NULL);
/*!40000 ALTER TABLE `daftar_penjahit` ENABLE KEYS */;

-- Dumping structure for table sikerja.kain_batik
CREATE TABLE IF NOT EXISTS `kain_batik` (
  `kode_motif` varchar(50) NOT NULL DEFAULT '',
  `Nama_motif` varchar(50) DEFAULT NULL,
  `Jumlah` int(11) DEFAULT NULL,
  `Tanggal_masuk` date DEFAULT NULL,
  `Tanggal_keluar` date DEFAULT NULL,
  `ukuran` int(11) DEFAULT NULL,
  `jenis_kain` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode_motif`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table sikerja.kain_batik: ~4 rows (approximately)
/*!40000 ALTER TABLE `kain_batik` DISABLE KEYS */;
INSERT INTO `kain_batik` (`kode_motif`, `Nama_motif`, `Jumlah`, `Tanggal_masuk`, `Tanggal_keluar`, `ukuran`, `jenis_kain`) VALUES
	('AhmadTujuhRupa0607', 'Tujuh Rupa Ahmad', 2, '2020-07-06', NULL, 3, '114'),
	('BudiKeraton0507', 'Keraton Budi', 2, '2020-07-05', NULL, 4, '112'),
	('DartoPrambanan0407', 'Prambanan Darto', 6, '2020-07-04', NULL, 6, '115'),
	('TejoMegamendung0507', 'Megamendung Tejo', 5, '2020-07-05', NULL, 4, '112');
/*!40000 ALTER TABLE `kain_batik` ENABLE KEYS */;

-- Dumping structure for table sikerja.kain_batik_jadi
CREATE TABLE IF NOT EXISTS `kain_batik_jadi` (
  `kode_motif` varchar(20) DEFAULT NULL,
  `nama_motif` varchar(20) DEFAULT NULL,
  `ukuran` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `jenis_kain` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sikerja.kain_batik_jadi: ~4 rows (approximately)
/*!40000 ALTER TABLE `kain_batik_jadi` DISABLE KEYS */;
INSERT INTO `kain_batik_jadi` (`kode_motif`, `nama_motif`, `ukuran`, `jumlah`, `jenis_kain`) VALUES
	('DartoPrambanan0407', 'Prambanan Darto', 6, 2, '115'),
	('BudiKeraton0507', 'Keraton Budi', 4, 1, '112'),
	('TejoMegamendung0507', 'Megamendung Tejo', 4, 3, '112'),
	('AhmadTujuhRupa0607', 'Tujuh Rupa Ahmad', 3, 2, '114');
/*!40000 ALTER TABLE `kain_batik_jadi` ENABLE KEYS */;

-- Dumping structure for table sikerja.kain_potong
CREATE TABLE IF NOT EXISTS `kain_potong` (
  `id` varchar(10) DEFAULT NULL,
  `jenis_kain` varchar(10) DEFAULT NULL,
  `ukuran` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sikerja.kain_potong: ~4 rows (approximately)
/*!40000 ALTER TABLE `kain_potong` DISABLE KEYS */;
INSERT INTO `kain_potong` (`id`, `jenis_kain`, `ukuran`, `jumlah`) VALUES
	('112', 'Katun ', 4, 103),
	('113', 'Sutra', 5, 200),
	('114', 'Paris', 3, 298),
	('115', 'Mori', 6, 144);
/*!40000 ALTER TABLE `kain_potong` ENABLE KEYS */;

-- Dumping structure for table sikerja.kain_putih
CREATE TABLE IF NOT EXISTS `kain_putih` (
  `id` varchar(50) NOT NULL DEFAULT '',
  `jenis` varchar(50) DEFAULT NULL,
  `ukuran` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `tanggal_masuk` varchar(50) DEFAULT NULL,
  `Tanggal_keluar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table sikerja.kain_putih: ~4 rows (approximately)
/*!40000 ALTER TABLE `kain_putih` DISABLE KEYS */;
INSERT INTO `kain_putih` (`id`, `jenis`, `ukuran`, `jumlah`, `tanggal_masuk`, `Tanggal_keluar`) VALUES
	('112', 'Katun', 4, 32, '02-01-2020', '02-03-2020'),
	('113', 'Sutra', 5, 31, '02-04-2020', '02-07-2020'),
	('114', 'Paris', 3, 25, '2020-02-01', '2020-03-21'),
	('115', 'Mori', 6, 12, '2020-03-21', '2020-03-22');
/*!40000 ALTER TABLE `kain_putih` ENABLE KEYS */;

-- Dumping structure for table sikerja.kain_putih_potong
CREATE TABLE IF NOT EXISTS `kain_putih_potong` (
  `id` varchar(50) DEFAULT NULL,
  `jenis_kain` varchar(50) DEFAULT NULL,
  `ukuran` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `tanggal_keluar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table sikerja.kain_putih_potong: ~4 rows (approximately)
/*!40000 ALTER TABLE `kain_putih_potong` DISABLE KEYS */;
INSERT INTO `kain_putih_potong` (`id`, `jenis_kain`, `ukuran`, `jumlah`, `tanggal_masuk`, `tanggal_keluar`) VALUES
	('112', 'Katun', 4, 110, '2020-02-13', '2020-07-01'),
	('113', 'Sutra', 5, 200, '2020-02-13', '2020-06-30'),
	('114', 'Paris', 3, 300, '2020-03-21', '2020-06-30'),
	('115', 'Mori', 6, 150, '2020-03-22', '2020-07-02');
/*!40000 ALTER TABLE `kain_putih_potong` ENABLE KEYS */;

-- Dumping structure for table sikerja.model
CREATE TABLE IF NOT EXISTS `model` (
  `kode_model` varchar(4) NOT NULL DEFAULT '',
  `nama_model` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`kode_model`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table sikerja.model: ~5 rows (approximately)
/*!40000 ALTER TABLE `model` DISABLE KEYS */;
INSERT INTO `model` (`kode_model`, `nama_model`) VALUES
	('31', 'Gamis'),
	('32', 'Blus'),
	('33', 'Jaket'),
	('34', 'Kaos'),
	('35', 'Kemeja');
/*!40000 ALTER TABLE `model` ENABLE KEYS */;

-- Dumping structure for table sikerja.motif
CREATE TABLE IF NOT EXISTS `motif` (
  `kode_motif` varchar(4) NOT NULL DEFAULT '',
  `nama_motif` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`kode_motif`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table sikerja.motif: ~7 rows (approximately)
/*!40000 ALTER TABLE `motif` DISABLE KEYS */;
INSERT INTO `motif` (`kode_motif`, `nama_motif`) VALUES
	('41', 'Prambanan'),
	('42', 'Borobudur'),
	('43', 'Megamendung'),
	('44', 'Tujuh Rupa'),
	('45', 'Parang Rusak'),
	('46', 'Keraton'),
	('47', 'Borobudurs');
/*!40000 ALTER TABLE `motif` ENABLE KEYS */;

-- Dumping structure for table sikerja.pakaian
CREATE TABLE IF NOT EXISTS `pakaian` (
  `id_pakaian` varchar(50) NOT NULL DEFAULT 'AUTO_INCREMENT',
  `model` varchar(50) DEFAULT NULL,
  `motif` varchar(50) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `tanggal_keluar` date DEFAULT NULL,
  PRIMARY KEY (`id_pakaian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table sikerja.pakaian: ~6 rows (approximately)
/*!40000 ALTER TABLE `pakaian` DISABLE KEYS */;
INSERT INTO `pakaian` (`id_pakaian`, `model`, `motif`, `jumlah`, `tanggal_masuk`, `tanggal_keluar`) VALUES
	('1', 'keren', 'uhuy', 12, '2020-01-30', '2020-01-31'),
	('12', 'keren', 'c123', 234, NULL, NULL),
	('2', 'tes', 'tes', 13, '0000-00-00', '0000-00-00'),
	('41', 'uhuy', 'uhuy', 13, '2020-03-21', '2020-03-22'),
	('5', 'model', 'asik', 1, '2020-02-19', NULL),
	('surti23022020', 'jaketSurti', 'cek1', 4, '2020-02-23', NULL);
/*!40000 ALTER TABLE `pakaian` ENABLE KEYS */;

-- Dumping structure for table sikerja.pembatik
CREATE TABLE IF NOT EXISTS `pembatik` (
  `kode_pembatik` varchar(4) NOT NULL DEFAULT '',
  `nama_pembatik` varchar(20) DEFAULT NULL,
  `kuota` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`kode_pembatik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table sikerja.pembatik: ~6 rows (approximately)
/*!40000 ALTER TABLE `pembatik` DISABLE KEYS */;
INSERT INTO `pembatik` (`kode_pembatik`, `nama_pembatik`, `kuota`) VALUES
	('21', 'Darto', '50'),
	('22', 'Salim', '20'),
	('23', 'Tejo', '40'),
	('24', 'Ahmad', '25'),
	('25', 'Mono', '30'),
	('26', 'Suryono', '40');
/*!40000 ALTER TABLE `pembatik` ENABLE KEYS */;

-- Dumping structure for table sikerja.penjahit
CREATE TABLE IF NOT EXISTS `penjahit` (
  `kode_penjahit` varchar(4) NOT NULL DEFAULT '',
  `nama_penjahit` varchar(20) DEFAULT NULL,
  `kuota` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`kode_penjahit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table sikerja.penjahit: ~6 rows (approximately)
/*!40000 ALTER TABLE `penjahit` DISABLE KEYS */;
INSERT INTO `penjahit` (`kode_penjahit`, `nama_penjahit`, `kuota`) VALUES
	('11', 'Bambang', '40'),
	('12', 'Arie', '40'),
	('13', 'Parman', '35'),
	('14', 'Surti', '25'),
	('15', 'Suryo', '20'),
	('16', 'Ngatmi', '30');
/*!40000 ALTER TABLE `penjahit` ENABLE KEYS */;

-- Dumping structure for table sikerja.user
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(15) NOT NULL DEFAULT '',
  `password` varchar(20) DEFAULT NULL,
  `level` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table sikerja.user: ~7 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`username`, `password`, `level`) VALUES
	('Koordinator', 'koor12345', '2'),
	('Koordinator1', 'koor12345', '22'),
	('Owner', 'owner12345', '1'),
	('Owner1', '123', '11'),
	('Staff', 'staff', '3'),
	('Staff1', 'staff', '33'),
	('staff4', '123', '33');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
