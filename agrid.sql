-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2018 at 04:56 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrid`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `alamatID` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `namaAlamat` varchar(200) NOT NULL,
  `kecamatan` varchar(32) NOT NULL,
  `kelurahan` varchar(32) NOT NULL,
  `kota` varchar(32) NOT NULL,
  `provinsi` varchar(32) NOT NULL,
  `kodePos` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategoriID` int(10) NOT NULL,
  `namaKategori` varchar(32) NOT NULL,
  `deskripsiKategori` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `cartID` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `produkID` int(10) NOT NULL,
  `totalHarga` int(15) NOT NULL,
  `jumlah_produk` int(15) NOT NULL,
  `status` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`cartID`, `userID`, `produkID`, `totalHarga`, `jumlah_produk`, `status`) VALUES
(3, 2, 7, 10000, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `produkID` int(10) NOT NULL,
  `produkNama` varchar(32) NOT NULL,
  `deskripsiProduk` text NOT NULL,
  `gambar` varchar(32) NOT NULL,
  `harga` int(15) NOT NULL,
  `jumlah` int(15) NOT NULL,
  `berat` int(15) NOT NULL,
  `totalDibeli` int(11) NOT NULL,
  `lokasi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`produkID`, `produkNama`, `deskripsiProduk`, `gambar`, `harga`, `jumlah`, `berat`, `totalDibeli`, `lokasi`) VALUES
(1, 'Pupuk NPK Mutiara 16', 'Made in: Rusia \r\nSpesifikasi: Nitrogen (N) 16% Fosfor (P205) 16% Kalium (K20) 16% Magnesium Oksida (MgO) 1,5% Kalsium Oksida (CaO) 5% \r\nBerat: 1Kg \r\n\r\nPupuk NPK 16:16:16 Mutiara adalah pupuk pada masa bertumbuhan, berkualitas terpercaya yang sudah dipakai oleh petani di seluruh dunia. Dengan segala kelebihan dan keutamaannya pupuk ini dapat meningkatkan produksi serta meningkatkan kualitas panen.', 'R_1.jpg', 17000, 1, 1, 1, 'Kota Malang'),
(4, 'Pupuk Tanaman NPK', 'Berat 150gram \r\ntotal berat 50gram \r\nbotol plastik tebal dilengkapi 2 tutup yang tdk kedap bocor dan tdk mudah pecah. \r\n\r\nKeuntungan menggunakan pupuk NPK YaraMila \r\n\r\n1. Pupuk YaraMila adalah pupuk majemuk yang diproduksi dengan teknologi mutakhir dengan komposisi hara yang merata pada setiap butiran prill, sehingga memudahkan aplikasi baik sebagai pupuk dasar maupun pupuk susulan tanaman. Mudah larut dalam air sehingga sangat cocok untuk aplikasi sistem cor dan penaburan langsung di atas permukaan tanah secara merata maupun larikan. \r\n\r\n2. Kandungan unsur hara pada pupuk YaraMila sangat cepat diserap oleh tanaman, sehingga dapat memacu pertumbuhan tanaman serta meningkatkan kualitas buah dan hasil produksi. \r\n\r\n3. Pupuk YaraMila memberikan reaksi super cepat pada tanaman karena sebagian Nitrigen dalam bentuk NO3 (Nitrate) yang langsung tersedia bagi tanaman dan dapat membantu membantu penyerapan unsur hara Kalium, Magnesium, dan Kalsium sehingga dapat mempercepat proses pembungaan, pembuahan dan memacu pertumbuhan pada pucuk tanaman serta menekan serangan jamur dan penyakit. \r\n\r\n4. Sangat cocok digunakan pada semua jenis Tanaman Buah, Bunga, Sayuran, Tanaman Pangan dan Palawija serta Tanaman Perkebunan (Kelapa Sawit, Coklat, Karet, Kopi, dll). \r\n\r\n5. Dosis pemakaian: sistem tabur 100-1000 kg/ha dan sistem cor 4-10 kg/200 liter air.\r\n\r\n', 'R_2.jpg', 10500, 1, 1, 1, 'Kab. Malang'),
(5, 'Pupuk Bunga Pemacu', 'Pupuk ISTIMEWA dengan kandungan Nitrat Nitrogen (NO3) dan Kalium (K20) yang mudah dan cepat diserap tanaman, berguna untuk merangsang pembungaan, pembuahan tanaman, serta meningkatkan kualitas hasil panen. \r\n\r\nManfaat untuk tanaman sayuran atau buah buahan : \r\n- Mudah diserap oleh tanaman, sehingga pertumbuhan tanaman lebih cepat dan seragam. Terutama untuk tanaman sayuran / buah di pot , untuk tanaman di kebun juga dianjurkan menggunakan ini agar hasil super maksimal \r\n- pupuk ini tidak boleh digunakan untuk proses pembenihan dari biji / menanam biji / benih \r\n- Meningkatkan ketahanan tanaman terhadap penyakit yang disebabkan oleh bakteri atau jamur karena sel tanaman lebih padat. \r\n- Merangsang pembentukan bunga dan memperbaiki kualitas buah. \r\n- Panen menjadi lebih serempak. \r\n- Buah menjadi lebih tahan terhadap penyimpanan dan pengiriman jarak jauh.\r\n- Kandungan Chlor (Cl) sangat rendah sehingga tidak menyebabkan keracunan pada tanaman.\r\n\r\n', 'R_3.jpg', 12000, 1, 1, 1, 'Kab. Malang'),
(6, 'Pupuk NPK Bianglala', 'PT BUMI INDO RAHARJA \r\n\r\nSpesifikasi: Nitrogen (N) 16% Phospate (P205) 16% Kalium (K20) 16% \r\nBerat: 1Kg \r\n\r\nPupuk NPK 16:16:16 Bianglala adalah pupuk pada masa bertumbuhan, berkualitas terpercaya yang sudah dipakai oleh petani di seluruh dunia. Dengan segala kelebihan dan keutamaannya pupuk ini dapat meningkatkan produksi serta meningkatkan kualitas panen. \r\n\r\nAdapun Manfaat Pupuk NPK Bianglala adalah : \r\n-Menjadikan daun tanaman lebih segar dan hijau yang akan mempermudah proses fotosintesis Meningkatkan perkembangan akar, sehingga perakaran menjadi lebih sehat, kuat, lebat, lebih cepat tinggi serta menambah jumlah anakan lebih banyak \r\n-Batang menjadi lebih kuat dan kokoh yang akan berdampak dengan ketahanan tanaman dari serangan hama dan penyakit serta meminimalisir resiko rebah (roboh) \r\n-Mengakselerasi pembentukan bunga dan pemasakan biji, meningkatkan kandungan protein sehingga masa panen menjadi lebih cepat. Memperbesar jumlah biji serta buah pada setiap tangkai sehingga pembentukan karbohidrat dan pati lebih lancar. Ketahanan hasil panen selama pengangkutan dan penyimpanan menjadi lebih lama \r\n\r\nKeuntungan Pupuk NPK Bianglala : \r\n-Hampir tidak ada efek negatif serta resiko dalam penggunaan dan pencampuran di lahan \r\n-Kandungan unsurnya merata dan seimbang pada setap butirannya \r\n-Berbentuk butiran homogen yang lebih mudah dalam pengaplikasiannya\r\n-Sudah terbukti dan teruji selama puluhan tahun dalam meningkatkan produksi pertanian \r\n-Pupuk NPK 16:16:16 Bianglala seluruhnya larut dalam air yang akan lebih cepat dan mudah diserap tanaman dengan kandungan unsur hara makro yang lengkap yang terdiri dari Nitrogen, Posfor dan Kalium serta unsur hara mikro Kalsium (Ca), Magneium (Mg), Sulfur (S), protein dan lain-lain yang akan menjadikan tanaman lebih sehat, sempurna dan kuat.\r\n\r\n', 'P_1.jpg', 10000, 1, 1, 1, 'Kota Malang'),
(7, 'Pupuk NPK Rumput', 'untuk pemupukan rumput bisa menggunakan pupuk NPK. isi 250 gram. bisa untuk lahan 10 meter.', 'P_2.jpg', 10000, 1, 1, 2, 'Kota Malang'),
(8, 'Pupuk Super Tanaman Hias', 'Isi 250 ml \r\n\r\nkandungan unsur Nitrogen (N) sampai 60% sehingga membuat tanaman hias daun dan sayuran menjadi lebih hijau dan sehat. \r\n\r\nbotol plastik tebal dilengkapi 2 tutup yang tdk kedap bocor dan tdk mudah pecah. \r\n\r\nKeuntungan menggunakan pupuk esabe seed ini: \r\n- Mudah larut dalam air sehingga sangat cocok untuk aplikasi sistem cor dan penaburan langsung di atas permukaan tanah secara merata maupun larikan. \r\n- Sangat cepat diserap oleh tanaman, sehingga dapat memacu pertumbuhan tanaman serta meningkatkan hasil produksi \r\n- Pupuk tanaman ini memberikan reaksi berbeda dengan npk biasana. \r\n- Pupuk organik ini merangsang daun, merangsang warna daun, merangsang tunas baru, memacu pertumbuhan, memacu akar baru, melebarkan daun. \r\nSangat cocok digunakan pada semua jenis Tanaman hias daun, sayur dan tanaman hijau lainnya, aman buat tanaman yg bs dikomsumsi', 'P_3.jpg', 12000, 1, 1, 1, 'Kab. Malang');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `ratingID` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `produkID` int(10) NOT NULL,
  `nilaiRating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `reviewID` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `produkID` int(10) NOT NULL,
  `pesan` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(10) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `jenisKelamin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `nama`, `email`, `password`, `telepon`, `jenisKelamin`) VALUES
(2, 'Faiz', 'admin@admin.com', '$2y$10$qDC3cfp78kVMUMaNhh1ZpeFEvRGqMQyXpMhCqIbKiZf7DDuhCijae', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `userorder`
--

CREATE TABLE `userorder` (
  `orderID` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `produkID` int(10) NOT NULL,
  `jumlah` int(15) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`alamatID`),
  ADD KEY `fk_user` (`userID`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategoriID`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`cartID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`produkID`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`ratingID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`reviewID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `userorder`
--
ALTER TABLE `userorder`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `fk_produk` (`produkID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alamat`
--
ALTER TABLE `alamat`
  MODIFY `alamatID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategoriID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `cartID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `produkID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `ratingID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userorder`
--
ALTER TABLE `userorder`
  MODIFY `orderID` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alamat`
--
ALTER TABLE `alamat`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `userorder`
--
ALTER TABLE `userorder`
  ADD CONSTRAINT `fk_produk` FOREIGN KEY (`produkID`) REFERENCES `produk` (`produkID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
