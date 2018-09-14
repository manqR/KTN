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
  `idabout` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) NOT NULL,
  `full_description` text NOT NULL,
  `short_description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`idabout`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table ktn.aboutus: ~1 rows (approximately)
/*!40000 ALTER TABLE `aboutus` DISABLE KEYS */;
INSERT INTO `aboutus` (`idabout`, `kategori`, `full_description`, `short_description`) VALUES
	(3, 'profile', '<p style="text-align: justify;"><strong>&nbsp; &nbsp; &nbsp; &nbsp; Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</p><p style="text-align: justify;"><strong>&nbsp; &nbsp; &nbsp; Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<p style="text-align: justify;"><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>');
/*!40000 ALTER TABLE `aboutus` ENABLE KEYS */;


-- Dumping structure for table ktn.blog
CREATE TABLE IF NOT EXISTS `blog` (
  `idblog` int(11) NOT NULL AUTO_INCREMENT,
  `img_display` varchar(50) DEFAULT NULL,
  `title` varchar(50) NOT NULL,
  `short_description` varchar(500) DEFAULT NULL,
  `full_description` text NOT NULL,
  `tanggal` date DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idblog`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table ktn.blog: ~1 rows (approximately)
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` (`idblog`, `img_display`, `title`, `short_description`, `full_description`, `tanggal`, `author`) VALUES
	(2, 'd5d179f8681c523a467be991c3f2b298.jpg', 'Lorem Ipsum ', '<p style="text-align: justify;"><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s</p>', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</p><p><br></p><p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '2018-09-10', 'admin');
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;


-- Dumping structure for table ktn.client
CREATE TABLE IF NOT EXISTS `client` (
  `idclient` int(11) NOT NULL AUTO_INCREMENT,
  `nama_klien` varchar(50) DEFAULT NULL,
  `file_img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idclient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ktn.client: ~0 rows (approximately)
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
/*!40000 ALTER TABLE `client` ENABLE KEYS */;


-- Dumping structure for table ktn.faq
CREATE TABLE IF NOT EXISTS `faq` (
  `idfaq` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`idfaq`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table ktn.faq: ~1 rows (approximately)
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
INSERT INTO `faq` (`idfaq`, `question`, `answer`) VALUES
	(1, 'asd', 'asd');
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;


-- Dumping structure for table ktn.icon
CREATE TABLE IF NOT EXISTS `icon` (
  `idicon` int(11) NOT NULL AUTO_INCREMENT,
  `icon` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idicon`)
) ENGINE=InnoDB AUTO_INCREMENT=256 DEFAULT CHARSET=latin1;

-- Dumping data for table ktn.icon: ~189 rows (approximately)
/*!40000 ALTER TABLE `icon` DISABLE KEYS */;
INSERT INTO `icon` (`idicon`, `icon`) VALUES
	(1, 'icon-user icons'),
	(2, 'icon-people icons'),
	(3, 'icon-user-female icons'),
	(4, 'icon-user icons'),
	(5, 'icon-user-following icons'),
	(6, 'icon-user-unfollow icons'),
	(7, 'icon-login icons'),
	(8, 'icon-logout icons'),
	(9, 'icon-emotsmile icons'),
	(10, 'icon-phone icons'),
	(11, 'icon-call-end icons'),
	(12, 'icon-call-in icons'),
	(13, 'icon-call-out icons'),
	(14, 'icon-map icons'),
	(15, 'icon-location-pin icons'),
	(16, 'icon-direction icons'),
	(17, 'icon-directions icons'),
	(18, 'icon-compass icons'),
	(19, 'icon-layers icons'),
	(20, 'icon-menu icons'),
	(21, 'icon-list icons'),
	(22, 'icon-options-vertical icons'),
	(23, 'icon-options icons'),
	(24, 'icon-arrow-down icons'),
	(25, 'icon-arrow-left icons'),
	(26, 'icon-arrow-right icons'),
	(27, 'icon-arrow-up icons'),
	(28, 'icon-arrow-up-circle icons'),
	(29, 'icon-arrow-left-circle icons'),
	(30, 'icon-arrow-right-circle icons'),
	(31, 'icon-arrow-down-circle icons'),
	(32, 'icon-check icons'),
	(33, 'icon-clock icons'),
	(34, 'icon-plus icons'),
	(35, 'icon-minus icons'),
	(36, 'icon-close icons'),
	(37, 'icon-event icons'),
	(38, 'icon-exclamation icons'),
	(39, 'icon-organization icons'),
	(40, 'icon-trophy icons'),
	(41, 'icon-screen-smartphone icons'),
	(42, 'icon-screen-desktop icons'),
	(43, 'icon-plane icons'),
	(44, 'icon-notebook icons'),
	(45, 'icon-mustache icons'),
	(46, 'icon-mouse icons'),
	(47, 'icon-magnet icons'),
	(48, 'icon-energy icons'),
	(49, 'icon-disc icons'),
	(50, 'icon-cursor icons'),
	(51, 'icon-cursor-move icons'),
	(52, 'icon-crop icons'),
	(53, 'icon-chemistry icons'),
	(54, 'icon-speedometer icons'),
	(55, 'icon-shield icons'),
	(56, 'icon-screen-tablet icons'),
	(57, 'icon-magic-wand icons'),
	(58, 'icon-hourglass icons'),
	(59, 'icon-graduation icons'),
	(60, 'icon-ghost icons'),
	(61, 'icon-game-controller icons'),
	(62, 'icon-fire icons'),
	(63, 'icon-eyeglass icons'),
	(64, 'icon-envelope-open icons'),
	(65, 'icon-envelope-letter icons'),
	(66, 'icon-bell icons'),
	(67, 'icon-badge icons'),
	(68, 'icon-anchor icons'),
	(69, 'icon-wallet icons'),
	(70, 'icon-vector icons'),
	(71, 'icon-speech icons'),
	(72, 'icon-puzzle icons'),
	(73, 'icon-printer icons'),
	(74, 'icon-present icons'),
	(75, 'icon-playlist icons'),
	(76, 'icon-pin icons'),
	(77, 'icon-picture icons'),
	(78, 'icon-handbag icons'),
	(79, 'icon-globe-alt icons'),
	(80, 'icon-globe icons'),
	(81, 'icon-folder-alt icons'),
	(82, 'icon-folder icons'),
	(83, 'icon-film icons'),
	(84, 'icon-feed icons'),
	(85, 'icon-drop icons'),
	(86, 'icon-drawer icons'),
	(87, 'icon-docs icons'),
	(88, 'icon-doc icons'),
	(89, 'icon-diamond icons'),
	(90, 'icon-cup icons'),
	(91, 'icon-calculator icons'),
	(92, 'icon-bubbles icons'),
	(93, 'icon-briefcase icons'),
	(94, 'icon-book-open icons'),
	(95, 'icon-basket-loaded icons'),
	(96, 'icon-basket icons'),
	(97, 'icon-bag icons'),
	(98, 'icon-action-undo icons'),
	(99, 'icon-action-redo icons'),
	(100, 'icon-wrench icons'),
	(101, 'icon-umbrella icons'),
	(102, 'icon-trash icons'),
	(103, 'icon-tag icons'),
	(104, 'icon-support icons'),
	(105, 'icon-frame icons'),
	(106, 'icon-size-fullscreen icons'),
	(107, 'icon-size-actual icons'),
	(108, 'icon-shuffle icons'),
	(109, 'icon-share-alt icons'),
	(110, 'icon-share icons'),
	(111, 'icon-rocket icons'),
	(112, 'icon-question icons'),
	(113, 'icon-pie-chart icons'),
	(114, 'icon-pencil icons'),
	(115, 'icon-note icons'),
	(116, 'icon-loop icons'),
	(117, 'icon-home icons'),
	(118, 'icon-grid icons'),
	(119, 'icon-graph icons'),
	(120, 'icon-microphone icons'),
	(121, 'icon-music-tone-alt icons'),
	(122, 'icon-music-tone icons'),
	(123, 'icon-earphones-alt icons'),
	(124, 'icon-earphones icons'),
	(125, 'icon-equalizer icons'),
	(126, 'icon-like icons'),
	(127, 'icon-dislike icons'),
	(128, 'icon-control-start icons'),
	(129, 'icon-control-rewind icons'),
	(130, 'icon-control-play icons'),
	(131, 'icon-control-pause icons'),
	(132, 'icon-control-forward icons'),
	(133, 'icon-control-end icons'),
	(134, 'icon-volume-1 icons'),
	(135, 'icon-volume-2 icons'),
	(136, 'icon-volume-off icons'),
	(137, 'icon-calendar icons'),
	(138, 'icon-bulb icons'),
	(139, 'icon-chart icons'),
	(140, 'icon-ban icons'),
	(141, 'icon-bubble icons'),
	(142, 'icon-camrecorder icons'),
	(143, 'icon-camera icons'),
	(144, 'icon-cloud-download icons'),
	(145, 'icon-cloud-upload icons'),
	(146, 'icon-envelope icons'),
	(147, 'icon-eye icons'),
	(148, 'icon-flag icons'),
	(149, 'icon-heart icons'),
	(150, 'icon-info icons'),
	(151, 'icon-key icons'),
	(152, 'icon-link icons'),
	(153, 'icon-lock icons'),
	(154, 'icon-lock-open icons'),
	(155, 'icon-magnifier icons'),
	(156, 'icon-magnifier-add icons'),
	(157, 'icon-magnifier-remove icons'),
	(158, 'icon-paper-clip icons'),
	(159, 'icon-paper-plane icons'),
	(160, 'icon-power icons'),
	(161, 'icon-refresh icons'),
	(162, 'icon-reload icons'),
	(163, 'icon-settings icons'),
	(164, 'icon-star icons'),
	(165, 'icon-symbol-female icons'),
	(166, 'icon-symbol-male icons'),
	(167, 'icon-target icons'),
	(168, 'icon-credit-card icons'),
	(169, 'icon-paypal icons'),
	(170, 'icon-social-tumblr icons'),
	(171, 'icon-social-twitter icons'),
	(172, 'icon-social-facebook icons'),
	(173, 'icon-social-instagram icons'),
	(174, 'icon-social-linkedin icons'),
	(175, 'icon-social-pinterest icons'),
	(176, 'icon-social-github icons'),
	(177, 'icon-social-google icons'),
	(178, 'icon-social-reddit icons'),
	(179, 'icon-social-skype icons'),
	(180, 'icon-social-dribbble icons'),
	(181, 'icon-social-behance icons'),
	(182, 'icon-social-foursqare icons'),
	(183, 'icon-social-soundcloud icons'),
	(184, 'icon-social-spotify icons'),
	(185, 'icon-social-stumbleupon icons'),
	(186, 'icon-social-youtube icons'),
	(187, 'icon-social-dropbox icons'),
	(188, 'icon-social-vkontakte icons'),
	(189, 'icon-social-steam icons');
/*!40000 ALTER TABLE `icon` ENABLE KEYS */;


-- Dumping structure for table ktn.karir
CREATE TABLE IF NOT EXISTS `karir` (
  `idkarir` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `descripition` text NOT NULL,
  PRIMARY KEY (`idkarir`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table ktn.karir: ~1 rows (approximately)
/*!40000 ALTER TABLE `karir` DISABLE KEYS */;
INSERT INTO `karir` (`idkarir`, `title`, `descripition`) VALUES
	(1, 'asd', 'adsasd');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table ktn.kontak: ~1 rows (approximately)
/*!40000 ALTER TABLE `kontak` DISABLE KEYS */;
INSERT INTO `kontak` (`idkontak`, `alamat`, `tlp`, `email`, `facebook`, `twitter`, `linkedin`) VALUES
	(1, 'asd', 'asd', 'asdas', 'sdasd', 'asd', 'asdasd');
/*!40000 ALTER TABLE `kontak` ENABLE KEYS */;


-- Dumping structure for table ktn.layanan
CREATE TABLE IF NOT EXISTS `layanan` (
  `idlayanan` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `short_desc` varchar(500) DEFAULT NULL,
  `full_desc` text,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`idlayanan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table ktn.layanan: ~1 rows (approximately)
/*!40000 ALTER TABLE `layanan` DISABLE KEYS */;
INSERT INTO `layanan` (`idlayanan`, `img`, `title`, `short_desc`, `full_desc`, `status`) VALUES
	(2, 'icon-user icons', 'Customer Support', '<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque</p>', '<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque</p>', 1);
/*!40000 ALTER TABLE `layanan` ENABLE KEYS */;


-- Dumping structure for table ktn.logo
CREATE TABLE IF NOT EXISTS `logo` (
  `idlogo` int(11) NOT NULL AUTO_INCREMENT,
  `file_img` varchar(50) DEFAULT NULL,
  `alt` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idlogo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table ktn.logo: ~1 rows (approximately)
/*!40000 ALTER TABLE `logo` DISABLE KEYS */;
INSERT INTO `logo` (`idlogo`, `file_img`, `alt`) VALUES
	(1, '', 'asd');
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
  `idproduk` int(11) NOT NULL AUTO_INCREMENT,
  `idkategori` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`idproduk`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table ktn.produk: ~1 rows (approximately)
/*!40000 ALTER TABLE `produk` DISABLE KEYS */;
INSERT INTO `produk` (`idproduk`, `idkategori`, `title`, `image`, `description`) VALUES
	(1, 1, 'asdads', '', 'asdad');
/*!40000 ALTER TABLE `produk` ENABLE KEYS */;


-- Dumping structure for table ktn.produk_kategori
CREATE TABLE IF NOT EXISTS `produk_kategori` (
  `idcategory` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`idcategory`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table ktn.produk_kategori: ~1 rows (approximately)
/*!40000 ALTER TABLE `produk_kategori` DISABLE KEYS */;
INSERT INTO `produk_kategori` (`idcategory`, `name`, `status`) VALUES
	(1, 'q', 1);
/*!40000 ALTER TABLE `produk_kategori` ENABLE KEYS */;


-- Dumping structure for table ktn.slider
CREATE TABLE IF NOT EXISTS `slider` (
  `idslider` int(11) NOT NULL AUTO_INCREMENT,
  `title1` varchar(100) DEFAULT NULL,
  `title2` varchar(100) DEFAULT NULL,
  `img_slider` varchar(50) NOT NULL,
  `alt` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idslider`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table ktn.slider: ~2 rows (approximately)
/*!40000 ALTER TABLE `slider` DISABLE KEYS */;
INSERT INTO `slider` (`idslider`, `title1`, `title2`, `img_slider`, `alt`) VALUES
	(1, 'asd', 'asd', 'asdad.jpg', 'asd'),
	(2, 'ZZZzX', 'CCC', 'xxcx.jpg', 'asdad');
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
