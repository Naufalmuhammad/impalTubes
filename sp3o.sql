-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2019 at 03:32 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sp3o`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `Id_Pelanggan` varchar(10) NOT NULL,
  `Nama_Pelanggan` varchar(255) NOT NULL,
  `AlamatLengkap_Pelanggan` varchar(255) NOT NULL,
  `NomorTelepon_Pelanggan` int(13) NOT NULL,
  `Email_Pelanggan` varchar(255) NOT NULL,
  `Kodepos_Pelanggan` int(11) NOT NULL,
  `Negara_Pelanggan` varchar(255) NOT NULL,
  `Provinsi_Pelanggan` varchar(255) NOT NULL,
  `Kota_Pelanggan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`Id_Pelanggan`, `Nama_Pelanggan`, `AlamatLengkap_Pelanggan`, `NomorTelepon_Pelanggan`, `Email_Pelanggan`, `Kodepos_Pelanggan`, `Negara_Pelanggan`, `Provinsi_Pelanggan`, `Kota_Pelanggan`) VALUES
('PL1', 'Kumala Dewi Tunjung Sekar', 'Jalan Merdeka Nomor 13 RT.01/RW.09', 876665554, 'kumala@gmail.com', 40113, 'Indonesia', 'Jawa Barat', 'Bandung'),
('PL2', 'Astri Asroviana Putri', 'Jalan Sarijadi Nomor 23 RT.02/RW.12', 857776664, 'astri@gmail.com', 40151, 'Indonesia', 'Jawa Barat', 'Bandung'),
('PL3', 'Maharani Padma Utami', 'Jalan Pungkur Nomor 16 RT.05/RW.12', 876564543, 'rani@gmail.com', 40252, 'Indonesia', 'Jawa Barat', 'Bandung'),
('PL4', 'Fredi Anriko', 'Jalan Turangga Nomor 43 RT.04/RW.14', 829998887, 'fredi@gmail.com', 40264, 'Indonesia', 'Jawa Barat', 'Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan produk`
--

CREATE TABLE `pemesanan produk` (
  `Id_Pemesanan_Produk` varchar(10) NOT NULL,
  `Id_Produk` varchar(10) NOT NULL,
  `Id_Pelanggan` varchar(10) NOT NULL,
  `Jumlah_Produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan produk`
--

INSERT INTO `pemesanan produk` (`Id_Pemesanan_Produk`, `Id_Produk`, `Id_Pelanggan`, `Jumlah_Produk`) VALUES
('PP1', 'PR1', 'PL1', 1),
('PP2', 'PR2', 'PL2', 2),
('PP3', 'PR2', 'PL3', 1),
('PP4', 'PR3', 'PL4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan sparepart`
--

CREATE TABLE `pemesanan sparepart` (
  `Id_Pemesanan_Sparepart` varchar(255) NOT NULL,
  `Id_Sparepart` varchar(255) NOT NULL,
  `Jumlah_Sparepart` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan sparepart`
--

INSERT INTO `pemesanan sparepart` (`Id_Pemesanan_Sparepart`, `Id_Sparepart`, `Jumlah_Sparepart`) VALUES
('PS1', 'SP1', 10),
('PS2', 'SP2', 3),
('PS3', 'SP4', 4),
('PS4', 'SP5', 6);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `Id_Produk` varchar(10) NOT NULL,
  `Nama_Produk` varchar(255) NOT NULL,
  `Jumlah_Produk` int(11) NOT NULL,
  `Spesifikasi_1` varchar(255) NOT NULL,
  `Spesifikasi_2` longtext NOT NULL,
  `Harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`Id_Produk`, `Nama_Produk`, `Jumlah_Produk`, `Spesifikasi_1`, `Spesifikasi_2`, `Harga`) VALUES
('PR1', 'Japstyle Imut', 4, 'cocok untuk dibawa santai di dalam kota', 'Tipe Mesin : 4 Langkah, DOHC – 4 Katup\r\nKapasitas Mesin: 149.16 cc\r\nSistem Pendingin Mesin : Liquid Cooled with Auto Fan\r\nSistem Suplai Bahan Bakar  :   PGM-FI\r\nDiameter x Langkah    :    57.3 x 57.8 mm\r\nerbandingan Kompresi    :    11.3:1\r\nDaya Maksimum   :     12.4 kW (16.9 PS) / 9,000 rpm\r\nTorsi Maksimum   :     13.8 Nm (1.41 kgf.m) / 7,000 rpm \r\nPola Perpindahan Gigi    : 1 – N – 2 – 3 – 4 – 5 – 6 (manual)\r\nStarting System    :    Pedal & Elektrik\r\nTipe Kopling   :     Multiple Wet Clutch Coil Spring\r\nSistem Pelumasan    :    Wet\r\nPanjang x Lebar x Tinggi   :  2.019 x 719 x 1.039 mm\r\nJarak Sumbu Roda : 1.293 mm\r\nJarak Terendah ke Tanah  : 169 mm\r\nKetinggian Tempat Duduk  :   797 mm\r\nBerat Kosong  :  136 kg\r\nKapasitas Tangki Bahan Bakar  :  12 liter \r\nTipe Baterai : MF Wet 12V 5Ah\r\nTipe Busi        : NGK MR9C-9N atau ND U27EPR-N9 \r\nTipe Suspensi Belakang   :  Lengan Ayu Dengan Suspensi Tunggal (Sistem Pro-Link)\r\nUkuran Ban Depan     :   100/80-17 52P (Tubeless)\r\nUkuran Ban Belakang     :   130/70-17 62P (Tubeless)\r\nTipe Rem Depan dan Belakang  :  Cakram Hidrolik', 30000000),
('PR2', 'Japstyle Menawan', 5, 'cocok untuk kalian yang suka dengan motor modifikasi simple bermesin garang', 'Tipe  : DOHC, liquid-cooled, 4-stroke, single-cylinder\r\nKapasitas  :  249 cc\r\nDiameter x Langkah   : 76mm x 55mm\r\nRasio Kompresi    :    10 .7:1\r\nTenaga Maksimal     :   18,2Kw / 8.500 rpm\r\nTorsi Maksimal     :   22,6 Nm / 6750 rpm\r\nTransmisi     :   6 percepatan\r\nSuplai Bahan Bakar    :    PGM-FI\r\nSistem Kopling     :   Multi-plate hydraulic\r\nKapasitas Oli    :    1.8 Liter\r\nStarter    :     Electric. \r\nPanjang: 2210 mm\r\nLebar  :        900 mm\r\nTinggi : 1425 mm\r\nTinggi Jok : 895 mm\r\nJarak Sumbu Roda : 1.445 mm\r\nJarak Terendah : 270 mm\r\nBerat : 155 kg\r\nKapasitas Tangki : 10.1 liter\r\nTipe Rangka :        twin-spar aluminum chassis\r\nUkuran Ban Depan        : 21 inci 3.00\r\nUkuran Ban Belakang : 18 inci 120/80\r\nRem Dapan : Floating Wave Disk 256mm with twin-piston caliper\r\nRem Belakang : Wave Disk  220mm with single-piston caliper\r\nSuspensi Depan : Upside Down 43mm inverted fork\r\nSuspensi Belakang : Pro-Link single shock', 65000000),
('PR3', 'Japstyle Garang', 4, 'cocok untuk kalian yang suka penampilan garang dalam mengendarai motor', 'Tipe        : DOHC Parallel Twin Cylinders 4-stroke 8-valve\r\nKapasitas : 471,0 cc\r\nKarburasi : PGM-FI (Programmed Fuel Injection\r\nBore x Stroke : 67 mm x 66.8 mm\r\nRasio Kompresi : 10.7 : 1\r\nTenaga Maksimum : 35 kW/8,500 rpm\r\nTorsi Maksimum : 43 Nm/7,000 rpm\r\nTipe Starter : Electric Starter\r\nSistem Pendingin : Liquid Cooled\r\nKapasitas Oli : 3,2L\r\nTipe Kopling : Wet Multiplate with Coil Spring\r\nTipe Transmisi : Constant Mesh 6-Speed Return\r\nTipe Rangka : Diamond frame, steel pipe\r\nPanjang x Lebar x Tinggi : 2,075 mm x 780 mm x 1,060 mm\r\nJarak Sumbu Roda : 1,410 mm\r\nJarak dengan Tanah : 155 mm\r\nTinggi Jok : 790 mm\r\nBerat Kotor : 192 kg\r\nSudut Kemiringan : 25.5°/102.6 mm\r\nKapasitas Tangki BBM : 15.5 Liters\r\nSuspensi Depan : Telescopic with 41 mm Fork\r\nSuspensi Belakang: Steel Square Pipe Swingarm with Pro-link system and Single Shock with 9 Position Spring-Preload Adjustability\r\nRem Depan : Twin-Piston Caliper with single 320 mm Wavy Disc (2-Channel Type of ABS/Anti-lock Braking System)\r\nRem Belakang : Single Piston Caliper with 240 mm Single Wavy Disc (2-Channel Type of ABS/Anti-lock Braking System)\r\nRoda Depan : 120/70ZR – 17M/C\r\nRoda Belakang : 160/60ZR – 17M/C\r\nHeadlights : 60/55 W x 1 Light', 120000000);

-- --------------------------------------------------------

--
-- Table structure for table `sparepart`
--

CREATE TABLE `sparepart` (
  `Id_Sparepart` varchar(10) NOT NULL,
  `Nama_Sparepart` varchar(255) NOT NULL,
  `Jumlah_Sparepart` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sparepart`
--

INSERT INTO `sparepart` (`Id_Sparepart`, `Nama_Sparepart`, `Jumlah_Sparepart`) VALUES
('SP1', 'Tangki Bensin', 20),
('SP2', 'Lampu Pesek', 6),
('SP3', 'Busi Brisk CR10ZS', 10),
('SP4', 'Cakram', 8);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `Id_Supplier` varchar(10) NOT NULL,
  `Nama_Supplier` varchar(255) NOT NULL,
  `Alamat_Supplier` varchar(255) NOT NULL,
  `Nomor_Telepon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi pelanggan`
--

CREATE TABLE `transaksi pelanggan` (
  `Id_transaksi` int(11) NOT NULL,
  `Id_Pemesanan_Produk` varchar(10) NOT NULL,
  `Total_Pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi pelanggan`
--

INSERT INTO `transaksi pelanggan` (`Id_transaksi`, `Id_Pemesanan_Produk`, `Total_Pembayaran`) VALUES
(2019010101, 'PP1', 30000000),
(2019010102, 'PP2', 60000000),
(2019010103, 'PP3', 65000000),
(2019010104, 'PP4', 120000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`Id_Pelanggan`);

--
-- Indexes for table `pemesanan produk`
--
ALTER TABLE `pemesanan produk`
  ADD PRIMARY KEY (`Id_Pemesanan_Produk`);

--
-- Indexes for table `pemesanan sparepart`
--
ALTER TABLE `pemesanan sparepart`
  ADD PRIMARY KEY (`Id_Pemesanan_Sparepart`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`Id_Produk`);

--
-- Indexes for table `sparepart`
--
ALTER TABLE `sparepart`
  ADD PRIMARY KEY (`Id_Sparepart`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`Id_Supplier`);

--
-- Indexes for table `transaksi pelanggan`
--
ALTER TABLE `transaksi pelanggan`
  ADD PRIMARY KEY (`Id_transaksi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
