-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2018 at 04:24 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE `detail_order` (
  `no_transaksi` int(11) NOT NULL,
  `no_makanan` int(11) NOT NULL,
  `no_user` int(11) NOT NULL,
  `jumlah_makanan` int(11) NOT NULL,
  `total_harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_order`
--

INSERT INTO `detail_order` (`no_transaksi`, `no_makanan`, `no_user`, `jumlah_makanan`, `total_harga`) VALUES
(1, 3, 10, 1, 12000),
(1, 3, 10, 1, 12000),
(1, 3, 10, 1, 12000),
(1, 3, 10, 1, 12000),
(1, 3, 10, 1, 12000),
(1, 3, 10, 1, 12000),
(2, 4, 11, 5, 30000),
(3, 5, 11, 5, 106000),
(3, 5, 11, 5, 106000),
(3, 5, 11, 5, 106000),
(3, 5, 11, 5, 106000),
(4, 4, 10, 1, 40000),
(2, 4, 10, 3, 105000),
(2, 8, 10, 3, 105000),
(2, 8, 10, 3, 105000),
(2, 8, 10, 3, 105000),
(2, 1, 10, 1, 20000),
(2, 3, 10, 1, 12000),
(2, 4, 10, 1, 17000),
(18, 22, 14, 4, 160000),
(18, 14, 14, 1, 6000),
(31, 23, 14, 1, 30000),
(31, 24, 14, 1, 35000),
(32, 23, 14, 1, 30000),
(32, 24, 14, 1, 35000),
(33, 23, 14, 1, 30000),
(33, 24, 14, 1, 35000),
(48, 23, 14, 1, 30000),
(48, 24, 14, 1, 35000),
(49, 23, 14, 1, 30000),
(49, 24, 14, 1, 35000),
(50, 23, 14, 1, 30000),
(50, 24, 14, 1, 35000),
(51, 23, 14, 1, 30000),
(51, 24, 14, 1, 35000),
(52, 23, 14, 1, 30000),
(52, 24, 14, 1, 35000),
(53, 23, 14, 1, 30000),
(53, 24, 14, 1, 35000),
(54, 23, 14, 1, 30000),
(54, 24, 14, 1, 35000);

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id_makanan` int(11) NOT NULL,
  `nama_makanan` varchar(255) NOT NULL,
  `deskripsi_makanan` varchar(255) NOT NULL,
  `harga_makanan` int(11) NOT NULL,
  `kategori_makanan` varchar(255) NOT NULL,
  `gambar_makanan` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id_makanan`, `nama_makanan`, `deskripsi_makanan`, `harga_makanan`, `kategori_makanan`, `gambar_makanan`) VALUES
(1, 'Kani Maki', 'Makimono yang dililit dengan nori dan berisi kani', 20000, 'Makimono', 'meenu_181114_0001.jpg'),
(2, 'nasi goreng rendang', 'nasi goreng dengan potongan rendang', 25000, 'nasi goreng', 'meenu_181114_0002.jpg'),
(3, 'Salmon Maki', 'Makimono yang dililit dengan nori dan berisi salmon', 12000, 'Makimono', 'meenu_181114_0003.jpg'),
(4, 'Tamago Maki', 'Makimono yang dililit dengan nori dan berisi tamago', 17000, 'Makimono', 'meenu_181114_0004.jpg'),
(5, 'Crispy Maki', 'Makimono yang dililit dengan nori dan berisi ayam', 15000, 'Makimono', 'meenu_181114_0005.jpg'),
(6, 'Chuka Kurage', 'appetizer yang berasa gurih dan nikmat', 7000, 'Appetizer', 'meenu_181114_0006.jpg'),
(7, 'Chuka Idako', 'Gurita fresh yang cocok untuk dijadikan sebagai hidangan pembuka', 12000, 'Appetizer', 'meenu_181114_0007.jpg'),
(8, 'Chuka Wakame', 'Appetizer yang rasa nya sangat segar', 35000, 'Appetizer', 'meenu_181114_0008.jpg'),
(9, 'Kappa Maki', 'Makimono yang dililit dengan nori dan berisi timun jepang', 25000, 'Makimono', 'meenu_181114_0009.jpg'),
(10, 'Maguro Maki', 'Makimono yang dililit dengan nori dan berisi tuna', 23000, 'Makimono', 'meenu_181114_0010.jpg'),
(11, 'Tempura Tobiko Maki', 'Makimono yang dililit dengan nori dan berisi tempura', 17000, 'Makimono', 'meenu_181114_0011.jpg'),
(12, 'Mentaiko Crunchy Salmon', 'Sushi roll yang berisi salmon dan topping crunchy', 30000, 'FushionIsi8', 'meenu_181114_0012.jpg'),
(13, 'Mr. Crunchy Crab', 'Sushi roll yang berisi kepiting dan topping crunchy', 25000, 'FushionIsi8', 'meenu_181114_0013.jpg'),
(14, 'Crunchy Salmon', 'Sushi roll yang berisi salmon dan topping crunchy', 6000, 'FushionIsi4', 'meenu_181114_0014.jpg'),
(15, 'Otoro Carpacio', 'Salmon mentah yang dibaluri dengan bumbu rahasia khas sushi knight', 6000, 'Makimono', 'meenu_181114_0015.jpg'),
(16, 'Hachiko Roll', 'Sushi roll berisi tuna dengan topping cheese melt', 6000, 'FushionIsi8', 'meenu_181114_0016.jpg'),
(17, 'Sushi Knight Roll', 'Sushi dengan lumuran mayonaise dan berisi kani, tempura, dan selada', 35000, 'FushionIsi8', 'meenu_181114_0017.jpg'),
(18, 'Crazy Tuna Roll', 'Sushi berisi tuna dengan taburan biji wijen dan lumuran mayonaise', 40000, 'FushionIsi8', 'meenu_181114_0018.jpg'),
(19, 'Daisuki Roll', 'Sushi yang digoreng dengan isi rumput laut, tamago dan beef', 30000, 'FushionIsi8', 'meenu_181114_0019.jpg'),
(20, 'Spicy Hanami', 'Balutan salmon mentah dengan nasi mayonaise dan juga telor salmon(salmon roe)', 45000, 'BombSushi', 'meenu_181114_0020.jpg'),
(21, 'Melted Beef', 'nasi jepang yang dibalut dengan beef dilumuri dengan cheese yang meleleh', 35000, 'BombSushi', 'meenu_181114_0021.jpg'),
(22, 'Dragon Cheese Roll', 'Nasi jepang yang berisi dengan salmon, timun dan lumran mayonaise dengan toping salmon roe', 40000, 'FushionIsi4', 'meenu_181114_0022.jpg'),
(23, 'Tuna Salad Gunkan', 'Gunkan dengan balutan nori dan toping salad tuna', 30000, 'GunkanSushi', 'meenu_181114_0023.jpg'),
(24, 'Spicy Salmon Gunkan', 'Gunkan yang dibaluti dengan nori dan diisi dengan toping spicy salmon', 35000, 'GunkanSushi', 'meenu_181114_0024.jpg'),
(25, 'Chuka Idako', 'Gunkan yang dililit dengan nori dan diisi dengan toping gurita', 30000, 'GunkanSushi', 'meenu_181114_0025.jpg'),
(26, 'Tobiko Gunkan', 'Gunkan yang dililit dengan nori dan diisi dengan toping tobiko', 35, 'Gunkan Sushi', 'meenu_181114_0026'),
(27, 'Crabmeat Gunkan', 'Gunkan yang dililit dengan nori dan berisi dengan topping crabmeat', 30, 'Gunkan Sushi', 'meenu_181114_0027');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(255) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `order_status`) VALUES
(0, 1, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(255) NOT NULL,
  `product_quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_id`, `product_name`, `product_price`, `product_quantity`) VALUES
(0, 'Chuka Idako', 12000, 2),
(0, 'Dragon Cheese Roll', 40000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `total_transaksi` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `username`, `total_transaksi`) VALUES
(1, 'admin', 12000),
(2, 'admin', 20000),
(3, 'admin', 155000),
(4, 'admin', 120000),
(6, 'ozan', 80000),
(7, 'ozan', 64000),
(8, 'ozan', 64000),
(9, 'ozan', 64000),
(10, 'ozan', 64000),
(11, 'ozan', 64000),
(12, 'ozan', 64000),
(13, 'ozan', 64000),
(14, 'ozan', 64000),
(15, 'admin', 12000),
(16, 'admin', 106000),
(17, 'ozan', 40000),
(18, 'ozan', 40000),
(19, 'admin', 105000),
(20, 'admin', 105000),
(21, 'admin', 105000),
(22, 'admin', 105000),
(23, 'admin', 105000),
(24, 'admin', 105000),
(25, 'admin', 105000),
(26, 'admin', 105000),
(27, 'admin', 105000),
(28, 'admin', 105000),
(29, 'admin', 105000),
(30, 'admin', 49000),
(31, 'ozan', 166000),
(32, 'ozan', 65000),
(33, 'ozan', 65000),
(34, 'ozan', 65000),
(35, 'ozan', 65000),
(36, 'ozan', 65000),
(37, 'ozan', 65000),
(38, 'ozan', 65000),
(39, 'ozan', 65000),
(40, 'ozan', 65000),
(41, 'ozan', 65000),
(42, 'ozan', 65000),
(43, 'ozan', 65000),
(44, 'ozan', 65000),
(45, 'ozan', 65000),
(46, 'ozan', 65000),
(47, 'ozan', 65000),
(48, 'ozan', 65000),
(49, 'ozan', 65000),
(50, 'ozan', 65000),
(51, 'ozan', 65000),
(52, 'ozan', 65000),
(53, 'ozan', 65000),
(54, 'ozan', 65000),
(55, 'ozan', 65000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_telp` int(11) NOT NULL,
  `jalan` varchar(255) NOT NULL,
  `rt_rw` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kode_pos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama_user`, `email`, `password`, `no_telp`, `jalan`, `rt_rw`, `kecamatan`, `kelurahan`, `provinsi`, `kode_pos`) VALUES
(8, 'aaaaaaaaaa', 'aaaaaaa', 'aa@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808', 0, 'aaaa', 'aaaa', 'aaaa', 'aaa', 'aaa', 976),
(9, 'u', 'tierd', 'pusing@gmail.com', 'e2a7106f1cc8bb1e1318df70aa0a3540', 0, 'aaaa', 'aaaa', 'aaaa', 'aaa', 'aaa', 1234),
(10, 'admin', 'Ristra', 'admin@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 81234, 'aaaa', 'aaaa', 'aaaa', 'aaa', 'aaa', 1234),
(11, 'ristra', 'test', 'test@gmail.com', '3451a4bd2ac7b563adc03e176b1a7bf2', 812, 'aaaa', 'aaaa', 'aaaa', 'aaa', 'aaa', 1234),
(12, 'ristra', 'ristraaa', 'aa@gmail.com', '27f3f181fbe8a7e3f5ed0cc9031fe9bd', 0, 'jj', 'hh', 'gg', 'ff', 'dd', 1234),
(13, 'ristraaa', 'hahah', 'yuu@gmail.com', '27f3f181fbe8a7e3f5ed0cc9031fe9bd', 0, 'aa', 'jj', 'kk', 'kk', 'll', 98),
(14, 'ozan', 'ozan', 'ozan@gmail.com', '94eef9c11e4911feb785853fbb68a315', 0, '1', '2', '3', '4', '5', 12345);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD KEY `no_makanan` (`no_makanan`),
  ADD KEY `no_transaksi` (`no_transaksi`),
  ADD KEY `no_user` (`no_user`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id_makanan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD CONSTRAINT `detail_order_ibfk_1` FOREIGN KEY (`no_makanan`) REFERENCES `makanan` (`id_makanan`),
  ADD CONSTRAINT `detail_order_ibfk_2` FOREIGN KEY (`no_transaksi`) REFERENCES `transaksi` (`id_transaksi`),
  ADD CONSTRAINT `detail_order_ibfk_3` FOREIGN KEY (`no_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
