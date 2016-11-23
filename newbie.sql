-- --------------------------------------------------------
-- Host:                         localhost
-- Versi server:                 5.5.27 - MySQL Community Server (GPL)
-- OS Server:                    Win32
-- HeidiSQL Versi:               9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- Dumping data for table newbie.admin: ~1 rows (approximately)
DELETE FROM `admin`;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id_admin`, `user`, `pass`) VALUES
	(1, 'redika', '123');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping data for table newbie.konten: ~3 rows (approximately)
DELETE FROM `konten`;
/*!40000 ALTER TABLE `konten` DISABLE KEYS */;
INSERT INTO `konten` (`id`, `tanggal`, `judul`, `isi_main`) VALUES
	(1, '5 Oktober 2016', 'Artikel 1', 'Lorem ipsum dolor sit amet, '),
	(2, '6 Oktober 2016', 'Artikel 2', 'Lorem ipsum dolor sit amet, (2)'),
	(3, '7 Oktober 2016', 'Artikel 3', 'Lorem ipsum dolor sit amet, (3)');
/*!40000 ALTER TABLE `konten` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
