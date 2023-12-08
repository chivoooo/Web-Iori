-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 02:06 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id_carousel` int(11) NOT NULL,
  `judul` varchar(60) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id_carousel`, `judul`, `foto`) VALUES
(10, 'Proklamasi Kemerdekaan', '20231126131856.jpg'),
(15, 'Kearifan Lokal Soto Kudus', '20231201043535.jpg'),
(16, 'Kearifan Lokal Tiwul', '20231203142733.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'sejarah');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `judul_website` varchar(60) NOT NULL,
  `profil_website` text NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `tiktok` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `judul_website`, `profil_website`, `instagram`, `facebook`, `tiktok`, `alamat`, `email`) VALUES
(1, 'Web CMS iori', 'Hai Nama Saya Chivo Poundra Nugraha Saputra Dari Kelas 11 RC. Dan inilah Web CMS kolaborasi milik saya. Saya memiliki Hobi badminton dan bermain game.', 'instagram/chivopoundra', 'facebook/mrmunchausen', 'tiktok/iori.tiktok', 'Alamat : Ngamban, Buran, Tasikmadu, Karanganyar.', 'chivopoundra191206@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL,
  `judul` varchar(60) NOT NULL,
  `keterangan` text NOT NULL,
  `slug` varchar(60) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(60) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `keterangan`, `slug`, `id_kategori`, `tanggal`, `username`, `foto`) VALUES
(14, 'Proklamasi Kemerdekaan', 'Proklamasi Kemerdekaan Indonesia dilaksanakan pada hari Jumat, 17 Agustus 1945 tahun Masehi, atau tanggal 17 Agustus 2605 menurut tahun Jepang (kōki) (17 Agustus Shōwa 20 dalam penanggalan Jepang itu sendiri), yang dibacakan oleh Soekarno dengan didampingi oleh Mohammad Hatta di sebuah rumah di Jalan Pegangsaan Timur No. 56, Jakarta Pusat.\r\n\r\nChairul Basri, yang bekerja pada kantor propaganda Jepang, disuruh mencari rumah yang berhalaman luas. Rumah Pegangsaan Timur 56 milik orang Belanda ditukar dengan rumah lain di Jalan Lembang. Jadi rumah itu memang disiapkan Jepang untuk Bung Karno. Chairul tidak menyebut nama pemilik rumah itu. Saat diambil alih pemerintah Jepang untuk Sukarno, rumah itu milik Mr. Jhr. P.R. Feith seperti disebut Kwee Kek Beng, pemimpin redaksi koran Sin Po dari 1925 sampai 1947, dalam Doea Poeloe Lima Tahon Sebagi Wartawan, 1922–1947 (1948).\r\n\r\nDari pemberitaan di koran Sin Po 5 Juli 1948 diketahui bahwa rumah tersebut merupakan rumah bersejarah bagi bangsa Indonesia karena menjadi tempat diproklamasikannya kemerdekaan. Rumah tersebut juga pernah dipakai sebagai rumah pertemuan. Belanda juga pernah memfungsikan rumah tersebut sebagai rumah tawanan juga. Rumah itu pun berubah lagi menjadi Gedung Republik. Hingga akhirnya pemiliknya yang orang Belanda menjualnya seharga 250 ribu gulden (ƒ). Rumah ini akhirnya dibeli oleh pemerintah Indonesia. Pada tanggal 6 Agustus 1945 sebuah bom atom dijatuhkan di atas kota Hiroshima Jepang oleh Amerika Serikat yang mulai menurunkan moral semangat tentara Jepang di seluruh dunia. Sehari kemudian, Badan Penyelidik Usaha-Usaha Persiapan Kemerdekaan (disingkat BPUPK; Jepang: 独立準備調査会, Dokuritsu Junbi Chōsa-kai), berganti nama menjadi Panitia Persiapan Kemerdekaan Indonesia (disingkat PPKI; Jepang: 独立準備委員会, Dokuritsu Junbi Iin-kai), untuk lebih menegaskan keinginan dan tujuan mencapai kemerdekaan Indonesia. Pada tanggal 9 Agustus 1945, bom atom kedua dijatuhkan di atas Nagasaki, yang menyebabkan Jepang menyerah kepada Amerika Serikat dan sekutunya. Momen ini pun dimanfaatkan oleh Indonesia untuk memproklamasikan kemerdekaannya.\r\n\r\nSoekarno dan Hatta selaku pimpinan PPKI serta Radjiman Wedyodiningrat sebagai mantan ketua BPUPKI diterbangkan ke Dalat, 250 km di sebelah timur laut Saigon, Vietnam, untuk bertemu Marsekal Hisaichi Terauchi, pimpinan tertinggi Jepang di Asia Tenggara dan putra mantan Perdana Menteri Terauchi Masatake. Mereka bertiga dikabarkan bahwa pasukan Jepang sedang di ambang kekalahan dan akan memberikan kemerdekaan kepada Indonesia. Sementara itu di Indonesia, pada tanggal 10 Agustus 1945, Sutan Syahrir telah mendengar berita lewat radio bahwa Jepang telah menyerah kepada Sekutu. Para pejuang bawah tanah bersiap-siap memproklamasikan kemerdekaan Indonesia, dan menolak bentuk kemerdekaan yang diberikan sebagai hadiah Jepang.\r\n\r\nPada tanggal 12 Agustus 1945, Jepang melalui Marsekal Terauchi di Dalat, Vietnam, mengatakan kepada Soekarno, Hatta, dan Radjiman bahwa pemerintah Jepang akan segera memberikan kemerdekaan kepada Indonesia dan proklamasi kemerdekaan dapat dilaksanakan dalam beberapa hari, berdasarkan tim PPKI. Meskipun demikian, Terauchi menginginkan proklamasi diadakan pada 24 Agustus 1945. Dua hari kemudian, saat Soekarno, Hatta, dan Radjiman kembali ke tanah air dari Dalat, Sutan Syahrir mendesak agar Soekarno segera memproklamasikan kemerdekaan karena menganggap hasil pertemuan di Dalat sebagai tipu muslihat Jepang, karena Jepang telah menyerah kepada Sekutu dan demi menghindari perpecahan dalam kubu nasionalis, antara yang anti dan pro Jepang. Hatta menceritakan kepada Syahrir tentang hasil pertemuan di Dalat. Soekarno belum yakin bahwa Jepang memang telah menyerah, dan proklamasi kemerdekaan RI saat itu dapat menimbulkan pertumpahan darah yang besar, dan dapat berakibat fatal jika para pejuang Indonesia belum siap. Soekarno mengingatkan Hatta bahwa Syahrir tidak berhak memproklamasikan kemerdekaan karena itu adalah hak PPKI. Sementara itu Syahrir menganggap PPKI adalah badan buatan Jepang dan proklamasi kemerdekaan oleh PPKI hanya merupakan \'hadiah\' dari Jepang. Pada tanggal 2 September 1945 Jepang secara resmi menyerah kepada Sekutu di kapal USS Missouri. Tentara dan Angkatan Laut Jepang masih berkuasa di Indonesia karena Jepang berjanji akan mengembalikan kekuasaan di Indonesia ke tangan Sekutu. Sutan Sjahrir, Wikana, Darwis, dan Chaerul Saleh mendengar kabar ini melalui radio BBC. Setelah mendengar desas-desus Jepang bakal bertekuk lutut, golongan muda mendesak golongan tua untuk segera memproklamasikan kemerdekaan Indonesia. Namun golongan tua tidak ingin terburu-buru. Mereka tidak menginginkan terjadinya pertumpahan darah pada saat proklamasi. Konsultasi pun dilakukan dalam bentuk rapat PPKI. Golongan muda tidak menyetujui rapat itu, mengingat PPKI adalah sebuah badan yang dibentuk oleh Jepang. Mereka menginginkan kemerdekaan atas usaha bangsa kita sendiri, bukan pemberian Jepang.\r\n\r\nSoekarno dan Hatta mendatangi penguasa militer Jepang (Gunsei) untuk memperoleh konfirmasi di kantornya di Koningsplein (Medan Merdeka). Namun, kantor tersebut kosong.\r\n\r\nSoekarno dan Hatta bersama Achmad Soebardjo kemudian ke kantor Bukanfu, Laksamana Muda Maeda, di Jalan Medan Merdeka Utara (rumah Maeda di Jalan Imam Bonjol 1). Maeda menyambut kedatangan mereka dengan ucapan selamat atas keberhasilan mereka di Dalat dan menjawab bahwa ia belum menerima konfirmasi serta masih menunggu instruksi dari Tokyo. Sepulang dari tempat Maeda, Soekarno dan Hatta segera mempersiapkan pertemuan PPKI pada pukul 10.00 pagi tanggal 16 Agustus keesokan harinya di kantor Jalan Pejambon No. 2 guna membicarakan segala sesuatu yang berhubungan dengan persiapan Proklamasi Kemerdekaan.\r\n\r\nSehari kemudian, gejolak tekanan yang menghendaki pengambilalihan kekuasaan oleh Indonesia makin memuncak dilancarkan para pemuda dari beberapa golongan. Rapat PPKI pada 16 Agustus pukul 10.00 pagi tidak dilaksanakan karena Soekarno dan Hatta tidak muncul.', 'Proklamasi-Kemerdekaan', '1', '2023-11-26', 'hajime', '20231126131642.jpg'),
(15, 'Kearifan Lokal Tiwul', 'Tiwul adalah makanan tradisional asli Indonesia yang dulu sempat menjadi makanan pokok pengganti nasi beras, seperti dilansir dari Wikipedia. Tiwul dibuat dari gaplek, yaitu singkong yang sudah dikeringkan dan dikukus. Masih banyak orang dari daerah Wonosobo, Gunungkidul, Wonogiri, Pacitan dan Blitar yang saat ini mengonsumsi tiwul meski bukan lagi menjadi makanan pokok.\r\n\r\nTidak diketahui secara pasti kapan tiwul mulai dibuat, namun tiwul menjadi makanan pokok sebagian besar rakyat Jawa pada masa penjajahan Jepang. Pada saat itu bahan makanan yang layak seperti nasi beras sangat sulit didapat dan tak mampu dibeli, pada akhirnya rakyat mencari bahan makanan lain pengganti nasi.', 'Kearifan-Lokal-Tiwul', '5', '2023-11-30', 'hajime', '20231130074647.jpg'),
(16, 'Kearifan Lokal Soto Kudus', 'Soto Kudus yaiku soto sing khas saka Kudus, Jawa Tengah, Indonésia. Soto iki terkenal karo kuahé sing adem khas lan nganggo daging ayam karo tambahan kerupuk lan tauge minangka pelengkap.', 'Kearifan-Lokal-Soto-Kudus', '5', '2023-12-01', 'hajime', '20231201043447.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `level` enum('Admin','Kontributor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `level`) VALUES
(19, 'Ferry', '902ba801f5ef78d54f3f6df616a9afb0', 'Fenrir ', 'Kontributor'),
(20, 'Admin', '81dc9bdb52d04dc20036dbd8313ed055', 'Chivo Poundra', 'Admin'),
(21, 'hajime', 'e807f1fcf82d132f9bb018ca6738a19f', 'MR. Munchausen', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id_carousel`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id_carousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
