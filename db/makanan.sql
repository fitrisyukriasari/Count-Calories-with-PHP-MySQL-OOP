-- phpMyAdmin SQL Dump
-- version 4.3.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 24, 2016 at 04:12 PM
-- Server version: 10.0.15-MariaDB
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `makanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `makan`
--

CREATE TABLE IF NOT EXISTS `makan` (
  `jenis` text NOT NULL,
  `nama` text NOT NULL,
  `berat` text NOT NULL,
  `kalori` text NOT NULL,
  `berat2` text NOT NULL,
  `kalori2` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makan`
--

INSERT INTO `makan` (`jenis`, `nama`, `berat`, `kalori`, `berat2`, `kalori2`) VALUES
('Makanan Pokok', 'Jagung Rebus', '250', '90.2', '2.78', '1'),
('Makanan Pokok', 'Kentang Rebus', '200', '166', '1.21', '1'),
('Makanan Pokok', 'Ketan Putih', '120', '217', '0.56', '1'),
('Makanan Pokok', 'Ketupat', '160', '32', '5', '1'),
('Makanan Pokok', 'Lontong', '200', '38', '5.27', '1'),
('Makanan Pokok', 'Nasi Putih', '100', '175', '0.58', '1'),
('Makanan Pokok', 'Nasi Putih Kentucky', '225', '349', '0.65', '1'),
('Makanan Pokok', 'Roti Tawar Serat Tinggi', '60', '149', '0.41', '1'),
('Makanan Pokok', 'Singkong Rebus', '100', '146', '0.69', '1'),
('Makanan Pokok', 'Talas Rebus', '100', '98', '1.03', '1'),
('Makanan Pokok', 'Ubi Rebus', '100', '125', '0.8', '1'),
('Makanan Pokok', 'Bubur', '200', '44', '4.55', '1'),
('Makanan Pokok', 'Crakers', '50', '229', '0.22', '1'),
('Makanan Pokok', 'Makaroni', '25', '91', '0.28', '1'),
('Makanan Pokok', 'Mie Instant', '50', '168', '0.3', '1'),
('Makanan Pokok', 'Nasi Tim', '100', '88', '1.14', '1'),
('Makanan Pokok', 'Nasi Uduk', '200', '506', '0.4', '1'),
('Makanan Pokok', 'Roti Tawar', '50', '128', '0.4', '1'),
('Makanan Pokok', 'Bihun Goreng', '150', '296', '0.51', '1'),
('Makanan Pokok', 'Bubur Ayam', '200', '165', '1.22', '1'),
('Makanan Pokok', 'Bubur Sum-Sum', '100', '178', '0.57', '1'),
('Makanan Pokok', 'Kentang Goreng', '150', '211', '0.72', '1'),
('Makanan Pokok', 'Mie Goreng', '200', '321', '0.63', '1'),
('Makanan Pokok', 'Nasi Goreng', '100', '267', '0.38', '1'),
('Makanan Pokok', 'Soun Goreng', '100', '263', '0.39', '1'),
('Makanan Pokok', 'Spaghetti', '300', '642', '0.47', '1'),
('Makanan Pokok', 'Tape singkong', '150', '260', '0.58', '1'),
('Lauk Pauk', 'Arsik', '95', '94.05', '1.02', '1'),
('Lauk Pauk', 'Ayam Bakar Bumbu Kuning', '100', '129.4', '0.78', '1'),
('Lauk Pauk', 'Ayam Panggang', '100', '164.3', '0.61', '1'),
('Lauk Pauk', 'Daging Panggang', '70', '150', '0.47', '1'),
('Lauk Pauk', 'Ikan Mas Pepes', '200', '143.5', '1.4', '1'),
('Lauk Pauk', 'Sambal Goreng Tempe', '50', '116', '0.44', '1'),
('Lauk Pauk', 'Telur Asin Rebus', '75', '138', '0.55', '1'),
('Lauk Pauk', 'Telur Ayam Rebus', '60', '97', '0.62', '1'),
('Lauk Pauk', 'Udang Rebus', '100', '91', '1.1', '1'),
('Lauk Pauk', 'Ati Ayam Goreng', '50', '98', '0.52', '1'),
('Lauk Pauk', 'Ayam Pop', '200', '265', '0.76', '1'),
('Lauk Pauk', 'Bakso Daging Sapi', '100', '260', '0.39', '1'),
('Lauk Pauk', 'Empal Daging', '100', '147', '0.69', '1'),
('Lauk Pauk', 'Ikan Bandeng Goreng', '160', '180.7', '0.89', '1'),
('Lauk Pauk', 'Ikan Baronang Goreng', '120', '107.5', '1.12', '1'),
('Lauk Pauk', 'Ikan Bawal Goreng', '120', '113.3', '1.06', '1'),
('Lauk Pauk', 'Ikan Ekor Goreng', '100', '107.8', '0.93', '1'),
('Lauk Pauk', 'Ikan Kembung Goreng', '80', '87.65', '0.92', '1'),
('Lauk Pauk', 'Ikan Lele Goreng', '60', '57.5', '1.05', '1'),
('Lauk Pauk', 'Ikan Patin Goreng', '200', '252.7', '0.8', '1'),
('Lauk Pauk', 'Ikan Selar Goreng', '40', '63.75', '0.63', '1'),
('Lauk Pauk', 'Ikan Tenggiri Goreng', '60', '85.3', '0.71', '1'),
('Lauk Pauk', 'Ikan Teri Goreng', '50', '66', '0.76', '1'),
('Lauk Pauk', 'Ikan Tuna Goreng', '60', '110', '0.55', '1'),
('Lauk Pauk', 'Kerang Rebus', '100', '59', '1.7', '1'),
('Lauk Pauk', 'Macaroni Schootel', '50', '177', '0.29', '1'),
('Lauk Pauk', 'Tahu Bacem', '100', '147', '0.69', '1'),
('Lauk Pauk', 'Telur Mata Sapi', '60', '40', '1.5', '1'),
('Lauk Pauk', 'Tempe Bacem', '50', '157', '0.32', '1'),
('Lauk Pauk', 'Tempe Goreng', '50', '118', '0.43', '1'),
('Lauk Pauk', 'Tenggiri Bumbu Kuning', '90', '94.4', '0.96', '1'),
('Lauk Pauk', 'Udang Goreng Besar', '80', '68.25', '1.18', '1'),
('Lauk Pauk', 'Abon Sapi', '50', '158', '0.32', '1'),
('Lauk Pauk', 'Ayam Goreng Kecap', '75', '358.8', '0.21', '1'),
('Lauk Pauk', 'Ayam Panggang', '80', '385.6', '0.21', '1'),
('Lauk Pauk', 'Chiken Wing / Sayap Ayam', '50', '63.6', '0.79', '1'),
('Lauk Pauk', 'Daging Balado', '50', '147', '0.35', '1'),
('Lauk Pauk', 'Dendeng Balado', '40', '338', '0.12', '1'),
('Lauk Pauk', 'Gulai Ayam', '100', '165.3', '0.61', '1'),
('Lauk Pauk', 'Gulai Cumi', '100', '183', '0.55', '1'),
('Lauk Pauk', 'Gulai Kepala Ikan Kakap', '320', '218.8', '1.47', '1'),
('Lauk Pauk', 'Gulai Limpa', '60', '294', '0.21', '1'),
('Lauk Pauk', 'Gulai Tunjang', '80', '251', '0.32', '1'),
('Lauk Pauk', 'Ikan Kembung Balado', '125', '236.7', '0.53', '1'),
('Lauk Pauk', 'Ikan Teri', '50', '213', '0.24', '1'),
('Lauk Pauk', 'Kakap Goreng Tepung', '80', '119', '0.68', '1'),
('Lauk Pauk', 'Kakap Panir', '75', '220', '0.35', '1'),
('Lauk Pauk', 'Keripik Tempe', '25', '68', '0.37', '1'),
('Lauk Pauk', 'Meat Ball / Daging Cincang Bulat', '50', '168', '0.3', '1'),
('Lauk Pauk', 'Ayam Kentucky Paha Atas', '150', '194.5', '0.78', '1'),
('Lauk Pauk', 'Perkedel Jagung', '50', '108', '0.47', '1'),
('Lauk Pauk', 'Perkedel Kentang', '50', '123', '0.41', '1'),
('Lauk Pauk', 'Pu Yung Hai', '50', '114', '0.44', '1'),
('Lauk Pauk', 'Rendang Daging', '75', '285.5', '0.27', '1'),
('Lauk Pauk', 'Sate Ayam', '100', '466', '0.22', '1'),
('Lauk Pauk', 'Ayam Kentucky Sayap', '150', '116', '1.3', '1'),
('Lauk Pauk', 'Semur Ayam', '50', '177.8', '0.29', '1'),
('Lauk Pauk', 'Sambal Goreng Ati + Kentang', '100', '127', '0.79', '1'),
('Lauk Pauk', 'Sambal Goreng Tempe Teri', '150', '276', '0.55', '1'),
('Lauk Pauk', 'Sambal Goreng Ati Sapi', '100', '200', '0.5', '1'),
('Lauk Pauk', 'Sambal Goreng Udang + Kentang', '100', '123', '0.82', '1'),
('Lauk Pauk', 'Sop Sapi', '260', '227', '1.15', '1'),
('Lauk Pauk', 'Tahu Goreng', '100', '111', '0.91', '1'),
('Lauk Pauk', 'Tahu Isi', '150', '124', '1.21', '1'),
('Lauk Pauk', 'Tahu Sumedang', '100', '113', '0.89', '1'),
('Lauk Pauk', 'Telur dadar', '75', '188', '0.4', '1'),
('Sayuran', 'Acar Kuning', '75', '53', '1.42', '1'),
('Sayuran', 'Bening Bayam', '50', '18', '2.78', '1'),
('Sayuran', 'Cah Labu Siam', '100', '41.6', '2.41', '1'),
('Sayuran', 'Sayur Asam', '100', '88', '1.14', '1'),
('Sayuran', 'Sop Ayam Kombinasi', '100', '95', '1.06', '1'),
('Sayuran', 'Sop Bayam', '50', '78', '0.65', '1'),
('Sayuran', 'Sop Kimlo', '100', '104', '0.97', '1'),
('Sayuran', 'Sop Mutiara Jagung', '100', '113', '0.89', '1'),
('Sayuran', 'Asop Oyong Misoa', '100', '106', '0.95', '1'),
('Sayuran', 'Sop Telur Putuh', '100', '116', '0.87', '1'),
('Sayuran', 'Sayur Lodeh', '100', '61', '1.64', '1'),
('Sayuran', 'Cah Jagung Putren', '100', '59', '1.7', '1'),
('Sayuran', 'Cah Jkacang Panjang', '100', '72', '1.39', '1'),
('Sayuran', 'Sop Oyong Telur Puyuh', '100', '134', '0.75', '1'),
('Sayuran', 'Setup Kentang Buncis', '100', '95', '1.06', '1'),
('Sayuran', 'Tumis Buncis', '100', '52', '1.93', '1'),
('Sayuran', 'Tumis Daun Singkong', '120', '151', '0.8', '1'),
('Sayuran', 'Tumis Kc. Panjang + Jagung', '125', '118', '1.06', '1'),
('Sayuran', 'Buntil', '100', '106', '0.95', '1'),
('Sayuran', 'Gudeg', '150', '132', '1.14', '1'),
('Minuman', 'Te’h (Cangkir)', '1', '0.4', '2.5', '1'),
('Minuman', 'Kopi (Cangkir)', '1', '18', '0.06', '1'),
('Minuman', 'Juice Tomat (Gelas)', '100', '20', '5', '1'),
('Minuman', 'Juice Melon (Gelas)', '150', '35', '4.29', '1'),
('Minuman', 'Es Kelapa Muda (Gelas)', '100', '42', '2.39', '1'),
('Minuman', 'Es Cendol', '100', '168', '0.6', '1'),
('Minuman', 'Susu Skim', '15', '54', '0.28', '1'),
('Minuman', 'Coca Cola Diet (Kaleng)', '1', '1', '1', '1'),
('Siap Saji', 'Asinan', '250', '208', '1.21', '1'),
('Siap Saji', 'Toge Goreng', '250', '243', '1.03', '1'),
('Siap Saji', 'Gado – Gado', '150', '295', '0.51', '1'),
('Siap Saji', 'Ketoprak', '250', '153', '1.64', '1'),
('Siap Saji', 'Pempek', '200', '384', '0.53', '1'),
('Siap Saji', 'Rawon', '160', '331', '0.49', '1'),
('Siap Saji', 'Soto Ayam', '100', '101', '1', '1'),
('Siap Saji', 'Soto Padang', '100', '127', '0.79', '1'),
('Siap Saji', 'Tongseng', '120', '331', '0.37', '1'),
('Siap Saji', 'Hamburger', '125', '257', '0.49', '1'),
('Siap Saji', 'Kerupuk Palembang', '50', '168', '0.3', '1'),
('Siap Saji', 'Kerupuk Udang', '20', '72', '0.28', '1'),
('Siap Saji', 'Mie Bakso', '200', '302', '0.67', '1'),
('Siap Saji', 'Nasi Tim Ayam', '420', '588', '0.72', '1'),
('Siap Saji', 'Pizza', '125', '163', '0.77', '1'),
('Siap Saji', 'Sate Kambing', '180', '729', '0.25', '1'),
('Siap Saji', 'Sayur Krecek', '175', '249', '0.71', '1'),
('Siap Saji', 'Siomay', '100', '361', '0.28', '1'),
('Siap Saji', 'Soto Betawi', '150', '135', '1.12', '1'),
('Siap Saji', 'Soto Makasar', '150', '525', '0.29', '1'),
('Siap Saji', 'Soto Sulung', '150', '86', '1.75', '1'),
('Buah', 'Apel', '160', '92', '1.74', '1'),
('Buah', 'Apel Merah', '140', '82', '1.71', '1'),
('Buah', 'Belimbing', '160', '80', '2', '1'),
('Buah', 'Duku', '200', '81', '2.47', '1'),
('Buah', 'Jambu Air', '60', '35.4', '1.7', '1'),
('Buah', 'Jambu Biji', '320', '157', '2.04', '1'),
('Buah', 'Jeruk Medan', '140', '46', '3.05', '1'),
('Buah', 'Jeruk Pontianak', '150', '67', '2.24', '1'),
('Buah', 'Jeruk Sunkist', '200', '40', '5', '1'),
('Buah', 'Mangga Manalagi', '100', '72', '1.39', '1'),
('Buah', 'Nanas', '200', '104', '1.93', '1'),
('Buah', 'Pepaya', '100', '46', '2.18', '1'),
('Buah', 'Pir', '200', '80', '2.5', '1'),
('Buah', 'Pisang Rebus', '125', '136.5', '0.92', '1'),
('Buah', 'Salak', '150', '63.6', '2.36', '1'),
('Buah', 'Semangka', '150', '48', '3.13', '1'),
('Buah', 'Alpukat', '100', '85', '1.18', '1'),
('Buah', 'Anggur', '125', '60', '2.09', '1'),
('Buah', 'Lengkeng', '100', '79', '1.27', '1'),
('Buah', 'Melon', '120', '46', '2.61', '1'),
('Buah', 'Mangga Harum Manis', '300', '90', '3.34', '1'),
('Buah', 'Pir Hijau', '200', '105', '1.91', '1'),
('Buah', 'Pisang Ambon', '100', '74.2', '1.35', '1'),
('Buah', 'Pisang Barangan', '200', '236', '0.85', '1'),
('Buah', 'Pisang Mas', '125', '120', '1.05', '1'),
('Buah', 'Pisang Raja', '150', '126', '1.2', '1'),
('Buah', 'Sirsak', '125', '55', '2.28', '1'),
('Buah', 'Durian Montong', '100', '134', '0.75', '1'),
('Buah', 'Rambutan', '100', '69', '1.45', '1'),
('Buah', 'sawo', '100', '92', '1.09', '1'),
('Ringan', 'Arem – Arem', '75', '225', '0.34', '1'),
('Ringan', 'Bubur Kacang Ijo', '100', '102', '0.99', '1'),
('Ringan', 'Ketupat Ketan', '120', '216', '0.56', '1'),
('Ringan', 'Lemper', '70', '247', '0.29', '1'),
('Ringan', 'Lepet', '120', '210', '0.58', '1'),
('Ringan', 'Lepet Ketan', '170', '346', '0.5', '1'),
('Ringan', 'Bolu Gulung', '110', '300', '0.37', '1'),
('Ringan', 'Cakwee', '50', '143', '0.35', '1'),
('Ringan', 'Getuk Lindri', '60', '127', '0.48', '1'),
('Ringan', 'Hot Dog', '100', '285', '0.36', '1'),
('Ringan', 'Kerak Telur', '120', '599', '0.21', '1'),
('Ringan', 'Kue Nagasari', '70', '149', '0.47', '1'),
('Ringan', 'Kue Pancong', '80', '231', '0.35', '1'),
('Ringan', 'Mini Croissant', '80', '406', '0.2', '1'),
('Ringan', 'Sandwich', '100', '164', '0.61', '1'),
('Ringan', 'Serabi Pandan', '60', '137', '0.44', '1'),
('Ringan', 'Semar Mendem', '100', '247', '0.41', '1'),
('Ringan', 'Uli + Tape Ketan', '160', '559', '0.29', '1'),
('Ringan', 'Bakpia', '25', '68', '0.37', '1'),
('Ringan', 'Bakwan', '100', '270', '0.38', '1'),
('Ringan', 'Bika Ambon', '50', '99', '0.51', '1'),
('Ringan', 'Black Forrest', '200', '585', '0.35', '1'),
('Ringan', 'Cara Bikang', '70', '128', '0.55', '1'),
('Ringan', 'Cheese Cake', '10', '281', '0.04', '1'),
('Ringan', 'Dunkin Donat Keju', '170', '283', '0.61', '1'),
('Ringan', 'Emping Melinjo Asin', '25', '173', '0.15', '1'),
('Ringan', 'Kastengels (10 bh)', '100', '426', '0.24', '1'),
('Ringan', 'Keju Lembaran (1bh)', '20', '65', '0.31', '1'),
('Ringan', 'Kerupuk Mie', '25', '119', '0.22', '1'),
('Ringan', 'Klepon', '60', '68', '0.89', '1'),
('Ringan', 'Kroket Kentang', '75', '146', '0.52', '1'),
('Ringan', 'Kue Ape', '60', '151', '0.4', '1'),
('Ringan', 'Kue Cubit', '60', '183', '0.33', '1'),
('Ringan', 'Kue Cucur', '90', '152', '0.6', '1'),
('Ringan', 'Kue Ku', '50', '237', '0.22', '1'),
('Ringan', 'Kue Lumpur', '80', '232', '0.35', '1'),
('Ringan', 'Kue Pukis', '40', '181', '0.23', '1'),
('Ringan', 'Lapis Legit', '50', '307', '0.17', '1'),
('Ringan', 'Lemet/Timus', '120', '603', '0.2', '1'),
('Ringan', 'Lopis Ketan', '125', '350', '0.36', '1'),
('Ringan', 'Lumpia', '60', '76', '0.79', '1'),
('Ringan', 'Martabak Keju', '100', '265', '0.38', '1'),
('Ringan', 'Martabak Mesir', '100', '200', '0.5', '1'),
('Ringan', 'Martabak Telur', '95', '196', '0.49', '1'),
('Ringan', 'Muffin Coklat', '80', '361', '0.23', '1'),
('Ringan', 'Muffin Keju', '80', '400', '0.2', '1'),
('Ringan', 'Nastar (7bh)', '150', '538', '0.28', '1'),
('Ringan', 'Onde – Onde', '65', '317', '0.21', '1'),
('Ringan', 'Pastel', '75', '302', '0.25', '1'),
('Ringan', 'Potato Chip', '170', '298', '0.58', '1'),
('Ringan', 'Putu Mayang', '120', '98', '1.23', '1'),
('Ringan', 'Rempeyek Kacang', '50', '250', '0.2', '1'),
('Ringan', 'Risol', '100', '247', '0.41', '1'),
('Ringan', 'Roti Coklat', '100', '240', '0.42', '1'),
('Ringan', 'Sosis Solo', '50', '191', '0.27', '1'),
('Ringan', 'Sus Vla', '85', '129', '0.66', '1'),
('Ringan', 'Talam Hijau', '70', '292', '0.24', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
