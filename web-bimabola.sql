-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2024 at 10:11 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-bimabola`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_login`
--

CREATE TABLE `db_login` (
  `id_login` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_login`
--

INSERT INTO `db_login` (`id_login`, `nama`, `username`, `password`) VALUES
(3, 'Bima', 'bima', '7fcba392d4dcca33791a44cd892b2112');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `penulis` varchar(50) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `kategori`, `judul`, `penulis`, `isi`, `tanggal`, `gambar`) VALUES
(1, 'Liga Indonesia', 'Usai Dipecat Persebaya, Josep Gombau Resmi Latih Aston Villa U-21', 'Asad Arifin', 'Bola.net - Dipecat Persebaya Surabaya membuka jalan bagi Josep Gombau untuk berkarier di Eropa. Pria asal Spanyol itu baru saja meneken kontrak untuk menjadi pelatih Aston Villa U-21.\r\n\r\nAston Villa U-21 baru saja mengumumkan nama Josep Gombau sebagai pelatih baru mereka. Pelatih 47 tahun itu itu akan menggantikan peran Inigo Idiakez yang gagal meraih hasil memuaskan pada musim 2023/2024 ini.\r\n\r\n\"Aston Villa dengan bangga mengumumkan penunjukan Josep Gombau sebagai Pelatih Kepala U-21 klub yang baru,\" tulis pernyataan resmi klub pada hari Kamis (12/1/2024) waktu setempat.', '2024-01-13', '1.jpg'),
(2, 'Tim Nasional', 'Jadwal Lengkap Fase Grup Piala Asia 2023 di RCTI dan iNews TV', 'Ari Prayoga', 'Bola.net - Jadwal pertandingan babak penyisihan grup Piala Asia 2023, 12 hingga 25 Januari 2024. Fase grup Piala Asia dimulai Jumat, 12 Januari 2024 hari ini, siaran langsung di RCTI dan iNews TV serta live streaming di Vision+.\r\n\r\nTurnamen sepak bola paling bergengsi di Asia kembali digelar. Perhelatan empat tahunan ini sejatinya diselanggarakan di China pada edisi 2023 ini. Namun, AFC akhirnya memindahkan status tuan rumah ke Qatar.\r\n\r\nSebanyak 24 tim yang dibagi ke dalam enam grup bakal ambil bagian dalam turnamen ini. Timnas Indonesia menjadi salah satunya. Ini adalah keikutsertaan pertama Tim Garuda sejak edisi 2007 silam.', '2024-01-13', '2.jpg'),
(28, 'Tim Nasional', 'Sikap Cuek Shin Tae-yong Lihat Ranking FIFA Timnas Indonesia Jelang Piala Asia 2023: Itu Hanya Angka', 'Asad Arifin', 'Bola.net - Shin Tae-yong tidak ambil pusing melihat status Timnas Indonesia sebagai tim dengan ranking FIFA kedua paling rendah di Piala Asia 2023. Bagi sang pelatih, catatan itu hanyalah sebuah angka.\r\n\r\nBerdasarkan ranking FIFA terbaru pada 21 Desember 2023, Timnas Indonesia menempati posisi ke-146, hanya lebih baik ketimbang sesama kontestan Piala Asia 2023, Timnas Hong Kong.\r\n\r\nHong Kong menduduki peringkat ke-150. Sementara, Timnas Jepang menjadi kesebelasan dengan ranking FIFA tertinggi karena bercokol di posisi ke-17.', '2024-01-20', '401_jepang.jpg'),
(30, 'Liga Indonesia', 'Sebelum Pilih Milomir Seslija, Persis Solo Sempat Seleksi 10 Pelatih Termasuk Eks Timnas Indonesia', 'Asad Arifin', 'Bola.net - Persis Solo menimbang banyak nama sebelum memilih Milomir Seslija sebagai pelatih baru di BRI Liga 1 2023/2024. Tak tanggung-tanggung, ada 10 pelatih yang sempat masuk audisi calon juru taktik Persis.\r\n\r\nManajer Persis Solo, Chairul Basalamah, mengakui proses pemilihan pelatih baru berlangsung dalam waktu yang kurang ideal. Setelah itu, pihaknya mengerucutkan variabel pemilihannya.\r\n\r\nLaskar Sambernyawa akhirnya mendata nama-nama pelatih yang pernah berkarier di Indonesia. Nantinya mereka tidak punya waktu lama untuk mempersiapkan Persis menghadapi lanjutan BRI Liga 1 2023/2024.', '2024-01-18', '549_milomir.jpg'),
(31, 'Liga Indonesia', 'Jonathan Arya Prawira Senang Banyak Belajar dari Pemain-Pemain Senior Arema FC', 'Asad Arifin', 'Bola.net - Pemain muda Arema FC, Jonathan Arya Prawira, angkat bicara soal pengalaman pertama bermain bersama para seniornya. Jojo, sapaan karibnya, mengaku senang bisa banyak belajar dari Johan Ahmat Farisi dan kawan-kawan.\r\n\r\nJojo mendapat kesempatan emas merumput bersama skuad Arema FC pada laga uji coba kontra Persikoba Kota Batu, Sabtu (13/01). Dalam laga yang dihelat di Stadion Gajayana tersebut, ia tampil mempesona.\r\n\r\nJojo bermain pada babak kedua. Pemain asal Sidoarjo tersebut mengemas dua dari sepuluh gol Arema FC ke gawang Persikoba Kota Batu.\r\nMenurut Jojo, ini menjadi pengalaman berharga baginya. Pemain berusia 22 tahun ini mengaku mendapat banyak pelajaran berharga dari pemain-pemain seniornya.\r\n\r\n\"Saya belajar banyak dari para pemain senior. Saya ambil pengalamannya juga, semua yang baik dari pemain senior, agar saya bisa lebih baik lagi ke depannya,\" kata Jojo.\r\n\r\nJojo sendiri merupakan satu dari tiga pemain Arema U-20 yang sempat dipanggil berlatih bersama tim senior usai libur Natal dan Tahun Baru. Saat ini, dua rekannya tersebut sudah harus kembali ke tim U-20.\r\n\r\nMenurut Jojo, ia sempat merasakan grogi saat pertama kali ikut berlatih bersama tim senior. Namun, saat ini, ia sudah tak lagi merasa canggung.\r\n\r\n\"Para senior selalu memberi semangat dan motivasi. Mereka juga sering memberi saran tentang cara bermain, Ini yang saya praktikkan di lapangan. Semua pemain senior adalah panutan saya,\" ujar Jojo.\r\n\r\n\"Saya juga mengikuti pesan pelatih agar bisa menjaga kondisi dan meningkatkan lagi kualitas permainan,\" katanya.\r\n\r\nJojo pun mengisahkan perjalanannya sebelum bergabung dengan Arema FC. Sebelumnya, pemain asal Sidoarjo ini sempat membawa tim kampung halamannya meraih medali emas ajang Porprov Jatim VIII 2023 lalu.\r\n\r\n\"Kebetulan waktu itu dipantau coach Joko (Susilo). Kemudian saya masuk tim U-20 tahun ini. Akhirnya, saya dipanggil ke tim senior,\" ucap Jojo.\r\n\r\n(Bola.net/Dendy Gandakusumah)', '2024-01-31', '799_arema.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_login`
--
ALTER TABLE `db_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_login`
--
ALTER TABLE `db_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
