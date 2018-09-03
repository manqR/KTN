-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.1.25-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table ktn.aboutus
CREATE TABLE IF NOT EXISTS `aboutus` (
  `idabout` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `full_description` text NOT NULL,
  `short_description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`idabout`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ktn.aboutus: ~0 rows (approximately)
/*!40000 ALTER TABLE `aboutus` DISABLE KEYS */;
/*!40000 ALTER TABLE `aboutus` ENABLE KEYS */;


-- Dumping structure for table ktn.blog
CREATE TABLE IF NOT EXISTS `blog` (
  `idblog` int(11) NOT NULL,
  `img_display` varchar(50) DEFAULT NULL,
  `title` varchar(50) NOT NULL,
  `short_description` varchar(500) DEFAULT NULL,
  `full_description` text NOT NULL,
  `tanggal` date DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idblog`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ktn.blog: ~0 rows (approximately)
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;


-- Dumping structure for table ktn.client
CREATE TABLE IF NOT EXISTS `client` (
  `idclient` int(11) NOT NULL,
  `nama_klien` varchar(50) DEFAULT NULL,
  `file_img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idclient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ktn.client: ~0 rows (approximately)
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
/*!40000 ALTER TABLE `client` ENABLE KEYS */;


-- Dumping structure for table ktn.faq
CREATE TABLE IF NOT EXISTS `faq` (
  `idfaq` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`idfaq`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ktn.faq: ~0 rows (approximately)
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;


-- Dumping structure for table ktn.karir
CREATE TABLE IF NOT EXISTS `karir` (
  `idkarir` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `descripition` text NOT NULL,
  PRIMARY KEY (`idkarir`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ktn.karir: ~0 rows (approximately)
/*!40000 ALTER TABLE `karir` DISABLE KEYS */;
/*!40000 ALTER TABLE `karir` ENABLE KEYS */;


-- Dumping structure for table ktn.kontak
CREATE TABLE IF NOT EXISTS `kontak` (
  `idkontak` int(11) NOT NULL AUTO_INCREMENT,
  `alamat` varchar(225) DEFAULT NULL,
  `tlp` char(14) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `linkedin` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idkontak`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ktn.kontak: ~0 rows (approximately)
/*!40000 ALTER TABLE `kontak` DISABLE KEYS */;
/*!40000 ALTER TABLE `kontak` ENABLE KEYS */;


-- Dumping structure for table ktn.layanan
CREATE TABLE IF NOT EXISTS `layanan` (
  `idlayanan` int(11) NOT NULL,
  `img` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `short_desc` varchar(500) DEFAULT NULL,
  `full_desc` text,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`idlayanan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ktn.layanan: ~0 rows (approximately)
/*!40000 ALTER TABLE `layanan` DISABLE KEYS */;
/*!40000 ALTER TABLE `layanan` ENABLE KEYS */;


-- Dumping structure for table ktn.logo
CREATE TABLE IF NOT EXISTS `logo` (
  `idlogo` int(11) NOT NULL,
  `file_img` varchar(50) DEFAULT NULL,
  `alt` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idlogo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ktn.logo: ~0 rows (approximately)
/*!40000 ALTER TABLE `logo` DISABLE KEYS */;
/*!40000 ALTER TABLE `logo` ENABLE KEYS */;


-- Dumping structure for table ktn.migration
CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ktn.migration: ~2 rows (approximately)
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` (`version`, `apply_time`) VALUES
	('m000000_000000_base', 1535686535),
	('m130524_201442_init', 1535686538);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;


-- Dumping structure for table ktn.produk
CREATE TABLE IF NOT EXISTS `produk` (
  `idproduk` int(11) NOT NULL,
  `idkategori` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`idproduk`),
  KEY `FK__produk_kategori` (`idkategori`),
  CONSTRAINT `FK__produk_kategori` FOREIGN KEY (`idkategori`) REFERENCES `produk_kategori` (`idcategory`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ktn.produk: ~0 rows (approximately)
/*!40000 ALTER TABLE `produk` DISABLE KEYS */;
/*!40000 ALTER TABLE `produk` ENABLE KEYS */;


-- Dumping structure for table ktn.produk_kategori
CREATE TABLE IF NOT EXISTS `produk_kategori` (
  `idcategory` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`idcategory`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ktn.produk_kategori: ~0 rows (approximately)
/*!40000 ALTER TABLE `produk_kategori` DISABLE KEYS */;
/*!40000 ALTER TABLE `produk_kategori` ENABLE KEYS */;


-- Dumping structure for table ktn.slider
CREATE TABLE IF NOT EXISTS `slider` (
  `idslider` int(11) NOT NULL AUTO_INCREMENT,
  `title1` varchar(100) DEFAULT NULL,
  `title2` varchar(100) DEFAULT NULL,
  `img_slider` varchar(50) NOT NULL,
  `alt` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idslider`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ktn.slider: ~0 rows (approximately)
/*!40000 ALTER TABLE `slider` DISABLE KEYS */;
/*!40000 ALTER TABLE `slider` ENABLE KEYS */;


-- Dumping structure for table ktn.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table ktn.user: ~0 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'yiIkeUvUprT44FXpclvQqWP9HaGvXx8t', '$2y$13$K5QTonm/ygHo3EA96RrfBOROSberlDKFEZM3wNR3jrZBkAvei4Bym', NULL, 'admin.center@pt-ktn.com', 10, 1535686754, 1535686754);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
