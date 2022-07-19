-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2020 at 03:54 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipelik`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_paket`
--

CREATE TABLE `data_paket` (
  `id_paket` int(5) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `jenis_paket` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `harga_total` int(20) NOT NULL,
  `gambar_paket` varchar(150) NOT NULL,
  `jumlah_tersedia` int(5) NOT NULL,
  `status_paket` enum('0','1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_paket`
--

INSERT INTO `data_paket` (`id_paket`, `nama_paket`, `jenis_paket`, `keterangan`, `harga_total`, `gambar_paket`, `jumlah_tersedia`, `status_paket`) VALUES
(1, 'Gold Facial', 'Glowing Facial', 'Perawatan wajah yang mengkombinasikan mikrodermabrasi ringan, ultrasound, dan masker emas murni.\r\nBermanfaat untuk menghaluskan, melembabkan, dan mencerahkan kulit.\r\nSesuai untuk kulit kering, normal, dan berminyak tanpa jerawat.\r\n\r\n', 150000, 'gold.png', 10, '1'),
(2, 'Silver Facial', 'Glowing Facial', 'Silver Facial merupakan perawatan wajah yang mengkombinasikan mikrodermabrasi ringan dengan ultrasound dan masker silver murni. Silver murni bekerja dengan menyerang langsung pada melanin kulit sehingga menjadikan kulit lebih putih serta dapat menyamarkan/mengurangi pigmentasi. Silver juga kaya akan mineral yang sangat baik dalam pemulihan kulit yang dehidrasi. Sesuai untuk kulit kering, dehidrasi, normal, berminyak, kusam, pigmentasi.\r\n\r\n', 150000, 'silver.jpg', 10, '1'),
(3, 'Green Tea Facial', 'Anti Acne Facial', 'Green Tea Facial merupakan perawatan wajah dengan menggunakan cleanser, scrub, massage cream dan masker ekstrak green tea. Sesuai untuk kulit normal, berminyak, dan berjerawat. \r\nManfaat dan khasiat dari green tea : Mencegah dan mengurangi bahkan menyembuhkan kulit yang berjerawat, Mengandung Anti Bacteria atau yang sering disebut dengan Antibiotik yang berfungsi untuk membunuh kuman/ bakteri, Mengurangi degradasi dari membran sel dengan mensetralisir radikal bebas karena green tea merupakan zat anti oxidant yang sangat kuat, Mengurangi timbunan lemak yang ada pada kulit, Meremajakan kulit\r\n', 100000, 'greentea.jpg', 10, '1'),
(4, 'Bio Acne Light Therapy', 'Anti Acne Facial', 'Bio Acne Light Therapy merupakan terapi dengan Blue Light untuk menyembuhkan jerawat dan mengontrol kelebihan minyak. Jerawat yang meradang terjadi karena adanya sumbatan pada pori kulit akibat minyak yang berlebih sehingga memberi peluang P. Acne, bakteri penyebab jerawat, untuk berkembang biak. Blue Light bekerja dengan cara mengontrol dan mengurangi P. Acne, untuk mengurangi produksi minyak yang berlebih sehingga tidak menyumbat pori. Jerawat dapat mengering hanya dalam sekali terapi.\r\n\r\n', 140000, 'bioacne.jpg', 10, '1'),
(5, 'Dark Chocolate Facial', 'Organic Facial', 'Dark Chocolate Facial merupaakan perawatan wajah dengan cleanser, scrub, massage cream, dan masker dari coklat asli. Sesuai untuk kulit kering, normal, dan berminyak tanpa jerawat. Cocoa Butter merupakan unsur atau kandungan terkuat yang terdapat dalam coklat yang berfungsi melapisi dan melindungi kulit dari kotoran, polusi, sinar matahari, menyerap kotoran yang menempel pada kulit serta melembutkan dan menghaluskan kulit. Kemudian, selain memiliki kandungan Antioxidant yang cukup tinggi yang disebut dengan ORAC (Oxygen Radical Absorption Capacity) yang berperan sebagai penghambat terjadinya oksidasi oleh udara bebas, coklat juga kaya akan kandungan seperti lemak jenuh dan tak jenuh, Asam Amino, Protein, Karbohidrat, Kalium, Magnesium, serta berbagai macam vitamin A, B, B2, B6, B12, C dan E yang sangat baik untuk kesehatan kulit.\r\n\r\nSelain itu, coklat masih memiliki manfaat dan khasiat yang lain, seperti:\r\n\r\nMengandung antioksidan tinggi dan moisturizer untuk perawatan anti-aging\r\nMencegah kulit kering dan keriput\r\nMencegah pertumbuhan bakteri pada kulit\r\nMemperbaiki jaringan sel-sel kulit yang rusak\r\nMemperlancar sirkulasi oksigen pada kulit\r\n', 90000, 'darkcoklat.jpg', 10, '1'),
(6, 'Honey Facial', 'Organic Facial', 'Honey Facial merupakan perawatan wajah dengan menggunakan cleanser, scrub, massage cream dan masker dari ramuan dengan madu asli. Perawatan ini  sesuai untuk kulit kering, normal dan sensitif.  Madu selain mengandung Anti Oxidant yang berasal dari beberapa vitamin dan mineral yang terkandung di dalamanya dapt mencegah penuaan dini,  madu juga mengandung Anti Bacteria atau yang disebut dengan Antibiotik yang berfungsi untuk membunuh kuman, menetralkan dan menyembuhkan iritasi/infeksi, mencegah dan menyembuhkan jerawat, serta mengandung zat Progenetic Stonulous yang membantu meningkatkan keaktifan jaringan kulit.\r\n\r\nKemudian madu juga kaya akan kandungan seperti mineral, protein, karbohidrat, vitamin: A, B1, B2, B3, B5, B6, C, D, E dan K, zat besi, kalsium, magnesium, yodium, phospor, dan asam amino yang berperan sangat besar dalam menutrisi dan menyehatkan kulit. Kelebihan madu yang lainnya adalah, madu memiliki daya pengikat air yang cukup tinggi sehingga sangat baik dalam membantu melembabkan kulit, mencegah dehidrasi pada kulit, dan menghambat keriput.\r\n\r\n', 90000, 'madu.jpg', 10, '1'),
(18, 'Bengkoang Facial', 'Whitening Facial', 'Untuk memutihkan dan menghaluskan kulit wajah', 90000, 'bengkoang.jpg', 10, '1'),
(24, 'Collagen Facial', 'Mouisturizing Facial', 'Collagen Facial merupakan perawatan muka dengan kombinasi mikrodermabrasi ringan, infusi serum kolagen dan masker kolagen. Dengan bantuan ultrasound molekul kolagen dapat terpenetrasi ke dalam kulit untuk mengembalikan keelastisan dan kekencengan kulit, menaikkan kelembaban kulit, dan menjaga keutuhan kolagen alami kulit. Sesuai untuk kulit normal, kering, dan kusam.\r\n\r\n', 140000, 'kolagen.jpg', 10, '1'),
(25, 'Jet Peel Facial', 'Glowing Facial', 'Terapi peremajaan dengan aliran oksigen bertekanan tinggi untuk mengangkat sel kulit mati, memberi nutrisi, melembabkan kulit, dan mencegah timbulnya jerawat. Sesuai untuk semua jenis kulit, juga aman untuk kulit sensitif sekalipun.', 150000, 'jetpeel.jpg', 10, '1'),
(26, 'Bio Radiance Light Theraphy', 'Bio Light Therapy', 'Bio Radiance Light Therapy adalah terapi dengan menggunakan Orange Light untuk mengatasi kulit kusam. Orange Light sangat direkomendasikan untuk acara special, seperti pemotretan, wedding, dating ataupun untuk kebutuhan sehari-hari dimana kita menginginkan kulit wajah kita terlihat lebih segar, sehat, dan radiance look.', 120000, 'biorad.jpg', 10, '1');

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE `keuangan` (
  `id_keuangan` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `id_pesanan` int(5) NOT NULL,
  `id_paket` int(5) NOT NULL,
  `tanggal_transfer` date NOT NULL,
  `jumlah_transfer` varchar(50) NOT NULL,
  `bukti_transfer` varchar(200) NOT NULL,
  `catatan` text NOT NULL,
  `status_keuangan` enum('0','1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`id_keuangan`, `id_user`, `id_pesanan`, `id_paket`, `tanggal_transfer`, `jumlah_transfer`, `bukti_transfer`, `catatan`, `status_keuangan`) VALUES
(1, 8, 2, 1, '0000-00-00', '150000', 'buktitransfer.jpg', 'Sudah dibayar', '1'),
(4, 9, 7, 26, '2020-06-01', '120000', 'buktitransfer.jpg', 'Sudah dibayar', '1'),
(5, 14, 6, 2, '2020-05-19', '150000', 'buktitransfer.jpg', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_paket` int(5) NOT NULL,
  `waktu_pilih` varchar(10) NOT NULL,
  `metode_bayar` varchar(10) NOT NULL,
  `keterangan_tambahan` text NOT NULL,
  `status_pesanan` enum('0','1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_user`, `email`, `id_paket`, `waktu_pilih`, `metode_bayar`, `keterangan_tambahan`, `status_pesanan`) VALUES
(2, 8, 'herfinaintan@gmail.com', 1, '09.00 WIB', 'BRI', '', '1'),
(3, 14, 'fin@gmail.com', 3, '11.00 WIB', 'BNI', '', '2'),
(5, 14, 'fin@gmail.com', 4, '09.00 WIB', 'BNI', 'akan segera dibayar', '2'),
(6, 14, 'fin@gmail.com', 2, '11.00 WIB', 'BRI', '', '1'),
(7, 9, 'customer1@gmail.com', 5, '13.00 WIB', 'BNI', '', '1'),
(8, 9, 'customer@gmail.com', 26, '11.00 WIB', 'BNI', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `nama_pengirim` varchar(100) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `isi_ulasan` varchar(200) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ulasan`
--

INSERT INTO `ulasan` (`id_ulasan`, `nama_pengirim`, `nama_paket`, `isi_ulasan`, `tanggal`) VALUES
(7, 'Herfina', 'Honey Facial', 'RECOMMENDED BANGETTT', '2020-05-17 13:35:52'),
(9, 'Intan', 'Gold Facial', 'Wajib coba! Recommended banget', '2020-05-17 15:06:08'),
(10, 'Customer1', 'Honey Facial', 'Mau banget coba, tapi cocok ngga ya untuk kulit berminyak dan berjerawat?', '2020-05-17 15:51:26');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(35) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `level` enum('admin','owner','customer') NOT NULL,
  `status_user` enum('0','1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `username`, `password`, `no_hp`, `level`, `status_user`) VALUES
(8, 'herfina', 'herfinaintan@gmail.com', 'herfina', 'ec98659f5a8e4760914dd9bd24eeebd4', '085728331002', 'customer', '1'),
(9, 'customer', 'customer@gmail.com', 'customer', '91ec1f9324753048c0096d036a694f86', '085728331001', 'customer', '1'),
(10, 'admin', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '085728331001', 'admin', '1'),
(12, 'admin1', 'admin1@gmail.com', 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', '085728331005', 'admin', '1'),
(14, 'fina', 'fin@gmail.com', 'fina', 'c89ee91ad8cdf83841d3b743413e403a', '085728331000', 'customer', '1'),
(16, 'owner', 'owner@gmail.com', 'owner', '72122ce96bfec66e2396d2e25225d70a', '085728331000', 'owner', '1'),
(17, 'intan', 'intan@gmail.com', 'intan', 'b1098cab9c2db3eb9f576eb66c33449c', '085728331000', 'customer', '1'),
(18, 'customer2', 'customer2@gmail.com', 'customer2', '5ce4d191fd14ac85a1469fb8c29b7a7b', '085728331009', 'customer', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_paket`
--
ALTER TABLE `data_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id_keuangan`),
  ADD KEY `fk_paket3` (`id_paket`) USING BTREE,
  ADD KEY `indeks_pemesanan` (`id_pesanan`),
  ADD KEY `fk_customer` (`id_user`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `indeks_paket` (`id_paket`) USING BTREE,
  ADD KEY `indeks_customer` (`id_user`);

--
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id_ulasan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_paket`
--
ALTER TABLE `data_paket`
  MODIFY `id_paket` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id_keuangan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD CONSTRAINT `fk_customer` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `indeks_pemesanan` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`),
  ADD CONSTRAINT `keuangan_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `data_paket` (`id_paket`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `indeks_customer` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `data_paket` (`id_paket`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
