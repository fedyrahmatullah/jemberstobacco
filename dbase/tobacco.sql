-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Des 2018 pada 05.05
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tobacco`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `no_hp` varchar(14) CHARACTER SET latin1 NOT NULL,
  `pesan` varchar(225) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data untuk tabel `feedback`
--

INSERT INTO `feedback` (`id`, `tanggal`, `email`, `no_hp`, `pesan`) VALUES
(1, '2018-12-03 10:48:05', 'rayaraya@gmail.com', '09876545765', 'hallo saya pesan'),
(4, '2018-12-03 11:40:56', 'budicihuy@gmail.com', '085657565758', 'saya mencoba segalanya'),
(5, '2018-12-03 11:42:43', 'saya2@gmail.com', '082123345454', 'mencoba lebih baik'),
(6, '2018-12-03 16:42:46', 'fedy@gmail.com', '083938948923', 'jangan menjadi orang yang semena mena kepada orang lain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petani`
--

CREATE TABLE `petani` (
  `Id_Tani` int(11) NOT NULL,
  `nama_petani` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `no_handphone` varchar(50) CHARACTER SET latin1 NOT NULL,
  `class` varchar(50) CHARACTER SET latin1 NOT NULL,
  `foto_profil` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL,
  `retype_password` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data untuk tabel `petani`
--

INSERT INTO `petani` (`Id_Tani`, `nama_petani`, `email`, `no_handphone`, `class`, `foto_profil`, `password`, `retype_password`) VALUES
(10, 'fedy', 'fedy@gmail.com', '082726378973292', '9991001991200192010921', '', 'fedy12', 'fedy12'),
(12, 'raya', 'samsu@gmail.com', '082121231111', 'dk123', '', 'qw', 'qw'),
(13, 'budi', 'email@gmail.com', '076543459', '0987654590-', '', 'as', 'as'),
(14, 'Hasbi', 'hasbi@gmail.com', '08545129125276812', '9991001991200192010921', 'IMG-2017111', 'zx', 'zx'),
(15, 'Khairul', 'kahriul@gmail.com', '0897754647767', '997322763237463734', 'IMG-20171118-WA0014.jpg', '12', '12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `postingan`
--

CREATE TABLE `postingan` (
  `id_postingan` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tgl_buat` date NOT NULL,
  `tgl_update` date NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `kunjungan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `postingan`
--

INSERT INTO `postingan` (`id_postingan`, `judul`, `tgl_buat`, `tgl_update`, `gambar`, `isi`, `kategori`, `kunjungan`) VALUES
(7, 'IT_SKA', '2018-11-05', '2018-11-25', 'artikel1.jpg', '<p>ksgwhjaksjbscndbcdsvbdajbvdjv</p>\r\n', 'Informasi', 8),
(8, 'AAAAAAAAA', '2018-11-05', '2018-11-05', 'etiket_ska.gif', '<p>gaffhs,cjdsbcndkcdscnmsd</p>\r\n', 'informasi', 1),
(9, 'fvck', '2018-11-05', '2018-11-05', '4-2-i-alphabet-png-thumb.png', '<p>anjer</p>\r\n', 'Informasi', 0),
(10, 'kjg', '2018-11-05', '2018-11-05', '4-2-i-alphabet-png-thumb.png', '<p>qwertyuiop</p>\r\n', 'Informasi', 2),
(11, 'Percobaan 11', '2018-11-06', '2018-11-22', 'artikel2.jpg', '<p>Percobaan 11</p>\r\n', 'Informasi', 1),
(12, 'edit', '2018-11-19', '2018-11-26', 'tembakau.jpg', '<p>coba coba coba</p>\r\n', 'Informasi', 9),
(13, 'tembakau di jember melimpah sampai ke pelosok pelosok desa pun bercocok tanam tembakau ini.', '2018-11-19', '2018-11-27', 'back.jpg', '<p>aku yakin bisa sda;ddjfcdsncdsbvdjsv dsdusfhdufhdjsfuasdhnsdds&nbsp; ufhs fshdfdjnffn dh dnsn n s s</p>\r\n\r\n<p>&nbsp;fsdb hd fyhf&nbsp;</p>\r\n\r\n<p>&nbsp;foufuhsfjh sjdhfuhdso</p>\r\n\r\n<p>&nbsp;usfueh ehufhe&nbsp;</p>\r\n\r\n<p>jdncjncjnsicnsjdncjsncjsdncjncdnncjdncjcnsjncjsdncjsndcjsncdcnsdjncsncsdjnceuheuhuehfuehfuehusouhsuohosuehfosuefhues</p>\r\n\r\n<p>oeeoshoshfusfuoehueshueshfsefnsjoncsenfcscosnveofiwejfiewjfiewfhefewjfiewjfiwejfiewfjiejfiejfiejoiwjfnfvnvfufewjodwijieojfiefjiefjoiwjfief</p>\r\n\r\n<p>&nbsp;ewuhf</p>\r\n', 'Informasi', 38),
(14, 'Tingginya Harga Tembakau di Jember Tembus Rp55.500 Per Kilogram', '2018-12-04', '2018-12-04', 'berita1.jpg', '<p>Jember (Antara Jatim) - Harga jual tembakau kasturi di Kabupaten Jember, Jawa Timur untuk masa panen tahun 2017 cukup tinggi berkisar Rp50.000 hingga Rp55.500 per kilogram untuk kualitas &quot;top grade&quot; tembakau kering.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Kalau saya bilang tahun ini harga tembakau tertinggi sepanjang sejarah selama saya menanam tembakau puluhan tahun karena didukung cuaca yang bagus dan tingginya permintaan dari pabrikan,&quot; kata Ketua Asosiasi Petani Tembakau Kasturi Jember Abdurrahman di Jember, Jumat.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Menurutnya tingginya harga tembakau karena kualitas daun tembakau yang dipanen juga bagus akibat cuaca yang sangat mendukung dan tingginya permintaan pabrikan akan bahan baku rokok tersebut.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Tahun ini sepanjang sejarah luas lahan tembakau di Jember paling rendah yakni sekitar 5.000 hektare karena tahun-tahun sebelumnya biasanya lebih dari 5.000 hektare, bahkan tahun lalu sekitar 6.000 hektare,&quot; tuturnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Berkurangnya luas lahan tembakau, lanjut dia, karena petani masih trauma dengan anjloknya harga tembakau akibat hujan abu Gunung Raung dan dampak kemarau basah atau La Nina yang menyebabkan petani rugi jutaan rupiah.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Tahun ini, petani tidak memiliki modal untuk menanam tembakau akibat rugi tahun lalu, sehingga luas lahan tembakau sangat berkurang dan banyak petani yang beralih menanam tanaman lain yang tidak membutuhkan biaya perawatan tinggi,&quot; katanya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Selain itu, lanjut dia, permintaan pabrikan cukup tinggi yakni sekitar 10.000 ton untuk bahan baku rokok, sedangkan produksi tembakau kasturi milik petani se-Jember diprediksi hanya maksimal 7.500 ton, sehingga berlaku hukum ekonomi.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Ada dua jenis tembakau yang dijual di pabrikan yakni tembakau kering dengan harga maksimal atau top grade sebesar Rp55.500 per kilogram, dan tembakau setengah kering yang harganya maksimal Rp29.000 per kilogram,&quot; ujarnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ia berharap harga tembakau tetap membaik pada tahun-tahun mendatang karena Jember merupakan salah satu kabupaten yang memiliki komoditas tembakau terbaik di Indonesia. &nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kepala Dinas Tanaman Pangan Hortikultura dan Perkebunan Jember Maskur mengatakan harga jual tembakau kasturi cukup bagus tahun 2017 dibandingkan tahun 2016 karena faktor cuaca dan permintaan pabrikan meningkat.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Tahun ini luas lahan tembakau di Jember sangat berkurang karena banyak petani yang beralih menanam komoditas lain karena takut merugi seperti tahun-tahun sebelumnya, sehingga diprediksi produksi tembakau di Jember belum cukup untuk memenuhi kebutuhan pabrikan,&quot; katanya.(*)</p>\r\n', 'Informasi', 0),
(18, 'aad', '0000-00-00', '0000-00-00', 'haha.png', 'aduhh parahh', 'informasi', 1),
(19, 'sadfsad', '0000-00-00', '0000-00-00', 'IMG-20171118-WA0017.jpg', '<p>sdafsda</p>\r\n', 'Informasi', 0),
(21, 'aku mencoba', '2018-12-11', '2018-12-11', 'IMG-20171119-WA0001.jpg', '<p>Tif C 2017 KOMPAK</p>\r\n', 'Informasi', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pos_tani`
--

CREATE TABLE `pos_tani` (
  `id_pos` int(11) NOT NULL,
  `nama` varchar(30) CHARACTER SET latin1 NOT NULL,
  `gambar` varchar(100) CHARACTER SET latin1 NOT NULL,
  `stok` int(11) NOT NULL,
  `tgl_buat` date NOT NULL,
  `tgl_update` date NOT NULL,
  `jenis_tembakau` varchar(30) CHARACTER SET latin1 NOT NULL,
  `isi` text CHARACTER SET latin1 NOT NULL,
  `kunjungan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data untuk tabel `pos_tani`
--

INSERT INTO `pos_tani` (`id_pos`, `nama`, `gambar`, `stok`, `tgl_buat`, `tgl_update`, `jenis_tembakau`, `isi`, `kunjungan`) VALUES
(1, '', '', 120, '2018-12-11', '2018-12-11', 'Informasi', '<p>zZz</p>\r\n', 0),
(2, '', '', 120, '2018-12-11', '2018-12-11', 'Informasi', '<p>jdc</p>\r\n', 0),
(3, '', '', 20, '2018-12-11', '2018-12-11', 'Informasi', '<p>asaasasas</p>\r\n', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`,`username`);

--
-- Indeks untuk tabel `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `petani`
--
ALTER TABLE `petani`
  ADD PRIMARY KEY (`Id_Tani`);

--
-- Indeks untuk tabel `postingan`
--
ALTER TABLE `postingan`
  ADD PRIMARY KEY (`id_postingan`);

--
-- Indeks untuk tabel `pos_tani`
--
ALTER TABLE `pos_tani`
  ADD PRIMARY KEY (`id_pos`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `petani`
--
ALTER TABLE `petani`
  MODIFY `Id_Tani` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `postingan`
--
ALTER TABLE `postingan`
  MODIFY `id_postingan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `pos_tani`
--
ALTER TABLE `pos_tani`
  MODIFY `id_pos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
